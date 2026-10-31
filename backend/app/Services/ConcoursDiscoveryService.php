<?php

namespace App\Services;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\CandidateClassifier;
use App\Services\ConcoursDiscovery\DuplicateCandidates;
use App\Services\ConcoursDiscovery\FactualMetadataPolicy;
use App\Services\ConcoursDiscovery\OfficialUrl;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ConcoursDiscoveryService
{
    public function __construct(private OfficialUrl $urls, private ConcoursAnnouncementService $announcements,
        private CandidateClassifier $classifier, private DuplicateCandidates $duplicates) {}

    public function captureFeed(ConcoursAnnouncementSource $source, array $items): int
    {
        return DB::transaction(function () use ($source, $items) {
            ConcoursAnnouncementSource::whereKey($source->id)->lockForUpdate()->firstOrFail();
            $count = 0;
            $policy = app(FactualMetadataPolicy::class);
            $limit = $policy->applies($source) ? 10 : config('concours_discovery.max_items');
            if (count($items) > config('concours_discovery.max_items')) {
                throw new \RuntimeException('too_many_feed_items');
            }
            if ($policy->applies($source)) {
                // Rotate bounded observations instead of reprocessing the first ten forever.
                // Existing URL aliases participate; capture() still resolves identity/conflicts.
                $ranked = [];
                foreach ($items as $position => $item) {
                    if ($this->classifier->classify((string) ($item['title'] ?? ''))['candidate_category'] === 'excluded') {
                        continue;
                    }
                    $data = $policy->minimize($source, $item)['metadata'];
                    $url = $this->urls->normalizeSource($data['source_article_url'], $source, true);
                    $identity = hash('sha256', $data['source_identifier'] !== null ? 'id:'.$data['source_identifier'] : 'url:'.$url);
                    $seen = ConcoursDiscovery::where('source_id', $source->id)->where(function ($q) use ($identity, $url, $data) {
                        $q->where('identity_hash', $identity)->orWhere(function ($q) use ($url, $data) {
                            $q->where(fn ($q) => $q->where('normalized_url', $url)->orWhereHas('revisions', fn ($r) => $r->where('snapshot->normalized_url', $url)));
                            if ($data['source_identifier'] !== null) {
                                $q->whereNull('source_identifier');
                            }
                        });
                    })->min('last_seen_at');
                    // Oldest unseen declared dates first, then least recently observed records.
                    $ranked[$identity] = ['item' => $item, 'rank' => [$seen ?? '', $data['publication_date'] ?? '', $position]];
                }
                uasort($ranked, fn ($a, $b) => $a['rank'] <=> $b['rank']);
                $items = array_column($ranked, 'item');
            }
            foreach ($items as $item) {
                if ($source->source_kind === 'third_party' && ($source->key === WadifaInfoNormalizer::KEY ? app(WadifaInfoNormalizer::class)->classification($item) : $this->classifier->classify((string) ($item['title'] ?? '')))['candidate_category'] === 'excluded') {
                    continue;
                }
                $this->capture($source, $item);
                if (++$count >= $limit) {
                    break;
                }
            }

            return $count;
        }, 3);
    }

    public function capture(ConcoursAnnouncementSource $source, array $metadata, ?User $actor = null): ConcoursDiscovery
    {
        $factual = app(FactualMetadataPolicy::class)->applies($source)
            ? app(FactualMetadataPolicy::class)->minimize($source, $metadata) : null;
        $metadata = $factual['metadata'] ?? $metadata;
        $provider = $source->key === WadifaInfoNormalizer::KEY ? ($metadata['provider_metadata'] ?? null) : null;
        if ($source->key === WadifaInfoNormalizer::KEY && (! $provider || ! WadifaInfoNormalizer::articleUrl($metadata['source_article_url'] ?? null, $metadata['source_identifier'] ?? ''))) {
            throw new \RuntimeException('invalid_provider_identity');
        }
        if ($provider && ($provider['language'] ?? 'fr') !== 'fr') {
            throw new \RuntimeException('french_provider_record_required');
        }
        $fields = ['source_identifier', 'title', 'official_url', 'source_article_url', 'publication_date', 'application_deadline', 'institution', 'session_year', 'grade', 'specialty'];
        $data = array_replace(array_fill_keys($fields, null), Arr::only($metadata, $fields));
        $thirdParty = $source->source_kind === 'third_party';
        if ($thirdParty) {
            $data['source_article_url'] = $metadata['source_article_url'] ?? $metadata['official_url'] ?? null;
            $data['official_url'] = null;
        } else {
            $data['source_article_url'] = null;
        }
        foreach ($data as $field => $value) {
            if (is_string($value) && trim($value) === '') {
                $data[$field] = null;
            }
        }
        Validator::make($data, ['title' => 'required|string|max:255', 'official_url' => ($thirdParty ? 'nullable' : 'required').'|string|max:2048',
            'source_article_url' => ($thirdParty ? 'required' : 'nullable').'|string|max:2048',
            'source_identifier' => 'nullable|string|max:255', 'publication_date' => 'nullable|date_format:Y-m-d',
            'application_deadline' => 'nullable|date_format:Y-m-d', 'institution' => 'nullable|string|max:255',
            'session_year' => 'nullable|integer|between:1990,2100', 'grade' => 'nullable|string|max:255', 'specialty' => 'nullable|string|max:255'])->validate();
        $data['title'] = trim(strip_tags($data['title']));
        if ($data['title'] === '') {
            throw ValidationException::withMessages(['title' => 'An original title is required.']);
        }
        $normalized = $thirdParty ? $this->urls->normalizeSource($data['source_article_url'], $source, true) : $this->urls->normalize($data['official_url']);
        $urlField = $thirdParty ? 'source_article_url' : 'official_url';
        $data['session_year'] = isset($data['session_year']) ? (int) $data['session_year'] : null;
        $hashData = array_replace($data, [$urlField => $normalized]);
        if ($factual) {
            $hashData['observation_digest'] = $factual['observation_digest'];
        }
        if ($provider !== null) {
            $hashData['provider_metadata'] = $this->providerFingerprint($provider);
        }
        $hash = hash('sha256', json_encode($hashData, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));

        return DB::transaction(function () use ($source, $data, $hash, $normalized, $actor, $urlField, $thirdParty, $factual, $provider, $metadata) {
            // Serialize this source's imports against manual entry and concurrent checks.
            ConcoursAnnouncementSource::whereKey($source->id)->lockForUpdate()->firstOrFail();
            $identity = hash('sha256', $data['source_identifier'] !== null ? 'id:'.$data['source_identifier'] : 'url:'.$normalized);
            $record = ConcoursDiscovery::where('source_id', $source->id)->where('identity_hash', $identity)->lockForUpdate()->first();
            if (! $record) {
                $candidates = ConcoursDiscovery::where('source_id', $source->id)->where(function ($q) use ($normalized) {
                    $q->where('normalized_url', $normalized)->orWhereHas('revisions', fn ($r) => $r->where('snapshot->normalized_url', $normalized));
                });
                if ($data['source_identifier'] !== null) {
                    $candidates->whereNull('source_identifier');
                }
                $matches = $candidates->lockForUpdate()->get();
                if ($matches->count() > 1) {
                    throw ValidationException::withMessages(['official_url' => 'Several rounds share this URL. Supply the stable source identifier.']);
                }
                $record = $matches->first();
            }
            // URL-only manual observations must retain a known stable source ID.
            if ($record && $record->source_identifier !== null && $data['source_identifier'] === null) {
                $data['source_identifier'] = $record->source_identifier;
                $identity = $record->identity_hash;
                $hashData = array_replace($data, [$urlField => $normalized]);
                if ($factual) {
                    $hashData['observation_digest'] = $factual['observation_digest'];
                }
                if ($provider !== null) {
                    $hashData['provider_metadata'] = $this->providerFingerprint($provider);
                }
                $hash = hash('sha256', json_encode($hashData, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
            }
            if ($record && $record->metadata_hash === $hash) {
                $record->update(['last_seen_at' => now()]);

                return $record;
            }
            $existing = $record !== null;
            $record ??= new ConcoursDiscovery(['source_id' => $source->id, 'first_seen_at' => now(), 'version' => 0]);
            $record->fill($data + ['normalized_url' => $normalized, 'identity_hash' => $identity, 'metadata_hash' => $hash, 'last_seen_at' => now()]);
            $record->fill($provider ? app(WadifaInfoNormalizer::class)->classification($metadata) : ($factual['classification'] ?? ($thirdParty ? $this->classifier->classify($data['title']) : ['candidate_category' => 'unknown', 'candidate_type' => 'unknown'])));
            $record->fill(['official_verified_at' => null, 'official_verified_by' => null, 'official_identifier' => null,
                'verified_identity' => null, 'verified_identity_hash' => null, 'verified_url_hash' => null]);
            $record->status = 'pending';
            $record->reviewed_by = null;
            $record->reviewed_at = null;
            $record->review_note = null;
            $record->version++;
            $record->save();
            $this->revision($record, $existing ? 'source_updated' : ($actor ? 'manually_added' : 'discovered'), $actor, $provider);

            return $record;
        }, 3);
    }

    /** Add a translation observation only to an existing, unchanged French identity. */
    public function enrichBilingual(ConcoursAnnouncementSource $source, array $items): array
    {
        if ($source->key !== WadifaInfoNormalizer::KEY || count($items) > 100) {
            throw new \RuntimeException('invalid_bilingual_source');
        }

        return DB::transaction(function () use ($source, $items) {
            ConcoursAnnouncementSource::whereKey($source->id)->lockForUpdate()->firstOrFail();
            $result = ['enriched' => 0, 'unchanged' => 0, 'missing_or_conflicting' => 0, 'not_existing' => 0];
            $seen = [];
            foreach ($items as $item) {
                $id = $item['source_identifier'] ?? '';
                $provider = $item['provider_metadata'] ?? [];
                if (! is_string($id) || ! preg_match('/^[1-9][0-9]*$/D', $id) || isset($seen[$id])
                    || ($provider['provider_id'] ?? null) !== $id || ($provider['language'] ?? null) !== 'fr'
                    || ! WadifaInfoNormalizer::articleUrl($item['source_article_url'] ?? null, $id)) {
                    throw new \RuntimeException('invalid_bilingual_identity');
                }
                $seen[$id] = true;
                $record = ConcoursDiscovery::where('source_id', $source->id)->where('source_identifier', $id)->lockForUpdate()->first();
                if (! $record) {
                    $result['not_existing']++;

                    continue;
                }
                if (! in_array($provider['arabic_status'] ?? '', ['available', 'partial'], true)) {
                    $result['missing_or_conflicting']++;

                    continue;
                }
                foreach (['institution', 'grade', 'source_article_url'] as $field) {
                    if ($record->$field !== ($item[$field] ?? null)) {
                        throw new \RuntimeException('french_metadata_changed');
                    }
                }
                if (($provider['employer_fr'] ?? null) !== $record->institution || ($provider['grade_fr'] ?? null) !== $record->grade
                    || ($provider['article_urls']['fr'] ?? null) !== $record->source_article_url) {
                    throw new \RuntimeException('french_metadata_changed');
                }
                foreach (['publication_date', 'application_deadline'] as $field) {
                    if ($record->$field?->toDateString() !== ($item[$field] ?? null)) {
                        throw new \RuntimeException('french_metadata_changed');
                    }
                }
                $previous = $record->provider_metadata;
                if ($this->providerFingerprint($previous) !== $this->providerFingerprint($provider)) {
                    throw new \RuntimeException('french_metadata_changed');
                }
                foreach (['employer_ar', 'grade_ar'] as $field) {
                    if (isset($provider[$field]) && (! is_string($provider[$field]) || mb_strlen($provider[$field]) > 255
                        || preg_match('/[<>\x00-\x1f\x7f]/u', $provider[$field]) || ! preg_match('/\p{Arabic}/u', $provider[$field]))) {
                        throw new \RuntimeException('invalid_arabic_metadata');
                    }
                }
                $status = ! empty($provider['employer_ar']) && ! empty($provider['grade_ar']) ? 'available' : 'partial';
                if (empty($provider['employer_ar']) && empty($provider['grade_ar']) || $provider['arabic_status'] !== $status) {
                    throw new \RuntimeException('invalid_arabic_metadata');
                }
                $article = $provider['article_urls']['ar'] ?? null;
                if (! WadifaInfoNormalizer::articleUrl($article, $id)) {
                    throw new \RuntimeException('invalid_bilingual_identity');
                }
                // Preserve all review/proof fields and the original French fingerprint.
                $enriched = array_replace($previous, Arr::only($provider, ['employer_fr', 'grade_fr', 'employer_ar', 'grade_ar', 'arabic_status', 'article_urls']));
                if ($enriched === $previous) {
                    $result['unchanged']++;

                    continue;
                }
                $record->version++;
                $record->save();
                $this->revision($record, 'translation_enriched', null, $enriched);
                $result['enriched']++;
            }

            return $result;
        }, 3);
    }

    private function providerFingerprint(array $provider): array
    {
        // Match the pre-bilingual fingerprint exactly; translations never simulate a source update.
        return Arr::only($provider, ['provider_id', 'employer', 'grade', 'positions', 'reported_official_url', 'official_link_verified', 'attribution']);
    }

    public function review(int $id, array $data, User $actor): ConcoursDiscovery
    {
        return DB::transaction(function () use ($id, $data, $actor) {
            $this->duplicates->lockReviews();
            $record = ConcoursDiscovery::lockForUpdate()->findOrFail($id);
            abort_if($record->version !== $data['version'], 409, 'This discovery changed. Reload before reviewing.');
            if ($data['action'] === 'verify_source') {
                $record->official_url = $this->urls->normalize($data['official_url']);
                $record->official_verified_at = now();
                $record->official_verified_by = $actor->id;
                $record->official_identifier = $data['official_identifier'] ?? null;
                $record->verified_identity = $data['verified_identity'] ?? [];
                $record->verified_url_hash = hash('sha256', $record->official_url);
                $record->verified_identity_hash = $this->duplicates->identityHash($record->verified_identity);
                $record->candidate_category = $data['candidate_category'];
                $record->candidate_type = $data['candidate_type'];
                $record->status = 'pending';
                $record->reviewed_by = null;
                $record->reviewed_at = null;
                $record->review_note = null;
                $record->version++;
                $record->save();
                $this->revision($record, 'official_source_verified', $actor);

                return $record;
            }
            abort_if($record->status !== 'pending', 409, 'This version has already been reviewed.');
            if ($data['action'] === 'approve') {
                $titles = ['fr' => trim(strip_tags($data['verified_title_fr'] ?? '')), 'ar' => trim(strip_tags($data['verified_title_ar'] ?? ''))];
                if ($titles['fr'] === '' && $titles['ar'] === '' && ! empty($data['verified_title'])) {
                    $titles[$data['title_language'] ?? 'fr'] = trim(strip_tags($data['verified_title']));
                }
                if ($record->metadata_scope === 'facts_only') {
                    Validator::make($titles, ['fr' => 'required_without:ar|nullable|string|max:255', 'ar' => 'required_without:fr|nullable|string|max:255'])->validate();
                    foreach ($titles as $title) {
                        abort_if(str_starts_with($title, FactualMetadataPolicy::TITLE_PREFIX) || str_starts_with($title, WadifaInfoNormalizer::TITLE_PREFIX), 422, 'Enter an independently verified official title, not the technical RSS label.');
                    }
                } elseif ($titles['fr'] === '' && $titles['ar'] === '') {
                    $titles[$data['title_language'] ?? 'fr'] = $record->title;
                }
                if (isset($data['official_url'])) {
                    abort_if($this->urls->normalize($data['official_url']) !== $this->urls->normalize($record->official_url ?? ''), 422, 'Save the independent official-source verification before approving.');
                }
                foreach (['candidate_category', 'candidate_type'] as $field) {
                    abort_if(isset($data[$field]) && $data[$field] !== $record->$field, 422, 'Save the candidate verification before approving.');
                }
                abort_unless($record->official_url, 422, 'Independently verify an official government/university announcement URL first.');
                if ($record->source->source_kind === 'third_party') {
                    abort_unless($record->official_verified_at && in_array($record->candidate_category, ['employment', 'academic'], true), 422, 'Verify the official source and candidate category first.');
                    abort_unless($record->candidate_type === 'opening', 422, 'Results, preselection and amendments require review of the existing announcement; they cannot create a new application opening.');
                    abort_if($record->is_stale, 422, 'This old RSS item cannot create a new opening. Review it in the existing announcement workflow.');
                }
                $this->urls->normalize($record->official_url);
                if (! $record->official_verified_at) {
                    // Existing official-source approvals already require source_checked.
                    $record->official_verified_at = now();
                    $record->official_verified_by = $actor->id;
                    $record->verified_url_hash = hash('sha256', $this->urls->normalize($record->official_url));
                    $record->save();
                }
                $concours = Concours::findOrFail($data['concours_id']);
                $ids = $data['preparation_option_ids'];
                if ($concours->preparationOptions()->whereIn('id', $ids)->count() !== count($ids)) {
                    throw ValidationException::withMessages(['preparation_option_ids' => 'Select tracks belonging to this concours.']);
                }
                // Existing approved discoveries are never reapplied to a live announcement.
                // Updates return to review and must be reconciled in the existing editor.
                if ($record->announcement_id) {
                    throw ValidationException::withMessages(['announcement_id' => 'An announcement already exists. Review its source changes in the existing announcement editor, then acknowledge this revision with a note.']);
                }
                $group = $this->duplicates->component($record);
                foreach ($this->duplicates->suggestions($record) as $suggestion) {
                    abort_if($suggestion['decision'] === null && ! $group->has($suggestion['discovery']->id), 422, 'Resolve suggested duplicates before creating a draft. Confirm a match or record why the notices stay separate.');
                }
                $existingIds = $group->pluck('announcement_id')->filter()->unique();
                abort_if($existingIds->count() > 1, 422, 'This group already links different announcements; reconcile them explicitly.');
                $existingAnnouncement = $existingIds->isNotEmpty() ? ConcoursAnnouncement::findOrFail($existingIds->first()) : null;
                abort_if($existingAnnouncement && $existingAnnouncement->concours_id !== $concours->id, 422, 'Use the existing matched announcement concours; no new association is inferred.');
                if ($existingAnnouncement) {
                    $existingTracks = $existingAnnouncement->preparationOptions()->pluck('concours_preparation_options.id')->sort()->values()->all();
                    $selectedTracks = collect($ids)->sort()->values()->all();
                    abort_if($existingTracks !== $selectedTracks || $existingAnnouncement->session_year !== $data['session_year'], 422,
                        'The matched announcement has different tracks or session. Reconcile it in the existing editor; no association is silently changed.');
                    abort_if(isset($data['institution_id']) && $data['institution_id'] !== $existingAnnouncement->institution_id, 422, 'The matched announcement has a different institution.');
                    foreach (['official_publication_date', 'registration_deadline'] as $date) {
                        abort_if(isset($data[$date]) && $existingAnnouncement->$date?->toDateString() !== $data[$date], 422, 'Reconcile the verified dates in the existing announcement editor.');
                    }
                }
                $credit = $record->provider_metadata['attribution'] ?? null;
                $arabicArticle = $record->provider_metadata['article_urls']['ar'] ?? null;
                if ($credit && WadifaInfoNormalizer::articleUrl($arabicArticle, $record->source_identifier)) {
                    $credit['url_ar'] = $arabicArticle;
                }
                $announcement = $existingAnnouncement ?? $this->announcements->save([
                    '_source_attribution' => $credit,
                    'concours_id' => $concours->id, 'institution_id' => $data['institution_id'] ?? null,
                    'title_fr' => $titles['fr'] ?: null, 'title_ar' => $titles['ar'] ?: null,
                    'official_source_url' => $record->official_url, 'session_year' => $data['session_year'],
                    'preparation_option_ids' => $ids,
                    'official_publication_date' => $data['official_publication_date'] ?? null,
                    'registration_deadline' => $data['registration_deadline'] ?? null,
                    'positions' => $data['positions'] ?? null,
                ], $actor);
                $record->announcement_id = $announcement->id;
            }
            if ($data['action'] === 'acknowledge') {
                abort_unless($record->announcement_id, 422, 'Only an already converted discovery can be acknowledged.');
            }
            $record->status = in_array($data['action'], ['approve', 'acknowledge'], true) ? 'approved' : 'rejected';
            $record->review_note = $data['review_note'] ?? null;
            $record->reviewed_by = $actor->id;
            $record->reviewed_at = now();
            $record->version++;
            $record->save();
            $this->revision($record, $record->status, $actor);

            return $record;
        }, 3);
    }

    public function revision(ConcoursDiscovery $record, string $action, ?User $actor, ?array $provider = null): void
    {
        $snapshot = $record->attributesToArray();
        if ($provider !== null) {
            $snapshot['provider_metadata'] = $provider;
        }
        $snapshot['source'] = $record->source->only(['id', 'key', 'name', 'source_kind', 'official_url', 'listing_url', 'collection_method', 'permission_status', 'permission_evidence', 'permission_checked_at']);
        $record->revisions()->create(['version' => $record->version, 'action' => $action, 'actor_id' => $actor?->id,
            'snapshot' => $snapshot, 'created_at' => now()]);
        $record->unsetRelation('latestObservation');
    }
}
