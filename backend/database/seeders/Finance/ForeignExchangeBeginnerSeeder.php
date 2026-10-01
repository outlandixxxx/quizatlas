<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ForeignExchangeBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'foreign-exchange')->firstOrFail();

        $quizzes = [
            [
                'title' => "Les bases du marché des changes",
                'description' => "Premiers réflexes pour comprendre les devises, les cotations et les opérations courantes sur le marché des changes.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une société marocaine doit régler une facture de 20 000 USD à un fournisseur américain. Quelle devise doit-elle normalement acheter pour effectuer ce paiement ?",
                        'choices' => [
                            ['choice_text' => "Des dollars américains", 'is_correct' => true],
                            ['choice_text' => "Des dirhams uniquement", 'is_correct' => false],
                            ['choice_text' => "Des euros uniquement", 'is_correct' => false],
                            ['choice_text' => "Des livres sterling", 'is_correct' => false],
                        ],
                        'explanation' => "La facture est libellée en USD. L'entreprise doit donc disposer de dollars américains pour régler son fournisseur, sauf accord contractuel prévoyant un autre moyen de paiement.",
                    ],
                    [
                        'question' => "Un taux de change indique 1 EUR = 10,80 MAD. Que signifie cette cotation ?",
                        'choices' => [
                            ['choice_text' => "Un euro permet d'obtenir 10,80 dirhams", 'is_correct' => true],
                            ['choice_text' => "Un dirham permet d'obtenir 10,80 euros", 'is_correct' => false],
                            ['choice_text' => "10,80 euros valent exactement 1 dirham", 'is_correct' => false],
                            ['choice_text' => "Le taux ne concerne que les billets en espèces", 'is_correct' => false],
                        ],
                        'explanation' => "La cotation exprime ici la valeur d'un euro en dirhams : 1 EUR s'échange contre 10,80 MAD.",
                    ],
                    [
                        'question' => "Une entreprise française facture un client japonais en yens. Quel risque financier apparaît si le yen baisse fortement avant l'encaissement ?",
                        'choices' => [
                            ['choice_text' => "La valeur en euros des recettes peut diminuer", 'is_correct' => true],
                            ['choice_text' => "Le nombre de produits vendus augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "Le coût salarial en France disparaît", 'is_correct' => false],
                            ['choice_text' => "L'entreprise devient automatiquement couverte", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les recettes sont en JPY mais que les comptes sont suivis en EUR, une baisse du yen peut réduire la contre-valeur en euros au moment de l'encaissement.",
                    ],
                    [
                        'question' => "Sur le marché des changes, que désigne généralement le terme spot ?",
                        'choices' => [
                            ['choice_text' => "Une opération de change au taux courant pour une livraison proche", 'is_correct' => true],
                            ['choice_text' => "Un contrat d'assurance contre les incendies", 'is_correct' => false],
                            ['choice_text' => "Une obligation à très long terme", 'is_correct' => false],
                            ['choice_text' => "Un prêt immobilier domestique", 'is_correct' => false],
                        ],
                        'explanation' => "Le marché spot concerne les échanges de devises au taux courant, avec un règlement qui intervient selon les conventions du marché concerné.",
                    ],
                    [
                        'question' => "Un étudiant dit : « Si une devise s'apprécie, cela signifie qu'elle perd de la valeur ». Que faut-il lui répondre ?",
                        'choices' => [
                            ['choice_text' => "Non, une appréciation signifie qu'elle prend de la valeur par rapport à une autre devise", 'is_correct' => true],
                            ['choice_text' => "Oui, une appréciation signifie toujours une dépréciation", 'is_correct' => false],
                            ['choice_text' => "L'appréciation ne concerne que les taux d'intérêt", 'is_correct' => false],
                            ['choice_text' => "Le terme ne s'utilise jamais en change", 'is_correct' => false],
                        ],
                        'explanation' => "Une appréciation correspond à une hausse de la valeur d'une devise relativement à une autre. Il faut toujours préciser par rapport à quelle devise.",
                    ],
                    [
                        'question' => "Une PME achète une machine en Suisse et doit payer 80 000 CHF. Quel élément du marché des changes influence directement le coût final en dirhams ?",
                        'choices' => [
                            ['choice_text' => "Le taux CHF/MAD", 'is_correct' => true],
                            ['choice_text' => "Le taux de chômage au Japon uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre d'actions de la PME", 'is_correct' => false],
                            ['choice_text' => "Le coupon d'une obligation française", 'is_correct' => false],
                        ],
                        'explanation' => "La dépense est en CHF alors que la PME raisonne en MAD. Le taux de change entre le franc suisse et le dirham détermine la contre-valeur de la facture.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise peut-elle suivre plusieurs devises même si elle ne fait pas de trading de change ?",
                        'choices' => [
                            ['choice_text' => "Parce que ses achats, ventes, dettes ou placements peuvent être libellés dans des devises différentes", 'is_correct' => true],
                            ['choice_text' => "Parce que toute entreprise doit spéculer sur les devises", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une entreprise ne peut pas utiliser sa monnaie nationale", 'is_correct' => false],
                            ['choice_text' => "Parce que les devises servent uniquement à calculer les salaires", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de change vient souvent de l'activité courante : ventes, achats, financements ou investissements en monnaies étrangères.",
                    ],
                    [
                        'question' => "Un touriste marocain prépare un voyage en Espagne et échange 10 000 MAD contre des euros. Quelle opération réalise-t-il ?",
                        'choices' => [
                            ['choice_text' => "Une conversion de devises", 'is_correct' => true],
                            ['choice_text' => "Une émission obligataire", 'is_correct' => false],
                            ['choice_text' => "Une opération de crédit-bail", 'is_correct' => false],
                            ['choice_text' => "Une fusion d'entreprises", 'is_correct' => false],
                        ],
                        'explanation' => "Il transforme des dirhams en euros afin de pouvoir effectuer des dépenses dans la zone euro : c'est une opération de change.",
                    ],
                    [
                        'question' => "Deux devises peuvent-elles avoir un taux de change différent selon le sens de la transaction dans une banque ?",
                        'choices' => [
                            ['choice_text' => "Oui, notamment à cause du bid et de l'ask", 'is_correct' => true],
                            ['choice_text' => "Non, une banque affiche toujours un seul prix identique", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement pour les pièces de monnaie", 'is_correct' => false],
                            ['choice_text' => "Non, sauf le week-end", 'is_correct' => false],
                        ],
                        'explanation' => "Les banques et market makers affichent généralement un prix d'achat (bid) et un prix de vente (ask), créant une différence entre les deux.",
                    ],
                    [
                        'question' => "Une entreprise reçoit des dollars et paie ses dépenses principales en dirhams. Quelle question de gestion est pertinente avant de convertir immédiatement les dollars ?",
                        'choices' => [
                            ['choice_text' => "Quelle date de paiement ou d'utilisation des fonds est prévue et quel risque de change l'entreprise accepte-t-elle ?", 'is_correct' => true],
                            ['choice_text' => "Combien de salariés ont un passeport ?", 'is_correct' => false],
                            ['choice_text' => "Quel est le numéro de série des billets ?", 'is_correct' => false],
                            ['choice_text' => "Quelle est la couleur des billets en circulation ?", 'is_correct' => false],
                        ],
                        'explanation' => "La décision de convertir dépend notamment du calendrier des besoins en MAD, de l'exposition au change et de la politique de gestion du risque de l'entreprise.",
                    ],
                ],
            ],
            [
                'title' => "Lire une cotation de devises",
                'description' => "Exercices pratiques pour lire une paire de devises, comprendre le sens d'une cotation et éviter les erreurs de conversion.",
                'duration' => 24,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "La cotation EUR/MAD = 10,95 signifie que :",
                        'choices' => [
                            ['choice_text' => "1 EUR vaut 10,95 MAD", 'is_correct' => true],
                            ['choice_text' => "1 MAD vaut 10,95 EUR", 'is_correct' => false],
                            ['choice_text' => "10,95 EUR valent 10 MAD exactement", 'is_correct' => false],
                            ['choice_text' => "1 EUR vaut 0,1095 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une cotation EUR/MAD, la première devise est la devise de base. La valeur affichée indique combien d'unités de la deuxième devise valent une unité de la première.",
                    ],
                    [
                        'question' => "Le taux USD/MAD passe de 9,90 à 10,20. À conditions égales, quelle conclusion simple peut-on tirer pour le dollar contre le dirham ?",
                        'choices' => [
                            ['choice_text' => "Le dollar s'est apprécié face au dirham", 'is_correct' => true],
                            ['choice_text' => "Le dollar s'est déprécié face au dirham", 'is_correct' => false],
                            ['choice_text' => "Le dirham a disparu du marché", 'is_correct' => false],
                            ['choice_text' => "Aucune évolution n'a eu lieu", 'is_correct' => false],
                        ],
                        'explanation' => "Il faut davantage de dirhams pour acheter 1 USD qu'avant. Le dollar s'est donc apprécié par rapport au dirham.",
                    ],
                    [
                        'question' => "Si 1 GBP = 12,60 MAD, combien de MAD faut-il pour acheter 500 GBP, sans frais ?",
                        'choices' => [
                            ['choice_text' => "6 300 MAD", 'is_correct' => true],
                            ['choice_text' => "4 962 MAD", 'is_correct' => false],
                            ['choice_text' => "630 MAD", 'is_correct' => false],
                            ['choice_text' => "62 500 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Le calcul est 500 × 12,60 = 6 300 MAD.",
                    ],
                    [
                        'question' => "Une cotation indique 1 USD = 0,92 EUR. Quel montant d'euros correspond à 25 000 USD, hors frais ?",
                        'choices' => [
                            ['choice_text' => "23 000 EUR", 'is_correct' => true],
                            ['choice_text' => "27 173,91 EUR", 'is_correct' => false],
                            ['choice_text' => "2 300 EUR", 'is_correct' => false],
                            ['choice_text' => "25 920 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "On multiplie les dollars par 0,92 : 25 000 × 0,92 = 23 000 EUR.",
                    ],
                    [
                        'question' => "Si 1 EUR = 1,08 USD, quel montant en euros correspond à 10 800 USD, hors frais ?",
                        'choices' => [
                            ['choice_text' => "10 000 EUR", 'is_correct' => true],
                            ['choice_text' => "11 664 EUR", 'is_correct' => false],
                            ['choice_text' => "9 000 EUR", 'is_correct' => false],
                            ['choice_text' => "10 800 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "Pour retrouver les euros, on divise 10 800 USD par 1,08, soit 10 000 EUR.",
                    ],
                    [
                        'question' => "Dans la paire USD/JPY, quelle devise est la devise de base ?",
                        'choices' => [
                            ['choice_text' => "L'USD", 'is_correct' => true],
                            ['choice_text' => "Le JPY", 'is_correct' => false],
                            ['choice_text' => "Les deux à la fois", 'is_correct' => false],
                            ['choice_text' => "Aucune des deux", 'is_correct' => false],
                        ],
                        'explanation' => "Dans USD/JPY, USD apparaît en premier : c'est la devise de base. Le chiffre indique combien de yens valent 1 dollar.",
                    ],
                    [
                        'question' => "Une société reçoit 50 000 CAD et le taux est 1 CAD = 0,67 EUR. Quelle est la contre-valeur en euros ?",
                        'choices' => [
                            ['choice_text' => "33 500 EUR", 'is_correct' => true],
                            ['choice_text' => "74 626 EUR", 'is_correct' => false],
                            ['choice_text' => "5 000 EUR", 'is_correct' => false],
                            ['choice_text' => "67 000 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "La contre-valeur est 50 000 × 0,67 = 33 500 EUR.",
                    ],
                    [
                        'question' => "Un analyste écrit GBP/EUR = 1,17. Comment lire cette information ?",
                        'choices' => [
                            ['choice_text' => "Une livre sterling vaut 1,17 euro", 'is_correct' => true],
                            ['choice_text' => "Un euro vaut 1,17 livre sterling", 'is_correct' => false],
                            ['choice_text' => "1,17 livre vaut 1 euro", 'is_correct' => false],
                            ['choice_text' => "Le taux compare le GBP au JPY", 'is_correct' => false],
                        ],
                        'explanation' => "La devise de base est le GBP. La cotation indique donc le nombre d'euros obtenus pour 1 GBP.",
                    ],
                    [
                        'question' => "Une entreprise achète 200 000 USD alors que 1 USD = 9,80 MAD. Quel est le montant théorique en dirhams avant frais ?",
                        'choices' => [
                            ['choice_text' => "1 960 000 MAD", 'is_correct' => true],
                            ['choice_text' => "2 040 000 MAD", 'is_correct' => false],
                            ['choice_text' => "204 000 MAD", 'is_correct' => false],
                            ['choice_text' => "196 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "200 000 × 9,80 = 1 960 000 MAD.",
                    ],
                    [
                        'question' => "Quand une paire EUR/USD passe de 1,10 à 1,06, que peut-on dire toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "L'euro vaut moins de dollars qu'avant", 'is_correct' => true],
                            ['choice_text' => "L'euro vaut plus de dollars qu'avant", 'is_correct' => false],
                            ['choice_text' => "Le dollar vaut moins d'euros qu'avant", 'is_correct' => false],
                            ['choice_text' => "La paire n'a pas changé", 'is_correct' => false],
                        ],
                        'explanation' => "Une baisse de 1,10 à 1,06 signifie qu'un euro permet d'obtenir moins de dollars : l'euro s'est déprécié contre le dollar.",
                    ],
                    [
                        'question' => "Pour vérifier une conversion inverse, quelle opération permet de passer d'un taux EUR/USD de 1,25 à USD/EUR ?",
                        'choices' => [
                            ['choice_text' => "Prendre l'inverse : 1 / 1,25", 'is_correct' => true],
                            ['choice_text' => "Ajouter 1,25 à lui-même", 'is_correct' => false],
                            ['choice_text' => "Soustraire 1,25 de 100", 'is_correct' => false],
                            ['choice_text' => "Multiplier 1,25 par 10", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsqu'on inverse le sens d'une cotation, on prend l'inverse mathématique du taux, sous réserve de conserver la même convention de cotation.",
                    ],
                ],
            ],
            [
                'title' => "Bid, ask et coût d'une transaction FX",
                'description' => "Comprendre les prix d'achat et de vente affichés par un intermédiaire et mesurer le rôle du spread.",
                'duration' => 22,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Une banque affiche EUR/USD 1,0840 / 1,0843. Lequel de ces deux prix est normalement l'ask ?",
                        'choices' => [
                            ['choice_text' => "1,0843", 'is_correct' => true],
                            ['choice_text' => "1,0840", 'is_correct' => false],
                            ['choice_text' => "Les deux sont l'ask", 'is_correct' => false],
                            ['choice_text' => "Aucun des deux", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une cotation classique, le bid est le prix auquel le teneur de marché achète la devise de base et l'ask le prix auquel il la vend. L'ask est donc généralement le plus élevé.",
                    ],
                    [
                        'question' => "Avec EUR/USD 1,0840 / 1,0843, que mesure l'écart entre les deux prix ?",
                        'choices' => [
                            ['choice_text' => "Le bid-ask spread", 'is_correct' => true],
                            ['choice_text' => "La marge nette de l'entreprise cliente", 'is_correct' => false],
                            ['choice_text' => "Le taux d'inflation de la zone euro", 'is_correct' => false],
                            ['choice_text' => "Le coupon de l'euro", 'is_correct' => false],
                        ],
                        'explanation' => "La différence entre l'ask et le bid correspond au bid-ask spread, un coût de transaction implicite important sur les marchés de change.",
                    ],
                    [
                        'question' => "Un client veut acheter des euros contre des dollars auprès d'une banque qui cote EUR/USD 1,1000 / 1,1004. Quel prix intéresse directement le client ?",
                        'choices' => [
                            ['choice_text' => "L'ask de 1,1004", 'is_correct' => true],
                            ['choice_text' => "Le bid de 1,1000", 'is_correct' => false],
                            ['choice_text' => "La moyenne obligatoire de 1,1002", 'is_correct' => false],
                            ['choice_text' => "Aucun prix de la cotation", 'is_correct' => false],
                        ],
                        'explanation' => "Le client qui achète la devise de base au market maker paie normalement le prix ask.",
                    ],
                    [
                        'question' => "Une entreprise veut vendre des euros contre des dollars. Avec EUR/USD 1,1000 / 1,1004, quel prix est pertinent pour la vente d'euros ?",
                        'choices' => [
                            ['choice_text' => "Le bid de 1,1000", 'is_correct' => true],
                            ['choice_text' => "L'ask de 1,1004", 'is_correct' => false],
                            ['choice_text' => "Le prix de 1,1040", 'is_correct' => false],
                            ['choice_text' => "Le taux EUR/JPY", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsqu'elle vend la devise de base, l'entreprise reçoit normalement le prix bid affiché par le teneur de marché.",
                    ],
                    [
                        'question' => "Si le spread d'une cotation s'élargit fortement, quel effet peut-il avoir sur une petite transaction de change ?",
                        'choices' => [
                            ['choice_text' => "Le coût implicite de l'exécution peut augmenter", 'is_correct' => true],
                            ['choice_text' => "Le client gagne automatiquement plus d'argent", 'is_correct' => false],
                            ['choice_text' => "Le taux devient nécessairement fixe", 'is_correct' => false],
                            ['choice_text' => "La devise devient sans risque", 'is_correct' => false],
                        ],
                        'explanation' => "Un spread plus large signifie un écart plus important entre le prix d'achat et le prix de vente, ce qui peut augmenter le coût d'exécution.",
                    ],
                    [
                        'question' => "Une banque cote USD/MAD 9,9800 / 10,0100. Pour une entreprise qui achète des dollars auprès de la banque, lequel est le prix pertinent ?",
                        'choices' => [
                            ['choice_text' => "10,0100", 'is_correct' => true],
                            ['choice_text' => "9,9800", 'is_correct' => false],
                            ['choice_text' => "9,9950 obligatoirement", 'is_correct' => false],
                            ['choice_text' => "1,0010", 'is_correct' => false],
                        ],
                        'explanation' => "Le client qui achète la devise de base USD paie l'ask, ici 10,0100 MAD par dollar.",
                    ],
                    [
                        'question' => "Pourquoi un spread très faible est-il généralement intéressant pour un client qui effectue une opération de change ?",
                        'choices' => [
                            ['choice_text' => "Parce que l'écart entre le prix d'achat et le prix de vente est plus réduit", 'is_correct' => true],
                            ['choice_text' => "Parce que le risque de change disparaît", 'is_correct' => false],
                            ['choice_text' => "Parce que le taux devient garanti pour toujours", 'is_correct' => false],
                            ['choice_text' => "Parce que la transaction ne nécessite plus de devise", 'is_correct' => false],
                        ],
                        'explanation' => "Un spread plus faible réduit, toutes choses égales par ailleurs, le coût implicite associé à la différence entre les deux prix.",
                    ],
                    [
                        'question' => "Un trader voit EUR/USD à 1,2000 / 1,2002 puis 1,2000 / 1,2010. Qu'est-ce qui a clairement changé ?",
                        'choices' => [
                            ['choice_text' => "Le spread s'est élargi", 'is_correct' => true],
                            ['choice_text' => "Le bid a augmenté", 'is_correct' => false],
                            ['choice_text' => "L'ask a diminué", 'is_correct' => false],
                            ['choice_text' => "La paire est devenue EUR/MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Le bid reste à 1,2000 tandis que l'ask passe de 1,2002 à 1,2010. L'écart est donc plus large.",
                    ],
                    [
                        'question' => "Une entreprise compare deux banques pour une conversion importante. Pourquoi ne doit-elle pas regarder seulement le taux affiché au milieu d'une cotation ?",
                        'choices' => [
                            ['choice_text' => "Parce que le prix réellement payé dépend du sens de la transaction et du spread", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une banque ne fait jamais de conversion", 'is_correct' => false],
                            ['choice_text' => "Parce que le client choisit toujours le bid et l'ask en même temps", 'is_correct' => false],
                            ['choice_text' => "Parce que le marché FX n'a pas de prix", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux effectivement exécuté dépend du fait que le client achète ou vende la devise et peut aussi dépendre de frais explicites en plus du spread.",
                    ],
                    [
                        'question' => "Quel scénario illustre le mieux l'effet du spread ?",
                        'choices' => [
                            ['choice_text' => "Une entreprise achète une devise à un prix légèrement supérieur à celui auquel un teneur de marché serait prêt à la racheter", 'is_correct' => true],
                            ['choice_text' => "Une entreprise ne fait aucune opération de change", 'is_correct' => false],
                            ['choice_text' => "Une banque fixe le taux d'inflation nationale", 'is_correct' => false],
                            ['choice_text' => "Un investisseur achète une action au cours historique de dix ans", 'is_correct' => false],
                        ],
                        'explanation' => "Le spread crée un écart entre le prix auquel le market maker achète et celui auquel il vend la devise de base.",
                    ],
                ],
            ],
            [
                'title' => "Appréciation et dépréciation des devises",
                'description' => "Lire les mouvements de change et comprendre leurs effets simples sur les importations, exportations et placements.",
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Le taux USD/MAD passe de 9,50 à 10,00. Pour une entreprise marocaine qui doit payer des USD, la facture en MAD est-elle plus ou moins lourde, à montant USD inchangé ?",
                        'choices' => [
                            ['choice_text' => "Plus lourde", 'is_correct' => true],
                            ['choice_text' => "Moins lourde", 'is_correct' => false],
                            ['choice_text' => "Identique dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Impossible à déterminer sans connaître le PIB", 'is_correct' => false],
                        ],
                        'explanation' => "Il faut désormais 10 MAD au lieu de 9,50 MAD pour acheter 1 USD. Le coût en dirhams augmente donc si le montant en dollars reste identique.",
                    ],
                    [
                        'question' => "Le taux EUR/MAD passe de 11,00 à 10,50. Pour un étudiant marocain qui reçoit une bourse fixe de 1 000 EUR, quelle est la conséquence en MAD ?",
                        'choices' => [
                            ['choice_text' => "La contre-valeur en MAD diminue", 'is_correct' => true],
                            ['choice_text' => "La contre-valeur en MAD augmente", 'is_correct' => false],
                            ['choice_text' => "Elle devient nécessairement nulle", 'is_correct' => false],
                            ['choice_text' => "Elle ne dépend jamais du taux EUR/MAD", 'is_correct' => false],
                        ],
                        'explanation' => "À montant d'euros inchangé, 1 000 EUR valent moins de dirhams lorsque le cours EUR/MAD baisse de 11,00 à 10,50.",
                    ],
                    [
                        'question' => "Une société exporte des produits en USD et supporte la majorité de ses coûts en MAD. Une appréciation du dollar contre le dirham peut, toutes choses égales par ailleurs, :",
                        'choices' => [
                            ['choice_text' => "Augmenter la contre-valeur en MAD de ses recettes en USD", 'is_correct' => true],
                            ['choice_text' => "Réduire automatiquement ses ventes en volume", 'is_correct' => false],
                            ['choice_text' => "Supprimer ses coûts en MAD", 'is_correct' => false],
                            ['choice_text' => "Garantir sa marge nette", 'is_correct' => false],
                        ],
                        'explanation' => "Si le dollar prend de la valeur face au dirham, chaque dollar encaissé peut être converti en davantage de MAD, ce qui peut améliorer la marge, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Un investisseur marocain détient un actif américain inchangé en USD. Le dollar se déprécie fortement contre le dirham. Que peut-il se passer pour la valeur de l'actif mesurée en MAD ?",
                        'choices' => [
                            ['choice_text' => "Elle peut diminuer malgré un prix inchangé en USD", 'is_correct' => true],
                            ['choice_text' => "Elle augmente forcément", 'is_correct' => false],
                            ['choice_text' => "Elle reste forcément identique", 'is_correct' => false],
                            ['choice_text' => "Elle devient indépendante du change", 'is_correct' => false],
                        ],
                        'explanation' => "La performance en MAD combine la variation de l'actif en USD et celle du taux USD/MAD. Une baisse du dollar peut réduire la contre-valeur en MAD.",
                    ],
                    [
                        'question' => "Une entreprise européenne achète régulièrement des matières premières facturées en dollars. Pourquoi suit-elle attentivement EUR/USD ?",
                        'choices' => [
                            ['choice_text' => "Parce que le coût en euros de ses achats en USD dépend du change", 'is_correct' => true],
                            ['choice_text' => "Parce que le taux EUR/USD fixe directement ses volumes de production", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il remplace le budget de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il élimine les risques de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "Les achats sont en USD mais les comptes de l'entreprise sont en EUR. Une variation d'EUR/USD peut donc modifier la charge en euros.",
                    ],
                    [
                        'question' => "Le dirham s'apprécie contre le dollar. Pour un importateur marocain qui paie en USD, quel effet peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "Les biens facturés en dollars peuvent coûter moins de dirhams", 'is_correct' => true],
                            ['choice_text' => "Les biens deviennent toujours plus chers en dirhams", 'is_correct' => false],
                            ['choice_text' => "Le prix en USD double automatiquement", 'is_correct' => false],
                            ['choice_text' => "Le risque de change disparaît pour tous les agents", 'is_correct' => false],
                        ],
                        'explanation' => "Si le MAD gagne de la valeur contre l'USD, moins de dirhams sont nécessaires pour obtenir un dollar, toutes choses égales par ailleurs.",
                    ],
                    [
                        'question' => "Une entreprise marocaine emprunte en euros alors que ses revenus sont surtout en MAD. Si l'euro s'apprécie fortement, quelle conséquence peut-elle subir ?",
                        'choices' => [
                            ['choice_text' => "Le service de la dette peut coûter davantage en MAD", 'is_correct' => true],
                            ['choice_text' => "La dette disparaît automatiquement", 'is_correct' => false],
                            ['choice_text' => "Le taux d'intérêt devient nul", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires en MAD augmente forcément", 'is_correct' => false],
                        ],
                        'explanation' => "Une appréciation de l'euro renchérit la contre-valeur en dirhams des remboursements et intérêts libellés en euros.",
                    ],
                    [
                        'question' => "Une baisse de GBP/MAD signifie, avec cette convention de cotation, que :",
                        'choices' => [
                            ['choice_text' => "1 GBP achète moins de MAD qu'auparavant", 'is_correct' => true],
                            ['choice_text' => "1 GBP achète plus de MAD qu'auparavant", 'is_correct' => false],
                            ['choice_text' => "Le GBP n'est plus convertible", 'is_correct' => false],
                            ['choice_text' => "Le MAD est coté en EUR", 'is_correct' => false],
                        ],
                        'explanation' => "La baisse du nombre de MAD par GBP signifie que la livre vaut moins de dirhams qu'avant.",
                    ],
                    [
                        'question' => "Un portefeuille international gagne 5 % en devise étrangère, mais la devise étrangère baisse de 8 % contre la monnaie de l'investisseur. Quelle idée faut-il retenir ?",
                        'choices' => [
                            ['choice_text' => "Le rendement final peut être inférieur à 5 % et peut même devenir négatif", 'is_correct' => true],
                            ['choice_text' => "Le rendement final est forcément de 13 %", 'is_correct' => false],
                            ['choice_text' => "Le change n'a aucun effet", 'is_correct' => false],
                            ['choice_text' => "Le rendement final est toujours nul", 'is_correct' => false],
                        ],
                        'explanation' => "La variation de l'actif et la variation du change se combinent. Un gain sur l'actif peut être en partie ou totalement compensé par une baisse de la devise.",
                    ],
                    [
                        'question' => "Pourquoi faut-il préciser « toutes choses égales par ailleurs » lorsqu'on décrit l'effet d'une appréciation d'une devise sur un importateur ?",
                        'choices' => [
                            ['choice_text' => "Parce que le coût final dépend aussi d'autres facteurs, comme les prix du fournisseur ou les frais", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un taux de change ne peut jamais évoluer", 'is_correct' => false],
                            ['choice_text' => "Parce que les importations sont toujours interdites", 'is_correct' => false],
                            ['choice_text' => "Parce que la comptabilité ignore les devises", 'is_correct' => false],
                        ],
                        'explanation' => "Le change n'est qu'un élément du coût total. Les prix en devise, le transport, les taxes, les frais bancaires et d'autres facteurs peuvent aussi varier.",
                    ],
                    [
                        'question' => "Une agence de voyage marocaine vend des séjours en Europe à un prix fixé en MAD mais règle ses hôtels en EUR. Une hausse de l'EUR/MAD peut-elle réduire sa marge ?",
                        'choices' => [
                            ['choice_text' => "Oui, si le prix de vente en MAD ne change pas alors que le coût en EUR devient plus élevé en MAD", 'is_correct' => true],
                            ['choice_text' => "Non, le taux de change ne touche jamais une agence de voyage", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement si les hôtels facturent en USD", 'is_correct' => false],
                            ['choice_text' => "Non, parce que toute hausse de l'euro augmente forcément les ventes", 'is_correct' => false],
                        ],
                        'explanation' => "L'agence a une dépense en EUR mais une recette fixée en MAD. Une hausse de l'euro augmente la contre-valeur en MAD de la dépense et peut comprimer la marge.",
                    ],
                    [
                        'question' => "Un exportateur marocain est payé en USD dans 60 jours. Pourquoi peut-il considérer qu'une dépréciation du dollar serait défavorable ?",
                        'choices' => [
                            ['choice_text' => "Parce que ses recettes futures vaudraient moins de MAD lors de la conversion", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il devrait acheter davantage de produits", 'is_correct' => false],
                            ['choice_text' => "Parce que ses clients cesseraient automatiquement de payer", 'is_correct' => false],
                            ['choice_text' => "Parce que la dépréciation augmente toujours le nombre de dollars reçus", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant en USD est fixé, mais sa valeur en MAD dépend du taux de change au moment de la conversion. Une baisse du dollar réduit cette contre-valeur.",
                    ],
                ],
            ],
            [
                'title' => "Conversions de devises et petits calculs",
                'description' => "Applications numériques simples pour convertir des montants et raisonner correctement sur les cotations.",
                'duration' => 28,
                'passing_score' => 59,
                'questions' => [
                    [
                        'question' => "Une entreprise doit payer 35 000 EUR. Le cours est 1 EUR = 10,80 MAD. Quel montant théorique en MAD faut-il prévoir ?",
                        'choices' => [
                            ['choice_text' => "378 000 MAD", 'is_correct' => true],
                            ['choice_text' => "324 074 MAD", 'is_correct' => false],
                            ['choice_text' => "37 800 MAD", 'is_correct' => false],
                            ['choice_text' => "350 108 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "35 000 × 10,80 = 378 000 MAD.",
                    ],
                    [
                        'question' => "Une société reçoit 420 000 USD. Le cours est 1 USD = 9,70 MAD. Quelle contre-valeur en MAD obtient-elle avant frais ?",
                        'choices' => [
                            ['choice_text' => "4 074 000 MAD", 'is_correct' => true],
                            ['choice_text' => "4 329 897 MAD", 'is_correct' => false],
                            ['choice_text' => "407 400 MAD", 'is_correct' => false],
                            ['choice_text' => "4 200 970 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "420 000 × 9,70 = 4 074 000 MAD.",
                    ],
                    [
                        'question' => "Une facture de 75 000 GBP doit être réglée. Le taux est 1 GBP = 12,40 MAD. Quel est le coût en MAD ?",
                        'choices' => [
                            ['choice_text' => "930 000 MAD", 'is_correct' => true],
                            ['choice_text' => "604 839 MAD", 'is_correct' => false],
                            ['choice_text' => "9 300 MAD", 'is_correct' => false],
                            ['choice_text' => "1 240 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "75 000 × 12,40 = 930 000 MAD.",
                    ],
                    [
                        'question' => "Une entreprise possède 90 000 EUR et le taux EUR/USD est 1,08. Quel montant en USD cela représente-t-il ?",
                        'choices' => [
                            ['choice_text' => "97 200 USD", 'is_correct' => true],
                            ['choice_text' => "83 333 USD", 'is_correct' => false],
                            ['choice_text' => "90 108 USD", 'is_correct' => false],
                            ['choice_text' => "108 000 USD", 'is_correct' => false],
                        ],
                        'explanation' => "90 000 × 1,08 = 97 200 USD.",
                    ],
                    [
                        'question' => "Une entreprise dispose de 110 000 USD et USD/EUR = 0,91. Quelle est la contre-valeur en EUR ?",
                        'choices' => [
                            ['choice_text' => "100 100 EUR", 'is_correct' => true],
                            ['choice_text' => "120 879 EUR", 'is_correct' => false],
                            ['choice_text' => "99 000 EUR", 'is_correct' => false],
                            ['choice_text' => "110 910 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "110 000 × 0,91 = 100 100 EUR.",
                    ],
                    [
                        'question' => "Un client convertit 15 000 EUR avec un taux EUR/MAD de 10,90. La banque facture en plus 0,5 % du montant converti en MAD. Quel est le total approximatif payé en MAD ?",
                        'choices' => [
                            ['choice_text' => "164 317,50 MAD", 'is_correct' => true],
                            ['choice_text' => "163 500 MAD", 'is_correct' => false],
                            ['choice_text' => "164 250 MAD", 'is_correct' => false],
                            ['choice_text' => "150 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "La conversion donne 15 000 × 10,90 = 163 500 MAD. Les frais de 0,5 % représentent 817,50 MAD, soit un total de 164 317,50 MAD.",
                    ],
                    [
                        'question' => "Une société doit convertir 50 000 EUR. Le taux EUR/USD est 1,10 et elle reçoit 55 000 USD avant frais. Si le taux tombe à 1,06 avant l'opération, combien recevrait-elle à montant EUR inchangé ?",
                        'choices' => [
                            ['choice_text' => "53 000 USD", 'is_correct' => true],
                            ['choice_text' => "55 000 USD", 'is_correct' => false],
                            ['choice_text' => "47 170 USD", 'is_correct' => false],
                            ['choice_text' => "56 600 USD", 'is_correct' => false],
                        ],
                        'explanation' => "Avec 1 EUR = 1,06 USD, 50 000 × 1,06 = 53 000 USD. Une baisse du taux réduit donc le nombre de dollars obtenu pour un même montant en euros.",
                    ],
                    [
                        'question' => "Un investisseur achète 10 000 USD lorsque USD/MAD vaut 9,60. Combien de MAD dépense-t-il hors frais ?",
                        'choices' => [
                            ['choice_text' => "96 000 MAD", 'is_correct' => true],
                            ['choice_text' => "104 167 MAD", 'is_correct' => false],
                            ['choice_text' => "9 600 MAD", 'is_correct' => false],
                            ['choice_text' => "106 000 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "10 000 × 9,60 = 96 000 MAD.",
                    ],
                    [
                        'question' => "Une entreprise revend 30 000 CHF à un taux de 1 CHF = 11,00 MAD. Quelle contre-valeur en MAD obtient-elle avant frais ?",
                        'choices' => [
                            ['choice_text' => "330 000 MAD", 'is_correct' => true],
                            ['choice_text' => "2 727 MAD", 'is_correct' => false],
                            ['choice_text' => "300 110 MAD", 'is_correct' => false],
                            ['choice_text' => "3 300 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "30 000 × 11,00 = 330 000 MAD.",
                    ],
                    [
                        'question' => "Le taux USD/EUR est de 0,92. Pour convertir 46 000 USD en euros, quelle opération est correcte ?",
                        'choices' => [
                            ['choice_text' => "46 000 × 0,92", 'is_correct' => true],
                            ['choice_text' => "46 000 ÷ 0,92", 'is_correct' => false],
                            ['choice_text' => "46 000 + 0,92", 'is_correct' => false],
                            ['choice_text' => "46 000 − 0,92", 'is_correct' => false],
                        ],
                        'explanation' => "La cotation USD/EUR signifie qu'un dollar vaut 0,92 euro. Il faut donc multiplier le nombre de dollars par 0,92.",
                    ],
                    [
                        'question' => "Une PME doit payer 120 000 CAD. Le cours CAD/EUR est 0,68. Quel montant en euros faut-il prévoir hors frais ?",
                        'choices' => [
                            ['choice_text' => "81 600 EUR", 'is_correct' => true],
                            ['choice_text' => "176 471 EUR", 'is_correct' => false],
                            ['choice_text' => "82 000 EUR", 'is_correct' => false],
                            ['choice_text' => "68 120 EUR", 'is_correct' => false],
                        ],
                        'explanation' => "120 000 × 0,68 = 81 600 EUR.",
                    ],
                    [
                        'question' => "Un investisseur achète 8 000 GBP avec un cours de 1 GBP = 1,25 USD. Combien de dollars dépense-t-il hors frais ?",
                        'choices' => [
                            ['choice_text' => "10 000 USD", 'is_correct' => true],
                            ['choice_text' => "6 400 USD", 'is_correct' => false],
                            ['choice_text' => "9 250 USD", 'is_correct' => false],
                            ['choice_text' => "8 125 USD", 'is_correct' => false],
                        ],
                        'explanation' => "8 000 × 1,25 = 10 000 USD.",
                    ],
                    [
                        'question' => "Une entreprise convertit 60 000 EUR avec un taux de 1 EUR = 11,00 MAD. Si le taux passe à 11,20 avant l'opération, de combien la contre-valeur augmente-t-elle ?",
                        'choices' => [
                            ['choice_text' => "12 000 MAD", 'is_correct' => true],
                            ['choice_text' => "1 200 MAD", 'is_correct' => false],
                            ['choice_text' => "120 000 MAD", 'is_correct' => false],
                            ['choice_text' => "600 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "À 11,00, la conversion vaut 660 000 MAD. À 11,20, elle vaut 672 000 MAD. L'écart est donc de 12 000 MAD.",
                    ],
                ],
            ],
            [
                'title' => "Exposition au risque de change des entreprises",
                'description' => "Reconnaître les principales expositions de change dans des situations simples de vente, d'achat, de dette et d'investissement.",
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise marocaine doit encaisser 2 millions USD dans trois mois. Son principal risque est lié à :",
                        'choices' => [
                            ['choice_text' => "La variation du USD/MAD avant l'encaissement", 'is_correct' => true],
                            ['choice_text' => "La variation du prix du pétrole uniquement", 'is_correct' => false],
                            ['choice_text' => "La hausse du nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "La durée de vie de ses immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant est futur et libellé en USD alors que l'entreprise peut mesurer sa performance en MAD. Le risque vient donc de la variation du change avant l'encaissement.",
                    ],
                    [
                        'question' => "Une société marocaine importe des équipements facturés en EUR et les paie dans 90 jours. Quel mouvement de change lui est défavorable si elle n'est pas couverte ?",
                        'choices' => [
                            ['choice_text' => "Une hausse de l'EUR contre le MAD", 'is_correct' => true],
                            ['choice_text' => "Une baisse de l'EUR contre le MAD", 'is_correct' => false],
                            ['choice_text' => "Une baisse du nombre de jours de paiement", 'is_correct' => false],
                            ['choice_text' => "Une baisse des coûts fixes en MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Si l'euro devient plus cher en dirhams avant le règlement, la facture coûtera davantage de MAD.",
                    ],
                    [
                        'question' => "Une entreprise a une dette en USD mais encaisse naturellement des USD provenant de ses clients. Cette situation peut-elle réduire son exposition ?",
                        'choices' => [
                            ['choice_text' => "Oui, les recettes en USD peuvent servir à payer une partie de la dette en USD", 'is_correct' => true],
                            ['choice_text' => "Non, deux flux dans la même devise augmentent toujours le risque", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement si le dollar cesse d'être coté", 'is_correct' => false],
                            ['choice_text' => "Non, car une dette ne peut jamais être compensée par des recettes", 'is_correct' => false],
                        ],
                        'explanation' => "Des entrées et sorties dans la même devise peuvent se compenser partiellement. Cette couverture naturelle réduit l'exposition nette de change.",
                    ],
                    [
                        'question' => "Une PME reçoit des factures de fournisseurs américains et vend principalement au Maroc. Quel outil simple peut-elle utiliser pour suivre son exposition ?",
                        'choices' => [
                            ['choice_text' => "Un tableau récapitulant les montants en USD, leurs dates et les flux correspondants", 'is_correct' => true],
                            ['choice_text' => "Une liste des anniversaires des fournisseurs", 'is_correct' => false],
                            ['choice_text' => "Le nombre de comptes de réseaux sociaux", 'is_correct' => false],
                            ['choice_text' => "Un inventaire des bureaux uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "La gestion du risque commence par l'identification des flux exposés, de leur montant, de leur devise et de leur date.",
                    ],
                    [
                        'question' => "Pourquoi la date d'un flux est-elle importante dans l'analyse du risque de change ?",
                        'choices' => [
                            ['choice_text' => "Parce que le taux de change au moment du règlement ou de l'encaissement peut être différent de celui observé aujourd'hui", 'is_correct' => true],
                            ['choice_text' => "Parce que les devises ne peuvent être échangées qu'un seul jour par an", 'is_correct' => false],
                            ['choice_text' => "Parce que la date détermine automatiquement le bénéfice", 'is_correct' => false],
                            ['choice_text' => "Parce que le marché FX ferme pendant les mois pairs", 'is_correct' => false],
                        ],
                        'explanation' => "Un flux futur est exposé aux variations du taux entre aujourd'hui et la date de règlement. Le calendrier est donc essentiel.",
                    ],
                    [
                        'question' => "Une entreprise a deux flux futurs : +500 000 USD dans 30 jours et −450 000 USD dans 35 jours. Pourquoi peut-il être utile de regarder l'exposition nette plutôt que chaque flux séparément ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une partie des entrées et sorties en USD peut naturellement se compenser", 'is_correct' => true],
                            ['choice_text' => "Parce que les deux flux sont toujours exactement identiques", 'is_correct' => false],
                            ['choice_text' => "Parce que les devises n'ont pas de valeur", 'is_correct' => false],
                            ['choice_text' => "Parce que seul le flux le plus ancien compte", 'is_correct' => false],
                        ],
                        'explanation' => "Les flux dans la même devise et sur des horizons proches peuvent se compenser partiellement. L'exposition nette donne une première vision du risque restant.",
                    ],
                    [
                        'question' => "Une entreprise facture en USD pendant six mois mais engage une partie de ses coûts en USD. Quel est l'intérêt de considérer ces coûts en USD dans l'analyse ?",
                        'choices' => [
                            ['choice_text' => "Ils peuvent servir de couverture naturelle contre les recettes en USD", 'is_correct' => true],
                            ['choice_text' => "Ils rendent tous les profits certains", 'is_correct' => false],
                            ['choice_text' => "Ils empêchent toute variation du dollar", 'is_correct' => false],
                            ['choice_text' => "Ils transforment automatiquement l'entreprise en banque", 'is_correct' => false],
                        ],
                        'explanation' => "Les coûts et recettes dans la même devise peuvent réduire l'exposition nette, selon leurs montants et leurs dates.",
                    ],
                    [
                        'question' => "Un directeur financier découvre que les équipes commerciales signent des contrats en devises sans prévenir la trésorerie. Quel problème de contrôle cela peut-il créer ?",
                        'choices' => [
                            ['choice_text' => "Une exposition de change peut apparaître sans être correctement identifiée ou couverte", 'is_correct' => true],
                            ['choice_text' => "Les devises deviennent illégales", 'is_correct' => false],
                            ['choice_text' => "Les ventes deviennent automatiquement plus rentables", 'is_correct' => false],
                            ['choice_text' => "Le taux de change est fixé par le contrat sans clause spécifique", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne gouvernance suppose que les nouveaux flux en devises soient identifiés rapidement afin que la trésorerie puisse mesurer et gérer l'exposition.",
                    ],
                    [
                        'question' => "Une entreprise a une créance en GBP et une dette en GBP de montant proche, avec des dates similaires. Quel risque peut être réduit par cette structure ?",
                        'choices' => [
                            ['choice_text' => "Une partie du risque de change net en GBP", 'is_correct' => true],
                            ['choice_text' => "Tous les risques financiers de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le risque de fraude informatique", 'is_correct' => false],
                            ['choice_text' => "Le risque commercial de perdre un client", 'is_correct' => false],
                        ],
                        'explanation' => "Les flux opposés dans la même devise peuvent se neutraliser partiellement, même s'il reste des différences de montant, de date ou de contrepartie.",
                    ],
                    [
                        'question' => "Une entreprise détermine qu'elle est exposée à une baisse du dollar sur ses recettes futures. Quelle première question de gestion est raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Quel montant est exposé, à quelle date et quelle part l'entreprise souhaite-t-elle couvrir ?", 'is_correct' => true],
                            ['choice_text' => "Quelle couleur de billet préfère le service commercial ?", 'is_correct' => false],
                            ['choice_text' => "Combien de devises existent dans le monde ?", 'is_correct' => false],
                            ['choice_text' => "Quel est le cours du dollar il y a vingt ans uniquement ?", 'is_correct' => false],
                        ],
                        'explanation' => "Une politique de couverture commence par quantifier l'exposition, son horizon et le niveau de risque accepté avant de choisir un instrument.",
                    ],
                    [
                        'question' => "Une entreprise convertit immédiatement toute sa recette en USD dès réception, alors qu'elle doit payer un fournisseur en USD deux semaines plus tard. Quel avantage peut présenter le fait de conserver une partie des USD ?",
                        'choices' => [
                            ['choice_text' => "Éviter une double conversion inutile lorsque les USD seront bientôt nécessaires", 'is_correct' => true],
                            ['choice_text' => "Garantir un profit sur le change", 'is_correct' => false],
                            ['choice_text' => "Supprimer le risque de crédit du fournisseur", 'is_correct' => false],
                            ['choice_text' => "Fixer le taux USD/MAD pour toujours", 'is_correct' => false],
                        ],
                        'explanation' => "Conserver les dollars pour un paiement proche peut éviter de convertir en MAD puis de racheter des USD, avec les coûts et spreads associés.",
                    ],
                ],
            ],
            [
                'title' => "Forwards et couverture simple",
                'description' => "Découvrir l'utilisation des contrats forward pour fixer un taux futur et comprendre la logique élémentaire d'une couverture.",
                'duration' => 30,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une entreprise sait qu'elle devra acheter 1 million USD dans 90 jours et craint une hausse du dollar. Quelle logique de couverture correspond à cette exposition ?",
                        'choices' => [
                            ['choice_text' => "Acheter un forward USD/MAD pour fixer à l'avance le taux d'achat", 'is_correct' => true],
                            ['choice_text' => "Vendre immédiatement ses USD inexistants", 'is_correct' => false],
                            ['choice_text' => "Acheter une action bancaire", 'is_correct' => false],
                            ['choice_text' => "Ne rien faire tout en affirmant que le taux est fixe", 'is_correct' => false],
                        ],
                        'explanation' => "L'entreprise a un besoin futur d'USD et craint que l'USD devienne plus cher. Un forward d'achat de USD peut verrouiller un taux futur selon les conditions convenues.",
                    ],
                    [
                        'question' => "Une entreprise française recevra 500 000 USD dans trois mois et craint une baisse du dollar contre l'euro. Quelle couverture simple peut-elle envisager ?",
                        'choices' => [
                            ['choice_text' => "Vendre les USD à terme contre EUR via un forward", 'is_correct' => true],
                            ['choice_text' => "Acheter davantage de USD à terme sans exposition", 'is_correct' => false],
                            ['choice_text' => "Contracter un prêt immobilier", 'is_correct' => false],
                            ['choice_text' => "Acheter des obligations en yens uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "L'entreprise aura des USD à recevoir et craint leur dépréciation. Une vente à terme des USD peut fixer une contre-valeur en EUR à l'avance.",
                    ],
                    [
                        'question' => "Quel est le principal intérêt pratique d'un forward de change pour une entreprise ?",
                        'choices' => [
                            ['choice_text' => "Réduire l'incertitude sur le taux appliqué à un flux futur", 'is_correct' => true],
                            ['choice_text' => "Garantir que le marché évoluera dans le sens prévu", 'is_correct' => false],
                            ['choice_text' => "Produire automatiquement un bénéfice", 'is_correct' => false],
                            ['choice_text' => "Éliminer tout risque lié à la contrepartie", 'is_correct' => false],
                        ],
                        'explanation' => "Le forward sert surtout à rendre plus prévisible la contre-valeur d'un flux futur. Il ne garantit pas un bénéfice et ne supprime pas tous les risques.",
                    ],
                    [
                        'question' => "Une entreprise achète des USD à terme à 10,00 MAD par USD. À l'échéance, le marché spot est à 10,60. Que peut-on dire, en première approximation, de sa couverture ?",
                        'choices' => [
                            ['choice_text' => "Elle paie 10,00 au lieu de subir le taux spot de 10,60 pour le montant couvert", 'is_correct' => true],
                            ['choice_text' => "Elle doit payer 10,60 en plus de 10,00", 'is_correct' => false],
                            ['choice_text' => "Le forward devient automatiquement nul", 'is_correct' => false],
                            ['choice_text' => "Elle gagne 0,60 MAD sur une vente de USD qu'elle n'a pas", 'is_correct' => false],
                        ],
                        'explanation' => "Le forward lui permet d'acheter les USD au taux convenu de 10,00, ce qui la protège contre la hausse du dollar. La valeur économique exacte dépend des modalités de règlement.",
                    ],
                    [
                        'question' => "Une entreprise a couvert un achat futur de USD avec un forward. À l'échéance, le spot est plus favorable que le taux du forward. Quel est le compromis classique ?",
                        'choices' => [
                            ['choice_text' => "La prévisibilité obtenue a un coût d'opportunité : l'entreprise ne profite pas pleinement du mouvement favorable", 'is_correct' => true],
                            ['choice_text' => "Le forward garantit toujours le meilleur taux possible", 'is_correct' => false],
                            ['choice_text' => "La société reçoit automatiquement une prime", 'is_correct' => false],
                            ['choice_text' => "Le marché spot disparaît", 'is_correct' => false],
                        ],
                        'explanation' => "Une couverture réduit l'incertitude mais peut empêcher de bénéficier entièrement d'une évolution de marché devenue favorable.",
                    ],
                    [
                        'question' => "Pourquoi une entreprise doit-elle connaître le montant et la date du flux avant de mettre en place une couverture forward ?",
                        'choices' => [
                            ['choice_text' => "Parce que le contrat doit être cohérent avec l'exposition à couvrir", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un forward ne peut jamais concerner une devise", 'is_correct' => false],
                            ['choice_text' => "Parce que la date n'a aucun effet sur le taux", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les forwards ont exactement les mêmes conditions", 'is_correct' => false],
                        ],
                        'explanation' => "Le montant, la devise et l'échéance doivent correspondre au mieux au flux exposé pour éviter une couverture insuffisante ou excessive.",
                    ],
                    [
                        'question' => "Une entreprise reçoit 300 000 USD dans 60 jours et vend ces USD à terme contre EUR. Quelle position cherche-t-elle principalement à protéger ?",
                        'choices' => [
                            ['choice_text' => "La valeur en EUR de ses recettes futures en USD", 'is_correct' => true],
                            ['choice_text' => "Le nombre de salariés de la filiale", 'is_correct' => false],
                            ['choice_text' => "Le prix de l'électricité en France", 'is_correct' => false],
                            ['choice_text' => "La valeur nominale de ses immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "La couverture vise à protéger la contre-valeur en EUR des USD qui seront encaissés plus tard.",
                    ],
                    [
                        'question' => "Le forward de change est-il identique à une conversion spot immédiate ?",
                        'choices' => [
                            ['choice_text' => "Non, le taux est convenu maintenant mais l'opération concerne une date future", 'is_correct' => true],
                            ['choice_text' => "Oui, les deux règlements ont toujours lieu immédiatement", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement le week-end", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'un forward porte uniquement sur des actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le principe du forward est précisément de fixer aujourd'hui un taux pour une transaction dont l'échéance est future.",
                    ],
                    [
                        'question' => "Une entreprise décide de couvrir seulement 70 % d'un flux futur en USD. Quel risque reste-t-il sur les 30 % non couverts ?",
                        'choices' => [
                            ['choice_text' => "Le risque de change sur la partie non couverte", 'is_correct' => true],
                            ['choice_text' => "Aucun risque de change", 'is_correct' => false],
                            ['choice_text' => "Uniquement un risque d'inflation domestique", 'is_correct' => false],
                            ['choice_text' => "Le risque de change disparaît dès qu'une partie est couverte", 'is_correct' => false],
                        ],
                        'explanation' => "La portion non couverte continue d'évoluer avec le marché. La couverture réduit l'exposition mais ne la supprime pas entièrement.",
                    ],
                    [
                        'question' => "Une PME veut se protéger contre une hausse du dollar mais tient à profiter d'une baisse du dollar si elle se produit. Quel instrument peut offrir cette asymétrie, selon ses coûts et caractéristiques ?",
                        'choices' => [
                            ['choice_text' => "Une option de change", 'is_correct' => true],
                            ['choice_text' => "Un forward obligatoire sans autre mécanisme", 'is_correct' => false],
                            ['choice_text' => "Un dépôt à vue en MAD", 'is_correct' => false],
                            ['choice_text' => "Une facture commerciale", 'is_correct' => false],
                        ],
                        'explanation' => "Une option peut offrir un droit, et non une obligation, d'échanger à un niveau convenu. Elle peut donc protéger contre un mouvement défavorable tout en laissant un potentiel de bénéfice sur un mouvement favorable, en contrepartie d'une prime.",
                    ],
                    [
                        'question' => "Quel élément peut constituer un risque résiduel même après une couverture de change correctement mise en place ?",
                        'choices' => [
                            ['choice_text' => "Un décalage de montant ou de date entre le flux couvert et le contrat", 'is_correct' => true],
                            ['choice_text' => "Le fait que le marché FX existe", 'is_correct' => false],
                            ['choice_text' => "Le nombre de monnaies utilisées dans le monde", 'is_correct' => false],
                            ['choice_text' => "La couleur des billets", 'is_correct' => false],
                        ],
                        'explanation' => "Une couverture imparfaitement alignée peut laisser un risque résiduel, notamment si le montant, la devise, la date ou le type de flux ne correspondent pas exactement.",
                    ],
                    [
                        'question' => "Une entreprise exportatrice reçoit des USD tous les mois mais les montants varient fortement. Pourquoi une couverture exacte peut-elle être difficile ?",
                        'choices' => [
                            ['choice_text' => "Parce que les montants futurs sont incertains, ce qui crée un risque de sur-couverture ou de sous-couverture", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un exportateur ne peut jamais utiliser de forward", 'is_correct' => false],
                            ['choice_text' => "Parce que le dollar n'est coté qu'une fois par mois", 'is_correct' => false],
                            ['choice_text' => "Parce que les ventes en USD ne sont pas des flux financiers", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque le montant futur est incertain, fixer trop de couverture peut créer une position excédentaire. Le choix du niveau de couverture doit tenir compte de cette incertitude.",
                    ],
                ],
            ],
            [
                'title' => "Parité de pouvoir d'achat et taux d'intérêt : premières intuitions",
                'description' => "Acquérir les intuitions essentielles derrière la PPP, les écarts d'inflation et les différences de taux d'intérêt sans entrer dans des modèles avancés.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "La logique de base de la Purchasing Power Parity (PPP) relie principalement les taux de change aux différences de :",
                        'choices' => [
                            ['choice_text' => "Niveaux ou rythmes de prix entre pays", 'is_correct' => true],
                            ['choice_text' => "Nombre de banques commerciales uniquement", 'is_correct' => false],
                            ['choice_text' => "Volumes de transport maritime", 'is_correct' => false],
                            ['choice_text' => "Salaires d'un seul métier", 'is_correct' => false],
                        ],
                        'explanation' => "La PPP cherche à relier la valeur relative des monnaies aux différences de niveaux de prix ou d'inflation, selon la version considérée.",
                    ],
                    [
                        'question' => "Si l'inflation est durablement plus élevée dans un pays que chez ses partenaires, que suggère l'intuition de la PPP à long terme ?",
                        'choices' => [
                            ['choice_text' => "Sa monnaie peut subir une pression à la baisse en valeur relative", 'is_correct' => true],
                            ['choice_text' => "Sa monnaie devient automatiquement plus forte chaque année", 'is_correct' => false],
                            ['choice_text' => "Les taux de change cessent de varier", 'is_correct' => false],
                            ['choice_text' => "L'inflation n'a aucun lien avec les prix relatifs", 'is_correct' => false],
                        ],
                        'explanation' => "Selon l'intuition de la PPP, une inflation plus élevée réduit le pouvoir d'achat relatif d'une monnaie et peut être associée à une dépréciation à long terme.",
                    ],
                    [
                        'question' => "Deux pays ont des paniers identiques et, de façon très simplifiée, aucune autre friction. Pourquoi la PPP absolue s'intéresse-t-elle au taux de change ?",
                        'choices' => [
                            ['choice_text' => "Pour relier le prix du même panier dans les deux monnaies", 'is_correct' => true],
                            ['choice_text' => "Pour fixer les taux d'intérêt des banques", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer le nombre de billets imprimés", 'is_correct' => false],
                            ['choice_text' => "Pour calculer le salaire minimum mondial", 'is_correct' => false],
                        ],
                        'explanation' => "La PPP absolue part de l'idée qu'un panier comparable devrait avoir une valeur similaire une fois converti dans une même monnaie, sous des hypothèses très simplificatrices.",
                    ],
                    [
                        'question' => "Pourquoi la PPP n'explique-t-elle pas parfaitement les taux de change observés à court terme ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il existe des biens non échangeables, des coûts de transport, des taxes, des écarts de productivité et des mouvements de capitaux", 'is_correct' => true],
                            ['choice_text' => "Parce que les devises ne s'échangent jamais", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les prix sont fixes", 'is_correct' => false],
                            ['choice_text' => "Parce que l'inflation est identique partout", 'is_correct' => false],
                        ],
                        'explanation' => "Les marchés réels comportent de nombreuses frictions et d'autres facteurs financiers. La PPP constitue donc une référence, pas une règle parfaite à court terme.",
                    ],
                    [
                        'question' => "Une hausse du taux d'intérêt domestique par rapport à l'étranger peut-elle influencer le marché des changes ?",
                        'choices' => [
                            ['choice_text' => "Oui, parce qu'elle peut modifier l'attrait relatif des placements dans cette devise", 'is_correct' => true],
                            ['choice_text' => "Non, les taux d'intérêt n'ont aucun lien avec les devises", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement pour les touristes", 'is_correct' => false],
                            ['choice_text' => "Non, car une devise n'est pas un actif financier", 'is_correct' => false],
                        ],
                        'explanation' => "Les écarts de taux peuvent influencer les flux de capitaux et la demande de devises, même si le résultat observé dépend de nombreux autres facteurs.",
                    ],
                    [
                        'question' => "L'intérêt de la Interest Rate Parity est notamment de relier :",
                        'choices' => [
                            ['choice_text' => "Les taux d'intérêt, le spot et le forward", 'is_correct' => true],
                            ['choice_text' => "Les taux d'inflation et les salaires minimums uniquement", 'is_correct' => false],
                            ['choice_text' => "Les cours boursiers et la météo", 'is_correct' => false],
                            ['choice_text' => "Les dépenses publiques et le prix des billets", 'is_correct' => false],
                        ],
                        'explanation' => "La parité de taux d'intérêt met en relation les différences de taux d'intérêt entre deux monnaies et l'écart entre leurs taux spot et forward, sous certaines hypothèses.",
                    ],
                    [
                        'question' => "Si un pays offre un taux d'intérêt nettement supérieur, peut-on conclure automatiquement que sa monnaie donnera le meilleur rendement à un investisseur étranger ?",
                        'choices' => [
                            ['choice_text' => "Non, car le gain d'intérêt peut être compensé par une variation défavorable du taux de change", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, parce que le change ne varie jamais", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu'il n'existe pas de placements en devises", 'is_correct' => false],
                        ],
                        'explanation' => "Un taux d'intérêt plus élevé ne suffit pas à déterminer le rendement dans la monnaie de l'investisseur. Le change peut augmenter ou réduire fortement la performance.",
                    ],
                    [
                        'question' => "Un investisseur compare un dépôt en EUR à 2 % et un dépôt en USD à 4 %. Pourquoi le seul écart de taux ne suffit-il pas à choisir l'option ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il faut aussi tenir compte du risque et de l'évolution EUR/USD", 'is_correct' => true],
                            ['choice_text' => "Parce que les taux n'ont aucune importance", 'is_correct' => false],
                            ['choice_text' => "Parce que les dépôts en USD sont toujours interdits", 'is_correct' => false],
                            ['choice_text' => "Parce que l'euro et le dollar ont toujours le même rendement", 'is_correct' => false],
                        ],
                        'explanation' => "Le rendement final dépend du taux du placement mais aussi de la variation de change et des autres caractéristiques du placement.",
                    ],
                    [
                        'question' => "Une monnaie se déprécie de 6 % contre l'euro alors que son taux d'intérêt est supérieur de 3 points. Que faut-il retenir à un niveau débutant ?",
                        'choices' => [
                            ['choice_text' => "Le différentiel de taux n'empêche pas une perte potentielle liée au change", 'is_correct' => true],
                            ['choice_text' => "Le placement est forcément gagnant", 'is_correct' => false],
                            ['choice_text' => "La dépréciation ne concerne que les exportateurs", 'is_correct' => false],
                            ['choice_text' => "Le différentiel de taux garantit toujours 3 % de gain", 'is_correct' => false],
                        ],
                        'explanation' => "L'investisseur doit regarder le rendement total dans sa monnaie de référence. Une baisse de la devise peut plus que compenser l'avantage de taux.",
                    ],
                    [
                        'question' => "Pourquoi la PPP est-elle souvent présentée comme une intuition de long terme plutôt qu'une règle de trading quotidien ?",
                        'choices' => [
                            ['choice_text' => "Parce que les prix et les économies s'ajustent lentement et que de nombreux facteurs financiers dominent à court terme", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle s'applique uniquement aux obligations", 'is_correct' => false],
                            ['choice_text' => "Parce que les taux de change ne bougent qu'une fois par an", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle interdit toute opération de change", 'is_correct' => false],
                        ],
                        'explanation' => "Les écarts de prix peuvent mettre du temps à se corriger et les flux financiers, les anticipations et les chocs peuvent dominer les mouvements de court terme.",
                    ],
                ],
            ],
            [
                'title' => "Situations pratiques de change",
                'description' => "Mini-cas inspirés de la gestion quotidienne des devises pour une entreprise, un investisseur ou un particulier.",
                'duration' => 32,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => "Une entreprise marocaine commande des marchandises américaines pour 100 000 USD. Le fournisseur exige le paiement dans 45 jours. Le directeur financier demande quel élément doit être surveillé en priorité. Que lui répondez-vous ?",
                        'choices' => [
                            ['choice_text' => "Le cours USD/MAD et la politique de couverture de l'entreprise", 'is_correct' => true],
                            ['choice_text' => "Le cours EUR/JPY uniquement", 'is_correct' => false],
                            ['choice_text' => "Le prix historique de l'action du fournisseur", 'is_correct' => false],
                            ['choice_text' => "Le nombre de billets de banque dans les agences", 'is_correct' => false],
                        ],
                        'explanation' => "La facture future est en USD alors que l'entreprise doit probablement financer le paiement en MAD. Le taux USD/MAD et la couverture sont donc centraux.",
                    ],
                    [
                        'question' => "Une exportatrice marocaine facture 250 000 USD à un client américain et doit encaisser dans 60 jours. Elle préfère connaître dès aujourd'hui sa contre-valeur minimale en MAD. Quelle démarche correspond à cet objectif ?",
                        'choices' => [
                            ['choice_text' => "Étudier une couverture à terme du montant prévu en USD", 'is_correct' => true],
                            ['choice_text' => "Attendre l'échéance sans analyser l'exposition", 'is_correct' => false],
                            ['choice_text' => "Acheter des actions du client", 'is_correct' => false],
                            ['choice_text' => "Convertir aujourd'hui des USD qu'elle ne possède pas", 'is_correct' => false],
                        ],
                        'explanation' => "La vente à terme des USD peut permettre de fixer à l'avance une contre-valeur, selon les conditions du contrat et le niveau de couverture choisi.",
                    ],
                    [
                        'question' => "Un étudiant détient 2 000 USD sur un compte en dollars. Le taux USD/MAD monte de 9,50 à 10,20. En supposant qu'il ne paie ni frais ni impôts, quelle contre-valeur en MAD aurait-il à la nouvelle cotation ?",
                        'choices' => [
                            ['choice_text' => "20 400 MAD", 'is_correct' => true],
                            ['choice_text' => "19 000 MAD", 'is_correct' => false],
                            ['choice_text' => "2 040 MAD", 'is_correct' => false],
                            ['choice_text' => "21 900 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "2 000 × 10,20 = 20 400 MAD. La hausse du dollar augmente ici la contre-valeur en dirhams.",
                    ],
                    [
                        'question' => "Une PME reçoit 500 000 EUR d'un client européen mais doit verser 450 000 EUR à un fournisseur européen quelques jours plus tard. Quelle stratégie naturelle peut réduire l'exposition au change ?",
                        'choices' => [
                            ['choice_text' => "Conserver une partie des EUR reçus pour payer directement la facture", 'is_correct' => true],
                            ['choice_text' => "Convertir immédiatement tous les EUR en MAD puis racheter les EUR", 'is_correct' => false],
                            ['choice_text' => "Acheter des USD sans besoin identifié", 'is_correct' => false],
                            ['choice_text' => "Emprunter en JPY", 'is_correct' => false],
                        ],
                        'explanation' => "Les encaissements et décaissements dans la même devise peuvent être compensés directement. Cela évite une conversion inutile et réduit l'exposition nette.",
                    ],
                    [
                        'question' => "Une société paie ses fournisseurs en USD mais vend ses produits en EUR. Quelle situation décrit le mieux son exposition ?",
                        'choices' => [
                            ['choice_text' => "Elle a un décalage de devises entre coûts et recettes", 'is_correct' => true],
                            ['choice_text' => "Elle est totalement couverte par définition", 'is_correct' => false],
                            ['choice_text' => "Elle ne supporte aucun risque de marché", 'is_correct' => false],
                            ['choice_text' => "Elle n'a qu'un risque de crédit", 'is_correct' => false],
                        ],
                        'explanation' => "Les coûts et recettes sont dans deux devises différentes. Une variation du taux EUR/USD peut donc modifier la marge de l'entreprise.",
                    ],
                    [
                        'question' => "Un investisseur marocain achète un ETF coté en dollars. L'ETF monte de 4 % en USD, mais le dollar baisse de 7 % contre le dirham sur la même période. Quelle affirmation est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "La performance en MAD peut être négative malgré la hausse de 4 % de l'ETF en USD", 'is_correct' => true],
                            ['choice_text' => "La performance en MAD est forcément de +11 %", 'is_correct' => false],
                            ['choice_text' => "Le change n'a aucun effet", 'is_correct' => false],
                            ['choice_text' => "L'investisseur gagne exactement 7 %", 'is_correct' => false],
                        ],
                        'explanation' => "La performance dans la devise locale dépend à la fois de l'actif et du change. Ici, la baisse du dollar peut plus que compenser la hausse de l'ETF.",
                    ],
                    [
                        'question' => "Une agence marocaine reçoit des réservations en EUR plusieurs mois avant de payer des hôtels en EUR. Quelle pratique peut être rationnelle sur le plan du change ?",
                        'choices' => [
                            ['choice_text' => "Faire correspondre autant que possible les entrées et sorties en EUR", 'is_correct' => true],
                            ['choice_text' => "Convertir chaque euro reçu en USD sans besoin", 'is_correct' => false],
                            ['choice_text' => "Ignorer les échéances", 'is_correct' => false],
                            ['choice_text' => "Fixer arbitrairement un taux sans regarder les flux", 'is_correct' => false],
                        ],
                        'explanation' => "Le rapprochement des flux en même devise permet de réduire naturellement l'exposition nette et les conversions inutiles.",
                    ],
                    [
                        'question' => "Une entreprise hésite entre un taux spot immédiat et un taux forward pour un paiement en USD dans trois mois. Quel est le point essentiel à comparer ?",
                        'choices' => [
                            ['choice_text' => "Le besoin de certitude sur le futur taux, le coût de la couverture et le risque accepté", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nom de la banque", 'is_correct' => false],
                            ['choice_text' => "La couleur de l'écran de trading", 'is_correct' => false],
                            ['choice_text' => "Le nombre de devises sur le compte bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "Le choix dépend du profil d'exposition, de la priorité donnée à la prévisibilité et des conditions proposées, notamment le taux et les coûts.",
                    ],
                    [
                        'question' => "Une banque affiche USD/MAD 10,0200 / 10,0600. Une entreprise doit acheter 100 000 USD. Quel montant théorique en MAD paie-t-elle avant frais supplémentaires ?",
                        'choices' => [
                            ['choice_text' => "1 006 000 MAD", 'is_correct' => true],
                            ['choice_text' => "1 002 000 MAD", 'is_correct' => false],
                            ['choice_text' => "100 600 MAD", 'is_correct' => false],
                            ['choice_text' => "10 060 MAD", 'is_correct' => false],
                        ],
                        'explanation' => "Comme l'entreprise achète les USD, elle paie le prix ask : 100 000 × 10,0600 = 1 006 000 MAD.",
                    ],
                    [
                        'question' => "Un particulier doit recevoir 5 000 EUR sur son compte en MAD. Le taux EUR/MAD passe de 10,90 à 10,60 avant la conversion. Quel est l'effet, hors frais ?",
                        'choices' => [
                            ['choice_text' => "Il reçoit moins de MAD qu'il ne l'aurait fait au premier taux", 'is_correct' => true],
                            ['choice_text' => "Il reçoit plus de MAD", 'is_correct' => false],
                            ['choice_text' => "Il reçoit exactement le même montant", 'is_correct' => false],
                            ['choice_text' => "Il reçoit des USD à la place", 'is_correct' => false],
                        ],
                        'explanation' => "5 000 × 10,90 = 54 500 MAD, contre 5 000 × 10,60 = 53 000 MAD. La baisse du cours EUR/MAD réduit donc la contre-valeur.",
                    ],
                    [
                        'question' => "Une entreprise tient une prévision de trésorerie pour les 12 prochaines semaines. Pourquoi est-il utile d'y identifier les flux en devises ?",
                        'choices' => [
                            ['choice_text' => "Pour estimer l'exposition de change par montant et par date", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer les besoins de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute facturation en devise", 'is_correct' => false],
                            ['choice_text' => "Pour fixer automatiquement tous les taux futurs", 'is_correct' => false],
                        ],
                        'explanation' => "Une prévision de trésorerie bien structurée permet de repérer les besoins et excédents en devises et de décider où une couverture ou une conversion est pertinente.",
                    ],
                    [
                        'question' => "Une société pense que le dollar va baisser et décide de ne rien couvrir sur une recette USD future. Quel risque prend-elle ?",
                        'choices' => [
                            ['choice_text' => "Elle accepte le risque que la contre-valeur en monnaie locale soit plus faible au moment de l'encaissement", 'is_correct' => true],
                            ['choice_text' => "Elle garantit automatiquement le meilleur taux", 'is_correct' => false],
                            ['choice_text' => "Elle élimine le risque de change", 'is_correct' => false],
                            ['choice_text' => "Elle transforme la recette en cash immédiatement", 'is_correct' => false],
                        ],
                        'explanation' => "Ne pas couvrir ne supprime pas le risque : l'entreprise conserve l'exposition aux mouvements du taux jusqu'à l'encaissement et la conversion.",
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
