<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WealthManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'wealth-management')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 30, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Comprendre les objectifs et le profil d\'un client patrimonial',
                'description' => 'Évaluer les objectifs, l\'horizon et la tolérance au risque d\'un client avant de construire une stratégie patrimoniale.',
                'questions' => [
                    [
                        'question' => 'Karim a 32 ans et n’aura pas besoin de son épargne avant 15 ans. Avant de choisir son allocation, que faut-il encore évaluer ?',
                        'explanation' => 'Un horizon long aide, mais il ne suffit pas : il faut savoir si Karim supportera de voir son portefeuille perdre de la valeur sans paniquer. C’est la base de son profil de risque.',
                        'choices' => [
                            ['choice_text' => 'Sa capacité à supporter des pertes temporaires', 'is_correct' => true],
                            ['choice_text' => 'Le rendement passé de l’indice boursier le plus connu', 'is_correct' => false],
                            ['choice_text' => 'Le nom de la société de gestion la plus réputée', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de produits qu’il détient déjà', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira veut acheter sa résidence principale dans 18 mois avec cette épargne. Pourquoi placer cette somme surtout en actions est-il risqué ?',
                        'explanation' => 'L’argent doit être là à une date précise, dans 18 mois. Si la Bourse chute juste avant, Samira n’aura plus assez pour payer. Pour un projet proche, on privilégie la stabilité.',
                        'choices' => [
                            ['choice_text' => 'Les actions rapportent un intérêt fixe, trop faible pour ce projet', 'is_correct' => false],
                            ['choice_text' => 'Les actions ne peuvent pas être revendues avant plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du marché juste avant l’achat réduirait la somme disponible', 'is_correct' => true],
                            ['choice_text' => 'Les actions sont remboursées à une date fixe, ce qui bloquerait l’argent jusqu’au projet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef dit qu’il supporterait une baisse de 20 % car il est sûr que le marché remontera vite. Que faut-il vérifier en plus ?',
                        'explanation' => 'Accepter une baisse dans sa tête, c’est la tolérance au risque. Il reste à vérifier la capacité : le budget de Youssef tient-il encore si son portefeuille perd 20 % ?',
                        'choices' => [
                            ['choice_text' => 'Si le rendement moyen de la Bourse est resté positif sur les dix dernières années', 'is_correct' => false],
                            ['choice_text' => 'S’il peut encaisser cette perte sans toucher à ses dépenses ni à ses projets', 'is_correct' => true],
                            ['choice_text' => 'S’il connaît le nom des gérants des fonds proposés', 'is_correct' => false],
                            ['choice_text' => 'S’il préfère les placements de son pays à ceux de l’étranger', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia veut une réserve de sécurité d’ici deux ans et prépare aussi sa retraite dans vingt ans. Que lui conseiller ?',
                        'explanation' => 'Deux dates, deux besoins : l’argent de dans deux ans doit rester stable et disponible, celui de dans vingt ans peut supporter plus de fluctuations. Une poche par objectif rend le tout plus lisible.',
                        'choices' => [
                            ['choice_text' => 'Tout placer dans un seul produit pour simplifier le suivi', 'is_correct' => false],
                            ['choice_text' => 'Appliquer aux deux objectifs le même niveau de risque', 'is_correct' => false],
                            ['choice_text' => 'Séparer son argent en deux poches, avec un risque adapté à chaque horizon', 'is_correct' => true],
                            ['choice_text' => 'Attendre la retraite pour décider de son allocation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client veut « beaucoup de croissance, mais aucune baisse de valeur ». Où est le problème ?',
                        'explanation' => 'Plus on espère gagner, plus on accepte que la valeur bouge, y compris vers le bas. Le conseiller aide le client à choisir son compromis ; il ne peut pas promettre le beurre et l’argent du beurre.',
                        'choices' => [
                            ['choice_text' => 'Les placements à forte croissance sont réservés aux clients très fortunés', 'is_correct' => false],
                            ['choice_text' => 'La diversification n’a plus d’intérêt dès que l’on vise la croissance', 'is_correct' => false],
                            ['choice_text' => 'Le conseiller doit d’abord connaître l’âge exact du client', 'is_correct' => false],
                            ['choice_text' => 'Un fort rendement espéré va avec un risque de baisse : ses deux souhaits se contredisent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une famille a déjà mis de côté trois ans de dépenses courantes. Le reste de son patrimoine financier servira dans quinze ans. Que peut-on en déduire ?',
                        'explanation' => 'Une réserve de dépenses doit rester disponible et stable. L’argent qui ne servira que dans quinze ans a le temps de traverser des hauts et des bas : il peut être plus exposé.',
                        'choices' => [
                            ['choice_text' => 'Les deux parts doivent suivre exactement la même allocation, quels que soient leurs horizons', 'is_correct' => false],
                            ['choice_text' => 'La part prévue pour dans quinze ans peut accepter plus de risque que la réserve', 'is_correct' => true],
                            ['choice_text' => 'La réserve de dépenses doit être placée surtout en actions pour mieux rapporter', 'is_correct' => false],
                            ['choice_text' => 'L’horizon de placement n’a pas d’effet sur le choix des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après un changement de poste, Hicham aura des revenus très irréguliers. Que doit-on revoir en premier ?',
                        'explanation' => 'Quand les revenus deviennent moins prévisibles, on supporte moins bien une baisse et on a plus souvent besoin de cash. Le profil doit être refait.',
                        'choices' => [
                            ['choice_text' => 'Le rendement des actions qu’il détient depuis le début de l’année', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de lignes de son portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité à supporter le risque et ses besoins de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le choix de la société qui gère son fonds', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un entretien, pourquoi demander au client comment il a réagi à ses pertes passées ?',
                        'explanation' => 'Quelqu’un qui a tout vendu en panique lors d’un krach n’a pas le même rapport au risque que celui qui a gardé ses positions. L’historique complète le questionnaire, sans remplacer l’analyse des objectifs.',
                        'choices' => [
                            ['choice_text' => 'Cela permet de prévoir avec précision les rendements futurs de ses placements', 'is_correct' => false],
                            ['choice_text' => 'Cela remplace l’étude de ses objectifs et de son horizon', 'is_correct' => false],
                            ['choice_text' => 'Cela sert à calculer la fiscalité de ses placements', 'is_correct' => false],
                            ['choice_text' => 'Cela montre comment il vit vraiment le risque, au-delà de ce qu’il déclare', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Leïla veut payer les études de sa fille dans quatre ans avec une somme déjà épargnée. Qu’est-ce qui compte le plus dans son choix de placement ?',
                        'explanation' => 'À quatre ans d’une dépense connue, une grosse perte juste avant l’échéance ferait mal. La stabilité du capital passe donc avant la recherche de performance.',
                        'choices' => [
                            ['choice_text' => 'Chercher le rendement le plus haut, même si la valeur fluctue beaucoup', 'is_correct' => false],
                            ['choice_text' => 'Protéger le capital pour qu’il soit bien là à la date prévue', 'is_correct' => true],
                            ['choice_text' => 'Détenir le plus grand nombre de titres possible', 'is_correct' => false],
                            ['choice_text' => 'Suivre la performance de l’indice sur la dernière semaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour relier les objectifs d’un client à ses placements, de quoi le conseiller a-t-il besoin ?',
                        'explanation' => 'On ne peut pas juger un portefeuille isolément : il faut voir tout le bilan, dettes et projets compris, pour savoir si les placements servent les objectifs.',
                        'choices' => [
                            ['choice_text' => 'D’une vue d’ensemble de ses actifs, de ses dettes, de ses revenus et de ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Du relevé de son compte courant du mois dernier', 'is_correct' => false],
                            ['choice_text' => 'De la liste de ses actions et de leur performance depuis un an', 'is_correct' => false],
                            ['choice_text' => 'De sa dernière déclaration de revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma veut un portefeuille très dynamique, mais elle utilisera une grosse partie de son argent pour un projet dans un an. Quelle est la première question à lui poser ?',
                        'explanation' => 'Avant de parler performance, il faut connaître le besoin : combien, et pour quand. C’est lui qui fixe la part d’argent qu’on peut risquer.',
                        'choices' => [
                            ['choice_text' => 'Quel est le secteur d’activité le plus porteur du moment en Bourse ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle action a le plus monté cette semaine ?', 'is_correct' => false],
                            ['choice_text' => 'De quelle somme aura-t-elle besoin, et à quelle date exacte ?', 'is_correct' => true],
                            ['choice_text' => 'Quel fonds a obtenu le meilleur rendement sur un an ?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Construire une allocation d\'actifs cohérente',
                'description' => 'Mettre en relation objectifs, horizon et profil de risque pour répartir un patrimoine entre plusieurs classes d\'actifs.',
                'questions' => [
                    [
                        'question' => 'Un patrimoine de 500 000 € est réparti à 60 % en obligations et 40 % en actions. Quelle est la valeur investie en actions ?',
                        'explanation' => '40 % de 500 000 € correspondent à 200 000 €. Le calcul est 500 000 × 0,40 = 200 000 €.',
                        'choices' => [
                            ['choice_text' => '200 000 €', 'is_correct' => true],
                            ['choice_text' => '250 000 €', 'is_correct' => false],
                            ['choice_text' => '300 000 €', 'is_correct' => false],
                            ['choice_text' => '400 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur prudent doit avoir de l’argent disponible dans deux ans et prépare aussi un projet pour dans quinze ans. Quelle construction est la plus logique ?',
                        'explanation' => 'Chaque horizon a son propre niveau de risque acceptable. À deux ans on cherche la stabilité et la disponibilité ; à quinze ans on peut supporter plus de hauts et de bas.',
                        'choices' => [
                            ['choice_text' => 'Tout en actions, puisque le projet lointain compensera largement les pertes du projet à deux ans', 'is_correct' => false],
                            ['choice_text' => 'Tout en placements bloqués, pour ne pas être tenté de vendre', 'is_correct' => false],
                            ['choice_text' => 'La même répartition pour les deux, calée sur l’objectif le plus lointain', 'is_correct' => false],
                            ['choice_text' => 'Une poche stable pour dans deux ans, une poche plus dynamique pour dans quinze ans', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans le portefeuille de Mehdi, les actions pesaient 40 %. Elles ont beaucoup monté et pèsent maintenant 55 %, sans qu’il ait rien acheté. Que s’est-il passé ?',
                        'explanation' => 'Quand un actif monte plus que les autres, son poids grossit : c’est la dérive du portefeuille. Sans rééquilibrage, on porte plus de risque que prévu.',
                        'choices' => [
                            ['choice_text' => 'Son portefeuille est devenu plus diversifié, car les actions ont beaucoup monté', 'is_correct' => false],
                            ['choice_text' => 'Son risque global a baissé, puisque la valeur totale a augmenté', 'is_correct' => false],
                            ['choice_text' => 'Son exposition au risque des actions a augmenté, sans décision de sa part', 'is_correct' => true],
                            ['choice_text' => 'Son allocation cible est passée d’elle-même à 55 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une allocation stratégique fixée à l’avance ?',
                        'explanation' => 'L’allocation stratégique est la boussole du portefeuille : on la fixe selon les objectifs et le profil, puis on s’y tient. Elle ne promet ni rendement ni absence de perte.',
                        'choices' => [
                            ['choice_text' => 'À assurer un rendement positif, même en cas de krach', 'is_correct' => false],
                            ['choice_text' => 'À prévoir précisément l’évolution des marchés pour les douze prochains mois', 'is_correct' => false],
                            ['choice_text' => 'À donner un cadre stable aux décisions et à éviter d’improviser', 'is_correct' => true],
                            ['choice_text' => 'À éliminer le risque de perte sur la partie actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille prépare une retraite dans vingt ans. Pourquoi peut-il accepter plus de fluctuations qu’un projet prévu dans six mois ?',
                        'explanation' => 'Vingt ans, c’est le temps de traverser plusieurs hausses et baisses de marché. Pour un projet dans six mois, une chute n’a pas le temps d’être rattrapée.',
                        'choices' => [
                            ['choice_text' => 'Les actions ne présentent plus de risque après dix ans de détention continue sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Il a le temps de laisser passer les baisses avant d’avoir besoin de l’argent', 'is_correct' => true],
                            ['choice_text' => 'Les taux d’intérêt montent mécaniquement quand l’horizon s’allonge', 'is_correct' => false],
                            ['choice_text' => 'Les frais de gestion diminuent quand l’horizon s’allonge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hamza veut mettre tout son patrimoine financier dans l’action d’une seule société qu’il connaît bien. Quel est le principal problème ?',
                        'explanation' => 'Même bien connue, une entreprise peut avoir un problème (scandale, mauvais résultats) et entraîner tout le patrimoine avec elle. Mieux vaut répartir.',
                        'choices' => [
                            ['choice_text' => 'Une diversification trop poussée entre les secteurs', 'is_correct' => false],
                            ['choice_text' => 'Tout son risque est concentré sur une seule entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un manque de liquidité sur le marché des actions de cette société', 'is_correct' => false],
                            ['choice_text' => 'Une garantie du capital qui limite son rendement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une allocation comporte 50 % d’actions, 30 % d’obligations et 20 % d’actifs monétaires. Quelle part représentent les placements autres que les actions ?',
                        'explanation' => 'Les placements autres que les actions représentent 30 % + 20 %, soit 50 % du portefeuille.',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '80 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira hésite entre deux portefeuilles dont le rendement espéré est proche. Que doit-elle comparer d’autre ?',
                        'explanation' => 'Le rendement espéré n’est qu’un critère. À rendement proche, le risque, la facilité à récupérer son argent et les frais font la différence.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de titres détenus dans chaque portefeuille', 'is_correct' => false],
                            ['choice_text' => 'La performance de chacun au cours du dernier mois', 'is_correct' => false],
                            ['choice_text' => 'Le risque, la liquidité, les frais et ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'La notoriété de la société de gestion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille contient 300 000 € d’actions, 100 000 € d’obligations et 100 000 € de liquidités. Quel est son poids en actions ?',
                        'explanation' => 'Le patrimoine financier total vaut 500 000 €. La part actions est donc 300 000 / 500 000 = 60 %.',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => true],
                            ['choice_text' => '75 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand on construit un portefeuille, que vaut-il mieux décider en premier ?',
                        'explanation' => 'La répartition entre grandes classes d’actifs fixe le niveau de risque d’ensemble. Le choix des titres vient ensuite, à l’intérieur de chaque poche.',
                        'choices' => [
                            ['choice_text' => 'Le titre précis qui sera acheté en premier dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'La répartition entre actions, obligations et liquidités', 'is_correct' => true],
                            ['choice_text' => 'L’intermédiaire qui passera les ordres', 'is_correct' => false],
                            ['choice_text' => 'La date du premier versement de dividendes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Diversification et concentration du patrimoine',
                'description' => 'Analyser les bénéfices d\'une diversification réelle et repérer les risques de concentration souvent invisibles.',
                'questions' => [
                    [
                        'question' => 'Un couple possède sa résidence principale, des actions de l’employeur de l’un des deux et des obligations émises par cette même entreprise. Quel risque faut-il surveiller ?',
                        'explanation' => 'Si l’employeur va mal, le salaire, les actions et les obligations souffrent en même temps. Ce risque est invisible quand on regarde chaque placement séparément.',
                        'choices' => [
                            ['choice_text' => 'Un excès de liquidités laissées sur des comptes qui ne rapportent presque rien', 'is_correct' => false],
                            ['choice_text' => 'Une corrélation trop faible entre leurs placements', 'is_correct' => false],
                            ['choice_text' => 'Une concentration sur une seule entreprise, à la fois employeur et émetteur', 'is_correct' => true],
                            ['choice_text' => 'Des frais de gestion qui seraient comptés deux fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Aya détient huit actions, toutes du secteur bancaire. Est-elle bien diversifiée ?',
                        'explanation' => 'Huit banques, c’est un seul pari : celui du secteur. Une crise bancaire ferait baisser presque tous les titres en même temps. Diversifier, c’est varier les sources de risque.',
                        'choices' => [
                            ['choice_text' => 'Pas vraiment : un choc sur le secteur bancaire toucherait presque toutes ses lignes', 'is_correct' => true],
                            ['choice_text' => 'Oui, car les actions de banques évoluent en sens opposé les unes des autres', 'is_correct' => false],
                            ['choice_text' => 'Oui, huit lignes suffisent pour écarter le risque de perte', 'is_correct' => false],
                            ['choice_text' => 'Non, car il faudrait au moins vingt secteurs différents pour que cela compte vraiment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille a 70 % de son patrimoine dans l’immobilier locatif. Elle envisage d’ajouter des actions de foncières cotées. Que doit-elle examiner ?',
                        'explanation' => 'Des foncières cotées restent de l’immobilier. Les ajouter à 70 % de locatif, c’est accentuer la concentration au lieu de la réduire. Et elles ne suppriment pas le risque.',
                        'choices' => [
                            ['choice_text' => 'Le fait que l’immobilier coté soit un placement sans risque', 'is_correct' => false],
                            ['choice_text' => 'La concentration : elle renforce l’immobilier, déjà dominant dans son patrimoine', 'is_correct' => true],
                            ['choice_text' => 'L’obligation de vendre d’abord ses logements loués avant d’acheter ces titres cotés en Bourse', 'is_correct' => false],
                            ['choice_text' => 'La disparition du risque de liquidité grâce à la cotation en Bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux fonds actions de 50 titres chacun ont presque les mêmes secteurs et les mêmes grosses lignes. Détenir les deux rend-il le portefeuille très diversifié ?',
                        'explanation' => 'Ce qui compte, ce n’est pas le nombre de fonds mais ce qu’ils contiennent. Deux fonds qui détiennent les mêmes titres font double emploi.',
                        'choices' => [
                            ['choice_text' => 'Oui, car chaque fonds est géré par une équipe différente', 'is_correct' => false],
                            ['choice_text' => 'Non, car les deux fonds contiennent en grande partie les mêmes positions', 'is_correct' => true],
                            ['choice_text' => 'Oui, car 100 titres au total suffisent à écarter le risque', 'is_correct' => false],
                            ['choice_text' => 'Non, car un fonds de 50 titres est déjà trop dilué pour apporter de la diversification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mounir touche une grosse prime de son employeur et détient déjà des actions de cette société. Quelle question est la plus utile avant de décider ?',
                        'explanation' => 'Salaire, prime et actions viennent de la même source. Si l’entreprise va mal, tout baisse en même temps. Il faut mesurer ce poids avant d’en rajouter.',
                        'choices' => [
                            ['choice_text' => 'Quel est le rendement de cette action depuis le début de l’année, comparé à son indice ?', 'is_correct' => false],
                            ['choice_text' => 'Qui dirige l’entreprise aujourd’hui ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle part de ses revenus et de son patrimoine dépend déjà de cette société ?', 'is_correct' => true],
                            ['choice_text' => 'Combien de produits sa banque propose-t-elle ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Investir dans plusieurs pays peut-il réduire certains risques ?',
                        'explanation' => 'Récession ici, croissance ailleurs : les cycles, les monnaies et les politiques économiques diffèrent. Cela lisse un peu le risque, sans le supprimer.',
                        'choices' => [
                            ['choice_text' => 'Non, car les marchés du monde entier évoluent de manière identique', 'is_correct' => false],
                            ['choice_text' => 'Oui, car les économies n’évoluent pas au même rythme ni au même moment', 'is_correct' => true],
                            ['choice_text' => 'Oui, car un placement à l’étranger assure un rendement positif', 'is_correct' => false],
                            ['choice_text' => 'Non, car investir à l’étranger augmente le risque de change sans rien apporter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina possède cinq actions de la tech, très volatiles, et se dit diversifiée parce qu’elle a cinq lignes. Que lui répondre ?',
                        'explanation' => 'Diversifier, ce n’est pas compter les lignes, c’est varier les risques. Cinq valeurs technologiques réagissent souvent aux mêmes nouvelles.',
                        'choices' => [
                            ['choice_text' => 'Cinq lignes suffisent pour obtenir une diversification complète', 'is_correct' => false],
                            ['choice_text' => 'Cinq lignes du même secteur peuvent chuter ensemble : il faut regarder les risques communs', 'is_correct' => true],
                            ['choice_text' => 'La volatilité s’annule dès que l’on détient cinq titres', 'is_correct' => false],
                            ['choice_text' => 'Le secteur compte peu : seul le nombre de lignes détermine la qualité de la diversification d’un portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert surtout la diversification pour un petit épargnant ?',
                        'explanation' => 'Si une entreprise s’effondre, elle ne pèse que quelques pour cent du total. En revanche, une baisse générale du marché touche quand même le portefeuille.',
                        'choices' => [
                            ['choice_text' => 'À empêcher les marchés financiers de baisser', 'is_correct' => false],
                            ['choice_text' => 'À obtenir un rendement supérieur à celui du marché dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'À se passer d’une épargne de précaution', 'is_correct' => false],
                            ['choice_text' => 'À limiter l’effet d’une mauvaise nouvelle qui toucherait un seul placement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une poche obligataire contient des titres de dix émetteurs différents plutôt que d’un seul. Quel avantage cela apporte-t-il ?',
                        'explanation' => 'Un émetteur en difficulté peut ne pas payer ses intérêts ou son remboursement : c’est le risque de crédit. Avec dix émetteurs, l’accident d’un seul coûte peu. Le risque de taux, lui, reste présent.',
                        'choices' => [
                            ['choice_text' => 'Le rendement de la poche devient supérieur à celui des actions, avec un risque moindre', 'is_correct' => false],
                            ['choice_text' => 'La poche n’est plus sensible aux variations des taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Chaque obligation est remboursée par l’État en cas de défaut', 'is_correct' => false],
                            ['choice_text' => 'Si un émetteur ne rembourse pas, seule une petite partie de la poche est touchée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une famille possède une entreprise non cotée qui représente 45 % de son patrimoine. Que faut-il éviter quand elle définit le reste de son allocation ?',
                        'explanation' => 'La valeur d’une entreprise non cotée fait partie du patrimoine global. Elle peut même concentrer fortement le risque entrepreneurial et professionnel.',
                        'choices' => [
                            ['choice_text' => 'Tenir compte de sa valeur dans le patrimoine global', 'is_correct' => false],
                            ['choice_text' => 'Ignorer cette entreprise parce qu’elle n’est pas cotée', 'is_correct' => true],
                            ['choice_text' => 'Chercher des placements qui ne dépendent pas de son secteur', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la part du patrimoine qu’elle représente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces phrases décrit une vraie diversification ?',
                        'explanation' => 'L’idée est de ne pas mettre tous ses œufs dans le même panier : il faut des placements qui ne réagissent pas de la même façon. Collectionner les produits n’y suffit pas.',
                        'choices' => [
                            ['choice_text' => 'Acheter beaucoup de produits différents sans regarder ce qu’ils contiennent réellement', 'is_correct' => false],
                            ['choice_text' => 'N’acheter que les placements qui ont le mieux performé', 'is_correct' => false],
                            ['choice_text' => 'Écarter les classes d’actifs qui ont moins rapporté récemment', 'is_correct' => false],
                            ['choice_text' => 'Répartir son argent entre des placements dont les risques sont différents', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux placements évoluent presque toujours de la même façon. Les combiner réduit-il beaucoup le risque ?',
                        'explanation' => 'Pour que la diversification marche, il faut que les placements ne bougent pas tout à fait ensemble. Deux placements jumeaux ne se protègent pas l’un l’autre.',
                        'choices' => [
                            ['choice_text' => 'Oui, car le risque se divise par deux dès qu’on ajoute un second placement', 'is_correct' => false],
                            ['choice_text' => 'Oui, car deux placements valent mieux qu’un quelle que soit leur nature', 'is_correct' => false],
                            ['choice_text' => 'Non, car la diversification ne réduit que le risque de taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Non, car s’ils bougent ensemble, ils chutent aussi ensemble', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rééquilibrage et suivi d\'un portefeuille',
                'description' => 'Comprendre quand et comment rééquilibrer un portefeuille sans confondre suivi discipliné et réactions émotionnelles.',
                'questions' => [
                    [
                        'question' => 'Le portefeuille de Samir devait rester à 60 % d’actions et 40 % d’obligations. Après une hausse des actions, il est à 68 % d’actions. Que faire pour le rééquilibrer ?',
                        'explanation' => 'Rééquilibrer, c’est revenir vers la cible. Les actions pèsent 8 points de trop : on en vend un peu, ou on place les nouveaux versements sur les obligations.',
                        'choices' => [
                            ['choice_text' => 'Vendre des actions ou acheter des obligations pour revenir vers 60/40', 'is_correct' => true],
                            ['choice_text' => 'Racheter encore des actions pour profiter de la tendance haussière du marché', 'is_correct' => false],
                            ['choice_text' => 'Vendre des obligations pour acheter encore des actions', 'is_correct' => false],
                            ['choice_text' => 'Ne rien changer, car la cible ne sert qu’au départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En rééquilibrant, Anas doit vendre l’actif qui a le mieux monté. Cette décision est-elle logique ?',
                        'explanation' => 'Une forte hausse fait grossir le poids de l’actif au-delà de la cible. Vendre un peu, c’est rétablir le niveau de risque voulu, pas parier sur une baisse.',
                        'choices' => [
                            ['choice_text' => 'Oui, car il ramène le portefeuille à l’allocation prévue au lieu de courir après la hausse', 'is_correct' => true],
                            ['choice_text' => 'Non, car il faut garder les actifs gagnants jusqu’à ce qu’ils baissent', 'is_correct' => false],
                            ['choice_text' => 'Oui, car un actif qui a bien monté va forcément baisser dans les mois qui suivent, c’est la règle', 'is_correct' => false],
                            ['choice_text' => 'Non, car rééquilibrer consiste à acheter ce qui a monté récemment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi rééquilibre son portefeuille chaque mois, même pour des écarts de 1 %, et paie des frais à chaque fois. Quel est le problème ?',
                        'explanation' => 'Chaque opération coûte. Pour un écart de 1 %, le gain est minuscule et les frais le mangent. D’où l’idée d’un seuil (par exemple 5 points d’écart) ou d’une revue annuelle.',
                        'choices' => [
                            ['choice_text' => 'Il paie des frais de transaction pour un bénéfice minime', 'is_correct' => true],
                            ['choice_text' => 'Il élimine le risque de marché au prix d’un rendement plus faible', 'is_correct' => false],
                            ['choice_text' => 'Il diversifie trop, ce qui diminue son rendement espéré', 'is_correct' => false],
                            ['choice_text' => 'Il rend son portefeuille plus risqué à chaque opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le portefeuille de Yasmine est à 55 % d’actions pour une cible de 50 %. L’écart est faible et les frais de vente sont élevés. Que peut-elle faire ?',
                        'explanation' => 'Un petit écart n’oblige pas à vendre. On peut attendre qu’il grandisse, ou diriger les nouveaux versements vers les obligations pour recoller à la cible sans frais de vente.',
                        'choices' => [
                            ['choice_text' => 'Vendre immédiatement toutes ses actions pour repartir de zéro avec une nouvelle cible', 'is_correct' => false],
                            ['choice_text' => 'Augmenter son risque pour atteindre la cible', 'is_correct' => false],
                            ['choice_text' => 'Supprimer son allocation cible, jugée inutile', 'is_correct' => false],
                            ['choice_text' => 'Attendre un écart plus grand ou utiliser ses prochains versements pour corriger', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence y a-t-il entre rééquilibrer et faire du market timing ?',
                        'explanation' => 'Rééquilibrer se fait selon une règle (cible, seuil, date). Le market timing, c’est deviner le bon moment pour entrer ou sortir, ce qui est très difficile à réussir de façon régulière.',
                        'choices' => [
                            ['choice_text' => 'Rééquilibrer ramène vers une cible fixée d’avance, le market timing parie sur l’évolution des cours', 'is_correct' => true],
                            ['choice_text' => 'Il n’y en a pas : les deux consistent à prévoir les marchés', 'is_correct' => false],
                            ['choice_text' => 'Le market timing suit une règle fixe, le rééquilibrage dépend de l’intuition', 'is_correct' => false],
                            ['choice_text' => 'Le rééquilibrage ne concerne que les obligations, le market timing que les actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après trois jours de baisse en Bourse, un client veut changer toute son allocation. Quelle est la première question à lui poser ?',
                        'explanation' => 'Trois jours de baisse ne changent pas ses objectifs. Si rien n’a changé dans sa vie, l’allocation reste valable : la panique est mauvaise conseillère.',
                        'choices' => [
                            ['choice_text' => 'Ses objectifs ou sa situation ont-ils changé, ou réagit-il juste à la baisse ?', 'is_correct' => true],
                            ['choice_text' => 'Quelle action peut-on acheter dès aujourd’hui pour profiter des cours plus bas ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le titre qui a le plus baissé depuis le début de la semaine ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle banque propose les frais les plus bas ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Peut-on pratiquer une allocation tactique en plus de l’allocation stratégique ?',
                        'explanation' => 'L’allocation stratégique est la référence à long terme. La tactique permet de s’en écarter un peu, dans des limites fixées, pour saisir une opportunité à court terme.',
                        'choices' => [
                            ['choice_text' => 'Non, car une allocation tactique annule la stratégique', 'is_correct' => false],
                            ['choice_text' => 'Oui, sans limite d’écart, pour profiter de toutes les prévisions du moment', 'is_correct' => false],
                            ['choice_text' => 'Oui, à condition de fixer des limites d’écart et des règles claires', 'is_correct' => true],
                            ['choice_text' => 'Oui, car cela garantit le rendement visé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À sa revue annuelle, Imane voit que ses revenus ont nettement augmenté, mais ses objectifs n’ont pas bougé. Qu’est-ce qu’il faut revoir ?',
                        'explanation' => 'Plus de revenus, c’est souvent plus d’épargne possible et plus de marge en cas de coup dur. La revue sert à adapter le portefeuille à cette nouvelle situation.',
                        'choices' => [
                            ['choice_text' => 'Sa capacité d’épargne, et peut-être sa capacité à prendre du risque', 'is_correct' => true],
                            ['choice_text' => 'Le cours de l’action qu’elle préfère depuis plusieurs années, avant toute autre chose', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fonds différents qu’elle détient', 'is_correct' => false],
                            ['choice_text' => 'Ses objectifs, qu’il faut relever dès que les revenus montent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel chiffre simple permet de repérer qu’un portefeuille s’éloigne de sa cible ?',
                        'explanation' => 'Si la cible est 60 % d’actions et que le portefeuille en compte 67 %, l’écart de 7 points signale la dérive. Cet indicateur ne dit pas à lui seul s’il faut agir.',
                        'choices' => [
                            ['choice_text' => 'La performance du portefeuille depuis le début de l’année, comparée à son indice de référence', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de lignes qu’il contient', 'is_correct' => false],
                            ['choice_text' => 'L’écart entre le poids réel de chaque classe d’actifs et son poids cible', 'is_correct' => true],
                            ['choice_text' => 'Le montant total des frais payés à la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hassan retire de l’argent chaque mois pour vivre. Comment cela peut-il l’aider à rééquilibrer son portefeuille ?',
                        'explanation' => 'Pas besoin de tout vendre pour rééquilibrer : en prélevant ses retraits sur ce qui pèse trop, Hassan ramène les poids vers la cible sans frais supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Il peut prélever en priorité sur la classe d’actifs devenue trop lourde', 'is_correct' => true],
                            ['choice_text' => 'Les retraits ne peuvent que le déséquilibrer davantage', 'is_correct' => false],
                            ['choice_text' => 'Les retraits garantissent une meilleure performance du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Les retraits remplacent son besoin de liquidité et dispensent de tout rééquilibrage futur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Liquidité, revenus et préservation du patrimoine',
                'description' => 'Arbitrer entre rendement, liquidité et préservation du capital dans des situations patrimoniales courantes.',
                'questions' => [
                    [
                        'question' => 'Nora, 60 ans, veut financer cinq ans de retraits avec son patrimoine. Quel risque doit-elle surveiller ?',
                        'explanation' => 'Si le marché baisse juste quand elle a besoin d’argent, Nora vend à perte et grignote son capital. D’où l’intérêt de garder une réserve pour ses premières années de retraits.',
                        'choices' => [
                            ['choice_text' => 'Devoir vendre des actifs après une forte baisse du marché', 'is_correct' => true],
                            ['choice_text' => 'Avoir réparti ses placements dans trop de pays', 'is_correct' => false],
                            ['choice_text' => 'Percevoir des dividendes qui seraient imposés', 'is_correct' => false],
                            ['choice_text' => 'Détenir des obligations dont les échéances sont beaucoup trop variées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur veut conserver une réserve immédiatement disponible pour six mois de dépenses. Quel critère est prioritaire pour cette poche ?',
                        'explanation' => 'Cet argent doit pouvoir être récupéré vite et sans perte, par exemple pour une panne ou une facture imprévue. Ici, on laisse le rendement de côté.',
                        'choices' => [
                            ['choice_text' => 'Le rendement le plus élevé possible', 'is_correct' => false],
                            ['choice_text' => 'Une durée de placement longue', 'is_correct' => false],
                            ['choice_text' => 'Une forte part d’actions', 'is_correct' => false],
                            ['choice_text' => 'Disponibilité et stabilité du capital', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille génère 24 000 € de revenus annuels sur un patrimoine de 600 000 €. Quel est le rendement courant simple ?',
                        'explanation' => 'Le rendement courant simple est de 24 000 / 600 000 = 0,04, soit 4 %.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Adil compare deux placements : A rapporte 5 % mais son argent est bloqué, B rapporte 4,5 % et reste disponible. Comment bien choisir ?',
                        'explanation' => 'Un demi-point de rendement en plus ne vaut rien si on doit retirer l’argent avant l’échéance. Le bon choix dépend de ce dont Adil aura besoin, et quand.',
                        'choices' => [
                            ['choice_text' => 'En prenant A, puisque son taux est le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'En prenant B, puisque la disponibilité compte plus que le rendement', 'is_correct' => false],
                            ['choice_text' => 'En regardant aussi s’il aura besoin de cet argent avant la fin du blocage', 'is_correct' => true],
                            ['choice_text' => 'En se fiant au taux affiché seul, puisqu’il résume déjà tous les autres critères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence faut-il faire entre chercher du rendement et préserver son capital ?',
                        'explanation' => 'Une poche peut viser la croissance et accepter des hauts et des bas ; une autre doit simplement rester disponible et stable. Un bon plan sépare les deux.',
                        'choices' => [
                            ['choice_text' => 'Chercher du rendement vise à faire croître l’argent, préserver le capital vise à le garder stable', 'is_correct' => true],
                            ['choice_text' => 'Les deux visent exactement le même résultat avec des mots différents', 'is_correct' => false],
                            ['choice_text' => 'Préserver le capital signifie qu’il est garanti à tout moment par la banque', 'is_correct' => false],
                            ['choice_text' => 'Le rendement ne concerne que les actions et la préservation que les obligations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de Rachid arrive à échéance dans neuf mois, et son remboursement couvrira presque exactement une dépense prévue à cette date. En quoi est-ce pratique ?',
                        'explanation' => 'L’argent arrive juste quand la facture tombe. C’est la logique d’une obligation gardée jusqu’à l’échéance (hors défaut de l’émetteur), plutôt que de revendre des actions un mauvais jour.',
                        'choices' => [
                            ['choice_text' => 'Il n’aura pas à vendre un actif volatil au moment où il a besoin d’argent', 'is_correct' => true],
                            ['choice_text' => 'Le rendement de l’obligation grimpe à l’approche de l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Le risque de défaut de l’émetteur est supprimé', 'is_correct' => false],
                            ['choice_text' => 'Il peut ignorer le reste de son portefeuille jusqu’à la date de la dépense prévue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un retraité veut un revenu régulier tout en gardant une partie de son capital pour plus tard. Que doit-il définir ?',
                        'explanation' => 'Combien retirer par an, pendant combien d’années, avec quels actifs : voilà un plan de retrait. Il évite de vider le capital trop vite.',
                        'choices' => [
                            ['choice_text' => 'Un retrait unique de la moitié de son capital dès la première année', 'is_correct' => false],
                            ['choice_text' => 'Un portefeuille placé en totalité sur l’actif le plus rentable de ces cinq dernières années, quel qu’en soit le risque', 'is_correct' => false],
                            ['choice_text' => 'Un plan de retrait adapté à sa durée de vie prévue et à la composition de son portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Un budget qui ne tient pas compte de l’inflation à venir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma doit régler une dépense dans trois mois. Quel est le danger de placer cet argent dans un actif très volatil ?',
                        'explanation' => 'Trois mois, c’est trop court pour attendre un rebond. Une chute de 15 % le mois précédent, et la dépense ne serait plus couverte.',
                        'choices' => [
                            ['choice_text' => 'L’actif serait impossible à revendre avant plusieurs mois, faute d’acheteurs sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Les dividendes seraient versés trop tard pour la dépense', 'is_correct' => false],
                            ['choice_text' => 'Le capital serait garanti mais sans aucun rendement', 'is_correct' => false],
                            ['choice_text' => 'Une baisse peut survenir avant la date, sans le temps de la rattraper', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une famille détient des actions cotées et une entreprise familiale. Que change l’entreprise pour la gestion de la liquidité ?',
                        'explanation' => 'Une entreprise vaut peut-être beaucoup sur le papier, mais la vendre prend du temps. La famille doit donc garder du cash à côté pour les besoins imprévus.',
                        'choices' => [
                            ['choice_text' => 'Elle fournit de l’argent immédiatement disponible en cas de besoin', 'is_correct' => false],
                            ['choice_text' => 'Une grosse part du patrimoine est difficile à transformer vite en argent', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace la nécessité de détenir de la trésorerie, puisqu’elle a une grande valeur', 'is_correct' => false],
                            ['choice_text' => 'Elle assure à elle seule les dépenses futures de la famille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Amal est freelance et ses revenus arrivent de façon irrégulière. Quelle habitude l’aide le mieux à gérer son argent ?',
                        'explanation' => 'Quand les revenus sont irréguliers, un coussin de trésorerie et un suivi des flux évitent de vendre des placements au mauvais moment.',
                        'choices' => [
                            ['choice_text' => 'Investir chaque euro reçu dès qu’il arrive', 'is_correct' => false],
                            ['choice_text' => 'Dépenser davantage les mois où elle gagne beaucoup', 'is_correct' => false],
                            ['choice_text' => 'Retirer le même montant fixe chaque semaine, sans regarder ses rentrées', 'is_correct' => false],
                            ['choice_text' => 'Suivre ses rentrées et ses sorties, et garder un coussin de trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un placement rapporte 7 % brut. Les frais et les impôts en retirent 1,5 point. Quel est le rendement net ?',
                        'explanation' => '7 % − 1,5 point = 5,5 %. En vrai, l’impôt dépend du pays et du type de revenu, mais ce calcul donne le bon ordre de grandeur.',
                        'choices' => [
                            ['choice_text' => '4,5 %', 'is_correct' => false],
                            ['choice_text' => '5,5 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '8,5 %', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Transmission et gestion des grands objectifs',
                'description' => 'Relier gestion de patrimoine, horizon de vie, transmission et besoins futurs dans des cas pratiques.',
                'questions' => [
                    [
                        'question' => 'Rachid veut payer les études de ses enfants, préparer sa retraite et transmettre une partie de son patrimoine. Comment s’y prendre ?',
                        'explanation' => 'Chaque objectif a sa date et son montant. Les séparer permet d’adapter le risque et la disponibilité de l’argent à chacun.',
                        'choices' => [
                            ['choice_text' => 'Fixer pour chaque objectif son échéance et le montant à prévoir', 'is_correct' => true],
                            ['choice_text' => 'Mettre tous les objectifs dans une même poche, sans préciser de date ni de montant', 'is_correct' => false],
                            ['choice_text' => 'Choisir un seul placement censé tout financer', 'is_correct' => false],
                            ['choice_text' => 'Reporter les objectifs qui ne sont pas encore chiffrés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laila a trente ans devant elle avant d’avoir besoin de son épargne. Peut-elle pour autant ignorer le risque ?',
                        'explanation' => 'Le temps aide à lisser les hauts et les bas, mais il n’évite ni les besoins imprévus en route, ni le stress d’une grosse perte. Le risque ne s’efface pas complètement.',
                        'choices' => [
                            ['choice_text' => 'Oui, car les marchés montent à coup sûr sur trente ans', 'is_correct' => false],
                            ['choice_text' => 'Oui, car le risque disparaît après dix ans de placement', 'is_correct' => false],
                            ['choice_text' => 'Non : elle peut avoir besoin d’argent plus tôt, ou mal supporter de grosses pertes', 'is_correct' => true],
                            ['choice_text' => 'Non, car un horizon long augmente mécaniquement le risque de chaque placement détenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille veut faire une donation dans huit ans. Quelles informations lui faut-il d’abord pour construire cette poche ?',
                        'explanation' => 'Montant et date fixent l’effort d’épargne nécessaire. Si la date peut bouger, la famille supporte mieux les variations de marché.',
                        'choices' => [
                            ['choice_text' => 'Le rendement moyen du marché immobilier au cours de l’année dernière', 'is_correct' => false],
                            ['choice_text' => 'Le montant visé, la date et la souplesse possible sur cette date', 'is_correct' => true],
                            ['choice_text' => 'Le titre qui a le mieux performé ce mois-ci', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de comptes ouverts dans sa banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le projet de Hind approche : l’échéance est maintenant dans deux ans au lieu de dix. Que faire de la poche qui le finance ?',
                        'explanation' => 'Plus l’échéance approche, moins on a le temps de rattraper une baisse. On sécurise donc progressivement, au lieu de tout changer d’un coup.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le risque pour rattraper le temps perdu', 'is_correct' => false],
                            ['choice_text' => 'La laisser telle quelle par principe', 'is_correct' => false],
                            ['choice_text' => 'Réduire peu à peu le risque, par exemple en passant des actions vers des placements stables', 'is_correct' => true],
                            ['choice_text' => 'Tout vendre le jour même sans étudier le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mohamed veut transmettre une partie de son patrimoine à ses enfants, mais il a encore besoin des revenus que ce patrimoine produit. Que doit-il peser ?',
                        'explanation' => 'Donner trop tôt, c’est risquer de manquer d’argent soi-même. Il faut chiffrer ce qu’on transmet, ce dont on a besoin pour vivre, et sur combien d’années.',
                        'choices' => [
                            ['choice_text' => 'Le seul rendement passé de ses placements', 'is_correct' => false],
                            ['choice_text' => 'La seule valeur actuelle de ses actions', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt de supprimer sa réserve de liquidité pour pouvoir donner davantage dès maintenant', 'is_correct' => false],
                            ['choice_text' => 'Le montant à transmettre, ses besoins de revenus et le temps dont il dispose', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de prévoir une marge pour les dépenses imprévues dans un plan patrimonial ?',
                        'explanation' => 'Un toit à réparer ou une panne de voiture ne préviennent pas. Avec une marge de sécurité, on paie sans vendre des actions en pleine baisse.',
                        'choices' => [
                            ['choice_text' => 'À faire monter le rendement attendu du portefeuille grâce à une meilleure répartition', 'is_correct' => false],
                            ['choice_text' => 'À éviter de vendre des placements dans de mauvaises conditions pour payer un imprévu', 'is_correct' => true],
                            ['choice_text' => 'À se dispenser de toute assurance', 'is_correct' => false],
                            ['choice_text' => 'À augmenter le niveau de risque du plan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sofia, 45 ans, reçoit un gros héritage. Laquelle de ces décisions serait une erreur ?',
                        'explanation' => 'Un héritage change tout le bilan d’un coup. Avant de placer, on fait le tour : dettes, actifs, projets, réserve. Se précipiter, c’est faire justement les erreurs que cette démarche évite.',
                        'choices' => [
                            ['choice_text' => 'Lister ses dettes et ses actifs avant de décider de ce qu’elle fera de cet héritage', 'is_correct' => false],
                            ['choice_text' => 'Garder une partie en réserve de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Tout investir dès la semaine suivante, sans avoir fait le point sur ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Se demander quelle part irait à chaque objectif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une retraite sans date de départ fixe, qu’est-ce qui devient plus important dans la construction du portefeuille ?',
                        'explanation' => 'Si la date de départ est souple, on peut retirer moins quand les marchés vont mal et davantage quand ils vont bien. Cette flexibilité compte plus qu’un chiffre précis.',
                        'choices' => [
                            ['choice_text' => 'Disposer d’une échéance unique, fixée à l’avance et que rien ne pourra faire bouger', 'is_correct' => false],
                            ['choice_text' => 'Détenir le plus grand nombre de titres possible', 'is_correct' => false],
                            ['choice_text' => 'Viser le meilleur rendement d’une seule année', 'is_correct' => false],
                            ['choice_text' => 'Pouvoir ajuster les retraits d’une année à l’autre selon les marchés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Après un mariage ou une naissance, que justifie une revue du patrimoine ?',
                        'explanation' => 'Avec un enfant ou un conjoint, les dépenses, les revenus et les priorités ne sont plus les mêmes. Le plan d’avant ne colle peut-être plus.',
                        'choices' => [
                            ['choice_text' => 'L’obligation légale de réinvestir en actions après chaque grand événement familial ou professionnel', 'is_correct' => false],
                            ['choice_text' => 'Le fait que les objectifs, les charges et la protection de la famille ont pu changer', 'is_correct' => true],
                            ['choice_text' => 'L’arrêt de la diversification, devenue inutile', 'is_correct' => false],
                            ['choice_text' => 'Un changement obligatoire de société de gestion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence entre patrimoine financier et patrimoine total ?',
                        'explanation' => 'Le patrimoine financier, ce sont les placements. Le total y ajoute la maison, l’entreprise et les autres biens, moins les dettes. Un choix de placements se juge sur l’ensemble.',
                        'choices' => [
                            ['choice_text' => 'Le patrimoine total ne compte que les placements et les dettes', 'is_correct' => false],
                            ['choice_text' => 'Le patrimoine financier inclut déjà l’immobilier et les biens personnels', 'is_correct' => false],
                            ['choice_text' => 'Le patrimoine total ajoute l’immobilier, l’entreprise et les autres biens, et retire les dettes', 'is_correct' => true],
                            ['choice_text' => 'Le patrimoine total ne tient pas compte des dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un couple a un beau portefeuille mais un gros crédit à taux variable. Que doit contenir l’analyse ?',
                        'explanation' => 'Un crédit à taux variable coûte plus cher si les taux montent. Il fait partie du bilan au même titre que les placements, et peut peser sur la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Le coût du crédit et le risque d’une hausse des taux, pas seulement la performance des placements', 'is_correct' => true],
                            ['choice_text' => 'La seule performance de ses actions sur l’année passée', 'is_correct' => false],
                            ['choice_text' => 'Le montant total du portefeuille, qui compense le crédit', 'is_correct' => false],
                            ['choice_text' => 'Le crédit comme un actif, puisqu’il apporte de la liquidité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fiscalité et décisions patrimoniales',
                'description' => 'Intégrer les considérations fiscales générales sans supposer une législation particulière, et raisonner en rendement net.',
                'questions' => [
                    [
                        'question' => 'Deux placements ont le même rendement brut, mais pas la même fiscalité pour le client. Que faut-il comparer ?',
                        'explanation' => 'Ce qui reste dans la poche du client, c’est le net. À brut égal, le placement le moins taxé ou le moins cher gagne. Les règles précises dépendent du pays.',
                        'choices' => [
                            ['choice_text' => 'Le rendement net après frais et impôts de chaque placement', 'is_correct' => true],
                            ['choice_text' => 'Le rendement brut affiché par chaque produit', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’opérations à effectuer sur l’année', 'is_correct' => false],
                            ['choice_text' => 'La durée de blocage de l’argent proposée par chacun des contrats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds affiche 6 % de rendement avant frais, et ses frais annuels représentent 0,8 point. Quel est son rendement après frais, avant impôts ?',
                        'explanation' => '6 % − 0,8 point = 5,2 %. C’est un calcul simplifié, avant impôts.',
                        'choices' => [
                            ['choice_text' => '4,2 %', 'is_correct' => false],
                            ['choice_text' => '5,2 %', 'is_correct' => true],
                            ['choice_text' => '5,8 %', 'is_correct' => false],
                            ['choice_text' => '6,8 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement affiche 6 % et un autre 4 %. Pourquoi cela ne suffit-il pas pour choisir ?',
                        'explanation' => 'Un 6 % avec de gros frais, un risque élevé ou de l’argent bloqué peut valoir moins qu’un 4 % sûr et disponible. Il faut comparer l’ensemble.',
                        'choices' => [
                            ['choice_text' => 'Un taux plus élevé signale un émetteur plus solide, donc un placement moins risqué', 'is_correct' => false],
                            ['choice_text' => 'Les taux affichés ne sont valables qu’un seul jour', 'is_correct' => false],
                            ['choice_text' => 'Les frais, la fiscalité, le risque et la liquidité peuvent changer le résultat', 'is_correct' => true],
                            ['choice_text' => 'Le taux dépend de la banque et pas du produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client demande « quel est le meilleur placement fiscalement ? » sans dire dans quel pays il vit ni quelle est sa situation. Que lui répondre ?',
                        'explanation' => 'La fiscalité change d’un pays à l’autre, et selon le produit et la personne. Sans ces informations, toute réponse serait un pari.',
                        'choices' => [
                            ['choice_text' => 'Qu’il faut d’abord connaître son pays et sa situation', 'is_correct' => true],
                            ['choice_text' => 'Que le meilleur est le placement au rendement brut le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Qu’une seule règle fiscale vaut pour tous les pays', 'is_correct' => false],
                            ['choice_text' => 'Qu’il suffit de choisir le produit le plus populaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une enveloppe d’investissement permet de reporter l’impôt. Quel avantage cela peut-il donner ?',
                        'explanation' => 'Payer l’impôt plus tard laisse plus d’argent au travail pendant ce temps. Mais l’impôt est seulement décalé, et les placements gardent leur risque.',
                        'choices' => [
                            ['choice_text' => 'Le risque des placements baisse, puisque l’État partage les pertes', 'is_correct' => false],
                            ['choice_text' => 'Le rendement brut des placements augmente grâce à l’avantage fiscal', 'is_correct' => false],
                            ['choice_text' => 'L’impôt est payé plus tard, donc plus d’argent reste investi et continue de rapporter', 'is_correct' => true],
                            ['choice_text' => 'Les impôts sont définitivement supprimés pour toute la durée du contrat, y compris sur les plus-values', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira hésite entre un fonds à frais d’entrée élevés et un fonds comparable à frais faibles. Que doit-elle faire ?',
                        'explanation' => 'Quelques points de frais par an, cumulés sur dix ans, mangent une bonne partie du gain. On regarde le total des frais, pas seulement le premier prélèvement.',
                        'choices' => [
                            ['choice_text' => 'Choisir le produit dont le rendement annoncé est le plus élevé sur la brochure commerciale du produit', 'is_correct' => false],
                            ['choice_text' => 'Ne pas tenir compte des frais, jugés secondaires', 'is_correct' => false],
                            ['choice_text' => 'Comparer le coût total et son effet sur le rendement net sur la durée prévue', 'is_correct' => true],
                            ['choice_text' => 'Se fier à la publicité de chaque société de gestion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit offre un gros avantage fiscal. Pourquoi cela ne doit-il pas décider seul de l’investissement ?',
                        'explanation' => 'Un impôt en moins ne compense pas un produit risqué, cher ou inadapté. On choisit d’abord selon l’objectif, la fiscalité vient ensuite.',
                        'choices' => [
                            ['choice_text' => 'Il peut s’accompagner de risques ou de frais, ou ne pas correspondre à l’objectif', 'is_correct' => true],
                            ['choice_text' => 'Il garantit le rendement mais pas le capital', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe que pour les très gros patrimoines', 'is_correct' => false],
                            ['choice_text' => 'Il disparaît dès que le marché baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie génère 8 % brut avec 1 % de coûts. Une autre génère 7 % brut avec 0,2 % de coûts. Hors fiscalité, laquelle a le rendement net simplifié le plus élevé ?',
                        'explanation' => 'La première donne 8 % - 1 % = 7 %. La seconde donne 7 % - 0,2 % = 6,8 %. Dans cette simplification, la première est supérieure de 0,2 point.',
                        'choices' => [
                            ['choice_text' => 'La première, à 7 %', 'is_correct' => true],
                            ['choice_text' => 'La seconde, à 6,8 %', 'is_correct' => false],
                            ['choice_text' => 'Les deux, à 7 %', 'is_correct' => false],
                            ['choice_text' => 'La seconde, à 7,2 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim lit qu’un produit est « fiscalement avantageux ». Que doit-il vérifier avant de signer ?',
                        'explanation' => 'Un avantage fiscal est souvent soumis à des conditions : garder cinq ans, ne pas dépasser un plafond. Si on sort trop tôt, on peut perdre l’avantage.',
                        'choices' => [
                            ['choice_text' => 'Que l’avantage s’applique quel que soit le pays de résidence ou la situation familiale du client', 'is_correct' => false],
                            ['choice_text' => 'Que le contrat est identique à ceux du reste du marché', 'is_correct' => false],
                            ['choice_text' => 'Que la sortie est possible à tout moment sans conséquence', 'is_correct' => false],
                            ['choice_text' => 'Les conditions pour en profiter : durée de détention, plafonds, règles de sortie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Leila s’installe dans un autre pays. Que doit-elle faire de sa stratégie d’investissement ?',
                        'explanation' => 'Impôts et obligations de déclaration dépendent du pays de résidence. Après un déménagement, on vérifie ce qui change avant de laisser les choses telles quelles.',
                        'choices' => [
                            ['choice_text' => 'La revoir à la lumière des règles fiscales de son nouveau pays', 'is_correct' => true],
                            ['choice_text' => 'La garder telle quelle, car les règles fiscales restent les mêmes d’un pays à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Vendre tous ses placements avant de partir, par précaution', 'is_correct' => false],
                            ['choice_text' => 'La confier à une banque du nouveau pays, sans autre analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel repère simple permet de comparer deux solutions qui n’ont pas les mêmes coûts ?',
                        'explanation' => 'Le net intègre les frais, et la durée montre leur effet cumulé : 1 point de frais pendant 20 ans pèse bien plus qu’une seule année.',
                        'choices' => [
                            ['choice_text' => 'Le rendement net attendu sur la durée de placement prévue', 'is_correct' => true],
                            ['choice_text' => 'Le rendement affiché sur la brochure commerciale du produit', 'is_correct' => false],
                            ['choice_text' => 'Les frais payés la première année', 'is_correct' => false],
                            ['choice_text' => 'La complexité du produit', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de gestion de patrimoine',
                'description' => 'Résoudre des situations patrimoniales variées et justifier une décision d\'allocation ou de gestion.',
                'questions' => [
                    [
                        'question' => 'Un investisseur reçoit 1 500 € de dividendes par trimestre. Quel revenu annuel cela représente-t-il, avant fiscalité et en supposant quatre trimestres identiques ?',
                        'explanation' => '1 500 € × 4 = 6 000 € par an. Le calcul ne tient pas compte de l’évolution future des dividendes ni de la fiscalité.',
                        'choices' => [
                            ['choice_text' => '3 000 €', 'is_correct' => false],
                            ['choice_text' => '4 500 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => true],
                            ['choice_text' => '7 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client possède 1 000 000 € de patrimoine financier, dont 100 000 € en liquidités. Quel est le poids des liquidités ?',
                        'explanation' => '100 000 / 1 000 000 = 10 %. Les liquidités représentent donc 10 % du patrimoine financier.',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille souhaite retirer 30 000 € par an d’un patrimoine de 750 000 €. Quel taux de retrait initial cela représente-t-il ?',
                        'explanation' => '30 000 / 750 000 = 0,04, soit un taux de retrait initial de 4 %. La soutenabilité future dépend ensuite des rendements, de l’inflation et de l’évolution des retraits.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => true],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '6 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille comprend 400 000 € d’actions, 300 000 € d’obligations et 100 000 € de liquidités. Quel est le poids combiné des obligations et des liquidités ?',
                        'explanation' => 'Le total du patrimoine est de 800 000 €. Obligations + liquidités = 300 000 + 100 000 = 400 000 €, soit 400 000 / 800 000 = 50 %.',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '60 %', 'is_correct' => false],
                            ['choice_text' => '70 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'On a oublié la résidence principale (600 000 €) dans le bilan patrimonial d’un client. En quoi cela fausse-t-il l’analyse ?',
                        'explanation' => 'Une maison de 600 000 € peut représenter l’essentiel de la richesse du client. L’oublier fausse la vue d’ensemble : concentration, liquidité et besoins.',
                        'choices' => [
                            ['choice_text' => 'Cela ne change rien, puisqu’une résidence n’est pas un placement', 'is_correct' => false],
                            ['choice_text' => 'Son portefeuille financier devient plus risqué que ce qu’affichent les documents du client', 'is_correct' => false],
                            ['choice_text' => 'Ses dettes disparaissent du bilan', 'is_correct' => false],
                            ['choice_text' => 'Son patrimoine total et la concentration de ses risques sont sous-estimés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anas reçoit 50 000 € et veut réduire la part des actions de son employeur dans son patrimoine. Que faire de cette somme ?',
                        'explanation' => 'Les nouveaux versements permettent de diluer la concentration sans vendre la position existante, ce qui évite des frais et d’éventuels impôts.',
                        'choices' => [
                            ['choice_text' => 'Racheter des actions de son employeur pour profiter de la hausse récente du cours', 'is_correct' => false],
                            ['choice_text' => 'La placer sur des actifs diversifiés, conformes à son allocation cible', 'is_correct' => true],
                            ['choice_text' => 'La mettre de côté sans objectif précis', 'is_correct' => false],
                            ['choice_text' => 'La placer dans des entreprises du même secteur que son employeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tarik aura besoin de 40 000 € dans un an. Il a 35 000 € de placements très liquides et 100 000 € d’actifs risqués. Quelle question doit-il se poser ?',
                        'explanation' => 'Le besoin de 40 000 € est certain et daté. Il manque 5 000 € : il faut les prévoir avant de penser à prendre plus de risque.',
                        'choices' => [
                            ['choice_text' => 'Quel actif risqué acheter avec ses 35 000 € ?', 'is_correct' => false],
                            ['choice_text' => 'Comment augmenter la volatilité de son portefeuille pour gagner plus ?', 'is_correct' => false],
                            ['choice_text' => 'Comment tout placer en actifs risqués pour doubler la somme ?', 'is_correct' => false],
                            ['choice_text' => 'Comment trouver les 5 000 € qui manquent sans devoir vendre des actifs risqués au mauvais moment ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un client veut garder en permanence 20 % de son portefeuille en cash. Que vérifier avant d’en faire une règle définitive ?',
                        'explanation' => 'Le cash rassure mais rapporte peu : c’est le coût d’opportunité. 20 % peut être trop ou pas assez selon les dépenses prévues et les projets.',
                        'choices' => [
                            ['choice_text' => 'Le rendement moyen de la Bourse sur la dernière décennie', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de banques où il a un compte', 'is_correct' => false],
                            ['choice_text' => 'La performance de la Bourse sur le dernier mois', 'is_correct' => false],
                            ['choice_text' => 'Ce que cela lui coûte en rendement, ses vrais besoins de liquidité et ses objectifs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une allocation cible est 50 % actions et 50 % obligations. Après les mouvements de marché, le portefeuille vaut 540 000 € dont 324 000 € d’actions. Quel est le poids des actions ?',
                        'explanation' => '324 000 / 540 000 = 0,60, soit 60 %. Le portefeuille a donc dérivé de sa cible de 50 %.',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '55 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => true],
                            ['choice_text' => '65 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client arrive avec des produits achetés au fil des années, sans logique d’ensemble. Quel est le bon premier réflexe ?',
                        'explanation' => 'Avant de décider, on fait l’inventaire : doublons, frais cachés, concentrations, produits qui ne servent aucun objectif. Ensuite seulement on trie.',
                        'choices' => [
                            ['choice_text' => 'Ajouter de nouveaux produits pour compléter l’ensemble et combler les manques', 'is_correct' => false],
                            ['choice_text' => 'Tout garder, puisque ces produits sont déjà anciens', 'is_correct' => false],
                            ['choice_text' => 'Dresser une vue d’ensemble par objectif, risque, coût et liquidité', 'is_correct' => true],
                            ['choice_text' => 'Vendre les cinq plus petites lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samir a un portefeuille bien diversifié, mais 80 % de ses revenus viennent d’un seul secteur cyclique. En quoi est-ce un souci ?',
                        'explanation' => 'Si son secteur entre en crise, il peut perdre son revenu au moment où ses placements baissent aussi. Il faut regarder le risque global.',
                        'choices' => [
                            ['choice_text' => 'Son risque réel est plus concentré que son portefeuille ne le laisse voir', 'is_correct' => true],
                            ['choice_text' => 'Ses revenus de travail n’ont aucun lien avec le risque de son patrimoine financier', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut plus diversifier son portefeuille financier', 'is_correct' => false],
                            ['choice_text' => 'Son portefeuille financier devient sans risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sana veut prendre plus de risque parce que son portefeuille a fait moins bien que prévu pendant trois mois. Que doit-elle examiner avant de changer ?',
                        'explanation' => 'Trois mois, c’est trop court pour juger une stratégie. La vraie question est de savoir si ses objectifs ou sa situation ont changé.',
                        'choices' => [
                            ['choice_text' => 'Le titre qui a le plus monté cette semaine sur l’ensemble des marchés mondiaux', 'is_correct' => false],
                            ['choice_text' => 'Le rendement du meilleur fonds de l’année précédente', 'is_correct' => false],
                            ['choice_text' => 'L’avis d’un ami qui vient de gagner de l’argent en Bourse', 'is_correct' => false],
                            ['choice_text' => 'L’adéquation de sa stratégie à ses objectifs, au-delà de ces trois mois', 'is_correct' => true],
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
