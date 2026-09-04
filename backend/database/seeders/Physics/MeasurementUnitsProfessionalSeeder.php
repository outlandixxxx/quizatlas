<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MeasurementUnitsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'measurement-and-units')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Métrologie professionnelle
            // ============================================================

            [
                'title' => 'Métrologie professionnelle et traçabilité',
                'description' => 'Principes avancés de métrologie, traçabilité, étalonnage et maîtrise des résultats de mesure.',
                'questions' => [

                    [
                        'question' => 'Dans une chaîne de traçabilité métrologique, quel élément est fondamental pour relier un résultat à une référence reconnue ?',
                        'choices' => [
                            ['choice_text' => 'Une chaîne documentée et ininterrompue d’étalonnages avec incertitudes associées', 'is_correct' => true],
                            ['choice_text' => 'Une simple comparaison visuelle entre deux instruments', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale d’incertitude', 'is_correct' => false],
                            ['choice_text' => 'L’utilisation obligatoire d’un instrument numérique', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité métrologique repose sur une chaîne documentée de comparaisons ou d’étalonnages jusqu’à une référence appropriée, avec les incertitudes correspondantes.',
                    ],

                    [
                        'question' => 'Un laboratoire utilise une masse étalon pour calibrer une balance. Quelle propriété de cette masse est particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => Sa traçabilité métrologique et son incertitude d’étalonnage', 'is_correct' => true],
                            ['choice_text' => 'Uniquement sa couleur', 'is_correct' => false],
                            ['choice_text' => 'Uniquement son volume apparent', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de mesures qu’elle a déjà réalisées', 'is_correct' => false],
                        ],
                        'explanation' => 'Un étalon doit posséder des caractéristiques métrologiques connues, notamment une traçabilité et une incertitude documentée.',
                    ],

                    [
                        'question' => 'Pourquoi un certificat d’étalonnage est-il utile dans un laboratoire professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Il documente les résultats d’étalonnage, les conditions et les performances métrologiques', 'is_correct' => true],
                            ['choice_text' => 'Il garantit une mesure sans aucune erreur', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toute procédure de mesure', 'is_correct' => false],
                            ['choice_text' => 'Il transforme l’instrument en étalon primaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le certificat fournit des informations documentées sur l’étalonnage et les performances de l’instrument, ce qui soutient la traçabilité.',
                    ],

                    [
                        'question' => 'Un instrument respecte sa résolution nominale mais sa calibration montre une erreur de gain de 1,5 %. Quelle action est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => Corriger ou caractériser le gain selon la procédure de calibration', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniquement le nombre de décimales affichées', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’erreur puisque la résolution est élevée', 'is_correct' => false],
                            ['choice_text' => 'Modifier l’unité de mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Une erreur de gain affecte la relation entre la valeur réelle et la sortie de l’instrument. Elle doit être caractérisée ou corrigée selon la procédure applicable.',
                    ],

                    [
                        'question' => 'Pourquoi une calibration périodique est-elle nécessaire même pour un instrument initialement très performant ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les performances peuvent dériver avec le temps et les conditions d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les instruments deviennent nécessairement faux après une journée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la résolution diminue toujours de moitié chaque année', 'is_correct' => false],
                            ['choice_text' => 'Parce que les unités SI changent régulièrement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les composants, références internes et conditions d’utilisation peuvent provoquer une dérive des caractéristiques métrologiques.',
                    ],

                    [
                        'question' => 'Une entreprise doit démontrer qu’une mesure de pression effectuée il y a six mois était traçable. Quelle information est particulièrement pertinente ?',
                        'choices' => [
                            ['choice_text' => L’historique d’étalonnage et les enregistrements de mesure associés', 'is_correct' => true],
                            ['choice_text' => 'La couleur du manomètre', 'is_correct' => false],
                            ['choice_text' => 'Le poids du boîtier', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur finale de pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité repose sur des preuves documentées reliant la mesure, l’instrument et les références utilisées.',
                    ],

                    [
                        'question' => 'Pourquoi un laboratoire doit-il définir des critères d’acceptation pour un instrument après étalonnage ?',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer objectivement si ses performances restent compatibles avec son usage', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que tous les instruments donnent exactement la même valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute maintenance', 'is_correct' => false],
                        ],
                        'explanation' => 'Les critères d’acceptation permettent de décider objectivement si l’instrument peut continuer à être utilisé pour l’application prévue.',
                    ],

                    [
                        'question' => 'Un instrument est conforme à une spécification de résolution mais hors tolérance sur l’exactitude. Peut-il être utilisé sans restriction pour une mesure de haute précision ?',
                        'choices' => [
                            ['choice_text' => 'Non, la résolution seule ne garantit pas l’exactitude requise', 'is_correct' => true],
                            ['choice_text' => 'Oui, une résolution fine garantit toujours une exactitude fine', 'is_correct' => false],
                            ['choice_text' => 'Oui, si l’unité est le SI', 'is_correct' => false],
                            ['choice_text' => 'Oui, si la mesure est répétée dix fois', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résolution élevée peut coexister avec un biais important. Les performances doivent être évaluées par rapport aux exigences réelles de l’application.',
                    ],

                    [
                        'question' => 'Dans un système de mesure critique, pourquoi faut-il enregistrer l’identification exacte de l’instrument utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité du résultat jusqu’à l’instrument et son état métrologique', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer sa couleur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données brutes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre inutile toute calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identification de l’instrument permet de relier la mesure à son historique de calibration, de maintenance et de performance.',
                    ],

                    [
                        'question' => 'Pourquoi la date de validité d’une calibration ne doit-elle pas être considérée indépendamment des conditions d’utilisation ?',
                        'choices' => [
                            ['choice_text' => 'Un instrument peut dériver en fonction de son usage, de l’environnement ou d’un événement de choc', 'is_correct' => true],
                            ['choice_text' => 'La calibration est toujours parfaite jusqu’à une date donnée quelles que soient les conditions', 'is_correct' => false],
                            ['choice_text' => 'La température ne peut jamais affecter un instrument', 'is_correct' => false],
                            ['choice_text' => 'Une chute ne peut jamais modifier un instrument', 'is_correct' => false],
                        ],
                        'explanation' => 'La périodicité de calibration doit être complétée par une gestion des événements susceptibles d’altérer les performances.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Incertitude et analyse de sensibilité
            // ============================================================

            [
                'title' => 'Analyse professionnelle des incertitudes',
                'description' => 'Évaluation des sources d’incertitude, contributions dominantes et stratégies d’amélioration.',
                'questions' => [

                    [
                        'question' => 'Dans une mesure calculée à partir de plusieurs grandeurs, pourquoi une analyse de sensibilité est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle identifie les variables qui contribuent le plus à l’incertitude finale', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toutes les incertitudes égales', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité de mesurer les grandeurs d’entrée', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une valeur exacte du résultat', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse de sensibilité permet d’identifier les facteurs dominants et donc de concentrer les efforts d’amélioration sur les contributions les plus importantes.',
                    ],

                    [
                        'question' => 'Deux contributions indépendantes à une incertitude valent 1 et 10 unités. Quelle conclusion pratique est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'La seconde contribution domine largement l’incertitude composée', 'is_correct' => true],
                            ['choice_text' => 'Les deux contributions doivent recevoir exactement la même priorité', 'is_correct' => false],
                            ['choice_text' => 'La première contribution domine car elle est plus petite', 'is_correct' => false],
                            ['choice_text' => 'Aucune conclusion n’est possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une combinaison quadratique, une contribution dix fois plus grande domine très fortement le résultat.',
                    ],

                    [
                        'question' => 'Une mesure de longueur possède une incertitude de 0,2 mm sur une valeur de 1 m. Quelle est approximativement l’incertitude relative ?',
                        'choices' => [
                            ['choice_text' => '0,02 %', 'is_correct' => true],
                            ['choice_text' => '0,2 %', 'is_correct' => false],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                        'explanation' => '0,2 mm = 0,0002 m. Le rapport 0,0002/1 vaut 0,0002, soit 0,02 %.',
                    ],

                    [
                        'question' => 'Lorsqu’un résultat est proche d’une limite de spécification, pourquoi l’incertitude de mesure devient-elle particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => Elle peut déterminer si la conformité à la limite est réellement démontrée', 'is_correct' => true],
                            ['choice_text' => 'Elle devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a plus aucune influence sur la décision', 'is_correct' => false],
                            ['choice_text' => 'Elle change la valeur de référence', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’une mesure est proche d’une limite, l’incertitude peut rendre ambiguë la décision de conformité et doit être explicitement prise en compte.',
                    ],

                    [
                        'question' => 'Pourquoi une augmentation du nombre de répétitions ne corrige-t-elle pas nécessairement une dérive lente de l’instrument ?',
                        'choices' => [
                            ['choice_text' => 'Une dérive est une variation structurée qui ne se comporte pas comme un bruit aléatoire indépendant', 'is_correct' => true],
                            ['choice_text' => 'Une dérive est toujours supprimée par la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Les répétitions augmentent automatiquement la dérive', 'is_correct' => false],
                            ['choice_text' => 'Une dérive est une unité de mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition peut réduire les fluctuations aléatoires, mais elle ne supprime pas une dérive systématique ou temporelle.',
                    ],

                    [
                        'question' => 'Pourquoi deux laboratoires peuvent-ils rapporter des valeurs différentes tout en restant compatibles ?',
                        'choices' => [
                            ['choice_text' => Leurs intervalles d’incertitude peuvent se recouvrir ou leurs résultats être statistiquement compatibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que les unités n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul laboratoire peut toujours avoir raison', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute différence est nécessairement une erreur', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux résultats peuvent différer numériquement tout en étant compatibles compte tenu de leurs incertitudes respectives.',
                    ],

                    [
                        'question' => 'Une grandeur z = x/y dépend de deux mesures indépendantes. Si l’incertitude relative sur x double tandis que celle de y reste inchangée, la contribution de x dans l’incertitude relative de z...',
                        'choices' => [
                            ['choice_text' => 'Augmente et peut devenir dominante', 'is_correct' => true],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Change uniquement l’unité de z', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un quotient, les contributions relatives apparaissent dans la propagation. Doubler l’incertitude relative de x augmente sa contribution.',
                    ],

                    [
                        'question' => 'Lorsqu’une incertitude est donnée avec deux chiffres significatifs alors que la valeur mesurée possède six décimales, quelle pratique est généralement recommandée ?',
                        'choices' => [
                            ['choice_text' => Arrondir le résultat pour rester cohérent avec l’incertitude', 'is_correct' => true],
                            ['choice_text' => 'Conserver toujours les six décimales', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Changer l’unité pour éviter l’arrondi', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur finale doit être présentée avec une précision cohérente avec l’incertitude estimée.',
                    ],

                    [
                        'question' => 'Dans une analyse d’incertitude professionnelle, pourquoi les corrélations entre variables doivent-elles être examinées ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent modifier la combinaison des contributions et donc l’incertitude finale', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toujours les incertitudes nulles', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucun effet mathématique', 'is_correct' => false],
                            ['choice_text' => 'Elles changent uniquement les unités SI', 'is_correct' => false],
                        ],
                        'explanation' => 'Des variables corrélées ne doivent pas toujours être traitées comme indépendantes ; les termes de covariance peuvent modifier significativement l’incertitude composée.',
                    ],

                    [
                        'question' => 'Quelle stratégie est généralement la plus efficace lorsqu’une contribution d’incertitude domine très largement toutes les autres ?',
                        'choices' => [
                            ['choice_text' => Améliorer en priorité la mesure responsable de cette contribution dominante', 'is_correct' => true],
                            ['choice_text' => 'Améliorer uniquement les contributions déjà négligeables', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la précision d’affichage', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’analyse de contribution', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire la contribution dominante permet généralement le meilleur gain global pour un effort donné.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Instruments et erreurs
            // ============================================================

            [
                'title' => 'Caractérisation et erreurs instrumentales',
                'description' => 'Analyse des erreurs de gain, offset, non-linéarité, hystérésis, dérive et comportement réel des instruments.',
                'questions' => [

                    [
                        'question' => 'Une courbe d’étalonnage présente une ordonnée à l’origine non nulle alors que la grandeur devrait être nulle. Quelle erreur peut-elle indiquer ?',
                        'choices' => [
                            ['choice_text' => 'Une erreur d’offset', 'is_correct' => true],
                            ['choice_text' => 'Une erreur de gain uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de fréquence uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ordonnée à l’origine incorrecte indique typiquement un décalage ou offset dans la réponse de l’instrument.',
                    ],

                    [
                        'question' => 'Une calibration indique que la sortie d’un capteur est proportionnelle à 1,02 fois la valeur idéale. Quelle caractéristique est principalement concernée ?',
                        'choices' => [
                            ['choice_text' => 'Le gain ou la sensibilité', 'is_correct' => true],
                            ['choice_text' => 'L’offset uniquement', 'is_correct' => false],
                            ['choice_text' => 'La résolution temporelle', 'is_correct' => false],
                            ['choice_text' => 'La plage thermique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente différente de la pente nominale correspond à une erreur de gain ou de sensibilité.',
                    ],

                    [
                        'question' => 'Un capteur donne des valeurs différentes selon que la grandeur augmente ou diminue, même pour la même valeur d’entrée. Quel phénomène peut expliquer cela ?',
                        'choices' => [
                            ['choice_text' => L’hystérésis', 'is_correct' => true],
                            ['choice_text' => 'La quantification idéale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La gravité', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la charge', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hystérésis correspond à une dépendance de la sortie à l’histoire ou au sens de variation de l’entrée.',
                    ],

                    [
                        'question' => 'Pourquoi caractériser un instrument sur toute sa plage de mesure plutôt qu’au seul point central ?',
                        'choices' => [
                            ['choice_text' => 'Pour détecter des variations de gain, de linéarité ou d’autres erreurs selon la valeur mesurée', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un point central ne possède aucune unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réponse d’un instrument est toujours identique sur toute la plage', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement le bruit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une caractérisation multi-points permet d’identifier des écarts qui n’apparaîtraient pas à une seule valeur de calibration.',
                    ],

                    [
                        'question' => 'Pourquoi la linéarité d’un capteur est-elle importante dans une application de mesure quantitative ?',
                        'choices' => [
                            ['choice_text' => 'Une non-linéarité peut produire une erreur dépendant de la valeur d’entrée', 'is_correct' => true],
                            ['choice_text' => 'La linéarité détermine uniquement la masse du capteur', 'is_correct' => false],
                            ['choice_text' => 'Une non-linéarité rend toujours le capteur inutilisable', 'is_correct' => false],
                            ['choice_text' => 'La linéarité supprime les effets thermiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réponse non linéaire peut introduire des erreurs variables selon le point de mesure et doit être caractérisée ou compensée.',
                    ],

                    [
                        'question' => 'Pourquoi une mesure de précision peut-elle nécessiter une compensation thermique ?',
                        'choices' => [
                            ['choice_text' => Les caractéristiques du capteur et de l’électronique peuvent dépendre de la température', 'is_correct' => true],
                            ['choice_text' => 'La température n’a jamais d’influence sur les instruments', 'is_correct' => false],
                            ['choice_text' => 'La compensation change toujours l’unité SI', 'is_correct' => false],
                            ['choice_text' => 'La masse du capteur devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux capteurs et composants électroniques présentent des coefficients thermiques qui peuvent affecter le résultat.',
                    ],

                    [
                        'question' => 'Un instrument présente un temps de réponse trop long par rapport aux variations du signal. Quelle erreur de mesure peut apparaître ?',
                        'choices' => [
                            ['choice_text' => Une sous-estimation ou une déformation des variations rapides', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la fréquence réelle', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Une variation de masse du signal', 'is_correct' => false],
                        ],
                        'explanation' => 'Un instrument trop lent agit comme un filtre et ne peut pas suivre fidèlement les variations rapides.',
                    ],

                    [
                        'question' => 'Pourquoi l’étendue de mesure doit-elle être distinguée de la précision ?',
                        'choices' => [
                            ['choice_text' => 'Une large plage ne garantit pas une faible incertitude sur chaque valeur', 'is_correct' => true],
                            ['choice_text' => 'La plage et la précision sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Une petite plage garantit toujours une grande exactitude', 'is_correct' => false],
                            ['choice_text' => 'La précision est une unité de longueur', 'is_correct' => false],
                        ],
                        'explanation' => 'La plage indique les valeurs accessibles ; la précision et l’exactitude décrivent la qualité de la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi une calibration à deux points est-elle insuffisante pour identifier une forte non-linéarité entre ces deux points ?',
                        'choices' => [
                            ['choice_text' => 'Deux points peuvent définir une pente et un offset sans révéler la forme de la courbe intermédiaire', 'is_correct' => true],
                            ['choice_text' => 'Deux points permettent toujours de caractériser toute fonction', 'is_correct' => false],
                            ['choice_text' => 'La non-linéarité ne dépend jamais de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Une courbe non linéaire n’a jamais besoin de calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux points suffisent pour une relation affine idéale, mais plusieurs points sont nécessaires pour révéler une non-linéarité significative.',
                    ],

                    [
                        'question' => 'Pourquoi une dérive lente peut-elle être détectée par une mesure régulière d’une référence stable ?',
                        'choices' => [
                            ['choice_text' => 'Une variation de la réponse à la référence peut révéler une évolution des caractéristiques de l’instrument', 'is_correct' => true],
                            ['choice_text' => 'La référence change toujours elle-même', 'is_correct' => false],
                            ['choice_text' => 'Une référence stable empêche toute dérive', 'is_correct' => false],
                            ['choice_text' => 'La dérive ne peut jamais être mesurée indirectement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une référence stable fournit un point de comparaison permettant de suivre les variations de la réponse instrumentale dans le temps.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Acquisition numérique
            // ============================================================

            [
                'title' => 'Acquisition numérique et intégrité des données',
                'description' => 'Conception de systèmes d’acquisition, échantillonnage, quantification et maîtrise des signaux numériques.',
                'questions' => [

                    [
                        'question' => 'Selon le principe de Nyquist-Shannon, quelle condition doit généralement respecter la fréquence d’échantillonnage pour reconstruire correctement une composante sinusoïdale de fréquence fmax ?',
                        'choices' => [
                            ['choice_text' => 'fs > 2fmax', 'is_correct' => true],
                            ['choice_text' => 'fs = fmax/2', 'is_correct' => false],
                            ['choice_text' => 'fs < fmax', 'is_correct' => false],
                            ['choice_text' => 'fs = 2/fmax', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour éviter l’aliasing d’une composante jusqu’à fmax dans les conditions idéales, la fréquence d’échantillonnage doit dépasser deux fois la fréquence maximale.',
                    ],

                    [
                        'question' => 'Pourquoi un filtre anti-repliement est-il placé avant un convertisseur analogique-numérique ?',
                        'choices' => [
                            ['choice_text' => 'Pour atténuer les composantes au-dessus de la bande qui peuvent provoquer de l’aliasing', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les composantes hors bande', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute quantification', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la masse du convertisseur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filtrage analogique avant échantillonnage limite les composantes fréquentielles qui pourraient être repliées dans la bande utile.',
                    ],

                    [
                        'question' => 'Un convertisseur ADC de 12 bits possède idéalement combien de niveaux de quantification ?',
                        'choices' => [
                            ['choice_text' => '4096', 'is_correct' => true],
                            ['choice_text' => '1024', 'is_correct' => false],
                            ['choice_text' => '2048', 'is_correct' => false],
                            ['choice_text' => '8192', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ADC de N bits possède idéalement 2^N niveaux, donc 2^12 = 4096.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter la résolution en bits d’un ADC ne suffit-il pas nécessairement à améliorer la mesure réelle ?',
                        'choices' => [
                            ['choice_text' => Le bruit, la référence, la non-linéarité et l’architecture peuvent limiter la résolution effective', 'is_correct' => true],
                            ['choice_text' => 'Plus de bits supprime toujours tous les bruits', 'is_correct' => false],
                            ['choice_text' => 'Les bits n’ont aucun lien avec la quantification', 'is_correct' => false],
                            ['choice_text' => 'Une résolution élevée réduit toujours la bande passante à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution nominale ne représente pas à elle seule la performance effective d’un convertisseur. Le bruit et les erreurs non idéales peuvent réduire le nombre effectif de bits.',
                    ],

                    [
                        'question' => 'Une chaîne d’acquisition mesure un signal de 40 kHz. Quelle fréquence d’échantillonnage minimale théorique doit dépasser le système pour respecter Nyquist-Shannon ?',
                        'choices' => [
                            ['choice_text' => '80 kHz', 'is_correct' => true],
                            ['choice_text' => '20 kHz', 'is_correct' => false],
                            ['choice_text' => '40 kHz', 'is_correct' => false],
                            ['choice_text' => '4 kHz', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence d’échantillonnage doit être supérieure à 2 × 40 kHz = 80 kHz dans le cadre théorique.',
                    ],

                    [
                        'question' => 'Pourquoi, en pratique, choisit-on souvent une fréquence d’échantillonnage nettement supérieure à deux fois la fréquence maximale utile ?',
                        'choices' => [
                            ['choice_text' => Pour laisser une bande de transition réaliste au filtre anti-repliement', 'is_correct' => true],
                            ['choice_text' => 'Parce que Nyquist exige toujours dix fois la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l’ADC analogique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les sources de bruit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une marge fréquentielle facilite la conception du filtre anti-repliement et améliore la robustesse de l’acquisition.',
                    ],

                    [
                        'question' => 'Dans une acquisition de signaux très lents, pourquoi une fréquence d’échantillonnage excessivement élevée peut-elle être inutile ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente le volume de données et le coût de traitement sans apporter nécessairement d’information utile', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit toujours la résolution verticale', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche tout filtrage', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sur-échantillonnage inutile peut augmenter les besoins de stockage, de transmission et de traitement sans gain pertinent pour le phénomène étudié.',
                    ],

                    [
                        'question' => 'Pourquoi l’horloge d’échantillonnage est-elle importante dans une mesure temporelle de précision ?',
                        'choices' => [
                            ['choice_text' => Ses erreurs et son jitter peuvent directement affecter la position temporelle des échantillons', 'is_correct' => true],
                            ['choice_text' => 'L’horloge ne possède aucune relation avec les instants de mesure', 'is_correct' => false],
                            ['choice_text' => 'Elle contrôle uniquement la couleur du signal', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement le bruit du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les instants d’échantillonnage dépendent de l’horloge. Sa stabilité influence donc directement la précision temporelle.',
                    ],

                    [
                        'question' => 'Dans un système de mesure à distance, pourquoi l’intégrité temporelle des données peut-elle être aussi importante que leur valeur numérique ?',
                        'choices' => [
                            ['choice_text' => Le temps d’acquisition permet de reconstruire correctement la dynamique et les relations entre événements', 'is_correct' => true],
                            ['choice_text' => 'Les timestamps n’ont jamais de valeur physique', 'is_correct' => false],
                            ['choice_text' => 'La valeur numérique contient toujours toute l’information temporelle', 'is_correct' => false],
                            ['choice_text' => 'La synchronisation ne concerne que les horloges atomiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les phénomènes dynamiques, l’association correcte entre valeurs et instants de mesure est essentielle à l’interprétation physique.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il conserver les métadonnées d’acquisition avec les données scientifiques brutes ?',
                        'choices' => [
                            ['choice_text' => 'Pour connaître les unités, conditions, réglages, timestamps et caractéristiques nécessaires à leur interprétation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la résolution', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données originales', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les mesures indépendantes du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans métadonnées, les données brutes peuvent devenir difficiles voire impossibles à interpréter ou reproduire correctement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Mesures dimensionnelles et industrielles
            // ============================================================

            [
                'title' => 'Métrologie dimensionnelle industrielle',
                'description' => 'Mesure de dimensions, tolérances, dilatation thermique et validation de pièces industrielles.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la température d’une pièce doit-elle parfois être contrôlée avant une mesure dimensionnelle de haute précision ?',
                        'choices' => [
                            ['choice_text' => La dilatation thermique peut modifier ses dimensions', 'is_correct' => true],
                            ['choice_text' => 'La température change toujours sa masse', 'is_correct' => false],
                            ['choice_text' => 'La température supprime les tolérances géométriques', 'is_correct' => false],
                            ['choice_text' => 'La longueur est indépendante de la température dans tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dimensions dépendent de la température via le coefficient de dilatation thermique du matériau.',
                    ],

                    [
                        'question' => 'Une pièce possède une longueur nominale de 100 mm et un coefficient de dilatation linéaire de 12 × 10^-6 K^-1. Une augmentation de 50 K produit approximativement une variation de longueur de...',
                        'choices' => [
                            ['choice_text' => '0,06 mm', 'is_correct' => true],
                            ['choice_text' => '0,6 mm', 'is_correct' => false],
                            ['choice_text' => '0,006 mm', 'is_correct' => false],
                            ['choice_text' => '6 mm', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔL = αLΔT = 12 × 10^-6 × 100 × 50 mm = 0,06 mm.',
                    ],

                    [
                        'question' => 'Pourquoi une machine à mesurer tridimensionnelle doit-elle être utilisée dans des conditions thermiques contrôlées ?',
                        'choices' => [
                            ['choice_text' => Les dimensions de la pièce et de la machine peuvent varier avec la température', 'is_correct' => true],
                            ['choice_text' => 'La température n’affecte que les couleurs', 'is_correct' => false],
                            ['choice_text' => 'Les coordonnées géométriques sont toujours indépendantes de la température', 'is_correct' => false],
                            ['choice_text' => 'La température modifie uniquement la masse volumique de l’air et jamais la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute précision, la dilatation de la pièce et de la structure de mesure peut devenir comparable aux tolérances recherchées.',
                    ],

                    [
                        'question' => 'Une tolérance dimensionnelle est de ±5 μm. Un instrument possède une incertitude de ±20 μm. Quel problème évident apparaît ?',
                        'choices' => [
                            ['choice_text' => La performance de l’instrument est insuffisante pour démontrer correctement cette tolérance', 'is_correct' => true],
                            ['choice_text' => 'L’instrument est nécessairement trop précis', 'is_correct' => false],
                            ['choice_text' => 'La tolérance est indépendante de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La mesure est parfaite parce que 20 > 5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incertitude de mesure est plusieurs fois supérieure à la tolérance, ce qui empêche une démonstration fiable de conformité.',
                    ],

                    [
                        'question' => 'Pourquoi la géométrie de contact d’un instrument peut-elle influencer une mesure dimensionnelle ?',
                        'choices' => [
                            ['choice_text' => La force de contact, l’alignement et la géométrie peuvent provoquer une déformation ou un biais', 'is_correct' => true],
                            ['choice_text' => 'La géométrie n’a jamais d’influence', 'is_correct' => false],
                            ['choice_text' => 'Le contact change uniquement la couleur de la pièce', 'is_correct' => false],
                            ['choice_text' => 'La force de contact rend toutes les pièces parfaitement rigides', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les mesures de précision, un mauvais alignement ou une force excessive peut déformer la pièce ou l’instrument et affecter le résultat.',
                    ],

                    [
                        'question' => 'Pourquoi mesurer une pièce plusieurs fois dans différentes orientations peut-il être utile ?',
                        'choices' => [
                            ['choice_text' => Pour détecter certains effets de géométrie, d’alignement ou de biais dépendant de l’orientation', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier les dimensions réelles de la pièce', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute incertitude aléatoire et systématique', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’orientation détermine toujours la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Des variations selon l’orientation peuvent révéler des erreurs d’alignement, de géométrie de machine ou des effets mécaniques.',
                    ],

                    [
                        'question' => 'Pourquoi un étalon dimensionnel doit-il être manipulé avec précaution avant une mesure de haute précision ?',
                        'choices' => [
                            ['choice_text' => La température, la contamination et la déformation peuvent affecter sa dimension effective', 'is_correct' => true],
                            ['choice_text' => 'Les étalons ne peuvent jamais être déformés', 'is_correct' => false],
                            ['choice_text' => 'La contamination améliore toujours la précision', 'is_correct' => false],
                            ['choice_text' => 'La température ne modifie jamais les dimensions', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étalons dimensionnels nécessitent des conditions et manipulations maîtrisées afin de préserver leur valeur métrologique.',
                    ],

                    [
                        'question' => 'Une entreprise veut mesurer un diamètre avec une tolérance très serrée. Pourquoi la circularité et l’alignement doivent-ils être considérés séparément du simple diamètre mesuré ?',
                        'choices' => [
                            ['choice_text' => Une pièce peut avoir le bon diamètre moyen tout en présentant des défauts de forme ou de position', 'is_correct' => true],
                            ['choice_text' => 'Le diamètre détermine toujours complètement la géométrie', 'is_correct' => false],
                            ['choice_text' => 'La circularité est une unité de longueur', 'is_correct' => false],
                            ['choice_text' => 'L’alignement n’a aucun effet sur une mesure réelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une caractéristique dimensionnelle peut être conforme tout en étant affectée par des défauts de forme, d’orientation ou de position.',
                    ],

                    [
                        'question' => 'Pourquoi la résolution d’un pied à coulisse ne suffit-elle pas à garantir la conformité d’une pièce à quelques micromètres ?',
                        'choices' => [
                            ['choice_text' => La résolution ne couvre pas à elle seule l’exactitude, l’étalonnage, la répétabilité et les autres sources d’incertitude', 'is_correct' => true],
                            ['choice_text' => 'Parce que les micromètres sont interdits en industrie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une résolution fine est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les pièces ont nécessairement une grande erreur dimensionnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution d’affichage est seulement une composante des performances métrologiques globales.',
                    ],

                    [
                        'question' => 'Dans une production industrielle, pourquoi une étude R&R peut-elle être pertinente pour une chaîne de mesure ?',
                        'choices' => [
                            ['choice_text' => Pour évaluer la variabilité liée au système de mesure et aux opérateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer uniquement la masse de la pièce', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tolérances produit', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la fabrication indépendante de la mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étude de répétabilité et reproductibilité permet d’évaluer la part de variation attribuable au système de mesure et aux conditions d’utilisation.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Température et pression
            // ============================================================

            [
                'title' => 'Métrologie de la température et de la pression',
                'description' => 'Conception et validation de mesures thermiques et manométriques dans des environnements professionnels.',
                'questions' => [

                    [
                        'question' => 'Pourquoi un capteur de pression doit-il être sélectionné avec une plage adaptée à l’application ?',
                        'choices' => [
                            ['choice_text' => Pour éviter la saturation tout en conservant une résolution et une exactitude adaptées', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que la pression reste constante', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer toute calibration', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la pression indépendante du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plage trop faible peut provoquer une saturation, tandis qu’une plage excessivement large peut dégrader la résolution utile.',
                    ],

                    [
                        'question' => 'Pourquoi une mesure de pression absolue et une mesure de pression relative ne donnent-elles pas nécessairement la même valeur ?',
                        'choices' => [
                            ['choice_text' => La pression relative est référencée à une pression de référence, souvent atmosphérique', 'is_correct' => true],
                            ['choice_text' => 'La pression absolue est toujours nulle dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Les deux mesures utilisent des unités différentes', 'is_correct' => false],
                            ['choice_text' => 'La pression relative ignore toujours la température', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression absolue est référencée au vide absolu, tandis qu’une pression relative est exprimée par rapport à une référence telle que la pression atmosphérique.',
                    ],

                    [
                        'question' => 'Dans une mesure de température à l’aide d’un thermocouple, pourquoi la température de référence de la jonction doit-elle être connue ou compensée ?',
                        'choices' => [
                            ['choice_text' => La tension thermoélectrique dépend de la différence de température entre les jonctions', 'is_correct' => true],
                            ['choice_text' => 'La tension dépend uniquement de la masse du fil', 'is_correct' => false],
                            ['choice_text' => 'La jonction de référence n’a aucun rôle physique', 'is_correct' => false],
                            ['choice_text' => 'La température absolue n’intervient jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'La FEM d’un thermocouple dépend de la différence de température entre les jonctions. La compensation de jonction froide est donc nécessaire pour une mesure absolue.',
                    ],

                    [
                        'question' => 'Pourquoi une mauvaise isolation thermique peut-elle introduire une erreur dans une mesure de température ?',
                        'choices' => [
                            ['choice_text' => Le capteur peut être influencé par des flux thermiques parasites ou par son environnement', 'is_correct' => true],
                            ['choice_text' => 'Une isolation parfaite augmente toujours les erreurs', 'is_correct' => false],
                            ['choice_text' => 'La température est indépendante de tout échange thermique', 'is_correct' => false],
                            ['choice_text' => 'L’isolation modifie nécessairement la masse du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le capteur peut atteindre une température différente de celle du milieu étudié si des échanges thermiques non désirés sont importants.',
                    ],

                    [
                        'question' => 'Pourquoi un capteur de température monté sur une paroi métallique peut-il mesurer une température différente de celle du fluide ?',
                        'choices' => [
                            ['choice_text' => Il peut être influencé par la conduction dans la paroi et les échanges thermiques avec l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Les fluides ne possèdent pas de température', 'is_correct' => false],
                            ['choice_text' => 'La conduction métallique est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Le capteur mesure uniquement la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le montage du capteur crée une chaîne thermique réelle. La température mesurée dépend de la conduction, convection et rayonnement environnants.',
                    ],

                    [
                        'question' => 'Dans une mesure de pression très précise, pourquoi les pulsations rapides peuvent-elles être problématiques ?',
                        'choices' => [
                            ['choice_text' => Elles peuvent exciter la dynamique du capteur ou de la ligne et produire une réponse différente de la pression statique', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toujours la pression nulle', 'is_correct' => false],
                            ['choice_text' => 'Elles augmentent systématiquement l’exactitude', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucun effet sur les systèmes instrumentés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lignes de prise de pression et les capteurs possèdent leur propre dynamique, pouvant filtrer, retarder ou amplifier certaines composantes.',
                    ],

                    [
                        'question' => 'Pourquoi un capteur de pression installé à une hauteur différente de la zone de procédé peut-il nécessiter une correction ?',
                        'choices' => [
                            ['choice_text' => La colonne de fluide entre les deux points produit une différence de pression hydrostatique', 'is_correct' => true],
                            ['choice_text' => 'La hauteur n’a jamais d’effet sur la pression', 'is_correct' => false],
                            ['choice_text' => 'La masse du capteur change avec l’altitude', 'is_correct' => false],
                            ['choice_text' => 'Le capteur devient automatiquement absolu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence d’altitude entre les points de mesure produit une différence de pression proportionnelle à ρgΔh.',
                    ],

                    [
                        'question' => 'Pourquoi les gradients thermiques dans une installation peuvent-ils générer des erreurs de mesure ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent provoquer des températures différentes entre le point mesuré, le capteur et ses connexions', 'is_correct' => true],
                            ['choice_text' => 'Un gradient thermique ne peut exister dans un matériau réel', 'is_correct' => false],
                            ['choice_text' => 'Les gradients changent uniquement la couleur', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent toutes les températures identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gradients thermiques créent des échanges et des différences locales qui peuvent perturber la mesure, notamment avec certains capteurs électriques.',
                    ],

                    [
                        'question' => 'Pourquoi un capteur utilisé près de sa limite de pression nominale doit-il faire l’objet d’une attention particulière ?',
                        'choices' => [
                            ['choice_text' => La surcharge peut affecter la linéarité, la dérive ou l’intégrité du capteur', 'is_correct' => true],
                            ['choice_text' => 'La pression devient indépendante du capteur', 'is_correct' => false],
                            ['choice_text' => 'La précision est automatiquement maximale à la limite', 'is_correct' => false],
                            ['choice_text' => 'Une surcharge améliore nécessairement la durée de vie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépassements ou fonctionnements proches des limites peuvent dégrader les performances ou endommager l’élément sensible.',
                    ],

                    [
                        'question' => 'Pourquoi une procédure de validation thermique doit-elle parfois inclure des cycles de montée et de descente en température ?',
                        'choices' => [
                            ['choice_text' => Pour détecter l’hystérésis, la dérive et les différences de comportement selon le sens de variation', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre le capteur plus sensible sans calibration', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température n’a pas de sens physique unique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la dilatation thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cycles thermiques permettent de caractériser certains effets qui ne seraient pas visibles avec une variation dans un seul sens.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Qualité des données scientifiques
            // ============================================================

            [
                'title' => 'Qualité, validation et intégrité des données',
                'description' => 'Pratiques professionnelles pour garantir la qualité, la cohérence et la reproductibilité des mesures physiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi les données brutes doivent-elles être conservées dans une expérience scientifique professionnelle ?',
                        'choices' => [
                            ['choice_text' => Pour permettre la vérification, la reproduction des traitements et l’audit du résultat', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute analyse statistique', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les métadonnées', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les données sont exactes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les données brutes constituent la base permettant de reproduire les calculs et de rechercher d’éventuelles erreurs de traitement.',
                    ],

                    [
                        'question' => 'Pourquoi chaque série de mesure devrait-elle idéalement être associée à des métadonnées pertinentes ?',
                        'choices' => [
                            ['choice_text' => Pour connaître les conditions, l’instrument, les unités, les réglages et le contexte de l’acquisition', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les données numériques', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les unités inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métadonnées permettent de replacer les valeurs dans leur contexte et sont essentielles à la reproductibilité.',
                    ],

                    [
                        'question' => 'Un système de mesure fonctionne correctement pendant la majorité du temps mais produit périodiquement des valeurs aberrantes. Quelle stratégie est préférable ?',
                        'choices' => [
                            ['choice_text' => Identifier la cause des anomalies avant de décider d’un éventuel filtrage ou rejet', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement toutes les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Modifier les unités jusqu’à disparition des anomalies', 'is_correct' => false],
                            ['choice_text' => 'Ignorer systématiquement les données aberrantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur aberrante peut être un défaut de mesure, un événement physique réel ou une anomalie d’acquisition. Son origine doit être étudiée avant toute suppression.',
                    ],

                    [
                        'question' => 'Pourquoi un filtre statistique peut-il être dangereux s’il est appliqué sans connaître la dynamique physique du système ?',
                        'choices' => [
                            ['choice_text' => Il peut supprimer un événement réel en le confondant avec du bruit', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours les événements physiques', 'is_correct' => false],
                            ['choice_text' => 'Il rend nécessairement les données exactes', 'is_correct' => false],
                            ['choice_text' => 'Il élimine uniquement les erreurs systématiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtrage mal conçu peut éliminer des phénomènes physiques légitimes, notamment les transitoires ou événements rares.',
                    ],

                    [
                        'question' => 'Pourquoi une horloge de référence commune est-elle utile lorsque plusieurs systèmes de mesure doivent être comparés ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’associer les événements des différents systèmes à une base temporelle cohérente', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente automatiquement la résolution analogique', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tout bruit électrique', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les capteurs indépendants du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une référence temporelle commune facilite la synchronisation et la comparaison des événements provenant de plusieurs systèmes.',
                    ],

                    [
                        'question' => 'Pourquoi une procédure expérimentale professionnelle doit-elle préciser les unités attendues pour les grandeurs enregistrées ?',
                        'choices' => [
                            ['choice_text' => Pour éviter les erreurs d’interprétation et de conversion dans les analyses ultérieures', 'is_correct' => true],
                            ['choice_text' => 'Parce que les unités ne peuvent jamais être converties', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les valeurs indépendantes de leur dimension', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les incertitudes', 'is_correct' => false],
                        ],
                        'explanation' => 'Des unités explicitement définies réduisent les risques d’erreurs lors du traitement, du partage et de la comparaison des données.',
                    ],

                    [
                        'question' => 'Pourquoi une validation indépendante d’une chaîne de mesure peut-elle être préférable à une simple vérification interne ?',
                        'choices' => [
                            ['choice_text' => Elle fournit un contrôle supplémentaire susceptible de révéler des erreurs non détectées par le système lui-même', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une valeur exacte sans incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la calibration inutile', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute erreur future', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vérification indépendante réduit le risque qu’une erreur commune au système et à sa vérification interne passe inaperçue.',
                    ],

                    [
                        'question' => 'Pourquoi une tendance lente dans les résidus d’un modèle expérimental est-elle préoccupante ?',
                        'choices' => [
                            ['choice_text' => Elle peut indiquer un biais, une dérive ou une physique non prise en compte', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve toujours que le modèle est parfait', 'is_correct' => false],
                            ['choice_text' => 'Elle indique uniquement une erreur de couleur du graphique', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie nécessairement que toutes les mesures sont aléatoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Des résidus structurés signalent souvent que l’hypothèse statistique ou le modèle physique ne décrit pas correctement les données.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse de tendance temporelle d’un instrument peut-elle être plus informative qu’un seul étalonnage isolé ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’identifier une dérive ou une dégradation progressive des performances', 'is_correct' => true],
                            ['choice_text' => 'Un seul étalonnage donne toujours plus d’informations temporelles', 'is_correct' => false],
                            ['choice_text' => 'La dérive ne peut pas être observée dans le temps', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les références métrologiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une série de vérifications au cours du temps permet de détecter l’évolution des caractéristiques métrologiques.',
                    ],

                    [
                        'question' => 'Dans un système réglementé ou critique, pourquoi les modifications apportées aux logiciels de mesure doivent-elles être documentées ?',
                        'choices' => [
                            ['choice_text' => Une modification logicielle peut changer le traitement, les conversions ou les résultats produits', 'is_correct' => true],
                            ['choice_text' => 'Les logiciels n’influencent jamais une mesure', 'is_correct' => false],
                            ['choice_text' => 'La documentation n’a qu’un intérêt esthétique', 'is_correct' => false],
                            ['choice_text' => 'Une modification logicielle supprime toujours les données précédentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le logiciel fait partie de la chaîne de mesure. Une modification peut affecter les résultats et doit donc être maîtrisée et traçable.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Architecture et optimisation d'une chaîne de mesure
            // ============================================================

            [
                'title' => 'Architecture et optimisation des chaînes de mesure',
                'description' => 'Conception globale de systèmes de mesure haute performance sous contraintes de précision, rapidité, coût et fiabilité.',
                'questions' => [

                    [
                        'question' => 'Une application exige une résolution de 1 μV sur un signal de quelques centaines de millivolts avec une bande passante élevée. Quelle priorité de conception est particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => Maîtriser simultanément le bruit, le gain, la bande passante, les masses et les interférences', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniquement le nombre de décimales affichées', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement le câble le plus long possible', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le spectre des perturbations', 'is_correct' => false],
                        ],
                        'explanation' => 'À très faible niveau de signal et haute fréquence, les limitations sont systémiques : bruit, couplages, bande passante, architecture du front-end et qualité de masse doivent être traités ensemble.',
                    ],

                    [
                        'question' => 'Pourquoi l’emplacement du premier amplificateur dans une chaîne de mesure faible signal est-il critique ?',
                        'choices' => [
                            ['choice_text' => Le bruit et les pertes introduits avant le gain peuvent dégrader fortement le rapport signal/bruit final', 'is_correct' => true],
                            ['choice_text' => 'Le premier amplificateur ne peut jamais ajouter de bruit', 'is_correct' => false],
                            ['choice_text' => 'Le gain rend toujours les pertes initiales négligeables', 'is_correct' => false],
                            ['choice_text' => 'La position de l’amplificateur ne change jamais la mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes et le bruit introduits avant un gain important ont souvent une influence dominante sur la performance globale.',
                    ],

                    [
                        'question' => 'Dans une chaîne de mesure professionnelle, pourquoi faut-il définir un budget d’erreur avant la conception finale ?',
                        'choices' => [
                            ['choice_text' => Pour répartir l’incertitude admissible entre les différents éléments et vérifier la faisabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement une erreur nulle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tolérances', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir uniquement les composants les plus chers', 'is_correct' => false],
                        ],
                        'explanation' => 'Un budget d’erreur permet de transformer une exigence globale en contributions admissibles pour les différents éléments du système.',
                    ],

                    [
                        'question' => 'Une chaîne possède dix sources d’erreur. Pourquoi n’est-il généralement pas efficace de réduire toutes les contributions de la même manière ?',
                        'choices' => [
                            ['choice_text' => Certaines contributions peuvent être dominantes tandis que d’autres sont déjà négligeables', 'is_correct' => true],
                            ['choice_text' => 'Toutes les contributions ont toujours exactement le même impact', 'is_correct' => false],
                            ['choice_text' => 'Une seule contribution existe réellement', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs sont toujours indépendantes du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Une allocation intelligente des efforts consiste à réduire en priorité les contributions les plus importantes pour atteindre la spécification.',
                    ],

                    [
                        'question' => 'Pourquoi une redondance de capteurs dans un système de sécurité ne suffit-elle pas à elle seule à garantir la fiabilité ?',
                        'choices' => [
                            ['choice_text' => Les capteurs peuvent partager des causes communes de défaillance ou des erreurs de conception', 'is_correct' => true],
                            ['choice_text' => 'La redondance garantit toujours une disponibilité de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Les capteurs redondants n’ont jamais besoin de calibration', 'is_correct' => false],
                            ['choice_text' => 'Tous les capteurs défaillent nécessairement indépendamment', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité, l’indépendance des voies et l’analyse des causes communes sont aussi importantes que le nombre de capteurs.',
                    ],

                    [
                        'question' => 'Pourquoi une architecture différentielle est-elle souvent avantageuse pour mesurer de petits signaux en environnement industriel ?',
                        'choices' => [
                            ['choice_text' => Elle peut rejeter certaines perturbations communes aux deux voies', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours le bruit de mode commun', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les biais sans calibration', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les câbles idéaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une architecture différentielle correctement conçue améliore le rejet de mode commun et donc la robustesse face aux perturbations partagées.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il considérer le coût total d’exploitation d’un système de mesure plutôt que son seul prix d’achat ?',
                        'choices' => [
                            ['choice_text' => La maintenance, calibration, énergie, interruptions et renouvellement peuvent dominer le coût sur la durée de vie', 'is_correct' => true],
                            ['choice_text' => 'Le prix d’achat représente toujours le coût total', 'is_correct' => false],
                            ['choice_text' => 'Les instruments professionnels ne nécessitent jamais de maintenance', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’exploitation est indépendant de la fréquence d’utilisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une décision professionnelle doit considérer le coût du cycle de vie et pas seulement l’investissement initial.',
                    ],

                    [
                        'question' => 'Pourquoi une chaîne de mesure utilisée dans une application critique doit-elle disposer de marges de performance ?',
                        'choices' => [
                            ['choice_text' => Pour conserver un fonctionnement acceptable malgré les dérives, variations environnementales et incertitudes', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les instruments inutilisables en fonctionnement normal', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute calibration', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une marge augmente toujours le bruit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conception avec marge évite qu’une petite dégradation ou variation normale fasse sortir le système de ses performances admissibles.',
                    ],

                    [
                        'question' => 'Lorsqu’un système de mesure doit être utilisé pendant dix ans, pourquoi faut-il considérer la dérive des composants dès la conception ?',
                        'choices' => [
                            ['choice_text' => Les performances métrologiques peuvent évoluer progressivement et dépasser les limites avant la fin de vie', 'is_correct' => true],
                            ['choice_text' => 'Les composants conservent toujours leurs caractéristiques initiales', 'is_correct' => false],
                            ['choice_text' => 'La dérive est indépendante du temps', 'is_correct' => false],
                            ['choice_text' => 'La calibration initiale élimine toute évolution future', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiabilité métrologique à long terme exige de tenir compte de la dérive, de la maintenance et des recalibrations nécessaires.',
                    ],

                    [
                        'question' => 'Quelle approche est la plus professionnelle pour sélectionner un système de mesure destiné à une application critique ?',
                        'choices' => [
                            ['choice_text' => Définir les exigences, construire un budget d’erreur, analyser les risques, valider expérimentalement puis surveiller les performances', 'is_correct' => true],
                            ['choice_text' => 'Choisir uniquement l’instrument ayant la meilleure résolution affichée', 'is_correct' => false],
                            ['choice_text' => 'Choisir systématiquement le système le moins cher', 'is_correct' => false],
                            ['choice_text' => 'Effectuer uniquement une mesure initiale sans suivi', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chaîne critique nécessite une démarche complète allant des exigences et de l’analyse de risque jusqu’à la validation et au suivi de performance.',
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
                    'difficulty' => 'Professional',
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
                // is_correct attaché à la bonne réponse.
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