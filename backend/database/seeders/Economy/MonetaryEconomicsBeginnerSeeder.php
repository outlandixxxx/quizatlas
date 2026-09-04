```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MonetaryEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'monetary-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la monnaie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la monnaie ?',
                        'answers' => [
                            ['answer' => 'Un actif largement accepté pour effectuer des paiements et faciliter les échanges', 'iscorrect' => true],
                            ['answer' => 'Uniquement des pièces métalliques', 'iscorrect' => false],
                            ['answer' => 'Un bien consommé immédiatement par tous', 'iscorrect' => false],
                            ['answer' => 'Une taxe imposée par l’État', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une fonction essentielle de la monnaie ?',
                        'answers' => [
                            ['answer' => 'Servir de moyen d’échange', 'iscorrect' => true],
                            ['answer' => 'Remplacer toutes les ressources naturelles', 'iscorrect' => false],
                            ['answer' => 'Garantir automatiquement la croissance économique', 'iscorrect' => false],
                            ['answer' => 'Fixer tous les prix par la loi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la monnaie facilite-t-elle les échanges par rapport au troc ?',
                        'answers' => [
                            ['answer' => 'Elle évite d’avoir à trouver simultanément deux personnes ayant exactement les biens recherchés par l’autre', 'iscorrect' => true],
                            ['answer' => 'Elle rend tous les biens gratuits', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute rareté', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les besoins de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une unité de compte ?',
                        'answers' => [
                            ['answer' => 'Une mesure commune permettant d’exprimer les prix et les valeurs économiques', 'iscorrect' => true],
                            ['answer' => 'Une monnaie utilisée uniquement par les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Une méthode de calcul du chômage', 'iscorrect' => false],
                            ['answer' => 'Un instrument uniquement réservé au commerce extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie que la monnaie sert de réserve de valeur ?',
                        'answers' => [
                            ['answer' => 'Elle permet de transférer du pouvoir d’achat dans le temps', 'iscorrect' => true],
                            ['answer' => 'Elle conserve toujours exactement le même pouvoir d’achat', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut jamais perdre de valeur', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut être détenue que par les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le pouvoir d’achat de la monnaie ?',
                        'answers' => [
                            ['answer' => 'La quantité de biens et services qu’une unité monétaire permet d’acheter', 'iscorrect' => true],
                            ['answer' => 'Le nombre de billets imprimés', 'iscorrect' => false],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le niveau des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au pouvoir d’achat de la monnaie lorsque le niveau général des prix augmente ?',
                        'answers' => [
                            ['answer' => 'Il diminue', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Il reste nécessairement identique', 'iscorrect' => false],
                            ['answer' => 'Il devient toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la confiance est-elle importante pour une monnaie moderne ?',
                        'answers' => [
                            ['answer' => 'Les utilisateurs doivent croire qu’elle sera acceptée et conservera une certaine capacité d’achat', 'iscorrect' => true],
                            ['answer' => 'Une monnaie n’a aucune valeur si elle est faite de métal', 'iscorrect' => false],
                            ['answer' => 'La confiance détermine directement la quantité de biens produite', 'iscorrect' => false],
                            ['answer' => 'La confiance remplace toutes les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organisme est généralement responsable de la politique monétaire d’un pays ?',
                        'answers' => [
                            ['answer' => 'La banque centrale', 'iscorrect' => true],
                            ['answer' => 'Le ministère des transports', 'iscorrect' => false],
                            ['answer' => 'Les entreprises privées uniquement', 'iscorrect' => false],
                            ['answer' => 'Les ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques centrales surveillent-elles l’inflation ?',
                        'answers' => [
                            ['answer' => 'Une inflation élevée ou instable peut réduire le pouvoir d’achat et créer de l’incertitude économique', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elles fixent tous les prix des biens', 'iscorrect' => false],
                            ['answer' => 'Parce que l’inflation augmente toujours le pouvoir d’achat', 'iscorrect' => false],
                            ['answer' => 'Parce que l’inflation n’a aucun effet économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Banques et création monétaire',
                'questions' => [
                    [
                        'question' => Quel est le rôle principal d’une banque commerciale ?',
                        'answers' => [
                            ['answer' => 'Collecter des dépôts, accorder des crédits et fournir des services de paiement', 'iscorrect' => true],
                            ['answer' => 'Fixer seule le taux d’inflation national', 'iscorrect' => false],
                            ['answer' => 'Créer toutes les politiques publiques', 'iscorrect' => false],
                            ['answer' => 'Contrôler directement toutes les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépôts bancaires sont-ils importants dans le système monétaire moderne ?',
                        'answers' => [
                            ['answer' => 'Ils constituent une forme de monnaie scripturale largement utilisée pour les paiements', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours conservés sous forme d’or physique', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent jamais être utilisés pour payer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la création monétaire par le crédit bancaire ?',
                        'answers' => [
                            ['answer' => 'Lorsqu’une banque accorde un prêt, elle peut créer simultanément un dépôt au profit de l’emprunteur', 'iscorrect' => true],
                            ['answer' => 'Une banque transforme toujours directement les billets en or', 'iscorrect' => false],
                            ['answer' => 'Les prêts réduisent nécessairement tous les dépôts', 'iscorrect' => false],
                            ['answer' => 'Seule la banque centrale peut créer toute forme de monnaie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques ne peuvent-elles pas créer des dépôts sans limite ?',
                        'answers' => [
                            ['answer' => 'Elles sont contraintes par la demande de crédit, la réglementation, la liquidité, le capital et les risques', 'iscorrect' => true],
                            ['answer' => 'Elles sont obligées de créer exactement le même montant chaque jour', 'iscorrect' => false],
                            ['answer' => 'Les banques ne peuvent jamais accorder de prêts', 'iscorrect' => false],
                            ['answer' => 'La création monétaire ne dépend d’aucune contrainte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Qu’est-ce qu’un dépôt bancaire à vue ?',
                        'answers' => [
                            ['answer' => 'Un dépôt pouvant généralement être utilisé ou retiré à la demande selon les conditions du compte', 'iscorrect' => true],
                            ['answer' => 'Un prêt accordé à la banque', 'iscorrect' => false],
                            ['answer' => 'Une obligation publique à long terme', 'iscorrect' => false],
                            ['answer' => 'Une réserve d’or uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques conservent-elles des liquidités ?',
                        'answers' => [
                            ['answer' => 'Pour répondre aux retraits, paiements et autres besoins de liquidité de leurs clients', 'iscorrect' => true],
                            ['answer' => 'Pour empêcher toute opération bancaire', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que les prêts ne soient jamais remboursés', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer le risque de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’une banque accorde un prêt à un emprunteur qui peut ne pas rembourser ?',
                        'answers' => [
                            ['answer' => 'Le risque de crédit', 'iscorrect' => true],
                            ['answer' => 'Le risque météorologique', 'iscorrect' => false],
                            ['answer' => 'Le risque démographique uniquement', 'iscorrect' => false],
                            ['answer' => 'Le risque de change exclusivement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques doivent-elles disposer de fonds propres ?',
                        'answers' => [
                            ['answer' => 'Les fonds propres absorbent une partie des pertes et renforcent la solidité financière de la banque', 'iscorrect' => true],
                            ['answer' => 'Ils servent uniquement à payer les salaires', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute perte future', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent tous les dépôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle les banques jouent-elles dans l’intermédiation financière ?',
                        'answers' => [
                            ['answer' => 'Elles mettent en relation des agents ayant des ressources financières avec des agents recherchant des financements', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent les investissements', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment tous les risques financiers', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent seules les préférences des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise bancaire peut-elle avoir des effets sur l’économie réelle ?',
                        'answers' => [
                            ['answer' => 'Une baisse de l’offre de crédit peut réduire la consommation, l’investissement et l’activité économique', 'iscorrect' => true],
                            ['answer' => 'Les banques n’ont aucun lien avec les entreprises', 'iscorrect' => false],
                            ['answer' => 'Le crédit n’affecte jamais l’investissement', 'iscorrect' => false],
                            ['answer' => 'Une crise bancaire augmente toujours automatiquement le PIB', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation et niveau général des prix',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’inflation ?',
                        'answers' => [
                            ['answer' => 'Une hausse persistante du niveau général des prix des biens et services', 'iscorrect' => true],
                            ['answer' => 'Une baisse permanente de tous les prix', 'iscorrect' => false],
                            ['answer' => 'Une hausse d’un seul prix', 'iscorrect' => false],
                            ['answer' => 'Une augmentation automatique du PIB réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse isolée du prix du pétrole n’est-elle pas nécessairement synonyme d’inflation générale ?',
                        'answers' => [
                            ['answer' => 'L’inflation concerne l’évolution générale et persistante des prix, pas uniquement un prix particulier', 'iscorrect' => true],
                            ['answer' => 'Toute hausse de prix est toujours de l’inflation', 'iscorrect' => false],
                            ['answer' => 'Le pétrole ne fait jamais partie des prix', 'iscorrect' => false],
                            ['answer' => 'L’inflation ne peut jamais être mesurée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un effet direct d’une inflation élevée sur les encaisses monétaires ?',
                        'answers' => [
                            ['answer' => 'La valeur réelle des encaisses diminue', 'iscorrect' => true],
                            ['answer' => 'La valeur réelle augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Les encaisses deviennent automatiquement plus productives', 'iscorrect' => false],
                            ['answer' => 'L’inflation n’a aucun effet sur le pouvoir d’achat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la déflation ?',
                        'answers' => [
                            ['answer' => 'Une baisse persistante du niveau général des prix', 'iscorrect' => true],
                            ['answer' => 'Une inflation très élevée', 'iscorrect' => false],
                            ['answer' => 'Une hausse du niveau général des prix', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des salaires nominaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation crée-t-elle de l’incertitude ?',
                        'answers' => [
                            ['answer' => 'Elle rend plus difficile la prévision des prix, des revenus réels et des coûts futurs', 'iscorrect' => true],
                            ['answer' => 'Elle rend tous les prix parfaitement prévisibles', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les contrats', 'iscorrect' => false],
                            ['answer' => 'Elle garantit que les salaires augmentent toujours plus vite que les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une inflation inattendue peut-elle redistribuer les revenus entre créanciers et débiteurs ?',
                        'answers' => [
                            ['answer' => 'Elle modifie la valeur réelle des paiements fixés en termes nominaux', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les revenus réels des créanciers', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais la valeur réelle d’une dette', 'iscorrect' => false],
                            ['answer' => 'Elle annule toujours les contrats de dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux d’inflation ?',
                        'answers' => [
                            ['answer' => 'Le taux de variation du niveau général des prix sur une période donnée', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance de la population', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt réel uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques centrales cherchent-elles souvent à maintenir une inflation faible et stable ?',
                        'answers' => [
                            ['answer' => 'La stabilité des prix facilite la planification économique et réduit certaines distorsions liées à une inflation élevée ou instable', 'iscorrect' => true],
                            ['answer' => 'Une inflation instable améliore toujours la croissance', 'iscorrect' => false],
                            ['answer' => 'La stabilité des prix empêche toute activité économique', 'iscorrect' => false],
                            ['answer' => 'Une inflation forte est toujours nécessaire au plein emploi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indice est souvent utilisé pour mesurer l’évolution des prix payés par les ménages ?',
                        'answers' => [
                            ['answer' => 'L’indice des prix à la consommation', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le PIB réel uniquement', 'iscorrect' => false],
                            ['answer' => 'La balance commerciale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une inflation faible n’implique-t-elle pas nécessairement que tous les prix diminuent ?',
                        'answers' => [
                            ['answer' => 'Elle signifie que le niveau général des prix augmente lentement, pas que chaque prix individuel baisse', 'iscorrect' => true],
                            ['answer' => 'Une inflation faible signifie toujours une déflation', 'iscorrect' => false],
                            ['answer' => 'Tous les prix doivent évoluer exactement ensemble', 'iscorrect' => false],
                            ['answer' => 'Une inflation faible signifie que les prix sont constants', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Taux d’intérêt et valeur de la monnaie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un taux d’intérêt nominal ?',
                        'answers' => [
                            ['answer' => 'Le taux exprimé en termes monétaires sans correction directe de l’inflation', 'iscorrect' => true],
                            ['answer' => 'Le taux d’inflation uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le taux de change réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux d’intérêt réel ?',
                        'answers' => [
                            ['answer' => 'Le rendement d’un placement ou coût d’un emprunt après prise en compte de l’inflation', 'iscorrect' => true],
                            ['answer' => 'Le taux nominal sans aucune référence aux prix', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance du PIB', 'iscorrect' => false],
                            ['answer' => 'Le taux de change nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux nominal est de 6 % et l’inflation de 2 %, quel est approximativement le taux réel selon l’approximation simple ?',
                        'answers' => [
                            ['answer' => '4 %', 'iscorrect' => true],
                            ['answer' => '8 %', 'iscorrect' => false],
                            ['answer' => '3 %', 'iscorrect' => false],
                            ['answer' => '12 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d’intérêt peut-elle réduire la demande de crédit ?',
                        'answers' => [
                            ['answer' => 'Le coût d’emprunt augmente, ce qui peut décourager certains ménages et entreprises', 'iscorrect' => true],
                            ['answer' => 'Le crédit devient automatiquement gratuit', 'iscorrect' => false],
                            ['answer' => 'Les taux d’intérêt n’ont aucun lien avec le coût du crédit', 'iscorrect' => false],
                            ['answer' => 'Une hausse des taux supprime toutes les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux peut-elle affecter l’investissement des entreprises ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le coût du financement et rendre certains projets moins rentables', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours tous les projets plus rentables', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne dépendent jamais du financement', 'iscorrect' => false],
                            ['answer' => 'Les taux d’intérêt n’influencent jamais les décisions d’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux réel est-il important pour une décision économique ?',
                        'answers' => [
                            ['answer' => 'Il indique mieux le coût ou rendement en termes de pouvoir d’achat', 'iscorrect' => true],
                            ['answer' => 'Il mesure directement le PIB', 'iscorrect' => false],
                            ['answer' => 'Il remplace toujours le taux nominal', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend jamais de l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut faire une banque centrale avec son taux directeur ?',
                        'answers' => [
                            ['answer' => 'Elle peut influencer les conditions de financement dans l’économie', 'iscorrect' => true],
                            ['answer' => 'Elle fixe directement tous les prix des biens', 'iscorrect' => false],
                            ['answer' => 'Elle contrôle directement chaque salaire', 'iscorrect' => false],
                            ['answer' => 'Elle décide seule des exportations privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle stimuler certains emprunts ?',
                        'answers' => [
                            ['answer' => 'Le coût du financement diminue généralement, ce qui peut augmenter la demande de crédit', 'iscorrect' => true],
                            ['answer' => 'Le crédit devient nécessairement inaccessible', 'iscorrect' => false],
                            ['answer' => 'Une baisse des taux augmente toujours les coûts d’emprunt', 'iscorrect' => false],
                            ['answer' => 'Les banques cessent automatiquement de prêter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux d’intérêt influencent-ils l’épargne ?',
                        'answers' => [
                            ['answer' => Le rendement offert sur certains actifs peut modifier l’incitation à reporter une partie de la consommation', 'iscorrect' => true],
                            ['answer' => 'Les taux n’ont aucun lien avec le rendement de l’épargne', 'iscorrect' => false],
                            ['answer' => 'Une hausse des taux rend toujours l’épargne impossible', 'iscorrect' => false],
                            ['answer' => 'L’épargne dépend uniquement des impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations d’inflation influencent-elles les taux d’intérêt nominaux ?',
                        'answers' => [
                            ['answer' => 'Les prêteurs et emprunteurs tiennent compte du pouvoir d’achat attendu des paiements futurs', 'iscorrect' => true],
                            ['answer' => 'L’inflation anticipée n’a aucun effet sur les contrats financiers', 'iscorrect' => false],
                            ['answer' => 'Les taux nominaux sont toujours indépendants des prix', 'iscorrect' => false],
                            ['answer' => 'Les contrats de crédit ne tiennent jamais compte du futur', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'L’ensemble des actions de la banque centrale visant notamment à influencer les conditions monétaires et financières', 'iscorrect' => true],
                            ['answer' => 'La politique de taxation des entreprises', 'iscorrect' => false],
                            ['answer' => 'La politique commerciale extérieure', 'iscorrect' => false],
                            ['answer' => 'La politique de recrutement public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un objectif courant de la politique monétaire moderne ?',
                        'answers' => [
                            ['answer' => 'Maintenir la stabilité des prix tout en contribuant, selon le mandat, à la stabilité macroéconomique', 'iscorrect' => true],
                            ['answer' => 'Fixer tous les salaires', 'iscorrect' => false],
                            ['answer' => 'Déterminer directement les dépenses de chaque ménage', 'iscorrect' => false],
                            ['answer' => 'Éliminer toute importation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux directeur ?',
                        'answers' => [
                            ['answer' => 'Un taux d’intérêt que la banque centrale utilise comme instrument pour influencer les conditions monétaires', 'iscorrect' => true],
                            ['answer' => 'Le taux d’inflation officiel', 'iscorrect' => false],
                            ['answer' => 'Le taux de chômage national', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement à faire une politique monétaire restrictive ?',
                        'answers' => [
                            ['answer' => 'Ralentir la demande et réduire les pressions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'Augmenter immédiatement toutes les dépenses', 'iscorrect' => false],
                            ['answer' => 'Réduire systématiquement la valeur de la monnaie', 'iscorrect' => false],
                            ['answer' => 'Supprimer les banques commerciales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement à faire une politique monétaire expansionniste ?',
                        'answers' => [
                            ['answer' => 'Assouplir les conditions financières afin de soutenir l’activité lorsque cela est approprié', 'iscorrect' => true],
                            ['answer' => 'Augmenter toujours les taux d’intérêt', 'iscorrect' => false],
                            ['answer' => 'Réduire systématiquement la consommation', 'iscorrect' => false],
                            ['answer' => 'Interdire les crédits bancaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire peut-elle influencer la consommation ?',
                        'answers' => [
                            ['answer' => 'Les variations des taux modifient le coût du crédit et le rendement de l’épargne', 'iscorrect' => true],
                            ['answer' => 'La consommation est totalement indépendante des conditions financières', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne peuvent jamais emprunter', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales fixent directement la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire peut-elle influencer l’investissement ?',
                        'answers' => [
                            ['answer' => 'Les conditions de financement influencent le coût du capital et la rentabilité de certains projets', 'iscorrect' => true],
                            ['answer' => 'L’investissement ne dépend jamais du financement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne tiennent pas compte des taux', 'iscorrect' => false],
                            ['answer' => 'Les taux n’ont aucune influence sur les projets', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité de la banque centrale est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle peut influencer les anticipations d’inflation et l’efficacité de la politique monétaire', 'iscorrect' => true],
                            ['answer' => 'La crédibilité remplace toujours les instruments monétaires', 'iscorrect' => false],
                            ['answer' => 'Elle fixe directement tous les prix', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute incertitude économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations des ménages et entreprises sont-elles importantes pour la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Elles influencent les décisions de consommation, d’investissement, de fixation des prix et de salaires', 'iscorrect' => true],
                            ['answer' => 'Elles n’ont aucun effet sur les décisions économiques', 'iscorrect' => false],
                            ['answer' => 'Les agents économiques ne réagissent jamais aux politiques', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent uniquement les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire agit-elle souvent avec des délais ?',
                        'answers' => [
                            ['answer' => 'Les variations des conditions financières mettent du temps à se transmettre aux dépenses, aux prix et à l’activité', 'iscorrect' => true],
                            ['answer' => 'Tous les effets sont instantanés', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire ne touche jamais les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Les banques ajustent toujours leurs taux uniquement une fois par décennie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Offre de monnaie et demande de monnaie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'La quantité de monnaie que les agents souhaitent détenir compte tenu de leurs besoins et du coût d’opportunité', 'iscorrect' => true],
                            ['answer' => 'La quantité de billets imprimés uniquement', 'iscorrect' => false],
                            ['answer' => 'La quantité totale de biens produits', 'iscorrect' => false],
                            ['answer' => 'La quantité d’or détenue par l’État', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les agents détiennent-ils de la monnaie pour effectuer des transactions ?',
                        'answers' => [
                            ['answer' => 'Elle permet de régler facilement les achats de biens et services', 'iscorrect' => true],
                            ['answer' => 'Elle augmente automatiquement les revenus', 'iscorrect' => false],
                            ['answer' => 'Elle garantit un rendement supérieur à tous les actifs', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau du revenu peut-il influencer la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'Un revenu ou volume de transactions plus élevé peut nécessiter davantage de moyens de paiement', 'iscorrect' => true],
                            ['answer' => 'Le revenu n’a aucun lien avec les transactions', 'iscorrect' => false],
                            ['answer' => 'Un revenu plus élevé réduit toujours les besoins de paiement à zéro', 'iscorrect' => false],
                            ['answer' => 'La monnaie n’est jamais utilisée dans les transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt influence-t-il généralement la demande de monnaie ?',
                        'answers' => [
                            ['answer' => 'Détenir de la monnaie a un coût d’opportunité lié au rendement des actifs porteurs d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Le taux d’intérêt n’affecte jamais le coût d’opportunité de la monnaie', 'iscorrect' => false],
                            ['answer' => 'La monnaie porte toujours exactement le même rendement que les obligations', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt détermine uniquement la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une présentation simple, une hausse du taux d’intérêt tend-elle à augmenter ou réduire la demande d’encaisses monétaires ?',
                        'answers' => [
                            ['answer' => 'La réduire, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'L’augmenter toujours', 'iscorrect' => false],
                            ['answer' => 'La laisser toujours identique', 'iscorrect' => false],
                            ['answer' => 'La rendre nécessairement négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’offre de monnaie ?',
                        'answers' => [
                            ['answer' => 'La quantité de monnaie disponible dans l’économie selon la définition monétaire retenue', 'iscorrect' => true],
                            ['answer' => 'Le volume total de production', 'iscorrect' => false],
                            ['answer' => 'La quantité de biens exportés', 'iscorrect' => false],
                            ['answer' => 'Le montant total des impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la banque centrale peut-elle influencer l’offre de monnaie et les conditions monétaires ?',
                        'answers' => [
                            ['answer' => 'Elle contrôle certains actifs, taux et opérations qui influencent le système financier', 'iscorrect' => true],
                            ['answer' => 'Elle contrôle directement chaque dépôt bancaire individuellement', 'iscorrect' => false],
                            ['answer' => 'Elle fixe directement chaque prêt privé', 'iscorrect' => false],
                            ['answer' => 'Elle contrôle uniquement la monnaie étrangère', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la demande de monnaie peut-elle augmenter lors d’une période d’incertitude ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent préférer davantage de liquidité pour faire face à des dépenses imprévues', 'iscorrect' => true],
                            ['answer' => 'L’incertitude oblige toujours à dépenser tout l’argent disponible', 'iscorrect' => false],
                            ['answer' => 'La monnaie devient illégale pendant les crises', 'iscorrect' => false],
                            ['answer' => 'La demande de liquidité est indépendante de l’incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la vitesse de circulation de la monnaie peut-elle être importante ?',
                        'answers' => [
                            ['answer' => 'Elle indique à quelle fréquence une unité monétaire est utilisée pour des transactions sur une période', 'iscorrect' => true],
                            ['answer' => 'Elle mesure directement le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle indique uniquement le nombre de banques', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours constante dans toutes les économies', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la relation entre monnaie, prix et production n’est-elle pas forcément mécanique à court terme ?',
                        'answers' => [
                            ['answer' => La demande de monnaie, la vitesse de circulation, la production et les anticipations peuvent également changer', 'iscorrect' => true],
                            ['answer' => 'Les prix sont toujours directement proportionnels à la monnaie à chaque instant', 'iscorrect' => false],
                            ['answer' => 'La production ne réagit jamais aux conditions financières', 'iscorrect' => false],
                            ['answer' => 'La vitesse de circulation est toujours exactement fixe', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Création monétaire, multiplicateur et réserves',
                'questions' => [
                    [
                        'question' => 'Que sont les réserves bancaires ?',
                        'answers' => [
                            ['answer' => 'Des avoirs liquides détenus par les banques, notamment sous forme de dépôts auprès de la banque centrale et parfois d’espèces', 'iscorrect' => true],
                            ['answer' => 'Uniquement les bénéfices des entreprises', 'iscorrect' => false],
                            ['answer' => 'Des prêts accordés aux ménages', 'iscorrect' => false],
                            ['answer' => 'Des obligations étrangères uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la banque centrale est-elle importante pour le système de réserves bancaires ?',
                        'answers' => [
                            ['answer' => 'Elle fournit et règle les réserves du système bancaire et peut influencer leurs conditions', 'iscorrect' => true],
                            ['answer' => 'Elle crée tous les crédits privés directement', 'iscorrect' => false],
                            ['answer' => 'Elle choisit chaque emprunteur individuel', 'iscorrect' => false],
                            ['answer' => 'Elle contrôle seulement les billets étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ratio de réserves dans une présentation simplifiée de la création monétaire ?',
                        'answers' => [
                            ['answer' => 'La proportion des dépôts que la banque conserve sous forme de réserves', 'iscorrect' => true],
                            ['answer' => 'Le ratio entre exportations et importations', 'iscorrect' => false],
                            ['answer' => 'Le ratio entre profits et salaires', 'iscorrect' => false],
                            ['answer' => 'La proportion des ménages possédant un compte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle simplifié du multiplicateur monétaire, que se passe-t-il lorsque le ratio de réserves augmente ?',
                        'answers' => [
                            ['answer' => 'Le multiplicateur simplifié diminue', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Il reste nécessairement identique', 'iscorrect' => false],
                            ['answer' => 'Il devient toujours égal à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur monétaire simple est-il une approximation ?',
                        'answers' => [
                            ['answer' => 'La création monétaire réelle dépend aussi de la demande de crédit, des réserves, du comportement des banques et des agents', 'iscorrect' => true],
                            ['answer' => 'Les banques prêtent toujours tout leur argent disponible', 'iscorrect' => false],
                            ['answer' => 'Le public ne détient jamais d’espèces', 'iscorrect' => false],
                            ['answer' => 'La banque centrale n’a aucun rôle monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle réduire ses nouveaux prêts même si elle dispose de réserves ?',
                        'answers' => [
                            ['answer' => 'Elle peut faire face à une faible demande de crédit, à des risques élevés ou à des contraintes de capital', 'iscorrect' => true],
                            ['answer' => 'Les réserves obligent toujours une banque à prêter la totalité des fonds', 'iscorrect' => false],
                            ['answer' => 'Les banques ne tiennent jamais compte du risque', 'iscorrect' => false],
                            ['answer' => 'Les réserves empêchent tout prêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du risque de défaut peut-elle freiner la création de crédit ?',
                        'answers' => [
                            ['answer' => 'Les banques peuvent devenir plus prudentes et durcir leurs critères de prêt', 'iscorrect' => true],
                            ['answer' => 'Le risque augmente toujours la volonté de prêter', 'iscorrect' => false],
                            ['answer' => 'Le risque n’affecte jamais les décisions bancaires', 'iscorrect' => false],
                            ['answer' => 'Le risque transforme automatiquement les prêts en dépôts sûrs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le comportement des ménages influence-t-il la création monétaire ?',
                        'answers' => [
                            ['answer' => 'Le choix entre dépôts, espèces, remboursement de dettes et nouvel endettement modifie les flux monétaires', 'iscorrect' => true],
                            ['answer' => 'Les ménages n’utilisent jamais les banques', 'iscorrect' => false],
                            ['answer' => 'Les ménages contrôlent directement la banque centrale', 'iscorrect' => false],
                            ['answer' => 'Leurs décisions n’ont aucune conséquence sur les dépôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le remboursement d’un prêt bancaire peut-il réduire les dépôts créés par le système bancaire ?',
                        'answers' => [
                            ['answer' => 'Le remboursement annule progressivement la créance et le dépôt correspondant dans le mécanisme de création monétaire', 'iscorrect' => true],
                            ['answer' => 'Le remboursement crée toujours un nouveau dépôt supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Un prêt remboursé devient automatiquement un actif public', 'iscorrect' => false],
                            ['answer' => 'Le remboursement n’a aucun effet comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité est-elle importante pour une banque ?',
                        'answers' => [
                            ['answer' => 'Une banque doit pouvoir honorer les retraits et paiements tout en gérant ses actifs et passifs à différentes échéances', 'iscorrect' => true],
                            ['answer' => 'La liquidité n’a aucun rôle dans les banques', 'iscorrect' => false],
                            ['answer' => 'La banque peut toujours attendre sans honorer ses paiements', 'iscorrect' => false],
                            ['answer' => 'La liquidité garantit automatiquement la solvabilité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Banque centrale et stabilité financière',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une banque centrale ?',
                        'answers' => [
                            ['answer' => 'Une institution chargée notamment de conduire la politique monétaire et de contribuer à la stabilité financière selon son mandat', 'iscorrect' => true],
                            ['answer' => 'Une banque commerciale spécialisée dans les prêts aux ménages', 'iscorrect' => false],
                            ['answer' => 'Une entreprise industrielle publique', 'iscorrect' => false],
                            ['answer' => 'Une organisation qui fixe tous les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale prête-t-elle parfois aux banques ?',
                        'answers' => [
                            ['answer' => 'Pour fournir de la liquidité au système bancaire dans le cadre de ses opérations et de son mandat', 'iscorrect' => true],
                            ['answer' => 'Pour garantir tous les bénéfices des banques', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer les dépôts privés', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer définitivement tout risque bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rôle de prêteur en dernier ressort ?',
                        'answers' => [
                            ['answer' => 'Fournir, dans certaines circonstances, de la liquidité aux institutions financières confrontées à des tensions de financement', 'iscorrect' => true],
                            ['answer' => 'Garantir que chaque banque réalise un bénéfice', 'iscorrect' => false],
                            ['answer' => 'Financer directement toutes les entreprises', 'iscorrect' => false],
                            ['answer' => 'Fixer le prix de chaque action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre liquidité et solvabilité ?',
                        'answers' => [
                            ['answer' => 'La liquidité concerne la capacité à faire face aux paiements à court terme, tandis que la solvabilité concerne la capacité à couvrir les engagements avec la valeur des actifs sur une base plus globale', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont exactement identiques', 'iscorrect' => false],
                            ['answer' => 'La solvabilité concerne uniquement les dépôts à vue', 'iscorrect' => false],
                            ['answer' => 'La liquidité mesure uniquement les bénéfices annuels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise de liquidité peut-elle devenir une crise bancaire plus large ?',
                        'answers' => [
                            ['answer' => Une perte de confiance peut provoquer des retraits importants et forcer des ventes d’actifs dans de mauvaises conditions', 'iscorrect' => true],
                            ['answer' => 'La liquidité n’a aucun rapport avec la confiance', 'iscorrect' => false],
                            ['answer' => 'Les retraits améliorent toujours la stabilité bancaire', 'iscorrect' => false],
                            ['answer' => 'Les banques n’ont jamais de passifs à court terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les paniques bancaires peuvent-elles être auto-renforçantes ?',
                        'answers' => [
                            ['answer' => 'Les retraits simultanés peuvent pousser une banque à vendre des actifs rapidement et renforcer les inquiétudes des déposants', 'iscorrect' => true],
                            ['answer' => 'Les retraits augmentent toujours les liquidités disponibles', 'iscorrect' => false],
                            ['answer' => 'Une banque possède toujours assez de liquidités pour tous les retraits sans limite', 'iscorrect' => false],
                            ['answer' => 'Les paniques n’affectent jamais les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réglementation prudentielle est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle vise notamment à limiter certains risques et à renforcer la résilience du système financier', 'iscorrect' => true],
                            ['answer' => 'Elle garantit qu’aucune banque ne fera jamais faillite', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tout risque de crédit', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le capital bancaire agit-il comme un coussin ?',
                        'answers' => [
                            ['answer' => 'Il peut absorber une partie des pertes avant qu’elles n’affectent entièrement les créanciers et déposants', 'iscorrect' => true],
                            ['answer' => 'Il empêche toute perte d’actifs', 'iscorrect' => false],
                            ['answer' => 'Il augmente automatiquement les profits', 'iscorrect' => false],
                            ['answer' => 'Il remplace toutes les réserves', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise financière peut-elle réduire l’activité économique ?',
                        'answers' => [
                            ['answer' => 'Les conditions de crédit peuvent se resserrer, ce qui réduit certains investissements et dépenses', 'iscorrect' => true],
                            ['answer' => 'Les crises financières augmentent toujours le crédit', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne dépendent jamais du système financier', 'iscorrect' => false],
                            ['answer' => 'Le financement n’a aucun lien avec l’activité réelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité financière complète-t-elle la stabilité des prix ?',
                        'answers' => [
                            ['answer' => Un système financier fragile peut perturber la transmission monétaire et affecter fortement l’économie réelle', 'iscorrect' => true],
                            ['answer' => Les deux concepts sont totalement indépendants', 'iscorrect' => false],
                            ['answer' => La stabilité financière concerne uniquement les exportations', 'iscorrect' => false],
                            ['answer' => La stabilité des prix rend toute crise financière impossible', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Monnaie, production et activité économique',
                'questions' => [
                    [
                        'question' => Pourquoi les conditions monétaires peuvent-elles influencer la demande globale à court terme ?',
                        'answers' => [
                            ['answer' => 'Elles influencent les taux, le crédit, les dépenses et certaines conditions financières', 'iscorrect' => true],
                            ['answer' => 'La monnaie n’a aucun lien avec la demande', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales fixent directement toutes les dépenses', 'iscorrect' => false],
                            ['answer' => 'Les ménages n’utilisent jamais le crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle soutenir l’investissement ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire le coût du financement et rendre certains projets plus attractifs', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le coût du capital', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les projets moins rentables', 'iscorrect' => false],
                            ['answer' => 'Elle interdit tout nouvel investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions monétaires peuvent-elles influencer le marché immobilier ?',
                        'answers' => [
                            ['answer' => 'Les taux d’emprunt influencent le coût des crédits immobiliers et donc la demande de logements', 'iscorrect' => true],
                            ['answer' => 'Les taux n’ont aucun effet sur les crédits immobiliers', 'iscorrect' => false],
                            ['answer' => 'Le marché immobilier ne dépend jamais du financement', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales fixent directement le prix de chaque logement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un resserrement monétaire peut-il ralentir la croissance à court terme ?',
                        'answers' => [
                            ['answer' => 'Des conditions financières plus strictes peuvent réduire certaines dépenses de consommation et d’investissement', 'iscorrect' => true],
                            ['answer' => 'Un resserrement augmente toujours immédiatement la production', 'iscorrect' => false],
                            ['answer' => 'Les dépenses privées augmentent toujours lorsque les taux montent', 'iscorrect' => false],
                            ['answer' => 'Les taux n’influencent jamais les dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire restrictive peut-elle contribuer à réduire l’inflation avec retard ?',
                        'answers' => [
                            ['answer' => 'La baisse progressive de la demande et des pressions sur les prix se transmet avec des délais', 'iscorrect' => true],
                            ['answer' => 'Les prix réagissent toujours instantanément', 'iscorrect' => false],
                            ['answer' => 'La politique monétaire ne touche jamais les dépenses', 'iscorrect' => false],
                            ['answer' => 'Une politique restrictive augmente toujours l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire expansionniste peut-elle être utilisée pendant une récession ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer les conditions financières et soutenir la demande lorsque l’économie est insuffisamment dynamique', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le crédit', 'iscorrect' => false],
                            ['answer' => 'Elle vise nécessairement à augmenter le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle interdit les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les effets de la politique monétaire peuvent-ils différer selon les ménages ?',
                        'answers' => [
                            ['answer' => 'Les ménages ont des structures différentes de dette, d’épargne, de revenu et de sensibilité aux taux', 'iscorrect' => true],
                            ['answer' => 'Tous les ménages ont toujours exactement les mêmes bilans', 'iscorrect' => false],
                            ['answer' => 'Les taux affectent chaque ménage de façon identique', 'iscorrect' => false],
                            ['answer' => 'Les ménages n’ont jamais d’actifs financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une baisse des taux n’entraîne-t-elle pas nécessairement une forte hausse du crédit ?',
                        'answers' => [
                            ['answer' => La demande de crédit, le risque bancaire et les conditions économiques peuvent rester faibles', 'iscorrect' => true],
                            ['answer' => 'Les taux déterminent automatiquement tous les volumes de crédit', 'iscorrect' => false],
                            ['answer' => 'Les banques doivent toujours prêter sans tenir compte du risque', 'iscorrect' => false],
                            ['answer' => 'Les ménages empruntent toujours davantage à chaque baisse de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une économie proche de la capacité maximale peut-elle réagir différemment à une stimulation monétaire ?',
                        'answers' => [
                            ['answer' => 'Une demande supplémentaire peut davantage exercer des pressions sur les prix lorsque les capacités productives sont déjà fortement utilisées', 'iscorrect' => true],
                            ['answer' => 'L’inflation devient impossible', 'iscorrect' => false],
                            ['answer' => 'La production augmente toujours sans limite', 'iscorrect' => false],
                            ['answer' => 'Les taux n’ont aucun effet lorsque le chômage est faible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les chocs d’offre compliquent-ils la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent augmenter l’inflation tout en réduisant simultanément la production', 'iscorrect' => true],
                            ['answer' => 'Ils affectent uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Ils n’ont aucun effet sur les prix', 'iscorrect' => false],
                            ['answer' => 'Ils permettent toujours de réduire l’inflation sans coût', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Système monétaire et échanges internationaux',
                'questions' => [
                    [
                        'question' => Pourquoi les taux d’intérêt domestiques peuvent-ils influencer les flux de capitaux internationaux ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs comparent les rendements attendus des actifs entre pays, en tenant compte du risque et du change', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs ignorent toujours les rendements', 'iscorrect' => false],
                            ['answer' => 'Les capitaux sont toujours immobiles', 'iscorrect' => false],
                            ['answer' => 'Les taux domestiques n’ont aucune influence sur les actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une hausse des taux peut-elle soutenir la monnaie dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les actifs domestiques plus attractifs et augmenter la demande de monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Une hausse des taux provoque toujours une dépréciation', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ne tiennent jamais compte des rendements', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est indépendant des marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation de la monnaie peut-elle augmenter le prix des importations ?',
                        'answers' => [
                            ['answer' => 'Il faut davantage de monnaie nationale pour acheter une même quantité de devise étrangère', 'iscorrect' => true],
                            ['answer' => 'Les importations deviennent automatiquement moins chères', 'iscorrect' => false],
                            ['answer' => 'Le taux de change n’affecte jamais les prix importés', 'iscorrect' => false],
                            ['answer' => 'Les fournisseurs étrangers paient toujours davantage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le taux de change est-il pertinent pour la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les mouvements de change peuvent influencer les prix importés, la demande extérieure et les conditions financières', 'iscorrect' => true],
                            ['answer' => 'Le taux de change ne concerne que les touristes', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun lien avec l’inflation', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne jamais les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’inflation domestique peut-elle influencer le taux de change réel ?',
                        'answers' => [
                            ['answer' => 'Elle modifie le niveau de prix relatif entre l’économie domestique et ses partenaires', 'iscorrect' => true],
                            ['answer' => 'L’inflation n’a aucun effet sur les prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Le taux réel dépend uniquement des réserves de change', 'iscorrect' => false],
                            ['answer' => 'Le taux de change réel est toujours constant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique monétaire restrictive peut-elle attirer certains capitaux ?',
                        'answers' => [
                            ['answer' => 'Des taux plus élevés peuvent augmenter le rendement attendu de certains actifs domestiques', 'iscorrect' => true],
                            ['answer' => 'Les taux élevés font toujours fuir tous les capitaux', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent les rendements relatifs', 'iscorrect' => false],
                            ['answer' => 'Les capitaux ne se déplacent jamais entre pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les flux internationaux peuvent-ils compliquer la conduite de la politique monétaire ?',
                        'answers' => [
                            ['answer' => 'Les mouvements de capitaux et de change peuvent modifier rapidement les conditions financières domestiques', 'iscorrect' => true],
                            ['answer' => 'Les marchés mondiaux sont toujours isolés', 'iscorrect' => false],
                            ['answer' => 'Les taux domestiques déterminent seuls tous les taux étrangers', 'iscorrect' => false],
                            ['answer' => 'Les flux internationaux n’ont aucune influence financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un pays à taux de change fixe peut-il avoir moins de liberté monétaire ?',
                        'answers' => [
                            ['answer' => 'La banque centrale doit tenir compte de la défense de la parité et des mouvements de capitaux', 'iscorrect' => true],
                            ['answer' => 'Un taux fixe donne toujours une autonomie monétaire illimitée', 'iscorrect' => false],
                            ['answer' => 'Les marchés de capitaux n’existent plus', 'iscorrect' => false],
                            ['answer' => 'Les réserves de change deviennent inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les réserves internationales peuvent-elles être utiles sous un régime de change administré ?',
                        'answers' => [
                            ['answer' => 'Elles permettent à la banque centrale de disposer de devises pour certaines interventions sur le marché des changes', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent les exportations', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent toujours une monnaie stable sans intervention', 'iscorrect' => false],
                            ['answer' => 'Elles financent automatiquement toutes les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les anticipations jouent-elles un rôle dans la valeur d’une monnaie ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs prennent en compte les rendements et les évolutions futures attendues des politiques et de l’économie', 'iscorrect' => true],
                            ['answer' => 'Les marchés de change ignorent toujours le futur', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n’ont aucun effet sur les actifs', 'iscorrect' => false],
                            ['answer' => 'Les monnaies n’ont aucun rendement relatif', 'iscorrect' => false],
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
