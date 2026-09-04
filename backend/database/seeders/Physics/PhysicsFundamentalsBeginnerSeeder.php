<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhysicsFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'physics-fundamentals')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Grandeurs, unités et mesures
            // ============================================================

            [
                'title' => 'Grandeurs physiques et unités fondamentales',
                'description' => 'Introduction aux grandeurs physiques, aux unités SI et aux notions élémentaires de mesure.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI de la longueur ?',
                        'choices' => [
                            ['choice_text' => 'Le mètre', 'is_correct' => true],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'La seconde', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le Système international d’unités, la longueur est mesurée en mètres (m).',
                    ],

                    [
                        'question' => 'Quelle grandeur physique est mesurée en kilogrammes ?',
                        'choices' => [
                            ['choice_text' => 'La masse', 'is_correct' => true],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le kilogramme (kg) est l’unité SI de la masse.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI du temps ?',
                        'choices' => [
                            ['choice_text' => 'La seconde', 'is_correct' => true],
                            ['choice_text' => 'L’heure', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'La seconde (s) est l’unité fondamentale du temps dans le Système international.',
                    ],

                    [
                        'question' => 'Quelle grandeur est exprimée en ampères ?',
                        'choices' => [
                            ['choice_text' => 'L’intensité du courant électrique', 'is_correct' => true],
                            ['choice_text' => 'La tension électrique', 'is_correct' => false],
                            ['choice_text' => 'La résistance électrique', 'is_correct' => false],
                            ['choice_text' => 'La puissance mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampère (A) est l’unité SI de l’intensité du courant électrique.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la température thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'Le kelvin', 'is_correct' => true],
                            ['choice_text' => 'Le degré Celsius', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le kelvin (K) est l’unité SI de la température thermodynamique.',
                    ],

                    [
                        'question' => 'Quel instrument est couramment utilisé pour mesurer une durée ?',
                        'choices' => [
                            ['choice_text' => 'Un chronomètre', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chronomètre permet de mesurer une durée ou un intervalle de temps.',
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
                        'question' => 'Quelle grandeur est mesurée en newtons ?',
                        'choices' => [
                            ['choice_text' => La force', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'Le newton (N) est l’unité SI de la force.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule (J) est l’unité SI de l’énergie et du travail.',
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on des unités normalisées en physique ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre des mesures et des comparaisons cohérentes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les incertitudes de mesure', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les grandeurs sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’utilisation de nombres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les unités normalisées permettent d’exprimer et de comparer les grandeurs physiques de manière cohérente.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Mouvement et vitesse
            // ============================================================

            [
                'title' => 'Notions fondamentales de mouvement',
                'description' => 'Découverte du mouvement, de la trajectoire, de la distance parcourue et de la vitesse.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un mouvement en physique ?',
                        'choices' => [
                            ['choice_text' => 'Une variation de la position d’un objet au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation obligatoire de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une variation obligatoire de température', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de déplacement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet est en mouvement lorsque sa position change au cours du temps par rapport à un référentiel.',
                    ],

                    [
                        'question' => 'Quelle grandeur indique la rapidité avec laquelle un objet se déplace ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse caractérise la variation de la position d’un objet au cours du temps.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Le mètre par seconde', 'is_correct' => true],
                            ['choice_text' => 'Le kilomètre', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le mètre carré', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité SI de la vitesse est le mètre par seconde (m/s).',
                    ],

                    [
                        'question' => 'Un objet parcourt 100 mètres en 20 secondes. Quelle est sa vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => '5 m/s', 'is_correct' => true],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '120 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse moyenne vaut distance parcourue divisée par la durée : 100 / 20 = 5 m/s.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on la ligne suivie par un objet en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La trajectoire est l’ensemble des positions successives occupées par un objet au cours de son mouvement.',
                    ],

                    [
                        'question' => 'Quel type de trajectoire possède un objet qui se déplace sur une ligne droite ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire rectiligne', 'is_correct' => true],
                            ['choice_text' => 'Une trajectoire circulaire', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire sinusoïdale', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire aléatoire par définition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une trajectoire rectiligne est une trajectoire située sur une ligne droite.',
                    ],

                    [
                        'question' => 'Que signifie qu’un objet est immobile par rapport à un référentiel ?',
                        'choices' => [
                            ['choice_text' => 'Sa position reste constante dans ce référentiel', 'is_correct' => true],
                            ['choice_text' => 'Sa masse devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Il ne subit aucune force', 'is_correct' => false],
                            ['choice_text' => 'Sa température reste constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet est immobile dans un référentiel si sa position ne change pas par rapport à ce référentiel.',
                    ],

                    [
                        'question' => 'Un mouvement dont la vitesse reste constante est appelé mouvement...',
                        'choices' => [
                            ['choice_text' => 'Uniforme', 'is_correct' => true],
                            ['choice_text' => 'Accéléré uniquement', 'is_correct' => false],
                            ['choice_text' => 'Thermique', 'is_correct' => false],
                            ['choice_text' => 'Électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mouvement uniforme est caractérisé par une vitesse constante.',
                    ],

                    [
                        'question' => 'Si un véhicule passe de 10 m/s à 20 m/s, sa vitesse...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Passer de 10 m/s à 20 m/s correspond à une augmentation de la vitesse.',
                    ],

                    [
                        'question' => 'Quel élément est nécessaire pour décrire la position d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'Un référentiel ou système de référence', 'is_correct' => true],
                            ['choice_text' => 'Une source lumineuse obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une température de référence obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une masse nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La position d’un objet est définie par rapport à un référentiel choisi.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Forces et lois de Newton
            // ============================================================

            [
                'title' => 'Forces et interactions mécaniques',
                'description' => 'Introduction aux forces, aux interactions et aux principes élémentaires de la mécanique newtonienne.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une force en mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Une interaction capable de modifier le mouvement ou de déformer un objet', 'is_correct' => true],
                            ['choice_text' => 'Une unité de masse', 'is_correct' => false],
                            ['choice_text' => 'Une mesure de température', 'is_correct' => false],
                            ['choice_text' => 'Une forme particulière d’énergie uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force traduit une interaction pouvant modifier le mouvement d’un objet ou provoquer sa déformation.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la force ?',
                        'choices' => [
                            ['choice_text' => 'Le newton', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                        ],
                        'explanation' => 'La force se mesure en newtons (N).',
                    ],

                    [
                        'question' => 'Quelle force attire les objets vers la Terre ?',
                        'choices' => [
                            ['choice_text' => 'La force gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'La force électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force magnétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force de pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’attraction gravitationnelle de la Terre exerce une force sur les objets ayant une masse.',
                    ],

                    [
                        'question' => 'Selon la première loi de Newton, si la résultante des forces est nulle, un objet peut...',
                        'choices' => [
                            ['choice_text' => 'Rester au repos ou conserver un mouvement rectiligne uniforme', 'is_correct' => true],
                            ['choice_text' => 'Accélérer obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Changer nécessairement de direction', 'is_correct' => false],
                            ['choice_text' => 'Voir sa masse disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d’inertie indique qu’un corps conserve son état de repos ou son mouvement rectiligne uniforme si la résultante des forces est nulle.',
                    ],

                    [
                        'question' => 'Quelle relation correspond à la deuxième loi de Newton dans un cas simple de masse constante ?',
                        'choices' => [
                            ['choice_text' => 'F = ma', 'is_correct' => true],
                            ['choice_text' => 'F = m/a', 'is_correct' => false],
                            ['choice_text' => 'F = a/m', 'is_correct' => false],
                            ['choice_text' => 'F = m + a', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une masse constante, la deuxième loi de Newton s’écrit F = ma, où F est la résultante des forces.',
                    ],

                    [
                        'question' => 'Si la force résultante appliquée à une masse constante augmente, son accélération...',
                        'choices' => [
                            ['choice_text' => 'Augmente dans la même proportion', 'is_correct' => true],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendante de la force', 'is_correct' => false],
                        ],
                        'explanation' => 'D’après F = ma, à masse constante, l’accélération est proportionnelle à la force résultante.',
                    ],

                    [
                        'question' => 'La force exercée par un objet A sur un objet B possède, selon la troisième loi de Newton...',
                        'choices' => [
                            ['choice_text' => 'Une force réciproque exercée par B sur A, de même intensité et de sens opposé', 'is_correct' => true],
                            ['choice_text' => 'Aucune force réciproque', 'is_correct' => false],
                            ['choice_text' => 'Une force toujours deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Une force uniquement si les objets sont immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La troisième loi de Newton décrit les forces d’action-réaction : elles sont de même intensité et de directions opposées, exercées sur deux corps différents.',
                    ],

                    [
                        'question' => 'Quelle force s’oppose généralement au mouvement relatif de deux surfaces en contact ?',
                        'choices' => [
                            ['choice_text' => 'La force de frottement', 'is_correct' => true],
                            ['choice_text' => 'La force gravitationnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force nucléaire', 'is_correct' => false],
                            ['choice_text' => 'La force de poussée d’Archimède uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de frottement s’oppose au mouvement relatif ou à la tendance au mouvement entre des surfaces en contact.',
                    ],

                    [
                        'question' => 'Quel est le poids approximatif d’un objet de masse 2 kg près de la surface terrestre, avec g ≈ 9,8 N/kg ?',
                        'choices' => [
                            ['choice_text' => '19,6 N', 'is_correct' => true],
                            ['choice_text' => '4,9 N', 'is_correct' => false],
                            ['choice_text' => '2 N', 'is_correct' => false],
                            ['choice_text' => '98 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poids vaut P = mg. Donc P = 2 × 9,8 = 19,6 N.',
                    ],

                    [
                        'question' => 'Quelle différence fondamentale existe entre la masse et le poids ?',
                        'choices' => [
                            ['choice_text' => 'La masse mesure l’inertie tandis que le poids est une force gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'La masse et le poids sont exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'Le poids se mesure en kilogrammes et la masse en newtons', 'is_correct' => false],
                            ['choice_text' => 'La masse dépend toujours directement de la valeur locale de g', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse se mesure en kilogrammes et caractérise notamment l’inertie. Le poids est une force, généralement donnée par P = mg près de la surface terrestre.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Travail, énergie et puissance
            // ============================================================

            [
                'title' => 'Travail, énergie et puissance',
                'description' => 'Introduction aux notions de travail mécanique, d’énergie et de puissance.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI du travail mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail mécanique est une forme de transfert d’énergie et se mesure en joules (J).',
                    ],

                    [
                        'question' => 'Quelle grandeur mesure la capacité d’un système à produire une transformation ou un travail ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie', 'is_correct' => true],
                            ['choice_text' => 'La masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie caractérise la capacité d’un système à effectuer un travail ou à provoquer une transformation.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la puissance ?',
                        'choices' => [
                            ['choice_text' => 'Le watt', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance mesure la rapidité d’un transfert d’énergie et s’exprime en watts (W).',
                    ],

                    [
                        'question' => 'Une puissance de 100 W signifie qu’un système transfère en moyenne...',
                        'choices' => [
                            ['choice_text' => '100 joules par seconde', 'is_correct' => true],
                            ['choice_text' => '100 newtons par seconde', 'is_correct' => false],
                            ['choice_text' => '100 kilogrammes par seconde', 'is_correct' => false],
                            ['choice_text' => '100 mètres par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Un watt correspond à un joule par seconde. Ainsi, 100 W correspondent à 100 J/s.',
                    ],

                    [
                        'question' => 'Quelle énergie possède un objet en raison de son mouvement ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'L’énergie thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie nucléaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie chimique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique est l’énergie associée au mouvement d’un objet.',
                    ],

                    [
                        'question' => 'Quelle énergie est associée à la position d’un objet dans un champ gravitationnel ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie potentielle gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'L’énergie cinétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie sonore uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La position d’un objet dans un champ gravitationnel peut lui conférer une énergie potentielle gravitationnelle.',
                    ],

                    [
                        'question' => 'Que signifie la conservation de l’énergie dans un système isolé idéal ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie totale reste constante, même si elle change de forme', 'is_correct' => true],
                            ['choice_text' => 'Toute énergie disparaît progressivement', 'is_correct' => false],
                            ['choice_text' => 'Seule l’énergie cinétique peut exister', 'is_correct' => false],
                            ['choice_text' => 'La masse doit toujours devenir nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système isolé, l’énergie totale se conserve, même si elle est transformée d’une forme à une autre.',
                    ],

                    [
                        'question' => 'Quelle relation donne le travail d’une force constante parallèle au déplacement ?',
                        'choices' => [
                            ['choice_text' => 'W = Fd', 'is_correct' => true],
                            ['choice_text' => 'W = F/d', 'is_correct' => false],
                            ['choice_text' => 'W = F + d', 'is_correct' => false],
                            ['choice_text' => 'W = d/F', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque la force est constante et parallèle au déplacement, le travail vaut W = Fd.',
                    ],

                    [
                        'question' => 'Si une même quantité d’énergie est transférée en moins de temps, la puissance moyenne...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement identique', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance est le rapport entre l’énergie transférée et la durée. Pour une même énergie, réduire la durée augmente la puissance.',
                    ],

                    [
                        'question' => 'Un appareil consomme 600 J en 10 s. Quelle est sa puissance moyenne ?',
                        'choices' => [
                            ['choice_text' => '60 W', 'is_correct' => true],
                            ['choice_text' => '6 W', 'is_correct' => false],
                            ['choice_text' => '6000 W', 'is_correct' => false],
                            ['choice_text' => '610 W', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance moyenne est P = E/t = 600/10 = 60 W.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Pression, fluides et poussée
            // ============================================================

            [
                'title' => 'Pression et propriétés élémentaires des fluides',
                'description' => 'Notions fondamentales sur la pression, les fluides et les effets mécaniques dans les liquides et les gaz.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI de la pression ?',
                        'choices' => [
                            ['choice_text' => 'Le pascal', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pascal (Pa) est l’unité SI de la pression.',
                    ],

                    [
                        'question' => 'Comment définit-on la pression exercée par une force répartie uniformément sur une surface ?',
                        'choices' => [
                            ['choice_text' => 'p = F/S', 'is_correct' => true],
                            ['choice_text' => 'p = F × S', 'is_correct' => false],
                            ['choice_text' => 'p = S/F', 'is_correct' => false],
                            ['choice_text' => 'p = F + S', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression est le rapport entre la force normale exercée et la surface sur laquelle elle est répartie.',
                    ],

                    [
                        'question' => 'À profondeur croissante dans un liquide au repos, la pression augmente généralement parce que...',
                        'choices' => [
                            ['choice_text' => 'La colonne de liquide située au-dessus devient plus importante', 'is_correct' => true],
                            ['choice_text' => 'La masse du liquide disparaît', 'is_correct' => false],
                            ['choice_text' => 'La température devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un liquide au repos, la pression hydrostatique augmente avec la profondeur en raison du poids du liquide situé au-dessus.',
                    ],

                    [
                        'question' => 'Quelle force verticale vers le haut un fluide peut-il exercer sur un objet immergé ?',
                        'choices' => [
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => true],
                            ['choice_text' => 'La force de frottement sec uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force centrifuge uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force électrique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La poussée d’Archimède est la force exercée par un fluide sur un corps immergé et elle est dirigée vers le haut dans le cas habituel.',
                    ],

                    [
                        'question' => 'Un objet flotte lorsque, dans les conditions d’équilibre, sa poussée d’Archimède...',
                        'choices' => [
                            ['choice_text' => 'Compense son poids', 'is_correct' => true],
                            ['choice_text' => 'Est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Est nécessairement deux fois son poids', 'is_correct' => false],
                            ['choice_text' => 'Est dirigée vers le bas', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet flottant à l’équilibre, la poussée d’Archimède compense le poids.',
                    ],

                    [
                        'question' => 'Dans un gaz au repos, la pression est liée notamment...',
                        'choices' => [
                            ['choice_text' => Aux collisions des particules du gaz avec les parois', 'is_correct' => true],
                            ['choice_text' => 'À l’absence totale de mouvement des particules', 'is_correct' => false],
                            ['choice_text' => 'À la masse uniquement sans aucun autre facteur', 'is_correct' => false],
                            ['choice_text' => 'À la couleur du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’échelle microscopique, la pression d’un gaz résulte notamment des collisions des particules avec les parois.',
                    ],

                    [
                        'question' => 'Quelle unité de pression est couramment utilisée en météorologie ?',
                        'choices' => [
                            ['choice_text' => 'L’hectopascal', 'is_correct' => true],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'Le joule par seconde', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hectopascal (hPa) est couramment utilisé pour exprimer la pression atmosphérique.',
                    ],

                    [
                        'question' => 'Si la même force est appliquée sur une surface deux fois plus petite, la pression moyenne devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus petite', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Inchangée dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme p = F/S, réduire la surface de moitié à force constante double la pression.',
                    ],

                    [
                        'question' => 'Pourquoi un objet très lourd peut-il exercer une pression importante sur le sol ?',
                        'choices' => [
                            ['choice_text' => 'Parce que son poids peut être important par rapport à la surface de contact', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse ne joue aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'Parce que la pression ne dépend jamais de la surface', 'is_correct' => false],
                            ['choice_text' => 'Parce que le sol produit toujours une pression nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression dépend de la force exercée et de la surface de contact. Le poids d’un objet lourd peut donc produire une pression élevée.',
                    ],

                    [
                        'question' => 'Quel état de la matière possède généralement un volume propre mais prend la forme de son récipient ?',
                        'choices' => [
                            ['choice_text' => 'Le liquide', 'is_correct' => true],
                            ['choice_text' => 'Le solide', 'is_correct' => false],
                            ['choice_text' => 'Le vide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide conserve généralement son volume mais adopte la forme du récipient qui le contient.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Température et chaleur
            // ============================================================

            [
                'title' => 'Température, chaleur et transferts thermiques',
                'description' => 'Introduction aux notions de température, chaleur et modes élémentaires de transfert thermique.',
                'questions' => [

                    [
                        'question' => 'Que mesure principalement la température d’un système ?',
                        'choices' => [
                            ['choice_text' => 'Son état thermique', 'is_correct' => true],
                            ['choice_text' => 'Sa masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Son volume uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa vitesse de déplacement globale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La température caractérise l’état thermique d’un système et est liée, à l’échelle microscopique, à l’agitation thermique.',
                    ],

                    [
                        'question' => 'Quel instrument permet de mesurer la température ?',
                        'choices' => [
                            ['choice_text' => 'Un thermomètre', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un thermomètre est conçu pour mesurer la température.',
                    ],

                    [
                        'question' => 'Quelle unité est souvent utilisée dans la vie courante pour mesurer la température ?',
                        'choices' => [
                            ['choice_text' => 'Le degré Celsius', 'is_correct' => true],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré Celsius (°C) est très couramment utilisé pour exprimer la température, même si l’unité SI est le kelvin.',
                    ],

                    [
                        'question' => 'Dans quelle direction la chaleur se transfère-t-elle spontanément entre deux corps à températures différentes ?',
                        'choices' => [
                            ['choice_text' => 'Du corps le plus chaud vers le corps le plus froid', 'is_correct' => true],
                            ['choice_text' => 'Du corps le plus froid vers le corps le plus chaud uniquement', 'is_correct' => false],
                            ['choice_text' => 'Toujours du corps le plus lourd vers le plus léger', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais être transférée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert thermique spontané se produit du système à température plus élevée vers celui à température plus faible.',
                    ],

                    [
                        'question' => 'Quel mode de transfert thermique peut se produire par contact direct dans un solide ?',
                        'choices' => [
                            ['choice_text' => 'La conduction', 'is_correct' => true],
                            ['choice_text' => 'La convection uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réfraction', 'is_correct' => false],
                            ['choice_text' => 'La diffraction', 'is_correct' => false],
                        ],
                        'explanation' => 'La conduction est un transfert thermique qui peut se produire à travers un matériau par interaction entre ses constituants.',
                    ],

                    [
                        'question' => 'Quel phénomène de transfert thermique implique généralement un déplacement global d’un fluide ?',
                        'choices' => [
                            ['choice_text' => 'La convection', 'is_correct' => true],
                            ['choice_text' => 'La conduction uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réflexion', 'is_correct' => false],
                            ['choice_text' => 'La polarisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La convection implique un mouvement de matière dans un fluide, ce qui permet de transporter de l’énergie thermique.',
                    ],

                    [
                        'question' => 'Quel mode de transfert thermique peut se produire dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Le rayonnement', 'is_correct' => true],
                            ['choice_text' => 'La conduction uniquement', 'is_correct' => false],
                            ['choice_text' => 'La convection uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucun transfert thermique n’est possible dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement électromagnétique peut transporter de l’énergie thermique sans nécessiter de milieu matériel.',
                    ],

                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’un matériau est chauffé ?',
                        'choices' => [
                            ['choice_text' => Sa température peut augmenter et ses dimensions peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Sa masse disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'Il devient nécessairement gazeux', 'is_correct' => false],
                            ['choice_text' => 'Toutes ses propriétés restent obligatoirement inchangées', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chauffage peut augmenter la température et provoquer notamment une dilatation thermique, selon le matériau et les conditions.',
                    ],

                    [
                        'question' => 'Deux objets à la même température sont mis en contact thermique idéal. Le transfert thermique net entre eux est...',
                        'choices' => [
                            ['choice_text' => 'Nul à l’équilibre thermique', 'is_correct' => true],
                            ['choice_text' => 'Toujours dirigé vers le premier objet', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigé vers le second objet', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre thermique, les deux objets ont la même température et il n’existe pas de transfert thermique net entre eux.',
                    ],

                    [
                        'question' => 'Une augmentation de la température correspond généralement à une augmentation de...',
                        'choices' => [
                            ['choice_text' => 'L’agitation thermique microscopique', 'is_correct' => true],
                            ['choice_text' => 'La masse totale de manière obligatoire', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique totale obligatoire', 'is_correct' => false],
                            ['choice_text' => 'La gravité locale', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’échelle microscopique, une température plus élevée est généralement associée à une agitation thermique plus importante.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Électricité fondamentale
            // ============================================================

            [
                'title' => 'Notions fondamentales d’électricité',
                'description' => 'Introduction à la charge électrique, au courant, à la tension et aux circuits électriques simples.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur se mesure en coulombs ?',
                        'choices' => [
                            ['choice_text' => 'La charge électrique', 'is_correct' => true],
                            ['choice_text' => 'La tension électrique', 'is_correct' => false],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coulomb (C) est l’unité de la charge électrique.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’intensité du courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’ampère', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intensité du courant électrique se mesure en ampères (A).',
                    ],

                    [
                        'question' => 'Quelle unité mesure la tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => true],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension électrique, ou différence de potentiel, se mesure en volts (V).',
                    ],

                    [
                        'question' => 'Quelle unité mesure la résistance électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’ohm', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance électrique se mesure en ohms (Ω).',
                    ],

                    [
                        'question' => 'Quelle relation correspond à la loi d’Ohm pour un conducteur ohmique ?',
                        'choices' => [
                            ['choice_text' => 'U = RI', 'is_correct' => true],
                            ['choice_text' => 'U = R/I', 'is_correct' => false],
                            ['choice_text' => 'U = R + I', 'is_correct' => false],
                            ['choice_text' => 'U = I/R', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d’Ohm s’écrit U = RI, où U est la tension, R la résistance et I l’intensité.',
                    ],

                    [
                        'question' => 'Quel instrument mesure l’intensité du courant ?',
                        'choices' => [
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampèremètre est utilisé pour mesurer l’intensité du courant électrique.',
                    ],

                    [
                        'question' => 'Quel instrument mesure une tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'Un voltmètre', 'is_correct' => true],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voltmètre mesure la différence de potentiel entre deux points d’un circuit.',
                    ],

                    [
                        'question' => 'Dans un circuit électrique simple, quel élément fournit généralement de l’énergie électrique au circuit ?',
                        'choices' => [
                            ['choice_text' => 'Le générateur', 'is_correct' => true],
                            ['choice_text' => 'Le conducteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le fusible uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le fil ouvert', 'is_correct' => false],
                        ],
                        'explanation' => 'Le générateur fournit de l’énergie électrique au circuit, par exemple une pile ou une alimentation.',
                    ],

                    [
                        'question' => 'Que se passe-t-il généralement dans un circuit ouvert ?',
                        'choices' => [
                            ['choice_text' => 'Le courant ne circule pas dans la branche interrompue', 'is_correct' => true],
                            ['choice_text' => 'Le courant devient nécessairement infini', 'is_correct' => false],
                            ['choice_text' => 'La résistance totale devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La tension disparaît partout dans l’univers', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interruption du circuit empêche normalement le passage du courant dans la branche concernée.',
                    ],

                    [
                        'question' => 'Si une résistance de 10 Ω est traversée par un courant de 2 A, quelle tension est nécessaire selon la loi d’Ohm ?',
                        'choices' => [
                            ['choice_text' => '20 V', 'is_correct' => true],
                            ['choice_text' => '5 V', 'is_correct' => false],
                            ['choice_text' => '12 V', 'is_correct' => false],
                            ['choice_text' => '0,2 V', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec U = RI, on obtient U = 10 × 2 = 20 V.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Ondes, lumière et concepts fondamentaux
            // ============================================================

            [
                'title' => 'Ondes, lumière et phénomènes physiques élémentaires',
                'description' => 'Introduction aux ondes, à la lumière, au son et à quelques phénomènes physiques fondamentaux.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une onde ?',
                        'choices' => [
                            ['choice_text' => 'Une perturbation qui se propage en transportant de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Un objet matériel qui se déplace toujours avec la perturbation', 'is_correct' => false],
                            ['choice_text' => 'Une masse qui devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Une force immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde correspond à la propagation d’une perturbation qui peut transporter de l’énergie sans transporter nécessairement de matière de façon globale.',
                    ],

                    [
                        'question' => 'Le son dans l’air est principalement une onde...',
                        'choices' => [
                            ['choice_text' => 'Mécanique', 'is_correct' => true],
                            ['choice_text' => 'Électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Gravitationnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Électrique statique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son nécessite un milieu matériel pour se propager. C’est donc une onde mécanique.',
                    ],

                    [
                        'question' => 'La lumière visible est une onde...',
                        'choices' => [
                            ['choice_text' => 'Électromagnétique', 'is_correct' => true],
                            ['choice_text' => 'Mécanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sonore', 'is_correct' => false],
                            ['choice_text' => 'Hydrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière visible appartient au spectre électromagnétique et peut se propager dans le vide.',
                    ],

                    [
                        'question' => 'Quelle grandeur caractérise le nombre de cycles d’une onde par seconde ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La densité', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence indique le nombre de cycles ou oscillations par seconde et se mesure en hertz.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Le hertz', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                            ['choice_text' => 'Le tesla', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence se mesure en hertz (Hz), soit des cycles par seconde.',
                    ],

                    [
                        'question' => 'Que représente la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'La distance entre deux points successifs en phase, comme deux crêtes', 'is_correct' => true],
                            ['choice_text' => 'La durée totale d’existence d’une onde', 'is_correct' => false],
                            ['choice_text' => 'La masse d’une particule', 'is_correct' => false],
                            ['choice_text' => 'La puissance totale d’une source', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’onde est la distance séparant deux points successifs qui vibrent en phase, par exemple deux crêtes consécutives.',
                    ],

                    [
                        'question' => 'Quel phénomène se produit lorsqu’une onde lumineuse change de direction en passant d’un milieu à un autre ?',
                        'choices' => [
                            ['choice_text' => 'La réfraction', 'is_correct' => true],
                            ['choice_text' => 'La combustion', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La conduction', 'is_correct' => false],
                        ],
                        'explanation' => 'La réfraction correspond au changement de direction d’une onde lorsqu’elle passe d’un milieu à un autre avec des propriétés de propagation différentes.',
                    ],

                    [
                        'question' => 'Que se produit-il lorsqu’une onde lumineuse rencontre une surface et revient dans le premier milieu ?',
                        'choices' => [
                            ['choice_text' => 'Une réflexion', 'is_correct' => true],
                            ['choice_text' => 'Une fusion', 'is_correct' => false],
                            ['choice_text' => 'Une conduction', 'is_correct' => false],
                            ['choice_text' => 'Une ionisation obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion est le retour d’une onde vers son milieu d’origine après interaction avec une surface.',
                    ],

                    [
                        'question' => 'Dans le vide, quelle est approximativement la vitesse de propagation de la lumière ?',
                        'choices' => [
                            ['choice_text' => '3 × 10⁸ m/s', 'is_correct' => true],
                            ['choice_text' => '3 × 10⁴ m/s', 'is_correct' => false],
                            ['choice_text' => '3 × 10² m/s', 'is_correct' => false],
                            ['choice_text' => '3 × 10¹² m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, la lumière se propage à environ 3 × 10⁸ m/s.',
                    ],

                    [
                        'question' => 'Si la fréquence d’une onde est multipliée par deux et que sa vitesse reste constante, sa longueur d’onde...',
                        'choices' => [
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => true],
                            ['choice_text' => 'Est multipliée par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation v = λf montre qu’à vitesse constante, la longueur d’onde λ est inversement proportionnelle à la fréquence f.',
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

                // Mélange des objets complets afin que is_correct
                // reste attaché à la bonne réponse.
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