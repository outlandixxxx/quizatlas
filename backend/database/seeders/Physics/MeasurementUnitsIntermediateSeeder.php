<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MeasurementUnitsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'measurement-and-units')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Conversions avancées d'unités
            // ============================================================

            [
                'title' => 'Conversions et préfixes du Système international',
                'description' => 'Application des conversions d’unités, des préfixes SI et des changements d’échelles.',
                'questions' => [

                    [
                        'question' => 'Une vitesse de 72 km/h correspond à quelle valeur en m/s ?',
                        'choices' => [
                            ['choice_text' => '20 m/s', 'is_correct' => true],
                            ['choice_text' => '7,2 m/s', 'is_correct' => false],
                            ['choice_text' => '25 m/s', 'is_correct' => false],
                            ['choice_text' => '12 m/s', 'is_correct' => false],
                        ],
                        'explanation' => '1 km/h = 1000/3600 m/s = 1/3,6 m/s. Donc 72/3,6 = 20 m/s.',
                    ],

                    [
                        'question' => 'Une longueur de 4,5 mm correspond à...',
                        'choices' => [
                            ['choice_text' => '4,5 × 10^-3 m', 'is_correct' => true],
                            ['choice_text' => '4,5 × 10^-6 m', 'is_correct' => false],
                            ['choice_text' => '4,5 × 10^3 m', 'is_correct' => false],
                            ['choice_text' => '0,45 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe milli correspond à 10^-3, donc 4,5 mm = 4,5 × 10^-3 m.',
                    ],

                    [
                        'question' => 'Une énergie de 2,5 kJ correspond à...',
                        'choices' => [
                            ['choice_text' => '2500 J', 'is_correct' => true],
                            ['choice_text' => '250 J', 'is_correct' => false],
                            ['choice_text' => '25 000 J', 'is_correct' => false],
                            ['choice_text' => '0,0025 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe kilo représente un facteur 1000. Ainsi, 2,5 kJ = 2500 J.',
                    ],

                    [
                        'question' => 'Quelle valeur correspond à 350 μA en ampères ?',
                        'choices' => [
                            ['choice_text' => '3,5 × 10^-4 A', 'is_correct' => true],
                            ['choice_text' => '3,5 × 10^-3 A', 'is_correct' => false],
                            ['choice_text' => '3,5 × 10^-6 A', 'is_correct' => false],
                            ['choice_text' => '0,35 A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe micro correspond à 10^-6. Donc 350 μA = 350 × 10^-6 A = 3,5 × 10^-4 A.',
                    ],

                    [
                        'question' => 'Une pression de 250 kPa vaut...',
                        'choices' => [
                            ['choice_text' => '250 000 Pa', 'is_correct' => true],
                            ['choice_text' => '25 000 Pa', 'is_correct' => false],
                            ['choice_text' => '2 500 Pa', 'is_correct' => false],
                            ['choice_text' => '2 500 000 Pa', 'is_correct' => false],
                        ],
                        'explanation' => '1 kPa = 1000 Pa, donc 250 kPa = 250 000 Pa.',
                    ],

                    [
                        'question' => 'Une durée de 2,5 heures correspond à combien de secondes ?',
                        'choices' => [
                            ['choice_text' => '9000 s', 'is_correct' => true],
                            ['choice_text' => '7200 s', 'is_correct' => false],
                            ['choice_text' => '7500 s', 'is_correct' => false],
                            ['choice_text' => '15 000 s', 'is_correct' => false],
                        ],
                        'explanation' => '2,5 h × 3600 s/h = 9000 s.',
                    ],

                    [
                        'question' => 'Une puissance de 0,075 MW correspond à...',
                        'choices' => [
                            ['choice_text' => '75 000 W', 'is_correct' => true],
                            ['choice_text' => '750 W', 'is_correct' => false],
                            ['choice_text' => '7500 W', 'is_correct' => false],
                            ['choice_text' => '750 000 W', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe méga correspond à 10^6. Donc 0,075 MW = 0,075 × 10^6 = 75 000 W.',
                    ],

                    [
                        'question' => 'Quel volume est équivalent à 2,5 m³ en litres ?',
                        'choices' => [
                            ['choice_text' => '2500 L', 'is_correct' => true],
                            ['choice_text' => '250 L', 'is_correct' => false],
                            ['choice_text' => '25 000 L', 'is_correct' => false],
                            ['choice_text' => '25 L', 'is_correct' => false],
                        ],
                        'explanation' => '1 m³ = 1000 L. Donc 2,5 m³ = 2500 L.',
                    ],

                    [
                        'question' => 'Une masse volumique de 1,2 g/cm³ correspond à quelle valeur en kg/m³ ?',
                        'choices' => [
                            ['choice_text' => '1200 kg/m³', 'is_correct' => true],
                            ['choice_text' => '120 kg/m³', 'is_correct' => false],
                            ['choice_text' => '12 kg/m³', 'is_correct' => false],
                            ['choice_text' => '12 000 kg/m³', 'is_correct' => false],
                        ],
                        'explanation' => '1 g/cm³ = 1000 kg/m³. Donc 1,2 g/cm³ = 1200 kg/m³.',
                    ],

                    [
                        'question' => 'Une accélération de 9,8 km/h² doit être convertie en m/s². Quelle opération est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Multiplier par 1000 puis diviser par 3600²', 'is_correct' => true],
                            ['choice_text' => 'Diviser uniquement par 3,6', 'is_correct' => false],
                            ['choice_text' => 'Multiplier uniquement par 3,6', 'is_correct' => false],
                            ['choice_text' => 'Multiplier par 3600 puis diviser par 1000', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une grandeur en km/h², il faut convertir les kilomètres en mètres et les heures au carré en secondes au carré.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Analyse dimensionnelle
            // ============================================================

            [
                'title' => 'Analyse dimensionnelle et cohérence physique',
                'description' => 'Utilisation des dimensions fondamentales pour vérifier des équations physiques et identifier les unités dérivées.',
                'questions' => [

                    [
                        'question' => 'Quelle est la dimension de la vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => 'L T^-1', 'is_correct' => true],
                            ['choice_text' => 'L T', 'is_correct' => false],
                            ['choice_text' => 'L² T^-1', 'is_correct' => false],
                            ['choice_text' => 'M L T^-1', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est une longueur divisée par un temps, donc [v] = L T^-1.',
                    ],

                    [
                        'question' => 'Quelle est la dimension de la pression ?',
                        'choices' => [
                            ['choice_text' => 'M L^-1 T^-2', 'is_correct' => true],
                            ['choice_text' => 'M L T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L² T^-2', 'is_correct' => false],
                            ['choice_text' => 'L^-1 T^-1', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression est une force par unité de surface. Comme [F] = MLT^-2 et [S] = L², on obtient [p] = ML^-1T^-2.',
                    ],

                    [
                        'question' => 'Quelle dimension correspond au joule ?',
                        'choices' => [
                            ['choice_text' => 'M L² T^-2', 'is_correct' => true],
                            ['choice_text' => 'M L T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L² T^-3', 'is_correct' => false],
                            ['choice_text' => 'L² T^-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule est une énergie, dimensionnellement équivalente à un travail, donc force × longueur = M L² T^-2.',
                    ],

                    [
                        'question' => 'Quelle dimension correspond au watt ?',
                        'choices' => [
                            ['choice_text' => 'M L² T^-3', 'is_correct' => true],
                            ['choice_text' => 'M L² T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L T^-2', 'is_correct' => false],
                            ['choice_text' => 'M T^-3', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance est une énergie par unité de temps, donc [P] = M L² T^-3.',
                    ],

                    [
                        'question' => 'Une formule propose T = 2π√(L/g) pour une période. Cette relation est-elle dimensionnellement cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car L/g possède la dimension d’un temps au carré', 'is_correct' => true],
                            ['choice_text' => 'Non, car L/g possède la dimension d’une longueur', 'is_correct' => false],
                            ['choice_text' => 'Non, car g est sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si la masse est constante', 'is_correct' => false],
                        ],
                        'explanation' => '[L/g] = L/(LT^-2) = T². Sa racine carrée a donc la dimension d’un temps.',
                    ],

                    [
                        'question' => 'Une équation contient les termes x = vt + at. Pourquoi cette expression est-elle incorrecte dimensionnellement ?',
                        'choices' => [
                            ['choice_text' => 'Parce que vt est une longueur alors que at est une vitesse', 'is_correct' => true],
                            ['choice_text' => 'Parce que v n’a aucune dimension', 'is_correct' => false],
                            ['choice_text' => 'Parce que x doit être une masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que a et t ont toujours la même dimension', 'is_correct' => false],
                        ],
                        'explanation' => 'vt a pour dimension L, tandis que at a pour dimension L/T. Ces deux termes ne peuvent pas être additionnés.',
                    ],

                    [
                        'question' => 'Quelle expression possède la dimension d’une longueur ?',
                        'choices' => [
                            ['choice_text' => 'v²/a', 'is_correct' => true],
                            ['choice_text' => 'v/a', 'is_correct' => false],
                            ['choice_text' => 'a/v²', 'is_correct' => false],
                            ['choice_text' => 'v × a', 'is_correct' => false],
                        ],
                        'explanation' => '[v²/a] = (L²T^-2)/(LT^-2) = L.',
                    ],

                    [
                        'question' => 'Quelle grandeur est sans dimension ?',
                        'choices' => [
                            ['choice_text' => 'Un angle exprimé en radians', 'is_correct' => true],
                            ['choice_text' => 'Une vitesse', 'is_correct' => false],
                            ['choice_text' => 'Une force', 'is_correct' => false],
                            ['choice_text' => 'Une énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le radian est défini comme un rapport entre deux longueurs, ce qui le rend sans dimension.',
                    ],

                    [
                        'question' => 'Pourquoi une équation dimensionnellement correcte n’est-elle pas nécessairement physiquement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’analyse dimensionnelle ne détermine pas les coefficients numériques ni toute la structure physique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dimensions sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une formule correcte doit toujours être sans unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute relation dimensionnelle est forcément fausse', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse dimensionnelle élimine certaines formes impossibles, mais elle ne suffit pas à démontrer qu’une loi est physiquement valide.',
                    ],

                    [
                        'question' => 'Un physicien obtient une énergie en kg·m²/s². Quelle unité SI dérivée correspond à cette combinaison ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule possède la dimension kg·m²/s².',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Résolution, précision et exactitude
            // ============================================================

            [
                'title' => 'Résolution, précision et exactitude des mesures',
                'description' => 'Interprétation des performances des instruments et distinction entre précision, exactitude et résolution.',
                'questions' => [

                    [
                        'question' => 'Deux instruments donnent respectivement les séries 10,01 ; 10,02 ; 10,01 et 9,5 ; 10,5 ; 10,0. Lequel est le plus précis sur cette série ?',
                        'choices' => [
                            ['choice_text' => 'Le premier', 'is_correct' => true],
                            ['choice_text' => 'Le deuxième', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont également précis', 'is_correct' => false],
                            ['choice_text' => 'Impossible de comparer une dispersion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valeurs du premier instrument sont beaucoup moins dispersées, ce qui indique une meilleure précision.',
                    ],

                    [
                        'question' => 'Un instrument affiche 12,347 mais sa résolution est de 0,01. Quelle valeur affichée est la plus cohérente avec cette résolution ?',
                        'choices' => [
                            ['choice_text' => '12,35', 'is_correct' => true],
                            ['choice_text' => '12,347', 'is_correct' => false],
                            ['choice_text' => '12,3', 'is_correct' => false],
                            ['choice_text' => '12,3500', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résolution de 0,01 correspond à deux décimales. La mesure serait donc arrondie ici à 12,35.',
                    ],

                    [
                        'question' => 'Un appareil possède une plage de mesure de 0 à 100 V. Une mesure de 150 V est-elle directement exploitable avec cet appareil ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle dépasse la plage spécifiée', 'is_correct' => true],
                            ['choice_text' => 'Oui, la plage n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Oui, si la mesure est répétée', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si la tension est continue', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur au-delà de la plage nominale peut être non mesurable correctement et peut même endommager certains instruments.',
                    ],

                    [
                        'question' => 'Pourquoi une bonne résolution ne garantit-elle pas nécessairement une bonne exactitude ?',
                        'choices' => [
                            ['choice_text' => 'Un instrument peut afficher des variations très fines tout en présentant un biais', 'is_correct' => true],
                            ['choice_text' => 'La résolution et l’exactitude sont exactement la même propriété', 'is_correct' => false],
                            ['choice_text' => 'Une haute résolution supprime automatiquement toute erreur', 'is_correct' => false],
                            ['choice_text' => 'L’exactitude dépend uniquement de la couleur de l’instrument', 'is_correct' => false],
                        ],
                        'explanation' => 'Un instrument peut être très sensible aux petites variations mais systématiquement décalé par rapport à la vraie valeur.',
                    ],

                    [
                        'question' => 'Une balance affiche toujours une masse supérieure de 5 g à la vraie masse. Quel problème faut-il suspecter ?',
                        'choices' => [
                            ['choice_text' => 'Un biais systématique', 'is_correct' => true],
                            ['choice_text' => 'Une erreur aléatoire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure résolution', 'is_correct' => false],
                            ['choice_text' => 'Une absence de grandeur physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un décalage constant de +5 g indique un biais systématique.',
                    ],

                    [
                        'question' => 'Un thermomètre mesure plusieurs fois 25,0 °C, alors que la valeur de référence est 25,8 °C. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Les mesures sont précises mais présentent probablement un biais', 'is_correct' => true],
                            ['choice_text' => 'Les mesures sont nécessairement exactes', 'is_correct' => false],
                            ['choice_text' => 'Les mesures sont aléatoires et sans répétabilité', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre n’effectue aucune mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'La faible dispersion indique une bonne précision, tandis que l’écart avec la référence suggère un défaut d’exactitude ou un biais.',
                    ],

                    [
                        'question' => 'Pourquoi choisit-on généralement un instrument dont la plage de mesure couvre la valeur attendue sans être excessivement large ?',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une mesure adaptée tout en exploitant correctement sa résolution et ses performances', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une plage plus grande augmente toujours la précision', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’unité disparaît dans une petite plage', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Choisir une plage appropriée permet généralement de mesurer sans dépasser les limites de l’instrument tout en conservant une bonne résolution utile.',
                    ],

                    [
                        'question' => 'Lors d’une mesure répétée, la moyenne de plusieurs résultats permet principalement de...',
                        'choices' => [
                            ['choice_text' => 'Réduire l’influence des fluctuations aléatoires', 'is_correct' => true],
                            ['choice_text' => 'Supprimer systématiquement tout biais', 'is_correct' => false],
                            ['choice_text' => 'Changer l’unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Rendre l’instrument plus résolu', 'is_correct' => false],
                        ],
                        'explanation' => 'La moyenne de mesures indépendantes permet généralement de réduire l’influence des fluctuations aléatoires.',
                    ],

                    [
                        'question' => 'Si l’on répète une mesure quatre fois avec des erreurs aléatoires indépendantes similaires, l’incertitude-type de la moyenne varie approximativement comme...',
                        'choices' => [
                            ['choice_text' => '1/√4', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '√4', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des mesures indépendantes de même incertitude, l’incertitude-type de la moyenne décroît approximativement comme 1/√N.',
                    ],

                    [
                        'question' => 'Quelle caractéristique est principalement évaluée par une comparaison entre une mesure et une valeur de référence ?',
                        'choices' => [
                            ['choice_text' => 'L’exactitude', 'is_correct' => true],
                            ['choice_text' => 'La résolution seule', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du signal', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’instrument', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exactitude concerne la proximité entre une valeur mesurée et une valeur de référence.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Incertitudes et chiffres significatifs
            // ============================================================

            [
                'title' => 'Incertitudes et chiffres significatifs',
                'description' => 'Application des règles de présentation des résultats et d’interprétation des incertitudes.',
                'questions' => [

                    [
                        'question' => 'Une mesure est donnée sous la forme 5,20 ± 0,05 m. Combien de chiffres significatifs possède généralement la valeur 5,20 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 5,20, le zéro final après la virgule est significatif. Il y a donc trois chiffres significatifs.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de donner beaucoup plus de décimales que l’incertitude ne le permet ?',
                        'choices' => [
                            ['choice_text' => 'Cela donnerait une précision apparente non justifiée par la mesure', 'is_correct' => true],
                            ['choice_text' => 'Les décimales sont interdites en physique', 'is_correct' => false],
                            ['choice_text' => 'Cela change automatiquement l’unité', 'is_correct' => false],
                            ['choice_text' => 'Cela supprime les erreurs systématiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de chiffres reportés doit être cohérent avec la résolution et l’incertitude afin de ne pas suggérer une précision artificielle.',
                    ],

                    [
                        'question' => 'Si x = 10,0 ± 0,2 cm et y = 5,0 ± 0,1 cm, quelle opération nécessite une propagation d’incertitude ?',
                        'choices' => [
                            ['choice_text' => Le calcul d’une grandeur dérivée comme A = xy', 'is_correct' => true],
                            ['choice_text' => 'La simple écriture des unités', 'is_correct' => false],
                            ['choice_text' => 'Le choix de la couleur du graphique', 'is_correct' => false],
                            ['choice_text' => 'La lecture d’un texte', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute grandeur calculée à partir de mesures incertaines nécessite une estimation de l’incertitude résultante.',
                    ],

                    [
                        'question' => 'Pour une grandeur y = x + z avec des incertitudes indépendantes, quelle idée générale est correcte pour une propagation quadratique ?',
                        'choices' => [
                            ['choice_text' => 'Les variances associées aux contributions se combinent quadratiquement', 'is_correct' => true],
                            ['choice_text' => 'Les incertitudes deviennent toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Les valeurs doivent toujours être multipliées', 'is_correct' => false],
                            ['choice_text' => 'La propagation ne dépend jamais des incertitudes d’entrée', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des contributions indépendantes, l’incertitude-type composée est généralement calculée par combinaison quadratique des contributions.',
                    ],

                    [
                        'question' => 'Si une grandeur est multipliée par une constante exacte 10, son incertitude absolue est multipliée par...',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '1/10', 'is_correct' => false],
                            ['choice_text' => 'Elle ne change jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Si y = 10x, alors l’incertitude absolue de y est également multipliée par 10.',
                    ],

                    [
                        'question' => 'Un résultat est mesuré comme 100 ± 1 N. Quelle est approximativement l’incertitude relative ?',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => true],
                            ['choice_text' => '0,01 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incertitude relative vaut environ 1/100 = 0,01, soit 1 %.',
                    ],

                    [
                        'question' => 'Une mesure de 2,00 ± 0,01 s possède une incertitude relative de...',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => true],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '0,05 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                        ],
                        'explanation' => '0,01/2,00 = 0,005 = 0,5 %.',
                    ],

                    [
                        'question' => 'Lorsqu’une incertitude dominante provient d’un seul instrument, quelle amélioration peut être particulièrement efficace ?',
                        'choices' => [
                            ['choice_text' => Utiliser ou calibrer un instrument présentant de meilleures performances', 'is_correct' => true],
                            ['choice_text' => 'Répéter indéfiniment la même mesure sans changer l’instrument', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’unité', 'is_correct' => false],
                            ['choice_text' => 'Arrondir davantage le résultat', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la contribution dominante provient de l’instrument, améliorer ou calibrer celui-ci peut réduire efficacement l’incertitude.',
                    ],

                    [
                        'question' => 'Pourquoi l’incertitude doit-elle être exprimée avec la même unité que la grandeur mesurée lorsqu’il s’agit d’une incertitude absolue ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle représente une amplitude d’incertitude sur la même grandeur', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les incertitudes sont sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’unité est toujours arbitraire', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur centrale doit disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Une incertitude absolue est une variation exprimée dans la même unité que la grandeur concernée.',
                    ],

                    [
                        'question' => 'Quelle présentation est la plus cohérente pour une mesure dont l’incertitude est de l’ordre de 0,1 °C ?',
                        'choices' => [
                            ['choice_text' => '20,3 ± 0,1 °C', 'is_correct' => true],
                            ['choice_text' => '20,312847 ± 0,1 °C', 'is_correct' => false],
                            ['choice_text' => '20 ± 0,123456 °C', 'is_correct' => false],
                            ['choice_text' => '20,0000000000 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de décimales du résultat doit être cohérent avec l’ordre de grandeur de l’incertitude.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Mesures électriques et thermiques
            // ============================================================

            [
                'title' => 'Mesures électriques et thermiques',
                'description' => 'Choix et interprétation des instruments utilisés pour mesurer des grandeurs électriques et thermiques.',
                'questions' => [

                    [
                        'question' => 'Pour mesurer correctement la tension aux bornes d’une résistance, comment branche-t-on idéalement un voltmètre ?',
                        'choices' => [
                            ['choice_text' => 'En parallèle avec la résistance', 'is_correct' => true],
                            ['choice_text' => 'En série avec la résistance', 'is_correct' => false],
                            ['choice_text' => 'À la place du générateur', 'is_correct' => false],
                            ['choice_text' => 'Sans connexion électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un voltmètre mesure une différence de potentiel entre deux points et se branche donc en parallèle.',
                    ],

                    [
                        'question' => 'Pourquoi un ampèremètre idéal possède-t-il une très faible résistance interne ?',
                        'choices' => [
                            ['choice_text' => 'Pour perturber le moins possible le courant du circuit', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la tension mesurée', 'is_correct' => false],
                            ['choice_text' => 'Pour bloquer complètement le courant', 'is_correct' => false],
                            ['choice_text' => 'Pour fonctionner comme une résistance de grande valeur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampèremètre est placé en série et doit idéalement ajouter une résistance négligeable au circuit.',
                    ],

                    [
                        'question' => 'Pourquoi un voltmètre idéal possède-t-il une résistance d’entrée très élevée ?',
                        'choices' => [
                            ['choice_text' => 'Pour prélever très peu de courant et perturber le moins possible le circuit', 'is_correct' => true],
                            ['choice_text' => 'Pour court-circuiter la source', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le courant du circuit', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer la tension en masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande résistance d’entrée limite le courant absorbé par le voltmètre et réduit son influence sur le circuit.',
                    ],

                    [
                        'question' => 'Un multimètre possède une résolution de 1 mV sur une plage donnée. Quelle est la plus petite variation affichable théoriquement sur cette plage ?',
                        'choices' => [
                            ['choice_text' => '1 mV', 'is_correct' => true],
                            ['choice_text' => '10 mV', 'is_correct' => false],
                            ['choice_text' => '0,1 V', 'is_correct' => false],
                            ['choice_text' => '1 V', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résolution de 1 mV signifie qu’un changement de cet ordre peut être distingué ou affiché selon les spécifications.',
                    ],

                    [
                        'question' => 'Lorsqu’un thermocouple est utilisé pour mesurer une température, quel phénomène physique est exploité ?',
                        'choices' => [
                            ['choice_text' => L’effet thermoélectrique', 'is_correct' => true],
                            ['choice_text' => 'La réflexion totale', 'is_correct' => false],
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La gravitation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un thermocouple exploite l’effet thermoélectrique, qui produit une tension liée à la différence de température entre les jonctions.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il tenir compte de la résistance des fils dans certaines mesures électriques de précision ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut introduire une chute de tension ou une erreur dans la grandeur mesurée', 'is_correct' => true],
                            ['choice_text' => 'Elle annule toujours le courant', 'is_correct' => false],
                            ['choice_text' => 'Elle n’existe jamais dans un circuit réel', 'is_correct' => false],
                            ['choice_text' => 'Elle change automatiquement la charge élémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fils réels possèdent une résistance et peuvent produire des chutes de tension ou des erreurs, surtout lorsque les courants sont importants ou les mesures très précises.',
                    ],

                    [
                        'question' => 'Dans une mesure à quatre fils d’une faible résistance, quel est l’objectif principal ?',
                        'choices' => [
                            ['choice_text' => Réduire l’influence de la résistance des conducteurs et des contacts', 'is_correct' => true],
                            ['choice_text' => 'Augmenter volontairement la résistance des fils', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le courant de mesure', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la température', 'is_correct' => false],
                        ],
                        'explanation' => 'La méthode quatre fils sépare les connexions de courant et de mesure de tension afin de réduire fortement l’influence des résistances parasites.',
                    ],

                    [
                        'question' => 'Pourquoi un capteur de température peut-il devoir être étalonné avant une utilisation scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Pour relier précisément son signal à une température de référence et détecter les biais', 'is_correct' => true],
                            ['choice_text' => 'Pour changer la masse du capteur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité d’une unité', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la température indépendante de l’environnement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étalonnage permet d’établir la relation entre la sortie du capteur et des valeurs de température connues.',
                    ],

                    [
                        'question' => 'Une résistance de 100 Ω est mesurée avec un courant de 10 mA. Quelle tension idéale doit-on obtenir ?',
                        'choices' => [
                            ['choice_text' => '1 V', 'is_correct' => true],
                            ['choice_text' => '10 V', 'is_correct' => false],
                            ['choice_text' => '0,1 V', 'is_correct' => false],
                            ['choice_text' => '1000 V', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon U = RI, U = 100 × 0,010 = 1 V.',
                    ],

                    [
                        'question' => 'Lorsqu’un instrument est relié à un circuit, pourquoi peut-il modifier légèrement la valeur que l’on souhaite mesurer ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il possède des caractéristiques électriques ou physiques non idéales', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un instrument réel est toujours sans résistance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les unités changent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute mesure détruit nécessairement le système', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure réelle peut charger le circuit ou perturber le système. Cet effet de charge doit être pris en compte dans les mesures précises.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Mesure du temps et fréquence
            // ============================================================

            [
                'title' => 'Mesure du temps, fréquence et signaux périodiques',
                'description' => 'Application des instruments et méthodes de mesure des durées, périodes et fréquences.',
                'questions' => [

                    [
                        'question' => 'Une oscillation possède une période de 0,02 s. Quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '50 Hz', 'is_correct' => true],
                            ['choice_text' => '20 Hz', 'is_correct' => false],
                            ['choice_text' => '0,02 Hz', 'is_correct' => false],
                            ['choice_text' => '200 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est l’inverse de la période : f = 1/T = 1/0,02 = 50 Hz.',
                    ],

                    [
                        'question' => 'Pour mesurer une fréquence électrique avec un oscilloscope, quelle grandeur temporelle peut être mesurée directement sur l’écran ?',
                        'choices' => [
                            ['choice_text' => 'La période', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La résistance uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oscilloscope affiche notamment la tension en fonction du temps, permettant de mesurer la période puis de calculer la fréquence.',
                    ],

                    [
                        'question' => 'Un signal possède 10 oscillations en 2 secondes. Quelle est sa fréquence moyenne ?',
                        'choices' => [
                            ['choice_text' => '5 Hz', 'is_correct' => true],
                            ['choice_text' => '20 Hz', 'is_correct' => false],
                            ['choice_text' => '0,2 Hz', 'is_correct' => false],
                            ['choice_text' => '2 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est le nombre d’oscillations par seconde : 10/2 = 5 Hz.',
                    ],

                    [
                        'question' => 'Pourquoi mesurer plusieurs périodes au lieu d’une seule peut-il améliorer une estimation de période ?',
                        'choices' => [
                            ['choice_text' => 'Cela réduit l’impact de l’erreur de lecture sur la durée totale mesurée', 'is_correct' => true],
                            ['choice_text' => 'Cela supprime automatiquement toute erreur systématique', 'is_correct' => false],
                            ['choice_text' => 'Cela change la fréquence réelle du signal', 'is_correct' => false],
                            ['choice_text' => 'Cela rend l’instrument inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesurer une durée couvrant plusieurs périodes puis diviser par le nombre de périodes réduit l’effet relatif de l’incertitude de lecture.',
                    ],

                    [
                        'question' => 'Un chronomètre possède une résolution de 0,01 s. Quelle limitation fondamentale cette résolution impose-t-elle à une mesure simple ?',
                        'choices' => [
                            ['choice_text' => 'Il ne permet pas de distinguer directement des différences bien inférieures à 0,01 s', 'is_correct' => true],
                            ['choice_text' => 'Il ne peut mesurer que des durées supérieures à une heure', 'is_correct' => false],
                            ['choice_text' => 'Il change la durée réelle', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute incertitude', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution limite la finesse avec laquelle les variations de temps peuvent être distinguées ou affichées.',
                    ],

                    [
                        'question' => 'Une horloge avance de 2 secondes par jour. Après 30 jours, son avance accumulée sera approximativement de...',
                        'choices' => [
                            ['choice_text' => '60 s', 'is_correct' => true],
                            ['choice_text' => '30 s', 'is_correct' => false],
                            ['choice_text' => '15 s', 'is_correct' => false],
                            ['choice_text' => '600 s', 'is_correct' => false],
                        ],
                        'explanation' => 'À raison de 2 s/jour pendant 30 jours, l’avance est 2 × 30 = 60 s.',
                    ],

                    [
                        'question' => 'Pourquoi un étalon de fréquence très stable est-il important pour une horloge de haute précision ?',
                        'choices' => [
                            ['choice_text' => 'Une petite variation de fréquence cumulée peut produire une erreur temporelle importante sur la durée', 'is_correct' => true],
                            ['choice_text' => 'La fréquence n’a aucun lien avec le temps', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence instable améliore toujours la précision', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’horloge devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une petite erreur de fréquence peut se cumuler au fil du temps et entraîner une dérive significative de l’horloge.',
                    ],

                    [
                        'question' => 'Un générateur produit un signal de 1 kHz. Quelle est sa période ?',
                        'choices' => [
                            ['choice_text' => '1 ms', 'is_correct' => true],
                            ['choice_text' => '1 s', 'is_correct' => false],
                            ['choice_text' => '10 ms', 'is_correct' => false],
                            ['choice_text' => '100 μs', 'is_correct' => false],
                        ],
                        'explanation' => '1 kHz = 1000 Hz, donc T = 1/1000 s = 0,001 s = 1 ms.',
                    ],

                    [
                        'question' => 'Pourquoi la mesure du temps de plusieurs cycles peut-elle être plus robuste qu’une mesure directe d’un seul cycle ?',
                        'choices' => [
                            ['choice_text' => 'La résolution absolue de l’instrument représente une fraction plus faible de la durée mesurée', 'is_correct' => true],
                            ['choice_text' => 'Les cycles deviennent plus longs physiquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence disparaît', 'is_correct' => false],
                            ['choice_text' => 'L’instrument gagne automatiquement une nouvelle unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Si l’incertitude absolue de lecture reste similaire, mesurer une durée totale plus longue améliore généralement l’incertitude relative.',
                    ],

                    [
                        'question' => 'Un signal possède une fréquence de 2,5 MHz. Sa période est approximativement...',
                        'choices' => [
                            ['choice_text' => '0,4 μs', 'is_correct' => true],
                            ['choice_text' => '4 μs', 'is_correct' => false],
                            ['choice_text' => '2,5 μs', 'is_correct' => false],
                            ['choice_text' => '0,04 ms', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 1/f = 1/(2,5 × 10^6) s = 0,4 × 10^-6 s = 0,4 μs.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Graphiques et traitement des mesures
            // ============================================================

            [
                'title' => 'Représentation et traitement des données expérimentales',
                'description' => 'Lecture de tableaux, graphiques et tendances expérimentales à partir de mesures physiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi représente-t-on souvent une série de mesures expérimentales sur un graphique ?',
                        'choices' => [
                            ['choice_text' => 'Pour visualiser les tendances, dispersions et relations entre grandeurs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Pour changer les unités', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données exactes automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un graphique permet de visualiser rapidement une tendance, une corrélation, une dispersion ou d’éventuels écarts.',
                    ],

                    [
                        'question' => 'Sur un graphique représentant y en fonction de x, que signifie une relation linéaire y = ax + b ?',
                        'choices' => [
                            ['choice_text' => 'La pente est a et l’ordonnée à l’origine est b', 'is_correct' => true],
                            ['choice_text' => 'La pente est b et l’origine est a', 'is_correct' => false],
                            ['choice_text' => 'a et b sont toujours des unités identiques', 'is_correct' => false],
                            ['choice_text' => 'La relation ne dépend pas de x', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = ax + b, a représente la pente de la droite et b son ordonnée à l’origine.',
                    ],

                    [
                        'question' => 'Des mesures donnent une droite de pente 2,0 m/s sur un graphique x(t). Quelle grandeur peut cette pente représenter ?',
                        'choices' => [
                            ['choice_text' => 'Une vitesse', 'is_correct' => true],
                            ['choice_text' => 'Une masse', 'is_correct' => false],
                            ['choice_text' => 'Une énergie', 'is_correct' => false],
                            ['choice_text' => 'Une température', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente d’un graphique position en fonction du temps possède les unités m/s et correspond à la vitesse.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il indiquer les unités sur les axes d’un graphique expérimental ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre l’interprétation quantitative correcte des données', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre la courbe plus esthétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Pour imposer une pente nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans unités, il est impossible d’interpréter correctement les valeurs numériques et les dimensions des pentes.',
                    ],

                    [
                        'question' => 'Un ensemble de points expérimentaux est réparti autour d’une droite. Que peut représenter la dispersion autour de cette droite ?',
                        'choices' => [
                            ['choice_text' => Les variations aléatoires ou l’incertitude des mesures', 'is_correct' => true],
                            ['choice_text' => 'Une absence de données', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle unité physique', 'is_correct' => false],
                            ['choice_text' => 'Une conservation parfaite de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion des points autour d’un modèle peut provenir du bruit expérimental, des incertitudes ou de variations physiques non modélisées.',
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on parfois une échelle logarithmique pour représenter des mesures ?',
                        'choices' => [
                            ['choice_text' => 'Pour visualiser efficacement des valeurs couvrant plusieurs ordres de grandeur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les unités', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute relation exponentielle', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les valeurs égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Une échelle logarithmique permet de représenter efficacement des grandeurs variant sur plusieurs puissances de dix.',
                    ],

                    [
                        'question' => 'Une série de données suit approximativement y ∝ x². Quel type de graphique peut aider à tester cette relation ?',
                        'choices' => [
                            ['choice_text' => 'Un graphique de y en fonction de x²', 'is_correct' => true],
                            ['choice_text' => 'Un graphique de y en fonction d’une constante arbitraire', 'is_correct' => false],
                            ['choice_text' => 'Un graphique de x uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un graphique sans axes', 'is_correct' => false],
                        ],
                        'explanation' => 'Si y est proportionnel à x², représenter y en fonction de x² devrait donner approximativement une relation linéaire.',
                    ],

                    [
                        'question' => 'Lorsqu’un modèle théorique prédit une relation linéaire mais que les résidus présentent une tendance courbe, quelle possibilité faut-il envisager ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle choisi peut être incomplet ou inadapté dans le domaine étudié', 'is_correct' => true],
                            ['choice_text' => 'Les unités sont nécessairement parfaites', 'is_correct' => false],
                            ['choice_text' => 'Toute tendance des résidus prouve que les mesures sont exactes', 'is_correct' => false],
                            ['choice_text' => 'La masse du système doit être nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une structure non aléatoire dans les résidus peut révéler que le modèle ne décrit pas correctement une dépendance présente dans les données.',
                    ],

                    [
                        'question' => 'Pourquoi conserver les données brutes lors d’une expérience ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre de vérifier les calculs, les traitements et les résultats ultérieurs', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute analyse statistique', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les unités', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les mesures sont exactes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les données brutes permettent de reproduire les traitements, d’identifier des erreurs et de vérifier les conclusions.',
                    ],

                    [
                        'question' => 'Dans une analyse expérimentale, pourquoi est-il utile de conserver les barres d’erreur sur un graphique ?',
                        'choices' => [
                            ['choice_text' => 'Elles indiquent visuellement l’ampleur des incertitudes associées aux points', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toutes les mesures exactes', 'is_correct' => false],
                            ['choice_text' => 'Elles changent la valeur des données', 'is_correct' => false],
                            ['choice_text' => 'Elles indiquent uniquement la couleur du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les barres d’erreur montrent visuellement l’ordre de grandeur de l’incertitude associée à chaque mesure.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Conception d'une chaîne de mesure
            // ============================================================

            [
                'title' => 'Chaînes de mesure et choix des instruments',
                'description' => 'Application des principes de mesure au choix d’instruments, à l’étalonnage et à la qualité des résultats.',
                'questions' => [

                    [
                        'question' => 'Pour concevoir une chaîne de mesure fiable, quel élément faut-il définir en premier ?',
                        'choices' => [
                            ['choice_text' => 'La grandeur à mesurer et les performances requises', 'is_correct' => true],
                            ['choice_text' => 'La couleur du boîtier', 'is_correct' => false],
                            ['choice_text' => 'Le nom commercial de l’instrument uniquement', 'is_correct' => false],
                            ['choice_text' => 'La marque du câble uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le besoin de mesure détermine la plage, la résolution, l’exactitude, la fréquence d’acquisition et les autres performances nécessaires.',
                    ],

                    [
                        'question' => 'Un capteur doit mesurer une température entre -20 °C et 80 °C. Une plage de mesure de -10 °C à 50 °C est-elle adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Non, car elle ne couvre pas toute la plage attendue', 'is_correct' => true],
                            ['choice_text' => 'Oui, car une partie de la plage suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si la résolution est élevée', 'is_correct' => false],
                            ['choice_text' => 'Oui, si le capteur est numérique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’instrument doit couvrir au minimum les conditions de fonctionnement prévues pour éviter la saturation ou les mesures hors spécifications.',
                    ],

                    [
                        'question' => 'Pourquoi l’étalonnage d’un instrument doit-il idéalement utiliser des références traçables ?',
                        'choices' => [
                            ['choice_text' => 'Pour relier les mesures à une chaîne de références documentées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les erreurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l’instrument indépendant de toute unité', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la grandeur mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité permet de relier les résultats à des références reconnues via une chaîne documentée de comparaisons ou d’étalonnages.',
                    ],

                    [
                        'question' => 'Un capteur fournit une tension de sortie proportionnelle à une température. Quelle information est nécessaire pour convertir correctement la tension en température ?',
                        'choices' => [
                            ['choice_text' => 'La relation d’étalonnage du capteur', 'is_correct' => true],
                            ['choice_text' => 'La masse du câble uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur du capteur', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation d’étalonnage permet d’associer la sortie électrique du capteur à la température correspondante.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il vérifier la bande passante d’un système de mesure lorsqu’on mesure un signal rapide ?',
                        'choices' => [
                            ['choice_text' => 'Une bande passante insuffisante peut atténuer ou déformer le signal', 'is_correct' => true],
                            ['choice_text' => 'La bande passante ne concerne que les masses', 'is_correct' => false],
                            ['choice_text' => 'Une bande passante faible améliore toujours la forme du signal', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du signal n’a aucune influence sur les instruments', 'is_correct' => false],
                        ],
                        'explanation' => 'Un système de mesure doit avoir une bande passante adaptée au contenu fréquentiel du signal afin d’éviter une distorsion importante.',
                    ],

                    [
                        'question' => 'Pourquoi un capteur très sensible n’est-il pas nécessairement meilleur dans toutes les applications ?',
                        'choices' => [
                            ['choice_text' => 'Une sensibilité élevée peut s’accompagner d’une plage réduite, d’un bruit plus important ou d’autres compromis', 'is_correct' => true],
                            ['choice_text' => 'La sensibilité n’a jamais de relation avec la mesure', 'is_correct' => false],
                            ['choice_text' => 'Un capteur sensible mesure toujours toutes les grandeurs', 'is_correct' => false],
                            ['choice_text' => 'Une sensibilité élevée supprime automatiquement le besoin d’étalonnage', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix d’un capteur est un compromis entre sensibilité, plage, bruit, linéarité, stabilité, robustesse et autres performances.',
                    ],

                    [
                        'question' => 'Dans une chaîne de mesure numérique, pourquoi le taux d’échantillonnage doit-il être adapté à la fréquence du signal ?',
                        'choices' => [
                            ['choice_text' => 'Pour représenter correctement les variations temporelles et limiter le risque d’aliasing', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute incertitude de capteur', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le signal continu par définition', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la température du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Un échantillonnage insuffisant peut produire de l’aliasing, où les composantes rapides sont interprétées comme des fréquences erronées.',
                    ],

                    [
                        'question' => 'Pourquoi utiliser plusieurs capteurs redondants dans un système de mesure critique ?',
                        'choices' => [
                            ['choice_text' => 'Pour comparer les mesures et détecter certaines incohérences ou défaillances', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement une valeur exacte', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute calibration', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les capteurs sans unité', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance permet de comparer plusieurs voies de mesure et d’identifier certaines pannes ou dérives.',
                    ],

                    [
                        'question' => 'Dans un environnement fortement perturbé électromagnétiquement, quelle solution peut améliorer la qualité d’un signal de mesure ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un câblage et un blindage adaptés tout en maîtrisant les chemins de masse et le filtrage', 'is_correct' => true],
                            ['choice_text' => 'Augmenter arbitrairement la longueur des câbles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute référence de tension', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la fréquence des perturbations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le blindage, le câblage approprié, le filtrage et la maîtrise des masses réduisent les couplages électromagnétiques indésirables.',
                    ],

                    [
                        'question' => 'Un ingénieur doit choisir entre deux instruments : le premier a une meilleure résolution mais une plage plus faible, le second une plage plus large mais une résolution plus faible. Quel choix est correct ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui satisfait les exigences réelles de plage, résolution et incertitude de l’application', 'is_correct' => true],
                            ['choice_text' => 'Toujours le premier', 'is_correct' => false],
                            ['choice_text' => 'Toujours le second', 'is_correct' => false],
                            ['choice_text' => 'Celui qui coûte le plus cher sans analyser les performances', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix d’un instrument dépend des exigences de l’application et doit équilibrer plage de mesure, résolution, exactitude et autres contraintes.',
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