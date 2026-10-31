# MaroQuiz — RSS factual metadata integration

Local assessment on 27 October 2026. This extends the existing Phase 5C discovery inbox;
it does not replace its registry, parser, provenance, matching or publication workflow.
No production deployment or notification/push activation is authorized by this work.

**Assessment basis and limits**

Moroccan Law 2-00 distinguishes protected expression from unprotected simple data.
Articles 3–5 protect original works, original titles and original selection/arrangement
of databases. Article 8 excludes official legislative/administrative/judicial texts,
current news and simple data. The exclusion does not make a publisher's whole article,
headline, pictures or compilation free to reproduce. Attribution alone is not a licence.
Access rules, contract terms and other applicable law still matter independently.
[Law 2-00, Articles 3–5 and 8](https://www.wipo.int/wipolex/fr/legislation/details/19766).

The later Law 66-19 was also examined in the official gazette (pages 27–29). It expressly
includes journalistic works and adds provisions concerning reprography, resale and
digital exploitation; it does not repeal Article 8's simple-data exclusion. This is
not reliance on a blanket US-style fair-use or data-mining exception.
[Official gazette 7158, Law 66-19](https://www.sgg.gov.ma/BO/FR/2873/2023/BO_7158_Fr.pdf).

The resulting **internal technical/use assessment** supports a limited Alwadifa
identifiers/dates/links pilot for private editorial review. It is an inference from
the reviewed law, site notices and access rules, **not written publisher authorization,
a court ruling or a guarantee of legality for recurring/commercial redistribution**.
The pilot does not rely on, request or assert a publisher grant. A change to the scope,
terms, access rules or jurisdiction requires reassessment; unresolved contractual,
database-selection and unfair-competition questions are not declared settled here.

| Source | Reviewed evidence | Decision for this workflow |
| --- | --- | --- |
| Alwadifa Maroc | Homepage has a general rights-reserved footer; no specific additional reuse prohibition was found in the examined homepage/footer links and targeted searches. `robots.txt` has `User-agent: *` / `Allow: /`. Phase 5C confirmed a supported RSS response. | Limited private factual-metadata pilot is supportable under the assessment above. No headline or expressive GUID is retained; no publisher licence is asserted. Live access must still succeed normally. |
| Dreamjob | Terms expressly limit reproduction of pages/data to private, personal, noncommercial information and require prior written authorization for broader use. | Unavailable for this application workflow under the reviewed terms. The owner does not wish to obtain a grant; this implementation does not assume those terms are unenforceable merely because facts lack copyright. No fresh feed request. |
| Orientation Chabab | Similar restrictive data-reuse terms. The earlier 26 October HTTP 403 was superseded by a normal HTTP 200 XML response in the owner's requested 27 October technical recheck: RSS 2.0 structure, 100 items. | Technical RSS access confirmed. Application collection remains unavailable under the reviewed reuse terms. No source was enabled and no access restriction was bypassed. |

Sources: [Alwadifa homepage](https://alwadifa-maroc.com/),
[Alwadifa robots](https://alwadifa-maroc.com/robots.txt),
[Dreamjob terms](https://www.dreamjob.ma/privacy-policy/),
[Orientation terms](https://orientation-chabab.com/privacy-policy).
Robots permission is an access signal, not a copyright licence; public RSS is not
unrestricted reuse permission. No written grant was obtained or recorded.

**Orientation technical correction — 27 October 2026**

The owner correctly reported that `https://orientation-chabab.com/feed` is accessible.
One bounded normal GET, checked at **17:55 UTC**, returned **HTTP 200**,
`application/xml`, **60,899 bytes** and well-formed XML with RSS 2.0 structure.
All **100 items** have a GUID, title and link; all item links point to
`orientation-chabab.com`. The earlier 403 remains historical evidence and is **not a
current technical-access blocker**. The admin source label now reflects this distinction.

The inspected publication-date strings are malformed, for example
`2026-10-16T23:51:29-04:00+00:00` (two timezone offsets). None of the 100 passes RFC RSS
date validation; the existing strict parser leaves such dates unknown. XML accessibility
does not establish that every RSS field conforms to its expected format.

This was a technical read-only check, without redirects, cookies, authentication,
User-Agent switching or anti-bot bypass. No records were imported, source settings
changed, or collection activated. The separately reviewed reuse-terms constraint remains.
Metadata-only evidence: [orientation-access-recheck.json](artifacts/concours-rss-facts/orientation-access-recheck.json).
The earlier Phase 5C request results and its then-generic Orientation fixture remain
unchanged as historical evidence.
The six factual-metadata regression tests passed again (**162 assertions**), and the
configuration syntax check passed. This correction changes the current source label
and report; collection gates and database records remain unchanged.

**Narrow implementation**

- Reuses `AuthorizedFeedClient`, `FeedParser`, `ConcoursDiscoveryService`, existing
  admin APIs and revisions. No new database tables, migration or dependency.
- Adds an exact-source/date-limited factual assessment in configuration, valid from
  27 October until 26 November 2026. Its evidence string explicitly says **internal
  Article 8 factual-data assessment; no publisher licence**. It does not enable any
  source, add an authorized URL or change a global switch.
- Existing enabled/allowed/evidence/check-date/exact-feed-URL gates still apply.
  A factual assessment additionally requires the exact reviewed key, RSS URL, source
  kind/method, compatible evidence, an unexpired review and at least 720 minutes.
  An arbitrary or expired `factual-metadata:` evidence string cannot activate access.
  For the three reviewed candidates, a generic “public RSS” evidence note also fails:
  it cannot silently fall back to unrestricted headline collection. Reusing a different
  independent authorization in the future requires reviewing the configured assessment.
- Retains at most **10 relevant observations per feed check**. The original headline
  is used transiently for the existing conservative public-employment/academic classifier
  and hashed change detection. Only a generated technical label, hashed source ID,
  source/article URL, declared publication date and fixed classification suggestions
  are stored, with existing timestamps and revision provenance. All other factual
  fields stay null until independently checked. The source date is not an official
  application deadline or verified government publication date.
  Missing GUIDs retain the existing normalized-URL fallback; URL-only observations
  preserve a known stable identifier and do not create a new record or revision.
- No descriptions, HTML/article text, images, attachments or PDF bodies are stored;
  no article, attachment or PDF URL is fetched. A changed transient headline changes
  the observation digest and reopens review without storing its wording.
- Matching remains based on independently verified official URL/identity and explicit
  compatible facts; there is no fuzzy title merge. Approval requires official-source
  verification and an explicitly entered official title, using an existing concours
  and tracks. It creates an ordinary draft; publication remains separate.
- Retains TLS, exact hosts, public-IPv4 DNS validation/pinning, no proxies/redirects,
  5-second connect/15-second total timeout, 1 MiB/100-entry XML limits, no immediate
  retries, shared scheduler locking/rate limits and source error isolation. A factual
  source receiving 401/403/429 or unsupported HTML/media is disabled with its error
  visible, requiring reassessment before another collection.
- The admin registry shows assessment/unavailability reasons separately from the
  actual enabled state, transport history and publisher authorization. Factual labels
  are identified as technical; no copied headline is presented as original content.

**Isolation and validation**

The controlled fixture probe passed first: three synthetic RSS items, two relevant
records, actual authenticated admin listing HTTP 200, no replay duplicates/revisions,
no publication, notifications or application database writes. It uses a fresh in-memory
SQLite database, removes/purges application database connections, uses an isolated JWT
secret/test admin and invokes the existing HTTP kernel with its real auth/admin policy.
The six new feature tests independently exercise this route and workflow.

Exactly **one live Alwadifa RSS GET** followed, at **17:14:30 UTC on 27 October 2026**:

| Check | Actual result |
| --- | --- |
| HTTP / Content-Type | **200 / `text/xml; charset=utf-8`** |
| Response size / parsed entries | **38,266 bytes / 55 RSS items** |
| Retained in isolated database | **10 factual-metadata records**, all pending |
| Actual admin discoveries listing | **HTTP 200**, all 10 returned |
| Repeated ingestion of the same payload | **0 duplicate records, 0 new revisions**; offline replay |
| Official evidence | All 10 `official_url` values null; no official verification asserted |
| Publication / notifications / app writes | **0 / 0 / 0** |
| Publisher written authorization | **False**; internal factual-data assessment stated explicitly |

The probe's permanent marker prevents another automatic Alwadifa live attempt. No Dreamjob
feed request was made. No Orientation feed request was made during the initial Alwadifa
pilot; the owner's later technical recheck above performed one normal GET. No source article
or concours PDF was fetched. The raw Alwadifa live feed was not saved to disk. Only minimized database/API results
and transport status/size/digest were retained. In-memory records disappeared when the
probe exited; **the main application's discoveries inbox is still empty**.

Resulting isolated records, with **source-declared** publication dates (not verified
official dates), listed in the actual admin endpoint's order:

| Isolated ID | Source article | Declared date | Initial category / type |
| --- | --- | --- | --- |
| 10 | [23726](https://alwadifa-maroc.com/offre/show/id/23726) | 2026-10-20 | employment / opening |
| 9 | [23727](https://alwadifa-maroc.com/offre/show/id/23727) | 2026-10-21 | employment / opening |
| 8 | [23731](https://alwadifa-maroc.com/offre/show/id/23731) | 2026-10-21 | employment / opening |
| 7 | [23732](https://alwadifa-maroc.com/offre/show/id/23732) | 2026-10-22 | employment / opening |
| 6 | [23733](https://alwadifa-maroc.com/offre/show/id/23733) | 2026-10-22 | employment / opening |
| 5 | [23739](https://alwadifa-maroc.com/offre/show/id/23739) | 2026-10-23 | academic / opening — classifier caveat below |
| 4 | [23742](https://alwadifa-maroc.com/offre/show/id/23742) | 2026-10-24 | employment / opening |
| 3 | [23744](https://alwadifa-maroc.com/offre/show/id/23744) | 2026-10-25 | employment / opening |
| 2 | [23747](https://alwadifa-maroc.com/offre/show/id/23747) | 2026-10-26 | employment / opening |
| 1 | [23749](https://alwadifa-maroc.com/offre/show/id/23749) | 2026-10-26 | employment / opening |

For example, isolated #1 displays `RSS metadata · alwadifa-maroc · 451ea2101fa6`,
the source attribution/article link, declared date and pending status. Its source ID is
an opaque SHA-256 digest. Institution, session, grade, specialty and deadline remain
unknown; no associations were inferred. Those IDs do not refer to application records.

Review of the sample's academic suggestion exposed a reproducible classifier ambiguity:
public recruitment requiring a Master degree could be suggested as academic admission.
Controlled French/Arabic examples confirm the defect; article #23739 itself was not
independently verified and its actual official category is not asserted here. Explicit public
recruitment now takes precedence over degree-name keywords, with French/Arabic
regressions. The original live response, including its initial suggestion, is preserved;
no second GET or fabricated corrected live result is claimed. The corrected classifier
was tested against controlled input. Suggestions still require official editorial review.
This sample does not establish successful live academic-admissions collection.

A transport reliability issue was also addressed: Guzzle can wrap header/progress
exceptions, hiding the original HTTP refusal code. Sanitized error extraction now
retains nested codes so an access refusal remains visible and disables factual collection
rather than being mistaken for an ordinary retryable error. Regression coverage includes
wrapped 403, denied access, no next-interval request, invalid/expired factual evidence,
bounded minimization, idempotence, changed observations and official-title/draft checks.

Evidence: [live check](artifacts/concours-rss-facts/live-check.json),
[actual isolated admin listing](artifacts/concours-rss-facts/live-admin-list.json),
[fixture check](artifacts/concours-rss-facts/fixture-check.json),
[classification caveat](artifacts/concours-rss-facts/live-classification-caveat.json),
[source assessment](artifacts/concours-rss-facts/source-assessment.json).

Final validation:

- **Laravel: 127 tests, 2,910 assertions passed**. Six new factual-metadata tests;
  the two classifier examples extend the existing multi-source test. The focused
  discovery run passed **32 tests / 582 assertions**; it is a subset, not additional tests.
- **Angular: 276 tests across all 63 files passed**. The discovery component subset
  passed **19 tests**, including unavailable-source messaging and mandatory official
  title entry for technical metadata labels.
- **PostgreSQL integration passed**, including existing source/provenance, duplicate
  grouping, draft conversion, preparation/PDF/correction/QCM/session, following/outbox
  and constraint checks. Random-schema fixture DDL/data rolled back completely.
- **Production browser/server build, Concours SSR and SEO passed**. Initial browser
  bundle remains 463.02kB; the discoveries lazy chunk is 54.29kB. The first build attempt
  failed on sandbox DNS for existing Google Fonts inlining; the approved network build
  succeeded without changing application/font configuration.
- Existing **10 component stylesheet-budget warnings** and Node's `url.parse`
  deprecation warning remain. No dependency/lockfile, CSS budget, global style or public
  route was changed. Scoped Pint and `git diff --check` passed.
- The authenticated admin **API listing was actually executed** for isolated fixture
  and live-derived records. Angular tests use the real component template with controlled
  responses. No new manual visual acceptance or real-browser matrix is claimed here.

Commands from the repository root:

```sh
docker exec quizatlas-php php vendor/bin/phpunit --log-junit artifacts/concours-rss-facts/phpunit.xml
docker exec quizatlas-php php vendor/bin/phpunit --filter='Concours(FactualMetadata|MultiSource|Discovery)Test' --log-junit artifacts/concours-rss-facts/discovery-phpunit.xml
docker exec quizatlas-php php tests/Support/check_concours_factual_metadata.php --fixture
docker exec quizatlas-php php tests/Support/check_concours_announcements_postgres.php
docker exec quizatlas-php php tests/Support/check_concours_phase5c.php --verify
```

The live command was executed **once**, after isolated fixture checks passed:
`docker exec quizatlas-php php tests/Support/check_concours_factual_metadata.php --live-alwadifa`.
It refuses another live attempt once `live-attempt.json` exists. Do not remove this
marker to silently rerun the check; a new test needs its scope/access reassessed.

From `frontend/`:

```sh
npm test -- --watch=false --runner-config=vitest.style.config.mjs
npm test -- --watch=false --ts-config=tsconfig.concours-spec.json --include='src/app/features/concours/discovery.spec.ts' --runner-config=vitest.style.config.mjs
npm run build -- --configuration production
node scripts/check-concours-ssr.mjs
node scripts/check-seo.mjs
```

**Preservation and exact changes**

Before edits, the dirty tree and **1,450 source-file hashes** were recorded and sources
were archived privately in `.local-backups/concours-rss-facts-20261027T170329Z/` (directory
0700, files 0600). The existing Phase 5C database/storage backup was retained. No new
application database dump/restore or migration was needed because all ingestion writes
were isolated. No application record, source setting/history or file was rewritten.

The read-only Phase 5C guard passes: all **59 pre-Phase-5C tables** match their baseline
over original columns; the additional matches table remains empty. The three candidate
rows (IDs 8–10) match the starting values completely, including unknown permission,
null evidence/checks/errors, disabled state and version 1. All **12 stored files** match.
The same guard retains the previous seven sources and existing migration records,
237 users, 2,489 quizzes, 26,613 questions, concours/announcements/revisions, PDF/correction
links and preparation/QCM associations. Main-application discoveries, subscriptions,
notifications and delivery work remain empty. No destructive seeding or schema change
was performed against application data.

Evidence: [application state before](artifacts/concours-rss-facts/application-before.json),
[after](artifacts/concours-rss-facts/application-after.json),
[starting workspace](artifacts/concours-rss-facts/starting-workspace.json),
[exact changes](artifacts/concours-rss-facts/source-changes.json),
[test summary](artifacts/concours-rss-facts/test-results.json).

**16 source files: 12 modified, 4 new; none removed.** The other **1,438 prior source
files** remain byte-for-byte unchanged. Relative to this task's starting workspace:

```text
backend/CONCOURS_RSS_FACTUAL_METADATA.md (new)
backend/app/Console/Commands/DiscoverConcoursAnnouncements.php
backend/app/Http/Controllers/Api/AdminConcoursDiscoveryController.php
backend/app/Models/ConcoursDiscovery.php
backend/app/Services/ConcoursDiscovery/AuthorizedFeedClient.php
backend/app/Services/ConcoursDiscovery/CandidateClassifier.php
backend/app/Services/ConcoursDiscovery/FactualMetadataPolicy.php (new)
backend/app/Services/ConcoursDiscoveryService.php
backend/config/concours_discovery.php
backend/tests/Feature/ConcoursFactualMetadataTest.php (new)
backend/tests/Feature/ConcoursMultiSourceTest.php
backend/tests/Support/check_concours_factual_metadata.php (new)
frontend/src/app/core/models/concours-discovery.ts
frontend/src/app/features/admin/concours-discoveries/concours-discoveries.html
frontend/src/app/features/admin/concours-discoveries/concours-discoveries.ts
frontend/src/app/features/concours/discovery.spec.ts
```

The existing three-format feed test explicitly configures independently authorized
synthetic fixtures, with mocked HTTP/DNS, rather than treating that test grant as a
live-site factual assessment. New tests exercise the real reviewed-source restrictions.
Earlier Phase 5C report/research/browser evidence is retained separately. New evidence
is under `backend/artifacts/concours-rss-facts/`; generated `frontend/dist/` is ignored.

**Activation status and remaining limits**

- **Alwadifa:** a real, bounded private factual workflow has been demonstrated.
  It can be configured only in the limited assessed mode, with the exact evidence string,
  source permission recorded as an internal collection decision, at least 720 minutes,
  the exact reviewed URL and the existing global gate. That decision is explicitly
  **not publisher written authorization**. No recurring collection was activated here.
  Reassess access/terms before 26 November 2026 or on any refusal/terms change.
- **Dreamjob:** unavailable for application collection under the examined restrictive
  reuse terms. No authorization or contrary legal conclusion was fabricated.
- **Orientation Chabab:** technical access is confirmed: HTTP 200 and RSS 2.0 XML with
  100 items in the 27 October recheck. Its publication-date fields are malformed.
  Application collection remains unavailable under the reviewed reuse terms; the old
  403 is historical, not a current access blocker. No import or activation was performed.
- Independent official-host verification, an official title and actual concours/track
  choices remain editorial work before a draft/publication. Additional university
  hostnames require the existing exact-host review; none was guessed.

All three application source rows retain their existing disabled/unknown settings and
history. The global discovery switch is false, the authorized feed URL list is empty,
and notifications/push are false. The actual app inbox has no probe records. To use the
demonstrated workflow beyond this isolated check, configure these existing gates for the
limited reviewed source/scope; unrestricted feed/headline reuse and production activation
are not established by this result. No deployment was performed.
