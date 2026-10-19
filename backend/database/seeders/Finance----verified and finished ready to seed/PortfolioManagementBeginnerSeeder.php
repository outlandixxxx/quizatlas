<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PortfolioManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'portfolio-management')->firstOrFail();

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
        ];

        $quizzes = [
            [
                'title' => 'Introduction à la gestion de portefeuille',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille d’investissement ?',
                        'explanation' => 'Un portefeuille, c’est tout ce que tu détiens comme placements : actions, obligations, liquidités, etc.',
                        'choices' => [
                            ['choice_text' => 'Le registre des opérations passées par un seul courtier', 'is_correct' => false],
                            ['choice_text' => 'Un titre unique acheté puis conservé jusqu’à son échéance', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de plusieurs investissements détenus par un investisseur', 'is_correct' => true],
                            ['choice_text' => 'Un contrat qui rembourse l’investisseur en cas de forte baisse des marchés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but de la gestion de portefeuille ?',
                        'explanation' => 'On ne cherche pas le rendement à tout prix : on cherche le bon compromis entre gain espéré, risque accepté et objectifs de la personne.',
                        'choices' => [
                            ['choice_text' => 'Trouver le bon équilibre entre rendement, risque et objectifs de l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Maximiser le rendement de chaque actif pris isolément, quel que soit le risque', 'is_correct' => false],
                            ['choice_text' => 'Réduire les frais au minimum en gardant le capital en liquidités', 'is_correct' => false],
                            ['choice_text' => 'Reproduire à l’identique le portefeuille des grands investisseurs institutionnels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef répartit son épargne sur plusieurs placements au lieu d’un seul. Pourquoi ?',
                        'explanation' => 'Mettre tous ses œufs dans le même panier, c’est risqué. En répartissant, une mauvaise surprise sur un placement pèse moins sur l’ensemble.',
                        'choices' => [
                            ['choice_text' => 'Pour que ses placements évoluent au même rythme et rapportent plus que ceux des autres épargnants', 'is_correct' => false],
                            ['choice_text' => 'Pour faire disparaître le risque de perte en multipliant les lignes', 'is_correct' => false],
                            ['choice_text' => 'Pour payer moins de frais, car les petits montants coûtent moins cher', 'is_correct' => false],
                            ['choice_text' => 'Pour ne pas dépendre d’un seul investissement : si l’un baisse, les autres peuvent amortir le choc', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces phrases sur le contenu d’un portefeuille est vraie ?',
                        'explanation' => 'Rien n’oblige à choisir une seule catégorie : un portefeuille peut combiner plusieurs classes d’actifs.',
                        'choices' => [
                            ['choice_text' => 'Il doit contenir au moins une action de chaque secteur d’activité', 'is_correct' => false],
                            ['choice_text' => 'Il peut mélanger des actions, des obligations et des liquidités', 'is_correct' => true],
                            ['choice_text' => 'Il ne peut contenir que des titres de la même classe d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Il doit être composé d’actifs achetés le même jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait un gestionnaire de portefeuille ?',
                        'explanation' => 'Son métier : choisir quoi acheter, quoi vendre et en quelle proportion. Conserver les titres, c’est le travail d’un autre acteur, le dépositaire.',
                        'choices' => [
                            ['choice_text' => 'Il tient la comptabilité des entreprises dont il détient des titres en portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Il prend les décisions d’investissement du portefeuille, seul ou en équipe', 'is_correct' => true],
                            ['choice_text' => 'Il garantit au client un rendement minimum fixé dans le contrat', 'is_correct' => false],
                            ['choice_text' => 'Il centralise les ordres de bourse et conserve les titres du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim a 25 ans, son père 60. Ils ont chacun une somme à placer. Pourquoi leurs portefeuilles seront-ils sans doute différents ?',
                        'explanation' => 'Karim peut attendre longtemps et encaisser des baisses ; son père a moins de temps devant lui. C’est ça, le profil de l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Le père a accès à des marchés financiers différents de ceux de son fils', 'is_correct' => false],
                            ['choice_text' => 'Le rendement d’un actif dépend de l’âge de la personne qui l’achète', 'is_correct' => false],
                            ['choice_text' => 'Les placements des jeunes sont soumis à des frais plus bas que ceux des personnes âgées', 'is_correct' => false],
                            ['choice_text' => 'Leurs objectifs, leur horizon et leur tolérance au risque ne sont pas les mêmes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « horizon d’investissement » ?',
                        'explanation' => 'L’horizon, c’est le temps dont tu disposes avant d’avoir besoin de ton argent : un an, cinq ans, vingt ans.',
                        'choices' => [
                            ['choice_text' => 'La durée pendant laquelle on pense garder son investissement', 'is_correct' => true],
                            ['choice_text' => 'Le rendement visé à la fin de la période de placement', 'is_correct' => false],
                            ['choice_text' => 'La date à laquelle l’émetteur rembourse son emprunt aux porteurs', 'is_correct' => false],
                            ['choice_text' => 'Le montant que l’on espère atteindre au bout de dix ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choisir ses placements avant de fixer ses objectifs, c’est risquer quoi ?',
                        'explanation' => 'Sans objectif clair, on avance à l’aveugle. On commence par se demander ce qu’on veut, pour quand, et avec quelles limites.',
                        'choices' => [
                            ['choice_text' => 'De payer des frais de gestion doublés dès la première année', 'is_correct' => false],
                            ['choice_text' => 'De ne pas pouvoir acheter de titres tant que le profil n’est pas validé par la banque', 'is_correct' => false],
                            ['choice_text' => 'D’obtenir un portefeuille qui ne correspond ni à ses besoins ni à ses contraintes', 'is_correct' => true],
                            ['choice_text' => 'De voir ses placements perdre de la valeur dès le premier jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces situations est une contrainte pour un portefeuille ?',
                        'explanation' => 'Une contrainte limite ce qu’on peut faire, ici le besoin de retrouver son argent vite. Les autres choix sont des objectifs ou une simple composition.',
                        'choices' => [
                            ['choice_text' => 'Vouloir doubler son capital en cinq ans sans prendre trop de risque', 'is_correct' => false],
                            ['choice_text' => 'Souhaiter obtenir plus que le rendement du marché', 'is_correct' => false],
                            ['choice_text' => 'Avoir besoin de récupérer une partie de son argent dans six mois', 'is_correct' => true],
                            ['choice_text' => 'Détenir un portefeuille composé d’actions et d’obligations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces situations, laquelle montre un portefeuille mal adapté à son propriétaire ?',
                        'explanation' => 'Le retraité a peu de temps pour se refaire et besoin de revenus : une seule action spéculative est trop risquée pour lui.',
                        'choices' => [
                            ['choice_text' => 'Un retraité qui place presque toute son épargne dans une action spéculative', 'is_correct' => true],
                            ['choice_text' => 'Un étudiant qui garde une partie de ses économies en liquidités pour ses frais de scolarité', 'is_correct' => false],
                            ['choice_text' => 'Un jeune actif qui répartit son épargne entre actions et obligations pour vingt ans', 'is_correct' => false],
                            ['choice_text' => 'Une famille qui prépare un achat dans un an et laisse la somme sur un dépôt', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque et rendement',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que mesure le rendement d’un investissement ?',
                        'explanation' => 'Si ton placement passe de 100 à 105 et te verse 2 de revenus, ton gain est de 7 sur la période.',
                        'choices' => [
                            ['choice_text' => 'Le montant total investi au départ, frais compris', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le prix le plus haut et le plus bas de la période', 'is_correct' => false],
                            ['choice_text' => 'La probabilité de gagner de l’argent sur la période considérée par l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Le gain ou la perte de valeur, plus les revenus reçus, sur une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque, en investissement ?',
                        'explanation' => 'Le risque, c’est de ne pas savoir à l’avance ce qu’on obtiendra : le résultat peut être meilleur ou moins bon que prévu.',
                        'choices' => [
                            ['choice_text' => 'La certitude de perdre une partie du capital investi', 'is_correct' => false],
                            ['choice_text' => 'L’incertitude sur les résultats futurs d’un placement', 'is_correct' => true],
                            ['choice_text' => 'Le montant des frais prélevés chaque année sur le placement', 'is_correct' => false],
                            ['choice_text' => 'La différence entre le prix d’achat et le prix de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En règle générale, un rendement attendu plus élevé va de pair avec ___.',
                        'explanation' => 'Pour espérer gagner davantage, il faut accepter de pouvoir perdre davantage. Un rendement élevé sans risque, ça n’existe pas.',
                        'choices' => [
                            ['choice_text' => 'une sécurité du capital nettement renforcée', 'is_correct' => false],
                            ['choice_text' => 'un risque plus important à supporter', 'is_correct' => true],
                            ['choice_text' => 'des frais de gestion plus faibles', 'is_correct' => false],
                            ['choice_text' => 'une durée de placement plus courte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la volatilité ?',
                        'explanation' => 'Plus un cours monte et descend fortement, plus l’actif est volatil. La facilité à revendre, c’est la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Le rendement moyen obtenu sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'La facilité à revendre un actif rapidement sans perdre de valeur', 'is_correct' => false],
                            ['choice_text' => 'La perte maximale que l’on peut subir sur un placement', 'is_correct' => false],
                            ['choice_text' => 'L’ampleur des variations du prix ou du rendement d’un actif', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Entre une action et un dépôt à terme, lequel voit sa valeur varier le plus à court terme ?',
                        'explanation' => 'Le cours d’une action bouge toute la journée. Le capital d’un dépôt à terme, lui, est connu d’avance.',
                        'choices' => [
                            ['choice_text' => 'L’action, car son cours se forme en continu selon l’offre et la demande', 'is_correct' => true],
                            ['choice_text' => 'Le dépôt, car son taux change chaque jour avec la Bourse', 'is_correct' => false],
                            ['choice_text' => 'Les deux de la même façon, car leur rendement est fixé à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Le dépôt, car la banque révise son capital selon sa situation financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds a gagné 12 % par an pendant trois ans. Peut-on être sûr qu’il fera pareil l’an prochain ?',
                        'explanation' => 'Les performances passées ne garantissent rien : le contexte change, et un bon passé ne dit pas ce qui va se passer.',
                        'choices' => [
                            ['choice_text' => 'Oui, car trois ans suffisent à prouver la qualité du fonds', 'is_correct' => false],
                            ['choice_text' => 'Oui, tant que le fonds reste investi sur les mêmes actions', 'is_correct' => false],
                            ['choice_text' => 'Non, car les conditions économiques et les marchés peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Non, car un fonds ne peut pas gagner plus de 10 % par an sur plusieurs années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces exemples, lequel est un risque de marché ?',
                        'explanation' => 'Le risque de marché touche l’ensemble des actifs d’un coup. La faillite d’une société est un risque propre à elle, et le retard de coupon un risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'La faillite d’une seule entreprise du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de revendre un titre rapidement', 'is_correct' => false],
                            ['choice_text' => 'Une baisse générale des cours des actions', 'is_correct' => true],
                            ['choice_text' => 'Un retard de paiement du coupon par l’émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef panique dès que son portefeuille perd 5 %. Que doit-il en tirer ?',
                        'explanation' => 'Connaître sa tolérance au risque évite de prendre plus de risque qu’on ne peut en supporter, sur le plan financier comme psychologique.',
                        'choices' => [
                            ['choice_text' => 'Sa tolérance au risque est faible : il doit choisir une exposition qu’il peut supporter', 'is_correct' => true],
                            ['choice_text' => 'Il doit acheter davantage d’actions pour s’habituer aux baisses', 'is_correct' => false],
                            ['choice_text' => 'Il doit attendre que les marchés ne fluctuent plus du tout avant de placer son argent en actions', 'is_correct' => false],
                            ['choice_text' => 'Son horizon est trop long pour qu’il puisse investir en actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, quel portefeuille est le plus risqué ?',
                        'explanation' => 'Peu de lignes, beaucoup de variations : tout repose sur quelques titres. La diversification et les actifs stables réduisent le risque.',
                        'choices' => [
                            ['choice_text' => 'Un portefeuille réparti sur plusieurs classes d’actifs peu corrélées', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille investi surtout en liquidités et en obligations d’État', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille composé de nombreuses petites lignes bien réparties', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille concentré sur quelques actifs très volatils', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le risque réel du portefeuille de Samira dépasse largement ce qu’elle avait prévu. Que doit-elle faire ?',
                        'explanation' => 'Quand le risque réel s’éloigne de ce qu’on peut accepter, on réexamine la répartition plutôt que de subir ou de tout liquider.',
                        'choices' => [
                            ['choice_text' => 'Acheter d’autres actifs risqués pour compenser les pertes éventuelles', 'is_correct' => false],
                            ['choice_text' => 'Revoir l’allocation et l’adapter à son profil et à ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Vendre aussitôt l’ensemble du portefeuille pour repartir de zéro', 'is_correct' => false],
                            ['choice_text' => 'Attendre que le marché remonte sans rien modifier', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diversification du portefeuille',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'En quoi consiste la diversification ?',
                        'explanation' => 'Diversifier, c’est ne pas dépendre d’un seul risque. Acheter régulièrement le même actif est une autre technique, qui ne répartit pas le risque.',
                        'choices' => [
                            ['choice_text' => 'Placer son capital dans le meilleur titre du moment', 'is_correct' => false],
                            ['choice_text' => 'Répartir ses placements pour ne pas tout miser sur un seul actif', 'is_correct' => true],
                            ['choice_text' => 'Acheter le même actif à plusieurs dates pour lisser son prix d’achat', 'is_correct' => false],
                            ['choice_text' => 'Se limiter aux titres d’un même secteur pour mieux suivre l’actualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira détient les actions de dix entreprises au lieu d’une seule. Que devient le risque propre à chaque entreprise ?',
                        'explanation' => 'Si une société déçoit, elle ne représente qu’un dixième du portefeuille. Le risque de marché, lui, reste là.',
                        'choices' => [
                            ['choice_text' => 'Il augmente, car il faut suivre plus d’entreprises en même temps', 'is_correct' => false],
                            ['choice_text' => 'Il se reporte sur les autres entreprises du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Il est supprimé, mais en échange le risque de marché devient plus fort', 'is_correct' => false],
                            ['choice_text' => 'Il pèse moins : les ennuis d’une société ne touchent qu’une petite part du total', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel portefeuille est le mieux diversifié ?',
                        'explanation' => 'Plus on varie les sources de risque (classes, secteurs, pays), plus la diversification est large.',
                        'choices' => [
                            ['choice_text' => 'Un portefeuille réparti entre classes d’actifs, secteurs et zones géographiques', 'is_correct' => true],
                            ['choice_text' => 'Un portefeuille de dix actions choisies dans le même secteur d’activité et la même région', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille de plusieurs obligations émises par la même entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille de vingt actions cotées sur la même place boursière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment sait-on si deux actifs se diversifient bien ?',
                        'explanation' => 'Deux actifs qui ne montent et ne baissent pas en même temps se compensent en partie. Plus la corrélation est faible, plus l’effet est utile.',
                        'choices' => [
                            ['choice_text' => 'En comparant leur capitalisation boursière, la plus grosse étant la plus sûre', 'is_correct' => false],
                            ['choice_text' => 'En vérifiant que leurs prix sont éloignés', 'is_correct' => false],
                            ['choice_text' => 'En regardant leur corrélation, c’est-à-dire comment leurs rendements évoluent ensemble', 'is_correct' => true],
                            ['choice_text' => 'En retenant celui dont le rendement moyen est le plus élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actions évoluent exactement de la même façon, à la hausse comme à la baisse. Quel effet a leur combinaison sur le risque ?',
                        'explanation' => 'Quand deux actifs font la même chose au même moment, rien ne se compense. Avoir deux lignes ne suffit pas à diversifier.',
                        'choices' => [
                            ['choice_text' => 'Le risque total est divisé par deux, puisqu’on détient deux lignes', 'is_correct' => false],
                            ['choice_text' => 'Le risque total devient nul, chaque perte d’un actif étant compensée par l’autre actif', 'is_correct' => false],
                            ['choice_text' => 'Le risque total ne baisse pas : les deux actifs montent et descendent ensemble', 'is_correct' => true],
                            ['choice_text' => 'Le rendement total est doublé, car les gains des deux actifs s’additionnent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces exemples est une diversification géographique ?',
                        'explanation' => 'Géographique veut dire « selon les pays ». Les autres exemples jouent sur les classes d’actifs, les secteurs ou le calendrier d’achat.',
                        'choices' => [
                            ['choice_text' => 'Investir dans des entreprises situées dans plusieurs pays', 'is_correct' => true],
                            ['choice_text' => 'Répartir son argent entre actions, obligations et liquidités', 'is_correct' => false],
                            ['choice_text' => 'Acheter des titres de plusieurs secteurs au sein du même pays', 'is_correct' => false],
                            ['choice_text' => 'Acheter chaque mois la même somme du même fonds', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’un portefeuille très concentré ?',
                        'explanation' => 'Avec peu de lignes, chaque ligne pèse lourd : une mauvaise nouvelle sur l’une d’elles se répercute sur tout le portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Les gains sont plafonnés, car un portefeuille concentré ne peut pas monter beaucoup', 'is_correct' => false],
                            ['choice_text' => 'Le portefeuille perd sa liquidité, car on ne peut plus revendre les titres', 'is_correct' => false],
                            ['choice_text' => 'Les frais de gestion explosent, car chaque ligne coûte plus cher', 'is_correct' => false],
                            ['choice_text' => 'Un seul actif qui baisse peut faire fortement reculer tout le portefeuille', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que peut-on dire de la diversification face aux pertes ?',
                        'explanation' => 'Même bien diversifié, on subit une baisse générale des marchés. La diversification limite le risque propre à chaque titre, pas le risque de marché.',
                        'choices' => [
                            ['choice_text' => 'Elle protège le capital dès que le portefeuille compte plus de cinq actifs', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit certains risques, mais ne supprime pas le risque de marché', 'is_correct' => true],
                            ['choice_text' => 'Elle évite les pertes dès que les actifs viennent de pays différents', 'is_correct' => false],
                            ['choice_text' => 'Elle écarte les pertes tant que les titres sont bien choisis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les banques et les entreprises de tourisme ne réagissent pas de la même façon à une crise. Que retenir pour un portefeuille ?',
                        'explanation' => 'Quand un secteur souffre, un autre peut mieux tenir : les pertes de l’un sont en partie atténuées par les autres.',
                        'choices' => [
                            ['choice_text' => 'Il vaut mieux se concentrer sur le secteur qui résiste le mieux', 'is_correct' => false],
                            ['choice_text' => 'Mélanger les secteurs peut limiter les dégâts quand l’un d’eux est en difficulté', 'is_correct' => true],
                            ['choice_text' => 'Les secteurs étant liés, ils évoluent au même rythme', 'is_correct' => false],
                            ['choice_text' => 'Un seul secteur suffit si on achète beaucoup d’actions différentes au sein de ce secteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une diversification excessive ?',
                        'explanation' => 'Au-delà d’un certain nombre de lignes, chacune pèse si peu qu’une bonne idée ne change plus grand-chose, et le suivi devient lourd.',
                        'choices' => [
                            ['choice_text' => 'Le risque propre à chaque titre augmente avec le nombre de lignes', 'is_correct' => false],
                            ['choice_text' => 'Le portefeuille devient moins liquide à cause du trop grand nombre de titres', 'is_correct' => false],
                            ['choice_text' => 'Les frais de gestion baissent, mais les gains baissent aussi', 'is_correct' => false],
                            ['choice_text' => 'Le portefeuille devient difficile à suivre et dilue l’effet des meilleures idées', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Allocation des actifs',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’allocation d’actifs ?',
                        'explanation' => 'Avant de choisir des titres, on décide combien mettre en actions, en obligations, en liquidités… C’est ça, l’allocation.',
                        'choices' => [
                            ['choice_text' => 'La répartition du capital entre grandes catégories de placements', 'is_correct' => true],
                            ['choice_text' => 'Le choix des meilleures actions à l’intérieur d’une même catégorie', 'is_correct' => false],
                            ['choice_text' => 'La vente des actifs qui ont perdu pour racheter ceux qui ont gagné', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de l’impôt dû sur les plus-values du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces listes correspond à des classes d’actifs ?',
                        'explanation' => 'Une classe d’actifs est une grande famille de placements. Les autres listes donnent des revenus, des pays ou des durées.',
                        'choices' => [
                            ['choice_text' => 'Dividendes, coupons, plus-values, intérêts', 'is_correct' => false],
                            ['choice_text' => 'Actions françaises, actions marocaines, actions américaines, actions japonaises', 'is_correct' => false],
                            ['choice_text' => 'Actions, obligations, liquidités, immobilier', 'is_correct' => true],
                            ['choice_text' => 'Court terme, moyen terme, long terme, très long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle allocation convient à un investisseur très prudent ?',
                        'explanation' => 'Un profil prudent cherche à limiter les variations : il garde l’essentiel dans des actifs plus stables.',
                        'choices' => [
                            ['choice_text' => 'Une majorité d’actions de petites entreprises, pour viser de bons rendements', 'is_correct' => false],
                            ['choice_text' => 'Une forte part de matières premières, qui montent forcément quand les actions baissent', 'is_correct' => false],
                            ['choice_text' => 'Une part importante d’actifs peu volatils, comme les obligations et les liquidités', 'is_correct' => true],
                            ['choice_text' => 'Une répartition identique à celle d’un investisseur dynamique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels éléments influencent la part d’actions dans un portefeuille ?',
                        'explanation' => 'Plus on a de temps devant soi et plus on supporte les baisses, plus on peut détenir d’actions.',
                        'choices' => [
                            ['choice_text' => 'L’horizon de placement et la tolérance au risque', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de comptes bancaires que possède l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Le montant des frais de tenue de compte', 'is_correct' => false],
                            ['choice_text' => 'Le cours d’ouverture de la Bourse le jour de l’achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un horizon d’investissement long peut-il rendre une exposition plus élevée aux actifs volatils envisageable ?',
                        'explanation' => 'Un horizon long peut laisser plus de temps avant le retrait prévu et réduire le risque de devoir vendre pendant une baisse. Il ne garantit toutefois pas que les pertes seront récupérées.',
                        'choices' => [
                            ['choice_text' => 'Les actions perdent leur risque quand on les garde plus de cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Ses placements sont garantis par l’État s’il les conserve longtemps', 'is_correct' => false],
                            ['choice_text' => 'Ses gains sont versés d’avance, ce qui couvre ses pertes futures', 'is_correct' => false],
                            ['choice_text' => 'Il peut disposer de plus de temps avant le retrait prévu, sans garantie de récupération des pertes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation stratégique ?',
                        'explanation' => 'C’est le plan de base, pensé sur plusieurs années. On n’y touche pas à chaque secousse du marché.',
                        'choices' => [
                            ['choice_text' => 'Un ajustement ponctuel de la répartition pour profiter d’une opportunité de marché', 'is_correct' => false],
                            ['choice_text' => 'La répartition cible fixée pour atteindre les objectifs à long terme', 'is_correct' => true],
                            ['choice_text' => 'Une répartition qui change chaque semaine selon l’actualité', 'is_correct' => false],
                            ['choice_text' => 'La liste des titres retenus par le gestionnaire, sans pondérations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation tactique ?',
                        'explanation' => 'Le tactique, c’est le court terme : on s’écarte un peu du plan, puis on revient vers la cible.',
                        'choices' => [
                            ['choice_text' => 'La répartition cible définie au départ pour plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Un écart temporaire par rapport à l’allocation cible pour saisir une opportunité', 'is_correct' => true],
                            ['choice_text' => 'Le retour des pondérations vers leur niveau cible après une dérive de marché prolongée', 'is_correct' => false],
                            ['choice_text' => 'Une répartition limitée aux placements de moins d’un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les liquidités dans un portefeuille ?',
                        'explanation' => 'Les liquidités sont disponibles tout de suite et ne bougent presque pas. Elles rapportent peu, mais elles rassurent.',
                        'choices' => [
                            ['choice_text' => 'À obtenir le rendement le plus élevé du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'À augmenter volontairement la volatilité du portefeuille pour profiter des variations de prix', 'is_correct' => false],
                            ['choice_text' => 'À payer moins de frais, car elles ne coûtent rien à détenir', 'is_correct' => false],
                            ['choice_text' => 'À faire face aux besoins d’argent et à limiter l’exposition aux actifs risqués', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que peuvent apporter les obligations à un portefeuille ?',
                        'explanation' => 'Les coupons donnent des revenus, et les obligations ne réagissent pas comme les actions. Le droit de vote, lui, appartient aux actionnaires.',
                        'choices' => [
                            ['choice_text' => 'Des revenus réguliers et un comportement différent de celui des actions', 'is_correct' => true],
                            ['choice_text' => 'La certitude de gagner plus que les actions', 'is_correct' => false],
                            ['choice_text' => 'Un droit de vote aux assemblées de l’entreprise émettrice', 'is_correct' => false],
                            ['choice_text' => 'Une protection complète contre la hausse des taux d’intérêt comme contre l’inflation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une même allocation ne convient-elle pas à tout le monde ?',
                        'explanation' => 'Un étudiant, une famille et un retraité n’ont pas les mêmes besoins, donc pas la même répartition.',
                        'choices' => [
                            ['choice_text' => 'Chaque investisseur a accès à des marchés différents selon son pays', 'is_correct' => false],
                            ['choice_text' => 'Le rendement d’un même actif n’est pas le même selon le profil de chaque investisseur qui l’achète', 'is_correct' => false],
                            ['choice_text' => 'Les objectifs, l’horizon et la tolérance au risque diffèrent d’une personne à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Les banques imposent une allocation selon le montant déposé', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Actions et obligations dans un portefeuille',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que représente une action ?',
                        'explanation' => 'Acheter une action, c’est devenir un petit propriétaire de l’entreprise. Les autres choix sont des formes de prêt.',
                        'choices' => [
                            ['choice_text' => 'Un prêt accordé à une entreprise et remboursé à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt à terme placé auprès d’une banque', 'is_correct' => false],
                            ['choice_text' => 'Une part de propriété dans le capital d’une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une reconnaissance de dette émise par un État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une obligation ?',
                        'explanation' => 'Avec une obligation, tu es prêteur, pas propriétaire : l’émetteur te doit des intérêts et le remboursement.',
                        'choices' => [
                            ['choice_text' => 'Une créance : on prête de l’argent à un émetteur (État, entreprise)', 'is_correct' => true],
                            ['choice_text' => 'Une part du capital d’une entreprise cotée en Bourse, avec droit de vote', 'is_correct' => false],
                            ['choice_text' => 'Un droit de vote dans les décisions d’une société', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt bloqué sur un compte pour une durée fixée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rendement d’une action vient de la variation de son cours et ___.',
                        'explanation' => 'Gain en cours de Bourse plus dividendes : c’est le double visage du rendement d’une action. Le coupon appartient aux obligations.',
                        'choices' => [
                            ['choice_text' => 'du coupon fixé au moment de l’émission du titre', 'is_correct' => false],
                            ['choice_text' => 'd’un intérêt versé chaque année par la banque dépositaire', 'is_correct' => false],
                            ['choice_text' => 'du remboursement du capital à une date d’échéance connue', 'is_correct' => false],
                            ['choice_text' => 'des dividendes que l’entreprise décide de verser', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel revenu régulier une obligation peut-elle verser ?',
                        'explanation' => 'Le coupon, c’est l’intérêt de l’obligation. Le dividende concerne les actions.',
                        'choices' => [
                            ['choice_text' => 'Un dividende, dont le montant est voté par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Un coupon, dont le montant est fixé à l’émission', 'is_correct' => true],
                            ['choice_text' => 'Une commission de courtage, versée par le vendeur du titre', 'is_correct' => false],
                            ['choice_text' => 'Une plus-value, fixée à l’avance dans le contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une action ?',
                        'explanation' => 'Le cours d’une action peut chuter, et personne ne garantit le capital. Coupon, dépôt et taux de compte concernent d’autres produits.',
                        'choices' => [
                            ['choice_text' => 'Que l’émetteur ne verse pas le coupon prévu au contrat', 'is_correct' => false],
                            ['choice_text' => 'Que le cours baisse et qu’on perde une partie du capital investi', 'is_correct' => true],
                            ['choice_text' => 'Que la banque refuse de rembourser le dépôt à l’échéance prévue au contrat', 'is_correct' => false],
                            ['choice_text' => 'Que le taux d’intérêt du compte soit révisé à la baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement fait surtout baisser le prix d’une obligation à taux fixe ?',
                        'explanation' => 'Quand les taux montent, les obligations déjà émises, moins généreuses, valent moins. C’est le risque de taux.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du prix des actions de l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du dividende versé par l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des taux d’intérêt du marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’apporte le mélange d’actions et d’obligations dans un portefeuille ?',
                        'explanation' => 'Actions et obligations n’ont pas le même comportement : ce qui va mal pour l’un peut être compensé par l’autre.',
                        'choices' => [
                            ['choice_text' => 'Deux sources de rendement et de risque qui ne réagissent pas de la même façon', 'is_correct' => true],
                            ['choice_text' => 'Un rendement garanti, égal à la moyenne des deux placements', 'is_correct' => false],
                            ['choice_text' => 'Une exposition supprimée au risque de marché grâce aux obligations', 'is_correct' => false],
                            ['choice_text' => 'Un coût de gestion réduit de moitié par rapport à un portefeuille composé uniquement d’actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les taux du marché montent. Que devient en général le prix d’une obligation à taux fixe déjà émise ?',
                        'explanation' => 'Qui voudrait payer le prix fort une obligation à 3 % quand les nouvelles rapportent 5 % ? Son prix baisse donc.',
                        'choices' => [
                            ['choice_text' => 'Il monte, car son coupon devient plus intéressant qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Il ne change pas, puisque le coupon est fixé à l’émission', 'is_correct' => false],
                            ['choice_text' => 'Il baisse, car les nouvelles obligations offrent un meilleur taux', 'is_correct' => true],
                            ['choice_text' => 'Il monte, car l’émetteur doit augmenter le coupon pour suivre le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'D’où vient l’argent d’un dividende ?',
                        'explanation' => 'Le dividende est un partage de bénéfices. L’entreprise n’y est pas obligée : elle peut aussi garder son argent pour se développer.',
                        'choices' => [
                            ['choice_text' => 'D’un intérêt fixé à l’avance que l’entreprise doit verser chaque année à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Des commissions que la Bourse prélève sur les échanges de titres', 'is_correct' => false],
                            ['choice_text' => 'De la part des bénéfices ou des réserves que l’entreprise décide de distribuer', 'is_correct' => true],
                            ['choice_text' => 'D’un prêt que les actionnaires consentent à l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence entre un actionnaire et un obligataire ?',
                        'explanation' => 'Propriétaire d’un côté, prêteur de l’autre : cela change les revenus (dividende ou coupon) et les droits.',
                        'choices' => [
                            ['choice_text' => 'L’actionnaire possède une part de l’entreprise, l’obligataire lui a prêté de l’argent', 'is_correct' => true],
                            ['choice_text' => 'L’actionnaire prête de l’argent à l’entreprise, l’obligataire en possède une part dans le capital', 'is_correct' => false],
                            ['choice_text' => 'L’actionnaire reçoit un coupon fixe, l’obligataire un dividende variable', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont propriétaires, mais l’obligataire a un droit de vote plus important', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construction d’un portefeuille simple',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Que faut-il faire avant de choisir les actifs d’un portefeuille ?',
                        'explanation' => 'On commence par savoir où l’on va, pour quand et avec quelle prudence ; les titres viennent ensuite.',
                        'choices' => [
                            ['choice_text' => 'Comparer le rendement des actions les plus populaires du moment', 'is_correct' => false],
                            ['choice_text' => 'Choisir la banque qui prélève les frais de tenue de compte les plus bas du marché', 'is_correct' => false],
                            ['choice_text' => 'Fixer le prix auquel on revendra chaque titre', 'is_correct' => false],
                            ['choice_text' => 'Définir les objectifs, l’horizon et le profil de risque de l’investisseur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la pondération d’un actif dans un portefeuille ?',
                        'explanation' => 'Si 3 000 MAD sur 10 000 MAD sont investis dans un actif, sa pondération est de 30 %.',
                        'choices' => [
                            ['choice_text' => 'Son rendement moyen sur les douze derniers mois', 'is_correct' => false],
                            ['choice_text' => 'Sa part dans la valeur totale du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de titres de cet actif que l’on détient', 'is_correct' => false],
                            ['choice_text' => 'Le prix payé lors du premier achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient 60 % d’actions et 40 % d’obligations. Que représentent ces pourcentages ?',
                        'explanation' => 'Ce sont les pondérations : sur 100 MAD, 60 sont en actions et 40 en obligations.',
                        'choices' => [
                            ['choice_text' => 'Le rendement attendu de chaque classe d’actifs sur la prochaine année', 'is_correct' => false],
                            ['choice_text' => 'La part de chaque classe d’actifs dans la valeur du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de titres détenus dans chaque classe', 'is_correct' => false],
                            ['choice_text' => 'La probabilité de gain de chaque classe d’actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fois le portefeuille construit, pourquoi faut-il en surveiller les pondérations ?',
                        'explanation' => 'Si les actions grimpent plus vite que les obligations, leur poids grossit sans qu’on ait rien acheté.',
                        'choices' => [
                            ['choice_text' => 'Les marchés imposent une pondération minimale pour chaque classe d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres augmente de lui-même quand les prix montent', 'is_correct' => false],
                            ['choice_text' => 'Les pondérations sont remises à zéro par la banque chaque trimestre', 'is_correct' => false],
                            ['choice_text' => 'Les variations de prix peuvent modifier la répartition prévue au départ', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille équilibré ?',
                        'explanation' => 'L’équilibre n’est pas un 50/50 magique : il dépend de la personne qui détient le portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Un portefeuille adapté au profil et aux objectifs de son propriétaire', 'is_correct' => true],
                            ['choice_text' => 'Un portefeuille réparti à parts égales entre les classes d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille dont le rendement reste stable d’une année à l’autre sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille dont le risque est égal à celui du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds affiche 6 % de rendement brut et prélève 1,5 % de frais par an. Quel rendement net reste à l’investisseur ?',
                        'explanation' => 'Rendement net = 6 % − 1,5 % = 4,5 %. Les frais rognent directement ce qu’on gagne.',
                        'choices' => [
                            ['choice_text' => '1,5 %', 'is_correct' => false],
                            ['choice_text' => '4,5 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '7,5 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui peut justifier de garder davantage de liquidités ?',
                        'explanation' => 'Si l’argent doit servir bientôt, mieux vaut qu’il soit disponible et à l’abri des variations.',
                        'choices' => [
                            ['choice_text' => 'L’envie de profiter d’une hausse prévue des actions', 'is_correct' => false],
                            ['choice_text' => 'Un horizon de placement de vingt ans devant soi', 'is_correct' => false],
                            ['choice_text' => 'Une grosse dépense prévue dans les prochains mois', 'is_correct' => true],
                            ['choice_text' => 'Une forte tolérance au risque et peu de besoins immédiats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef aura besoin de son argent dans un an. Que cela change-t-il pour son portefeuille ?',
                        'explanation' => 'Avec un horizon court, une baisse tombe mal : on n’a pas le temps d’attendre la remontée.',
                        'choices' => [
                            ['choice_text' => 'Il a peu de temps pour absorber une baisse : il vaut mieux limiter les actifs risqués', 'is_correct' => true],
                            ['choice_text' => 'Il peut prendre plus de risques, car une baisse sera vite oubliée', 'is_correct' => false],
                            ['choice_text' => 'Il doit investir en actions, qui rapportent plus sur un an', 'is_correct' => false],
                            ['choice_text' => 'L’horizon court n’a pas d’effet sur le choix des actifs, seul le montant à placer compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une allocation cible ?',
                        'explanation' => 'La cible sert de point de comparaison : on voit vite quand le portefeuille s’en éloigne.',
                        'choices' => [
                            ['choice_text' => 'Obtenir un rendement fixé à l’avance par la banque', 'is_correct' => false],
                            ['choice_text' => 'Éviter d’avoir à suivre l’évolution des marchés', 'is_correct' => false],
                            ['choice_text' => 'Payer moins de frais de transaction sur chaque ordre', 'is_correct' => false],
                            ['choice_text' => 'Avoir un repère pour contrôler la composition et le niveau de risque du portefeuille', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim a investi 6 000 MAD en actions et 4 000 MAD en obligations. Quelle est la pondération des actions ?',
                        'explanation' => '6 000 / (6 000 + 4 000) = 0,6, soit 60 %. Les 40 % restants sont en obligations.',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Suivi et rééquilibrage',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le rééquilibrage d’un portefeuille ?',
                        'explanation' => 'Quand les pondérations ont dérivé, on vend un peu de ce qui a trop pris de poids et on renforce le reste.',
                        'choices' => [
                            ['choice_text' => 'Vendre tous ses actifs pour repartir d’un portefeuille vide', 'is_correct' => false],
                            ['choice_text' => 'Ramener les pondérations du portefeuille vers leurs niveaux cibles', 'is_correct' => true],
                            ['choice_text' => 'Changer de gestionnaire quand la performance est décevante', 'is_correct' => false],
                            ['choice_text' => 'Renforcer l’actif qui a le plus monté pour profiter de son élan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sans aucune opération, les pondérations d’un portefeuille peuvent changer. Qu’est-ce qui les fait bouger ?',
                        'explanation' => 'Une classe qui monte plus vite que les autres prend du poids, même si tu n’as rien touché.',
                        'choices' => [
                            ['choice_text' => 'Le gestionnaire modifie le nombre de titres à chaque clôture de bourse', 'is_correct' => false],
                            ['choice_text' => 'Les banques ajustent chaque trimestre la valeur des titres détenus', 'is_correct' => false],
                            ['choice_text' => 'Les titres changent de classe d’actifs au bout d’un an', 'is_correct' => false],
                            ['choice_text' => 'Les prix des classes d’actifs évoluent à des rythmes différents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Les actions d’un portefeuille 60/40 montent fortement. Que peut-il arriver ?',
                        'explanation' => 'Si les actions montent plus vite, elles occupent une plus grande part de la valeur totale.',
                        'choices' => [
                            ['choice_text' => 'Les actions représentent désormais plus de 60 % du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Les obligations finissent par peser autant que les actions', 'is_correct' => false],
                            ['choice_text' => 'Le poids des actions tombe sous les 60 % malgré la hausse', 'is_correct' => false],
                            ['choice_text' => 'Les pondérations ne bougent pas tant qu’on ne vend rien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le suivi régulier d’un portefeuille ?',
                        'explanation' => 'Le suivi sert à contrôler que tout reste dans les clous, pas à deviner l’avenir.',
                        'choices' => [
                            ['choice_text' => 'À prévoir avec précision le prochain mouvement des marchés', 'is_correct' => false],
                            ['choice_text' => 'À repérer le titre qui montera le plus le mois suivant', 'is_correct' => false],
                            ['choice_text' => 'À vérifier qu’il reste cohérent avec les objectifs et les contraintes', 'is_correct' => true],
                            ['choice_text' => 'À éviter que le portefeuille subisse la moindre baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’inconvénient d’un rééquilibrage trop fréquent ?',
                        'explanation' => 'Chaque opération coûte des frais. À force de rééquilibrer pour trois fois rien, on perd plus qu’on ne gagne.',
                        'choices' => [
                            ['choice_text' => 'Le portefeuille s’éloigne de son allocation cible', 'is_correct' => false],
                            ['choice_text' => 'Le risque du portefeuille devient impossible à mesurer', 'is_correct' => false],
                            ['choice_text' => 'Les coûts de transaction augmentent et rognent le rendement', 'is_correct' => true],
                            ['choice_text' => 'Les actifs deviennent moins liquides sur le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En quoi consiste un rééquilibrage périodique ?',
                        'explanation' => 'Périodique = selon un calendrier. Le déclenchement par écart, c’est la méthode des seuils.',
                        'choices' => [
                            ['choice_text' => 'On rééquilibre à dates fixes, par exemple chaque trimestre ou chaque année', 'is_correct' => true],
                            ['choice_text' => 'On rééquilibre dès qu’une pondération s’écarte de plus de 5 points de sa cible', 'is_correct' => false],
                            ['choice_text' => 'On rééquilibre quand le gestionnaire anticipe une chute des marchés', 'is_correct' => false],
                            ['choice_text' => 'On rééquilibre à chaque nouvel apport d’argent, quel qu’en soit le montant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les seuils de rééquilibrage ?',
                        'explanation' => 'Exemple : on rééquilibre seulement si les actions s’écartent de plus de 5 points de la cible. Cela évite les opérations inutiles.',
                        'choices' => [
                            ['choice_text' => 'À fixer le rendement minimal que le portefeuille doit atteindre', 'is_correct' => false],
                            ['choice_text' => 'À limiter le prix maximal auquel on peut acheter un titre', 'is_correct' => false],
                            ['choice_text' => 'À déclencher une vente à chaque variation de cours', 'is_correct' => false],
                            ['choice_text' => 'À n’agir que lorsque l’écart d’une pondération devient assez important', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Samira reçoit une prime et veut la placer. Comment peut-elle rééquilibrer sans rien vendre ?',
                        'explanation' => 'Un apport permet de remonter les actifs sous-pondérés sans vendre ni payer de frais de vente.',
                        'choices' => [
                            ['choice_text' => 'En l’investissant dans l’actif qui a le mieux performé récemment', 'is_correct' => false],
                            ['choice_text' => 'En l’investissant dans les actifs dont le poids est inférieur à la cible', 'is_correct' => true],
                            ['choice_text' => 'En la gardant en liquidités tant que les marchés baissent', 'is_correct' => false],
                            ['choice_text' => 'En l’investissant à parts égales dans chaque actif du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que risque-t-on si on ne rééquilibre jamais un portefeuille ?',
                        'explanation' => 'Avec les années, la classe la plus performante prend le dessus et le portefeuille devient plus (ou moins) risqué que voulu.',
                        'choices' => [
                            ['choice_text' => 'Le portefeuille reste exactement dans son allocation d’origine', 'is_correct' => false],
                            ['choice_text' => 'Le profil de risque dérive peu à peu loin de celui prévu au départ', 'is_correct' => true],
                            ['choice_text' => 'Les frais de gestion augmentent à chaque pondération non respectée', 'is_correct' => false],
                            ['choice_text' => 'Le rendement devient fixe, car les pondérations ne bougent plus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que regarder avant de rééquilibrer ?',
                        'explanation' => 'Rééquilibrer a un prix : frais, impôts éventuels. On vérifie que l’écart justifie vraiment l’opération.',
                        'choices' => [
                            ['choice_text' => 'Le titre qui a le plus augmenté, pour le renforcer en priorité', 'is_correct' => false],
                            ['choice_text' => 'Les actualités du jour et l’avis des analystes sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de titres détenus, qui doit rester celui de l’achat initial', 'is_correct' => false],
                            ['choice_text' => 'Les coûts, la fiscalité et la taille de l’écart par rapport aux cibles', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Performance d’un portefeuille',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la performance d’un portefeuille ?',
                        'explanation' => 'Performance = ce que le portefeuille a gagné ou perdu, en comptant aussi les revenus encaissés.',
                        'choices' => [
                            ['choice_text' => 'L’évolution de sa valeur, revenus (dividendes, coupons) compris', 'is_correct' => true],
                            ['choice_text' => 'Le montant total investi depuis l’ouverture du compte', 'is_correct' => false],
                            ['choice_text' => 'Le rendement promis par le gestionnaire au départ', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’opérations réalisées pendant la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la comparaison de la performance avec une référence ?',
                        'explanation' => '+6 % peut être excellent si le marché a fait +2 %, et décevant s’il a fait +12 %.',
                        'choices' => [
                            ['choice_text' => 'À garantir que le portefeuille fera mieux que la référence', 'is_correct' => false],
                            ['choice_text' => 'À remplacer les objectifs personnels de l’investisseur par ceux du marché', 'is_correct' => false],
                            ['choice_text' => 'À juger si le résultat est bon par rapport à un objectif ou un marché comparable', 'is_correct' => true],
                            ['choice_text' => 'À supprimer le risque pris par le portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un benchmark ?',
                        'explanation' => 'Benchmark = indice de référence. On y compare son portefeuille pour savoir où l’on se situe.',
                        'choices' => [
                            ['choice_text' => 'Un rendement minimum garanti par le gestionnaire', 'is_correct' => false],
                            ['choice_text' => 'Un objectif de gain fixé par l’investisseur pour l’année', 'is_correct' => false],
                            ['choice_text' => 'Une référence de comparaison, comme un indice de marché', 'is_correct' => true],
                            ['choice_text' => 'Un document qui détaille les frais du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim compare son portefeuille d’obligations à un indice d’actions. Quel est le problème ?',
                        'explanation' => 'Un bon benchmark ressemble au portefeuille : mêmes types d’actifs, même niveau de risque.',
                        'choices' => [
                            ['choice_text' => 'La comparaison n’a pas de sens : les deux n’ont pas le même niveau de risque', 'is_correct' => true],
                            ['choice_text' => 'L’indice d’actions est trop connu pour servir de référence', 'is_correct' => false],
                            ['choice_text' => 'Les indices d’actions ne sont pas publiés assez souvent', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut pas comparer deux portefeuilles qui n’ont pas le même nombre de titres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui réduit la performance nette d’un portefeuille ?',
                        'explanation' => 'La performance nette, c’est ce qui reste après frais. Les frais de gestion et de transaction viennent donc directement la diminuer.',
                        'choices' => [
                            ['choice_text' => 'Les dividendes réinvestis dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'La définition d’un benchmark adapté', 'is_correct' => false],
                            ['choice_text' => 'La mise en place d’une allocation cible', 'is_correct' => false],
                            ['choice_text' => 'Les frais de gestion et les coûts de transaction payés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le fonds A a rapporté +10 % avec de fortes variations, le fonds B +8 % avec de faibles variations. Que peut-on dire ?',
                        'explanation' => 'Un gain plus élevé obtenu avec plus de risque ne se compare pas tel quel. On regarde rendement et risque ensemble.',
                        'choices' => [
                            ['choice_text' => 'A est meilleur, car le rendement est le seul critère de jugement', 'is_correct' => false],
                            ['choice_text' => 'A n’est pas forcément meilleur : son rendement s’accompagne d’un risque plus fort', 'is_correct' => true],
                            ['choice_text' => 'B est meilleur dès que son risque est plus faible, quel que soit le rendement', 'is_correct' => false],
                            ['choice_text' => 'A et B sont équivalents, car la volatilité n’influence pas le rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une performance positive ?',
                        'explanation' => 'Positive veut simplement dire que la valeur a augmenté. Battre son benchmark, c’est autre chose.',
                        'choices' => [
                            ['choice_text' => 'Un rendement supérieur à celui du benchmark', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la valeur du portefeuille sur la période mesurée', 'is_correct' => true],
                            ['choice_text' => 'Un risque inférieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille dont les frais sont inférieurs à la moyenne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un titre acheté 100 MAD vaut 104 MAD un an plus tard et a versé 3 MAD de dividendes. Quel est son rendement total ?',
                        'explanation' => 'Gain en cours : 104 − 100 = 4 MAD, plus 3 MAD de dividendes = 7 MAD, soit 7 % de 100 MAD.',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '7 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds affiche +25 % sur trois mois. Pourquoi faut-il rester prudent ?',
                        'explanation' => 'Trois mois, c’est trop court pour juger : une bonne période ne fait pas un bon gestionnaire.',
                        'choices' => [
                            ['choice_text' => 'Ce résultat peut venir de conditions de marché passagères ou du hasard', 'is_correct' => true],
                            ['choice_text' => 'Il prouve que le gestionnaire bat le marché sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Il annonce le même niveau de performance pour les années suivantes', 'is_correct' => false],
                            ['choice_text' => 'Il signifie que le risque pris était nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une analyse de performance régulière ?',
                        'explanation' => 'On regarde ce qui a marché ou non, et si le résultat va dans le sens des objectifs fixés au départ.',
                        'choices' => [
                            ['choice_text' => 'Prédire avec précision les résultats de la période suivante', 'is_correct' => false],
                            ['choice_text' => 'Choisir le titre qui rapportera le plus le mois prochain', 'is_correct' => false],
                            ['choice_text' => 'Comprendre d’où viennent les résultats et vérifier qu’ils collent aux objectifs', 'is_correct' => true],
                            ['choice_text' => 'Justifier les frais de gestion facturés par le gestionnaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Discipline et comportement de l’investisseur',
                'description' => '',
                'questions' => [
                    [
                        'question' => 'Les marchés chutent et Youssef vend dans la panique. Quel est le problème ?',
                        'explanation' => 'La peur pousse à vendre au pire moment. Une stratégie décidée à froid aide à ne pas céder.',
                        'choices' => [
                            ['choice_text' => 'Il n’y en a pas : vendre tôt permet d’éviter les pertes suivantes', 'is_correct' => false],
                            ['choice_text' => 'Il aurait dû acheter davantage, car une baisse annonce une reprise rapide', 'is_correct' => false],
                            ['choice_text' => 'Il suit ses émotions au lieu de sa stratégie, ce qui mène à des décisions impulsives', 'is_correct' => true],
                            ['choice_text' => 'Il vend à raison : la panique est un bon signal pour réduire son risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Acheter un actif parce qu’il vient de beaucoup monter, c’est un exemple de quoi ?',
                        'explanation' => 'Courir après ce qui a déjà monté, c’est un réflexe de mouton. Rééquilibrer ferait plutôt l’inverse.',
                        'choices' => [
                            ['choice_text' => 'Poursuivre la performance récente, en suivant la foule', 'is_correct' => true],
                            ['choice_text' => 'Appliquer une allocation stratégique définie à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Diversifier son portefeuille entre plusieurs classes d’actifs', 'is_correct' => false],
                            ['choice_text' => 'Rééquilibrer son portefeuille vers sa répartition cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une stratégie d’investissement écrite ?',
                        'explanation' => 'Quand tout s’agite, relire ce qu’on avait décidé à tête reposée évite de céder à l’émotion.',
                        'choices' => [
                            ['choice_text' => 'À obliger le gestionnaire à atteindre un rendement minimum', 'is_correct' => false],
                            ['choice_text' => 'À prévoir les dates des prochaines hausses de la Bourse', 'is_correct' => false],
                            ['choice_text' => 'À interdire tout changement du portefeuille pendant dix ans', 'is_correct' => false],
                            ['choice_text' => 'À garder un cadre pour décider calmement, même quand les marchés bougent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’aversion aux pertes ?',
                        'explanation' => 'Perdre 100 MAD fait plus mal que gagner 100 MAD ne fait plaisir. Ce biais pousse à de mauvaises décisions.',
                        'choices' => [
                            ['choice_text' => 'Refuser les placements dont le rendement est inférieur à l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Ressentir une perte plus fortement qu’un gain de même montant', 'is_correct' => true],
                            ['choice_text' => 'Chercher à compenser une perte par un gain équivalent sur un autre titre', 'is_correct' => false],
                            ['choice_text' => 'Éviter les investissements qui coûtent des frais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le danger de vendre dès qu’une forte baisse survient ?',
                        'explanation' => 'Tant qu’on n’a pas vendu, la perte n’est que sur le papier. En vendant, on la rend définitive.',
                        'choices' => [
                            ['choice_text' => 'Payer des frais plus élevés sur les actifs qui ont baissé', 'is_correct' => false],
                            ['choice_text' => 'Transformer une perte temporaire en perte réelle et manquer une éventuelle reprise', 'is_correct' => true],
                            ['choice_text' => 'Voir ses autres placements baisser à leur tour par effet de contagion', 'is_correct' => false],
                            ['choice_text' => 'Devoir rembourser la banque pour les titres vendus à perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de fixer ses règles de décision avant une période agitée ?',
                        'explanation' => 'On décide à froid, quand on est calme, pour ne pas improviser en pleine tempête.',
                        'choices' => [
                            ['choice_text' => 'Prévoir à l’avance la date et l’ampleur de la prochaine baisse', 'is_correct' => false],
                            ['choice_text' => 'Bénéficier de frais réduits pendant les périodes de forte activité', 'is_correct' => false],
                            ['choice_text' => 'Être sûr de revendre au plus haut avant la chute', 'is_correct' => false],
                            ['choice_text' => 'Limiter les décisions impulsives prises sous le coup de l’émotion', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un ami te conseille un fonds parce qu’il a fait +30 % l’an dernier. Que lui répondre ?',
                        'explanation' => 'Le passé récent n’annonce pas l’avenir, dans un sens comme dans l’autre. On juge un fonds sur la durée, son risque et ses frais.',
                        'choices' => [
                            ['choice_text' => 'Une bonne année passée ne prédit pas la suivante ; regardons aussi son risque', 'is_correct' => true],
                            ['choice_text' => 'Fonce : un fonds en forme garde son avance sur les autres', 'is_correct' => false],
                            ['choice_text' => 'Évite-le : un fonds qui a monté de 30 % va forcément baisser l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Regarde surtout son rendement du dernier mois, plus parlant qu’un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut conduire à une concentration excessive ?',
                        'explanation' => 'L’attachement à un titre pousse à lui donner trop de place. Les trois autres habitudes sont des garde-fous.',
                        'choices' => [
                            ['choice_text' => 'Répartir son épargne entre plusieurs classes d’actifs et plusieurs pays', 'is_correct' => false],
                            ['choice_text' => 'Fixer à l’avance une limite de pondération pour chaque actif', 'is_correct' => false],
                            ['choice_text' => 'Mettre une grosse part de son épargne dans l’entreprise qui nous plaît', 'is_correct' => true],
                            ['choice_text' => 'Rééquilibrer le portefeuille à intervalles réguliers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’apporte la discipline à un investisseur ?',
                        'explanation' => 'La discipline, c’est tenir son plan quand les émotions poussent à en changer. Elle ne prédit rien, mais elle évite des erreurs.',
                        'choices' => [
                            ['choice_text' => 'Elle lui permet d’anticiper les marchés mieux que les professionnels', 'is_correct' => false],
                            ['choice_text' => 'Elle fait monter la valeur de ses actifs sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'Elle l’aide à suivre sa stratégie même quand les marchés s’agitent', 'is_correct' => true],
                            ['choice_text' => 'Elle le dispense de revoir son portefeuille avec le temps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche convient à un investisseur débutant ?',
                        'explanation' => 'Pour débuter : diversifier, rester simple, viser ses objectifs. Courir après les gains rapides coûte cher.',
                        'choices' => [
                            ['choice_text' => 'Construire un portefeuille diversifié, en fonction de ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Concentrer son capital sur la valeur du moment la plus commentée', 'is_correct' => false],
                            ['choice_text' => 'Suivre les conseils du moment sur les réseaux pour saisir les bonnes occasions', 'is_correct' => false],
                            ['choice_text' => 'Vendre et racheter souvent pour profiter de chaque variation', 'is_correct' => false],
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
