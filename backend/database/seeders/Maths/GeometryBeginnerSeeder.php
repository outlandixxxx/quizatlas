<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeometryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Points, droites et segments',
                'description' => 'Découvrez les notions fondamentales de point, droite, demi-droite et segment.',
                'questions' => [
                    [
                        'question' => 'Combien de points sont nécessaires pour déterminer une droite unique ?',
                        'choices' => [
                            ['choice_text' => 'Deux points distincts', 'is_correct' => true],
                            ['choice_text' => 'Un seul point', 'is_correct' => false],
                            ['choice_text' => 'Trois points quelconques', 'is_correct' => false],
                            ['choice_text' => 'Quatre points', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite est déterminée de manière unique par deux points distincts.'
                    ],
                    [
                        'question' => 'Quelle partie d’une droite est limitée par deux extrémités ?',
                        'choices' => [
                            ['choice_text' => 'Un segment', 'is_correct' => true],
                            ['choice_text' => 'Une demi-droite', 'is_correct' => false],
                            ['choice_text' => 'Une droite', 'is_correct' => false],
                            ['choice_text' => 'Un angle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un segment possède deux extrémités et une longueur finie.'
                    ],
                    [
                        'question' => 'Une demi-droite possède :',
                        'choices' => [
                            ['choice_text' => 'Une origine et s’étend dans une seule direction', 'is_correct' => true],
                            ['choice_text' => 'Deux extrémités', 'is_correct' => false],
                            ['choice_text' => 'Aucune origine', 'is_correct' => false],
                            ['choice_text' => 'Une longueur toujours finie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une demi-droite commence en un point appelé origine et se prolonge indéfiniment dans une direction.'
                    ],
                    [
                        'question' => 'Deux droites qui se coupent en un point sont dites :',
                        'choices' => [
                            ['choice_text' => 'Sécantes', 'is_correct' => true],
                            ['choice_text' => 'Parallèles', 'is_correct' => false],
                            ['choice_text' => 'Confondues', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculaires dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux droites sécantes ont un point commun. Elles ne sont perpendiculaires que si elles forment un angle droit.'
                    ],
                    [
                        'question' => 'Deux droites qui ne se rencontrent jamais dans un même plan sont :',
                        'choices' => [
                            ['choice_text' => 'Parallèles', 'is_correct' => true],
                            ['choice_text' => 'Sécantes', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculaires', 'is_correct' => false],
                            ['choice_text' => 'Confondues', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un plan, deux droites parallèles ne possèdent aucun point commun.'
                    ],
                    [
                        'question' => 'Quel instrument utilise-t-on principalement pour mesurer une longueur ?',
                        'choices' => [
                            ['choice_text' => 'Une règle', 'is_correct' => true],
                            ['choice_text' => 'Un rapporteur', 'is_correct' => false],
                            ['choice_text' => 'Un compas uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une équerre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle graduée permet de mesurer directement les longueurs.'
                    ],
                    [
                        'question' => 'Quel instrument permet de mesurer un angle en degrés ?',
                        'choices' => [
                            ['choice_text' => 'Un rapporteur', 'is_correct' => true],
                            ['choice_text' => 'Une règle', 'is_correct' => false],
                            ['choice_text' => 'Un compas', 'is_correct' => false],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapporteur est l’instrument utilisé pour mesurer la mesure d’un angle.'
                    ],
                    [
                        'question' => 'Deux droites perpendiculaires forment des angles de :',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux droites perpendiculaires se coupent en formant quatre angles droits de 90°.'
                    ],
                    [
                        'question' => 'Si AB = 7 cm, quelle est la longueur du segment BA ?',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '3,5 cm', 'is_correct' => false],
                            ['choice_text' => '1 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’un segment ne dépend pas de l’ordre des lettres : AB = BA = 7 cm.'
                    ],
                    [
                        'question' => 'Quel objet géométrique est représenté par une ligne droite prolongée indéfiniment dans les deux directions ?',
                        'choices' => [
                            ['choice_text' => 'Une droite', 'is_correct' => true],
                            ['choice_text' => 'Un segment', 'is_correct' => false],
                            ['choice_text' => 'Une demi-droite', 'is_correct' => false],
                            ['choice_text' => 'Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite n’a ni début ni fin et se prolonge indéfiniment dans les deux directions.'
                    ],
                ],
            ],

            [
                'title' => 'Angles et mesures',
                'description' => 'Identifiez les différents types d’angles et effectuez des calculs simples de mesures.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on un angle de 90° ?',
                        'choices' => [
                            ['choice_text' => 'Un angle droit', 'is_correct' => true],
                            ['choice_text' => 'Un angle aigu', 'is_correct' => false],
                            ['choice_text' => 'Un angle obtus', 'is_correct' => false],
                            ['choice_text' => 'Un angle plat', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle de 90° est un angle droit.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un angle inférieur à 90° ?',
                        'choices' => [
                            ['choice_text' => 'Un angle aigu', 'is_correct' => true],
                            ['choice_text' => 'Un angle droit', 'is_correct' => false],
                            ['choice_text' => 'Un angle obtus', 'is_correct' => false],
                            ['choice_text' => 'Un angle plat', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle aigu mesure strictement moins de 90°.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un angle compris entre 90° et 180° ?',
                        'choices' => [
                            ['choice_text' => 'Un angle obtus', 'is_correct' => true],
                            ['choice_text' => 'Un angle aigu', 'is_correct' => false],
                            ['choice_text' => 'Un angle droit', 'is_correct' => false],
                            ['choice_text' => 'Un angle nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle obtus est supérieur à 90° et inférieur à 180°.'
                    ],
                    [
                        'question' => 'Combien mesure un angle plat ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle plat correspond à une demi-tour et mesure 180°.'
                    ],
                    [
                        'question' => 'Deux angles complémentaires ont une somme de :',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles complémentaires ont une somme égale à 90°.'
                    ],
                    [
                        'question' => 'Deux angles supplémentaires ont une somme de :',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles supplémentaires ont une somme égale à 180°.'
                    ],
                    [
                        'question' => 'Un angle mesure 35°. Quel est son complément ?',
                        'choices' => [
                            ['choice_text' => '55°', 'is_correct' => true],
                            ['choice_text' => '145°', 'is_correct' => false],
                            ['choice_text' => '65°', 'is_correct' => false],
                            ['choice_text' => '35°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément vaut 90° - 35° = 55°.'
                    ],
                    [
                        'question' => 'Un angle mesure 120°. Quel est son supplément ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '70°', 'is_correct' => false],
                            ['choice_text' => '240°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le supplément vaut 180° - 120° = 60°.'
                    ],
                    [
                        'question' => 'Deux angles opposés par le sommet ont toujours :',
                        'choices' => [
                            ['choice_text' => 'La même mesure', 'is_correct' => true],
                            ['choice_text' => 'Des mesures dont la somme vaut 90°', 'is_correct' => false],
                            ['choice_text' => 'Des mesures différentes', 'is_correct' => false],
                            ['choice_text' => 'Une somme de 360°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles opposés par le sommet sont égaux.'
                    ],
                    [
                        'question' => 'Quel est le complément d’un angle de 47° ?',
                        'choices' => [
                            ['choice_text' => '43°', 'is_correct' => true],
                            ['choice_text' => '133°', 'is_correct' => false],
                            ['choice_text' => '47°', 'is_correct' => false],
                            ['choice_text' => '53°', 'is_correct' => false],
                        ],
                        'explanation' => '90° - 47° = 43°.'
                    ],
                ],
            ],

            [
                'title' => 'Triangles',
                'description' => 'Découvrez les propriétés et les différents types de triangles.',
                'questions' => [
                    [
                        'question' => 'Combien de côtés possède un triangle ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle est un polygone possédant trois côtés.'
                    ],
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un triangle ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des trois angles intérieurs d’un triangle est toujours égale à 180°.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un triangle qui possède trois côtés égaux ?',
                        'choices' => [
                            ['choice_text' => 'Triangle équilatéral', 'is_correct' => true],
                            ['choice_text' => 'Triangle isocèle', 'is_correct' => false],
                            ['choice_text' => 'Triangle rectangle', 'is_correct' => false],
                            ['choice_text' => 'Triangle scalène', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle équilatéral possède trois côtés de même longueur.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un triangle qui possède exactement deux côtés égaux ?',
                        'choices' => [
                            ['choice_text' => 'Triangle isocèle', 'is_correct' => true],
                            ['choice_text' => 'Triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Triangle scalène', 'is_correct' => false],
                            ['choice_text' => 'Triangle rectangle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle isocèle possède au moins deux côtés de même longueur.'
                    ],
                    [
                        'question' => 'Un triangle qui possède un angle de 90° est appelé :',
                        'choices' => [
                            ['choice_text' => 'Triangle rectangle', 'is_correct' => true],
                            ['choice_text' => 'Triangle obtus', 'is_correct' => false],
                            ['choice_text' => 'Triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Triangle aigu', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle rectangle possède un angle droit de 90°.'
                    ],
                    [
                        'question' => 'Un triangle possède deux angles de 50° et 60°. Combien mesure le troisième angle ?',
                        'choices' => [
                            ['choice_text' => '70°', 'is_correct' => true],
                            ['choice_text' => '80°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le troisième angle vaut 180° - 50° - 60° = 70°.'
                    ],
                    [
                        'question' => 'Un triangle équilatéral possède des angles intérieurs de :',
                        'choices' => [
                            ['choice_text' => '60° chacun', 'is_correct' => true],
                            ['choice_text' => '90° chacun', 'is_correct' => false],
                            ['choice_text' => '45° chacun', 'is_correct' => false],
                            ['choice_text' => '120° chacun', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois angles sont égaux et leur somme vaut 180°, donc chacun mesure 60°.'
                    ],
                    [
                        'question' => 'Un triangle dont les trois côtés ont des longueurs différentes est appelé :',
                        'choices' => [
                            ['choice_text' => 'Triangle scalène', 'is_correct' => true],
                            ['choice_text' => 'Triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Triangle isocèle', 'is_correct' => false],
                            ['choice_text' => 'Triangle rectangle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle scalène possède trois côtés de longueurs différentes.'
                    ],
                    [
                        'question' => 'Un triangle rectangle possède un angle de 90°. Les deux autres angles sont nécessairement :',
                        'choices' => [
                            ['choice_text' => 'Aigus', 'is_correct' => true],
                            ['choice_text' => 'Obtus', 'is_correct' => false],
                            ['choice_text' => 'Droits', 'is_correct' => false],
                            ['choice_text' => 'Plats', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux autres angles ont une somme de 90°, ils sont donc tous les deux aigus.'
                    ],
                    [
                        'question' => 'Un triangle a pour côtés 5 cm, 5 cm et 8 cm. Quel est son type selon ses côtés ?',
                        'choices' => [
                            ['choice_text' => 'Isocèle', 'is_correct' => true],
                            ['choice_text' => 'Équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Scalène', 'is_correct' => false],
                            ['choice_text' => 'Rectangle', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux côtés mesurent 5 cm, donc le triangle est isocèle.'
                    ],
                ],
            ],

            [
                'title' => 'Quadrilatères',
                'description' => 'Identifiez les propriétés du carré, du rectangle, du losange, du parallélogramme et du trapèze.',
                'questions' => [
                    [
                        'question' => 'Combien de côtés possède un quadrilatère ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Un quadrilatère est un polygone à quatre côtés.'
                    ],
                    [
                        'question' => 'Combien d’angles droits possède un rectangle ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rectangle possède quatre angles droits.'
                    ],
                    [
                        'question' => 'Dans un carré, les quatre côtés sont :',
                        'choices' => [
                            ['choice_text' => 'De même longueur', 'is_correct' => true],
                            ['choice_text' => 'Tous différents', 'is_correct' => false],
                            ['choice_text' => 'Deux seulement égaux', 'is_correct' => false],
                            ['choice_text' => 'Toujours de longueur nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un carré possède quatre côtés égaux et quatre angles droits.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise un parallélogramme ?',
                        'choices' => [
                            ['choice_text' => 'Ses côtés opposés sont parallèles', 'is_correct' => true],
                            ['choice_text' => 'Tous ses côtés sont toujours égaux', 'is_correct' => false],
                            ['choice_text' => 'Il possède trois côtés', 'is_correct' => false],
                            ['choice_text' => 'Il possède toujours quatre angles droits', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un parallélogramme, les deux paires de côtés opposés sont parallèles.'
                    ],
                    [
                        'question' => 'Quel quadrilatère possède quatre côtés égaux mais pas nécessairement quatre angles droits ?',
                        'choices' => [
                            ['choice_text' => 'Un losange', 'is_correct' => true],
                            ['choice_text' => 'Un rectangle', 'is_correct' => false],
                            ['choice_text' => 'Un trapèze', 'is_correct' => false],
                            ['choice_text' => 'Un rectangle quelconque', 'is_correct' => false],
                        ],
                        'explanation' => 'Un losange possède quatre côtés de même longueur. Ses angles ne sont pas nécessairement droits.'
                    ],
                    [
                        'question' => 'Quel quadrilatère possède deux paires de côtés opposés parallèles et quatre angles droits ?',
                        'choices' => [
                            ['choice_text' => 'Un rectangle', 'is_correct' => true],
                            ['choice_text' => 'Un trapèze', 'is_correct' => false],
                            ['choice_text' => 'Un triangle', 'is_correct' => false],
                            ['choice_text' => 'Un pentagone', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rectangle possède deux paires de côtés opposés parallèles et quatre angles droits.'
                    ],
                    [
                        'question' => 'Quel quadrilatère est à la fois un rectangle et un losange ?',
                        'choices' => [
                            ['choice_text' => 'Un carré', 'is_correct' => true],
                            ['choice_text' => 'Un trapèze', 'is_correct' => false],
                            ['choice_text' => 'Un parallélogramme quelconque', 'is_correct' => false],
                            ['choice_text' => 'Un rectangle quelconque', 'is_correct' => false],
                        ],
                        'explanation' => 'Un carré possède les propriétés d’un rectangle et celles d’un losange.'
                    ],
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un quadrilatère ?',
                        'choices' => [
                            ['choice_text' => '360°', 'is_correct' => true],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des angles intérieurs d’un quadrilatère est égale à 360°.'
                    ],
                    [
                        'question' => 'Un rectangle mesure 8 cm de longueur et 3 cm de largeur. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '22 cm', 'is_correct' => true],
                            ['choice_text' => '24 cm', 'is_correct' => false],
                            ['choice_text' => '11 cm', 'is_correct' => false],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 2(8 + 3) = 22 cm.'
                    ],
                    [
                        'question' => 'Un carré a un côté de 6 cm. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '24 cm', 'is_correct' => true],
                            ['choice_text' => '36 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre d’un carré vaut 4 × côté = 4 × 6 = 24 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Polygones',
                'description' => 'Reconnaissez les principaux polygones et leurs propriétés élémentaires.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on un polygone à 5 côtés ?',
                        'choices' => [
                            ['choice_text' => 'Pentagone', 'is_correct' => true],
                            ['choice_text' => 'Hexagone', 'is_correct' => false],
                            ['choice_text' => 'Octogone', 'is_correct' => false],
                            ['choice_text' => 'Quadrilatère', 'is_correct' => false],
                        ],
                        'explanation' => 'Un polygone à cinq côtés est un pentagone.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un polygone à 6 côtés ?',
                        'choices' => [
                            ['choice_text' => 'Hexagone', 'is_correct' => true],
                            ['choice_text' => 'Pentagone', 'is_correct' => false],
                            ['choice_text' => 'Heptagone', 'is_correct' => false],
                            ['choice_text' => 'Octogone', 'is_correct' => false],
                        ],
                        'explanation' => 'Un polygone à six côtés est un hexagone.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un polygone à 8 côtés ?',
                        'choices' => [
                            ['choice_text' => 'Octogone', 'is_correct' => true],
                            ['choice_text' => 'Hexagone', 'is_correct' => false],
                            ['choice_text' => 'Décagone', 'is_correct' => false],
                            ['choice_text' => 'Pentagone', 'is_correct' => false],
                        ],
                        'explanation' => 'Un polygone à huit côtés est un octogone.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un polygone dont tous les côtés et tous les angles sont égaux ?',
                        'choices' => [
                            ['choice_text' => 'Un polygone régulier', 'is_correct' => true],
                            ['choice_text' => 'Un polygone quelconque', 'is_correct' => false],
                            ['choice_text' => 'Un triangle rectangle', 'is_correct' => false],
                            ['choice_text' => 'Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un polygone régulier possède des côtés et des angles intérieurs tous égaux.'
                    ],
                    [
                        'question' => 'Combien de côtés possède un hexagone ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe « hexa- » indique six côtés.'
                    ],
                    [
                        'question' => 'Combien de diagonales possède un quadrilatère ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un quadrilatère, chaque sommet peut être relié à deux sommets non consécutifs, ce qui donne deux diagonales.'
                    ],
                    [
                        'question' => 'Combien de diagonales possède un pentagone ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un polygone à n côtés, le nombre de diagonales est n(n - 3)/2. Pour n = 5, on obtient 5.'
                    ],
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un pentagone ?',
                        'choices' => [
                            ['choice_text' => '540°', 'is_correct' => true],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '720°', 'is_correct' => false],
                            ['choice_text' => '450°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme vaut (5 - 2) × 180° = 540°.'
                    ],
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un hexagone ?',
                        'choices' => [
                            ['choice_text' => '720°', 'is_correct' => true],
                            ['choice_text' => '540°', 'is_correct' => false],
                            ['choice_text' => '900°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme vaut (6 - 2) × 180° = 720°.'
                    ],
                    [
                        'question' => 'Dans un pentagone régulier, combien mesure chaque angle intérieur ?',
                        'choices' => [
                            ['choice_text' => '108°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '72°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme vaut 540°. Comme les cinq angles sont égaux, chacun mesure 540° ÷ 5 = 108°.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles et disques',
                'description' => 'Découvrez le rayon, le diamètre, la circonférence et l’aire d’un cercle.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on le segment reliant le centre d’un cercle à un point du cercle ?',
                        'choices' => [
                            ['choice_text' => 'Le rayon', 'is_correct' => true],
                            ['choice_text' => 'Le diamètre', 'is_correct' => false],
                            ['choice_text' => 'La corde uniquement', 'is_correct' => false],
                            ['choice_text' => 'La tangente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon relie le centre d’un cercle à un point situé sur le cercle.'
                    ],
                    [
                        'question' => 'Le diamètre d’un cercle est égal à :',
                        'choices' => [
                            ['choice_text' => 'Deux fois le rayon', 'is_correct' => true],
                            ['choice_text' => 'La moitié du rayon', 'is_correct' => false],
                            ['choice_text' => 'Trois fois le rayon', 'is_correct' => false],
                            ['choice_text' => 'Le rayon au carré', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre traverse le centre et relie deux points opposés du cercle. Il vaut donc 2r.'
                    ],
                    [
                        'question' => 'Un cercle a un rayon de 5 cm. Quel est son diamètre ?',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                            ['choice_text' => '25 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'd = 2r = 2 × 5 = 10 cm.'
                    ],
                    [
                        'question' => 'Quelle formule donne la longueur d’un cercle de rayon r ?',
                        'choices' => [
                            ['choice_text' => '2πr', 'is_correct' => true],
                            ['choice_text' => 'πr²', 'is_correct' => false],
                            ['choice_text' => 'πr', 'is_correct' => false],
                            ['choice_text' => '2r²', 'is_correct' => false],
                        ],
                        'explanation' => 'La circonférence d’un cercle est C = 2πr.'
                    ],
                    [
                        'question' => 'Quelle formule donne l’aire d’un disque de rayon r ?',
                        'choices' => [
                            ['choice_text' => 'πr²', 'is_correct' => true],
                            ['choice_text' => '2πr', 'is_correct' => false],
                            ['choice_text' => 'πr', 'is_correct' => false],
                            ['choice_text' => '2r²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire du disque est A = πr².'
                    ],
                    [
                        'question' => 'Un cercle a un rayon de 3 cm. Quel est son diamètre ?',
                        'choices' => [
                            ['choice_text' => '6 cm', 'is_correct' => true],
                            ['choice_text' => '3 cm', 'is_correct' => false],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre vaut 2 × 3 = 6 cm.'
                    ],
                    [
                        'question' => 'Si le rayon d’un cercle est doublé, son diamètre est :',
                        'choices' => [
                            ['choice_text' => 'Doublé', 'is_correct' => true],
                            ['choice_text' => 'Multiplié par 4', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                            ['choice_text' => 'Divisé par 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme d = 2r, doubler le rayon double également le diamètre.'
                    ],
                    [
                        'question' => 'Si r = 4 cm, quelle expression représente l’aire du disque ?',
                        'choices' => [
                            ['choice_text' => '16π cm²', 'is_correct' => true],
                            ['choice_text' => '8π cm²', 'is_correct' => false],
                            ['choice_text' => '4π cm²', 'is_correct' => false],
                            ['choice_text' => '32π cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = πr² = π × 4² = 16π cm².'
                    ],
                    [
                        'question' => 'Si le diamètre d’un cercle est 14 cm, quel est son rayon ?',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '28 cm', 'is_correct' => false],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon est la moitié du diamètre : 14 ÷ 2 = 7 cm.'
                    ],
                    [
                        'question' => 'Quel point est à égale distance de tous les points d’un cercle ?',
                        'choices' => [
                            ['choice_text' => 'Le centre', 'is_correct' => true],
                            ['choice_text' => 'Un sommet', 'is_correct' => false],
                            ['choice_text' => 'Un point quelconque du cercle', 'is_correct' => false],
                            ['choice_text' => 'Une extrémité du diamètre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les rayons d’un cercle ont la même longueur et partent du centre.'
                    ],
                ],
            ],

            [
                'title' => 'Périmètres et aires',
                'description' => 'Calculez les périmètres et les aires de figures géométriques usuelles.',
                'questions' => [
                    [
                        'question' => 'Quel est le périmètre d’un carré de côté 9 cm ?',
                        'choices' => [
                            ['choice_text' => '36 cm', 'is_correct' => true],
                            ['choice_text' => '81 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '27 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 4 × 9 = 36 cm.'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un carré de côté 9 cm ?',
                        'choices' => [
                            ['choice_text' => '81 cm²', 'is_correct' => true],
                            ['choice_text' => '36 cm²', 'is_correct' => false],
                            ['choice_text' => '18 cm²', 'is_correct' => false],
                            ['choice_text' => '72 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 9² = 81 cm².'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un rectangle de longueur 12 cm et de largeur 5 cm ?',
                        'choices' => [
                            ['choice_text' => '60 cm²', 'is_correct' => true],
                            ['choice_text' => '34 cm²', 'is_correct' => false],
                            ['choice_text' => '17 cm²', 'is_correct' => false],
                            ['choice_text' => '120 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = longueur × largeur = 12 × 5 = 60 cm².'
                    ],
                    [
                        'question' => 'Quel est le périmètre d’un rectangle de longueur 12 cm et de largeur 5 cm ?',
                        'choices' => [
                            ['choice_text' => '34 cm', 'is_correct' => true],
                            ['choice_text' => '60 cm', 'is_correct' => false],
                            ['choice_text' => '24 cm', 'is_correct' => false],
                            ['choice_text' => '17 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 2(12 + 5) = 34 cm.'
                    ],
                    [
                        'question' => 'Quelle formule donne l’aire d’un triangle de base b et de hauteur h ?',
                        'choices' => [
                            ['choice_text' => 'A = (b × h)/2', 'is_correct' => true],
                            ['choice_text' => 'A = b × h', 'is_correct' => false],
                            ['choice_text' => 'A = 2bh', 'is_correct' => false],
                            ['choice_text' => 'A = b + h', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire d’un triangle est égale à la moitié du produit de sa base par sa hauteur.'
                    ],
                    [
                        'question' => 'Un triangle a une base de 10 cm et une hauteur de 6 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '30 cm²', 'is_correct' => true],
                            ['choice_text' => '60 cm²', 'is_correct' => false],
                            ['choice_text' => '16 cm²', 'is_correct' => false],
                            ['choice_text' => '36 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (10 × 6)/2 = 30 cm².'
                    ],
                    [
                        'question' => 'Un parallélogramme a une base de 8 cm et une hauteur de 5 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '40 cm²', 'is_correct' => true],
                            ['choice_text' => '20 cm²', 'is_correct' => false],
                            ['choice_text' => '26 cm²', 'is_correct' => false],
                            ['choice_text' => '13 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = base × hauteur = 8 × 5 = 40 cm².'
                    ],
                    [
                        'question' => 'Un carré a une aire de 49 cm². Quelle est la longueur de son côté ?',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '49 cm', 'is_correct' => false],
                            ['choice_text' => '24,5 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un carré, A = c². Donc c = √49 = 7 cm.'
                    ],
                    [
                        'question' => 'Un rectangle a une aire de 72 cm² et une largeur de 8 cm. Quelle est sa longueur ?',
                        'choices' => [
                            ['choice_text' => '9 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                            ['choice_text' => '64 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Longueur = aire ÷ largeur = 72 ÷ 8 = 9 cm.'
                    ],
                    [
                        'question' => 'Un triangle a pour côtés 4 cm, 5 cm et 7 cm. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '16 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre est 4 + 5 + 7 = 16 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Théorème de Pythagore et triangles rectangles',
                'description' => 'Utilisez le théorème de Pythagore pour calculer des longueurs dans les triangles rectangles.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, comment appelle-t-on le côté opposé à l’angle droit ?',
                        'choices' => [
                            ['choice_text' => 'L’hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'La hauteur', 'is_correct' => false],
                            ['choice_text' => 'La médiane', 'is_correct' => false],
                            ['choice_text' => 'La base uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un triangle rectangle, l’hypoténuse est le côté opposé à l’angle droit et c’est le plus long côté.'
                    ],
                    [
                        'question' => 'Selon le théorème de Pythagore, dans un triangle rectangle de côtés de l’angle droit a et b et d’hypoténuse c :',
                        'choices' => [
                            ['choice_text' => 'c² = a² + b²', 'is_correct' => true],
                            ['choice_text' => 'c = a + b', 'is_correct' => false],
                            ['choice_text' => 'c² = a² - b²', 'is_correct' => false],
                            ['choice_text' => 'a² = b² + c²', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème de Pythagore donne c² = a² + b².'
                    ],
                    [
                        'question' => 'Un triangle rectangle a des côtés de l’angle droit de 3 cm et 4 cm. Quelle est son hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '5 cm', 'is_correct' => true],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 3² + 4² = 9 + 16 = 25, donc c = 5 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle possède une hypoténuse de 13 cm et un côté de 5 cm. Quelle est l’autre longueur ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 5² = 13², donc x² = 169 - 25 = 144 et x = 12 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle possède des côtés de l’angle droit de 6 cm et 8 cm. Quelle est l’hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 6² + 8² = 36 + 64 = 100, donc c = 10 cm.'
                    ],
                    [
                        'question' => 'La relation 5² + 12² = 13² permet d’identifier :',
                        'choices' => [
                            ['choice_text' => 'Un triangle rectangle de côtés 5, 12 et 13', 'is_correct' => true],
                            ['choice_text' => 'Un triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Un carré', 'is_correct' => false],
                            ['choice_text' => 'Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => '25 + 144 = 169 = 13². La réciproque de Pythagore permet d’identifier un triangle rectangle.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle de côtés 9 cm, 12 cm et 15 cm, quel côté est l’hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '15 cm', 'is_correct' => true],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '9 cm', 'is_correct' => false],
                            ['choice_text' => 'Les trois', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypoténuse est le plus long côté, donc ici 15 cm.'
                    ],
                    [
                        'question' => 'Si l’hypoténuse d’un triangle rectangle mesure 10 cm et un côté mesure 6 cm, quelle est l’autre longueur ?',
                        'choices' => [
                            ['choice_text' => '8 cm', 'is_correct' => true],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 6² = 10², donc x² = 100 - 36 = 64 et x = 8 cm.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, l’hypoténuse est toujours :',
                        'choices' => [
                            ['choice_text' => 'Le plus long côté', 'is_correct' => true],
                            ['choice_text' => 'Le plus court côté', 'is_correct' => false],
                            ['choice_text' => 'Égale aux deux autres côtés', 'is_correct' => false],
                            ['choice_text' => 'Toujours horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypoténuse est opposée à l’angle droit et constitue le plus long côté du triangle rectangle.'
                    ],
                    [
                        'question' => 'Le triplet 8, 15, 17 peut-il représenter les côtés d’un triangle rectangle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si 8 est l’hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Seulement si 15 est l’hypoténuse', 'is_correct' => false],
                        ],
                        'explanation' => '8² + 15² = 64 + 225 = 289 = 17². Le triangle est donc rectangle avec 17 comme hypoténuse.'
                    ],
                ],
            ],

            [
                'title' => 'Solides et géométrie dans l’espace',
                'description' => 'Reconnaissez les principaux solides et calculez quelques volumes élémentaires.',
                'questions' => [
                    [
                        'question' => 'Combien de faces possède un cube ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cube possède six faces carrées.'
                    ],
                    [
                        'question' => 'Combien d’arêtes possède un cube ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cube possède 12 arêtes.'
                    ],
                    [
                        'question' => 'Combien de sommets possède un cube ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cube possède huit sommets.'
                    ],
                    [
                        'question' => 'Quelle est la formule du volume d’un pavé droit de longueur L, largeur l et hauteur h ?',
                        'choices' => [
                            ['choice_text' => 'V = Llh', 'is_correct' => true],
                            ['choice_text' => 'V = 2(L + l + h)', 'is_correct' => false],
                            ['choice_text' => 'V = L + l + h', 'is_correct' => false],
                            ['choice_text' => 'V = Llh/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume d’un pavé droit est le produit de ses trois dimensions.'
                    ],
                    [
                        'question' => 'Un cube a une arête de 4 cm. Quel est son volume ?',
                        'choices' => [
                            ['choice_text' => '64 cm³', 'is_correct' => true],
                            ['choice_text' => '16 cm³', 'is_correct' => false],
                            ['choice_text' => '12 cm³', 'is_correct' => false],
                            ['choice_text' => '48 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume d’un cube vaut a³. Donc 4³ = 64 cm³.'
                    ],
                    [
                        'question' => 'Un pavé droit mesure 5 cm × 4 cm × 3 cm. Quel est son volume ?',
                        'choices' => [
                            ['choice_text' => '60 cm³', 'is_correct' => true],
                            ['choice_text' => '12 cm³', 'is_correct' => false],
                            ['choice_text' => '20 cm³', 'is_correct' => false],
                            ['choice_text' => '50 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 5 × 4 × 3 = 60 cm³.'
                    ],
                    [
                        'question' => 'Une sphère est-elle un polyèdre ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement si elle est pleine', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un plan', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sphère possède une surface courbe et n’est pas composée de faces polygonales.'
                    ],
                    [
                        'question' => 'Quel solide possède deux bases circulaires parallèles ?',
                        'choices' => [
                            ['choice_text' => 'Un cylindre', 'is_correct' => true],
                            ['choice_text' => 'Une sphère', 'is_correct' => false],
                            ['choice_text' => 'Un cube', 'is_correct' => false],
                            ['choice_text' => 'Un cône', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cylindre possède deux bases circulaires parallèles.'
                    ],
                    [
                        'question' => 'Quel solide possède une base circulaire et un sommet ?',
                        'choices' => [
                            ['choice_text' => 'Un cône', 'is_correct' => true],
                            ['choice_text' => 'Un cylindre', 'is_correct' => false],
                            ['choice_text' => 'Un cube', 'is_correct' => false],
                            ['choice_text' => 'Une sphère', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cône possède une base circulaire et un sommet situé hors du plan de cette base.'
                    ],
                    [
                        'question' => 'Quelle unité est adaptée à un volume ?',
                        'choices' => [
                            ['choice_text' => 'cm³', 'is_correct' => true],
                            ['choice_text' => 'cm', 'is_correct' => false],
                            ['choice_text' => 'cm²', 'is_correct' => false],
                            ['choice_text' => 'degrés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un volume se mesure en unités cubiques, comme cm³, m³ ou dm³.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations et symétries',
                'description' => 'Identifiez les translations, rotations, symétries et propriétés de conservation.',
                'questions' => [
                    [
                        'question' => 'Quelle transformation fait correspondre une figure à son image par rapport à une droite ?',
                        'choices' => [
                            ['choice_text' => 'Une symétrie axiale', 'is_correct' => true],
                            ['choice_text' => 'Une translation', 'is_correct' => false],
                            ['choice_text' => 'Une rotation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une dilatation', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie axiale utilise une droite comme axe de réflexion.'
                    ],
                    [
                        'question' => 'Quelle transformation déplace tous les points d’une même distance et dans la même direction ?',
                        'choices' => [
                            ['choice_text' => 'Une translation', 'is_correct' => true],
                            ['choice_text' => 'Une symétrie axiale', 'is_correct' => false],
                            ['choice_text' => 'Une rotation', 'is_correct' => false],
                            ['choice_text' => 'Une homothétie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation déplace chaque point selon le même vecteur.'
                    ],
                    [
                        'question' => 'Quelle transformation fait tourner une figure autour d’un point fixe ?',
                        'choices' => [
                            ['choice_text' => 'Une rotation', 'is_correct' => true],
                            ['choice_text' => 'Une translation', 'is_correct' => false],
                            ['choice_text' => 'Une symétrie axiale', 'is_correct' => false],
                            ['choice_text' => 'Une projection', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est définie par un centre, un angle et un sens de rotation.'
                    ],
                    [
                        'question' => 'Une symétrie axiale conserve-t-elle les longueurs ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les carrés', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les triangles', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie axiale est une transformation qui conserve les longueurs et les angles.'
                    ],
                    [
                        'question' => 'Une translation conserve-t-elle les angles ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement les angles droits', 'is_correct' => false],
                            ['choice_text' => 'Seulement les angles aigus', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation conserve les longueurs et les mesures des angles.'
                    ],
                    [
                        'question' => 'Dans une symétrie axiale, l’axe de symétrie est :',
                        'choices' => [
                            ['choice_text' => 'La médiatrice du segment reliant un point et son image', 'is_correct' => true],
                            ['choice_text' => 'Toujours parallèle à ce segment', 'is_correct' => false],
                            ['choice_text' => 'Toujours confondu avec ce segment', 'is_correct' => false],
                            ['choice_text' => 'Toujours horizontal', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe de symétrie est perpendiculaire au segment reliant un point à son image et passe par son milieu.'
                    ],
                    [
                        'question' => 'Une rotation de 360° autour d’un point laisse une figure :',
                        'choices' => [
                            ['choice_text' => 'Inchangée', 'is_correct' => true],
                            ['choice_text' => 'Déplacée d’un côté', 'is_correct' => false],
                            ['choice_text' => 'Réfléchie', 'is_correct' => false],
                            ['choice_text' => 'Agrandie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tour complet de 360° ramène chaque point à sa position initiale.'
                    ],
                    [
                        'question' => 'Quel transformation conserve les distances entre tous les points ?',
                        'choices' => [
                            ['choice_text' => 'Une isométrie', 'is_correct' => true],
                            ['choice_text' => 'Une agrandissement quelconque', 'is_correct' => false],
                            ['choice_text' => 'Une réduction quelconque', 'is_correct' => false],
                            ['choice_text' => 'Une homothétie de rapport 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une isométrie conserve toutes les distances ; les translations, rotations et symétries en sont des exemples.'
                    ],
                    [
                        'question' => 'Une figure possède un axe de symétrie si :',
                        'choices' => [
                            ['choice_text' => 'La figure se superpose à son image par réflexion sur cet axe', 'is_correct' => true],
                            ['choice_text' => 'Elle possède nécessairement quatre côtés', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément un cercle', 'is_correct' => false],
                            ['choice_text' => 'Tous ses angles sont droits', 'is_correct' => false],
                        ],
                        'explanation' => 'Un axe de symétrie partage la figure de manière à ce que les deux parties soient images l’une de l’autre.'
                    ],
                    [
                        'question' => 'Combien d’axes de symétrie possède un carré ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un carré possède quatre axes de symétrie : deux médiatrices des côtés et deux diagonales.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de géométrie',
                'description' => 'Révisez les principales notions de géométrie plane et de géométrie dans l’espace.',
                'questions' => [
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un triangle ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des angles d’un triangle vaut toujours 180°.'
                    ],
                    [
                        'question' => 'Un carré a un côté de 8 cm. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '64 cm²', 'is_correct' => true],
                            ['choice_text' => '32 cm²', 'is_correct' => false],
                            ['choice_text' => '16 cm²', 'is_correct' => false],
                            ['choice_text' => '24 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 8² = 64 cm².'
                    ],
                    [
                        'question' => 'Un rectangle mesure 10 cm sur 4 cm. Quel est son périmètre ?',
                        'choices' => [
                            ['choice_text' => '28 cm', 'is_correct' => true],
                            ['choice_text' => '40 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 2(10 + 4) = 28 cm.'
                    ],
                    [
                        'question' => 'Un cercle a un rayon de 6 cm. Quel est son diamètre ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '36 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre vaut 2 × 6 = 12 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle possède des côtés de l’angle droit de 5 cm et 12 cm. Quelle est son hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '13 cm', 'is_correct' => true],
                            ['choice_text' => '17 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 5² + 12² = 25 + 144 = 169, donc c = 13 cm.'
                    ],
                    [
                        'question' => 'Quel quadrilatère possède quatre côtés égaux et quatre angles droits ?',
                        'choices' => [
                            ['choice_text' => 'Le carré', 'is_correct' => true],
                            ['choice_text' => 'Le trapèze', 'is_correct' => false],
                            ['choice_text' => 'Le triangle', 'is_correct' => false],
                            ['choice_text' => 'Le parallélogramme quelconque', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré possède quatre côtés égaux et quatre angles droits.'
                    ],
                    [
                        'question' => 'Combien de faces possède un cube ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cube possède six faces carrées.'
                    ],
                    [
                        'question' => 'Quelle formule donne l’aire d’un disque de rayon r ?',
                        'choices' => [
                            ['choice_text' => 'πr²', 'is_correct' => true],
                            ['choice_text' => '2πr', 'is_correct' => false],
                            ['choice_text' => 'πr', 'is_correct' => false],
                            ['choice_text' => '2r', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire d’un disque est A = πr².'
                    ],
                    [
                        'question' => 'Quel type de triangle possède trois côtés égaux ?',
                        'choices' => [
                            ['choice_text' => 'Équilatéral', 'is_correct' => true],
                            ['choice_text' => 'Isocèle', 'is_correct' => false],
                            ['choice_text' => 'Scalène', 'is_correct' => false],
                            ['choice_text' => 'Rectangle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle équilatéral possède trois côtés de même longueur.'
                    ],
                    [
                        'question' => 'Quelle transformation déplace une figure sans la tourner ni la déformer ?',
                        'choices' => [
                            ['choice_text' => 'Une translation', 'is_correct' => true],
                            ['choice_text' => 'Une rotation de 90°', 'is_correct' => false],
                            ['choice_text' => 'Une symétrie axiale', 'is_correct' => false],
                            ['choice_text' => 'Une homothétie de rapport 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation déplace tous les points selon le même vecteur et conserve la forme et les dimensions.'
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
                    'duration' => 20,
                    'passing_score' => 70,
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