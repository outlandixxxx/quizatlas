<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcoursInstitutionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id, 'slug' => $this->slug,
            'name_fr' => $this->name_fr, 'name_ar' => $this->name_ar,
            'website_url' => $this->website_url, 'is_active' => $this->is_active,
        ];
    }
}
