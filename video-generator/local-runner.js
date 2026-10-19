const http = require('node:http');
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const { spawn } = require('node:child_process');

const ROOT = __dirname;
const PORT = Number(process.env.MAROQUIZ_RUNNER_PORT || 3777);
const OUTPUT_DIR = path.join(ROOT, 'output');
const JOB_DIR = path.join(ROOT, '.local-jobs');

// A render that runs longer than this is killed, so the runner never stays
// blocked by a frozen Chromium (new jobs are refused while one is running).
const RENDER_TIMEOUT_MS = 3 * 60 * 60 * 1000; // 3 hours

fs.mkdirSync(OUTPUT_DIR, { recursive: true });
fs.mkdirSync(JOB_DIR, { recursive: true });

const jobs = new Map();

const allowedOrigins = new Set(
  (process.env.MAROQUIZ_ALLOWED_ORIGINS || '')
    .split(',')
    .map(value => value.trim())
    .filter(Boolean)
);

function isAllowedOrigin(origin) {
  if (!origin) return true;

  if (allowedOrigins.has(origin)) return true;

  try {
    const url = new URL(origin);

    return (
      ['http:', 'https:'].includes(url.protocol) &&
      ['localhost', '127.0.0.1', '[::1]'].includes(url.hostname)
    );
  } catch {
    return false;
  }
}

function sendJson(res, status, data) {
  res.writeHead(status, {
    'Content-Type': 'application/json; charset=utf-8',
    'Cache-Control': 'no-store',
  });
  res.end(JSON.stringify(data));
}

function jobSummary(job) {
  return {
    id: job.id,
    title: job.title,
    status: job.status,
    progress: job.progress,
    message: job.message,
    error: job.error,
    videoUrl: job.status === 'completed'
      ? `/jobs/${job.id}/download`
      : null,
    thumbnailUrl: job.status === 'completed'
      ? `/jobs/${job.id}/thumbnail`
      : null,
    chaptersUrl: job.status === 'completed'
      ? `/jobs/${job.id}/chapters`
      : null,
  };
}

function slugify(value) {
  return String(value || 'maroquiz-video')
    .normalize('NFD')
    .replace(/[\u0300-\u036f]/g, '')
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/^-|-$/g, '')
    .slice(0, 70) || 'maroquiz-video';
}

function readJsonBody(req) {
  return new Promise((resolve, reject) => {
    let body = '';
    let tooLarge = false;

    req.on('data', chunk => {
      body += chunk;

      if (Buffer.byteLength(body) > 10 * 1024 * 1024) {
        tooLarge = true;
        reject(new Error('JSON payload exceeds the 10 MB limit.'));
        req.destroy();
      }
    });

    req.on('end', () => {
      if (tooLarge) return;

      try {
        resolve(JSON.parse(body));
      } catch {
        reject(new Error('Request body must contain valid JSON.'));
      }
    });

    req.on('error', reject);
  });
}

function startRender(job, inputFile, options) {
  const args = [
    path.join(ROOT, 'render.js'),
    inputFile,
  ];

  if (options.profile === 'draft') {
    args.push('--draft');
  }

  if (options.fps !== undefined) {
    args.push('--fps', String(options.fps));
  }

  console.log(`[${job.id}] Spawning: node ${args.slice(1).join(' ')}`);

  const child = spawn(process.execPath, args, {
    cwd: ROOT,
    stdio: ['ignore', 'pipe', 'pipe'],
    shell: false,
  });

  job.status = 'running';
  job.message = 'Rendering video...';

  let stderr = '';
  let timedOut = false;

  const watchdog = setTimeout(() => {
    timedOut = true;
    job.error = 'Render exceeded the time limit and was stopped.';
    child.kill('SIGKILL');
  }, RENDER_TIMEOUT_MS);

  function handleOutput(chunk) {
    const output = chunk.toString();

    // render.js rewrites the same line with \r, so take the last match.
    const matches = [
      ...output.matchAll(/Rendering frames:\s*(\d+\/\d+)\s*\((\d+)%\)/g),
    ];

    if (matches.length) {
      const last = matches[matches.length - 1];
      job.progress = Number(last[2]);
      job.message = `Rendering frames: ${last[2]}%`;
    } else if (/Encoding with FFmpeg/.test(output)) {
      job.message = 'Encoding with FFmpeg...';
    }

    const lines = output.split(/[\r\n]+/).map(l => l.trim()).filter(Boolean);
    if (lines.length) {
      job.lastOutput = lines[lines.length - 1].slice(0, 500);
    }
  }

  child.stdout.on('data', handleOutput);

  child.stderr.on('data', chunk => {
    stderr = (stderr + chunk.toString()).slice(-8000);
    handleOutput(chunk);
  });

  child.on('error', error => {
    clearTimeout(watchdog);
    job.status = 'failed';
    job.error = error.message;
    job.message = 'Could not start the renderer.';
    fs.rmSync(inputFile, { force: true });
  });

  child.on('close', code => {
    clearTimeout(watchdog);
    fs.rmSync(inputFile, { force: true });

    if (code !== 0) {
      job.status = 'failed';
      job.error = job.error
        || stderr.slice(-3000)
        || `Renderer exited with code ${code}.`;
      job.message = timedOut
        ? 'Video rendering timed out.'
        : 'Video rendering failed.';
      return;
    }

    if (!fs.existsSync(job.videoPath)) {
      job.status = 'failed';
      job.error = 'Rendering finished, but the MP4 was not found.';
      job.message = 'Video output is missing.';
      return;
    }

    job.status = 'completed';
    job.progress = 100;
    job.message = 'Video generated successfully.';
  });
}

