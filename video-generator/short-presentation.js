/* Shared deterministic finishing rules; no timers, remote code or narration. */
(function (root, factory) {
  if (typeof module === 'object') module.exports = factory();
  else root.ShortPresentation = factory();
})(typeof window === 'object' ? window : globalThis, function () {
  function timing(value) {
    const sourceDuration = value.duration;
    const duration = Math.ceil((sourceDuration + .6) * 30 - 1e-7) / 30;
    if (duration > 60) throw Error('This Short needs more than 60 seconds including its closing fade. Select shorter content.');
    return { ...value, sourceDuration, duration };
  }
  function number(video) {
    const value = video.display_number ?? video.number; // Immutable older snapshots.
    if (!Number.isSafeInteger(value) || value < 1 || value > 999999) throw Error('Invalid displayed QCM number.');
    return value;
  }
  function locale(doc) {
    const q = doc.questions[0], language = q.language ?? doc.video.language;
    const arabic = (q.text.match(/\p{Script=Arabic}/gu) || []).length;
    const latin = (q.text.match(/\p{Script=Latin}/gu) || []).length;
    if (!['fr', 'en', 'ar'].includes(language) || (arabic > latin && language !== 'ar') || (latin > arabic && language === 'ar')) throw Error('Confirm the approved question content language before rendering.');
    return language;
  }
  function opacity(t, duration, fade = .6, fps = 30) {
    const p = Math.max(0, Math.min(1, (t - (duration - fade)) / (fade - 1 / fps)));
    return .5 + .5 * Math.cos(p * Math.PI); // Exactly black on the last encoded frame.
  }
  function install(element, durationOf) {
    const render = window.renderFrame;
    // The source canvas may inherit white from body. Move that paint onto the
    // fading layer before making its backdrop black; preserve themed gradients.
    const background = getComputedStyle(element);
    if (background.backgroundImage === 'none' && background.backgroundColor === 'rgba(0, 0, 0, 0)') {
      element.style.backgroundColor = getComputedStyle(document.body).backgroundColor;
    }
    document.body.style.background = '#000';
    window.renderFrame = (...args) => {
      element.style.opacity = '1';
      render(...args);
      const [time, duration] = durationOf(...args);
      element.style.opacity = opacity(time, duration);
    };
  }
  function difficulty(value, language) {
    const index = ['Beginner', 'Intermediate', 'Advanced', 'Professional'].indexOf(value);
    return ({ fr: ['Débutant', 'Intermédiaire', 'Avancé', 'Professionnel'], en: ['Beginner', 'Intermediate', 'Advanced', 'Professional'], ar: ['مبتدئ', 'متوسط', 'متقدم', 'احترافي'] })[language][index] || '';
  }
  return { timing, number, locale, opacity, install, difficulty };
});
