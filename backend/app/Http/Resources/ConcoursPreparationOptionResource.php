<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcoursPreparationOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return $this->resource->only(['id', 'concours_id', 'parent_id', 'name_fr', 'name_en', 'name_ar', 'display_order', 'is_active']);
    }
}
