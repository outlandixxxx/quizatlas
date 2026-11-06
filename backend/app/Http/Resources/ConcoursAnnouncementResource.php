<?php

namespace App\Http\Resources;

use App\Models\ConcoursAnnouncement;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcoursAnnouncementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = $this->resource->only(array_merge(['id'], ConcoursAnnouncement::EDITORIAL_FIELDS));
        foreach (['official_publication_date', 'registration_opens_on', 'registration_deadline', 'examination_date'] as $field) {
            $data[$field] = $this->$field?->toDateString();
        }
        $data['source_attribution'] = $this->source_attribution;
        $data['preparation_option_ids'] = $this->preparationOptions->pluck('id')->all();
        $data += ['registration_status' => $this->registrationStatus(), 'announcement_status' => $this->announcementStatus(), 'superseded_at' => $this->superseded_at?->toAtomString(), 'verification_status' => $this->verification_status,
            'publication_status' => $this->publication_status, 'verified_at' => $this->verified_at?->toAtomString(),
            'published_at' => $this->published_at?->toAtomString(),
            'concours' => new ConcoursResource($this->whenLoaded('concours')),
            'institution' => new ConcoursInstitutionResource($this->institution ?? ($this->relationLoaded('concours') ? $this->concours?->institution : null))];
        $admin = $request->is('api/v1/admin/*') && $request->user()?->isAdmin();
        // Current verified document only. Draft/private documents get no public DTO.
        $pdf = $this->relationLoaded('officialPdf') ? $this->officialPdf : null;
        $data['official_pdf'] = $pdf && ($admin || ($pdf->is_active && $pdf->approved_at && $pdf->approved_by && $pdf->distribution_confirmed_at && $pdf->distribution_permission)) ? new ConcoursPdfResource($pdf) : null;
        // The session relation eagerly loads the existing publicDocument scope,
        // exactly as the public attachment endpoint does, without per-notice requests.
        $data['official_pdfs'] = $this->whenLoaded('officialPdfs', fn () => ConcoursPdfResource::collection($this->officialPdfs));
        if ($admin) {
            $data += ['version' => $this->version, 'verified_by' => $this->verified_by, 'first_published_at' => $this->first_published_at?->toAtomString(),
                'archived_at' => $this->archived_at?->toAtomString(), 'withdrawn_at' => $this->withdrawn_at?->toAtomString()];
        }

        return $data;
    }
}
