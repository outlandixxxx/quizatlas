```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MacroeconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'macroeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité nationale avancée',
                'questions' => [
                    [
                        'question' => 'Pourquoi le PIB réel est-il préférable au PIB nominal pour mesurer la croissance de la production ?',
                        'answers' => [
                            ['answer' => 'Parce qu’il cherche à isoler les variations des quantités produites des variations de prix', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il exclut toujours les services', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il mesure uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il élimine toutes les erreurs statistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre PIB et revenu national brut ?',
                        'answers' => [
                            ['answer' => 'Le PIB est fondé sur la production située sur le territoire, tandis que le revenu national brut tient compte des revenus primaires reçus et versés avec le reste du monde', 'iscorrect' => true],
                            ['answer' => 'Le PIB exclut toujours les revenus du travail', 'iscorrect' => false],
                            ['answer' => 'Le revenu national brut mesure uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de la production domestique réalisée par une filiale étrangère augmente-t-elle généralement le PIB du pays hôte ?',
                        'answers' => [
                            ['answer' => 'La production est réalisée à l’intérieur du territoire économique considéré', 'iscorrect' => true],
                            ['answer' => 'Le capital étranger est automatiquement considéré comme capital national', 'iscorrect' => false],
                            ['answer' => 'Les profits sont nécessairement conservés localement', 'iscorrect' => false],
                            ['answer' => 'Les exportations augmentent obligatoirement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur ajoutée est-elle utilisée dans l’approche par la production ?',
                        'answers' => [
                            ['answer' => 'Elle évite de compter plusieurs fois la valeur des biens intermédiaires utilisés au cours de la production', 'iscorrect' => true],
                            ['answer' => 'Elle exclut toute rémunération du travail', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les entreprises publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du PIB peut-elle coexister avec une baisse du bien-être de certains ménages ?',
                        'answers' => [
                            ['answer' => 'Le PIB est un agrégat de production qui ne décrit pas parfaitement la distribution des revenus ni toutes les dimensions du bien-être', 'iscorrect' => true],
                            ['answer' => 'Le PIB mesure directement le bonheur', 'iscorrect' => false],
                            ['answer' => 'Le PIB est toujours égal au revenu de chaque ménage', 'iscorrect' => false],
                            ['answer' => 'Le PIB exclut toujours toute activité économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un déflateur du PIB supérieur à celui d’une période de référence indique généralement ?',
                        'answers' => [
                            ['answer' => 'Le niveau général des prix des biens et services produits domestiquement est plus élevé relativement à cette période de référence', 'iscorrect' => true],
                            ['answer' => 'Le chômage est nécessairement plus élevé', 'iscorrect' => false],
                            ['answer' => 'Les importations sont nécessairement plus élevées', 'iscorrect' => false],
                            ['answer' => 'La production réelle est nécessairement plus faible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB par habitant ne suffit-il pas pour comparer complètement les niveaux de vie entre pays ?',
                        'answers' => [
                            ['answer' => 'Les différences de prix, de distribution des revenus, de services non marchands et de qualité de vie restent importantes', 'iscorrect' => true],
                            ['answer' => 'Le PIB par habitant ne mesure aucune production', 'iscorrect' => false],
                            ['answer' => 'Il est toujours identique au salaire médian', 'iscorrect' => false],
                            ['answer' => 'Il exclut nécessairement les services publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les révisions statistiques du PIB peuvent-elles modifier l’analyse économique d’une période passée ?',
                        'answers' => [
                            ['answer' => 'De nouvelles données, méthodes ou informations peuvent conduire à réviser les estimations précédentes', 'iscorrect' => true],
                            ['answer' => 'Le PIB réel est parfaitement connu dès la première estimation', 'iscorrect' => false],
                            ['answer' => 'Les statistiques macroéconomiques ne sont jamais révisées', 'iscorrect' => false],
                            ['answer' => 'Les révisions concernent uniquement les taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les activités non marchandes peuvent-elles être imparfaitement reflétées dans le PIB ?',
                        'answers' => [
                            ['answer' => Leur valeur n’est pas toujours déterminée par un prix de marché observable', 'iscorrect' => true],
                            ['answer' => Elles sont toujours interdites', 'iscorrect' => false],
                            ['answer' => Elles n’ont jamais de valeur sociale', 'iscorrect' => false],
                            ['answer' => Elles sont toujours entièrement exportées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la production destinée à augmenter les stocks est-elle comptabilisée comme investissement ?',
                        'answers' => [
                            ['answer' => La production non vendue représente une accumulation de stocks qui appartient à l’entreprise et correspond à une utilisation de ressources', 'iscorrect' => true],
                            ['answer' => Les stocks sont considérés comme des importations', 'iscorrect' => false],
                            ['answer' => Les stocks ne sont pas une forme de capital', 'iscorrect' => false],
                            ['answer' => Le stock augmente nécessairement la consommation courante', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Demande globale et multiplicateur',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse de la consommation autonome peut-elle entraîner une augmentation supérieure du PIB dans un modèle keynésien simple ?',
                        'answers' => [
                            ['answer' => 'La dépense initiale génère du revenu, dont une partie est ensuite dépensée à nouveau', 'iscorrect' => true],
                            ['answer' => 'La consommation autonome réduit toujours l’épargne à zéro', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'L’investissement diminue automatiquement la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur est-il inférieur dans une économie ouverte à celui d’un modèle fermé très simple ?',
                        'answers' => [
                            ['answer' => Une partie des dépenses supplémentaires se porte sur des biens importés', 'iscorrect' => true],
                            ['answer' => 'Les exportations sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'L’épargne disparaît', 'iscorrect' => false],
                            ['answer' => 'La consommation devient indépendante du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue la propension marginale à consommer dans la taille du multiplicateur ?',
                        'answers' => [
                            ['answer' => 'Une propension marginale à consommer plus élevée implique généralement un multiplicateur plus important dans le modèle simple', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le multiplicateur', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur le multiplicateur', 'iscorrect' => false],
                            ['answer' => 'Elle détermine uniquement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des impôts peut-elle avoir un effet contractif sur la demande globale ?',
                        'answers' => [
                            ['answer' => Elle peut réduire le revenu disponible et donc la consommation des ménages', 'iscorrect' => true],
                            ['answer' => Elle augmente toujours la consommation', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement les exportations', 'iscorrect' => false],
                            ['answer' => Elle supprime nécessairement l’investissement public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investissements ont-ils souvent une composante plus volatile que la consommation ?',
                        'answers' => [
                            ['answer' => Ils dépendent fortement des anticipations de demande, du coût du financement et de la confiance des entreprises', 'iscorrect' => true],
                            ['answer' => Ils ne dépendent jamais des conditions financières', 'iscorrect' => false],
                            ['answer' => Ils sont toujours fixés par le gouvernement', 'iscorrect' => false],
                            ['answer' => Ils sont indépendants des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de l’épargne peut-elle réduire la demande globale à court terme dans certaines circonstances ?',
                        'answers' => [
                            ['answer' => Si les ménages réduisent leur consommation sans hausse correspondante de l’investissement, la demande peut diminuer', 'iscorrect' => true],
                            ['answer' => L’épargne augmente toujours directement la consommation', 'iscorrect' => false],
                            ['answer' => L’épargne supprime automatiquement les importations', 'iscorrect' => false],
                            ['answer' => L’épargne augmente toujours les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le paradoxe de l’épargne dans un modèle keynésien simple ?',
                        'answers' => [
                            ['answer' => Une volonté collective d’épargner davantage peut réduire le revenu global au point de limiter l’augmentation effective de l’épargne', 'iscorrect' => true],
                            ['answer' => Une hausse de l’épargne augmente toujours le PIB à court terme', 'iscorrect' => false],
                            ['answer' => L’épargne n’a aucun rapport avec le revenu', 'iscorrect' => false],
                            ['answer' => Le paradoxe existe uniquement en économie ouverte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des exportations peut-elle avoir un effet multiplicateur sur le revenu national ?',
                        'answers' => [
                            ['answer' => Les recettes d’exportation deviennent des revenus qui peuvent générer de nouvelles dépenses domestiques', 'iscorrect' => true],
                            ['answer' => Les exportations réduisent toujours les revenus intérieurs', 'iscorrect' => false],
                            ['answer' => Elles ne créent aucun revenu pour les producteurs', 'iscorrect' => false],
                            ['answer' => Elles réduisent automatiquement la consommation domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse de la confiance des entreprises peut-elle provoquer un ralentissement plus large que sa variation initiale ?',
                        'answers' => [
                            ['answer' => La baisse de l’investissement peut réduire le revenu, puis la consommation et d’autres composantes de la demande', 'iscorrect' => true],
                            ['answer' => L’investissement n’a aucun effet sur le revenu', 'iscorrect' => false],
                            ['answer' => Les ménages augmentent toujours immédiatement leur consommation', 'iscorrect' => false],
                            ['answer' => Les exportations augmentent automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur théorique doit-il être interprété avec prudence dans l’économie réelle ?',
                        'answers' => [
                            ['answer' => Les ménages, entreprises, marchés financiers, importations, prix et anticipations peuvent réagir différemment de l’hypothèse simple', 'iscorrect' => true],
                            ['answer' => Les agents suivent toujours exactement le modèle théorique', 'iscorrect' => false],
                            ['answer' => Les prix sont toujours fixes', 'iscorrect' => false],
                            ['answer' => Les importations sont toujours nulles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail et chômage structurel',
                'questions' => [
                    [
                        'question' => 'Pourquoi le chômage structurel peut-il persister même lorsque la demande globale est forte ?',
                        'answers' => [
                            ['answer' => Des inadéquations entre les compétences, les localisations et les emplois peuvent subsister', 'iscorrect' => true],
                            ['answer' => Une forte demande élimine toujours toutes les inadéquations', 'iscorrect' => false],
                            ['answer' => Le chômage structurel dépend uniquement de l’inflation', 'iscorrect' => false],
                            ['answer' => Il n’a aucun lien avec le marché du travail', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de participation est-il important pour interpréter le taux de chômage ?',
                        'answers' => [
                            ['answer' => Une baisse du taux de chômage peut provenir en partie d’une sortie de la population active plutôt que d’une hausse de l’emploi', 'iscorrect' => true],
                            ['answer' => Le taux de participation mesure directement le PIB', 'iscorrect' => false],
                            ['answer' => Il est toujours constant', 'iscorrect' => false],
                            ['answer' => Il ne concerne que les retraités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une amélioration de la recherche d’emploi peut-elle influencer le chômage frictionnel ?',
                        'answers' => [
                            ['answer' => Une meilleure information sur les offres et les compétences disponibles peut réduire la durée des périodes de transition', 'iscorrect' => true],
                            ['answer' => Elle augmente toujours la durée du chômage', 'iscorrect' => false],
                            ['answer' => Elle supprime automatiquement le chômage structurel', 'iscorrect' => false],
                            ['answer' => Elle n’a aucun effet sur les appariements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la productivité influence-t-elle les salaires réels à long terme ?',
                        'answers' => [
                            ['answer' => Une productivité plus élevée augmente la valeur potentielle produite par unité de travail', 'iscorrect' => true],
                            ['answer' => Les salaires réels sont complètement indépendants de la production', 'iscorrect' => false],
                            ['answer' => Une productivité plus élevée réduit toujours la valeur du travail', 'iscorrect' => false],
                            ['answer' => Elle influence uniquement les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage naturel dans l’analyse macroéconomique standard ?',
                        'answers' => [
                            ['answer' => Un niveau de chômage associé principalement aux frictions et aux caractéristiques structurelles du marché du travail', 'iscorrect' => true],
                            ['answer' => Le chômage uniquement observé pendant les récessions', 'iscorrect' => false],
                            ['answer' => Un chômage nécessairement égal à zéro', 'iscorrect' => false],
                            ['answer' => Le chômage causé uniquement par l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de formation peuvent-elles réduire le chômage structurel sans nécessairement réduire rapidement le chômage cyclique ?',
                        'answers' => [
                            ['answer' => Elles agissent sur l’adéquation des compétences plutôt que directement sur l’insuffisance temporaire de la demande', 'iscorrect' => true],
                            ['answer' => Elles augmentent toujours la demande globale', 'iscorrect' => false],
                            ['answer' => Elles ne concernent que les marchés financiers', 'iscorrect' => false],
                            ['answer' => Elles réduisent automatiquement les taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de soutien à la demande peut-elle être limitée face au chômage structurel ?',
                        'answers' => [
                            ['answer' => Une demande excessive peut surtout générer de l’inflation sans résoudre les inadéquations de compétences', 'iscorrect' => true],
                            ['answer' => Le chômage structurel disparaît toujours quand les dépenses publiques augmentent', 'iscorrect' => false],
                            ['answer' => Les compétences ne jouent aucun rôle dans l’emploi', 'iscorrect' => false],
                            ['answer' => La demande globale ne concerne pas les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la négociation salariale peut-elle être influencée par les anticipations d’inflation ?',
                        'answers' => [
                            ['answer' => Les travailleurs et employeurs peuvent chercher à préserver le salaire réel ou les marges en anticipant les variations futures des prix', 'iscorrect' => true],
                            ['answer' => Les salaires sont toujours indépendants des prix', 'iscorrect' => false],
                            ['answer' => Les contrats salariaux ne tiennent jamais compte du futur', 'iscorrect' => false],
                            ['answer' => L’inflation anticipée réduit toujours les salaires nominaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une courbe de Beveridge ?',
                        'answers' => [
                            ['answer' => Une relation entre le taux de chômage et le taux de postes vacants sur le marché du travail', 'iscorrect' => true],
                            ['answer' => Une relation entre inflation et croissance', 'iscorrect' => false],
                            ['answer' => Une relation entre exportations et importations', 'iscorrect' => false],
                            ['answer' => Une relation entre dette et déficit publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déplacement défavorable de la courbe de Beveridge peut-il signaler une détérioration de l’appariement ?',
                        'answers' => [
                            ['answer' => Pour un même niveau de chômage, davantage de postes vacants peuvent être nécessaires pour obtenir le même volume d’embauches', 'iscorrect' => true],
                            ['answer' => Il signifie toujours que la demande globale augmente', 'iscorrect' => false],
                            ['answer' => Il indique nécessairement une baisse de l’inflation', 'iscorrect' => false],
                            ['answer' => Il prouve que les salaires sont parfaitement flexibles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation, anticipations et politique monétaire',
                'questions' => [
                    [
                        'question' => 'Pourquoi les anticipations d’inflation sont-elles importantes pour la banque centrale ?',
                        'answers' => [
                            ['answer' => Elles influencent les comportements de fixation des salaires, des prix, de consommation et d’investissement', 'iscorrect' => true],
                            ['answer' => Elles n’ont aucun effet économique', 'iscorrect' => false],
                            ['answer' => Elles déterminent directement le PIB réel', 'iscorrect' => false],
                            ['answer' => Elles remplacent les taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale crédible peut-elle stabiliser plus facilement l’inflation ?',
                        'answers' => [
                            ['answer' => Les agents sont davantage susceptibles d’intégrer un objectif de stabilité des prix dans leurs décisions', 'iscorrect' => true],
                            ['answer' => La crédibilité augmente directement la productivité', 'iscorrect' => false],
                            ['answer' => Elle supprime tous les chocs d’offre', 'iscorrect' => false],
                            ['answer' => Elle rend les prix administrés fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un choc d’offre négatif ?',
                        'answers' => [
                            ['answer' => Un événement qui augmente les coûts de production ou réduit la capacité productive', 'iscorrect' => true],
                            ['answer' => Une hausse autonome de la consommation', 'iscorrect' => false],
                            ['answer' => Une hausse automatique des dépenses publiques', 'iscorrect' => false],
                            ['answer' => Une baisse du taux d’intérêt directeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc pétrolier peut-il être inflationniste ?',
                        'answers' => [
                            ['answer' => Le pétrole étant un intrant important, son renchérissement peut augmenter les coûts de production et certains prix finaux', 'iscorrect' => true],
                            ['answer' => Il réduit toujours les coûts des entreprises', 'iscorrect' => false],
                            ['answer' => Il augmente automatiquement la productivité', 'iscorrect' => false],
                            ['answer' => Il n’affecte que les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un resserrement monétaire peut-il réduire l’inflation avec un délai ?',
                        'answers' => [
                            ['answer' => Les taux influencent progressivement les crédits, les dépenses, l’activité et finalement les pressions sur les prix', 'iscorrect' => true],
                            ['answer' => Les prix réagissent toujours instantanément', 'iscorrect' => false],
                            ['answer' => Les banques ne modifient jamais leurs conditions de crédit', 'iscorrect' => false],
                            ['answer' => La demande devient automatiquement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux directeurs peut-elle réduire l’investissement ?',
                        'answers' => [
                            ['answer' => Elle peut augmenter le coût du financement et rendre certains projets moins rentables', 'iscorrect' => true],
                            ['answer' => Elle réduit toujours le coût du capital', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement la demande anticipée', 'iscorrect' => false],
                            ['answer' => Elle garantit un rendement plus élevé à tous les projets', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle ralentir la consommation ?',
                        'answers' => [
                            ['answer' => Le crédit peut devenir plus coûteux et l’épargne peut devenir plus attractive', 'iscorrect' => true],
                            ['answer' => La consommation devient toujours moins chère', 'iscorrect' => false],
                            ['answer' => Les revenus augmentent automatiquement', 'iscorrect' => false],
                            ['answer' => Les ménages cessent toujours d’épargner', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la transmission monétaire par le taux de change ?',
                        'answers' => [
                            ['answer' => Les variations de taux peuvent influencer la valeur de la monnaie, les importations, les exportations et certains prix intérieurs', 'iscorrect' => true],
                            ['answer' => Elle ne concerne que les salaires publics', 'iscorrect' => false],
                            ['answer' => Elle ne modifie jamais les prix importés', 'iscorrect' => false],
                            ['answer' => Elle remplace automatiquement la politique budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une cible d’inflation peut-elle servir d’ancrage nominal ?',
                        'answers' => [
                            ['answer' => Elle fournit une référence qui aide les agents à former leurs anticipations sur l’évolution future des prix', 'iscorrect' => true],
                            ['answer' => Elle garantit exactement l’inflation future', 'iscorrect' => false],
                            ['answer' => Elle fixe directement tous les salaires', 'iscorrect' => false],
                            ['answer' => Elle empêche tous les chocs extérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle rencontrer un dilemme entre inflation et activité après un choc d’offre ?',
                        'answers' => [
                            ['answer' => Un resserrement destiné à freiner l’inflation peut également accentuer le ralentissement de la production à court terme', 'iscorrect' => true],
                            ['answer' => Les chocs d’offre ne modifient jamais les prix', 'iscorrect' => false],
                            ['answer' => Un resserrement augmente toujours l’emploi', 'iscorrect' => false],
                            ['answer' => L’activité et l’inflation évoluent toujours dans la même direction', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Croissance, productivité et institutions',
                'questions' => [
                    [
                        'question' => 'Pourquoi les gains de productivité sont-ils fondamentaux pour le niveau de vie à long terme ?',
                        'answers' => [
                            ['answer' => Ils permettent d’obtenir davantage de production par unité de facteur utilisée', 'iscorrect' => true],
                            ['answer' => Ils augmentent uniquement les prix', 'iscorrect' => false],
                            ['answer' => Ils réduisent nécessairement les salaires réels', 'iscorrect' => false],
                            ['answer' => Ils ne concernent que les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rendements décroissants du capital sont-ils importants dans les modèles de croissance ?',
                        'answers' => [
                            ['answer' => Ils impliquent que l’accumulation de capital seule ne peut généralement pas soutenir indéfiniment les mêmes gains de production', 'iscorrect' => true],
                            ['answer' => 'Ils impliquent que le capital n’a aucun effet sur la production', 'iscorrect' => false],
                            ['answer' => 'Ils rendent toute croissance impossible', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une hausse permanente de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le progrès technologique est-il essentiel dans les modèles modernes de croissance ?',
                        'answers' => [
                            ['answer' => 'Il peut déplacer durablement la frontière productive et soutenir la productivité', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il rend le capital inutile', 'iscorrect' => false],
                            ['answer' => 'Il supprime toutes les contraintes de ressources', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques influencent-elles la croissance ?',
                        'answers' => [
                            ['answer' => 'Elles façonnent les incitations à investir, innover, entreprendre et respecter les contrats', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent les facteurs de production', 'iscorrect' => false],
                            ['answer' => 'Elles contrôlent directement chaque prix', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent automatiquement toutes les crises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les droits de propriété peuvent-ils soutenir l’investissement ?',
                        'answers' => [
                            ['answer' => 'Ils augmentent la sécurité attendue du rendement des investissements', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent tous les profits', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment les coûts de financement', 'iscorrect' => false],
                            ['answer' => 'Ils interdisent toute concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’éducation est-elle considérée comme un investissement en capital humain ?',
                        'answers' => [
                            ['answer' => 'Elle implique des coûts présents pour obtenir des compétences susceptibles d’augmenter la productivité et les revenus futurs', 'iscorrect' => true],
                            ['answer' => 'Elle n’a jamais de coût d’opportunité', 'iscorrect' => false],
                            ['answer' => 'Elle garantit un emploi à vie', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la santé peut-elle influencer la croissance ?',
                        'answers' => [
                            ['answer' => Une meilleure santé peut améliorer la productivité, la participation au travail et l’accumulation de capital humain', 'iscorrect' => true],
                            ['answer' => 'La santé n’a aucun effet sur l’économie', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours l’offre de travail', 'iscorrect' => false],
                            ['answer' => 'Elle remplace le capital physique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures peuvent-elles générer des gains de productivité ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire les coûts de transport, de communication, d’énergie et de coordination', 'iscorrect' => true],
                            ['answer' => 'Elles augmentent toujours les coûts privés', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent l’innovation', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment les échanges internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance élevée du PIB ne garantit-elle pas une amélioration équivalente du bien-être ?',
                        'answers' => [
                            ['answer' => Le PIB ne mesure pas toutes les dimensions sociales, environnementales et distributives du bien-être', 'iscorrect' => true],
                            ['answer' => Le PIB mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => Le PIB ne contient aucune information sur la production', 'iscorrect' => false],
                            ['answer' => Le PIB représente toujours parfaitement la qualité de vie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation du capital physique peut-elle avoir des effets décroissants sur la production ?',
                        'answers' => [
                            ['answer' => Lorsque les autres facteurs restent limités, les unités supplémentaires de capital peuvent apporter des gains marginaux progressivement plus faibles', 'iscorrect' => true],
                            ['answer' => 'Le capital réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'La technologie devient automatiquement moins efficace', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs disparaissent nécessairement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie ouverte et taux de change',
                'questions' => [
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle stimuler les exportations ?',
                        'answers' => [
                            ['answer' => 'Les biens domestiques deviennent potentiellement moins chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Les exportations deviennent automatiquement plus coûteuses', 'iscorrect' => false],
                            ['answer' => 'Les entreprises réduisent toujours leur production', 'iscorrect' => false],
                            ['answer' => 'La demande étrangère devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’effet d’une dépréciation sur la balance commerciale dépend-il des élasticités ?',
                        'answers' => [
                            ['answer' => Les volumes d’exportations et d’importations ne réagissent pas tous de la même manière aux variations des prix relatifs', 'iscorrect' => true],
                            ['answer' => Les volumes échangés ne dépendent jamais des prix', 'iscorrect' => false],
                            ['answer' => Les élasticités sont toujours nulles', 'iscorrect' => false],
                            ['answer' => Les importations sont indépendantes du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la courbe en J ?',
                        'answers' => [
                            ['answer' => La possibilité qu’une dépréciation détériore d’abord la balance commerciale avant de l’améliorer progressivement', 'iscorrect' => true],
                            ['answer' => Une relation entre chômage et salaires', 'iscorrect' => false],
                            ['answer' => Une relation entre inflation et productivité', 'iscorrect' => false],
                            ['answer' => Une relation entre dette et PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation peut-elle augmenter l’inflation intérieure ?',
                        'answers' => [
                            ['answer' => Elle renchérit certains biens et intrants importés exprimés en monnaie nationale', 'iscorrect' => true],
                            ['answer' => Elle réduit toujours le prix des importations', 'iscorrect' => false],
                            ['answer' => Elle supprime les importations', 'iscorrect' => false],
                            ['answer' => Elle augmente nécessairement la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chaînes de valeur mondiales peuvent-elles amplifier un choc d’offre extérieur ?',
                        'answers' => [
                            ['answer' => Une rupture d’approvisionnement dans un pays peut affecter plusieurs étapes de production dans d’autres pays', 'iscorrect' => true],
                            ['answer' => Elles rendent les économies parfaitement indépendantes', 'iscorrect' => false],
                            ['answer' => Les importations deviennent inutiles', 'iscorrect' => false],
                            ['answer' => Les chocs extérieurs ne peuvent jamais se transmettre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit courant peut-il être soutenable dans certaines circonstances ?',
                        'answers' => [
                            ['answer' => Il peut financer des investissements productifs si les entrées de capitaux restent suffisamment stables et que les rendements futurs permettent de servir les engagements', 'iscorrect' => true],
                            ['answer' => Tout déficit courant est nécessairement soutenable', 'iscorrect' => false],
                            ['answer' => Les flux de capitaux n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => La dette extérieure ne produit jamais de contrainte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un arrêt brutal des entrées de capitaux peut-il créer une crise extérieure ?',
                        'answers' => [
                            ['answer' => Le financement externe devient soudainement insuffisant, ce qui peut provoquer une forte dépréciation et une contraction de la demande', 'iscorrect' => true],
                            ['answer' => Il augmente toujours les réserves de change', 'iscorrect' => false],
                            ['answer' => Il réduit automatiquement les coûts de financement', 'iscorrect' => false],
                            ['answer' => Il stimule nécessairement l’investissement domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette extérieure libellée en devise étrangère est-elle risquée après une dépréciation ?',
                        'answers' => [
                            ['answer' => Le service de cette dette coûte davantage en monnaie domestique', 'iscorrect' => true],
                            ['answer' => La dette devient automatiquement moins importante', 'iscorrect' => false],
                            ['answer' => Le taux de change n’a aucun effet sur la dette', 'iscorrect' => false],
                            ['answer' => Les exportations deviennent toujours nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la compétitivité-prix est-elle importante pour les exportations ?',
                        'answers' => [
                            ['answer' => Des prix relatifs plus favorables peuvent augmenter la demande étrangère lorsque les acheteurs réagissent aux prix', 'iscorrect' => true],
                            ['answer' => Les prix n’ont aucun effet sur les échanges', 'iscorrect' => false],
                            ['answer' => Les exportations dépendent uniquement du PIB domestique', 'iscorrect' => false],
                            ['answer' => La compétitivité concerne uniquement les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des droits de douane peut-elle avoir des effets macroéconomiques contradictoires ?',
                        'answers' => [
                            ['answer' => Elle peut protéger certains secteurs tout en augmentant les coûts des intrants et en réduisant certaines importations et exportations futures', 'iscorrect' => true],
                            ['answer' => Elle améliore toujours tous les indicateurs macroéconomiques', 'iscorrect' => false],
                            ['answer' => Elle réduit toujours les prix domestiques', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement la productivité globale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dette publique et soutenabilité budgétaire',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre déficit public et dette publique ?',
                        'answers' => [
                            ['answer' => 'Le déficit est un flux mesuré sur une période, tandis que la dette représente un stock accumulé', 'iscorrect' => true],
                            ['answer' => 'La dette est un flux et le déficit un stock', 'iscorrect' => false],
                            ['answer' => 'Les deux termes désignent exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'Le déficit ne concerne jamais les finances publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ratio dette publique/PIB est-il souvent utilisé ?',
                        'answers' => [
                            ['answer' => 'Il rapporte le stock de dette à une mesure de la capacité de production et de revenu de l’économie', 'iscorrect' => true],
                            ['answer' => 'Il mesure directement le patrimoine des ménages', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Il détermine automatiquement le taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance économique peut-elle contribuer à stabiliser le ratio dette/PIB ?',
                        'answers' => [
                            ['answer' => Le dénominateur du ratio augmente, ce qui peut réduire mécaniquement le ratio si la dette ne progresse pas aussi vite', 'iscorrect' => true],
                            ['answer' => La croissance réduit toujours la dette nominale', 'iscorrect' => false],
                            ['answer' => La dette devient automatiquement nulle', 'iscorrect' => false],
                            ['answer' => La croissance supprime les intérêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt payé sur la dette est-il important pour sa dynamique ?',
                        'answers' => [
                            ['answer' => Un coût d’emprunt élevé augmente plus rapidement la charge d’intérêts et peut accroître les besoins de financement', 'iscorrect' => true],
                            ['answer' => Un taux élevé réduit toujours les intérêts', 'iscorrect' => false],
                            ['answer' => Le taux d’intérêt n’a aucun lien avec la dette', 'iscorrect' => false],
                            ['answer' => Les intérêts sont indépendants du stock de dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance nominale peut-elle influencer la dynamique du ratio dette/PIB ?',
                        'answers' => [
                            ['answer' => Le PIB nominal augmente avec les prix et la production, ce qui affecte le dénominateur du ratio', 'iscorrect' => true],
                            ['answer' => Le PIB nominal ne change jamais avec les prix', 'iscorrect' => false],
                            ['answer' => La dette n’est jamais exprimée en monnaie', 'iscorrect' => false],
                            ['answer' => La croissance nominale élimine automatiquement les intérêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un solde primaire ?',
                        'answers' => [
                            ['answer' => Le solde budgétaire avant la prise en compte des charges d’intérêts sur la dette', 'iscorrect' => true],
                            ['answer' => Le solde commercial', 'iscorrect' => false],
                            ['answer' => Le solde courant extérieur', 'iscorrect' => false],
                            ['answer' => Le solde des comptes des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays peut-il avoir un déficit global tout en ayant un excédent primaire ?',
                        'answers' => [
                            ['answer' => Le solde primaire positif peut être insuffisant pour couvrir les charges d’intérêts de la dette', 'iscorrect' => true],
                            ['answer' => Le solde primaire inclut toujours les intérêts', 'iscorrect' => false],
                            ['answer' => Les intérêts sont toujours négatifs', 'iscorrect' => false],
                            ['answer' => Un excédent primaire signifie nécessairement une baisse de dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la soutenabilité de la dette dépend-elle aussi du taux de croissance ?',
                        'answers' => [
                            ['answer' => Une croissance plus forte augmente la base fiscale potentielle et le PIB, ce qui peut faciliter le service relatif de la dette', 'iscorrect' => true],
                            ['answer' => La croissance n’affecte jamais les recettes fiscales', 'iscorrect' => false],
                            ['answer' => Le PIB et la dette sont complètement indépendants', 'iscorrect' => false],
                            ['answer' => La croissance entraîne toujours une hausse du ratio dette/PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation budgétaire peut-elle avoir un effet ambigu à court terme ?',
                        'answers' => [
                            ['answer' => Elle peut améliorer les finances publiques tout en réduisant temporairement la demande globale', 'iscorrect' => true],
                            ['answer' => Elle augmente toujours immédiatement la production', 'iscorrect' => false],
                            ['answer' => Elle n’a aucun effet sur la demande', 'iscorrect' => false],
                            ['answer' => Elle supprime automatiquement les intérêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs surveillent-ils la crédibilité budgétaire d’un État ?',
                        'answers' => [
                            ['answer' => Une perte de crédibilité peut augmenter les primes de risque et renchérir le financement public', 'iscorrect' => true],
                            ['answer' => La crédibilité réduit toujours les dépenses publiques', 'iscorrect' => false],
                            ['answer' => Elle détermine directement le taux de chômage', 'iscorrect' => false],
                            ['answer' => Elle élimine les risques de change', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique économique et stabilisation macroéconomique',
                'questions' => [
                    [
                        'question' => 'Pourquoi une politique de stabilisation cherche-t-elle à réduire certaines fluctuations économiques ?',
                        'answers' => [
                            ['answer' => Des fluctuations excessives peuvent affecter l’emploi, la production, l’investissement et la stabilité des prix', 'iscorrect' => true],
                            ['answer' => Les fluctuations sont toujours sans conséquence', 'iscorrect' => false],
                            ['answer' => La stabilité implique toujours une croissance nulle', 'iscorrect' => false],
                            ['answer' => Elle vise uniquement le commerce extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques sont-ils différents d’une politique discrétionnaire ?',
                        'answers' => [
                            ['answer' => Ils fonctionnent automatiquement selon l’évolution de l’activité et des revenus, sans nouvelle décision politique à chaque cycle', 'iscorrect' => true],
                            ['answer' => Ils nécessitent toujours une réforme législative immédiate', 'iscorrect' => false],
                            ['answer' => Ils ne concernent jamais la fiscalité', 'iscorrect' => false],
                            ['answer' => Ils ne fonctionnent qu’en période d’expansion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais de reconnaissance compliquent-ils la politique économique ?',
                        'answers' => [
                            ['answer' => Les données nécessaires pour identifier un ralentissement peuvent être disponibles avec retard ou être révisées', 'iscorrect' => true],
                            ['answer' => Les données macroéconomiques sont toujours instantanées', 'iscorrect' => false],
                            ['answer' => Les autorités connaissent toujours exactement les chocs futurs', 'iscorrect' => false],
                            ['answer' => Les indicateurs ne changent jamais après publication', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais de transmission sont-ils importants pour la politique monétaire ?',
                        'answers' => [
                            ['answer' => Une variation des taux agit progressivement sur le financement, la demande, l’activité et les prix', 'iscorrect' => true],
                            ['answer' => Les taux directeurs n’ont aucun délai d’action', 'iscorrect' => false],
                            ['answer' => L’inflation disparaît immédiatement', 'iscorrect' => false],
                            ['answer' => Les entreprises ajustent toujours leur capital en une journée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire expansionniste peut-elle être contre-productive dans une économie déjà proche de sa capacité maximale ?',
                        'answers' => [
                            ['answer' => Elle peut surtout augmenter les pressions inflationnistes plutôt que la production réelle', 'iscorrect' => true],
                            ['answer' => Elle réduit toujours l’inflation', 'iscorrect' => false],
                            ['answer' => Elle réduit nécessairement la demande globale', 'iscorrect' => false],
                            ['answer' => Elle augmente toujours le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle avoir des effets distributifs ?',
                        'answers' => [
                            ['answer' => Les ménages endettés, les épargnants et les secteurs sensibles au crédit ne sont pas affectés de la même manière', 'iscorrect' => true],
                            ['answer' => Tous les ménages réagissent toujours identiquement', 'iscorrect' => false],
                            ['answer' => Les taux ne concernent que les banques centrales', 'iscorrect' => false],
                            ['answer' => Les entreprises ne dépendent jamais du crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’indépendance de la banque centrale peut-elle être défendue dans certaines architectures institutionnelles ?',
                        'answers' => [
                            ['answer' => Elle peut réduire certaines pressions politiques de court terme susceptibles de compromettre la stabilité des prix', 'iscorrect' => true],
                            ['answer' => Elle garantit une inflation nulle', 'iscorrect' => false],
                            ['answer' => Elle supprime le besoin de politique budgétaire', 'iscorrect' => false],
                            ['answer' => Elle empêche toute coordination avec le gouvernement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la coordination entre politique budgétaire et politique monétaire peut-elle devenir importante lors d’un choc majeur ?',
                        'answers' => [
                            ['answer' => Les deux politiques influencent la demande et les conditions financières, et leurs effets peuvent se renforcer ou se neutraliser', 'iscorrect' => true],
                            ['answer' => Elles n’agissent jamais sur les mêmes variables', 'iscorrect' => false],
                            ['answer' => La politique budgétaire contrôle directement les taux directeurs', 'iscorrect' => false],
                            ['answer' => La politique monétaire détermine seule les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique économique doit-elle tenir compte des anticipations des agents ?',
                        'answers' => [
                            ['answer' => Les décisions présentes des ménages et des entreprises dépendent en partie de leurs attentes concernant l’avenir', 'iscorrect' => true],
                            ['answer' => Les anticipations n’influencent jamais les décisions', 'iscorrect' => false],
                            ['answer' => Les agents ne réagissent qu’aux données historiques', 'iscorrect' => false],
                            ['answer' => Les anticipations déterminent toujours parfaitement l’avenir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles macroéconomiques doivent-ils être utilisés avec prudence ?',
                        'answers' => [
                            ['answer' => Les relations économiques peuvent changer, les paramètres sont incertains et les comportements réagissent aux politiques', 'iscorrect' => true],
                            ['answer' => Les modèles sont toujours faux et inutiles', 'iscorrect' => false],
                            ['answer' => Les paramètres économiques sont parfaitement constants', 'iscorrect' => false],
                            ['answer' => Les agents suivent toujours exactement les mêmes comportements', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

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
