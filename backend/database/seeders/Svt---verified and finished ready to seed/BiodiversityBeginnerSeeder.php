<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BiodiversityBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'biodiversity')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biodiversité',
                'description' => 'Découvrir les trois grands niveaux de biodiversité et les notions essentielles.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Le mot biodiversité désigne :',
                        'choices' => [
                            ['choice_text' => 'le nombre d’animaux sauvages présents dans un pays', 'is_correct' => false],
                            ['choice_text' => 'la variété du vivant : gènes, espèces et milieux de vie', 'is_correct' => true],
                            ['choice_text' => 'la variété des climats et des paysages que l’on rencontre sur Terre', 'is_correct' => false],
                            ['choice_text' => 'la liste des espèces déjà menacées de disparition', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme couvre trois niveaux, les gènes, les espèces et les écosystèmes, et pas seulement les animaux sauvages ou les espèces en danger.',
                    ],
                    [
                        'question' => 'Dans une même espèce de chats, certains ont le pelage roux, d’autres noir ou tigré. Cette variété illustre :',
                        'choices' => [
                            ['choice_text' => 'la diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'la diversité des espèces', 'is_correct' => false],
                            ['choice_text' => 'la diversité des écosystèmes', 'is_correct' => false],
                            ['choice_text' => 'la diversité des habitats', 'is_correct' => false],
                        ],
                        'explanation' => 'Les individus d’une même espèce ne portent pas les mêmes gènes, et cela se voit parfois sur leur aspect.',
                    ],
                    [
                        'question' => 'Le lac Sidi Bourhaba abrite des poissons, des oiseaux, des plantes aquatiques et des insectes. Faire la liste de ces espèces revient à mesurer :',
                        'choices' => [
                            ['choice_text' => 'la diversité génétique de chaque espèce', 'is_correct' => false],
                            ['choice_text' => 'la diversité des écosystèmes de la région', 'is_correct' => false],
                            ['choice_text' => 'l’abondance des individus de chaque espèce', 'is_correct' => false],
                            ['choice_text' => 'la diversité des espèces du lac', 'is_correct' => true],
                        ],
                        'explanation' => 'On compte ici des espèces différentes : c’est le niveau des espèces, et non celui des gènes ou des milieux.',
                    ],
                    [
                        'question' => 'Dans son carnet, Karim note une forêt de cèdres, une dune côtière et un oued. Ces trois milieux sont des exemples de :',
                        'choices' => [
                            ['choice_text' => 'populations différentes', 'is_correct' => false],
                            ['choice_text' => 'écosystèmes différents', 'is_correct' => true],
                            ['choice_text' => 'familles d’espèces', 'is_correct' => false],
                            ['choice_text' => 'chaînes alimentaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème réunit des êtres vivants et le milieu physique où ils vivent ; chacun de ces trois milieux en est un.',
                    ],
                    [
                        'question' => 'Deux élevages de moutons ont le même effectif. Dans le premier, les bêtes se ressemblent génétiquement ; dans le second, elles portent des gènes très variés. Lequel a la plus forte diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'le premier, car ses bêtes se ressemblent davantage entre elles', 'is_correct' => false],
                            ['choice_text' => 'les deux, car ils comptent le même nombre de bêtes', 'is_correct' => false],
                            ['choice_text' => 'le second, car ses bêtes portent des gènes plus variés', 'is_correct' => true],
                            ['choice_text' => 'ni l’un ni l’autre, car il n’y a qu’une espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de bêtes ne change rien : c’est la variété des gènes portés qui mesure la diversité génétique.',
                    ],
                    [
                        'question' => 'Quel exemple illustre la diversité des écosystèmes ?',
                        'choices' => [
                            ['choice_text' => 'un parc national qui réunit montagne, forêt, lac et littoral', 'is_correct' => true],
                            ['choice_text' => 'une forêt du Moyen Atlas où poussent vingt espèces d’arbres', 'is_correct' => false],
                            ['choice_text' => 'un troupeau de chèvres dont les robes sont de couleurs variées', 'is_correct' => false],
                            ['choice_text' => 'un champ de blé semé avec trois variétés différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici, ce sont des milieux de nature différente qui se côtoient. Les autres exemples relèvent des espèces ou des gènes.',
                    ],
                    [
                        'question' => 'Youssef affirme que la biodiversité, c’est juste le nombre d’espèces. Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Il a raison : gènes et milieux de vie sont des notions à part', 'is_correct' => false],
                            ['choice_text' => 'Il oublie la variété des gènes et celle des milieux de vie', 'is_correct' => true],
                            ['choice_text' => 'Il se trompe : on compte surtout les espèces menacées', 'is_correct' => false],
                            ['choice_text' => 'Il se trompe : la biodiversité mesure le nombre d’individus', 'is_correct' => false],
                        ],
                        'explanation' => 'Compter les espèces ne couvre qu’un des trois niveaux ; il faut y ajouter la variété des gènes et celle des écosystèmes.',
                    ],
                    [
                        'question' => 'Dans un village de l’Atlas, des familles cultivent depuis des générations quatre variétés locales de blé. Cette pratique entretient :',
                        'choices' => [
                            ['choice_text' => 'la diversité des espèces sauvages', 'is_correct' => false],
                            ['choice_text' => 'la diversité des milieux aquatiques', 'is_correct' => false],
                            ['choice_text' => 'la diversité des climats locaux', 'is_correct' => false],
                            ['choice_text' => 'la diversité génétique des cultures', 'is_correct' => true],
                        ],
                        'explanation' => 'Ces variétés appartiennent à la même espèce mais portent des gènes différents, ce qui compte comme diversité génétique.',
                    ],
                    [
                        'question' => 'Un inventaire dans la forêt de la Mamora recense 14 espèces d’oiseaux, 6 de mammifères et 3 de reptiles. Combien d’espèces ont été recensées au total ?',
                        'choices' => [
                            ['choice_text' => '23 espèces', 'is_correct' => true],
                            ['choice_text' => '20 espèces', 'is_correct' => false],
                            ['choice_text' => '17 espèces', 'is_correct' => false],
                            ['choice_text' => '252 espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne les trois groupes : 14 + 6 + 3 = 23.',
                    ],
                    [
                        'question' => 'Parmi ces propositions, laquelle ne fait pas partie de la biodiversité ?',
                        'choices' => [
                            ['choice_text' => 'la variété des gènes au sein d’une espèce', 'is_correct' => false],
                            ['choice_text' => 'la variété des espèces d’un même milieu', 'is_correct' => false],
                            ['choice_text' => 'la variété des roches du sous-sol d’une région', 'is_correct' => true],
                            ['choice_text' => 'la variété des écosystèmes d’un pays', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches relèvent de la géologie ; la biodiversité concerne le vivant, à trois niveaux : gènes, espèces, écosystèmes.',
                    ],
                ],
            ],
            [
                'title' => 'Diversité génétique',
                'description' => 'Comprendre la variation génétique, son origine et son intérêt biologique.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Deux frères ont les mêmes parents, mais ils ne se ressemblent pas en tout. Qu’est-ce qui explique en grande partie cette différence ?',
                        'choices' => [
                            ['choice_text' => 'le climat de la région, qui modifie les gènes de chaque enfant', 'is_correct' => false],
                            ['choice_text' => 'la copie des gènes de l’un des deux parents', 'is_correct' => false],
                            ['choice_text' => 'le mélange des gènes des deux parents à la reproduction', 'is_correct' => true],
                            ['choice_text' => 'l’alimentation reçue pendant l’enfance', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque enfant reçoit une combinaison différente de gènes de ses deux parents, d’où des individus qui ne sont pas identiques.',
                    ],
                    [
                        'question' => 'Dans un jardin, une fleur apparaît blanche alors que les autres sont rouges, et ses graines donnent elles aussi des fleurs blanches. Quelle est l’explication la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'un manque de soleil, sans rapport avec les gènes', 'is_correct' => false],
                            ['choice_text' => 'un changement de saison qui décolore les pétales', 'is_correct' => false],
                            ['choice_text' => 'une maladie de la tige qui blanchit les fleurs', 'is_correct' => false],
                            ['choice_text' => 'une mutation de l’ADN, transmise aux descendants', 'is_correct' => true],
                        ],
                        'explanation' => 'Comme la couleur passe aux graines, le changement touche l’ADN : c’est une mutation, source d’une nouvelle variante.',
                    ],
                    [
                        'question' => 'Il ne reste que 12 tortues d’une espèce rare sur une petite île. Qu’arrive-t-il à leur diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'elle s’appauvrit, car peu de variantes de gènes subsistent', 'is_correct' => true],
                            ['choice_text' => 'elle augmente, car il y a moins de concurrence', 'is_correct' => false],
                            ['choice_text' => 'elle reste stable, car l’espèce est encore présente', 'is_correct' => false],
                            ['choice_text' => 'elle augmente, car les tortues se reproduisent entre elles', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec 12 individus, de nombreuses variantes de gènes ont disparu avec les tortues mortes : la population est plus pauvre génétiquement.',
                    ],
                    [
                        'question' => 'Dans un champ, les oiseaux repèrent plus vite les criquets verts que les bruns sur la terre brune. Au fil des années, que va-t-il se passer ?',
                        'choices' => [
                            ['choice_text' => 'les criquets verts deviendront plus nombreux', 'is_correct' => false],
                            ['choice_text' => 'les criquets changeront de couleur dès qu’ils ont peur', 'is_correct' => false],
                            ['choice_text' => 'les criquets bruns deviendront plus nombreux', 'is_correct' => true],
                            ['choice_text' => 'les deux couleurs disparaîtront au même rythme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bruns survivent mieux, se reproduisent davantage et transmettent leur couleur : c’est un effet de la sélection naturelle.',
                    ],
                    [
                        'question' => 'Deux troupeaux de moutons vivaient isolés dans deux vallées. Des bergers échangent désormais des béliers entre les deux vallées. Quel effet attend-on sur la diversité génétique des troupeaux ?',
                        'choices' => [
                            ['choice_text' => 'elle baisse, car on mélange des gènes différents d’une vallée à l’autre', 'is_correct' => false],
                            ['choice_text' => 'elle augmente, car de nouveaux gènes entrent dans chaque troupeau', 'is_correct' => true],
                            ['choice_text' => 'elle reste la même, car les moutons sont de la même espèce', 'is_correct' => false],
                            ['choice_text' => 'elle disparaît, car les béliers se ressemblent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les béliers venus d’ailleurs apportent des variantes de gènes absentes de l’autre vallée, ce qui enrichit les deux troupeaux.',
                    ],
                    [
                        'question' => 'Dans un élevage, des animaux très apparentés se reproduisent entre eux génération après génération. Qu’observe-t-on souvent ?',
                        'choices' => [
                            ['choice_text' => 'des petits plus variés génétiquement', 'is_correct' => false],
                            ['choice_text' => 'des petits plus nombreux et plus robustes', 'is_correct' => false],
                            ['choice_text' => 'des petits qui changent d’espèce en quelques générations', 'is_correct' => false],
                            ['choice_text' => 'des petits plus fragiles, souvent moins résistants aux maladies', 'is_correct' => true],
                        ],
                        'explanation' => 'Entre proches parents, les gènes se ressemblent trop, et des défauts habituellement cachés apparaissent plus souvent.',
                    ],
                    [
                        'question' => 'Un jardin botanique garde au froid des graines de 30 variétés anciennes d’orge. À quoi sert surtout cette réserve ?',
                        'choices' => [
                            ['choice_text' => 'à créer de nouvelles espèces sauvages en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'à remplacer les champs cultivés par des cultures conservées au froid', 'is_correct' => false],
                            ['choice_text' => 'à garder des variantes de gènes qui pourront servir un jour', 'is_correct' => true],
                            ['choice_text' => 'à supprimer les variétés les moins rentables', 'is_correct' => false],
                        ],
                        'explanation' => 'Une graine stockée garde ses gènes ; on pourra y chercher plus tard un caractère utile, comme la résistance à une maladie.',
                    ],
                    [
                        'question' => 'Dans un parc, 40 % des papillons portaient une variante de couleur il y a dix ans, contre 65 % aujourd’hui. Comment cette variante a-t-elle évolué ?',
                        'choices' => [
                            ['choice_text' => 'elle est plus rare : elle a perdu 25 points', 'is_correct' => false],
                            ['choice_text' => 'elle est plus répandue : elle a gagné 25 points', 'is_correct' => true],
                            ['choice_text' => 'elle est plus répandue : elle a gagné 65 points', 'is_correct' => false],
                            ['choice_text' => 'elle est plus rare : elle a perdu 40 points', 'is_correct' => false],
                        ],
                        'explanation' => '65 − 40 = 25 : la variante est passée de 40 % à 65 %, elle a donc gagné 25 points de pourcentage.',
                    ],
                    [
                        'question' => 'Un horticulteur plante 500 bananiers issus de boutures d’un même plant. Si une maladie atteint ce plant, que risque la plantation ?',
                        'choices' => [
                            ['choice_text' => 'd’être touchée en bloc, car les pieds portent les mêmes gènes', 'is_correct' => true],
                            ['choice_text' => 'de ne presque rien subir, car les pieds sont très nombreux dans le champ', 'is_correct' => false],
                            ['choice_text' => 'd’être épargnée, car les clones résistent mieux', 'is_correct' => false],
                            ['choice_text' => 'de perdre surtout les pieds situés au bord du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Des plants issus d’un même pied ont les mêmes points faibles : une maladie qui en atteint un peut se propager à tous les autres.',
                    ],
                    [
                        'question' => 'Chez l’être humain, les groupes sanguins A, B, AB et O illustrent :',
                        'choices' => [
                            ['choice_text' => 'la diversité de plusieurs espèces voisines', 'is_correct' => false],
                            ['choice_text' => 'la diversité de plusieurs écosystèmes', 'is_correct' => false],
                            ['choice_text' => 'la diversité des habitats humains', 'is_correct' => false],
                            ['choice_text' => 'la diversité génétique au sein d’une espèce', 'is_correct' => true],
                        ],
                        'explanation' => 'Les humains forment une seule espèce, mais portent des variantes de gènes différentes, par exemple pour le groupe sanguin.',
                    ],
                ],
            ],
            [
                'title' => 'Diversité des espèces et classification',
                'description' => 'Espèces, richesse spécifique, ressemblance et classification du vivant.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'La richesse spécifique d’un milieu, c’est :',
                        'choices' => [
                            ['choice_text' => 'le nombre total d’individus qui y vivent', 'is_correct' => false],
                            ['choice_text' => 'le poids des êtres vivants qui y vivent', 'is_correct' => false],
                            ['choice_text' => 'le nombre de gènes présents chez une espèce', 'is_correct' => false],
                            ['choice_text' => 'le nombre d’espèces différentes qui y vivent', 'is_correct' => true],
                        ],
                        'explanation' => 'On compte les espèces et non les individus : la richesse spécifique ne dépend pas du nombre de bêtes de chacune.',
                    ],
                    [
                        'question' => 'Deux prairies ont chacune 100 plantes. La première les regroupe en 4 espèces, la seconde en 15 espèces. Laquelle a la plus grande richesse spécifique ?',
                        'choices' => [
                            ['choice_text' => 'la seconde, car elle compte 15 espèces contre 4', 'is_correct' => true],
                            ['choice_text' => 'la première, car elle regroupe ses plantes en 4 espèces', 'is_correct' => false],
                            ['choice_text' => 'les deux, car elles comptent chacune 100 plantes', 'is_correct' => false],
                            ['choice_text' => 'on ne peut pas savoir sans connaître leur surface', 'is_correct' => false],
                        ],
                        'explanation' => 'À nombre de plantes égal, 15 espèces l’emportent sur 4 : la richesse spécifique se mesure en espèces.',
                    ],
                    [
                        'question' => 'Samira lit sur une fiche qu’un arbre s’appelle Argania spinosa. À quoi sert surtout ce nom scientifique ?',
                        'choices' => [
                            ['choice_text' => 'à indiquer l’âge moyen d’un arbre de cette espèce', 'is_correct' => false],
                            ['choice_text' => 'à préciser la région du monde où cet arbre pousse naturellement', 'is_correct' => false],
                            ['choice_text' => 'à désigner l’espèce de la même façon dans toutes les langues', 'is_correct' => true],
                            ['choice_text' => 'à classer les arbres selon leur taille adulte', 'is_correct' => false],
                        ],
                        'explanation' => 'Argania spinosa est l’arganier ; ce nom latin est compris des scientifiques du monde entier, quelle que soit leur langue.',
                    ],
                    [
                        'question' => 'Le lion, le chat et le loup sont classés parmi les mammifères. Quelle caractéristique commune justifie ce classement ?',
                        'choices' => [
                            ['choice_text' => 'ils pondent des œufs et portent des plumes', 'is_correct' => false],
                            ['choice_text' => 'ils vivent dans l’eau et respirent par des branchies', 'is_correct' => false],
                            ['choice_text' => 'ils ont des poils et allaitent leurs petits', 'is_correct' => true],
                            ['choice_text' => 'ils muent leur peau et portent des écailles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les poils et l’allaitement des petits caractérisent les mammifères, ce qui permet de les regrouper.',
                    ],
                    [
                        'question' => 'Le chat domestique et le lynx partagent de nombreux caractères : même forme de crâne, mêmes griffes rétractiles. Que suggère cette ressemblance ?',
                        'choices' => [
                            ['choice_text' => 'qu’ils appartiennent à la même espèce', 'is_correct' => false],
                            ['choice_text' => 'qu’ils ont un ancêtre commun assez récent', 'is_correct' => true],
                            ['choice_text' => 'qu’ils vivent dans le même pays', 'is_correct' => false],
                            ['choice_text' => 'qu’ils se reproduisent entre eux sans difficulté', 'is_correct' => false],
                        ],
                        'explanation' => 'Des caractères partagés viennent souvent d’un ancêtre commun ; plus ils sont nombreux, plus les espèces sont proches parentes.',
                    ],
                    [
                        'question' => 'L’arganier est surtout présent à l’état naturel dans le sud-ouest du Maroc et n’existe presque nulle part ailleurs. Comment qualifie-t-on cette espèce ?',
                        'choices' => [
                            ['choice_text' => 'endémique, car son aire naturelle est restreinte', 'is_correct' => true],
                            ['choice_text' => 'cosmopolite, car on la trouve sur plusieurs continents', 'is_correct' => false],
                            ['choice_text' => 'exotique, car elle vient d’un autre continent', 'is_correct' => false],
                            ['choice_text' => 'invasive, car elle envahit les forêts voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce endémique vit naturellement dans une région limitée ; l’arganier en est un exemple célèbre au Maroc.',
                    ],
                    [
                        'question' => 'Dans une réserve, Hamza inventorie 5 espèces représentées par 100, 20, 10, 8 et 2 individus. Quel est le résultat de son inventaire ?',
                        'choices' => [
                            ['choice_text' => '140 espèces et 5 individus', 'is_correct' => false],
                            ['choice_text' => '5 espèces et 100 individus', 'is_correct' => false],
                            ['choice_text' => '5 espèces et 38 individus', 'is_correct' => false],
                            ['choice_text' => '5 espèces et 140 individus', 'is_correct' => true],
                        ],
                        'explanation' => 'Il y a 5 espèces ; le total des individus est 100 + 20 + 10 + 8 + 2 = 140.',
                    ],
                    [
                        'question' => 'Dans une prairie, Hind trouve 3 pieds d’une orchidée, alors que le trèfle en compte 400. Que peut-on dire de l’orchidée dans cette prairie ?',
                        'choices' => [
                            ['choice_text' => 'elle est éteinte dans le monde entier', 'is_correct' => false],
                            ['choice_text' => 'elle y est abondante, car c’est la plus visible', 'is_correct' => false],
                            ['choice_text' => 'elle y est rare, mais elle peut être fréquente ailleurs', 'is_correct' => true],
                            ['choice_text' => 'elle n’est pas une espèce, car elle compte trop peu de pieds', 'is_correct' => false],
                        ],
                        'explanation' => 'Rare dans une prairie ne veut pas dire rare partout : l’espèce peut être abondante dans d’autres milieux.',
                    ],
                    [
                        'question' => 'Pour inventorier les oiseaux d’une zone humide comme Merja Zerga, que doit-on faire pour obtenir un résultat fiable ?',
                        'choices' => [
                            ['choice_text' => 'compter une fois, depuis le parking où l’accès est facile', 'is_correct' => false],
                            ['choice_text' => 'compter à plusieurs dates et à plusieurs endroits du site', 'is_correct' => true],
                            ['choice_text' => 'se limiter aux oiseaux faciles à repérer', 'is_correct' => false],
                            ['choice_text' => 'compter le matin où la météo est la plus claire', 'is_correct' => false],
                        ],
                        'explanation' => 'Répéter les relevés et varier les lieux évite de passer à côté d’espèces discrètes ou présentes à certaines saisons.',
                    ],
                    [
                        'question' => 'Anas pose 10 carrés de 1 m² sur un pré et repère le coquelicot dans 8 d’entre eux. Dans quelle proportion des carrés le coquelicot est-il présent ?',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => '8 carrés sur 10, soit 8 ÷ 10 × 100 = 80 %.',
                    ],
                ],
            ],
            [
                'title' => 'Biodiversité des écosystèmes',
                'description' => 'Diversité des habitats, communautés, connectivité et fonctionnement des écosystèmes.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Lors d’une sortie, Rim visite une forêt de cèdres près d’Ifrane, une lagune côtière et une oasis. Ces trois lieux sont des exemples de :',
                        'choices' => [
                            ['choice_text' => 'populations différentes d’une même espèce d’arbres ou d’animaux', 'is_correct' => false],
                            ['choice_text' => 'niveaux différents d’une chaîne alimentaire', 'is_correct' => false],
                            ['choice_text' => 'variantes différentes d’un même gène', 'is_correct' => false],
                            ['choice_text' => 'milieux de vie différents, donc d’écosystèmes différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque lieu associe un milieu physique et des êtres vivants qui lui sont propres : ce sont trois écosystèmes distincts.',
                    ],
                    [
                        'question' => 'Un passage planté d’arbres enjambe l’autoroute et relie deux massifs forestiers qu’elle séparait. À quoi sert-il pour les animaux ?',
                        'choices' => [
                            ['choice_text' => 'à rester dans leur massif d’origine sans en sortir', 'is_correct' => false],
                            ['choice_text' => 'à passer d’un massif à l’autre sans traverser la route', 'is_correct' => true],
                            ['choice_text' => 'à trouver leur nourriture directement sur la route', 'is_correct' => false],
                            ['choice_text' => 'à ralentir la croissance des arbres de chaque massif', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce passage joue le rôle de corridor écologique : il relie des habitats que la route avait coupés.',
                    ],
                    [
                        'question' => 'Un grand bois est découpé en cinq petits îlots par des champs et des routes. Quelle conséquence est probable pour certains animaux ?',
                        'choices' => [
                            ['choice_text' => 'des groupes isolés les uns des autres, avec moins de partenaires', 'is_correct' => true],
                            ['choice_text' => 'des déplacements facilités entre les différents îlots du bois découpé', 'is_correct' => false],
                            ['choice_text' => 'un territoire plus vaste pour chaque groupe', 'is_correct' => false],
                            ['choice_text' => 'une meilleure qualité des milieux forestiers restants', 'is_correct' => false],
                        ],
                        'explanation' => 'Découpé en îlots, le bois devient plus difficile à traverser : les groupes se séparent et se rencontrent moins.',
                    ],
                    [
                        'question' => 'Une prairie compte 40 espèces de plantes, un champ de blé une seule. Après deux étés très secs, lequel a le plus de chances de rester vert ?',
                        'choices' => [
                            ['choice_text' => 'le champ de blé, car il est mieux soigné', 'is_correct' => false],
                            ['choice_text' => 'les deux de la même façon, car il pleut autant', 'is_correct' => false],
                            ['choice_text' => 'le champ de blé, car une espèce unique a moins de besoins à satisfaire', 'is_correct' => false],
                            ['choice_text' => 'la prairie, car certaines de ses plantes supportent le sec', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec 40 espèces, certaines résisteront probablement à la sécheresse ; le champ, lui, dépend d’une seule plante.',
                    ],
                    [
                        'question' => 'Que fait une zone humide lors de fortes pluies ?',
                        'choices' => [
                            ['choice_text' => 'elle accélère l’écoulement de l’eau vers les villes situées en aval', 'is_correct' => false],
                            ['choice_text' => 'elle empêche l’eau de pénétrer dans le sol', 'is_correct' => false],
                            ['choice_text' => 'elle absorbe une partie de l’eau et limite les crues en aval', 'is_correct' => true],
                            ['choice_text' => 'elle transforme l’eau de pluie en eau salée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sol et la végétation d’une zone humide retiennent l’eau comme une éponge, ce qui adoucit les crues.',
                    ],
                    [
                        'question' => 'Dans une forêt, Omar relève des troncs morts, des mares, des clairières et des sous-bois ombragés. Que permet cette variété de petits milieux ?',
                        'choices' => [
                            ['choice_text' => 'de supprimer la concurrence entre les espèces', 'is_correct' => false],
                            ['choice_text' => 'd’accueillir des espèces qui n’ont pas les mêmes besoins', 'is_correct' => true],
                            ['choice_text' => 'de réduire le nombre d’espèces par manque de place', 'is_correct' => false],
                            ['choice_text' => 'de remplacer les espèces locales par des plantes cultivées', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque petit milieu convient à des espèces différentes : plus ils sont variés, plus il y a d’espèces qui peuvent cohabiter.',
                    ],
                    [
                        'question' => 'Après un incendie, une forêt de chênes-lièges retrouve peu à peu ses arbustes, puis ses jeunes arbres. Comment appelle-t-on cette capacité à se rétablir ?',
                        'choices' => [
                            ['choice_text' => 'la fragmentation de la forêt', 'is_correct' => false],
                            ['choice_text' => 'l’endémisme de la forêt', 'is_correct' => false],
                            ['choice_text' => 'l’invasion de la forêt', 'is_correct' => false],
                            ['choice_text' => 'la résilience de l’écosystème', 'is_correct' => true],
                        ],
                        'explanation' => 'La résilience désigne la capacité d’un écosystème à retrouver sa structure et ses fonctions après une perturbation.',
                    ],
                    [
                        'question' => 'Dans un étang, quel élément fait partie des facteurs abiotiques, c’est-à-dire non vivants ?',
                        'choices' => [
                            ['choice_text' => 'la température de l’eau', 'is_correct' => true],
                            ['choice_text' => 'la population de grenouilles', 'is_correct' => false],
                            ['choice_text' => 'les algues en suspension', 'is_correct' => false],
                            ['choice_text' => 'les larves de libellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Température, lumière et sels minéraux sont des facteurs abiotiques ; grenouilles, algues et larves sont des êtres vivants.',
                    ],
                    [
                        'question' => 'Une réserve de 800 hectares comprend 320 hectares de forêt, 240 de prairie, et le reste en zone humide. Quelle part de la réserve la zone humide occupe-t-elle ?',
                        'choices' => [
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '24 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Forêt et prairie font 320 + 240 = 560 ha ; il reste 240 ha de zone humide, soit 240 ÷ 800 = 30 %.',
                    ],
                    [
                        'question' => 'Les gestionnaires d’un parc hésitent entre protéger une seule vallée très riche ou plusieurs milieux différents. Que gagne-t-on à choisir des milieux variés ?',
                        'choices' => [
                            ['choice_text' => 'on protège une communauté unique, mais mieux surveillée', 'is_correct' => false],
                            ['choice_text' => 'on couvre les besoins d’espèces très différentes', 'is_correct' => true],
                            ['choice_text' => 'on protège des espèces aux habitudes semblables, mais plus nombreuses', 'is_correct' => false],
                            ['choice_text' => 'on rapproche le parc des milieux des villes voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque espèce a ses exigences ; plusieurs milieux permettent de couvrir davantage de besoins, donc d’abriter davantage d’espèces.',
                    ],
                ],
            ],
            [
                'title' => 'Menaces sur la biodiversité',
                'description' => 'Identifier les principales causes de déclin de la biodiversité et leurs mécanismes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Pour tracer une route, on rase 12 hectares de forêt. Quelle menace pour la biodiversité cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => 'la destruction d’un habitat', 'is_correct' => true],
                            ['choice_text' => 'la surexploitation d’une ressource', 'is_correct' => false],
                            ['choice_text' => 'l’arrivée d’une espèce invasive', 'is_correct' => false],
                            ['choice_text' => 'le réchauffement du climat', 'is_correct' => false],
                        ],
                        'explanation' => 'Raser la forêt supprime le milieu de vie des espèces qui y habitaient : c’est une perte d’habitat.',
                    ],
                    [
                        'question' => 'Dans un port, les pêcheurs sortent leurs filets deux fois plus souvent qu’il y a dix ans, et pourtant les prises de sardines baissent chaque année. Quelle explication est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'les sardines se sont adaptées aux filets en quelques saisons et leur échappent', 'is_correct' => false],
                            ['choice_text' => 'les sardines ont été remplacées par une espèce plus grosse', 'is_correct' => false],
                            ['choice_text' => 'la ressource est surexploitée : on pêche plus vite qu’elle ne se renouvelle', 'is_correct' => true],
                            ['choice_text' => 'les sardines se reproduisent mieux quand on les pêche davantage', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus d’efforts pour moins de poissons : le stock ne se renouvelle plus assez vite, signe d’une surexploitation.',
                    ],
                    [
                        'question' => 'Une plante ornementale importée d’Amérique est plantée dans un jardin. Dix ans plus tard, elle a envahi les berges d’un oued et étouffé les plantes locales. Comment la qualifie-t-on ?',
                        'choices' => [
                            ['choice_text' => 'espèce endémique', 'is_correct' => false],
                            ['choice_text' => 'espèce menacée', 'is_correct' => false],
                            ['choice_text' => 'espèce protégée', 'is_correct' => false],
                            ['choice_text' => 'espèce invasive', 'is_correct' => true],
                        ],
                        'explanation' => 'Une espèce introduite qui se propage et nuit aux espèces locales est dite invasive.',
                    ],
                    [
                        'question' => 'Une usine rejette des produits chimiques dans une rivière. Un mois plus tard, les truites ont disparu alors que les carpes y restent. Que montre cette observation ?',
                        'choices' => [
                            ['choice_text' => 'les espèces ne supportent pas toutes la pollution de la même façon', 'is_correct' => true],
                            ['choice_text' => 'la pollution profite aux espèces fragiles comme la truite', 'is_correct' => false],
                            ['choice_text' => 'les carpes sont plus menacées que les truites par la pollution', 'is_correct' => false],
                            ['choice_text' => 'la rivière n’a pas changé de qualité', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines espèces sont sensibles à la pollution, d’autres la tolèrent : les plus sensibles disparaissent en premier.',
                    ],
                    [
                        'question' => 'Dans le Moyen Atlas, des botanistes constatent que le cèdre dépérit sur les versants les plus bas et les plus secs. Quelle menace est la plus probablement en cause ?',
                        'choices' => [
                            ['choice_text' => 'un excès d’engrais déversé dans les rivières voisines', 'is_correct' => false],
                            ['choice_text' => 'le réchauffement du climat et la baisse des pluies', 'is_correct' => true],
                            ['choice_text' => 'l’introduction de poissons exotiques', 'is_correct' => false],
                            ['choice_text' => 'la pêche intensive en mer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cèdre a besoin de fraîcheur et d’eau ; quand il fait plus chaud et plus sec, il souffre d’abord sur les versants les plus bas.',
                    ],
                    [
                        'question' => 'Une route coupe en deux le territoire de plusieurs êtres vivants. Lequel sera le plus gêné ?',
                        'choices' => [
                            ['choice_text' => 'une mousse fixée sur un rocher à l’ombre des arbres', 'is_correct' => false],
                            ['choice_text' => 'un coquillage collé à un rocher de la plage', 'is_correct' => false],
                            ['choice_text' => 'un lichen installé sur le tronc d’un chêne', 'is_correct' => false],
                            ['choice_text' => 'un mammifère qui parcourt de longues distances chaque nuit', 'is_correct' => true],
                        ],
                        'explanation' => 'Les animaux qui se déplacent beaucoup se retrouvent bloqués ou exposés aux collisions ; les espèces fixées sont moins concernées.',
                    ],
                    [
                        'question' => 'Un agriculteur épand beaucoup d’engrais sur ses champs, au-dessus d’un petit lac. Au printemps, l’eau devient verte et les poissons manquent d’oxygène. Quel phénomène est à l’œuvre ?',
                        'choices' => [
                            ['choice_text' => 'la désertification : le sol perd son eau et sa végétation', 'is_correct' => false],
                            ['choice_text' => 'la salinisation : l’eau du lac devient trop salée', 'is_correct' => false],
                            ['choice_text' => 'l’eutrophisation : un excès de nutriments fait proliférer les algues', 'is_correct' => true],
                            ['choice_text' => 'l’acidification : l’eau devient trop acide à cause des pluies chargées de polluants', 'is_correct' => false],
                        ],
                        'explanation' => 'Les engrais enrichissent l’eau, les algues prolifèrent, puis leur décomposition consomme l’oxygène dont les poissons ont besoin.',
                    ],
                    [
                        'question' => 'Un sac plastique flotte au large. Quel danger représente-t-il pour une tortue marine ?',
                        'choices' => [
                            ['choice_text' => 'elle peut le prendre pour une méduse et l’avaler', 'is_correct' => true],
                            ['choice_text' => 'il réchauffe l’eau autour d’elle', 'is_correct' => false],
                            ['choice_text' => 'il fabrique des algues toxiques', 'is_correct' => false],
                            ['choice_text' => 'il bloque la lumière du soleil jusqu’au fond de l’océan', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tortue peut confondre un sac flottant avec une méduse ; une fois avalé, il bloque son système digestif.',
                    ],
                    [
                        'question' => 'Le dernier couple de grenouilles d’un étang du Gharb disparaît, mais l’espèce vit encore dans d’autres régions du pays. Comment nomme-t-on cet événement ?',
                        'choices' => [
                            ['choice_text' => 'une extinction mondiale', 'is_correct' => false],
                            ['choice_text' => 'une migration saisonnière', 'is_correct' => false],
                            ['choice_text' => 'une adaptation du milieu', 'is_correct' => false],
                            ['choice_text' => 'une extinction locale', 'is_correct' => true],
                        ],
                        'explanation' => 'L’espèce a disparu de l’étang mais pas de la planète : on parle d’extinction locale.',
                    ],
                    [
                        'question' => 'Un élève doit citer trois grandes causes du déclin de la biodiversité. Quelle liste est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dérive des continents, éruptions volcaniques, marées', 'is_correct' => false],
                            ['choice_text' => 'perte d’habitat, surexploitation, espèces invasives', 'is_correct' => true],
                            ['choice_text' => 'croissance des plantes, floraison, migration', 'is_correct' => false],
                            ['choice_text' => 'mutations, hybridation, sélection naturelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’habitat, la surexploitation et les espèces invasives figurent parmi les principales pressions que subit la biodiversité.',
                    ],
                ],
            ],
            [
                'title' => 'Conservation de la biodiversité',
                'description' => 'Aires protégées, conservation in situ et ex situ, restauration et suivi des espèces.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Le parc national de Souss-Massa protège l’ibis chauve sur les lieux mêmes où il vit. Comment nomme-t-on ce type de conservation ?',
                        'choices' => [
                            ['choice_text' => 'ex situ, c’est-à-dire hors du milieu naturel', 'is_correct' => false],
                            ['choice_text' => 'in vitro, c’est-à-dire en laboratoire sur des cellules', 'is_correct' => false],
                            ['choice_text' => 'in situ, c’est-à-dire dans le milieu naturel', 'is_correct' => true],
                            ['choice_text' => 'in vivo, c’est-à-dire sur un animal de laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'In situ signifie sur place : on protège l’espèce dans son habitat naturel, ici un parc national.',
                    ],
                    [
                        'question' => 'Quel exemple relève de la conservation ex situ ?',
                        'choices' => [
                            ['choice_text' => 'une réserve qui interdit la chasse sur l’ensemble de son territoire protégé', 'is_correct' => false],
                            ['choice_text' => 'un jardin botanique qui cultive des plantes rares prélevées en montagne', 'is_correct' => true],
                            ['choice_text' => 'un parc qui replante des cèdres là où ils ont brûlé', 'is_correct' => false],
                            ['choice_text' => 'un guide qui surveille un site de nidification d’oiseaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plantes sont conservées hors de leur milieu d’origine, dans un jardin : c’est de la conservation ex situ. Les autres exemples agissent sur place.',
                    ],
                    [
                        'question' => 'Pour laisser les stocks se reconstituer, une zone de pêche est fermée pendant la période de reproduction des poissons. Quel effet attend-on ?',
                        'choices' => [
                            ['choice_text' => 'les poissons migrent vers les eaux voisines', 'is_correct' => false],
                            ['choice_text' => 'les filets durent plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'le prix du poisson baisse pour les consommateurs', 'is_correct' => false],
                            ['choice_text' => 'les poissons peuvent se reproduire, ce qui renouvelle le stock', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans pêche pendant la reproduction, davantage de poissons survivent et pondent, ce qui aide la ressource à se renouveler.',
                    ],
                    [
                        'question' => 'Après l’abandon d’une ancienne carrière, des bénévoles y plantent des arbres locaux et réintroduisent des plantes de la région. Quel est le but de cette restauration écologique ?',
                        'choices' => [
                            ['choice_text' => 'transformer le site en parc de loisirs', 'is_correct' => false],
                            ['choice_text' => 'remplacer les plantes locales par des plantes ornementales importées d’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'aider le milieu dégradé à retrouver une végétation proche de l’original', 'is_correct' => true],
                            ['choice_text' => 'faire disparaître les animaux qui ont colonisé le site', 'is_correct' => false],
                        ],
                        'explanation' => 'La restauration écologique redonne au milieu une partie de ses fonctions et de ses espèces d’origine.',
                    ],
                    [
                        'question' => 'Pour sauver un petit oiseau de marais, une association protège toute la zone humide où il niche. Quel avantage cela apporte-t-il ?',
                        'choices' => [
                            ['choice_text' => 'les autres espèces du marais en profitent aussi', 'is_correct' => true],
                            ['choice_text' => 'l’oiseau peut être élevé en cage plus facilement', 'is_correct' => false],
                            ['choice_text' => 'les espèces concurrentes sont retirées du marais', 'is_correct' => false],
                            ['choice_text' => 'le marais devient un milieu sans eau libre', 'is_correct' => false],
                        ],
                        'explanation' => 'Protéger le milieu préserve en même temps les espèces qui en dépendent, pas seulement l’oiseau visé.',
                    ],
                    [
                        'question' => 'Chaque hiver, des ornithologues comptent les oiseaux d’eau d’un site : 1 200 en 2022, 900 en 2023, 600 en 2024. Que montre ce suivi ?',
                        'choices' => [
                            ['choice_text' => 'une hausse de 300 oiseaux par an : le site attire davantage', 'is_correct' => false],
                            ['choice_text' => 'une baisse de 300 oiseaux par an, dont il faut chercher les causes', 'is_correct' => true],
                            ['choice_text' => 'une baisse de 600 oiseaux par an, soit la moitié des effectifs', 'is_correct' => false],
                            ['choice_text' => 'un effectif stable, autour de 900 oiseaux en moyenne', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effectifs perdent 300 oiseaux chaque année (1 200, 900, puis 600). La moyenne de 900 cache une nette tendance à la baisse.',
                    ],
                    [
                        'question' => 'Entre deux forêts séparées par des cultures, un parc installe une bande de haies et d’arbres. Quel est son intérêt ?',
                        'choices' => [
                            ['choice_text' => 'isoler chaque forêt pour mieux la protéger', 'is_correct' => false],
                            ['choice_text' => 'réduire le nombre d’espèces présentes dans chaque forêt voisine', 'is_correct' => false],
                            ['choice_text' => 'faire circuler animaux et graines d’une forêt à l’autre', 'is_correct' => true],
                            ['choice_text' => 'bloquer le passage des animaux vers les cultures', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette bande joue le rôle de corridor : elle relie les deux forêts et facilite les déplacements et la dispersion des graines.',
                    ],
                    [
                        'question' => 'Chaque printemps, des agents arrachent de jeunes plants d’une plante invasive avant qu’ils ne produisent des graines. Quel est l’objectif ?',
                        'choices' => [
                            ['choice_text' => 'augmenter sa production de graines', 'is_correct' => false],
                            ['choice_text' => 'la remplacer par une autre plante invasive', 'is_correct' => false],
                            ['choice_text' => 'aider les plantes locales à disparaître', 'is_correct' => false],
                            ['choice_text' => 'freiner sa propagation avant qu’elle ne s’installe', 'is_correct' => true],
                        ],
                        'explanation' => 'Intervenir avant la production de graines coupe la source de nouvelles plantes et limite l’expansion de l’espèce.',
                    ],
                    [
                        'question' => 'Pour savoir si la replantation d’un marais a marché, Salma compte les espèces d’oiseaux avant les travaux (11), puis deux ans après (19). Quelle conclusion est justifiée ?',
                        'choices' => [
                            ['choice_text' => 'le nombre d’espèces a augmenté de 30, signe très encourageant', 'is_correct' => false],
                            ['choice_text' => 'le nombre d’espèces a augmenté de 8, signe encourageant', 'is_correct' => true],
                            ['choice_text' => 'le nombre d’espèces a diminué de 8, signe d’échec', 'is_correct' => false],
                            ['choice_text' => 'le nombre d’espèces est resté stable, signe d’inefficacité', 'is_correct' => false],
                        ],
                        'explanation' => '19 − 11 = 8 espèces de plus : l’indicateur s’améliore après les travaux.',
                    ],
                    [
                        'question' => 'Au Maroc, quel est le but principal d’un parc national comme celui de Toubkal ou d’Ifrane ?',
                        'choices' => [
                            ['choice_text' => 'protéger des milieux naturels et accueillir des visiteurs encadrés', 'is_correct' => true],
                            ['choice_text' => 'interdire l’accès de la région aux habitants', 'is_correct' => false],
                            ['choice_text' => 'exploiter le sous-sol de la montagne pour financer les activités du parc', 'is_correct' => false],
                            ['choice_text' => 'élever des animaux venus d’autres continents', 'is_correct' => false],
                        ],
                        'explanation' => 'Un parc national conserve des milieux naturels et permet des visites encadrées ; ce n’est ni un zoo ni un site d’exploitation.',
                    ],
                ],
            ],
            [
                'title' => 'Biodiversité, agriculture et société',
                'description' => 'Ressources génétiques, pollinisation, sols, alimentation et services écosystémiques.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Un agriculteur sème du blé, des fèves et des lentilles sur son exploitation plutôt qu’une seule culture. Quel avantage cela peut-il avoir ?',
                        'choices' => [
                            ['choice_text' => 'la même maladie touchera les trois cultures en même temps', 'is_correct' => false],
                            ['choice_text' => 'si une maladie frappe une culture, les autres sont épargnées', 'is_correct' => true],
                            ['choice_text' => 'les engrais deviennent inutiles pour les trois cultures', 'is_correct' => false],
                            ['choice_text' => 'le sol n’a plus besoin d’être travaillé', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cultures différentes n’ont pas les mêmes points faibles : une maladie qui frappe l’une épargne souvent les autres.',
                    ],
                    [
                        'question' => 'Dans un verger d’amandiers, l’agriculteur installe des ruches pendant la floraison. Quel service les abeilles rendent-elles ?',
                        'choices' => [
                            ['choice_text' => 'elles protègent les arbres contre le gel de printemps et contre les ravageurs', 'is_correct' => false],
                            ['choice_text' => 'elles transportent le pollen d’une fleur à l’autre pour former les fruits', 'is_correct' => true],
                            ['choice_text' => 'elles enrichissent le sol en azote autour des arbres', 'is_correct' => false],
                            ['choice_text' => 'elles dispersent les graines dans tout le verger', 'is_correct' => false],
                        ],
                        'explanation' => 'En passant de fleur en fleur, les abeilles assurent la pollinisation, étape nécessaire pour que les fleurs donnent des fruits.',
                    ],
                    [
                        'question' => 'En retournant la terre de son potager, Yassine y trouve beaucoup de vers de terre. Quel rôle jouent-ils dans le sol ?',
                        'choices' => [
                            ['choice_text' => 'ils fabriquent de l’engrais chimique à partir de l’air', 'is_correct' => false],
                            ['choice_text' => 'ils empêchent l’eau de pénétrer dans la terre', 'is_correct' => false],
                            ['choice_text' => 'ils éliminent les microorganismes présents dans le sol pour le rendre plus sain et plus propre', 'is_correct' => false],
                            ['choice_text' => 'ils creusent des galeries et mélangent la matière organique, ce qui aère le sol', 'is_correct' => true],
                        ],
                        'explanation' => 'Les vers de terre brassent la terre et la matière organique, et leurs galeries laissent passer l’air et l’eau.',
                    ],
                    [
                        'question' => 'Dans une oasis, une variété locale de maïs résiste mieux à la sécheresse que les variétés commerciales. Quel intérêt les agronomes ont-ils à la conserver ?',
                        'choices' => [
                            ['choice_text' => 'elle porte des gènes de résistance utiles pour créer de futures variétés', 'is_correct' => true],
                            ['choice_text' => 'elle sert de nourriture aux pollinisateurs sauvages de la région', 'is_correct' => false],
                            ['choice_text' => 'elle produit un engrais naturel pour les autres cultures', 'is_correct' => false],
                            ['choice_text' => 'elle fixe les prix du marché pour les agriculteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Ses gènes de résistance pourront être croisés avec d’autres variétés pour faire face à des étés plus secs.',
                    ],
                    [
                        'question' => 'Dans un tas de compost, bactéries, champignons et cloportes transforment les épluchures en terreau. Quel service rendent-ils ?',
                        'choices' => [
                            ['choice_text' => 'ils fixent le gaz carbonique dans la roche', 'is_correct' => false],
                            ['choice_text' => 'ils transportent le pollen vers les fleurs voisines', 'is_correct' => false],
                            ['choice_text' => 'ils décomposent la matière organique et recyclent les nutriments', 'is_correct' => true],
                            ['choice_text' => 'ils protègent les plantes contre le vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces décomposeurs transforment les déchets végétaux en éléments que les plantes pourront absorber à nouveau.',
                    ],
                    [
                        'question' => 'Une forêt de chênes-lièges fournit du liège, retient l’eau de pluie et abrite de nombreux animaux. Quelle expression désigne ces bénéfices pour les humains ?',
                        'choices' => [
                            ['choice_text' => 'les services écosystémiques', 'is_correct' => true],
                            ['choice_text' => 'les facteurs limitants', 'is_correct' => false],
                            ['choice_text' => 'les perturbations naturelles', 'is_correct' => false],
                            ['choice_text' => 'les ressources non renouvelables', 'is_correct' => false],
                        ],
                        'explanation' => 'On appelle services écosystémiques les bénéfices que la nature procure aux humains : produits, régulation de l’eau, habitats.',
                    ],
                    [
                        'question' => 'Dans une région de cultures de courgettes et de melons, les abeilles sauvages ont fortement diminué. Que peut craindre l’agriculteur ?',
                        'choices' => [
                            ['choice_text' => 'des plantes qui ne fleurissent plus du tout', 'is_correct' => false],
                            ['choice_text' => 'des fleurs mal pollinisées, donc moins de fruits', 'is_correct' => true],
                            ['choice_text' => 'des fruits plus gros, faute de concurrence entre les fleurs', 'is_correct' => false],
                            ['choice_text' => 'des racines moins profondes et des tiges plus fragiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans assez de pollinisateurs, moins de fleurs sont fécondées et la récolte diminue.',
                    ],
                    [
                        'question' => 'Entre deux champs, un agriculteur plante une haie d’arbustes locaux. Quel bénéfice écologique peut-elle apporter ?',
                        'choices' => [
                            ['choice_text' => 'un obstacle qui isole les insectes d’un champ à l’autre', 'is_correct' => false],
                            ['choice_text' => 'une zone qui attire les ravageurs vers les cultures', 'is_correct' => false],
                            ['choice_text' => 'un sol plus pauvre pour les cultures voisines', 'is_correct' => false],
                            ['choice_text' => 'un refuge et un passage pour de petits animaux et des insectes utiles', 'is_correct' => true],
                        ],
                        'explanation' => 'La haie offre abri et nourriture à de nombreux petits animaux et sert de voie de circulation dans le paysage agricole.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases relie correctement biodiversité et alimentation ?',
                        'choices' => [
                            ['choice_text' => 'cultiver une espèce unique suffit à rendre l’alimentation résistante', 'is_correct' => false],
                            ['choice_text' => 'la variété des cultures complique l’alimentation des populations et rend les récoltes plus fragiles', 'is_correct' => false],
                            ['choice_text' => 'plus on cultive d’espèces et de variétés, plus l’alimentation est variée et résistante aux aléas', 'is_correct' => true],
                            ['choice_text' => 'les espèces sauvages n’ont pas de lien avec la nourriture humaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cultures et des variétés diversifiées offrent plus de choix à table et limitent les pertes quand une récolte échoue.',
                    ],
                    [
                        'question' => 'Karim cultive 12 hectares de blé répartis à parts égales entre 3 variétés locales. Quelle surface occupe chaque variété ?',
                        'choices' => [
                            ['choice_text' => '4 hectares', 'is_correct' => true],
                            ['choice_text' => '9 hectares', 'is_correct' => false],
                            ['choice_text' => '15 hectares', 'is_correct' => false],
                            ['choice_text' => '36 hectares', 'is_correct' => false],
                        ],
                        'explanation' => '12 ÷ 3 = 4 hectares par variété.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de la biodiversité',
                'description' => 'Synthèse des notions essentielles : diversité, menaces, mesures et interprétation de données.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Sur 20 espèces recensées dans une vallée, 5 ne vivent nulle part ailleurs dans le monde. Quelle part des espèces de la vallée est endémique ?',
                        'choices' => [
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => true],
                        ],
                        'explanation' => '5 espèces sur 20, soit 5 ÷ 20 × 100 = 25 %.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement diversité des espèces et diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'la première compte les gènes d’un individu, la seconde les milieux de vie', 'is_correct' => false],
                            ['choice_text' => 'la première compte les variantes de gènes, la seconde les espèces d’un milieu', 'is_correct' => false],
                            ['choice_text' => 'la première compte les espèces d’un milieu, la seconde les variantes de gènes au sein d’une espèce', 'is_correct' => true],
                            ['choice_text' => 'les deux expressions désignent la même chose, l’une étant simplement un peu plus savante que l’autre', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité des espèces porte sur le nombre d’espèces ; la diversité génétique, sur les variantes de gènes au sein d’une même espèce.',
                    ],
                    [
                        'question' => 'À la suite d’une longue sécheresse, une population de gazelles passe de 200 à 15 individus. Quel risque génétique la menace ?',
                        'choices' => [
                            ['choice_text' => 'perdre des variantes de gènes, donc une part de sa capacité à s’adapter', 'is_correct' => true],
                            ['choice_text' => 'gagner de nouvelles variantes, car il y a moins d’individus', 'is_correct' => false],
                            ['choice_text' => 'changer d’espèce, car les survivantes sont différentes', 'is_correct' => false],
                            ['choice_text' => 'rester génétiquement intacte, car des gazelles subsistent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec 15 survivantes, beaucoup de variantes de gènes ont disparu, et avec elles une partie des atouts pour s’adapter.',
                    ],
                    [
                        'question' => 'Une route traverse la forêt où vit un groupe de magots, les macaques de l’Atlas. Quel problème de conservation se pose en priorité ?',
                        'choices' => [
                            ['choice_text' => 'la forêt manque de lumière : il faut éclaircir les arbres', 'is_correct' => false],
                            ['choice_text' => 'les deux côtés de la forêt ne communiquent plus assez : il faut des passages', 'is_correct' => true],
                            ['choice_text' => 'les magots manquent d’eau : il faut creuser des puits', 'is_correct' => false],
                            ['choice_text' => 'les arbres sont trop jeunes : il faut les remplacer', 'is_correct' => false],
                        ],
                        'explanation' => 'Une route coupe les déplacements et les échanges entre les deux parties du territoire ; des passages aménagés peuvent y remédier.',
                    ],
                    [
                        'question' => 'Une zone protégée réunit forêt, mare et prairie, reliées par des bandes arborées. Quels objectifs poursuit-on ?',
                        'choices' => [
                            ['choice_text' => 'réduire le nombre de milieux pour mieux les surveiller', 'is_correct' => false],
                            ['choice_text' => 'séparer les populations pour éviter les croisements', 'is_correct' => false],
                            ['choice_text' => 'garder des milieux variés et permettre aux espèces de circuler entre eux', 'is_correct' => true],
                            ['choice_text' => 'supprimer les relations entre espèces pour limiter la concurrence', 'is_correct' => false],
                        ],
                        'explanation' => 'La variété des milieux accueille davantage d’espèces, et les bandes arborées facilitent leurs déplacements.',
                    ],
                    [
                        'question' => 'Après un déversement polluant, une mare compte 350 crapauds contre 500 auparavant. Quelle est la baisse en pourcentage ?',
                        'choices' => [
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '150 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => true],
                        ],
                        'explanation' => '500 − 350 = 150 crapauds en moins, soit 150 ÷ 500 × 100 = 30 %.',
                    ],
                    [
                        'question' => 'Dans une réserve, les effectifs d’une espèce baissent chaque année. Quelle information aide le plus à agir ?',
                        'choices' => [
                            ['choice_text' => 'le nom donné à l’espèce dans la région', 'is_correct' => false],
                            ['choice_text' => 'l’évolution des effectifs année après année et les causes possibles du déclin', 'is_correct' => true],
                            ['choice_text' => 'la couleur des individus les plus visibles', 'is_correct' => false],
                            ['choice_text' => 'la météo relevée le jour d’un comptage unique', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour agir, il faut connaître la tendance et chercher les pressions responsables ; le nom ou la couleur n’y aident pas.',
                    ],
                    [
                        'question' => 'Quelle action protège directement la diversité génétique d’une culture ?',
                        'choices' => [
                            ['choice_text' => 'remplacer les variétés locales par une variété à fort rendement', 'is_correct' => false],
                            ['choice_text' => 'garder la variété la plus vendue sur le marché', 'is_correct' => false],
                            ['choice_text' => 'conserver plusieurs variétés locales dans une banque de graines', 'is_correct' => true],
                            ['choice_text' => 'réduire le nombre de lignées conservées pour gagner de la place', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus on conserve de variétés, plus on garde de variantes de gènes disponibles pour la recherche et la sélection future.',
                    ],
                    [
                        'question' => 'Un poisson introduit dans un lac se multiplie vite, mange les œufs d’une espèce locale et trouble l’eau. Quel est le principal problème ?',
                        'choices' => [
                            ['choice_text' => 'un enrichissement de la diversité du lac', 'is_correct' => false],
                            ['choice_text' => 'une succession naturelle qui améliore l’équilibre du lac', 'is_correct' => false],
                            ['choice_text' => 'une restauration spontanée du milieu', 'is_correct' => false],
                            ['choice_text' => 'une invasion biologique qui peut faire reculer les espèces locales', 'is_correct' => true],
                        ],
                        'explanation' => 'Une espèce introduite très compétitive peut modifier le milieu et provoquer le déclin d’espèces locales.',
                    ],
                    [
                        'question' => 'Quelle stratégie de conservation paraît la plus complète ?',
                        'choices' => [
                            ['choice_text' => 'protéger les habitats, limiter les menaces et suivre les populations', 'is_correct' => true],
                            ['choice_text' => 'protéger les individus les plus visibles et laisser le reste', 'is_correct' => false],
                            ['choice_text' => 'agir sans suivre ni mesurer les effets des mesures prises', 'is_correct' => false],
                            ['choice_text' => 'sauver une espèce sans s’occuper du milieu où elle vit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conservation efficace protège les milieux, limite les menaces et vérifie régulièrement l’état des populations.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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