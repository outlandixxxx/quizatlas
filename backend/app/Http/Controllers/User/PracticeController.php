<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\PracticeService;

class PracticeController extends Controller
{
    public function __construct(
        protected PracticeService $practiceService
    ) {
    }

    public function majors()
    {
        return ApiResponse::success(
            $this->practiceService->majors()
        );
    }

    public function subjects(int $major)
    {
        return ApiResponse::success(
            $this->practiceService->subjects($major)
        );
    }

    public function chapters(int $subject)
    {
        return ApiResponse::success(
            $this->practiceService->chapters($subject)
        );
    }

    public function subjectsWithQuizzes()
    {
        return ApiResponse::success(
            $this->practiceService->allSubjectsWithQuizzes()
        );
    }


}