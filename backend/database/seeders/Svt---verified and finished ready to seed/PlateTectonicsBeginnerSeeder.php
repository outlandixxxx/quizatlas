<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PlateTectonicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'plate-tectonics')->firstOrFail();

        $quizzes = [
            [
                'title' => "Dérive des continents et Pangée",
                'description' => "Comprendre les idées essentielles de la dérive des continents, la Pangée et les indices qui ont conduit à la théorie de la tectonique des plaques.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Il y a plus de 200 millions d’années, la plupart des terres émergées formaient un seul bloc. Comment l’appelle-t-on ?",
                        'explanation' => "La Pangée réunissait la plupart des continents actuels ; l’océan qui l’entourait s’appelait la Panthalassa.",
                        'choices' => [
                            ['choice_text' => "La Panthalassa", 'is_correct' => false],
                            ['choice_text' => "La Téthys", 'is_correct' => false],
                            ['choice_text' => "L’Atlantide", 'is_correct' => false],
                            ['choice_text' => "La Pangée", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Au début du XXe siècle, le géophysicien allemand Alfred Wegener propose une idée révolutionnaire. Laquelle ?",
                        'explanation' => "En 1912, Wegener expose que les continents, autrefois réunis, se sont écartés. Son idée sera d’abord rejetée par la plupart des scientifiques.",
                        'choices' => [
                            ['choice_text' => "Les océans se vident peu à peu dans le manteau", 'is_correct' => false],
                            ['choice_text' => "La Terre grossit à mesure que son noyau refroidit", 'is_correct' => false],
                            ['choice_text' => "Les séismes naissent des marées de la Lune", 'is_correct' => false],
                            ['choice_text' => "Les continents se déplacent au fil du temps", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Karim pose une carte de l’Afrique contre celle de l’Amérique du Sud : la côte brésilienne épouse presque celle du golfe de Guinée. Que suggère cet emboîtement ?",
                        'explanation' => "Le puzzle des côtes fut le premier indice de Wegener. L’ajustement n’est pas parfait, car les rivages ont évolué depuis la séparation.",
                        'choices' => [
                            ['choice_text' => "Les deux continents ont pu être réunis autrefois", 'is_correct' => true],
                            ['choice_text' => "Les deux continents ont la même altitude moyenne", 'is_correct' => false],
                            ['choice_text' => "Les mêmes vagues ont taillé les deux côtes", 'is_correct' => false],
                            ['choice_text' => "Une dorsale a découpé les côtes à l’identique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des fossiles de Mesosaurus, un petit reptile d’eau douce, sont trouvés au Brésil et en Afrique du Sud, de part et d’autre de l’Atlantique. Quelle interprétation soutient la dérive des continents ?",
                        'explanation' => "Un reptile d’eau douce n’a pas pu franchir un océan salé : les deux régions devaient former un seul continent.",
                        'choices' => [
                            ['choice_text' => "L’animal a traversé l’Atlantique à la nage", 'is_correct' => false],
                            ['choice_text' => "Le reptile est apparu deux fois, de façon identique", 'is_correct' => false],
                            ['choice_text' => "Les deux régions étaient réunies à l’époque de ce reptile", 'is_correct' => true],
                            ['choice_text' => "Les fossiles ont été transportés par les marées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une chaîne de montagnes de même âge et de même nature s’interrompt sur la côte est de l’Amérique du Nord, puis réapparaît en Écosse et en Scandinavie. Quelle conclusion en tire-t-on ?",
                        'explanation' => "Les Appalaches et les montagnes d’Écosse et de Scandinavie ont même âge et même composition : elles étaient jointes avant que l’Atlantique ne s’ouvre.",
                        'choices' => [
                            ['choice_text' => "Elle s’est formée deux fois, sans lien entre les deux rives", 'is_correct' => false],
                            ['choice_text' => "Les vagues de l’Atlantique l’ont découpée en deux", 'is_correct' => false],
                            ['choice_text' => "Les marées ont déplacé une moitié de la chaîne", 'is_correct' => false],
                            ['choice_text' => "Elle formait une seule chaîne avant l’Atlantique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Malgré ses nombreux indices, l’idée de Wegener est largement rejetée vers 1920. Quel point faible lui est le plus reproché ?",
                        'explanation' => "Wegener avait des indices, mais pas d’explication satisfaisante de la force qui déplace les continents. Elle viendra avec la tectonique des plaques, dans les années 1960.",
                        'choices' => [
                            ['choice_text' => "Il ne citait pas la moindre preuve fossile dans son livre", 'is_correct' => false],
                            ['choice_text' => "Il n’expliquait pas comment les continents se déplacent", 'is_correct' => true],
                            ['choice_text' => "Ses cartes ne montraient pas d’emboîtement des côtes", 'is_correct' => false],
                            ['choice_text' => "Il affirmait que les océans n’existaient pas encore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des traces d’anciens glaciers de même âge sont retrouvées en Afrique du Sud, en Inde, en Australie et en Amérique du Sud, aujourd’hui sous des climats chauds. Que suggère cette observation ?",
                        'explanation' => "Ces traces glaciaires, vieilles de 300 millions d’années, s’alignent quand on rassemble ces continents en un seul bloc, le Gondwana, près du pôle Sud.",
                        'choices' => [
                            ['choice_text' => "Le climat de la Terre entière était alors glacial", 'is_correct' => false],
                            ['choice_text' => "Ces continents étaient réunis autour du pôle Sud", 'is_correct' => true],
                            ['choice_text' => "Des icebergs ont déposé ces traces d’un continent à l’autre", 'is_correct' => false],
                            ['choice_text' => "Les glaciers de l’Antarctique ont été déplacés jusque-là", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence sépare la dérive des continents de la tectonique des plaques ?",
                        'explanation' => "La dérive décrit le déplacement des continents ; la tectonique l’explique par le mouvement de plaques rigides, océaniques ou continentales, qui portent continents et fonds marins.",
                        'choices' => [
                            ['choice_text' => "La dérive des continents ne concerne que les volcans", 'is_correct' => false],
                            ['choice_text' => "La tectonique des plaques considère les océans comme fixes", 'is_correct' => false],
                            ['choice_text' => "La tectonique déplace des plaques entières", 'is_correct' => true],
                            ['choice_text' => "La dérive des continents est née après les mesures GPS", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Il y a combien de temps la Pangée a-t-elle commencé à se fragmenter ?",
                        'explanation' => "La fragmentation de la Pangée débute il y a environ 200 millions d’années, à l’époque des premiers dinosaures.",
                        'choices' => [
                            ['choice_text' => "Il y a environ 2 millions d’années", 'is_correct' => false],
                            ['choice_text' => "Il y a environ 20 millions d’années", 'is_correct' => false],
                            ['choice_text' => "Il y a environ 200 millions d’années", 'is_correct' => true],
                            ['choice_text' => "Il y a environ 4 milliards d’années", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle suite illustre le mieux l’histoire de la Pangée ?",
                        'explanation' => "Les continents étaient groupés dans la Pangée, qui s’est ensuite fragmentée ; ses morceaux s’écartent encore aujourd’hui.",
                        'choices' => [
                            ['choice_text' => "Éloignement → formation de la Pangée → disparition des continents", 'is_correct' => false],
                            ['choice_text' => "Continents réunis → fragmentation → éloignement progressif", 'is_correct' => true],
                            ['choice_text' => "Océans fermés → apparition de la Pangée → immobilité", 'is_correct' => false],
                            ['choice_text' => "Fragmentation → réunion définitive → disparition des continents", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le mot « Pangée » vient du grec. Que signifie-t-il ?",
                        'explanation' => "Pangée vient du grec pan, « tout », et gaia, « terre » : la Terre entière réunie en un seul bloc.",
                        'choices' => [
                            ['choice_text' => "« Toute la Terre »", 'is_correct' => true],
                            ['choice_text' => "« Terre nouvelle »", 'is_correct' => false],
                            ['choice_text' => "« Grande montagne »", 'is_correct' => false],
                            ['choice_text' => "« Océan unique »", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Plaques tectoniques et limites",
                'description' => "Identifier les plaques lithosphériques et distinguer les principales limites tectoniques à partir de leurs mouvements relatifs.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Le sol sur lequel nous marchons appartient à une plaque tectonique. De quelle enveloppe de la Terre cette plaque est-elle un morceau rigide ?",
                        'explanation' => "Une plaque est un fragment rigide de la lithosphère, formée de la croûte et du manteau supérieur rigide ; elle glisse sur l’asthénosphère, plus ductile.",
                        'choices' => [
                            ['choice_text' => "Du noyau interne", 'is_correct' => false],
                            ['choice_text' => "De la lithosphère", 'is_correct' => true],
                            ['choice_text' => "De l’atmosphère", 'is_correct' => false],
                            ['choice_text' => "De l’hydrosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, deux plaques s’écartent l’une de l’autre. De quel type de limite s’agit-il ?",
                        'explanation' => "Quand deux plaques s’éloignent, la limite est divergente ; c’est le cas des dorsales, où naît de la lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Une limite divergente", 'is_correct' => true],
                            ['choice_text' => "Une limite convergente", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une limite stationnaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques se rapprochent et l’une s’enfonce sous l’autre dans le manteau. Quel nom porte ce processus ?",
                        'explanation' => "Dans la subduction, une plaque plonge sous l’autre. L’accrétion, au contraire, ajoute de la matière à une plaque.",
                        'choices' => [
                            ['choice_text' => "L’accrétion", 'is_correct' => false],
                            ['choice_text' => "La divergence", 'is_correct' => false],
                            ['choice_text' => "La subduction", 'is_correct' => true],
                            ['choice_text' => "L’obduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La faille de San Andreas, en Californie, est une limite où deux plaques glissent latéralement l’une contre l’autre. De quel type de limite s’agit-il ?",
                        'explanation' => "À une limite transformante, les plaques coulissent horizontalement ; la lithosphère n’y est ni créée ni détruite.",
                        'choices' => [
                            ['choice_text' => "Une limite transformante", 'is_correct' => true],
                            ['choice_text' => "Une limite divergente", 'is_correct' => false],
                            ['choice_text' => "Une limite de subduction", 'is_correct' => false],
                            ['choice_text' => "Une limite de collision", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle association entre un mouvement relatif et un type de limite est correcte ?",
                        'explanation' => "Éloignement, divergente ; rapprochement, convergente ; coulissage horizontal, transformante.",
                        'choices' => [
                            ['choice_text' => "Coulissage : limite convergente", 'is_correct' => false],
                            ['choice_text' => "Rapprochement : limite divergente", 'is_correct' => false],
                            ['choice_text' => "Éloignement : limite divergente", 'is_correct' => true],
                            ['choice_text' => "Rapprochement : limite transformante", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le Maroc se trouve au bord de la plaque africaine, qui se rapproche très lentement de la plaque eurasienne. Quel type de limite cela décrit-il ?",
                        'explanation' => "Un rapprochement correspond à une convergence : l’Afrique avance d’environ 5 mm par an vers l’Eurasie, ce qui contribue à la formation de reliefs comme le Rif.",
                        'choices' => [
                            ['choice_text' => "Une limite convergente", 'is_correct' => true],
                            ['choice_text' => "Une limite divergente", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une dorsale en formation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation sur les deux types de croûte est exacte ?",
                        'explanation' => "La croûte océanique, en basalte, mesure environ 7 km d’épaisseur et reste dense ; la croûte continentale, plus épaisse, est plus légère. C’est pourquoi la première s’enfonce plus facilement.",
                        'choices' => [
                            ['choice_text' => "La croûte océanique est plus épaisse et plus légère que la croûte continentale", 'is_correct' => false],
                            ['choice_text' => "Les croûtes océanique et continentale ont la même épaisseur", 'is_correct' => false],
                            ['choice_text' => "La croûte continentale est plus dense que la croûte océanique", 'is_correct' => false],
                            ['choice_text' => "La croûte océanique est plus mince et plus dense que la croûte continentale", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène est particulièrement fréquent le long des limites de plaques ?",
                        'explanation' => "Aux frontières, les plaques se frottent, se heurtent ou s’écartent : les roches accumulent des contraintes qui se libèrent en séismes.",
                        'choices' => [
                            ['choice_text' => "Les éclipses", 'is_correct' => false],
                            ['choice_text' => "Les séismes", 'is_correct' => true],
                            ['choice_text' => "Les aurores polaires", 'is_correct' => false],
                            ['choice_text' => "Les marées de vive-eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En Afrique de l’Est, un long fossé s’élargit peu à peu, avec des volcans et des séismes. Comment appelle-t-on cette limite en formation ?",
                        'explanation' => "Le rift est-africain est un fossé où la lithosphère continentale s’étire ; à terme, il pourrait s’ouvrir en océan, comme la mer Rouge.",
                        'choices' => [
                            ['choice_text' => "Une zone de subduction naissante", 'is_correct' => false],
                            ['choice_text' => "Une faille transformante achevée", 'is_correct' => false],
                            ['choice_text' => "Une chaîne de collision en formation", 'is_correct' => false],
                            ['choice_text' => "Un rift, début d’une limite divergente", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme qu’une plaque correspond toujours à un continent. Que lui répondre ?",
                        'explanation' => "La plaque africaine, par exemple, porte l’Afrique mais aussi une partie de l’Atlantique et de l’océan Indien. Les limites de plaques ne suivent donc pas les côtes.",
                        'choices' => [
                            ['choice_text' => "Une plaque est un fragment plus petit qu’un continent", 'is_correct' => false],
                            ['choice_text' => "Une plaque peut porter continent et océan", 'is_correct' => true],
                            ['choice_text' => "Chaque plaque correspond à un seul océan", 'is_correct' => false],
                            ['choice_text' => "Les plaques se limitent aux fonds marins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les plaques glissent sur une couche plus déformable du manteau. Comment s’appelle-t-elle ?",
                        'explanation' => "L’asthénosphère est la partie du manteau, chaude et plus ductile, sur laquelle la lithosphère rigide se déplace lentement.",
                        'choices' => [
                            ['choice_text' => "Le noyau externe", 'is_correct' => false],
                            ['choice_text' => "La croûte continentale", 'is_correct' => false],
                            ['choice_text' => "L’asthénosphère", 'is_correct' => true],
                            ['choice_text' => "L’atmosphère", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Divergence et expansion des fonds océaniques",
                'description' => "Reconnaître les caractéristiques des dorsales et comprendre comment la divergence produit de la nouvelle lithosphère océanique.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel relief sous-marin marque la zone où deux plaques océaniques s’écartent ?",
                        'explanation' => "Les dorsales sont de longues chaînes sous-marines : c’est là que les plaques s’écartent et que du magma monte.",
                        'choices' => [
                            ['choice_text' => "Une fosse de subduction", 'is_correct' => false],
                            ['choice_text' => "Une dorsale médio-océanique", 'is_correct' => true],
                            ['choice_text' => "Une plaine abyssale", 'is_correct' => false],
                            ['choice_text' => "Un plateau continental", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que se passe-t-il à une dorsale quand les deux plaques s’écartent ?",
                        'explanation' => "L’écartement laisse monter du magma qui se refroidit en basalte ; ce plancher neuf s’éloigne de part et d’autre de l’axe.",
                        'choices' => [
                            ['choice_text' => "Du magma monte et forme de la nouvelle lithosphère", 'is_correct' => true],
                            ['choice_text' => "La lithosphère océanique y est détruite et plonge", 'is_correct' => false],
                            ['choice_text' => "Les deux plaques se soudent en profondeur", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe y fait surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’Islande est une île volcanique que traverse un fossé qui s’élargit d’environ 2 cm par an. Sur quel contexte tectonique repose-t-elle ?",
                        'explanation' => "L’Islande émerge parce que la dorsale médio-atlantique y affleure ; l’île s’élargit de quelques centimètres par an.",
                        'choices' => [
                            ['choice_text' => "Sur une zone de subduction active", 'is_correct' => false],
                            ['choice_text' => "Sur une chaîne de collision continentale", 'is_correct' => false],
                            ['choice_text' => "Sur la dorsale médio-atlantique, une limite divergente", 'is_correct' => true],
                            ['choice_text' => "Sur le centre stable d’une plaque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une roche basaltique se forme à la dorsale, puis s’en éloigne peu à peu. Que devient-elle ?",
                        'explanation' => "Le basalte fait partie de la plaque, qui s’écarte de l’axe de la dorsale : il s’en éloigne de quelques centimètres par an.",
                        'choices' => [
                            ['choice_text' => "Elle est emportée de part et d’autre avec la plaque", 'is_correct' => true],
                            ['choice_text' => "Elle revient vers la dorsale au bout de quelques années", 'is_correct' => false],
                            ['choice_text' => "Elle reste à l’endroit où elle s’est formée", 'is_correct' => false],
                            ['choice_text' => "Elle remonte vers la surface de l’océan", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les roches du plancher océanique enregistrent le champ magnétique de la Terre. De part et d’autre d’une dorsale, comment sont disposées les bandes magnétiques ?",
                        'explanation' => "Les bandes d’aimantation alternées sont symétriques de part et d’autre de la dorsale : preuve que le plancher se forme au centre puis s’écarte.",
                        'choices' => [
                            ['choice_text' => "Au hasard, sans lien avec la dorsale", 'is_correct' => false],
                            ['choice_text' => "D’un seul côté de la dorsale", 'is_correct' => false],
                            ['choice_text' => "Parallèlement aux côtes des continents voisins", 'is_correct' => false],
                            ['choice_text' => "Symétriquement de chaque côté de la dorsale", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un navire prélève des roches du plancher à 100 km, 500 km et 1 000 km d’une dorsale. Que constate-t-on sur leur âge ?",
                        'explanation' => "La croûte naît à la dorsale puis s’en éloigne : plus on s’en écarte, plus elle est âgée.",
                        'choices' => [
                            ['choice_text' => "Les roches les plus proches sont les plus anciennes", 'is_correct' => false],
                            ['choice_text' => "Les trois roches ont le même âge", 'is_correct' => false],
                            ['choice_text' => "Les plus éloignées sont les plus anciennes", 'is_correct' => true],
                            ['choice_text' => "Les roches de 500 km sont les plus anciennes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La lithosphère océanique se crée aux dorsales. Quel processus en détruit une partie ailleurs sur le globe ?",
                        'explanation' => "Les plaques océaniques anciennes plongent dans le manteau aux zones de subduction : la création aux dorsales est compensée par ces disparitions.",
                        'choices' => [
                            ['choice_text' => "L’évaporation", 'is_correct' => false],
                            ['choice_text' => "La subduction", 'is_correct' => true],
                            ['choice_text' => "L’érosion fluviale", 'is_correct' => false],
                            ['choice_text' => "La sédimentation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux stations GPS installées de part et d’autre d’une dorsale s’éloignent l’une de l’autre de 6 cm par an. Que mesure ce chiffre ?",
                        'explanation' => "6 cm par an est la vitesse à laquelle la distance entre les deux stations augmente. Si le mouvement est symétrique, chaque plaque avance de 3 cm.",
                        'choices' => [
                            ['choice_text' => "La hauteur gagnée chaque année par la dorsale", 'is_correct' => false],
                            ['choice_text' => "Le déplacement de la dorsale elle-même vers l’est", 'is_correct' => false],
                            ['choice_text' => "La vitesse de remontée du magma", 'is_correct' => false],
                            ['choice_text' => "L’ouverture relative entre les deux plaques", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "La dorsale du Pacifique Est s’ouvre jusqu’à 15 cm par an, la dorsale médio-atlantique d’environ 2,5 cm par an. Laquelle produit le plus de lithosphère neuve ?",
                        'explanation' => "Plus l’écartement est rapide, plus il se forme de lithosphère neuve chaque année : le Pacifique Est est donc beaucoup plus productif que l’Atlantique.",
                        'choices' => [
                            ['choice_text' => "La dorsale médio-atlantique", 'is_correct' => false],
                            ['choice_text' => "La dorsale du Pacifique Est", 'is_correct' => true],
                            ['choice_text' => "Les deux, en quantité identique", 'is_correct' => false],
                            ['choice_text' => "Ni l’une ni l’autre : la lithosphère naît dans les fosses", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Près d’une dorsale, des « fumeurs noirs » rejettent de l’eau très chaude au fond de l’océan. D’où vient cette chaleur ?",
                        'explanation' => "L’eau de mer s’infiltre dans les roches fracturées, est chauffée par le magma proche, puis jaillit à plus de 300 °C.",
                        'choices' => [
                            ['choice_text' => "Du magma et des roches chaudes voisines", 'is_correct' => true],
                            ['choice_text' => "Du Soleil, dont les rayons atteignent le fond", 'is_correct' => false],
                            ['choice_text' => "Du frottement des vagues sur le plancher", 'is_correct' => false],
                            ['choice_text' => "De la décomposition des cadavres de poissons", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Convergence, subduction et formation des montagnes",
                'description' => "Comprendre les principaux effets de la convergence des plaques : subduction, fosses océaniques, volcanisme et collision continentale.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quand deux plaques convergent, la plaque océanique ancienne plonge sous l’autre. Quelle propriété explique ce plongement ?",
                        'explanation' => "En vieillissant, la lithosphère océanique se refroidit et devient plus dense que l’asthénosphère : elle s’enfonce sous son propre poids.",
                        'choices' => [
                            ['choice_text' => "Sa lithosphère refroidie est plus dense", 'is_correct' => true],
                            ['choice_text' => "Elle est plus légère que la croûte continentale", 'is_correct' => false],
                            ['choice_text' => "Elle est poussée vers le bas par les marées", 'is_correct' => false],
                            ['choice_text' => "Elle est attirée par le noyau externe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel relief profond longe une zone de subduction, du côté de la plaque qui plonge ?",
                        'explanation' => "En plongeant, la plaque se courbe et creuse une fosse étroite, comme la fosse des Mariannes.",
                        'choices' => [
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Un plateau", 'is_correct' => false],
                            ['choice_text' => "Une fosse océanique", 'is_correct' => true],
                            ['choice_text' => "Un delta", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque océanique converge vers une plaque continentale. Que se produit-il ?",
                        'explanation' => "La plaque océanique, plus dense, s’enfonce : la fosse, les séismes et un alignement de volcans sur le continent en sont les signatures.",
                        'choices' => [
                            ['choice_text' => "Les deux plaques fusionnent sans séisme", 'is_correct' => false],
                            ['choice_text' => "La plaque continentale plonge sous l’océanique", 'is_correct' => false],
                            ['choice_text' => "L’océanique plonge sous la continentale, avec séismes et volcans", 'is_correct' => true],
                            ['choice_text' => "Un nouvel océan s’ouvre au bord du continent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques continentales convergent. Quel résultat est typique ?",
                        'explanation' => "Les deux croûtes, légères, ne plongent pas facilement : elles se compriment, s’épaississent et se plissent en montagnes.",
                        'choices' => [
                            ['choice_text' => "La formation d’une chaîne de montagnes", 'is_correct' => true],
                            ['choice_text' => "L’ouverture d’un océan entre les deux continents", 'is_correct' => false],
                            ['choice_text' => "La formation d’une dorsale au centre", 'is_correct' => false],
                            ['choice_text' => "La création d’une fosse de 10 000 m", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’Himalaya s’élève encore de quelques millimètres par an. À quel contexte tectonique doit-il sa formation ?",
                        'explanation' => "L’Inde, venue du sud, heurte l’Eurasie depuis environ 50 millions d’années ; la croûte comprimée s’épaissit et forme l’Himalaya.",
                        'choices' => [
                            ['choice_text' => "À la collision entre l’Inde et l’Eurasie", 'is_correct' => true],
                            ['choice_text' => "À l’ouverture d’un océan entre l’Inde et l’Eurasie", 'is_correct' => false],
                            ['choice_text' => "À une dorsale située au nord de l’Inde", 'is_correct' => false],
                            ['choice_text' => "À une faille transformante entre deux océans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle chaîne de causes et d’effets décrit une zone de convergence ?",
                        'explanation' => "En se rapprochant, les plaques frottent et se déforment : les roches cassent par à-coups, ce qui provoque de nombreux séismes.",
                        'choices' => [
                            ['choice_text' => "Convergence → disparition des contraintes → calme sismique", 'is_correct' => false],
                            ['choice_text' => "Divergence → compression des roches → montagnes", 'is_correct' => false],
                            ['choice_text' => "Convergence → contraintes accumulées → séismes", 'is_correct' => true],
                            ['choice_text' => "Convergence → ouverture d’un océan → dorsale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les Andes, qui bordent le Pacifique, portent de nombreux volcans actifs. Quelle est l’origine de cette chaîne ?",
                        'explanation' => "La plaque océanique de Nazca plonge sous le continent : cette subduction soulève la cordillère et alimente ses volcans.",
                        'choices' => [
                            ['choice_text' => "La collision de l’Amérique du Sud avec l’Afrique", 'is_correct' => false],
                            ['choice_text' => "L’écartement de deux plaques à une dorsale", 'is_correct' => false],
                            ['choice_text' => "Le coulissage d’une faille transformante", 'is_correct' => false],
                            ['choice_text' => "La subduction de la plaque de Nazca sous l’Amérique du Sud", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Au Japon, un chapelet d’îles volcaniques longe une fosse profonde. Quel contexte tectonique l’explique ?",
                        'explanation' => "Le plongement d’une plaque produit du magma qui alimente un arc volcanique parallèle à la fosse.",
                        'choices' => [
                            ['choice_text' => "Une divergence : une dorsale émergée", 'is_correct' => false],
                            ['choice_text' => "Une transformante : un coulissage sans magma", 'is_correct' => false],
                            ['choice_text' => "Une collision : deux continents plissés", 'is_correct' => false],
                            ['choice_text' => "Une subduction, avec un arc volcanique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une plaque océanique s’enfonce facilement dans le manteau, mais deux continents qui se rencontrent ne le font pas. Comment l’expliquer ?",
                        'explanation' => "La croûte continentale est épaisse et moins dense que le manteau ; elle résiste à l’enfoncement et se plisse plutôt.",
                        'choices' => [
                            ['choice_text' => "Le manteau est solide sous les continents", 'is_correct' => false],
                            ['choice_text' => "La croûte continentale, légère, flotte", 'is_correct' => true],
                            ['choice_text' => "Les continents sont trop éloignés pour se toucher", 'is_correct' => false],
                            ['choice_text' => "Les séismes empêchent la collision", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La « ceinture de feu » entoure l’océan Pacifique. Quelle caractéristique la définit ?",
                        'explanation' => "Autour du Pacifique, les plaques océaniques plongent sous les continents et les îles : séismes et volcans y sont très nombreux.",
                        'choices' => [
                            ['choice_text' => "Une unique dorsale volcanique qui encercle l’océan", 'is_correct' => false],
                            ['choice_text' => "Une chaîne de subductions, séismes et volcans", 'is_correct' => true],
                            ['choice_text' => "Un anneau de points chauds alignés", 'is_correct' => false],
                            ['choice_text' => "Une zone sans séisme au centre du Pacifique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Où se produisent les séismes les plus puissants de la planète, comme celui du Japon en 2011 (magnitude 9) ?",
                        'explanation' => "Les grandes zones de subduction peuvent se rompre sur des centaines de kilomètres, ce qui produit des séismes de magnitude 9 et même des tsunamis.",
                        'choices' => [
                            ['choice_text' => "Au centre des continents stables", 'is_correct' => false],
                            ['choice_text' => "Le long des dorsales", 'is_correct' => false],
                            ['choice_text' => "Dans les grands déserts", 'is_correct' => false],
                            ['choice_text' => "Dans les zones de subduction", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Failles transformantes et séismes",
                'description' => "Relier les mouvements de coulissage aux failles transformantes et comprendre pourquoi les limites de plaques sont propices aux séismes.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel mouvement domine entre les deux blocs d’une faille transformante ?",
                        'explanation' => "Les deux blocs glissent latéralement l’un contre l’autre ; il n’y a ni création ni destruction de lithosphère.",
                        'choices' => [
                            ['choice_text' => "Un plongement d’un bloc sous l’autre", 'is_correct' => false],
                            ['choice_text' => "Un écartement qui crée de la croûte", 'is_correct' => false],
                            ['choice_text' => "Un coulissage horizontal", 'is_correct' => true],
                            ['choice_text' => "Une collision frontale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur la faille de San Andreas, les roches se bloquent pendant des décennies, puis glissent d’un coup. Que provoque ce glissement brutal ?",
                        'explanation' => "Le frottement bloque la faille : les contraintes s’accumulent, puis la rupture libère l’énergie sous forme d’ondes sismiques.",
                        'choices' => [
                            ['choice_text' => "Une éruption volcanique", 'is_correct' => false],
                            ['choice_text' => "Un séisme", 'is_correct' => true],
                            ['choice_text' => "Une marée exceptionnelle", 'is_correct' => false],
                            ['choice_text' => "L’ouverture d’un nouvel océan", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un GPS montre deux repères, de part et d’autre d’une faille, qui se déplacent parallèlement à elle en sens opposés. Quel mouvement est en jeu ?",
                        'explanation' => "Des déplacements parallèles à la faille et de sens contraires traduisent un coulissage horizontal, caractéristique d’une limite transformante.",
                        'choices' => [
                            ['choice_text' => "Une subduction", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale", 'is_correct' => false],
                            ['choice_text' => "Une divergence océanique", 'is_correct' => false],
                            ['choice_text' => "Un coulissage transformant", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel appareil enregistre les ondes d’un séisme ?",
                        'explanation' => "Le sismographe capte les vibrations du sol ; en combinant plusieurs stations, on localise le séisme.",
                        'choices' => [
                            ['choice_text' => "Un marégraphe", 'is_correct' => false],
                            ['choice_text' => "Un baromètre", 'is_correct' => false],
                            ['choice_text' => "Un sismographe", 'is_correct' => true],
                            ['choice_text' => "Un pluviomètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que mesure la magnitude d’un séisme ?",
                        'explanation' => "La magnitude traduit l’énergie libérée à la source ; les dégâts relèvent de l’intensité. Chaque degré de magnitude représente environ 30 fois plus d’énergie.",
                        'choices' => [
                            ['choice_text' => "L’énergie libérée à la source du séisme", 'is_correct' => true],
                            ['choice_text' => "Les dégâts constatés dans une ville", 'is_correct' => false],
                            ['choice_text' => "La profondeur à laquelle les roches se rompent", 'is_correct' => false],
                            ['choice_text' => "La durée des secousses ressenties", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la différence entre le foyer et l’épicentre d’un séisme ?",
                        'explanation' => "La rupture commence au foyer, sous terre ; l’épicentre est le point de la surface situé directement au-dessus.",
                        'choices' => [
                            ['choice_text' => "Le foyer est la rupture en profondeur, l’épicentre son point en surface", 'is_correct' => true],
                            ['choice_text' => "Le foyer est situé en surface et l’épicentre en profondeur sous la faille", 'is_correct' => false],
                            ['choice_text' => "Le foyer désigne l’énergie, l’épicentre la magnitude", 'is_correct' => false],
                            ['choice_text' => "Le foyer est le lieu le plus détruit, l’épicentre le plus éloigné", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme : « Une limite transformante crée de la croûte neuve, comme une dorsale. » Que lui répondre ?",
                        'explanation' => "Le long d’une transformante, les plaques glissent l’une contre l’autre ; c’est à la dorsale, limite divergente, que la croûte se forme.",
                        'choices' => [
                            ['choice_text' => "Elle crée de la croûte sur les continents", 'is_correct' => false],
                            ['choice_text' => "Elle détruit la croûte comme le fait une subduction", 'is_correct' => false],
                            ['choice_text' => "Elle fait coulisser les plaques, sans croûte neuve", 'is_correct' => true],
                            ['choice_text' => "Elle crée un océan à chaque séisme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après un séisme, les ondes P et S partent du foyer. Lesquelles une station sismique reçoit-elle en premier ?",
                        'explanation' => "Les ondes P (primaires) se propagent plus vite que les ondes S (secondaires) ; l’écart entre leurs arrivées sert à estimer la distance au foyer.",
                        'choices' => [
                            ['choice_text' => "Les ondes S, les plus rapides", 'is_correct' => false],
                            ['choice_text' => "Les deux types en même temps", 'is_correct' => false],
                            ['choice_text' => "Les ondes de surface, avant les autres", 'is_correct' => false],
                            ['choice_text' => "Les ondes P, les plus rapides", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "En marquant sur une carte les épicentres des séismes de la dernière décennie, on voit apparaître de longues bandes. Qu’est-ce que cela permet ?",
                        'explanation' => "Les séismes se concentrent le long des zones de déformation : leurs bandes dessinent la plupart des frontières de plaques.",
                        'choices' => [
                            ['choice_text' => "Délimiter les frontières entre pays", 'is_correct' => false],
                            ['choice_text' => "Calculer l’âge des océans directement", 'is_correct' => false],
                            ['choice_text' => "Mesurer l’épaisseur de l’atmosphère", 'is_correct' => false],
                            ['choice_text' => "Repérer les limites entre plaques", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Deux plaques se déplacent dans le même sens, parallèlement à leur frontière commune, mais l’une plus vite que l’autre. Quel mouvement relatif observe-t-on le long de cette frontière ?",
                        'explanation' => "Le long d’une frontière parallèle à leur mouvement, la plaque la plus rapide glisse devant l’autre : c’est un coulissage.",
                        'choices' => [
                            ['choice_text' => "Un éloignement, comme à une dorsale", 'is_correct' => false],
                            ['choice_text' => "Un coulissage, comme à une limite transformante", 'is_correct' => true],
                            ['choice_text' => "Un rapprochement avec subduction", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Volcanisme et tectonique des plaques",
                'description' => "Relier les principaux contextes volcaniques aux mouvements des plaques et distinguer volcanisme de divergence et volcanisme de subduction.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel contexte tectonique est associé au volcanisme des dorsales médio-océaniques ?",
                        'explanation' => "À la dorsale, les plaques s’écartent et le magma remonte pour combler le vide ; c’est un volcanisme de divergence.",
                        'choices' => [
                            ['choice_text' => "La divergence des plaques", 'is_correct' => true],
                            ['choice_text' => "La collision de deux continents", 'is_correct' => false],
                            ['choice_text' => "Le coulissage d’une faille transformante", 'is_correct' => false],
                            ['choice_text' => "Le plongement d’une plaque dans le manteau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une zone de subduction, où se trouvent les volcans par rapport à la fosse ?",
                        'explanation' => "Les volcans forment un arc parallèle à la fosse, sur la plaque supérieure, à plus de cent kilomètres de celle-ci.",
                        'choices' => [
                            ['choice_text' => "Dans la fosse elle-même, à l’endroit où la plaque plonge", 'is_correct' => false],
                            ['choice_text' => "Sur la plaque supérieure, en retrait de la fosse", 'is_correct' => true],
                            ['choice_text' => "Sur la plaque qui plonge, loin de la fosse", 'is_correct' => false],
                            ['choice_text' => "Au centre de la plaque qui plonge", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un volcan islandais, sur une dorsale, émet des coulées de lave fluides ; un volcan de subduction peut exploser violemment. Quelle différence de magma l’explique ?",
                        'explanation' => "Un magma visqueux et chargé en gaz libère mal ses bulles, d’où des explosions ; un magma basaltique fluide s’écoule en coulées.",
                        'choices' => [
                            ['choice_text' => "Le magma de dorsale est plus visqueux et plus riche en gaz", 'is_correct' => false],
                            ['choice_text' => "Le magma de subduction est plus visqueux et riche en gaz", 'is_correct' => true],
                            ['choice_text' => "Le magma de subduction est dépourvu de gaz", 'is_correct' => false],
                            ['choice_text' => "Les deux magmas ont la même composition", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé compare correctement le volcanisme d’une dorsale et celui d’une subduction ?",
                        'explanation' => "Dans les deux cas, du magma atteint la surface, mais par des mécanismes opposés : écartement des plaques d’un côté, rapprochement de l’autre.",
                        'choices' => [
                            ['choice_text' => "Dorsale : divergence ; subduction : convergence", 'is_correct' => true],
                            ['choice_text' => "Dorsale : collision ; subduction : divergence", 'is_correct' => false],
                            ['choice_text' => "Dorsale : coulissage ; subduction : divergence", 'is_correct' => false],
                            ['choice_text' => "Dorsale : convergence ; subduction : coulissage", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle limite entre plaques est la moins associée au volcanisme ?",
                        'explanation' => "Le long d’une transformante, les plaques coulissent sans que le manteau fonde ni que du magma monte : les séismes y dominent.",
                        'choices' => [
                            ['choice_text' => "La limite transformante", 'is_correct' => true],
                            ['choice_text' => "La dorsale", 'is_correct' => false],
                            ['choice_text' => "La zone de subduction", 'is_correct' => false],
                            ['choice_text' => "Le rift continental", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "D’où provient le magma qui alimente les volcans ?",
                        'explanation' => "Le magma naît quand des roches du manteau ou de la croûte fondent en partie, sous l’effet d’une baisse de pression ou de l’ajout d’eau.",
                        'choices' => [
                            ['choice_text' => "Du noyau interne de la Terre, qui déborde jusqu’en surface", 'is_correct' => false],
                            ['choice_text' => "De l’eau des océans réchauffée par le Soleil", 'is_correct' => false],
                            ['choice_text' => "Des gaz de l’atmosphère comprimés en profondeur", 'is_correct' => false],
                            ['choice_text' => "De la fusion de roches du manteau ou de la croûte", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Les îles d’Hawaï forment un alignement, l’île la plus ancienne étant la plus éloignée du volcan actif. Que montre cet alignement ?",
                        'explanation' => "Un panache de magma, fixe en profondeur, perce la plaque en mouvement : chaque île naît au-dessus du point chaud puis s’en éloigne.",
                        'choices' => [
                            ['choice_text' => "Le point chaud se déplace plus vite que la plaque Pacifique", 'is_correct' => false],
                            ['choice_text' => "La plaque Pacifique glisse sur un point chaud fixe", 'is_correct' => true],
                            ['choice_text' => "Les îles se forment à une dorsale voisine", 'is_correct' => false],
                            ['choice_text' => "Une subduction fait naître chaque île", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les îles Éoliennes, au nord de la Sicile, forment un arc volcanique actif dont fait partie le Stromboli. Quel contexte tectonique l’explique ?",
                        'explanation' => "Au sud de l’Italie, la lithosphère africaine plonge sous l’Eurasie ; le magma produit alimente le Stromboli et les autres volcans éoliens.",
                        'choices' => [
                            ['choice_text' => "L’écartement d’une dorsale sous la Sicile", 'is_correct' => false],
                            ['choice_text' => "Un point chaud fixe", 'is_correct' => false],
                            ['choice_text' => "La subduction de la plaque africaine", 'is_correct' => true],
                            ['choice_text' => "Une collision sans subduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Avant une éruption, les séismes se multiplient sous un volcan. Que traduit cette agitation ?",
                        'explanation' => "En montant, le magma pousse et fissure les roches, ce qui provoque de petits séismes que les volcanologues surveillent.",
                        'choices' => [
                            ['choice_text' => "Le volcan se refroidit et s’éteint", 'is_correct' => false],
                            ['choice_text' => "Les plaques cessent de bouger", 'is_correct' => false],
                            ['choice_text' => "La mer en retrait annonce un tsunami", 'is_correct' => false],
                            ['choice_text' => "Du magma monte et fracture les roches", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Les zones de subduction comme le Japon cumulent séismes et volcans. Quelle est la raison commune ?",
                        'explanation' => "Le plongement provoque à la fois des ruptures dans les roches, donc des séismes, et la fusion du manteau, donc du magma ; les deux phénomènes se côtoient.",
                        'choices' => [
                            ['choice_text' => "Les volcans déclenchent chaque séisme", 'is_correct' => false],
                            ['choice_text' => "Les séismes fabriquent le magma par friction directe", 'is_correct' => false],
                            ['choice_text' => "Le plongement déforme les roches et produit du magma", 'is_correct' => true],
                            ['choice_text' => "Les deux sont causés par les marées", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire une carte des plaques",
                'description' => "S’entraîner à interpréter simplement une carte tectonique, la répartition des séismes, des volcans et les directions de déplacement des plaques.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Sur une carte mondiale, une longue bande de séismes suit une ligne au milieu de l’Atlantique. Quelle limite dessine-t-elle ?",
                        'explanation' => "Une bande de séismes peu profonds au milieu d’un océan marque une dorsale, où les plaques s’écartent.",
                        'choices' => [
                            ['choice_text' => "Une fosse de subduction", 'is_correct' => false],
                            ['choice_text' => "Une chaîne de collision", 'is_correct' => false],
                            ['choice_text' => "Le centre d’un continent stable", 'is_correct' => false],
                            ['choice_text' => "Une dorsale, limite divergente", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une carte montre deux plaques dont les flèches pointent l’une vers l’autre. Quel type de limite faut-il d’abord envisager ?",
                        'explanation' => "Des flèches face à face indiquent un rapprochement ; selon la nature des plaques, il donne une subduction ou une collision.",
                        'choices' => [
                            ['choice_text' => "Une limite convergente", 'is_correct' => true],
                            ['choice_text' => "Une limite divergente", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une limite inactive", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une carte montre deux plaques voisines : l’une avance vers l’est, l’autre vers l’ouest, et leur frontière est parallèle aux flèches. Quel mouvement relatif est représenté ?",
                        'explanation' => "Des mouvements de sens contraires, parallèles à la frontière, font coulisser les plaques : c’est une limite transformante.",
                        'choices' => [
                            ['choice_text' => "Une divergence perpendiculaire à la frontière", 'is_correct' => false],
                            ['choice_text' => "Une subduction", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale", 'is_correct' => false],
                            ['choice_text' => "Un coulissage transformant", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur une carte tectonique, une ligne portant des triangles tournés d’un seul côté indique…",
                        'explanation' => "Les triangles pointent vers la plaque supérieure, celle sous laquelle l’autre plonge : c’est la convention pour une subduction.",
                        'choices' => [
                            ['choice_text' => "une zone de subduction", 'is_correct' => true],
                            ['choice_text' => "une dorsale", 'is_correct' => false],
                            ['choice_text' => "une faille transformante", 'is_correct' => false],
                            ['choice_text' => "une frontière politique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, les séismes forment des lignes fines, tandis que l’intérieur des plaques reste presque vide. Que montre ce schéma ?",
                        'explanation' => "Les plaques sont rigides : la déformation et les séismes se concentrent là où elles se touchent, se heurtent ou s’écartent.",
                        'choices' => [
                            ['choice_text' => "Les plaques ne bougent pas", 'is_correct' => false],
                            ['choice_text' => "Les séismes touchent surtout le centre des continents", 'is_correct' => false],
                            ['choice_text' => "Les séismes sont d’origine météorologique", 'is_correct' => false],
                            ['choice_text' => "L’activité se concentre aux frontières de plaques", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur une carte de vitesses GPS, la flèche de la plaque A est deux fois plus longue que celle de la plaque B. Que signifie-t-elle ?",
                        'explanation' => "La longueur d’une flèche est proportionnelle à la vitesse : A parcourt deux fois plus de distance que B dans le même temps.",
                        'choices' => [
                            ['choice_text' => "La plaque A est deux fois plus grande", 'is_correct' => false],
                            ['choice_text' => "La plaque A est deux fois plus épaisse", 'is_correct' => false],
                            ['choice_text' => "La plaque A se déplace deux fois plus vite", 'is_correct' => true],
                            ['choice_text' => "La plaque A se déplace deux fois plus longtemps", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, la plaque africaine est représentée par une courte flèche d’environ 0,5 cm par an, dirigée vers le nord. Que traduit-elle ?",
                        'explanation' => "Une flèche courte dirigée vers l’Eurasie indique une convergence lente, d’environ 5 mm par an, mais mesurable au GPS.",
                        'choices' => [
                            ['choice_text' => "Un éloignement rapide de l’Eurasie", 'is_correct' => false],
                            ['choice_text' => "Un rapprochement très rapide avec l’Amérique", 'is_correct' => false],
                            ['choice_text' => "Un rapprochement lent avec l’Eurasie", 'is_correct' => true],
                            ['choice_text' => "Une plaque à l’arrêt", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, la plaque A, à gauche de la frontière, se déplace vers la gauche à 4 cm/an ; la plaque B, à droite, se déplace vers la droite à 4 cm/an. Quelle situation est illustrée ?",
                        'explanation' => "Chaque plaque s’éloigne de la frontière : les deux mouvements s’additionnent, soit 4 + 4 = 8 cm/an d’ouverture.",
                        'choices' => [
                            ['choice_text' => "Une limite divergente, avec une ouverture de 8 cm/an", 'is_correct' => true],
                            ['choice_text' => "Une limite transformante, sans ouverture", 'is_correct' => false],
                            ['choice_text' => "Une zone de subduction, avec un rapprochement de 8 cm/an", 'is_correct' => false],
                            ['choice_text' => "Une limite divergente, avec une ouverture de 4 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre deux continents qui se rapprochent, sans océan entre eux. Quelle évolution tectonique est possible à long terme ?",
                        'explanation' => "Deux croûtes continentales qui convergent se compriment et s’épaississent : elles donnent naissance à une chaîne de montagnes.",
                        'choices' => [
                            ['choice_text' => "L’apparition d’une dorsale entre eux", 'is_correct' => false],
                            ['choice_text' => "Une collision avec formation de reliefs", 'is_correct' => true],
                            ['choice_text' => "Une subduction rapide des deux continents", 'is_correct' => false],
                            ['choice_text' => "La fusion de leur lithosphère en magma", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi servent les flèches sur une carte des plaques ?",
                        'explanation' => "Les flèches montrent comment les plaques se déplacent, ce qui permet de reconnaître si une frontière est divergente, convergente ou transformante.",
                        'choices' => [
                            ['choice_text' => "À montrer la direction des vents dominants", 'is_correct' => false],
                            ['choice_text' => "À indiquer la direction et le sens de déplacement des plaques", 'is_correct' => true],
                            ['choice_text' => "À mesurer la profondeur des océans", 'is_correct' => false],
                            ['choice_text' => "À situer les anciens continents", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Vitesses de déplacement des plaques",
                'description' => "Lire et utiliser des vitesses simples de déplacement des plaques à l’échelle humaine et géologique.",
                'duration' => 17,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Une plaque se déplace de 5 cm par an. Quelle distance parcourt-elle en 20 ans si sa vitesse reste constante ?",
                        'explanation' => "On multiplie 5 cm/an par 20 ans : 5 × 20 = 100 cm, soit 1 mètre.",
                        'choices' => [
                            ['choice_text' => "20 mètres", 'is_correct' => false],
                            ['choice_text' => "10 mètres", 'is_correct' => false],
                            ['choice_text' => "5 mètres", 'is_correct' => false],
                            ['choice_text' => "1 mètre", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une plaque se déplace de 4 cm par an. Quelle distance parcourt-elle en 1 million d’années ?",
                        'explanation' => "4 cm × 1 000 000 = 4 000 000 cm, soit 40 km.",
                        'choices' => [
                            ['choice_text' => "4 km", 'is_correct' => false],
                            ['choice_text' => "40 km", 'is_correct' => true],
                            ['choice_text' => "400 km", 'is_correct' => false],
                            ['choice_text' => "4 000 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque avance de 3 cm par an. Quelle distance parcourt-elle en 10 millions d’années ?",
                        'explanation' => "3 cm × 10 000 000 = 30 000 000 cm, soit 300 km.",
                        'choices' => [
                            ['choice_text' => "30 000 km", 'is_correct' => false],
                            ['choice_text' => "3 000 km", 'is_correct' => false],
                            ['choice_text' => "300 km", 'is_correct' => true],
                            ['choice_text' => "30 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une station GPS mesure un déplacement de 20 cm en 4 ans. Quelle vitesse moyenne cela représente-t-il ?",
                        'explanation' => "La vitesse moyenne est 20 cm ÷ 4 ans = 5 cm/an.",
                        'choices' => [
                            ['choice_text' => "4 cm/an", 'is_correct' => false],
                            ['choice_text' => "5 cm/an", 'is_correct' => true],
                            ['choice_text' => "20 cm/an", 'is_correct' => false],
                            ['choice_text' => "80 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque A se déplace à 2 cm/an et une plaque B à 4 cm/an dans la même direction. Quelle est leur différence de vitesse ?",
                        'explanation' => "La différence est 4 − 2 = 2 cm/an : la plaque B prend 2 cm d’avance par an sur la plaque A.",
                        'choices' => [
                            ['choice_text' => "1 cm/an", 'is_correct' => false],
                            ['choice_text' => "2 cm/an", 'is_correct' => true],
                            ['choice_text' => "6 cm/an", 'is_correct' => false],
                            ['choice_text' => "8 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La plaque africaine se rapproche de l’Eurasie d’environ 5 mm par an. De quelle distance en 1 million d’années ?",
                        'explanation' => "5 mm × 1 000 000 = 5 000 000 mm, soit 5 km.",
                        'choices' => [
                            ['choice_text' => "50 m", 'is_correct' => false],
                            ['choice_text' => "500 m", 'is_correct' => false],
                            ['choice_text' => "5 km", 'is_correct' => true],
                            ['choice_text' => "50 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant pense qu’une plaque qui se déplace de 6 cm/an parcourra 600 km en 100 ans. Quelle correction faut-il faire ?",
                        'explanation' => "6 cm/an × 100 ans = 600 cm, soit seulement 6 mètres. À l’échelle humaine, le déplacement reste faible malgré son importance sur les temps géologiques.",
                        'choices' => [
                            ['choice_text' => "Elle parcourt 6 mètres en 100 ans", 'is_correct' => true],
                            ['choice_text' => "Elle parcourt 600 kilomètres", 'is_correct' => false],
                            ['choice_text' => "Elle parcourt 60 kilomètres", 'is_correct' => false],
                            ['choice_text' => "Elle parcourt 600 mètres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À 2 cm par an, combien d’années faut-il à une plaque pour parcourir 1 mètre ?",
                        'explanation' => "1 mètre vaut 100 cm ; 100 ÷ 2 = 50 ans.",
                        'choices' => [
                            ['choice_text' => "500 ans", 'is_correct' => false],
                            ['choice_text' => "200 ans", 'is_correct' => false],
                            ['choice_text' => "50 ans", 'is_correct' => true],
                            ['choice_text' => "20 ans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’apportent les stations GPS à l’étude des plaques ?",
                        'explanation' => "Des stations fixes enregistrent leur position pendant des années : on en déduit la vitesse et la direction de chaque plaque.",
                        'choices' => [
                            ['choice_text' => "Elles mesurent de très petits déplacements, au millimètre", 'is_correct' => true],
                            ['choice_text' => "Elles mesurent la température du noyau", 'is_correct' => false],
                            ['choice_text' => "Elles datent les roches des fonds océaniques avec précision", 'is_correct' => false],
                            ['choice_text' => "Elles mesurent la profondeur des fosses", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La vitesse des plaques est du même ordre que celle de la pousse des ongles. Quelle valeur cela représente-t-il ?",
                        'explanation' => "Un ongle pousse d’environ 0,1 mm par jour, soit 3 à 4 cm par an : c’est aussi la vitesse typique de beaucoup de plaques.",
                        'choices' => [
                            ['choice_text' => "Environ 3 à 4 mètres par an", 'is_correct' => false],
                            ['choice_text' => "Environ 3 à 4 mm par jour", 'is_correct' => false],
                            ['choice_text' => "Environ 30 à 40 cm par an", 'is_correct' => false],
                            ['choice_text' => "Environ 3 à 4 cm par an", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Études de cas tectoniques",
                'description' => "Résoudre de petits cas inspirés de situations réelles pour relier observations, mouvements des plaques et conséquences géologiques.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Au Chili, on observe de nombreux séismes, une fosse profonde au large et une chaîne de volcans sur le continent. Quel modèle tectonique explique cet ensemble ?",
                        'explanation' => "Fosse, séismes et volcans sur le continent sont les trois marques typiques d’une subduction océan-continent.",
                        'choices' => [
                            ['choice_text' => "Une divergence au milieu de l’océan", 'is_correct' => false],
                            ['choice_text' => "La subduction d’une plaque océanique sous un continent", 'is_correct' => true],
                            ['choice_text' => "Un coulissage horizontal sans rapprochement", 'is_correct' => false],
                            ['choice_text' => "Une collision entre deux continents sans océan", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe océanographique mesure l’âge de basaltes prélevés à différentes distances d’une dorsale : les roches les plus éloignées sont les plus anciennes. Que conclut-elle ?",
                        'explanation' => "Cette progression des âges montre que la roche naît à l’axe puis s’éloigne avec l’expansion du plancher.",
                        'choices' => [
                            ['choice_text' => "La dorsale détruit les roches les plus jeunes", 'is_correct' => false],
                            ['choice_text' => "Les basaltes vieillissent à cause de la profondeur", 'is_correct' => false],
                            ['choice_text' => "L’océan est immobile depuis sa formation", 'is_correct' => false],
                            ['choice_text' => "Le plancher naît à la dorsale puis s’en écarte", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un pays enregistre de fréquents séismes mais très peu de volcans, le long d’une grande faille où le sol coulisse. Quelle limite peut-on en déduire ?",
                        'explanation' => "Le coulissage accumule des contraintes qui se libèrent en séismes, mais ne fait pas remonter de magma comme une dorsale ou une subduction.",
                        'choices' => [
                            ['choice_text' => "Une limite transformante", 'is_correct' => true],
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Une zone de subduction", 'is_correct' => false],
                            ['choice_text' => "Une zone de collision sans séisme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le séisme d’Agadir, en 1960, de magnitude voisine de 6, a fait environ 12 000 victimes. Quel facteur explique en grande partie ce bilan ?",
                        'explanation' => "La secousse s’est produite à faible profondeur, juste sous une ville dont les bâtiments n’étaient pas parasismiques. À magnitude égale, un séisme superficiel et proche est bien plus destructeur.",
                        'choices' => [
                            ['choice_text' => "Un foyer peu profond et des constructions fragiles", 'is_correct' => true],
                            ['choice_text' => "Un tsunami géant déclenché par le séisme au large de la côte", 'is_correct' => false],
                            ['choice_text' => "Une éruption volcanique voisine", 'is_correct' => false],
                            ['choice_text' => "Une magnitude supérieure à 9", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux continents se rapprochent de quelques centimètres par an, et les roches situées entre eux sont fortement plissées. Quelle interprétation faut-il privilégier ?",
                        'explanation' => "Rapprochement et plissement vont ensemble : ce sont les signes d’une collision continentale.",
                        'choices' => [
                            ['choice_text' => "Une divergence qui ouvre un nouvel océan", 'is_correct' => false],
                            ['choice_text' => "Une faille transformante sans compression", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale en cours ou récente", 'is_correct' => true],
                            ['choice_text' => "Une région sans lien avec les plaques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre un océan qui se ferme peu à peu, jusqu’à ce que deux continents entrent en contact. Quelle séquence est cohérente ?",
                        'explanation' => "L’océan se referme parce que sa lithosphère plonge en subduction ; une fois l’océan disparu, les deux continents se heurtent et se plissent.",
                        'choices' => [
                            ['choice_text' => "Divergence → ouverture sans fin → collision immédiate", 'is_correct' => false],
                            ['choice_text' => "Subduction océanique → rapprochement → collision", 'is_correct' => true],
                            ['choice_text' => "Coulissage → formation d’un continent → subduction", 'is_correct' => false],
                            ['choice_text' => "Érosion → subduction → immobilité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une classe compare deux frontières. À la frontière A, les plaques s’écartent et des roches océaniques jeunes apparaissent. À la frontière B, une plaque océanique plonge sous une autre. Quel bilan est correct ?",
                        'explanation' => "À une frontière divergente, de la lithosphère est créée ; à une frontière convergente avec subduction, elle est renvoyée dans le manteau.",
                        'choices' => [
                            ['choice_text' => "A recycle de la lithosphère, B en crée", 'is_correct' => false],
                            ['choice_text' => "A et B sont des limites transformantes", 'is_correct' => false],
                            ['choice_text' => "A et B n’échangent pas de lithosphère", 'is_correct' => false],
                            ['choice_text' => "A crée de la lithosphère, B en recycle", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "L’Atlantique central s’élargit d’environ 2,5 cm par an. Quelle largeur gagne-t-il en 100 millions d’années ?",
                        'explanation' => "2,5 cm × 100 000 000 = 250 000 000 cm, soit 2 500 km.",
                        'choices' => [
                            ['choice_text' => "25 km", 'is_correct' => false],
                            ['choice_text' => "250 km", 'is_correct' => false],
                            ['choice_text' => "2 500 km", 'is_correct' => true],
                            ['choice_text' => "25 000 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques se rapprochent en sens opposés sur une même ligne : A à 3 cm/an et B à 2 cm/an. À quelle vitesse se rapprochent-elles l’une de l’autre ?",
                        'explanation' => "En sens opposés, les vitesses s’additionnent : 3 + 2 = 5 cm/an.",
                        'choices' => [
                            ['choice_text' => "6 cm/an", 'is_correct' => false],
                            ['choice_text' => "5 cm/an", 'is_correct' => true],
                            ['choice_text' => "2,5 cm/an", 'is_correct' => false],
                            ['choice_text' => "1 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le Haut Atlas s’est soulevé sous l’effet du rapprochement entre l’Afrique et l’Eurasie. Quel type de contrainte a plissé et soulevé ses roches ?",
                        'explanation' => "En se rapprochant, les plaques compriment la croûte : elle se raccourcit, s’épaissit et se soulève. Une extension produirait au contraire des fossés comme les rifts.",
                        'choices' => [
                            ['choice_text' => "Une extension", 'is_correct' => false],
                            ['choice_text' => "Un étirement vertical", 'is_correct' => false],
                            ['choice_text' => "Une compression", 'is_correct' => true],
                            ['choice_text' => "Une fusion de la croûte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un professeur résume : « Les plaques bougent lentement, mais leurs interactions transforment les océans et les continents. » Quelle idée retient-on ?",
                        'explanation' => "De faibles vitesses, cumulées sur des millions d’années, ouvrent des océans, élèvent des montagnes et déclenchent séismes et volcans.",
                        'choices' => [
                            ['choice_text' => "Les plaques agissent en quelques heures sur le relief", 'is_correct' => false],
                            ['choice_text' => "Les séismes remplacent les autres processus géologiques", 'is_correct' => false],
                            ['choice_text' => "La tectonique concerne le fond des océans, pas les continents", 'is_correct' => false],
                            ['choice_text' => "Des mouvements lents ont de grands effets avec le temps", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Synthèse : comprendre la tectonique des plaques",
                'description' => "Réviser les notions fondamentales en reliant Pangée, plaques, limites, expansion, subduction, séismes, volcanisme et reliefs.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle phrase résume le mieux la tectonique des plaques ?",
                        'explanation' => "La surface de la Terre est découpée en plaques rigides qui bougent lentement ; séismes, volcans et montagnes se concentrent surtout à leurs frontières.",
                        'choices' => [
                            ['choice_text' => "Les continents dérivent seuls sur des océans fixes", 'is_correct' => false],
                            ['choice_text' => "Des plaques rigides se déplacent et interagissent à leurs frontières", 'is_correct' => true],
                            ['choice_text' => "Les séismes sont indépendants des mouvements du sol", 'is_correct' => false],
                            ['choice_text' => "Les océans sont des zones immobiles entre les continents, sans lien avec les plaques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel enchaînement relie la Pangée aux positions actuelles des continents ?",
                        'explanation' => "Les continents étaient largement réunis dans la Pangée, puis celle-ci s’est fragmentée ; ses blocs ont ensuite continué de se déplacer avec leurs plaques.",
                        'choices' => [
                            ['choice_text' => "Positions actuelles → Pangée → immobilité", 'is_correct' => false],
                            ['choice_text' => "Pangée → disparition des continents → ouverture des océans", 'is_correct' => false],
                            ['choice_text' => "Pangée → arrêt de la tectonique → positions actuelles", 'is_correct' => false],
                            ['choice_text' => "Pangée → fragmentation → déplacements → positions actuelles", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une élève observe des roches océaniques jeunes près d’une dorsale et de plus en plus anciennes en s’en éloignant. Quel processus doit-elle associer à ce profil ?",
                        'explanation' => "Ce profil d’âges est la signature de l’expansion : la lithosphère se forme à la dorsale puis s’en éloigne.",
                        'choices' => [
                            ['choice_text' => "La collision continentale", 'is_correct' => false],
                            ['choice_text' => "L’expansion des fonds océaniques", 'is_correct' => true],
                            ['choice_text' => "Le coulissage transformant", 'is_correct' => false],
                            ['choice_text' => "L’érosion d’une chaîne de montagnes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel scénario correspond à une limite convergente océan-continent ?",
                        'explanation' => "La plaque océanique, plus dense, s’enfonce sous le continent : on y trouve une fosse, des séismes et du volcanisme.",
                        'choices' => [
                            ['choice_text' => "Deux plaques s’écartent au milieu d’un continent", 'is_correct' => false],
                            ['choice_text' => "Deux plaques coulissent sans se rapprocher", 'is_correct' => false],
                            ['choice_text' => "Une plaque océanique plonge sous une plaque continentale", 'is_correct' => true],
                            ['choice_text' => "Deux continents s’éloignent le long d’une dorsale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel scénario correspond à une collision continentale ?",
                        'explanation' => "Quand deux continents se rencontrent, aucun ne plonge facilement : la croûte se comprime, se plisse et forme des montagnes.",
                        'choices' => [
                            ['choice_text' => "Deux plaques océaniques s’écartent à une dorsale", 'is_correct' => false],
                            ['choice_text' => "Deux blocs coulissent sans compression", 'is_correct' => false],
                            ['choice_text' => "Deux continents convergent, la croûte s’épaissit", 'is_correct' => true],
                            ['choice_text' => "Une plaque océanique s’éloigne d’une fosse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une classe associe quatre observations à quatre processus. Quelle association est correcte ?",
                        'explanation' => "Une dorsale s’ouvre, une fosse marque une subduction, la faille de San Andreas fait coulisser deux plaques et l’Himalaya naît d’une collision.",
                        'choices' => [
                            ['choice_text' => "Dorsale : collision ; fosse : divergence ; San Andreas : subduction ; Himalaya : coulissage", 'is_correct' => false],
                            ['choice_text' => "Dorsale : divergence ; fosse : subduction ; San Andreas : coulissage ; Himalaya : collision", 'is_correct' => true],
                            ['choice_text' => "Dorsale : subduction ; fosse : coulissage ; San Andreas : collision ; Himalaya : divergence", 'is_correct' => false],
                            ['choice_text' => "Dorsale : coulissage ; fosse : collision ; San Andreas : divergence ; Himalaya : subduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé explique le mieux la fréquence des séismes aux frontières de plaques ?",
                        'explanation' => "Aux frontières, les plaques se frottent, se heurtent ou s’écartent ; les roches accumulent des contraintes qui se libèrent en séismes.",
                        'choices' => [
                            ['choice_text' => "Les frontières sont les endroits les plus chauds de l’atmosphère", 'is_correct' => false],
                            ['choice_text' => "La lumière solaire y fracture les roches", 'is_correct' => false],
                            ['choice_text' => "Les continents y perdent une partie de leur masse", 'is_correct' => false],
                            ['choice_text' => "Les interactions entre plaques y concentrent des contraintes", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une plaque se déplace à 2,5 cm par an. Quelle distance parcourt-elle en 40 millions d’années ?",
                        'explanation' => "2,5 cm × 40 000 000 = 100 000 000 cm, soit 1 000 km.",
                        'choices' => [
                            ['choice_text' => "100 km", 'is_correct' => false],
                            ['choice_text' => "250 km", 'is_correct' => false],
                            ['choice_text' => "1 000 km", 'is_correct' => true],
                            ['choice_text' => "10 000 km", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé corrige la confusion entre plaque et continent ?",
                        'explanation' => "La plaque africaine, par exemple, porte l’Afrique mais aussi une partie de l’Atlantique et de l’océan Indien.",
                        'choices' => [
                            ['choice_text' => "Chaque plaque est un continent entier avec ses côtes", 'is_correct' => false],
                            ['choice_text' => "Chaque continent forme une plaque distincte", 'is_correct' => false],
                            ['choice_text' => "Les océans flottent librement sur les plaques", 'is_correct' => false],
                            ['choice_text' => "Une plaque peut porter un continent et un océan", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel choix décrit le rôle d’une dorsale dans le cycle de la lithosphère océanique ?",
                        'explanation' => "La lithosphère naît à la dorsale, s’éloigne, puis plonge dans une zone de subduction : ce cycle dure plusieurs dizaines de millions d’années.",
                        'choices' => [
                            ['choice_text' => "Elle crée de la lithosphère, recyclée par subduction", 'is_correct' => true],
                            ['choice_text' => "Elle détruit la lithosphère avant qu’elle ne se forme", 'is_correct' => false],
                            ['choice_text' => "Elle empêche les plaques de se déplacer", 'is_correct' => false],
                            ['choice_text' => "Elle transforme les continents en noyau interne", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé relie correctement volcanisme et limites de plaques ?",
                        'explanation' => "Beaucoup de volcans sont liés aux dorsales et aux subductions, mais un point chaud peut percer une plaque loin de toute frontière, comme à Hawaï.",
                        'choices' => [
                            ['choice_text' => "Il existe aux dorsales, aux subductions et dans les plaques", 'is_correct' => true],
                            ['choice_text' => "Il se limite strictement aux failles transformantes entre deux plaques", 'is_correct' => false],
                            ['choice_text' => "Il est indépendant des mouvements de plaques", 'is_correct' => false],
                            ['choice_text' => "Il dépend de la rotation de la Lune", 'is_correct' => false],
                        ],
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