<?php

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

        $quizzes = [
            [
                'title' => "Comprendre les obligations dans la pratique",
                'description' => "Un premier parcours pour reconnaître les principaux éléments d'une obligation et comprendre comment elle se comporte.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une obligation a une valeur nominale de 1 000 € et verse un coupon annuel de 50 €. Quel est son taux de coupon ?",
                        'choices' => [
                            ['choice_text' => "2 %", 'is_correct' => false],
                            ['choice_text' => "5 %", 'is_correct' => true],
                            ['choice_text' => "10 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux de coupon correspond au coupon annuel divisé par la valeur nominale : 50 / 1 000 = 5 %.",
                    ],
                    [
                        'question' => "Lorsqu'un investisseur achète une obligation au pair, cela signifie généralement que le prix payé est égal à...",
                        'choices' => [
                            ['choice_text' => "la moitié du nominal", 'is_correct' => false],
                            ['choice_text' => "la valeur nominale", 'is_correct' => true],
                            ['choice_text' => "le montant des intérêts futurs", 'is_correct' => false],
                            ['choice_text' => "la valeur comptable de l'émetteur", 'is_correct' => false],
                        ],
                        'explanation' => "Acheter au pair signifie acheter l'obligation à un prix égal à sa valeur nominale, par exemple 1 000 € pour un nominal de 1 000 €.",
                    ],
                    [
                        'question' => "Une entreprise émet une obligation à taux fixe. Pour l'investisseur, le coupon sert principalement à...",
                        'choices' => [
                            ['choice_text' => "recevoir un flux d'intérêts prévu", 'is_correct' => true],
                            ['choice_text' => "obtenir automatiquement des actions", 'is_correct' => false],
                            ['choice_text' => "garantir le remboursement avant l'échéance", 'is_correct' => false],
                            ['choice_text' => "faire varier la valeur nominale chaque année", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon est le paiement d'intérêt prévu par les conditions de l'obligation. Il ne transforme pas l'obligation en action et ne garantit pas une sortie anticipée.",
                    ],
                    [
                        'question' => "Deux obligations ont le même émetteur et le même nominal. Laquelle a, toutes choses égales par ailleurs, le coupon annuel le plus élevé ?",
                        'choices' => [
                            ['choice_text' => "celle avec un coupon de 20 € sur 1 000 €", 'is_correct' => false],
                            ['choice_text' => "celle avec un coupon de 35 € sur 1 000 €", 'is_correct' => true],
                            ['choice_text' => "celle avec zéro coupon", 'is_correct' => false],
                            ['choice_text' => "celle dont l'échéance est plus courte", 'is_correct' => false],
                        ],
                        'explanation' => "À nominal identique, un coupon en euros plus élevé correspond à un taux de coupon plus élevé. Ici, 35 € est supérieur à 20 €.",
                    ],
                    [
                        'question' => "À l'échéance d'une obligation classique sans défaut, l'investisseur reçoit généralement...",
                        'choices' => [
                            ['choice_text' => "uniquement le dernier coupon", 'is_correct' => false],
                            ['choice_text' => "la valeur nominale, avec le dernier coupon selon les conditions de l'obligation", 'is_correct' => true],
                            ['choice_text' => "les actions de l'émetteur", 'is_correct' => false],
                            ['choice_text' => "uniquement la plus-value éventuelle", 'is_correct' => false],
                        ],
                        'explanation' => "À l'échéance, le principal nominal est remboursé. Le dernier coupon prévu peut également être versé à cette date.",
                    ],
                    [
                        'question' => "Une obligation zéro coupon se distingue surtout parce qu'elle...",
                        'choices' => [
                            ['choice_text' => "ne verse pas de coupon périodique", 'is_correct' => true],
                            ['choice_text' => "ne possède pas de date d'échéance", 'is_correct' => false],
                            ['choice_text' => "est toujours sans risque", 'is_correct' => false],
                            ['choice_text' => "verse deux coupons par mois", 'is_correct' => false],
                        ],
                        'explanation' => "Une obligation zéro coupon ne verse pas de coupon périodique. Le rendement provient principalement de l'écart entre le prix d'achat et le montant remboursé à l'échéance.",
                    ],
                    [
                        'question' => "Un investisseur achète une obligation pour 980 € alors que sa valeur nominale est de 1 000 €. À la seule échéance, hors défaut et hors coupons, quel montant de principal est normalement remboursé ?",
                        'choices' => [
                            ['choice_text' => "980 €", 'is_correct' => false],
                            ['choice_text' => "1 000 €", 'is_correct' => true],
                            ['choice_text' => "20 €", 'is_correct' => false],
                            ['choice_text' => "2 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le prix d'achat et le nominal sont deux notions différentes. À l'échéance, le principal contractuel est normalement le nominal, ici 1 000 €.",
                    ],
                    [
                        'question' => "Une obligation à taux fixe verse 40 € par an sur un nominal de 1 000 €. Si l'investisseur conserve l'obligation jusqu'à l'échéance et que l'émetteur paie correctement, le coupon annuel reste-t-il normalement à 40 € ?",
                        'choices' => [
                            ['choice_text' => "Oui, selon les conditions prévues", 'is_correct' => true],
                            ['choice_text' => "Non, il devient automatiquement variable", 'is_correct' => false],
                            ['choice_text' => "Non, il devient toujours nul après un an", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement si le prix de marché augmente", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une obligation à taux fixe, le coupon contractuel ne change pas simplement parce que le prix de marché de l'obligation évolue.",
                    ],
                    [
                        'question' => "Quel élément décrit le mieux l'échéance d'une obligation ?",
                        'choices' => [
                            ['choice_text' => "La date à laquelle le coupon est fixé", 'is_correct' => false],
                            ['choice_text' => "La date prévue pour le remboursement du principal", 'is_correct' => true],
                            ['choice_text' => "La date d'ouverture du marché obligataire", 'is_correct' => false],
                            ['choice_text' => "La date de calcul du spread de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "L'échéance est la date à laquelle le principal doit être remboursé selon les modalités du titre, sauf événement particulier comme un défaut ou une option contractuelle.",
                    ],
                    [
                        'question' => "Une obligation de 1 000 € verse 60 € de coupon annuel. Le taux de coupon est donc de...",
                        'choices' => [
                            ['choice_text' => "3 %", 'is_correct' => false],
                            ['choice_text' => "6 %", 'is_correct' => true],
                            ['choice_text' => "16,7 %", 'is_correct' => false],
                            ['choice_text' => "60 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux de coupon est 60 / 1 000 = 0,06, soit 6 %.",
                    ],
                ],
            ],
            [
                'title' => "Prix d’une obligation et niveau des taux",
                'description' => "Des cas simples pour comprendre pourquoi le prix d'une obligation existante réagit aux mouvements des taux d'intérêt.",
                'duration' => 25,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une obligation à taux fixe devient généralement moins attractive lorsque les taux de marché augmentent. Que fait alors son prix de marché, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Il augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "Il baisse généralement", 'is_correct' => true],
                            ['choice_text' => "Il reste toujours exactement égal au nominal", 'is_correct' => false],
                            ['choice_text' => "Il devient nul", 'is_correct' => false],
                        ],
                        'explanation' => "Quand les taux de marché montent, les nouvelles obligations offrent souvent des rendements plus élevés. L'ancienne obligation à coupon plus faible doit alors se négocier à un prix inférieur pour offrir un rendement compétitif.",
                    ],
                    [
                        'question' => "Une obligation verse un coupon fixe de 3 %. Les taux de marché pour des titres comparables passent à 5 %. Pourquoi son prix peut-il baisser ?",
                        'choices' => [
                            ['choice_text' => "Parce que son nominal disparaît", 'is_correct' => false],
                            ['choice_text' => "Parce que ses flux fixes deviennent relativement moins intéressants", 'is_correct' => true],
                            ['choice_text' => "Parce que le coupon est automatiquement réduit à 0 %", 'is_correct' => false],
                            ['choice_text' => "Parce que l'échéance est annulée", 'is_correct' => false],
                        ],
                        'explanation' => "Les flux de l'ancienne obligation restent fixés contractuellement. Face à de nouvelles obligations offrant autour de 5 %, le titre à 3 % doit généralement afficher un prix plus faible pour que son rendement courant à l'achat soit compétitif.",
                    ],
                    [
                        'question' => "Un investisseur détient une obligation à taux fixe et prévoit une hausse des taux. Quel risque de marché doit-il surveiller en priorité ?",
                        'choices' => [
                            ['choice_text' => "Le risque que le prix de l'obligation baisse", 'is_correct' => true],
                            ['choice_text' => "Le risque que le nominal soit multiplié par deux", 'is_correct' => false],
                            ['choice_text' => "Le risque que le coupon contractuel augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "Le risque que l'obligation devienne une action", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une obligation à taux fixe, une hausse des taux de marché exerce généralement une pression à la baisse sur le prix du titre avant l'échéance.",
                    ],
                    [
                        'question' => "Deux obligations identiques sauf pour leur coupon : l'une verse 2 %, l'autre 6 %. Si les taux du marché montent brusquement, laquelle peut être la plus sensible à une baisse de prix, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Toujours celle à 6 %", 'is_correct' => false],
                            ['choice_text' => "Toujours celle à 2 %", 'is_correct' => false],
                            ['choice_text' => "Cela dépend notamment de leur échéance et de leur structure, pas du coupon seul", 'is_correct' => true],
                            ['choice_text' => "Aucune, car les obligations à taux fixe ne bougent pas", 'is_correct' => false],
                        ],
                        'explanation' => "La sensibilité du prix dépend de plusieurs facteurs, notamment l'échéance, les flux de coupons et les caractéristiques du titre. Le coupon seul ne permet pas de conclure dans tous les cas.",
                    ],
                    [
                        'question' => "Un investisseur achète une obligation déjà émise en dessous de sa valeur nominale. Cette situation signifie notamment que...",
                        'choices' => [
                            ['choice_text' => "le prix de marché est inférieur au nominal", 'is_correct' => true],
                            ['choice_text' => "le coupon a forcément été supprimé", 'is_correct' => false],
                            ['choice_text' => "l'émetteur a forcément fait défaut", 'is_correct' => false],
                            ['choice_text' => "l'obligation n'a plus d'échéance", 'is_correct' => false],
                        ],
                        'explanation' => "Une obligation peut se négocier sous le pair pour diverses raisons, notamment les taux de marché, le risque de crédit ou d'autres conditions de marché. Un prix sous le nominal ne signifie pas automatiquement un défaut.",
                    ],
                    [
                        'question' => "Si les taux de marché baissent et que le risque de crédit de l'émetteur reste inchangé, le prix d'une obligation à taux fixe a tendance à...",
                        'choices' => [
                            ['choice_text' => "baisser", 'is_correct' => false],
                            ['choice_text' => "augmenter", 'is_correct' => true],
                            ['choice_text' => "rester nécessairement à 50 % du nominal", 'is_correct' => false],
                            ['choice_text' => "devenir égal au coupon annuel", 'is_correct' => false],
                        ],
                        'explanation' => "Avec des taux de marché plus bas, les coupons fixes existants deviennent relativement plus attractifs, ce qui soutient généralement le prix de l'obligation.",
                    ],
                    [
                        'question' => "Une obligation cotée 102 % du nominal de 1 000 € vaut environ...",
                        'choices' => [
                            ['choice_text' => "980 €", 'is_correct' => false],
                            ['choice_text' => "1 020 €", 'is_correct' => true],
                            ['choice_text' => "1 200 €", 'is_correct' => false],
                            ['choice_text' => "102 €", 'is_correct' => false],
                        ],
                        'explanation' => "Une cotation de 102 % signifie 1,02 × 1 000 €, soit 1 020 €. L'obligation se négocie alors au-dessus du pair.",
                    ],
                    [
                        'question' => "Une obligation cotée à 97 % du nominal de 1 000 € se négocie à quel prix approximatif ?",
                        'choices' => [
                            ['choice_text' => "970 €", 'is_correct' => true],
                            ['choice_text' => "903 €", 'is_correct' => false],
                            ['choice_text' => "1 030 €", 'is_correct' => false],
                            ['choice_text' => "97 €", 'is_correct' => false],
                        ],
                        'explanation' => "97 % de 1 000 € correspond à 0,97 × 1 000 = 970 €.",
                    ],
                    [
                        'question' => "Le rendement d'une obligation achetée aujourd'hui ne dépend-il que de son taux de coupon ?",
                        'choices' => [
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Non, le prix d'achat et les flux futurs comptent aussi", 'is_correct' => true],
                            ['choice_text' => "Oui, si elle est cotée en euros", 'is_correct' => false],
                            ['choice_text' => "Non, mais uniquement pour les actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon décrit un flux contractuel, mais le rendement pour un nouvel acheteur dépend également du prix payé, de l'échéance et des autres flux du titre.",
                    ],
                    [
                        'question' => "Un investisseur paie 1 050 € pour une obligation dont le nominal est de 1 000 €. Le titre est acheté...",
                        'choices' => [
                            ['choice_text' => "au pair", 'is_correct' => false],
                            ['choice_text' => "sous le pair", 'is_correct' => false],
                            ['choice_text' => "au-dessus du pair", 'is_correct' => true],
                            ['choice_text' => "à zéro coupon obligatoirement", 'is_correct' => false],
                        ],
                        'explanation' => "Un prix supérieur au nominal signifie que l'obligation est achetée au-dessus du pair, ou avec une prime.",
                    ],
                    [
                        'question' => "Pourquoi comparer le rendement de marché plutôt que le seul coupon est-il utile lorsqu'on compare des obligations ?",
                        'choices' => [
                            ['choice_text' => "Parce que le coupon ignore totalement le nominal", 'is_correct' => false],
                            ['choice_text' => "Parce que le rendement tient compte du prix payé et des flux attendus", 'is_correct' => true],
                            ['choice_text' => "Parce que le rendement ne dépend jamais de l'échéance", 'is_correct' => false],
                            ['choice_text' => "Parce que le coupon n'existe que pour les actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux de coupon est fixé par rapport au nominal, tandis que le rendement d'un investisseur tient compte du prix réellement payé et des flux qu'il recevra.",
                    ],
                ],
            ],
            [
                'title' => "Rendement courant et lecture d’un titre",
                'description' => "Calculs et interprétations simples pour passer du coupon à une lecture plus utile du rendement d'une obligation.",
                'duration' => 27,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une obligation verse un coupon annuel de 70 € et se négocie à 1 000 €. Son rendement courant est de...",
                        'choices' => [
                            ['choice_text' => "5 %", 'is_correct' => false],
                            ['choice_text' => "7 %", 'is_correct' => true],
                            ['choice_text' => "10 %", 'is_correct' => false],
                            ['choice_text' => "14 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement courant se calcule ici par coupon annuel / prix de marché, soit 70 / 1 000 = 7 %.",
                    ],
                    [
                        'question' => "Une obligation verse 50 € de coupon annuel et se négocie à 950 €. Son rendement courant est le plus proche de...",
                        'choices' => [
                            ['choice_text' => "5,00 %", 'is_correct' => false],
                            ['choice_text' => "5,26 %", 'is_correct' => true],
                            ['choice_text' => "6,50 %", 'is_correct' => false],
                            ['choice_text' => "9,50 %", 'is_correct' => false],
                        ],
                        'explanation' => "50 / 950 ≈ 0,0526, soit environ 5,26 %. Ce calcul ne correspond pas exactement au Yield to Maturity, qui intégrerait aussi les autres flux et l'échéance.",
                    ],
                    [
                        'question' => "Si le coupon annuel reste constant mais que le prix de marché de l'obligation baisse, le rendement courant calculé comme coupon/prix...",
                        'choices' => [
                            ['choice_text' => "augmente", 'is_correct' => true],
                            ['choice_text' => "baisse", 'is_correct' => false],
                            ['choice_text' => "reste nécessairement nul", 'is_correct' => false],
                            ['choice_text' => "devient égal au nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un numérateur constant et un prix plus faible au dénominateur, le ratio coupon/prix augmente.",
                    ],
                    [
                        'question' => "Une obligation de nominal 1 000 € verse 80 € par an et vaut 1 100 €. Son rendement courant est d'environ...",
                        'choices' => [
                            ['choice_text' => "7,27 %", 'is_correct' => true],
                            ['choice_text' => "8,00 %", 'is_correct' => false],
                            ['choice_text' => "8,80 %", 'is_correct' => false],
                            ['choice_text' => "11,00 %", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement courant est 80 / 1 100 ≈ 7,27 %. Le 8 % correspond au coupon rapporté au nominal, pas au prix de marché.",
                    ],
                    [
                        'question' => "Pourquoi le rendement courant n'est-il pas identique dans tous les cas au Yield to Maturity ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il ignore le remboursement du nominal et certains éléments temporels", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il inclut toujours les dividendes d'actions", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il ne peut jamais être calculé", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il est réservé aux obligations zéro coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement courant est un indicateur simple basé sur le coupon et le prix. Le Yield to Maturity tient compte de l'ensemble des flux jusqu'à l'échéance, dont le remboursement du principal.",
                    ],
                    [
                        'question' => "Un investisseur achète une obligation à 920 € pour un nominal de 1 000 €, sans considérer les coupons. À l'échéance, le remboursement du nominal crée un gain de...",
                        'choices' => [
                            ['choice_text' => "20 €", 'is_correct' => false],
                            ['choice_text' => "80 €", 'is_correct' => true],
                            ['choice_text' => "920 €", 'is_correct' => false],
                            ['choice_text' => "1 920 €", 'is_correct' => false],
                        ],
                        'explanation' => "Si le nominal de 1 000 € est remboursé après un achat à 920 €, l'écart sur le principal est de 80 €. Les coupons éventuels viennent s'ajouter séparément.",
                    ],
                    [
                        'question' => "Une obligation est cotée à 103 et son nominal est de 1 000 €. Le prix est de...",
                        'choices' => [
                            ['choice_text' => "103 €", 'is_correct' => false],
                            ['choice_text' => "970 €", 'is_correct' => false],
                            ['choice_text' => "1 030 €", 'is_correct' => true],
                            ['choice_text' => "1 300 €", 'is_correct' => false],
                        ],
                        'explanation' => "Une cotation de 103 signifie 103 % du nominal : 1,03 × 1 000 = 1 030 €.",
                    ],
                    [
                        'question' => "Quand une obligation s'échange sous le pair, le rendement demandé par le marché peut être supérieur au taux de coupon. Pourquoi ?",
                        'choices' => [
                            ['choice_text' => "Parce que le prix payé est inférieur au nominal et crée aussi un gain potentiel vers l'échéance", 'is_correct' => true],
                            ['choice_text' => "Parce que le coupon est nécessairement payé deux fois", 'is_correct' => false],
                            ['choice_text' => "Parce que le nominal est supprimé", 'is_correct' => false],
                            ['choice_text' => "Parce que la dette devient automatiquement du capital", 'is_correct' => false],
                        ],
                        'explanation' => "Un achat sous le pair permet, en plus des coupons, d'espérer un remboursement du nominal supérieur au prix payé si l'obligation arrive normalement à échéance.",
                    ],
                    [
                        'question' => "Une obligation se négocie 1 040 € et verse 52 € de coupon annuel. Son rendement courant est de 5 % ?",
                        'choices' => [
                            ['choice_text' => "Oui, exactement", 'is_correct' => true],
                            ['choice_text' => "Non, il est de 2 %", 'is_correct' => false],
                            ['choice_text' => "Non, il est de 7 %", 'is_correct' => false],
                            ['choice_text' => "Non, il est de 10 %", 'is_correct' => false],
                        ],
                        'explanation' => "52 / 1 040 = 0,05, soit exactement 5 %.",
                    ],
                    [
                        'question' => "Une hausse du prix d'une obligation, avec coupon inchangé, a généralement quel effet sur son rendement courant ?",
                        'choices' => [
                            ['choice_text' => "Elle le réduit", 'is_correct' => true],
                            ['choice_text' => "Elle le double", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut avoir aucun effet", 'is_correct' => false],
                            ['choice_text' => "Elle le rend toujours négatif", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement courant est calculé en divisant le coupon par le prix. À coupon constant, une hausse du prix réduit donc le ratio.",
                    ],
                    [
                        'question' => "Lorsqu'un analyste compare deux obligations à coupon identique mais à des prix différents, il doit notamment éviter de conclure que...",
                        'choices' => [
                            ['choice_text' => "elles offrent exactement le même rendement parce que leur coupon est identique", 'is_correct' => true],
                            ['choice_text' => "leur prix peut influencer le rendement de l'acheteur", 'is_correct' => false],
                            ['choice_text' => "le nominal reste un élément distinct du prix de marché", 'is_correct' => false],
                            ['choice_text' => "le contexte de risque de crédit peut aussi compter", 'is_correct' => false],
                        ],
                        'explanation' => "Deux obligations ayant le même coupon peuvent offrir des rendements différents si elles se négocient à des prix différents ou si leurs autres caractéristiques diffèrent.",
                    ],
                ],
            ],
            [
                'title' => "Échéance, durée et sensibilité aux taux",
                'description' => "Une introduction pratique à la maturité et à la sensibilité d'un portefeuille obligataire face aux variations de taux.",
                'duration' => 31,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Entre deux obligations comparables, laquelle est généralement la plus sensible aux variations de taux, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Celle dont les flux sont récupérés plus tôt", 'is_correct' => false],
                            ['choice_text' => "Celle dont les flux sont plus éloignés dans le temps", 'is_correct' => true],
                            ['choice_text' => "Toujours celle au coupon le plus élevé", 'is_correct' => false],
                            ['choice_text' => "Celle qui a déjà dépassé son échéance", 'is_correct' => false],
                        ],
                        'explanation' => "Plus les flux d'une obligation sont éloignés dans le temps, plus leur valeur actuelle est sensible aux variations du taux d'actualisation. La durée permet justement d'approcher cette sensibilité.",
                    ],
                    [
                        'question' => "Une obligation arrive à échéance dans deux ans. Une autre obligation comparable arrive à échéance dans dix ans. Laquelle présente généralement le risque de taux le plus élevé ?",
                        'choices' => [
                            ['choice_text' => "Celle de deux ans", 'is_correct' => false],
                            ['choice_text' => "Celle de dix ans", 'is_correct' => true],
                            ['choice_text' => "Les deux sont nécessairement identiques", 'is_correct' => false],
                            ['choice_text' => "La plus courte uniquement si les taux baissent", 'is_correct' => false],
                        ],
                        'explanation' => "À caractéristiques comparables, l'obligation à plus longue échéance réagit davantage aux variations des taux de marché.",
                    ],
                    [
                        'question' => "La duration est principalement utilisée en fixed income pour mesurer...",
                        'choices' => [
                            ['choice_text' => "la probabilité de défaut exacte", 'is_correct' => false],
                            ['choice_text' => "la sensibilité du prix d'une obligation aux variations des taux", 'is_correct' => true],
                            ['choice_text' => "le montant du coupon contractuel", 'is_correct' => false],
                            ['choice_text' => "le nombre de détenteurs du titre", 'is_correct' => false],
                        ],
                        'explanation' => "La duration est un outil de mesure de la sensibilité du prix d'une obligation ou d'un portefeuille obligataire aux mouvements des taux d'intérêt.",
                    ],
                    [
                        'question' => "Une obligation avec une duration de 5 ans subit approximativement quelle variation de prix pour une hausse parallèle des taux de 1 %, selon l'approximation de duration modifiée ?",
                        'choices' => [
                            ['choice_text' => "+5 %", 'is_correct' => false],
                            ['choice_text' => "-5 %", 'is_correct' => true],
                            ['choice_text' => "-1 %", 'is_correct' => false],
                            ['choice_text' => "+1 %", 'is_correct' => false],
                        ],
                        'explanation' => "L'approximation est ΔP/P ≈ -Duration × Δy. Avec une duration de 5 et une hausse de taux de 1 %, on obtient environ -5 %.",
                    ],
                    [
                        'question' => "Une duration élevée signifie qu'un portefeuille obligataire est généralement...",
                        'choices' => [
                            ['choice_text' => "moins sensible aux taux", 'is_correct' => false],
                            ['choice_text' => "plus sensible aux taux", 'is_correct' => true],
                            ['choice_text' => "sans risque de crédit", 'is_correct' => false],
                            ['choice_text' => "constitué uniquement d'actions", 'is_correct' => false],
                        ],
                        'explanation' => "Plus la duration est élevée, plus une variation donnée des taux peut produire une variation importante du prix, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Un gestionnaire qui veut réduire rapidement la sensibilité de son portefeuille à une hausse des taux cherchera notamment à...",
                        'choices' => [
                            ['choice_text' => "augmenter la duration", 'is_correct' => false],
                            ['choice_text' => "réduire la duration", 'is_correct' => true],
                            ['choice_text' => "supprimer toutes les échéances courtes", 'is_correct' => false],
                            ['choice_text' => "acheter uniquement des obligations zéro coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Réduire la duration réduit généralement la sensibilité du portefeuille aux mouvements des taux d'intérêt.",
                    ],
                    [
                        'question' => "Une obligation verse des coupons importants relativement tôt. Par rapport à une obligation zéro coupon de même échéance, sa sensibilité aux taux peut être...",
                        'choices' => [
                            ['choice_text' => "plus faible", 'is_correct' => true],
                            ['choice_text' => "toujours exactement identique", 'is_correct' => false],
                            ['choice_text' => "nécessairement plus forte", 'is_correct' => false],
                            ['choice_text' => "impossible à comparer", 'is_correct' => false],
                        ],
                        'explanation' => "Des coupons versés plus tôt raccourcissent le moment moyen où les flux sont reçus. À échéance comparable, cela réduit généralement la duration par rapport à une obligation zéro coupon.",
                    ],
                    [
                        'question' => "Pourquoi une obligation zéro coupon à longue échéance peut-elle être très sensible aux mouvements de taux ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une grande partie de son unique flux arrive très loin dans le futur", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle verse des coupons chaque semaine", 'is_correct' => false],
                            ['choice_text' => "Parce que son nominal change chaque mois", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle est toujours émise par un État", 'is_correct' => false],
                        ],
                        'explanation' => "Le principal d'une obligation zéro coupon est reçu à l'échéance. Lorsque cette échéance est lointaine, la valeur actuelle de ce flux est particulièrement sensible au taux d'actualisation.",
                    ],
                    [
                        'question' => "Si les taux diminuent de 0,5 % et qu'une obligation a une duration de 4, quel ordre de grandeur de variation de prix peut-on attendre, hors convexité ?",
                        'choices' => [
                            ['choice_text' => "-2 %", 'is_correct' => false],
                            ['choice_text' => "+2 %", 'is_correct' => true],
                            ['choice_text' => "+0,5 %", 'is_correct' => false],
                            ['choice_text' => "-0,5 %", 'is_correct' => false],
                        ],
                        'explanation' => "Avec ΔP/P ≈ -D × Δy, on obtient -4 × (-0,005) = +0,02, soit environ +2 %.",
                    ],
                    [
                        'question' => "La duration ne doit pas être interprétée comme...",
                        'choices' => [
                            ['choice_text' => "une échéance juridique exacte dans tous les cas", 'is_correct' => true],
                            ['choice_text' => "un indicateur de sensibilité aux taux", 'is_correct' => false],
                            ['choice_text' => "un outil utile pour comparer des portefeuilles obligataires", 'is_correct' => false],
                            ['choice_text' => "un concept lié aux flux futurs", 'is_correct' => false],
                        ],
                        'explanation' => "La duration n'est pas simplement la date contractuelle de remboursement. C'est une mesure pondérée des flux, surtout utilisée pour apprécier la sensibilité aux taux.",
                    ],
                ],
            ],
            [
                'title' => "Courbe des taux et lecture du marché",
                'description' => "Lecture de base des taux selon les échéances et des informations que peut donner une courbe des taux.",
                'duration' => 25,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Une courbe des taux représente principalement la relation entre...",
                        'choices' => [
                            ['choice_text' => "le taux et l'échéance", 'is_correct' => true],
                            ['choice_text' => "le coupon et le nombre d'actions", 'is_correct' => false],
                            ['choice_text' => "le chiffre d'affaires et la marge", 'is_correct' => false],
                            ['choice_text' => "le prix d'une action et son dividende", 'is_correct' => false],
                        ],
                        'explanation' => "La courbe des taux montre les rendements associés à différentes maturités, par exemple 3 mois, 2 ans, 10 ans ou 30 ans.",
                    ],
                    [
                        'question' => "Sur une courbe des taux normale, les taux à long terme sont supérieurs aux taux à court terme. Quelle forme correspond le mieux à cette situation ?",
                        'choices' => [
                            ['choice_text' => "Une courbe ascendante", 'is_correct' => true],
                            ['choice_text' => "Une courbe strictement descendante", 'is_correct' => false],
                            ['choice_text' => "Une courbe sans aucune différence de taux", 'is_correct' => false],
                            ['choice_text' => "Une courbe qui représente uniquement les actions", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les taux augmentent avec l'échéance, la courbe est ascendante. C'est une configuration courante de courbe dite normale.",
                    ],
                    [
                        'question' => "Si le taux à 2 ans est de 3 % et celui à 10 ans de 4,5 %, l'écart 10 ans moins 2 ans est de...",
                        'choices' => [
                            ['choice_text' => "1,5 point de pourcentage", 'is_correct' => true],
                            ['choice_text' => "1,5 % du nominal", 'is_correct' => false],
                            ['choice_text' => "7,5 points", 'is_correct' => false],
                            ['choice_text' => "0,67 point", 'is_correct' => false],
                        ],
                        'explanation' => "4,5 % - 3 % = 1,5 point de pourcentage. Il est utile de distinguer un écart en points de pourcentage d'une variation relative.",
                    ],
                    [
                        'question' => "Une courbe des taux inversée signifie généralement que...",
                        'choices' => [
                            ['choice_text' => "les taux courts sont supérieurs aux taux longs", 'is_correct' => true],
                            ['choice_text' => "les taux longs sont toujours nuls", 'is_correct' => false],
                            ['choice_text' => "toutes les obligations ont le même coupon", 'is_correct' => false],
                            ['choice_text' => "les entreprises cessent automatiquement d'emprunter", 'is_correct' => false],
                        ],
                        'explanation' => "Une courbe inversée présente, sur une partie de la courbe, des taux à court terme supérieurs à ceux des maturités plus longues.",
                    ],
                    [
                        'question' => "Pourquoi un trésorier d'entreprise peut-il suivre attentivement la courbe des taux ?",
                        'choices' => [
                            ['choice_text' => "Pour réfléchir au coût de ses financements à différentes maturités", 'is_correct' => true],
                            ['choice_text' => "Pour calculer uniquement son nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer le dividende légal des actions", 'is_correct' => false],
                            ['choice_text' => "Pour connaître automatiquement son chiffre d'affaires futur", 'is_correct' => false],
                        ],
                        'explanation' => "La courbe fournit des informations sur le niveau des taux selon les maturités, ce qui peut aider à analyser les coûts de financement et les choix de maturité.",
                    ],
                    [
                        'question' => "Une hausse des taux à 10 ans sans mouvement des taux à 3 mois correspond à un déplacement qui...",
                        'choices' => [
                            ['choice_text' => "affecte toute la courbe de la même façon", 'is_correct' => false],
                            ['choice_text' => "touche davantage le segment long de la courbe", 'is_correct' => true],
                            ['choice_text' => "ne concerne pas le marché obligataire", 'is_correct' => false],
                            ['choice_text' => "supprime automatiquement la prime de risque", 'is_correct' => false],
                        ],
                        'explanation' => "Si les taux longs augmentent alors que les taux courts restent inchangés, le changement concerne surtout la partie longue de la courbe.",
                    ],
                    [
                        'question' => "Un investisseur observe une courbe des taux très plate. Quelle conclusion prudente est la plus appropriée ?",
                        'choices' => [
                            ['choice_text' => "Les taux sont proches entre plusieurs maturités observées", 'is_correct' => true],
                            ['choice_text' => "Tous les risques financiers ont disparu", 'is_correct' => false],
                            ['choice_text' => "Les obligations ne peuvent plus perdre de valeur", 'is_correct' => false],
                            ['choice_text' => "L'inflation est forcément nulle", 'is_correct' => false],
                        ],
                        'explanation' => "Une courbe plate signifie que les rendements sont relativement proches entre les maturités considérées. Elle ne permet pas, à elle seule, de conclure à la disparition de tous les risques.",
                    ],
                    [
                        'question' => "Si les taux passent de 2,5 % à 3,0 %, la hausse est de...",
                        'choices' => [
                            ['choice_text' => "0,5 point de pourcentage", 'is_correct' => true],
                            ['choice_text' => "50 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "20 points", 'is_correct' => false],
                            ['choice_text' => "2,5 points", 'is_correct' => false],
                        ],
                        'explanation' => "3,0 % - 2,5 % = 0,5 point de pourcentage. En termes relatifs, la hausse est de 20 %, mais ce n'est pas la même information.",
                    ],
                    [
                        'question' => "Pourquoi deux obligations du même émetteur peuvent-elles avoir des rendements différents selon leur échéance ?",
                        'choices' => [
                            ['choice_text' => "Parce que les conditions de taux peuvent varier selon la maturité", 'is_correct' => true],
                            ['choice_text' => "Parce que leur nominal doit être différent", 'is_correct' => false],
                            ['choice_text' => "Parce que l'une doit forcément être une action", 'is_correct' => false],
                            ['choice_text' => "Parce que les coupons sont légalement identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché attribue des taux différents aux différentes maturités. Deux obligations du même émetteur peuvent donc offrir des rendements distincts en fonction de leur échéance et de leur structure.",
                    ],
                    [
                        'question' => "Un écart de rendement entre une obligation à 10 ans et une obligation à 2 ans est souvent appelé...",
                        'choices' => [
                            ['choice_text' => "un spread de maturité", 'is_correct' => true],
                            ['choice_text' => "un dividende", 'is_correct' => false],
                            ['choice_text' => "une marge brute", 'is_correct' => false],
                            ['choice_text' => "un ratio de solvabilité", 'is_correct' => false],
                        ],
                        'explanation' => "On parle souvent d'écart ou de spread entre maturités pour décrire la différence de rendement entre deux points de la courbe.",
                    ],
                ],
            ],
            [
                'title' => "Risque de taux et décisions d’investisseur",
                'description' => "Petits cas pratiques pour relier les mouvements de taux au comportement d'un portefeuille obligataire.",
                'duration' => 29,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Un investisseur pense que les taux vont fortement augmenter. Entre une obligation très courte et une obligation très longue comparables, laquelle expose généralement davantage au risque de taux ?",
                        'choices' => [
                            ['choice_text' => "La très courte", 'is_correct' => false],
                            ['choice_text' => "La très longue", 'is_correct' => true],
                            ['choice_text' => "Aucune", 'is_correct' => false],
                            ['choice_text' => "Uniquement celle dont le coupon est payé annuellement", 'is_correct' => false],
                        ],
                        'explanation' => "À caractéristiques comparables, la longue maturité s'accompagne généralement d'une duration plus élevée et donc d'une sensibilité plus forte aux variations de taux.",
                    ],
                    [
                        'question' => "Une banque souhaite réduire la sensibilité de son portefeuille obligataire avant une période qu'elle juge incertaine sur les taux. Une mesure possible est de...",
                        'choices' => [
                            ['choice_text' => "réduire la duration moyenne du portefeuille", 'is_correct' => true],
                            ['choice_text' => "allonger toutes les maturités", 'is_correct' => false],
                            ['choice_text' => "acheter uniquement les titres les plus longs", 'is_correct' => false],
                            ['choice_text' => "ignorer les flux futurs", 'is_correct' => false],
                        ],
                        'explanation' => "Réduire la duration est une manière classique de diminuer la sensibilité globale du portefeuille aux mouvements de taux.",
                    ],
                    [
                        'question' => "Un portefeuille gagne en valeur lorsque les taux baissent. Ce comportement est cohérent avec...",
                        'choices' => [
                            ['choice_text' => "la relation inverse habituelle entre taux et prix des obligations à taux fixe", 'is_correct' => true],
                            ['choice_text' => "une règle selon laquelle les obligations deviennent des actions", 'is_correct' => false],
                            ['choice_text' => "une hausse automatique du coupon contractuel", 'is_correct' => false],
                            ['choice_text' => "une baisse obligatoire du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une obligation à taux fixe, une baisse des taux augmente généralement la valeur actuelle des flux existants et donc le prix de marché.",
                    ],
                    [
                        'question' => "Un gestionnaire a une duration de portefeuille de 6 et anticipe une hausse des taux de 0,25 %. L'effet approximatif sur le prix est...",
                        'choices' => [
                            ['choice_text' => "-1,5 %", 'is_correct' => true],
                            ['choice_text' => "+1,5 %", 'is_correct' => false],
                            ['choice_text' => "-0,25 %", 'is_correct' => false],
                            ['choice_text' => "+6 %", 'is_correct' => false],
                        ],
                        'explanation' => "Avec ΔP/P ≈ -D × Δy, on obtient -6 × 0,0025 = -0,015, soit environ -1,5 %.",
                    ],
                    [
                        'question' => "Pourquoi un investisseur qui conserve une obligation jusqu'à l'échéance peut-il être moins préoccupé par les fluctuations quotidiennes du prix ?",
                        'choices' => [
                            ['choice_text' => "Parce que le remboursement contractuel du principal reste l'objectif si l'émetteur honore sa dette", 'is_correct' => true],
                            ['choice_text' => "Parce que le prix de marché n'existe plus", 'is_correct' => false],
                            ['choice_text' => "Parce que le coupon change chaque jour", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque de défaut est toujours nul", 'is_correct' => false],
                        ],
                        'explanation' => "La conservation jusqu'à l'échéance réduit l'importance économique des variations de prix intermédiaires, mais elle n'élimine ni le risque de défaut ni d'autres risques.",
                    ],
                    [
                        'question' => "Un investisseur doit financer une dépense dans six mois. Entre une obligation très longue et un placement obligataire court, le choix d'une maturité proche de son besoin vise notamment à...",
                        'choices' => [
                            ['choice_text' => "réduire le risque de devoir vendre un actif long au mauvais moment", 'is_correct' => true],
                            ['choice_text' => "garantir une plus-value", 'is_correct' => false],
                            ['choice_text' => "supprimer tout risque de taux", 'is_correct' => false],
                            ['choice_text' => "augmenter automatiquement le coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Aligner la maturité avec le besoin de liquidité peut réduire le risque de devoir vendre un titre à long terme avant son échéance alors que son prix a évolué défavorablement.",
                    ],
                    [
                        'question' => "Une variation de taux de 1 point de pourcentage signifie ici une variation de...",
                        'choices' => [
                            ['choice_text' => "1 %", 'is_correct' => false],
                            ['choice_text' => "1 point de pourcentage", 'is_correct' => true],
                            ['choice_text' => "10 points de pourcentage", 'is_correct' => false],
                            ['choice_text' => "0,01 point", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse de 3 % à 4 % correspond à +1 point de pourcentage. Il ne faut pas la confondre avec une hausse relative de 33,3 %.",
                    ],
                    [
                        'question' => "Une obligation à taux fixe offre un coupon de 4 %. De nouvelles obligations comparables offrent 6 %. Pour rester attractive, l'ancienne obligation peut notamment...",
                        'choices' => [
                            ['choice_text' => "se négocier à un prix plus bas", 'is_correct' => true],
                            ['choice_text' => "changer automatiquement son coupon à 6 %", 'is_correct' => false],
                            ['choice_text' => "supprimer son échéance", 'is_correct' => false],
                            ['choice_text' => "devenir une obligation zéro coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon de l'ancienne obligation est contractuel. Pour offrir un rendement de marché comparable, son prix peut devoir baisser.",
                    ],
                    [
                        'question' => "Un investisseur qui veut une forte exposition positive à une baisse des taux peut être particulièrement attentif à...",
                        'choices' => [
                            ['choice_text' => "la duration des obligations détenues", 'is_correct' => true],
                            ['choice_text' => "le nombre d'actions en circulation de l'émetteur", 'is_correct' => false],
                            ['choice_text' => "le chiffre d'affaires trimestriel uniquement", 'is_correct' => false],
                            ['choice_text' => "le montant du dividende des concurrents", 'is_correct' => false],
                        ],
                        'explanation' => "La duration fournit une indication de la sensibilité du prix aux mouvements de taux, ce qui est central pour ce type de positionnement.",
                    ],
                    [
                        'question' => "Pourquoi les mouvements de taux ne produisent-ils pas forcément la même variation de prix sur deux obligations différentes ?",
                        'choices' => [
                            ['choice_text' => "Parce que leurs duration, coupons, échéances ou structures peuvent différer", 'is_correct' => true],
                            ['choice_text' => "Parce que le prix d'une obligation est toujours fixe", 'is_correct' => false],
                            ['choice_text' => "Parce que les coupons ne sont jamais contractuels", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une obligation n'a pas de flux futurs", 'is_correct' => false],
                        ],
                        'explanation' => "La réaction d'une obligation dépend de la structure de ses flux et notamment de sa duration. Deux titres peuvent donc réagir différemment au même mouvement de taux.",
                    ],
                    [
                        'question' => "Une entreprise détient un portefeuille obligataire très sensible aux taux. Quel indicateur simple peut-elle suivre pour surveiller cette exposition ?",
                        'choices' => [
                            ['choice_text' => "La duration", 'is_correct' => true],
                            ['choice_text' => "Le taux de TVA", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Le nombre de clients", 'is_correct' => false],
                        ],
                        'explanation' => "La duration est un indicateur central pour suivre la sensibilité du prix d'un portefeuille obligataire aux variations des taux d'intérêt.",
                    ],
                ],
            ],
            [
                'title' => "Obligations zéro coupon et actualisation",
                'description' => "Des exercices simples autour des obligations zéro coupon et de la valeur actuelle d'un remboursement futur.",
                'duration' => 28,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une obligation zéro coupon rembourse 1 000 € dans deux ans. Si le prix aujourd'hui est inférieur à 1 000 €, d'où vient principalement le rendement attendu ?",
                        'choices' => [
                            ['choice_text' => "De l'écart entre le prix payé et le remboursement futur", 'is_correct' => true],
                            ['choice_text' => "D'un coupon mensuel", 'is_correct' => false],
                            ['choice_text' => "D'un dividende versé par l'État", 'is_correct' => false],
                            ['choice_text' => "D'une variation automatique du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Sans coupons périodiques, le rendement provient principalement de la différence entre le prix d'achat et le montant remboursé à l'échéance.",
                    ],
                    [
                        'question' => "Avec un taux d'actualisation positif, 1 000 € reçus dans trois ans valent aujourd'hui...",
                        'choices' => [
                            ['choice_text' => "plus que 1 000 €", 'is_correct' => false],
                            ['choice_text' => "moins que 1 000 €", 'is_correct' => true],
                            ['choice_text' => "exactement 1 000 € dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "zéro", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur temps de l'argent implique qu'un montant futur positif actualisé à un taux positif vaut moins aujourd'hui que son montant nominal futur.",
                    ],
                    [
                        'question' => "Une somme de 1 100 € doit être reçue dans un an. Avec un taux d'actualisation de 10 %, sa valeur actuelle est de...",
                        'choices' => [
                            ['choice_text' => "1 210 €", 'is_correct' => false],
                            ['choice_text' => "1 100 €", 'is_correct' => false],
                            ['choice_text' => "1 000 €", 'is_correct' => true],
                            ['choice_text' => "990 €", 'is_correct' => false],
                        ],
                        'explanation' => "VA = 1 100 / 1,10 = 1 000 €. Le principe d'actualisation consiste à ramener un flux futur à sa valeur aujourd'hui.",
                    ],
                    [
                        'question' => "Une obligation zéro coupon de 1 000 € payable dans un an est valorisée à 952,38 €. Le taux d'actualisation implicite est proche de...",
                        'choices' => [
                            ['choice_text' => "2,5 %", 'is_correct' => false],
                            ['choice_text' => "5 %", 'is_correct' => true],
                            ['choice_text' => "9,5 %", 'is_correct' => false],
                            ['choice_text' => "20 %", 'is_correct' => false],
                        ],
                        'explanation' => "952,38 × 1,05 ≈ 1 000. Le prix correspond donc approximativement à un taux d'actualisation de 5 %.",
                    ],
                    [
                        'question' => "Si le taux d'actualisation augmente, la valeur actuelle d'un remboursement futur de 1 000 €...",
                        'choices' => [
                            ['choice_text' => "augmente", 'is_correct' => false],
                            ['choice_text' => "baisse", 'is_correct' => true],
                            ['choice_text' => "reste nécessairement identique", 'is_correct' => false],
                            ['choice_text' => "devient égale au coupon", 'is_correct' => false],
                        ],
                        'explanation' => "Un taux d'actualisation plus élevé réduit la valeur actuelle d'un flux futur, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Pour une obligation zéro coupon, le montant reçu à l'échéance est généralement...",
                        'choices' => [
                            ['choice_text' => "inférieur au prix d'achat", 'is_correct' => false],
                            ['choice_text' => "le nominal prévu par le contrat, sous réserve du remboursement", 'is_correct' => true],
                            ['choice_text' => "toujours égal au coupon annuel", 'is_correct' => false],
                            ['choice_text' => "variable chaque semaine", 'is_correct' => false],
                        ],
                        'explanation' => "Le zéro coupon prévoit généralement un remboursement du nominal à l'échéance, sous réserve que l'émetteur honore sa dette.",
                    ],
                    [
                        'question' => "Une obligation zéro coupon rembourse 2 000 € dans quatre ans. Pourquoi son prix est-il généralement inférieur à 2 000 € si le taux de marché est positif ?",
                        'choices' => [
                            ['choice_text' => "Parce que le remboursement est futur et doit être actualisé", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un zéro coupon rembourse toujours moins que le nominal", 'is_correct' => false],
                            ['choice_text' => "Parce que les obligations n'ont pas de valeur nominale", 'is_correct' => false],
                            ['choice_text' => "Parce que le marché interdit les prix supérieurs à zéro", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant futur est actualisé à un taux positif. Sa valeur aujourd'hui est donc inférieure au montant qui sera reçu dans quatre ans.",
                    ],
                    [
                        'question' => "Une obligation zéro coupon est achetée 900 € et remboursée 1 000 € à l'échéance. Hors risque de défaut, l'écart sur le principal est de...",
                        'choices' => [
                            ['choice_text' => "50 €", 'is_correct' => false],
                            ['choice_text' => "100 €", 'is_correct' => true],
                            ['choice_text' => "900 €", 'is_correct' => false],
                            ['choice_text' => "1 900 €", 'is_correct' => false],
                        ],
                        'explanation' => "1 000 - 900 = 100 €. Cet écart constitue une composante du rendement avant prise en compte du temps exact, des frais et de la fiscalité.",
                    ],
                    [
                        'question' => "Entre deux flux identiques, lequel a la valeur actuelle la plus faible si le taux d'actualisation est positif ?",
                        'choices' => [
                            ['choice_text' => "Celui reçu aujourd'hui", 'is_correct' => false],
                            ['choice_text' => "Celui reçu plus tard", 'is_correct' => true],
                            ['choice_text' => "Les deux sont forcément identiques", 'is_correct' => false],
                            ['choice_text' => "Celui reçu après remboursement du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Plus un flux identique est éloigné dans le temps, plus il est réduit par l'actualisation à taux positif.",
                    ],
                    [
                        'question' => "Une obligation zéro coupon de 1 000 € est achetée 800 €. Peut-on conclure, à partir de cette seule information, que l'investisseur gagnera forcément 200 € ?",
                        'choices' => [
                            ['choice_text' => "Oui, sans aucune autre condition", 'is_correct' => false],
                            ['choice_text' => "Non, il faut notamment que l'émetteur rembourse effectivement le nominal et considérer l'horizon", 'is_correct' => true],
                            ['choice_text' => "Oui, parce qu'un zéro coupon ne comporte aucun risque", 'is_correct' => false],
                            ['choice_text' => "Non, car le nominal ne sera jamais remboursé", 'is_correct' => false],
                        ],
                        'explanation' => "Le gain de 200 € sur le principal suppose notamment un remboursement effectif de 1 000 €. Le risque de défaut et le temps écoulé restent importants.",
                    ],
                    [
                        'question' => "Un taux d'actualisation de 0 % appliqué à un flux de 1 000 € dans un an donne une valeur actuelle de...",
                        'choices' => [
                            ['choice_text' => "900 €", 'is_correct' => false],
                            ['choice_text' => "950 €", 'is_correct' => false],
                            ['choice_text' => "1 000 €", 'is_correct' => true],
                            ['choice_text' => "1 100 €", 'is_correct' => false],
                        ],
                        'explanation' => "À un taux d'actualisation nul, il n'y a pas de réduction du flux pour la valeur temps : 1 000 € restent 1 000 € en valeur actuelle.",
                    ],
                ],
            ],
            [
                'title' => "Risque de crédit et credit spread",
                'description' => "Comprendre pourquoi deux émetteurs peuvent emprunter à des taux différents et comment lire un spread de crédit.",
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une obligation d'entreprise offre 5,5 % alors qu'une obligation souveraine de référence comparable offre 3,5 %. L'écart est de...",
                        'choices' => [
                            ['choice_text' => "1 point", 'is_correct' => false],
                            ['choice_text' => "2 points de pourcentage", 'is_correct' => true],
                            ['choice_text' => "2,5 points", 'is_correct' => false],
                            ['choice_text' => "9 points", 'is_correct' => false],
                        ],
                        'explanation' => "5,5 % - 3,5 % = 2 points de pourcentage. Cet écart peut notamment rémunérer le risque de crédit supplémentaire et d'autres différences entre les titres.",
                    ],
                    [
                        'question' => "À caractéristiques proches, pourquoi une entreprise financièrement plus risquée peut-elle devoir offrir un rendement obligataire plus élevé ?",
                        'choices' => [
                            ['choice_text' => "Pour compenser les investisseurs pour un risque de crédit plus important", 'is_correct' => true],
                            ['choice_text' => "Parce que son nominal est forcément plus grand", 'is_correct' => false],
                            ['choice_text' => "Parce que son coupon est toujours variable", 'is_correct' => false],
                            ['choice_text' => "Parce que les marchés interdisent les taux bas", 'is_correct' => false],
                        ],
                        'explanation' => "Un rendement plus élevé peut servir à rémunérer un risque de défaut ou de dégradation de crédit plus important.",
                    ],
                    [
                        'question' => "Si le marché devient beaucoup plus inquiet au sujet d'un émetteur, son credit spread peut...",
                        'choices' => [
                            ['choice_text' => "se resserrer automatiquement", 'is_correct' => false],
                            ['choice_text' => "s'élargir", 'is_correct' => true],
                            ['choice_text' => "devenir exactement égal à zéro", 'is_correct' => false],
                            ['choice_text' => "disparaître du prix", 'is_correct' => false],
                        ],
                        'explanation' => "Une perception accrue du risque de crédit entraîne souvent une hausse de la prime demandée par les investisseurs, donc un spread plus large.",
                    ],
                    [
                        'question' => "Un spread de crédit de 150 points de base correspond à...",
                        'choices' => [
                            ['choice_text' => "0,15 %", 'is_correct' => false],
                            ['choice_text' => "1,50 %", 'is_correct' => true],
                            ['choice_text' => "15 %", 'is_correct' => false],
                            ['choice_text' => "150 %", 'is_correct' => false],
                        ],
                        'explanation' => "100 points de base = 1 point de pourcentage. Donc 150 points de base = 1,50 %.",
                    ],
                    [
                        'question' => "Une entreprise améliore nettement sa situation financière. Toutes choses égales par ailleurs, quelle évolution peut-on attendre de son spread de crédit ?",
                        'choices' => [
                            ['choice_text' => "Une réduction potentielle", 'is_correct' => true],
                            ['choice_text' => "Une augmentation obligatoire", 'is_correct' => false],
                            ['choice_text' => "La disparition de tous les taux", 'is_correct' => false],
                            ['choice_text' => "Un changement automatique du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Une amélioration de la qualité de crédit peut réduire la prime de risque demandée par le marché, donc resserrer le spread, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Un investisseur veut comparer le risque de deux obligations émises par des entreprises différentes. Quel élément est particulièrement pertinent en plus du rendement affiché ?",
                        'choices' => [
                            ['choice_text' => "La qualité de crédit des émetteurs", 'is_correct' => true],
                            ['choice_text' => "La couleur du certificat", 'is_correct' => false],
                            ['choice_text' => "Le nombre de salariés du courtier uniquement", 'is_correct' => false],
                            ['choice_text' => "Le pays de résidence de l'investisseur uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement ne doit pas être regardé isolément : la solvabilité et le profil de crédit de chaque émetteur sont essentiels à la comparaison.",
                    ],
                    [
                        'question' => "Une obligation d'entreprise et une obligation souveraine ont des échéances comparables, mais l'entreprise présente un risque de défaut supérieur. Quelle différence de rendement peut-on observer ?",
                        'choices' => [
                            ['choice_text' => "L'entreprise peut offrir un rendement supérieur", 'is_correct' => true],
                            ['choice_text' => "L'entreprise doit offrir un rendement inférieur", 'is_correct' => false],
                            ['choice_text' => "Les deux rendements doivent être identiques par définition", 'is_correct' => false],
                            ['choice_text' => "Aucun rendement n'est observable", 'is_correct' => false],
                        ],
                        'explanation' => "Un risque de crédit supérieur peut conduire les investisseurs à demander une rémunération supplémentaire, souvent visible dans le spread.",
                    ],
                    [
                        'question' => "Un spread de 80 points de base est équivalent à...",
                        'choices' => [
                            ['choice_text' => "0,08 %", 'is_correct' => false],
                            ['choice_text' => "0,80 %", 'is_correct' => true],
                            ['choice_text' => "8 %", 'is_correct' => false],
                            ['choice_text' => "80 %", 'is_correct' => false],
                        ],
                        'explanation' => "80 points de base = 80 / 100 = 0,80 point de pourcentage, soit 0,80 %.",
                    ],
                    [
                        'question' => "Pourquoi le rendement plus élevé d'une obligation risquée n'est-il pas un 'cadeau' gratuit pour l'investisseur ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il peut rémunérer un risque supplémentaire", 'is_correct' => true],
                            ['choice_text' => "Parce que les coupons ne sont jamais payés", 'is_correct' => false],
                            ['choice_text' => "Parce que le nominal est toujours nul", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une obligation risquée est une action", 'is_correct' => false],
                        ],
                        'explanation' => "Un rendement plus élevé est généralement lié à un niveau de risque plus élevé. La rémunération supplémentaire n'est donc pas indépendante du risque pris.",
                    ],
                    [
                        'question' => "Une agence de notation dégrade fortement un émetteur. Quelle réaction de marché est plausible, sans être garantie ?",
                        'choices' => [
                            ['choice_text' => "Le spread de crédit s'élargit et le prix peut baisser", 'is_correct' => true],
                            ['choice_text' => "Le spread devient forcément nul", 'is_correct' => false],
                            ['choice_text' => "Le prix monte automatiquement à 150 %", 'is_correct' => false],
                            ['choice_text' => "Le coupon contractuel double immédiatement", 'is_correct' => false],
                        ],
                        'explanation' => "Une dégradation peut accroître le risque perçu, ce qui peut élargir le spread et exercer une pression à la baisse sur le prix. Le mouvement exact dépend du marché et de l'ampleur de l'information déjà anticipée.",
                    ],
                    [
                        'question' => "Pour un portefeuille obligataire, une hausse générale des credit spreads signale généralement...",
                        'choices' => [
                            ['choice_text' => "une demande de rémunération plus forte pour le risque de crédit", 'is_correct' => true],
                            ['choice_text' => "une baisse certaine de tous les taux souverains", 'is_correct' => false],
                            ['choice_text' => "une disparition du risque de taux", 'is_correct' => false],
                            ['choice_text' => "une hausse automatique des coupons contractuels", 'is_correct' => false],
                        ],
                        'explanation' => "Un élargissement des spreads traduit généralement une exigence de rendement supplémentaire pour porter le risque de crédit.",
                    ],
                ],
            ],
            [
                'title' => "Obligations souveraines et obligations d’entreprise",
                'description' => "Comparer les grandes familles d'obligations sans perdre de vue le risque, le rendement et les objectifs de l'investisseur.",
                'duration' => 26,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "La différence la plus évidente entre une obligation souveraine et une obligation d'entreprise tient à...",
                        'choices' => [
                            ['choice_text' => "l'identité de l'émetteur", 'is_correct' => true],
                            ['choice_text' => "l'existence obligatoire d'un coupon", 'is_correct' => false],
                            ['choice_text' => "l'absence d'échéance pour les entreprises", 'is_correct' => false],
                            ['choice_text' => "l'interdiction de vendre les titres souverains", 'is_correct' => false],
                        ],
                        'explanation' => "Une obligation souveraine est émise par un État ou une entité publique selon le cas, tandis qu'une obligation d'entreprise est émise par une société.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise peut-elle offrir un rendement supérieur à celui d'un État de référence ?",
                        'choices' => [
                            ['choice_text' => "Elle peut présenter un risque de crédit plus élevé", 'is_correct' => true],
                            ['choice_text' => "Parce que ses obligations ont toujours un nominal plus faible", 'is_correct' => false],
                            ['choice_text' => "Parce que les États ne paient jamais de coupon", 'is_correct' => false],
                            ['choice_text' => "Parce que le rendement d'une entreprise est fixé par la loi", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché peut exiger une prime de risque pour une entreprise en fonction de sa solvabilité et de la perception de son risque de défaut.",
                    ],
                    [
                        'question' => "Un investisseur cherche à limiter le risque lié à un seul émetteur. La diversification entre plusieurs obligations peut aider à...",
                        'choices' => [
                            ['choice_text' => "réduire la concentration du risque", 'is_correct' => true],
                            ['choice_text' => "garantir qu'aucun titre ne perdra de valeur", 'is_correct' => false],
                            ['choice_text' => "supprimer les variations de taux", 'is_correct' => false],
                            ['choice_text' => "transformer les obligations en liquidités", 'is_correct' => false],
                        ],
                        'explanation' => "Diversifier plusieurs émetteurs réduit le risque spécifique lié à la concentration sur un seul débiteur, même si le risque de marché demeure.",
                    ],
                    [
                        'question' => "Une obligation d'entreprise affiche un rendement de 6 %. Une obligation souveraine comparable affiche 4 %. L'écart de 2 points ne signifie pas nécessairement que...",
                        'choices' => [
                            ['choice_text' => "l'obligation d'entreprise est toujours le meilleur investissement", 'is_correct' => true],
                            ['choice_text' => "le marché demande une rémunération supplémentaire", 'is_correct' => false],
                            ['choice_text' => "le risque de crédit peut expliquer une partie de l'écart", 'is_correct' => false],
                            ['choice_text' => "les titres ont exactement le même profil de risque", 'is_correct' => false],
                        ],
                        'explanation' => "Un rendement supérieur ne suffit pas à conclure qu'un investissement est meilleur. Il faut rapprocher le rendement du niveau de risque, de la maturité, de la liquidité et des autres caractéristiques.",
                    ],
                    [
                        'question' => "Pour comparer correctement deux obligations, un analyste devrait notamment regarder...",
                        'choices' => [
                            ['choice_text' => "échéance, coupon, prix, rendement et risque", 'is_correct' => true],
                            ['choice_text' => "uniquement la couleur du graphique", 'is_correct' => false],
                            ['choice_text' => "uniquement le nominal", 'is_correct' => false],
                            ['choice_text' => "uniquement le nom de l'émetteur", 'is_correct' => false],
                        ],
                        'explanation' => "La comparaison doit tenir compte de plusieurs caractéristiques qui influencent le prix et le rendement, et pas d'un seul indicateur.",
                    ],
                    [
                        'question' => "Une obligation souveraine considérée comme très liquide peut avoir un rendement relativement faible parce que...",
                        'choices' => [
                            ['choice_text' => "les investisseurs peuvent accepter une prime de liquidité négative en échange de liquidité et de caractéristiques de risque", 'is_correct' => true],
                            ['choice_text' => "les obligations liquides ne versent jamais de coupon", 'is_correct' => false],
                            ['choice_text' => "son nominal est toujours inférieur à 100 €", 'is_correct' => false],
                            ['choice_text' => "son prix est forcément sous le pair", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité est un facteur de valorisation. Un titre très liquide peut être recherché par les investisseurs, ce qui soutient son prix et peut réduire son rendement relatif.",
                    ],
                    [
                        'question' => "Une entreprise avec une situation financière fragile se finance sur le marché obligataire. Quelle conséquence est plausible ?",
                        'choices' => [
                            ['choice_text' => "Elle peut devoir offrir un rendement plus élevé", 'is_correct' => true],
                            ['choice_text' => "Elle peut toujours emprunter au même taux qu'un émetteur sans risque", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut juridiquement jamais émettre d'obligation", 'is_correct' => false],
                            ['choice_text' => "Elle doit nécessairement émettre uniquement des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Pour attirer les investisseurs malgré un risque de crédit supérieur, l'entreprise peut devoir proposer une rémunération plus importante.",
                    ],
                    [
                        'question' => "Un investisseur veut avant tout disposer d'un flux contractuel régulier plutôt que de devenir actionnaire. Quel instrument correspond à cette logique ?",
                        'choices' => [
                            ['choice_text' => "Une obligation à coupon", 'is_correct' => true],
                            ['choice_text' => "Une action ordinaire", 'is_correct' => false],
                            ['choice_text' => "Une option d'achat sur une action", 'is_correct' => false],
                            ['choice_text' => "Un certificat de parts sociales uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Une obligation à coupon prévoit des paiements d'intérêts selon des conditions contractuelles. Une action ordinaire représente un droit de propriété et peut verser des dividendes, qui ne sont pas contractuellement identiques à un coupon obligataire.",
                    ],
                    [
                        'question' => "Quel risque reste pertinent même pour une obligation souveraine ?",
                        'choices' => [
                            ['choice_text' => "Le risque de taux", 'is_correct' => true],
                            ['choice_text' => "Aucun risque financier", 'is_correct' => false],
                            ['choice_text' => "Uniquement le risque de change dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Le risque de coupon aléatoire", 'is_correct' => false],
                        ],
                        'explanation' => "Même lorsqu'un titre est perçu comme présentant un faible risque de crédit, son prix de marché peut varier lorsque les taux changent.",
                    ],
                    [
                        'question' => "Une obligation d'entreprise se négocie avec un spread élevé. Avant de l'acheter, il est raisonnable de se demander...",
                        'choices' => [
                            ['choice_text' => "quelle rémunération supplémentaire compense quel niveau de risque", 'is_correct' => true],
                            ['choice_text' => "pourquoi le coupon devient automatiquement variable", 'is_correct' => false],
                            ['choice_text' => "si le nominal disparaît", 'is_correct' => false],
                            ['choice_text' => "si la maturité n'a plus d'importance", 'is_correct' => false],
                        ],
                        'explanation' => "Un spread important peut être attractif ou non selon le risque qu'il rémunère. L'analyste doit donc comprendre la source de cette prime.",
                    ],
                    [
                        'question' => "Une hausse des taux peut affecter une obligation souveraine et une obligation d'entreprise de deux façons différentes mais simultanées. Lesquelles ?",
                        'choices' => [
                            ['choice_text' => "par le risque de taux et, pour l'entreprise, éventuellement par l'évolution du spread de crédit", 'is_correct' => true],
                            ['choice_text' => "uniquement par le dividende", 'is_correct' => false],
                            ['choice_text' => "uniquement par le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "par un changement automatique du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Le prix d'une obligation d'entreprise peut réagir au niveau général des taux mais aussi à son spread de crédit. Les deux facteurs peuvent évoluer en même temps.",
                    ],
                ],
            ],
            [
                'title' => "Coupon, fréquence et calculs obligataires",
                'description' => "Des calculs courts pour manipuler correctement coupon, nominal, fréquence de paiement et prix.",
                'duration' => 29,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une obligation de 2 000 € affiche un taux de coupon annuel de 4 %. Quel est son coupon annuel ?",
                        'choices' => [
                            ['choice_text' => "40 €", 'is_correct' => false],
                            ['choice_text' => "80 €", 'is_correct' => true],
                            ['choice_text' => "100 €", 'is_correct' => false],
                            ['choice_text' => "200 €", 'is_correct' => false],
                        ],
                        'explanation' => "2 000 × 4 % = 80 €.",
                    ],
                    [
                        'question' => "Une obligation de 1 500 € verse un coupon annuel de 6 %. Si le paiement est semestriel, chaque coupon est de...",
                        'choices' => [
                            ['choice_text' => "45 €", 'is_correct' => true],
                            ['choice_text' => "90 €", 'is_correct' => false],
                            ['choice_text' => "30 €", 'is_correct' => false],
                            ['choice_text' => "15 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le coupon annuel est 1 500 × 6 % = 90 €. Avec deux paiements égaux par an, chaque paiement est de 45 €.",
                    ],
                    [
                        'question' => "Une obligation verse 25 € tous les six mois sur un nominal de 1 000 €. Son taux de coupon annuel est de...",
                        'choices' => [
                            ['choice_text' => "2,5 %", 'is_correct' => false],
                            ['choice_text' => "5 %", 'is_correct' => true],
                            ['choice_text' => "10 %", 'is_correct' => false],
                            ['choice_text' => "25 %", 'is_correct' => false],
                        ],
                        'explanation' => "Deux coupons de 25 € donnent 50 € par an. 50 / 1 000 = 5 %.",
                    ],
                    [
                        'question' => "Une obligation de 5 000 € à coupon annuel de 3,2 % verse chaque année...",
                        'choices' => [
                            ['choice_text' => "16 €", 'is_correct' => false],
                            ['choice_text' => "160 €", 'is_correct' => true],
                            ['choice_text' => "320 €", 'is_correct' => false],
                            ['choice_text' => "1 600 €", 'is_correct' => false],
                        ],
                        'explanation' => "5 000 × 3,2 % = 160 €.",
                    ],
                    [
                        'question' => "Une obligation de nominal 1 000 € verse 30 € par trimestre. Quel est le coupon annuel en euros ?",
                        'choices' => [
                            ['choice_text' => "60 €", 'is_correct' => false],
                            ['choice_text' => "90 €", 'is_correct' => false],
                            ['choice_text' => "120 €", 'is_correct' => true],
                            ['choice_text' => "360 €", 'is_correct' => false],
                        ],
                        'explanation' => "Il y a quatre paiements de 30 € : 4 × 30 = 120 € par an.",
                    ],
                    [
                        'question' => "Une obligation de 1 000 € verse 60 € par an et est détenue pendant deux années complètes. Combien de coupons sont reçus au total, hors réinvestissement ?",
                        'choices' => [
                            ['choice_text' => "60 €", 'is_correct' => false],
                            ['choice_text' => "120 €", 'is_correct' => true],
                            ['choice_text' => "1 060 €", 'is_correct' => false],
                            ['choice_text' => "2 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Deux années × 60 € = 120 € de coupons, en supposant que les paiements contractuels sont effectués normalement.",
                    ],
                    [
                        'question' => "Une obligation à 8 % sur 1 000 € verse 80 € par an. Si son prix passe de 1 000 € à 800 €, le rendement courant devient...",
                        'choices' => [
                            ['choice_text' => "8 %", 'is_correct' => false],
                            ['choice_text' => "10 %", 'is_correct' => true],
                            ['choice_text' => "6,4 %", 'is_correct' => false],
                            ['choice_text' => "16 %", 'is_correct' => false],
                        ],
                        'explanation' => "80 / 800 = 10 %. Le coupon contractuel reste 80 €, mais le rendement courant rapporté au prix augmente.",
                    ],
                    [
                        'question' => "Une obligation verse 45 € tous les six mois. Quel est le total des coupons reçus sur trois ans ?",
                        'choices' => [
                            ['choice_text' => "135 €", 'is_correct' => false],
                            ['choice_text' => "180 €", 'is_correct' => false],
                            ['choice_text' => "270 €", 'is_correct' => true],
                            ['choice_text' => "540 €", 'is_correct' => false],
                        ],
                        'explanation' => "Trois ans correspondent à six semestres. 6 × 45 € = 270 €.",
                    ],
                    [
                        'question' => "Une obligation de 1 000 € verse 4 % par an et son prix est de 1 020 €. Son rendement courant est le plus proche de...",
                        'choices' => [
                            ['choice_text' => "3,92 %", 'is_correct' => true],
                            ['choice_text' => "4,00 %", 'is_correct' => false],
                            ['choice_text' => "4,08 %", 'is_correct' => false],
                            ['choice_text' => "4,20 %", 'is_correct' => false],
                        ],
                        'explanation' => "40 / 1 020 ≈ 3,92 %. Le 4 % est le taux de coupon sur le nominal, pas le rendement courant au prix de 1 020 €.",
                    ],
                    [
                        'question' => "Un investisseur reçoit 35 € chaque trimestre pendant un an. Quel est le total annuel des coupons ?",
                        'choices' => [
                            ['choice_text' => "70 €", 'is_correct' => false],
                            ['choice_text' => "105 €", 'is_correct' => false],
                            ['choice_text' => "140 €", 'is_correct' => true],
                            ['choice_text' => "420 €", 'is_correct' => false],
                        ],
                        'explanation' => "Quatre paiements de 35 € donnent 140 € sur l'année.",
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
