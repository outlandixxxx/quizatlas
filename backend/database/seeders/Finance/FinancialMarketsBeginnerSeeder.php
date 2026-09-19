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

        $quizzes = [

            [
                'title' => 'Introduction aux marchés financiers',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un marché financier ?',
                        'explanation' => 'Un marché financier est un marché où s’échangent différents instruments financiers.',
                        'choices' => [
                            ['choice_text' => 'Un marché où s’échangent des instruments financiers', 'is_correct' => true],
                            ['choice_text' => 'Un marché réservé aux produits alimentaires', 'is_correct' => false],
                            ['choice_text' => 'Un système uniquement destiné aux entreprises publiques', 'is_correct' => false],
                            ['choice_text' => 'Un lieu où seuls les billets de banque sont échangés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux rôles des marchés financiers ?',
                        'explanation' => 'Les marchés financiers facilitent notamment le financement et l’investissement.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le financement et l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Fixer tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Produire directement des biens industriels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui peut participer aux marchés financiers ?',
                        'explanation' => 'Les marchés financiers peuvent réunir des particuliers, des entreprises et diverses institutions.',
                        'choices' => [
                            ['choice_text' => 'Les particuliers, les entreprises et les institutions', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les gouvernements', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les banques centrales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les grandes entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une action ?',
                        'explanation' => 'Une action représente généralement une part de propriété dans une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une part de propriété dans une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une dette de l’État', 'is_correct' => false],
                            ['choice_text' => 'Un contrat d’assurance automobile', 'is_correct' => false],
                            ['choice_text' => 'Une monnaie étrangère', 'is_correct' => false],
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
                            ['choice_text' => 'Une personne ou une organisation qui place des capitaux dans l’espoir d’obtenir un rendement', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise qui ne possède aucun actif', 'is_correct' => false],
                            ['choice_text' => 'Un organisme qui imprime automatiquement la monnaie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement d’un investissement ?',
                        'explanation' => 'Le rendement mesure le gain ou la perte généré par l’investissement sur une période donnée.',
                        'choices' => [
                            ['choice_text' => 'Le gain ou la perte généré par l’investissement sur une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le montant initial investi', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres détenus', 'is_correct' => false],
                            ['choice_text' => 'Le montant des frais bancaires uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises utilisent-elles les marchés financiers ?',
                        'explanation' => 'Les entreprises peuvent utiliser les marchés financiers pour obtenir des financements et gérer certaines expositions financières.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir des financements et gérer certaines expositions financières', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous leurs coûts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute obligation comptable', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous leurs salariés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un titre financier ?',
                        'explanation' => 'Un titre financier représente généralement un droit financier ou économique.',
                        'choices' => [
                            ['choice_text' => 'Un instrument représentant généralement un droit financier ou économique', 'is_correct' => true],
                            ['choice_text' => 'Un document administratif sans valeur économique', 'is_correct' => false],
                            ['choice_text' => 'Un produit exclusivement immobilier', 'is_correct' => false],
                            ['choice_text' => 'Une facture commerciale uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante sur un marché financier ?',
                        'explanation' => 'Une bonne liquidité facilite l’achat et la vente des actifs.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’achat et la vente des actifs', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute variation de prix', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les risques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Actions et marché boursier',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une action ordinaire ?',
                        'explanation' => 'Une action ordinaire représente une fraction du capital d’une société.',
                        'choices' => [
                            ['choice_text' => 'Un titre représentant une fraction du capital d’une société', 'is_correct' => true],
                            ['choice_text' => 'Une obligation émise par une banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Un prêt bancaire garanti par l’État', 'is_correct' => false],
                            ['choice_text' => 'Une devise étrangère', 'is_correct' => false],
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
                            ['choice_text' => 'Le prix de marché de l’action a augmenté', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’actions a nécessairement diminué', 'is_correct' => false],
                            ['choice_text' => 'La dette de l’entreprise est automatiquement remboursée', 'is_correct' => false],
                            ['choice_text' => 'Le dividende est nécessairement supprimé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une introduction en bourse ?',
                        'explanation' => 'Une introduction en bourse correspond à la première admission des actions d’une entreprise à la négociation publique.',
                        'choices' => [
                            ['choice_text' => 'La première admission des actions d’une entreprise à la négociation publique', 'is_correct' => true],
                            ['choice_text' => 'La fermeture définitive d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une émission obligatoire de monnaie', 'is_correct' => false],
                            ['choice_text' => 'Une fusion entre deux banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie être actionnaire d’une entreprise ?',
                        'explanation' => 'Être actionnaire signifie détenir une participation dans le capital de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Détenir une participation dans son capital', 'is_correct' => true],
                            ['choice_text' => 'Être automatiquement son salarié', 'is_correct' => false],
                            ['choice_text' => 'Être son créancier obligataire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Contrôler nécessairement la totalité de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cours d’une action peut-il varier ?',
                        'explanation' => 'Le cours évolue notamment en fonction de l’offre, de la demande et des informations disponibles.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’offre et la demande ainsi que les informations disponibles évoluent', 'is_correct' => true],
                            ['choice_text' => 'Parce que son prix est toujours fixé définitivement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises changent automatiquement de monnaie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes sont toujours constants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier ?',
                        'explanation' => 'Un indice boursier représente l’évolution d’un ensemble de titres.',
                        'choices' => [
                            ['choice_text' => 'Un indicateur représentant l’évolution d’un ensemble de titres', 'is_correct' => true],
                            ['choice_text' => 'Une obligation individuelle', 'is_correct' => false],
                            ['choice_text' => 'Un compte bancaire', 'is_correct' => false],
                            ['choice_text' => 'Un contrat d’assurance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est directement associé à une action ?',
                        'explanation' => 'Une action est notamment exposée au risque de variation de son cours.',
                        'choices' => [
                            ['choice_text' => 'Le risque de variation de son cours', 'is_correct' => true],
                            ['choice_text' => 'L’absence totale de risque', 'is_correct' => false],
                            ['choice_text' => 'Le risque que son prix reste toujours fixe', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une plus-value sur une action ?',
                        'explanation' => 'Une plus-value correspond à un gain lorsque le prix de vente est supérieur au prix d’achat, avant prise en compte des coûts et de la fiscalité.',
                        'choices' => [
                            ['choice_text' => 'Un gain réalisé lorsque le prix de vente est supérieur au prix d’achat, avant prise en compte des coûts et fiscalité', 'is_correct' => true],
                            ['choice_text' => 'Une perte sur investissement', 'is_correct' => false],
                            ['choice_text' => 'Un dividende obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une dette envers l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il diversifier ses actions ?',
                        'explanation' => 'La diversification permet notamment de réduire l’exposition à un seul titre ou secteur.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’exposition à un seul titre ou secteur', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les pertes possibles', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les titres identiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Obligations et marché de la dette',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une obligation ?',
                        'explanation' => 'Une obligation est un titre de dette émis par une entreprise, un État ou une autre organisation.',
                        'choices' => [
                            ['choice_text' => 'Un titre de dette émis par une entreprise, un État ou une autre organisation', 'is_correct' => true],
                            ['choice_text' => 'Une part obligatoire du capital d’une société', 'is_correct' => false],
                            ['choice_text' => 'Une action sans dividende', 'is_correct' => false],
                            ['choice_text' => 'Une monnaie numérique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le coupon d’une obligation ?',
                        'explanation' => 'Le coupon correspond au paiement d’intérêt prévu par l’obligation.',
                        'choices' => [
                            ['choice_text' => 'Le paiement d’intérêt prévu par l’obligation', 'is_correct' => true],
                            ['choice_text' => 'Le prix de l’action de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital social', 'is_correct' => false],
                            ['choice_text' => 'Une commission boursière obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au remboursement d’une obligation arrivant à échéance ?',
                        'explanation' => 'Le principal est remboursé selon les conditions prévues par l’obligation.',
                        'choices' => [
                            ['choice_text' => 'Le principal est remboursé selon les conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'L’obligation devient automatiquement une action', 'is_correct' => false],
                            ['choice_text' => 'Le coupon devient une action', 'is_correct' => false],
                            ['choice_text' => 'La dette disparaît sans paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque qu’un émetteur ne respecte pas ses obligations de paiement ?',
                        'explanation' => 'Il s’agit du risque de crédit ou de défaut.',
                        'choices' => [
                            ['choice_text' => 'Le risque de crédit ou de défaut', 'is_correct' => true],
                            ['choice_text' => 'Le risque de diversification', 'is_correct' => false],
                            ['choice_text' => 'Le risque de dividende', 'is_correct' => false],
                            ['choice_text' => 'Le risque comptable uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque les taux d’intérêt du marché augmentent, le prix d’une obligation à taux fixe existante tend généralement à :',
                        'explanation' => 'Toutes choses égales par ailleurs, la hausse des taux tend à réduire le prix de marché d’une obligation à taux fixe existante.',
                        'choices' => [
                            ['choice_text' => 'Baisser', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toujours', 'is_correct' => false],
                            ['choice_text' => 'Rester nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Devenir nul immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur nominale d’une obligation ?',
                        'explanation' => 'La valeur nominale est le montant de référence prévu pour le remboursement du principal.',
                        'choices' => [
                            ['choice_text' => 'Le montant de référence prévu pour le remboursement du principal', 'is_correct' => true],
                            ['choice_text' => 'Le cours quotidien obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Le montant des dividendes', 'is_correct' => false],
                            ['choice_text' => 'La valeur totale des actions de l’émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d’État est généralement émise par :',
                        'explanation' => 'Une obligation d’État est généralement émise par un gouvernement ou une entité publique habilitée.',
                        'choices' => [
                            ['choice_text' => 'Un gouvernement ou une entité publique habilitée', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une société privée', 'is_correct' => false],
                            ['choice_text' => 'Uniquement un particulier', 'is_correct' => false],
                            ['choice_text' => 'Une bourse elle-même', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’échéance d’une obligation ?',
                        'explanation' => 'L’échéance est la date prévue pour le remboursement final du principal.',
                        'choices' => [
                            ['choice_text' => 'La date prévue pour le remboursement final du principal', 'is_correct' => true],
                            ['choice_text' => 'La date de paiement du premier salaire', 'is_correct' => false],
                            ['choice_text' => 'La date de création de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'La date obligatoire de versement des dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation risquée peut-elle offrir un rendement plus élevé ?',
                        'explanation' => 'Les investisseurs peuvent demander une rémunération supplémentaire en contrepartie du risque.',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs peuvent exiger une rémunération supplémentaire pour le risque', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est toujours sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que son principal augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne possède jamais de date d’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la maturité d’une obligation ?',
                        'explanation' => 'La maturité correspond à la durée restant jusqu’à son échéance.',
                        'choices' => [
                            ['choice_text' => 'La durée restante jusqu’à son échéance', 'is_correct' => true],
                            ['choice_text' => 'Le montant du coupon', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actionnaires de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’émission uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché monétaire et instruments à court terme',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du marché monétaire ?',
                        'explanation' => 'Le marché monétaire facilite les financements et placements à court terme.',
                        'choices' => [
                            ['choice_text' => 'Faciliter les financements et placements à court terme', 'is_correct' => true],
                            ['choice_text' => 'Financer uniquement les projets immobiliers à très long terme', 'is_correct' => false],
                            ['choice_text' => 'Échanger uniquement des actions', 'is_correct' => false],
                            ['choice_text' => 'Fixer les prix des matières premières', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique est généralement associée aux instruments du marché monétaire ?',
                        'explanation' => 'Les instruments du marché monétaire ont généralement des échéances courtes.',
                        'choices' => [
                            ['choice_text' => 'Une échéance relativement courte', 'is_correct' => true],
                            ['choice_text' => 'Une maturité nécessairement supérieure à vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de risque', 'is_correct' => false],
                            ['choice_text' => 'Une propriété obligatoire dans une entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que sont les bons du Trésor à court terme ?',
                        'explanation' => 'Ce sont des titres de dette publique à court terme.',
                        'choices' => [
                            ['choice_text' => 'Des titres de dette publique à court terme', 'is_correct' => true],
                            ['choice_text' => 'Des actions de sociétés publiques', 'is_correct' => false],
                            ['choice_text' => 'Des contrats immobiliers', 'is_correct' => false],
                            ['choice_text' => 'Des parts de fonds obligatoires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut utiliser le marché monétaire pour :',
                        'explanation' => 'Le marché monétaire peut être utilisé pour gérer des besoins de financement à court terme.',
                        'choices' => [
                            ['choice_text' => 'Gérer ses besoins de financement à court terme', 'is_correct' => true],
                            ['choice_text' => 'Financer uniquement une acquisition sur cinquante ans', 'is_correct' => false],
                            ['choice_text' => 'Remplacer définitivement ses capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute gestion de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un certificat de dépôt ?',
                        'explanation' => 'Un certificat de dépôt représente généralement un dépôt rémunéré pour une durée déterminée.',
                        'choices' => [
                            ['choice_text' => 'Un instrument représentant généralement un dépôt rémunéré pour une durée déterminée', 'is_correct' => true],
                            ['choice_text' => 'Une action cotée', 'is_correct' => false],
                            ['choice_text' => 'Une obligation perpétuelle', 'is_correct' => false],
                            ['choice_text' => 'Un contrat d’assurance automobile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les instruments monétaires sont-ils souvent considérés comme plus liquides que certains investissements à long terme ?',
                        'explanation' => 'Ils ont généralement des maturités courtes et certains sont négociés sur des marchés liquides.',
                        'choices' => [
                            ['choice_text' => 'Ils ont généralement des maturités courtes et peuvent être négociés sur des marchés liquides', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent tous un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous des actions', 'is_correct' => false],
                            ['choice_text' => 'Ils ne comportent jamais aucun risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel acteur joue un rôle central dans la gestion de la liquidité du système bancaire ?',
                        'explanation' => 'La banque centrale joue un rôle central dans la gestion de la liquidité du système bancaire.',
                        'choices' => [
                            ['choice_text' => 'La banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise industrielle', 'is_correct' => false],
                            ['choice_text' => 'Un actionnaire individuel', 'is_correct' => false],
                            ['choice_text' => 'Une agence immobilière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le marché interbancaire concerne principalement :',
                        'explanation' => 'Le marché interbancaire concerne les échanges de liquidité et de financement entre établissements financiers.',
                        'choices' => [
                            ['choice_text' => 'Les échanges de liquidité et de financement entre établissements financiers', 'is_correct' => true],
                            ['choice_text' => 'Les ventes d’actions aux particuliers uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les transactions immobilières', 'is_correct' => false],
                            ['choice_text' => 'Les achats de matières premières agricoles uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement à court terme vise généralement à :',
                        'explanation' => 'Un placement à court terme cherche généralement à préserver la liquidité tout en obtenant éventuellement un rendement.',
                        'choices' => [
                            ['choice_text' => 'Préserver la liquidité tout en obtenant éventuellement un rendement', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement le risque', 'is_correct' => false],
                            ['choice_text' => 'Acheter une participation de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Financer uniquement des projets sur plusieurs décennies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux directeurs peut influencer le marché monétaire en :',
                        'explanation' => 'Une hausse des taux directeurs peut modifier le coût du financement à court terme.',
                        'choices' => [
                            ['choice_text' => 'Modifiant le coût du financement à court terme', 'is_correct' => true],
                            ['choice_text' => 'Fixant directement tous les cours des actions', 'is_correct' => false],
                            ['choice_text' => 'Supprimant automatiquement toutes les dettes', 'is_correct' => false],
                            ['choice_text' => 'Garantissant une hausse de tous les actifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Intermédiaires et institutions financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une banque commerciale ?',
                        'explanation' => 'Une banque commerciale collecte notamment des dépôts, accorde des crédits et fournit des services financiers.',
                        'choices' => [
                            ['choice_text' => 'Collecter des dépôts, accorder des crédits et fournir des services financiers', 'is_correct' => true],
                            ['choice_text' => 'Produire des actions pour toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Fixer seule les taux directeurs', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les marchés boursiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'explanation' => 'La banque centrale conduit généralement la politique monétaire et contribue à la stabilité financière selon son mandat.',
                        'choices' => [
                            ['choice_text' => 'Conduire la politique monétaire et contribuer à la stabilité financière selon son mandat', 'is_correct' => true],
                            ['choice_text' => 'Gérer les comptes de tous les particuliers', 'is_correct' => false],
                            ['choice_text' => 'Émettre les actions des entreprises privées', 'is_correct' => false],
                            ['choice_text' => 'Fixer tous les prix des marchandises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle un courtier peut-il jouer sur les marchés financiers ?',
                        'explanation' => 'Un courtier peut faciliter l’exécution des ordres d’achat et de vente pour ses clients.',
                        'choices' => [
                            ['choice_text' => 'Faciliter l’exécution des ordres d’achat et de vente pour ses clients', 'is_correct' => true],
                            ['choice_text' => 'Garantir le rendement des investissements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement les bénéfices des entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds d’investissement ?',
                        'explanation' => 'Un fonds regroupe des capitaux pour investir selon une stratégie donnée.',
                        'choices' => [
                            ['choice_text' => 'Un véhicule qui regroupe des capitaux pour investir selon une stratégie donnée', 'is_correct' => true],
                            ['choice_text' => 'Une banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Une monnaie officielle', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise qui ne possède aucun actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement une compagnie d’assurance ?',
                        'explanation' => 'Une compagnie d’assurance mutualise et couvre certains risques en échange de primes.',
                        'choices' => [
                            ['choice_text' => 'Elle mutualise et couvre certains risques en échange de primes', 'is_correct' => true],
                            ['choice_text' => 'Elle fixe les taux de change mondiaux', 'is_correct' => false],
                            ['choice_text' => 'Elle émet toutes les obligations publiques', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit tous les investissements boursiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intermédiaires financiers sont-ils importants ?',
                        'explanation' => 'Ils facilitent la circulation des capitaux entre des agents ayant des besoins différents.',
                        'choices' => [
                            ['choice_text' => 'Ils facilitent la circulation des capitaux entre agents ayant des besoins différents', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toute transaction directe', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment tous les risques financiers', 'is_correct' => false],
                            ['choice_text' => 'Ils fixent toujours le prix de chaque actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une société de gestion d’actifs ?',
                        'explanation' => 'Une société de gestion d’actifs gère des investissements pour des clients ou des fonds.',
                        'choices' => [
                            ['choice_text' => 'Une société qui gère des investissements pour des clients ou des fonds', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise qui fabrique des billets', 'is_correct' => false],
                            ['choice_text' => 'Une agence immobilière uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une banque centrale nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un gestionnaire de portefeuille ?',
                        'explanation' => 'Le gestionnaire cherche à gérer les investissements conformément aux objectifs et contraintes du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Gérer les investissements conformément aux objectifs et contraintes du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Garantir une absence totale de pertes', 'is_correct' => false],
                            ['choice_text' => 'Fixer les taux directeurs', 'is_correct' => false],
                            ['choice_text' => 'Émettre toutes les actions du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une chambre de compensation contribue notamment à :',
                        'explanation' => 'Une chambre de compensation contribue notamment à organiser et sécuriser le règlement de certaines transactions.',
                        'choices' => [
                            ['choice_text' => 'Organiser et sécuriser le règlement de certaines transactions financières', 'is_correct' => true],
                            ['choice_text' => 'Fixer le salaire des investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Garantir la hausse des marchés', 'is_correct' => false],
                            ['choice_text' => 'Créer les entreprises cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réglementation financière est-elle importante ?',
                        'explanation' => 'La réglementation financière vise notamment à protéger les investisseurs et à préserver la stabilité et l’intégrité des marchés.',
                        'choices' => [
                            ['choice_text' => 'Elle vise notamment à protéger les investisseurs et préserver la stabilité et l’intégrité des marchés', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que tous les investissements seront rentables', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute variation de prix', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les banques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Rendement, risque et diversification',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque financier ?',
                        'explanation' => 'Le risque financier correspond à la possibilité que le résultat réel diffère du résultat attendu, notamment avec une perte.',
                        'choices' => [
                            ['choice_text' => 'La possibilité que le résultat réel diffère du résultat attendu, notamment avec une perte', 'is_correct' => true],
                            ['choice_text' => 'La garantie d’un rendement fixe', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le montant investi', 'is_correct' => false],
                            ['choice_text' => 'Une obligation de vendre un actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement attendu est-il généralement lié au risque ?',
                        'explanation' => 'Les investisseurs peuvent demander une rémunération supplémentaire pour accepter davantage de risque.',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs peuvent demander une rémunération supplémentaire pour accepter davantage de risque', 'is_correct' => true],
                            ['choice_text' => 'Le risque garantit toujours un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Le risque n’a aucune relation avec les décisions d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Tous les actifs ont exactement le même rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la diversification ?',
                        'explanation' => 'La diversification consiste à répartir les investissements entre plusieurs actifs afin de réduire certaines concentrations de risque.',
                        'choices' => [
                            ['choice_text' => 'Répartir les investissements entre plusieurs actifs afin de réduire certaines concentrations de risque', 'is_correct' => true],
                            ['choice_text' => 'Investir tout son capital dans une seule entreprise', 'is_correct' => false],
                            ['choice_text' => 'Acheter uniquement des obligations', 'is_correct' => false],
                            ['choice_text' => 'Éviter complètement les marchés financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque la diversification peut-elle réduire particulièrement ?',
                        'explanation' => 'La diversification peut surtout réduire le risque spécifique lié à un titre ou une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le risque spécifique à un titre ou à une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Tous les risques macroéconomiques', 'is_correct' => false],
                            ['choice_text' => 'Tous les risques de marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque d’inflation dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité d’un actif ?',
                        'explanation' => 'La volatilité mesure l’ampleur des variations du prix ou des rendements.',
                        'choices' => [
                            ['choice_text' => 'Une mesure de l’ampleur des variations de son prix ou de ses rendements', 'is_correct' => true],
                            ['choice_text' => 'Le montant initial investi', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actions émises', 'is_correct' => false],
                            ['choice_text' => 'Le dividende annuel uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille diversifié contient généralement :',
                        'explanation' => 'Un portefeuille diversifié comprend plusieurs investissements dont les risques ne sont pas parfaitement identiques.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs investissements dont les risques ne sont pas parfaitement identiques', 'is_correct' => true],
                            ['choice_text' => 'Un seul actif', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des actions d’une même entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des liquidités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une perte sur un investissement signifie :',
                        'explanation' => 'Une perte signifie que la valeur ou le rendement de l’investissement a diminué par rapport à la référence considérée.',
                        'choices' => [
                            ['choice_text' => 'Que la valeur ou le rendement de l’investissement a diminué par rapport à la référence considérée', 'is_correct' => true],
                            ['choice_text' => 'Que tous les autres investissements ont également perdu', 'is_correct' => false],
                            ['choice_text' => 'Que le marché est fermé', 'is_correct' => false],
                            ['choice_text' => 'Que l’investisseur a nécessairement vendu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement réduit généralement le risque de concentration ?',
                        'explanation' => 'Répartir un portefeuille entre plusieurs actifs et secteurs réduit généralement la concentration du risque.',
                        'choices' => [
                            ['choice_text' => 'Répartir le portefeuille entre plusieurs actifs et secteurs', 'is_correct' => true],
                            ['choice_text' => 'Investir tout le capital dans une seule action', 'is_correct' => false],
                            ['choice_text' => 'Acheter uniquement le titre le plus volatil', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais analyser les investissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement négatif ?',
                        'explanation' => 'Un rendement négatif correspond à une perte sur la période considérée.',
                        'choices' => [
                            ['choice_text' => 'Un rendement correspondant à une perte sur la période considérée', 'is_correct' => true],
                            ['choice_text' => 'Un rendement nécessairement supérieur à 10 %', 'is_correct' => false],
                            ['choice_text' => 'Un dividende supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Une absence de variation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître son profil de risque ?',
                        'explanation' => 'Le profil de risque aide à choisir des investissements compatibles avec sa capacité et sa volonté d’assumer des pertes.',
                        'choices' => [
                            ['choice_text' => 'Pour choisir des investissements compatibles avec sa capacité et sa volonté d’assumer des pertes', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un rendement fixe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les impôts', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les marchés de fluctuer', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fonctionnement des ordres de marché',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ordre au marché ?',
                        'explanation' => 'Un ordre au marché vise à acheter ou vendre rapidement au meilleur prix disponible.',
                        'choices' => [
                            ['choice_text' => 'Un ordre visant à acheter ou vendre rapidement au meilleur prix disponible', 'is_correct' => true],
                            ['choice_text' => 'Un ordre avec un prix maximal ou minimal toujours garanti', 'is_correct' => false],
                            ['choice_text' => 'Un ordre réservé aux banques centrales', 'is_correct' => false],
                            ['choice_text' => 'Un ordre qui ne peut jamais être exécuté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre à cours limité ?',
                        'explanation' => 'Un ordre à cours limité comporte un prix limite défini par l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Un ordre comportant un prix limite défini par l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Un ordre sans prix', 'is_correct' => false],
                            ['choice_text' => 'Un ordre uniquement utilisé pour les obligations publiques', 'is_correct' => false],
                            ['choice_text' => 'Un ordre garantissant toujours une exécution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un ordre d’achat limité, le prix limite représente généralement :',
                        'explanation' => 'Le prix limite d’achat correspond généralement au prix maximal que l’investisseur accepte de payer.',
                        'choices' => [
                            ['choice_text' => 'Le prix maximal que l’investisseur accepte de payer', 'is_correct' => true],
                            ['choice_text' => 'Le prix minimal qu’il doit payer', 'is_correct' => false],
                            ['choice_text' => 'Le prix de clôture obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Le dividende prévu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix acheteur, ou bid ?',
                        'explanation' => 'Le bid correspond au meilleur prix proposé par un acheteur.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur prix proposé par un acheteur', 'is_correct' => true],
                            ['choice_text' => 'Le meilleur prix proposé par un vendeur', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’émission historique', 'is_correct' => false],
                            ['choice_text' => 'Le prix du dividende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix vendeur, ou ask ?',
                        'explanation' => 'Le ask correspond généralement au meilleur prix auquel un vendeur propose de céder le titre.',
                        'choices' => [
                            ['choice_text' => 'Le meilleur prix auquel un vendeur propose généralement de céder le titre', 'is_correct' => true],
                            ['choice_text' => 'Le prix proposé par l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'Le prix comptable de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le taux de dividende', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le spread bid-ask ?',
                        'explanation' => 'Le spread correspond à l’écart entre le meilleur prix acheteur et le meilleur prix vendeur.',
                        'choices' => [
                            ['choice_text' => 'L’écart entre le meilleur prix acheteur et le meilleur prix vendeur', 'is_correct' => true],
                            ['choice_text' => 'L’écart entre deux dividendes', 'is_correct' => false],
                            ['choice_text' => 'La différence entre deux exercices comptables', 'is_correct' => false],
                            ['choice_text' => 'Le rendement annuel garanti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le volume de négociation ?',
                        'explanation' => 'Le volume correspond à la quantité de titres échangés sur une période.',
                        'choices' => [
                            ['choice_text' => 'La quantité de titres échangés sur une période', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de dividendes versés', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable des actifs', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt directeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte liquidité de marché signifie généralement :',
                        'explanation' => 'Une forte liquidité signifie qu’il est relativement facile d’acheter ou de vendre sans provoquer une variation excessive du prix.',
                        'choices' => [
                            ['choice_text' => 'Qu’il est relativement facile d’acheter ou de vendre sans provoquer une variation excessive du prix', 'is_correct' => true],
                            ['choice_text' => 'Que le prix ne varie jamais', 'is_correct' => false],
                            ['choice_text' => 'Que l’investissement est sans risque', 'is_correct' => false],
                            ['choice_text' => 'Que le rendement est garanti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre de vente ?',
                        'explanation' => 'Un ordre de vente est une instruction visant à céder un titre.',
                        'choices' => [
                            ['choice_text' => 'Une instruction visant à céder un titre', 'is_correct' => true],
                            ['choice_text' => 'Une instruction visant uniquement à recevoir un dividende', 'is_correct' => false],
                            ['choice_text' => 'Une demande de prêt bancaire', 'is_correct' => false],
                            ['choice_text' => 'Une émission de monnaie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ordre au marché peut-il être exécuté à un prix différent de celui observé quelques secondes auparavant ?',
                        'explanation' => 'Les prix disponibles peuvent changer rapidement selon l’offre et la demande.',
                        'choices' => [
                            ['choice_text' => 'Parce que les prix disponibles peuvent changer rapidement selon l’offre et la demande', 'is_correct' => true],
                            ['choice_text' => 'Parce que les marchés ne possèdent jamais de prix', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actions sont toujours remboursées à leur valeur nominale', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dividendes changent chaque seconde', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Indices, fonds et ETF',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ETF ?',
                        'explanation' => 'Un ETF est un fonds coté en bourse dont les parts peuvent être négociées sur un marché.',
                        'choices' => [
                            ['choice_text' => 'Un fonds coté en bourse dont les parts peuvent être négociées sur un marché', 'is_correct' => true],
                            ['choice_text' => 'Une obligation individuelle', 'is_correct' => false],
                            ['choice_text' => 'Une banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Une monnaie officielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être l’objectif d’un ETF indiciel ?',
                        'explanation' => 'Un ETF indiciel peut chercher à répliquer la performance d’un indice de référence.',
                        'choices' => [
                            ['choice_text' => 'Répliquer la performance d’un indice de référence', 'is_correct' => true],
                            ['choice_text' => 'Garantir une performance supérieure à l’indice', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Investir uniquement dans une entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier pondéré par la capitalisation ?',
                        'explanation' => 'Dans cet indice, le poids des sociétés dépend notamment de leur capitalisation boursière.',
                        'choices' => [
                            ['choice_text' => 'Un indice où le poids des sociétés dépend notamment de leur capitalisation boursière', 'is_correct' => true],
                            ['choice_text' => 'Un indice où toutes les sociétés ont toujours exactement le même poids', 'is_correct' => false],
                            ['choice_text' => 'Un indice composé uniquement d’obligations', 'is_correct' => false],
                            ['choice_text' => 'Un indice sans valeur de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des avantages d’un fonds diversifié ?',
                        'explanation' => 'Un fonds diversifié peut répartir l’investissement entre plusieurs titres.',
                        'choices' => [
                            ['choice_text' => 'Il peut répartir l’investissement entre plusieurs titres', 'is_correct' => true],
                            ['choice_text' => 'Il garantit toujours un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toutes les commissions', 'is_correct' => false],
                            ['choice_text' => 'Il investit nécessairement dans un seul secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie suivre un indice ?',
                        'explanation' => 'Suivre un indice signifie chercher à reproduire, avant coûts, sa performance de référence.',
                        'choices' => [
                            ['choice_text' => 'Chercher à reproduire, avant coûts, la performance d’un indice de référence', 'is_correct' => true],
                            ['choice_text' => 'Chercher obligatoirement à battre l’indice', 'is_correct' => false],
                            ['choice_text' => 'Investir sans aucune règle', 'is_correct' => false],
                            ['choice_text' => 'Acheter uniquement des obligations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les frais d’un fonds peuvent-ils affecter le rendement de l’investisseur ?',
                        'explanation' => 'Les frais réduisent le rendement net obtenu par l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Oui, les frais réduisent le rendement net obtenu par l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Non, les frais n’ont jamais aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque le marché monte', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur utilise-t-il un ETF diversifié ?',
                        'explanation' => 'Un ETF diversifié peut donner une exposition à plusieurs titres au moyen d’un seul instrument.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une exposition à plusieurs titres au moyen d’un seul instrument', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute variation de marché', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le risque de change dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds obligataire ?',
                        'explanation' => 'Un fonds obligataire investit principalement dans des obligations ou autres instruments de dette.',
                        'choices' => [
                            ['choice_text' => 'Un fonds qui investit principalement dans des obligations ou instruments de dette', 'is_correct' => true],
                            ['choice_text' => 'Un fonds composé uniquement d’actions', 'is_correct' => false],
                            ['choice_text' => 'Une banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Une société qui émet uniquement des devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice sert souvent de :',
                        'explanation' => 'Un indice sert souvent de référence pour mesurer la performance d’un marché ou d’un segment.',
                        'choices' => [
                            ['choice_text' => 'Référence pour mesurer la performance d’un marché ou d’un segment', 'is_correct' => true],
                            ['choice_text' => 'Garantie de rendement', 'is_correct' => false],
                            ['choice_text' => 'Contrat de prêt obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Remplacement d’un compte bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance d’un fonds à son indice de référence ?',
                        'explanation' => 'Cette comparaison permet d’évaluer la performance du fonds par rapport à sa référence ou à son objectif.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer sa performance par rapport au marché ou à l’objectif qu’il cherche à suivre', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’il sera toujours meilleur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les frais du fonds', 'is_correct' => false],
                            ['choice_text' => 'Pour connaître automatiquement ses bénéfices futurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marchés des changes et matières premières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le marché des changes ?',
                        'explanation' => 'Le marché des changes est le marché sur lequel les devises sont échangées.',
                        'choices' => [
                            ['choice_text' => 'Le marché sur lequel les devises sont échangées', 'is_correct' => true],
                            ['choice_text' => 'Le marché exclusivement réservé aux actions', 'is_correct' => false],
                            ['choice_text' => 'Le marché des assurances uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le marché des obligations uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'explanation' => 'Le taux de change correspond au prix d’une devise exprimé dans une autre devise.',
                        'choices' => [
                            ['choice_text' => 'Le prix d’une devise exprimé en une autre devise', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’intérêt d’une obligation', 'is_correct' => false],
                            ['choice_text' => 'Le rendement d’une action', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’imposition d’une entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine qui doit payer un fournisseur en dollars est exposée principalement à :',
                        'explanation' => 'Une entreprise qui doit payer une devise étrangère est exposée aux variations du taux de change.',
                        'choices' => [
                            ['choice_text' => 'Un risque de change', 'is_correct' => true],
                            ['choice_text' => 'Un risque de dividende', 'is_correct' => false],
                            ['choice_text' => 'Un risque de vote', 'is_correct' => false],
                            ['choice_text' => 'Un risque de capital social uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une devise étrangère devient plus chère par rapport à la devise de l’entreprise importatrice, le coût de ses achats étrangers peut :',
                        'explanation' => 'Une devise étrangère plus chère peut augmenter le coût des achats pour l’importateur.',
                        'choices' => [
                            ['choice_text' => 'Augmenter', 'is_correct' => true],
                            ['choice_text' => 'Diminuer nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Rester toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Devenir nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une matière première, ou commodity ?',
                        'explanation' => 'Une matière première est un produit de base pouvant être négocié sur des marchés.',
                        'choices' => [
                            ['choice_text' => 'Un produit de base pouvant être négocié sur des marchés', 'is_correct' => true],
                            ['choice_text' => 'Une action d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une obligation publique', 'is_correct' => false],
                            ['choice_text' => 'Une monnaie officielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix du pétrole est un exemple de prix sur :',
                        'explanation' => 'Le pétrole est une matière première négociée sur les marchés de commodities.',
                        'choices' => [
                            ['choice_text' => 'Le marché des matières premières', 'is_correct' => true],
                            ['choice_text' => 'Le marché exclusivement obligataire', 'is_correct' => false],
                            ['choice_text' => 'Le marché des actions uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le marché des dépôts bancaires uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles surveiller les prix des matières premières ?',
                        'explanation' => 'Les prix des matières premières peuvent influencer les coûts ou les revenus des entreprises.',
                        'choices' => [
                            ['choice_text' => 'Parce que ces prix peuvent influencer leurs coûts ou leurs revenus', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils déterminent directement tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils remplacent les taux d’intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui reçoit des revenus en devise étrangère peut subir une perte lorsque :',
                        'explanation' => 'Une dépréciation de la devise étrangère peut réduire la valeur de ces revenus dans la devise de référence.',
                        'choices' => [
                            ['choice_text' => 'La devise étrangère se déprécie par rapport à sa devise de référence', 'is_correct' => true],
                            ['choice_text' => 'La devise étrangère s’apprécie toujours', 'is_correct' => false],
                            ['choice_text' => 'Son chiffre d’affaires augmente en devise locale', 'is_correct' => false],
                            ['choice_text' => 'Elle diversifie ses clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération de change au comptant ?',
                        'explanation' => 'Il s’agit d’une opération d’achat ou de vente de devises avec un règlement proche de la date de transaction.',
                        'choices' => [
                            ['choice_text' => 'Une opération d’achat ou de vente de devises avec règlement proche de la date de transaction', 'is_correct' => true],
                            ['choice_text' => 'Une obligation à trente ans', 'is_correct' => false],
                            ['choice_text' => 'Une action privilégiée', 'is_correct' => false],
                            ['choice_text' => 'Un dividende différé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles couvrir leur risque de change ?',
                        'explanation' => 'La couverture permet de réduire l’incertitude liée aux variations futures des devises.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’incertitude liée aux variations futures des devises', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir tous leurs bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les marchés de change', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les devises de fluctuer', 'is_correct' => false],
                        ],
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
                    'description' => $quizData['description'] ?? $quizData['title'],
                    'duration' => 10,
                    'passing_score' => 80,
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

                $choices = $questionData['choices'];
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