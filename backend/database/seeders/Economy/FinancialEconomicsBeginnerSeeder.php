<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Marchés financiers et actifs',
                'description' => 'Les notions essentielles sur les marchés financiers, les actions, les obligations, les intermédiaires et la liquidité.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle économique principal d’un marché financier ?',
                        'explanation' => 'Il facilite la rencontre entre les agents qui cherchent des financements et ceux qui souhaitent placer leur épargne en permettant l’échange d’actifs financiers.',
                        'choices' => [
                            ['choice_text' => 'Mettre en relation les agents en besoin de financement et les investisseurs', 'is_correct' => true],
                            ['choice_text' => 'Fixer les salaires de toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le risque de toute activité économique', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les banques commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action représente principalement :',
                        'explanation' => 'Une action est un titre de propriété qui donne une participation dans le capital d’une société. Ses détenteurs peuvent bénéficier de dividendes et de l’évolution du cours, sans garantie de rendement.',
                        'choices' => [
                            ['choice_text' => 'Une créance sur l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une part du capital de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un prêt à taux fixe', 'is_correct' => false],
                            ['choice_text' => 'Une dette de l’État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un investisseur achète une obligation émise par une entreprise, il devient principalement :',
                        'explanation' => 'L’obligation est un titre de créance : l’investisseur prête des fonds à l’émetteur, qui doit respecter les conditions prévues pour les intérêts et le remboursement du principal.',
                        'choices' => [
                            ['choice_text' => 'Actionnaire de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Créancier de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Salarié de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Régulateur de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux la liquidité d’un actif ?',
                        'explanation' => 'Un actif liquide peut être converti rapidement en moyens de paiement, généralement sans perte importante de valeur dans des conditions normales de marché.',
                        'choices' => [
                            ['choice_text' => 'La facilité de vendre rapidement un actif contre de la monnaie', 'is_correct' => true],
                            ['choice_text' => 'La certitude que son prix augmentera', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de risque', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’années nécessaires pour le rembourser', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur le marché primaire, que se passe-t-il principalement ?',
                        'explanation' => 'Le marché primaire concerne l’émission de nouveaux titres. Les fonds levés vont à l’émetteur, contrairement au marché secondaire où les investisseurs échangent des titres déjà émis.',
                        'choices' => [
                            ['choice_text' => 'Des titres nouvellement émis sont vendus pour lever des fonds', 'is_correct' => true],
                            ['choice_text' => 'Les investisseurs échangent uniquement des titres anciens entre eux', 'is_correct' => false],
                            ['choice_text' => 'Les banques fixent tous les prix des biens', 'is_correct' => false],
                            ['choice_text' => 'Les ménages remboursent leurs crédits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle émettre des actions ?',
                        'explanation' => 'L’émission d’actions permet à une entreprise de lever des capitaux propres auprès d’investisseurs qui obtiennent en échange une participation dans le capital.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir des fonds en échange d’une participation au capital', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un dividende fixe aux investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement ses dettes en monnaie', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute décision d’investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque qui collecte des dépôts et accorde des crédits exerce notamment une fonction de :',
                        'explanation' => 'Cette activité correspond à l’intermédiation financière : la banque collecte des ressources et contribue à les orienter vers des agents qui ont besoin de financement.',
                        'choices' => [
                            ['choice_text' => 'Production industrielle', 'is_correct' => false],
                            ['choice_text' => 'Intermédiation financière', 'is_correct' => true],
                            ['choice_text' => 'Politique commerciale', 'is_correct' => false],
                            ['choice_text' => 'Planification urbaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement une action d’une obligation ?',
                        'explanation' => 'L’action représente une propriété du capital, tandis que l’obligation représente une créance. Les revenus et les droits associés ne sont donc pas les mêmes.',
                        'choices' => [
                            ['choice_text' => 'L’action est une propriété du capital ; l’obligation est une créance', 'is_correct' => true],
                            ['choice_text' => 'L’action est toujours remboursée à une date fixe', 'is_correct' => false],
                            ['choice_text' => 'L’obligation donne toujours un droit de vote', 'is_correct' => false],
                            ['choice_text' => 'Les deux titres ont exactement les mêmes droits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un marché financier liquide est-il utile à un investisseur ?',
                        'explanation' => 'Une liquidité élevée facilite l’achat et la vente d’actifs. L’investisseur peut ainsi modifier son portefeuille ou obtenir des liquidités plus facilement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il facilite les achats et les ventes d’actifs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il garantit un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il supprime toute perte', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il empêche les entreprises de se financer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel agent est un exemple classique d’intermédiaire financier ?',
                        'explanation' => 'Une banque est un intermédiaire financier car elle facilite la circulation des ressources entre épargnants et emprunteurs et fournit plusieurs services financiers.',
                        'choices' => [
                            ['choice_text' => 'Une banque', 'is_correct' => true],
                            ['choice_text' => 'Une boulangerie', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise de transport', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise agricole', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur place toute son épargne dans une seule entreprise. Quel principe financier respecte-t-il le moins ?',
                        'explanation' => 'Concentrer tout son portefeuille sur un seul émetteur augmente l’exposition au risque spécifique. La diversification consiste au contraire à répartir les placements.',
                        'choices' => [
                            ['choice_text' => 'La diversification', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité nationale', 'is_correct' => false],
                            ['choice_text' => 'La spécialisation productive', 'is_correct' => false],
                            ['choice_text' => 'La politique monétaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque, rendement et diversification',
                'description' => 'Comprenez le rendement d’un placement, les différentes formes de risque et l’intérêt de diversifier un portefeuille.',
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Le rendement d’un investissement mesure généralement :',
                        'explanation' => 'Le rendement compare le gain ou la perte obtenu avec le montant investi. Il peut inclure des revenus comme les intérêts ou les dividendes et une variation de prix.',
                        'choices' => [
                            ['choice_text' => 'Le gain ou la perte par rapport au capital investi', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le prix d’achat', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la durée du placement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de transactions réalisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement dont les résultats futurs sont très incertains présente, toutes choses égales par ailleurs, davantage :',
                        'explanation' => 'Plus les résultats possibles sont incertains, plus le risque associé au placement est élevé.',
                        'choices' => [
                            ['choice_text' => 'De risque', 'is_correct' => true],
                            ['choice_text' => 'De liquidité garantie', 'is_correct' => false],
                            ['choice_text' => 'De capital garanti', 'is_correct' => false],
                            ['choice_text' => 'De rendement certain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple représente une diversification ?',
                        'explanation' => 'Répartir l’épargne entre plusieurs actifs et émetteurs réduit la dépendance du portefeuille à un seul placement.',
                        'choices' => [
                            ['choice_text' => 'Investir dans plusieurs entreprises et catégories d’actifs', 'is_correct' => true],
                            ['choice_text' => 'Placer 100 % de l’épargne dans une seule action', 'is_correct' => false],
                            ['choice_text' => 'Acheter plusieurs fois la même action', 'is_correct' => false],
                            ['choice_text' => 'Conserver uniquement un seul actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète une action 80 € et la revend 90 €, sans dividende. Quel est son gain en capital par action ?',
                        'explanation' => 'Le gain en capital est la différence entre le prix de vente et le prix d’achat : 90 - 80 = 10 €.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => false],
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '15 €', 'is_correct' => false],
                            ['choice_text' => '20 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille de 4 000 € gagne 200 € sur une période, sans apport ni retrait. Quel est son rendement ?',
                        'explanation' => 'Le rendement est de 200 / 4 000 = 0,05, soit 5 %.',
                        'choices' => [
                            ['choice_text' => '2,5 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire le risque spécifique ?',
                        'explanation' => 'Si les actifs ne réagissent pas tous de la même façon, un problème propre à un émetteur peut être partiellement compensé par les performances d’autres placements.',
                        'choices' => [
                            ['choice_text' => 'Parce que les risques propres à certains actifs peuvent être partiellement compensés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit que tous les actifs gagnent de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime les crises économiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle fixe les cours boursiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est correct concernant la diversification ?',
                        'explanation' => 'La diversification peut réduire certains risques propres aux entreprises ou aux actifs, mais elle ne supprime pas les risques qui affectent l’ensemble du marché.',
                        'choices' => [
                            ['choice_text' => 'Elle ne garantit pas l’absence de pertes', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tout risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige à investir dans un seul secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs ont des performances qui évoluent souvent dans des directions différentes. Les détenir ensemble peut notamment :',
                        'explanation' => 'Des évolutions moins synchronisées peuvent contribuer à stabiliser le portefeuille et à réduire certaines fluctuations globales.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines fluctuations du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Garantir un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Rendre les actifs parfaitement identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il accepter davantage de risque pour viser un rendement attendu plus élevé ?',
                        'explanation' => 'Prendre davantage de risque signifie accepter une plus grande incertitude sur le résultat. Un rendement attendu plus élevé peut constituer une compensation recherchée pour cette incertitude, sans garantie de succès.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il recherche une compensation pour l’incertitude supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que les placements risqués sont toujours liquides', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur prix est fixé par l’État', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais perdre de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est généralement une composante du rendement total d’une action ?',
                        'explanation' => 'Le rendement total d’une action peut comprendre les dividendes reçus et la variation de son cours pendant la période de détention.',
                        'choices' => [
                            ['choice_text' => 'Les dividendes éventuellement reçus', 'is_correct' => true],
                            ['choice_text' => 'Le salaire moyen de tous les salariés', 'is_correct' => false],
                            ['choice_text' => 'Le taux de TVA national', 'is_correct' => false],
                            ['choice_text' => 'La quantité de monnaie en circulation uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille est composé de 10 actifs différents plutôt que d’un seul actif. Quelle propriété est généralement plus élevée ?',
                        'explanation' => 'Avec plusieurs actifs différents, le portefeuille est généralement davantage diversifié, ce qui peut limiter l’exposition à un risque spécifique.',
                        'choices' => [
                            ['choice_text' => 'La diversification', 'is_correct' => true],
                            ['choice_text' => 'La concentration sur un seul émetteur', 'is_correct' => false],
                            ['choice_text' => 'La dépendance à un seul secteur', 'is_correct' => false],
                            ['choice_text' => 'La certitude de rendement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Obligations et taux d’intérêt',
                'description' => 'Maîtrisez les bases des obligations, des coupons, du remboursement et de la relation entre prix des obligations et taux d’intérêt.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une obligation est principalement :',
                        'explanation' => 'Une obligation est un titre de dette par lequel l’émetteur se finance auprès des investisseurs selon des conditions de remboursement et, généralement, de versement d’intérêts.',
                        'choices' => [
                            ['choice_text' => 'Un titre de créance', 'is_correct' => true],
                            ['choice_text' => 'Une part du capital', 'is_correct' => false],
                            ['choice_text' => 'Un moyen de paiement quotidien', 'is_correct' => false],
                            ['choice_text' => 'Une licence d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coupon d’une obligation correspond généralement :',
                        'explanation' => 'Le coupon représente l’intérêt versé au détenteur de l’obligation conformément aux modalités prévues lors de l’émission.',
                        'choices' => [
                            ['choice_text' => 'À un paiement d’intérêt prévu par le titre', 'is_correct' => true],
                            ['choice_text' => 'Au prix d’achat de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'À une action nouvelle', 'is_correct' => false],
                            ['choice_text' => 'Au remboursement des impôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de valeur nominale 1 000 € verse un coupon annuel de 40 €. Son taux de coupon est de :',
                        'explanation' => 'Le taux de coupon se calcule par 40 / 1 000 = 0,04, soit 4 %.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À caractéristiques comparables, si les taux d’intérêt du marché augmentent, le prix d’une obligation existante à coupon fixe tend à :',
                        'explanation' => 'Pour rester attractive face aux nouvelles obligations offrant des taux plus élevés, l’obligation ancienne à coupon fixe tend à voir son prix diminuer.',
                        'choices' => [
                            ['choice_text' => 'Augmenter', 'is_correct' => false],
                            ['choice_text' => 'Diminuer', 'is_correct' => true],
                            ['choice_text' => 'Rester toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Devenir automatiquement nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix d’une obligation à coupon fixe réagit-il aux taux d’intérêt du marché ?',
                        'explanation' => 'Les investisseurs comparent les paiements futurs de l’obligation existante aux rendements disponibles sur les nouvelles obligations. Le prix s’ajuste pour rendre le titre plus ou moins attractif.',
                        'choices' => [
                            ['choice_text' => 'Parce que les investisseurs comparent son rendement aux nouvelles conditions du marché', 'is_correct' => true],
                            ['choice_text' => 'Parce que le nominal change chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coupon est recalculé tous les jours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les obligations deviennent automatiquement des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À l’échéance d’une obligation classique, que reçoit normalement le détenteur si l’émetteur respecte ses engagements ?',
                        'explanation' => 'Le remboursement du principal ou de la valeur nominale est prévu à l’échéance, conformément aux conditions de l’obligation.',
                        'choices' => [
                            ['choice_text' => 'Le remboursement du principal prévu', 'is_correct' => true],
                            ['choice_text' => 'La totalité des bénéfices de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une part automatique de toutes les actions', 'is_correct' => false],
                            ['choice_text' => 'Un salaire mensuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation achetée 980 € est remboursée 1 000 € à l’échéance, sans tenir compte d’autres flux. Quel est le gain en capital ?',
                        'explanation' => 'La différence entre la valeur de remboursement et le prix d’achat est de 1 000 - 980 = 20 €.',
                        'choices' => [
                            ['choice_text' => '10 €', 'is_correct' => false],
                            ['choice_text' => '20 €', 'is_correct' => true],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre le risque de crédit d’une obligation ?',
                        'explanation' => 'Le risque de crédit correspond notamment à la possibilité que l’émetteur ne respecte pas ses obligations de paiement.',
                        'choices' => [
                            ['choice_text' => 'L’émetteur ne peut pas payer les intérêts ou rembourser comme prévu', 'is_correct' => true],
                            ['choice_text' => 'Le marché est ouvert plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'Le coupon prévu est reçu à la date prévue', 'is_correct' => false],
                            ['choice_text' => 'Le détenteur conserve le titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement l’obligation à taux fixe de l’action ?',
                        'explanation' => 'Le détenteur d’une obligation à taux fixe dispose de paiements contractuels déterminés selon les conditions du titre, tandis que le rendement d’une action dépend notamment du cours et des dividendes éventuels.',
                        'choices' => [
                            ['choice_text' => 'Le revenu d’une obligation à taux fixe est défini par les conditions du titre, alors que le rendement d’une action varie davantage avec l’entreprise et le marché', 'is_correct' => true],
                            ['choice_text' => 'Une action verse toujours un coupon fixe', 'is_correct' => false],
                            ['choice_text' => 'Une obligation est toujours une part de propriété', 'is_correct' => false],
                            ['choice_text' => 'Les deux instruments ont obligatoirement le même rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À caractéristiques comparables, pourquoi une obligation à long terme peut-elle être plus sensible aux variations des taux qu’une obligation à très court terme ?',
                        'explanation' => 'Plus les flux futurs sont éloignés dans le temps, plus leur valeur actuelle réagit aux variations du taux d’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses flux sont plus éloignés dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle ne verse jamais d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Parce que son nominal est toujours plus faible', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle est toujours émise par l’État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux d’intérêt représente de façon générale :',
                        'explanation' => 'Le taux d’intérêt exprime le coût d’un emprunt ou la rémunération du prêt de fonds, généralement en pourcentage sur une période.',
                        'choices' => [
                            ['choice_text' => 'Le coût ou la rémunération d’un prêt de fonds', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le prix d’une action', 'is_correct' => false],
                            ['choice_text' => 'Le montant total des impôts', 'is_correct' => false],
                            ['choice_text' => 'La valeur d’un immeuble', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valeur temporelle de l’argent et inflation',
                'description' => 'Étudiez l’actualisation, la valeur temporelle de l’argent et l’effet de l’inflation sur les rendements et le pouvoir d’achat.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi 1 000 € aujourd’hui peuvent-ils avoir plus de valeur économique que 1 000 € reçus dans un an ?',
                        'explanation' => 'L’argent disponible aujourd’hui peut être consommé ou placé immédiatement et produire éventuellement un rendement avant l’année suivante.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut être utilisé ou investi immédiatement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une somme future n’a aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’épargne est interdite à long terme', 'is_correct' => false],
                            ['choice_text' => 'Parce que les banques n’utilisent pas les euros futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un taux d’actualisation positif, la valeur actuelle d’une somme future est généralement :',
                        'explanation' => 'L’actualisation ramène un flux futur à une valeur équivalente aujourd’hui. Avec un taux positif, cette valeur est généralement inférieure au montant futur nominal.',
                        'choices' => [
                            ['choice_text' => 'Inférieure au montant futur', 'is_correct' => true],
                            ['choice_text' => 'Supérieure au montant futur', 'is_correct' => false],
                            ['choice_text' => 'Toujours exactement égale au montant futur', 'is_correct' => false],
                            ['choice_text' => 'Indépendante du taux d’actualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 100 € sont placés pendant un an à 5 % d’intérêt simple, quel montant est obtenu avant frais et impôts ?',
                        'explanation' => 'L’intérêt est de 100 × 0,05 = 5 €. Le montant final est donc 105 €.',
                        'choices' => [
                            ['choice_text' => '102 €', 'is_correct' => false],
                            ['choice_text' => '105 €', 'is_correct' => true],
                            ['choice_text' => '110 €', 'is_correct' => false],
                            ['choice_text' => '115 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne recevra 210 € dans un an. Avec un taux d’actualisation de 5 %, la valeur actuelle est approximativement :',
                        'explanation' => 'La valeur actuelle est 210 / 1,05, soit environ 200 €. L’actualisation permet de comparer un flux futur à une somme disponible aujourd’hui.',
                        'choices' => [
                            ['choice_text' => '190 €', 'is_correct' => false],
                            ['choice_text' => '200 €', 'is_correct' => true],
                            ['choice_text' => '210 €', 'is_correct' => false],
                            ['choice_text' => '220 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le rendement nominal d’un placement reste à 6 % alors que l’inflation passe de 2 % à 4 %, le rendement réel tend à :',
                        'explanation' => 'À rendement nominal inchangé, une inflation plus élevée réduit le pouvoir d’achat du rendement. En approximation simple, on passe d’environ 4 % réel à environ 2 % réel.',
                        'choices' => [
                            ['choice_text' => 'Diminuer', 'is_correct' => true],
                            ['choice_text' => 'Augmenter', 'is_correct' => false],
                            ['choice_text' => 'Rester nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Devenir automatiquement négatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une inflation de 3 % signifie, en termes simples, que :',
                        'explanation' => 'Une inflation positive signifie une hausse générale du niveau des prix. À revenu nominal inchangé, le pouvoir d’achat de la monnaie tend à diminuer.',
                        'choices' => [
                            ['choice_text' => 'Le niveau général des prix augmente en moyenne', 'is_correct' => true],
                            ['choice_text' => 'Tous les prix augmentent exactement de 3 %', 'is_correct' => false],
                            ['choice_text' => 'Les revenus réels augmentent automatiquement de 3 %', 'is_correct' => false],
                            ['choice_text' => 'Le chômage disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet le plus direct d’une inflation sur une épargne conservée en espèces sans rémunération ?',
                        'explanation' => 'Si les prix augmentent alors que le montant nominal reste inchangé, la même somme permet généralement d’acheter moins de biens et services.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du pouvoir d’achat', 'is_correct' => true],
                            ['choice_text' => 'Une hausse automatique du pouvoir d’achat', 'is_correct' => false],
                            ['choice_text' => 'Un rendement réel garanti positif', 'is_correct' => false],
                            ['choice_text' => 'Une transformation en action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement rendement nominal et rendement réel ?',
                        'explanation' => 'Le rendement nominal est exprimé avant prise en compte de l’évolution générale des prix. Le rendement réel tient compte de l’inflation afin d’évaluer le pouvoir d’achat.',
                        'choices' => [
                            ['choice_text' => 'Le rendement réel tient compte de l’inflation', 'is_correct' => true],
                            ['choice_text' => 'Le rendement nominal mesure uniquement le risque', 'is_correct' => false],
                            ['choice_text' => 'Le rendement réel ignore l’évolution des prix', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont toujours égaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’actualisation est-elle utile pour un investissement ?',
                        'explanation' => 'Elle permet de comparer des montants reçus à des dates différentes en les exprimant en valeur d’aujourd’hui.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer des flux monétaires à des dates différentes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer automatiquement le cours d’une action', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher l’inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit choisir entre recevoir 500 € maintenant ou 500 € dans un an. Avec un taux d’intérêt positif, recevoir maintenant permet notamment :',
                        'explanation' => 'Recevoir la somme immédiatement donne la possibilité de l’utiliser ou de l’investir pendant l’année, ce qui crée une valeur financière potentielle supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'De placer les fonds avant la fin de l’année', 'is_correct' => true],
                            ['choice_text' => 'De garantir un rendement nul', 'is_correct' => false],
                            ['choice_text' => 'De supprimer toute inflation', 'is_correct' => false],
                            ['choice_text' => 'D’obtenir automatiquement 500 € supplémentaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une somme de 1 100 € doit être reçue dans un an et que le taux d’actualisation est de 10 %, sa valeur actuelle est :',
                        'explanation' => 'La valeur actuelle est 1 100 / 1,10 = 1 000 €. L’actualisation réduit le montant futur à son équivalent aujourd’hui.',
                        'choices' => [
                            ['choice_text' => '900 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '1 100 €', 'is_correct' => false],
                            ['choice_text' => '1 210 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intermédiaires financiers et décisions d’investissement',
                'description' => 'Révisez le rôle des banques et autres intermédiaires, la liquidité, l’épargne et les éléments à considérer pour construire un portefeuille.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Pourquoi les banques jouent-elles un rôle important dans le financement de l’économie ?',
                        'explanation' => 'Elles facilitent la circulation des ressources financières et peuvent transformer l’épargne collectée en crédits accordés aux ménages et aux entreprises.',
                        'choices' => [
                            ['choice_text' => 'Elles contribuent à orienter des ressources vers les agents qui empruntent', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent la réussite de tous les projets', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les besoins de financement des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Elles fixent tous les prix de l’économie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement correspond à l’épargne ?',
                        'explanation' => 'Épargner consiste à ne pas consommer une partie du revenu courant. Cette somme peut ensuite rester liquide ou être placée.',
                        'choices' => [
                            ['choice_text' => 'Mettre de côté une partie du revenu au lieu de la consommer immédiatement', 'is_correct' => true],
                            ['choice_text' => 'Dépenser tout son revenu courant', 'is_correct' => false],
                            ['choice_text' => 'Emprunter pour augmenter la consommation', 'is_correct' => false],
                            ['choice_text' => 'Acheter uniquement des biens durables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage conserve une réserve facilement accessible pour faire face à une dépense imprévue. Quel objectif poursuit-il principalement ?',
                        'explanation' => 'Une réserve liquide permet de disposer rapidement de fonds lorsque des dépenses imprévues apparaissent sans devoir vendre immédiatement des actifs moins liquides.',
                        'choices' => [
                            ['choice_text' => 'Disposer de liquidités en cas de besoin', 'is_correct' => true],
                            ['choice_text' => 'Maximiser nécessairement son rendement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute inflation', 'is_correct' => false],
                            ['choice_text' => 'Garantir une hausse des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement lié au fait de devoir vendre rapidement un actif peu négocié ?',
                        'explanation' => 'Un actif peu liquide peut être difficile à vendre rapidement ou nécessiter une baisse de prix pour trouver un acheteur. Il s’agit d’un risque de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le risque d’inflation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le risque de salaire', 'is_correct' => false],
                            ['choice_text' => 'Le risque de productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un fonds détient des actions de plusieurs entreprises, quel avantage potentiel cela apporte-t-il ?',
                        'explanation' => 'La répartition entre plusieurs entreprises réduit l’impact qu’un problème propre à un seul émetteur peut avoir sur l’ensemble du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure diversification', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Une suppression totale du risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Un coupon fixe sur chaque action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel ensemble de facteurs est pertinent pour choisir un portefeuille ?',
                        'explanation' => 'Le choix d’un portefeuille doit tenir compte des objectifs de rendement, de la tolérance au risque, de l’horizon de placement et des besoins de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Rendement recherché, risque accepté, horizon et besoins de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des certificats', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre d’entreprises cotées', 'is_correct' => false],
                            ['choice_text' => 'Seulement le prix historique le plus élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur ayant besoin de son argent dans quelques mois accorde-t-il généralement de l’importance à la liquidité ?',
                        'explanation' => 'Un horizon court laisse peu de temps pour attendre une remontée éventuelle des prix. La facilité d’accès aux fonds devient donc un critère important.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut avoir besoin de convertir rapidement ses placements en monnaie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il veut supprimer toute inflation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il cherche toujours le rendement maximal', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité garantit un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une concentration excessive du portefeuille ?',
                        'explanation' => 'Un portefeuille très concentré dépend fortement de l’évolution d’un actif ou d’un petit nombre d’actifs. Un choc propre à l’un d’eux peut alors avoir un effet important.',
                        'choices' => [
                            ['choice_text' => 'Investir presque toute son épargne dans une seule entreprise', 'is_correct' => true],
                            ['choice_text' => 'Répartir l’épargne entre plusieurs secteurs', 'is_correct' => false],
                            ['choice_text' => 'Détenir plusieurs catégories d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Investir dans plusieurs émetteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage possible d’un intermédiaire financier pour un épargnant ?',
                        'explanation' => 'Les intermédiaires proposent des services de dépôt, de paiement, de crédit et de placement qui facilitent la gestion des ressources financières.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le dépôt et la mobilisation des ressources financières', 'is_correct' => true],
                            ['choice_text' => 'Garantir un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute décision financière', 'is_correct' => false],
                            ['choice_text' => 'Fixer les cours des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur veut réduire sa dépendance à un seul secteur économique. Quelle action correspond le mieux à cet objectif ?',
                        'explanation' => 'Investir dans plusieurs secteurs réduit l’exposition à un choc propre à un seul secteur, même si le risque global du marché demeure.',
                        'choices' => [
                            ['choice_text' => 'Répartir ses investissements entre plusieurs secteurs', 'is_correct' => true],
                            ['choice_text' => 'Investir uniquement dans le secteur le plus performant', 'is_correct' => false],
                            ['choice_text' => 'Acheter davantage d’actions de la même entreprise', 'is_correct' => false],
                            ['choice_text' => 'Conserver un seul titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est correct concernant l’épargne et l’investissement financier ?',
                        'explanation' => 'L’épargne correspond à la partie du revenu non consommée. Une partie de cette épargne peut être investie dans des actifs financiers pour rechercher un rendement futur.',
                        'choices' => [
                            ['choice_text' => 'Une épargne peut être placée dans des actifs financiers', 'is_correct' => true],
                            ['choice_text' => 'Toute épargne doit obligatoirement être investie en actions', 'is_correct' => false],
                            ['choice_text' => 'L’investissement financier ne peut jamais provenir d’une épargne', 'is_correct' => false],
                            ['choice_text' => 'Épargner signifie toujours emprunter', 'is_correct' => false],
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
