<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class InternationalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'international-economics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1
            // ============================================================
            [
                'title' => 'Fondamentaux du commerce international',
                'description' => 'Quiz débutant sur les fondamentaux du commerce international.',
                'questions' => [
                    [
                        'question' => 'Qu’étudie principalement l’économie internationale ?',
                        'choices' => [
                            'Les échanges de biens, de services et de capitaux entre les pays',
                            'Les décisions d’achat d’un consommateur dans son pays',
                            'La politique monétaire menée uniquement à l’intérieur d’un pays',
                            'Les finances d’un ménage et son budget familial',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’économie internationale étudie les échanges et les relations économiques entre les pays : biens, services et capitaux.',
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils entre eux ?',
                        'choices' => [
                            'Parce que tous les pays produisent les mêmes biens au même coût',
                            'Parce que le commerce fait disparaître tous les coûts de production',
                            'Parce que chaque pays est obligé de vendre tout ce qu’il produit',
                            'Parce que les pays ont des ressources, des technologies et des coûts différents',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les différences de ressources, de technologies et de coûts créent des gains à l’échange. Si tous les pays produisaient tout au même coût, l’échange serait moins utile.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'choices' => [
                            'Un bien acheté à un fournisseur étranger',
                            'Un bien ou un service vendu à un acheteur situé à l’étranger',
                            'Un impôt payé sur les produits vendus dans le pays',
                            'Une dépense de l’État pour un service public',
                        ],
                        'correct' => 1,
                        'explanation' => 'Exporter, c’est vendre à l’étranger. Acheter à l’étranger, c’est importer.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'choices' => [
                            'Un produit vendu à un acheteur étranger',
                            'Une taxe appliquée aux produits exportés',
                            'Un bien ou un service acheté à un fournisseur situé à l’étranger',
                            'Une aide versée par l’État aux producteurs',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une importation est un achat de biens ou de services à l’étranger. Une vente à l’étranger est une exportation.',
                    ],
                    [
                        'question' => 'Quel concept explique qu’un pays se spécialise dans le bien pour lequel son coût d’opportunité est le plus faible ?',
                        'choices' => [
                            'La balance commerciale',
                            'Le taux de change',
                            'Le droit de douane',
                            'L’avantage comparatif',
                        ],
                        'correct' => 3,
                        'explanation' => 'L’avantage comparatif repose sur le coût d’opportunité : un pays a intérêt à produire le bien pour lequel il renonce à le moins d’autres biens.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’avantage absolu ?',
                        'choices' => [
                            'La capacité de produire un bien avec moins de ressources qu’un autre producteur',
                            'La capacité de toujours exporter plus qu’on importe',
                            'La capacité d’avoir une monnaie plus forte que ses partenaires',
                            'La capacité d’imposer des droits de douane élevés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un producteur a un avantage absolu quand il produit un bien plus efficacement, à moindre coût, qu’un autre, sans comparer avec ses autres productions.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la spécialisation d’un pays ?',
                        'choices' => [
                            'Le fait de produire tous les biens dont il a besoin',
                            'Le fait d’interdire les importations de certains biens',
                            'Le fait de concentrer sa production sur certains biens plutôt que de tout produire',
                            'Le fait d’acheter uniquement à l’étranger',
                        ],
                        'correct' => 2,
                        'explanation' => 'Se spécialiser, c’est concentrer sa production sur les biens que l’on produit le mieux, puis échanger le reste avec les autres pays.',
                    ],
                    [
                        'question' => 'Quel est un effet possible de la spécialisation internationale ?',
                        'choices' => [
                            'La disparition de toutes les inégalités entre les pays',
                            'Une utilisation plus efficace des ressources de chaque pays',
                            'La suppression de toute concurrence entre les entreprises',
                            'Une baisse obligatoire de la production mondiale',
                        ],
                        'correct' => 1,
                        'explanation' => 'Quand chaque pays se concentre sur ce qu’il fait le mieux, les ressources sont mieux utilisées et la production mondiale peut augmenter.',
                    ],
                    [
                        'question' => 'Pourquoi le commerce international augmente-t-il la variété des biens disponibles ?',
                        'choices' => [
                            'Parce que chaque pays interdit ses produits locaux',
                            'Parce que les importations réduisent le choix des consommateurs',
                            'Parce que le commerce ne concerne que les matières premières',
                            'Parce que les consommateurs peuvent acheter des produits qui ne sont pas fabriqués localement',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les importations donnent accès à des produits absents du marché local, ce qui élargit le choix des consommateurs.',
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transport comptent-ils dans le commerce international ?',
                        'choices' => [
                            'Parce qu’ils fixent le taux de change entre deux monnaies',
                            'Parce qu’ils augmentent le coût des biens échangés entre les pays',
                            'Parce qu’ils remplacent les droits de douane',
                            'Parce qu’ils n’ont aucun effet sur les prix internationaux',
                        ],
                        'correct' => 1,
                        'explanation' => 'Transporter un bien coûte de l’argent : plus la distance est grande, plus le prix final peut augmenter, ce qui freine certains échanges.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2
            // ============================================================
            [
                'title' => 'Avantage comparatif et spécialisation',
                'description' => 'Quiz débutant sur l’avantage comparatif, les coûts d’opportunité et la spécialisation.',
                'questions' => [
                    [
                        'question' => 'Que représente le coût d’opportunité de produire un bien ?',
                        'choices' => [
                            'Le prix auquel le bien est vendu sur le marché',
                            'Le salaire moyen versé dans le pays',
                            'Ce à quoi il faut renoncer pour produire une unité supplémentaire de ce bien',
                            'La valeur totale des exportations du pays',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le coût d’opportunité est la quantité d’un autre bien à laquelle on renonce quand on choisit de produire davantage de ce bien.',
                    ],
                    [
                        'question' => 'Pour produire 1 unité de vin, le pays A renonce à 2 unités de textile et le pays B renonce à 4 unités de textile. Quel pays a l’avantage comparatif dans le vin ?',
                        'choices' => [
                            'Le pays A',
                            'Le pays B',
                            'Les deux pays de la même façon',
                            'Aucun des deux pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pour produire 1 unité de vin, A renonce à 2 unités de textile et B à 4 : le coût d’opportunité du vin est plus faible chez A, qui a donc l’avantage comparatif dans le vin.',
                    ],
                    [
                        'question' => 'Si un pays a un coût d’opportunité plus faible pour le bien A, que doit-il faire selon le principe de l’avantage comparatif ?',
                        'choices' => [
                            'Éviter de produire le bien A',
                            'Produire uniquement le bien B',
                            'Interdire les importations du bien A',
                            'Se spécialiser davantage dans le bien A',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un coût d’opportunité plus faible signifie qu’il en coûte moins de produire ce bien : le pays gagne à s’y spécialiser et à échanger le reste.',
                    ],
                    [
                        'question' => 'Le pays A produit soit 10 tonnes de blé, soit 5 tonnes de riz. Quel est le coût d’opportunité d’1 tonne de blé ?',
                        'choices' => [
                            '2 tonnes de riz',
                            '0,5 tonne de riz',
                            '5 tonnes de riz',
                            '10 tonnes de riz',
                        ],
                        'correct' => 1,
                        'explanation' => 'Produire 10 tonnes de blé revient à renoncer à 5 tonnes de riz : 1 tonne de blé coûte 5 / 10 = 0,5 tonne de riz.',
                    ],
                    [
                        'question' => 'Que peut permettre l’échange quand les pays se spécialisent selon leur avantage comparatif ?',
                        'choices' => [
                            'Une consommation potentiellement plus élevée que sans échange',
                            'Une production nulle dans tous les pays',
                            'Des revenus identiques pour tous les habitants',
                            'La disparition de tous les coûts de production',
                        ],
                        'correct' => 0,
                        'explanation' => 'Grâce à la spécialisation et à l’échange, les pays peuvent consommer davantage qu’en produisant seuls tout ce dont ils ont besoin.',
                    ],
                    [
                        'question' => 'Le pays A produit 10 unités de blé par heure de travail et le pays B en produit 6. Quel pays a l’avantage absolu dans le blé ?',
                        'choices' => [
                            'Le pays B',
                            'Les deux pays de la même façon',
                            'Le pays A',
                            'Aucun des deux pays',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le pays A produit plus de blé par heure de travail (10 contre 6) : il a l’avantage absolu, indépendamment de l’avantage comparatif.',
                    ],
                    [
                        'question' => 'Que compare l’avantage comparatif entre deux pays ?',
                        'choices' => [
                            'Les prix de vente des produits des deux pays',
                            'Les coûts d’opportunité de production des deux pays',
                            'La taille de la population des deux pays',
                            'Le nombre d’usines dans chaque pays',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’avantage comparatif compare ce à quoi chaque pays renonce pour produire un bien, c’est-à-dire les coûts d’opportunité.',
                    ],
                    [
                        'question' => 'Quel risque prend un pays qui dépend d’un seul produit d’exportation ?',
                        'choices' => [
                            'Il ne peut plus importer aucun produit',
                            'Ses coûts de production disparaissent',
                            'Sa monnaie devient inutilisable',
                            'Ses revenus dépendent fortement du prix et de la demande de ce produit',
                        ],
                        'correct' => 3,
                        'explanation' => 'Si le prix de ce produit baisse ou si la demande recule, les recettes d’exportation chutent, car le pays n’a pas d’autre source de revenus.',
                    ],
                    [
                        'question' => 'Quels facteurs peuvent modifier l’avantage comparatif d’un pays au fil du temps ?',
                        'choices' => [
                            'Aucun : l’avantage comparatif est fixé définitivement',
                            'Uniquement la superficie de son territoire',
                            'Les progrès technologiques, la formation et les gains de productivité',
                            'Uniquement le nombre de ses voisins',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les technologies, les compétences et la productivité évoluent : les coûts d’opportunité, et donc l’avantage comparatif, peuvent changer.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la division internationale du travail ?',
                        'choices' => [
                            'La répartition de la production mondiale entre les pays selon leurs spécialisations',
                            'La division d’un pays en plusieurs régions administratives',
                            'Le partage des impôts entre les pays',
                            'La répartition des salaires entre les travailleurs d’une entreprise',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque pays se spécialise dans certaines productions : le travail est ainsi réparti entre les pays à l’échelle mondiale.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Offre, demande et équilibre international',
                'description' => 'Quiz débutant sur les prix mondiaux, l’autarcie et l’équilibre du marché.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’autarcie ?',
                        'choices' => [
                            'Une situation où un pays exporte toute sa production',
                            'Une situation où un pays ne commerce pas avec l’étranger',
                            'Une zone où les droits de douane sont supprimés',
                            'Un accord entre deux pays pour fixer les prix',
                        ],
                        'correct' => 1,
                        'explanation' => 'En autarcie, un pays produit et consomme tout seul, sans exporter ni importer.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix d’autarcie d’un bien ?',
                        'choices' => [
                            'Le prix fixé par le marché mondial',
                            'Le prix imposé par les pays partenaires',
                            'Le prix des exportations uniquement',
                            'Le prix d’équilibre du bien quand le pays ne commerce pas avec l’étranger',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le prix d’autarcie est le prix qui égalise l’offre et la demande à l’intérieur du pays, sans commerce extérieur.',
                    ],
                    [
                        'question' => 'Que représente le prix mondial d’un bien dans un modèle simple de commerce international ?',
                        'choices' => [
                            'Le prix auquel le bien peut être acheté ou vendu sur le marché international',
                            'Le prix fixé uniquement par le gouvernement du pays',
                            'Le salaire moyen dans le monde',
                            'Le prix du bien quand le pays ne commerce pas',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le prix mondial est le prix disponible sur le marché international. Le prix quand le pays ne commerce pas est le prix d’autarcie.',
                    ],
                    [
                        'question' => 'Si le prix mondial est inférieur au prix d’autarcie, que fait le pays dans un modèle simple ?',
                        'choices' => [
                            'Il exporte le bien',
                            'Il interdit le bien',
                            'Il importe le bien',
                            'Il cesse toute consommation du bien',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le bien est moins cher à l’étranger que chez soi : le pays a intérêt à l’acheter à l’étranger, donc à l’importer.',
                    ],
                    [
                        'question' => 'Si le prix mondial est supérieur au prix d’autarcie, que fait le pays dans un modèle simple ?',
                        'choices' => [
                            'Il importe le bien',
                            'Il exporte le bien',
                            'Il cesse toute production du bien',
                            'Il fixe le prix du bien à zéro',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le bien se vend plus cher à l’étranger que chez soi : les producteurs ont intérêt à vendre à l’étranger, donc à exporter.',
                    ],
                    [
                        'question' => 'Quand un pays importe un bien moins cher que son prix d’autarcie, qui en profite ?',
                        'choices' => [
                            'Uniquement les producteurs nationaux',
                            'Uniquement l’État',
                            'Personne',
                            'Les consommateurs, qui paient moins cher',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un prix plus bas augmente le pouvoir d’achat des consommateurs. Les producteurs nationaux du même bien, eux, subissent la concurrence.',
                    ],
                    [
                        'question' => 'Quand un pays exporte un bien plus cher que son prix d’autarcie, qui en profite ?',
                        'choices' => [
                            'Les producteurs de ce bien, qui vendent à un prix plus élevé',
                            'Uniquement les consommateurs du pays',
                            'Uniquement les importateurs étrangers',
                            'Personne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le prix de vente à l’étranger est plus élevé, ce qui augmente les recettes des producteurs. Les consommateurs nationaux, eux, peuvent payer plus cher.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’équilibre d’un marché ?',
                        'choices' => [
                            'Le prix le plus bas possible sur le marché',
                            'Le prix fixé par l’État pour protéger les producteurs',
                            'Le prix pour lequel la quantité offerte est égale à la quantité demandée',
                            'Le prix pour lequel personne ne veut acheter',
                        ],
                        'correct' => 2,
                        'explanation' => 'À l’équilibre, les vendeurs offrent exactement ce que les acheteurs veulent acheter : il n’y a ni pénurie ni surplus.',
                    ],
                    [
                        'question' => 'Au prix mondial, un pays demande plus d’un bien qu’il n’en produit. Que fait-il ?',
                        'choices' => [
                            'Il exporte la différence',
                            'Il arrête de consommer ce bien',
                            'Il fixe le prix du bien à zéro',
                            'Il importe la différence',
                        ],
                        'correct' => 3,
                        'explanation' => 'Quand la demande intérieure dépasse la production intérieure au prix mondial, le pays comble l’écart en important.',
                    ],
                    [
                        'question' => 'Pourquoi les prix mondiaux peuvent-ils changer ?',
                        'choices' => [
                            'Parce que tous les pays fixent le même prix chaque année',
                            'Parce que l’offre et la demande mondiales varient',
                            'Parce qu’un organisme international fixe les prix un par un',
                            'Parce que les prix ne dépendent jamais de la demande',
                        ],
                        'correct' => 1,
                        'explanation' => 'Comme n’importe quel prix de marché, le prix mondial évolue quand la quantité offerte ou la quantité demandée dans le monde change.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4
            // ============================================================
            [
                'title' => 'Droits de douane et barrières commerciales',
                'description' => 'Quiz débutant sur les droits de douane, les quotas et les barrières commerciales.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une barrière commerciale ?',
                        'choices' => [
                            'Une aide versée aux exportateurs',
                            'Un accord qui supprime les droits de douane',
                            'Une baisse du taux de change',
                            'Une mesure qui limite ou freine les échanges entre pays',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une barrière commerciale (droit de douane, quota, norme) rend l’importation plus difficile ou plus coûteuse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un droit de douane ?',
                        'choices' => [
                            'Une taxe appliquée à un produit importé',
                            'Une aide versée aux consommateurs étrangers',
                            'Une taxe appliquée uniquement aux exportations',
                            'Une obligation de produire localement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un droit de douane est une taxe payée au passage de la frontière sur les marchandises importées.',
                    ],
                    [
                        'question' => 'Quel est l’effet direct d’un droit de douane sur le prix d’un bien importé dans le pays ?',
                        'choices' => [
                            'Le prix intérieur baisse',
                            'Le prix intérieur ne change pas',
                            'Le prix intérieur augmente',
                            'Le bien devient gratuit',
                        ],
                        'correct' => 2,
                        'explanation' => 'La taxe s’ajoute au prix du bien importé : son prix sur le marché intérieur augmente.',
                    ],
                    [
                        'question' => 'Que provoque généralement un droit de douane sur les consommateurs du pays importateur ?',
                        'choices' => [
                            'Ils paient moins cher et consomment davantage',
                            'Ils paient plus cher et consomment moins du bien importé',
                            'Ils reçoivent directement les recettes du droit de douane',
                            'Ils ne sont pas concernés',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le prix augmente : les consommateurs paient plus cher et achètent moins du bien importé.',
                    ],
                    [
                        'question' => 'Que provoque généralement un droit de douane pour les producteurs nationaux concurrencés par les importations ?',
                        'choices' => [
                            'Ils doivent arrêter toute production',
                            'Ils paient eux-mêmes le droit de douane',
                            'Ils peuvent produire et vendre davantage, car le prix intérieur augmente',
                            'Ils subissent une baisse de leurs prix de vente',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le prix des importations augmente, ce qui rend les produits nationaux plus compétitifs : les producteurs nationaux peuvent vendre davantage.',
                    ],
                    [
                        'question' => 'Quel est un coût d’un droit de douane pour l’économie ?',
                        'choices' => [
                            'Des pertes d’efficacité, car certains échanges avantageux n’ont plus lieu',
                            'Une hausse de la productivité dans tous les secteurs du pays',
                            'La disparition de toutes les distorsions de prix',
                            'Une baisse des coûts de production à l’étranger',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un droit de douane décourage des échanges qui auraient profité aux deux parties, ce qui crée une perte d’efficacité.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un quota d’importation ?',
                        'choices' => [
                            'Une taxe sur les produits exportés',
                            'Une aide versée aux consommateurs',
                            'Une interdiction de produire dans le pays',
                            'Une limite fixée à la quantité d’un bien qui peut être importée',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un quota limite directement la quantité importée, sans passer par un prix ou une taxe.',
                    ],
                    [
                        'question' => 'Quelle différence simple y a-t-il entre un droit de douane et un quota ?',
                        'choices' => [
                            'Les deux sont exactement identiques',
                            'Le droit de douane est une taxe sur le prix, le quota est une limite sur la quantité',
                            'Le quota est toujours une subvention',
                            'Le droit de douane concerne uniquement les exportations',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le droit de douane agit par le prix (une taxe), le quota agit par la quantité (une limite).',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il utiliser des barrières commerciales ?',
                        'choices' => [
                            'Pour protéger certains secteurs nationaux de la concurrence étrangère',
                            'Pour garantir que les consommateurs paient moins cher',
                            'Pour supprimer toute concurrence sur le marché intérieur',
                            'Parce que le commerce international est toujours inefficace',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les barrières sont surtout utilisées pour protéger des producteurs ou des emplois nationaux, ou pour des raisons politiques. Elles ne garantissent pas des prix plus bas.',
                    ],
                    [
                        'question' => 'Pourquoi un droit de douane peut-il entraîner des représailles de la part des partenaires ?',
                        'choices' => [
                            'Parce que les pays étrangers ne réagissent jamais',
                            'Parce que les droits de douane empêchent toute négociation',
                            'Parce que les partenaires peuvent taxer à leur tour les produits du pays',
                            'Parce que les importations augmentent après un droit de douane',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les pays touchés par la taxe peuvent répondre avec leurs propres droits de douane, ce qui peut déclencher une guerre commerciale.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5
            // ============================================================
            [
                'title' => 'Taux de change et marché des devises',
                'description' => 'Quiz débutant sur les taux de change, les monnaies et le marché des devises.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'choices' => [
                            'Le taux d’intérêt fixé par la banque centrale',
                            'Le prix d’une monnaie exprimé dans une autre monnaie',
                            'Le prix mondial d’un bien',
                            'Le taux d’inflation annuel',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le taux de change indique combien coûte une monnaie en unités d’une autre monnaie (par exemple 1 euro = 1,10 dollar).',
                    ],
                    [
                        'question' => 'Si 1 euro vaut 1,10 dollar, combien de dollars faut-il pour acheter 2 euros ?',
                        'choices' => [
                            '1,10 dollar',
                            '3,10 dollars',
                            '2,20 dollars',
                            '1,82 dollar',
                        ],
                        'correct' => 2,
                        'explanation' => '2 euros valent 2 × 1,10 = 2,20 dollars. Diviser 2 par 1,10 (1,82) serait une erreur de sens.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’appréciation d’une monnaie ?',
                        'choices' => [
                            'Une hausse de sa valeur par rapport à une autre monnaie',
                            'Une baisse de sa valeur par rapport à une autre monnaie',
                            'Une hausse du taux d’intérêt dans le pays',
                            'Une hausse du prix de tous les biens du pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie s’apprécie quand elle permet d’acheter plus d’unités d’une autre monnaie.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la dépréciation d’une monnaie ?',
                        'choices' => [
                            'Une hausse de sa valeur sur le marché des changes',
                            'Une hausse des salaires dans le pays',
                            'Une augmentation du PIB réel',
                            'Une baisse de sa valeur sur le marché des changes',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une monnaie se déprécie quand elle permet d’acheter moins d’unités d’une autre monnaie.',
                    ],
                    [
                        'question' => 'Dans un modèle simple, une monnaie nationale plus faible rend les exportations du pays :',
                        'choices' => [
                            'Plus chères pour les acheteurs étrangers',
                            'Gratuites pour les acheteurs étrangers',
                            'Moins chères pour les acheteurs étrangers',
                            'Identiques, quel que soit le taux de change',
                        ],
                        'correct' => 2,
                        'explanation' => 'Avec une monnaie plus faible, les acheteurs étrangers paient moins d’unités de leur monnaie pour acheter les produits du pays.',
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, quel est l’effet d’une monnaie plus faible sur le prix des importations pour les résidents ?',
                        'choices' => [
                            'Il diminue en monnaie nationale',
                            'Il augmente en monnaie nationale',
                            'Il reste inchangé',
                            'Il devient nul',
                        ],
                        'correct' => 1,
                        'explanation' => 'Il faut plus de monnaie nationale pour acheter la même quantité de monnaie étrangère : les produits importés coûtent plus cher.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le marché des changes ?',
                        'choices' => [
                            'Le marché où l’on achète et vend des actions',
                            'Le marché des produits agricoles',
                            'Le marché où l’on recrute des travailleurs',
                            'Le marché où l’on échange des monnaies entre elles',
                        ],
                        'correct' => 3,
                        'explanation' => 'Sur le marché des changes, on achète et on vend des monnaies, ce qui détermine les taux de change.',
                    ],
                    [
                        'question' => 'Pourquoi les entreprises qui font du commerce international suivent-elles les taux de change ?',
                        'choices' => [
                            'Parce qu’ils modifient le prix, en monnaie nationale, de leurs importations et de leurs exportations',
                            'Parce qu’ils fixent les salaires de leurs employés',
                            'Parce qu’ils remplacent les prix de marché',
                            'Parce qu’ils n’affectent que les entreprises publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une variation du change modifie la valeur, en monnaie nationale, des achats et des ventes faits à l’étranger, donc les coûts et les revenus des entreprises.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une devise ?',
                        'choices' => [
                            'Une pièce de monnaie de faible valeur',
                            'Une monnaie étrangère, par rapport à la monnaie nationale',
                            'Une taxe sur les voyages à l’étranger',
                            'Un crédit accordé par la banque centrale',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une devise est une monnaie étrangère. Acheter des devises, c’est échanger de la monnaie nationale contre de la monnaie étrangère.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change fixe ?',
                        'choices' => [
                            'Un taux qui change chaque seconde selon le marché',
                            'Un taux fixé par les entreprises exportatrices',
                            'Un taux maintenu à un niveau déterminé par les autorités monétaires',
                            'Un taux qui ne concerne que les touristes',
                        ],
                        'correct' => 2,
                        'explanation' => 'Avec un taux fixe, les autorités maintiennent la valeur de la monnaie à un niveau donné. Avec un taux flottant, elle varie selon l’offre et la demande.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6
            // ============================================================
            [
                'title' => 'Balance des paiements et comptes extérieurs',
                'description' => 'Quiz débutant sur la balance des paiements, le compte courant et les flux extérieurs.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la balance des paiements ?',
                        'choices' => [
                            'Un ensemble de comptes qui enregistre les transactions entre les résidents d’un pays et le reste du monde',
                            'Un compte qui enregistre uniquement les recettes fiscales de l’État',
                            'Un registre des échanges qui ont lieu à l’intérieur du pays',
                            'Un indicateur qui mesure directement le PIB réel',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balance des paiements retrace les échanges économiques du pays avec l’étranger : biens, services, revenus, transferts et capitaux.',
                    ],
                    [
                        'question' => 'Que comprend principalement le compte courant ?',
                        'choices' => [
                            'Uniquement les achats d’actions et d’obligations',
                            'Uniquement les réserves de change de la banque centrale',
                            'Les échanges de biens et de services, les revenus et les transferts courants',
                            'Uniquement les dépenses publiques du pays',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le compte courant regroupe les biens, les services, les revenus et les transferts courants. Les achats d’actions relèvent du compte financier.',
                    ],
                    [
                        'question' => 'Que signifie un déficit commercial ?',
                        'choices' => [
                            'Les exportations de biens dépassent les importations de biens',
                            'Les dépenses de l’État dépassent ses recettes',
                            'Le pays ne fait aucun échange avec l’étranger',
                            'Les importations de biens dépassent les exportations de biens',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le déficit commercial est un solde négatif des biens : on importe plus qu’on n’exporte. Un déficit des dépenses de l’État est un déficit budgétaire.',
                    ],
                    [
                        'question' => 'Que signifie un excédent du compte courant ?',
                        'choices' => [
                            'Les paiements courants du pays dépassent ses recettes courantes',
                            'Les recettes courantes du pays dépassent ses paiements courants vis-à-vis du reste du monde',
                            'Le pays n’importe aucun bien ni service',
                            'La monnaie du pays est nécessairement forte',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un excédent courant signifie que le pays reçoit plus du reste du monde (exportations, revenus, transferts) qu’il ne lui verse. Il n’implique rien sur la force de sa monnaie.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le compte financier de la balance des paiements ?',
                        'choices' => [
                            'La partie qui enregistre uniquement les échanges de biens',
                            'Le compte bancaire de l’État',
                            'Le budget annuel de l’État',
                            'La partie qui enregistre les mouvements de capitaux, comme les investissements et les prêts',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le compte financier suit les flux de capitaux entre le pays et l’étranger : investissements, prêts, placements. Les échanges de biens relèvent du compte courant.',
                    ],
                    [
                        'question' => 'Un pays exporte pour 80 de biens et importe pour 100. Quel est le solde commercial ?',
                        'choices' => [
                            '−20 (déficit)',
                            '+20 (excédent)',
                            '180',
                            '0',
                        ],
                        'correct' => 0,
                        'explanation' => 'Solde commercial = exportations − importations = 80 − 100 = −20, donc un déficit de 20.',
                    ],
                    [
                        'question' => 'Que sont les réserves de change ?',
                        'choices' => [
                            'Les économies en monnaie nationale des ménages',
                            'Les devises et autres actifs étrangers détenus par la banque centrale',
                            'Les stocks de marchandises destinés à l’exportation',
                            'Les recettes fiscales de l’État',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les réserves de change sont les actifs en devises que la banque centrale détient, par exemple pour payer les importations ou intervenir sur le marché des changes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un transfert courant, comme les envois d’argent des travailleurs émigrés à leur famille ?',
                        'choices' => [
                            'L’achat de marchandises à l’étranger',
                            'Un prêt accordé à une entreprise étrangère',
                            'Un versement entre résidents et non-résidents, sans achat de bien ou de service en échange',
                            'Un impôt payé sur les importations',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un transfert courant est un versement sans contrepartie directe en biens ou en services. Il est enregistré dans le compte courant.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette extérieure d’un pays ?',
                        'choices' => [
                            'Les sommes que les résidents du pays doivent à des non-résidents',
                            'Les sommes que l’État doit à ses propres citoyens',
                            'Le total des importations d’une année',
                            'Le déficit du budget de l’État',
                        ],
                        'correct' => 0,
                        'explanation' => 'La dette extérieure est ce que le pays (État, banques, entreprises) doit à l’étranger. Ce que l’État doit à ses citoyens est de la dette intérieure.',
                    ],
                    [
                        'question' => 'Pourquoi suit-on la balance des paiements ?',
                        'choices' => [
                            'Parce qu’elle prédit le cours de toutes les actions',
                            'Parce qu’elle mesure le taux de chômage du pays',
                            'Parce qu’elle remplace toutes les autres statistiques économiques',
                            'Parce qu’elle renseigne sur les échanges et les flux financiers du pays avec l’étranger',
                        ],
                        'correct' => 3,
                        'explanation' => 'Elle permet de savoir si le pays vend ou achète plus à l’étranger et comment ces échanges sont financés.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7
            // ============================================================
            [
                'title' => 'Mondialisation et chaînes de valeur',
                'description' => 'Quiz débutant sur la mondialisation économique, les chaînes de valeur et les investissements internationaux.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la mondialisation économique ?',
                        'choices' => [
                            'La disparition de toutes les frontières politiques',
                            'L’arrêt du commerce international',
                            'L’intensification des échanges, des investissements et des liens économiques entre les pays',
                            'La production de tous les biens dans un seul pays',
                        ],
                        'correct' => 2,
                        'explanation' => 'La mondialisation désigne l’intensification des relations économiques entre pays : commerce, investissements et flux de capitaux.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une chaîne de valeur mondiale ?',
                        'choices' => [
                            'Une chaîne de magasins présente dans plusieurs pays',
                            'Une production dont les différentes étapes sont réparties entre plusieurs pays',
                            'Un système où chaque pays produit tout seul',
                            'Une taxe sur les produits importés',
                        ],
                        'correct' => 1,
                        'explanation' => 'Dans une chaîne de valeur mondiale, la conception, la fabrication et l’assemblage d’un produit peuvent avoir lieu dans des pays différents.',
                    ],
                    [
                        'question' => 'Pourquoi une entreprise répartit-elle sa production dans plusieurs pays ?',
                        'choices' => [
                            'Parce que la loi oblige chaque étape à se faire dans un pays différent',
                            'Pour supprimer tous les risques liés à la production',
                            'Parce que la spécialisation locale est interdite',
                            'Pour profiter des différences de coûts, de compétences ou de proximité avec les marchés',
                        ],
                        'correct' => 3,
                        'explanation' => 'Chaque pays offre des avantages différents (main-d’œuvre, technologies, proximité des clients) : l’entreprise place chaque étape là où elle est la plus rentable.',
                    ],
                    [
                        'question' => 'Quel risque les chaînes de valeur mondiales peuvent-elles augmenter ?',
                        'choices' => [
                            'La dépendance aux perturbations du transport ou de l’approvisionnement à l’étranger',
                            'La stabilité totale des approvisionnements',
                            'L’indépendance complète des économies',
                            'La disparition des risques logistiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Quand la production dépend de plusieurs pays, un blocage (transport, crise) dans l’un d’eux peut ralentir toute la chaîne.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investissement direct étranger (IDE) ?',
                        'choices' => [
                            'L’achat de produits importés par des consommateurs',
                            'Un investissement à l’étranger pour créer ou contrôler durablement une entreprise, comme une usine ou une filiale',
                            'Une taxe payée par les entreprises étrangères à la frontière',
                            'Un transfert d’argent de touristes vers leur pays',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un IDE est un investissement fait à l’étranger pour posséder ou contrôler durablement une entreprise (usine, filiale), et non un simple achat de produits.',
                    ],
                    [
                        'question' => 'Pourquoi les investissements directs étrangers sont-ils utiles à un pays d’accueil ?',
                        'choices' => [
                            'Ils servent uniquement à financer les ménages',
                            'Ils empêchent toute concurrence',
                            'Ils réduisent forcément la productivité',
                            'Ils peuvent apporter des capitaux, des technologies, des emplois et l’accès à de nouveaux marchés',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une entreprise étrangère qui s’installe apporte souvent des capitaux, des techniques et des emplois, et peut ouvrir de nouveaux marchés à l’exportation.',
                    ],
                    [
                        'question' => 'Pourquoi des normes différentes d’un pays à l’autre peuvent-elles freiner le commerce ?',
                        'choices' => [
                            'Elles suppriment la concurrence entre les pays',
                            'Elles permettent de vendre sans aucune adaptation',
                            'Elles obligent les entreprises à adapter leurs produits, ce qui augmente leurs coûts',
                            'Elles réduisent le prix de tous les produits',
                        ],
                        'correct' => 2,
                        'explanation' => 'Pour vendre dans un autre pays, une entreprise doit respecter ses normes (sécurité, étiquetage) : cette adaptation a un coût qui peut freiner ses exportations.',
                    ],
                    [
                        'question' => 'Pourquoi une petite économie dépend-elle souvent davantage du commerce extérieur ?',
                        'choices' => [
                            'Son marché intérieur est étroit, donc elle doit vendre et acheter à l’étranger',
                            'Elle produit déjà tous les biens dont elle a besoin',
                            'Elle n’a aucun consommateur à l’intérieur du pays',
                            'Elle ne peut pas utiliser de monnaie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un petit marché intérieur ne suffit pas à absorber la production ni à fournir tous les produits : le pays doit commercer avec l’étranger.',
                    ],
                    [
                        'question' => 'Pourquoi diversifier ses partenaires commerciaux peut-il réduire certains risques ?',
                        'choices' => [
                            'Cela supprime tous les risques mondiaux',
                            'Cela empêche toute spécialisation',
                            'Cela limite la dépendance envers un seul marché ou un seul fournisseur',
                            'Cela rend tous les coûts fixes nuls',
                        ],
                        'correct' => 2,
                        'explanation' => 'Si un partenaire ralentit ou bloque ses achats, le pays peut se tourner vers les autres : il dépend moins d’un seul client ou fournisseur.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une entreprise multinationale ?',
                        'choices' => [
                            'Une entreprise qui vend uniquement à l’étranger',
                            'Une entreprise qui possède des filiales ou des usines dans plusieurs pays',
                            'Une entreprise détenue par l’État',
                            'Une entreprise qui n’emploie que des travailleurs étrangers',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une multinationale exerce son activité dans plusieurs pays grâce à des filiales, des usines ou des bureaux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8
            // ============================================================
            [
                'title' => 'Politiques commerciales et accords internationaux',
                'description' => 'Quiz débutant sur les accords commerciaux, le libre-échange et les politiques protectionnistes.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un accord commercial ?',
                        'choices' => [
                            'Une politique monétaire nationale',
                            'Un contrat de travail entre une entreprise et un salarié',
                            'Une taxe sur la consommation intérieure',
                            'Un accord entre pays qui fixe des règles pour faciliter les échanges',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un accord commercial est un traité entre pays qui organise leurs échanges, par exemple en réduisant les droits de douane.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une zone de libre-échange ?',
                        'choices' => [
                            'Augmenter tous les droits de douane entre les membres',
                            'Supprimer ou réduire les obstacles aux échanges entre les pays membres',
                            'Interdire les importations entre les membres',
                            'Créer une monnaie unique dans tous les cas',
                        ],
                        'correct' => 1,
                        'explanation' => 'Dans une zone de libre-échange, les pays membres commercent entre eux avec peu ou pas de droits de douane.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une union douanière ?',
                        'choices' => [
                            'Une zone de libre-échange dotée d’un tarif extérieur commun',
                            'Une zone où il n’existe aucun commerce international',
                            'Une politique de taux de change fixe entre deux pays',
                            'Une union qui ne concerne que la monnaie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une union douanière ajoute au libre-échange interne un même droit de douane appliqué à tous les pays extérieurs à la zone.',
                    ],
                    [
                        'question' => 'Quel est le rôle de l’Organisation mondiale du commerce (OMC) ?',
                        'choices' => [
                            'Fixer les prix de tous les produits dans le monde',
                            'Diriger les banques centrales de ses membres',
                            'Fournir un cadre de règles pour le commerce entre ses membres',
                            'Remplacer les gouvernements nationaux',
                        ],
                        'correct' => 2,
                        'explanation' => 'L’OMC organise les règles du commerce entre ses membres, sert de lieu de négociation et aide à régler les différends commerciaux.',
                    ],
                    [
                        'question' => 'Pourquoi un accord commercial peut-il favoriser les échanges ?',
                        'choices' => [
                            'Il réduit les obstacles aux échanges et rend les règles plus prévisibles',
                            'Il rend tous les produits gratuits',
                            'Il supprime toute concurrence entre les entreprises',
                            'Il interdit aux entreprises d’exporter',
                        ],
                        'correct' => 0,
                        'explanation' => 'Moins de droits de douane et des règles plus claires réduisent les coûts et les incertitudes des entreprises qui exportent ou importent.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le protectionnisme ?',
                        'choices' => [
                            'Une politique qui supprime tous les droits de douane',
                            'Une politique qui interdit l’exportation de tous les biens',
                            'Une politique qui fixe le taux de change',
                            'Une politique qui protège les producteurs nationaux de la concurrence étrangère',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le protectionnisme utilise des droits de douane, des quotas ou des normes pour freiner les importations et protéger les producteurs du pays.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le libre-échange ?',
                        'choices' => [
                            'Un système où l’État fixe tous les prix',
                            'Des échanges entre pays sans droits de douane ni quotas importants',
                            'Des échanges réservés aux entreprises publiques',
                            'Un système où chaque pays vit en autarcie',
                        ],
                        'correct' => 1,
                        'explanation' => 'Le libre-échange désigne des échanges internationaux peu ou pas limités par des droits de douane ou des quotas.',
                    ],
                    [
                        'question' => 'Quels producteurs risquent d’être touchés quand un pays ouvre son marché aux importations ?',
                        'choices' => [
                            'Les consommateurs, qui voient les prix augmenter',
                            'Les exportateurs, qui perdent leurs clients étrangers',
                            'Ceux dont les produits sont concurrencés par les importations',
                            'Aucun, car le commerce n’a pas d’effet sur les producteurs',
                        ],
                        'correct' => 2,
                        'explanation' => 'L’ouverture apporte de la concurrence : les producteurs nationaux qui vendent les mêmes produits que les importations peuvent perdre des ventes, alors que les consommateurs y gagnent souvent.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un tarif extérieur commun ?',
                        'choices' => [
                            'Un droit de douane appliqué entre les pays membres d’une zone',
                            'Une taxe sur les exportations des pays membres',
                            'Un prix mondial fixé par l’OMC',
                            'Un même droit de douane appliqué par tous les membres aux produits des pays tiers',
                        ],
                        'correct' => 3,
                        'explanation' => 'Dans une union douanière, tous les membres appliquent les mêmes droits de douane aux produits venant de l’extérieur de la zone.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une barrière non tarifaire ?',
                        'choices' => [
                            'Une règle ou une norme qui gêne les importations sans être un droit de douane',
                            'Un droit de douane très élevé',
                            'Une subvention versée aux exportateurs',
                            'Un accord de libre-échange entre deux pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les barrières non tarifaires (normes techniques, procédures, quotas) freinent les importations sans passer par une taxe.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 9
            // ============================================================
            [
                'title' => 'Économie internationale et indicateurs macroéconomiques',
                'description' => 'Quiz débutant sur les exportations nettes, les termes de l’échange, le taux de couverture et la convertibilité des monnaies.',
                'questions' => [
                    [
                        'question' => 'Que représentent les exportations nettes ?',
                        'choices' => [
                            'Les importations moins les exportations',
                            'Les exportations moins les importations',
                            'Les exportations plus les impôts',
                            'Les importations plus les investissements',
                        ],
                        'correct' => 1,
                        'explanation' => 'Exportations nettes = exportations − importations. Elles font partie du PIB calculé par les dépenses : PIB = C + I + G + (X − M).',
                    ],
                    [
                        'question' => 'Si les exportations sont de 500 et les importations de 400, quelles sont les exportations nettes ?',
                        'choices' => [
                            '100',
                            '900',
                            '−100',
                            '50',
                        ],
                        'correct' => 0,
                        'explanation' => '500 − 400 = 100. Le résultat 900 vient d’une addition, et −100 d’une soustraction dans le mauvais sens.',
                    ],
                    [
                        'question' => 'Si les importations dépassent les exportations, les exportations nettes sont :',
                        'choices' => [
                            'Positives',
                            'Toujours nulles',
                            'Négatives',
                            'Toujours égales aux exportations',
                        ],
                        'correct' => 2,
                        'explanation' => 'Quand on importe plus qu’on n’exporte, exportations − importations est négatif.',
                    ],
                    [
                        'question' => 'Que comparent les termes de l’échange ?',
                        'choices' => [
                            'Les exportations et le PIB',
                            'Le nombre d’accords commerciaux signés par le pays',
                            'Les importations et les exportations en volume',
                            'Le prix des exportations et le prix des importations',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les termes de l’échange mesurent le rapport entre le prix des produits exportés et celui des produits importés : quand il augmente, une même quantité exportée permet d’acheter plus de produits importés.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une économie ouverte ?',
                        'choices' => [
                            'Une économie qui échange des biens, des services et des capitaux avec le reste du monde',
                            'Une économie sans aucun impôt',
                            'Une économie où l’État possède toutes les entreprises',
                            'Une économie sans frontière avec ses voisins',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une économie est ouverte quand elle commerce avec l’étranger. Le contraire est l’autarcie.',
                    ],
                    [
                        'question' => 'Pourquoi les exportations peuvent-elles augmenter le PIB d’un pays ?',
                        'choices' => [
                            'Parce que les importations sont comptées positivement dans le PIB',
                            'Parce que le PIB ne compte que les biens importés',
                            'Parce qu’elles créent une demande supplémentaire pour la production nationale',
                            'Parce que le commerce n’a aucun lien avec la production',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les exportations sont des biens produits dans le pays et achetés à l’étranger : elles augmentent la demande adressée aux producteurs nationaux.',
                    ],
                    [
                        'question' => 'Pourquoi un pays importe-t-il des machines ou des matières premières ?',
                        'choices' => [
                            'Pour réduire sa propre production',
                            'Pour diminuer ses exportations',
                            'Pour augmenter ses impôts',
                            'Pour produire ses propres biens quand il ne les a pas ou les produit trop cher',
                        ],
                        'correct' => 3,
                        'explanation' => 'Beaucoup d’entreprises importent des machines ou des matières premières qui servent à produire, et parfois à exporter à leur tour.',
                    ],
                    [
                        'question' => 'Que mesure le taux de couverture d’un pays ?',
                        'choices' => [
                            'Le rapport entre la dette publique et le PIB',
                            'Le rapport entre les exportations et les importations',
                            'Le taux de change moyen de l’année',
                            'La part des exportations dans la population',
                        ],
                        'correct' => 1,
                        'explanation' => 'Taux de couverture = exportations / importations. À 100 %, les exportations financent exactement les importations.',
                    ],
                    [
                        'question' => 'Un pays exporte pour 90 et importe pour 120. Quel est son taux de couverture ?',
                        'choices' => [
                            '133 %',
                            '30 %',
                            '75 %',
                            '25 %',
                        ],
                        'correct' => 2,
                        'explanation' => 'Taux de couverture = 90 / 120 = 0,75 = 75 %. Le résultat 133 % vient d’une division dans le mauvais sens (120 / 90).',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une monnaie convertible ?',
                        'choices' => [
                            'Une monnaie qui peut être échangée librement contre d’autres monnaies',
                            'Une monnaie acceptée uniquement dans son pays d’origine',
                            'Une monnaie dont la valeur ne change jamais',
                            'Une monnaie émise par plusieurs banques commerciales',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie convertible peut être vendue ou achetée contre des devises sans restriction. Sa valeur peut toutefois varier.',
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

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