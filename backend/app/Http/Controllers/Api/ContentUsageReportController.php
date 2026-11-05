<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ContentUsage\Registry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContentUsageReportController extends Controller
{
    public function __invoke(Request $request, Registry $registry)
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
        $data = $request->validate([
            'operation_id' => ['required', 'uuid'], 'attempt' => ['required', 'integer', 'min:1'],
            'token' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/'],
            'event' => ['required', Rule::in(['heartbeat', 'progress', 'complete', 'fail', 'cancel', 'retry'])],
            'output' => ['sometimes', 'array', 'max:10'],
            'output.*.kind' => ['required', Rule::in(['video', 'revision'])],
            'output.*.name' => ['required', 'string', 'regex:/^[a-zA-Z0-9][a-zA-Z0-9_.-]{0,127}$/'],
            'output.*.sha256' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/'],
            'output.*.bytes' => ['required', 'integer', 'min:1', 'max:9007199254740991'],
            'output.*.source_ids' => ['sometimes', 'array', 'max:50000'],
            'output.*.source_ids.*' => ['required', 'integer', 'min:1', 'distinct'],
        ]);
        $output = array_map(fn ($v) => array_intersect_key($v, array_flip(['kind', 'name', 'sha256', 'bytes', 'source_ids'])), $data['output'] ?? []);
        $op = $registry->report($data['operation_id'], $data['token'], $data['attempt'], $data['event'], $output);
        return response()->json(['data' => $registry->credentials($op)])->header('Cache-Control', 'no-store');
    }
}
