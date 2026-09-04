```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InternationalEconomicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'international-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Avantage comparatif et gains du commerce',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’avantage comparatif est-il fondé sur le coût d’opportunité ?',
                        'answers' => [
                            ['answer' => 'Parce qu’il mesure ce à quoi un pays renonce lorsqu’il réalloue ses ressources vers une autre production', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il dépend uniquement du prix de marché', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il est identique à l’avantage absolu', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il ignore les ressources disponibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le pays A renonce à 2 unités de blé pour produire une unité de textile et le pays B renonce à 4 unités de blé, quel pays possède l’avantage comparatif dans le textile ?',
                        'answers' => [
                            ['answer' => 'Le pays A', 'iscorrect' => true],
                            ['answer' => 'Le pays B', 'iscorrect' => false],
                            ['answer' => 'Les deux pays', 'iscorrect' => false],
                            ['answer' => 'Aucun pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle simple à deux biens, pourquoi l’ouverture au commerce peut-elle permettre une consommation située au-delà de la frontière des possibilités de production ?',
                        'answers' => [
                            ['answer' => 'L’échange permet d’accéder à des combinaisons de biens qui ne seraient pas réalisables avec les seules ressources domestiques', 'iscorrect' => true],
                            ['answer' => 'Le commerce augmente automatiquement les ressources physiques nationales', 'iscorrect' => false],
                            ['answer' => 'Les coûts d’opportunité deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Les frontières de production disparaissent juridiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le prix relatif d’un bien dans un modèle à deux biens ?',
                        'answers' => [
                            ['answer' => 'La quantité d’un bien échangée contre une unité de l’autre bien', 'iscorrect' => true],
                            ['answer' => 'Le prix monétaire absolu uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt réel', 'iscorrect' => false],
                            ['answer' => 'Le niveau général des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les termes de l’échange sont-ils liés au prix relatif des exportations par rapport aux importations ?',
                        'answers' => [
                            ['answer' => 'Ils indiquent combien de biens importés peuvent être obtenus en échange d’une quantité donnée de biens exportés', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent uniquement les volumes exportés', 'iscorrect' => false],
                            ['answer' => 'Ils sont indépendants des prix internationaux', 'iscorrect' => false],
                            ['answer' => 'Ils représentent uniquement le taux de change nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration des termes de l’échange peut-elle augmenter le pouvoir d’achat externe d’un pays ?',
                        'answers' => [
                            ['answer' => 'Le pays peut obtenir davantage de biens importés pour une quantité donnée d’exportations', 'iscorrect' => true],
                            ['answer' => 'Le pays produit nécessairement plus de toutes les marchandises', 'iscorrect' => false],
                            ['answer' => 'Les salaires domestiques doublent automatiquement', 'iscorrect' => false],
                            ['answer' => 'Les importations deviennent nécessairement nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gains du commerce ne signifient-ils pas que chaque groupe gagne nécessairement ?',
                        'answers' => [
                            ['answer' => 'Le commerce peut créer des gains agrégés tout en redistribuant les revenus entre secteurs et facteurs de production', 'iscorrect' => true],
                            ['answer' => 'Les gains du commerce sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Tous les facteurs gagnent exactement le même montant', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne modifie jamais les revenus sectoriels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mobilité des facteurs peut-elle influencer les effets distributifs du commerce ?',
                        'answers' => [
                            ['answer' => 'Elle détermine la facilité avec laquelle le capital ou le travail peut se déplacer entre secteurs', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toujours les différences salariales', 'iscorrect' => false],
                            ['answer' => 'Elle rend les coûts de transport nuls', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute spécialisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut réduire les gains attendus du commerce par rapport à un modèle théorique simple ?',
                        'answers' => [
                            ['answer' => 'Les coûts de transport, les barrières commerciales et l’information imparfaite', 'iscorrect' => true],
                            ['answer' => 'Une spécialisation plus efficace', 'iscorrect' => false],
                            ['answer' => 'Une meilleure infrastructure', 'iscorrect' => false],
                            ['answer' => 'Une baisse des obstacles au commerce', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays peut-il continuer à importer un bien même s’il est capable de le produire ?',
                        'answers' => [
                            ['answer' => 'Le coût d’opportunité domestique peut être suffisamment élevé pour rendre l’importation plus avantageuse', 'iscorrect' => true],
                            ['answer' => 'Le pays est incapable de produire le bien dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toujours gratuites', 'iscorrect' => false],
                            ['answer' => 'La production domestique est toujours interdite', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèle Heckscher-Ohlin et dotations factorielles',
                'questions' => [
                    [
                        'question' => 'Quelle est l’idée centrale du modèle Heckscher-Ohlin ?',
                        'answers' => [
                            ['answer' => 'Les pays tendent à exporter les biens utilisant intensivement les facteurs dont ils sont relativement abondants', 'iscorrect' => true],
                            ['answer' => 'Chaque pays exporte toujours le bien qu’il consomme le plus', 'iscorrect' => false],
                            ['answer' => 'Les différences technologiques sont la seule source du commerce', 'iscorrect' => false],
                            ['answer' => 'Le commerce dépend uniquement du taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un pays relativement abondant en capital devrait, selon le modèle simple, être relativement plus susceptible d’exporter des biens :',
                        'answers' => [
                            ['answer' => 'Intensifs en capital', 'iscorrect' => true],
                            ['answer' => 'Intensifs uniquement en travail non qualifié', 'iscorrect' => false],
                            ['answer' => 'Qui utilisent zéro capital', 'iscorrect' => false],
                            ['answer' => 'Sans aucun facteur de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien intensif en travail ?',
                        'answers' => [
                            ['answer' => 'Un bien dont la production utilise relativement beaucoup de travail par rapport au capital', 'iscorrect' => true],
                            ['answer' => 'Un bien produit uniquement par des machines', 'iscorrect' => false],
                            ['answer' => 'Un bien dont le prix est toujours faible', 'iscorrect' => false],
                            ['answer' => 'Un bien qui ne nécessite aucune ressource naturelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dotations factorielles peuvent-elles influencer la structure des échanges ?',
                        'answers' => [
                            ['answer' => 'Elles influencent les coûts relatifs de production des différents biens', 'iscorrect' => true],
                            ['answer' => 'Elles déterminent directement le taux de change nominal', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun rapport avec les coûts', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toutes les technologies identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Selon le théorème de Stolper-Samuelson dans le cadre standard, une hausse du prix relatif d’un bien tend à :',
                        'answers' => [
                            ['answer' => Augmenter la rémunération réelle du facteur utilisé intensivement dans sa production', 'iscorrect' => true],
                            ['answer' => 'Réduire toujours les rémunérations de tous les facteurs', 'iscorrect' => false],
                            ['answer' => 'N’avoir aucun effet sur les revenus factoriels', 'iscorrect' => false],
                            ['answer' => 'Modifier uniquement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le commerce peut-il créer des effets distributifs même si le pays gagne au total ?',
                        'answers' => [
                            ['answer' => 'La modification des prix relatifs des biens peut changer la rémunération réelle des facteurs', 'iscorrect' => true],
                            ['answer' => 'Tous les facteurs sont toujours rémunérés de manière identique', 'iscorrect' => false],
                            ['answer' => 'Le commerce n’affecte jamais les prix des biens', 'iscorrect' => false],
                            ['answer' => 'Les facteurs ne peuvent jamais changer de rémunération', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le paradoxe de Leontief ?',
                        'answers' => [
                            ['answer' => 'L’observation empirique selon laquelle les exportations américaines semblaient relativement plus intensives en travail que ce que le modèle Heckscher-Ohlin prédisait', 'iscorrect' => true],
                            ['answer' => 'Le constat que les pays riches n’importent jamais', 'iscorrect' => false],
                            ['answer' => 'Le constat que tous les pays ont les mêmes dotations', 'iscorrect' => false],
                            ['answer' => 'Une preuve que l’avantage comparatif n’existe jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le modèle Heckscher-Ohlin peut-il être trop simplifié pour expliquer certains échanges modernes ?',
                        'answers' => [
                            ['answer' => Les économies d’échelle, la différenciation des produits et les différences technologiques peuvent aussi déterminer le commerce', 'iscorrect' => true],
                            ['answer' => 'Les dotations factorielles n’existent pas', 'iscorrect' => false],
                            ['answer' => 'Le capital et le travail n’existent jamais simultanément', 'iscorrect' => false],
                            ['answer' => 'Le commerce moderne est indépendant de tout coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la convergence des prix des facteurs peut-elle être limitée dans la réalité ?',
                        'answers' => [
                            ['answer' => Les barrières commerciales, différences technologiques, coûts de transport et dotations non identiques peuvent empêcher l’égalisation complète', 'iscorrect' => true],
                            ['answer' => 'Les facteurs sont toujours parfaitement mobiles entre pays', 'iscorrect' => false],
                            ['answer' => 'Tous les pays utilisent exactement les mêmes technologies', 'iscorrect' => false],
                            ['answer' => 'Les salaires ne dépendent jamais de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue la technologie dans l’analyse des avantages commerciaux modernes ?',
                        'answers' => [
                            ['answer' => 'Les écarts de productivité peuvent modifier les coûts relatifs et donc la spécialisation internationale', 'iscorrect' => true],
                            ['answer' => 'La technologie n’affecte jamais la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle agit seulement sur le taux de change', 'iscorrect' => false],
                            ['answer' => 'Elle élimine automatiquement toutes les différences de coûts', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tarifs, quotas et bien-être',
                'questions' => [
                    [
                        'question' => Dans un petit pays importateur, que se passe-t-il généralement après l’instauration d’un tarif ?',
                        'answers' => [
                            ['answer' => 'Le prix intérieur augmente, les importations diminuent et la production domestique augmente', 'iscorrect' => true],
                            ['answer' => 'Le prix intérieur diminue et les importations augmentent', 'iscorrect' => false],
                            ['answer' => 'Le prix mondial augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'La production domestique tombe à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un petit pays, quel acteur reçoit directement le revenu du tarif ?',
                        'answers' => [
                            ['answer' => 'Le gouvernement', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs étrangers', 'iscorrect' => false],
                            ['answer' => 'Les producteurs étrangers', 'iscorrect' => false],
                            ['answer' => 'Les banques commerciales uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un tarif peut-il réduire le surplus du consommateur ?',
                        'answers' => [
                            ['answer' => 'Le prix intérieur augmente et les consommateurs achètent une quantité plus faible', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs reçoivent toujours le revenu du tarif', 'iscorrect' => false],
                            ['answer' => 'Le tarif réduit toujours le prix', 'iscorrect' => false],
                            ['answer' => 'Le tarif augmente toujours la quantité consommée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un tarif peut-il augmenter le surplus du producteur domestique ?',
                        'answers' => [
                            ['answer' => Le prix intérieur plus élevé peut accroître les revenus des producteurs concurrencés par les importations', 'iscorrect' => true],
                            ['answer' => 'Les producteurs paient directement le tarif dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Les producteurs cessent nécessairement de produire', 'iscorrect' => false],
                            ['answer' => 'Le tarif réduit toujours le prix domestique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles sont les deux principales pertes d’efficacité associées à un tarif dans le petit pays standard ?',
                        'answers' => [
                            ['answer' => 'La distorsion de production et la distorsion de consommation', 'iscorrect' => true],
                            ['answer' => 'La baisse des exportations et la hausse des salaires', 'iscorrect' => false],
                            ['answer' => 'La hausse de la productivité et la baisse du prix', 'iscorrect' => false],
                            ['answer' => 'La baisse du chômage et l’augmentation des importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une rente de quota ?',
                        'answers' => [
                            ['answer' => Le revenu supplémentaire créé par la différence entre le prix intérieur et le prix d’accès au marché sur les unités importées sous quota', 'iscorrect' => true],
                            ['answer' => 'La taxe payée par les consommateurs au gouvernement', 'iscorrect' => false],
                            ['answer' => 'Le bénéfice total de tous les producteurs domestiques', 'iscorrect' => false],
                            ['answer' => 'Une subvention aux exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un quota peut-il être équivalent à un tarif dans certaines conditions ?',
                        'answers' => [
                            ['answer' => S’ils conduisent au même niveau d’importations et au même prix intérieur dans un petit pays, les effets économiques peuvent être proches', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un quota est toujours une taxe', 'iscorrect' => false],
                            ['answer' => 'Parce que les quotas augmentent toujours les importations', 'iscorrect' => false],
                            ['answer' => 'Parce que les tarifs ne modifient jamais les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quels cas un tarif peut-il produire un effet différent dans un grand pays ?',
                        'answers' => [
                            ['answer' => 'Le pays peut avoir une influence sur le prix mondial et modifier partiellement son prix d’importation', 'iscorrect' => true],
                            ['answer' => 'Un grand pays ne peut jamais influencer le prix mondial', 'iscorrect' => false],
                            ['answer' => 'Le commerce international disparaît', 'iscorrect' => false],
                            ['answer' => 'Le tarif cesse d’être une taxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une protection commerciale peut-elle transférer du revenu entre groupes ?',
                        'answers' => [
                            ['answer' => Elle modifie les prix relatifs et donc les revenus des consommateurs, producteurs et détenteurs de facteurs', 'iscorrect' => true],
                            ['answer' => 'Tous les groupes reçoivent toujours les mêmes gains', 'iscorrect' => false],
                            ['answer' => 'Les politiques commerciales ne changent jamais les prix', 'iscorrect' => false],
                            ['answer' => 'Les producteurs et consommateurs ne sont jamais concernés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la protection d’une industrie peut-elle entraîner un coût pour d’autres secteurs ?',
                        'answers' => [
                            ['answer' => Des intrants plus chers, des représailles ou une allocation moins efficace des ressources peuvent pénaliser d’autres activités', 'iscorrect' => true],
                            ['answer' => 'Les autres secteurs gagnent toujours exactement la même somme', 'iscorrect' => false],
                            ['answer' => 'Les tarifs affectent uniquement les importateurs', 'iscorrect' => false],
                            ['answer' => 'La protection n’a jamais d’effets indirects', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Taux de change réels et compétitivité',
                'questions' => [
                    [
                        'question' => Que mesure conceptuellement un taux de change réel ?',
                        'answers' => [
                            ['answer' => 'Le prix relatif des biens et services entre pays après prise en compte des niveaux de prix', 'iscorrect' => true],
                            ['answer' => 'Uniquement le taux de change nominal', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt réel domestique', 'iscorrect' => false],
                            ['answer' => 'Le niveau du PIB nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation réelle peut-elle améliorer la compétitivité-prix ?',
                        'answers' => [
                            ['answer' => 'Les biens domestiques deviennent relativement moins chers par rapport aux biens étrangers', 'iscorrect' => true],
                            ['answer' => 'Les biens domestiques deviennent toujours plus chers', 'iscorrect' => false],
                            ['answer' => 'Les importations deviennent automatiquement gratuites', 'iscorrect' => false],
                            ['answer' => 'Le coût du travail disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une appréciation réelle peut-elle réduire les exportations, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => 'Les biens domestiques deviennent relativement plus chers pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Les biens domestiques deviennent automatiquement moins chers', 'iscorrect' => false],
                            ['answer' => 'Les coûts de transport disparaissent', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont indépendantes des prix relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut provoquer une appréciation réelle sans appréciation nominale ?',
                        'answers' => [
                            ['answer' => Une inflation domestique supérieure à celle des partenaires commerciaux', 'iscorrect' => true],
                            ['answer' => Une baisse des prix domestiques uniquement', 'iscorrect' => false],
                            ['answer' => Une baisse des salaires étrangers toujours', 'iscorrect' => false],
                            ['answer' => Une baisse des exportations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises exportatrices surveillent-elles le taux de change réel ?',
                        'answers' => [
                            ['answer' => Il renseigne sur leur compétitivité relative en tenant compte des prix', 'iscorrect' => true],
                            ['answer' => Il fixe directement leurs bénéfices', 'iscorrect' => false],
                            ['answer' => Il mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => Il ne concerne que les ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de change nominal ne suffit-il pas toujours pour comparer la compétitivité ?',
                        'answers' => [
                            ['answer' => Les niveaux de prix et coûts relatifs peuvent également varier entre pays', 'iscorrect' => true],
                            ['answer' => Les prix domestiques sont toujours constants', 'iscorrect' => false],
                            ['answer' => Le taux nominal contient déjà toutes les informations économiques', 'iscorrect' => false],
                            ['answer' => La compétitivité est indépendante des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une monnaie peut-elle se déprécier nominalement sans améliorer immédiatement le solde commercial ?',
                        'answers' => [
                            ['answer' => Les volumes d’exportation et d’importation peuvent réagir avec retard et les contrats existants peuvent limiter l’ajustement initial', 'iscorrect' => true],
                            ['answer' => Les exportations augmentent toujours instantanément', 'iscorrect' => false],
                            ['answer' => Les importations deviennent immédiatement nulles', 'iscorrect' => false],
                            ['answer' => Les quantités ne répondent jamais aux prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi renvoie l’expression « courbe en J » ?',
                        'answers' => [
                            ['answer' => Au fait qu’une dépréciation peut d’abord détériorer puis améliorer le solde commercial dans certaines conditions', 'iscorrect' => true],
                            ['answer' => 'À une forme de croissance du PIB', 'iscorrect' => false],
                            ['answer' => 'À une hausse automatique des exportations', 'iscorrect' => false],
                            ['answer' => 'À une relation entre salaires et chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition est souvent associée à une amélioration du solde commercial après une dépréciation ?',
                        'answers' => [
                            ['answer' => 'Une sensibilité suffisante des volumes exportés et importés aux prix relatifs', 'iscorrect' => true],
                            ['answer' => 'Une absence totale de réaction des quantités', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire des exportations', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation relative peut-elle réduire les gains de compétitivité d’une dépréciation nominale ?',
                        'answers' => [
                            ['answer' => 'Une hausse plus rapide des prix domestiques peut compenser une partie de la baisse du taux de change', 'iscorrect' => true],
                            ['answer' => 'L’inflation n’a jamais de rôle dans le taux de change réel', 'iscorrect' => false],
                            ['answer' => 'L’inflation réduit toujours le prix relatif des biens domestiques', 'iscorrect' => false],
                            ['answer' => 'La dépréciation devient automatiquement permanente', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Balance des paiements et mouvements de capitaux',
                'questions' => [
                    [
                        'question' => Quelle identité relie le compte courant à l’épargne et à l’investissement dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Le compte courant est égal à l’épargne nationale moins l’investissement', 'iscorrect' => true],
                            ['answer' => 'Le compte courant est égal à la consommation moins les impôts', 'iscorrect' => false],
                            ['answer' => 'Le compte courant est toujours égal aux exportations', 'iscorrect' => false],
                            ['answer' => 'Le compte courant est égal aux recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signifier un déficit courant persistant ?',
                        'answers' => [
                            ['answer' => Une économie dépense ou investit davantage de ressources qu’elle n’en finance par son épargne nationale sur la période considérée', 'iscorrect' => true],
                            ['answer' => 'Le pays n’a aucune exportation', 'iscorrect' => false],
                            ['answer' => 'Le pays a nécessairement un déficit budgétaire', 'iscorrect' => false],
                            ['answer' => 'La monnaie nationale est nécessairement surévaluée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les entrées de capitaux peuvent-elles financer un déficit courant ?',
                        'answers' => [
                            ['answer' => Elles fournissent des ressources financières en provenance du reste du monde', 'iscorrect' => true],
                            ['answer' => 'Elles réduisent automatiquement les importations à zéro', 'iscorrect' => false],
                            ['answer' => 'Elles correspondent uniquement à des exportations de biens', 'iscorrect' => false],
                            ['answer' => 'Elles sont sans lien avec l’épargne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les flux de capitaux peuvent-ils être volatils ?',
                        'answers' => [
                            ['answer' => Les investisseurs réagissent aux changements de rendement attendu, de risque et de perspectives économiques', 'iscorrect' => true],
                            ['answer' => Les capitaux sont toujours immobiles entre pays', 'iscorrect' => false],
                            ['answer' => Les rendements ne changent jamais', 'iscorrect' => false],
                            ['answer' => Le risque n’influence jamais les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une forte dépendance à des financements extérieurs peut-elle créer une vulnérabilité ?',
                        'answers' => [
                            ['answer' => Un retournement des flux peut provoquer une pression sur la monnaie, le financement et l’activité', 'iscorrect' => true],
                            ['answer' => Les capitaux étrangers sont toujours permanents', 'iscorrect' => false],
                            ['answer' => Les entrées de capitaux réduisent toujours les risques', 'iscorrect' => false],
                            ['answer' => Le financement extérieur n’a jamais de coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel est un effet possible d’une hausse des taux d’intérêt domestiques sur les flux de capitaux, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => Elle peut attirer davantage de capitaux à la recherche d’un rendement plus élevé', 'iscorrect' => true],
                            ['answer' => Elle réduit toujours les entrées de capitaux', 'iscorrect' => false],
                            ['answer' => Elle élimine automatiquement tout investissement étranger', 'iscorrect' => false],
                            ['answer' => Elle n’a jamais aucun effet financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations de change influencent-elles les décisions internationales ?',
                        'answers' => [
                            ['answer' => Les investisseurs évaluent le rendement futur des actifs dans leur propre monnaie, pas seulement le taux observé aujourd’hui', 'iscorrect' => true],
                            ['answer' => Les taux de change futurs sont toujours connus avec certitude', 'iscorrect' => false],
                            ['answer' => Les investisseurs ignorent les rendements', 'iscorrect' => false],
                            ['answer' => Les anticipations n’ont aucun effet sur les prix d’actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une banque centrale peut-elle accumuler des réserves de change ?',
                        'answers' => [
                            ['answer' => Pour disposer d’actifs liquides en devises et, selon son régime, intervenir sur le marché des changes ou gérer certains risques extérieurs', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer tout commerce international', 'iscorrect' => false],
                            ['answer' => 'Pour garantir un budget public équilibré', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un déficit de compte courant n’est-il pas automatiquement synonyme de crise ?',
                        'answers' => [
                            ['answer' => Il peut être soutenable s’il finance des investissements productifs et s’accompagne de financements extérieurs compatibles avec les fondamentaux', 'iscorrect' => true],
                            ['answer' => 'Tout déficit courant est toujours bénéfique', 'iscorrect' => false],
                            ['answer' => 'Les déficits courants n’ont jamais de coût', 'iscorrect' => false],
                            ['answer' => 'Le financement extérieur est toujours garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la composition des flux de capitaux est-elle importante ?',
                        'answers' => [
                            ['answer' => Les investissements directs, la dette et les investissements de portefeuille peuvent avoir des profils de stabilité et de risque différents', 'iscorrect' => true],
                            ['answer' => Tous les flux de capitaux ont exactement le même risque', 'iscorrect' => false],
                            ['answer' => La composition n’affecte jamais la vulnérabilité extérieure', 'iscorrect' => false],
                            ['answer' => Seuls les flux publics comptent', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie monétaire internationale',
                'questions' => [
                    [
                        'question' => Que décrit la parité non couverte des taux d’intérêt dans sa forme intuitive ?',
                        'answers' => [
                            ['answer' => 'La différence de taux d’intérêt entre deux pays est liée à l’appréciation ou dépréciation attendue de leurs monnaies', 'iscorrect' => true],
                            ['answer' => 'Les taux d’intérêt sont toujours identiques dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est fixé uniquement par le commerce des biens', 'iscorrect' => false],
                            ['answer' => 'Les capitaux ignorent les rendements futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la parité de pouvoir d’achat relie-t-elle les taux de change et les niveaux de prix ?',
                        'answers' => [
                            ['answer' => 'Elle repose sur l’idée qu’un taux de change devrait à long terme refléter les différences de niveaux de prix sous des hypothèses simplificatrices', 'iscorrect' => true],
                            ['answer' => 'Elle suppose que tous les biens sont identiques et parfaitement échangeables à court terme', 'iscorrect' => false],
                            ['answer' => 'Elle ignore complètement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Elle fixe directement les taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la parité de pouvoir d’achat peut-elle s’écarter à court terme ?',
                        'answers' => [
                            ['answer' => Les coûts de transport, biens non échangeables, barrières commerciales et différences de concurrence peuvent empêcher un ajustement immédiat', 'iscorrect' => true],
                            ['answer' => 'Les prix sont toujours parfaitement flexibles', 'iscorrect' => false],
                            ['answer' => 'Tous les biens sont identiques mondialement', 'iscorrect' => false],
                            ['answer' => 'Les échanges sont toujours sans coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel est l’effet d’une hausse du taux d’intérêt domestique sur la monnaie dans certains modèles internationaux, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => 'Elle peut accroître la demande d’actifs domestiques et exercer une pression à l’appréciation', 'iscorrect' => true],
                            ['answer' => 'Elle provoque toujours une dépréciation', 'iscorrect' => false],
                            ['answer' => 'Elle n’affecte jamais les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement la demande de monnaie étrangère à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations jouent-elles un rôle central sur les marchés de change ?',
                        'answers' => [
                            ['answer' => Les investisseurs évaluent les rendements futurs attendus des actifs libellés dans différentes monnaies', 'iscorrect' => true],
                            ['answer' => Les taux de change sont déterminés uniquement par les données historiques', 'iscorrect' => false],
                            ['answer' => Les anticipations n’affectent jamais les prix d’actifs', 'iscorrect' => false],
                            ['answer' => Les investisseurs ignorent toujours les politiques futures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les régimes de change sont-ils importants pour la politique économique ?',
                        'answers' => [
                            ['answer' => Le degré de flexibilité du taux de change influence la manière dont la banque centrale peut poursuivre ses objectifs monétaires', 'iscorrect' => true],
                            ['answer' => Les régimes de change n’ont aucun effet sur les instruments disponibles', 'iscorrect' => false],
                            ['answer' => Tous les régimes sont identiques', 'iscorrect' => false],
                            ['answer' => Le régime de change détermine uniquement les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce qu’un taux de change fixe ?',
                        'answers' => [
                            ['answer' => 'Un régime dans lequel l’autorité monétaire cherche à maintenir la monnaie autour d’une parité définie', 'iscorrect' => true],
                            ['answer' => 'Un régime où le taux change librement sans intervention', 'iscorrect' => false],
                            ['answer' => 'Une politique de taux d’intérêt nul', 'iscorrect' => false],
                            ['answer' => 'Une suppression du marché des devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce qu’un taux de change flottant ?',
                        'answers' => [
                            ['answer' => 'Un régime où le taux de change est principalement déterminé par l’offre et la demande de devises, avec éventuellement certaines interventions', 'iscorrect' => true],
                            ['answer' => 'Un taux fixé définitivement par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Un système sans transactions internationales', 'iscorrect' => false],
                            ['answer' => 'Un système sans marché financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un régime de change fixe peut-il nécessiter des réserves internationales ?',
                        'answers' => [
                            ['answer' => 'La banque centrale peut devoir intervenir pour défendre la parité', 'iscorrect' => true],
                            ['answer' => 'Les réserves sont inutiles sous un taux fixe', 'iscorrect' => false],
                            ['answer' => 'Les réserves servent uniquement à financer les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Les réserves empêchent tout commerce extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quelle difficulté célèbre peut limiter l’autonomie monétaire d’un pays ayant un taux de change fixe et une forte mobilité des capitaux ?',
                        'answers' => [
                            ['answer' => 'Le choix simultané d’un taux fixe, d’une grande mobilité des capitaux et d’une politique monétaire totalement autonome est difficile', 'iscorrect' => true],
                            ['answer' => 'Le commerce devient impossible', 'iscorrect' => false],
                            ['answer' => 'La monnaie nationale devient automatiquement plus forte', 'iscorrect' => false],
                            ['answer' => 'Les taux d’intérêt domestiques deviennent toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce international, entreprises et économies d’échelle',
                'questions' => [
                    [
                        'question' => Pourquoi les économies d’échelle peuvent-elles favoriser le commerce intra-industrie ?',
                        'answers' => [
                            ['answer' => 'La production à grande échelle peut réduire le coût moyen et encourager la spécialisation dans des variétés différentes d’un même secteur', 'iscorrect' => true],
                            ['answer' => 'Les économies d’échelle empêchent toute spécialisation', 'iscorrect' => false],
                            ['answer' => 'Elles rendent tous les produits identiques', 'iscorrect' => false],
                            ['answer' => 'Elles concernent uniquement les services publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que le commerce intra-industrie ?',
                        'answers' => [
                            ['answer' => 'L’échange de biens appartenant à une même industrie entre pays', 'iscorrect' => true],
                            ['answer' => 'L’échange de monnaies uniquement', 'iscorrect' => false],
                            ['answer' => 'Le commerce entre deux entreprises d’un même pays', 'iscorrect' => false],
                            ['answer' => 'L’échange de capitaux uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la différenciation des produits peut-elle favoriser le commerce entre pays similaires ?',
                        'answers' => [
                            ['answer' => Les consommateurs peuvent apprécier une plus grande variété même lorsque les pays ont des dotations proches', 'iscorrect' => true],
                            ['answer' => Les consommateurs veulent toujours un seul produit', 'iscorrect' => false],
                            ['answer' => Les pays similaires n’échangent jamais', 'iscorrect' => false],
                            ['answer' => La différenciation élimine les économies d’échelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les entreprises multinationales peuvent-elles fragmenter la production ?',
                        'answers' => [
                            ['answer' => Elles peuvent localiser différentes étapes là où les coûts, compétences ou accès au marché sont plus favorables', 'iscorrect' => true],
                            ['answer' => Toutes les étapes doivent rester dans le même pays', 'iscorrect' => false],
                            ['answer' => La fragmentation élimine toujours tous les risques', 'iscorrect' => false],
                            ['answer' => Les chaînes de valeur n’ont aucun lien avec les coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les coûts fixes élevés peuvent-ils encourager la concentration de la production ?',
                        'answers' => [
                            ['answer' => Produire à grande échelle permet de répartir les coûts fixes sur davantage d’unités', 'iscorrect' => true],
                            ['answer' => Les coûts fixes diminuent toujours lorsque la production baisse', 'iscorrect' => false],
                            ['answer' => Les coûts fixes sont indépendants de l’échelle par définition', 'iscorrect' => false],
                            ['answer' => Ils rendent les économies d’échelle impossibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le commerce intra-industrie est-il souvent observé entre pays à revenus similaires ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent avoir des préférences et des niveaux de demande similaires tout en échangeant des variétés différenciées', 'iscorrect' => true],
                            ['answer' => 'Les pays riches ne produisent jamais leurs propres biens', 'iscorrect' => false],
                            ['answer' => 'Les pays similaires ont toujours les mêmes prix', 'iscorrect' => false],
                            ['answer' => 'Le commerce intra-industrie exige une forte différence de dotations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel est un avantage potentiel de la concurrence internationale pour les entreprises domestiques ?',
                        'answers' => [
                            ['answer' => 'Elle peut stimuler la productivité, l’innovation et l’amélioration de la qualité', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toujours toute innovation', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle empêche les entreprises d’investir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi certaines entreprises choisissent-elles l’investissement direct plutôt que l’exportation ?',
                        'answers' => [
                            ['answer' => Elles peuvent chercher à réduire certains coûts commerciaux, protéger des actifs ou se rapprocher du marché local', 'iscorrect' => true],
                            ['answer' => 'L’investissement direct n’a jamais de rapport avec les coûts', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont toujours interdites', 'iscorrect' => false],
                            ['answer' => 'Les entreprises investissent uniquement pour acheter des obligations publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les multinationales peuvent-elles contribuer au transfert de technologie ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent introduire des connaissances, méthodes de production et pratiques de gestion dans les économies d’accueil', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent toujours la diffusion technologique', 'iscorrect' => false],
                            ['answer' => 'La technologie ne traverse jamais les frontières', 'iscorrect' => false],
                            ['answer' => 'Les investissements étrangers ne concernent que le capital financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les chaînes de valeur mondiales peuvent-elles accroître la vulnérabilité aux chocs ?',
                        'answers' => [
                            ['answer' => 'Une rupture d’approvisionnement dans un pays peut affecter plusieurs étapes de production dans d’autres pays', 'iscorrect' => true],
                            ['answer' => 'La production mondiale est toujours complètement indépendante entre pays', 'iscorrect' => false],
                            ['answer' => 'La diversification géographique élimine toutes les interdépendances', 'iscorrect' => false],
                            ['answer' => 'Les chaînes de valeur n’impliquent aucun intrant intermédiaire', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Développement économique et commerce',
                'questions' => [
                    [
                        'question' => Pourquoi le commerce peut-il soutenir le développement économique ?',
                        'answers' => [
                            ['answer' => 'Il peut élargir les marchés, favoriser la spécialisation, faciliter l’accès aux technologies et accroître la concurrence', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement un niveau de revenu identique dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Il élimine toutes les contraintes structurelles', 'iscorrect' => false],
                            ['answer' => 'Il remplace les institutions nationales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les exportations manufacturières peuvent-elles être importantes pour un pays en développement ?',
                        'answers' => [
                            ['answer' => Elles peuvent créer des emplois, générer des devises et faciliter l’apprentissage industriel', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent toujours toute diversification', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment les besoins de capital', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi dépendre fortement d’une seule matière première exportée peut-il être risqué ?',
                        'answers' => [
                            ['answer' => 'Les revenus extérieurs peuvent fortement fluctuer lorsque le prix mondial de cette matière première varie', 'iscorrect' => true],
                            ['answer' => 'Les prix des matières premières sont toujours stables', 'iscorrect' => false],
                            ['answer' => 'Les exportations de ressources éliminent les cycles économiques', 'iscorrect' => false],
                            ['answer' => 'La diversification réduit toujours les recettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce que la diversification des exportations ?',
                        'answers' => [
                            ['answer' => 'Le développement de plusieurs produits, secteurs ou marchés d’exportation', 'iscorrect' => true],
                            ['answer' => 'La concentration sur un seul produit', 'iscorrect' => false],
                            ['answer' => 'La suppression des importations', 'iscorrect' => false],
                            ['answer' => 'La fermeture complète de l’économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les infrastructures peuvent-elles influencer le commerce d’un pays ?',
                        'answers' => [
                            ['answer' => 'Des transports, ports, réseaux numériques et systèmes logistiques efficaces réduisent les coûts commerciaux', 'iscorrect' => true],
                            ['answer' => 'Les infrastructures ne changent jamais les coûts d’échange', 'iscorrect' => false],
                            ['answer' => 'Elles servent uniquement aux consommateurs locaux', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les politiques commerciales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les institutions sont-elles importantes pour attirer l’investissement étranger ?',
                        'answers' => [
                            ['answer' => La sécurité juridique, la protection des contrats et la prévisibilité des politiques peuvent réduire les risques perçus', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs ignorent toujours les institutions', 'iscorrect' => false],
                            ['answer' => 'Les institutions n’ont aucun effet sur le risque', 'iscorrect' => false],
                            ['answer' => 'L’investissement étranger dépend uniquement du climat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les gains du commerce peuvent-ils être inégalement répartis dans un pays en développement ?',
                        'answers' => [
                            ['answer' => Les travailleurs et entreprises engagés dans différents secteurs peuvent être affectés différemment par la concurrence et la spécialisation', 'iscorrect' => true],
                            ['answer' => 'Tous les travailleurs occupent exactement les mêmes secteurs', 'iscorrect' => false],
                            ['answer' => 'Le commerce n’affecte jamais les salaires', 'iscorrect' => false],
                            ['answer' => 'Tous les producteurs vendent uniquement à l’étranger', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’accès aux marchés internationaux peut-il favoriser l’adoption de technologies modernes ?',
                        'answers' => [
                            ['answer' => 'Les entreprises exposées à la concurrence et aux échanges internationaux peuvent avoir davantage d’incitations à adopter de nouvelles technologies', 'iscorrect' => true],
                            ['answer' => 'Le commerce empêche l’innovation', 'iscorrect' => false],
                            ['answer' => 'Les technologies sont toujours produites localement', 'iscorrect' => false],
                            ['answer' => 'L’exposition internationale n’affecte jamais la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la qualité de l’éducation peut-elle influencer les avantages du commerce ?',
                        'answers' => [
                            ['answer' => Une main-d’œuvre plus qualifiée peut soutenir des activités plus complexes et à plus forte valeur ajoutée', 'iscorrect' => true],
                            ['answer' => 'La qualification n’a aucun effet sur la productivité', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne dépend jamais des compétences', 'iscorrect' => false],
                            ['answer' => 'Les activités complexes ne nécessitent aucune main-d’œuvre qualifiée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique de commerce ouvert peut-elle nécessiter des politiques d’accompagnement ?',
                        'answers' => [
                            ['answer' => 'Les gains agrégés peuvent coexister avec des coûts d’ajustement concentrés sur certains travailleurs ou secteurs', 'iscorrect' => true],
                            ['answer' => 'Le commerce bénéficie toujours immédiatement à tous', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs changent toujours de secteur sans coût', 'iscorrect' => false],
                            ['answer' => 'Les politiques d’accompagnement réduisent toujours les gains du commerce', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance internationale et risque de change',
                'questions' => [
                    [
                        'question' => Pourquoi une entreprise exportatrice peut-elle être exposée au risque de change ?',
                        'answers' => [
                            ['answer' => 'La valeur en monnaie domestique de ses recettes étrangères peut varier avec le taux de change', 'iscorrect' => true],
                            ['answer' => 'Le taux de change n’affecte jamais les exportateurs', 'iscorrect' => false],
                            ['answer' => 'Les exportateurs ne reçoivent jamais de paiements en devises', 'iscorrect' => false],
                            ['answer' => 'Le risque ne concerne que les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel instrument peut être utilisé pour couvrir un risque de change futur prévisible ?',
                        'answers' => [
                            ['answer' => 'Un contrat à terme sur devises', 'iscorrect' => true],
                            ['answer' => 'Une action ordinaire domestique uniquement', 'iscorrect' => false],
                            ['answer' => 'Une obligation sans échéance', 'iscorrect' => false],
                            ['answer' => 'Un tarif douanier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une entreprise importatrice peut-elle vouloir acheter une devise à terme ?',
                        'answers' => [
                            ['answer' => 'Pour fixer à l’avance un taux de change et réduire l’incertitude sur le coût futur en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter automatiquement son chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer tous les risques commerciaux', 'iscorrect' => false],
                            ['answer' => 'Pour modifier le prix mondial du bien importé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les variations de change peuvent-elles affecter la valeur des actifs étrangers pour un investisseur domestique ?',
                        'answers' => [
                            ['answer' => 'Le rendement converti en monnaie domestique dépend à la fois de la performance de l’actif et du taux de change', 'iscorrect' => true],
                            ['answer' => 'Le taux de change ne modifie jamais la valeur convertie', 'iscorrect' => false],
                            ['answer' => 'Les actifs étrangers sont toujours libellés en monnaie domestique', 'iscorrect' => false],
                            ['answer' => 'Le risque de change disparaît pour les actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la diversification internationale peut-elle réduire certains risques de portefeuille ?',
                        'answers' => [
                            ['answer' => Les rendements d’actifs de différents pays ne évoluent pas nécessairement de manière parfaitement synchronisée', 'iscorrect' => true],
                            ['answer' => Tous les marchés ont toujours exactement le même rendement', 'iscorrect' => false],
                            ['answer' => La diversification élimine tout risque', 'iscorrect' => false],
                            ['answer' => Les actifs étrangers n’ont aucune corrélation entre eux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la corrélation internationale est-elle importante pour un portefeuille ?',
                        'answers' => [
                            ['answer' => Elle influence les possibilités de diversification et la réduction du risque global', 'iscorrect' => true],
                            ['answer' => Elle détermine uniquement les taux de change', 'iscorrect' => false],
                            ['answer' => Une corrélation élevée améliore toujours la diversification', 'iscorrect' => false],
                            ['answer' => Une corrélation nulle signifie toujours absence de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un emprunteur en devises étrangères peut-il être vulnérable à une dépréciation de sa monnaie nationale ?',
                        'answers' => [
                            ['answer' => 'La valeur de la dette en monnaie nationale peut augmenter', 'iscorrect' => true],
                            ['answer' => 'La dette étrangère devient automatiquement moins chère', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’affecte jamais le service de la dette', 'iscorrect' => false],
                            ['answer' => 'Les créanciers étrangers absorbent toujours la perte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les pays émergents peuvent-ils être particulièrement sensibles aux mouvements de capitaux ?',
                        'answers' => [
                            ['answer' => 'Des sorties rapides de capitaux peuvent exercer une forte pression sur la monnaie, les réserves et le financement intérieur', 'iscorrect' => true],
                            ['answer' => 'Les flux de capitaux sont toujours stables dans ces économies', 'iscorrect' => false],
                            ['answer' => 'Les réserves sont toujours infinies', 'iscorrect' => false],
                            ['answer' => 'Les mouvements de capitaux n’affectent jamais les marchés domestiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse des taux étrangers peut-elle exercer une pression sur les actifs domestiques ?',
                        'answers' => [
                            ['answer' => Les investisseurs peuvent réallouer une partie de leurs capitaux vers les actifs étrangers offrant un rendement relatif plus attractif', 'iscorrect' => true],
                            ['answer' => Les investisseurs ignorent toujours les rendements étrangers', 'iscorrect' => false],
                            ['answer' => Les capitaux sont juridiquement immobiles dans tous les pays', 'iscorrect' => false],
                            ['answer' => Les taux étrangers n’ont aucun effet sur les décisions financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations de dépréciation peuvent-elles affecter le marché des changes avant la dépréciation elle-même ?',
                        'answers' => [
                            ['answer' => Les investisseurs peuvent ajuster leurs positions immédiatement en fonction du rendement attendu des différentes monnaies', 'iscorrect' => true],
                            ['answer' => Les anticipations ne modifient jamais les prix actuels', 'iscorrect' => false],
                            ['answer' => Le marché des changes réagit uniquement aux données anciennes', 'iscorrect' => false],
                            ['answer' => Les monnaies ne sont pas des actifs financiers', 'iscorrect' => false],
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
