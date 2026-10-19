<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CentralBankingMonetaryFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'central-banking-monetary-finance')->firstOrFail();

        $quizSettings = [
            ['duration' => 18, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 19, 'passing_score' => 58],
            ['duration' => 21, 'passing_score' => 57],
            ['duration' => 20, 'passing_score' => 56],
            ['duration' => 19, 'passing_score' => 60],
            ['duration' => 22, 'passing_score' => 60],
            ['duration' => 21, 'passing_score' => 59],
            ['duration' => 23, 'passing_score' => 59],
            ['duration' => 22, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Rôle et fonctions d\'une banque centrale',
                'description' => 'Quiz consacré aux missions essentielles d\'une banque centrale, à sa position dans le système financier et à ses principaux outils.',
                'questions' => [
                    [
                        'question' => 'Quelle fonction distingue le plus directement une banque centrale d\'une banque commerciale ?',
                        'explanation' => 'Une banque centrale conduit la politique monétaire et contribue à la stabilité monétaire et financière. Les banques commerciales proposent surtout des services aux ménages et aux entreprises, comme les dépôts et les crédits.',
                        'choices' => [
                            ['choice_text' => 'Accorder principalement des crédits immobiliers aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Conduire la politique monétaire', 'is_correct' => true],
                            ['choice_text' => 'Vendre des cartes bancaires aux particuliers', 'is_correct' => false],
                            ['choice_text' => 'Tenir un compte courant pour chaque consommateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale augmente son taux directeur. Quelle évolution cherche-t-elle généralement à provoquer à court terme ?',
                        'explanation' => 'Une hausse du taux directeur tend à augmenter le coût du financement dans l\'économie. Elle peut donc ralentir la demande de crédit et, selon le contexte, réduire les pressions inflationnistes.',
                        'choices' => [
                            ['choice_text' => 'Un renchérissement du coût du crédit', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du coût des emprunts', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la quantité de monnaie créée', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des dépenses publiques de l\'État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale détient-elle généralement des réserves internationales ?',
                        'explanation' => 'Les réserves internationales, souvent constituées de devises et d\'actifs liquides étrangers, peuvent servir aux paiements extérieurs et à certaines interventions sur le marché des changes. Elles ne sont pas destinées à distribuer des primes aux ménages.',
                        'choices' => [
                            ['choice_text' => 'Pour financer le déficit budgétaire de l\'État en période de crise', 'is_correct' => false],
                            ['choice_text' => 'Pour couvrir les pertes des banques commerciales en cas de faillite', 'is_correct' => false],
                            ['choice_text' => 'Pour renforcer sa capacité à effectuer des opérations en devises', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la quantité de billets mis en circulation chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle correspond à l\'expression « prêteur en dernier ressort » ?',
                        'explanation' => 'Le prêteur en dernier ressort permet à une banque centrale de fournir des liquidités exceptionnelles dans certaines situations de tension. Cela vise notamment à limiter les risques liés à une crise de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Fournir des liquidités d\'urgence à une institution financière éligible en difficulté', 'is_correct' => true],
                            ['choice_text' => 'Accorder un crédit de dernier recours aux ménages surendettés qui ne trouvent pas de banque', 'is_correct' => false],
                            ['choice_text' => 'Racheter les dettes de l\'État lorsque celui-ci ne trouve plus de prêteurs sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'Apporter des fonds propres à une banque dont le capital est devenu insuffisant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces opérations est typiquement réalisée entre une banque centrale et les banques du système ?',
                        'explanation' => 'Le refinancement permet aux banques d\'obtenir des liquidités auprès de la banque centrale selon les mécanismes prévus par celle-ci. Il fait partie des outils de mise en œuvre de la politique monétaire.',
                        'choices' => [
                            ['choice_text' => 'Un crédit immobilier à un ménage', 'is_correct' => false],
                            ['choice_text' => 'Une émission d\'obligations d\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'L\'ouverture d\'un livret d\'épargne', 'is_correct' => false],
                            ['choice_text' => 'Une opération de refinancement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale cherche à maintenir la confiance dans la monnaie. Quel objectif est directement lié à cette mission ?',
                        'explanation' => 'La stabilité des prix contribue à préserver la valeur de la monnaie et la capacité des agents à prendre des décisions économiques. Dans de nombreux cadres institutionnels, elle constitue un objectif central de la banque centrale.',
                        'choices' => [
                            ['choice_text' => 'L\'équilibre du budget de l\'État', 'is_correct' => false],
                            ['choice_text' => 'La hausse des profits bancaires', 'is_correct' => false],
                            ['choice_text' => 'La baisse du taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'La stabilité des prix', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que représente principalement le bilan d\'une banque centrale ?',
                        'explanation' => 'Comme toute institution financière, une banque centrale présente un bilan comprenant des actifs et des passifs. Les actifs peuvent notamment inclure des titres ou des réserves de change, tandis que les passifs comprennent, entre autres, la monnaie centrale.',
                        'choices' => [
                            ['choice_text' => 'Ses recettes et ses dépenses sur une année', 'is_correct' => false],
                            ['choice_text' => 'Ses actifs et ses passifs à une date donnée', 'is_correct' => true],
                            ['choice_text' => 'Le montant total des billets imprimés chaque mois', 'is_correct' => false],
                            ['choice_text' => 'La liste des décisions de taux prises au cours du trimestre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une économie où l\'inflation reste durablement trop élevée, quelle orientation monétaire est généralement considérée comme restrictive ?',
                        'explanation' => 'Une politique monétaire restrictive cherche généralement à freiner la demande et les conditions financières. Une hausse des taux directeurs est un instrument classique pour atteindre cet objectif lorsque l\'inflation est jugée excessive.',
                        'choices' => [
                            ['choice_text' => 'Abaisser les taux directeurs', 'is_correct' => false],
                            ['choice_text' => 'Lancer un programme d\'achats de titres', 'is_correct' => false],
                            ['choice_text' => 'Accorder davantage de prêts aux banques', 'is_correct' => false],
                            ['choice_text' => 'Relever les taux directeurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel élément fait partie de la monnaie centrale ?',
                        'explanation' => 'La monnaie centrale comprend notamment les billets et pièces ainsi que les réserves des banques commerciales auprès de la banque centrale. Les actions et obligations ne font pas partie de la monnaie centrale.',
                        'choices' => [
                            ['choice_text' => 'Les dépôts à vue des ménages ouverts dans les banques commerciales', 'is_correct' => false],
                            ['choice_text' => 'Les réserves détenues par les banques commerciales auprès de la banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Les crédits accordés par les banques commerciales aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les obligations d\'État détenues par les banques commerciales dans leur portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'indépendance d\'une banque centrale est-elle souvent associée à la politique monétaire ?',
                        'explanation' => 'L\'indépendance institutionnelle vise notamment à permettre une conduite de la politique monétaire cohérente avec le mandat confié à la banque centrale. Elle ne signifie pas que la banque centrale ignore les marchés ou que les taux doivent toujours être élevés.',
                        'choices' => [
                            ['choice_text' => 'Elle peut favoriser des décisions monétaires guidées par un mandat de stabilité plutôt que par des objectifs politiques de court terme', 'is_correct' => true],
                            ['choice_text' => 'Elle permet au gouvernement de fixer lui-même les taux directeurs selon les besoins du budget de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense la banque centrale d\'expliquer ses décisions et de rendre compte de son action au public', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige la banque centrale à financer en priorité les dépenses de l\'État pour soutenir la croissance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux directeurs et politique monétaire',
                'description' => 'Évaluation des notions de taux directeurs, politique monétaire expansionniste ou restrictive et transmission aux conditions de financement.',
                'questions' => [
                    [
                        'question' => 'Une baisse du taux directeur rend, toutes choses égales par ailleurs, le refinancement des banques auprès de la banque centrale :',
                        'explanation' => 'Lorsque le taux auquel les banques peuvent se refinancer baisse, le coût de cette source de liquidité diminue, toutes choses égales par ailleurs. L\'effet sur les taux de crédit dépend ensuite de la transmission dans le système financier.',
                        'choices' => [
                            ['choice_text' => 'Plus coûteux', 'is_correct' => false],
                            ['choice_text' => 'Plus difficile d\'accès pour les banques', 'is_correct' => false],
                            ['choice_text' => 'Inchangé tant que l\'inflation ne baisse pas', 'is_correct' => false],
                            ['choice_text' => 'Moins coûteux', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une politique monétaire expansionniste vise généralement à :',
                        'explanation' => 'Une politique expansionniste cherche généralement à soutenir l\'activité en facilitant les conditions monétaires et financières. Elle peut passer par une baisse des taux directeurs ou d\'autres mesures d\'assouplissement.',
                        'choices' => [
                            ['choice_text' => 'Assouplir les conditions financières pour soutenir l\'activité économique', 'is_correct' => true],
                            ['choice_text' => 'Durcir les conditions de crédit pour faire reculer l\'inflation', 'is_correct' => false],
                            ['choice_text' => 'Réduire le déficit public grâce à de nouvelles recettes fiscales', 'is_correct' => false],
                            ['choice_text' => 'Fixer par décision administrative les prix des biens de consommation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale relève son taux directeur de 3 % à 4 %. De combien de points de pourcentage le taux a-t-il augmenté ?',
                        'explanation' => 'Le taux passe de 3 % à 4 %, soit une hausse de 1 point de pourcentage. En points de base, cela correspond à 100 points de base.',
                        'choices' => [
                            ['choice_text' => '1 point de base', 'is_correct' => false],
                            ['choice_text' => '0,25 point de pourcentage', 'is_correct' => false],
                            ['choice_text' => '1 point de pourcentage', 'is_correct' => true],
                            ['choice_text' => '4 points de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux directeurs peut réduire la demande de crédit principalement parce que :',
                        'explanation' => 'Des taux plus élevés rendent généralement les nouveaux emprunts plus coûteux. Certains ménages et entreprises peuvent alors reporter ou réduire leurs projets financés par dette.',
                        'choices' => [
                            ['choice_text' => 'Les banques n\'ont plus accès au refinancement', 'is_correct' => false],
                            ['choice_text' => 'Les prix sont bloqués par décision de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Les épargnants retirent leurs dépôts pour acheter des biens', 'is_correct' => false],
                            ['choice_text' => 'Le coût de l\'emprunt augmente pour les emprunteurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux la transmission monétaire ?',
                        'explanation' => 'La transmission monétaire passe par plusieurs canaux, notamment les taux d\'intérêt, le crédit, les prix d\'actifs et parfois le taux de change. Les effets sont progressifs et ne consistent pas à fixer directement tous les prix.',
                        'choices' => [
                            ['choice_text' => 'La banque centrale transmet ses décisions directement aux ménages, qui modifient aussitôt leur consommation', 'is_correct' => false],
                            ['choice_text' => 'Les décisions de taux n\'agissent que sur le marché interbancaire et ne touchent pas le crédit aux clients', 'is_correct' => false],
                            ['choice_text' => 'Les décisions de la banque centrale se limitent à modifier la valeur de la monnaie sur le marché des changes', 'is_correct' => false],
                            ['choice_text' => 'Les décisions de la banque centrale influencent progressivement les taux, le crédit, la demande et l\'activité économique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale veut soutenir l\'économie en présence d\'une faible demande et d\'une inflation faible. Quelle mesure est cohérente avec une orientation expansionniste ?',
                        'explanation' => 'Une baisse du taux directeur est un exemple classique d\'assouplissement monétaire. Elle peut améliorer les conditions de financement et soutenir la demande, selon la réaction des banques et des agents économiques.',
                        'choices' => [
                            ['choice_text' => 'Relever son taux directeur afin de ralentir la progression du crédit bancaire', 'is_correct' => false],
                            ['choice_text' => 'Vendre des titres sur le marché pour retirer de la liquidité aux banques', 'is_correct' => false],
                            ['choice_text' => 'Abaisser son taux directeur, sous réserve de son cadre de politique monétaire', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les exigences de réserves imposées aux banques commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale communique-t-elle sur ses décisions de politique monétaire ?',
                        'explanation' => 'La communication aide les ménages, entreprises et investisseurs à comprendre la réaction probable de la banque centrale et peut influencer leurs anticipations. Elle complète les décisions de taux et les autres instruments.',
                        'choices' => [
                            ['choice_text' => 'Pour aider les agents économiques à comprendre l\'orientation monétaire et à former leurs anticipations', 'is_correct' => true],
                            ['choice_text' => 'Pour fixer à l\'avance les taux appliqués par chaque banque commerciale à ses clients', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les prévisions publiées par les instituts statistiques et l\'administration', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir l\'accord du gouvernement avant chaque modification des taux directeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre un taux nominal et un taux réel ?',
                        'explanation' => 'Le taux réel cherche à mesurer le coût ou le rendement en termes de pouvoir d\'achat. Une approximation courante est : taux réel ≈ taux nominal − inflation.',
                        'choices' => [
                            ['choice_text' => 'Le taux nominal tient compte de l\'inflation, alors que le taux réel l\'ignore', 'is_correct' => false],
                            ['choice_text' => 'Le taux réel s\'applique aux crédits, le taux nominal aux dépôts', 'is_correct' => false],
                            ['choice_text' => 'Le taux nominal est calculé après impôts, le taux réel avant impôts', 'is_correct' => false],
                            ['choice_text' => 'Le taux réel tient compte de l\'effet de l\'inflation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un taux directeur passe de 5,50 % à 5,00 %. La baisse est de :',
                        'explanation' => 'La différence entre 5,50 % et 5,00 % est de 0,50 point de pourcentage, soit 50 points de base.',
                        'choices' => [
                            ['choice_text' => '0,05 point de pourcentage', 'is_correct' => false],
                            ['choice_text' => '0,50 point de pourcentage', 'is_correct' => true],
                            ['choice_text' => '5 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '50 points de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'une baisse des taux améliore les conditions de crédit, quel comportement peut en découler ?',
                        'explanation' => 'Des conditions de financement plus favorables peuvent augmenter le nombre de projets dont le coût financier devient acceptable. Toutefois, les entreprises restent libres d\'investir selon leurs perspectives et leurs contraintes.',
                        'choices' => [
                            ['choice_text' => 'Les ménages peuvent juger moins intéressant d\'acheter un logement à crédit', 'is_correct' => false],
                            ['choice_text' => 'Les banques doivent réduire le montant des dépôts qu\'elles détiennent', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise peut trouver plus intéressant de financer un investissement', 'is_correct' => true],
                            ['choice_text' => 'Les épargnants peuvent espérer des rendements plus élevés sur leurs livrets', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Réserves, liquidité et opérations de refinancement',
                'description' => 'Comprendre les réserves bancaires, la liquidité du système et les opérations permettant de gérer les tensions de financement.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une banque commerciale conserve-t-elle des réserves auprès de la banque centrale ?',
                        'explanation' => 'Les réserves auprès de la banque centrale constituent un actif liquide utilisé notamment pour les règlements entre banques et la gestion des besoins de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour financer à long terme les crédits immobiliers accordés à ses clients', 'is_correct' => false],
                            ['choice_text' => 'Pour régler certains paiements et répondre à ses besoins de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Pour constituer des fonds propres exigés par les superviseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour acheter et revendre des actions sur les marchés boursiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale prête 20 millions d\'euros à une banque commerciale contre des actifs éligibles. Quelle est la conséquence immédiate la plus simple à représenter ?',
                        'explanation' => 'Une opération de refinancement apporte de la liquidité à la banque commerciale. La banque centrale reçoit en contrepartie un actif éligible ou une sûreté selon les modalités de l\'opération.',
                        'choices' => [
                            ['choice_text' => 'Les liquidités de la banque commerciale augmentent', 'is_correct' => true],
                            ['choice_text' => 'Le capital réglementaire de la banque commerciale augmente de 20 millions', 'is_correct' => false],
                            ['choice_text' => 'Les billets en circulation diminuent de 20 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => 'La dette de la banque commerciale envers ses clients diminue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un établissement possède 100 millions d\'euros d\'actifs liquides et doit faire face à 80 millions d\'euros de sorties de trésorerie à court terme. Hors autres flux, quel excédent de liquidité lui reste-t-il ?',
                        'explanation' => 'L\'excédent se calcule par 100 − 80 = 20 millions d\'euros, en supposant qu\'il n\'existe pas d\'autres entrées ou sorties de trésorerie.',
                        'choices' => [
                            ['choice_text' => '20 millions d\'euros', 'is_correct' => true],
                            ['choice_text' => '80 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => '100 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => '180 millions d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une tension de liquidité signifie principalement qu\'une institution :',
                        'explanation' => 'Le risque de liquidité concerne la capacité à honorer les besoins de trésorerie au moment voulu. Une institution peut être solvable tout en rencontrant une tension de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Dispose de pertes supérieures à ses fonds propres et se trouve donc en état d\'insolvabilité', 'is_correct' => false],
                            ['choice_text' => 'Réalise des profits inférieurs à ceux de ses concurrentes sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Peut avoir des difficultés à faire face à ses paiements lorsqu\'ils arrivent à échéance', 'is_correct' => true],
                            ['choice_text' => 'Voit baisser la valeur de ses actions cotées sur le marché boursier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux une facilité de dépôt d\'une banque centrale ?',
                        'explanation' => 'Une facilité de dépôt offre aux banques une possibilité de placer leurs liquidités auprès de la banque centrale. Son taux peut aussi contribuer à encadrer les taux du marché monétaire selon le cadre opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Elle permet généralement aux banques de placer des fonds auprès de la banque centrale selon les règles prévues', 'is_correct' => true],
                            ['choice_text' => 'Elle permet généralement aux banques d\'emprunter à très court terme auprès de la banque centrale contre garantie', 'is_correct' => false],
                            ['choice_text' => 'Elle permet aux ménages de déposer leur épargne directement à la banque centrale en échange d\'un intérêt', 'is_correct' => false],
                            ['choice_text' => 'Elle permet à la banque centrale de collecter des dépôts auprès des entreprises pour financer le budget de l\'État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle exiger une garantie lorsqu\'elle refinance une banque ?',
                        'explanation' => 'La garantie ou le collatéral fournit une protection à la banque centrale contre le risque de non-remboursement. Les actifs acceptés et les décotes appliquées dépendent des règles de la banque centrale.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque de crédit lié à l\'opération', 'is_correct' => true],
                            ['choice_text' => 'Pour s\'assurer que la banque respecte ses ratios de capital', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir un rendement supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la banque de prêter les fonds reçus à ses clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les réserves d\'une banque commerciale auprès de la banque centrale augmentent, son niveau de liquidité en monnaie centrale :',
                        'explanation' => 'Les réserves auprès de la banque centrale sont des actifs en monnaie centrale. Une hausse de ces réserves augmente donc la position de liquidité de la banque sur cette forme de monnaie.',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Passe en capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque dispose de 60 millions d\'euros de réserves et en utilise 15 millions pour régler des paiements. Combien lui reste-t-il, avant autres opérations ?',
                        'explanation' => 'Après l\'utilisation de 15 millions, il reste 60 − 15 = 45 millions d\'euros de réserves.',
                        'choices' => [
                            ['choice_text' => '15 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => '30 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => '45 millions d\'euros', 'is_correct' => true],
                            ['choice_text' => '75 millions d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut accroître le besoin de liquidité d\'une banque commerciale ?',
                        'explanation' => 'Lorsque de nombreux clients retirent leurs dépôts ou transfèrent leurs fonds rapidement, la banque doit mobiliser de la liquidité pour honorer ces sorties.',
                        'choices' => [
                            ['choice_text' => 'Des sorties de dépôts importantes et rapides', 'is_correct' => true],
                            ['choice_text' => 'Une réduction de ses paiements sortants', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de sa trésorerie disponible', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de ses remboursements dus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte concernant liquidité et solvabilité ?',
                        'explanation' => 'La liquidité est liée aux flux de trésorerie et à la capacité de règlement à court terme. La solvabilité renvoie plutôt à la solidité financière sur une période plus longue et à la capacité de supporter les pertes.',
                        'choices' => [
                            ['choice_text' => 'La liquidité concerne la capacité à absorber les pertes sur longue période, tandis que la solvabilité concerne la capacité à payer à temps', 'is_correct' => false],
                            ['choice_text' => 'La liquidité mesure le montant total des actifs détenus par la banque, tandis que la solvabilité mesure le niveau de ses dépôts collectés', 'is_correct' => false],
                            ['choice_text' => 'La liquidité concerne les banques de dépôt, tandis que la solvabilité concerne les entreprises non financières', 'is_correct' => false],
                            ['choice_text' => 'La liquidité concerne surtout la capacité à payer à temps, tandis que la solvabilité concerne la capacité à absorber durablement les pertes et à couvrir les engagements', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Inflation et stabilité des prix',
                'description' => 'Notions fondamentales sur l\'inflation, ses effets sur le pouvoir d\'achat et la réaction de la politique monétaire.',
                'questions' => [
                    [
                        'question' => 'Que signifie une inflation de 4 % sur une période donnée ?',
                        'explanation' => 'L\'inflation mesure une progression moyenne du niveau général des prix. Certains biens peuvent augmenter davantage, moins, ou même baisser.',
                        'choices' => [
                            ['choice_text' => 'Le pouvoir d\'achat des ménages a augmenté en moyenne de 4 % sur la période', 'is_correct' => false],
                            ['choice_text' => 'Le niveau général des prix a augmenté en moyenne de 4 % sur la période mesurée', 'is_correct' => true],
                            ['choice_text' => 'Le prix de chaque bien et service a augmenté de 4 % sur la période mesurée', 'is_correct' => false],
                            ['choice_text' => 'Les revenus nominaux des ménages ont progressé de 4 % sur la période mesurée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d\'inflation est de 5 % et qu\'un ménage garde un revenu nominal inchangé, son pouvoir d\'achat tend à :',
                        'explanation' => 'Lorsque les prix augmentent mais que le revenu nominal ne change pas, la quantité de biens et services que le revenu permet d\'acheter tend à diminuer.',
                        'choices' => [
                            ['choice_text' => 'Augmenter de 5 %', 'is_correct' => false],
                            ['choice_text' => 'Rester identique malgré la hausse des prix', 'is_correct' => false],
                            ['choice_text' => 'Se maintenir grâce à la hausse des taux', 'is_correct' => false],
                            ['choice_text' => 'Diminuer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale relève les taux afin de réduire une inflation trop forte. Quel mécanisme est cohérent avec cet objectif ?',
                        'explanation' => 'Des taux plus élevés peuvent rendre les crédits plus coûteux et certaines dépenses ou certains investissements moins attractifs. Une demande moins dynamique peut contribuer à modérer les pressions sur les prix.',
                        'choices' => [
                            ['choice_text' => 'Des conditions de financement plus strictes peuvent ralentir la demande', 'is_correct' => true],
                            ['choice_text' => 'Des taux plus élevés stimulent la consommation en rendant l\'emprunt plus attractif', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale réduit directement le prix de chaque produit vendu', 'is_correct' => false],
                            ['choice_text' => 'Les taux élevés augmentent la masse de monnaie disponible pour les ménages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces phénomènes peut être qualifié de désinflation ?',
                        'explanation' => 'La désinflation signifie que le rythme de hausse des prix ralentit. Par exemple, passer d\'une inflation de 6 % à 3 % correspond à une désinflation, même si le niveau des prix continue d\'augmenter.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du niveau général des prix qui se prolonge pendant plusieurs trimestres', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du taux d\'inflation, alors que les prix continuent globalement d\'augmenter', 'is_correct' => true],
                            ['choice_text' => 'Une forte accélération de la hausse des prix sur plusieurs trimestres consécutifs', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des prix limitée à quelques produits alimentaires ou énergétiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indice décrit le mieux une situation de déflation ?',
                        'explanation' => 'La déflation correspond à une baisse persistante du niveau général des prix. Elle se distingue de la désinflation, qui désigne un ralentissement de l\'inflation.',
                        'choices' => [
                            ['choice_text' => 'Une hausse durable du niveau général des prix', 'is_correct' => false],
                            ['choice_text' => 'Un ralentissement du rythme de hausse des prix', 'is_correct' => false],
                            ['choice_text' => 'Une forte dépréciation de la monnaie face aux devises', 'is_correct' => false],
                            ['choice_text' => 'Une baisse durable du niveau général des prix', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un panier de biens coûte 1 000 € au début de l\'année. Avec une inflation de 3 %, son coût moyen devient approximativement :',
                        'explanation' => 'Le montant augmente de 1 000 × 3 % = 30 €. Le nouveau coût est donc d\'environ 1 030 €.',
                        'choices' => [
                            ['choice_text' => '970 €', 'is_correct' => false],
                            ['choice_text' => '1 003 €', 'is_correct' => false],
                            ['choice_text' => '1 030 €', 'is_correct' => true],
                            ['choice_text' => '1 300 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations d\'inflation sont-elles importantes pour une banque centrale ?',
                        'explanation' => 'Les agents économiques adaptent parfois leurs contrats et décisions à l\'inflation attendue. Des anticipations bien ancrées peuvent faciliter la conduite de la politique monétaire et réduire certains mécanismes auto-entretenus.',
                        'choices' => [
                            ['choice_text' => 'Elles mesurent le niveau d\'inflation effectivement constaté le mois précédent', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les statistiques officielles sur l\'évolution passée des prix', 'is_correct' => false],
                            ['choice_text' => 'Elles correspondent au taux d\'intérêt que les banques appliquent aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Elles peuvent influencer les décisions de prix, de salaires, d\'épargne et d\'investissement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation exerce généralement une pression désinflationniste à court terme ?',
                        'explanation' => 'Lorsque la demande ralentit fortement, les entreprises peuvent avoir moins de possibilités d\'augmenter leurs prix. L\'effet exact dépend toutefois de l\'offre, des coûts et du contexte économique.',
                        'choices' => [
                            ['choice_text' => 'Une hausse marquée du prix des matières premières', 'is_correct' => false],
                            ['choice_text' => 'Un ralentissement marqué de la demande globale', 'is_correct' => true],
                            ['choice_text' => 'Une forte progression des salaires dans l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des taux directeurs de la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un prix passe de 200 € à 210 €, le taux d\'augmentation du prix est :',
                        'explanation' => 'L\'augmentation est de 10 €. Rapportée au prix initial de 200 €, cela donne 10 / 200 = 5 %.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif est généralement incompatible avec une priorité donnée à la stabilité des prix sur longue période ?',
                        'explanation' => 'Une inflation très élevée et persistante est difficilement compatible avec la stabilité des prix. Le suivi des prix et des anticipations fait au contraire partie des éléments utiles à la conduite monétaire.',
                        'choices' => [
                            ['choice_text' => 'Suivre l\'évolution des indicateurs de prix et des salaires dans l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Analyser les anticipations d\'inflation des ménages et des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Chercher à entretenir volontairement une inflation très élevée et durable', 'is_correct' => true],
                            ['choice_text' => 'Ajuster les instruments monétaires selon l\'évolution du contexte économique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Masse monétaire et agrégats',
                'description' => 'Repères sur la monnaie, les dépôts, la monnaie centrale et l\'interprétation simple des agrégats monétaires.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces éléments appartient généralement à la monnaie détenue par le public ?',
                        'explanation' => 'Les dépôts à vue jouent un rôle monétaire important car ils peuvent servir directement aux paiements. Les biens physiques et les actifs non monétaires ne sont pas comptés de la même manière dans les agrégats monétaires.',
                        'choices' => [
                            ['choice_text' => 'Les actions cotées détenues par un ménage en portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Les dépôts à vue utilisés pour effectuer des paiements', 'is_correct' => true],
                            ['choice_text' => 'Les obligations d\'État conservées jusqu\'à leur échéance', 'is_correct' => false],
                            ['choice_text' => 'Les terrains et immeubles possédés par les ménages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est la plus simple entre monnaie centrale et monnaie scripturale des banques commerciales ?',
                        'explanation' => 'La monnaie centrale comprend notamment les billets et les réserves bancaires. Les dépôts bancaires, eux, représentent des engagements des banques commerciales envers leurs clients et sont largement utilisés comme moyens de paiement.',
                        'choices' => [
                            ['choice_text' => 'La monnaie centrale est émise par les banques commerciales, tandis que les dépôts bancaires sont des engagements de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'La monnaie centrale est émise par la banque centrale, tandis que les dépôts bancaires sont des engagements des banques commerciales', 'is_correct' => true],
                            ['choice_text' => 'La monnaie centrale désigne les dépôts des ménages, tandis que la monnaie scripturale désigne les billets et pièces', 'is_correct' => false],
                            ['choice_text' => 'La monnaie centrale est créée par l\'État, tandis que les dépôts bancaires sont des titres de dette émis par les entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque crée un dépôt de 5 000 € lorsqu\'elle accorde un nouveau prêt, dans un modèle bancaire simplifié. Quel élément augmente alors directement dans le bilan de la banque ?',
                        'explanation' => 'Dans la représentation simplifiée d\'un prêt nouveau, la banque inscrit le crédit à l\'actif et le dépôt correspondant au passif. Le montant est ici de 5 000 € des deux côtés, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Un actif de réserves et un passif de capital', 'is_correct' => false],
                            ['choice_text' => 'Un passif de crédit et un actif de dépôt', 'is_correct' => false],
                            ['choice_text' => 'Un actif de crédit et un passif de dépôt', 'is_correct' => true],
                            ['choice_text' => 'Un actif d\'immobilisations et un passif de dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle jouent les dépôts bancaires dans le fonctionnement de l\'économie ?',
                        'explanation' => 'Les dépôts bancaires sont des instruments essentiels pour les paiements et la gestion de trésorerie des agents économiques. Ils constituent cependant des passifs pour les banques, et non leurs capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Ils constituent le capital que la banque doit détenir pour absorber ses pertes', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent des créances de la banque sur ses clients emprunteurs', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent notamment de réaliser des paiements et de conserver des liquidités', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent les titres que la banque centrale détient à son actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un agrégat monétaire est principalement utilisé pour :',
                        'explanation' => 'Les agrégats monétaires regroupent différents actifs selon leur fonction et leur degré de liquidité, conformément à la définition retenue par l\'institution statistique ou monétaire concernée.',
                        'choices' => [
                            ['choice_text' => 'Mesurer une catégorie de liquidités ou d\'actifs monétaires selon une définition donnée', 'is_correct' => true],
                            ['choice_text' => 'Évaluer la valeur totale des biens et services produits dans le pays sur une année', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la hausse moyenne des prix à la consommation sur une période donnée', 'is_correct' => false],
                            ['choice_text' => 'Calculer le bénéfice annuel dégagé par l\'ensemble des banques commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les dépôts à vue d\'une économie passent de 400 à 460 milliards d\'euros, l\'augmentation absolue est de :',
                        'explanation' => 'L\'augmentation absolue est de 460 − 400 = 60 milliards d\'euros.',
                        'choices' => [
                            ['choice_text' => '15 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '40 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '60 milliards d\'euros', 'is_correct' => true],
                            ['choice_text' => '860 milliards d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le terme « vitesse de circulation de la monnaie » renvoie à l\'idée que :',
                        'explanation' => 'La vitesse de circulation décrit la fréquence avec laquelle la monnaie est utilisée dans les transactions pendant une période donnée. Elle est une notion macroéconomique, pas une mesure du déplacement physique des billets.',
                        'choices' => [
                            ['choice_text' => 'La monnaie circule physiquement d\'une banque centrale à une autre pour régler les échanges', 'is_correct' => false],
                            ['choice_text' => 'Les banques centrales impriment très rapidement de nouveaux billets chaque année', 'is_correct' => false],
                            ['choice_text' => 'Un virement met en moyenne plusieurs jours à être crédité sur le compte du bénéficiaire', 'is_correct' => false],
                            ['choice_text' => 'Une unité monétaire peut être utilisée plusieurs fois pour effectuer des transactions sur une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale surveille-t-elle les agrégats monétaires même si elle ne contrôle pas mécaniquement chaque euro de dépôts ?',
                        'explanation' => 'Les agrégats monétaires et de crédit peuvent fournir des indications sur la liquidité, le financement de l\'économie et les conditions monétaires. Leur interprétation se fait avec d\'autres indicateurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que les évolutions de la monnaie et du crédit apportent des informations sur les conditions financières et économiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que les agrégats permettent de fixer directement le niveau des prix de chaque secteur de l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les agrégats monétaires donnent le montant exact des bénéfices réalisés par les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les agrégats servent à calculer les impôts dus par les ménages et les entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel actif est généralement plus liquide qu\'un immeuble résidentiel ?',
                        'explanation' => 'Un dépôt à vue peut être utilisé ou transféré rapidement pour régler une transaction. La vente d\'un immeuble ou d\'un actif peu négociable demande généralement plus de temps et de formalités.',
                        'choices' => [
                            ['choice_text' => 'Un terrain agricole difficile à vendre', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt à vue', 'is_correct' => true],
                            ['choice_text' => 'Une participation non cotée sans marché secondaire', 'is_correct' => false],
                            ['choice_text' => 'Un local commercial loué à long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une lecture simplifiée, une forte croissance du crédit bancaire peut signaler :',
                        'explanation' => 'Une croissance du crédit peut accroître les ressources financières disponibles pour les ménages et entreprises. Son impact dépend du contexte, de la qualité des prêts, de la demande et de l\'offre de crédit.',
                        'choices' => [
                            ['choice_text' => 'Une contraction du financement accessible aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de la quantité de monnaie en circulation', 'is_correct' => false],
                            ['choice_text' => 'Une expansion du financement disponible dans l\'économie', 'is_correct' => true],
                            ['choice_text' => 'Une réduction du risque de défaut sur les prêts existants', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Opérations d\'open market',
                'description' => 'Découvrir le principe des achats et ventes de titres par la banque centrale et leur effet sur la liquidité du système.',
                'questions' => [
                    [
                        'question' => 'Une opération d\'open market correspond principalement à :',
                        'explanation' => 'Les opérations d\'open market sont des transactions sur des titres utilisées par une banque centrale pour mettre en œuvre la politique monétaire et gérer les conditions de liquidité.',
                        'choices' => [
                            ['choice_text' => 'L\'achat ou la vente de titres par la banque centrale sur le marché selon son cadre opérationnel', 'is_correct' => true],
                            ['choice_text' => 'L\'achat ou la vente de devises par les entreprises exportatrices auprès de leurs banques', 'is_correct' => false],
                            ['choice_text' => 'L\'émission de nouveaux billets par la banque centrale pour financer les dépenses de l\'État', 'is_correct' => false],
                            ['choice_text' => 'L\'ouverture d\'un marché boursier où les particuliers échangent directement des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une banque centrale achète des titres à une banque commerciale, que reçoit généralement la banque commerciale en contrepartie ?',
                        'explanation' => 'Lorsqu\'une banque centrale achète un titre auprès d\'une banque, elle règle généralement l\'opération par une augmentation des réserves de la banque vendeuse. Cela accroît sa liquidité en monnaie centrale.',
                        'choices' => [
                            ['choice_text' => 'Des actions de la banque centrale en échange des titres vendus', 'is_correct' => false],
                            ['choice_text' => 'Des créances sur l\'État équivalentes aux titres cédés', 'is_correct' => false],
                            ['choice_text' => 'Des réserves ou de la liquidité en monnaie centrale', 'is_correct' => true],
                            ['choice_text' => 'Une hausse équivalente de ses engagements envers la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vente de titres par la banque centrale aux banques peut généralement :',
                        'explanation' => 'Quand les contreparties achètent les titres et paient la banque centrale, les réserves bancaires utilisées pour le règlement peuvent diminuer. L\'opération est donc susceptible de retirer de la liquidité du système.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les réserves du système bancaire lorsque les contreparties paient ces titres', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le capital des banques qui achètent ces titres à la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Transférer le risque de crédit des banques vers l\'État sans mouvement de réserves', 'is_correct' => false],
                            ['choice_text' => 'Réduire les réserves du système bancaire lorsque les contreparties paient ces titres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale achète pour 50 millions d\'euros de titres dans une opération d\'open market. Dans une représentation simplifiée, les réserves bancaires augmentent de :',
                        'explanation' => 'Dans une représentation simplifiée d\'un achat réglé par création de réserves, un achat de 50 millions d\'euros se traduit par une hausse correspondante des réserves du système bancaire, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => '0 euro, par définition', 'is_correct' => false],
                            ['choice_text' => '5 millions d\'euros', 'is_correct' => false],
                            ['choice_text' => '50 millions d\'euros', 'is_correct' => true],
                            ['choice_text' => '500 millions d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les opérations d\'open market peuvent-elles influencer les taux du marché monétaire ?',
                        'explanation' => 'En modifiant la quantité de réserves disponibles, la banque centrale peut influencer les conditions de financement à très court terme et donc les taux du marché monétaire.',
                        'choices' => [
                            ['choice_text' => 'Elles fixent par décret le taux que chaque banque applique à ses clients', 'is_correct' => false],
                            ['choice_text' => 'Elles modifient la quantité de liquidité disponible dans le système bancaire', 'is_correct' => true],
                            ['choice_text' => 'Elles modifient le montant des impôts payés par les banques sur leurs bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Elles modifient le niveau de capital exigé par les superviseurs des banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale souhaite retirer de la liquidité du système. Quelle opération correspond le mieux à cet objectif, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une vente de titres fait généralement sortir des réserves du système bancaire lorsque les titres sont payés. À l\'inverse, un achat de titres tend à injecter de la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Acheter des titres sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Augmenter ses prêts aux banques sans contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Vendre des titres sur le marché', 'is_correct' => true],
                            ['choice_text' => 'Augmenter les dépôts des ménages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une différence importante entre une banque centrale et un investisseur privé lorsqu\'elles achètent un titre ?',
                        'explanation' => 'Les achats de la banque centrale peuvent avoir un objectif de politique monétaire, comme la gestion de la liquidité ou l\'assouplissement financier. Ils ne sont pas motivés uniquement par la recherche de rendement.',
                        'choices' => [
                            ['choice_text' => 'La banque centrale cherche à maximiser le rendement de son portefeuille comme le ferait un fonds d\'investissement', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale achète des titres pour le compte des ménages qui souhaitent placer leur épargne', 'is_correct' => false],
                            ['choice_text' => 'L\'objectif de la banque centrale est lié à son mandat monétaire et financier, pas seulement au rendement financier', 'is_correct' => true],
                            ['choice_text' => 'L\'investisseur privé achète des titres dans le but d\'influencer le niveau des taux directeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une opération d\'achat de titres par la banque centrale augmente les réserves bancaires. Quel effet est cohérent avec une politique plus accommodante ?',
                        'explanation' => 'Une augmentation des réserves améliore la liquidité en monnaie centrale. Dans un cadre accommodant, cela peut contribuer à assouplir les conditions monétaires, selon le dispositif retenu.',
                        'choices' => [
                            ['choice_text' => 'Un durcissement des conditions de financement', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des réserves détenues par les banques', 'is_correct' => false],
                            ['choice_text' => 'Un relèvement du taux directeur de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Des conditions de liquidité plus abondantes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation distingue correctement les réserves d\'une banque commerciale de ses capitaux propres ?',
                        'explanation' => 'Les réserves bancaires sont des actifs liquides détenus auprès de la banque centrale, alors que les capitaux propres représentent les ressources appartenant aux actionnaires. Les deux notions ne sont pas interchangeables.',
                        'choices' => [
                            ['choice_text' => 'Les réserves appartiennent aux actionnaires de la banque, alors que les capitaux propres sont des avoirs détenus auprès de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Les réserves et les capitaux propres désignent exactement la même ressource, appelée simplement de deux noms différents', 'is_correct' => false],
                            ['choice_text' => 'Les réserves sont les crédits accordés par la banque, alors que les capitaux propres sont les dépôts de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Les réserves sont des avoirs liquides auprès de la banque centrale, alors que les capitaux propres appartiennent aux actionnaires', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale peut-elle utiliser des opérations d\'achat de titres sans modifier directement le budget de l\'État ?',
                        'explanation' => 'Une opération monétaire modifie le bilan de la banque centrale et les conditions financières, tandis que le budget de l\'État concerne les recettes et dépenses publiques. Les deux domaines peuvent interagir, mais ils restent distincts.',
                        'choices' => [
                            ['choice_text' => 'Parce que la banque centrale finance ces achats en prélevant directement des impôts sur les ménages', 'is_correct' => false],
                            ['choice_text' => 'Parce que les titres achetés sont immédiatement annulés et retirés de la dette publique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il s\'agit d\'une opération monétaire sur le bilan de la banque centrale, distincte de la politique budgétaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que ces achats sont réglés par le ministère des Finances sur ses propres ressources', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Transmission monétaire dans l\'économie',
                'description' => 'Mettre en pratique les principaux canaux par lesquels une décision monétaire peut influencer les ménages, les entreprises et les marchés.',
                'questions' => [
                    [
                        'question' => 'Une hausse des taux réduit l\'intérêt économique d\'un projet d\'investissement peu rentable. Cela illustre principalement le canal :',
                        'explanation' => 'Lorsque le financement devient plus cher, certains projets dont la rentabilité était marginale peuvent être reportés. Le coût du capital et du crédit est donc un canal important de transmission.',
                        'choices' => [
                            ['choice_text' => 'Du taux de change de la monnaie', 'is_correct' => false],
                            ['choice_text' => 'Des dépenses publiques de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Des anticipations de salaires', 'is_correct' => false],
                            ['choice_text' => 'Du coût du financement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux d\'intérêt peuvent-ils influencer l\'épargne des ménages ?',
                        'explanation' => 'Une variation des taux modifie le rendement attendu de certains placements et le coût d\'opportunité de la consommation présente. La réaction dépend néanmoins du profil de chaque ménage.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une variation des taux modifie le rendement relatif de certains produits d\'épargne', 'is_correct' => true],
                            ['choice_text' => 'Parce que les taux fixent directement le montant des revenus perçus par les ménages chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ménages réagissent aux taux en modifiant leur niveau d\'impôts sur le revenu', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque centrale décide quelle part du revenu chaque ménage doit épargner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des taux peut soutenir le marché immobilier en rendant certains emprunts plus abordables. Quel canal cela illustre-t-il ?',
                        'explanation' => 'Des coûts d\'emprunt plus faibles peuvent améliorer l\'accessibilité financière de certains projets immobiliers et modifier la demande. L\'effet dépend aussi de l\'offre de logements et du comportement des banques.',
                        'choices' => [
                            ['choice_text' => 'Le canal des anticipations de salaires et d\'emploi', 'is_correct' => false],
                            ['choice_text' => 'Le canal budgétaire des dépenses de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Le canal du taux de change et des exportations', 'is_correct' => false],
                            ['choice_text' => 'Le canal du crédit et des conditions de financement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si une hausse des taux entraîne une appréciation de la monnaie nationale, quel effet peut toucher les exportateurs ?',
                        'explanation' => 'Une monnaie plus forte peut rendre les biens nationaux plus chers en devises étrangères, toutes choses égales par ailleurs. L\'effet réel dépend de la structure des coûts, de la demande et des marchés d\'exportation.',
                        'choices' => [
                            ['choice_text' => 'Leurs produits peuvent devenir relativement moins chers pour la plupart des acheteurs étrangers', 'is_correct' => false],
                            ['choice_text' => 'Leurs produits peuvent devenir relativement plus chers pour certains acheteurs étrangers', 'is_correct' => true],
                            ['choice_text' => 'Leurs coûts de production en monnaie nationale baissent aussitôt de la même proportion', 'is_correct' => false],
                            ['choice_text' => 'Leurs importations de matières premières deviennent plus chères en monnaie nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit une anticipation rationnelle de politique monétaire au sens simple du raisonnement économique ?',
                        'explanation' => 'Dans cette approche, rationalité ne signifie pas perfection. Elle signifie que les agents utilisent l\'information disponible pour former des anticipations cohérentes avec leur compréhension de l\'économie.',
                        'choices' => [
                            ['choice_text' => 'Les agents forment leurs anticipations en extrapolant simplement les taux observés la semaine précédente', 'is_correct' => false],
                            ['choice_text' => 'Les agents attendent que la banque centrale modifie ses taux avant de former la moindre anticipation', 'is_correct' => false],
                            ['choice_text' => 'Les agents anticipent sans erreur chaque décision de la banque centrale grâce à leurs modèles', 'is_correct' => false],
                            ['choice_text' => 'Les agents utilisent l\'information disponible pour former leurs anticipations, même si elles peuvent rester imparfaites', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale baisse les taux, mais les banques deviennent beaucoup plus prudentes et réduisent l\'offre de crédit. Que montre cette situation ?',
                        'explanation' => 'Une baisse du taux directeur ne garantit pas une hausse identique du crédit si les banques modifient leurs critères ou perçoivent davantage de risques. La transmission dépend du système financier et du comportement des agents.',
                        'choices' => [
                            ['choice_text' => 'La banque centrale contrôle directement le volume de crédit de chaque banque', 'is_correct' => false],
                            ['choice_text' => 'Le taux directeur n\'a plus d\'influence sur les taux de marché', 'is_correct' => false],
                            ['choice_text' => 'La baisse des taux est la cause directe du resserrement du crédit', 'is_correct' => false],
                            ['choice_text' => 'La transmission de la politique monétaire peut être incomplète', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des taux peut encourager certaines entreprises à investir parce que :',
                        'explanation' => 'Un coût du financement plus faible peut augmenter la valeur actualisée de certains flux futurs et rendre acceptables des projets auparavant trop coûteux. Cela ne rend pas tous les investissements rentables.',
                        'choices' => [
                            ['choice_text' => 'Les revenus futurs attendus des projets augmentent mécaniquement quand les taux de crédit baissent', 'is_correct' => false],
                            ['choice_text' => 'Le coût des matières premières achetées par les entreprises diminue dans la même proportion', 'is_correct' => false],
                            ['choice_text' => 'La valeur actualisée de certains projets peut s\'améliorer lorsque le coût du financement diminue', 'is_correct' => true],
                            ['choice_text' => 'Les banques demandent moins de garanties parce que la banque centrale leur rembourse les pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel canal agit lorsque la politique monétaire modifie la richesse financière perçue des ménages via les prix des actifs ?',
                        'explanation' => 'Les conditions monétaires peuvent influencer les valorisations de certains actifs financiers ou immobiliers. Ces variations peuvent ensuite modifier le patrimoine perçu et certains comportements de consommation ou d\'investissement.',
                        'choices' => [
                            ['choice_text' => 'Le canal du taux de change', 'is_correct' => false],
                            ['choice_text' => 'Le canal des prix d\'actifs', 'is_correct' => true],
                            ['choice_text' => 'Le canal du crédit bancaire', 'is_correct' => false],
                            ['choice_text' => 'Le canal des anticipations d\'inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'impact d\'une décision monétaire peut-il différer entre un ménage endetté et un ménage épargnant ?',
                        'explanation' => 'Un ménage fortement endetté peut être sensible à la hausse de ses intérêts, alors qu\'un épargnant peut bénéficier de taux plus élevés sur certains placements. L\'effet dépend des contrats et de la structure financière du ménage.',
                        'choices' => [
                            ['choice_text' => 'Parce que la banque centrale applique des taux directeurs différents à chaque catégorie de ménages', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ménages endettés paient moins d\'impôts que les ménages épargnants', 'is_correct' => false],
                            ['choice_text' => 'Parce que la variation des taux n\'affecte pas de la même manière le coût de la dette et le rendement de l\'épargne', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ménages épargnants ne détiennent pas de comptes dans des banques commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un délai de transmission de la politique monétaire ?',
                        'explanation' => 'La transmission comporte des délais : les banques réajustent leurs conditions, les ménages et entreprises modifient leurs décisions, puis les effets se diffusent dans l\'économie.',
                        'choices' => [
                            ['choice_text' => 'Le temps nécessaire pour qu\'une banque centrale se réunisse et vote une décision de taux', 'is_correct' => false],
                            ['choice_text' => 'Le délai entre l\'octroi d\'un prêt et son remboursement complet par l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Une décision de taux prise aujourd\'hui influence progressivement les crédits et l\'activité dans les mois suivants', 'is_correct' => true],
                            ['choice_text' => 'Une décision de taux prise aujourd\'hui modifie aussitôt le niveau des prix et de l\'activité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Banque centrale et marché monétaire',
                'description' => 'Réviser les notions de marché monétaire, taux interbancaires, liquidité et rôle opérationnel de la banque centrale.',
                'questions' => [
                    [
                        'question' => 'Le marché monétaire concerne principalement :',
                        'explanation' => 'Le marché monétaire regroupe les transactions et instruments de financement à court terme, notamment entre institutions financières. Il joue un rôle important dans la gestion de la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Les financements et placements à court terme', 'is_correct' => true],
                            ['choice_text' => 'Les emprunts à long terme des États et des grandes entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les échanges d\'actions de sociétés cotées en bourse', 'is_correct' => false],
                            ['choice_text' => 'Les crédits immobiliers accordés aux ménages sur vingt ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque emprunte-t-elle sur le marché interbancaire ?',
                        'explanation' => 'Une banque peut connaître temporairement un déficit de liquidité tandis qu\'une autre dispose d\'un excédent. Le marché interbancaire facilite le transfert de liquidité entre institutions éligibles.',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter durablement son capital social', 'is_correct' => false],
                            ['choice_text' => 'Pour financer à long terme un portefeuille de crédits', 'is_correct' => false],
                            ['choice_text' => 'Pour constituer des réserves de change en devises', 'is_correct' => false],
                            ['choice_text' => 'Pour gérer un besoin temporaire de liquidité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si le taux interbancaire à un jour est de 4 % et celui à un an de 5 %, que peut-on constater simplement ?',
                        'explanation' => 'La comparaison des deux valeurs montre simplement que 5 % est supérieur à 4 %. La forme de la courbe des taux dépend du niveau de risque, des anticipations et des conditions de marché.',
                        'choices' => [
                            ['choice_text' => 'Le financement à un an porte un taux supérieur à celui à un jour dans cette observation', 'is_correct' => true],
                            ['choice_text' => 'Le financement à un jour porte un taux supérieur à celui à un an dans cette observation', 'is_correct' => false],
                            ['choice_text' => 'La différence entre les deux taux est de 5 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => 'Le taux à un an est égal à quatre fois le taux à un jour dans cette observation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt d\'un marché monétaire fonctionnel pour le système bancaire ?',
                        'explanation' => 'Les banques ont quotidiennement des besoins et des excédents de trésorerie. Le marché monétaire permet de les ajuster, même s\'il n\'élimine ni le risque de crédit ni tous les autres risques financiers.',
                        'choices' => [
                            ['choice_text' => 'Réduire le risque de crédit des banques en le transférant à la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Faciliter la gestion des besoins et excédents de liquidité à court terme', 'is_correct' => true],
                            ['choice_text' => 'Permettre aux banques de financer leurs prêts immobiliers à très long terme', 'is_correct' => false],
                            ['choice_text' => 'Fixer le cours des actions des banques cotées sur le marché boursier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale cherche à stabiliser les taux du marché monétaire autour de sa cible. Pourquoi la gestion de la liquidité est-elle importante ?',
                        'explanation' => 'Lorsque les réserves bancaires deviennent très abondantes ou très rares par rapport aux besoins, les conditions du marché monétaire peuvent changer. La banque centrale utilise donc ses instruments pour piloter cet environnement.',
                        'choices' => [
                            ['choice_text' => 'Parce que les taux à court terme sont fixés par les banques commerciales sans lien avec la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité du système fixe le niveau des taux de crédit à long terme proposés aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité sert à calculer le montant des bénéfices distribués aux actionnaires des banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que des variations fortes de liquidité peuvent exercer une pression sur les taux à court terme', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le terme « overnight » désigne généralement un financement d\'une durée :',
                        'explanation' => 'Overnight signifie au jour le jour. Il s\'agit d\'une échéance très courte, particulièrement importante dans la gestion de trésorerie des institutions financières.',
                        'choices' => [
                            ['choice_text' => 'Moyenne, typiquement comprise entre trois et cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Courte, typiquement comprise entre un et trois mois', 'is_correct' => false],
                            ['choice_text' => 'Très courte, typiquement jusqu\'au jour ouvré suivant', 'is_correct' => true],
                            ['choice_text' => 'Longue, typiquement supérieure à dix ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une banque a trop peu de liquidité en fin de journée, quel type de marché peut contribuer à résoudre temporairement son besoin ?',
                        'explanation' => 'Le marché monétaire est précisément destiné aux besoins de financement et de placement à court terme. Selon les règles du système, la banque peut y rechercher les liquidités nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Le marché immobilier résidentiel', 'is_correct' => false],
                            ['choice_text' => 'Le marché des actions cotées', 'is_correct' => false],
                            ['choice_text' => 'Le marché obligataire à long terme', 'is_correct' => false],
                            ['choice_text' => 'Le marché monétaire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux directeur peut-il servir de signal au marché monétaire ?',
                        'explanation' => 'Le taux directeur est un élément central du cadre opérationnel. Son niveau et sa trajectoire donnent au marché une information importante sur les conditions monétaires recherchées.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il donne une indication sur l\'orientation de la politique monétaire et influence le coût des liquidités', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il indique le rendement moyen des actions cotées et le niveau des dividendes versés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il fixe le taux d\'intérêt de chaque contrat de crédit signé par les ménages', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il mesure le niveau d\'inflation constaté sur le mois écoulé dans l\'économie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque dispose temporairement de 30 millions d\'euros excédentaires. Quel usage est le plus directement lié au marché monétaire ?',
                        'explanation' => 'Une banque disposant d\'un excédent de liquidité peut rechercher un placement de court terme. C\'est l\'une des fonctions essentielles du marché monétaire.',
                        'choices' => [
                            ['choice_text' => 'Acheter un immeuble de bureaux financé par ses excédents pour le louer à long terme', 'is_correct' => false],
                            ['choice_text' => 'Convertir cet excédent en capital social afin de renforcer ses fonds propres durablement', 'is_correct' => false],
                            ['choice_text' => 'Prêter la somme à un ménage pour un crédit immobilier sur une durée de vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Placer à court terme une partie de cette liquidité auprès d\'une contrepartie éligible', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle phrase est correcte concernant le marché monétaire ?',
                        'explanation' => 'Le marché monétaire permet la circulation de liquidités à court terme entre acteurs financiers et joue un rôle dans la mise en œuvre de la politique monétaire.',
                        'choices' => [
                            ['choice_text' => 'Il est important pour le financement à court terme et la transmission de la politique monétaire', 'is_correct' => true],
                            ['choice_text' => 'Il sert principalement à financer les investissements des entreprises sur des durées de vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Il concerne les ménages qui placent leur épargne retraite sur de très longues périodes', 'is_correct' => false],
                            ['choice_text' => 'Il intervient surtout dans l\'achat de biens de consommation courante par les particuliers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Création monétaire et crédit bancaire',
                'description' => 'Comprendre le lien entre crédit bancaire, dépôts et création monétaire dans une représentation simple du système bancaire.',
                'questions' => [
                    [
                        'question' => 'Dans une représentation simplifiée, lorsqu\'une banque accorde un prêt de 10 000 € à une entreprise, elle inscrit généralement :',
                        'explanation' => 'Le prêt est un actif pour la banque car l\'emprunteur doit la rembourser. Le dépôt créé pour le client est un passif de la banque envers ce client.',
                        'choices' => [
                            ['choice_text' => 'Un dépôt à l\'actif et un crédit au passif', 'is_correct' => false],
                            ['choice_text' => 'Une réserve à l\'actif et un capital au passif', 'is_correct' => false],
                            ['choice_text' => 'Un crédit à l\'actif et un dépôt au passif', 'is_correct' => true],
                            ['choice_text' => 'Un crédit à l\'actif et une hausse des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi dit-on parfois que les banques créent de la monnaie lorsqu\'elles accordent des crédits ?',
                        'explanation' => 'Dans le système bancaire moderne, le crédit peut créer un dépôt bancaire, qui constitue une forme de monnaie scripturale. La création et la destruction de dépôts dépendent aussi des remboursements et d\'autres opérations.',
                        'choices' => [
                            ['choice_text' => 'Parce que la banque reçoit de nouveaux billets de la banque centrale à chaque prêt octroyé', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prêt augmente directement les réserves de la banque auprès de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque convertit l\'épargne des déposants en monnaie nouvelle au moment du remboursement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prêt peut s\'accompagner de la création d\'un dépôt utilisable pour effectuer des paiements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise rembourse 2 000 € de principal sur un prêt bancaire, sans considérer les intérêts. Dans une représentation simplifiée, le remboursement du principal tend à :',
                        'explanation' => 'Le remboursement du principal réduit l\'encours du prêt. Lorsque le paiement est effectué à partir d\'un dépôt, la monnaie scripturale correspondante est également détruite dans cette représentation simplifiée.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le crédit à l\'actif et créer un nouveau dépôt lors du règlement', 'is_correct' => false],
                            ['choice_text' => 'Transformer le crédit à l\'actif en capital propre lors du règlement', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les réserves de la banque et réduire son capital lors du règlement', 'is_correct' => false],
                            ['choice_text' => 'Réduire le crédit à l\'actif et le dépôt associé lors du règlement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque prête 50 000 € et reçoit 50 000 € de remboursement de principal quelques mois plus tard. Quelle évolution simple de l\'encours du prêt observe-t-on ?',
                        'explanation' => 'Si la totalité du principal de 50 000 € est remboursée, l\'encours de ce prêt est ramené à zéro. Les intérêts, frais et autres éléments ne changent pas ce calcul du principal.',
                        'choices' => [
                            ['choice_text' => 'Il passe à 100 000 € car le remboursement s\'ajoute au prêt initial', 'is_correct' => false],
                            ['choice_text' => 'Il revient à zéro pour ce prêt', 'is_correct' => true],
                            ['choice_text' => 'Il est divisé par deux et passe à 25 000 € environ', 'is_correct' => false],
                            ['choice_text' => 'Il reste à 50 000 € tant que les intérêts ne sont pas payés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut limiter la capacité d\'une banque à développer son crédit ?',
                        'explanation' => 'La création de dépôts par le crédit est encadrée par plusieurs contraintes : capital, liquidité, risque de crédit, exigences réglementaires, rentabilité et demande solvable.',
                        'choices' => [
                            ['choice_text' => 'Sa contrainte de capital, sa liquidité, la qualité de ses emprunteurs et les règles prudentielles', 'is_correct' => true],
                            ['choice_text' => 'Le montant des dépôts des épargnants, qui doit être collecté en totalité avant chaque nouveau prêt', 'is_correct' => false],
                            ['choice_text' => 'Le niveau des réserves d\'or détenues par la banque, qui fixerait un plafond de prêts', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d\'agences et de distributeurs de billets de son réseau, retenu comme limite par les superviseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque accorde un prêt nouveau de 8 000 €. Pourquoi l\'opération ne signifie-t-elle pas que la banque a gagné immédiatement 8 000 € ?',
                        'explanation' => 'Le montant principal du prêt n\'est pas un bénéfice. La banque espère percevoir des intérêts et récupérer le principal, mais elle supporte aussi des risques et des coûts.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un prêt est d\'abord un actif à recouvrer, tandis que le dépôt créé est un passif', 'is_correct' => true],
                            ['choice_text' => 'Parce que le dépôt créé appartient à la banque et s\'ajoute à ses capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque doit d\'abord attendre d\'avoir collecté 8 000 € d\'épargne avant de prêter', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prêt doit être remboursé par la banque à la banque centrale dès son octroi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la qualité moyenne des emprunteurs se dégrade fortement, une banque prudente peut :',
                        'explanation' => 'Une détérioration de la qualité des emprunteurs augmente le risque de défaut. Une banque peut alors renforcer ses critères, augmenter ses marges ou réduire certains nouveaux crédits.',
                        'choices' => [
                            ['choice_text' => 'Assouplir ses critères pour maintenir son volume de crédit', 'is_correct' => false],
                            ['choice_text' => 'Resserrer ses critères d\'octroi de crédit', 'is_correct' => true],
                            ['choice_text' => 'Diminuer ses exigences de capital pour compenser le risque', 'is_correct' => false],
                            ['choice_text' => 'Baisser ses marges sur les crédits aux emprunteurs fragiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle des réserves dans une lecture simple de la création monétaire ?',
                        'explanation' => 'Les réserves sont de la monnaie centrale détenue par les banques auprès de la banque centrale. Elles jouent un rôle essentiel pour les règlements et la liquidité, mais ne sont pas synonymes de bénéfices ou de capital.',
                        'choices' => [
                            ['choice_text' => 'Elles servent notamment au règlement interbancaire et à la gestion de la liquidité', 'is_correct' => true],
                            ['choice_text' => 'Elles représentent les profits mis en réserve pour verser des dividendes', 'is_correct' => false],
                            ['choice_text' => 'Elles représentent le capital apporté par les actionnaires pour absorber les pertes', 'is_correct' => false],
                            ['choice_text' => 'Elles correspondent aux dépôts des clients conservés dans les coffres de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque reçoit 3 000 € de remboursement du principal d\'un prêt et utilise la somme pour réduire son besoin de refinancement. Que s\'est-il passé sur l\'encours du prêt concerné ?',
                        'explanation' => 'Le remboursement du principal réduit directement l\'encours de la dette du client. L\'affectation ultérieure des fonds au refinancement concerne la gestion de liquidité de la banque.',
                        'choices' => [
                            ['choice_text' => 'Il a diminué de 3 000 €', 'is_correct' => true],
                            ['choice_text' => 'Il a augmenté de 3 000 €', 'is_correct' => false],
                            ['choice_text' => 'Il est resté stable car les fonds ont servi au refinancement', 'is_correct' => false],
                            ['choice_text' => 'Il a diminué de 6 000 € car le prêt et le dépôt baissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale surveille-t-elle aussi la dynamique du crédit lors de l\'analyse monétaire ?',
                        'explanation' => 'Le crédit bancaire est lié à la formation de dépôts et au financement des ménages et entreprises. Son évolution peut donc fournir des informations sur les conditions monétaires et l\'activité économique.',
                        'choices' => [
                            ['choice_text' => 'Parce que le crédit détermine directement le montant des impôts perçus par l\'État', 'is_correct' => false],
                            ['choice_text' => 'Parce que le crédit influence la création de dépôts et le financement de l\'activité', 'is_correct' => true],
                            ['choice_text' => 'Parce que le crédit bancaire fixe le niveau des taux directeurs de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Parce que le crédit mesure la quantité de billets imprimés chaque année par la banque', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bilan d\'une banque centrale',
                'description' => 'Identifier les principales catégories d\'actifs et de passifs d\'une banque centrale et interpréter des variations simples de bilan.',
                'questions' => [
                    [
                        'question' => 'Lequel constitue typiquement un actif de banque centrale ?',
                        'explanation' => 'Les titres détenus sont des actifs de la banque centrale. Les billets en circulation et les réserves des banques sont, eux, des passifs de la banque centrale.',
                        'choices' => [
                            ['choice_text' => 'Les billets en circulation émis par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Des titres détenus par la banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Les réserves déposées par les banques commerciales', 'is_correct' => false],
                            ['choice_text' => 'Les dépôts de l\'État auprès de la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le bilan d\'une banque centrale, les réserves des banques commerciales apparaissent généralement :',
                        'explanation' => 'Les réserves sont des créances des banques commerciales sur la banque centrale. Elles constituent donc des engagements, donc des passifs, pour la banque centrale.',
                        'choices' => [
                            ['choice_text' => 'Au passif', 'is_correct' => true],
                            ['choice_text' => 'À l\'actif', 'is_correct' => false],
                            ['choice_text' => 'Dans les capitaux propres de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Hors bilan, dans les engagements éventuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale augmente ses achats de titres et règle ces achats en créant des réserves. Quelle évolution simplifiée de son bilan peut-on attendre ?',
                        'explanation' => 'Un achat de titres augmente l\'actif en titres. Si le règlement crée des réserves, le passif en réserves augmente en parallèle dans une présentation simplifiée du bilan.',
                        'choices' => [
                            ['choice_text' => 'Les actifs de titres augmentent et les capitaux propres diminuent', 'is_correct' => false],
                            ['choice_text' => 'Les actifs de titres et les passifs de réserves augmentent', 'is_correct' => true],
                            ['choice_text' => 'Les actifs de titres diminuent et les passifs de réserves augmentent', 'is_correct' => false],
                            ['choice_text' => 'Les passifs de billets diminuent et les actifs de réserves augmentent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale détient 300 milliards d\'euros de réserves de change et 200 milliards de titres. Hors autres postes, ses actifs s\'élèvent à :',
                        'explanation' => 'En additionnant les deux catégories : 300 + 200 = 500 milliards d\'euros, en supposant qu\'il n\'existe aucun autre actif.',
                        'choices' => [
                            ['choice_text' => '100 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '300 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '500 milliards d\'euros', 'is_correct' => true],
                            ['choice_text' => '600 milliards d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les billets en circulation sont-ils considérés comme un passif d\'une banque centrale ?',
                        'explanation' => 'Dans le bilan de l\'émetteur, les billets en circulation figurent comme un passif. Ils représentent de la monnaie émise par la banque centrale et détenue par le public.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'ils représentent les titres détenus par la banque centrale à son actif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils représentent une obligation monétaire émise par la banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'ils correspondent aux réserves de change accumulées par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils constituent le capital apporté par l\'État lors de la création de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les réserves bancaires auprès de la banque centrale augmentent de 10 milliards d\'euros sans autre changement, le passif de la banque centrale augmente de :',
                        'explanation' => 'Les réserves des banques sont un passif pour la banque centrale. Une hausse de 10 milliards augmente donc ce poste de 10 milliards, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => '0 euro', 'is_correct' => false],
                            ['choice_text' => '1 milliard d\'euros', 'is_correct' => false],
                            ['choice_text' => '10 milliards d\'euros', 'is_correct' => true],
                            ['choice_text' => '100 milliards d\'euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel lien comptable doit être respecté par un bilan de banque centrale équilibré ?',
                        'explanation' => 'Comme pour tout bilan comptable, l\'égalité fondamentale est Actifs = Passifs + Capitaux propres. Le détail des postes dépend de la structure spécifique de la banque centrale.',
                        'choices' => [
                            ['choice_text' => 'Total des actifs = total des passifs − capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Total des actifs = total des passifs + capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Total des passifs = total des actifs + capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Capitaux propres = total des actifs + total des passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque centrale reçoit le remboursement d\'un prêt accordé à une banque commerciale. Quel effet simplifié peut avoir cette opération sur son bilan ?',
                        'explanation' => 'Le remboursement réduit le poste de prêt à l\'actif. Si le règlement est effectué par une diminution des réserves de la banque emprunteuse, le passif correspondant peut diminuer également.',
                        'choices' => [
                            ['choice_text' => 'L\'actif de prêt diminue et un passif de réserves peut également diminuer lors du règlement', 'is_correct' => true],
                            ['choice_text' => 'L\'actif de prêt augmente et un passif de réserves peut également augmenter lors du règlement', 'is_correct' => false],
                            ['choice_text' => 'Les billets en circulation diminuent et ses capitaux propres augmentent du même montant', 'is_correct' => false],
                            ['choice_text' => 'L\'actif de prêt est transformé en capitaux propres et les réserves restent inchangées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bilan d\'une banque centrale est-il suivi par les économistes ?',
                        'explanation' => 'Le bilan montre comment la banque centrale met en œuvre certaines opérations et comment évoluent ses principaux actifs et passifs. Il constitue donc une source d\'information importante pour l\'analyse monétaire.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il indique le niveau des impôts payés par les banques commerciales chaque année', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il renseigne sur la composition de ses actifs, ses engagements et certaines opérations monétaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il mesure les richesses détenues par les ménages et les entreprises du pays', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il publie les prévisions de croissance et d\'inflation de l\'économie nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bilan d\'une banque centrale affiche 500 milliards d\'euros d\'actifs et 460 milliards d\'euros d\'engagements (billets, réserves et autres dettes). Quel est le montant de ses capitaux propres ?',
                        'explanation' => 'Comme Actifs = Passifs + Capitaux propres, les capitaux propres valent 500 − 460 = 40 milliards d\'euros.',
                        'choices' => [
                            ['choice_text' => '460 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '960 milliards d\'euros', 'is_correct' => false],
                            ['choice_text' => '40 milliards d\'euros', 'is_correct' => true],
                            ['choice_text' => '500 milliards d\'euros', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
