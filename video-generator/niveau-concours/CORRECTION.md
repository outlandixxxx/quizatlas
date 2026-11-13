# Niveau concours — original audio and animated presentation restored

This correction supersedes the synthesized-audio review samples. The earlier
replacement removed the original effects along with the unwanted noise. Its
global normalization had also amplified quiet source passages. Neither behavior
matched the supplied Canva export.

The renderer now reuses the supplied export's eight consecutive audio phases:
opening, question, four choices, reading and answer. They are mixed once, with
no synthesized music bed, repeated soundtrack or upward compression. Delivery
only attenuates peaks. Longer reading sections use pitch-preserving stretching.
Three quiet existing project cues accompany the added intro/outro. The combined
source audio can be muted explicitly; saved settings and retries preserve that
choice. Original source audio is user-supplied, not covered by the separate CC0
license for the superseded synthesized composition.

The original question, card entrances, correct-answer reveal and reading pause
remain. A localized logo/title intro occupies 0–1.16 s. A dedicated animated
closing card starts at 17.1 s and finishes with a 0.6 s fade. These are intentional
additions, rather than exact source animations. Corners, dots and background
decorations remain static; extra-animation settings stay disabled.

| Event | Corrected baseline |
| --- | --- |
| Heading / metadata | 1.23 s |
| Panel / question reveal | 2.10 s / 2.30–6.70 s |
| Choice entrances | 6.833 / 7.267 / 7.800 / 8.133 s |
| Reading hold | 8.433–13.267 s |
| Correct answer | 13.267 s |
| Website / original preparation message | 13.60 / 13.933 s |
| Added closing card / final fade | 17.10 / 19.10–19.70 s |

Review MP4, relative to the repository root:
`video-generator/output/niveau-original-audio-correction/render/niveau-concours-son-et-animations-retablis.mp4`.
Use `video-generator/output/niveau-original-audio-correction/playback-review.html`
to play the original and correction individually. Review JSON, captured playback
frames and logs are retained in the same ignored output directory.

FFprobe: **1080×1920, H.264, 30 fps, 591 frames, 19.700 s; AAC stereo 48 kHz**.
Decoded audio: **−19.83 LUFS / −2.01 dBTP**, preserving reference dynamics.
Both complete videos played with audio unmuted and no media decoding error.
The bounded headless browser reported 52/513 dropped original frames and 22/591
dropped corrected frames. This is not proof of uninterrupted real-time playback
or human auditory acceptance; the available tools do not provide personal
listening. Intro, question, correct-card and closing screenshots were inspected.

Focused verification: **16 Node tests and 12 Angular tests passed**. Coverage
includes exact source audio samples, cue timing, encoded audio, intro/outro,
FR/EN/AR, all correct-card positions, long text, original static decorations,
saved audio settings and retry snapshots. No full suite or build was repeated.

Canva design `DAHaQ09CqoM` was inspected read-only and the transaction cancelled.
Corner geometry was corrected from its layer bounds. Artwork softness, some
decorations and Anton/Open Sans/Cairo typography still approximate the reference.
This sample uses retained real quiz 22/question 462, choice 1802 on card 2;
its wording and category intentionally differ from the Canva placeholders.
No database writes, production operations, commits, pushes or existing-output
overwrites were performed.
