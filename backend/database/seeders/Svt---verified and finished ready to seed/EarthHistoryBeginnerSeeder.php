<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EarthHistoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'earth-history')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Formation et débuts de la Terre',
                'description' => 'Repérer la formation de la Terre et quelques grandes étapes de son histoire initiale.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans un musée de Rabat, un panneau indique l’âge de la Terre. Quelle valeur y est écrite ?',
                        'choices' => [
                            ['choice_text' => 'environ 454 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 4,54 milliards d’années', 'is_correct' => true],
                            ['choice_text' => 'environ 45,4 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 45,4 milliards d’années', 'is_correct' => false],
                        ],
                        'explanation' => 'Les datations radiométriques de météorites et de roches donnent à la Terre un âge d’environ 4,54 milliards d’années.',
                    ],
                    [
                        'question' => 'Notre Système solaire est né d’un nuage de gaz et de poussières qui s’est effondré sur lui-même. Qu’est-ce qui s’est formé au centre ?',
                        'choices' => [
                            ['choice_text' => 'la Lune', 'is_correct' => false],
                            ['choice_text' => 'la Terre', 'is_correct' => false],
                            ['choice_text' => 'Jupiter', 'is_correct' => false],
                            ['choice_text' => 'le Soleil', 'is_correct' => true],
                        ],
                        'explanation' => 'Au centre du nuage s’est formé le Soleil ; les planètes, dont la Terre, sont nées de la matière du disque qui l’entourait.',
                    ],
                    [
                        'question' => 'À ses débuts, la Terre était si chaude que sa surface était en partie fondue. Comment appelle-t-on cette période, la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'l’Hadéen', 'is_correct' => true],
                            ['choice_text' => 'l’Archéen', 'is_correct' => false],
                            ['choice_text' => 'le Cambrien', 'is_correct' => false],
                            ['choice_text' => 'le Jurassique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Hadéen couvre les premières centaines de millions d’années de la Terre, quand elle était encore très chaude et bombardée par des météorites.',
                    ],
                    [
                        'question' => 'Selon l’hypothèse la plus répandue, la Lune est née d’une collision entre la Terre et un corps de la taille de Mars. Quand cela s’est-il produit ?',
                        'choices' => [
                            ['choice_text' => 'à l’époque des dinosaures', 'is_correct' => false],
                            ['choice_text' => 'il y a quelques millions d’années', 'is_correct' => false],
                            ['choice_text' => 'très tôt, peu après la naissance de la Terre', 'is_correct' => true],
                            ['choice_text' => 'au moment de l’apparition des humains', 'is_correct' => false],
                        ],
                        'explanation' => 'Cet impact géant remonte à plus de 4,4 milliards d’années, peu après la formation de la Terre.',
                    ],
                    [
                        'question' => 'En se refroidissant, la Terre s’est organisée en couches de densités différentes. Où le fer s’est-il surtout rassemblé ?',
                        'choices' => [
                            ['choice_text' => 'à la surface, dans la croûte', 'is_correct' => false],
                            ['choice_text' => 'dans l’eau des océans', 'is_correct' => false],
                            ['choice_text' => 'au centre, dans le noyau', 'is_correct' => true],
                            ['choice_text' => 'dans l’atmosphère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux les plus lourds, comme le fer, ont coulé vers le centre et formé le noyau ; les plus légers sont restés vers la surface.',
                    ],
                    [
                        'question' => 'Quand la surface de la Terre s’est assez refroidie, la vapeur d’eau de l’atmosphère s’est condensée. Quelle en a été la conséquence ?',
                        'choices' => [
                            ['choice_text' => 'la pluie a rempli les creux et formé les premiers océans', 'is_correct' => true],
                            ['choice_text' => 'la surface s’est remise à fondre', 'is_correct' => false],
                            ['choice_text' => 'les continents actuels sont apparus aussitôt après la pluie', 'is_correct' => false],
                            ['choice_text' => 'la Lune s’est formée à ce moment', 'is_correct' => false],
                        ],
                        'explanation' => 'En se condensant, la vapeur d’eau est retombée en pluies qui ont rempli les creux de la surface et formé les premiers océans.',
                    ],
                    [
                        'question' => 'Quel âge ont environ les plus anciennes traces de vie connues, comme certains fossiles de microbes ?',
                        'choices' => [
                            ['choice_text' => 'environ 500 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 65 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 10 000 ans', 'is_correct' => false],
                            ['choice_text' => 'plus de 3 milliards d’années', 'is_correct' => true],
                        ],
                        'explanation' => 'Des microbes fossiles et des stromatolithes ont plus de 3 milliards d’années : la vie est apparue très tôt dans l’histoire de la Terre.',
                    ],
                    [
                        'question' => 'Ramenons l’histoire de la Terre à une seule année, du 1er janvier au 31 décembre. Quand les humains modernes apparaissent-ils ?',
                        'choices' => [
                            ['choice_text' => 'début juillet, à la moitié de l’année', 'is_correct' => false],
                            ['choice_text' => 'le 31 décembre, dans la dernière heure', 'is_correct' => true],
                            ['choice_text' => 'fin septembre, aux trois quarts de l’année', 'is_correct' => false],
                            ['choice_text' => 'le 1er décembre, au début du dernier mois', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette image, les humains modernes n’arrivent que dans la dernière heure de l’année, ce qui montre l’immensité du temps géologique.',
                    ],
                    [
                        'question' => 'Près d’Erfoud, des roches anciennes renferment des trilobites. Que peut-on apprendre grâce à ces fossiles ?',
                        'choices' => [
                            ['choice_text' => 'la hauteur exacte des montagnes actuelles de la région d’Erfoud', 'is_correct' => false],
                            ['choice_text' => 'la date du dernier tremblement de terre', 'is_correct' => false],
                            ['choice_text' => 'quels êtres vivants peuplaient le lieu à l’époque de la roche', 'is_correct' => true],
                            ['choice_text' => 'la composition de l’atmosphère actuelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile est une trace d’un être vivant du passé : il renseigne sur la vie et sur le milieu à l’époque où la roche s’est formée.',
                    ],
                    [
                        'question' => 'Ahmed regarde une carte de la Terre d’il y a 250 millions d’années, où les terres forment un seul grand continent. Que montre cette carte ?',
                        'choices' => [
                            ['choice_text' => 'que les continents se sont déplacés au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'que les océans n’existaient pas encore', 'is_correct' => false],
                            ['choice_text' => 'que la Terre était plus petite qu’aujourd’hui à cette époque', 'is_correct' => false],
                            ['choice_text' => 'que le Maroc se trouvait au pôle Nord', 'is_correct' => false],
                        ],
                        'explanation' => 'La tectonique des plaques déplace les continents ; il y a environ 250 millions d’années, ils étaient réunis dans un supercontinent, la Pangée.',
                    ],
                ],
            ],
            [
                'title' => 'Les grands découpages du temps',
                'description' => 'Comprendre éons, ères, périodes et quelques repères comme le Mésozoïque et le Quaternaire.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Dans l’échelle des temps géologiques, quel est le niveau de découpage le plus vaste ?',
                        'choices' => [
                            ['choice_text' => 'la période', 'is_correct' => false],
                            ['choice_text' => 'l’époque', 'is_correct' => false],
                            ['choice_text' => 'l’ère', 'is_correct' => false],
                            ['choice_text' => 'l’éon', 'is_correct' => true],
                        ],
                        'explanation' => 'Du plus vaste au plus fin, on trouve l’éon, l’ère, la période puis l’époque.',
                    ],
                    [
                        'question' => 'Le Mésozoïque, qui contient le Trias, le Jurassique et le Crétacé, est :',
                        'choices' => [
                            ['choice_text' => 'une époque de quelques siècles', 'is_correct' => false],
                            ['choice_text' => 'une ère géologique', 'is_correct' => true],
                            ['choice_text' => 'un fossile marin', 'is_correct' => false],
                            ['choice_text' => 'une roche sédimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Mésozoïque est une ère qui regroupe trois périodes : le Trias, le Jurassique et le Crétacé.',
                    ],
                    [
                        'question' => 'Sofia lit sur un panneau qu’une roche date du Jurassique. À quelle ère appartient cette période ?',
                        'choices' => [
                            ['choice_text' => 'au Mésozoïque', 'is_correct' => true],
                            ['choice_text' => 'au Cénozoïque', 'is_correct' => false],
                            ['choice_text' => 'au Paléozoïque', 'is_correct' => false],
                            ['choice_text' => 'au Précambrien', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Jurassique est la période du milieu du Mésozoïque, entre le Trias et le Crétacé.',
                    ],
                    [
                        'question' => 'Nous vivons aujourd’hui dans le Quaternaire. À quelle ère appartient cette période ?',
                        'choices' => [
                            ['choice_text' => 'au Mésozoïque', 'is_correct' => false],
                            ['choice_text' => 'au Paléozoïque', 'is_correct' => false],
                            ['choice_text' => 'au Cénozoïque', 'is_correct' => true],
                            ['choice_text' => 'au Précambrien', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Quaternaire est la période la plus récente du Cénozoïque, l’ère qui a suivi le Mésozoïque.',
                    ],
                    [
                        'question' => 'Quel ordre est correct, du plus ancien au plus récent, pour les périodes du Mésozoïque ?',
                        'choices' => [
                            ['choice_text' => 'Crétacé, Trias, Jurassique', 'is_correct' => false],
                            ['choice_text' => 'Trias, Jurassique, Crétacé', 'is_correct' => true],
                            ['choice_text' => 'Jurassique, Crétacé, Trias', 'is_correct' => false],
                            ['choice_text' => 'Trias, Crétacé, Jurassique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Mésozoïque commence par le Trias, se poursuit avec le Jurassique et s’achève avec le Crétacé.',
                    ],
                    [
                        'question' => 'Sur une frise, le Trias dure environ 50 millions d’années, le Jurassique environ 56 et le Crétacé environ 79. Que remarque-t-on ?',
                        'choices' => [
                            ['choice_text' => 'les trois périodes durent aussi longtemps', 'is_correct' => false],
                            ['choice_text' => 'le Trias est la plus longue période', 'is_correct' => false],
                            ['choice_text' => 'le Jurassique est la plus longue période', 'is_correct' => false],
                            ['choice_text' => 'les périodes n’ont pas la même durée', 'is_correct' => true],
                        ],
                        'explanation' => 'Les limites des périodes sont fixées par des événements enregistrés dans les roches, pas par des durées égales ; ici le Crétacé est le plus long.',
                    ],
                    [
                        'question' => 'Depuis la fin de la dernière glaciation, il y a environ 11 700 ans, nous vivons dans une époque appelée :',
                        'choices' => [
                            ['choice_text' => 'le Pléistocène', 'is_correct' => false],
                            ['choice_text' => 'le Jurassique', 'is_correct' => false],
                            ['choice_text' => 'l’Holocène', 'is_correct' => true],
                            ['choice_text' => 'le Cambrien', 'is_correct' => false],
                        ],
                        'explanation' => 'L’Holocène est l’époque la plus récente du Quaternaire ; elle succède au Pléistocène.',
                    ],
                    [
                        'question' => 'Quel terme désigne une subdivision d’une période, comme l’Holocène dans le Quaternaire ?',
                        'choices' => [
                            ['choice_text' => 'l’époque, plus fine qu’une période', 'is_correct' => true],
                            ['choice_text' => 'l’éon, plus vaste qu’une période', 'is_correct' => false],
                            ['choice_text' => 'l’ère, plus vaste qu’une période', 'is_correct' => false],
                            ['choice_text' => 'le continent, qui n’est pas une unité de temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une époque est une subdivision d’une période, un cran plus fin dans l’échelle des temps.',
                    ],
                    [
                        'question' => 'Une géologue marocaine et un géologue chinois parlent tous deux du Crétacé. À quoi leur sert ce nom commun ?',
                        'choices' => [
                            ['choice_text' => 'à indiquer la profondeur d’une roche', 'is_correct' => false],
                            ['choice_text' => 'à mesurer la température moyenne du passé dans chaque pays', 'is_correct' => false],
                            ['choice_text' => 'à localiser un site sur une carte', 'is_correct' => false],
                            ['choice_text' => 'à désigner le même intervalle de temps sans ambiguïté', 'is_correct' => true],
                        ],
                        'explanation' => 'Les noms d’ères et de périodes sont des repères partagés par les scientifiques du monde entier.',
                    ],
                    [
                        'question' => 'Une couche du Crétacé affleure dans une falaise. Quelle période est forcément plus ancienne que le Crétacé ?',
                        'choices' => [
                            ['choice_text' => 'le Paléogène', 'is_correct' => false],
                            ['choice_text' => 'le Jurassique', 'is_correct' => true],
                            ['choice_text' => 'le Quaternaire', 'is_correct' => false],
                            ['choice_text' => 'l’Holocène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Jurassique précède le Crétacé ; le Paléogène, le Quaternaire et l’Holocène lui succèdent.',
                    ],
                ],
            ],
            [
                'title' => 'Superposition et succession des couches',
                'description' => 'Appliquer le principe de superposition à des coupes sédimentaires simples.',
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans une falaise faite de couches horizontales qui n’ont pas été retournées, quelle couche est la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'celle du bas', 'is_correct' => true],
                            ['choice_text' => 'celle du haut', 'is_correct' => false],
                            ['choice_text' => 'la plus épaisse', 'is_correct' => false],
                            ['choice_text' => 'la plus foncée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sédiments se déposent les uns sur les autres : la couche du bas est arrivée la première, donc elle est la plus ancienne.',
                    ],
                    [
                        'question' => 'Sur le croquis de Karim, la couche A se trouve sous la couche B, sans pli ni faille. Quelle phrase est vraie ?',
                        'choices' => [
                            ['choice_text' => 'A s’est déposée après B', 'is_correct' => false],
                            ['choice_text' => 'A est plus récente, car elle est plus profonde', 'is_correct' => false],
                            ['choice_text' => 'A s’est déposée avant B', 'is_correct' => true],
                            ['choice_text' => 'on ne peut rien dire sans connaître leur épaisseur', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans perturbation, ce qui est dessous s’est déposé avant ce qui est dessus : A est plus ancienne que B.',
                    ],
                    [
                        'question' => 'Nadia affirme que la couche la plus épaisse d’une falaise est la plus ancienne. Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'elle a raison : plus une couche est épaisse, plus elle est vieille', 'is_correct' => false],
                            ['choice_text' => 'elle se trompe : une couche épaisse est plus récente qu’une couche mince', 'is_correct' => false],
                            ['choice_text' => 'cela dépend de la couleur de la couche', 'is_correct' => false],
                            ['choice_text' => 'l’épaisseur ne renseigne pas sur l’âge d’une couche', 'is_correct' => true],
                        ],
                        'explanation' => 'L’âge relatif se déduit de la position des couches, pas de leur épaisseur.',
                    ],
                    [
                        'question' => 'Dans une coupe, on lit de bas en haut les couches C, puis B, puis A. Quel est l’ordre de dépôt, du premier au dernier ?',
                        'choices' => [
                            ['choice_text' => 'C, B, puis A', 'is_correct' => true],
                            ['choice_text' => 'A, B, puis C', 'is_correct' => false],
                            ['choice_text' => 'B, A, puis C', 'is_correct' => false],
                            ['choice_text' => 'A, C, puis B', 'is_correct' => false],
                        ],
                        'explanation' => 'On lit une coupe de bas en haut : C s’est déposée en premier, puis B, puis A.',
                    ],
                    [
                        'question' => 'Une couche de grès repose sur une surface d’érosion irrégulière. Qu’est-il arrivé en premier ?',
                        'choices' => [
                            ['choice_text' => 'le dépôt du grès sur cette surface', 'is_correct' => false],
                            ['choice_text' => 'la formation puis l’érosion des roches du dessous', 'is_correct' => true],
                            ['choice_text' => 'l’érosion de la surface, intervenue après le dépôt du grès', 'is_correct' => false],
                            ['choice_text' => 'le dépôt du grès et l’érosion en même temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grès recouvre la surface : celle-ci existait donc avant lui, après avoir été creusée par l’érosion.',
                    ],
                    [
                        'question' => 'Une couche visible dans une falaise de la côte atlantique manque dans la falaise voisine. Quelle explication est possible ?',
                        'choices' => [
                            ['choice_text' => 'elle a disparu parce qu’elle était trop vieille', 'is_correct' => false],
                            ['choice_text' => 'elle a été déplacée par les marées', 'is_correct' => false],
                            ['choice_text' => 'elle a été fabriquée par le vent après le dépôt des autres couches', 'is_correct' => false],
                            ['choice_text' => 'elle ne s’est pas déposée à cet endroit, ou l’érosion l’a enlevée', 'is_correct' => true],
                        ],
                        'explanation' => 'Une couche peut manquer localement si les sédiments ne s’y sont pas déposés ou si l’érosion les a emportés ; elle peut exister ailleurs.',
                    ],
                    [
                        'question' => 'Quelle information aide le plus à remettre des couches dans l’ordre ?',
                        'choices' => [
                            ['choice_text' => 'leur couleur dominante', 'is_correct' => false],
                            ['choice_text' => 'leur dureté au marteau', 'is_correct' => false],
                            ['choice_text' => 'leur position les unes au-dessus des autres', 'is_correct' => true],
                            ['choice_text' => 'leur distance actuelle à la mer', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une série non perturbée, la position des couches donne directement leur ordre de dépôt.',
                    ],
                    [
                        'question' => 'Dans un conglomérat, Youssef trouve des galets de calcaire. Quelle roche est la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'le calcaire dont viennent les galets', 'is_correct' => true],
                            ['choice_text' => 'le conglomérat qui les contient', 'is_correct' => false],
                            ['choice_text' => 'les deux ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'le sol actuel de la région', 'is_correct' => false],
                        ],
                        'explanation' => 'Les galets existaient dans leur roche d’origine avant d’être arrachés puis enfermés dans le conglomérat.',
                    ],
                    [
                        'question' => 'Dans une chaîne de montagnes, les couches sont fortement plissées. Peut-on lire leur ordre de dépôt sans précaution ?',
                        'choices' => [
                            ['choice_text' => 'oui, la règle du bas vers le haut s’applique aussi aux couches plissées', 'is_correct' => false],
                            ['choice_text' => 'oui, à condition que les couches soient colorées', 'is_correct' => false],
                            ['choice_text' => 'non, car les couches plissées n’ont pas d’âge', 'is_correct' => false],
                            ['choice_text' => 'non, il faut d’abord vérifier si les couches ont été retournées', 'is_correct' => true],
                        ],
                        'explanation' => 'Un plissement peut incliner ou même retourner les couches : il faut d’abord s’assurer de leur position d’origine.',
                    ],
                    [
                        'question' => 'À quoi sert une coupe géologique dessinée à partir d’une falaise ?',
                        'choices' => [
                            ['choice_text' => 'à donner l’âge exact de chaque couche', 'is_correct' => false],
                            ['choice_text' => 'à voir comment les couches s’empilent et se recoupent', 'is_correct' => true],
                            ['choice_text' => 'à mesurer la température du sous-sol', 'is_correct' => false],
                            ['choice_text' => 'à compter les fossiles d’une région', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coupe montre les relations entre les couches, ce qui permet de reconstituer l’ordre des événements.',
                    ],
                ],
            ],
            [
                'title' => 'Recoupements et événements successifs',
                'description' => 'Utiliser failles, intrusions et surfaces d’érosion pour ordonner des événements.',
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une faille décale plusieurs couches de grès. Que peut-on dire de l’âge de la faille ?',
                        'choices' => [
                            ['choice_text' => 'elle est plus ancienne que ces couches', 'is_correct' => false],
                            ['choice_text' => 'elle a le même âge que la première couche', 'is_correct' => false],
                            ['choice_text' => 'elle est plus récente que les couches qu’elle décale', 'is_correct' => true],
                            ['choice_text' => 'on ne peut rien dire sans fossile', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour décaler une couche, il faut que celle-ci existe déjà : la faille est donc postérieure.',
                    ],
                    [
                        'question' => 'Un filon de basalte traverse trois couches de calcaire. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'le filon est plus récent que les trois couches', 'is_correct' => true],
                            ['choice_text' => 'le filon est plus ancien que les trois couches', 'is_correct' => false],
                            ['choice_text' => 'le filon s’est formé avant le premier calcaire', 'is_correct' => false],
                            ['choice_text' => 'le filon et les couches ont le même âge', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce qui en traverse un autre est plus récent : c’est le principe de recoupement.',
                    ],
                    [
                        'question' => 'Une faille coupe les couches A et B, mais pas la couche C qui les recouvre. Quel ordre des événements est correct ?',
                        'choices' => [
                            ['choice_text' => 'faille, puis dépôt de A et B, puis dépôt de C', 'is_correct' => false],
                            ['choice_text' => 'dépôt de A et B, puis faille, puis dépôt de C', 'is_correct' => true],
                            ['choice_text' => 'dépôt de C, puis faille, puis dépôt de A et B', 'is_correct' => false],
                            ['choice_text' => 'dépôt de A, puis de C, puis faille, puis dépôt de B', 'is_correct' => false],
                        ],
                        'explanation' => 'La faille coupe A et B, qui existaient donc déjà ; elle ne coupe pas C, qui s’est déposée après.',
                    ],
                    [
                        'question' => 'Un filon recoupe une faille. Lequel des deux est le plus récent ?',
                        'choices' => [
                            ['choice_text' => 'la faille, plus récente que le filon', 'is_correct' => false],
                            ['choice_text' => 'les deux, car ils se touchent', 'is_correct' => false],
                            ['choice_text' => 'le filon, plus récent que la faille', 'is_correct' => true],
                            ['choice_text' => 'la roche voisine, qui entoure les deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filon coupe la faille : il lui est postérieur.',
                    ],
                    [
                        'question' => 'Un fragment de granite est enfermé dans un grès. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'le granite est plus ancien que le grès qui l’entoure', 'is_correct' => true],
                            ['choice_text' => 'le grès est plus ancien que le granite qu’il contient', 'is_correct' => false],
                            ['choice_text' => 'le granite s’est formé après le grès', 'is_correct' => false],
                            ['choice_text' => 'ils se sont formés au même moment', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fragment existait avant d’être pris dans la roche qui l’enferme ; c’est le principe d’inclusion.',
                    ],
                    [
                        'question' => 'Une faille s’arrête net sous une surface d’érosion plane. Que s’est-il passé en premier ?',
                        'choices' => [
                            ['choice_text' => 'l’érosion a aplani la surface, puis la faille s’est formée', 'is_correct' => false],
                            ['choice_text' => 'la faille s’est formée après le dépôt qui recouvre la surface', 'is_correct' => false],
                            ['choice_text' => 'la faille et l’érosion sont apparues en même temps', 'is_correct' => false],
                            ['choice_text' => 'la faille s’est formée, puis l’érosion a aplani la surface', 'is_correct' => true],
                        ],
                        'explanation' => 'La surface d’érosion tronque la faille : celle-ci est donc plus ancienne.',
                    ],
                    [
                        'question' => 'Dans une falaise, des couches inclinées sont recouvertes par des couches horizontales, avec une surface d’érosion entre les deux. Que révèle cette surface ?',
                        'choices' => [
                            ['choice_text' => 'un dépôt continu de sédiments, sans interruption notable', 'is_correct' => false],
                            ['choice_text' => 'une longue pause dans les dépôts, avec déformation et érosion', 'is_correct' => true],
                            ['choice_text' => 'un simple changement de couleur du sable', 'is_correct' => false],
                            ['choice_text' => 'la chute d’une météorite sur la région à cette époque', 'is_correct' => false],
                        ],
                        'explanation' => 'La surface sépare deux séries d’âges très différents : entre les deux, les couches du dessous ont été inclinées puis érodées. On parle de discordance.',
                    ],
                    [
                        'question' => 'Dans une coupe, un filon traverse les couches 1 à 3 mais s’arrête sous la couche 4. Quelle conclusion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'le filon est plus ancien que 1 à 3 et plus récent que 4', 'is_correct' => false],
                            ['choice_text' => 'le filon est plus récent que les couches 1 à 4', 'is_correct' => false],
                            ['choice_text' => 'le filon est plus récent que 1 à 3 et plus ancien que 4', 'is_correct' => true],
                            ['choice_text' => 'le filon s’est formé en même temps que la couche 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filon coupe 1 à 3 : il est plus récent qu’elles. Il ne coupe pas 4 : celle-ci s’est déposée après.',
                    ],
                    [
                        'question' => 'Une faille décale les couches du bas mais pas celle du dessus. Que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => 'la couche du dessus s’est déposée avant la faille', 'is_correct' => false],
                            ['choice_text' => 'la faille est plus jeune que la couche du dessus', 'is_correct' => false],
                            ['choice_text' => 'la couche du dessus est plus ancienne que celles du bas qu’elle recouvre', 'is_correct' => false],
                            ['choice_text' => 'la couche du dessus s’est déposée après l’activité de la faille', 'is_correct' => true],
                        ],
                        'explanation' => 'Si la couche du dessus n’est pas décalée, la faille avait déjà cessé de bouger quand elle s’est déposée.',
                    ],
                    [
                        'question' => 'Quelle question pose la chronologie relative ?',
                        'choices' => [
                            ['choice_text' => 'quel événement s’est produit avant, et lequel après ?', 'is_correct' => true],
                            ['choice_text' => 'quel est l’âge exact de cette roche en années ?', 'is_correct' => false],
                            ['choice_text' => 'à quelle vitesse cette roche s’est-elle formée ?', 'is_correct' => false],
                            ['choice_text' => 'quelle était la température au moment du dépôt ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La chronologie relative classe les événements dans l’ordre, sans donner de dates en années.',
                    ],
                    [
                        'question' => 'Une fine couche de cendres volcaniques se retrouve dans deux falaises distantes de 30 km. À quoi peut-elle servir ?',
                        'choices' => [
                            ['choice_text' => 'à mesurer la hauteur des volcans actuels', 'is_correct' => false],
                            ['choice_text' => 'à repérer des couches de même âge dans les deux falaises', 'is_correct' => true],
                            ['choice_text' => 'à prouver que les deux falaises sont de même nature', 'is_correct' => false],
                            ['choice_text' => 'à remplacer les fossiles dans les deux falaises', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cendres se déposent d’un coup sur une grande surface : ce niveau est un repère de même âge d’une falaise à l’autre.',
                    ],
                ],
            ],
            [
                'title' => 'Fossiles et chronologie',
                'description' => 'Relier fossiles, stratigraphie et corrélations simples.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel fossile est le plus utile pour dater des couches ?',
                        'choices' => [
                            ['choice_text' => 'celui d’une espèce rare et très localisée', 'is_correct' => false],
                            ['choice_text' => 'celui d’une espèce répandue qui n’a vécu que peu de temps', 'is_correct' => true],
                            ['choice_text' => 'celui d’une espèce qui a vécu des centaines de millions d’années', 'is_correct' => false],
                            ['choice_text' => 'celui d’une espèce impossible à identifier', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce répandue et de courte durée de vie donne un repère précis dans le temps : c’est un fossile stratigraphique.',
                    ],
                    [
                        'question' => 'Deux couches séparées de 200 km contiennent la même ammonite, qui n’a vécu que peu de temps. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'elles ont la même épaisseur', 'is_correct' => false],
                            ['choice_text' => 'elles se trouvent à la même altitude aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'elles ont à peu près le même âge', 'is_correct' => true],
                            ['choice_text' => 'elles contiennent les mêmes minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce de courte durée de vie date les couches où on la trouve : elles se sont formées à peu près au même moment.',
                    ],
                    [
                        'question' => 'Un animal a laissé des fossiles sur plus de 150 millions d’années. Quel est le problème pour dater une couche avec lui ?',
                        'choices' => [
                            ['choice_text' => 'sa présence est possible sur une très longue période', 'is_correct' => true],
                            ['choice_text' => 'ses fossiles sont trop petits pour être observés au microscope', 'is_correct' => false],
                            ['choice_text' => 'il vivait sur un continent isolé des autres mers', 'is_correct' => false],
                            ['choice_text' => 'ses fossiles sont trop rares pour exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Si une espèce existe pendant 150 millions d’années, sa présence dans une couche ne permet pas de resserrer l’âge.',
                    ],
                    [
                        'question' => 'Comment les géologues utilisent-ils les fossiles pour comparer l’âge de couches éloignées ?',
                        'choices' => [
                            ['choice_text' => 'en comparant la taille moyenne des fossiles trouvés dans chaque série', 'is_correct' => false],
                            ['choice_text' => 'en mesurant la température des couches', 'is_correct' => false],
                            ['choice_text' => 'en pesant les fossiles de chaque série', 'is_correct' => false],
                            ['choice_text' => 'en repérant les mêmes espèces fossiles dans les deux séries', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette méthode s’appelle la biostratigraphie : les mêmes fossiles dans deux couches indiquent qu’elles sont du même âge.',
                    ],
                    [
                        'question' => 'Une couche de sable ne contient aucun fossile alors que la couche voisine en contient. La première est-elle plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'oui, car elle est plus pauvre en fossiles', 'is_correct' => false],
                            ['choice_text' => 'oui, car elle est plus sombre que sa voisine', 'is_correct' => false],
                            ['choice_text' => 'on ne peut pas le dire : l’absence de fossiles ne donne pas l’âge', 'is_correct' => true],
                            ['choice_text' => 'non, car elle est plus récente que sa voisine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de fossiles peut venir d’un milieu défavorable à la conservation ; elle ne donne pas d’âge.',
                    ],
                    [
                        'question' => 'Aya trouve trois espèces de fossiles dans la même couche. Quel avantage cela apporte-t-il par rapport à une seule espèce ?',
                        'choices' => [
                            ['choice_text' => 'le fossile le plus gros de la couche donne directement son âge', 'is_correct' => false],
                            ['choice_text' => 'les périodes d’existence se recoupent et resserrent l’âge possible', 'is_correct' => true],
                            ['choice_text' => 'la couche devient plus ancienne', 'is_correct' => false],
                            ['choice_text' => 'les fossiles peuvent être pesés', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque espèce a vécu pendant un intervalle précis ; la couche ne peut appartenir qu’à la partie commune à toutes.',
                    ],
                    [
                        'question' => 'Une couche de fossiles est coincée entre deux coulées volcaniques datées de 110 et de 105 millions d’années. Quel âge peut-on lui attribuer ?',
                        'choices' => [
                            ['choice_text' => 'plus de 110 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'moins de 105 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 108 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'entre 105 et 110 millions d’années', 'is_correct' => true],
                        ],
                        'explanation' => 'La couche est plus récente que la coulée de 110 et plus ancienne que celle de 105 : elle s’est déposée entre les deux.',
                    ],
                    [
                        'question' => 'En comparant les fossiles de deux couches, un géologue conclut que la couche A est plus ancienne que la couche B, sans donner d’âge en années. De quel type de datation s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'd’une datation relative', 'is_correct' => true],
                            ['choice_text' => 'd’une datation numérique', 'is_correct' => false],
                            ['choice_text' => 'd’une datation radioactive', 'is_correct' => false],
                            ['choice_text' => 'd’une mesure de température', 'is_correct' => false],
                        ],
                        'explanation' => 'Il a classé les couches l’une par rapport à l’autre sans calculer d’âge en années : c’est une datation relative.',
                    ],
                    [
                        'question' => 'Un fossile caractéristique n’a vécu qu’entre 170 et 165 millions d’années. Pendant combien de temps cette espèce a-t-elle existé ?',
                        'choices' => [
                            ['choice_text' => 'environ 335 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 170 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'environ 5 millions d’années', 'is_correct' => true],
                            ['choice_text' => 'environ 50 millions d’années', 'is_correct' => false],
                        ],
                        'explanation' => '170 − 165 = 5 millions d’années : une durée courte, ce qui fait de cette espèce un bon repère.',
                    ],
                    [
                        'question' => 'Les fossiles ordonnent les couches mais ne donnent pas leur âge en années. Que faut-il pour obtenir un âge numérique ?',
                        'choices' => [
                            ['choice_text' => 'compter les fossiles de chaque couche', 'is_correct' => false],
                            ['choice_text' => 'mesurer la radioactivité de minéraux contenus dans la roche', 'is_correct' => true],
                            ['choice_text' => 'mesurer l’épaisseur de la couche et la taille de ses grains de sable', 'is_correct' => false],
                            ['choice_text' => 'analyser la couleur de la roche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les minéraux radioactifs se désintègrent à vitesse connue ; en mesurant ce qu’il en reste, on calcule un âge en années.',
                    ],
                ],
            ],
            [
                'title' => 'Grandes diversifications de la vie',
                'description' => 'Suivre les grandes phases d’apparition, diversification et renouvellement des groupes vivants.',
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un groupe d’animaux qui se diversifie ?',
                        'choices' => [
                            ['choice_text' => 'un groupe qui donne naissance à de plus en plus de formes différentes', 'is_correct' => true],
                            ['choice_text' => 'un groupe dont les membres se ressemblent de plus en plus d’une génération à l’autre', 'is_correct' => false],
                            ['choice_text' => 'un groupe qui disparaît peu à peu de la Terre', 'is_correct' => false],
                            ['choice_text' => 'un groupe qui change de milieu à chaque saison', 'is_correct' => false],
                        ],
                        'explanation' => 'Se diversifier, c’est multiplier les lignées et les formes au fil du temps.',
                    ],
                    [
                        'question' => 'Il y a environ 2,4 milliards d’années, des microbes photosynthétiques ont fait monter le taux d’oxygène de l’atmosphère. Quelle conséquence cela a-t-il eue ?',
                        'choices' => [
                            ['choice_text' => 'il a fait disparaître l’eau liquide', 'is_correct' => false],
                            ['choice_text' => 'il a permis, plus tard, l’essor d’êtres vivants qui respirent l’oxygène', 'is_correct' => true],
                            ['choice_text' => 'il a arrêté le déplacement des continents', 'is_correct' => false],
                            ['choice_text' => 'il a donné naissance aux dinosaures quelques millions d’années plus tard', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène libéré par la photosynthèse a transformé l’atmosphère et ouvert la voie à des organismes qui respirent.',
                    ],
                    [
                        'question' => 'Dans le Kem Kem, près d’Erfoud, on a trouvé des os de grands reptiles terrestres de l’ère mésozoïque. Quel groupe dominait alors les continents ?',
                        'choices' => [
                            ['choice_text' => 'les mammifères', 'is_correct' => false],
                            ['choice_text' => 'les oiseaux', 'is_correct' => false],
                            ['choice_text' => 'les amphibiens', 'is_correct' => false],
                            ['choice_text' => 'les dinosaures', 'is_correct' => true],
                        ],
                        'explanation' => 'Pendant le Mésozoïque, les dinosaures occupaient de nombreux milieux terrestres.',
                    ],
                    [
                        'question' => 'Quand les plantes ont colonisé les continents, il y a plus de 400 millions d’années, quel effet ont-elles eu sur les sols ?',
                        'choices' => [
                            ['choice_text' => 'elles ont stoppé l’érosion des roches sur les continents', 'is_correct' => false],
                            ['choice_text' => 'elles ont transformé les sols en roches dures et imperméables', 'is_correct' => false],
                            ['choice_text' => 'leurs racines ont contribué à former des sols plus épais', 'is_correct' => true],
                            ['choice_text' => 'elles ont fait monter le niveau des mers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les racines fragmentent la roche et la matière végétale enrichit le sol : les plantes ont profondément transformé les continents.',
                    ],
                    [
                        'question' => 'Un élève dit que les fossiles ne montrent que des apparitions de nouveaux groupes. Quelle remarque peut-on lui faire ?',
                        'choices' => [
                            ['choice_text' => 'il a raison : les disparitions ne laissent pas de traces fossiles', 'is_correct' => false],
                            ['choice_text' => 'ils montrent aussi des disparitions et des changements de diversité', 'is_correct' => true],
                            ['choice_text' => 'les fossiles concernent les plantes mais pas les animaux', 'is_correct' => false],
                            ['choice_text' => 'les fossiles ne montrent que les espèces actuelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le registre fossile enregistre apparitions, diversifications, extinctions et changements de diversité.',
                    ],
                    [
                        'question' => 'Dans une falaise, les fossiles du bas diffèrent de ceux du haut. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'les êtres vivants ont changé au fil du temps', 'is_correct' => true],
                            ['choice_text' => 'les fossiles du haut et du bas ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'les fossiles du haut ont migré vers le bas', 'is_correct' => false],
                            ['choice_text' => 'la roche a transformé les fossiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Des fossiles différents d’une couche à l’autre reflètent des êtres vivants différents à des époques différentes.',
                    ],
                    [
                        'question' => 'Après une grande extinction, de nombreuses niches écologiques se retrouvent vides. Que peut-il arriver aux espèces survivantes ?',
                        'choices' => [
                            ['choice_text' => 'elles disparaissent à leur tour, faute de nourriture suffisante', 'is_correct' => false],
                            ['choice_text' => 'elles cessent de se reproduire', 'is_correct' => false],
                            ['choice_text' => 'elles peuvent se diversifier et occuper ces places libres', 'is_correct' => true],
                            ['choice_text' => 'elles se transforment en roche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les survivants profitent de l’espace libéré pour se multiplier et se diversifier.',
                    ],
                    [
                        'question' => 'Les premières plantes à graines ont pu s’installer loin des cours d’eau. Qu’illustre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'une extinction de masse libère de nouvelles places', 'is_correct' => false],
                            ['choice_text' => 'un changement de climat modifie les roches', 'is_correct' => false],
                            ['choice_text' => 'la dérive des continents fabrique des graines', 'is_correct' => false],
                            ['choice_text' => 'une innovation biologique peut ouvrir de nouveaux milieux', 'is_correct' => true],
                        ],
                        'explanation' => 'La graine protège l’embryon et réduit la dépendance à l’eau : une telle innovation permet de coloniser de nouveaux milieux.',
                    ],
                    [
                        'question' => 'Quel ordre de grandeur de temps faut-il pour voir de grands changements évolutifs dans les fossiles ?',
                        'choices' => [
                            ['choice_text' => 'quelques jours à quelques mois', 'is_correct' => false],
                            ['choice_text' => 'des milliers à des millions d’années', 'is_correct' => true],
                            ['choice_text' => 'une génération humaine', 'is_correct' => false],
                            ['choice_text' => 'un siècle ou deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les changements héréditaires s’accumulent génération après génération ; les grandes transformations se voient sur des échelles de temps très longues.',
                    ],
                    [
                        'question' => 'Les fossiles d’une espèce ne se trouvent plus au-dessus d’une certaine couche. Quelle réponse est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'elle a peut-être disparu, mais le registre fossile est incomplet', 'is_correct' => true],
                            ['choice_text' => 'elle a disparu à ce moment précis de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'elle est devenue une roche sous l’effet du temps et de la pression', 'is_correct' => false],
                            ['choice_text' => 'elle a migré vers un autre continent', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de fossiles peut signaler une extinction, mais aussi un défaut de conservation ou d’échantillonnage.',
                    ],
                ],
            ],
            [
                'title' => 'Crises biologiques majeures',
                'description' => 'Reconnaître quelques extinctions majeures et leurs conséquences générales.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Il y a 66 millions d’années, une extinction de masse a clos le Crétacé. Entre quelles périodes se situe cette limite ?',
                        'choices' => [
                            ['choice_text' => 'entre le Trias et le Jurassique', 'is_correct' => false],
                            ['choice_text' => 'entre le Jurassique et le Crétacé', 'is_correct' => false],
                            ['choice_text' => 'entre le Crétacé et le Paléogène', 'is_correct' => true],
                            ['choice_text' => 'entre le Paléogène et le Quaternaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La crise de la limite Crétacé-Paléogène, il y a environ 66 millions d’années, a éliminé environ les trois quarts des espèces.',
                    ],
                    [
                        'question' => 'Quel groupe célèbre de reptiles disparaît à la fin du Crétacé, à l’exception de ses descendants, les oiseaux ?',
                        'choices' => [
                            ['choice_text' => 'les mammifères', 'is_correct' => false],
                            ['choice_text' => 'les poissons', 'is_correct' => false],
                            ['choice_text' => 'les crocodiles', 'is_correct' => false],
                            ['choice_text' => 'les dinosaures non aviens', 'is_correct' => true],
                        ],
                        'explanation' => 'Les dinosaures non aviens ont disparu à la fin du Crétacé ; les oiseaux, qui en descendent, ont survécu.',
                    ],
                    [
                        'question' => 'Quelle crise, surnommée la Grande Mort, a éliminé la grande majorité des espèces marines ?',
                        'choices' => [
                            ['choice_text' => 'la crise de la fin du Crétacé', 'is_correct' => false],
                            ['choice_text' => 'la crise de la fin du Permien', 'is_correct' => true],
                            ['choice_text' => 'la crise de la fin du Jurassique', 'is_correct' => false],
                            ['choice_text' => 'la crise de la fin du Quaternaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La crise Permien-Trias, il y a environ 252 millions d’années, est la plus grave extinction connue.',
                    ],
                    [
                        'question' => 'Volcans géants, réchauffement et manque d’oxygène dans les océans ont été proposés pour la crise de la fin du Permien. Que montre cette liste ?',
                        'choices' => [
                            ['choice_text' => 'une grande extinction peut avoir plusieurs causes combinées', 'is_correct' => true],
                            ['choice_text' => 'chaque extinction de masse a eu une cause unique et bien identifiée', 'is_correct' => false],
                            ['choice_text' => 'les volcans ne peuvent pas influencer les océans', 'is_correct' => false],
                            ['choice_text' => 'le climat joue peu de rôle dans les extinctions', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grandes crises résultent souvent de plusieurs bouleversements de l’environnement qui s’additionnent.',
                    ],
                    [
                        'question' => 'Après une extinction de masse, que devient la chaîne alimentaire ?',
                        'choices' => [
                            ['choice_text' => 'elle ne change pas, car les survivants sont les mêmes', 'is_correct' => false],
                            ['choice_text' => 'elle se complète en quelques jours grâce aux espèces nouvelles qui arrivent', 'is_correct' => false],
                            ['choice_text' => 'elle s’enrichit parce que la compétition disparaît', 'is_correct' => false],
                            ['choice_text' => 'elle est profondément réorganisée, car beaucoup d’espèces ont disparu', 'is_correct' => true],
                        ],
                        'explanation' => 'La disparition de nombreuses espèces rompt les liens entre proies et prédateurs : les réseaux alimentaires doivent se reconstruire.',
                    ],
                    [
                        'question' => 'Plusieurs millions d’années après la crise de la fin du Crétacé, les mammifères se sont fortement diversifiés. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'ils sont apparus pour la première fois juste après la crise du Crétacé', 'is_correct' => false],
                            ['choice_text' => 'ils ont profité de la disparition des plantes à fleurs', 'is_correct' => false],
                            ['choice_text' => 'ils ont occupé des milieux laissés libres par les dinosaures', 'is_correct' => true],
                            ['choice_text' => 'ils ont remplacé les poissons dans les océans', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mammifères existaient déjà ; après la disparition des dinosaures non aviens, ils ont occupé les niches libérées.',
                    ],
                    [
                        'question' => 'Dans une falaise, une couche contient plus de 100 espèces de fossiles marins, la suivante une dizaine. Quel événement cela peut-il signaler ?',
                        'choices' => [
                            ['choice_text' => 'une crise biologique à la limite entre les deux couches', 'is_correct' => true],
                            ['choice_text' => 'une longue période de calme dans le milieu', 'is_correct' => false],
                            ['choice_text' => 'un simple changement de couleur de la roche', 'is_correct' => false],
                            ['choice_text' => 'une forte hausse de la biodiversité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chute brutale de la diversité fossile à une limite est le signal classique d’une crise biologique.',
                    ],
                    [
                        'question' => 'Une extinction locale ne touche qu’une région. Qu’est-ce qui caractérise une extinction de masse ?',
                        'choices' => [
                            ['choice_text' => 'elle touche un groupe dans une vallée', 'is_correct' => false],
                            ['choice_text' => 'elle touche de nombreux groupes sur de vastes régions du globe', 'is_correct' => true],
                            ['choice_text' => 'elle dure quelques jours dans une forêt', 'is_correct' => false],
                            ['choice_text' => 'elle concerne les espèces domestiquées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une extinction de masse frappe en même temps de nombreux groupes sur de vastes régions du monde.',
                    ],
                    [
                        'question' => 'Avant une crise, un milieu marin comptait 400 familles d’animaux ; après, il n’en reste que 100. Quelle part a disparu ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '300 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => true],
                            ['choice_text' => '4 %', 'is_correct' => false],
                        ],
                        'explanation' => '400 − 100 = 300 familles disparues, soit 300 ÷ 400 = 75 %.',
                    ],
                    [
                        'question' => 'Quel type de changement accompagne souvent une grande extinction ?',
                        'choices' => [
                            ['choice_text' => 'une simple averse locale tombée sur une région pendant quelques jours', 'is_correct' => false],
                            ['choice_text' => 'un changement de saison dans l’hémisphère nord', 'is_correct' => false],
                            ['choice_text' => 'un arrêt de la rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'un bouleversement du climat ou de la chimie des océans', 'is_correct' => true],
                        ],
                        'explanation' => 'Les grandes extinctions coïncident avec de grands bouleversements de l’environnement, comme un réchauffement ou un océan appauvri en oxygène.',
                    ],
                ],
            ],
            [
                'title' => 'Lire une coupe complexe simple',
                'description' => 'Combiner plusieurs principes pour ordonner une succession d’événements.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la première chose à faire devant une coupe géologique inconnue ?',
                        'choices' => [
                            ['choice_text' => 'repérer quelles couches se superposent ou se recoupent', 'is_correct' => true],
                            ['choice_text' => 'chercher la couche la plus colorée', 'is_correct' => false],
                            ['choice_text' => 'peser un échantillon de chaque roche', 'is_correct' => false],
                            ['choice_text' => 'mesurer la température de l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relations de superposition et de recoupement donnent l’ordre des événements ; c’est la base de la lecture d’une coupe.',
                    ],
                    [
                        'question' => 'Un filon E traverse les couches A, B et C mais s’arrête sous la couche D. Quel ordre est correct ?',
                        'choices' => [
                            ['choice_text' => 'E, puis A, B, C, puis D', 'is_correct' => false],
                            ['choice_text' => 'D, puis E, puis A, B, C', 'is_correct' => false],
                            ['choice_text' => 'A, B, C, puis E, puis D', 'is_correct' => true],
                            ['choice_text' => 'A, D, B, C, puis E', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filon coupe A, B et C : il est plus récent qu’elles. Il ne coupe pas D : D s’est déposée après.',
                    ],
                    [
                        'question' => 'Sur une coupe, une faille F décale les couches A et B, et un filon G traverse la faille F. Quel élément est le plus récent ?',
                        'choices' => [
                            ['choice_text' => 'la faille F', 'is_correct' => false],
                            ['choice_text' => 'le filon G', 'is_correct' => true],
                            ['choice_text' => 'la couche A', 'is_correct' => false],
                            ['choice_text' => 'la couche B', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filon coupe la faille : il est plus récent que la faille, qui est elle-même plus récente que A et B.',
                    ],
                    [
                        'question' => 'Dans une série non perturbée, la couche fossilifère H est sous la couche I. Quelle couche est la plus récente ?',
                        'choices' => [
                            ['choice_text' => 'la couche H, située au-dessous', 'is_correct' => false],
                            ['choice_text' => 'les deux, qui ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'celle qui contient le plus gros fossile', 'is_correct' => false],
                            ['choice_text' => 'la couche I, située au-dessus', 'is_correct' => true],
                        ],
                        'explanation' => 'La superposition place I au-dessus de H : I s’est déposée après H.',
                    ],
                    [
                        'question' => 'Des galets de la roche J sont enfermés dans la roche K. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'J est plus ancienne que K', 'is_correct' => true],
                            ['choice_text' => 'K est plus ancienne que J', 'is_correct' => false],
                            ['choice_text' => 'J et K se sont formées en même temps', 'is_correct' => false],
                            ['choice_text' => 'les galets sont plus jeunes que K', 'is_correct' => false],
                        ],
                        'explanation' => 'Les galets existaient avant d’être pris dans K : J est plus ancienne.',
                    ],
                    [
                        'question' => 'Une série de calcaires inclinés est recouverte par du grès horizontal. Quelle histoire est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'dépôt du grès, inclinaison des calcaires, puis érosion de la surface', 'is_correct' => false],
                            ['choice_text' => 'dépôt des calcaires et du grès en même temps, puis érosion', 'is_correct' => false],
                            ['choice_text' => 'dépôt des calcaires, inclinaison, érosion, puis dépôt du grès', 'is_correct' => true],
                            ['choice_text' => 'érosion, dépôt du grès, puis dépôt des calcaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les calcaires ont été inclinés puis érodés avant d’être recouverts par le grès horizontal.',
                    ],
                    [
                        'question' => 'Un géologue combine l’étude des fossiles et celle de la position des couches. Quel est l’intérêt de cette double approche ?',
                        'choices' => [
                            ['choice_text' => 'les deux méthodes donnent le même âge sans calcul', 'is_correct' => false],
                            ['choice_text' => 'les fossiles remplacent l’observation des couches', 'is_correct' => false],
                            ['choice_text' => 'la position des couches remplace les fossiles', 'is_correct' => false],
                            ['choice_text' => 'chaque indice contrôle l’autre et rend la chronologie plus solide', 'is_correct' => true],
                        ],
                        'explanation' => 'Des indices indépendants qui se recoupent rendent la reconstitution plus fiable.',
                    ],
                    [
                        'question' => 'Dans une coupe, une couche de cendres volcaniques est datée de 66 millions d’années. Que peut-on dire des couches juste au-dessus et juste en dessous ?',
                        'choices' => [
                            ['choice_text' => 'celle du dessus est plus ancienne, celle du dessous plus récente', 'is_correct' => false],
                            ['choice_text' => 'celle du dessus est plus récente, celle du dessous plus ancienne', 'is_correct' => true],
                            ['choice_text' => 'les deux ont 66 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'elles se sont déposées avant les cendres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cendres servent de repère daté : ce qui est dessous est plus ancien, ce qui est dessus plus récent.',
                    ],
                    [
                        'question' => 'Dans une coupe de 12 m, chaque mètre de sédiments s’est déposé en 20 000 ans. Combien de temps a duré le dépôt de l’ensemble ?',
                        'choices' => [
                            ['choice_text' => '32 000 ans', 'is_correct' => false],
                            ['choice_text' => '1 667 ans', 'is_correct' => false],
                            ['choice_text' => '240 000 ans', 'is_correct' => true],
                            ['choice_text' => '2 400 000 ans', 'is_correct' => false],
                        ],
                        'explanation' => '12 × 20 000 = 240 000 ans.',
                    ],
                    [
                        'question' => 'Ilyas veut savoir si deux affleurements éloignés correspondent. Quels indices peut-il comparer ?',
                        'choices' => [
                            ['choice_text' => 'les fossiles et les niveaux repères comme un lit de cendres', 'is_correct' => true],
                            ['choice_text' => 'la hauteur des falaises mesurée depuis le niveau de la mer actuel', 'is_correct' => false],
                            ['choice_text' => 'la couleur de la roche en surface', 'is_correct' => false],
                            ['choice_text' => 'le nombre de couches visibles à chaque endroit', 'is_correct' => false],
                        ],
                        'explanation' => 'Des fossiles identiques et un même niveau repère permettent de relier des couches séparées par de grandes distances.',
                    ],
                ],
            ],
            [
                'title' => 'Fossiles, milieux et histoire terrestre',
                'description' => 'Relier les fossiles aux environnements anciens et aux changements de la Terre.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans une falaise du Haut Atlas, on découvre des fossiles de coraux constructeurs de récifs. Quel était probablement le milieu à l’époque ?',
                        'choices' => [
                            ['choice_text' => 'un désert froid, balayé par le vent', 'is_correct' => false],
                            ['choice_text' => 'une mer chaude et peu profonde', 'is_correct' => true],
                            ['choice_text' => 'un lac de montagne alimenté par la neige', 'is_correct' => false],
                            ['choice_text' => 'un glacier de haute altitude', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coraux constructeurs de récifs vivent dans des mers chaudes, claires et peu profondes.',
                    ],
                    [
                        'question' => 'Les phosphates de Khouribga renferment des dents de requins et des os de reptiles marins. Que montre ce gisement ?',
                        'choices' => [
                            ['choice_text' => 'qu’un désert chaud occupait la région', 'is_correct' => false],
                            ['choice_text' => 'qu’un glacier recouvrait la région', 'is_correct' => false],
                            ['choice_text' => 'qu’un volcan dominait la région', 'is_correct' => false],
                            ['choice_text' => 'qu’une mer recouvrait la région à cette époque', 'is_correct' => true],
                        ],
                        'explanation' => 'Des requins et des reptiles marins vivaient dans l’eau : la région était donc sous la mer quand ces roches se sont formées.',
                    ],
                    [
                        'question' => 'Dans une coupe, les fossiles du bas sont des coquillages marins et ceux du haut des fougères terrestres. Quelle interprétation est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'la région s’est enfoncée sous l’océan, qui l’a peu à peu recouverte de sédiments', 'is_correct' => false],
                            ['choice_text' => 'les coquillages se sont transformés en fougères', 'is_correct' => false],
                            ['choice_text' => 'la mer s’est retirée et la région est devenue une terre émergée', 'is_correct' => true],
                            ['choice_text' => 'les fougères ont poussé au fond de la mer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage de fossiles marins à des fossiles terrestres indique un recul de la mer ou un soulèvement de la région.',
                    ],
                    [
                        'question' => 'Un randonneur trouve un coquillage fossile à 3 000 m d’altitude dans l’Atlas. Comment est-il arrivé là ?',
                        'choices' => [
                            ['choice_text' => 'la roche s’est formée sous la mer, puis la tectonique l’a soulevée', 'is_correct' => true],
                            ['choice_text' => 'un oiseau marin l’a transporté jusque là-haut puis l’a laissé tomber il y a quelques années', 'is_correct' => false],
                            ['choice_text' => 'le niveau de la mer a monté de 3 000 m sur toute la planète', 'is_correct' => false],
                            ['choice_text' => 'il a poussé dans la roche à cette altitude au fil des siècles', 'is_correct' => false],
                        ],
                        'explanation' => 'La tectonique peut soulever d’anciens fonds marins jusqu’à de grandes altitudes, dans les chaînes de montagnes.',
                    ],
                    [
                        'question' => 'Quel élément renseigne surtout sur le milieu de vie, plutôt que sur l’âge de la couche ?',
                        'choices' => [
                            ['choice_text' => 'une faille qui coupe la couche', 'is_correct' => false],
                            ['choice_text' => 'un filon qui la traverse', 'is_correct' => false],
                            ['choice_text' => 'un niveau de cendres daté', 'is_correct' => false],
                            ['choice_text' => 'un fossile de corail de récif', 'is_correct' => true],
                        ],
                        'explanation' => 'Un corail de récif indique une mer chaude et peu profonde ; faille, filon et cendres renseignent sur l’ordre ou l’âge des événements.',
                    ],
                    [
                        'question' => 'Les roches d’un ancien fond marin contiennent surtout des coquillages et très peu de plantes terrestres. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'les plantes terrestres n’existaient pas encore à cette époque lointaine', 'is_correct' => false],
                            ['choice_text' => 'les sédiments se déposaient en mer, loin des plantes de la terre ferme', 'is_correct' => true],
                            ['choice_text' => 'les plantes terrestres ne se fossilisent pas', 'is_correct' => false],
                            ['choice_text' => 'la chaleur de la roche a détruit les plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dépôt marin conserve d’abord les êtres vivants de la mer ; les plantes terrestres y arrivent rarement.',
                    ],
                    [
                        'question' => 'Dans une carrière, des coraux fossiles se trouvent dans 3 couches sur 12. Quelle proportion des couches contient du corail ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '3 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '36 %', 'is_correct' => false],
                        ],
                        'explanation' => '3 ÷ 12 = 0,25, soit 25 % des couches.',
                    ],
                    [
                        'question' => 'Fatima observe la même baisse du nombre d’espèces fossiles dans des falaises situées sur trois continents. Que suggère ce résultat ?',
                        'choices' => [
                            ['choice_text' => 'une erreur de mesure sur chaque continent', 'is_correct' => false],
                            ['choice_text' => 'un simple glissement de terrain', 'is_correct' => false],
                            ['choice_text' => 'un effet de la saison de collecte', 'is_correct' => false],
                            ['choice_text' => 'un événement de grande ampleur, pas un phénomène local', 'is_correct' => true],
                        ],
                        'explanation' => 'Un même signal à plusieurs endroits éloignés indique un événement à l’échelle du globe.',
                    ],
                    [
                        'question' => 'Quelle partie d’un animal a le plus de chances de se fossiliser ?',
                        'choices' => [
                            ['choice_text' => 'les parties molles, comme les muscles et les organes internes de l’animal', 'is_correct' => false],
                            ['choice_text' => 'les organes internes, comme le cerveau et le cœur', 'is_correct' => false],
                            ['choice_text' => 'les parties dures, comme les coquilles, les os et les dents', 'is_correct' => true],
                            ['choice_text' => 'la peau fine et les poils des mammifères', 'is_correct' => false],
                        ],
                        'explanation' => 'Les parties dures résistent mieux à la décomposition et se conservent plus facilement dans les sédiments.',
                    ],
                    [
                        'question' => 'Dans quel type de roche trouve-t-on le plus souvent des fossiles ?',
                        'choices' => [
                            ['choice_text' => 'dans les roches volcaniques', 'is_correct' => false],
                            ['choice_text' => 'dans les roches sédimentaires', 'is_correct' => true],
                            ['choice_text' => 'dans les roches métamorphiques', 'is_correct' => false],
                            ['choice_text' => 'dans les roches magmatiques profondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sédiments enfouissent doucement les êtres vivants, ce qui favorise la fossilisation ; la chaleur des roches volcaniques détruit la plupart des restes.',
                    ],
                ],
            ],
            [
                'title' => 'Synthèse de l’histoire de la Terre',
                'description' => 'Réviser les liens entre temps géologiques, événements, fossiles et chronologie relative.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'À quoi sert l’échelle des temps géologiques ?',
                        'choices' => [
                            ['choice_text' => 'à prévoir la météo et le climat des prochaines années dans chaque région', 'is_correct' => false],
                            ['choice_text' => 'à mesurer la profondeur des océans', 'is_correct' => false],
                            ['choice_text' => 'à calculer la distance entre les continents', 'is_correct' => false],
                            ['choice_text' => 'à situer les grands événements de l’histoire de la Terre dans l’ordre', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle organise les événements de l’histoire de la Terre du plus ancien au plus récent.',
                    ],
                    [
                        'question' => 'Dans une coupe sans pli ni faille, que dit le principe de superposition ?',
                        'choices' => [
                            ['choice_text' => 'la couche du haut est la plus ancienne', 'is_correct' => false],
                            ['choice_text' => 'la couche du bas est la plus ancienne', 'is_correct' => true],
                            ['choice_text' => 'la couche la plus épaisse est la plus ancienne', 'is_correct' => false],
                            ['choice_text' => 'la couche la plus dure est la plus ancienne', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sédiments s’empilent : ce qui est dessous s’est déposé avant ce qui est dessus.',
                    ],
                    [
                        'question' => 'Un filon traverse une roche. Quel principe permet de dire qu’il est plus récent qu’elle ?',
                        'choices' => [
                            ['choice_text' => 'le principe de flottabilité', 'is_correct' => false],
                            ['choice_text' => 'le principe de gravité', 'is_correct' => false],
                            ['choice_text' => 'le principe de recoupement', 'is_correct' => true],
                            ['choice_text' => 'le principe de réfraction', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet géologique qui en coupe un autre est plus récent que lui : c’est le principe de recoupement.',
                    ],
                    [
                        'question' => 'Le trilobite est un animal marin éteint, caractéristique des mers du Paléozoïque. Quel autre fossile peut-on trouver dans la même couche qu’un trilobite ?',
                        'choices' => [
                            ['choice_text' => 'un brachiopode, coquillage marin du Paléozoïque', 'is_correct' => true],
                            ['choice_text' => 'un Tyrannosaurus rex, grand dinosaure carnivore', 'is_correct' => false],
                            ['choice_text' => 'un mammouth laineux, éléphant des steppes froides', 'is_correct' => false],
                            ['choice_text' => 'un humain préhistorique, chasseur-cueilleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Trilobites et brachiopodes vivaient dans les mers du Paléozoïque ; dinosaures, mammouths et humains sont bien plus récents.',
                    ],
                    [
                        'question' => 'Dans quel ordre, du plus ancien au plus récent, se succèdent les trois grandes ères ?',
                        'choices' => [
                            ['choice_text' => 'Mésozoïque, Paléozoïque, Cénozoïque', 'is_correct' => false],
                            ['choice_text' => 'Cénozoïque, Mésozoïque, Paléozoïque', 'is_correct' => false],
                            ['choice_text' => 'Paléozoïque, Mésozoïque, Cénozoïque', 'is_correct' => true],
                            ['choice_text' => 'Paléozoïque, Cénozoïque, Mésozoïque', 'is_correct' => false],
                        ],
                        'explanation' => 'Paléozoïque (vie ancienne), Mésozoïque (vie intermédiaire) et Cénozoïque (vie récente) se suivent dans cet ordre.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt de dater une roche à la fois par ses fossiles et par un minéral radioactif ?',
                        'choices' => [
                            ['choice_text' => 'supprimer le besoin de faire des coupes sur le terrain', 'is_correct' => false],
                            ['choice_text' => 'rendre les roches plus anciennes qu’elles ne le sont', 'is_correct' => false],
                            ['choice_text' => 'connaître la météo de l’époque où la roche s’est formée', 'is_correct' => false],
                            ['choice_text' => 'obtenir un ordre fiable des couches et un âge en années', 'is_correct' => true],
                        ],
                        'explanation' => 'Les fossiles donnent l’ordre et la corrélation ; la radioactivité donne des âges en années. Les deux se complètent.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est une datation relative ?',
                        'choices' => [
                            ['choice_text' => 'cette roche a 120 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'la faille est plus récente que cette couche', 'is_correct' => true],
                            ['choice_text' => 'cette eau est à 20 °C', 'is_correct' => false],
                            ['choice_text' => 'cette couche contient 30 % de sable', 'is_correct' => false],
                        ],
                        'explanation' => 'Une datation relative situe un événement avant ou après un autre, sans donner d’âge en années.',
                    ],
                    [
                        'question' => 'Seule une petite partie des êtres vivants du passé a laissé des fossiles. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'la plupart des êtres vivants du passé n’avaient pas de parties dures capables de se conserver', 'is_correct' => false],
                            ['choice_text' => 'les fossiles sont détruits quand on les découvre', 'is_correct' => false],
                            ['choice_text' => 'la fossilisation demande des conditions rares, comme un enfouissement rapide', 'is_correct' => true],
                            ['choice_text' => 'les roches effacent les fossiles avec le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour se fossiliser, un organisme doit être enfoui vite, à l’abri de la décomposition : peu d’entre eux y parviennent.',
                    ],
                    [
                        'question' => 'Quel avantage y a-t-il à croiser plusieurs indices : fossiles, recoupements, niveaux de cendres ?',
                        'choices' => [
                            ['choice_text' => 'on réduit le risque de se tromper sur l’ordre des événements', 'is_correct' => true],
                            ['choice_text' => 'on obtient directement l’âge en années de chaque couche étudiée', 'is_correct' => false],
                            ['choice_text' => 'on évite d’avoir à observer la roche', 'is_correct' => false],
                            ['choice_text' => 'on supprime la nécessité de faire une coupe', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs indices indépendants qui concordent rendent la reconstitution plus solide.',
                    ],
                    [
                        'question' => 'Parmi ces événements, lequel s’est produit en premier ?',
                        'choices' => [
                            ['choice_text' => 'la disparition des dinosaures non aviens', 'is_correct' => false],
                            ['choice_text' => 'l’apparition des premiers humains', 'is_correct' => false],
                            ['choice_text' => 'la dernière glaciation', 'is_correct' => false],
                            ['choice_text' => 'la formation de la Terre', 'is_correct' => true],
                        ],
                        'explanation' => 'La Terre s’est formée il y a 4,54 milliards d’années ; les autres événements sont bien plus récents.',
                    ],
                    [
                        'question' => 'Une roche est datée de 145 millions d’années à la base du Crétacé et de 66 millions d’années à son sommet. Quelle est la durée du Crétacé ?',
                        'choices' => [
                            ['choice_text' => '211 millions d’années', 'is_correct' => false],
                            ['choice_text' => '79 millions d’années', 'is_correct' => true],
                            ['choice_text' => '66 millions d’années', 'is_correct' => false],
                            ['choice_text' => '145 millions d’années', 'is_correct' => false],
                        ],
                        'explanation' => '145 − 66 = 79 millions d’années.',
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
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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