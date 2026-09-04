```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InternationalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'international-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux du commerce international',
                'questions' => [
                    [
                        'question' => 'Qu’étudie principalement l’économie internationale ?',
                        'answers' => [
                            ['answer' => 'Les échanges de biens, services, capitaux et ressources entre pays', 'iscorrect' => true],
                            ['answer' => 'Uniquement les marchés d’un seul pays', 'iscorrect' => false],
                            ['answer' => 'Uniquement la politique monétaire intérieure', 'iscorrect' => false],
                            ['answer' => 'Uniquement les finances des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils entre eux ?',
                        'answers' => [
                            ['answer' => 'Parce qu’ils peuvent avoir des ressources, technologies, coûts et avantages différents', 'iscorrect' => true],
                            ['answer' => 'Parce que tous les pays produisent exactement les mêmes biens', 'iscorrect' => false],
                            ['answer' => 'Parce que le commerce élimine automatiquement tous les coûts', 'iscorrect' => false],
                            ['answer' => 'Parce que les échanges sont toujours obligatoires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'answers' => [
                            ['answer' => 'Un bien ou service vendu à un acheteur situé à l’étranger', 'iscorrect' => true],
                            ['answer' => 'Un bien acheté à l’étranger', 'iscorrect' => false],
                            ['answer' => 'Un impôt intérieur', 'iscorrect' => false],
                            ['answer' => 'Une dépense publique locale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'answers' => [
                            ['answer' => 'Un bien ou service acheté à un fournisseur situé à l’étranger', 'iscorrect' => true],
                            ['answer' => 'Un produit vendu à l’étranger', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Une subvention publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel concept explique qu’un pays se spécialise dans les biens pour lesquels son coût d’opportunité est relativement plus faible ?',
                        'answers' => [
                            ['answer' => 'L’avantage comparatif', 'iscorrect' => true],
                            ['answer' => 'L’inflation', 'iscorrect' => false],
                            ['answer' => 'La demande agrégée', 'iscorrect' => false],
                            ['answer' => 'Le chômage structurel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’avantage absolu ?',
                        'answers' => [
                            ['answer' => 'La capacité à produire un bien avec moins de ressources ou à un coût inférieur qu’un autre producteur', 'iscorrect' => true],
                            ['answer' => 'La capacité à toujours exporter davantage', 'iscorrect' => false],
                            ['answer' => 'La capacité à avoir une monnaie plus forte', 'iscorrect' => false],
                            ['answer' => 'La capacité à imposer des droits de douane élevés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif peut-il exister même si un pays a un avantage absolu dans tous les biens ?',
                        'answers' => [
                            ['answer' => 'Parce que le coût d’opportunité relatif peut différer entre les pays', 'iscorrect' => true],
                            ['answer' => 'Parce que les coûts n’ont aucune importance', 'iscorrect' => false],
                            ['answer' => 'Parce que les échanges ne dépendent jamais de la productivité', 'iscorrect' => false],
                            ['answer' => 'Parce que les prix sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un effet potentiel de la spécialisation internationale ?',
                        'answers' => [
                            ['answer' => 'Une utilisation plus efficace des ressources selon les avantages comparatifs', 'iscorrect' => true],
                            ['answer' => 'Une disparition automatique de toutes les inégalités', 'iscorrect' => false],
                            ['answer' => 'Une suppression de toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Une production mondiale nécessairement plus faible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le commerce international peut-il accroître la variété des biens disponibles ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs peuvent accéder à des produits qui ne sont pas produits localement', 'iscorrect' => true],
                            ['answer' => 'Chaque pays interdit les produits locaux', 'iscorrect' => false],
                            ['answer' => 'Les importations réduisent toujours la diversité', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne concerne que les matières premières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transport sont-ils importants pour le commerce international ?',
                        'answers' => [
                            ['answer' => 'Ils augmentent le coût total nécessaire pour acheminer les biens entre pays', 'iscorrect' => true],
                            ['answer' => 'Ils n’ont aucun effet sur les prix internationaux', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent automatiquement le taux de change', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les droits de douane', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Avantage comparatif et spécialisation',
                'questions' => [
                    [
                        'question' => 'Que représente le coût d’opportunité de produire un bien ?',
                        'answers' => [
                            ['answer' => 'La quantité d’un autre bien à laquelle il faut renoncer pour produire une unité supplémentaire', 'iscorrect' => true],
                            ['answer' => 'Le prix de vente uniquement', 'iscorrect' => false],
                            ['answer' => 'Le salaire moyen du pays', 'iscorrect' => false],
                            ['answer' => 'La valeur totale des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le pays A renonce à 2 unités de textile pour produire 1 unité de vin et le pays B renonce à 4 unités de textile, lequel a l’avantage comparatif dans le vin ?',
                        'answers' => [
                            ['answer' => 'Le pays A', 'iscorrect' => true],
                            ['answer' => 'Le pays B', 'iscorrect' => false],
                            ['answer' => 'Les deux pays', 'iscorrect' => false],
                            ['answer' => 'Aucun des deux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un pays a un coût d’opportunité relativement plus faible pour le bien A, il devrait selon le principe de l’avantage comparatif :',
                        'answers' => [
                            ['answer' => 'Se spécialiser relativement davantage dans le bien A', 'iscorrect' => true],
                            ['answer' => 'Éviter complètement le bien A', 'iscorrect' => false],
                            ['answer' => 'Produire uniquement le bien B', 'iscorrect' => false],
                            ['answer' => 'Interdire les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la spécialisation complète n’est-elle pas toujours observée dans les économies réelles ?',
                        'answers' => [
                            ['answer' => 'Les coûts de transport, politiques publiques, économies d’échelle et différences de qualité peuvent limiter la spécialisation', 'iscorrect' => true],
                            ['answer' => 'Les pays n’ont jamais intérêt à se spécialiser', 'iscorrect' => false],
                            ['answer' => 'Les avantages comparatifs n’existent jamais dans la réalité', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs achètent uniquement des biens locaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut permettre l’échange lorsque les pays se spécialisent selon leur avantage comparatif ?',
                        'answers' => [
                            ['answer' => Une consommation potentiellement supérieure à ce qui serait possible sans échange dans certains modèles', 'iscorrect' => true],
                            ['answer' => 'Une suppression automatique des coûts de production', 'iscorrect' => false],
                            ['answer' => 'Une baisse nécessaire de la production totale', 'iscorrect' => false],
                            ['answer' => 'Une égalité automatique des revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coût d’opportunité du blé est plus faible dans le pays X que dans le pays Y, le pays X possède :',
                        'answers' => [
                            ['answer' => 'Un avantage comparatif dans le blé', 'iscorrect' => true],
                            ['answer' => 'Un avantage absolu nécessairement dans tous les biens', 'iscorrect' => false],
                            ['answer' => 'Un désavantage comparatif dans le blé', 'iscorrect' => false],
                            ['answer' => 'Aucun avantage économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif repose-t-il sur les coûts relatifs plutôt que seulement absolus ?',
                        'answers' => [
                            ['answer' => 'Les échanges concernent les arbitrages entre différentes productions', 'iscorrect' => true],
                            ['answer' => 'Les coûts absolus n’existent pas', 'iscorrect' => false],
                            ['answer' => 'Les prix internationaux sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'La productivité est sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si un pays concentre trop sa production dans un seul secteur exportateur ?',
                        'answers' => [
                            ['answer' => 'Une forte exposition aux chocs de demande ou de prix sur ce secteur', 'iscorrect' => true],
                            ['answer' => 'Une diversification automatique de l’économie', 'iscorrect' => false],
                            ['answer' => 'Une disparition des risques commerciaux', 'iscorrect' => false],
                            ['answer' => 'Une stabilité absolue des recettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut modifier l’avantage comparatif au fil du temps ?',
                        'answers' => [
                            ['answer' => 'Les changements de technologie, productivité, compétences et coûts', 'iscorrect' => true],
                            ['answer' => 'Uniquement la taille géographique du pays', 'iscorrect' => false],
                            ['answer' => 'Uniquement la population totale', 'iscorrect' => false],
                            ['answer' => 'Aucun facteur économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif ne signifie-t-il pas qu’un pays doit arrêter toute production des autres biens ?',
                        'answers' => [
                            ['answer' => 'La diversification peut être utile face aux risques, aux coûts fixes et aux contraintes économiques réelles', 'iscorrect' => true],
                            ['answer' => 'L’avantage comparatif interdit la spécialisation', 'iscorrect' => false],
                            ['answer' => 'Tous les biens ont toujours le même coût', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont impossibles sans produire chaque bien', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Offre, demande et équilibre international',
                'questions' => [
                    [
                        'question' => 'Que représente le prix mondial d’un bien dans un modèle simple de commerce international ?',
                        'answers' => [
                            ['answer' => 'Le prix auquel un pays peut acheter ou vendre le bien sur le marché international dans le cadre du modèle', 'iscorrect' => true],
                            ['answer' => 'Toujours le prix fixé par le gouvernement national', 'iscorrect' => false],
                            ['answer' => 'Le salaire moyen mondial', 'iscorrect' => false],
                            ['answer' => 'Un prix nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix mondial est inférieur au prix d’autarcie d’un pays, ce pays tend dans un modèle standard à :',
                        'answers' => [
                            ['answer' => 'Importer le bien', 'iscorrect' => true],
                            ['answer' => 'Exporter le bien', 'iscorrect' => false],
                            ['answer' => 'Interdire automatiquement le bien', 'iscorrect' => false],
                            ['answer' => 'Produire uniquement pour l’étranger', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix mondial est supérieur au prix d’autarcie, le pays tend à :',
                        'answers' => [
                            ['answer' => 'Exporter le bien', 'iscorrect' => true],
                            ['answer' => 'Importer le bien', 'iscorrect' => false],
                            ['answer' => 'Cesser toute production', 'iscorrect' => false],
                            ['answer' => 'Fixer automatiquement un prix nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix d’autarcie ?',
                        'answers' => [
                            ['answer' => 'Le prix d’équilibre domestique lorsque le pays n’échange pas avec l’étranger', 'iscorrect' => true],
                            ['answer' => 'Le prix mondial', 'iscorrect' => false],
                            ['answer' => 'Le prix des exportations uniquement', 'iscorrect' => false],
                            ['answer' => 'Un prix imposé par les partenaires commerciaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un pays importe un bien à un prix inférieur au prix domestique d’autarcie, qui peut bénéficier de la baisse du prix ?',
                        'answers' => [
                            ['answer' => 'Les consommateurs', 'iscorrect' => true],
                            ['answer' => 'Uniquement les producteurs domestiques', 'iscorrect' => false],
                            ['answer' => 'Uniquement le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Personne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un pays exporte un bien à un prix supérieur à son prix domestique d’autarcie, qui peut bénéficier de la hausse du prix ?',
                        'answers' => [
                            ['answer' => 'Les producteurs domestiques de ce bien', 'iscorrect' => true],
                            ['answer' => 'Uniquement les consommateurs domestiques', 'iscorrect' => false],
                            ['answer' => 'Uniquement les importateurs', 'iscorrect' => false],
                            ['answer' => 'Personne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le commerce peut-il modifier la répartition des gains entre consommateurs et producteurs ?',
                        'answers' => [
                            ['answer' => 'L’ouverture commerciale peut modifier les prix domestiques par rapport à la situation d’autarcie', 'iscorrect' => true],
                            ['answer' => 'Les prix domestiques ne changent jamais avec le commerce', 'iscorrect' => false],
                            ['answer' => 'Le commerce modifie uniquement les salaires publics', 'iscorrect' => false],
                            ['answer' => 'Les producteurs et consommateurs sont toujours affectés de la même manière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une restriction commerciale ?',
                        'answers' => [
                            ['answer' => 'Une mesure qui limite ou encadre les échanges internationaux', 'iscorrect' => true],
                            ['answer' => 'Une augmentation automatique de la productivité', 'iscorrect' => false],
                            ['answer' => 'Une baisse des salaires', 'iscorrect' => false],
                            ['answer' => 'Une politique sans effet sur les échanges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre mondial peut-il influencer les marchés domestiques ?',
                        'answers' => [
                            ['answer' => Les prix et quantités disponibles dans un pays peuvent être affectés par les possibilités d’échange avec l’étranger', 'iscorrect' => true],
                            ['answer' => 'Les économies nationales sont totalement isolées', 'iscorrect' => false],
                            ['answer' => 'Les marchés domestiques ne dépendent jamais du commerce', 'iscorrect' => false],
                            ['answer' => 'Le commerce international ne concerne que les gouvernements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un grand pays peut-il avoir une certaine influence sur le prix mondial ?',
                        'answers' => [
                            ['answer' => 'Sa demande ou son offre peut être suffisamment importante pour modifier les conditions mondiales', 'iscorrect' => true],
                            ['answer' => 'Parce que tous les petits pays lui obéissent', 'iscorrect' => false],
                            ['answer' => 'Parce que les prix mondiaux sont toujours administrés', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il ne peut pas commercer avec les autres pays', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Droits de douane et barrières commerciales',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un droit de douane ?',
                        'answers' => [
                            ['answer' => 'Une taxe appliquée à une marchandise importée', 'iscorrect' => true],
                            ['answer' => 'Une subvention versée aux consommateurs étrangers', 'iscorrect' => false],
                            ['answer' => 'Une taxe uniquement sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Une obligation de produire localement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet direct d’un droit de douane sur un bien importé dans un modèle simple ?',
                        'answers' => [
                            ['answer' => 'Il augmente le prix intérieur du bien importé par rapport à la situation sans taxe', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours le prix intérieur', 'iscorrect' => false],
                            ['answer' => 'Il rend automatiquement les importations gratuites', 'iscorrect' => false],
                            ['answer' => 'Il supprime toute production domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui perçoit les recettes d’un droit de douane dans un modèle national ?',
                        'answers' => [
                            ['answer' => 'Le gouvernement du pays qui impose le droit de douane', 'iscorrect' => true],
                            ['answer' => 'Les producteurs étrangers directement', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs étrangers', 'iscorrect' => false],
                            ['answer' => 'Aucun acteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement l’effet d’un tarif sur les consommateurs du pays importateur ?',
                        'answers' => [
                            ['answer' => Ils paient généralement un prix plus élevé et consomment moins du bien importé', 'iscorrect' => true],
                            ['answer' => 'Ils paient toujours moins cher', 'iscorrect' => false],
                            ['answer' => 'Ils reçoivent directement les recettes douanières', 'iscorrect' => false],
                            ['answer' => 'Ils ne sont pas affectés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement l’effet d’un tarif sur les producteurs domestiques concurrencés par les importations ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent produire davantage grâce au prix intérieur plus élevé', 'iscorrect' => true],
                            ['answer' => 'Ils cessent toujours toute production', 'iscorrect' => false],
                            ['answer' => 'Ils paient automatiquement la taxe', 'iscorrect' => false],
                            ['answer' => 'Ils subissent toujours une baisse des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un coût potentiel d’un droit de douane pour l’économie ?',
                        'answers' => [
                            ['answer' => 'Des pertes d’efficacité liées à la réduction de certains échanges mutuellement bénéfiques', 'iscorrect' => true],
                            ['answer' => 'Une hausse automatique de la productivité de tous les secteurs', 'iscorrect' => false],
                            ['answer' => 'Une élimination de toute distorsion', 'iscorrect' => false],
                            ['answer' => 'Une réduction certaine des coûts de production étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un quota d’importation ?',
                        'answers' => [
                            ['answer' => 'Une limite quantitative imposée aux importations d’un bien', 'iscorrect' => true],
                            ['answer' => 'Une taxe sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Une subvention à la consommation', 'iscorrect' => false],
                            ['answer' => 'Une interdiction de toute production nationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre un tarif et un quota ?',
                        'answers' => [
                            ['answer' => 'Le tarif agit directement sur le prix par une taxe, tandis que le quota limite directement la quantité', 'iscorrect' => true],
                            ['answer' => 'Les deux sont toujours exactement identiques', 'iscorrect' => false],
                            ['answer' => 'Le quota est toujours une subvention', 'iscorrect' => false],
                            ['answer' => 'Le tarif ne concerne jamais les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il utiliser des barrières commerciales ?',
                        'answers' => [
                            ['answer' => 'Pour protéger certains secteurs, répondre à des objectifs politiques ou traiter certains problèmes commerciaux selon sa stratégie', 'iscorrect' => true],
                            ['answer' => 'Parce que le commerce international est toujours inefficace', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que les consommateurs paient toujours moins', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer toute concurrence intérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les droits de douane peuvent-ils entraîner des représailles commerciales ?',
                        'answers' => [
                            ['answer' => 'Les partenaires commerciaux peuvent répondre avec leurs propres mesures restrictives', 'iscorrect' => true],
                            ['answer' => 'Les pays étrangers ne réagissent jamais', 'iscorrect' => false],
                            ['answer' => 'Les tarifs empêchent toute négociation', 'iscorrect' => false],
                            ['answer' => 'Les importations augmentent toujours après un tarif', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Taux de change et marché des devises',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'answers' => [
                            ['answer' => 'Le prix d’une monnaie exprimé en unités d’une autre monnaie', 'iscorrect' => true],
                            ['answer' => 'Le taux d’intérêt domestique uniquement', 'iscorrect' => false],
                            ['answer' => 'Le prix mondial d’un bien', 'iscorrect' => false],
                            ['answer' => 'Le taux d’inflation annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 1 euro vaut 1,10 dollar, combien de dollars faut-il pour acheter 2 euros ?',
                        'answers' => [
                            ['answer' => '2,20 dollars', 'iscorrect' => true],
                            ['answer' => '1,20 dollar', 'iscorrect' => false],
                            ['answer' => '2,00 dollars', 'iscorrect' => false],
                            ['answer' => '1,10 dollar', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une appréciation d’une monnaie ?',
                        'answers' => [
                            ['answer' => 'Une hausse de sa valeur par rapport à une autre monnaie', 'iscorrect' => true],
                            ['answer' => 'Une baisse certaine de son pouvoir d’achat intérieur', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des exportations', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire des taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépréciation d’une monnaie ?',
                        'answers' => [
                            ['answer' => 'Une baisse de sa valeur sur le marché des changes', 'iscorrect' => true],
                            ['answer' => 'Une hausse automatique des salaires', 'iscorrect' => false],
                            ['answer' => 'Une augmentation certaine du PIB réel', 'iscorrect' => false],
                            ['answer' => 'Une baisse du prix des importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle simple, une monnaie nationale plus faible rend généralement les exportations du pays :',
                        'answers' => [
                            ['answer' => 'Relativement moins chères pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Toujours plus chères', 'iscorrect' => false],
                            ['answer' => 'Gratuites', 'iscorrect' => false],
                            ['answer' => 'Sans changement possible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une monnaie plus faible tend généralement à rendre les importations plus chères pour les résidents, toutes choses égales par ailleurs.',
                        'answers' => [
                            ['answer' => 'Vrai', 'iscorrect' => true],
                            ['answer' => 'Faux', 'iscorrect' => false],
                            ['answer' => 'Seulement pour les services domestiques', 'iscorrect' => false],
                            ['answer' => 'Seulement lorsque les exportations sont nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un marché des changes ?',
                        'answers' => [
                            ['answer' => 'Le marché sur lequel différentes monnaies sont échangées', 'iscorrect' => true],
                            ['answer' => 'Le marché uniquement des actions', 'iscorrect' => false],
                            ['answer' => 'Le marché des biens agricoles', 'iscorrect' => false],
                            ['answer' => 'Le marché du travail mondial uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises engagées dans le commerce international s’intéressent-elles aux taux de change ?',
                        'answers' => [
                            ['answer' => 'Les variations de change peuvent modifier le prix des importations, des exportations et des revenus en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Les taux de change n’affectent jamais les entreprises', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent uniquement les salaires domestiques', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les prix de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque supporte une entreprise qui doit payer un fournisseur étranger dans une monnaie qui peut s’apprécier ?',
                        'answers' => [
                            ['answer' => 'Le coût en monnaie nationale peut augmenter', 'iscorrect' => true],
                            ['answer' => 'Le coût devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'Le fournisseur étranger paie toujours davantage', 'iscorrect' => false],
                            ['answer' => 'Le risque disparaît automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mouvements de change peuvent-ils influencer l’inflation intérieure ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent modifier le prix en monnaie nationale des biens et intrants importés', 'iscorrect' => true],
                            ['answer' => 'Les monnaies étrangères n’ont aucun rapport avec les prix intérieurs', 'iscorrect' => false],
                            ['answer' => 'Ils affectent uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Ils rendent tous les produits domestiques gratuits', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Balance des paiements et comptes extérieurs',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la balance des paiements ?',
                        'answers' => [
                            ['answer' => 'Un ensemble de comptes enregistrant les transactions économiques entre résidents d’un pays et le reste du monde', 'iscorrect' => true],
                            ['answer' => 'Un compte des seules recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Un registre des échanges intérieurs uniquement', 'iscorrect' => false],
                            ['answer' => 'Une mesure directe du PIB réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que comprend principalement le compte courant ?',
                        'answers' => [
                            ['answer' => Les échanges de biens et services ainsi que certains revenus primaires et transferts courants selon la classification', 'iscorrect' => true],
                            ['answer' => 'Uniquement les achats d’actions', 'iscorrect' => false],
                            ['answer' => 'Uniquement les réserves de change', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un déficit commercial ?',
                        'answers' => [
                            ['answer' => 'La valeur des importations de biens dépasse celle des exportations de biens sur la période considérée', 'iscorrect' => true],
                            ['answer' => 'Le pays exporte plus de biens qu’il n’en importe', 'iscorrect' => false],
                            ['answer' => 'Le gouvernement a nécessairement un déficit budgétaire', 'iscorrect' => false],
                            ['answer' => 'Le pays n’a aucun échange international', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une balance courante excédentaire signifie généralement que :',
                        'answers' => [
                            ['answer' => Le pays reçoit, sur les composantes concernées, plus de ressources du reste du monde qu’il n’en transfère selon la mesure comptable considérée', 'iscorrect' => true],
                            ['answer' => 'Le pays n’a aucune importation', 'iscorrect' => false],
                            ['answer' => 'Le pays a nécessairement une monnaie forte', 'iscorrect' => false],
                            ['answer' => 'Le pays a automatiquement une croissance élevée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit courant peut-il être associé à des entrées de capitaux ?',
                        'answers' => [
                            ['answer' => 'Le financement extérieur peut compenser une demande de ressources supérieure à l’épargne intérieure selon l’identité macroéconomique', 'iscorrect' => true],
                            ['answer' => 'Les capitaux n’ont aucun lien avec les comptes extérieurs', 'iscorrect' => false],
                            ['answer' => 'Les déficits courants interdisent toute entrée de capitaux', 'iscorrect' => false],
                            ['answer' => 'Les entrées de capitaux sont toujours des exportations de biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la balance des paiements doit-elle être interprétée avec ses différentes composantes ?',
                        'answers' => [
                            ['answer' => 'Un solde global peut masquer des évolutions très différentes des biens, services, revenus et flux financiers', 'iscorrect' => true],
                            ['answer' => 'Toutes les transactions extérieures ont toujours le même impact', 'iscorrect' => false],
                            ['answer' => 'Le compte courant représente toutes les transactions sans exception', 'iscorrect' => false],
                            ['answer' => 'Les flux financiers n’ont aucun intérêt économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les réserves de change peuvent-elles être importantes pour une banque centrale ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent contribuer à gérer les paiements extérieurs, la liquidité en devises et certaines interventions sur le marché des changes', 'iscorrect' => true],
                            ['answer' => 'Elles servent uniquement à financer les dépenses des ménages', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent tous les risques de change', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel lien simple existe entre épargne, investissement et compte courant dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Le compte courant est lié à la différence entre l’épargne nationale et l’investissement dans l’identité macroéconomique', 'iscorrect' => true],
                            ['answer' => 'Le compte courant est toujours égal à la consommation', 'iscorrect' => false],
                            ['answer' => 'L’investissement n’a aucun lien avec le compte courant', 'iscorrect' => false],
                            ['answer' => 'L’épargne détermine uniquement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays peut-il enregistrer un excédent commercial mais un déficit courant ?',
                        'answers' => [
                            ['answer' => 'Les revenus, services et transferts peuvent plus que compenser le solde des biens', 'iscorrect' => true],
                            ['answer' => 'C’est mathématiquement impossible', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont toujours négatives', 'iscorrect' => false],
                            ['answer' => 'Le compte courant ne comprend que les biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs internationaux suivent-ils la balance des paiements ?',
                        'answers' => [
                            ['answer' => 'Elle fournit des informations sur les flux commerciaux, financiers et les relations économiques extérieures d’un pays', 'iscorrect' => true],
                            ['answer' => 'Elle prédit automatiquement le cours de toutes les actions', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les statistiques macroéconomiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mondialisation et chaînes de valeur',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la mondialisation économique ?',
                        'answers' => [
                            ['answer' => 'L’intensification des échanges, investissements et interdépendances économiques entre pays', 'iscorrect' => true],
                            ['answer' => 'La disparition de toutes les frontières politiques', 'iscorrect' => false],
                            ['answer' => 'L’arrêt du commerce international', 'iscorrect' => false],
                            ['answer' => 'La production de tous les biens dans un seul pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une chaîne de valeur mondiale ?',
                        'answers' => [
                            ['answer' => 'Une organisation de la production où différentes étapes peuvent être réparties entre plusieurs pays', 'iscorrect' => true],
                            ['answer' => 'Une chaîne de magasins appartenant à plusieurs pays', 'iscorrect' => false],
                            ['answer' => 'Un système où chaque pays produit tout seul', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle fragmenter sa production entre plusieurs pays ?',
                        'answers' => [
                            ['answer' => 'Pour profiter de différences de coûts, compétences, technologies ou proximité des marchés', 'iscorrect' => true],
                            ['answer' => 'Parce que chaque étape doit obligatoirement être dans un pays différent', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer automatiquement tous les risques', 'iscorrect' => false],
                            ['answer' => 'Parce que la spécialisation locale est interdite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque la mondialisation des chaînes de valeur peut-elle accroître ?',
                        'answers' => [
                            ['answer' => 'L’exposition aux perturbations internationales de transport, d’approvisionnement ou de demande', 'iscorrect' => true],
                            ['answer' => 'La stabilité absolue des approvisionnements', 'iscorrect' => false],
                            ['answer' => 'L’indépendance totale des économies', 'iscorrect' => false],
                            ['answer' => 'La disparition des risques logistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investissements directs étrangers sont-ils importants dans une économie mondiale ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent apporter du capital, des technologies, des compétences et un accès à de nouveaux marchés', 'iscorrect' => true],
                            ['answer' => 'Ils servent uniquement à financer les ménages', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent toujours la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investissement direct étranger ?',
                        'answers' => [
                            ['answer' => 'Un investissement transfrontalier visant généralement une relation durable et une influence significative sur une entreprise étrangère', 'iscorrect' => true],
                            ['answer' => 'Un achat de biens importés', 'iscorrect' => false],
                            ['answer' => 'Une taxe douanière', 'iscorrect' => false],
                            ['answer' => 'Un simple transfert touristique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les normes internationales peuvent-elles influencer le commerce ?',
                        'answers' => [
                            ['answer' => 'Les différences de normes peuvent faciliter ou augmenter le coût de l’accès aux marchés étrangers', 'iscorrect' => true],
                            ['answer' => 'Les normes n’ont jamais d’effet sur les échanges', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toujours les prix', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent uniquement les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les petites économies peuvent-elles être particulièrement ouvertes au commerce ?',
                        'answers' => [
                            ['answer' => 'Leur marché intérieur étant plus limité, elles peuvent davantage dépendre des marchés extérieurs pour certaines productions', 'iscorrect' => true],
                            ['answer' => 'Elles ne peuvent jamais produire localement', 'iscorrect' => false],
                            ['answer' => 'Elles ont toujours un avantage absolu dans tous les biens', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun marché intérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification des partenaires commerciaux peut-elle réduire certains risques ?',
                        'answers' => [
                            ['answer' => 'Elle peut limiter la dépendance excessive envers un seul marché ou fournisseur', 'iscorrect' => true],
                            ['answer' => 'Elle supprime automatiquement tous les risques mondiaux', 'iscorrect' => false],
                            ['answer' => 'Elle empêche toute spécialisation', 'iscorrect' => false],
                            ['answer' => 'Elle rend les coûts fixes nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un effet potentiel de la mondialisation sur les consommateurs ?',
                        'answers' => [
                            ['answer' => 'Un accès à une gamme plus large de biens et parfois à des prix plus compétitifs', 'iscorrect' => true],
                            ['answer' => 'Une suppression automatique de toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Une interdiction des produits étrangers', 'iscorrect' => false],
                            ['answer' => 'Une diminution obligatoire de la variété des biens', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politiques commerciales et accords internationaux',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un accord commercial ?',
                        'answers' => [
                            ['answer' => 'Un accord entre pays visant à définir ou faciliter certaines règles d’échange', 'iscorrect' => true],
                            ['answer' => 'Une politique monétaire nationale', 'iscorrect' => false],
                            ['answer' => 'Un contrat de travail intérieur', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur la consommation domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général d’une zone de libre-échange ?',
                        'answers' => [
                            ['answer' => 'Réduire ou supprimer certains obstacles aux échanges entre les membres', 'iscorrect' => true],
                            ['answer' => 'Augmenter automatiquement tous les tarifs', 'iscorrect' => false],
                            ['answer' => 'Interdire les importations entre membres', 'iscorrect' => false],
                            ['answer' => 'Fixer une monnaie unique dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une union douanière ?',
                        'answers' => [
                            ['answer' => 'Une zone de libre-échange accompagnée d’un tarif extérieur commun envers les pays tiers', 'iscorrect' => true],
                            ['answer' => 'Une zone sans aucun commerce international', 'iscorrect' => false],
                            ['answer' => 'Une politique de taux de change fixe', 'iscorrect' => false],
                            ['answer' => 'Une union uniquement monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général de l’Organisation mondiale du commerce ?',
                        'answers' => [
                            ['answer' => 'Fournir un cadre international pour certaines règles du commerce entre ses membres', 'iscorrect' => true],
                            ['answer' => 'Fixer tous les prix mondiaux', 'iscorrect' => false],
                            ['answer' => 'Diriger les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Remplacer les gouvernements nationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accords commerciaux peuvent-ils favoriser les échanges ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent réduire certains obstacles tarifaires ou réglementaires et améliorer la prévisibilité', 'iscorrect' => true],
                            ['answer' => 'Ils rendent tous les produits gratuits', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent automatiquement toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent les entreprises d’exporter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certaines industries soutiennent-elles parfois des politiques protectionnistes ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent chercher à réduire la concurrence étrangère ou protéger l’emploi et les revenus du secteur', 'iscorrect' => true],
                            ['answer' => 'Elles souhaitent toujours augmenter les importations', 'iscorrect' => false],
                            ['answer' => 'Elles ne sont jamais affectées par le commerce', 'iscorrect' => false],
                            ['answer' => 'Le protectionnisme réduit toujours leurs profits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les consommateurs peuvent-ils soutenir le libre-échange ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent bénéficier de prix plus bas, d’un choix plus large et de la concurrence internationale', 'iscorrect' => true],
                            ['answer' => 'Le libre-échange interdit les importations', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne sont jamais affectés par les prix', 'iscorrect' => false],
                            ['answer' => 'Il garantit toujours des salaires plus élevés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique commerciale peut-elle créer des gagnants et des perdants ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier les prix, la production, les revenus et l’emploi de manière différente selon les groupes', 'iscorrect' => true],
                            ['answer' => 'Toutes les politiques commerciales affectent chaque groupe de la même façon', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs et producteurs reçoivent toujours les mêmes gains', 'iscorrect' => false],
                            ['answer' => 'Les échanges n’ont aucun effet redistributif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières réglementaires peuvent-elles parfois agir comme des obstacles au commerce ?',
                        'answers' => [
                            ['answer' => 'Des normes différentes peuvent augmenter les coûts nécessaires pour vendre dans un marché étranger', 'iscorrect' => true],
                            ['answer' => 'Les réglementations facilitent toujours les échanges', 'iscorrect' => false],
                            ['answer' => 'Elles ne concernent jamais les entreprises étrangères', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun coût de conformité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accords commerciaux peuvent-ils être politiquement difficiles à négocier ?',
                        'answers' => [
                            ['answer' => 'Les intérêts des secteurs, travailleurs, consommateurs et gouvernements peuvent diverger', 'iscorrect' => true],
                            ['answer' => 'Tous les acteurs ont toujours les mêmes intérêts', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne produit jamais d’effets redistributifs', 'iscorrect' => false],
                            ['answer' => 'Les accords commerciaux n’affectent aucune industrie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie internationale et indicateurs macroéconomiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi le commerce international peut-il influencer le PIB ?',
                        'answers' => [
                            ['answer' => Les exportations et importations font partie de la demande globale et affectent les composantes du PIB', 'iscorrect' => true],
                            ['answer' => 'Le PIB exclut toujours les exportations', 'iscorrect' => false],
                            ['answer' => 'Le commerce concerne uniquement les entreprises étrangères', 'iscorrect' => false],
                            ['answer' => 'Le PIB ne dépend jamais des échanges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l’identité du PIB par les dépenses, que représentent les exportations nettes ?',
                        'answers' => [
                            ['answer' => 'Les exportations moins les importations', 'iscorrect' => true],
                            ['answer' => 'Les importations moins les exportations', 'iscorrect' => false],
                            ['answer' => 'Les exportations plus les impôts', 'iscorrect' => false],
                            ['answer' => 'Les importations plus les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les exportations sont 500 et les importations 400, quelles sont les exportations nettes ?',
                        'answers' => [
                            ['answer' => '100', 'iscorrect' => true],
                            ['answer' => '900', 'iscorrect' => false],
                            ['answer' => '-100', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les importations dépassent les exportations, les exportations nettes sont :',
                        'answers' => [
                            ['answer' => 'Négatives', 'iscorrect' => true],
                            ['answer' => 'Positives', 'iscorrect' => false],
                            ['answer' => 'Toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Toujours égales aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des importations n’implique-t-elle pas nécessairement une baisse du bien-être ?',
                        'answers' => [
                            ['answer' => 'Les importations peuvent fournir des biens, équipements et intrants moins coûteux ou de meilleure qualité', 'iscorrect' => true],
                            ['answer' => 'Les importations sont toujours nuisibles', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont toujours nulles lorsque les importations augmentent', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne bénéficient jamais des importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation peut-elle stimuler les exportations dans certains cas ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les biens domestiques relativement moins chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours les exportations plus chères', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement la production', 'iscorrect' => false],
                            ['answer' => 'Elle interdit les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation peut-elle augmenter le coût des matières premières importées ?',
                        'answers' => [
                            ['answer' => Les importateurs doivent dépenser davantage de monnaie nationale pour acheter la même quantité de devise étrangère', 'iscorrect' => true],
                            ['answer' => 'Les matières premières deviennent toujours gratuites', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’affecte jamais les intrants', 'iscorrect' => false],
                            ['answer' => 'Les fournisseurs étrangers réduisent automatiquement leurs prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une monnaie appréciée peut-elle réduire la compétitivité-prix des exportateurs ?',
                        'answers' => [
                            ['answer' => Les produits domestiques peuvent devenir relativement plus chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours les exportations moins chères', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les importations', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement les coûts de production domestiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les termes de l’échange sont-ils importants pour une économie ouverte ?',
                        'answers' => [
                            ['answer' => Ils comparent le prix des exportations à celui des importations et peuvent influencer le pouvoir d’achat externe', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent automatiquement le PIB réel', 'iscorrect' => false],
                            ['answer' => 'Ils représentent uniquement les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une économie ouverte est-elle exposée aux chocs internationaux ?',
                        'answers' => [
                            ['answer' => Les variations des prix mondiaux, de la demande étrangère et des taux de change peuvent affecter son activité', 'iscorrect' => true],
                            ['answer' => 'Une économie ouverte est totalement isolée', 'iscorrect' => false],
                            ['answer' => 'Les prix mondiaux ne changent jamais', 'iscorrect' => false],
                            ['answer' => 'Les taux de change n’ont aucun effet', 'iscorrect' => false],
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
                    'question' => $questionData['question'],
                ]);

                // Réponses mélangées afin que la bonne réponse ne soit pas toujours en première position.
                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
