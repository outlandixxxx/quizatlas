<?php

// Non-destructive integration check: all DDL/data live in a random schema inside
// a PostgreSQL transaction that is rolled back, including the schema itself.
use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursNotificationDelivery;
use App\Models\ConcoursNotificationEvent;
use App\Models\ConcoursPreparationOption;
use App\Models\ExamPdf;
use App\Models\Notification;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use App\Services\ConcoursDiscovery\DuplicateCandidates;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use App\Services\ConcoursDiscoveryService;
use App\Services\ConcoursFollowService;
use App\Services\ConcoursNotifications\ConcoursDeliveryService;
use App\Services\ConcoursQcmService;
use Carbon\CarbonImmutable;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\QueryException;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\ValidationException;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

function ensure(bool $condition, string $message): void
{
    if (! $condition) {
        throw new RuntimeException($message);
    }
}
ensure(app()->environment('local', 'testing'), 'This check is restricted to local/testing environments.');
ensure(DB::getDriverName() === 'pgsql', 'PostgreSQL connection required.');
$schema = 'mq_announcement_check_'.bin2hex(random_bytes(6));
DB::beginTransaction();
try {
    DB::statement('CREATE SCHEMA "'.$schema.'"');
    DB::statement('SET LOCAL search_path TO "'.$schema.'"');
    Schema::create('users', function (Blueprint $table) {
        $table->id();
    });
    foreach (['majors', 'subjects'] as $name) {
        Schema::create($name, function (Blueprint $table) use ($name) {
            $table->id();
            $table->string('name')->default('Fixture');
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
            if ($name === 'subjects') {
                $table->foreignId('major_id')->nullable()->constrained('majors');
                $table->string('slug')->nullable();
            }
        });
    }
    Schema::create('quizzes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('subject_id')->constrained('subjects');
        $table->string('title');
        $table->boolean('is_active')->default(true);
        $table->integer('duration')->default(20);
        $table->integer('total_marks')->default(1);
        $table->string('difficulty')->nullable();
        $table->softDeletes();
        $table->timestamps();
    });
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('quiz_id')->constrained('quizzes');
        $table->softDeletes();
    });
    (require __DIR__.'/../../database/migrations/2026_10_25_000000_create_concours_directory_tables.php')->up();
    (require __DIR__.'/../../database/migrations/2026_10_26_000000_create_concours_announcements.php')->up();
    (require __DIR__.'/../../database/migrations/2026_08_09_204406_exam_pdfs.php')->up();
    $legacyPdf = DB::table('exam_pdfs')->insertGetId(['title' => 'Legacy fixture', 'file_path' => 'legacy-fixture.pdf']);
    (require __DIR__.'/../../database/migrations/2026_10_27_000000_extend_exam_pdfs_for_concours.php')->up();
    (require __DIR__.'/../../database/migrations/2026_10_28_000000_add_concours_session_policy.php')->up();
    (require __DIR__.'/../../database/migrations/2026_10_29_000000_link_exam_pdf_corrections.php')->up();
    (require __DIR__.'/../../database/migrations/2026_10_30_000000_add_concours_preparation_filters.php')->up();
    (require __DIR__.'/../../database/migrations/2026_10_31_000000_link_concours_qcm_preparation.php')->up();
    (require __DIR__.'/../../database/migrations/2026_11_01_000000_create_concours_discovery_tables.php')->up();
    (require __DIR__.'/../../database/migrations/2026_09_04_211754_create_notifications_table.php')->up();
    (require __DIR__.'/../../database/migrations/2026_11_02_000000_create_concours_following_and_delivery_tables.php')->up();
    (require __DIR__.'/../../database/migrations/2026_11_03_000000_extend_concours_multi_source_discovery.php')->up();
    ensure(DB::table('exam_pdfs')->where('id', $legacyPdf)->value('document_type') === null, 'Existing PDFs must remain unclassified and private.');
    ensure(DB::table('exam_pdfs')->where('id', $legacyPdf)->value('file_path') === 'legacy-fixture.pdf', 'Existing paths must not change.');
    DB::table('users')->insert(['id' => 1]);
    $actor = new User;
    $actor->id = 1;
    $category = DB::table('concours_categories')->insertGetId(['slug' => 'test-category', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
    $institution = DB::table('concours_institutions')->insertGetId(['slug' => 'test-institution', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
    $concours = Concours::create(['slug' => 'test-concours', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'category_id' => $category, 'institution_id' => $institution, 'type' => 'recruitment', 'is_active' => true]);
    $service = app(ConcoursAnnouncementService::class);
    $record = $service->save(['slug' => 'test-session', 'concours_id' => $concours->id, 'title_fr' => 'Test', 'description_fr' => 'Test', 'official_source_url' => 'https://institution.example.test/notice', 'registration_opens_on' => '2026-10-01', 'registration_deadline' => '2026-10-24'], $actor);
    $record = $service->transition($record->id, 1, 'verify', $actor);
    $record = $service->transition($record->id, 2, 'publish', $actor);
    ensure(ConcoursAnnouncement::visible()->count() === 1, 'Verified publication must be visible.');
    ensure(DB::scalar("SELECT data_type FROM information_schema.columns WHERE table_schema = ? AND table_name = 'concours_announcements' AND column_name = 'registration_deadline'", [$schema]) === 'date', 'Deadline precision must remain DATE.');
    try {
        $service->transition($record->id, 1, 'withdraw', $actor);
        throw new RuntimeException('Stale version accepted.');
    } catch (HttpResponseException $expected) {
        ensure($expected->getResponse()->getStatusCode() === 409, 'Expected stale-version conflict.');
    }
    $record = $service->transition($record->id, 3, 'withdraw', $actor);
    $record = $service->save(['version' => 4, 'slug' => 'test-session', 'concours_id' => $concours->id, 'title_fr' => 'Test', 'description_fr' => 'Test', 'official_source_url' => 'https://institution.example.test/notice', 'registration_opens_on' => '2026-10-01', 'registration_deadline' => '2026-11-01'], $actor, $record->id);
    $record = $service->transition($record->id, 5, 'verify', $actor);
    ensure(in_array('deadline_extended', $record->revisions()->where('version', 6)->first()->events, true), 'Verified deadline extension must be recorded.');
    try {
        $service->save(['version' => $record->version, 'registration_opens_on' => '2026-11-02'], $actor, $record->id);
        throw new RuntimeException('Partial edit bypassed retained deadline validation.');
    } catch (ValidationException $expected) {
        ensure(isset($expected->errors()['registration_deadline']), 'Partial edits must produce field validation errors, not PostgreSQL CHECK failures.');
    }
    $record = $service->transition($record->id, $record->version, 'publish', $actor);
    $newer = $service->save(['concours_id' => $concours->id, 'session_year' => 2027,
        'official_source_url' => 'https://institution.example.test/newer'], $actor);
    $newer = $service->transition($newer->id, $newer->version, 'verify', $actor);
    $newer = $service->transition($newer->id, $newer->version, 'publish', $actor);
    $record = $service->transition($record->id, $record->version, 'archive', $actor);
    $record = $service->transition($record->id, $record->version, 'publish', $actor);
    ensure($service->listing(['concours_id' => $concours->id])['items']->first()->id === $newer->id, 'Republishing an older session must not feature it ahead of the newer session.');
    $concours->update(['session_year' => 2027, 'session_policy' => 'annual', 'session_rollover_on' => '2028-09-01']);
    CarbonImmutable::setTestNow(CarbonImmutable::parse('2028-08-31 23:59:59', 'Africa/Casablanca'));
    ensure($concours->displayedSessionYear() === 2027, 'No premature session rollover.');
    CarbonImmutable::setTestNow(CarbonImmutable::parse('2028-09-01 00:00:00', 'Africa/Casablanca'));
    ensure($concours->displayedSessionYear() === 2028, 'Annual rollover must use Moroccan calendar boundaries.');
    $concours->update(['session_year_override' => 2027]);
    ensure($concours->displayedSessionYear() === 2027, 'An explicit override takes priority.');
    $replacement = $service->save(['concours_id' => $concours->id, 'session_year' => 2027, 'replaces_announcement_id' => $newer->id,
        'official_source_url' => 'https://institution.example.test/replacement'], $actor);
    $replacement = $service->transition($replacement->id, $replacement->version, 'verify', $actor);
    $replacement = $service->transition($replacement->id, $replacement->version, 'publish', $actor);
    ensure($newer->fresh()->superseded_at !== null, 'Explicit replacement must retain and mark the old announcement.');
    ensure($service->listing(['concours_id' => $concours->id, 'session_scope' => 'current'])['meta']['total'] === 1, 'Current selection must exclude superseded notices.');
    CarbonImmutable::setTestNow();
    $record = $service->transition($record->id, $record->version, 'withdraw', $actor);
    $pdf = ExamPdf::create(['title' => 'PDF fixture', 'file_path' => 'not-a-real-file.pdf', 'document_type' => 'official_announcement', 'concours_id' => $concours->id, 'announcement_id' => $record->id, 'is_active' => false]);
    $record->official_pdf_id = $pdf->id;
    $record->official_source_url = null;
    $record->save();
    ensure($record->fresh()->verification_status === 'verified', 'The verification constraint must permit a PDF-backed notice without a source URL.');
    ensure(ExamPdf::publicDocument()->count() === 0, 'Unapproved PDFs and legacy library records must never be public.');
    $exam = ExamPdf::create(['title' => 'Previous exam fixture', 'file_path' => 'fixture-exam.pdf', 'concours_id' => $concours->id,
        'document_type' => 'previous_exam', 'year' => 2024, 'is_active' => true, 'approved_at' => now(), 'approved_by' => 1,
        'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now()]);
    $correction = ExamPdf::create(['title' => 'Correction fixture', 'file_path' => 'fixture-correction.pdf', 'concours_id' => $concours->id,
        'document_type' => 'correction', 'corrects_exam_pdf_id' => $exam->id, 'year' => 2024, 'is_active' => true,
        'approved_at' => now(), 'approved_by' => 1, 'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now()]);
    ensure(ExamPdf::publicDocument()->whereKey($correction->id)->exists(), 'Approved corrections must be public with their approved exam.');
    $exam->update(['is_active' => false]);
    ensure(! ExamPdf::publicDocument()->whereKey($correction->id)->exists(), 'A private parent must hide its linked correction.');
    $exam->update(['is_active' => true]);
    $correction->update(['year' => 2025]);
    ensure(! ExamPdf::publicDocument()->whereKey($correction->id)->exists(), 'Mismatched correction years must fail closed.');
    $correction->update(['year' => 2024]);
    ensure(ExamPdf::publicDocument()->whereKey($correction->id)->exists(), 'Session overrides must not hide historical preparation resources.');
    ensure(DB::table('exam_pdfs')->where('id', $legacyPdf)->value('document_type') === null, 'Existing PDFs remain unclassified.');
    $rootOption = $concours->preparationOptions()->create(['name_fr' => 'Secondary', 'name_ar' => 'ثانوي']);
    $childOption = $concours->preparationOptions()->create(['name_fr' => 'College', 'parent_id' => $rootOption->id]);
    $beforeOptions = $exam->fresh()->getAttributes();
    $exam->preparationOptions()->sync([$rootOption->id, $childOption->id]);
    $correction->preparationOptions()->sync([$childOption->id]);
    ensure($exam->preparationOptions()->count() === 2 && $childOption->pdfs()->count() === 2, 'Reusable options must support multiple PDF associations.');
    ensure($beforeOptions === $exam->fresh()->getAttributes(), 'Option assignments must preserve every PDF attribute and approval.');
    ensure(ExamPdf::publicDocument()->whereHas('preparationOptions', fn ($q) => $q->whereKey($childOption->id))->count() === 2, 'Anonymous-approved resource filtering must work in PostgreSQL.');
    $rootOption->update(['is_active' => false]);
    ensure(ConcoursPreparationOption::available()->count() === 0, 'Inactive parents hide child filters.');
    ensure(ExamPdf::publicDocument()->count() === 2, 'Filter deactivation never hides approved PDFs from All.');
    $otherCourse = $concours->replicate();
    $otherCourse->slug = 'other-filters';
    $otherCourse->save();
    $otherOption = $otherCourse->preparationOptions()->create(['name_fr' => 'Other']);
    $majorId = DB::table('majors')->insertGetId(['name' => 'QCM fixture']);
    $subjectId = DB::table('subjects')->insertGetId(['name' => 'QCM subject', 'major_id' => $majorId]);
    $quizId = DB::table('quizzes')->insertGetId(['title' => 'QCM fixture', 'subject_id' => $subjectId]);
    DB::table('questions')->insert(['quiz_id' => $quizId]);
    $qcm = app(ConcoursQcmService::class);
    $qcm->save($concours, 'subjects', $subjectId, ['version' => 0, 'preparation_option_ids' => []]);
    $qcm->save($concours, 'quizzes', $quizId, ['version' => 0, 'preparation_option_ids' => [$childOption->id]]);
    ensure($qcm->publicListing($concours)['meta']['total'] === 1, 'PostgreSQL QCM direct/subject overlaps must not duplicate quizzes.');
    $rootOption->update(['is_active' => true]);
    ensure($qcm->publicListing($concours, ['preparation_option_id' => $rootOption->id])['meta']['total'] === 1, 'Hierarchical and whole-concours QCM filtering must work.');
    DB::table('quizzes')->where('id', $quizId)->update(['is_active' => false]);
    ensure($qcm->publicListing($concours)['meta']['total'] === 0, 'Inactive quizzes must be removed from PostgreSQL public QCM results.');
    $quizLinkId = DB::table('concours_quiz_links')->value('id');
    foreach ([['INSERT INTO concours_quiz_links (concours_id, quiz_id) VALUES (?, ?)', [$concours->id, $quizId]],
        ['INSERT INTO concours_quiz_link_options (link_id, concours_id, preparation_option_id) VALUES (?, ?, ?)', [$quizLinkId, $concours->id, $otherOption->id]]] as [$sql, $bindings]) {
        DB::statement('SAVEPOINT qcm_constraint');
        try {
            DB::statement($sql, $bindings);
            throw new RuntimeException('QCM uniqueness/scope constraint did not reject an invalid write.');
        } catch (QueryException $expected) {
            DB::statement('ROLLBACK TO SAVEPOINT qcm_constraint');
        }
    }
    foreach ([['UPDATE concours_preparation_options SET parent_id = ? WHERE id = ?', [$otherOption->id, $childOption->id]],
        ['DELETE FROM concours_preparation_options WHERE id = ?', [$childOption->id]],
        ['INSERT INTO exam_pdf_preparation_option (exam_pdf_id, preparation_option_id) VALUES (?, ?)', [$exam->id, $childOption->id]]] as [$sql, $bindings]) {
        DB::statement('SAVEPOINT option_constraint');
        try {
            DB::statement($sql, $bindings);
            throw new RuntimeException('Preparation option constraint did not reject an invalid write.');
        } catch (QueryException $expected) {
            DB::statement('ROLLBACK TO SAVEPOINT option_constraint');
        }
    }
    foreach ([['UPDATE exam_pdfs SET corrects_exam_pdf_id = id WHERE id = ?', [$correction->id]], ['UPDATE exam_pdfs SET version = 0 WHERE id = ?', [$exam->id]], ['DELETE FROM exam_pdfs WHERE id = ?', [$exam->id]], ['UPDATE concours SET session_year = 1800 WHERE id = ?', [$concours->id]], ['UPDATE concours SET session_rollover_on = NULL WHERE id = ?', [$concours->id]], ['UPDATE concours_announcements SET replaces_announcement_id = id WHERE id = ?', [$replacement->id]], ['UPDATE concours_announcements SET version = 0 WHERE id = ?', [$record->id]], ['UPDATE concours_announcements SET registration_deadline = ? WHERE id = ?', ['2026-09-01', $record->id]], ['UPDATE concours_announcements SET publication_status = ?, verification_status = ? WHERE id = ?', ['published', 'unverified', $record->id]], ['DELETE FROM concours WHERE id = ?', [$concours->id]], ['INSERT INTO concours_announcement_revisions (announcement_id, version, action, changes, snapshot, events, created_at) SELECT announcement_id, version, action, changes, snapshot, events, created_at FROM concours_announcement_revisions LIMIT 1', []]] as [$sql, $bindings]) {
        DB::statement('SAVEPOINT expected_constraint');
        try {
            DB::statement($sql, $bindings);
            throw new RuntimeException('Database constraint did not reject invalid write.');
        } catch (QueryException $expected) {
            DB::statement('ROLLBACK TO SAVEPOINT expected_constraint');
        }
    }
    // Phase 5 fixtures stay in this isolated transaction; no HTTP and no public notices.
    $source = ConcoursAnnouncementSource::create(['key' => 'fixture-source', 'name' => 'Fixture source',
        'official_url' => 'https://www.emploi-public.ma/', 'listing_url' => 'https://www.emploi-public.ma/fr/']);
    $discoveryService = app(ConcoursDiscoveryService::class);
    $metadata = ['source_identifier' => 'round-1', 'title' => 'TEST FIXTURE discovery', 'official_url' => 'https://www.emploi-public.ma/fixture?round=1'];
    $discovery = $discoveryService->capture($source, $metadata);
    ensure($discoveryService->capture($source, $metadata)->version === 1, 'PostgreSQL repeated imports must deduplicate.');
    $discoveryService->review($discovery->id, ['action' => 'approve', 'version' => 1, 'concours_id' => $concours->id,
        'title_language' => 'fr', 'session_year' => null, 'preparation_option_ids' => [$childOption->id]], $actor);
    $discovery = $discovery->fresh();
    $converted = ConcoursAnnouncement::findOrFail($discovery->announcement_id);
    ensure($converted->publication_status === 'draft' && $converted->session_year === null && $converted->official_pdf_id === null,
        'Discovery review must create only a draft with no inferred year or downloaded PDF.');
    ensure($converted->preparationOptions()->count() === 1, 'Existing track associations must be reusable.');
    $changed = $discoveryService->capture($source, array_replace($metadata, ['title' => 'TEST FIXTURE amendment']));
    ensure($changed->status === 'pending' && $changed->revisions()->count() === 3, 'Changed discoveries must reopen review and retain source/review revisions.');
    ensure($converted->fresh()->title_fr === 'TEST FIXTURE discovery', 'Source changes must preserve existing announcement content.');
    $manualRepeat = $discoveryService->capture($source, ['title' => 'TEST FIXTURE amendment', 'official_url' => $metadata['official_url']]);
    ensure($manualRepeat->id === $changed->id, 'URL-only observations must reuse a known stable source identity.');
    foreach ([['INSERT INTO concours_announcement_preparation_option (announcement_id, concours_id, preparation_option_id) VALUES (?, ?, ?)', [$converted->id, $concours->id, $otherOption->id]],
        ['UPDATE concours_announcement_sources SET check_interval_minutes = 0 WHERE id = ?', [$source->id]],
        ['UPDATE concours_discoveries SET session_year = 1800 WHERE id = ?', [$discovery->id]],
        ['INSERT INTO concours_discoveries (source_id, identity_hash, title, official_url, normalized_url, metadata_hash, first_seen_at, last_seen_at) SELECT source_id, identity_hash, title, official_url, normalized_url, metadata_hash, first_seen_at, last_seen_at FROM concours_discoveries LIMIT 1', []],
        ['DELETE FROM concours_announcements WHERE id = ?', [$converted->id]]] as [$sql, $bindings]) {
        DB::statement('SAVEPOINT discovery_constraint');
        try {
            DB::statement($sql, $bindings);
            throw new RuntimeException('Discovery uniqueness/scope/preservation constraint did not reject an invalid write.');
        } catch (QueryException $expected) {
            DB::statement('ROLLBACK TO SAVEPOINT discovery_constraint');
        }
    }
    // Phase 5F: custom API facts/provenance and immutable attribution, entirely rolled back.
    $wadifaSource = ConcoursAnnouncementSource::create(['key' => 'wadifa-info'] + config('concours_discovery.sources.wadifa-info'));
    $wadifaItems = app(WadifaInfoNormalizer::class)->parse(file_get_contents(base_path('artifacts/wadifa-info-evaluation/api-sample.json')));
    ensure($discoveryService->captureFeed($wadifaSource, $wadifaItems) === 4, 'Wadifa public-employer classification must retain four controlled sample records.');
    $revisionCount = DB::table('concours_discovery_revisions')->count();
    $discoveryService->captureFeed($wadifaSource, $wadifaItems);
    ensure(DB::table('concours_discovery_revisions')->count() === $revisionCount, 'Wadifa replay must not create revisions.');
    $wadifa = $wadifaSource->discoveries()->where('source_identifier', '146623')->firstOrFail();
    ensure($wadifa->official_url === null && $wadifa->provider_metadata['official_link_verified'] === false, 'Provider notice must remain unverified.');
    ensure($wadifa->provider_metadata['positions'] === 1, 'Provider-only fields must survive PostgreSQL JSON snapshots.');
    $wadifa = $discoveryService->review($wadifa->id, ['version' => 1, 'action' => 'verify_source',
        'official_url' => 'https://www.emploi-public.ma/fixture-wadifa', 'candidate_category' => 'employment', 'candidate_type' => 'opening'], $actor);
    $wadifa = $discoveryService->review($wadifa->id, ['version' => $wadifa->version, 'action' => 'approve', 'concours_id' => $concours->id,
        'title_language' => 'fr', 'verified_title' => 'Official PostgreSQL fixture title', 'session_year' => null, 'preparation_option_ids' => []], $actor);
    $wadifaDraft = ConcoursAnnouncement::findOrFail($wadifa->announcement_id);
    ensure($wadifaDraft->publication_status === 'draft' && $wadifaDraft->registration_deadline === null, 'Wadifa approval must create only a draft, without copying declared dates.');
    $credit = $wadifaDraft->source_attribution;
    ensure($credit['url'] === $wadifa->source_article_url && $credit['provider'] === 'wadifa-info', 'Draft attribution must retain the specific provider article.');
    $wadifaEdited = $service->save(['version' => $wadifaDraft->version, 'title_fr' => 'Edited official PostgreSQL title', 'concours_id' => $concours->id], $actor, $wadifaDraft->id);
    ensure($wadifaEdited->fresh()->source_attribution === $credit, 'Attribution must survive editorial edits.');
    // Phase 5C: third-party provenance, verified-only matching and one shared draft.
    $multi = [];
    foreach (['alwadifa-maroc', 'dreamjob'] as $key) {
        $sourceData = config('concours_discovery.sources.'.$key);
        $candidateSource = ConcoursAnnouncementSource::create(['key' => $key] + $sourceData);
        $candidate = $discoveryService->capture($candidateSource, ['source_identifier' => 'fixture-source-round',
            'title' => 'TEST FIXTURE Ministère concours de recrutement', 'official_url' => $sourceData['official_url'].'fixture-item']);
        ensure($candidate->official_url === null && $candidate->source_article_url !== null, 'Third-party articles must not become official URLs.');
        $multi[] = $discoveryService->review($candidate->id, ['version' => $candidate->version, 'action' => 'verify_source',
            'official_url' => 'https://www.emploi-public.ma/fixture-cross-source', 'candidate_category' => 'employment',
            'candidate_type' => 'opening', 'verified_identity' => ['round' => 'fixture-only']], $actor);
    }
    $matcher = app(DuplicateCandidates::class);
    ensure(count($matcher->suggestions($multi[0])) === 1, 'Verified cross-source URLs must suggest a match in PostgreSQL.');
    $matcher->decide($multi[0]->id, ['version' => $multi[0]->version, 'other_id' => $multi[1]->id,
        'other_version' => $multi[1]->version, 'decision' => 'confirmed', 'note' => 'Verified PostgreSQL fixture match'], $actor);
    $announcementCount = ConcoursAnnouncement::count();
    foreach ($multi as $candidate) {
        $candidate->refresh();
        $discoveryService->review($candidate->id, ['version' => $candidate->version, 'action' => 'approve', 'concours_id' => $concours->id,
            'title_language' => 'fr', 'session_year' => null, 'preparation_option_ids' => [$childOption->id]], $actor);
    }
    ensure(ConcoursAnnouncement::count() === $announcementCount + 1 && $multi[0]->fresh()->announcement_id === $multi[1]->fresh()->announcement_id,
        'Confirmed PostgreSQL duplicate discoveries must reuse one draft and retain both source records.');
    DB::statement('SAVEPOINT multi_source_constraint');
    try {
        DB::statement('INSERT INTO concours_discovery_matches (left_id, right_id, left_fingerprint, right_fingerprint, decision, reason, note, actor_id, created_at) SELECT right_id, left_id, right_fingerprint, left_fingerprint, decision, reason, note, actor_id, created_at FROM concours_discovery_matches LIMIT 1');
        throw new RuntimeException('Reversed duplicate pair was accepted.');
    } catch (QueryException $expected) {
        DB::statement('ROLLBACK TO SAVEPOINT multi_source_constraint');
    }
    // Phase 6: test only committed-outbox staging/constraints in this rollback schema.
    config(['concours_notifications.enabled' => true]);
    $following = app(ConcoursFollowService::class);
    $follow = $following->save($actor, $concours, ['version' => 0, 'active' => true, 'in_app' => true, 'browser_push' => false,
        'announcements' => true, 'updates' => true, 'deadlines' => true, 'reminder_days' => [7, 1], 'preparation_option_ids' => [$childOption->id]]);
    ensure($follow->preparationOptions()->count() === 1, 'PostgreSQL follow preferences must reuse existing tracks.');
    $verifiedFollowNotice = $service->transition($converted->id, $converted->version, 'verify', $actor);
    $service->transition($converted->id, $verifiedFollowNotice->version, 'publish', $actor);
    $event = ConcoursNotificationEvent::firstOrFail();
    ensure(Notification::count() === 0, 'Publication must stage an event without dispatching from an uncommitted transaction.');
    try {
        app(ConcoursDeliveryService::class)->process();
        throw new RuntimeException('Notification dispatch accepted an uncommitted transaction.');
    } catch (LogicException $expected) {
        ensure(str_contains($expected->getMessage(), 'committed'), 'Expected the committed-state dispatch guard.');
    }
    $delivery = ConcoursNotificationDelivery::create(['event_id' => $event->id, 'user_id' => $actor->id, 'created_at' => now()]);
    foreach ([['INSERT INTO concours_follows (user_id, concours_id, reminder_days, followed_at) VALUES (?, ?, ?, ?)', [$actor->id, $concours->id, '[7,1]', now()]],
        ['INSERT INTO concours_follow_preparation_option (follow_id, concours_id, preparation_option_id) VALUES (?, ?, ?)', [$follow->id, $concours->id, $otherOption->id]],
        ['INSERT INTO concours_notification_deliveries (event_id, user_id, created_at) VALUES (?, ?, ?)', [$event->id, $actor->id, now()]]] as [$sql, $bindings]) {
        DB::statement('SAVEPOINT follow_constraint');
        try {
            DB::statement($sql, $bindings);
            throw new RuntimeException('Following uniqueness/track/event-recipient constraint did not reject an invalid write.');
        } catch (QueryException $expected) {
            DB::statement('ROLLBACK TO SAVEPOINT follow_constraint');
        }
    }
    echo "PostgreSQL checks passed: migrations, DATE precision, publication, revisions, stale versions, partial date validation, stable session ordering, deadline extension, correction associations, parent visibility, PDF preservation, discovery deduplication/revisions/draft conversion/track scope, Wadifa API provenance/attribution, follow preferences/outbox/commit guards/delivery uniqueness, CHECK/enum/FK/unique constraints. All fixture DDL/data rolled back.\n";
} finally {
    DB::rollBack();
}
