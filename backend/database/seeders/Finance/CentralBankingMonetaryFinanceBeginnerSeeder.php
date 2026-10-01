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

        $quizzes = [
            [
                'title' => "Rôle et fonctions d'une banque centrale",
                'description' => "Quiz consacré aux missions essentielles d'une banque centrale, à sa position dans le système financier et à ses principaux outils.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quelle fonction distingue le plus directement une banque centrale d'une banque commerciale ?",
                        'choices' => [
                            ['choice_text' => "Conduire la politique monétaire", 'is_correct' => true],
                            ['choice_text' => "Accorder principalement des crédits immobiliers aux ménages", 'is_correct' => false],
                            ['choice_text' => "Vendre des cartes bancaires aux particuliers", 'is_correct' => false],
                            ['choice_text' => "Tenir un compte courant pour chaque consommateur", 'is_correct' => false],
                        ],
                        'explanation' => "Une banque centrale conduit la politique monétaire et contribue à la stabilité monétaire et financière. Les banques commerciales proposent surtout des services aux ménages et aux entreprises, comme les dépôts et les crédits."
                    ],
                    [
                        'question' => "Une banque centrale augmente son taux directeur. Quelle évolution cherche-t-elle généralement à provoquer à court terme ?",
                        'choices' => [
                            ['choice_text' => "Un renchérissement du coût du crédit", 'is_correct' => true],
                            ['choice_text' => "Une baisse automatique de tous les impôts", 'is_correct' => false],
                            ['choice_text' => "Une suppression des réserves bancaires", 'is_correct' => false],
                            ['choice_text' => "Une hausse garantie des salaires nominaux", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse du taux directeur tend à augmenter le coût du financement dans l'économie. Elle peut donc ralentir la demande de crédit et, selon le contexte, réduire les pressions inflationnistes."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale détient-elle généralement des réserves internationales ?",
                        'choices' => [
                            ['choice_text' => "Pour renforcer sa capacité à effectuer des opérations en devises", 'is_correct' => true],
                            ['choice_text' => "Pour distribuer des primes directement aux ménages", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer tous les dépôts des banques commerciales", 'is_correct' => false],
                            ['choice_text' => "Pour financer automatiquement le budget de l'État", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves internationales, souvent constituées de devises et d'actifs liquides étrangers, peuvent servir aux paiements extérieurs et à certaines interventions sur le marché des changes. Elles ne sont pas destinées à distribuer des primes aux ménages."
                    ],
                    [
                        'question' => "Quel rôle correspond à l'expression « prêteur en dernier ressort » ?",
                        'choices' => [
                            ['choice_text' => "Fournir des liquidités d'urgence à une institution financière éligible en difficulté", 'is_correct' => true],
                            ['choice_text' => "Garantir la rentabilité de chaque banque commerciale", 'is_correct' => false],
                            ['choice_text' => "Accorder un prêt immobilier à toute personne qui en fait la demande", 'is_correct' => false],
                            ['choice_text' => "Financer sans condition toutes les dépenses publiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le prêteur en dernier ressort permet à une banque centrale de fournir des liquidités exceptionnelles dans certaines situations de tension. Cela vise notamment à limiter les risques liés à une crise de liquidité."
                    ],
                    [
                        'question' => "Laquelle de ces opérations est typiquement réalisée entre une banque centrale et les banques du système ?",
                        'choices' => [
                            ['choice_text' => "Une opération de refinancement", 'is_correct' => true],
                            ['choice_text' => "La vente de contrats de téléphonie mobile", 'is_correct' => false],
                            ['choice_text' => "La fixation des salaires des employés des banques", 'is_correct' => false],
                            ['choice_text' => "La détermination du prix de chaque produit en supermarché", 'is_correct' => false],
                        ],
                        'explanation' => "Le refinancement permet aux banques d'obtenir des liquidités auprès de la banque centrale selon les mécanismes prévus par celle-ci. Il fait partie des outils de mise en œuvre de la politique monétaire."
                    ],
                    [
                        'question' => "Une banque centrale cherche à maintenir la confiance dans la monnaie. Quel objectif est directement lié à cette mission ?",
                        'choices' => [
                            ['choice_text' => "La stabilité des prix", 'is_correct' => true],
                            ['choice_text' => "La hausse permanente du prix des actifs", 'is_correct' => false],
                            ['choice_text' => "La disparition du crédit bancaire", 'is_correct' => false],
                            ['choice_text' => "L'augmentation systématique des déficits publics", 'is_correct' => false],
                        ],
                        'explanation' => "La stabilité des prix contribue à préserver la valeur de la monnaie et la capacité des agents à prendre des décisions économiques. Dans de nombreux cadres institutionnels, elle constitue un objectif central de la banque centrale."
                    ],
                    [
                        'question' => "Que représente principalement le bilan d'une banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Ses actifs et ses passifs à une date donnée", 'is_correct' => true],
                            ['choice_text' => "Uniquement les salaires de ses employés", 'is_correct' => false],
                            ['choice_text' => "Uniquement les crédits immobiliers du pays", 'is_correct' => false],
                            ['choice_text' => "Les revenus fiscaux détaillés de chaque ménage", 'is_correct' => false],
                        ],
                        'explanation' => "Comme toute institution financière, une banque centrale présente un bilan comprenant des actifs et des passifs. Les actifs peuvent notamment inclure des titres ou des réserves, tandis que les passifs comprennent, entre autres, la monnaie centrale."
                    ],
                    [
                        'question' => "Dans une économie où l'inflation reste durablement trop élevée, quelle orientation monétaire est généralement considérée comme restrictive ?",
                        'choices' => [
                            ['choice_text' => "Relever les taux directeurs", 'is_correct' => true],
                            ['choice_text' => "Réduire les taux directeurs à zéro sans autre changement", 'is_correct' => false],
                            ['choice_text' => "Acheter systématiquement davantage de titres", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute opération de liquidité", 'is_correct' => false],
                        ],
                        'explanation' => "Une politique monétaire restrictive cherche généralement à freiner la demande et les conditions financières. Une hausse des taux directeurs est un instrument classique pour atteindre cet objectif lorsque l'inflation est jugée excessive."
                    ],
                    [
                        'question' => "Quel élément fait partie de la monnaie centrale ?",
                        'choices' => [
                            ['choice_text' => "Les réserves détenues par les banques commerciales auprès de la banque centrale", 'is_correct' => true],
                            ['choice_text' => "Toutes les actions cotées en bourse", 'is_correct' => false],
                            ['choice_text' => "Tous les prêts accordés directement par les ménages", 'is_correct' => false],
                            ['choice_text' => "Toutes les obligations émises par les entreprises", 'is_correct' => false],
                        ],
                        'explanation' => "La monnaie centrale comprend notamment les billets et pièces ainsi que les réserves des banques commerciales auprès de la banque centrale. Les actions et obligations ne font pas partie de la monnaie centrale."
                    ],
                    [
                        'question' => "Pourquoi l'indépendance d'une banque centrale est-elle souvent associée à la politique monétaire ?",
                        'choices' => [
                            ['choice_text' => "Elle peut favoriser des décisions monétaires guidées par un mandat de stabilité plutôt que par des objectifs politiques de court terme", 'is_correct' => true],
                            ['choice_text' => "Elle supprime toute influence des marchés financiers", 'is_correct' => false],
                            ['choice_text' => "Elle garantit que les taux seront toujours élevés", 'is_correct' => false],
                            ['choice_text' => "Elle empêche toute modification de la quantité de monnaie", 'is_correct' => false],
                        ],
                        'explanation' => "L'indépendance institutionnelle vise notamment à permettre une conduite de la politique monétaire cohérente avec le mandat confié à la banque centrale. Elle ne signifie pas que la banque centrale ignore les marchés ou que les taux doivent toujours être élevés."
                    ],
                ],
            ],
            [
                'title' => "Taux directeurs et politique monétaire",
                'description' => "Évaluation des notions de taux directeurs, politique monétaire expansionniste ou restrictive et transmission aux conditions de financement.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une baisse du taux directeur rend, toutes choses égales par ailleurs, le refinancement des banques auprès de la banque centrale :",
                        'choices' => [
                            ['choice_text' => "Moins coûteux", 'is_correct' => true],
                            ['choice_text' => "Toujours impossible", 'is_correct' => false],
                            ['choice_text' => "Automatiquement plus risqué", 'is_correct' => false],
                            ['choice_text' => "Indépendant du coût des liquidités", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque le taux auquel les banques peuvent se refinancer baisse, le coût de cette source de liquidité diminue, toutes choses égales par ailleurs. L'effet sur les taux de crédit dépend ensuite de la transmission dans le système financier."
                    ],
                    [
                        'question' => "Une politique monétaire expansionniste vise généralement à :",
                        'choices' => [
                            ['choice_text' => "Assouplir les conditions financières pour soutenir l'activité économique", 'is_correct' => true],
                            ['choice_text' => "Réduire systématiquement la demande globale", 'is_correct' => false],
                            ['choice_text' => "Augmenter toutes les taxes sur les transactions", 'is_correct' => false],
                            ['choice_text' => "Interdire le financement bancaire des entreprises", 'is_correct' => false],
                        ],
                        'explanation' => "Une politique expansionniste cherche généralement à soutenir l'activité en facilitant les conditions monétaires et financières. Elle peut passer par une baisse des taux directeurs ou d'autres mesures d'assouplissement."
                    ],
                    [
                        'question' => "Une banque centrale relève son taux directeur de 3 % à 4 %. De combien de points de pourcentage le taux a-t-il augmenté ?",
                        'choices' => [
                            ['choice_text' => "1 point de pourcentage", 'is_correct' => true],
                            ['choice_text' => "0,25 point de pourcentage", 'is_correct' => false],
                            ['choice_text' => "1 point de base", 'is_correct' => false],
                            ['choice_text' => "4 points de pourcentage", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux passe de 3 % à 4 %, soit une hausse de 1 point de pourcentage. En points de base, cela correspond à 100 points de base."
                    ],
                    [
                        'question' => "Une hausse des taux directeurs peut réduire la demande de crédit principalement parce que :",
                        'choices' => [
                            ['choice_text' => "Le coût de l'emprunt augmente pour les emprunteurs", 'is_correct' => true],
                            ['choice_text' => "Les dépôts bancaires disparaissent automatiquement", 'is_correct' => false],
                            ['choice_text' => "Toutes les entreprises cessent d'investir dès le lendemain", 'is_correct' => false],
                            ['choice_text' => "Les banques ne peuvent plus détenir d'actifs", 'is_correct' => false],
                        ],
                        'explanation' => "Des taux plus élevés rendent généralement les nouveaux emprunts plus coûteux. Certains ménages et entreprises peuvent alors reporter ou réduire leurs projets financés par dette."
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux la transmission monétaire ?",
                        'choices' => [
                            ['choice_text' => "Les décisions de la banque centrale influencent progressivement les taux, le crédit, la demande et l'activité économique", 'is_correct' => true],
                            ['choice_text' => "Une décision monétaire modifie instantanément tous les prix de l'économie", 'is_correct' => false],
                            ['choice_text' => "La banque centrale fixe directement tous les taux proposés aux consommateurs", 'is_correct' => false],
                            ['choice_text' => "La politique monétaire agit uniquement sur les réserves d'or", 'is_correct' => false],
                        ],
                        'explanation' => "La transmission monétaire passe par plusieurs canaux, notamment les taux d'intérêt, le crédit, les prix d'actifs et parfois le taux de change. Les effets sont progressifs et ne consistent pas à fixer directement tous les prix."
                    ],
                    [
                        'question' => "Une banque centrale veut soutenir l'économie en présence d'une faible demande et d'une inflation faible. Quelle mesure est cohérente avec une orientation expansionniste ?",
                        'choices' => [
                            ['choice_text' => "Abaisser son taux directeur, sous réserve de son cadre de politique monétaire", 'is_correct' => true],
                            ['choice_text' => "Augmenter fortement son taux directeur", 'is_correct' => false],
                            ['choice_text' => "Interdire les nouveaux prêts bancaires", 'is_correct' => false],
                            ['choice_text' => "Réduire volontairement la liquidité du système sans autre objectif", 'is_correct' => false],
                        ],
                        'explanation' => "Une baisse du taux directeur est un exemple classique d'assouplissement monétaire. Elle peut améliorer les conditions de financement et soutenir la demande, selon la réaction des banques et des agents économiques."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale communique-t-elle sur ses décisions de politique monétaire ?",
                        'choices' => [
                            ['choice_text' => "Pour aider les agents économiques à comprendre l'orientation monétaire et à former leurs anticipations", 'is_correct' => true],
                            ['choice_text' => "Pour garantir un bénéfice annuel aux banques commerciales", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer les statistiques économiques", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute variation du taux de change", 'is_correct' => false],
                        ],
                        'explanation' => "La communication aide les ménages, entreprises et investisseurs à comprendre la réaction probable de la banque centrale et peut influencer leurs anticipations. Elle complète les décisions de taux et les autres instruments."
                    ],
                    [
                        'question' => "Quelle différence simple existe entre un taux nominal et un taux réel ?",
                        'choices' => [
                            ['choice_text' => "Le taux réel tient compte de l'effet de l'inflation", 'is_correct' => true],
                            ['choice_text' => "Le taux nominal est toujours inférieur au taux réel", 'is_correct' => false],
                            ['choice_text' => "Le taux réel ne peut jamais être négatif", 'is_correct' => false],
                            ['choice_text' => "Les deux notions sont strictement identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux réel cherche à mesurer le coût ou le rendement en termes de pouvoir d'achat. Une approximation courante est : taux réel ≈ taux nominal − inflation."
                    ],
                    [
                        'question' => "Un taux directeur passe de 5,50 % à 5,00 %. La baisse est de :",
                        'choices' => [
                            ['choice_text' => "0,50 point de pourcentage", 'is_correct' => true],
                            ['choice_text' => "5 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "50 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "0,05 point de pourcentage", 'is_correct' => false],
                        ],
                        'explanation' => "La différence entre 5,50 % et 5,00 % est de 0,50 point de pourcentage, soit 50 points de base."
                    ],
                    [
                        'question' => "Lorsqu'une baisse des taux améliore les conditions de crédit, quel comportement peut en découler ?",
                        'choices' => [
                            ['choice_text' => "Une entreprise peut trouver plus intéressant de financer un investissement", 'is_correct' => true],
                            ['choice_text' => "Toutes les entreprises doivent obligatoirement investir", 'is_correct' => false],
                            ['choice_text' => "Les banques sont légalement obligées de réduire leurs fonds propres", 'is_correct' => false],
                            ['choice_text' => "Les consommateurs ne peuvent plus épargner", 'is_correct' => false],
                        ],
                        'explanation' => "Des conditions de financement plus favorables peuvent augmenter le nombre de projets dont le coût financier devient acceptable. Toutefois, les entreprises restent libres d'investir selon leurs perspectives et leurs contraintes."
                    ],
                ],
            ],
            [
                'title' => "Réserves, liquidité et opérations de refinancement",
                'description' => "Comprendre les réserves bancaires, la liquidité du système et les opérations permettant de gérer les tensions de financement.",
                'duration' => 19,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Pourquoi une banque commerciale conserve-t-elle des réserves auprès de la banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Pour régler certains paiements et répondre à ses besoins de liquidité", 'is_correct' => true],
                            ['choice_text' => "Pour remplacer tous ses crédits aux clients", 'is_correct' => false],
                            ['choice_text' => "Pour garantir une hausse de la Bourse", 'is_correct' => false],
                            ['choice_text' => "Pour transformer automatiquement les dépôts en actions", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves auprès de la banque centrale constituent un actif liquide utilisé notamment pour les règlements entre banques et la gestion des besoins de liquidité."
                    ],
                    [
                        'question' => "Une banque centrale prête 20 millions d'euros à une banque commerciale contre des actifs éligibles. Quelle est la conséquence immédiate la plus simple à représenter ?",
                        'choices' => [
                            ['choice_text' => "Les liquidités de la banque commerciale augmentent", 'is_correct' => true],
                            ['choice_text' => "Le patrimoine des ménages diminue automatiquement de 20 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "Le capital réglementaire de la banque devient automatiquement nul", 'is_correct' => false],
                            ['choice_text' => "Les réserves internationales du pays sont forcément supprimées", 'is_correct' => false],
                        ],
                        'explanation' => "Une opération de refinancement apporte de la liquidité à la banque commerciale. La banque centrale reçoit en contrepartie un actif éligible ou une sûreté selon les modalités de l'opération."
                    ],
                    [
                        'question' => "Un établissement possède 100 millions d'euros d'actifs liquides et doit faire face à 80 millions d'euros de sorties de trésorerie à court terme. Hors autres flux, quel excédent de liquidité lui reste-t-il ?",
                        'choices' => [
                            ['choice_text' => "20 millions d'euros", 'is_correct' => true],
                            ['choice_text' => "80 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "100 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "180 millions d'euros", 'is_correct' => false],
                        ],
                        'explanation' => "L'excédent se calcule par 100 − 80 = 20 millions d'euros, en supposant qu'il n'existe pas d'autres entrées ou sorties de trésorerie."
                    ],
                    [
                        'question' => "Une tension de liquidité signifie principalement qu'une institution :",
                        'choices' => [
                            ['choice_text' => "Peut avoir des difficultés à faire face à ses paiements lorsqu'ils arrivent à échéance", 'is_correct' => true],
                            ['choice_text' => "Est nécessairement insolvable", 'is_correct' => false],
                            ['choice_text' => "N'a aucun actif dans son bilan", 'is_correct' => false],
                            ['choice_text' => "A automatiquement des bénéfices négatifs", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de liquidité concerne la capacité à honorer les besoins de trésorerie au moment voulu. Une institution peut être solvable tout en rencontrant une tension de liquidité."
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux une facilité de dépôt d'une banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Elle permet généralement aux banques de placer des fonds auprès de la banque centrale selon les règles prévues", 'is_correct' => true],
                            ['choice_text' => "Elle permet aux ménages d'obtenir un crédit immobilier sans banque", 'is_correct' => false],
                            ['choice_text' => "Elle remplace le système de paiement national", 'is_correct' => false],
                            ['choice_text' => "Elle finance directement les entreprises non financières", 'is_correct' => false],
                        ],
                        'explanation' => "Une facilité de dépôt offre aux banques une possibilité de placer leurs liquidités auprès de la banque centrale. Son taux peut aussi contribuer à encadrer les taux du marché monétaire selon le cadre opérationnel."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale peut-elle exiger une garantie lorsqu'elle refinance une banque ?",
                        'choices' => [
                            ['choice_text' => "Pour réduire le risque de crédit lié à l'opération", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute création de monnaie", 'is_correct' => false],
                            ['choice_text' => "Pour garantir la croissance du PIB", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer les audits internes de la banque", 'is_correct' => false],
                        ],
                        'explanation' => "La garantie ou le collatéral fournit une protection à la banque centrale contre le risque de non-remboursement. Les actifs acceptés et les décotes appliquées dépendent des règles de la banque centrale."
                    ],
                    [
                        'question' => "Si les réserves d'une banque commerciale auprès de la banque centrale augmentent, son niveau de liquidité en monnaie centrale :",
                        'choices' => [
                            ['choice_text' => "Augmente", 'is_correct' => true],
                            ['choice_text' => "Diminue forcément", 'is_correct' => false],
                            ['choice_text' => "Reste nécessairement nul", 'is_correct' => false],
                            ['choice_text' => "Devient identique à son capital social", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves auprès de la banque centrale sont des actifs en monnaie centrale. Une hausse de ces réserves augmente donc la position de liquidité de la banque sur cette forme de monnaie."
                    ],
                    [
                        'question' => "Une banque dispose de 60 millions d'euros de réserves et en utilise 15 millions pour régler des paiements. Combien lui reste-t-il, avant autres opérations ?",
                        'choices' => [
                            ['choice_text' => "45 millions d'euros", 'is_correct' => true],
                            ['choice_text' => "75 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "15 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "30 millions d'euros", 'is_correct' => false],
                        ],
                        'explanation' => "Après l'utilisation de 15 millions, il reste 60 − 15 = 45 millions d'euros de réserves."
                    ],
                    [
                        'question' => "Quel facteur peut accroître le besoin de liquidité d'une banque commerciale ?",
                        'choices' => [
                            ['choice_text' => "Des sorties de dépôts importantes et rapides", 'is_correct' => true],
                            ['choice_text' => "Une réduction de ses paiements sortants", 'is_correct' => false],
                            ['choice_text' => "Une hausse de sa trésorerie disponible", 'is_correct' => false],
                            ['choice_text' => "Une diminution de ses remboursements dus", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque de nombreux clients retirent leurs dépôts ou transfèrent leurs fonds rapidement, la banque doit mobiliser de la liquidité pour honorer ces sorties."
                    ],
                    [
                        'question' => "Quelle affirmation est correcte concernant liquidité et solvabilité ?",
                        'choices' => [
                            ['choice_text' => "La liquidité concerne surtout la capacité à payer à temps, tandis que la solvabilité concerne la capacité à absorber durablement les pertes et à couvrir les engagements", 'is_correct' => true],
                            ['choice_text' => "Les deux notions désignent exactement la même chose", 'is_correct' => false],
                            ['choice_text' => "Une banque liquide est toujours solvable", 'is_correct' => false],
                            ['choice_text' => "La solvabilité mesure uniquement la quantité de billets détenus", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité est liée aux flux de trésorerie et à la capacité de règlement à court terme. La solvabilité renvoie plutôt à la solidité financière sur une période plus longue et à la capacité de supporter les pertes."
                    ],
                ],
            ],
            [
                'title' => "Inflation et stabilité des prix",
                'description' => "Notions fondamentales sur l'inflation, ses effets sur le pouvoir d'achat et la réaction de la politique monétaire.",
                'duration' => 21,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Que signifie une inflation de 4 % sur une période donnée ?",
                        'choices' => [
                            ['choice_text' => "Le niveau général des prix a augmenté en moyenne de 4 % sur la période mesurée", 'is_correct' => true],
                            ['choice_text' => "Tous les prix individuels ont exactement augmenté de 4 %", 'is_correct' => false],
                            ['choice_text' => "Les salaires ont obligatoirement augmenté de 4 %", 'is_correct' => false],
                            ['choice_text' => "Le PIB réel a nécessairement augmenté de 4 %", 'is_correct' => false],
                        ],
                        'explanation' => "L'inflation mesure une progression moyenne du niveau général des prix. Certains biens peuvent augmenter davantage, moins, ou même baisser."
                    ],
                    [
                        'question' => "Si le taux d'inflation est de 5 % et qu'un ménage garde un revenu nominal inchangé, son pouvoir d'achat tend à :",
                        'choices' => [
                            ['choice_text' => "Diminuer", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement de 5 %", 'is_correct' => false],
                            ['choice_text' => "Rester identique dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Devenir nul", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les prix augmentent mais que le revenu nominal ne change pas, la quantité de biens et services que le revenu permet d'acheter tend à diminuer."
                    ],
                    [
                        'question' => "Une banque centrale relève les taux afin de réduire une inflation trop forte. Quel mécanisme est cohérent avec cet objectif ?",
                        'choices' => [
                            ['choice_text' => "Des conditions de financement plus strictes peuvent ralentir la demande", 'is_correct' => true],
                            ['choice_text' => "Les taux élevés augmentent directement chaque salaire", 'is_correct' => false],
                            ['choice_text' => "Les entreprises reçoivent automatiquement davantage de subventions", 'is_correct' => false],
                            ['choice_text' => "Les prix sont légalement bloqués par la banque centrale", 'is_correct' => false],
                        ],
                        'explanation' => "Des taux plus élevés peuvent rendre les crédits plus coûteux et certaines dépenses ou certains investissements moins attractifs. Une demande moins dynamique peut contribuer à modérer les pressions sur les prix."
                    ],
                    [
                        'question' => "Lequel de ces phénomènes peut être qualifié de désinflation ?",
                        'choices' => [
                            ['choice_text' => "Une baisse du taux d'inflation, alors que les prix continuent globalement d'augmenter", 'is_correct' => true],
                            ['choice_text' => "Une baisse générale et durable de tous les prix", 'is_correct' => false],
                            ['choice_text' => "Une hausse soudaine de l'inflation", 'is_correct' => false],
                            ['choice_text' => "Une stabilité totale des prix individuels", 'is_correct' => false],
                        ],
                        'explanation' => "La désinflation signifie que le rythme de hausse des prix ralentit. Par exemple, passer d'une inflation de 6 % à 3 % correspond à une désinflation, même si le niveau des prix continue d'augmenter."
                    ],
                    [
                        'question' => "Quel indice décrit le mieux une situation de déflation ?",
                        'choices' => [
                            ['choice_text' => "Une baisse durable du niveau général des prix", 'is_correct' => true],
                            ['choice_text' => "Une hausse durable du niveau général des prix", 'is_correct' => false],
                            ['choice_text' => "Une hausse du taux directeur", 'is_correct' => false],
                            ['choice_text' => "Une augmentation des réserves bancaires", 'is_correct' => false],
                        ],
                        'explanation' => "La déflation correspond à une baisse persistante du niveau général des prix. Elle se distingue de la désinflation, qui désigne un ralentissement de l'inflation."
                    ],
                    [
                        'question' => "Un panier de biens coûte 1 000 € au début de l'année. Avec une inflation de 3 %, son coût moyen devient approximativement :",
                        'choices' => [
                            ['choice_text' => "1 030 €", 'is_correct' => true],
                            ['choice_text' => "1 003 €", 'is_correct' => false],
                            ['choice_text' => "970 €", 'is_correct' => false],
                            ['choice_text' => "1 300 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant augmente de 1 000 × 3 % = 30 €. Le nouveau coût est donc d'environ 1 030 €."
                    ],
                    [
                        'question' => "Pourquoi les anticipations d'inflation sont-elles importantes pour une banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Elles peuvent influencer les décisions de prix, de salaires, d'épargne et d'investissement", 'is_correct' => true],
                            ['choice_text' => "Elles déterminent automatiquement le niveau du PIB", 'is_correct' => false],
                            ['choice_text' => "Elles rendent les taux directeurs inutiles", 'is_correct' => false],
                            ['choice_text' => "Elles empêchent toute variation du prix des matières premières", 'is_correct' => false],
                        ],
                        'explanation' => "Les agents économiques adaptent parfois leurs contrats et décisions à l'inflation attendue. Des anticipations bien ancrées peuvent faciliter la conduite de la politique monétaire et réduire certains mécanismes auto-entretenus."
                    ],
                    [
                        'question' => "Quelle situation exerce généralement une pression désinflationniste à court terme ?",
                        'choices' => [
                            ['choice_text' => "Un ralentissement marqué de la demande globale", 'is_correct' => true],
                            ['choice_text' => "Une accélération forte et durable de la demande", 'is_correct' => false],
                            ['choice_text' => "Une hausse de tous les coûts de production", 'is_correct' => false],
                            ['choice_text' => "Une pénurie généralisée de produits sans autre changement", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque la demande ralentit fortement, les entreprises peuvent avoir moins de possibilités d'augmenter leurs prix. L'effet exact dépend toutefois de l'offre, des coûts et du contexte économique."
                    ],
                    [
                        'question' => "Si un prix passe de 200 € à 210 €, le taux d'augmentation du prix est :",
                        'choices' => [
                            ['choice_text' => "5 %", 'is_correct' => true],
                            ['choice_text' => "10 %", 'is_correct' => false],
                            ['choice_text' => "2 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                        ],
                        'explanation' => "L'augmentation est de 10 €. Rapportée au prix initial de 200 €, cela donne 10 / 200 = 5 %."
                    ],
                    [
                        'question' => "Quel objectif est généralement incompatible avec une priorité donnée à la stabilité des prix sur longue période ?",
                        'choices' => [
                            ['choice_text' => "Chercher à entretenir volontairement une inflation très élevée et durable", 'is_correct' => true],
                            ['choice_text' => "Surveiller les indicateurs de prix", 'is_correct' => false],
                            ['choice_text' => "Analyser les anticipations d'inflation", 'is_correct' => false],
                            ['choice_text' => "Adapter les instruments monétaires au contexte", 'is_correct' => false],
                        ],
                        'explanation' => "Une inflation très élevée et persistante est difficilement compatible avec la stabilité des prix. Le suivi des prix et des anticipations fait au contraire partie des éléments utiles à la conduite monétaire."
                    ],
                ],
            ],
            [
                'title' => "Masse monétaire et agrégats",
                'description' => "Repères sur la monnaie, les dépôts, la monnaie centrale et l'interprétation simple des agrégats monétaires.",
                'duration' => 20,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Lequel de ces éléments appartient généralement à la monnaie détenue par le public ?",
                        'choices' => [
                            ['choice_text' => "Les dépôts à vue utilisés pour effectuer des paiements", 'is_correct' => true],
                            ['choice_text' => "Une usine détenue par une entreprise", 'is_correct' => false],
                            ['choice_text' => "Une machine industrielle", 'is_correct' => false],
                            ['choice_text' => "Une action non liquide conservée sur plusieurs années", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépôts à vue jouent un rôle monétaire important car ils peuvent servir directement aux paiements. Les biens physiques et les actifs non monétaires ne sont pas comptés de la même manière dans les agrégats monétaires."
                    ],
                    [
                        'question' => "Quelle distinction est la plus simple entre monnaie centrale et monnaie scripturale des banques commerciales ?",
                        'choices' => [
                            ['choice_text' => "La monnaie centrale est émise par la banque centrale, tandis que les dépôts bancaires sont des engagements des banques commerciales", 'is_correct' => true],
                            ['choice_text' => "Les deux sont toujours émis par les ménages", 'is_correct' => false],
                            ['choice_text' => "La monnaie centrale ne peut jamais être utilisée pour payer", 'is_correct' => false],
                            ['choice_text' => "Les dépôts bancaires sont toujours des billets", 'is_correct' => false],
                        ],
                        'explanation' => "La monnaie centrale comprend notamment les billets et les réserves bancaires. Les dépôts bancaires, eux, représentent des engagements des banques commerciales envers leurs clients et sont largement utilisés comme moyens de paiement."
                    ],
                    [
                        'question' => "Une banque crée un dépôt de 5 000 € lorsqu'elle accorde un nouveau prêt, dans un modèle bancaire simplifié. Quel élément augmente alors directement dans le bilan de la banque ?",
                        'choices' => [
                            ['choice_text' => "Un actif de crédit et un passif de dépôt", 'is_correct' => true],
                            ['choice_text' => "Uniquement ses immobilisations", 'is_correct' => false],
                            ['choice_text' => "Uniquement ses capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Uniquement ses réserves d'or", 'is_correct' => false],
                        ],
                        'explanation' => "Dans la représentation simplifiée d'un prêt nouveau, la banque inscrit le crédit à l'actif et le dépôt correspondant au passif. Le montant est ici de 5 000 € des deux côtés, toutes choses égales par ailleurs."
                    ],
                    [
                        'question' => "Quel rôle jouent les dépôts bancaires dans le fonctionnement de l'économie ?",
                        'choices' => [
                            ['choice_text' => "Ils permettent notamment de réaliser des paiements et de conserver des liquidités", 'is_correct' => true],
                            ['choice_text' => "Ils servent uniquement à acheter des actions", 'is_correct' => false],
                            ['choice_text' => "Ils ne peuvent jamais être transférés à une autre banque", 'is_correct' => false],
                            ['choice_text' => "Ils représentent toujours du capital bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépôts bancaires sont des instruments essentiels pour les paiements et la gestion de trésorerie des agents économiques. Ils constituent cependant des passifs pour les banques, et non leurs capitaux propres."
                    ],
                    [
                        'question' => "Un agrégat monétaire est principalement utilisé pour :",
                        'choices' => [
                            ['choice_text' => "Mesurer une catégorie de liquidités ou d'actifs monétaires selon une définition donnée", 'is_correct' => true],
                            ['choice_text' => "Mesurer uniquement le PIB réel", 'is_correct' => false],
                            ['choice_text' => "Calculer automatiquement les profits des entreprises", 'is_correct' => false],
                            ['choice_text' => "Déterminer le niveau légal de tous les salaires", 'is_correct' => false],
                        ],
                        'explanation' => "Les agrégats monétaires regroupent différents actifs selon leur fonction et leur degré de liquidité, conformément à la définition retenue par l'institution statistique ou monétaire concernée."
                    ],
                    [
                        'question' => "Si les dépôts à vue d'une économie passent de 400 à 460 milliards d'euros, l'augmentation absolue est de :",
                        'choices' => [
                            ['choice_text' => "60 milliards d'euros", 'is_correct' => true],
                            ['choice_text' => "40 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "15 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "860 milliards d'euros", 'is_correct' => false],
                        ],
                        'explanation' => "L'augmentation absolue est de 460 − 400 = 60 milliards d'euros."
                    ],
                    [
                        'question' => "Le terme « vitesse de circulation de la monnaie » renvoie à l'idée que :",
                        'choices' => [
                            ['choice_text' => "Une unité monétaire peut être utilisée plusieurs fois pour effectuer des transactions sur une période", 'is_correct' => true],
                            ['choice_text' => "Chaque billet ne peut être utilisé qu'une seule fois", 'is_correct' => false],
                            ['choice_text' => "La monnaie se déplace physiquement uniquement entre banques centrales", 'is_correct' => false],
                            ['choice_text' => "La monnaie perd automatiquement sa valeur après chaque paiement", 'is_correct' => false],
                        ],
                        'explanation' => "La vitesse de circulation décrit la fréquence avec laquelle la monnaie est utilisée dans les transactions pendant une période donnée. Elle est une notion macroéconomique, pas une mesure du déplacement physique des billets."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale surveille-t-elle les agrégats monétaires même si elle ne contrôle pas mécaniquement chaque euro de dépôts ?",
                        'choices' => [
                            ['choice_text' => "Parce que les évolutions de la monnaie et du crédit apportent des informations sur les conditions financières et économiques", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les agrégats restent constants par définition", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un agrégat monétaire donne directement le taux de chômage", 'is_correct' => false],
                            ['choice_text' => "Parce que les banques commerciales ne créent jamais de dépôts", 'is_correct' => false],
                        ],
                        'explanation' => "Les agrégats monétaires et de crédit peuvent fournir des indications sur la liquidité, le financement de l'économie et les conditions monétaires. Leur interprétation se fait avec d'autres indicateurs."
                    ],
                    [
                        'question' => "Quel actif est généralement plus liquide qu'un immeuble résidentiel ?",
                        'choices' => [
                            ['choice_text' => "Un dépôt à vue", 'is_correct' => true],
                            ['choice_text' => "Un immeuble résidentiel", 'is_correct' => false],
                            ['choice_text' => "Un terrain agricole difficile à vendre", 'is_correct' => false],
                            ['choice_text' => "Une participation non cotée sans marché secondaire", 'is_correct' => false],
                        ],
                        'explanation' => "Un dépôt à vue peut être utilisé ou transféré rapidement pour régler une transaction. La vente d'un immeuble ou d'un actif peu négociable demande généralement plus de temps et de formalités."
                    ],
                    [
                        'question' => "Dans une lecture simplifiée, une forte croissance du crédit bancaire peut signaler :",
                        'choices' => [
                            ['choice_text' => "Une expansion du financement disponible dans l'économie", 'is_correct' => true],
                            ['choice_text' => "L'absence totale de risques financiers", 'is_correct' => false],
                            ['choice_text' => "Une baisse certaine de l'inflation", 'is_correct' => false],
                            ['choice_text' => "Une suppression automatique des dépôts", 'is_correct' => false],
                        ],
                        'explanation' => "Une croissance du crédit peut accroître les ressources financières disponibles pour les ménages et entreprises. Son impact dépend du contexte, de la qualité des prêts, de la demande et de l'offre de crédit."
                    ],
                ],
            ],
            [
                'title' => "Opérations d'open market",
                'description' => "Découvrir le principe des achats et ventes de titres par la banque centrale et leur effet sur la liquidité du système.",
                'duration' => 19,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une opération d'open market correspond principalement à :",
                        'choices' => [
                            ['choice_text' => "L'achat ou la vente de titres par la banque centrale sur le marché selon son cadre opérationnel", 'is_correct' => true],
                            ['choice_text' => "La vente de produits alimentaires par les banques", 'is_correct' => false],
                            ['choice_text' => "La fixation administrative du prix des actions par l'État", 'is_correct' => false],
                            ['choice_text' => "La création de sociétés publiques", 'is_correct' => false],
                        ],
                        'explanation' => "Les opérations d'open market sont des transactions sur des titres utilisées par une banque centrale pour mettre en œuvre la politique monétaire et gérer les conditions de liquidité."
                    ],
                    [
                        'question' => "Si une banque centrale achète des titres à une banque commerciale, que reçoit généralement la banque commerciale en contrepartie ?",
                        'choices' => [
                            ['choice_text' => "Des réserves ou de la liquidité en monnaie centrale", 'is_correct' => true],
                            ['choice_text' => "Des actions gratuites de toutes les entreprises cotées", 'is_correct' => false],
                            ['choice_text' => "Une réduction automatique de ses dépôts clients", 'is_correct' => false],
                            ['choice_text' => "Une exonération définitive de ses impôts", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsqu'une banque centrale achète un titre auprès d'une banque, elle règle généralement l'opération par une augmentation des réserves de la banque vendeuse. Cela accroît sa liquidité en monnaie centrale."
                    ],
                    [
                        'question' => "Dans le cas inverse, une vente de titres par la banque centrale peut généralement :",
                        'choices' => [
                            ['choice_text' => "Réduire les réserves du système bancaire lorsque les contreparties paient ces titres", 'is_correct' => true],
                            ['choice_text' => "Créer automatiquement de nouveaux dépôts sans financement", 'is_correct' => false],
                            ['choice_text' => "Augmenter toujours les salaires", 'is_correct' => false],
                            ['choice_text' => "Annuler les prêts existants", 'is_correct' => false],
                        ],
                        'explanation' => "Quand les contreparties achètent les titres et paient la banque centrale, les réserves bancaires utilisées pour le règlement peuvent diminuer. L'opération est donc susceptible de retirer de la liquidité du système."
                    ],
                    [
                        'question' => "Une banque centrale achète pour 50 millions d'euros de titres dans une opération d'open market. Dans une représentation simplifiée, les réserves bancaires augmentent de :",
                        'choices' => [
                            ['choice_text' => "50 millions d'euros", 'is_correct' => true],
                            ['choice_text' => "5 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "500 millions d'euros", 'is_correct' => false],
                            ['choice_text' => "0 euro, par définition", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une représentation simplifiée d'un achat réglé par création de réserves, un achat de 50 millions d'euros se traduit par une hausse correspondante des réserves du système bancaire, toutes choses égales par ailleurs."
                    ],
                    [
                        'question' => "Pourquoi les opérations d'open market peuvent-elles influencer les taux du marché monétaire ?",
                        'choices' => [
                            ['choice_text' => "Elles modifient la quantité de liquidité disponible dans le système bancaire", 'is_correct' => true],
                            ['choice_text' => "Elles fixent le prix de toutes les obligations d'entreprise", 'is_correct' => false],
                            ['choice_text' => "Elles déterminent directement le salaire minimum", 'is_correct' => false],
                            ['choice_text' => "Elles suppriment toutes les opérations entre banques", 'is_correct' => false],
                        ],
                        'explanation' => "En modifiant la quantité de réserves disponibles, la banque centrale peut influencer les conditions de financement à très court terme et donc les taux du marché monétaire."
                    ],
                    [
                        'question' => "Une banque centrale souhaite retirer de la liquidité du système. Quelle opération correspond le mieux à cet objectif, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Vendre des titres sur le marché", 'is_correct' => true],
                            ['choice_text' => "Acheter des titres sur le marché", 'is_correct' => false],
                            ['choice_text' => "Augmenter ses prêts aux banques sans contrepartie", 'is_correct' => false],
                            ['choice_text' => "Augmenter les dépôts des ménages", 'is_correct' => false],
                        ],
                        'explanation' => "Une vente de titres fait généralement sortir des réserves du système bancaire lorsque les titres sont payés. À l'inverse, un achat de titres tend à injecter de la liquidité."
                    ],
                    [
                        'question' => "Quelle est une différence importante entre une banque centrale et un investisseur privé lorsqu'elles achètent un titre ?",
                        'choices' => [
                            ['choice_text' => "L'objectif de la banque centrale est lié à son mandat monétaire et financier, pas seulement au rendement financier", 'is_correct' => true],
                            ['choice_text' => "La banque centrale ne possède jamais d'actifs", 'is_correct' => false],
                            ['choice_text' => "L'investisseur privé contrôle les taux directeurs", 'is_correct' => false],
                            ['choice_text' => "La banque centrale achète uniquement des actions technologiques", 'is_correct' => false],
                        ],
                        'explanation' => "Les achats de la banque centrale peuvent avoir un objectif de politique monétaire, comme la gestion de la liquidité ou l'assouplissement financier. Ils ne sont pas motivés uniquement par la recherche de rendement."
                    ],
                    [
                        'question' => "Une opération d'achat de titres par la banque centrale augmente les réserves bancaires. Quel effet est cohérent avec une politique plus accommodante ?",
                        'choices' => [
                            ['choice_text' => "Des conditions de liquidité plus abondantes", 'is_correct' => true],
                            ['choice_text' => "Une disparition mécanique des crédits", 'is_correct' => false],
                            ['choice_text' => "Une baisse automatique du capital des banques", 'is_correct' => false],
                            ['choice_text' => "Une interdiction des paiements interbancaires", 'is_correct' => false],
                        ],
                        'explanation' => "Une augmentation des réserves améliore la liquidité en monnaie centrale. Dans un cadre accommodant, cela peut contribuer à assouplir les conditions monétaires, selon le dispositif retenu."
                    ],
                    [
                        'question' => "Quel élément doit être distingué de la quantité de réserves bancaires ?",
                        'choices' => [
                            ['choice_text' => "Le capital propre de la banque", 'is_correct' => true],
                            ['choice_text' => "Les réserves bancaires en monnaie centrale", 'is_correct' => false],
                            ['choice_text' => "Les liquidités auprès de la banque centrale", 'is_correct' => false],
                            ['choice_text' => "La position de trésorerie auprès de la banque centrale", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves bancaires sont des actifs liquides détenus auprès de la banque centrale, alors que les capitaux propres représentent les ressources appartenant aux actionnaires. Les deux notions ne sont pas interchangeables."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale peut-elle utiliser des opérations d'achat de titres sans modifier directement le budget de l'État ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il s'agit d'une opération monétaire sur le bilan de la banque centrale, distincte de la politique budgétaire", 'is_correct' => true],
                            ['choice_text' => "Parce que les achats de titres sont toujours des dépenses publiques", 'is_correct' => false],
                            ['choice_text' => "Parce que la banque centrale ne tient aucun bilan", 'is_correct' => false],
                            ['choice_text' => "Parce que les titres n'ont aucune valeur comptable", 'is_correct' => false],
                        ],
                        'explanation' => "Une opération monétaire modifie le bilan de la banque centrale et les conditions financières, tandis que le budget de l'État concerne les recettes et dépenses publiques. Les deux domaines peuvent interagir, mais ils restent distincts."
                    ],
                ],
            ],
            [
                'title' => "Transmission monétaire dans l'économie",
                'description' => "Mettre en pratique les principaux canaux par lesquels une décision monétaire peut influencer les ménages, les entreprises et les marchés.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une hausse des taux réduit l'intérêt économique d'un projet d'investissement peu rentable. Cela illustre principalement le canal :",
                        'choices' => [
                            ['choice_text' => "Du coût du financement", 'is_correct' => true],
                            ['choice_text' => "Des réserves d'or des ménages", 'is_correct' => false],
                            ['choice_text' => "Des dépenses publiques locales", 'is_correct' => false],
                            ['choice_text' => "Des salaires fixés administrativement", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque le financement devient plus cher, certains projets dont la rentabilité était marginale peuvent être reportés. Le coût du capital et du crédit est donc un canal important de transmission."
                    ],
                    [
                        'question' => "Pourquoi les taux d'intérêt peuvent-ils influencer l'épargne des ménages ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une variation des taux modifie le rendement relatif de certains produits d'épargne", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un taux change directement le revenu fiscal de tous les ménages", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un taux interdit de consommer", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les ménages ont exactement le même portefeuille", 'is_correct' => false],
                        ],
                        'explanation' => "Une variation des taux modifie le rendement attendu de certains placements et le coût d'opportunité de la consommation présente. La réaction dépend néanmoins du profil de chaque ménage."
                    ],
                    [
                        'question' => "Une baisse des taux peut soutenir le marché immobilier en rendant certains emprunts plus abordables. Quel canal cela illustre-t-il ?",
                        'choices' => [
                            ['choice_text' => "Le canal du crédit et des conditions de financement", 'is_correct' => true],
                            ['choice_text' => "Le canal des exportations uniquement", 'is_correct' => false],
                            ['choice_text' => "Le canal des réserves minières", 'is_correct' => false],
                            ['choice_text' => "Le canal des dépenses militaires", 'is_correct' => false],
                        ],
                        'explanation' => "Des coûts d'emprunt plus faibles peuvent améliorer l'accessibilité financière de certains projets immobiliers et modifier la demande. L'effet dépend aussi de l'offre de logements et du comportement des banques."
                    ],
                    [
                        'question' => "Si une hausse des taux entraîne une appréciation de la monnaie nationale, quel effet peut toucher les exportateurs ?",
                        'choices' => [
                            ['choice_text' => "Leurs produits peuvent devenir relativement plus chers pour certains acheteurs étrangers", 'is_correct' => true],
                            ['choice_text' => "Leurs coûts domestiques disparaissent", 'is_correct' => false],
                            ['choice_text' => "Leurs ventes à l'étranger augmentent forcément", 'is_correct' => false],
                            ['choice_text' => "Leurs salariés sont automatiquement mieux payés", 'is_correct' => false],
                        ],
                        'explanation' => "Une monnaie plus forte peut rendre les biens nationaux plus chers en devises étrangères, toutes choses égales par ailleurs. L'effet réel dépend de la structure des coûts, de la demande et des marchés d'exportation."
                    ],
                    [
                        'question' => "Quel énoncé décrit une anticipation rationnelle de politique monétaire au sens simple du raisonnement économique ?",
                        'choices' => [
                            ['choice_text' => "Les agents utilisent l'information disponible pour former leurs anticipations, même si elles peuvent rester imparfaites", 'is_correct' => true],
                            ['choice_text' => "Les agents connaissent toujours parfaitement l'avenir", 'is_correct' => false],
                            ['choice_text' => "Les agents ignorent systématiquement les annonces de la banque centrale", 'is_correct' => false],
                            ['choice_text' => "Les ménages peuvent prévoir exactement chaque taux futur", 'is_correct' => false],
                        ],
                        'explanation' => "Dans cette approche, rationalité ne signifie pas perfection. Elle signifie que les agents utilisent l'information disponible pour former des anticipations cohérentes avec leur compréhension de l'économie."
                    ],
                    [
                        'question' => "Une banque centrale baisse les taux, mais les banques deviennent beaucoup plus prudentes et réduisent l'offre de crédit. Que montre cette situation ?",
                        'choices' => [
                            ['choice_text' => "La transmission de la politique monétaire peut être incomplète", 'is_correct' => true],
                            ['choice_text' => "La politique monétaire agit toujours instantanément", 'is_correct' => false],
                            ['choice_text' => "Les taux directeurs n'ont aucun lien avec le crédit", 'is_correct' => false],
                            ['choice_text' => "Les banques ne sont jamais concernées par la liquidité", 'is_correct' => false],
                        ],
                        'explanation' => "Une baisse du taux directeur ne garantit pas une hausse identique du crédit si les banques modifient leurs critères ou perçoivent davantage de risques. La transmission dépend du système financier et du comportement des agents."
                    ],
                    [
                        'question' => "Une baisse des taux peut encourager certaines entreprises à investir parce que :",
                        'choices' => [
                            ['choice_text' => "La valeur actualisée de certains projets peut s'améliorer lorsque le coût du financement diminue", 'is_correct' => true],
                            ['choice_text' => "Les revenus des entreprises deviennent automatiquement égaux à leurs coûts", 'is_correct' => false],
                            ['choice_text' => "Les banques ne demandent plus aucune information", 'is_correct' => false],
                            ['choice_text' => "Tous les projets deviennent automatiquement rentables", 'is_correct' => false],
                        ],
                        'explanation' => "Un coût du financement plus faible peut augmenter la valeur actualisée de certains flux futurs et rendre acceptables des projets auparavant trop coûteux. Cela ne rend pas tous les investissements rentables."
                    ],
                    [
                        'question' => "Quel canal agit lorsque la politique monétaire modifie la richesse financière perçue des ménages via les prix des actifs ?",
                        'choices' => [
                            ['choice_text' => "Le canal des prix d'actifs", 'is_correct' => true],
                            ['choice_text' => "Le canal de la réglementation comptable", 'is_correct' => false],
                            ['choice_text' => "Le canal des réserves minières", 'is_correct' => false],
                            ['choice_text' => "Le canal des dépenses douanières", 'is_correct' => false],
                        ],
                        'explanation' => "Les conditions monétaires peuvent influencer les valorisations de certains actifs financiers ou immobiliers. Ces variations peuvent ensuite modifier le patrimoine perçu et certains comportements de consommation ou d'investissement."
                    ],
                    [
                        'question' => "Pourquoi l'impact d'une décision monétaire peut-il différer entre un ménage endetté et un ménage épargnant ?",
                        'choices' => [
                            ['choice_text' => "Parce que la variation des taux n'affecte pas de la même manière le coût de la dette et le rendement de l'épargne", 'is_correct' => true],
                            ['choice_text' => "Parce que les deux ménages utilisent obligatoirement les mêmes produits financiers", 'is_correct' => false],
                            ['choice_text' => "Parce que la politique monétaire ne concerne que les entreprises", 'is_correct' => false],
                            ['choice_text' => "Parce que les taux ne changent jamais les flux financiers", 'is_correct' => false],
                        ],
                        'explanation' => "Un ménage fortement endetté peut être sensible à la hausse de ses intérêts, alors qu'un épargnant peut bénéficier de taux plus élevés sur certains placements. L'effet dépend des contrats et de la structure financière du ménage."
                    ],
                    [
                        'question' => "Quel exemple correspond à un délai de transmission de la politique monétaire ?",
                        'choices' => [
                            ['choice_text' => "Une décision de taux prise aujourd'hui influence progressivement les crédits et l'activité dans les mois suivants", 'is_correct' => true],
                            ['choice_text' => "Le PIB change exactement au même moment que le vote de la banque centrale", 'is_correct' => false],
                            ['choice_text' => "Tous les prix changent dans la minute suivant l'annonce", 'is_correct' => false],
                            ['choice_text' => "Les crédits restent toujours inchangés après une décision", 'is_correct' => false],
                        ],
                        'explanation' => "La transmission comporte des délais : les banques réajustent leurs conditions, les ménages et entreprises modifient leurs décisions, puis les effets se diffusent dans l'économie."
                    ],
                ],
            ],
            [
                'title' => "Banque centrale et marché monétaire",
                'description' => "Réviser les notions de marché monétaire, taux interbancaires, liquidité et rôle opérationnel de la banque centrale.",
                'duration' => 21,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Le marché monétaire concerne principalement :",
                        'choices' => [
                            ['choice_text' => "Les financements et placements à court terme", 'is_correct' => true],
                            ['choice_text' => "Uniquement les investissements immobiliers à vingt ans", 'is_correct' => false],
                            ['choice_text' => "Uniquement les actions de petites entreprises", 'is_correct' => false],
                            ['choice_text' => "Les achats de biens de consommation des ménages", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché monétaire regroupe les transactions et instruments de financement à court terme, notamment entre institutions financières. Il joue un rôle important dans la gestion de la liquidité."
                    ],
                    [
                        'question' => "Pourquoi une banque emprunte-t-elle sur le marché interbancaire ?",
                        'choices' => [
                            ['choice_text' => "Pour gérer un besoin temporaire de liquidité", 'is_correct' => true],
                            ['choice_text' => "Pour financer obligatoirement une acquisition immobilière", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer définitivement ses capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute réglementation", 'is_correct' => false],
                        ],
                        'explanation' => "Une banque peut connaître temporairement un déficit de liquidité tandis qu'une autre dispose d'un excédent. Le marché interbancaire facilite le transfert de liquidité entre institutions éligibles."
                    ],
                    [
                        'question' => "Si le taux interbancaire à un jour est de 4 % et celui à un an de 5 %, que peut-on constater simplement ?",
                        'choices' => [
                            ['choice_text' => "Le financement à un an porte un taux supérieur à celui à un jour dans cette observation", 'is_correct' => true],
                            ['choice_text' => "Le taux à un jour est toujours supérieur à celui à un an", 'is_correct' => false],
                            ['choice_text' => "Les deux taux sont identiques", 'is_correct' => false],
                            ['choice_text' => "Le taux à un an vaut 40 %", 'is_correct' => false],
                        ],
                        'explanation' => "La comparaison des deux valeurs montre simplement que 5 % est supérieur à 4 %. La forme de la courbe des taux dépend du niveau de risque, des anticipations et des conditions de marché."
                    ],
                    [
                        'question' => "Quel est l'intérêt d'un marché monétaire fonctionnel pour le système bancaire ?",
                        'choices' => [
                            ['choice_text' => "Faciliter la gestion des besoins et excédents de liquidité à court terme", 'is_correct' => true],
                            ['choice_text' => "Supprimer les risques de crédit", 'is_correct' => false],
                            ['choice_text' => "Garantir les bénéfices de toutes les banques", 'is_correct' => false],
                            ['choice_text' => "Remplacer toutes les obligations à long terme", 'is_correct' => false],
                        ],
                        'explanation' => "Les banques ont quotidiennement des besoins et des excédents de trésorerie. Le marché monétaire permet de les ajuster, même s'il n'élimine ni le risque de crédit ni tous les autres risques financiers."
                    ],
                    [
                        'question' => "Une banque centrale cherche à stabiliser les taux du marché monétaire autour de sa cible. Pourquoi la gestion de la liquidité est-elle importante ?",
                        'choices' => [
                            ['choice_text' => "Parce que des variations fortes de liquidité peuvent exercer une pression sur les taux à court terme", 'is_correct' => true],
                            ['choice_text' => "Parce que les banques centrales fixent directement tous les taux de crédit", 'is_correct' => false],
                            ['choice_text' => "Parce que la liquidité n'a aucun lien avec les taux", 'is_correct' => false],
                            ['choice_text' => "Parce que la liquidité mesure les bénéfices des ménages", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les réserves bancaires deviennent très abondantes ou très rares par rapport aux besoins, les conditions du marché monétaire peuvent changer. La banque centrale utilise donc ses instruments pour piloter cet environnement."
                    ],
                    [
                        'question' => "Le terme « overnight » désigne généralement un financement d'une durée :",
                        'choices' => [
                            ['choice_text' => "Très courte, typiquement jusqu'au jour ouvré suivant", 'is_correct' => true],
                            ['choice_text' => "De dix ans minimum", 'is_correct' => false],
                            ['choice_text' => "De cinquante ans", 'is_correct' => false],
                            ['choice_text' => "Indéterminée par définition", 'is_correct' => false],
                        ],
                        'explanation' => "Overnight signifie au jour le jour. Il s'agit d'une échéance très courte, particulièrement importante dans la gestion de trésorerie des institutions financières."
                    ],
                    [
                        'question' => "Si une banque a trop peu de liquidité en fin de journée, quel type de marché peut contribuer à résoudre temporairement son besoin ?",
                        'choices' => [
                            ['choice_text' => "Le marché monétaire", 'is_correct' => true],
                            ['choice_text' => "Le marché du travail uniquement", 'is_correct' => false],
                            ['choice_text' => "Le marché des biens de consommation", 'is_correct' => false],
                            ['choice_text' => "Le marché immobilier résidentiel uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché monétaire est précisément destiné aux besoins de financement et de placement à court terme. Selon les règles du système, la banque peut y rechercher les liquidités nécessaires."
                    ],
                    [
                        'question' => "Pourquoi le taux directeur peut-il servir de signal au marché monétaire ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il donne une indication sur l'orientation de la politique monétaire et influence le coût des liquidités", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il fixe le taux de chaque carte bancaire", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il représente toujours le taux de chômage", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il est égal au rendement de toutes les actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux directeur est un élément central du cadre opérationnel. Son niveau et sa trajectoire donnent au marché une information importante sur les conditions monétaires recherchées."
                    ],
                    [
                        'question' => "Une banque dispose temporairement de 30 millions d'euros excédentaires. Quel usage est le plus directement lié au marché monétaire ?",
                        'choices' => [
                            ['choice_text' => "Placer à court terme une partie de cette liquidité auprès d'une contrepartie éligible", 'is_correct' => true],
                            ['choice_text' => "Acheter obligatoirement un immeuble pour trente ans", 'is_correct' => false],
                            ['choice_text' => "Transformer la totalité de la somme en capital social", 'is_correct' => false],
                            ['choice_text' => "Distribuer la somme à tous les déposants sans transaction", 'is_correct' => false],
                        ],
                        'explanation' => "Une banque disposant d'un excédent de liquidité peut rechercher un placement de court terme. C'est l'une des fonctions essentielles du marché monétaire."
                    ],
                    [
                        'question' => "Quelle phrase est correcte concernant le marché monétaire ?",
                        'choices' => [
                            ['choice_text' => "Il est important pour le financement à court terme et la transmission de la politique monétaire", 'is_correct' => true],
                            ['choice_text' => "Il sert uniquement à financer des entreprises pendant vingt ans", 'is_correct' => false],
                            ['choice_text' => "Il concerne uniquement les ménages", 'is_correct' => false],
                            ['choice_text' => "Il ne joue aucun rôle dans la liquidité bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché monétaire permet la circulation de liquidités à court terme entre acteurs financiers et joue un rôle dans la mise en œuvre de la politique monétaire."
                    ],
                ],
            ],
            [
                'title' => "Création monétaire et crédit bancaire",
                'description' => "Comprendre le lien entre crédit bancaire, dépôts et création monétaire dans une représentation simple du système bancaire.",
                'duration' => 23,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Dans une représentation simplifiée, lorsqu'une banque accorde un prêt de 10 000 € à une entreprise, elle inscrit généralement :",
                        'choices' => [
                            ['choice_text' => "Un crédit à l'actif et un dépôt au passif", 'is_correct' => true],
                            ['choice_text' => "Un dépôt à l'actif et aucun engagement au passif", 'is_correct' => false],
                            ['choice_text' => "Uniquement une hausse des capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Uniquement une baisse de ses immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "Le prêt est un actif pour la banque car l'emprunteur doit la rembourser. Le dépôt créé pour le client est un passif de la banque envers ce client."
                    ],
                    [
                        'question' => "Pourquoi dit-on parfois que les banques créent de la monnaie lorsqu'elles accordent des crédits ?",
                        'choices' => [
                            ['choice_text' => "Parce que le prêt peut s'accompagner de la création d'un dépôt utilisable pour effectuer des paiements", 'is_correct' => true],
                            ['choice_text' => "Parce que les banques impriment légalement tous les billets", 'is_correct' => false],
                            ['choice_text' => "Parce que les banques créent de l'or physique", 'is_correct' => false],
                            ['choice_text' => "Parce que chaque prêt augmente automatiquement le capital social", 'is_correct' => false],
                        ],
                        'explanation' => "Dans le système bancaire moderne, le crédit peut créer un dépôt bancaire, qui constitue une forme de monnaie scripturale. La création et la destruction de dépôts dépendent aussi des remboursements et d'autres opérations."
                    ],
                    [
                        'question' => "Une entreprise rembourse 2 000 € de principal sur un prêt bancaire, sans considérer les intérêts. Dans une représentation simplifiée, le remboursement du principal tend à :",
                        'choices' => [
                            ['choice_text' => "Réduire le crédit à l'actif et le dépôt associé lors du règlement", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement le dépôt de 2 000 €", 'is_correct' => false],
                            ['choice_text' => "Créer un nouveau capital social de 2 000 €", 'is_correct' => false],
                            ['choice_text' => "Augmenter l'encours du prêt", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement du principal réduit l'encours du prêt. Lorsque le paiement est effectué à partir d'un dépôt, la monnaie scripturale correspondante est également détruite dans cette représentation simplifiée."
                    ],
                    [
                        'question' => "Une banque prête 50 000 € et reçoit 50 000 € de remboursement de principal quelques mois plus tard. Quelle évolution simple de l'encours du prêt observe-t-on ?",
                        'choices' => [
                            ['choice_text' => "Il revient à zéro pour ce prêt", 'is_correct' => true],
                            ['choice_text' => "Il devient 100 000 €", 'is_correct' => false],
                            ['choice_text' => "Il devient 25 000 €", 'is_correct' => false],
                            ['choice_text' => "Il reste nécessairement 50 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Si la totalité du principal de 50 000 € est remboursée, l'encours de ce prêt est ramené à zéro. Les intérêts, frais et autres éléments ne changent pas ce calcul du principal."
                    ],
                    [
                        'question' => "Quel facteur peut limiter la capacité d'une banque à développer son crédit ?",
                        'choices' => [
                            ['choice_text' => "Sa contrainte de capital, sa liquidité, la qualité de ses emprunteurs et les règles prudentielles", 'is_correct' => true],
                            ['choice_text' => "L'absence de toute demande de crédit dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Le fait que les banques n'ont aucun bilan", 'is_correct' => false],
                            ['choice_text' => "Une règle imposant exactement le même volume de crédits pour toutes les banques", 'is_correct' => false],
                        ],
                        'explanation' => "La création de dépôts par le crédit est encadrée par plusieurs contraintes : capital, liquidité, risque de crédit, exigences réglementaires, rentabilité et demande solvable."
                    ],
                    [
                        'question' => "Une banque accorde un prêt nouveau de 8 000 €. Pourquoi l'opération ne signifie-t-elle pas que la banque a gagné immédiatement 8 000 € ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un prêt est d'abord un actif à recouvrer, tandis que le dépôt créé est un passif", 'is_correct' => true],
                            ['choice_text' => "Parce que les banques n'ont pas de revenus", 'is_correct' => false],
                            ['choice_text' => "Parce que tout prêt est une perte immédiate", 'is_correct' => false],
                            ['choice_text' => "Parce que les intérêts sont déjà encaissés avant l'octroi", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant principal du prêt n'est pas un bénéfice. La banque espère percevoir des intérêts et récupérer le principal, mais elle supporte aussi des risques et des coûts."
                    ],
                    [
                        'question' => "Si la qualité moyenne des emprunteurs se dégrade fortement, une banque prudente peut :",
                        'choices' => [
                            ['choice_text' => "Resserrer ses critères d'octroi de crédit", 'is_correct' => true],
                            ['choice_text' => "Accorder automatiquement plus de prêts à tous les clients", 'is_correct' => false],
                            ['choice_text' => "Supprimer son analyse du risque", 'is_correct' => false],
                            ['choice_text' => "Augmenter la valeur de chaque dépôt par décision comptable", 'is_correct' => false],
                        ],
                        'explanation' => "Une détérioration de la qualité des emprunteurs augmente le risque de défaut. Une banque peut alors renforcer ses critères, augmenter ses marges ou réduire certains nouveaux crédits."
                    ],
                    [
                        'question' => "Quel est le rôle des réserves dans une lecture simple de la création monétaire ?",
                        'choices' => [
                            ['choice_text' => "Elles servent notamment au règlement interbancaire et à la gestion de la liquidité", 'is_correct' => true],
                            ['choice_text' => "Elles sont identiques au bénéfice de la banque", 'is_correct' => false],
                            ['choice_text' => "Elles correspondent à tous les crédits immobiliers", 'is_correct' => false],
                            ['choice_text' => "Elles remplacent les capitaux propres", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves sont de la monnaie centrale détenue par les banques auprès de la banque centrale. Elles jouent un rôle essentiel pour les règlements et la liquidité, mais ne sont pas synonymes de bénéfices ou de capital."
                    ],
                    [
                        'question' => "Une banque reçoit 3 000 € de remboursement du principal d'un prêt et utilise la somme pour réduire son besoin de refinancement. Que s'est-il passé sur l'encours du prêt concerné ?",
                        'choices' => [
                            ['choice_text' => "Il a diminué de 3 000 €", 'is_correct' => true],
                            ['choice_text' => "Il a augmenté de 3 000 €", 'is_correct' => false],
                            ['choice_text' => "Il a doublé", 'is_correct' => false],
                            ['choice_text' => "Il est devenu automatiquement négatif", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement du principal réduit directement l'encours de la dette du client. L'affectation ultérieure des fonds au refinancement concerne la gestion de liquidité de la banque."
                    ],
                    [
                        'question' => "Pourquoi une banque centrale surveille-t-elle aussi la dynamique du crédit lors de l'analyse monétaire ?",
                        'choices' => [
                            ['choice_text' => "Parce que le crédit influence la création de dépôts et le financement de l'activité", 'is_correct' => true],
                            ['choice_text' => "Parce que le crédit ne concerne que la banque centrale", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les crédits sont sans risque", 'is_correct' => false],
                            ['choice_text' => "Parce que le crédit remplace les impôts", 'is_correct' => false],
                        ],
                        'explanation' => "Le crédit bancaire est lié à la formation de dépôts et au financement des ménages et entreprises. Son évolution peut donc fournir des informations sur les conditions monétaires et l'activité économique."
                    ],
                ],
            ],
            [
                'title' => "Bilan d'une banque centrale",
                'description' => "Identifier les principales catégories d'actifs et de passifs d'une banque centrale et interpréter des variations simples de bilan.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Lequel constitue typiquement un actif de banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Des titres détenus par la banque centrale", 'is_correct' => true],
                            ['choice_text' => "Les billets en circulation en tant que passif", 'is_correct' => false],
                            ['choice_text' => "Les réserves des banques comme obligation de la banque centrale", 'is_correct' => false],
                            ['choice_text' => "Les dépôts des banques comme passif", 'is_correct' => false],
                        ],
                        'explanation' => "Les titres détenus sont des actifs de la banque centrale. Les billets en circulation et les réserves des banques sont, eux, des passifs de la banque centrale."
                    ],
                    [
                        'question' => "Dans le bilan d'une banque centrale, les réserves des banques commerciales apparaissent généralement :",
                        'choices' => [
                            ['choice_text' => "Au passif", 'is_correct' => true],
                            ['choice_text' => "À l'actif uniquement", 'is_correct' => false],
                            ['choice_text' => "Hors bilan par définition", 'is_correct' => false],
                            ['choice_text' => "Dans les capitaux propres des banques commerciales", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves sont des créances des banques commerciales sur la banque centrale. Elles constituent donc des engagements, donc des passifs, pour la banque centrale."
                    ],
                    [
                        'question' => "Une banque centrale augmente ses achats de titres et règle ces achats en créant des réserves. Quelle évolution simplifiée de son bilan peut-on attendre ?",
                        'choices' => [
                            ['choice_text' => "Les actifs de titres et les passifs de réserves augmentent", 'is_correct' => true],
                            ['choice_text' => "Seuls ses capitaux propres augmentent", 'is_correct' => false],
                            ['choice_text' => "Ses actifs diminuent automatiquement", 'is_correct' => false],
                            ['choice_text' => "Ses passifs disparaissent", 'is_correct' => false],
                        ],
                        'explanation' => "Un achat de titres augmente l'actif en titres. Si le règlement crée des réserves, le passif en réserves augmente en parallèle dans une présentation simplifiée du bilan."
                    ],
                    [
                        'question' => "Une banque centrale détient 300 milliards d'euros de réserves de change et 200 milliards de titres. Hors autres postes, ses actifs s'élèvent à :",
                        'choices' => [
                            ['choice_text' => "500 milliards d'euros", 'is_correct' => true],
                            ['choice_text' => "100 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "300 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "600 milliards d'euros", 'is_correct' => false],
                        ],
                        'explanation' => "En additionnant les deux catégories : 300 + 200 = 500 milliards d'euros, en supposant qu'il n'existe aucun autre actif."
                    ],
                    [
                        'question' => "Pourquoi les billets en circulation sont-ils considérés comme un passif d'une banque centrale ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'ils représentent une obligation monétaire émise par la banque centrale", 'is_correct' => true],
                            ['choice_text' => "Parce qu'ils sont des machines détenues par la banque centrale", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils représentent les bénéfices non distribués", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils sont toujours des actifs des ménages dans le bilan de la banque centrale", 'is_correct' => false],
                        ],
                        'explanation' => "Dans le bilan de l'émetteur, les billets en circulation figurent comme un passif. Ils représentent de la monnaie émise par la banque centrale et détenue par le public."
                    ],
                    [
                        'question' => "Si les réserves bancaires auprès de la banque centrale augmentent de 10 milliards d'euros sans autre changement, le passif de la banque centrale augmente de :",
                        'choices' => [
                            ['choice_text' => "10 milliards d'euros", 'is_correct' => true],
                            ['choice_text' => "1 milliard d'euros", 'is_correct' => false],
                            ['choice_text' => "100 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "0 euro", 'is_correct' => false],
                        ],
                        'explanation' => "Les réserves des banques sont un passif pour la banque centrale. Une hausse de 10 milliards augmente donc ce poste de 10 milliards, toutes choses égales par ailleurs."
                    ],
                    [
                        'question' => "Quel lien comptable doit être respecté par un bilan de banque centrale équilibré ?",
                        'choices' => [
                            ['choice_text' => "Total des actifs = total des passifs + capitaux propres", 'is_correct' => true],
                            ['choice_text' => "Total des actifs = uniquement les réserves", 'is_correct' => false],
                            ['choice_text' => "Total des passifs = toujours zéro", 'is_correct' => false],
                            ['choice_text' => "Capitaux propres = total des crédits aux ménages", 'is_correct' => false],
                        ],
                        'explanation' => "Comme pour tout bilan comptable, l'égalité fondamentale est Actifs = Passifs + Capitaux propres. Le détail des postes dépend de la structure spécifique de la banque centrale."
                    ],
                    [
                        'question' => "Une banque centrale reçoit le remboursement d'un prêt accordé à une banque commerciale. Quel effet simplifié peut avoir cette opération sur son bilan ?",
                        'choices' => [
                            ['choice_text' => "L'actif de prêt diminue et un passif de réserves peut également diminuer lors du règlement", 'is_correct' => true],
                            ['choice_text' => "Ses actifs augmentent automatiquement de deux fois le remboursement", 'is_correct' => false],
                            ['choice_text' => "Ses capitaux propres deviennent immédiatement nuls", 'is_correct' => false],
                            ['choice_text' => "Les billets en circulation doublent", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement réduit le poste de prêt à l'actif. Si le règlement est effectué par une diminution des réserves de la banque emprunteuse, le passif correspondant peut diminuer également."
                    ],
                    [
                        'question' => "Pourquoi le bilan d'une banque centrale est-il suivi par les économistes ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il renseigne sur la composition de ses actifs, ses engagements et certaines opérations monétaires", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il donne directement le salaire de chaque citoyen", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il remplace les comptes nationaux", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il fixe automatiquement tous les prix", 'is_correct' => false],
                        ],
                        'explanation' => "Le bilan montre comment la banque centrale met en œuvre certaines opérations et comment évoluent ses principaux actifs et passifs. Il constitue donc une source d'information importante pour l'analyse monétaire."
                    ],
                    [
                        'question' => "Une banque centrale détient 120 milliards d'euros de titres et 80 milliards de réserves de change. Ses actifs listés ci-dessus totalisent :",
                        'choices' => [
                            ['choice_text' => "200 milliards d'euros", 'is_correct' => true],
                            ['choice_text' => "40 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "96 milliards d'euros", 'is_correct' => false],
                            ['choice_text' => "240 milliards d'euros", 'is_correct' => false],
                        ],
                        'explanation' => "Le total est 120 + 80 = 200 milliards d'euros. On additionne simplement les deux postes d'actif indiqués."
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
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
