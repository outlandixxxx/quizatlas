#!/usr/bin/env bash
# The Windows wrapper delegates all dependency checks and rendering to Ubuntu.
set -euo pipefail
PROJECT_ROOT="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")/.." && pwd -P)"
cd "$PROJECT_ROOT"
fail() { printf 'ERROR: %s\n' "$*" >&2; exit 1; }
case "${1:-}" in ''|--check) ;; *) fail 'Usage: bash video-generator/start-local-runner.sh [--check]' ;; esac
[[ "$(uname -s)" == Linux ]] || fail 'Run this script inside Ubuntu/WSL.'
command -v node >/dev/null || fail 'Linux Node.js is missing. Load your existing Ubuntu Node installation, then retry.'
node -e 'if (process.platform !== "linux" || Number(process.versions.node.split(".")[0]) < 20) process.exit(1)' || fail 'Linux Node.js 20+ is required; a Windows node.exe cannot render this project.'
printf 'Linux Node: %s (%s)\n' "$(command -v node)" "$(node --version)"
for variable in FFMPEG_PATH FFPROBE_PATH; do
  if [[ "$variable" == FFMPEG_PATH ]]; then binary="${FFMPEG_PATH:-ffmpeg}"; else binary="${FFPROBE_PATH:-ffprobe}"; fi
  command -v "$binary" >/dev/null || fail "Ubuntu dependency $binary is missing. Use the existing Linux installation or set $variable to its Linux executable path."
  resolved="$(command -v "$binary")"
  [[ "${resolved,,}" != *.exe ]] || fail "$variable resolves to a Windows executable. Use the existing Ubuntu FFmpeg/FFprobe installation."
  "$binary" -version >/dev/null 2>&1 || fail "$binary cannot run inside Ubuntu. Check $variable; do not configure a Windows executable."
  printf '%s: %s\n' "$variable" "$resolved"
done
node <<'JS'
const fs = require('node:fs');
(async () => {
  for (const name of ['video-generator', 'fact-generator']) {
    let chromium;
    try { ({ chromium } = require(process.cwd() + '/' + name + '/node_modules/playwright')); }
    catch { throw Error(`Ubuntu Playwright dependencies are missing in ${name}. Reuse/install them in Ubuntu with npm ci in that folder, never in Windows.`); }
    const executable = chromium.executablePath();
    if (!fs.existsSync(executable) || executable.endsWith('.exe')) throw Error(`Linux Chromium is missing for ${name}. In Ubuntu, run: cd ${process.cwd()}/${name} && npx playwright install chromium`);
    let browser;
    try { browser = await chromium.launch({ headless: true }); }
    catch (error) { throw Error(`Linux Chromium cannot start for ${name}: ${error.message}`); }
    finally { await browser?.close(); }
    console.log(`${name} Playwright/Chromium OK: ${executable}`);
  }
  // Images and books share the existing video Playwright installation and service.
  for (const file of ['revision-generator/job-render.js', 'revision-generator/template.js', 'revision-generator/pagination.js', 'revision-generator/assets/PatrickHand-Regular.ttf', 'frontend/src/assets/images/maroquiz-logo-192.webp', 'fact-generator/assets/fonts/Cairo.ttf']) {
    if (!fs.existsSync(file)) throw Error(`Revision image dependency is missing: ${file}. Restore it in this Ubuntu project.`);
  }
  require(process.cwd() + '/revision-generator/job-schema');
  require(process.cwd() + '/revision-generator/jobs').fingerprint();
  try { await import(process.cwd() + '/revision-generator/node_modules/pdfjs-dist/legacy/build/pdf.mjs'); }
  catch { throw Error('PDF verification dependency cannot load. Use Linux Node 22.13+ or 24+, then run in Ubuntu: cd revision-generator && npm ci --ignore-scripts. No Windows installation is needed.'); }
  console.log('Revision images OK: existing Linux Playwright, local handwriting font, logo and image modules.');
  console.log('Revision PDF books OK: A4 modules and PDF.js verification; shared Linux Chromium.');
})().catch(error => { console.error('ERROR: ' + error.message); process.exitCode = 1; });
JS
[[ "${1:-}" != --check ]] || { printf 'All Linux renderer dependencies are available. No runner was started.\n'; exit 0; }
command -v flock >/dev/null || fail 'Ubuntu util-linux (flock) is required to prevent duplicate launcher instances.'
mkdir -p video-generator/.local-jobs
exec 9>video-generator/.local-jobs/launcher.lock
if ! flock -n 9; then
  printf 'The MaroQuiz WSL launcher already owns the renderer session. Use its existing console.\n'
  exit 0
fi
# A directly started node runner may not hold our launcher lock. Verify the
# existing port before invoking it; the runner's exclusive bind remains final.
set +e
node <<'JS'
const http = require('node:http');
const port = Number(process.env.MAROQUIZ_RUNNER_PORT || 3777);
if (!Number.isInteger(port) || port < 1 || port > 65535) { console.error('ERROR: Invalid configured renderer port.'); process.exit(11); }
const req = http.get({ hostname: '127.0.0.1', port, path: '/health', timeout: 2000 }, res => {
  let body = ''; res.on('data', chunk => { body = (body + chunk).slice(0, 4096); });
  res.on('end', () => {
    let known = false, books = false;
    try { const health = JSON.parse(body); known = health.renderer === 'Maroquiz local video generator'; books = health.revisionOutputs?.includes('pdf') && health.revisionContentModes?.includes('corrected-questions'); } catch {}
    if (known && !books) { console.error('ERROR: The existing runner predates corrected-question PNG/PDF export. Stop its console with Ctrl+C, then launch this CMD again. No duplicate was started.'); process.exit(11); }
    console.log(known ? `MaroQuiz is already running on 127.0.0.1:${port}; no duplicate was started.` : `ERROR: Port ${port} is occupied by another service.`);
    process.exit(known ? 10 : 11);
  });
});
req.on('timeout', () => req.destroy(new Error('Port did not answer.')));
req.on('error', error => { if (error.code === 'ECONNREFUSED') process.exit(0); console.error('ERROR: ' + error.message); process.exit(11); });
JS
port_status=$?
set -e
[[ "$port_status" != 10 ]] || exit 0
[[ "$port_status" == 0 ]] || exit 1
printf 'Starting the existing loopback runner for videos, revision images and PDF books.\n'
exec node "$PROJECT_ROOT/video-generator/local-runner.js"
