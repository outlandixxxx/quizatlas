// Offline checks against the actual production SSR build. No application DB or network.
import assert from 'node:assert/strict';
import http from 'node:http';
import https from 'node:https';
import net from 'node:net';
import { EventEmitter } from 'node:events';
import { JSDOM } from 'jsdom';

const category = {
  id: 1,
  slug: 'education',
  name_fr: 'Éducation',
  name_ar: 'التعليم',
  parent_id: null,
  is_active: true,
};
const record = {
  id: 1,
  slug: 'test-concours',
  name_fr: 'Concours de test',
  name_ar: 'مباراة تجريبية',
  description_fr: 'Description française pour ce test.',
  type: 'recruitment',
  category_id: 1,
  category,
  institution: null,
  exam_formats: ['qcm'],
  is_active: true,
};
const pdf = {
  id: 9,
  title: 'Notice officielle',
  document_type: 'official_announcement',
  year: 2026,
  file_size: '12 KB',
  available: true,
  source_url: null,
  attribution: 'Institution de test',
  view_path: '/public/concours-pdfs/9/view',
  download_path: '/public/concours-pdfs/9/download',
};
const announcement = {
  official_pdf: pdf,
  id: 9,
  concours_id: record.id,
  concours: record,
  institution: null,
  slug: 'session-test',
  title_fr: 'Session officielle de test',
  title_ar: 'إعلان تجريبي',
  description_fr: 'Description de la session de test.',
  description_ar: null,
  eligibility_fr: 'Conditions de test.',
  required_documents_fr: null,
  specialties: ['Informatique'],
  regions: ['Rabat'],
  positions: 5,
  official_publication_date: '2026-10-01',
  registration_opens_on: '2026-10-15',
  registration_deadline: '2026-10-31',
  examination_date: null,
  application_url: 'https://institution.example.test/apply',
  official_source_url: 'https://institution.example.test/notice',
  verification_status: 'verified',
  publication_status: 'published',
  registration_status: 'open',
  verified_at: '2026-10-24T12:00:00Z',
  published_at: '2026-10-24T13:00:00Z',
};
const currentRecord = {
  ...record,
  displayed_session_year: 2027,
  current_announcements: [{ ...announcement, session_year: 2027 }],
};
// Isolated SSR fixtures only; these are never inserted into the application database.
const preparationPdf = (id, extra = {}) => ({
  ...pdf,
  id,
  title: `Previous paper ${id}`,
  document_type: 'previous_exam',
  year: 2024,
  subject: 'Mathematics',
  specialty: 'Grade A',
  download_allowed: true,
  view_path: `/public/concours-pdfs/${id}/view`,
  download_path: `/public/concours-pdfs/${id}/download`,
  ...extra,
});
const page = (items, current = 1, last = 1) => ({
  success: true,
  data: {
    items,
    meta: { current_page: current, last_page: last, total: items.length, per_page: 12 },
  },
});

