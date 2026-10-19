<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WavesOpticsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'waves-optics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Ondes progressives et équation d'onde
            // ============================================================

            [
                'title' => 'Ondes progressives et équation d’onde',
                'description' => 'Analyse intermédiaire des ondes progressives, de leur propagation et de leurs paramètres.',
                'questions' => [

                    [
                        'question' => 'Une onde progressive sinusoïdale est donnée par y(x,t) = A cos(kx - ωt). Dans quelle direction se propage-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Vers les x croissants', 'is_correct' => true],
                            ['choice_text' => 'Vers les x décroissants', 'is_correct' => false],
                            ['choice_text' => 'Uniquement selon l’axe vertical', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement stationnaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une expression de la forme f(kx - ωt) décrit une propagation vers les x croissants.',
                    ],

                    [
                        'question' => 'Pour y(x,t) = A cos(kx - ωt), quelle relation relie k et λ ?',
                        'choices' => [
                            ['choice_text' => 'k = 2π/λ', 'is_correct' => true],
                            ['choice_text' => 'k = λ/2π', 'is_correct' => false],
                            ['choice_text' => 'k = 2πλ', 'is_correct' => false],
                            ['choice_text' => 'k = 1/(2πλ)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre d’onde est défini par k = 2π/λ.',
                    ],

                    [
                        'question' => 'Quelle relation relie la pulsation ω et la fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'ω = 2πf', 'is_correct' => true],
                            ['choice_text' => 'ω = f/2π', 'is_correct' => false],
                            ['choice_text' => 'ω = πf', 'is_correct' => false],
                            ['choice_text' => 'ω = 1/f', 'is_correct' => false],
                        ],
                        'explanation' => 'La pulsation angulaire est ω = 2πf.',
                    ],

                    [
                        'question' => 'Une onde possède λ = 0,8 m et f = 25 Hz. Quelle est sa célérité ?',
                        'choices' => [
                            ['choice_text' => '20 m/s', 'is_correct' => true],
                            ['choice_text' => '31,25 m/s', 'is_correct' => false],
                            ['choice_text' => '0,032 m/s', 'is_correct' => false],
                            ['choice_text' => '25,8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = λf = 0,8 × 25 = 20 m/s.',
                    ],

                    [
                        'question' => 'Une onde possède une célérité de 60 m/s et une fréquence de 15 Hz. Sa longueur d’onde vaut...',
                        'choices' => [
                            ['choice_text' => '4 m', 'is_correct' => true],
                            ['choice_text' => '900 m', 'is_correct' => false],
                            ['choice_text' => '0,25 m', 'is_correct' => false],
                            ['choice_text' => '45 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 60/15 = 4 m.',
                    ],

                    [
                        'question' => 'Deux points d’une onde progressive sinusoïdale sont séparés spatialement de λ/4. Leur différence de phase en valeur absolue est...',
                        'choices' => [
                            ['choice_text' => 'π/2', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Δφ = kΔx = (2π/λ)(λ/4) = π/2.',
                    ],

                    [
                        'question' => 'À une position fixée x, quel est le temps nécessaire pour qu’une onde périodique reproduise exactement le même état ?',
                        'choices' => [
                            ['choice_text' => 'Une période T', 'is_correct' => true],
                            ['choice_text' => 'Une demi-période seulement', 'is_correct' => false],
                            ['choice_text' => 'Une longueur d’onde λ', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence f', 'is_correct' => false],
                        ],
                        'explanation' => 'La période temporelle T est le temps nécessaire pour retrouver le même état vibratoire.',
                    ],

                    [
                        'question' => 'Quelle relation entre célérité v, pulsation ω et nombre d’onde k est correcte ?',
                        'choices' => [
                            ['choice_text' => 'v = ω/k', 'is_correct' => true],
                            ['choice_text' => 'v = k/ω', 'is_correct' => false],
                            ['choice_text' => 'v = ωk', 'is_correct' => false],
                            ['choice_text' => 'v = ω + k', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme ω = 2πf et k = 2π/λ, on obtient ω/k = fλ = v.',
                    ],

                    [
                        'question' => 'Si l’amplitude d’une onde sinusoïdale double dans un milieu linéaire, sa fréquence devient nécessairement...',
                        'choices' => [
                            ['choice_text' => 'Inchangée', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude et la fréquence sont des paramètres distincts pour une onde linéaire donnée.',
                    ],

                    [
                        'question' => 'Pourquoi la célérité d’une onde mécanique dépend-elle du milieu plutôt que directement de l’amplitude dans le modèle linéaire idéal ?',
                        'choices' => [
                            ['choice_text' => 'Elle est principalement déterminée par les propriétés mécaniques du milieu', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend uniquement de la masse de la source', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours égale à l’amplitude', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de toute propriété physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’approximation linéaire, la célérité est déterminée par les propriétés du milieu.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Interférences
            // ============================================================

            [
                'title' => 'Interférences et cohérence',
                'description' => 'Étude des interférences constructives, destructives et des conditions de cohérence.',
                'questions' => [

                    [
                        'question' => 'Quelle condition correspond à une interférence constructive pour deux ondes cohérentes ?',
                        'choices' => [
                            ['choice_text' => 'δ = mλ', 'is_correct' => true],
                            ['choice_text' => 'δ = (m + 1/2)λ', 'is_correct' => false],
                            ['choice_text' => 'δ = λ/3 uniquement', 'is_correct' => false],
                            ['choice_text' => 'δ = mλ/4 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence de marche entière de λ donne une différence de phase de 2πm et donc une interférence constructive.',
                    ],

                    [
                        'question' => 'Quelle condition correspond à une interférence destructive pour deux ondes de même amplitude ?',
                        'choices' => [
                            ['choice_text' => 'δ = (m + 1/2)λ', 'is_correct' => true],
                            ['choice_text' => 'δ = mλ', 'is_correct' => false],
                            ['choice_text' => 'δ = 2mλ', 'is_correct' => false],
                            ['choice_text' => 'δ = mλ/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence de marche demi-entière de λ produit une différence de phase π modulo 2π.',
                    ],

                    [
                        'question' => 'Deux ondes identiques d’amplitude A arrivent en phase en un point. Quelle amplitude résultante obtient-on idéalement ?',
                        'choices' => [
                            ['choice_text' => '2A', 'is_correct' => true],
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'A/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'En phase, les amplitudes s’additionnent : A + A = 2A.',
                    ],

                    [
                        'question' => 'Deux ondes identiques d’amplitude A arrivent en opposition de phase. L’amplitude résultante idéale est...',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '2A', 'is_correct' => false],
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'A/2', 'is_correct' => false],
                        ],
                        'explanation' => 'En opposition de phase, les deux contributions s’annulent exactement si leurs amplitudes sont égales.',
                    ],

                    [
                        'question' => 'Pour deux ondes cohérentes de même intensité I0, quelle est l’intensité maximale lorsque les amplitudes interfèrent constructivement ?',
                        'choices' => [
                            ['choice_text' => '4I0', 'is_correct' => true],
                            ['choice_text' => '2I0', 'is_correct' => false],
                            ['choice_text' => 'I0', 'is_correct' => false],
                            ['choice_text' => 'I0/2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude double en interférence constructive et l’intensité, proportionnelle au carré de l’amplitude, est multipliée par quatre.',
                    ],

                    [
                        'question' => 'Pour deux ondes cohérentes d’intensités I1 et I2, quelle expression générale décrit l’intensité résultante ?',
                        'choices' => [
                            ['choice_text' => 'I = I1 + I2 + 2√(I1I2) cosφ', 'is_correct' => true],
                            ['choice_text' => 'I = I1 + I2 uniquement dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'I = √(I1 + I2)', 'is_correct' => false],
                            ['choice_text' => 'I = I1I2 cosφ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme d’interférence dépend de la différence de phase φ entre les deux ondes.',
                    ],

                    [
                        'question' => 'Pourquoi deux sources lumineuses indépendantes ordinaires ne donnent-elles pas généralement des franges stables ?',
                        'choices' => [
                            ['choice_text' => 'Leur différence de phase varie rapidement et de manière aléatoire', 'is_correct' => true],
                            ['choice_text' => 'Elles ont toujours des fréquences différentes de plusieurs ordres de grandeur', 'is_correct' => false],
                            ['choice_text' => 'La lumière indépendante ne se propage pas', 'is_correct' => false],
                            ['choice_text' => 'Leurs amplitudes sont nécessairement nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une figure d’interférence stable nécessite une cohérence suffisante entre les sources.',
                    ],

                    [
                        'question' => 'Dans l’expérience de Young, si la longueur d’onde augmente alors que la distance entre les fentes et l’écran reste constante, l’interfrange...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les petits angles, i = λD/a. L’interfrange est donc proportionnel à λ.',
                    ],

                    [
                        'question' => 'Dans l’expérience de Young, quelle relation donne approximativement l’interfrange i ?',
                        'choices' => [
                            ['choice_text' => 'i = λD/a', 'is_correct' => true],
                            ['choice_text' => 'i = aD/λ', 'is_correct' => false],
                            ['choice_text' => 'i = λa/D', 'is_correct' => false],
                            ['choice_text' => 'i = D/(λa)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’approximation paraxiale, l’interfrange est i = λD/a.',
                    ],

                    [
                        'question' => 'Si la distance entre les deux fentes est doublée dans l’expérience de Young, l’interfrange devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'i = λD/a. Doubler a divise l’interfrange par deux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Diffraction
            // ============================================================

            [
                'title' => 'Diffraction et résolution',
                'description' => 'Analyse intermédiaire de la diffraction par une fente et de ses applications.',
                'questions' => [

                    [
                        'question' => 'Pour une fente unique de largeur a, quelle condition approximative donne le premier minimum de diffraction ?',
                        'choices' => [
                            ['choice_text' => 'a sinθ = λ', 'is_correct' => true],
                            ['choice_text' => 'a cosθ = λ', 'is_correct' => false],
                            ['choice_text' => 'a tanθ = 2λ', 'is_correct' => false],
                            ['choice_text' => 'a sinθ = λ/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier minimum de la diffraction par une fente vérifie approximativement a sinθ = λ.',
                    ],

                    [
                        'question' => 'Lorsque λ devient plus grande pour une même largeur de fente, le motif de diffraction devient...',
                        'choices' => [
                            ['choice_text' => 'Plus étalé', 'is_correct' => true],
                            ['choice_text' => 'Plus resserré', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle caractéristique varie approximativement comme λ/a, donc une plus grande longueur d’onde augmente l’étalement.',
                    ],

                    [
                        'question' => 'Lorsque la largeur a de la fente augmente, l’angle du premier minimum...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours 90°', 'is_correct' => false],
                            ['choice_text' => 'Ne dépend pas de a', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme sinθ ≈ λ/a, une fente plus large produit une diffraction moins étendue.',
                    ],

                    [
                        'question' => 'Pourquoi la diffraction permet-elle de limiter la résolution d’un instrument optique ?',
                        'choices' => [
                            ['choice_text' => 'Une ouverture finie transforme un point idéal en une figure de diffraction étendue', 'is_correct' => true],
                            ['choice_text' => 'La lumière cesse d’être cohérente dans une lentille', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de la lumière devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Toutes les lentilles absorbent les points lumineux', 'is_correct' => false],
                        ],
                        'explanation' => 'Même un système optique parfait possède une réponse limitée par la diffraction.',
                    ],

                    [
                        'question' => 'Quel critère classique permet d’estimer la résolution angulaire d’une ouverture circulaire ?',
                        'choices' => [
                            ['choice_text' => Le critère de Rayleigh', 'is_correct' => true],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                            ['choice_text' => 'La loi de Boyle', 'is_correct' => false],
                            ['choice_text' => 'Le principe de Pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le critère de Rayleigh fournit une estimation de la séparation minimale entre deux sources ponctuelles résolues.',
                    ],

                    [
                        'question' => 'Pour une ouverture circulaire, comment évolue la limite de résolution lorsque le diamètre de l’ouverture augmente ?',
                        'choices' => [
                            ['choice_text' => 'La limite angulaire de résolution diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle reste identique', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une ouverture circulaire, θ_min ≈ 1,22 λ/D. Une plus grande ouverture améliore donc la résolution.',
                    ],

                    [
                        'question' => 'Pourquoi la microscopie optique ne peut-elle pas résoudre indéfiniment des détails de plus en plus petits ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction impose une limite liée à la longueur d’onde et à l’ouverture numérique', 'is_correct' => true],
                            ['choice_text' => 'La lumière visible possède toujours une amplitude nulle', 'is_correct' => false],
                            ['choice_text' => 'Les lentilles ne peuvent jamais converger la lumière', 'is_correct' => false],
                            ['choice_text' => 'La résolution ne dépend d’aucune propriété de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution optique est limitée par la nature ondulatoire de la lumière.',
                    ],

                    [
                        'question' => 'Pour une fente unique observée sur un écran à grande distance, la largeur angulaire du maximum central augmente lorsque...',
                        'choices' => [
                            ['choice_text' => 'λ augmente ou a diminue', 'is_correct' => true],
                            ['choice_text' => 'λ diminue ou a augmente', 'is_correct' => false],
                            ['choice_text' => 'λ et a augmentent toujours ensemble', 'is_correct' => false],
                            ['choice_text' => 'La fréquence augmente indépendamment de λ', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étalement caractéristique varie comme λ/a.',
                    ],

                    [
                        'question' => 'Pourquoi la diffraction d’une onde sonore est-elle facilement observable autour d’une porte ?',
                        'choices' => [
                            ['choice_text' => La longueur d’onde sonore peut être comparable aux dimensions de l’ouverture', 'is_correct' => true],
                            ['choice_text' => 'La lumière possède une longueur d’onde plus grande que le son', 'is_correct' => false],
                            ['choice_text' => 'Le son ne possède pas de longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'La porte crée de nouvelles fréquences', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction est importante lorsque la taille de l’ouverture est du même ordre que λ.',
                    ],

                    [
                        'question' => 'Une onde de longueur d’onde 2 cm traverse une fente de largeur 4 cm. Le rapport λ/a vaut...',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0,02', 'is_correct' => false],
                        ],
                        'explanation' => 'λ/a = 2/4 = 0,5.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Réfraction et optique géométrique
            // ============================================================

            [
                'title' => 'Réfraction et optique géométrique',
                'description' => 'Application de la loi de Snell-Descartes et étude des lentilles.',
                'questions' => [

                    [
                        'question' => 'Quelle relation exprime la loi de Snell-Descartes ?',
                        'choices' => [
                            ['choice_text' => 'n1 sin i = n2 sin r', 'is_correct' => true],
                            ['choice_text' => 'n1 cos i = n2 cos r', 'is_correct' => false],
                            ['choice_text' => 'n1i = n2r toujours', 'is_correct' => false],
                            ['choice_text' => 'n1 + sin i = n2 + sin r', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de réfraction relie les indices et les angles d’incidence et de réfraction.',
                    ],

                    [
                        'question' => 'Un rayon passe de l’air vers un verre d’indice plus élevé. Il se réfracte généralement...',
                        'choices' => [
                            ['choice_text' => 'Vers la normale', 'is_correct' => true],
                            ['choice_text' => 'Loin de la normale', 'is_correct' => false],
                            ['choice_text' => 'Parallèlement à la surface dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Sans changement de direction pour toute incidence', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage vers un milieu d’indice plus élevé rapproche le rayon de la normale.',
                    ],

                    [
                        'question' => 'Quelle est la célérité de la lumière dans un matériau d’indice n = 1,5 ?',
                        'choices' => [
                            ['choice_text' => '2,0 × 10^8 m/s', 'is_correct' => true],
                            ['choice_text' => '4,5 × 10^8 m/s', 'is_correct' => false],
                            ['choice_text' => '1,5 × 10^8 m/s', 'is_correct' => false],
                            ['choice_text' => '3,0 × 10^8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = c/n = 3,0 × 10^8 / 1,5 = 2,0 × 10^8 m/s.',
                    ],

                    [
                        'question' => 'Lorsqu’une lumière passe du vide dans un milieu transparent, sa fréquence...',
                        'choices' => [
                            ['choice_text' => 'Reste inchangée', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Double toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est fixée par la source et reste continue à l’interface.',
                    ],

                    [
                        'question' => 'Lorsqu’une lumière entre dans un milieu d’indice plus élevé, sa longueur d’onde...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme λ = v/f et que v diminue tandis que f reste constante, λ diminue.',
                    ],

                    [
                        'question' => 'Quelle condition est nécessaire pour observer une réflexion totale interne ?',
                        'choices' => [
                            ['choice_text' => Passer d’un milieu plus réfringent vers un milieu moins réfringent avec un angle d’incidence supérieur à l’angle critique', 'is_correct' => true],
                            ['choice_text' => 'Passer d’un milieu moins réfringent vers un plus réfringent à n’importe quel angle', 'is_correct' => false],
                            ['choice_text' => 'Avoir un angle d’incidence nul', 'is_correct' => false],
                            ['choice_text' => 'Avoir deux indices identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion totale ne peut avoir lieu que lors du passage d’un milieu d’indice supérieur vers un indice inférieur et au-delà de l’angle critique.',
                    ],

                    [
                        'question' => 'Quelle expression donne l’angle critique pour un passage d’un milieu n1 vers un milieu n2 avec n1 > n2 ?',
                        'choices' => [
                            ['choice_text' => sinθc = n2/n1', 'is_correct' => true],
                            ['choice_text' => 'sinθc = n1/n2', 'is_correct' => false],
                            ['choice_text' => 'cosθc = n2/n1', 'is_correct' => false],
                            ['choice_text' => 'tanθc = n1n2', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’angle critique, l’angle réfracté vaut 90°, donc n1 sinθc = n2.',
                    ],

                    [
                        'question' => 'Une lentille convergente possède une distance focale de 20 cm. Quelle est sa vergence ?',
                        'choices' => [
                            ['choice_text' => '+5 dioptries', 'is_correct' => true],
                            ['choice_text' => '+0,05 dioptrie', 'is_correct' => false],
                            ['choice_text' => '-5 dioptries', 'is_correct' => false],
                            ['choice_text' => '+20 dioptries', 'is_correct' => false],
                        ],
                        'explanation' => 'La vergence V = 1/f avec f = 0,20 m, donc V = +5 D.',
                    ],

                    [
                        'question' => 'Pour une lentille convergente, un objet placé au-delà de 2f produit généralement une image...',
                        'choices' => [
                            ['choice_text' => 'Réelle, renversée et réduite entre f et 2f', 'is_correct' => true],
                            ['choice_text' => 'Virtuelle et agrandie', 'is_correct' => false],
                            ['choice_text' => 'Réelle et agrandie au-delà de 2f', 'is_correct' => false],
                            ['choice_text' => 'Toujours située au foyer', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet au-delà de 2f, l’image réelle se forme entre f et 2f et elle est réduite.',
                    ],

                    [
                        'question' => 'Pourquoi une lentille divergente forme-t-elle généralement une image virtuelle pour un objet réel ?',
                        'choices' => [
                            ['choice_text' => Les rayons émergents divergent et leurs prolongements se rencontrent virtuellement', 'is_correct' => true],
                            ['choice_text' => Les rayons convergent réellement derrière la lentille', 'is_correct' => false],
                            ['choice_text' => La lentille absorbe les rayons centraux', 'is_correct' => false],
                            ['choice_text' => La fréquence lumineuse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lentille divergente fait diverger les rayons ; leurs prolongements arrière donnent une image virtuelle.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Lentilles et instruments optiques
            // ============================================================

            [
                'title' => 'Lentilles et instruments optiques',
                'description' => 'Étude intermédiaire de la formation des images et des principaux instruments optiques.',
                'questions' => [

                    [
                        'question' => 'Une lentille convergente possède f = 10 cm et un objet est placé à 30 cm. Quelle est approximativement la distance image avec la convention usuelle en valeurs positives pour cet exercice ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '30 cm', 'is_correct' => false],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                        ],
                        'explanation' => '1/f = 1/do + 1/di, donc 1/10 = 1/30 + 1/di. Ainsi 1/di = 2/30 et di = 15 cm.',
                    ],

                    [
                        'question' => 'Dans l’exercice précédent, le grandissement en valeur absolue vaut...',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0,33', 'is_correct' => false],
                        ],
                        'explanation' => '|γ| = di/do = 15/30 = 0,5.',
                    ],

                    [
                        'question' => 'Une lentille convergente donne une image virtuelle lorsque l’objet est placé...',
                        'choices' => [
                            ['choice_text' => 'Entre la lentille et son foyer', 'is_correct' => true],
                            ['choice_text' => 'Au-delà de 2f uniquement', 'is_correct' => false],
                            ['choice_text' => 'Exactement à 2f', 'is_correct' => false],
                            ['choice_text' => 'À l’infini uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet situé entre la lentille convergente et le foyer, les rayons émergents divergent et l’image est virtuelle, droite et agrandie.',
                    ],

                    [
                        'question' => 'Quel instrument utilise une combinaison de lentilles pour obtenir une image fortement agrandie d’un objet très petit ?',
                        'choices' => [
                            ['choice_text' => 'Le microscope', 'is_correct' => true],
                            ['choice_text' => 'Le miroir plan uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le périscope simple uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un microscope optique utilise notamment un objectif et un oculaire pour fournir une forte amplification angulaire.',
                    ],

                    [
                        'question' => 'Dans une lunette astronomique classique à deux lentilles convergentes, quelle est la fonction principale de l’objectif ?',
                        'choices' => [
                            ['choice_text' => 'Former une image réelle du système observé', 'is_correct' => true],
                            ['choice_text' => 'Absorber toute la lumière incidente', 'is_correct' => false],
                            ['choice_text' => 'Produire directement une image virtuelle finale sans former d’image intermédiaire', 'is_correct' => false],
                            ['choice_text' => 'Éliminer la diffraction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’objectif collecte la lumière et forme une image intermédiaire qui est ensuite observée à travers l’oculaire.',
                    ],

                    [
                        'question' => 'Pourquoi l’oculaire d’un instrument visuel est-il souvent assimilé à une loupe ?',
                        'choices' => [
                            ['choice_text' => 'Il fournit une amplification angulaire de l’image intermédiaire', 'is_correct' => true],
                            ['choice_text' => 'Il crée une fréquence lumineuse nouvelle', 'is_correct' => false],
                            ['choice_text' => 'Il transforme la lumière en son', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute réfraction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oculaire agit comme une loupe pour augmenter l’angle sous lequel l’image intermédiaire est observée.',
                    ],

                    [
                        'question' => 'Pourquoi la puissance optique d’une lentille est-elle exprimée en dioptries ?',
                        'choices' => [
                            ['choice_text' => 'La dioptrie correspond à l’inverse de la distance focale exprimée en mètres', 'is_correct' => true],
                            ['choice_text' => 'Elle correspond à la masse de la lentille', 'is_correct' => false],
                            ['choice_text' => 'Elle correspond à la fréquence lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Elle correspond au carré de la distance focale', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 1/f avec f en mètres, ce qui donne l’unité m^-1, appelée dioptrie.',
                    ],

                    [
                        'question' => 'Pourquoi l’aberration chromatique apparaît-elle dans une lentille réelle ?',
                        'choices' => [
                            ['choice_text' => 'L’indice de réfraction dépend de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'La masse de la lumière dépend de la couleur', 'is_correct' => false],
                            ['choice_text' => 'Toutes les couleurs ont exactement la même réfraction', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dans le vide dépend de la couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion du matériau fait varier l’indice avec la longueur d’onde, donc la focale varie légèrement selon la couleur.',
                    ],

                    [
                        'question' => 'Quelle approche permet de réduire l’aberration chromatique dans de nombreux objectifs ?',
                        'choices' => [
                            ['choice_text' => Combiner plusieurs verres aux dispersions différentes', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement une seule surface plane', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute réfraction', 'is_correct' => false],
                            ['choice_text' => 'Augmenter systématiquement la fréquence de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les doublets achromatiques exploitent plusieurs matériaux afin de corriger partiellement les dispersions.',
                    ],

                    [
                        'question' => 'Pourquoi réduire l’ouverture d’un système optique peut-il parfois améliorer la netteté malgré une diminution de lumière ?',
                        'choices' => [
                            ['choice_text' => Cela peut réduire certaines aberrations géométriques', 'is_correct' => true],
                            ['choice_text' => 'La diffraction disparaît complètement', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde devient plus petite', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient monochromatique automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une petite ouverture limite certains rayons marginaux et peut réduire plusieurs aberrations, mais la diffraction devient alors plus importante.',
                    ],

                    [
                        'question' => 'Pourquoi le compromis entre diffraction et aberrations impose-t-il souvent une ouverture optimale ?',
                        'choices' => [
                            ['choice_text' => Une ouverture trop grande augmente certaines aberrations tandis qu’une ouverture trop petite accentue la diffraction', 'is_correct' => true],
                            ['choice_text' => 'Les deux effets disparaissent toujours simultanément', 'is_correct' => false],
                            ['choice_text' => 'La diffraction est indépendante de l’ouverture', 'is_correct' => false],
                            ['choice_text' => 'Les aberrations ne dépendent jamais de l’ouverture', 'is_correct' => false],
                        ],
                        'explanation' => 'La qualité globale d’un système optique résulte d’un compromis entre différents mécanismes limitant la résolution.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Polarisation et électromagnétisme ondulatoire
            // ============================================================

            [
                'title' => 'Polarisation et ondes électromagnétiques',
                'description' => 'Étude intermédiaire de la polarisation, des champs électromagnétiques et des phénomènes associés.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la lumière peut-elle être polarisée ?',
                        'choices' => [
                            ['choice_text' => Elle est une onde électromagnétique transverse', 'is_correct' => true],
                            ['choice_text' => 'Elle est une onde mécanique longitudinale', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède aucun champ électrique', 'is_correct' => false],
                            ['choice_text' => 'La polarisation ne concerne que les sons', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation décrit l’orientation du champ électrique transverse d’une onde électromagnétique.',
                    ],

                    [
                        'question' => 'Une lumière linéairement polarisée traverse un analyseur dont l’axe fait un angle θ avec la direction de polarisation. Quelle loi donne l’intensité transmise ?',
                        'choices' => [
                            ['choice_text' => 'I = I0 cos²θ', 'is_correct' => true],
                            ['choice_text' => 'I = I0 sinθ', 'is_correct' => false],
                            ['choice_text' => 'I = I0 cosθ', 'is_correct' => false],
                            ['choice_text' => 'I = I0 tan²θ', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Malus donne I = I0 cos²θ pour une lumière déjà polarisée linéairement.',
                    ],

                    [
                        'question' => 'Si l’axe de l’analyseur est perpendiculaire à la polarisation incidente, l’intensité transmise idéale est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'I0', 'is_correct' => false],
                            ['choice_text' => 'I0/2', 'is_correct' => false],
                            ['choice_text' => '2I0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec θ = 90°, I = I0 cos²90° = 0.',
                    ],

                    [
                        'question' => 'Un polariseur idéal transmet en moyenne quelle fraction de la lumière naturelle non polarisée ?',
                        'choice_text' => '50 %',
                    ],

                    [
                        'question' => 'Pourquoi deux polariseurs croisés transmettent-ils idéalement aucune lumière lorsqu’une lumière initialement polarisée les traverse ?',
                        'choices' => [
                            ['choice_text' => Le champ transmis par le premier est perpendiculaire à l’axe du second', 'is_correct' => true],
                            ['choice_text' => 'Le second polariseur augmente la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Le premier polariseur détruit toute énergie électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Les polariseurs deviennent réfléchissants dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux axes perpendiculaires donnent cos²90° = 0 selon la loi de Malus.',
                    ],

                    [
                        'question' => 'Quelle propriété des ondes électromagnétiques relie les champs électrique E et magnétique B dans le vide ?',
                        'choices' => [
                            ['choice_text' => E = cB en norme pour une onde plane dans le vide', 'is_correct' => true],
                            ['choice_text' => E = B/c', 'is_correct' => false],
                            ['choice_text' => E = c²B', 'is_correct' => false],
                            ['choice_text' => E = B dans tous les systèmes d’unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde électromagnétique plane dans le vide, les normes vérifient E = cB.',
                    ],

                    [
                        'question' => 'Dans une onde électromagnétique plane dans le vide, les champs E et B sont...',
                        'choices' => [
                            ['choice_text' => Perpendiculaires entre eux et à la direction de propagation', 'is_correct' => true],
                            ['choice_text' => 'Parallèles entre eux', 'is_correct' => false],
                            ['choice_text' => 'Tous deux parallèles à la propagation', 'is_correct' => false],
                            ['choice_text' => 'Toujours colinéaires au vecteur de position', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde électromagnétique plane dans le vide est transverse.',
                    ],

                    [
                        'question' => 'Quelle direction donne le vecteur de Poynting d’une onde électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'La direction du transport de l’énergie électromagnétique', 'is_correct' => true],
                            ['choice_text' => 'Toujours celle du champ électrique', 'is_correct' => false],
                            ['choice_text' => 'Toujours celle du champ magnétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une direction perpendiculaire à toute propagation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur de Poynting S = (1/μ0) E × B dans le vide donne la direction et le flux d’énergie électromagnétique.',
                    ],

                    [
                        'question' => 'Pourquoi la pression de radiation existe-t-elle ?',
                        'choices' => [
                            ['choice_text' => Une onde électromagnétique transporte de la quantité de mouvement', 'is_correct' => true],
                            ['choice_text' => 'La lumière possède une masse au repos classique', 'is_correct' => false],
                            ['choice_text' => 'La température de la lumière crée une pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La lumière est une onde mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transfert de quantité de mouvement de la lumière à la matière produit une pression de radiation.',
                    ],

                    [
                        'question' => 'Pourquoi les polariseurs sont-ils utilisés dans certaines lunettes de soleil ?',
                        'choices' => [
                            ['choice_text' => 'Ils réduisent certaines composantes polarisées de la lumière, notamment les réflexions parasites', 'is_correct' => true],
                            ['choice_text' => 'Ils augmentent la fréquence de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment toute lumière visible', 'is_correct' => false],
                            ['choice_text' => 'Ils transforment la lumière en infrasons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces réfléchissantes peuvent produire une polarisation partielle exploitable par des filtres polarisants.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Dispersion, spectre et optique physique
            // ============================================================

            [
                'title' => 'Dispersion et spectre lumineux',
                'description' => 'Analyse de la dispersion, du spectre électromagnétique et des effets de la longueur d’onde.',
                'questions' => [

                    [
                        'question' => 'Pourquoi un prisme disperse-t-il la lumière blanche ?',
                        'choices' => [
                            ['choice_text' => 'L’indice du matériau dépend de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Toutes les couleurs ont toujours la même vitesse dans le matériau', 'is_correct' => false],
                            ['choice_text' => 'Le prisme crée de nouvelles couleurs sans interaction', 'is_correct' => false],
                            ['choice_text' => 'La fréquence change arbitrairement à chaque interface', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion vient de la dépendance de n à λ.',
                    ],

                    [
                        'question' => 'Dans un milieu transparent normal, quelle couleur visible est généralement la plus ralentie ?',
                        'choices' => [
                            ['choice_text' => 'Le violet', 'is_correct' => true],
                            ['choice_text' => 'Le rouge', 'is_correct' => false],
                            ['choice_text' => 'Le jaune', 'is_correct' => false],
                            ['choice_text' => 'Toutes exactement de la même façon dans un matériau dispersif', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la dispersion normale usuelle, l’indice est plus grand pour les plus petites longueurs d’onde, donc la lumière violette est davantage ralentie.',
                    ],

                    [
                        'question' => 'Dans le spectre électromagnétique, quelle région possède des longueurs d’onde plus longues que le visible rouge ?',
                        'choices' => [
                            ['choice_text' => 'L’infrarouge', 'is_correct' => true],
                            ['choice_text' => 'L’ultraviolet', 'is_correct' => false],
                            ['choice_text' => 'Les rayons X', 'is_correct' => false],
                            ['choice_text' => 'Les rayons gamma', 'is_correct' => false],
                        ],
                        'explanation' => 'L’infrarouge se situe du côté des longueurs d’onde plus grandes que celles du visible.',
                    ],

                    [
                        'question' => 'Quelle région du spectre possède des longueurs d’onde plus courtes que le violet visible ?',
                        'choices' => [
                            ['choice_text' => 'L’ultraviolet', 'is_correct' => true],
                            ['choice_text' => 'L’infrarouge', 'is_correct' => false],
                            ['choice_text' => 'Les micro-ondes', 'is_correct' => false],
                            ['choice_text' => 'Les ondes radio', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ultraviolet possède des longueurs d’onde plus courtes et des fréquences plus élevées que le violet visible.',
                    ],

                    [
                        'question' => 'Si la fréquence d’une onde électromagnétique est multipliée par deux dans le vide, sa longueur d’onde...',
                        'choices' => [
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => true],
                            ['choice_text' => 'Double', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, c = λf. Si f double, λ doit être divisée par deux.',
                    ],

                    [
                        'question' => 'Pourquoi une lumière monochromatique est-elle particulièrement utile en interférométrie ?',
                        'choices' => [
                            ['choice_text' => Elle possède une longueur d’onde bien définie et facilite l’obtention de franges stables', 'is_correct' => true],
                            ['choice_text' => 'Elle n’interfère jamais', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède aucune phase', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement invisible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible largeur spectrale facilite la stabilité et la lisibilité du motif d’interférence.',
                    ],

                    [
                        'question' => 'Pourquoi une source à large spectre peut-elle réduire la visibilité des franges d’interférence à grande différence de marche ?',
                        'choices' => [
                            ['choice_text' => Les différentes longueurs d’onde produisent des motifs décalés qui se superposent', 'is_correct' => true],
                            ['choice_text' => 'Toutes les couleurs ont exactement la même phase', 'is_correct' => false],
                            ['choice_text' => 'La lumière blanche ne peut jamais interférer', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nulle hors du visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible cohérence temporelle entraîne une diminution de visibilité lorsque la différence de marche devient trop grande.',
                    ],

                    [
                        'question' => 'Quelle propriété permet de distinguer deux raies spectrales proches dans un spectromètre ?',
                        'choices' => [
                            ['choice_text' => 'Le pouvoir de résolution spectral', 'is_correct' => true],
                            ['choice_text' => 'La masse de l’écran', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique seule', 'is_correct' => false],
                            ['choice_text' => 'Le rayon de courbure de l’œil uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pouvoir de résolution indique la capacité à séparer spectralement des longueurs d’onde proches.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse spectrale permet-elle d’identifier certains éléments chimiques ?',
                        'choices' => [
                            ['choice_text' => 'Les atomes et molécules possèdent des transitions énergétiques associées à des longueurs d’onde caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Chaque élément possède une masse qui fixe directement une couleur unique', 'is_correct' => false],
                            ['choice_text' => 'Toutes les transitions sont continues sans structure', 'is_correct' => false],
                            ['choice_text' => 'Le spectre visible est identique pour toutes les substances', 'is_correct' => false],
                        ],
                        'explanation' => 'Les niveaux d’énergie quantifiés donnent des raies spectrales caractéristiques.',
                    ],

                    [
                        'question' => 'Pourquoi l’atmosphère terrestre modifie-t-elle le spectre reçu d’une source astronomique ?',
                        'choices' => [
                            ['choice_text' => Certains gaz atmosphériques absorbent ou diffusent sélectivement certaines longueurs d’onde', 'is_correct' => true],
                            ['choice_text' => 'L’atmosphère crée toutes les raies observées', 'is_correct' => false],
                            ['choice_text' => 'Toutes les longueurs d’onde traversent l’atmosphère exactement de la même façon', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient une onde sonore dans l’atmosphère', 'is_correct' => false],
                        ],
                        'explanation' => 'L’atmosphère possède des bandes d’absorption et diffuse également certaines composantes spectrales.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Optique intégrée et applications
            // ============================================================

            [
                'title' => 'Ondes et optique intégrées',
                'description' => 'Synthèse intermédiaire des phénomènes ondulatoires et optiques appliqués.',
                'questions' => [

                    [
                        'question' => 'Une lumière de longueur d’onde 600 nm se propage dans un verre d’indice 1,5. Quelle est sa longueur d’onde dans le verre ?',
                        'choices' => [
                            ['choice_text' => '400 nm', 'is_correct' => true],
                            ['choice_text' => '600 nm', 'is_correct' => false],
                            ['choice_text' => '900 nm', 'is_correct' => false],
                            ['choice_text' => '300 nm', 'is_correct' => false],
                        ],
                        'explanation' => 'λmilieu = λvide/n = 600/1,5 = 400 nm.',
                    ],

                    [
                        'question' => 'Une onde sonore de fréquence 500 Hz se propage dans l’air à 340 m/s. Quelle est sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => '0,68 m', 'is_correct' => true],
                            ['choice_text' => '1,47 m', 'is_correct' => false],
                            ['choice_text' => '170 m', 'is_correct' => false],
                            ['choice_text' => '500 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 340/500 = 0,68 m.',
                    ],

                    [
                        'question' => 'Une fente de largeur 0,2 mm est éclairée par une lumière de longueur d’onde 600 nm. Pour petits angles, l’angle du premier minimum est approximativement...',
                        'choices' => [
                            ['choice_text' => '3 × 10^-3 rad', 'is_correct' => true],
                            ['choice_text' => '3 rad', 'is_correct' => false],
                            ['choice_text' => '3 × 10^-6 rad', 'is_correct' => false],
                            ['choice_text' => '0,3 rad', 'is_correct' => false],
                        ],
                        'explanation' => 'θ ≈ λ/a = 600×10^-9 / 0,2×10^-3 = 3×10^-3 rad.',
                    ],

                    [
                        'question' => 'Dans une expérience de Young, λ = 500 nm, D = 2 m et a = 0,5 mm. Quelle est approximativement l’interfrange ?',
                        'choices' => [
                            ['choice_text' => '2 mm', 'is_correct' => true],
                            ['choice_text' => '0,2 mm', 'is_correct' => false],
                            ['choice_text' => '20 mm', 'is_correct' => false],
                            ['choice_text' => '0,02 mm', 'is_correct' => false],
                        ],
                        'explanation' => 'i = λD/a = (500×10^-9 × 2)/(0,5×10^-3) = 2×10^-3 m = 2 mm.',
                    ],

                    [
                        'question' => 'Une lentille convergente possède une focale de 25 cm. Quelle est sa vergence ?',
                        'choices' => [
                            ['choice_text' => '+4 D', 'is_correct' => true],
                            ['choice_text' => '+0,25 D', 'is_correct' => false],
                            ['choice_text' => '-4 D', 'is_correct' => false],
                            ['choice_text' => '+25 D', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 0,25 m, donc V = 1/0,25 = +4 D.',
                    ],

                    [
                        'question' => 'Pourquoi une fibre optique peut-elle confiner efficacement la lumière dans son cœur ?',
                        'choices' => [
                            ['choice_text' => 'Une géométrie d’indices appropriée permet la réflexion totale interne', 'is_correct' => true],
                            ['choice_text' => 'Le cœur possède toujours un indice plus faible que la gaine', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient une onde mécanique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence est annulée à chaque réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur possède généralement un indice supérieur à celui de la gaine, ce qui permet le guidage par réflexion totale interne.',
                    ],

                    [
                        'question' => 'Pourquoi la bande passante d’une fibre peut-elle être limitée par la dispersion ?',
                        'choices' => [
                            ['choice_text' => Différentes composantes du signal peuvent arriver à des temps différents', 'is_correct' => true],
                            ['choice_text' => 'La lumière cesse de se propager dans la fibre', 'is_correct' => false],
                            ['choice_text' => 'Toutes les composantes arrivent exactement au même instant', 'is_correct' => false],
                            ['choice_text' => 'La dispersion augmente uniquement la puissance', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion temporelle élargit les impulsions et peut provoquer un recouvrement entre symboles à haut débit.',
                    ],

                    [
                        'question' => 'Pourquoi l’interférométrie peut-elle mesurer de très petites variations de distance ?',
                        'choices' => [
                            ['choice_text' => Une petite variation de différence de marche produit une variation mesurable de phase ou de franges', 'is_correct' => true],
                            ['choice_text' => 'Les interférences amplifient la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'La lumière change de fréquence à chaque déplacement', 'is_correct' => false],
                            ['choice_text' => 'Une différence de marche n’a jamais d’effet sur la phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements de phase associés aux différences de marche peuvent être mesurés avec une très grande sensibilité.',
                    ],

                    [
                        'question' => 'Pourquoi les phénomènes de diffraction et d’interférence sont-ils considérés comme des manifestations de la nature ondulatoire de la lumière ?',
                        'choices' => [
                            ['choice_text' => Ils résultent de la superposition et de la propagation des champs lumineux selon un comportement ondulatoire', 'is_correct' => true],
                            ['choice_text' => 'Ils résultent uniquement de la masse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Ils nécessitent que la lumière soit une onde mécanique', 'is_correct' => false],
                            ['choice_text' => 'Ils ne dépendent jamais de la longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Interférences et diffraction sont des phénomènes caractéristiques de la propagation ondulatoire de la lumière.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse simultanée de la fréquence, de la longueur d’onde et de la célérité est-elle essentielle pour une onde ?',
                        'choices' => [
                            ['choice_text' => 'Ces trois grandeurs sont liées par v = λf et permettent de caractériser sa propagation', 'is_correct' => true],
                            ['choice_text' => 'Elles sont totalement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'La fréquence détermine toujours seule la célérité', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde est toujours égale à la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation v = λf relie directement les propriétés temporelles et spatiales d’une onde.',
                    ],

                    [
                        'question' => 'Pourquoi une description complète d’un système optique réel doit-elle tenir compte à la fois de l’optique géométrique et de l’optique ondulatoire ?',
                        'choices' => [
                            ['choice_text' => 'La géométrie décrit efficacement les rayons tandis que diffraction et interférences fixent certaines limites fondamentales', 'is_correct' => true],
                            ['choice_text' => 'L’optique géométrique et ondulatoire décrivent toujours exactement les mêmes effets', 'is_correct' => false],
                            ['choice_text' => 'La diffraction n’existe que dans les systèmes mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Les lentilles réelles ne réfractent pas la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'L’optique géométrique est très efficace dans le régime paraxial, tandis que les effets ondulatoires deviennent indispensables pour la résolution et les interférences.',
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
                    'difficulty' => 'Intermediate',
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

                // Mélange des choix pour éviter une position prévisible
                // de la bonne réponse.
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