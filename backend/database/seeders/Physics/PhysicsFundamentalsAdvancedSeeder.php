<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhysicsFundamentalsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'physics-fundamentals')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Mécanique analytique
            // ============================================================

            [
                'title' => 'Mécanique et dynamique avancées',
                'description' => 'Analyse de systèmes mécaniques à partir des lois de Newton, du travail et des contraintes.',
                'questions' => [

                    [
                        'question' => 'Une particule de masse m se déplace sur une trajectoire circulaire de rayon R avec une vitesse constante v. Quelle est la norme de son accélération ?',
                        'choices' => [
                            ['choice_text' => 'v²/R', 'is_correct' => true],
                            ['choice_text' => 'v/R²', 'is_correct' => false],
                            ['choice_text' => 'R/v²', 'is_correct' => false],
                            ['choice_text' => 'vR', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un mouvement circulaire uniforme, l’accélération centripète a pour norme a = v²/R.',
                    ],

                    [
                        'question' => 'Une force résultante constante de 12 N agit sur une particule de masse 3 kg initialement au repos pendant 4 s. Quelle distance parcourt-elle ?',
                        'choices' => [
                            ['choice_text' => '32 m', 'is_correct' => true],
                            ['choice_text' => '16 m', 'is_correct' => false],
                            ['choice_text' => '48 m', 'is_correct' => false],
                            ['choice_text' => '64 m', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération vaut a = F/m = 4 m/s². Depuis le repos, d = 1/2 at² = 1/2 × 4 × 16 = 32 m.',
                    ],

                    [
                        'question' => 'Un bloc glisse sur un plan incliné sans frottement avec un angle θ par rapport à l’horizontale. Quelle est son accélération le long du plan ?',
                        'choices' => [
                            ['choice_text' => g sin(θ)', 'is_correct' => true],
                            ['choice_text' => g cos(θ)', 'is_correct' => false],
                            ['choice_text' => g tan(θ)', 'is_correct' => false],
                            ['choice_text' => g/sin(θ)', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante du poids parallèle au plan vaut mg sin(θ), donc ma = mg sin(θ), d’où a = g sin(θ).',
                    ],

                    [
                        'question' => 'Une force conservative agit sur une particule. Quelle relation caractérise son travail entre deux points A et B ?',
                        'choices' => [
                            ['choice_text' => 'Il dépend uniquement des positions A et B', 'is_correct' => true],
                            ['choice_text' => 'Il dépend nécessairement de la vitesse initiale', 'is_correct' => false],
                            ['choice_text' => 'Il dépend uniquement du temps de parcours', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours nul entre deux points distincts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail d’une force conservative est indépendant du chemin suivi et dépend uniquement des positions initiale et finale.',
                    ],

                    [
                        'question' => 'Un projectile est lancé avec une vitesse initiale v0 sous un angle θ sans résistance de l’air. Quelle expression donne sa portée horizontale sur un terrain au même niveau que le point de lancement ?',
                        'choices' => [
                            ['choice_text' => 'R = v0² sin(2θ)/g', 'is_correct' => true],
                            ['choice_text' => 'R = v0² cos(2θ)/g', 'is_correct' => false],
                            ['choice_text' => 'R = v0 sin(θ)/g', 'is_correct' => false],
                            ['choice_text' => 'R = 2v0²/g', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un projectile revenant au même niveau, la portée est R = v0² sin(2θ)/g.',
                    ],

                    [
                        'question' => 'Pour un projectile idéal lancé et réceptionné à la même hauteur, quel angle maximise la portée pour une vitesse initiale fixée ?',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'La portée est proportionnelle à sin(2θ), qui atteint sa valeur maximale lorsque 2θ = 90°, donc θ = 45°.',
                    ],

                    [
                        'question' => 'Une particule est soumise à une force centrale dirigée vers un point fixe. Quelle grandeur vectorielle est conservée si le moment de cette force par rapport au point fixe est nul ?',
                        'choices' => [
                            ['choice_text' => 'Le moment cinétique', 'is_correct' => true],
                            ['choice_text' => 'La quantité de mouvement dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La position', 'is_correct' => false],
                            ['choice_text' => 'La vitesse scalaire dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le moment de la force centrale par rapport au centre est nul, le moment cinétique par rapport à ce point est conservé.',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire uniforme, le travail de la force centripète sur un tour complet est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Positif et égal à mv²', 'is_correct' => false],
                            ['choice_text' => 'Négatif et égal à mv²', 'is_correct' => false],
                            ['choice_text' => 'Égal à 2πR', 'is_correct' => false],
                        ],
                        'explanation' => 'La force centripète est perpendiculaire au déplacement instantané, donc son travail est nul.',
                    ],

                    [
                        'question' => 'Un système possède une énergie potentielle U(x). Quelle relation donne la force conservative associée en une dimension ?',
                        'choices' => [
                            ['choice_text' => 'F(x) = -dU/dx', 'is_correct' => true],
                            ['choice_text' => 'F(x) = dU/dx', 'is_correct' => false],
                            ['choice_text' => 'F(x) = Ux', 'is_correct' => false],
                            ['choice_text' => 'F(x) = U/x', 'is_correct' => false],
                        ],
                        'explanation' => 'En une dimension, une force conservative dérive du potentiel selon F = -dU/dx.',
                    ],

                    [
                        'question' => 'Une particule se déplace dans une région où son énergie mécanique totale E est inférieure à une valeur de potentiel U(x). Cette région est-elle classiquement accessible ?',
                        'choices' => [
                            ['choice_text' => 'Non, car l’énergie cinétique devrait être négative', 'is_correct' => true],
                            ['choice_text' => 'Oui, car l’énergie cinétique augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si la masse est nulle', 'is_correct' => false],
                            ['choice_text' => 'Oui, sans aucune restriction classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Ec = E - U(x), une région où U(x) > E donnerait une énergie cinétique négative, impossible classiquement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Oscillations et vibrations
            // ============================================================

            [
                'title' => 'Oscillateurs harmoniques et vibrations',
                'description' => 'Étude avancée des oscillations mécaniques, de la fréquence propre et de l’énergie.',
                'questions' => [

                    [
                        'question' => 'Pour un oscillateur harmonique simple décrit par x(t) = A cos(ωt + φ), quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'a(t) = -ω²x(t)', 'is_correct' => true],
                            ['choice_text' => 'a(t) = ωx(t)', 'is_correct' => false],
                            ['choice_text' => 'a(t) = -ωx(t)', 'is_correct' => false],
                            ['choice_text' => 'a(t) = ω²x(t)', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux dérivations temporelles donnent a(t) = -ω²A cos(ωt + φ) = -ω²x(t).',
                    ],

                    [
                        'question' => 'Un ressort de raideur k porte une masse m dans un système horizontal sans frottement. Quelle est sa pulsation propre ?',
                        'choices' => [
                            ['choice_text' => 'ω0 = √(k/m)', 'is_correct' => true],
                            ['choice_text' => 'ω0 = √(m/k)', 'is_correct' => false],
                            ['choice_text' => 'ω0 = k/m', 'is_correct' => false],
                            ['choice_text' => 'ω0 = m/k', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation mẍ + kx = 0 conduit à ω0² = k/m.',
                    ],

                    [
                        'question' => 'Si la masse d’un oscillateur masse-ressort est multipliée par quatre, sa fréquence propre est...',
                        'choices' => [
                            ['choice_text' => 'Divisée par deux', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par deux', 'is_correct' => false],
                            ['choice_text' => 'Divisée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'f0 = (1/2π)√(k/m). Multiplier m par 4 divise √m par 2 et donc la fréquence par 2.',
                    ],

                    [
                        'question' => 'Pour un oscillateur harmonique idéal, l’énergie mécanique totale est proportionnelle à...',
                        'choices' => [
                            ['choice_text' => 'A²', 'is_correct' => true],
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => '1/A', 'is_correct' => false],
                            ['choice_text' => 'A³', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un ressort, E = 1/2 kA². L’énergie est donc proportionnelle au carré de l’amplitude.',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique sans amortissement, à quelle position l’énergie cinétique est-elle maximale ?',
                        'choices' => [
                            ['choice_text' => 'À la position d’équilibre', 'is_correct' => true],
                            ['choice_text' => 'Aux deux positions extrêmes', 'is_correct' => false],
                            ['choice_text' => 'À une position où x = A/2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante et toujours maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre, l’énergie potentielle est minimale et l’énergie cinétique atteint son maximum.',
                    ],

                    [
                        'question' => 'Dans un oscillateur amorti, l’amplitude diminue principalement parce que...',
                        'choices' => [
                            ['choice_text' => 'L’énergie mécanique est dissipée', 'is_correct' => true],
                            ['choice_text' => 'La masse disparaît progressivement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité cesse d’agir', 'is_correct' => false],
                        ],
                        'explanation' => 'Les forces dissipatives convertissent progressivement l’énergie mécanique en d’autres formes, ce qui réduit l’amplitude.',
                    ],

                    [
                        'question' => 'Lors d’une résonance mécanique, l’amplitude forcée devient importante lorsque la fréquence d’excitation est proche de...',
                        'choices' => [
                            ['choice_text' => 'La fréquence propre du système', 'is_correct' => true],
                            ['choice_text' => 'La fréquence zéro uniquement', 'is_correct' => false],
                            ['choice_text' => 'La moitié de la fréquence propre dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La résonance apparaît lorsqu’une excitation périodique est proche d’une fréquence naturelle du système, avec une amplitude dépendant notamment de l’amortissement.',
                    ],

                    [
                        'question' => 'Pour un pendule simple de longueur L aux petites oscillations, la période dépend principalement de...',
                        'choices' => [
                            ['choice_text' => 'L et g', 'is_correct' => true],
                            ['choice_text' => 'La masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse initiale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La densité de l’air uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les petites oscillations, T = 2π√(L/g), indépendamment de la masse du pendule.',
                    ],

                    [
                        'question' => 'Pour un pendule simple aux petites oscillations, si sa longueur est multipliée par quatre, sa période est...',
                        'choices' => [
                            ['choice_text' => 'Multipliée par deux', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est proportionnelle à √L. Une longueur quatre fois plus grande donne une période deux fois plus grande.',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique idéal, lorsque l’énergie potentielle vaut la moitié de l’énergie mécanique totale, l’énergie cinétique vaut...',
                        'choices' => [
                            ['choice_text' => 'La moitié de l’énergie mécanique totale', 'is_correct' => true],
                            ['choice_text' => 'Le double de l’énergie mécanique totale', 'is_correct' => false],
                            ['choice_text' => 'Zéro', 'is_correct' => false],
                            ['choice_text' => 'Un quart de l’énergie mécanique totale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie mécanique E = Ec + Ep. Si Ep = E/2, alors Ec = E - E/2 = E/2.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Fluides
            // ============================================================

            [
                'title' => 'Mécanique des fluides',
                'description' => 'Application des équations de pression, de continuité et de Bernoulli.',
                'questions' => [

                    [
                        'question' => 'Pour un fluide incompressible en régime permanent dans une conduite, quelle relation exprime la conservation du débit volumique ?',
                        'choices' => [
                            ['choice_text' => 'A1v1 = A2v2', 'is_correct' => true],
                            ['choice_text' => 'A1/v1 = A2/v2', 'is_correct' => false],
                            ['choice_text' => 'A1 + v1 = A2 + v2', 'is_correct' => false],
                            ['choice_text' => 'A1v2 = A2v1²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un fluide incompressible, le débit Q = Av est constant, donc A1v1 = A2v2.',
                    ],

                    [
                        'question' => 'Une conduite voit son aire de section divisée par deux pour un fluide incompressible. Si le débit reste constant, la vitesse du fluide...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Est multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Av est constant, réduire A de moitié impose de doubler v.',
                    ],

                    [
                        'question' => 'Dans un écoulement horizontal idéal, selon Bernoulli, une augmentation de la vitesse du fluide s’accompagne généralement d’une diminution de...',
                        'choices' => [
                            ['choice_text' => 'La pression statique', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique d’un fluide incompressible', 'is_correct' => false],
                            ['choice_text' => 'La vitesse elle-même', 'is_correct' => false],
                            ['choice_text' => 'La gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une conduite horizontale, p + 1/2ρv² = constante. Une augmentation de v implique une diminution de p.',
                    ],

                    [
                        'question' => 'Quelle forme correspond à l’équation de Bernoulli pour un fluide idéal incompressible en régime permanent ?',
                        'choices' => [
                            ['choice_text' => 'p + 1/2ρv² + ρgh = constante', 'is_correct' => true],
                            ['choice_text' => 'p + ρv + gh = constante', 'is_correct' => false],
                            ['choice_text' => 'pV = constante dans tous les fluides', 'is_correct' => false],
                            ['choice_text' => 'p - 1/2ρv² - ρgh = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Bernoulli exprime la conservation de l’énergie mécanique volumique le long d’une ligne de courant dans les conditions idéales.',
                    ],

                    [
                        'question' => 'Dans un liquide au repos, la différence de pression entre deux profondeurs séparées de Δh vaut...',
                        'choices' => [
                            ['choice_text' => 'Δp = ρgΔh', 'is_correct' => true],
                            ['choice_text' => 'Δp = ρΔh/g', 'is_correct' => false],
                            ['choice_text' => 'Δp = g/(ρΔh)', 'is_correct' => false],
                            ['choice_text' => 'Δp = ρg/Δh', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression hydrostatique augmente avec la profondeur selon Δp = ρgΔh.',
                    ],

                    [
                        'question' => 'Un objet totalement immergé dans un liquide subit une poussée d’Archimède dont la norme dépend principalement...',
                        'choices' => [
                            ['choice_text' => 'Du volume de fluide déplacé et de sa masse volumique', 'is_correct' => true],
                            ['choice_text' => 'Uniquement de la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la profondeur absolue', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la forme extérieure du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'La poussée vaut FA = ρfluide g Vdéplacé.',
                    ],

                    [
                        'question' => 'Un fluide réel s’écoule dans une conduite. Quelle caractéristique distingue principalement un écoulement turbulent d’un écoulement laminaire ?',
                        'choices' => [
                            ['choice_text' => 'La présence de fluctuations et de mouvements désordonnés à différentes échelles', 'is_correct' => true],
                            ['choice_text' => 'L’absence totale de viscosité', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Une densité toujours variable', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écoulement turbulent présente des fluctuations et des structures complexes, contrairement à l’écoulement laminaire idéalement ordonné.',
                    ],

                    [
                        'question' => 'Le nombre de Reynolds permet notamment d’évaluer...',
                        'choices' => [
                            ['choice_text' => 'Le régime d’écoulement en comparant les effets inertiels et visqueux', 'is_correct' => true],
                            ['choice_text' => 'La température absolue uniquement', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique totale', 'is_correct' => false],
                            ['choice_text' => 'La masse totale indépendamment du mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de Reynolds caractérise le rapport entre effets inertiels et effets visqueux et aide à distinguer les régimes d’écoulement.',
                    ],

                    [
                        'question' => 'Dans un écoulement stationnaire, le débit volumique représente...',
                        'choices' => [
                            ['choice_text' => 'Le volume de fluide traversant une section par unité de temps', 'is_correct' => true],
                            ['choice_text' => 'La masse totale présente dans la conduite', 'is_correct' => false],
                            ['choice_text' => 'La pression exercée par unité de surface', 'is_correct' => false],
                            ['choice_text' => 'La vitesse moyenne multipliée par la masse volumique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit volumique Q est un volume écoulé par unité de temps, avec Q = Av pour une vitesse uniforme sur la section.',
                    ],

                    [
                        'question' => 'Dans un écoulement réel, pourquoi l’équation de Bernoulli idéale doit-elle souvent être modifiée ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la viscosité provoque des pertes d’énergie mécanique', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse n’est jamais conservée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité est toujours absente', 'is_correct' => false],
                            ['choice_text' => 'Parce que la pression n’existe pas dans un fluide réel', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements visqueux et les pertes singulières dissipent une partie de l’énergie mécanique.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Thermodynamique
            // ============================================================

            [
                'title' => 'Thermodynamique et transformations',
                'description' => 'Analyse des transformations thermodynamiques, du premier principe et des gaz parfaits.',
                'questions' => [

                    [
                        'question' => 'Pour un gaz parfait, quelle relation relie pression, volume, quantité de matière et température absolue ?',
                        'choices' => [
                            ['choice_text' => 'PV = nRT', 'is_correct' => true],
                            ['choice_text' => 'PV = RT/n', 'is_correct' => false],
                            ['choice_text' => 'P/V = nRT', 'is_correct' => false],
                            ['choice_text' => 'PV = nT/R', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d’état d’un gaz parfait est PV = nRT.',
                    ],

                    [
                        'question' => 'Lors d’une transformation isochore d’un gaz parfait, le volume...',
                        'choices' => [
                            ['choice_text' => 'Reste constant', 'is_correct' => true],
                            ['choice_text' => 'Reste nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'Est proportionnel à la pression', 'is_correct' => false],
                            ['choice_text' => 'Double toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation isochore est réalisée à volume constant.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait soumis à une transformation isotherme, si le volume double, la pression devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'À température et quantité de matière constantes, PV = constante. Si V double, P est divisée par deux.',
                    ],

                    [
                        'question' => 'Selon le premier principe de la thermodynamique, avec la convention ΔU = Q + W où W est le travail reçu par le système, on a...',
                        'choices' => [
                            ['choice_text' => 'ΔU = Q + W', 'is_correct' => true],
                            ['choice_text' => 'ΔU = Q - W dans cette convention', 'is_correct' => false],
                            ['choice_text' => 'ΔU = QW', 'is_correct' => false],
                            ['choice_text' => 'ΔU = W/Q', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la convention où W désigne le travail reçu par le système, le premier principe s’écrit ΔU = Q + W.',
                    ],

                    [
                        'question' => 'Lors d’une détente isobare d’un gaz parfait, si la température absolue augmente, le volume...',
                        'choices' => [
                            ['choice_text' => 'Augmente proportionnellement à la température', 'is_correct' => true],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste constant', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression constante, l’équation PV = nRT donne V proportionnel à T.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait monoatomique, l’énergie interne dépend principalement de...',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La pression seule', 'is_correct' => false],
                            ['choice_text' => 'Le volume seul', 'is_correct' => false],
                            ['choice_text' => 'La forme du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait, l’énergie interne est fonction de la température uniquement, pour une quantité de matière donnée.',
                    ],

                    [
                        'question' => 'Dans une transformation adiabatique idéale, le système échange avec l’extérieur...',
                        'choices' => [
                            ['choice_text' => 'Aucune chaleur', 'is_correct' => true],
                            ['choice_text' => 'Une chaleur nécessairement constante et non nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une chaleur égale au travail dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique vérifie Q = 0.',
                    ],

                    [
                        'question' => 'Pour une détente adiabatique d’un gaz parfait qui fournit un travail à l’extérieur, son énergie interne tend à...',
                        'choices' => [
                            ['choice_text' => 'Diminuer', 'is_correct' => true],
                            ['choice_text' => 'Augmenter nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Rester toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Devenir infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans échange thermique, l’énergie fournie sous forme de travail provient de l’énergie interne du gaz, qui diminue.',
                    ],

                    [
                        'question' => 'Le rendement d’une machine thermique est défini comme...',
                        'choices' => [
                            ['choice_text' => 'Le travail utile fourni divisé par l’énergie thermique reçue de la source chaude', 'is_correct' => true],
                            ['choice_text' => 'La chaleur rejetée divisée par le travail utile', 'is_correct' => false],
                            ['choice_text' => 'La température froide divisée par la température chaude dans tous les cycles', 'is_correct' => false],
                            ['choice_text' => 'Le travail utile multiplié par la chaleur reçue', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement η d’une machine thermique est η = Wutile/Qreçue.',
                    ],

                    [
                        'question' => 'Pour un cycle thermodynamique complet revenant à son état initial, la variation d’énergie interne est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Égale à la chaleur reçue', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie interne est une fonction d’état. Sur un cycle, l’état initial et l’état final sont identiques, donc ΔU = 0.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Électromagnétisme
            // ============================================================

            [
                'title' => 'Champs électriques et magnétiques',
                'description' => 'Application avancée des concepts de champ, potentiel, force de Lorentz et induction.',
                'questions' => [

                    [
                        'question' => 'Le champ électrique créé par une charge ponctuelle Q à une distance r dans le vide a pour norme...',
                        'choices' => [
                            ['choice_text' => 'E = (1/4πε0)|Q|/r²', 'is_correct' => true],
                            ['choice_text' => 'E = (1/4πε0)|Q|/r', 'is_correct' => false],
                            ['choice_text' => 'E = (1/4πε0)r²/|Q|', 'is_correct' => false],
                            ['choice_text' => 'E = (1/4πε0)|Q|r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique d’une charge ponctuelle suit une loi en inverse du carré de la distance.',
                    ],

                    [
                        'question' => 'Une charge positive placée dans un champ électrique uniforme subit une force...',
                        'choices' => [
                            ['choice_text' => 'Dans le même sens que le champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Dans le sens opposé au champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculaire au champ', 'is_correct' => false],
                            ['choice_text' => 'Nulle quelle que soit la valeur du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'La force électrique est F = qE. Pour q > 0, elle est dans le même sens que E.',
                    ],

                    [
                        'question' => 'Une charge négative placée dans un champ électrique uniforme subit une force...',
                        'choices' => [
                            ['choice_text' => 'Dans le sens opposé au champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Dans le même sens que le champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculaire au champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme F = qE et q < 0, la force est opposée au vecteur champ électrique.',
                    ],

                    [
                        'question' => 'Dans un champ électrique électrostatique, la circulation du champ entre deux points dépend...',
                        'choices' => [
                            ['choice_text' => 'Uniquement des points initial et final', 'is_correct' => true],
                            ['choice_text' => 'Toujours de la vitesse de la charge test', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la masse de la charge', 'is_correct' => false],
                            ['choice_text' => 'Du chemin parcouru dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Un champ électrostatique est conservatif : son travail entre deux points est indépendant du chemin.',
                    ],

                    [
                        'question' => 'Une particule chargée entre dans un champ magnétique uniforme avec une vitesse perpendiculaire au champ. Si aucune autre force n’agit, sa trajectoire est...',
                        'choices' => [
                            ['choice_text' => 'Circulaire', 'is_correct' => true],
                            ['choice_text' => 'Rectiligne uniforme', 'is_correct' => false],
                            ['choice_text' => 'Parabolique', 'is_correct' => false],
                            ['choice_text' => 'Exponentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique est perpendiculaire à la vitesse et joue le rôle de force centripète, produisant un mouvement circulaire.',
                    ],

                    [
                        'question' => 'La force magnétique sur une charge q de vitesse v dans un champ B est donnée vectoriellement par...',
                        'choices' => [
                            ['choice_text' => F = q(v × B)', 'is_correct' => true],
                            ['choice_text' => 'F = q(v · B)', 'is_correct' => false],
                            ['choice_text' => 'F = qv/B', 'is_correct' => false],
                            ['choice_text' => 'F = qB/v', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Lorentz magnétique est F = q(v × B).',
                    ],

                    [
                        'question' => 'Une force magnétique idéale sur une particule chargée en mouvement ne travaille pas car elle est...',
                        'choices' => [
                            ['choice_text' => 'Perpendiculaire à la vitesse instantanée', 'is_correct' => true],
                            ['choice_text' => 'Toujours parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante du champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique est perpendiculaire à v, donc F·v = 0 et sa puissance instantanée est nulle.',
                    ],

                    [
                        'question' => 'La loi de Faraday-Lenz relie la force électromotrice induite principalement à...',
                        'choices' => [
                            ['choice_text' => 'La variation temporelle du flux magnétique', 'is_correct' => true],
                            ['choice_text' => 'La masse du conducteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température absolue uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d’induction électromagnétique donne ε = -dΦB/dt.',
                    ],

                    [
                        'question' => 'Le signe négatif de la loi de Faraday-Lenz traduit le fait que le courant induit...',
                        'choices' => [
                            ['choice_text' => 'S’oppose à la variation du flux qui lui a donné naissance', 'is_correct' => true],
                            ['choice_text' => 'Amplifie toujours la variation du flux', 'is_correct' => false],
                            ['choice_text' => 'Est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Est indépendant de la variation du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe de Lenz traduit la conservation de l’énergie : l’effet induit s’oppose à la variation de flux.',
                    ],

                    [
                        'question' => 'Dans un condensateur plan idéal, augmenter la distance entre les armatures tout en maintenant la charge constante tend à...',
                        'choices' => [
                            ['choice_text' => 'Diminuer la capacité et augmenter la tension', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la capacité et diminuer la tension', 'is_correct' => false],
                            ['choice_text' => 'Laisser la capacité et la tension constantes', 'is_correct' => false],
                            ['choice_text' => 'Annuler nécessairement la charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un condensateur plan, C = εA/d. Si d augmente, C diminue. À charge constante, V = Q/C augmente.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Circuits et électronique physique
            // ============================================================

            [
                'title' => 'Circuits électriques et régimes transitoires',
                'description' => 'Analyse des circuits RC, RL, des lois de Kirchhoff et de la puissance électrique.',
                'questions' => [

                    [
                        'question' => 'Dans un circuit RC en charge, quelle est la constante de temps ?',
                        'choices' => [
                            ['choice_text' => 'τ = RC', 'is_correct' => true],
                            ['choice_text' => 'τ = R/C', 'is_correct' => false],
                            ['choice_text' => 'τ = C/R', 'is_correct' => false],
                            ['choice_text' => 'τ = 1/(RC)', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante de temps d’un circuit RC série est τ = RC.',
                    ],

                    [
                        'question' => 'Après une durée très grande devant τ dans la charge d’un condensateur idéal alimenté en courant continu, le courant tend vers...',
                        'choices' => [
                            ['choice_text' => 'Zéro', 'is_correct' => true],
                            ['choice_text' => 'L’infini', 'is_correct' => false],
                            ['choice_text' => 'La tension d’alimentation', 'is_correct' => false],
                            ['choice_text' => 'Une valeur négative constante', 'is_correct' => false],
                        ],
                        'explanation' => 'À long terme, le condensateur est chargé et se comporte idéalement comme un circuit ouvert en régime continu.',
                    ],

                    [
                        'question' => 'Lors de la charge d’un condensateur par une résistance, la tension aux bornes du condensateur évolue selon une loi de type...',
                        'choices' => [
                            ['choice_text' => 'Exponentielle', 'is_correct' => true],
                            ['choice_text' => 'Sinusoïdale pure sans source alternative', 'is_correct' => false],
                            ['choice_text' => 'Quadratique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Constante dès t = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge d’un circuit RC suit une évolution exponentielle : VC(t) = V0(1 - e^(-t/RC)).',
                    ],

                    [
                        'question' => 'Dans un circuit RL série soumis à une tension continue, la constante de temps vaut...',
                        'choices' => [
                            ['choice_text' => 'τ = L/R', 'is_correct' => true],
                            ['choice_text' => 'τ = R/L', 'is_correct' => false],
                            ['choice_text' => 'τ = LR', 'is_correct' => false],
                            ['choice_text' => 'τ = 1/(LR)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un circuit RL série, la constante de temps est τ = L/R.',
                    ],

                    [
                        'question' => 'La loi des nœuds de Kirchhoff repose sur la conservation de...',
                        'choices' => [
                            ['choice_text' => 'La charge électrique', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La masse relativiste uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme algébrique des courants arrivant à un nœud est nulle, ce qui traduit la conservation de la charge.',
                    ],

                    [
                        'question' => 'La loi des mailles de Kirchhoff est liée à la conservation de...',
                        'choices' => [
                            ['choice_text' => 'L’énergie électrique dans une boucle fermée', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La quantité de mouvement', 'is_correct' => false],
                            ['choice_text' => 'La charge de chaque résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une maille, la somme algébrique des différences de potentiel est nulle, ce qui traduit la conservation de l’énergie.',
                    ],

                    [
                        'question' => 'Deux résistances R1 et R2 sont montées en parallèle. Leur résistance équivalente est...',
                        'choices' => [
                            ['choice_text' => 'Req = R1R2/(R1 + R2)', 'is_correct' => true],
                            ['choice_text' => 'Req = R1 + R2', 'is_correct' => false],
                            ['choice_text' => 'Req = R1 - R2', 'is_correct' => false],
                            ['choice_text' => 'Req = R1/R2', 'is_correct' => false],
                        ],
                        'explanation' => 'En parallèle, 1/Req = 1/R1 + 1/R2, donc Req = R1R2/(R1 + R2).',
                    ],

                    [
                        'question' => 'La puissance moyenne dissipée par une résistance parcourue par un courant continu I est...',
                        'choices' => [
                            ['choice_text' => 'P = RI²', 'is_correct' => true],
                            ['choice_text' => 'P = R/I²', 'is_correct' => false],
                            ['choice_text' => 'P = I/R', 'is_correct' => false],
                            ['choice_text' => 'P = R + I', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec U = RI et P = UI, on obtient P = RI².',
                    ],

                    [
                        'question' => 'Un générateur réel possède une force électromotrice E et une résistance interne r. Lorsqu’il débite un courant I, sa tension aux bornes est...',
                        'choices' => [
                            ['choice_text' => 'U = E - rI', 'is_correct' => true],
                            ['choice_text' => 'U = E + rI dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'U = r/E', 'is_correct' => false],
                            ['choice_text' => 'U = EI', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’un générateur fournit du courant, la chute de tension interne rI réduit la tension disponible : U = E - rI.',
                    ],

                    [
                        'question' => 'Dans un circuit RC, après environ 5 constantes de temps lors de la charge, le condensateur est chargé à une fraction de la tension finale proche de...',
                        'choices' => [
                            ['choice_text' => '99,3 %', 'is_correct' => true],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '63 %', 'is_correct' => false],
                            ['choice_text' => '36,8 %', 'is_correct' => false],
                        ],
                        'explanation' => 'À t = 5τ, VC/V0 = 1 - e^-5 ≈ 0,993, soit environ 99,3 %.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Ondes et optique
            // ============================================================

            [
                'title' => 'Ondes, interférences et optique',
                'description' => 'Étude des phénomènes d’interférence, de diffraction, de réfraction et de propagation des ondes.',
                'questions' => [

                    [
                        'question' => 'Pour une onde progressive sinusoïdale, quelle relation fondamentale relie vitesse de propagation v, fréquence f et longueur d’onde λ ?',
                        'choices' => [
                            ['choice_text' => 'v = fλ', 'is_correct' => true],
                            ['choice_text' => 'v = f/λ', 'is_correct' => false],
                            ['choice_text' => 'v = λ/f', 'is_correct' => false],
                            ['choice_text' => 'v = f + λ', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de propagation est donnée par v = fλ.',
                    ],

                    [
                        'question' => 'Deux ondes cohérentes de même amplitude arrivent en phase en un point. L’interférence est alors...',
                        'choices' => [
                            ['choice_text' => 'Constructive', 'is_correct' => true],
                            ['choice_text' => 'Destructive', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer sans connaître la masse des ondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ondes en phase se renforcent mutuellement et produisent une interférence constructive.',
                    ],

                    [
                        'question' => 'Pour deux sources cohérentes, une différence de marche égale à λ/2 correspond à une interférence idéalement...',
                        'choices' => [
                            ['choice_text' => 'Destructive', 'is_correct' => true],
                            ['choice_text' => 'Constructive', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence de marche de λ/2 correspond à un déphasage de π, produisant une opposition de phase.',
                    ],

                    [
                        'question' => 'Selon la loi de Snell-Descartes, à l’interface entre deux milieux, on a...',
                        'choices' => [
                            ['choice_text' => 'n1 sin(i) = n2 sin(r)', 'is_correct' => true],
                            ['choice_text' => 'n1 cos(i) = n2 cos(r)', 'is_correct' => false],
                            ['choice_text' => 'n1i = n2r dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'n1 + sin(i) = n2 + sin(r)', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de réfraction s’écrit n1 sin(i) = n2 sin(r), avec les angles mesurés par rapport à la normale.',
                    ],

                    [
                        'question' => 'Lorsqu’une lumière passe d’un milieu d’indice n1 vers un milieu d’indice n2 plus élevé, sa vitesse de propagation...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse dans un milieu vaut v = c/n. Une augmentation de l’indice entraîne donc une diminution de la vitesse.',
                    ],

                    [
                        'question' => 'Lors du passage d’un milieu transparent à un autre, la fréquence d’une onde lumineuse reste idéalement...',
                        'choices' => [
                            ['choice_text' => 'Constante', 'is_correct' => true],
                            ['choice_text' => 'Toujours multipliée par l’indice', 'is_correct' => false],
                            ['choice_text' => 'Toujours divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est imposée par la source et reste constante à l’interface. La vitesse et la longueur d’onde changent.',
                    ],

                    [
                        'question' => 'La diffraction devient particulièrement importante lorsque la dimension de l’ouverture est...',
                        'choices' => [
                            ['choice_text' => 'Du même ordre de grandeur que la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Des milliers de fois supérieure à la longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction est significative lorsque la taille caractéristique de l’ouverture ou de l’obstacle est comparable à λ.',
                    ],

                    [
                        'question' => 'Dans l’expérience des fentes de Young, l’écartement des franges brillantes est proportionnel à...',
                        'choices' => [
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'L’inverse de la longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'La masse du photon', 'is_correct' => false],
                            ['choice_text' => 'Le carré de la fréquence dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’approximation usuelle, l’interfrange i = λD/a, donc elle est proportionnelle à λ.',
                    ],

                    [
                        'question' => 'Une lentille convergente possède une distance focale f. Un objet placé très loin de la lentille forme son image approximativement...',
                        'choices' => [
                            ['choice_text' => 'Dans le plan focal image', 'is_correct' => true],
                            ['choice_text' => 'Au centre optique uniquement', 'is_correct' => false],
                            ['choice_text' => 'À une distance infinie derrière la lentille', 'is_correct' => false],
                            ['choice_text' => 'Toujours devant la lentille', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet à l’infini, les rayons incidents sont pratiquement parallèles et convergent dans le plan focal image.',
                    ],

                    [
                        'question' => 'Pour une lentille mince, la relation de conjugaison avec les conventions usuelles peut s’écrire sous la forme...',
                        'choices' => [
                            ['choice_text' => '1/f = 1/do + 1/di', 'is_correct' => true],
                            ['choice_text' => 'f = do + di', 'is_correct' => false],
                            ['choice_text' => '1/f = do + di', 'is_correct' => false],
                            ['choice_text' => 'f = do × di', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec les distances orientées selon la convention choisie, la relation de conjugaison s’écrit 1/f = 1/do + 1/di dans sa forme usuelle simplifiée.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Relativité, quantique et physique moderne
            // ============================================================

            [
                'title' => 'Physique moderne et relativité',
                'description' => 'Concepts fondamentaux de relativité restreinte, quantification et phénomènes de physique moderne.',
                'questions' => [

                    [
                        'question' => 'Selon la relativité restreinte, la vitesse de la lumière dans le vide est...',
                        'choices' => [
                            ['choice_text' => 'La même pour tous les observateurs inertiels', 'is_correct' => true],
                            ['choice_text' => 'Plus grande pour les observateurs rapides', 'is_correct' => false],
                            ['choice_text' => 'Nulle pour un observateur en mouvement', 'is_correct' => false],
                            ['choice_text' => 'Dépendante de la masse de l’observateur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’invariance de la vitesse de la lumière dans le vide est l’un des postulats fondamentaux de la relativité restreinte.',
                    ],

                    [
                        'question' => 'L’équation E = mc² exprime notamment l’équivalence entre...',
                        'choices' => [
                            ['choice_text' => Masse et énergie au repos', 'is_correct' => true],
                            ['choice_text' => Charge électrique et masse uniquement', 'is_correct' => false],
                            ['choice_text' => Température et vitesse', 'is_correct' => false],
                            ['choice_text' => Pression et volume uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie de repos d’un corps de masse m est E0 = mc².',
                    ],

                    [
                        'question' => 'Lorsqu’un objet se déplace à une vitesse relativiste proche de c, le facteur de Lorentz γ est...',
                        'choices' => [
                            ['choice_text' => 'γ = 1/√(1 - v²/c²)', 'is_correct' => true],
                            ['choice_text' => 'γ = √(1 - v²/c²)', 'is_correct' => false],
                            ['choice_text' => 'γ = 1 - v/c', 'is_correct' => false],
                            ['choice_text' => 'γ = c/v', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de Lorentz est γ = 1/√(1 - v²/c²). Il augmente fortement lorsque v approche c.',
                    ],

                    [
                        'question' => 'Dans le phénomène de dilatation du temps relativiste, une horloge en mouvement par rapport à un observateur inertiel est mesurée comme...',
                        'choices' => [
                            ['choice_text' => 'Plus lente', 'is_correct' => true],
                            ['choice_text' => 'Plus rapide dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Arrêtée pour toute vitesse non nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un observateur mesure un intervalle de temps dilaté pour une horloge en mouvement par rapport à lui.',
                    ],

                    [
                        'question' => 'L’effet photoélectrique a fourni un argument majeur en faveur de...',
                        'choices' => [
                            ['choice_text' => 'La quantification de l’énergie lumineuse', 'is_correct' => true],
                            ['choice_text' => 'La nature exclusivement ondulatoire de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale d’interaction lumière-matière', 'is_correct' => false],
                        ],
                        'explanation' => 'L’explication d’Einstein repose sur des quanta de lumière d’énergie E = hf.',
                    ],

                    [
                        'question' => 'Pour un photon de fréquence f, son énergie est...',
                        'choices' => [
                            ['choice_text' => 'E = hf', 'is_correct' => true],
                            ['choice_text' => 'E = h/f', 'is_correct' => false],
                            ['choice_text' => 'E = hf²', 'is_correct' => false],
                            ['choice_text' => 'E = f/h', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est quantifiée selon E = hf, où h est la constante de Planck.',
                    ],

                    [
                        'question' => 'La longueur d’onde de de Broglie associée à une particule de quantité de mouvement p est...',
                        'choices' => [
                            ['choice_text' => 'λ = h/p', 'is_correct' => true],
                            ['choice_text' => 'λ = hp', 'is_correct' => false],
                            ['choice_text' => 'λ = p/h', 'is_correct' => false],
                            ['choice_text' => 'λ = h + p', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de de Broglie associe une longueur d’onde λ = h/p à toute particule matérielle.',
                    ],

                    [
                        'question' => 'Le principe d’incertitude de Heisenberg indique notamment qu’on ne peut pas déterminer simultanément avec une précision arbitraire...',
                        'choices' => [
                            ['choice_text' => La position et la quantité de mouvement', 'is_correct' => true],
                            ['choice_text' => 'La masse et la charge dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La température et la pression uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence et la longueur d’onde d’une onde classique', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation Δx Δp ≥ ħ/2 exprime une limite fondamentale sur les incertitudes de position et de quantité de mouvement.',
                    ],

                    [
                        'question' => 'Dans un atome, l’émission d’un photon peut se produire lorsqu’un électron...',
                        'choices' => [
                            ['choice_text' => 'Passe d’un niveau d’énergie élevé à un niveau plus bas', 'is_correct' => true],
                            ['choice_text' => 'Passe toujours d’un niveau bas à un niveau plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Reste exactement sur le même niveau sans transition', 'is_correct' => false],
                            ['choice_text' => 'Perd nécessairement toute sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une transition vers un niveau d’énergie inférieur, l’énergie libérée peut être émise sous forme d’un photon avec ΔE = hf.',
                    ],

                    [
                        'question' => 'Une particule massive ne peut pas atteindre exactement la vitesse de la lumière dans le vide selon la relativité restreinte parce que...',
                        'choices' => [
                            ['choice_text' => 'L’énergie nécessaire augmente sans limite lorsque v tend vers c', 'is_correct' => true],
                            ['choice_text' => 'Sa masse devient exactement nulle dès qu’elle accélère', 'is_correct' => false],
                            ['choice_text' => 'La lumière possède une masse infinie', 'is_correct' => false],
                            ['choice_text' => 'La gravité terrestre l’empêche toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une particule massive, le facteur de Lorentz diverge lorsque v tend vers c, ce qui rend l’énergie requise arbitrairement grande.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => 'Advanced',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];

                // Mélange des choix tout en conservant is_correct
                // attaché à chaque réponse.
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}