function fixture(value) {
  const url = new URL(value, 'https://api.maroquiz.com');
  if (url.pathname.endsWith('/public/concours-announcements/wadifa-fixture'))
    return [
      200,
      {
        data: {
          ...announcement,
          slug: 'wadifa-fixture',
          source_attribution: {
            provider: 'wadifa-info',
            name: 'Wadifa Info',
            url: 'https://www.wadifa-info.com/fr/146623/fixture',
            license: 'CC BY 4.0',
            license_url: 'https://creativecommons.org/licenses/by/4.0/',
            changes: 'selected_verified_adapted',
          },
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours-announcements/session-test'))
    return [200, { data: announcement }];
  if (url.pathname.endsWith('/public/concours-announcements/unknown-dates'))
    return [
      200,
      {
        data: {
          ...announcement,
          slug: 'unknown-dates',
          registration_opens_on: null,
          registration_deadline: null,
          registration_status: 'unknown',
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours-announcements/unavailable')) return [503, {}];
  if (url.pathname.includes('/public/concours-announcements/')) return [404, {}];
  if (
    url.pathname.endsWith('/public/concours-announcements') &&
    url.searchParams.get('session_scope') === 'history'
  )
    return [200, page([], Number(url.searchParams.get('page') || 1))];
  if (url.pathname.endsWith('/public/concours-announcements'))
    return [
      200,
      page(
        url.searchParams.get('q') === 'empty' || url.searchParams.get('concours_id') === '99'
          ? []
          : [
              url.searchParams.get('concours_id') === '98'
                ? {
                    ...announcement,
                    concours_id: 98,
                    registration_status: 'closed',
                    session_year: 2025,
                  }
                : announcement,
            ],
        Number(url.searchParams.get('page') || 1),
      ),
    ];
  if (url.pathname.endsWith('/public/concours-categories')) return [200, page([category])];
  if (url.pathname.endsWith('/public/concours-institutions')) return [200, page([])];
  if (url.pathname.endsWith('/public/concours/test-concours'))
    return [200, { success: true, data: currentRecord }];
  if (url.pathname.endsWith('/public/concours/previous-papers'))
    return [
      200,
      {
        data: {
          ...currentRecord,
          slug: 'previous-papers',
          preparation_qcm: {
            items: Array.from({ length: 12 }, (_, i) => ({
              id: 500 + i,
              title: `QCM fixture ${i}`,
              subject_name: 'Mathematics',
              questions_count: 8,
              duration: 15,
              difficulty: 'Beginner',
            })),
            meta: { current_page: 1, last_page: 2, total: 13, per_page: 12 },
          },
          preparation_options: [
            {
              id: 10,
              concours_id: 1,
              parent_id: null,
              name_fr: 'Secondaire',
              name_en: 'Secondary',
              name_ar: 'ثانوي',
              display_order: 0,
              is_active: true,
            },
            {
              id: 11,
              concours_id: 1,
              parent_id: 10,
              name_fr: 'Collège',
              name_en: 'Middle school',
              name_ar: 'إعدادي',
              display_order: 0,
              is_active: true,
            },
          ],
          resources: [
            ...Array.from({ length: 13 }, (_, index) =>
              preparationPdf(100 + index, { preparation_option_ids: index === 0 ? [11] : [] }),
            ),
            preparationPdf(200, {
              title: 'Correction A',
              document_type: 'correction',
              corrects_exam_pdf_id: 100,
              download_allowed: false,
            }),
            preparationPdf(201, {
              title: 'Correction B',
              document_type: 'correction',
              corrects_exam_pdf_id: 100,
            }),
          ],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/preparation-only'))
    return [
      200,
      {
        success: true,
        data: {
          ...record,
          id: 99,
          slug: 'preparation-only',
          displayed_session_year: 2028,
          current_announcements: [],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/closed-notice'))
    return [
      200,
      {
        success: true,
        data: {
          ...record,
          id: 98,
          slug: 'closed-notice',
          displayed_session_year: 2025,
          current_announcements: [
            { ...announcement, session_year: 2025, registration_status: 'closed' },
          ],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/archived-session'))
    return [
      200,
      {
        data: {
          ...record,
          slug: 'archived-session',
          displayed_session_year: 2027,
          session_announcement_state: 'archived',
          current_announcements: [],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/multiple-notices'))
    return [
      200,
      {
        data: {
          ...currentRecord,
          slug: 'multiple-notices',
          current_announcements: [
            ...currentRecord.current_announcements,
            { ...announcement, id: 10, title_fr: 'Second verified notice', session_year: 2027 },
          ],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/url-only-notice'))
    return [
      200,
      {
        data: {
          ...currentRecord,
          slug: 'url-only-notice',
          current_announcements: [
            {
              ...announcement,
              title_fr: 'Original verified URL-only notice',
              session_year: 2027,
              official_pdf: null,
              official_source_url: 'https://www.emploi-public.ma/fixture-notice?round=1',
              registration_opens_on: null,
              registration_deadline: null,
              examination_date: null,
              registration_status: 'unknown',
              announcement_status: 'published',
              preparation_option_ids: [11],
            },
          ],
        },
      },
    ];
  if (url.pathname.endsWith('/public/concours/unavailable')) return [503, {}];
  if (url.pathname.includes('/public/concours/')) return [404, {}];
  if (url.pathname.endsWith('/public/concours'))
    return [
      200,
      page(
        url.searchParams.get('q') === 'empty' ? [] : [currentRecord],
        Number(url.searchParams.get('page') || 1),
        3,
      ),
    ];
  throw new Error(`Unexpected outgoing request in offline SSR test: ${url}`);
}

function request(options) {
  const req = new EventEmitter();
  req.write = () => true;
  req.abort = req.destroy = () => {};
  req.setTimeout = () => req;
  req.end = () =>
    setImmediate(() => {
      const [status, data] = fixture(options.path || String(options));
      const res = new EventEmitter();
      res.statusCode = status;
      res.headers = { 'content-type': 'application/json' };
      res.rawHeaders = ['Content-Type', 'application/json'];
      res.resume = res.destroy = () => {};
      req.emit('response', res);
      res.emit('data', Buffer.from(JSON.stringify(data)));
      res.emit('end');
    });
  return req;
}
http.request = https.request = request;
globalThis.fetch = async (input) => {
  const [status, data] = fixture(typeof input === 'string' ? input : input.url);
  return new Response(JSON.stringify(data), {
    status,
    headers: { 'Content-Type': 'application/json' },
  });
};
const { reqHandler } = await import('../dist/frontend/server/server.mjs');

async function render(path) {
  return new Promise((resolve, reject) => {
    const timeout = setTimeout(() => reject(new Error(`SSR timed out: ${path}`)), 15000);
    const socket = new net.Socket();
    socket.encrypted = true;
    const req = new http.IncomingMessage(socket);
    req.method = 'GET';
    req.url = path;
    req.headers = { host: 'maroquiz.com' };
    req.push(null);
    const res = new http.ServerResponse(req);
    const chunks = [];
    res.write = (chunk) => {
      chunks.push(Buffer.from(chunk));
      return true;
    };
    res.end = (chunk) => {
      clearTimeout(timeout);
      if (chunk) chunks.push(Buffer.from(chunk));
      resolve({
        status: res.statusCode,
        document: new JSDOM(Buffer.concat(chunks).toString()).window.document,
      });
      return res;
    };
    reqHandler(req, res, reject);
  });
}

const directory = await render('/concours');
assert.equal(directory.status, 200);
assert.equal(directory.document.querySelector('h1')?.textContent?.trim(), 'Concours & Exams');
assert.ok(directory.document.querySelector('a[href="/concours/test-concours"]'));
assert.equal(
  directory.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours',
);
assert.equal(directory.document.querySelector('.notification-promotion button'), null);
assert.equal(directory.document.querySelector('[download]'), null);
assert.equal(directory.document.querySelectorAll('.ad-slot--banner').length, 2);
assert.equal(directory.document.querySelectorAll('main').length, 1);
assert.equal(directory.document.querySelectorAll('app-public-header').length, 1);
assert.ok(directory.document.querySelector('.breadcrumbs [aria-current="page"]'));
assert.ok(directory.document.querySelector('.public-sidebar'));
assert.equal(directory.document.querySelector('.hero-art')?.getAttribute('aria-hidden'), 'true');

const second = await render('/concours?page=2');
assert.equal(second.status, 200);
assert.equal(
  second.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours?page=2',
);
assert.ok(second.document.querySelector('a[rel=next]')?.href.includes('page=3'));
const filtered = await render('/concours?type=admission&page=2');
assert.equal(
  filtered.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours',
);
assert.ok(filtered.document.querySelector('meta[name=robots]')?.content.includes('noindex'));

const overview = await render('/concours/test-concours');
assert.equal(overview.status, 200);
assert.equal(
  overview.document.querySelector('h1')?.textContent?.trim().replace(/\s+/g, ' '),
  record.name_fr + ' 2027',
);
assert.equal(overview.document.documentElement.lang, 'en');
assert.equal(overview.document.querySelector('h1')?.lang, 'fr');
assert.equal(
  overview.document.querySelector('.alternate-title')?.textContent.trim(),
  record.name_ar,
);
for (const link of overview.document.querySelectorAll('.section-nav a, .quick-grid a'))
  assert.ok(overview.document.getElementById(link.getAttribute('href').split('#')[1]));
assert.equal(
  overview.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours/test-concours',
);
assert.equal(
  JSON.parse(overview.document.querySelector('#structured-data').textContent)['@type'],
  'BreadcrumbList',
);

assert.ok(directory.document.querySelector('a[href="/concours/annonces/session-test"]'));
assert.ok(overview.document.querySelector('app-announcement-card'));
const detail = await render('/concours/annonces/session-test');
assert.equal(detail.status, 200);
assert.equal(detail.document.querySelector('h1')?.textContent?.trim(), announcement.title_fr);
assert.equal(detail.document.querySelector('h1')?.lang, 'fr');
assert.equal(
  detail.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours/annonces/session-test',
);
assert.equal(
  detail.document.querySelector('meta[property="og:title"]')?.content,
  announcement.title_fr + ' — MaroQuiz',
);
assert.equal(
  detail.document.querySelector('.registration-cta')?.href,
  announcement.application_url,
);
assert.ok(detail.document.querySelector('time[datetime="2026-10-31"]'));
assert.ok(
  detail.document.querySelector(
    'a[href="https://api.maroquiz.com/api/v1/public/concours-pdfs/9/view"]',
  ),
);
assert.ok(
  detail.document.querySelector(
    'a[href="https://api.maroquiz.com/api/v1/public/concours-pdfs/9/download"]',
  ),
);
assert.equal(detail.document.querySelector('#eligibility-title'), null);
assert.equal(detail.document.querySelector('#required_documents-title'), null);
for (const id of ['past-papers-title', 'guides-title', 'specific-qcm-title', 'related-qcm-title'])
  assert.ok(overview.document.getElementById(id));
assert.equal(
  JSON.parse(detail.document.querySelector('#structured-data').textContent).itemListElement.length,
  4,
);
const preparation = await render('/concours/preparation-only');
assert.equal(preparation.status, 200);
assert.ok(
  preparation.document
    .querySelector('#official-announcement')
    .textContent.includes('Not announced yet'),
);
assert.equal(preparation.document.querySelector('.session-summary'), null);
assert.ok(preparation.document.querySelector('.session-label').textContent.includes('2028'));
assert.ok(preparation.document.title.includes('2028'));
assert.equal(
  preparation.document.querySelector('link[rel=canonical]').href,
  'https://maroquiz.com/concours/preparation-only',
);
const papersPage = await render('/concours/previous-papers');
assert.equal(papersPage.status, 200);
const papersSection = papersPage.document.querySelector('#past-papers');
const preparationSelector = papersPage.document.querySelector('#preparation-option');
assert.ok(preparationSelector);
assert.equal(preparationSelector.querySelectorAll('option').length, 3);
assert.equal(preparationSelector.value, '');
assert.ok(preparationSelector.textContent.includes('Secondary › Middle school'));
assert.equal(preparationSelector.getAttribute('aria-controls'), 'past-papers qcm summaries guides');
assert.equal(papersPage.document.querySelectorAll('#qcm .qcm-card').length, 12);
assert.ok(papersPage.document.querySelector('#qcm a[href="/app/quiz/500"]'));
assert.ok(papersPage.document.querySelector('#qcm nav button'));
assert.equal(papersPage.document.querySelector('#qcm a[href*="/questions"]'), null);
assert.equal(papersPage.document.querySelector('a[href*="preparation_option_id"]'), null);
assert.equal(papersSection.querySelectorAll('.exam-with-corrections').length, 12);
assert.equal(papersSection.querySelectorAll('app-concours-pdf').length, 14);
const firstPaper = papersSection.querySelector('.exam-with-corrections');
assert.ok(firstPaper.textContent.includes('Mathematics'));
assert.ok(firstPaper.textContent.includes('Grade A'));
assert.ok(firstPaper.textContent.includes('Correction A'));
assert.ok(firstPaper.textContent.includes('Correction B'));
assert.ok(firstPaper.textContent.includes('Institution de test'));
assert.ok(firstPaper.querySelector('a[href$="/200/view"]'));
assert.equal(firstPaper.querySelector('a[href$="/200/download"]'), null);
assert.ok(firstPaper.querySelector('a[href$="/201/download"]'));
assert.equal(papersSection.querySelector('a[href*="/app/library"]'), null);
assert.equal(papersSection.querySelector('a[href$="/112/view"]'), null);
assert.equal(papersSection.querySelector('.paper-pagination button').disabled, true);
assert.equal(
  papersPage.document.querySelector('link[rel=canonical]').href,
  'https://maroquiz.com/concours/previous-papers',
);
const closed = await render('/concours/closed-notice');
assert.equal(closed.status, 200);
assert.ok(closed.document.querySelector('.historical-notice'));
assert.equal(closed.document.querySelector('.status-pill')?.getAttribute('data-status'), 'closed');
const archived = await render('/concours/archived-session');
assert.equal(archived.status, 200);
assert.ok(
  archived.document.querySelector('#official-announcement').textContent.includes('Archived'),
);
assert.equal(archived.document.querySelector('#official-announcement app-announcement-card'), null);
const multiple = await render('/concours/multiple-notices');
assert.equal(multiple.status, 200);
assert.equal(
  multiple.document.querySelectorAll('#official-announcement app-announcement-card').length,
  2,
);
assert.equal(multiple.document.querySelector('.session-summary'), null);
const unknown = await render('/concours/annonces/unknown-dates');
assert.equal(unknown.status, 200);
assert.equal(unknown.document.querySelector('.registration-cta'), null);
assert.equal(unknown.document.querySelector('.overview-metadata time'), null);
assert.ok(unknown.document.querySelector('.status-label').textContent.includes('Unknown'));
for (const [path, code] of [
  ['/concours/annonces/missing', 404],
  ['/concours/annonces/unavailable', 503],
]) {
  const result = await render(path);
  assert.equal(result.status, code);
  assert.ok(result.document.querySelector('meta[name=robots]')?.content.includes('noindex'));
}
const statusFilter = await render('/concours?registration_status=open');
assert.equal(statusFilter.status, 200);
assert.ok(statusFilter.document.querySelector('meta[name=robots]')?.content.includes('noindex'));
assert.equal(
  statusFilter.document.querySelector('link[rel=canonical]')?.href,
  'https://maroquiz.com/concours',
);
const empty = await render('/concours?q=empty');
assert.equal(empty.status, 200);
assert.ok(empty.document.body.textContent.includes('No matching concours'));
for (const base of ['/concours', '/concours/test-concours']) {
  for (const value of ['2', '0', '-1', 'invalid', '100001']) {
    const invalid = await render(`${base}?ann_page=${value}`);
    assert.equal(invalid.status, 404, `${base}?ann_page=${value}`);
    assert.ok(invalid.document.querySelector('meta[name=robots]')?.content.includes('noindex'));
    assert.equal(invalid.document.querySelector('#structured-data'), null);
  }
}
for (const [path, status] of [
  ['/concours/missing', 404],
  ['/concours/unavailable', 503],
  ['/concours?page=100', 404],
]) {
  const result = await render(path);
  assert.equal(result.status, status, path);
  assert.ok(result.document.querySelector('meta[name=robots]')?.content.includes('noindex'), path);
}
console.log(
  'Concours SSR checks passed: public layout, preserved advertisements, crawlable pages, language fallback, canonical pagination, preparation PDFs with multiple corrections and download permissions, filters, empty/error states, announcement feeds/details, date precision, publication visibility errors and honest future features.',
);

const urlOnly = await render('/concours/url-only-notice');
assert.equal(urlOnly.status, 200);
const urlOnlyOfficial = urlOnly.document.querySelector('#official-announcement');
assert.ok(urlOnlyOfficial.textContent.includes('Original verified URL-only notice'));
assert.equal(urlOnlyOfficial.querySelectorAll('app-concours-pdf').length, 0);
assert.ok(
  urlOnlyOfficial.querySelector('a[href="https://www.emploi-public.ma/fixture-notice?round=1"]'),
);
assert.equal(
  urlOnly.document.querySelector('link[rel=canonical]').href,
  'https://maroquiz.com/concours/url-only-notice',
);
console.log('Phase 5 verified URL-only announcement SSR check passed.');

const followAction = urlOnly.document.querySelector('app-concours-follow button');
assert.ok(followAction, 'Permanent pages offer the guest follow action in SSR.');
assert.ok(followAction.textContent.includes('Follow this concours'));
assert.equal(followAction.disabled, false);
console.log('Phase 6 guest follow SSR check passed without private subscription requests.');

const wadifaDetail = await render('/concours/annonces/wadifa-fixture');
assert.equal(wadifaDetail.status, 200);
assert.equal(
  wadifaDetail.document.querySelector('app-announcement-source a').href,
  'https://www.wadifa-info.com/fr/146623/fixture',
);
assert.ok(
  !wadifaDetail.document.querySelector('app-announcement-source a').rel.includes('nofollow'),
);
assert.equal(
  wadifaDetail.document.querySelector('.source-information a').href,
  'https://creativecommons.org/licenses/by/4.0/',
);
assert.equal(
  wadifaDetail.document.querySelector('.official-source a').href,
  announcement.official_source_url,
);
assert.equal(
  wadifaDetail.document.querySelector('link[rel=canonical]').href,
  'https://maroquiz.com/concours/annonces/wadifa-fixture',
);
assert.equal(detail.document.querySelector('.source-information'), null);
console.log(
  'Phase 5F SSR attribution and independent official-source checks passed (isolated responses).',
);
