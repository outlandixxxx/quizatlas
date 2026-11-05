<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExamPdfResource;
use App\Models\ExamPdf;
use App\Services\ExamPdfWorkflowService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class AdminExamPdfWorkflowController extends Controller
{
    public function transition(Request $request, ExamPdf $examPdf, string $action, ExamPdfWorkflowService $service)
    {
        abort_unless($request->user()?->isAdmin(), 403);
        $data = $request->validate(['version' => ['required', 'integer', 'min:1']] + $this->confirmations($action));
        $result = $service->transition($examPdf->id, (int) $data['version'], $action, $request->user(), $request->boolean('distribution_confirmed'));

        return ApiResponse::success(['document' => new ExamPdfResource($result['document']->load(['subject', 'major', 'preparationOptions'])), 'skipped' => $result['skipped']]);
    }

    public function batch(Request $request, ExamPdfWorkflowService $service)
    {
        abort_unless($request->user()?->isAdmin(), 403);
        $action = $request->input('action');
        $data = $request->validate([
            'action' => ['required', Rule::in(['verify', 'publish', 'verify-publish'])],
            'items' => ['required', 'array', 'list', 'min:1', 'max:100'],
            'items.*.id' => ['required', 'integer', 'min:1', 'distinct'],
            'items.*.version' => ['required', 'integer', 'min:1'],
        ] + $this->confirmations(is_string($action) ? $action : ''));
        $items = $data['items'];
        // Original exams precede corrections when both were selected on this page.
        $types = ExamPdf::whereIn('id', array_column($items, 'id'))->pluck('document_type', 'id');
        usort($items, fn ($a, $b) => [($types[$a['id']] ?? null) === 'correction' ? 1 : 0, $a['id']]
            <=> [($types[$b['id']] ?? null) === 'correction' ? 1 : 0, $b['id']]);
        $results = [];
        $counts = ['succeeded' => 0, 'skipped' => 0, 'failed' => 0];
        foreach ($items as $item) {
            try {
                $result = $service->transition((int) $item['id'], (int) $item['version'], $data['action'], $request->user(), $request->boolean('distribution_confirmed'));
                $status = $result['skipped'] ? 'skipped' : 'succeeded';
                $results[] = ['id' => (int) $item['id'], 'title' => $result['document']->title, 'status' => $status];
            } catch (ValidationException $exception) {
                $status = 'failed';
                $results[] = ['id' => (int) $item['id'], 'status' => $status, 'message' => implode(' ', array_merge(...array_values($exception->errors()))), 'errors' => $exception->errors()];
            } catch (HttpExceptionInterface|ModelNotFoundException|QueryException $exception) {
                $status = 'failed';
                $message = $exception instanceof QueryException ? 'A related record changed. Reload before retrying.'
                    : ($exception instanceof ModelNotFoundException ? 'This document no longer exists.' : $exception->getMessage());
                $results[] = ['id' => (int) $item['id'], 'status' => $status, 'message' => $message];
            }
            $counts[$status]++;
        }

        return ApiResponse::success(['counts' => $counts, 'results' => $results]);
    }

    public function destroy(Request $request, ExamPdf $examPdf, ExamPdfWorkflowService $service)
    {
        abort_unless($request->user()?->isAdmin(), 403);
        $data = $request->validate(['version' => ['required', 'integer', 'min:1'], 'confirmed' => ['required', 'accepted']]);
        try {
            $service->delete($examPdf->id, (int) $data['version'], $request->user());
        } catch (QueryException $exception) {
            abort(409, 'This PDF is referenced by another record. Reload its associations before deleting it.');
        }

        return ApiResponse::success(['id' => $examPdf->id], 'PDF record deleted. Its stored file was retained.');
    }

    private function confirmations(string $action): array
    {
        return [
            'distribution_confirmed' => in_array($action, ['verify', 'verify-publish'], true) ? ['required', 'accepted'] : ['sometimes', 'boolean'],
            'publication_confirmed' => in_array($action, ['publish', 'verify-publish'], true) ? ['required', 'accepted'] : ['sometimes', 'boolean'],
        ];
    }
}
