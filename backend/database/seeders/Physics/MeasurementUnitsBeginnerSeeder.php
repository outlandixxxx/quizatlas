<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MeasurementUnitsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'measurement-units')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Grandeurs physiques et unités SI
            // ============================================================

            [
                'title' => 'Introduction aux grandeurs et unités physiques',
                'description' => 'Découverte des grandeurs physiques, des unités SI et des instruments de mesure courants.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI de la longueur ?',
                        'choices' => [
                            ['choice_text' => 'Le mètre', 'is_correct' => true],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'La seconde', 'is_correct' => false],
                            ['choice_text' => 'Le litre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mètre (m) est l’unité de base du Système international pour la longueur.',
                    ],

                    [
                        'question' => 'Quelle grandeur physique est mesurée en kilogrammes ?',
                        'choices' => [
                            ['choice_text' => 'La masse', 'is_correct' => true],
                            ['choice_text' => 'La longueur', 'is_correct' => false],
                            ['choice_text' => 'La durée', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                        ],
                        'explanation' => 'Le kilogramme (kg) est l’unité SI de la masse.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI du temps ?',
                        'choices' => [
                            ['choice_text' => 'La seconde', 'is_correct' => true],
                            ['choice_text' => 'La minute', 'is_correct' => false],
                            ['choice_text' => 'L’heure', 'is_correct' => false],
                            ['choice_text' => 'Le jour', 'is_correct' => false],
                        ],
                        'explanation' => 'La seconde (s) est l’unité SI fondamentale de la durée.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la température thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'Le kelvin', 'is_correct' => true],
                            ['choice_text' => 'Le degré Celsius', 'is_correct' => false],
                            ['choice_text' => 'Le degré Fahrenheit', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le kelvin (K) est l’unité SI de la température thermodynamique.',
                    ],

                    [
                        'question' => 'Quelle grandeur est mesurée en ampères ?',
                        'choices' => [
                            ['choice_text' => 'L’intensité du courant électrique', 'is_correct' => true],
                            ['choice_text' => 'La tension électrique', 'is_correct' => false],
                            ['choice_text' => 'La résistance électrique', 'is_correct' => false],
                            ['choice_text' => 'La puissance électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampère (A) est l’unité SI de l’intensité du courant électrique.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la quantité de matière ?',
                        'choices' => [
                            ['choice_text' => 'La mole', 'is_correct' => true],
                            ['choice_text' => 'Le gramme', 'is_correct' => false],
                            ['choice_text' => 'Le litre', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                        ],
                        'explanation' => 'La mole (mol) est l’unité SI de la quantité de matière.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la force ?',
                        'choices' => [
                            ['choice_text' => 'Le newton', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La force se mesure en newtons (N) dans le Système international.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule (J) est l’unité SI de l’énergie et du travail.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la puissance ?',
                        'choices' => [
                            ['choice_text' => 'Le watt', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le watt (W) est l’unité SI de la puissance.',
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on un système d’unités standardisé en physique ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre des mesures et des comparaisons cohérentes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les erreurs de mesure', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tous les calculs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les grandeurs égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Les unités standardisées permettent d’exprimer les grandeurs physiques de manière cohérente et comparable.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Instruments de mesure
            // ============================================================

            [
                'title' => 'Instruments de mesure en physique',
                'description' => 'Identification et utilisation élémentaire des principaux instruments de mesure.',
                'questions' => [

                    [
                        'question' => 'Quel instrument utilise-t-on couramment pour mesurer une longueur ?',
                        'choices' => [
                            ['choice_text' => 'Une règle graduée', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une règle graduée permet de mesurer des longueurs dans de nombreuses situations simples.',
                    ],

                    [
                        'question' => 'Quel instrument permet de mesurer une durée ?',
                        'choices' => [
                            ['choice_text' => 'Un chronomètre', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chronomètre permet de mesurer une durée ou un intervalle de temps.',
                    ],

                    [
                        'question' => 'Quel instrument mesure la masse d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'Une balance', 'is_correct' => true],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une balance est utilisée pour déterminer la masse d’un objet.',
                    ],

                    [
                        'question' => 'Quel instrument permet de mesurer une force ?',
                        'choices' => [
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dynamomètre mesure une force, généralement en newtons.',
                    ],

                    [
                        'question' => 'Quel instrument mesure la température ?',
                        'choices' => [
                            ['choice_text' => 'Un thermomètre', 'is_correct' => true],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thermomètre est conçu pour mesurer la température.',
                    ],

                    [
                        'question' => 'Quel instrument mesure la pression d’un fluide ?',
                        'choices' => [
                            ['choice_text' => 'Un manomètre', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                            ['choice_text' => 'Une règle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le manomètre permet de mesurer la pression d’un gaz ou d’un liquide.',
                    ],

                    [
                        'question' => 'Quel instrument mesure l’intensité du courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampèremètre mesure l’intensité du courant en ampères.',
                    ],

                    [
                        'question' => 'Quel instrument mesure une tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'Un voltmètre', 'is_correct' => true],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voltmètre mesure la différence de potentiel électrique entre deux points.',
                    ],

                    [
                        'question' => 'Quel instrument peut mesurer une petite longueur avec une précision supérieure à celle d’une règle simple ?',
                        'choices' => [
                            ['choice_text' => 'Un pied à coulisse', 'is_correct' => true],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pied à coulisse permet de mesurer des dimensions avec une résolution généralement meilleure qu’une règle graduée.',
                    ],

                    [
                        'question' => 'Avant d’utiliser un instrument de mesure, pourquoi faut-il vérifier son unité et son échelle ?',
                        'choices' => [
                            ['choice_text' => 'Pour interpréter correctement la valeur mesurée', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre l’instrument plus lourd', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour changer la grandeur mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité et l’échelle permettent de comprendre correctement la valeur affichée par l’instrument.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Préfixes et conversions
            // ============================================================

            [
                'title' => 'Préfixes du SI et conversions simples',
                'description' => 'Maîtrise des principaux préfixes du Système international et des conversions d’unités.',
                'questions' => [

                    [
                        'question' => 'Combien de mètres correspondent à 1 kilomètre ?',
                        'choices' => [
                            ['choice_text' => '1000 m', 'is_correct' => true],
                            ['choice_text' => '100 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '10 000 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe kilo représente un facteur 1000. Donc 1 km = 1000 m.',
                    ],

                    [
                        'question' => 'Combien de mètres correspondent à 1 centimètre ?',
                        'choices' => [
                            ['choice_text' => '0,01 m', 'is_correct' => true],
                            ['choice_text' => '0,1 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '100 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe centi représente 10^-2. Ainsi, 1 cm = 0,01 m.',
                    ],

                    [
                        'question' => 'Combien de grammes correspondent à 1 kilogramme ?',
                        'choices' => [
                            ['choice_text' => '1000 g', 'is_correct' => true],
                            ['choice_text' => '100 g', 'is_correct' => false],
                            ['choice_text' => '10 g', 'is_correct' => false],
                            ['choice_text' => '10 000 g', 'is_correct' => false],
                        ],
                        'explanation' => 'Un kilogramme correspond à 1000 grammes.',
                    ],

                    [
                        'question' => 'Le préfixe milli correspond à quel facteur ?',
                        'choices' => [
                            ['choice_text' => '10^-3', 'is_correct' => true],
                            ['choice_text' => '10^-2', 'is_correct' => false],
                            ['choice_text' => '10^3', 'is_correct' => false],
                            ['choice_text' => '10^6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe milli signifie un millième, soit 10^-3.',
                    ],

                    [
                        'question' => 'Le préfixe micro correspond à quel facteur ?',
                        'choices' => [
                            ['choice_text' => '10^-6', 'is_correct' => true],
                            ['choice_text' => '10^-3', 'is_correct' => false],
                            ['choice_text' => '10^-9', 'is_correct' => false],
                            ['choice_text' => '10^6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe micro correspond au facteur 10^-6.',
                    ],

                    [
                        'question' => 'Combien de secondes y a-t-il dans 2 minutes ?',
                        'choices' => [
                            ['choice_text' => '120 s', 'is_correct' => true],
                            ['choice_text' => '60 s', 'is_correct' => false],
                            ['choice_text' => '100 s', 'is_correct' => false],
                            ['choice_text' => '180 s', 'is_correct' => false],
                        ],
                        'explanation' => 'Une minute contient 60 secondes. Donc 2 minutes correspondent à 2 × 60 = 120 s.',
                    ],

                    [
                        'question' => 'Une longueur de 250 cm correspond à...',
                        'choices' => [
                            ['choice_text' => '2,5 m', 'is_correct' => true],
                            ['choice_text' => '25 m', 'is_correct' => false],
                            ['choice_text' => '0,25 m', 'is_correct' => false],
                            ['choice_text' => '2500 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 100 cm = 1 m, 250 cm = 2,5 m.',
                    ],

                    [
                        'question' => 'Une durée de 0,5 heure correspond à...',
                        'choices' => [
                            ['choice_text' => '30 minutes', 'is_correct' => true],
                            ['choice_text' => '5 minutes', 'is_correct' => false],
                            ['choice_text' => '15 minutes', 'is_correct' => false],
                            ['choice_text' => '50 minutes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une demi-heure correspond à 30 minutes.',
                    ],

                    [
                        'question' => 'Quelle valeur est équivalente à 3 kW ?',
                        'choices' => [
                            ['choice_text' => '3000 W', 'is_correct' => true],
                            ['choice_text' => '300 W', 'is_correct' => false],
                            ['choice_text' => '30 W', 'is_correct' => false],
                            ['choice_text' => '30 000 W', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe kilo multiplie par 1000. Donc 3 kW = 3000 W.',
                    ],

                    [
                        'question' => 'Quelle valeur est équivalente à 5 mA ?',
                        'choices' => [
                            ['choice_text' => '0,005 A', 'is_correct' => true],
                            ['choice_text' => '0,05 A', 'is_correct' => false],
                            ['choice_text' => '5 A', 'is_correct' => false],
                            ['choice_text' => '5000 A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe milli correspond à 10^-3. Donc 5 mA = 5 × 10^-3 A = 0,005 A.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Notation scientifique et ordre de grandeur
            // ============================================================

            [
                'title' => 'Notation scientifique et ordres de grandeur',
                'description' => 'Utilisation de la notation scientifique et comparaison simple des tailles physiques.',
                'questions' => [

                    [
                        'question' => 'Comment écrit-on 300 000 en notation scientifique ?',
                        'choices' => [
                            ['choice_text' => '3 × 10^5', 'is_correct' => true],
                            ['choice_text' => '30 × 10^5', 'is_correct' => false],
                            ['choice_text' => '3 × 10^3', 'is_correct' => false],
                            ['choice_text' => '0,3 × 10^5', 'is_correct' => false],
                        ],
                        'explanation' => '300 000 = 3 × 10^5.',
                    ],

                    [
                        'question' => 'Comment écrit-on 0,004 en notation scientifique ?',
                        'choices' => [
                            ['choice_text' => '4 × 10^-3', 'is_correct' => true],
                            ['choice_text' => '4 × 10^-2', 'is_correct' => false],
                            ['choice_text' => '0,4 × 10^-3', 'is_correct' => false],
                            ['choice_text' => '40 × 10^-1', 'is_correct' => false],
                        ],
                        'explanation' => '0,004 correspond à 4 millièmes, donc 4 × 10^-3.',
                    ],

                    [
                        'question' => 'Quelle valeur est la plus grande ?',
                        'choices' => [
                            ['choice_text' => '5 × 10^4', 'is_correct' => true],
                            ['choice_text' => '5 × 10^3', 'is_correct' => false],
                            ['choice_text' => '5 × 10^2', 'is_correct' => false],
                            ['choice_text' => '5 × 10^1', 'is_correct' => false],
                        ],
                        'explanation' => 'À coefficient identique, la puissance de 10 la plus grande donne la valeur la plus grande.',
                    ],

                    [
                        'question' => 'Quel est l’ordre de grandeur de 7 × 10^6 ?',
                        'choices' => [
                            ['choice_text' => '10^7', 'is_correct' => true],
                            ['choice_text' => '10^5', 'is_correct' => false],
                            ['choice_text' => '10^6', 'is_correct' => false],
                            ['choice_text' => '10^8', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 7 est supérieur à √10, 7 × 10^6 est plus proche de 10^7 que de 10^6.',
                    ],

                    [
                        'question' => 'Quelle écriture correspond à 2,5 × 10^3 ?',
                        'choices' => [
                            ['choice_text' => '2500', 'is_correct' => true],
                            ['choice_text' => '250', 'is_correct' => false],
                            ['choice_text' => '25 000', 'is_correct' => false],
                            ['choice_text' => '0,0025', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier 2,5 par 10^3 revient à déplacer la virgule de trois positions vers la droite : 2500.',
                    ],

                    [
                        'question' => 'Quelle écriture décimale correspond à 8 × 10^-2 ?',
                        'choices' => [
                            ['choice_text' => '0,08', 'is_correct' => true],
                            ['choice_text' => '0,8', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                        ],
                        'explanation' => '10^-2 correspond à un centième. Donc 8 × 10^-2 = 0,08.',
                    ],

                    [
                        'question' => 'Pourquoi la notation scientifique est-elle particulièrement utile en physique ?',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’écriture et la comparaison de très grandes ou très petites valeurs', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toutes les unités', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les erreurs expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toutes les valeurs positives', 'is_correct' => false],
                        ],
                        'explanation' => 'La notation scientifique simplifie la manipulation des nombres ayant de nombreux zéros.',
                    ],

                    [
                        'question' => 'Quelle valeur est égale à 1 × 10^-6 m ?',
                        'choices' => [
                            ['choice_text' => '1 micromètre', 'is_correct' => true],
                            ['choice_text' => '1 millimètre', 'is_correct' => false],
                            ['choice_text' => '1 centimètre', 'is_correct' => false],
                            ['choice_text' => '1 kilomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le micromètre correspond à 10^-6 m.',
                    ],

                    [
                        'question' => 'Quelle notation scientifique représente correctement 45 000 000 ?',
                        'choices' => [
                            ['choice_text' => '4,5 × 10^7', 'is_correct' => true],
                            ['choice_text' => '45 × 10^7', 'is_correct' => false],
                            ['choice_text' => '4,5 × 10^6', 'is_correct' => false],
                            ['choice_text' => '0,45 × 10^7', 'is_correct' => false],
                        ],
                        'explanation' => '45 000 000 = 4,5 × 10^7.',
                    ],

                    [
                        'question' => 'Entre 10^-3 m et 10^-6 m, quelle longueur est la plus petite ?',
                        'choices' => [
                            ['choice_text' => '10^-6 m', 'is_correct' => true],
                            ['choice_text' => '10^-3 m', 'is_correct' => false],
                            ['choice_text' => 'Elles sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend uniquement de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une puissance de 10 plus négative correspond ici à une valeur plus petite. Ainsi, 10^-6 m < 10^-3 m.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Grandeurs scalaires et vectorielles
            // ============================================================

            [
                'title' => 'Grandeurs scalaires et vectorielles',
                'description' => 'Distinction entre grandeurs scalaires et vectorielles et identification de leurs caractéristiques.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur est une grandeur scalaire ?',
                        'choices' => [
                            ['choice_text' => 'La masse', 'is_correct' => true],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La vitesse vectorielle', 'is_correct' => false],
                            ['choice_text' => 'L’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse est caractérisée par une valeur numérique et une unité, sans direction ni sens.',
                    ],

                    [
                        'question' => 'Quelle grandeur est une grandeur vectorielle ?',
                        'choices' => [
                            ['choice_text' => 'La force', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La durée', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force est une grandeur vectorielle possédant une intensité, une direction et un sens.',
                    ],

                    [
                        'question' => 'Quelles caractéristiques permettent de décrire complètement une force dans un modèle mécanique simple ?',
                        'choices' => [
                            ['choice_text' => 'Une intensité, une direction, un sens et un point d’application', 'is_correct' => true],
                            ['choice_text' => 'Une température et une masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une longueur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une durée et une pression uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle mécanique, une force se décrit notamment par son intensité, sa direction, son sens et son point d’application.',
                    ],

                    [
                        'question' => 'Pourquoi la température est-elle généralement considérée comme une grandeur scalaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle est décrite par une valeur et une unité sans direction spatiale', 'is_correct' => true],
                            ['choice_text' => 'Elle possède toujours trois directions', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement négative', 'is_correct' => false],
                            ['choice_text' => 'Elle est représentée par une flèche', 'is_correct' => false],
                        ],
                        'explanation' => 'La température est une grandeur scalaire : elle ne possède pas de direction ou de sens spatial.',
                    ],

                    [
                        'question' => 'Quelle grandeur indique à la fois la rapidité et la direction du déplacement d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'Le vecteur vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur vitesse fournit la direction du mouvement ainsi que sa valeur.',
                    ],

                    [
                        'question' => 'Comment représente-t-on généralement graphiquement une grandeur vectorielle ?',
                        'choices' => [
                            ['choice_text' => 'Par une flèche', 'is_correct' => true],
                            ['choice_text' => 'Par un nombre sans unité', 'is_correct' => false],
                            ['choice_text' => 'Par une température', 'is_correct' => false],
                            ['choice_text' => 'Par un tableau sans axes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une flèche permet de représenter la direction, le sens et la norme d’un vecteur.',
                    ],

                    [
                        'question' => 'Deux forces de même intensité mais de sens opposés peuvent-elles avoir une résultante nulle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si elles sont colinéaires et opposées', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si elles sont perpendiculaires', 'is_correct' => false],
                            ['choice_text' => 'Non, sauf si les masses sont nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux forces de même norme, même direction et sens opposés se compensent.',
                    ],

                    [
                        'question' => 'La longueur d’un vecteur sur un schéma représente généralement...',
                        'choices' => [
                            ['choice_text' => 'Sa norme selon l’échelle choisie', 'is_correct' => true],
                            ['choice_text' => 'Sa température', 'is_correct' => false],
                            ['choice_text' => 'Son unité uniquement', 'is_correct' => false],
                            ['choice_text' => 'Son temps d’action uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une représentation vectorielle, la longueur de la flèche représente la norme selon une échelle.',
                    ],

                    [
                        'question' => 'La vitesse de 20 m/s vers l’est et la vitesse de 20 m/s vers l’ouest ont-elles le même vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Non, car leurs directions sont opposées', 'is_correct' => true],
                            ['choice_text' => 'Oui, car leurs valeurs sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Oui, car le temps ne change pas', 'is_correct' => false],
                            ['choice_text' => 'Non, uniquement si la masse change', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux vecteurs ayant la même norme mais des sens opposés sont différents.',
                    ],

                    [
                        'question' => 'Quelle propriété n’est pas nécessaire pour décrire une grandeur scalaire ?',
                        'choices' => [
                            ['choice_text' => 'Une direction', 'is_correct' => true],
                            ['choice_text' => 'Une valeur numérique', 'is_correct' => false],
                            ['choice_text' => 'Une unité appropriée', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur mesurable', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grandeur scalaire n’a pas besoin de direction ni de sens spatial.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Mesures de longueur, masse et volume
            // ============================================================

            [
                'title' => 'Mesure de la longueur, de la masse et du volume',
                'description' => 'Utilisation pratique des mesures de dimensions, de masse et de volume.',
                'questions' => [

                    [
                        'question' => 'Une règle graduée indique 12,4 cm pour la longueur d’un objet. Quelle grandeur a été mesurée ?',
                        'choices' => [
                            ['choice_text' => 'Une longueur', 'is_correct' => true],
                            ['choice_text' => 'Une masse', 'is_correct' => false],
                            ['choice_text' => 'Une durée', 'is_correct' => false],
                            ['choice_text' => 'Une température', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centimètre est une unité de longueur, donc la mesure concerne une dimension spatiale.',
                    ],

                    [
                        'question' => 'Quelle unité est couramment utilisée pour exprimer le volume d’un liquide dans la vie courante ?',
                        'choices' => [
                            ['choice_text' => 'Le litre', 'is_correct' => true],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le litre est une unité couramment utilisée pour exprimer le volume des liquides.',
                    ],

                    [
                        'question' => 'Quelle est la relation entre 1 litre et le mètre cube ?',
                        'choices' => [
                            ['choice_text' => '1 L = 0,001 m³', 'is_correct' => true],
                            ['choice_text' => '1 L = 1 m³', 'is_correct' => false],
                            ['choice_text' => '1 L = 100 m³', 'is_correct' => false],
                            ['choice_text' => '1 L = 0,1 m³', 'is_correct' => false],
                        ],
                        'explanation' => 'Un litre correspond à un décimètre cube, soit 10^-3 m³.',
                    ],

                    [
                        'question' => 'Quel instrument convient pour mesurer le volume d’un liquide avec précision en laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'Une éprouvette graduée', 'is_correct' => true],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermocouple', 'is_correct' => false],
                        ],
                        'explanation' => 'Une éprouvette graduée permet de mesurer le volume d’un liquide grâce à ses graduations.',
                    ],

                    [
                        'question' => 'Pour mesurer précisément le diamètre extérieur d’un petit cylindre, quel instrument est le plus adapté parmi les choix proposés ?',
                        'choices' => [
                            ['choice_text' => 'Un pied à coulisse', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pied à coulisse est conçu pour mesurer précisément des dimensions extérieures, intérieures et des profondeurs.',
                    ],

                    [
                        'question' => 'Un objet a une masse de 2 kg. Quelle masse possède-t-il en grammes ?',
                        'choices' => [
                            ['choice_text' => '2000 g', 'is_correct' => true],
                            ['choice_text' => '200 g', 'is_correct' => false],
                            ['choice_text' => '20 g', 'is_correct' => false],
                            ['choice_text' => '20 000 g', 'is_correct' => false],
                        ],
                        'explanation' => '1 kg = 1000 g, donc 2 kg = 2000 g.',
                    ],

                    [
                        'question' => 'Un volume de 500 mL correspond à...',
                        'choices' => [
                            ['choice_text' => '0,5 L', 'is_correct' => true],
                            ['choice_text' => '5 L', 'is_correct' => false],
                            ['choice_text' => '50 L', 'is_correct' => false],
                            ['choice_text' => '0,05 L', 'is_correct' => false],
                        ],
                        'explanation' => '1000 mL correspondent à 1 L. Donc 500 mL = 0,5 L.',
                    ],

                    [
                        'question' => 'Pour mesurer la masse d’un liquide contenu dans un récipient, quelle méthode simple peut être utilisée ?',
                        'choices' => [
                            ['choice_text' => 'Mesurer le récipient vide puis le récipient rempli et faire la différence', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la température du liquide', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement une règle', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le volume sans autre donnée', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse du liquide peut être obtenue par différence entre la masse du récipient rempli et celle du récipient vide.',
                    ],

                    [
                        'question' => 'Lors de la lecture du volume d’un liquide dans une éprouvette graduée, pourquoi faut-il généralement placer les yeux au niveau du ménisque ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’erreur de parallaxe', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la température du liquide', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le volume plus grand', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la masse du liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Lire à hauteur du ménisque réduit l’erreur de parallaxe et améliore la lecture du volume.',
                    ],

                    [
                        'question' => 'Si deux objets ont le même volume mais des masses différentes, leur masse volumique est...',
                        'choices' => [
                            ['choice_text' => 'Différente', 'is_correct' => true],
                            ['choice_text' => 'Nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse volumique est le rapport masse/volume. À volume identique, des masses différentes donnent des masses volumiques différentes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Précision, résolution et incertitude élémentaire
            // ============================================================

            [
                'title' => 'Précision et incertitude de mesure',
                'description' => 'Introduction aux notions de résolution, précision, répétabilité et incertitude de mesure.',
                'questions' => [

                    [
                        'question' => 'Que représente principalement la résolution d’un instrument ?',
                        'choices' => [
                            ['choice_text' => 'La plus petite variation qu’il peut distinguer ou afficher selon sa conception', 'is_correct' => true],
                            ['choice_text' => 'La masse de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La durée de sa fabrication', 'is_correct' => false],
                            ['choice_text' => 'La température maximale du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution décrit le plus petit changement discernable par l’instrument dans les conditions considérées.',
                    ],

                    [
                        'question' => 'Un instrument affiche des mesures avec un pas de 0,1 g. Cela signifie que sa résolution d’affichage est de...',
                        'choices' => [
                            ['choice_text' => '0,1 g', 'is_correct' => true],
                            ['choice_text' => '1 g', 'is_correct' => false],
                            ['choice_text' => '10 g', 'is_correct' => false],
                            ['choice_text' => '0,01 g', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plus petit incrément affiché est ici de 0,1 g.',
                    ],

                    [
                        'question' => 'Si plusieurs mesures répétées sont très proches les unes des autres, on dit généralement qu’elles présentent une bonne...',
                        'choices' => [
                            ['choice_text' => 'Répétabilité', 'is_correct' => true],
                            ['choice_text' => 'Masse', 'is_correct' => false],
                            ['choice_text' => 'Température', 'is_correct' => false],
                            ['choice_text' => 'Pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Des résultats très proches lors de répétitions dans des conditions identiques indiquent une bonne répétabilité.',
                    ],

                    [
                        'question' => 'Une mesure écrite 25,0 ± 0,5 cm indique principalement...',
                        'choices' => [
                            ['choice_text' => 'Une valeur mesurée accompagnée d’une incertitude', 'is_correct' => true],
                            ['choice_text' => 'Deux longueurs différentes', 'is_correct' => false],
                            ['choice_text' => 'Une masse de 0,5 kg', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole ± indique ici une estimation de l’incertitude associée à la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi répète-t-on souvent une mesure plusieurs fois ?',
                        'choices' => [
                            ['choice_text' => 'Pour mieux évaluer la dispersion des résultats et réduire l’effet du hasard', 'is_correct' => true],
                            ['choice_text' => 'Pour changer l’unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute erreur systématique', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la grandeur mesurée constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les répétitions permettent notamment d’estimer la dispersion et de réduire l’influence de variations aléatoires.',
                    ],

                    [
                        'question' => 'Une erreur systématique non corrigée affecte généralement les mesures de manière...',
                        'choices' => [
                            ['choice_text' => 'Similaire ou orientée dans le même sens', 'is_correct' => true],
                            ['choice_text' => 'Totalement aléatoire à chaque mesure', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de l’instrument', 'is_correct' => false],
                        ],
                        'explanation' => 'Une erreur systématique introduit généralement un biais qui affecte les résultats de manière cohérente.',
                    ],

                    [
                        'question' => 'La précision d’une mesure est généralement liée à...',
                        'choices' => [
                            ['choice_text' => 'La faible dispersion des résultats', 'is_correct' => true],
                            ['choice_text' => 'La grandeur de la masse mesurée uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La longueur de la salle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne précision correspond généralement à des résultats peu dispersés.',
                    ],

                    [
                        'question' => 'Un thermomètre indique toujours 22 °C pour un environnement qui est réellement à 25 °C. Ce problème correspond principalement à...',
                        'choices' => [
                            ['choice_text' => 'Un biais systématique', 'is_correct' => true],
                            ['choice_text' => 'Une excellente exactitude', 'is_correct' => false],
                            ['choice_text' => 'Une unité correcte mais sans erreur', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thermomètre présente un décalage systématique de -3 °C par rapport à la valeur réelle.',
                    ],

                    [
                        'question' => 'Quel facteur peut directement augmenter l’incertitude d’une mesure de longueur ?',
                        'choices' => [
                            ['choice_text' => L’utilisation d’un instrument peu résolu ou mal adapté', 'is_correct' => true],
                            ['choice_text' => 'Le fait d’utiliser une unité standardisée', 'is_correct' => false],
                            ['choice_text' => 'Le fait de noter correctement l’unité', 'is_correct' => false],
                            ['choice_text' => 'Le fait d’effectuer une conversion correcte', 'is_correct' => false],
                        ],
                        'explanation' => 'Un instrument peu résolu ou inadapté peut augmenter l’incertitude associée à la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi une valeur mesurée doit-elle être accompagnée de son unité en physique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le nombre seul ne définit pas complètement la grandeur mesurée', 'is_correct' => true],
                            ['choice_text' => 'Parce que les nombres n’ont jamais de sens', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’unité détermine toujours la masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que les unités remplacent les instruments', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur numérique doit être associée à une unité pour préciser la nature et l’échelle de la grandeur.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse dimensionnelle élémentaire
            // ============================================================

            [
                'title' => 'Dimensions physiques et vérification des formules',
                'description' => 'Introduction à l’analyse dimensionnelle et à la vérification simple de relations physiques.',
                'questions' => [

                    [
                        'question' => 'Quelle est la dimension physique de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'L/T', 'is_correct' => true],
                            ['choice_text' => 'L·T', 'is_correct' => false],
                            ['choice_text' => 'M/L', 'is_correct' => false],
                            ['choice_text' => 'M·T', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est une longueur divisée par un temps, donc sa dimension est L/T.',
                    ],

                    [
                        'question' => 'Quelle est la dimension de l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'L/T²', 'is_correct' => true],
                            ['choice_text' => 'L/T', 'is_correct' => false],
                            ['choice_text' => 'M/T²', 'is_correct' => false],
                            ['choice_text' => 'L²/T', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération est une variation de vitesse par unité de temps, donc sa dimension est L/T².',
                    ],

                    [
                        'question' => 'Quelle est la dimension de la force selon la relation F = ma ?',
                        'choices' => [
                            ['choice_text' => 'M·L/T²', 'is_correct' => true],
                            ['choice_text' => 'M/T', 'is_correct' => false],
                            ['choice_text' => 'L/T²', 'is_correct' => false],
                            ['choice_text' => 'M·L²/T', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme F = ma, la dimension de la force est M × L/T² = M·L/T².',
                    ],

                    [
                        'question' => 'Quelle est la dimension de l’énergie mécanique associée à un travail de force ?',
                        'choices' => [
                            ['choice_text' => 'M·L²/T²', 'is_correct' => true],
                            ['choice_text' => 'M·L/T²', 'is_correct' => false],
                            ['choice_text' => 'L/T', 'is_correct' => false],
                            ['choice_text' => 'M/T²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie a la dimension d’une force multipliée par une longueur : M·L/T² × L = M·L²/T².',
                    ],

                    [
                        'question' => 'Quelle est la dimension de la puissance ?',
                        'choices' => [
                            ['choice_text' => 'M·L²/T³', 'is_correct' => true],
                            ['choice_text' => 'M·L/T²', 'is_correct' => false],
                            ['choice_text' => 'M·L²/T²', 'is_correct' => false],
                            ['choice_text' => 'L/T³', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance est une énergie par unité de temps, donc sa dimension est M·L²/T³.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse dimensionnelle est-elle utile en physique ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet notamment de vérifier la cohérence d’une équation physique', 'is_correct' => true],
                            ['choice_text' => 'Elle fournit toujours la valeur numérique exacte d’une grandeur', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les mesures expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les constantes physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse dimensionnelle permet de détecter certaines incohérences dans les formules en comparant les dimensions des deux membres.',
                    ],

                    [
                        'question' => 'La relation d = vt est-elle dimensionnellement cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car L = (L/T) × T', 'is_correct' => true],
                            ['choice_text' => 'Non, car la vitesse n’a aucune dimension', 'is_correct' => false],
                            ['choice_text' => 'Non, car le temps doit être au carré', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans les circuits électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse a pour dimension L/T. Multipliée par T, elle donne bien une longueur L.',
                    ],

                    [
                        'question' => 'Quelle relation est dimensionnellement incohérente pour une distance ?',
                        'choices' => [
                            ['choice_text' => 'd = v + t', 'is_correct' => true],
                            ['choice_text' => 'd = vt', 'is_correct' => false],
                            ['choice_text' => 'd = 1/2 at²', 'is_correct' => false],
                            ['choice_text' => 'd = v²/a', 'is_correct' => false],
                        ],
                        'explanation' => 'On ne peut pas additionner une vitesse L/T et un temps T. Les termes d’une somme doivent avoir la même dimension.',
                    ],

                    [
                        'question' => 'Quelle dimension possède une quantité sans dimension ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => 'L', 'is_correct' => false],
                            ['choice_text' => 'M', 'is_correct' => false],
                            ['choice_text' => 'T', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grandeur sans dimension ne possède aucune dimension fondamentale. On peut symboliquement lui associer la dimension 1.',
                    ],

                    [
                        'question' => 'Une formule physique conduit à une vitesse exprimée en m²/s. Que faut-il conclure ?',
                        'choices' => [
                            ['choice_text' => 'La formule ou son interprétation contient probablement une incohérence dimensionnelle', 'is_correct' => true],
                            ['choice_text' => 'm²/s est toujours l’unité SI de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse dépend nécessairement de la surface uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’unité peut être ignorée en physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse doit avoir la dimension L/T, donc m/s dans le SI. Une expression en m²/s signale une incohérence dimensionnelle.',
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
                    'difficulty' => 'Beginner',
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

                // Mélange des objets complets pour conserver
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