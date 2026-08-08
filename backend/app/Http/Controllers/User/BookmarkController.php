<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookmarkResource;
use App\Models\Bookmark;
use App\Models\Question;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->integer('per_page', 10);

        $bookmarks = Bookmark::where('user_id', auth()->id())
            ->with(['question.quiz.subject'])
            ->orderByDesc('created_at')
            ->paginate($perPage);

        return ApiResponse::success([
            'data' => BookmarkResource::collection($bookmarks->items()),
            'meta' => [
                'current_page' => $bookmarks->currentPage(),
                'last_page'    => $bookmarks->lastPage(),
                'per_page'     => $bookmarks->perPage(),
                'total'        => $bookmarks->total(),
            ],
        ]);
    }

    public function toggle(Question $question)
    {
        $userId = auth()->id();

        $bookmark = Bookmark::where('user_id', $userId)
            ->where('question_id', $question->id)
            ->first();

        if ($bookmark) {
            $bookmark->delete();
            return ApiResponse::success(['bookmarked' => false]);
        }

        Bookmark::create([
            'user_id' => $userId,
            'question_id' => $question->id,
        ]);

        return ApiResponse::success(['bookmarked' => true]);
    }
}