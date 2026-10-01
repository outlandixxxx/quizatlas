<?php

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
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'un organe', 'is_correct' => false],
                            ['choice_text' => 'une espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème regroupe les êtres vivants et les éléments non vivants d’un milieu ainsi que leurs interactions.',
                    ],
                    [
                        'question' => 'Une population correspond à :',
                        'choices' => [
                            ['choice_text' => 'des individus de la même espèce vivant dans une zone donnée', 'is_correct' => true],
                            ['choice_text' => 'toutes les espèces d’un continent', 'is_correct' => false],
                            ['choice_text' => 'uniquement les végétaux d’un milieu', 'is_correct' => false],
                            ['choice_text' => 'un ensemble de facteurs climatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'En écologie, une population rassemble les individus d’une même espèce qui occupent une aire donnée à un moment donné.',
                    ],
                    [
                        'question' => 'Lequel est un facteur abiotique ?',
                        'choices' => [
                            ['choice_text' => 'la température', 'is_correct' => true],
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'la compétition', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur abiotique est un élément non vivant du milieu, comme la température, la lumière, le pH ou l’humidité.',
                    ],
                    [
                        'question' => 'Le rôle qu’une espèce joue dans son environnement est appelé :',
                        'choices' => [
                            ['choice_text' => 'sa niche écologique', 'is_correct' => true],
                            ['choice_text' => 'son génome', 'is_correct' => false],
                            ['choice_text' => 'sa taxonomie', 'is_correct' => false],
                            ['choice_text' => 'son caryotype', 'is_correct' => false],
                        ],
                        'explanation' => 'La niche écologique décrit notamment les ressources utilisées et le rôle fonctionnel d’une espèce dans son milieu.',
                    ],
                    [
                        'question' => 'Deux espèces utilisent exactement la même ressource rare. Le phénomène attendu est principalement :',
                        'choices' => [
                            ['choice_text' => 'la compétition', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la succession', 'is_correct' => false],
                            ['choice_text' => 'la symbiose obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque plusieurs organismes recherchent une même ressource limitée, ils peuvent entrer en compétition.',
                    ],
                    [
                        'question' => 'Un étang contient algues, poissons, bactéries, eau, vase, sels minéraux et lumière. Cet ensemble illustre :',
                        'choices' => [
                            ['choice_text' => 'un écosystème', 'is_correct' => true],
                            ['choice_text' => 'une communauté uniquement', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'une niche', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence simultanée des composantes biotiques et abiotiques caractérise l’écosystème.',
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
                        'question' => 'Une espèce qui peut vivre seulement dans une plage étroite de température est dite :',
                        'choices' => [
                            ['choice_text' => 'sténotherme', 'is_correct' => true],
                            ['choice_text' => 'euryhaline', 'is_correct' => false],
                            ['choice_text' => 'photosynthétique', 'is_correct' => false],
                            ['choice_text' => 'omnivore', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce sténotherme tolère une gamme de températures relativement étroite.',
                    ],
                    [
                        'question' => 'Pourquoi la lumière est-elle souvent un facteur écologique majeur dans un milieu terrestre ?',
                        'choices' => [
                            ['choice_text' => 'Elle fournit l’énergie nécessaire à la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace l’eau pour les racines', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme directement les animaux en producteurs', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute compétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Chez les végétaux chlorophylliens, la lumière fournit l’énergie utilisée pour la photosynthèse, à la base de nombreuses chaînes alimentaires.',
                    ],
                    [
                        'question' => 'Dans une mare, les grenouilles, escargots, algues et insectes constituent principalement :',
                        'choices' => [
                            ['choice_text' => 'la communauté biologique', 'is_correct' => true],
                            ['choice_text' => 'le climat local', 'is_correct' => false],
                            ['choice_text' => 'le substrat minéral', 'is_correct' => false],
                            ['choice_text' => 'la niche d’une seule espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces organismes appartiennent à différentes populations ; leur ensemble forme la communauté du milieu.',
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
                            ['choice_text' => 'la prédation', 'is_correct' => true],
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'le commensalisme', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme végétal', 'is_correct' => false],
                        ],
                        'explanation' => 'La prédation implique qu’un organisme capture et consomme un autre organisme.',
                    ],
                    [
                        'question' => 'Des abeilles obtiennent du nectar tandis que les fleurs sont pollinisées. Il s’agit d’un :',
                        'choices' => [
                            ['choice_text' => 'mutualisme', 'is_correct' => true],
                            ['choice_text' => 'parasitisme', 'is_correct' => false],
                            ['choice_text' => 'antagonisme direct', 'is_correct' => false],
                            ['choice_text' => 'neutralisme obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce cas, les deux partenaires bénéficient de l’interaction : l’abeille obtient une ressource et la plante est pollinisée.',
                    ],
                    [
                        'question' => 'Un ténia vivant dans l’intestin de son hôte illustre :',
                        'choices' => [
                            ['choice_text' => 'le parasitisme', 'is_correct' => true],
                            ['choice_text' => 'le mutualisme', 'is_correct' => false],
                            ['choice_text' => 'la prédation aérienne', 'is_correct' => false],
                            ['choice_text' => 'le commensalisme obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parasite bénéficie de l’hôte tandis que celui-ci subit un effet négatif.',
                    ],
                    [
                        'question' => 'Une relation où une espèce bénéficie et l’autre n’est ni favorisée ni défavorisée est appelée :',
                        'choices' => [
                            ['choice_text' => 'commensalisme', 'is_correct' => true],
                            ['choice_text' => 'prédation', 'is_correct' => false],
                            ['choice_text' => 'parasitisme', 'is_correct' => false],
                            ['choice_text' => 'compétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Le commensalisme correspond à un bénéfice pour une espèce sans effet important pour l’autre.',
                    ],
                    [
                        'question' => 'Deux cerfs mâles se disputent l’accès aux femelles. Cette interaction est :',
                        'choices' => [
                            ['choice_text' => 'une compétition intraspécifique', 'is_correct' => true],
                            ['choice_text' => 'un mutualisme', 'is_correct' => false],
                            ['choice_text' => 'un commensalisme', 'is_correct' => false],
                            ['choice_text' => 'une décomposition', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme les deux individus appartiennent à la même espèce, il s’agit d’une compétition intraspécifique.',
                    ],
                    [
                        'question' => 'Un champignon mycorhizien échange des minéraux contre des sucres avec une plante. Cette association est souvent :',
                        'choices' => [
                            ['choice_text' => 'mutualiste', 'is_correct' => true],
                            ['choice_text' => 'parasitaire dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'compétitive uniquement', 'is_correct' => false],
                            ['choice_text' => 'neutre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mycorhizes fournissent notamment des minéraux et de l’eau à la plante, qui fournit en retour des composés carbonés au champignon.',
                    ],
                    [
                        'question' => 'Quel exemple décrit le mieux un facteur limitant ?',
                        'choices' => [
                            ['choice_text' => 'un manque d’eau qui empêche une population végétale d’augmenter', 'is_correct' => true],
                            ['choice_text' => 'une couleur observée au microscope', 'is_correct' => false],
                            ['choice_text' => 'la forme d’un chromosome', 'is_correct' => false],
                            ['choice_text' => 'le nom scientifique d’une espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur limitant réduit la croissance, la survie ou la reproduction d’une population.',
                    ],
                    [
                        'question' => 'Quand deux espèces exploitent une ressource différente au lieu de la partager, la compétition peut :',
                        'choices' => [
                            ['choice_text' => 'diminuer', 'is_correct' => true],
                            ['choice_text' => 'devenir nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'transformer les espèces en producteurs', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les prédateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction du chevauchement des ressources utilisées peut diminuer la compétition entre espèces.',
                    ],
                    [
                        'question' => 'Un poisson nettoyeur retire des parasites de la peau d’un gros poisson, qui lui fournit une source de nourriture. Cela correspond à :',
                        'choices' => [
                            ['choice_text' => 'une interaction mutualiste', 'is_correct' => true],
                            ['choice_text' => 'une prédation stricte', 'is_correct' => false],
                            ['choice_text' => 'un commensalisme certain', 'is_correct' => false],
                            ['choice_text' => 'une compétition directe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poisson nettoyeur se nourrit et le gros poisson bénéficie d’un retrait de parasites : les deux partenaires peuvent donc tirer avantage de l’interaction.',
                    ],
                    [
                        'question' => 'Une plante libère des substances chimiques qui freinent la croissance de plantes voisines. Ce phénomène peut être qualifié de :',
                        'choices' => [
                            ['choice_text' => 'allélopathie', 'is_correct' => true],
                            ['choice_text' => 'migration', 'is_correct' => false],
                            ['choice_text' => 'prédation animale', 'is_correct' => false],
                            ['choice_text' => 'mimétisme', 'is_correct' => false],
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
                        'question' => 'Dans une prairie, l’herbe occupe généralement le niveau trophique de :',
                        'choices' => [
                            ['choice_text' => 'producteur primaire', 'is_correct' => true],
                            ['choice_text' => 'consommateur primaire', 'is_correct' => false],
                            ['choice_text' => 'consommateur secondaire', 'is_correct' => false],
                            ['choice_text' => 'décomposeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plantes produisent de la matière organique grâce à la photosynthèse et constituent les producteurs primaires.',
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
                        'question' => 'Les champignons et nombreuses bactéries jouent un rôle essentiel de :',
                        'choices' => [
                            ['choice_text' => 'décomposeurs', 'is_correct' => true],
                            ['choice_text' => 'producteurs de lumière', 'is_correct' => false],
                            ['choice_text' => 'prédateurs supérieurs', 'is_correct' => false],
                            ['choice_text' => 'pollinisateurs obligatoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décomposeurs transforment la matière organique morte et participent au recyclage des éléments minéraux.',
                    ],
                    [
                        'question' => 'Dans une chaîne alimentaire, l’énergie disponible diminue généralement quand on monte les niveaux trophiques parce que :',
                        'choices' => [
                            ['choice_text' => 'une grande partie est dissipée sous forme de chaleur', 'is_correct' => true],
                            ['choice_text' => 'les producteurs consomment toute l’énergie', 'is_correct' => false],
                            ['choice_text' => 'les décomposeurs détruisent toute l’énergie', 'is_correct' => false],
                            ['choice_text' => 'la matière ne peut jamais être transférée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une partie importante de l’énergie est utilisée par les organismes et dissipée sous forme de chaleur à chaque transfert trophique.',
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
                            ['choice_text' => 'un réseau trophique', 'is_correct' => true],
                            ['choice_text' => 'un cycle biogéochimique', 'is_correct' => false],
                            ['choice_text' => 'une niche fondamentale', 'is_correct' => false],
                            ['choice_text' => 'une population', 'is_correct' => false],
                        ],
                        'explanation' => 'Un réseau trophique rassemble plusieurs chaînes alimentaires qui se croisent au sein d’un écosystème.',
                    ],
                    [
                        'question' => 'Pourquoi les grands prédateurs sont-ils souvent moins nombreux que les producteurs ?',
                        'choices' => [
                            ['choice_text' => 'Parce que moins d’énergie est disponible aux niveaux trophiques supérieurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ne respirent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne se reproduisent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours solitaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’énergie à chaque transfert limite généralement la biomasse et le nombre d’individus des niveaux trophiques supérieurs.',
                    ],
                    [
                        'question' => 'Une matière minérale comme le nitrate peut être réutilisée par une plante puis retourner au sol après décomposition. Cela illustre :',
                        'choices' => [
                            ['choice_text' => 'un cycle de la matière', 'is_correct' => true],
                            ['choice_text' => 'une perte définitive de matière', 'is_correct' => false],
                            ['choice_text' => 'un transfert uniquement énergétique', 'is_correct' => false],
                            ['choice_text' => 'une migration animale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments chimiques circulent entre organismes et environnement dans des cycles biogéochimiques.',
                    ],
                    [
                        'question' => 'Dans une chaîne simple, si un prédateur disparaît, une conséquence possible est :',
                        'choices' => [
                            ['choice_text' => 'une augmentation de certaines de ses proies', 'is_correct' => true],
                            ['choice_text' => 'la disparition immédiate de tous les producteurs', 'is_correct' => false],
                            ['choice_text' => 'l’arrêt de la photosynthèse mondiale', 'is_correct' => false],
                            ['choice_text' => 'la création d’une nouvelle espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'La disparition d’un prédateur peut modifier les effectifs de ses proies et provoquer des effets en cascade dans le réseau trophique.',
                    ],
                    [
                        'question' => 'Quelle formulation distingue correctement matière et énergie dans un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'La matière est recyclée alors que l’énergie circule et est dissipée', 'is_correct' => true],
                            ['choice_text' => 'L’énergie est recyclée indéfiniment sans pertes', 'is_correct' => false],
                            ['choice_text' => 'La matière disparaît à chaque niveau trophique', 'is_correct' => false],
                            ['choice_text' => 'Matière et énergie suivent exactement le même cycle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments de la matière sont recyclés, tandis que l’énergie entre généralement sous forme de rayonnement et finit en grande partie dissipée sous forme de chaleur.',
                    ],
                ],
            ],
            [
                'title' => 'Populations et dynamique écologique',
                'description' => 'Effectifs, densité, natalité, mortalité et capacité de charge.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une population passe de 200 à 260 individus en un an. Son augmentation absolue est de :',
                        'choices' => [
                            ['choice_text' => '60 individus', 'is_correct' => true],
                            ['choice_text' => '30 individus', 'is_correct' => false],
                            ['choice_text' => '460 individus', 'is_correct' => false],
                            ['choice_text' => '1,3 individu', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation absolue est 260 − 200 = 60 individus.',
                    ],
                    [
                        'question' => 'Une population de 500 lapins vit sur 25 hectares. Sa densité moyenne est de :',
                        'choices' => [
                            ['choice_text' => '20 lapins par hectare', 'is_correct' => true],
                            ['choice_text' => '25 lapins par hectare', 'is_correct' => false],
                            ['choice_text' => '12,5 lapins par hectare', 'is_correct' => false],
                            ['choice_text' => '500 lapins par hectare', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité est 500 ÷ 25 = 20 lapins par hectare.',
                    ],
                    [
                        'question' => 'Si, pendant une année, les naissances sont plus nombreuses que les décès et qu’il n’y a pas de migration, l’effectif :',
                        'choices' => [
                            ['choice_text' => 'augmente', 'is_correct' => true],
                            ['choice_text' => 'diminue forcément', 'is_correct' => false],
                            ['choice_text' => 'reste identique', 'is_correct' => false],
                            ['choice_text' => 'devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans migration, plus de naissances que de décès entraîne une augmentation de l’effectif.',
                    ],
                    [
                        'question' => 'L’immigration correspond à :',
                        'choices' => [
                            ['choice_text' => 'l’arrivée d’individus dans une population', 'is_correct' => true],
                            ['choice_text' => 'le départ d’individus', 'is_correct' => false],
                            ['choice_text' => 'la naissance de nouveaux individus', 'is_correct' => false],
                            ['choice_text' => 'la mort des individus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immigration augmente potentiellement l’effectif par l’arrivée d’individus.',
                    ],
                    [
                        'question' => 'Quand une population atteint un effectif relativement stable autour d’une valeur soutenable par le milieu, on peut parler de :',
                        'choices' => [
                            ['choice_text' => 'capacité de charge', 'is_correct' => true],
                            ['choice_text' => 'mutation', 'is_correct' => false],
                            ['choice_text' => 'spéciation', 'is_correct' => false],
                            ['choice_text' => 'migration obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité de charge est l’effectif maximal qu’un environnement peut soutenir durablement dans des conditions données.',
                    ],
                    [
                        'question' => 'Une population de 80 oiseaux compte 12 naissances et 20 décès sur une période donnée, sans migration. Son effectif final est :',
                        'choices' => [
                            ['choice_text' => '72', 'is_correct' => true],
                            ['choice_text' => '88', 'is_correct' => false],
                            ['choice_text' => '68', 'is_correct' => false],
                            ['choice_text' => '112', 'is_correct' => false],
                        ],
                        'explanation' => 'Effectif final = 80 + 12 − 20 = 72 oiseaux.',
                    ],
                    [
                        'question' => 'Quelle situation représente une limitation dépendante de la densité ?',
                        'choices' => [
                            ['choice_text' => 'la transmission d’une maladie augmente lorsque les individus sont très nombreux', 'is_correct' => true],
                            ['choice_text' => 'une tempête qui frappe une zone quelle que soit sa densité', 'is_correct' => false],
                            ['choice_text' => 'une éruption volcanique régionale', 'is_correct' => false],
                            ['choice_text' => 'une gelée exceptionnelle indépendante de l’effectif', 'is_correct' => false],
                        ],
                        'explanation' => 'Les facteurs dépendants de la densité ont souvent un effet plus marqué lorsque la population devient dense, par exemple la transmission des maladies.',
                    ],
                    [
                        'question' => 'Au début d’une colonisation, une population peut croître rapidement lorsque :',
                        'choices' => [
                            ['choice_text' => 'les ressources sont abondantes et les contraintes faibles', 'is_correct' => true],
                            ['choice_text' => 'la mortalité dépasse toujours la natalité', 'is_correct' => false],
                            ['choice_text' => 'la capacité de charge est déjà dépassée', 'is_correct' => false],
                            ['choice_text' => 'tous les individus quittent la zone', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte disponibilité des ressources et une faible pression limitante favorisent une croissance rapide.',
                    ],
                    [
                        'question' => 'Un graphique montre une croissance en S qui se stabilise. Cette forme est compatible avec :',
                        'choices' => [
                            ['choice_text' => 'une croissance logistique', 'is_correct' => true],
                            ['choice_text' => 'une extinction instantanée', 'is_correct' => false],
                            ['choice_text' => 'une croissance sans limite', 'is_correct' => false],
                            ['choice_text' => 'un cycle lunaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance logistique augmente rapidement puis ralentit sous l’effet des limites du milieu, jusqu’à une stabilisation relative.',
                    ],
                    [
                        'question' => 'Pourquoi une estimation de population répétée dans le temps est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de suivre les tendances démographiques', 'is_correct' => true],
                            ['choice_text' => 'Elle donne automatiquement l’identité génétique de chaque individu', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les facteurs écologiques', 'is_correct' => false],
                            ['choice_text' => 'Elle prouve qu’une espèce ne peut jamais disparaître', 'is_correct' => false],
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
                            ['choice_text' => 'l’évaporation', 'is_correct' => true],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'la précipitation', 'is_correct' => false],
                            ['choice_text' => 'l’infiltration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation transforme l’eau liquide en vapeur, notamment sous l’effet du rayonnement solaire.',
                    ],
                    [
                        'question' => 'La condensation dans l’atmosphère participe à la formation :',
                        'choices' => [
                            ['choice_text' => 'des nuages', 'is_correct' => true],
                            ['choice_text' => 'des racines', 'is_correct' => false],
                            ['choice_text' => 'des sols', 'is_correct' => false],
                            ['choice_text' => 'des os', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau se refroidit et se condense en fines gouttelettes ou cristaux, contribuant à la formation des nuages.',
                    ],
                    [
                        'question' => 'Le carbone atmosphérique est retiré du CO₂ par les végétaux principalement grâce à :',
                        'choices' => [
                            ['choice_text' => 'la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'la digestion', 'is_correct' => false],
                            ['choice_text' => 'la fermentation animale', 'is_correct' => false],
                            ['choice_text' => 'la transpiration animale', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse utilise le CO₂ pour fabriquer de la matière organique.',
                    ],
                    [
                        'question' => 'La combustion de charbon et de pétrole augmente généralement :',
                        'choices' => [
                            ['choice_text' => 'le CO₂ atmosphérique', 'is_correct' => true],
                            ['choice_text' => 'l’oxygène atmosphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'le phosphore marin uniquement', 'is_correct' => false],
                            ['choice_text' => 'la biomasse forestière', 'is_correct' => false],
                        ],
                        'explanation' => 'La combustion des combustibles fossiles libère du carbone stocké sous forme de CO₂.',
                    ],
                    [
                        'question' => 'La fixation de l’azote atmosphérique dans une forme utilisable par les organismes est réalisée notamment par :',
                        'choices' => [
                            ['choice_text' => 'certaines bactéries', 'is_correct' => true],
                            ['choice_text' => 'tous les mammifères', 'is_correct' => false],
                            ['choice_text' => 'les roches uniquement', 'is_correct' => false],
                            ['choice_text' => 'les insectes exclusivement', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines bactéries peuvent fixer l’azote atmosphérique et contribuer à son incorporation dans des composés utilisables par les organismes.',
                    ],
                    [
                        'question' => 'Quel processus retourne du carbone vers l’atmosphère chez les organismes vivants ?',
                        'choices' => [
                            ['choice_text' => 'la respiration cellulaire', 'is_correct' => true],
                            ['choice_text' => 'la pollinisation', 'is_correct' => false],
                            ['choice_text' => 'la germination seulement', 'is_correct' => false],
                            ['choice_text' => 'l’absorption minérale', 'is_correct' => false],
                        ],
                        'explanation' => 'La respiration cellulaire libère du CO₂ lors de l’utilisation des molécules organiques.',
                    ],
                    [
                        'question' => 'Après de fortes pluies, une partie de l’eau pénètre dans le sol. Il s’agit de :',
                        'choices' => [
                            ['choice_text' => 'l’infiltration', 'is_correct' => true],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'la sublimation', 'is_correct' => false],
                            ['choice_text' => 'la transpiration animale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’infiltration correspond à la pénétration de l’eau dans le sol.',
                    ],
                    [
                        'question' => 'Pourquoi les décomposeurs sont-ils importants pour les cycles biogéochimiques ?',
                        'choices' => [
                            ['choice_text' => 'Ils libèrent des éléments minéraux à partir de matière organique morte', 'is_correct' => true],
                            ['choice_text' => 'Ils créent toute l’énergie solaire', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toujours les plantes de pousser', 'is_correct' => false],
                            ['choice_text' => 'Ils arrêtent le cycle de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition restitue des éléments chimiques au milieu, qui peuvent ensuite être réutilisés par les producteurs.',
                    ],
                    [
                        'question' => 'Un excès de nutriments arrivant dans un lac peut favoriser une prolifération d’algues. Ce phénomène est lié à :',
                        'choices' => [
                            ['choice_text' => 'l’eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'la fossilisation', 'is_correct' => false],
                            ['choice_text' => 'la dérive génétique', 'is_correct' => false],
                            ['choice_text' => 'la métamorphose', 'is_correct' => false],
                        ],
                        'explanation' => 'L’enrichissement excessif en nutriments, notamment azotés et phosphorés, peut provoquer une eutrophisation.',
                    ],
                    [
                        'question' => 'Dans un cycle de la matière, lequel est vrai ?',
                        'choices' => [
                            ['choice_text' => 'Les mêmes éléments chimiques peuvent circuler entre l’air, le sol, l’eau et les organismes', 'is_correct' => true],
                            ['choice_text' => 'Les éléments disparaissent après chaque utilisation', 'is_correct' => false],
                            ['choice_text' => 'Seuls les animaux participent aux cycles', 'is_correct' => false],
                            ['choice_text' => 'La matière n’existe jamais dans les organismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments chimiques circulent entre les compartiments de la biosphère et peuvent être réutilisés à de nombreuses reprises.',
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
                            ['choice_text' => 'habitat', 'is_correct' => true],
                            ['choice_text' => 'génome', 'is_correct' => false],
                            ['choice_text' => 'trophisme', 'is_correct' => false],
                            ['choice_text' => 'métabolisme', 'is_correct' => false],
                        ],
                        'explanation' => 'L’habitat correspond à l’environnement physique occupé par une espèce.',
                    ],
                    [
                        'question' => 'Une zone humide qui fournit nourriture, abri et lieux de reproduction à de nombreuses espèces joue le rôle de :',
                        'choices' => [
                            ['choice_text' => 'habitat', 'is_correct' => true],
                            ['choice_text' => 'chromosome', 'is_correct' => false],
                            ['choice_text' => 'organe', 'is_correct' => false],
                            ['choice_text' => 'enzyme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un habitat fournit les conditions et ressources nécessaires à la survie et à la reproduction des organismes.',
                    ],
                    [
                        'question' => 'Après l’abandon d’un champ, des herbes puis des arbustes colonisent progressivement la parcelle. Cela illustre :',
                        'choices' => [
                            ['choice_text' => 'une succession écologique', 'is_correct' => true],
                            ['choice_text' => 'une mutation dirigée', 'is_correct' => false],
                            ['choice_text' => 'une prédation obligatoire', 'is_correct' => false],
                            ['choice_text' => 'une migration génétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une succession écologique est une évolution progressive de la composition d’une communauté au cours du temps.',
                    ],
                    [
                        'question' => 'Une perturbation détruit totalement la végétation et enlève une grande partie du sol. Le retour du vivant commence sans sol préexistant. Il s’agit plutôt de :',
                        'choices' => [
                            ['choice_text' => 'succession primaire', 'is_correct' => true],
                            ['choice_text' => 'succession secondaire', 'is_correct' => false],
                            ['choice_text' => 'compétition intraspécifique', 'is_correct' => false],
                            ['choice_text' => 'mutualisme', 'is_correct' => false],
                        ],
                        'explanation' => 'La succession primaire débute sur un substrat où le sol est absent ou très peu développé.',
                    ],
                    [
                        'question' => 'Après un incendie, le sol reste présent et des plantes repoussent. On parle généralement de :',
                        'choices' => [
                            ['choice_text' => 'succession secondaire', 'is_correct' => true],
                            ['choice_text' => 'succession primaire', 'is_correct' => false],
                            ['choice_text' => 'spéciation', 'is_correct' => false],
                            ['choice_text' => 'migration internationale', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’un sol persiste après une perturbation, la recolonisation correspond généralement à une succession secondaire.',
                    ],
                    [
                        'question' => 'Une espèce dont la présence modifie fortement les conditions pour d’autres organismes peut être appelée :',
                        'choices' => [
                            ['choice_text' => 'espèce ingénieure', 'is_correct' => true],
                            ['choice_text' => 'espèce fossile', 'is_correct' => false],
                            ['choice_text' => 'espèce minérale', 'is_correct' => false],
                            ['choice_text' => 'espèce abiotiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce ingénieure modifie physiquement son environnement et influence les possibilités de vie d’autres organismes.',
                    ],
                    [
                        'question' => 'Un récif corallien fournit de nombreux refuges pour les poissons. Cela montre qu’une structure physique peut :',
                        'choices' => [
                            ['choice_text' => 'augmenter la complexité de l’habitat', 'is_correct' => true],
                            ['choice_text' => 'supprimer tous les consommateurs', 'is_correct' => false],
                            ['choice_text' => 'transformer l’eau en sol', 'is_correct' => false],
                            ['choice_text' => 'empêcher la compétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une structure complexe crée souvent davantage de microhabitats et de refuges pour différentes espèces.',
                    ],
                    [
                        'question' => 'La diversité des espèces présentes dans une communauté est étudiée par la :',
                        'choices' => [
                            ['choice_text' => 'richesse spécifique', 'is_correct' => true],
                            ['choice_text' => 'pression artérielle', 'is_correct' => false],
                            ['choice_text' => 'densité osseuse', 'is_correct' => false],
                            ['choice_text' => 'conductivité nerveuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique correspond au nombre d’espèces présentes dans un milieu ou échantillon.',
                    ],
                    [
                        'question' => 'Deux mares proches peuvent abriter des communautés différentes principalement parce que :',
                        'choices' => [
                            ['choice_text' => 'leurs conditions environnementales et ressources peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'toutes les espèces doivent être identiques à courte distance', 'is_correct' => false],
                            ['choice_text' => 'les poissons choisissent toujours les mêmes habitats', 'is_correct' => false],
                            ['choice_text' => 'la biodiversité ne dépend jamais du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'La température, le pH, les nutriments, la végétation et d’autres facteurs peuvent différer entre deux milieux proches.',
                    ],
                    [
                        'question' => 'Une communauté très diverse peut présenter plusieurs espèces remplissant des rôles écologiques différents. Cela peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'la complexité fonctionnelle de l’écosystème', 'is_correct' => true],
                            ['choice_text' => 'la disparition automatique des ressources', 'is_correct' => false],
                            ['choice_text' => 'l’absence totale de compétition', 'is_correct' => false],
                            ['choice_text' => 'la suppression du cycle du carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Des organismes aux fonctions différentes contribuent à de nombreuses interactions et processus écosystémiques.',
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
                            ['choice_text' => 'augmenter toujours la taille de l’habitat', 'is_correct' => false],
                            ['choice_text' => 'supprimer toutes les espèces invasives', 'is_correct' => false],
                            ['choice_text' => 'transformer immédiatement la forêt en océan', 'is_correct' => false],
                        ],
                        'explanation' => 'La fragmentation réduit la continuité de l’habitat et peut limiter les déplacements et les échanges entre populations.',
                    ],
                    [
                        'question' => 'Un pesticide qui s’accumule progressivement chez les consommateurs situés en haut d’une chaîne alimentaire illustre :',
                        'choices' => [
                            ['choice_text' => 'la bioamplification', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la germination', 'is_correct' => false],
                            ['choice_text' => 'la succession primaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioamplification correspond à l’augmentation de la concentration de certaines substances persistantes le long des niveaux trophiques.',
                    ],
                    [
                        'question' => 'Une substance toxique présente dans un milieu à faible concentration peut devenir plus concentrée dans les tissus des organismes. Ce phénomène est :',
                        'choices' => [
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => true],
                            ['choice_text' => 'l’évaporation', 'is_correct' => false],
                            ['choice_text' => 'la fixation de l’azote', 'is_correct' => false],
                            ['choice_text' => 'la transpiration', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioaccumulation est l’accumulation d’une substance dans un organisme lorsque son absorption dépasse son élimination.',
                    ],
                    [
                        'question' => 'Pourquoi planter des arbres le long d’un cours d’eau peut aider à réduire l’érosion des berges ?',
                        'choices' => [
                            ['choice_text' => 'Les racines stabilisent le sol', 'is_correct' => true],
                            ['choice_text' => 'Les arbres retirent toute l’eau du bassin', 'is_correct' => false],
                            ['choice_text' => 'Les racines empêchent toute infiltration', 'is_correct' => false],
                            ['choice_text' => 'Les feuilles transforment les roches en sable', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes racinaires renforcent la cohésion du sol et peuvent réduire son entraînement lors des pluies ou des crues.',
                    ],
                    [
                        'question' => 'Une espèce introduite volontairement ou accidentellement dans une région où elle n’existait pas peut devenir problématique lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'se propage et perturbe les communautés locales', 'is_correct' => true],
                            ['choice_text' => 'reste toujours incapable de se reproduire', 'is_correct' => false],
                            ['choice_text' => 'disparaît immédiatement', 'is_correct' => false],
                            ['choice_text' => 'transforme tous les habitats en désert', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines espèces introduites deviennent envahissantes lorsqu’elles se diffusent fortement et ont des effets écologiques ou économiques importants.',
                    ],
                    [
                        'question' => 'La surexploitation d’une ressource renouvelable signifie que :',
                        'choices' => [
                            ['choice_text' => 'on prélève la ressource plus vite qu’elle ne se reconstitue', 'is_correct' => true],
                            ['choice_text' => 'la ressource augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'aucune activité humaine n’est impliquée', 'is_correct' => false],
                            ['choice_text' => 'la ressource devient nécessairement non vivante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exploitation durable doit rester compatible avec la capacité de renouvellement de la ressource.',
                    ],
                    [
                        'question' => 'Un agriculteur réduit l’usage d’engrais sur une parcelle proche d’un lac. L’objectif écologique peut être de limiter :',
                        'choices' => [
                            ['choice_text' => 'l’apport excessif de nutriments au lac', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse des plantes du lac uniquement', 'is_correct' => false],
                            ['choice_text' => 'l’oxygène atmosphérique mondial', 'is_correct' => false],
                            ['choice_text' => 'la diversité génétique humaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter le ruissellement d’azote et de phosphore peut réduire le risque d’eutrophisation.',
                    ],
                    [
                        'question' => 'Une ville remplace une surface végétalisée par beaucoup de béton. Un effet écologique possible est :',
                        'choices' => [
                            ['choice_text' => 'une augmentation du ruissellement des eaux de pluie', 'is_correct' => true],
                            ['choice_text' => 'une hausse automatique de l’infiltration', 'is_correct' => false],
                            ['choice_text' => 'une baisse obligatoire de la température locale', 'is_correct' => false],
                            ['choice_text' => 'une disparition de tout le vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces imperméables réduisent l’infiltration et augmentent généralement le ruissellement.',
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à suivre la qualité écologique d’une rivière ?',
                        'choices' => [
                            ['choice_text' => 'la présence et l’abondance de certaines espèces sensibles à la pollution', 'is_correct' => true],
                            ['choice_text' => 'la couleur d’un seul caillou', 'is_correct' => false],
                            ['choice_text' => 'le nom de la ville voisine', 'is_correct' => false],
                            ['choice_text' => 'la longueur d’un poisson dessinée sur une affiche', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines espèces aquatiques sont sensibles aux changements de qualité de l’eau et peuvent servir de bioindicateurs.',
                    ],
                    [
                        'question' => 'La protection d’une zone naturelle vise notamment à :',
                        'choices' => [
                            ['choice_text' => 'maintenir des habitats, des populations et des fonctions écologiques', 'is_correct' => true],
                            ['choice_text' => 'empêcher toute interaction entre espèces', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les processus naturels', 'is_correct' => false],
                            ['choice_text' => 'rendre toutes les populations identiques', 'is_correct' => false],
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
                            ['choice_text' => 'la diversité des gènes, des espèces et des écosystèmes', 'is_correct' => true],
                            ['choice_text' => 'uniquement le nombre d’animaux', 'is_correct' => false],
                            ['choice_text' => 'uniquement la diversité des paysages', 'is_correct' => false],
                            ['choice_text' => 'seulement les espèces rares', 'is_correct' => false],
                        ],
                        'explanation' => 'La biodiversité est multidimensionnelle : elle inclut la diversité génétique, spécifique et écosystémique.',
                    ],
                    [
                        'question' => 'Deux populations d’une même espèce présentent des variations génétiques différentes. Cela concerne la :',
                        'choices' => [
                            ['choice_text' => 'diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'diversité des écosystèmes uniquement', 'is_correct' => false],
                            ['choice_text' => 'succession écologique', 'is_correct' => false],
                            ['choice_text' => 'densité trophique', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique correspond aux variations génétiques au sein d’une espèce et entre ses populations.',
                    ],
                    [
                        'question' => 'La pollinisation des cultures par les insectes est un exemple de :',
                        'choices' => [
                            ['choice_text' => 'service écosystémique', 'is_correct' => true],
                            ['choice_text' => 'facteur abiotique', 'is_correct' => false],
                            ['choice_text' => 'mutation', 'is_correct' => false],
                            ['choice_text' => 'minéralisation uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les services écosystémiques sont les bénéfices fournis par les écosystèmes aux sociétés humaines ; la pollinisation en fait partie.',
                    ],
                    [
                        'question' => 'Créer une réserve où une espèce menacée peut se reproduire correspond principalement à une mesure de :',
                        'choices' => [
                            ['choice_text' => 'conservation', 'is_correct' => true],
                            ['choice_text' => 'pollution', 'is_correct' => false],
                            ['choice_text' => 'surexploitation', 'is_correct' => false],
                            ['choice_text' => 'fragmentation volontaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La création d’aires protégées est une stratégie de conservation destinée à préserver des espèces et leurs habitats.',
                    ],
                    [
                        'question' => 'Pourquoi la diversité génétique peut-elle être importante face à une nouvelle maladie ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente la probabilité que certaines variantes soient moins sensibles', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que tous les individus sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute mutation', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diversité génétique élevée peut offrir davantage de variantes, dont certaines peuvent mieux résister à une pression nouvelle.',
                    ],
                    [
                        'question' => 'Une espèce est dite endémique d’une région lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'n’existe naturellement que dans cette région', 'is_correct' => true],
                            ['choice_text' => 'vit partout dans le monde', 'is_correct' => false],
                            ['choice_text' => 'est toujours domestiquée', 'is_correct' => false],
                            ['choice_text' => 'est forcément invasive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce endémique possède une aire naturelle limitée à une région déterminée.',
                    ],
                    [
                        'question' => 'Le braconnage excessif d’une espèce peut réduire sa population et donc :',
                        'choices' => [
                            ['choice_text' => 'augmenter son risque d’extinction', 'is_correct' => true],
                            ['choice_text' => 'garantir sa diversité génétique', 'is_correct' => false],
                            ['choice_text' => 'la transformer en producteur primaire', 'is_correct' => false],
                            ['choice_text' => 'augmenter nécessairement sa capacité de charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte mortalité liée à la surexploitation peut entraîner un déclin démographique et accroître le risque d’extinction.',
                    ],
                    [
                        'question' => 'La conservation ex situ consiste à :',
                        'choices' => [
                            ['choice_text' => 'maintenir des organismes ou des ressources biologiques en dehors de leur milieu naturel', 'is_correct' => true],
                            ['choice_text' => 'protéger uniquement les habitats sauvages', 'is_correct' => false],
                            ['choice_text' => 'augmenter la pollution', 'is_correct' => false],
                            ['choice_text' => 'réduire toutes les populations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zoos, banques de graines et collections génétiques sont des exemples de conservation ex situ.',
                    ],
                    [
                        'question' => 'Dans une banque de graines, l’objectif principal est de :',
                        'choices' => [
                            ['choice_text' => 'conserver une diversité génétique végétale pour une utilisation ou restauration future', 'is_correct' => true],
                            ['choice_text' => 'faire disparaître les variétés locales', 'is_correct' => false],
                            ['choice_text' => 'remplacer tous les habitats naturels', 'is_correct' => false],
                            ['choice_text' => 'accélérer automatiquement toutes les mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les banques de graines permettent de conserver du matériel génétique végétal à long terme.',
                    ],
                    [
                        'question' => 'Une stratégie de conservation efficace combine souvent protection d’habitat et suivi des populations parce que :',
                        'choices' => [
                            ['choice_text' => 'il faut préserver les conditions de vie tout en vérifiant l’évolution des populations', 'is_correct' => true],
                            ['choice_text' => 'les habitats n’influencent jamais les populations', 'is_correct' => false],
                            ['choice_text' => 'le suivi rend inutile toute protection', 'is_correct' => false],
                            ['choice_text' => 'les populations restent constantes sans intervention', 'is_correct' => false],
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
                            ['choice_text' => 'des quadrats', 'is_correct' => true],
                            ['choice_text' => 'un stéthoscope', 'is_correct' => false],
                            ['choice_text' => 'un caryotype', 'is_correct' => false],
                            ['choice_text' => 'un électrocardiogramme', 'is_correct' => false],
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
                        'question' => 'Un transect est particulièrement utile pour étudier :',
                        'choices' => [
                            ['choice_text' => 'la variation des organismes ou facteurs le long d’un gradient spatial', 'is_correct' => true],
                            ['choice_text' => 'uniquement la vitesse du sang', 'is_correct' => false],
                            ['choice_text' => 'la structure d’un chromosome', 'is_correct' => false],
                            ['choice_text' => 'la composition d’une cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transect suit une ligne ou un axe d’observation afin d’étudier les changements le long d’un espace.',
                    ],
                    [
                        'question' => 'Pourquoi répéter des quadrats à plusieurs endroits ?',
                        'choices' => [
                            ['choice_text' => 'Pour mieux représenter l’hétérogénéité du milieu', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute variation naturelle', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la même biodiversité partout', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse statistique', 'is_correct' => false],
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
                        'question' => 'Un autre site contient 8 espèces avec 35 individus pour l’espèce dominante et peu pour les autres. Par rapport au premier site, ce site peut présenter :',
                        'choices' => [
                            ['choice_text' => 'une répartition des abondances moins équilibrée', 'is_correct' => true],
                            ['choice_text' => 'une richesse nécessairement égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de communauté', 'is_correct' => false],
                            ['choice_text' => 'une densité toujours identique', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse et l’équitabilité sont deux dimensions différentes ; une espèce très dominante peut réduire l’équilibre des abondances.',
                    ],
                    [
                        'question' => 'Une chercheuse mesure la température de l’eau à 10 h, 14 h et 18 h. Cette répétition dans le temps permet notamment d’étudier :',
                        'choices' => [
                            ['choice_text' => 'la variation temporelle', 'is_correct' => true],
                            ['choice_text' => 'la diversité génétique', 'is_correct' => false],
                            ['choice_text' => 'la taxonomie moléculaire', 'is_correct' => false],
                            ['choice_text' => 'la structure d’une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Des mesures répétées à différents moments permettent de caractériser les variations temporelles d’un facteur écologique.',
                    ],
                    [
                        'question' => 'On observe 25 oiseaux dans 5 km². L’effectif moyen par km² est :',
                        'choices' => [
                            ['choice_text' => '5 oiseaux/km²', 'is_correct' => true],
                            ['choice_text' => '125 oiseaux/km²', 'is_correct' => false],
                            ['choice_text' => '20 oiseaux/km²', 'is_correct' => false],
                            ['choice_text' => '0,2 oiseau/km²', 'is_correct' => false],
                        ],
                        'explanation' => '25 ÷ 5 = 5 oiseaux par kilomètre carré.',
                    ],
                    [
                        'question' => 'Si un biais d’échantillonnage fait surtout choisir les endroits les plus faciles d’accès, le risque est de :',
                        'choices' => [
                            ['choice_text' => 'surestimer certaines espèces favorisées par ces emplacements', 'is_correct' => true],
                            ['choice_text' => 'garantir une estimation parfaite', 'is_correct' => false],
                            ['choice_text' => 'supprimer l’effet de la saison', 'is_correct' => false],
                            ['choice_text' => 'mesurer directement le génome', 'is_correct' => false],
                        ],
                        'explanation' => 'Un échantillon non représentatif peut produire des estimations biaisées.',
                    ],
                    [
                        'question' => 'Un graphique montre que la richesse spécifique augmente jusqu’à 25 °C puis diminue. L’interprétation la plus prudente est :',
                        'choices' => [
                            ['choice_text' => 'la richesse observée est maximale autour de 25 °C dans les conditions étudiées', 'is_correct' => true],
                            ['choice_text' => '25 °C est la température optimale pour toutes les espèces du monde', 'is_correct' => false],
                            ['choice_text' => 'la température ne joue aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'toutes les espèces meurent au-dessus de 25 °C', 'is_correct' => false],
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
                        'question' => 'Quel énoncé relie correctement un producteur et un consommateur primaire ?',
                        'choices' => [
                            ['choice_text' => 'Une plante est un producteur et un herbivore qui la mange est un consommateur primaire', 'is_correct' => true],
                            ['choice_text' => 'Une plante est toujours un consommateur secondaire', 'is_correct' => false],
                            ['choice_text' => 'Un herbivore est toujours un décomposeur', 'is_correct' => false],
                            ['choice_text' => 'Un producteur se nourrit obligatoirement d’animaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les producteurs fabriquent leur matière organique, tandis que les herbivores qui les consomment occupent le premier niveau de consommation.',
                    ],
                    [
                        'question' => 'Une population possède 300 individus. En une année, 40 naissent, 25 meurent, 10 immigrent et 5 émigrent. Quel est l’effectif final ?',
                        'choices' => [
                            ['choice_text' => '320', 'is_correct' => true],
                            ['choice_text' => '290', 'is_correct' => false],
                            ['choice_text' => '350', 'is_correct' => false],
                            ['choice_text' => '305', 'is_correct' => false],
                        ],
                        'explanation' => 'Effectif final = 300 + 40 − 25 + 10 − 5 = 320.',
                    ],
                    [
                        'question' => 'Quel changement peut produire un effet en cascade dans un réseau trophique ?',
                        'choices' => [
                            ['choice_text' => 'la disparition d’un prédateur important', 'is_correct' => true],
                            ['choice_text' => 'la forme d’une feuille isolée', 'is_correct' => false],
                            ['choice_text' => 'le nom scientifique d’une bactérie', 'is_correct' => false],
                            ['choice_text' => 'une variation de couleur sans conséquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’un prédateur peut modifier l’abondance de ses proies puis influencer d’autres niveaux trophiques.',
                    ],
                    [
                        'question' => 'Une région connaît une longue sécheresse. Le premier facteur limitant pour de nombreuses plantes peut être :',
                        'choices' => [
                            ['choice_text' => 'la disponibilité en eau', 'is_correct' => true],
                            ['choice_text' => 'la longueur des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'le nombre de dents des herbivores', 'is_correct' => false],
                            ['choice_text' => 'la salinité de l’océan mondial', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau devient une ressource limitante lorsque sa disponibilité descend sous les besoins de nombreuses plantes.',
                    ],
                    [
                        'question' => 'Une augmentation des engrais agricoles suivie d’une prolifération d’algues dans un lac illustre une relation entre :',
                        'choices' => [
                            ['choice_text' => 'activité humaine, cycle des nutriments et état de l’écosystème', 'is_correct' => true],
                            ['choice_text' => 'uniquement la génétique des poissons', 'is_correct' => false],
                            ['choice_text' => 'la tectonique des plaques et la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la digestion et les marées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les apports excessifs d’azote ou de phosphore peuvent modifier les cycles des nutriments et l’équilibre du lac.',
                    ],
                    [
                        'question' => 'Quel couple présente deux facteurs abiotiques ?',
                        'choices' => [
                            ['choice_text' => 'température et pH', 'is_correct' => true],
                            ['choice_text' => 'prédation et compétition', 'is_correct' => false],
                            ['choice_text' => 'parasitisme et mutualisme', 'is_correct' => false],
                            ['choice_text' => 'herbivorie et migration', 'is_correct' => false],
                        ],
                        'explanation' => 'La température et le pH sont des paramètres physico-chimiques du milieu, donc abiotiques.',
                    ],
                    [
                        'question' => 'Une espèce utilise une ressource surtout la nuit et une autre surtout le jour. Cette séparation peut :',
                        'choices' => [
                            ['choice_text' => 'réduire le chevauchement de leurs niches', 'is_correct' => true],
                            ['choice_text' => 'augmenter forcément la compétition', 'is_correct' => false],
                            ['choice_text' => 'transformer l’une en décomposeur', 'is_correct' => false],
                            ['choice_text' => 'supprimer leur habitat', 'is_correct' => false],
                        ],
                        'explanation' => 'Une utilisation différente du temps ou de l’espace peut réduire le chevauchement des niches et donc la compétition.',
                    ],
                    [
                        'question' => 'Pourquoi la matière organique morte n’est-elle pas simplement une perte pour l’écosystème ?',
                        'choices' => [
                            ['choice_text' => 'Les décomposeurs la transforment et remettent des éléments en circulation', 'is_correct' => true],
                            ['choice_text' => 'Elle disparaît sans transformation', 'is_correct' => false],
                            ['choice_text' => 'Elle devient immédiatement de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Elle est inutilisable par tous les organismes', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition permet le recyclage des éléments chimiques et leur retour vers le milieu.',
                    ],
                    [
                        'question' => 'Une réserve naturelle protège une forêt et un corridor relie cette forêt à une autre. L’intérêt du corridor est notamment de :',
                        'choices' => [
                            ['choice_text' => 'faciliter les déplacements entre populations', 'is_correct' => true],
                            ['choice_text' => 'isoler davantage toutes les populations', 'is_correct' => false],
                            ['choice_text' => 'empêcher les graines de se disperser', 'is_correct' => false],
                            ['choice_text' => 'réduire automatiquement toute prédation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors écologiques peuvent améliorer la connectivité entre habitats et faciliter les déplacements ou les échanges entre populations.',
                    ],
                    [
                        'question' => 'Quel résumé décrit le mieux le fonctionnement général d’un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'Des organismes interagissent entre eux et avec le milieu, tandis que l’énergie circule et que la matière est recyclée', 'is_correct' => true],
                            ['choice_text' => 'Seuls les animaux déterminent le fonctionnement du milieu', 'is_correct' => false],
                            ['choice_text' => 'L’énergie et la matière sont identiques et suivent le même parcours', 'is_correct' => false],
                            ['choice_text' => 'Les facteurs abiotiques n’ont aucun effet sur les organismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement des écosystèmes repose sur les interactions biotiques, les facteurs abiotiques, le flux d’énergie et le recyclage de la matière.',
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
