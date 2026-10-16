<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DerivativesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'derivatives')->firstOrFail();

        $quizSettings = [
            ['duration' => 24, 'passing_score' => 55],
            ['duration' => 26, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 57],
            ['duration' => 29, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 58],
            ['duration' => 28, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 62],
            ['duration' => 31, 'passing_score' => 61],
            ['duration' => 33, 'passing_score' => 63],
        ];

        $quizzes = [
            [
                'title' => 'Premiers pas avec les contrats à terme',
                'description' => 'Découvrir le rôle des forwards et des futures à travers des situations simples de couverture et de prix.',
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine devra payer 50 000 USD dans trois mois. Quel est l\'intérêt principal d\'un forward de change dans ce cas ?',
                        'explanation' => 'Le forward permet de convenir aujourd\'hui d\'un taux de change pour une transaction future. Il réduit donc l\'incertitude sur le montant en dirhams à payer.',
                        'choices' => [
                            ['choice_text' => 'Profiter d\'une baisse éventuelle du dollar dans trois mois', 'is_correct' => false],
                            ['choice_text' => 'Réduire le montant en dollars à payer au fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Emprunter des dollars dès aujourd\'hui au taux du marché', 'is_correct' => false],
                            ['choice_text' => 'Fixer dès aujourd\'hui le taux auquel les dollars seront achetés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un forward est négocié directement entre deux parties. Quelle affirmation décrit le mieux sa particularité par rapport à un future coté en bourse ?',
                        'explanation' => 'Un forward est habituellement négocié de gré à gré entre deux contreparties. Il est donc plus personnalisable, mais le risque de contrepartie est aussi un élément à considérer.',
                        'choices' => [
                            ['choice_text' => 'Le forward est généralement coté sur une bourse organisée', 'is_correct' => false],
                            ['choice_text' => 'Le forward est généralement un contrat de gré à gré', 'is_correct' => true],
                            ['choice_text' => 'Le future est généralement négocié de gré à gré', 'is_correct' => false],
                            ['choice_text' => 'Le forward est généralement réglé chaque jour par appels de marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boulangerie industrielle sait qu\'elle achètera 100 tonnes de blé dans deux mois et craint une hausse du prix. Quel objectif correspond à une couverture avec un future sur le blé ?',
                        'explanation' => 'La boulangerie est exposée à une hausse future de son coût. Une position de couverture sur futures peut compenser une partie de cette hausse.',
                        'choices' => [
                            ['choice_text' => 'Profiter d\'une éventuelle baisse du prix du blé', 'is_correct' => false],
                            ['choice_text' => 'Se protéger contre une hausse du prix d\'achat', 'is_correct' => true],
                            ['choice_text' => 'Se protéger contre une baisse du prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Spéculer sur la hausse du prix de la farine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le sous-jacent d\'un contrat dérivé est...',
                        'explanation' => 'Le sous-jacent est ce dont dépend la valeur du dérivé : par exemple une action, une devise, un taux d\'intérêt ou une matière première.',
                        'choices' => [
                            ['choice_text' => 'Le marché organisé sur lequel le contrat est coté', 'is_correct' => false],
                            ['choice_text' => 'Le prix payé par l\'acheteur pour détenir le contrat', 'is_correct' => false],
                            ['choice_text' => 'L\'actif, le taux ou l\'indice auquel le contrat est lié', 'is_correct' => true],
                            ['choice_text' => 'La chambre de compensation qui garantit le contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société signe un forward pour acheter 1 million d\'euros à 11,20 MAD pour 1 EUR à l\'échéance. Si le marché vaut 11,50 MAD à cette date, quel est l\'avantage économique du contrat pour l\'acheteur ?',
                        'explanation' => 'Le forward oblige l\'acheteur à traiter à 11,20 selon le contrat. Si le marché est à 11,50, le contrat est économiquement favorable à l\'acheteur.',
                        'choices' => [
                            ['choice_text' => 'Il achète à 11,20 au lieu de 11,50', 'is_correct' => true],
                            ['choice_text' => 'Il achète à 11,50 au lieu de 11,20', 'is_correct' => false],
                            ['choice_text' => 'Il vend à 11,20 au lieu de 11,50', 'is_correct' => false],
                            ['choice_text' => 'Il économise 0,70 MAD par euro acheté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer un forward personnalisé à un future standardisé ?',
                        'explanation' => 'Le gré à gré permet souvent d\'adapter le montant, l\'échéance ou les modalités aux flux réels de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il est coté sur une bourse avec une chambre de compensation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il offre une liquidité supérieure à celle d\'un future', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il n\'expose pas à un risque de contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle peut adapter le montant et la date à son besoin', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit une entrée de 300 000 USD dans six mois. Elle craint que le dollar baisse face au dirham avant l\'encaissement. Que cherche-t-elle à protéger ?',
                        'explanation' => 'Si le dollar baisse, les 300 000 USD valent moins en dirhams. La couverture vise donc la valeur en monnaie domestique du futur encaissement.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de dollars à recevoir du client', 'is_correct' => false],
                            ['choice_text' => 'La marge commerciale réalisée sur la vente aux États-Unis', 'is_correct' => false],
                            ['choice_text' => 'La valeur en dirhams du futur encaissement', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change dollar-euro sur les marchés mondiaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un future est dit standardisé parce que...',
                        'explanation' => 'Les futures sont standardisés : taille du contrat, échéances, modalités de règlement et autres caractéristiques sont définies par le marché.',
                        'choices' => [
                            ['choice_text' => 'Chaque investisseur négocie librement la taille et l\'échéance du contrat', 'is_correct' => false],
                            ['choice_text' => 'Il est conclu directement entre l\'acheteur et le vendeur sans intermédiaire', 'is_correct' => false],
                            ['choice_text' => 'Ses caractéristiques principales sont fixées par le marché organisé', 'is_correct' => true],
                            ['choice_text' => 'Son prix est fixé une fois pour toutes à la signature du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement lié à un contrat dérivé de gré à gré lorsqu\'une contrepartie devient incapable de payer ?',
                        'explanation' => 'Le risque de contrepartie correspond à la possibilité que l\'autre partie n\'honore pas ses obligations contractuelles.',
                        'choices' => [
                            ['choice_text' => 'Le risque de liquidité du marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de base', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque de contrepartie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur utilise un dérivé uniquement pour réduire le risque d\'une position qu\'il détient déjà. On parle principalement de...',
                        'explanation' => 'Le hedging consiste à prendre une position sur un dérivé pour compenser tout ou partie d\'un risque lié à une autre position.',
                        'choices' => [
                            ['choice_text' => 'arbitrage entre deux marchés', 'is_correct' => false],
                            ['choice_text' => 'spéculation sur le cours', 'is_correct' => false],
                            ['choice_text' => 'couverture (hedging)', 'is_correct' => true],
                            ['choice_text' => 'diversification de portefeuille', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comprendre les options sans se perdre dans les formules',
                'description' => 'Identifier le fonctionnement d\'un call et d\'un put et comprendre le rôle de la prime, du strike et de l\'échéance.',
                'questions' => [
                    [
                        'question' => 'Une option call donne à son détenteur...',
                        'explanation' => 'Un call donne à l\'acheteur le droit d\'acheter le sous-jacent au prix d\'exercice (strike), sans l\'obliger à exercer.',
                        'choices' => [
                            ['choice_text' => 'Le droit, mais pas l\'obligation, de vendre le sous-jacent au strike', 'is_correct' => false],
                            ['choice_text' => 'Le droit, mais pas l\'obligation, d\'acheter le sous-jacent au strike', 'is_correct' => true],
                            ['choice_text' => 'L\'obligation d\'acheter le sous-jacent au strike à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'L\'obligation de vendre le sous-jacent au strike si l\'acheteur exerce', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option put donne à son détenteur...',
                        'explanation' => 'Le put donne le droit de vendre le sous-jacent au strike. Cette caractéristique peut être utile pour se protéger contre une baisse.',
                        'choices' => [
                            ['choice_text' => 'Le droit, mais pas l\'obligation, d\'acheter au strike', 'is_correct' => false],
                            ['choice_text' => 'L\'obligation de vendre au strike si l\'acheteur le demande', 'is_correct' => false],
                            ['choice_text' => 'L\'obligation d\'acheter au strike à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Le droit, mais pas l\'obligation, de vendre au strike', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour acheter une option, l\'investisseur paie généralement...',
                        'explanation' => 'La prime est le prix payé pour le droit conféré par l\'option.',
                        'choices' => [
                            ['choice_text' => 'Une prime', 'is_correct' => true],
                            ['choice_text' => 'Un coupon', 'is_correct' => false],
                            ['choice_text' => 'Un dividende', 'is_correct' => false],
                            ['choice_text' => 'Une marge de variation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action vaut 80 €. Un call a un strike de 75 €. À l\'échéance, quelle est sa valeur intrinsèque avant prise en compte de la prime ?',
                        'explanation' => 'Pour un call, la valeur intrinsèque à l\'échéance est max(S - K, 0). Ici, 80 - 75 = 5 €.',
                        'choices' => [
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '75 €', 'is_correct' => false],
                            ['choice_text' => '155 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action vaut 60 €. Un put a un strike de 70 €. À l\'échéance, quelle est sa valeur intrinsèque ?',
                        'explanation' => 'Pour un put, la valeur intrinsèque à l\'échéance est max(K - S, 0). Ici, 70 - 60 = 10 €.',
                        'choices' => [
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '60 €', 'is_correct' => false],
                            ['choice_text' => '130 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une action volatile et achète un put de protection. Quel problème cherche-t-elle principalement à limiter ?',
                        'explanation' => 'Le put donne le droit de vendre au strike. Il peut donc servir de plancher contre une forte baisse du cours.',
                        'choices' => [
                            ['choice_text' => 'Le manque à gagner si le cours monte fortement', 'is_correct' => false],
                            ['choice_text' => 'Le risque d\'illiquidité du titre sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change lié à la devise de cotation', 'is_correct' => false],
                            ['choice_text' => 'La perte liée à une forte baisse du cours', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'acheteur d\'une option peut-il décider de ne pas exercer son droit ?',
                        'explanation' => 'L\'option est un droit, pas une obligation. Si le marché est plus favorable que le strike, l\'acheteur peut laisser l\'option expirer.',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'exercice est facultatif et peut ne pas être économiquement intéressant', 'is_correct' => true],
                            ['choice_text' => 'Parce que c\'est au vendeur de décider s\'il faut exercer ou non l\'option', 'is_correct' => false],
                            ['choice_text' => 'Parce que le non-exercice entraîne le remboursement de la prime payée au départ', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules les options de vente doivent obligatoirement être exercées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un call a un strike de 100 €. À l\'échéance, l\'action vaut 92 €. Pour le détenteur du call, quelle est la décision généralement rationnelle ?',
                        'explanation' => 'Acheter à 100 € alors que l\'action vaut 92 € serait défavorable. Le détenteur peut simplement laisser le call expirer.',
                        'choices' => [
                            ['choice_text' => 'Exercer le call pour acheter l\'action à 100 €', 'is_correct' => false],
                            ['choice_text' => 'Exercer le call pour empocher la différence de 8 €', 'is_correct' => false],
                            ['choice_text' => 'Vendre l\'action à 92 € grâce au call', 'is_correct' => false],
                            ['choice_text' => 'Ne pas exercer le call', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À caractéristiques égales, une option ayant davantage de temps avant son échéance tend à avoir...',
                        'explanation' => 'Plus de temps laisse davantage de possibilités au sous-jacent d\'évoluer en faveur du détenteur, ce qui tend à augmenter la valeur temporelle.',
                        'choices' => [
                            ['choice_text' => 'Une valeur intrinsèque plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Une valeur temporelle plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Une valeur temporelle plus faible', 'is_correct' => false],
                            ['choice_text' => 'Une prime réduite par l\'incertitude', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le vendeur d\'une option reçoit généralement...',
                        'explanation' => 'En vendant l\'option, le vendeur encaisse la prime. En contrepartie, il assume les obligations prévues par le contrat.',
                        'choices' => [
                            ['choice_text' => 'La prime payée par l\'acheteur', 'is_correct' => true],
                            ['choice_text' => 'Les dividendes de l\'action sous-jacente', 'is_correct' => false],
                            ['choice_text' => 'La valeur intrinsèque à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Une commission de la chambre de compensation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Situations simples autour des calls et des puts',
                'description' => 'S\'entraîner à raisonner sur les gains, les pertes et les décisions d\'exercice dans des cas concrets.',
                'questions' => [
                    [
                        'question' => 'Un call sur une action a un strike de 50 € et une prime de 3 €. À l\'échéance, l\'action vaut 58 €. Quel est le gain net de l\'acheteur, avant frais, s\'il exerce ?',
                        'explanation' => 'La valeur intrinsèque est 58 - 50 = 8 €. Après paiement de la prime de 3 €, le gain net est 5 €.',
                        'choices' => [
                            ['choice_text' => '3 €', 'is_correct' => false],
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '8 €', 'is_correct' => false],
                            ['choice_text' => '11 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un put a un strike de 40 € et une prime de 2 €. À l\'échéance, l\'action vaut 35 €. Quel est le résultat net de l\'acheteur du put ?',
                        'explanation' => 'Le put vaut 40 - 35 = 5 € à l\'échéance. Après une prime de 2 €, le gain net est 3 €.',
                        'choices' => [
                            ['choice_text' => '2 €', 'is_correct' => false],
                            ['choice_text' => '3 €', 'is_correct' => true],
                            ['choice_text' => '5 €', 'is_correct' => false],
                            ['choice_text' => '7 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un call a un strike de 120 € et une prime de 4 €. À quel niveau du sous-jacent l\'acheteur commence-t-il à être à l\'équilibre à l\'échéance, avant frais ?',
                        'explanation' => 'Pour un call acheté, le seuil d\'équilibre à l\'échéance est strike + prime, soit 120 + 4 = 124 €.',
                        'choices' => [
                            ['choice_text' => '116 €', 'is_correct' => false],
                            ['choice_text' => '120 €', 'is_correct' => false],
                            ['choice_text' => '124 €', 'is_correct' => true],
                            ['choice_text' => '128 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un put a un strike de 90 € et une prime de 3 €. Quel est son seuil d\'équilibre à l\'échéance ?',
                        'explanation' => 'Pour un put acheté, le seuil d\'équilibre est strike - prime, soit 90 - 3 = 87 €.',
                        'choices' => [
                            ['choice_text' => '84 €', 'is_correct' => false],
                            ['choice_text' => '87 €', 'is_correct' => true],
                            ['choice_text' => '90 €', 'is_correct' => false],
                            ['choice_text' => '93 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète un call parce qu\'il pense que l\'action va fortement progresser. Quel profil de scénario correspond à son idée ?',
                        'explanation' => 'Le call devient intéressant pour l\'acheteur lorsque la hausse du sous-jacent compense le strike et la prime payée.',
                        'choices' => [
                            ['choice_text' => 'Baisse du sous-jacent en dessous du strike moins la prime', 'is_correct' => false],
                            ['choice_text' => 'Stabilité du cours autour du strike jusqu\'à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Hausse du sous-jacent au-delà du strike et de la prime', 'is_correct' => true],
                            ['choice_text' => 'Hausse modérée du sous-jacent restant sous le strike', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME craint une hausse du prix du carburant et utilise des options d\'achat sur un sous-jacent lié à cette dépense. Pourquoi peut-elle apprécier cette solution par rapport à un contrat à terme ferme ?',
                        'explanation' => 'L\'option procure une protection tout en laissant la possibilité de ne pas exercer si le marché évolue favorablement. Cette flexibilité a un coût : la prime.',
                        'choices' => [
                            ['choice_text' => 'Elle peut bénéficier d\'une baisse des prix tout en conservant une protection contre la hausse', 'is_correct' => true],
                            ['choice_text' => 'Elle fixe dès aujourd\'hui un prix d\'achat identique quelle que soit l\'évolution ultérieure du marché', 'is_correct' => false],
                            ['choice_text' => 'Elle évite de payer une prime puisque la protection est incluse dans le prix du carburant', 'is_correct' => false],
                            ['choice_text' => 'Elle profite d\'une hausse des prix tout en étant protégée contre la baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action vaut 105 €. Un put de strike 110 € est déjà dans la monnaie. Que signifie cette situation ?',
                        'explanation' => 'Un put est dans la monnaie lorsque le cours du sous-jacent est inférieur au strike. Ici, vendre à 110 € alors que le marché est à 105 € a une valeur intrinsèque.',
                        'choices' => [
                            ['choice_text' => 'Le détenteur serait obligé d\'acheter à 110 € une action valant 105 €', 'is_correct' => false],
                            ['choice_text' => 'Le détenteur pourrait vendre à 110 € alors que le marché vaut 105 €', 'is_correct' => true],
                            ['choice_text' => 'L\'option n\'a pas de valeur intrinsèque tant que le cours n\'atteint pas le strike', 'is_correct' => false],
                            ['choice_text' => 'Le détenteur perdrait de l\'argent car le cours est inférieur au strike', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un call et un put portent sur la même action avec le même strike et la même échéance. Lequel est directement avantagé par une forte hausse du cours ?',
                        'explanation' => 'Une hausse du sous-jacent augmente, toutes choses égales par ailleurs, la valeur d\'un call et tend à réduire celle d\'un put.',
                        'choices' => [
                            ['choice_text' => 'Le put', 'is_correct' => false],
                            ['choice_text' => 'Le call', 'is_correct' => true],
                            ['choice_text' => 'Les deux, puisqu\'ils ont le même strike et la même échéance', 'is_correct' => false],
                            ['choice_text' => 'Ni l\'un ni l\'autre, car la hausse est déjà dans le prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix d\'exercice d\'une option est généralement appelé...',
                        'explanation' => 'Le strike est le prix fixé dans le contrat auquel le détenteur peut acheter ou vendre le sous-jacent selon le type d\'option.',
                        'choices' => [
                            ['choice_text' => 'spread', 'is_correct' => false],
                            ['choice_text' => 'coupon', 'is_correct' => false],
                            ['choice_text' => 'notionnel', 'is_correct' => false],
                            ['choice_text' => 'strike', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur a acheté un call qui expire demain. Le marché est très calme. Pourquoi la valeur temporelle de l\'option peut-elle être faible ?',
                        'explanation' => 'Avec très peu de temps restant, la possibilité d\'un mouvement favorable avant l\'échéance diminue, ce qui réduit la valeur temporelle.',
                        'choices' => [
                            ['choice_text' => 'Le strike est ajusté vers le cours à l\'approche de l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Il reste peu de temps pour qu\'un mouvement favorable se produise', 'is_correct' => true],
                            ['choice_text' => 'Les dernières séances avant l\'échéance sont exclues du calcul de la prime', 'is_correct' => false],
                            ['choice_text' => 'La prime est remplacée par un dépôt de marge à l\'approche de l\'échéance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Les swaps en situation',
                'description' => 'Comprendre simplement les swaps de taux et de devises et savoir à quoi ils servent dans la gestion financière.',
                'questions' => [
                    [
                        'question' => 'Une entreprise a une dette à taux variable et souhaite rendre ses charges d\'intérêts plus prévisibles. Quel swap correspond le mieux à cet objectif ?',
                        'explanation' => 'En payant fixe et recevant variable sur un swap de taux, les flux variables de la dette peuvent être partiellement compensés, ce qui rend le coût net plus prévisible.',
                        'choices' => [
                            ['choice_text' => 'Un interest rate swap permettant de payer variable et de recevoir fixe', 'is_correct' => false],
                            ['choice_text' => 'Un swap de devises échangeant le principal dans une autre monnaie', 'is_correct' => false],
                            ['choice_text' => 'Un interest rate swap permettant de payer fixe et recevoir variable', 'is_correct' => true],
                            ['choice_text' => 'Un swap de taux dans lequel le notionnel est remboursé chaque mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un interest rate swap classique, les contreparties échangent généralement...',
                        'explanation' => 'Un swap de taux porte sur des flux d\'intérêts calculés sur un notionnel de référence. Le notionnel n\'est généralement pas échangé.',
                        'choices' => [
                            ['choice_text' => 'Des flux d\'intérêts calculés sur un notionnel', 'is_correct' => true],
                            ['choice_text' => 'Le notionnel intégral au début et à la fin du contrat', 'is_correct' => false],
                            ['choice_text' => 'Des dividendes calculés sur le résultat de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Des primes d\'option versées à intervalles réguliers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi parle-t-on de notionnel dans un swap ?',
                        'explanation' => 'Le notionnel sert de montant de référence pour calculer les intérêts échangés, sans être nécessairement versé d\'une partie à l\'autre.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il représente le prix d\'entrée dans le swap', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il sert de base au calcul des flux', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il mesure la solvabilité de la contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il fixe le taux appliqué à chaque période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie 6 % fixe sur un swap et reçoit 3 mois Euribor. Si son emprunt sous-jacent lui fait déjà payer Euribor, quel est l\'effet recherché ?',
                        'explanation' => 'Le flux reçu sur le swap peut compenser le taux variable payé sur la dette, laissant essentiellement un coût fixe lié au swap.',
                        'choices' => [
                            ['choice_text' => 'Doubler son exposition à Euribor en plus de celle de sa dette', 'is_correct' => false],
                            ['choice_text' => 'Transformer économiquement une partie du coût variable en coût fixe', 'is_correct' => true],
                            ['choice_text' => 'Transformer sa dette à taux fixe en dette à taux variable', 'is_correct' => false],
                            ['choice_text' => 'Se protéger contre une baisse d\'Euribor pour réduire ses charges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un swap de devises peut être utile lorsqu\'une entreprise...',
                        'explanation' => 'Le currency swap permet d\'échanger des flux dans différentes monnaies et peut servir à gérer le financement ou l\'exposition de change.',
                        'choices' => [
                            ['choice_text' => 'Souhaite remplacer un taux fixe par un taux variable dans la même monnaie', 'is_correct' => false],
                            ['choice_text' => 'Veut obtenir une protection contre une baisse du cours de ses actions', 'is_correct' => false],
                            ['choice_text' => 'Cherche à acheter un actif physique livrable dans plusieurs mois', 'is_correct' => false],
                            ['choice_text' => 'A des besoins de financement ou de paiements dans une autre monnaie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise qui utilise un swap doit-elle tout de même surveiller le risque de contrepartie ?',
                        'explanation' => 'Comme pour d\'autres contrats de gré à gré, la solidité financière de la contrepartie est importante car le contrat comporte des obligations futures.',
                        'choices' => [
                            ['choice_text' => 'Parce que la contrepartie fixe elle-même le taux variable à chaque période', 'is_correct' => false],
                            ['choice_text' => 'Parce que le notionnel peut être perdu si le taux de référence change', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'autre partie pourrait ne pas honorer ses paiements', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux fixe du swap peut être modifié par la banque centrale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un swap de taux, une banque paie un taux fixe et reçoit un taux variable. Si les taux montent, toutes choses égales par ailleurs, quel flux du swap augmente ?',
                        'explanation' => 'Le paiement fixe du swap reste déterminé par le taux contractuel, tandis que le flux variable évolue avec le taux de référence.',
                        'choices' => [
                            ['choice_text' => 'Le flux fixe qu\'elle paie', 'is_correct' => false],
                            ['choice_text' => 'Le flux variable qu\'elle reçoit', 'is_correct' => true],
                            ['choice_text' => 'Le notionnel de référence du swap', 'is_correct' => false],
                            ['choice_text' => 'Les deux flux, dans la même proportion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut se protéger contre une hausse des taux mais souhaite aussi profiter d\'une baisse des taux. Quel type d\'instrument est généralement plus flexible qu\'un swap ferme ?',
                        'explanation' => 'Une option peut fournir un plafond ou une protection tout en laissant la possibilité de bénéficier d\'une évolution favorable. Cette flexibilité est payée via une prime.',
                        'choices' => [
                            ['choice_text' => 'Une option de taux', 'is_correct' => true],
                            ['choice_text' => 'Un contrat à terme ferme sur les taux', 'is_correct' => false],
                            ['choice_text' => 'Un swap de devises', 'is_correct' => false],
                            ['choice_text' => 'Un forward de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le terme « netting » dans un swap fait référence au fait que...',
                        'explanation' => 'Dans de nombreux swaps, des flux opposés peuvent être compensés afin que seule la différence nette soit réglée.',
                        'choices' => [
                            ['choice_text' => 'Le notionnel de chaque partie est supprimé après la première période', 'is_correct' => false],
                            ['choice_text' => 'Le taux fixe est converti en taux variable à chaque règlement', 'is_correct' => false],
                            ['choice_text' => 'Les flux opposés peuvent être compensés pour ne régler que le solde', 'is_correct' => true],
                            ['choice_text' => 'Le contrat est annulé et remplacé par un nouveau swap au taux du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose d\'un financement dans une devise mais génère ses revenus dans une autre. Pourquoi cela peut-il être un problème financier ?',
                        'explanation' => 'Une différence entre la monnaie des revenus et celle des paiements crée une exposition de change qui peut affecter les marges et les flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'La dette change de nature juridique selon la devise de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Les revenus et la dette se compensent exactement quelle que soit la devise', 'is_correct' => false],
                            ['choice_text' => 'Les mouvements de change peuvent modifier la valeur des flux en monnaie domestique', 'is_correct' => true],
                            ['choice_text' => 'Les devises étrangères ne peuvent pas être converties en monnaie domestique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Hedging : choisir le bon réflexe',
                'description' => 'Associer chaque risque de marché à une couverture adaptée sans transformer le cours en catalogue de définitions.',
                'questions' => [
                    [
                        'question' => 'Un importateur doit payer 2 millions USD dans quatre mois. Il ne veut pas que le coût en dirhams augmente. Quelle couverture est la plus directe ?',
                        'explanation' => 'L\'importateur aura besoin de dollars. Fixer à l\'avance le taux d\'achat permet de maîtriser le montant en dirhams.',
                        'choices' => [
                            ['choice_text' => 'Vendre des dollars à terme via un forward ou un dispositif équivalent', 'is_correct' => false],
                            ['choice_text' => 'Acheter des dollars à terme via un forward ou un dispositif équivalent', 'is_correct' => true],
                            ['choice_text' => 'Acheter un put sur le dollar pour se protéger d\'une hausse du dollar', 'is_correct' => false],
                            ['choice_text' => 'Attendre l\'échéance puis acheter les dollars au cours du jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise détient une obligation à taux fixe et craint une hausse des taux qui ferait baisser sa valeur de marché. Quel risque cherche-t-elle à limiter ?',
                        'explanation' => 'Pour une obligation à taux fixe, une hausse des taux de marché tend à faire baisser le prix. C\'est une manifestation du risque de taux.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux d\'intérêt', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change sur le nominal', 'is_correct' => false],
                            ['choice_text' => 'Le risque de défaut de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un producteur agricole doit vendre sa récolte dans six mois et souhaite se protéger contre une baisse du prix de la matière première. Quel type de position sur futures est cohérent ?',
                        'explanation' => 'Le producteur bénéficie d\'un prix de vente plus élevé et souffre d\'une baisse du marché. Une position short sur futures peut compenser cette baisse.',
                        'choices' => [
                            ['choice_text' => 'Une position acheteuse (long) sur le future', 'is_correct' => false],
                            ['choice_text' => 'Un achat d\'option call sur la matière première', 'is_correct' => false],
                            ['choice_text' => 'Une position vendeuse (short) sur le future', 'is_correct' => true],
                            ['choice_text' => 'Une position neutre : acheter et vendre le même future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un consommateur industriel qui devra acheter du cuivre dans trois mois craint une hausse du prix. Pourquoi une position longue sur futures peut-elle servir de couverture ?',
                        'explanation' => 'L\'acheteur futur est exposé à une hausse du prix physique. Une position longue sur futures peut générer un gain lorsque le prix monte.',
                        'choices' => [
                            ['choice_text' => 'Elle gagne généralement de la valeur lorsque le prix du cuivre baisse, ce qui réduit ensuite le coût d\'achat prévu', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige le fournisseur à livrer le cuivre à un prix inférieur au marché', 'is_correct' => false],
                            ['choice_text' => 'Elle donne le droit de revendre le cuivre acheté si son prix baisse', 'is_correct' => false],
                            ['choice_text' => 'Elle gagne généralement de la valeur lorsque le prix du cuivre monte, compensant le coût d\'achat plus élevé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on risque de base dans une couverture ?',
                        'explanation' => 'La couverture n\'est pas toujours parfaite. Le risque de base vient notamment d\'un écart entre l\'évolution du sous-jacent couvert et celle du dérivé utilisé.',
                        'choices' => [
                            ['choice_text' => 'Le risque que la contrepartie ne livre pas ou ne paie pas à la date prévue dans le contrat qu\'elle a signé', 'is_correct' => false],
                            ['choice_text' => 'Le risque de ne pas pouvoir revendre le dérivé avant l\'échéance, faute d\'acheteur sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Le risque que le prix du dérivé et celui de l\'exposition ne bougent pas exactement de la même façon', 'is_correct' => true],
                            ['choice_text' => 'Le risque que le taux de change entre la monnaie du dérivé et celle de l\'entreprise varie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise couvre 100 % d\'un risque prévu à partir d\'un volume qui pourrait finalement être inférieur. Quel problème peut apparaître ?',
                        'explanation' => 'Si le flux réel est inférieur aux prévisions, une couverture de taille fixe peut créer une position résiduelle ou inverse à l\'exposition économique.',
                        'choices' => [
                            ['choice_text' => 'La couverture peut devenir excessive par rapport à l\'exposition réelle', 'is_correct' => true],
                            ['choice_text' => 'La couverture devient insuffisante pour protéger toute l\'exposition', 'is_correct' => false],
                            ['choice_text' => 'Le contrat doit être résilié avant sa date d\'échéance par la banque', 'is_correct' => false],
                            ['choice_text' => 'Le risque devient identique à celui d\'une entreprise non couverte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle utiliser une option au lieu d\'un forward pour couvrir un achat futur ?',
                        'explanation' => 'L\'option donne un droit et non une obligation. La protection est donc plus flexible, mais elle implique généralement le paiement d\'une prime.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une option est livrée à une date plus lointaine que celle d\'un forward', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une option coûte moins cher qu\'un forward à montant équivalent', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle souhaite une protection tout en gardant la possibilité de profiter d\'un marché plus favorable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'une option impose à l\'entreprise d\'acheter la devise à l\'échéance, quel que soit le niveau du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a une facture de 500 000 GBP payable dans deux mois. Le principal danger pour elle, si la livre s\'apprécie contre le dirham, est...',
                        'explanation' => 'La facture est fixe en GBP. Si la livre devient plus chère en dirhams, davantage de dirhams seront nécessaires pour payer le même montant.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du coût de la facture en dirhams', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du coût de la facture en dirhams', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du montant de la facture en livres', 'is_correct' => false],
                            ['choice_text' => 'Un risque de taux d\'intérêt sur la facture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le but d\'une stratégie de hedging est généralement de...',
                        'explanation' => 'La couverture vise d\'abord la maîtrise d\'un risque identifiable. Elle peut réduire aussi bien certaines pertes que certains gains potentiels.',
                        'choices' => [
                            ['choice_text' => 'Maximiser le gain de l\'entreprise en anticipant les marchés', 'is_correct' => false],
                            ['choice_text' => 'Obtenir un rendement supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Augmenter l\'exposition de l\'entreprise aux variations de prix', 'is_correct' => false],
                            ['choice_text' => 'Réduire l\'incertitude ou les pertes liées à un risque identifié', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un responsable trésorerie couvre un risque pendant un an alors que le flux réel ne surviendra que pendant trois mois. Quelle question doit-il se poser en priorité ?',
                        'explanation' => 'Une bonne couverture doit être alignée autant que possible sur le montant et la période de l\'exposition.',
                        'choices' => [
                            ['choice_text' => 'Si le montant du contrat doit être doublé pour couvrir l\'année', 'is_correct' => false],
                            ['choice_text' => 'Si la couverture doit être prolongée au-delà d\'un an pour être efficace', 'is_correct' => false],
                            ['choice_text' => 'Si la banque accepte de réduire ses commissions', 'is_correct' => false],
                            ['choice_text' => 'Si la durée de la couverture correspond réellement à l\'exposition', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Un peu d\'arbitrage et de spéculation',
                'description' => 'Faire la différence entre couvrir un risque, prendre une vue de marché et profiter d\'une incohérence de prix.',
                'questions' => [
                    [
                        'question' => 'Un trader prend une position sur un future uniquement parce qu\'il pense que le prix du sous-jacent va augmenter. Il s\'agit principalement de...',
                        'explanation' => 'La spéculation consiste à prendre volontairement un risque de marché pour chercher à profiter d\'un mouvement attendu des prix.',
                        'choices' => [
                            ['choice_text' => 'spéculation', 'is_correct' => true],
                            ['choice_text' => 'couverture', 'is_correct' => false],
                            ['choice_text' => 'arbitrage', 'is_correct' => false],
                            ['choice_text' => 'diversification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie d\'arbitrage cherche principalement à...',
                        'explanation' => 'L\'arbitrage vise à exploiter une différence de prix incohérente entre actifs ou marchés liés, en construisant des positions compensatrices.',
                        'choices' => [
                            ['choice_text' => 'Prendre une position directionnelle sur l\'évolution future des cours', 'is_correct' => false],
                            ['choice_text' => 'Réduire une exposition existante à un risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Répartir le capital entre plusieurs actifs peu corrélés', 'is_correct' => false],
                            ['choice_text' => 'Profiter d\'une incohérence de prix entre des positions économiquement liées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si un même actif est coté 100 € sur un marché et 103 € sur un autre, quel comportement d\'arbitrage théorique est envisageable, sous hypothèse d\'exécution simultanée et de coûts négligeables ?',
                        'explanation' => 'L\'arbitragiste chercherait à acheter sur le marché moins cher et vendre sur le marché plus cher, sous réserve que l\'écart couvre les coûts et soit réellement exploitable.',
                        'choices' => [
                            ['choice_text' => 'Acheter à 103 € et vendre à 100 €', 'is_correct' => false],
                            ['choice_text' => 'Acheter à 100 € et attendre que l\'écart se referme', 'is_correct' => false],
                            ['choice_text' => 'Vendre à 100 € sur les deux marchés', 'is_correct' => false],
                            ['choice_text' => 'Acheter à 100 € et vendre à 103 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les possibilités d\'arbitrage pur ont-elles tendance à être rapidement réduites sur des marchés liquides ?',
                        'explanation' => 'Les opérations des arbitragistes rapprochent les prix entre marchés et contribuent à l\'efficience des prix.',
                        'choices' => [
                            ['choice_text' => 'Parce que les autorités de marché interdisent ce type d\'opérations dès qu\'elles sont repérées sur le marché financier', 'is_correct' => false],
                            ['choice_text' => 'Parce que les arbitrageurs achètent le moins cher et vendent le plus cher, ce qui réduit l\'écart', 'is_correct' => true],
                            ['choice_text' => 'Parce que les prix des dérivés sont fixés chaque jour par la chambre de compensation', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts de transaction augmentent avec le volume échangé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur n\'a aucune exposition au pétrole mais achète un future pétrole en anticipant une hausse des cours. Quel est son risque principal ?',
                        'explanation' => 'Sans exposition physique à compenser, sa position est une prise de risque directionnelle : une baisse du contrat peut générer une perte.',
                        'choices' => [
                            ['choice_text' => 'Le contrat ne peut plus être revendu avant l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Il devra prendre livraison de barils de pétrole physiques', 'is_correct' => false],
                            ['choice_text' => 'Le prix du future peut évoluer dans le mauvais sens', 'is_correct' => true],
                            ['choice_text' => 'Il perd la prime payée au départ si le cours monte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbitrage « sans risque » en théorie reste difficile à mettre en œuvre en pratique parce que...',
                        'explanation' => 'Même lorsqu\'une incohérence semble visible, les frais, le financement, les délais d\'exécution et le risque opérationnel peuvent éliminer le gain théorique.',
                        'choices' => [
                            ['choice_text' => 'Les écarts de prix observés proviennent surtout d\'erreurs de saisie', 'is_correct' => false],
                            ['choice_text' => 'Les autorités interdisent d\'acheter et de vendre le même actif le même jour', 'is_correct' => false],
                            ['choice_text' => 'Les dérivés se négocient à des prix qui ne dépendent pas du sous-jacent', 'is_correct' => false],
                            ['choice_text' => 'Les coûts de transaction, le financement et les contraintes d\'exécution existent', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque vend un forward à un client qui souhaite fixer son prix d\'achat. Du point de vue du client, le forward est surtout utilisé pour...',
                        'explanation' => 'Le forward fixe une condition future et réduit donc l\'incertitude sur le prix auquel le client réalisera sa transaction.',
                        'choices' => [
                            ['choice_text' => 'Spéculer sur la baisse du prix', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la volatilité de son coût', 'is_correct' => false],
                            ['choice_text' => 'Réduire une incertitude de prix', 'is_correct' => true],
                            ['choice_text' => 'Bénéficier d\'une baisse du prix d\'achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur qui vend un call couvert possède déjà les actions sous-jacentes. Pourquoi cette stratégie peut-elle être qualifiée de « couverte » ?',
                        'explanation' => 'Le vendeur du call détient déjà le sous-jacent. Si l\'acheteur exerce, il dispose des actions nécessaires, ce qui limite certains risques par rapport à un call nu.',
                        'choices' => [
                            ['choice_text' => 'Parce que la prime encaissée protège l\'investisseur contre une baisse du cours', 'is_correct' => false],
                            ['choice_text' => 'Parce que le call est adossé à un contrat à terme qui fixe le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'acheteur du call doit déposer les actions en garantie auprès du vendeur de l\'option', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actions détenues permettent de livrer si le call est exercé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé distingue le mieux couverture et spéculation ?',
                        'explanation' => 'La différence tient surtout à l\'objectif économique : réduire un risque existant pour le hedging, ou prendre un risque de marché pour rechercher un gain en spéculation.',
                        'choices' => [
                            ['choice_text' => 'La couverture cherche à réaliser un gain en anticipant le marché, la spéculation vise à réduire une exposition déjà existante', 'is_correct' => false],
                            ['choice_text' => 'La couverture se fait avec des options, la spéculation avec des futures', 'is_correct' => false],
                            ['choice_text' => 'La couverture vise à réduire une exposition existante, la spéculation cherche à tirer parti d\'une anticipation de marché', 'is_correct' => true],
                            ['choice_text' => 'La spéculation suppose de détenir l\'actif sous-jacent, alors que la couverture se fait sans position', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trader pense que la volatilité d\'une action va fortement augmenter mais ne veut pas prendre une direction haussière ou baissière. Quel type de produit est naturellement lié à cette vue ?',
                        'explanation' => 'Certaines stratégies d\'options permettent d\'exprimer une vue sur la volatilité plutôt que sur la seule direction du cours.',
                        'choices' => [
                            ['choice_text' => 'Une stratégie d\'options sensible à la volatilité', 'is_correct' => true],
                            ['choice_text' => 'Un swap de taux payant le taux fixe et recevant le variable', 'is_correct' => false],
                            ['choice_text' => 'Un future acheté pour profiter d\'une hausse', 'is_correct' => false],
                            ['choice_text' => 'Un forward de change à échéance déterminée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Marge, règlement et fonctionnement des futures',
                'description' => 'Comprendre ce qui change lorsqu\'un dérivé standardisé est négocié sur un marché organisé.',
                'questions' => [
                    [
                        'question' => 'Sur un marché de futures, la marge initiale sert principalement à...',
                        'explanation' => 'La marge initiale est un dépôt de garantie demandé aux participants. Elle ne représente pas le paiement intégral de la valeur notionnelle du contrat.',
                        'choices' => [
                            ['choice_text' => 'Payer à l\'avance la valeur totale du sous-jacent à la conclusion du contrat', 'is_correct' => false],
                            ['choice_text' => 'Rémunérer la chambre de compensation pour chaque séance de négociation', 'is_correct' => false],
                            ['choice_text' => 'Payer à l\'avance les commissions du courtier pour toute la durée du contrat', 'is_correct' => false],
                            ['choice_text' => 'Constituer un dépôt de garantie pour couvrir les variations de valeur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si la valeur d\'une position future se dégrade fortement, l\'investisseur peut être amené à...',
                        'explanation' => 'Lorsque les pertes réduisent la marge disponible sous certains seuils, un appel de marge peut exiger un apport de liquidités.',
                        'choices' => [
                            ['choice_text' => 'Clôturer sa position sans frais et récupérer le nominal du contrat', 'is_correct' => false],
                            ['choice_text' => 'Recevoir de la chambre de compensation une compensation pour la perte subie', 'is_correct' => false],
                            ['choice_text' => 'Verser des fonds supplémentaires pour restaurer le niveau de marge requis', 'is_correct' => true],
                            ['choice_text' => 'Payer à nouveau la valeur totale du sous-jacent pour conserver le contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le mark-to-market d\'un future signifie que...',
                        'explanation' => 'Les futures font l\'objet d\'une réévaluation régulière, avec des règlements de gains et pertes selon les mouvements du marché.',
                        'choices' => [
                            ['choice_text' => 'Le prix du contrat est fixé à la signature et ne change plus ensuite', 'is_correct' => false],
                            ['choice_text' => 'Les gains et pertes sont réglés une seule fois, à l\'échéance du contrat', 'is_correct' => false],
                            ['choice_text' => 'La marge est restituée chaque soir puis redéposée le lendemain', 'is_correct' => false],
                            ['choice_text' => 'Les gains et pertes sont réévalués régulièrement au fil du marché', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un future est acheté à 2 000 points. Après la séance, il vaut 2 020 points. Pour une position longue, le mouvement est...',
                        'explanation' => 'Une position longue bénéficie d\'une hausse du prix du contrat. Le passage de 2 000 à 2 020 points est donc favorable, sous réserve de la taille du contrat.',
                        'choices' => [
                            ['choice_text' => 'Favorable', 'is_correct' => true],
                            ['choice_text' => 'Défavorable', 'is_correct' => false],
                            ['choice_text' => 'Sans effet', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une position short sur futures perd généralement de la valeur lorsque...',
                        'explanation' => 'Une position vendeuse bénéficie d\'une baisse du prix. Une hausse du future va donc à son encontre.',
                        'choices' => [
                            ['choice_text' => 'Le prix du future monte', 'is_correct' => true],
                            ['choice_text' => 'Le prix du future baisse', 'is_correct' => false],
                            ['choice_text' => 'La marge initiale est déposée', 'is_correct' => false],
                            ['choice_text' => 'Le contrat approche de son échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les futures sont-ils souvent plus standardisés que les forwards ?',
                        'explanation' => 'La standardisation facilite la négociation, la compensation et la liquidité sur un marché organisé.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque contrat est négocié sur mesure entre deux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'ils sont conçus pour être négociés sur un marché organisé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'ils n\'exigent pas de dépôt de garantie auprès de la chambre de compensation', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur prix est fixé par l\'État et non par l\'offre et la demande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise utilise un future pour couvrir une exposition, mais le nombre de contrats ne correspond pas exactement à son besoin. Quel risque peut subsister ?',
                        'explanation' => 'Une taille de contrat standardisée peut empêcher un ajustement exact au montant de l\'exposition et laisser un risque résiduel.',
                        'choices' => [
                            ['choice_text' => 'Un risque de défaut de la contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Un risque de perte de la prime versée', 'is_correct' => false],
                            ['choice_text' => 'Un risque de couverture imparfaite', 'is_correct' => true],
                            ['choice_text' => 'Un risque de livraison de l\'actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un future standardisé, la chambre de compensation joue notamment un rôle de...',
                        'explanation' => 'La chambre de compensation s\'interpose entre les parties et contribue à la gestion du risque de contrepartie du marché organisé.',
                        'choices' => [
                            ['choice_text' => 'Contrepartie centrale et de gestion du risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Fournisseur du sous-jacent physique pour chaque contrat conclu', 'is_correct' => false],
                            ['choice_text' => 'Garant d\'un rendement minimum pour chaque investisseur', 'is_correct' => false],
                            ['choice_text' => 'Conseiller chargé de choisir la stratégie des clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une marge de variation est surtout liée à...',
                        'explanation' => 'La marge de variation reflète les gains et pertes résultant de l\'évolution de la position et des appels de marge correspondants.',
                        'choices' => [
                            ['choice_text' => 'La somme versée à l\'ouverture de la position', 'is_correct' => false],
                            ['choice_text' => 'La durée restante avant l\'échéance du contrat', 'is_correct' => false],
                            ['choice_text' => 'L\'évolution quotidienne de la valeur de la position', 'is_correct' => true],
                            ['choice_text' => 'L\'ensemble des commissions versées au courtier chaque jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur sous-estime la taille d\'un future et prend une position trop grande par rapport à son capital. Le principal danger est...',
                        'explanation' => 'Les futures permettent de contrôler une exposition notionnelle importante avec un dépôt de marge plus faible que cette exposition, ce qui amplifie l\'impact des mouvements de prix sur le capital engagé.',
                        'choices' => [
                            ['choice_text' => 'Le dépôt de marge sera perdu même si le prix reste stable', 'is_correct' => false],
                            ['choice_text' => 'La chambre de compensation devra rembourser les pertes de l\'investisseur', 'is_correct' => false],
                            ['choice_text' => 'Le contrat sera converti en option pour limiter la perte maximale', 'is_correct' => false],
                            ['choice_text' => 'L\'effet de levier peut amplifier fortement les gains comme les pertes', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Les risques propres aux dérivés',
                'description' => 'Reconnaître les principaux risques avant de considérer un dérivé comme une simple technique de couverture.',
                'questions' => [
                    [
                        'question' => 'Un investisseur détient un dérivé très peu échangé : il ne trouve pas d\'acheteur pour le revendre avant l\'échéance sans accepter un prix très bas. Quel risque est en cause ?',
                        'explanation' => 'Le risque de liquidité correspond à la difficulté de revendre ou de dénouer une position rapidement sans concéder un prix défavorable.',
                        'choices' => [
                            ['choice_text' => 'Le risque de base', 'is_correct' => false],
                            ['choice_text' => 'Le risque de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le risque de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de contrepartie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour réduire le risque de contrepartie d\'un contrat de gré à gré, une banque peut demander à son client de...',
                        'explanation' => 'Un collatéral (dépôt de garantie) limite la perte si la contrepartie fait défaut, ce qui réduit le risque de contrepartie.',
                        'choices' => [
                            ['choice_text' => 'augmenter le notionnel du contrat pour compenser le risque', 'is_correct' => false],
                            ['choice_text' => 'déposer une garantie (collatéral) en couverture du risque', 'is_correct' => true],
                            ['choice_text' => 'conclure des contrats d\'une durée plus longue pour diluer le risque', 'is_correct' => false],
                            ['choice_text' => 'détenir lui-même le sous-jacent physique pendant toute la durée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dérivé peut-il générer une forte perte même avec une mise de départ relativement faible ?',
                        'explanation' => 'Le capital initial engagé peut être inférieur à l\'exposition notionnelle, ce qui augmente la sensibilité du résultat aux mouvements du marché.',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'effet de levier peut être important', 'is_correct' => true],
                            ['choice_text' => 'Parce que la perte est limitée à la valeur du dépôt initial', 'is_correct' => false],
                            ['choice_text' => 'Parce que le sous-jacent perd de la valeur à chaque échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le dérivé doit être détenu jusqu\'à l\'échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prend une couverture sur 10 millions de dollars alors que son besoin réel est de 6 millions. Que risque-t-elle de créer ?',
                        'explanation' => 'La partie de couverture qui dépasse l\'exposition réelle peut laisser une position ouverte dans le sens opposé au besoin initial.',
                        'choices' => [
                            ['choice_text' => 'Une position résiduelle de 4 millions de dollars', 'is_correct' => true],
                            ['choice_text' => 'Un manque de couverture de 4 millions de dollars', 'is_correct' => false],
                            ['choice_text' => 'Une position résiduelle de 6 millions de dollars', 'is_correct' => false],
                            ['choice_text' => 'Une couverture exacte du besoin de 6 millions de dollars', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option ne produit pas de valeur immédiate pour l\'acheteur si elle reste hors de la monnaie à l\'échéance. Quel élément a néanmoins été payé au départ ?',
                        'explanation' => 'L\'acheteur paie la prime dès la mise en place. Cette prime est le coût de la protection ou du droit offert par l\'option.',
                        'choices' => [
                            ['choice_text' => 'Le coupon', 'is_correct' => false],
                            ['choice_text' => 'Le dividende', 'is_correct' => false],
                            ['choice_text' => 'La valeur nominale intégrale du sous-jacent', 'is_correct' => false],
                            ['choice_text' => 'La prime', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise décide de ne pas suivre quotidiennement ses positions en dérivés. Quel risque de gestion peut en découler ?',
                        'explanation' => 'Les dérivés peuvent évoluer rapidement. Un suivi insuffisant peut laisser des expositions importantes ou des appels de marge non anticipés.',
                        'choices' => [
                            ['choice_text' => 'Un risque de contrôle et de suivi des expositions', 'is_correct' => true],
                            ['choice_text' => 'Un risque de dilution du capital détenu par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Un risque de perte de la prime déjà payée', 'is_correct' => false],
                            ['choice_text' => 'Un risque de crédit sur la dette de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé sur le risque de marché d\'un future est correct ?',
                        'explanation' => 'Le prix du future évolue avec le marché. Une position longue ou courte peut donc gagner ou perdre selon cette évolution.',
                        'choices' => [
                            ['choice_text' => 'Le prix du future est fixé à la signature et ne varie pas ensuite', 'is_correct' => false],
                            ['choice_text' => 'Le risque de marché disparaît dès que la marge initiale est déposée', 'is_correct' => false],
                            ['choice_text' => 'Le vendeur du future est exposé à une variation du prix, pas l\'acheteur', 'is_correct' => false],
                            ['choice_text' => 'Une variation du prix du contrat peut générer des gains ou des pertes rapides', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise signe un dérivé sans vérifier les conventions de règlement. Pourquoi cela peut-il poser problème ?',
                        'explanation' => 'Les dates, modes de règlement et mécanismes de livraison influencent directement les flux opérationnels et le besoin de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Les modalités de règlement influencent les flux, les dates et parfois les besoins de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Les conventions de règlement relèvent de la comptabilité et n\'influencent pas les flux', 'is_correct' => false],
                            ['choice_text' => 'Le strike est recalculé par la contrepartie à chaque date de paiement', 'is_correct' => false],
                            ['choice_text' => 'Le contrat est réglé au taux le plus favorable à l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie utilise plusieurs dérivés dépendant du même facteur de marché. Quel risque de concentration faut-il surveiller ?',
                        'explanation' => 'Des positions différentes peuvent toutes être sensibles au même facteur. La diversification apparente peut donc être trompeuse.',
                        'choices' => [
                            ['choice_text' => 'Les positions se compensent entre elles et le risque total devient nul', 'is_correct' => false],
                            ['choice_text' => 'Le risque de contrepartie est multiplié par le nombre de dérivés', 'is_correct' => false],
                            ['choice_text' => 'Une évolution défavorable commune peut toucher plusieurs positions à la fois', 'is_correct' => true],
                            ['choice_text' => 'Les frais de courtage augmentent avec le nombre de positions ouvertes sur le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la documentation d\'un dérivé est-elle importante pour une entreprise ?',
                        'explanation' => 'La documentation contractuelle permet de savoir précisément ce qui a été convenu et facilite le suivi juridique, financier et opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Elle fixe le prix du sous-jacent à la place du marché', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la nécessité de suivre les positions en cours', 'is_correct' => false],
                            ['choice_text' => 'Elle précise les droits, obligations, échéances et modalités de règlement', 'is_correct' => true],
                            ['choice_text' => 'Elle limite la perte maximale de l\'entreprise sur le dérivé', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Quelle solution pour quel besoin ?',
                'description' => 'Associer des situations de trésorerie et d\'investissement à des instruments dérivés cohérents.',
                'questions' => [
                    [
                        'question' => 'Une entreprise sait qu\'elle devra acheter des dollars dans trois mois, mais elle accepterait de ne pas exercer sa couverture si le dollar baisse fortement. Quel instrument correspond à cette préférence ?',
                        'explanation' => 'Le call sur USD protège contre la hausse tout en laissant la possibilité de profiter d\'un dollar moins cher en n\'exerçant pas.',
                        'choices' => [
                            ['choice_text' => 'Une option d\'achat sur USD', 'is_correct' => true],
                            ['choice_text' => 'Un forward d\'achat sur USD', 'is_correct' => false],
                            ['choice_text' => 'Une option de vente sur USD', 'is_correct' => false],
                            ['choice_text' => 'Une vente à terme de dollars', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exportateur recevra 1 million USD dans quatre mois et veut sécuriser son taux sans payer une prime d\'option. Quel instrument simple peut convenir ?',
                        'explanation' => 'L\'exportateur recevra des dollars et peut donc vendre ces dollars à terme. Le forward permet de fixer le taux sans prime d\'option explicite.',
                        'choices' => [
                            ['choice_text' => 'Un put acheté sur le dollar', 'is_correct' => false],
                            ['choice_text' => 'Un forward d\'achat de dollars à terme', 'is_correct' => false],
                            ['choice_text' => 'Un call acheté sur le dollar', 'is_correct' => false],
                            ['choice_text' => 'Un forward de vente de dollars', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société possède un emprunt à taux variable et cherche à plafonner son taux d\'intérêt maximal, tout en conservant la possibilité de bénéficier d\'une baisse des taux. Quelle famille d\'instrument correspond à cette logique ?',
                        'explanation' => 'Une option de taux peut créer un plafond de coût tout en laissant l\'entreprise profiter d\'une baisse du taux de marché, moyennant un coût de prime selon la structure choisie.',
                        'choices' => [
                            ['choice_text' => 'Un swap de taux fixe contre variable', 'is_correct' => false],
                            ['choice_text' => 'Une option de taux d\'intérêt', 'is_correct' => true],
                            ['choice_text' => 'Un future sur indice boursier', 'is_correct' => false],
                            ['choice_text' => 'Un forward de change à trois mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur possède 1 000 actions et souhaite un filet de sécurité contre une baisse importante, mais ne veut pas vendre immédiatement les actions. Quelle stratégie est cohérente ?',
                        'explanation' => 'Les puts donnent un droit de vente à un strike déterminé et peuvent donc limiter la perte d\'une baisse importante du sous-jacent.',
                        'choices' => [
                            ['choice_text' => 'Acheter des puts sur les actions', 'is_correct' => true],
                            ['choice_text' => 'Acheter des calls sur les actions', 'is_correct' => false],
                            ['choice_text' => 'Vendre des puts sur les actions', 'is_correct' => false],
                            ['choice_text' => 'Acheter un future sur les actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise de transport veut limiter le risque d\'une hausse du prix du carburant pour une période de six mois. Quel élément doit-elle vérifier avant de choisir le nombre de contrats ?',
                        'explanation' => 'La couverture doit être dimensionnée à partir de l\'exposition économique et des caractéristiques du contrat utilisé.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de contrats détenus par ses concurrents', 'is_correct' => false],
                            ['choice_text' => 'Le prix moyen du carburant sur les dix dernières années', 'is_correct' => false],
                            ['choice_text' => 'Le cours de l\'action de l\'entreprise de transport', 'is_correct' => false],
                            ['choice_text' => 'Le volume réellement exposé et la taille du contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un trésorier peut-il préférer plusieurs échéances de couverture plutôt qu\'un seul gros contrat très éloigné dans le temps ?',
                        'explanation' => 'Échelonner les échéances peut mieux correspondre aux encaissements et décaissements réels et éviter un décalage important entre couverture et exposition.',
                        'choices' => [
                            ['choice_text' => 'Pour viser le taux de change le plus favorable de l\'année', 'is_correct' => false],
                            ['choice_text' => 'Pour rapprocher les couvertures du calendrier réel des flux', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter de payer des frais de transaction', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir un notionnel total plus faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société pense que les taux vont rester stables et cherche surtout à éliminer l\'incertitude sur ses charges d\'intérêts. Quelle logique de couverture est la plus cohérente ?',
                        'explanation' => 'Si l\'objectif principal est la prévisibilité du coût, un swap de taux peut remplacer une partie du taux variable par un taux fixe contractuel.',
                        'choices' => [
                            ['choice_text' => 'Acheter une option de taux pour plafonner son coût', 'is_correct' => false],
                            ['choice_text' => 'Payer variable et recevoir fixe via un swap', 'is_correct' => false],
                            ['choice_text' => 'Fixer tout ou partie du taux via un swap', 'is_correct' => true],
                            ['choice_text' => 'Allonger la durée de la dette à taux variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME n\'a qu\'une petite exposition au change et souhaite malgré tout conserver la possibilité de profiter d\'un mouvement favorable. Quel point doit-elle comparer avant d\'acheter une option ?',
                        'explanation' => 'Pour une petite exposition, le coût de la prime peut être important par rapport au risque couvert. La décision doit donc comparer coût et bénéfice de la protection.',
                        'choices' => [
                            ['choice_text' => 'Le taux de change actuel par rapport à sa moyenne de l\'an dernier', 'is_correct' => false],
                            ['choice_text' => 'Le coût de la prime par rapport à la valeur de la protection', 'is_correct' => true],
                            ['choice_text' => 'Le montant total des dettes de la PME', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de banques proposant des forwards', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque envisage un dérivé pour réduire un risque de taux. Quel document interne est particulièrement utile avant la transaction ?',
                        'explanation' => 'La gouvernance d\'une couverture commence par l\'identification du risque, de l\'objectif et des limites de la transaction.',
                        'choices' => [
                            ['choice_text' => 'Un classement des meilleurs rendements de dérivés sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Une prévision de résultat annuel sans lien avec la transaction', 'is_correct' => false],
                            ['choice_text' => 'La liste des clients ayant déjà utilisé ce type de produit', 'is_correct' => false],
                            ['choice_text' => 'Une fiche décrivant l\'exposition, l\'objectif de couverture et les limites autorisées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un gestionnaire choisit entre un future et une option. Quel compromis doit-il notamment considérer ?',
                        'explanation' => 'Le future crée un engagement ferme, alors que l\'option apporte un droit avec une prime. Le choix dépend donc du profil de risque recherché.',
                        'choices' => [
                            ['choice_text' => 'Le caractère obligatoire du future contre la flexibilité de l\'option et son coût de prime', 'is_correct' => true],
                            ['choice_text' => 'Le fait que le future coûte une prime alors que l\'option est gratuite', 'is_correct' => false],
                            ['choice_text' => 'Le fait que l\'option engage fermement les deux parties alors que le future laisse le choix à l\'acheteur', 'is_correct' => false],
                            ['choice_text' => 'Le fait que le future ne puisse pas servir à couvrir un risque de prix', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de trésorerie et de marché',
                'description' => 'Mettre les notions de dérivés au service de décisions simples de trésorerie et d\'investissement.',
                'questions' => [
                    [
                        'question' => 'Une entreprise française facture un client marocain 900 000 MAD dans trois mois. Si elle souhaite connaître dès aujourd\'hui la valeur en euros de cette créance future, que peut-elle faire ?',
                        'explanation' => 'L\'entreprise recevra des dirhams et peut donc les vendre à terme pour fixer leur contre-valeur en euros.',
                        'choices' => [
                            ['choice_text' => 'Acheter des dirhams à terme contre euros', 'is_correct' => false],
                            ['choice_text' => 'Convertir au cours du jour de l\'encaissement', 'is_correct' => false],
                            ['choice_text' => 'Vendre des euros à terme contre dirhams', 'is_correct' => false],
                            ['choice_text' => 'Vendre les dirhams à terme contre euros', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète un call sur une action à 2 € de prime avec un strike de 40 €. L\'action vaut 45 € à l\'échéance. Quelle est sa valeur intrinsèque ?',
                        'explanation' => 'La valeur intrinsèque du call est 45 - 40 = 5 €. Le gain net après la prime serait de 3 € par action, avant frais.',
                        'choices' => [
                            ['choice_text' => '2 €', 'is_correct' => false],
                            ['choice_text' => '3 €', 'is_correct' => false],
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '7 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie chaque année des intérêts sur un prêt variable. Le taux de référence passe de 3 % à 5 %. Sans couverture, que se passe-t-il généralement pour ses charges d\'intérêts ?',
                        'explanation' => 'Avec un prêt à taux variable, une hausse du taux de référence entraîne généralement une hausse des intérêts à payer, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Elles diminuent', 'is_correct' => false],
                            ['choice_text' => 'Elles augmentent', 'is_correct' => true],
                            ['choice_text' => 'Elles deviennent nulles', 'is_correct' => false],
                            ['choice_text' => 'Elles sont indépendantes du taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un producteur de café doit vendre sa production dans quatre mois. Il ne veut pas subir une baisse des prix, mais il accepterait de profiter d\'une hausse. Quel instrument est particulièrement flexible pour cette protection ?',
                        'explanation' => 'Un put donne le droit de vendre au strike. Si le marché monte, le producteur peut vendre au marché ; si le marché baisse, l\'option peut protéger.',
                        'choices' => [
                            ['choice_text' => 'Un call sur le prix du café', 'is_correct' => false],
                            ['choice_text' => 'Un future acheté sur le café', 'is_correct' => false],
                            ['choice_text' => 'Un forward de vente sur le café', 'is_correct' => false],
                            ['choice_text' => 'Un put sur le prix du café', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque détient un portefeuille important de prêts à taux fixe. Si les taux de marché montent fortement, quelle relation est généralement attendue entre la valeur économique des prêts et les taux ?',
                        'explanation' => 'Des flux fixes futurs sont moins attractifs lorsque le taux de marché augmente, ce qui tend à réduire leur valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'La valeur des prêts à taux fixe tend à augmenter', 'is_correct' => false],
                            ['choice_text' => 'La valeur des prêts est indépendante des taux de marché', 'is_correct' => false],
                            ['choice_text' => 'La valeur des prêts à taux fixe tend à baisser', 'is_correct' => true],
                            ['choice_text' => 'La valeur des prêts ne change qu\'à leur échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trésorier observe qu\'une couverture en future donne un résultat moins favorable que prévu malgré une direction de marché correcte. Quelle cause simple doit-il envisager ?',
                        'explanation' => 'Le dérivé et l\'exposition couverte peuvent ne pas évoluer exactement en parallèle. Cet écart est le risque de base.',
                        'choices' => [
                            ['choice_text' => 'Un risque de base', 'is_correct' => true],
                            ['choice_text' => 'Un risque de contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Un risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui a acheté une option constate que le marché évolue dans le bon sens. Pourquoi la prime de l\'option peut-elle néanmoins perdre de la valeur avec le temps si rien d\'autre ne change ?',
                        'explanation' => 'Le temps restant est une composante de la valeur d\'une option. À conditions égales, son écoulement réduit progressivement la valeur temporelle.',
                        'choices' => [
                            ['choice_text' => 'Parce que la valeur intrinsèque diminue chaque jour même si le cours est stable', 'is_correct' => false],
                            ['choice_text' => 'Parce que le strike est révisé à la baisse à mesure que l\'échéance approche', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur temporelle diminue à mesure que l\'échéance approche', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'acheteur doit rembourser une partie de la prime chaque jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société utilise un swap de taux pour payer fixe. Le taux de marché baisse fortement après la transaction. Quel inconvénient économique peut-elle rencontrer ?',
                        'explanation' => 'Le swap de fixation du taux apporte de la visibilité mais réduit aussi la capacité à profiter d\'une baisse ultérieure des taux.',
                        'choices' => [
                            ['choice_text' => 'Elle reste engagée sur un coût fixe supérieur au nouveau taux de marché', 'is_correct' => true],
                            ['choice_text' => 'Elle doit rembourser le notionnel de la dette plus tôt que prévu', 'is_correct' => false],
                            ['choice_text' => 'Elle paie désormais un taux variable supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Elle doit verser une prime supplémentaire à l\'acheteur de l\'option de taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur qui détient une option call hors de la monnaie juste avant l\'échéance observe une baisse du cours du sous-jacent. Quelle combinaison est la plus défavorable pour la valeur de son option ?',
                        'explanation' => 'Un call souffre d\'une baisse du sous-jacent, et le manque de temps limite en plus la possibilité d\'un retournement favorable.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du sous-jacent et un temps très court restant', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du sous-jacent et un temps très court restant', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du sous-jacent et une échéance encore lointaine', 'is_correct' => false],
                            ['choice_text' => 'Un strike plus bas et une échéance encore lointaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise couvre un achat futur de devise avec une option et le marché devient très favorable pour elle. Quel est l\'intérêt de l\'option dans ce scénario ?',
                        'explanation' => 'L\'option donne un droit. L\'entreprise peut donc laisser expirer l\'option et profiter du meilleur prix du marché, en acceptant le coût de la prime.',
                        'choices' => [
                            ['choice_text' => 'Elle peut renoncer à exercer et acheter la devise au marché', 'is_correct' => true],
                            ['choice_text' => 'Elle est tenue d\'exercer au strike même si le marché est plus favorable', 'is_correct' => false],
                            ['choice_text' => 'Elle perd la protection dès que le marché devient favorable', 'is_correct' => false],
                            ['choice_text' => 'Elle bénéficie d\'un remboursement de la prime dès que l\'option n\'est pas exercée', 'is_correct' => false],
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
