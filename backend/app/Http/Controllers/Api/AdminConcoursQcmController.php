<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Concours;
use App\Services\ConcoursQcmService;
use Illuminate\Http\Request;

class AdminConcoursQcmController extends Controller
{
    public function __construct(private readonly ConcoursQcmService $qcm) {}

    private function filters(Request $request): array
    {
        return $request->validate(['q' => ['nullable', 'string', 'max:200'], 'page' => ['sometimes', 'integer', 'between:1,100000'], 'per_page' => ['sometimes', 'integer', 'between:1,50']]);
    }

    public function candidates(Request $request, int $record, string $kind)
    {
        $this->authorize('update', Concours::findOrFail($record));

        return ApiResponse::success($this->qcm->candidates($kind, $this->filters($request)));
    }

    public function index(Request $request, int $record, string $kind)
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('update', $concours);

        return ApiResponse::success($this->qcm->links($concours, $kind, $this->filters($request)));
    }

    public function save(Request $request, int $record, string $kind, int $target)
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('update', $concours);
        $remove = $request->isMethod('DELETE');
        $data = $request->validate(['version' => ['required', 'integer', $remove ? 'min:1' : 'min:0'],
            'preparation_option_ids' => [$remove ? 'prohibited' : 'present', 'array', 'list', 'max:100'],
            'preparation_option_ids.*' => ['required', 'integer', 'distinct']]);
        $data['version'] = (int) $data['version'];
        $this->qcm->save($concours, $kind, $target, $data, $remove);

        return ApiResponse::success(null, 'QCM association saved.');
    }
}
