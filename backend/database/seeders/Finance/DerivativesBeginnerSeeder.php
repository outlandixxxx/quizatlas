<?php

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

        $quizzes = [
            [
                'title' => "Premiers pas avec les contrats à terme",
                'description' => "Découvrir le rôle des forwards et des futures à travers des situations simples de couverture et de prix.",
                'duration' => 24,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une entreprise marocaine devra payer 50 000 USD dans trois mois. Quel est l'intérêt principal d'un forward de change dans ce cas ?",
                        'choices' => [
                            ['choice_text' => "Fixer dès aujourd'hui le taux auquel les dollars seront achetés", 'is_correct' => true],
                            ['choice_text' => "Garantir que le dollar baissera dans trois mois", 'is_correct' => false],
                            ['choice_text' => "Transformer automatiquement la dette en actions", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute obligation de paiement", 'is_correct' => false],
                        ],
                        'explanation' => "Le forward permet de convenir aujourd'hui d'un taux de change pour une transaction future. Il réduit donc l'incertitude sur le montant en dirhams à payer.",
                    ],
                    [
                        'question' => "Un forward est négocié directement entre deux parties. Lequel décrit le mieux sa particularité par rapport à un future coté en bourse ?",
                        'choices' => [
                            ['choice_text' => "Le forward est généralement un contrat de gré à gré", 'is_correct' => true],
                            ['choice_text' => "Le forward est toujours sans risque de contrepartie", 'is_correct' => false],
                            ['choice_text' => "Le future ne prévoit jamais de date d'échéance", 'is_correct' => false],
                            ['choice_text' => "Le forward est forcément plus liquide", 'is_correct' => false],
                        ],
                        'explanation' => "Un forward est habituellement négocié de gré à gré entre deux contreparties. Il est donc plus personnalisable, mais le risque de contrepartie est aussi un élément à considérer.",
                    ],
                    [
                        'question' => "Une boulangerie industrielle sait qu'elle achètera 100 tonnes de blé dans deux mois et craint une hausse du prix. Quel objectif correspond à une couverture avec un future sur le blé ?",
                        'choices' => [
                            ['choice_text' => "Se protéger contre une hausse du prix d'achat", 'is_correct' => true],
                            ['choice_text' => "Profiter obligatoirement d'une baisse du blé", 'is_correct' => false],
                            ['choice_text' => "Éviter tout paiement au fournisseur", 'is_correct' => false],
                            ['choice_text' => "Obtenir gratuitement le blé à l'échéance", 'is_correct' => false],
                        ],
                        'explanation' => "La boulangerie est exposée à une hausse future de son coût. Une position de couverture sur futures peut compenser une partie de cette hausse.",
                    ],
                    [
                        'question' => "Le sous-jacent d'un contrat derivative est...",
                        'choices' => [
                            ['choice_text' => "L'actif, le taux ou l'indice auquel le contrat est lié", 'is_correct' => true],
                            ['choice_text' => "Le courtier qui exécute l'ordre", 'is_correct' => false],
                            ['choice_text' => "La commission versée à la banque", 'is_correct' => false],
                            ['choice_text' => "La date de règlement", 'is_correct' => false],
                        ],
                        'explanation' => "Le sous-jacent est ce dont dépend la valeur du dérivé : par exemple une action, une devise, un taux d'intérêt ou une matière première.",
                    ],
                    [
                        'question' => "Une société signe un forward pour acheter 1 million d'euros à 11,20 MAD pour 1 EUR à l'échéance. Si le marché vaut 11,50 MAD à cette date, quel est l'avantage économique du contrat pour l'acheteur ?",
                        'choices' => [
                            ['choice_text' => "Il achète à 11,20 au lieu de 11,50", 'is_correct' => true],
                            ['choice_text' => "Il revend automatiquement les euros à 11,50", 'is_correct' => false],
                            ['choice_text' => "Il ne paie plus les euros", 'is_correct' => false],
                            ['choice_text' => "Il transforme le contrat en option gratuite", 'is_correct' => false],
                        ],
                        'explanation' => "Le forward oblige l'acheteur à traiter à 11,20 selon le contrat. Si le marché est à 11,50, le contrat est économiquement favorable à l'acheteur.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise peut-elle préférer un forward personnalisé à un future standardisé ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle peut adapter le montant et la date à son besoin", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un forward n'a jamais de risque de contrepartie", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un forward est toujours coté sur une bourse", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il garantit un gain même sans exposition", 'is_correct' => false],
                        ],
                        'explanation' => "Le gré à gré permet souvent d'adapter le montant, l'échéance ou les modalités aux flux réels de l'entreprise.",
                    ],
                    [
                        'question' => "Une entreprise prévoit une entrée de 300 000 USD dans six mois. Elle craint que le dollar baisse face au dirham avant l'encaissement. Que cherche-t-elle à protéger ?",
                        'choices' => [
                            ['choice_text' => "La valeur en dirhams du futur encaissement", 'is_correct' => true],
                            ['choice_text' => "Le nombre de dollars à recevoir du client", 'is_correct' => false],
                            ['choice_text' => "Le bénéfice du client américain", 'is_correct' => false],
                            ['choice_text' => "Le nombre de salariés de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "Si le dollar baisse, les 300 000 USD valent moins en dirhams. La couverture vise donc la valeur en monnaie domestique du futur encaissement.",
                    ],
                    [
                        'question' => "Un future est dit standardisé parce que...",
                        'choices' => [
                            ['choice_text' => "Ses caractéristiques principales sont fixées par le marché organisé", 'is_correct' => true],
                            ['choice_text' => "Chaque acheteur peut modifier librement le nominal après la transaction", 'is_correct' => false],
                            ['choice_text' => "Il est toujours négocié par téléphone sans intermédiaire", 'is_correct' => false],
                            ['choice_text' => "Son prix ne change jamais pendant la journée", 'is_correct' => false],
                        ],
                        'explanation' => "Les futures sont standardisés : taille du contrat, échéances, modalités de règlement et autres caractéristiques sont définies par le marché.",
                    ],
                    [
                        'question' => "Quel risque est particulièrement lié à un contrat derivative de gré à gré lorsqu'une contrepartie devient incapable de payer ?",
                        'choices' => [
                            ['choice_text' => "Le risque de contrepartie", 'is_correct' => true],
                            ['choice_text' => "Le risque de coupon", 'is_correct' => false],
                            ['choice_text' => "Le risque d'inflation salariale", 'is_correct' => false],
                            ['choice_text' => "Le risque de dilution des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de contrepartie correspond à la possibilité que l'autre partie n'honore pas ses obligations contractuelles.",
                    ],
                    [
                        'question' => "Un investisseur utilise un dérivé uniquement pour réduire le risque d'une position qu'il détient déjà. On parle principalement de...",
                        'choices' => [
                            ['choice_text' => "couverture (hedging)", 'is_correct' => true],
                            ['choice_text' => "spéculation", 'is_correct' => false],
                            ['choice_text' => "fusion-acquisition", 'is_correct' => false],
                            ['choice_text' => "securitisation", 'is_correct' => false],
                        ],
                        'explanation' => "Le hedging consiste à prendre une position sur un dérivé pour compenser tout ou partie d'un risque lié à une autre position.",
                    ],
                ],
            ],
            [
                'title' => "Comprendre les options sans se perdre dans les formules",
                'description' => "Identifier le fonctionnement d'un call et d'un put et comprendre le rôle de la prime, du strike et de l'échéance.",
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une option call donne à son détenteur...",
                        'choices' => [
                            ['choice_text' => "Le droit, mais pas l'obligation, d'acheter le sous-jacent au strike", 'is_correct' => true],
                            ['choice_text' => "L'obligation d'acheter le sous-jacent au strike", 'is_correct' => false],
                            ['choice_text' => "Le droit de vendre toujours au prix du marché", 'is_correct' => false],
                            ['choice_text' => "Le droit de recevoir les dividendes sans détenir l'actif", 'is_correct' => false],
                        ],
                        'explanation' => "Un call donne à l'acheteur le droit d'acheter le sous-jacent au prix d'exercice (strike), sans l'obliger à exercer.",
                    ],
                    [
                        'question' => "Une option put donne à son détenteur...",
                        'choices' => [
                            ['choice_text' => "Le droit, mais pas l'obligation, de vendre au strike", 'is_correct' => true],
                            ['choice_text' => "L'obligation d'acheter au strike", 'is_correct' => false],
                            ['choice_text' => "Le droit de modifier le strike après l'échéance", 'is_correct' => false],
                            ['choice_text' => "Le droit de supprimer la prime", 'is_correct' => false],
                        ],
                        'explanation' => "Le put donne le droit de vendre le sous-jacent au strike. Cette caractéristique peut être utile pour se protéger contre une baisse.",
                    ],
                    [
                        'question' => "Pour acheter une option, l'investisseur paie généralement...",
                        'choices' => [
                            ['choice_text' => "Une prime", 'is_correct' => true],
                            ['choice_text' => "Un coupon", 'is_correct' => false],
                            ['choice_text' => "Un dividende garanti", 'is_correct' => false],
                            ['choice_text' => "Un dépôt de capital égal au nominal du sous-jacent", 'is_correct' => false],
                        ],
                        'explanation' => "La prime est le prix payé pour le droit conféré par l'option.",
                    ],
                    [
                        'question' => "Une action vaut 80 €. Un call a un strike de 75 €. À l'échéance, quelle est sa valeur intrinsèque avant prise en compte de la prime ?",
                        'choices' => [
                            ['choice_text' => "5 €", 'is_correct' => true],
                            ['choice_text' => "0 €", 'is_correct' => false],
                            ['choice_text' => "75 €", 'is_correct' => false],
                            ['choice_text' => "155 €", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un call, la valeur intrinsèque à l'échéance est max(S - K, 0). Ici, 80 - 75 = 5 €.",
                    ],
                    [
                        'question' => "Une action vaut 60 €. Un put a un strike de 70 €. À l'échéance, quelle est sa valeur intrinsèque ?",
                        'choices' => [
                            ['choice_text' => "10 €", 'is_correct' => true],
                            ['choice_text' => "0 €", 'is_correct' => false],
                            ['choice_text' => "60 €", 'is_correct' => false],
                            ['choice_text' => "130 €", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un put, la valeur intrinsèque à l'échéance est max(K - S, 0). Ici, 70 - 60 = 10 €.",
                    ],
                    [
                        'question' => "Une entreprise possède une action volatile et achète un put de protection. Quel problème cherche-t-elle principalement à limiter ?",
                        'choices' => [
                            ['choice_text' => "La perte liée à une forte baisse du cours", 'is_correct' => true],
                            ['choice_text' => "Le risque que l'action verse trop de dividendes", 'is_correct' => false],
                            ['choice_text' => "Le risque que le prix augmente trop vite", 'is_correct' => false],
                            ['choice_text' => "Le risque d'augmentation du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "Le put donne le droit de vendre au strike. Il peut donc servir de plancher contre une forte baisse du cours.",
                    ],
                    [
                        'question' => "Pourquoi l'acheteur d'une option peut-il décider de ne pas exercer son droit ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'exercice est facultatif et peut ne pas être économiquement intéressant", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une option doit toujours être exercée", 'is_correct' => false],
                            ['choice_text' => "Parce que le vendeur choisit à sa place", 'is_correct' => false],
                            ['choice_text' => "Parce que la prime est remboursée automatiquement", 'is_correct' => false],
                        ],
                        'explanation' => "L'option est un droit, pas une obligation. Si le marché est plus favorable que le strike, l'acheteur peut laisser l'option expirer.",
                    ],
                    [
                        'question' => "Un call a un strike de 100 €. À l'échéance, l'action vaut 92 €. Pour le détenteur du call, quelle est la décision généralement rationnelle ?",
                        'choices' => [
                            ['choice_text' => "Ne pas exercer le call", 'is_correct' => true],
                            ['choice_text' => "Acheter l'action à 100 € via le call", 'is_correct' => false],
                            ['choice_text' => "Exercer puis revendre obligatoirement à 92 €", 'is_correct' => false],
                            ['choice_text' => "Recevoir automatiquement 100 €", 'is_correct' => false],
                        ],
                        'explanation' => "Acheter à 100 € alors que l'action vaut 92 € serait défavorable. Le détenteur peut simplement laisser le call expirer.",
                    ],
                    [
                        'question' => "À caractéristiques égales, une option ayant davantage de temps avant son échéance tend à avoir...",
                        'choices' => [
                            ['choice_text' => "Une valeur temporelle plus élevée", 'is_correct' => true],
                            ['choice_text' => "Une valeur temporelle toujours nulle", 'is_correct' => false],
                            ['choice_text' => "Un strike automatiquement plus élevé", 'is_correct' => false],
                            ['choice_text' => "Une prime automatiquement égale à zéro", 'is_correct' => false],
                        ],
                        'explanation' => "Plus de temps laisse davantage de possibilités au sous-jacent d'évoluer en faveur du détenteur, ce qui tend à augmenter la valeur temporelle.",
                    ],
                    [
                        'question' => "Le vendeur d'une option reçoit généralement...",
                        'choices' => [
                            ['choice_text' => "La prime payée par l'acheteur", 'is_correct' => true],
                            ['choice_text' => "Le nominal de l'action", 'is_correct' => false],
                            ['choice_text' => "Un dividende garanti", 'is_correct' => false],
                            ['choice_text' => "Le gain maximal de l'acheteur à l'avance", 'is_correct' => false],
                        ],
                        'explanation' => "En vendant l'option, le vendeur encaisse la prime. En contrepartie, il assume les obligations prévues par le contrat.",
                    ],
                ],
            ],
            [
                'title' => "Situations simples autour des calls et des puts",
                'description' => "S'entraîner à raisonner sur les gains, les pertes et les décisions d'exercice dans des cas concrets.",
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un call sur une action a un strike de 50 € et une prime de 3 €. À l'échéance, l'action vaut 58 €. Quel est le gain net de l'acheteur, avant frais, s'il exerce ?",
                        'choices' => [
                            ['choice_text' => "5 €", 'is_correct' => true],
                            ['choice_text' => "8 €", 'is_correct' => false],
                            ['choice_text' => "3 €", 'is_correct' => false],
                            ['choice_text' => "11 €", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur intrinsèque est 58 - 50 = 8 €. Après paiement de la prime de 3 €, le gain net est 5 €.",
                    ],
                    [
                        'question' => "Un put a un strike de 40 € et une prime de 2 €. À l'échéance, l'action vaut 35 €. Quel est le résultat net de l'acheteur du put ?",
                        'choices' => [
                            ['choice_text' => "3 €", 'is_correct' => true],
                            ['choice_text' => "5 €", 'is_correct' => false],
                            ['choice_text' => "2 €", 'is_correct' => false],
                            ['choice_text' => "7 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le put vaut 40 - 35 = 5 € à l'échéance. Après une prime de 2 €, le gain net est 3 €.",
                    ],
                    [
                        'question' => "Un call a un strike de 120 € et une prime de 4 €. À quel niveau du sous-jacent l'acheteur commence-t-il à être à l'équilibre à l'échéance, avant frais ?",
                        'choices' => [
                            ['choice_text' => "124 €", 'is_correct' => true],
                            ['choice_text' => "120 €", 'is_correct' => false],
                            ['choice_text' => "116 €", 'is_correct' => false],
                            ['choice_text' => "128 €", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un call acheté, le seuil d'équilibre à l'échéance est strike + prime, soit 120 + 4 = 124 €.",
                    ],
                    [
                        'question' => "Un put a un strike de 90 € et une prime de 3 €. Quel est son seuil d'équilibre à l'échéance ?",
                        'choices' => [
                            ['choice_text' => "87 €", 'is_correct' => true],
                            ['choice_text' => "93 €", 'is_correct' => false],
                            ['choice_text' => "90 €", 'is_correct' => false],
                            ['choice_text' => "84 €", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un put acheté, le seuil d'équilibre est strike - prime, soit 90 - 3 = 87 €.",
                    ],
                    [
                        'question' => "Un investisseur achète un call parce qu'il pense que l'action va fortement progresser. Quel profil de scénario correspond à son idée ?",
                        'choices' => [
                            ['choice_text' => "Hausse du sous-jacent au-delà du strike et de la prime", 'is_correct' => true],
                            ['choice_text' => "Baisse certaine du sous-jacent", 'is_correct' => false],
                            ['choice_text' => "Stabilité parfaite du cours", 'is_correct' => false],
                            ['choice_text' => "Hausse des dividendes uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le call devient intéressant pour l'acheteur lorsque la hausse du sous-jacent compense le strike et la prime payée.",
                    ],
                    [
                        'question' => "Une PME craint une hausse du prix du carburant et utilise des options d'achat sur un sous-jacent lié à cette dépense. Pourquoi peut-elle apprécier cette solution par rapport à un contrat à terme ferme ?",
                        'choices' => [
                            ['choice_text' => "Elle peut bénéficier d'une baisse des prix tout en conservant une protection contre la hausse", 'is_correct' => true],
                            ['choice_text' => "Elle est obligée d'acheter quel que soit le prix du marché", 'is_correct' => false],
                            ['choice_text' => "La prime lui est toujours remboursée", 'is_correct' => false],
                            ['choice_text' => "Elle supprime toute dépense liée au carburant", 'is_correct' => false],
                        ],
                        'explanation' => "L'option procure une protection tout en laissant la possibilité de ne pas exercer si le marché évolue favorablement. Cette flexibilité a un coût : la prime.",
                    ],
                    [
                        'question' => "Une action vaut 105 €. Un put de strike 110 € est déjà dans la monnaie. Que signifie cette situation ?",
                        'choices' => [
                            ['choice_text' => "Le détenteur pourrait vendre à 110 € alors que le marché vaut 105 €", 'is_correct' => true],
                            ['choice_text' => "Le détenteur doit acheter à 110 €", 'is_correct' => false],
                            ['choice_text' => "L'option est forcément sans valeur", 'is_correct' => false],
                            ['choice_text' => "Le strike devient 105 €", 'is_correct' => false],
                        ],
                        'explanation' => "Un put est dans la monnaie lorsque le cours du sous-jacent est inférieur au strike. Ici, vendre à 110 € alors que le marché est à 105 € a une valeur intrinsèque.",
                    ],
                    [
                        'question' => "Un call et un put portent sur la même action avec le même strike et la même échéance. Lequel est directement avantagé par une forte hausse du cours ?",
                        'choices' => [
                            ['choice_text' => "Le call", 'is_correct' => true],
                            ['choice_text' => "Le put", 'is_correct' => false],
                            ['choice_text' => "Les deux exactement de la même façon", 'is_correct' => false],
                            ['choice_text' => "Aucun des deux", 'is_correct' => false],
                        ],
                        'explanation' => "Une hausse du sous-jacent augmente, toutes choses égales par ailleurs, la valeur d'un call et tend à réduire celle d'un put.",
                    ],
                    [
                        'question' => "Le prix d'exercice d'une option est généralement appelé...",
                        'choices' => [
                            ['choice_text' => "strike", 'is_correct' => true],
                            ['choice_text' => "spread", 'is_correct' => false],
                            ['choice_text' => "coupon", 'is_correct' => false],
                            ['choice_text' => "notional", 'is_correct' => false],
                        ],
                        'explanation' => "Le strike est le prix fixé dans le contrat auquel le détenteur peut acheter ou vendre le sous-jacent selon le type d'option.",
                    ],
                    [
                        'question' => "Un investisseur a acheté un call qui expire demain. Le marché est très calme. Pourquoi la valeur temporelle de l'option peut-elle être faible ?",
                        'choices' => [
                            ['choice_text' => "Il reste peu de temps pour qu'un mouvement favorable se produise", 'is_correct' => true],
                            ['choice_text' => "Le strike disparaît à la veille de l'échéance", 'is_correct' => false],
                            ['choice_text' => "La prime devient toujours négative", 'is_correct' => false],
                            ['choice_text' => "Le sous-jacent cesse automatiquement d'être coté", 'is_correct' => false],
                        ],
                        'explanation' => "Avec très peu de temps restant, la possibilité d'un mouvement favorable avant l'échéance diminue, ce qui réduit la valeur temporelle.",
                    ],
                ],
            ],
            [
                'title' => "Les swaps en situation",
                'description' => "Comprendre simplement les swaps de taux et de devises et savoir à quoi ils servent dans la gestion financière.",
                'duration' => 25,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une entreprise a une dette à taux variable et souhaite rendre ses charges d'intérêts plus prévisibles. Quel swap correspond le mieux à cet objectif ?",
                        'choices' => [
                            ['choice_text' => "Un interest rate swap permettant de payer fixe et recevoir variable", 'is_correct' => true],
                            ['choice_text' => "Un swap qui augmente automatiquement le principal", 'is_correct' => false],
                            ['choice_text' => "Un swap d'actions sans flux d'intérêts", 'is_correct' => false],
                            ['choice_text' => "Un put sur l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "En payant fixe et recevant variable sur un swap de taux, les flux variables de la dette peuvent être partiellement compensés, ce qui rend le coût net plus prévisible.",
                    ],
                    [
                        'question' => "Dans un interest rate swap classique, les contreparties échangent généralement...",
                        'choices' => [
                            ['choice_text' => "Des flux d'intérêts calculés sur un notionnel", 'is_correct' => true],
                            ['choice_text' => "La propriété des entreprises", 'is_correct' => false],
                            ['choice_text' => "Les actions de leurs salariés", 'is_correct' => false],
                            ['choice_text' => "Des marchandises physiques", 'is_correct' => false],
                        ],
                        'explanation' => "Un swap de taux porte sur des flux d'intérêts calculés sur un notionnel de référence. Le notionnel n'est généralement pas échangé.",
                    ],
                    [
                        'question' => "Pourquoi parle-t-on de notionnel dans un swap ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il sert de base au calcul des flux", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il est toujours payé en totalité chaque mois", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il représente la prime d'une option", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il détermine la note de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "Le notionnel sert de montant de référence pour calculer les intérêts échangés, sans être nécessairement versé d'une partie à l'autre.",
                    ],
                    [
                        'question' => "Une entreprise paie 6 % fixe sur un swap et reçoit 3 mois Euribor. Si son emprunt sous-jacent lui fait déjà payer Euribor, quel est l'effet recherché ?",
                        'choices' => [
                            ['choice_text' => "Transformer économiquement une partie du coût variable en coût fixe", 'is_correct' => true],
                            ['choice_text' => "Doubler automatiquement son exposition à Euribor", 'is_correct' => false],
                            ['choice_text' => "Supprimer la dette", 'is_correct' => false],
                            ['choice_text' => "Recevoir un dividende", 'is_correct' => false],
                        ],
                        'explanation' => "Le flux reçu sur le swap peut compenser le taux variable payé sur la dette, laissant essentiellement un coût fixe lié au swap.",
                    ],
                    [
                        'question' => "Un swap de devises peut être utile lorsqu'une entreprise...",
                        'choices' => [
                            ['choice_text' => "A des besoins de financement ou de paiements dans une autre monnaie", 'is_correct' => true],
                            ['choice_text' => "Veut supprimer toutes ses ventes internationales", 'is_correct' => false],
                            ['choice_text' => "Ne souhaite aucun flux futur", 'is_correct' => false],
                            ['choice_text' => "Veut transformer une obligation en action", 'is_correct' => false],
                        ],
                        'explanation' => "Le currency swap permet d'échanger des flux dans différentes monnaies et peut servir à gérer le financement ou l'exposition de change.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise qui utilise un swap doit-elle tout de même surveiller le risque de contrepartie ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'autre partie pourrait ne pas honorer ses paiements", 'is_correct' => true],
                            ['choice_text' => "Parce que le swap garantit un prix d'action", 'is_correct' => false],
                            ['choice_text' => "Parce que le swap supprime les marchés", 'is_correct' => false],
                            ['choice_text' => "Parce que le notionnel disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Comme pour d'autres contrats de gré à gré, la solidité financière de la contrepartie est importante car le contrat comporte des obligations futures.",
                    ],
                    [
                        'question' => "Une banque reçoit des intérêts variables sur des actifs et paie des intérêts fixes sur un swap. Si les taux montent, toutes choses égales par ailleurs, quel flux du swap augmente ?",
                        'choices' => [
                            ['choice_text' => "Le flux variable qu'elle reçoit", 'is_correct' => true],
                            ['choice_text' => "Le flux fixe qu'elle paie", 'is_correct' => false],
                            ['choice_text' => "Les deux de façon identique", 'is_correct' => false],
                            ['choice_text' => "Aucun flux", 'is_correct' => false],
                        ],
                        'explanation' => "Le paiement fixe du swap reste déterminé par le taux contractuel, tandis que le flux variable évolue avec le taux de référence.",
                    ],
                    [
                        'question' => "Une entreprise veut se protéger contre une hausse des taux mais souhaite aussi profiter d'une baisse des taux. Quel type d'instrument est généralement plus flexible qu'un swap ferme ?",
                        'choices' => [
                            ['choice_text' => "Une option de taux", 'is_correct' => true],
                            ['choice_text' => "Un dépôt à terme", 'is_correct' => false],
                            ['choice_text' => "Une action ordinaire", 'is_correct' => false],
                            ['choice_text' => "Une facture fournisseur", 'is_correct' => false],
                        ],
                        'explanation' => "Une option peut fournir un plafond ou une protection tout en laissant la possibilité de bénéficier d'une évolution favorable. Cette flexibilité est payée via une prime.",
                    ],
                    [
                        'question' => "Le terme « netting » dans un swap fait référence au fait que...",
                        'choices' => [
                            ['choice_text' => "Les flux opposés peuvent être compensés pour ne régler que le solde", 'is_correct' => true],
                            ['choice_text' => "Le notionnel est supprimé du contrat", 'is_correct' => false],
                            ['choice_text' => "Le taux fixe devient variable", 'is_correct' => false],
                            ['choice_text' => "Le contrat est annulé avant son début", 'is_correct' => false],
                        ],
                        'explanation' => "Dans de nombreux swaps, des flux opposés peuvent être compensés afin que seule la différence nette soit réglée.",
                    ],
                    [
                        'question' => "Une entreprise dispose d'un financement dans une devise mais génère ses revenus dans une autre. Pourquoi cela peut-il être un problème financier ?",
                        'choices' => [
                            ['choice_text' => "Les mouvements de change peuvent modifier la valeur des flux en monnaie domestique", 'is_correct' => true],
                            ['choice_text' => "Les devises ont toutes le même pouvoir d'achat", 'is_correct' => false],
                            ['choice_text' => "Le taux de change ne change jamais", 'is_correct' => false],
                            ['choice_text' => "Les revenus étrangers deviennent automatiquement des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Une différence entre la monnaie des revenus et celle des paiements crée une exposition de change qui peut affecter les marges et les flux de trésorerie.",
                    ],
                ],
            ],
            [
                'title' => "Hedging : choisir le bon réflexe",
                'description' => "Associer chaque risque de marché à une couverture adaptée sans transformer le cours en catalogue de définitions.",
                'duration' => 29,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un importateur doit payer 2 millions USD dans quatre mois. Il ne veut pas que le coût en dirhams augmente. Quelle couverture est la plus directe ?",
                        'choices' => [
                            ['choice_text' => "Acheter des dollars à terme via un forward ou un dispositif équivalent", 'is_correct' => true],
                            ['choice_text' => "Vendre des dollars à terme", 'is_correct' => false],
                            ['choice_text' => "Acheter une action de l'importateur", 'is_correct' => false],
                            ['choice_text' => "Prêter des dirhams sans montant défini", 'is_correct' => false],
                        ],
                        'explanation' => "L'importateur aura besoin de dollars. Fixer à l'avance le taux d'achat permet de maîtriser le montant en dirhams.",
                    ],
                    [
                        'question' => "Une entreprise détient une obligation à taux fixe et craint une hausse des taux qui ferait baisser sa valeur de marché. Quel risque cherche-t-elle à limiter ?",
                        'choices' => [
                            ['choice_text' => "Le risque de taux d'intérêt", 'is_correct' => true],
                            ['choice_text' => "Le risque de change uniquement", 'is_correct' => false],
                            ['choice_text' => "Le risque de fraude", 'is_correct' => false],
                            ['choice_text' => "Le risque de dilution", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une obligation à taux fixe, une hausse des taux de marché tend à faire baisser le prix. C'est une manifestation du risque de taux.",
                    ],
                    [
                        'question' => "Un producteur agricole doit vendre sa récolte dans six mois et souhaite se protéger contre une baisse du prix de la matière première. Quel type de position sur futures est cohérent ?",
                        'choices' => [
                            ['choice_text' => "Une position vendeuse (short) sur le future", 'is_correct' => true],
                            ['choice_text' => "Une position acheteuse (long) sur le future", 'is_correct' => false],
                            ['choice_text' => "Aucune position possible", 'is_correct' => false],
                            ['choice_text' => "Un achat d'option call sans autre objectif", 'is_correct' => false],
                        ],
                        'explanation' => "Le producteur bénéficiera d'un prix de vente plus élevé et souffrirait d'une baisse du marché. Une position short sur futures peut compenser cette baisse.",
                    ],
                    [
                        'question' => "Un consommateur industriel qui devra acheter du cuivre dans trois mois craint une hausse du prix. Pourquoi une position longue sur futures peut-elle servir de couverture ?",
                        'choices' => [
                            ['choice_text' => "Elle gagne généralement de la valeur lorsque le prix du cuivre monte, compensant le coût d'achat plus élevé", 'is_correct' => true],
                            ['choice_text' => "Elle fait baisser le prix physique du cuivre chez le fournisseur", 'is_correct' => false],
                            ['choice_text' => "Elle supprime les besoins de stock", 'is_correct' => false],
                            ['choice_text' => "Elle garantit une baisse du cuivre", 'is_correct' => false],
                        ],
                        'explanation' => "L'acheteur futur est exposé à une hausse du prix physique. Une position longue sur futures peut générer un gain lorsque le prix monte.",
                    ],
                    [
                        'question' => "Qu'appelle-t-on risque de base dans une couverture ?",
                        'choices' => [
                            ['choice_text' => "Le risque que le prix du dérivé et celui de l'exposition ne bougent pas exactement de la même façon", 'is_correct' => true],
                            ['choice_text' => "Le risque de perdre le notionnel à chaque échéance", 'is_correct' => false],
                            ['choice_text' => "Le risque qu'une option ne possède jamais de strike", 'is_correct' => false],
                            ['choice_text' => "Le risque de changer de devise", 'is_correct' => false],
                        ],
                        'explanation' => "La couverture n'est pas toujours parfaite. Le risque de base vient notamment d'un écart entre l'évolution du sous-jacent couvert et celle du dérivé utilisé.",
                    ],
                    [
                        'question' => "Une entreprise couvre 100 % d'un risque prévu à partir d'un volume qui pourrait finalement être inférieur. Quel problème peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "La couverture peut devenir excessive par rapport à l'exposition réelle", 'is_correct' => true],
                            ['choice_text' => "La couverture garantit automatiquement un gain", 'is_correct' => false],
                            ['choice_text' => "Le contrat devient sans échéance", 'is_correct' => false],
                            ['choice_text' => "Le sous-jacent disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Si le flux réel est inférieur aux prévisions, une couverture de taille fixe peut créer une position résiduelle ou inverse à l'exposition économique.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise peut-elle utiliser une option au lieu d'un forward pour couvrir un achat futur ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle souhaite une protection tout en gardant la possibilité de profiter d'un marché plus favorable", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une option n'a jamais de coût", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle ne nécessite aucun contrat", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle garantit toujours le meilleur taux du marché", 'is_correct' => false],
                        ],
                        'explanation' => "L'option donne un droit et non une obligation. La protection est donc plus flexible, mais elle implique généralement le paiement d'une prime.",
                    ],
                    [
                        'question' => "Une société a une facture de 500 000 GBP payable dans deux mois. Le principal danger pour elle, si la livre s'apprécie contre le dirham, est...",
                        'choices' => [
                            ['choice_text' => "Une hausse du coût de la facture en dirhams", 'is_correct' => true],
                            ['choice_text' => "Une baisse du nombre de livres à payer", 'is_correct' => false],
                            ['choice_text' => "Une augmentation automatique de son chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Une baisse du montant nominal de la facture", 'is_correct' => false],
                        ],
                        'explanation' => "La facture est fixe en GBP. Si la livre devient plus chère en dirhams, davantage de dirhams seront nécessaires pour payer le même montant.",
                    ],
                    [
                        'question' => "Le but d'une stratégie de hedging est généralement de...",
                        'choices' => [
                            ['choice_text' => "Réduire l'incertitude ou les pertes liées à un risque identifié", 'is_correct' => true],
                            ['choice_text' => "Maximiser le risque pris par l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Garantir un rendement positif dans tous les marchés", 'is_correct' => false],
                            ['choice_text' => "Remplacer tous les actifs financiers", 'is_correct' => false],
                        ],
                        'explanation' => "La couverture vise d'abord la maîtrise d'un risque identifiable. Elle peut réduire aussi bien certaines pertes que certains gains potentiels.",
                    ],
                    [
                        'question' => "Un responsable trésorerie couvre un risque pendant un an alors que le flux réel ne surviendra que pendant trois mois. Quelle question doit-il se poser en priorité ?",
                        'choices' => [
                            ['choice_text' => "Si la durée de la couverture correspond réellement à l'exposition", 'is_correct' => true],
                            ['choice_text' => "Si l'entreprise doit arrêter toute activité", 'is_correct' => false],
                            ['choice_text' => "Si les actions doivent être converties en obligations", 'is_correct' => false],
                            ['choice_text' => "Si le nominal doit être multiplié par dix", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne couverture doit être alignée autant que possible sur le montant et la période de l'exposition.",
                    ],
                ],
            ],
            [
                'title' => "Un peu d'arbitrage et de spéculation",
                'description' => "Faire la différence entre couvrir un risque, prendre une vue de marché et profiter d'une incohérence de prix.",
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un trader prend une position sur un future uniquement parce qu'il pense que le prix du sous-jacent va augmenter. Il s'agit principalement de...",
                        'choices' => [
                            ['choice_text' => "spéculation", 'is_correct' => true],
                            ['choice_text' => "couverture", 'is_correct' => false],
                            ['choice_text' => "amortissement", 'is_correct' => false],
                            ['choice_text' => "provisionnement", 'is_correct' => false],
                        ],
                        'explanation' => "La spéculation consiste à prendre volontairement un risque de marché pour chercher à profiter d'un mouvement attendu des prix.",
                    ],
                    [
                        'question' => "Une stratégie d'arbitrage cherche principalement à...",
                        'choices' => [
                            ['choice_text' => "Profiter d'une incohérence de prix entre des positions économiquement liées", 'is_correct' => true],
                            ['choice_text' => "Prendre le plus de risque possible", 'is_correct' => false],
                            ['choice_text' => "Éviter tout financement", 'is_correct' => false],
                            ['choice_text' => "Garantir un dividende", 'is_correct' => false],
                        ],
                        'explanation' => "L'arbitrage vise à exploiter une différence de prix incohérente entre actifs ou marchés liés, en construisant des positions compensatrices.",
                    ],
                    [
                        'question' => "Si un même actif est coté 100 € sur un marché et 103 € sur un autre, quel comportement d'arbitrage théorique est envisageable, sous hypothèse d'exécution simultanée et de coûts négligeables ?",
                        'choices' => [
                            ['choice_text' => "Acheter à 100 € et vendre à 103 €", 'is_correct' => true],
                            ['choice_text' => "Acheter à 103 € et vendre à 100 €", 'is_correct' => false],
                            ['choice_text' => "Acheter deux fois à 103 €", 'is_correct' => false],
                            ['choice_text' => "Ne rien faire car les prix sont différents", 'is_correct' => false],
                        ],
                        'explanation' => "L'arbitragiste chercherait à acheter sur le marché moins cher et vendre sur le marché plus cher, sous réserve que l'écart couvre les coûts et soit réellement exploitable.",
                    ],
                    [
                        'question' => "Pourquoi les possibilités d'arbitrage pur ont-elles tendance à être rapidement réduites sur des marchés liquides ?",
                        'choices' => [
                            ['choice_text' => "Parce que les arbitrageurs achètent le moins cher et vendent le plus cher, ce qui réduit l'écart", 'is_correct' => true],
                            ['choice_text' => "Parce que les contrats cessent d'exister", 'is_correct' => false],
                            ['choice_text' => "Parce que les banques fixent tous les prix à zéro", 'is_correct' => false],
                            ['choice_text' => "Parce que les marchés liquides interdisent les ventes", 'is_correct' => false],
                        ],
                        'explanation' => "Les opérations des arbitragistes rapprochent les prix entre marchés et contribuent à l'efficience des prix.",
                    ],
                    [
                        'question' => "Un investisseur n'a aucune exposition au pétrole mais achète un future pétrole en anticipant une hausse des cours. Quel est son risque principal ?",
                        'choices' => [
                            ['choice_text' => "Le prix du future peut évoluer dans le mauvais sens", 'is_correct' => true],
                            ['choice_text' => "Le pétrole deviendra forcément gratuit", 'is_correct' => false],
                            ['choice_text' => "Le contrat n'a pas de valeur marchande", 'is_correct' => false],
                            ['choice_text' => "Il recevra automatiquement du pétrole physique", 'is_correct' => false],
                        ],
                        'explanation' => "Sans exposition physique à compenser, sa position est une prise de risque directionnelle : une baisse du contrat peut générer une perte.",
                    ],
                    [
                        'question' => "Un arbitrage « sans risque » en théorie reste difficile à mettre en œuvre en pratique parce que...",
                        'choices' => [
                            ['choice_text' => "Les coûts de transaction, le financement et les contraintes d'exécution existent", 'is_correct' => true],
                            ['choice_text' => "Les prix sont toujours identiques", 'is_correct' => false],
                            ['choice_text' => "Il n'existe jamais de liquidité", 'is_correct' => false],
                            ['choice_text' => "Les dérivés n'ont pas de prix", 'is_correct' => false],
                        ],
                        'explanation' => "Même lorsqu'une incohérence semble visible, les frais, le financement, les délais d'exécution et le risque opérationnel peuvent éliminer le gain théorique.",
                    ],
                    [
                        'question' => "Une banque vend un forward à un client qui souhaite fixer son prix d'achat. Du point de vue du client, le forward est surtout utilisé pour...",
                        'choices' => [
                            ['choice_text' => "Réduire une incertitude de prix", 'is_correct' => true],
                            ['choice_text' => "Obtenir un gain garanti", 'is_correct' => false],
                            ['choice_text' => "Supprimer le coût de la matière première", 'is_correct' => false],
                            ['choice_text' => "Créer une nouvelle action", 'is_correct' => false],
                        ],
                        'explanation' => "Le forward fixe une condition future et réduit donc l'incertitude sur le prix auquel le client réalisera sa transaction.",
                    ],
                    [
                        'question' => "Un investisseur qui vend un call couvert possède déjà les actions sous-jacentes. Pourquoi cette stratégie peut-elle être qualifiée de « couverte » ?",
                        'choices' => [
                            ['choice_text' => "Les actions détenues peuvent servir à honorer une éventuelle livraison si le call est exercé", 'is_correct' => true],
                            ['choice_text' => "Parce que le call ne peut jamais être exercé", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il n'y a aucune perte possible", 'is_correct' => false],
                            ['choice_text' => "Parce que la prime est toujours égale au cours de l'action", 'is_correct' => false],
                        ],
                        'explanation' => "Le vendeur du call détient déjà le sous-jacent. Si l'acheteur exerce, il dispose des actions nécessaires, ce qui limite certains risques par rapport à un call nu.",
                    ],
                    [
                        'question' => "Quel énoncé distingue le mieux couverture et spéculation ?",
                        'choices' => [
                            ['choice_text' => "La couverture vise à réduire une exposition existante, la spéculation cherche à tirer parti d'une anticipation de marché", 'is_correct' => true],
                            ['choice_text' => "La couverture cherche toujours à gagner plus que le marché", 'is_correct' => false],
                            ['choice_text' => "La spéculation élimine tous les risques", 'is_correct' => false],
                            ['choice_text' => "Les deux termes désignent exactement la même démarche", 'is_correct' => false],
                        ],
                        'explanation' => "La différence tient surtout à l'objectif économique : réduire un risque existant pour le hedging, ou prendre un risque de marché pour rechercher un gain en spéculation.",
                    ],
                    [
                        'question' => "Un trader pense que la volatilité d'une action va fortement augmenter mais ne veut pas prendre une direction haussière ou baissière. Quel type de produit est naturellement lié à cette vue ?",
                        'choices' => [
                            ['choice_text' => "Une stratégie d'options sensible à la volatilité", 'is_correct' => true],
                            ['choice_text' => "Un dépôt courant", 'is_correct' => false],
                            ['choice_text' => "Une obligation zéro coupon sans option", 'is_correct' => false],
                            ['choice_text' => "Une créance fournisseur", 'is_correct' => false],
                        ],
                        'explanation' => "Certaines stratégies d'options permettent d'exprimer une vue sur la volatilité plutôt que sur la seule direction du cours.",
                    ],
                ],
            ],
            [
                'title' => "Marge, règlement et fonctionnement des futures",
                'description' => "Comprendre ce qui change lorsqu'un dérivé standardisé est négocié sur un marché organisé.",
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Sur un marché de futures, la marge initiale sert principalement à...",
                        'choices' => [
                            ['choice_text' => "Constituer un dépôt de garantie pour couvrir les variations de valeur", 'is_correct' => true],
                            ['choice_text' => "Payer l'intégralité du sous-jacent", 'is_correct' => false],
                            ['choice_text' => "Acheter une action du marché", 'is_correct' => false],
                            ['choice_text' => "Financer les dividendes futurs", 'is_correct' => false],
                        ],
                        'explanation' => "La marge initiale est un dépôt de garantie demandé aux participants. Elle ne représente pas le paiement intégral de la valeur notionnelle du contrat.",
                    ],
                    [
                        'question' => "Si la valeur d'une position future se dégrade fortement, l'investisseur peut être amené à...",
                        'choices' => [
                            ['choice_text' => "Verser des fonds supplémentaires pour restaurer le niveau de marge requis", 'is_correct' => true],
                            ['choice_text' => "Recevoir automatiquement un dividende", 'is_correct' => false],
                            ['choice_text' => "Supprimer le contrat sans condition", 'is_correct' => false],
                            ['choice_text' => "Doubler le nominal gratuitement", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les pertes réduisent la marge disponible sous certains seuils, un appel de marge peut exiger un apport de liquidités.",
                    ],
                    [
                        'question' => "Le mark-to-market d'un future signifie que...",
                        'choices' => [
                            ['choice_text' => "Les gains et pertes sont réévalués régulièrement au fil du marché", 'is_correct' => true],
                            ['choice_text' => "Le prix est figé jusqu'à l'échéance", 'is_correct' => false],
                            ['choice_text' => "Le contrat devient une action", 'is_correct' => false],
                            ['choice_text' => "La marge est supprimée", 'is_correct' => false],
                        ],
                        'explanation' => "Les futures font l'objet d'une réévaluation régulière, avec des règlements de gains et pertes selon les mouvements du marché.",
                    ],
                    [
                        'question' => "Un future est acheté à 2 000 points. Après la séance, il vaut 2 020 points. Pour une position longue, le mouvement est...",
                        'choices' => [
                            ['choice_text' => "Favorable", 'is_correct' => true],
                            ['choice_text' => "Défavorable", 'is_correct' => false],
                            ['choice_text' => "Sans effet", 'is_correct' => false],
                            ['choice_text' => "Impossible à déterminer", 'is_correct' => false],
                        ],
                        'explanation' => "Une position longue bénéficie d'une hausse du prix du contrat. Le passage de 2 000 à 2 020 points est donc favorable, sous réserve de la taille du contrat.",
                    ],
                    [
                        'question' => "Une position short sur futures perd généralement de la valeur lorsque...",
                        'choices' => [
                            ['choice_text' => "Le prix du future monte", 'is_correct' => true],
                            ['choice_text' => "Le prix du future baisse", 'is_correct' => false],
                            ['choice_text' => "La marge initiale est déposée", 'is_correct' => false],
                            ['choice_text' => "Le contrat approche de son échéance", 'is_correct' => false],
                        ],
                        'explanation' => "Une position vendeuse bénéficie d'une baisse du prix. Une hausse du future va donc à son encontre.",
                    ],
                    [
                        'question' => "Pourquoi les futures sont-ils souvent plus standardisés que les forwards ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'ils sont conçus pour être négociés sur un marché organisé", 'is_correct' => true],
                            ['choice_text' => "Parce qu'ils ne comportent aucune date", 'is_correct' => false],
                            ['choice_text' => "Parce que les contreparties n'existent pas", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils ne dépendent d'aucun sous-jacent", 'is_correct' => false],
                        ],
                        'explanation' => "La standardisation facilite la négociation, la compensation et la liquidité sur un marché organisé.",
                    ],
                    [
                        'question' => "Une entreprise utilise un future pour couvrir une exposition, mais le nombre de contrats ne correspond pas exactement à son besoin. Quel risque peut subsister ?",
                        'choices' => [
                            ['choice_text' => "Un risque de couverture imparfaite", 'is_correct' => true],
                            ['choice_text' => "Un risque que le contrat ait cinq strikes", 'is_correct' => false],
                            ['choice_text' => "Un risque de coupon fixe", 'is_correct' => false],
                            ['choice_text' => "Aucun risque puisque la couverture est toujours parfaite", 'is_correct' => false],
                        ],
                        'explanation' => "Une taille de contrat standardisée peut empêcher un ajustement exact au montant de l'exposition et laisser un risque résiduel.",
                    ],
                    [
                        'question' => "Dans un future standardisé, la chambre de compensation joue notamment un rôle de...",
                        'choices' => [
                            ['choice_text' => "Contrepartie centrale et de gestion du risque de crédit", 'is_correct' => true],
                            ['choice_text' => "Producteur du sous-jacent physique dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Garant d'une hausse du marché", 'is_correct' => false],
                            ['choice_text' => "Vendeur exclusif d'options", 'is_correct' => false],
                        ],
                        'explanation' => "La chambre de compensation s'interpose entre les parties et contribue à la gestion du risque de contrepartie du marché organisé.",
                    ],
                    [
                        'question' => "Une marge de variation est surtout liée à...",
                        'choices' => [
                            ['choice_text' => "L'évolution quotidienne de la valeur de la position", 'is_correct' => true],
                            ['choice_text' => "Au nominal de l'action sous-jacente", 'is_correct' => false],
                            ['choice_text' => "Au chiffre d'affaires annuel de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Au nombre de dividendes reçus", 'is_correct' => false],
                        ],
                        'explanation' => "La marge de variation reflète les gains et pertes résultant de l'évolution de la position et des appels de marge correspondants.",
                    ],
                    [
                        'question' => "Un investisseur sous-estime la taille d'un future et prend une position trop grande par rapport à son capital. Le principal danger est...",
                        'choices' => [
                            ['choice_text' => "L'effet de levier peut amplifier fortement les gains comme les pertes", 'is_correct' => true],
                            ['choice_text' => "Le contrat ne pourra plus être coté", 'is_correct' => false],
                            ['choice_text' => "Le strike sera modifié", 'is_correct' => false],
                            ['choice_text' => "La marge disparaîtra", 'is_correct' => false],
                        ],
                        'explanation' => "Les futures permettent de contrôler une exposition notionnelle importante avec un dépôt de marge plus faible que cette exposition, ce qui amplifie l'impact des mouvements de prix sur le capital engagé.",
                    ],
                ],
            ],
            [
                'title' => "Les risques propres aux dérivés",
                'description' => "Reconnaître les principaux risques avant de considérer un dérivé comme une simple technique de couverture.",
                'duration' => 30,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une entreprise utilise un derivative pour couvrir un risque, mais le sous-jacent couvert n'évolue pas exactement comme le dérivé. Quel risque apparaît ?",
                        'choices' => [
                            ['choice_text' => "Risque de base", 'is_correct' => true],
                            ['choice_text' => "Risque de coupon", 'is_correct' => false],
                            ['choice_text' => "Risque de dilution", 'is_correct' => false],
                            ['choice_text' => "Risque de dividende garanti", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de base correspond à l'écart entre le comportement de l'exposition et celui du dérivé utilisé pour la couvrir.",
                    ],
                    [
                        'question' => "Quel risque correspond au fait qu'une contrepartie OTC ne respecte pas ses engagements ?",
                        'choices' => [
                            ['choice_text' => "Risque de contrepartie", 'is_correct' => true],
                            ['choice_text' => "Risque de taux directeur uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque comptable uniquement", 'is_correct' => false],
                            ['choice_text' => "Risque de durée", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de contrepartie est la possibilité qu'une partie fasse défaut sur les paiements ou livraisons prévus au contrat.",
                    ],
                    [
                        'question' => "Pourquoi un dérivé peut-il générer une forte perte même avec une mise de départ relativement faible ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'effet de levier peut être important", 'is_correct' => true],
                            ['choice_text' => "Parce que le dérivé verse toujours un coupon", 'is_correct' => false],
                            ['choice_text' => "Parce que le sous-jacent n'a pas de prix", 'is_correct' => false],
                            ['choice_text' => "Parce que la prime est toujours récupérée", 'is_correct' => false],
                        ],
                        'explanation' => "Le capital initial engagé peut être inférieur à l'exposition notionnelle, ce qui augmente la sensibilité du résultat aux mouvements du marché.",
                    ],
                    [
                        'question' => "Une entreprise prend une couverture sur 10 millions de dollars alors que son besoin réel est de 6 millions. Que risque-t-elle de créer ?",
                        'choices' => [
                            ['choice_text' => "Une position résiduelle de 4 millions de dollars", 'is_correct' => true],
                            ['choice_text' => "Une disparition du risque de change", 'is_correct' => false],
                            ['choice_text' => "Une prime négative garantie", 'is_correct' => false],
                            ['choice_text' => "Une réduction automatique du nominal", 'is_correct' => false],
                        ],
                        'explanation' => "La partie de couverture qui dépasse l'exposition réelle peut laisser une position ouverte dans le sens opposé au besoin initial.",
                    ],
                    [
                        'question' => "Une option ne produit pas de valeur immédiate pour l'acheteur si elle reste hors de la monnaie à l'échéance. Quel élément a néanmoins été payé au départ ?",
                        'choices' => [
                            ['choice_text' => "La prime", 'is_correct' => true],
                            ['choice_text' => "Le coupon", 'is_correct' => false],
                            ['choice_text' => "Le dividende", 'is_correct' => false],
                            ['choice_text' => "La valeur nominale intégrale du sous-jacent", 'is_correct' => false],
                        ],
                        'explanation' => "L'acheteur paie la prime dès la mise en place. Cette prime est le coût de la protection ou du droit offert par l'option.",
                    ],
                    [
                        'question' => "Une entreprise décide de ne pas suivre quotidiennement ses positions en derivatives. Quel risque de gestion peut en découler ?",
                        'choices' => [
                            ['choice_text' => "Un risque de contrôle et de suivi des expositions", 'is_correct' => true],
                            ['choice_text' => "Une garantie automatique de profit", 'is_correct' => false],
                            ['choice_text' => "Une baisse mécanique du notionnel", 'is_correct' => false],
                            ['choice_text' => "La suppression des appels de marge", 'is_correct' => false],
                        ],
                        'explanation' => "Les dérivés peuvent évoluer rapidement. Un suivi insuffisant peut laisser des expositions importantes ou des appels de marge non anticipés.",
                    ],
                    [
                        'question' => "Quel énoncé sur le risque de marché d'un future est correct ?",
                        'choices' => [
                            ['choice_text' => "Une variation du prix du contrat peut générer des gains ou des pertes rapides", 'is_correct' => true],
                            ['choice_text' => "Le future a un prix fixe jusqu'à l'échéance", 'is_correct' => false],
                            ['choice_text' => "Le future supprime toute volatilité", 'is_correct' => false],
                            ['choice_text' => "Le future garantit le capital", 'is_correct' => false],
                        ],
                        'explanation' => "Le prix du future évolue avec le marché. Une position longue ou courte peut donc gagner ou perdre selon cette évolution.",
                    ],
                    [
                        'question' => "Une entreprise signe un derivative sans vérifier les conventions de règlement. Pourquoi cela peut-il poser problème ?",
                        'choices' => [
                            ['choice_text' => "Les modalités de règlement influencent les flux, les dates et parfois les besoins de liquidité", 'is_correct' => true],
                            ['choice_text' => "Le sous-jacent disparaîtra", 'is_correct' => false],
                            ['choice_text' => "Le strike deviendra toujours nul", 'is_correct' => false],
                            ['choice_text' => "Le contrat deviendra automatiquement une action", 'is_correct' => false],
                        ],
                        'explanation' => "Les dates, modes de règlement et mécanismes de livraison influencent directement les flux opérationnels et le besoin de trésorerie.",
                    ],
                    [
                        'question' => "Une stratégie utilise plusieurs derivatives dépendant du même facteur de marché. Quel risque de concentration faut-il surveiller ?",
                        'choices' => [
                            ['choice_text' => "Une évolution défavorable commune peut toucher plusieurs positions à la fois", 'is_correct' => true],
                            ['choice_text' => "Chaque dérivé devient sans valeur", 'is_correct' => false],
                            ['choice_text' => "Les marges sont automatiquement supprimées", 'is_correct' => false],
                            ['choice_text' => "Les positions se transforment en dépôts", 'is_correct' => false],
                        ],
                        'explanation' => "Des positions différentes peuvent toutes être sensibles au même facteur. La diversification apparente peut donc être trompeuse.",
                    ],
                    [
                        'question' => "Pourquoi la documentation d'un derivative est-elle importante pour une entreprise ?",
                        'choices' => [
                            ['choice_text' => "Elle précise les droits, obligations, échéances et modalités de règlement", 'is_correct' => true],
                            ['choice_text' => "Elle garantit que le marché sera favorable", 'is_correct' => false],
                            ['choice_text' => "Elle remplace les contrôles internes", 'is_correct' => false],
                            ['choice_text' => "Elle supprime le risque de contrepartie", 'is_correct' => false],
                        ],
                        'explanation' => "La documentation contractuelle permet de savoir précisément ce qui a été convenu et facilite le suivi juridique, financier et opérationnel.",
                    ],
                ],
            ],
            [
                'title' => "Quelle solution pour quel besoin ?",
                'description' => "Associer des situations de trésorerie et d'investissement à des instruments dérivés cohérents.",
                'duration' => 31,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une entreprise sait qu'elle devra acheter des dollars dans trois mois, mais elle accepterait de ne pas exercer sa couverture si le dollar baisse fortement. Quel instrument correspond à cette préférence ?",
                        'choices' => [
                            ['choice_text' => "Une option d'achat sur USD", 'is_correct' => true],
                            ['choice_text' => "Un forward obligatoire", 'is_correct' => false],
                            ['choice_text' => "Une vente ferme de dollars", 'is_correct' => false],
                            ['choice_text' => "Un prêt en actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le call sur USD protège contre la hausse tout en laissant la possibilité de profiter d'un dollar moins cher en n'exerçant pas.",
                    ],
                    [
                        'question' => "Un exportateur recevra 1 million USD dans quatre mois et veut sécuriser son taux sans payer une prime d'option. Quel instrument simple peut convenir ?",
                        'choices' => [
                            ['choice_text' => "Un forward de vente de dollars", 'is_correct' => true],
                            ['choice_text' => "Un call sur dollars acheté pour spéculer", 'is_correct' => false],
                            ['choice_text' => "Un future sur actions", 'is_correct' => false],
                            ['choice_text' => "Un swap d'actions", 'is_correct' => false],
                        ],
                        'explanation' => "L'exportateur recevra des dollars et peut donc vendre ces dollars à terme. Le forward permet de fixer le taux sans prime d'option explicite.",
                    ],
                    [
                        'question' => "Une société possède un emprunt à taux variable et cherche à plafonner son taux d'intérêt maximal, tout en conservant la possibilité de bénéficier d'une baisse des taux. Quelle famille d'instrument correspond à cette logique ?",
                        'choices' => [
                            ['choice_text' => "Une option de taux d'intérêt", 'is_correct' => true],
                            ['choice_text' => "Un swap fixe contre variable obligatoire", 'is_correct' => false],
                            ['choice_text' => "Une action bancaire", 'is_correct' => false],
                            ['choice_text' => "Un dépôt à vue", 'is_correct' => false],
                        ],
                        'explanation' => "Une option de taux peut créer un plafond de coût tout en laissant l'entreprise profiter d'une baisse du taux de marché, moyennant un coût de prime selon la structure choisie.",
                    ],
                    [
                        'question' => "Un investisseur possède 1 000 actions et souhaite un filet de sécurité contre une baisse importante, mais ne veut pas vendre immédiatement les actions. Quelle stratégie est cohérente ?",
                        'choices' => [
                            ['choice_text' => "Acheter des puts sur les actions", 'is_correct' => true],
                            ['choice_text' => "Acheter des calls uniquement", 'is_correct' => false],
                            ['choice_text' => "Vendre des puts nus", 'is_correct' => false],
                            ['choice_text' => "Acheter un future acheteur", 'is_correct' => false],
                        ],
                        'explanation' => "Les puts donnent un droit de vente à un strike déterminé et peuvent donc limiter la perte d'une baisse importante du sous-jacent.",
                    ],
                    [
                        'question' => "Une entreprise de transport veut limiter le risque d'une hausse du prix du carburant pour une période de six mois. Quel élément doit-elle vérifier avant de choisir le nombre de contrats ?",
                        'choices' => [
                            ['choice_text' => "Le volume réellement exposé et la taille du contrat", 'is_correct' => true],
                            ['choice_text' => "Le nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "Le montant des dividendes", 'is_correct' => false],
                            ['choice_text' => "Le cours de son action uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "La couverture doit être dimensionnée à partir de l'exposition économique et des caractéristiques du contrat utilisé.",
                    ],
                    [
                        'question' => "Pourquoi un trésorier peut-il préférer plusieurs échéances de couverture plutôt qu'un seul gros contrat très éloigné dans le temps ?",
                        'choices' => [
                            ['choice_text' => "Pour rapprocher les couvertures du calendrier réel des flux", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toute volatilité", 'is_correct' => false],
                            ['choice_text' => "Parce que les contrats courts n'ont pas de risque", 'is_correct' => false],
                            ['choice_text' => "Parce que cela garantit une baisse des taux", 'is_correct' => false],
                        ],
                        'explanation' => "Échelonner les échéances peut mieux correspondre aux encaissements et décaissements réels et éviter un décalage important entre couverture et exposition.",
                    ],
                    [
                        'question' => "Une société pense que les taux vont rester stables et cherche surtout à éliminer l'incertitude sur ses charges d'intérêts. Quelle logique de couverture est la plus cohérente ?",
                        'choices' => [
                            ['choice_text' => "Fixer tout ou partie du taux via un swap", 'is_correct' => true],
                            ['choice_text' => "Acheter un call sur l'action de la banque", 'is_correct' => false],
                            ['choice_text' => "Vendre des actions de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Acheter un put sur une matière première", 'is_correct' => false],
                        ],
                        'explanation' => "Si l'objectif principal est la prévisibilité du coût, un swap de taux peut remplacer une partie du taux variable par un taux fixe contractuel.",
                    ],
                    [
                        'question' => "Une PME n'a qu'une petite exposition au change et souhaite malgré tout conserver la possibilité de profiter d'un mouvement favorable. Quel point doit-elle comparer avant d'acheter une option ?",
                        'choices' => [
                            ['choice_text' => "Le coût de la prime par rapport à la valeur de la protection", 'is_correct' => true],
                            ['choice_text' => "Le nombre de dividendes de l'action", 'is_correct' => false],
                            ['choice_text' => "La durée de l'exercice comptable seulement", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires d'un concurrent", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une petite exposition, le coût de la prime peut être important par rapport au risque couvert. La décision doit donc comparer coût et bénéfice de la protection.",
                    ],
                    [
                        'question' => "Une banque envisage un derivative pour réduire un risque de taux. Quel document interne est particulièrement utile avant la transaction ?",
                        'choices' => [
                            ['choice_text' => "Une fiche décrivant l'exposition, l'objectif de couverture et les limites autorisées", 'is_correct' => true],
                            ['choice_text' => "Une liste des concurrents", 'is_correct' => false],
                            ['choice_text' => "Une brochure commerciale sans données", 'is_correct' => false],
                            ['choice_text' => "Une projection de dividende seulement", 'is_correct' => false],
                        ],
                        'explanation' => "La gouvernance d'une couverture commence par l'identification du risque, de l'objectif et des limites de la transaction.",
                    ],
                    [
                        'question' => "Un gestionnaire choisit entre un future et une option. Quel compromis doit-il notamment considérer ?",
                        'choices' => [
                            ['choice_text' => "Le caractère obligatoire du future contre la flexibilité de l'option et son coût de prime", 'is_correct' => true],
                            ['choice_text' => "Le fait que les deux instruments sont toujours gratuits", 'is_correct' => false],
                            ['choice_text' => "Le fait que seul le future a un prix", 'is_correct' => false],
                            ['choice_text' => "Le fait que seule l'option possède un sous-jacent", 'is_correct' => false],
                        ],
                        'explanation' => "Le future crée un engagement ferme, alors que l'option apporte un droit avec une prime. Le choix dépend donc du profil de risque recherché.",
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de trésorerie et de marché",
                'description' => "Mettre les notions de dérivés au service de décisions simples de trésorerie et d'investissement.",
                'duration' => 33,
                'passing_score' => 63,
                'questions' => [
                    [
                        'question' => "Une entreprise française facture un client marocain 900 000 MAD dans trois mois. Si elle souhaite connaître dès aujourd'hui la valeur en euros de cette créance future, que peut-elle faire ?",
                        'choices' => [
                            ['choice_text' => "Vendre les dirhams à terme contre euros", 'is_correct' => true],
                            ['choice_text' => "Acheter des dirhams à terme contre euros", 'is_correct' => false],
                            ['choice_text' => "Acheter des actions marocaines", 'is_correct' => false],
                            ['choice_text' => "Ne rien faire et obtenir un taux garanti", 'is_correct' => false],
                        ],
                        'explanation' => "L'entreprise recevra des dirhams et peut donc les vendre à terme pour fixer leur contre-valeur en euros.",
                    ],
                    [
                        'question' => "Un investisseur achète un call sur une action à 2 € de prime avec un strike de 40 €. L'action vaut 45 € à l'échéance. Quelle est sa valeur intrinsèque ?",
                        'choices' => [
                            ['choice_text' => "5 €", 'is_correct' => true],
                            ['choice_text' => "3 €", 'is_correct' => false],
                            ['choice_text' => "2 €", 'is_correct' => false],
                            ['choice_text' => "7 €", 'is_correct' => false],
                        ],
                        'explanation' => "La valeur intrinsèque du call est 45 - 40 = 5 €. Le gain net après la prime serait de 3 € par action, avant frais.",
                    ],
                    [
                        'question' => "Une entreprise paie chaque année des intérêts sur un prêt variable. Le taux de référence passe de 3 % à 5 %. Sans couverture, que se passe-t-il généralement pour ses charges d'intérêts ?",
                        'choices' => [
                            ['choice_text' => "Elles augmentent", 'is_correct' => true],
                            ['choice_text' => "Elles diminuent", 'is_correct' => false],
                            ['choice_text' => "Elles deviennent nulles", 'is_correct' => false],
                            ['choice_text' => "Elles sont indépendantes du taux", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un prêt à taux variable, une hausse du taux de référence entraîne généralement une hausse des intérêts à payer, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Un producteur de café doit vendre sa production dans quatre mois. Il ne veut pas subir une baisse des prix, mais il accepterait de profiter d'une hausse. Quel instrument est particulièrement flexible pour cette protection ?",
                        'choices' => [
                            ['choice_text' => "Un put sur le prix du café", 'is_correct' => true],
                            ['choice_text' => "Un call vendu nu", 'is_correct' => false],
                            ['choice_text' => "Un prêt bancaire", 'is_correct' => false],
                            ['choice_text' => "Un dépôt à vue", 'is_correct' => false],
                        ],
                        'explanation' => "Un put donne le droit de vendre au strike. Si le marché monte, le producteur peut vendre au marché ; si le marché baisse, l'option peut protéger.",
                    ],
                    [
                        'question' => "Une banque détient un portefeuille important de prêts à taux fixe. Si les taux de marché montent fortement, quelle relation est généralement attendue entre la valeur économique des prêts et les taux ?",
                        'choices' => [
                            ['choice_text' => "La valeur des prêts à taux fixe tend à baisser", 'is_correct' => true],
                            ['choice_text' => "La valeur des prêts augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "La valeur reste toujours identique", 'is_correct' => false],
                            ['choice_text' => "Les prêts deviennent des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Des flux fixes futurs sont moins attractifs lorsque le taux de marché augmente, ce qui tend à réduire leur valeur actuelle.",
                    ],
                    [
                        'question' => "Un trésorier observe qu'une couverture en future donne un résultat moins favorable que prévu malgré une direction de marché correcte. Quelle cause simple doit-il envisager ?",
                        'choices' => [
                            ['choice_text' => "Un risque de base", 'is_correct' => true],
                            ['choice_text' => "Une absence totale de volatilité", 'is_correct' => false],
                            ['choice_text' => "Un dividende exceptionnel", 'is_correct' => false],
                            ['choice_text' => "Un changement de nominal de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "Le dérivé et l'exposition couverte peuvent ne pas évoluer exactement en parallèle. Cet écart est le risque de base.",
                    ],
                    [
                        'question' => "Une entreprise qui a acheté une option constate que le marché évolue dans le bon sens. Pourquoi la prime de l'option peut-elle néanmoins perdre de la valeur avec le temps si rien d'autre ne change ?",
                        'choices' => [
                            ['choice_text' => "Parce que la valeur temporelle diminue à mesure que l'échéance approche", 'is_correct' => true],
                            ['choice_text' => "Parce que le strike augmente tous les jours", 'is_correct' => false],
                            ['choice_text' => "Parce que la prime devient automatiquement négative", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un call ne peut durer plus d'une semaine", 'is_correct' => false],
                        ],
                        'explanation' => "Le temps restant est une composante de la valeur d'une option. À conditions égales, son écoulement réduit progressivement la valeur temporelle.",
                    ],
                    [
                        'question' => "Une société utilise un swap de taux pour payer fixe. Le taux de marché baisse fortement après la transaction. Quel inconvénient économique peut-elle rencontrer ?",
                        'choices' => [
                            ['choice_text' => "Elle reste engagée sur un coût fixe supérieur au nouveau taux de marché", 'is_correct' => true],
                            ['choice_text' => "Elle reçoit automatiquement un gain illimité", 'is_correct' => false],
                            ['choice_text' => "Sa dette est annulée", 'is_correct' => false],
                            ['choice_text' => "Elle n'a plus de besoin de trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Le swap de fixation du taux apporte de la visibilité mais réduit aussi la capacité à profiter d'une baisse ultérieure des taux.",
                    ],
                    [
                        'question' => "Un investisseur qui détient une option call hors de la monnaie juste avant l'échéance observe une baisse du cours du sous-jacent. Quelle combinaison rend la situation encore plus défavorable ?",
                        'choices' => [
                            ['choice_text' => "Une baisse du sous-jacent et un temps très court restant", 'is_correct' => true],
                            ['choice_text' => "Une hausse du sous-jacent et plus de temps", 'is_correct' => false],
                            ['choice_text' => "Une baisse de la prime initiale", 'is_correct' => false],
                            ['choice_text' => "Une augmentation du strike vers le bas uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Un call souffre d'une baisse du sous-jacent, et le manque de temps limite en plus la possibilité d'un retournement favorable.",
                    ],
                    [
                        'question' => "Une entreprise couvre un achat futur de devise avec une option et le marché devient très favorable pour elle. Quel est l'intérêt de l'option dans ce scénario ?",
                        'choices' => [
                            ['choice_text' => "Elle peut renoncer à exercer et acheter la devise au marché", 'is_correct' => true],
                            ['choice_text' => "Elle est obligée d'exercer au strike", 'is_correct' => false],
                            ['choice_text' => "Elle reçoit deux fois la devise", 'is_correct' => false],
                            ['choice_text' => "Elle récupère automatiquement toute la prime", 'is_correct' => false],
                        ],
                        'explanation' => "L'option donne un droit. L'entreprise peut donc laisser expirer l'option et profiter du meilleur prix du marché, en acceptant le coût de la prime.",
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
