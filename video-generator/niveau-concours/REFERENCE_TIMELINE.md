# Niveau concours reference measurement

Measured before implementation from `Niveau concours.mp4` (1080×1920, H.264,
30/1 fps, **513 frames**). Visual duration: 17.100 s; MP4 container: 17.125 s
(AAC tail). Last visible frame: 17.0667 s. Times below are approximate visible
onsets, measured at 30 fps, not inferred from the other templates.

| Layer/event | Source timing (seconds) | Hold / movement |
| --- | --- | --- |
| Background, yellow corners and dots | 0–17.10 | Remain visible |
| Logo | 0.067–0.60 | Zoom entrance, then held |
| Heading, cap and subtitle | 1.23–17.10 | Repeated soft opacity breath, about 1.10 s period |
| Metadata | 1.23–1.90 | Entrance and progressive category reveal; held thereafter |
| Question panel | about 2.10–17.10 | Soft entrance, remains behind all choices |
| Question | 2.30–about 6.70 | Progressive reveal in final line layout |
| Choice 1 | 6.833–7.133 | Entrance; held |
| Choice 2 | 7.267–7.567 | Entrance; held |
| Choice 3 | 7.800–8.100 | Entrance; held |
| Choice 4 | 8.133–8.433 | Entrance; held |
| Reading pause | 8.433–13.267 | About 4.83 s with all choices visible |
| Correct gradient and check | 13.267–17.10 | Separate overlay; gently scales over the original card |
| Website button | about 13.60–17.10 | Entrance, held |
| Preparation message | about 13.93–16.83 | Entrance, readable hold, brief exit |
| Closing | 16.83–17.10 | Message exits; cards, logo and button remain in final frame |

Baseline implementation uses these frame-aligned times. Long content extends
the question reveal and reading hold; later events shift together. No countdown
or explanation scene is inherited. Extra animations are disabled, including
saved true settings; original movements are not replaced or rescheduled.

Canva: supplied shortlink `https://www.canva.com/d/E5AEDwd05ehaGp9` did not
resolve through the connector. The matching account design `DAHaQ09CqoM`
was inspected read-only; its four grid-card bounds match the supplied geometry.
An older list-layout design was excluded. No Canva edits were saved.
