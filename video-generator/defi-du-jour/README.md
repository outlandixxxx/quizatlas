# Défi du jour

Separate portrait template registered as `defi-du-jour`. It uses the existing quiz exporter, one-question proposals, preview/replacement/approval flow, signed local authorization, Content Usage Registry, renderer, sequential batch queue and export/recovery tools. It does not have a countdown or explanation scene. An explanation is not required for this template; the requirement remains for **5 Secondes**.

In **Admin → YouTube Videos**, select **Défi du jour (Short)** and the source language. Select a Major/Subject, prepare proposals, preview/replace unsuitable questions, approve, then generate. Each video contains exactly one stored question, four distinct choices and one stored correct-answer ID. The QCM reference follows the existing video number convention. Subject/category and difficulty come from the approved export; the category icon uses the existing neutral icon rather than assuming every subject is Algorithms.

Shorts default to `D:\MaroQuiz\Maroquiz social media plans\short video`. Before launching, override any older console setting with:

```bash
export QUIZ_SHORT_EXPORT_DIR='/mnt/d/MaroQuiz/Maroquiz social media plans/short video'
bash video-generator/start-local-runner.sh
```

Existing Long Quiz and Facts destinations are unchanged. Batch snapshots keep their template, source text, choice IDs and correct-answer mapping across retries. Successful MP4s and exports are verified and reused; an export failure does not require regeneration. Templates must remain in separate approved batches. No new usage kind, database column or API route is introduced.

For an offline comparison using the saved read-only quiz snapshot, choose a fresh output directory:

```bash
node video-generator/render.js video-generator/output/defi-du-jour-review-20261110/input.json --draft --fps 30 --output-dir video-generator/output/defi-du-jour-next-review
node video-generator/defi-du-jour/preview.js video-generator/output/defi-du-jour-review-20261110/input.json video-generator/output/defi-du-jour-next-comparison 'Défés de jours.mp4' video-generator/output/defi-du-jour-next-review/defi-du-jour-reconnaitre-les-lettres.mp4
```

The renderer CLI is the existing offline preview entry point. It does not reserve content or record publication. The review snapshot uses a real stored French question and an unsaved preview video (`id: 0`); it cannot be submitted as an authorized production batch. Use the admin approval workflow for real generation and usage tracking.

The comparison helper renders/extracts nine matching timestamps without starting the queue. The source MP4 is only a comparison input. Runtime rendering uses independent local PNG, SVG, text, CSS and audio layers, without Canva or remote requests. See [assets/README.md](assets/README.md) for provenance and substitutions.

Question text stays in one original text node. A deterministic range clip reveals it in its final layout, preserving line breaks and connected Arabic shaping. Arabic reveals stop at word boundaries. Choice order is never shuffled; the highlight/check use the matching stored choice ID. Longer text wraps and fits down to readable size floors, extends the timeline where needed, and uses a compact footer when necessary. Content that still cannot fit fails clearly, so it can be replaced through the existing preview flow.

Focused checks:

```bash
node --test --test-concurrency=1 video-generator/defi-du-jour/defi-du-jour.test.js video-generator/defi-du-jour/audio.test.js video-generator/five-seconds/five-seconds.test.js video-generator/five-seconds/loudness.test.js
node --test --test-name-pattern='strict render →|render failure pauses|export collision|HTTP persistence' video-generator/quiz-batch.test.js
docker exec quizatlas-php vendor/bin/phpunit --filter 'daily_challenge|five_second_short|quiz_batch_reuses_source' tests/Feature/ContentUsageTest.php
```

Angular, from `frontend/`:

```bash
npx ng test --watch=false --include='src/app/features/admin/youtube-videos/youtube-videos.spec.ts' --include='src/app/features/admin/services/video-batch.api.spec.ts' --runner-config=vitest.style.config.mjs
```

The Laravel test class enforces in-memory SQLite. Preview/render output stays under the ignored `video-generator/output/` directory. No database mutation, seeder, production change, commit or deployment is part of this template integration.
