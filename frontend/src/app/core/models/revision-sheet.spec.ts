import { webcrypto } from 'node:crypto';
import { vi } from 'vitest';
import { RevisionJsonResponse, consolidateParagraphs, coverage, createRevisionDraft, editRevisionDraft } from './revision-sheet';

beforeEach(() => vi.stubGlobal('crypto', webcrypto));
afterEach(() => vi.unstubAllGlobals());
const source = (): RevisionJsonResponse => ({ major: { id: 7, name: 'SVT', slug: 'svt' }, subject: { id: 169, name: 'Biochemistry', slug: 'biochemistry' }, quiz: { id: 1599, title: 'Enzymes', difficulty: 'Beginner' }, notes: [{ question_id: 16932, order: 1, explanation: '  Une enzyme agit.\nLa condition reste.  ' }, { question_id: 16933, order: 1, explanation: 'شرح ثانٍ.' }], meta: { total_explanations: 2, exported_at: '2026-10-29T00:00:00Z', format_version: '1.1' } });

it('starts with exact one-to-one paragraphs and hashes content independently of export time', async () => {
  const data = source(), before = JSON.stringify(data), draft = await createRevisionDraft(data);
  expect(draft.paragraphs.map(p => p.text)).toEqual(data.notes.map(n => n.explanation));
  expect(draft.paragraphs.map(p => p.sourceQuestionIds)).toEqual([[16932], [16933]]);
  expect(draft.approval).toBeNull(); expect(Object.isFrozen(draft.source.data.notes)).toBe(true);
  expect(coverage(draft)).toMatchObject({ total: 2, mapped: 2, unresolved: 0, canApprove: true });
  data.meta.exported_at = '2026-11-01T00:00:00Z';
  expect((await createRevisionDraft(data)).source.contentHash).toBe(draft.source.contentHash);
  expect(JSON.stringify(draft.source.data)).toBe(before);
});

it('manual consolidation preserves exact texts, all mappings and order, and invalidates approval', async () => {
  const draft = await createRevisionDraft(source());
  draft.approval = { version: 1, contentHash: 'old', approvedAt: 'then' }; draft.reviewedVersion = 1;
  const merged = consolidateParagraphs(draft, draft.paragraphs.map(p => p.id).reverse());
  expect(merged.paragraphs).toHaveLength(1);
  expect(merged.paragraphs[0].text).toBe(source().notes.map(n => n.explanation).join('\n\n'));
  expect(merged.paragraphs[0].sourceQuestionIds).toEqual([16932, 16933]);
  expect(merged.approval).toBeNull(); expect(merged.reviewedVersion).toBeNull(); expect(merged.version).toBe(2);
  expect(coverage(merged).mapped).toBe(2);
});

it('turns omissions into explicit unresolved sources and rejects corrupt provenance', async () => {
  const draft = await createRevisionDraft(source());
  const removed = editRevisionDraft(draft, [draft.paragraphs[0]]);
  expect(removed.issues).toEqual([{ questionId: 16933, reason: '' }]);
  expect(coverage(removed)).toMatchObject({ unmapped: [16933], unresolved: 1, canApprove: false });
  const invalid = source(); invalid.notes[1].question_id = 16932;
  await expect(createRevisionDraft(invalid)).rejects.toThrow('invalidProvenance');
  await expect(createRevisionDraft({ ...source(), notes: [] })).rejects.toThrow('invalidSource');
});
