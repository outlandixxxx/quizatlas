# Moroccan Health QCM repair (14 FR/AR seeders only)

The current source already declares 14 distinct slugs. However, the old seeders identify
quizzes by `(subject_id, title)`, ignore soft-deleted quizzes/questions/choices during their
upserts, and only assign a slug if an optional column happens to exist. No migration in
the original repository creates `quizzes.slug`. Title edits and deleted rows therefore
make identity unreliable. Production data has not been inspected; a production slug
collision is a suspicion, not a confirmed diagnosis.

All original 700 question definitions, choices, zero-based correct-answer indexes,
explanations, titles and languages are retained. The shared catalogue scopes every lookup
to `health-competition` and the exact existing FR/AR subject. The Major/Subjects seeder is
unchanged and is never called by the repair command.

Stable slugs use `health-competition-<subject-slug>-qcm-<number>`. Original QCM numbers are
retained: Anesthesie AR and Infirmier FR are `02`; the other twelve are `01`. Known old
slugs and exact original titles are recognized only within the correct subject. Reruns
reuse IDs and restore matching deleted rows rather than adding copies. Existing quiz
titles, descriptions, ownership and activation settings are retained; restored quizzes
become inactive. New quizzes also start inactive for the existing admin review workflow.
Renamed legacy copies without a stored slug can be adopted only when the complete source
dataset matches. Shared questions in an ambiguous/partial copy stop the repair instead
of silently changing that quiz or creating another copy.

The additive migration creates a nullable, unique slug column only if absent. It neither
backfills nor changes any other quiz or educational record. If an installation already
has a slug column, it is left intact; collisions are checked before assigning Health slugs.

## Production commands (instructions only; not executed)

First include these source files in the reviewed production release. From the existing
VPS, use the commands below. Take a verified backup through the existing backup system
before applying anything. The migration command requires your established migration
credentials with ALTER permission; do not grant the restricted runtime role extra rights
or run unrelated migrations to bypass a permission error.

```sh
cd /opt/maroquiz

# Read-only inventory: current IDs, active question counts and publication states.
docker compose -f docker-compose.prod.yml exec -T php php artisan health-qcm:repair

# Enter maintenance; also pause any separately managed queue workers/importers.
docker compose -f docker-compose.prod.yml exec -T php php artisan down --retry=60
docker compose -f docker-compose.prod.yml stop scheduler

# Only the necessary nullable-slug migration; no other migrations or seeders.
docker compose -f docker-compose.prod.yml exec -T php php artisan migrate --path=database/migrations/2026_11_06_120000_add_stable_quiz_slugs.php --force

# Normal repair: reruns exactly the fourteen QCM seeders, updating existing records.
docker compose -f docker-compose.prod.yml exec -T php php artisan health-qcm:repair --apply --confirm=health-competition
```

**Cleanup is optional.** If the inventory reports ambiguous legacy duplicates, select the
specific unused quiz IDs to replace after reviewing which IDs to retain. For example,
replace `123,456` below with your reviewed IDs; those numbers are examples, not targets:

```sh
# Read-only eligibility/dependency check for those explicit IDs.
docker compose -f docker-compose.prod.yml exec -T php php artisan health-qcm:repair --cleanup-ids=123,456

# Explicitly delete ONLY those eligible IDs and rerun all fourteen QCMs atomically.
docker compose -f docker-compose.prod.yml exec -T php php artisan health-qcm:repair --cleanup-ids=123,456 --apply --confirm=health-competition
```

Cleanup permanently deletes only explicitly selected, identifiable Health quizzes and
their question/choice rows. Every row must match this catalogue's source text. Empty or
unrecognized quizzes are refused. All incoming foreign keys are checked, including
attempts, answers, ratings, shares, bookmarks, Concours links, video/social references and
historical/soft-deleted rows. Non-FK content-usage records are checked separately. Any
dependency refuses deletion, without an override. Content repair also refuses to change
referenced question data; complete matching quizzes can receive their stable slug in place.
Ambiguous or edited records stop the operation for explicit review. No guessed reassociation
or broad `WHERE subject_id IN (...) DELETE` is performed.

Cleanup and the complete fourteen-seeder repair share one transaction. Any error rolls
everything in that repair back. Major/quiz/question/choice locks serialize these seeders
and protect FK checks. Keep background writers paused during repair, particularly writers
to the deliberately FK-free content-usage registry. Run the command on the primary writer.

Only after successful repair and review of the final read-only inventory:

```sh
docker compose -f docker-compose.prod.yml exec -T php php artisan health-qcm:repair
docker compose -f docker-compose.prod.yml start scheduler
docker compose -f docker-compose.prod.yml exec -T php php artisan up
```

Resume separately managed workers as appropriate. If a command fails, keep writes paused
and review the reported IDs/dependencies. Never truncate tables, delete attempts, or reset
the database. Activate new/restored quizzes through the existing admin UI after review;
successful seeding alone does not publish them.

## Included seeders

- AnesthesieReanimationFRSeeder / AnesthesieReanimationARSeeder
- AssistanceMedicoSocialeFRSeeder / AssistanceMedicoSocialeARSeeder
- InfirmierPolyvalentFRSeeder / InfirmierPolyvalentARSeeder
- KinesitherapieReeducationFRSeeder / KinesitherapieReeducationARSeeder
- LaboratoireMedicalFRSeeder / LaboratoireMedicalARSeeder
- RadiologieFRSeeder / RadiologieARSeeder
- SageFemmeFRSeeder / SageFemmeARSeeder

No tests, builds, migrations, seeders or database operations were run during implementation.
Production execution and runtime verification remain pending.
