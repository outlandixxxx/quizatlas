const fs = require('node:fs');
const { spawn } = require('node:child_process');
function memory() {
  try {
    const text = fs.readFileSync('/proc/meminfo', 'utf8');
    const mb = key => Number(text.match(new RegExp('^' + key + ':\\s+(\\d+)', 'm'))?.[1] || 0) / 1024;
    return { availableMiB: mb('MemAvailable'), swapUsedMiB: mb('SwapTotal') - mb('SwapFree'), swapFreeMiB: mb('SwapFree') };
  } catch { return null; }
}
function checkMemory() {
  const info = memory();
  if (info && process.env.MAROQUIZ_RESOURCE_LOG) {
    const largest = [];
    for (const pid of fs.readdirSync('/proc').filter(name => /^\d+$/.test(name))) {
      try {
        const status = fs.readFileSync(`/proc/${pid}/status`, 'utf8');
        largest.push({ pid: Number(pid), name: status.match(/^Name:\s+(.+)$/m)?.[1], rssMiB: Number(status.match(/^VmRSS:\s+(\d+)/m)?.[1] || 0) / 1024 });
      } catch { /* A process may finish between the listing and read. */ }
    }
    fs.appendFileSync(process.env.MAROQUIZ_RESOURCE_LOG, JSON.stringify({ utc: new Date().toISOString(), ...info, largest: largest.sort((a,b) => b.rssMiB-a.rssMiB).slice(0,6) })+'\n');
  }
  if (info && (info.availableMiB < 192 || (info.availableMiB < 384 && info.swapFreeMiB < 512))) throw Error('Rendering stopped safely: insufficient available memory. Retained outputs can be retried.');
  return info;
}
async function command(exe, args) {
  checkMemory();
  const child = spawn(exe, args, { stdio: ['ignore', 'ignore', 'pipe'], shell: false, windowsHide: true });
  let errors = '', pressure;
  child.stderr.on('data', data => { errors = (errors + data).slice(-8000); });
  const stop = () => child.kill('SIGTERM');
  process.once('SIGTERM', stop); process.once('SIGINT', stop);
  const watch = setInterval(() => { try { checkMemory(); } catch (error) { pressure = error; stop(); } }, 1500);
  try {
    await new Promise((resolve, reject) => {
      child.once('error', reject);
      child.once('close', code => code === 0 && !pressure ? resolve() : reject(pressure || Error(`Encoder exited ${code}: ${errors}`)));
    });
  } finally { clearInterval(watch); process.off('SIGTERM', stop); process.off('SIGINT', stop); }
}
module.exports = { memory, checkMemory, command };
