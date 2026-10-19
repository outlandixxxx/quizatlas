<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class InvestmentAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'investment-analysis')->firstOrFail();

        $quizSettings = [
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
                'title' => 'Introduction à l’analyse des investissements',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’analyse d’un investissement ?',
                        'explanation' => 'On analyse un placement pour savoir ce qu’il vaut, ce qu’il peut rapporter et ce qu’on risque. Aucune analyse ne prédit un prix exact ni ne supprime les fluctuations.',
                        'choices' => [
                            ['choice_text' => 'Évaluer sa valeur, son rendement potentiel et ses risques', 'is_correct' => true],
                            ['choice_text' => 'Prévoir avec précision le prix qu’il aura dans un an', 'is_correct' => false],
                            ['choice_text' => 'Repérer le placement qui coûte le moins cher à l’achat', 'is_correct' => false],
                            ['choice_text' => 'Réduire à zéro les fluctuations du marché sur ce titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche principalement à déterminer l’analyse fondamentale ?',
                        'explanation' => 'L’analyse fondamentale part des chiffres de l’entreprise et de son environnement économique pour estimer ce que vaut vraiment l’actif. Lire des graphiques de prix, c’est l’analyse technique.',
                        'choices' => [
                            ['choice_text' => 'Le prix probable d’un actif d’après l’historique de son cours', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité d’un actif en fonction du volume échangé chaque jour', 'is_correct' => false],
                            ['choice_text' => 'La valeur intrinsèque d’un actif à partir de ses fondamentaux', 'is_correct' => true],
                            ['choice_text' => 'Le moment idéal pour acheter d’après les graphiques de prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement d’investissement ?',
                        'explanation' => 'Le rendement, c’est ce qu’un placement a rapporté (ou fait perdre) sur une période donnée.',
                        'choices' => [
                            ['choice_text' => 'Le montant que l’on a investi au départ dans l’opération', 'is_correct' => false],
                            ['choice_text' => 'Le prix moyen payé pour chaque titre acheté sur la période', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres détenus à la fin de la période', 'is_correct' => false],
                            ['choice_text' => 'Le gain ou la perte généré par un investissement sur une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le risque en finance ?',
                        'explanation' => 'En finance, le risque, c’est de ne pas savoir à l’avance ce que le placement donnera : le résultat peut être meilleur ou moins bon que prévu.',
                        'choices' => [
                            ['choice_text' => 'La perte certaine d’une partie du capital investi au moment de la vente finale', 'is_correct' => false],
                            ['choice_text' => 'L’incertitude concernant les résultats futurs d’un investissement', 'is_correct' => true],
                            ['choice_text' => 'L’écart entre le prix d’achat et le prix de vente d’un titre', 'is_correct' => false],
                            ['choice_text' => 'Le coût total des frais payés pour acheter le titre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira estime qu’une action vaut 120 MAD alors qu’elle cote 100 MAD. Que peut-elle en conclure ?',
                        'explanation' => 'Si la valeur estimée dépasse le prix de marché, l’action paraît sous-évaluée ; dans l’autre sens, elle paraîtrait surévaluée. Ce n’est qu’une estimation, pas une certitude.',
                        'choices' => [
                            ['choice_text' => 'Que l’action semble surévaluée par le marché', 'is_correct' => false],
                            ['choice_text' => 'Que le cours atteindra 120 MAD d’ici un an', 'is_correct' => false],
                            ['choice_text' => 'Que l’entreprise va distribuer un dividende élevé', 'is_correct' => false],
                            ['choice_text' => 'Que l’action semble sous-évaluée par le marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une action représente généralement :',
                        'explanation' => 'Acheter une action, c’est devenir propriétaire d’une petite partie de l’entreprise. Avec une créance ou un prêt, on prête de l’argent sans être propriétaire.',
                        'choices' => [
                            ['choice_text' => 'Une participation dans le capital d’une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une créance sur une entreprise qui doit être remboursée', 'is_correct' => false],
                            ['choice_text' => 'Un titre émis par l’État pour financer ses dépenses', 'is_correct' => false],
                            ['choice_text' => 'Un prêt consenti par une banque à un particulier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef achète une obligation émise par une entreprise. Qu’a-t-il acheté ?',
                        'explanation' => 'Avec une obligation, on prête de l’argent à l’émetteur : il paie des intérêts et rembourse à l’échéance. Ce n’est pas une part de propriété, contrairement à l’action.',
                        'choices' => [
                            ['choice_text' => 'Une part de propriété qui lui donne droit de vote', 'is_correct' => false],
                            ['choice_text' => 'Un titre de créance : l’entreprise lui doit de l’argent', 'is_correct' => true],
                            ['choice_text' => 'Une action dont le dividende est fixé à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Une option d’achat sur les actions de l’entreprise à un prix fixé d’avance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira répartit son épargne entre actions, obligations et immobilier. Quel est son but principal ?',
                        'explanation' => 'En combinant des actifs différents, on limite l’effet d’une mauvaise surprise sur l’un d’eux. Mais la diversification ne supprime pas le risque de marché et ne promet aucun gain.',
                        'choices' => [
                            ['choice_text' => 'Réduire certains risques en combinant différents actifs', 'is_correct' => true],
                            ['choice_text' => 'Être sûre d’obtenir un rendement positif chaque année', 'is_correct' => false],
                            ['choice_text' => 'Éliminer le risque de marché qui touche l’ensemble des actifs', 'is_correct' => false],
                            ['choice_text' => 'Payer moins d’impôts en répartissant ses placements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille d’investissement ?',
                        'explanation' => 'Le portefeuille, c’est l’ensemble de ce que l’investisseur détient : actions, obligations, immobilier, etc.',
                        'choices' => [
                            ['choice_text' => 'Un ensemble d’actifs détenus par un investisseur', 'is_correct' => true],
                            ['choice_text' => 'Un document qui présente les comptes d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une liste des ordres d’achat et de vente passés en Bourse', 'is_correct' => false],
                            ['choice_text' => 'Le total des dettes contractées pour investir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim voit un placement qui promet 15 % par an. Que doit-il garder en tête ?',
                        'explanation' => 'Un gain potentiel élevé se paie en général par un risque plus grand : c’est pourquoi on regarde toujours les deux ensemble.',
                        'choices' => [
                            ['choice_text' => 'Qu’un rendement élevé prouve que l’entreprise est solide', 'is_correct' => false],
                            ['choice_text' => 'Que le risque ne compte que pour les placements à court terme', 'is_correct' => false],
                            ['choice_text' => 'Que le rendement d’un placement baisse quand son risque monte', 'is_correct' => false],
                            ['choice_text' => 'Qu’un rendement élevé s’accompagne souvent de plus de risque', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse fondamentale d’une entreprise',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Parmi ces éléments, lesquels sont des fondamentaux d’une entreprise ?',
                        'explanation' => 'Les fondamentaux sont les chiffres qui disent comment va vraiment l’entreprise : ce qu’elle vend, ce qu’elle gagne, ce qu’elle encaisse et ce qu’elle doit. Le cours, lui, vient du marché.',
                        'choices' => [
                            ['choice_text' => 'Ses revenus, ses bénéfices, ses flux de trésorerie et ses dettes', 'is_correct' => true],
                            ['choice_text' => 'Le cours de son action et le volume échangé en Bourse', 'is_correct' => false],
                            ['choice_text' => 'Les prévisions des analystes de Bourse et l’humeur des investisseurs du moment', 'is_correct' => false],
                            ['choice_text' => 'Le taux directeur de la banque centrale et l’inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le chiffre d’affaires ?',
                        'explanation' => 'Le chiffre d’affaires, ce sont les ventes de l’entreprise sur la période, avant toute dépense. Il ne dit rien du bénéfice ni de la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice que l’entreprise réalise après paiement des impôts', 'is_correct' => false],
                            ['choice_text' => 'L’argent réellement disponible sur ses comptes en banque', 'is_correct' => false],
                            ['choice_text' => 'Les revenus générés par les ventes de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le total de ce qu’elle doit à ses banques et fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le bénéfice net d’une entreprise ?',
                        'explanation' => 'Bénéfice net = ventes – charges – impôts. C’est la dernière ligne du compte de résultat, d’où son nom anglais « bottom line ».',
                        'choices' => [
                            ['choice_text' => 'Le total des ventes de l’année avant déduction des charges', 'is_correct' => false],
                            ['choice_text' => 'Les ventes moins le seul coût des marchandises vendues', 'is_correct' => false],
                            ['choice_text' => 'La valeur de ce que l’entreprise possède moins ses dettes', 'is_correct' => false],
                            ['choice_text' => 'Ce qui reste des ventes une fois les charges et les impôts payés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Samira compare le chiffre d’affaires d’une entreprise sur cinq ans. Que cherche-t-elle ?',
                        'explanation' => 'Un seul chiffre ne dit pas grand-chose ; sur plusieurs années, on voit si les ventes montent, stagnent ou reculent. Cela n’annonce pas l’avenir pour autant.',
                        'choices' => [
                            ['choice_text' => 'La preuve que l’entreprise continuera de croître l’an prochain', 'is_correct' => false],
                            ['choice_text' => 'La tendance : croissance ou ralentissement de l’activité', 'is_correct' => true],
                            ['choice_text' => 'Le montant exact des bénéfices des années à venir', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de risque de l’ensemble du marché boursier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le magasin de Youssef vend pour 200 000 MAD et garde 20 000 MAD de bénéfice. Que mesure le rapport 20 000 / 200 000 = 10 % ?',
                        'explanation' => '10 % de marge : sur 100 MAD de ventes, 10 MAD restent en bénéfice. Plus la marge est haute, plus l’entreprise garde de chaque vente.',
                        'choices' => [
                            ['choice_text' => 'Son taux d’endettement : la part des dettes dans ses ressources', 'is_correct' => false],
                            ['choice_text' => 'Son taux de croissance : l’évolution des ventes d’une année à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Sa marge bénéficiaire : la part des ventes qui reste en bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Son rendement en dividende : le dividende rapporté au cours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut-on lire dans le bilan d’une entreprise ?',
                        'explanation' => 'Le bilan est la photo du patrimoine à une date : d’un côté ce que l’entreprise possède (actifs), de l’autre ce qu’elle doit et ses capitaux propres. Les ventes et charges sont dans le compte de résultat.',
                        'choices' => [
                            ['choice_text' => 'Ses ventes, ses charges et son résultat net détaillés sur l’année écoulée', 'is_correct' => false],
                            ['choice_text' => 'Ce qu’elle possède et ce qu’elle doit, donc sa structure financière', 'is_correct' => true],
                            ['choice_text' => 'Le cours que son action atteindra le mois prochain', 'is_correct' => false],
                            ['choice_text' => 'Les dividendes qu’elle prévoit de verser à ses actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signaler une dette très élevée chez une entreprise ?',
                        'explanation' => 'Plus on doit d’argent, plus les intérêts pèsent. Si les ventes reculent, l’entreprise a du mal à suivre ses remboursements.',
                        'choices' => [
                            ['choice_text' => 'Une charge d’intérêts plus faible que chez ses concurrents', 'is_correct' => false],
                            ['choice_text' => 'Un bénéfice protégé contre un ralentissement de l’activité', 'is_correct' => false],
                            ['choice_text' => 'Un besoin réduit de recourir aux banques pour se financer', 'is_correct' => false],
                            ['choice_text' => 'Une fragilité plus grande si les revenus de l’entreprise baissent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les flux de trésorerie dans l’analyse d’une entreprise ?',
                        'explanation' => 'Un bénéfice est un chiffre comptable ; les flux de trésorerie montrent l’argent réellement encaissé et décaissé. Une entreprise peut être bénéficiaire sur le papier et manquer de cash.',
                        'choices' => [
                            ['choice_text' => 'À remplacer les états comptables dans l’analyse de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À mesurer le montant total des dettes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À voir l’argent qui entre et sort vraiment de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'À calculer le bénéfice net sous une autre présentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un avantage concurrentiel pour une entreprise ?',
                        'explanation' => 'C’est ce qui rend l’entreprise difficile à copier : une marque forte, des coûts plus bas, une technologie. Elle se démarque et défend sa place.',
                        'choices' => [
                            ['choice_text' => 'Une aide financière versée par l’État à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Ce qui lui permet de se démarquer de ses concurrents', 'is_correct' => true],
                            ['choice_text' => 'Un accord entre concurrents pour se répartir les clients', 'is_correct' => false],
                            ['choice_text' => 'Une dette contractée pour financer sa croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un seul indicateur ne suffit-il pas pour juger une entreprise ?',
                        'explanation' => 'Le chiffre d’affaires ne dit rien de la dette ; le bénéfice ne dit rien de la trésorerie. Il faut croiser plusieurs indicateurs pour avoir une vue d’ensemble.',
                        'choices' => [
                            ['choice_text' => 'Parce que les indicateurs financiers sont souvent faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque indicateur n’éclaire qu’un aspect de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce que seul le cours de Bourse donne la vraie image', 'is_correct' => false],
                            ['choice_text' => 'Parce que la loi impose aux sociétés d’en publier au moins cinq par an', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ratios financiers et indicateurs d’investissement',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que mesure généralement le ratio P/E ?',
                        'explanation' => 'Le P/E divise le prix de l’action par le bénéfice par action : il montre combien les investisseurs paient pour 1 MAD de bénéfice.',
                        'choices' => [
                            ['choice_text' => 'Le prix d’une action par rapport au bénéfice par action', 'is_correct' => true],
                            ['choice_text' => 'Le prix d’une action par rapport à sa valeur comptable par action', 'is_correct' => false],
                            ['choice_text' => 'Le dividende versé par action par rapport à son prix', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices de l’entreprise par rapport à ses dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que compare le ratio P/B ?',
                        'explanation' => 'Le P/B compare ce que le marché paie pour les capitaux propres à leur valeur inscrite dans les comptes.',
                        'choices' => [
                            ['choice_text' => 'Le prix d’une action au bénéfice qu’elle rapporte par an', 'is_correct' => false],
                            ['choice_text' => 'La valeur de marché des dettes à celle des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'La valeur de marché des capitaux propres à leur valeur comptable', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires d’une année à celui de l’année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi correspond le ratio P/S ?',
                        'explanation' => 'P/S, c’est le prix divisé par les ventes par action. Pratique pour comparer des entreprises qui ne gagnent pas encore d’argent mais qui vendent beaucoup.',
                        'choices' => [
                            ['choice_text' => 'Le prix de l’action rapporté au bénéfice de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le prix de l’action rapporté à la valeur de ses actifs', 'is_correct' => false],
                            ['choice_text' => 'Le prix de l’action rapporté aux ventes par action', 'is_correct' => true],
                            ['choice_text' => 'La dette rapportée aux capitaux propres de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le ROE d’une entreprise est de 15 %. Que cela veut-il dire ?',
                        'explanation' => 'ROE = bénéfice net / capitaux propres. À 15 %, chaque tranche de 100 MAD apportée par les actionnaires a produit 15 MAD de bénéfice sur l’année.',
                        'choices' => [
                            ['choice_text' => 'Elle gagne 15 MAD de bénéfice pour 100 MAD de capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Elle dégage 15 MAD de bénéfice pour chaque 100 MAD de ventes réalisées', 'is_correct' => false],
                            ['choice_text' => 'Elle verse 15 MAD de dividende pour 100 MAD de bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle doit 15 MAD de dettes pour 100 MAD de capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement le ratio de liquidité générale ?',
                        'explanation' => 'La liquidité générale divise les actifs courants par les dettes à court terme : elle montre si l’entreprise peut payer ce qu’elle doit à court terme.',
                        'choices' => [
                            ['choice_text' => 'La capacité à rembourser les dettes à long terme avec les bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'La part des actifs de l’entreprise financée par des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'La rapidité avec laquelle l’entreprise écoule ses stocks de marchandises', 'is_correct' => false],
                            ['choice_text' => 'La capacité à couvrir les obligations à court terme avec les actifs courants', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour interpréter un ratio, avec quoi vaut-il mieux le comparer ?',
                        'explanation' => 'Chaque secteur a ses habitudes : les banques sont très endettées, les magasins ont beaucoup de stocks. On compare donc des entreprises qui se ressemblent.',
                        'choices' => [
                            ['choice_text' => 'Avec celui d’une entreprise de même taille mais d’un autre secteur', 'is_correct' => false],
                            ['choice_text' => 'Avec celui d’entreprises du même secteur d’activité', 'is_correct' => true],
                            ['choice_text' => 'Avec le taux directeur fixé par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Avec le cours de Bourse de l’entreprise le mois précédent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action a un P/E de 40, bien au-dessus de la moyenne. Que peut-on en déduire ?',
                        'explanation' => 'Un P/E élevé veut souvent dire que le marché paie cher aujourd’hui des bénéfices qu’il espère voir grimper. Ça ne prouve ni que l’action est chère à tort, ni qu’elle est une bonne affaire.',
                        'choices' => [
                            ['choice_text' => 'Que l’entreprise est sûrement sous-évaluée par le marché', 'is_correct' => false],
                            ['choice_text' => 'Que l’entreprise a remboursé l’ensemble de ses dettes', 'is_correct' => false],
                            ['choice_text' => 'Que l’entreprise verse un dividende très élevé à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Que les investisseurs anticipent de forts bénéfices à l’avenir', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim pense qu’un P/E élevé est forcément mauvais signe. Pourquoi a-t-il tort ?',
                        'explanation' => 'Un ratio élevé peut simplement vouloir dire que les investisseurs misent sur la croissance. Il faut regarder pourquoi, et comparer avec le secteur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un ratio élevé veut dire que l’entreprise n’a pas de dettes à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ratio élevé prouve que le cours va continuer de monter', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un ratio élevé peut refléter de bonnes perspectives de croissance', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un ratio élevé signifie que l’entreprise verse peu d’impôts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire BPA ?',
                        'explanation' => 'Le BPA s’obtient en divisant le bénéfice net par le nombre d’actions. C’est le chiffre placé au dénominateur du P/E.',
                        'choices' => [
                            ['choice_text' => 'Dividende par action : la somme versée divisée par le nombre d’actions', 'is_correct' => false],
                            ['choice_text' => 'Bénéfice par action : le bénéfice net divisé par le nombre d’actions', 'is_correct' => true],
                            ['choice_text' => 'Valeur comptable par action : capitaux propres ÷ nombre d’actions', 'is_correct' => false],
                            ['choice_text' => 'Bénéfice avant impôts : le résultat avant paiement de l’impôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui oblige à rester prudent quand on lit un ratio financier ?',
                        'explanation' => 'Un même ratio n’a pas la même signification dans une banque et dans un supermarché, et deux entreprises peuvent compter différemment. Un ratio seul ne tranche rien.',
                        'choices' => [
                            ['choice_text' => 'Il est recalculé chaque jour par les autorités boursières', 'is_correct' => false],
                            ['choice_text' => 'Il est exprimé dans une monnaie différente pour chaque entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il varie selon le secteur, les méthodes comptables et la conjoncture', 'is_correct' => true],
                            ['choice_text' => 'Il ne peut être calculé que pour les entreprises qui versent un dividende', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque et rendement des investissements',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Parmi ces placements, lequel est en général le moins risqué ?',
                        'explanation' => 'L’État emprunte à un coût bas car le risque qu’il ne rembourse pas est faible, d’où un rendement modeste. Les jeunes entreprises et les monnaies numériques peuvent rapporter plus, mais aussi faire perdre beaucoup.',
                        'choices' => [
                            ['choice_text' => 'Une action d’une jeune entreprise technologique', 'is_correct' => false],
                            ['choice_text' => 'Un investissement dans une monnaie numérique récente', 'is_correct' => false],
                            ['choice_text' => 'Un bon du Trésor émis par l’État, détenu jusqu’à l’échéance', 'is_correct' => true],
                            ['choice_text' => 'Une action d’une société pétrolière très endettée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la volatilité ?',
                        'explanation' => 'La volatilité indique à quel point les rendements s’écartent de leur moyenne : plus ils varient, plus l’actif est volatil.',
                        'choices' => [
                            ['choice_text' => 'Le rendement moyen obtenu sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Le montant des pertes subies lors du pire mois', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres échangés pendant une séance', 'is_correct' => false],
                            ['choice_text' => 'La dispersion ou variabilité des rendements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque systématique ?',
                        'explanation' => 'Le risque systématique touche tout le marché (récession, hausse des taux…). On ne peut pas l’éliminer en diversifiant.',
                        'choices' => [
                            ['choice_text' => 'Un risque lié à la gestion interne d’une seule entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un risque que l’on peut annuler en détenant beaucoup d’actions', 'is_correct' => false],
                            ['choice_text' => 'Un risque lié à une erreur de méthode dans la comptabilité', 'is_correct' => false],
                            ['choice_text' => 'Un risque lié aux facteurs affectant largement le marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque spécifique ?',
                        'explanation' => 'Le risque spécifique ne concerne qu’une entreprise ou un actif, par exemple un scandale ou un produit raté. La diversification permet de le réduire.',
                        'choices' => [
                            ['choice_text' => 'Un risque qui touche l’ensemble des marchés financiers', 'is_correct' => false],
                            ['choice_text' => 'Un risque propre à une entreprise ou à un actif particulier', 'is_correct' => true],
                            ['choice_text' => 'Le risque que les taux d’intérêt montent dans l’économie', 'is_correct' => false],
                            ['choice_text' => 'L’écart de rendement entre un actif risqué et un actif sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim détient les actions de 25 entreprises de secteurs différents. Quel risque a-t-il surtout réduit ?',
                        'explanation' => 'Quand on détient beaucoup de titres différents, la mauvaise nouvelle d’une seule entreprise pèse peu. C’est le risque spécifique qui diminue ; le risque de marché, lui, reste.',
                        'choices' => [
                            ['choice_text' => 'Le risque de marché, lié à la conjoncture économique', 'is_correct' => false],
                            ['choice_text' => 'Le risque d’inflation, qui réduit le pouvoir d’achat de ses gains futurs', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change sur ses placements en devises', 'is_correct' => false],
                            ['choice_text' => 'Le risque propre à chaque entreprise (risque spécifique)', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une volatilité élevée ?',
                        'explanation' => 'Quand la volatilité est élevée, les rendements bougent beaucoup : de grosses hausses possibles, mais aussi de grosses baisses.',
                        'choices' => [
                            ['choice_text' => 'Les rendements restent proches de leur moyenne', 'is_correct' => false],
                            ['choice_text' => 'Les rendements ont tendance à fluctuer davantage', 'is_correct' => true],
                            ['choice_text' => 'L’actif est plus facile à revendre rapidement', 'is_correct' => false],
                            ['choice_text' => 'Le prix de l’actif a augmenté depuis le jour où il a été acheté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Connaître sa tolérance au risque permet de :',
                        'explanation' => 'Tout le monde ne réagit pas pareil à une perte de 20 %. Connaître sa tolérance au risque, c’est choisir des placements que l’on peut garder sans paniquer.',
                        'choices' => [
                            ['choice_text' => 'Obtenir un rendement fixé à l’avance sur ses placements', 'is_correct' => false],
                            ['choice_text' => 'Choisir le placement qui a eu la meilleure performance l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Choisir des placements dont les pertes possibles restent supportables', 'is_correct' => true],
                            ['choice_text' => 'Éviter de payer des frais lors de l’achat des titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif avec un rendement espéré élevé mais une forte volatilité peut :',
                        'explanation' => 'Un rendement espéré élevé et une forte volatilité vont de pair : on peut gagner gros, mais le résultat est bien plus incertain.',
                        'choices' => [
                            ['choice_text' => 'Présenter un potentiel attractif mais aussi une incertitude plus importante', 'is_correct' => true],
                            ['choice_text' => 'Offrir des gains réguliers d’une année à l’autre sans écart important', 'is_correct' => false],
                            ['choice_text' => 'Se comporter comme un placement sans risque pour un investisseur prudent', 'is_correct' => false],
                            ['choice_text' => 'Convenir aussi bien à un épargnant prudent qu’à un investisseur offensif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds a gagné 20 % l’an dernier. Que peut-on en conclure pour cette année ?',
                        'explanation' => 'Un bon résultat passé peut venir de la chance ou d’un marché porteur. Il ne dit pas ce qui arrivera ensuite : c’est écrit sur toutes les publicités de fonds.',
                        'choices' => [
                            ['choice_text' => 'Rien de sûr : les performances passées ne garantissent pas les suivantes', 'is_correct' => true],
                            ['choice_text' => 'Qu’il gagnera à peu près autant, car les marchés se répètent', 'is_correct' => false],
                            ['choice_text' => 'Qu’il perdra, car une bonne année est suivie d’une mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Que son gérant est forcément plus compétent que ceux de ses concurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement un investissement « défensif » ?',
                        'explanation' => 'Les valeurs défensives (alimentation, santé, services publics) résistent mieux quand la Bourse recule, mais elles montent aussi moins vite dans les périodes fastes.',
                        'choices' => [
                            ['choice_text' => 'Un placement qui rapporte plus que le marché quand il monte', 'is_correct' => false],
                            ['choice_text' => 'Un placement réservé aux professionnels de la finance et aux grandes banques', 'is_correct' => false],
                            ['choice_text' => 'Un placement choisi parce qu’il varie moins que le reste du marché', 'is_correct' => true],
                            ['choice_text' => 'Un placement dont la valeur ne peut pas baisser', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse des actions',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que représente le cours d’une action ?',
                        'explanation' => 'Le cours se forme par l’offre et la demande : c’est le prix de la dernière transaction. Il bouge toute la journée, alors que la valeur comptable ne change qu’à chaque bilan.',
                        'choices' => [
                            ['choice_text' => 'Sa valeur comptable, calculée à partir du bilan de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice annuel de l’entreprise divisé par ses actions', 'is_correct' => false],
                            ['choice_text' => 'Le dividende que l’entreprise a prévu de verser à ses actionnaires l’an prochain', 'is_correct' => false],
                            ['choice_text' => 'Le prix auquel elle s’échange à un instant donné sur le marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un dividende ?',
                        'explanation' => 'Quand une entreprise gagne de l’argent, elle peut en redistribuer une partie à ses actionnaires : c’est le dividende. Il n’est pas obligatoire, l’entreprise peut le réduire ou le supprimer.',
                        'choices' => [
                            ['choice_text' => 'Une part du bénéfice que l’entreprise verse à ses actionnaires', 'is_correct' => true],
                            ['choice_text' => 'Un intérêt que l’entreprise verse aux porteurs de ses obligations', 'is_correct' => false],
                            ['choice_text' => 'Un impôt prélevé sur la plus-value réalisée à la revente', 'is_correct' => false],
                            ['choice_text' => 'Une commission payée à l’intermédiaire lors d’une opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une action de croissance ?',
                        'explanation' => 'Une action de croissance, c’est celle dont on attend que l’entreprise grandisse vite. Elle verse souvent peu de dividende.',
                        'choices' => [
                            ['choice_text' => 'Une action qui verse un dividende élevé et stable chaque année', 'is_correct' => false],
                            ['choice_text' => 'Une action cotée à un prix inférieur à sa valeur comptable', 'is_correct' => false],
                            ['choice_text' => 'Une action associée à des attentes importantes de croissance future', 'is_correct' => true],
                            ['choice_text' => 'Une action dont le prix a augmenté ces derniers mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une action de valeur ?',
                        'explanation' => 'Une action de valeur se traite à un prix plutôt bas par rapport à ses bénéfices ou à ses actifs, d’où le nom anglais « value ». À l’inverse, l’action de croissance se paie cher pour ses promesses.',
                        'choices' => [
                            ['choice_text' => 'Une action dont le prix a le plus augmenté ces dernières années', 'is_correct' => false],
                            ['choice_text' => 'Une action qui paraît bon marché par rapport à ce que vaut l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une action dont le prix nominal est le plus élevé du marché', 'is_correct' => false],
                            ['choice_text' => 'Une action d’une entreprise qui réinvestit ses bénéfices pour grandir vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a un bénéfice net de 6 millions MAD et 2 millions d’actions. Quel est son bénéfice par action ?',
                        'explanation' => 'BPA = bénéfice net ÷ nombre d’actions = 6 000 000 ÷ 2 000 000 = 3 MAD par action.',
                        'choices' => [
                            ['choice_text' => '2 MAD', 'is_correct' => false],
                            ['choice_text' => '3 MAD', 'is_correct' => true],
                            ['choice_text' => '6 MAD', 'is_correct' => false],
                            ['choice_text' => '12 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les bénéfices d’une entreprise progressent de 8 % par an depuis six ans. Que cela suggère-t-il ?',
                        'explanation' => 'Des bénéfices qui montent année après année montrent une activité qui tient la route. Ça ne garantit ni le cours, ni l’absence de dette ou de concurrence.',
                        'choices' => [
                            ['choice_text' => 'Que son activité est solide, ce qui est plutôt bon signe', 'is_correct' => true],
                            ['choice_text' => 'Que le cours de l’action montera au même rythme', 'is_correct' => false],
                            ['choice_text' => 'Que l’entreprise n’aura pas de difficultés financières dans les années à venir', 'is_correct' => false],
                            ['choice_text' => 'Que l’entreprise est protégée contre la concurrence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi regarder le secteur avant d’acheter l’action d’une entreprise ?',
                        'explanation' => 'Une bonne entreprise dans un secteur en déclin a du mal à progresser, et l’inverse est vrai. Le secteur donne le décor : demande, concurrents, réglementation.',
                        'choices' => [
                            ['choice_text' => 'Pour remplacer l’étude de ses états financiers par celle du secteur', 'is_correct' => false],
                            ['choice_text' => 'Pour comprendre la concurrence et le contexte où elle évolue', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître à l’avance le dividende qu’elle versera', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer le risque propre à cette entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les clients d’une marque de biscuits l’achètent même quand elle coûte plus cher. Que gagne cette entreprise ?',
                        'explanation' => 'Une marque connue crée de la fidélité : les clients reviennent, parfois même à prix plus élevé. C’est un avantage concurrentiel, mais il ne protège ni des crises ni des nouveaux entrants.',
                        'choices' => [
                            ['choice_text' => 'La disparition de ses concurrents sur le marché où elle vend', 'is_correct' => false],
                            ['choice_text' => 'Des ventes qui ne peuvent plus baisser en cas de crise', 'is_correct' => false],
                            ['choice_text' => 'Un avantage sur ses concurrents, car la marque fidélise les clients', 'is_correct' => true],
                            ['choice_text' => 'Un cours de Bourse protégé contre les baisses du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie qu’une action est sous-évaluée selon une analyse fondamentale ?',
                        'explanation' => 'Si l’on estime que l’action vaut plus que son prix actuel, elle paraît sous-évaluée : elle semble bon marché.',
                        'choices' => [
                            ['choice_text' => 'Son prix de marché dépasse son estimation de valeur', 'is_correct' => false],
                            ['choice_text' => 'Son estimation de valeur est supérieure à son prix de marché', 'is_correct' => true],
                            ['choice_text' => 'Son prix de marché a baissé plus vite que celui du secteur', 'is_correct' => false],
                            ['choice_text' => 'Son bénéfice par action est inférieur à celui de l’an dernier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira valorise une action avec la méthode des flux actualisés, puis avec le P/E. Quel est l’intérêt de combiner les deux ?',
                        'explanation' => 'Chaque méthode a ses faiblesses et repose sur des hypothèses. Si deux ou trois méthodes donnent des valeurs voisines, on a plus de raisons d’y croire.',
                        'choices' => [
                            ['choice_text' => 'Obtenir le prix exact que l’action aura dans un an', 'is_correct' => false],
                            ['choice_text' => 'Se passer des hypothèses sur la croissance et sur les taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Déterminer à l’avance le dividende de l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Comparer les résultats pour ne pas dépendre d’une seule méthode', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse des obligations',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coupon obligataire ?',
                        'explanation' => 'Le coupon, c’est l’intérêt que l’émetteur verse au porteur, souvent chaque année, selon les conditions fixées à l’émission.',
                        'choices' => [
                            ['choice_text' => 'Le paiement d’intérêt prévu par les conditions de l’obligation', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’intérêt payé par les banques sur les dépôts', 'is_correct' => false],
                            ['choice_text' => 'Le remboursement du capital prêté à la date d’échéance', 'is_correct' => false],
                            ['choice_text' => 'La commission versée à la banque qui place l’émission auprès des investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur nominale d’une obligation ?',
                        'explanation' => 'Le nominal sert de base au calcul des coupons et au remboursement final. Le prix de marché, lui, peut être différent.',
                        'choices' => [
                            ['choice_text' => 'Le prix auquel l’obligation s’échange aujourd’hui sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Le total des coupons que l’investisseur recevra jusqu’à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Le rendement annuel que l’investisseur obtient en la conservant', 'is_correct' => false],
                            ['choice_text' => 'Le montant de référence prévu par les conditions de l’obligation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Les taux d’intérêt du marché montent. Qu’arrive-t-il au prix d’une obligation déjà émise à taux fixe ?',
                        'explanation' => 'Si une obligation à 3 % côtoie de nouvelles obligations à 5 %, personne ne veut payer le même prix pour la moins généreuse. Son prix baisse jusqu’à ce que son rendement rejoigne celui du marché.',
                        'choices' => [
                            ['choice_text' => 'Il monte, car son coupon paraît plus généreux qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Il baisse, car les nouvelles obligations rapportent davantage', 'is_correct' => true],
                            ['choice_text' => 'Il ne change pas, car son coupon est fixé à l’avance dans le contrat', 'is_correct' => false],
                            ['choice_text' => 'Il s’annule, car l’émetteur arrête de payer ses coupons', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de crédit d’une obligation ?',
                        'explanation' => 'Le risque de crédit, c’est que l’émetteur ne paie pas ses coupons ou ne rembourse pas le capital.',
                        'choices' => [
                            ['choice_text' => 'Le risque que les taux montent et fassent baisser le prix', 'is_correct' => false],
                            ['choice_text' => 'Le risque que l’émetteur ne respecte pas ses obligations de paiement', 'is_correct' => true],
                            ['choice_text' => 'Le risque de ne pas retrouver d’acheteur au moment de revendre', 'is_correct' => false],
                            ['choice_text' => 'Le risque que l’inflation réduise la valeur des coupons reçus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d’entreprise rapporte 6 % alors qu’un bon du Trésor rapporte 3 %. Comment l’expliquer ?',
                        'explanation' => 'L’entreprise peut faire défaut plus facilement que l’État. Pour accepter ce risque, l’investisseur demande un rendement plus élevé : c’est la prime de risque.',
                        'choices' => [
                            ['choice_text' => 'Par des frais d’émission et de gestion plus élevés que ceux de l’État', 'is_correct' => false],
                            ['choice_text' => 'Par la durée plus courte de l’obligation d’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Par une prime qui compense un risque de crédit plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Par un nominal plus faible que celui du bon du Trésor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la maturité d’une obligation ?',
                        'explanation' => 'La maturité est la date d’échéance : l’émetteur doit alors rembourser le capital prêté.',
                        'choices' => [
                            ['choice_text' => 'La date à laquelle l’émetteur verse le premier coupon', 'is_correct' => false],
                            ['choice_text' => 'La date à laquelle le principal doit normalement être remboursé', 'is_correct' => true],
                            ['choice_text' => 'Le moment où l’obligation atteint son prix de marché le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’années pendant lesquelles l’émetteur est coté en Bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement à l’échéance ?',
                        'explanation' => 'Le rendement à l’échéance prend en compte le prix payé, les coupons reçus et le remboursement final. C’est le rendement annuel obtenu en gardant l’obligation jusqu’au bout, si l’émetteur paie tout.',
                        'choices' => [
                            ['choice_text' => 'Le rendement annuel obtenu si on garde l’obligation jusqu’au bout', 'is_correct' => true],
                            ['choice_text' => 'Le coupon annuel rapporté à la valeur nominale de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'Le gain réalisé si on revend l’obligation le jour même', 'is_correct' => false],
                            ['choice_text' => 'Le total des coupons versés entre l’émission et l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux obligations ont le même coupon : l’une arrive à échéance dans 2 ans, l’autre dans 20 ans. Si les taux montent, laquelle voit son prix le plus baisser ?',
                        'explanation' => 'Plus l’échéance est lointaine, plus on reste longtemps bloqué à un taux devenu faible, donc plus le prix réagit. L’obligation à 2 ans sera remboursée bientôt et pourra être replacée aux nouveaux taux.',
                        'choices' => [
                            ['choice_text' => 'Celle à 2 ans, car son remboursement est plus proche', 'is_correct' => false],
                            ['choice_text' => 'Les deux de la même façon, puisque leur coupon est identique', 'is_correct' => false],
                            ['choice_text' => 'Celle à 20 ans, plus sensible aux variations de taux', 'is_correct' => true],
                            ['choice_text' => 'Ni l’une ni l’autre, car un coupon fixe protège le prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’indique la note donnée à un émetteur par une agence de notation ?',
                        'explanation' => 'Une note comme AAA ou BB donne un avis standardisé sur le risque de non-remboursement. Plus la note est basse, plus l’émetteur doit offrir un rendement élevé, mais la note reste un avis, pas une garantie.',
                        'choices' => [
                            ['choice_text' => 'Le rendement annuel que l’investisseur est sûr d’obtenir', 'is_correct' => false],
                            ['choice_text' => 'Le prix auquel ses obligations s’échangeront sur le marché demain matin', 'is_correct' => false],
                            ['choice_text' => 'Sa qualité de crédit : sa capacité estimée à rembourser ses dettes', 'is_correct' => true],
                            ['choice_text' => 'Le classement de ses bénéfices parmi ceux des entreprises du secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une obligation, qui supporte le risque de défaut de l’émetteur ?',
                        'explanation' => 'Si l’émetteur ne peut plus payer, c’est le porteur de l’obligation qui perd tout ou partie de son argent. La note de crédit aide à mesurer ce risque, elle ne le supprime pas.',
                        'choices' => [
                            ['choice_text' => 'L’agence de notation qui a attribué la note à l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'La Bourse où l’obligation est cotée et échangée', 'is_correct' => false],
                            ['choice_text' => 'La banque qui a conseillé l’achat de l’obligation', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur qui l’a achetée, si l’émetteur ne rembourse pas', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valorisation et comparaison des investissements',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que veut dire « actualiser » un flux futur ?',
                        'explanation' => 'Actualiser, c’est ramener une somme future à aujourd’hui : 1 000 MAD reçus dans un an valent moins que 1 000 MAD en poche maintenant. C’est l’inverse de la capitalisation.',
                        'choices' => [
                            ['choice_text' => 'Calculer combien vaut aujourd’hui une somme que l’on recevra plus tard', 'is_correct' => true],
                            ['choice_text' => 'Calculer combien rapportera dans le futur une somme placée aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Ajouter à une somme future les intérêts déjà versés dans le passé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer un flux futur par sa moyenne sur plusieurs années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le taux d’actualisation ?',
                        'explanation' => 'Un dirham aujourd’hui vaut plus qu’un dirham demain, et un flux risqué vaut moins qu’un flux sûr. Le taux d’actualisation traduit ces deux idées.',
                        'choices' => [
                            ['choice_text' => 'À fixer le prix de vente de l’actif sur le marché des actions cotées', 'is_correct' => false],
                            ['choice_text' => 'À tenir compte de la valeur du temps et du risque du projet', 'is_correct' => true],
                            ['choice_text' => 'À calculer le chiffre d’affaires des années futures', 'is_correct' => false],
                            ['choice_text' => 'À répartir le bénéfice entre les actionnaires chaque année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la VAN d’un projet ?',
                        'explanation' => 'VAN = valeur actuelle des flux – investissement initial. Si le résultat est positif, le projet rapporte plus que ce qu’il coûte, compte tenu du taux d’actualisation.',
                        'choices' => [
                            ['choice_text' => 'La somme des flux futurs, sans les ramener à aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable moyen que le projet dégage chaque année pendant sa durée', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle des flux futurs moins l’investissement de départ', 'is_correct' => true],
                            ['choice_text' => 'Le délai nécessaire pour récupérer la mise de départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet a une VAN de +12 000 MAD. Que cela signifie-t-il ?',
                        'explanation' => 'Une VAN positive veut dire que les flux actualisés dépassent la mise de départ : le projet rapporte plus que le taux exigé. Les 12 000 MAD sont une valeur d’aujourd’hui, pas un revenu annuel.',
                        'choices' => [
                            ['choice_text' => 'Il ne présente plus de risque pour l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Il rapportera 12 000 MAD de bénéfice chaque année', 'is_correct' => false],
                            ['choice_text' => 'Ses flux futurs sont connus avec certitude dès le départ', 'is_correct' => false],
                            ['choice_text' => 'Il crée de la valeur au taux d’actualisation retenu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valorisation relative ?',
                        'explanation' => 'On regarde combien le marché paie pour des entreprises comparables (par exemple leur P/E) et on applique ce multiple à l’entreprise étudiée. L’autre grande approche actualise les flux futurs.',
                        'choices' => [
                            ['choice_text' => 'Une estimation calculée à partir de ses seuls flux futurs actualisés', 'is_correct' => false],
                            ['choice_text' => 'Une estimation faite en comparant l’entreprise à des sociétés semblables', 'is_correct' => true],
                            ['choice_text' => 'Une estimation fondée sur sa valeur comptable au dernier bilan', 'is_correct' => false],
                            ['choice_text' => 'Une estimation donnée par le prix de sa dernière augmentation de capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira veut évaluer un supermarché coté. Quelles entreprises doit-elle prendre comme repères ?',
                        'explanation' => 'Un multiple n’a de sens que pour des entreprises qui se ressemblent : même métier, même taille, même marché. Comparer un supermarché à une banque ou à un éditeur de logiciels donne des chiffres trompeurs.',
                        'choices' => [
                            ['choice_text' => 'Des entreprises qui versent le même dividende, quel que soit leur métier', 'is_correct' => false],
                            ['choice_text' => 'Des entreprises du même âge, quel que soit leur secteur', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises dont le cours est le plus proche du sien', 'is_correct' => false],
                            ['choice_text' => 'D’autres distributeurs cotés, de taille et de pays comparables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation par flux actualisés, qu’est-ce qui fait le plus varier le résultat ?',
                        'explanation' => 'Un petit changement du taux d’actualisation (de 8 % à 10 %) ou de la croissance prévue peut changer fortement la valeur finale. Toute la valorisation repose sur ces hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Les hypothèses sur les flux futurs et sur le taux d’actualisation', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’actions échangées chaque jour en Bourse', 'is_correct' => false],
                            ['choice_text' => 'Le cours de Bourse de la veille, qui sert de point de départ au calcul', 'is_correct' => false],
                            ['choice_text' => 'Le choix du cabinet comptable qui a certifié les comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait-on dans une analyse de sensibilité ?',
                        'explanation' => 'Par exemple : que devient la valeur si la croissance est de 3 % au lieu de 5 %, ou le taux de 9 % au lieu de 8 % ? On obtient une fourchette plutôt qu’un chiffre unique.',
                        'choices' => [
                            ['choice_text' => 'On vérifie que les comptes ont bien été certifiés par un auditeur', 'is_correct' => false],
                            ['choice_text' => 'On regarde comment la valeur change quand une hypothèse varie', 'is_correct' => true],
                            ['choice_text' => 'On remplace les hypothèses de l’analyste par celles du secteur', 'is_correct' => false],
                            ['choice_text' => 'On mesure la rapidité avec laquelle le cours réagit aux nouvelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation, que veut dire « hypothèse de croissance » ?',
                        'explanation' => 'On ne connaît pas l’avenir : l’analyste suppose que les ventes progresseront de, disons, 4 % par an. C’est une estimation, pas un engagement de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un engagement de l’entreprise à atteindre un niveau de ventes', 'is_correct' => false],
                            ['choice_text' => 'Un chiffre tiré du dernier bilan publié par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rendement que le marché exige de l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Une estimation de l’évolution future des ventes ou des bénéfices', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une valorisation donne 85 MAD par action. Comment faut-il la considérer ?',
                        'explanation' => 'Un calcul juste sur des hypothèses fragiles donne un résultat fragile. Mieux vaut raisonner avec une fourchette et plusieurs méthodes.',
                        'choices' => [
                            ['choice_text' => 'Comme une estimation fondée sur des hypothèses, donc incertaine', 'is_correct' => true],
                            ['choice_text' => 'Comme le prix exact que le marché finira par atteindre', 'is_correct' => false],
                            ['choice_text' => 'Comme une valeur officielle fixée par l’autorité de régulation du marché', 'is_correct' => false],
                            ['choice_text' => 'Comme un résultat sûr dès lors que le calcul est correct', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construction d’un portefeuille d’investissement',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Quel est le principal avantage d’un portefeuille diversifié ?',
                        'explanation' => 'En répartissant son argent entre plusieurs actifs, on réduit l’effet d’un problème propre à l’un d’eux. Le risque de marché, lui, reste.',
                        'choices' => [
                            ['choice_text' => 'Il fait monter la valeur de chacun des actifs détenus', 'is_correct' => false],
                            ['choice_text' => 'Il protège le portefeuille contre une baisse de l’ensemble du marché', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les frais de transaction sur les achats d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Il peut réduire le risque spécifique grâce à la combinaison d’actifs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la corrélation entre deux actifs ?',
                        'explanation' => 'Deux actifs très corrélés montent et descendent ensemble ; peu corrélés ou de sens opposés, ils se compensent en partie.',
                        'choices' => [
                            ['choice_text' => 'Elle mesure leur tendance à évoluer ensemble ou en sens opposé', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure l’écart de prix entre les deux actifs sur la période', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure la différence de risque entre un actif et le marché', 'is_correct' => false],
                            ['choice_text' => 'Elle indique la part du portefeuille consacrée à chacun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs ont une corrélation faible. Qu’apporte cela à un portefeuille qui les détient ensemble ?',
                        'explanation' => 'Quand l’un baisse, l’autre ne baisse pas forcément : les mouvements se compensent en partie, et le portefeuille varie moins que chaque actif pris seul.',
                        'choices' => [
                            ['choice_text' => 'Cela peut réduire le risque global du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Cela fait évoluer les deux actifs dans le même sens', 'is_correct' => false],
                            ['choice_text' => 'Cela élimine le risque de marché du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Cela assure un rendement supérieur à celui du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie l’allocation d’actifs ?',
                        'explanation' => 'L’allocation d’actifs, c’est décider quelle part du portefeuille va aux actions, aux obligations, à l’immobilier, etc.',
                        'choices' => [
                            ['choice_text' => 'Le choix des titres à acheter au sein d’un même secteur', 'is_correct' => false],
                            ['choice_text' => 'Le choix du moment pour acheter ou vendre chaque actif', 'is_correct' => false],
                            ['choice_text' => 'La répartition du portefeuille entre différentes catégories d’actifs', 'is_correct' => true],
                            ['choice_text' => 'La répartition des dividendes entre les actionnaires de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef détient des actions, des obligations et un bien immobilier. Qu’y gagne-t-il ?',
                        'explanation' => 'Actions, obligations et immobilier ne réagissent pas de la même façon aux événements. En les mélangeant, les mauvaises périodes de l’un sont en partie compensées par l’autre.',
                        'choices' => [
                            ['choice_text' => 'Des sources de rendement et de risque plus variées', 'is_correct' => true],
                            ['choice_text' => 'Un rendement positif chaque année quel que soit le marché', 'is_correct' => false],
                            ['choice_text' => 'La possibilité de ne plus payer d’impôts sur ses gains', 'is_correct' => false],
                            ['choice_text' => 'Des frais de gestion nuls sur l’ensemble des placements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rééquilibrage d’un portefeuille, c’est quoi ?',
                        'explanation' => 'Exemple : tu visais 60 % d’actions et 40 % d’obligations, mais les actions ont monté et pèsent 70 %. Tu en vends un peu pour revenir à 60/40.',
                        'choices' => [
                            ['choice_text' => 'Vendre l’ensemble du portefeuille pour repartir de zéro', 'is_correct' => false],
                            ['choice_text' => 'Acheter davantage de l’actif qui a le plus monté depuis quelques mois', 'is_correct' => false],
                            ['choice_text' => 'Recalculer l’impôt dû sur les gains réalisés dans l’année', 'is_correct' => false],
                            ['choice_text' => 'Remettre les proportions de chaque actif au niveau visé au départ', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille de 100 000 MAD contient 60 000 MAD d’actions et 40 000 MAD d’obligations. Quel est le poids des actions ?',
                        'explanation' => 'Poids = 60 000 ÷ 100 000 = 60 %. Les 40 % restants sont en obligations.',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => true],
                            ['choice_text' => '67 %', 'is_correct' => false],
                            ['choice_text' => '150 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille prudent ?',
                        'explanation' => 'Un portefeuille prudent vise à limiter les secousses, quitte à gagner moins. Il contient beaucoup d’obligations et de liquidités, et moins d’actions. Prudent ne veut pas dire sans risque.',
                        'choices' => [
                            ['choice_text' => 'Un portefeuille dont le capital est protégé contre les pertes', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille investi surtout dans des actions de jeunes entreprises', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille que l’on ne modifie plus du tout après sa création', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille fait surtout d’actifs peu risqués, comme les obligations', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’horizon d’investissement dans le choix d’un portefeuille ?',
                        'explanation' => 'Avec 30 ans devant soi, on peut encaisser une baisse de la Bourse et attendre la remontée. Avec 2 ans, une chute peut coûter cher au moment où il faut payer : on choisit des placements plus calmes.',
                        'choices' => [
                            ['choice_text' => 'Il détermine le rendement que le portefeuille obtiendra', 'is_correct' => false],
                            ['choice_text' => 'Il fixe le montant des dividendes que l’on percevra chaque année', 'is_correct' => false],
                            ['choice_text' => 'Il détermine combien de temps on peut attendre et supporter les baisses', 'is_correct' => true],
                            ['choice_text' => 'Il indique à l’avance quel actif aura la meilleure performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour construire son portefeuille, sur quoi Karim doit-il d’abord s’appuyer ?',
                        'explanation' => 'Le bon portefeuille dépend de la personne, pas de la mode. On part de ce que l’on veut (objectif), du temps dont on dispose (horizon) et de ce que l’on supporte (risque), puis on répartit.',
                        'choices' => [
                            ['choice_text' => 'Sur les placements qui ont le mieux performé l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Sur les conseils d’un ami qui a gagné de l’argent récemment', 'is_correct' => false],
                            ['choice_text' => 'Sur ses objectifs, son horizon de placement et sa tolérance au risque', 'is_correct' => true],
                            ['choice_text' => 'Sur le placement dont le rendement espéré est le plus élevé du moment', 'is_correct' => false],
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
