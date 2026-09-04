```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MonetaryEconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'monetary-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Transmission monétaire avancée',
                'questions' => [
                    [
                        'question' => 'Pourquoi le taux directeur ne constitue-t-il pas à lui seul toute la transmission de la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les taux de marché, conditions de crédit, prix d’actifs, anticipations et taux de change transmettent également la politique', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur détermine directement chaque prix de l’économie', 'iscorrect' => false],
                            ['answer' => 'Les banques n’interviennent jamais dans la transmission monétaire', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n’ont aucun effet sur les décisions économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le canal du bilan dans la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Le mécanisme par lequel les variations de taux et de prix d’actifs modifient la valeur nette des emprunteurs et leur capacité d’accès au financement', 'iscorrect' => true],
                            ['answer' => 'Une méthode de calcul des réserves internationales', 'iscorrect' => false],
                            ['answer' => 'Un mécanisme uniquement lié aux exportations', 'iscorrect' => false],
                            ['answer' => 'Une règle de fixation des salaires publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le canal du crédit bancaire peut-il être amplifié lorsque les banques sont fortement contraintes en capital ?',
                        'answers' => [
                            ['answer' => Une contrainte de capital peut limiter la capacité des banques à développer leur bilan lorsque la demande de crédit augmente', 'iscorrect' => true],
                            ['answer' => 'Le capital n’a aucun rapport avec la capacité de prêt', 'iscorrect' => false],
                            ['answer' => 'Une faible capitalisation pousse toujours les banques à prêter davantage sans risque', 'iscorrect' => false],
                            ['answer' => 'Les banques peuvent créer des prêts sans aucune contrainte réglementaire ou économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions financières peuvent-elles se resserrer même si le taux directeur reste inchangé ?',
                        'answers' => [
                            ['answer' => 'Les primes de risque, spreads de crédit, anticipations et prix d’actifs peuvent changer indépendamment du taux directeur', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur contrôle mécaniquement tous les taux', 'iscorrect' => false],
                            ['answer' => 'Les spreads sont toujours constants', 'iscorrect' => false],
                            ['answer' => 'Les marchés financiers ne réagissent jamais aux risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire peut-elle avoir des effets hétérogènes sur les ménages ?',
                        'answers' => [
                            ['answer' => 'Les ménages diffèrent par leur endettement, leurs actifs, leurs revenus et leur sensibilité aux taux', 'iscorrect' => true],
                            ['answer' => 'Tous les ménages ont toujours le même bilan', 'iscorrect' => false],
                            ['answer' => 'Les taux affectent uniquement les ménages riches', 'iscorrect' => false],
                            ['answer' => 'Les actifs financiers n’ont aucun effet sur les dépenses des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais de transmission compliquent-ils le pilotage monétaire ?',
                        'answers' => [
                            ['answer' => 'Une décision actuelle affecte progressivement la demande et les prix, tandis que les données disponibles décrivent souvent le passé', 'iscorrect' => true],
                            ['answer' => 'Les décisions monétaires sont toujours instantanément neutres', 'iscorrect' => false],
                            ['answer' => 'L’inflation réagit avant toute décision de politique', 'iscorrect' => false],
                            ['answer' => 'Les délais n’existent que dans les économies fermées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations peuvent-elles renforcer ou affaiblir l’effet d’une décision de taux ?',
                        'answers' => [
                            ['answer' => 'Les agents réagissent non seulement au taux actuel mais aussi à ce qu’ils anticipent concernant la trajectoire future de la politique', 'iscorrect' => true],
                            ['answer' => 'Les anticipations portent uniquement sur les exportations', 'iscorrect' => false],
                            ['answer' => 'Les agents ignorent toujours les annonces futures', 'iscorrect' => false],
                            ['answer' => 'Les taux futurs n’influencent jamais les décisions présentes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure financière d’une économie affecte-t-elle la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Une économie dominée par le crédit bancaire transmet les changements de taux différemment d’une économie davantage financée par les marchés', 'iscorrect' => true],
                            ['answer' => 'La structure financière est sans rapport avec la transmission', 'iscorrect' => false],
                            ['answer' => 'Toutes les économies utilisent toujours le même système de financement', 'iscorrect' => false],
                            ['answer' => 'Les banques et marchés ont toujours des réactions identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le canal du taux de change est-il particulièrement important dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Une variation du taux de change modifie les prix relatifs, la compétitivité, les importations et potentiellement l’inflation', 'iscorrect' => true],
                            ['answer' => 'Le taux de change n’affecte jamais les prix importés', 'iscorrect' => false],
                            ['answer' => 'Les exportations ne réagissent jamais aux prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Les économies ouvertes n’ont aucune politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le même taux directeur peut-il correspondre à des conditions financières différentes selon les périodes ?',
                        'answers' => [
                            ['answer' => 'Les primes de risque, anticipations d’inflation, croissance attendue et stress financier peuvent modifier les conditions de financement', 'iscorrect' => true],
                            ['answer' => 'Le taux directeur fixe toujours exactement tous les coûts de financement', 'iscorrect' => false],
                            ['answer' => 'Les risques n’affectent jamais les taux de marché', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation, anticipations et politique monétaire',
                'questions' => [
                    [
                        'question' => Pourquoi une banque centrale crédible peut-elle réduire le coût d’une désinflation ?',
                        'answers' => [
                            ['answer' => 'Des anticipations d’inflation mieux ancrées peuvent limiter les ajustements de prix et de salaires fondés sur une inflation persistante', 'iscorrect' => true],
                            ['answer' => 'La crédibilité rend automatiquement tous les prix constants', 'iscorrect' => false],
                            ['answer' => 'Les agents cessent de former des anticipations', 'iscorrect' => false],
                            ['answer' => 'La banque centrale contrôle directement tous les contrats privés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce qu’une désancrage des anticipations d’inflation ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle les anticipations s’éloignent durablement de l’objectif de stabilité des prix', 'iscorrect' => true],
                            ['answer' => 'Une baisse automatique de toutes les anticipations', 'iscorrect' => false],
                            ['answer' => 'Une hausse de la productivité', 'iscorrect' => false],
                            ['answer' => 'Un changement du taux de change nominal uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une spirale prix-salaires peut-elle devenir auto-renforçante ?',
                        'answers' => [
                            ['answer' => 'Des hausses de salaires anticipées peuvent alimenter les coûts, les prix et de nouvelles demandes salariales', 'iscorrect' => true],
                            ['answer' => 'Les salaires et prix sont toujours indépendants', 'iscorrect' => false],
                            ['answer' => 'Une hausse des salaires réduit toujours les prix', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne fixent jamais leurs prix en fonction des coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un choc d’offre peut-il rendre la politique monétaire particulièrement difficile ?',
                        'answers' => [
                            ['answer' => 'Il peut accroître l’inflation tout en réduisant la production, créant un arbitrage entre stabilisation des prix et activité', 'iscorrect' => true],
                            ['answer' => 'Les chocs d’offre affectent uniquement le PIB potentiel', 'iscorrect' => false],
                            ['answer' => 'Ils n’ont jamais d’effet sur les prix', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours la production et réduisent toujours l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations adaptatives et prospectives peuvent-elles conduire à des dynamiques d’inflation différentes ?',
                        'answers' => [
                            ['answer' => 'Elles reposent sur des mécanismes différents de formation des anticipations et de réaction aux informations futures', 'iscorrect' => true],
                            ['answer' => 'Les deux concepts sont strictement identiques', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n’affectent jamais l’inflation', 'iscorrect' => false],
                            ['answer' => 'Une seule forme d’anticipation existe toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse durable de l’inflation peut-elle modifier les contrats nominaux ?',
                        'answers' => [
                            ['answer' => 'Les agents cherchent à intégrer les anticipations de prix dans les salaires, loyers, dettes et autres contrats', 'iscorrect' => true],
                            ['answer' => 'Les contrats nominaux ignorent toujours l’inflation', 'iscorrect' => false],
                            ['answer' => 'L’inflation rend tous les contrats réels', 'iscorrect' => false],
                            ['answer' => 'Les agents ne peuvent jamais modifier les contrats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’inflation attendue peut-elle influencer le taux d’intérêt nominal ?',
                        'answers' => [
                            ['answer' => 'Les prêteurs prennent en compte l’érosion anticipée du pouvoir d’achat lorsqu’ils fixent le rendement nominal', 'iscorrect' => true],
                            ['answer' => 'Les taux nominaux ne dépendent jamais des anticipations', 'iscorrect' => false],
                            ['answer' => 'L’inflation attendue réduit toujours le rendement nominal demandé', 'iscorrect' => false],
                            ['answer' => 'Les prêteurs ne se préoccupent que des prix passés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle réagir à une inflation de second tour plutôt qu’à un choc initial ?',
                        'answers' => [
                            ['answer' => 'Elle peut chercher à empêcher qu’un choc temporaire se propage dans les salaires, prix et anticipations', 'iscorrect' => true],
                            ['answer' => 'Les chocs initiaux n’ont jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire contrôle directement le prix du pétrole', 'iscorrect' => false],
                            ['answer' => 'Les effets de second tour sont toujours absents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une inflation très volatile peut-elle compliquer la communication de la banque centrale ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent avoir plus de difficulté à distinguer les chocs temporaires des tendances persistantes', 'iscorrect' => true],
                            ['answer' => 'La volatilité rend automatiquement les anticipations plus précises', 'iscorrect' => false],
                            ['answer' => 'Une inflation volatile n’affecte jamais les anticipations', 'iscorrect' => false],
                            ['answer' => 'La banque centrale peut connaître avec certitude tous les chocs futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la crédibilité peut-elle être considérée comme un actif institutionnel ?',
                        'answers' => [
                            ['answer' => 'Une bonne crédibilité réduit les coûts de communication et peut stabiliser les anticipations autour de l’objectif annoncé', 'iscorrect' => true],
                            ['answer' => 'La crédibilité est une réserve financière détenue dans les coffres', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les décisions monétaires', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une inflation exactement nulle', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Règles monétaires et stratégie de banque centrale',
                'questions' => [
                    [
                        'question' => Quel est le principe général d’une règle de Taylor simplifiée ?',
                        'answers' => [
                            ['answer' => 'Faire varier le taux directeur en fonction notamment de l’écart d’inflation et de l’activité par rapport à certaines références', 'iscorrect' => true],
                            ['answer' => 'Fixer le taux sans tenir compte de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Relier uniquement le taux directeur au taux de change', 'iscorrect' => false],
                            ['answer' => 'Maintenir toujours le taux à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une règle monétaire peut-elle renforcer la prévisibilité de la politique ?',
                        'answers' => [
                            ['answer' => 'Elle fournit une fonction systématique reliant les instruments à certaines conditions économiques', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toute discrétion nécessaire', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours la valeur exacte de l’inflation future', 'iscorrect' => false],
                            ['answer' => 'Elle interdit toute adaptation aux crises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle ne pas suivre mécaniquement une règle de Taylor ?',
                        'answers' => [
                            ['answer' => 'Les paramètres sont incertains et certains chocs ou contraintes financières peuvent nécessiter une réaction différente', 'iscorrect' => true],
                            ['answer' => 'Les règles monétaires sont toujours juridiquement obligatoires dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales ne tiennent jamais compte des marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Une règle ne peut jamais être utilisée comme repère analytique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le taux d’intérêt réel neutre ou r-star est-il important dans l’analyse monétaire ?',
                        'answers' => [
                            ['answer' => 'Il sert de référence conceptuelle pour déterminer si la politique monétaire est relativement accommodante ou restrictive', 'iscorrect' => true],
                            ['answer' => 'Il correspond toujours au taux d’inflation observé', 'iscorrect' => false],
                            ['answer' => 'Il est directement observable avec certitude', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement le risque bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’incertitude sur le taux naturel peut-elle compliquer les décisions de politique monétaire ?',
                        'answers' => [
                            ['answer' => 'La banque centrale ne sait pas exactement si le niveau actuel du taux réel est au-dessus ou au-dessous du niveau neutre', 'iscorrect' => true],
                            ['answer' => 'Le taux naturel est toujours directement observé', 'iscorrect' => false],
                            ['answer' => 'L’incertitude réduit toujours le besoin de politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Le taux neutre est fixé légalement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le principe de Taylor est-il utile même avec une estimation incertaine des paramètres ?',
                        'answers' => [
                            ['answer' => 'Il offre un cadre de référence pour analyser la cohérence d’une orientation monétaire avec l’inflation et l’activité', 'iscorrect' => true],
                            ['answer' => 'Il fournit toujours le taux optimal exact', 'iscorrect' => false],
                            ['answer' => 'Il remplace les modèles macroéconomiques', 'iscorrect' => false],
                            ['answer' => 'Il garantit automatiquement la stabilité financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une règle de niveau des prix diffère-t-elle d’un ciblage de l’inflation ?',
                        'answers' => [
                            ['answer' => 'Le ciblage du niveau des prix cherche à corriger les écarts passés du niveau des prix, alors que le ciblage d’inflation se concentre principalement sur le rythme futur de hausse des prix', 'iscorrect' => true],
                            ['answer' => 'Les deux régimes sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Le ciblage du niveau des prix ignore totalement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Le ciblage d’inflation fixe directement le niveau des prix chaque année', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un ciblage d’inflation flexible tient-il aussi compte de l’activité économique ?',
                        'answers' => [
                            ['answer' => 'Parce que le retour de l’inflation vers la cible peut être poursuivi tout en limitant, lorsque le mandat le permet, les fluctuations excessives de production et d’emploi', 'iscorrect' => true],
                            ['answer' => 'Parce que la stabilité des prix est abandonnée', 'iscorrect' => false],
                            ['answer' => 'Parce que l’inflation devient secondaire dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Parce que l’activité économique n’a aucun rapport avec l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la forward guidance peut-elle influencer les taux à long terme ?',
                        'answers' => [
                            ['answer' => 'Les rendements longs intègrent notamment les anticipations concernant les taux courts futurs et certaines primes de terme', 'iscorrect' => true],
                            ['answer' => 'Les taux longs ne dépendent jamais des anticipations', 'iscorrect' => false],
                            ['answer' => 'La communication fixe juridiquement tous les taux futurs', 'iscorrect' => false],
                            ['answer' => 'Les marchés ignorent toujours les annonces de la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la communication de politique monétaire doit-elle éviter des engagements irréalistes ?',
                        'answers' => [
                            ['answer' => 'Un engagement qui devient incompatible avec l’évolution des données peut réduire la crédibilité et compliquer les anticipations', 'iscorrect' => true],
                            ['answer' => 'Les engagements irréalistes augmentent toujours la crédibilité', 'iscorrect' => false],
                            ['answer' => 'Les agents ne tiennent jamais compte des annonces', 'iscorrect' => false],
                            ['answer' => 'La crédibilité est indépendante de la cohérence entre paroles et actions', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Création monétaire et bilans bancaires',
                'questions' => [
                    [
                        'question' => Pourquoi l’octroi d’un prêt bancaire crée-t-il généralement un nouvel actif et un nouveau passif au bilan ?',
                        'answers' => [
                            ['answer' => 'Le prêt constitue une créance pour la banque tandis que le dépôt correspondant constitue une dette envers le client', 'iscorrect' => true],
                            ['answer' => 'Le prêt n’affecte jamais le bilan', 'iscorrect' => false],
                            ['answer' => 'Le dépôt est une immobilisation détenue par la banque', 'iscorrect' => false],
                            ['answer' => 'La banque transfère nécessairement des billets existants sans créer de dépôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le remboursement du principal d’un crédit détruit-il généralement de la monnaie bancaire ?',
                        'answers' => [
                            ['answer' => 'Le remboursement réduit simultanément la créance de la banque et le dépôt associé au processus initial de création monétaire', 'iscorrect' => true],
                            ['answer' => 'Le remboursement crée toujours deux nouveaux dépôts', 'iscorrect' => false],
                            ['answer' => 'Le remboursement augmente automatiquement la base monétaire', 'iscorrect' => false],
                            ['answer' => 'Les dépôts ne peuvent jamais être détruits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une vente d’actifs par une banque centrale peut-elle réduire les réserves bancaires ?',
                        'answers' => [
                            ['answer' => 'Le paiement des actifs à la banque centrale peut transférer des réserves du système bancaire vers le passif de la banque centrale', 'iscorrect' => true],
                            ['answer' => 'Une vente d’actifs augmente toujours les réserves', 'iscorrect' => false],
                            ['answer' => 'Les réserves ne changent jamais avec les opérations de marché', 'iscorrect' => false],
                            ['answer' => 'La banque centrale détruit toujours les dépôts des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la banque centrale peut-elle rémunérer les réserves ?',
                        'answers' => [
                            ['answer' => 'La rémunération des réserves peut contribuer à piloter les taux du marché monétaire en donnant un rendement de référence aux liquidités bancaires', 'iscorrect' => true],
                            ['answer' => 'Elle transforme les réserves en capital bancaire', 'iscorrect' => false],
                            ['answer' => 'Elle rend les banques insolvables par définition', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun rapport avec le corridor ou la gestion des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les réserves ne sont-elles pas simplement équivalentes aux prêts accordés aux ménages ?',
                        'answers' => [
                            ['answer' => 'Les réserves sont des actifs liquides détenus dans le système de banque centrale, tandis que les prêts sont des créances sur des emprunteurs', 'iscorrect' => true],
                            ['answer' => 'Les deux éléments sont toujours identiques au bilan', 'iscorrect' => false],
                            ['answer' => 'Les réserves sont toujours des crédits à la consommation', 'iscorrect' => false],
                            ['answer' => 'Les prêts sont des passifs de la banque envers la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les banques doivent-elles gérer simultanément liquidité et rentabilité ?',
                        'answers' => [
                            ['answer' => 'Les actifs très liquides sont généralement moins rémunérateurs que certains prêts ou placements plus risqués', 'iscorrect' => true],
                            ['answer' => 'La liquidité et la rentabilité sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Les banques ne supportent jamais de coût d’opportunité', 'iscorrect' => false],
                            ['answer' => 'La rentabilité augmente toujours lorsque la liquidité augmente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte transformation des maturités peut-elle accroître le risque bancaire ?',
                        'answers' => [
                            ['answer' => 'Des passifs courts peuvent financer des actifs longs difficiles à liquider rapidement sans pertes', 'iscorrect' => true],
                            ['answer' => 'Les actifs longs sont toujours plus liquides que les dépôts', 'iscorrect' => false],
                            ['answer' => 'La maturité n’a aucun rôle dans le risque de liquidité', 'iscorrect' => false],
                            ['answer' => 'Les banques peuvent toujours vendre des actifs sans variation de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le capital bancaire peut-il amplifier les contraintes de crédit pendant une crise ?',
                        'answers' => [
                            ['answer' => 'Les pertes réduisent les fonds propres et peuvent limiter la croissance du bilan lorsqu’un ratio de capital doit être respecté', 'iscorrect' => true],
                            ['answer' => 'Les pertes augmentent toujours les fonds propres', 'iscorrect' => false],
                            ['answer' => 'Le capital bancaire n’a aucune relation avec les actifs pondérés', 'iscorrect' => false],
                            ['answer' => 'Une crise améliore toujours la capacité de prêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le risque de retrait massif des dépôts peut-il pousser une banque à réduire rapidement son bilan ?',
                        'answers' => [
                            ['answer' => 'Elle peut devoir vendre des actifs, emprunter de la liquidité ou réduire les nouveaux crédits pour honorer les sorties', 'iscorrect' => true],
                            ['answer' => 'Les retraits augmentent automatiquement les réserves de la banque', 'iscorrect' => false],
                            ['answer' => 'Une banque peut ignorer les retraits sans conséquence', 'iscorrect' => false],
                            ['answer' => 'Les dépôts ne sont jamais des passifs à court terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire restrictive peut-elle agir via les bilans bancaires avant d’affecter pleinement la production ?',
                        'answers' => [
                            ['answer' => 'Les conditions de financement, valorisations d’actifs et risques de crédit peuvent changer rapidement avant que les dépenses réelles ne s’ajustent', 'iscorrect' => true],
                            ['answer' => 'La production réagit toujours avant les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Les banques sont totalement isolées de la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Les bilans bancaires ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monnaie et stabilité financière systémique',
                'questions' => [
                    [
                        'question' => Qu’est-ce que le risque systémique ?',
                        'answers' => [
                            ['answer' => 'Le risque qu’une perturbation financière se propage et compromette une partie importante du système financier ou de l’économie', 'iscorrect' => true],
                            ['answer' => 'Le risque propre à un seul prêt sans effet extérieur', 'iscorrect' => false],
                            ['answer' => 'Le risque uniquement lié aux exportations', 'iscorrect' => false],
                            ['answer' => 'Le risque d’inflation individuelle d’un ménage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les interconnexions financières peuvent-elles amplifier une crise ?',
                        'answers' => [
                            ['answer' => 'Les pertes d’une institution peuvent affecter ses contreparties, la liquidité du marché et la confiance des autres acteurs', 'iscorrect' => true],
                            ['answer' => 'Les institutions financières sont totalement indépendantes', 'iscorrect' => false],
                            ['answer' => 'Les pertes restent toujours confinées à l’emprunteur initial', 'iscorrect' => false],
                            ['answer' => 'Les marchés interbancaires empêchent toute propagation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque saine peut-elle subir une crise de liquidité ?',
                        'answers' => [
                            ['answer' => 'Ses actifs peuvent être solides à long terme alors que des sorties de financement à court terme dépassent sa liquidité disponible', 'iscorrect' => true],
                            ['answer' => 'Une banque saine possède toujours immédiatement assez de liquidité pour tout scénario', 'iscorrect' => false],
                            ['answer' => 'La solvabilité garantit automatiquement la liquidité', 'iscorrect' => false],
                            ['answer' => 'Une banque saine ne peut jamais perdre la confiance des déposants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la vente forcée d’actifs peut-elle créer une boucle de rétroaction négative ?',
                        'answers' => [
                            ['answer' => 'Les ventes rapides peuvent faire baisser les prix d’actifs, réduire les bilans et provoquer de nouvelles ventes', 'iscorrect' => true],
                            ['answer' => 'Les ventes forcées augmentent toujours les prix', 'iscorrect' => false],
                            ['answer' => 'Les prix d’actifs sont indépendants des ventes', 'iscorrect' => false],
                            ['answer' => 'Une vente d’actifs augmente toujours la capitalisation bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le levier est-il important dans l’analyse de la stabilité bancaire ?',
                        'answers' => [
                            ['answer' => 'Un niveau élevé de levier signifie qu’une variation relativement faible de la valeur des actifs peut entraîner une variation importante des fonds propres', 'iscorrect' => true],
                            ['answer' => 'Le levier protège toujours contre les pertes', 'iscorrect' => false],
                            ['answer' => 'Le levier réduit automatiquement le risque systémique', 'iscorrect' => false],
                            ['answer' => 'Les fonds propres n’ont aucune relation avec le levier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les outils macroprudentiels sont-ils distincts du taux directeur ?',
                        'answers' => [
                            ['answer' => 'Ils ciblent directement certaines vulnérabilités financières, comme le levier, la liquidité ou l’accumulation de crédit', 'iscorrect' => true],
                            ['answer' => 'Ils servent uniquement à fixer l’inflation', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toujours la politique monétaire', 'iscorrect' => false],
                            ['answer' => 'Ils n’ont aucun rapport avec la stabilité financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi des exigences contracycliques de capital peuvent-elles être utilisées ?',
                        'answers' => [
                            ['answer' => 'Pour renforcer les coussins de capital pendant les phases d’expansion du crédit et disposer d’une marge en période de stress', 'iscorrect' => true],
                            ['answer' => 'Pour réduire les fonds propres pendant les crises', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher tout crédit en permanence', 'iscorrect' => false],
                            ['answer' => 'Pour garantir qu’aucune banque ne puisse jamais faire faillite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le « too big to fail » constitue-t-il un problème d’incitation ?',
                        'answers' => [
                            ['answer' => 'L’anticipation d’un soutien public peut encourager une prise de risque excessive si les pertes sont partiellement socialisées', 'iscorrect' => true],
                            ['answer' => 'Le soutien public réduit toujours le risque moral', 'iscorrect' => false],
                            ['answer' => 'Les grandes banques sont toujours sans risque', 'iscorrect' => false],
                            ['answer' => 'La taille bancaire n’a aucun effet sur les incitations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la stabilité financière peut-elle influencer l’efficacité de la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Un système financier fragilisé peut transmettre plus faiblement ou plus fortement les décisions de taux selon les contraintes de bilan et de crédit', 'iscorrect' => true],
                            ['answer' => 'La stabilité financière n’a jamais de lien avec les conditions de crédit', 'iscorrect' => false],
                            ['answer' => 'Les banques continuent toujours à prêter au même coût quelle que soit leur situation', 'iscorrect' => false],
                            ['answer' => 'Les marchés financiers ignorent toujours les décisions monétaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle devoir arbitrer entre soutien de liquidité et risque moral ?',
                        'answers' => [
                            ['answer' => 'Fournir de la liquidité peut limiter une crise mais, si le soutien est mal conçu, peut réduire les incitations à gérer correctement les risques', 'iscorrect' => true],
                            ['answer' => 'La liquidité ne peut jamais réduire une crise', 'iscorrect' => false],
                            ['answer' => 'Le risque moral disparaît automatiquement avec toute intervention', 'iscorrect' => false],
                            ['answer' => 'Une banque centrale ne peut jamais prêter aux banques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire en économie ouverte',
                'questions' => [
                    [
                        'question' => Pourquoi une baisse des taux domestiques peut-elle entraîner une dépréciation de la monnaie ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire l’attractivité relative des actifs domestiques et provoquer des sorties de capitaux selon les anticipations et le risque', 'iscorrect' => true],
                            ['answer' => 'Une baisse des taux augmente toujours la demande de monnaie domestique', 'iscorrect' => false],
                            ['answer' => 'Les taux domestiques n’ont aucun effet sur les mouvements de capitaux', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est toujours fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation peut-elle accroître l’inflation importée ?',
                        'answers' => [
                            ['answer' => 'Les biens, services et intrants importés peuvent coûter davantage en monnaie domestique', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours les prix des importations', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’a aucun effet sur les prix importés', 'iscorrect' => false],
                            ['answer' => 'Les importations sont indépendantes de la monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale d’une petite économie ouverte doit-elle surveiller les conditions monétaires étrangères ?',
                        'answers' => [
                            ['answer' => 'Les taux mondiaux peuvent influencer les flux de capitaux, le taux de change et les conditions financières domestiques', 'iscorrect' => true],
                            ['answer' => 'Les petites économies sont totalement isolées des marchés mondiaux', 'iscorrect' => false],
                            ['answer' => 'Les taux étrangers ne concernent jamais les investisseurs domestiques', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne réagit jamais aux écarts de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la parité non couverte des taux d’intérêt ne doit-elle pas être interprétée comme une loi exacte ?',
                        'answers' => [
                            ['answer' => 'Les primes de risque, erreurs d’anticipation et frictions financières peuvent créer des écarts importants', 'iscorrect' => true],
                            ['answer' => 'Les taux d’intérêt sont toujours parfaitement égaux mondialement', 'iscorrect' => false],
                            ['answer' => 'Les anticipations de change sont toujours exactes', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ne prennent jamais de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la mobilité internationale des capitaux complique-t-elle la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les écarts de rendement peuvent provoquer des flux rapides qui influencent le taux de change et les conditions financières', 'iscorrect' => true],
                            ['answer' => 'Les capitaux internationaux sont toujours parfaitement immobiles', 'iscorrect' => false],
                            ['answer' => 'Les flux de capitaux n’affectent jamais les banques', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est indépendant des flux financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une intervention sur le marché des changes peut-elle avoir des effets monétaires différents selon qu’elle est stérilisée ou non ?',
                        'answers' => [
                            ['answer' => 'La stérilisation cherche à compenser l’effet de l’intervention sur la liquidité domestique et les agrégats monétaires', 'iscorrect' => true],
                            ['answer' => 'La stérilisation augmente toujours directement la masse monétaire', 'iscorrect' => false],
                            ['answer' => 'Une intervention stérilisée n’implique jamais de transaction en devises', 'iscorrect' => false],
                            ['answer' => 'Les deux types d’intervention ont toujours exactement le même effet monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un régime de change fixe peut-il exiger des taux domestiques proches des taux internationaux ?',
                        'answers' => [
                            ['answer' => 'Des écarts importants peuvent déclencher des arbitrages et des flux de capitaux incompatibles avec le maintien durable de la parité', 'iscorrect' => true],
                            ['answer' => 'Les taux domestiques et étrangers sont toujours identiques par définition', 'iscorrect' => false],
                            ['answer' => 'Les capitaux ne traversent jamais les frontières', 'iscorrect' => false],
                            ['answer' => 'Le taux fixe élimine les arbitrages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation réelle peut-elle améliorer temporairement la demande extérieure tout en détériorant certains bilans ?',
                        'answers' => [
                            ['answer' => 'Elle peut stimuler les exportations mais augmenter simultanément le poids en monnaie domestique des dettes libellées en devises', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation améliore tous les bilans sans exception', 'iscorrect' => false],
                            ['answer' => 'Les dettes en devises diminuent toujours en monnaie nationale', 'iscorrect' => false],
                            ['answer' => 'Les exportations diminuent toujours après une dépréciation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les conditions financières mondiales peuvent-elles dominer une partie de la politique monétaire domestique ?',
                        'answers' => [
                            ['answer' => 'Une économie fortement intégrée aux marchés mondiaux peut subir des variations importantes des primes de risque, flux de capitaux et taux internationaux', 'iscorrect' => true],
                            ['answer' => 'Les marchés internationaux n’affectent jamais les économies ouvertes', 'iscorrect' => false],
                            ['answer' => 'Les banques domestiques sont toujours indépendantes des conditions mondiales', 'iscorrect' => false],
                            ['answer' => 'Les flux de capitaux sont toujours stables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le trilemme monétaire reste-t-il utile pour analyser les régimes de change ?',
                        'answers' => [
                            ['answer' => 'Il montre la difficulté de combiner simultanément change fixe, mobilité totale des capitaux et autonomie monétaire', 'iscorrect' => true],
                            ['answer' => 'Il prouve que les trois objectifs sont toujours compatibles', 'iscorrect' => false],
                            ['answer' => 'Il concerne uniquement la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Il élimine le besoin d’analyser les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse quantitative de l’inflation et de la monnaie',
                'questions' => [
                    [
                        'question' => Pourquoi l’identité MV = PY ne suffit-elle pas à prédire directement l’inflation à court terme ?',
                        'answers' => [
                            ['answer' => 'La vitesse de circulation et la production peuvent varier, et la relation comptable ne fournit pas à elle seule une théorie complète des prix', 'iscorrect' => true],
                            ['answer' => 'M est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Y est nécessairement constant à toutes les périodes', 'iscorrect' => false],
                            ['answer' => 'V est toujours exactement égal à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Dans quelle condition simplifiée la croissance de la monnaie peut-elle être liée à l’inflation à long terme ?',
                        'answers' => [
                            ['answer' => 'Lorsque la vitesse et la croissance réelle sont relativement stables, une croissance monétaire durablement supérieure à la croissance réelle peut exercer des pressions sur les prix', 'iscorrect' => true],
                            ['answer' => 'Lorsque la production augmente toujours plus vite que la monnaie', 'iscorrect' => false],
                            ['answer' => 'Lorsque la vitesse est infinie', 'iscorrect' => false],
                            ['answer' => 'Lorsque les prix sont administrés en permanence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la croissance potentielle de l’économie est-elle importante dans l’analyse de l’inflation ?',
                        'answers' => [
                            ['answer' => 'Une demande nominale donnée peut produire davantage de pressions inflationnistes lorsque la capacité productive est fortement contrainte', 'iscorrect' => true],
                            ['answer' => 'La production potentielle n’a aucun lien avec les tensions de prix', 'iscorrect' => false],
                            ['answer' => 'Une économie plus productive est toujours plus inflationniste', 'iscorrect' => false],
                            ['answer' => 'La capacité productive est fixe pour toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le gap de production est-il utile pour l’analyse de la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Il fournit une mesure conceptuelle de l’écart entre production observée et production potentielle, utile pour évaluer les pressions de demande', 'iscorrect' => true],
                            ['answer' => 'Il mesure directement le taux de change', 'iscorrect' => false],
                            ['answer' => 'Il remplace toutes les mesures d’inflation', 'iscorrect' => false],
                            ['answer' => 'Il est toujours directement observable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une économie peut-elle connaître une inflation élevée malgré une croissance monétaire modérée ?',
                        'answers' => [
                            ['answer' => 'Des chocs d’offre, une accélération de la vitesse, des anticipations ou des contraintes de capacité peuvent aussi jouer un rôle', 'iscorrect' => true],
                            ['answer' => 'La croissance monétaire est la seule variable possible', 'iscorrect' => false],
                            ['answer' => 'Les prix ne réagissent jamais aux coûts', 'iscorrect' => false],
                            ['answer' => 'Les anticipations sont toujours constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la vitesse de circulation peut-elle augmenter pendant certaines périodes de forte confiance ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent réduire leur préférence pour la liquidité et effectuer davantage de transactions avec une même quantité de monnaie', 'iscorrect' => true],
                            ['answer' => 'La confiance réduit toujours les transactions', 'iscorrect' => false],
                            ['answer' => 'La vitesse est fixée par la banque centrale', 'iscorrect' => false],
                            ['answer' => 'La monnaie ne circule jamais entre les agents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les innovations de paiement peuvent-elles modifier les statistiques monétaires ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent changer la liquidité relative de différents actifs et les comportements de détention et de transaction', 'iscorrect' => true],
                            ['answer' => 'Les moyens de paiement sont indépendants des actifs financiers', 'iscorrect' => false],
                            ['answer' => 'L’innovation rend toujours tous les actifs parfaitement équivalents', 'iscorrect' => false],
                            ['answer' => 'Les statistiques monétaires n’évoluent jamais avec les technologies', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte croissance de M2 ne permet-elle pas à elle seule de conclure à une forte inflation future ?',
                        'answers' => [
                            ['answer' => 'La vitesse de circulation, la demande de monnaie, le crédit, la production et d’autres variables peuvent évoluer simultanément', 'iscorrect' => true],
                            ['answer' => 'M2 est toujours parfaitement stable', 'iscorrect' => false],
                            ['answer' => 'L’inflation dépend uniquement du stock de monnaie', 'iscorrect' => false],
                            ['answer' => 'La production réelle ne change jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’inflation sous-jacente peut-elle être utile à la banque centrale ?',
                        'answers' => [
                            ['answer' => 'Elle peut aider à distinguer certaines composantes plus volatiles des tendances plus persistantes de l’évolution des prix', 'iscorrect' => true],
                            ['answer' => 'Elle exclut automatiquement toute inflation', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les autres mesures de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une inflation mesurée peut-elle différer de l’inflation ressentie par les ménages ?',
                        'answers' => [
                            ['answer' => 'La composition du panier individuel de consommation peut différer du panier statistique moyen', 'iscorrect' => true],
                            ['answer' => 'Les ménages font toujours exactement les mêmes achats', 'iscorrect' => false],
                            ['answer' => 'Les indices de prix mesurent uniquement les salaires', 'iscorrect' => false],
                            ['answer' => 'L’inflation officielle est nécessairement identique pour chaque ménage', 'iscorrect' => false],
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

                // Mélange des réponses : la bonne réponse n'est jamais systématiquement en première position.
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
