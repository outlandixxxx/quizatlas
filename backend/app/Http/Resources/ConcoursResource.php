<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcoursResource extends JsonResource
{
    private ?array $preparationQcm = null;

    public function withQcm(array $qcm): static
    {
        $this->preparationQcm = $qcm;

        return $this;
    }

    public function toArray(Request $request): array
    {
        $year = $this->displayedSessionYear();
        $current = $this->relationLoaded('sessionAnnouncements') ? $this->sessionAnnouncements
            ->filter(fn ($notice) => $notice->session_year !== null && $notice->session_year === $year)->values() : collect();
        $official = $current->firstWhere('id', $this->official_announcement_id);

        return [
            'id' => $this->id, 'slug' => $this->slug,
            'name_fr' => $this->name_fr, 'name_ar' => $this->name_ar,
            'description_fr' => $this->description_fr, 'description_ar' => $this->description_ar,
            'category_id' => $this->category_id, 'institution_id' => $this->institution_id,
            'type' => $this->type, 'exam_formats' => $this->exam_formats ?? [],
            'is_active' => $this->is_active, 'display_order' => $this->display_order,
            'category' => new ConcoursCategoryResource($this->whenLoaded('category')),
            'institution' => new ConcoursInstitutionResource($this->whenLoaded('institution')),
            'resources' => ConcoursPdfResource::collection($this->whenLoaded('resources')),
            'preparation_options' => ConcoursPreparationOptionResource::collection($this->whenLoaded('preparationOptions')),
            'preparation_qcm' => $this->when($this->preparationQcm !== null, $this->preparationQcm),
            'session_year' => $this->session_year,
            'session_policy' => $this->session_policy ?? 'manual',
            'session_rollover_on' => $this->session_rollover_on?->toDateString(),
            'session_year_override' => $this->session_year_override,
            'displayed_session_year' => $year,
            // Preserve legacy display until an administrator explicitly selects a main notice.
            // Keep the configured flag when that notice is withdrawn/deleted or the year rolls over:
            // another notice must never be silently promoted as its replacement.
            'official_announcement_configured' => $this->official_announcement_id !== null,
            'official_announcement' => $this->when($this->relationLoaded('sessionAnnouncements'), fn () => $official ? new ConcoursAnnouncementResource($official) : null),
            'official_announcement_id' => $this->when($request->is('api/v1/admin/*') && $request->user()?->isAdmin(), $this->official_announcement_id),
            'session_announcement_state' => $this->when($this->relationLoaded('sessionAnnouncements'), fn () => $current->isNotEmpty() ? 'published' : ($year !== null && $this->archivedCandidates()->contains('session_year', $year) ? 'archived' : 'not_announced')),
            'current_announcements' => $this->when($this->relationLoaded('sessionAnnouncements'), fn () => ConcoursAnnouncementResource::collection($current)),
        ];
    }
}
