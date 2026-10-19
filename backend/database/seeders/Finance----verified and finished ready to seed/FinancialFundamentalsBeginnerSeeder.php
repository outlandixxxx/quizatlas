<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-fundamentals')->firstOrFail();

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
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
        ];

        $quizzes = [
            [
                'title' => 'Fondamentaux financiers — Introduction à la finance',
                'description' => 'Fondamentaux financiers — Introduction à la finance',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la finance ?',
                        'explanation' => 'La finance concerne la gestion de l’argent, des investissements, du financement et des décisions financières.',
                        'choices' => [
                            ['choice_text' => 'Étudier la production, la consommation et la répartition des richesses d’un pays', 'is_correct' => false],
                            ['choice_text' => 'Comptabiliser les opérations passées et produire les déclarations fiscales de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Gérer l’argent, les investissements, le financement et les décisions financières', 'is_correct' => true],
                            ['choice_text' => 'Analyser les marchés de biens et services pour fixer les prix de vente des produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un investissement ?',
                        'explanation' => 'Un investissement consiste à engager une ressource aujourd’hui dans l’espoir d’obtenir un bénéfice futur.',
                        'choices' => [
                            ['choice_text' => 'Emprunter une somme auprès d’une banque pour la rembourser', 'is_correct' => false],
                            ['choice_text' => 'Engager une ressource dans l’espoir d’un bénéfice futur', 'is_correct' => true],
                            ['choice_text' => 'Comptabiliser une charge qui diminue le résultat de la période', 'is_correct' => false],
                            ['choice_text' => 'Acheter un bien de consommation pour l’utiliser au quotidien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un actif financier ?',
                        'explanation' => 'Un actif financier représente généralement un droit ou une créance ayant une valeur économique.',
                        'choices' => [
                            ['choice_text' => 'Un droit ou une créance ayant une valeur économique', 'is_correct' => true],
                            ['choice_text' => 'Une obligation de payer une somme à un créancier à une date fixée', 'is_correct' => false],
                            ['choice_text' => 'Un coût engagé pour assurer le fonctionnement quotidien', 'is_correct' => false],
                            ['choice_text' => 'Un bien matériel utilisé dans la production de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un actionnaire ?',
                        'explanation' => 'Un actionnaire détient une participation dans une entreprise sous forme d’actions.',
                        'choices' => [
                            ['choice_text' => 'Une personne ou une organisation qui prête de l’argent à une entreprise contre intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une personne ou une organisation qui détient des actions d’une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un salarié dirigeant qui gère l’entreprise au nom des propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Un établissement qui conserve les dépôts et les fonds de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général des marchés financiers ?',
                        'explanation' => 'Ils permettent notamment de mettre en relation les agents disposant de capitaux et ceux qui recherchent du financement.',
                        'choices' => [
                            ['choice_text' => 'Fixer le niveau des taux directeurs et contrôler la création monétaire', 'is_correct' => false],
                            ['choice_text' => 'Accorder des crédits aux ménages à partir des dépôts collectés', 'is_correct' => false],
                            ['choice_text' => 'Faciliter la rencontre entre offreurs et demandeurs de capitaux', 'is_correct' => true],
                            ['choice_text' => 'Couvrir les entreprises contre les risques en échange de primes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement d’un investissement ?',
                        'explanation' => 'Le rendement mesure le gain ou la perte généré par un investissement sur une période donnée.',
                        'choices' => [
                            ['choice_text' => 'La durée nécessaire pour récupérer la somme initialement placée', 'is_correct' => false],
                            ['choice_text' => 'Le coût des intérêts payés pour financer l’investissement', 'is_correct' => false],
                            ['choice_text' => 'Le gain ou la perte généré par un investissement', 'is_correct' => true],
                            ['choice_text' => 'Le montant total des capitaux engagés dans l’investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque financier ?',
                        'explanation' => 'Le risque financier correspond à l’incertitude concernant un résultat ou une perte financière future.',
                        'choices' => [
                            ['choice_text' => 'Le montant des intérêts versés à un prêteur sur une année', 'is_correct' => false],
                            ['choice_text' => 'L’obligation de rembourser un emprunt à une date convenue', 'is_correct' => false],
                            ['choice_text' => 'La différence entre les revenus et les dépenses d’une période', 'is_correct' => false],
                            ['choice_text' => 'L’incertitude concernant les résultats financiers futurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’argent disponible aujourd’hui a-t-il généralement plus de valeur que le même montant reçu plus tard ?',
                        'explanation' => 'L’argent disponible aujourd’hui peut être utilisé ou investi immédiatement.',
                        'choices' => [
                            ['choice_text' => 'Parce que les prix des biens et services baissent à mesure que le temps passe', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts s’appliquent aux sommes futures et pas aux sommes présentes', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’argent reçu plus tard est comptabilisé comme une dette par le bénéficiaire', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il peut être utilisé ou investi immédiatement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général d’une banque commerciale ?',
                        'explanation' => 'Une banque commerciale accepte notamment des dépôts et accorde des crédits.',
                        'choices' => [
                            ['choice_text' => 'Accepter des dépôts et accorder des crédits', 'is_correct' => true],
                            ['choice_text' => 'Émettre la monnaie et fixer les taux directeurs du pays', 'is_correct' => false],
                            ['choice_text' => 'Organiser la négociation des actions et des obligations', 'is_correct' => false],
                            ['choice_text' => 'Couvrir les clients contre les risques en échange de primes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle suivre ses décisions financières ?',
                        'explanation' => 'Le suivi permet d’évaluer les résultats et d’améliorer les décisions futures.',
                        'choices' => [
                            ['choice_text' => 'Pour justifier le versement des dividendes aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le travail des comptables et des auditeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer les résultats et améliorer les décisions futures', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le montant des impôts dus par l’entreprise chaque année', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Revenus, dépenses et bénéfices',
                'description' => 'Fondamentaux financiers — Revenus, dépenses et bénéfices',
                'questions' => [
                    [
                        'question' => 'Comment calcule-t-on généralement le bénéfice ?',
                        'explanation' => 'Le résultat comptable correspond aux produits moins les charges de la période. Un résultat positif constitue un bénéfice ; un résultat négatif constitue une perte.',                        'choices' => [
                            ['choice_text' => 'produits moins charges', 'is_correct' => true],
                            ['choice_text' => 'Actifs moins passifs', 'is_correct' => false],
                            ['choice_text' => 'Trésorerie plus dettes', 'is_correct' => false],
                            ['choice_text' => 'charges moins produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les revenus sont de 12 000 € et les dépenses de 9 000 €, quel est le bénéfice ?',
                        'explanation' => '12 000 € moins 9 000 € donnent un bénéfice de 3 000 €.',
                        'choices' => [
                            ['choice_text' => '3 000 €', 'is_correct' => true],
                            ['choice_text' => '9 000 €', 'is_correct' => false],
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '21 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque les dépenses dépassent les revenus ?',
                        'explanation' => 'Lorsque les dépenses sont supérieures aux revenus, l’entreprise subit une perte.',
                        'choices' => [
                            ['choice_text' => 'Les revenus diminuent d’autant', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise dégage un faible bénéfice', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise enregistre une perte', 'is_correct' => true],
                            ['choice_text' => 'Les capitaux propres augmentent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense ?',
                        'explanation' => 'Une dépense représente un coût engagé dans le fonctionnement d’une organisation.',
                        'choices' => [
                            ['choice_text' => 'Un coût engagé dans le fonctionnement ou l’activité', 'is_correct' => true],
                            ['choice_text' => 'Une somme reçue en contrepartie de la vente d’un produit', 'is_correct' => false],
                            ['choice_text' => 'Un montant que des clients doivent encore régler à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une ressource contrôlée par l’entreprise qui a une valeur économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les dépenses ?',
                        'explanation' => 'Le contrôle des dépenses contribue à préserver la rentabilité et la santé financière.',
                        'choices' => [
                            ['choice_text' => 'Pour répartir le résultat entre les actionnaires en fin d’année', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le chiffre d’affaires de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Pour maîtriser les coûts et préserver la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire les impôts et les cotisations de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre revenu et bénéfice ?',
                        'explanation' => 'Les produits correspondent aux éléments qui augmentent le résultat de la période, notamment les ventes. Le bénéfice correspond à un résultat positif après déduction des charges. Un produit peut être comptabilisé avant son encaissement.',                        'choices' => [
                            ['choice_text' => 'Le revenu tient compte des dépenses alors que le bénéfice représente les ventes réalisées', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice tient compte des dépenses alors que le revenu représente les produits générés', 'is_correct' => true],
                            ['choice_text' => 'Le revenu correspond au résultat net alors que le bénéfice mesure les encaissements de l’année', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice représente la trésorerie disponible alors que le revenu correspond aux dividendes versés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente son chiffre d’affaires mais ses coûts augmentent encore plus vite. Quel risque apparaît ?',
                        'explanation' => 'Une hausse des revenus ne garantit pas une hausse de la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la marge et de la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du chiffre d’affaires de la période', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration de la rentabilité grâce au volume de ventes', 'is_correct' => false],
                            ['choice_text' => 'Un allègement des dettes grâce aux ventes supplémentaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle avoir des revenus élevés sans être rentable ?',
                        'explanation' => 'Des dépenses élevées peuvent absorber une grande partie des revenus.',
                        'choices' => [
                            ['choice_text' => 'Parce que la rentabilité dépend du niveau de trésorerie disponible en fin d’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les revenus sont comptabilisés après le calcul du résultat de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses peuvent être suffisamment élevées pour réduire ou éliminer le bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dividendes versés aux actionnaires sont déduits des revenus avant le calcul du bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une marge bénéficiaire ?',
                        'explanation' => 'La marge bénéficiaire exprime le bénéfice par rapport aux revenus.',
                        'choices' => [
                            ['choice_text' => 'Une mesure du bénéfice rapporté au capital investi', 'is_correct' => false],
                            ['choice_text' => 'Une mesure des actifs courants rapportés aux dettes à court terme', 'is_correct' => false],
                            ['choice_text' => 'Une mesure du bénéfice rapporté aux revenus', 'is_correct' => true],
                            ['choice_text' => 'Une mesure des dettes rapportées aux capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les dépenses sur plusieurs périodes ?',
                        'explanation' => 'Une analyse temporelle permet d’identifier les tendances et les dérives de coûts.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer le prix de vente des produits de la période', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer le montant des dividendes à distribuer', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant de l’impôt à payer à l’administration', 'is_correct' => false],
                            ['choice_text' => 'Pour détecter les tendances et les évolutions des coûts', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Actifs, passifs et capitaux propres',
                'description' => 'Fondamentaux financiers — Actifs, passifs et capitaux propres',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un actif ?',
                        'explanation' => 'Un actif est une ressource économique contrôlée par l’entité.',
                        'choices' => [
                            ['choice_text' => 'Un apport en capital effectué par les propriétaires de l’entité', 'is_correct' => false],
                            ['choice_text' => 'Un coût supporté pendant la période pour faire fonctionner l’entité', 'is_correct' => false],
                            ['choice_text' => 'Une ressource ayant une valeur économique contrôlée par l’entité', 'is_correct' => true],
                            ['choice_text' => 'Une obligation envers un tiers qui devra être réglée à l’avenir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un passif ?',
                        'explanation' => 'Un passif représente une obligation envers une autre partie.',
                        'choices' => [
                            ['choice_text' => 'Une somme que les clients doivent encore payer à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une ressource économique contrôlée par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un apport financier effectué par les propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Une obligation financière envers une autre partie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les capitaux propres ?',
                        'explanation' => 'Ils représentent l’intérêt résiduel des propriétaires dans les actifs après déduction des passifs.',
                        'choices' => [
                            ['choice_text' => 'La trésorerie disponible sur les comptes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt résiduel des propriétaires dans l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le total des produits encaissés au cours de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble des sommes dues aux banques et aux fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle équation est fondamentale en comptabilité ?',
                        'explanation' => 'L’équation comptable fondamentale est Actifs = Passifs + Capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Actifs = Passifs + Capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Passifs = Revenus + Actifs', 'is_correct' => false],
                            ['choice_text' => 'Actifs = Revenus - Dépenses', 'is_correct' => false],
                            ['choice_text' => 'Capitaux propres = Actifs + Passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple d’actif ?',
                        'explanation' => 'La trésorerie est une ressource économique contrôlée par l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un emprunt bancaire', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une charge d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de passif ?',
                        'explanation' => 'Un emprunt représente une obligation de remboursement.',
                        'choices' => [
                            ['choice_text' => 'La caisse', 'is_correct' => false],
                            ['choice_text' => 'Une créance client', 'is_correct' => false],
                            ['choice_text' => 'Un emprunt bancaire', 'is_correct' => true],
                            ['choice_text' => 'Les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les actifs valent 100 000 € et les passifs 40 000 €, quels sont les capitaux propres ?',
                        'explanation' => 'Capitaux propres = 100 000 € - 40 000 € = 60 000 €.',
                        'choices' => [
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                            ['choice_text' => '140 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un actif n’est-il pas nécessairement de la trésorerie ?',
                        'explanation' => 'Les actifs comprennent aussi les stocks, immobilisations, créances et autres ressources économiques.',
                        'choices' => [
                            ['choice_text' => 'Parce que la trésorerie est classée parmi les capitaux propres et non à l’actif', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs comprennent plusieurs types de ressources économiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que seuls les stocks et les immobilisations sont inscrits à l’actif du bilan', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs sont évalués en fonction des dettes que l’entreprise doit régler', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils augmenter ?',
                        'explanation' => 'Ils peuvent notamment augmenter grâce aux bénéfices conservés ou à de nouveaux apports des propriétaires.',
                        'choices' => [
                            ['choice_text' => 'Grâce notamment aux bénéfices conservés ou aux nouveaux apports', 'is_correct' => true],
                            ['choice_text' => 'Grâce notamment à la conversion des stocks en créances clients', 'is_correct' => false],
                            ['choice_text' => 'Grâce notamment aux pertes reportées et aux retraits des propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Grâce notamment à la souscription de nouveaux emprunts bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la structure des actifs et des passifs ?',
                        'explanation' => 'Cela aide à comprendre la situation financière et les obligations de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer le prix de vente de chaque produit commercialisé', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le nombre d’actions que l’entreprise doit émettre', 'is_correct' => false],
                            ['choice_text' => 'Pour évaluer les ressources détenues et les obligations à honorer', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer la rentabilité des ventes et le résultat net de la période', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Valeur temporelle de l’argent',
                'description' => 'Fondamentaux financiers — Valeur temporelle de l’argent',
                'questions' => [
                    [
                        'question' => 'Que signifie la valeur temporelle de l’argent ?',
                        'explanation' => 'Un montant disponible aujourd’hui peut produire un rendement avant qu’un même montant futur soit reçu.',
                        'choices' => [
                            ['choice_text' => 'Un montant disponible aujourd’hui perd de la valeur dès qu’il est placé à intérêt', 'is_correct' => false],
                            ['choice_text' => 'Un montant futur est équivalent à un montant présent si les deux sont exprimés en euros', 'is_correct' => false],
                            ['choice_text' => 'Un montant reçu dans le futur vaut davantage car il a eu plus de temps pour s’accumuler', 'is_correct' => false],
                            ['choice_text' => 'Un montant disponible aujourd’hui peut produire un rendement avant une réception future', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur actuelle ?',
                        'explanation' => 'La valeur actuelle exprime aujourd’hui la valeur d’un montant futur.',
                        'choices' => [
                            ['choice_text' => 'La valeur de marché d’une entreprise cotée', 'is_correct' => false],
                            ['choice_text' => 'La valeur d’un actif inscrite au bilan à l’achat', 'is_correct' => false],
                            ['choice_text' => 'La valeur aujourd’hui d’un montant futur', 'is_correct' => true],
                            ['choice_text' => 'La valeur future d’un placement à son échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur future ?',
                        'explanation' => 'La valeur future mesure combien un montant actuel peut devenir après accumulation d’un rendement.',
                        'choices' => [
                            ['choice_text' => 'La valeur aujourd’hui d’un montant qui sera reçu plus tard', 'is_correct' => false],
                            ['choice_text' => 'La valeur qu’un montant actuel peut atteindre dans le futur', 'is_correct' => true],
                            ['choice_text' => 'Le total des intérêts perçus au cours de la durée du placement', 'is_correct' => false],
                            ['choice_text' => 'La valeur d’un actif inscrite au bilan à sa date d’achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet a généralement une hausse du taux d’actualisation sur la valeur actuelle d’un flux futur ?',
                        'explanation' => 'Un taux d’actualisation plus élevé réduit généralement la valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'La valeur future du flux diminue généralement', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle augmente généralement', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle n’est pas modifiée par le taux', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle diminue généralement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la capitalisation ?',
                        'explanation' => 'La capitalisation permet aux intérêts accumulés de produire eux-mêmes des intérêts.',
                        'choices' => [
                            ['choice_text' => 'Le calcul des intérêts sur le capital initial à chaque période, sans réinvestissement', 'is_correct' => false],
                            ['choice_text' => 'Le fait que les intérêts accumulés produisent à leur tour des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Le versement régulier d’une somme fixe sur un compte d’épargne', 'is_correct' => false],
                            ['choice_text' => 'L’émission d’actions pour augmenter le capital d’une société', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 1 000 € sont placés à intérêt simple de 5 % pendant un an, quel intérêt est généré ?',
                        'explanation' => '1 000 × 5 % = 50 €.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => true],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '1 050 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux investissements avec le même montant final peuvent-ils avoir des valeurs différentes aujourd’hui ?',
                        'explanation' => 'Leur échéance et le taux utilisé pour actualiser les flux peuvent différer.',
                        'choices' => [
                            ['choice_text' => 'Le calendrier des flux et le taux d’actualisation peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'Les intérêts sont calculés sur le montant final et non sur le capital de départ', 'is_correct' => false],
                            ['choice_text' => 'L’un des montants est exprimé en valeur future et l’autre en valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Le montant investi au départ est enregistré à une date comptable différente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi reçoit-on généralement moins en valeur actuelle pour un montant identique reçu beaucoup plus tard ?',
                        'explanation' => 'Le temps et le coût d’opportunité réduisent la valeur actuelle du flux.',
                        'choices' => [
                            ['choice_text' => 'Parce que le délai prive l’investisseur de l’utilisation ou du rendement de l’argent pendant cette période', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’investisseur doit payer des intérêts à l’émetteur pendant toute la durée d’attente', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant promis plus tard est généralement révisé à la baisse par la banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant nominal inscrit au contrat diminue en proportion du temps qui sépare la signature du paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur augmente généralement la valeur future d’un placement ?',
                        'explanation' => 'Un taux de rendement plus élevé augmente la valeur future, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Un capital de départ plus faible', 'is_correct' => false],
                            ['choice_text' => 'Une durée de placement plus courte', 'is_correct' => false],
                            ['choice_text' => 'Un taux de rendement plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Des frais de gestion plus élevés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le moment des encaissements est-il important en finance ?',
                        'explanation' => 'Un encaissement plus précoce peut être réinvesti ou utilisé plus tôt.',
                        'choices' => [
                            ['choice_text' => 'Parce que la date d’encaissement détermine surtout le montant des impôts dus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un encaissement plus précoce peut être utilisé ou investi plus tôt', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un encaissement plus tardif rapporte davantage à celui qui le reçoit', 'is_correct' => false],
                            ['choice_text' => 'Parce que le moment de l’encaissement modifie le montant facturé au client', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Risque et rendement',
                'description' => 'Fondamentaux financiers — Risque et rendement',
                'questions' => [
                    [
                        'question' => 'Pourquoi les investisseurs exigent-ils généralement une compensation pour prendre plus de risque ?',
                        'explanation' => 'Prendre plus d’incertitude peut entraîner des pertes plus importantes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les placements risqués se revendent plus facilement que les autres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une plus grande incertitude peut entraîner des pertes plus importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les placements risqués sont soumis à des taxes plus élevées que les autres', 'is_correct' => false],
                            ['choice_text' => 'Parce que le régulateur impose un rendement minimum sur les placements risqués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la diversification ?',
                        'explanation' => 'La diversification consiste à répartir les investissements afin de limiter la concentration du risque.',
                        'choices' => [
                            ['choice_text' => 'Concentrer le capital sur l’actif au meilleur rendement passé', 'is_correct' => false],
                            ['choice_text' => 'Fixer à l’avance le rendement attendu de chaque placement détenu', 'is_correct' => false],
                            ['choice_text' => 'Répartir les investissements entre plusieurs sources de risque', 'is_correct' => true],
                            ['choice_text' => 'Revendre régulièrement ses actifs pour se procurer des liquidités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque spécifique ?',
                        'explanation' => 'Le risque spécifique est lié à une entreprise ou à un actif particulier.',
                        'choices' => [
                            ['choice_text' => 'Un risque lié aux variations des taux de change entre deux devises', 'is_correct' => false],
                            ['choice_text' => 'Un risque calculé à partir du montant total des dettes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un risque qui n’apparaît qu’en cas de crise financière mondiale', 'is_correct' => false],
                            ['choice_text' => 'Un risque propre à une entreprise ou à un actif particulier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque systématique ?',
                        'explanation' => 'Il découle de facteurs qui affectent largement les marchés.',
                        'choices' => [
                            ['choice_text' => 'Un risque qui disparaît complètement quand on détient assez d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Un risque propre à la situation financière d’une seule entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un risque lié à des facteurs affectant largement les marchés', 'is_correct' => true],
                            ['choice_text' => 'Un risque lié à une erreur de gestion dans une société donnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille diversifié peut-il être moins risqué qu’un investissement unique ?',
                        'explanation' => 'La baisse d’un actif peut être partiellement compensée par le comportement d’autres actifs.',
                        'choices' => [
                            ['choice_text' => 'La mauvaise performance d’un actif peut être compensée par d’autres', 'is_correct' => true],
                            ['choice_text' => 'Les frais de gestion sont plus faibles pour un portefeuille que pour un titre', 'is_correct' => false],
                            ['choice_text' => 'Le rendement d’un portefeuille est égal au rendement de son meilleur actif', 'is_correct' => false],
                            ['choice_text' => 'La diversification supprime l’effet des variations générales du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation offre un rendement fixe contractuel. Quel risque peut néanmoins exister ?',
                        'explanation' => 'Le risque de défaut existe si l’émetteur n’est pas capable de respecter ses engagements.',
                        'choices' => [
                            ['choice_text' => 'Le risque de dilution du capital', 'is_correct' => false],
                            ['choice_text' => 'Le risque de baisse du dividende', 'is_correct' => false],
                            ['choice_text' => 'Le risque de défaut de l’émetteur', 'is_correct' => true],
                            ['choice_text' => 'Le risque de fluctuation du bénéfice par action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité représente généralement ?',
                        'explanation' => 'La volatilité mesure l’ampleur des variations d’un prix ou d’un rendement.',
                        'choices' => [
                            ['choice_text' => 'La durée restante avant le remboursement d’un titre de dette', 'is_correct' => false],
                            ['choice_text' => 'Le niveau moyen du rendement obtenu sur une longue période', 'is_correct' => false],
                            ['choice_text' => 'La facilité avec laquelle un actif se revend rapidement', 'is_correct' => false],
                            ['choice_text' => 'L’ampleur des variations d’un prix ou d’un rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un placement avec un rendement attendu plus élevé peut-il être moins adapté à certains investisseurs ?',
                        'explanation' => 'Il peut dépasser leur tolérance au risque ou leurs besoins de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Il peut présenter trop de risque par rapport à leurs objectifs', 'is_correct' => true],
                            ['choice_text' => 'Il offre un rendement plus faible que les placements sans risque en moyenne', 'is_correct' => false],
                            ['choice_text' => 'Il impose un horizon de placement plus court que les autres placements', 'is_correct' => false],
                            ['choice_text' => 'Il implique des frais de gestion qui dépassent le rendement attendu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante pour un investisseur ?',
                        'explanation' => 'Un actif liquide peut généralement être vendu plus facilement.',
                        'choices' => [
                            ['choice_text' => 'Elle facilite la conversion de l’actif en liquidités', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit la volatilité du prix de l’actif', 'is_correct' => false],
                            ['choice_text' => 'Elle protège le capital contre l’inflation sur la durée', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente le rendement attendu de l’actif détenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux la relation risque-rendement ?',
                        'explanation' => 'Un rendement attendu plus élevé est généralement associé à une plus grande incertitude.',
                        'choices' => [
                            ['choice_text' => 'Un risque plus élevé conduit en pratique à un rendement réalisé supérieur', 'is_correct' => false],
                            ['choice_text' => 'Un rendement attendu plus élevé s’accompagne généralement d’un niveau de risque plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Un rendement attendu plus élevé s’accompagne généralement d’un risque plus faible', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de risque d’un placement est indépendant de son rendement attendu sur les marchés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Institutions financières',
                'description' => 'Fondamentaux financiers — Institutions financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’un courtier (société de bourse) ?',
                        'explanation' => 'Un courtier (société de bourse) exécute les ordres d’achat et de vente de titres pour le compte de ses clients.',
                        'choices' => [
                            ['choice_text' => 'Exécuter les ordres d’achat et de vente de titres pour le compte de ses clients', 'is_correct' => true],
                            ['choice_text' => 'Contrôler la conformité des opérations de marché et sanctionner les abus', 'is_correct' => false],
                            ['choice_text' => 'Émettre des actions nouvelles pour financer les entreprises clientes', 'is_correct' => false],
                            ['choice_text' => 'Fixer les cours des actions cotées d’après ses propres prévisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une compagnie d’assurance ?',
                        'explanation' => 'L’assurance permet de transférer certains risques en échange de primes.',
                        'choices' => [
                            ['choice_text' => 'Couvrir certains risques en échange de primes', 'is_correct' => true],
                            ['choice_text' => 'Faciliter la cotation des titres sur un marché organisé', 'is_correct' => false],
                            ['choice_text' => 'Conduire la politique monétaire et surveiller l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Collecter des dépôts pour financer des crédits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une banque centrale ?',
                        'explanation' => 'Une banque centrale intervient notamment dans la politique monétaire et la stabilité financière.',
                        'choices' => [
                            ['choice_text' => 'Un organisme qui couvre les risques des assurés en échange de primes', 'is_correct' => false],
                            ['choice_text' => 'Un établissement qui collecte les dépôts des particuliers pour accorder des prêts', 'is_correct' => false],
                            ['choice_text' => 'Un marché organisé sur lequel s’échangent des actions et obligations', 'is_correct' => false],
                            ['choice_text' => 'Une institution responsable notamment de la politique monétaire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une bourse de valeurs ?',
                        'explanation' => 'Une bourse permet la négociation organisée de titres financiers.',
                        'choices' => [
                            ['choice_text' => 'Permettre la négociation organisée de titres financiers', 'is_correct' => true],
                            ['choice_text' => 'Couvrir les investisseurs contre les pertes en échange de primes', 'is_correct' => false],
                            ['choice_text' => 'Collecter les dépôts et accorder des prêts aux particuliers', 'is_correct' => false],
                            ['choice_text' => 'Fixer les taux directeurs et émettre la monnaie nationale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intermédiaires financiers sont-ils importants ?',
                        'explanation' => 'Ils facilitent la circulation de l’épargne vers les besoins de financement et offrent divers services.',
                        'choices' => [
                            ['choice_text' => 'Ils contrôlent la politique monétaire et le niveau des taux directeurs', 'is_correct' => false],
                            ['choice_text' => 'Ils facilitent la rencontre entre épargne et besoins de financement', 'is_correct' => true],
                            ['choice_text' => 'Ils fixent les cours des titres échangés sur les marchés financiers', 'is_correct' => false],
                            ['choice_text' => 'Ils produisent des biens et des services destinés aux ménages', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque prête-t-elle généralement à un taux supérieur à celui qu’elle verse sur certains dépôts ?',
                        'explanation' => 'La différence entre les taux contribue notamment à couvrir les coûts, risques et charges de l’intermédiation.',
                        'choices' => [
                            ['choice_text' => 'La différence est fixée par la banque centrale et imposée à chaque établissement', 'is_correct' => false],
                            ['choice_text' => 'La différence correspond à l’impôt que la banque verse à l’État sur les dépôts', 'is_correct' => false],
                            ['choice_text' => 'La différence contribue notamment à couvrir coûts et risques d’intermédiation', 'is_correct' => true],
                            ['choice_text' => 'La différence est reversée aux déposants sous forme de primes d’assurance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les compagnies d’assurance utilisent-elles des primes ?',
                        'explanation' => 'Les primes financent la couverture des risques transférés à l’assureur.',
                        'choices' => [
                            ['choice_text' => 'Elles servent à rémunérer les épargnants qui déposent leur argent à la banque', 'is_correct' => false],
                            ['choice_text' => 'Elles représentent un impôt perçu par l’État sur les contrats d’assurance', 'is_correct' => false],
                            ['choice_text' => 'Elles servent notamment à financer la couverture des risques assurés', 'is_correct' => true],
                            ['choice_text' => 'Elles correspondent aux dividendes versés aux assurés chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un intermédiaire financier ?',
                        'explanation' => 'C’est une institution qui facilite la circulation des capitaux entre épargnants et emprunteurs.',
                        'choices' => [
                            ['choice_text' => 'Un ménage qui épargne une partie de son revenu chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Une institution facilitant la circulation des capitaux entre agents', 'is_correct' => true],
                            ['choice_text' => 'Une administration qui prélève les impôts et redistribue les ressources', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise qui produit des biens et des services pour ses clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les marchés de capitaux peuvent-ils être utiles aux entreprises ?',
                        'explanation' => 'Ils offrent des possibilités de financement par émission de titres.',
                        'choices' => [
                            ['choice_text' => 'Ils fournissent une assurance contre la faillite aux entreprises cotées', 'is_correct' => false],
                            ['choice_text' => 'Ils offrent des possibilités de financement par émission de titres', 'is_correct' => true],
                            ['choice_text' => 'Ils permettent de déposer l’argent de l’entreprise sur un compte sécurisé', 'is_correct' => false],
                            ['choice_text' => 'Ils servent à comptabiliser les opérations d’achat et de vente de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité financière est-elle importante ?',
                        'explanation' => 'Une bonne stabilité financière facilite le fonctionnement des paiements, du crédit et de l’investissement.',
                        'choices' => [
                            ['choice_text' => 'Elle assure aux entreprises un niveau de bénéfices stable d’une année à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Elle sert à maintenir un niveau élevé de profits dans le secteur bancaire', 'is_correct' => false],
                            ['choice_text' => 'Elle favorise le bon fonctionnement du crédit, des paiements et de l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Elle permet à l’État de fixer le prix des actions cotées sur les marchés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Ratios financiers de base',
                'description' => 'Fondamentaux financiers — Ratios financiers de base',
                'questions' => [
                    [
                        'question' => 'Que mesure généralement un ratio de liquidité ?',
                        'explanation' => 'Il permet d’évaluer la capacité à faire face aux obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'La capacité à faire face aux obligations à court terme', 'is_correct' => true],
                            ['choice_text' => 'La capacité à dégager un bénéfice à partir des ventes', 'is_correct' => false],
                            ['choice_text' => 'La rapidité avec laquelle les stocks sont renouvelés', 'is_correct' => false],
                            ['choice_text' => 'La capacité à rembourser les dettes à long terme grâce aux bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement un ratio de rentabilité ?',
                        'explanation' => 'Il évalue la capacité à générer un bénéfice par rapport à une base financière.',
                        'choices' => [
                            ['choice_text' => 'La capacité à rembourser ses dettes à court terme avec ses actifs courants', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de recours aux emprunts par rapport aux fonds propres', 'is_correct' => false],
                            ['choice_text' => 'La rapidité avec laquelle les créances clients sont encaissées', 'is_correct' => false],
                            ['choice_text' => 'La capacité à générer un bénéfice par rapport à une base donnée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que mesure un ratio d’endettement ?',
                        'explanation' => 'Il aide à évaluer le recours de l’entreprise à l’endettement.',
                        'choices' => [
                            ['choice_text' => 'Le niveau de recours à la dette', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de ventes quotidiennes', 'is_correct' => false],
                            ['choice_text' => 'La productivité des employés', 'is_correct' => false],
                            ['choice_text' => 'La taille du stock', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des ratios financiers ?',
                        'explanation' => 'Ils rendent plus faciles certaines comparaisons entre périodes ou entreprises.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir avec précision le bénéfice et la trésorerie de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’avoir à consulter le bilan et le compte de résultat de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le prix auquel les actions de l’entreprise doivent être vendues', 'is_correct' => false],
                            ['choice_text' => 'Pour comparer plus facilement des relations entre différentes données financières', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un ratio avec les années précédentes ?',
                        'explanation' => 'La comparaison temporelle permet d’identifier une amélioration ou une dégradation.',
                        'choices' => [
                            ['choice_text' => 'Pour observer son évolution dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une amélioration future', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse qualitative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les ratios avec ceux d’entreprises comparables ?',
                        'explanation' => 'Les références sectorielles fournissent du contexte pour interpréter les résultats.',
                        'choices' => [
                            ['choice_text' => 'Pour disposer d’une référence pertinente au sein du même environnement économique', 'is_correct' => true],
                            ['choice_text' => 'Pour vérifier que l’entreprise respecte les règles comptables imposées par l’État', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le prix de vente à appliquer aux produits de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la valeur exacte de l’entreprise sur le marché boursier à ce jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio élevé n’est-il pas automatiquement positif ?',
                        'explanation' => 'La signification d’un ratio dépend du contexte et du type de ratio.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un ratio élevé provient en général d’une erreur de calcul dans les comptes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ratio élevé traduit en pratique une dette plus importante', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ratios élevés ne sont calculés que pour les entreprises cotées', 'is_correct' => false],
                            ['choice_text' => 'Parce que son interprétation dépend du contexte et de la structure de l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle avoir une bonne liquidité mais une faible rentabilité ?',
                        'explanation' => 'Elle peut disposer de suffisamment de ressources à court terme tout en générant peu de bénéfices.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité se mesure d’après la trésorerie détenue en fin de période', 'is_correct' => false],
                            ['choice_text' => 'La liquidité mesure la capacité à dégager du bénéfice sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Une forte liquidité implique un niveau élevé de dettes à long terme', 'is_correct' => false],
                            ['choice_text' => 'Liquidité et rentabilité mesurent des dimensions financières différentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ratios doivent-ils être calculés à partir de données fiables ?',
                        'explanation' => 'Des données incorrectes produisent des ratios trompeurs.',
                        'choices' => [
                            ['choice_text' => 'Les erreurs d’une année se compensent en comparant plusieurs exercices', 'is_correct' => false],
                            ['choice_text' => 'Seules les entreprises cotées sont tenues de produire des données fiables', 'is_correct' => false],
                            ['choice_text' => 'Des données incorrectes conduisent à des indicateurs trompeurs', 'is_correct' => true],
                            ['choice_text' => 'Les ratios intègrent un contrôle qui corrige les écarts de saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser plusieurs ratios ensemble ?',
                        'explanation' => 'Chaque ratio donne une information partielle et leur combinaison fournit une vision plus complète.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque ratio se calcule à partir des mêmes chiffres et donne donc la même information', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réglementation impose de publier un ensemble minimal de ratios', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul ratio ne suffit généralement pas pour comprendre la situation financière', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ratios doivent être additionnés pour obtenir une note globale', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Budgets et finances personnelles',
                'description' => 'Fondamentaux financiers — Budgets et finances personnelles',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un budget personnel ?',
                        'explanation' => 'Un budget organise les revenus prévus et les dépenses prévues sur une période.',
                        'choices' => [
                            ['choice_text' => 'Un relevé des opérations passées enregistrées par la banque', 'is_correct' => false],
                            ['choice_text' => 'Un plan des revenus et dépenses sur une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Une liste des placements détenus avec leur valeur de marché', 'is_correct' => false],
                            ['choice_text' => 'Un contrat qui fixe les conditions de remboursement d’un crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi constituer une épargne de précaution ?',
                        'explanation' => 'Elle permet de faire face à des dépenses imprévues.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le montant des impôts à payer', 'is_correct' => false],
                            ['choice_text' => 'Pour faire face à des dépenses imprévues', 'is_correct' => true],
                            ['choice_text' => 'Pour financer des placements à rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Pour acheter des actions quand les cours baissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le budget est-il utile ?',
                        'explanation' => 'Il permet de mieux contrôler les flux financiers et de préparer des objectifs.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux contrôler les revenus, les dépenses et les objectifs', 'is_correct' => true],
                            ['choice_text' => 'Pour obtenir un meilleur taux de rendement sur ses placements', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de payer des intérêts sur un emprunt déjà contracté', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le montant du revenu perçu auprès de son employeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un endettement ?',
                        'explanation' => 'L’endettement correspond aux montants ou obligations financières dus à d’autres parties.',
                        'choices' => [
                            ['choice_text' => 'Le total des sommes épargnées pour faire face aux dépenses imprévues', 'is_correct' => false],
                            ['choice_text' => 'Le fait de détenir des créances financières sur d’autres personnes ou entreprises', 'is_correct' => false],
                            ['choice_text' => 'Le fait de devoir des montants ou obligations financières à d’autres parties', 'is_correct' => true],
                            ['choice_text' => 'Le montant des intérêts perçus sur l’argent placé auprès d’une banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette à taux élevé peut-elle être dangereuse ?',
                        'explanation' => 'Les intérêts augmentent le coût total du financement et peuvent alourdir les remboursements.',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter fortement le coût total du remboursement', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue la valeur des intérêts versés au fil du temps', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit le capital emprunté dès la signature du contrat', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme la dette en capital détenu par la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi épargner régulièrement ?',
                        'explanation' => 'Une épargne régulière permet de préparer des objectifs et des imprévus.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir un rendement élevé sans prendre de risque sur ses placements', 'is_correct' => false],
                            ['choice_text' => 'Pour préparer des projets futurs et renforcer sa sécurité financière', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le montant de ses revenus imposables au fil du temps', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’avoir à établir un budget pendant toute l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer besoins et envies dans un budget ?',
                        'explanation' => 'Cette distinction aide à prioriser les dépenses lorsque les ressources sont limitées.',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter le revenu disponible en réduisant les impôts payés', 'is_correct' => false],
                            ['choice_text' => 'Pour séparer les dépenses personnelles des dépenses d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant de l’épargne à placer en bourse chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Pour mieux prioriser les dépenses lorsque les ressources sont limitées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer le coût total de deux crédits ?',
                        'explanation' => 'Le taux seul peut être insuffisant si les frais, la durée et les modalités diffèrent.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer réellement le coût du financement et pas seulement le taux affiché', 'is_correct' => true],
                            ['choice_text' => 'Pour choisir le crédit dont la mensualité est la plus faible quelle que soit sa durée', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que le taux affiché est identique au taux directeur de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la part d’impôt incluse dans chaque mensualité du crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une épargne de précaution doit-elle rester facilement accessible ?',
                        'explanation' => 'Elle doit pouvoir être utilisée rapidement lorsque survient un besoin imprévu.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle sert à financer des placements en actions dès qu’une opportunité apparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit rester disponible afin de maximiser les intérêts perçus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit être placée sur des actifs à long terme pour rapporter davantage', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle est destinée à couvrir des besoins imprévus rapidement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon principe général pour gérer ses finances personnelles ?',
                        'explanation' => 'Une bonne gestion combine suivi, épargne, maîtrise de la dette et adaptation aux objectifs.',
                        'choices' => [
                            ['choice_text' => 'Suivre les marchés, emprunter à taux variable et placer toute l’épargne en actions', 'is_correct' => false],
                            ['choice_text' => 'Réduire ses dépenses au minimum et conserver son argent en espèces', 'is_correct' => false],
                            ['choice_text' => 'Suivre ses flux, maîtriser sa dette, épargner et planifier ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Maximiser ses revenus, consommer ses économies et s’endetter pour investir', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Épargne et investissement',
                'description' => 'Fondamentaux financiers — Épargne et investissement',
                'questions' => [
                    [
                        'question' => 'Quelle est la différence générale entre épargne et investissement ?',
                        'explanation' => 'L’épargne vise souvent la sécurité et la disponibilité, tandis que l’investissement cherche davantage de rendement avec un certain niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'L’épargne désigne un placement en actions, tandis que l’investissement désigne un dépôt bancaire à vue', 'is_correct' => false],
                            ['choice_text' => 'L’épargne privilégie souvent la sécurité et la disponibilité, tandis que l’investissement recherche un rendement', 'is_correct' => true],
                            ['choice_text' => 'L’épargne recherche un rendement élevé, tandis que l’investissement privilégie la sécurité et la disponibilité', 'is_correct' => false],
                            ['choice_text' => 'L’épargne est réservée aux particuliers, tandis que l’investissement concerne surtout les entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître son horizon de placement ?',
                        'explanation' => 'L’horizon influence les actifs adaptés et le risque qu’un investisseur peut supporter.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il détermine le montant des impôts à payer chaque année', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il fixe le taux d’intérêt versé par l’émetteur du titre', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il limite le nombre d’actifs que l’investisseur peut détenir', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il influence le niveau de risque et les actifs adaptés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur ne devrait-il pas choisir un actif uniquement en fonction de son rendement passé ?',
                        'explanation' => 'Les performances passées ne garantissent pas les performances futures.',
                        'choices' => [
                            ['choice_text' => 'Parce que les rendements passés sont réservés aux investisseurs professionnels', 'is_correct' => false],
                            ['choice_text' => 'Parce que les performances passées ne garantissent pas les performances futures', 'is_correct' => true],
                            ['choice_text' => 'Parce que le rendement passé ne s’applique qu’aux actions et pas aux obligations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les rendements passés sont calculés avec des méthodes différentes selon les actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répartir un investissement sur plusieurs actifs ?',
                        'explanation' => 'La répartition peut réduire le risque lié à un actif ou à une entreprise particulière.',
                        'choices' => [
                            ['choice_text' => 'Pour se dispenser de suivre les marchés', 'is_correct' => false],
                            ['choice_text' => 'Pour accroître le rendement de chaque actif', 'is_correct' => false],
                            ['choice_text' => 'Pour diminuer les frais de gestion payés', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire la concentration du risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les liquidités sont-elles utiles dans une stratégie financière ?',
                        'explanation' => 'Elles permettent de répondre rapidement à certains besoins et opportunités.',
                        'choices' => [
                            ['choice_text' => 'Elles protègent le pouvoir d’achat contre la hausse générale des prix', 'is_correct' => false],
                            ['choice_text' => 'Elles permettent de répondre rapidement à certains besoins ou opportunités', 'is_correct' => true],
                            ['choice_text' => 'Elles dispensent de constituer une épargne de précaution pour les imprévus', 'is_correct' => false],
                            ['choice_text' => 'Elles assurent un rendement supérieur à celui des actions sur le long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle importante pour l’épargne ?',
                        'explanation' => 'Une inflation élevée peut réduire le pouvoir d’achat réel de l’épargne.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire le pouvoir d’achat réel de l’argent épargné', 'is_correct' => true],
                            ['choice_text' => 'Elle modifie le capital nominal inscrit sur le compte de l’épargnant', 'is_correct' => false],
                            ['choice_text' => 'Elle protège la valeur de l’épargne lorsque celle-ci est placée en liquidités', 'is_correct' => false],
                            ['choice_text' => 'Elle fait baisser le prix des biens et services achetés avec l’épargne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement réel ?',
                        'explanation' => 'Le rendement réel tient compte du rendement nominal et de l’effet de l’inflation.',
                        'choices' => [
                            ['choice_text' => 'Un rendement tenant compte de l’effet de l’inflation', 'is_correct' => true],
                            ['choice_text' => 'Un rendement exprimé en valeur nominale sur la durée du placement', 'is_correct' => false],
                            ['choice_text' => 'Un rendement constaté une fois l’actif revendu', 'is_correct' => false],
                            ['choice_text' => 'Un rendement calculé après déduction des impôts et des frais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il comprendre les frais avant d’investir ?',
                        'explanation' => 'Les frais réduisent le rendement net obtenu par l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Parce que les frais augmentent le capital investi', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais sont reversés à l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais réduisent le rendement net', 'is_correct' => true],
                            ['choice_text' => 'Parce que les frais fixent le niveau de risque du placement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investissement doit-il être cohérent avec le profil de l’investisseur ?',
                        'explanation' => 'Les objectifs, la capacité à prendre des risques et les besoins de liquidité diffèrent selon les personnes.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque investisseur doit détenir un type d’actif imposé par la réglementation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais de gestion sont fixés selon le patrimoine de chaque investisseur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement d’un actif varie selon l’âge de la personne qui le détient', 'is_correct' => false],
                            ['choice_text' => 'Parce que les objectifs, le risque acceptable et les besoins de liquidité diffèrent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe général d’une stratégie financière équilibrée ?',
                        'explanation' => 'Elle doit concilier objectifs, sécurité, liquidité, rendement et risque.',
                        'choices' => [
                            ['choice_text' => 'Concentrer le capital sur l’actif le plus rentable de la période précédente', 'is_correct' => false],
                            ['choice_text' => 'Équilibrer objectifs, liquidité, rendement et niveau de risque acceptable', 'is_correct' => true],
                            ['choice_text' => 'Conserver l’intégralité du capital en liquidités pour éviter toute variation', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le rendement attendu en acceptant le niveau de risque nécessaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Sources de financement',
                'description' => 'Fondamentaux financiers — Sources de financement',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le financement par capitaux propres ?',
                        'explanation' => 'Il consiste à obtenir des ressources en échange d’une participation dans l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Obtenir des ressources en retardant le paiement des fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Obtenir des ressources en échange d’un remboursement échelonné avec intérêts', 'is_correct' => false],
                            ['choice_text' => 'Obtenir des ressources en échange d’une participation dans l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Obtenir des ressources en vendant une partie des stocks de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un inconvénient du financement par dette ?',
                        'explanation' => 'La dette crée des obligations de remboursement et de paiement d’intérêts.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit la part du capital détenue par les propriétaires actuels', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige l’entreprise à partager ses décisions de gestion', 'is_correct' => false],
                            ['choice_text' => 'Elle impose de distribuer des dividendes chaque année', 'is_correct' => false],
                            ['choice_text' => 'Elle crée des obligations de remboursement et d’intérêts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage possible du financement par capitaux propres ?',
                        'explanation' => 'Il n’impose généralement pas les mêmes remboursements fixes qu’une dette.',
                        'choices' => [
                            ['choice_text' => 'Il permet de déduire les intérêts versés du résultat imposable', 'is_correct' => false],
                            ['choice_text' => 'Il n’impose généralement pas de remboursement fixe du principal', 'is_correct' => true],
                            ['choice_text' => 'Il évite de partager le contrôle avec de nouveaux investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Il donne un droit de remboursement à date fixe aux investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise combine-t-elle parfois dette et capitaux propres ?',
                        'explanation' => 'Une combinaison peut permettre d’équilibrer coût du financement, risque et dilution.',
                        'choices' => [
                            ['choice_text' => 'Pour répartir le remboursement de la dette entre les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour équilibrer coût du financement, risque et structure de propriété', 'is_correct' => true],
                            ['choice_text' => 'Pour obéir à une règle imposant une part égale de chaque source', 'is_correct' => false],
                            ['choice_text' => 'Pour que les intérêts versés soient égaux aux dividendes distribués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la dilution ?',
                        'explanation' => 'La dilution correspond généralement à la réduction de la part relative des actionnaires existants lorsqu’un nouveau capital est émis.',
                        'choices' => [
                            ['choice_text' => 'La diminution du capital de l’entreprise après un rachat de ses propres actions', 'is_correct' => false],
                            ['choice_text' => 'La réduction de la valeur nominale des dettes de l’entreprise après un remboursement partiel', 'is_correct' => false],
                            ['choice_text' => 'La baisse du cours de l’action provoquée par une diminution des ventes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'La réduction de la part relative des actionnaires existants après une nouvelle émission d’actions', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs sources de financement ?',
                        'explanation' => 'Chaque solution possède ses propres coûts, contraintes et risques.',
                        'choices' => [
                            ['choice_text' => 'Parce que les prêteurs refusent de financer une entreprise qui n’a pas comparé les offres', 'is_correct' => false],
                            ['choice_text' => 'Parce que le choix de la source est imposé par la taille de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût d’un financement dépend avant tout du montant obtenu, quelle que soit la source', 'is_correct' => false],
                            ['choice_text' => 'Parce que les différentes sources ont des coûts, contraintes et risques différents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité de remboursement est-elle importante avant de contracter une dette ?',
                        'explanation' => 'L’entreprise doit pouvoir honorer les paiements futurs.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer à l’avance le taux d’intérêt que la banque devra appliquer', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les flux futurs peuvent supporter les remboursements', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le montant des intérêts versés pendant la durée du prêt', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la part du capital qui sera détenue par le prêteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette à court terme peut-elle augmenter le risque de refinancement ?',
                        'explanation' => 'Elle doit être remboursée ou refinancée plus rapidement.',
                        'choices' => [
                            ['choice_text' => 'Elle entraîne une hausse de la valeur des actions émises', 'is_correct' => false],
                            ['choice_text' => 'Elle exige un renouvellement ou remboursement plus rapide', 'is_correct' => true],
                            ['choice_text' => 'Elle bloque la trésorerie de l’entreprise pour une durée plus longue', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente la part des capitaux propres dans le bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’un financement ne se limite-t-il pas toujours au taux d’intérêt ?',
                        'explanation' => 'Il peut aussi y avoir des frais, commissions, garanties et autres conditions.',
                        'choices' => [
                            ['choice_text' => 'Le coût total correspond au montant emprunté diminué des intérêts versés', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt couvre déjà le coût complet, mais il varie selon la durée', 'is_correct' => false],
                            ['choice_text' => 'Le coût dépend aussi du rendement des actions de la banque qui prête', 'is_correct' => false],
                            ['choice_text' => 'D’autres frais, commissions et conditions peuvent augmenter le coût total', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision de financement ?',
                        'explanation' => 'Le choix doit tenir compte du coût, du risque, des besoins de financement et de la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Choisir la source dont le taux d’intérêt affiché est le plus faible, sans autre critère', 'is_correct' => false],
                            ['choice_text' => 'Choisir une structure cohérente avec les besoins, le coût, le risque et la stratégie', 'is_correct' => true],
                            ['choice_text' => 'Choisir la source qui permet de lever le montant le plus élevé possible', 'is_correct' => false],
                            ['choice_text' => 'Choisir la structure la plus utilisée par les entreprises du même secteur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — États financiers essentiels',
                'description' => 'Fondamentaux financiers — États financiers essentiels',
                'questions' => [
                    [
                        'question' => 'Que présente principalement le compte de résultat ?',
                        'explanation' => 'Il présente les produits, charges et résultat d’une période.',
                        'choices' => [
                            ['choice_text' => 'Les produits, les charges et le résultat sur une période', 'is_correct' => true],
                            ['choice_text' => 'Les encaissements et décaissements de trésorerie de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Les apports en capital et les dividendes versés aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Les actifs, les passifs et les capitaux propres à une date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que présente principalement le bilan ?',
                        'explanation' => 'Le bilan montre les actifs, passifs et capitaux propres à une date précise.',
                        'choices' => [
                            ['choice_text' => 'Les actifs, passifs et capitaux propres à une date donnée', 'is_correct' => true],
                            ['choice_text' => 'Les produits, les charges et le résultat d’une période', 'is_correct' => false],
                            ['choice_text' => 'Les prévisions de ventes et de dépenses pour l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Les entrées et sorties de trésorerie classées par activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général du tableau des flux de trésorerie ?',
                        'explanation' => 'Il explique les entrées et sorties de trésorerie pendant une période.',
                        'choices' => [
                            ['choice_text' => 'Présenter les produits et les charges qui forment le résultat', 'is_correct' => false],
                            ['choice_text' => 'Présenter les entrées et sorties de trésorerie sur une période', 'is_correct' => true],
                            ['choice_text' => 'Présenter les prévisions de ventes et de dépenses de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Présenter les ressources et les dettes de l’entreprise à une date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une vente à crédit peut-elle augmenter le chiffre d’affaires sans augmenter immédiatement la trésorerie ?',
                        'explanation' => 'Le client peut payer plus tard, créant une créance plutôt qu’une entrée de trésorerie immédiate.',
                        'choices' => [
                            ['choice_text' => 'Parce que la vente à crédit est financée par un prêt bancaire de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que le client peut payer plus tard et créer une créance', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires n’est comptabilisé qu’au moment de l’encaissement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vente à crédit est enregistrée comme une dette de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les trois états financiers doivent-ils être analysés ensemble ?',
                        'explanation' => 'Ils donnent des perspectives complémentaires sur la performance, la position et les flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation oblige à lire le bilan avant le compte de résultat et les flux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’en cas d’informations manquantes l’un des états peut remplacer entièrement les autres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils donnent des informations complémentaires sur la performance, la situation et la trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque état reprend les mêmes chiffres et ne diffère que par sa présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une créance client ?',
                        'explanation' => 'C’est un montant dû par un client à l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une dette de l’entreprise envers la banque', 'is_correct' => false],
                            ['choice_text' => 'Un montant dû par un client à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                            ['choice_text' => 'Un apport des actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dette fournisseur ?',
                        'explanation' => 'Elle représente une somme due par l’entreprise à un fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Une somme due par un client à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une somme empruntée auprès d’une banque pour un projet', 'is_correct' => false],
                            ['choice_text' => 'Une somme versée aux actionnaires sous forme de dividendes', 'is_correct' => false],
                            ['choice_text' => 'Une somme due par l’entreprise à un fournisseur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dotation aux amortissements ou aux dépréciations ne constitue-t-elle pas, en elle-même, un décaissement ?',
                    'explanation' => 'L’amortissement répartit le montant amortissable d’un actif sur sa durée d’utilisation, tandis qu’une dépréciation constate une perte de valeur. Ces écritures comptables ne correspondent pas, en elles-mêmes, à un paiement.',                        'choices' => [
                            ['choice_text' => 'Parce que l’amortissement représente un encaissement différé provenant des clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’amortissement correspond à un remboursement d’emprunt versé à la banque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il peut s’agir d’une charge comptable sans nouveau paiement immédiat', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’amortissement est enregistré dans le bilan mais pas dans le compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bénéfice ne correspond-il pas toujours à la trésorerie générée ?',
                        'explanation' => 'Les règles comptables, les créances, les dettes et les dépenses d’investissement peuvent créer des écarts.',
                        'choices' => [
                            ['choice_text' => 'Parce que le résultat comptable et les flux de trésorerie suivent des logiques différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie comprend les charges calculées que le bénéfice ignore', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice est audité alors que la trésorerie est estimée par la banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice est établi en fonction des encaissements de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document permet principalement de voir la structure financière à une date précise ?',
                        'explanation' => 'Le bilan présente les actifs, passifs et capitaux propres à une date donnée.',
                        'choices' => [
                            ['choice_text' => 'Le budget prévisionnel annuel', 'is_correct' => false],
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Le bilan', 'is_correct' => true],
                            ['choice_text' => 'Le tableau des flux de trésorerie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fondamentaux financiers — Cas pratiques financiers',
                'description' => 'Fondamentaux financiers — Cas pratiques financiers',
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente ses ventes mais ses clients paient de plus en plus tard. Quel problème peut apparaître ?',
                        'explanation' => 'Des encaissements plus lents peuvent créer une tension de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Une diminution du besoin en fonds de roulement et de la dette fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du montant des créances clients dans le bilan', 'is_correct' => false],
                            ['choice_text' => 'Une pression sur la trésorerie et le besoin en fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du bénéfice comptable proportionnelle aux retards', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur concentre 90 % de son portefeuille dans une seule action. Quel est le principal problème ?',
                        'explanation' => 'Une concentration aussi forte augmente fortement le risque spécifique.',
                        'choices' => [
                            ['choice_text' => 'Des frais de gestion trop élevés liés à la taille du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change trop important sur les marchés étrangers', 'is_correct' => false],
                            ['choice_text' => 'Un risque de taux d’intérêt lié à l’endettement de l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Une forte concentration du risque sur une seule entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de stocks inutilisés. Quel effet financier possible cela peut-il avoir ?',
                        'explanation' => 'Les stocks immobilisent des ressources qui pourraient être utilisées ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Une partie de la trésorerie peut être immobilisée dans les stocks', 'is_correct' => true],
                            ['choice_text' => 'Les stocks inutilisés génèrent des intérêts qui améliorent la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Les stocks inutilisés réduisent le montant des dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Les stocks inutilisés se transforment en créances clients à l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne reçoit une prime exceptionnelle. Quelle décision financière est généralement raisonnable avant toute dépense importante ?',
                        'explanation' => 'Il est utile d’évaluer les objectifs, les dettes, l’épargne et les besoins futurs.',
                        'choices' => [
                            ['choice_text' => 'Utiliser la prime comme apport pour un crédit plus important que prévu', 'is_correct' => false],
                            ['choice_text' => 'Utiliser la prime pour relever durablement son niveau de dépenses courantes', 'is_correct' => false],
                            ['choice_text' => 'Placer la somme sur l’actif qui a obtenu le meilleur rendement l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Évaluer ses objectifs, ses dettes, son épargne et ses besoins avant de décider', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise des bénéfices mais n’a presque aucune trésorerie disponible. Quelle analyse est prioritaire ?',
                        'explanation' => 'Il faut examiner les flux de trésorerie, les créances, les stocks et les dettes.',
                        'choices' => [
                            ['choice_text' => 'Comparer le bénéfice de l’entreprise avec celui de ses concurrents directs', 'is_correct' => false],
                            ['choice_text' => 'Analyser le niveau de la marge bénéficiaire sur les produits vendus', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que les dividendes versés correspondent au bénéfice déclaré', 'is_correct' => false],
                            ['choice_text' => 'Analyser les flux de trésorerie et le besoin en fonds de roulement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une personne choisit un placement sans vérifier sa possibilité de retrait rapide alors qu’elle aura besoin de l’argent dans trois mois. Quel risque est sous-estimé ?',
                        'explanation' => 'Le risque de liquidité est important lorsque l’argent doit être disponible rapidement.',
                        'choices' => [
                            ['choice_text' => 'Le risque réglementaire', 'is_correct' => false],
                            ['choice_text' => 'Le risque de dilution', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup d’actifs mais aussi beaucoup de dettes. Que faut-il examiner pour comprendre sa situation ?',
                        'explanation' => 'La nature et le niveau des actifs et passifs doivent être analysés ensemble.',
                        'choices' => [
                            ['choice_text' => 'Le montant des dividendes distribués pendant l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Le niveau du chiffre d’affaires par rapport à celui des concurrents', 'is_correct' => false],
                            ['choice_text' => 'La croissance du nombre de clients sur les dernières années', 'is_correct' => false],
                            ['choice_text' => 'La structure des actifs, des dettes et des capitaux propres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut acheter une nouvelle machine. Quelle question financière de base faut-il poser ?',
                        'explanation' => 'Il faut évaluer le coût, les bénéfices attendus et la capacité de financement.',
                        'choices' => [
                            ['choice_text' => 'Quel montant de dividendes l’entreprise a-t-elle versé aux actionnaires l’an dernier ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le nombre d’actions en circulation et leur cours actuel en bourse ?', 'is_correct' => false],
                            ['choice_text' => 'Quel prix les concurrents pratiquent-ils pour des machines comparables à celle-ci ?', 'is_correct' => false],
                            ['choice_text' => 'Quel coût, quels bénéfices attendus et quel financement sont associés à cet investissement ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des ventes n’implique-t-elle pas automatiquement une hausse identique de la trésorerie ?',
                        'explanation' => 'Les ventes peuvent être réalisées à crédit et les clients peuvent payer plus tard.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie des ventes peut ne pas être encore encaissée', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie dépend du bénéfice net après impôts de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes augmentent les dettes fournisseurs d’un même montant', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes sont enregistrées au bilan et non au compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision financière personnelle importante ?',
                        'explanation' => 'Une décision doit être cohérente avec les objectifs, la capacité financière et le niveau de risque acceptable.',
                        'choices' => [
                            ['choice_text' => 'L’avis des proches sur la décision qui semble la plus sûre du moment', 'is_correct' => false],
                            ['choice_text' => 'La décision la plus rapide à exécuter avec un minimum de démarches', 'is_correct' => false],
                            ['choice_text' => 'Le rendement le plus élevé constaté sur les placements au cours des dernières années', 'is_correct' => false],
                            ['choice_text' => 'La cohérence avec les objectifs, les ressources, les risques et les besoins futurs', 'is_correct' => true],
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
