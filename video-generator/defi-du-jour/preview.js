// Uses the existing bounded comparison helper; never authorizes or starts a batch.
const path = require('node:path');
const { preview } = require('../five-seconds/preview');
const options = { templateFile: path.join(__dirname, 'template.html'),
  timestamps: [.2, 1.2, 6.5, 16, 20.5, 24.8, 25.4, 26.2, 26.4333333333], geometryTime: 16,
  geometryIds: ['logo', 'title-panel', 'metadata', 'question-card', 'question', 'choices', 'trophy', 'website', 'footer'] };
if (require.main === module) {
  if (!process.argv[2] || !process.argv[3]) throw Error('Usage: node video-generator/defi-du-jour/preview.js input.json output-directory [reference.mp4] [generated.mp4]');
  preview(path.resolve(process.argv[2]), path.resolve(process.argv[3]), process.argv[4] && path.resolve(process.argv[4]), process.argv[5] && path.resolve(process.argv[5]), options).catch(error => { console.error(error); process.exitCode = 1; });
}
module.exports = { options };
