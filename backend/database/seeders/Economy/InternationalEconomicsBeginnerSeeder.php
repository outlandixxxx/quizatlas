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
                            'Les échanges de biens, services, capitaux et ressources entre pays',
                            'Uniquement les marchés d’un seul pays',
                            'Uniquement la politique monétaire intérieure',
                            'Uniquement les finances des ménages',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’économie internationale étudie notamment les échanges et les relations économiques entre les pays.',
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils entre eux ?',
                        'choices' => [
                            'Parce qu’ils peuvent avoir des ressources, technologies, coûts et avantages différents',
                            'Parce que tous les pays produisent exactement les mêmes biens',
                            'Parce que le commerce élimine automatiquement tous les coûts',
                            'Parce que les échanges sont toujours obligatoires',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les différences de ressources, technologies et coûts peuvent créer des gains à l’échange.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'choices' => [
                            'Un bien ou service vendu à un acheteur situé à l’étranger',
                            'Un bien acheté à l’étranger',
                            'Un impôt intérieur',
                            'Une dépense publique locale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une exportation correspond à une vente de biens ou services à l’étranger.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'choices' => [
                            'Un bien ou service acheté à un fournisseur situé à l’étranger',
                            'Un produit vendu à l’étranger',
                            'Une taxe sur les exportations',
                            'Une subvention publique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une importation correspond à l’achat d’un bien ou service provenant de l’étranger.',
                    ],
                    [
                        'question' => 'Quel concept explique qu’un pays se spécialise dans les biens pour lesquels son coût d’opportunité est relativement plus faible ?',
                        'choices' => [
                            'L’avantage comparatif',
                            'L’inflation',
                            'La demande agrégée',
                            'Le chômage structurel',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’avantage comparatif repose sur un coût d’opportunité relativement plus faible.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’avantage absolu ?',
                        'choices' => [
                            'La capacité à produire un bien avec moins de ressources ou à un coût inférieur qu’un autre producteur',
                            'La capacité à toujours exporter davantage',
                            'La capacité à avoir une monnaie plus forte',
                            'La capacité à imposer des droits de douane élevés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un avantage absolu signifie qu’un producteur peut produire un bien plus efficacement qu’un autre.',
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif peut-il exister même si un pays a un avantage absolu dans tous les biens ?',
                        'choices' => [
                            'Parce que le coût d’opportunité relatif peut différer entre les pays',
                            'Parce que les coûts n’ont aucune importance',
                            'Parce que les échanges ne dépendent jamais de la productivité',
                            'Parce que les prix sont toujours identiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un pays peut être plus productif dans tous les biens tout en ayant un coût d’opportunité plus faible dans certains biens seulement.',
                    ],
                    [
                        'question' => 'Quel est un effet potentiel de la spécialisation internationale ?',
                        'choices' => [
                            'Une utilisation plus efficace des ressources selon les avantages comparatifs',
                            'Une disparition automatique de toutes les inégalités',
                            'Une suppression de toute concurrence',
                            'Une production mondiale nécessairement plus faible',
                        ],
                        'correct' => 0,
                        'explanation' => 'La spécialisation peut permettre une meilleure utilisation des ressources selon les avantages comparatifs.',
                    ],
                    [
                        'question' => 'Pourquoi le commerce international peut-il accroître la variété des biens disponibles ?',
                        'choices' => [
                            'Les consommateurs peuvent accéder à des produits qui ne sont pas produits localement',
                            'Chaque pays interdit les produits locaux',
                            'Les importations réduisent toujours la diversité',
                            'Le commerce ne concerne que les matières premières',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les importations permettent aux consommateurs d’accéder à des biens produits à l’étranger.',
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transport sont-ils importants pour le commerce international ?',
                        'choices' => [
                            'Ils augmentent le coût total nécessaire pour acheminer les biens entre pays',
                            'Ils n’ont aucun effet sur les prix internationaux',
                            'Ils déterminent automatiquement le taux de change',
                            'Ils remplacent les droits de douane',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les coûts de transport augmentent le coût total des échanges entre les pays.',
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
                            'La quantité d’un autre bien à laquelle il faut renoncer pour produire une unité supplémentaire',
                            'Le prix de vente uniquement',
                            'Le salaire moyen du pays',
                            'La valeur totale des exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le coût d’opportunité mesure ce à quoi l’on renonce lorsqu’on choisit une production plutôt qu’une autre.',
                    ],
                    [
                        'question' => 'Si le pays A renonce à 2 unités de textile pour produire 1 unité de vin et le pays B renonce à 4 unités de textile, lequel a l’avantage comparatif dans le vin ?',
                        'choices' => [
                            'Le pays A',
                            'Le pays B',
                            'Les deux pays',
                            'Aucun des deux',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le pays A a le coût d’opportunité du vin le plus faible.',
                    ],
                    [
                        'question' => 'Si un pays a un coût d’opportunité relativement plus faible pour le bien A, il devrait selon le principe de l’avantage comparatif :',
                        'choices' => [
                            'Se spécialiser relativement davantage dans le bien A',
                            'Éviter complètement le bien A',
                            'Produire uniquement le bien B',
                            'Interdire les importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’avantage comparatif conduit à une spécialisation relativement plus forte dans le bien au coût d’opportunité le plus faible.',
                    ],
                    [
                        'question' => 'Pourquoi la spécialisation complète n’est-elle pas toujours observée dans les économies réelles ?',
                        'choices' => [
                            'Les coûts de transport, politiques publiques, économies d’échelle et différences de qualité peuvent limiter la spécialisation',
                            'Les pays n’ont jamais intérêt à se spécialiser',
                            'Les avantages comparatifs n’existent jamais dans la réalité',
                            'Les consommateurs achètent uniquement des biens locaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les économies réelles sont influencées par plusieurs facteurs qui limitent la spécialisation complète.',
                    ],
                    [
                        'question' => 'Que peut permettre l’échange lorsque les pays se spécialisent selon leur avantage comparatif ?',
                        'choices' => [
                            'Une consommation potentiellement supérieure à ce qui serait possible sans échange dans certains modèles',
                            'Une suppression automatique des coûts de production',
                            'Une baisse nécessaire de la production totale',
                            'Une égalité automatique des revenus',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans certains modèles, la spécialisation et l’échange permettent d’atteindre des niveaux de consommation plus élevés.',
                    ],
                    [
                        'question' => 'Si le coût d’opportunité du blé est plus faible dans le pays X que dans le pays Y, le pays X possède :',
                        'choices' => [
                            'Un avantage comparatif dans le blé',
                            'Un avantage absolu nécessairement dans tous les biens',
                            'Un désavantage comparatif dans le blé',
                            'Aucun avantage économique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un coût d’opportunité plus faible indique un avantage comparatif dans le bien considéré.',
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif repose-t-il sur les coûts relatifs plutôt que seulement absolus ?',
                        'choices' => [
                            'Les échanges concernent les arbitrages entre différentes productions',
                            'Les coûts absolus n’existent pas',
                            'Les prix internationaux sont toujours nuls',
                            'La productivité est sans importance',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’avantage comparatif dépend des arbitrages entre productions, donc des coûts relatifs.',
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si un pays concentre trop sa production dans un seul secteur exportateur ?',
                        'choices' => [
                            'Une forte exposition aux chocs de demande ou de prix sur ce secteur',
                            'Une diversification automatique de l’économie',
                            'Une disparition des risques commerciaux',
                            'Une stabilité absolue des recettes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une forte concentration sectorielle peut rendre un pays vulnérable à des chocs affectant le secteur exportateur.',
                    ],
                    [
                        'question' => 'Quel élément peut modifier l’avantage comparatif au fil du temps ?',
                        'choices' => [
                            'Les changements de technologie, productivité, compétences et coûts',
                            'Uniquement la taille géographique du pays',
                            'Uniquement la population totale',
                            'Aucun facteur économique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les technologies, compétences, productivités et coûts peuvent changer la position relative d’un pays.',
                    ],
                    [
                        'question' => 'Pourquoi l’avantage comparatif ne signifie-t-il pas qu’un pays doit arrêter toute production des autres biens ?',
                        'choices' => [
                            'La diversification peut être utile face aux risques, aux coûts fixes et aux contraintes économiques réelles',
                            'L’avantage comparatif interdit la spécialisation',
                            'Tous les biens ont toujours le même coût',
                            'Les exportations sont impossibles sans produire chaque bien',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans la réalité, la diversification peut réduire les risques et répondre à différentes contraintes économiques.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Offre, demande et équilibre international',
                'description' => 'Quiz débutant sur les prix mondiaux, l’autarcie et l’équilibre commercial.',
                'questions' => [
                    [
                        'question' => 'Que représente le prix mondial d’un bien dans un modèle simple de commerce international ?',
                        'choices' => [
                            'Le prix auquel un pays peut acheter ou vendre le bien sur le marché international dans le cadre du modèle',
                            'Toujours le prix fixé par le gouvernement national',
                            'Le salaire moyen mondial',
                            'Un prix nécessairement nul',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un modèle simple, le prix mondial représente le prix disponible sur le marché international.',
                    ],
                    [
                        'question' => 'Si le prix mondial est inférieur au prix d’autarcie d’un pays, ce pays tend dans un modèle standard à :',
                        'choices' => [
                            'Importer le bien',
                            'Exporter le bien',
                            'Interdire automatiquement le bien',
                            'Produire uniquement pour l’étranger',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un prix mondial inférieur au prix d’autarcie crée une incitation à importer.',
                    ],
                    [
                        'question' => 'Si le prix mondial est supérieur au prix d’autarcie, le pays tend à :',
                        'choices' => [
                            'Exporter le bien',
                            'Importer le bien',
                            'Cesser toute production',
                            'Fixer automatiquement un prix nul',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un prix mondial supérieur au prix domestique favorise les exportations.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix d’autarcie ?',
                        'choices' => [
                            'Le prix d’équilibre domestique lorsque le pays n’échange pas avec l’étranger',
                            'Le prix mondial',
                            'Le prix des exportations uniquement',
                            'Un prix imposé par les partenaires commerciaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le prix d’autarcie est le prix d’équilibre lorsque l’économie ne commerce pas avec l’étranger.',
                    ],
                    [
                        'question' => 'Lorsqu’un pays importe un bien à un prix inférieur au prix domestique d’autarcie, qui peut bénéficier de la baisse du prix ?',
                        'choices' => [
                            'Les consommateurs',
                            'Uniquement les producteurs domestiques',
                            'Uniquement le gouvernement',
                            'Personne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les consommateurs peuvent bénéficier d’un prix plus faible grâce aux importations.',
                    ],
                    [
                        'question' => 'Lorsqu’un pays exporte un bien à un prix supérieur à son prix domestique d’autarcie, qui peut bénéficier de la hausse du prix ?',
                        'choices' => [
                            'Les producteurs domestiques de ce bien',
                            'Uniquement les consommateurs domestiques',
                            'Uniquement les importateurs',
                            'Personne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les producteurs domestiques peuvent bénéficier d’un prix de vente plus élevé.',
                    ],
                    [
                        'question' => 'Pourquoi le commerce peut-il modifier la répartition des gains entre consommateurs et producteurs ?',
                        'choices' => [
                            'L’ouverture commerciale peut modifier les prix domestiques par rapport à la situation d’autarcie',
                            'Les prix domestiques ne changent jamais avec le commerce',
                            'Le commerce modifie uniquement les salaires publics',
                            'Les producteurs et consommateurs sont toujours affectés de la même manière',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le commerce modifie potentiellement les prix domestiques et donc les gains relatifs des différents groupes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une restriction commerciale ?',
                        'choices' => [
                            'Une mesure qui limite ou encadre les échanges internationaux',
                            'Une augmentation automatique de la productivité',
                            'Une baisse des salaires',
                            'Une politique sans effet sur les échanges',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une restriction commerciale limite ou encadre les importations ou exportations.',
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre mondial peut-il influencer les marchés domestiques ?',
                        'choices' => [
                            'Les prix et quantités disponibles dans un pays peuvent être affectés par les possibilités d’échange avec l’étranger',
                            'Les économies nationales sont totalement isolées',
                            'Les marchés domestiques ne dépendent jamais du commerce',
                            'Le commerce international ne concerne que les gouvernements',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les possibilités d’échange international influencent les prix et les quantités disponibles sur les marchés domestiques.',
                    ],
                    [
                        'question' => 'Pourquoi un grand pays peut-il avoir une certaine influence sur le prix mondial ?',
                        'choices' => [
                            'Sa demande ou son offre peut être suffisamment importante pour modifier les conditions mondiales',
                            'Parce que tous les petits pays lui obéissent',
                            'Parce que les prix mondiaux sont toujours administrés',
                            'Parce qu’il ne peut pas commercer avec les autres pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un grand pays peut représenter une part suffisamment importante du marché mondial pour influencer les prix.',
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
                        'question' => 'Qu’est-ce qu’un droit de douane ?',
                        'choices' => [
                            'Une taxe appliquée à une marchandise importée',
                            'Une subvention versée aux consommateurs étrangers',
                            'Une taxe uniquement sur les exportations',
                            'Une obligation de produire localement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un droit de douane est une taxe appliquée à une marchandise importée.',
                    ],
                    [
                        'question' => 'Quel est l’effet direct d’un droit de douane sur un bien importé dans un modèle simple ?',
                        'choices' => [
                            'Il augmente le prix intérieur du bien importé par rapport à la situation sans taxe',
                            'Il réduit toujours le prix intérieur',
                            'Il rend automatiquement les importations gratuites',
                            'Il supprime toute production domestique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un droit de douane augmente le coût des importations et tend à augmenter leur prix intérieur.',
                    ],
                    [
                        'question' => 'Qui perçoit les recettes d’un droit de douane dans un modèle national ?',
                        'choices' => [
                            'Le gouvernement du pays qui impose le droit de douane',
                            'Les producteurs étrangers directement',
                            'Les consommateurs étrangers',
                            'Aucun acteur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les recettes douanières sont perçues par le gouvernement qui impose la taxe.',
                    ],
                    [
                        'question' => 'Quel est généralement l’effet d’un tarif sur les consommateurs du pays importateur ?',
                        'choices' => [
                            'Ils paient généralement un prix plus élevé et consomment moins du bien importé',
                            'Ils paient toujours moins cher',
                            'Ils reçoivent directement les recettes douanières',
                            'Ils ne sont pas affectés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une hausse du prix du bien importé peut réduire la consommation des ménages.',
                    ],
                    [
                        'question' => 'Quel est généralement l’effet d’un tarif sur les producteurs domestiques concurrencés par les importations ?',
                        'choices' => [
                            'Ils peuvent produire davantage grâce au prix intérieur plus élevé',
                            'Ils cessent toujours toute production',
                            'Ils paient automatiquement la taxe',
                            'Ils subissent toujours une baisse des prix',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tarif peut protéger temporairement les producteurs domestiques en augmentant le prix intérieur.',
                    ],
                    [
                        'question' => 'Quel est un coût potentiel d’un droit de douane pour l’économie ?',
                        'choices' => [
                            'Des pertes d’efficacité liées à la réduction de certains échanges mutuellement bénéfiques',
                            'Une hausse automatique de la productivité de tous les secteurs',
                            'Une élimination de toute distorsion',
                            'Une réduction certaine des coûts de production étrangers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tarif peut réduire certains échanges mutuellement bénéfiques et créer des pertes d’efficacité.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un quota d’importation ?',
                        'choices' => [
                            'Une limite quantitative imposée aux importations d’un bien',
                            'Une taxe sur les exportations',
                            'Une subvention à la consommation',
                            'Une interdiction de toute production nationale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un quota limite directement la quantité pouvant être importée.',
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre un tarif et un quota ?',
                        'choices' => [
                            'Le tarif agit directement sur le prix par une taxe, tandis que le quota limite directement la quantité',
                            'Les deux sont toujours exactement identiques',
                            'Le quota est toujours une subvention',
                            'Le tarif ne concerne jamais les importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tarif est une taxe alors qu’un quota impose une limite quantitative.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il utiliser des barrières commerciales ?',
                        'choices' => [
                            'Pour protéger certains secteurs, répondre à des objectifs politiques ou traiter certains problèmes commerciaux selon sa stratégie',
                            'Parce que le commerce international est toujours inefficace',
                            'Pour garantir que les consommateurs paient toujours moins',
                            'Pour éliminer toute concurrence intérieure',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les gouvernements peuvent utiliser des barrières commerciales pour différents objectifs économiques ou politiques.',
                    ],
                    [
                        'question' => 'Pourquoi les droits de douane peuvent-ils entraîner des représailles commerciales ?',
                        'choices' => [
                            'Les partenaires commerciaux peuvent répondre avec leurs propres mesures restrictives',
                            'Les pays étrangers ne réagissent jamais',
                            'Les tarifs empêchent toute négociation',
                            'Les importations augmentent toujours après un tarif',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les partenaires commerciaux peuvent répondre à une restriction par des mesures similaires.',
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
                            'Le prix d’une monnaie exprimé en unités d’une autre monnaie',
                            'Le taux d’intérêt domestique uniquement',
                            'Le prix mondial d’un bien',
                            'Le taux d’inflation annuel',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le taux de change mesure la valeur d’une monnaie en termes d’une autre monnaie.',
                    ],
                    [
                        'question' => 'Si 1 euro vaut 1,10 dollar, combien de dollars faut-il pour acheter 2 euros ?',
                        'choices' => [
                            '2,20 dollars',
                            '1,20 dollar',
                            '2,00 dollars',
                            '1,10 dollar',
                        ],
                        'correct' => 0,
                        'explanation' => 'Deux euros valent 2 × 1,10 = 2,20 dollars.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une appréciation d’une monnaie ?',
                        'choices' => [
                            'Une hausse de sa valeur par rapport à une autre monnaie',
                            'Une baisse certaine de son pouvoir d’achat intérieur',
                            'Une hausse automatique des exportations',
                            'Une baisse obligatoire des taux d’intérêt',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une appréciation correspond à une hausse de la valeur relative d’une monnaie.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépréciation d’une monnaie ?',
                        'choices' => [
                            'Une baisse de sa valeur sur le marché des changes',
                            'Une hausse automatique des salaires',
                            'Une augmentation certaine du PIB réel',
                            'Une baisse du prix des importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépréciation correspond à une baisse de la valeur relative d’une monnaie.',
                    ],
                    [
                        'question' => 'Dans un modèle simple, une monnaie nationale plus faible rend généralement les exportations du pays :',
                        'choices' => [
                            'Relativement moins chères pour les acheteurs étrangers',
                            'Toujours plus chères',
                            'Gratuites',
                            'Sans changement possible',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie plus faible peut rendre les biens domestiques moins chers pour les acheteurs étrangers.',
                    ],
                    [
                        'question' => 'Une monnaie plus faible tend généralement à rendre les importations plus chères pour les résidents, toutes choses égales par ailleurs.',
                        'choices' => [
                            'Vrai',
                            'Faux',
                            'Seulement pour les services domestiques',
                            'Seulement lorsque les exportations sont nulles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie plus faible augmente généralement le coût en monnaie nationale des biens étrangers.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un marché des changes ?',
                        'choices' => [
                            'Le marché sur lequel différentes monnaies sont échangées',
                            'Le marché uniquement des actions',
                            'Le marché des biens agricoles',
                            'Le marché du travail mondial uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le marché des changes permet l’achat et la vente de différentes monnaies.',
                    ],
                    [
                        'question' => 'Pourquoi les entreprises engagées dans le commerce international s’intéressent-elles aux taux de change ?',
                        'choices' => [
                            'Les variations de change peuvent modifier le prix des importations, des exportations et des revenus en monnaie nationale',
                            'Les taux de change n’affectent jamais les entreprises',
                            'Ils déterminent uniquement les salaires domestiques',
                            'Ils remplacent les prix de marché',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les variations de change modifient la valeur en monnaie nationale des transactions internationales.',
                    ],
                    [
                        'question' => 'Quel risque supporte une entreprise qui doit payer un fournisseur étranger dans une monnaie qui peut s’apprécier ?',
                        'choices' => [
                            'Le coût en monnaie nationale peut augmenter',
                            'Le coût devient nécessairement nul',
                            'Le fournisseur étranger paie toujours davantage',
                            'Le risque disparaît automatiquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une appréciation de la devise étrangère peut augmenter le coût de paiement en monnaie nationale.',
                    ],
                    [
                        'question' => 'Pourquoi les mouvements de change peuvent-ils influencer l’inflation intérieure ?',
                        'choices' => [
                            'Ils peuvent modifier le prix en monnaie nationale des biens et intrants importés',
                            'Les monnaies étrangères n’ont aucun rapport avec les prix intérieurs',
                            'Ils affectent uniquement les exportations',
                            'Ils rendent tous les produits domestiques gratuits',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les variations de change peuvent modifier le prix des produits importés et donc certaines pressions inflationnistes.',
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
                            'Un ensemble de comptes enregistrant les transactions économiques entre résidents d’un pays et le reste du monde',
                            'Un compte des seules recettes fiscales',
                            'Un registre des échanges intérieurs uniquement',
                            'Une mesure directe du PIB réel',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balance des paiements enregistre les transactions économiques entre un pays et le reste du monde.',
                    ],
                    [
                        'question' => 'Que comprend principalement le compte courant ?',
                        'choices' => [
                            'Les échanges de biens et services ainsi que certains revenus primaires et transferts courants selon la classification',
                            'Uniquement les achats d’actions',
                            'Uniquement les réserves de change',
                            'Uniquement les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le compte courant regroupe notamment les biens, services, revenus et transferts courants.',
                    ],
                    [
                        'question' => 'Que signifie un déficit commercial ?',
                        'choices' => [
                            'La valeur des importations de biens dépasse celle des exportations de biens sur la période considérée',
                            'Le pays exporte plus de biens qu’il n’en importe',
                            'Le gouvernement a nécessairement un déficit budgétaire',
                            'Le pays n’a aucun échange international',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un déficit commercial signifie que les importations de biens dépassent les exportations de biens.',
                    ],
                    [
                        'question' => 'Une balance courante excédentaire signifie généralement que :',
                        'choices' => [
                            'Le pays reçoit, sur les composantes concernées, plus de ressources du reste du monde qu’il n’en transfère selon la mesure comptable considérée',
                            'Le pays n’a aucune importation',
                            'Le pays a nécessairement une monnaie forte',
                            'Le pays a automatiquement une croissance élevée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un excédent courant correspond à un solde positif du compte courant selon la mesure comptable retenue.',
                    ],
                    [
                        'question' => 'Pourquoi un déficit courant peut-il être associé à des entrées de capitaux ?',
                        'choices' => [
                            'Le financement extérieur peut compenser une demande de ressources supérieure à l’épargne intérieure selon l’identité macroéconomique',
                            'Les capitaux n’ont aucun lien avec les comptes extérieurs',
                            'Les déficits courants interdisent toute entrée de capitaux',
                            'Les entrées de capitaux sont toujours des exportations de biens',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une économie ouverte, des entrées de capitaux peuvent contribuer à financer un déficit courant.',
                    ],
                    [
                        'question' => 'Pourquoi la balance des paiements doit-elle être interprétée avec ses différentes composantes ?',
                        'choices' => [
                            'Un solde global peut masquer des évolutions très différentes des biens, services, revenus et flux financiers',
                            'Toutes les transactions extérieures ont toujours le même impact',
                            'Le compte courant représente toutes les transactions sans exception',
                            'Les flux financiers n’ont aucun intérêt économique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les différentes composantes de la balance des paiements peuvent évoluer dans des directions différentes.',
                    ],
                    [
                        'question' => 'Pourquoi les réserves de change peuvent-elles être importantes pour une banque centrale ?',
                        'choices' => [
                            'Elles peuvent contribuer à gérer les paiements extérieurs, la liquidité en devises et certaines interventions sur le marché des changes',
                            'Elles servent uniquement à financer les dépenses des ménages',
                            'Elles éliminent tous les risques de change',
                            'Elles remplacent les exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les réserves de change fournissent des actifs en devises utilisables dans différentes situations.',
                    ],
                    [
                        'question' => 'Quel lien simple existe entre épargne, investissement et compte courant dans une économie ouverte ?',
                        'choices' => [
                            'Le compte courant est lié à la différence entre l’épargne nationale et l’investissement dans l’identité macroéconomique',
                            'Le compte courant est toujours égal à la consommation',
                            'L’investissement n’a aucun lien avec le compte courant',
                            'L’épargne détermine uniquement le taux de change',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans l’identité macroéconomique, le compte courant est lié à l’écart entre épargne nationale et investissement.',
                    ],
                    [
                        'question' => 'Pourquoi un pays peut-il enregistrer un excédent commercial mais un déficit courant ?',
                        'choices' => [
                            'Les revenus, services et transferts peuvent plus que compenser le solde des biens',
                            'C’est mathématiquement impossible',
                            'Les exportations sont toujours négatives',
                            'Le compte courant ne comprend que les biens',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le compte courant inclut plus que les biens : les services, revenus et transferts peuvent modifier le solde final.',
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs internationaux suivent-ils la balance des paiements ?',
                        'choices' => [
                            'Elle fournit des informations sur les flux commerciaux, financiers et les relations économiques extérieures d’un pays',
                            'Elle prédit automatiquement le cours de toutes les actions',
                            'Elle mesure uniquement le chômage',
                            'Elle remplace toutes les statistiques macroéconomiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balance des paiements fournit des informations sur les échanges et flux financiers internationaux.',
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
                            'L’intensification des échanges, investissements et interdépendances économiques entre pays',
                            'La disparition de toutes les frontières politiques',
                            'L’arrêt du commerce international',
                            'La production de tous les biens dans un seul pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'La mondialisation correspond à une intensification des relations économiques entre les pays.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une chaîne de valeur mondiale ?',
                        'choices' => [
                            'Une organisation de la production où différentes étapes peuvent être réparties entre plusieurs pays',
                            'Une chaîne de magasins appartenant à plusieurs pays',
                            'Un système où chaque pays produit tout seul',
                            'Une taxe sur les importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une chaîne de valeur mondiale répartit différentes étapes de production entre plusieurs pays.',
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle fragmenter sa production entre plusieurs pays ?',
                        'choices' => [
                            'Pour profiter de différences de coûts, compétences, technologies ou proximité des marchés',
                            'Parce que chaque étape doit obligatoirement être dans un pays différent',
                            'Pour éliminer automatiquement tous les risques',
                            'Parce que la spécialisation locale est interdite',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les entreprises peuvent répartir la production pour profiter de différents avantages entre les pays.',
                    ],
                    [
                        'question' => 'Quel risque la mondialisation des chaînes de valeur peut-elle accroître ?',
                        'choices' => [
                            'L’exposition aux perturbations internationales de transport, d’approvisionnement ou de demande',
                            'La stabilité absolue des approvisionnements',
                            'L’indépendance totale des économies',
                            'La disparition des risques logistiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépendance internationale accrue peut exposer les entreprises à des perturbations mondiales.',
                    ],
                    [
                        'question' => 'Pourquoi les investissements directs étrangers sont-ils importants dans une économie mondiale ?',
                        'choices' => [
                            'Ils peuvent apporter du capital, des technologies, des compétences et un accès à de nouveaux marchés',
                            'Ils servent uniquement à financer les ménages',
                            'Ils empêchent toute concurrence',
                            'Ils réduisent toujours la productivité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les investissements directs étrangers peuvent apporter des capitaux, des compétences et des technologies.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investissement direct étranger ?',
                        'choices' => [
                            'Un investissement transfrontalier visant généralement une relation durable et une influence significative sur une entreprise étrangère',
                            'Un achat de biens importés',
                            'Une taxe douanière',
                            'Un simple transfert touristique',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’investissement direct étranger implique généralement une relation durable et une influence significative sur une activité étrangère.',
                    ],
                    [
                        'question' => 'Pourquoi les normes internationales peuvent-elles influencer le commerce ?',
                        'choices' => [
                            'Les différences de normes peuvent faciliter ou augmenter le coût de l’accès aux marchés étrangers',
                            'Les normes n’ont jamais d’effet sur les échanges',
                            'Elles remplacent toujours les prix',
                            'Elles déterminent uniquement les salaires',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des normes différentes peuvent augmenter les coûts de conformité ou faciliter l’accès aux marchés.',
                    ],
                    [
                        'question' => 'Pourquoi les petites économies peuvent-elles être particulièrement ouvertes au commerce ?',
                        'choices' => [
                            'Leur marché intérieur étant plus limité, elles peuvent davantage dépendre des marchés extérieurs pour certaines productions',
                            'Elles ne peuvent jamais produire localement',
                            'Elles ont toujours un avantage absolu dans tous les biens',
                            'Elles n’ont aucun marché intérieur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un marché intérieur plus petit peut encourager une plus grande dépendance aux marchés extérieurs.',
                    ],
                    [
                        'question' => 'Pourquoi la diversification des partenaires commerciaux peut-elle réduire certains risques ?',
                        'choices' => [
                            'Elle peut limiter la dépendance excessive envers un seul marché ou fournisseur',
                            'Elle supprime automatiquement tous les risques mondiaux',
                            'Elle empêche toute spécialisation',
                            'Elle rend les coûts fixes nuls',
                        ],
                        'correct' => 0,
                        'explanation' => 'Diversifier les partenaires réduit la dépendance à un seul marché ou fournisseur.',
                    ],
                    [
                        'question' => 'Quel est un effet potentiel de la mondialisation sur les consommateurs ?',
                        'choices' => [
                            'Un accès à une gamme plus large de biens et parfois à des prix plus compétitifs',
                            'Une suppression automatique de toute concurrence',
                            'Une interdiction des produits étrangers',
                            'Une diminution obligatoire de la variété des biens',
                        ],
                        'correct' => 0,
                        'explanation' => 'La mondialisation peut élargir la variété des produits disponibles et renforcer la concurrence.',
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
                            'Un accord entre pays visant à définir ou faciliter certaines règles d’échange',
                            'Une politique monétaire nationale',
                            'Un contrat de travail intérieur',
                            'Une taxe sur la consommation domestique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un accord commercial établit des règles destinées à organiser ou faciliter les échanges entre les pays participants.',
                    ],
                    [
                        'question' => 'Quel est l’objectif général d’une zone de libre-échange ?',
                        'choices' => [
                            'Réduire ou supprimer certains obstacles aux échanges entre les membres',
                            'Augmenter automatiquement tous les tarifs',
                            'Interdire les importations entre membres',
                            'Fixer une monnaie unique dans tous les cas',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une zone de libre-échange vise à réduire ou supprimer certains obstacles commerciaux entre ses membres.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une union douanière ?',
                        'choices' => [
                            'Une zone de libre-échange accompagnée d’un tarif extérieur commun envers les pays tiers',
                            'Une zone sans aucun commerce international',
                            'Une politique de taux de change fixe',
                            'Une union uniquement monétaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une union douanière combine généralement libre-échange interne et tarif extérieur commun.',
                    ],
                    [
                        'question' => 'Quel est le rôle général de l’Organisation mondiale du commerce ?',
                        'choices' => [
                            'Fournir un cadre international pour certaines règles du commerce entre ses membres',
                            'Fixer tous les prix mondiaux',
                            'Diriger les banques centrales',
                            'Remplacer les gouvernements nationaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’OMC fournit un cadre international pour certaines règles du commerce entre ses membres.',
                    ],
                    [
                        'question' => 'Pourquoi les accords commerciaux peuvent-ils favoriser les échanges ?',
                        'choices' => [
                            'Ils peuvent réduire certains obstacles tarifaires ou réglementaires et améliorer la prévisibilité',
                            'Ils rendent tous les produits gratuits',
                            'Ils éliminent automatiquement toute concurrence',
                            'Ils empêchent les entreprises d’exporter',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réduction des barrières et l’amélioration de la prévisibilité peuvent faciliter les échanges.',
                    ],
                    [
                        'question' => 'Pourquoi certaines industries soutiennent-elles parfois des politiques protectionnistes ?',
                        'choices' => [
                            'Elles peuvent chercher à réduire la concurrence étrangère ou protéger l’emploi et les revenus du secteur',
                            'Elles souhaitent toujours augmenter les importations',
                            'Elles ne sont jamais affectées par le commerce',
                            'Le protectionnisme réduit toujours leurs profits',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certaines industries peuvent rechercher une protection contre la concurrence étrangère.',
                    ],
                    [
                        'question' => 'Pourquoi les consommateurs peuvent-ils soutenir le libre-échange ?',
                        'choices' => [
                            'Ils peuvent bénéficier de prix plus bas, d’un choix plus large et de la concurrence internationale',
                            'Le libre-échange interdit les importations',
                            'Les consommateurs ne sont jamais affectés par les prix',
                            'Il garantit toujours des salaires plus élevés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les consommateurs peuvent bénéficier d’une plus grande variété et de prix potentiellement plus compétitifs.',
                    ],
                    [
                        'question' => 'Pourquoi une politique commerciale peut-elle créer des gagnants et des perdants ?',
                        'choices' => [
                            'Elle peut modifier les prix, la production, les revenus et l’emploi de manière différente selon les groupes',
                            'Toutes les politiques commerciales affectent chaque groupe de la même façon',
                            'Les consommateurs et producteurs reçoivent toujours les mêmes gains',
                            'Les échanges n’ont aucun effet redistributif',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les effets d’une politique commerciale peuvent différer selon les secteurs et les groupes concernés.',
                    ],
                    [
                        'question' => 'Pourquoi les barrières réglementaires peuvent-elles parfois agir comme des obstacles au commerce ?',
                        'choices' => [
                            'Des normes différentes peuvent augmenter les coûts nécessaires pour vendre dans un marché étranger',
                            'Les réglementations facilitent toujours les échanges',
                            'Elles ne concernent jamais les entreprises étrangères',
                            'Elles n’ont aucun coût de conformité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des normes différentes peuvent augmenter les coûts de conformité et compliquer l’accès aux marchés.',
                    ],
                    [
                        'question' => 'Pourquoi les accords commerciaux peuvent-ils être politiquement difficiles à négocier ?',
                        'choices' => [
                            'Les intérêts des secteurs, travailleurs, consommateurs et gouvernements peuvent diverger',
                            'Tous les acteurs ont toujours les mêmes intérêts',
                            'Le commerce ne produit jamais d’effets redistributifs',
                            'Les accords commerciaux n’affectent aucune industrie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Différents groupes peuvent être affectés différemment par un accord commercial.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 9
            // ============================================================
            [
                'title' => 'Économie internationale et indicateurs macroéconomiques',
                'description' => 'Quiz débutant sur le commerce international, le PIB, les taux de change et les indicateurs extérieurs.',
                'questions' => [
                    [
                        'question' => 'Pourquoi le commerce international peut-il influencer le PIB ?',
                        'choices' => [
                            'Les exportations et importations font partie de la demande globale et affectent les composantes du PIB',
                            'Le PIB exclut toujours les exportations',
                            'Le commerce concerne uniquement les entreprises étrangères',
                            'Le PIB ne dépend jamais des échanges',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans l’approche par les dépenses, les exportations nettes constituent une composante du PIB.',
                    ],
                    [
                        'question' => 'Dans l’identité du PIB par les dépenses, que représentent les exportations nettes ?',
                        'choices' => [
                            'Les exportations moins les importations',
                            'Les importations moins les exportations',
                            'Les exportations plus les impôts',
                            'Les importations plus les investissements',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les exportations nettes sont définies par la différence entre exportations et importations.',
                    ],
                    [
                        'question' => 'Si les exportations sont 500 et les importations 400, quelles sont les exportations nettes ?',
                        'choices' => [
                            '100',
                            '900',
                            '-100',
                            '50',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les exportations nettes sont 500 - 400 = 100.',
                    ],
                    [
                        'question' => 'Si les importations dépassent les exportations, les exportations nettes sont :',
                        'choices' => [
                            'Négatives',
                            'Positives',
                            'Toujours nulles',
                            'Toujours égales aux exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsque les importations dépassent les exportations, la différence exportations moins importations est négative.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse des importations n’implique-t-elle pas nécessairement une baisse du bien-être ?',
                        'choices' => [
                            'Les importations peuvent fournir des biens, équipements et intrants moins coûteux ou de meilleure qualité',
                            'Les importations sont toujours nuisibles',
                            'Les exportations sont toujours nulles lorsque les importations augmentent',
                            'Les consommateurs ne bénéficient jamais des importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les importations peuvent offrir des biens et des intrants moins chers ou différents.',
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation peut-elle stimuler les exportations dans certains cas ?',
                        'choices' => [
                            'Elle peut rendre les biens domestiques relativement moins chers pour les acheteurs étrangers',
                            'Elle rend toujours les exportations plus chères',
                            'Elle réduit automatiquement la production',
                            'Elle interdit les importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépréciation peut rendre les biens nationaux moins chers pour les acheteurs étrangers.',
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation peut-elle augmenter le coût des matières premières importées ?',
                        'choices' => [
                            'Les importateurs doivent dépenser davantage de monnaie nationale pour acheter la même quantité de devise étrangère',
                            'Les matières premières deviennent toujours gratuites',
                            'Le taux de change n’affecte jamais les intrants',
                            'Les fournisseurs étrangers réduisent automatiquement leurs prix',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie nationale plus faible rend généralement les biens étrangers plus coûteux en monnaie nationale.',
                    ],
                    [
                        'question' => 'Pourquoi une monnaie appréciée peut-elle réduire la compétitivité-prix des exportateurs ?',
                        'choices' => [
                            'Les produits domestiques peuvent devenir relativement plus chers pour les acheteurs étrangers',
                            'Elle rend toujours les exportations moins chères',
                            'Elle élimine les importations',
                            'Elle réduit automatiquement les coûts de production domestiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie plus forte peut rendre les produits nationaux relativement plus chers à l’étranger.',
                    ],
                    [
                        'question' => 'Pourquoi les termes de l’échange sont-ils importants pour une économie ouverte ?',
                        'choices' => [
                            'Ils comparent le prix des exportations à celui des importations et peuvent influencer le pouvoir d’achat externe',
                            'Ils mesurent uniquement le chômage',
                            'Ils déterminent automatiquement le PIB réel',
                            'Ils représentent uniquement les salaires',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les termes de l’échange comparent les prix des exportations et des importations.',
                    ],
                    [
                        'question' => 'Pourquoi une économie ouverte est-elle exposée aux chocs internationaux ?',
                        'choices' => [
                            'Les variations des prix mondiaux, de la demande étrangère et des taux de change peuvent affecter son activité',
                            'Une économie ouverte est totalement isolée',
                            'Les prix mondiaux ne changent jamais',
                            'Les taux de change n’ont aucun effet',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une économie ouverte dépend partiellement des conditions économiques extérieures.',
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