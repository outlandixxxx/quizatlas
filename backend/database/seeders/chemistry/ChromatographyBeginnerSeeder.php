<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChromatographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chromatography')->firstOrFail();

        $quizSettings = [
            [
                'duration' => 15,
                'passing_score' => 50,
            ],
            [
                'duration' => 20,
                'passing_score' => 55,
            ],
            [
                'duration' => 20,
                'passing_score' => 60,
            ],
            [
                'duration' => 20,
                'passing_score' => 60,
            ],
            [
                'duration' => 15,
                'passing_score' => 55,
            ],
            [
                'duration' => 20,
                'passing_score' => 60,
            ],
            [
                'duration' => 25,
                'passing_score' => 65,
            ],
            [
                'duration' => 25,
                'passing_score' => 70,
            ],
        ];

        $quizzes = [
            [
                'title' => 'Les bases de la chromatographie',
                'description' => 'Comprendre le principe général de la chromatographie et le rôle des différentes phases.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement une chromatographie ?',
                        'explanation' => 'La chromatographie permet de séparer les constituants d’un mélange et peut ensuite aider à les identifier ou à les quantifier.',
                        'choices' => [
                            [
                                'choice_text' => 'À séparer les constituants d’un mélange',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'À augmenter la masse de l’échantillon',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À mesurer uniquement la température',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À transformer tous les composés en gaz',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur quel principe repose une séparation chromatographique ?',
                        'explanation' => 'Les différents composés n’ont pas les mêmes interactions avec les phases du système. Ils se déplacent donc à des vitesses différentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Les composés ont tous la même vitesse',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les composés se répartissent différemment entre deux phases',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Les composés changent toujours de couleur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les composés deviennent tous solides',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une chromatographie, que signifie « phase mobile » ?',
                        'explanation' => 'La phase mobile est celle qui se déplace et entraîne les molécules à travers le système chromatographique.',
                        'choices' => [
                            [
                                'choice_text' => 'La phase qui reste immobile',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La phase qui se déplace',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La phase qui contient le détecteur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La phase qui porte l’étiquette du produit',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général de la phase stationnaire ?',
                        'explanation' => 'Elle reste en place et retient plus ou moins les différents composés selon leurs interactions avec eux.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle se déplace avec tous les solutés',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle reste en place et interagit avec les solutés',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle chauffe automatiquement le mélange',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle remplace la pompe',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux molécules traversent une colonne à des vitesses différentes. Quelle conséquence peut-on attendre ?',
                        'explanation' => 'Si les composés ne migrent pas à la même vitesse, ils peuvent sortir de la colonne à des moments différents et être séparés.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles sont forcément identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elles peuvent être séparées',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elles deviennent un seul composé',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elles disparaissent de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi dépose-t-on généralement une petite quantité d’échantillon au départ ?',
                        'explanation' => 'Une surcharge donne souvent des bandes ou des pics larges. Une quantité adaptée favorise une meilleure séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour empêcher toute migration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour éviter la surcharge et obtenir une séparation plus nette',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour changer la formule des molécules',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour augmenter artificiellement la masse molaire',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat montre qu’une séparation chromatographique a réellement fonctionné ?',
                        'explanation' => 'Une séparation réussie produit des zones distinctes, par exemple plusieurs taches ou plusieurs pics bien individualisés.',
                        'choices' => [
                            [
                                'choice_text' => 'Un seul signal confondu',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Des signaux distincts pour les différents constituants',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Une absence totale de migration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Un récipient vide',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux composés d’un même mélange peuvent-ils migrer différemment ?',
                        'explanation' => 'Leurs propriétés et leurs interactions avec la phase mobile et la phase stationnaire peuvent être différentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’ils ont toujours la même polarité',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que leurs interactions avec les phases peuvent être différentes',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Parce que le solvant choisit au hasard',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que la plaque change leur masse',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La chromatographie est-elle uniquement une technique d’identification ?',
                        'explanation' => 'Non. Elle sert d’abord à séparer, puis peut aider à identifier et, avec un étalonnage adapté, à quantifier.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, uniquement à identifier',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non, elle peut aussi séparer et parfois quantifier',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Oui, uniquement à peser',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non, elle ne sert qu’à chauffer',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un technicien veut savoir si un échantillon contient une ou plusieurs substances. Quelle technique simple peut l’aider ?',
                        'explanation' => 'Une CCM peut montrer plusieurs taches si plusieurs composés sont présents et suffisamment séparés.',
                        'choices' => [
                            [
                                'choice_text' => 'Une CCM',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Un thermomètre',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une balance seule',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Un pH-mètre seul',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phase stationnaire et phase mobile',
                'description' => 'Reconnaître les rôles des deux phases et comprendre leur influence sur la migration.',
                'questions' => [
                    [
                        'question' => 'Dans une CCM classique sur silice, la silice joue quel rôle ?',
                        'explanation' => 'Dans ce montage, la silice reste sur la plaque : elle constitue la phase stationnaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Phase mobile',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Phase stationnaire',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Détecteur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Échantillon',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une CCM, le solvant qui monte sur la plaque correspond à…',
                        'explanation' => 'Le solvant qui progresse le long de la plaque est la phase mobile.',
                        'choices' => [
                            [
                                'choice_text' => 'La phase stationnaire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La phase mobile',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Le support solide',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un composé interagit fortement avec la phase stationnaire. Comment se comporte-t-il généralement ?',
                        'explanation' => 'Plus il est retenu par la phase stationnaire, moins il avance avec la phase mobile.',
                        'choices' => [
                            [
                                'choice_text' => 'Il avance plus lentement',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Il avance immédiatement jusqu’au front',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il quitte toujours la plaque par le bas',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il devient automatiquement gazeux',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un composé est très soluble dans la phase mobile et peu retenu par la phase stationnaire. Que peut-on prévoir ?',
                        'explanation' => 'Il est facilement entraîné par le solvant et a donc tendance à migrer davantage.',
                        'choices' => [
                            [
                                'choice_text' => 'Il migre davantage',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Il reste forcément au dépôt',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il ne peut plus être détecté',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il devient la phase stationnaire',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi change-t-on parfois la composition du solvant en chromatographie ?',
                        'explanation' => 'Le changement de solvant modifie les interactions avec les molécules et peut améliorer la séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour modifier la migration des composés',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour rendre tous les composés identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour supprimer la phase stationnaire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour changer la masse de la plaque',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur une plaque de silice, un composé très polaire peut être fortement retenu. Quelle conséquence simple peut-on observer ?',
                        'explanation' => 'Une forte interaction avec la silice peut maintenir le composé plus près de la ligne de dépôt.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut migrer moins loin',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Il atteint toujours le front immédiatement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il quitte la plaque par le haut',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il ne peut plus être observé',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une bonne affinité pour la phase mobile signifie généralement que le composé…',
                        'explanation' => 'Le composé est facilement entraîné par la phase qui se déplace.',
                        'choices' => [
                            [
                                'choice_text' => 'reste au point de départ',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'est facilement entraîné par le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'devient la phase stationnaire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'augmente la température',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si on change uniquement la phase mobile, les positions des taches peuvent-elles changer ?',
                        'explanation' => 'Oui. La migration dépend des propriétés et de la composition de la phase mobile.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Oui',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Seulement pour les gaz',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Seulement sur une plaque métallique',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement les deux phases ?',
                        'explanation' => 'La phase stationnaire reste en place alors que la phase mobile se déplace.',
                        'choices' => [
                            [
                                'choice_text' => 'Les deux sont immobiles',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les deux se déplacent ensemble',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La stationnaire reste en place et la mobile se déplace',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La mobile reste en place et la stationnaire se déplace',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant garde la même plaque mais change le mélange de solvants. Que teste-t-il probablement ?',
                        'explanation' => 'Il cherche à voir comment la composition de la phase mobile influence la migration et la séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'L’effet de la phase mobile sur la séparation',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La masse de la plaque',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La couleur du laboratoire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La conductivité du bécher',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Chromatographie sur couche mince (CCM)',
                'description' => 'Utiliser une CCM, calculer un Rf et interpréter des taches de façon simple.',
                'questions' => [
                    [
                        'question' => 'Pourquoi trace-t-on généralement la ligne de dépôt au crayon et non au stylo ?',
                        'explanation' => 'L’encre peut se dissoudre et migrer avec le solvant, créant des taches parasites. Le graphite convient mieux.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le graphite ne migre généralement pas avec le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Parce qu’un stylo est trop lourd',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que le papier absorbe toujours l’encre',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour chauffer la plaque',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que représente le front du solvant sur une plaque de CCM ?',
                        'explanation' => 'C’est la position atteinte par la phase mobile lorsque le développement est arrêté.',
                        'choices' => [
                            [
                                'choice_text' => 'La ligne de dépôt initiale',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La position atteinte par le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La tache la plus foncée',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La longueur totale de la plaque',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une tache a parcouru 4 cm alors que le front du solvant a parcouru 8 cm. Quel est son Rf ?',
                        'explanation' => 'Rf = distance parcourue par la tache / distance parcourue par le front = 4 / 8 = 0,50.',
                        'choices' => [
                            [
                                'choice_text' => '0,25',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => '0,50',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => '2,0',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => '4,0',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une tache possède un Rf proche de 0. Que suggère ce résultat ?',
                        'explanation' => 'La tache est restée proche de la ligne de dépôt et a donc peu migré dans les conditions utilisées.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle est proche du front',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle est restée proche du dépôt',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle a quitté la plaque par le bas',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle a forcément disparu',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le Rf d’une tache peut-il être supérieur à 1 ?',
                        'explanation' => 'Non. La distance parcourue par la tache ne peut pas dépasser la distance parcourue par le front du solvant.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, souvent',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Seulement avec l’eau',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Seulement pour les molécules polaires',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une plaque montre trois taches distinctes pour un échantillon. Quelle interprétation simple est raisonnable ?',
                        'explanation' => 'Le mélange contient probablement au moins trois constituants détectables et suffisamment séparés.',
                        'choices' => [
                            [
                                'choice_text' => 'L’échantillon est forcément pur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'L’échantillon contient probablement plusieurs constituants',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Le solvant n’a pas bougé',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les trois taches sont forcément identiques',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on souvent une piste d’échantillon avec une piste d’étalon ?',
                        'explanation' => 'Un Rf proche dans les mêmes conditions peut fournir un indice utile pour identifier un composé.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour mesurer sa masse sans balance',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour aider à identifier un composé',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour connaître le volume du solvant',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour remplacer toute autre analyse',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une tache d’échantillon est à la même hauteur qu’un étalon sur une plaque préparée dans les mêmes conditions. Que peut-on dire ?',
                        'explanation' => 'Le même Rf est un indice compatible avec une même substance, mais ce n’est pas une preuve absolue à lui seul.',
                        'choices' => [
                            [
                                'choice_text' => 'Les substances sont forcément identiques à 100 %',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Il existe un indice en faveur d’une identité',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Les deux ont forcément la même masse',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La plaque est inutilisable',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la ligne de dépôt doit-elle rester au-dessus du niveau du solvant au départ ?',
                        'explanation' => 'Sinon les substances déposées peuvent se dissoudre directement dans le bain de solvant au lieu de migrer correctement sur la plaque.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter que l’échantillon soit immergé directement dans le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la température',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour empêcher le solvant de bouger',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour rendre Rf supérieur à 1',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les taches d’une CCM sont très larges et se chevauchent. Quelle amélioration est raisonnable ?',
                        'explanation' => 'Une surcharge ou un solvant mal choisi peut élargir les taches. On peut réduire la quantité déposée et optimiser l’éluant.',
                        'choices' => [
                            [
                                'choice_text' => 'Déposer encore plus d’échantillon',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Réduire la quantité déposée et ajuster le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Immerger toute la plaque',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Tracer au stylo',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Chromatographie sur papier et en colonne',
                'description' => 'Comprendre les principes pratiques de la chromatographie sur papier et de la chromatographie en colonne.',
                'questions' => [
                    [
                        'question' => 'Dans une chromatographie sur papier, quel élément se déplace le long du support ?',
                        'explanation' => 'Le solvant est la phase mobile et progresse dans le papier, notamment par capillarité.',
                        'choices' => [
                            [
                                'choice_text' => 'Le solvant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Le support papier entier',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le bécher',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capillarité est-elle utile en chromatographie sur papier ?',
                        'explanation' => 'Elle permet au solvant de progresser dans le support et d’entraîner les différents constituants.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle bloque les molécules',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle permet au solvant de progresser dans le support',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle transforme les molécules',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle crée le détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une chromatographie en colonne, comment récupère-t-on généralement les composés séparés ?',
                        'explanation' => 'Les composés sortent progressivement de la colonne et peuvent être recueillis dans des fractions successives.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils sortent tous en même temps',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Ils sortent progressivement et sont recueillis en fractions',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Ils restent tous dans la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Ils sont brûlés à la sortie',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois plusieurs récipients pour une même colonne ?',
                        'explanation' => 'Les constituants peuvent éluer à des moments différents. Des récipients séparés permettent donc de conserver des fractions distinctes.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour augmenter la pression',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour recueillir des fractions différentes',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour remplacer la phase stationnaire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour mesurer la masse de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une colonne, un composé fortement retenu par la phase stationnaire sort généralement…',
                        'explanation' => 'Une forte rétention signifie que le composé passe davantage de temps dans la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Plus tôt',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Plus tard',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Toujours exactement avec le front du solvant',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Par le haut de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si le lit de phase stationnaire se fissure pendant une chromatographie en colonne ?',
                        'explanation' => 'Des chemins préférentiels peuvent apparaître et le mélange peut contourner une partie de la phase stationnaire, ce qui dégrade la séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'La séparation peut devenir moins bonne',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La séparation devient automatiquement parfaite',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Tous les composés deviennent identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le solvant devient solide',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifie-t-on parfois les fractions d’une colonne par CCM ?',
                        'explanation' => 'La CCM permet de voir quelles fractions contiennent quels composés et de décider lesquelles peuvent être regroupées.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour mesurer la température',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour suivre la composition des fractions',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour remplacer la phase mobile',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la pression',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un laboratoire obtient deux fractions principales contenant chacune un composé différent. Que montre ce résultat ?',
                        'explanation' => 'La colonne a réussi à répartir les constituants du mélange initial dans des fractions différentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le mélange n’a pas été séparé',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les constituants ont été séparés en fractions distinctes',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La phase stationnaire a disparu',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le solvant n’a pas circulé',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lors du dépôt sur une colonne, pourquoi cherche-t-on à former une zone de départ étroite ?',
                        'explanation' => 'Une zone initiale compacte limite l’élargissement des bandes et aide à obtenir une meilleure séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour obtenir une bande de départ compacte',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour mélanger les fractions',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour bloquer l’élution',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour sécher la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une colonne donne une seule grande fraction alors que le mélange contient plusieurs composés. Que peut-on envisager ?',
                        'explanation' => 'La séparation peut être insuffisante à cause du solvant, de la surcharge ou des conditions de la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'La séparation est probablement insuffisante',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La colonne est forcément parfaite',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Tous les composés sont forcément identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La température est forcément nulle',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Chromatographie en phase gazeuse (GC)',
                'description' => 'Reconnaître les éléments essentiels de la GC et lire un chromatogramme simple.',
                'questions' => [
                    [
                        'question' => 'Dans une chromatographie en phase gazeuse, quelle est généralement la phase mobile ?',
                        'explanation' => 'La phase mobile de la GC est un gaz vecteur qui entraîne les composés dans la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Un gaz vecteur',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Un solide',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Un liquide de rinçage',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quels composés sont particulièrement adaptés à une analyse par GC ?',
                        'explanation' => 'La GC convient surtout aux composés suffisamment volatils et thermiquement stables dans les conditions choisies.',
                        'choices' => [
                            [
                                'choice_text' => 'Des composés volatils et thermiquement stables',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Uniquement des métaux solides',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Uniquement des sels non volatils',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Toutes les protéines intactes',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur un chromatogramme GC, que représente généralement un pic ?',
                        'explanation' => 'Un pic correspond généralement au signal du détecteur lorsque le composé atteint celui-ci après avoir traversé la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Un cycle du four',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La détection d’un composé',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La masse de la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La quantité de gaz dans la bouteille',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on le temps entre l’injection et le maximum d’un pic ?',
                        'explanation' => 'Ce paramètre est appelé temps de rétention.',
                        'choices' => [
                            [
                                'choice_text' => 'Temps de fusion',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Temps de rétention',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Temps de dilution',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Temps de lavage',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un chromatogramme GC montre trois pics bien séparés. Quelle interprétation est raisonnable ?',
                        'explanation' => 'Il indique probablement plusieurs constituants détectables dans l’échantillon, ici au moins trois.',
                        'choices' => [
                            [
                                'choice_text' => 'L’échantillon contient probablement plusieurs constituants',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'L’échantillon est forcément pur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La colonne est vide',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur est éteint',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux pics très proches se chevauchent fortement. Que cela indique-t-il ?',
                        'explanation' => 'Le chevauchement montre que la résolution entre les deux composés est insuffisante dans ces conditions.',
                        'choices' => [
                            [
                                'choice_text' => 'Une séparation parfaite',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une résolution insuffisante',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Une absence de composés',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une température forcément trop basse',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le gaz vecteur ?',
                        'explanation' => 'Il transporte les analytes depuis l’injection jusqu’à la colonne puis vers le détecteur.',
                        'choices' => [
                            [
                                'choice_text' => 'À transporter les analytes',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'À remplacer les analytes',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À dissoudre la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À mesurer le pH',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la température du four est-elle importante en GC ?',
                        'explanation' => 'La température influence la volatilité et donc la vitesse à laquelle les composés traversent la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle n’a aucun effet',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle influence les temps de rétention et la séparation',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle sert seulement à colorer les pics',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle change toujours la formule des analytes',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pic plus grand signifie-t-il automatiquement qu’un composé est plus dangereux ?',
                        'explanation' => 'La taille du signal dépend de la quantité et de la réponse du détecteur. Elle ne permet pas, à elle seule, de juger la dangerosité.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, toujours',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non, la taille du pic ne mesure pas directement la dangerosité',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Oui, si le pic est très haut',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Seulement pour les gaz nobles',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi injecter un étalon connu peut-il aider à identifier un composé en GC ?',
                        'explanation' => 'Un étalon fournit une référence, notamment pour comparer le temps de rétention dans les mêmes conditions.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour comparer un temps de rétention connu avec l’échantillon',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la pression atmosphérique',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour remplacer le gaz vecteur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour empêcher la détection',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'HPLC : principes et pratique',
                'description' => 'Comprendre le fonctionnement général de la HPLC et reconnaître les principaux éléments du système.',
                'questions' => [
                    [
                        'question' => 'Que signifie HPLC ?',
                        'explanation' => 'HPLC signifie « chromatographie liquide haute performance ».',
                        'choices' => [
                            [
                                'choice_text' => 'Chromatographie liquide haute performance',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Chromatographie gazeuse haute pression',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Analyse thermique de liquides',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Chromatographie horizontale des protéines',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une HPLC classique, la phase mobile est…',
                        'explanation' => 'La phase mobile est un liquide poussé à travers la colonne sous pression.',
                        'choices' => [
                            [
                                'choice_text' => 'Un liquide',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Un solide',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Un gaz uniquement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une pompe est-elle nécessaire en HPLC ?',
                        'explanation' => 'La pompe fournit le débit et la pression nécessaires pour faire circuler la phase mobile dans la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour faire circuler la phase mobile sous pression',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour chauffer tous les composés',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour remplacer la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour mesurer le pH',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi filtre-t-on souvent une solution avant de l’injecter en HPLC ?',
                        'explanation' => 'Les particules peuvent obstruer la colonne ou les conduites. La filtration réduit ce risque.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter les particules indésirables',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la couleur des pics',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour rendre les molécules identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour supprimer la phase mobile',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un chromatogramme HPLC montre quatre pics distincts. Quelle conclusion prudente peut-on tirer ?',
                        'explanation' => 'Les pics peuvent correspondre à plusieurs constituants détectables du mélange.',
                        'choices' => [
                            [
                                'choice_text' => 'Le mélange peut contenir plusieurs constituants',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Le mélange est forcément pur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La pompe est forcément vide',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La colonne n’a rien séparé',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le temps de rétention en HPLC est mesuré entre…',
                        'explanation' => 'On le mesure depuis l’injection jusqu’au maximum du pic d’intérêt.',
                        'choices' => [
                            [
                                'choice_text' => 'Le lavage et le stockage',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'L’injection et le maximum du pic',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Le début et la fin de la journée',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le remplissage et le nettoyage de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux pics deviennent plus distincts après modification de la phase mobile. Qu’a-t-on amélioré ?',
                        'explanation' => 'Le changement a rendu la séparation entre les deux composés plus nette, donc la résolution a été améliorée.',
                        'choices' => [
                            [
                                'choice_text' => 'La résolution',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La masse de la pompe',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La masse molaire de la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La température de la salle uniquement',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi peut servir l’aire d’un pic en HPLC quantitative ?',
                        'explanation' => 'Après un étalonnage approprié, l’aire du pic peut être reliée à la quantité ou à la concentration du composé.',
                        'choices' => [
                            [
                                'choice_text' => 'À estimer une quantité après étalonnage',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'À mesurer directement le pH',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À calculer la température ambiante',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'À connaître la masse de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un composé non volatil peut-il être analysé par HPLC plus facilement que par GC ?',
                        'explanation' => 'La HPLC ne nécessite pas de vaporiser le composé. Elle convient donc à de nombreux composés non volatils.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il n’a pas besoin d’être vaporisé',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Parce qu’il devient automatiquement un gaz',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que la HPLC n’utilise aucune colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que la HPLC fonctionne sans phase mobile',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'HPLC et GC ont-elles exactement les mêmes domaines d’application ?',
                        'explanation' => 'Non. La GC convient surtout aux composés volatils et thermiquement stables, alors que la HPLC couvre de nombreux composés non volatils ou fragiles thermiquement.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, elles sont identiques',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non, leurs domaines d’application sont différents',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Oui, mais uniquement pour les solides',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Non, car la HPLC n’utilise pas de détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Lire et interpréter un chromatogramme',
                'description' => 'Apprendre à lire les axes, les pics, la ligne de base et les résultats qualitatifs ou quantitatifs.',
                'questions' => [
                    [
                        'question' => 'Sur un chromatogramme, l’axe horizontal représente généralement…',
                        'explanation' => 'Selon la méthode, l’axe horizontal correspond généralement au temps de rétention ou au volume d’élution.',
                        'choices' => [
                            [
                                'choice_text' => 'Le temps ou le volume d’élution',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La masse de la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La couleur du solvant',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le pH du laboratoire',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement l’axe vertical ?',
                        'explanation' => 'Il correspond à une réponse du détecteur, par exemple une absorbance ou une intensité de signal.',
                        'choices' => [
                            [
                                'choice_text' => 'Une réponse du détecteur',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La masse du flacon',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La longueur de la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le volume de la salle',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux pics ont des temps de rétention très différents. Que peut-on conclure simplement ?',
                        'explanation' => 'Ils ont traversé le système à des vitesses différentes et sont séparés dans ces conditions.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils sont séparés dans ces conditions',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Ils sont forcément le même composé',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Ils ont forcément la même concentration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le détecteur ne fonctionne pas',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une ligne de base stable est-elle importante ?',
                        'explanation' => 'Une ligne de base stable facilite la lecture et l’intégration des pics.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle facilite l’interprétation des pics',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle rend les composés plus volatils',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle remplace la colonne',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle empêche la séparation',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un pic très large mais peu haut peut-il avoir une aire importante ?',
                        'explanation' => 'Oui. L’aire dépend de toute la surface du signal sous le pic, pas seulement de sa hauteur maximale.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Oui',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Seulement en CCM',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Seulement si le temps de rétention est nul',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux pics qui se chevauchent posent-ils un problème pour la quantification ?',
                        'explanation' => 'Lorsque les pics se superposent, il devient difficile d’attribuer séparément une aire fiable à chaque composé.',
                        'choices' => [
                            [
                                'choice_text' => 'La quantification séparée devient plus difficile',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La température devient impossible à mesurer',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La colonne cesse toujours de fonctionner',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Les composés deviennent automatiquement identiques',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un échantillon donne le même temps de rétention qu’un étalon dans les mêmes conditions. Quelle prudence garder ?',
                        'explanation' => 'Un temps de rétention identique est un bon indice, mais d’autres substances peuvent parfois coéluer. Une confirmation peut être nécessaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Le considérer comme une preuve absolue',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le considérer comme un indice utile mais pas toujours suffisant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'L’ignorer complètement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'En déduire directement la toxicité',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’aire d’un pic peut-elle être préférable à sa hauteur pour une quantification ?',
                        'explanation' => 'Elle prend en compte l’ensemble du signal du composé pendant son passage dans le détecteur.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle tient compte de l’ensemble du signal du pic',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Elle dépend uniquement de la couleur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle est toujours égale au temps de rétention',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Elle ne dépend pas du tout de la quantité',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un blanc présente un petit pic alors qu’aucun analyte n’a été ajouté. Que faut-il envisager ?',
                        'explanation' => 'Un pic dans le blanc peut signaler une contamination, une impureté du solvant ou un problème du système.',
                        'choices' => [
                            [
                                'choice_text' => 'Une contamination ou un problème analytique',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Une pureté parfaite de tout le système',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une absence de détecteur',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une réaction nucléaire',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les temps de rétention changent fortement entre plusieurs injections alors que l’échantillon est le même. Que vérifier en premier ?',
                        'explanation' => 'Il faut examiner les paramètres instrumentaux et chromatographiques : débit, température, composition de la phase mobile et état du système selon la méthode.',
                        'choices' => [
                            [
                                'choice_text' => 'Les conditions opératoires et instrumentales',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La couleur du cahier',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La taille de la pièce',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Le nom de l’opérateur uniquement',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choisir et contrôler une méthode chromatographique',
                'description' => 'Choisir une technique adaptée et reconnaître les pratiques qui améliorent la fiabilité des résultats.',
                'questions' => [
                    [
                        'question' => 'Un étudiant veut séparer rapidement les colorants d’une encre avec très peu de matériel. Que peut-il utiliser ?',
                        'explanation' => 'La CCM est simple, rapide et permet de visualiser plusieurs constituants d’un mélange.',
                        'choices' => [
                            [
                                'choice_text' => 'Une CCM',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Une GC obligatoirement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une balance seule',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Un thermomètre',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un échantillon contient un composé non volatil qui se décompose à haute température. Quelle technique est souvent plus adaptée que la GC ?',
                        'explanation' => 'La HPLC peut analyser de nombreux composés non volatils ou thermiquement fragiles sans passer par une étape de vaporisation.',
                        'choices' => [
                            [
                                'choice_text' => 'HPLC',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'GC dans tous les cas',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une simple filtration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Une mesure de densité',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un mélange contient des molécules petites, volatiles et stables à la température de l’analyse. Quelle technique peut être pertinente ?',
                        'explanation' => 'La GC est particulièrement adaptée aux composés volatils et thermiquement stables.',
                        'choices' => [
                            [
                                'choice_text' => 'GC',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'HPLC uniquement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Filtration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Titrage acido-basique',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un laboratoire souhaite récupérer les composés après leur séparation dans plusieurs fractions. Quelle méthode est pratique ?',
                        'explanation' => 'La chromatographie en colonne permet de recueillir les composés successivement à la sortie de la colonne.',
                        'choices' => [
                            [
                                'choice_text' => 'Chromatographie en colonne',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'CCM uniquement',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'pH-métrie',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Mesure de masse sans séparation',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas comparer directement des Rf obtenus avec des solvants différents ?',
                        'explanation' => 'Le Rf dépend des conditions expérimentales, notamment du solvant et de la phase stationnaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le Rf dépend des conditions chromatographiques',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Parce que le Rf est toujours supérieur à 1',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce qu’un Rf existe uniquement en GC',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Parce que la plaque change de composition',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un chromatogramme ne montre qu’un seul grand pic alors que l’échantillon devrait contenir plusieurs substances. Quelle possibilité doit être examinée ?',
                        'explanation' => 'Les composés peuvent coéluer, certains peuvent ne pas être détectés ou les conditions peuvent donner une séparation insuffisante.',
                        'choices' => [
                            [
                                'choice_text' => 'Une coélution ou une mauvaise séparation/détection',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'La présence obligatoire d’un seul composé',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'L’absence de toute phase stationnaire',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'La disparition automatique de la colonne',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyse-t-on parfois plusieurs fois le même échantillon ?',
                        'explanation' => 'Les répétitions permettent d’évaluer la reproductibilité de la méthode et d’identifier une mesure anormale.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour vérifier la reproductibilité',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour modifier la molécule',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour changer le nom du produit',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour supprimer le détecteur',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi doit-on garder constants les paramètres importants lorsqu’on compare plusieurs chromatogrammes ?',
                        'explanation' => 'Des changements de débit, température ou composition de la phase mobile peuvent déplacer les pics et modifier la séparation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour rendre les résultats comparables',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute migration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour augmenter automatiquement la concentration',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Pour rendre tous les pics identiques',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle erreur peut conduire à une mauvaise identification d’un composé ?',
                        'explanation' => 'Se fier à un seul indice sans tenir compte des témoins, des conditions de mesure et des autres résultats peut conduire à une conclusion erronée.',
                        'choices' => [
                            [
                                'choice_text' => 'Attribuer une identité certaine à partir d’un seul indice insuffisant',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Utiliser un étalon',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Répéter l’expérience',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Noter les conditions expérimentales',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est particulièrement important lorsqu’on choisit une méthode chromatographique ?',
                        'explanation' => 'Le choix doit tenir compte des propriétés du composé et de ce que l’on veut mesurer ou séparer.',
                        'choices' => [
                            [
                                'choice_text' => 'Adapter la méthode aux propriétés des composés et à l’objectif de l’analyse',
                                'is_correct' => 1,
                            ],
                            [
                                'choice_text' => 'Utiliser toujours la même technique',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Choisir uniquement selon la couleur de l’échantillon',
                                'is_correct' => 0,
                            ],
                            [
                                'choice_text' => 'Éviter toute comparaison avec un étalon',
                                'is_correct' => 0,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
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
                        'explanation' => $questionData['explanation'] ?? null,
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
