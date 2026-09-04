```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MonetaryEconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'monetary-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Cadres avancés de politique monétaire',
                'questions' => [
                    [
                        'question' => 'Pourquoi une banque centrale doit-elle distinguer le taux directeur observé du taux d’intérêt réel pertinent pour les décisions économiques ?',
                        'answers' => [
                            ['answer' => 'Parce que les décisions de consommation, d’investissement et d’épargne dépendent notamment du rendement ou coût réel anticipé, qui tient compte de l’inflation', 'iscorrect' => true],
                            ['answer' => 'Parce que le taux nominal est toujours égal au taux réel', 'iscorrect' => false],
                            ['answer' => 'Parce que l’inflation ne concerne jamais les contrats financiers', 'iscorrect' => false],
                            ['answer' => 'Parce que les agents ne réagissent qu’aux taux nominaux passés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt neutre est-il difficile à observer directement ?',
                        'answers' => [
                            ['answer' => 'Il s’agit d’une variable non directement observable dont l’estimation dépend de modèles, données et hypothèses', 'iscorrect' => true],
                            ['answer' => 'Il est fixé légalement chaque jour', 'iscorrect' => false],
                            ['answer' => 'Il correspond toujours au taux directeur', 'iscorrect' => false],
                            ['answer' => 'Il est publié sans aucune incertitude par les marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’orientation de la politique monétaire ne peut-elle pas être évaluée uniquement par le niveau du taux directeur ?',
                        'answers' => [
                            ['answer' => 'L’inflation anticipée, le taux neutre, les primes de risque et les autres conditions financières influencent aussi le caractère restrictif ou accommodant de la politique', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur n’a jamais d’importance', 'iscorrect' => false],
                            ['answer' => 'Les autres conditions financières sont toujours constantes', 'iscorrect' => false],
                            ['answer' => 'Le taux réel n’existe pas en économie monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle ralentir le rythme des baisses de taux même lorsque l’inflation diminue ?',
                        'answers' => [
                            ['answer' => 'Elle peut craindre que la demande reste trop forte ou que les anticipations d’inflation ne soient pas suffisamment stabilisées', 'iscorrect' => true],
                            ['answer' => 'Une baisse de l’inflation implique toujours immédiatement une baisse proportionnelle des taux', 'iscorrect' => false],
                            ['answer' => 'Les taux n’ont aucun lien avec les anticipations', 'iscorrect' => false],
                            ['answer' => 'Une inflation plus faible exige toujours une politique plus expansionniste', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle tolérer temporairement une inflation au-dessus de sa cible ?',
                        'answers' => [
                            ['answer' => 'Elle peut considérer que le choc est temporaire ou arbitrer entre retour de l’inflation à la cible et coûts réels d’une désinflation trop rapide', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elle n’a jamais d’objectif de stabilité des prix', 'iscorrect' => false],
                            ['answer' => 'Parce que toute inflation est nécessairement bénéfique', 'iscorrect' => false],
                            ['answer' => 'Parce que les anticipations n’ont aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le pilotage de l’inflation nécessite-t-il une analyse des facteurs d’offre et de demande ?',
                        'answers' => [
                            ['answer' => 'Les pressions inflationnistes peuvent provenir de chocs de coûts, d’une demande excessive ou de leurs interactions', 'iscorrect' => true],
                            ['answer' => 'L’inflation provient toujours exclusivement de la demande', 'iscorrect' => false],
                            ['answer' => 'Les chocs d’offre n’affectent jamais les prix', 'iscorrect' => false],
                            ['answer' => 'La banque centrale contrôle directement toutes les composantes de l’offre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réaction optimale à un choc d’offre peut-elle différer de celle à un choc de demande ?',
                        'answers' => [
                            ['answer' => 'Un choc d’offre peut simultanément augmenter l’inflation et réduire la production, alors qu’un choc de demande peut pousser ces deux variables dans des directions plus cohérentes', 'iscorrect' => true],
                            ['answer' => 'Les deux types de chocs ont toujours exactement les mêmes effets', 'iscorrect' => false],
                            ['answer' => 'Les chocs de demande n’affectent jamais l’inflation', 'iscorrect' => false],
                            ['answer' => 'Les chocs d’offre ne concernent que les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réaction de la politique monétaire doit-elle tenir compte des effets de second tour ?',
                        'answers' => [
                            ['answer' => 'Un choc initial temporaire peut devenir plus persistant s’il influence durablement les salaires, les prix et les anticipations', 'iscorrect' => true],
                            ['answer' => 'Les effets de second tour sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Les salaires ne réagissent jamais aux prix', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne participent jamais à la dynamique des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fonction de réaction crédible peut-elle stabiliser les anticipations ?',
                        'answers' => [
                            ['answer' => 'Les agents anticipent davantage les réponses futures de la banque centrale lorsqu’ils considèrent son comportement systématique et cohérent', 'iscorrect' => true],
                            ['answer' => 'Les agents ignorent toujours les décisions passées', 'iscorrect' => false],
                            ['answer' => 'La crédibilité dépend uniquement du niveau du PIB', 'iscorrect' => false],
                            ['answer' => 'Une banque centrale crédible n’a plus besoin d’instruments', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale doit-elle distinguer les chocs persistants des chocs temporaires ?',
                        'answers' => [
                            ['answer' => 'La réaction appropriée dépend notamment de la durée probable du choc et de son risque de propagation aux anticipations et salaires', 'iscorrect' => true],
                            ['answer' => 'Tous les chocs nécessitent exactement la même réponse', 'iscorrect' => false],
                            ['answer' => 'Un choc temporaire est toujours sans conséquence', 'iscorrect' => false],
                            ['answer' => 'La persistance n’a aucun rôle dans la politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Anticipations rationnelles et crédibilité',
                'questions' => [
                    [
                        'question' => 'Pourquoi les anticipations rationnelles compliquent-elles l’analyse des politiques monétaires systématiques ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent adapter leur comportement à la politique anticipée, ce qui modifie les effets des actions annoncées', 'iscorrect' => true],
                            ['answer' => 'Les agents cessent de former des anticipations', 'iscorrect' => false],
                            ['answer' => 'Les politiques annoncées ont toujours le même effet que les surprises', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne concernent que les marchés internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une surprise monétaire peut-elle avoir un effet différent d’une politique parfaitement anticipée ?',
                        'answers' => [
                            ['answer' => 'Une surprise modifie les conditions économiques avant que les agents aient pu pleinement ajuster leurs décisions conformément à la nouvelle information', 'iscorrect' => true],
                            ['answer' => 'Une politique anticipée est toujours plus puissante', 'iscorrect' => false],
                            ['answer' => 'Les agents ne distinguent jamais surprise et anticipation', 'iscorrect' => false],
                            ['answer' => 'Les surprises monétaires n’affectent jamais les prix d’actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réputation de la banque centrale influence-t-elle le coût de désinflation ?',
                        'answers' => [
                            ['answer' => 'Une réputation crédible peut réduire les anticipations d’inflation futures et limiter les ajustements nominaux nécessaires', 'iscorrect' => true],
                            ['answer' => 'La réputation détermine directement la productivité', 'iscorrect' => false],
                            ['answer' => 'Les anticipations sont indépendantes de la crédibilité', 'iscorrect' => false],
                            ['answer' => 'Une bonne réputation garantit toujours une inflation nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’incohérence temporelle en politique économique ?',
                        'answers' => [
                            ['answer' => 'Une situation où une politique annoncée comme optimale à l’avance devient moins crédible ou moins souhaitable une fois que les agents ont adapté leur comportement', 'iscorrect' => true],
                            ['answer' => 'Une simple erreur de mesure de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Un problème de conversion entre monnaies', 'iscorrect' => false],
                            ['answer' => 'Une relation stable entre taux et chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des règles peuvent-elles parfois améliorer les résultats par rapport à une discrétion totalement imprévisible ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent rendre les décisions plus prévisibles et renforcer la cohérence des anticipations', 'iscorrect' => true],
                            ['answer' => 'Elles suppriment toutes les incertitudes économiques', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent toujours une croissance maximale', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute réaction aux chocs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale doit-elle parfois accepter une certaine flexibilité même lorsqu’elle suit une règle ?',
                        'answers' => [
                            ['answer' => 'Les chocs, changements structurels et incertitudes sur les paramètres peuvent rendre une application mécanique inappropriée', 'iscorrect' => true],
                            ['answer' => 'Les règles ne peuvent jamais servir de référence', 'iscorrect' => false],
                            ['answer' => 'La flexibilité garantit automatiquement la stabilité des prix', 'iscorrect' => false],
                            ['answer' => 'Les chocs économiques sont toujours prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ancrage des anticipations peut-il réduire la volatilité macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Des anticipations stables empêchent certains ajustements excessifs de prix, salaires et rendements financiers après les chocs', 'iscorrect' => true],
                            ['answer' => 'Les anticipations stables empêchent toute fluctuation de production', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n’affectent jamais les contrats', 'iscorrect' => false],
                            ['answer' => 'Une inflation anticipée stable signifie que les prix sont tous constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la forward guidance peut-elle devenir moins efficace si les marchés doutent de sa crédibilité ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent attribuer moins de poids aux indications futures et donc ajuster moins leurs taux et décisions actuels', 'iscorrect' => true],
                            ['answer' => 'Le manque de crédibilité augmente toujours le pouvoir de transmission', 'iscorrect' => false],
                            ['answer' => 'Les marchés ignorent uniquement les taux courts', 'iscorrect' => false],
                            ['answer' => 'La crédibilité n’a aucun lien avec les anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle perdre de la crédibilité même avec des résultats temporaires favorables ?',
                        'answers' => [
                            ['answer' => 'Des incohérences répétées entre objectifs annoncés, décisions et résultats peuvent détériorer les anticipations à plus long terme', 'iscorrect' => true],
                            ['answer' => 'Les résultats temporaires sont toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'La crédibilité dépend uniquement du PIB', 'iscorrect' => false],
                            ['answer' => 'Les agents ne tiennent jamais compte de l’historique de politique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations privées sont-elles parfois décrites comme un canal central de politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les agents intègrent les perspectives de politique monétaire dans les taux à long terme, les prix d’actifs, les salaires et les décisions de dépenses', 'iscorrect' => true],
                            ['answer' => 'Les anticipations n’affectent que les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Les agents prennent uniquement en compte les données passées', 'iscorrect' => false],
                            ['answer' => 'Les taux à long terme ne dépendent jamais des attentes futures', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Transmission financière et marchés d’actifs',
                'questions' => [
                    [
                        'question' => Pourquoi une hausse des taux sans risque peut-elle affecter fortement les prix des actifs ?',
                        'answers' => [
                            ['answer' => 'Elle augmente le taux d’actualisation utilisé pour valoriser les flux futurs et peut modifier les primes de risque', 'iscorrect' => true],
                            ['answer' => 'Les prix d’actifs sont indépendants des taux d’actualisation', 'iscorrect' => false],
                            ['answer' => 'Les actions sont toujours rémunérées au taux directeur', 'iscorrect' => false],
                            ['answer' => 'Les taux plus élevés augmentent nécessairement toutes les valorisations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la courbe des taux est-elle informative pour une banque centrale ?',
                        'answers' => [
                            ['answer' => 'Elle contient des informations de marché sur les taux futurs attendus, l’inflation anticipée et certaines primes de terme', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement la masse monétaire', 'iscorrect' => false],
                            ['answer' => 'Elle fixe automatiquement les taux futurs', 'iscorrect' => false],
                            ['answer' => 'Elle ne contient aucune information prospective', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un aplatissement de la courbe des taux peut-il avoir plusieurs interprétations ?',
                        'answers' => [
                            ['answer' => 'Il peut refléter des changements dans les anticipations de taux courts, l’inflation, la croissance ou les primes de terme', 'iscorrect' => true],
                            ['answer' => 'Il indique toujours une récession imminente', 'iscorrect' => false],
                            ['answer' => 'Il est toujours causé par une baisse du taux directeur', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une baisse des taux peut-elle soutenir les prix immobiliers ?',
                        'answers' => [
                            ['answer' => 'Elle réduit le coût du financement et peut augmenter la capacité d’emprunt et la demande de logements', 'iscorrect' => true],
                            ['answer' => 'Les taux n’affectent jamais le financement immobilier', 'iscorrect' => false],
                            ['answer' => 'Les prix immobiliers sont déterminés uniquement par la population', 'iscorrect' => false],
                            ['answer' => 'Une baisse des taux réduit toujours la demande de logements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les prix d’actifs peuvent-ils influencer ensuite l’économie réelle ?',
                        'answers' => [
                            ['answer' => 'Ils modifient la richesse, les garanties disponibles et les incitations d’investissement et de consommation', 'iscorrect' => true],
                            ['answer' => 'Les prix d’actifs n’affectent jamais les bilans', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne détiennent jamais d’actifs', 'iscorrect' => false],
                            ['answer' => 'La richesse n’influence jamais les dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les spreads de crédit sont-ils importants pour la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Ils déterminent une partie du coût de financement au-delà du taux sans risque et peuvent varier avec le risque perçu', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours constants', 'iscorrect' => false],
                            ['answer' => 'Ils ne concernent que les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Ils n’affectent jamais les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un resserrement monétaire peut-il provoquer une hausse des spreads même si le taux sans risque ne change que modérément ?',
                        'answers' => [
                            ['answer' => 'Le resserrement peut augmenter la perception du risque de défaut ou réduire la liquidité sur certains marchés', 'iscorrect' => true],
                            ['answer' => 'Les spreads sont indépendants de la perception du risque', 'iscorrect' => false],
                            ['answer' => 'Un resserrement réduit toujours tous les spreads', 'iscorrect' => false],
                            ['answer' => 'La liquidité n’a aucun rôle dans les marchés de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le canal du taux de change peut-il amplifier une politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Une variation du change peut agir simultanément sur la demande extérieure, les importations et les prix domestiques', 'iscorrect' => true],
                            ['answer' => 'Le change ne concerne que les touristes', 'iscorrect' => false],
                            ['answer' => 'Les importations sont indépendantes du taux de change', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’a aucun effet sur l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les bilans des entreprises importatrices peuvent-ils être affectés par une dépréciation ?',
                        'answers' => [
                            ['answer' => 'Le coût des intrants importés et des dettes en devises peut augmenter en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours tous les coûts importés', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne peuvent jamais avoir de passifs en devises', 'iscorrect' => false],
                            ['answer' => 'Les bilans ne dépendent jamais du taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les marchés financiers réagissent-ils parfois avant les données macroéconomiques publiées ?',
                        'answers' => [
                            ['answer' => 'Les prix d’actifs incorporent continuellement les anticipations des investisseurs concernant les informations futures', 'iscorrect' => true],
                            ['answer' => 'Les marchés ne réagissent qu’aux données déjà publiées', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours les annonces de politique', 'iscorrect' => false],
                            ['answer' => 'Les prix d’actifs sont déterminés uniquement par les statistiques passées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Interaction entre politique monétaire et politique budgétaire',
                'questions' => [
                    [
                        'question' => Pourquoi une politique budgétaire expansionniste peut-elle influencer la réaction optimale de la banque centrale ?',
                        'answers' => [
                            ['answer' => 'Une hausse de la demande publique peut augmenter les pressions sur l’activité et les prix, modifiant le calibrage monétaire nécessaire', 'iscorrect' => true],
                            ['answer' => 'La politique budgétaire n’a aucun effet sur la demande globale', 'iscorrect' => false],
                            ['answer' => 'La banque centrale ne tient jamais compte de la demande publique', 'iscorrect' => false],
                            ['answer' => 'Une expansion budgétaire réduit toujours l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une consolidation budgétaire peut-elle avoir des effets désinflationnistes ?',
                        'answers' => [
                            ['answer' => 'Une baisse de la demande publique ou des transferts peut réduire la demande globale et certaines pressions sur les prix', 'iscorrect' => true],
                            ['answer' => 'Une consolidation augmente toujours la demande', 'iscorrect' => false],
                            ['answer' => 'La politique budgétaire n’affecte jamais l’inflation', 'iscorrect' => false],
                            ['answer' => 'Les impôts n’ont aucun effet sur les dépenses privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dette publique élevée peut-elle influencer le risque de domination budgétaire ?',
                        'answers' => [
                            ['answer' => 'Des besoins de financement importants peuvent exercer une pression sur la politique monétaire si la soutenabilité budgétaire devient préoccupante', 'iscorrect' => true],
                            ['answer' => 'Une dette élevée garantit toujours une inflation faible', 'iscorrect' => false],
                            ['answer' => 'La banque centrale ne peut jamais être influencée par le cadre budgétaire', 'iscorrect' => false],
                            ['answer' => 'La dette publique n’a aucun lien avec les anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’effet d’éviction peut-il apparaître après une expansion budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une demande accrue peut exercer une pression sur les taux ou les ressources disponibles et réduire certains investissements privés', 'iscorrect' => true],
                            ['answer' => 'La dépense publique réduit toujours les taux', 'iscorrect' => false],
                            ['answer' => 'L’investissement privé augmente toujours sans limite', 'iscorrect' => false],
                            ['answer' => 'Les taux n’ont jamais de relation avec l’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’effet macroéconomique d’un déficit public dépend-il de la conjoncture ?',
                        'answers' => [
                            ['answer' => 'L’effet peut différer selon que l’économie dispose de capacités inutilisées ou fonctionne déjà près de ses contraintes de production', 'iscorrect' => true],
                            ['answer' => 'Le déficit a toujours exactement le même effet', 'iscorrect' => false],
                            ['answer' => 'La production potentielle n’a aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La conjoncture n’affecte jamais les multiplicateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations concernant les finances publiques peuvent-elles influencer l’inflation ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent modifier les anticipations de dette, de financement futur, de politique monétaire et de fiscalité', 'iscorrect' => true],
                            ['answer' => 'Les finances publiques sont toujours sans effet sur les anticipations', 'iscorrect' => false],
                            ['answer' => 'Les ménages ignorent les impôts futurs', 'iscorrect' => false],
                            ['answer' => 'L’inflation dépend uniquement de la masse monétaire passée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la coordination entre autorités budgétaire et monétaire peut-elle être délicate ?',
                        'answers' => [
                            ['answer' => 'Les objectifs, horizons et contraintes institutionnelles peuvent différer, créant des tensions sur le dosage des politiques', 'iscorrect' => true],
                            ['answer' => 'Les deux autorités poursuivent toujours exactement les mêmes objectifs', 'iscorrect' => false],
                            ['answer' => 'La politique budgétaire n’affecte jamais l’activité', 'iscorrect' => false],
                            ['answer' => 'La banque centrale contrôle directement le budget public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte crédibilité budgétaire peut-elle faciliter la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire les primes de risque souverain et stabiliser les anticipations concernant la dette et l’inflation', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le risque financier', 'iscorrect' => false],
                            ['answer' => 'Elle rend les taux indépendants de la dette', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute nécessité de politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’inflation peut-elle modifier progressivement le ratio dette/PIB réel ?',
                        'answers' => [
                            ['answer' => 'Elle modifie la valeur réelle des passifs nominaux et le niveau nominal du PIB', 'iscorrect' => true],
                            ['answer' => 'L’inflation n’affecte jamais la dette nominale', 'iscorrect' => false],
                            ['answer' => 'Le PIB nominal reste constant lorsque les prix augmentent', 'iscorrect' => false],
                            ['answer' => 'Le ratio dette/PIB ne dépend d’aucune variable nominale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les autorités doivent-elles distinguer inflation provenant d’une demande excessive et inflation provenant d’un choc d’offre ?',
                        'answers' => [
                            ['answer' => 'Les instruments monétaires sont généralement plus adaptés à la gestion de la demande qu’à la résolution directe d’un choc de capacité ou de coûts', 'iscorrect' => true],
                            ['answer' => 'Les deux types d’inflation sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une banque centrale contrôle directement toutes les capacités productives', 'iscorrect' => false],
                            ['answer' => 'Les chocs d’offre ne concernent jamais les prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Crises monétaires et financières',
                'questions' => [
                    [
                        'question' => Pourquoi une crise de confiance peut-elle provoquer une boucle entre liquidité et solvabilité bancaire ?',
                        'answers' => [
                            ['answer' => 'Les retraits et ventes forcées peuvent détériorer la liquidité puis les valorisations d’actifs, ce qui affaiblit les fonds propres', 'iscorrect' => true],
                            ['answer' => 'Une crise de confiance améliore toujours les bilans bancaires', 'iscorrect' => false],
                            ['answer' => 'La liquidité et la solvabilité sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'Les ventes forcées augmentent nécessairement les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une crise de change peut-elle s’auto-renforcer sous un régime fixe ?',
                        'answers' => [
                            ['answer' => 'Les anticipations de dévaluation peuvent provoquer des sorties de capitaux qui augmentent les besoins d’intervention et épuisent les réserves', 'iscorrect' => true],
                            ['answer' => 'Les anticipations de dévaluation augmentent toujours les réserves', 'iscorrect' => false],
                            ['answer' => 'Les réserves sont infinies sous un régime fixe', 'iscorrect' => false],
                            ['answer' => 'Les capitaux restent toujours immobiles lorsque le change est fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les réserves internationales peuvent-elles retarder une crise sans nécessairement la résoudre ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent fournir une liquidité temporaire, mais une pression fondamentale persistante peut continuer à réduire les réserves disponibles', 'iscorrect' => true],
                            ['answer' => 'Les réserves éliminent toute incohérence macroéconomique', 'iscorrect' => false],
                            ['answer' => 'Les réserves augmentent automatiquement sans financement', 'iscorrect' => false],
                            ['answer' => 'Une crise de change est toujours purement psychologique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte dette en devises peut-elle transformer une dépréciation en crise financière ?',
                        'answers' => [
                            ['answer' => 'La hausse de la dette en monnaie nationale peut détériorer les bilans et provoquer des défauts ou réductions de crédit', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours les passifs en monnaie nationale', 'iscorrect' => false],
                            ['answer' => 'Les dettes en devises n’ont aucun effet sur les bilans', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne touche jamais les emprunteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les sorties de capitaux peuvent-elles provoquer une contraction du crédit domestique ?',
                        'answers' => [
                            ['answer' => 'Les banques et entreprises peuvent subir une baisse de financement externe et devenir plus prudentes dans leurs nouveaux prêts', 'iscorrect' => true],
                            ['answer' => 'Les sorties de capitaux augmentent toujours les crédits', 'iscorrect' => false],
                            ['answer' => 'Les financements externes n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Une crise de capitaux augmente automatiquement la liquidité bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire très restrictive peut-elle aggraver une crise financière dans certaines circonstances ?',
                        'answers' => [
                            ['answer' => 'La hausse des coûts de financement peut accentuer les défauts, les pertes d’actifs et les contraintes de liquidité', 'iscorrect' => true],
                            ['answer' => 'Un resserrement améliore toujours les bilans', 'iscorrect' => false],
                            ['answer' => 'Les défauts diminuent nécessairement lorsque les taux augmentent', 'iscorrect' => false],
                            ['answer' => 'Les prix d’actifs augmentent toujours après un resserrement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle fournir de la liquidité tout en maintenant une politique monétaire restrictive ?',
                        'answers' => [
                            ['answer' => 'Elle peut chercher à traiter un problème de fonctionnement ou de liquidité financière sans nécessairement assouplir son orientation globale sur l’inflation', 'iscorrect' => true],
                            ['answer' => 'Fournir de la liquidité signifie toujours abaisser le taux directeur', 'iscorrect' => false],
                            ['answer' => 'La liquidité bancaire détermine toujours directement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Une banque centrale ne peut jamais séparer les deux fonctions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le prêteur en dernier ressort doit-il généralement être conçu avec des garde-fous ?',
                        'answers' => [
                            ['answer' => 'Pour limiter le risque moral et distinguer les tensions de liquidité des problèmes fondamentaux de solvabilité', 'iscorrect' => true],
                            ['answer' => 'Pour garantir tous les investissements privés', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer la réglementation bancaire', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute utilisation de liquidité d’urgence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une crise bancaire peut-elle devenir une crise budgétaire ?',
                        'answers' => [
                            ['answer' => 'Un soutien public important aux banques peut accroître les engagements ou la dette de l’État', 'iscorrect' => true],
                            ['answer' => 'Les banques n’ont aucun lien avec les finances publiques', 'iscorrect' => false],
                            ['answer' => 'Les interventions publiques réduisent toujours la dette', 'iscorrect' => false],
                            ['answer' => 'Une crise bancaire augmente automatiquement les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les crises monétaires et bancaires sont-elles souvent interconnectées ?',
                        'answers' => [
                            ['answer' => 'Les banques détiennent des actifs et passifs en devises et sont exposées aux variations du change et aux sorties de capitaux', 'iscorrect' => true],
                            ['answer' => 'Les banques sont totalement isolées du marché des changes', 'iscorrect' => false],
                            ['answer' => 'Le secteur bancaire n’utilise jamais de devises', 'iscorrect' => false],
                            ['answer' => 'Les crises bancaires et monétaires sont par définition indépendantes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modélisation monétaire avancée',
                'questions' => [
                    [
                        'question' => Pourquoi un modèle monétaire doit-il distinguer variables endogènes et exogènes ?',
                        'answers' => [
                            ['answer' => 'La distinction permet d’identifier quelles variables sont déterminées à l’intérieur du modèle et lesquelles sont prises comme données ou contrôlées de l’extérieur', 'iscorrect' => true],
                            ['answer' => 'Toutes les variables économiques sont toujours exogènes', 'iscorrect' => false],
                            ['answer' => 'Les variables endogènes ne peuvent jamais être estimées', 'iscorrect' => false],
                            ['answer' => 'La distinction n’a aucune implication pour l’identification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale doit-elle se méfier des relations historiques instables entre monnaie et inflation ?',
                        'answers' => [
                            ['answer' => 'Les changements institutionnels, financiers et comportementaux peuvent modifier la vitesse de circulation et la demande de monnaie', 'iscorrect' => true],
                            ['answer' => 'Les relations historiques sont toujours permanentes', 'iscorrect' => false],
                            ['answer' => 'La demande de monnaie est nécessairement constante', 'iscorrect' => false],
                            ['answer' => 'Les innovations financières n’ont jamais d’effet sur les agrégats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’identification d’un choc monétaire exige-t-elle des hypothèses supplémentaires dans une analyse empirique ?',
                        'answers' => [
                            ['answer' => 'Les mouvements observés des taux ou de la monnaie peuvent refléter simultanément des réponses aux conditions économiques', 'iscorrect' => true],
                            ['answer' => 'Toute variation du taux directeur est automatiquement exogène', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales ne réagissent jamais à l’économie', 'iscorrect' => false],
                            ['answer' => 'Les chocs monétaires sont directement observables dans les données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un modèle VAR peut-il être utilisé en économie monétaire ?',
                        'answers' => [
                            ['answer' => 'Il permet de modéliser conjointement la dynamique de plusieurs variables sans imposer nécessairement une seule équation structurelle', 'iscorrect' => true],
                            ['answer' => 'Il interdit les effets retardés', 'iscorrect' => false],
                            ['answer' => 'Il ne peut contenir qu’une seule variable', 'iscorrect' => false],
                            ['answer' => 'Il garantit automatiquement l’identification causale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les fonctions de réponse impulsionnelle sont-elles utiles dans les modèles dynamiques ?',
                        'answers' => [
                            ['answer' => 'Elles montrent comment une variable évolue au fil du temps après un choc identifié dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent toutes les hypothèses d’identification', 'iscorrect' => false],
                            ['answer' => 'Elles mesurent uniquement la moyenne de long terme', 'iscorrect' => false],
                            ['answer' => 'Elles ne concernent jamais les chocs monétaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’identification des chocs dans un VAR structurel est-elle cruciale ?',
                        'answers' => [
                            ['answer' => 'Les résultats dépendent des hypothèses utilisées pour distinguer les innovations statistiques des chocs économiques interprétables', 'iscorrect' => true],
                            ['answer' => 'Les innovations statistiques sont toujours structurelles', 'iscorrect' => false],
                            ['answer' => 'L’identification n’affecte jamais les réponses impulsionnelles', 'iscorrect' => false],
                            ['answer' => 'Les variables peuvent toujours être ordonnées arbitrairement sans conséquence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations de politique future peuvent-elles provoquer un ajustement des rendements avant une modification effective du taux directeur ?',
                        'answers' => [
                            ['answer' => 'Les marchés actualisent immédiatement l’information sur la trajectoire future attendue des taux', 'iscorrect' => true],
                            ['answer' => 'Les marchés ne regardent jamais les décisions futures', 'iscorrect' => false],
                            ['answer' => 'Les taux de marché dépendent uniquement du taux directeur actuel', 'iscorrect' => false],
                            ['answer' => 'Les actifs ne sont pas évalués à partir des flux futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la banque centrale doit-elle tenir compte de l’incertitude de mesure dans l’écart de production ?',
                        'answers' => [
                            ['answer' => 'La production potentielle est estimée et non directement observée, ce qui peut modifier l’évaluation de l’orientation appropriée', 'iscorrect' => true],
                            ['answer' => 'La production potentielle est toujours exactement mesurée', 'iscorrect' => false],
                            ['answer' => 'L’écart de production est toujours nul', 'iscorrect' => false],
                            ['answer' => 'L’incertitude de mesure n’affecte jamais la politique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les modèles structurels peuvent-ils être utiles pour les simulations de politique économique ?',
                        'answers' => [
                            ['answer' => 'Ils permettent d’examiner des scénarios contrefactuels à partir de mécanismes économiques explicitement modélisés', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent que tous les scénarios futurs se réaliseront', 'iscorrect' => false],
                            ['answer' => 'Ils ne nécessitent aucune hypothèse', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent automatiquement les données observées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une spécification empirique robuste doit-elle être confrontée à plusieurs mesures d’inflation et d’activité ?',
                        'answers' => [
                            ['answer' => 'Une conclusion dépendante d’un seul indicateur peut être fragile face aux différences de mesure ou aux chocs sectoriels', 'iscorrect' => true],
                            ['answer' => 'Toutes les mesures donnent nécessairement exactement les mêmes informations', 'iscorrect' => false],
                            ['answer' => 'Les indicateurs alternatifs sont toujours redondants', 'iscorrect' => false],
                            ['answer' => 'Une seule série suffit toujours pour identifier tous les mécanismes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Architecture institutionnelle et pratique professionnelle',
                'questions' => [
                    [
                        'question' => Pourquoi la transparence d’une banque centrale peut-elle améliorer l’efficacité de sa politique ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire l’incertitude sur les objectifs et la fonction de réaction, facilitant la formation des anticipations', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toute incertitude sur les chocs futurs', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement une inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Elle rend inutile l’analyse des données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la publication des projections macroéconomiques doit-elle être interprétée avec prudence ?',
                        'answers' => [
                            ['answer' => 'Les projections reposent sur des hypothèses et sont soumises à l’incertitude concernant les chocs, comportements et paramètres futurs', 'iscorrect' => true],
                            ['answer' => 'Une projection officielle est toujours certaine', 'iscorrect' => false],
                            ['answer' => 'Les projections ne dépendent jamais des hypothèses', 'iscorrect' => false],
                            ['answer' => 'Les erreurs de prévision sont impossibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’indépendance opérationnelle n’implique-t-elle pas une absence totale de responsabilité publique ?',
                        'answers' => [
                            ['answer' => 'Une banque centrale indépendante reste généralement soumise à un mandat légal, à des obligations de transparence et à une évaluation institutionnelle', 'iscorrect' => true],
                            ['answer' => 'L’indépendance supprime toujours toute responsabilité', 'iscorrect' => false],
                            ['answer' => 'Une banque centrale indépendante peut ignorer son mandat', 'iscorrect' => false],
                            ['answer' => 'La transparence est incompatible avec l’indépendance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité financière ne peut-elle pas être résumée uniquement par le niveau du taux directeur ?',
                        'answers' => [
                            ['answer' => 'Le levier, la liquidité, les valorisations d’actifs, les spreads et les interconnexions financières peuvent évoluer indépendamment du taux directeur', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur contrôle directement tous les risques', 'iscorrect' => false],
                            ['answer' => Les banques n’ont aucun bilan à surveiller', 'iscorrect' => false],
                            ['answer' => 'Les prix d’actifs n’affectent jamais la stabilité financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les tests de résistance bancaire sont-ils utiles ?',
                        'answers' => [
                            ['answer' => 'Ils évaluent la capacité des établissements à absorber différents scénarios défavorables de pertes, de financement ou de marché', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent qu’aucune banque ne fera faillite', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent tous les ratios prudentiels', 'iscorrect' => false],
                            ['answer' => 'Ils mesurent uniquement l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique macroprudentielle peut-elle être utilisée de manière ciblée plutôt que de modifier fortement le taux directeur ?',
                        'answers' => [
                            ['answer' => 'Elle peut viser directement certaines vulnérabilités financières tout en laissant la politique monétaire poursuivre ses objectifs macroéconomiques', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur n’a jamais d’effet sur la stabilité financière', 'iscorrect' => false],
                            ['answer' => 'Les outils macroprudentiels remplacent toujours la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Les vulnérabilités financières sont toujours uniformes dans tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle utiliser plusieurs scénarios dans sa communication ?',
                        'answers' => [
                            ['answer' => 'Les scénarios permettent d’illustrer comment la politique pourrait réagir selon différentes trajectoires économiques', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent que l’un des scénarios se réalisera exactement', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent la décision de politique', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la cohérence des statistiques monétaires est-elle essentielle à une analyse professionnelle ?',
                        'answers' => [
                            ['answer' => 'Les définitions, ruptures de séries et changements méthodologiques peuvent modifier l’interprétation des tendances monétaires', 'iscorrect' => true],
                            ['answer' => 'Les séries monétaires sont toujours parfaitement homogènes', 'iscorrect' => false],
                            ['answer' => 'Les révisions statistiques n’ont jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'Les définitions des agrégats n’ont aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les décisions de politique monétaire doivent-elles être évaluées ex post ?',
                        'answers' => [
                            ['answer' => 'Une évaluation rétrospective permet de comparer les décisions aux informations disponibles à l’époque et aux résultats observés', 'iscorrect' => true],
                            ['answer' => 'L’évaluation ex post permet toujours de connaître avec certitude les informations futures', 'iscorrect' => false],
                            ['answer' => 'Les décisions économiques ne nécessitent jamais d’évaluation', 'iscorrect' => false],
                            ['answer' => 'Une évaluation rétrospective supprime les contraintes de l’époque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi faut-il distinguer une erreur de prévision d’une erreur de politique ?',
                        'answers' => [
                            ['answer' => 'Une prévision peut être raisonnable compte tenu des informations disponibles alors que le choc futur était imprévisible, tandis qu’une décision peut aussi être mal calibrée malgré une bonne prévision', 'iscorrect' => true],
                            ['answer' => 'Toute erreur de prévision est automatiquement une erreur de politique', 'iscorrect' => false],
                            ['answer' => 'Une politique correcte suppose toujours une prévision parfaite', 'iscorrect' => false],
                            ['answer' => 'Les chocs imprévus n’existent jamais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses : la bonne réponse n'est pas systématiquement en première position.
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
