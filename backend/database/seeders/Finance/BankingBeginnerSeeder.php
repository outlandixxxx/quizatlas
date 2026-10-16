<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BankingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'banking')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 57],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 23, 'passing_score' => 56],
            ['duration' => 21, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 22, 'passing_score' => 54],
            ['duration' => 24, 'passing_score' => 59],
            ['duration' => 27, 'passing_score' => 61],
        ];

        $quizzes = [
            [
                'title' => 'Fondamentaux de l\'activité bancaire',
                'description' => 'Quiz d\'introduction consacré au rôle des banques, aux dépôts, aux crédits et aux principaux mécanismes de l\'activité bancaire.',
                'questions' => [
                    [
                        'question' => 'Quel est l\'un des rôles économiques essentiels d\'une banque commerciale ?',
                        'explanation' => 'La banque joue notamment un rôle d\'intermédiation financière : elle collecte des ressources, par exemple des dépôts, et accorde des financements à des ménages et des entreprises. Elle ne fixe pas les prix de l\'économie et ne peut pas garantir un rendement positif à tous les investisseurs.',
                        'choices' => [
                            ['choice_text' => 'Émettre la monnaie légale et fixer les taux directeurs de l\'ensemble de l\'économie du pays', 'is_correct' => false],
                            ['choice_text' => 'Assurer l\'intermédiation entre les agents qui disposent de fonds et ceux qui recherchent un financement', 'is_correct' => true],
                            ['choice_text' => 'Gérer les dépenses publiques et collecter les impôts pour le compte de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Assurer aux épargnants un rendement positif sur chacun de leurs placements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'un client dépose 5 000 € sur son compte bancaire, quel élément représente le mieux la situation de la banque ?',
                        'explanation' => 'Pour la banque, le solde créditeur du client représente une obligation de restitution : il figure donc au passif du bilan bancaire. Le montant déposé n\'est pas un revenu acquis par la banque.',
                        'choices' => [
                            ['choice_text' => 'Le dépôt constitue une créance de la banque sur le client', 'is_correct' => false],
                            ['choice_text' => 'Le dépôt constitue un apport en capital du client à la banque', 'is_correct' => false],
                            ['choice_text' => 'Le dépôt constitue une dette de la banque envers le client', 'is_correct' => true],
                            ['choice_text' => 'Le dépôt constitue un revenu encaissé par la banque pour l\'année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque accorde un prêt immobilier de 180 000 € à un particulier. Quel est l\'actif qui augmente directement pour la banque ?',
                        'explanation' => 'Le prêt constitue une créance détenue par la banque sur l\'emprunteur. Cette créance est comptabilisée à l\'actif du bilan bancaire, car elle représente un avantage économique futur attendu sous forme de remboursements et d\'intérêts.',
                        'choices' => [
                            ['choice_text' => 'Les capitaux propres du client', 'is_correct' => false],
                            ['choice_text' => 'La créance de prêt sur le client', 'is_correct' => true],
                            ['choice_text' => 'Les charges d\'exploitation de la banque', 'is_correct' => false],
                            ['choice_text' => 'Le capital social du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque collecte-t-elle des dépôts auprès de ses clients ?',
                        'explanation' => 'Les dépôts constituent une source importante de financement pour les banques et permettent aussi de fournir des services de paiement et de gestion de liquidité. Ils ne suppriment pas les risques bancaires et ne remplacent pas les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Pour disposer de ressources financières et offrir des services de paiement et de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire son risque de crédit en ne prêtant qu\'à ses propres déposants', 'is_correct' => false],
                            ['choice_text' => 'Pour constituer ses capitaux propres et distribuer des dividendes à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour placer l\'argent des clients sur les marchés financiers et leur reverser l\'intégralité des gains réalisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un service bancaire de paiement ?',
                        'explanation' => 'Les banques participent directement aux systèmes de paiement en exécutant notamment des virements, des prélèvements et d\'autres opérations entre comptes. Les autres propositions relèvent d\'autres fonctions économiques.',
                        'choices' => [
                            ['choice_text' => 'L\'octroi d\'un crédit immobilier à un particulier', 'is_correct' => false],
                            ['choice_text' => 'L\'exécution d\'un virement entre deux comptes', 'is_correct' => true],
                            ['choice_text' => 'L\'ouverture d\'un compte d\'épargne rémunéré', 'is_correct' => false],
                            ['choice_text' => 'La conservation de titres financiers dans un compte-titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque reçoit 1 000 € d\'intérêts sur un prêt avant de payer 300 € d\'intérêts sur des dépôts. En première approche, quel montant représente la marge d\'intérêt avant les autres coûts ?',
                        'explanation' => 'La différence entre les intérêts reçus sur les actifs rémunérateurs et les intérêts versés sur les ressources correspond ici à 1 000 - 300 = 700 €. Cette approche simplifiée ne tient pas compte des autres produits et charges bancaires.',
                        'choices' => [
                            ['choice_text' => '1 300 €', 'is_correct' => false],
                            ['choice_text' => '300 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                            ['choice_text' => '700 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la confiance des clients est-elle particulièrement importante pour une banque ?',
                        'explanation' => 'La banque repose sur des relations de confiance : les clients lui confient des dépôts et attendent que les paiements, retraits et autres opérations soient exécutés correctement. Une perte de confiance peut fragiliser la stabilité d\'une banque.',
                        'choices' => [
                            ['choice_text' => 'Parce que la confiance des clients suffit à assurer la solvabilité de la banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients financent la banque principalement par l\'intermédiaire de ses capitaux propres et de ses actions', 'is_correct' => false],
                            ['choice_text' => 'Parce que la confiance remplace les exigences de réglementation et de contrôle prudentiel', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une banque dépend notamment de la stabilité des dépôts et de la fiabilité des paiements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel poste appartient généralement au passif d\'un bilan bancaire ?',
                        'explanation' => 'Les dépôts sont des montants que la banque doit à ses clients et figurent donc généralement au passif. Les prêts et autres créances détenus par la banque constituent des actifs.',
                        'choices' => [
                            ['choice_text' => 'Les prêts accordés aux ménages', 'is_correct' => false],
                            ['choice_text' => 'Les dépôts de la clientèle', 'is_correct' => true],
                            ['choice_text' => 'Les titres détenus par la banque', 'is_correct' => false],
                            ['choice_text' => 'Les créances sur les entreprises clientes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client rembourse 2 000 € du principal d\'un prêt. Quel est l\'effet principal sur la créance de prêt de la banque ?',
                        'explanation' => 'Le remboursement du principal réduit le montant restant dû par l\'emprunteur. La créance de prêt inscrite à l\'actif de la banque diminue donc de 2 000 €, hors prise en compte des éventuels intérêts versés séparément.',
                        'choices' => [
                            ['choice_text' => 'La créance augmente de 2 000 €', 'is_correct' => false],
                            ['choice_text' => 'La créance reste inchangée à l\'actif', 'is_correct' => false],
                            ['choice_text' => 'La créance diminue de 2 000 €', 'is_correct' => true],
                            ['choice_text' => 'Les capitaux propres diminuent de 2 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement le principe de transformation des échéances par une banque ?',
                        'explanation' => 'La transformation des échéances signifie que la banque peut détenir des actifs à plus long terme tout en ayant des ressources, notamment des dépôts, dont les caractéristiques de maturité sont différentes. Cette fonction crée aussi des enjeux de liquidité et de gestion des risques.',
                        'choices' => [
                            ['choice_text' => 'La banque peut financer des prêts plus longs avec des ressources dont la maturité est différente', 'is_correct' => true],
                            ['choice_text' => 'La banque répartit ses prêts entre plusieurs emprunteurs pour réduire le risque de concentration', 'is_correct' => false],
                            ['choice_text' => 'La banque finance ses prêts avec ses seuls capitaux propres, sans recourir aux dépôts', 'is_correct' => false],
                            ['choice_text' => 'La banque peut modifier la durée d\'un prêt en cours sans l\'accord de l\'emprunteur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Dépôts, crédits et bilan bancaire',
                'description' => 'Analyse des principaux postes du bilan bancaire et des liens entre dépôts, crédits, liquidité et financement.',
                'questions' => [
                    [
                        'question' => 'Une banque possède 20 M€ de prêts à la clientèle et 8 M€ de titres financiers, toutes choses égales par ailleurs. Quels sont les deux exemples d\'actifs bancaires ?',
                        'explanation' => 'Les prêts et les titres détenus par la banque sont des ressources économiques contrôlées par la banque et figurent donc à l\'actif. Les dépôts et certaines dettes envers des tiers appartiennent au passif.',
                        'choices' => [
                            ['choice_text' => 'Les dépôts des clients et les salaires à payer', 'is_correct' => false],
                            ['choice_text' => 'Les dépôts et les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts versés et les dépôts', 'is_correct' => false],
                            ['choice_text' => 'Les prêts à la clientèle et les titres financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque affiche 50 M€ d\'actifs et 45 M€ de passifs. En supposant qu\'il n\'y a pas d\'autre élément à considérer, combien représentent ses capitaux propres ?',
                        'explanation' => 'Dans un bilan, Actif = Passif + Capitaux propres. Les capitaux propres sont donc 50 - 45 = 5 M€.',
                        'choices' => [
                            ['choice_text' => '95 M€', 'is_correct' => false],
                            ['choice_text' => '45 M€', 'is_correct' => false],
                            ['choice_text' => '50 M€', 'is_correct' => false],
                            ['choice_text' => '5 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque reçoit un nouveau dépôt de 4 000 € et conserve le montant sous forme de liquidité. Quelle proposition décrit le mieux l\'effet initial simplifié ?',
                        'explanation' => 'Dans cette représentation simplifiée, la réception d\'un dépôt augmente la trésorerie ou les actifs liquides de la banque et crée simultanément une obligation envers le déposant. Le dépôt n\'est pas un revenu.',
                        'choices' => [
                            ['choice_text' => 'Les liquidités à l\'actif augmentent de 4 000 € et les capitaux propres au passif aussi', 'is_correct' => false],
                            ['choice_text' => 'Les dépôts à l\'actif et les liquidités au passif augmentent de 4 000 €', 'is_correct' => false],
                            ['choice_text' => 'Les liquidités à l\'actif et les dépôts au passif augmentent de 4 000 €', 'is_correct' => true],
                            ['choice_text' => 'Les prêts à l\'actif augmentent de 4 000 € et les dépôts au passif diminuent d\'autant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît si une banque finance des actifs relativement peu liquides avec des ressources qui peuvent être retirées rapidement ?',
                        'explanation' => 'Le risque de liquidité correspond notamment à la difficulté de disposer de suffisamment de liquidités au moment où les obligations arrivent à échéance. Un décalage entre la liquidité des actifs et celle des ressources peut accroître ce risque.',
                        'choices' => [
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Un risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change', 'is_correct' => false],
                            ['choice_text' => 'Un risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque a collecté 10 M€ de dépôts et détient 7 M€ de prêts à la clientèle. Peut-on conclure simplement que les 3 M€ restants sont forcément des bénéfices ?',
                        'explanation' => 'Une simple différence entre dépôts et prêts ne permet pas de mesurer le bénéfice. Une banque détient aussi d\'autres actifs et supporte diverses obligations et charges. Le résultat est déterminé à partir des produits et charges sur une période.',
                        'choices' => [
                            ['choice_text' => 'Oui, car la différence entre dépôts et prêts correspond au bénéfice de la période', 'is_correct' => false],
                            ['choice_text' => 'Non, car les dépôts d\'une banque sont comptabilisés à l\'actif et non au passif', 'is_correct' => false],
                            ['choice_text' => 'Oui, car une banque doit conserver cette différence en bénéfice pour couvrir ses engagements', 'is_correct' => false],
                            ['choice_text' => 'Non, car le bilan comprend d\'autres actifs, passifs et capitaux propres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel poste est le plus directement lié à une somme que la banque doit rembourser à une autre institution financière ?',
                        'explanation' => 'Une somme due à une autre institution représente une obligation future de paiement et est donc enregistrée comme une dette au passif, sous réserve de la présentation comptable précise retenue.',
                        'choices' => [
                            ['choice_text' => 'Un prêt client à l\'actif', 'is_correct' => false],
                            ['choice_text' => 'Une dette financière au passif', 'is_correct' => true],
                            ['choice_text' => 'Une immobilisation incorporelle', 'is_correct' => false],
                            ['choice_text' => 'Un produit bancaire à recevoir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque accorde un crédit de 100 000 € dont 60 000 € restent à rembourser après plusieurs échéances. Quel montant correspond au principal encore dû ?',
                        'explanation' => 'Le principal restant dû est explicitement de 60 000 €. Les intérêts futurs ne font pas partie de ce principal restant dû.',
                        'choices' => [
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 € plus les intérêts futurs', 'is_correct' => false],
                            ['choice_text' => '160 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque cherche-t-elle à maintenir un niveau suffisant de liquidité ?',
                        'explanation' => 'La liquidité permet à la banque d\'honorer ses engagements lorsqu\'ils arrivent à échéance ou lorsque les clients souhaitent utiliser leurs fonds. Elle constitue une dimension fondamentale de la gestion bancaire.',
                        'choices' => [
                            ['choice_text' => 'Pour maximiser son rendement en conservant l\'essentiel de ses actifs sous forme de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour respecter l\'obligation de verser un dividende stable à ses actionnaires chaque année', 'is_correct' => false],
                            ['choice_text' => 'Pour financer à long terme les prêts immobiliers accordés aux ménages et aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Pour faire face aux retraits, paiements et autres besoins de trésorerie à court terme', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un client verse 1 200 € sur son compte, puis retire immédiatement 500 €. Quel est le solde net de ces deux opérations ?',
                        'explanation' => 'Le montant net est 1 200 - 500 = 700 €. Le calcul illustre simplement l\'effet combiné d\'un dépôt puis d\'un retrait sur le solde du client.',
                        'choices' => [
                            ['choice_text' => '1 700 €', 'is_correct' => false],
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '1 200 €', 'is_correct' => false],
                            ['choice_text' => '700 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est le plus juste concernant un bilan bancaire ?',
                        'explanation' => 'Le bilan est un état de la situation financière à une date donnée. Il met notamment en regard les ressources et les emplois de la banque à travers ses actifs, ses passifs et ses capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Il présente sur une période donnée les produits et les charges de la banque', 'is_correct' => false],
                            ['choice_text' => 'Il présente à une date donnée les actifs, les passifs et les capitaux propres de la banque', 'is_correct' => true],
                            ['choice_text' => 'Il présente les flux d\'encaissements et de décaissements de trésorerie de la banque sur un exercice', 'is_correct' => false],
                            ['choice_text' => 'Il présente les prévisions de bénéfices de la banque pour les prochaines années', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse du crédit et des emprunteurs',
                'description' => 'Mise en pratique des principaux critères utilisés pour apprécier la capacité d\'un emprunteur à rembourser un crédit.',
                'questions' => [
                    [
                        'question' => 'Avant d\'accorder un prêt, pourquoi une banque analyse-t-elle les revenus et les charges de l\'emprunteur ?',
                        'explanation' => 'L\'analyse des revenus et des charges permet d\'estimer la capacité de l\'emprunteur à honorer ses échéances. Elle réduit l\'incertitude, sans toutefois supprimer totalement le risque de défaut.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier sa capacité de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Pour estimer la valeur du bien qu\'il souhaite acheter', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer le montant des impôts qu\'il devra payer', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier l\'origine licite des fonds qu\'il utilise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage dispose de 3 000 € de revenu mensuel et de 1 200 € de charges de dettes mensuelles. Quel est le ratio simple dette/revenu calculé sur ces charges ?',
                        'explanation' => 'Le ratio est 1 200 / 3 000 = 0,40, soit 40 %. Cet indicateur simple donne une idée du poids des charges de dette par rapport au revenu mensuel.',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces éléments constitue généralement une garantie ou un mécanisme de protection du prêteur ?',
                        'explanation' => 'Une hypothèque peut servir de sûreté au prêteur : en cas de défaut, elle peut contribuer à protéger le prêteur selon le droit applicable et les modalités du contrat. Les autres éléments ne constituent pas en eux-mêmes une garantie.',
                        'choices' => [
                            ['choice_text' => 'Un relevé de compte récent de l\'emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Un engagement verbal de l\'emprunteur à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Un taux fixe maintenu sur toute la durée', 'is_correct' => false],
                            ['choice_text' => 'Une hypothèque sur un bien financé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux emprunteurs ont le même revenu, mais le premier a déjà plusieurs crédits et le second n\'a pratiquement aucune dette. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'À revenu égal, les obligations financières déjà existantes peuvent modifier la capacité de remboursement disponible. Une décision de crédit prend donc en compte plusieurs informations et pas uniquement le revenu.',
                        'choices' => [
                            ['choice_text' => 'Le niveau d\'endettement existant peut conduire la banque à apprécier différemment leur capacité de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Le premier présente un meilleur profil car il a démontré sa capacité à obtenir plusieurs crédits auprès de banques', 'is_correct' => false],
                            ['choice_text' => 'Les deux emprunteurs présentent la même capacité de remboursement puisque leur revenu est identique', 'is_correct' => false],
                            ['choice_text' => 'Le niveau d\'endettement n\'intervient que pour fixer la durée du prêt, pas pour juger la capacité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque observe qu\'un client a plusieurs échéances impayées. Quel risque est le plus directement concerné ?',
                        'explanation' => 'Des échéances impayées indiquent une difficulté de remboursement de la dette. Le risque de crédit correspond précisément au risque de perte lié au défaut ou à la dégradation de la capacité d\'un emprunteur ou d\'une contrepartie.',
                        'choices' => [
                            ['choice_text' => 'Le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prêt de 50 000 € est remboursé à hauteur de 8 000 € de principal. Quel est le principal restant dû ?',
                        'explanation' => 'Le principal restant dû est 50 000 - 8 000 = 42 000 €. Les intérêts ne modifient pas ce calcul lorsqu\'ils sont distincts du remboursement du principal.',
                        'choices' => [
                            ['choice_text' => '58 000 €', 'is_correct' => false],
                            ['choice_text' => '8 000 €', 'is_correct' => false],
                            ['choice_text' => '42 000 €', 'is_correct' => true],
                            ['choice_text' => '50 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle demander des informations sur l\'activité d\'une entreprise qui sollicite un crédit ?',
                        'explanation' => 'L\'analyse du dossier d\'une entreprise vise notamment à comprendre son modèle économique, ses flux de trésorerie et ses ressources financières. Elle aide la banque à apprécier le risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre ses revenus, ses charges, sa trésorerie et sa capacité de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Pour fixer le prix de vente des produits que l\'entreprise commercialise', 'is_correct' => false],
                            ['choice_text' => 'Pour se substituer à l\'expert-comptable dans l\'établissement des comptes annuels', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la valeur boursière de l\'entreprise et anticiper le cours de ses actions cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario augmente généralement le risque de défaut, toutes choses égales par ailleurs ?',
                        'explanation' => 'Une baisse durable des ressources disponibles réduit la capacité de l\'emprunteur à payer les échéances, ce qui augmente généralement le risque de défaut, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Une réduction du montant des dettes sans autre changement', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du revenu avec des charges inchangées', 'is_correct' => false],
                            ['choice_text' => 'Une forte baisse durable du revenu disponible de l\'emprunteur', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration de la trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'une banque exige un apport personnel plus important pour un financement immobilier, quel peut être l\'objectif principal ?',
                        'explanation' => 'Un apport plus important réduit la part du financement fournie par la banque et peut donc réduire son exposition. Il ne garantit toutefois ni la stabilité du prix du bien ni l\'absence de défaut.',
                        'choices' => [
                            ['choice_text' => 'Réduire le montant financé par la banque et limiter son exposition au risque', 'is_correct' => true],
                            ['choice_text' => 'Allonger la durée du prêt pour diminuer les mensualités à la charge du client', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le rendement de la banque en facturant des frais de dossier plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que le client dispose d\'un revenu suffisant pour couvrir ses charges mensuelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque compare deux dossiers. Le dossier A a des revenus élevés mais très variables ; le dossier B a des revenus légèrement plus faibles mais plus stables. Quelle approche est la plus cohérente ?',
                        'explanation' => 'L\'évaluation du crédit ne se limite pas au niveau des revenus. Leur régularité, les charges, les garanties et d\'autres éléments du dossier influencent également la capacité de remboursement.',
                        'choices' => [
                            ['choice_text' => 'Retenir le dossier A car des revenus élevés compensent leur variabilité', 'is_correct' => false],
                            ['choice_text' => 'Examiner à la fois le niveau et la stabilité des revenus avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'Retenir le dossier B car la stabilité du revenu suffit sans examiner son niveau', 'is_correct' => false],
                            ['choice_text' => 'Se baser sur la moyenne des deux revenus pour accorder le même montant aux deux dossiers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux d\'intérêt et revenus bancaires',
                'description' => 'Comprendre le rôle des intérêts, des taux de crédit et des coûts de financement dans la rentabilité bancaire.',
                'questions' => [
                    [
                        'question' => 'Une banque accorde un prêt de 10 000 € à un taux annuel simple de 6 %. Quel est l\'intérêt annuel, en supposant que le principal reste inchangé pendant un an ?',
                        'explanation' => 'L\'intérêt annuel est 10 000 × 6 % = 600 €. Le calcul suppose ici un principal inchangé et ne prend pas en compte d\'autres frais.',
                        'choices' => [
                            ['choice_text' => '600 €', 'is_correct' => true],
                            ['choice_text' => '60 €', 'is_correct' => false],
                            ['choice_text' => '1 600 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux facturé sur les prêts augmente alors que le coût des dépôts reste inchangé, quel effet peut-on attendre, toutes choses égales par ailleurs, sur la marge d\'intérêt de la banque ?',
                        'explanation' => 'Si les revenus d\'intérêts augmentent sur les actifs alors que le coût des ressources reste inchangé, l\'écart entre les deux peut s\'élargir. L\'effet réel dépend ensuite de la composition du bilan et des autres coûts.',
                        'choices' => [
                            ['choice_text' => 'Une diminution', 'is_correct' => false],
                            ['choice_text' => 'Une absence de variation', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation', 'is_correct' => true],
                            ['choice_text' => 'Une inversion de la marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément représente le mieux un revenu d\'intérêt pour une banque ?',
                        'explanation' => 'Les intérêts reçus sur les crédits rémunèrent le financement accordé et constituent un revenu d\'intérêt. Le remboursement du principal réduit principalement la créance sans constituer, à lui seul, un produit d\'intérêt.',
                        'choices' => [
                            ['choice_text' => 'Le remboursement du principal d\'un prêt', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt reçu d\'un client', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts reçus sur les crédits accordés', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation des dettes envers une autre banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un crédit de 30 000 € génère 1 500 € d\'intérêts sur une période. Quel taux simple représente ces intérêts par rapport au principal ?',
                        'explanation' => 'Le taux simple est 1 500 / 30 000 = 0,05, soit 5 %. Le calcul suppose que l\'on compare directement l\'intérêt à la base de 30 000 €.',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque ne peut-elle pas assimiler le taux d\'un prêt au coût total du financement pour le client ?',
                        'explanation' => 'Le taux d\'intérêt est un élément majeur du coût d\'un crédit, mais le coût global peut aussi dépendre de frais et de commissions prévus par le contrat. Il faut donc considérer les conditions complètes du financement.',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux d\'un prêt est fixé par la banque centrale et non par la banque prêteuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux d\'un prêt est identique pour tous les clients d\'une même banque', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût total inclut la valeur du bien financé en plus des intérêts versés', 'is_correct' => false],
                            ['choice_text' => 'Parce que des frais, commissions et autres conditions peuvent aussi intervenir selon le produit', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque paie 2 % sur certaines ressources et perçoit 6 % sur les actifs correspondants. Quel écart de taux simple obtient-elle ?',
                        'explanation' => 'L\'écart est 6 % - 2 % = 4 points de pourcentage. Il s\'agit d\'un écart de taux, et non d\'un taux de 4 % calculé sur une base quelconque.',
                        'choices' => [
                            ['choice_text' => '8 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '3 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '4 points de pourcentage', 'is_correct' => true],
                            ['choice_text' => '0,04 point de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement un taux variable sur un crédit ?',
                        'explanation' => 'Un taux variable peut être révisé selon une référence et une fréquence définies par le contrat. Son évolution peut exposer l\'emprunteur et la banque à un risque de taux.',
                        'choices' => [
                            ['choice_text' => 'Le taux est fixé à la signature et ne change qu\'en cas de renégociation avec la banque', 'is_correct' => false],
                            ['choice_text' => 'Le taux est révisé chaque jour par la banque selon sa situation financière propre', 'is_correct' => false],
                            ['choice_text' => 'Le taux est calculé sur le seul capital restant dû, sans lien avec un indice de référence', 'is_correct' => false],
                            ['choice_text' => 'Le taux peut évoluer au cours du temps selon les modalités prévues au contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque perçoit 900 € de revenus d\'intérêts et verse 250 € d\'intérêts sur ses ressources. Quel montant simplifié reste avant autres produits, charges et provisions ?',
                        'explanation' => 'Le solde simplifié des intérêts est 900 - 250 = 650 €. Ce montant ne représente pas encore le résultat net de la banque, car d\'autres produits, charges et risques doivent être pris en compte.',
                        'choices' => [
                            ['choice_text' => '1 150 €', 'is_correct' => false],
                            ['choice_text' => '650 €', 'is_correct' => true],
                            ['choice_text' => '250 €', 'is_correct' => false],
                            ['choice_text' => '900 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une banque accorde des prêts à taux fixe et finance une partie de ses ressources à taux variable, quelle situation peut créer une pression sur sa marge ?',
                        'explanation' => 'Lorsque le coût des ressources augmente mais que le rendement des prêts à taux fixe ne bouge pas immédiatement, l\'écart entre revenus et coûts d\'intérêt peut se réduire. C\'est une illustration simple du risque de taux.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du coût des ressources variables alors que le revenu des prêts fixes reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des taux appliqués sur les nouveaux prêts alors que le coût des ressources reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des commissions perçues alors que le coût des ressources variables reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du coût des ressources variables alors que le revenu des prêts fixes reste inchangé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le moment des flux d\'intérêts est-il important dans l\'analyse d\'un crédit ?',
                        'explanation' => 'En finance, la date des flux compte en raison de la valeur temporelle de l\'argent. Le calendrier des paiements influence aussi la liquidité, le rendement et le profil de risque du crédit.',
                        'choices' => [
                            ['choice_text' => 'Parce que la valeur et le coût des flux dépendent notamment de leur calendrier', 'is_correct' => true],
                            ['choice_text' => 'Parce que le montant total des intérêts est identique quel que soit le rythme de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la date de signature du contrat détermine le taux appliqué sur la durée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le calendrier détermine le montant du principal emprunté à l\'origine', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Liquidité et stabilité bancaire',
                'description' => 'Évaluation des notions fondamentales de liquidité bancaire, de retraits et de gestion des besoins à court terme.',
                'questions' => [
                    [
                        'question' => 'Une banque doit pouvoir honorer un volume important de retraits inattendus. Quelle ressource est la plus directement utile ?',
                        'explanation' => 'Les actifs liquides peuvent être convertis rapidement en moyens de paiement avec une faible perte de valeur. Ils sont donc particulièrement utiles pour répondre à des besoins immédiats de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Des immobilisations difficiles à vendre rapidement', 'is_correct' => false],
                            ['choice_text' => 'Des bénéfices prévus dans dix ans', 'is_correct' => false],
                            ['choice_text' => 'Des créances sans échéance définie', 'is_correct' => false],
                            ['choice_text' => 'Des actifs liquides immédiatement mobilisables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel événement peut créer un besoin de liquidité pour une banque ?',
                        'explanation' => 'Des retraits plus importants nécessitent davantage de liquidités disponibles à court terme. Une banque doit donc suivre les mouvements de trésorerie et conserver des sources de financement adaptées.',
                        'choices' => [
                            ['choice_text' => 'Une hausse soudaine des remboursements de prêts par les clients', 'is_correct' => false],
                            ['choice_text' => 'Une baisse soudaine des demandes de crédit de la clientèle', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des dépôts reçus de la part des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation soudaine des retraits des clients', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un actif très rentable n\'est-il pas nécessairement un bon substitut à la liquidité ?',
                        'explanation' => 'La liquidité concerne la facilité et la rapidité avec lesquelles un actif peut être mobilisé. Un actif peut être rentable mais peu liquide, ce qui le rend moins utile pour répondre à des sorties de trésorerie immédiates.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il peut être difficile à convertir rapidement en liquidités sans subir une perte importante', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité d\'un actif dépend de son prix d\'achat initial et non de sa facilité de revente', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un actif rentable est comptabilisé au passif et ne peut donc pas servir à payer', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité d\'un actif se mesure à son seul rendement annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque dispose de 12 M€ d\'actifs liquides et anticipe 9 M€ de sorties de trésorerie à court terme. Quel excédent simplifié de liquidité ressort de ces données ?',
                        'explanation' => 'L\'excédent simplifié est 12 - 9 = 3 M€. Ce calcul ne tient pas compte d\'autres flux futurs ni de la qualité exacte des actifs liquides.',
                        'choices' => [
                            ['choice_text' => '21 M€', 'is_correct' => false],
                            ['choice_text' => '3 M€', 'is_correct' => true],
                            ['choice_text' => '9 M€', 'is_correct' => false],
                            ['choice_text' => '12 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut aggraver une tension de liquidité dans une banque ?',
                        'explanation' => 'Une vente forcée sur un marché peu liquide peut conduire à une décote importante et donc à des pertes. La diversification des financements et le maintien d\'un coussin de liquidité contribuent plutôt à la résilience.',
                        'choices' => [
                            ['choice_text' => 'Constituer un coussin d\'actifs liquides supérieur aux sorties de trésorerie prévues', 'is_correct' => false],
                            ['choice_text' => 'Allonger l\'échéance moyenne des ressources pour réduire les refinancements fréquents', 'is_correct' => false],
                            ['choice_text' => 'Vendre rapidement des actifs dans un marché peu liquide pour obtenir des liquidités', 'is_correct' => true],
                            ['choice_text' => 'Répartir les échéances de remboursement pour limiter les sorties concentrées sur une date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre liquidité et solvabilité ?',
                        'explanation' => 'Une banque peut être solvable mais rencontrer temporairement un manque de liquidité, ou l\'inverse dans certains scénarios. La première notion porte davantage sur la capacité financière globale à absorber les pertes, la seconde sur les besoins de financement et de paiement à temps.',
                        'choices' => [
                            ['choice_text' => 'La liquidité concerne la capacité à faire face aux besoins de paiement à temps, tandis que la solvabilité concerne plus largement la capacité à absorber les pertes et honorer les obligations', 'is_correct' => true],
                            ['choice_text' => 'La solvabilité concerne la capacité à faire face aux besoins de paiement à temps, tandis que la liquidité concerne plus largement la capacité à absorber les pertes et honorer les obligations', 'is_correct' => false],
                            ['choice_text' => 'La liquidité concerne le niveau de bénéfice dégagé sur l\'année, tandis que la solvabilité concerne la rapidité avec laquelle les actifs peuvent être revendus sur le marché', 'is_correct' => false],
                            ['choice_text' => 'La liquidité concerne les engagements pris envers les actionnaires, tandis que la solvabilité concerne les engagements pris envers les déposants à court terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque surveille-t-elle les échéances de ses actifs et de ses passifs ?',
                        'explanation' => 'Le calendrier des encaissements et des décaissements influence les besoins de liquidité. La banque surveille donc les échéances afin d\'anticiper les périodes où les sorties pourraient dépasser les ressources disponibles.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer le montant des impôts dus sur les intérêts perçus chaque année', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier les décalages susceptibles de créer des besoins de financement', 'is_correct' => true],
                            ['choice_text' => 'Pour fixer le taux d\'intérêt appliqué aux nouveaux dépôts de la clientèle particulière', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que chaque emprunteur respecte ses échéances de remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque remplace une partie d\'un financement à très court terme par un financement plus stable à plus long terme. Quel effet peut-on généralement rechercher ?',
                        'explanation' => 'Un financement plus stable peut réduire la nécessité de renouveler fréquemment des ressources à court terme. Cela peut améliorer la résilience face à un stress de marché, même si le financement à plus long terme peut avoir un coût différent.',
                        'choices' => [
                            ['choice_text' => 'Réduire la dépendance à des refinancements fréquents', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le volume de dépôts à vue détenus par la banque', 'is_correct' => false],
                            ['choice_text' => 'Réduire mécaniquement le coût moyen de ses ressources', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la rentabilité de ses prêts à taux fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une gestion prudente de la liquidité ?',
                        'explanation' => 'La gestion prudente de la liquidité repose sur la capacité à anticiper les flux et à disposer de ressources mobilisables. Un coussin de liquidité et une diversification des financements réduisent la dépendance à une seule source.',
                        'choices' => [
                            ['choice_text' => 'Concentrer les financements auprès d\'un unique partenaire pour négocier de meilleures conditions', 'is_correct' => false],
                            ['choice_text' => 'Placer l\'essentiel des ressources en actifs rentables de long terme pour maximiser le rendement', 'is_correct' => false],
                            ['choice_text' => 'Maintenir un coussin d\'actifs liquides et prévoir plusieurs sources de financement', 'is_correct' => true],
                            ['choice_text' => 'Réduire les actifs liquides au minimum légal et compter sur la banque centrale en cas de besoin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les sorties de trésorerie prévues sont de 7 M€ et les entrées certaines de 5 M€, quel besoin net de financement à court terme apparaît avant autres ajustements ?',
                        'explanation' => 'Le besoin net est 7 - 5 = 2 M€. La banque doit donc prévoir une source de liquidité pour couvrir cet écart si aucune autre entrée n\'est attendue.',
                        'choices' => [
                            ['choice_text' => '12 M€', 'is_correct' => false],
                            ['choice_text' => '5 M€', 'is_correct' => false],
                            ['choice_text' => '2 M€', 'is_correct' => true],
                            ['choice_text' => '7 M€', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rentabilité et marge bancaire',
                'description' => 'Lecture des principaux mécanismes qui influencent la rentabilité d\'une banque et sa marge d\'intérêt.',
                'questions' => [
                    [
                        'question' => 'Quel indicateur met directement en relation le résultat net d\'une banque avec ses capitaux propres ?',
                        'explanation' => 'Le ROE, ou Return on Equity, rapporte le résultat net aux capitaux propres. Il mesure donc la rentabilité du capital apporté par les actionnaires, selon la définition retenue.',
                        'choices' => [
                            ['choice_text' => 'ROA', 'is_correct' => false],
                            ['choice_text' => 'LTV', 'is_correct' => false],
                            ['choice_text' => 'DSCR', 'is_correct' => false],
                            ['choice_text' => 'ROE', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque obtient 900 000 € de résultat net avec 30 M€ de capitaux propres. Quel ROE simplifié obtient-on ?',
                        'explanation' => 'ROE = 900 000 / 30 000 000 = 0,03, soit 3 %. Il s\'agit d\'un calcul simplifié, sans prise en compte d\'une moyenne de capitaux propres sur la période.',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => true],
                            ['choice_text' => '0,3 %', 'is_correct' => false],
                            ['choice_text' => '33,3 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur relie généralement le résultat net à l\'ensemble des actifs ?',
                        'explanation' => 'Le ROA, ou Return on Assets, rapporte le résultat net aux actifs. Il donne une indication de l\'efficacité avec laquelle les actifs contribuent au résultat.',
                        'choices' => [
                            ['choice_text' => 'ROA', 'is_correct' => true],
                            ['choice_text' => 'ROE', 'is_correct' => false],
                            ['choice_text' => 'Yield spread', 'is_correct' => false],
                            ['choice_text' => 'LTV', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque réduit ses charges d\'exploitation sans modifier ses revenus. Quel effet mécanique peut-on attendre sur son résultat avant impôt, toutes choses égales par ailleurs ?',
                        'explanation' => 'À revenus constants, une baisse des charges augmente mécaniquement le résultat avant impôt, toutes choses égales par ailleurs. Cela ne signifie pas que la stratégie est automatiquement optimale, car certaines réductions de coûts peuvent affecter l\'activité future.',
                        'choices' => [
                            ['choice_text' => 'Une baisse', 'is_correct' => false],
                            ['choice_text' => 'Un résultat inchangé', 'is_correct' => false],
                            ['choice_text' => 'Un résultat négatif', 'is_correct' => false],
                            ['choice_text' => 'Une hausse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque affiche 2 M€ de revenus et 1,6 M€ de charges avant impôt. Quel résultat simplifié obtient-elle ?',
                        'explanation' => 'Le résultat simplifié avant impôt est 2 000 000 - 1 600 000 = 400 000 €. Le calcul ne prend pas en compte d\'autres éléments non mentionnés dans l\'énoncé.',
                        'choices' => [
                            ['choice_text' => '3,6 M€', 'is_correct' => false],
                            ['choice_text' => '400 000 €', 'is_correct' => true],
                            ['choice_text' => '1,6 M€', 'is_correct' => false],
                            ['choice_text' => '800 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle avoir des revenus en hausse tout en voyant son bénéfice diminuer ?',
                        'explanation' => 'Le résultat dépend des revenus mais aussi des charges, des provisions, des pertes et d\'autres éléments. Une hausse des revenus n\'entraîne donc pas nécessairement une hausse équivalente du bénéfice.',
                        'choices' => [
                            ['choice_text' => 'Parce que les revenus supplémentaires proviennent de dépôts, qui sont des dettes, et non de produits', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses charges, provisions ou pertes peuvent augmenter plus rapidement que ses revenus', 'is_correct' => true],
                            ['choice_text' => 'Parce que les revenus d\'intérêt sont ajoutés aux capitaux propres sans passer par le résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice est calculé sur les revenus de l\'année précédente et non sur ceux de l\'année en cours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation peut réduire la rentabilité d\'une banque même si le volume de crédits augmente ?',
                        'explanation' => 'La croissance du portefeuille de prêts peut augmenter les revenus, mais elle peut aussi s\'accompagner de pertes de crédit plus élevées. Les provisions et dépréciations peuvent alors réduire fortement le résultat.',
                        'choices' => [
                            ['choice_text' => 'Une forte hausse des défauts et des provisions pour pertes de crédit', 'is_correct' => true],
                            ['choice_text' => 'Une forte hausse des revenus de commissions perçues sur les comptes courants des clients', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des taux de défaut parmi les emprunteurs existants', 'is_correct' => false],
                            ['choice_text' => 'Une réduction du coût moyen des ressources de financement de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque cherche à améliorer son efficacité opérationnelle. Quel exemple correspond le mieux à cet objectif ?',
                        'explanation' => 'L\'efficacité opérationnelle cherche à obtenir un bon niveau de production de services pour un niveau de ressources maîtrisé, sans compromettre la qualité, la conformité ou la gestion des risques.',
                        'choices' => [
                            ['choice_text' => 'Réduire fortement les effectifs et les contrôles internes même si les délais de traitement s\'allongent', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir de nouvelles agences pour augmenter le nombre de clients malgré une hausse des coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Traiter davantage d\'opérations avec des coûts maîtrisés sans dégrader excessivement la qualité du service', 'is_correct' => true],
                            ['choice_text' => 'Accorder des crédits plus rapidement en allégeant l\'analyse du risque pour gagner des parts de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le résultat net d\'une banque passe de 1 M€ à 1,2 M€ avec des capitaux propres constants, de quel ordre est l\'évolution du ROE ?',
                        'explanation' => 'Avec des capitaux propres constants, le ROE évolue dans la même proportion que le résultat net. Passer de 1 à 1,2 M€ correspond à une hausse de 20 %, donc à une hausse de 20 % du ROE initial.',
                        'choices' => [
                            ['choice_text' => 'Il augmente de 0,2 % par rapport à son niveau initial', 'is_correct' => false],
                            ['choice_text' => 'Il augmente de 20 % par rapport à son niveau initial', 'is_correct' => true],
                            ['choice_text' => 'Il diminue de 20 % par rapport à son niveau initial', 'is_correct' => false],
                            ['choice_text' => 'Il reste stable puisque les capitaux propres ne changent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux la marge nette d\'intérêt (Net Interest Margin) ?',
                        'explanation' => 'La Net Interest Margin, ou NIM, relie le revenu net d\'intérêt à une base d\'actifs ou d\'actifs rémunérateurs selon la convention retenue. C\'est un indicateur central de la performance d\'intermédiation.',
                        'choices' => [
                            ['choice_text' => 'Elle mesure l\'écart entre le résultat net et les capitaux propres, selon la période retenue', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure l\'écart entre les revenus et charges d\'intérêt rapporté à une base d\'actifs générant des intérêts, selon la méthode utilisée', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure le rapport entre les frais généraux et les revenus totaux de la banque, selon la méthode retenue', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure la différence entre les dépôts collectés et les crédits accordés à la clientèle, rapportée aux fonds propres', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risques bancaires essentiels',
                'description' => 'Identification des principaux risques bancaires et compréhension de leurs effets sur l\'activité d\'une banque.',
                'questions' => [
                    [
                        'question' => 'Quel risque correspond au cas où un emprunteur ne rembourse pas son crédit ?',
                        'explanation' => 'Le risque de crédit est le risque de perte lié au défaut ou à la dégradation de la qualité de crédit d\'un emprunteur ou d\'une contrepartie.',
                        'choices' => [
                            ['choice_text' => 'Risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne informatique empêche les virements d\'être exécutés pendant plusieurs heures. Quel risque est le plus directement concerné ?',
                        'explanation' => 'Une défaillance de systèmes ou de processus relève du risque opérationnel. Dans la pratique, elle peut aussi entraîner des conséquences commerciales, juridiques ou de réputation.',
                        'choices' => [
                            ['choice_text' => 'Risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Risque de taux', 'is_correct' => false],
                            ['choice_text' => 'Risque opérationnel', 'is_correct' => true],
                            ['choice_text' => 'Risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque détient des obligations dont la valeur de marché baisse après une hausse des taux. Quel risque est principalement illustré ?',
                        'explanation' => 'La variation du prix d\'une obligation à la suite d\'un mouvement de taux relève du risque de marché, plus précisément du risque de taux d\'intérêt. Une hausse des taux tend à réduire le prix des obligations existantes à taux fixe.',
                        'choices' => [
                            ['choice_text' => 'Risque de crédit, notamment risque de défaut de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Risque de marché, notamment risque de taux', 'is_correct' => true],
                            ['choice_text' => 'Risque de liquidité, notamment risque de retraits massifs', 'is_correct' => false],
                            ['choice_text' => 'Risque opérationnel, notamment risque de panne informatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque diversifie-t-elle généralement son portefeuille de prêts ?',
                        'explanation' => 'La diversification réduit la concentration du risque. Si un secteur ou un emprunteur rencontre des difficultés, l\'impact peut être moins important lorsque l\'exposition est répartie entre plusieurs contreparties et activités.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le coût de refinancement en empruntant auprès de nombreux prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter qu\'une concentration excessive sur un seul emprunteur ou secteur domine le risque', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le taux d\'intérêt moyen perçu en prêtant à des profils d\'emprunteurs variés', 'is_correct' => false],
                            ['choice_text' => 'Pour respecter l\'obligation légale d\'accorder le même montant de crédit à chaque emprunteur de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un risque de fraude interne ?',
                        'explanation' => 'Le détournement de fonds par un employé est un exemple de fraude et peut relever du risque opérationnel. Il peut également entraîner des conséquences juridiques et de réputation.',
                        'choices' => [
                            ['choice_text' => 'Un client fournit de faux documents pour obtenir un prêt', 'is_correct' => false],
                            ['choice_text' => 'Un pirate informatique vole les identifiants d\'un client en ligne', 'is_correct' => false],
                            ['choice_text' => 'Un emprunteur cesse de rembourser son crédit après une perte d\'emploi', 'is_correct' => false],
                            ['choice_text' => 'Un employé détourne des fonds de la banque à des fins personnelles', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque a 100 M€ de crédits et constate 2 M€ de pertes de crédit sur une période. Quel taux de perte simple cela représente-t-il par rapport au portefeuille indiqué ?',
                        'explanation' => 'Le ratio simple est 2 / 100 = 0,02, soit 2 %. Il s\'agit d\'un calcul pédagogique et non d\'une mesure complète de la perte attendue ou du risque de crédit réglementaire.',
                        'choices' => [
                            ['choice_text' => '0,2 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '2 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu\'une banque ne peut pas obtenir assez rapidement de financement pour couvrir ses obligations ?',
                        'explanation' => 'Le risque de liquidité est le risque qu\'une banque ne puisse pas faire face à ses obligations lorsqu\'elles arrivent à échéance ou qu\'elle ne puisse obtenir des financements à des conditions acceptables.',
                        'choices' => [
                            ['choice_text' => 'Risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'Risque de taux', 'is_correct' => false],
                            ['choice_text' => 'Risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Risque de solvabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque concentre une grande partie de ses prêts sur un seul secteur industriel. Quel risque est particulièrement visible ?',
                        'explanation' => 'Une concentration élevée sur un même secteur augmente la dépendance de la banque à la santé de ce secteur. Un choc sectoriel peut alors toucher simultanément une part importante du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Risque de change', 'is_correct' => false],
                            ['choice_text' => 'Risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Risque de concentration', 'is_correct' => true],
                            ['choice_text' => 'Risque opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques combinent-elles plusieurs méthodes de contrôle des risques ?',
                        'explanation' => 'La gestion des risques peut inclure des limites, des contrôles, des analyses, des procédures, des outils de suivi et des plans de continuité. La combinaison de mécanismes vise à réduire les faiblesses d\'un dispositif unique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un risque peut provenir de sources différentes et nécessiter plusieurs mécanismes de surveillance', 'is_correct' => true],
                            ['choice_text' => 'Parce que les méthodes de contrôle se compensent entre elles et rendent la mesure du risque inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que la multiplication des contrôles permet de supprimer le risque et d\'éviter les provisions', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque service de la banque doit disposer de sa propre méthode pour se différencier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un établissement constate qu\'une modification informatique a été déployée sans test suffisant et provoque des erreurs de transactions. Quelle faiblesse faut-il surtout corriger ?',
                        'explanation' => 'Le problème vient du processus de changement informatique : les tests et validations doivent être adaptés avant le déploiement. C\'est une composante importante du contrôle du risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Le contrôle des changements et des tests informatiques', 'is_correct' => true],
                            ['choice_text' => 'Le suivi des limites d\'exposition par secteur d\'activité', 'is_correct' => false],
                            ['choice_text' => 'La couverture du risque de taux sur le portefeuille obligataire', 'is_correct' => false],
                            ['choice_text' => 'L\'analyse de la capacité de remboursement des emprunteurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Paiements et services bancaires',
                'description' => 'Découverte des principaux services de paiement et des usages quotidiens proposés par les banques.',
                'questions' => [
                    [
                        'question' => 'Quel service permet généralement d\'envoyer de l\'argent d\'un compte bancaire vers un autre compte ?',
                        'explanation' => 'Le virement est une opération de paiement qui permet de transférer des fonds d\'un compte vers un autre selon les instructions du payeur et les règles du système concerné.',
                        'choices' => [
                            ['choice_text' => 'Un relevé de compte', 'is_correct' => false],
                            ['choice_text' => 'Un virement', 'is_correct' => true],
                            ['choice_text' => 'Un crédit bancaire', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt à terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel moyen est généralement utilisé pour payer rapidement un achat au point de vente avec un compte bancaire ?',
                        'explanation' => 'La carte de paiement permet d\'initier une transaction chez un commerçant et de débiter le compte selon le type de carte et le dispositif de paiement utilisé.',
                        'choices' => [
                            ['choice_text' => 'Un relevé de compte', 'is_correct' => false],
                            ['choice_text' => 'Un livret d\'épargne', 'is_correct' => false],
                            ['choice_text' => 'Un contrat de crédit immobilier', 'is_correct' => false],
                            ['choice_text' => 'Une carte de paiement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la banque vérifie-t-elle généralement l\'identité d\'un client lors de certaines opérations ou à l\'ouverture d\'un compte ?',
                        'explanation' => 'La vérification de l\'identité participe aux dispositifs de connaissance du client, de sécurité et de prévention de la criminalité financière. Elle ne garantit pas la solvabilité future du client.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la solvabilité future du client et fixer à l\'avance le montant de son découvert', 'is_correct' => false],
                            ['choice_text' => 'Pour respecter les procédures de connaissance du client et de sécurité financière applicables', 'is_correct' => true],
                            ['choice_text' => 'Pour constituer un fichier commercial destiné à la vente de produits d\'assurance et d\'épargne aux clients', 'is_correct' => false],
                            ['choice_text' => 'Pour s\'assurer que le client dispose d\'un revenu minimum légal avant toute opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client constate une opération par carte qu\'il ne reconnaît pas. Quel comportement est le plus approprié en première intention ?',
                        'explanation' => 'Une opération non reconnue doit être signalée rapidement selon les procédures de la banque. Le client ne doit pas divulguer ses codes ou informations sensibles à des tiers non autorisés.',
                        'choices' => [
                            ['choice_text' => 'Attendre le prochain relevé mensuel pour vérifier si l\'opération se répète', 'is_correct' => false],
                            ['choice_text' => 'Changer de banque pour obtenir un nouveau compte et une nouvelle carte', 'is_correct' => false],
                            ['choice_text' => 'Contacter rapidement sa banque ou le service prévu pour signaler l\'opération', 'is_correct' => true],
                            ['choice_text' => 'Attendre que la banque détecte seule l\'anomalie et contacte le client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt principal d\'un relevé bancaire pour le client ?',
                        'explanation' => 'Le relevé permet au client de consulter les opérations enregistrées, d\'identifier les entrées et sorties et de vérifier la cohérence de son solde et de ses paiements.',
                        'choices' => [
                            ['choice_text' => 'Prouver à la banque que le client a respecté son plan de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Déclencher le versement des intérêts sur les sommes déposées sur le compte', 'is_correct' => false],
                            ['choice_text' => 'Suivre les mouvements enregistrés sur son compte et contrôler son solde', 'is_correct' => true],
                            ['choice_text' => 'Modifier le plafond de paiement et de retrait de sa carte bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut automatiser le paiement mensuel de ses fournisseurs. Quelle solution bancaire peut répondre à ce besoin ?',
                        'explanation' => 'Les banques proposent des services permettant d\'automatiser certains paiements récurrents. La solution exacte dépend des besoins de l\'entreprise et des services disponibles.',
                        'choices' => [
                            ['choice_text' => 'Un compte d\'épargne réglementé avec un plafond de dépôts mensuel', 'is_correct' => false],
                            ['choice_text' => 'Une ligne de crédit confirmée destinée à financer les stocks de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un contrat de change à terme pour couvrir un risque de devise', 'is_correct' => false],
                            ['choice_text' => 'Des virements récurrents ou une solution de paiements automatisés adaptée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un réseau de paiement doit-il assurer la sécurité des transactions ?',
                        'explanation' => 'La sécurité des paiements vise à protéger les fonds et les données tout en assurant la bonne exécution des transactions autorisées. Elle repose sur des contrôles techniques et organisationnels.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les risques de fraude, d\'erreur et d\'accès non autorisé', 'is_correct' => true],
                            ['choice_text' => 'Pour limiter le nombre de transactions traitées chaque jour par le réseau', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le montant des commissions facturées aux commerçants et aux clients', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre à la banque centrale de contrôler le taux d\'intérêt de chaque compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel service est le plus directement lié au financement à court terme d\'un besoin de trésorerie d\'une entreprise ?',
                        'explanation' => 'Une ligne de crédit ou un découvert peut fournir des ressources à court terme pour couvrir des besoins temporaires de trésorerie. Les conditions et les coûts dépendent du produit bancaire utilisé.',
                        'choices' => [
                            ['choice_text' => 'Un compte d\'épargne réglementé, selon les plafonds fixés par la réglementation', 'is_correct' => false],
                            ['choice_text' => 'Une ligne de crédit ou un découvert autorisé, selon les conditions du contrat', 'is_correct' => true],
                            ['choice_text' => 'Un placement à terme sur plusieurs années, selon la durée choisie par l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une prise de participation au capital de l\'entreprise, selon l\'accord des associés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client programme un virement de 2 500 € vers son fournisseur. Quel est l\'objectif financier immédiat de cette opération ?',
                        'explanation' => 'Le virement est une instruction de transfert de fonds vers un bénéficiaire. Il ne crée pas, à lui seul, un nouveau prêt ni des capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Accorder une avance de 2 500 € au fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Placer 2 500 € sur un compte d\'épargne du client', 'is_correct' => false],
                            ['choice_text' => 'Constituer une garantie de 2 500 € au profit de la banque', 'is_correct' => false],
                            ['choice_text' => 'Transférer 2 500 € au bénéficiaire désigné', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement améliore généralement la sécurité d\'un compte bancaire en ligne ?',
                        'explanation' => 'Des identifiants uniques, une authentification renforcée et la surveillance des alertes réduisent le risque d\'accès frauduleux. Les codes confidentiels doivent rester protégés.',
                        'choices' => [
                            ['choice_text' => 'Choisir un mot de passe simple à retenir, l\'enregistrer sur un ordinateur partagé et le conserver plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Se connecter depuis des réseaux wifi publics pour bénéficier d\'une connexion plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des identifiants uniques, activer l\'authentification renforcée lorsqu\'elle est disponible et vérifier les alertes', 'is_correct' => true],
                            ['choice_text' => 'Communiquer ses identifiants au conseiller par e-mail pour faciliter la résolution d\'un problème', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Banque digitale et relation client',
                'description' => 'Introduction à la digitalisation bancaire, aux services en ligne et aux enjeux pratiques pour les clients et les banques.',
                'questions' => [
                    [
                        'question' => 'Quel est un avantage courant de la banque mobile pour le client ?',
                        'explanation' => 'Les applications mobiles permettent notamment de consulter des comptes, d\'effectuer certaines opérations et de recevoir des notifications à distance. La digitalisation n\'élimine pas les risques de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Obtenir un taux de crédit plus bas que celui proposé en agence pour le même profil', 'is_correct' => false],
                            ['choice_text' => 'Retirer des espèces directement depuis l\'application sans passer par un distributeur', 'is_correct' => false],
                            ['choice_text' => 'Accéder à certains services bancaires à distance, souvent 24 h/24 selon le service', 'is_correct' => true],
                            ['choice_text' => 'Éviter de fournir une pièce d\'identité lors de l\'ouverture d\'un compte à distance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque automatise l\'analyse de certaines demandes simples de crédit à partir de données standardisées. Quel objectif opérationnel peut-elle rechercher ?',
                        'explanation' => 'L\'automatisation peut réduire certains délais et standardiser des processus. Elle doit néanmoins être encadrée par des contrôles appropriés et ne garantit ni la rentabilité de chaque crédit ni l\'absence de défaut.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le taux d\'intérêt appliqué à chaque client selon son profil d\'utilisation', 'is_correct' => false],
                            ['choice_text' => 'Éliminer le besoin de données sur les revenus et charges des emprunteurs', 'is_correct' => false],
                            ['choice_text' => 'Réduire les capitaux propres que la banque doit détenir pour ses crédits', 'is_correct' => false],
                            ['choice_text' => 'Accélérer le traitement et homogénéiser certaines étapes de décision', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les notifications instantanées sur les opérations peuvent-elles être utiles au client ?',
                        'explanation' => 'Les alertes permettent au client de réagir plus vite lorsqu\'une opération semble inhabituelle. Elles constituent une couche de surveillance mais ne remplacent pas les autres contrôles de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Elles facilitent la détection rapide d\'une opération inhabituelle', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent la vérification d\'identité lors de l\'ouverture du compte', 'is_correct' => false],
                            ['choice_text' => 'Elles permettent de modifier le montant d\'un paiement après sa validation', 'is_correct' => false],
                            ['choice_text' => 'Elles réduisent les frais bancaires facturés pour chaque opération réalisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut augmenter lorsqu\'un service bancaire dépend fortement d\'une infrastructure informatique centralisée ?',
                        'explanation' => 'Une forte dépendance à une infrastructure centrale peut amplifier l\'impact d\'une interruption ou d\'un incident de cybersécurité. Les banques utilisent donc des mesures de résilience, de sauvegarde et de continuité.',
                        'choices' => [
                            ['choice_text' => 'Le risque de crédit sur les prêts accordés aux clients particuliers', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change sur les opérations réalisées en devises étrangères', 'is_correct' => false],
                            ['choice_text' => 'La dépendance de la banque à ses déposants les plus importants', 'is_correct' => false],
                            ['choice_text' => 'L\'impact potentiel d\'une panne ou d\'une cyberattaque sur plusieurs services', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque veut améliorer l\'expérience client sans augmenter fortement ses coûts de traitement. Quelle approche peut être pertinente ?',
                        'explanation' => 'Une approche hybride peut automatiser les opérations simples tout en réservant l\'intervention humaine aux situations qui demandent du jugement ou un accompagnement spécifique. La conformité et la sécurité doivent être maintenues.',
                        'choices' => [
                            ['choice_text' => 'Digitaliser les opérations, y compris les cas complexes, et fermer le réseau d\'agences', 'is_correct' => false],
                            ['choice_text' => 'Digitaliser les opérations simples tout en conservant un accompagnement humain pour les cas complexes', 'is_correct' => true],
                            ['choice_text' => 'Confier les opérations complexes à un robot conversationnel et garder les opérations simples en agence', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de conseillers sans modifier les canaux de contact proposés aux clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une application bancaire demande une authentification à deux facteurs. Quel est le but principal de cette mesure ?',
                        'explanation' => 'L\'authentification à deux facteurs utilise au moins deux éléments de vérification distincts, ce qui rend plus difficile l\'accès frauduleux lorsqu\'un mot de passe est compromis.',
                        'choices' => [
                            ['choice_text' => 'Ajouter une couche de vérification au-delà du seul mot de passe', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les messages échangés entre l\'application et le conseiller', 'is_correct' => false],
                            ['choice_text' => 'Limiter le nombre de comptes qu\'un client peut ouvrir dans la banque', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la solvabilité du client avant chaque paiement par carte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque peut-elle proposer des conseils à distance par visioconférence ?',
                        'explanation' => 'La visioconférence peut étendre l\'accès à certains services et permettre une relation à distance. Elle ne supprime pas les exigences d\'identification, de documentation ou de conformité applicables au service.',
                        'choices' => [
                            ['choice_text' => 'Pour fournir certains services de conseil ou d\'assistance sans présence physique', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre de produits financiers proposés aux clients de l\'agence', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le conseiller par un contrat signé en ligne sans aucun échange avec le client', 'is_correct' => false],
                            ['choice_text' => 'Pour transférer à une autre institution la responsabilité du conseil donné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est important lors de la conception d\'un nouveau service bancaire numérique ?',
                        'explanation' => 'Un service bancaire numérique doit concilier facilité d\'utilisation et exigences de sécurité, de confidentialité et de continuité. Une application rapide mais peu sûre n\'offre pas un service bancaire satisfaisant.',
                        'choices' => [
                            ['choice_text' => 'Le nombre d\'agences physiques de la banque dans la région où le service est lancé', 'is_correct' => false],
                            ['choice_text' => 'La sécurité, la protection des données, la fiabilité du service et l\'expérience client', 'is_correct' => true],
                            ['choice_text' => 'Le niveau des taux directeurs fixé par la banque centrale pour la zone concernée', 'is_correct' => false],
                            ['choice_text' => 'La rapidité de lancement et la réduction des coûts, y compris au détriment de la sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque constate que les clients effectuent beaucoup plus d\'opérations via l\'application mobile. Quelle conséquence opérationnelle est plausible ?',
                        'explanation' => 'Le déplacement des opérations simples vers le canal mobile peut réduire certaines tâches manuelles en agence. En contrepartie, la banque doit maintenir une infrastructure numérique robuste et sécurisée.',
                        'choices' => [
                            ['choice_text' => 'Le volume de dépôts de la banque est amené à augmenter dans les mêmes proportions', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de capitaux propres de la banque est supprimé pour les opérations mobiles', 'is_correct' => false],
                            ['choice_text' => 'Le volume d\'opérations manuelles en agence peut diminuer pour les tâches simples', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d\'incidents de fraude diminue dans les mêmes proportions que les opérations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est utile pour suivre la qualité d\'un service numérique bancaire ?',
                        'explanation' => 'Le taux d\'échec des transactions et les incidents techniques permettent d\'évaluer la fiabilité d\'un service numérique. D\'autres indicateurs comme la disponibilité ou la satisfaction client peuvent compléter ce suivi.',
                        'choices' => [
                            ['choice_text' => 'Le taux d\'échecs de transaction ou d\'incidents techniques', 'is_correct' => true],
                            ['choice_text' => 'Le taux d\'intérêt moyen des prêts immobiliers de la banque', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de comptes d\'épargne ouverts auprès de la banque', 'is_correct' => false],
                            ['choice_text' => 'Le montant des dividendes versés aux actionnaires de la banque', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Situations bancaires et décisions pratiques',
                'description' => 'Mini-cas de niveau débutant pour relier crédit, liquidité, risques, rentabilité et services bancaires à des décisions concrètes.',
                'questions' => [
                    [
                        'question' => 'Une banque reçoit beaucoup de demandes de prêts mais constate une forte hausse des impayés dans un secteur particulier. Quelle réaction est la plus prudente ?',
                        'explanation' => 'Une hausse des impayés dans un secteur signale une détérioration potentielle du risque. La banque peut renforcer l\'analyse et ajuster son exposition plutôt que d\'augmenter automatiquement les financements.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les taux appliqués à l\'ensemble des emprunteurs pour compenser les pertes du secteur', 'is_correct' => false],
                            ['choice_text' => 'Réduire les provisions sur ce secteur afin de préserver le résultat de la période', 'is_correct' => false],
                            ['choice_text' => 'Renforcer l\'analyse du risque et revoir les limites d\'exposition à ce secteur', 'is_correct' => true],
                            ['choice_text' => 'Accorder des prêts plus longs à ce secteur pour alléger les échéances des emprunteurs en difficulté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque dispose de 15 M€ de liquidités et prévoit 18 M€ de sorties à court terme. Quelle situation doit-elle anticiper ?',
                        'explanation' => 'La différence entre les sorties prévues et les liquidités disponibles est de 18 - 15 = 3 M€. La banque doit identifier une source de financement ou une autre solution de liquidité pour couvrir l\'écart.',
                        'choices' => [
                            ['choice_text' => 'Un excédent de liquidité d\'environ 3 M€ à placer à court terme', 'is_correct' => false],
                            ['choice_text' => 'Un besoin de financement ou de mobilisation d\'actifs d\'environ 18 M€', 'is_correct' => false],
                            ['choice_text' => 'Un besoin de financement ou de mobilisation d\'actifs d\'environ 3 M€', 'is_correct' => true],
                            ['choice_text' => 'Un besoin de financement ou de mobilisation d\'actifs d\'environ 33 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise demande un prêt pour développer son activité, mais ses flux de trésorerie sont très instables. Quel point mérite particulièrement l\'attention du prêteur ?',
                        'explanation' => 'La capacité de remboursement dépend notamment des flux de trésorerie futurs. Des flux très instables rendent l\'évaluation du risque plus délicate et peuvent nécessiter une analyse approfondie des hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d\'affaires de l\'année passée, indépendamment de la régularité des flux', 'is_correct' => false],
                            ['choice_text' => 'La capacité de l\'entreprise à générer suffisamment de trésorerie pour servir la dette', 'is_correct' => true],
                            ['choice_text' => 'La notoriété de l\'entreprise et le nombre de ses abonnés sur les réseaux sociaux et les sites web', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital social inscrit lors de la création de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque réduit fortement ses délais de décision de crédit grâce à l\'automatisation, mais les défauts commencent à augmenter. Quel enseignement est le plus pertinent ?',
                        'explanation' => 'L\'automatisation peut améliorer l\'efficacité, mais elle doit préserver la qualité des données, des modèles et des contrôles. Une hausse des défauts peut indiquer que la vitesse a été privilégiée au détriment de certains contrôles de risque.',
                        'choices' => [
                            ['choice_text' => 'La hausse des défauts provient du ralentissement économique et non de la réduction des délais', 'is_correct' => false],
                            ['choice_text' => 'La banque doit revenir à un traitement entièrement manuel de chaque demande de crédit', 'is_correct' => false],
                            ['choice_text' => 'Les défauts observés sont sans importance tant que le volume de crédits accordés augmente', 'is_correct' => false],
                            ['choice_text' => 'La rapidité du processus doit être mise en balance avec la qualité de l\'analyse du risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque constate que ses intérêts reçus augmentent de 1,0 M€ à 1,3 M€, mais que les intérêts versés passent de 0,4 M€ à 0,9 M€. Quel est le nouveau solde net d\'intérêt simplifié ?',
                        'explanation' => 'Le nouveau solde net d\'intérêt est 1,3 - 0,9 = 0,4 M€. Bien que les intérêts reçus aient augmenté, le coût des ressources a augmenté davantage en valeur absolue.',
                        'choices' => [
                            ['choice_text' => '0,9 M€', 'is_correct' => false],
                            ['choice_text' => '1,3 M€', 'is_correct' => false],
                            ['choice_text' => '0,4 M€', 'is_correct' => true],
                            ['choice_text' => '2,2 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque souhaite réduire le risque lié à une panne informatique majeure. Quelle mesure est cohérente avec cet objectif ?',
                        'explanation' => 'Les sauvegardes, les solutions de reprise et la continuité d\'activité permettent de réduire l\'impact d\'un incident informatique. Les dispositifs doivent être régulièrement testés pour vérifier leur efficacité.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les fonds propres de la banque pour absorber les pertes liées à la panne', 'is_correct' => false],
                            ['choice_text' => 'Diversifier les prêts entre plusieurs secteurs pour limiter l\'impact d\'une panne', 'is_correct' => false],
                            ['choice_text' => 'Prévoir des sauvegardes, des procédures de reprise et un plan de continuité testé', 'is_correct' => true],
                            ['choice_text' => 'Renforcer l\'analyse de la solvabilité des emprunteurs avant l\'octroi de crédits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client dispose d\'un revenu stable, de peu de dettes et d\'une garantie sur le bien financé. Quelle conclusion est la plus correcte à ce stade ?',
                        'explanation' => 'Des revenus stables, un endettement limité et une garantie de qualité sont des éléments utiles. Ils ne suffisent toutefois pas à eux seuls à déterminer une décision de crédit, qui doit tenir compte de l\'ensemble du dossier.',
                        'choices' => [
                            ['choice_text' => 'Ces éléments sont favorables à l\'analyse du dossier, mais la banque doit encore évaluer l\'ensemble des risques', 'is_correct' => true],
                            ['choice_text' => 'Ces éléments sont favorables, donc la banque peut accorder le prêt sans examiner la finalité du financement', 'is_correct' => false],
                            ['choice_text' => 'Ces éléments sont favorables mais la garantie suffit à couvrir le risque, sans vérifier les revenus', 'is_correct' => false],
                            ['choice_text' => 'Ces éléments sont insuffisants, car seule une analyse de l\'historique bancaire permet de juger le dossier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque dispose de nombreux dépôts à vue mais accorde une part importante de ses financements à long terme. Quel sujet doit-elle surveiller particulièrement ?',
                        'explanation' => 'Des dépôts à vue peuvent être retirés ou utilisés à court terme, alors que les prêts longs génèrent des remboursements sur une période plus étendue. Ce décalage impose une gestion attentive de la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Le risque de liquidité lié au décalage entre les ressources et les emplois', 'is_correct' => true],
                            ['choice_text' => 'Le risque de crédit lié à l\'évolution des prix de l\'immobilier résidentiel', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change lié à la conversion des dépôts en devises étrangères', 'is_correct' => false],
                            ['choice_text' => 'Le risque opérationnel lié à la gestion des agences et des distributeurs de billets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une agence reçoit une alerte indiquant une tentative inhabituelle d\'accès au compte d\'un client. Quelle action de contrôle est la plus cohérente ?',
                        'explanation' => 'Une tentative inhabituelle doit être traitée selon les procédures de sécurité afin de prévenir une éventuelle compromission. Une réaction rapide peut limiter les pertes ou les accès non autorisés.',
                        'choices' => [
                            ['choice_text' => 'Attendre que le client signale une perte avant d\'engager une vérification de sécurité sur le compte', 'is_correct' => false],
                            ['choice_text' => 'Bloquer définitivement le compte et clôturer la relation avec le client sans l\'informer', 'is_correct' => false],
                            ['choice_text' => 'Demander au client de transmettre son code confidentiel pour confirmer qu\'il est à l\'origine de l\'accès', 'is_correct' => false],
                            ['choice_text' => 'Vérifier l\'événement selon la procédure de sécurité et prendre les mesures prévues pour protéger le compte', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque veut augmenter ses crédits sans dégrader la qualité de son portefeuille. Quelle approche est la plus cohérente ?',
                        'explanation' => 'La croissance saine du crédit repose sur une sélection cohérente des emprunteurs, une surveillance du portefeuille et une gestion des concentrations et des risques. Une croissance rapide sans contrôle peut dégrader la qualité des actifs.',
                        'choices' => [
                            ['choice_text' => 'Croître en conservant des critères de crédit, un suivi post-octroi et une diversification appropriés', 'is_correct' => true],
                            ['choice_text' => 'Croître en assouplissant les critères pour les nouveaux clients afin de gagner rapidement des parts de marché', 'is_correct' => false],
                            ['choice_text' => 'Croître en se concentrant sur le secteur le plus rentable afin de maximiser le rendement', 'is_correct' => false],
                            ['choice_text' => 'Croître en transférant le risque aux emprunteurs par des taux plus élevés sans modifier la sélection', 'is_correct' => false],
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
