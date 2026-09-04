```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMarketsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-markets')
            ->firstOrFail();

        $quizzes = [

            [
                'title' => 'Introduction aux marchés financiers',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un marché financier ?',
                        'answers' => [
                            ['text' => 'Un marché où s’échangent des instruments financiers', 'iscorrect' => true],
                            ['text' => 'Un marché réservé aux produits alimentaires', 'iscorrect' => false],
                            ['text' => 'Un système uniquement destiné aux entreprises publiques', 'iscorrect' => false],
                            ['text' => 'Un lieu où seuls les billets de banque sont échangés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux rôles des marchés financiers ?',
                        'answers' => [
                            ['text' => 'Faciliter le financement et l’investissement', 'iscorrect' => true],
                            ['text' => 'Fixer tous les salaires', 'iscorrect' => false],
                            ['text' => 'Produire directement des biens industriels', 'iscorrect' => false],
                            ['text' => 'Remplacer les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui peut participer aux marchés financiers ?',
                        'answers' => [
                            ['text' => 'Les particuliers, les entreprises et les institutions', 'iscorrect' => true],
                            ['text' => 'Uniquement les gouvernements', 'iscorrect' => false],
                            ['text' => 'Uniquement les banques centrales', 'iscorrect' => false],
                            ['text' => 'Uniquement les grandes entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une action ?',
                        'answers' => [
                            ['text' => 'Une part de propriété dans une entreprise', 'iscorrect' => true],
                            ['text' => 'Une dette de l’État', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance automobile', 'iscorrect' => false],
                            ['text' => 'Une monnaie étrangère', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une obligation ?',
                        'answers' => [
                            ['text' => 'Une créance sur un émetteur', 'iscorrect' => true],
                            ['text' => 'Une part obligatoire du capital social', 'iscorrect' => false],
                            ['text' => 'Une marchandise physique', 'iscorrect' => false],
                            ['text' => 'Une action sans droit de vote', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investisseur ?',
                        'answers' => [
                            ['text' => 'Une personne ou une organisation qui place des capitaux dans l’espoir d’obtenir un rendement', 'iscorrect' => true],
                            ['text' => 'Uniquement une banque centrale', 'iscorrect' => false],
                            ['text' => 'Une entreprise qui ne possède aucun actif', 'iscorrect' => false],
                            ['text' => 'Un organisme qui imprime automatiquement la monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement d’un investissement ?',
                        'answers' => [
                            ['text' => 'Le gain ou la perte généré par l’investissement sur une période donnée', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant initial investi', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Le montant des frais bancaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises utilisent-elles les marchés financiers ?',
                        'answers' => [
                            ['text' => 'Pour obtenir des financements et gérer certaines expositions financières', 'iscorrect' => true],
                            ['text' => 'Pour supprimer tous leurs coûts', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute obligation comptable', 'iscorrect' => false],
                            ['text' => 'Pour remplacer tous leurs salariés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un titre financier ?',
                        'answers' => [
                            ['text' => 'Un instrument représentant généralement un droit financier ou économique', 'iscorrect' => true],
                            ['text' => 'Un document administratif sans valeur économique', 'iscorrect' => false],
                            ['text' => 'Un produit exclusivement immobilier', 'iscorrect' => false],
                            ['text' => 'Une facture commerciale uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante sur un marché financier ?',
                        'answers' => [
                            ['text' => 'Elle facilite l’achat et la vente des actifs', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours un bénéfice', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute variation de prix', 'iscorrect' => false],
                            ['text' => 'Elle supprime tous les risques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Actions et marché boursier',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une action ordinaire ?',
                        'answers' => [
                            ['text' => 'Un titre représentant une fraction du capital d’une société', 'iscorrect' => true],
                            ['text' => 'Une obligation émise par une banque centrale', 'iscorrect' => false],
                            ['text' => 'Un prêt bancaire garanti par l’État', 'iscorrect' => false],
                            ['text' => 'Une devise étrangère', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut recevoir un actionnaire sous forme de distribution ?',
                        'answers' => [
                            ['text' => 'Un dividende', 'iscorrect' => true],
                            ['text' => 'Un coupon obligataire obligatoire', 'iscorrect' => false],
                            ['text' => 'Une prime d’assurance', 'iscorrect' => false],
                            ['text' => 'Une taxe supplémentaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une hausse du cours d’une action ?',
                        'answers' => [
                            ['text' => 'Le prix de marché de l’action a augmenté', 'iscorrect' => true],
                            ['text' => 'Le nombre d’actions a nécessairement diminué', 'iscorrect' => false],
                            ['text' => 'La dette de l’entreprise est automatiquement remboursée', 'iscorrect' => false],
                            ['text' => 'Le dividende est nécessairement supprimé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une introduction en bourse ?',
                        'answers' => [
                            ['text' => 'La première admission des actions d’une entreprise à la négociation publique', 'iscorrect' => true],
                            ['text' => 'La fermeture définitive d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Une émission obligatoire de monnaie', 'iscorrect' => false],
                            ['text' => 'Une fusion entre deux banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie être actionnaire d’une entreprise ?',
                        'answers' => [
                            ['text' => 'Détenir une participation dans son capital', 'iscorrect' => true],
                            ['text' => 'Être automatiquement son salarié', 'iscorrect' => false],
                            ['text' => 'Être son créancier obligataire uniquement', 'iscorrect' => false],
                            ['text' => 'Contrôler nécessairement la totalité de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cours d’une action peut-il varier ?',
                        'answers' => [
                            ['text' => 'Parce que l’offre et la demande ainsi que les informations disponibles évoluent', 'iscorrect' => true],
                            ['text' => 'Parce que son prix est toujours fixé définitivement', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises changent automatiquement de monnaie', 'iscorrect' => false],
                            ['text' => 'Parce que les dividendes sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier ?',
                        'answers' => [
                            ['text' => 'Un indicateur représentant l’évolution d’un ensemble de titres', 'iscorrect' => true],
                            ['text' => 'Une obligation individuelle', 'iscorrect' => false],
                            ['text' => 'Un compte bancaire', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est directement associé à une action ?',
                        'answers' => [
                            ['text' => 'Le risque de variation de son cours', 'iscorrect' => true],
                            ['text' => 'L’absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Le risque que son prix reste toujours fixe', 'iscorrect' => false],
                            ['text' => 'Uniquement le risque de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une plus-value sur une action ?',
                        'answers' => [
                            ['text' => 'Un gain réalisé lorsque le prix de vente est supérieur au prix d’achat, avant prise en compte des coûts et fiscalité', 'iscorrect' => true],
                            ['text' => 'Une perte sur investissement', 'iscorrect' => false],
                            ['text' => 'Un dividende obligatoire', 'iscorrect' => false],
                            ['text' => 'Une dette envers l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il diversifier ses actions ?',
                        'answers' => [
                            ['text' => 'Pour réduire l’exposition à un seul titre ou secteur', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Pour supprimer toutes les pertes possibles', 'iscorrect' => false],
                            ['text' => 'Pour rendre tous les titres identiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Obligations et marché de la dette',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une obligation ?',
                        'answers' => [
                            ['text' => 'Un titre de dette émis par une entreprise, un État ou une autre organisation', 'iscorrect' => true],
                            ['text' => 'Une part obligatoire du capital d’une société', 'iscorrect' => false],
                            ['text' => 'Une action sans dividende', 'iscorrect' => false],
                            ['text' => 'Une monnaie numérique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le coupon d’une obligation ?',
                        'answers' => [
                            ['text' => 'Le paiement d’intérêt prévu par l’obligation', 'iscorrect' => true],
                            ['text' => 'Le prix de l’action de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Le montant du capital social', 'iscorrect' => false],
                            ['text' => 'Une commission boursière obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au remboursement d’une obligation arrivant à échéance ?',
                        'answers' => [
                            ['text' => 'Le principal est remboursé selon les conditions prévues', 'iscorrect' => true],
                            ['text' => 'L’obligation devient automatiquement une action', 'iscorrect' => false],
                            ['text' => 'Le coupon devient une action', 'iscorrect' => false],
                            ['text' => 'La dette disparaît sans paiement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque qu’un émetteur ne respecte pas ses obligations de paiement ?',
                        'answers' => [
                            ['text' => 'Le risque de crédit ou de défaut', 'iscorrect' => true],
                            ['text' => 'Le risque de diversification', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende', 'iscorrect' => false],
                            ['text' => 'Le risque comptable uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque les taux d’intérêt du marché augmentent, le prix d’une obligation à taux fixe existante tend généralement à :',
                        'answers' => [
                            ['text' => 'Baisser', 'iscorrect' => true],
                            ['text' => 'Augmenter toujours', 'iscorrect' => false],
                            ['text' => 'Rester nécessairement identique', 'iscorrect' => false],
                            ['text' => 'Devenir nul immédiatement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur nominale d’une obligation ?',
                        'answers' => [
                            ['text' => Le montant de référence prévu pour le remboursement du principal', 'iscorrect' => true],
                            ['text' => 'Le cours quotidien obligatoire', 'iscorrect' => false],
                            ['text' => 'Le montant des dividendes', 'iscorrect' => false],
                            ['text' => 'La valeur totale des actions de l’émetteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d’État est généralement émise par :',
                        'answers' => [
                            ['text' => 'Un gouvernement ou une entité publique habilitée', 'iscorrect' => true],
                            ['text' => 'Uniquement une société privée', 'iscorrect' => false],
                            ['text' => 'Uniquement un particulier', 'iscorrect' => false],
                            ['text' => 'Une bourse elle-même', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’échéance d’une obligation ?',
                        'answers' => [
                            ['text' => 'La date prévue pour le remboursement final du principal', 'iscorrect' => true],
                            ['text' => 'La date de paiement du premier salaire', 'iscorrect' => false],
                            ['text' => 'La date de création de l’entreprise', 'iscorrect' => false],
                            ['text' => 'La date obligatoire de versement des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation risquée peut-elle offrir un rendement plus élevé ?',
                        'answers' => [
                            ['text' => 'Les investisseurs peuvent exiger une rémunération supplémentaire pour le risque', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle est toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Parce que son principal augmente automatiquement', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle ne possède jamais de date d’échéance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la maturité d’une obligation ?',
                        'answers' => [
                            ['text' => 'La durée restant jusqu’à son échéance', 'iscorrect' => true],
                            ['text' => 'Le montant du coupon', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actionnaires de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Le prix d’émission uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché monétaire et instruments à court terme',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du marché monétaire ?',
                        'answers' => [
                            ['text' => 'Faciliter les financements et placements à court terme', 'iscorrect' => true],
                            ['text' => 'Financer uniquement les projets immobiliers à très long terme', 'iscorrect' => false],
                            ['text' => 'Échanger uniquement des actions', 'iscorrect' => false],
                            ['text' => 'Fixer les prix des matières premières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique est généralement associée aux instruments du marché monétaire ?',
                        'answers' => [
                            ['text' => 'Une échéance relativement courte', 'iscorrect' => true],
                            ['text' => 'Une maturité nécessairement supérieure à vingt ans', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une propriété obligatoire dans une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que sont les bons du Trésor à court terme ?',
                        'answers' => [
                            ['text' => 'Des titres de dette publique à court terme', 'iscorrect' => true],
                            ['text' => 'Des actions de sociétés publiques', 'iscorrect' => false],
                            ['text' => 'Des contrats immobiliers', 'iscorrect' => false],
                            ['text' => 'Des parts de fonds obligatoires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut utiliser le marché monétaire pour :',
                        'answers' => [
                            ['text' => Gérer ses besoins de financement à court terme', 'iscorrect' => true],
                            ['text' => 'Financer uniquement une acquisition sur cinquante ans', 'iscorrect' => false],
                            ['text' => 'Remplacer définitivement ses capitaux propres', 'iscorrect' => false],
                            ['text' => 'Éviter toute gestion de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un certificat de dépôt ?',
                        'answers' => [
                            ['text' => 'Un instrument représentant généralement un dépôt rémunéré pour une durée déterminée', 'iscorrect' => true],
                            ['text' => 'Une action cotée', 'iscorrect' => false],
                            ['text' => 'Une obligation perpétuelle', 'iscorrect' => false],
                            ['text' => 'Un contrat d’assurance automobile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les instruments monétaires sont-ils souvent considérés comme plus liquides que certains investissements à long terme ?',
                        'answers' => [
                            ['text' => 'Ils ont généralement des maturités courtes et peuvent être négociés sur des marchés liquides', 'iscorrect' => true],
                            ['text' => 'Ils garantissent tous un bénéfice', 'iscorrect' => false],
                            ['text' => 'Ils sont tous des actions', 'iscorrect' => false],
                            ['text' => 'Ils ne comportent jamais aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel acteur joue un rôle central dans la gestion de la liquidité du système bancaire ?',
                        'answers' => [
                            ['text' => 'La banque centrale', 'iscorrect' => true],
                            ['text' => 'Une entreprise industrielle', 'iscorrect' => false],
                            ['text' => 'Un actionnaire individuel', 'iscorrect' => false],
                            ['text' => 'Une agence immobilière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le marché interbancaire concerne principalement :',
                        'answers' => [
                            ['text' => 'Les échanges de liquidité et de financement entre établissements financiers', 'iscorrect' => true],
                            ['text' => 'Les ventes d’actions aux particuliers uniquement', 'iscorrect' => false],
                            ['text' => 'Les transactions immobilières', 'iscorrect' => false],
                            ['text' => 'Les achats de matières premières agricoles uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement à court terme vise généralement à :',
                        'answers' => [
                            ['text' => 'Préserver la liquidité tout en obtenant éventuellement un rendement', 'iscorrect' => true],
                            ['text' => 'Maximiser systématiquement le risque', 'iscorrect' => false],
                            ['text' => 'Acheter une participation de contrôle', 'iscorrect' => false],
                            ['text' => 'Financer uniquement des projets sur plusieurs décennies', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux directeurs peut influencer le marché monétaire en :',
                        'answers' => [
                            ['text' => 'Modifiant le coût du financement à court terme', 'iscorrect' => true],
                            ['text' => 'Fixant directement tous les cours des actions', 'iscorrect' => false],
                            ['text' => 'Supprimant automatiquement toutes les dettes', 'iscorrect' => false],
                            ['text' => 'Garantissant une hausse de tous les actifs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Intermédiaires et institutions financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une banque commerciale ?',
                        'answers' => [
                            ['text' => 'Collecter des dépôts, accorder des crédits et fournir des services financiers', 'iscorrect' => true],
                            ['text' => 'Produire des actions pour toutes les entreprises', 'iscorrect' => false],
                            ['text' => 'Fixer seule les taux directeurs', 'iscorrect' => false],
                            ['text' => 'Gérer uniquement les marchés boursiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'answers' => [
                            ['text' => 'Conduire la politique monétaire et contribuer à la stabilité financière selon son mandat', 'iscorrect' => true],
                            ['text' => 'Gérer les comptes de tous les particuliers', 'iscorrect' => false],
                            ['text' => 'Émettre les actions des entreprises privées', 'iscorrect' => false],
                            ['text' => 'Fixer tous les prix des marchandises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle un courtier peut-il jouer sur les marchés financiers ?',
                        'answers' => [
                            ['text' => 'Faciliter l’exécution des ordres d’achat et de vente pour ses clients', 'iscorrect' => true],
                            ['text' => 'Garantir le rendement des investissements', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque de marché', 'iscorrect' => false],
                            ['text' => 'Créer automatiquement les bénéfices des entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds d’investissement ?',
                        'answers' => [
                            ['text' => 'Un véhicule qui regroupe des capitaux pour investir selon une stratégie donnée', 'iscorrect' => true],
                            ['text' => 'Une banque centrale', 'iscorrect' => false],
                            ['text' => 'Une monnaie officielle', 'iscorrect' => false],
                            ['text' => 'Une entreprise qui ne possède aucun actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement une compagnie d’assurance ?',
                        'answers' => [
                            ['text' => 'Elle mutualise et couvre certains risques en échange de primes', 'iscorrect' => true],
                            ['text' => 'Elle fixe les taux de change mondiaux', 'iscorrect' => false],
                            ['text' => 'Elle émet toutes les obligations publiques', 'iscorrect' => false],
                            ['text' => 'Elle garantit tous les investissements boursiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intermédiaires financiers sont-ils importants ?',
                        'answers' => [
                            ['text' => 'Ils facilitent la circulation des capitaux entre agents ayant des besoins différents', 'iscorrect' => true],
                            ['text' => 'Ils empêchent toute transaction directe', 'iscorrect' => false],
                            ['text' => 'Ils suppriment tous les risques financiers', 'iscorrect' => false],
                            ['text' => 'Ils fixent toujours le prix de chaque actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une société de gestion d’actifs ?',
                        'answers' => [
                            ['text' => 'Une société qui gère des investissements pour des clients ou des fonds', 'iscorrect' => true],
                            ['text' => 'Une entreprise qui fabrique des billets', 'iscorrect' => false],
                            ['text' => 'Une agence immobilière uniquement', 'iscorrect' => false],
                            ['text' => 'Une banque centrale nationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un gestionnaire de portefeuille ?',
                        'answers' => [
                            ['text' => 'Gérer les investissements conformément aux objectifs et contraintes du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir une absence totale de pertes', 'iscorrect' => false],
                            ['text' => 'Fixer les taux directeurs', 'iscorrect' => false],
                            ['text' => 'Émettre toutes les actions du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une chambre de compensation contribue notamment à :',
                        'answers' => [
                            ['text' => 'Organiser et sécuriser le règlement de certaines transactions financières', 'iscorrect' => true],
                            ['text' => 'Fixer le salaire des investisseurs', 'iscorrect' => false],
                            ['text' => 'Garantir la hausse des marchés', 'iscorrect' => false],
                            ['text' => 'Créer les entreprises cotées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réglementation financière est-elle importante ?',
                        'answers' => [
                            ['text' => 'Elle vise notamment à protéger les investisseurs et préserver la stabilité et l’intégrité des marchés', 'iscorrect' => true],
                            ['text' => 'Elle garantit que tous les investissements seront rentables', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute variation de prix', 'iscorrect' => false],
                            ['text' => 'Elle supprime toutes les banques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Rendement, risque et diversification',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque financier ?',
                        'answers' => [
                            ['text' => 'La possibilité que le résultat réel diffère du résultat attendu, notamment avec une perte', 'iscorrect' => true],
                            ['text' => 'La garantie d’un rendement fixe', 'iscorrect' => false],
                            ['text' => 'Uniquement le montant investi', 'iscorrect' => false],
                            ['text' => 'Une obligation de vendre un actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement attendu est-il généralement lié au risque ?',
                        'answers' => [
                            ['text' => 'Les investisseurs peuvent demander une rémunération supplémentaire pour accepter davantage de risque', 'iscorrect' => true],
                            ['text' => 'Le risque garantit toujours un rendement élevé', 'iscorrect' => false],
                            ['text' => 'Le risque n’a aucune relation avec les décisions d’investissement', 'iscorrect' => false],
                            ['text' => 'Tous les actifs ont exactement le même rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la diversification ?',
                        'answers' => [
                            ['text' => 'Répartir les investissements entre plusieurs actifs afin de réduire certaines concentrations de risque', 'iscorrect' => true],
                            ['text' => 'Investir tout son capital dans une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des obligations', 'iscorrect' => false],
                            ['text' => 'Éviter complètement les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque la diversification peut-elle réduire particulièrement ?',
                        'answers' => [
                            ['text' => 'Le risque spécifique à un titre ou à une entreprise', 'iscorrect' => true],
                            ['text' => 'Tous les risques macroéconomiques', 'iscorrect' => false],
                            ['text' => 'Tous les risques de marché', 'iscorrect' => false],
                            ['text' => 'Le risque d’inflation dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité d’un actif ?',
                        'answers' => [
                            ['text' => 'Une mesure de l’ampleur des variations de son prix ou de ses rendements', 'iscorrect' => true],
                            ['text' => 'Le montant initial investi', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions émises', 'iscorrect' => false],
                            ['text' => 'Le dividende annuel uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille diversifié contient généralement :',
                        'answers' => [
                            ['text' => 'Plusieurs investissements dont les risques ne sont pas parfaitement identiques', 'iscorrect' => true],
                            ['text' => 'Un seul actif', 'iscorrect' => false],
                            ['text' => 'Uniquement des actions d’une même entreprise', 'iscorrect' => false],
                            ['text' => 'Uniquement des liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une perte sur un investissement signifie :',
                        'answers' => [
                            ['text' => 'Que la valeur ou le rendement de l’investissement a diminué par rapport à la référence considérée', 'iscorrect' => true],
                            ['text' => 'Que tous les autres investissements ont également perdu', 'iscorrect' => false],
                            ['text' => 'Que le marché est fermé', 'iscorrect' => false],
                            ['text' => 'Que l’investisseur a nécessairement vendu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement réduit généralement le risque de concentration ?',
                        'answers' => [
                            ['text' => 'Répartir le portefeuille entre plusieurs actifs et secteurs', 'iscorrect' => true],
                            ['text' => 'Investir tout le capital dans une seule action', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement le titre le plus volatil', 'iscorrect' => false],
                            ['text' => 'Ne jamais analyser les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement négatif ?',
                        'answers' => [
                            ['text' => 'Un rendement correspondant à une perte sur la période considérée', 'iscorrect' => true],
                            ['text' => 'Un rendement nécessairement supérieur à 10 %', 'iscorrect' => false],
                            ['text' => 'Un dividende supplémentaire', 'iscorrect' => false],
                            ['text' => 'Une absence de variation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître son profil de risque ?',
                        'answers' => [
                            ['text' => 'Pour choisir des investissements compatibles avec sa capacité et sa volonté d’assumer des pertes', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement fixe', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les impôts', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les marchés de fluctuer', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fonctionnement des ordres de marché',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ordre au marché ?',
                        'answers' => [
                            ['text' => 'Un ordre visant à acheter ou vendre rapidement au meilleur prix disponible', 'iscorrect' => true],
                            ['text' => 'Un ordre avec un prix maximal ou minimal toujours garanti', 'iscorrect' => false],
                            ['text' => 'Un ordre réservé aux banques centrales', 'iscorrect' => false],
                            ['text' => 'Un ordre qui ne peut jamais être exécuté', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre à cours limité ?',
                        'answers' => [
                            ['text' => 'Un ordre comportant un prix limite défini par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Un ordre sans prix', 'iscorrect' => false],
                            ['text' => 'Un ordre uniquement utilisé pour les obligations publiques', 'iscorrect' => false],
                            ['text' => 'Un ordre garantissant toujours une exécution', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un ordre d’achat limité, le prix limite représente généralement :',
                        'answers' => [
                            ['text' => 'Le prix maximal que l’investisseur accepte de payer', 'iscorrect' => true],
                            ['text' => 'Le prix minimal qu’il doit payer', 'iscorrect' => false],
                            ['text' => 'Le prix de clôture obligatoire', 'iscorrect' => false],
                            ['text' => 'Le dividende prévu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix acheteur, ou bid ?',
                        'answers' => [
                            ['text' => 'Le meilleur prix proposé par un acheteur', 'iscorrect' => true],
                            ['text' => 'Le meilleur prix proposé par un vendeur', 'iscorrect' => false],
                            ['text' => 'Le prix d’émission historique', 'iscorrect' => false],
                            ['text' => 'Le prix du dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le prix vendeur, ou ask ?',
                        'answers' => [
                            ['text' => 'Le meilleur prix auquel un vendeur propose généralement de céder le titre', 'iscorrect' => true],
                            ['text' => 'Le prix proposé par l’acheteur', 'iscorrect' => false],
                            ['text' => 'Le prix comptable de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Le taux de dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le spread bid-ask ?',
                        'answers' => [
                            ['text' => 'L’écart entre le meilleur prix acheteur et le meilleur prix vendeur', 'iscorrect' => true],
                            ['text' => 'L’écart entre deux dividendes', 'iscorrect' => false],
                            ['text' => 'La différence entre deux exercices comptables', 'iscorrect' => false],
                            ['text' => 'Le rendement annuel garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le volume de négociation ?',
                        'answers' => [
                            ['text' => 'La quantité de titres échangés sur une période', 'iscorrect' => true],
                            ['text' => 'Le nombre de dividendes versés', 'iscorrect' => false],
                            ['text' => 'La valeur comptable des actifs', 'iscorrect' => false],
                            ['text' => 'Le taux d’intérêt directeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte liquidité de marché signifie généralement :',
                        'answers' => [
                            ['text' => 'Qu’il est relativement facile d’acheter ou de vendre sans provoquer une variation excessive du prix', 'iscorrect' => true],
                            ['text' => 'Que le prix ne varie jamais', 'iscorrect' => false],
                            ['text' => 'Que l’investissement est sans risque', 'iscorrect' => false],
                            ['text' => 'Que le rendement est garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ordre de vente ?',
                        'answers' => [
                            ['text' => 'Une instruction visant à céder un titre', 'iscorrect' => true],
                            ['text' => 'Une instruction visant uniquement à recevoir un dividende', 'iscorrect' => false],
                            ['text' => 'Une demande de prêt bancaire', 'iscorrect' => false],
                            ['text' => 'Une émission de monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ordre au marché peut-il être exécuté à un prix différent de celui observé quelques secondes auparavant ?',
                        'answers' => [
                            ['text' => 'Parce que les prix disponibles peuvent changer rapidement selon l’offre et la demande', 'iscorrect' => true],
                            ['text' => 'Parce que les marchés ne possèdent jamais de prix', 'iscorrect' => false],
                            ['text' => 'Parce que les actions sont toujours remboursées à leur valeur nominale', 'iscorrect' => false],
                            ['text' => 'Parce que les dividendes changent chaque seconde', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Indices, fonds et ETF',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un ETF ?',
                        'answers' => [
                            ['text' => 'Un fonds coté en bourse dont les parts peuvent être négociées sur un marché', 'iscorrect' => true],
                            ['text' => 'Une obligation individuelle', 'iscorrect' => false],
                            ['text' => 'Une banque centrale', 'iscorrect' => false],
                            ['text' => 'Une monnaie officielle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel peut être l’objectif d’un ETF indiciel ?',
                        'answers' => [
                            ['text' => 'Répliquer la performance d’un indice de référence', 'iscorrect' => true],
                            ['text' => 'Garantir une performance supérieure à l’indice', 'iscorrect' => false],
                            ['text' => 'Supprimer tous les risques', 'iscorrect' => false],
                            ['text' => 'Investir uniquement dans une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice boursier pondéré par la capitalisation ?',
                        'answers' => [
                            ['text' => 'Un indice où le poids des sociétés dépend notamment de leur capitalisation boursière', 'iscorrect' => true],
                            ['text' => 'Un indice où toutes les sociétés ont toujours exactement le même poids', 'iscorrect' => false],
                            ['text' => 'Un indice composé uniquement d’obligations', 'iscorrect' => false],
                            ['text' => 'Un indice sans valeur de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des avantages d’un fonds diversifié ?',
                        'answers' => [
                            ['text' => 'Il peut répartir l’investissement entre plusieurs titres', 'iscorrect' => true],
                            ['text' => 'Il garantit toujours un bénéfice', 'iscorrect' => false],
                            ['text' => 'Il supprime toutes les commissions', 'iscorrect' => false],
                            ['text' => 'Il investit nécessairement dans un seul secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie suivre un indice ?',
                        'answers' => [
                            ['text' => 'Chercher à reproduire, avant coûts, la performance d’un indice de référence', 'iscorrect' => true],
                            ['text' => 'Chercher obligatoirement à battre l’indice', 'iscorrect' => false],
                            ['text' => 'Investir sans aucune règle', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Les frais d’un fonds peuvent-ils affecter le rendement de l’investisseur ?',
                        'answers' => [
                            ['text' => 'Oui, les frais réduisent le rendement net obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Non, les frais n’ont jamais aucun effet', 'iscorrect' => false],
                            ['text' => 'Uniquement lorsque le marché monte', 'iscorrect' => false],
                            ['text' => 'Uniquement pour les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur utilise-t-il un ETF diversifié ?',
                        'answers' => [
                            ['text' => 'Pour obtenir une exposition à plusieurs titres au moyen d’un seul instrument', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute variation de marché', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque de change dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds obligataire ?',
                        'answers' => [
                            ['text' => 'Un fonds qui investit principalement dans des obligations ou instruments de dette', 'iscorrect' => true],
                            ['text' => 'Un fonds composé uniquement d’actions', 'iscorrect' => false],
                            ['text' => 'Une banque centrale', 'iscorrect' => false],
                            ['text' => 'Une société qui émet uniquement des devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice sert souvent de :',
                        'answers' => [
                            ['text' => 'Référence pour mesurer la performance d’un marché ou d’un segment', 'iscorrect' => true],
                            ['text' => 'Garantie de rendement', 'iscorrect' => false],
                            ['text' => 'Contrat de prêt obligatoire', 'iscorrect' => false],
                            ['text' => 'Remplacement d’un compte bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance d’un fonds à son indice de référence ?',
                        'answers' => [
                            ['text' => 'Pour évaluer sa performance par rapport au marché ou à l’objectif qu’il cherche à suivre', 'iscorrect' => true],
                            ['text' => 'Pour garantir qu’il sera toujours meilleur', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les frais du fonds', 'iscorrect' => false],
                            ['text' => 'Pour connaître automatiquement ses bénéfices futurs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marchés des changes et matières premières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le marché des changes ?',
                        'answers' => [
                            ['text' => 'Le marché sur lequel les devises sont échangées', 'iscorrect' => true],
                            ['text' => 'Le marché exclusivement réservé aux actions', 'iscorrect' => false],
                            ['text' => 'Le marché des assurances uniquement', 'iscorrect' => false],
                            ['text' => 'Le marché des obligations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change ?',
                        'answers' => [
                            ['text' => 'Le prix d’une devise exprimé en une autre devise', 'iscorrect' => true],
                            ['text' => 'Le taux d’intérêt d’une obligation', 'iscorrect' => false],
                            ['text' => 'Le rendement d’une action', 'iscorrect' => false],
                            ['text' => 'Le taux d’imposition d’une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine qui doit payer un fournisseur en dollars est exposée principalement à :',
                        'answers' => [
                            ['text' => 'Un risque de change', 'iscorrect' => true],
                            ['text' => 'Un risque de dividende', 'iscorrect' => false],
                            ['text' => 'Un risque de vote', 'iscorrect' => false],
                            ['text' => 'Un risque de capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une devise étrangère devient plus chère par rapport à la devise de l’entreprise importatrice, le coût de ses achats étrangers peut :',
                        'answers' => [
                            ['text' => 'Augmenter', 'iscorrect' => true],
                            ['text' => 'Diminuer nécessairement', 'iscorrect' => false],
                            ['text' => 'Rester toujours identique', 'iscorrect' => false],
                            ['text' => 'Devenir nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une matière première, ou commodity ?',
                        'answers' => [
                            ['text' => 'Un produit de base pouvant être négocié sur des marchés', 'iscorrect' => true],
                            ['text' => 'Une action d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Une obligation publique', 'iscorrect' => false],
                            ['text' => 'Une monnaie officielle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix du pétrole est un exemple de prix sur :',
                        'answers' => [
                            ['text' => 'Le marché des matières premières', 'iscorrect' => true],
                            ['text' => 'Le marché exclusivement obligataire', 'iscorrect' => false],
                            ['text' => 'Le marché des actions uniquement', 'iscorrect' => false],
                            ['text' => 'Le marché des dépôts bancaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles surveiller les prix des matières premières ?',
                        'answers' => [
                            ['text' => 'Parce que ces prix peuvent influencer leurs coûts ou leurs revenus', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils déterminent directement tous les salaires', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils remplacent les taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui reçoit des revenus en devise étrangère peut subir une perte lorsque :',
                        'answers' => [
                            ['text' => 'La devise étrangère se déprécie par rapport à sa devise de référence', 'iscorrect' => true],
                            ['text' => 'La devise étrangère s’apprécie toujours', 'iscorrect' => false],
                            ['text' => 'Son chiffre d’affaires augmente en devise locale', 'iscorrect' => false],
                            ['text' => 'Elle diversifie ses clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération de change au comptant ?',
                        'answers' => [
                            ['text' => 'Une opération d’achat ou de vente de devises avec règlement proche de la date de transaction', 'iscorrect' => true],
                            ['text' => 'Une obligation à trente ans', 'iscorrect' => false],
                            ['text' => 'Une action privilégiée', 'iscorrect' => false],
                            ['text' => 'Un dividende différé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises peuvent-elles couvrir leur risque de change ?',
                        'answers' => [
                            ['text' => 'Pour réduire l’incertitude liée aux variations futures des devises', 'iscorrect' => true],
                            ['text' => 'Pour garantir tous leurs bénéfices', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les marchés de change', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les devises de fluctuer', 'iscorrect' => false],
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

                $answers = $questionData['answers'];

                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['text'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
