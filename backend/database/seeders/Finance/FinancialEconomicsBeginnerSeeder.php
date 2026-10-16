<?php

namespace Database\Seeders;

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

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 18, 'passing_score' => 50],
            ['duration' => 19, 'passing_score' => 60],
            ['duration' => 23, 'passing_score' => 55],
            ['duration' => 21, 'passing_score' => 55],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 55],
            ['duration' => 27, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Fondamentaux de l\'économie financière',
                'description' => 'Un quiz d\'introduction pour comprendre le rôle des marchés, des taux, du risque et des décisions financières.',
                'questions' => [
                    [
                        'question' => 'Quel problème fondamental l\'économie financière cherche-t-elle notamment à traiter ?',
                        'explanation' => 'L\'économie financière étudie notamment la manière dont l\'épargne et le capital sont orientés vers différents projets et actifs malgré des ressources, des informations et une capacité de financement limitées.',
                        'choices' => [
                            ['choice_text' => 'Comment allouer des ressources financières limitées entre différents usages', 'is_correct' => true],
                            ['choice_text' => 'Comment répartir les richesses de manière égale entre les ménages d\'un pays', 'is_correct' => false],
                            ['choice_text' => 'Comment enregistrer les opérations d\'une entreprise dans ses comptes annuels', 'is_correct' => false],
                            ['choice_text' => 'Comment prévoir avec certitude l\'évolution des cours boursiers à venir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit entre deux projets ayant le même coût initial. Le projet A offre un flux de trésorerie plus précoce que le projet B, toutes choses égales par ailleurs. Pourquoi le projet A peut-il avoir davantage de valeur ?',
                        'explanation' => 'La valeur temporelle de l\'argent signifie qu\'une somme disponible aujourd\'hui peut être placée, consommée ou réinvestie. À conditions comparables, recevoir un flux plus tôt peut donc augmenter sa valeur économique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un flux reçu plus tôt peut être investi ou utilisé plus longtemps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'un flux plus précoce augmente le montant nominal total que le projet rapporte', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un flux reçu plus tôt supprime le risque de défaut lié au projet', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'entreprise doit payer moins d\'impôts sur un flux reçu plus tôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux le rôle d\'un marché financier ?',
                        'explanation' => 'Les marchés financiers facilitent le transfert de fonds et l\'échange de titres entre différents participants. Ils ne garantissent ni la rentabilité des entreprises ni l\'absence de risque.',
                        'choices' => [
                            ['choice_text' => 'Fixer les cours des actifs par décision des autorités de régulation afin de stabiliser l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Prêter aux entreprises en créant de la monnaie à la place des banques commerciales et des investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Mettre en relation des agents qui disposent de fonds avec ceux qui cherchent un financement ou souhaitent échanger des actifs', 'is_correct' => true],
                            ['choice_text' => 'Assurer aux épargnants le remboursement de leurs titres en cas de faillite de l\'entreprise émettrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur demande-t-il généralement une rémunération plus élevée lorsqu\'il accepte davantage de risque ?',
                        'explanation' => 'Un actif plus risqué produit des résultats futurs moins certains. Dans les modèles financiers, les investisseurs peuvent donc exiger une prime de risque pour accepter cette incertitude supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'Parce que le risque fait mécaniquement progresser la valeur finale du placement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il renonce à une partie de la certitude sur les résultats futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les frais de gestion sont proportionnels au niveau de risque de l\'actif', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réglementation impose un taux minimal sur les placements risqués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse générale et durable du niveau des prix correspond à :',
                        'explanation' => 'L\'inflation désigne une hausse générale et persistante du niveau des prix. Elle réduit, à pouvoir d\'achat nominal inchangé, la quantité de biens et services qu\'une somme permet d\'acheter.',
                        'choices' => [
                            ['choice_text' => 'L\'inflation', 'is_correct' => true],
                            ['choice_text' => 'La déflation automatique des actifs financiers', 'is_correct' => false],
                            ['choice_text' => 'La diversification', 'is_correct' => false],
                            ['choice_text' => 'La capitalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet le plus directement de comparer le rendement obtenu sur un investissement avec le capital investi ?',
                        'explanation' => 'Le taux de rendement exprime le gain ou la perte par rapport au montant engagé, ce qui facilite la comparaison entre des investissements de tailles différentes.',
                        'choices' => [
                            ['choice_text' => 'Le nombre d\'actions en circulation', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rendement', 'is_correct' => true],
                            ['choice_text' => 'La durée légale d\'un contrat', 'is_correct' => false],
                            ['choice_text' => 'Le volume de production physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société possède un projet rentable mais n\'a pas assez de liquidités pour le financer immédiatement. Quelle fonction du système financier devient particulièrement importante ?',
                        'explanation' => 'Le système financier permet notamment de canaliser l\'épargne disponible vers des agents qui ont des besoins de financement, par l\'intermédiaire de banques ou de marchés.',
                        'choices' => [
                            ['choice_text' => 'La redistribution des bénéfices des entreprises entre leurs salariés', 'is_correct' => false],
                            ['choice_text' => 'La stabilisation des prix des biens de consommation courante', 'is_correct' => false],
                            ['choice_text' => 'La mobilisation de l\'épargne vers le financement de l\'investissement', 'is_correct' => true],
                            ['choice_text' => 'La comptabilisation des investissements passés dans le bilan de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces exemples représente le mieux un coût d\'opportunité financier ?',
                        'explanation' => 'Le coût d\'opportunité correspond à la meilleure alternative abandonnée. Choisir un placement signifie donc renoncer, au moins potentiellement, aux avantages d\'un autre usage du capital.',
                        'choices' => [
                            ['choice_text' => 'Payer 200 € de frais de dossier pour obtenir un prêt immobilier, soit un coût supporté directement par l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Perdre 10 % de la valeur d\'une action détenue en portefeuille après une baisse de son cours en bourse', 'is_correct' => false],
                            ['choice_text' => 'Placer 10 000 € sur un compte peu rémunéré signifie renoncer au rendement potentiel d\'un autre placement comparable', 'is_correct' => true],
                            ['choice_text' => 'Rembourser un emprunt de 10 000 € en payant les intérêts prévus par le contrat de crédit signé avec la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'un taux d\'intérêt augmente, quelle conséquence est généralement attendue pour la demande de financement, toutes choses égales par ailleurs ?',
                        'explanation' => 'Un taux d\'intérêt plus élevé renchérit généralement le coût d\'un emprunt. Certains ménages ou entreprises peuvent alors reporter ou réduire leurs projets financés à crédit.',
                        'choices' => [
                            ['choice_text' => 'Le coût de l\'emprunt diminue, ce qui peut accroître la demande de nouveaux financements', 'is_correct' => false],
                            ['choice_text' => 'Le coût de l\'emprunt augmente, ce qui peut réduire la demande de nouveaux financements', 'is_correct' => true],
                            ['choice_text' => 'Le rendement de l\'épargne baisse, ce qui conduit les ménages à emprunter davantage', 'is_correct' => false],
                            ['choice_text' => 'Le prix des actifs financiers augmente, ce qui encourage les entreprises à emprunter davantage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire le risque d\'un portefeuille ?',
                        'explanation' => 'Lorsque les rendements des actifs ne sont pas parfaitement corrélés, leurs variations peuvent partiellement se compenser. La diversification réduit ainsi une partie du risque spécifique.',
                        'choices' => [
                            ['choice_text' => 'Parce que les performances de plusieurs actifs ne varient pas nécessairement de la même manière', 'is_correct' => true],
                            ['choice_text' => 'Parce que détenir plus d\'actifs augmente mécaniquement le rendement moyen de chacun d\'entre eux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle protège entièrement le portefeuille contre les chocs qui touchent l\'ensemble de l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Parce que détenir plusieurs actifs réduit les frais de transaction supportés par l\'investisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse des intérêts fixes alors que l\'inflation augmente fortement. Quel risque apparaît pour l\'investisseur ?',
                        'explanation' => 'Le rendement réel tient compte de la variation du niveau des prix. Une inflation élevée peut donc réduire le pouvoir d\'achat des intérêts et du remboursement reçu par l\'investisseur.',
                        'choices' => [
                            ['choice_text' => 'Son capital est réévalué à l\'échéance pour suivre l\'évolution du niveau des prix', 'is_correct' => false],
                            ['choice_text' => 'Son rendement réel peut diminuer si les prix augmentent plus vite que les revenus reçus', 'is_correct' => true],
                            ['choice_text' => 'Son rendement nominal diminue parce que le coupon fixe est réduit par l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Son rendement réel augmente parce que les intérêts fixes deviennent plus élevés en euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel acteur peut être à la fois épargnant et investisseur sur les marchés financiers ?',
                        'explanation' => 'Un ménage peut épargner puis investir cette épargne dans des actions, obligations, fonds ou autres actifs. Les ménages sont donc eux aussi des participants aux marchés financiers.',
                        'choices' => [
                            ['choice_text' => 'Un ménage qui conserve son épargne en billets à son domicile et ne la place pas sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise qui emprunte en permanence et n\'a pas de trésorerie à placer sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'Un salarié qui dépense son revenu en consommation courante au fur et à mesure qu\'il le reçoit', 'is_correct' => false],
                            ['choice_text' => 'Un ménage qui place une partie de son épargne dans des titres financiers', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valeur temporelle de l\'argent et capitalisation',
                'description' => 'Maîtrisez les principes de valeur actuelle, valeur future, intérêts composés et actualisation à travers des situations simples.',
                'questions' => [
                    [
                        'question' => 'Vous disposez de 1 000 € aujourd\'hui et pouvez obtenir un taux annuel de 5 %. Quelle est la valeur future après un an ?',
                        'explanation' => 'Avec un rendement annuel de 5 %, la valeur future est 1 000 × 1,05 = 1 050 €. L\'intérêt gagné pendant l\'année est donc de 50 €.',
                        'choices' => [
                            ['choice_text' => '1 050 €', 'is_correct' => true],
                            ['choice_text' => '1 005 €', 'is_correct' => false],
                            ['choice_text' => '950 €', 'is_correct' => false],
                            ['choice_text' => '1 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'effet principal des intérêts composés ?',
                        'explanation' => 'Avec la capitalisation composée, les intérêts sont ajoutés au capital et participent ensuite au calcul des intérêts des périodes suivantes. La croissance devient donc cumulative.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts sont calculés chaque année sur le seul capital de départ', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'intérêt est relevé à chaque période en fonction de l\'inflation', 'is_correct' => false],
                            ['choice_text' => 'Le capital est remboursé progressivement à chaque échéance du placement', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts déjà accumulés peuvent eux-mêmes produire des intérêts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel montant doit-on placer aujourd\'hui à 10 % pendant un an pour obtenir 1 100 € dans un an ?',
                        'explanation' => 'La valeur actuelle est 1 100 / 1,10 = 1 000 €. À ce taux, 1 000 € placés aujourd\'hui deviennent exactement 1 100 € après un an.',
                        'choices' => [
                            ['choice_text' => '990 €', 'is_correct' => false],
                            ['choice_text' => '1 010 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '900 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi actualise-t-on un flux futur dans une décision financière ?',
                        'explanation' => 'L\'actualisation ramène des montants futurs à une valeur présente. Le taux utilisé reflète notamment le coût du temps, le risque et le rendement exigé selon le modèle retenu.',
                        'choices' => [
                            ['choice_text' => 'Pour calculer le montant que l\'investisseur obtiendra à l\'échéance en capitalisant les intérêts perçus', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer le bénéfice comptable que le projet dégagera chaque année après impôt', 'is_correct' => false],
                            ['choice_text' => 'Pour exprimer sa valeur en équivalent aujourd\'hui en tenant compte du coût du temps et du rendement exigé', 'is_correct' => true],
                            ['choice_text' => 'Pour retirer du flux futur l\'effet de l\'inflation sans tenir compte du risque ni du rendement exigé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux d\'actualisation constant, quelle affirmation est correcte ?',
                        'explanation' => 'Avec un taux positif, un même montant reçu plus tard doit être davantage actualisé. Son équivalent présent diminue donc lorsque la date du flux s\'éloigne.',
                        'choices' => [
                            ['choice_text' => 'Plus un flux est éloigné dans le temps, plus sa valeur actuelle est élevée', 'is_correct' => false],
                            ['choice_text' => 'Un flux éloigné perd de la valeur dès que l\'inflation devient supérieure au taux d\'actualisation', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle d\'un flux dépend de son montant nominal mais pas de sa date de réception', 'is_correct' => false],
                            ['choice_text' => 'Plus un flux est éloigné dans le temps, plus sa valeur actuelle est faible', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque crédite des intérêts sur un compte puis calcule les intérêts suivants sur le nouveau solde. Quel mécanisme est utilisé ?',
                        'explanation' => 'Les intérêts déjà crédités restent dans le solde et produisent eux-mêmes des intérêts lors des périodes suivantes. C\'est le principe de la capitalisation composée.',
                        'choices' => [
                            ['choice_text' => 'L\'intérêt simple', 'is_correct' => false],
                            ['choice_text' => 'L\'actualisation des flux', 'is_correct' => false],
                            ['choice_text' => 'La capitalisation composée', 'is_correct' => true],
                            ['choice_text' => 'L\'amortissement linéaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux projets offrent le même flux de 5 000 €, mais le premier le verse dans un an et le second dans trois ans. Sans autre différence, lequel a la plus grande valeur actuelle à taux positif ?',
                        'explanation' => 'À taux positif, le flux reçu dans un an est moins longtemps actualisé que celui reçu dans trois ans. Il possède donc une valeur actuelle plus élevée, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Le projet qui verse 5 000 € dans un an', 'is_correct' => true],
                            ['choice_text' => 'Le projet qui verse 5 000 € dans trois ans', 'is_correct' => false],
                            ['choice_text' => 'Les deux, puisque le montant nominal versé est le même', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas conclure sans connaître l\'inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement augmente la valeur future d\'un capital donné, toutes choses égales par ailleurs ?',
                        'explanation' => 'À durée et capital initial constants, un taux de rendement plus élevé entraîne davantage d\'intérêts et donc une valeur future plus importante.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du nombre de périodes de placement', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du capital initial', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des frais prélevés sur le placement', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du taux de rendement obtenu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une somme de 2 000 € est investie pendant deux ans à 5 % par an avec capitalisation composée. Quelle est approximativement sa valeur finale ?',
                        'explanation' => 'La valeur finale est 2 000 × 1,05² = 2 205 €. Le deuxième intérêt porte donc aussi sur les 100 € d\'intérêts accumulés la première année.',
                        'choices' => [
                            ['choice_text' => '2 205 €', 'is_correct' => true],
                            ['choice_text' => '2 100 €', 'is_correct' => false],
                            ['choice_text' => '2 500 €', 'is_correct' => false],
                            ['choice_text' => '1 805 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une comparaison financière, pourquoi faut-il éviter de comparer directement un montant reçu aujourd\'hui avec un montant identique reçu dans cinq ans ?',
                        'explanation' => 'La valeur temporelle de l\'argent impose de tenir compte du moment où les fonds sont disponibles. L\'actualisation permet de rendre les flux comparables sur une même base temporelle.',
                        'choices' => [
                            ['choice_text' => 'Parce que les deux montants n\'ont pas la même valeur économique dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'un montant reçu dans cinq ans est exprimé dans une autre monnaie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant reçu aujourd\'hui est imposé plus fortement que le montant futur', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'inflation réduit mécaniquement le montant futur de moitié sur cinq ans', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux d\'intérêt, inflation et rendement réel',
                'description' => 'Interprétez les taux nominaux et réels et comprenez les effets économiques de l\'inflation sur l\'épargne et l\'investissement.',
                'questions' => [
                    [
                        'question' => 'Un placement rapporte 8 % sur l\'année alors que l\'inflation est de 3 %. Son rendement réel est approximativement de :',
                        'explanation' => 'Pour une approximation simple, le rendement réel est le rendement nominal moins l\'inflation : 8 % - 3 % = 5 %. La formule exacte utilise un ratio, mais l\'écart est ici faible.',
                        'choices' => [
                            ['choice_text' => '11 %', 'is_correct' => false],
                            ['choice_text' => '24 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '3 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure principalement un taux d\'intérêt réel ?',
                        'explanation' => 'Le taux réel cherche à mesurer le rendement en termes de pouvoir d\'achat, en corrigeant le taux nominal de l\'effet de l\'inflation.',
                        'choices' => [
                            ['choice_text' => 'Le rendement ou coût d\'un financement avant déduction des impôts et des frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Le taux fixé par la banque centrale pour refinancer les banques commerciales', 'is_correct' => false],
                            ['choice_text' => 'Le rendement ou coût d\'un financement après prise en compte de l\'évolution des prix', 'is_correct' => true],
                            ['choice_text' => 'Le rendement moyen observé sur un portefeuille diversifié sur une longue période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne laisse son épargne sur un compte rémunéré à 2 % alors que l\'inflation atteint 5 %. Que peut-on en déduire ?',
                        'explanation' => 'Avec 2 % de rendement nominal et 5 % d\'inflation, l\'approximation du rendement réel est -3 %. Le pouvoir d\'achat associé à l\'épargne diminue donc.',
                        'choices' => [
                            ['choice_text' => 'Le rendement réel est de 7 % : il s\'obtient en additionnant les deux taux', 'is_correct' => false],
                            ['choice_text' => 'Le rendement réel est positif puisque le taux nominal est supérieur à zéro', 'is_correct' => false],
                            ['choice_text' => 'Le rendement nominal est négatif en approximation simple', 'is_correct' => false],
                            ['choice_text' => 'Le rendement réel est négatif en approximation simple', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux d\'intérêt peut-elle freiner certains investissements des entreprises ?',
                        'explanation' => 'Des taux plus élevés renchérissent généralement la dette et peuvent aussi augmenter le taux d\'actualisation utilisé pour évaluer les projets. Certains investissements deviennent alors moins intéressants.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le coût de la dette, ce qui rend davantage de projets attractifs pour les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Elle impose aux entreprises de rembourser sans délai les dettes qu\'elles ont déjà contractées', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente le coût du financement et peut rendre certains projets moins attractifs', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit la rémunération de l\'épargne, ce qui prive les entreprises de financements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre le mieux une hausse du taux réel supporté par un emprunteur ?',
                        'explanation' => 'À taux nominal constant, une inflation plus faible signifie que le coût réel du remboursement est plus élevé. Le pouvoir d\'achat des montants remboursés est alors davantage préservé.',
                        'choices' => [
                            ['choice_text' => 'Le taux nominal baisse exactement au même rythme que l\'inflation', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'emprunt reste identique mais l\'inflation augmente fortement', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'emprunt baisse alors que l\'inflation reste stable', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'emprunt reste identique mais l\'inflation diminue fortement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une inflation inattendue peut pénaliser un créancier qui a accordé un prêt à taux fixe. Pourquoi ?',
                        'explanation' => 'Lorsque le taux est fixe, le créancier reçoit des montants nominaux déterminés. Une inflation plus forte que prévu réduit la quantité de biens et services que ces montants permettent d\'acheter.',
                        'choices' => [
                            ['choice_text' => 'Le taux d\'intérêt du prêt est révisé à la baisse pour suivre l\'inflation', 'is_correct' => false],
                            ['choice_text' => 'Les remboursements reçus sont inférieurs en valeur nominale au montant prévu', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts versés sont imposés plus lourdement lorsque les prix augmentent', 'is_correct' => false],
                            ['choice_text' => 'Les remboursements reçus ont un pouvoir d\'achat plus faible que prévu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque propose deux crédits identiques sauf pour le taux : 4 % et 7 %. En l\'absence d\'autres frais, quel crédit a le coût d\'intérêt nominal le plus élevé pour l\'emprunteur ?',
                        'explanation' => 'À montant emprunté et durée identiques, un taux nominal de 7 % implique davantage d\'intérêts nominaux qu\'un taux de 4 %, en supposant des modalités identiques.',
                        'choices' => [
                            ['choice_text' => 'Celui à 4 %', 'is_correct' => false],
                            ['choice_text' => 'Celui à 7 %', 'is_correct' => true],
                            ['choice_text' => 'Les deux, à coût égal', 'is_correct' => false],
                            ['choice_text' => 'Celui à la mensualité la plus faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison entre taux nominal et taux réel est-elle utile à un épargnant ?',
                        'explanation' => 'Un rendement nominal positif peut être inférieur à l\'inflation. La comparaison permet donc de voir si l\'investissement augmente réellement le pouvoir d\'achat, au moins en première approximation.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle permet de prévoir précisément le niveau de l\'inflation sur l\'année suivante', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle indique si le rendement protège ou érode approximativement le pouvoir d\'achat', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle montre si l\'émetteur du placement risque de ne pas honorer ses paiements', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle donne le rendement exact après impôts et frais de gestion du placement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse 60 € d\'intérêt annuel sur une valeur nominale de 1 000 €. Quel est son taux de coupon nominal ?',
                        'explanation' => 'Le taux de coupon est 60 / 1 000 = 6 %. Il s\'agit du taux nominal appliqué à la valeur nominale de l\'obligation.',
                        'choices' => [
                            ['choice_text' => '16,67 %', 'is_correct' => false],
                            ['choice_text' => '0,6 %', 'is_correct' => false],
                            ['choice_text' => '6 %', 'is_correct' => true],
                            ['choice_text' => '60 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une inflation élevée réduit-elle nécessairement tous les rendements financiers nominaux ?',
                        'explanation' => 'L\'inflation influence l\'environnement financier, mais elle ne détermine pas mécaniquement le rendement nominal de chaque actif. Les anticipations, les primes de risque et les conditions de marché jouent aussi un rôle.',
                        'choices' => [
                            ['choice_text' => 'Oui : le niveau général des prix détermine directement le rendement nominal de chaque placement', 'is_correct' => false],
                            ['choice_text' => 'Non : les rendements nominaux peuvent évoluer différemment selon les actifs et les conditions de marché', 'is_correct' => true],
                            ['choice_text' => 'Non : seuls les rendements réels peuvent changer, les rendements nominaux restent fixes', 'is_correct' => false],
                            ['choice_text' => 'Non : l\'inflation concerne les salaires et les prix des biens, pas les marchés financiers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque, rendement et valorisation des actifs',
                'description' => 'Appliquez les notions de rendement attendu, prime de risque, diversification et relation entre risque et valeur d\'un actif.',
                'questions' => [
                    [
                        'question' => 'Un actif coûte 100 € aujourd\'hui et sa valeur passe à 108 € sans versement intermédiaire. Quel est son rendement sur la période ?',
                        'explanation' => 'Le rendement est (108 - 100) / 100 = 8 %. La hausse de prix de 8 € représente 8 % du capital initial.',
                        'choices' => [
                            ['choice_text' => '8 %', 'is_correct' => true],
                            ['choice_text' => '0,8 %', 'is_correct' => false],
                            ['choice_text' => '108 %', 'is_correct' => false],
                            ['choice_text' => '92 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur détient deux actions dont les performances évoluent souvent dans des directions différentes. Quel bénéfice potentiel obtient-il ?',
                        'explanation' => 'Des actifs dont les rendements ne sont pas parfaitement synchronisés peuvent se compenser partiellement. Cette combinaison permet de réduire le risque spécifique sans garantir un rendement positif.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du rendement attendu de chacune des deux actions détenues', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du risque spécifique du portefeuille grâce à la diversification', 'is_correct' => true],
                            ['choice_text' => 'Une protection complète du portefeuille contre une baisse générale du marché', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des frais de transaction payés lors des achats d\'actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces éléments correspond à une prime de risque ?',
                        'explanation' => 'La prime de risque représente la rémunération attendue au-delà d\'une référence moins risquée, en compensation d\'une exposition à une incertitude supplémentaire.',
                        'choices' => [
                            ['choice_text' => 'Le rendement supplémentaire attendu pour accepter un risque supérieur à celui d\'une référence moins risquée', 'is_correct' => true],
                            ['choice_text' => 'Le rendement minimum fixé par contrat entre l\'émetteur d\'une obligation et ses créanciers', 'is_correct' => false],
                            ['choice_text' => 'La perte maximale qu\'un investisseur peut subir sur un actif risqué pendant une période donnée', 'is_correct' => false],
                            ['choice_text' => 'L\'écart entre le prix d\'achat et le prix de vente proposés par les intermédiaires sur un marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche simple du risque, pourquoi un rendement attendu ne suffit-il pas à choisir entre deux investissements ?',
                        'explanation' => 'Deux actifs peuvent afficher le même rendement attendu tout en présentant des distributions de résultats très différentes. L\'investisseur doit donc considérer le risque en plus du rendement.',
                        'choices' => [
                            ['choice_text' => 'Parce que le rendement attendu est calculé à partir des seules performances passées de l\'actif', 'is_correct' => false],
                            ['choice_text' => 'Parce que le niveau et la nature du risque associé à ce rendement comptent aussi', 'is_correct' => true],
                            ['choice_text' => 'Parce que le rendement attendu varie chaque jour et ne peut pas servir de repère de décision', 'is_correct' => false],
                            ['choice_text' => 'Parce que les frais de courtage dépassent en général le rendement attendu d\'un placement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille comporte une action technologique et une entreprise de services publics dont les cours réagissent parfois différemment. Quelle idée cela illustre-t-il ?',
                        'explanation' => 'La diversification dépend notamment de la manière dont les rendements des actifs évoluent ensemble. Des comportements différents peuvent amortir certaines fluctuations propres à chaque titre.',
                        'choices' => [
                            ['choice_text' => 'La combinaison d\'actifs augmente le rendement attendu en proportion du nombre de titres', 'is_correct' => false],
                            ['choice_text' => 'La combinaison d\'actifs fait disparaître le risque de marché commun à l\'ensemble des titres', 'is_correct' => false],
                            ['choice_text' => 'La combinaison d\'actifs peut réduire certaines fluctuations spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Les entreprises d\'un même portefeuille appartiennent forcément au même secteur d\'activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un actif devient plus risqué alors que son rendement attendu reste inchangé, quelle réaction est économiquement plausible ?',
                        'explanation' => 'Si le risque augmente sans compensation supplémentaire, l\'actif devient moins attractif à conditions identiques. Le prix peut alors devoir s\'ajuster à la baisse, ou le rendement exigé augmenter.',
                        'choices' => [
                            ['choice_text' => 'Les investisseurs peuvent accepter un prix plus élevé puisque le risque accroît le potentiel de gain', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs peuvent exiger un prix plus faible ou une rémunération attendue plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Les investisseurs peuvent exiger un rendement attendu plus faible en échange d\'un risque plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs peuvent demander à l\'émetteur de rembourser immédiatement le capital investi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse 40 € d\'intérêt annuel et 1 000 € à l\'échéance. Quel type de flux l\'investisseur reçoit-il ?',
                        'explanation' => 'Une obligation classique verse souvent des coupons périodiques puis rembourse sa valeur nominale à l\'échéance. Les modalités exactes dépendent toutefois du contrat.',
                        'choices' => [
                            ['choice_text' => 'Un dividende variable lié aux bénéfices et la valeur de l\'entreprise à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Des intérêts périodiques et le remboursement du principal à l\'échéance', 'is_correct' => true],
                            ['choice_text' => 'Un remboursement progressif du principal à chaque période sans paiement d\'intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une part du capital de l\'entreprise et un droit de vote à l\'échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque concerne particulièrement la possibilité qu\'un émetteur ne respecte pas ses obligations de paiement ?',
                        'explanation' => 'Le risque de crédit correspond notamment à la possibilité que l\'emprunteur ou l\'émetteur ne paie pas les montants dus selon les conditions prévues.',
                        'choices' => [
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le risque de taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action verse 3 € de dividende et son prix passe de 50 € à 53 €. Quel est son rendement total simplifié sur la période ?',
                        'explanation' => 'Le gain de prix est de 3 € et le dividende de 3 €, soit 6 € au total. Le rendement est donc 6 / 50 = 12 %.',
                        'choices' => [
                            ['choice_text' => '12 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est correcte entre rendement attendu et rendement réalisé ?',
                        'explanation' => 'Avant la période, on forme une anticipation à partir de scénarios ou de probabilités. Après la période, on observe le résultat effectivement obtenu. Les deux peuvent donc différer.',
                        'choices' => [
                            ['choice_text' => 'Le rendement attendu est observé après la période, tandis que le rendement réalisé est une estimation avant le résultat', 'is_correct' => false],
                            ['choice_text' => 'Le rendement attendu est une estimation avant le résultat, tandis que le rendement réalisé est observé après la période', 'is_correct' => true],
                            ['choice_text' => 'Le rendement attendu s\'applique aux actions, tandis que le rendement réalisé s\'applique aux obligations et aux dépôts bancaires', 'is_correct' => false],
                            ['choice_text' => 'Le rendement attendu intègre le risque de l\'actif, alors que le rendement réalisé ne dépend que de l\'inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur répartit son capital entre 20 entreprises au lieu d\'une seule. Quelle exposition cherche-t-il principalement à réduire ?',
                        'explanation' => 'La diversification répartit l\'exposition entre plusieurs émetteurs et réduit le poids d\'un événement propre à une entreprise. Elle ne supprime pas les risques communs au marché.',
                        'choices' => [
                            ['choice_text' => 'Le risque de variation générale du niveau des prix', 'is_correct' => false],
                            ['choice_text' => 'Le risque systématique qui touche l\'ensemble du marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de variation des taux de change entre devises', 'is_correct' => false],
                            ['choice_text' => 'Le risque spécifique lié à une entreprise particulière', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une comparaison simple, un actif sans risque offre 3 % et un actif risqué a un rendement attendu de 8 %. Quelle est la prime de risque attendue dans cette approximation ?',
                        'explanation' => 'La prime de risque est approximativement la différence entre le rendement attendu de l\'actif risqué et le taux de référence : 8 % - 3 % = 5 %.',
                        'choices' => [
                            ['choice_text' => '11 %', 'is_correct' => false],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '24 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Efficience des marchés financiers',
                'description' => 'Découvrez l\'idée d\'efficience informationnelle, ses implications simples et les limites des stratégies fondées sur l\'information publique.',
                'questions' => [
                    [
                        'question' => 'Que signifie, dans son sens le plus simple, l\'expression \'efficience des marchés\' ?',
                        'explanation' => 'L\'efficience des marchés concerne la manière dont l\'information se reflète dans les prix. Elle ne signifie ni absence de variation des cours ni connaissance parfaite de l\'avenir.',
                        'choices' => [
                            ['choice_text' => 'Les opérations d\'achat et de vente s\'exécutent à faible coût et dans des délais très courts', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs peuvent prédire avec précision les prix futurs à partir de l\'information disponible', 'is_correct' => false],
                            ['choice_text' => 'Les prix des actifs sont fixés par les autorités afin de refléter la valeur comptable des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Les prix des actifs intègrent rapidement l\'information disponible selon le niveau d\'efficience considéré', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise publie une information positive, et son action réagit presque immédiatement. Quel phénomène est cohérent avec l\'hypothèse d\'efficience informationnelle ?',
                        'explanation' => 'Dans un marché informationnellement efficient, une nouvelle information pertinente peut être incorporée rapidement dans le prix. Cela ne rend pas le titre sans risque.',
                        'choices' => [
                            ['choice_text' => 'L\'ajustement lent du prix sur plusieurs mois après l\'annonce publique', 'is_correct' => false],
                            ['choice_text' => 'La stabilité du prix de l\'action avant et après l\'annonce', 'is_correct' => false],
                            ['choice_text' => 'L\'ajustement rapide du prix à une nouvelle information publique', 'is_correct' => true],
                            ['choice_text' => 'La réaction du prix aux seules informations confidentielles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'efficience des marchés remet-elle en question la possibilité de battre systématiquement le marché avec une information déjà publique ?',
                        'explanation' => 'Dans une forme d\'efficience incluant l\'information publique, exploiter une information déjà connue ne devrait pas permettre d\'obtenir de façon systématique un rendement anormal après prise en compte du risque et des coûts.',
                        'choices' => [
                            ['choice_text' => 'Parce que les gérants professionnels sont légalement tenus d\'imiter l\'indice de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix des actifs financiers évoluent de manière aléatoire et sans lien avec l\'économie', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'information publique pertinente est supposée déjà reflétée dans les prix', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'information publique n\'est accessible qu\'aux investisseurs institutionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste pense pouvoir gagner durablement grâce à une information publique qu\'il vient d\'étudier. Quel point doit-il examiner avant de conclure à un avantage durable ?',
                        'explanation' => 'Une stratégie ne doit pas être jugée uniquement sur son rendement brut. L\'information peut déjà être intégrée au prix, et les frais de transaction peuvent réduire ou éliminer un avantage théorique.',
                        'choices' => [
                            ['choice_text' => 'Si le cours de l\'action a progressé au cours des derniers jours précédant son analyse', 'is_correct' => false],
                            ['choice_text' => 'Si l\'entreprise étudiée verse un dividende supérieur à celui de la moyenne des autres sociétés cotées sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Si son rapport d\'analyse est plus détaillé que celui des autres analystes suivant le titre', 'is_correct' => false],
                            ['choice_text' => 'Si le marché a déjà intégré cette information et si les coûts de transaction absorbent l\'avantage apparent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est compatible avec un marché efficient ?',
                        'explanation' => 'L\'efficience ne signifie pas stabilité des prix. Au contraire, l\'arrivée de nouvelles informations peut entraîner des mouvements rapides, y compris inattendus.',
                        'choices' => [
                            ['choice_text' => 'Les prix restent stables parce que les investisseurs disposent de la même information', 'is_correct' => false],
                            ['choice_text' => 'Les prix peuvent évoluer fortement lorsque de nouvelles informations arrivent', 'is_correct' => true],
                            ['choice_text' => 'Les prix évoluent de manière régulière et prévisible grâce aux informations passées', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs utilisant l\'analyse technique obtiennent des rendements anormaux de façon régulière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur affirme : \'Une action a baissé cinq jours de suite, donc elle doit remonter demain.\' Quelle difficulté pose ce raisonnement pour l\'hypothèse d\'efficience ?',
                        'explanation' => 'Le raisonnement suppose une relation exploitable entre les prix passés et un rendement futur supérieur à ce qui est attendu. L\'existence d\'une telle stratégie systématique est précisément une question empirique liée à l\'efficience.',
                        'choices' => [
                            ['choice_text' => 'Il confond le rendement de l\'action avec sa volatilité en raisonnant sur une période aussi courte que cinq jours', 'is_correct' => false],
                            ['choice_text' => 'Il suppose que les prix d\'un marché efficient ne peuvent jamais baisser plusieurs jours de suite', 'is_correct' => false],
                            ['choice_text' => 'Il repose sur une information privée que les autres investisseurs ne connaissent pas encore', 'is_correct' => false],
                            ['choice_text' => 'Il suppose qu\'une simple tendance passée permet systématiquement de prédire un rendement anormal futur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction sont-ils importants lorsqu\'on évalue une stratégie d\'investissement ?',
                        'explanation' => 'Une stratégie doit être évaluée sur le rendement net. Des transactions fréquentes peuvent générer suffisamment de coûts pour annuler un petit avantage observé avant frais.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts de transaction sont fixés par la loi au même niveau pour chaque stratégie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils déterminent à eux seuls le niveau de risque de marché du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils sont déjà inclus dans le rendement brut affiché par les marchés financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un avantage brut peut disparaître après commissions, spreads et autres coûts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un prix boursier tombe après une annonce totalement inattendue. Cela contredit-il nécessairement l\'efficience ?',
                        'explanation' => 'Une information nouvelle peut modifier les anticipations sur les flux ou les risques d\'une entreprise. Un changement de prix en réponse à cette information est donc compatible avec l\'efficience.',
                        'choices' => [
                            ['choice_text' => 'Oui, car un marché efficient ne peut pas être surpris par une annonce concernant l\'entreprise cotée', 'is_correct' => false],
                            ['choice_text' => 'Non, car l\'efficience n\'empêche pas les prix d\'intégrer de nouvelles informations et de changer', 'is_correct' => true],
                            ['choice_text' => 'Non, car une annonce inattendue modifie le volume des échanges mais pas la valeur de l\'action', 'is_correct' => false],
                            ['choice_text' => 'Oui, car un prix efficient aurait dû baisser avant même que l\'annonce ne soit connue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel représente une information publique typique ?',
                        'explanation' => 'Des résultats financiers publiés officiellement sont accessibles au public. Ils peuvent donc être considérés comme de l\'information publique, contrairement à une information interne non divulguée.',
                        'choices' => [
                            ['choice_text' => 'Les résultats annuels officiellement publiés par une société', 'is_correct' => true],
                            ['choice_text' => 'Une information confidentielle obtenue clandestinement avant sa publication', 'is_correct' => false],
                            ['choice_text' => 'Une conversation secrète entre deux dirigeants', 'is_correct' => false],
                            ['choice_text' => 'Un document interne non communiqué au marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel piège méthodologique peut donner l\'impression qu\'une stratégie \'bat le marché\' ?',
                        'explanation' => 'Une performance historique peut être trompeuse si l\'analyse ignore les coûts, le risque ou le biais de sélection. Une stratégie exceptionnelle sur une période ne prouve pas automatiquement un avantage durable.',
                        'choices' => [
                            ['choice_text' => 'Comparer la performance de la stratégie à un indice de référence présentant un risque comparable', 'is_correct' => false],
                            ['choice_text' => 'Déduire les frais de gestion et les commissions avant de calculer le rendement de la stratégie', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la performance sur une période suffisamment longue et la rapporter au capital investi', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts, le risque ou sélectionner après coup uniquement les périodes favorables', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Allocation du capital et décisions financières',
                'description' => 'Apprenez à relier coût du capital, choix de projets, financement et allocation des ressources aux décisions financières d\'une entreprise.',
                'questions' => [
                    [
                        'question' => 'Quel est l\'objectif central d\'une décision d\'allocation du capital pour une entreprise ?',
                        'explanation' => 'L\'allocation du capital consiste à sélectionner les usages des ressources financières en fonction des rendements attendus, des risques et du coût des ressources mobilisées.',
                        'choices' => [
                            ['choice_text' => 'Répartir les ressources à parts égales entre les différents services de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le chiffre d\'affaires de l\'année en cours sans tenir compte du risque', 'is_correct' => false],
                            ['choice_text' => 'Affecter les ressources aux usages qui créent le plus de valeur compte tenu du risque', 'is_correct' => true],
                            ['choice_text' => 'Privilégier les projets dont la durée de réalisation est la plus courte pour récupérer vite la mise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet nécessite 20 000 € et devrait générer des flux suffisamment élevés pour couvrir ce montant ainsi que le rendement exigé. Quel principe financier est appliqué en priorité ?',
                        'explanation' => 'Une décision d\'investissement doit tenir compte du montant engagé, du calendrier des flux et du rendement exigé. Le principe est de déterminer si la valeur créée compense le capital et le risque supportés.',
                        'choices' => [
                            ['choice_text' => 'Choisir le projet dont le montant d\'investissement initial est le plus faible', 'is_correct' => false],
                            ['choice_text' => 'Retenir le projet qui génère le plus grand total de flux nominaux sans actualisation', 'is_correct' => false],
                            ['choice_text' => 'Comparer le bénéfice comptable annuel de l\'entreprise à son chiffre d\'affaires', 'is_correct' => false],
                            ['choice_text' => 'Comparer la valeur économique des flux futurs au capital engagé et à son coût', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre un projet qui rapporte rapidement et un projet plus rentable mais beaucoup plus long. Quel élément ne doit-elle pas oublier ?',
                        'explanation' => 'Des flux reçus plus tard doivent être actualisés, et un horizon plus long peut aussi impliquer davantage d\'incertitude. La comparaison ne peut donc pas reposer sur le seul montant nominal final.',
                        'choices' => [
                            ['choice_text' => 'Le montant nominal total des flux de chaque projet, qui suffit à les classer', 'is_correct' => false],
                            ['choice_text' => 'Le résultat comptable de l\'année en cours, qui suffit à comparer les deux projets', 'is_correct' => false],
                            ['choice_text' => 'La valeur temporelle des flux et le risque associé à chaque projet', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de salariés mobilisés par chaque projet pendant sa réalisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux le coût du capital pour une entreprise ?',
                        'explanation' => 'Le coût du capital représente le rendement exigé par les financeurs pour fournir des ressources à l\'entreprise, en tenant compte du risque et de la structure de financement.',
                        'choices' => [
                            ['choice_text' => 'Le total des intérêts versés par l\'entreprise à ses banques sur l\'année écoulée', 'is_correct' => false],
                            ['choice_text' => 'La somme des dividendes et des salaires versés par l\'entreprise à ses partenaires', 'is_correct' => false],
                            ['choice_text' => 'Le prix d\'achat des machines et équipements que l\'entreprise acquiert pour développer son activité', 'is_correct' => false],
                            ['choice_text' => 'Le rendement que les apporteurs de fonds exigent en contrepartie du financement et du risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise exclusivement de la dette pour financer un projet. Quel effet économique doit-elle prendre en considération ?',
                        'explanation' => 'La dette apporte des ressources mais implique des intérêts et un remboursement. Si les flux de l\'entreprise deviennent insuffisants, cette obligation peut accroître le risque financier.',
                        'choices' => [
                            ['choice_text' => 'La dette réduit le risque financier car les intérêts sont déductibles des impôts', 'is_correct' => false],
                            ['choice_text' => 'La dette dilue les actionnaires existants en leur retirant une partie de leur droit de vote', 'is_correct' => false],
                            ['choice_text' => 'La dette n\'a pas d\'effet sur la solvabilité de l\'entreprise tant que le projet est rentable', 'is_correct' => false],
                            ['choice_text' => 'La dette crée des obligations de paiement et augmente l\'exposition au risque financier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un projet A a une valeur actuelle nette positive, tandis que le projet B a une valeur actuelle nette négative, avec des caractéristiques comparables. Quelle conclusion élémentaire est la plus cohérente ?',
                        'explanation' => 'Une VAN positive signifie que la valeur actuelle des flux futurs dépasse l\'investissement initial selon le taux retenu. Une VAN négative indique l\'inverse dans ce cadre d\'analyse.',
                        'choices' => [
                            ['choice_text' => 'Le projet B crée davantage de valeur car il demande un investissement initial plus faible', 'is_correct' => false],
                            ['choice_text' => 'Les deux projets créent de la valeur car leurs flux futurs sont supérieurs à zéro', 'is_correct' => false],
                            ['choice_text' => 'Le projet A crée davantage de valeur selon les hypothèses retenues', 'is_correct' => true],
                            ['choice_text' => 'La valeur actuelle nette ne permet pas de comparer deux projets de même taille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver une réserve de liquidités même si elle possède des projets rentables ?',
                        'explanation' => 'La liquidité offre une marge de sécurité et de flexibilité. En revanche, conserver trop de liquidités peut avoir un coût d\'opportunité car les fonds ne sont pas utilisés ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter mécaniquement le rendement des capitaux propres grâce aux intérêts perçus', 'is_correct' => false],
                            ['choice_text' => 'Pour diminuer le montant des impôts dus sur les bénéfices de l\'exercice et améliorer le résultat comptable', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le capital apporté par les actionnaires et ne plus verser de dividendes', 'is_correct' => false],
                            ['choice_text' => 'Pour faire face aux besoins imprévus, financer le cycle d\'exploitation ou saisir rapidement une opportunité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance un nouveau projet en utilisant des bénéfices non distribués. Comment s\'appelle ce financement ?',
                        'explanation' => 'L\'utilisation des bénéfices conservés par l\'entreprise pour financer ses investissements relève de l\'autofinancement. Aucun nouvel emprunt n\'est nécessaire pour cette source de fonds.',
                        'choices' => [
                            ['choice_text' => 'Une dette bancaire', 'is_correct' => false],
                            ['choice_text' => 'L\'autofinancement', 'is_correct' => true],
                            ['choice_text' => 'Une émission obligataire', 'is_correct' => false],
                            ['choice_text' => 'Une subvention automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société compare deux projets nécessitant chacun 100 000 € mais présentant des risques très différents. Pourquoi un taux d\'actualisation identique peut-il être problématique ?',
                        'explanation' => 'Le taux d\'actualisation reflète notamment le rendement exigé compte tenu du risque. Utiliser un taux unique pour des risques très différents peut conduire à une valorisation incohérente.',
                        'choices' => [
                            ['choice_text' => 'Le projet le plus risqué peut exiger un rendement inférieur', 'is_correct' => false],
                            ['choice_text' => 'Le projet le moins risqué doit être actualisé à un taux plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Deux projets de même coût doivent forcément avoir la même valeur actuelle', 'is_correct' => false],
                            ['choice_text' => 'Le projet le plus risqué peut exiger un rendement supérieur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel choix illustre une mauvaise allocation du capital ?',
                        'explanation' => 'L\'allocation du capital vise à utiliser les ressources là où elles ont la meilleure contribution économique compte tenu du risque. Ignorer cette comparaison peut détruire de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Retenir parmi plusieurs projets celui dont la valeur actuelle nette est la plus élevée après prise en compte du risque', 'is_correct' => false],
                            ['choice_text' => 'Financer un projet très risqué et peu rentable alors qu\'une alternative comparable crée davantage de valeur', 'is_correct' => true],
                            ['choice_text' => 'Refuser un projet dont le rendement attendu est inférieur au coût du financement nécessaire pour le réaliser', 'is_correct' => false],
                            ['choice_text' => 'Abandonner un projet devenu moins rentable après une hausse du coût du capital de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt principal d\'une analyse de sensibilité d\'un projet financier ?',
                        'explanation' => 'Une analyse de sensibilité teste l\'effet de variations des hypothèses, comme les ventes, les coûts ou le taux d\'actualisation. Elle met en évidence les facteurs qui rendent le projet plus ou moins vulnérable.',
                        'choices' => [
                            ['choice_text' => 'Calculer la probabilité exacte que le projet atteigne ses objectifs de rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Déterminer le taux d\'actualisation unique qui annule la valeur actuelle nette du projet', 'is_correct' => false],
                            ['choice_text' => 'Voir comment les résultats changent lorsque certaines hypothèses sont modifiées', 'is_correct' => true],
                            ['choice_text' => 'Comparer le rendement du projet à celui d\'un indice boursier de référence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut obtenir un financement à 6 % pour un projet dont le rendement attendu est de 9 %. Pourquoi l\'écart de 3 points peut-il être intéressant ?',
                        'explanation' => 'Un rendement attendu supérieur au coût du financement peut être favorable, mais l\'écart seul ne suffit pas à conclure. Le risque, le calendrier des flux, les taxes et les autres coûts doivent aussi être pris en compte.',
                        'choices' => [
                            ['choice_text' => 'Il indique que le projet ne comporte pas de risque puisque son rendement attendu est supérieur au taux d\'emprunt obtenu', 'is_correct' => false],
                            ['choice_text' => 'Il suggère que le rendement attendu du projet dépasse son coût de financement, sous réserve du risque et des autres hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Il montre que la banque accorde à l\'entreprise un taux de faveur inférieur à celui payé sur le marché par les autres emprunteurs', 'is_correct' => false],
                            ['choice_text' => 'Il révèle que le coût des fonds propres de l\'entreprise est inférieur au coût de sa dette bancaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Incitations, information et décisions financières',
                'description' => 'Explorez les effets des incitations, des asymétries d\'information et des conflits d\'intérêts sur les décisions financières.',
                'questions' => [
                    [
                        'question' => 'Que désigne une asymétrie d\'information en finance ?',
                        'explanation' => 'L\'asymétrie d\'information apparaît lorsque l\'une des parties possède des informations pertinentes que l\'autre ne détient pas, ce qui peut modifier les termes d\'une transaction ou les comportements.',
                        'choices' => [
                            ['choice_text' => 'Une situation où l\'une des parties à la transaction paie un prix supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Une situation où les deux parties disposent de la même information mais évaluent le risque différemment', 'is_correct' => false],
                            ['choice_text' => 'Une situation où les parties à une transaction ne disposent pas du même niveau d\'information pertinent', 'is_correct' => true],
                            ['choice_text' => 'Une situation où les prix des actifs sont fixés par une autorité plutôt que par le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque prête à une entreprise qui connaît mieux que la banque la qualité réelle de son projet. Quel problème d\'information peut apparaître ?',
                        'explanation' => 'Lorsque l\'emprunteur détient une information supérieure sur le projet, le prêteur peut mal apprécier le risque. Cette difficulté d\'évaluation est un effet classique de l\'asymétrie d\'information.',
                        'choices' => [
                            ['choice_text' => 'L\'emprunteur peut avoir plus de difficulté à évaluer correctement le taux que la banque va appliquer', 'is_correct' => false],
                            ['choice_text' => 'La banque peut avoir plus de difficulté à refinancer son prêt auprès de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'intérêt de marché peut devenir impossible à observer pour la banque et l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'La banque peut avoir plus de difficulté à évaluer correctement le risque avant le prêt', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut aider une banque à réduire l\'incertitude sur un emprunteur ?',
                        'explanation' => 'La collecte et l\'analyse d\'informations permettent au prêteur de mieux estimer la capacité de remboursement et les risques. Les modalités exactes dépendent du type de crédit.',
                        'choices' => [
                            ['choice_text' => 'Appliquer le taux moyen du marché à l\'ensemble des emprunteurs sans examiner leur situation financière', 'is_correct' => false],
                            ['choice_text' => 'Se fier à la réputation générale du secteur d\'activité de l\'emprunteur plutôt qu\'à ses comptes', 'is_correct' => false],
                            ['choice_text' => 'Demander des informations financières, analyser les flux et évaluer les garanties selon le dossier', 'is_correct' => true],
                            ['choice_text' => 'Limiter le montant du prêt au capital déjà versé par l\'emprunteur lors de la création de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise, les dirigeants prennent des décisions au nom des actionnaires. Quel problème peut surgir si leurs intérêts divergent ?',
                        'explanation' => 'Le problème d\'agence apparaît lorsqu\'un agent prend des décisions pour le compte d\'un principal mais peut poursuivre des intérêts différents. Les mécanismes de gouvernance cherchent notamment à limiter ces divergences.',
                        'choices' => [
                            ['choice_text' => 'Une suppression automatique de la gouvernance', 'is_correct' => false],
                            ['choice_text' => 'Un conflit d\'agence entre mandants et dirigeants', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de tout risque financier', 'is_correct' => false],
                            ['choice_text' => 'Une hausse mécanique du cours de l\'action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rémunération variable liée à des objectifs peut-elle modifier le comportement d\'un dirigeant ?',
                        'explanation' => 'Une rémunération liée à la performance influence les incitations. Toutefois, la qualité des objectifs et leur mesure sont importantes pour éviter des comportements indésirables.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle remplace le contrôle exercé par le conseil d\'administration sur le dirigeant', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle oblige le dirigeant à investir une partie de son patrimoine personnel dans l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle crée une incitation financière à atteindre les objectifs associés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle transfère aux actionnaires la responsabilité des décisions prises par le dirigeant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre un risque de conflit d\'intérêts ?',
                        'explanation' => 'Le conflit d\'intérêts apparaît lorsqu\'un intérêt personnel ou économique peut influencer une décision qui devrait être prise dans l\'intérêt d\'une autre partie.',
                        'choices' => [
                            ['choice_text' => 'Un conseiller recommande un produit adapté au profil de son client et l\'informe clairement de l\'ensemble des frais associés à ce produit ainsi que des risques de perte en capital', 'is_correct' => false],
                            ['choice_text' => 'Un épargnant compare plusieurs offres de crédit proposées par des banques concurrentes avant de choisir la moins chère', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise cotée publie ses comptes annuels audités et les met à la disposition de ses actionnaires et des analystes', 'is_correct' => false],
                            ['choice_text' => 'Un conseiller favorise un produit parce qu\'il reçoit une rémunération supplémentaire, alors qu\'un autre produit conviendrait mieux au client', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur dispose d\'un signal privé sur une entreprise, mais aucun autre investisseur n\'en dispose. Quelle difficulté économique peut-il y avoir sur le marché ?',
                        'explanation' => 'Lorsque certains participants disposent d\'une information pertinente qui n\'est pas accessible aux autres, les décisions et les prix peuvent refléter cette différence d\'information.',
                        'choices' => [
                            ['choice_text' => 'Un conflit d\'agence entre actionnaires et dirigeants', 'is_correct' => false],
                            ['choice_text' => 'Un risque de contrepartie entre les participants', 'is_correct' => false],
                            ['choice_text' => 'Une asymétrie d\'information entre participants', 'is_correct' => true],
                            ['choice_text' => 'Une insuffisance de liquidité sur le marché du titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la transparence financière peut-elle améliorer le fonctionnement des marchés ?',
                        'explanation' => 'Une information financière de qualité réduit certaines asymétries et permet aux participants d\'évaluer plus correctement les résultats, les risques et les perspectives d\'une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Elle permet aux entreprises de fixer elles-mêmes le cours de leurs titres sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Elle aide les investisseurs et prêteurs à évaluer les entreprises avec davantage d\'informations', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente les rendements des investisseurs en réduisant l\'impôt payé par les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense les prêteurs d\'analyser le risque de crédit puisque les comptes sont rendus publics', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise sait qu\'un projet est très risqué mais présente uniquement les scénarios optimistes à un prêteur. Quel est le problème principal ?',
                        'explanation' => 'Présenter seulement les scénarios favorables peut conduire l\'autre partie à former une perception trop optimiste du risque. La qualité et l\'exhaustivité de l\'information sont donc importantes.',
                        'choices' => [
                            ['choice_text' => 'L\'entreprise peut obtenir un taux d\'intérêt plus élevé parce que le prêteur surestime le risque du projet', 'is_correct' => false],
                            ['choice_text' => 'Le prêteur peut mal évaluer la durée du projet parce que les taux d\'intérêt varient dans le temps', 'is_correct' => false],
                            ['choice_text' => 'Le prêteur peut manquer de liquidités pour financer d\'autres projets au même moment', 'is_correct' => false],
                            ['choice_text' => 'Le prêteur peut sous-estimer le risque réel à cause d\'une information incomplète', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Après l\'obtention d\'un financement, une entreprise peut prendre davantage de risques parce qu\'elle sait qu\'une partie des pertes potentielles sera supportée par ses financeurs. Quel problème cela illustre-t-il ?',
                        'explanation' => 'Le risque moral apparaît lorsqu\'une partie peut modifier son comportement après la conclusion d\'un contrat parce qu\'elle ne supporte pas entièrement les conséquences de ses choix. En finance, cela peut compliquer la surveillance du risque après l\'octroi d\'un financement.',
                        'choices' => [
                            ['choice_text' => 'Une sélection adverse liée à la qualité des emprunteurs avant l\'octroi du financement', 'is_correct' => false],
                            ['choice_text' => 'Un risque de liquidité lié à la difficulté de revendre rapidement les titres émis', 'is_correct' => false],
                            ['choice_text' => 'Un risque moral lié au changement de comportement après la conclusion du financement', 'is_correct' => true],
                            ['choice_text' => 'Un risque de taux lié à la hausse du coût de refinancement de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Marchés de capitaux et formation des prix',
                'description' => 'Comprenez le fonctionnement élémentaire des marchés de capitaux, des actions, des obligations et des mécanismes de prix.',
                'questions' => [
                    [
                        'question' => 'Lorsqu\'un investisseur achète une action sur le marché secondaire, à qui verse-t-il généralement le prix de l\'action ?',
                        'explanation' => 'Sur le marché secondaire, les investisseurs échangent des titres déjà émis. Le produit de la vente revient généralement au vendeur, et non à l\'entreprise émettrice.',
                        'choices' => [
                            ['choice_text' => 'À un autre participant qui vend le titre', 'is_correct' => true],
                            ['choice_text' => 'À l\'entreprise qui a émis le titre', 'is_correct' => false],
                            ['choice_text' => 'À la société qui gère la bourse', 'is_correct' => false],
                            ['choice_text' => 'À la banque dépositaire des titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la fonction principale d\'un marché primaire ?',
                        'explanation' => 'Le marché primaire concerne la création et la vente initiale de titres financiers. L\'émetteur cherche alors à obtenir des ressources auprès des investisseurs.',
                        'choices' => [
                            ['choice_text' => 'Permettre aux investisseurs de revendre à d\'autres des titres déjà émis', 'is_correct' => false],
                            ['choice_text' => 'Fixer les taux d\'intérêt directeurs que les banques appliquent à leurs clients', 'is_correct' => false],
                            ['choice_text' => 'Permettre l\'émission de nouveaux titres afin de lever des fonds', 'is_correct' => true],
                            ['choice_text' => 'Réglementer les opérations des intermédiaires financiers et sanctionner les abus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise émet de nouvelles actions pour financer une usine. Que reçoit-elle principalement en contrepartie ?',
                        'explanation' => 'L\'émission d\'actions apporte des capitaux propres. Les investisseurs deviennent actionnaires et leur rémunération n\'est pas fixée comme un intérêt contractuel de dette.',
                        'choices' => [
                            ['choice_text' => 'Des fonds propres apportés par les nouveaux investisseurs', 'is_correct' => true],
                            ['choice_text' => 'Un prêt bancaire consenti à un taux d\'intérêt fixé à l\'avance', 'is_correct' => false],
                            ['choice_text' => 'Des liquidités provenant de la vente d\'une partie de ses actifs', 'is_correct' => false],
                            ['choice_text' => 'Une dette obligataire remboursable à une échéance prévue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix d\'une obligation existante peut-il baisser lorsque les taux de marché augmentent fortement ?',
                        'explanation' => 'Quand les taux de marché montent, les coupons fixes d\'une ancienne obligation peuvent devenir relativement moins attractifs. Son prix peut alors diminuer afin que son rendement soit cohérent avec le nouveau contexte de taux.',
                        'choices' => [
                            ['choice_text' => 'Son émetteur réduit le montant des coupons versés pour s\'adapter à la hausse des taux du marché et préserver sa trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Ses paiements fixes deviennent moins attractifs par rapport aux nouvelles obligations offrant des taux supérieurs', 'is_correct' => true],
                            ['choice_text' => 'Sa valeur nominale est révisée à la baisse par le marché pour suivre l\'évolution des taux', 'is_correct' => false],
                            ['choice_text' => 'Le prix de l\'obligation est mécaniquement fixé au niveau du taux directeur de la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément influence directement le cours d\'une action selon une approche financière fondamentale ?',
                        'explanation' => 'Une approche fondamentale relie la valeur d\'un actif aux flux économiques qu\'il peut générer et au risque de ces flux. Les informations nouvelles peuvent modifier ces anticipations et donc le prix.',
                        'choices' => [
                            ['choice_text' => 'Les perspectives de flux futurs et le risque associé', 'is_correct' => true],
                            ['choice_text' => 'Le montant du capital social inscrit dans les statuts', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable des immobilisations inscrites au bilan', 'is_correct' => false],
                            ['choice_text' => 'Le prix d\'achat payé par le premier actionnaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ordre d\'achat accepte de payer jusqu\'à 50 € pour une action, alors qu\'une offre de vente est disponible à 49 €. Que se passe-t-il normalement si les conditions de marché permettent l\'exécution ?',
                        'explanation' => 'Lorsqu\'une offre de vente est compatible avec un prix maximal d\'achat, un ordre peut être exécuté à un prix disponible dans le carnet, sous réserve des règles précises de priorité et du type d\'ordre.',
                        'choices' => [
                            ['choice_text' => 'La transaction peut se réaliser autour de 49 €, selon les règles de priorité et d\'exécution du marché', 'is_correct' => true],
                            ['choice_text' => 'La transaction doit se réaliser à 50 €, car le prix maximal indiqué par l\'acheteur s\'impose au vendeur', 'is_correct' => false],
                            ['choice_text' => 'La transaction n\'est pas possible tant que le prix proposé par le vendeur n\'est pas égal à celui de l\'acheteur', 'is_correct' => false],
                            ['choice_text' => 'La transaction se réalise au prix de clôture de la veille, quel que soit le prix demandé par le vendeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité d\'un marché est-elle utile à un investisseur ?',
                        'explanation' => 'Un marché liquide permet généralement d\'exécuter des transactions avec moins de difficulté et un impact de prix plus limité. La liquidité ne garantit cependant aucun rendement.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit la volatilité des rendements en supprimant l\'incertitude sur les résultats de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente le montant des dividendes versés lorsque le marché de l\'action est actif', 'is_correct' => false],
                            ['choice_text' => 'Elle facilite l\'achat ou la vente d\'un actif sans provoquer nécessairement une forte variation de prix', 'is_correct' => true],
                            ['choice_text' => 'Elle protège l\'investisseur contre une baisse de la valeur de l\'entreprise émettrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action cote 80 € et verse un dividende annuel de 4 €. Quel est approximativement son rendement en dividende calculé sur ce prix ?',
                        'explanation' => 'Le rendement en dividende est approximativement 4 / 80 = 5 %. Il mesure le dividende annuel rapporté au prix de l\'action, sans inclure la variation du cours.',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '84 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise émet une obligation de 1 000 € de valeur nominale avec un coupon annuel de 50 €. Quel est son taux de coupon ?',
                        'explanation' => 'Le taux de coupon correspond à 50 / 1 000 = 5 %. Il est calculé par rapport à la valeur nominale et non au prix de marché actuel.',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale distingue une action ordinaire d\'une obligation classique ?',
                        'explanation' => 'Une action représente une participation au capital de l\'entreprise, alors qu\'une obligation correspond à une créance contractuelle sur l\'émetteur selon ses modalités.',
                        'choices' => [
                            ['choice_text' => 'L\'action représente une créance sur l\'émetteur tandis que l\'obligation représente un droit de propriété', 'is_correct' => false],
                            ['choice_text' => 'L\'action représente un droit de propriété tandis que l\'obligation représente une créance sur l\'émetteur', 'is_correct' => true],
                            ['choice_text' => 'L\'action est remboursée à une échéance fixe tandis que l\'obligation n\'a pas de date de remboursement', 'is_correct' => false],
                            ['choice_text' => 'L\'action est émise par les États alors que l\'obligation est émise par les entreprises privées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si davantage d\'investisseurs souhaitent acheter une action alors que l\'offre disponible reste inchangée à court terme, quel mécanisme de marché peut se produire ?',
                        'explanation' => 'Lorsque la demande augmente relativement à l\'offre disponible, les acheteurs peuvent accepter des prix plus élevés. Le prix de marché contribue ainsi à ajuster l\'équilibre entre les ordres.',
                        'choices' => [
                            ['choice_text' => 'Une pression à la hausse sur le prix jusqu\'à ce que l\'offre et la demande se rééquilibrent', 'is_correct' => true],
                            ['choice_text' => 'Une pression à la baisse sur le prix, car les vendeurs sont moins nombreux que les acheteurs', 'is_correct' => false],
                            ['choice_text' => 'Une stabilité du prix, car la quantité offerte détermine seule la valeur de l\'action', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du prix limitée par l\'État dès que la demande des acheteurs dépasse l\'offre disponible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prix des actifs, taux d\'actualisation et décisions',
                'description' => 'Mettez en pratique les relations entre flux futurs, taux d\'actualisation, risque et prix des actifs dans des mini-cas financiers.',
                'questions' => [
                    [
                        'question' => 'Un actif promet 1 260 € dans un an. À un taux d\'actualisation de 5 %, quelle est sa valeur actuelle ?',
                        'explanation' => 'La valeur actuelle est 1 260 / 1,05 = 1 200 €. On divise le flux futur par un facteur de capitalisation correspondant au taux d\'actualisation.',
                        'choices' => [
                            ['choice_text' => '1 323 €', 'is_correct' => false],
                            ['choice_text' => '1 260 €', 'is_correct' => false],
                            ['choice_text' => '1 197 €', 'is_correct' => false],
                            ['choice_text' => '1 200 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs produisent les mêmes flux futurs. Lequel devrait avoir la valeur actuelle la plus faible dans un modèle simple ?',
                        'explanation' => 'Un taux d\'actualisation plus élevé réduit davantage la valeur présente de flux futurs identiques. Cela reflète notamment un coût du temps ou un risque considéré comme plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Celui dont le taux d\'actualisation est le plus faible', 'is_correct' => false],
                            ['choice_text' => 'Celui dont les flux sont actualisés à un taux plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Celui dont le prix de marché actuel est le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Les deux, puisque des flux identiques donnent la même valeur actuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise estime que les flux futurs d\'un projet seront plus incertains qu\'elle ne le pensait initialement. Quel changement d\'évaluation est plausible ?',
                        'explanation' => 'Un risque perçu plus élevé peut conduire les investisseurs à exiger une rémunération supérieure. Avec des flux identiques, un taux d\'actualisation plus élevé réduit leur valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du taux de rendement exigé, ce qui peut augmenter la valeur actuelle du projet', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des flux de trésorerie anticipés, ce qui peut augmenter la valeur actuelle du projet', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du taux de rendement exigé, ce qui peut réduire la valeur actuelle du projet', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du coût de la dette de l\'entreprise, ce qui peut compenser le surcroît d\'incertitude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet coûte 50 000 € aujourd\'hui et sa valeur actuelle des flux futurs est estimée à 56 000 €. Quelle est sa VAN simplifiée ?',
                        'explanation' => 'La VAN simplifiée est 56 000 - 50 000 = 6 000 €. Elle est positive selon les hypothèses retenues, ce qui indique une création de valeur dans ce cadre.',
                        'choices' => [
                            ['choice_text' => '106 000 €', 'is_correct' => false],
                            ['choice_text' => '-6 000 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => true],
                            ['choice_text' => '56 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action a un cours de 40 € et l\'entreprise annonce une amélioration durable de ses perspectives bénéficiaires. Si les autres facteurs restent inchangés, quel mécanisme de valorisation est plausible ?',
                        'explanation' => 'Si les perspectives économiques de l\'entreprise s\'améliorent, les investisseurs peuvent relever leurs anticipations de flux futurs. Une valeur intrinsèque estimée plus élevée peut alors soutenir une hausse du prix de marché.',
                        'choices' => [
                            ['choice_text' => 'La valeur comptable de l\'action est modifiée, ce qui fixe directement le nouveau prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Les anticipations de flux futurs peuvent augmenter et soutenir un prix plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d\'actions émises augmente et rend le cours plus élevé pour chaque titre', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rendement exigé des investisseurs augmente, ce qui réduit la valeur actuelle de l\'action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement le lien entre prix et rendement exigé, dans un modèle simple à flux fixes ?',
                        'explanation' => 'Plus le taux d\'actualisation est élevé, plus les flux futurs sont fortement réduits lorsqu\'on les ramène à aujourd\'hui. À flux constants, la valeur actuelle diminue.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du rendement exigé tend à augmenter le prix actuel d\'un actif à flux fixes', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du rendement exigé tend à réduire le prix actuel d\'un actif à flux fixes', 'is_correct' => true],
                            ['choice_text' => 'Le prix d\'un actif à flux fixes dépend du montant des flux mais pas du rendement exigé', 'is_correct' => false],
                            ['choice_text' => 'Le rendement exigé ne modifie que le prix des actions, pas celui des obligations à flux fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 20 000 € dans un an et 20 000 € dans deux ans. À taux positif, lequel des deux flux contribue le plus à la valeur actuelle ?',
                        'explanation' => 'Le flux de la première année subit moins de périodes d\'actualisation. Il a donc une valeur actuelle plus élevée que le même montant reçu un an plus tard.',
                        'choices' => [
                            ['choice_text' => 'Le flux de 20 000 € reçu dans un an', 'is_correct' => true],
                            ['choice_text' => 'Le flux de 20 000 € reçu dans deux ans', 'is_correct' => false],
                            ['choice_text' => 'Les deux de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend de l\'inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur exige 7 % de rendement pour un actif dont les flux sont incertains, contre 3 % pour une référence plus sûre. Quelle différence représentent ces 4 points ?',
                        'explanation' => 'L\'écart de 4 points entre le rendement exigé de l\'actif risqué et celui de la référence plus sûre peut être interprété comme une prime de risque dans cette simplification.',
                        'choices' => [
                            ['choice_text' => 'Un supplément de rendement certain obtenu en échange d\'une immobilisation de l\'épargne', 'is_correct' => false],
                            ['choice_text' => 'Une compensation de l\'inflation anticipée entre le moment de l\'achat et celui de la vente', 'is_correct' => false],
                            ['choice_text' => 'Une marge perçue par l\'intermédiaire financier pour exécuter l\'achat de l\'actif risqué', 'is_correct' => false],
                            ['choice_text' => 'Une rémunération supplémentaire associée à un risque plus élevé dans cette comparaison', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente son estimation de chiffre d\'affaires mais aussi ses coûts de manière proportionnelle. Quel point faut-il examiner avant de conclure que la valeur du projet augmente ?',
                        'explanation' => 'La valeur financière dépend des flux nets, pas du seul chiffre d\'affaires. Une hausse des ventes peut être accompagnée de coûts supplémentaires qui neutralisent une partie ou la totalité de l\'effet favorable.',
                        'choices' => [
                            ['choice_text' => 'L\'effet net sur les flux de trésorerie et sur la rentabilité du projet', 'is_correct' => true],
                            ['choice_text' => 'Le montant du chiffre d\'affaires, qui détermine à lui seul la valeur créée', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de la marge brute des concurrents sur le même marché', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de clients de l\'entreprise au cours de l\'année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif verse 500 € dans deux ans. À un taux d\'actualisation de 10 %, sa valeur actuelle est-elle supérieure ou inférieure à 500 € ?',
                        'explanation' => 'Avec un taux d\'actualisation positif, un montant futur a une valeur actuelle inférieure à son montant nominal. Ici, le flux est divisé par 1,10².',
                        'choices' => [
                            ['choice_text' => 'Inférieure à 500 €', 'is_correct' => true],
                            ['choice_text' => 'Supérieure à 500 €', 'is_correct' => false],
                            ['choice_text' => 'Également 500 € quel que soit le taux', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer sans connaître la couleur du titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut réduire la valeur d\'un actif même si ses flux futurs nominaux restent inchangés ?',
                        'explanation' => 'Un taux d\'actualisation plus élevé réduit mathématiquement la valeur actuelle des flux futurs inchangés. Les changements de risque peuvent donc influencer la valeur même sans modifier les montants nominaux anticipés.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du risque perçu', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du taux d\'actualisation exigé', 'is_correct' => true],
                            ['choice_text' => 'Une réception plus proche des mêmes flux', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des coûts de financement pertinents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet a une VAN légèrement positive dans le scénario central mais négative dans plusieurs scénarios défavorables. Que faut-il surtout retenir ?',
                        'explanation' => 'Une VAN proche de zéro et sensible aux hypothèses indique une forte dépendance du résultat à l\'environnement économique. L\'analyse de sensibilité permet d\'évaluer cette vulnérabilité avant une décision.',
                        'choices' => [
                            ['choice_text' => 'La décision dépend fortement des hypothèses et mérite une analyse de sensibilité du risque', 'is_correct' => true],
                            ['choice_text' => 'Le projet est sans risque puisque sa VAN est positive dans le scénario central', 'is_correct' => false],
                            ['choice_text' => 'Le projet doit être rejeté sans autre analyse dès qu\'une VAN négative apparaît dans un scénario', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'actualisation doit être abaissé jusqu\'à ce que la VAN devienne positive dans les scénarios défavorables', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques d\'économie financière',
                'description' => 'Un dernier entraînement fondé sur de courts cas pour mobiliser les principaux concepts de finance économique.',
                'questions' => [
                    [
                        'question' => 'Une entreprise peut financer un projet à 5 %. Le projet devrait générer des flux dont le rendement attendu est de 8 %, mais il comporte une forte incertitude. Quelle information supplémentaire est la plus importante avant de conclure ?',
                        'explanation' => 'L\'écart entre rendement attendu et coût du financement n\'est pas suffisant à lui seul. Il faut déterminer si le rendement attendu compense correctement le risque et tenir compte du profil temporel des flux.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de projets que l\'entreprise a déjà financés au cours des dix dernières années', 'is_correct' => false],
                            ['choice_text' => 'Le taux de croissance moyen du secteur dans lequel opère le concurrent principal', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de risque et la manière dont il est déjà pris en compte dans le rendement exigé', 'is_correct' => true],
                            ['choice_text' => 'Le montant du dividende que l\'entreprise a versé à ses actionnaires l\'année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille reçoit 12 000 € aujourd\'hui ou 12 600 € dans un an. Avec un rendement alternatif certain de 5 %, quelle affirmation est correcte ?',
                        'explanation' => 'À 5 %, 12 000 € deviennent 12 600 € en un an. Les deux options sont donc financièrement équivalentes dans cette hypothèse de rendement certain et sans autre différence.',
                        'choices' => [
                            ['choice_text' => 'Les 12 000 € aujourd\'hui valent davantage, car une somme immédiate est toujours préférable', 'is_correct' => false],
                            ['choice_text' => 'Les 12 000 € aujourd\'hui valent davantage, car 5 % de 12 000 € font 60 €', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont la même valeur, car 12 000 × 1,05 = 12 600', 'is_correct' => true],
                            ['choice_text' => 'Les deux ne sont pas comparables en euros d\'aujourd\'hui', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exportatrice recevra des paiements dans une devise étrangère. Quel facteur financier doit-elle notamment surveiller ?',
                        'explanation' => 'La valeur en monnaie domestique d\'un paiement futur en devise étrangère peut varier avec le taux de change. Cette incertitude constitue un risque de change.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change', 'is_correct' => true],
                            ['choice_text' => 'Le risque de dilution du capital', 'is_correct' => false],
                            ['choice_text' => 'Le risque de remboursement anticipé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur choisit une seule action parce qu\'elle a produit un excellent rendement l\'an dernier. Quelle faiblesse principale présente cette décision ?',
                        'explanation' => 'Une excellente performance passée ne garantit pas une performance future. Concentrer tout le portefeuille sur un seul actif augmente aussi le risque spécifique supporté.',
                        'choices' => [
                            ['choice_text' => 'Elle suppose que le risque d\'une action diminue quand son rendement passé augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle ignore la diversification et suppose que la performance passée se répétera', 'is_correct' => true],
                            ['choice_text' => 'Elle oblige l\'investisseur à payer des frais de gestion plus élevés qu\'avec un portefeuille diversifié', 'is_correct' => false],
                            ['choice_text' => 'Elle confond le rendement attendu avec le rendement promis par l\'émetteur de l\'action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse un coupon fixe de 4 %. De nouvelles obligations comparables sont émises à 6 %. Quel ajustement est plausible pour l\'ancienne obligation sur le marché secondaire ?',
                        'explanation' => 'Le coupon contractuel ne change pas simplement parce que le marché évolue. Pour rendre l\'ancienne obligation plus attractive face aux nouveaux titres, son prix de marché peut baisser.',
                        'choices' => [
                            ['choice_text' => 'Son prix peut diminuer afin d\'offrir un rendement courant plus compétitif', 'is_correct' => true],
                            ['choice_text' => 'Son prix peut augmenter car son coupon de 4 % est plus sûr que celui des nouveaux titres', 'is_correct' => false],
                            ['choice_text' => 'Son coupon peut être relevé par l\'émetteur afin de s\'aligner sur le taux de 6 %', 'is_correct' => false],
                            ['choice_text' => 'Son prix reste fixé à sa valeur nominale jusqu\'à l\'échéance quelles que soient les conditions du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet prévoit 30 000 € de flux futurs mais demande 35 000 € d\'investissement initial. Peut-on conclure immédiatement qu\'il détruit 5 000 € de valeur ?',
                        'explanation' => 'Des flux futurs ne sont pas directement comparables à un investissement présent. La VAN utilise leur valeur actuelle, déterminée avec un taux d\'actualisation cohérent.',
                        'choices' => [
                            ['choice_text' => 'Non, il faut actualiser les flux futurs et tenir compte du calendrier et du taux pertinent', 'is_correct' => true],
                            ['choice_text' => 'Oui, car la différence entre les flux et l\'investissement mesure directement la valeur créée ou détruite', 'is_correct' => false],
                            ['choice_text' => 'Non, car la valeur d\'un projet se juge sur son chiffre d\'affaires et non sur ses flux', 'is_correct' => false],
                            ['choice_text' => 'Non, car seul le bénéfice comptable de l\'entreprise permet de juger la valeur d\'un projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque observe que deux entreprises demandent le même montant de crédit, mais que l\'une présente des flux beaucoup plus stables. Quel élément peut justifier une évaluation différente ?',
                        'explanation' => 'La stabilité des flux peut influencer la probabilité de remboursement et donc le risque de crédit. Un prêteur peut intégrer cette différence dans son analyse et ses conditions.',
                        'choices' => [
                            ['choice_text' => 'Le montant du dividende versé par chaque entreprise à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'La taille du capital social inscrit dans les statuts de chaque société', 'is_correct' => false],
                            ['choice_text' => 'Le profil de risque et la capacité probable de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d\'actionnaires de chacune des deux entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un marché est très liquide et reçoit une information importante sur une entreprise. Pourquoi le prix peut-il changer rapidement ?',
                        'explanation' => 'Sur un marché liquide, les transactions peuvent être nombreuses et rapides. Une information nouvelle peut donc se traduire rapidement par des ajustements du prix selon les anticipations des participants.',
                        'choices' => [
                            ['choice_text' => 'Les teneurs de marché fixent le nouveau prix sans tenir compte des ordres des investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs reçoivent l\'information avec retard parce que les transactions sont trop nombreuses', 'is_correct' => false],
                            ['choice_text' => 'Les nombreux ordres d\'achat et de vente peuvent intégrer rapidement l\'information dans le prix', 'is_correct' => true],
                            ['choice_text' => 'Les régulateurs imposent un nouveau prix dès que l\'information est publiée sur le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise conserve 2 M€ sur un compte faiblement rémunéré alors qu\'elle pourrait financer un projet rentable après analyse. Quel arbitrage économique doit-elle considérer ?',
                        'explanation' => 'Conserver des liquidités offre sécurité et flexibilité, mais leur rendement peut être faible. L\'entreprise doit comparer ce bénéfice au rendement, au risque et aux besoins de financement du projet.',
                        'choices' => [
                            ['choice_text' => 'Le niveau des dividendes habituellement versés comparé au bénéfice comptable que l\'entreprise a réalisé au cours de l\'exercice précédent', 'is_correct' => false],
                            ['choice_text' => 'Le rendement et le risque du projet comparés au rendement et à la sécurité procurés par les liquidités', 'is_correct' => true],
                            ['choice_text' => 'Le coût d\'émission d\'actions nouvelles comparé au montant de la trésorerie déjà détenue', 'is_correct' => false],
                            ['choice_text' => 'Le prix d\'achat des équipements du projet comparé à la valeur résiduelle de ceux qu\'elle possède', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète un actif sans analyser ses flux ni son risque et uniquement parce qu\'un ami affirme qu\'il va monter. Quel élément de décision financière manque principalement ?',
                        'explanation' => 'Une décision d\'investissement rationnelle doit considérer les flux potentiels, les risques, le prix payé et les alternatives. Une simple affirmation extérieure ne constitue pas une analyse financière suffisante.',
                        'choices' => [
                            ['choice_text' => 'Une confirmation de la rumeur par plusieurs sources informelles proches de l\'investisseur', 'is_correct' => false],
                            ['choice_text' => 'Une évaluation structurée du rendement attendu, du risque et de la valeur de l\'actif', 'is_correct' => true],
                            ['choice_text' => 'Une répartition préalable du capital entre au moins dix actifs différents du marché', 'is_correct' => false],
                            ['choice_text' => 'Une durée de détention fixée à l\'avance et supérieure à cinq ans pour limiter le risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L\'inflation passe de 2 % à 6 %, tandis que le taux nominal d\'un dépôt reste à 4 %. Quelle évolution approximative du rendement réel observe-t-on ?',
                        'explanation' => 'En approximation simple, le rendement réel est taux nominal moins inflation. Il était d\'environ 4 % - 2 % = +2 %, puis devient 4 % - 6 % = -2 %.',
                        'choices' => [
                            ['choice_text' => 'Il passe d\'environ +2 % à environ -2 %', 'is_correct' => true],
                            ['choice_text' => 'Il passe de -2 % à +2 %', 'is_correct' => false],
                            ['choice_text' => 'Il reste égal à 4 % car le taux nominal ne change pas', 'is_correct' => false],
                            ['choice_text' => 'Il passe d\'environ +6 % à environ +10 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une annonce publique prévisible n\'entraîne presque aucun mouvement du cours d\'une action, tandis qu\'une annonce inattendue provoque un fort mouvement. Quelle interprétation est la plus cohérente avec l\'efficience informationnelle ?',
                        'explanation' => 'Ce qui compte pour le prix est notamment la différence entre ce qui était déjà anticipé et ce qui constitue une nouvelle information. Une surprise peut donc déclencher un ajustement alors qu\'une information attendue est déjà incorporée.',
                        'choices' => [
                            ['choice_text' => 'Le prix devrait réagir davantage à l\'annonce prévisible qu\'à l\'annonce inattendue, car l\'information prévisible est mieux connue des investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Le marché n\'est pas efficient puisque deux annonces publiques de même nature devraient produire une réaction de même ampleur', 'is_correct' => false],
                            ['choice_text' => 'Le marché a réagi à retardement à l\'annonce prévisible, ce qui prouve une absence d\'efficience', 'is_correct' => false],
                            ['choice_text' => 'Une information déjà anticipée peut être déjà intégrée au prix, alors qu\'une surprise peut modifier rapidement les anticipations', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit choisir entre deux projets : A, rendement attendu de 7 % avec risque modéré ; B, rendement attendu de 10 % avec risque très élevé. Quelle approche est la plus cohérente ?',
                        'explanation' => 'La décision doit mettre en regard la rémunération attendue et le risque. Un rendement supérieur n\'est pas automatiquement meilleur si le risque supplémentaire exige une compensation encore plus importante.',
                        'choices' => [
                            ['choice_text' => 'Comparer les rendements attendus aux risques et au rendement exigé pour chaque projet', 'is_correct' => true],
                            ['choice_text' => 'Choisir le projet B car son rendement attendu dépasse de 3 points celui du projet A', 'is_correct' => false],
                            ['choice_text' => 'Choisir le projet A car un risque modéré vaut mieux qu\'un rendement attendu plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Répartir le budget à parts égales entre les deux projets pour éviter de trancher', 'is_correct' => false],
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
