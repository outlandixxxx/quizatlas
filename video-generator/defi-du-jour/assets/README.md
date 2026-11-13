The PNG artwork was retrieved read-only from the owner's Canva design **Défés de jours** (`DAHYjLAH4Ls`). Its layer bounds match the supplied reference coordinates. Filenames retain Canva asset IDs for traceability. The supplied `/d/Zx-umjkxDUk9uNJ` link could not be resolved by the connector, so the matching design was located by title. No Canva edits were saved.

`MAHYi7ieUcY` is the verified **Logo MaroQuiz orange et jaune.png** asset. Rendering reuses the higher resolution existing `../assets/images/maroquiz-logo.webp` logo. Canva provided thumbnail-size versions of larger paper graphics; those textures are scaled to the original bounds. Original source colors are adapted locally to the reference's warm orange/brown palette.

The nine stereo, 48 kHz PCM WAV stems come from the user-supplied **Défés de jours.mp4** audio. Their source intervals, in seconds, are:

| Stem | Start | End |
| --- | ---: | ---: |
| opening | 0 | 2.966667 |
| question | 2.966667 | 11.933333 |
| choice-1 | 11.933333 | 12.800000 |
| choice-2 | 12.800000 | 13.833333 |
| choice-3 | 13.833333 | 14.833333 |
| choice-4 | 14.833333 | 15.833333 |
| thinking | 15.833333 | 20.200000 |
| answer | 20.200000 | 24.166667 |
| closing | 24.166667 | 26.466667 |

The existing mixer assembles these cues without adding its generated music. The source's high transient/average ratio requires template-specific compression before the existing portrait normalization pass. The profile keeps -2.8 dBTP normalization headroom and retains the existing decoded-AAC delivery checks (near -16 LUFS and at most -1.5 dBTP). This changes the source's dynamics/volume; cue timing and source sounds are preserved. Longer source questions extend/loop the question audio and shift later cues; there is no synthesized narration. Neither the reference MP4 nor Canva access is needed at runtime.

Local Open Sans, Anton and Cairo fonts are reused from the existing generator. Exact Canva font metadata was unavailable; Anton is a visual title-font substitution, with Cairo used for Arabic. No new font downloads or license changes were made.
