<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Concours\AnnouncementIndexRequest;
use App\Http\Requests\Concours\SaveAnnouncementRequest;
use App\Http\Requests\Concours\TransitionAnnouncementRequest;
use App\Http\Resources\ConcoursAnnouncementResource;
use App\Http\Resources\ConcoursPdfResource;
use App\Models\ExamPdf;
use Illuminate\Http\Request;
use App\Models\ConcoursAnnouncement;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class AdminConcoursAnnouncementController extends Controller
{
    public function index(AnnouncementIndexRequest $request, ConcoursAnnouncementService $service): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);

        return ApiResponse::success($service->listing($request->validated(), false));
    }

    public function show(int $announcement): JsonResponse
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('view', $record);

        return $this->result($record);
    }

    public function revisions(AnnouncementIndexRequest $request, int $announcement): JsonResponse
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('view', $record);
        $page = $record->revisions()->orderByDesc('version')->paginate(20);

        return ApiResponse::success(['items' => $page->items(), 'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => 20, 'total' => $page->total()]]);
    }

    public function store(SaveAnnouncementRequest $request, ConcoursAnnouncementService $service): JsonResponse
    {
        $this->authorize('create', ConcoursAnnouncement::class);

        return $this->write(fn () => $service->save($request->validated(), $request->user()), 201);
    }

    public function update(SaveAnnouncementRequest $request, int $announcement, ConcoursAnnouncementService $service): JsonResponse
    {
        $this->authorize('update', ConcoursAnnouncement::findOrFail($announcement));

        return $this->write(fn () => $service->save($request->validated(), $request->user(), $announcement));
    }

    public function transition(TransitionAnnouncementRequest $request, int $announcement, string $action, ConcoursAnnouncementService $service): JsonResponse
    {
        $this->authorize('update', ConcoursAnnouncement::findOrFail($announcement));

        return $this->write(fn () => $service->transition($announcement, $request->integer('version'), $action, $request->user()));
    }

    public function attachments(int $announcement): JsonResponse
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('view', $record);

        return ApiResponse::success(['pdfs' => ConcoursPdfResource::collection($record->officialPdfs()->get()),
            'official_urls' => $record->additional_official_urls ?? []]);
    }

    public function previewAttachment(int $announcement, ExamPdf $examPdf): mixed
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('view', $record);
        abort_unless($record->officialPdfs()->whereKey($examPdf->id)->exists(), 404);
        abort_unless($examPdf->availableFile(), 404);

        return app(\App\Http\Controllers\User\ExamPdfController::class)->adminOfficialPdf($examPdf);
    }

    public function destroy(Request $request, int $announcement, ConcoursAnnouncementService $service): JsonResponse
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('update', $record); // The existing announcement policy controls admin writes.
        $data = $request->validate(['version' => ['required', 'integer', 'min:1']]);
        $service->delete($announcement, (int) $data['version'], $request->user());

        return ApiResponse::success(['id' => $announcement], 'Announcement deleted.');
    }

    private function write(callable $operation, int $status = 200): JsonResponse
    {
        try {
            return $this->result($operation(), $status);
        } catch (QueryException $exception) {
            if ($exception->getCode() === '23505' || str_contains($exception->getMessage(), 'UNIQUE constraint')) {
                throw ValidationException::withMessages(['slug' => 'This slug is already in use.']);
            }
            if ($exception->getCode() === '23503' || str_contains($exception->getMessage(), 'FOREIGN KEY constraint')) {
                return ApiResponse::error('A related record changed. Reload and try again.', null, 409);
            }
            throw $exception;
        }
    }

    private function result(ConcoursAnnouncement $record, int $status = 200): JsonResponse
    {
        return ApiResponse::success(new ConcoursAnnouncementResource($record->load(['concours.category', 'concours.institution', 'institution', 'officialPdf', 'preparationOptions'])), 'Announcement saved.', $status);
    }
}
