<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FixedIncomeBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fixed-income')->firstOrFail();

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 55],
            ['duration' => 25, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 57],
            ['duration' => 31, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 56],
            ['duration' => 29, 'passing_score' => 59],
            ['duration' => 28, 'passing_score' => 58],
            ['duration' => 30, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 57],
            ['duration' => 29, 'passing_score' => 58],
        ];

        $quizzes = [
            [
                'title' => 'Comprendre les obligations dans la pratique',
                'description' => 'Un premier parcours pour reconnaître les principaux éléments d\'une obligation et comprendre comment elle se comporte.',
                'questions' => [
                    [
                        'question' => 'Une obligation a une valeur nominale de 1 000 € et verse un coupon annuel de 50 €. Quel est son taux de coupon ?',
                        'explanation' => 'Le taux de coupon correspond au coupon annuel divisé par la valeur nominale : 50 / 1 000 = 5 %.',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'un investisseur achète une obligation au pair, cela signifie généralement que le prix payé est égal à...',
                        'explanation' => 'Acheter au pair signifie acheter l\'obligation à un prix égal à sa valeur nominale, par exemple 1 000 € pour un nominal de 1 000 €.',
                        'choices' => [
                            ['choice_text' => 'la moitié du nominal', 'is_correct' => false],
                            ['choice_text' => 'la valeur nominale', 'is_correct' => true],
                            ['choice_text' => 'le montant des intérêts futurs', 'is_correct' => false],
                            ['choice_text' => 'la valeur comptable de l\'émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise émet une obligation à taux fixe. Pour l\'investisseur, le coupon sert principalement à...',
                        'explanation' => 'Le coupon est le paiement d\'intérêt prévu par les conditions de l\'obligation. Il ne transforme pas l\'obligation en action et ne garantit pas une sortie anticipée.',
                        'choices' => [
                            ['choice_text' => 'obtenir un droit de vote aux assemblées de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'assurer une plus-value sur le prix de l\'obligation', 'is_correct' => false],
                            ['choice_text' => 'recevoir un flux d\'intérêts prévu', 'is_correct' => true],
                            ['choice_text' => 'rembourser chaque année une fraction du capital prêté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux obligations ont le même émetteur et le même nominal. Laquelle a, toutes choses égales par ailleurs, le coupon annuel le plus élevé ?',
                        'explanation' => 'À nominal identique, un coupon en euros plus élevé correspond à un taux de coupon plus élevé. Ici, 35 € est supérieur à 20 €.',
                        'choices' => [
                            ['choice_text' => 'celle avec un coupon de 20 € sur 1 000 €', 'is_correct' => false],
                            ['choice_text' => 'celle avec un coupon de 35 € sur 1 000 €', 'is_correct' => true],
                            ['choice_text' => 'celle avec zéro coupon', 'is_correct' => false],
                            ['choice_text' => 'celle dont l\'échéance est plus courte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À l\'échéance d\'une obligation classique sans défaut, l\'investisseur reçoit généralement...',
                        'explanation' => 'À l\'échéance, le principal nominal est remboursé. Le dernier coupon prévu peut également être versé à cette date.',
                        'choices' => [
                            ['choice_text' => 'la valeur nominale, avec le dernier coupon selon les conditions de l\'obligation', 'is_correct' => true],
                            ['choice_text' => 'la valeur de marché de l\'obligation à la veille de l\'échéance, sans coupon', 'is_correct' => false],
                            ['choice_text' => 'le nominal diminué des coupons déjà versés pendant la vie du titre', 'is_correct' => false],
                            ['choice_text' => 'le nominal majoré des intérêts composés sur toute la durée, au lieu du coupon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon se distingue surtout parce qu\'elle...',
                        'explanation' => 'Une obligation zéro coupon ne verse pas de coupon périodique. Le rendement provient principalement de l\'écart entre le prix d\'achat et le montant remboursé à l\'échéance.',
                        'choices' => [
                            ['choice_text' => 'ne rembourse pas son nominal à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'ne peut être émise que par un État', 'is_correct' => false],
                            ['choice_text' => 'ne verse pas de coupon périodique', 'is_correct' => true],
                            ['choice_text' => 'verse un coupon indexé sur les bénéfices de l\'émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète une obligation pour 980 € alors que sa valeur nominale est de 1 000 €. À la seule échéance, hors défaut et hors coupons, quel montant de principal est normalement remboursé ?',
                        'explanation' => 'Le prix d\'achat et le nominal sont deux notions différentes. À l\'échéance, le principal contractuel est normalement le nominal, ici 1 000 €.',
                        'choices' => [
                            ['choice_text' => '980 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '20 €', 'is_correct' => false],
                            ['choice_text' => '2 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à taux fixe verse 40 € par an sur un nominal de 1 000 €. Si l\'investisseur conserve l\'obligation jusqu\'à l\'échéance et que l\'émetteur paie correctement, le coupon annuel reste-t-il normalement à 40 € ?',
                        'explanation' => 'Pour une obligation à taux fixe, le coupon contractuel ne change pas simplement parce que le prix de marché de l\'obligation évolue.',
                        'choices' => [
                            ['choice_text' => 'Oui, selon les conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'Non, il s\'ajuste chaque année en fonction du prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Non, il est recalculé chaque année selon l\'inflation', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais il est versé sous forme d\'actions de l\'émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément décrit le mieux l\'échéance d\'une obligation ?',
                        'explanation' => 'L\'échéance est la date à laquelle le principal doit être remboursé selon les modalités du titre, sauf événement particulier comme un défaut ou une option contractuelle.',
                        'choices' => [
                            ['choice_text' => 'La date du versement du premier coupon de l\'obligation', 'is_correct' => false],
                            ['choice_text' => 'La date prévue pour le remboursement du principal', 'is_correct' => true],
                            ['choice_text' => 'La date d\'émission de l\'obligation sur le marché primaire', 'is_correct' => false],
                            ['choice_text' => 'La date de la dernière révision de la note de crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le vocabulaire obligataire, qui est l\'émetteur d\'une obligation ?',
                        'explanation' => 'L\'émetteur est l\'entité (entreprise, État…) qui emprunte en émettant l\'obligation. Il s\'engage à verser les coupons et à rembourser le nominal à l\'échéance.',
                        'choices' => [
                            ['choice_text' => 'L\'investisseur qui achète le titre et reçoit les coupons', 'is_correct' => false],
                            ['choice_text' => 'L\'entité qui emprunte et s\'engage à payer les coupons et à rembourser', 'is_correct' => true],
                            ['choice_text' => 'Le courtier qui exécute l\'ordre d\'achat sur le marché', 'is_correct' => false],
                            ['choice_text' => 'L\'agence qui attribue une note de crédit au titre', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prix d’une obligation et niveau des taux',
                'description' => 'Des cas simples pour comprendre pourquoi le prix d\'une obligation existante réagit aux mouvements des taux d\'intérêt.',
                'questions' => [
                    [
                        'question' => 'Une obligation à taux fixe devient généralement moins attractive lorsque les taux de marché augmentent. Que fait alors son prix de marché, toutes choses égales par ailleurs ?',
                        'explanation' => 'Quand les taux de marché montent, les nouvelles obligations offrent souvent des rendements plus élevés. L\'ancienne obligation à coupon plus faible doit alors se négocier à un prix inférieur pour offrir un rendement compétitif.',
                        'choices' => [
                            ['choice_text' => 'Il monte avec les taux', 'is_correct' => false],
                            ['choice_text' => 'Il reste égal au nominal', 'is_correct' => false],
                            ['choice_text' => 'Il varie sans lien avec les taux', 'is_correct' => false],
                            ['choice_text' => 'Il baisse généralement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse un coupon fixe de 3 %. Les taux de marché pour des titres comparables passent à 5 %. Pourquoi son prix peut-il baisser ?',
                        'explanation' => 'Les flux de l\'ancienne obligation restent fixés contractuellement. Face à de nouvelles obligations offrant autour de 5 %, le titre à 3 % doit généralement afficher un prix plus faible pour que son rendement courant à l\'achat soit compétitif.',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'émetteur réduit le coupon pour s\'aligner sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'échéance est avancée pour suivre la hausse des taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nominal est ajusté à la baisse quand les taux montent', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses flux fixes deviennent relativement moins intéressants', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur détient une obligation à taux fixe et prévoit une hausse des taux. Quel risque de marché doit-il surveiller en priorité ?',
                        'explanation' => 'Pour une obligation à taux fixe, une hausse des taux de marché exerce généralement une pression à la baisse sur le prix du titre avant l\'échéance.',
                        'choices' => [
                            ['choice_text' => 'Le risque que le prix de l\'obligation baisse', 'is_correct' => true],
                            ['choice_text' => 'Le risque que le coupon contractuel soit révisé à la baisse', 'is_correct' => false],
                            ['choice_text' => 'Le risque que le nominal soit réduit à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Le risque que le prix de l\'obligation augmente trop vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux obligations de même échéance sont identiques sauf pour leur coupon : l\'une verse 2 %, l\'autre 6 %. Si les taux du marché montent brusquement, laquelle subit en général la plus forte baisse de prix ?',
                        'explanation' => 'À échéance égale, l\'obligation au coupon le plus faible reçoit une plus grande part de ses flux en fin de vie : sa duration est plus élevée et son prix réagit davantage à une hausse des taux.',
                        'choices' => [
                            ['choice_text' => 'Celle à 6 %, car ses coupons élevés sont plus exposés à la hausse', 'is_correct' => false],
                            ['choice_text' => 'Celle à 2 %, dont les flux sont reçus en moyenne plus tard', 'is_correct' => true],
                            ['choice_text' => 'Les deux subissent la même baisse, car elles ont la même échéance', 'is_correct' => false],
                            ['choice_text' => 'Ni l\'une ni l\'autre, car le prix d\'une obligation à taux fixe est figé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète une obligation déjà émise en dessous de sa valeur nominale. Cette situation signifie notamment que...',
                        'explanation' => 'Quand une obligation se négocie sous le pair, le rendement exigé par le marché est supérieur à son taux de coupon : l\'acheteur gagne aussi la différence entre le prix payé et le nominal remboursé. Cela peut venir de la hausse des taux, du risque de crédit ou d\'autres conditions de marché ; un prix sous le nominal ne signifie pas automatiquement un défaut.',
                        'choices' => [
                            ['choice_text' => 'le rendement exigé par le marché est inférieur au coupon', 'is_correct' => false],
                            ['choice_text' => 'le rendement exigé par le marché est supérieur au coupon', 'is_correct' => true],
                            ['choice_text' => 'le coupon est calculé sur un nominal plus faible que prévu', 'is_correct' => false],
                            ['choice_text' => 'l\'obligation est entrée dans sa dernière année avant l\'échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les taux de marché baissent et que le risque de crédit de l\'émetteur reste inchangé, le prix d\'une obligation à taux fixe a tendance à...',
                        'explanation' => 'Avec des taux de marché plus bas, les coupons fixes existants deviennent relativement plus attractifs, ce qui soutient généralement le prix de l\'obligation.',
                        'choices' => [
                            ['choice_text' => 'baisser', 'is_correct' => false],
                            ['choice_text' => 'rester inchangé', 'is_correct' => false],
                            ['choice_text' => 'augmenter', 'is_correct' => true],
                            ['choice_text' => 'fluctuer sans lien avec les taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation cotée 102 % du nominal de 1 000 € vaut environ...',
                        'explanation' => 'Une cotation de 102 % signifie 1,02 × 1 000 €, soit 1 020 €. L\'obligation se négocie alors au-dessus du pair.',
                        'choices' => [
                            ['choice_text' => '980 €', 'is_correct' => false],
                            ['choice_text' => '1 020 €', 'is_correct' => true],
                            ['choice_text' => '1 200 €', 'is_correct' => false],
                            ['choice_text' => '102 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de nominal 1 000 € s\'échange à 940 €. Quelle est sa cotation en pourcentage du nominal ?',
                        'explanation' => '940 / 1 000 = 0,94, soit une cotation de 94 % du nominal : l\'obligation se négocie sous le pair.',
                        'choices' => [
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '106 %', 'is_correct' => false],
                            ['choice_text' => '94 %', 'is_correct' => true],
                            ['choice_text' => '940 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rendement d\'une obligation achetée aujourd\'hui ne dépend-il que de son taux de coupon ?',
                        'explanation' => 'Le coupon décrit un flux contractuel, mais le rendement pour un nouvel acheteur dépend également du prix payé, de l\'échéance et des autres flux du titre.',
                        'choices' => [
                            ['choice_text' => 'Oui, car le coupon est le seul flux contractuel de l\'obligation', 'is_correct' => false],
                            ['choice_text' => 'Oui, car le coupon fixe détermine l\'intégralité du rendement', 'is_correct' => false],
                            ['choice_text' => 'Non, seule l\'échéance détermine le rendement de l\'acheteur', 'is_correct' => false],
                            ['choice_text' => 'Non, le prix d\'achat et les flux futurs comptent aussi', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur paie 1 050 € pour une obligation dont le nominal est de 1 000 €. Le titre est acheté...',
                        'explanation' => 'Un prix supérieur au nominal signifie que l\'obligation est achetée au-dessus du pair, ou avec une prime.',
                        'choices' => [
                            ['choice_text' => 'au pair', 'is_correct' => false],
                            ['choice_text' => 'sous le pair', 'is_correct' => false],
                            ['choice_text' => 'au-dessus du pair', 'is_correct' => true],
                            ['choice_text' => 'à zéro coupon obligatoirement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer le rendement de marché plutôt que le seul coupon est-il utile lorsqu\'on compare des obligations ?',
                        'explanation' => 'Le taux de coupon est fixé par rapport au nominal, tandis que le rendement d\'un investisseur tient compte du prix réellement payé et des flux qu\'il recevra.',
                        'choices' => [
                            ['choice_text' => 'Parce que le rendement est fixé à l\'émission alors que le coupon varie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coupon varie chaque jour avec le prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement est égal au coupon divisé par le nominal', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement tient compte du prix payé et des flux attendus', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rendement courant et lecture d’un titre',
                'description' => 'Calculs et interprétations simples pour passer du coupon à une lecture plus utile du rendement d\'une obligation.',
                'questions' => [
                    [
                        'question' => 'Une obligation verse un coupon annuel de 70 € et se négocie à 1 000 €. Son rendement courant est de...',
                        'explanation' => 'Le rendement courant se calcule ici par coupon annuel / prix de marché, soit 70 / 1 000 = 7 %.',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '7 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '14 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse 50 € de coupon annuel et se négocie à 950 €. Son rendement courant est le plus proche de...',
                        'explanation' => '50 / 950 ≈ 0,0526, soit environ 5,26 %. Ce calcul ne correspond pas exactement au Yield to Maturity, qui intégrerait aussi les autres flux et l\'échéance.',
                        'choices' => [
                            ['choice_text' => '5,00 %', 'is_correct' => false],
                            ['choice_text' => '5,26 %', 'is_correct' => true],
                            ['choice_text' => '6,50 %', 'is_correct' => false],
                            ['choice_text' => '9,50 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coupon annuel reste constant mais que le prix de marché de l\'obligation baisse, le rendement courant calculé comme coupon/prix...',
                        'explanation' => 'Avec un numérateur constant et un prix plus faible au dénominateur, le ratio coupon/prix augmente.',
                        'choices' => [
                            ['choice_text' => 'baisse', 'is_correct' => false],
                            ['choice_text' => 'reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'devient indépendant du coupon', 'is_correct' => false],
                            ['choice_text' => 'augmente', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de nominal 1 000 € verse 80 € par an et vaut 1 100 €. Son rendement courant est d\'environ...',
                        'explanation' => 'Le rendement courant est 80 / 1 100 ≈ 7,27 %. Le 8 % correspond au coupon rapporté au nominal, pas au prix de marché.',
                        'choices' => [
                            ['choice_text' => '7,27 %', 'is_correct' => true],
                            ['choice_text' => '8,00 %', 'is_correct' => false],
                            ['choice_text' => '8,80 %', 'is_correct' => false],
                            ['choice_text' => '11,00 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement courant n\'est-il pas identique dans tous les cas au Yield to Maturity ?',
                        'explanation' => 'Le rendement courant est un indicateur simple basé sur le coupon et le prix. Le Yield to Maturity tient compte de l\'ensemble des flux jusqu\'à l\'échéance, dont le remboursement du principal.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il est calculé sur le nominal alors que le YTM utilise le prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il tient compte des coupons réinvestis jusqu\'à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il n\'est défini que pour les obligations à taux variable', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il ignore le remboursement du nominal et certains éléments temporels', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète une obligation à 920 € pour un nominal de 1 000 €, sans considérer les coupons. À l\'échéance, le remboursement du nominal crée un gain de...',
                        'explanation' => 'Si le nominal de 1 000 € est remboursé après un achat à 920 €, l\'écart sur le principal est de 80 €. Les coupons éventuels viennent s\'ajouter séparément.',
                        'choices' => [
                            ['choice_text' => '20 €', 'is_correct' => false],
                            ['choice_text' => '80 €', 'is_correct' => true],
                            ['choice_text' => '920 €', 'is_correct' => false],
                            ['choice_text' => '1 920 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation est cotée à 103 et son nominal est de 1 000 €. Le prix est de...',
                        'explanation' => 'Une cotation de 103 signifie 103 % du nominal : 1,03 × 1 000 = 1 030 €.',
                        'choices' => [
                            ['choice_text' => '103 €', 'is_correct' => false],
                            ['choice_text' => '970 €', 'is_correct' => false],
                            ['choice_text' => '1 030 €', 'is_correct' => true],
                            ['choice_text' => '1 300 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand une obligation s\'échange sous le pair, le rendement demandé par le marché peut être supérieur au taux de coupon. Pourquoi ?',
                        'explanation' => 'Un achat sous le pair permet, en plus des coupons, d\'espérer un remboursement du nominal supérieur au prix payé si l\'obligation arrive normalement à échéance.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coupon est relevé par l\'émetteur lorsque le titre se négocie sous le pair', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix inférieur au nominal réduit le montant remboursé à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix payé est inférieur au nominal et crée aussi un gain potentiel vers l\'échéance', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'investisseur reçoit un coupon supplémentaire tant que le titre reste sous le pair', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation se négocie 1 040 € et verse 52 € de coupon annuel. Son rendement courant est de 5 % ?',
                        'explanation' => '52 / 1 040 = 0,05, soit exactement 5 %.',
                        'choices' => [
                            ['choice_text' => 'Oui, exactement', 'is_correct' => true],
                            ['choice_text' => 'Non, il est de 2 %', 'is_correct' => false],
                            ['choice_text' => 'Non, il est de 7 %', 'is_correct' => false],
                            ['choice_text' => 'Non, il est de 10 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du prix d\'une obligation, avec coupon inchangé, a généralement quel effet sur son rendement courant ?',
                        'explanation' => 'Le rendement courant est calculé en divisant le coupon par le prix. À coupon constant, une hausse du prix réduit donc le ratio.',
                        'choices' => [
                            ['choice_text' => 'Elle l\'augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle le réduit', 'is_correct' => true],
                            ['choice_text' => 'Elle le laisse inchangé', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie le coupon contractuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu\'un analyste compare deux obligations à coupon identique mais à des prix différents, il doit notamment éviter de conclure que...',
                        'explanation' => 'Deux obligations ayant le même coupon peuvent offrir des rendements différents si elles se négocient à des prix différents ou si leurs autres caractéristiques diffèrent.',
                        'choices' => [
                            ['choice_text' => 'elles offrent exactement le même rendement parce que leur coupon est identique', 'is_correct' => true],
                            ['choice_text' => 'leur prix de marché peut influencer le rendement obtenu par l\'acheteur', 'is_correct' => false],
                            ['choice_text' => 'le nominal reste distinct du prix de marché auquel chaque titre se négocie', 'is_correct' => false],
                            ['choice_text' => 'le contexte de risque de crédit de chaque émetteur peut aussi compter', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Échéance, durée et sensibilité aux taux',
                'description' => 'Une introduction pratique à la maturité et à la sensibilité d\'un portefeuille obligataire face aux variations de taux.',
                'questions' => [
                    [
                        'question' => 'Entre deux obligations comparables, laquelle est généralement la plus sensible aux variations de taux, toutes choses égales par ailleurs ?',
                        'explanation' => 'Plus les flux d\'une obligation sont éloignés dans le temps, plus leur valeur actuelle est sensible aux variations du taux d\'actualisation. La durée permet justement d\'approcher cette sensibilité.',
                        'choices' => [
                            ['choice_text' => 'Celle dont les flux sont récupérés plus tôt dans la vie du titre', 'is_correct' => false],
                            ['choice_text' => 'Celle dont le coupon annuel est le plus élevé en pourcentage', 'is_correct' => false],
                            ['choice_text' => 'Celle dont les flux sont plus éloignés dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Celle dont la date d\'émission est la plus récente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation arrive à échéance dans deux ans. Une autre obligation comparable arrive à échéance dans dix ans. Laquelle présente généralement le risque de taux le plus élevé ?',
                        'explanation' => 'À caractéristiques comparables, l\'obligation à plus longue échéance réagit davantage aux variations des taux de marché.',
                        'choices' => [
                            ['choice_text' => 'Celle de dix ans', 'is_correct' => true],
                            ['choice_text' => 'Celle de deux ans', 'is_correct' => false],
                            ['choice_text' => 'Les deux à égalité', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend du seul émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La duration est principalement utilisée en fixed income pour mesurer...',
                        'explanation' => 'La duration est un outil de mesure de la sensibilité du prix d\'une obligation ou d\'un portefeuille obligataire aux mouvements des taux d\'intérêt.',
                        'choices' => [
                            ['choice_text' => 'la probabilité que l\'émetteur ne rembourse pas son nominal', 'is_correct' => false],
                            ['choice_text' => 'la sensibilité du prix d\'une obligation aux variations des taux', 'is_correct' => true],
                            ['choice_text' => 'le rendement annuel perçu sous forme de coupons sur le prix payé', 'is_correct' => false],
                            ['choice_text' => 'le nombre d\'années restant avant la date de remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation avec une duration de 5 ans subit approximativement quelle variation de prix pour une hausse parallèle des taux de 1 %, selon l\'approximation de duration modifiée ?',
                        'explanation' => 'L\'approximation est ΔP/P ≈ -Duration × Δy. Avec une duration de 5 et une hausse de taux de 1 %, on obtient environ -5 %.',
                        'choices' => [
                            ['choice_text' => '+5 %', 'is_correct' => false],
                            ['choice_text' => '-5 %', 'is_correct' => true],
                            ['choice_text' => '-1 %', 'is_correct' => false],
                            ['choice_text' => '+1 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une duration élevée signifie qu\'un portefeuille obligataire est généralement...',
                        'explanation' => 'Plus la duration est élevée, plus une variation donnée des taux peut produire une variation importante du prix, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'plus sensible aux taux', 'is_correct' => true],
                            ['choice_text' => 'moins sensible aux taux', 'is_correct' => false],
                            ['choice_text' => 'exposé à un risque de défaut plus élevé', 'is_correct' => false],
                            ['choice_text' => 'plus riche en obligations à coupon élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gestionnaire qui veut réduire rapidement la sensibilité de son portefeuille à une hausse des taux cherchera notamment à...',
                        'explanation' => 'Réduire la duration réduit généralement la sensibilité du portefeuille aux mouvements des taux d\'intérêt.',
                        'choices' => [
                            ['choice_text' => 'augmenter la duration', 'is_correct' => false],
                            ['choice_text' => 'allonger les échéances moyennes', 'is_correct' => false],
                            ['choice_text' => 'réduire la duration', 'is_correct' => true],
                            ['choice_text' => 'acheter des titres à coupon plus faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse des coupons importants relativement tôt. Par rapport à une obligation zéro coupon de même échéance, sa sensibilité aux taux peut être...',
                        'explanation' => 'Des coupons versés plus tôt raccourcissent le moment moyen où les flux sont reçus. À échéance comparable, cela réduit généralement la duration par rapport à une obligation zéro coupon.',
                        'choices' => [
                            ['choice_text' => 'plus forte', 'is_correct' => false],
                            ['choice_text' => 'identique à celle du zéro coupon', 'is_correct' => false],
                            ['choice_text' => 'nulle tant que les coupons sont payés', 'is_correct' => false],
                            ['choice_text' => 'plus faible', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation zéro coupon à longue échéance peut-elle être très sensible aux mouvements de taux ?',
                        'explanation' => 'Le principal d\'une obligation zéro coupon est reçu à l\'échéance. Lorsque cette échéance est lointaine, la valeur actuelle de ce flux est particulièrement sensible au taux d\'actualisation.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle verse des coupons plus élevés que les autres obligations', 'is_correct' => false],
                            ['choice_text' => 'Parce que son nominal est réajusté chaque année selon les taux du marché', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'une grande partie de son unique flux arrive très loin dans le futur', 'is_correct' => true],
                            ['choice_text' => 'Parce que son prix d\'émission est supérieur à son nominal de remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les taux diminuent de 0,5 % et qu\'une obligation a une duration de 4, quel ordre de grandeur de variation de prix peut-on attendre, hors convexité ?',
                        'explanation' => 'Avec ΔP/P ≈ -D × Δy, on obtient -4 × (-0,005) = +0,02, soit environ +2 %.',
                        'choices' => [
                            ['choice_text' => '-2 %', 'is_correct' => false],
                            ['choice_text' => '+2 %', 'is_correct' => true],
                            ['choice_text' => '+0,5 %', 'is_correct' => false],
                            ['choice_text' => '-0,5 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La duration ne doit pas être interprétée comme...',
                        'explanation' => 'La duration n\'est pas simplement la date contractuelle de remboursement. C\'est une mesure pondérée des flux, surtout utilisée pour apprécier la sensibilité aux taux.',
                        'choices' => [
                            ['choice_text' => 'une échéance juridique exacte dans tous les cas', 'is_correct' => true],
                            ['choice_text' => 'un indicateur de sensibilité aux taux', 'is_correct' => false],
                            ['choice_text' => 'un outil utile pour comparer des portefeuilles obligataires', 'is_correct' => false],
                            ['choice_text' => 'un concept lié aux flux futurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Courbe des taux et lecture du marché',
                'description' => 'Lecture de base des taux selon les échéances et des informations que peut donner une courbe des taux.',
                'questions' => [
                    [
                        'question' => 'Une courbe des taux représente principalement la relation entre...',
                        'explanation' => 'La courbe des taux montre les rendements associés à différentes maturités, par exemple 3 mois, 2 ans, 10 ans ou 30 ans.',
                        'choices' => [
                            ['choice_text' => 'le prix et le nominal', 'is_correct' => false],
                            ['choice_text' => 'le coupon et la note de crédit', 'is_correct' => false],
                            ['choice_text' => 'le taux et le montant émis', 'is_correct' => false],
                            ['choice_text' => 'le taux et l\'échéance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sur une courbe des taux normale, les taux à long terme sont supérieurs aux taux à court terme. Quelle forme correspond le mieux à cette situation ?',
                        'explanation' => 'Lorsque les taux augmentent avec l\'échéance, la courbe est ascendante. C\'est une configuration courante de courbe dite normale.',
                        'choices' => [
                            ['choice_text' => 'Une courbe ascendante', 'is_correct' => true],
                            ['choice_text' => 'Une courbe descendante', 'is_correct' => false],
                            ['choice_text' => 'Une courbe plate sur toutes les échéances', 'is_correct' => false],
                            ['choice_text' => 'Une courbe en cloche à moyen terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux à 2 ans est de 3 % et celui à 10 ans de 4,5 %, l\'écart 10 ans moins 2 ans est de...',
                        'explanation' => '4,5 % - 3 % = 1,5 point de pourcentage. Il est utile de distinguer un écart en points de pourcentage d\'une variation relative.',
                        'choices' => [
                            ['choice_text' => '1,5 point de pourcentage', 'is_correct' => true],
                            ['choice_text' => '50 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '7,5 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '0,67 point de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une courbe des taux inversée signifie généralement que...',
                        'explanation' => 'Une courbe inversée présente, sur une partie de la courbe, des taux à court terme supérieurs à ceux des maturités plus longues.',
                        'choices' => [
                            ['choice_text' => 'les taux longs sont supérieurs aux taux courts', 'is_correct' => false],
                            ['choice_text' => 'les taux courts sont supérieurs aux taux longs', 'is_correct' => true],
                            ['choice_text' => 'les taux sont identiques sur toutes les échéances', 'is_correct' => false],
                            ['choice_text' => 'les taux ont baissé sur toute la courbe depuis un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un trésorier d\'entreprise peut-il suivre attentivement la courbe des taux ?',
                        'explanation' => 'La courbe fournit des informations sur le niveau des taux selon les maturités, ce qui peut aider à analyser les coûts de financement et les choix de maturité.',
                        'choices' => [
                            ['choice_text' => 'Pour fixer le montant des dividendes distribués aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour prévoir avec certitude l\'évolution du cours de ses actions', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la marge commerciale de chaque produit vendu', 'is_correct' => false],
                            ['choice_text' => 'Pour réfléchir au coût de ses financements à différentes maturités', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux à 10 ans sans mouvement des taux à 3 mois correspond à un déplacement qui...',
                        'explanation' => 'Si les taux longs augmentent alors que les taux courts restent inchangés, le changement concerne surtout la partie longue de la courbe.',
                        'choices' => [
                            ['choice_text' => 'affecte toute la courbe de la même façon', 'is_correct' => false],
                            ['choice_text' => 'touche davantage le segment long de la courbe', 'is_correct' => true],
                            ['choice_text' => 'touche davantage le segment court de la courbe', 'is_correct' => false],
                            ['choice_text' => 'transforme la courbe en courbe inversée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur observe une courbe des taux très plate. Quelle conclusion prudente est la plus appropriée ?',
                        'explanation' => 'Une courbe plate signifie que les rendements sont relativement proches entre les maturités considérées. Elle ne permet pas, à elle seule, de conclure à la disparition de tous les risques.',
                        'choices' => [
                            ['choice_text' => 'Les taux courts sont nettement plus élevés que les taux longs', 'is_correct' => false],
                            ['choice_text' => 'Les taux longs sont nettement plus élevés que les taux courts', 'is_correct' => false],
                            ['choice_text' => 'Les taux sont proches entre plusieurs maturités observées', 'is_correct' => true],
                            ['choice_text' => 'Une récession est certaine dans les douze prochains mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les taux passent de 2,5 % à 3,0 %, la hausse est de...',
                        'explanation' => '3,0 % - 2,5 % = 0,5 point de pourcentage. En termes relatifs, la hausse est de 20 %, mais ce n\'est pas la même information.',
                        'choices' => [
                            ['choice_text' => '0,5 point de pourcentage', 'is_correct' => true],
                            ['choice_text' => '50 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '20 points', 'is_correct' => false],
                            ['choice_text' => '2,5 points', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux obligations du même émetteur peuvent-elles avoir des rendements différents selon leur échéance ?',
                        'explanation' => 'Le marché attribue des taux différents aux différentes maturités. Deux obligations du même émetteur peuvent donc offrir des rendements distincts en fonction de leur échéance et de leur structure.',
                        'choices' => [
                            ['choice_text' => 'Parce que le nominal est ajusté en fonction de la durée de détention', 'is_correct' => false],
                            ['choice_text' => 'Parce que les conditions de taux peuvent varier selon la maturité', 'is_correct' => true],
                            ['choice_text' => 'Parce que la notation de l\'émetteur change à chaque échéance émise', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'obligation à long terme ne verse pas de coupon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un écart de rendement entre une obligation à 10 ans et une obligation à 2 ans est souvent appelé...',
                        'explanation' => 'On parle souvent d\'écart ou de spread entre maturités pour décrire la différence de rendement entre deux points de la courbe.',
                        'choices' => [
                            ['choice_text' => 'un spread de crédit', 'is_correct' => false],
                            ['choice_text' => 'une prime de liquidité', 'is_correct' => false],
                            ['choice_text' => 'un spread de maturité', 'is_correct' => true],
                            ['choice_text' => 'un point de base', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque de taux et décisions d’investisseur',
                'description' => 'Petits cas pratiques pour relier les mouvements de taux au comportement d\'un portefeuille obligataire.',
                'questions' => [
                    [
                        'question' => 'Un investisseur pense que les taux vont fortement augmenter. Entre une obligation très courte et une obligation très longue comparables, laquelle expose généralement davantage au risque de taux ?',
                        'explanation' => 'À caractéristiques comparables, la longue maturité s\'accompagne généralement d\'une duration plus élevée et donc d\'une sensibilité plus forte aux variations de taux.',
                        'choices' => [
                            ['choice_text' => 'La très courte', 'is_correct' => false],
                            ['choice_text' => 'Elles sont exposées de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Celle dont le coupon est payé le plus souvent', 'is_correct' => false],
                            ['choice_text' => 'La très longue', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque souhaite réduire la sensibilité de son portefeuille obligataire avant une période qu\'elle juge incertaine sur les taux. Une mesure possible est de...',
                        'explanation' => 'Réduire la duration est une manière classique de diminuer la sensibilité globale du portefeuille aux mouvements de taux.',
                        'choices' => [
                            ['choice_text' => 'allonger la maturité moyenne des titres détenus', 'is_correct' => false],
                            ['choice_text' => 'se concentrer sur les titres à coupon le plus faible', 'is_correct' => false],
                            ['choice_text' => 'réduire la duration moyenne du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'acheter des obligations zéro coupon de longue maturité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille gagne en valeur lorsque les taux baissent. Ce comportement est cohérent avec...',
                        'explanation' => 'Pour une obligation à taux fixe, une baisse des taux augmente généralement la valeur actuelle des flux existants et donc le prix de marché.',
                        'choices' => [
                            ['choice_text' => 'la relation positive entre taux d\'intérêt et prix des obligations à taux fixe', 'is_correct' => false],
                            ['choice_text' => 'une révision automatique du coupon quand les taux de marché diminuent', 'is_correct' => false],
                            ['choice_text' => 'un élargissement des spreads de crédit sur les obligations détenues', 'is_correct' => false],
                            ['choice_text' => 'la relation inverse habituelle entre taux et prix des obligations à taux fixe', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un gestionnaire a une duration de portefeuille de 6 et anticipe une hausse des taux de 0,25 %. L\'effet approximatif sur le prix est...',
                        'explanation' => 'Avec ΔP/P ≈ -D × Δy, on obtient -6 × 0,0025 = -0,015, soit environ -1,5 %.',
                        'choices' => [
                            ['choice_text' => '-1,5 %', 'is_correct' => true],
                            ['choice_text' => '+1,5 %', 'is_correct' => false],
                            ['choice_text' => '-0,25 %', 'is_correct' => false],
                            ['choice_text' => '+6 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur qui conserve une obligation jusqu\'à l\'échéance peut-il être moins préoccupé par les fluctuations quotidiennes du prix ?',
                        'explanation' => 'La conservation jusqu\'à l\'échéance réduit l\'importance économique des variations de prix intermédiaires, mais elle n\'élimine ni le risque de défaut ni d\'autres risques.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coupon est ajusté chaque jour pour compenser la baisse du prix', 'is_correct' => false],
                            ['choice_text' => 'Parce que la détention jusqu\'à l\'échéance supprime le risque de crédit de l\'émetteur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur de marché de son titre ne peut pas passer sous le nominal', 'is_correct' => false],
                            ['choice_text' => 'Parce que le remboursement contractuel du principal reste l\'objectif si l\'émetteur honore sa dette', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur doit financer une dépense dans six mois. Entre une obligation très longue et un placement obligataire court, le choix d\'une maturité proche de son besoin vise notamment à...',
                        'explanation' => 'Aligner la maturité avec le besoin de liquidité peut réduire le risque de devoir vendre un titre à long terme avant son échéance alors que son prix a évolué défavorablement.',
                        'choices' => [
                            ['choice_text' => 'réduire le risque de devoir vendre un actif long au mauvais moment', 'is_correct' => true],
                            ['choice_text' => 'obtenir une prime de rendement plus élevée sur les longues échéances', 'is_correct' => false],
                            ['choice_text' => 'supprimer le risque de crédit lié à l\'émetteur du titre', 'is_correct' => false],
                            ['choice_text' => 'bénéficier d\'un coupon plus élevé sur les maturités courtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux d\'intérêt passe de 3 % à 4 %. Cette variation correspond à...',
                        'explanation' => 'Une hausse de 3 % à 4 % correspond à +1 point de pourcentage. Il ne faut pas la confondre avec une hausse relative de 33,3 %.',
                        'choices' => [
                            ['choice_text' => 'une hausse de 0,01 point de pourcentage', 'is_correct' => false],
                            ['choice_text' => 'une hausse relative de 1 %', 'is_correct' => false],
                            ['choice_text' => 'une hausse de 1 point de pourcentage', 'is_correct' => true],
                            ['choice_text' => 'une hausse de 10 points de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à taux fixe offre un coupon de 4 %. De nouvelles obligations comparables offrent 6 %. Pour rester attractive, l\'ancienne obligation peut notamment...',
                        'explanation' => 'Le coupon de l\'ancienne obligation est contractuel. Pour offrir un rendement de marché comparable, son prix peut devoir baisser.',
                        'choices' => [
                            ['choice_text' => 'relever son coupon à 6 %', 'is_correct' => false],
                            ['choice_text' => 'réduire son nominal', 'is_correct' => false],
                            ['choice_text' => 'avancer sa date d\'échéance contractuelle', 'is_correct' => false],
                            ['choice_text' => 'se négocier à un prix plus bas', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur qui veut une forte exposition positive à une baisse des taux peut être particulièrement attentif à...',
                        'explanation' => 'La duration fournit une indication de la sensibilité du prix aux mouvements de taux, ce qui est central pour ce type de positionnement.',
                        'choices' => [
                            ['choice_text' => 'la duration des obligations détenues', 'is_correct' => true],
                            ['choice_text' => 'le coupon moyen des obligations détenues', 'is_correct' => false],
                            ['choice_text' => 'la note de crédit moyenne du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'le nombre d\'émetteurs présents en portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mouvements de taux ne produisent-ils pas forcément la même variation de prix sur deux obligations différentes ?',
                        'explanation' => 'La réaction d\'une obligation dépend de la structure de ses flux et notamment de sa duration. Deux titres peuvent donc réagir différemment au même mouvement de taux.',
                        'choices' => [
                            ['choice_text' => 'Parce que leurs durations, coupons, échéances ou structures peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque émetteur fixe lui-même la façon dont ses titres réagissent aux taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix d\'une obligation ne réagit qu\'aux variations de sa note de crédit', 'is_correct' => false],
                            ['choice_text' => 'Parce que seule la taille de l\'émission détermine la sensibilité du prix aux taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise détient un portefeuille obligataire très sensible aux taux. Quel indicateur simple peut-elle suivre pour surveiller cette exposition ?',
                        'explanation' => 'La duration est un indicateur central pour suivre la sensibilité du prix d\'un portefeuille obligataire aux variations des taux d\'intérêt.',
                        'choices' => [
                            ['choice_text' => 'Le coupon moyen', 'is_correct' => false],
                            ['choice_text' => 'La note de crédit', 'is_correct' => false],
                            ['choice_text' => 'La duration', 'is_correct' => true],
                            ['choice_text' => 'Le rendement courant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Obligations zéro coupon et actualisation',
                'description' => 'Des exercices simples autour des obligations zéro coupon et de la valeur actuelle d\'un remboursement futur.',
                'questions' => [
                    [
                        'question' => 'Une obligation zéro coupon rembourse 1 000 € dans deux ans. Si le prix aujourd\'hui est inférieur à 1 000 €, d\'où vient principalement le rendement attendu ?',
                        'explanation' => 'Sans coupons périodiques, le rendement provient principalement de la différence entre le prix d\'achat et le montant remboursé à l\'échéance.',
                        'choices' => [
                            ['choice_text' => 'De l\'écart entre le prix payé et le remboursement futur', 'is_correct' => true],
                            ['choice_text' => 'De l\'augmentation progressive du nominal au fil des années', 'is_correct' => false],
                            ['choice_text' => 'Du taux de coupon fixé à l\'émission et versé à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Du dividende versé par l\'émetteur à la fin de l\'investissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un taux d\'actualisation positif, 1 000 € reçus dans trois ans valent aujourd\'hui...',
                        'explanation' => 'La valeur temps de l\'argent implique qu\'un montant futur positif actualisé à un taux positif vaut moins aujourd\'hui que son montant nominal futur.',
                        'choices' => [
                            ['choice_text' => 'plus que 1 000 €', 'is_correct' => false],
                            ['choice_text' => 'exactement 1 000 €', 'is_correct' => false],
                            ['choice_text' => 'un montant indépendant de la durée', 'is_correct' => false],
                            ['choice_text' => 'moins que 1 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une somme de 1 100 € doit être reçue dans un an. Avec un taux d\'actualisation de 10 %, sa valeur actuelle est de...',
                        'explanation' => 'VA = 1 100 / 1,10 = 1 000 €. Le principe d\'actualisation consiste à ramener un flux futur à sa valeur aujourd\'hui.',
                        'choices' => [
                            ['choice_text' => '1 210 €', 'is_correct' => false],
                            ['choice_text' => '1 100 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '990 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon de 1 000 € payable dans un an est valorisée à 952,38 €. Le taux d\'actualisation implicite est proche de...',
                        'explanation' => '952,38 × 1,05 ≈ 1 000. Le prix correspond donc approximativement à un taux d\'actualisation de 5 %.',
                        'choices' => [
                            ['choice_text' => '2,5 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '9,5 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d\'actualisation augmente, la valeur actuelle d\'un remboursement futur de 1 000 €...',
                        'explanation' => 'Un taux d\'actualisation plus élevé réduit la valeur actuelle d\'un flux futur, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'augmente', 'is_correct' => false],
                            ['choice_text' => 'reste identique', 'is_correct' => false],
                            ['choice_text' => 'baisse', 'is_correct' => true],
                            ['choice_text' => 'devient indépendante de la durée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une obligation zéro coupon, le montant reçu à l\'échéance est généralement...',
                        'explanation' => 'Le zéro coupon prévoit généralement un remboursement du nominal à l\'échéance, sous réserve que l\'émetteur honore sa dette.',
                        'choices' => [
                            ['choice_text' => 'inférieur au prix d\'achat, puisque le zéro coupon se déprécie dans le temps', 'is_correct' => false],
                            ['choice_text' => 'égal à la somme des coupons annuels non versés', 'is_correct' => false],
                            ['choice_text' => 'le nominal prévu par le contrat, sous réserve du remboursement', 'is_correct' => true],
                            ['choice_text' => 'un montant qui varie avec les taux de marché à cette date', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon rembourse 2 000 € dans quatre ans. Pourquoi son prix est-il généralement inférieur à 2 000 € si le taux de marché est positif ?',
                        'explanation' => 'Le montant futur est actualisé à un taux positif. Sa valeur aujourd\'hui est donc inférieure au montant qui sera reçu dans quatre ans.',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'émetteur prélève des frais sur chaque année de détention', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix d\'émission est fixé par convention à la moitié du nominal', 'is_correct' => false],
                            ['choice_text' => 'Parce que le marché applique une décote forfaitaire quel que soit le taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le remboursement est futur et doit être actualisé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon est achetée 900 € et remboursée 1 000 € à l\'échéance. Hors risque de défaut, l\'écart sur le principal est de...',
                        'explanation' => '1 000 - 900 = 100 €. Cet écart constitue une composante du rendement avant prise en compte du temps exact, des frais et de la fiscalité.',
                        'choices' => [
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => true],
                            ['choice_text' => '900 €', 'is_correct' => false],
                            ['choice_text' => '1 900 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Entre deux flux identiques, lequel a la valeur actuelle la plus faible si le taux d\'actualisation est positif ?',
                        'explanation' => 'Plus un flux identique est éloigné dans le temps, plus il est réduit par l\'actualisation à taux positif.',
                        'choices' => [
                            ['choice_text' => 'Celui reçu aujourd\'hui', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont la même valeur', 'is_correct' => false],
                            ['choice_text' => 'Celui qui a le coupon le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Celui reçu plus tard', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon de 1 000 € est achetée 800 €. Peut-on conclure, à partir de cette seule information, que l\'investisseur gagnera forcément 200 € ?',
                        'explanation' => 'Le gain de 200 € sur le principal suppose notamment un remboursement effectif de 1 000 €. Le risque de défaut et le temps écoulé restent importants.',
                        'choices' => [
                            ['choice_text' => 'Oui, puisque l\'écart entre 800 € et 1 000 € est contractuel et certain', 'is_correct' => false],
                            ['choice_text' => 'Non, il faut notamment que l\'émetteur rembourse effectivement le nominal et considérer l\'horizon', 'is_correct' => true],
                            ['choice_text' => 'Non, car le gain réel correspond au coupon et non à l\'écart de prix', 'is_correct' => false],
                            ['choice_text' => 'Non, car le nominal n\'est remboursé qu\'en cas de hausse des taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux d\'actualisation de 0 % appliqué à un flux de 1 000 € dans un an donne une valeur actuelle de...',
                        'explanation' => 'À un taux d\'actualisation nul, il n\'y a pas de réduction du flux pour la valeur temps : 1 000 € restent 1 000 € en valeur actuelle.',
                        'choices' => [
                            ['choice_text' => '900 €', 'is_correct' => false],
                            ['choice_text' => '950 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '1 100 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque de crédit et credit spread',
                'description' => 'Comprendre pourquoi deux émetteurs peuvent emprunter à des taux différents et comment lire un spread de crédit.',
                'questions' => [
                    [
                        'question' => 'Une obligation d\'entreprise offre 5,5 % alors qu\'une obligation souveraine de référence comparable offre 3,5 %. L\'écart est de...',
                        'explanation' => '5,5 % - 3,5 % = 2 points de pourcentage. Cet écart peut notamment rémunérer le risque de crédit supplémentaire et d\'autres différences entre les titres.',
                        'choices' => [
                            ['choice_text' => '1 point de pourcentage', 'is_correct' => false],
                            ['choice_text' => '2,5 points de pourcentage', 'is_correct' => false],
                            ['choice_text' => '2 points de pourcentage', 'is_correct' => true],
                            ['choice_text' => '9 points de pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À caractéristiques proches, pourquoi une entreprise financièrement plus risquée peut-elle devoir offrir un rendement obligataire plus élevé ?',
                        'explanation' => 'Un rendement plus élevé peut servir à rémunérer un risque de défaut ou de dégradation de crédit plus important.',
                        'choices' => [
                            ['choice_text' => 'Pour compenser les investisseurs pour un risque de crédit plus important', 'is_correct' => true],
                            ['choice_text' => 'Pour compenser des échéances plus longues que celles des États de référence', 'is_correct' => false],
                            ['choice_text' => 'Pour distribuer à ses créanciers une part de ses bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Pour compenser le risque de taux plus élevé propre aux entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le marché devient beaucoup plus inquiet au sujet d\'un émetteur, son credit spread peut...',
                        'explanation' => 'Une perception accrue du risque de crédit entraîne souvent une hausse de la prime demandée par les investisseurs, donc un spread plus large.',
                        'choices' => [
                            ['choice_text' => 'se resserrer', 'is_correct' => false],
                            ['choice_text' => 'rester inchangé', 'is_correct' => false],
                            ['choice_text' => 's\'élargir', 'is_correct' => true],
                            ['choice_text' => 'devenir négatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un spread de crédit de 150 points de base correspond à...',
                        'explanation' => '100 points de base = 1 point de pourcentage. Donc 150 points de base = 1,50 %.',
                        'choices' => [
                            ['choice_text' => '0,15 %', 'is_correct' => false],
                            ['choice_text' => '1,50 %', 'is_correct' => true],
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '150 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore nettement sa situation financière. Toutes choses égales par ailleurs, quelle évolution peut-on attendre de son spread de crédit ?',
                        'explanation' => 'Une amélioration de la qualité de crédit peut réduire la prime de risque demandée par le marché, donc resserrer le spread, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Un élargissement potentiel', 'is_correct' => false],
                            ['choice_text' => 'Une réduction potentielle', 'is_correct' => true],
                            ['choice_text' => 'Un spread indépendant de la situation de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une hausse liée à la baisse du risque de taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur veut comparer le risque de deux obligations émises par des entreprises différentes. Quel élément est particulièrement pertinent en plus du rendement affiché ?',
                        'explanation' => 'Le rendement ne doit pas être regardé isolément : la solvabilité et le profil de crédit de chaque émetteur sont essentiels à la comparaison.',
                        'choices' => [
                            ['choice_text' => 'La qualité de crédit des émetteurs', 'is_correct' => true],
                            ['choice_text' => 'Le montant du nominal de chaque titre', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de coupons versés chaque année', 'is_correct' => false],
                            ['choice_text' => 'La performance passée du cours de l\'obligation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d\'entreprise et une obligation souveraine ont des échéances comparables, mais l\'entreprise présente un risque de défaut supérieur. Quelle différence de rendement peut-on observer ?',
                        'explanation' => 'Un risque de crédit supérieur peut conduire les investisseurs à demander une rémunération supplémentaire, souvent visible dans le spread.',
                        'choices' => [
                            ['choice_text' => 'L\'entreprise doit offrir un rendement inférieur', 'is_correct' => false],
                            ['choice_text' => 'Les deux rendements doivent être identiques par définition', 'is_correct' => false],
                            ['choice_text' => 'L\'entreprise peut offrir un rendement supérieur', 'is_correct' => true],
                            ['choice_text' => 'L\'État doit offrir le rendement le plus élevé du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d\'entreprise offre 4,8 % et une obligation souveraine comparable 4,1 %. Le spread de crédit est de...',
                        'explanation' => '4,8 % - 4,1 % = 0,7 point de pourcentage, soit 70 points de base (1 point de pourcentage = 100 points de base).',
                        'choices' => [
                            ['choice_text' => '7 points de base', 'is_correct' => false],
                            ['choice_text' => '70 points de base', 'is_correct' => true],
                            ['choice_text' => '700 points de base', 'is_correct' => false],
                            ['choice_text' => '0,7 point de base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement plus élevé d\'une obligation risquée n\'est-il pas un \'cadeau\' gratuit pour l\'investisseur ?',
                        'explanation' => 'Un rendement plus élevé est généralement lié à un niveau de risque plus élevé. La rémunération supplémentaire n\'est donc pas indépendante du risque pris.',
                        'choices' => [
                            ['choice_text' => 'Parce que le nominal est réduit en contrepartie du coupon élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement affiché disparaît dès que l\'obligation est revendue', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il est réservé aux investisseurs professionnels', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il peut rémunérer un risque supplémentaire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une agence de notation dégrade fortement un émetteur. Quelle réaction de marché est plausible, sans être garantie ?',
                        'explanation' => 'Une dégradation peut accroître le risque perçu, ce qui peut élargir le spread et exercer une pression à la baisse sur le prix. Le mouvement exact dépend du marché et de l\'ampleur de l\'information déjà anticipée.',
                        'choices' => [
                            ['choice_text' => 'Le spread de crédit s\'élargit et le prix peut baisser', 'is_correct' => true],
                            ['choice_text' => 'Le spread de crédit se resserre et le prix peut monter', 'is_correct' => false],
                            ['choice_text' => 'Le spread reste stable car la note ne concerne que le coupon', 'is_correct' => false],
                            ['choice_text' => 'Le spread s\'élargit mais le prix reste fixe car le coupon est contractuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un portefeuille obligataire, une hausse générale des credit spreads signale généralement...',
                        'explanation' => 'Un élargissement des spreads traduit généralement une exigence de rendement supplémentaire pour porter le risque de crédit.',
                        'choices' => [
                            ['choice_text' => 'une demande de rémunération plus faible pour le risque de crédit', 'is_correct' => false],
                            ['choice_text' => 'une disparition du risque de taux pour les obligations d\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'une hausse des coupons contractuels des obligations déjà émises', 'is_correct' => false],
                            ['choice_text' => 'une demande de rémunération plus forte pour le risque de crédit', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Obligations souveraines et obligations d’entreprise',
                'description' => 'Comparer les grandes familles d\'obligations sans perdre de vue le risque, le rendement et les objectifs de l\'investisseur.',
                'questions' => [
                    [
                        'question' => 'La différence la plus évidente entre une obligation souveraine et une obligation d\'entreprise tient à...',
                        'explanation' => 'Une obligation souveraine est émise par un État ou une entité publique selon le cas, tandis qu\'une obligation d\'entreprise est émise par une société.',
                        'choices' => [
                            ['choice_text' => 'l\'identité de l\'émetteur', 'is_correct' => true],
                            ['choice_text' => 'la présence d\'un nominal remboursé', 'is_correct' => false],
                            ['choice_text' => 'la durée maximale autorisée de l\'emprunt', 'is_correct' => false],
                            ['choice_text' => 'la devise dans laquelle le coupon est versé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle offrir un rendement supérieur à celui d\'un État de référence ?',
                        'explanation' => 'Le marché peut exiger une prime de risque pour une entreprise en fonction de sa solvabilité et de la perception de son risque de défaut.',
                        'choices' => [
                            ['choice_text' => 'Elle verse des coupons calculés sur un nominal plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Elle offre des titres plus liquides que ceux de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Elle peut présenter un risque de crédit plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Elle supporte un risque de taux que l\'État ne supporte pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur cherche à limiter le risque lié à un seul émetteur. La diversification entre plusieurs obligations peut aider à...',
                        'explanation' => 'Diversifier plusieurs émetteurs réduit le risque spécifique lié à la concentration sur un seul débiteur, même si le risque de marché demeure.',
                        'choices' => [
                            ['choice_text' => 'éliminer le risque de taux', 'is_correct' => false],
                            ['choice_text' => 'empêcher les prix de baisser', 'is_correct' => false],
                            ['choice_text' => 'assurer le paiement des coupons', 'is_correct' => false],
                            ['choice_text' => 'réduire la concentration du risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d\'entreprise affiche un rendement de 6 %. Une obligation souveraine comparable affiche 4 %. Parmi ces conclusions sur l\'écart de 2 points, laquelle est la moins prudente ?',
                        'explanation' => 'Un rendement supérieur ne suffit pas à conclure qu\'un investissement est meilleur. Il faut rapprocher le rendement du niveau de risque, de la maturité, de la liquidité et des autres caractéristiques.',
                        'choices' => [
                            ['choice_text' => 'le marché demande peut-être une rémunération supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'le risque de crédit peut expliquer une partie de l\'écart', 'is_correct' => false],
                            ['choice_text' => 'l\'obligation d\'entreprise est toujours le meilleur placement', 'is_correct' => true],
                            ['choice_text' => 'la maturité ou la liquidité peuvent aussi contribuer à l\'écart', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour comparer correctement deux obligations, un analyste devrait notamment regarder...',
                        'explanation' => 'La comparaison doit tenir compte de plusieurs caractéristiques qui influencent le prix et le rendement, et pas d\'un seul indicateur.',
                        'choices' => [
                            ['choice_text' => 'nominal, date d\'émission et lieu de cotation du titre', 'is_correct' => false],
                            ['choice_text' => 'nombre de coupons, nom du courtier et taille de l\'émission', 'is_correct' => false],
                            ['choice_text' => 'échéance, coupon, prix, rendement et risque', 'is_correct' => true],
                            ['choice_text' => 'ancienneté de l\'émetteur, nombre de salariés et chiffre d\'affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation souveraine considérée comme très liquide peut avoir un rendement relativement faible parce que...',
                        'explanation' => 'La liquidité est un facteur de valorisation. Un titre très liquide peut être recherché par les investisseurs, ce qui soutient son prix et peut réduire son rendement relatif.',
                        'choices' => [
                            ['choice_text' => 'les investisseurs acceptent un rendement moindre pour plus de liquidité', 'is_correct' => true],
                            ['choice_text' => 'les investisseurs exigent un rendement plus élevé en échange de cette liquidité', 'is_correct' => false],
                            ['choice_text' => 'leur coupon contractuel est réduit à chaque revente sur le marché secondaire', 'is_correct' => false],
                            ['choice_text' => 'leur nominal est fixé à un niveau inférieur à celui des obligations d\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise avec une situation financière fragile se finance sur le marché obligataire. Quelle conséquence est plausible ?',
                        'explanation' => 'Pour attirer les investisseurs malgré un risque de crédit supérieur, l\'entreprise peut devoir proposer une rémunération plus importante.',
                        'choices' => [
                            ['choice_text' => 'Elle emprunte généralement à un taux inférieur à celui de l\'État', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut émettre que des obligations à très courte échéance', 'is_correct' => false],
                            ['choice_text' => 'Elle doit obligatoirement garantir ses coupons par des actifs', 'is_correct' => false],
                            ['choice_text' => 'Elle peut devoir offrir un rendement plus élevé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur veut avant tout disposer d\'un flux contractuel régulier plutôt que de devenir actionnaire. Quel instrument correspond à cette logique ?',
                        'explanation' => 'Une obligation à coupon prévoit des paiements d\'intérêts selon des conditions contractuelles. Une action ordinaire représente un droit de propriété et peut verser des dividendes, qui ne sont pas contractuellement identiques à un coupon obligataire.',
                        'choices' => [
                            ['choice_text' => 'Une obligation à coupon', 'is_correct' => true],
                            ['choice_text' => 'Une action ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Une option d\'achat sur une action', 'is_correct' => false],
                            ['choice_text' => 'Un fonds investi en actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque reste pertinent même pour une obligation souveraine ?',
                        'explanation' => 'Même lorsqu\'un titre est perçu comme présentant un faible risque de crédit, son prix de marché peut varier lorsque les taux changent.',
                        'choices' => [
                            ['choice_text' => 'Le risque de taux', 'is_correct' => true],
                            ['choice_text' => 'Le risque de dilution du capital', 'is_correct' => false],
                            ['choice_text' => 'Le risque de variation du coupon contractuel', 'is_correct' => false],
                            ['choice_text' => 'Le risque de baisse des bénéfices de l\'émetteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation d\'entreprise se négocie avec un spread élevé. Avant de l\'acheter, il est raisonnable de se demander...',
                        'explanation' => 'Un spread important peut être attractif ou non selon le risque qu\'il rémunère. L\'analyste doit donc comprendre la source de cette prime.',
                        'choices' => [
                            ['choice_text' => 'comment le spread modifie le nominal remboursé à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'pourquoi un spread élevé rend le coupon contractuel variable', 'is_correct' => false],
                            ['choice_text' => 'si la maturité du titre perd son importance quand le spread est élevé', 'is_correct' => false],
                            ['choice_text' => 'quelle rémunération supplémentaire compense quel niveau de risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux peut affecter une obligation souveraine et une obligation d\'entreprise de deux façons différentes mais simultanées. Lesquelles ?',
                        'explanation' => 'Le prix d\'une obligation d\'entreprise peut réagir au niveau général des taux mais aussi à son spread de crédit. Les deux facteurs peuvent évoluer en même temps.',
                        'choices' => [
                            ['choice_text' => 'par le risque de taux et, pour l\'entreprise, éventuellement par l\'évolution du spread de crédit', 'is_correct' => true],
                            ['choice_text' => 'par le risque de taux pour l\'État et par le risque de change pour l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'par une hausse du nominal pour l\'État et une baisse du coupon pour l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'par la seule évolution du spread de crédit, pour l\'État comme pour l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Coupon, fréquence et calculs obligataires',
                'description' => 'Des calculs courts pour manipuler correctement coupon, nominal, fréquence de paiement et prix.',
                'questions' => [
                    [
                        'question' => 'Une obligation de 2 000 € affiche un taux de coupon annuel de 4 %. Quel est son coupon annuel ?',
                        'explanation' => '2 000 × 4 % = 80 €.',
                        'choices' => [
                            ['choice_text' => '40 €', 'is_correct' => false],
                            ['choice_text' => '80 €', 'is_correct' => true],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '200 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de 1 500 € verse un coupon annuel de 6 %. Si le paiement est semestriel, chaque coupon est de...',
                        'explanation' => 'Le coupon annuel est 1 500 × 6 % = 90 €. Avec deux paiements égaux par an, chaque paiement est de 45 €.',
                        'choices' => [
                            ['choice_text' => '15 €', 'is_correct' => false],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '45 €', 'is_correct' => true],
                            ['choice_text' => '90 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse 25 € tous les six mois sur un nominal de 1 000 €. Son taux de coupon annuel est de...',
                        'explanation' => 'Deux coupons de 25 € donnent 50 € par an. 50 / 1 000 = 5 %.',
                        'choices' => [
                            ['choice_text' => '2,5 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à coupon annuel de 4 % verse 60 € par an. Quel est son nominal ?',
                        'explanation' => 'Nominal = coupon / taux de coupon = 60 / 0,04 = 1 500 €.',
                        'choices' => [
                            ['choice_text' => '240 €', 'is_correct' => false],
                            ['choice_text' => '1 500 €', 'is_correct' => true],
                            ['choice_text' => '2 400 €', 'is_correct' => false],
                            ['choice_text' => '15 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de nominal 1 000 € verse 30 € par trimestre. Quel est le coupon annuel en euros ?',
                        'explanation' => 'Il y a quatre paiements de 30 € : 4 × 30 = 120 € par an.',
                        'choices' => [
                            ['choice_text' => '60 €', 'is_correct' => false],
                            ['choice_text' => '90 €', 'is_correct' => false],
                            ['choice_text' => '120 €', 'is_correct' => true],
                            ['choice_text' => '360 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de 1 000 € verse 60 € par an et est détenue pendant deux années complètes. Combien de coupons sont reçus au total, hors réinvestissement ?',
                        'explanation' => 'Deux années × 60 € = 120 € de coupons, en supposant que les paiements contractuels sont effectués normalement.',
                        'choices' => [
                            ['choice_text' => '60 €', 'is_correct' => false],
                            ['choice_text' => '120 €', 'is_correct' => true],
                            ['choice_text' => '1 060 €', 'is_correct' => false],
                            ['choice_text' => '2 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à 8 % sur 1 000 € verse 80 € par an. Si son prix passe de 1 000 € à 800 €, le rendement courant devient...',
                        'explanation' => '80 / 800 = 10 %. Le coupon contractuel reste 80 €, mais le rendement courant rapporté au prix augmente.',
                        'choices' => [
                            ['choice_text' => '6,4 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '16 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation verse 45 € tous les six mois. Quel est le total des coupons reçus sur trois ans ?',
                        'explanation' => 'Trois ans correspondent à six semestres. 6 × 45 € = 270 €.',
                        'choices' => [
                            ['choice_text' => '135 €', 'is_correct' => false],
                            ['choice_text' => '180 €', 'is_correct' => false],
                            ['choice_text' => '270 €', 'is_correct' => true],
                            ['choice_text' => '540 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de 1 000 € verse 4 % par an et son prix est de 1 020 €. Son rendement courant est le plus proche de...',
                        'explanation' => '40 / 1 020 ≈ 3,92 %. Le 4 % est le taux de coupon sur le nominal, pas le rendement courant au prix de 1 020 €.',
                        'choices' => [
                            ['choice_text' => '3,92 %', 'is_correct' => true],
                            ['choice_text' => '4,00 %', 'is_correct' => false],
                            ['choice_text' => '4,08 %', 'is_correct' => false],
                            ['choice_text' => '4,20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation de nominal 1 000 € verse un coupon annuel de 5 % et arrive à échéance dans trois ans. Au total, que reçoit un détenteur jusqu\'à l\'échéance, coupons et remboursement inclus, hors réinvestissement ?',
                        'explanation' => 'Trois coupons de 50 € donnent 150 €, auxquels s\'ajoutent 1 000 € de nominal remboursé : 1 150 €.',
                        'choices' => [
                            ['choice_text' => '150 €', 'is_correct' => false],
                            ['choice_text' => '1 050 €', 'is_correct' => false],
                            ['choice_text' => '1 150 €', 'is_correct' => true],
                            ['choice_text' => '1 500 €', 'is_correct' => false],
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
