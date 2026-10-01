<?php

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

        $quizzes = [
            [
                'title' => "Fondamentaux de l'activité bancaire",
                'description' => "Quiz d'introduction consacré au rôle des banques, aux dépôts, aux crédits et aux principaux mécanismes de l'activité bancaire.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel est l'un des rôles économiques essentiels d'une banque commerciale ?",
                        'choices' => [
                            ['choice_text' => "Intermédier entre les agents qui disposent de fonds et ceux qui recherchent un financement", 'is_correct' => true],
                            ['choice_text' => "Fixer directement tous les prix des biens de consommation", 'is_correct' => false],
                            ['choice_text' => "Remplacer les autorités monétaires dans la conduite de la politique monétaire", 'is_correct' => false],
                            ['choice_text' => "Garantir un rendement positif à chaque investisseur", 'is_correct' => false],
                        ],
                        'explanation' => "La banque joue notamment un rôle d'intermédiation financière : elle collecte des ressources, par exemple des dépôts, et accorde des financements à des ménages et des entreprises. Elle ne fixe pas les prix de l'économie et ne peut pas garantir un rendement positif à tous les investisseurs.",
                    ],
                    [
                        'question' => "Lorsqu'un client dépose 5 000 € sur son compte bancaire, quel élément représente le mieux la situation de la banque ?",
                        'choices' => [
                            ['choice_text' => "Le dépôt constitue une dette de la banque envers le client", 'is_correct' => true],
                            ['choice_text' => "Le dépôt devient automatiquement une immobilisation corporelle", 'is_correct' => false],
                            ['choice_text' => "Le dépôt est un revenu définitif de la banque", 'is_correct' => false],
                            ['choice_text' => "Le dépôt annule les capitaux propres de la banque", 'is_correct' => false],
                        ],
                        'explanation' => "Pour la banque, le solde créditeur du client représente une obligation de restitution : il figure donc au passif du bilan bancaire. Le montant déposé n'est pas un revenu acquis par la banque.",
                    ],
                    [
                        'question' => "Une banque accorde un prêt immobilier de 180 000 € à un particulier. Quel est l'actif qui augmente directement pour la banque ?",
                        'choices' => [
                            ['choice_text' => "La créance de prêt sur le client", 'is_correct' => true],
                            ['choice_text' => "Les capitaux propres du client", 'is_correct' => false],
                            ['choice_text' => "Les charges d'exploitation de la banque", 'is_correct' => false],
                            ['choice_text' => "Le capital social du client", 'is_correct' => false],
                        ],
                        'explanation' => "Le prêt constitue une créance détenue par la banque sur l'emprunteur. Cette créance est comptabilisée à l'actif du bilan bancaire, car elle représente un avantage économique futur attendu sous forme de remboursements et d'intérêts.",
                    ],
                    [
                        'question' => "Pourquoi une banque collecte-t-elle des dépôts auprès de ses clients ?",
                        'choices' => [
                            ['choice_text' => "Pour disposer de ressources financières et offrir des services de paiement et de liquidité", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer tout risque de crédit", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher les clients de retirer leur argent", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer systématiquement les capitaux propres", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépôts constituent une source importante de financement pour les banques et permettent aussi de fournir des services de paiement et de gestion de liquidité. Ils ne suppriment pas les risques bancaires et ne remplacent pas les capitaux propres.",
                    ],
                    [
                        'question' => "Quel exemple correspond à un service bancaire de paiement ?",
                        'choices' => [
                            ['choice_text' => "L'exécution d'un virement entre deux comptes", 'is_correct' => true],
                            ['choice_text' => "La détermination du PIB national", 'is_correct' => false],
                            ['choice_text' => "La fixation du salaire minimum par l'État", 'is_correct' => false],
                            ['choice_text' => "La production industrielle d'un véhicule", 'is_correct' => false],
                        ],
                        'explanation' => "Les banques participent directement aux systèmes de paiement en exécutant notamment des virements, des prélèvements et d'autres opérations entre comptes. Les autres propositions relèvent d'autres fonctions économiques.",
                    ],
                    [
                        'question' => "Une banque reçoit 1 000 € d'intérêts sur un prêt avant de payer 300 € d'intérêts sur des dépôts. En première approche, quel montant représente la marge d'intérêt avant les autres coûts ?",
                        'choices' => [
                            ['choice_text' => "700 €", 'is_correct' => true],
                            ['choice_text' => "1 300 €", 'is_correct' => false],
                            ['choice_text' => "300 €", 'is_correct' => false],
                            ['choice_text' => "1 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "La différence entre les intérêts reçus sur les actifs rémunérateurs et les intérêts versés sur les ressources correspond ici à 1 000 - 300 = 700 €. Cette approche simplifiée ne tient pas compte des autres produits et charges bancaires.",
                    ],
                    [
                        'question' => "Pourquoi la confiance des clients est-elle particulièrement importante pour une banque ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une banque dépend notamment de la stabilité des dépôts et de la fiabilité des paiements", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une banque n'a aucun contrat avec ses clients", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les opérations bancaires sont sans risque", 'is_correct' => false],
                            ['choice_text' => "Parce que les clients déterminent eux-mêmes les taux directeurs", 'is_correct' => false],
                        ],
                        'explanation' => "La banque repose sur des relations de confiance : les clients lui confient des dépôts et attendent que les paiements, retraits et autres opérations soient exécutés correctement. Une perte de confiance peut fragiliser la stabilité d'une banque.",
                    ],
                    [
                        'question' => "Quel poste appartient généralement au passif d'un bilan bancaire ?",
                        'choices' => [
                            ['choice_text' => "Les dépôts de la clientèle", 'is_correct' => true],
                            ['choice_text' => "Les prêts accordés aux ménages", 'is_correct' => false],
                            ['choice_text' => "Les titres détenus par la banque", 'is_correct' => false],
                            ['choice_text' => "Les créances sur les entreprises clientes", 'is_correct' => false],
                        ],
                        'explanation' => "Les dépôts sont des montants que la banque doit à ses clients et figurent donc généralement au passif. Les prêts et autres créances détenus par la banque constituent des actifs.",
                    ],
                    [
                        'question' => "Un client rembourse 2 000 € du principal d'un prêt. Quel est l'effet principal sur la créance de prêt de la banque ?",
                        'choices' => [
                            ['choice_text' => "La créance diminue de 2 000 €", 'is_correct' => true],
                            ['choice_text' => "La créance augmente de 2 000 €", 'is_correct' => false],
                            ['choice_text' => "La créance devient automatiquement un produit non financier", 'is_correct' => false],
                            ['choice_text' => "La créance est remplacée par le capital social", 'is_correct' => false],
                        ],
                        'explanation' => "Le remboursement du principal réduit le montant restant dû par l'emprunteur. La créance de prêt inscrite à l'actif de la banque diminue donc de 2 000 €, hors prise en compte des éventuels intérêts versés séparément.",
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement le principe de transformation des échéances par une banque ?",
                        'choices' => [
                            ['choice_text' => "La banque peut financer des prêts plus longs avec des ressources dont la maturité est différente", 'is_correct' => true],
                            ['choice_text' => "La banque supprime toute différence entre actifs et passifs", 'is_correct' => false],
                            ['choice_text' => "La banque transforme toujours les prêts en capitaux propres", 'is_correct' => false],
                            ['choice_text' => "La banque garantit que tous les dépôts ont exactement la même durée que les prêts", 'is_correct' => false],
                        ],
                        'explanation' => "La transformation des échéances signifie que la banque peut détenir des actifs à plus long terme tout en ayant des ressources, notamment des dépôts, dont les caractéristiques de maturité sont différentes. Cette fonction crée aussi des enjeux de liquidité et de gestion des risques.",
                    ],
                ],
            ],
            [
                'title' => "Dépôts, crédits et bilan bancaire",
                'description' => "Analyse des principaux postes du bilan bancaire et des liens entre dépôts, crédits, liquidité et financement.",
                'duration' => 22,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une banque possède 20 M€ de prêts à la clientèle et 8 M€ de titres financiers, toutes choses égales par ailleurs. Quels sont les deux exemples d'actifs bancaires ?",
                        'choices' => [
                            ['choice_text' => "Les prêts à la clientèle et les titres financiers", 'is_correct' => true],
                            ['choice_text' => "Les dépôts des clients et les salaires à payer", 'is_correct' => false],
                            ['choice_text' => "Les dépôts et les capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Les intérêts versés et les dépôts", 'is_correct' => false],
                        ],
                        'explanation' => "Les prêts et les titres détenus par la banque sont des ressources économiques contrôlées par la banque et figurent donc à l'actif. Les dépôts et certaines dettes envers des tiers appartiennent au passif.",
                    ],
                    [
                        'question' => "Une banque affiche 50 M€ d'actifs et 45 M€ de passifs. En supposant qu'il n'y a pas d'autre élément à considérer, combien représentent ses capitaux propres ?",
                        'choices' => [
                            ['choice_text' => "5 M€", 'is_correct' => true],
                            ['choice_text' => "95 M€", 'is_correct' => false],
                            ['choice_text' => "45 M€", 'is_correct' => false],
                            ['choice_text' => "50 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un bilan, Actif = Passif + Capitaux propres. Les capitaux propres sont donc 50 - 45 = 5 M€.",
                    ],
                    [
                        'question' => "Une banque reçoit un nouveau dépôt de 4 000 € et conserve le montant sous forme de liquidité. Quelle proposition décrit le mieux l'effet initial simplifié ?",
                        'choices' => [
                            ['choice_text' => "Les liquidités à l'actif et les dépôts au passif augmentent de 4 000 €", 'is_correct' => true],
                            ['choice_text' => "Les capitaux propres augmentent automatiquement de 4 000 €", 'is_correct' => false],
                            ['choice_text' => "Les prêts à la clientèle diminuent automatiquement de 4 000 €", 'is_correct' => false],
                            ['choice_text' => "Le revenu net augmente immédiatement de 4 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Dans cette représentation simplifiée, la réception d'un dépôt augmente la trésorerie ou les actifs liquides de la banque et crée simultanément une obligation envers le déposant. Le dépôt n'est pas un revenu.",
                    ],
                    [
                        'question' => "Quel risque apparaît si une banque finance des actifs relativement peu liquides avec des ressources qui peuvent être retirées rapidement ?",
                        'choices' => [
                            ['choice_text' => "Un risque de liquidité", 'is_correct' => true],
                            ['choice_text' => "Un risque de change certain", 'is_correct' => false],
                            ['choice_text' => "Un risque fiscal automatique", 'is_correct' => false],
                            ['choice_text' => "Un risque d'inflation nul", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de liquidité correspond notamment à la difficulté de disposer de suffisamment de liquidités au moment où les obligations arrivent à échéance. Un décalage entre la liquidité des actifs et celle des ressources peut accroître ce risque.",
                    ],
                    [
                        'question' => "La banque possède 10 M€ de dépôts et 7 M€ de prêts à la clientèle. Peut-on conclure simplement que les 3 M€ restants sont forcément des bénéfices ?",
                        'choices' => [
                            ['choice_text' => "Non, car le bilan comprend d'autres actifs, passifs et capitaux propres", 'is_correct' => true],
                            ['choice_text' => "Oui, car toute différence est nécessairement un bénéfice", 'is_correct' => false],
                            ['choice_text' => "Oui, car les dépôts sont toujours supérieurs aux prêts", 'is_correct' => false],
                            ['choice_text' => "Non, car une banque ne peut jamais avoir de bénéfice", 'is_correct' => false],
                        ],
                        'explanation' => "Une simple différence entre dépôts et prêts ne permet pas de mesurer le bénéfice. Une banque détient aussi d'autres actifs et supporte diverses obligations et charges. Le résultat est déterminé à partir des produits et charges sur une période.",
                    ],
                    [
                        'question' => "Quel poste est le plus directement lié à une somme que la banque doit rembourser à une autre institution financière ?",
                        'choices' => [
                            ['choice_text' => "Une dette financière au passif", 'is_correct' => true],
                            ['choice_text' => "Un prêt client à l'actif", 'is_correct' => false],
                            ['choice_text' => "Une immobilisation incorporelle", 'is_correct' => false],
                            ['choice_text' => "Un produit bancaire à recevoir", 'is_correct' => false],
                        ],
                        'explanation' => "Une somme due à une autre institution représente une obligation future de paiement et est donc enregistrée comme une dette au passif, sous réserve de la présentation comptable précise retenue.",
                    ],
                    [
                        'question' => "Une banque accorde un crédit de 100 000 € dont 60 000 € restent à rembourser après plusieurs échéances. Quel montant correspond au principal encore dû ?",
                        'choices' => [
                            ['choice_text' => "60 000 €", 'is_correct' => true],
                            ['choice_text' => "40 000 €", 'is_correct' => false],
                            ['choice_text' => "100 000 € plus les intérêts futurs", 'is_correct' => false],
                            ['choice_text' => "160 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le principal restant dû est explicitement de 60 000 €. Les intérêts futurs ne font pas partie de ce principal restant dû.",
                    ],
                    [
                        'question' => "Pourquoi une banque cherche-t-elle à maintenir un niveau suffisant de liquidité ?",
                        'choices' => [
                            ['choice_text' => "Pour faire face aux retraits, paiements et autres besoins de trésorerie à court terme", 'is_correct' => true],
                            ['choice_text' => "Pour éviter toute comptabilisation des prêts", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer définitivement le risque de crédit", 'is_correct' => false],
                            ['choice_text' => "Pour transformer tous les dépôts en actions", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité permet à la banque d'honorer ses engagements lorsqu'ils arrivent à échéance ou lorsque les clients souhaitent utiliser leurs fonds. Elle constitue une dimension fondamentale de la gestion bancaire.",
                    ],
                    [
                        'question' => "Un client verse 1 200 € sur son compte, puis retire immédiatement 500 €. Quel est le solde net de ces deux opérations ?",
                        'choices' => [
                            ['choice_text' => "700 €", 'is_correct' => true],
                            ['choice_text' => "1 700 €", 'is_correct' => false],
                            ['choice_text' => "500 €", 'is_correct' => false],
                            ['choice_text' => "1 200 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant net est 1 200 - 500 = 700 €. Le calcul illustre simplement l'effet combiné d'un dépôt puis d'un retrait sur le solde du client.",
                    ],
                    [
                        'question' => "Quel énoncé est le plus juste concernant un bilan bancaire ?",
                        'choices' => [
                            ['choice_text' => "Il présente à une date donnée les actifs, les passifs et les capitaux propres de la banque", 'is_correct' => true],
                            ['choice_text' => "Il présente uniquement les bénéfices futurs de la banque", 'is_correct' => false],
                            ['choice_text' => "Il contient uniquement les transactions en espèces", 'is_correct' => false],
                            ['choice_text' => "Il ne concerne que les clients particuliers", 'is_correct' => false],
                        ],
                        'explanation' => "Le bilan est un état de la situation financière à une date donnée. Il met notamment en regard les ressources et les emplois de la banque à travers ses actifs, ses passifs et ses capitaux propres.",
                    ],
                ],
            ],
            [
                'title' => "Analyse du crédit et des emprunteurs",
                'description' => "Mise en pratique des principaux critères utilisés pour apprécier la capacité d'un emprunteur à rembourser un crédit.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Avant d'accorder un prêt, pourquoi une banque analyse-t-elle les revenus et les charges de l'emprunteur ?",
                        'choices' => [
                            ['choice_text' => "Pour apprécier sa capacité de remboursement", 'is_correct' => true],
                            ['choice_text' => "Pour calculer automatiquement son patrimoine futur", 'is_correct' => false],
                            ['choice_text' => "Pour garantir que le taux directeur restera stable", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute possibilité de défaut", 'is_correct' => false],
                        ],
                        'explanation' => "L'analyse des revenus et des charges permet d'estimer la capacité de l'emprunteur à honorer ses échéances. Elle réduit l'incertitude, sans toutefois supprimer totalement le risque de défaut.",
                    ],
                    [
                        'question' => "Un ménage dispose de 3 000 € de revenu mensuel et de 1 200 € de charges de dettes mensuelles. Quel est le ratio simple dette/revenu calculé sur ces charges ?",
                        'choices' => [
                            ['choice_text' => "40 %", 'is_correct' => true],
                            ['choice_text' => "25 %", 'is_correct' => false],
                            ['choice_text' => "60 %", 'is_correct' => false],
                            ['choice_text' => "75 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le ratio est 1 200 / 3 000 = 0,40, soit 40 %. Cet indicateur simple donne une idée du poids des charges de dette par rapport au revenu mensuel.",
                    ],
                    [
                        'question' => "Lequel de ces éléments constitue généralement une garantie ou un mécanisme de protection du prêteur ?",
                        'choices' => [
                            ['choice_text' => "Une hypothèque sur un bien financé", 'is_correct' => true],
                            ['choice_text' => "Une prévision de croissance du PIB", 'is_correct' => false],
                            ['choice_text' => "Une hausse future supposée du salaire", 'is_correct' => false],
                            ['choice_text' => "Une rumeur de baisse des taux", 'is_correct' => false],
                        ],
                        'explanation' => "Une hypothèque peut servir de sûreté au prêteur : en cas de défaut, elle peut contribuer à protéger le prêteur selon le droit applicable et les modalités du contrat. Les autres éléments ne constituent pas en eux-mêmes une garantie.",
                    ],
                    [
                        'question' => "Deux emprunteurs ont le même revenu, mais le premier a déjà plusieurs crédits et le second n'a pratiquement aucune dette. Quelle conclusion est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "Le niveau d'endettement existant peut conduire la banque à apprécier différemment leur capacité de remboursement", 'is_correct' => true],
                            ['choice_text' => "Le premier est nécessairement meilleur emprunteur", 'is_correct' => false],
                            ['choice_text' => "Le second ne peut jamais obtenir de crédit", 'is_correct' => false],
                            ['choice_text' => "Le revenu suffit toujours à décider sans autre analyse", 'is_correct' => false],
                        ],
                        'explanation' => "À revenu égal, les obligations financières déjà existantes peuvent modifier la capacité de remboursement disponible. Une décision de crédit prend donc en compte plusieurs informations et pas uniquement le revenu.",
                    ],
                    [
                        'question' => "Une banque observe qu'un client a plusieurs échéances impayées. Quel risque est le plus directement concerné ?",
                        'choices' => [
                            ['choice_text' => "Le risque de crédit", 'is_correct' => true],
                            ['choice_text' => "Le risque de change uniquement", 'is_correct' => false],
                            ['choice_text' => "Le risque d'image uniquement", 'is_correct' => false],
                            ['choice_text' => "Le risque climatique uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Des échéances impayées indiquent une difficulté de remboursement de la dette. Le risque de crédit correspond précisément au risque de perte lié au défaut ou à la dégradation de la capacité d'un emprunteur ou d'une contrepartie.",
                    ],
                    [
                        'question' => "Un prêt de 50 000 € est remboursé à hauteur de 8 000 € de principal. Quel est le principal restant dû ?",
                        'choices' => [
                            ['choice_text' => "42 000 €", 'is_correct' => true],
                            ['choice_text' => "58 000 €", 'is_correct' => false],
                            ['choice_text' => "8 000 €", 'is_correct' => false],
                            ['choice_text' => "50 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le principal restant dû est 50 000 - 8 000 = 42 000 €. Les intérêts ne modifient pas ce calcul lorsqu'ils sont distincts du remboursement du principal.",
                    ],
                    [
                        'question' => "Pourquoi une banque peut-elle demander des informations sur l'activité d'une entreprise qui sollicite un crédit ?",
                        'choices' => [
                            ['choice_text' => "Pour comprendre ses revenus, ses charges, sa trésorerie et sa capacité de remboursement", 'is_correct' => true],
                            ['choice_text' => "Pour décider du taux d'inflation national", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer le cours de toutes les actions cotées", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer l'audit légal de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "L'analyse du dossier d'une entreprise vise notamment à comprendre son modèle économique, ses flux de trésorerie et ses ressources financières. Elle aide la banque à apprécier le risque de crédit.",
                    ],
                    [
                        'question' => "Quel scénario augmente généralement le risque de défaut, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Une forte baisse durable du revenu disponible de l'emprunteur", 'is_correct' => true],
                            ['choice_text' => "Une réduction du montant des dettes sans autre changement", 'is_correct' => false],
                            ['choice_text' => "Une hausse du revenu avec des charges inchangées", 'is_correct' => false],
                            ['choice_text' => "Une amélioration de la trésorerie disponible", 'is_correct' => false],
                        ],
                        'explanation' => "Une baisse durable des ressources disponibles réduit la capacité de l'emprunteur à payer les échéances, ce qui augmente généralement le risque de défaut, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Lorsqu'une banque exige un apport personnel plus important pour un financement immobilier, quel peut être l'objectif principal ?",
                        'choices' => [
                            ['choice_text' => "Réduire le montant financé par la banque et limiter son exposition au risque", 'is_correct' => true],
                            ['choice_text' => "Garantir automatiquement l'absence de défaut", 'is_correct' => false],
                            ['choice_text' => "Augmenter mécaniquement le salaire du client", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute variation de la valeur du bien", 'is_correct' => false],
                        ],
                        'explanation' => "Un apport plus important réduit la part du financement fournie par la banque et peut donc réduire son exposition. Il ne garantit toutefois ni la stabilité du prix du bien ni l'absence de défaut.",
                    ],
                    [
                        'question' => "Une banque compare deux dossiers. Le dossier A a des revenus élevés mais très variables ; le dossier B a des revenus légèrement plus faibles mais plus stables. Quelle approche est la plus cohérente ?",
                        'choices' => [
                            ['choice_text' => "Examiner à la fois le niveau et la stabilité des revenus avant de conclure", 'is_correct' => true],
                            ['choice_text' => "Choisir automatiquement A parce que son revenu maximal est plus élevé", 'is_correct' => false],
                            ['choice_text' => "Choisir automatiquement B parce que son revenu est plus faible", 'is_correct' => false],
                            ['choice_text' => "Ignorer les revenus et regarder uniquement la durée du prêt", 'is_correct' => false],
                        ],
                        'explanation' => "L'évaluation du crédit ne se limite pas au niveau des revenus. Leur régularité, les charges, les garanties et d'autres éléments du dossier influencent également la capacité de remboursement.",
                    ],
                ],
            ],
            [
                'title' => "Taux d'intérêt et revenus bancaires",
                'description' => "Comprendre le rôle des intérêts, des taux de crédit et des coûts de financement dans la rentabilité bancaire.",
                'duration' => 23,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Une banque accorde un prêt de 10 000 € à un taux annuel simple de 6 %. Quel est l'intérêt annuel, en supposant que le principal reste inchangé pendant un an ?",
                        'choices' => [
                            ['choice_text' => "600 €", 'is_correct' => true],
                            ['choice_text' => "60 €", 'is_correct' => false],
                            ['choice_text' => "1 600 €", 'is_correct' => false],
                            ['choice_text' => "6 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'intérêt annuel est 10 000 × 6 % = 600 €. Le calcul suppose ici un principal inchangé et ne prend pas en compte d'autres frais.",
                    ],
                    [
                        'question' => "Si le taux facturé sur les prêts augmente alors que le coût des dépôts reste inchangé, quel effet peut-on attendre, toutes choses égales par ailleurs, sur la marge d'intérêt de la banque ?",
                        'choices' => [
                            ['choice_text' => "Une augmentation", 'is_correct' => true],
                            ['choice_text' => "Une diminution certaine", 'is_correct' => false],
                            ['choice_text' => "Aucun effet possible", 'is_correct' => false],
                            ['choice_text' => "Une disparition des capitaux propres", 'is_correct' => false],
                        ],
                        'explanation' => "Si les revenus d'intérêts augmentent sur les actifs alors que le coût des ressources reste inchangé, l'écart entre les deux peut s'élargir. L'effet réel dépend ensuite de la composition du bilan et des autres coûts.",
                    ],
                    [
                        'question' => "Quel élément représente le mieux un revenu d'intérêt pour une banque ?",
                        'choices' => [
                            ['choice_text' => "Les intérêts reçus sur les crédits accordés", 'is_correct' => true],
                            ['choice_text' => "Le remboursement du principal d'un prêt", 'is_correct' => false],
                            ['choice_text' => "Un dépôt reçu d'un client", 'is_correct' => false],
                            ['choice_text' => "Une augmentation des dettes envers une autre banque", 'is_correct' => false],
                        ],
                        'explanation' => "Les intérêts reçus sur les crédits rémunèrent le financement accordé et constituent un revenu d'intérêt. Le remboursement du principal réduit principalement la créance sans constituer, à lui seul, un produit d'intérêt.",
                    ],
                    [
                        'question' => "Un crédit de 30 000 € génère 1 500 € d'intérêts sur une période. Quel taux simple représente ces intérêts par rapport au principal ?",
                        'choices' => [
                            ['choice_text' => "5 %", 'is_correct' => true],
                            ['choice_text' => "0,5 %", 'is_correct' => false],
                            ['choice_text' => "15 %", 'is_correct' => false],
                            ['choice_text' => "50 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux simple est 1 500 / 30 000 = 0,05, soit 5 %. Le calcul suppose que l'on compare directement l'intérêt à la base de 30 000 €.",
                    ],
                    [
                        'question' => "Pourquoi une banque ne peut-elle pas assimiler le taux d'un prêt au coût total du financement pour le client ?",
                        'choices' => [
                            ['choice_text' => "Parce que des frais, commissions et autres conditions peuvent aussi intervenir selon le produit", 'is_correct' => true],
                            ['choice_text' => "Parce que les banques ne facturent jamais d'intérêts", 'is_correct' => false],
                            ['choice_text' => "Parce que le taux n'a aucun effet sur les paiements", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les prêts ont exactement le même coût", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'intérêt est un élément majeur du coût d'un crédit, mais le coût global peut aussi dépendre de frais et de commissions prévus par le contrat. Il faut donc considérer les conditions complètes du financement.",
                    ],
                    [
                        'question' => "Une banque paie 2 % sur certaines ressources et perçoit 6 % sur les actifs correspondants. Quel écart de taux simple obtient-elle ?",
                        'choices' => [
                            ['choice_text' => "4 points de pourcentage", 'is_correct' => true],
                            ['choice_text' => "8 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "3 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "0,04 point de pourcentage", 'is_correct' => false],
                        ],
                        'explanation' => "L'écart est 6 % - 2 % = 4 points de pourcentage. Il s'agit d'un écart de taux, et non d'un taux de 4 % calculé sur une base quelconque.",
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement un taux variable sur un crédit ?",
                        'choices' => [
                            ['choice_text' => "Le taux peut évoluer au cours du temps selon les modalités prévues au contrat", 'is_correct' => true],
                            ['choice_text' => "Le taux reste nécessairement identique jusqu'à l'échéance", 'is_correct' => false],
                            ['choice_text' => "Le taux ne dépend jamais d'un indice ou d'une référence", 'is_correct' => false],
                            ['choice_text' => "Le taux variable annule le risque de taux", 'is_correct' => false],
                        ],
                        'explanation' => "Un taux variable peut être révisé selon une référence et une fréquence définies par le contrat. Son évolution peut exposer l'emprunteur et la banque à un risque de taux.",
                    ],
                    [
                        'question' => "Une banque perçoit 900 € de revenus d'intérêts et verse 250 € d'intérêts sur ses ressources. Quel montant simplifié reste avant autres produits, charges et provisions ?",
                        'choices' => [
                            ['choice_text' => "650 €", 'is_correct' => true],
                            ['choice_text' => "1 150 €", 'is_correct' => false],
                            ['choice_text' => "250 €", 'is_correct' => false],
                            ['choice_text' => "900 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde simplifié des intérêts est 900 - 250 = 650 €. Ce montant ne représente pas encore le résultat net de la banque, car d'autres produits, charges et risques doivent être pris en compte.",
                    ],
                    [
                        'question' => "Si une banque accorde des prêts à taux fixe et finance une partie de ses ressources à taux variable, quelle situation peut créer une pression sur sa marge ?",
                        'choices' => [
                            ['choice_text' => "Une hausse du coût des ressources variables alors que le revenu des prêts fixes reste inchangé", 'is_correct' => true],
                            ['choice_text' => "Une baisse des retraits des clients", 'is_correct' => false],
                            ['choice_text' => "Une hausse des dépôts non rémunérés", 'is_correct' => false],
                            ['choice_text' => "Une diminution des frais administratifs", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque le coût des ressources augmente mais que le rendement des prêts à taux fixe ne bouge pas immédiatement, l'écart entre revenus et coûts d'intérêt peut se réduire. C'est une illustration simple du risque de taux.",
                    ],
                    [
                        'question' => "Pourquoi le moment des flux d'intérêts est-il important dans l'analyse d'un crédit ?",
                        'choices' => [
                            ['choice_text' => "Parce que la valeur et le coût des flux dépendent notamment de leur calendrier", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les flux à des dates différentes ont forcément la même valeur", 'is_correct' => false],
                            ['choice_text' => "Parce que le calendrier n'a aucun effet sur les intérêts", 'is_correct' => false],
                            ['choice_text' => "Parce que les remboursements n'ont jamais d'impact sur le risque", 'is_correct' => false],
                        ],
                        'explanation' => "En finance, la date des flux compte en raison de la valeur temporelle de l'argent. Le calendrier des paiements influence aussi la liquidité, le rendement et le profil de risque du crédit.",
                    ],
                ],
            ],
            [
                'title' => "Liquidité et stabilité bancaire",
                'description' => "Évaluation des notions fondamentales de liquidité bancaire, de retraits et de gestion des besoins à court terme.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une banque doit pouvoir honorer un volume important de retraits inattendus. Quelle ressource est la plus directement utile ?",
                        'choices' => [
                            ['choice_text' => "Des actifs liquides immédiatement mobilisables", 'is_correct' => true],
                            ['choice_text' => "Des immobilisations difficiles à vendre rapidement", 'is_correct' => false],
                            ['choice_text' => "Des bénéfices prévus dans dix ans", 'is_correct' => false],
                            ['choice_text' => "Des créances sans échéance définie", 'is_correct' => false],
                        ],
                        'explanation' => "Les actifs liquides peuvent être convertis rapidement en moyens de paiement avec une faible perte de valeur. Ils sont donc particulièrement utiles pour répondre à des besoins immédiats de trésorerie.",
                    ],
                    [
                        'question' => "Quel événement peut créer un besoin de liquidité pour une banque ?",
                        'choices' => [
                            ['choice_text' => "Une augmentation soudaine des retraits des clients", 'is_correct' => true],
                            ['choice_text' => "Une baisse du nombre de virements sortants", 'is_correct' => false],
                            ['choice_text' => "Une réduction des paiements à effectuer", 'is_correct' => false],
                            ['choice_text' => "Une amélioration de la trésorerie disponible", 'is_correct' => false],
                        ],
                        'explanation' => "Des retraits plus importants nécessitent davantage de liquidités disponibles à court terme. Une banque doit donc suivre les mouvements de trésorerie et conserver des sources de financement adaptées.",
                    ],
                    [
                        'question' => "Pourquoi un actif très rentable n'est-il pas nécessairement un bon substitut à la liquidité ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il peut être difficile à convertir rapidement en liquidités sans subir une perte importante", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un actif rentable ne peut jamais avoir de valeur", 'is_correct' => false],
                            ['choice_text' => "Parce que la rentabilité supprime les obligations à court terme", 'is_correct' => false],
                            ['choice_text' => "Parce que les actifs liquides ne peuvent jamais rapporter de rendement", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité concerne la facilité et la rapidité avec lesquelles un actif peut être mobilisé. Un actif peut être rentable mais peu liquide, ce qui le rend moins utile pour répondre à des sorties de trésorerie immédiates.",
                    ],
                    [
                        'question' => "Une banque dispose de 12 M€ d'actifs liquides et anticipe 9 M€ de sorties de trésorerie à court terme. Quel excédent simplifié de liquidité ressort de ces données ?",
                        'choices' => [
                            ['choice_text' => "3 M€", 'is_correct' => true],
                            ['choice_text' => "21 M€", 'is_correct' => false],
                            ['choice_text' => "9 M€", 'is_correct' => false],
                            ['choice_text' => "12 M€", 'is_correct' => false],
                        ],
                        'explanation' => "L'excédent simplifié est 12 - 9 = 3 M€. Ce calcul ne tient pas compte d'autres flux futurs ni de la qualité exacte des actifs liquides.",
                    ],
                    [
                        'question' => "Quel comportement peut aggraver une tension de liquidité dans une banque ?",
                        'choices' => [
                            ['choice_text' => "Vendre rapidement des actifs dans un marché peu liquide pour obtenir des liquidités", 'is_correct' => true],
                            ['choice_text' => "Augmenter les réserves de liquidité", 'is_correct' => false],
                            ['choice_text' => "Réduire les sorties de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Diversifier les sources de financement", 'is_correct' => false],
                        ],
                        'explanation' => "Une vente forcée sur un marché peu liquide peut conduire à une décote importante et donc à des pertes. La diversification des financements et le maintien d'un coussin de liquidité contribuent plutôt à la résilience.",
                    ],
                    [
                        'question' => "Quelle différence fondamentale existe entre liquidité et solvabilité ?",
                        'choices' => [
                            ['choice_text' => "La liquidité concerne la capacité à faire face aux besoins de paiement à temps, tandis que la solvabilité concerne plus largement la capacité à absorber les pertes et honorer les obligations", 'is_correct' => true],
                            ['choice_text' => "Les deux notions sont toujours strictement identiques", 'is_correct' => false],
                            ['choice_text' => "La solvabilité concerne uniquement les paiements d'une journée", 'is_correct' => false],
                            ['choice_text' => "La liquidité mesure uniquement le bénéfice annuel", 'is_correct' => false],
                        ],
                        'explanation' => "Une banque peut être solvable mais rencontrer temporairement un manque de liquidité, ou l'inverse dans certains scénarios. La première notion porte davantage sur la capacité financière globale à absorber les pertes, la seconde sur les besoins de financement et de paiement à temps.",
                    ],
                    [
                        'question' => "Pourquoi une banque surveille-t-elle les échéances de ses actifs et de ses passifs ?",
                        'choices' => [
                            ['choice_text' => "Pour identifier les décalages susceptibles de créer des besoins de financement", 'is_correct' => true],
                            ['choice_text' => "Pour rendre tous les actifs illiquides", 'is_correct' => false],
                            ['choice_text' => "Pour éliminer toute variation des taux d'intérêt", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de comptabiliser les dépôts", 'is_correct' => false],
                        ],
                        'explanation' => "Le calendrier des encaissements et des décaissements influence les besoins de liquidité. La banque surveille donc les échéances afin d'anticiper les périodes où les sorties pourraient dépasser les ressources disponibles.",
                    ],
                    [
                        'question' => "Une banque remplace une partie d'un financement à très court terme par un financement plus stable à plus long terme. Quel effet peut-on généralement rechercher ?",
                        'choices' => [
                            ['choice_text' => "Réduire la dépendance à des refinancements fréquents", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement le risque de crédit de chaque client", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les coûts de financement", 'is_correct' => false],
                            ['choice_text' => "Garantir une hausse du cours des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Un financement plus stable peut réduire la nécessité de renouveler fréquemment des ressources à court terme. Cela peut améliorer la résilience face à un stress de marché, même si le financement à plus long terme peut avoir un coût différent.",
                    ],
                    [
                        'question' => "Quel exemple correspond à une gestion prudente de la liquidité ?",
                        'choices' => [
                            ['choice_text' => "Maintenir un coussin d'actifs liquides et prévoir plusieurs sources de financement", 'is_correct' => true],
                            ['choice_text' => "Investir toutes les ressources dans un seul actif difficile à vendre", 'is_correct' => false],
                            ['choice_text' => "Supposer qu'aucun client ne retirera jamais son argent", 'is_correct' => false],
                            ['choice_text' => "Éviter toute prévision des flux de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion prudente de la liquidité repose sur la capacité à anticiper les flux et à disposer de ressources mobilisables. Un coussin de liquidité et une diversification des financements réduisent la dépendance à une seule source.",
                    ],
                    [
                        'question' => "Si les sorties de trésorerie prévues sont de 7 M€ et les entrées certaines de 5 M€, quel besoin net de financement à court terme apparaît avant autres ajustements ?",
                        'choices' => [
                            ['choice_text' => "2 M€", 'is_correct' => true],
                            ['choice_text' => "12 M€", 'is_correct' => false],
                            ['choice_text' => "5 M€", 'is_correct' => false],
                            ['choice_text' => "7 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Le besoin net est 7 - 5 = 2 M€. La banque doit donc prévoir une source de liquidité pour couvrir cet écart si aucune autre entrée n'est attendue.",
                    ],
                ],
            ],
            [
                'title' => "Rentabilité et marge bancaire",
                'description' => "Lecture des principaux mécanismes qui influencent la rentabilité d'une banque et sa marge d'intérêt.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Quel indicateur met directement en relation le résultat net d'une banque avec ses capitaux propres ?",
                        'choices' => [
                            ['choice_text' => "ROE", 'is_correct' => true],
                            ['choice_text' => "ROA", 'is_correct' => false],
                            ['choice_text' => "LTV", 'is_correct' => false],
                            ['choice_text' => "DSCR", 'is_correct' => false],
                        ],
                        'explanation' => "Le ROE, ou Return on Equity, rapporte le résultat net aux capitaux propres. Il mesure donc la rentabilité du capital apporté par les actionnaires, selon la définition retenue.",
                    ],
                    [
                        'question' => "Une banque obtient 900 000 € de résultat net avec 30 M€ de capitaux propres. Quel ROE simplifié obtient-on ?",
                        'choices' => [
                            ['choice_text' => "3 %", 'is_correct' => true],
                            ['choice_text' => "30 %", 'is_correct' => false],
                            ['choice_text' => "0,3 %", 'is_correct' => false],
                            ['choice_text' => "33,3 %", 'is_correct' => false],
                        ],
                        'explanation' => "ROE = 900 000 / 30 000 000 = 0,03, soit 3 %. Il s'agit d'un calcul simplifié, sans prise en compte d'une moyenne de capitaux propres sur la période.",
                    ],
                    [
                        'question' => "Quel indicateur relie généralement le résultat net à l'ensemble des actifs ?",
                        'choices' => [
                            ['choice_text' => "ROA", 'is_correct' => true],
                            ['choice_text' => "ROE", 'is_correct' => false],
                            ['choice_text' => "Yield spread", 'is_correct' => false],
                            ['choice_text' => "LTV", 'is_correct' => false],
                        ],
                        'explanation' => "Le ROA, ou Return on Assets, rapporte le résultat net aux actifs. Il donne une indication de l'efficacité avec laquelle les actifs contribuent au résultat.",
                    ],
                    [
                        'question' => "Une banque réduit ses charges d'exploitation sans modifier ses revenus. Quel effet mécanique peut-on attendre sur son résultat avant impôt, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Une hausse", 'is_correct' => true],
                            ['choice_text' => "Une baisse", 'is_correct' => false],
                            ['choice_text' => "Aucun effet", 'is_correct' => false],
                            ['choice_text' => "Une disparition des actifs", 'is_correct' => false],
                        ],
                        'explanation' => "À revenus constants, une baisse des charges augmente mécaniquement le résultat avant impôt, toutes choses égales par ailleurs. Cela ne signifie pas que la stratégie est automatiquement optimale, car certaines réductions de coûts peuvent affecter l'activité future.",
                    ],
                    [
                        'question' => "Une banque affiche 2 M€ de revenus et 1,6 M€ de charges avant impôt. Quel résultat simplifié obtient-elle ?",
                        'choices' => [
                            ['choice_text' => "400 000 €", 'is_correct' => true],
                            ['choice_text' => "3,6 M€", 'is_correct' => false],
                            ['choice_text' => "1,6 M€", 'is_correct' => false],
                            ['choice_text' => "800 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat simplifié avant impôt est 2 000 000 - 1 600 000 = 400 000 €. Le calcul ne prend pas en compte d'autres éléments non mentionnés dans l'énoncé.",
                    ],
                    [
                        'question' => "Pourquoi une banque peut-elle avoir des revenus en hausse tout en voyant son bénéfice diminuer ?",
                        'choices' => [
                            ['choice_text' => "Parce que ses charges, provisions ou pertes peuvent augmenter plus rapidement que ses revenus", 'is_correct' => true],
                            ['choice_text' => "Parce que les revenus élevés sont toujours comptabilisés comme une perte", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une banque ne supporte aucune charge", 'is_correct' => false],
                            ['choice_text' => "Parce que le chiffre d'affaires détermine à lui seul le bénéfice", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat dépend des revenus mais aussi des charges, des provisions, des pertes et d'autres éléments. Une hausse des revenus n'entraîne donc pas nécessairement une hausse équivalente du bénéfice.",
                    ],
                    [
                        'question' => "Quelle situation peut réduire la rentabilité d'une banque même si le volume de crédits augmente ?",
                        'choices' => [
                            ['choice_text' => "Une forte hausse des défauts et des provisions pour pertes de crédit", 'is_correct' => true],
                            ['choice_text' => "Une baisse des défauts à portefeuille constant", 'is_correct' => false],
                            ['choice_text' => "Une amélioration de la qualité des emprunteurs", 'is_correct' => false],
                            ['choice_text' => "Une réduction des charges à revenus constants", 'is_correct' => false],
                        ],
                        'explanation' => "La croissance du portefeuille de prêts peut augmenter les revenus, mais elle peut aussi s'accompagner de pertes de crédit plus élevées. Les provisions et dépréciations peuvent alors réduire fortement le résultat.",
                    ],
                    [
                        'question' => "Une banque cherche à améliorer son efficacité opérationnelle. Quel exemple correspond le mieux à cet objectif ?",
                        'choices' => [
                            ['choice_text' => "Traiter davantage d'opérations avec des coûts maîtrisés sans dégrader excessivement la qualité du service", 'is_correct' => true],
                            ['choice_text' => "Augmenter toutes les charges sans modifier l'activité", 'is_correct' => false],
                            ['choice_text' => "Supprimer tout contrôle interne", 'is_correct' => false],
                            ['choice_text' => "Accorder des crédits sans analyser les emprunteurs", 'is_correct' => false],
                        ],
                        'explanation' => "L'efficacité opérationnelle cherche à obtenir un bon niveau de production de services pour un niveau de ressources maîtrisé, sans compromettre la qualité, la conformité ou la gestion des risques.",
                    ],
                    [
                        'question' => "Si le résultat net d'une banque passe de 1 M€ à 1,2 M€ avec des capitaux propres constants, de quel ordre est l'évolution du ROE ?",
                        'choices' => [
                            ['choice_text' => "Il augmente de 20 % par rapport à son niveau initial", 'is_correct' => true],
                            ['choice_text' => "Il diminue de 20 %", 'is_correct' => false],
                            ['choice_text' => "Il reste nécessairement identique", 'is_correct' => false],
                            ['choice_text' => "Il est divisé par deux", 'is_correct' => false],
                        ],
                        'explanation' => "Avec des capitaux propres constants, le ROE évolue dans la même proportion que le résultat net. Passer de 1 à 1,2 M€ correspond à une hausse de 20 %, donc à une hausse de 20 % du ROE initial.",
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux la marge nette d'intérêt (Net Interest Margin) ?",
                        'choices' => [
                            ['choice_text' => "Elle mesure l'écart entre les revenus et charges d'intérêt rapporté à une base d'actifs générant des intérêts, selon la méthode utilisée", 'is_correct' => true],
                            ['choice_text' => "Elle mesure uniquement les frais de personnel", 'is_correct' => false],
                            ['choice_text' => "Elle représente le taux de défaut de tous les emprunteurs", 'is_correct' => false],
                            ['choice_text' => "Elle correspond toujours au ROE", 'is_correct' => false],
                        ],
                        'explanation' => "La Net Interest Margin, ou NIM, relie le revenu net d'intérêt à une base d'actifs ou d'actifs rémunérateurs selon la convention retenue. C'est un indicateur central de la performance d'intermédiation.",
                    ],
                ],
            ],
            [
                'title' => "Risques bancaires essentiels",
                'description' => "Identification des principaux risques bancaires et compréhension de leurs effets sur l'activité d'une banque.",
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quel risque correspond au cas où un emprunteur ne rembourse pas son crédit ?",
                        'choices' => [
                            ['choice_text' => "Risque de crédit", 'is_correct' => true],
                            ['choice_text' => "Risque de liquidité uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de marché uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque opérationnel uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de crédit est le risque de perte lié au défaut ou à la dégradation de la qualité de crédit d'un emprunteur ou d'une contrepartie.",
                    ],
                    [
                        'question' => "Une panne informatique empêche les virements d'être exécutés pendant plusieurs heures. Quel risque est le plus directement concerné ?",
                        'choices' => [
                            ['choice_text' => "Risque opérationnel", 'is_correct' => true],
                            ['choice_text' => "Risque de crédit uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de taux uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de change uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Une défaillance de systèmes ou de processus relève du risque opérationnel. Dans la pratique, elle peut aussi entraîner des conséquences commerciales, juridiques ou de réputation.",
                    ],
                    [
                        'question' => "Une banque détient des obligations dont la valeur de marché baisse après une hausse des taux. Quel risque est principalement illustré ?",
                        'choices' => [
                            ['choice_text' => "Risque de marché, notamment risque de taux", 'is_correct' => true],
                            ['choice_text' => "Risque de crédit du client particulier uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de fraude interne uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de liquidité uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "La variation du prix d'une obligation à la suite d'un mouvement de taux relève du risque de marché, plus précisément du risque de taux d'intérêt. Une hausse des taux tend à réduire le prix des obligations existantes à taux fixe.",
                    ],
                    [
                        'question' => "Pourquoi une banque diversifie-t-elle généralement son portefeuille de prêts ?",
                        'choices' => [
                            ['choice_text' => "Pour éviter qu'une concentration excessive sur un seul emprunteur ou secteur domine le risque", 'is_correct' => true],
                            ['choice_text' => "Pour rendre tous les crédits sans risque", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les besoins de capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Pour garantir que tous les clients aient le même profil", 'is_correct' => false],
                        ],
                        'explanation' => "La diversification réduit la concentration du risque. Si un secteur ou un emprunteur rencontre des difficultés, l'impact peut être moins important lorsque l'exposition est répartie entre plusieurs contreparties et activités.",
                    ],
                    [
                        'question' => "Quel exemple correspond à un risque de fraude interne ?",
                        'choices' => [
                            ['choice_text' => "Un employé détourne des fonds de la banque à des fins personnelles", 'is_correct' => true],
                            ['choice_text' => "Une obligation perd de la valeur après une hausse des taux", 'is_correct' => false],
                            ['choice_text' => "Un client rembourse son prêt à temps", 'is_correct' => false],
                            ['choice_text' => "Les dépôts augmentent de façon stable", 'is_correct' => false],
                        ],
                        'explanation' => "Le détournement de fonds par un employé est un exemple de fraude et peut relever du risque opérationnel. Il peut également entraîner des conséquences juridiques et de réputation.",
                    ],
                    [
                        'question' => "Une banque a 100 M€ de crédits et constate 2 M€ de pertes de crédit sur une période. Quel taux de perte simple cela représente-t-il par rapport au portefeuille indiqué ?",
                        'choices' => [
                            ['choice_text' => "2 %", 'is_correct' => true],
                            ['choice_text' => "0,2 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                            ['choice_text' => "5 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le ratio simple est 2 / 100 = 0,02, soit 2 %. Il s'agit d'un calcul pédagogique et non d'une mesure complète de la perte attendue ou du risque de crédit réglementaire.",
                    ],
                    [
                        'question' => "Quel risque apparaît lorsqu'une banque ne peut pas obtenir assez rapidement de financement pour couvrir ses obligations ?",
                        'choices' => [
                            ['choice_text' => "Risque de liquidité", 'is_correct' => true],
                            ['choice_text' => "Risque stratégique uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de change uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque comptable uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de liquidité est le risque qu'une banque ne puisse pas faire face à ses obligations lorsqu'elles arrivent à échéance ou qu'elle ne puisse obtenir des financements à des conditions acceptables.",
                    ],
                    [
                        'question' => "Une banque concentre une grande partie de ses prêts sur un seul secteur industriel. Quel risque est particulièrement visible ?",
                        'choices' => [
                            ['choice_text' => "Risque de concentration", 'is_correct' => true],
                            ['choice_text' => "Risque d'absence totale de diversification", 'is_correct' => false],
                            ['choice_text' => "Risque de change automatique", 'is_correct' => false],
                            ['choice_text' => "Risque de taux nul", 'is_correct' => false],
                        ],
                        'explanation' => "Une concentration élevée sur un même secteur augmente la dépendance de la banque à la santé de ce secteur. Un choc sectoriel peut alors toucher simultanément une part importante du portefeuille.",
                    ],
                    [
                        'question' => "Pourquoi les banques combinent-elles plusieurs méthodes de contrôle des risques ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'un risque peut provenir de sources différentes et nécessiter plusieurs mécanismes de surveillance", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un seul contrôle ne peut jamais être utile", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque est toujours impossible à mesurer", 'is_correct' => false],
                            ['choice_text' => "Parce que les contrôles remplacent toute décision commerciale", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion des risques peut inclure des limites, des contrôles, des analyses, des procédures, des outils de suivi et des plans de continuité. La combinaison de mécanismes vise à réduire les faiblesses d'un dispositif unique.",
                    ],
                    [
                        'question' => "Un établissement constate qu'une modification informatique a été déployée sans test suffisant et provoque des erreurs de transactions. Quelle faiblesse faut-il surtout corriger ?",
                        'choices' => [
                            ['choice_text' => "Le contrôle des changements et des tests informatiques", 'is_correct' => true],
                            ['choice_text' => "Le niveau des dépôts uniquement", 'is_correct' => false],
                            ['choice_text' => "Le coupon d'une obligation souveraine", 'is_correct' => false],
                            ['choice_text' => "Le prix d'un actif immobilier du client", 'is_correct' => false],
                        ],
                        'explanation' => "Le problème vient du processus de changement informatique : les tests et validations doivent être adaptés avant le déploiement. C'est une composante importante du contrôle du risque opérationnel.",
                    ],
                ],
            ],
            [
                'title' => "Paiements et services bancaires",
                'description' => "Découverte des principaux services de paiement et des usages quotidiens proposés par les banques.",
                'duration' => 22,
                'passing_score' => 54,
                'questions' => [
                    [
                        'question' => "Quel service permet généralement d'envoyer de l'argent d'un compte bancaire vers un autre compte ?",
                        'choices' => [
                            ['choice_text' => "Un virement", 'is_correct' => true],
                            ['choice_text' => "Une immobilisation", 'is_correct' => false],
                            ['choice_text' => "Une provision comptable", 'is_correct' => false],
                            ['choice_text' => "Un amortissement", 'is_correct' => false],
                        ],
                        'explanation' => "Le virement est une opération de paiement qui permet de transférer des fonds d'un compte vers un autre selon les instructions du payeur et les règles du système concerné.",
                    ],
                    [
                        'question' => "Quel moyen est généralement utilisé pour payer rapidement un achat au point de vente avec un compte bancaire ?",
                        'choices' => [
                            ['choice_text' => "Une carte de paiement", 'is_correct' => true],
                            ['choice_text' => "Une écriture d'amortissement", 'is_correct' => false],
                            ['choice_text' => "Un titre de propriété", 'is_correct' => false],
                            ['choice_text' => "Un bilan annuel", 'is_correct' => false],
                        ],
                        'explanation' => "La carte de paiement permet d'initier une transaction chez un commerçant et de débiter le compte selon le type de carte et le dispositif de paiement utilisé.",
                    ],
                    [
                        'question' => "Pourquoi la banque vérifie-t-elle généralement l'identité d'un client lors de certaines opérations ou à l'ouverture d'un compte ?",
                        'choices' => [
                            ['choice_text' => "Pour respecter les procédures de connaissance du client et de sécurité financière applicables", 'is_correct' => true],
                            ['choice_text' => "Pour garantir que le client sera toujours solvable", 'is_correct' => false],
                            ['choice_text' => "Pour fixer le prix de toutes les actions", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer le contrat de compte", 'is_correct' => false],
                        ],
                        'explanation' => "La vérification de l'identité participe aux dispositifs de connaissance du client, de sécurité et de prévention de la criminalité financière. Elle ne garantit pas la solvabilité future du client.",
                    ],
                    [
                        'question' => "Un client constate une opération par carte qu'il ne reconnaît pas. Quel comportement est le plus approprié en première intention ?",
                        'choices' => [
                            ['choice_text' => "Contacter rapidement sa banque ou le service prévu pour signaler l'opération", 'is_correct' => true],
                            ['choice_text' => "Attendre plusieurs années avant de vérifier", 'is_correct' => false],
                            ['choice_text' => "Publier les informations de son compte sur un forum", 'is_correct' => false],
                            ['choice_text' => "Communiquer son code confidentiel à un inconnu", 'is_correct' => false],
                        ],
                        'explanation' => "Une opération non reconnue doit être signalée rapidement selon les procédures de la banque. Le client ne doit pas divulguer ses codes ou informations sensibles à des tiers non autorisés.",
                    ],
                    [
                        'question' => "Quel est l'intérêt principal d'un relevé bancaire pour le client ?",
                        'choices' => [
                            ['choice_text' => "Suivre les mouvements enregistrés sur son compte et contrôler son solde", 'is_correct' => true],
                            ['choice_text' => "Garantir automatiquement un rendement sur ses dépôts", 'is_correct' => false],
                            ['choice_text' => "Déterminer la politique monétaire nationale", 'is_correct' => false],
                            ['choice_text' => "Remplacer toutes les pièces justificatives", 'is_correct' => false],
                        ],
                        'explanation' => "Le relevé permet au client de consulter les opérations enregistrées, d'identifier les entrées et sorties et de vérifier la cohérence de son solde et de ses paiements.",
                    ],
                    [
                        'question' => "Une entreprise veut automatiser le paiement mensuel de ses fournisseurs. Quelle solution bancaire peut répondre à ce besoin ?",
                        'choices' => [
                            ['choice_text' => "Des virements récurrents ou une solution de paiements automatisés adaptée", 'is_correct' => true],
                            ['choice_text' => "Un changement du capital social", 'is_correct' => false],
                            ['choice_text' => "Une obligation à coupon zéro", 'is_correct' => false],
                            ['choice_text' => "Une hypothèque", 'is_correct' => false],
                        ],
                        'explanation' => "Les banques proposent des services permettant d'automatiser certains paiements récurrents. La solution exacte dépend des besoins de l'entreprise et des services disponibles.",
                    ],
                    [
                        'question' => "Pourquoi un réseau de paiement doit-il assurer la sécurité des transactions ?",
                        'choices' => [
                            ['choice_text' => "Pour réduire les risques de fraude, d'erreur et d'accès non autorisé", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute transaction légitime", 'is_correct' => false],
                            ['choice_text' => "Pour garantir la hausse des taux d'intérêt", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les comptes bancaires", 'is_correct' => false],
                        ],
                        'explanation' => "La sécurité des paiements vise à protéger les fonds et les données tout en assurant la bonne exécution des transactions autorisées. Elle repose sur des contrôles techniques et organisationnels.",
                    ],
                    [
                        'question' => "Quel service est le plus directement lié au financement à court terme d'un besoin de trésorerie d'une entreprise ?",
                        'choices' => [
                            ['choice_text' => "Une ligne de crédit ou un découvert autorisé, selon les conditions du contrat", 'is_correct' => true],
                            ['choice_text' => "Un relevé de compte uniquement", 'is_correct' => false],
                            ['choice_text' => "Une carte d'identité", 'is_correct' => false],
                            ['choice_text' => "Un coffre-fort numérique sans service financier", 'is_correct' => false],
                        ],
                        'explanation' => "Une ligne de crédit ou un découvert peut fournir des ressources à court terme pour couvrir des besoins temporaires de trésorerie. Les conditions et les coûts dépendent du produit bancaire utilisé.",
                    ],
                    [
                        'question' => "Un client programme un virement de 2 500 € vers son fournisseur. Quel est l'objectif financier immédiat de cette opération ?",
                        'choices' => [
                            ['choice_text' => "Transférer 2 500 € au bénéficiaire désigné", 'is_correct' => true],
                            ['choice_text' => "Créer automatiquement un prêt", 'is_correct' => false],
                            ['choice_text' => "Augmenter les capitaux propres de la banque", 'is_correct' => false],
                            ['choice_text' => "Transformer le paiement en action cotée", 'is_correct' => false],
                        ],
                        'explanation' => "Le virement est une instruction de transfert de fonds vers un bénéficiaire. Il ne crée pas, à lui seul, un nouveau prêt ni des capitaux propres.",
                    ],
                    [
                        'question' => "Quel comportement améliore généralement la sécurité d'un compte bancaire en ligne ?",
                        'choices' => [
                            ['choice_text' => "Utiliser des identifiants uniques, activer l'authentification renforcée lorsqu'elle est disponible et vérifier les alertes", 'is_correct' => true],
                            ['choice_text' => "Réutiliser le même mot de passe sur tous les sites", 'is_correct' => false],
                            ['choice_text' => "Partager son code confidentiel avec un proche sans nécessité", 'is_correct' => false],
                            ['choice_text' => "Ignorer toutes les notifications de connexion", 'is_correct' => false],
                        ],
                        'explanation' => "Des identifiants uniques, une authentification renforcée et la surveillance des alertes réduisent le risque d'accès frauduleux. Les codes confidentiels doivent rester protégés.",
                    ],
                ],
            ],
            [
                'title' => "Banque digitale et relation client",
                'description' => "Introduction à la digitalisation bancaire, aux services en ligne et aux enjeux pratiques pour les clients et les banques.",
                'duration' => 24,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Quel est un avantage courant de la banque mobile pour le client ?",
                        'choices' => [
                            ['choice_text' => "Accéder à certains services bancaires à distance, souvent 24 h/24 selon le service", 'is_correct' => true],
                            ['choice_text' => "Supprimer toute nécessité de sécurité", 'is_correct' => false],
                            ['choice_text' => "Garantir un crédit sans analyse", 'is_correct' => false],
                            ['choice_text' => "Empêcher toute fraude", 'is_correct' => false],
                        ],
                        'explanation' => "Les applications mobiles permettent notamment de consulter des comptes, d'effectuer certaines opérations et de recevoir des notifications à distance. La digitalisation n'élimine pas les risques de sécurité.",
                    ],
                    [
                        'question' => "Une banque automatise l'analyse de certaines demandes simples de crédit à partir de données standardisées. Quel objectif opérationnel peut-elle rechercher ?",
                        'choices' => [
                            ['choice_text' => "Accélérer le traitement et homogénéiser certaines étapes de décision", 'is_correct' => true],
                            ['choice_text' => "Supprimer toute responsabilité humaine et tout contrôle", 'is_correct' => false],
                            ['choice_text' => "Rendre les crédits toujours rentables", 'is_correct' => false],
                            ['choice_text' => "Garantir l'absence de défaut", 'is_correct' => false],
                        ],
                        'explanation' => "L'automatisation peut réduire certains délais et standardiser des processus. Elle doit néanmoins être encadrée par des contrôles appropriés et ne garantit ni la rentabilité de chaque crédit ni l'absence de défaut.",
                    ],
                    [
                        'question' => "Pourquoi les notifications instantanées sur les opérations peuvent-elles être utiles au client ?",
                        'choices' => [
                            ['choice_text' => "Elles facilitent la détection rapide d'une opération inhabituelle", 'is_correct' => true],
                            ['choice_text' => "Elles remplacent la totalité des mécanismes de sécurité", 'is_correct' => false],
                            ['choice_text' => "Elles garantissent toujours que chaque paiement est légitime", 'is_correct' => false],
                            ['choice_text' => "Elles augmentent automatiquement le solde du compte", 'is_correct' => false],
                        ],
                        'explanation' => "Les alertes permettent au client de réagir plus vite lorsqu'une opération semble inhabituelle. Elles constituent une couche de surveillance mais ne remplacent pas les autres contrôles de sécurité.",
                    ],
                    [
                        'question' => "Quel risque peut augmenter lorsqu'un service bancaire dépend fortement d'une infrastructure informatique centralisée ?",
                        'choices' => [
                            ['choice_text' => "L'impact potentiel d'une panne ou d'une cyberattaque sur plusieurs services", 'is_correct' => true],
                            ['choice_text' => "La disparition automatique du risque de crédit", 'is_correct' => false],
                            ['choice_text' => "La suppression des besoins de liquidité", 'is_correct' => false],
                            ['choice_text' => "Une garantie automatique sur les placements", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte dépendance à une infrastructure centrale peut amplifier l'impact d'une interruption ou d'un incident de cybersécurité. Les banques utilisent donc des mesures de résilience, de sauvegarde et de continuité.",
                    ],
                    [
                        'question' => "Une banque veut améliorer l'expérience client sans augmenter fortement ses coûts de traitement. Quelle approche peut être pertinente ?",
                        'choices' => [
                            ['choice_text' => "Digitaliser les opérations simples tout en conservant un accompagnement humain pour les cas complexes", 'is_correct' => true],
                            ['choice_text' => "Supprimer toutes les vérifications réglementaires", 'is_correct' => false],
                            ['choice_text' => "Rendre chaque opération entièrement manuelle", 'is_correct' => false],
                            ['choice_text' => "Refuser les canaux numériques aux clients", 'is_correct' => false],
                        ],
                        'explanation' => "Une approche hybride peut automatiser les opérations simples tout en réservant l'intervention humaine aux situations qui demandent du jugement ou un accompagnement spécifique. La conformité et la sécurité doivent être maintenues.",
                    ],
                    [
                        'question' => "Une application bancaire demande une authentification à deux facteurs. Quel est le but principal de cette mesure ?",
                        'choices' => [
                            ['choice_text' => "Ajouter une couche de vérification au-delà du seul mot de passe", 'is_correct' => true],
                            ['choice_text' => "Garantir une hausse du taux d'intérêt du compte", 'is_correct' => false],
                            ['choice_text' => "Augmenter automatiquement le plafond de retrait", 'is_correct' => false],
                            ['choice_text' => "Supprimer la nécessité de surveiller les transactions", 'is_correct' => false],
                        ],
                        'explanation' => "L'authentification à deux facteurs utilise au moins deux éléments de vérification distincts, ce qui rend plus difficile l'accès frauduleux lorsqu'un mot de passe est compromis.",
                    ],
                    [
                        'question' => "Pourquoi une banque peut-elle proposer des conseils à distance par visioconférence ?",
                        'choices' => [
                            ['choice_text' => "Pour fournir certains services de conseil ou d'assistance sans présence physique", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toute obligation contractuelle", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute identification du client", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les produits bancaires automatiquement gratuits", 'is_correct' => false],
                        ],
                        'explanation' => "La visioconférence peut étendre l'accès à certains services et permettre une relation à distance. Elle ne supprime pas les exigences d'identification, de documentation ou de conformité applicables au service.",
                    ],
                    [
                        'question' => "Quel élément est important lors de la conception d'un nouveau service bancaire numérique ?",
                        'choices' => [
                            ['choice_text' => "La sécurité, la protection des données, la fiabilité du service et l'expérience client", 'is_correct' => true],
                            ['choice_text' => "Uniquement la vitesse, quelle que soit la sécurité", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre d'écrans de l'application", 'is_correct' => false],
                            ['choice_text' => "L'absence de contrôle sur les accès", 'is_correct' => false],
                        ],
                        'explanation' => "Un service bancaire numérique doit concilier facilité d'utilisation et exigences de sécurité, de confidentialité et de continuité. Une application rapide mais peu sûre n'offre pas un service bancaire satisfaisant.",
                    ],
                    [
                        'question' => "Une banque constate que les clients effectuent beaucoup plus d'opérations via l'application mobile. Quelle conséquence opérationnelle est plausible ?",
                        'choices' => [
                            ['choice_text' => "Le volume d'opérations manuelles en agence peut diminuer pour les tâches simples", 'is_correct' => true],
                            ['choice_text' => "La banque n'a plus besoin de système informatique", 'is_correct' => false],
                            ['choice_text' => "Les besoins de sécurité disparaissent", 'is_correct' => false],
                            ['choice_text' => "Tous les produits bancaires deviennent identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le déplacement des opérations simples vers le canal mobile peut réduire certaines tâches manuelles en agence. En contrepartie, la banque doit maintenir une infrastructure numérique robuste et sécurisée.",
                    ],
                    [
                        'question' => "Quel indicateur est utile pour suivre la qualité d'un service numérique bancaire ?",
                        'choices' => [
                            ['choice_text' => "Le taux d'échecs de transaction ou d'incidents techniques", 'is_correct' => true],
                            ['choice_text' => "Uniquement le montant du capital social", 'is_correct' => false],
                            ['choice_text' => "Le prix mondial du pétrole uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de billets en circulation dans le pays", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux d'échec des transactions et les incidents techniques permettent d'évaluer la fiabilité d'un service numérique. D'autres indicateurs comme la disponibilité ou la satisfaction client peuvent compléter ce suivi.",
                    ],
                ],
            ],
            [
                'title' => "Situations bancaires et décisions pratiques",
                'description' => "Mini-cas de niveau débutant pour relier crédit, liquidité, risques, rentabilité et services bancaires à des décisions concrètes.",
                'duration' => 27,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une banque reçoit beaucoup de demandes de prêts mais constate une forte hausse des impayés dans un secteur particulier. Quelle réaction est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "Renforcer l'analyse du risque et revoir les limites d'exposition à ce secteur", 'is_correct' => true],
                            ['choice_text' => "Accorder davantage de prêts au secteur sans analyse supplémentaire", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les contrôles de crédit", 'is_correct' => false],
                            ['choice_text' => "Ignorer les impayés parce que les revenus d'intérêt existent encore", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse des impayés dans un secteur signale une détérioration potentielle du risque. La banque peut renforcer l'analyse et ajuster son exposition plutôt que d'augmenter automatiquement les financements.",
                    ],
                    [
                        'question' => "Une banque dispose de 15 M€ de liquidités et prévoit 18 M€ de sorties à court terme. Quelle situation doit-elle anticiper ?",
                        'choices' => [
                            ['choice_text' => "Un besoin de financement ou de mobilisation d'actifs d'environ 3 M€", 'is_correct' => true],
                            ['choice_text' => "Un excédent certain de 33 M€", 'is_correct' => false],
                            ['choice_text' => "Aucun besoin, car les sorties dépassent les liquidités", 'is_correct' => false],
                            ['choice_text' => "Un bénéfice automatique de 3 M€", 'is_correct' => false],
                        ],
                        'explanation' => "La différence entre les sorties prévues et les liquidités disponibles est de 18 - 15 = 3 M€. La banque doit identifier une source de financement ou une autre solution de liquidité pour couvrir l'écart.",
                    ],
                    [
                        'question' => "Une entreprise demande un prêt pour développer son activité, mais ses flux de trésorerie sont très instables. Quel point mérite particulièrement l'attention du prêteur ?",
                        'choices' => [
                            ['choice_text' => "La capacité de l'entreprise à générer suffisamment de trésorerie pour servir la dette", 'is_correct' => true],
                            ['choice_text' => "Uniquement la couleur du logo de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pages de son site web", 'is_correct' => false],
                            ['choice_text' => "La hausse automatique de son bénéfice après le prêt", 'is_correct' => false],
                        ],
                        'explanation' => "La capacité de remboursement dépend notamment des flux de trésorerie futurs. Des flux très instables rendent l'évaluation du risque plus délicate et peuvent nécessiter une analyse approfondie des hypothèses.",
                    ],
                    [
                        'question' => "Une banque réduit fortement ses délais de décision de crédit grâce à l'automatisation, mais les défauts commencent à augmenter. Quel enseignement est le plus pertinent ?",
                        'choices' => [
                            ['choice_text' => "La rapidité du processus doit être mise en balance avec la qualité de l'analyse du risque", 'is_correct' => true],
                            ['choice_text' => "L'automatisation est toujours mauvaise en finance", 'is_correct' => false],
                            ['choice_text' => "Les défauts n'ont jamais de lien avec le processus de crédit", 'is_correct' => false],
                            ['choice_text' => "La banque doit supprimer tous les contrôles", 'is_correct' => false],
                        ],
                        'explanation' => "L'automatisation peut améliorer l'efficacité, mais elle doit préserver la qualité des données, des modèles et des contrôles. Une hausse des défauts peut indiquer que la vitesse a été privilégiée au détriment de certains contrôles de risque.",
                    ],
                    [
                        'question' => "Une banque constate que ses intérêts reçus augmentent de 1,0 M€ à 1,3 M€, mais que les intérêts versés passent de 0,4 M€ à 0,9 M€. Quel est le nouveau solde net d'intérêt simplifié ?",
                        'choices' => [
                            ['choice_text' => "0,4 M€", 'is_correct' => true],
                            ['choice_text' => "0,9 M€", 'is_correct' => false],
                            ['choice_text' => "1,3 M€", 'is_correct' => false],
                            ['choice_text' => "2,2 M€", 'is_correct' => false],
                        ],
                        'explanation' => "Le nouveau solde net d'intérêt est 1,3 - 0,9 = 0,4 M€. Bien que les intérêts reçus aient augmenté, le coût des ressources a augmenté davantage en valeur absolue.",
                    ],
                    [
                        'question' => "Une banque souhaite réduire le risque lié à une panne informatique majeure. Quelle mesure est cohérente avec cet objectif ?",
                        'choices' => [
                            ['choice_text' => "Prévoir des sauvegardes, des procédures de reprise et un plan de continuité testé", 'is_correct' => true],
                            ['choice_text' => "Supprimer les sauvegardes pour réduire les coûts", 'is_correct' => false],
                            ['choice_text' => "Conserver toutes les opérations sur un seul système sans solution de secours", 'is_correct' => false],
                            ['choice_text' => "Attendre l'incident avant de définir une procédure", 'is_correct' => false],
                        ],
                        'explanation' => "Les sauvegardes, les solutions de reprise et la continuité d'activité permettent de réduire l'impact d'un incident informatique. Les dispositifs doivent être régulièrement testés pour vérifier leur efficacité.",
                    ],
                    [
                        'question' => "Un client dispose d'un revenu stable, de peu de dettes et d'une garantie sur le bien financé. Quelle conclusion est la plus correcte à ce stade ?",
                        'choices' => [
                            ['choice_text' => "Ces éléments sont favorables à l'analyse du dossier, mais la banque doit encore évaluer l'ensemble des risques", 'is_correct' => true],
                            ['choice_text' => "Le prêt doit obligatoirement être accordé", 'is_correct' => false],
                            ['choice_text' => "Le client ne présente aucun risque", 'is_correct' => false],
                            ['choice_text' => "La garantie rend toute analyse financière inutile", 'is_correct' => false],
                        ],
                        'explanation' => "Des revenus stables, un endettement limité et une garantie de qualité sont des éléments utiles. Ils ne suffisent toutefois pas à eux seuls à déterminer une décision de crédit, qui doit tenir compte de l'ensemble du dossier.",
                    ],
                    [
                        'question' => "Une banque dispose de nombreux dépôts à vue mais accorde une part importante de ses financements à long terme. Quel sujet doit-elle surveiller particulièrement ?",
                        'choices' => [
                            ['choice_text' => "Le risque de liquidité lié au décalage entre les ressources et les emplois", 'is_correct' => true],
                            ['choice_text' => "Le risque de change sur toutes les opérations domestiques", 'is_correct' => false],
                            ['choice_text' => "La suppression des capitaux propres", 'is_correct' => false],
                            ['choice_text' => "Le niveau des dividendes des ménages", 'is_correct' => false],
                        ],
                        'explanation' => "Des dépôts à vue peuvent être retirés ou utilisés à court terme, alors que les prêts longs génèrent des remboursements sur une période plus étendue. Ce décalage impose une gestion attentive de la liquidité.",
                    ],
                    [
                        'question' => "Une agence reçoit une alerte indiquant une tentative inhabituelle d'accès au compte d'un client. Quelle action de contrôle est la plus cohérente ?",
                        'choices' => [
                            ['choice_text' => "Vérifier l'événement selon la procédure de sécurité et prendre les mesures prévues pour protéger le compte", 'is_correct' => true],
                            ['choice_text' => "Ignorer l'alerte si le client n'a pas encore signalé une perte", 'is_correct' => false],
                            ['choice_text' => "Publier les données du client pour identifier l'auteur", 'is_correct' => false],
                            ['choice_text' => "Désactiver tous les contrôles futurs", 'is_correct' => false],
                        ],
                        'explanation' => "Une tentative inhabituelle doit être traitée selon les procédures de sécurité afin de prévenir une éventuelle compromission. Une réaction rapide peut limiter les pertes ou les accès non autorisés.",
                    ],
                    [
                        'question' => "Une banque veut augmenter ses crédits sans dégrader la qualité de son portefeuille. Quelle approche est la plus cohérente ?",
                        'choices' => [
                            ['choice_text' => "Croître en conservant des critères de crédit, un suivi post-octroi et une diversification appropriés", 'is_correct' => true],
                            ['choice_text' => "Accorder les crédits à toute personne qui en fait la demande", 'is_correct' => false],
                            ['choice_text' => "Supprimer les limites par secteur", 'is_correct' => false],
                            ['choice_text' => "Réduire toutes les exigences de contrôle pour aller plus vite", 'is_correct' => false],
                        ],
                        'explanation' => "La croissance saine du crédit repose sur une sélection cohérente des emprunteurs, une surveillance du portefeuille et une gestion des concentrations et des risques. Une croissance rapide sans contrôle peut dégrader la qualité des actifs.",
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
