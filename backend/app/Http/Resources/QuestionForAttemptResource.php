<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionForAttemptResource extends JsonResource
{
    public function __construct($resource, protected array $selectedChoiceIds = [])
    {
        parent::__construct($resource);
    }

    public function toArray(Request $request): array
    {
        return [
            'id'                  => $this->id,
            'question'            => $this->question,
            'type'                => $this->type,
            'marks'               => $this->marks,
            'order'               => $this->order,
            'choices'             => ChoiceForAttemptResource::collection($this->whenLoaded('choices')),
            'selected_choice_ids' => $this->selectedChoiceIds,
            'is_bookmarked'       => $this->isBookmarked,
        ];
    }
}