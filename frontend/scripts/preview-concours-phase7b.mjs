// Loopback-only frontend and API bridge to the separately restored acceptance DB.
import { createServer } from 'node:http';
import { spawn } from 'node:child_process';
process.env.SSR_API_URL = 'http://127.0.0.1:8077/api/v1';
const { reqHandler } = await import('../dist/frontend/server/server.mjs');
const api = createServer(async (request, response) => {
  if (!request.url.startsWith('/api/v1/')) {
    response.writeHead(404).end();
    return;
  }
  const chunks = [];
  for await (const chunk of request) chunks.push(chunk);
  const rawBody = Buffer.concat(chunks);
  let fields, files;
  if (request.headers['content-type']?.startsWith('multipart/form-data')) {
    fields = {};
    files = {};
    const form = await new Request('http://localhost:8077' + request.url, {
      method: request.method,
      headers: request.headers,
      body: rawBody,
    }).formData();
    for (const [name, value] of form.entries()) {
      if (typeof value === 'string') fields[name] = value;
      else
        files[name] = {
          name: value.name,
          type: value.type,
          base64: Buffer.from(await value.arrayBuffer()).toString('base64'),
        };
    }
  }
  const child = spawn('docker', [
    'exec',
    '-i',
    'quizatlas-php',
    'php',
    'tests/Support/concours_phase7b_fixture.php',
    '--request',
  ]);
  const stdout = [],
    stderr = [];
  child.stdout.on('data', (chunk) => stdout.push(chunk));
  child.stderr.on('data', (chunk) => stderr.push(chunk));
  child.on('close', (code) => {
    try {
      if (code) throw new Error(Buffer.concat(stderr).toString());
      const result = JSON.parse(Buffer.concat(stdout));
      response.writeHead(result.status, {
        ...result.headers,
        'access-control-allow-origin': 'http://localhost:4302',
      });
      response.end(Buffer.from(result.body, 'base64'));
    } catch (error) {
      console.error('Fixture API failure:', error.message.slice(0, 500));
      response
        .writeHead(502, { 'content-type': 'application/json' })
        .end('{"success":false,"message":"Isolated fixture API failed"}');
    }
  });
  child.stdin.end(
    JSON.stringify({
      path: request.url,
      method: request.method,
      headers: request.headers,
      body: files ? '' : rawBody.toString(),
      fields,
      files,
    }),
  );
});
api.listen(8077, '127.0.0.1');
const frontend = createServer((request, response) => {
  request.headers.host = 'maroquiz.com';
  request.headers['x-forwarded-proto'] = 'https';
  reqHandler(request, response);
}).listen(4302, '127.0.0.1', () =>
  console.log(
    'Phase 7B isolated preview: http://localhost:4302; API: http://localhost:8077; separate fixture DB only.',
  ),
);
for (const signal of ['SIGINT', 'SIGTERM'])
  process.on(signal, () => {
    api.close();
    frontend.close();
    process.exit(0);
  });
