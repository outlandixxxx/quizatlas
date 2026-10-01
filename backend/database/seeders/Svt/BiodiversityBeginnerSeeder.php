<?php

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
                        'question' => 'La biodiversité désigne principalement :',
                        'choices' => [
                            ['choice_text' => 'la diversité du vivant à différents niveaux d’organisation', 'is_correct' => true],
                            ['choice_text' => 'uniquement le nombre d’animaux sauvages', 'is_correct' => false],
                            ['choice_text' => 'la diversité des climats d’une planète', 'is_correct' => false],
                            ['choice_text' => 'uniquement les espèces menacées', 'is_correct' => false],
                        ],
                        'explanation' => 'La biodiversité englobe notamment la diversité génétique, la diversité des espèces et la diversité des écosystèmes.',
                    ],
                    [
                        'question' => 'Lequel correspond à la diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'les différences de gènes entre individus d’une même espèce', 'is_correct' => true],
                            ['choice_text' => 'le nombre d’écosystèmes d’un continent', 'is_correct' => false],
                            ['choice_text' => 'le nombre total de biomes', 'is_correct' => false],
                            ['choice_text' => 'la variété des relations entre prédateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique correspond aux variations héréditaires présentes au sein d’une espèce et entre ses populations.',
                    ],
                    [
                        'question' => 'La présence de plusieurs espèces de poissons, d’algues et de crustacés dans un lac illustre surtout :',
                        'choices' => [
                            ['choice_text' => 'la diversité spécifique', 'is_correct' => true],
                            ['choice_text' => 'la diversité chromosomique humaine', 'is_correct' => false],
                            ['choice_text' => 'la diversité climatique', 'is_correct' => false],
                            ['choice_text' => 'la diversité géologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité spécifique concerne le nombre et la variété des espèces présentes dans un milieu.',
                    ],
                    [
                        'question' => 'Une forêt, une prairie et une zone humide représentent différents :',
                        'choices' => [
                            ['choice_text' => 'écosystèmes', 'is_correct' => true],
                            ['choice_text' => 'génotypes', 'is_correct' => false],
                            ['choice_text' => 'organes', 'is_correct' => false],
                            ['choice_text' => 'individus', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème associe des êtres vivants et leur environnement physique ; une forêt, une prairie et une zone humide sont des écosystèmes différents.',
                    ],
                    [
                        'question' => 'Une espèce avec de nombreuses variantes génétiques possède généralement :',
                        'choices' => [
                            ['choice_text' => 'une diversité génétique élevée', 'is_correct' => true],
                            ['choice_text' => 'une richesse spécifique nulle', 'is_correct' => false],
                            ['choice_text' => 'une seule population obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un seul phénotype possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande variété de variantes génétiques traduit une diversité génétique importante au sein de l’espèce.',
                    ],
                    [
                        'question' => 'Quel exemple montre une biodiversité au niveau des écosystèmes ?',
                        'choices' => [
                            ['choice_text' => 'un territoire contenant une mangrove, une savane et un récif corallien', 'is_correct' => true],
                            ['choice_text' => 'une population de loups de tailles différentes', 'is_correct' => false],
                            ['choice_text' => 'quatre variétés de pommes', 'is_correct' => false],
                            ['choice_text' => 'des individus d’une même espèce avec des groupes sanguins différents', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité des écosystèmes correspond à la variété des types de milieux et de communautés qu’ils abritent.',
                    ],
                    [
                        'question' => 'Pourquoi la biodiversité ne se réduit-elle pas au nombre d’espèces ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les variations génétiques et la diversité des écosystèmes comptent aussi', 'is_correct' => true],
                            ['choice_text' => 'Parce que les espèces n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les écosystèmes sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les gènes ne sont jamais transmis', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux régions peuvent avoir le même nombre d’espèces mais différer fortement par leur diversité génétique ou leurs écosystèmes.',
                    ],
                    [
                        'question' => 'Une variété locale de blé possède une combinaison particulière de caractères héréditaires. Elle contribue à :',
                        'choices' => [
                            ['choice_text' => 'la diversité génétique agricole', 'is_correct' => true],
                            ['choice_text' => 'la diversité des océans', 'is_correct' => false],
                            ['choice_text' => 'la diversité des roches', 'is_correct' => false],
                            ['choice_text' => 'la diversité des températures', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variétés agricoles représentent une partie de la diversité génétique et peuvent constituer une ressource pour l’adaptation des cultures.',
                    ],
                    [
                        'question' => 'Dans une région, on recense 12 espèces d’oiseaux et 8 espèces de mammifères. La richesse spécifique observée est de :',
                        'choices' => [
                            ['choice_text' => '20 espèces', 'is_correct' => true],
                            ['choice_text' => '12 espèces', 'is_correct' => false],
                            ['choice_text' => '8 espèces', 'is_correct' => false],
                            ['choice_text' => '96 espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique correspond ici au nombre total d’espèces recensées : 12 + 8 = 20.',
                    ],
                    [
                        'question' => 'La biodiversité peut être observée à l’échelle :',
                        'choices' => [
                            ['choice_text' => 'd’un gène, d’une espèce et d’un écosystème', 'is_correct' => true],
                            ['choice_text' => 'uniquement d’un individu', 'is_correct' => false],
                            ['choice_text' => 'uniquement d’un continent', 'is_correct' => false],
                            ['choice_text' => 'uniquement d’un microscope', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois niveaux classiquement distingués sont la diversité génétique, spécifique et écosystémique.',
                    ],
                ],
            ],
            [
                'title' => 'Diversité génétique',
                'description' => 'Comprendre la variation génétique, son origine et son intérêt biologique.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quelle situation augmente directement la diversité génétique d’une population ?',
                        'choices' => [
                            ['choice_text' => 'l’apparition de nouvelles mutations héréditaires', 'is_correct' => true],
                            ['choice_text' => 'la réduction de toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'la suppression des différences entre individus', 'is_correct' => false],
                            ['choice_text' => 'la disparition de toutes les variantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations peuvent créer de nouvelles variantes génétiques qui, si elles sont héréditaires, augmentent la diversité génétique.',
                    ],
                    [
                        'question' => 'Chez une espèce à reproduction sexuée, la diversité des descendants est favorisée notamment par :',
                        'choices' => [
                            ['choice_text' => 'le brassage génétique lors de la reproduction', 'is_correct' => true],
                            ['choice_text' => 'la copie identique de tous les génomes', 'is_correct' => false],
                            ['choice_text' => 'l’absence de méiose', 'is_correct' => false],
                            ['choice_text' => 'l’absence de recombinaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproduction sexuée combine des allèles provenant des deux parents et augmente les combinaisons génétiques possibles.',
                    ],
                    [
                        'question' => 'Deux populations séparées depuis longtemps deviennent progressivement différentes. Une cause possible est :',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la respiration pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérive génétique modifie les fréquences alléliques au hasard, surtout dans les petites populations isolées.',
                    ],
                    [
                        'question' => 'Pourquoi les petites populations sont-elles particulièrement sensibles à la dérive génétique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le hasard peut modifier fortement leurs fréquences alléliques', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles ont toujours plus de mutations', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne possèdent jamais d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ont toujours plus d’espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une petite population, la reproduction d’un nombre limité d’individus peut provoquer de fortes variations aléatoires des fréquences alléliques.',
                    ],
                    [
                        'question' => 'Un allèle devient fréquent parce qu’il améliore la survie dans un milieu particulier. Ce phénomène peut correspondre à :',
                        'choices' => [
                            ['choice_text' => 'la sélection naturelle', 'is_correct' => true],
                            ['choice_text' => 'la dérive des continents', 'is_correct' => false],
                            ['choice_text' => 'la décomposition', 'is_correct' => false],
                            ['choice_text' => 'la succession écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection naturelle favorise les variantes héréditaires qui augmentent la réussite de survie ou de reproduction dans un contexte donné.',
                    ],
                    [
                        'question' => 'Le croisement de deux populations génétiquement différentes peut introduire :',
                        'choices' => [
                            ['choice_text' => 'de nouveaux allèles ou combinaisons dans la population', 'is_correct' => true],
                            ['choice_text' => 'uniquement des facteurs abiotiques', 'is_correct' => false],
                            ['choice_text' => 'des espèces minérales', 'is_correct' => false],
                            ['choice_text' => 'des mutations déjà identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux de gènes peut introduire des variantes génétiques provenant d’une autre population.',
                    ],
                    [
                        'question' => 'Une population subit un fort déclin démographique puis ne compte plus que quelques individus. La perte de diversité génétique peut être liée à :',
                        'choices' => [
                            ['choice_text' => 'un goulot d’étranglement', 'is_correct' => true],
                            ['choice_text' => 'une eutrophisation', 'is_correct' => false],
                            ['choice_text' => 'une transpiration', 'is_correct' => false],
                            ['choice_text' => 'une pollinisation obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un goulot d’étranglement réduit brutalement l’effectif et peut entraîner la perte aléatoire de certains allèles.',
                    ],
                    [
                        'question' => 'La consanguinité dans une petite population peut augmenter :',
                        'choices' => [
                            ['choice_text' => 'l’expression de certains allèles récessifs défavorables', 'is_correct' => true],
                            ['choice_text' => 'la diversité des écosystèmes', 'is_correct' => false],
                            ['choice_text' => 'la richesse minérale du sol', 'is_correct' => false],
                            ['choice_text' => 'la taille de l’habitat', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproduction entre individus apparentés augmente la probabilité qu’un descendant reçoive deux copies d’un même allèle récessif.',
                    ],
                    [
                        'question' => 'Une banque de semences conserve plusieurs variétés anciennes d’une plante. Son intérêt principal est de :',
                        'choices' => [
                            ['choice_text' => 'préserver une partie de la diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'supprimer toute variation future', 'is_correct' => false],
                            ['choice_text' => 'créer automatiquement de nouvelles espèces', 'is_correct' => false],
                            ['choice_text' => 'remplacer les habitats naturels', 'is_correct' => false],
                        ],
                        'explanation' => 'Les collections de graines permettent de conserver durablement du matériel génétique provenant de nombreuses variétés.',
                    ],
                    [
                        'question' => 'Dans une population, la fréquence d’un allèle passe de 0,20 à 0,35 en plusieurs générations. Cela signifie que :',
                        'choices' => [
                            ['choice_text' => 'cet allèle est devenu plus fréquent dans la population', 'is_correct' => true],
                            ['choice_text' => 'l’allèle a nécessairement disparu', 'is_correct' => false],
                            ['choice_text' => 'tous les individus sont devenus identiques', 'is_correct' => false],
                            ['choice_text' => 'la population compte forcément plus d’espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence allélique mesure la proportion relative d’un allèle dans la population ; elle a ici augmenté.',
                    ],
                ],
            ],
            [
                'title' => 'Diversité des espèces et classification',
                'description' => 'Espèces, richesse spécifique, ressemblance et classification du vivant.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'La richesse spécifique d’un milieu correspond :',
                        'choices' => [
                            ['choice_text' => 'au nombre d’espèces présentes', 'is_correct' => true],
                            ['choice_text' => 'au nombre de gènes chez une seule espèce', 'is_correct' => false],
                            ['choice_text' => 'à la biomasse totale uniquement', 'is_correct' => false],
                            ['choice_text' => 'au nombre de facteurs abiotiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique est une mesure simple du nombre d’espèces observées dans une zone donnée.',
                    ],
                    [
                        'question' => 'Deux sites possèdent chacun 10 espèces, mais dans le premier une seule espèce domine presque totalement. Les sites ont :',
                        'choices' => [
                            ['choice_text' => 'la même richesse spécifique mais peuvent avoir une équitabilité différente', 'is_correct' => true],
                            ['choice_text' => 'nécessairement la même biodiversité totale', 'is_correct' => false],
                            ['choice_text' => 'le même nombre d’individus', 'is_correct' => false],
                            ['choice_text' => 'le même niveau de diversité génétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse indique le nombre d’espèces, tandis que l’équitabilité décrit la répartition des abondances entre elles.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des noms scientifiques pour les espèces ?',
                        'choices' => [
                            ['choice_text' => 'Pour disposer d’une appellation standardisée indépendamment de la langue', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toute observation biologique', 'is_correct' => false],
                            ['choice_text' => 'Pour indiquer directement l’âge d’un organisme', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer automatiquement son habitat', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noms scientifiques facilitent la communication précise entre scientifiques de langues différentes.',
                    ],
                    [
                        'question' => 'Le classement des organismes selon leurs relations évolutives relève de :',
                        'choices' => [
                            ['choice_text' => 'la classification phylogénétique', 'is_correct' => true],
                            ['choice_text' => 'la météorologie', 'is_correct' => false],
                            ['choice_text' => 'la cartographie routière', 'is_correct' => false],
                            ['choice_text' => 'la géologie structurale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification phylogénétique cherche à représenter les relations de parenté évolutive entre organismes.',
                    ],
                    [
                        'question' => 'Deux espèces partagent de nombreuses caractéristiques héritées d’un ancêtre commun. Cela peut indiquer :',
                        'choices' => [
                            ['choice_text' => 'une parenté évolutive étroite', 'is_correct' => true],
                            ['choice_text' => 'une absence totale de relation', 'is_correct' => false],
                            ['choice_text' => 'une identité génétique parfaite', 'is_correct' => false],
                            ['choice_text' => 'une adaptation au même climat uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les caractères homologues peuvent fournir des indices sur la parenté entre lignées.',
                    ],
                    [
                        'question' => 'Une espèce est dite endémique lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'est naturellement limitée à une zone géographique', 'is_correct' => true],
                            ['choice_text' => 'vit naturellement partout sur Terre', 'is_correct' => false],
                            ['choice_text' => 'est forcément domestiquée', 'is_correct' => false],
                            ['choice_text' => 'est toujours en voie d’extinction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’endémisme décrit une répartition naturelle restreinte à une région déterminée.',
                    ],
                    [
                        'question' => 'Dans une réserve, on observe 5 espèces avec des effectifs de 100, 20, 10, 8 et 2. La richesse spécifique est :',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '140', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre total d’individus est 140, mais la richesse spécifique reste de 5 car cinq espèces sont présentes.',
                    ],
                    [
                        'question' => 'Quelle observation correspond le mieux à une espèce rare localement ?',
                        'choices' => [
                            ['choice_text' => 'elle est présente, mais avec très peu d’individus dans le site étudié', 'is_correct' => true],
                            ['choice_text' => 'elle est absente du site et de toute la planète', 'is_correct' => false],
                            ['choice_text' => 'elle possède toujours un seul gène', 'is_correct' => false],
                            ['choice_text' => 'elle domine systématiquement toute la communauté', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce rare peut être présente en faible abondance dans le site étudié ; cela ne signifie pas qu’elle est rare partout.',
                    ],
                    [
                        'question' => 'Un inventaire de biodiversité devient plus fiable lorsque :',
                        'choices' => [
                            ['choice_text' => 'l’échantillonnage couvre différents habitats et est répété', 'is_correct' => true],
                            ['choice_text' => 'un seul emplacement est toujours observé', 'is_correct' => false],
                            ['choice_text' => 'les espèces difficiles à détecter sont ignorées', 'is_correct' => false],
                            ['choice_text' => 'on choisit uniquement les sites les plus faciles d’accès', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition et la couverture de plusieurs habitats limitent les biais d’échantillonnage.',
                    ],
                    [
                        'question' => 'Une espèce observée dans 8 quadrats sur 10 a une fréquence de présence de :',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence de présence est de 8 ÷ 10 × 100 = 80 %.',
                    ],
                ],
            ],
            [
                'title' => 'Biodiversité des écosystèmes',
                'description' => 'Diversité des habitats, communautés, connectivité et fonctionnement des écosystèmes.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une mangrove, une forêt tropicale et un lac constituent :',
                        'choices' => [
                            ['choice_text' => 'des types d’écosystèmes différents', 'is_correct' => true],
                            ['choice_text' => 'des populations d’une même espèce', 'is_correct' => false],
                            ['choice_text' => 'des gènes différents', 'is_correct' => false],
                            ['choice_text' => 'des organes spécialisés', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces milieux présentent des conditions physiques et des communautés biologiques différentes.',
                    ],
                    [
                        'question' => 'Un corridor écologique relie deux fragments de forêt. Il peut :',
                        'choices' => [
                            ['choice_text' => 'faciliter les déplacements d’individus entre habitats', 'is_correct' => true],
                            ['choice_text' => 'supprimer toute dispersion', 'is_correct' => false],
                            ['choice_text' => 'réduire systématiquement la diversité génétique', 'is_correct' => false],
                            ['choice_text' => 'empêcher tous les échanges entre populations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors améliorent la connectivité écologique et peuvent favoriser les déplacements, la dispersion et le flux de gènes.',
                    ],
                    [
                        'question' => 'La fragmentation d’un habitat peut entraîner :',
                        'choices' => [
                            ['choice_text' => 'une isolation accrue de certaines populations', 'is_correct' => true],
                            ['choice_text' => 'une augmentation automatique de tous les habitats', 'is_correct' => false],
                            ['choice_text' => 'la disparition des facteurs abiotiques', 'is_correct' => false],
                            ['choice_text' => 'une photosynthèse identique partout', 'is_correct' => false],
                        ],
                        'explanation' => 'La fragmentation sépare les habitats et peut réduire les échanges entre populations.',
                    ],
                    [
                        'question' => 'La diversité d’un milieu peut contribuer à sa stabilité parce que :',
                        'choices' => [
                            ['choice_text' => 'plusieurs espèces peuvent contribuer à des fonctions écologiques complémentaires', 'is_correct' => true],
                            ['choice_text' => 'toutes les espèces effectuent exactement la même fonction', 'is_correct' => false],
                            ['choice_text' => 'les interactions disparaissent lorsque la diversité augmente', 'is_correct' => false],
                            ['choice_text' => 'la matière n’est plus recyclée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une communauté diversifiée peut disposer de plusieurs organismes assurant des fonctions complémentaires, ce qui peut renforcer certaines capacités de fonctionnement ou de récupération.',
                    ],
                    [
                        'question' => 'Une zone humide absorbe une partie des eaux et sert d’habitat à de nombreuses espèces. Elle fournit :',
                        'choices' => [
                            ['choice_text' => 'plusieurs fonctions et services écosystémiques', 'is_correct' => true],
                            ['choice_text' => 'uniquement une source de bois', 'is_correct' => false],
                            ['choice_text' => 'uniquement de l’énergie solaire', 'is_correct' => false],
                            ['choice_text' => 'aucun bénéfice pour les populations humaines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones humides peuvent stocker de l’eau, filtrer certains polluants, abriter des espèces et fournir d’autres services écosystémiques.',
                    ],
                    [
                        'question' => 'La diversité des microhabitats dans une forêt peut permettre :',
                        'choices' => [
                            ['choice_text' => 'la coexistence de davantage d’espèces aux exigences différentes', 'is_correct' => true],
                            ['choice_text' => 'la suppression de toute compétition', 'is_correct' => false],
                            ['choice_text' => 'la réduction automatique de la richesse spécifique', 'is_correct' => false],
                            ['choice_text' => 'la disparition des décomposeurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Des microhabitats variés offrent des conditions différentes et augmentent les possibilités de coexistence de plusieurs espèces.',
                    ],
                    [
                        'question' => 'Après une perturbation, un écosystème qui récupère progressivement sa structure et ses fonctions montre :',
                        'choices' => [
                            ['choice_text' => 'une résilience écologique', 'is_correct' => true],
                            ['choice_text' => 'une mutation cellulaire', 'is_correct' => false],
                            ['choice_text' => 'une classification taxonomique', 'is_correct' => false],
                            ['choice_text' => 'une érosion génétique obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La résilience désigne la capacité d’un système à retrouver certaines propriétés après une perturbation.',
                    ],
                    [
                        'question' => 'Un incendie modifie fortement la végétation mais laisse le sol en place. La recolonisation correspond généralement à :',
                        'choices' => [
                            ['choice_text' => 'une succession secondaire', 'is_correct' => true],
                            ['choice_text' => 'une succession primaire', 'is_correct' => false],
                            ['choice_text' => 'une extinction mondiale', 'is_correct' => false],
                            ['choice_text' => 'une dérive génétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une succession secondaire se produit lorsqu’un sol et une partie de la structure du milieu restent présents après une perturbation.',
                    ],
                    [
                        'question' => 'Une île possède beaucoup d’habitats différents. À richesse spécifique égale, on peut s’attendre à :',
                        'choices' => [
                            ['choice_text' => 'une diversité fonctionnelle potentiellement variée', 'is_correct' => true],
                            ['choice_text' => 'une absence obligatoire de relations entre espèces', 'is_correct' => false],
                            ['choice_text' => 'une seule niche écologique pour toute l’île', 'is_correct' => false],
                            ['choice_text' => 'une impossibilité totale de migration', 'is_correct' => false],
                        ],
                        'explanation' => 'Des habitats variés peuvent accueillir des organismes ayant des rôles et exigences différents, favorisant une diversité fonctionnelle.',
                    ],
                    [
                        'question' => 'Pourquoi conserver plusieurs habitats au sein d’une même aire protégée ?',
                        'choices' => [
                            ['choice_text' => 'Parce que différentes espèces dépendent de conditions et de ressources différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les espèces exigent exactement le même habitat', 'is_correct' => false],
                            ['choice_text' => 'Parce que la diversité des habitats empêche toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'Parce que les habitats n’ont aucun lien avec la biodiversité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les espèces n’utilisent pas toutes les mêmes ressources ni les mêmes conditions physiques ; conserver plusieurs habitats protège donc une plus grande partie de la biodiversité.',
                    ],
                ],
            ],
            [
                'title' => 'Menaces sur la biodiversité',
                'description' => 'Identifier les principales causes de déclin de la biodiversité et leurs mécanismes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La destruction d’une forêt pour construire une route représente principalement :',
                        'choices' => [
                            ['choice_text' => 'une perte et une transformation d’habitat', 'is_correct' => true],
                            ['choice_text' => 'une augmentation automatique de la diversité génétique', 'is_correct' => false],
                            ['choice_text' => 'une mutation bénéfique', 'is_correct' => false],
                            ['choice_text' => 'une restauration écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La conversion d’un habitat naturel pour une infrastructure réduit ou transforme les conditions disponibles pour les espèces.',
                    ],
                    [
                        'question' => 'Le prélèvement d’un nombre trop élevé de poissons peut entraîner :',
                        'choices' => [
                            ['choice_text' => 'une surexploitation de la ressource', 'is_correct' => true],
                            ['choice_text' => 'une augmentation garantie de la population', 'is_correct' => false],
                            ['choice_text' => 'une disparition des producteurs terrestres', 'is_correct' => false],
                            ['choice_text' => 'une diversification automatique des habitats', 'is_correct' => false],
                        ],
                        'explanation' => 'La surexploitation survient lorsque les prélèvements dépassent la capacité de renouvellement de la ressource.',
                    ],
                    [
                        'question' => 'Une espèce introduite dans une région devient envahissante lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'se propage et provoque des effets importants sur les espèces ou les écosystèmes', 'is_correct' => true],
                            ['choice_text' => 'reste toujours confinée à un seul individu', 'is_correct' => false],
                            ['choice_text' => 'ne se reproduit jamais', 'is_correct' => false],
                            ['choice_text' => 'n’a aucun effet sur les communautés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce introduite n’est pas forcément envahissante ; le terme s’applique lorsqu’elle se répand et cause des impacts significatifs.',
                    ],
                    [
                        'question' => 'La pollution d’une rivière peut réduire la biodiversité lorsque :',
                        'choices' => [
                            ['choice_text' => 'certaines espèces sensibles ne peuvent plus survivre ou se reproduire correctement', 'is_correct' => true],
                            ['choice_text' => 'elle augmente nécessairement toutes les populations', 'is_correct' => false],
                            ['choice_text' => 'elle rend tous les habitats identiques', 'is_correct' => false],
                            ['choice_text' => 'elle supprime uniquement les facteurs génétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les polluants peuvent modifier les conditions du milieu et dépasser les capacités de tolérance de certaines espèces.',
                    ],
                    [
                        'question' => 'Le changement climatique peut affecter la biodiversité en modifiant :',
                        'choices' => [
                            ['choice_text' => 'la température, la disponibilité en eau et la répartition des habitats', 'is_correct' => true],
                            ['choice_text' => 'uniquement la couleur des roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement le nombre de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'seulement les espèces marines profondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les modifications du climat influencent de nombreux facteurs écologiques et peuvent déplacer ou réduire certains habitats favorables.',
                    ],
                    [
                        'question' => 'La fragmentation des habitats est particulièrement préoccupante pour :',
                        'choices' => [
                            ['choice_text' => 'les espèces qui ont besoin de grands territoires ou de déplacements réguliers', 'is_correct' => true],
                            ['choice_text' => 'les espèces qui n’interagissent jamais avec leur milieu', 'is_correct' => false],
                            ['choice_text' => 'les organismes sans habitat', 'is_correct' => false],
                            ['choice_text' => 'les minéraux du sous-sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grandes espèces ou celles qui se déplacent entre plusieurs ressources peuvent être particulièrement sensibles à l’isolement des fragments.',
                    ],
                    [
                        'question' => 'Lorsque des engrais riches en azote et phosphore atteignent un lac, un effet possible est :',
                        'choices' => [
                            ['choice_text' => 'une eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'une diminution automatique de tous les nutriments', 'is_correct' => false],
                            ['choice_text' => 'une fossilisation immédiate', 'is_correct' => false],
                            ['choice_text' => 'une spéciation en quelques heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Un enrichissement excessif en nutriments peut stimuler les algues et perturber l’équilibre du milieu aquatique.',
                    ],
                    [
                        'question' => 'La bioamplification concerne surtout :',
                        'choices' => [
                            ['choice_text' => 'l’augmentation de la concentration de certaines substances le long des niveaux trophiques', 'is_correct' => true],
                            ['choice_text' => 'la production d’oxygène par les arbres', 'is_correct' => false],
                            ['choice_text' => 'la croissance des racines', 'is_correct' => false],
                            ['choice_text' => 'la dispersion des graines uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines substances persistantes peuvent atteindre des concentrations plus élevées chez les organismes situés à des niveaux trophiques supérieurs.',
                    ],
                    [
                        'question' => 'La disparition locale d’une espèce signifie qu’elle :',
                        'choices' => [
                            ['choice_text' => 'a disparu de la zone considérée mais peut subsister ailleurs', 'is_correct' => true],
                            ['choice_text' => 'est nécessairement éteinte mondialement', 'is_correct' => false],
                            ['choice_text' => 'a changé de règne biologique', 'is_correct' => false],
                            ['choice_text' => 'ne possède plus d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Une extinction locale concerne une région précise et ne signifie pas forcément une extinction globale.',
                    ],
                    [
                        'question' => 'Quelle combinaison représente trois grandes menaces pour la biodiversité ?',
                        'choices' => [
                            ['choice_text' => 'perte d’habitat, surexploitation et espèces invasives', 'is_correct' => true],
                            ['choice_text' => 'photosynthèse, respiration et reproduction', 'is_correct' => false],
                            ['choice_text' => 'germination, croissance et floraison', 'is_correct' => false],
                            ['choice_text' => 'pluie, lumière et gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’habitat, la surexploitation et les espèces invasives font partie des principales pressions reconnues sur la biodiversité.',
                    ],
                ],
            ],
            [
                'title' => 'Conservation de la biodiversité',
                'description' => 'Aires protégées, conservation in situ et ex situ, restauration et suivi des espèces.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La conservation in situ consiste à :',
                        'choices' => [
                            ['choice_text' => 'protéger les espèces dans leur milieu naturel', 'is_correct' => true],
                            ['choice_text' => 'conserver uniquement de l’ADN en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'déplacer tous les animaux hors de la nature', 'is_correct' => false],
                            ['choice_text' => 'détruire les habitats dégradés', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation in situ vise à maintenir les populations dans leurs habitats naturels.',
                    ],
                    [
                        'question' => 'La conservation ex situ consiste à :',
                        'choices' => [
                            ['choice_text' => 'conserver des organismes ou du matériel biologique hors de leur milieu naturel', 'is_correct' => true],
                            ['choice_text' => 'protéger uniquement les forêts sauvages', 'is_correct' => false],
                            ['choice_text' => 'interdire toute reproduction en captivité', 'is_correct' => false],
                            ['choice_text' => 'augmenter la fragmentation des habitats', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zoos, jardins botaniques et banques de graines sont des exemples de conservation ex situ.',
                    ],
                    [
                        'question' => 'Une banque de graines peut être utile pour :',
                        'choices' => [
                            ['choice_text' => 'conserver des variétés végétales et leur diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'remplacer tous les écosystèmes naturels', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute sélection naturelle dans la nature', 'is_correct' => false],
                            ['choice_text' => 'supprimer les espèces locales', 'is_correct' => false],
                        ],
                        'explanation' => 'Les banques de graines constituent une réserve de diversité génétique pouvant soutenir des programmes de recherche, de sélection ou de restauration.',
                    ],
                    [
                        'question' => 'La restauration écologique cherche principalement à :',
                        'choices' => [
                            ['choice_text' => 'rétablir certaines fonctions et caractéristiques d’un écosystème dégradé', 'is_correct' => true],
                            ['choice_text' => 'transformer tous les habitats en zones urbaines', 'is_correct' => false],
                            ['choice_text' => 'supprimer toutes les espèces pionnières', 'is_correct' => false],
                            ['choice_text' => 'rendre un milieu artificiel identique à tous les autres', 'is_correct' => false],
                        ],
                        'explanation' => 'La restauration vise à améliorer l’état et le fonctionnement d’un écosystème dégradé, avec des objectifs adaptés au contexte.',
                    ],
                    [
                        'question' => 'Pourquoi protéger un habitat plutôt qu’une seule espèce peut-il être utile ?',
                        'choices' => [
                            ['choice_text' => 'Parce que de nombreuses espèces dépendent des mêmes ressources et interactions', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une seule espèce utilise tous les habitats', 'is_correct' => false],
                            ['choice_text' => 'Parce que les habitats n’influencent jamais les populations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les espèces n’ont pas de relations entre elles', 'is_correct' => false],
                        ],
                        'explanation' => 'La protection des habitats préserve simultanément les ressources, les interactions et les conditions nécessaires à plusieurs espèces.',
                    ],
                    [
                        'question' => 'Le suivi d’une population menacée permet notamment de :',
                        'choices' => [
                            ['choice_text' => 'détecter des changements d’effectif et évaluer les actions de conservation', 'is_correct' => true],
                            ['choice_text' => 'garantir qu’aucune mutation ne se produit', 'is_correct' => false],
                            ['choice_text' => 'supprimer la compétition naturelle', 'is_correct' => false],
                            ['choice_text' => 'mesurer directement tous les gènes sans échantillon', 'is_correct' => false],
                        ],
                        'explanation' => 'Les suivis démographiques permettent d’observer les tendances et d’évaluer si les mesures de conservation produisent les effets attendus.',
                    ],
                    [
                        'question' => 'Un corridor écologique est particulièrement utile pour :',
                        'choices' => [
                            ['choice_text' => 'maintenir la connectivité entre habitats fragmentés', 'is_correct' => true],
                            ['choice_text' => 'isoler les populations les unes des autres', 'is_correct' => false],
                            ['choice_text' => 'réduire la dispersion naturelle', 'is_correct' => false],
                            ['choice_text' => 'supprimer les déplacements saisonniers', 'is_correct' => false],
                        ],
                        'explanation' => 'La connectivité facilite les déplacements et peut soutenir le flux de gènes entre populations.',
                    ],
                    [
                        'question' => 'Une zone humide est restaurée pour améliorer la qualité de l’eau et offrir des habitats. Il s’agit d’une action qui cherche à restaurer :',
                        'choices' => [
                            ['choice_text' => 'plusieurs fonctions écologiques', 'is_correct' => true],
                            ['choice_text' => 'une seule mutation', 'is_correct' => false],
                            ['choice_text' => 'uniquement la couleur de l’eau', 'is_correct' => false],
                            ['choice_text' => 'la composition génétique de toutes les espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'La restauration d’un écosystème peut viser simultanément des fonctions hydrologiques, biologiques et parfois socio-économiques.',
                    ],
                    [
                        'question' => 'Un programme de conservation retire des individus d’une espèce invasive avant sa reproduction massive. L’objectif immédiat est de :',
                        'choices' => [
                            ['choice_text' => 'réduire sa population et limiter sa propagation', 'is_correct' => true],
                            ['choice_text' => 'augmenter sa dispersion', 'is_correct' => false],
                            ['choice_text' => 'favoriser sa dominance', 'is_correct' => false],
                            ['choice_text' => 'augmenter la fragmentation des habitats', 'is_correct' => false],
                        ],
                        'explanation' => 'Une détection et une intervention précoces peuvent limiter l’expansion d’une espèce introduite problématique.',
                    ],
                    [
                        'question' => 'Quelle approche permet de mieux évaluer une mesure de conservation ?',
                        'choices' => [
                            ['choice_text' => 'comparer des indicateurs avant et après l’action avec un suivi régulier', 'is_correct' => true],
                            ['choice_text' => 'observer une seule fois sans référence', 'is_correct' => false],
                            ['choice_text' => 'ignorer les changements du milieu', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement le coût financier', 'is_correct' => false],
                        ],
                        'explanation' => 'Un suivi avec indicateurs et comparaisons temporelles permet d’évaluer plus objectivement les changements associés à une action.',
                    ],
                ],
            ],
            [
                'title' => 'Biodiversité, agriculture et société',
                'description' => 'Ressources génétiques, pollinisation, sols, alimentation et services écosystémiques.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Pourquoi conserver plusieurs variétés d’une même culture ?',
                        'choices' => [
                            ['choice_text' => 'Pour maintenir une diversité génétique utile face aux maladies et aux changements du milieu', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre toutes les plantes identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute sélection', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la reproduction des cultures', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diversité variétale plus importante peut offrir des caractères utiles pour faire face à des maladies, ravageurs ou conditions environnementales variables.',
                    ],
                    [
                        'question' => 'La pollinisation des cultures par les insectes est un exemple de :',
                        'choices' => [
                            ['choice_text' => 'service écosystémique', 'is_correct' => true],
                            ['choice_text' => 'pollution biologique', 'is_correct' => false],
                            ['choice_text' => 'facteur abiotique', 'is_correct' => false],
                            ['choice_text' => 'mutation agricole', 'is_correct' => false],
                        ],
                        'explanation' => 'La pollinisation par les animaux fournit un bénéfice important à de nombreuses cultures et constitue un service écosystémique.',
                    ],
                    [
                        'question' => 'Les vers de terre participent notamment à :',
                        'choices' => [
                            ['choice_text' => 'la structuration et l’aération du sol', 'is_correct' => true],
                            ['choice_text' => 'la production directe de lumière', 'is_correct' => false],
                            ['choice_text' => 'la fixation de l’azote atmosphérique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'la disparition des microorganismes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activité des vers de terre mélange la matière organique, crée des galeries et contribue à la structure du sol.',
                    ],
                    [
                        'question' => 'Une diversité élevée de cultures dans une exploitation peut réduire le risque que :',
                        'choices' => [
                            ['choice_text' => 'une seule maladie détruise toute la production', 'is_correct' => true],
                            ['choice_text' => 'les plantes reçoivent de la lumière', 'is_correct' => false],
                            ['choice_text' => 'les sols contiennent de l’eau', 'is_correct' => false],
                            ['choice_text' => 'les graines germent', 'is_correct' => false],
                        ],
                        'explanation' => 'Diversifier les cultures réduit la dépendance à un seul type de plante et peut limiter certains risques sanitaires et environnementaux.',
                    ],
                    [
                        'question' => 'La biodiversité du sol contribue au recyclage de la matière grâce notamment :',
                        'choices' => [
                            ['choice_text' => 'aux microorganismes et aux petits animaux décomposeurs', 'is_correct' => true],
                            ['choice_text' => 'uniquement aux oiseaux migrateurs', 'is_correct' => false],
                            ['choice_text' => 'uniquement aux roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement au rayonnement solaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande diversité d’organismes du sol participe à la décomposition et au recyclage des nutriments.',
                    ],
                    [
                        'question' => 'Une forêt peut fournir du bois, stocker du carbone et offrir des habitats. Cela montre qu’un écosystème peut fournir :',
                        'choices' => [
                            ['choice_text' => 'plusieurs services écosystémiques simultanément', 'is_correct' => true],
                            ['choice_text' => 'un seul service universel', 'is_correct' => false],
                            ['choice_text' => 'uniquement une ressource minérale', 'is_correct' => false],
                            ['choice_text' => 'aucun bénéfice biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écosystèmes apportent de nombreux services : approvisionnement, régulation, soutien des fonctions écologiques et bénéfices culturels.',
                    ],
                    [
                        'question' => 'La disparition de pollinisateurs sauvages peut poser un problème pour certaines cultures parce que :',
                        'choices' => [
                            ['choice_text' => 'leur reproduction peut dépendre du transfert de pollen', 'is_correct' => true],
                            ['choice_text' => 'les cultures n’ont jamais besoin de graines', 'is_correct' => false],
                            ['choice_text' => 'les pollinisateurs fabriquent directement les fruits', 'is_correct' => false],
                            ['choice_text' => 'les plantes ne produisent pas de fleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses plantes dépendent des animaux pour transporter le pollen entre les fleurs, étape importante de la reproduction sexuée.',
                    ],
                    [
                        'question' => 'Une haie entre deux champs peut offrir :',
                        'choices' => [
                            ['choice_text' => 'un refuge et une voie de déplacement pour certains organismes', 'is_correct' => true],
                            ['choice_text' => 'un obstacle absolu pour tous les animaux', 'is_correct' => false],
                            ['choice_text' => 'un remplacement complet du sol agricole', 'is_correct' => false],
                            ['choice_text' => 'une disparition automatique des ravageurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les haies créent des habitats et peuvent améliorer la connectivité écologique dans les paysages agricoles.',
                    ],
                    [
                        'question' => 'Une variété locale de maïs résiste mieux à une sécheresse. Conserver cette variété permet surtout de préserver :',
                        'choices' => [
                            ['choice_text' => 'un caractère génétique potentiellement utile', 'is_correct' => true],
                            ['choice_text' => 'un nouvel écosystème marin', 'is_correct' => false],
                            ['choice_text' => 'une nouvelle classe de minéraux', 'is_correct' => false],
                            ['choice_text' => 'un facteur climatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique des cultures constitue une réserve de caractères qui peuvent être utiles pour l’adaptation et la sélection.',
                    ],
                    [
                        'question' => 'Quel énoncé relie correctement biodiversité et alimentation ?',
                        'choices' => [
                            ['choice_text' => 'La diversité des espèces et des ressources génétiques peut soutenir la variété et la résilience des systèmes alimentaires', 'is_correct' => true],
                            ['choice_text' => 'La biodiversité réduit toujours la diversité alimentaire', 'is_correct' => false],
                            ['choice_text' => 'Les ressources génétiques n’ont aucun intérêt agricole', 'is_correct' => false],
                            ['choice_text' => 'Toutes les cultures ont exactement les mêmes besoins biologiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité biologique soutient des cultures, élevages et ressources génétiques variés, ce qui peut renforcer la capacité d’adaptation des systèmes alimentaires.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de la biodiversité',
                'description' => 'Synthèse des notions essentielles : diversité, menaces, mesures et interprétation de données.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Un territoire contient 6 espèces de papillons, 4 espèces de reptiles et 10 espèces de plantes. Sa richesse spécifique totale, sans double comptage, est :',
                        'choices' => [
                            ['choice_text' => '20 espèces', 'is_correct' => true],
                            ['choice_text' => '10 espèces', 'is_correct' => false],
                            ['choice_text' => '14 espèces', 'is_correct' => false],
                            ['choice_text' => '60 espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'En supposant que les groupes ne se chevauchent pas, la richesse totale est 6 + 4 + 10 = 20 espèces.',
                    ],
                    [
                        'question' => 'Quelle proposition distingue correctement richesse spécifique et diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'La première concerne le nombre d’espèces, la seconde les variations génétiques', 'is_correct' => true],
                            ['choice_text' => 'Les deux termes désignent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'La richesse spécifique mesure uniquement les gènes', 'is_correct' => false],
                            ['choice_text' => 'La diversité génétique mesure uniquement les écosystèmes', 'is_correct' => false],
                        ],
                        'explanation' => 'La richesse spécifique décrit le nombre d’espèces, tandis que la diversité génétique porte sur les variantes héréditaires au sein des espèces.',
                    ],
                    [
                        'question' => 'Une petite population isolée perd plusieurs allèles après un fort déclin. Le phénomène est compatible avec :',
                        'choices' => [
                            ['choice_text' => 'un goulot d’étranglement suivi d’une perte de diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'une augmentation automatique de la richesse spécifique', 'is_correct' => false],
                            ['choice_text' => 'une eutrophisation', 'is_correct' => false],
                            ['choice_text' => 'une photosynthèse accélérée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déclin brutal réduit l’effectif reproducteur et peut entraîner une perte aléatoire d’allèles.',
                    ],
                    [
                        'question' => 'Une route coupe une forêt en deux blocs. Quel problème de conservation devient particulièrement important ?',
                        'choices' => [
                            ['choice_text' => 'la connectivité entre les populations', 'is_correct' => true],
                            ['choice_text' => 'la production de lumière solaire', 'is_correct' => false],
                            ['choice_text' => 'la formation des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'la salinité de l’océan', 'is_correct' => false],
                        ],
                        'explanation' => 'La coupure d’un habitat peut limiter les déplacements et les échanges génétiques entre populations.',
                    ],
                    [
                        'question' => 'Une zone protégée contient plusieurs habitats et un réseau de corridors. L’objectif écologique principal est de :',
                        'choices' => [
                            ['choice_text' => 'maintenir des habitats variés et leur connectivité', 'is_correct' => true],
                            ['choice_text' => 'réduire la diversité des espèces', 'is_correct' => false],
                            ['choice_text' => 'isoler toutes les populations', 'is_correct' => false],
                            ['choice_text' => 'supprimer les interactions écologiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La variété d’habitats protège davantage d’espèces, tandis que la connectivité facilite les déplacements et certains échanges entre populations.',
                    ],
                    [
                        'question' => 'Une population compte 500 individus avant une pollution puis 350 après. La baisse absolue est de :',
                        'choices' => [
                            ['choice_text' => '150 individus', 'is_correct' => true],
                            ['choice_text' => '50 individus', 'is_correct' => false],
                            ['choice_text' => '850 individus', 'is_correct' => false],
                            ['choice_text' => '30 individus', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution absolue est 500 − 350 = 150 individus.',
                    ],
                    [
                        'question' => 'Une espèce est présente dans une réserve mais ses effectifs diminuent chaque année. L’information la plus utile pour la conservation est :',
                        'choices' => [
                            ['choice_text' => 'le suivi de la tendance de population et la recherche des causes du déclin', 'is_correct' => true],
                            ['choice_text' => 'son nom commun uniquement', 'is_correct' => false],
                            ['choice_text' => 'sa couleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'la météo d’une seule journée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tendance démographique permet de déterminer l’évolution de la population et d’orienter la recherche des pressions responsables.',
                    ],
                    [
                        'question' => 'Quelle action cible directement la conservation de la diversité génétique d’une culture ?',
                        'choices' => [
                            ['choice_text' => 'conserver plusieurs variétés dans une banque de graines', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les variétés par une seule', 'is_correct' => false],
                            ['choice_text' => 'détruire les semences locales', 'is_correct' => false],
                            ['choice_text' => 'réduire le nombre de lignées conservées', 'is_correct' => false],
                        ],
                        'explanation' => 'Conserver plusieurs variétés maintient davantage de variantes génétiques disponibles pour la recherche et la sélection future.',
                    ],
                    [
                        'question' => 'Une espèce introduite augmente rapidement, concurrence une espèce locale et modifie l’habitat. Le principal enjeu est :',
                        'choices' => [
                            ['choice_text' => 'une invasion biologique pouvant réduire la biodiversité locale', 'is_correct' => true],
                            ['choice_text' => 'une augmentation certaine de la diversité génétique locale', 'is_correct' => false],
                            ['choice_text' => 'une succession primaire', 'is_correct' => false],
                            ['choice_text' => 'une amélioration automatique du fonctionnement de l’écosystème', 'is_correct' => false],
                        ],
                        'explanation' => 'Une espèce introduite très compétitive peut modifier les communautés et contribuer au déclin d’espèces locales.',
                    ],
                    [
                        'question' => 'Quel énoncé résume le mieux une stratégie de conservation fondée sur les connaissances écologiques ?',
                        'choices' => [
                            ['choice_text' => 'protéger les habitats, limiter les pressions et suivre les populations dans le temps', 'is_correct' => true],
                            ['choice_text' => 'protéger uniquement les individus visibles', 'is_correct' => false],
                            ['choice_text' => 'agir sans suivi ni mesure', 'is_correct' => false],
                            ['choice_text' => 'conserver une seule espèce en ignorant son milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conservation efficace s’appuie sur la protection des habitats, la réduction des menaces et l’évaluation régulière des populations et des écosystèmes.',
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
