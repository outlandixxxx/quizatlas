<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialMarketsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-markets')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
        ];

        $quizzes = [
            [
                'title' => 'Introduction aux marchés financiers',
                'description' => 'Introduction aux marchés financiers',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un marché financier ?',
                        'explanation' => 'Un marché financier est un marché où s’échangent différents instruments financiers.',
                        'choices' => [
                            ['choice_text' => 'Un marché réservé aux entreprises déjà cotées en bourse', 'is_correct' => false],
                            ['choice_text' => 'Un marché où l’État fixe les cours de chaque titre échangé', 'is_correct' => false],
                            ['choice_text' => 'Un marché où s’échangent des biens de consommation courante', 'is_correct' => false],
                            ['choice_text' => 'Un marché où s’échangent des instruments financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux rôles des marchés financiers ?',
                        'explanation' => 'Les marchés financiers facilitent notamment le financement et l’investissement.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le financement et l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Fixer les prix des biens et services de consommation', 'is_correct' => false],
                            ['choice_text' => 'Contrôler la politique monétaire d’un pays', 'is_correct' => false],
                            ['choice_text' => 'Assurer la rentabilité des entreprises cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui peut participer aux marchés financiers ?',
                        'explanation' => 'Les marchés financiers peuvent réunir des particuliers, des entreprises et diverses institutions.',
                        'choices' => [
                            ['choice_text' => 'Uniquement les investisseurs institutionnels et les grandes entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les particuliers, les entreprises et les institutions', 'is_correct' => true],
                            ['choice_text' => 'Seuls les professionnels de la finance titulaires d’un agrément', 'is_correct' => false],
                            ['choice_text' => 'Seuls les actionnaires actuels des entreprises cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une action ?',
                        'explanation' => 'Une action représente généralement une part de propriété dans une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une dette émise par l’entreprise auprès de prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt rémunéré auprès d’une banque', 'is_correct' => false],
                            ['choice_text' => 'Une part de la dette publique d’un pays', 'is_correct' => false],
                            ['choice_text' => 'Une part de propriété dans une entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une obligation ?',
                        'explanation' => 'Une obligation est généralement un titre de dette représentant une créance sur son émetteur.',
                        'choices' => [
                            ['choice_text' => 'Une créance sur un émetteur', 'is_correct' => true],
                            ['choice_text' => 'Une part obligatoire du capital social', 'is_correct' => false],
                            ['choice_text' => 'Une marchandise physique', 'is_correct' => false],
                            ['choice_text' => 'Une action sans droit de vote', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investisseur ?',
                        'explanation' => 'Un investisseur place des capitaux dans l’espoir d’obtenir un rendement ou un avantage financier futur.',
                        'choices' => [
                            ['choice_text' => 'Une personne ou une organisation qui emprunte des capitaux pour financer ses dépenses courantes', 'is_correct' => false],
                            ['choice_text' => 'Un intermédiaire qui exécute des ordres pour le compte de ses clients contre une commission', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise qui émet des titres afin de lever des capitaux sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Une personne ou une organisation qui place des capitaux dans l’espoir d’obtenir un rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement d’un investissement ?',
                        'explanation' => 'Le rendement mesure le gain ou la perte généré par l’investissement sur une période donnée.',
                        'choices' => [
                            ['choice_text' => 'Le montant total des capitaux investis au début de la période considérée', 'is_correct' => false],
                            ['choice_text' => 'Le gain ou la perte généré par l’investissement sur une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Le prix auquel l’investissement pourrait être revendu à tout moment', 'is_correct' => false],
                            ['choice_text' => 'La part des frais de gestion prélevés sur l’investissement chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises utilisent-elles les marchés financiers ?',
                        'explanation' => 'Les entreprises peuvent utiliser les marchés financiers pour obtenir des financements et gérer certaines expositions financières.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer les taux d’intérêt applicables aux crédits bancaires', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire leurs impôts sur les bénéfices et leurs charges salariales', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir des financements et gérer certaines expositions financières', 'is_correct' => true],
                            ['choice_text' => 'Pour contrôler le niveau de l’inflation dans leur pays d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un titre financier ?',
                        'explanation' => 'Un titre financier représente généralement un droit financier ou économique.',
                        'choices' => [
                            ['choice_text' => 'Un document comptable retraçant les dépenses d’une entreprise sur un exercice', 'is_correct' => false],
                            ['choice_text' => 'Un certificat attestant l’identité de l’investisseur auprès du courtier', 'is_correct' => false],
                            ['choice_text' => 'Un support de paiement servant à régler les achats courants', 'is_correct' => false],
                            ['choice_text' => 'Un instrument représentant généralement un droit financier ou économique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante sur un marché financier ?',
                        'explanation' => 'Une bonne liquidité facilite l’achat et la vente des actifs.',
                        'choices' => [
                            ['choice_text' => 'Elle indique si l’entreprise verse un dividende élevé', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure l’écart entre le rendement et l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Elle facilite l’achat et la vente des actifs', 'is_correct' => true],
                            ['choice_text' => 'Elle fixe le prix d’émission des nouvelles actions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Actions et marché boursier',
                'description' => 'Actions et marché boursier',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une action ordinaire ?',
                        'explanation' => 'Une action ordinaire représente une fraction du capital d’une société.',
                        'choices' => [
                            ['choice_text' => 'Un titre de créance représentant un prêt consenti à une société', 'is_correct' => false],
                            ['choice_text' => 'Un titre représentant une fraction du capital d’une société', 'is_correct' => true],
                            ['choice_text' => 'Un titre donnant droit à un coupon fixe et à un remboursement', 'is_correct' => false],
                            ['choice_text' => 'Un titre négociable représentant un dépôt à court terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut recevoir un actionnaire sous forme de distribution ?',
                        'explanation' => 'Un actionnaire peut recevoir un dividende lorsque l’entreprise en distribue.',
                        'choices' => [
                            ['choice_text' => 'Un dividende', 'is_correct' => true],
                            ['choice_text' => 'Un coupon obligataire obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une prime d’assurance', 'is_correct' => false],
                            ['choice_text' => 'Une taxe supplémentaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une hausse du cours d’une action ?',
                        'explanation' => 'Une hausse du cours signifie que le prix de marché de l’action a augmenté.',
                        'choices' => [
                            ['choice_text' => 'Le dividende versé par l’action a augmenté', 'is_correct' => false],
                            ['choice_text' => 'Le prix de marché de l’action a augmenté', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’actions en circulation a augmenté', 'is_correct' => false],
                            ['choice_text' => 'La valeur nominale de l’action a été relevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une introduction en bourse ?',
                        'explanation' => 'Une introduction en bourse correspond à la première admission des actions d’une entreprise à la négociation publique.',
                        'choices' => [
                            ['choice_text' => 'L’émission d’obligations supplémentaires par une entreprise déjà cotée', 'is_correct' => false],
                            ['choice_text' => 'La première admission des actions d’une entreprise à la négociation publique', 'is_correct' => true],
                            ['choice_text' => 'Le rachat par une entreprise de ses propres actions sur le marché', 'is_correct' => false],
                            ['choice_text' => 'La vente d’actions existantes entre deux investisseurs sur le marché secondaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie être actionnaire d’une entreprise ?',
                        'explanation' => 'Être actionnaire signifie détenir une participation dans le capital de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Détenir une participation dans son capital', 'is_correct' => true],
                            ['choice_text' => 'Lui avoir prêté de l’argent avec un remboursement prévu', 'is_correct' => false],
                            ['choice_text' => 'Occuper un poste de direction au sein de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Lui fournir des biens ou des services en échange d’un paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cours d’une action peut-il varier ?',
                        'explanation' => 'Le cours évolue notamment en fonction de l’offre, de la demande et des informations disponibles.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’offre et la demande ainsi que les informations disponibles évoluent', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’entreprise modifie chaque jour la valeur nominale de ses actions', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cours est ajusté chaque année par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Parce que la bourse recalcule le cours selon le capital social de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier ?',
                        'explanation' => 'Un indice boursier représente l’évolution d’un ensemble de titres.',
                        'choices' => [
                            ['choice_text' => 'Un titre représentant une part du capital d’une société cotée', 'is_correct' => false],
                            ['choice_text' => 'Un taux de référence fixé par la banque centrale chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Un classement des entreprises selon leur chiffre d’affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur représentant l’évolution d’un ensemble de titres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est directement associé à une action ?',
                        'explanation' => 'Une action est notamment exposée au risque de variation de son cours.',
                        'choices' => [
                            ['choice_text' => 'Le risque de variation de son cours', 'is_correct' => true],
                            ['choice_text' => 'Le risque de non-remboursement du principal à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Le risque de baisse du taux d’intérêt sur un dépôt à terme', 'is_correct' => false],
                            ['choice_text' => 'Le risque de hausse du prix des biens de consommation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une plus-value sur une action ?',
                        'explanation' => 'Une plus-value correspond à un gain lorsque le prix de vente est supérieur au prix d’achat, avant prise en compte des coûts et de la fiscalité.',
                        'choices' => [
                            ['choice_text' => 'Un gain obtenu lorsque l’entreprise verse un dividende supérieur à celui de l’année précédente', 'is_correct' => false],
                            ['choice_text' => 'Un gain réalisé lorsque le prix d’achat est supérieur au prix de vente, avant prise en compte des coûts et fiscalité', 'is_correct' => false],
                            ['choice_text' => 'Un gain comptable correspondant à l’augmentation du capital social de l’entreprise émettrice', 'is_correct' => false],
                            ['choice_text' => 'Un gain réalisé lorsque le prix de vente est supérieur au prix d’achat, avant prise en compte des coûts et fiscalité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il diversifier ses actions ?',
                        'explanation' => 'La diversification permet notamment de réduire l’exposition à un seul titre ou secteur.',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter le dividende versé par chaque entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire l’exposition à un seul titre ou secteur', 'is_correct' => true],
                            ['choice_text' => 'Pour obtenir un cours plus élevé sur chaque titre acheté', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de payer des frais de courtage lors des achats', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Obligations et marché de la dette',
                'description' => 'Obligations et marché de la dette',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une obligation ?',
                        'explanation' => 'Une obligation est un titre de dette émis par une entreprise, un État ou une autre organisation.',
                        'choices' => [
                            ['choice_text' => 'Un titre de propriété émis par une entreprise pour financer son capital', 'is_correct' => false],
                            ['choice_text' => 'Un contrat par lequel une banque collecte des dépôts auprès d’un client', 'is_correct' => false],
                            ['choice_text' => 'Un titre de dette émis par une entreprise, un État ou une autre organisation', 'is_correct' => true],
                            ['choice_text' => 'Un instrument de paiement émis par une banque centrale pour régler les échanges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le coupon d’une obligation ?',
                        'explanation' => 'Le coupon correspond au paiement d’intérêt prévu par l’obligation.',
                        'choices' => [
                            ['choice_text' => 'Le montant remboursé à l’échéance de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'Le paiement d’intérêt prévu par l’obligation', 'is_correct' => true],
                            ['choice_text' => 'Le prix payé par l’investisseur lors de l’émission', 'is_correct' => false],
                            ['choice_text' => 'La part du bénéfice versée aux actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au remboursement d’une obligation arrivant à échéance ?',
                        'explanation' => 'Le principal est remboursé selon les conditions prévues par l’obligation.',
                        'choices' => [
                            ['choice_text' => 'Le principal est reporté à la prochaine date de coupon', 'is_correct' => false],
                            ['choice_text' => 'Seul le dernier coupon est versé et le principal reste dû', 'is_correct' => false],
                            ['choice_text' => 'L’obligation est échangée contre des actions de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le principal est remboursé selon les conditions prévues', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque qu’un émetteur ne respecte pas ses obligations de paiement ?',
                        'explanation' => 'Il s’agit du risque de crédit ou de défaut.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux d’intérêt sur le prix de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change entre deux devises', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit ou de défaut', 'is_correct' => true],
                            ['choice_text' => 'Le risque de liquidité du marché interbancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque les taux d’intérêt du marché augmentent, le prix d’une obligation à taux fixe existante tend généralement à :',
                        'explanation' => 'Toutes choses égales par ailleurs, la hausse des taux tend à réduire le prix de marché d’une obligation à taux fixe existante.',
                        'choices' => [
                            ['choice_text' => 'Augmenter', 'is_correct' => false],
                            ['choice_text' => 'Rester stable jusqu’à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Être remboursé avant l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Baisser', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur nominale d’une obligation ?',
                        'explanation' => 'La valeur nominale est le montant de référence prévu pour le remboursement du principal.',
                        'choices' => [
                            ['choice_text' => 'Le prix de marché de l’obligation à la date de l’achat', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des intérêts versés pendant la vie de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'Le montant de référence prévu pour le remboursement du principal', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’intérêt annuel exprimé en pourcentage du prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d’État est généralement émise par :',
                        'explanation' => 'Une obligation d’État est généralement émise par un gouvernement ou une entité publique habilitée.',
                        'choices' => [
                            ['choice_text' => 'Une société privée dont les actions sont cotées', 'is_correct' => false],
                            ['choice_text' => 'Un gouvernement ou une entité publique habilitée', 'is_correct' => true],
                            ['choice_text' => 'Une banque commerciale agissant pour ses déposants', 'is_correct' => false],
                            ['choice_text' => 'Une bourse de valeurs pour financer ses activités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’échéance d’une obligation ?',
                        'explanation' => 'L’échéance est la date prévue pour le remboursement final du principal.',
                        'choices' => [
                            ['choice_text' => 'La date prévue pour le remboursement final du principal', 'is_correct' => true],
                            ['choice_text' => 'La date prévue pour le paiement du premier coupon', 'is_correct' => false],
                            ['choice_text' => 'La date à laquelle l’obligation est émise pour la première fois', 'is_correct' => false],
                            ['choice_text' => 'La date limite pour vendre l’obligation sur le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation risquée peut-elle offrir un rendement plus élevé ?',
                        'explanation' => 'Les investisseurs peuvent demander une rémunération supplémentaire en contrepartie du risque.',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs peuvent exiger une rémunération supplémentaire pour le risque', 'is_correct' => true],
                            ['choice_text' => 'L’émetteur est contraint par la loi de verser un coupon plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Le principal est revalorisé en fonction de la hausse des cours de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Les obligations risquées ont une échéance plus courte que les autres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la maturité d’une obligation ?',
                        'explanation' => 'La maturité correspond à la durée restant jusqu’à son échéance.',
                        'choices' => [
                            ['choice_text' => 'Le montant du capital restant à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Le délai entre deux versements de coupons', 'is_correct' => false],
                            ['choice_text' => 'La durée restante jusqu’à son échéance', 'is_correct' => true],
                            ['choice_text' => 'La durée écoulée depuis l’émission de l’obligation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Marché monétaire et instruments à court terme',
                'description' => 'Marché monétaire et instruments à court terme',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du marché monétaire ?',
                        'explanation' => 'Le marché monétaire facilite les financements et placements à court terme.',
                        'choices' => [
                            ['choice_text' => 'Faciliter les financements et placements à court terme', 'is_correct' => true],
                            ['choice_text' => 'Faciliter les financements de projets d’investissement à long terme', 'is_correct' => false],
                            ['choice_text' => 'Permettre aux entreprises de lever du capital en émettant des actions', 'is_correct' => false],
                            ['choice_text' => 'Fixer les taux de change entre les principales devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique est généralement associée aux instruments du marché monétaire ?',
                        'explanation' => 'Les instruments du marché monétaire ont généralement des échéances courtes.',
                        'choices' => [
                            ['choice_text' => 'Une échéance relativement longue', 'is_correct' => false],
                            ['choice_text' => 'Une échéance relativement courte', 'is_correct' => true],
                            ['choice_text' => 'Une participation au capital de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Un rendement variable lié aux bénéfices de l’émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que sont les bons du Trésor à court terme ?',
                        'explanation' => 'Ce sont des titres de dette publique à court terme.',
                        'choices' => [
                            ['choice_text' => 'Des titres de dette émis par les entreprises à long terme', 'is_correct' => false],
                            ['choice_text' => 'Des titres de propriété émis par l’État', 'is_correct' => false],
                            ['choice_text' => 'Des titres de dette publique à court terme', 'is_correct' => true],
                            ['choice_text' => 'Des certificats de dépôt émis par les banques commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut utiliser le marché monétaire pour :',
                        'explanation' => 'Le marché monétaire peut être utilisé pour gérer des besoins de financement à court terme.',
                        'choices' => [
                            ['choice_text' => 'Financer un projet d’investissement sur plusieurs décennies', 'is_correct' => false],
                            ['choice_text' => 'Augmenter son capital social en émettant des actions', 'is_correct' => false],
                            ['choice_text' => 'Fixer le taux directeur applicable à ses emprunts', 'is_correct' => false],
                            ['choice_text' => 'Gérer ses besoins de financement à court terme', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un certificat de dépôt ?',
                        'explanation' => 'Un certificat de dépôt représente généralement un dépôt rémunéré pour une durée déterminée.',
                        'choices' => [
                            ['choice_text' => 'Un instrument représentant généralement un dépôt rémunéré pour une durée déterminée', 'is_correct' => true],
                            ['choice_text' => 'Un instrument représentant généralement une créance sur l’État à échéance courte', 'is_correct' => false],
                            ['choice_text' => 'Un instrument représentant généralement une part du capital d’une banque', 'is_correct' => false],
                            ['choice_text' => 'Un document attestant qu’un compte courant a été ouvert auprès d’une banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les instruments monétaires sont-ils souvent considérés comme plus liquides que certains investissements à long terme ?',
                        'explanation' => 'Ils ont généralement des maturités courtes et certains sont négociés sur des marchés liquides.',
                        'choices' => [
                            ['choice_text' => 'Ils offrent généralement un rendement supérieur à celui des actions sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Ils sont émis généralement par des entreprises dont les actions sont très demandées', 'is_correct' => false],
                            ['choice_text' => 'Ils sont généralement à échéance lointaine, mais remboursables à la demande de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Ils ont généralement des maturités courtes et peuvent être négociés sur des marchés liquides', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel acteur joue un rôle central dans la gestion de la liquidité du système bancaire ?',
                        'explanation' => 'La banque centrale joue un rôle central dans la gestion de la liquidité du système bancaire.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise industrielle', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Un actionnaire individuel', 'is_correct' => false],
                            ['choice_text' => 'Une agence immobilière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le marché interbancaire concerne principalement :',
                        'explanation' => 'Le marché interbancaire concerne les échanges de liquidité et de financement entre établissements financiers.',
                        'choices' => [
                            ['choice_text' => 'Les prêts accordés par les banques aux particuliers pour l’achat d’un logement', 'is_correct' => false],
                            ['choice_text' => 'Les opérations d’achat et de vente d’actions entre investisseurs particuliers', 'is_correct' => false],
                            ['choice_text' => 'Les paiements effectués par les entreprises à leurs fournisseurs étrangers', 'is_correct' => false],
                            ['choice_text' => 'Les échanges de liquidité et de financement entre établissements financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un placement à court terme vise généralement à :',
                        'explanation' => 'Un placement à court terme cherche généralement à préserver la liquidité tout en obtenant éventuellement un rendement.',
                        'choices' => [
                            ['choice_text' => 'Maximiser le rendement en acceptant de bloquer les fonds pendant dix ans', 'is_correct' => false],
                            ['choice_text' => 'Obtenir une participation de contrôle dans une entreprise cotée', 'is_correct' => false],
                            ['choice_text' => 'Financer la construction d’actifs industriels sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Préserver la liquidité tout en obtenant éventuellement un rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux directeurs peut influencer le marché monétaire en :',
                        'explanation' => 'Une hausse des taux directeurs peut modifier le coût du financement à court terme.',
                        'choices' => [
                            ['choice_text' => 'Modifiant le prix d’émission des actions nouvelles', 'is_correct' => false],
                            ['choice_text' => 'Modifiant la valeur nominale des obligations existantes', 'is_correct' => false],
                            ['choice_text' => 'Modifiant le coût du financement à court terme', 'is_correct' => true],
                            ['choice_text' => 'Modifiant le montant des dividendes versés par les banques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intermédiaires et institutions financières',
                'description' => 'Intermédiaires et institutions financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une banque commerciale ?',
                        'explanation' => 'Une banque commerciale collecte notamment des dépôts, accorde des crédits et fournit des services financiers.',
                        'choices' => [
                            ['choice_text' => 'Émettre la monnaie, fixer les taux directeurs et superviser le système de paiement', 'is_correct' => false],
                            ['choice_text' => 'Gérer les portefeuilles des fonds communs et fixer le prix des actions cotées', 'is_correct' => false],
                            ['choice_text' => 'Assurer les risques des clients et verser des indemnités en cas de sinistre', 'is_correct' => false],
                            ['choice_text' => 'Collecter des dépôts, accorder des crédits et fournir des services financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'explanation' => 'La banque centrale conduit généralement la politique monétaire et contribue à la stabilité financière selon son mandat.',
                        'choices' => [
                            ['choice_text' => 'Conduire la politique monétaire et contribuer à la stabilité financière selon son mandat', 'is_correct' => true],
                            ['choice_text' => 'Accorder des crédits aux particuliers et collecter leurs dépôts selon son agrément', 'is_correct' => false],
                            ['choice_text' => 'Gérer les investissements des clients et contribuer à la croissance des fonds communs', 'is_correct' => false],
                            ['choice_text' => 'Organiser les introductions en bourse et fixer les cours des titres selon la demande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle un courtier peut-il jouer sur les marchés financiers ?',
                        'explanation' => 'Un courtier peut faciliter l’exécution des ordres d’achat et de vente pour ses clients.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’exécution des ordres d’achat et de vente pour ses clients', 'is_correct' => true],
                            ['choice_text' => 'Émettre des titres au nom des entreprises qui souhaitent lever des capitaux', 'is_correct' => false],
                            ['choice_text' => 'Régler et compenser les transactions entre les différentes banques', 'is_correct' => false],
                            ['choice_text' => 'Mutualiser les risques de ses clients en échange du paiement de primes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds d’investissement ?',
                        'explanation' => 'Un fonds regroupe des capitaux pour investir selon une stratégie donnée.',
                        'choices' => [
                            ['choice_text' => 'Un établissement qui collecte des dépôts et accorde des crédits à ses clients', 'is_correct' => false],
                            ['choice_text' => 'Une société qui mutualise les risques de ses clients en échange de primes', 'is_correct' => false],
                            ['choice_text' => 'Un véhicule qui regroupe des capitaux pour investir selon une stratégie donnée', 'is_correct' => true],
                            ['choice_text' => 'Un compte bancaire dont les intérêts sont fixés par la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement une compagnie d’assurance ?',
                        'explanation' => 'Une compagnie d’assurance mutualise et couvre certains risques en échange de primes.',
                        'choices' => [
                            ['choice_text' => 'Elle collecte des dépôts et finance des crédits en échange d’intérêts', 'is_correct' => false],
                            ['choice_text' => 'Elle regroupe des capitaux pour investir selon une stratégie donnée', 'is_correct' => false],
                            ['choice_text' => 'Elle exécute des ordres de bourse en échange de commissions', 'is_correct' => false],
                            ['choice_text' => 'Elle mutualise et couvre certains risques en échange de primes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intermédiaires financiers sont-ils importants ?',
                        'explanation' => 'Ils facilitent la circulation des capitaux entre des agents ayant des besoins différents.',
                        'choices' => [
                            ['choice_text' => 'Ils déterminent le niveau des taux d’intérêt à la place de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Ils assurent aux épargnants un rendement supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Ils facilitent la circulation des capitaux entre agents ayant des besoins différents', 'is_correct' => true],
                            ['choice_text' => 'Ils limitent le nombre d’actifs disponibles afin de réduire la volatilité des prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une société de gestion d’actifs ?',
                        'explanation' => 'Une société de gestion d’actifs gère des investissements pour des clients ou des fonds.',
                        'choices' => [
                            ['choice_text' => 'Une société qui gère des investissements pour des clients ou des fonds', 'is_correct' => true],
                            ['choice_text' => 'Une société qui émet des actions pour financer ses propres investissements', 'is_correct' => false],
                            ['choice_text' => 'Une société qui assure des biens et des personnes contre certains risques', 'is_correct' => false],
                            ['choice_text' => 'Une société qui tient les comptes de dépôt et accorde des crédits aux clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un gestionnaire de portefeuille ?',
                        'explanation' => 'Le gestionnaire cherche à gérer les investissements conformément aux objectifs et contraintes du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Gérer les investissements conformément aux objectifs et contraintes du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Concentrer le portefeuille sur l’actif qui a le mieux performé récemment', 'is_correct' => false],
                            ['choice_text' => 'Vendre les titres du portefeuille dès que leur prix baisse de quelques points', 'is_correct' => false],
                            ['choice_text' => 'Exécuter les ordres du client au meilleur prix sans conseil sur l’allocation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une chambre de compensation contribue notamment à :',
                        'explanation' => 'Une chambre de compensation contribue notamment à organiser et sécuriser le règlement de certaines transactions.',
                        'choices' => [
                            ['choice_text' => 'Fixer le cours des titres échangés selon l’offre et la demande du marché', 'is_correct' => false],
                            ['choice_text' => 'Conseiller les investisseurs sur le choix de leur allocation d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Superviser l’admission des entreprises à la cote et leur information financière', 'is_correct' => false],
                            ['choice_text' => 'Organiser et sécuriser le règlement de certaines transactions financières', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réglementation financière est-elle importante ?',
                        'explanation' => 'La réglementation financière vise notamment à protéger les investisseurs et à préserver la stabilité et l’intégrité des marchés.',
                        'choices' => [
                            ['choice_text' => 'Elle vise notamment à maximiser les profits des banques et à limiter la concurrence entre elles', 'is_correct' => false],
                            ['choice_text' => 'Elle vise notamment à protéger les investisseurs et préserver la stabilité et l’intégrité des marchés', 'is_correct' => true],
                            ['choice_text' => 'Elle vise notamment à fixer les cours des actions et à éviter leurs variations quotidiennes', 'is_correct' => false],
                            ['choice_text' => 'Elle vise notamment à financer les États à moindre coût et à réduire le montant de leur dette publique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rendement, risque et diversification',
                'description' => 'Rendement, risque et diversification',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque financier ?',
                        'explanation' => 'Le risque financier correspond à la possibilité que le résultat réel diffère du résultat attendu, notamment avec une perte.',
                        'choices' => [
                            ['choice_text' => 'La certitude que le résultat réel sera inférieur au résultat attendu sur la période', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le prix d’achat et le prix de vente proposés par les teneurs de marché', 'is_correct' => false],
                            ['choice_text' => 'Le montant maximal que l’investisseur a décidé de placer sur un seul actif risqué', 'is_correct' => false],
                            ['choice_text' => 'La possibilité que le résultat réel diffère du résultat attendu, notamment avec une perte', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement attendu est-il généralement lié au risque ?',
                        'explanation' => 'Les investisseurs peuvent demander une rémunération supplémentaire pour accepter davantage de risque.',
                        'choices' => [
                            ['choice_text' => 'Les entreprises plus risquées sont tenues par la loi de verser des dividendes plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs peuvent demander une rémunération supplémentaire pour accepter davantage de risque', 'is_correct' => true],
                            ['choice_text' => 'Les actifs plus risqués coûtent moins cher à détenir, ce qui augmente leur rendement', 'is_correct' => false],
                            ['choice_text' => 'Les marchés déduisent le rendement attendu des frais de courtage payés par les investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la diversification ?',
                        'explanation' => 'La diversification consiste à répartir les investissements entre plusieurs actifs afin de réduire certaines concentrations de risque.',
                        'choices' => [
                            ['choice_text' => 'Répartir les investissements entre plusieurs comptes bancaires afin de réduire les frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Concentrer les investissements sur les actifs les plus performants afin d’augmenter le rendement', 'is_correct' => false],
                            ['choice_text' => 'Répartir les investissements entre plusieurs actifs afin de réduire certaines concentrations de risque', 'is_correct' => true],
                            ['choice_text' => 'Acheter et revendre fréquemment un même actif afin de profiter des petites variations de prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque la diversification peut-elle réduire particulièrement ?',
                        'explanation' => 'La diversification peut surtout réduire le risque spécifique lié à un titre ou une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le risque lié à l’évolution générale de l’économie et des marchés', 'is_correct' => false],
                            ['choice_text' => 'Le risque que l’inflation réduise le pouvoir d’achat des revenus', 'is_correct' => false],
                            ['choice_text' => 'Le risque de variation de la politique monétaire de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Le risque spécifique à un titre ou à une entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité d’un actif ?',
                        'explanation' => 'La volatilité mesure l’ampleur des variations du prix ou des rendements.',
                        'choices' => [
                            ['choice_text' => 'Une mesure de la rapidité avec laquelle l’actif peut être vendu sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Une mesure de l’ampleur des variations de son prix ou de ses rendements', 'is_correct' => true],
                            ['choice_text' => 'Une mesure du montant des dividendes versés par l’actif sur une année', 'is_correct' => false],
                            ['choice_text' => 'Une mesure du rendement moyen obtenu par l’actif sur plusieurs années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille diversifié contient généralement :',
                        'explanation' => 'Un portefeuille diversifié comprend plusieurs investissements dont les risques ne sont pas parfaitement identiques.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs investissements dont les risques évoluent exactement de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Un petit nombre d’actifs choisis parmi les plus performants du marché', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs titres émis par la même entreprise et exposés au même secteur', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs investissements dont les risques ne sont pas parfaitement identiques', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une perte sur un investissement signifie :',
                        'explanation' => 'Une perte signifie que la valeur ou le rendement de l’investissement a diminué par rapport à la référence considérée.',
                        'choices' => [
                            ['choice_text' => 'Que l’émetteur de l’investissement a cessé de verser des dividendes à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Que la valeur ou le rendement de l’investissement a diminué par rapport à la référence considérée', 'is_correct' => true],
                            ['choice_text' => 'Que l’investisseur doit rembourser à son courtier la totalité du capital initialement placé', 'is_correct' => false],
                            ['choice_text' => 'Que la volatilité de l’investissement a augmenté par rapport à la période précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement réduit généralement le risque de concentration ?',
                        'explanation' => 'Répartir un portefeuille entre plusieurs actifs et secteurs réduit généralement la concentration du risque.',
                        'choices' => [
                            ['choice_text' => 'Concentrer le portefeuille sur les secteurs les plus porteurs du moment', 'is_correct' => false],
                            ['choice_text' => 'Réinvestir les gains dans l’actif qui a le mieux performé', 'is_correct' => false],
                            ['choice_text' => 'Répartir le portefeuille entre plusieurs actifs et secteurs', 'is_correct' => true],
                            ['choice_text' => 'Vendre les actifs dont le prix baisse pour les racheter plus tard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement négatif ?',
                        'explanation' => 'Un rendement négatif correspond à une perte sur la période considérée.',
                        'choices' => [
                            ['choice_text' => 'Un rendement inférieur à celui de l’indice de référence sur la période', 'is_correct' => false],
                            ['choice_text' => 'Un rendement provenant d’un dividende plutôt que d’une plus-value', 'is_correct' => false],
                            ['choice_text' => 'Un rendement correspondant à une perte sur la période considérée', 'is_correct' => true],
                            ['choice_text' => 'Un rendement stable sans gain ni perte sur la période considérée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître son profil de risque ?',
                        'explanation' => 'Le profil de risque aide à choisir des investissements compatibles avec sa capacité et sa volonté d’assumer des pertes.',
                        'choices' => [
                            ['choice_text' => 'Pour choisir des investissements dont le rendement sera supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer à l’avance le montant exact des impôts dus sur ses plus-values futures', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la durée pendant laquelle les marchés resteront orientés à la hausse', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir des investissements compatibles avec sa capacité et sa volonté d’assumer des pertes', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fonctionnement des ordres de marché',
                'description' => 'Fonctionnement des ordres de marché',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ordre au marché ?',
                        'explanation' => 'Un ordre au marché vise à acheter ou vendre rapidement au meilleur prix disponible.',
                        'choices' => [
                            ['choice_text' => 'Un ordre visant à acheter ou vendre à un prix maximal ou minimal fixé par l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Un ordre visant à acheter ou vendre rapidement au meilleur prix disponible', 'is_correct' => true],
                            ['choice_text' => 'Un ordre visant à acheter ou vendre à une date future convenue à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Un ordre visant à vendre un titre dès que son cours passe sous un seuil donné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre à cours limité ?',
                        'explanation' => 'Un ordre à cours limité comporte un prix limite défini par l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Un ordre exécuté immédiatement au meilleur prix disponible sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Un ordre dont la quantité est limitée par le courtier selon le capital', 'is_correct' => false],
                            ['choice_text' => 'Un ordre comportant un prix limite défini par l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Un ordre valable pour une durée limitée à une seule séance de bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un ordre d’achat limité, le prix limite représente généralement :',
                        'explanation' => 'Le prix limite d’achat correspond généralement au prix maximal que l’investisseur accepte de payer.',
                        'choices' => [
                            ['choice_text' => 'Le prix minimal auquel l’investisseur accepte de revendre le titre', 'is_correct' => false],
                            ['choice_text' => 'Le prix maximal que l’investisseur accepte de payer', 'is_correct' => true],
                            ['choice_text' => 'Le dernier prix auquel le titre a été échangé avant la passation de l’ordre', 'is_correct' => false],
                            ['choice_text' => 'Le prix moyen payé par les autres acheteurs pendant la séance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix acheteur, ou bid ?',
                        'explanation' => 'Le bid correspond au meilleur prix proposé par un acheteur.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur prix proposé par un vendeur', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’émission historique', 'is_correct' => false],
                            ['choice_text' => 'Le meilleur prix proposé par un acheteur', 'is_correct' => true],
                            ['choice_text' => 'Le prix du dividende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix vendeur, ou ask ?',
                        'explanation' => 'Le ask correspond généralement au meilleur prix auquel un vendeur propose de céder le titre.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur prix auquel un vendeur propose généralement de céder le titre', 'is_correct' => true],
                            ['choice_text' => 'Le meilleur prix auquel un acheteur propose généralement d’acquérir le titre', 'is_correct' => false],
                            ['choice_text' => 'Le prix moyen auquel le titre a été échangé durant la dernière séance', 'is_correct' => false],
                            ['choice_text' => 'Le prix auquel l’entreprise a émis le titre lors de son introduction en bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le spread bid-ask ?',
                        'explanation' => 'Le spread correspond à l’écart entre le meilleur prix acheteur et le meilleur prix vendeur.',
                        'choices' => [
                            ['choice_text' => 'L’écart entre le prix d’ouverture et le prix de clôture de la séance', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le prix le plus haut et le prix le plus bas de l’année', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le meilleur prix acheteur et le meilleur prix vendeur', 'is_correct' => true],
                            ['choice_text' => 'La différence entre le volume d’achats et le volume de ventes du jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le volume de négociation ?',
                        'explanation' => 'Le volume correspond à la quantité de titres échangés sur une période.',
                        'choices' => [
                            ['choice_text' => 'La quantité de titres échangés sur une période', 'is_correct' => true],
                            ['choice_text' => 'La valeur totale des titres d’une entreprise cotée en bourse', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres émis par l’entreprise lors de sa création', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le cours le plus haut et le cours le plus bas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte liquidité de marché signifie généralement :',
                        'explanation' => 'Une forte liquidité signifie qu’il est relativement facile d’acheter ou de vendre sans provoquer une variation excessive du prix.',
                        'choices' => [
                            ['choice_text' => 'Que les prix des titres varient peu d’une séance à l’autre et restent proches de la valeur nominale', 'is_correct' => false],
                            ['choice_text' => 'Que le nombre d’acheteurs est supérieur au nombre de vendeurs sur la séance', 'is_correct' => false],
                            ['choice_text' => 'Qu’il est relativement facile d’acheter ou de vendre sans provoquer une variation excessive du prix', 'is_correct' => true],
                            ['choice_text' => 'Que l’écart entre le prix acheteur et le prix vendeur est large et peu de titres s’échangent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre de vente ?',
                        'explanation' => 'Un ordre de vente est une instruction visant à céder un titre.',
                        'choices' => [
                            ['choice_text' => 'Une instruction visant à céder un titre', 'is_correct' => true],
                            ['choice_text' => 'Une instruction visant à acquérir un titre', 'is_correct' => false],
                            ['choice_text' => 'Une instruction visant à annuler un ordre déjà passé', 'is_correct' => false],
                            ['choice_text' => 'Une instruction visant à transférer un titre vers un autre compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ordre au marché peut-il être exécuté à un prix différent de celui observé quelques secondes auparavant ?',
                        'explanation' => 'Les prix disponibles peuvent changer rapidement selon l’offre et la demande.',
                        'choices' => [
                            ['choice_text' => 'Parce que le courtier modifie le prix de l’ordre pour couvrir ses propres frais', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix d’un ordre au marché est fixé par l’émetteur après la séance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix disponibles peuvent changer rapidement selon l’offre et la demande', 'is_correct' => true],
                            ['choice_text' => 'Parce que la banque centrale ajuste les prix à chaque séance de négociation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Indices, fonds et ETF',
                'description' => 'Indices, fonds et ETF',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ETF ?',
                        'explanation' => 'Un ETF est un fonds coté en bourse dont les parts peuvent être négociées sur un marché.',
                        'choices' => [
                            ['choice_text' => 'Un fonds non coté dont les parts sont rachetées par la société de gestion à la demande', 'is_correct' => false],
                            ['choice_text' => 'Un indice boursier dont la valeur est calculée à partir d’un panier d’actions', 'is_correct' => false],
                            ['choice_text' => 'Une obligation à long terme émise par un fonds pour financer ses investissements', 'is_correct' => false],
                            ['choice_text' => 'Un fonds coté en bourse dont les parts peuvent être négociées sur un marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être l’objectif d’un ETF indiciel ?',
                        'explanation' => 'Un ETF indiciel peut chercher à répliquer la performance d’un indice de référence.',
                        'choices' => [
                            ['choice_text' => 'Battre l’indice de référence en choisissant les meilleurs titres', 'is_correct' => false],
                            ['choice_text' => 'Répliquer la performance d’un indice de référence', 'is_correct' => true],
                            ['choice_text' => 'Obtenir un rendement fixe indépendant des variations du marché', 'is_correct' => false],
                            ['choice_text' => 'Concentrer l’investissement sur une seule entreprise du secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier pondéré par la capitalisation ?',
                        'explanation' => 'Dans cet indice, le poids des sociétés dépend notamment de leur capitalisation boursière.',
                        'choices' => [
                            ['choice_text' => 'Un indice où le poids des sociétés dépend du nombre de salariés qu’elles emploient', 'is_correct' => false],
                            ['choice_text' => 'Un indice où chaque société a le même poids quelle que soit sa taille', 'is_correct' => false],
                            ['choice_text' => 'Un indice où le poids des sociétés dépend notamment de leur capitalisation boursière', 'is_correct' => true],
                            ['choice_text' => 'Un indice où le poids des sociétés dépend du prix unitaire de leur action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des avantages d’un fonds diversifié ?',
                        'explanation' => 'Un fonds diversifié peut répartir l’investissement entre plusieurs titres.',
                        'choices' => [
                            ['choice_text' => 'Il peut éliminer l’effet des variations générales du marché', 'is_correct' => false],
                            ['choice_text' => 'Il garantit un rendement supérieur à celui de l’indice de référence', 'is_correct' => false],
                            ['choice_text' => 'Il peut dispenser l’investisseur de payer des frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Il peut répartir l’investissement entre plusieurs titres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que signifie suivre un indice ?',
                        'explanation' => 'Suivre un indice signifie chercher à reproduire, avant coûts, sa performance de référence.',
                        'choices' => [
                            ['choice_text' => 'Chercher à dépasser, après coûts, la performance d’un indice de référence', 'is_correct' => false],
                            ['choice_text' => 'Chercher à limiter, avant coûts, les pertes du fonds au niveau de l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Chercher à reproduire, avant coûts, la performance d’un indice de référence', 'is_correct' => true],
                            ['choice_text' => 'Chercher à acheter, avant coûts, les titres les moins volatils de l’indice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les frais d’un fonds peuvent-ils affecter le rendement de l’investisseur ?',
                        'explanation' => 'Les frais réduisent le rendement net obtenu par l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Oui, les frais réduisent le rendement net obtenu par l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Non, les frais sont supportés par la société de gestion et non par l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Non, les frais sont déjà intégrés dans l’indice de référence suivi par le fonds', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais ils ne jouent que lorsque le fonds réalise une performance négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur utilise-t-il un ETF diversifié ?',
                        'explanation' => 'Un ETF diversifié peut donner une exposition à plusieurs titres au moyen d’un seul instrument.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une exposition à plusieurs titres au moyen d’un seul instrument', 'is_correct' => true],
                            ['choice_text' => 'Pour obtenir un rendement supérieur à celui de chacun des titres de l’indice', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de payer des frais de courtage et des commissions de gestion', 'is_correct' => false],
                            ['choice_text' => 'Pour acheter des titres directement auprès de leur entreprise émettrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds obligataire ?',
                        'explanation' => 'Un fonds obligataire investit principalement dans des obligations ou autres instruments de dette.',
                        'choices' => [
                            ['choice_text' => 'Un fonds qui investit principalement dans des actions de grandes entreprises cotées', 'is_correct' => false],
                            ['choice_text' => 'Un fonds qui investit principalement dans des devises et des matières premières', 'is_correct' => false],
                            ['choice_text' => 'Un fonds qui investit principalement dans des obligations ou instruments de dette', 'is_correct' => true],
                            ['choice_text' => 'Un fonds qui investit principalement dans des dépôts bancaires et des comptes courants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice sert souvent de :',
                        'explanation' => 'Un indice sert souvent de référence pour mesurer la performance d’un marché ou d’un segment.',
                        'choices' => [
                            ['choice_text' => 'Référence pour fixer le montant du capital social des sociétés cotées', 'is_correct' => false],
                            ['choice_text' => 'Instrument de paiement pour régler les transactions entre investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Référence pour mesurer la performance d’un marché ou d’un segment', 'is_correct' => true],
                            ['choice_text' => 'Titre de propriété donnant un droit de vote dans les sociétés cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance d’un fonds à son indice de référence ?',
                        'explanation' => 'Cette comparaison permet d’évaluer la performance du fonds par rapport à sa référence ou à son objectif.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer à l’avance le niveau de dividendes que le fonds versera l’an prochain', 'is_correct' => false],
                            ['choice_text' => 'Pour évaluer sa performance par rapport au marché ou à l’objectif qu’il cherche à suivre', 'is_correct' => true],
                            ['choice_text' => 'Pour vérifier que le fonds a réussi à éliminer le risque de variation des marchés', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir la date à laquelle la société de gestion distribuera les gains', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Marchés des changes et matières premières',
                'description' => 'Marchés des changes et matières premières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le marché des changes ?',
                        'explanation' => 'Le marché des changes est le marché sur lequel les devises sont échangées.',
                        'choices' => [
                            ['choice_text' => 'Le marché sur lequel les matières premières sont négociées', 'is_correct' => false],
                            ['choice_text' => 'Le marché sur lequel les entreprises émettent des actions', 'is_correct' => false],
                            ['choice_text' => 'Le marché sur lequel les banques se prêtent des liquidités', 'is_correct' => false],
                            ['choice_text' => 'Le marché sur lequel les devises sont échangées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'explanation' => 'Le taux de change correspond au prix d’une devise exprimé dans une autre devise.',
                        'choices' => [
                            ['choice_text' => 'Le taux d’intérêt appliqué aux dépôts libellés en devises', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’une devise exprimé en une autre devise', 'is_correct' => true],
                            ['choice_text' => 'La commission prélevée par la banque lors d’une opération de change', 'is_correct' => false],
                            ['choice_text' => 'La variation annuelle du pouvoir d’achat d’une monnaie dans son pays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine qui doit payer un fournisseur en dollars est exposée principalement à :',
                        'explanation' => 'Une entreprise qui doit payer une devise étrangère est exposée aux variations du taux de change.',
                        'choices' => [
                            ['choice_text' => 'Un risque de taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change', 'is_correct' => true],
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Un risque de contrepartie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une devise étrangère devient plus chère par rapport à la devise de l’entreprise importatrice, le coût de ses achats étrangers peut :',
                        'explanation' => 'Une devise étrangère plus chère peut augmenter le coût des achats pour l’importateur.',
                        'choices' => [
                            ['choice_text' => 'Augmenter', 'is_correct' => true],
                            ['choice_text' => 'Diminuer', 'is_correct' => false],
                            ['choice_text' => 'Rester inchangé', 'is_correct' => false],
                            ['choice_text' => 'Se transformer en bénéfice de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une matière première, ou commodity ?',
                        'explanation' => 'Une matière première est un produit de base pouvant être négocié sur des marchés.',
                        'choices' => [
                            ['choice_text' => 'Un produit de base pouvant être négocié sur des marchés', 'is_correct' => true],
                            ['choice_text' => 'Un service financier fourni par une banque à ses clients', 'is_correct' => false],
                            ['choice_text' => 'Un titre de créance émis par un État pour financer son budget', 'is_correct' => false],
                            ['choice_text' => 'Un produit fini vendu aux consommateurs par une entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix du pétrole est un exemple de prix sur :',
                        'explanation' => 'Le pétrole est une matière première négociée sur les marchés de commodities.',
                        'choices' => [
                            ['choice_text' => 'Le marché des actions des sociétés pétrolières', 'is_correct' => false],
                            ['choice_text' => 'Le marché des matières premières', 'is_correct' => true],
                            ['choice_text' => 'Le marché des obligations d’État à long terme', 'is_correct' => false],
                            ['choice_text' => 'Le marché des dépôts bancaires à court terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles surveiller les prix des matières premières ?',
                        'explanation' => 'Les prix des matières premières peuvent influencer les coûts ou les revenus des entreprises.',
                        'choices' => [
                            ['choice_text' => 'Parce que ces prix peuvent influencer leurs coûts ou leurs revenus', 'is_correct' => true],
                            ['choice_text' => 'Parce que ces prix déterminent le montant des dividendes versés', 'is_correct' => false],
                            ['choice_text' => 'Parce que ces prix sont fixés par les banques centrales chaque trimestre', 'is_correct' => false],
                            ['choice_text' => 'Parce que ces prix servent à calculer la valeur nominale des obligations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui reçoit des revenus en devise étrangère peut subir une perte lorsque :',
                        'explanation' => 'Une dépréciation de la devise étrangère peut réduire la valeur de ces revenus dans la devise de référence.',
                        'choices' => [
                            ['choice_text' => 'La devise étrangère s’apprécie par rapport à sa devise de référence', 'is_correct' => false],
                            ['choice_text' => 'La devise étrangère se déprécie par rapport à sa devise de référence', 'is_correct' => true],
                            ['choice_text' => 'Le prix des matières premières achetées en devise locale baisse', 'is_correct' => false],
                            ['choice_text' => 'Ses clients sont répartis entre plusieurs pays et plusieurs devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération de change au comptant ?',
                        'explanation' => 'Il s’agit d’une opération d’achat ou de vente de devises avec un règlement proche de la date de transaction.',
                        'choices' => [
                            ['choice_text' => 'Une opération d’achat ou de vente de devises avec règlement proche de la date de transaction', 'is_correct' => true],
                            ['choice_text' => 'Une opération d’achat ou de vente de devises avec règlement à une date future fixée à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Un prêt en devises accordé par une banque avec remboursement à échéance lointaine', 'is_correct' => false],
                            ['choice_text' => 'Un paiement en espèces d’un achat de biens et de services sur le marché local', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles couvrir leur risque de change ?',
                        'explanation' => 'La couverture permet de réduire l’incertitude liée aux variations futures des devises.',
                        'choices' => [
                            ['choice_text' => 'Pour réaliser un profit supplémentaire grâce aux variations des devises', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire l’incertitude liée aux variations futures des devises', 'is_correct' => true],
                            ['choice_text' => 'Pour obtenir de la banque centrale un taux de change plus avantageux', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le montant des impôts payés sur leurs opérations internationales', 'is_correct' => false],
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
