import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';

function flatten(value: Record<string, unknown>, prefix = ''): Record<string, unknown> {
  return Object.fromEntries(Object.entries(value).flatMap(([key, child]) =>
    child && typeof child === 'object' && !Array.isArray(child)
      ? Object.entries(flatten(child as Record<string, unknown>, prefix + key + '.'))
      : [[prefix + key, child]]));
}

describe('supported EN/FR/AR translation contracts', () => {
  const english = flatten(en);
  for (const [language, messages] of Object.entries({ fr, ar })) {
    it(`${language} provides every English key and preserves interpolation names`, () => {
      const translated = flatten(messages);
      expect(Object.keys(translated).sort()).toEqual(Object.keys(english).sort());
      for (const [key, source] of Object.entries(english)) {
        expect(typeof translated[key], key).toBe(typeof source);
        if (typeof source === 'string') {
          expect((translated[key] as string).trim(), key).not.toBe('');
          const params = (s: string) => [...s.matchAll(/{{\s*([\w.]+)\s*}}/g)].map(x => x[1]).sort();
          expect(params(translated[key] as string), key).toEqual(params(source));
        }
      }
    });
  }
});
