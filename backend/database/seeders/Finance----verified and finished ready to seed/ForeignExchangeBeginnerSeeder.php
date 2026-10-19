<?php

namespace Database\Seeders;

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

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 24, 'passing_score' => 57],
            ['duration' => 22, 'passing_score' => 56],
            ['duration' => 26, 'passing_score' => 58],
            ['duration' => 28, 'passing_score' => 59],
            ['duration' => 27, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 61],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 32, 'passing_score' => 62],
        ];

        $quizzes = [
            [
                'title' => 'Les bases du marché des changes',
                'description' => 'Premiers réflexes pour comprendre les devises, les cotations et les opérations courantes sur le marché des changes.',
                'questions' => [
                    [
                        'question' => 'Une société marocaine doit régler une facture de 20 000 USD à un fournisseur américain. Quelle devise doit-elle normalement acheter pour effectuer ce paiement ?',
                        'explanation' => 'La facture est libellée en USD. L\'entreprise doit donc disposer de dollars américains pour régler son fournisseur, sauf accord contractuel prévoyant un autre moyen de paiement.',
                        'choices' => [
                            ['choice_text' => 'Des dollars américains', 'is_correct' => true],
                            ['choice_text' => 'Des euros de la zone euro', 'is_correct' => false],
                            ['choice_text' => 'Des dirhams marocains', 'is_correct' => false],
                            ['choice_text' => 'Des livres sterling britanniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux de change indique 1 EUR = 10,80 MAD. Que signifie cette cotation ?',
                        'explanation' => 'La cotation exprime ici la valeur d\'un euro en dirhams : 1 EUR s\'échange contre 10,80 MAD.',
                        'choices' => [
                            ['choice_text' => 'Le taux de commission sur un euro est de 10,80 %', 'is_correct' => false],
                            ['choice_text' => 'Un euro permet d\'obtenir 1,08 dirham', 'is_correct' => false],
                            ['choice_text' => 'Un euro permet d\'obtenir 10,80 dirhams', 'is_correct' => true],
                            ['choice_text' => 'Un dirham permet d\'obtenir 10,80 euros', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise française facture un client japonais en yens. Quel risque financier apparaît si le yen baisse fortement avant l\'encaissement ?',
                        'explanation' => 'Lorsque les recettes sont en JPY mais que les comptes sont suivis en EUR, une baisse du yen peut réduire la contre-valeur en euros au moment de l\'encaissement.',
                        'choices' => [
                            ['choice_text' => 'Le client japonais paie moins de yens que prévu', 'is_correct' => false],
                            ['choice_text' => 'Le montant facturé en yens est réduit à l\'encaissement', 'is_correct' => false],
                            ['choice_text' => 'La valeur en euros des recettes tend à augmenter', 'is_correct' => false],
                            ['choice_text' => 'La valeur en euros des recettes peut diminuer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sur le marché des changes, que désigne généralement le terme spot ?',
                        'explanation' => 'Le marché spot concerne les échanges de devises au taux courant, avec un règlement qui intervient selon les conventions du marché concerné.',
                        'choices' => [
                            ['choice_text' => 'Un écart entre le prix d\'achat et le prix de vente d\'une devise', 'is_correct' => false],
                            ['choice_text' => 'Une opération de change au taux courant pour une livraison proche', 'is_correct' => true],
                            ['choice_text' => 'Un contrat d\'échange de devises à une date future dont le taux est fixé d\'avance', 'is_correct' => false],
                            ['choice_text' => 'Une option donnant le droit d\'acheter une devise plus tard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant dit : « Si une devise s\'apprécie, cela signifie qu\'elle perd de la valeur ». Que faut-il lui répondre ?',
                        'explanation' => 'Une appréciation correspond à une hausse de la valeur d\'une devise relativement à une autre. Il faut toujours préciser par rapport à quelle devise.',
                        'choices' => [
                            ['choice_text' => 'Oui, une appréciation correspond à une baisse de la valeur de la devise', 'is_correct' => false],
                            ['choice_text' => 'Non, une appréciation désigne une hausse générale des prix dans le pays', 'is_correct' => false],
                            ['choice_text' => 'Non, une appréciation désigne la hausse du taux directeur décidée par la banque centrale du pays', 'is_correct' => false],
                            ['choice_text' => 'Non, une appréciation signifie qu\'elle prend de la valeur par rapport à une autre devise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une PME achète une machine en Suisse et doit payer 80 000 CHF. Quel élément du marché des changes influence directement le coût final en dirhams ?',
                        'explanation' => 'La dépense est en CHF alors que la PME raisonne en MAD. Le taux de change entre le franc suisse et le dirham détermine la contre-valeur de la facture.',
                        'choices' => [
                            ['choice_text' => 'Le taux USD/MAD', 'is_correct' => false],
                            ['choice_text' => 'Le taux EUR/MAD', 'is_correct' => false],
                            ['choice_text' => 'Le taux CHF/MAD', 'is_correct' => true],
                            ['choice_text' => 'Le taux CHF/JPY', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle suivre plusieurs devises même si elle ne fait pas de trading de change ?',
                        'explanation' => 'Le risque de change vient souvent de l\'activité courante : ventes, achats, financements ou investissements en monnaies étrangères.',
                        'choices' => [
                            ['choice_text' => 'Parce que la réglementation lui impose de détenir en permanence une partie de sa trésorerie en devises', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses achats, ventes, dettes ou placements peuvent être libellés dans des devises différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que ses salariés sont payés chaque mois dans la devise la plus forte', 'is_correct' => false],
                            ['choice_text' => 'Parce que son cours en Bourse est fixé chaque jour par le marché des changes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un touriste marocain prépare un voyage en Espagne et échange 10 000 MAD contre des euros. Quelle opération réalise-t-il ?',
                        'explanation' => 'Il transforme des dirhams en euros afin de pouvoir effectuer des dépenses dans la zone euro : c\'est une opération de change.',
                        'choices' => [
                            ['choice_text' => 'Une conversion de devises', 'is_correct' => true],
                            ['choice_text' => 'Une souscription d\'actions', 'is_correct' => false],
                            ['choice_text' => 'Un placement à terme fixe', 'is_correct' => false],
                            ['choice_text' => 'Un prêt en devises étrangères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux devises peuvent-elles avoir un taux de change différent selon le sens de la transaction dans une banque ?',
                        'explanation' => 'Les banques et market makers affichent généralement un prix d\'achat (bid) et un prix de vente (ask), créant une différence entre les deux.',
                        'choices' => [
                            ['choice_text' => 'Non, le taux est le même à l\'achat et à la vente', 'is_correct' => false],
                            ['choice_text' => 'Non, le taux officiel de la banque centrale s\'impose', 'is_correct' => false],
                            ['choice_text' => 'Oui, à cause de l\'écart entre le spot et le forward', 'is_correct' => false],
                            ['choice_text' => 'Oui, notamment à cause du bid et de l\'ask', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit des dollars et paie ses dépenses principales en dirhams. Quelle question de gestion est pertinente avant de convertir immédiatement les dollars ?',
                        'explanation' => 'La décision de convertir dépend notamment du calendrier des besoins en MAD, de l\'exposition au change et de la politique de gestion du risque de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Combien de dollars supplémentaires l\'entreprise pourrait-elle acheter pour spéculer à la hausse ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle date de paiement ou d\'utilisation des fonds est prévue et quel risque de change l\'entreprise accepte-t-elle ?', 'is_correct' => true],
                            ['choice_text' => 'Quel est le cours moyen du dollar sur les dix dernières années, indépendamment des besoins de l\'entreprise ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le nombre de clients américains de l\'entreprise et le chiffre d\'affaires cumulé réalisé avec eux depuis sa création ?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Lire une cotation de devises',
                'description' => 'Exercices pratiques pour lire une paire de devises, comprendre le sens d\'une cotation et éviter les erreurs de conversion.',
                'questions' => [
                    [
                        'question' => 'La cotation EUR/MAD = 10,95 signifie que :',
                        'explanation' => 'Dans une cotation EUR/MAD, la première devise est la devise de base. La valeur affichée indique combien d\'unités de la deuxième devise valent une unité de la première.',
                        'choices' => [
                            ['choice_text' => '1 EUR vaut 10,95 MAD', 'is_correct' => true],
                            ['choice_text' => '1 EUR vaut 1,095 MAD', 'is_correct' => false],
                            ['choice_text' => '1 EUR vaut 0,0913 MAD', 'is_correct' => false],
                            ['choice_text' => '1 MAD vaut 10,95 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le taux USD/MAD passe de 9,90 à 10,20. À conditions égales, quelle conclusion simple peut-on tirer pour le dollar contre le dirham ?',
                        'explanation' => 'Il faut davantage de dirhams pour acheter 1 USD qu\'avant. Le dollar s\'est donc apprécié par rapport au dirham.',
                        'choices' => [
                            ['choice_text' => 'Le dollar s\'est apprécié face à l\'euro', 'is_correct' => false],
                            ['choice_text' => 'Le dollar est resté stable face au dirham', 'is_correct' => false],
                            ['choice_text' => 'Le dollar s\'est apprécié face au dirham', 'is_correct' => true],
                            ['choice_text' => 'Le dollar s\'est déprécié face au dirham', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 1 GBP = 12,60 MAD, combien de MAD faut-il pour acheter 500 GBP, sans frais ?',
                        'explanation' => 'Le calcul est 500 × 12,60 = 6 300 MAD.',
                        'choices' => [
                            ['choice_text' => '630 MAD', 'is_correct' => false],
                            ['choice_text' => '4 962 MAD', 'is_correct' => false],
                            ['choice_text' => '6 300 MAD', 'is_correct' => true],
                            ['choice_text' => '62 500 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cotation indique 1 USD = 0,92 EUR. Quel montant d\'euros correspond à 25 000 USD, hors frais ?',
                        'explanation' => 'On multiplie les dollars par 0,92 : 25 000 × 0,92 = 23 000 EUR.',
                        'choices' => [
                            ['choice_text' => '2 300 EUR', 'is_correct' => false],
                            ['choice_text' => '23 000 EUR', 'is_correct' => true],
                            ['choice_text' => '25 920 EUR', 'is_correct' => false],
                            ['choice_text' => '27 173,91 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 1 EUR = 1,08 USD, quel montant en euros correspond à 10 800 USD, hors frais ?',
                        'explanation' => 'Pour retrouver les euros, on divise 10 800 USD par 1,08, soit 10 000 EUR.',
                        'choices' => [
                            ['choice_text' => '9 000 EUR', 'is_correct' => false],
                            ['choice_text' => '10 000 EUR', 'is_correct' => true],
                            ['choice_text' => '10 800 EUR', 'is_correct' => false],
                            ['choice_text' => '11 664 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans la paire USD/JPY, quelle devise est la devise de base ?',
                        'explanation' => 'Dans USD/JPY, USD apparaît en premier : c\'est la devise de base. Le chiffre indique combien de yens valent 1 dollar.',
                        'choices' => [
                            ['choice_text' => 'L\'USD', 'is_correct' => true],
                            ['choice_text' => 'La devise dont la valeur est fixe', 'is_correct' => false],
                            ['choice_text' => 'L\'EUR, par convention de marché', 'is_correct' => false],
                            ['choice_text' => 'Le JPY', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société reçoit 50 000 CAD et le taux est 1 CAD = 0,67 EUR. Quelle est la contre-valeur en euros ?',
                        'explanation' => 'La contre-valeur est 50 000 × 0,67 = 33 500 EUR.',
                        'choices' => [
                            ['choice_text' => '5 000 EUR', 'is_correct' => false],
                            ['choice_text' => '33 500 EUR', 'is_correct' => true],
                            ['choice_text' => '67 000 EUR', 'is_correct' => false],
                            ['choice_text' => '74 626 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste écrit GBP/EUR = 1,17. Comment lire cette information ?',
                        'explanation' => 'La devise de base est le GBP. La cotation indique donc le nombre d\'euros obtenus pour 1 GBP.',
                        'choices' => [
                            ['choice_text' => 'Un euro vaut 1,17 livre sterling', 'is_correct' => false],
                            ['choice_text' => 'Une livre sterling vaut 11,7 euros', 'is_correct' => false],
                            ['choice_text' => 'Une livre sterling vaut 0,85 euro', 'is_correct' => false],
                            ['choice_text' => 'Une livre sterling vaut 1,17 euro', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise achète 200 000 USD alors que 1 USD = 9,80 MAD. Quel est le montant théorique en dirhams avant frais ?',
                        'explanation' => '200 000 × 9,80 = 1 960 000 MAD.',
                        'choices' => [
                            ['choice_text' => '196 000 MAD', 'is_correct' => false],
                            ['choice_text' => '204 000 MAD', 'is_correct' => false],
                            ['choice_text' => '1 960 000 MAD', 'is_correct' => true],
                            ['choice_text' => '2 040 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand une paire EUR/USD passe de 1,10 à 1,06, que peut-on dire toutes choses égales par ailleurs ?',
                        'explanation' => 'Une baisse de 1,10 à 1,06 signifie qu\'un euro permet d\'obtenir moins de dollars : l\'euro s\'est déprécié contre le dollar.',
                        'choices' => [
                            ['choice_text' => 'L\'euro vaut plus de dollars qu\'avant', 'is_correct' => false],
                            ['choice_text' => 'Le dollar vaut moins d\'euros qu\'avant', 'is_correct' => false],
                            ['choice_text' => 'La paire n\'a pas changé', 'is_correct' => false],
                            ['choice_text' => 'L\'euro vaut moins de dollars qu\'avant', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour vérifier une conversion inverse, quelle opération permet de passer d\'un taux EUR/USD de 1,25 à USD/EUR ?',
                        'explanation' => 'Lorsqu\'on inverse le sens d\'une cotation, on prend l\'inverse mathématique du taux, sous réserve de conserver la même convention de cotation.',
                        'choices' => [
                            ['choice_text' => 'Prendre l\'inverse : 1 / 1,25', 'is_correct' => true],
                            ['choice_text' => 'Calculer 2 − 1,25 = 0,75', 'is_correct' => false],
                            ['choice_text' => 'Multiplier 1,25 par lui-même (1,25²)', 'is_correct' => false],
                            ['choice_text' => 'Prendre l\'opposé : −1,25', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bid, ask et coût d\'une transaction FX',
                'description' => 'Comprendre les prix d\'achat et de vente affichés par un intermédiaire et mesurer le rôle du spread.',
                'questions' => [
                    [
                        'question' => 'Une banque affiche EUR/USD 1,0840 / 1,0843. Lequel de ces deux prix est normalement l\'ask ?',
                        'explanation' => 'Dans une cotation classique, le bid est le prix auquel le teneur de marché achète la devise de base et l\'ask le prix auquel il la vend. L\'ask est donc généralement le plus élevé.',
                        'choices' => [
                            ['choice_text' => '0,0003', 'is_correct' => false],
                            ['choice_text' => '1,0840', 'is_correct' => false],
                            ['choice_text' => '1,08415', 'is_correct' => false],
                            ['choice_text' => '1,0843', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Avec EUR/USD 1,0840 / 1,0843, que mesure l\'écart entre les deux prix ?',
                        'explanation' => 'La différence entre l\'ask et le bid correspond au bid-ask spread, un coût de transaction implicite important sur les marchés de change.',
                        'choices' => [
                            ['choice_text' => 'Le taux directeur', 'is_correct' => false],
                            ['choice_text' => 'Le taux croisé', 'is_correct' => false],
                            ['choice_text' => 'Le bid-ask spread', 'is_correct' => true],
                            ['choice_text' => 'La prime de risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client veut acheter des euros contre des dollars auprès d\'une banque qui cote EUR/USD 1,1000 / 1,1004. Quel prix intéresse directement le client ?',
                        'explanation' => 'Le client qui achète la devise de base au market maker paie normalement le prix ask.',
                        'choices' => [
                            ['choice_text' => 'L\'ask de 1,1004', 'is_correct' => true],
                            ['choice_text' => 'Le bid de 1,1000', 'is_correct' => false],
                            ['choice_text' => 'L\'écart de 0,0004', 'is_correct' => false],
                            ['choice_text' => 'Le mid de 1,1002', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut vendre des euros contre des dollars. Avec EUR/USD 1,1000 / 1,1004, quel prix est pertinent pour la vente d\'euros ?',
                        'explanation' => 'Lorsqu\'elle vend la devise de base, l\'entreprise reçoit normalement le prix bid affiché par le teneur de marché.',
                        'choices' => [
                            ['choice_text' => 'L\'ask de 1,1004', 'is_correct' => false],
                            ['choice_text' => 'Le mid de 1,1002', 'is_correct' => false],
                            ['choice_text' => 'L\'écart de 0,0004', 'is_correct' => false],
                            ['choice_text' => 'Le bid de 1,1000', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si le spread d\'une cotation s\'élargit fortement, quel effet peut-il avoir sur une petite transaction de change ?',
                        'explanation' => 'Un spread plus large signifie un écart plus important entre le prix d\'achat et le prix de vente, ce qui peut augmenter le coût d\'exécution.',
                        'choices' => [
                            ['choice_text' => 'Le coût implicite de l\'exécution peut nettement diminuer', 'is_correct' => false],
                            ['choice_text' => 'Le prix bid devient supérieur au prix ask', 'is_correct' => false],
                            ['choice_text' => 'Le coût implicite de l\'exécution peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'Le taux de change se fige jusqu\'à la clôture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque cote USD/MAD 9,9800 / 10,0100. Pour une entreprise qui achète des dollars auprès de la banque, lequel est le prix pertinent ?',
                        'explanation' => 'Le client qui achète la devise de base USD paie l\'ask, ici 10,0100 MAD par dollar.',
                        'choices' => [
                            ['choice_text' => '0,0300', 'is_correct' => false],
                            ['choice_text' => '9,9800', 'is_correct' => false],
                            ['choice_text' => '9,9950', 'is_correct' => false],
                            ['choice_text' => '10,0100', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un spread très faible est-il généralement intéressant pour un client qui effectue une opération de change ?',
                        'explanation' => 'Un spread plus faible réduit, toutes choses égales par ailleurs, le coût implicite associé à la différence entre les deux prix.',
                        'choices' => [
                            ['choice_text' => 'Parce que la devise est moins volatile et le risque de change baisse', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'écart entre le prix d\'achat et le prix de vente est plus réduit', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux d\'intérêt de la devise est plus élevé que celui pratiqué sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque s\'engage à conserver le même taux pendant un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trader voit EUR/USD à 1,2000 / 1,2002 puis 1,2000 / 1,2010. Qu\'est-ce qui a clairement changé ?',
                        'explanation' => 'Le bid reste à 1,2000 tandis que l\'ask passe de 1,2002 à 1,2010. L\'écart est donc plus large.',
                        'choices' => [
                            ['choice_text' => 'Le spread s\'est élargi', 'is_correct' => true],
                            ['choice_text' => 'L\'ask a diminué', 'is_correct' => false],
                            ['choice_text' => 'Le bid a augmenté', 'is_correct' => false],
                            ['choice_text' => 'Le mid est resté inchangé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise compare deux banques pour une conversion importante. Pourquoi ne doit-elle pas regarder seulement le taux affiché au milieu d\'une cotation ?',
                        'explanation' => 'Le taux effectivement exécuté dépend du fait que le client achète ou vende la devise et peut aussi dépendre de frais explicites en plus du spread.',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux milieu est réservé aux échanges entre banques centrales et grandes banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix réellement payé dépend du sens de la transaction et du spread', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux milieu est le plus élevé des trois prix de la cotation', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux milieu intègre déjà les frais fixes de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario illustre le mieux l\'effet du spread ?',
                        'explanation' => 'Le spread crée un écart entre le prix auquel le market maker achète et celui auquel il vend la devise de base.',
                        'choices' => [
                            ['choice_text' => 'Une entreprise achète une devise au cours moyen du jour, identique à celui auquel la banque la lui rachèterait au même moment', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise paie une commission fixe à sa banque indépendamment de l\'écart entre le prix d\'achat et de vente', 'is_correct' => false],
                            ['choice_text' => 'Une entreprise achète une devise à un prix légèrement supérieur à celui auquel un teneur de marché serait prêt à la racheter', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise perd de la valeur parce que la devise achetée se déprécie dans les jours qui suivent l\'achat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Appréciation et dépréciation des devises',
                'description' => 'Lire les mouvements de change et comprendre leurs effets simples sur les importations, exportations et placements.',
                'questions' => [
                    [
                        'question' => 'Le taux USD/MAD passe de 9,50 à 10,00. Pour une entreprise marocaine qui doit payer des USD, la facture en MAD est-elle plus ou moins lourde, à montant USD inchangé ?',
                        'explanation' => 'Il faut désormais 10 MAD au lieu de 9,50 MAD pour acheter 1 USD. Le coût en dirhams augmente donc si le montant en dollars reste identique.',
                        'choices' => [
                            ['choice_text' => 'Plus lourde', 'is_correct' => true],
                            ['choice_text' => 'Moins lourde', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                            ['choice_text' => 'Plus lourde en dollars mais inchangée en MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le taux EUR/MAD passe de 11,00 à 10,50. Pour un étudiant marocain qui reçoit une bourse fixe de 1 000 EUR, quelle est la conséquence en MAD ?',
                        'explanation' => 'À montant d\'euros inchangé, 1 000 EUR valent moins de dirhams lorsque le cours EUR/MAD baisse de 11,00 à 10,50.',
                        'choices' => [
                            ['choice_text' => 'La contre-valeur en MAD est inchangée', 'is_correct' => false],
                            ['choice_text' => 'La contre-valeur en MAD augmente', 'is_correct' => false],
                            ['choice_text' => 'La contre-valeur en MAD diminue', 'is_correct' => true],
                            ['choice_text' => 'Le montant de la bourse en EUR diminue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société exporte des produits en USD et supporte la majorité de ses coûts en MAD. Une appréciation du dollar contre le dirham peut, toutes choses égales par ailleurs, :',
                        'explanation' => 'Si le dollar prend de la valeur face au dirham, chaque dollar encaissé peut être converti en davantage de MAD, ce qui peut améliorer la marge, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire la contre-valeur en MAD de ses recettes en USD', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la contre-valeur en MAD de ses recettes en USD', 'is_correct' => true],
                            ['choice_text' => 'Alourdir ses coûts en MAD pour un exportateur payé en USD', 'is_correct' => false],
                            ['choice_text' => 'Réduire le montant en USD facturé à ses clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur marocain détient un actif américain inchangé en USD. Le dollar se déprécie fortement contre le dirham. Que peut-il se passer pour la valeur de l\'actif mesurée en MAD ?',
                        'explanation' => 'La performance en MAD combine la variation de l\'actif en USD et celle du taux USD/MAD. Une baisse du dollar peut réduire la contre-valeur en MAD.',
                        'choices' => [
                            ['choice_text' => 'Elle peut diminuer malgré un prix inchangé en USD', 'is_correct' => true],
                            ['choice_text' => 'Elle ne dépend que du prix de l\'actif en USD', 'is_correct' => false],
                            ['choice_text' => 'Elle peut augmenter grâce à la baisse du dollar', 'is_correct' => false],
                            ['choice_text' => 'Elle reste égale au prix en USD converti à l\'ancien taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise européenne achète régulièrement des matières premières facturées en dollars. Pourquoi suit-elle attentivement EUR/USD ?',
                        'explanation' => 'Les achats sont en USD mais les comptes de l\'entreprise sont en EUR. Une variation d\'EUR/USD peut donc modifier la charge en euros.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il remplace son budget de trésorerie et ses prévisions de ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux EUR/USD fixe directement ses volumes de production', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il détermine le taux d\'intérêt que sa banque lui applique', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût en euros de ses achats en USD dépend du change', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le dirham s\'apprécie contre le dollar. Pour un importateur marocain qui paie en USD, quel effet peut apparaître ?',
                        'explanation' => 'Si le MAD gagne de la valeur contre l\'USD, moins de dirhams sont nécessaires pour obtenir un dollar, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Les biens facturés en dollars peuvent coûter moins de dirhams', 'is_correct' => true],
                            ['choice_text' => 'Le fournisseur américain baisse son prix en dollars pour compenser', 'is_correct' => false],
                            ['choice_text' => 'Les biens facturés en dollars peuvent coûter plus de dirhams', 'is_correct' => false],
                            ['choice_text' => 'Les biens coûtent moins de dollars à l\'importateur marocain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine emprunte en euros alors que ses revenus sont surtout en MAD. Si l\'euro s\'apprécie fortement, quelle conséquence peut-elle subir ?',
                        'explanation' => 'Une appréciation de l\'euro renchérit la contre-valeur en dirhams des remboursements et intérêts libellés en euros.',
                        'choices' => [
                            ['choice_text' => 'Le montant de la dette en euros diminue', 'is_correct' => false],
                            ['choice_text' => 'Le service de la dette peut coûter moins en MAD', 'is_correct' => false],
                            ['choice_text' => 'Le service de la dette peut coûter davantage en MAD', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d\'affaires en MAD augmente dans la même proportion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse de GBP/MAD signifie, avec cette convention de cotation, que :',
                        'explanation' => 'La baisse du nombre de MAD par GBP signifie que la livre vaut moins de dirhams qu\'avant.',
                        'choices' => [
                            ['choice_text' => '1 MAD achète moins de GBP qu\'auparavant', 'is_correct' => false],
                            ['choice_text' => '1 GBP achète moins de MAD qu\'auparavant', 'is_correct' => true],
                            ['choice_text' => '1 GBP achète plus de MAD qu\'auparavant', 'is_correct' => false],
                            ['choice_text' => 'La livre sterling s\'est appréciée face au dirham', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille international gagne 5 % en devise étrangère, mais la devise étrangère baisse de 8 % contre la monnaie de l\'investisseur. Quelle idée faut-il retenir ?',
                        'explanation' => 'La variation de l\'actif et la variation du change se combinent. Un gain sur l\'actif peut être en partie ou totalement compensé par une baisse de la devise.',
                        'choices' => [
                            ['choice_text' => 'Le rendement final est de 13 %, car les deux variations s\'additionnent', 'is_correct' => false],
                            ['choice_text' => 'Le rendement final est positif, car un gain d\'actif prime sur le change', 'is_correct' => false],
                            ['choice_text' => 'Le rendement final reste de 5 %, car le change ne joue que sur le capital initial', 'is_correct' => false],
                            ['choice_text' => 'Le rendement final peut être inférieur à 5 % et peut même devenir négatif', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il préciser « toutes choses égales par ailleurs » lorsqu\'on décrit l\'effet d\'une appréciation d\'une devise sur un importateur ?',
                        'explanation' => 'Le change n\'est qu\'un élément du coût total. Les prix en devise, le transport, les taxes, les frais bancaires et d\'autres facteurs peuvent aussi varier.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coût final dépend aussi d\'autres facteurs, comme les prix du fournisseur ou les frais', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux de change reste fixe pendant toute la durée du contrat d\'achat', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'appréciation d\'une devise ne concerne que les exportateurs et pas les importateurs d\'un pays', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'importateur choisit lui-même le taux de change appliqué par sa banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une agence de voyage marocaine vend des séjours en Europe à un prix fixé en MAD mais règle ses hôtels en EUR. Une hausse de l\'EUR/MAD peut-elle réduire sa marge ?',
                        'explanation' => 'L\'agence a une dépense en EUR mais une recette fixée en MAD. Une hausse de l\'euro augmente la contre-valeur en MAD de la dépense et peut comprimer la marge.',
                        'choices' => [
                            ['choice_text' => 'Non, car une hausse de l\'EUR/MAD réduit le prix des hôtels exprimé en euros', 'is_correct' => false],
                            ['choice_text' => 'Oui, si le prix de vente en MAD ne change pas alors que le coût en EUR devient plus élevé en MAD', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais dans le cas où le dirham s\'apprécie face à l\'euro et où les hôtels baissent leurs prix', 'is_correct' => false],
                            ['choice_text' => 'Non, car l\'agence encaisse ses ventes en MAD et paie ses hôtels en EUR : les deux flux se compensent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un exportateur marocain est payé en USD dans 60 jours. Pourquoi peut-il considérer qu\'une dépréciation du dollar serait défavorable ?',
                        'explanation' => 'Le montant en USD est fixé, mais sa valeur en MAD dépend du taux de change au moment de la conversion. Une baisse du dollar réduit cette contre-valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses coûts en dirhams augmenteraient dans la même proportion', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses recettes futures vaudraient plus de dirhams lors de la conversion', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses recettes futures vaudraient moins de MAD lors de la conversion', 'is_correct' => true],
                            ['choice_text' => 'Parce que le montant à encaisser en dollars serait réduit par la banque', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Conversions de devises et petits calculs',
                'description' => 'Applications numériques simples pour convertir des montants et raisonner correctement sur les cotations.',
                'questions' => [
                    [
                        'question' => 'Une entreprise doit payer 35 000 EUR. Le cours est 1 EUR = 10,80 MAD. Quel montant théorique en MAD faut-il prévoir ?',
                        'explanation' => '35 000 × 10,80 = 378 000 MAD.',
                        'choices' => [
                            ['choice_text' => '37 800 MAD', 'is_correct' => false],
                            ['choice_text' => '324 074 MAD', 'is_correct' => false],
                            ['choice_text' => '350 108 MAD', 'is_correct' => false],
                            ['choice_text' => '378 000 MAD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société reçoit 420 000 USD. Le cours est 1 USD = 9,70 MAD. Quelle contre-valeur en MAD obtient-elle avant frais ?',
                        'explanation' => '420 000 × 9,70 = 4 074 000 MAD.',
                        'choices' => [
                            ['choice_text' => '407 400 MAD', 'is_correct' => false],
                            ['choice_text' => '4 074 000 MAD', 'is_correct' => true],
                            ['choice_text' => '4 200 970 MAD', 'is_correct' => false],
                            ['choice_text' => '4 329 897 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une facture de 75 000 GBP doit être réglée. Le taux est 1 GBP = 12,40 MAD. Quel est le coût en MAD ?',
                        'explanation' => '75 000 × 12,40 = 930 000 MAD.',
                        'choices' => [
                            ['choice_text' => '9 300 MAD', 'is_correct' => false],
                            ['choice_text' => '604 839 MAD', 'is_correct' => false],
                            ['choice_text' => '930 000 MAD', 'is_correct' => true],
                            ['choice_text' => '1 240 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 90 000 EUR et le taux EUR/USD est 1,08. Quel montant en USD cela représente-t-il ?',
                        'explanation' => '90 000 × 1,08 = 97 200 USD.',
                        'choices' => [
                            ['choice_text' => '83 333 USD', 'is_correct' => false],
                            ['choice_text' => '90 108 USD', 'is_correct' => false],
                            ['choice_text' => '97 200 USD', 'is_correct' => true],
                            ['choice_text' => '108 000 USD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose de 110 000 USD et USD/EUR = 0,91. Quelle est la contre-valeur en EUR ?',
                        'explanation' => '110 000 × 0,91 = 100 100 EUR.',
                        'choices' => [
                            ['choice_text' => '99 000 EUR', 'is_correct' => false],
                            ['choice_text' => '100 100 EUR', 'is_correct' => true],
                            ['choice_text' => '110 910 EUR', 'is_correct' => false],
                            ['choice_text' => '120 879 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client achète 15 000 EUR auprès de sa banque au taux de 10,90 MAD par EUR. La banque ajoute une commission de 0,5 % sur la contre-valeur en MAD. Quel montant total paie-t-il en MAD ?',
                        'explanation' => 'L’achat coûte 15 000 × 10,90 = 163 500 MAD avant commission. La commission est de 163 500 × 0,5 % = 817,50 MAD. Le total payé est donc de 164 317,50 MAD.',
                        'choices' => [
                            ['choice_text' => '162 682,50 MAD', 'is_correct' => false],
                            ['choice_text' => '163 500,00 MAD', 'is_correct' => false],
                            ['choice_text' => '164 317,50 MAD', 'is_correct' => true],
                            ['choice_text' => '171 675,00 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société doit convertir 50 000 EUR. Le taux EUR/USD est 1,10 et elle reçoit 55 000 USD avant frais. Si le taux tombe à 1,06 avant l\'opération, combien recevrait-elle à montant EUR inchangé ?',
                        'explanation' => 'Avec 1 EUR = 1,06 USD, 50 000 × 1,06 = 53 000 USD. Une baisse du taux réduit donc le nombre de dollars obtenu pour un même montant en euros.',
                        'choices' => [
                            ['choice_text' => '47 170 USD', 'is_correct' => false],
                            ['choice_text' => '53 000 USD', 'is_correct' => true],
                            ['choice_text' => '55 000 USD', 'is_correct' => false],
                            ['choice_text' => '56 600 USD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète 10 000 USD lorsque USD/MAD vaut 9,60. Combien de MAD dépense-t-il hors frais ?',
                        'explanation' => '10 000 × 9,60 = 96 000 MAD.',
                        'choices' => [
                            ['choice_text' => '9 600 MAD', 'is_correct' => false],
                            ['choice_text' => '96 000 MAD', 'is_correct' => true],
                            ['choice_text' => '104 167 MAD', 'is_correct' => false],
                            ['choice_text' => '106 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise revend 30 000 CHF à un taux de 1 CHF = 11,00 MAD. Quelle contre-valeur en MAD obtient-elle avant frais ?',
                        'explanation' => '30 000 × 11,00 = 330 000 MAD.',
                        'choices' => [
                            ['choice_text' => '2 727 MAD', 'is_correct' => false],
                            ['choice_text' => '3 300 MAD', 'is_correct' => false],
                            ['choice_text' => '300 110 MAD', 'is_correct' => false],
                            ['choice_text' => '330 000 MAD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le taux USD/EUR est de 0,92. Pour convertir 46 000 USD en euros, quelle opération est correcte ?',
                        'explanation' => 'La cotation USD/EUR signifie qu\'un dollar vaut 0,92 euro. Il faut donc multiplier le nombre de dollars par 0,92.',
                        'choices' => [
                            ['choice_text' => '46 000 × 0,92', 'is_correct' => true],
                            ['choice_text' => '46 000 + 0,92', 'is_correct' => false],
                            ['choice_text' => '46 000 − 0,92', 'is_correct' => false],
                            ['choice_text' => '46 000 ÷ 0,92', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME doit payer 120 000 CAD. Le cours CAD/EUR est 0,68. Quel montant en euros faut-il prévoir hors frais ?',
                        'explanation' => '120 000 × 0,68 = 81 600 EUR.',
                        'choices' => [
                            ['choice_text' => '68 120 EUR', 'is_correct' => false],
                            ['choice_text' => '81 600 EUR', 'is_correct' => true],
                            ['choice_text' => '82 000 EUR', 'is_correct' => false],
                            ['choice_text' => '176 471 EUR', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur achète 8 000 GBP avec un cours de 1 GBP = 1,25 USD. Combien de dollars dépense-t-il hors frais ?',
                        'explanation' => '8 000 × 1,25 = 10 000 USD.',
                        'choices' => [
                            ['choice_text' => '6 400 USD', 'is_correct' => false],
                            ['choice_text' => '8 125 USD', 'is_correct' => false],
                            ['choice_text' => '9 250 USD', 'is_correct' => false],
                            ['choice_text' => '10 000 USD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise convertit 60 000 EUR avec un taux de 1 EUR = 11,00 MAD. Si le taux passe à 11,20 avant l\'opération, de combien la contre-valeur augmente-t-elle ?',
                        'explanation' => 'À 11,00, la conversion vaut 660 000 MAD. À 11,20, elle vaut 672 000 MAD. L\'écart est donc de 12 000 MAD.',
                        'choices' => [
                            ['choice_text' => '600 MAD', 'is_correct' => false],
                            ['choice_text' => '1 200 MAD', 'is_correct' => false],
                            ['choice_text' => '12 000 MAD', 'is_correct' => true],
                            ['choice_text' => '120 000 MAD', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Exposition au risque de change des entreprises',
                'description' => 'Reconnaître les principales expositions de change dans des situations simples de vente, d\'achat, de dette et d\'investissement.',
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine doit encaisser 2 millions USD dans trois mois. Son principal risque est lié à :',
                        'explanation' => 'Le montant est futur et libellé en USD alors que l\'entreprise peut mesurer sa performance en MAD. Le risque vient donc de la variation du change avant l\'encaissement.',
                        'choices' => [
                            ['choice_text' => 'La variation du USD/MAD avant l\'encaissement', 'is_correct' => true],
                            ['choice_text' => 'La variation du taux d\'intérêt avant l\'encaissement', 'is_correct' => false],
                            ['choice_text' => 'La variation du prix du pétrole avant l\'encaissement', 'is_correct' => false],
                            ['choice_text' => 'La variation de l\'EUR/MAD avant l\'encaissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société marocaine importe des équipements facturés en EUR et les paie dans 90 jours. Quel mouvement de change lui est défavorable si elle n\'est pas couverte ?',
                        'explanation' => 'Si l\'euro devient plus cher en dirhams avant le règlement, la facture coûtera davantage de MAD.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du taux d\'intérêt de l\'euro', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de l\'EUR contre le MAD', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du USD contre le MAD', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de l\'EUR contre le MAD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une dette en USD mais encaisse naturellement des USD provenant de ses clients. Cette situation peut-elle réduire son exposition ?',
                        'explanation' => 'Des entrées et sorties dans la même devise peuvent se compenser partiellement. Cette couverture naturelle réduit l\'exposition nette de change.',
                        'choices' => [
                            ['choice_text' => 'Oui, les recettes en USD peuvent servir à payer une partie de la dette en USD', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais les recettes en USD protègent aussi la dette contractée en euros', 'is_correct' => false],
                            ['choice_text' => 'Non, les recettes en USD augmentent le risque car elles s\'ajoutent à la dette en USD', 'is_correct' => false],
                            ['choice_text' => 'Non, car seule la date d\'échéance compte, pas la devise des flux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME reçoit des factures de fournisseurs américains et vend principalement au Maroc. Quel outil simple peut-elle utiliser pour suivre son exposition ?',
                        'explanation' => 'La gestion du risque commence par l\'identification des flux exposés, de leur montant, de leur devise et de leur date.',
                        'choices' => [
                            ['choice_text' => 'Un tableau récapitulant les montants en USD, leurs dates et les flux correspondants', 'is_correct' => true],
                            ['choice_text' => 'Un classement de ses fournisseurs selon leur chiffre d\'affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Un tableau des taux d\'inflation américains des dix dernières années', 'is_correct' => false],
                            ['choice_text' => 'Un graphique du cours historique du dollar contre le dirham sur les vingt dernières années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la date d\'un flux est-elle importante dans l\'analyse du risque de change ?',
                        'explanation' => 'Un flux futur est exposé aux variations du taux entre aujourd\'hui et la date de règlement. Le calendrier est donc essentiel.',
                        'choices' => [
                            ['choice_text' => 'Parce que les banques refusent de convertir les devises lorsque l\'échéance dépasse trente jours, quel que soit le montant', 'is_correct' => false],
                            ['choice_text' => 'Parce que le montant en devise facturé change chaque jour jusqu\'à la date de règlement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la date détermine le nombre de devises que l\'entreprise a le droit de détenir sur ses comptes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux de change au moment du règlement ou de l\'encaissement peut être différent de celui observé aujourd\'hui', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a deux flux futurs : +500 000 USD dans 30 jours et −450 000 USD dans 35 jours. Pourquoi peut-il être utile de regarder l\'exposition nette plutôt que chaque flux séparément ?',
                        'explanation' => 'Les flux dans la même devise et sur des horizons proches peuvent se compenser partiellement. L\'exposition nette donne une première vision du risque restant.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une partie des entrées et sorties en USD peut naturellement se compenser', 'is_correct' => true],
                            ['choice_text' => 'Parce que le flux le plus éloigné fixe seul le risque de change de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les deux flux ont la même date, ce qui annule tout risque de change', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque convertit en MAD le flux le plus élevé à la place de l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise marocaine facture un client français en dirhams (MAD). Qui supporte directement le risque de change sur cette facture ?',
                        'explanation' => 'La facture est libellée en MAD : l\'entreprise marocaine encaisse un montant connu dans sa propre monnaie. C\'est le client français qui supporte la variation de l\'EUR/MAD jusqu\'au paiement.',
                        'choices' => [
                            ['choice_text' => 'L\'entreprise marocaine, dont la créance varie avec l\'EUR/MAD', 'is_correct' => false],
                            ['choice_text' => 'La banque du client, qui garantit le taux de conversion', 'is_correct' => false],
                            ['choice_text' => 'Les deux parties, qui se partagent la variation du taux', 'is_correct' => false],
                            ['choice_text' => 'Le client français, qui doit acheter des dirhams pour payer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un directeur financier découvre que les équipes commerciales signent des contrats en devises sans prévenir la trésorerie. Quel problème de contrôle cela peut-il créer ?',
                        'explanation' => 'Une bonne gouvernance suppose que les nouveaux flux en devises soient identifiés rapidement afin que la trésorerie puisse mesurer et gérer l\'exposition.',
                        'choices' => [
                            ['choice_text' => 'Les contrats en devises deviennent nuls tant que la trésorerie ne les a pas validés par écrit', 'is_correct' => false],
                            ['choice_text' => 'Le prix de vente en devises est modifié par la trésorerie sans l\'accord des clients', 'is_correct' => false],
                            ['choice_text' => 'Une exposition de change peut apparaître sans être correctement identifiée ou couverte', 'is_correct' => true],
                            ['choice_text' => 'La trésorerie ne peut plus convertir les devises reçues des clients étrangers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une créance en GBP et une dette en GBP de montant proche, avec des dates similaires. Quel risque peut être réduit par cette structure ?',
                        'explanation' => 'Les flux opposés dans la même devise peuvent se neutraliser partiellement, même s\'il reste des différences de montant, de date ou de contrepartie.',
                        'choices' => [
                            ['choice_text' => 'Une partie du risque de change net en GBP', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change net sur les flux en euros', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux d\'intérêt sur les placements', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit sur les clients britanniques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise détermine qu\'elle est exposée à une baisse du dollar sur ses recettes futures. Quelle première question de gestion est raisonnable ?',
                        'explanation' => 'Une politique de couverture commence par quantifier l\'exposition, son horizon et le niveau de risque accepté avant de choisir un instrument.',
                        'choices' => [
                            ['choice_text' => 'Combien de dollars peut-elle emprunter pour profiter de la baisse du dollar ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le cours le plus bas du dollar atteint depuis dix ans, avant de prendre toute décision ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le taux d\'intérêt directeur de la banque centrale américaine cette semaine ?', 'is_correct' => false],
                            ['choice_text' => 'Quel montant est exposé, à quelle date et quelle part l\'entreprise souhaite-t-elle couvrir ?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise convertit immédiatement en MAD toute sa recette en USD dès réception, alors qu\'elle doit payer un fournisseur en USD deux semaines plus tard. Quel avantage peut présenter le fait de conserver une partie des USD ?',
                        'explanation' => 'Conserver les dollars pour un paiement proche peut éviter de convertir en MAD puis de racheter des USD, avec les coûts et spreads associés.',
                        'choices' => [
                            ['choice_text' => 'Transformer le risque de change en gain certain sur ces deux semaines', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les frais bancaires liés au règlement de chaque facture du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Éviter une double conversion inutile lorsque les USD seront bientôt nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Réduire le risque de crédit que le fournisseur fait peser sur l\'entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Forwards et couverture simple',
                'description' => 'Découvrir l\'utilisation des contrats forward pour fixer un taux futur et comprendre la logique élémentaire d\'une couverture.',
                'questions' => [
                    [
                        'question' => 'Une entreprise sait qu\'elle devra acheter 1 million USD dans 90 jours et craint une hausse du dollar. Quelle logique de couverture correspond à cette exposition ?',
                        'explanation' => 'L\'entreprise a un besoin futur d\'USD et craint que l\'USD devienne plus cher. Un forward d\'achat de USD peut verrouiller un taux futur selon les conditions convenues.',
                        'choices' => [
                            ['choice_text' => 'Acheter des dirhams au comptant pour les conserver pendant trois mois', 'is_correct' => false],
                            ['choice_text' => 'Acheter un forward USD/MAD pour fixer à l\'avance le taux d\'achat', 'is_correct' => true],
                            ['choice_text' => 'Placer ses dirhams sur un dépôt en attendant la baisse du dollar', 'is_correct' => false],
                            ['choice_text' => 'Vendre un forward USD/MAD pour fixer à l\'avance le taux de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise française recevra 500 000 USD dans trois mois et craint une baisse du dollar contre l\'euro. Quelle couverture simple peut-elle envisager ?',
                        'explanation' => 'L\'entreprise aura des USD à recevoir et craint leur dépréciation. Une vente à terme des USD peut fixer une contre-valeur en EUR à l\'avance.',
                        'choices' => [
                            ['choice_text' => 'Placer l\'équivalent en euros sur un compte rémunéré', 'is_correct' => false],
                            ['choice_text' => 'Attendre l\'encaissement puis vendre les USD au comptant', 'is_correct' => false],
                            ['choice_text' => 'Acheter des USD à terme contre EUR via un forward', 'is_correct' => false],
                            ['choice_text' => 'Vendre les USD à terme contre EUR via un forward', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt pratique d\'un forward de change pour une entreprise ?',
                        'explanation' => 'Le forward sert surtout à rendre plus prévisible la contre-valeur d\'un flux futur. Il ne garantit pas un bénéfice et ne supprime pas tous les risques.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le rendement espéré des positions en devises', 'is_correct' => false],
                            ['choice_text' => 'Réduire l\'incertitude sur le taux appliqué à un flux futur', 'is_correct' => true],
                            ['choice_text' => 'Réduire le risque de crédit de la banque contrepartie', 'is_correct' => false],
                            ['choice_text' => 'Permettre de profiter pleinement des mouvements favorables du taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise achète des USD à terme à 10,00 MAD par USD. À l\'échéance, le marché spot est à 10,60. Que peut-on dire, en première approximation, de sa couverture ?',
                        'explanation' => 'Le forward lui permet d\'acheter les USD au taux convenu de 10,00, ce qui la protège contre la hausse du dollar. La valeur économique exacte dépend des modalités de règlement.',
                        'choices' => [
                            ['choice_text' => 'Elle paie 10,00 au lieu de subir le taux spot de 10,60 pour le montant couvert', 'is_correct' => true],
                            ['choice_text' => 'Elle paie 10,60 car le forward s\'aligne sur le taux spot à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Elle paie 10,30, soit la moyenne entre le forward et le taux spot', 'is_correct' => false],
                            ['choice_text' => 'Elle perd 0,60 MAD par dollar car le forward lui coûte plus cher que le taux spot du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a couvert un achat futur de USD avec un forward. À l\'échéance, le spot est plus favorable que le taux du forward. Quel est le compromis classique ?',
                        'explanation' => 'Une couverture réduit l\'incertitude mais peut empêcher de bénéficier entièrement d\'une évolution de marché devenue favorable.',
                        'choices' => [
                            ['choice_text' => 'Le forward permet de profiter pleinement du mouvement favorable tout en conservant la prévisibilité obtenue', 'is_correct' => false],
                            ['choice_text' => 'Le contrat est annulé à l\'échéance lorsque le spot est plus favorable et l\'entreprise revient au taux du marché', 'is_correct' => false],
                            ['choice_text' => 'La prévisibilité obtenue a un coût d\'opportunité : l\'entreprise ne profite pas pleinement du mouvement favorable', 'is_correct' => true],
                            ['choice_text' => 'Le forward perd sa valeur dès que le marché évolue et doit être renégocié par la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle connaître le montant et la date du flux avant de mettre en place une couverture forward ?',
                        'explanation' => 'Le montant, la devise et l\'échéance doivent correspondre au mieux au flux exposé pour éviter une couverture insuffisante ou excessive.',
                        'choices' => [
                            ['choice_text' => 'Parce que le contrat doit être cohérent avec l\'exposition à couvrir', 'is_correct' => true],
                            ['choice_text' => 'Parce que la date et le montant déterminent l\'impôt dû sur le gain de change', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque choisit la devise du contrat à la place de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la banque refuse de couvrir les flux de moins de six mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 300 000 USD dans 60 jours et vend ces USD à terme contre EUR. Quelle position cherche-t-elle principalement à protéger ?',
                        'explanation' => 'La couverture vise à protéger la contre-valeur en EUR des USD qui seront encaissés plus tard.',
                        'choices' => [
                            ['choice_text' => 'Le niveau du taux d\'intérêt appliqué à ses dépôts en euros', 'is_correct' => false],
                            ['choice_text' => 'La valeur en EUR de ses dettes futures en USD', 'is_correct' => false],
                            ['choice_text' => 'La valeur en USD de ses recettes futures en EUR', 'is_correct' => false],
                            ['choice_text' => 'La valeur en EUR de ses recettes futures en USD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le forward de change est-il identique à une conversion spot immédiate ?',
                        'explanation' => 'Le principe du forward est précisément de fixer aujourd\'hui un taux pour une transaction dont l\'échéance est future.',
                        'choices' => [
                            ['choice_text' => 'Non, le taux est fixé le jour de l\'échéance mais l\'accord est signé aujourd\'hui', 'is_correct' => false],
                            ['choice_text' => 'Non, le taux est convenu maintenant mais l\'opération concerne une date future', 'is_correct' => true],
                            ['choice_text' => 'Non, le forward est une option que l\'entreprise peut abandonner à l\'échéance', 'is_correct' => false],
                            ['choice_text' => 'Oui, c\'est un autre nom donné au change au comptant dans les banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise décide de couvrir seulement 70 % d\'un flux futur en USD. Quel risque reste-t-il sur les 30 % non couverts ?',
                        'explanation' => 'La portion non couverte continue d\'évoluer avec le marché. La couverture réduit l\'exposition mais ne la supprime pas entièrement.',
                        'choices' => [
                            ['choice_text' => 'Un risque d\'inflation sur la partie non couverte', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux d\'intérêt sur l\'ensemble du flux', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change sur la partie non couverte', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change sur la partie couverte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME veut se protéger contre une hausse du dollar mais tient à profiter d\'une baisse du dollar si elle se produit. Quel instrument peut offrir cette asymétrie, selon ses coûts et caractéristiques ?',
                        'explanation' => 'Une option peut offrir un droit, et non une obligation, d\'échanger à un niveau convenu. Elle peut donc protéger contre un mouvement défavorable tout en laissant un potentiel de bénéfice sur un mouvement favorable, en contrepartie d\'une prime.',
                        'choices' => [
                            ['choice_text' => 'Un swap de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Une option de change', 'is_correct' => true],
                            ['choice_text' => 'Un forward de change', 'is_correct' => false],
                            ['choice_text' => 'Un compte en devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut constituer un risque résiduel même après une couverture de change correctement mise en place ?',
                        'explanation' => 'Une couverture imparfaitement alignée peut laisser un risque résiduel, notamment si le montant, la devise, la date ou le type de flux ne correspondent pas exactement.',
                        'choices' => [
                            ['choice_text' => 'Un décalage de montant ou de date entre le flux couvert et le contrat', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du taux d\'intérêt directeur de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Le fait que le contrat ait été conclu avec une banque locale plutôt qu\'étrangère', 'is_correct' => false],
                            ['choice_text' => 'Une variation du taux forward pendant la durée du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exportatrice reçoit des USD tous les mois mais les montants varient fortement. Pourquoi une couverture exacte peut-elle être difficile ?',
                        'explanation' => 'Lorsque le montant futur est incertain, fixer trop de couverture peut créer une position excédentaire. Le choix du niveau de couverture doit tenir compte de cette incertitude.',
                        'choices' => [
                            ['choice_text' => 'Parce que les montants variables sont convertis par la banque à un taux moyen annuel fixé en janvier', 'is_correct' => false],
                            ['choice_text' => 'Parce que le forward ne peut porter que sur des montants mensuels identiques, quelle que soit la devise', 'is_correct' => false],
                            ['choice_text' => 'Parce que les montants futurs sont incertains, ce qui crée un risque de sur-couverture ou de sous-couverture', 'is_correct' => true],
                            ['choice_text' => 'Parce que la banque refuse de coter le dollar lorsque les flux d\'un exportateur varient d\'un mois sur l\'autre', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Parité de pouvoir d\'achat et taux d\'intérêt : premières intuitions',
                'description' => 'Acquérir les intuitions essentielles derrière la PPP, les écarts d\'inflation et les différences de taux d\'intérêt sans entrer dans des modèles avancés.',
                'questions' => [
                    [
                        'question' => 'La logique de base de la parité de pouvoir d\'achat (PPP) relie principalement les taux de change aux différences de :',
                        'explanation' => 'La PPP cherche à relier la valeur relative des monnaies aux différences de niveaux de prix ou d\'inflation, selon la version considérée.',
                        'choices' => [
                            ['choice_text' => 'Niveaux de taux d\'intérêt entre pays', 'is_correct' => false],
                            ['choice_text' => 'Niveaux de salaires entre secteurs', 'is_correct' => false],
                            ['choice_text' => 'Rythmes de croissance du PIB entre pays', 'is_correct' => false],
                            ['choice_text' => 'Niveaux ou rythmes de prix entre pays', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si l\'inflation est durablement plus élevée dans un pays que chez ses partenaires, que suggère l\'intuition de la PPP à long terme ?',
                        'explanation' => 'Selon l\'intuition de la PPP, une inflation plus élevée réduit le pouvoir d\'achat relatif d\'une monnaie et peut être associée à une dépréciation à long terme.',
                        'choices' => [
                            ['choice_text' => 'Sa monnaie peut subir une pression à la hausse en valeur relative', 'is_correct' => false],
                            ['choice_text' => 'Sa monnaie garde la même valeur relative tant que le PIB progresse', 'is_correct' => false],
                            ['choice_text' => 'Sa monnaie peut subir une pression à la baisse en valeur relative', 'is_correct' => true],
                            ['choice_text' => 'Les prix de ses exportations montent, ce qui renforce sa monnaie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux pays ont des paniers identiques et, de façon très simplifiée, ne subissent aucune autre friction. Pourquoi la PPP absolue s\'intéresse-t-elle au taux de change ?',
                        'explanation' => 'La PPP absolue part de l\'idée qu\'un panier comparable devrait avoir une valeur similaire une fois converti dans une même monnaie, sous des hypothèses très simplificatrices.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer le rendement des obligations dans les deux pays', 'is_correct' => false],
                            ['choice_text' => 'Pour relier le prix du même panier dans les deux monnaies', 'is_correct' => true],
                            ['choice_text' => 'Pour relier le taux d\'inflation et le taux d\'intérêt de chaque pays', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer l\'écart entre le taux spot et le taux forward', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la PPP n\'explique-t-elle pas parfaitement les taux de change observés à court terme ?',
                        'explanation' => 'Les marchés réels comportent de nombreuses frictions et d\'autres facteurs financiers. La PPP constitue donc une référence, pas une règle parfaite à court terme.',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'il existe des biens non échangeables, des coûts de transport, des taxes, des écarts de productivité et des mouvements de capitaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que les taux de change dépendent de la balance commerciale et non du niveau des prix, que ce soit à court terme ou à long terme', 'is_correct' => false],
                            ['choice_text' => 'Parce que la PPP ne s\'applique qu\'aux devises des pays émergents, dont les prix sont plus instables que ceux des pays riches', 'is_correct' => false],
                            ['choice_text' => 'Parce que les banques centrales fixent chaque jour le taux de change à partir de l\'indice des prix à la consommation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du taux d\'intérêt domestique par rapport à l\'étranger peut-elle influencer le marché des changes ?',
                        'explanation' => 'Les écarts de taux peuvent influencer les flux de capitaux et la demande de devises, même si le résultat observé dépend de nombreux autres facteurs.',
                        'choices' => [
                            ['choice_text' => 'Oui, car elle fait baisser la valeur de la devise sur le marché des changes', 'is_correct' => false],
                            ['choice_text' => 'Non, car seuls les flux commerciaux influencent le marché des changes', 'is_correct' => false],
                            ['choice_text' => 'Non, car le taux d\'intérêt n\'agit que sur le crédit immobilier et pas sur les devises', 'is_correct' => false],
                            ['choice_text' => 'Oui, parce qu\'elle peut modifier l\'attrait relatif des placements dans cette devise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'L\'intérêt de la parité des taux d\'intérêt (Interest Rate Parity) est notamment de relier :',
                        'explanation' => 'La parité de taux d\'intérêt met en relation les différences de taux d\'intérêt entre deux monnaies et l\'écart entre leurs taux spot et forward, sous certaines hypothèses.',
                        'choices' => [
                            ['choice_text' => 'Les taux d\'intérêt, le spot et le forward', 'is_correct' => true],
                            ['choice_text' => 'Les taux de croissance du PIB et le chômage', 'is_correct' => false],
                            ['choice_text' => 'Les taux d\'intérêt et les cours boursiers', 'is_correct' => false],
                            ['choice_text' => 'Les taux d\'inflation et les prix de deux paniers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un pays offre un taux d\'intérêt nettement supérieur, peut-on conclure automatiquement que sa monnaie donnera le meilleur rendement à un investisseur étranger ?',
                        'explanation' => 'Un taux d\'intérêt plus élevé ne suffit pas à déterminer le rendement dans la monnaie de l\'investisseur. Le change peut augmenter ou réduire fortement la performance.',
                        'choices' => [
                            ['choice_text' => 'Non, car le taux d\'intérêt n\'a pas d\'effet sur le rendement d\'un placement en devise', 'is_correct' => false],
                            ['choice_text' => 'Non, car le gain d\'intérêt peut être compensé par une variation défavorable du taux de change', 'is_correct' => true],
                            ['choice_text' => 'Oui, car le taux de change d\'une devise à fort taux d\'intérêt finit par s\'apprécier', 'is_correct' => false],
                            ['choice_text' => 'Oui, car un taux d\'intérêt supérieur assure un rendement supérieur pour l\'investisseur étranger', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur compare un dépôt en EUR à 2 % et un dépôt en USD à 4 %. Pourquoi le seul écart de taux ne suffit-il pas à choisir l\'option ?',
                        'explanation' => 'Le rendement final dépend du taux du placement mais aussi de la variation de change et des autres caractéristiques du placement.',
                        'choices' => [
                            ['choice_text' => 'Parce que les taux d\'intérêt sont fixés par la banque du client et non par le marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'inflation américaine annule à elle seule l\'écart de 2 points', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il faut aussi tenir compte du risque et de l\'évolution EUR/USD', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'écart de taux de 2 points est trop faible pour compter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une monnaie se déprécie de 6 % contre l\'euro alors que son taux d\'intérêt est supérieur de 3 points. Que faut-il retenir à un niveau débutant ?',
                        'explanation' => 'L\'investisseur doit regarder le rendement total dans sa monnaie de référence. Une baisse de la devise peut plus que compenser l\'avantage de taux.',
                        'choices' => [
                            ['choice_text' => 'Le différentiel de taux compense la dépréciation de la monnaie', 'is_correct' => false],
                            ['choice_text' => 'Le placement rapporte 3 % dans la monnaie de l\'investisseur', 'is_correct' => false],
                            ['choice_text' => 'La dépréciation de 6 % n\'affecte que la valeur des devises détenues en espèces', 'is_correct' => false],
                            ['choice_text' => 'Le différentiel de taux n\'empêche pas une perte potentielle liée au change', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la PPP est-elle souvent présentée comme une intuition de long terme plutôt qu\'une règle de trading quotidien ?',
                        'explanation' => 'Les écarts de prix peuvent mettre du temps à se corriger et les flux financiers, les anticipations et les chocs peuvent dominer les mouvements de court terme.',
                        'choices' => [
                            ['choice_text' => 'Parce que les écarts de prix entre pays se corrigent en quelques heures sur les marchés financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce que les banques centrales ne publient le taux d\'équilibre de PPP qu\'une fois par an', 'is_correct' => false],
                            ['choice_text' => 'Parce que la PPP ne s\'applique qu\'aux devises des grandes économies et non à celles des économies émergentes ou en développement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix et les économies s\'ajustent lentement et que de nombreux facteurs financiers dominent à court terme', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Situations pratiques de change',
                'description' => 'Mini-cas inspirés de la gestion quotidienne des devises pour une entreprise, un investisseur ou un particulier.',
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine commande des marchandises américaines pour 100 000 USD. Le fournisseur exige le paiement dans 45 jours. Le directeur financier demande quel élément doit être surveillé en priorité. Que lui répondez-vous ?',
                        'explanation' => 'La facture future est en USD alors que l\'entreprise doit probablement financer le paiement en MAD. Le taux USD/MAD et la couverture sont donc centraux.',
                        'choices' => [
                            ['choice_text' => 'Le cours USD/MAD et la politique de couverture de l\'entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le cours USD/JPY et le taux directeur de la banque du Japon', 'is_correct' => false],
                            ['choice_text' => 'Le cours EUR/MAD et le calendrier de paiement des salaires du personnel', 'is_correct' => false],
                            ['choice_text' => 'Le taux d\'inflation français et le cours du pétrole brut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une exportatrice marocaine facture 250 000 USD à un client américain et doit encaisser dans 60 jours. Elle préfère connaître dès aujourd\'hui sa contre-valeur minimale en MAD. Quelle démarche correspond à cet objectif ?',
                        'explanation' => 'La vente à terme des USD peut permettre de fixer à l\'avance une contre-valeur, selon les conditions du contrat et le niveau de couverture choisi.',
                        'choices' => [
                            ['choice_text' => 'Placer les futurs dollars sur un compte rémunéré en USD', 'is_correct' => false],
                            ['choice_text' => 'Attendre l\'échéance puis vendre les USD au taux du jour', 'is_correct' => false],
                            ['choice_text' => 'Étudier une couverture à terme du montant prévu en USD', 'is_correct' => true],
                            ['choice_text' => 'Acheter dès aujourd\'hui des USD à terme contre des MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant détient 2 000 USD sur un compte en dollars. Le taux USD/MAD monte de 9,50 à 10,20. En supposant qu\'il ne paie ni frais ni impôts, quelle contre-valeur en MAD aurait-il à la nouvelle cotation ?',
                        'explanation' => '2 000 × 10,20 = 20 400 MAD. La hausse du dollar augmente ici la contre-valeur en dirhams.',
                        'choices' => [
                            ['choice_text' => '2 040 MAD', 'is_correct' => false],
                            ['choice_text' => '19 000 MAD', 'is_correct' => false],
                            ['choice_text' => '20 400 MAD', 'is_correct' => true],
                            ['choice_text' => '21 900 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une PME reçoit 500 000 EUR d\'un client européen mais doit verser 450 000 EUR à un fournisseur européen quelques jours plus tard. Quelle stratégie naturelle peut réduire l\'exposition au change ?',
                        'explanation' => 'Les encaissements et décaissements dans la même devise peuvent être compensés directement. Cela évite une conversion inutile et réduit l\'exposition nette.',
                        'choices' => [
                            ['choice_text' => 'Convertir les EUR reçus en USD le temps de payer le fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Conserver une partie des EUR reçus pour payer directement la facture', 'is_correct' => true],
                            ['choice_text' => 'Convertir immédiatement la totalité des EUR en MAD puis racheter des EUR', 'is_correct' => false],
                            ['choice_text' => 'Vendre à terme en MAD les 450 000 EUR dus au fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société paie ses fournisseurs en USD mais vend ses produits en EUR. Quelle situation décrit le mieux son exposition ?',
                        'explanation' => 'Les coûts et recettes sont dans deux devises différentes. Une variation du taux EUR/USD peut donc modifier la marge de l\'entreprise.',
                        'choices' => [
                            ['choice_text' => 'Elle a un décalage de devises entre coûts et recettes', 'is_correct' => true],
                            ['choice_text' => 'Elle a un excédent de recettes en USD à convertir', 'is_correct' => false],
                            ['choice_text' => 'Elle supporte surtout un risque de taux d\'intérêt', 'is_correct' => false],
                            ['choice_text' => 'Elle est protégée, car coûts et recettes sont en devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur marocain achète un ETF coté en dollars. L\'ETF monte de 4 % en USD, mais le dollar baisse de 7 % contre le dirham sur la même période. Quelle affirmation est la plus prudente ?',
                        'explanation' => 'La performance dans la devise locale dépend à la fois de l\'actif et du change. Ici, la baisse du dollar peut plus que compenser la hausse de l\'ETF.',
                        'choices' => [
                            ['choice_text' => 'La performance en MAD est de +11 %, car la baisse du dollar s\'ajoute à la hausse de l\'ETF', 'is_correct' => false],
                            ['choice_text' => 'L\'investisseur perd 7 %, car la hausse de l\'ETF est annulée par la baisse du dollar', 'is_correct' => false],
                            ['choice_text' => 'La performance en MAD est de +4 %, car l\'ETF s\'apprécie en dollars', 'is_correct' => false],
                            ['choice_text' => 'La performance en MAD peut être négative malgré la hausse de 4 % de l\'ETF en USD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un particulier marocain prévoit un séjour en Espagne dans quatre mois et craint une hausse de l\'euro. Quelle démarche simple peut limiter ce risque ?',
                        'explanation' => 'Acheter une partie des euros à l\'avance fixe le taux sur ce montant et protège contre une hausse de l\'euro, au prix d\'une moindre flexibilité. Attendre le départ laisse tout le budget exposé.',
                        'choices' => [
                            ['choice_text' => 'Vendre à terme des euros contre des dirhams pour le séjour', 'is_correct' => false],
                            ['choice_text' => 'Acheter dès maintenant une partie des euros dont il aura besoin', 'is_correct' => true],
                            ['choice_text' => 'Acheter des dollars pour compenser une éventuelle hausse de l\'euro', 'is_correct' => false],
                            ['choice_text' => 'Attendre le jour du départ pour convertir la totalité de son budget', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite entre un taux spot immédiat et un taux forward pour un paiement en USD dans trois mois. Quel est le point essentiel à comparer ?',
                        'explanation' => 'Le choix dépend du profil d\'exposition, de la priorité donnée à la prévisibilité et des conditions proposées, notamment le taux et les coûts.',
                        'choices' => [
                            ['choice_text' => 'Le montant du capital social de l\'entreprise et le nombre de ses actionnaires principaux et minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de succursales de la banque et sa cotation en Bourse', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de certitude sur le futur taux, le coût de la couverture et le risque accepté', 'is_correct' => true],
                            ['choice_text' => 'Le taux directeur de la banque centrale américaine et l\'inflation européenne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque affiche USD/MAD 10,0200 / 10,0600. Une entreprise doit acheter 100 000 USD. Quel montant théorique en MAD paie-t-elle avant frais supplémentaires ?',
                        'explanation' => 'Comme l\'entreprise achète les USD, elle paie le prix ask : 100 000 × 10,0600 = 1 006 000 MAD.',
                        'choices' => [
                            ['choice_text' => '10 060 MAD', 'is_correct' => false],
                            ['choice_text' => '100 600 MAD', 'is_correct' => false],
                            ['choice_text' => '1 002 000 MAD', 'is_correct' => false],
                            ['choice_text' => '1 006 000 MAD', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un particulier doit recevoir 5 000 EUR sur son compte en MAD. Le taux EUR/MAD passe de 10,90 à 10,60 avant la conversion. Quel est l\'effet, hors frais ?',
                        'explanation' => '5 000 × 10,90 = 54 500 MAD, contre 5 000 × 10,60 = 53 000 MAD. La baisse du cours EUR/MAD réduit donc la contre-valeur.',
                        'choices' => [
                            ['choice_text' => 'Il reçoit moins de MAD qu\'il ne l\'aurait fait au premier taux', 'is_correct' => true],
                            ['choice_text' => 'Il reçoit 500 euros de moins sur son compte en MAD', 'is_correct' => false],
                            ['choice_text' => 'Il reçoit plus de MAD qu\'au premier taux car l\'euro s\'est renforcé', 'is_correct' => false],
                            ['choice_text' => 'Il reçoit autant de MAD, la baisse étant compensée par la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise tient une prévision de trésorerie pour les 12 prochaines semaines. Pourquoi est-il utile d\'y identifier les flux en devises ?',
                        'explanation' => 'Une prévision de trésorerie bien structurée permet de repérer les besoins et excédents en devises et de décider où une couverture ou une conversion est pertinente.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir l\'évolution du taux de change à douze semaines', 'is_correct' => false],
                            ['choice_text' => 'Pour estimer l\'exposition de change par montant et par date', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer le résultat comptable annuel de l\'entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir à l\'avance la banque qui accordera le crédit de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société pense que le dollar va baisser et décide de ne rien couvrir sur une recette USD future. Quel risque prend-elle ?',
                        'explanation' => 'Ne pas couvrir ne supprime pas le risque : l\'entreprise conserve l\'exposition aux mouvements du taux jusqu\'à l\'encaissement et la conversion.',
                        'choices' => [
                            ['choice_text' => 'Elle accepte le risque que la facture en dollars soit annulée par sa banque', 'is_correct' => false],
                            ['choice_text' => 'Elle accepte le risque que le taux de change soit fixé à un niveau moins favorable par la banque dès aujourd\'hui', 'is_correct' => false],
                            ['choice_text' => 'Elle accepte le risque que le client refuse de payer si le dollar baisse trop', 'is_correct' => false],
                            ['choice_text' => 'Elle accepte le risque que la contre-valeur en monnaie locale soit plus faible au moment de l\'encaissement', 'is_correct' => true],
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
