<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalMechanicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-mechanics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Repères, position et mouvement
            // ============================================================

            [
                'title' => 'Position, référentiels et mouvement',
                'description' => 'Introduction aux concepts de position, référentiel, trajectoire et mouvement en mécanique classique.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un référentiel en mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Un système de référence par rapport auquel on décrit les positions et les mouvements', 'is_correct' => true],
                            ['choice_text' => 'Une unité de mesure de la force', 'is_correct' => false],
                            ['choice_text' => 'Un instrument qui mesure uniquement la masse', 'is_correct' => false],
                            ['choice_text' => 'Une énergie associée au mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un référentiel permet de définir les positions et de décrire le mouvement des objets par rapport à une référence choisie.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on l’ensemble des positions successives occupées par un objet en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                        ],
                        'explanation' => 'La trajectoire est l’ensemble des positions successives d’un objet au cours de son mouvement.',
                    ],

                    [
                        'question' => 'Un objet est immobile par rapport à un référentiel lorsque...',
                        'choices' => [
                            ['choice_text' => 'Sa position reste constante dans ce référentiel', 'is_correct' => true],
                            ['choice_text' => 'Sa vitesse est infinie', 'is_correct' => false],
                            ['choice_text' => 'Sa masse devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Il ne subit aucune force', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immobilité signifie que la position de l’objet ne change pas par rapport au référentiel considéré.',
                    ],

                    [
                        'question' => 'La position d’un objet est-elle toujours la même quel que soit le référentiel choisi ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle dépend du référentiel', 'is_correct' => true],
                            ['choice_text' => 'Oui, dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf pour les objets lourds', 'is_correct' => false],
                            ['choice_text' => 'Non, uniquement pour les objets immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La position est une grandeur relative au référentiel utilisé pour la description du mouvement.',
                    ],

                    [
                        'question' => 'Une voiture se déplace sur une route droite. Quel type de trajectoire décrit-elle idéalement ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire rectiligne', 'is_correct' => true],
                            ['choice_text' => 'Une trajectoire circulaire', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire elliptique', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le véhicule se déplace le long d’une ligne droite, sa trajectoire est rectiligne.',
                    ],

                    [
                        'question' => 'Quelle grandeur indique la rapidité de déplacement d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse caractérise l’évolution de la position d’un objet au cours du temps.',
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
                        'question' => 'Quelle grandeur représente le changement de vitesse par unité de temps ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération', 'is_correct' => true],
                            ['choice_text' => 'La distance', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération mesure la variation de la vitesse au cours du temps.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'Le mètre par seconde carrée', 'is_correct' => true],
                            ['choice_text' => 'Le mètre par seconde', 'is_correct' => false],
                            ['choice_text' => 'Le newton par seconde', 'is_correct' => false],
                            ['choice_text' => 'Le kilogramme par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération s’exprime en m/s² car elle représente une variation de vitesse par unité de temps.',
                    ],

                    [
                        'question' => 'Si la position d’un objet change au cours du temps dans un référentiel donné, l’objet est...',
                        'choices' => [
                            ['choice_text' => 'En mouvement dans ce référentiel', 'is_correct' => true],
                            ['choice_text' => 'Nécessairement immobile', 'is_correct' => false],
                            ['choice_text' => 'Sans masse', 'is_correct' => false],
                            ['choice_text' => 'À température constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement est défini par une variation de la position au cours du temps dans le référentiel considéré.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Vitesse et accélération
            // ============================================================

            [
                'title' => 'Vitesse et accélération',
                'description' => 'Étude des notions fondamentales de vitesse, vitesse moyenne et accélération.',
                'questions' => [

                    [
                        'question' => 'Un cycliste parcourt 100 m en 20 s. Quelle est sa vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => '5 m/s', 'is_correct' => true],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '120 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse moyenne vaut distance divisée par durée : 100/20 = 5 m/s.',
                    ],

                    [
                        'question' => 'Un objet se déplace à vitesse constante sur une ligne droite. Son accélération est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours égale à 1 m/s²', 'is_correct' => false],
                            ['choice_text' => 'Toujours maximale', 'is_correct' => false],
                            ['choice_text' => 'Égale à sa vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse constante signifie qu’il n’y a pas de variation de vitesse, donc l’accélération est nulle.',
                    ],

                    [
                        'question' => 'Une voiture passe de 10 m/s à 20 m/s. Sa vitesse...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Passer de 10 m/s à 20 m/s correspond à une augmentation de la vitesse.',
                    ],

                    [
                        'question' => 'Une accélération de 2 m/s² signifie que, pour une accélération constante, la vitesse varie de...',
                        'choices' => [
                            ['choice_text' => '2 m/s chaque seconde', 'is_correct' => true],
                            ['choice_text' => '2 m chaque seconde', 'is_correct' => false],
                            ['choice_text' => '2 m/s² chaque seconde', 'is_correct' => false],
                            ['choice_text' => '1 m/s toutes les 2 secondes uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération de 2 m/s² correspond à une variation de vitesse de 2 m/s par seconde.',
                    ],

                    [
                        'question' => 'Un objet initialement au repos a une accélération constante de 3 m/s². Quelle est sa vitesse après 4 s ?',
                        'choices' => [
                            ['choice_text' => '12 m/s', 'is_correct' => true],
                            ['choice_text' => '7 m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 m/s', 'is_correct' => false],
                            ['choice_text' => '16 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v0 = 0, v = v0 + at = 0 + 3 × 4 = 12 m/s.',
                    ],

                    [
                        'question' => 'Un objet ralentit sur une ligne droite. L’accélération est généralement...',
                        'choices' => [
                            ['choice_text' => 'Orientée en sens opposé à la vitesse', 'is_correct' => true],
                            ['choice_text' => 'Toujours dans le même sens que la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculaire à la vitesse dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un ralentissement rectiligne, l’accélération possède une composante opposée à la vitesse.',
                    ],

                    [
                        'question' => 'Un train roule à 15 m/s pendant 10 s à vitesse constante. Quelle distance parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '150 m', 'is_correct' => true],
                            ['choice_text' => '25 m', 'is_correct' => false],
                            ['choice_text' => '1500 m', 'is_correct' => false],
                            ['choice_text' => '1,5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une vitesse constante, d = vt = 15 × 10 = 150 m.',
                    ],

                    [
                        'question' => 'Quelle relation donne la position d’un objet en mouvement rectiligne uniforme ?',
                        'choices' => [
                            ['choice_text' => 'x = x0 + vt', 'is_correct' => true],
                            ['choice_text' => 'x = x0 + at', 'is_correct' => false],
                            ['choice_text' => 'x = v/t', 'is_correct' => false],
                            ['choice_text' => 'x = x0 + vt²', 'is_correct' => false],
                        ],
                        'explanation' => 'En mouvement rectiligne uniforme, x = x0 + vt.',
                    ],

                    [
                        'question' => 'Une balle possède une vitesse de 8 m/s vers l’est. Quelle information supplémentaire faut-il pour définir complètement le vecteur vitesse dans un plan ?',
                        'choices' => [
                            ['choice_text' => 'La direction et le sens sont déjà indiqués par « vers l’est »', 'is_correct' => true],
                            ['choice_text' => 'Sa masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa température', 'is_correct' => false],
                            ['choice_text' => 'Sa couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur 8 m/s donne la norme tandis que « vers l’est » précise la direction et le sens du vecteur vitesse.',
                    ],

                    [
                        'question' => 'Une accélération nulle signifie nécessairement que l’objet est immobile ?',
                        'choices' => [
                            ['choice_text' => 'Non, il peut se déplacer à vitesse constante', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf si sa masse est nulle', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement dans un référentiel circulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération nulle signifie que le vecteur vitesse est constant. L’objet peut donc être au repos ou en mouvement rectiligne uniforme.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Forces
            // ============================================================

            [
                'title' => 'Forces et interactions mécaniques',
                'description' => 'Introduction aux forces, à leur représentation et aux interactions mécaniques fondamentales.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une force en mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Une interaction pouvant modifier le mouvement ou déformer un objet', 'is_correct' => true],
                            ['choice_text' => 'Une unité de masse', 'is_correct' => false],
                            ['choice_text' => 'Une mesure de température', 'is_correct' => false],
                            ['choice_text' => 'Une durée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force traduit une interaction capable de modifier le mouvement d’un corps ou de le déformer.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la force ?',
                        'choices' => [
                            ['choice_text' => 'Le newton', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La force s’exprime en newtons (N).',
                    ],

                    [
                        'question' => 'Quelle force attire un objet vers la Terre ?',
                        'choices' => [
                            ['choice_text' => 'Le poids', 'is_correct' => true],
                            ['choice_text' => 'La force électrique', 'is_correct' => false],
                            ['choice_text' => 'La force magnétique', 'is_correct' => false],
                            ['choice_text' => 'La force de frottement uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poids est la force gravitationnelle exercée par la Terre sur un objet.',
                    ],

                    [
                        'question' => 'Quel instrument peut mesurer une force ?',
                        'choices' => [
                            ['choice_text' => 'Un dynamomètre', 'is_correct' => true],
                            ['choice_text' => 'Une balance uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un chronomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dynamomètre permet de mesurer l’intensité d’une force.',
                    ],

                    [
                        'question' => 'Une force possède-t-elle une direction et un sens ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car c’est une grandeur vectorielle', 'is_correct' => true],
                            ['choice_text' => 'Non, elle possède uniquement une masse', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est toujours scalaire', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais elle n’a jamais de norme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force est une grandeur vectorielle caractérisée notamment par une norme, une direction et un sens.',
                    ],

                    [
                        'question' => 'Quelle force s’oppose généralement au mouvement relatif entre deux surfaces en contact ?',
                        'choices' => [
                            ['choice_text' => 'La force de frottement', 'is_correct' => true],
                            ['choice_text' => 'Le poids uniquement', 'is_correct' => false],
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La force nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de frottement s’oppose au mouvement relatif ou à la tendance au mouvement entre deux surfaces.',
                    ],

                    [
                        'question' => 'Un objet posé sur une table subit généralement une force exercée par la table appelée...',
                        'choices' => [
                            ['choice_text' => 'Réaction normale', 'is_correct' => true],
                            ['choice_text' => 'Force gravitationnelle solaire', 'is_correct' => false],
                            ['choice_text' => 'Force magnétique', 'is_correct' => false],
                            ['choice_text' => 'Force de poussée d’Archimède uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La table exerce une force de contact normale dirigée perpendiculairement à sa surface.',
                    ],

                    [
                        'question' => 'Deux forces de même intensité et de sens opposés agissent sur un objet. Leur résultante est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Également orientée vers les deux directions', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à 1 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Des forces colinéaires, opposées et de même intensité se compensent.',
                    ],

                    [
                        'question' => 'Quelle différence existe entre la masse et le poids ?',
                        'choices' => [
                            ['choice_text' => 'La masse est une propriété de l’objet tandis que le poids est une force gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'La masse et le poids sont toujours la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'Le poids se mesure en kilogrammes', 'is_correct' => false],
                            ['choice_text' => 'La masse se mesure en newtons', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse se mesure en kilogrammes, tandis que le poids est une force mesurée en newtons.',
                    ],

                    [
                        'question' => 'Près de la surface terrestre, le poids d’un objet se calcule approximativement par...',
                        'choices' => [
                            ['choice_text' => 'P = mg', 'is_correct' => true],
                            ['choice_text' => 'P = m/g', 'is_correct' => false],
                            ['choice_text' => 'P = m + g', 'is_correct' => false],
                            ['choice_text' => 'P = g/m', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la surface terrestre, le poids est donné par P = mg avec g ≈ 9,8 m/s².',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Lois de Newton
            // ============================================================

            [
                'title' => 'Principes fondamentaux de Newton',
                'description' => 'Découverte des trois lois de Newton et de leur application à des situations simples.',
                'questions' => [

                    [
                        'question' => 'Que dit le principe d’inertie lorsqu’une résultante des forces est nulle ?',
                        'choices' => [
                            ['choice_text' => 'L’objet reste au repos ou conserve un mouvement rectiligne uniforme', 'is_correct' => true],
                            ['choice_text' => 'L’objet accélère toujours', 'is_correct' => false],
                            ['choice_text' => 'L’objet s’arrête toujours', 'is_correct' => false],
                            ['choice_text' => 'L’objet change nécessairement de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la résultante des forces est nulle, l’objet conserve son état de repos ou son mouvement rectiligne uniforme.',
                    ],

                    [
                        'question' => 'Quelle relation représente la deuxième loi de Newton pour une masse constante ?',
                        'choices' => [
                            ['choice_text' => 'F = ma', 'is_correct' => true],
                            ['choice_text' => 'F = m/a', 'is_correct' => false],
                            ['choice_text' => 'F = a/m', 'is_correct' => false],
                            ['choice_text' => 'F = m + a', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième loi de Newton s’écrit F = ma lorsque F représente la résultante des forces.',
                    ],

                    [
                        'question' => 'Une force résultante de 10 N agit sur une masse de 2 kg. Quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec a = F/m, on obtient a = 10/2 = 5 m/s².',
                    ],

                    [
                        'question' => 'Si la force résultante appliquée à une masse constante double, l’accélération...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon F = ma, à masse constante, l’accélération est proportionnelle à la force résultante.',
                    ],

                    [
                        'question' => 'Si la masse double alors que la force résultante reste constante, l’accélération...',
                        'choices' => [
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => true],
                            ['choice_text' => 'Double', 'is_correct' => false],
                            ['choice_text' => 'Est multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme a = F/m, doubler la masse à force constante divise l’accélération par deux.',
                    ],

                    [
                        'question' => 'La troisième loi de Newton est souvent appelée loi...',
                        'choices' => [
                            ['choice_text' => 'D’action et de réaction', 'is_correct' => true],
                            ['choice_text' => 'De conservation de l’énergie thermique', 'is_correct' => false],
                            ['choice_text' => 'De transformation de la masse', 'is_correct' => false],
                            ['choice_text' => 'De conservation du volume', 'is_correct' => false],
                        ],
                        'explanation' => 'La troisième loi de Newton décrit les forces d’action-réaction entre deux corps en interaction.',
                    ],

                    [
                        'question' => 'Selon la troisième loi de Newton, les forces d’action et de réaction sont...',
                        'choices' => [
                            ['choice_text' => 'De même intensité et de sens opposés, exercées sur deux corps différents', 'is_correct' => true],
                            ['choice_text' => 'De même direction et de même sens sur le même corps', 'is_correct' => false],
                            ['choice_text' => 'Toujours de valeurs différentes', 'is_correct' => false],
                            ['choice_text' => 'Présentes uniquement pour les objets immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les forces d’action-réaction ont la même norme et des directions opposées, mais elles s’exercent sur deux corps différents.',
                    ],

                    [
                        'question' => 'Un objet de 4 kg reçoit une force résultante de 12 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '48 m/s²', 'is_correct' => false],
                            ['choice_text' => '16 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,33 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = F/m = 12/4 = 3 m/s².',
                    ],

                    [
                        'question' => 'Un objet se déplace à vitesse constante sur une route horizontale. Dans un modèle simple, la résultante des forces horizontales est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours égale à la force motrice', 'is_correct' => false],
                            ['choice_text' => 'Également dirigée vers l’avant et l’arrière', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement égale au poids', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse constante implique une accélération nulle, donc la résultante des forces est nulle.',
                    ],

                    [
                        'question' => 'Pourquoi les ceintures de sécurité sont-elles liées au principe d’inertie ?',
                        'choices' => [
                            ['choice_text' => 'Elles empêchent le corps de continuer son mouvement vers l’avant lors d’un freinage', 'is_correct' => true],
                            ['choice_text' => 'Elles augmentent la masse du passager', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment la gravité', 'is_correct' => false],
                            ['choice_text' => 'Elles empêchent toute accélération du véhicule', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un freinage, le corps tend à conserver son mouvement. La ceinture exerce une force qui le ralentit avec le véhicule.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Travail et énergie
            // ============================================================

            [
                'title' => 'Travail et énergie mécanique',
                'description' => 'Introduction au travail d’une force, à l’énergie cinétique et à l’énergie potentielle.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI du travail mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail mécanique est une forme de transfert d’énergie et se mesure en joules.',
                    ],

                    [
                        'question' => 'Quelle forme d’énergie est associée au mouvement d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'L’énergie potentielle gravitationnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie chimique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie nucléaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique est l’énergie liée au mouvement d’un objet.',
                    ],

                    [
                        'question' => 'Quelle expression donne l’énergie cinétique d’un objet de masse m et de vitesse v ?',
                        'choices' => [
                            ['choice_text' => 'Ec = 1/2 mv²', 'is_correct' => true],
                            ['choice_text' => 'Ec = mv', 'is_correct' => false],
                            ['choice_text' => 'Ec = mgv', 'is_correct' => false],
                            ['choice_text' => 'Ec = m/v', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique d’un objet en translation est Ec = 1/2 mv².',
                    ],

                    [
                        'question' => 'Un objet de 2 kg se déplace à 4 m/s. Quelle est son énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => '16 J', 'is_correct' => true],
                            ['choice_text' => '8 J', 'is_correct' => false],
                            ['choice_text' => '4 J', 'is_correct' => false],
                            ['choice_text' => '32 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Ec = 1/2 × 2 × 4² = 16 J.',
                    ],

                    [
                        'question' => 'Près de la surface terrestre, quelle expression représente l’énergie potentielle gravitationnelle par rapport à un niveau de référence ?',
                        'choices' => [
                            ['choice_text' => 'Ep = mgh', 'is_correct' => true],
                            ['choice_text' => 'Ep = mv', 'is_correct' => false],
                            ['choice_text' => 'Ep = mg/h', 'is_correct' => false],
                            ['choice_text' => 'Ep = h/mg', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la surface terrestre, l’énergie potentielle gravitationnelle est donnée par Ep = mgh.',
                    ],

                    [
                        'question' => 'Quelle situation augmente l’énergie potentielle gravitationnelle d’un objet près de la Terre ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter sa hauteur', 'is_correct' => true],
                            ['choice_text' => 'Diminuer sa hauteur', 'is_correct' => false],
                            ['choice_text' => 'Réduire uniquement sa vitesse', 'is_correct' => false],
                            ['choice_text' => 'Modifier uniquement sa couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Ep = mgh, l’énergie potentielle augmente lorsque la hauteur h augmente.',
                    ],

                    [
                        'question' => 'Lorsqu’un objet tombe sans frottements importants, l’énergie potentielle gravitationnelle se transforme principalement en...',
                        'choices' => [
                            ['choice_text' => 'Énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Masse', 'is_correct' => false],
                            ['choice_text' => 'Charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Volume', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de pertes importantes, la diminution d’énergie potentielle correspond à une augmentation de l’énergie cinétique.',
                    ],

                    [
                        'question' => 'Le travail d’une force est nul lorsque la force est...',
                        'choices' => [
                            ['choice_text' => 'Perpendiculaire au déplacement', 'is_correct' => true],
                            ['choice_text' => 'Toujours parallèle au déplacement', 'is_correct' => false],
                            ['choice_text' => 'Toujours dans le même sens que le déplacement', 'is_correct' => false],
                            ['choice_text' => 'Toujours opposée au déplacement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail vaut W = Fd cos(θ). Pour θ = 90°, le cosinus est nul.',
                    ],

                    [
                        'question' => 'Une force constante de 10 N agit dans le sens du déplacement sur 3 m. Quel travail effectue-t-elle ?',
                        'choices' => [
                            ['choice_text' => '30 J', 'is_correct' => true],
                            ['choice_text' => '13 J', 'is_correct' => false],
                            ['choice_text' => '3 J', 'is_correct' => false],
                            ['choice_text' => '7 J', 'is_correct' => false],
                        ],
                        'explanation' => 'La force et le déplacement sont parallèles et de même sens : W = Fd = 10 × 3 = 30 J.',
                    ],

                    [
                        'question' => 'Dans un système mécanique sans pertes dissipatives, quelle grandeur peut rester constante ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie mécanique', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de tous les objets', 'is_correct' => false],
                            ['choice_text' => 'La hauteur de tous les objets', 'is_correct' => false],
                            ['choice_text' => 'La force de chaque objet', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque seules des forces conservatives interviennent, l’énergie mécanique peut être conservée.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Quantité de mouvement
            // ============================================================

            [
                'title' => 'Quantité de mouvement et collisions',
                'description' => 'Introduction à la quantité de mouvement et à sa conservation lors des interactions mécaniques.',
                'questions' => [

                    [
                        'question' => 'Quelle expression définit la quantité de mouvement d’un objet classique ?',
                        'choices' => [
                            ['choice_text' => 'p = mv', 'is_correct' => true],
                            ['choice_text' => 'p = m/v', 'is_correct' => false],
                            ['choice_text' => 'p = ma', 'is_correct' => false],
                            ['choice_text' => 'p = m + v', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement est le produit de la masse par le vecteur vitesse : p = mv.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'kg·m/s', 'is_correct' => true],
                            ['choice_text' => 'N/s', 'is_correct' => false],
                            ['choice_text' => 'J/s', 'is_correct' => false],
                            ['choice_text' => 'kg·m²/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme p = mv, son unité est kg·m/s.',
                    ],

                    [
                        'question' => 'Un objet de masse 3 kg se déplace à 4 m/s. Quelle est la valeur de sa quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => '12 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '7 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '48 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 3 × 4 = 12 kg·m/s.',
                    ],

                    [
                        'question' => 'Dans un système isolé, la quantité de mouvement totale...',
                        'choices' => [
                            ['choice_text' => 'Se conserve', 'is_correct' => true],
                            ['choice_text' => 'Double toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Disparaît après une collision', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de force extérieure résultante, la quantité de mouvement totale se conserve.',
                    ],

                    [
                        'question' => 'Deux patineurs initialement au repos se repoussent sur une surface presque sans frottement. Que peut-on dire de leurs quantités de mouvement après la poussée ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont opposées et leur somme vectorielle reste nulle', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours dans le même sens', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toutes deux nulles', 'is_correct' => false],
                            ['choice_text' => 'Elles sont nécessairement identiques en tout point', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement totale initiale est nulle. Après la poussée, les deux quantités de mouvement se compensent vectoriellement.',
                    ],

                    [
                        'question' => 'Lors d’une collision, quelle grandeur peut être conservée dans un système isolé même si l’énergie cinétique n’est pas conservée ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de mouvement', 'is_correct' => true],
                            ['choice_text' => 'La température de chaque objet', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de chaque objet', 'is_correct' => false],
                            ['choice_text' => 'La position de chaque objet', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement totale est conservée dans un système isolé, alors que l’énergie cinétique peut être transformée en chaleur, déformation ou son.',
                    ],

                    [
                        'question' => 'Si la masse d’un objet reste constante et que sa vitesse double, sa quantité de mouvement...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Est multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque p = mv et que m reste constante, doubler v double p.',
                    ],

                    [
                        'question' => 'Lors d’une collision parfaitement inélastique, les deux objets après le choc...',
                        'choices' => [
                            ['choice_text' => 'Se déplacent ensemble avec une vitesse commune', 'is_correct' => true],
                            ['choice_text' => 'S’arrêtent nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Doivent repartir à des vitesses identiques et opposées', 'is_correct' => false],
                            ['choice_text' => 'Perdent toute leur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une collision parfaitement inélastique, les objets restent liés après le choc.',
                    ],

                    [
                        'question' => 'Pourquoi une force appliquée pendant une courte durée peut-elle modifier fortement la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’impulsion dépend de la force et de la durée de son application', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse disparaît pendant le choc', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse est toujours infinie pendant un choc', 'is_correct' => false],
                            ['choice_text' => 'Parce que la quantité de mouvement ne dépend pas de la force', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impulsion d’une force correspond à une variation de quantité de mouvement : J = Δp.',
                    ],

                    [
                        'question' => 'Pourquoi un casque peut-il réduire les forces subies lors d’un choc ?',
                        'choices' => [
                            ['choice_text' => 'Il peut augmenter la durée du choc et ainsi réduire la force moyenne pour une même variation de quantité de mouvement', 'is_correct' => true],
                            ['choice_text' => 'Il supprime la masse de la tête', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute variation de vitesse', 'is_correct' => false],
                            ['choice_text' => 'Il annule toujours la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même variation de quantité de mouvement, augmenter la durée d’interaction peut réduire la force moyenne.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Gravitation
            // ============================================================

            [
                'title' => 'Gravitation classique',
                'description' => 'Notions fondamentales de gravitation universelle, poids et mouvements orbitaux.',
                'questions' => [

                    [
                        'question' => 'La force gravitationnelle entre deux masses est toujours...',
                        'choices' => [
                            ['choice_text' => 'Attractive', 'is_correct' => true],
                            ['choice_text' => 'Répulsive', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculaire à la distance entre les masses', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la mécanique classique newtonienne, la gravitation entre deux masses est attractive.',
                    ],

                    [
                        'question' => 'Si la distance entre deux masses augmente, la force gravitationnelle entre elles...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Devient automatiquement nulle quelle que soit la distance', 'is_correct' => false],
                        ],
                        'explanation' => 'La force gravitationnelle diminue avec le carré de la distance entre les deux masses.',
                    ],

                    [
                        'question' => 'Si la distance entre deux masses est multipliée par deux, la force gravitationnelle devient...',
                        'choices' => [
                            ['choice_text' => 'Quatre fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme F est proportionnelle à 1/r², multiplier r par 2 divise F par 4.',
                    ],

                    [
                        'question' => 'Le poids d’un objet dépend directement de...',
                        'choices' => [
                            ['choice_text' => 'Sa masse et de l’intensité du champ gravitationnel local', 'is_correct' => true],
                            ['choice_text' => 'Sa couleur et sa forme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa vitesse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa température uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poids est donné approximativement par P = mg.',
                    ],

                    [
                        'question' => 'Un objet de masse 5 kg se trouve près de la surface terrestre avec g ≈ 9,8 m/s². Quel est son poids ?',
                        'choices' => [
                            ['choice_text' => '49 N', 'is_correct' => true],
                            ['choice_text' => '5 N', 'is_correct' => false],
                            ['choice_text' => '9,8 N', 'is_correct' => false],
                            ['choice_text' => '98 N', 'is_correct' => false],
                        ],
                        'explanation' => 'P = mg = 5 × 9,8 = 49 N.',
                    ],

                    [
                        'question' => 'La masse d’un astronaute change-t-elle lorsqu’il passe de la Terre à la Lune ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa masse reste la même', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle devient toujours six fois plus petite', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle double', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse est une propriété intrinsèque de l’astronaute. En revanche, son poids change avec le champ gravitationnel.',
                    ],

                    [
                        'question' => 'Pourquoi une planète peut-elle rester en orbite autour d’une étoile ?',
                        'choices' => [
                            ['choice_text' => 'La gravitation courbe continuellement sa trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La planète est immobile dans l’espace', 'is_correct' => false],
                            ['choice_text' => 'La gravitation annule sa vitesse', 'is_correct' => false],
                            ['choice_text' => 'La planète n’a aucune masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La gravitation fournit l’accélération qui courbe la trajectoire de la planète autour de l’étoile.',
                    ],

                    [
                        'question' => 'Quelle est l’accélération gravitationnelle approximative près de la surface de la Terre ?',
                        'choices' => [
                            ['choice_text' => '9,8 m/s²', 'is_correct' => true],
                            ['choice_text' => '0,98 m/s²', 'is_correct' => false],
                            ['choice_text' => '98 m/s²', 'is_correct' => false],
                            ['choice_text' => '1 m/s² exactement dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la surface terrestre, g est approximativement égal à 9,8 m/s².',
                    ],

                    [
                        'question' => 'Dans une chute libre idéale près de la Terre, si on néglige la résistance de l’air, l’accélération est dirigée...',
                        'choices' => [
                            ['choice_text' => 'Vers le centre de la Terre', 'is_correct' => true],
                            ['choice_text' => 'Vers le ciel', 'is_correct' => false],
                            ['choice_text' => 'Toujours horizontalement', 'is_correct' => false],
                            ['choice_text' => 'Dans la direction de la vitesse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La gravitation produit une accélération dirigée vers le centre de la Terre.',
                    ],

                    [
                        'question' => 'Deux objets de masses différentes tombent dans le vide près de la surface terrestre. Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont la même accélération gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'L’objet le plus lourd a nécessairement une accélération plus grande', 'is_correct' => false],
                            ['choice_text' => 'L’objet le plus léger a nécessairement une accélération plus grande', 'is_correct' => false],
                            ['choice_text' => 'Ils ont des accélérations opposées', 'is_correct' => false],
                        ],
                        'explanation' => 'En négligeant la résistance de l’air, tous les objets subissent approximativement la même accélération g près de la surface terrestre.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Rotation et équilibre
            // ============================================================

            [
                'title' => 'Rotation et équilibre des corps',
                'description' => 'Introduction au mouvement de rotation, au moment d’une force et à l’équilibre mécanique.',
                'questions' => [

                    [
                        'question' => 'Comment appelle-t-on le mouvement d’un objet qui tourne autour d’un axe ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement de rotation', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement de translation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement thermique', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement hydrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet qui tourne autour d’un axe effectue un mouvement de rotation.',
                    ],

                    [
                        'question' => 'Quelle grandeur mesure l’effet de rotation produit par une force autour d’un axe ?',
                        'choices' => [
                            ['choice_text' => 'Le moment de la force', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment d’une force caractérise sa capacité à faire tourner un objet autour d’un point ou d’un axe.',
                    ],

                    [
                        'question' => 'Quelle unité SI correspond au moment d’une force ?',
                        'choices' => [
                            ['choice_text' => 'Le newton-mètre', 'is_correct' => true],
                            ['choice_text' => 'Le joule par seconde', 'is_correct' => false],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'Le pascal par mètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment d’une force s’exprime en N·m.',
                    ],

                    [
                        'question' => 'Pour une force donnée, comment augmenter son moment par rapport à un axe ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter sa distance à l’axe d’application', 'is_correct' => true],
                            ['choice_text' => 'Réduire sa distance à l’axe', 'is_correct' => false],
                            ['choice_text' => 'Supprimer sa direction', 'is_correct' => false],
                            ['choice_text' => 'Réduire nécessairement sa norme à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment dépend notamment du bras de levier : augmenter la distance perpendiculaire à l’axe augmente le moment.',
                    ],

                    [
                        'question' => 'Une porte est plus facile à ouvrir lorsqu’on pousse près de la poignée plutôt que près des charnières. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Le bras de levier est plus grand', 'is_correct' => true],
                            ['choice_text' => 'La porte devient plus légère', 'is_correct' => false],
                            ['choice_text' => 'La gravité devient plus faible', 'is_correct' => false],
                            ['choice_text' => 'La force appliquée devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La poignée est éloignée de l’axe de rotation des charnières, ce qui augmente le moment produit par une même force.',
                    ],

                    [
                        'question' => 'Dans un équilibre statique simple, quelle condition doit vérifier la résultante des forces ?',
                        'choices' => [
                            ['choice_text' => 'Elle doit être nulle', 'is_correct' => true],
                            ['choice_text' => 'Elle doit être maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être égale au poids dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour qu’un corps soit en équilibre de translation, la somme vectorielle des forces doit être nulle.',
                    ],

                    [
                        'question' => 'Pour qu’un corps rigide soit en équilibre statique complet, quelle autre condition doit être satisfaite en plus de la résultante des forces nulle ?',
                        'choices' => [
                            ['choice_text' => 'La résultante des moments doit être nulle', 'is_correct' => true],
                            ['choice_text' => 'La température doit être nulle', 'is_correct' => false],
                            ['choice_text' => 'La masse doit être nulle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse doit être infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre statique d’un corps rigide exige à la fois une résultante des forces nulle et une résultante des moments nulle.',
                    ],

                    [
                        'question' => 'Un disque tourne de plus en plus rapidement autour de son axe. Quelle grandeur caractérise cette variation de rotation ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération angulaire', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La température cinétique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération angulaire mesure la variation de la vitesse angulaire au cours du temps.',
                    ],

                    [
                        'question' => 'Quelle situation correspond à un équilibre statique ?',
                        'choices' => [
                            ['choice_text' => 'Un livre immobile posé sur une table', 'is_correct' => true],
                            ['choice_text' => 'Une voiture qui accélère', 'is_correct' => false],
                            ['choice_text' => 'Une balle qui tombe librement', 'is_correct' => false],
                            ['choice_text' => 'Un rotor qui accélère', 'is_correct' => false],
                        ],
                        'explanation' => 'Un livre immobile sur une table est en équilibre statique lorsque les forces et les moments se compensent.',
                    ],

                    [
                        'question' => 'Pourquoi une clé longue permet-elle généralement de desserrer plus facilement un écrou qu’une clé courte pour une même force appliquée ?',
                        'choices' => [
                            ['choice_text' => 'Elle fournit un bras de levier plus important et donc un moment plus grand', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit la force gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Elle change la masse de l’écrou', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les frottements', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment de la force augmente avec le bras de levier, ce qui facilite la rotation de l’écrou.',
                    ],
                ],
            ],
        ];

        /*
         * Durée et score de passage adaptés au niveau de chaque quiz.
         *
         * Quiz 1 : concepts de base              → 10 min / 50
         * Quiz 2 : vitesse + calculs              → 15 min / 50
         * Quiz 3 : forces + calculs              → 15 min / 60
         * Quiz 4 : lois de Newton               → 20 min / 60
         * Quiz 5 : travail + énergie             → 20 min / 60
         * Quiz 6 : quantité de mouvement        → 20 min / 60
         * Quiz 7 : gravitation + calculs        → 20 min / 60
         * Quiz 8 : rotation + équilibre        → 20 min / 60
         */
        $quizSettings = [
            0 => [
                'duration' => 10,
                'passing_score' => 50,
            ],
            1 => [
                'duration' => 15,
                'passing_score' => 50,
            ],
            2 => [
                'duration' => 15,
                'passing_score' => 60,
            ],
            3 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            4 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            5 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            6 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            7 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 15,
                'passing_score' => 50,
            ];

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

                // Mélange des choix tout en conservant
                // is_correct attaché à chaque réponse.
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