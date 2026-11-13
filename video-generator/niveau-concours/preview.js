const path = require('node:path');
const { preview } = require('../five-seconds/preview');
const options = { templateFile: path.join(__dirname, 'template.html'),
  timestamps: [.5, 1.7, 4.5, 6.97, 7.43, 7.97, 8.3, 10.5, 13.5, 14.4, 16.6, 17.066667], geometryTime: 10.5,
  geometryIds: ['logo', 'title', 'metadata', 'question-panel', 'question', 'choices', 'outro', 'website'] };
if (require.main === module) {
  if (!process.argv[2] || !process.argv[3]) throw Error('Usage: node video-generator/niveau-concours/preview.js input.json output-directory [reference.mp4] [generated.mp4]');
  preview(path.resolve(process.argv[2]), path.resolve(process.argv[3]), process.argv[4] && path.resolve(process.argv[4]), process.argv[5] && path.resolve(process.argv[5]), options).catch(error => { console.error(error); process.exitCode = 1; });
}
module.exports = { options };
