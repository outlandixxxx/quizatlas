<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MonetaryEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'monetary-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la monnaie',
                'description' => 'Quiz débutant sur Introduction à la monnaie.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la monnaie ?',
                        'choices' => [
                            ['choice_text' => 'Un actif largement accepté pour effectuer des paiements et faciliter les échanges', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des pièces métalliques', 'is_correct' => false],
                            ['choice_text' => 'Un bien consommé immédiatement par tous', 'is_correct' => false],
                            ['choice_text' => 'Une taxe imposée par l’État', 'is_correct' => false],
                        ],
                        'explanation' => 'La monnaie est un actif accepté pour réaliser des paiements et faciliter les échanges entre les agents économiques.',
                    ],
                    [
                        'question' => 'Quelle est une fonction essentielle de la monnaie ?',
                        'choices' => [
                            ['choice_text' => 'Servir de moyen d’échange', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les ressources naturelles', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la croissance économique', 'is_correct' => false],
                            ['choice_text' => 'Fixer tous les prix par la loi', 'is_correct' => false],
                        ],
                        'explanation' => 'La monnaie remplit notamment la fonction de moyen d’échange, ce qui permet de régler les achats sans recourir au troc.',
                    ],
                    [
                        'question' => 'Pourquoi la monnaie facilite-t-elle les échanges par rapport au troc ?',
                        'choices' => [
                            ['choice_text' => 'Elle évite d’avoir à trouver simultanément deux personnes ayant exactement les biens recherchés par l’autre', 'is_correct' => true],
                            ['choice_text' => 'Elle rend tous les biens gratuits', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute rareté', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les besoins de production', 'is_correct' => false],
                        ],
                        'explanation' => 'La monnaie facilite les échanges car elle évite la nécessité de trouver une double coïncidence des besoins comme dans le troc.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une unité de compte ?',
                        'choices' => [
                            ['choice_text' => 'Une mesure commune permettant d’exprimer les prix et les valeurs économiques', 'is_correct' => true],
                            ['choice_text' => 'Une monnaie utilisée uniquement par les banques centrales', 'is_correct' => false],
                            ['choice_text' => 'Une méthode de calcul du chômage', 'is_correct' => false],
                            ['choice_text' => 'Un instrument uniquement réservé au commerce extérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité de compte fournit une mesure commune qui permet d’exprimer les prix et de comparer les valeurs des biens et services.',
                    ],
                    [
                        'question' => 'Que signifie que la monnaie sert de réserve de valeur ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de transférer du pouvoir d’achat dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Elle conserve toujours exactement le même pouvoir d’achat', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais perdre de valeur', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut être détenue que par les banques', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme réserve de valeur, la monnaie permet de conserver du pouvoir d’achat pour une utilisation ultérieure, même si ce pouvoir d’achat peut varier.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le pouvoir d’achat de la monnaie ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de biens et services qu’une unité monétaire permet d’acheter', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de billets imprimés', 'is_correct' => false],
                            ['choice_text' => 'Le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Le niveau des exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pouvoir d’achat mesure la quantité de biens et services qu’une unité monétaire permet d’acheter.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au pouvoir d’achat de la monnaie lorsque le niveau général des prix augmente ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Il reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Il devient toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le niveau général des prix augmente, une même unité monétaire permet généralement d’acheter moins de biens et services, donc son pouvoir d’achat diminue.',
                    ],
                    [
                        'question' => 'Pourquoi la confiance est-elle importante pour une monnaie moderne ?',
                        'choices' => [
                            ['choice_text' => 'Les utilisateurs doivent croire qu’elle sera acceptée et conservera une certaine capacité d’achat', 'is_correct' => true],
                            ['choice_text' => 'Une monnaie n’a aucune valeur si elle est faite de métal', 'is_correct' => false],
                            ['choice_text' => 'La confiance détermine directement la quantité de biens produite', 'is_correct' => false],
                            ['choice_text' => 'La confiance remplace toutes les banques', 'is_correct' => false],
                        ],
                        'explanation' => 'La confiance facilite l’utilisation d’une monnaie, car les utilisateurs doivent s’attendre à ce qu’elle soit acceptée et conserve une certaine valeur.',
                    ],
                    [
                        'question' => 'Quel organisme est généralement responsable de la politique monétaire d’un pays ?',
                        'choices' => [
                            ['choice_text' => 'La banque centrale', 'is_correct' => true],
                            ['choice_text' => 'Le ministère des transports', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises privées uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'La banque centrale conduit généralement la politique monétaire et utilise ses instruments pour influencer les conditions monétaires et financières.',
                    ],
                    [
                        'question' => 'Pourquoi les banques centrales surveillent-elles l’inflation ?',
                        'choices' => [
                            ['choice_text' => 'Une inflation élevée ou instable peut réduire le pouvoir d’achat et créer de l’incertitude économique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles fixent tous les prix des biens', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’inflation augmente toujours le pouvoir d’achat', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’inflation n’a aucun effet économique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les banques centrales surveillent l’inflation car une inflation élevée ou instable peut réduire le pouvoir d’achat et compliquer les décisions économiques.',
                    ],
                ],
            ],

            [
                'title' => 'Banques et création monétaire',
                'description' => 'Quiz débutant sur Banques et création monétaire.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une banque commerciale ?',
                        'choices' => [
                            ['choice_text' => 'Collecter des dépôts, accorder des crédits et fournir des services de paiement', 'is_correct' => true],
                            ['choice_text' => 'Fixer seule le taux d’inflation national', 'is_correct' => false],
                            ['choice_text' => 'Créer toutes les politiques publiques', 'is_correct' => false],
                            ['choice_text' => 'Contrôler directement toutes les entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'Une banque commerciale collecte notamment des dépôts, accorde des crédits et fournit des services de paiement à ses clients.',
                    ],
                    [
                        'question' => 'Pourquoi les dépôts bancaires sont-ils importants dans le système monétaire moderne ?',
                        'choices' => [
                            ['choice_text' => 'Ils constituent une forme de monnaie scripturale largement utilisée pour les paiements', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours conservés sous forme d’or physique', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les banques centrales', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais être utilisés pour payer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépôts bancaires constituent une forme importante de monnaie scripturale et sont largement utilisés pour effectuer des paiements.',
                    ],
                    [
                        'question' => 'Que signifie la création monétaire par le crédit bancaire ?',
                        'choices' => [
                            ['choice_text' => 'Lorsqu’une banque accorde un prêt, elle peut créer simultanément un dépôt au profit de l’emprunteur', 'is_correct' => true],
                            ['choice_text' => 'Une banque transforme toujours directement les billets en or', 'is_correct' => false],
                            ['choice_text' => 'Les prêts réduisent nécessairement tous les dépôts', 'is_correct' => false],
                            ['choice_text' => 'Seule la banque centrale peut créer toute forme de monnaie', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’une banque accorde un crédit, elle peut créer simultanément un dépôt au profit de l’emprunteur, ce qui augmente les dépôts bancaires.',
                    ],
                    [
                        'question' => 'Pourquoi les banques ne peuvent-elles pas créer des dépôts sans limite ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont contraintes par la demande de crédit, la réglementation, la liquidité, le capital et les risques', 'is_correct' => true],
                            ['choice_text' => 'Elles sont obligées de créer exactement le même montant chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Les banques ne peuvent jamais accorder de prêts', 'is_correct' => false],
                            ['choice_text' => 'La création monétaire ne dépend d’aucune contrainte', 'is_correct' => false],
                        ],
                        'explanation' => 'La création de dépôts est limitée par plusieurs contraintes, notamment la demande de crédit, le capital, la liquidité, la réglementation et la gestion des risques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un dépôt bancaire à vue ?',
                        'choices' => [
                            ['choice_text' => 'Un dépôt pouvant généralement être utilisé ou retiré à la demande selon les conditions du compte', 'is_correct' => true],
                            ['choice_text' => 'Un prêt accordé à la banque', 'is_correct' => false],
                            ['choice_text' => 'Une obligation publique à long terme', 'is_correct' => false],
                            ['choice_text' => 'Une réserve d’or uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dépôt à vue peut généralement être utilisé pour effectuer des paiements ou retiré à la demande, selon les conditions du compte.',
                    ],
                    [
                        'question' => 'Pourquoi les banques conservent-elles des liquidités ?',
                        'choices' => [
                            ['choice_text' => 'Pour répondre aux retraits, paiements et autres besoins de liquidité de leurs clients', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute opération bancaire', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les prêts ne soient jamais remboursés', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le risque de crédit', 'is_correct' => false],
                        ],
                        'explanation' => 'Les banques ont besoin de liquidités pour répondre aux retraits, effectuer les paiements et faire face à leurs besoins de financement à court terme.',
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’une banque accorde un prêt à un emprunteur qui peut ne pas rembourser ?',
                        'choices' => [
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le risque météorologique', 'is_correct' => false],
                            ['choice_text' => 'Le risque démographique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change exclusivement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque de crédit correspond au risque que l’emprunteur ne rembourse pas entièrement ou à temps son prêt.',
                    ],
                    [
                        'question' => 'Pourquoi les banques doivent-elles disposer de fonds propres ?',
                        'choices' => [
                            ['choice_text' => 'Les fonds propres absorbent une partie des pertes et renforcent la solidité financière de la banque', 'is_correct' => true],
                            ['choice_text' => 'Ils servent uniquement à payer les salaires', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute perte future', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent tous les dépôts', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fonds propres servent de protection contre les pertes et renforcent la capacité d’une banque à absorber des chocs financiers.',
                    ],
                    [
                        'question' => 'Quel rôle les banques jouent-elles dans l’intermédiation financière ?',
                        'choices' => [
                            ['choice_text' => 'Elles mettent en relation des agents ayant des ressources financières avec des agents recherchant des financements', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent les investissements', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment tous les risques financiers', 'is_correct' => false],
                            ['choice_text' => 'Elles déterminent seules les préférences des ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intermédiation financière consiste notamment à canaliser des ressources vers les agents qui recherchent un financement.',
                    ],
                    [
                        'question' => 'Pourquoi une crise bancaire peut-elle avoir des effets sur l’économie réelle ?',
                        'choices' => [
                            ['choice_text' => 'Une baisse de l’offre de crédit peut réduire la consommation, l’investissement et l’activité économique', 'is_correct' => true],
                            ['choice_text' => 'Les banques n’ont aucun lien avec les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Le crédit n’affecte jamais l’investissement', 'is_correct' => false],
                            ['choice_text' => 'Une crise bancaire augmente toujours automatiquement le PIB', 'is_correct' => false],
                        ],
                        'explanation' => 'Une crise bancaire peut réduire l’offre de crédit et perturber les paiements, ce qui peut freiner la consommation, l’investissement et l’activité économique.',
                    ],
                ],
            ],

            [
                'title' => 'Inflation et niveau général des prix',
                'description' => 'Quiz débutant sur Inflation et niveau général des prix.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’inflation ?',
                        'choices' => [
                            ['choice_text' => 'Une hausse persistante du niveau général des prix des biens et services', 'is_correct' => true],
                            ['choice_text' => 'Une baisse permanente de tous les prix', 'is_correct' => false],
                            ['choice_text' => 'Une hausse d’un seul prix', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique du PIB réel', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inflation désigne une hausse généralisée et persistante du niveau des prix des biens et services.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse isolée du prix du pétrole n’est-elle pas nécessairement synonyme d’inflation générale ?',
                        'choices' => [
                            ['choice_text' => 'L’inflation concerne l’évolution générale et persistante des prix, pas uniquement un prix particulier', 'is_correct' => true],
                            ['choice_text' => 'Toute hausse de prix est toujours de l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Le pétrole ne fait jamais partie des prix', 'is_correct' => false],
                            ['choice_text' => 'L’inflation ne peut jamais être mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse du prix d’un seul bien ne suffit pas à définir une inflation générale, qui concerne l’évolution d’un ensemble de prix dans la durée.',
                    ],
                    [
                        'question' => 'Quel est un effet direct d’une inflation élevée sur les encaisses monétaires ?',
                        'choices' => [
                            ['choice_text' => 'La valeur réelle des encaisses diminue', 'is_correct' => true],
                            ['choice_text' => 'La valeur réelle augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Les encaisses deviennent automatiquement plus productives', 'is_correct' => false],
                            ['choice_text' => 'L’inflation n’a aucun effet sur le pouvoir d’achat', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inflation élevée réduit la valeur réelle des encaisses monétaires, car une même somme permet d’acheter moins de biens et services.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la déflation ?',
                        'choices' => [
                            ['choice_text' => 'Une baisse persistante du niveau général des prix', 'is_correct' => true],
                            ['choice_text' => 'Une inflation très élevée', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du niveau général des prix', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique des salaires nominaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La déflation correspond à une baisse persistante du niveau général des prix.',
                    ],
                    [
                        'question' => 'Pourquoi l’inflation crée-t-elle de l’incertitude ?',
                        'choices' => [
                            ['choice_text' => 'Elle rend plus difficile la prévision des prix, des revenus réels et des coûts futurs', 'is_correct' => true],
                            ['choice_text' => 'Elle rend tous les prix parfaitement prévisibles', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine tous les contrats', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit que les salaires augmentent toujours plus vite que les prix', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inflation élevée ou imprévisible rend plus difficile la prévision des coûts, des revenus réels et du pouvoir d’achat futurs.',
                    ],
                    [
                        'question' => 'Pourquoi une inflation inattendue peut-elle redistribuer les revenus entre créanciers et débiteurs ?',
                        'choices' => [
                            ['choice_text' => 'Elle modifie la valeur réelle des paiements fixés en termes nominaux', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours les revenus réels des créanciers', 'is_correct' => false],
                            ['choice_text' => 'Elle ne change jamais la valeur réelle d’une dette', 'is_correct' => false],
                            ['choice_text' => 'Elle annule toujours les contrats de dette', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inflation inattendue modifie la valeur réelle des paiements nominaux et peut donc avantager ou désavantager créanciers et débiteurs.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux d’inflation ?',
                        'choices' => [
                            ['choice_text' => 'Le taux de variation du niveau général des prix sur une période donnée', 'is_correct' => true],
                            ['choice_text' => 'Le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance de la population', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt réel uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux d’inflation mesure la variation en pourcentage du niveau général des prix entre deux périodes.',
                    ],
                    [
                        'question' => 'Pourquoi les banques centrales cherchent-elles souvent à maintenir une inflation faible et stable ?',
                        'choices' => [
                            ['choice_text' => 'La stabilité des prix facilite la planification économique et réduit certaines distorsions liées à une inflation élevée ou instable', 'is_correct' => true],
                            ['choice_text' => 'Une inflation instable améliore toujours la croissance', 'is_correct' => false],
                            ['choice_text' => 'La stabilité des prix empêche toute activité économique', 'is_correct' => false],
                            ['choice_text' => 'Une inflation forte est toujours nécessaire au plein emploi', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inflation faible et stable facilite les décisions économiques en réduisant certaines incertitudes et perturbations liées aux variations des prix.',
                    ],
                    [
                        'question' => 'Quel indice est souvent utilisé pour mesurer l’évolution des prix payés par les ménages ?',
                        'choices' => [
                            ['choice_text' => 'L’indice des prix à la consommation', 'is_correct' => true],
                            ['choice_text' => 'Le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Le PIB réel uniquement', 'is_correct' => false],
                            ['choice_text' => 'La balance commerciale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’indice des prix à la consommation suit l’évolution moyenne des prix d’un panier de biens et services consommés par les ménages.',
                    ],
                    [
                        'question' => 'Pourquoi une inflation faible n’implique-t-elle pas nécessairement que tous les prix diminuent ?',
                        'choices' => [
                            ['choice_text' => 'Elle signifie que le niveau général des prix augmente lentement, pas que chaque prix individuel baisse', 'is_correct' => true],
                            ['choice_text' => 'Une inflation faible signifie toujours une déflation', 'is_correct' => false],
                            ['choice_text' => 'Tous les prix doivent évoluer exactement ensemble', 'is_correct' => false],
                            ['choice_text' => 'Une inflation faible signifie que les prix sont constants', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inflation faible signifie que le niveau général des prix augmente lentement ; cela ne signifie pas que chaque prix individuel baisse.',
                    ],
                ],
            ],

            [
                'title' => 'Taux d’intérêt et valeur de la monnaie',
                'description' => 'Quiz débutant sur Taux d’intérêt et valeur de la monnaie.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un taux d’intérêt nominal ?',
                        'choices' => [
                            ['choice_text' => 'Le taux exprimé en termes monétaires sans correction directe de l’inflation', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’inflation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le taux de chômage', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change réel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux nominal est le taux d’intérêt exprimé en termes monétaires, sans ajustement direct pour l’évolution des prix.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux d’intérêt réel ?',
                        'choices' => [
                            ['choice_text' => 'Le rendement d’un placement ou coût d’un emprunt après prise en compte de l’inflation', 'is_correct' => true],
                            ['choice_text' => 'Le taux nominal sans aucune référence aux prix', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance du PIB', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change nominal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux réel tient compte de l’inflation et donne une indication plus proche du coût ou du rendement en termes de pouvoir d’achat.',
                    ],
                    [
                        'question' => 'Si le taux nominal est de 6 % et l’inflation de 2 %, quel est approximativement le taux réel selon l’approximation simple ?',
                        'choices' => [
                            ['choice_text' => '4 %', 'is_correct' => true],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => false],
                            ['choice_text' => '12 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l’approximation simple, le taux réel est d’environ 6 % − 2 % = 4 %.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d’intérêt peut-elle réduire la demande de crédit ?',
                        'choices' => [
                            ['choice_text' => 'Le coût d’emprunt augmente, ce qui peut décourager certains ménages et entreprises', 'is_correct' => true],
                            ['choice_text' => 'Le crédit devient automatiquement gratuit', 'is_correct' => false],
                            ['choice_text' => 'Les taux d’intérêt n’ont aucun lien avec le coût du crédit', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des taux supprime toutes les banques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse des taux augmente généralement le coût d’emprunt, ce qui peut décourager certains ménages et entreprises de demander un crédit.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux peut-elle affecter l’investissement des entreprises ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut augmenter le coût du financement et rendre certains projets moins rentables', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toujours tous les projets plus rentables', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises ne dépendent jamais du financement', 'is_correct' => false],
                            ['choice_text' => 'Les taux d’intérêt n’influencent jamais les décisions d’investissement', 'is_correct' => false],
                        ],
                        'explanation' => 'Des taux plus élevés augmentent le coût du financement et peuvent rendre certains projets d’investissement moins rentables.',
                    ],
                    [
                        'question' => 'Pourquoi le taux réel est-il important pour une décision économique ?',
                        'choices' => [
                            ['choice_text' => 'Il indique mieux le coût ou rendement en termes de pouvoir d’achat', 'is_correct' => true],
                            ['choice_text' => 'Il mesure directement le PIB', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toujours le taux nominal', 'is_correct' => false],
                            ['choice_text' => 'Il ne dépend jamais de l’inflation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux réel permet de mieux apprécier le coût d’un emprunt ou le rendement d’un placement après prise en compte de l’évolution des prix.',
                    ],
                    [
                        'question' => 'Que peut faire une banque centrale avec son taux directeur ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut influencer les conditions de financement dans l’économie', 'is_correct' => true],
                            ['choice_text' => 'Elle fixe directement tous les prix des biens', 'is_correct' => false],
                            ['choice_text' => 'Elle contrôle directement chaque salaire', 'is_correct' => false],
                            ['choice_text' => 'Elle décide seule des exportations privées', 'is_correct' => false],
                        ],
                        'explanation' => 'En modifiant son taux directeur, une banque centrale peut influencer les conditions de financement et les autres taux d’intérêt de l’économie.',
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle stimuler certains emprunts ?',
                        'choices' => [
                            ['choice_text' => 'Le coût du financement diminue généralement, ce qui peut augmenter la demande de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le crédit devient nécessairement inaccessible', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des taux augmente toujours les coûts d’emprunt', 'is_correct' => false],
                            ['choice_text' => 'Les banques cessent automatiquement de prêter', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baisse des taux réduit généralement le coût du financement, ce qui peut encourager certains ménages et entreprises à emprunter.',
                    ],
                    [
                        'question' => 'Pourquoi les taux d’intérêt influencent-ils l’épargne ?',
                        'choices' => [
                            ['choice_text' => 'Le rendement offert sur certains actifs peut modifier l’incitation à reporter une partie de la consommation', 'is_correct' => true],
                            ['choice_text' => 'Les taux n’ont aucun lien avec le rendement de l’épargne', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des taux rend toujours l’épargne impossible', 'is_correct' => false],
                            ['choice_text' => 'L’épargne dépend uniquement des impôts', 'is_correct' => false],
                        ],
                        'explanation' => 'Les taux d’intérêt influencent le rendement relatif de l’épargne et donc l’arbitrage entre consommation actuelle et consommation future.',
                    ],
                    [
                        'question' => 'Pourquoi les anticipations d’inflation influencent-elles les taux d’intérêt nominaux ?',
                        'choices' => [
                            ['choice_text' => 'Les prêteurs et emprunteurs tiennent compte du pouvoir d’achat attendu des paiements futurs', 'is_correct' => true],
                            ['choice_text' => 'L’inflation anticipée n’a aucun effet sur les contrats financiers', 'is_correct' => false],
                            ['choice_text' => 'Les taux nominaux sont toujours indépendants des prix', 'is_correct' => false],
                            ['choice_text' => 'Les contrats de crédit ne tiennent jamais compte du futur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticipations d’inflation peuvent être intégrées dans les taux nominaux car prêteurs et emprunteurs tiennent compte du pouvoir d’achat attendu des paiements futurs.',
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire',
                'description' => 'Quiz débutant sur Politique monétaire.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique monétaire ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des actions de la banque centrale visant notamment à influencer les conditions monétaires et financières', 'is_correct' => true],
                            ['choice_text' => 'La politique de taxation des entreprises', 'is_correct' => false],
                            ['choice_text' => 'La politique commerciale extérieure', 'is_correct' => false],
                            ['choice_text' => 'La politique de recrutement public', 'is_correct' => false],
                        ],
                        'explanation' => 'La politique monétaire regroupe les actions d’une banque centrale visant à influencer les conditions monétaires et financières de l’économie.',
                    ],
                    [
                        'question' => 'Quel est un objectif courant de la politique monétaire moderne ?',
                        'choices' => [
                            ['choice_text' => 'Maintenir la stabilité des prix tout en contribuant, selon le mandat, à la stabilité macroéconomique', 'is_correct' => true],
                            ['choice_text' => 'Fixer tous les salaires', 'is_correct' => false],
                            ['choice_text' => 'Déterminer directement les dépenses de chaque ménage', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toute importation', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité des prix est un objectif courant de la politique monétaire ; selon le mandat, la banque centrale peut aussi prendre en compte d’autres objectifs macroéconomiques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux directeur ?',
                        'choices' => [
                            ['choice_text' => 'Un taux d’intérêt que la banque centrale utilise comme instrument pour influencer les conditions monétaires', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’inflation officiel', 'is_correct' => false],
                            ['choice_text' => 'Le taux de chômage national', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance des exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux directeur est un taux utilisé par la banque centrale comme instrument pour influencer les conditions monétaires et financières.',
                    ],
                    [
                        'question' => 'Que cherche généralement à faire une politique monétaire restrictive ?',
                        'choices' => [
                            ['choice_text' => 'Ralentir la demande et réduire les pressions inflationnistes', 'is_correct' => true],
                            ['choice_text' => 'Augmenter immédiatement toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement la valeur de la monnaie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les banques commerciales', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique monétaire restrictive cherche généralement à freiner la demande et à réduire les pressions inflationnistes.',
                    ],
                    [
                        'question' => 'Que cherche généralement à faire une politique monétaire expansionniste ?',
                        'choices' => [
                            ['choice_text' => 'Assouplir les conditions financières afin de soutenir l’activité lorsque cela est approprié', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toujours les taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Réduire systématiquement la consommation', 'is_correct' => false],
                            ['choice_text' => 'Interdire les crédits bancaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique monétaire expansionniste cherche généralement à assouplir les conditions financières afin de soutenir l’activité lorsque cela est approprié.',
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire peut-elle influencer la consommation ?',
                        'choices' => [
                            ['choice_text' => 'Les variations des taux modifient le coût du crédit et le rendement de l’épargne', 'is_correct' => true],
                            ['choice_text' => 'La consommation est totalement indépendante des conditions financières', 'is_correct' => false],
                            ['choice_text' => 'Les ménages ne peuvent jamais emprunter', 'is_correct' => false],
                            ['choice_text' => 'Les banques centrales fixent directement la consommation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variations des taux modifient notamment le coût du crédit et le rendement de l’épargne, ce qui peut influencer les décisions de consommation.',
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire peut-elle influencer l’investissement ?',
                        'choices' => [
                            ['choice_text' => 'Les conditions de financement influencent le coût du capital et la rentabilité de certains projets', 'is_correct' => true],
                            ['choice_text' => 'L’investissement ne dépend jamais du financement', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises ne tiennent pas compte des taux', 'is_correct' => false],
                            ['choice_text' => 'Les taux n’ont aucune influence sur les projets', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions de financement influencent le coût du capital et peuvent donc modifier la rentabilité attendue de certains projets d’investissement.',
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité de la banque centrale est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut influencer les anticipations d’inflation et l’efficacité de la politique monétaire', 'is_correct' => true],
                            ['choice_text' => 'La crédibilité remplace toujours les instruments monétaires', 'is_correct' => false],
                            ['choice_text' => 'Elle fixe directement tous les prix', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute incertitude économique', 'is_correct' => false],
                        ],
                        'explanation' => 'La crédibilité de la banque centrale contribue à ancrer les anticipations d’inflation et peut rendre la politique monétaire plus efficace.',
                    ],
                    [
                        'question' => 'Pourquoi les anticipations des ménages et entreprises sont-elles importantes pour la politique monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Elles influencent les décisions de consommation, d’investissement, de fixation des prix et de salaires', 'is_correct' => true],
                            ['choice_text' => 'Elles n’ont aucun effet sur les décisions économiques', 'is_correct' => false],
                            ['choice_text' => 'Les agents économiques ne réagissent jamais aux politiques', 'is_correct' => false],
                            ['choice_text' => 'Elles déterminent uniquement les exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticipations influencent les décisions de consommation, d’investissement, de fixation des prix et de salaires, ce qui modifie la transmission de la politique monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire agit-elle souvent avec des délais ?',
                        'choices' => [
                            ['choice_text' => 'Les variations des conditions financières mettent du temps à se transmettre aux dépenses, aux prix et à l’activité', 'is_correct' => true],
                            ['choice_text' => 'Tous les effets sont instantanés', 'is_correct' => false],
                            ['choice_text' => 'La politique monétaire ne touche jamais les marchés financiers', 'is_correct' => false],
                            ['choice_text' => 'Les banques ajustent toujours leurs taux uniquement une fois par décennie', 'is_correct' => false],
                        ],
                        'explanation' => 'La politique monétaire agit avec des délais car les changements de taux et de conditions financières mettent du temps à influencer les dépenses, la production et les prix.',
                    ],
                ],
            ],

            [
                'title' => 'Offre de monnaie et demande de monnaie',
                'description' => 'Quiz débutant sur Offre de monnaie et demande de monnaie.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la demande de monnaie ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de monnaie que les agents souhaitent détenir compte tenu de leurs besoins et du coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'La quantité de billets imprimés uniquement', 'is_correct' => false],
                            ['choice_text' => 'La quantité totale de biens produits', 'is_correct' => false],
                            ['choice_text' => 'La quantité d’or détenue par l’État', 'is_correct' => false],
                        ],
                        'explanation' => 'La demande de monnaie correspond à la quantité de monnaie que les agents souhaitent détenir selon leurs besoins de transactions, de précaution et d’autres facteurs économiques.',
                    ],
                    [
                        'question' => 'Pourquoi les agents détiennent-ils de la monnaie pour effectuer des transactions ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de régler facilement les achats de biens et services', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente automatiquement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit un rendement supérieur à tous les actifs', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude', 'is_correct' => false],
                        ],
                        'explanation' => 'Les agents détiennent de la monnaie pour pouvoir régler facilement leurs achats et autres transactions courantes.',
                    ],
                    [
                        'question' => 'Pourquoi le niveau du revenu peut-il influencer la demande de monnaie ?',
                        'choices' => [
                            ['choice_text' => 'Un revenu ou volume de transactions plus élevé peut nécessiter davantage de moyens de paiement', 'is_correct' => true],
                            ['choice_text' => 'Le revenu n’a aucun lien avec les transactions', 'is_correct' => false],
                            ['choice_text' => 'Un revenu plus élevé réduit toujours les besoins de paiement à zéro', 'is_correct' => false],
                            ['choice_text' => 'La monnaie n’est jamais utilisée dans les transactions', 'is_correct' => false],
                        ],
                        'explanation' => 'Un revenu plus élevé s’accompagne généralement d’un volume de transactions plus important, ce qui peut augmenter les besoins en moyens de paiement.',
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt influence-t-il généralement la demande de monnaie ?',
                        'choices' => [
                            ['choice_text' => 'Détenir de la monnaie a un coût d’opportunité lié au rendement des actifs porteurs d’intérêt', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’intérêt n’affecte jamais le coût d’opportunité de la monnaie', 'is_correct' => false],
                            ['choice_text' => 'La monnaie porte toujours exactement le même rendement que les obligations', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt détermine uniquement la population', 'is_correct' => false],
                        ],
                        'explanation' => 'Détenir de la monnaie a un coût d’opportunité lié au rendement que l’on pourrait obtenir avec d’autres actifs portant intérêt.',
                    ],
                    [
                        'question' => 'Dans une présentation simple, une hausse du taux d’intérêt tend-elle à augmenter ou réduire la demande d’encaisses monétaires ?',
                        'choices' => [
                            ['choice_text' => 'La réduire, toutes choses égales par ailleurs', 'is_correct' => true],
                            ['choice_text' => 'L’augmenter toujours', 'is_correct' => false],
                            ['choice_text' => 'La laisser toujours identique', 'is_correct' => false],
                            ['choice_text' => 'La rendre nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une présentation simple, une hausse du taux d’intérêt augmente le coût d’opportunité de la monnaie et tend donc à réduire les encaisses détenues.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’offre de monnaie ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de monnaie disponible dans l’économie selon la définition monétaire retenue', 'is_correct' => true],
                            ['choice_text' => 'Le volume total de production', 'is_correct' => false],
                            ['choice_text' => 'La quantité de biens exportés', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des impôts', 'is_correct' => false],
                        ],
                        'explanation' => 'L’offre de monnaie désigne la quantité de monnaie disponible dans l’économie selon la définition monétaire utilisée.',
                    ],
                    [
                        'question' => 'Pourquoi la banque centrale peut-elle influencer l’offre de monnaie et les conditions monétaires ?',
                        'choices' => [
                            ['choice_text' => 'Elle contrôle certains actifs, taux et opérations qui influencent le système financier', 'is_correct' => true],
                            ['choice_text' => 'Elle contrôle directement chaque dépôt bancaire individuellement', 'is_correct' => false],
                            ['choice_text' => 'Elle fixe directement chaque prêt privé', 'is_correct' => false],
                            ['choice_text' => 'Elle contrôle uniquement la monnaie étrangère', 'is_correct' => false],
                        ],
                        'explanation' => 'La banque centrale influence les conditions monétaires au moyen de ses taux, opérations et autres instruments qui affectent le système financier et bancaire.',
                    ],
                    [
                        'question' => 'Pourquoi la demande de monnaie peut-elle augmenter lors d’une période d’incertitude ?',
                        'choices' => [
                            ['choice_text' => 'Les agents peuvent préférer davantage de liquidité pour faire face à des dépenses imprévues', 'is_correct' => true],
                            ['choice_text' => 'L’incertitude oblige toujours à dépenser tout l’argent disponible', 'is_correct' => false],
                            ['choice_text' => 'La monnaie devient illégale pendant les crises', 'is_correct' => false],
                            ['choice_text' => 'La demande de liquidité est indépendante de l’incertitude', 'is_correct' => false],
                        ],
                        'explanation' => 'En période d’incertitude, les agents peuvent vouloir conserver davantage de liquidité pour faire face à des dépenses imprévues ou à des risques futurs.',
                    ],
                    [
                        'question' => 'Pourquoi la vitesse de circulation de la monnaie peut-elle être importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle indique à quelle fréquence une unité monétaire est utilisée pour des transactions sur une période', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure directement le chômage', 'is_correct' => false],
                            ['choice_text' => 'Elle indique uniquement le nombre de banques', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours constante dans toutes les économies', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de circulation indique à quelle fréquence une unité monétaire est utilisée pour réaliser des transactions pendant une période donnée.',
                    ],
                    [
                        'question' => 'Pourquoi la relation entre monnaie, prix et production n’est-elle pas forcément mécanique à court terme ?',
                        'choices' => [
                            ['choice_text' => 'La demande de monnaie, la vitesse de circulation, la production et les anticipations peuvent également changer', 'is_correct' => true],
                            ['choice_text' => 'Les prix sont toujours directement proportionnels à la monnaie à chaque instant', 'is_correct' => false],
                            ['choice_text' => 'La production ne réagit jamais aux conditions financières', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de circulation est toujours exactement fixe', 'is_correct' => false],
                        ],
                        'explanation' => 'À court terme, la relation entre monnaie, prix et production dépend aussi de la demande de monnaie, de la vitesse de circulation, de la production et des anticipations.',
                    ],
                ],
            ],

            [
                'title' => 'Création monétaire, multiplicateur et réserves',
                'description' => 'Quiz débutant sur Création monétaire, multiplicateur et réserves.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que sont les réserves bancaires ?',
                        'choices' => [
                            ['choice_text' => 'Des avoirs liquides détenus par les banques, notamment sous forme de dépôts auprès de la banque centrale et parfois d’espèces', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les bénéfices des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Des prêts accordés aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Des obligations étrangères uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réserves bancaires sont des avoirs liquides détenus par les banques, notamment sous forme de dépôts auprès de la banque centrale et parfois d’espèces.',
                    ],
                    [
                        'question' => 'Pourquoi la banque centrale est-elle importante pour le système de réserves bancaires ?',
                        'choices' => [
                            ['choice_text' => 'Elle fournit et règle les réserves du système bancaire et peut influencer leurs conditions', 'is_correct' => true],
                            ['choice_text' => 'Elle crée tous les crédits privés directement', 'is_correct' => false],
                            ['choice_text' => 'Elle choisit chaque emprunteur individuel', 'is_correct' => false],
                            ['choice_text' => 'Elle contrôle seulement les billets étrangers', 'is_correct' => false],
                        ],
                        'explanation' => 'La banque centrale joue un rôle central dans le système de réserves et peut fournir, régler ou influencer les conditions de liquidité des banques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ratio de réserves dans une présentation simplifiée de la création monétaire ?',
                        'choices' => [
                            ['choice_text' => 'La proportion des dépôts que la banque conserve sous forme de réserves', 'is_correct' => true],
                            ['choice_text' => 'Le ratio entre exportations et importations', 'is_correct' => false],
                            ['choice_text' => 'Le ratio entre profits et salaires', 'is_correct' => false],
                            ['choice_text' => 'La proportion des ménages possédant un compte', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle simplifié, le ratio de réserves représente la part des dépôts que la banque conserve sous forme de réserves plutôt que de prêter.',
                    ],
                    [
                        'question' => 'Dans le modèle simplifié du multiplicateur monétaire, que se passe-t-il lorsque le ratio de réserves augmente ?',
                        'choices' => [
                            ['choice_text' => 'Le multiplicateur simplifié diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Il reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Il devient toujours égal à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle simplifié du multiplicateur monétaire, un ratio de réserves plus élevé conduit à un multiplicateur plus faible.',
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur monétaire simple est-il une approximation ?',
                        'choices' => [
                            ['choice_text' => 'La création monétaire réelle dépend aussi de la demande de crédit, des réserves, du comportement des banques et des agents', 'is_correct' => true],
                            ['choice_text' => 'Les banques prêtent toujours tout leur argent disponible', 'is_correct' => false],
                            ['choice_text' => 'Le public ne détient jamais d’espèces', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale n’a aucun rôle monétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le multiplicateur monétaire simple repose sur des hypothèses simplificatrices et ne décrit pas toutes les contraintes et tous les comportements du système bancaire réel.',
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle réduire ses nouveaux prêts même si elle dispose de réserves ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut faire face à une faible demande de crédit, à des risques élevés ou à des contraintes de capital', 'is_correct' => true],
                            ['choice_text' => 'Les réserves obligent toujours une banque à prêter la totalité des fonds', 'is_correct' => false],
                            ['choice_text' => 'Les banques ne tiennent jamais compte du risque', 'is_correct' => false],
                            ['choice_text' => 'Les réserves empêchent tout prêt', 'is_correct' => false],
                        ],
                        'explanation' => 'Même avec des réserves disponibles, une banque peut limiter les prêts si la demande est faible ou si les risques, le capital ou d’autres contraintes deviennent importants.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse du risque de défaut peut-elle freiner la création de crédit ?',
                        'choices' => [
                            ['choice_text' => 'Les banques peuvent devenir plus prudentes et durcir leurs critères de prêt', 'is_correct' => true],
                            ['choice_text' => 'Le risque augmente toujours la volonté de prêter', 'is_correct' => false],
                            ['choice_text' => 'Le risque n’affecte jamais les décisions bancaires', 'is_correct' => false],
                            ['choice_text' => 'Le risque transforme automatiquement les prêts en dépôts sûrs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse du risque de défaut rend les banques plus prudentes et peut les conduire à durcir leurs critères de crédit.',
                    ],
                    [
                        'question' => 'Pourquoi le comportement des ménages influence-t-il la création monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Le choix entre dépôts, espèces, remboursement de dettes et nouvel endettement modifie les flux monétaires', 'is_correct' => true],
                            ['choice_text' => 'Les ménages n’utilisent jamais les banques', 'is_correct' => false],
                            ['choice_text' => 'Les ménages contrôlent directement la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Leurs décisions n’ont aucune conséquence sur les dépôts', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décisions des ménages concernant l’endettement, les remboursements, les dépôts et la détention d’espèces modifient les flux monétaires et les dépôts bancaires.',
                    ],
                    [
                        'question' => 'Pourquoi le remboursement d’un prêt bancaire peut-il réduire les dépôts créés par le système bancaire ?',
                        'choices' => [
                            ['choice_text' => 'Le remboursement annule progressivement la créance et le dépôt correspondant dans le mécanisme de création monétaire', 'is_correct' => true],
                            ['choice_text' => 'Le remboursement crée toujours un nouveau dépôt supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Un prêt remboursé devient automatiquement un actif public', 'is_correct' => false],
                            ['choice_text' => 'Le remboursement n’a aucun effet comptable', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’un prêt est remboursé, la créance bancaire et le dépôt correspondant diminuent progressivement dans le mécanisme de création monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante pour une banque ?',
                        'choices' => [
                            ['choice_text' => 'Une banque doit pouvoir honorer les retraits et paiements tout en gérant ses actifs et passifs à différentes échéances', 'is_correct' => true],
                            ['choice_text' => 'La liquidité n’a aucun rôle dans les banques', 'is_correct' => false],
                            ['choice_text' => 'La banque peut toujours attendre sans honorer ses paiements', 'is_correct' => false],
                            ['choice_text' => 'La liquidité garantit automatiquement la solvabilité', 'is_correct' => false],
                        ],
                        'explanation' => 'La liquidité permet à une banque de faire face à ses paiements et retraits à court terme tout en gérant ses actifs et ses passifs.',
                    ],
                ],
            ],

            [
                'title' => 'Banque centrale et stabilité financière',
                'description' => 'Quiz débutant sur Banque centrale et stabilité financière.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une banque centrale ?',
                        'choices' => [
                            ['choice_text' => 'Une institution chargée notamment de conduire la politique monétaire et de contribuer à la stabilité financière selon son mandat', 'is_correct' => true],
                            ['choice_text' => 'Une banque commerciale spécialisée dans les prêts aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise industrielle publique', 'is_correct' => false],
                            ['choice_text' => 'Une organisation qui fixe tous les prix', 'is_correct' => false],
                        ],
                        'explanation' => 'Une banque centrale est une institution chargée notamment de conduire la politique monétaire et, selon son mandat, de contribuer à la stabilité financière.',
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale prête-t-elle parfois aux banques ?',
                        'choices' => [
                            ['choice_text' => 'Pour fournir de la liquidité au système bancaire dans le cadre de ses opérations et de son mandat', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir tous les bénéfices des banques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les dépôts privés', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer définitivement tout risque bancaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une banque centrale peut prêter aux banques pour fournir de la liquidité dans le cadre de ses opérations et de son mandat.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le rôle de prêteur en dernier ressort ?',
                        'choices' => [
                            ['choice_text' => 'Fournir, dans certaines circonstances, de la liquidité aux institutions financières confrontées à des tensions de financement', 'is_correct' => true],
                            ['choice_text' => 'Garantir que chaque banque réalise un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Financer directement toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Fixer le prix de chaque action', 'is_correct' => false],
                        ],
                        'explanation' => 'Le prêteur en dernier ressort fournit, dans certaines circonstances, de la liquidité à des institutions financières confrontées à des tensions de financement.',
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre liquidité et solvabilité ?',
                        'choices' => [
                            ['choice_text' => 'La liquidité concerne la capacité à faire face aux paiements à court terme, tandis que la solvabilité concerne la capacité à couvrir les engagements avec la valeur des actifs sur une base plus globale', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'La solvabilité concerne uniquement les dépôts à vue', 'is_correct' => false],
                            ['choice_text' => 'La liquidité mesure uniquement les bénéfices annuels', 'is_correct' => false],
                        ],
                        'explanation' => 'La liquidité concerne la capacité à effectuer les paiements à court terme, tandis que la solvabilité concerne la capacité plus globale à faire face aux engagements avec ses actifs et ses ressources.',
                    ],
                    [
                        'question' => 'Pourquoi une crise de liquidité peut-elle devenir une crise bancaire plus large ?',
                        'choices' => [
                            ['choice_text' => 'Une perte de confiance peut provoquer des retraits importants et forcer des ventes d’actifs dans de mauvaises conditions', 'is_correct' => true],
                            ['choice_text' => 'La liquidité n’a aucun rapport avec la confiance', 'is_correct' => false],
                            ['choice_text' => 'Les retraits améliorent toujours la stabilité bancaire', 'is_correct' => false],
                            ['choice_text' => 'Les banques n’ont jamais de passifs à court terme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une crise de liquidité peut devenir plus grave si la perte de confiance provoque des retraits importants et force la banque à vendre rapidement des actifs.',
                    ],
                    [
                        'question' => 'Pourquoi les paniques bancaires peuvent-elles être auto-renforçantes ?',
                        'choices' => [
                            ['choice_text' => 'Les retraits simultanés peuvent pousser une banque à vendre des actifs rapidement et renforcer les inquiétudes des déposants', 'is_correct' => true],
                            ['choice_text' => 'Les retraits augmentent toujours les liquidités disponibles', 'is_correct' => false],
                            ['choice_text' => 'Une banque possède toujours assez de liquidités pour tous les retraits sans limite', 'is_correct' => false],
                            ['choice_text' => 'Les paniques n’affectent jamais les banques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des retraits simultanés peuvent affaiblir la position de liquidité d’une banque et renforcer les inquiétudes des déposants, créant une dynamique auto-renforçante.',
                    ],
                    [
                        'question' => 'Pourquoi la réglementation prudentielle est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle vise notamment à limiter certains risques et à renforcer la résilience du système financier', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit qu’aucune banque ne fera jamais faillite', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tout risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la politique monétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La réglementation prudentielle vise notamment à limiter certains risques et à renforcer la résilience des banques et du système financier.',
                    ],
                    [
                        'question' => 'Pourquoi le capital bancaire agit-il comme un coussin ?',
                        'choices' => [
                            ['choice_text' => 'Il peut absorber une partie des pertes avant qu’elles n’affectent entièrement les créanciers et déposants', 'is_correct' => true],
                            ['choice_text' => 'Il empêche toute perte d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Il augmente automatiquement les profits', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toutes les réserves', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fonds propres constituent un coussin qui peut absorber une partie des pertes avant qu’elles ne touchent entièrement les autres créanciers et déposants.',
                    ],
                    [
                        'question' => 'Pourquoi une crise financière peut-elle réduire l’activité économique ?',
                        'choices' => [
                            ['choice_text' => 'Les conditions de crédit peuvent se resserrer, ce qui réduit certains investissements et dépenses', 'is_correct' => true],
                            ['choice_text' => 'Les crises financières augmentent toujours le crédit', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises ne dépendent jamais du système financier', 'is_correct' => false],
                            ['choice_text' => 'Le financement n’a aucun lien avec l’activité réelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une crise financière peut resserrer les conditions de crédit et réduire le financement disponible pour certaines dépenses et certains investissements.',
                    ],
                    [
                        'question' => 'Pourquoi la stabilité financière complète-t-elle la stabilité des prix ?',
                        'choices' => [
                            ['choice_text' => 'Un système financier fragile peut perturber la transmission monétaire et affecter fortement l’économie réelle', 'is_correct' => true],
                            ['choice_text' => 'Les deux concepts sont totalement indépendants', 'is_correct' => false],
                            ['choice_text' => 'La stabilité financière concerne uniquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'La stabilité des prix rend toute crise financière impossible', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité financière est complémentaire de la stabilité des prix, car un système financier fragile peut perturber la transmission de la politique monétaire et l’économie réelle.',
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, production et activité économique',
                'description' => 'Quiz débutant sur Monnaie, production et activité économique.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les conditions monétaires peuvent-elles influencer la demande globale à court terme ?',
                        'choices' => [
                            ['choice_text' => 'Elles influencent les taux, le crédit, les dépenses et certaines conditions financières', 'is_correct' => true],
                            ['choice_text' => 'La monnaie n’a aucun lien avec la demande', 'is_correct' => false],
                            ['choice_text' => 'Les banques centrales fixent directement toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Les ménages n’utilisent jamais le crédit', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions monétaires influencent notamment les taux, le crédit et les dépenses, ce qui peut modifier la demande globale à court terme.',
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle soutenir l’investissement ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire le coût du financement et rendre certains projets plus attractifs', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours le coût du capital', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les projets moins rentables', 'is_correct' => false],
                            ['choice_text' => 'Elle interdit tout nouvel investissement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baisse des taux peut diminuer le coût du financement et rendre certains projets d’investissement plus attractifs.',
                    ],
                    [
                        'question' => 'Pourquoi les conditions monétaires peuvent-elles influencer le marché immobilier ?',
                        'choices' => [
                            ['choice_text' => 'Les taux d’emprunt influencent le coût des crédits immobiliers et donc la demande de logements', 'is_correct' => true],
                            ['choice_text' => 'Les taux n’ont aucun effet sur les crédits immobiliers', 'is_correct' => false],
                            ['choice_text' => 'Le marché immobilier ne dépend jamais du financement', 'is_correct' => false],
                            ['choice_text' => 'Les banques centrales fixent directement le prix de chaque logement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les taux d’emprunt influencent le coût du crédit immobilier et peuvent donc modifier la demande de logements et l’activité du secteur.',
                    ],
                    [
                        'question' => 'Pourquoi un resserrement monétaire peut-il ralentir la croissance à court terme ?',
                        'choices' => [
                            ['choice_text' => 'Des conditions financières plus strictes peuvent réduire certaines dépenses de consommation et d’investissement', 'is_correct' => true],
                            ['choice_text' => 'Un resserrement augmente toujours immédiatement la production', 'is_correct' => false],
                            ['choice_text' => 'Les dépenses privées augmentent toujours lorsque les taux montent', 'is_correct' => false],
                            ['choice_text' => 'Les taux n’influencent jamais les dépenses', 'is_correct' => false],
                        ],
                        'explanation' => 'Un resserrement monétaire augmente généralement le coût du financement et peut réduire certaines dépenses de consommation et d’investissement.',
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle contribuer à réduire l’inflation avec retard ?',
                        'choices' => [
                            ['choice_text' => 'La baisse progressive de la demande et des pressions sur les prix se transmet avec des délais', 'is_correct' => true],
                            ['choice_text' => 'Les prix réagissent toujours instantanément', 'is_correct' => false],
                            ['choice_text' => 'La politique monétaire ne touche jamais les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Une politique restrictive augmente toujours l’inflation', 'is_correct' => false],
                        ],
                        'explanation' => 'La politique monétaire agit avec des délais : la baisse de la demande et des pressions sur les prix se transmet progressivement à l’économie.',
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire expansionniste peut-elle être utilisée pendant une récession ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut améliorer les conditions financières et soutenir la demande lorsque l’économie est insuffisamment dynamique', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit toujours le crédit', 'is_correct' => false],
                            ['choice_text' => 'Elle vise nécessairement à augmenter le chômage', 'is_correct' => false],
                            ['choice_text' => 'Elle interdit les investissements', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant une récession, une politique expansionniste peut assouplir les conditions financières et soutenir la demande lorsque l’activité est insuffisante.',
                    ],
                    [
                        'question' => 'Pourquoi les effets de la politique monétaire peuvent-ils différer selon les ménages ?',
                        'choices' => [
                            ['choice_text' => 'Les ménages ont des structures différentes de dette, d’épargne, de revenu et de sensibilité aux taux', 'is_correct' => true],
                            ['choice_text' => 'Tous les ménages ont toujours exactement les mêmes bilans', 'is_correct' => false],
                            ['choice_text' => 'Les taux affectent chaque ménage de façon identique', 'is_correct' => false],
                            ['choice_text' => 'Les ménages n’ont jamais d’actifs financiers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ménages diffèrent par leur niveau de dette, d’épargne, de revenu et leur sensibilité aux taux, donc les effets de la politique monétaire peuvent varier.',
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux n’entraîne-t-elle pas nécessairement une forte hausse du crédit ?',
                        'choices' => [
                            ['choice_text' => 'La demande de crédit, le risque bancaire et les conditions économiques peuvent rester faibles', 'is_correct' => true],
                            ['choice_text' => 'Les taux déterminent automatiquement tous les volumes de crédit', 'is_correct' => false],
                            ['choice_text' => 'Les banques doivent toujours prêter sans tenir compte du risque', 'is_correct' => false],
                            ['choice_text' => 'Les ménages empruntent toujours davantage à chaque baisse de taux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baisse des taux ne garantit pas une forte hausse du crédit : la demande, le risque bancaire et la situation économique peuvent rester faibles.',
                    ],
                    [
                        'question' => 'Pourquoi une économie proche de la capacité maximale peut-elle réagir différemment à une stimulation monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Une demande supplémentaire peut davantage exercer des pressions sur les prix lorsque les capacités productives sont déjà fortement utilisées', 'is_correct' => true],
                            ['choice_text' => 'L’inflation devient impossible', 'is_correct' => false],
                            ['choice_text' => 'La production augmente toujours sans limite', 'is_correct' => false],
                            ['choice_text' => 'Les taux n’ont aucun effet lorsque le chômage est faible', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les capacités productives sont fortement utilisées, une demande supplémentaire peut exercer davantage de pressions sur les prix plutôt que sur la production.',
                    ],
                    [
                        'question' => 'Pourquoi les chocs d’offre compliquent-ils la politique monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent augmenter l’inflation tout en réduisant simultanément la production', 'is_correct' => true],
                            ['choice_text' => 'Ils affectent uniquement les exportations', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucun effet sur les prix', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent toujours de réduire l’inflation sans coût', 'is_correct' => false],
                        ],
                        'explanation' => 'Un choc d’offre peut simultanément réduire la production et augmenter les prix, ce qui rend l’arbitrage de politique monétaire plus difficile.',
                    ],
                ],
            ],

            [
                'title' => 'Système monétaire et échanges internationaux',
                'description' => 'Quiz débutant sur Système monétaire et échanges internationaux.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les taux d’intérêt domestiques peuvent-ils influencer les flux de capitaux internationaux ?',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs comparent les rendements attendus des actifs entre pays, en tenant compte du risque et du change', 'is_correct' => true],
                            ['choice_text' => 'Les investisseurs ignorent toujours les rendements', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux sont toujours immobiles', 'is_correct' => false],
                            ['choice_text' => 'Les taux domestiques n’ont aucune influence sur les actifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les investisseurs comparent les rendements attendus des actifs entre pays, en tenant compte du risque et des perspectives de change, ce qui peut influencer les flux de capitaux.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux peut-elle soutenir la monnaie dans certains modèles ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut rendre les actifs domestiques plus attractifs et augmenter la demande de monnaie nationale', 'is_correct' => true],
                            ['choice_text' => 'Une hausse des taux provoque toujours une dépréciation', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs ne tiennent jamais compte des rendements', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change est indépendant des marchés financiers', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse des taux peut rendre certains actifs domestiques plus attractifs et augmenter la demande de monnaie nationale dans certains modèles.',
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle augmenter le prix des importations ?',
                        'choices' => [
                            ['choice_text' => 'Il faut davantage de monnaie nationale pour acheter une même quantité de devise étrangère', 'is_correct' => true],
                            ['choice_text' => 'Les importations deviennent automatiquement moins chères', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change n’affecte jamais les prix importés', 'is_correct' => false],
                            ['choice_text' => 'Les fournisseurs étrangers paient toujours davantage', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dépréciation de la monnaie nationale signifie qu’il faut davantage de monnaie nationale pour acheter une unité de devise étrangère, ce qui peut renchérir les importations.',
                    ],
                    [
                        'question' => 'Pourquoi le taux de change est-il pertinent pour la politique monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Les mouvements de change peuvent influencer les prix importés, la demande extérieure et les conditions financières', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change ne concerne que les touristes', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun lien avec l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Il ne concerne jamais les entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux de change influence notamment les prix importés, la demande extérieure et certaines conditions financières, ce qui peut affecter la politique monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi l’inflation domestique peut-elle influencer le taux de change réel ?',
                        'choices' => [
                            ['choice_text' => 'Elle modifie le niveau de prix relatif entre l’économie domestique et ses partenaires', 'is_correct' => true],
                            ['choice_text' => 'L’inflation n’a aucun effet sur les prix relatifs', 'is_correct' => false],
                            ['choice_text' => 'Le taux réel dépend uniquement des réserves de change', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change réel est toujours constant', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inflation domestique modifie le niveau des prix relatif entre pays et peut donc influencer le taux de change réel.',
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle attirer certains capitaux ?',
                        'choices' => [
                            ['choice_text' => 'Des taux plus élevés peuvent augmenter le rendement attendu de certains actifs domestiques', 'is_correct' => true],
                            ['choice_text' => 'Les taux élevés font toujours fuir tous les capitaux', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs ignorent les rendements relatifs', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux ne se déplacent jamais entre pays', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique monétaire restrictive peut augmenter le rendement attendu de certains actifs domestiques et attirer certains capitaux.',
                    ],
                    [
                        'question' => 'Pourquoi les flux internationaux peuvent-ils compliquer la conduite de la politique monétaire ?',
                        'choices' => [
                            ['choice_text' => 'Les mouvements de capitaux et de change peuvent modifier rapidement les conditions financières domestiques', 'is_correct' => true],
                            ['choice_text' => 'Les marchés mondiaux sont toujours isolés', 'is_correct' => false],
                            ['choice_text' => 'Les taux domestiques déterminent seuls tous les taux étrangers', 'is_correct' => false],
                            ['choice_text' => 'Les flux internationaux n’ont aucune influence financière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mouvements internationaux de capitaux et de change peuvent modifier rapidement les conditions financières domestiques et compliquer la conduite de la politique monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi un pays à taux de change fixe peut-il avoir moins de liberté monétaire ?',
                        'choices' => [
                            ['choice_text' => 'La banque centrale doit tenir compte de la défense de la parité et des mouvements de capitaux', 'is_correct' => true],
                            ['choice_text' => 'Un taux fixe donne toujours une autonomie monétaire illimitée', 'is_correct' => false],
                            ['choice_text' => 'Les marchés de capitaux n’existent plus', 'is_correct' => false],
                            ['choice_text' => 'Les réserves de change deviennent inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un taux de change fixe, la banque centrale doit prendre en compte la défense de la parité et les mouvements de capitaux, ce qui peut réduire sa marge d’action monétaire.',
                    ],
                    [
                        'question' => 'Pourquoi les réserves internationales peuvent-elles être utiles sous un régime de change administré ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent à la banque centrale de disposer de devises pour certaines interventions sur le marché des changes', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent les exportations', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent toujours une monnaie stable sans intervention', 'is_correct' => false],
                            ['choice_text' => 'Elles financent automatiquement toutes les dépenses publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réserves internationales fournissent des devises qui peuvent être utilisées par la banque centrale pour certaines interventions destinées à soutenir ou gérer le taux de change.',
                    ],
                    [
                        'question' => 'Pourquoi les anticipations jouent-elles un rôle dans la valeur d’une monnaie ?',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs prennent en compte les rendements et les évolutions futures attendues des politiques et de l’économie', 'is_correct' => true],
                            ['choice_text' => 'Les marchés de change ignorent toujours le futur', 'is_correct' => false],
                            ['choice_text' => 'Les anticipations n’ont aucun effet sur les actifs', 'is_correct' => false],
                            ['choice_text' => 'Les monnaies n’ont aucun rendement relatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticipations sur les futurs taux, l’inflation, la politique économique et la situation du pays influencent les décisions des investisseurs et donc la valeur relative d’une monnaie.',
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
                    'description' => $quizData['description'] ?? null,
                    'duration' => $quizData['duration'] ?? 10,
                    'passing_score' => $quizData['passing_score'] ?? 80,
                    'total_marks' => $quizData['total_marks'] ?? 10,
                    'is_active' => $quizData['is_active'] ?? true,
                    'difficulty' => $quizData['difficulty'] ?? 'Beginner',
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

                // Mélanger les enregistrements complets pour conserver
                // is_correct attaché au bon choix.
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceData['choice_text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
