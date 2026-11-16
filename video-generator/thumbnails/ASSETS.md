# Illustration provenance

The thirteen PNG illustrations were supplied by the user and copied unchanged into `assets/`. Original paths, source SHA-256 checksums and copy verification are recorded in `assets/provenance.json`. Their publishing rights have not been independently verified; these files are not described as CC0 or as newly generated artwork. Confirm the supplied artwork's rights before publication where needed.

Every runtime PNG is 1536×1024 (3:2), noninterlaced RGBA at 8 bits/channel. Sequential PNG scanline inspection records exact alpha statistics and matches the earlier browser canvas inspection: alpha ranges from 0 to 254 for all 13 originals. Alpha 254 is near-opaque and is preserved. The French bottom-left corner has alpha 1; the remaining sampled corners are alpha 0. No RGB, alpha, crop, color or background was rewritten. The [checkerboard contact sheet](../output/thumbnail-review-20261115-ready/source-artwork-checkerboard.jpg) preserves the visual inspection alongside the final review set.

A built-in image-generation health candidate was created for review at `video-generator/output/thumbnail-asset-review-20261114/health-imagegen-candidate.png`. It is retained as an unused review artifact and is not part of the runtime catalogue. The supplied originals were suitable without replacing them. Three unused supplied PNGs, including the bank alternative and reference compositions, are also retained unchanged and identified in the provenance file.

`assets/neutral.svg` is a small original MaroQuiz vector authored for this implementation. It contains no factual graph, formula, pseudocode or educational assertion. It needs no third-party attribution.

`catalogue.js` generates `assets/manifest.json` with stable IDs, general Major associations, dimensions/transparency declarations, composition positions, source notes, language-glyph notes and SHA-256 digests. The renderer reads only the selected image. Language illustrations are restricted by Major, not by the video's spoken/written locale. Finance uses the calculator/financial-record illustration; Economy uses its separate commerce/global-economy illustration.

General concept tags describe the artwork; they do not trigger Subject-specific image guesses. `languageRestrictions` is empty because a language Major may have a video in any supported content locale. `embeddedTextLanguage` records identifying glyphs where present, and `selectionRestrictions.majorSlugs` keeps those glyphs with the correct language Major. The neutral SVG has its own 900×900 square canvas.

To refresh the metadata after an intentional source-artwork update, run `node --max-old-space-size=128 video-generator/thumbnails/build-provenance.js`. It hashes original/runtime files, requires exact matching copies, inspects one PNG at a time and updates only the owned provenance/manifest JSON. It does not start a browser, render images or modify the supplied originals.

Existing local logos and OFL-licensed Cairo, Montserrat and Nunito fonts supply editable branding and typography. The PNG illustrations provide artwork only; hooks, metadata, template names and the MaroQuiz logo remain separate rendering layers.
