```php id="b8lq2p"
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MonetaryEconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'monetary-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Théorie monétaire et demande de monnaie',
                'questions' => [
                    [
                        'question' => 'Pourquoi les agents économiques détiennent-ils de la monnaie malgré le fait que certains actifs financiers offrent un rendement ?',
                        'answers' => [
                            ['answer' => 'La monnaie fournit de la liquidité et facilite les transactions', 'iscorrect' => true],
                            ['answer' => 'La monnaie offre toujours le rendement le plus élevé', 'iscorrect' => false],
                            ['answer' => 'Les actifs financiers ne peuvent jamais être détenus', 'iscorrect' => false],
                            ['answer' => 'La monnaie élimine toute incertitude économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une hausse du revenu peut-elle influencer la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'Elle peut accroître les besoins de transaction et donc la demande d’encaisses monétaires', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la demande de monnaie à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle élimine le besoin de liquidité', 'iscorrect' => false],
                            ['answer' => 'Elle rend la monnaie inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d’intérêt peut-elle réduire la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'Le coût d’opportunité de détenir des encaisses non rémunérées augmente', 'iscorrect' => true],
                            ['answer' => 'La monnaie devient plus liquide lorsque les taux montent', 'iscorrect' => false],
                            ['answer' => 'Les agents cessent toute transaction', 'iscorrect' => false],
                            ['answer' => 'Les taux élevés rendent les dépôts illégaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une fonction simple de demande de monnaie, quelle relation est généralement attendue entre revenu réel et demande réelle de monnaie ?',
                        'answers' => [
                            ['answer' => 'Une relation positive', 'iscorrect' => true],
                            ['answer' => 'Une relation toujours négative', 'iscorrect' => false],
                            ['answer' => 'Aucune relation possible', 'iscorrect' => false],
                            ['answer' => 'Une relation nécessairement égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une demande réelle de monnaie ?',
                        'answers' => [
                            ['answer' => 'La quantité de monnaie détenue en termes de pouvoir d’achat, généralement rapportée au niveau des prix', 'iscorrect' => true],
                            ['answer' => 'La quantité de billets imprimés par la banque centrale uniquement', 'iscorrect' => false],
                            ['answer' => 'La quantité de biens produits dans l’économie', 'iscorrect' => false],
                            ['answer' => 'Le montant nominal des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer monnaie nominale et monnaie réelle ?',
                        'answers' => [
                            ['answer' => 'La monnaie réelle tient compte du niveau des prix et du pouvoir d’achat', 'iscorrect' => true],
                            ['answer' => 'La monnaie nominale n’a aucune valeur comptable', 'iscorrect' => false],
                            ['answer' => 'La monnaie réelle est toujours égale à la monnaie nominale', 'iscorrect' => false],
                            ['answer' => 'Les deux termes désignent uniquement des billets différents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement à la demande réelle de monnaie lorsque le niveau général des prix augmente, toutes choses égales par ailleurs et pour une quantité nominale donnée ?',
                        'answers' => [
                            ['answer' => 'Le pouvoir d’achat correspondant à cette quantité nominale diminue', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Il devient automatiquement égal au revenu', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais du niveau des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité de la demande de monnaie est-elle utile pour l’analyse monétaire ?',
                        'answers' => [
                            ['answer' => 'Elle facilite la prévision de la quantité de monnaie que les agents souhaitent détenir pour différents niveaux d’activité et de taux', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Elle rend les taux d’intérêt constants', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute évolution du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’innovation financière peut-elle modifier la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'De nouveaux moyens de paiement ou actifs liquides peuvent modifier le coût d’opportunité et les habitudes de détention', 'iscorrect' => true],
                            ['answer' => 'L’innovation financière ne modifie jamais les comportements monétaires', 'iscorrect' => false],
                            ['answer' => 'Les nouveaux moyens de paiement remplacent toujours toute monnaie', 'iscorrect' => false],
                            ['answer' => 'Elle fixe directement le taux d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les systèmes de paiement électroniques peuvent-ils réduire certains besoins de détention d’espèces ?',
                        'answers' => [
                            ['answer' => 'Ils facilitent les paiements sans nécessiter de détenir autant d’espèces physiques', 'iscorrect' => true],
                            ['answer' => 'Ils rendent toutes les transactions gratuites', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les encaisses physiques', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent les dépôts bancaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Création monétaire et système bancaire',
                'questions' => [
                    [
                        'question' => 'Comment une banque commerciale crée-t-elle généralement des dépôts lorsqu’elle accorde un nouveau crédit ?',
                        'answers' => [
                            ['answer' => 'Elle inscrit un actif de prêt et un passif de dépôt correspondant dans son bilan', 'iscorrect' => true],
                            ['answer' => 'Elle imprime nécessairement des billets physiques', 'iscorrect' => false],
                            ['answer' => 'Elle détruit simultanément tous les dépôts existants', 'iscorrect' => false],
                            ['answer' => 'Elle transfère toujours de l’or directement à l’emprunteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la création monétaire bancaire n’est-elle pas illimitée ?',
                        'answers' => [
                            ['answer' => 'Elle dépend de la demande de crédit, du risque, du capital, de la liquidité, de la réglementation et de la rentabilité des prêts', 'iscorrect' => true],
                            ['answer' => 'Les banques peuvent créer une quantité infinie sans aucune contrainte', 'iscorrect' => false],
                            ['answer' => 'Les banques ne peuvent jamais accorder de crédit', 'iscorrect' => false],
                            ['answer' => 'La création monétaire dépend uniquement du nombre de billets', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la relation entre base monétaire et masse monétaire n’est-elle pas nécessairement stable ?',
                        'answers' => [
                            ['answer' => 'Le comportement des banques et du public, ainsi que la demande de réserves et de dépôts, peuvent changer', 'iscorrect' => true],
                            ['answer' => 'Le multiplicateur monétaire est toujours constant', 'iscorrect' => false],
                            ['answer' => 'Les réserves n’ont jamais de rôle dans le système bancaire', 'iscorrect' => false],
                            ['answer' => 'Les dépôts ne peuvent jamais varier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle simplifié avec un ratio de réserves r, quel est le multiplicateur des dépôts dans le cas idéal sans fuite en espèces ?',
                        'answers' => [
                            ['answer' => '1 / r', 'iscorrect' => true],
                            ['answer' => 'r', 'iscorrect' => false],
                            ['answer' => '1 + r', 'iscorrect' => false],
                            ['answer' => 'r²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur monétaire simple peut-il surestimer la création effective de monnaie ?',
                        'answers' => [
                            ['answer' => Il ignore certaines réactions du public, des banques et les contraintes réelles de crédit et de capital', 'iscorrect' => true],
                            ['answer' => 'Il suppose toujours une demande de crédit nulle', 'iscorrect' => false],
                            ['answer' => 'Il interdit toute création de dépôt', 'iscorrect' => false],
                            ['answer' => 'Il suppose que toutes les banques ferment', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle détenir des réserves excédentaires ?',
                        'answers' => [
                            ['answer' => 'Elle peut privilégier la liquidité, faire face à l’incertitude ou ne pas trouver suffisamment de prêts rentables et sûrs', 'iscorrect' => true],
                            ['answer' => 'Les réserves excédentaires sont toujours interdites', 'iscorrect' => false],
                            ['answer' => 'Elle doit obligatoirement prêter toutes ses réserves', 'iscorrect' => false],
                            ['answer' => 'Les réserves ne peuvent pas être détenues par les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’un prêt bancaire est remboursé ?',
                        'answers' => [
                            ['answer' => 'Le dépôt correspondant peut être réduit et la créance bancaire est diminuée', 'iscorrect' => true],
                            ['answer' => 'La masse monétaire augmente automatiquement du même montant', 'iscorrect' => false],
                            ['answer' => 'Le prêt devient une exportation', 'iscorrect' => false],
                            ['answer' => 'Le remboursement crée obligatoirement de nouveaux billets', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le capital réglementaire limite-t-il indirectement la croissance du bilan bancaire ?',
                        'answers' => [
                            ['answer' => 'Une croissance excessive des actifs pondérés par les risques peut nécessiter davantage de fonds propres', 'iscorrect' => true],
                            ['answer' => 'Le capital bancaire est sans rapport avec les prêts', 'iscorrect' => false],
                            ['answer' => 'Le capital limite uniquement les dépôts', 'iscorrect' => false],
                            ['answer' => 'Les actifs pondérés ne dépendent jamais des prêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque doit-elle gérer l’échéance de ses actifs et passifs ?',
                        'answers' => [
                            ['answer' => 'Elle peut avoir des actifs longs financés en partie par des passifs plus courts et doit donc gérer le risque de liquidité', 'iscorrect' => true],
                            ['answer' => 'Tous les actifs et passifs ont toujours la même maturité', 'iscorrect' => false],
                            ['answer' => 'Les dépôts sont toujours bloqués pendant plusieurs décennies', 'iscorrect' => false],
                            ['answer' => 'La maturité n’a aucun effet sur le risque bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de crédit peut-il réduire l’offre de prêts ?',
                        'answers' => [
                            ['answer' => Une hausse du risque attendu de défaut peut rendre certains prêts moins rentables ou plus coûteux en capital', 'iscorrect' => true],
                            ['answer' => 'Le risque de crédit augmente toujours les prêts', 'iscorrect' => false],
                            ['answer' => 'Le risque n’affecte jamais les décisions de crédit', 'iscorrect' => false],
                            ['answer' => 'Les banques ne tiennent pas compte des défauts possibles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Banque centrale et instruments monétaires',
                'questions' => [
                    [
                        'question' => 'Quel est le principal taux utilisé par une banque centrale pour influencer les conditions monétaires ?',
                        'answers' => [
                            ['answer' => 'Le taux directeur', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le taux de natalité', 'iscorrect' => false],
                            ['answer' => 'Le taux d’exportation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une banque centrale peut-elle influencer les taux du marché monétaire ?',
                        'answers' => [
                            ['answer' => 'Par ses opérations et le cadre dans lequel elle fournit ou retire de la liquidité au système financier', 'iscorrect' => true],
                            ['answer' => 'En fixant directement le prix de tous les biens', 'iscorrect' => false],
                            ['answer' => 'En contrôlant directement chaque salaire', 'iscorrect' => false],
                            ['answer' => 'En interdisant les prêts privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération d’open market ?',
                        'answers' => [
                            ['answer' => 'Une opération de la banque centrale portant sur des actifs financiers afin d’influencer les liquidités et les conditions monétaires', 'iscorrect' => true],
                            ['answer' => 'Une opération commerciale entre deux entreprises', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur les importations', 'iscorrect' => false],
                            ['answer' => 'Une vente de biens de consommation par le gouvernement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse du taux directeur est-elle généralement considérée comme expansionniste ?',
                        'answers' => [
                            ['answer' => 'Elle tend à assouplir les conditions financières et à réduire certains coûts de financement', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le coût du crédit', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement la liquidité bancaire à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux directeur est-elle généralement restrictive ?',
                        'answers' => [
                            ['answer' => 'Elle tend à resserrer les conditions financières et à ralentir certaines dépenses sensibles aux taux', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le coût de l’emprunt', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement le crédit gratuit', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la banque centrale peut-elle utiliser ses communications comme instrument de politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les indications sur la politique future peuvent influencer les anticipations des agents et donc les conditions financières actuelles', 'iscorrect' => true],
                            ['answer' => 'La communication ne peut jamais modifier les anticipations', 'iscorrect' => false],
                            ['answer' => 'Les agents ignorent toujours les déclarations de banque centrale', 'iscorrect' => false],
                            ['answer' => 'La communication remplace automatiquement tous les instruments', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique monétaire conventionnelle ?',
                        'answers' => [
                            ['answer' => 'Une politique reposant principalement sur les taux directeurs et les opérations monétaires usuelles', 'iscorrect' => true],
                            ['answer' => 'Une politique commerciale fondée sur des tarifs', 'iscorrect' => false],
                            ['answer' => 'Une politique budgétaire de dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Une politique de contrôle des salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle rencontrer des limites lorsque les taux sont proches de zéro ?',
                        'answers' => [
                            ['answer' => La baisse supplémentaire des taux nominaux peut devenir difficile ou moins efficace selon les instruments et contraintes disponibles', 'iscorrect' => true],
                            ['answer' => 'Les banques centrales ne peuvent jamais modifier les taux positifs', 'iscorrect' => false],
                            ['answer' => 'Les taux proches de zéro garantissent toujours une forte inflation', 'iscorrect' => false],
                            ['answer' => 'Les agents cessent nécessairement d’épargner', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques centrales peuvent-elles utiliser des achats d’actifs à grande échelle ?',
                        'answers' => [
                            ['answer' => 'Pour exercer une pression sur certains rendements à long terme et soutenir les conditions financières lorsque les taux courts sont contraints', 'iscorrect' => true],
                            ['answer' => 'Pour fixer directement les prix des actions', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute dette publique', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute transaction financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’indépendance de la banque centrale peut-elle être importante ?',
                        'answers' => [
                            ['answer' => 'Elle peut renforcer la crédibilité de l’objectif de stabilité des prix en limitant certaines pressions politiques de court terme', 'iscorrect' => true],
                            ['answer' => 'Elle garantit automatiquement une inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute responsabilité publique', 'iscorrect' => false],
                            ['answer' => 'Elle permet de contrôler chaque banque commerciale directement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation, anticipations et courbe de Phillips',
                'questions' => [
                    [
                        'question' => 'Pourquoi les anticipations d’inflation sont-elles importantes pour la dynamique des prix et salaires ?',
                        'answers' => [
                            ['answer' => Elles influencent les décisions de fixation des salaires, des prix et des contrats futurs', 'iscorrect' => true],
                            ['answer' => 'Elles ne jouent aucun rôle dans les décisions économiques', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent directement la productivité physique', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute variation de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que décrit la courbe de Phillips dans sa formulation moderne simplifiée ?',
                        'answers' => [
                            ['answer' => 'Une relation entre inflation, activité ou chômage et anticipations d’inflation, avec des effets dépendant de la structure du modèle', 'iscorrect' => true],
                            ['answer' => 'Une relation fixe et permanente entre inflation et chômage sans aucune anticipation', 'iscorrect' => false],
                            ['answer' => 'Une relation entre exportations et importations uniquement', 'iscorrect' => false],
                            ['answer' => 'Une relation entre monnaie et population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un arbitrage permanent entre inflation et chômage ne peut-il pas être supposé à long terme dans les modèles modernes ?',
                        'answers' => [
                            ['answer' => Les anticipations peuvent s’ajuster, ce qui modifie la relation entre inflation et chômage', 'iscorrect' => true],
                            ['answer' => 'Les anticipations sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Le chômage ne varie jamais', 'iscorrect' => false],
                            ['answer' => 'L’inflation est toujours indépendante des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une inflation anticipée ?',
                        'answers' => [
                            ['answer' => 'La hausse future des prix que les ménages, entreprises ou investisseurs s’attendent à observer', 'iscorrect' => true],
                            ['answer' => 'L’inflation mesurée exactement après les événements', 'iscorrect' => false],
                            ['answer' => 'La baisse certaine des salaires réels', 'iscorrect' => false],
                            ['answer' => 'Une inflation automatiquement imposée par la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale crédible peut-elle influencer les anticipations d’inflation ?',
                        'answers' => [
                            ['answer' => Les agents intègrent dans leurs décisions leur perception de la réaction future de la banque centrale', 'iscorrect' => true],
                            ['answer' => 'Les anticipations sont indépendantes de la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'La crédibilité n’affecte jamais les contrats', 'iscorrect' => false],
                            ['answer' => 'Les agents ne forment jamais d’anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de l’inflation attendue peut-elle augmenter les taux nominaux ?',
                        'answers' => [
                            ['answer' => 'Les prêteurs demandent généralement une compensation nominale pour la perte de pouvoir d’achat anticipée', 'iscorrect' => true],
                            ['answer' => 'L’inflation attendue réduit toujours les taux nominaux', 'iscorrect' => false],
                            ['answer' => 'Les taux nominaux sont indépendants de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Les prêteurs ignorent les prix futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les salaires nominaux peuvent-ils réagir aux anticipations d’inflation ?',
                        'answers' => [
                            ['answer' => Les travailleurs et employeurs cherchent à préserver ou négocier le pouvoir d’achat réel des rémunérations', 'iscorrect' => true],
                            ['answer' => 'Les salaires ne dépendent jamais des prix futurs', 'iscorrect' => false],
                            ['answer' => 'Les contrats salariaux ignorent toujours l’inflation', 'iscorrect' => false],
                            ['answer' => 'Les salaires réels sont toujours fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc d’offre peut-il déplacer la relation inflation-activité ?',
                        'answers' => [
                            ['answer' => Il peut augmenter les coûts et les prix tout en réduisant simultanément la production', 'iscorrect' => true],
                            ['answer' => Un choc d’offre augmente toujours la production et réduit les prix', 'iscorrect' => false],
                            ['answer' => Les coûts n’ont aucun effet sur les prix', 'iscorrect' => false],
                            ['answer' => La production ne réagit jamais aux chocs d’offre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une désinflation peut-elle avoir un coût réel ?',
                        'answers' => [
                            ['answer' => Un resserrement monétaire visant à réduire l’inflation peut temporairement ralentir la demande et l’emploi', 'iscorrect' => true],
                            ['answer' => 'La désinflation augmente toujours immédiatement la production', 'iscorrect' => false],
                            ['answer' => 'Les politiques anti-inflation n’affectent jamais l’activité', 'iscorrect' => false],
                            ['answer' => 'L’inflation disparaît toujours sans ajustement économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la désinflation peut-elle devenir plus facile lorsque les anticipations sont bien ancrées ?',
                        'answers' => [
                            ['answer' => Une crédibilité élevée peut limiter la propagation d’une inflation passée dans les décisions futures de prix et de salaires', 'iscorrect' => true],
                            ['answer' => 'Les anticipations n’ont aucun rôle dans la fixation des prix', 'iscorrect' => false],
                            ['answer' => 'Les prix deviennent automatiquement administrés', 'iscorrect' => false],
                            ['answer' => 'Les entreprises cessent de modifier leurs prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire, IS-LM et transmission',
                'questions' => [
                    [
                        'question' => Dans le cadre IS-LM, que représente principalement la courbe IS ?',
                        'answers' => [
                            ['answer' => 'Les combinaisons de revenu et de taux d’intérêt compatibles avec l’équilibre du marché des biens', 'iscorrect' => true],
                            ['answer' => 'Les combinaisons de salaire et d’emploi', 'iscorrect' => false],
                            ['answer' => 'Les combinaisons de monnaie étrangère et de taux de change', 'iscorrect' => false],
                            ['answer' => 'Les niveaux de prix fixés par la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente principalement la courbe LM dans sa formulation traditionnelle ?',
                        'answers' => [
                            ['answer' => Les combinaisons de revenu et de taux d’intérêt compatibles avec l’équilibre du marché monétaire', 'iscorrect' => true],
                            ['answer' => 'L’équilibre du marché du travail', 'iscorrect' => false],
                            ['answer' => 'L’équilibre du commerce extérieur uniquement', 'iscorrect' => false],
                            ['answer' => 'La frontière des possibilités de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle IS-LM traditionnel, comment une expansion monétaire affecte-t-elle généralement le taux d’intérêt à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle tend à le réduire, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Elle l’augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut jamais modifier le taux', 'iscorrect' => false],
                            ['answer' => 'Elle fixe automatiquement le taux à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle augmenter l’investissement dans le modèle IS-LM ?',
                        'answers' => [
                            ['answer' => 'Le coût du financement diminue, ce qui rend certains projets plus rentables', 'iscorrect' => true],
                            ['answer' => 'Les entreprises cessent d’investir lorsque les taux baissent', 'iscorrect' => false],
                            ['answer' => 'Les taux n’ont jamais d’effet sur le coût du capital', 'iscorrect' => false],
                            ['answer' => 'Une baisse des taux réduit mécaniquement tous les profits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire peut-elle stimuler la consommation de biens durables ?',
                        'answers' => [
                            ['answer' => 'Des coûts d’emprunt plus faibles peuvent rendre certains achats financés par crédit plus accessibles', 'iscorrect' => true],
                            ['answer' => 'Les biens durables sont indépendants du crédit', 'iscorrect' => false],
                            ['answer' => 'Les ménages cessent toujours de consommer lorsque les taux baissent', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales achètent directement les biens durables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le canal du crédit peut-il amplifier la transmission monétaire ?',
                        'answers' => [
                            ['answer' => Une modification des conditions financières peut affecter l’offre de crédit, les primes de financement et les dépenses', 'iscorrect' => true],
                            ['answer' => 'Le crédit est indépendant de la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Les banques ajustent toujours leurs prêts dans la direction opposée à la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Le financement n’a aucun effet sur la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le canal du taux de change est-il important dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Les variations du taux de change affectent la compétitivité, les exportations, les importations et parfois l’inflation importée', 'iscorrect' => true],
                            ['answer' => 'Le taux de change n’a aucun effet sur le commerce', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont indépendantes des prix relatifs', 'iscorrect' => false],
                            ['answer' => 'L’inflation importée n’existe jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la transmission monétaire peut-elle différer entre banques et entreprises ?',
                        'answers' => [
                            ['answer' => 'Les structures de financement, bilans, garanties et accès aux marchés financiers varient selon les agents', 'iscorrect' => true],
                            ['answer' => 'Tous les agents se financent exactement de la même manière', 'iscorrect' => false],
                            ['answer' => 'Les banques n’ont aucun rôle dans le financement des entreprises', 'iscorrect' => false],
                            ['answer' => 'Les bilans sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la transmission monétaire est-elle généralement retardée ?',
                        'answers' => [
                            ['answer' => Les décisions de dépenses, de crédit, d’investissement et de fixation des prix s’ajustent progressivement', 'iscorrect' => true],
                            ['answer' => 'Tous les marchés réagissent instantanément', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne réagissent jamais aux taux', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales contrôlent directement la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le même choc monétaire peut-il produire des effets différents selon la structure financière d’un pays ?',
                        'answers' => [
                            ['answer' => 'La part du crédit bancaire, des marchés financiers, de la dette variable et du financement externe diffère entre économies', 'iscorrect' => true],
                            ['answer' => 'Les structures financières sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire a exactement le même mécanisme partout', 'iscorrect' => false],
                            ['answer' => 'La structure financière n’affecte jamais la transmission', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire et stabilité financière',
                'questions' => [
                    [
                        'question' => Pourquoi un environnement de taux très bas peut-il contribuer à certaines prises de risque ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs peuvent chercher davantage de rendement en acceptant plus de risque', 'iscorrect' => true],
                            ['answer' => 'Les taux bas rendent automatiquement tous les actifs sans risque', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs cessent toujours de prendre des risques', 'iscorrect' => false],
                            ['answer' => 'Le risque disparaît lorsque les taux diminuent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse rapide des taux peut-elle fragiliser certains emprunteurs ?',
                        'answers' => [
                            ['answer' => 'Le service de la dette peut augmenter et la valeur de certains actifs peut diminuer', 'iscorrect' => true],
                            ['answer' => 'Une hausse des taux réduit toujours le coût du crédit', 'iscorrect' => false],
                            ['answer' => 'Les emprunteurs deviennent automatiquement plus solvables', 'iscorrect' => false],
                            ['answer' => 'Les taux n’affectent jamais les bilans', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité des prix et la stabilité financière peuvent-elles être liées ?',
                        'answers' => [
                            ['answer' => Les tensions financières peuvent perturber la transmission monétaire et affecter la demande, le crédit et l’activité', 'iscorrect' => true],
                            ['answer' => 'Les deux objectifs sont toujours totalement indépendants', 'iscorrect' => false],
                            ['answer' => 'La stabilité financière dépend uniquement des exportations', 'iscorrect' => false],
                            ['answer' => 'Les banques n’ont aucun effet sur l’économie réelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une bulle d’actifs peut-elle poser un problème pour la stabilité financière ?',
                        'answers' => [
                            ['answer' => Une correction brutale des prix d’actifs peut fragiliser les bilans et entraîner des pertes financières', 'iscorrect' => true],
                            ['answer' => Une hausse des prix d’actifs réduit toujours le risque', 'iscorrect' => false],
                            ['answer' => Les actifs financiers sont sans lien avec les bilans bancaires', 'iscorrect' => false],
                            ['answer' => Une correction d’actifs n’a jamais d’effet macroéconomique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le levier financier augmente-t-il la sensibilité aux pertes ?',
                        'answers' => [
                            ['answer' => 'Une faible baisse de la valeur des actifs peut représenter une perte importante relativement aux fonds propres', 'iscorrect' => true],
                            ['answer' => 'Le levier réduit toujours l’exposition aux pertes', 'iscorrect' => false],
                            ['answer' => 'Les fonds propres augmentent automatiquement avec le levier', 'iscorrect' => false],
                            ['answer' => 'Le levier n’affecte jamais le risque bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le désendettement peut-il réduire la demande globale après une crise financière ?',
                        'answers' => [
                            ['answer' => 'Les ménages et entreprises peuvent consacrer davantage de revenus au remboursement de dettes et réduire leurs dépenses', 'iscorrect' => true],
                            ['answer' => 'Le remboursement de dette augmente toujours immédiatement la consommation', 'iscorrect' => false],
                            ['answer' => 'Le désendettement n’affecte jamais la demande', 'iscorrect' => false],
                            ['answer' => 'Les agents empruntent nécessairement davantage pendant le désendettement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la banque centrale peut-elle surveiller les conditions financières au-delà du seul taux directeur ?',
                        'answers' => [
                            ['answer' => 'Les spreads, prix d’actifs, conditions de crédit et taux de marché influencent aussi la transmission de la politique monétaire', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur résume toujours parfaitement toutes les conditions financières', 'iscorrect' => false],
                            ['answer' => 'Les spreads n’ont aucun effet sur l’économie réelle', 'iscorrect' => false],
                            ['answer' => 'Les marchés financiers ne réagissent jamais aux taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une crise de liquidité peut-elle évoluer en problème de solvabilité ?',
                        'answers' => [
                            ['answer' => 'Des ventes forcées d’actifs ou des pertes prolongées peuvent réduire la valeur des actifs et les fonds propres', 'iscorrect' => true],
                            ['answer' => 'Une crise de liquidité améliore toujours les bilans', 'iscorrect' => false],
                            ['answer' => 'La solvabilité est indépendante de la valeur des actifs', 'iscorrect' => false],
                            ['answer' => 'Les ventes forcées augmentent toujours les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le prêteur en dernier ressort peut-il être important pendant une crise ?',
                        'answers' => [
                            ['answer' => 'Il peut fournir de la liquidité lorsqu’une institution saine rencontre temporairement des difficultés de financement', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement les pertes de toute banque', 'iscorrect' => false],
                            ['answer' => 'Il supprime définitivement le risque de crédit', 'iscorrect' => false],
                            ['answer' => 'Il remplace la réglementation prudentielle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les outils macroprudentiels peuvent-ils compléter la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Ils ciblent certains risques financiers systémiques que le taux directeur seul ne peut pas nécessairement traiter efficacement', 'iscorrect' => true],
                            ['answer' => 'Ils remplacent toujours la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Ils servent uniquement à fixer les salaires', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent tous les risques financiers', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, dette publique et finance',
                'questions' => [
                    [
                        'question' => Pourquoi la relation entre politique monétaire et dette publique est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Les taux d’intérêt influencent le coût du service de la dette et les conditions de financement de l’État', 'iscorrect' => true],
                            ['answer' => 'La dette publique est totalement indépendante des taux', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales remboursent toujours directement la dette publique', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques n’affectent jamais l’économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse des taux peut-elle augmenter progressivement la charge d’intérêts d’un État ?',
                        'answers' => [
                            ['answer' => 'Les nouveaux emprunts et les refinancements peuvent se faire à des taux plus élevés', 'iscorrect' => true],
                            ['answer' => 'Toutes les dettes publiques ont toujours le même taux pour toujours', 'iscorrect' => false],
                            ['answer' => 'Une hausse des taux réduit nécessairement les intérêts payés', 'iscorrect' => false],
                            ['answer' => 'Les États n’émettent jamais de nouvelle dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la maturité de la dette publique influence-t-elle la transmission d’une hausse des taux ?',
                        'answers' => [
                            ['answer' => 'Une dette à long terme peut retarder la transmission du refinancement à des taux plus élevés', 'iscorrect' => true],
                            ['answer' => 'La maturité n’a aucun effet sur le coût de la dette', 'iscorrect' => false],
                            ['answer' => 'Une dette courte est toujours moins sensible aux taux', 'iscorrect' => false],
                            ['answer' => 'Toutes les dettes sont refinancées quotidiennement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le financement monétaire direct des déficits peut-il poser un problème d’inflation selon les circonstances ?',
                        'answers' => [
                            ['answer' => 'Une expansion monétaire non compensée peut, lorsque les capacités productives sont contraintes et la demande élevée, accroître les pressions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'Le financement monétaire réduit toujours l’inflation', 'iscorrect' => false],
                            ['answer' => 'La création monétaire ne peut jamais influencer les prix', 'iscorrect' => false],
                            ['answer' => 'Les déficits publics sont sans effet sur la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la crédibilité budgétaire peut-elle influencer les marchés monétaires et financiers ?',
                        'answers' => [
                            ['answer' => 'Elle affecte les anticipations concernant la soutenabilité de la dette, l’inflation et les besoins futurs de financement', 'iscorrect' => true],
                            ['answer' => 'La crédibilité budgétaire n’affecte jamais les taux', 'iscorrect' => false],
                            ['answer' => 'Les marchés ignorent toujours la trajectoire de dette', 'iscorrect' => false],
                            ['answer' => 'La dette publique n’a aucune influence sur les anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la domination budgétaire peut-elle compliquer la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Une contrainte budgétaire forte peut limiter la capacité de la banque centrale à se concentrer exclusivement sur la stabilité des prix', 'iscorrect' => true],
                            ['answer' => 'La politique budgétaire n’a jamais de lien avec la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'La banque centrale contrôle directement toutes les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'La dette publique ne peut jamais influencer les anticipations d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’inflation peut-elle réduire la valeur réelle d’une dette nominale existante ?',
                        'answers' => [
                            ['answer' => 'Une hausse du niveau des prix réduit le pouvoir d’achat correspondant à un montant nominal fixe', 'iscorrect' => true],
                            ['answer' => 'L’inflation augmente toujours la valeur réelle d’une dette fixe', 'iscorrect' => false],
                            ['answer' => 'Les dettes nominales sont indépendantes du niveau des prix', 'iscorrect' => false],
                            ['answer' => 'L’inflation transforme toute dette en actif réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les créanciers peuvent-ils demander un taux nominal plus élevé lorsque l’inflation attendue augmente ?',
                        'answers' => [
                            ['answer' => 'Ils cherchent à compenser la perte anticipée de pouvoir d’achat sur les remboursements futurs', 'iscorrect' => true],
                            ['answer' => 'Les créanciers bénéficient toujours de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Les taux nominaux ne dépendent jamais de l’inflation', 'iscorrect' => false],
                            ['answer' => 'L’inflation anticipée réduit toujours le risque réel pour les prêteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire restrictive peut-elle réduire le rendement réel de certains actifs à court terme ?',
                        'answers' => [
                            ['answer' => 'La baisse de l’inflation attendue peut modifier les rendements réels et les prix d’actifs', 'iscorrect' => true],
                            ['answer' => 'Les actifs réels sont toujours indépendants de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Une politique restrictive augmente toujours tous les prix d’actifs', 'iscorrect' => false],
                            ['answer' => 'Les rendements réels ne dépendent jamais des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les décisions de dette publique peuvent-elles influencer la courbe des taux ?',
                        'answers' => [
                            ['answer' => 'Les émissions de dette modifient l’offre de titres publics et peuvent affecter les rendements selon la demande et les anticipations', 'iscorrect' => true],
                            ['answer' => 'Les obligations publiques n’ont aucun lien avec les taux de marché', 'iscorrect' => false],
                            ['answer' => 'Les émissions publiques n’affectent jamais la structure des maturités', 'iscorrect' => false],
                            ['answer' => 'La courbe des taux est entièrement fixée par la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie monétaire ouverte',
                'questions' => [
                    [
                        'question' => Pourquoi une hausse des taux domestiques peut-elle attirer des capitaux étrangers ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le rendement relatif attendu des actifs domestiques, selon le risque et les anticipations de change', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs étrangers ignorent toujours les rendements', 'iscorrect' => false],
                            ['answer' => 'Les taux domestiques n’affectent jamais les flux de capitaux', 'iscorrect' => false],
                            ['answer' => 'Une hausse des taux interdit tout investissement étranger', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une appréciation de la monnaie peut-elle exercer une pression désinflationniste ?',
                        'answers' => [
                            ['answer' => 'Les biens et intrants importés peuvent devenir moins chers en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Une appréciation rend toujours les importations plus chères', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les coûts importés', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’affecte jamais les prix intérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation peut-elle stimuler certaines exportations ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les biens domestiques relativement moins chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours les biens domestiques plus chers', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Les prix relatifs ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique monétaire est-elle plus complexe dans une économie très ouverte ?',
                        'answers' => [
                            ['answer' => 'Les flux de capitaux, le taux de change, les conditions financières mondiales et le commerce influencent la transmission', 'iscorrect' => true],
                            ['answer' => 'Une économie ouverte n’a plus de banque centrale', 'iscorrect' => false],
                            ['answer' => 'Les marchés internationaux n’affectent jamais les conditions domestiques', 'iscorrect' => false],
                            ['answer' => 'Le taux de change devient fixe par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que la parité non couverte des taux d’intérêt dans son intuition de base ?',
                        'answers' => [
                            ['answer' => 'Une relation entre le différentiel de taux d’intérêt et l’évolution attendue du taux de change', 'iscorrect' => true],
                            ['answer' => 'Une égalité parfaite de tous les taux dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Une relation entre chômage et inflation uniquement', 'iscorrect' => false],
                            ['answer' => 'Une règle de calcul des droits de douane', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la parité de pouvoir d’achat peut-elle ne pas tenir à court terme ?',
                        'answers' => [
                            ['answer' => 'Les biens non échangeables, coûts de transport, taxes et rigidités peuvent empêcher l’ajustement instantané des prix relatifs', 'iscorrect' => true],
                            ['answer' => 'Tous les biens sont parfaitement échangeables sans coût', 'iscorrect' => false],
                            ['answer' => 'Les prix sont identiques dans tous les pays par définition', 'iscorrect' => false],
                            ['answer' => 'L’inflation n’existe jamais en économie ouverte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le triangle d’incompatibilité est-il important en économie monétaire internationale ?',
                        'answers' => [
                            ['answer' => 'Il illustre la difficulté de combiner simultanément change fixe, libre mobilité des capitaux et autonomie monétaire complète', 'iscorrect' => true],
                            ['answer' => 'Il décrit uniquement la fiscalité internationale', 'iscorrect' => false],
                            ['answer' => 'Il garantit que les trois objectifs sont toujours compatibles', 'iscorrect' => false],
                            ['answer' => 'Il concerne uniquement les unions douanières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un régime de change fixe peut-il exiger des réserves internationales importantes ?',
                        'answers' => [
                            ['answer' => 'La banque centrale peut devoir intervenir pour maintenir la parité face aux pressions du marché', 'iscorrect' => true],
                            ['answer' => 'Les réserves sont inutiles sous un taux fixe', 'iscorrect' => false],
                            ['answer' => 'Un taux fixe interdit toute intervention', 'iscorrect' => false],
                            ['answer' => 'Les réserves remplacent toujours la politique budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse des taux mondiaux peut-elle peser sur les économies émergentes ?',
                        'answers' => [
                            ['answer' => 'Elle peut accroître le coût du financement extérieur et favoriser des sorties de capitaux', 'iscorrect' => true],
                            ['answer' => 'Les économies émergentes deviennent automatiquement moins endettées', 'iscorrect' => false],
                            ['answer' => 'Les taux mondiaux n’ont aucun effet sur les marchés émergents', 'iscorrect' => false],
                            ['answer' => 'Les sorties de capitaux deviennent impossibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation peut-elle compliquer la situation d’un pays très endetté en devises étrangères ?',
                        'answers' => [
                            ['answer' => 'La valeur de la dette augmente en monnaie nationale, pouvant dégrader les bilans des emprunteurs', 'iscorrect' => true],
                            ['answer' => 'La dette en devises devient automatiquement moins coûteuse', 'iscorrect' => false],
                            ['answer' => 'La devise de la dette n’a aucun effet financier', 'iscorrect' => false],
                            ['answer' => 'Les banques étrangères absorbent toujours le coût', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Approches quantitatives et agrégats monétaires',
                'questions' => [
                    [
                        'question' => Dans l’identité quantitative MV = PY, que représente M ?',
                        'answers' => [
                            ['answer' => 'La quantité de monnaie', 'iscorrect' => true],
                            ['answer' => 'Le niveau général des prix', 'iscorrect' => false],
                            ['answer' => 'Le revenu réel', 'iscorrect' => false],
                            ['answer' => 'La vitesse de circulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans MV = PY, que représente V ?',
                        'answers' => [
                            ['answer' => 'La vitesse de circulation de la monnaie', 'iscorrect' => true],
                            ['answer' => 'Le volume monétaire uniquement', 'iscorrect' => false],
                            ['answer' => 'Le niveau des prix', 'iscorrect' => false],
                            ['answer' => 'Le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans MV = PY, que représente Y ?',
                        'answers' => [
                            ['answer' => 'La production réelle', 'iscorrect' => true],
                            ['answer' => 'La quantité de monnaie nominale', 'iscorrect' => false],
                            ['answer' => 'Le niveau des prix uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’augmentation de M ne conduit-elle pas mécaniquement à une hausse proportionnelle de P à court terme ?',
                        'answers' => [
                            ['answer' => V et Y peuvent également évoluer, et la relation peut différer selon l’horizon et les conditions économiques', 'iscorrect' => true],
                            ['answer' => 'M est toujours constant', 'iscorrect' => false],
                            ['answer' => 'P est toujours indépendant de toute autre variable', 'iscorrect' => false],
                            ['answer' => 'Y ne varie jamais dans une économie réelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la vitesse de circulation peut-elle varier ?',
                        'answers' => [
                            ['answer' => 'Les préférences de liquidité, les innovations financières et les conditions économiques peuvent modifier la fréquence d’utilisation de la monnaie', 'iscorrect' => true],
                            ['answer' => 'V est toujours fixé par la loi', 'iscorrect' => false],
                            ['answer' => 'V ne dépend jamais du comportement des agents', 'iscorrect' => false],
                            ['answer' => 'La vitesse est nécessairement égale à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une demande de monnaie instable peut-elle compliquer une politique fondée sur des agrégats monétaires ?',
                        'answers' => [
                            ['answer' => 'Une relation instable entre monnaie, dépenses et prix rend moins prévisible l’effet d’une variation donnée de la monnaie', 'iscorrect' => true],
                            ['answer' => 'Une demande instable rend toujours l’inflation nulle', 'iscorrect' => false],
                            ['answer' => 'Les agrégats monétaires deviennent automatiquement plus précis', 'iscorrect' => false],
                            ['answer' => 'Les prix cessent d’évoluer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les agrégats monétaires sont-ils définis en plusieurs catégories ?',
                        'answers' => [
                            ['answer' => 'Les actifs diffèrent par leur liquidité et leur facilité d’utilisation comme moyens de paiement', 'iscorrect' => true],
                            ['answer' => 'Toutes les formes d’actifs ont exactement la même liquidité', 'iscorrect' => false],
                            ['answer' => 'Les catégories monétaires sont choisies uniquement pour des raisons comptables', 'iscorrect' => false],
                            ['answer' => 'Les dépôts bancaires ne sont jamais considérés comme monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le choix de la définition de M peut-il influencer l’analyse empirique ?',
                        'answers' => [
                            ['answer' => 'Une définition plus large ou plus étroite peut avoir une relation différente avec les dépenses et les prix', 'iscorrect' => true],
                            ['answer' => 'Toutes les mesures monétaires produisent toujours les mêmes résultats', 'iscorrect' => false],
                            ['answer' => 'La définition de M n’affecte jamais les statistiques', 'iscorrect' => false],
                            ['answer' => 'Les agrégats monétaires ne peuvent jamais être mesurés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les dépôts à vue sont-ils particulièrement importants pour l’analyse monétaire ?',
                        'answers' => [
                            ['answer' => 'Ils sont très liquides et peuvent être directement utilisés pour de nombreux paiements', 'iscorrect' => true],
                            ['answer' => 'Ils ont toujours une maturité très longue', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent jamais être transférés', 'iscorrect' => false],
                            ['answer' => 'Ils sont identiques aux actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les transformations technologiques peuvent-elles modifier les frontières entre monnaie et actifs liquides ?',
                        'answers' => [
                            ['answer' => 'Les nouveaux moyens de paiement peuvent rendre certains actifs plus facilement utilisables dans les transactions', 'iscorrect' => true],
                            ['answer' => 'La technologie ne change jamais la liquidité', 'iscorrect' => false],
                            ['answer' => 'Les actifs liquides deviennent toujours illiquides', 'iscorrect' => false],
                            ['answer' => 'Les innovations suppriment automatiquement la monnaie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse monétaire appliquée',
                'questions' => [
                    [
                        'question' => Pourquoi une banque centrale suit-elle plusieurs indicateurs plutôt qu’un seul agrégat monétaire ?',
                        'answers' => [
                            ['answer' => 'Aucun indicateur unique ne capture parfaitement les conditions de crédit, de monnaie, de demande, d’inflation et de stabilité financière', 'iscorrect' => true],
                            ['answer' => 'Les agrégats monétaires sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'Un seul indicateur suffit toujours pour prévoir l’économie', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales ne disposent jamais de données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique monétaire doit-elle tenir compte des délais de transmission ?',
                        'answers' => [
                            ['answer' => 'Une décision prise aujourd’hui affecte la demande et l’inflation progressivement, parfois sur plusieurs trimestres', 'iscorrect' => true],
                            ['answer' => 'Les décisions monétaires n’ont aucun délai', 'iscorrect' => false],
                            ['answer' => 'L’inflation réagit toujours immédiatement aux taux', 'iscorrect' => false],
                            ['answer' => 'Les agents économiques ne modifient jamais leurs décisions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les banques centrales utilisent-elles des prévisions d’inflation ?',
                        'answers' => [
                            ['answer' => 'La politique monétaire agit avec retard et doit donc tenir compte de l’inflation future attendue', 'iscorrect' => true],
                            ['answer' => 'L’inflation passée suffit toujours à déterminer la politique', 'iscorrect' => false],
                            ['answer' => 'Les prévisions sont toujours certaines', 'iscorrect' => false],
                            ['answer' => 'Les prix futurs ne sont jamais pertinents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les chocs pétroliers compliquent-ils la stabilisation monétaire ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent accroître l’inflation tout en réduisant la production et en détériorant le pouvoir d’achat', 'iscorrect' => true],
                            ['answer' => 'Ils réduisent toujours l’inflation et augmentent la production', 'iscorrect' => false],
                            ['answer' => 'Ils n’affectent jamais les prix', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales contrôlent directement le prix du pétrole', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les taux directeurs ne suffisent-ils pas toujours à décrire les conditions financières ?',
                        'answers' => [
                            ['answer' => 'Les spreads de crédit, prix d’actifs, taux longs et conditions bancaires peuvent aussi varier', 'iscorrect' => true],
                            ['answer' => 'Les autres taux sont toujours identiques au taux directeur', 'iscorrect' => false],
                            ['answer' => 'Les marchés financiers ne réagissent jamais aux taux', 'iscorrect' => false],
                            ['answer' => 'Les banques ne fixent jamais de conditions de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse du taux directeur peut-elle ne pas entraîner une hausse identique de tous les taux d’emprunt ?',
                        'answers' => [
                            ['answer' => 'Les taux de marché intègrent aussi les risques, maturités, anticipations et conditions propres aux emprunteurs', 'iscorrect' => true],
                            ['answer' => 'Tous les taux de crédit sont légalement identiques', 'iscorrect' => false],
                            ['answer' => 'Les banques ne prennent jamais de risque', 'iscorrect' => false],
                            ['answer' => 'Les maturités n’affectent jamais les taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’ancrage des anticipations d’inflation est-il une priorité dans de nombreux cadres de politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Des anticipations stables peuvent réduire le risque de spirales auto-entretenues entre prix et salaires', 'iscorrect' => true],
                            ['answer' => 'Les anticipations n’affectent jamais les salaires', 'iscorrect' => false],
                            ['answer' => 'Une inflation anticipée instable garantit toujours la stabilité des prix', 'iscorrect' => false],
                            ['answer' => 'Les prix sont totalement indépendants des anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la communication d’une banque centrale doit-elle être cohérente avec ses actions ?',
                        'answers' => [
                            ['answer' => 'Une incohérence peut réduire la crédibilité et modifier les anticipations des agents', 'iscorrect' => true],
                            ['answer' => 'Les agents ne regardent jamais les décisions de la banque centrale', 'iscorrect' => false],
                            ['answer' => 'La communication n’a aucun effet sur la crédibilité', 'iscorrect' => false],
                            ['answer' => 'Les actions et communications n’ont jamais de relation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la coordination entre politique monétaire et politique macroprudentielle peut-elle être utile ?',
                        'answers' => [
                            ['answer' => 'Les objectifs de stabilité des prix et de stabilité financière peuvent interagir, même s’ils nécessitent des instruments distincts', 'iscorrect' => true],
                            ['answer' => 'Les deux politiques poursuivent toujours exactement le même objectif', 'iscorrect' => false],
                            ['answer' => 'La politique macroprudentielle remplace toujours le taux directeur', 'iscorrect' => false],
                            ['answer' => 'La stabilité financière n’a aucun lien avec la transmission monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel principe résume le mieux une bonne analyse de l’économie monétaire ?',
                        'answers' => [
                            ['answer' => 'Analyser simultanément monnaie, crédit, taux, anticipations, inflation, activité et stabilité financière dans leur contexte institutionnel', 'iscorrect' => true],
                            ['answer' => 'Se concentrer uniquement sur la quantité de billets', 'iscorrect' => false],
                            ['answer' => 'Considérer que les taux expliquent automatiquement toute l’économie', 'iscorrect' => false],
                            ['answer' => 'Ignorer les anticipations des agents', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses : la bonne réponse n'est jamais forcée à la première position.
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
