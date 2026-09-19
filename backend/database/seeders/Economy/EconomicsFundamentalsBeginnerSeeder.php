<?php

namespace Database\Seeders;

// Source: :contentReference[oaicite:0]{index=0}

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicsFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economics-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’économie',
                'description' => 'Quiz débutant sur Introduction à l’économie.',
                'questions' => [
                    [
                        'question' => 'Qu’étudie principalement l’économie ?',
                        'explanation' => 'L’économie étudie la manière dont les ressources disponibles sont réparties entre différents usages afin de répondre aux besoins et aux préférences.',
                        'choices' => [
                            'La manière dont les ressources limitées sont utilisées pour satisfaire les besoins humains',
                            'Uniquement les marchés financiers',
                            'Uniquement la comptabilité des entreprises',
                            'Uniquement les décisions des gouvernements',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi dit-on que les ressources sont rares ?',
                        'explanation' => 'La rareté signifie que les ressources disponibles ne suffisent pas à satisfaire tous les besoins et désirs. Elle oblige donc les agents économiques à faire des choix.',
                        'choices' => [
                            'Parce que les ressources disponibles sont limitées par rapport aux besoins et aux désirs',
                            'Parce que toutes les ressources sont gratuites',
                            'Parce que les besoins humains sont toujours faibles',
                            'Parce que les entreprises contrôlent toutes les ressources',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un besoin économique ?',
                        'explanation' => 'Un besoin économique correspond à une nécessité ou une envie qui peut être satisfaite grâce à la consommation d’un bien ou d’un service.',
                        'choices' => [
                            'Une nécessité ou une envie pouvant être satisfaite par des biens ou des services',
                            'Uniquement une dépense publique',
                            'Uniquement un investissement financier',
                            'Une obligation fiscale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien économique ?',
                        'explanation' => 'Un bien économique est disponible en quantité limitée et possède une valeur parce que son utilisation implique un choix et un coût d’opportunité.',
                        'choices' => [
                            'Un bien disponible en quantité limitée et ayant une valeur économique',
                            'Un bien toujours disponible gratuitement',
                            'Uniquement un produit de luxe',
                            'Uniquement un produit importé',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un service ?',
                        'explanation' => 'Un service est une prestation principalement immatérielle qui répond à un besoin, comme le transport, l’enseignement ou les soins.',
                        'choices' => [
                            'Une prestation immatérielle destinée à satisfaire un besoin',
                            'Uniquement un produit industriel',
                            'Une matière première',
                            'Une monnaie nationale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie faire un choix économique ?',
                        'explanation' => 'Faire un choix économique consiste à affecter des ressources limitées à une possibilité plutôt qu’à une autre.',
                        'choices' => [
                            'Décider comment utiliser des ressources limitées entre plusieurs possibilités',
                            'Éviter toute utilisation de ressources',
                            'Acheter uniquement les produits les moins chers',
                            'Produire sans tenir compte des besoins',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le coût d’opportunité ?',
                        'explanation' => 'Le coût d’opportunité représente ce à quoi l’on renonce en choisissant une option : c’est la valeur de la meilleure alternative abandonnée.',
                        'choices' => [
                            'La valeur de la meilleure alternative abandonnée lorsqu’un choix est effectué',
                            'Le prix affiché sur une facture',
                            'Le montant des impôts payés',
                            'Le bénéfice réalisé par une entreprise',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle question fondamentale concerne la production ?',
                        'explanation' => 'Une économie doit décider quels biens et services produire, dans quelles quantités et, plus largement, comment utiliser ses ressources productives.',
                        'choices' => [
                            'Quels biens et services doivent être produits et en quelles quantités ?',
                            'Quel pays doit utiliser quelle monnaie ?',
                            'Quel consommateur doit payer le plus d’impôts ?',
                            'Quelle banque doit imprimer le plus de billets ?',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre microéconomie et macroéconomie ?',
                        'explanation' => 'La microéconomie analyse surtout les décisions des ménages, entreprises et marchés particuliers, tandis que la macroéconomie s’intéresse aux grands agrégats de l’économie.',
                        'choices' => [
                            'La microéconomie étudie les agents et marchés particuliers, tandis que la macroéconomie étudie l’économie dans son ensemble',
                            'La microéconomie étudie uniquement les banques',
                            'La macroéconomie étudie uniquement les entreprises',
                            'Il n’existe aucune différence entre les deux',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un exemple de décision microéconomique ?',
                        'explanation' => 'Décider du niveau de production est une décision microéconomique car elle concerne directement le comportement et les choix d’une entreprise.',
                        'choices' => [
                            'Une entreprise décide combien produire',
                            'Un gouvernement mesure le PIB national',
                            'Une banque centrale analyse l’inflation nationale',
                            'Un pays calcule son taux de chômage',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Offre et demande',
                'description' => 'Quiz débutant sur Offre et demande.',
                'questions' => [
                    [
                        'question' => 'Que représente la demande sur un marché ?',
                        'explanation' => 'La demande indique les quantités qu’un consommateur ou un ensemble de consommateurs souhaite et peut acheter selon les différents niveaux de prix.',
                        'choices' => [
                            'La quantité d’un bien que les consommateurs souhaitent et peuvent acheter à différents prix',
                            'La quantité produite uniquement par les entreprises',
                            'Le montant total des impôts',
                            'Le nombre de salariés d’une entreprise',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Selon la loi de la demande, toutes choses égales par ailleurs, que se passe-t-il lorsque le prix augmente ?',
                        'explanation' => 'Toutes choses égales par ailleurs, une hausse du prix réduit généralement la quantité que les consommateurs souhaitent et peuvent acheter.',
                        'choices' => [
                            'La quantité demandée tend à diminuer',
                            'La quantité demandée augmente toujours',
                            'L’offre disparaît',
                            'Les revenus augmentent automatiquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente l’offre ?',
                        'explanation' => 'L’offre représente les quantités que les producteurs sont disposés et capables de vendre à différents niveaux de prix.',
                        'choices' => [
                            'La quantité qu’un producteur ou l’ensemble des producteurs souhaitent vendre à différents prix',
                            'La quantité que les consommateurs souhaitent acheter',
                            'Le niveau général des salaires',
                            'Le montant de la dette publique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Selon la loi de l’offre, toutes choses égales par ailleurs, que se passe-t-il lorsque le prix augmente ?',
                        'explanation' => 'Toutes choses égales par ailleurs, un prix plus élevé rend généralement la production de certaines unités plus attractive, ce qui augmente la quantité offerte.',
                        'choices' => [
                            'La quantité offerte tend à augmenter',
                            'La quantité offerte diminue toujours',
                            'La demande disparaît',
                            'Les coûts deviennent automatiquement nuls',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’équilibre de marché ?',
                        'explanation' => 'L’équilibre de marché correspond à la situation où la quantité que les acheteurs souhaitent acheter est égale à la quantité que les vendeurs souhaitent vendre.',
                        'choices' => [
                            'Le point où la quantité demandée est égale à la quantité offerte',
                            'Le point où le prix est toujours égal à zéro',
                            'Le point où les entreprises cessent de produire',
                            'Le point où les consommateurs arrêtent d’acheter',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que peut provoquer une augmentation de la demande, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une hausse de la demande déplace la courbe de demande vers la droite. Avec une offre inchangée, le prix et la quantité d’équilibre augmentent généralement.',
                        'choices' => [
                            'Une hausse du prix et de la quantité d’équilibre',
                            'Une baisse certaine du prix et de la quantité',
                            'Une disparition de l’offre',
                            'Une baisse automatique des coûts de production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que peut provoquer une augmentation des coûts de production ?',
                        'explanation' => 'Des coûts de production plus élevés réduisent la rentabilité de la production à chaque niveau de prix et tendent donc à diminuer l’offre.',
                        'choices' => [
                            'Une diminution de l’offre',
                            'Une augmentation automatique de l’offre',
                            'Une disparition de la demande',
                            'Une baisse obligatoire des salaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un prix d’équilibre ?',
                        'explanation' => 'Le prix d’équilibre est le prix auquel les quantités demandée et offerte sont égales dans le modèle de marché considéré.',
                        'choices' => [
                            'Le prix auquel la quantité demandée correspond à la quantité offerte',
                            'Le prix fixé obligatoirement par l’État',
                            'Le prix le plus élevé possible',
                            'Le prix de production uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie un excédent d’offre ?',
                        'explanation' => 'Un excédent d’offre apparaît lorsque les vendeurs souhaitent vendre davantage que les acheteurs ne souhaitent acheter au prix considéré.',
                        'choices' => [
                            'La quantité offerte est supérieure à la quantité demandée au prix considéré',
                            'La demande est supérieure à l’offre',
                            'Les consommateurs ne peuvent rien acheter',
                            'Le prix est nécessairement nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une pénurie sur un marché ?',
                        'explanation' => 'Une pénurie apparaît lorsque les acheteurs souhaitent acquérir davantage que les vendeurs ne souhaitent offrir au prix considéré.',
                        'choices' => [
                            'La quantité demandée est supérieure à la quantité offerte au prix considéré',
                            'L’offre est supérieure à la demande',
                            'Les entreprises ont trop de stocks',
                            'Les prix sont toujours très élevés',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Prix, marché et concurrence',
                'description' => 'Quiz débutant sur Prix, marché et concurrence.',
                'questions' => [
                    [
                        'question' => 'Quel rôle joue principalement le prix dans une économie de marché ?',
                        'explanation' => 'Le prix sert de signal : il transmet des informations sur la rareté et influence les décisions d’achat et de production.',
                        'choices' => [
                            'Il transmet des informations et contribue à coordonner l’offre et la demande',
                            'Il détermine directement les préférences de tous les consommateurs',
                            'Il élimine automatiquement la concurrence',
                            'Il remplace toutes les décisions publiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un marché concurrentiel ?',
                        'explanation' => 'Un marché concurrentiel compte plusieurs acheteurs et vendeurs, et aucun acteur individuel ne peut généralement contrôler seul le prix du marché.',
                        'choices' => [
                            'Un marché où plusieurs acheteurs et vendeurs interagissent et où aucun acteur individuel ne contrôle généralement le prix',
                            'Un marché avec un seul vendeur',
                            'Un marché sans consommateurs',
                            'Un marché où les prix sont toujours fixés par l’État',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un monopole ?',
                        'explanation' => 'Un monopole existe lorsqu’un seul vendeur domine l’offre d’un marché et dispose d’un pouvoir important sur les conditions de vente.',
                        'choices' => [
                            'Une situation où un seul vendeur domine l’offre d’un marché',
                            'Une situation avec une multitude de petits vendeurs',
                            'Une situation où aucun produit n’est vendu',
                            'Un marché exclusivement international',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un oligopole ?',
                        'explanation' => 'Un oligopole est un marché dans lequel un nombre limité de grandes entreprises détient une part importante de l’offre.',
                        'choices' => [
                            'Un marché dominé par un nombre limité de grandes entreprises',
                            'Un marché avec un seul consommateur',
                            'Un marché sans entreprises',
                            'Un marché composé uniquement d’entreprises publiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle caractéristique est associée à la concurrence parfaite dans son modèle théorique ?',
                        'explanation' => 'Dans le modèle de concurrence parfaite, on suppose notamment un grand nombre d’acheteurs et de vendeurs ainsi que des produits homogènes.',
                        'choices' => [
                            'Un grand nombre d’acheteurs et de vendeurs et des produits homogènes',
                            'Un seul vendeur contrôlant toute l’offre',
                            'Des barrières à l’entrée très élevées',
                            'Des produits nécessairement uniques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les barrières à l’entrée sont-elles importantes ?',
                        'explanation' => 'Les barrières à l’entrée rendent plus difficile l’arrivée de nouvelles entreprises et peuvent ainsi limiter la concurrence sur un marché.',
                        'choices' => [
                            'Elles peuvent empêcher de nouvelles entreprises d’entrer facilement sur un marché',
                            'Elles garantissent toujours une baisse des prix',
                            'Elles augmentent automatiquement le nombre de concurrents',
                            'Elles suppriment les coûts de production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un exemple de barrière à l’entrée ?',
                        'explanation' => 'Des coûts initiaux importants peuvent empêcher ou décourager de nouvelles entreprises d’entrer dans une industrie.',
                        'choices' => [
                            'Des coûts initiaux très élevés nécessaires pour entrer dans une industrie',
                            'Une augmentation du nombre de consommateurs',
                            'Une baisse de la demande',
                            'Une amélioration de la productivité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la concurrence peut-elle profiter aux consommateurs ?',
                        'explanation' => 'La concurrence peut pousser les entreprises à proposer des prix compétitifs, à améliorer la qualité et à innover pour attirer les consommateurs.',
                        'choices' => [
                            'Elle peut encourager des prix plus compétitifs, une meilleure qualité et davantage d’innovation',
                            'Elle garantit toujours des prix élevés',
                            'Elle réduit nécessairement la qualité',
                            'Elle empêche toute innovation',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un pouvoir de marché ?',
                        'explanation' => 'Le pouvoir de marché désigne la capacité d’un acteur à influencer le prix ou d’autres conditions du marché au lieu de simplement les accepter.',
                        'choices' => [
                            'La capacité d’un acteur à influencer les conditions ou le prix du marché',
                            'La capacité d’un consommateur à créer de la monnaie',
                            'La capacité d’un pays à supprimer tous les marchés',
                            'La capacité d’une entreprise à éviter toute concurrence mondiale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il intervenir contre certaines pratiques anticoncurrentielles ?',
                        'explanation' => 'L’intervention publique peut viser à préserver la concurrence lorsque certaines pratiques risquent de réduire la concurrence ou de nuire au fonctionnement du marché.',
                        'choices' => [
                            'Pour préserver le fonctionnement concurrentiel des marchés et protéger les consommateurs',
                            'Pour supprimer toute entreprise privée',
                            'Pour empêcher toute baisse des prix',
                            'Pour garantir un monopole à chaque entreprise',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Production et facteurs de production',
                'description' => 'Quiz débutant sur Production et facteurs de production.',
                'questions' => [
                    [
                        'question' => 'Quels sont les principaux facteurs de production ?',
                        'explanation' => 'Les facteurs de production sont les ressources utilisées pour produire, notamment le travail, le capital, la terre et l’entrepreneuriat.',
                        'choices' => [
                            'Le travail, le capital, la terre et l’entrepreneuriat',
                            'Uniquement la monnaie et les banques',
                            'Uniquement les consommateurs',
                            'Uniquement les ressources naturelles',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente le facteur travail ?',
                        'explanation' => 'Le facteur travail désigne l’effort humain, physique ou intellectuel, utilisé dans la production de biens et services.',
                        'choices' => [
                            'L’effort humain consacré à la production de biens et services',
                            'Uniquement les machines',
                            'Uniquement les ressources naturelles',
                            'Les bénéfices d’une entreprise',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente le capital dans la théorie économique de la production ?',
                        'explanation' => 'En économie, le capital désigne principalement les biens produits qui servent eux-mêmes à produire d’autres biens et services.',
                        'choices' => [
                            'Les biens produits utilisés pour produire d’autres biens et services',
                            'Uniquement l’argent liquide détenu par les ménages',
                            'Uniquement les ressources naturelles',
                            'Uniquement les salaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un exemple de capital productif ?',
                        'explanation' => 'Une machine utilisée dans une usine est un exemple de capital productif car elle contribue directement au processus de production.',
                        'choices' => [
                            'Une machine utilisée dans une usine',
                            'Un repas consommé par un ménage',
                            'Un vêtement porté par un consommateur',
                            'Une ressource naturelle non exploitée',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la productivité du travail ?',
                        'explanation' => 'La productivité du travail mesure la quantité de production obtenue par unité de travail utilisée.',
                        'choices' => [
                            'La quantité de production réalisée par unité de travail',
                            'Le nombre total de travailleurs uniquement',
                            'Le montant des impôts sur les salaires',
                            'Le prix de vente d’un produit',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Comment une amélioration technologique peut-elle influencer la production ?',
                        'explanation' => 'Une amélioration technologique peut rendre les facteurs plus efficaces et permettre de produire davantage avec une quantité donnée de ressources.',
                        'choices' => [
                            'Elle peut permettre de produire davantage avec une quantité donnée de ressources',
                            'Elle réduit toujours la production',
                            'Elle supprime nécessairement tous les emplois',
                            'Elle rend les ressources illimitées',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la division du travail ?',
                        'explanation' => 'La division du travail consiste à répartir la production en plusieurs tâches spécialisées réalisées par différents travailleurs ou unités.',
                        'choices' => [
                            'La répartition d’un processus de production en différentes tâches spécialisées',
                            'La suppression de toutes les spécialisations',
                            'La fermeture des entreprises',
                            'La réduction volontaire des échanges',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel peut être l’avantage de la spécialisation ?',
                        'explanation' => 'La spécialisation peut accroître la productivité grâce à l’apprentissage, à la répétition des tâches et à une meilleure organisation de la production.',
                        'choices' => [
                            'Elle peut augmenter la productivité et l’efficacité grâce à l’apprentissage et à la division des tâches',
                            'Elle empêche toujours les échanges',
                            'Elle supprime tous les coûts',
                            'Elle réduit nécessairement la production',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût de production ?',
                        'explanation' => 'Un coût de production est une dépense ou une ressource sacrifiée par le producteur pour fabriquer un bien ou fournir un service.',
                        'choices' => [
                            'Une dépense nécessaire pour produire un bien ou un service',
                            'Uniquement le prix payé par le consommateur',
                            'Uniquement le bénéfice de l’entreprise',
                            'Une taxe internationale uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est l’objectif économique général d’une entreprise privée ?',
                        'explanation' => 'Une entreprise privée cherche généralement à produire des biens ou services demandés tout en recherchant un profit compte tenu de ses contraintes.',
                        'choices' => [
                            'Produire des biens ou services et rechercher généralement un profit',
                            'Éviter toute production',
                            'Maximiser uniquement les dépenses',
                            'Supprimer la demande des consommateurs',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Consommation et comportement des ménages',
                'description' => 'Quiz débutant sur Consommation et comportement des ménages.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la consommation ?',
                        'explanation' => 'La consommation consiste à utiliser des biens et services afin de satisfaire directement des besoins ou des envies.',
                        'choices' => [
                            'L’utilisation de biens et services pour satisfaire des besoins ou des envies',
                            'La production de machines uniquement',
                            'La collecte des impôts',
                            'La création de monnaie par la banque centrale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel facteur influence généralement la consommation des ménages ?',
                        'explanation' => 'Le revenu disponible est un déterminant important de la consommation car il influence les ressources dont dispose un ménage pour acheter des biens et services.',
                        'choices' => [
                            'Le revenu disponible',
                            'Uniquement la superficie du pays',
                            'Uniquement le nombre de banques centrales',
                            'Uniquement les exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le revenu disponible ?',
                        'explanation' => 'Le revenu disponible correspond au revenu dont le ménage peut effectivement disposer après les prélèvements directs et en tenant compte des transferts concernés.',
                        'choices' => [
                            'Le revenu dont dispose un ménage après les impôts directs et après réception des transferts concernés',
                            'Le chiffre d’affaires d’une entreprise',
                            'Le PIB total d’un pays',
                            'Le montant total des exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’épargne ?',
                        'explanation' => 'L’épargne est la partie du revenu qui n’est pas consommée immédiatement et qui peut être conservée ou investie pour une utilisation future.',
                        'choices' => [
                            'La partie du revenu qui n’est pas consommée immédiatement',
                            'La totalité du revenu dépensée',
                            'Une dette publique',
                            'Une taxe sur les entreprises',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsque le revenu d’un ménage augmente, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une hausse du revenu augmente généralement les ressources disponibles pour consommer et épargner, même si la répartition entre les deux dépend des choix du ménage.',
                        'choices' => [
                            'Sa capacité de consommation et d’épargne peut augmenter',
                            'Sa capacité de consommation diminue toujours',
                            'Son revenu disponible devient automatiquement nul',
                            'Il doit nécessairement réduire son épargne',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les ménages épargnent-ils ?',
                        'explanation' => 'Les ménages peuvent épargner pour financer des projets futurs, faire face aux imprévus ou constituer un patrimoine.',
                        'choices' => [
                            'Pour préparer des dépenses futures, faire face aux imprévus ou accumuler un patrimoine',
                            'Pour empêcher toute consommation future',
                            'Pour supprimer les marchés',
                            'Pour réduire automatiquement l’inflation',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien normal ?',
                        'explanation' => 'Un bien normal est un bien dont la demande tend à augmenter lorsque le revenu du consommateur augmente, toutes choses égales par ailleurs.',
                        'choices' => [
                            'Un bien dont la demande tend à augmenter lorsque le revenu augmente',
                            'Un bien dont la demande augmente uniquement lorsque le prix augmente',
                            'Un bien nécessairement gratuit',
                            'Un bien vendu uniquement par l’État',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien inférieur ?',
                        'explanation' => 'Un bien inférieur est un bien dont la demande peut diminuer lorsque le revenu augmente, car le consommateur peut alors préférer des alternatives.',
                        'choices' => [
                            'Un bien dont la demande peut diminuer lorsque le revenu augmente, toutes choses égales par ailleurs',
                            'Un bien toujours de mauvaise qualité',
                            'Un bien dont le prix est toujours nul',
                            'Un bien qui ne peut jamais être consommé',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’utilité en économie ?',
                        'explanation' => 'L’utilité représente la satisfaction qu’un consommateur retire de la consommation d’un bien, d’un service ou d’un ensemble de biens.',
                        'choices' => [
                            'La satisfaction qu’un consommateur retire de la consommation d’un bien ou service',
                            'Le bénéfice comptable d’une entreprise',
                            'Le montant des taxes',
                            'La quantité produite par une usine',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les consommateurs doivent-ils généralement arbitrer entre plusieurs choix ?',
                        'explanation' => 'Les ressources des consommateurs sont limitées alors que leurs besoins et préférences sont nombreux ; ils doivent donc arbitrer entre plusieurs possibilités.',
                        'choices' => [
                            'Parce que leurs ressources disponibles sont limitées alors que leurs besoins et désirs sont nombreux',
                            'Parce que tous les biens ont le même prix',
                            'Parce que les revenus sont toujours illimités',
                            'Parce que les marchés interdisent toute consommation',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, banques et système financier',
                'description' => 'Quiz débutant sur Monnaie, banques et système financier.',
                'questions' => [
                    [
                        'question' => 'Quelles sont les fonctions classiques de la monnaie ?',
                        'explanation' => 'Les fonctions classiques de la monnaie sont de servir de moyen d’échange, d’unité de compte et de réserve de valeur.',
                        'choices' => [
                            'Moyen d’échange, unité de compte et réserve de valeur',
                            'Uniquement moyen de paiement international',
                            'Uniquement instrument fiscal',
                            'Uniquement réserve d’or',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la monnaie facilite-t-elle les échanges ?',
                        'explanation' => 'La monnaie facilite les échanges car elle évite la nécessité d’une double coïncidence des besoins présente dans le troc.',
                        'choices' => [
                            'Elle évite de devoir trouver directement une personne souhaitant exactement ce que l’on propose en échange',
                            'Elle supprime tous les besoins humains',
                            'Elle rend tous les biens gratuits',
                            'Elle élimine toute rareté',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une banque commerciale ?',
                        'explanation' => 'Une banque commerciale collecte notamment des dépôts et accorde des crédits aux ménages, entreprises ou autres agents selon les règles applicables.',
                        'choices' => [
                            'Une institution qui collecte notamment des dépôts et accorde des crédits',
                            'Une institution qui produit uniquement des biens agricoles',
                            'Une administration fiscale',
                            'Une entreprise qui ne réalise jamais de prêts',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'explanation' => 'Une banque centrale conduit la politique monétaire et participe, selon son mandat, à la stabilité monétaire et financière.',
                        'choices' => [
                            'Conduire la politique monétaire et contribuer à la stabilité monétaire et financière selon son mandat',
                            'Vendre directement tous les biens aux consommateurs',
                            'Fixer les salaires de toutes les entreprises',
                            'Gérer les ménages privés',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux d’intérêt ?',
                        'explanation' => 'Le taux d’intérêt représente généralement le coût d’un emprunt ou la rémunération d’un placement, exprimé sous forme de taux.',
                        'choices' => [
                            'Le coût de l’emprunt ou la rémunération d’un placement exprimé généralement en pourcentage',
                            'Le montant total d’un salaire',
                            'Le prix d’un bien uniquement',
                            'Le taux de chômage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que peut provoquer une baisse des taux d’intérêt, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une baisse des taux d’intérêt réduit généralement le coût de certains emprunts et peut encourager certaines dépenses d’investissement ou de consommation.',
                        'choices' => [
                            'Elle peut encourager certains emprunts et certaines dépenses d’investissement ou de consommation',
                            'Elle rend toujours l’emprunt plus coûteux',
                            'Elle supprime nécessairement l’épargne',
                            'Elle réduit automatiquement la quantité de monnaie à zéro',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un crédit ?',
                        'explanation' => 'Un crédit est une somme mise à la disposition d’un emprunteur qui doit normalement la rembourser selon les conditions du contrat.',
                        'choices' => [
                            'Une somme mise à disposition d’un emprunteur avec une obligation de remboursement selon des conditions convenues',
                            'Une subvention qui ne doit jamais être remboursée',
                            'Une taxe obligatoire',
                            'Une dépense de consommation uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le marché financier ?',
                        'explanation' => 'Le marché financier regroupe des marchés sur lesquels s’échangent différents instruments financiers permettant notamment le financement et l’investissement.',
                        'choices' => [
                            'Un ensemble de marchés où s’échangent notamment des instruments financiers',
                            'Un marché réservé exclusivement aux produits alimentaires',
                            'Un marché où aucune entreprise ne peut participer',
                            'Un marché exclusivement consacré aux devises physiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une action ?',
                        'explanation' => 'Une action représente une part de propriété dans une entreprise et peut donner certains droits selon sa catégorie et les règles applicables.',
                        'choices' => [
                            'Un titre représentant une part de propriété dans une entreprise',
                            'Une dette publique obligatoire',
                            'Un billet de banque',
                            'Un contrat de travail',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une obligation ?',
                        'explanation' => 'Une obligation est un titre de créance : l’investisseur prête généralement des fonds à un émetteur qui s’engage à rembourser selon les conditions prévues.',
                        'choices' => [
                            'Un titre de créance représentant généralement un emprunt effectué par un émetteur',
                            'Une part de propriété identique à une action',
                            'Une monnaie étrangère',
                            'Un produit de consommation',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Indicateurs économiques fondamentaux',
                'description' => 'Quiz débutant sur Indicateurs économiques fondamentaux.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement le PIB ?',
                        'explanation' => 'Le PIB mesure la valeur des biens et services finaux produits sur un territoire pendant une période donnée.',
                        'choices' => [
                            'La valeur des biens et services finaux produits sur un territoire pendant une période donnée',
                            'La richesse totale détenue par les ménages',
                            'Uniquement les exportations',
                            'Uniquement les revenus des entreprises',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une croissance du PIB réel ?',
                        'explanation' => 'La croissance du PIB réel correspond à une augmentation de la production mesurée après avoir neutralisé l’effet des variations générales des prix.',
                        'choices' => [
                            'Une augmentation de la production mesurée en neutralisant l’effet des variations générales des prix',
                            'Une augmentation obligatoire des prix',
                            'Une diminution de la production',
                            'Une hausse automatique du chômage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’inflation ?',
                        'explanation' => 'L’inflation désigne une hausse générale et persistante du niveau des prix, et non simplement la hausse du prix d’un seul produit.',
                        'choices' => [
                            'Une hausse générale et persistante du niveau des prix',
                            'Une baisse générale des salaires uniquement',
                            'Une hausse du prix d’un seul produit',
                            'Une diminution de la production agricole uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de chômage ?',
                        'explanation' => 'Le taux de chômage rapporte le nombre de personnes sans emploi qui recherchent un emploi à la population active, selon la définition statistique utilisée.',
                        'choices' => [
                            'La proportion de la population active qui est sans emploi et recherche un emploi selon la définition retenue',
                            'La proportion de toute la population sans emploi',
                            'Le nombre total d’étudiants',
                            'La proportion de retraités',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une récession dans une définition courante simplifiée ?',
                        'explanation' => 'Dans une définition simplifiée, une récession correspond à une période durant laquelle l’activité économique connaît un recul important.',
                        'choices' => [
                            'Une période de recul significatif de l’activité économique',
                            'Une période de croissance très rapide',
                            'Une période où les prix restent toujours constants',
                            'Une période de plein emploi garanti',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le revenu national ?',
                        'explanation' => 'Le revenu national est un agrégat comptable qui mesure les revenus générés par les facteurs de production d’une économie selon la définition retenue.',
                        'choices' => [
                            'Un agrégat mesurant les revenus générés par les facteurs de production d’une économie selon une définition comptable donnée',
                            'Uniquement les recettes fiscales',
                            'Uniquement les bénéfices des banques',
                            'Uniquement les exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le PIB par habitant est-il utilisé ?',
                        'explanation' => 'Le PIB par habitant rapporte la production économique à la population et permet ainsi de disposer d’une mesure moyenne par personne.',
                        'choices' => [
                            'Il permet de rapporter la production économique à la taille de la population',
                            'Il mesure directement le bonheur de chaque individu',
                            'Il mesure uniquement les inégalités',
                            'Il indique exactement le patrimoine de chaque ménage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel indicateur est généralement utilisé pour suivre l’évolution générale des prix à la consommation ?',
                        'explanation' => 'L’indice des prix à la consommation suit l’évolution du coût d’un panier de biens et services consommés par les ménages selon la méthodologie retenue.',
                        'choices' => [
                            'L’indice des prix à la consommation',
                            'Le taux de chômage uniquement',
                            'Le PIB nominal uniquement',
                            'La balance commerciale uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la productivité ?',
                        'explanation' => 'La productivité compare la quantité produite à la quantité de ressources utilisées pour obtenir cette production.',
                        'choices' => [
                            'Une mesure de la quantité produite par rapport aux ressources utilisées',
                            'Une mesure exclusive de l’inflation',
                            'Une mesure uniquement fiscale',
                            'Une mesure du nombre de banques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs économiques sont-ils utiles ?',
                        'explanation' => 'Les indicateurs économiques servent à mesurer et suivre différents aspects de l’économie et à mieux comprendre son évolution.',
                        'choices' => [
                            'Ils permettent d’analyser l’état et l’évolution de l’économie et d’éclairer certaines décisions',
                            'Ils permettent de prévoir parfaitement l’avenir',
                            'Ils éliminent toutes les incertitudes',
                            'Ils remplacent toutes les analyses économiques',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Commerce international et économie mondiale',
                'description' => 'Quiz débutant sur Commerce international et économie mondiale.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le commerce international ?',
                        'explanation' => 'Le commerce international désigne les échanges de biens et services entre agents situés dans différents pays.',
                        'choices' => [
                            'L’échange de biens et services entre différents pays',
                            'Uniquement les échanges entre entreprises d’une même ville',
                            'Uniquement les échanges de monnaie',
                            'Uniquement les investissements publics',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'explanation' => 'Une exportation est la vente d’un bien ou service à un acheteur situé à l’étranger.',
                        'choices' => [
                            'La vente d’un bien ou service à un acheteur situé à l’étranger',
                            'L’achat d’un produit étranger',
                            'La production destinée uniquement au marché intérieur',
                            'Le paiement d’un impôt national',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'explanation' => 'Une importation est l’achat d’un bien ou service provenant de l’étranger.',
                        'choices' => [
                            'L’achat d’un bien ou service provenant de l’étranger',
                            'La vente d’un produit à l’étranger',
                            'La production nationale destinée à l’exportation',
                            'Une dépense publique intérieure',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’avantage comparatif ?',
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays possède un avantage comparatif dans une activité lorsqu’il renonce à moins d’autres productions que son partenaire.',
                        'choices' => [
                            'La capacité d’un pays à produire un bien avec un coût d’opportunité inférieur à celui d’un autre pays',
                            'La capacité de produire absolument tous les biens au coût le plus faible',
                            'La capacité d’imposer des taxes à tous les pays',
                            'La capacité de contrôler toutes les monnaies',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un avantage potentiel du commerce international ?',
                        'explanation' => 'Le commerce international peut permettre aux pays de se spécialiser, d’utiliser leurs avantages comparatifs et d’accéder à une plus grande variété de biens et services.',
                        'choices' => [
                            'Permettre la spécialisation et l’accès à une plus grande variété de biens et services',
                            'Supprimer toute concurrence',
                            'Rendre tous les pays identiques',
                            'Éliminer toute dépendance économique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un droit de douane ?',
                        'explanation' => 'Un droit de douane est une taxe appliquée à certaines marchandises importées.',
                        'choices' => [
                            'Une taxe appliquée à certaines importations',
                            'Une subvention automatique aux exportateurs',
                            'Une taxe uniquement sur les salaires',
                            'Une taxe sur les transactions nationales uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une balance commerciale ?',
                        'explanation' => 'La balance commerciale mesure la différence entre la valeur des exportations et celle des importations de biens.',
                        'choices' => [
                            'La différence entre la valeur des exportations et celle des importations de biens',
                            'La différence entre les impôts et les dépenses publiques',
                            'La différence entre les salaires et les profits',
                            'La différence entre l’épargne et la consommation',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'explanation' => 'Le taux de change indique combien d’unités d’une monnaie sont nécessaires pour obtenir une unité d’une autre monnaie.',
                        'choices' => [
                            'Le prix d’une monnaie exprimé dans une autre monnaie',
                            'Le taux d’imposition des entreprises',
                            'Le taux de croissance du PIB',
                            'Le taux de chômage d’un pays',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que peut provoquer une appréciation de la monnaie nationale, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une appréciation de la monnaie nationale rend, toutes choses égales par ailleurs, les biens nationaux relativement plus chers pour les acheteurs étrangers.',
                        'choices' => [
                            'Les exportations peuvent devenir relativement plus coûteuses pour les acheteurs étrangers',
                            'Les exportations deviennent toujours gratuites',
                            'Les importations deviennent toujours plus coûteuses',
                            'Le commerce international cesse nécessairement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils même lorsqu’ils peuvent produire eux-mêmes certains biens ?',
                        'explanation' => 'Les pays peuvent tirer des gains de la spécialisation et de l’échange fondés sur les avantages comparatifs, même lorsqu’ils sont capables de produire eux-mêmes les biens concernés.',
                        'choices' => [
                            'Parce que la spécialisation selon les avantages comparatifs peut permettre des gains mutuels à l’échange',
                            'Parce qu’aucun pays ne peut jamais produire quoi que ce soit seul',
                            'Parce que les importations sont toujours moins chères',
                            'Parce que les exportations sont toujours interdites',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Politiques économiques fondamentales',
                'description' => 'Quiz débutant sur Politiques économiques fondamentales.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'explanation' => 'La politique budgétaire utilise principalement les dépenses publiques et les recettes fiscales pour influencer l’activité économique.',
                        'choices' => [
                            'L’utilisation des dépenses publiques et des recettes fiscales pour influencer l’activité économique',
                            'La gestion des taux de change uniquement',
                            'La gestion des entreprises privées',
                            'La fixation des prix de tous les biens',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'explanation' => 'Une politique budgétaire expansionniste cherche généralement à soutenir la demande en augmentant les dépenses publiques, en réduisant certains impôts, ou par une combinaison des deux.',
                        'choices' => [
                            'Une politique visant généralement à soutenir la demande par une hausse des dépenses publiques, une baisse des impôts, ou les deux',
                            'Une politique visant toujours à réduire la demande',
                            'Une politique qui interdit les dépenses publiques',
                            'Une politique qui augmente nécessairement les taux d’intérêt',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la politique monétaire ?',
                        'explanation' => 'La politique monétaire correspond aux actions de la banque centrale visant à influencer les conditions monétaires et financières afin d’atteindre ses objectifs.',
                        'choices' => [
                            'L’action d’une banque centrale sur les conditions monétaires et financières afin d’atteindre ses objectifs',
                            'La politique fiscale d’une entreprise',
                            'La politique commerciale d’un magasin',
                            'La gestion des salaires privés uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un objectif courant de la politique monétaire ?',
                        'explanation' => 'La stabilité des prix constitue un objectif courant de la politique monétaire, mais le mandat précis dépend de la banque centrale concernée.',
                        'choices' => [
                            'Maintenir la stabilité des prix, selon le mandat de la banque centrale',
                            'Garantir le profit de toutes les entreprises',
                            'Fixer les salaires de tous les travailleurs',
                            'Déterminer les prix de tous les produits',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'explanation' => 'Un déficit budgétaire survient lorsque les dépenses publiques dépassent les recettes publiques sur une période donnée.',
                        'choices' => [
                            'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée',
                            'Une situation où les recettes dépassent toujours les dépenses',
                            'Une baisse du PIB',
                            'Une baisse des exportations uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'explanation' => 'La dette publique correspond à l’ensemble des engagements financiers accumulés par les administrations publiques selon la définition comptable retenue.',
                        'choices' => [
                            'L’ensemble des engagements financiers accumulés par les administrations publiques selon la définition retenue',
                            'La dette totale des ménages',
                            'La dette d’une seule entreprise',
                            'La valeur des exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements peuvent-ils utiliser les dépenses publiques pendant une récession ?',
                        'explanation' => 'Pendant une récession, les dépenses publiques peuvent soutenir la demande globale lorsque la demande privée est insuffisante, selon les circonstances.',
                        'choices' => [
                            'Pour soutenir la demande globale et l’activité économique lorsque la demande privée est insuffisante',
                            'Pour empêcher toute production privée',
                            'Pour rendre les ressources illimitées',
                            'Pour supprimer la monnaie',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt ?',
                        'explanation' => 'Un impôt est un prélèvement obligatoire effectué par les pouvoirs publics conformément aux règles fiscales.',
                        'choices' => [
                            'Un prélèvement obligatoire effectué par les pouvoirs publics selon les règles fiscales',
                            'Un prêt volontaire accordé à une entreprise',
                            'Un dividende versé aux actionnaires',
                            'Un revenu provenant automatiquement des exportations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stabilisateur automatique ?',
                        'explanation' => 'Un stabilisateur automatique agit sur les recettes ou les dépenses publiques sans nécessiter une nouvelle décision discrétionnaire à chaque variation de l’activité.',
                        'choices' => [
                            'Un mécanisme budgétaire qui amortit automatiquement les fluctuations économiques sans nouvelle décision discrétionnaire',
                            'Une machine utilisée dans une usine',
                            'Un taux de change fixe',
                            'Une taxe appliquée uniquement aux importations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les politiques économiques peuvent-elles avoir des effets différents selon les circonstances ?',
                        'explanation' => 'Les effets des politiques économiques dépendent du contexte, des réactions des ménages et des entreprises, ainsi que du fonctionnement des marchés et des institutions.',
                        'choices' => [
                            'Parce que les réactions des ménages, entreprises, marchés et institutions peuvent varier selon la situation économique',
                            'Parce que les politiques économiques sont toujours sans effet',
                            'Parce que les consommateurs ne réagissent jamais aux prix',
                            'Parce que les économies sont toujours identiques',
                        ],
                        'correct' => 0,
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
                    'description' => $quizData['description'] ?? null,
                    'duration' => 10,
                    'passing_score' => 80,
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choicePairs = [];

                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }

                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}