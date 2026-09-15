<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MeasurementUnitsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'measurement-units')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Métrologie et traçabilité
            // ============================================================

            [
                'title' => 'Métrologie et traçabilité des mesures',
                'description' => 'Étude avancée des principes de métrologie, de traçabilité et de caractérisation des instruments.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la traçabilité métrologique est-elle importante dans une mesure scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de relier le résultat à des références établies par une chaîne documentée d’étalonnages', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que toute mesure est exactement égale à la valeur vraie', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les erreurs aléatoires', 'is_correct' => false],
                            ['choice_text' => 'Elle rend l’instrument indépendant de toute référence', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité métrologique permet de relier un résultat de mesure à une référence par une chaîne documentée et ininterrompue d’étalonnages.',
                    ],

                    [
                        'question' => 'Un capteur présente une dérive progressive de sa réponse pendant plusieurs mois. Quelle caractéristique doit être surveillée en priorité ?',
                        'choices' => [
                            ['choice_text' => 'La stabilité à long terme', 'is_correct' => true],
                            ['choice_text' => 'La dimension géométrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur du boîtier', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique de l’air uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérive lente de la réponse traduit un problème de stabilité à long terme et justifie notamment une surveillance ou des recalibrations périodiques.',
                    ],

                    [
                        'question' => 'Pourquoi une calibration sur plusieurs points est-elle généralement préférable à une calibration sur un seul point ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de caractériser la réponse de l’instrument sur une plage de fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle rend l’instrument sans unité', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit toujours une relation parfaitement linéaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs points permettent d’identifier un décalage, une pente incorrecte et d’éventuelles non-linéarités sur la plage considérée.',
                    ],

                    [
                        'question' => 'Une mesure exige une exactitude de ±0,1 °C sur une plage de -40 °C à 150 °C. Quel critère est insuffisant à lui seul pour choisir le capteur ?',
                        'choices' => [
                            ['choice_text' => 'La seule résolution d’affichage', 'is_correct' => true],
                            ['choice_text' => 'La plage de mesure', 'is_correct' => false],
                            ['choice_text' => 'L’exactitude spécifiée', 'is_correct' => false],
                            ['choice_text' => 'La stabilité du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résolution fine ne garantit pas une bonne exactitude. Il faut aussi vérifier la plage, les erreurs systématiques, la stabilité et les autres spécifications.',
                    ],

                    [
                        'question' => 'Un instrument possède une excellente répétabilité mais un biais connu de +2 %. Une fois ce biais correctement corrigé, quelle propriété peut rester excellente ?',
                        'choices' => [
                            ['choice_text' => 'La précision', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La plage de température', 'is_correct' => false],
                            ['choice_text' => 'La dimension du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un biais systématique affecte l’exactitude. La faible dispersion des résultats peut cependant témoigner d’une bonne précision.',
                    ],

                    [
                        'question' => 'Dans une chaîne de mesure, pourquoi faut-il connaître les performances de chaque étage ?',
                        'choices' => [
                            ['choice_text' => 'Les erreurs et limitations peuvent se propager de l’élément sensible jusqu’au résultat final', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul composant détermine toujours toute l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute conversion d’unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les instruments sont toujours indépendants', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chaîne de mesure comprend plusieurs éléments dont les performances contribuent ensemble à la qualité du résultat final.',
                    ],

                    [
                        'question' => 'Une procédure d’étalonnage montre qu’un instrument est linéaire mais possède une pente différente de la valeur nominale. Quel type de correction est particulièrement pertinent ?',
                        'choices' => [
                            ['choice_text' => 'Une correction du gain ou de la sensibilité', 'is_correct' => true],
                            ['choice_text' => 'Une correction de masse', 'is_correct' => false],
                            ['choice_text' => 'Une correction de fréquence du réseau électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de l’unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente incorrecte indique une erreur de gain ou de sensibilité. La calibration peut permettre de corriger ce facteur.',
                    ],

                    [
                        'question' => 'Pourquoi une référence métrologique doit-elle elle-même être régulièrement étalonnée ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que ses performances restent compatibles avec la traçabilité attendue', 'is_correct' => true],
                            ['choice_text' => 'Pour changer arbitrairement sa valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour la rendre indépendante de toute référence', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les lois physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étalons eux-mêmes peuvent dériver et doivent donc être contrôlés ou étalonnés selon les exigences métrologiques.',
                    ],

                    [
                        'question' => 'Dans un laboratoire de haute précision, pourquoi faut-il documenter les conditions environnementales pendant une mesure ?',
                        'choices' => [
                            ['choice_text' => 'La température, l’humidité ou les vibrations peuvent influencer le résultat et sa reproductibilité', 'is_correct' => true],
                            ['choice_text' => 'Ces paramètres n’ont jamais d’influence sur les instruments', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les unités SI', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent une exactitude parfaite', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines grandeurs instrumentales et physiques sont sensibles aux conditions environnementales, ce qui peut affecter les mesures.',
                    ],

                    [
                        'question' => 'Quel énoncé décrit le mieux une mesure traçable ?',
                        'choices' => [
                            ['choice_text' => 'Son résultat peut être relié à une référence reconnue avec une chaîne d’étalonnages documentée', 'is_correct' => true],
                            ['choice_text' => 'Elle ne comporte aucune incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle utilise obligatoirement un instrument numérique', 'is_correct' => false],
                            ['choice_text' => 'Elle est réalisée sans calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité concerne le lien documenté vers une référence et non l’absence d’incertitude.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Incertitudes composées
            // ============================================================

            [
                'title' => 'Propagation des incertitudes de mesure',
                'description' => 'Analyse des incertitudes composées et de l’influence des grandeurs d’entrée sur les résultats calculés.',
                'questions' => [

                    [
                        'question' => 'Une longueur vaut L = 2,00 ± 0,02 m. Quelle est approximativement son incertitude relative ?',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => true],
                            ['choice_text' => '0,01 %', 'is_correct' => false],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incertitude relative vaut 0,02/2,00 = 0,01, soit 1 %.',
                    ],

                    [
                        'question' => 'Si y = 2x et que l’incertitude absolue sur x vaut Δx, quelle est l’incertitude absolue correspondante sur y ?',
                        'choices' => [
                            ['choice_text' => '2Δx', 'is_correct' => true],
                            ['choice_text' => 'Δx/2', 'is_correct' => false],
                            ['choice_text' => 'Δx²', 'is_correct' => false],
                            ['choice_text' => 'Δx + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une multiplication par une constante exacte, l’incertitude absolue est multipliée par la valeur absolue de cette constante.',
                    ],

                    [
                        'question' => 'Pour une grandeur y = xz avec des incertitudes relatives indépendantes petites, quelle approche est généralement adaptée ?',
                        'choices' => [
                            ['choice_text' => Combiner quadratiquement les contributions relatives', 'is_correct' => true],
                            ['choice_text' => 'Additionner systématiquement les valeurs centrales', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’incertitude de z', 'is_correct' => false],
                            ['choice_text' => 'Multiplier directement les incertitudes absolues', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des variables indépendantes, la propagation quadratique conduit à combiner les contributions relatives par leurs carrés.',
                    ],

                    [
                        'question' => 'Pour y = x², l’incertitude relative de y est approximativement liée à celle de x par...',
                        'choices' => [
                            ['choice_text' => 'Δy/y ≈ 2Δx/x', 'is_correct' => true],
                            ['choice_text' => 'Δy/y ≈ Δx/(2x)', 'is_correct' => false],
                            ['choice_text' => 'Δy/y ≈ Δx²/x²', 'is_correct' => false],
                            ['choice_text' => 'Δy/y ≈ Δx + x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une petite incertitude, la dérivée logarithmique donne Δy/y ≈ 2Δx/x.',
                    ],

                    [
                        'question' => 'Lorsqu’une grandeur calculée dépend fortement d’une variable dont l’incertitude est élevée, que faut-il envisager pour améliorer le résultat ?',
                        'choices' => [
                            ['choice_text' => Améliorer prioritairement la mesure de cette variable dominante', 'is_correct' => true],
                            ['choice_text' => 'Modifier uniquement les unités', 'is_correct' => false],
                            ['choice_text' => 'Arrondir davantage toutes les valeurs', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la variable dominante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse de sensibilité permet d’identifier les contributions dominantes. Améliorer celles-ci est souvent le moyen le plus efficace de réduire l’incertitude finale.',
                    ],

                    [
                        'question' => 'Deux sources d’incertitude indépendantes valent respectivement 3 unités et 4 unités. Quelle combinaison quadratique donne l’incertitude composée ?',
                        'choices' => [
                            ['choice_text' => '5 unités', 'is_correct' => true],
                            ['choice_text' => '7 unités', 'is_correct' => false],
                            ['choice_text' => '12 unités', 'is_correct' => false],
                            ['choice_text' => '1 unité', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison quadratique donne √(3² + 4²) = √25 = 5 unités.',
                    ],

                    [
                        'question' => 'Pourquoi les incertitudes ne doivent-elles pas être combinées de la même façon dans tous les cas ?',
                        'choices' => [
                            ['choice_text' => Leur traitement dépend de la relation mathématique et des hypothèses sur les corrélations', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une incertitude n’a jamais d’unité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’on peut toujours les ignorer', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats expérimentaux ne sont jamais quantitatifs', 'is_correct' => false],
                        ],
                        'explanation' => 'La propagation dépend de la fonction utilisée et de la nature des dépendances statistiques entre variables.',
                    ],

                    [
                        'question' => 'Si y = a/b avec des incertitudes relatives indépendantes petites, quelle relation approximative est utile pour une combinaison quadratique ?',
                        'choices' => [
                            ['choice_text' => '(Δy/y)² ≈ (Δa/a)² + (Δb/b)²', 'is_correct' => true],
                            ['choice_text' => 'Δy/y = Δa + Δb', 'is_correct' => false],
                            ['choice_text' => '(Δy/y)² = Δa/Δb', 'is_correct' => false],
                            ['choice_text' => 'Δy/y = a/b', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un quotient et des incertitudes indépendantes, les incertitudes relatives se combinent quadratiquement dans l’approximation linéaire.',
                    ],

                    [
                        'question' => 'Une mesure finale dépend de trois capteurs dont les incertitudes sont indépendantes. Pourquoi une analyse de sensibilité est-elle utile avant de remplacer tous les capteurs ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’identifier quels capteurs contribuent réellement le plus à l’incertitude finale', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que tous les capteurs ont exactement le même rôle', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les corrélations sans les analyser', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les incertitudes nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une analyse de sensibilité évite des améliorations coûteuses mais peu efficaces en identifiant les contributions dominantes.',
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal d’exprimer une incertitude relative plutôt qu’absolue lors de la comparaison de mesures de tailles différentes ?',
                        'choices' => [
                            ['choice_text' => Elle permet de comparer la qualité des mesures indépendamment de leur échelle', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toutes les unités', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une même valeur numérique pour tous les instruments', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme une mesure en grandeur exacte', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incertitude relative rapporte l’incertitude à la valeur mesurée et facilite les comparaisons entre différentes échelles.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Analyse dimensionnelle avancée
            // ============================================================

            [
                'title' => 'Analyse dimensionnelle avancée et lois d’échelle',
                'description' => 'Utilisation des dimensions, unités dérivées et lois d’échelle pour tester et interpréter des modèles physiques.',
                'questions' => [

                    [
                        'question' => 'Quelle est la dimension de la quantité de mouvement p = mv ?',
                        'choices' => [
                            ['choice_text' => 'M L T^-1', 'is_correct' => true],
                            ['choice_text' => 'M L T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L² T^-1', 'is_correct' => false],
                            ['choice_text' => 'L T^-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec p = mv, on obtient [p] = M × L T^-1 = M L T^-1.',
                    ],

                    [
                        'question' => 'Quelle est la dimension du moment d’une force ?',
                        'choices' => [
                            ['choice_text' => 'M L² T^-2', 'is_correct' => true],
                            ['choice_text' => 'M L T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L T^-1', 'is_correct' => false],
                            ['choice_text' => 'M L² T^-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Un moment est une force multipliée par une distance : MLT^-2 × L = ML²T^-2.',
                    ],

                    [
                        'question' => 'L’énergie et le moment d’une force ont-ils les mêmes dimensions ?',
                        'choices' => [
                            ['choice_text' => 'Oui, tous deux ont la dimension M L² T^-2', 'is_correct' => true],
                            ['choice_text' => 'Non, l’énergie possède toujours une dimension supplémentaire de longueur', 'is_correct' => false],
                            ['choice_text' => 'Non, le moment est sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement dans les unités anglo-saxonnes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule et le newton-mètre ont la même dimension physique, même si leurs interprétations physiques diffèrent.',
                    ],

                    [
                        'question' => 'Quelle est la dimension de la constante gravitationnelle G dans F = Gm1m2/r² ?',
                        'choices' => [
                            ['choice_text' => 'L³ M^-1 T^-2', 'is_correct' => true],
                            ['choice_text' => 'L² M T^-2', 'is_correct' => false],
                            ['choice_text' => 'L M^-1 T^-2', 'is_correct' => false],
                            ['choice_text' => 'L³ M T^-2', 'is_correct' => false],
                        ],
                        'explanation' => 'G = Fr²/(m1m2). Avec [F] = MLT^-2, on obtient [G] = L³M^-1T^-2.',
                    ],

                    [
                        'question' => 'Quelle est la dimension de la constante de Planck h, sachant que E = hf ?',
                        'choices' => [
                            ['choice_text' => 'M L² T^-1', 'is_correct' => true],
                            ['choice_text' => 'M L² T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L T^-1', 'is_correct' => false],
                            ['choice_text' => 'L² T^-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme f a pour dimension T^-1 et E a pour dimension ML²T^-2, h = E/f possède la dimension ML²T^-1.',
                    ],

                    [
                        'question' => 'Une relation propose une énergie potentielle U = αx⁴. Quelle doit être la dimension de α ?',
                        'choices' => [
                            ['choice_text' => 'M L^-2 T^-2', 'is_correct' => true],
                            ['choice_text' => 'M L² T^-2', 'is_correct' => false],
                            ['choice_text' => 'M L^-1 T^-2', 'is_correct' => false],
                            ['choice_text' => 'L^-4 T²', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme [U] = ML²T^-2 et [x⁴] = L⁴, on obtient [α] = ML^-2T^-2.',
                    ],

                    [
                        'question' => 'Une loi expérimentale suggère F ∝ v² pour une force de traînée. Quel changement d’échelle est attendu lorsque la vitesse est multipliée par trois ?',
                        'choices' => [
                            ['choice_text' => 'La force est multipliée par neuf', 'is_correct' => true],
                            ['choice_text' => 'La force est multipliée par trois', 'is_correct' => false],
                            ['choice_text' => 'La force est multipliée par six', 'is_correct' => false],
                            ['choice_text' => 'La force est divisée par neuf', 'is_correct' => false],
                        ],
                        'explanation' => 'Si F est proportionnelle à v², multiplier v par 3 multiplie F par 3² = 9.',
                    ],

                    [
                        'question' => 'Pourquoi les lois d’échelle sont-elles utiles pour dimensionner un dispositif avant une simulation détaillée ?',
                        'choices' => [
                            ['choice_text' => Elles permettent d’estimer l’évolution relative des grandeurs lorsque les dimensions ou paramètres changent', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent toujours les lois physiques exactes', 'is_correct' => false],
                            ['choice_text' => 'Elles donnent toujours les coefficients numériques exacts', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent être utilisées qu’en mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lois d’échelle fournissent rapidement des estimations utiles pour comparer différentes configurations.',
                    ],

                    [
                        'question' => 'Dans une expérience, une grandeur mesurée varie comme L³ lorsque la longueur caractéristique L est modifiée. Si L double, cette grandeur devient...',
                        'choices' => [
                            ['choice_text' => '8 fois plus grande', 'is_correct' => true],
                            ['choice_text' => '2 fois plus grande', 'is_correct' => false],
                            ['choice_text' => '4 fois plus grande', 'is_correct' => false],
                            ['choice_text' => '6 fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dépendance en L³ donne un facteur 2³ = 8 lorsque L est doublée.',
                    ],

                    [
                        'question' => 'Quelle information une analyse dimensionnelle ne permet-elle pas, à elle seule, de déterminer ?',
                        'choices' => [
                            ['choice_text' => Le signe ou la valeur numérique exacte d’une constante physique', 'is_correct' => true],
                            ['choice_text' => 'La cohérence des unités', 'is_correct' => false],
                            ['choice_text' => 'Les dimensions possibles d’une constante', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité d’additionner des grandeurs de dimensions différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse dimensionnelle impose des contraintes mais ne détermine pas complètement les constantes numériques ni tous les détails de la loi.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Mesures de haute précision
            // ============================================================

            [
                'title' => 'Mesures de haute précision et résolution instrumentale',
                'description' => 'Analyse des limites instrumentales, du bruit, de la résolution et des stratégies de mesure de haute précision.',
                'questions' => [

                    [
                        'question' => 'Un instrument possède une résolution extrêmement fine mais un bruit électronique important. Quelle conséquence peut apparaître ?',
                        'choices' => [
                            ['choice_text' => Des variations affichées plus fines que le niveau réellement exploitable dans le bruit', 'is_correct' => true],
                            ['choice_text' => 'Une exactitude automatiquement excellente', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de tous les biais', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de l’unité de mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution d’affichage ne garantit pas que les variations observées soient physiquement significatives si le bruit domine.',
                    ],

                    [
                        'question' => 'Pourquoi la résolution et la sensibilité ne sont-elles pas synonymes ?',
                        'choices' => [
                            ['choice_text' => 'La sensibilité décrit la variation du signal de sortie pour une variation d’entrée, tandis que la résolution concerne la plus petite variation discernable', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont toujours strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'La résolution concerne uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'La sensibilité ne dépend jamais de la grandeur mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces deux caractéristiques sont liées mais distinctes : une forte sensibilité ne garantit pas à elle seule une faible résolution ou un faible bruit.',
                    ],

                    [
                        'question' => 'Pourquoi une moyenne temporelle peut-elle améliorer la qualité d’une mesure lente en présence de bruit aléatoire ?',
                        'choices' => [
                            ['choice_text' => Elle réduit généralement les fluctuations aléatoires dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Elle corrige automatiquement tous les biais', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours la bande passante', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie la grandeur physique mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégration ou la moyenne peut réduire certaines composantes de bruit aléatoire au prix d’une diminution de la rapidité de mesure.',
                    ],

                    [
                        'question' => 'Quel compromis apparaît lorsqu’on augmente fortement le temps d’intégration d’un instrument ?',
                        'choices' => [
                            ['choice_text' => Une meilleure réduction du bruit mais une réponse temporelle plus lente', 'is_correct' => true],
                            ['choice_text' => Une augmentation simultanée de toutes les fréquences mesurables', 'is_correct' => false],
                            ['choice_text' => Une suppression du signal utile', 'is_correct' => false],
                            ['choice_text' => Une réduction automatique des erreurs systématiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une intégration plus longue peut améliorer le rapport signal/bruit mais réduit la capacité à suivre des variations rapides.',
                    ],

                    [
                        'question' => 'Pour détecter une variation très faible autour d’une grande valeur constante, quelle stratégie est souvent pertinente ?',
                        'choices' => [
                            ['choice_text' => Mesurer et soustraire précisément la composante de fond ou utiliser une mesure différentielle', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniquement la masse du capteur', 'is_correct' => false],
                            ['choice_text' => 'Modifier arbitrairement l’unité', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la composante constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les techniques différentielles et la compensation du fond permettent de rendre une petite variation plus observable.',
                    ],

                    [
                        'question' => 'Pourquoi le blindage électromagnétique est-il parfois indispensable dans une mesure de tension très faible ?',
                        'choices' => [
                            ['choice_text' => Des champs parasites peuvent induire des tensions comparables au signal recherché', 'is_correct' => true],
                            ['choice_text' => 'Le blindage augmente toujours la tension utile', 'is_correct' => false],
                            ['choice_text' => 'Les perturbations électromagnétiques n’ont aucun effet sur les conducteurs', 'is_correct' => false],
                            ['choice_text' => 'La tension devient indépendante des connexions', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’un signal est très faible, des couplages électromagnétiques peuvent devenir du même ordre de grandeur que le signal utile.',
                    ],

                    [
                        'question' => 'Pourquoi une mesure à quatre fils améliore-t-elle la mesure de résistances très faibles ?',
                        'choices' => [
                            ['choice_text' => Elle sépare le chemin du courant de celui de la mesure de tension et réduit l’influence des résistances de contact', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente volontairement la résistance mesurée', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le besoin d’un courant de test', 'is_correct' => false],
                            ['choice_text' => 'Elle fonctionne uniquement avec des résistances très élevées', 'is_correct' => false],
                        ],
                        'explanation' => 'La configuration quatre fils minimise l’effet des résistances des câbles et contacts sur la tension utilisée pour calculer la résistance faible.',
                    ],

                    [
                        'question' => 'Dans une mesure différentielle, quel est l’intérêt principal de mesurer une différence plutôt que deux valeurs absolues séparées ?',
                        'choices' => [
                            ['choice_text' => Réduire l’influence de certaines composantes communes aux deux voies', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement les erreurs systématiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute nécessité de calibration', 'is_correct' => false],
                            ['choice_text' => 'Rendre les deux signaux identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure différentielle bien conçue peut rejeter certaines perturbations communes et améliorer la détection d’une petite différence.',
                    ],

                    [
                        'question' => 'Pourquoi la stabilité thermique d’un laboratoire est-elle importante pour certaines mesures dimensionnelles de précision ?',
                        'choices' => [
                            ['choice_text' => Les matériaux se dilatent ou se contractent avec la température', 'is_correct' => true],
                            ['choice_text' => 'La température ne modifie jamais les dimensions', 'is_correct' => false],
                            ['choice_text' => 'La masse des objets devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité dépend fortement de chaque degré Celsius', 'is_correct' => false],
                        ],
                        'explanation' => 'La dilatation thermique peut produire des variations dimensionnelles significatives dans les mesures de haute précision.',
                    ],

                    [
                        'question' => 'Pourquoi une résolution plus élevée peut-elle être inutile si le bruit total du système est beaucoup plus grand que le pas d’affichage ?',
                        'choices' => [
                            ['choice_text' => Parce que les variations les plus fines sont masquées par le bruit', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une haute résolution supprime toujours le signal', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bruit est une unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que le signal devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La performance réellement exploitable dépend du bruit et de l’incertitude globale, pas uniquement du nombre de chiffres affichés.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Conversion et unités dérivées
            // ============================================================

            [
                'title' => 'Unités dérivées et conversions complexes',
                'description' => 'Manipulation avancée des unités dérivées et des conversions de grandeurs physiques.',
                'questions' => [

                    [
                        'question' => 'Une pression de 1 atm vaut environ 101 325 Pa. Quelle valeur est approximativement exprimée en kPa ?',
                        'choices' => [
                            ['choice_text' => '101,325 kPa', 'is_correct' => true],
                            ['choice_text' => '10,1325 kPa', 'is_correct' => false],
                            ['choice_text' => '1013,25 kPa', 'is_correct' => false],
                            ['choice_text' => '1,01325 kPa', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1 kPa = 1000 Pa, 101 325 Pa = 101,325 kPa.',
                    ],

                    [
                        'question' => 'Une énergie de 1 Wh correspond à...',
                        'choices' => [
                            ['choice_text' => '3600 J', 'is_correct' => true],
                            ['choice_text' => '60 J', 'is_correct' => false],
                            ['choice_text' => '1000 J', 'is_correct' => false],
                            ['choice_text' => '360 J', 'is_correct' => false],
                        ],
                        'explanation' => '1 Wh = 1 W × 1 h = 1 J/s × 3600 s = 3600 J.',
                    ],

                    [
                        'question' => 'Une puissance de 2,4 kW fonctionne pendant 30 minutes. Quelle énergie consomme-t-elle approximativement ?',
                        'choices' => [
                            ['choice_text' => '1,2 kWh', 'is_correct' => true],
                            ['choice_text' => '0,08 kWh', 'is_correct' => false],
                            ['choice_text' => '72 kWh', 'is_correct' => false],
                            ['choice_text' => '4,8 kWh', 'is_correct' => false],
                        ],
                        'explanation' => 'E = Pt = 2,4 kW × 0,5 h = 1,2 kWh.',
                    ],

                    [
                        'question' => 'Une force de 500 N agit sur une surface de 0,25 m². Quelle pression moyenne produit-elle ?',
                        'choices' => [
                            ['choice_text' => '2000 Pa', 'is_correct' => true],
                            ['choice_text' => '125 Pa', 'is_correct' => false],
                            ['choice_text' => '200 Pa', 'is_correct' => false],
                            ['choice_text' => '20 000 Pa', 'is_correct' => false],
                        ],
                        'explanation' => 'p = F/S = 500/0,25 = 2000 Pa.',
                    ],

                    [
                        'question' => 'Une masse de 750 g correspond à...',
                        'choices' => [
                            ['choice_text' => '0,750 kg', 'is_correct' => true],
                            ['choice_text' => '7,50 kg', 'is_correct' => false],
                            ['choice_text' => '75 kg', 'is_correct' => false],
                            ['choice_text' => '0,075 kg', 'is_correct' => false],
                        ],
                        'explanation' => '1 kg = 1000 g, donc 750 g = 0,750 kg.',
                    ],

                    [
                        'question' => 'Une vitesse de 90 km/h correspond à...',
                        'choices' => [
                            ['choice_text' => '25 m/s', 'is_correct' => true],
                            ['choice_text' => '18 m/s', 'is_correct' => false],
                            ['choice_text' => '30 m/s', 'is_correct' => false],
                            ['choice_text' => '32,4 m/s', 'is_correct' => false],
                        ],
                        'explanation' => '90/3,6 = 25 m/s.',
                    ],

                    [
                        'question' => 'Une fréquence de 2,5 GHz correspond à...',
                        'choices' => [
                            ['choice_text' => '2,5 × 10^9 Hz', 'is_correct' => true],
                            ['choice_text' => '2,5 × 10^6 Hz', 'is_correct' => false],
                            ['choice_text' => '2,5 × 10^3 Hz', 'is_correct' => false],
                            ['choice_text' => '2,5 × 10^12 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe giga correspond à 10^9.',
                    ],

                    [
                        'question' => 'Une température de 300 K correspond approximativement à quelle température en degrés Celsius ?',
                        'choices' => [
                            ['choice_text' => '26,85 °C', 'is_correct' => true],
                            ['choice_text' => '300 °C', 'is_correct' => false],
                            ['choice_text' => '573,15 °C', 'is_correct' => false],
                            ['choice_text' => '-26,85 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'La conversion est T(°C) = T(K) - 273,15. Donc 300 - 273,15 = 26,85 °C.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI équivalente au volt exprimée en unités mécaniques et électriques fondamentales ?',
                        'choices' => [
                            ['choice_text' => 'kg·m²·s^-3·A^-1', 'is_correct' => true],
                            ['choice_text' => 'kg·m·s^-2·A^-1', 'is_correct' => false],
                            ['choice_text' => 'kg·m²·s^-2·A^-1', 'is_correct' => false],
                            ['choice_text' => 'kg·m·s^-1·A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volt est un joule par coulomb : (kg·m²·s^-2)/(A·s) = kg·m²·s^-3·A^-1.',
                    ],

                    [
                        'question' => 'Quelle unité SI dérivée correspond à kg·m²·s^-3 ?',
                        'choices' => [
                            ['choice_text' => 'Le watt', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le watt est défini comme un joule par seconde, soit kg·m²·s^-3.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Mesures temporelles et fréquentielles
            // ============================================================

            [
                'title' => 'Mesure de fréquence et synchronisation',
                'description' => 'Analyse des mesures temporelles, des signaux périodiques, du jitter et de la synchronisation.',
                'questions' => [

                    [
                        'question' => 'Un signal de 10 MHz possède une période de...',
                        'choices' => [
                            ['choice_text' => '100 ns', 'is_correct' => true],
                            ['choice_text' => '10 ns', 'is_correct' => false],
                            ['choice_text' => '1 μs', 'is_correct' => false],
                            ['choice_text' => '100 μs', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 1/f = 1/(10 × 10^6) s = 100 ns.',
                    ],

                    [
                        'question' => 'Pourquoi mesurer 1000 périodes d’un signal peut améliorer l’estimation de sa fréquence ?',
                        'choices' => [
                            ['choice_text' => L’erreur absolue de mesure du temps représente une fraction beaucoup plus faible de la durée totale', 'is_correct' => true],
                            ['choice_text' => 'La fréquence réelle augmente', 'is_correct' => false],
                            ['choice_text' => 'Le signal devient plus énergétique', 'is_correct' => false],
                            ['choice_text' => 'La période cesse d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesurer de nombreuses périodes permet de réduire l’incertitude relative liée à la résolution temporelle de la mesure.',
                    ],

                    [
                        'question' => 'Dans une horloge numérique, le jitter correspond principalement à...',
                        'choices' => [
                            ['choice_text' => 'Des variations temporelles de l’instant des transitions ou événements', 'is_correct' => true],
                            ['choice_text' => 'Une variation de masse', 'is_correct' => false],
                            ['choice_text' => 'Une erreur d’unité uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une variation de couleur du signal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le jitter désigne les fluctuations temporelles des événements par rapport à leurs instants idéaux.',
                    ],

                    [
                        'question' => 'Pourquoi une base de temps stable est-elle essentielle dans un système de mesure fréquentielle ?',
                        'choices' => [
                            ['choice_text' => Une dérive de la référence temporelle introduit directement une erreur sur la fréquence mesurée', 'is_correct' => true],
                            ['choice_text' => 'La fréquence ne dépend jamais du temps', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement la puissance du signal', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les perturbations électromagnétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fréquence est définie à partir d’une référence temporelle. Toute erreur de cette référence se traduit par une erreur de mesure.',
                    ],

                    [
                        'question' => 'Un compteur mesure 1 000 001 impulsions pendant exactement 1 seconde alors que le signal idéal devait produire 1 000 000 impulsions. Quelle erreur relative apparaît approximativement ?',
                        'choices' => [
                            ['choice_text' => '1 × 10^-6', 'is_correct' => true],
                            ['choice_text' => '1 × 10^-3', 'is_correct' => false],
                            ['choice_text' => '1 %', 'is_correct' => false],
                            ['choice_text' => '10^-9', 'is_correct' => false],
                        ],
                        'explanation' => 'L’écart est de 1 impulsion sur 1 000 000, soit environ 1 × 10^-6.',
                    ],

                    [
                        'question' => 'Pourquoi une mesure basée sur un grand nombre de périodes est-elle particulièrement efficace lorsqu’on cherche une fréquence stable ?',
                        'choices' => [
                            ['choice_text' => Elle réduit l’importance relative de la quantification temporelle et de l’erreur de comptage', 'is_correct' => true],
                            ['choice_text' => 'Elle rend automatiquement le signal sinusoïdal', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute dérive de l’oscillateur', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie la période physique du signal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fenêtre de mesure plus longue améliore souvent la résolution fréquentielle, mais elle ne supprime pas une dérive réelle de la source.',
                    ],

                    [
                        'question' => 'Dans un système de synchronisation distribué, pourquoi une différence de quelques microsecondes peut-elle être significative ?',
                        'choices' => [
                            ['choice_text' => Elle peut correspondre à une distance importante parcourue par un signal ou perturber le séquencement d’événements rapides', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une microseconde est une unité de masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que les signaux électriques se déplacent instantanément', 'is_correct' => false],
                            ['choice_text' => 'Parce que les horloges ne peuvent jamais être comparées', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les systèmes rapides, de petites erreurs temporelles peuvent produire des décalages spatiaux ou fonctionnels importants.',
                    ],

                    [
                        'question' => 'Pour mesurer correctement une fréquence élevée avec un oscilloscope numérique, quelle spécification devient particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => La fréquence d’échantillonnage et la bande passante', 'is_correct' => true],
                            ['choice_text' => 'La masse du câble uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température ambiante uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le volume du boîtier', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système doit disposer d’une bande passante suffisante et d’un échantillonnage adapté au contenu fréquentiel du signal.',
                    ],

                    [
                        'question' => 'Pourquoi un échantillonnage insuffisant peut-il conduire à une fréquence apparente erronée ?',
                        'choices' => [
                            ['choice_text' => À cause de l’aliasing', 'is_correct' => true],
                            ['choice_text' => À cause de la gravité', 'is_correct' => false],
                            ['choice_text' => À cause de la masse du signal', 'is_correct' => false],
                            ['choice_text' => À cause de l’unité SI de la seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aliasing apparaît lorsqu’un signal est échantillonné trop lentement pour représenter correctement ses composantes fréquentielles.',
                    ],

                    [
                        'question' => 'Dans une mesure de fréquence très précise, pourquoi la dérive de la source doit-elle être distinguée du bruit de mesure ?',
                        'choices' => [
                            ['choice_text' => Le bruit peut être réduit statistiquement tandis qu’une dérive réelle de la source constitue une variation physique ou systématique', 'is_correct' => true],
                            ['choice_text' => 'Les deux phénomènes sont toujours exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'La dérive peut toujours être éliminée par une moyenne courte', 'is_correct' => false],
                            ['choice_text' => 'Le bruit ne peut jamais être quantifié', 'is_correct' => false],
                        ],
                        'explanation' => 'La distinction entre fluctuations rapides et dérives lentes est essentielle pour choisir une stratégie de caractérisation adaptée.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Conception expérimentale
            // ============================================================

            [
                'title' => 'Conception et validation d’une expérience physique',
                'description' => 'Conception avancée de protocoles de mesure, contrôle des variables et validation des résultats expérimentaux.',
                'questions' => [

                    [
                        'question' => 'Lorsqu’on veut déterminer expérimentalement une constante physique, pourquoi plusieurs valeurs de la variable indépendante sont-elles préférables à une seule ?',
                        'choices' => [
                            ['choice_text' => Elles permettent de tester le modèle sur une plage et d’estimer les paramètres à partir d’une tendance', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent automatiquement une absence d’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent toute relation physique linéaire', 'is_correct' => false],
                            ['choice_text' => 'Elles évitent d’utiliser des unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs points permettent d’identifier une tendance, d’estimer des paramètres et de détecter des écarts au modèle.',
                    ],

                    [
                        'question' => 'Pourquoi contrôler une variable expérimentale qui n’est pas étudiée directement ?',
                        'choices' => [
                            ['choice_text' => Pour éviter qu’elle introduise une variation parasite dans le résultat', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter sa valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour la rendre sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la variable indépendante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variable parasite peut modifier le résultat et rendre difficile l’attribution des variations observées au phénomène étudié.',
                    ],

                    [
                        'question' => 'Un chercheur mesure une grandeur avec trois instruments différents et obtient des résultats légèrement divergents. Quelle démarche est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => Comparer leurs spécifications, étalonnages et incertitudes avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement la valeur la plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Faire la moyenne sans analyser les instruments', 'is_correct' => false],
                            ['choice_text' => 'Ignorer toutes les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Les divergences peuvent provenir de biais, de résolutions ou d’incertitudes différentes. Il faut donc caractériser les instruments avant de combiner les résultats.',
                    ],

                    [
                        'question' => 'Pourquoi une expérience témoin est-elle utile dans certaines mesures physiques ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’identifier une contribution de fond ou un effet parasite', 'is_correct' => true],
                            ['choice_text' => 'Elle rend automatiquement l’expérience exacte', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité de mesurer le signal', 'is_correct' => false],
                            ['choice_text' => 'Elle change l’unité de la grandeur étudiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure témoin permet notamment d’évaluer ce qui est présent en l’absence du phénomène étudié et d’améliorer l’interprétation.',
                    ],

                    [
                        'question' => 'Dans une expérience où la température influence le capteur mais n’est pas la grandeur étudiée, quelle stratégie peut améliorer la qualité de la mesure ?',
                        'choices' => [
                            ['choice_text' => Stabiliser la température ou caractériser puis corriger sa dépendance', 'is_correct' => true],
                            ['choice_text' => 'Ignorer la température', 'is_correct' => false],
                            ['choice_text' => 'Augmenter arbitrairement la tension', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute répétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variable d’influence peut être stabilisée, surveillée ou modélisée pour réduire son effet sur la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi vérifier les dimensions d’une grandeur calculée avant de comparer deux résultats expérimentaux ?',
                        'choices' => [
                            ['choice_text' => Une erreur d’unité ou de formule peut produire une comparaison numériquement trompeuse', 'is_correct' => true],
                            ['choice_text' => 'Les dimensions n’ont aucun rôle en expérimentation', 'is_correct' => false],
                            ['choice_text' => 'Toutes les grandeurs physiques sont sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Les unités sont uniquement décoratives', 'is_correct' => false],
                        ],
                        'explanation' => 'La cohérence dimensionnelle est une étape simple mais puissante pour détecter des erreurs de calcul et de conversion.',
                    ],

                    [
                        'question' => 'Une expérience présente une dispersion importante alors qu’un modèle simple prévoit peu de variation. Quelle hypothèse doit notamment être envisagée ?',
                        'choices' => [
                            ['choice_text' => Une source de bruit ou de variabilité non contrôlée peut être présente', 'is_correct' => true],
                            ['choice_text' => 'La théorie est nécessairement fausse', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’instrument devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Les unités SI sont incorrectes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte dispersion peut provenir de fluctuations environnementales, instrumentales ou physiques qui ne sont pas incluses dans le modèle.',
                    ],

                    [
                        'question' => 'Pourquoi effectuer une mesure de référence avant et après une longue campagne expérimentale ?',
                        'choices' => [
                            ['choice_text' => Pour détecter une dérive de l’instrument pendant la campagne', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les variations physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le résultat sans unité', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la résolution', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer une référence avant et après la campagne permet de détecter un changement de réponse de l’instrument.',
                    ],

                    [
                        'question' => 'Lorsqu’un résultat expérimental ne correspond pas à un modèle théorique, pourquoi est-il dangereux de modifier immédiatement le modèle ?',
                        'choices' => [
                            ['choice_text' => L’écart peut provenir d’une erreur expérimentale, d’une hypothèse incorrecte ou d’un paramètre mal estimé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un modèle ne peut jamais être amélioré', 'is_correct' => false],
                            ['choice_text' => 'Parce que les mesures sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la théorie doit être acceptée sans comparaison', 'is_correct' => false],
                        ],
                        'explanation' => 'Avant de modifier une théorie ou un modèle, il faut examiner les conditions expérimentales, les calibrations, les hypothèses et les paramètres.',
                    ],

                    [
                        'question' => 'Pourquoi une répétition indépendante d’une expérience dans un autre laboratoire peut-elle être particulièrement informative ?',
                        'choices' => [
                            ['choice_text' => Elle teste la robustesse du résultat face à des instruments, opérateurs et conditions différents', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que toutes les erreurs disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la valeur théorique exacte', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité d’un protocole', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproductibilité externe aide à distinguer un effet physique robuste d’un résultat dépendant d’une installation ou d’une procédure particulière.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Optimisation d'une chaîne de mesure
            // ============================================================

            [
                'title' => 'Optimisation et validation d’une chaîne de mesure',
                'description' => 'Analyse des compromis entre exactitude, résolution, bande passante, bruit et robustesse dans une chaîne de mesure avancée.',
                'questions' => [

                    [
                        'question' => 'Une chaîne de mesure doit détecter un signal de très faible amplitude à 1 MHz. Quelle combinaison est la plus critique ?',
                        'choices' => [
                            ['choice_text' => 'Le bruit, la bande passante, la sensibilité et l’intégrité du câblage', 'is_correct' => true],
                            ['choice_text' => 'La couleur du boîtier et sa masse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la résolution affichée', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la température ambiante', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal faible et rapide impose de considérer simultanément le bruit, la bande passante, la sensibilité et les perturbations de connexion.',
                    ],

                    [
                        'question' => 'Pourquoi une augmentation de la bande passante peut-elle dégrader le rapport signal/bruit d’une mesure ?',
                        'choices' => [
                            ['choice_text' => Elle peut laisser passer davantage de bruit dans la bande mesurée', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toujours le bruit', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la source parfaitement stable', 'is_correct' => false],
                            ['choice_text' => 'Elle change la masse du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande passante plus large peut transmettre davantage de composantes de bruit. Le filtre doit donc être adapté au spectre utile du signal.',
                    ],

                    [
                        'question' => 'Pourquoi une réduction excessive de la bande passante peut-elle être dangereuse dans une mesure dynamique ?',
                        'choices' => [
                            ['choice_text' => Elle peut atténuer les variations réelles que l’on souhaite observer', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la précision temporelle', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime uniquement les erreurs systématiques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toutes les fréquences identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtrage trop sévère peut supprimer ou retarder des composantes utiles du signal.',
                    ],

                    [
                        'question' => 'Dans une chaîne de mesure en cascade, pourquoi le premier étage peut-il être particulièrement critique pour le rapport signal/bruit global ?',
                        'choices' => [
                            ['choice_text' => Le bruit ajouté très tôt peut être amplifié avec le signal par les étages suivants', 'is_correct' => true],
                            ['choice_text' => 'Les premiers étages ne peuvent jamais ajouter de bruit', 'is_correct' => false],
                            ['choice_text' => 'Le signal est toujours indépendant du premier étage', 'is_correct' => false],
                            ['choice_text' => 'Le bruit disparaît après chaque conversion', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une chaîne en cascade, le bruit ajouté avant un gain important peut avoir une influence majeure sur le rapport signal/bruit final.',
                    ],

                    [
                        'question' => 'Pourquoi un système de mesure critique peut-il utiliser des capteurs redondants de technologies différentes ?',
                        'choices' => [
                            ['choice_text' => Pour réduire le risque de défaillance commune et améliorer la détection des incohérences', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que toutes les erreurs sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute calibration', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les capteurs indépendants des conditions physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des technologies différentes peuvent fournir une diversité de défaillance utile dans les systèmes critiques.',
                    ],

                    [
                        'question' => 'Lorsqu’une chaîne de mesure est utilisée hors de ses conditions nominales, pourquoi faut-il vérifier les spécifications environnementales ?',
                        'choices' => [
                            ['choice_text' => La température, les vibrations ou les interférences peuvent modifier les performances de mesure', 'is_correct' => true],
                            ['choice_text' => 'Les performances sont toujours identiques hors spécifications', 'is_correct' => false],
                            ['choice_text' => 'Les unités SI cessent automatiquement d’être valides', 'is_correct' => false],
                            ['choice_text' => 'Une condition extrême améliore toujours la précision', 'is_correct' => false],
                        ],
                        'explanation' => 'Les performances spécifiées d’un instrument supposent des conditions données. Hors de ces conditions, les erreurs peuvent augmenter.',
                    ],

                    [
                        'question' => 'Une application exige une mesure très rapide et très précise. Quelle approche de conception est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => Optimiser simultanément le capteur, la bande passante, le bruit, l’échantillonnage et la calibration', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement le nombre de décimales affichées', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement la bande passante maximale', 'is_correct' => false],
                            ['choice_text' => 'Négliger la calibration puisque la mesure est rapide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure rapide et précise est une problématique système : capteur, acquisition, bruit, dynamique et calibration doivent être conçus ensemble.',
                    ],

                    [
                        'question' => 'Pourquoi un filtre numérique ne peut-il pas réparer une information qui a déjà été perdue par un échantillonnage insuffisant ?',
                        'choices' => [
                            ['choice_text' => L’aliasing peut rendre plusieurs signaux différents indiscernables après échantillonnage', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un filtre numérique augmente toujours la masse du capteur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données numériques n’ont aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un filtre ne peut jamais modifier un signal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fois l’information repliée par aliasing, le signal échantillonné peut être impossible à distinguer du signal ayant réellement cette fréquence apparente.',
                    ],

                    [
                        'question' => 'Dans une mesure critique, pourquoi conserver les données brutes ainsi que les résultats traités ?',
                        'choices' => [
                            ['choice_text' => Pour permettre l’audit, la reproduction des traitements et la recherche d’erreurs éventuelles', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les mesures automatiquement exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de calibration', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse ultérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation des données brutes permet de vérifier les traitements, de reproduire les analyses et de rechercher d’éventuelles anomalies.',
                    ],

                    [
                        'question' => 'Lorsqu’on optimise une chaîne de mesure, pourquoi faut-il définir une spécification d’exigence avant de choisir l’instrument ?',
                        'choices' => [
                            ['choice_text' => Pour éviter de choisir un instrument performant sur un critère mais inadéquat pour l’application globale', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le capteur le plus cher sera choisi', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer la nécessité de comparer les performances', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les mesures identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une spécification claire permet d’évaluer objectivement plage, exactitude, résolution, bande passante, environnement et autres contraintes avant le choix de l’instrument.',
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

                // Mélange des objets complets afin de conserver
                // is_correct avec la réponse correspondante.
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