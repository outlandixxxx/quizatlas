<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EcologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'ecology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’écologie',
                'description' => 'Niveau débutant : organisation du vivant, habitat, niche écologique et facteurs du milieu.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Dans une forêt, le sol, l’eau, la lumière et les organismes vivants constituent ensemble :',
                        'choices' => [
                            ['choice_text' => 'un écosystème', 'is_correct' => true],
                            ['choice_text' => 'une communauté', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'une espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème regroupe les êtres vivants et les éléments non vivants d’un milieu ainsi que leurs interactions.',
                    ],
                    [
                        'question' => 'Les 40 tortues d’Hermann d’une même réserve forment :',
                        'choices' => [
                            ['choice_text' => 'une communauté', 'is_correct' => false],
                            ['choice_text' => 'un écosystème', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => true],
                            ['choice_text' => 'une espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Une population réunit les individus d’une même espèce présents dans une zone donnée à un moment donné.',
                    ],
                    [
                        'question' => 'Lequel est un facteur abiotique ?',
                        'choices' => [
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'la température', 'is_correct' => true],
                            ['choice_text' => 'la compétition', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur abiotique est un élément non vivant du milieu, comme la température, la lumière, le pH ou l’humidité.',
                    ],
                    [
                        'question' => 'Le rôle qu’une espèce joue dans son environnement est appelé :',
                        'choices' => [
                            ['choice_text' => 'sa niche écologique', 'is_correct' => true],
                            ['choice_text' => 'son habitat', 'is_correct' => false],
                            ['choice_text' => 'son aire de répartition', 'is_correct' => false],
                            ['choice_text' => 'sa position taxonomique', 'is_correct' => false],
                        ],
                        'explanation' => 'La niche écologique décrit notamment les ressources utilisées et le rôle fonctionnel d’une espèce dans son milieu.',
                    ],
                    [
                        'question' => 'Deux espèces d’oiseaux se disputent les mêmes graines, devenues rares après un hiver sec. Quelle interaction domine ?',
                        'choices' => [
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'le commensalisme', 'is_correct' => false],
                            ['choice_text' => 'la compétition', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand deux espèces dépendent d’une même ressource limitée, elles entrent en compétition.',
                    ],
                    [
                        'question' => 'Quel terme désigne un grand ensemble écologique défini par son climat et sa végétation, comme la savane ou la taïga ?',
                        'choices' => [
                            ['choice_text' => 'une niche', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'un biome', 'is_correct' => true],
                            ['choice_text' => 'un habitat', 'is_correct' => false],
                        ],
                        'explanation' => 'Un biome regroupe des écosystèmes voisins qui partagent un climat et un type de végétation, comme la savane ou la taïga.',
                    ],
                    [
                        'question' => 'Quel niveau d’organisation réunit plusieurs populations de différentes espèces vivant ensemble ?',
                        'choices' => [
                            ['choice_text' => 'la communauté', 'is_correct' => true],
                            ['choice_text' => 'la population', 'is_correct' => false],
                            ['choice_text' => 'l’individu', 'is_correct' => false],
                            ['choice_text' => 'le biome', 'is_correct' => false],
                        ],
                        'explanation' => 'Une communauté est l’ensemble des populations de différentes espèces présentes dans un même milieu.',
                    ],
                    [
                        'question' => 'Une espèce qui ne vit que dans une plage étroite de température est dite :',
                        'choices' => [
                            ['choice_text' => 'euryhaline', 'is_correct' => false],
                            ['choice_text' => 'sténotherme', 'is_correct' => true],
                            ['choice_text' => 'eurytherme', 'is_correct' => false],
                            ['choice_text' => 'hétérotrophe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce sténotherme tolère une gamme de températures relativement étroite.',
                    ],
                    [
                        'question' => 'Dans une forêt dense, les plantes du sous-bois reçoivent très peu de lumière. Quelle conséquence est attendue ?',
                        'choices' => [
                            ['choice_text' => 'Elles absorbent plus d’eau pour compenser', 'is_correct' => false],
                            ['choice_text' => 'Elles puisent leur énergie dans les minéraux du sol', 'is_correct' => false],
                            ['choice_text' => 'Elles produisent moins de matière par photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'Elles deviennent des consommateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière fournit l’énergie de la photosynthèse ; à l’ombre, la production de matière organique diminue.',
                    ],
                    [
                        'question' => 'Un naturaliste compte 120 mésanges et 80 pinsons dans un bois. Que décrit ce comptage ?',
                        'choices' => [
                            ['choice_text' => 'Une seule population de 200 oiseaux', 'is_correct' => false],
                            ['choice_text' => 'Deux communautés qui forment une population', 'is_correct' => false],
                            ['choice_text' => 'Deux écosystèmes voisins au sein du bois', 'is_correct' => false],
                            ['choice_text' => 'Deux populations qui forment une communauté', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque espèce forme sa propre population ; réunies dans le même bois, elles constituent une communauté.',
                    ],
                ],
            ],
            [
                'title' => 'Relations entre organismes',
                'description' => 'Reconnaître les principales interactions écologiques entre espèces.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un lion capture une gazelle pour se nourrir. Cette relation est :',
                        'choices' => [
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'le commensalisme', 'is_correct' => false],
                            ['choice_text' => 'la prédation', 'is_correct' => true],
                        ],
                        'explanation' => 'La prédation implique qu’un organisme capture et consomme un autre organisme.',
                    ],
                    [
                        'question' => 'Des abeilles obtiennent du nectar tandis que les fleurs sont pollinisées. Il s’agit d’un :',
                        'choices' => [
                            ['choice_text' => 'parasitisme', 'is_correct' => false],
                            ['choice_text' => 'mutualisme', 'is_correct' => true],
                            ['choice_text' => 'commensalisme', 'is_correct' => false],
                            ['choice_text' => 'prédation', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce cas, les deux partenaires bénéficient de l’interaction : l’abeille obtient une ressource et la plante est pollinisée.',
                    ],
                    [
                        'question' => 'Un ténia vivant dans l’intestin de son hôte illustre :',
                        'choices' => [
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme', 'is_correct' => true],
                            ['choice_text' => 'le commensalisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parasite bénéficie de l’hôte tandis que celui-ci subit un effet négatif.',
                    ],
                    [
                        'question' => 'Une relation où une espèce bénéficie et l’autre n’est ni favorisée ni défavorisée est appelée :',
                        'choices' => [
                            ['choice_text' => 'prédation', 'is_correct' => false],
                            ['choice_text' => 'parasitisme', 'is_correct' => false],
                            ['choice_text' => 'compétition interspécifique', 'is_correct' => false],
                            ['choice_text' => 'commensalisme', 'is_correct' => true],
                        ],
                        'explanation' => 'Le commensalisme correspond à un bénéfice pour une espèce sans effet important pour l’autre.',
                    ],
                    [
                        'question' => 'Deux cerfs mâles se disputent l’accès aux femelles. Cette interaction est :',
                        'choices' => [
                            ['choice_text' => 'une compétition interspécifique', 'is_correct' => false],
                            ['choice_text' => 'une compétition intraspécifique', 'is_correct' => true],
                            ['choice_text' => 'un commensalisme', 'is_correct' => false],
                            ['choice_text' => 'une prédation', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme les deux individus appartiennent à la même espèce, il s’agit d’une compétition intraspécifique.',
                    ],
                    [
                        'question' => 'Un champignon mycorhizien échange des minéraux contre des sucres avec une plante. Cette association est souvent :',
                        'choices' => [
                            ['choice_text' => 'mutualiste', 'is_correct' => true],
                            ['choice_text' => 'parasitaire', 'is_correct' => false],
                            ['choice_text' => 'compétitive', 'is_correct' => false],
                            ['choice_text' => 'neutre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mycorhizes fournissent notamment des minéraux et de l’eau à la plante, qui fournit en retour des composés carbonés au champignon.',
                    ],
                    [
                        'question' => 'Dans un étang, les nénuphars couvrent toute la surface et privent les algues de lumière. Quel est ici le facteur limitant pour les algues ?',
                        'choices' => [
                            ['choice_text' => 'la température', 'is_correct' => false],
                            ['choice_text' => 'le pH', 'is_correct' => false],
                            ['choice_text' => 'l’oxygène dissous', 'is_correct' => false],
                            ['choice_text' => 'la lumière', 'is_correct' => true],
                        ],
                        'explanation' => 'Un facteur limitant est celui dont le manque freine la croissance d’une population ; ici, c’est la lumière interceptée par les nénuphars.',
                    ],
                    [
                        'question' => 'Deux espèces de mésanges se nourrissent de graines de tailles différentes au lieu de se partager les mêmes. Que devient la compétition entre elles ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente fortement', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle reste identique', 'is_correct' => false],
                            ['choice_text' => 'Elle double chaque année', 'is_correct' => false],
                        ],
                        'explanation' => 'Exploiter des ressources différentes réduit le chevauchement des niches, donc la compétition.',
                    ],
                    [
                        'question' => 'Des orchidées poussent sur les branches d’un arbre, sans le gêner ni lui apporter quoi que ce soit. Quelle relation décrit cette situation ?',
                        'choices' => [
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'le commensalisme', 'is_correct' => true],
                            ['choice_text' => 'la compétition', 'is_correct' => false],
                        ],
                        'explanation' => 'L’orchidée profite d’un support bien éclairé ; l’arbre n’en tire ni bénéfice ni dommage : c’est un commensalisme.',
                    ],
                    [
                        'question' => 'Une plante libère des substances chimiques qui freinent la croissance de plantes voisines. Ce phénomène peut être qualifié de :',
                        'choices' => [
                            ['choice_text' => 'allélopathie', 'is_correct' => true],
                            ['choice_text' => 'symbiose mycorhizienne', 'is_correct' => false],
                            ['choice_text' => 'mimétisme', 'is_correct' => false],
                            ['choice_text' => 'herbivorie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’allélopathie désigne l’effet chimique d’un organisme sur d’autres organismes, souvent par des substances libérées dans le milieu.',
                    ],
                ],
            ],
            [
                'title' => 'Chaînes alimentaires et flux d’énergie',
                'description' => 'Comprendre producteurs, consommateurs, décomposeurs et transferts d’énergie.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans une prairie, l’herbe occupe quel niveau trophique ?',
                        'choices' => [
                            ['choice_text' => 'consommateur primaire', 'is_correct' => false],
                            ['choice_text' => 'consommateur secondaire', 'is_correct' => false],
                            ['choice_text' => 'producteur primaire', 'is_correct' => true],
                            ['choice_text' => 'décomposeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Grâce à la photosynthèse, l’herbe fabrique de la matière organique : c’est un producteur primaire.',
                    ],
                    [
                        'question' => 'Dans la chaîne herbe → criquet → grenouille → serpent, la grenouille est :',
                        'choices' => [
                            ['choice_text' => 'un consommateur secondaire', 'is_correct' => true],
                            ['choice_text' => 'un producteur', 'is_correct' => false],
                            ['choice_text' => 'un consommateur primaire', 'is_correct' => false],
                            ['choice_text' => 'un décomposeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le criquet est consommateur primaire, puis la grenouille qui le mange est consommateur secondaire.',
                    ],
                    [
                        'question' => 'Dans un sol de forêt, les champignons et de nombreuses bactéries jouent le rôle de :',
                        'choices' => [
                            ['choice_text' => 'producteurs primaires', 'is_correct' => false],
                            ['choice_text' => 'décomposeurs', 'is_correct' => true],
                            ['choice_text' => 'prédateurs supérieurs', 'is_correct' => false],
                            ['choice_text' => 'consommateurs primaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décomposeurs transforment la matière organique morte et participent au recyclage des éléments minéraux.',
                    ],
                    [
                        'question' => 'À chaque niveau trophique, l’énergie disponible diminue. Quelle en est la raison principale ?',
                        'choices' => [
                            ['choice_text' => 'les décomposeurs détruisent l’énergie des carnivores', 'is_correct' => false],
                            ['choice_text' => 'l’énergie est transformée en matière minérale', 'is_correct' => false],
                            ['choice_text' => 'une grande partie est dissipée sous forme de chaleur', 'is_correct' => true],
                            ['choice_text' => 'les herbivores recyclent l’énergie vers les producteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'À chaque transfert, l’essentiel de l’énergie est dépensé par le métabolisme et dissipé en chaleur, d’où un reste de plus en plus faible.',
                    ],
                    [
                        'question' => 'Une plante contient 10 000 kJ d’énergie stockée. Avec un transfert simplifié de 10 %, environ combien arrivent au niveau suivant ?',
                        'choices' => [
                            ['choice_text' => '1 000 kJ', 'is_correct' => true],
                            ['choice_text' => '10 kJ', 'is_correct' => false],
                            ['choice_text' => '5 000 kJ', 'is_correct' => false],
                            ['choice_text' => '9 000 kJ', 'is_correct' => false],
                        ],
                        'explanation' => '10 % de 10 000 kJ = 1 000 kJ dans ce modèle simplifié.',
                    ],
                    [
                        'question' => 'Un ensemble d’espèces reliées par plusieurs relations alimentaires constitue :',
                        'choices' => [
                            ['choice_text' => 'un cycle biogéochimique', 'is_correct' => false],
                            ['choice_text' => 'une niche fondamentale', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'un réseau trophique', 'is_correct' => true],
                        ],
                        'explanation' => 'Un réseau trophique rassemble plusieurs chaînes alimentaires qui se croisent au sein d’un écosystème.',
                    ],
                    [
                        'question' => 'Une prairie produit 20 000 kJ d’énergie dans ses plantes. Avec un transfert de 10 % entre chaque niveau, combien en reçoivent les consommateurs secondaires ?',
                        'choices' => [
                            ['choice_text' => '2 000 kJ', 'is_correct' => false],
                            ['choice_text' => '200 kJ', 'is_correct' => true],
                            ['choice_text' => '20 kJ', 'is_correct' => false],
                            ['choice_text' => '10 000 kJ', 'is_correct' => false],
                        ],
                        'explanation' => '10 % de 20 000 kJ donne 2 000 kJ pour les herbivores, puis 10 % de 2 000 kJ donne 200 kJ pour les consommateurs secondaires.',
                    ],
                    [
                        'question' => 'Une matière minérale comme le nitrate peut être réutilisée par une plante puis retourner au sol après décomposition. Cela illustre :',
                        'choices' => [
                            ['choice_text' => 'un cycle de la matière', 'is_correct' => true],
                            ['choice_text' => 'un transfert d’énergie sans matière', 'is_correct' => false],
                            ['choice_text' => 'une disparition de matière minérale', 'is_correct' => false],
                            ['choice_text' => 'un flux d’énergie à sens unique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments chimiques circulent entre organismes et environnement dans des cycles biogéochimiques.',
                    ],
                    [
                        'question' => 'Dans un bois, les renards disparaissent. Que devient d’abord la population de lapins dont ils se nourrissaient ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue dès les premiers jours', 'is_correct' => false],
                            ['choice_text' => 'Elle reste inchangée', 'is_correct' => false],
                            ['choice_text' => 'Elle disparaît à son tour', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente à court terme', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans prédateur pour limiter leurs effectifs, les proies se multiplient d’abord, ce qui peut ensuite déséquilibrer leur nourriture.',
                    ],
                    [
                        'question' => 'Quelle formulation distingue correctement matière et énergie dans un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie se recycle, la matière se dissipe en chaleur', 'is_correct' => false],
                            ['choice_text' => 'La matière et l’énergie se recyclent de la même façon', 'is_correct' => false],
                            ['choice_text' => 'La matière se recycle, l’énergie se dissipe en chaleur', 'is_correct' => true],
                            ['choice_text' => 'L’énergie se conserve à chaque niveau, la matière se perd', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments chimiques circulent en boucle, tandis que l’énergie, entrée sous forme de lumière, finit dissipée en chaleur.',
                    ],
                ],
            ],
            [
                'title' => 'Populations et dynamique écologique',
                'description' => 'Effectifs, densité, natalité, mortalité et capacité de charge.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une population passe de 200 à 260 individus en un an. De combien a-t-elle augmenté ?',
                        'choices' => [
                            ['choice_text' => '30 individus', 'is_correct' => false],
                            ['choice_text' => '60 individus', 'is_correct' => true],
                            ['choice_text' => '460 individus', 'is_correct' => false],
                            ['choice_text' => '130 individus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation absolue vaut 260 − 200 = 60 individus, soit 30 % de l’effectif de départ.',
                    ],
                    [
                        'question' => 'Une population de 500 lapins vit sur 25 hectares. Sa densité moyenne est de :',
                        'choices' => [
                            ['choice_text' => '25 lapins par hectare', 'is_correct' => false],
                            ['choice_text' => '12,5 lapins par hectare', 'is_correct' => false],
                            ['choice_text' => '500 lapins par hectare', 'is_correct' => false],
                            ['choice_text' => '20 lapins par hectare', 'is_correct' => true],
                        ],
                        'explanation' => 'La densité est 500 ÷ 25 = 20 lapins par hectare.',
                    ],
                    [
                        'question' => 'Une population de bactéries double toutes les 20 minutes. En partant de 100 bactéries, combien y en a-t-il au bout d’une heure ?',
                        'choices' => [
                            ['choice_text' => '300 bactéries', 'is_correct' => false],
                            ['choice_text' => '600 bactéries', 'is_correct' => false],
                            ['choice_text' => '1 600 bactéries', 'is_correct' => false],
                            ['choice_text' => '800 bactéries', 'is_correct' => true],
                        ],
                        'explanation' => 'Une heure correspond à trois doublements : 100 × 2 × 2 × 2 = 800 bactéries.',
                    ],
                    [
                        'question' => 'L’immigration correspond à :',
                        'choices' => [
                            ['choice_text' => 'le départ d’individus', 'is_correct' => false],
                            ['choice_text' => 'la naissance de nouveaux individus', 'is_correct' => false],
                            ['choice_text' => 'l’arrivée d’individus dans une population', 'is_correct' => true],
                            ['choice_text' => 'la mort des individus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immigration augmente potentiellement l’effectif par l’arrivée d’individus.',
                    ],
                    [
                        'question' => 'L’effectif d’une population de cerfs se stabilise autour de 400 individus, valeur que la forêt peut nourrir durablement. Comment nomme-t-on cette valeur ?',
                        'choices' => [
                            ['choice_text' => 'la capacité de charge', 'is_correct' => true],
                            ['choice_text' => 'la densité de population', 'is_correct' => false],
                            ['choice_text' => 'le taux de natalité', 'is_correct' => false],
                            ['choice_text' => 'la richesse spécifique', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité de charge est l’effectif maximal qu’un milieu peut soutenir durablement.',
                    ],
                    [
                        'question' => 'Une population de 80 oiseaux compte 12 naissances et 20 décès sur une période donnée, sans migration. Son effectif final est :',
                        'choices' => [
                            ['choice_text' => '88', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => true],
                            ['choice_text' => '68', 'is_correct' => false],
                            ['choice_text' => '112', 'is_correct' => false],
                        ],
                        'explanation' => 'Effectif final = 80 + 12 − 20 = 72 oiseaux.',
                    ],
                    [
                        'question' => 'Quelle situation représente une limitation dépendante de la densité ?',
                        'choices' => [
                            ['choice_text' => 'Une tempête détruit une zone, quel que soit l’effectif', 'is_correct' => false],
                            ['choice_text' => 'Une éruption volcanique détruit un habitat régional', 'is_correct' => false],
                            ['choice_text' => 'Une maladie se transmet d’autant mieux que la population est dense', 'is_correct' => true],
                            ['choice_text' => 'Une gelée tardive tue des individus indépendamment de leur nombre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une maladie se propage d’autant plus vite que les individus sont proches : son effet dépend de la densité, contrairement à une tempête ou à une gelée.',
                    ],
                    [
                        'question' => 'Des rongeurs colonisent une île riche en nourriture et sans prédateur. Quelle croissance attendre au début ?',
                        'choices' => [
                            ['choice_text' => 'Rapide, car peu de facteurs limitent la population', 'is_correct' => true],
                            ['choice_text' => 'Lente, car la capacité de charge est atteinte', 'is_correct' => false],
                            ['choice_text' => 'Nulle, car les naissances égalent les décès', 'is_correct' => false],
                            ['choice_text' => 'Négative, car la mortalité dépasse la natalité', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les ressources sont abondantes et les contraintes faibles, la population croît presque sans frein au début.',
                    ],
                    [
                        'question' => 'Un graphique montre une croissance en S qui se stabilise. Cette forme est compatible avec :',
                        'choices' => [
                            ['choice_text' => 'une croissance exponentielle', 'is_correct' => false],
                            ['choice_text' => 'une extinction progressive', 'is_correct' => false],
                            ['choice_text' => 'une migration saisonnière', 'is_correct' => false],
                            ['choice_text' => 'une croissance logistique', 'is_correct' => true],
                        ],
                        'explanation' => 'La croissance logistique augmente rapidement puis ralentit sous l’effet des limites du milieu, jusqu’à une stabilisation relative.',
                    ],
                    [
                        'question' => 'À quoi sert un suivi de population répété chaque année ?',
                        'choices' => [
                            ['choice_text' => 'À déterminer le patrimoine génétique de chaque individu', 'is_correct' => false],
                            ['choice_text' => 'À repérer les tendances : hausse, baisse ou stabilité', 'is_correct' => true],
                            ['choice_text' => 'À éliminer l’influence du climat sur la population', 'is_correct' => false],
                            ['choice_text' => 'À empêcher la population de varier', 'is_correct' => false],
                        ],
                        'explanation' => 'Des suivis répétés permettent de détecter une croissance, une diminution ou une stabilisation et d’en rechercher les causes.',
                    ],
                ],
            ],
            [
                'title' => 'Cycles de la matière',
                'description' => 'Cycles de l’eau, du carbone, de l’azote et du phosphore.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le passage de l’eau liquide vers la vapeur sous l’effet de la chaleur correspond à :',
                        'choices' => [
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'la précipitation', 'is_correct' => false],
                            ['choice_text' => 'l’infiltration', 'is_correct' => false],
                            ['choice_text' => 'l’évaporation', 'is_correct' => true],
                        ],
                        'explanation' => 'L’évaporation transforme l’eau liquide en vapeur, notamment sous l’effet du rayonnement solaire.',
                    ],
                    [
                        'question' => 'La condensation dans l’atmosphère participe à la formation :',
                        'choices' => [
                            ['choice_text' => 'des nuages', 'is_correct' => true],
                            ['choice_text' => 'des nappes phréatiques', 'is_correct' => false],
                            ['choice_text' => 'des courants marins', 'is_correct' => false],
                            ['choice_text' => 'des vents', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau se refroidit et se condense en fines gouttelettes ou cristaux, contribuant à la formation des nuages.',
                    ],
                    [
                        'question' => 'Le carbone atmosphérique est retiré du CO₂ par les végétaux principalement grâce à :',
                        'choices' => [
                            ['choice_text' => 'la respiration cellulaire', 'is_correct' => false],
                            ['choice_text' => 'la décomposition', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'la combustion', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse utilise le CO₂ pour fabriquer de la matière organique.',
                    ],
                    [
                        'question' => 'Quel gaz la combustion du charbon et du pétrole ajoute-t-elle à l’atmosphère ?',
                        'choices' => [
                            ['choice_text' => 'De l’oxygène supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Du diazote atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Du dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'De l’ozone stratosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'Brûler des combustibles fossiles libère dans l’air le carbone qui y était stocké sous forme de CO₂.',
                    ],
                    [
                        'question' => 'Certaines bactéries du sol, associées aux racines des légumineuses, captent l’azote de l’air. Comment nomme-t-on cette étape ?',
                        'choices' => [
                            ['choice_text' => 'la nitrification', 'is_correct' => false],
                            ['choice_text' => 'la fixation de l’azote', 'is_correct' => true],
                            ['choice_text' => 'la dénitrification dans le sol', 'is_correct' => false],
                            ['choice_text' => 'l’ammonification', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces bactéries transforment le diazote atmosphérique en composés utilisables par les plantes : c’est la fixation de l’azote.',
                    ],
                    [
                        'question' => 'Quel processus retourne du carbone vers l’atmosphère chez les organismes vivants ?',
                        'choices' => [
                            ['choice_text' => 'la respiration cellulaire', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'l’absorption racinaire', 'is_correct' => false],
                            ['choice_text' => 'la fixation de l’azote', 'is_correct' => false],
                        ],
                        'explanation' => 'La respiration cellulaire libère du CO₂ lors de l’utilisation des molécules organiques.',
                    ],
                    [
                        'question' => 'Après de fortes pluies, une partie de l’eau pénètre dans le sol. Il s’agit de :',
                        'choices' => [
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'le ruissellement', 'is_correct' => false],
                            ['choice_text' => 'l’évaporation', 'is_correct' => false],
                            ['choice_text' => 'l’infiltration', 'is_correct' => true],
                        ],
                        'explanation' => 'L’infiltration correspond à la pénétration de l’eau dans le sol.',
                    ],
                    [
                        'question' => 'Contrairement au carbone et à l’azote, le phosphore a très peu de phase gazeuse. Où se trouve l’essentiel du phosphore disponible ?',
                        'choices' => [
                            ['choice_text' => 'Dans l’atmosphère sous forme de gaz', 'is_correct' => false],
                            ['choice_text' => 'Dans les nuages et les pluies', 'is_correct' => false],
                            ['choice_text' => 'Dans les roches et les sédiments', 'is_correct' => true],
                            ['choice_text' => 'Dans la biomasse des forêts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phosphore vient surtout des roches : l’érosion le libère vers les sols et les eaux, d’où il circule entre les organismes.',
                    ],
                    [
                        'question' => 'Un excès de nutriments arrivant dans un lac peut favoriser une prolifération d’algues. Ce phénomène est lié à :',
                        'choices' => [
                            ['choice_text' => 'l’eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'l’acidification', 'is_correct' => false],
                            ['choice_text' => 'la salinisation', 'is_correct' => false],
                            ['choice_text' => 'la bioamplification', 'is_correct' => false],
                        ],
                        'explanation' => 'L’enrichissement excessif en nutriments, notamment azotés et phosphorés, peut provoquer une eutrophisation.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur les cycles de la matière est exacte ?',
                        'choices' => [
                            ['choice_text' => 'Un élément utilisé par un organisme sort du cycle', 'is_correct' => false],
                            ['choice_text' => 'Un même élément circule entre air, sol, eau et organismes', 'is_correct' => true],
                            ['choice_text' => 'Chaque élément reste dans un seul compartiment', 'is_correct' => false],
                            ['choice_text' => 'Les cycles se limitent au sol et ignorent l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments chimiques passent d’un compartiment à l’autre et sont réutilisés à de nombreuses reprises.',
                    ],
                ],
            ],
            [
                'title' => 'Écosystèmes, habitats et communautés',
                'description' => 'Structure des écosystèmes, diversité locale, habitats et changements écologiques.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Le lieu physique où une espèce vit est appelé :',
                        'choices' => [
                            ['choice_text' => 'niche', 'is_correct' => false],
                            ['choice_text' => 'habitat', 'is_correct' => true],
                            ['choice_text' => 'biome', 'is_correct' => false],
                            ['choice_text' => 'communauté', 'is_correct' => false],
                        ],
                        'explanation' => 'L’habitat correspond à l’environnement physique occupé par une espèce.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement l’habitat et la niche écologique ?',
                        'choices' => [
                            ['choice_text' => 'L’habitat est le rôle joué, la niche est le lieu de vie', 'is_correct' => false],
                            ['choice_text' => 'L’habitat concerne les animaux, la niche les plantes', 'is_correct' => false],
                            ['choice_text' => 'L’habitat est un climat, la niche une espèce', 'is_correct' => false],
                            ['choice_text' => 'L’habitat est le lieu de vie, la niche est le rôle joué', 'is_correct' => true],
                        ],
                        'explanation' => 'Comme l’adresse et le métier : l’habitat dit où l’espèce vit, la niche dit ce qu’elle y fait et de quoi elle dépend.',
                    ],
                    [
                        'question' => 'Après l’abandon d’un champ, des herbes puis des arbustes colonisent progressivement la parcelle. Cela illustre :',
                        'choices' => [
                            ['choice_text' => 'une spéciation rapide', 'is_correct' => false],
                            ['choice_text' => 'une migration saisonnière', 'is_correct' => false],
                            ['choice_text' => 'une succession écologique', 'is_correct' => true],
                            ['choice_text' => 'une prédation en chaîne', 'is_correct' => false],
                        ],
                        'explanation' => 'Une succession écologique est une évolution progressive de la composition d’une communauté au cours du temps.',
                    ],
                    [
                        'question' => 'Une coulée de lave a refroidi en formant de la roche nue. Des lichens, puis des mousses, s’y installent avant l’apparition d’un sol. De quel type de succession s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'une succession primaire', 'is_correct' => true],
                            ['choice_text' => 'une succession secondaire', 'is_correct' => false],
                            ['choice_text' => 'une régression écologique', 'is_correct' => false],
                            ['choice_text' => 'une colonisation invasive', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur une roche nue, sans sol, la colonisation commence par les lichens : c’est une succession primaire.',
                    ],
                    [
                        'question' => 'Après un incendie, le sol est resté en place et la végétation repousse. De quel type de succession s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'une succession primaire', 'is_correct' => false],
                            ['choice_text' => 'une migration de communauté', 'is_correct' => false],
                            ['choice_text' => 'une spéciation rapide', 'is_correct' => false],
                            ['choice_text' => 'une succession secondaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sol et ses graines persistent : la recolonisation est une succession secondaire, plus rapide qu’une succession primaire.',
                    ],
                    [
                        'question' => 'Le castor construit des barrages qui transforment une rivière en étang. Quel terme désigne une espèce qui modifie ainsi fortement son milieu ?',
                        'choices' => [
                            ['choice_text' => 'espèce pionnière', 'is_correct' => false],
                            ['choice_text' => 'espèce ingénieure', 'is_correct' => true],
                            ['choice_text' => 'espèce endémique', 'is_correct' => false],
                            ['choice_text' => 'espèce introduite volontairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce ingénieure, comme le castor, remodèle son environnement et change les conditions de vie des autres organismes.',
                    ],
                    [
                        'question' => 'Un récif corallien offre de nombreuses cachettes aux poissons. Quel effet cette structure a-t-elle sur l’habitat ?',
                        'choices' => [
                            ['choice_text' => 'Elle uniformise le milieu', 'is_correct' => false],
                            ['choice_text' => 'Elle isole les poissons de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les prédateurs de la zone', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente sa complexité', 'is_correct' => true],
                        ],
                        'explanation' => 'Une structure complexe crée souvent davantage de microhabitats et de refuges pour différentes espèces.',
                    ],
                    [
                        'question' => 'Quelle grandeur correspond au nombre d’espèces présentes dans un milieu ?',
                        'choices' => [
                            ['choice_text' => 'la richesse spécifique', 'is_correct' => true],
                            ['choice_text' => 'la densité de population', 'is_correct' => false],
                            ['choice_text' => 'la biomasse totale', 'is_correct' => false],
                            ['choice_text' => 'la capacité de charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique correspond au nombre d’espèces présentes dans un milieu ou échantillon.',
                    ],
                    [
                        'question' => 'Deux mares voisines abritent des communautés différentes. Quelle explication est la plus simple ?',
                        'choices' => [
                            ['choice_text' => 'Les espèces s’y répartissent au hasard', 'is_correct' => false],
                            ['choice_text' => 'Leurs conditions et leurs ressources diffèrent', 'is_correct' => true],
                            ['choice_text' => 'Les mares voisines partagent leurs espèces à l’identique', 'is_correct' => false],
                            ['choice_text' => 'La proximité impose les mêmes espèces dans les deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Température, pH, nutriments ou végétation peuvent différer d’une mare à l’autre, ce qui sélectionne des communautés différentes.',
                    ],
                    [
                        'question' => 'Une communauté renferme de nombreuses espèces aux rôles différents : producteurs, herbivores, décomposeurs, pollinisateurs. Quel avantage l’écosystème en tire-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il n’a plus de compétition interne', 'is_correct' => false],
                            ['choice_text' => 'Il a besoin de moins d’énergie solaire', 'is_correct' => false],
                            ['choice_text' => 'Il remplit davantage de fonctions écologiques', 'is_correct' => true],
                            ['choice_text' => 'Il n’échange plus de matière avec le milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Des espèces aux rôles variés assurent davantage de fonctions : production, recyclage, pollinisation.',
                    ],
                ],
            ],
            [
                'title' => 'Écologie et activités humaines',
                'description' => 'Pollution, fragmentation, ressources, agriculture et effets des activités humaines sur les écosystèmes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La fragmentation d’une forêt en petites parcelles séparées par des routes peut surtout :',
                        'choices' => [
                            ['choice_text' => 'isoler des populations et réduire les échanges entre elles', 'is_correct' => true],
                            ['choice_text' => 'agrandir l’habitat disponible pour chaque population', 'is_correct' => false],
                            ['choice_text' => 'faciliter le déplacement des animaux entre parcelles', 'is_correct' => false],
                            ['choice_text' => 'réduire l’effet de bord sur chaque parcelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La fragmentation réduit la continuité de l’habitat et peut limiter les déplacements et les échanges entre populations.',
                    ],
                    [
                        'question' => 'Un pesticide qui s’accumule progressivement chez les consommateurs situés en haut d’une chaîne alimentaire illustre :',
                        'choices' => [
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => false],
                            ['choice_text' => 'l’acidification des eaux', 'is_correct' => false],
                            ['choice_text' => 'la bioamplification', 'is_correct' => true],
                            ['choice_text' => 'la fragmentation', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioamplification correspond à l’augmentation de la concentration de certaines substances persistantes le long des niveaux trophiques.',
                    ],
                    [
                        'question' => 'Un poisson absorbe du mercure par ses branchies et son alimentation plus vite qu’il ne l’élimine. Comment nomme-t-on ce phénomène chez cet individu ?',
                        'choices' => [
                            ['choice_text' => 'la bioamplification', 'is_correct' => false],
                            ['choice_text' => 'l’eutrophisation', 'is_correct' => false],
                            ['choice_text' => 'la dégradation', 'is_correct' => false],
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => true],
                        ],
                        'explanation' => 'La bioaccumulation est l’accumulation d’une substance dans un organisme lorsque son absorption dépasse son élimination.',
                    ],
                    [
                        'question' => 'Des arbres sont plantés le long d’un cours d’eau dont les berges s’effondrent. Quel effet attendre de leurs racines ?',
                        'choices' => [
                            ['choice_text' => 'Elles retiennent et stabilisent le sol des berges', 'is_correct' => true],
                            ['choice_text' => 'Elles bloquent l’infiltration de l’eau dans le sol', 'is_correct' => false],
                            ['choice_text' => 'Elles augmentent le ruissellement sur la berge', 'is_correct' => false],
                            ['choice_text' => 'Elles fragilisent le sol en le creusant', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes racinaires renforcent la cohésion du sol et peuvent réduire son entraînement lors des pluies ou des crues.',
                    ],
                    [
                        'question' => 'Une espèce introduite dans une région où elle n’existait pas devient problématique lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'se reproduit mal et reste très rare', 'is_correct' => false],
                            ['choice_text' => 'se propage vite et perturbe les communautés locales', 'is_correct' => true],
                            ['choice_text' => 'occupe une niche vide sans gêner les espèces locales', 'is_correct' => false],
                            ['choice_text' => 'disparaît dès la première saison', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines espèces introduites deviennent envahissantes lorsqu’elles se diffusent fortement et ont des effets écologiques ou économiques importants.',
                    ],
                    [
                        'question' => 'Un pêcheur prélève chaque année plus de poissons que la population n’en produit. Comment qualifier cette pratique ?',
                        'choices' => [
                            ['choice_text' => 'Une exploitation durable', 'is_correct' => false],
                            ['choice_text' => 'Un renouvellement naturel', 'is_correct' => false],
                            ['choice_text' => 'Une surexploitation de la ressource', 'is_correct' => true],
                            ['choice_text' => 'Une régulation écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'On parle de surexploitation quand le prélèvement dépasse la capacité de renouvellement de la ressource.',
                    ],
                    [
                        'question' => 'Un agriculteur réduit l’usage d’engrais sur une parcelle proche d’un lac. L’objectif écologique peut être de limiter :',
                        'choices' => [
                            ['choice_text' => 'l’apport excessif de nutriments au lac', 'is_correct' => true],
                            ['choice_text' => 'l’évaporation de l’eau du lac', 'is_correct' => false],
                            ['choice_text' => 'l’érosion des berges du lac', 'is_correct' => false],
                            ['choice_text' => 'le réchauffement de l’eau du lac', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter le ruissellement d’azote et de phosphore peut réduire le risque d’eutrophisation.',
                    ],
                    [
                        'question' => 'Une ville remplace une pelouse par un parking en béton. Que devient l’eau de pluie sur cette surface ?',
                        'choices' => [
                            ['choice_text' => 'Elle s’infiltre davantage dans le sol', 'is_correct' => false],
                            ['choice_text' => 'Elle s’évapore avant de toucher le sol', 'is_correct' => false],
                            ['choice_text' => 'Elle est stockée dans le béton pour les plantes', 'is_correct' => false],
                            ['choice_text' => 'Elle ruisselle davantage au lieu de s’infiltrer', 'is_correct' => true],
                        ],
                        'explanation' => 'Les surfaces imperméables réduisent l’infiltration et augmentent le ruissellement.',
                    ],
                    [
                        'question' => 'Des larves de plécoptères, sensibles à la pollution, disparaissent d’une rivière. Que peut-on en conclure ?',
                        'choices' => [
                            ['choice_text' => 'La rivière est devenue plus riche en oxygène', 'is_correct' => false],
                            ['choice_text' => 'Le débit de la rivière a doublé', 'is_correct' => false],
                            ['choice_text' => 'La qualité de l’eau s’est dégradée', 'is_correct' => true],
                            ['choice_text' => 'Les plécoptères sont partis se reproduire ailleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plécoptères exigent une eau propre et bien oxygénée : leur disparition indique une dégradation, d’où leur rôle de bioindicateurs.',
                    ],
                    [
                        'question' => 'Que vise la protection d’une zone naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Remplacer les espèces locales par des espèces exotiques', 'is_correct' => false],
                            ['choice_text' => 'Maintenir habitats, populations et fonctions écologiques', 'is_correct' => true],
                            ['choice_text' => 'Transformer le milieu en parc de loisirs', 'is_correct' => false],
                            ['choice_text' => 'Rendre les populations aussi homogènes que possible', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation écologique cherche à maintenir la biodiversité et le fonctionnement des écosystèmes tout en tenant compte des usages humains.',
                    ],
                ],
            ],
            [
                'title' => 'Biodiversité et conservation',
                'description' => 'Richesse spécifique, services écosystémiques, espèces menacées et conservation.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La biodiversité comprend notamment :',
                        'choices' => [
                            ['choice_text' => 'la quantité totale d’individus d’une espèce', 'is_correct' => false],
                            ['choice_text' => 'la variété des paysages d’un territoire', 'is_correct' => false],
                            ['choice_text' => 'la liste des espèces rares d’un pays', 'is_correct' => false],
                            ['choice_text' => 'la variété des gènes, des espèces et des milieux', 'is_correct' => true],
                        ],
                        'explanation' => 'La biodiversité est multidimensionnelle : elle inclut la diversité génétique, spécifique et écosystémique.',
                    ],
                    [
                        'question' => 'Deux populations d’une même espèce de blé portent des gènes différents. Quel niveau de biodiversité est concerné ?',
                        'choices' => [
                            ['choice_text' => 'la diversité des espèces', 'is_correct' => false],
                            ['choice_text' => 'la diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'la diversité des écosystèmes', 'is_correct' => false],
                            ['choice_text' => 'la diversité des habitats', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique correspond aux variations génétiques au sein d’une espèce et entre ses populations.',
                    ],
                    [
                        'question' => 'La pollinisation des cultures par les insectes est un exemple de :',
                        'choices' => [
                            ['choice_text' => 'facteur limitant', 'is_correct' => false],
                            ['choice_text' => 'succession écologique', 'is_correct' => false],
                            ['choice_text' => 'service écosystémique', 'is_correct' => true],
                            ['choice_text' => 'relation de commensalisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les services écosystémiques sont les bénéfices fournis par les écosystèmes aux sociétés humaines ; la pollinisation en fait partie.',
                    ],
                    [
                        'question' => 'Créer une réserve où une espèce menacée peut se reproduire correspond principalement à une mesure de :',
                        'choices' => [
                            ['choice_text' => 'domestication', 'is_correct' => false],
                            ['choice_text' => 'exploitation', 'is_correct' => false],
                            ['choice_text' => 'fragmentation', 'is_correct' => false],
                            ['choice_text' => 'conservation', 'is_correct' => true],
                        ],
                        'explanation' => 'La création d’aires protégées est une stratégie de conservation destinée à préserver des espèces et leurs habitats.',
                    ],
                    [
                        'question' => 'Une maladie nouvelle frappe un verger. Quel avantage apporte une forte diversité génétique entre les arbres ?',
                        'choices' => [
                            ['choice_text' => 'Certaines variantes peuvent mieux résister à la maladie', 'is_correct' => true],
                            ['choice_text' => 'Les arbres deviennent identiques et plus robustes', 'is_correct' => false],
                            ['choice_text' => 'La maladie cesse de se transmettre entre arbres', 'is_correct' => false],
                            ['choice_text' => 'Les mutations s’arrêtent dans la population', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diversité génétique élevée offre davantage de variantes, dont certaines peuvent mieux résister à une pression nouvelle.',
                    ],
                    [
                        'question' => 'Une espèce est dite endémique d’une région lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'a été introduite récemment dans cette région', 'is_correct' => false],
                            ['choice_text' => 'n’existe naturellement que dans cette région', 'is_correct' => true],
                            ['choice_text' => 'y est abondante mais existe aussi ailleurs', 'is_correct' => false],
                            ['choice_text' => 'migre chaque année dans cette région', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce endémique possède une aire naturelle limitée à une région déterminée.',
                    ],
                    [
                        'question' => 'Le braconnage excessif d’une espèce peut réduire sa population et donc :',
                        'choices' => [
                            ['choice_text' => 'renforcer sa diversité génétique', 'is_correct' => false],
                            ['choice_text' => 'accroître la capacité de charge du milieu', 'is_correct' => false],
                            ['choice_text' => 'rendre l’espèce plus résistante aux maladies', 'is_correct' => false],
                            ['choice_text' => 'augmenter son risque d’extinction', 'is_correct' => true],
                        ],
                        'explanation' => 'Une forte mortalité liée à la surexploitation peut entraîner un déclin démographique et accroître le risque d’extinction.',
                    ],
                    [
                        'question' => 'Un jardin zoologique élève des tortues menacées pour les relâcher plus tard. De quel type de conservation s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Une conservation ex situ', 'is_correct' => true],
                            ['choice_text' => 'Une conservation in situ', 'is_correct' => false],
                            ['choice_text' => 'Une protection d’habitat naturel', 'is_correct' => false],
                            ['choice_text' => 'Une exploitation durable', 'is_correct' => false],
                        ],
                        'explanation' => 'Ex situ signifie « hors du site » : les animaux sont conservés hors de leur milieu naturel, par exemple dans un zoo.',
                    ],
                    [
                        'question' => 'Quelle liste classe les espèces selon leur risque d’extinction ?',
                        'choices' => [
                            ['choice_text' => 'La convention de Ramsar', 'is_correct' => false],
                            ['choice_text' => 'La Liste rouge de l’UICN', 'is_correct' => true],
                            ['choice_text' => 'Le protocole de Kyoto', 'is_correct' => false],
                            ['choice_text' => 'La charte de l’environnement', 'is_correct' => false],
                        ],
                        'explanation' => 'La Liste rouge de l’UICN classe les espèces selon leur risque d’extinction, de « préoccupation mineure » à « éteinte ».',
                    ],
                    [
                        'question' => 'Une équipe protège une forêt et recense chaque année ses singes. Quel est l’intérêt de ce double travail ?',
                        'choices' => [
                            ['choice_text' => 'Le suivi dispense de protéger l’habitat', 'is_correct' => false],
                            ['choice_text' => 'Les effectifs restent stables sans intervention', 'is_correct' => false],
                            ['choice_text' => 'Préserver l’habitat tout en vérifiant l’évolution des effectifs', 'is_correct' => true],
                            ['choice_text' => 'Le comptage remplace la protection de la forêt', 'is_correct' => false],
                        ],
                        'explanation' => 'La protection des habitats et le suivi démographique sont complémentaires pour évaluer l’état d’une espèce et l’efficacité des mesures.',
                    ],
                ],
            ],
            [
                'title' => 'Mesurer et interpréter un milieu',
                'description' => 'Échantillonnage, densité, transects, quadrats et interprétation simple de données écologiques.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Pour compter les plantes dans une prairie sans parcourir toute la surface, on peut utiliser :',
                        'choices' => [
                            ['choice_text' => 'un pluviomètre', 'is_correct' => false],
                            ['choice_text' => 'un luxmètre', 'is_correct' => false],
                            ['choice_text' => 'des quadrats', 'is_correct' => true],
                            ['choice_text' => 'un pH-mètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les quadrats sont des surfaces délimitées utilisées pour échantillonner les organismes, notamment les végétaux sessiles.',
                    ],
                    [
                        'question' => 'Dans un quadrat de 2 m², on compte 30 plantes. La densité estimée est de :',
                        'choices' => [
                            ['choice_text' => '15 plantes/m²', 'is_correct' => true],
                            ['choice_text' => '60 plantes/m²', 'is_correct' => false],
                            ['choice_text' => '30 plantes/m²', 'is_correct' => false],
                            ['choice_text' => '2 plantes/m²', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité est 30 ÷ 2 = 15 plantes par mètre carré.',
                    ],
                    [
                        'question' => 'Un transect est une ligne tracée à travers un milieu. À quoi sert-il surtout ?',
                        'choices' => [
                            ['choice_text' => 'À mesurer la masse d’une seule espèce', 'is_correct' => false],
                            ['choice_text' => 'À compter les individus d’un point précis', 'is_correct' => false],
                            ['choice_text' => 'À isoler les individus d’une population', 'is_correct' => false],
                            ['choice_text' => 'À suivre les changements le long d’un gradient', 'is_correct' => true],
                        ],
                        'explanation' => 'Un transect suit une ligne ou un axe d’observation afin d’étudier les changements le long d’un espace.',
                    ],
                    [
                        'question' => 'Pour décrire une prairie, Hajar place ses quadrats à vingt endroits différents. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'Effacer les variations naturelles entre zones', 'is_correct' => false],
                            ['choice_text' => 'Mieux représenter les variations du milieu', 'is_correct' => true],
                            ['choice_text' => 'Rendre la biodiversité identique partout', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le traitement statistique des données', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition améliore la représentativité de l’échantillonnage et permet d’estimer la variabilité du milieu.',
                    ],
                    [
                        'question' => 'Un échantillon contient 4 espèces avec 10, 10, 10 et 10 individus. La richesse spécifique vaut :',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique correspond au nombre d’espèces, donc ici 4.',
                    ],
                    [
                        'question' => 'Le site A compte 4 espèces à 10 individus chacune. Le site B compte 8 espèces, dont une représente 90 % des individus. Que peut-on dire du site B ?',
                        'choices' => [
                            ['choice_text' => 'Moins riche en espèces que le site A', 'is_correct' => false],
                            ['choice_text' => 'Aussi riche et aussi équilibré que le site A', 'is_correct' => false],
                            ['choice_text' => 'Plus riche en espèces, mais abondances moins équilibrées', 'is_correct' => true],
                            ['choice_text' => 'Plus riche et plus équilibré que le site A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le site B a plus d’espèces (8 contre 4), mais une espèce domine : ses abondances sont donc moins équilibrées que celles du site A.',
                    ],
                    [
                        'question' => 'Une chercheuse mesure la température de l’eau à 10 h, 14 h et 18 h. Cette répétition dans le temps permet notamment d’étudier :',
                        'choices' => [
                            ['choice_text' => 'la variation spatiale du milieu', 'is_correct' => false],
                            ['choice_text' => 'la variation temporelle', 'is_correct' => true],
                            ['choice_text' => 'la richesse spécifique', 'is_correct' => false],
                            ['choice_text' => 'la capacité de charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Des mesures répétées à différents moments permettent de caractériser les variations temporelles d’un facteur écologique.',
                    ],
                    [
                        'question' => 'On capture 50 poissons dans un étang, on les marque, puis on les relâche. Une seconde capture donne 40 poissons, dont 10 sont marqués. Quel est l’effectif estimé de la population ?',
                        'choices' => [
                            ['choice_text' => '200 poissons', 'is_correct' => true],
                            ['choice_text' => '90 poissons', 'is_correct' => false],
                            ['choice_text' => '250 poissons', 'is_correct' => false],
                            ['choice_text' => '500 poissons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 10 poissons marqués représentent un quart de la seconde capture ; les 50 poissons marqués correspondent donc au quart de la population, soit 200 poissons.',
                    ],
                    [
                        'question' => 'Un étudiant place ses quadrats uniquement sur les zones faciles d’accès, près du sentier. Quel risque cela fait-il courir à ses résultats ?',
                        'choices' => [
                            ['choice_text' => 'Les rendre plus fiables pour l’ensemble du site', 'is_correct' => false],
                            ['choice_text' => 'Supprimer l’effet de la saison sur les mesures', 'is_correct' => false],
                            ['choice_text' => 'Surestimer les espèces favorisées par ces zones', 'is_correct' => true],
                            ['choice_text' => 'Doubler artificiellement la richesse du site', 'is_correct' => false],
                        ],
                        'explanation' => 'Un échantillon non représentatif peut produire des estimations biaisées.',
                    ],
                    [
                        'question' => 'Un graphique montre que la richesse spécifique augmente jusqu’à 25 °C, puis diminue. Quelle conclusion est la mieux justifiée ?',
                        'choices' => [
                            ['choice_text' => '25 °C est l’optimum de l’ensemble des espèces vivantes', 'is_correct' => false],
                            ['choice_text' => 'La température ne joue pas de rôle sur la richesse', 'is_correct' => false],
                            ['choice_text' => 'Les espèces disparaissent au-dessus de 25 °C', 'is_correct' => false],
                            ['choice_text' => 'La richesse observée culmine vers 25 °C dans ces conditions', 'is_correct' => true],
                        ],
                        'explanation' => 'Il faut limiter la conclusion aux conditions et aux organismes étudiés : les données indiquent un maximum observé autour de 25 °C.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale d’écologie',
                'description' => 'Quiz de synthèse : interactions, cycles, populations, réseaux trophiques et conservation.',
                'settings' => ['duration' => 20, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Dans un pré, une plante est mangée par un criquet, lui-même mangé par un lézard. Quel énoncé est correct ?',
                        'choices' => [
                            ['choice_text' => 'La plante est consommatrice primaire, le criquet producteur', 'is_correct' => false],
                            ['choice_text' => 'La plante est productrice, le criquet consommateur primaire', 'is_correct' => true],
                            ['choice_text' => 'Le criquet est décomposeur, le lézard consommateur primaire', 'is_correct' => false],
                            ['choice_text' => 'Le lézard est producteur, le criquet consommateur secondaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La plante fabrique sa matière (producteur) ; le criquet qui la mange est consommateur primaire et le lézard consommateur secondaire.',
                    ],
                    [
                        'question' => 'Une population possède 300 individus. En une année, 40 naissent, 25 meurent, 10 immigrent et 5 émigrent. Quel est l’effectif final ?',
                        'choices' => [
                            ['choice_text' => '290', 'is_correct' => false],
                            ['choice_text' => '350', 'is_correct' => false],
                            ['choice_text' => '320', 'is_correct' => true],
                            ['choice_text' => '305', 'is_correct' => false],
                        ],
                        'explanation' => 'Effectif final = 300 + 40 − 25 + 10 − 5 = 320.',
                    ],
                    [
                        'question' => 'Une région reçoit moins de 250 mm de pluie par an et sa végétation est clairsemée et adaptée à la sécheresse. De quel biome s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'une forêt tropicale humide', 'is_correct' => false],
                            ['choice_text' => 'une forêt boréale', 'is_correct' => false],
                            ['choice_text' => 'une prairie tempérée', 'is_correct' => false],
                            ['choice_text' => 'un biome désertique', 'is_correct' => true],
                        ],
                        'explanation' => 'Moins de 250 mm de pluie par an et une végétation rare caractérisent les déserts.',
                    ],
                    [
                        'question' => 'Une région connaît une longue sécheresse. Le premier facteur limitant pour de nombreuses plantes peut être :',
                        'choices' => [
                            ['choice_text' => 'la disponibilité en eau', 'is_correct' => true],
                            ['choice_text' => 'l’intensité de la lumière', 'is_correct' => false],
                            ['choice_text' => 'la température de l’air', 'is_correct' => false],
                            ['choice_text' => 'le nombre de pollinisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau devient une ressource limitante lorsque sa disponibilité descend sous les besoins de nombreuses plantes.',
                    ],
                    [
                        'question' => 'Un agriculteur plante des haies pour héberger des coccinelles, qui mangent les pucerons de ses cultures. Quel principe écologique exploite-t-il ?',
                        'choices' => [
                            ['choice_text' => 'la bioamplification des pesticides', 'is_correct' => false],
                            ['choice_text' => 'la prédation naturelle des ravageurs', 'is_correct' => true],
                            ['choice_text' => 'l’allélopathie entre cultures et haies', 'is_correct' => false],
                            ['choice_text' => 'le mutualisme entre pucerons et cultures', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coccinelles prédatent les pucerons : l’agriculteur s’appuie sur une relation de prédation pour limiter les ravageurs.',
                    ],
                    [
                        'question' => 'Dans une mare, quels paramètres sont tous deux des facteurs abiotiques ?',
                        'choices' => [
                            ['choice_text' => 'la prédation et la compétition', 'is_correct' => false],
                            ['choice_text' => 'la lumière et le parasitisme', 'is_correct' => false],
                            ['choice_text' => 'la température et le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'la lumière et la température de l’eau', 'is_correct' => true],
                        ],
                        'explanation' => 'La lumière et la température sont des éléments non vivants du milieu ; prédation, compétition, parasitisme et mutualisme sont des interactions biotiques.',
                    ],
                    [
                        'question' => 'Une espèce utilise une ressource surtout la nuit et une autre surtout le jour. Cette séparation peut :',
                        'choices' => [
                            ['choice_text' => 'réduire le chevauchement de leurs niches', 'is_correct' => true],
                            ['choice_text' => 'augmenter la compétition entre elles', 'is_correct' => false],
                            ['choice_text' => 'faire disparaître la ressource', 'is_correct' => false],
                            ['choice_text' => 'fusionner leurs deux niches', 'is_correct' => false],
                        ],
                        'explanation' => 'Une utilisation différente du temps ou de l’espace peut réduire le chevauchement des niches et donc la compétition.',
                    ],
                    [
                        'question' => 'Les loutres de mer mangent les oursins, qui broutent le kelp. Que devient la forêt de kelp si les loutres disparaissent ?',
                        'choices' => [
                            ['choice_text' => 'Elle s’étend, car les oursins sont moins nombreux', 'is_correct' => false],
                            ['choice_text' => 'Elle reste stable, la chaîne n’étant pas touchée', 'is_correct' => false],
                            ['choice_text' => 'Elle disparaît avec les loutres, qui s’en nourrissent', 'is_correct' => false],
                            ['choice_text' => 'Elle régresse, car les oursins se multiplient', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans loutres, les oursins prolifèrent et broutent le kelp : une espèce clé peut influencer tout un réseau trophique.',
                    ],
                    [
                        'question' => 'Une réserve naturelle protège une forêt et un corridor relie cette forêt à une autre. L’intérêt du corridor est notamment de :',
                        'choices' => [
                            ['choice_text' => 'limiter les échanges entre les deux forêts', 'is_correct' => false],
                            ['choice_text' => 'réduire la dispersion des graines', 'is_correct' => false],
                            ['choice_text' => 'faciliter les déplacements entre populations', 'is_correct' => true],
                            ['choice_text' => 'bloquer le passage des prédateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors écologiques peuvent améliorer la connectivité entre habitats et faciliter les déplacements ou les échanges entre populations.',
                    ],
                    [
                        'question' => 'Un lac pollué passe de 12 à 5 espèces de poissons en dix ans. Que montre ce suivi ?',
                        'choices' => [
                            ['choice_text' => 'Une perte de 5 espèces, soit environ 42 %', 'is_correct' => false],
                            ['choice_text' => 'Une perte de 7 espèces, soit environ 58 %', 'is_correct' => true],
                            ['choice_text' => 'Une perte de 7 espèces, soit environ 140 %', 'is_correct' => false],
                            ['choice_text' => 'Une perte de 12 espèces, soit environ 100 %', 'is_correct' => false],
                        ],
                        'explanation' => '12 − 5 = 7 espèces perdues, et 7 ÷ 12 donne environ 58 % de la richesse initiale.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'] ?? ['duration' => 10, 'passing_score' => 80];

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

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $questionIndex + 1,
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