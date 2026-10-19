<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeometryIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Triangles et propriétés métriques',
                'description' => 'Approfondissez les propriétés des triangles, leurs angles, leurs longueurs et leurs relations métriques.',
                'questions' => [
                    [
                        'question' => 'Un triangle possède deux angles de 45° et 65°. Quelle est la mesure du troisième angle ?',
                        'choices' => [
                            ['choice_text' => '70°', 'is_correct' => true],
                            ['choice_text' => '75°', 'is_correct' => false],
                            ['choice_text' => '80°', 'is_correct' => false],
                            ['choice_text' => '65°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des angles d’un triangle vaut 180°. Donc 180° - 45° - 65° = 70°.'
                    ],
                    [
                        'question' => 'Dans un triangle isocèle, les deux angles à la base mesurent chacun 50°. Quelle est la mesure de l’angle au sommet ?',
                        'choices' => [
                            ['choice_text' => '80°', 'is_correct' => true],
                            ['choice_text' => '70°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '100°', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux angles à la base totalisent 100°. L’angle au sommet vaut donc 180° - 100° = 80°.'
                    ],
                    [
                        'question' => 'Un triangle équilatéral a un côté de 8 cm. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '24 cm', 'is_correct' => true],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                            ['choice_text' => '32 cm', 'is_correct' => false],
                            ['choice_text' => '64 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle équilatéral possède trois côtés égaux : 3 × 8 = 24 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle a pour côtés de l’angle droit 9 cm et 12 cm. Quelle est la longueur de l’hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '21 cm', 'is_correct' => false],
                            ['choice_text' => '13 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 9² + 12² = 81 + 144 = 225, donc c = 15 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle possède une hypoténuse de 17 cm et un côté de 8 cm. Quelle est l’autre longueur ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '13 cm', 'is_correct' => false],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 8² = 17², donc x² = 289 - 64 = 225 et x = 15 cm.'
                    ],
                    [
                        'question' => 'Quelle condition permet de conclure qu’un triangle est rectangle à partir de ses trois côtés ?',
                        'choices' => [
                            ['choice_text' => Le carré du plus grand côté est égal à la somme des carrés des deux autres', 'is_correct' => true],
                            ['choice_text' => Les trois côtés sont égaux', 'is_correct' => false],
                            ['choice_text' => La somme des trois côtés vaut 180', 'is_correct' => false],
                            ['choice_text' => Le plus petit côté est égal à la moitié du plus grand', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la réciproque du théorème de Pythagore.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, quelle relation donne la hauteur relative à l’hypoténuse lorsque les deux segments projetés sur l’hypoténuse mesurent p et q ?',
                        'choices' => [
                            ['choice_text' => h² = pq', 'is_correct' => true],
                            ['choice_text' => h = p + q', 'is_correct' => false],
                            ['choice_text' => h² = p² + q²', 'is_correct' => false],
                            ['choice_text' => h = pq/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un triangle rectangle, la hauteur issue de l’angle droit vérifie h² = pq, où p et q sont les projections des deux côtés de l’angle droit sur l’hypoténuse.'
                    ],
                    [
                        'question' => 'Un triangle a des côtés 7 cm, 24 cm et 25 cm. Quel est son type ?',
                        'choices' => [
                            ['choice_text' => 'Rectangle', 'is_correct' => true],
                            ['choice_text' => 'Équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Isocèle non rectangle', 'is_correct' => false],
                            ['choice_text' => 'Impossible', 'is_correct' => false],
                        ],
                        'explanation' => '7² + 24² = 49 + 576 = 625 = 25². Le triangle est donc rectangle.'
                    ],
                    [
                        'question' => 'Un triangle isocèle possède des côtés égaux de 13 cm et une base de 10 cm. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '36 cm', 'is_correct' => true],
                            ['choice_text' => '32 cm', 'is_correct' => false],
                            ['choice_text' => '39 cm', 'is_correct' => false],
                            ['choice_text' => '26 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 13 + 13 + 10 = 36 cm.'
                    ],
                    [
                        'question' => 'Un triangle possède des côtés de 4 cm, 7 cm et 12 cm. Peut-il exister ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, il est rectangle', 'is_correct' => false],
                            ['choice_text' => 'Oui, il est équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Oui, il est isocèle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour former un triangle, la somme de deux côtés doit être strictement supérieure au troisième. Or 4 + 7 = 11 < 12.'
                    ],
                ],
            ],

            [
                'title' => 'Quadrilatères et parallélogrammes',
                'description' => 'Étudiez les propriétés des quadrilatères remarquables et leurs relations géométriques.',
                'questions' => [
                    [
                        'question' => 'Dans un parallélogramme, les côtés opposés sont :',
                        'choices' => [
                            ['choice_text' => Parallèles et de même longueur', 'is_correct' => true],
                            ['choice_text' => 'Toujours perpendiculaires', 'is_correct' => false],
                            ['choice_text' => 'Toujours de longueurs différentes', 'is_correct' => false],
                            ['choice_text' => 'Toujours des diagonales', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un parallélogramme, les côtés opposés sont parallèles et de même longueur.'
                    ],
                    [
                        'question' => 'Dans un rectangle de longueur 9 cm et de largeur 12 cm, quelle est la longueur d’une diagonale ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '21 cm', 'is_correct' => false],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'd² = 9² + 12² = 81 + 144 = 225, donc d = 15 cm.'
                    ],
                    [
                        'question' => 'Dans un parallélogramme, les diagonales :',
                        'choices' => [
                            ['choice_text' => Se coupent en leur milieu', 'is_correct' => true],
                            ['choice_text' => Sont toujours perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Sont toujours de même longueur', 'is_correct' => false],
                            ['choice_text' => Ne se coupent jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diagonales d’un parallélogramme se coupent en leur milieu.'
                    ],
                    [
                        'question' => 'Dans un losange, les diagonales sont :',
                        'choices' => [
                            ['choice_text' => Perpendiculaires', 'is_correct' => true],
                            ['choice_text' => Toujours parallèles', 'is_correct' => false],
                            ['choice_text' => Toujours de même longueur', 'is_correct' => false],
                            ['choice_text' => Toujours horizontales', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diagonales d’un losange sont perpendiculaires et se coupent en leur milieu.'
                    ],
                    [
                        'question' => 'Quelle formule donne l’aire d’un losange connaissant ses diagonales d₁ et d₂ ?',
                        'choices' => [
                            ['choice_text' => A = d₁d₂/2', 'is_correct' => true],
                            ['choice_text' => A = d₁ + d₂', 'is_correct' => false],
                            ['choice_text' => A = d₁d₂', 'is_correct' => false],
                            ['choice_text' => A = 2d₁d₂', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire d’un losange est égale à la moitié du produit de ses diagonales.'
                    ],
                    [
                        'question' => 'Un losange a des diagonales de 10 cm et 24 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '120 cm²', 'is_correct' => true],
                            ['choice_text' => '240 cm²', 'is_correct' => false],
                            ['choice_text' => '34 cm²', 'is_correct' => false],
                            ['choice_text' => '60 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (10 × 24)/2 = 120 cm².'
                    ],
                    [
                        'question' => 'Quel quadrilatère possède quatre côtés de même longueur et quatre angles droits ?',
                        'choices' => [
                            ['choice_text' => 'Carré', 'is_correct' => true],
                            ['choice_text' => 'Losange quelconque', 'is_correct' => false],
                            ['choice_text' => 'Rectangle quelconque', 'is_correct' => false],
                            ['choice_text' => 'Trapèze', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré possède simultanément les propriétés du rectangle et du losange.'
                    ],
                    [
                        'question' => 'Quelle propriété permet d’identifier un rectangle parmi les parallélogrammes ?',
                        'choices' => [
                            ['choice_text' => Il possède un angle droit', 'is_correct' => true],
                            ['choice_text' => Ses quatre côtés sont toujours égaux', 'is_correct' => false],
                            ['choice_text' => Ses diagonales sont perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Il possède trois côtés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un parallélogramme qui possède un angle droit possède automatiquement quatre angles droits : c’est un rectangle.'
                    ],
                    [
                        'question' => 'Quelle propriété permet d’identifier un losange parmi les parallélogrammes ?',
                        'choices' => [
                            ['choice_text' => Ses quatre côtés sont de même longueur', 'is_correct' => true],
                            ['choice_text' => Il possède quatre angles droits', 'is_correct' => false],
                            ['choice_text' => Ses diagonales sont toujours de même longueur', 'is_correct' => false],
                            ['choice_text' => Il possède trois diagonales', 'is_correct' => false],
                        ],
                        'explanation' => 'Un parallélogramme dont les quatre côtés sont égaux est un losange.'
                    ],
                    [
                        'question' => 'Un carré a une diagonale de 10√2 cm. Quelle est la longueur de son côté ?',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '5√2 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '100 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un carré, d = c√2. Donc c = (10√2)/√2 = 10 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles et angles',
                'description' => 'Approfondissez les relations entre rayons, cordes, angles au centre, angles inscrits et arcs.',
                'questions' => [
                    [
                        'question' => 'Un angle au centre mesure 80°. Quelle est la mesure de l’angle inscrit qui intercepte le même arc ?',
                        'choices' => [
                            ['choice_text' => '40°', 'is_correct' => true],
                            ['choice_text' => '80°', 'is_correct' => false],
                            ['choice_text' => '160°', 'is_correct' => false],
                            ['choice_text' => '20°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle inscrit interceptant le même arc mesure la moitié de l’angle au centre : 80°/2 = 40°.'
                    ],
                    [
                        'question' => 'Un cercle a un diamètre de 20 cm. Quel est son rayon ?',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '40 cm', 'is_correct' => false],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon est la moitié du diamètre : 20/2 = 10 cm.'
                    ],
                    [
                        'question' => 'Quelle est la longueur d’un arc correspondant à un angle au centre de 90° dans un cercle de rayon 8 cm ?',
                        'choices' => [
                            ['choice_text' => '4π cm', 'is_correct' => true],
                            ['choice_text' => '8π cm', 'is_correct' => false],
                            ['choice_text' => '2π cm', 'is_correct' => false],
                            ['choice_text' => '16π cm', 'is_correct' => false],
                        ],
                        'explanation' => '90° représente un quart de cercle. La circonférence vaut 16π cm, donc l’arc vaut 4π cm.'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un secteur circulaire de rayon 6 cm et d’angle au centre de 60° ?',
                        'choices' => [
                            ['choice_text' => '6π cm²', 'is_correct' => true],
                            ['choice_text' => '12π cm²', 'is_correct' => false],
                            ['choice_text' => '18π cm²', 'is_correct' => false],
                            ['choice_text' => '36π cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire totale est 36π. Un angle de 60° représente 1/6 du cercle, donc l’aire vaut 6π cm².'
                    ],
                    [
                        'question' => 'Deux rayons d’un même cercle sont toujours :',
                        'choices' => [
                            ['choice_text' => De même longueur', 'is_correct' => true],
                            ['choice_text' => Perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Parallèles', 'is_correct' => false],
                            ['choice_text' => De longueurs différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les rayons d’un même cercle ont la même longueur.'
                    ],
                    [
                        'question' => 'Une corde qui passe par le centre du cercle est :',
                        'choices' => [
                            ['choice_text' => Un diamètre', 'is_correct' => true],
                            ['choice_text' => Un rayon', 'is_correct' => false],
                            ['choice_text' => Une tangente', 'is_correct' => false],
                            ['choice_text' => Un arc', 'is_correct' => false],
                        ],
                        'explanation' => 'Une corde passant par le centre relie deux points opposés du cercle : c’est un diamètre.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise une tangente à un cercle au point de contact ?',
                        'choices' => [
                            ['choice_text' => Elle est perpendiculaire au rayon passant par le point de contact', 'is_correct' => true],
                            ['choice_text' => Elle est parallèle au rayon', 'is_correct' => false],
                            ['choice_text' => Elle passe toujours par le centre', 'is_correct' => false],
                            ['choice_text' => Elle contient nécessairement un diamètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon au point de tangence est perpendiculaire à la tangente.'
                    ],
                    [
                        'question' => 'Quelle est la circonférence d’un cercle de diamètre 14 cm ?',
                        'choices' => [
                            ['choice_text' => '14π cm', 'is_correct' => true],
                            ['choice_text' => '7π cm', 'is_correct' => false],
                            ['choice_text' => '28π cm', 'is_correct' => false],
                            ['choice_text' => '49π cm', 'is_correct' => false],
                        ],
                        'explanation' => 'C = πd = 14π cm.'
                    ],
                    [
                        'question' => 'Une corde est à 5 cm du centre d’un cercle de rayon 13 cm. Quelle est la moitié de la corde ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon, la distance du centre à la corde et la demi-corde forment un triangle rectangle : x² + 5² = 13², donc x² = 144 et x = 12 cm.'
                    ],
                    [
                        'question' => 'Deux angles inscrits interceptant le même arc ont :',
                        'choices' => [
                            ['choice_text' => La même mesure', 'is_correct' => true],
                            ['choice_text' => Des mesures toujours supplémentaires', 'is_correct' => false],
                            ['choice_text' => Des mesures toujours complémentaires', 'is_correct' => false],
                            ['choice_text' => Une différence constante de 90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles inscrits qui interceptent le même arc ont la même mesure.'
                    ],
                ],
            ],

            [
                'title' => 'Aires et volumes',
                'description' => 'Calculez les aires, volumes et dimensions manquantes de figures et solides usuels.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’aire d’un triangle de base 14 cm et de hauteur 9 cm ?',
                        'choices' => [
                            ['choice_text' => '63 cm²', 'is_correct' => true],
                            ['choice_text' => '126 cm²', 'is_correct' => false],
                            ['choice_text' => '46 cm²', 'is_correct' => false],
                            ['choice_text' => '72 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (14 × 9)/2 = 63 cm².'
                    ],
                    [
                        'question' => 'Un trapèze a des bases de 10 cm et 16 cm et une hauteur de 5 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '65 cm²', 'is_correct' => true],
                            ['choice_text' => '130 cm²', 'is_correct' => false],
                            ['choice_text' => '50 cm²', 'is_correct' => false],
                            ['choice_text' => '60 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = ((10 + 16) × 5)/2 = 65 cm².'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un cercle de rayon 7 cm ?',
                        'choices' => [
                            ['choice_text' => '49π cm²', 'is_correct' => true],
                            ['choice_text' => '14π cm²', 'is_correct' => false],
                            ['choice_text' => '98π cm²', 'is_correct' => false],
                            ['choice_text' => '7π cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = πr² = π × 7² = 49π cm².'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cylindre de rayon 3 cm et de hauteur 10 cm ?',
                        'choices' => [
                            ['choice_text' => '90π cm³', 'is_correct' => true],
                            ['choice_text' => '30π cm³', 'is_correct' => false],
                            ['choice_text' => '60π cm³', 'is_correct' => false],
                            ['choice_text' => '180π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h = π × 9 × 10 = 90π cm³.'
                    ],
                    [
                        'question' => 'Quel est le volume d’une sphère de rayon 3 cm ?',
                        'choices' => [
                            ['choice_text' => '36π cm³', 'is_correct' => true],
                            ['choice_text' => '27π cm³', 'is_correct' => false],
                            ['choice_text' => '12π cm³', 'is_correct' => false],
                            ['choice_text' => '9π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 4πr³/3 = 4π × 27/3 = 36π cm³.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cône de rayon 6 cm et de hauteur 5 cm ?',
                        'choices' => [
                            ['choice_text' => '60π cm³', 'is_correct' => true],
                            ['choice_text' => '180π cm³', 'is_correct' => false],
                            ['choice_text' => '30π cm³', 'is_correct' => false],
                            ['choice_text' => '90π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = (1/3)πr²h = (1/3)π × 36 × 5 = 60π cm³.'
                    ],
                    [
                        'question' => 'Un cube a une arête de 5 cm. Quelle est son aire totale ?',
                        'choices' => [
                            ['choice_text' => '150 cm²', 'is_correct' => true],
                            ['choice_text' => '125 cm²', 'is_correct' => false],
                            ['choice_text' => '100 cm²', 'is_correct' => false],
                            ['choice_text' => '25 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cube possède six faces carrées : A = 6 × 5² = 150 cm².'
                    ],
                    [
                        'question' => 'Un pavé droit mesure 8 cm × 5 cm × 4 cm. Quel est son aire totale ?',
                        'choices' => [
                            ['choice_text' => '184 cm²', 'is_correct' => true],
                            ['choice_text' => '160 cm²', 'is_correct' => false],
                            ['choice_text' => '200 cm²', 'is_correct' => false],
                            ['choice_text' => '136 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 2(8×5 + 8×4 + 5×4) = 2(40 + 32 + 20) = 184 cm².'
                    ],
                    [
                        'question' => 'Un cylindre a un rayon de 4 cm et une hauteur de 7 cm. Quel est son volume ?',
                        'choices' => [
                            ['choice_text' => '112π cm³', 'is_correct' => true],
                            ['choice_text' => '28π cm³', 'is_correct' => false],
                            ['choice_text' => '56π cm³', 'is_correct' => false],
                            ['choice_text' => '196π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h = π × 16 × 7 = 112π cm³.'
                    ],
                    [
                        'question' => 'Une sphère a un diamètre de 10 cm. Quel est son volume ?',
                        'choices' => [
                            ['choice_text' => 500π/3 cm³', 'is_correct' => true],
                            ['choice_text' => '100π/3 cm³', 'is_correct' => false],
                            ['choice_text' => '500π cm³', 'is_correct' => false],
                            ['choice_text' => '250π/3 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon vaut 5 cm. Donc V = (4/3)π × 5³ = (4/3)π × 125 = 500π/3 cm³.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations, similitude et homothétie',
                'description' => 'Étudiez les transformations géométriques, les rapports d’échelle et les figures semblables.',
                'questions' => [
                    [
                        'question' => 'Deux triangles semblables ont un rapport de similitude de 3. Si un côté du premier mesure 5 cm, combien mesure le côté correspondant du second ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les longueurs sont multipliées par 3 : 5 × 3 = 15 cm.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 2 transforme un segment de 7 cm. Quelle est sa nouvelle longueur ?',
                        'choices' => [
                            ['choice_text' => '14 cm', 'is_correct' => true],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                            ['choice_text' => '3,5 cm', 'is_correct' => false],
                            ['choice_text' => '28 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Une homothétie de rapport 2 multiplie toutes les longueurs par 2.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 1/2 transforme une figure d’aire 80 cm². Quelle est la nouvelle aire ?',
                        'choices' => [
                            ['choice_text' => '20 cm²', 'is_correct' => true],
                            ['choice_text' => '40 cm²', 'is_correct' => false],
                            ['choice_text' => '160 cm²', 'is_correct' => false],
                            ['choice_text' => '10 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : (1/2)² = 1/4. Donc 80 × 1/4 = 20 cm².'
                    ],
                    [
                        'question' => 'Une similitude de rapport 4 multiplie les aires par :',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : 4² = 16.'
                    ],
                    [
                        'question' => 'Une similitude de rapport 3 multiplie les volumes par :',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Les volumes sont multipliés par le cube du rapport : 3³ = 27.'
                    ],
                    [
                        'question' => 'Une rotation de 90° autour d’un point fixe conserve :',
                        'choices' => [
                            ['choice_text' => Les longueurs et les angles', 'is_correct' => true],
                            ['choice_text' => Les aires seulement', 'is_correct' => false],
                            ['choice_text' => Les longueurs seulement', 'is_correct' => false],
                            ['choice_text' => Aucun élément métrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est une isométrie : elle conserve les distances et les mesures des angles.'
                    ],
                    [
                        'question' => 'Une translation de vecteur donné conserve :',
                        'choices' => [
                            ['choice_text' => Les longueurs, les angles et les aires', 'is_correct' => true],
                            ['choice_text' => Les longueurs uniquement', 'is_correct' => false],
                            ['choice_text' => Les angles uniquement', 'is_correct' => false],
                            ['choice_text' => Aucune propriété géométrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation est une isométrie et conserve donc les longueurs, angles et aires.'
                    ],
                    [
                        'question' => 'Deux figures sont semblables si :',
                        'choices' => [
                            ['choice_text' => Leurs angles correspondants sont égaux et leurs longueurs correspondantes proportionnelles', 'is_correct' => true],
                            ['choice_text' => Elles ont exactement la même taille', 'is_correct' => false],
                            ['choice_text' => Elles ont uniquement le même périmètre', 'is_correct' => false],
                            ['choice_text' => Elles ont uniquement la même aire', 'is_correct' => false],
                        ],
                        'explanation' => 'La similitude conserve les angles et multiplie toutes les longueurs par un même rapport.'
                    ],
                    [
                        'question' => 'Un segment de 12 cm est réduit à 9 cm par une similitude. Quel est le rapport de réduction ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport vaut longueur finale / longueur initiale = 9/12 = 3/4.'
                    ],
                    [
                        'question' => 'Une figure est agrandie avec un rapport 2. Son périmètre initial est 18 cm. Quel est le nouveau périmètre ?',
                        'choices' => [
                            ['choice_text' => '36 cm', 'is_correct' => true],
                            ['choice_text' => '72 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre est une grandeur de longueur, donc il est multiplié par 2.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie analytique élémentaire',
                'description' => 'Utilisez les coordonnées pour calculer distances, milieux, pentes et équations de droites.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre les points A(0,0) et B(3,4) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((3-0)² + (4-0)²) = √25 = 5.'
                    ],
                    [
                        'question' => 'Quel est le milieu du segment reliant A(2,4) et B(6,8) ?',
                        'choices' => [
                            ['choice_text' => '(4,6)', 'is_correct' => true],
                            ['choice_text' => '(8,12)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est ((2+6)/2, (4+8)/2) = (4,6).'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1,2) et (4,8) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (8-2)/(4-1) = 6/3 = 2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite de pente 3 passant par (0,2) ?',
                        'choices' => [
                            ['choice_text' => 'y = 3x + 2', 'is_correct' => true],
                            ['choice_text' => 'y = 2x + 3', 'is_correct' => false],
                            ['choice_text' => 'y = 3x - 2', 'is_correct' => false],
                            ['choice_text' => 'y = -3x + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite s’écrit y = mx + b. Ici m = 3 et b = 2.'
                    ],
                    [
                        'question' => 'Deux droites de pentes 2 et -1/2 sont :',
                        'choices' => [
                            ['choice_text' => 'Perpendiculaires', 'is_correct' => true],
                            ['choice_text' => 'Parallèles', 'is_correct' => false],
                            ['choice_text' => 'Confondues', 'is_correct' => false],
                            ['choice_text' => 'Toujours horizontales', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des pentes vaut 2 × (-1/2) = -1, condition caractéristique de la perpendicularité.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les points (-2,3) et (4,3) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ordonnées sont identiques. La distance vaut |4 - (-2)| = 6.'
                    ],
                    [
                        'question' => 'Quel est le milieu du segment entre (-3,5) et (7,1) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                            ['choice_text' => '(5,2)', 'is_correct' => false],
                            ['choice_text' => '(1,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-3+7)/2, (5+1)/2) = (2,3).'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,5) et (4,9) ?',
                        'choices' => [
                            ['choice_text' => 'y = 2x + 1', 'is_correct' => true],
                            ['choice_text' => 'y = 2x - 1', 'is_correct' => false],
                            ['choice_text' => 'y = x + 3', 'is_correct' => false],
                            ['choice_text' => 'y = 4x - 3', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente vaut (9-5)/(4-2) = 2. Avec le point (2,5), 5 = 4 + b, donc b = 1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (0,0) et de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => 'x² + y² = 25', 'is_correct' => true],
                            ['choice_text' => 'x + y = 5', 'is_correct' => false],
                            ['choice_text' => 'x² + y² = 5', 'is_correct' => false],
                            ['choice_text' => 'x² - y² = 25', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cercle de centre (0,0) et de rayon r vérifie x² + y² = r².'
                    ],
                    [
                        'question' => 'Le point (3,4) appartient-il au cercle x² + y² = 25 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x = 4', 'is_correct' => false],
                            ['choice_text' => 'Seulement si y = 3', 'is_correct' => false],
                        ],
                        'explanation' => '3² + 4² = 9 + 16 = 25. Le point appartient donc au cercle.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes géométriques intermédiaires',
                'description' => 'Résolvez des problèmes combinant plusieurs propriétés de géométrie plane et spatiale.',
                'questions' => [
                    [
                        'question' => 'Un rectangle a une diagonale de 13 cm et une largeur de 5 cm. Quelle est sa longueur ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'L² + 5² = 13², donc L² = 169 - 25 = 144 et L = 12 cm.'
                    ],
                    [
                        'question' => 'Un carré possède une aire de 144 cm². Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '48 cm', 'is_correct' => true],
                            ['choice_text' => '36 cm', 'is_correct' => false],
                            ['choice_text' => '24 cm', 'is_correct' => false],
                            ['choice_text' => '72 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le côté vaut √144 = 12 cm. Le périmètre vaut 4 × 12 = 48 cm.'
                    ],
                    [
                        'question' => 'Un cercle a une aire de 81π cm². Quel est son diamètre ?',
                        'choices' => [
                            ['choice_text' => '18 cm', 'is_correct' => true],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                            ['choice_text' => '27 cm', 'is_correct' => false],
                            ['choice_text' => '81 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'πr² = 81π, donc r² = 81 et r = 9 cm. Le diamètre vaut 18 cm.'
                    ],
                    [
                        'question' => 'Un triangle possède une base de 16 cm et une aire de 72 cm². Quelle est sa hauteur ?',
                        'choices' => [
                            ['choice_text' => '9 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => '72 = (16 × h)/2 = 8h, donc h = 9 cm.'
                    ],
                    [
                        'question' => 'Un cylindre possède un volume de 100π cm³ et un rayon de 5 cm. Quelle est sa hauteur ?',
                        'choices' => [
                            ['choice_text' => '4 cm', 'is_correct' => true],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                        ],
                        'explanation' => '100π = π × 25 × h, donc h = 4 cm.'
                    ],
                    [
                        'question' => 'Deux triangles semblables ont des côtés correspondants de 6 cm et 15 cm. Quel est le rapport du petit triangle vers le grand ?',
                        'choices' => [
                            ['choice_text' => '5/2', 'is_correct' => true],
                            ['choice_text' => '2/5', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport petit vers grand est 15/6 = 5/2.'
                    ],
                    [
                        'question' => 'Un trapèze a des bases de 8 cm et 14 cm et une hauteur de 6 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '66 cm²', 'is_correct' => true],
                            ['choice_text' => '132 cm²', 'is_correct' => false],
                            ['choice_text' => '48 cm²', 'is_correct' => false],
                            ['choice_text' => '72 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = ((8 + 14) × 6)/2 = 66 cm².'
                    ],
                    [
                        'question' => 'Un cube possède un volume de 216 cm³. Quelle est la longueur de son arête ?',
                        'choices' => [
                            ['choice_text' => '6 cm', 'is_correct' => true],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '36 cm', 'is_correct' => false],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'a³ = 216, donc a = 6 cm.'
                    ],
                    [
                        'question' => 'La distance entre A(1,2) et B(7,10) vaut :',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((7-1)² + (10-2)²) = √(36 + 64) = √100 = 10.'
                    ],
                    [
                        'question' => 'Un carré est agrandi avec un rapport 3. Si son aire initiale est 20 cm², quelle est sa nouvelle aire ?',
                        'choices' => [
                            ['choice_text' => '180 cm²', 'is_correct' => true],
                            ['choice_text' => '60 cm²', 'is_correct' => false],
                            ['choice_text' => '90 cm²', 'is_correct' => false],
                            ['choice_text' => '120 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire est multipliée par 3² = 9. Donc 20 × 9 = 180 cm².'
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