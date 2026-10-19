```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMarketsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-markets')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Ingénierie des marchés et microstructure avancée',
                'questions' => [
                    [
                        'question' => 'Dans un marché dirigé par les ordres, quel élément influence directement la priorité d’exécution ?',
                        'answers' => [
                            ['text' => 'Le prix puis, à prix égal, le temps d’arrivée de l’ordre', 'iscorrect' => true],
                            ['text' => 'La taille historique de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Le montant du dividende annuel', 'iscorrect' => false],
                            ['text' => 'La nationalité du détenteur du compte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène décrit le mieux l’adverse selection pour un fournisseur de liquidité ?',
                        'answers' => [
                            ['text' => 'Le risque d’être exécuté principalement lorsque la contrepartie dispose d’une information supérieure', 'iscorrect' => true],
                            ['text' => 'Le risque de recevoir un dividende inférieur aux prévisions', 'iscorrect' => false],
                            ['text' => 'Le risque de payer deux fois une commission', 'iscorrect' => false],
                            ['text' => 'Le risque de voir disparaître la valeur nominale d’une action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un market maker professionnel ?',
                        'answers' => [
                            ['text' => 'Fournir continuellement de la liquidité tout en gérant son inventaire et ses risques', 'iscorrect' => true],
                            ['text' => 'Garantir une hausse du marché', 'iscorrect' => false],
                            ['text' => 'Éliminer toute volatilité', 'iscorrect' => false],
                            ['text' => 'Détenir systématiquement tous les titres jusqu’à leur échéance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le spread d’un market maker peut-il s’élargir fortement pendant une période de stress ?',
                        'answers' => [
                            ['text' => 'Parce que l’incertitude, le risque d’inventaire et le risque d’information peuvent augmenter', 'iscorrect' => true],
                            ['text' => 'Parce que les dividendes deviennent automatiquement nuls', 'iscorrect' => false],
                            ['text' => 'Parce que tous les investisseurs deviennent nécessairement acheteurs', 'iscorrect' => false],
                            ['text' => 'Parce que la valeur fondamentale devient juridiquement fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le market impact d’un ordre institutionnel important ?',
                        'answers' => [
                            ['text' => 'La variation défavorable du prix liée à l’exécution progressive de l’ordre dans une liquidité limitée', 'iscorrect' => true],
                            ['text' => 'Le rendement garanti par l’exchange', 'iscorrect' => false],
                            ['text' => 'Le dividende payé à l’investisseur', 'iscorrect' => false],
                            ['text' => 'La valeur nominale du titre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est généralement utilisée pour réduire l’impact de marché d’un ordre important ?',
                        'answers' => [
                            ['text' => 'Fractionner l’exécution et adapter son rythme aux conditions de liquidité', 'iscorrect' => true],
                            ['text' => 'Exécuter systématiquement tout le volume au même instant', 'iscorrect' => false],
                            ['text' => 'Ignorer la profondeur du carnet', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement des ordres sans contrainte de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche à mesurer une analyse de slippage ?',
                        'answers' => [
                            ['text' => 'L’écart entre le prix théorique ou de référence et le prix réellement obtenu', 'iscorrect' => true],
                            ['text' => 'Le montant des dividendes futurs', 'iscorrect' => false],
                            ['text' => 'Le niveau d’endettement de l’émetteur', 'iscorrect' => false],
                            ['text' => 'La valeur comptable du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité affichée dans un carnet peut-elle surestimer la liquidité réellement disponible ?',
                        'answers' => [
                            ['text' => 'Certains ordres peuvent être retirés avant leur exécution ou devenir moins accessibles lors d’un mouvement rapide', 'iscorrect' => true],
                            ['text' => 'Parce que les prix affichés sont toujours faux', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ne permettent jamais l’exécution électronique', 'iscorrect' => false],
                            ['text' => 'Parce que la liquidité ne dépend jamais du volume', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement pertinent pour évaluer la qualité d’exécution ?',
                        'answers' => [
                            ['text' => Le prix moyen obtenu comparé à une référence d’exécution appropriée', 'iscorrect' => true],
                            ['text' => 'Le nombre d’employés de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Le montant du capital social uniquement', 'iscorrect' => false],
                            ['text' => 'La date de création de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie d’exécution optimale dépend-elle du contexte ?',
                        'answers' => [
                            ['text' => 'Parce que l’urgence, la liquidité, la volatilité, la taille de l’ordre et les coûts interagissent', 'iscorrect' => true],
                            ['text' => 'Parce qu’un seul algorithme est optimal pour tous les marchés', 'iscorrect' => false],
                            ['text' => 'Parce que les prix ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que la taille de l’ordre n’a aucun effet', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Allocation stratégique et gestion institutionnelle',
                'questions' => [
                    [
                        'question' => 'Quelle distinction est fondamentale entre allocation stratégique et allocation tactique ?',
                        'answers' => [
                            ['text' => 'L’allocation stratégique définit les objectifs de long terme tandis que l’allocation tactique ajuste temporairement les expositions', 'iscorrect' => true],
                            ['text' => 'L’allocation stratégique concerne uniquement les actions', 'iscorrect' => false],
                            ['text' => 'L’allocation tactique élimine le risque de marché', 'iscorrect' => false],
                            ['text' => 'Les deux approches sont strictement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les engagements futurs d’un investisseur institutionnel influencent-ils son allocation ?',
                        'answers' => [
                            ['text' => 'Parce que la structure des passifs détermine les besoins de liquidité, de duration et de couverture', 'iscorrect' => true],
                            ['text' => 'Parce que les passifs n’ont aucun rapport avec le portefeuille', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils déterminent uniquement le nombre de titres détenus', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils garantissent le rendement des actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’ALM dans une institution financière ?',
                        'answers' => [
                            ['text' => 'La gestion coordonnée des actifs et des passifs afin de maîtriser les risques financiers', 'iscorrect' => true],
                            ['text' => 'Une méthode de calcul des dividendes', 'iscorrect' => false],
                            ['text' => 'Une stratégie exclusivement dédiée aux actions', 'iscorrect' => false],
                            ['text' => 'Une méthode d’analyse technique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de duration est-il important pour un investisseur ayant des engagements à long terme ?',
                        'answers' => [
                            ['text' => 'Une variation des taux peut modifier fortement la valeur actuelle des actifs et des engagements', 'iscorrect' => true],
                            ['text' => 'La duration mesure uniquement le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Les engagements longs sont indépendants des taux', 'iscorrect' => false],
                            ['text' => 'La duration garantit un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du liability-driven investment, ou LDI ?',
                        'answers' => [
                            ['text' => 'Construire le portefeuille en tenant explicitement compte de la nature et de la sensibilité des engagements', 'iscorrect' => true],
                            ['text' => 'Investir uniquement dans les actifs les plus risqués', 'iscorrect' => false],
                            ['text' => 'Ignorer les besoins futurs de trésorerie', 'iscorrect' => false],
                            ['text' => 'Maximiser uniquement le rendement historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser une allocation excessive à des actifs illiquides ?',
                        'answers' => [
                            ['text' => 'Elle peut rendre difficile la mobilisation rapide de liquidités lorsque les besoins augmentent', 'iscorrect' => true],
                            ['text' => 'Elle garantit une liquidité supérieure', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de valorisation', 'iscorrect' => false],
                            ['text' => 'Elle garantit toujours une prime de rendement suffisante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les corrélations doivent-elles être surveillées dans un portefeuille institutionnel ?',
                        'answers' => [
                            ['text' => 'Parce que les relations entre actifs peuvent changer, notamment pendant les périodes de crise', 'iscorrect' => true],
                            ['text' => 'Parce que les corrélations sont toujours constantes', 'iscorrect' => false],
                            ['text' => 'Parce qu’une corrélation élevée garantit la diversification', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles déterminent uniquement les coupons', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une allocation factorielle ?',
                        'answers' => [
                            ['text' => 'Elle permet d’analyser et de gérer les expositions à des facteurs de risque et de rendement communs', 'iscorrect' => true],
                            ['text' => 'Elle élimine tous les facteurs de risque', 'iscorrect' => false],
                            ['text' => 'Elle remplace toutes les données de marché', 'iscorrect' => false],
                            ['text' => 'Elle garantit une surperformance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une institution peut-elle imposer des limites d’exposition par classe d’actifs ?',
                        'answers' => [
                            ['text' => 'Pour contrôler la concentration et maintenir le portefeuille dans un cadre de risque acceptable', 'iscorrect' => true],
                            ['text' => 'Pour garantir que chaque actif ait le même rendement', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les coûts de transaction', 'iscorrect' => false],
                            ['text' => 'Pour empêcher toute diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est central dans une politique d’investissement institutionnelle robuste ?',
                        'answers' => [
                            ['text' => 'Aligner les objectifs, contraintes, risques, horizon, liquidité et gouvernance', 'iscorrect' => true],
                            ['text' => 'Choisir uniquement les actifs les plus performants historiquement', 'iscorrect' => false],
                            ['text' => 'Ignorer les contraintes réglementaires', 'iscorrect' => false],
                            ['text' => 'Modifier les objectifs après chaque mouvement de marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion avancée des risques de marché',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la Value at Risk, ou VaR ?',
                        'answers' => [
                            ['text' => 'Une perte potentielle estimée pour un horizon et un niveau de confiance donnés', 'iscorrect' => true],
                            ['text' => 'La perte maximale absolument possible', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti du portefeuille', 'iscorrect' => false],
                            ['text' => 'Le montant exact de la perte future', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante de la VaR ?',
                        'answers' => [
                            ['text' => 'Elle ne décrit pas nécessairement la gravité des pertes au-delà du seuil de VaR', 'iscorrect' => true],
                            ['text' => 'Elle ne peut jamais être calculée', 'iscorrect' => false],
                            ['text' => 'Elle garantit les performances futures', 'iscorrect' => false],
                            ['text' => 'Elle mesure uniquement le risque opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’Expected Shortfall ?',
                        'answers' => [
                            ['text' => 'La perte moyenne conditionnelle dans les scénarios situés au-delà du seuil de VaR', 'iscorrect' => true],
                            ['text' => 'Le rendement moyen de tous les actifs', 'iscorrect' => false],
                            ['text' => 'Le taux de dividende futur', 'iscorrect' => false],
                            ['text' => 'La valeur nominale du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les risques non linéaires sont-ils difficiles à mesurer avec des approximations simples ?',
                        'answers' => [
                            ['text' => 'Parce que la relation entre les facteurs de risque et la valeur du portefeuille peut être fortement courbée', 'iscorrect' => true],
                            ['text' => 'Parce que les dérivés n’ont jamais de valeur', 'iscorrect' => false],
                            ['text' => 'Parce que les actions sont toujours linéaires', 'iscorrect' => false],
                            ['text' => 'Parce que les taux sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un backtesting d’un modèle de risque ?',
                        'answers' => [
                            ['text' => 'Comparer les pertes ou résultats réellement observés avec les estimations du modèle', 'iscorrect' => true],
                            ['text' => 'Garantir que le modèle ne sera jamais dépassé', 'iscorrect' => false],
                            ['text' => 'Supprimer toutes les erreurs statistiques', 'iscorrect' => false],
                            ['text' => 'Remplacer les données historiques par des hypothèses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de risque doit-il être soumis à des stress tests en plus de la VaR ?',
                        'answers' => [
                            ['text' => 'Parce que les événements extrêmes peuvent être mal représentés par les distributions utilisées dans un modèle standard', 'iscorrect' => true],
                            ['text' => 'Parce que la VaR mesure uniquement les bénéfices', 'iscorrect' => false],
                            ['text' => 'Parce que les stress tests garantissent les prix futurs', 'iscorrect' => false],
                            ['text' => 'Parce que les crises sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le basis risk dans une couverture ?',
                        'answers' => [
                            ['text' => 'Le risque que le prix du dérivé et celui de l’exposition couverte n’évoluent pas exactement de la même manière', 'iscorrect' => true],
                            ['text' => 'Le risque d’une baisse certaine du marché', 'iscorrect' => false],
                            ['text' => 'Le risque de recevoir un dividende', 'iscorrect' => false],
                            ['text' => 'Le risque de défaut uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une concentration élevée sur un portefeuille ?',
                        'answers' => [
                            ['text' => 'Elle augmente la sensibilité du portefeuille aux événements défavorables affectant l’exposition concentrée', 'iscorrect' => true],
                            ['text' => 'Elle garantit une meilleure diversification', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque spécifique', 'iscorrect' => false],
                            ['text' => 'Elle rend la volatilité nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de modèle est-il important en gestion des risques financiers ?',
                        'answers' => [
                            ['text' => 'Un modèle mal spécifié ou utilisé hors de son domaine de validité peut produire des estimations trompeuses', 'iscorrect' => true],
                            ['text' => 'Les modèles sont toujours parfaitement exacts', 'iscorrect' => false],
                            ['text' => 'Le risque de modèle ne concerne que la comptabilité', 'iscorrect' => false],
                            ['text' => 'Les modèles éliminent l’incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe améliore généralement la gouvernance d’un modèle de risque ?',
                        'answers' => [
                            ['text' => 'Validation indépendante, documentation, suivi des performances et réexamen régulier des hypothèses', 'iscorrect' => true],
                            ['text' => 'Utilisation du modèle sans documentation', 'iscorrect' => false],
                            ['text' => 'Modification permanente des résultats pour éviter les exceptions', 'iscorrect' => false],
                            ['text' => 'Suppression du backtesting', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marchés obligataires professionnels et crédit',
                'questions' => [
                    [
                        'question' => 'Quelle composante distingue principalement le risque de spread du risque de taux sans risque ?',
                        'answers' => [
                            ['text' => 'Le spread reflète notamment la prime exigée pour le risque de crédit et d’autres risques propres à l’émetteur', 'iscorrect' => true],
                            ['text' => 'Le spread mesure uniquement la maturité', 'iscorrect' => false],
                            ['text' => 'Le spread est toujours nul pour les obligations risquées', 'iscorrect' => false],
                            ['text' => 'Le spread correspond uniquement au coupon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un spread de crédit qui s’élargit fortement peut signaler ?',
                        'answers' => [
                            ['text' => 'Une perception accrue du risque de crédit ou une détérioration de la liquidité', 'iscorrect' => true],
                            ['text' => 'Une disparition automatique du risque de défaut', 'iscorrect' => false],
                            ['text' => 'Une hausse certaine du prix de l’obligation', 'iscorrect' => false],
                            ['text' => 'Une baisse garantie des taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de recouvrement est-il important dans l’analyse du risque de crédit ?',
                        'answers' => [
                            ['text' => 'Il influence la perte attendue en cas de défaut', 'iscorrect' => true],
                            ['text' => 'Il détermine uniquement la maturité', 'iscorrect' => false],
                            ['text' => 'Il mesure uniquement la volatilité des actions', 'iscorrect' => false],
                            ['text' => 'Il garantit l’absence de défaut', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche simplifiée, la perte attendue de crédit dépend notamment de :',
                        'answers' => [
                            ['text' => 'La probabilité de défaut, l’exposition au défaut et la perte en cas de défaut', 'iscorrect' => true],
                            ['text' => 'Uniquement du coupon', 'iscorrect' => false],
                            ['text' => 'Uniquement de la maturité', 'iscorrect' => false],
                            ['text' => 'Uniquement du taux directeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation subordonnée est-elle généralement plus risquée qu’une obligation senior du même émetteur ?',
                        'answers' => [
                            ['text' => 'Elle possède une priorité de remboursement inférieure en cas de liquidation', 'iscorrect' => true],
                            ['text' => 'Elle est toujours sans coupon', 'iscorrect' => false],
                            ['text' => 'Elle n’a jamais de valeur de marché', 'iscorrect' => false],
                            ['text' => 'Elle bénéficie toujours d’une garantie publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une analyse de courbe de crédit ?',
                        'answers' => [
                            ['text' => 'Identifier comment les spreads varient selon les maturités et détecter des opportunités ou risques relatifs', 'iscorrect' => true],
                            ['text' => 'Déterminer uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Éliminer le risque de défaut', 'iscorrect' => false],
                            ['text' => 'Garantir le prix futur des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de liquidité est-il particulièrement important sur certains marchés obligataires ?',
                        'answers' => [
                            ['text' => 'Certaines obligations sont moins fréquemment négociées et peuvent présenter des écarts de prix importants', 'iscorrect' => true],
                            ['text' => 'Toutes les obligations sont toujours aussi liquides que les actions les plus échangées', 'iscorrect' => false],
                            ['text' => 'La liquidité n’influence jamais les prix', 'iscorrect' => false],
                            ['text' => 'Les obligations ne peuvent pas être revendues', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de la duration d’un portefeuille obligataire ?',
                        'answers' => [
                            ['text' => 'Approcher sa sensibilité globale aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Mesurer directement sa probabilité de défaut', 'iscorrect' => false],
                            ['text' => 'Calculer uniquement son coupon moyen', 'iscorrect' => false],
                            ['text' => 'Garantir son rendement futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la convexité est-elle particulièrement utile pour de grandes variations de taux ?',
                        'answers' => [
                            ['text' => 'Parce que l’approximation linéaire par la duration devient moins précise lorsque les variations de rendement sont importantes', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle élimine le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle remplace les prix de marché', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle garantit une hausse du prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle stratégie peut être utilisée pour exploiter des écarts relatifs entre obligations comparables ?',
                        'answers' => [
                            ['text' => 'Une stratégie de valeur relative contrôlant les expositions communes tout en ciblant l’écart spécifique', 'iscorrect' => true],
                            ['text' => 'Une stratégie consistant à ignorer les facteurs de risque', 'iscorrect' => false],
                            ['text' => 'Une stratégie garantissant l’absence de perte', 'iscorrect' => false],
                            ['text' => 'Une stratégie basée uniquement sur le coupon nominal', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Options, volatilité et stratégies quantitatives',
                'questions' => [
                    [
                        'question' => 'Que représente le vega d’une option ?',
                        'answers' => [
                            ['text' => 'La sensibilité approximative de la valeur de l’option à une variation de la volatilité implicite', 'iscorrect' => true],
                            ['text' => 'La sensibilité uniquement au taux directeur', 'iscorrect' => false],
                            ['text' => 'La sensibilité au dividende uniquement', 'iscorrect' => false],
                            ['text' => 'La maturité de l’option', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure approximativement le gamma ?',
                        'answers' => [
                            ['text' => 'La variation du delta de l’option lorsque le prix du sous-jacent évolue', 'iscorrect' => true],
                            ['text' => 'Le rendement du portefeuille', 'iscorrect' => false],
                            ['text' => 'Le coupon du sous-jacent', 'iscorrect' => false],
                            ['text' => 'Le spread de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille short gamma peut-il être vulnérable lors de mouvements rapides ?',
                        'answers' => [
                            ['text' => 'Son exposition directionnelle peut évoluer défavorablement rapidement lorsque le sous-jacent bouge fortement', 'iscorrect' => true],
                            ['text' => 'Parce qu’il bénéficie toujours des fortes variations', 'iscorrect' => false],
                            ['text' => 'Parce que son delta est toujours nul', 'iscorrect' => false],
                            ['text' => 'Parce qu’il n’a aucune sensibilité à la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une stratégie delta-hedged ?',
                        'answers' => [
                            ['text' => 'Une stratégie qui cherche à réduire l’exposition directionnelle au sous-jacent en ajustant la position de couverture', 'iscorrect' => true],
                            ['text' => 'Une stratégie sans aucun risque', 'iscorrect' => false],
                            ['text' => 'Une stratégie qui ignore le prix du sous-jacent', 'iscorrect' => false],
                            ['text' => 'Une stratégie basée uniquement sur les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture delta doit-elle généralement être réajustée ?',
                        'answers' => [
                            ['text' => 'Parce que le delta évolue lorsque le prix du sous-jacent et d’autres paramètres changent', 'iscorrect' => true],
                            ['text' => 'Parce que le delta est toujours constant', 'iscorrect' => false],
                            ['text' => 'Parce que les options expirent chaque jour', 'iscorrect' => false],
                            ['text' => 'Parce que la volatilité n’a aucun effet', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité implicite d’une option révèle principalement ?',
                        'answers' => [
                            ['text' => 'Le niveau de volatilité qui, selon le modèle utilisé, est cohérent avec le prix observé de l’option', 'iscorrect' => true],
                            ['text' => 'La volatilité future connue avec certitude', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti du sous-jacent', 'iscorrect' => false],
                            ['text' => 'Le risque de crédit de l’émetteur uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le skew de volatilité est-il surveillé par les professionnels ?',
                        'answers' => [
                            ['text' => 'Il révèle que la volatilité implicite varie selon le strike et fournit des informations sur la demande et les risques perçus', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les options ont toujours la même volatilité implicite', 'iscorrect' => false],
                            ['text' => 'Parce qu’il détermine uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime le risque de modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un volatility smile ?',
                        'answers' => [
                            ['text' => 'Une configuration dans laquelle la volatilité implicite varie selon le strike et peut présenter une forme courbée', 'iscorrect' => true],
                            ['text' => 'Une courbe de taux sans risque', 'iscorrect' => false],
                            ['text' => 'Un graphique des dividendes historiques', 'iscorrect' => false],
                            ['text' => 'Une mesure de la duration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses de volatilité constante peuvent-elles être insuffisantes ?',
                        'answers' => [
                            ['text' => 'La volatilité observée sur les marchés varie dans le temps et peut dépendre du niveau du sous-jacent et du strike', 'iscorrect' => true],
                            ['text' => 'Parce que la volatilité est toujours nulle', 'iscorrect' => false],
                            ['text' => 'Parce que les options n’ont pas de prix', 'iscorrect' => false],
                            ['text' => 'Parce que le strike n’a jamais d’importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’une stratégie short volatility non maîtrisée ?',
                        'answers' => [
                            ['text' => 'Une hausse brutale de la volatilité peut entraîner des pertes très importantes', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours un rendement négatif', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de marché', 'iscorrect' => false],
                            ['text' => 'Elle ne possède aucune sensibilité aux mouvements extrêmes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Arbitrage, valeur relative et stratégies quantitatives',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un arbitrage pur au sens théorique ?',
                        'answers' => [
                            ['text' => 'Une stratégie exploitant une incohérence de prix permettant un gain sans exposition nette au risque dans le modèle considéré', 'iscorrect' => true],
                            ['text' => 'Toute stratégie ayant historiquement gagné de l’argent', 'iscorrect' => false],
                            ['text' => 'Une stratégie qui prend systématiquement un risque élevé', 'iscorrect' => false],
                            ['text' => 'Un investissement long terme sans analyse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les véritables opportunités d’arbitrage peuvent-elles être rares ?',
                        'answers' => [
                            ['text' => 'Les professionnels surveillent les écarts et leur exploitation tend à réduire les incohérences de prix', 'iscorrect' => true],
                            ['text' => 'Parce que les marchés ne permettent jamais de comparer deux prix', 'iscorrect' => false],
                            ['text' => 'Parce que tous les actifs ont toujours des prix identiques', 'iscorrect' => false],
                            ['text' => 'Parce que les coûts n’existent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un arbitrage statistique ?',
                        'answers' => [
                            ['text' => 'Une stratégie quantitative exploitant des relations statistiques entre actifs plutôt qu’une incohérence de prix certaine', 'iscorrect' => true],
                            ['text' => 'Un arbitrage garanti sans risque', 'iscorrect' => false],
                            ['text' => 'Une stratégie fondée uniquement sur les dividendes', 'iscorrect' => false],
                            ['text' => 'Une méthode de valorisation comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important dans une stratégie long-short de valeur relative ?',
                        'answers' => [
                            ['text' => 'Le risque que les deux jambes de la stratégie évoluent différemment ou que la relation historique se rompe', 'iscorrect' => true],
                            ['text' => 'L’absence totale de risque directionnel', 'iscorrect' => false],
                            ['text' => 'La garantie d’un retour à la moyenne', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le mean reversion dans une stratégie quantitative ?',
                        'answers' => [
                            ['text' => 'L’hypothèse selon laquelle une variable ou un écart tend à revenir vers un niveau ou une relation de long terme', 'iscorrect' => true],
                            ['text' => 'L’hypothèse que les prix augmentent toujours', 'iscorrect' => false],
                            ['text' => 'Une garantie de convergence immédiate', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul du coupon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relation statistique historique peut-elle devenir moins fiable ?',
                        'answers' => [
                            ['text' => 'Un changement de régime économique, réglementaire ou comportemental peut modifier la relation observée', 'iscorrect' => true],
                            ['text' => 'Parce que les statistiques ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont toujours stationnaires', 'iscorrect' => false],
                            ['text' => 'Parce que les prix historiques disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème est associé au data snooping ?',
                        'answers' => [
                            ['text' => 'Une stratégie peut sembler performante uniquement parce qu’elle a été sélectionnée après de nombreuses recherches sur les données', 'iscorrect' => true],
                            ['text' => 'Une absence de données historiques', 'iscorrect' => false],
                            ['text' => 'Une garantie de robustesse hors échantillon', 'iscorrect' => false],
                            ['text' => 'Une réduction automatique des coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le backtest hors échantillon est-il important ?',
                        'answers' => [
                            ['text' => 'Il permet d’évaluer si la stratégie conserve ses propriétés sur des données qui n’ont pas servi à sa construction', 'iscorrect' => true],
                            ['text' => 'Il garantit la performance future', 'iscorrect' => false],
                            ['text' => 'Il élimine le risque de surajustement', 'iscorrect' => false],
                            ['text' => 'Il rend les données historiques inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction doivent-ils être intégrés dans un backtest ?',
                        'answers' => [
                            ['text' => 'Une stratégie apparemment rentable peut devenir non rentable après commissions, spread, impact et slippage', 'iscorrect' => true],
                            ['text' => 'Les coûts n’ont jamais d’effet sur une stratégie', 'iscorrect' => false],
                            ['text' => 'Ils garantissent la performance', 'iscorrect' => false],
                            ['text' => 'Ils remplacent la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le surajustement, ou overfitting, dans un modèle de trading ?',
                        'answers' => [
                            ['text' => 'L’adaptation excessive du modèle aux données historiques au détriment de sa capacité à généraliser', 'iscorrect' => true],
                            ['text' => 'Une diversification parfaite', 'iscorrect' => false],
                            ['text' => 'Une garantie de robustesse', 'iscorrect' => false],
                            ['text' => 'Une baisse automatique de la volatilité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Macrofinance et transmission des politiques économiques',
                'questions' => [
                    [
                        'question' => 'Comment une hausse du taux directeur peut-elle affecter les actifs risqués ?',
                        'answers' => [
                            ['text' => 'Elle peut augmenter le coût du financement et le taux d’actualisation, tout en modifiant les anticipations de croissance', 'iscorrect' => true],
                            ['text' => 'Elle garantit toujours une hausse des actions', 'iscorrect' => false],
                            ['text' => 'Elle n’affecte jamais les obligations', 'iscorrect' => false],
                            ['text' => 'Elle supprime automatiquement l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations d’inflation sont-elles importantes pour les marchés obligataires ?',
                        'answers' => [
                            ['text' => 'Elles influencent les rendements nominaux exigés et la valeur réelle des flux futurs', 'iscorrect' => true],
                            ['text' => 'Elles déterminent uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Elles n’ont aucun lien avec les taux', 'iscorrect' => false],
                            ['text' => 'Elles garantissent une baisse des rendements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signaler une inversion de la courbe des taux ?',
                        'answers' => [
                            ['text' => 'Des anticipations de ralentissement économique ou de baisse future des taux, selon le contexte', 'iscorrect' => true],
                            ['text' => 'Une certitude de récession immédiate', 'iscorrect' => false],
                            ['text' => 'Une absence totale d’inflation', 'iscorrect' => false],
                            ['text' => 'Une hausse garantie des actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation d’une devise peut-elle affecter les entreprises différemment ?',
                        'answers' => [
                            ['text' => 'L’effet dépend notamment de la structure des revenus, des coûts et des dettes en devises étrangères', 'iscorrect' => true],
                            ['text' => 'Toutes les entreprises bénéficient toujours d’une dépréciation', 'iscorrect' => false],
                            ['text' => 'Toutes les entreprises sont toujours pénalisées', 'iscorrect' => false],
                            ['text' => 'Le taux de change n’affecte jamais les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet potentiel d’un resserrement monétaire sur les valorisations ?',
                        'answers' => [
                            ['text' => 'Des taux d’actualisation plus élevés peuvent réduire la valeur actuelle des flux futurs', 'iscorrect' => true],
                            ['text' => 'Il augmente automatiquement toutes les valorisations', 'iscorrect' => false],
                            ['text' => 'Il supprime le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Il garantit une croissance des bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les marchés peuvent-ils réagir avant la publication d’une décision de politique monétaire ?',
                        'answers' => [
                            ['text' => 'Les prix intègrent progressivement les anticipations concernant la décision et sa trajectoire future', 'iscorrect' => true],
                            ['text' => 'Parce que les investisseurs connaissent toujours la décision secrètement', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ignorent les données économiques', 'iscorrect' => false],
                            ['text' => 'Parce que les taux ne changent jamais après une décision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut transmettre une hausse des taux à l’économie réelle ?',
                        'answers' => [
                            ['text' => 'Le renchérissement du crédit peut réduire l’investissement, la consommation et certaines dépenses sensibles aux taux', 'iscorrect' => true],
                            ['text' => 'La disparition automatique des impôts', 'iscorrect' => false],
                            ['text' => 'La hausse obligatoire des salaires', 'iscorrect' => false],
                            ['text' => 'La suppression des marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance économique influence-t-elle les marchés actions ?',
                        'answers' => [
                            ['text' => 'Elle peut affecter les revenus, bénéfices, investissements et anticipations de flux futurs des entreprises', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les actions suivent exactement le PIB', 'iscorrect' => false],
                            ['text' => 'Parce que les bénéfices sont indépendants de l’activité économique', 'iscorrect' => false],
                            ['text' => 'Parce que le PIB détermine directement chaque cours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de distinguer données réalisées et anticipations de marché ?',
                        'answers' => [
                            ['text' => 'Un actif réagit souvent davantage à l’écart entre la nouvelle information et ce qui était déjà anticipé', 'iscorrect' => true],
                            ['text' => 'Les anticipations n’ont jamais d’importance', 'iscorrect' => false],
                            ['text' => 'Les données réalisées déterminent toujours immédiatement le cours', 'iscorrect' => false],
                            ['text' => 'Les marchés ne réagissent qu’aux chiffres anciens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique économique peut-elle avoir des effets différents selon les secteurs ?',
                        'answers' => [
                            ['text' => 'Les secteurs diffèrent par leur intensité capitalistique, leur sensibilité aux taux, leur pouvoir de fixation des prix et leur exposition internationale', 'iscorrect' => true],
                            ['text' => 'Tous les secteurs ont exactement la même structure financière', 'iscorrect' => false],
                            ['text' => 'Les politiques économiques affectent uniquement les banques', 'iscorrect' => false],
                            ['text' => 'Les secteurs ne dépendent jamais de la conjoncture', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Réglementation, gouvernance et intégrité des marchés',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal des règles contre les abus de marché ?',
                        'answers' => [
                            ['text' => 'Préserver l’intégrité, la transparence et l’équité du fonctionnement des marchés', 'iscorrect' => true],
                            ['text' => 'Garantir un rendement positif aux investisseurs', 'iscorrect' => false],
                            ['text' => 'Empêcher toute volatilité', 'iscorrect' => false],
                            ['text' => 'Fixer tous les cours de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le délit d’initié constitue-t-il un problème pour les marchés ?',
                        'answers' => [
                            ['text' => 'L’utilisation d’informations privilégiées peut créer une asymétrie injuste et porter atteinte à l’intégrité du marché', 'iscorrect' => true],
                            ['text' => 'Parce qu’il réduit toujours les bénéfices des entreprises', 'iscorrect' => false],
                            ['text' => 'Parce qu’il augmente automatiquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Parce qu’il empêche les marchés de fonctionner électroniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une manipulation de marché ?',
                        'answers' => [
                            ['text' => 'Une action visant à donner une impression artificielle ou trompeuse concernant l’offre, la demande ou le prix d’un actif', 'iscorrect' => true],
                            ['text' => 'Toute opération rentable', 'iscorrect' => false],
                            ['text' => 'Toute vente d’actions importante', 'iscorrect' => false],
                            ['text' => 'Toute stratégie de couverture', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la séparation des fonctions peut-elle améliorer la gouvernance ?',
                        'answers' => [
                            ['text' => 'Elle réduit certains conflits d’intérêts et renforce les contrôles indépendants', 'iscorrect' => true],
                            ['text' => 'Elle élimine tous les risques opérationnels', 'iscorrect' => false],
                            ['text' => 'Elle garantit une performance supérieure', 'iscorrect' => false],
                            ['text' => 'Elle rend les contrôles inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une fonction de compliance ?',
                        'answers' => [
                            ['text' => 'Identifier, prévenir et surveiller les risques de non-conformité aux règles applicables', 'iscorrect' => true],
                            ['text' => 'Maximiser uniquement les bénéfices de trading', 'iscorrect' => false],
                            ['text' => 'Déterminer seule tous les prix du marché', 'iscorrect' => false],
                            ['text' => 'Garantir le rendement des clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conflits d’intérêts doivent-ils être identifiés ?',
                        'answers' => [
                            ['text' => 'Ils peuvent influencer les décisions et compromettre l’intérêt du client ou l’intégrité des processus', 'iscorrect' => true],
                            ['text' => 'Ils augmentent toujours les rendements', 'iscorrect' => false],
                            ['text' => 'Ils sont nécessaires pour garantir la liquidité', 'iscorrect' => false],
                            ['text' => 'Ils n’ont aucune conséquence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la traçabilité des ordres est-elle importante ?',
                        'answers' => [
                            ['text' => 'Elle permet de reconstituer les décisions et transactions et facilite le contrôle et les investigations', 'iscorrect' => true],
                            ['text' => 'Elle garantit que toutes les opérations sont rentables', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute erreur humaine', 'iscorrect' => false],
                            ['text' => 'Elle supprime les risques de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est central pour une gouvernance efficace des risques ?',
                        'answers' => [
                            ['text' => 'Des responsabilités clairement définies, des limites, des contrôles et une remontée indépendante des risques', 'iscorrect' => true],
                            ['text' => 'Une absence totale de procédures', 'iscorrect' => false],
                            ['text' => 'La concentration de toutes les décisions chez un seul opérateur', 'iscorrect' => false],
                            ['text' => 'La suppression de toute documentation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles de rémunération peuvent-ils créer des risques de gouvernance ?',
                        'answers' => [
                            ['text' => 'Des incitations mal conçues peuvent encourager une prise de risque excessive ou incompatible avec les intérêts à long terme', 'iscorrect' => true],
                            ['text' => 'Parce que toute rémunération supprime la performance', 'iscorrect' => false],
                            ['text' => 'Parce que les traders ne prennent jamais de risque', 'iscorrect' => false],
                            ['text' => 'Parce que les incitations n’influencent jamais les comportements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif poursuit une culture forte de gestion des risques ?',
                        'answers' => [
                            ['text' => 'Intégrer l’identification et la maîtrise des risques dans les décisions quotidiennes et la gouvernance', 'iscorrect' => true],
                            ['text' => 'Supprimer toute prise de risque', 'iscorrect' => false],
                            ['text' => 'Maximiser le rendement indépendamment des contraintes', 'iscorrect' => false],
                            ['text' => 'Remplacer les contrôles par l’intuition', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['text'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
