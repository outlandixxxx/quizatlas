<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OpticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'optics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l\'optique',
                'description' => 'Découvrir les notions fondamentales de la lumière et les principales grandeurs utilisées en optique.',
                'questions' => [
                    [
                        'question' => 'Qu\'étudie principalement l\'optique ?',
                        'choices' => [
                            ['choice_text' => 'La lumière et ses interactions avec la matière', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les vibrations mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les champs gravitationnels', 'is_correct' => false],
                            ['choice_text' => 'La structure des fluides', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'optique étudie notamment la propagation de la lumière, sa réflexion, sa réfraction et sa formation d\'images.',
                    ],
                    [
                        'question' => 'La lumière visible est-elle une onde électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, c\'est une onde mécanique', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans l\'eau', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le verre', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière visible appartient au spectre électromagnétique.',
                    ],
                    [
                        'question' => 'La lumière peut-elle se propager dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement à très basse température', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu\'elle est infrarouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Contrairement aux ondes mécaniques, les ondes électromagnétiques n\'ont pas besoin d\'un milieu matériel.',
                    ],
                    [
                        'question' => 'Quelle est approximativement la célérité de la lumière dans le vide ?',
                        'choices' => [
                            ['choice_text' => '3 × 10^8 m/s', 'is_correct' => true],
                            ['choice_text' => '3 × 10^3 m/s', 'is_correct' => false],
                            ['choice_text' => '3 × 10^5 m/s', 'is_correct' => false],
                            ['choice_text' => '3 × 10^2 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, la lumière se propage à environ 3,00 × 10^8 m/s.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise une couleur dans une description simple de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'La longueur d\'onde ou la fréquence', 'is_correct' => true],
                            ['choice_text' => 'La masse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La viscosité du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'La couleur perçue de la lumière visible est liée à sa fréquence ou, dans un milieu donné, à sa longueur d\'onde.',
                    ],
                    [
                        'question' => 'Quelle région du spectre électromagnétique est directement visible par l\'œil humain ?',
                        'choices' => [
                            ['choice_text' => 'La lumière visible', 'is_correct' => true],
                            ['choice_text' => 'Les ondes radio uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les rayons X uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les rayons gamma uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'œil humain est sensible à une bande limitée du spectre électromagnétique appelée lumière visible.',
                    ],
                    [
                        'question' => 'Quel objet peut produire directement de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Le Soleil', 'is_correct' => true],
                            ['choice_text' => 'Un miroir non éclairé', 'is_correct' => false],
                            ['choice_text' => 'Une feuille blanche dans l\'obscurité', 'is_correct' => false],
                            ['choice_text' => 'Une table en bois non éclairée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Soleil est une source primaire de lumière : il émet lui-même de la lumière.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un objet qui renvoie la lumière reçue mais n\'en produit pas principalement lui-même ?',
                        'choices' => [
                            ['choice_text' => 'Une source secondaire', 'is_correct' => true],
                            ['choice_text' => 'Une source primaire', 'is_correct' => false],
                            ['choice_text' => 'Une source électrique parfaite', 'is_correct' => false],
                            ['choice_text' => 'Un absorbeur parfait', 'is_correct' => false],
                        ],
                        'explanation' => 'La Lune, par exemple, est visible parce qu\'elle réfléchit la lumière du Soleil.',
                    ],
                    [
                        'question' => 'Dans l\'approximation de l\'optique géométrique, la lumière est représentée par :',
                        'choices' => [
                            ['choice_text' => 'Des rayons lumineux', 'is_correct' => true],
                            ['choice_text' => 'Des particules immobiles uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des lignes de courant', 'is_correct' => false],
                            ['choice_text' => 'Des trajectoires gravitationnelles uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'optique géométrique utilise des rayons lumineux pour décrire simplement la propagation de la lumière.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque la lumière rencontre un matériau opaque ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut être réfléchie et/ou absorbée', 'is_correct' => true],
                            ['choice_text' => 'Elle traverse toujours intégralement le matériau', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement sonore', 'is_correct' => false],
                            ['choice_text' => 'Elle cesse nécessairement d\'exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Un matériau opaque ne laisse pas passer la lumière de manière significative ; une partie peut être réfléchie et une autre absorbée.',
                    ],
                ],
            ],

            [
                'title' => 'Réflexion de la lumière',
                'description' => 'Comprendre les lois de la réflexion et leur application aux miroirs plans.',
                'questions' => [
                    [
                        'question' => 'Que signifie la réflexion de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Le retour de la lumière dans le milieu d\'origine après avoir rencontré une surface', 'is_correct' => true],
                            ['choice_text' => 'Le passage de la lumière dans un matériau transparent', 'is_correct' => false],
                            ['choice_text' => 'La disparition complète de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La transformation de la lumière en son', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d\'une réflexion, la lumière repart dans le milieu d\'où elle provenait.',
                    ],
                    [
                        'question' => 'Par rapport à quelle direction mesure-t-on généralement les angles d\'incidence et de réflexion ?',
                        'choices' => [
                            ['choice_text' => 'La normale à la surface', 'is_correct' => true],
                            ['choice_text' => 'La surface elle-même', 'is_correct' => false],
                            ['choice_text' => 'La verticale terrestre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La direction du vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les angles optiques sont mesurés par rapport à la normale, qui est perpendiculaire à la surface.',
                    ],
                    [
                        'question' => 'Selon la loi de la réflexion, l\'angle de réflexion est :',
                        'choices' => [
                            ['choice_text' => 'Égal à l\'angle d\'incidence', 'is_correct' => true],
                            ['choice_text' => 'Toujours deux fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Indépendant de l\'angle d\'incidence', 'is_correct' => false],
                        ],
                        'explanation' => 'La première loi de la réflexion donne i = r.',
                    ],
                    [
                        'question' => 'Un miroir plan possède idéalement une surface :',
                        'choices' => [
                            ['choice_text' => 'Très réfléchissante', 'is_correct' => true],
                            ['choice_text' => 'Parfaitement absorbante', 'is_correct' => false],
                            ['choice_text' => 'Toujours rugueuse à l\'échelle de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement opaque au sens thermique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir est conçu pour réfléchir efficacement la lumière.',
                    ],
                    [
                        'question' => 'Quelle image donne un miroir plan pour un objet réel placé devant lui ?',
                        'choices' => [
                            ['choice_text' => 'Une image virtuelle, droite et de même taille', 'is_correct' => true],
                            ['choice_text' => 'Une image toujours réelle et inversée', 'is_correct' => false],
                            ['choice_text' => 'Une image plus grande dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Aucune image', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir plan forme une image virtuelle, droite, de même taille et symétrique de l\'objet par rapport au plan du miroir.',
                    ],
                    [
                        'question' => 'Dans un miroir plan, l\'image semble située :',
                        'choices' => [
                            ['choice_text' => 'À la même distance derrière le miroir que l\'objet devant le miroir', 'is_correct' => true],
                            ['choice_text' => 'Toujours sur la surface du miroir', 'is_correct' => false],
                            ['choice_text' => 'Toujours deux fois plus loin que l\'objet', 'is_correct' => false],
                            ['choice_text' => 'À une distance infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un miroir plan, la distance image-miroir est égale à la distance objet-miroir.',
                    ],
                    [
                        'question' => 'Comment se comporte un rayon qui arrive perpendiculairement à un miroir plan ?',
                        'choices' => [
                            ['choice_text' => 'Il repart sur lui-même', 'is_correct' => true],
                            ['choice_text' => 'Il est toujours absorbé', 'is_correct' => false],
                            ['choice_text' => 'Il est dévié de 90°', 'is_correct' => false],
                            ['choice_text' => 'Il traverse toujours le miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec une incidence normale, l\'angle d\'incidence est nul et le rayon réfléchi repart dans la direction opposée.',
                    ],
                    [
                        'question' => 'Pourquoi voit-on son visage dans un miroir ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la lumière provenant du visage est réfléchie vers les yeux', 'is_correct' => true],
                            ['choice_text' => 'Parce que le miroir produit lui-même la lumière du visage', 'is_correct' => false],
                            ['choice_text' => 'Parce que la lumière traverse le miroir', 'is_correct' => false],
                            ['choice_text' => 'Parce que les yeux émettent de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière diffusée ou réfléchie par le visage arrive au miroir puis est réfléchie vers l\'observateur.',
                    ],
                    [
                        'question' => 'Une surface rugueuse peut-elle réfléchir la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Oui, mais elle produit généralement une réflexion diffuse', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si elle est métallique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces rugueuses réfléchissent dans de nombreuses directions, ce qui produit une réflexion diffuse.',
                    ],
                    [
                        'question' => 'Quelle propriété explique que deux rayons réfléchis par un miroir puissent avoir des directions différentes ?',
                        'choices' => [
                            ['choice_text' => 'Leurs angles d\'incidence peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'La lumière possède plusieurs vitesses dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Le miroir change la fréquence au hasard', 'is_correct' => false],
                            ['choice_text' => 'La masse du miroir détermine chaque rayon', 'is_correct' => false],
                        ],
                        'explanation' => 'La direction du rayon réfléchi dépend de la direction du rayon incident et de l\'orientation de la surface.',
                    ],
                    [
                        'question' => 'Dans la loi de la réflexion, l\'angle d\'incidence est mesuré entre :',
                        'choices' => [
                            ['choice_text' => 'Le rayon incident et la normale', 'is_correct' => true],
                            ['choice_text' => 'Le rayon incident et la surface uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le rayon réfléchi et la surface uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les deux surfaces du miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'angle d\'incidence est défini entre le rayon incident et la normale à la surface au point d\'incidence.',
                    ],
                ],
            ],

            [
                'title' => 'Réfraction et indice optique',
                'description' => 'Introduire la réfraction et comprendre le rôle de l\'indice de réfraction.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que la réfraction de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Le changement de direction de la lumière lorsqu\'elle passe d\'un milieu à un autre', 'is_correct' => true],
                            ['choice_text' => 'La disparition de la lumière à la surface', 'is_correct' => false],
                            ['choice_text' => 'La production de lumière par un miroir', 'is_correct' => false],
                            ['choice_text' => 'La transformation de la lumière en matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu\'elle change de milieu et que sa vitesse change, la lumière peut changer de direction : c\'est la réfraction.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise l\'effet optique d\'un milieu sur la vitesse de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'L\'indice de réfraction', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La puissance optique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'indice de réfraction n est défini par n = c/v dans un milieu non dissipatif simple.',
                    ],
                    [
                        'question' => 'Dans la relation n = c/v, que représente c ?',
                        'choices' => [
                            ['choice_text' => 'La célérité de la lumière dans le vide', 'is_correct' => true],
                            ['choice_text' => 'La célérité du son dans l\'air', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du milieu', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'c désigne la vitesse de la lumière dans le vide.',
                    ],
                    [
                        'question' => 'Dans un milieu d\'indice n > 1, la lumière se propage-t-elle plus lentement que dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle se propage plus vite', 'is_correct' => false],
                            ['choice_text' => 'Elle a toujours exactement la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'La question ne dépend pas de n', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = c/n, un indice supérieur à 1 correspond à une vitesse inférieure à c.',
                    ],
                    [
                        'question' => 'Lorsque la lumière passe de l\'air au verre, sa vitesse :',
                        'choices' => [
                            ['choice_text' => 'Diminue généralement', 'is_correct' => true],
                            ['choice_text' => 'Augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Ne dépend jamais du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'indice du verre est supérieur à celui de l\'air, donc la vitesse de la lumière y est plus faible.',
                    ],
                    [
                        'question' => 'Que devient généralement la direction d\'un rayon lorsqu\'il passe obliquement de l\'air vers un milieu plus réfringent ?',
                        'choices' => [
                            ['choice_text' => 'Il se rapproche de la normale', 'is_correct' => true],
                            ['choice_text' => 'Il s\'éloigne toujours de la normale', 'is_correct' => false],
                            ['choice_text' => 'Il repart exactement sur lui-même', 'is_correct' => false],
                            ['choice_text' => 'Il ne change jamais de direction', 'is_correct' => false],
                        ],
                        'explanation' => 'En passant vers un milieu d\'indice plus élevé, un rayon oblique se rapproche généralement de la normale.',
                    ],
                    [
                        'question' => 'Si un rayon passe du verre vers l\'air, il se dirige généralement :',
                        'choices' => [
                            ['choice_text' => 'En s\'éloignant de la normale', 'is_correct' => true],
                            ['choice_text' => 'Vers la normale', 'is_correct' => false],
                            ['choice_text' => 'Toujours parallèlement à la surface', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement à la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'En passant d\'un milieu plus réfringent vers un milieu moins réfringent, le rayon s\'éloigne généralement de la normale.',
                    ],
                    [
                        'question' => 'La fréquence de la lumière change-t-elle lorsqu\'elle passe d\'un milieu transparent à un autre ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle reste la même à la traversée de l\'interface', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle double toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend uniquement de l\'angle d\'incidence', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est fixée par la source ; c\'est principalement la vitesse et donc la longueur d\'onde qui changent dans le nouveau milieu.',
                    ],
                    [
                        'question' => 'Dans un milieu transparent, si la vitesse de la lumière diminue alors que la fréquence reste constante, la longueur d\'onde :',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v = λf et une fréquence constante, une vitesse plus faible signifie une longueur d\'onde plus courte.',
                    ],
                    [
                        'question' => 'Quelle loi relie les angles d\'incidence et de réfraction aux indices des milieux ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => true],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                            ['choice_text' => 'La loi des mailles', 'is_correct' => false],
                            ['choice_text' => 'La loi de Pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Snell-Descartes relie les indices et les angles par n₁ sin(i) = n₂ sin(r).',
                    ],
                ],
            ],

            [
                'title' => 'Lentilles convergentes et divergentes',
                'description' => 'Découvrir les deux grandes familles de lentilles et leur effet sur les rayons lumineux.',
                'questions' => [
                    [
                        'question' => 'Quelle lentille est plus épaisse au centre qu\'aux bords ?',
                        'choices' => [
                            ['choice_text' => 'Une lentille convergente', 'is_correct' => true],
                            ['choice_text' => 'Une lentille divergente', 'is_correct' => false],
                            ['choice_text' => 'Un miroir plan', 'is_correct' => false],
                            ['choice_text' => 'Une lame opaque', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l\'air, une lentille convergente classique est plus épaisse au centre qu\'aux bords.',
                    ],
                    [
                        'question' => 'Quel effet produit une lentille convergente sur des rayons parallèles à l\'axe principal ?',
                        'choices' => [
                            ['choice_text' => 'Elle les fait converger vers un foyer', 'is_correct' => true],
                            ['choice_text' => 'Elle les fait toujours diverger', 'is_correct' => false],
                            ['choice_text' => 'Elle les absorbe tous', 'is_correct' => false],
                            ['choice_text' => 'Elle les rend perpendiculaires à l\'axe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lentille convergente transforme un faisceau parallèle en un faisceau convergent vers le foyer image.',
                    ],
                    [
                        'question' => 'Quel effet produit une lentille divergente sur des rayons parallèles ?',
                        'choices' => [
                            ['choice_text' => 'Elle les fait diverger', 'is_correct' => true],
                            ['choice_text' => 'Elle les fait converger vers un foyer réel', 'is_correct' => false],
                            ['choice_text' => 'Elle les arrête complètement', 'is_correct' => false],
                            ['choice_text' => 'Elle les transforme en ondes sonores', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lentille divergente écarte les rayons parallèles ; ils semblent provenir d\'un foyer virtuel.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on le point où convergent les rayons parallèles à l\'axe après une lentille convergente idéale ?',
                        'choices' => [
                            ['choice_text' => 'Le foyer image', 'is_correct' => true],
                            ['choice_text' => 'Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => 'Le point de rupture', 'is_correct' => false],
                            ['choice_text' => 'Le nœud optique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le foyer image F\' est le point de convergence des rayons parallèles à l\'axe après une lentille convergente.',
                    ],
                    [
                        'question' => 'La distance entre le centre optique et le foyer est appelée :',
                        'choices' => [
                            ['choice_text' => 'La distance focale', 'is_correct' => true],
                            ['choice_text' => 'La longueur d\'onde', 'is_correct' => false],
                            ['choice_text' => 'La distance de sécurité', 'is_correct' => false],
                            ['choice_text' => 'La puissance électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance focale mesure la distance entre le centre optique et le foyer.',
                    ],
                    [
                        'question' => 'Une lentille convergente peut-elle former une image réelle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement si l\'objet est lumineux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lentille convergente forme une image réelle lorsque l\'objet est placé au-delà du foyer objet.',
                    ],
                    [
                        'question' => 'Une lentille divergente forme généralement, pour un objet réel, une image :',
                        'choices' => [
                            ['choice_text' => 'Virtuelle, droite et réduite', 'is_correct' => true],
                            ['choice_text' => 'Réelle, inversée et toujours agrandie', 'is_correct' => false],
                            ['choice_text' => 'Toujours réelle et de même taille', 'is_correct' => false],
                            ['choice_text' => 'Toujours située à l\'infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet réel, une lentille divergente donne généralement une image virtuelle, droite et plus petite.',
                    ],
                    [
                        'question' => 'Quel rayon est particulièrement utile pour construire graphiquement l\'image avec une lentille mince ?',
                        'choices' => [
                            ['choice_text' => 'Le rayon parallèle à l\'axe', 'is_correct' => true],
                            ['choice_text' => 'Un rayon choisi au hasard sans relation avec la lentille', 'is_correct' => false],
                            ['choice_text' => 'Un rayon qui n\'atteint jamais la lentille', 'is_correct' => false],
                            ['choice_text' => 'Un rayon uniquement vertical', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une lentille convergente, un rayon parallèle à l\'axe ressort en passant par le foyer image.',
                    ],
                    [
                        'question' => 'Un rayon passant par le centre optique d\'une lentille mince est approximativement :',
                        'choices' => [
                            ['choice_text' => 'Non dévié', 'is_correct' => true],
                            ['choice_text' => 'Réfléchi vers le foyer', 'is_correct' => false],
                            ['choice_text' => 'Toujours arrêté', 'is_correct' => false],
                            ['choice_text' => 'Transformé en rayon sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l\'approximation de la lentille mince, un rayon passant par le centre optique n\'est pratiquement pas dévié.',
                    ],
                    [
                        'question' => 'Comment détermine-t-on la puissance optique P d\'une lentille en fonction de sa distance focale f\' exprimée en mètres ?',
                        'choices' => [
                            ['choice_text' => 'P = 1/f\'', 'is_correct' => true],
                            ['choice_text' => 'P = f\'²', 'is_correct' => false],
                            ['choice_text' => 'P = f\'/1', 'is_correct' => false],
                            ['choice_text' => 'P = 2f\'', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance optique est donnée par P = 1/f\' lorsque f\' est exprimée en mètres.',
                    ],
                ],
            ],

            [
                'title' => 'Formation des images',
                'description' => 'Comprendre les notions d\'objet réel, d\'image réelle ou virtuelle et les constructions simples.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une image réelle ?',
                        'choices' => [
                            ['choice_text' => 'Une image obtenue par la convergence effective des rayons lumineux', 'is_correct' => true],
                            ['choice_text' => 'Une image que personne ne peut observer', 'is_correct' => false],
                            ['choice_text' => 'Une image toujours virtuelle', 'is_correct' => false],
                            ['choice_text' => 'Une image produite uniquement par un écran noir', 'is_correct' => false],
                        ],
                        'explanation' => 'Une image réelle correspond à un endroit où les rayons lumineux convergent effectivement ; elle peut être recueillie sur un écran.',
                    ],
                    [
                        'question' => 'Une image virtuelle peut-elle être projetée directement sur un écran ?',
                        'choices' => [
                            ['choice_text' => 'Non, pas directement', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement avec un miroir plan', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque l\'image est droite', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une image virtuelle, les rayons ne convergent pas réellement à l\'emplacement apparent de l\'image.',
                    ],
                    [
                        'question' => 'Un miroir plan forme une image :',
                        'choices' => [
                            ['choice_text' => 'Virtuelle', 'is_correct' => true],
                            ['choice_text' => 'Toujours réelle', 'is_correct' => false],
                            ['choice_text' => 'Toujours projetable sur un écran', 'is_correct' => false],
                            ['choice_text' => 'Toujours plus grande que l\'objet', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'image d\'un objet réel dans un miroir plan est virtuelle.',
                    ],
                    [
                        'question' => 'Pour une lentille convergente, si l\'objet est placé très loin de la lentille, l\'image se forme :',
                        'choices' => [
                            ['choice_text' => 'Près du foyer image', 'is_correct' => true],
                            ['choice_text' => 'Toujours au centre optique', 'is_correct' => false],
                            ['choice_text' => 'Derrière l\'objet', 'is_correct' => false],
                            ['choice_text' => 'Toujours à l\'infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet très éloigné, les rayons incidents sont presque parallèles et convergent près du foyer image.',
                    ],
                    [
                        'question' => 'Pour une lentille convergente, un objet placé entre la lentille et son foyer donne généralement une image :',
                        'choices' => [
                            ['choice_text' => 'Virtuelle, droite et agrandie', 'is_correct' => true],
                            ['choice_text' => 'Réelle et réduite', 'is_correct' => false],
                            ['choice_text' => 'Réelle et inversée', 'is_correct' => false],
                            ['choice_text' => 'Toujours de même taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce cas, les rayons émergents divergent et leurs prolongements se coupent derrière la lentille, formant une image virtuelle agrandie.',
                    ],
                    [
                        'question' => 'Que signifie une image inversée ?',
                        'choices' => [
                            ['choice_text' => 'Elle est renversée par rapport à l\'objet', 'is_correct' => true],
                            ['choice_text' => 'Elle est nécessairement virtuelle', 'is_correct' => false],
                            ['choice_text' => 'Elle a toujours une taille plus petite', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement située dans le même plan que l\'objet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une image inversée est orientée à l\'opposé de l\'orientation de l\'objet selon l\'axe vertical choisi.',
                    ],
                    [
                        'question' => 'Que signifie qu\'une image est agrandie ?',
                        'choices' => [
                            ['choice_text' => 'Sa taille est supérieure à celle de l\'objet', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours plus éloignée', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours réelle', 'is_correct' => false],
                            ['choice_text' => 'Elle possède une fréquence plus élevée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une image agrandie possède une dimension transverse supérieure à celle de l\'objet.',
                    ],
                    [
                        'question' => 'Quel instrument optique utilise principalement des lentilles pour permettre l\'observation d\'objets éloignés ?',
                        'choices' => [
                            ['choice_text' => 'La lunette astronomique', 'is_correct' => true],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lunette astronomique utilise des éléments optiques pour former et observer l\'image d\'objets très éloignés.',
                    ],
                    [
                        'question' => 'Quel instrument utilise une lentille pour agrandir l\'image d\'un petit objet ?',
                        'choices' => [
                            ['choice_text' => 'La loupe', 'is_correct' => true],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une loupe utilise une lentille convergente placée correctement pour produire une image virtuelle agrandie.',
                    ],
                    [
                        'question' => 'Une image formée sur un écran est nécessairement :',
                        'choices' => [
                            ['choice_text' => 'Réelle', 'is_correct' => true],
                            ['choice_text' => 'Virtuelle', 'is_correct' => false],
                            ['choice_text' => 'Toujours droite', 'is_correct' => false],
                            ['choice_text' => 'Toujours agrandie', 'is_correct' => false],
                        ],
                        'explanation' => 'La possibilité de recueillir l\'image sur un écran indique que les rayons lumineux se croisent réellement : l\'image est réelle.',
                    ],
                ],
            ],

            [
                'title' => 'Miroirs courbes',
                'description' => 'Découvrir les miroirs concaves et convexes et leurs principales propriétés.',
                'questions' => [
                    [
                        'question' => 'Un miroir concave possède une surface réfléchissante qui est :',
                        'choices' => [
                            ['choice_text' => 'Courbée vers l\'intérieur', 'is_correct' => true],
                            ['choice_text' => 'Toujours parfaitement plane', 'is_correct' => false],
                            ['choice_text' => 'Courbée uniquement vers l\'extérieur', 'is_correct' => false],
                            ['choice_text' => 'Sans aucune surface réfléchissante', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir concave présente sa surface réfléchissante du côté intérieur d\'une sphère.',
                    ],
                    [
                        'question' => 'Quel effet un miroir concave peut-il avoir sur des rayons parallèles à l\'axe principal ?',
                        'choices' => [
                            ['choice_text' => 'Les faire converger vers un foyer', 'is_correct' => true],
                            ['choice_text' => 'Les faire diverger systématiquement', 'is_correct' => false],
                            ['choice_text' => 'Les absorber complètement', 'is_correct' => false],
                            ['choice_text' => 'Les transformer en lumière infrarouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir concave convergent peut réfléchir des rayons parallèles vers son foyer.',
                    ],
                    [
                        'question' => 'Un miroir convexe a une surface réfléchissante :',
                        'choices' => [
                            ['choice_text' => 'Courbée vers l\'extérieur', 'is_correct' => true],
                            ['choice_text' => 'Toujours plane', 'is_correct' => false],
                            ['choice_text' => 'Située nécessairement à l\'intérieur d\'une sphère', 'is_correct' => false],
                            ['choice_text' => 'Qui ne réfléchit pas la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un miroir convexe, la surface réfléchissante forme la partie extérieure de la courbure.',
                    ],
                    [
                        'question' => 'Un miroir convexe forme généralement une image d\'un objet réel qui est :',
                        'choices' => [
                            ['choice_text' => 'Virtuelle, droite et réduite', 'is_correct' => true],
                            ['choice_text' => 'Réelle, inversée et agrandie', 'is_correct' => false],
                            ['choice_text' => 'Réelle et de même taille', 'is_correct' => false],
                            ['choice_text' => 'Toujours située devant le miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir convexe donne une image virtuelle, droite et plus petite, ce qui explique son usage pour élargir le champ de vision.',
                    ],
                    [
                        'question' => 'Pourquoi les rétroviseurs latéraux des véhicules peuvent-ils utiliser des miroirs convexes ?',
                        'choices' => [
                            ['choice_text' => 'Ils offrent un champ de vision plus large', 'is_correct' => true],
                            ['choice_text' => 'Ils agrandissent toujours les objets', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment tous les angles morts', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent la lumière plus rapide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le miroir convexe permet d\'observer une région plus large derrière ou sur le côté du véhicule.',
                    ],
                    [
                        'question' => 'Dans un miroir concave, le centre de courbure correspond à :',
                        'choices' => [
                            ['choice_text' => 'Le centre de la sphère dont le miroir constitue une partie', 'is_correct' => true],
                            ['choice_text' => 'Le point où la lumière cesse d\'exister', 'is_correct' => false],
                            ['choice_text' => 'Le centre de gravité de la Terre', 'is_correct' => false],
                            ['choice_text' => 'Le point d\'où vient toujours la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre de courbure C est le centre de la sphère géométrique associée au miroir sphérique.',
                    ],
                    [
                        'question' => 'Pour un miroir sphérique, la distance focale est liée au rayon de courbure R par :',
                        'choices' => [
                            ['choice_text' => 'f = R/2', 'is_correct' => true],
                            ['choice_text' => 'f = 2R', 'is_correct' => false],
                            ['choice_text' => 'f = R²', 'is_correct' => false],
                            ['choice_text' => 'f = 1/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l\'approximation paraxiale d\'un miroir sphérique, le foyer est situé à environ R/2 du sommet.',
                    ],
                    [
                        'question' => 'Un rayon qui arrive sur un miroir sphérique en passant par le centre de courbure est réfléchi :',
                        'choices' => [
                            ['choice_text' => 'Sur lui-même', 'is_correct' => true],
                            ['choice_text' => 'À 90° par rapport à sa direction initiale', 'is_correct' => false],
                            ['choice_text' => 'Vers le foyer uniquement', 'is_correct' => false],
                            ['choice_text' => 'Toujours hors du miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon arrive perpendiculairement à la surface au point d\'incidence, donc il est réfléchi sur lui-même.',
                    ],
                    [
                        'question' => 'Pour un miroir concave, un objet placé très loin de lui produit une image :',
                        'choices' => [
                            ['choice_text' => 'Près du foyer', 'is_correct' => true],
                            ['choice_text' => 'Au sommet du miroir', 'is_correct' => false],
                            ['choice_text' => 'Toujours derrière le miroir', 'is_correct' => false],
                            ['choice_text' => 'À une distance infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet très éloigné envoie pratiquement des rayons parallèles qui convergent près du foyer.',
                    ],
                    [
                        'question' => 'Quel type de miroir est généralement utilisé pour concentrer la lumière solaire dans certains dispositifs ?',
                        'choices' => [
                            ['choice_text' => 'Un miroir concave', 'is_correct' => true],
                            ['choice_text' => 'Un miroir convexe', 'is_correct' => false],
                            ['choice_text' => 'Un miroir parfaitement absorbant', 'is_correct' => false],
                            ['choice_text' => 'Une surface mate uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir concave peut concentrer des rayons parallèles vers une région proche de son foyer.',
                    ],
                    [
                        'question' => 'Quelle est une conséquence directe de la nature convergente d\'un miroir concave ?',
                        'choices' => [
                            ['choice_text' => 'Il peut former des images réelles selon la position de l\'objet', 'is_correct' => true],
                            ['choice_text' => 'Il ne peut former que des images virtuelles', 'is_correct' => false],
                            ['choice_text' => 'Il ne produit jamais de réflexion', 'is_correct' => false],
                            ['choice_text' => 'Il transforme toute lumière en chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir concave peut former une image réelle lorsque les rayons réfléchis convergent effectivement.',
                    ],
                ],
            ],

            [
                'title' => 'Dispersion et spectre lumineux',
                'description' => 'Introduire la dispersion de la lumière et comprendre l\'origine des couleurs observées dans certains phénomènes.',
                'questions' => [
                    [
                        'question' => 'Qu\'appelle-t-on dispersion de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'La séparation de la lumière selon ses différentes longueurs d\'onde', 'is_correct' => true],
                            ['choice_text' => 'La disparition de toutes les couleurs', 'is_correct' => false],
                            ['choice_text' => 'La transformation de la lumière en son', 'is_correct' => false],
                            ['choice_text' => 'La diminution obligatoire de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion sépare spatialement les différentes composantes spectrales d\'une lumière.',
                    ],
                    [
                        'question' => 'Quel objet naturel produit un spectre coloré grâce à la lumière solaire et aux gouttes d\'eau ?',
                        'choices' => [
                            ['choice_text' => 'L\'arc-en-ciel', 'is_correct' => true],
                            ['choice_text' => 'Une ombre simple', 'is_correct' => false],
                            ['choice_text' => 'Un miroir plan', 'is_correct' => false],
                            ['choice_text' => 'Une plaque métallique opaque', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'arc-en-ciel résulte notamment de la réfraction, de la dispersion et de la réflexion de la lumière dans les gouttes d\'eau.',
                    ],
                    [
                        'question' => 'Quelle couleur visible possède généralement la plus petite longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Le violet', 'is_correct' => true],
                            ['choice_text' => 'Le rouge', 'is_correct' => false],
                            ['choice_text' => 'L\'orange', 'is_correct' => false],
                            ['choice_text' => 'Le jaune', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le domaine visible, le violet correspond à des longueurs d\'onde plus courtes que le rouge.',
                    ],
                    [
                        'question' => 'Quelle couleur visible possède généralement la plus grande longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Le rouge', 'is_correct' => true],
                            ['choice_text' => 'Le violet', 'is_correct' => false],
                            ['choice_text' => 'Le bleu', 'is_correct' => false],
                            ['choice_text' => 'Le vert', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rouge se trouve à l\'extrémité des grandes longueurs d\'onde du visible.',
                    ],
                    [
                        'question' => 'La lumière blanche est-elle composée d\'une seule longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle contient un ensemble de longueurs d\'onde visibles', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle correspond uniquement au rouge', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle correspond uniquement au bleu', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement de rayons ultraviolets', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière blanche ordinaire peut être décomposée en différentes composantes spectrales du visible.',
                    ],
                    [
                        'question' => 'Quel dispositif est couramment utilisé pour décomposer la lumière blanche en spectre ?',
                        'choices' => [
                            ['choice_text' => 'Un prisme', 'is_correct' => true],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Une résistance électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un prisme transparent peut disperser la lumière en raison de la dépendance de l\'indice à la longueur d\'onde.',
                    ],
                    [
                        'question' => 'Dans un prisme dispersif, pourquoi les couleurs ne suivent-elles pas exactement la même trajectoire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'indice de réfraction dépend de la longueur d\'onde', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque couleur possède une masse différente', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fréquence devient aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prisme émet lui-même toutes les couleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion provient du fait que le matériau ne réfracte pas toutes les longueurs d\'onde de la même manière.',
                    ],
                    [
                        'question' => 'La fréquence d\'une lumière rouge est-elle la même que celle d\'une lumière violette ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si elles ont la même intensité', 'is_correct' => false],
                            ['choice_text' => 'La fréquence n\'existe pas pour la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rouge et le violet correspondent à des domaines de fréquence différents.',
                    ],
                    [
                        'question' => 'Dans le vide, quelle relation relie la fréquence f et la longueur d\'onde λ de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'c = λf', 'is_correct' => true],
                            ['choice_text' => 'c = λ/f', 'is_correct' => false],
                            ['choice_text' => 'c = f/λ', 'is_correct' => false],
                            ['choice_text' => 'c = λ + f', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, la célérité c vérifie c = λf.',
                    ],
                    [
                        'question' => 'Quel phénomène peut expliquer les couleurs visibles sur certaines bulles de savon ?',
                        'choices' => [
                            ['choice_text' => 'Les interférences lumineuses dans les couches minces', 'is_correct' => true],
                            ['choice_text' => 'La combustion de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'La gravitation uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fines couches de savon peuvent produire des interférences dépendant de la longueur d\'onde, ce qui donne des couleurs.',
                    ],
                ],
            ],

            [
                'title' => 'Optique ondulatoire élémentaire',
                'description' => 'Découvrir les notions simples d\'interférences et de diffraction de la lumière.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une interférence lumineuse ?',
                        'choices' => [
                            ['choice_text' => 'La superposition de plusieurs ondes lumineuses produisant des renforcements ou des affaiblissements', 'is_correct' => true],
                            ['choice_text' => 'La disparition systématique de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La transformation de la lumière en matière', 'is_correct' => false],
                            ['choice_text' => 'Le passage de la lumière dans un conducteur électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interférences résultent de la superposition des ondes et peuvent produire des maxima et minima d\'intensité.',
                    ],
                    [
                        'question' => 'Quand deux ondes lumineuses arrivent en phase, elles peuvent produire une interférence :',
                        'choices' => [
                            ['choice_text' => 'Constructive', 'is_correct' => true],
                            ['choice_text' => 'Destructive', 'is_correct' => false],
                            ['choice_text' => 'Nulle dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Thermique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ondes en phase peuvent se renforcer mutuellement.',
                    ],
                    [
                        'question' => 'Quand deux ondes de même amplitude arrivent en opposition de phase, elles peuvent produire :',
                        'choices' => [
                            ['choice_text' => 'Une extinction', 'is_correct' => true],
                            ['choice_text' => 'Une amplitude double', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence infinie', 'is_correct' => false],
                            ['choice_text' => 'Une lumière toujours plus rouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ondes identiques en opposition de phase peuvent s\'annuler localement.',
                    ],
                    [
                        'question' => 'Quel phénomène montre qu\'une onde lumineuse peut s\'étaler après une petite ouverture ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction', 'is_correct' => true],
                            ['choice_text' => 'La conduction', 'is_correct' => false],
                            ['choice_text' => 'La convection', 'is_correct' => false],
                            ['choice_text' => 'La gravitation', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction correspond à l\'étalement d\'une onde lorsqu\'elle rencontre une ouverture ou un obstacle de taille comparable à sa longueur d\'onde.',
                    ],
                    [
                        'question' => 'La diffraction devient particulièrement visible lorsque l\'ouverture est :',
                        'choices' => [
                            ['choice_text' => 'De taille comparable à la longueur d\'onde', 'is_correct' => true],
                            ['choice_text' => 'Des millions de fois plus grande que la longueur d\'onde dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Toujours infiniment grande', 'is_correct' => false],
                            ['choice_text' => 'Totalement fermée', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction est particulièrement marquée lorsque la dimension caractéristique de l\'ouverture est du même ordre de grandeur que λ.',
                    ],
                    [
                        'question' => 'Que produit généralement une figure d\'interférences lumineuses ?',
                        'choices' => [
                            ['choice_text' => 'Une succession de zones plus lumineuses et moins lumineuses', 'is_correct' => true],
                            ['choice_text' => 'Une seule couleur uniforme dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la lumière partout', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interférences créent une répartition spatiale d\'intensité avec des maxima et des minima.',
                    ],
                    [
                        'question' => 'L\'expérience des fentes de Young met principalement en évidence :',
                        'choices' => [
                            ['choice_text' => 'Les interférences lumineuses', 'is_correct' => true],
                            ['choice_text' => 'La gravitation', 'is_correct' => false],
                            ['choice_text' => 'La conduction thermique', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux fentes de Young permettent d\'observer une figure d\'interférences caractéristique du caractère ondulatoire de la lumière.',
                    ],
                    [
                        'question' => 'La distance entre deux franges brillantes successives dans une expérience d\'interférences est généralement liée à :',
                        'choices' => [
                            ['choice_text' => 'La longueur d\'onde et la géométrie de l\'expérience', 'is_correct' => true],
                            ['choice_text' => 'La masse de l\'écran uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température du Soleil uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur du support seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'espacement des franges dépend notamment de λ et de la géométrie du montage.',
                    ],
                    [
                        'question' => 'La diffraction et les interférences sont-elles des phénomènes pouvant être expliqués dans le cadre ondulatoire de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, uniquement avec la gravitation', 'is_correct' => false],
                            ['choice_text' => 'Non, car la lumière n\'est pas une onde', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les sons', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction et les interférences sont deux manifestations classiques du comportement ondulatoire de la lumière.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on une source suffisamment cohérente pour observer des interférences stables ?',
                        'choices' => [
                            ['choice_text' => 'Pour maintenir une relation de phase suffisamment stable entre les ondes', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre la lumière plus lourde', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute propagation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne stabilité de phase est nécessaire pour obtenir une figure d\'interférences observable et stable.',
                    ],
                    [
                        'question' => 'Une tache centrale large observée derrière une petite ouverture peut être associée à :',
                        'choices' => [
                            ['choice_text' => 'La diffraction', 'is_correct' => true],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La chaleur latente', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une petite ouverture peut produire une figure de diffraction comprenant notamment une tache centrale.',
                    ],
                ],
            ],

            [
                'title' => 'Œil humain et instruments optiques',
                'description' => 'Comprendre le fonctionnement optique simplifié de l\'œil et le rôle des instruments comme la loupe et le microscope.',
                'questions' => [
                    [
                        'question' => 'Quelle partie de l\'œil reçoit principalement l\'image lumineuse ?',
                        'choices' => [
                            ['choice_text' => 'La rétine', 'is_correct' => true],
                            ['choice_text' => 'La cornée uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => false],
                            ['choice_text' => 'La pupille uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La rétine contient les photorécepteurs qui transforment la lumière en signaux nerveux.',
                    ],
                    [
                        'question' => 'Quelle structure joue un rôle important dans la mise au point de l\'image sur la rétine ?',
                        'choices' => [
                            ['choice_text' => 'Le cristallin', 'is_correct' => true],
                            ['choice_text' => 'Le pavillon de l\'oreille', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => false],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cristallin modifie sa courbure afin d\'ajuster la focalisation de la lumière sur la rétine.',
                    ],
                    [
                        'question' => 'Quelle ouverture contrôle en partie la quantité de lumière qui entre dans l\'œil ?',
                        'choices' => [
                            ['choice_text' => 'La pupille', 'is_correct' => true],
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                            ['choice_text' => 'Le nerf optique', 'is_correct' => false],
                            ['choice_text' => 'Le cristallin uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La pupille est l\'ouverture centrale de l\'iris qui contrôle la quantité de lumière entrant dans l\'œil.',
                    ],
                    [
                        'question' => 'Une personne myope voit généralement mieux :',
                        'choices' => [
                            ['choice_text' => 'Les objets proches', 'is_correct' => true],
                            ['choice_text' => 'Les objets très éloignés uniquement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le noir', 'is_correct' => false],
                            ['choice_text' => 'Les objets sans lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la myopie, les objets proches sont généralement vus plus nettement que les objets éloignés sans correction.',
                    ],
                    [
                        'question' => 'Quel type de lentille corrige classiquement la myopie ?',
                        'choices' => [
                            ['choice_text' => 'Une lentille divergente', 'is_correct' => true],
                            ['choice_text' => 'Une lentille convergente uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un miroir convexe seulement', 'is_correct' => false],
                            ['choice_text' => 'Un filtre polarisant uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La correction de la myopie utilise classiquement des lentilles divergentes.',
                    ],
                    [
                        'question' => 'Quel type de lentille corrige classiquement l\'hypermétropie ?',
                        'choices' => [
                            ['choice_text' => 'Une lentille convergente', 'is_correct' => true],
                            ['choice_text' => 'Une lentille divergente', 'is_correct' => false],
                            ['choice_text' => 'Un miroir plan', 'is_correct' => false],
                            ['choice_text' => 'Un filtre absorbant uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'hypermétropie est classiquement corrigée avec une lentille convergente.',
                    ],
                    [
                        'question' => 'À quoi sert une loupe ?',
                        'choices' => [
                            ['choice_text' => 'À produire une image virtuelle agrandie d\'un objet proche', 'is_correct' => true],
                            ['choice_text' => 'À réduire systématiquement les objets', 'is_correct' => false],
                            ['choice_text' => 'À mesurer directement la vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'À transformer les couleurs en sons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une loupe est une lentille convergente utilisée avec un objet placé à l\'intérieur de sa distance focale.',
                    ],
                    [
                        'question' => 'Quel instrument permet d\'observer des objets extrêmement petits grâce à plusieurs systèmes optiques ?',
                        'choices' => [
                            ['choice_text' => 'Le microscope', 'is_correct' => true],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le galvanomètre', 'is_correct' => false],
                            ['choice_text' => 'Le thermocouple', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microscope utilise notamment un objectif et un oculaire pour obtenir un fort grossissement angulaire.',
                    ],
                    [
                        'question' => 'Quel instrument est conçu pour observer des objets astronomiques très éloignés ?',
                        'choices' => [
                            ['choice_text' => 'Le télescope', 'is_correct' => true],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le calorimètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les télescopes collectent et focalisent la lumière provenant d\'objets astronomiques éloignés.',
                    ],
                    [
                        'question' => 'Dans un œil normal au repos, un objet très éloigné produit une image proche :',
                        'choices' => [
                            ['choice_text' => 'De la rétine', 'is_correct' => true],
                            ['choice_text' => 'De la pupille', 'is_correct' => false],
                            ['choice_text' => 'De l\'iris uniquement', 'is_correct' => false],
                            ['choice_text' => 'Du nerf auditif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système optique de l\'œil est réglé pour former une image nette sur la rétine.',
                    ],
                    [
                        'question' => 'Quel phénomène permet à l\'œil de distinguer différentes couleurs ?',
                        'choices' => [
                            ['choice_text' => 'La réponse des différents photorécepteurs à différentes longueurs d\'onde', 'is_correct' => true],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Les vibrations du tympan', 'is_correct' => false],
                            ['choice_text' => 'La gravité uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La vision des couleurs dépend notamment des différents types de cônes présents dans la rétine.',
                    ],
                ],
            ],

            [
                'title' => 'Synthèse d\'optique',
                'description' => 'Réviser les notions essentielles de réflexion, réfraction, lentilles, images et phénomènes ondulatoires.',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre réflexion et réfraction ?',
                        'choices' => [
                            ['choice_text' => 'La réflexion renvoie la lumière dans le milieu initial tandis que la réfraction correspond à son changement de direction lors d\'un changement de milieu', 'is_correct' => true],
                            ['choice_text' => 'La réflexion existe uniquement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'La réfraction ne concerne jamais la lumière', 'is_correct' => false],
                            ['choice_text' => 'Les deux phénomènes sont exactement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion et la réfraction sont deux interactions distinctes de la lumière avec une interface.',
                    ],
                    [
                        'question' => 'Quel appareil mesure une quantité de lumière reçue par unité de surface dans certaines applications ?',
                        'choices' => [
                            ['choice_text' => 'Un luxmètre', 'is_correct' => true],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un luxmètre mesure l\'éclairement lumineux en lux.',
                    ],
                    [
                        'question' => 'Quelle grandeur est mesurée en lux ?',
                        'choices' => [
                            ['choice_text' => 'L\'éclairement lumineux', 'is_correct' => true],
                            ['choice_text' => 'La fréquence lumineuse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La puissance mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lux est l\'unité SI dérivée de l\'éclairement lumineux.',
                    ],
                    [
                        'question' => 'Quel phénomène permet de voir un objet non lumineux dans une pièce éclairée ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion ou réflexion de la lumière par l\'objet vers les yeux', 'is_correct' => true],
                            ['choice_text' => 'L\'objet produit nécessairement sa propre lumière', 'is_correct' => false],
                            ['choice_text' => 'L\'objet transforme la lumière en son', 'is_correct' => false],
                            ['choice_text' => 'La lumière n\'interagit pas avec l\'objet', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet non lumineux devient visible lorsqu\'il reçoit de la lumière et en renvoie une partie vers l\'observateur.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une lentille convergente ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut faire converger des rayons parallèles vers un foyer réel', 'is_correct' => true],
                            ['choice_text' => 'Elle fait toujours diverger tous les rayons', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède jamais de foyer', 'is_correct' => false],
                            ['choice_text' => 'Elle réfléchit toute la lumière au lieu de la transmettre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lentille convergente concentre un faisceau parallèle vers son foyer image.',
                    ],
                    [
                        'question' => 'Quel phénomène peut séparer une lumière blanche en plusieurs couleurs ?',
                        'choices' => [
                            ['choice_text' => 'La dispersion', 'is_correct' => true],
                            ['choice_text' => 'La conduction', 'is_correct' => false],
                            ['choice_text' => 'La compression', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion sépare les différentes composantes spectrales de la lumière.',
                    ],
                    [
                        'question' => 'Quel phénomène explique les couleurs de certaines bulles de savon ?',
                        'choices' => [
                            ['choice_text' => 'Les interférences dans une couche mince', 'is_correct' => true],
                            ['choice_text' => 'La loi des mailles', 'is_correct' => false],
                            ['choice_text' => 'La convection', 'is_correct' => false],
                            ['choice_text' => 'La réflexion mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interférences entre les réflexions sur les deux faces de la couche mince créent des couleurs dépendant de la longueur d\'onde.',
                    ],
                    [
                        'question' => 'Quelle relation relie la puissance optique P d\'une lentille à sa distance focale f\' ?',
                        'choices' => [
                            ['choice_text' => 'P = 1/f\'', 'is_correct' => true],
                            ['choice_text' => 'P = f\'', 'is_correct' => false],
                            ['choice_text' => 'P = f\'²', 'is_correct' => false],
                            ['choice_text' => 'P = f\' + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque la distance focale est exprimée en mètres, la puissance optique est P = 1/f\' et s\'exprime en dioptries.',
                    ],
                    [
                        'question' => 'Une lentille convergente de distance focale 0,5 m possède une puissance optique de :',
                        'choices' => [
                            ['choice_text' => '2 dioptries', 'is_correct' => true],
                            ['choice_text' => '0,5 dioptrie', 'is_correct' => false],
                            ['choice_text' => '5 dioptries', 'is_correct' => false],
                            ['choice_text' => '20 dioptries', 'is_correct' => false],
                        ],
                        'explanation' => 'P = 1/f\' = 1/0,5 = 2 dioptries.',
                    ],
                    [
                        'question' => 'Un objet placé devant un miroir plan à 3 m de sa surface possède une image située :',
                        'choices' => [
                            ['choice_text' => 'À 3 m derrière le miroir', 'is_correct' => true],
                            ['choice_text' => 'À 1,5 m derrière le miroir', 'is_correct' => false],
                            ['choice_text' => 'À 6 m derrière le miroir', 'is_correct' => false],
                            ['choice_text' => 'Sur la surface du miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un miroir plan, la distance de l\'image derrière le miroir est égale à la distance de l\'objet devant le miroir.',
                    ],
                    [
                        'question' => 'Si la fréquence d\'une onde lumineuse dans le vide augmente, sa longueur d\'onde :',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le vide, c = λf. Comme c est constante, une fréquence plus grande correspond à une longueur d\'onde plus petite.',
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