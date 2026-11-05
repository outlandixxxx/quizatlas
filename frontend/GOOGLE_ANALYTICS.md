# Google Analytics 4

Measurement ID: `G-KWRJXMVGW4`. No API secret or backend changes are required.

## Required GA4 account setup

In **Admin → Data streams → the maroquiz.com web stream**, turn **Enhanced measurement off** before releasing this integration. Angular owns every `page_view`; `send_page_view: false` alone does not disable Enhanced Measurement's separate history listener. Turning the full feature off also prevents automatic form/search/click/download data from bypassing the application's sanitized events. Keep user-provided data collection and Google Signals off. Do not add another GA/GTM tag in the dashboard, HTML or layout.

Reference: [Google's manual page-view guidance](https://developers.google.com/analytics/devguides/collection/ga4/views).

## Runtime behavior

- Initialization runs after browser rendering, never during SSR. Development builds and hosts other than `maroquiz.com` or `www.maroquiz.com` never load the tags.
- Consent Mode v2 starts with all four optional consent types denied. Neither GA nor AdSense is requested before its separate opt-in. Choices expire after 180 days and synchronize between tabs. Blocked browser storage permits a session-only choice.
- One loader configures GA once. An accepted initial visit and subsequent successful Angular navigations each produce one manual `page_view`. Visits before consent are not replayed. Cancelled/failed navigation is not tracked.
- Locations contain static route patterns, such as `/app/results/:id`, rather than real parameter values. Queries, fragments, referrers and resolved/user-generated titles are excluded. There are no account IDs, emails, answers, scores, XP or authentication tokens in the application's event payloads.
- Cookie settings remain available on every page. Analytics withdrawal disables further hits and clears this integration's first-party GA cookies. Advertising withdrawal saves the choice and reloads the page to unload running ad code.
- The existing AdSense publisher ID is preserved. Advertising opt-in requests non-personalized ads; advertising user-data and personalization consent stay denied. Existing ad slots and premium placement checks are unchanged. This minimal banner is not a Google-certified TCF CMP; personalized AdSense in the EEA/UK/Switzerland requires one. [Google's publisher requirements](https://support.google.com/adsense/answer/13554116).
- The repository Nginx CSP allows the GA loader/collection endpoints and existing AdSense loader. This is a local configuration change; nothing has been applied to the VPS.

## Verification

From `frontend/`:

```sh
NG_BUILD_MAX_WORKERS=2 npm test -- --watch=false --ts-config=tsconfig.analytics-spec.json --include=src/app/core/services/google-tracking.spec.ts --include=src/app/shared/components/cookie-consent/cookie-consent.spec.ts --include=src/app/app.spec.ts
NG_BUILD_MAX_WORKERS=2 npm run build -- --configuration production
node scripts/check-google-analytics-browser.cjs
```

The browser check uses the production build, virtual production URLs, the repository CSP and mocked Google/API responses. It sends no real analytics hits. It also renders the built Angular server with mocked server-side API fetches to check SSR separately.

After a separately authorized deployment and the account setup above:

1. Open GA4 **Reports → Realtime** for the property containing `G-KWRJXMVGW4`. Use a fresh browser profile without a blocking extension. [Google's Realtime guidance](https://support.google.com/analytics/answer/9271392).
2. Open `https://maroquiz.com`. Before consent, Network should contain no `gtag/js?id=G-KWRJXMVGW4` or GA collection request.
3. Select analytics only and save. Expect one tag load and one `page_view` for the current page. Navigate using site links; expect one new `page_view` per successful navigation. Refresh once; expect one view for that load.
4. Inspect the `g/collect` requests: `tid` is the measurement ID; `en` is `page_view`; `dl` is the generalized location. Sensitive URL values must not appear. Automatic session/engagement events from GA itself may also appear; do not count those as duplicate page views.
5. Confirm the visit/events in Realtime. Withdraw analytics through Cookie settings, then navigate: no new application `page_view` should be sent. Reload and confirm the denied choice persists.

Local checks cannot establish GA account settings, live ingestion or the deployed CSP. No production visit, Google account configuration, deployment or VPS operation is performed by these checks.