const server = http.createServer(async (req, res) => {
  const origin = req.headers.origin;

  if (!isAllowedOrigin(origin)) {
    return sendJson(res, 403, {
      message: 'This website origin is not allowed to use the local runner.',
    });
  }

  if (origin) {
    res.setHeader('Access-Control-Allow-Origin', origin);
    res.setHeader('Vary', 'Origin');
    res.setHeader(
      'Access-Control-Allow-Methods',
      'GET, POST, OPTIONS'
    );
    res.setHeader(
      'Access-Control-Allow-Headers',
      'Content-Type, X-Maroquiz-Local-Runner'
    );
  }

  if (req.method === 'OPTIONS') {
    res.writeHead(204);
    return res.end();
  }

  const url = new URL(req.url, `http://127.0.0.1:${PORT}`);
  const pathname = url.pathname;

  if (req.method === 'GET' && pathname === '/health') {
    return sendJson(res, 200, {
      status: 'ok',
      renderer: 'Maroquiz local video generator',
    });
  }

  if (req.method === 'POST' && pathname === '/jobs') {
    if (req.headers['x-maroquiz-local-runner'] !== '1') {
      return sendJson(res, 403, {
        message: 'Missing local-runner request header.',
      });
    }

    if (
      !String(req.headers['content-type'] || '')
        .toLowerCase()
        .includes('application/json')
    ) {
      return sendJson(res, 415, {
        message: 'Content-Type must be application/json.',
      });
    }

    if ([...jobs.values()].some(job => job.status === 'running')) {
      return sendJson(res, 409, {
        message: 'A video is already rendering. Try again when it finishes.',
      });
    }

    try {
      const data = await readJsonBody(req);

      if (!data.video?.title || !Array.isArray(data.questions) ||
          data.questions.length === 0) {
        return sendJson(res, 422, {
          message: 'JSON must include video.title and a non-empty questions array.',
        });
      }

      for (const [index, question] of data.questions.entries()) {
        if (
          typeof question.text !== 'string' ||
          !Array.isArray(question.choices) ||
          question.choices.length < 2 ||
          !question.correct_answer?.label
        ) {
          return sendJson(res, 422, {
            message: `Question ${index + 1} is missing text, choices, or correct answer.`,
          });
        }
      }

      const profile = data.render_options?.profile === 'draft'
        ? 'draft'
        : 'final';

      const requestedFps = Number(data.render_options?.fps);
      const fps = Number.isFinite(requestedFps) &&
        requestedFps >= 15 && requestedFps <= 60
        ? requestedFps
        : undefined;

      const titleSlug = slugify(data.video.title);
      const id = crypto.randomUUID();
      const inputFile = path.join(JOB_DIR, `${id}.json`);

      // Rendering options are separate from video content.
      delete data.render_options;

      fs.writeFileSync(inputFile, JSON.stringify(data, null, 2));

      const job = {
        id,
        title: data.video.title,
        status: 'queued',
        progress: 0,
        message: 'Job created.',
        error: null,
        lastOutput: '',
        videoPath: path.join(OUTPUT_DIR, `${titleSlug}.mp4`),
        thumbnailPath: path.join(OUTPUT_DIR, `${titleSlug}-thumbnail.png`),
        chaptersPath: path.join(OUTPUT_DIR, `${titleSlug}-chapters.txt`),
      };

      jobs.set(id, job);

      startRender(job, inputFile, { profile, fps });

      return sendJson(res, 202, { data: jobSummary(job) });
    } catch (error) {
      return sendJson(res, 400, { message: error.message });
    }
  }

  const jobMatch = pathname.match(/^\/jobs\/([a-f0-9-]+)(?:\/(download|thumbnail|chapters))?$/i);

  if (req.method === 'GET' && jobMatch) {
    const [, id, action] = jobMatch;
    const job = jobs.get(id);

    if (!job) {
      return sendJson(res, 404, { message: 'Job not found.' });
    }

    if (!action) {
      return sendJson(res, 200, { data: jobSummary(job) });
    }

    if (job.status !== 'completed') {
      return sendJson(res, 409, {
        message: 'The video is not ready yet.',
      });
    }

    const file = action === 'thumbnail'
      ? job.thumbnailPath
      : action === 'chapters'
        ? job.chaptersPath
        : job.videoPath;

    if (!fs.existsSync(file)) {
      return sendJson(res, 404, {
        message: 'Output file not found.',
      });
    }

    if (action === 'chapters') {
      res.writeHead(200, {
        'Content-Type': 'text/plain; charset=utf-8',
        'Content-Disposition': `attachment; filename="${path.basename(file)}"`,
      });
      return fs.createReadStream(file).pipe(res);
    }

    if (action === 'thumbnail') {
      res.writeHead(200, {
        'Content-Type': 'image/png',
        'Content-Disposition': `attachment; filename="${path.basename(file)}"`,
      });
      return fs.createReadStream(file).pipe(res);
    }

    res.writeHead(200, {
      'Content-Type': 'video/mp4',
      'Content-Disposition': `attachment; filename="${path.basename(file)}"`,
    });
    return fs.createReadStream(file).pipe(res);
  }

  return sendJson(res, 404, { message: 'Endpoint not found.' });
});

server.listen(PORT, '127.0.0.1', () => {
  console.log(`Maroquiz local runner: http://127.0.0.1:${PORT}`);
  console.log(`Health check: http://127.0.0.1:${PORT}/health`);
});
