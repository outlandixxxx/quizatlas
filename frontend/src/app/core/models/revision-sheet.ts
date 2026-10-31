/** Source export v1.1 adds question_id; v1.0 remains copyable, but cannot start durable review. */
export interface RevisionJsonResponse {
  major: { id: number; name: string; slug: string };
  subject: { id: number; name: string; slug: string };
  quiz: { id: number; title: string; difficulty: string | null };
  notes: { question_id?: number; order: number; explanation: string }[];
  meta: { total_explanations: number; exported_at: string; format_version: string };
  correction?: {
    format_version: 'corrected-questions-v1';
    questions: RevisionCorrectedQuestion[];
    issues: { question_id: number; order: number; code: string; message: string }[];
  };
}

export type RevisionContentMode = 'explanations' | 'corrected-questions';
export interface RevisionCorrectedQuestion {
  question_id: number; quiz_id: number; order: number;
  type: 'single_choice' | 'multiple_choice' | 'true_false'; question: string;
  correct_answers: { choice_id: number; question_id: number; order: number; text: string; truth_value: boolean | null }[];
}

/** Original export/copy contract is kept separate from the opt-in source extension. */
export function originalRevisionSource(data: RevisionJsonResponse): RevisionJsonResponse {
  const { correction, ...original } = data;
  return original;
}

export function correctionProblems(draft: RevisionQuizDraft): string[] {
  const context = draft.source.data.correction;
  if (!context || context.format_version !== 'corrected-questions-v1' || context.questions.length !== draft.source.data.notes.length) return ['revisionReview.correctedSourceMissing'];
  const ids = draft.paragraphs.map(p => p.sourceQuestionIds.length === 1 ? p.sourceQuestionIds[0] : null);
  const mapping = ids.includes(null) || new Set(ids).size !== ids.length || ids.length !== context.questions.length || context.questions.some(q => !ids.includes(q.question_id));
  return [...context.issues.map(i => i.message), ...(mapping ? ['revisionReview.correctedMappings'] : [])];
}

export interface RevisionParagraph {
  id: string;
  text: string;
  sourceQuestionIds: number[];
}

export interface RevisionReviewIssue {
  questionId: number;
  reason: string;
}

export interface RevisionQuizDraft {
  source: { data: RevisionJsonResponse; contentHash: string };
  version: number;
  paragraphs: RevisionParagraph[];
  issues: RevisionReviewIssue[];
  reviewedVersion: number | null;
  approval: { version: number; contentHash: string; approvedAt: string } | null;
}

export interface RevisionQuizEntry {
  quizId: number;
  state: 'idle' | 'loading' | 'ready' | 'error';
  error?: string;
  draft?: RevisionQuizDraft;
  // Phase 1 does not calculate pages or start render jobs.
  imageCount: null;
  renderStatus: 'not_started';
}

export interface RevisionReviewBatch {
  formatVersion: 'revision-review-v1';
  majorId: number | null;
  subjectId: number | null;
  quizIds: number[];
  entries: RevisionQuizEntry[];
}

export function coverage(draft: RevisionQuizDraft) {
  const sourceIds = draft.source.data.notes.map(n => n.question_id!);
  const expected = new Set(sourceIds);
  const mapped = new Set(draft.paragraphs.flatMap(p => p.sourceQuestionIds));
  const unresolved = new Set(draft.issues.map(i => i.questionId));
  const unmapped = sourceIds.filter(id => !mapped.has(id));
  const invalidMappings = [...mapped].filter(id => !expected.has(id));
  const invalidParagraphs = draft.paragraphs.filter(p => !p.text.trim() || !p.sourceQuestionIds.length);
  return {
    total: sourceIds.length,
    mapped: sourceIds.filter(id => mapped.has(id)).length,
    unresolved: unresolved.size,
    unmapped,
    canApprove: sourceIds.length > 0 && !unmapped.length && !unresolved.size
      && !invalidMappings.length && !invalidParagraphs.length,
  };
}

export async function revisionHash(value: unknown): Promise<string> {
  const bytes = new TextEncoder().encode(JSON.stringify(value));
  const digest = await globalThis.crypto.subtle.digest('SHA-256', bytes);
  return Array.from(new Uint8Array(digest), b => b.toString(16).padStart(2, '0')).join('');
}

/** Never mutate the exporter response. The source snapshot stays separate from draft edits. */
export async function createRevisionDraft(data: RevisionJsonResponse): Promise<RevisionQuizDraft> {
  const ids = data.notes.map(n => n.question_id);
  if (!data.notes.length || data.notes.some(n => !n.explanation?.trim())) throw new Error('revisionReview.invalidSource');
  if (ids.some(id => !Number.isSafeInteger(id) || id! <= 0) || new Set(ids).size !== ids.length
    || data.meta.total_explanations !== data.notes.length) throw new Error('revisionReview.invalidProvenance');
  const snapshot = structuredClone(data);
  // Export time describes capture, not a change in educational source content.
  const contentHash = await revisionHash({ ...snapshot, meta: { ...snapshot.meta, exported_at: undefined } });
  const freeze = (value: object): void => {
    Object.values(value).forEach(child => { if (child && typeof child === 'object') freeze(child); });
    Object.freeze(value);
  };
  freeze(snapshot);
  return {
    source: { data: snapshot, contentHash }, version: 1,
    paragraphs: snapshot.notes.map(n => ({ id: `q${n.question_id}`, text: n.explanation, sourceQuestionIds: [n.question_id!] })),
    issues: [], reviewedVersion: null, approval: null,
  };
}

/** Every unmapped source becomes an explicit review issue rather than disappearing. */
export function editRevisionDraft(draft: RevisionQuizDraft, paragraphs: RevisionParagraph[], issues = draft.issues): RevisionQuizDraft {
  const mapped = new Set(paragraphs.flatMap(p => p.sourceQuestionIds));
  const nextIssues = [...issues];
  for (const source of draft.source.data.notes) {
    if (!mapped.has(source.question_id!) && !nextIssues.some(i => i.questionId === source.question_id)) {
      nextIssues.push({ questionId: source.question_id!, reason: '' });
    }
  }
  return { ...draft, version: draft.version + 1, paragraphs, issues: nextIssues, reviewedVersion: null, approval: null };
}

/** Manual consolidation joins the exact texts and unions provenance; it performs no summarization. */
export function consolidateParagraphs(draft: RevisionQuizDraft, selectedIds: string[]): RevisionQuizDraft {
  const selected = draft.paragraphs.filter(p => selectedIds.includes(p.id));
  if (selected.length < 2) return draft;
  const merged: RevisionParagraph = {
    id: selected[0].id,
    text: selected.map(p => p.text).join('\n\n'),
    sourceQuestionIds: [...new Set(selected.flatMap(p => p.sourceQuestionIds))],
  };
  return editRevisionDraft(draft, draft.paragraphs.flatMap(p => p.id === merged.id ? [merged] : selectedIds.includes(p.id) ? [] : [p]));
}

export function approvalContent(draft: RevisionQuizDraft) {
  return { sourceHash: draft.source.contentHash, version: draft.version, paragraphs: draft.paragraphs, issues: draft.issues };
}
