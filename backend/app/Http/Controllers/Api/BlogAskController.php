<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\BlogAsk;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogAskController extends Controller
{
   public function index(Request $request)
{
    $validated = $request->validate([
        'major_id' => 'sometimes|integer|exists:majors,id',
        'subject_id' => 'sometimes|integer|exists:subjects,id',
        'q' => 'sometimes|string|max:200',
        'status' => 'sometimes|string|in:unanswered',
        'sort' => 'sometimes|string|in:newest,most_answered,unanswered',
        'per_page' => 'sometimes|integer|min:1|max:50',
    ]);

    $query = BlogAsk::query()->with(['author:id,name,avatar_url,xp', 'major:id,name', 'subject:id,name']);

    if (!empty($validated['major_id'])) {
        $query->where('major_id', $validated['major_id']);
    }

    if (!empty($validated['subject_id'])) {
        $query->where('subject_id', $validated['subject_id']);
    }

    if (!empty($validated['q'])) {
        $search = $validated['q'];
        $query->where(fn ($w) => $w->where('title', 'like', "%{$search}%")
            ->orWhere('body', 'like', "%{$search}%"));
    }

    if (($validated['status'] ?? null) === 'unanswered') {
        $query->where('responses_count', 0);
    }

    match ($validated['sort'] ?? 'newest') {
        'most_answered' => $query->orderByDesc('responses_count'),
        'unanswered' => $query->where('responses_count', 0)->latest(),
        default => $query->latest(),
    };

    $paginated = $query->paginate($validated['per_page'] ?? 10);

    return ApiResponse::success([
        'items' => $paginated->items(),
        'meta' => [
            'current_page' => $paginated->currentPage(),
            'last_page' => $paginated->lastPage(),
            'per_page' => $paginated->perPage(),
            'total' => $paginated->total(),
        ],
    ]);
}

    public function store(Request $request)
    {
     $validated = $request->validate([
    'title' => 'required|string|max:150',
    'body' => 'required|string|max:5000',
    'major_id' => 'nullable|exists:majors,id',
    'subject_id' => 'nullable|exists:subjects,id|required_with:major_id',
]);

$validated['title'] = trim($validated['title']);
$validated['body'] = trim($validated['body']);

if ($validated['title'] === '' || $validated['body'] === '') {
    return ApiResponse::error('Title and body cannot be empty.', null, 422);
}

        if (!empty($validated['subject_id']) && !empty($validated['major_id'])) {
            $belongs = Subject::where('id', $validated['subject_id'])
                ->where('major_id', $validated['major_id'])
                ->exists();

            if (!$belongs) {
                return ApiResponse::error('Selected subject does not belong to selected major.', null, 422);
            }
        }

        $ask = BlogAsk::create([...$validated, 'author_id' => auth()->id()]);

        return ApiResponse::success($ask->load('author:id,name,avatar_url'), 201);
    }

    public function show(BlogAsk $ask)
    {
        $ask->increment('views_count');
        $ask->load(['author:id,name,avatar_url,xp', 'major:id,name', 'subject:id,name',
            'responses' => fn ($q) => $q->with('author:id,name,avatar_url,xp')->orderByDesc('is_accepted')->latest()]);

        return ApiResponse::success($ask);
    }

    public function stats()
    {
        return ApiResponse::success([
            'questions_asked' => BlogAsk::count(),
            'answers_given' => DB::table('blog_responses')->count(),
            'members' => \App\Models\User::count(),
            'answered_pct' => BlogAsk::count() > 0
                ? round(BlogAsk::where('responses_count', '>', 0)->count() / BlogAsk::count() * 100)
                : 0,
        ]);
    }

    public function popularTags()
    {
        return ApiResponse::success(
            Subject::withCount('blogAsks')->orderByDesc('blog_asks_count')->take(8)->get(['id', 'name'])
        );
    }

    public function topContributors()
    {
        return ApiResponse::success(
            DB::table('blog_responses')
                ->select('author_id', DB::raw('count(*) as accepted_count'))
                ->where('is_accepted', true)
                ->groupBy('author_id')
                ->orderByDesc('accepted_count')
                ->limit(5)
                ->get()
                ->map(fn ($row) => [
                    'user' => \App\Models\User::select('id', 'name', 'avatar_url', 'xp')->find($row->author_id),
                    'accepted_count' => $row->accepted_count,
                ])
        );
    }
}