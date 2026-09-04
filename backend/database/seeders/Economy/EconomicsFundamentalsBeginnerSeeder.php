```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicsFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economics-fundamentals')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’économie',
                'questions' => [
                    [
                        'q' => 'Qu’étudie principalement l’économie ?',
                        'a' => [
                            ['v' => 'La manière dont les ressources limitées sont utilisées pour satisfaire les besoins humains', 'c' => true],
                            ['v' => 'Uniquement les marchés financiers', 'c' => false],
                            ['v' => 'Uniquement la comptabilité des entreprises', 'c' => false],
                            ['v' => 'Uniquement les décisions des gouvernements', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi dit-on que les ressources sont rares ?',
                        'a' => [
                            ['v' => 'Parce que les ressources disponibles sont limitées par rapport aux besoins et aux désirs', 'c' => true],
                            ['v' => 'Parce que toutes les ressources sont gratuites', 'c' => false],
                            ['v' => 'Parce que les besoins humains sont toujours faibles', 'c' => false],
                            ['v' => 'Parce que les entreprises contrôlent toutes les ressources', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un besoin économique ?',
                        'a' => [
                            ['v' => 'Une nécessité ou une envie pouvant être satisfaite par des biens ou des services', 'c' => true],
                            ['v' => 'Uniquement une dépense publique', 'c' => false],
                            ['v' => 'Uniquement un investissement financier', 'c' => false],
                            ['v' => 'Une obligation fiscale', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un bien économique ?',
                        'a' => [
                            ['v' => 'Un bien disponible en quantité limitée et ayant une valeur économique', 'c' => true],
                            ['v' => 'Un bien toujours disponible gratuitement', 'c' => false],
                            ['v' => 'Uniquement un produit de luxe', 'c' => false],
                            ['v' => Uniquement un produit importé', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un service ?',
                        'a' => [
                            ['v' => 'Une prestation immatérielle destinée à satisfaire un besoin', 'c' => true],
                            ['v' => 'Uniquement un produit industriel', 'c' => false],
                            ['v' => 'Une matière première', 'c' => false],
                            ['v' => 'Une monnaie nationale', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que signifie faire un choix économique ?',
                        'a' => [
                            ['v' => 'Décider comment utiliser des ressources limitées entre plusieurs possibilités', 'c' => true],
                            ['v' => 'Éviter toute utilisation de ressources', 'c' => false],
                            ['v' => 'Acheter uniquement les produits les moins chers', 'c' => false],
                            ['v' => 'Produire sans tenir compte des besoins', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le coût d’opportunité ?',
                        'a' => [
                            ['v' => 'La valeur de la meilleure alternative abandonnée lorsqu’un choix est effectué', 'c' => true],
                            ['v' => 'Le prix affiché sur une facture', 'c' => false],
                            ['v' => 'Le montant des impôts payés', 'c' => false],
                            ['v' => 'Le bénéfice réalisé par une entreprise', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quelle question fondamentale concerne la production ?',
                        'a' => [
                            ['v' => 'Quels biens et services doivent être produits et en quelles quantités ?', 'c' => true],
                            ['v' => 'Quel pays doit utiliser quelle monnaie ?', 'c' => false],
                            ['v' => 'Quel consommateur doit payer le plus d’impôts ?', 'c' => false],
                            ['v' => 'Quelle banque doit imprimer le plus de billets ?', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quelle est la différence générale entre microéconomie et macroéconomie ?',
                        'a' => [
                            ['v' => 'La microéconomie étudie les agents et marchés particuliers, tandis que la macroéconomie étudie l’économie dans son ensemble', 'c' => true],
                            ['v' => 'La microéconomie étudie uniquement les banques', 'c' => false],
                            ['v' => 'La macroéconomie étudie uniquement les entreprises', 'c' => false],
                            ['v' => 'Il n’existe aucune différence entre les deux', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est un exemple de décision microéconomique ?',
                        'a' => [
                            ['v' => 'Une entreprise décide combien produire', 'c' => true],
                            ['v' => 'Un gouvernement mesure le PIB national', 'c' => false],
                            ['v' => 'Une banque centrale analyse l’inflation nationale', 'c' => false],
                            ['v' => 'Un pays calcule son taux de chômage', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Offre et demande',
                'questions' => [
                    [
                        'q' => 'Que représente la demande sur un marché ?',
                        'a' => [
                            ['v' => 'La quantité d’un bien que les consommateurs souhaitent et peuvent acheter à différents prix', 'c' => true],
                            ['v' => 'La quantité produite uniquement par les entreprises', 'c' => false],
                            ['v' => 'Le montant total des impôts', 'c' => false],
                            ['v' => 'Le nombre de salariés d’une entreprise', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Selon la loi de la demande, toutes choses égales par ailleurs, que se passe-t-il lorsque le prix augmente ?',
                        'a' => [
                            ['v' => 'La quantité demandée tend à diminuer', 'c' => true],
                            ['v' => 'La quantité demandée augmente toujours', 'c' => false],
                            ['v' => 'L’offre disparaît', 'c' => false],
                            ['v' => 'Les revenus augmentent automatiquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que représente l’offre ?',
                        'a' => [
                            ['v' => 'La quantité qu’un producteur ou l’ensemble des producteurs souhaitent vendre à différents prix', 'c' => true],
                            ['v' => 'La quantité que les consommateurs souhaitent acheter', 'c' => false],
                            ['v' => 'Le niveau général des salaires', 'c' => false],
                            ['v' => 'Le montant de la dette publique', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Selon la loi de l’offre, toutes choses égales par ailleurs, que se passe-t-il lorsque le prix augmente ?',
                        'a' => [
                            ['v' => 'La quantité offerte tend à augmenter', 'c' => true],
                            ['v' => 'La quantité offerte diminue toujours', 'c' => false],
                            ['v' => 'La demande disparaît', 'c' => false],
                            ['v' => 'Les coûts deviennent automatiquement nuls', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’équilibre de marché ?',
                        'a' => [
                            ['v' => 'Le point où la quantité demandée est égale à la quantité offerte', 'c' => true],
                            ['v' => 'Le point où le prix est toujours égal à zéro', 'c' => false],
                            ['v' => 'Le point où les entreprises cessent de produire', 'c' => false],
                            ['v' => 'Le point où les consommateurs arrêtent d’acheter', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que peut provoquer une augmentation de la demande, toutes choses égales par ailleurs ?',
                        'a' => [
                            ['v' => 'Une hausse du prix et de la quantité d’équilibre', 'c' => true],
                            ['v' => 'Une baisse certaine du prix et de la quantité', 'c' => false],
                            ['v' => 'Une disparition de l’offre', 'c' => false],
                            ['v' => 'Une baisse automatique des coûts de production', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que peut provoquer une augmentation des coûts de production ?',
                        'a' => [
                            ['v' => 'Une diminution de l’offre', 'c' => true],
                            ['v' => 'Une augmentation automatique de l’offre', 'c' => false],
                            ['v' => 'Une disparition de la demande', 'c' => false],
                            ['v' => 'Une baisse obligatoire des salaires', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un prix d’équilibre ?',
                        'a' => [
                            ['v' => 'Le prix auquel la quantité demandée correspond à la quantité offerte', 'c' => true],
                            ['v' => 'Le prix fixé obligatoirement par l’État', 'c' => false],
                            ['v' => 'Le prix le plus élevé possible', 'c' => false],
                            ['v' => 'Le prix de production uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que signifie un excédent d’offre ?',
                        'a' => [
                            ['v' => 'La quantité offerte est supérieure à la quantité demandée au prix considéré', 'c' => true],
                            ['v' => 'La demande est supérieure à l’offre', 'c' => false],
                            ['v' => 'Les consommateurs ne peuvent rien acheter', 'c' => false],
                            ['v' => 'Le prix est nécessairement nul', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que signifie une pénurie sur un marché ?',
                        'a' => [
                            ['v' => 'La quantité demandée est supérieure à la quantité offerte au prix considéré', 'c' => true],
                            ['v' => 'L’offre est supérieure à la demande', 'c' => false],
                            ['v' => 'Les entreprises ont trop de stocks', 'c' => false],
                            ['v' => 'Les prix sont toujours très élevés', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Prix, marché et concurrence',
                'questions' => [
                    [
                        'q' => 'Quel rôle joue principalement le prix dans une économie de marché ?',
                        'a' => [
                            ['v' => 'Il transmet des informations et contribue à coordonner l’offre et la demande', 'c' => true],
                            ['v' => 'Il détermine directement les préférences de tous les consommateurs', 'c' => false],
                            ['v' => 'Il élimine automatiquement la concurrence', 'c' => false],
                            ['v' => 'Il remplace toutes les décisions publiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un marché concurrentiel ?',
                        'a' => [
                            ['v' => 'Un marché où plusieurs acheteurs et vendeurs interagissent et où aucun acteur individuel ne contrôle généralement le prix', 'c' => true],
                            ['v' => 'Un marché avec un seul vendeur', 'c' => false],
                            ['v' => 'Un marché sans consommateurs', 'c' => false],
                            ['v' => 'Un marché où les prix sont toujours fixés par l’État', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un monopole ?',
                        'a' => [
                            ['v' => 'Une situation où un seul vendeur domine l’offre d’un marché', 'c' => true],
                            ['v' => 'Une situation avec une multitude de petits vendeurs', 'c' => false],
                            ['v' => 'Une situation où aucun produit n’est vendu', 'c' => false],
                            ['v' => 'Un marché exclusivement international', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un oligopole ?',
                        'a' => [
                            ['v' => 'Un marché dominé par un nombre limité de grandes entreprises', 'c' => true],
                            ['v' => 'Un marché avec un seul consommateur', 'c' => false],
                            ['v' => 'Un marché sans entreprises', 'c' => false],
                            ['v' => 'Un marché composé uniquement d’entreprises publiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quelle caractéristique est associée à la concurrence parfaite dans son modèle théorique ?',
                        'a' => [
                            ['v' => 'Un grand nombre d’acheteurs et de vendeurs et des produits homogènes', 'c' => true],
                            ['v' => 'Un seul vendeur contrôlant toute l’offre', 'c' => false],
                            ['v' => 'Des barrières à l’entrée très élevées', 'c' => false],
                            ['v' => 'Des produits nécessairement uniques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les barrières à l’entrée sont-elles importantes ?',
                        'a' => [
                            ['v' => 'Elles peuvent empêcher de nouvelles entreprises d’entrer facilement sur un marché', 'c' => true],
                            ['v' => 'Elles garantissent toujours une baisse des prix', 'c' => false],
                            ['v' => 'Elles augmentent automatiquement le nombre de concurrents', 'c' => false],
                            ['v' => 'Elles suppriment les coûts de production', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est un exemple de barrière à l’entrée ?',
                        'a' => [
                            ['v' => 'Des coûts initiaux très élevés nécessaires pour entrer dans une industrie', 'c' => true],
                            ['v' => 'Une augmentation du nombre de consommateurs', 'c' => false],
                            ['v' => 'Une baisse de la demande', 'c' => false],
                            ['v' => 'Une amélioration de la productivité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la concurrence peut-elle profiter aux consommateurs ?',
                        'a' => [
                            ['v' => 'Elle peut encourager des prix plus compétitifs, une meilleure qualité et davantage d’innovation', 'c' => true],
                            ['v' => 'Elle garantit toujours des prix élevés', 'c' => false],
                            ['v' => 'Elle réduit nécessairement la qualité', 'c' => false],
                            ['v' => 'Elle empêche toute innovation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un pouvoir de marché ?',
                        'a' => [
                            ['v' => 'La capacité d’un acteur à influencer les conditions ou le prix du marché', 'c' => true],
                            ['v' => 'La capacité d’un consommateur à créer de la monnaie', 'c' => false],
                            ['v' => 'La capacité d’un pays à supprimer tous les marchés', 'c' => false],
                            ['v' => 'La capacité d’une entreprise à éviter toute concurrence mondiale', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi l’État peut-il intervenir contre certaines pratiques anticoncurrentielles ?',
                        'a' => [
                            ['v' => 'Pour préserver le fonctionnement concurrentiel des marchés et protéger les consommateurs', 'c' => true],
                            ['v' => 'Pour supprimer toute entreprise privée', 'c' => false],
                            ['v' => 'Pour empêcher toute baisse des prix', 'c' => false],
                            ['v' => 'Pour garantir un monopole à chaque entreprise', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Production et facteurs de production',
                'questions' => [
                    [
                        'q' => 'Quels sont les principaux facteurs de production ?',
                        'a' => [
                            ['v' => 'Le travail, le capital, la terre et l’entrepreneuriat', 'c' => true],
                            ['v' => 'Uniquement la monnaie et les banques', 'c' => false],
                            ['v' => 'Uniquement les consommateurs', 'c' => false],
                            ['v' => 'Uniquement les ressources naturelles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que représente le facteur travail ?',
                        'a' => [
                            ['v' => 'L’effort humain consacré à la production de biens et services', 'c' => true],
                            ['v' => 'Uniquement les machines', 'c' => false],
                            ['v' => 'Uniquement les ressources naturelles', 'c' => false],
                            ['v' => 'Les bénéfices d’une entreprise', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que représente le capital dans la théorie économique de la production ?',
                        'a' => [
                            ['v' => 'Les biens produits utilisés pour produire d’autres biens et services', 'c' => true],
                            ['v' => 'Uniquement l’argent liquide détenu par les ménages', 'c' => false],
                            ['v' => 'Uniquement les ressources naturelles', 'c' => false],
                            ['v' => 'Uniquement les salaires', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est un exemple de capital productif ?',
                        'a' => [
                            ['v' => Une machine utilisée dans une usine', 'c' => true],
                            ['v' => 'Un repas consommé par un ménage', 'c' => false],
                            ['v' => 'Un vêtement porté par un consommateur', 'c' => false],
                            ['v' => 'Une ressource naturelle non exploitée', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que la productivité du travail ?',
                        'a' => [
                            ['v' => 'La quantité de production réalisée par unité de travail', 'c' => true],
                            ['v' => 'Le nombre total de travailleurs uniquement', 'c' => false],
                            ['v' => 'Le montant des impôts sur les salaires', 'c' => false],
                            ['v' => 'Le prix de vente d’un produit', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Comment une amélioration technologique peut-elle influencer la production ?',
                        'a' => [
                            ['v' => 'Elle peut permettre de produire davantage avec une quantité donnée de ressources', 'c' => true],
                            ['v' => 'Elle réduit toujours la production', 'c' => false],
                            ['v' => 'Elle supprime nécessairement tous les emplois', 'c' => false],
                            ['v' => 'Elle rend les ressources illimitées', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que la division du travail ?',
                        'a' => [
                            ['v' => 'La répartition d’un processus de production en différentes tâches spécialisées', 'c' => true],
                            ['v' => 'La suppression de toutes les spécialisations', 'c' => false],
                            ['v' => 'La fermeture des entreprises', 'c' => false],
                            ['v' => 'La réduction volontaire des échanges', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel peut être l’avantage de la spécialisation ?',
                        'a' => [
                            ['v' => 'Elle peut augmenter la productivité et l’efficacité grâce à l’apprentissage et à la division des tâches', 'c' => true],
                            ['v' => 'Elle empêche toujours les échanges', 'c' => false],
                            ['v' => 'Elle supprime tous les coûts', 'c' => false],
                            ['v' => 'Elle réduit nécessairement la production', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un coût de production ?',
                        'a' => [
                            ['v' => 'Une dépense nécessaire pour produire un bien ou un service', 'c' => true],
                            ['v' => 'Uniquement le prix payé par le consommateur', 'c' => false],
                            ['v' => 'Uniquement le bénéfice de l’entreprise', 'c' => false],
                            ['v' => 'Une taxe internationale uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’objectif économique général d’une entreprise privée ?',
                        'a' => [
                            ['v' => 'Produire des biens ou services et rechercher généralement un profit', 'c' => true],
                            ['v' => 'Éviter toute production', 'c' => false],
                            ['v' => 'Maximiser uniquement les dépenses', 'c' => false],
                            ['v' => 'Supprimer la demande des consommateurs', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Consommation et comportement des ménages',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que la consommation ?',
                        'a' => [
                            ['v' => 'L’utilisation de biens et services pour satisfaire des besoins ou des envies', 'c' => true],
                            ['v' => 'La production de machines uniquement', 'c' => false],
                            ['v' => 'La collecte des impôts', 'c' => false],
                            ['v' => 'La création de monnaie par la banque centrale', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel facteur influence généralement la consommation des ménages ?',
                        'a' => [
                            ['v' => 'Le revenu disponible', 'c' => true],
                            ['v' => 'Uniquement la superficie du pays', 'c' => false],
                            ['v' => 'Uniquement le nombre de banques centrales', 'c' => false],
                            ['v' => 'Uniquement les exportations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le revenu disponible ?',
                        'a' => [
                            ['v' => Le revenu dont dispose un ménage après les impôts directs et après réception des transferts concernés', 'c' => true],
                            ['v' => 'Le chiffre d’affaires d’une entreprise', 'c' => false],
                            ['v' => 'Le PIB total d’un pays', 'c' => false],
                            ['v' => 'Le montant total des exportations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’épargne ?',
                        'a' => [
                            ['v' => 'La partie du revenu qui n’est pas consommée immédiatement', 'c' => true],
                            ['v' => 'La totalité du revenu dépensée', 'c' => false],
                            ['v' => 'Une dette publique', 'c' => false],
                            ['v' => 'Une taxe sur les entreprises', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que se passe-t-il généralement lorsque le revenu d’un ménage augmente, toutes choses égales par ailleurs ?',
                        'a' => [
                            ['v' => 'Sa capacité de consommation et d’épargne peut augmenter', 'c' => true],
                            ['v' => 'Sa capacité de consommation diminue toujours', 'c' => false],
                            ['v' => 'Son revenu disponible devient automatiquement nul', 'c' => false],
                            ['v' => 'Il doit nécessairement réduire son épargne', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les ménages épargnent-ils ?',
                        'a' => [
                            ['v' => 'Pour préparer des dépenses futures, faire face aux imprévus ou accumuler un patrimoine', 'c' => true],
                            ['v' => 'Pour empêcher toute consommation future', 'c' => false],
                            ['v' => 'Pour supprimer les marchés', 'c' => false],
                            ['v' => 'Pour réduire automatiquement l’inflation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un bien normal ?',
                        'a' => [
                            ['v' => 'Un bien dont la demande tend à augmenter lorsque le revenu augmente', 'c' => true],
                            ['v' => 'Un bien dont la demande augmente uniquement lorsque le prix augmente', 'c' => false],
                            ['v' => 'Un bien nécessairement gratuit', 'c' => false],
                            ['v' => 'Un bien vendu uniquement par l’État', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un bien inférieur ?',
                        'a' => [
                            ['v' => 'Un bien dont la demande peut diminuer lorsque le revenu augmente, toutes choses égales par ailleurs', 'c' => true],
                            ['v' => 'Un bien toujours de mauvaise qualité', 'c' => false],
                            ['v' => 'Un bien dont le prix est toujours nul', 'c' => false],
                            ['v' => 'Un bien qui ne peut jamais être consommé', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’utilité en économie ?',
                        'a' => [
                            ['v' => 'La satisfaction qu’un consommateur retire de la consommation d’un bien ou service', 'c' => true],
                            ['v' => 'Le bénéfice comptable d’une entreprise', 'c' => false],
                            ['v' => 'Le montant des taxes', 'c' => false],
                            ['v' => 'La quantité produite par une usine', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les consommateurs doivent-ils généralement arbitrer entre plusieurs choix ?',
                        'a' => [
                            ['v' => 'Parce que leurs ressources disponibles sont limitées alors que leurs besoins et désirs sont nombreux', 'c' => true],
                            ['v' => 'Parce que tous les biens ont le même prix', 'c' => false],
                            ['v' => 'Parce que les revenus sont toujours illimités', 'c' => false],
                            ['v' => 'Parce que les marchés interdisent toute consommation', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, banques et système financier',
                'questions' => [
                    [
                        'q' => 'Quelles sont les fonctions classiques de la monnaie ?',
                        'a' => [
                            ['v' => 'Moyen d’échange, unité de compte et réserve de valeur', 'c' => true],
                            ['v' => 'Uniquement moyen de paiement international', 'c' => false],
                            ['v' => 'Uniquement instrument fiscal', 'c' => false],
                            ['v' => 'Uniquement réserve d’or', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la monnaie facilite-t-elle les échanges ?',
                        'a' => [
                            ['v' => 'Elle évite de devoir trouver directement une personne souhaitant exactement ce que l’on propose en échange', 'c' => true],
                            ['v' => 'Elle supprime tous les besoins humains', 'c' => false],
                            ['v' => 'Elle rend tous les biens gratuits', 'c' => false],
                            ['v' => 'Elle élimine toute rareté', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une banque commerciale ?',
                        'a' => [
                            ['v' => 'Une institution qui collecte notamment des dépôts et accorde des crédits', 'c' => true],
                            ['v' => 'Une institution qui produit uniquement des biens agricoles', 'c' => false],
                            ['v' => 'Une administration fiscale', 'c' => false],
                            ['v' => 'Une entreprise qui ne réalise jamais de prêts', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle général d’une banque centrale ?',
                        'a' => [
                            ['v' => 'Conduire la politique monétaire et contribuer à la stabilité monétaire et financière selon son mandat', 'c' => true],
                            ['v' => 'Vendre directement tous les biens aux consommateurs', 'c' => false],
                            ['v' => Fixer les salaires de toutes les entreprises', 'c' => false],
                            ['v' => 'Gérer les ménages privés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un taux d’intérêt ?',
                        'a' => [
                            ['v' => 'Le coût de l’emprunt ou la rémunération d’un placement exprimé généralement en pourcentage', 'c' => true],
                            ['v' => 'Le montant total d’un salaire', 'c' => false],
                            ['v' => 'Le prix d’un bien uniquement', 'c' => false],
                            ['v' => 'Le taux de chômage', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que peut provoquer une baisse des taux d’intérêt, toutes choses égales par ailleurs ?',
                        'a' => [
                            ['v' => 'Elle peut encourager certains emprunts et certaines dépenses d’investissement ou de consommation', 'c' => true],
                            ['v' => 'Elle rend toujours l’emprunt plus coûteux', 'c' => false],
                            ['v' => 'Elle supprime nécessairement l’épargne', 'c' => false],
                            ['v' => 'Elle réduit automatiquement la quantité de monnaie à zéro', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un crédit ?',
                        'a' => [
                            ['v' => 'Une somme mise à disposition d’un emprunteur avec une obligation de remboursement selon des conditions convenues', 'c' => true],
                            ['v' => 'Une subvention qui ne doit jamais être remboursée', 'c' => false],
                            ['v' => 'Une taxe obligatoire', 'c' => false],
                            ['v' => 'Une dépense de consommation uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le marché financier ?',
                        'a' => [
                            ['v' => 'Un ensemble de marchés où s’échangent notamment des instruments financiers', 'c' => true],
                            ['v' => 'Un marché réservé exclusivement aux produits alimentaires', 'c' => false],
                            ['v' => 'Un marché où aucune entreprise ne peut participer', 'c' => false],
                            ['v' => 'Un marché exclusivement consacré aux devises physiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une action ?',
                        'a' => [
                            ['v' => 'Un titre représentant une part de propriété dans une entreprise', 'c' => true],
                            ['v' => 'Une dette publique obligatoire', 'c' => false],
                            ['v' => 'Un billet de banque', 'c' => false],
                            ['v' => 'Un contrat de travail', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une obligation ?',
                        'a' => [
                            ['v' => 'Un titre de créance représentant généralement un emprunt effectué par un émetteur', 'c' => true],
                            ['v' => 'Une part de propriété identique à une action', 'c' => false],
                            ['v' => 'Une monnaie étrangère', 'c' => false],
                            ['v' => 'Un produit de consommation', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Indicateurs économiques fondamentaux',
                'questions' => [
                    [
                        'q' => 'Que mesure principalement le PIB ?',
                        'a' => [
                            ['v' => 'La valeur des biens et services finaux produits sur un territoire pendant une période donnée', 'c' => true],
                            ['v' => 'La richesse totale détenue par les ménages', 'c' => false],
                            ['v' => 'Uniquement les exportations', 'c' => false],
                            ['v' => 'Uniquement les revenus des entreprises', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que signifie une croissance du PIB réel ?',
                        'a' => [
                            ['v' => 'Une augmentation de la production mesurée en neutralisant l’effet des variations générales des prix', 'c' => true],
                            ['v' => 'Une augmentation obligatoire des prix', 'c' => false],
                            ['v' => 'Une diminution de la production', 'c' => false],
                            ['v' => 'Une hausse automatique du chômage', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’inflation ?',
                        'a' => [
                            ['v' => 'Une hausse générale et persistante du niveau des prix', 'c' => true],
                            ['v' => 'Une baisse générale des salaires uniquement', 'c' => false],
                            ['v' => 'Une hausse du prix d’un seul produit', 'c' => false],
                            ['v' => 'Une diminution de la production agricole uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le taux de chômage ?',
                        'a' => [
                            ['v' => 'La proportion de la population active qui est sans emploi et recherche un emploi selon la définition retenue', 'c' => true],
                            ['v' => 'La proportion de toute la population sans emploi', 'c' => false],
                            ['v' => 'Le nombre total d’étudiants', 'c' => false],
                            ['v' => 'La proportion de retraités', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une récession dans une définition courante simplifiée ?',
                        'a' => [
                            ['v' => 'Une période de recul significatif de l’activité économique', 'c' => true],
                            ['v' => 'Une période de croissance très rapide', 'c' => false],
                            ['v' => 'Une période où les prix restent toujours constants', 'c' => false],
                            ['v' => 'Une période de plein emploi garanti', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le revenu national ?',
                        'a' => [
                            ['v' => 'Un agrégat mesurant les revenus générés par les facteurs de production d’une économie selon une définition comptable donnée', 'c' => true],
                            ['v' => 'Uniquement les recettes fiscales', 'c' => false],
                            ['v' => 'Uniquement les bénéfices des banques', 'c' => false],
                            ['v' => 'Uniquement les exportations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le PIB par habitant est-il utilisé ?',
                        'a' => [
                            ['v' => 'Il permet de rapporter la production économique à la taille de la population', 'c' => true],
                            ['v' => 'Il mesure directement le bonheur de chaque individu', 'c' => false],
                            ['v' => 'Il mesure uniquement les inégalités', 'c' => false],
                            ['v' => 'Il indique exactement le patrimoine de chaque ménage', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel indicateur est généralement utilisé pour suivre l’évolution générale des prix à la consommation ?',
                        'a' => [
                            ['v' => 'L’indice des prix à la consommation', 'c' => true],
                            ['v' => 'Le taux de chômage uniquement', 'c' => false],
                            ['v' => 'Le PIB nominal uniquement', 'c' => false],
                            ['v' => 'La balance commerciale uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que la productivité ?',
                        'a' => [
                            ['v' => 'Une mesure de la quantité produite par rapport aux ressources utilisées', 'c' => true],
                            ['v' => 'Une mesure exclusive de l’inflation', 'c' => false],
                            ['v' => 'Une mesure uniquement fiscale', 'c' => false],
                            ['v' => 'Une mesure du nombre de banques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les indicateurs économiques sont-ils utiles ?',
                        'a' => [
                            ['v' => 'Ils permettent d’analyser l’état et l’évolution de l’économie et d’éclairer certaines décisions', 'c' => true],
                            ['v' => 'Ils permettent de prévoir parfaitement l’avenir', 'c' => false],
                            ['v' => 'Ils éliminent toutes les incertitudes', 'c' => false],
                            ['v' => 'Ils remplacent toutes les analyses économiques', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce international et économie mondiale',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que le commerce international ?',
                        'a' => [
                            ['v' => 'L’échange de biens et services entre différents pays', 'c' => true],
                            ['v' => 'Uniquement les échanges entre entreprises d’une même ville', 'c' => false],
                            ['v' => 'Uniquement les échanges de monnaie', 'c' => false],
                            ['v' => 'Uniquement les investissements publics', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une exportation ?',
                        'a' => [
                            ['v' => 'La vente d’un bien ou service à un acheteur situé à l’étranger', 'c' => true],
                            ['v' => 'L’achat d’un produit étranger', 'c' => false],
                            ['v' => 'La production destinée uniquement au marché intérieur', 'c' => false],
                            ['v' => 'Le paiement d’un impôt national', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une importation ?',
                        'a' => [
                            ['v' => 'L’achat d’un bien ou service provenant de l’étranger', 'c' => true],
                            ['v' => 'La vente d’un produit à l’étranger', 'c' => false],
                            ['v' => 'La production nationale destinée à l’exportation', 'c' => false],
                            ['v' => 'Une dépense publique intérieure', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’avantage comparatif ?',
                        'a' => [
                            ['v' => 'La capacité d’un pays à produire un bien avec un coût d’opportunité inférieur à celui d’un autre pays', 'c' => true],
                            ['v' => 'La capacité de produire absolument tous les biens au coût le plus faible', 'c' => false],
                            ['v' => 'La capacité d’imposer des taxes à tous les pays', 'c' => false],
                            ['v' => 'La capacité de contrôler toutes les monnaies', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est un avantage potentiel du commerce international ?',
                        'a' => [
                            ['v' => 'Permettre la spécialisation et l’accès à une plus grande variété de biens et services', 'c' => true],
                            ['v' => 'Supprimer toute concurrence', 'c' => false],
                            ['v' => 'Rendre tous les pays identiques', 'c' => false],
                            ['v' => 'Éliminer toute dépendance économique', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un droit de douane ?',
                        'a' => [
                            ['v' => 'Une taxe appliquée à certaines importations', 'c' => true],
                            ['v' => 'Une subvention automatique aux exportateurs', 'c' => false],
                            ['v' => 'Une taxe uniquement sur les salaires', 'c' => false],
                            ['v' => 'Une taxe sur les transactions nationales uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une balance commerciale ?',
                        'a' => [
                            ['v' => 'La différence entre la valeur des exportations et celle des importations de biens', 'c' => true],
                            ['v' => 'La différence entre les impôts et les dépenses publiques', 'c' => false],
                            ['v' => 'La différence entre les salaires et les profits', 'c' => false],
                            ['v' => 'La différence entre l’épargne et la consommation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un taux de change ?',
                        'a' => [
                            ['v' => 'Le prix d’une monnaie exprimé dans une autre monnaie', 'c' => true],
                            ['v' => 'Le taux d’imposition des entreprises', 'c' => false],
                            ['v' => 'Le taux de croissance du PIB', 'c' => false],
                            ['v' => 'Le taux de chômage d’un pays', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que peut provoquer une appréciation de la monnaie nationale, toutes choses égales par ailleurs ?',
                        'a' => [
                            ['v' => 'Les exportations peuvent devenir relativement plus coûteuses pour les acheteurs étrangers', 'c' => true],
                            ['v' => 'Les exportations deviennent toujours gratuites', 'c' => false],
                            ['v' => 'Les importations deviennent toujours plus coûteuses', 'c' => false],
                            ['v' => 'Le commerce international cesse nécessairement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les pays échangent-ils même lorsqu’ils peuvent produire eux-mêmes certains biens ?',
                        'a' => [
                            ['v' => 'Parce que la spécialisation selon les avantages comparatifs peut permettre des gains mutuels à l’échange', 'c' => true],
                            ['v' => 'Parce qu’aucun pays ne peut jamais produire quoi que ce soit seul', 'c' => false],
                            ['v' => 'Parce que les importations sont toujours moins chères', 'c' => false],
                            ['v' => 'Parce que les exportations sont toujours interdites', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politiques économiques fondamentales',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que la politique budgétaire ?',
                        'a' => [
                            ['v' => 'L’utilisation des dépenses publiques et des recettes fiscales pour influencer l’activité économique', 'c' => true],
                            ['v' => 'La gestion des taux de change uniquement', 'c' => false],
                            ['v' => 'La gestion des entreprises privées', 'c' => false],
                            ['v' => 'La fixation des prix de tous les biens', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'a' => [
                            ['v' => 'Une politique visant généralement à soutenir la demande par une hausse des dépenses publiques, une baisse des impôts, ou les deux', 'c' => true],
                            ['v' => 'Une politique visant toujours à réduire la demande', 'c' => false],
                            ['v' => 'Une politique qui interdit les dépenses publiques', 'c' => false],
                            ['v' => 'Une politique qui augmente nécessairement les taux d’intérêt', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que la politique monétaire ?',
                        'a' => [
                            ['v' => 'L’action d’une banque centrale sur les conditions monétaires et financières afin d’atteindre ses objectifs', 'c' => true],
                            ['v' => 'La politique fiscale d’une entreprise', 'c' => false],
                            ['v' => 'La politique commerciale d’un magasin', 'c' => false],
                            ['v' => 'La gestion des salaires privés uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est un objectif courant de la politique monétaire ?',
                        'a' => [
                            ['v' => 'Maintenir la stabilité des prix, selon le mandat de la banque centrale', 'c' => true],
                            ['v' => 'Garantir le profit de toutes les entreprises', 'c' => false],
                            ['v' => 'Fixer les salaires de tous les travailleurs', 'c' => false],
                            ['v' => 'Déterminer les prix de tous les produits', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'a' => [
                            ['v' => 'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée', 'c' => true],
                            ['v' => 'Une situation où les recettes dépassent toujours les dépenses', 'c' => false],
                            ['v' => 'Une baisse du PIB', 'c' => false],
                            ['v' => 'Une baisse des exportations uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que la dette publique ?',
                        'a' => [
                            ['v' => 'L’ensemble des engagements financiers accumulés par les administrations publiques selon la définition retenue', 'c' => true],
                            ['v' => 'La dette totale des ménages', 'c' => false],
                            ['v' => 'La dette d’une seule entreprise', 'c' => false],
                            ['v' => 'La valeur des exportations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les gouvernements peuvent-ils utiliser les dépenses publiques pendant une récession ?',
                        'a' => [
                            ['v' => 'Pour soutenir la demande globale et l’activité économique lorsque la demande privée est insuffisante', 'c' => true],
                            ['v' => 'Pour empêcher toute production privée', 'c' => false],
                            ['v' => 'Pour rendre les ressources illimitées', 'c' => false],
                            ['v' => 'Pour supprimer la monnaie', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un impôt ?',
                        'a' => [
                            ['v' => 'Un prélèvement obligatoire effectué par les pouvoirs publics selon les règles fiscales', 'c' => true],
                            ['v' => 'Un prêt volontaire accordé à une entreprise', 'c' => false],
                            ['v' => 'Un dividende versé aux actionnaires', 'c' => false],
                            ['v' => 'Un revenu provenant automatiquement des exportations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un stabilisateur automatique ?',
                        'a' => [
                            ['v' => 'Un mécanisme budgétaire qui amortit automatiquement les fluctuations économiques sans nouvelle décision discrétionnaire', 'c' => true],
                            ['v' => 'Une machine utilisée dans une usine', 'c' => false],
                            ['v' => 'Un taux de change fixe', 'c' => false],
                            ['v' => 'Une taxe appliquée uniquement aux importations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les politiques économiques peuvent-elles avoir des effets différents selon les circonstances ?',
                        'a' => [
                            ['v' => 'Parce que les réactions des ménages, entreprises, marchés et institutions peuvent varier selon la situation économique', 'c' => true],
                            ['v' => 'Parce que les politiques économiques sont toujours sans effet', 'c' => false],
                            ['v' => 'Parce que les consommateurs ne réagissent jamais aux prix', 'c' => false],
                            ['v' => 'Parce que les économies sont toujours identiques', 'c' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Beginner',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['q'],
                ]);

                $answers = $questionData['a'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['v'],
                        'iscorrect' => $answerData['c'],
                    ]);
                }
            }
        }
    }
}
```
