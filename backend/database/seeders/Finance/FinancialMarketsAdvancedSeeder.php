```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMarketsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-markets')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Microstructure avancée des marchés financiers',
                'questions' => [
                    [
                        'question' => 'Quel mécanisme contribue directement à la formation des prix dans un carnet d’ordres électronique ?',
                        'answers' => [
                            ['text' => 'La confrontation des ordres d’achat et de vente selon les règles de priorité du marché', 'iscorrect' => true],
                            ['text' => 'La fixation manuelle du prix par chaque investisseur après la clôture', 'iscorrect' => false],
                            ['text' => 'La moyenne annuelle des bénéfices des sociétés cotées', 'iscorrect' => false],
                            ['text' => 'Le taux d’imposition moyen des investisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement le spread bid-ask ?',
                        'answers' => [
                            ['text' => 'L’écart entre le meilleur prix acheteur et le meilleur prix vendeur', 'iscorrect' => true],
                            ['text' => 'L’écart entre le bénéfice et le chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'La différence entre deux dividendes successifs', 'iscorrect' => false],
                            ['text' => 'La différence entre deux valeurs nominales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un spread bid-ask étroit est généralement associé à :',
                        'answers' => [
                            ['text' => 'Une meilleure liquidité et des coûts de transaction implicites plus faibles', 'iscorrect' => true],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une volatilité nécessairement élevée', 'iscorrect' => false],
                            ['text' => 'Un rendement futur garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la profondeur d’un carnet d’ordres ?',
                        'answers' => [
                            ['text' => 'La quantité d’ordres disponibles à différents niveaux de prix', 'iscorrect' => true],
                            ['text' => 'Le nombre d’années d’existence d’une entreprise', 'iscorrect' => false],
                            ['text' => 'La durée moyenne de détention des actions', 'iscorrect' => false],
                            ['text' => 'Le montant annuel des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une faible profondeur de marché sur une transaction importante ?',
                        'answers' => [
                            ['text' => 'Elle peut provoquer un impact significatif de l’ordre sur le prix', 'iscorrect' => true],
                            ['text' => 'Elle garantit une exécution au meilleur prix', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de liquidité', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute variation du prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le price impact d’une transaction ?',
                        'answers' => [
                            ['text' => 'La variation du prix provoquée ou amplifiée par l’exécution de l’ordre', 'iscorrect' => true],
                            ['text' => 'Le rendement annuel garanti par la bourse', 'iscorrect' => false],
                            ['text' => 'Le montant du dividende distribué', 'iscorrect' => false],
                            ['text' => 'La valeur comptable de l’action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la liquidité peut-elle disparaître rapidement lors d’un stress de marché ?',
                        'answers' => [
                            ['text' => 'Les fournisseurs de liquidité peuvent réduire leurs positions et les participants devenir plus prudents', 'iscorrect' => true],
                            ['text' => 'Les actifs cessent toujours d’avoir une valeur fondamentale', 'iscorrect' => false],
                            ['text' => 'Les investisseurs sont obligés de vendre tous leurs titres', 'iscorrect' => false],
                            ['text' => 'Les dividendes sont automatiquement suspendus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre un ordre au marché et un ordre à cours limité ?',
                        'answers' => [
                            ['text' => 'L’ordre au marché privilégie l’exécution tandis que l’ordre limité impose une contrainte de prix', 'iscorrect' => true],
                            ['text' => 'Les deux ordres imposent exactement le même prix', 'iscorrect' => false],
                            ['text' => 'L’ordre limité garantit toujours l’exécution', 'iscorrect' => false],
                            ['text' => 'L’ordre au marché ne peut jamais être exécuté', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un ordre au marché sur un actif peu liquide ?',
                        'answers' => [
                            ['text' => 'Une exécution à des prix successivement moins favorables', 'iscorrect' => true],
                            ['text' => 'Une garantie de prix fixe', 'iscorrect' => false],
                            ['text' => 'Une absence automatique de frais', 'iscorrect' => false],
                            ['text' => 'Une suppression du risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe de priorité est courant dans les carnets d’ordres ?',
                        'answers' => [
                            ['text' => 'La priorité prix-temps', 'iscorrect' => true],
                            ['text' => 'La priorité selon l’âge de l’entreprise', 'iscorrect' => false],
                            ['text' => 'La priorité selon le dividende', 'iscorrect' => false],
                            ['text' => 'La priorité selon la nationalité de l’investisseur', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valorisation avancée des actions',
                'questions' => [
                    [
                        'question' => 'Dans un modèle d’actualisation des dividendes, la valeur d’une action dépend principalement :',
                        'answers' => [
                            ['text' => 'Des dividendes futurs attendus et du taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Uniquement de la valeur nominale de l’action', 'iscorrect' => false],
                            ['text' => 'Uniquement du nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Du montant historique du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle de Gordon, une hausse du taux de croissance perpétuel, toutes choses égales par ailleurs, tend à :',
                        'answers' => [
                            ['text' => 'Augmenter la valeur théorique de l’action', 'iscorrect' => true],
                            ['text' => 'Réduire nécessairement la valeur théorique', 'iscorrect' => false],
                            ['text' => 'N’avoir aucun effet', 'iscorrect' => false],
                            ['text' => 'Supprimer le besoin d’un taux d’actualisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le modèle de Gordon devient-il très sensible lorsque le taux de croissance approche le taux d’actualisation ?',
                        'answers' => [
                            ['text' => 'Parce que l’écart entre les deux paramètres devient très faible dans le dénominateur du modèle', 'iscorrect' => true],
                            ['text' => 'Parce que les dividendes deviennent automatiquement nuls', 'iscorrect' => false],
                            ['text' => 'Parce que le cours devient égal à la valeur nominale', 'iscorrect' => false],
                            ['text' => 'Parce que les bénéfices cessent d’être pertinents', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation DCF, une hausse du taux d’actualisation tend généralement à :',
                        'answers' => [
                            ['text' => 'Réduire la valeur actuelle des flux futurs', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement tous les flux futurs', 'iscorrect' => false],
                            ['text' => 'Supprimer les risques de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Augmenter mécaniquement la valeur intrinsèque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur terminale peut-elle représenter une part importante d’une valorisation DCF ?',
                        'answers' => [
                            ['text' => 'Elle représente la valeur des flux au-delà de la période de prévision explicite', 'iscorrect' => true],
                            ['text' => 'Elle correspond uniquement aux actifs physiques déjà vendus', 'iscorrect' => false],
                            ['text' => 'Elle remplace toutes les prévisions financières', 'iscorrect' => false],
                            ['text' => 'Elle représente uniquement les dividendes passés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque principal d’une hypothèse de croissance terminale trop élevée ?',
                        'answers' => [
                            ['text' => 'Elle peut conduire à une surestimation importante de la valeur intrinsèque', 'iscorrect' => true],
                            ['text' => 'Elle réduit toujours la valeur terminale', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Elle rend le DCF indépendant du taux d’actualisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse par multiples est-elle souvent utilisée en complément d’un DCF ?',
                        'answers' => [
                            ['text' => 'Elle fournit une approche relative permettant de comparer des entreprises ou transactions comparables', 'iscorrect' => true],
                            ['text' => 'Elle garantit une valeur intrinsèque exacte', 'iscorrect' => false],
                            ['text' => 'Elle élimine toute hypothèse financière', 'iscorrect' => false],
                            ['text' => 'Elle remplace systématiquement l’analyse fondamentale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un multiple EV/EBITDA élevé peut notamment refléter :',
                        'answers' => [
                            ['text' => 'Des anticipations élevées de croissance, de rentabilité ou de qualité des flux', 'iscorrect' => true],
                            ['text' => 'Une absence certaine de risque', 'iscorrect' => false],
                            ['text' => 'Une dette nécessairement nulle', 'iscorrect' => false],
                            ['text' => 'Une valorisation forcément excessive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une entreprise avec des sociétés véritablement comparables ?',
                        'answers' => [
                            ['text' => 'Parce que les différences de croissance, risque et rentabilité influencent les multiples observés', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les entreprises doivent avoir le même multiple', 'iscorrect' => false],
                            ['text' => 'Parce que la taille n’a jamais d’importance', 'iscorrect' => false],
                            ['text' => 'Parce que les multiples sont indépendants du secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une analyse de sensibilité dans une valorisation ?',
                        'answers' => [
                            ['text' => 'L’étude de l’effet de variations des hypothèses principales sur la valeur obtenue', 'iscorrect' => true],
                            ['text' => 'Le calcul d’un seul scénario sans hypothèses', 'iscorrect' => false],
                            ['text' => 'La suppression de toute incertitude', 'iscorrect' => false],
                            ['text' => 'La comparaison uniquement des cours historiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Obligations avancées et gestion du risque de taux',
                'questions' => [
                    [
                        'question' => 'Quelle est la relation approximative entre duration modifiée et variation du prix d’une obligation ?',
                        'answers' => [
                            ['text' => 'La variation relative du prix est approximativement l’opposé de la duration modifiée multipliée par la variation du rendement', 'iscorrect' => true],
                            ['text' => 'Le prix varie toujours exactement comme le rendement', 'iscorrect' => false],
                            ['text' => 'La duration mesure uniquement le coupon', 'iscorrect' => false],
                            ['text' => 'Le prix est indépendant du rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la convexité améliore-t-elle l’approximation de la sensibilité obligataire ?',
                        'answers' => [
                            ['text' => 'Elle tient compte de la courbure de la relation prix-rendement', 'iscorrect' => true],
                            ['text' => 'Elle remplace complètement la duration', 'iscorrect' => false],
                            ['text' => 'Elle mesure uniquement le risque de défaut', 'iscorrect' => false],
                            ['text' => 'Elle garantit un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation zéro coupon de longue maturité est généralement :',
                        'answers' => [
                            ['text' => 'Très sensible aux variations des taux en raison de sa duration élevée', 'iscorrect' => true],
                            ['text' => 'Insensible aux taux', 'iscorrect' => false],
                            ['text' => 'Toujours moins volatile qu’une obligation courte', 'iscorrect' => false],
                            ['text' => 'Sans risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de réinvestissement ?',
                        'answers' => [
                            ['text' => 'Le risque de devoir réinvestir des coupons ou remboursements futurs à des taux moins favorables', 'iscorrect' => true],
                            ['text' => 'Le risque que le titre ne soit jamais coté', 'iscorrect' => false],
                            ['text' => 'Le risque de perte de la valeur nominale uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de change uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille obligataire peut-il subir une perte même si aucun émetteur ne fait défaut ?',
                        'answers' => [
                            ['text' => 'Une hausse des taux de marché peut réduire la valeur de marché des obligations existantes', 'iscorrect' => true],
                            ['text' => 'Parce que les coupons cessent toujours d’être payés', 'iscorrect' => false],
                            ['text' => 'Parce que la valeur nominale disparaît', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations deviennent automatiquement des actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure approximativement le spread de crédit d’une obligation ?',
                        'answers' => [
                            ['text' => 'La prime de rendement exigée par rapport à une référence jugée moins risquée', 'iscorrect' => true],
                            ['text' => 'Le montant de son coupon uniquement', 'iscorrect' => false],
                            ['text' => 'La durée de l’entreprise', 'iscorrect' => false],
                            ['text' => 'La valeur comptable des actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dégradation de notation de crédit peut entraîner :',
                        'answers' => [
                            ['text' => 'Une hausse du rendement exigé et une baisse potentielle du prix de l’obligation', 'iscorrect' => true],
                            ['text' => 'Une garantie de hausse du prix', 'iscorrect' => false],
                            ['text' => 'Une réduction automatique du risque de défaut', 'iscorrect' => false],
                            ['text' => 'Une disparition du spread de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une stratégie de duration matching ?',
                        'answers' => [
                            ['text' => 'Aligner la sensibilité du portefeuille avec celle des engagements ou objectifs à couvrir', 'iscorrect' => true],
                            ['text' => 'Maximiser nécessairement le risque de taux', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les risques de crédit', 'iscorrect' => false],
                            ['text' => 'Garantir le prix futur des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse parallèle de la courbe des taux est une simplification ?',
                        'answers' => [
                            ['text' => 'Parce que les taux de différentes maturités peuvent évoluer de manière différente dans la réalité', 'iscorrect' => true],
                            ['text' => 'Parce que les taux ne peuvent jamais changer simultanément', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations n’ont pas de maturité', 'iscorrect' => false],
                            ['text' => 'Parce que toutes les obligations ont la même duration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un aplatissement de la courbe des taux ?',
                        'answers' => [
                            ['text' => 'La différence entre certains taux courts et longs diminue', 'iscorrect' => true],
                            ['text' => 'Tous les taux deviennent identiques', 'iscorrect' => false],
                            ['text' => 'Les taux longs deviennent nécessairement négatifs', 'iscorrect' => false],
                            ['text' => 'Les obligations cessent d’être négociées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dérivés financiers et stratégies de couverture',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif fondamental d’un contrat à terme ?',
                        'answers' => [
                            ['text' => 'Fixer aujourd’hui les conditions d’une transaction future selon les termes convenus', 'iscorrect' => true],
                            ['text' => 'Garantir que le sous-jacent prendra de la valeur', 'iscorrect' => false],
                            ['text' => 'Supprimer tous les risques financiers', 'iscorrect' => false],
                            ['text' => 'Transformer automatiquement une dette en capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique distingue généralement une option d’un contrat à terme ?',
                        'answers' => [
                            ['text' => 'L’acheteur d’une option possède un droit sans obligation d’exercer, sous réserve des conditions du contrat', 'iscorrect' => true],
                            ['text' => 'Une option impose toujours l’exercice à l’acheteur', 'iscorrect' => false],
                            ['text' => 'Un contrat à terme n’a jamais de valeur', 'iscorrect' => false],
                            ['text' => 'Une option ne possède jamais de prime', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’acheteur d’une option paie-t-il une prime ?',
                        'answers' => [
                            ['text' => 'Pour obtenir le droit associé à l’option selon les conditions du contrat', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Pour recevoir automatiquement le sous-jacent', 'iscorrect' => false],
                            ['text' => 'Pour supprimer toute volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option call donne généralement à son détenteur :',
                        'answers' => [
                            ['text' => 'Le droit d’acheter le sous-jacent au prix d’exercice selon les conditions du contrat', 'iscorrect' => true],
                            ['text' => 'L’obligation de vendre le sous-jacent', 'iscorrect' => false],
                            ['text' => 'Le droit de recevoir tous les dividendes futurs', 'iscorrect' => false],
                            ['text' => 'La garantie d’un cours minimum', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option put donne généralement à son détenteur :',
                        'answers' => [
                            ['text' => 'Le droit de vendre le sous-jacent au prix d’exercice selon les conditions du contrat', 'iscorrect' => true],
                            ['text' => 'Le droit d’acheter sans payer de prime', 'iscorrect' => false],
                            ['text' => 'L’obligation d’acheter le sous-jacent', 'iscorrect' => false],
                            ['text' => 'La garantie d’un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du delta d’une option ?',
                        'answers' => [
                            ['text' => 'Il mesure approximativement la sensibilité du prix de l’option à une variation du sous-jacent', 'iscorrect' => true],
                            ['text' => 'Il mesure uniquement le taux sans risque', 'iscorrect' => false],
                            ['text' => 'Il mesure la maturité comptable de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Il représente toujours la volatilité implicite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la volatilité implicite ?',
                        'answers' => [
                            ['text' => 'Une estimation de la volatilité future incorporée dans le prix de marché d’une option selon un modèle', 'iscorrect' => true],
                            ['text' => 'La volatilité historique calculée sans utiliser le prix de l’option', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti de l’option', 'iscorrect' => false],
                            ['text' => 'Le taux de dividende obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise craignant une hausse du prix d’une matière première peut utiliser un dérivé pour :',
                        'answers' => [
                            ['text' => 'Réduire l’incertitude sur son coût futur', 'iscorrect' => true],
                            ['text' => 'Garantir une baisse du prix de la matière première', 'iscorrect' => false],
                            ['text' => 'Supprimer la demande mondiale', 'iscorrect' => false],
                            ['text' => 'Éliminer tous ses coûts opérationnels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de base dans une couverture ?',
                        'answers' => [
                            ['text' => 'Le risque que l’instrument de couverture et l’exposition couverte n’évoluent pas parfaitement ensemble', 'iscorrect' => true],
                            ['text' => 'Le risque que le contrat soit toujours sans valeur', 'iscorrect' => false],
                            ['text' => 'Le risque que tous les marchés ferment', 'iscorrect' => false],
                            ['text' => 'Le risque d’un dividende nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de couverture peut-elle réduire un gain potentiel ?',
                        'answers' => [
                            ['text' => 'Parce que la protection contre un mouvement défavorable peut également limiter certains bénéfices d’un mouvement favorable', 'iscorrect' => true],
                            ['text' => 'Parce qu’une couverture garantit toujours une perte', 'iscorrect' => false],
                            ['text' => 'Parce que les dérivés ne peuvent jamais être rentables', 'iscorrect' => false],
                            ['text' => 'Parce qu’une couverture supprime toujours le sous-jacent', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion avancée des portefeuilles',
                'questions' => [
                    [
                        'question' => 'Dans l’approche moyenne-variance, l’objectif est notamment de :',
                        'answers' => [
                            ['text' => 'Analyser le compromis entre rendement attendu et risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir le rendement maximal sans risque', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les actifs risqués', 'iscorrect' => false],
                            ['text' => 'Fixer les prix de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la frontière efficiente ?',
                        'answers' => [
                            ['text' => 'L’ensemble des portefeuilles offrant le meilleur rendement attendu pour chaque niveau de risque considéré', 'iscorrect' => true],
                            ['text' => 'L’ensemble des actifs ayant le même prix', 'iscorrect' => false],
                            ['text' => 'Une liste de portefeuilles sans aucun risque', 'iscorrect' => false],
                            ['text' => 'Un indice boursier obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les covariances sont-elles importantes dans l’analyse d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Elles décrivent comment les rendements des actifs évoluent conjointement et influencent le risque global', 'iscorrect' => true],
                            ['text' => 'Elles mesurent uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Elles garantissent les rendements futurs', 'iscorrect' => false],
                            ['text' => 'Elles remplacent les pondérations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif peut-il être utile à un portefeuille même si son rendement attendu est inférieur à celui d’un autre actif ?',
                        'answers' => [
                            ['text' => 'Oui, s’il apporte des bénéfices de diversification grâce à une faible corrélation', 'iscorrect' => true],
                            ['text' => 'Non, le rendement attendu est le seul critère pertinent', 'iscorrect' => false],
                            ['text' => 'Uniquement si son prix est plus élevé', 'iscorrect' => false],
                            ['text' => 'Jamais dans un portefeuille diversifié', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe de séparation entre allocation d’actifs et sélection de titres ?',
                        'answers' => [
                            ['text' => 'Distinguer la décision sur les grandes classes d’actifs de la sélection des investissements à l’intérieur de ces classes', 'iscorrect' => true],
                            ['text' => 'Investir uniquement dans des actions', 'iscorrect' => false],
                            ['text' => 'Éliminer toute analyse des risques', 'iscorrect' => false],
                            ['text' => 'Choisir les titres avant de définir tout objectif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important pour un investisseur ayant un horizon très court ?',
                        'answers' => [
                            ['text' => 'Le risque de devoir vendre pendant une période défavorable avant que la stratégie puisse produire les résultats attendus', 'iscorrect' => true],
                            ['text' => 'Uniquement le risque de dividende', 'iscorrect' => false],
                            ['text' => 'Le risque que les marchés ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Le risque de recevoir trop d’informations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rebalancement contrariant ?',
                        'answers' => [
                            ['text' => 'Une approche qui vend relativement certains actifs devenus surpondérés et achète ceux devenus sous-pondérés pour revenir aux objectifs', 'iscorrect' => true],
                            ['text' => 'Une stratégie qui achète uniquement les actifs ayant le plus monté', 'iscorrect' => false],
                            ['text' => 'Une stratégie sans allocation cible', 'iscorrect' => false],
                            ['text' => 'Une méthode garantissant une performance supérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes d’investissement doivent-elles être intégrées à l’optimisation d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce qu’un portefeuille mathématiquement optimal peut être irréalisable ou incompatible avec les objectifs de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Parce que les contraintes n’ont aucun effet', 'iscorrect' => false],
                            ['text' => 'Parce que tous les investisseurs ont les mêmes objectifs', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles garantissent le rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque l’optimisation utilise des estimations très incertaines des rendements ?',
                        'answers' => [
                            ['text' => 'Des pondérations extrêmes et instables dues à l’erreur d’estimation', 'iscorrect' => true],
                            ['text' => 'Une suppression automatique de la volatilité', 'iscorrect' => false],
                            ['text' => 'Une garantie de diversification parfaite', 'iscorrect' => false],
                            ['text' => 'Une absence de sensibilité aux données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une approche robuste de construction de portefeuille peut-elle être préférable à une optimisation purement théorique ?',
                        'answers' => [
                            ['text' => 'Elle cherche à limiter la dépendance aux hypothèses très précises et potentiellement instables', 'iscorrect' => true],
                            ['text' => 'Elle élimine tous les risques', 'iscorrect' => false],
                            ['text' => 'Elle garantit toujours la meilleure performance', 'iscorrect' => false],
                            ['text' => 'Elle ignore complètement les données historiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Finance comportementale et anomalies de marché',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’aversion aux pertes ?',
                        'answers' => [
                            ['text' => 'La tendance à ressentir une perte comme plus pénible qu’un gain équivalent n’est agréable', 'iscorrect' => true],
                            ['text' => 'La préférence systématique pour les actifs risqués', 'iscorrect' => false],
                            ['text' => 'La capacité à prédire les marchés avec certitude', 'iscorrect' => false],
                            ['text' => 'La préférence pour les obligations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que désigne le biais de confirmation ?',
                        'answers' => [
                            ['text' => 'La tendance à privilégier les informations qui confortent une opinion déjà formée', 'iscorrect' => true],
                            ['text' => 'La capacité à analyser toutes les informations sans biais', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul du rendement', 'iscorrect' => false],
                            ['text' => 'Un mécanisme de couverture', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le comportement grégaire sur les marchés ?',
                        'answers' => [
                            ['text' => 'La tendance des investisseurs à suivre les décisions d’un groupe plutôt que leur propre analyse', 'iscorrect' => true],
                            ['text' => 'Une diversification automatique', 'iscorrect' => false],
                            ['text' => 'Une stratégie d’arbitrage sans risque', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul des coupons', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment l’ancrage peut-il influencer une décision d’investissement ?',
                        'answers' => [
                            ['text' => 'Un investisseur peut accorder trop d’importance à une valeur de référence initiale, comme un ancien cours', 'iscorrect' => true],
                            ['text' => 'Il garantit que le cours reviendra à son niveau précédent', 'iscorrect' => false],
                            ['text' => 'Il supprime les biais cognitifs', 'iscorrect' => false],
                            ['text' => 'Il mesure la volatilité historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la surconfiance peut-elle être dangereuse pour un investisseur ?',
                        'answers' => [
                            ['text' => 'Elle peut conduire à sous-estimer les risques et à effectuer trop de transactions', 'iscorrect' => true],
                            ['text' => 'Elle garantit une meilleure diversification', 'iscorrect' => false],
                            ['text' => 'Elle réduit toujours les coûts', 'iscorrect' => false],
                            ['text' => 'Elle empêche toute erreur de jugement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le biais de disposition ?',
                        'answers' => [
                            ['text' => 'La tendance à vendre trop rapidement les investissements gagnants et à conserver trop longtemps certains investissements perdants', 'iscorrect' => true],
                            ['text' => 'La préférence pour les obligations longues', 'iscorrect' => false],
                            ['text' => 'La tendance à diversifier parfaitement', 'iscorrect' => false],
                            ['text' => 'Une technique de valorisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’excès de confiance peut-il augmenter les coûts de portefeuille ?',
                        'answers' => [
                            ['text' => 'Il peut pousser l’investisseur à multiplier les transactions sans amélioration suffisante de la performance', 'iscorrect' => true],
                            ['text' => 'Il supprime automatiquement les commissions', 'iscorrect' => false],
                            ['text' => 'Il garantit une meilleure exécution', 'iscorrect' => false],
                            ['text' => 'Il réduit systématiquement le turnover', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bulle financière peut être favorisée par :',
                        'answers' => [
                            ['text' => 'Des anticipations excessivement optimistes renforcées par le comportement collectif', 'iscorrect' => true],
                            ['text' => 'Une absence totale d’acheteurs', 'iscorrect' => false],
                            ['text' => 'Une volatilité toujours nulle', 'iscorrect' => false],
                            ['text' => 'Une information parfaitement interprétée par tous', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une anomalie de marché ne signifie-t-elle pas automatiquement une opportunité sans risque ?',
                        'answers' => [
                            ['text' => 'Les coûts, le risque, les changements de régime et les difficultés d’exploitation peuvent réduire ou éliminer l’anomalie', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les anomalies sont garanties', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que les prix sont toujours parfaitement prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique peut aider à limiter l’influence des biais comportementaux ?',
                        'answers' => [
                            ['text' => 'Définir à l’avance des règles d’investissement et les appliquer de manière disciplinée', 'iscorrect' => true],
                            ['text' => 'Prendre toutes les décisions sous l’effet de l’émotion', 'iscorrect' => false],
                            ['text' => 'Suivre systématiquement les rumeurs de marché', 'iscorrect' => false],
                            ['text' => 'Ignorer complètement les objectifs du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque systémique, stress de marché et stabilité financière',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque systémique ?',
                        'answers' => [
                            ['text' => 'Le risque qu’un choc ou une défaillance provoque des perturbations importantes dans l’ensemble du système financier', 'iscorrect' => true],
                            ['text' => 'Le risque propre à une seule action uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Le risque lié uniquement aux fluctuations d’une devise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les interconnexions financières peuvent-elles amplifier un choc ?',
                        'answers' => [
                            ['text' => 'Les pertes ou problèmes de liquidité d’un acteur peuvent se transmettre à d’autres acteurs par leurs expositions communes', 'iscorrect' => true],
                            ['text' => 'Parce que tous les actifs ont toujours la même valeur', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont juridiquement identiques', 'iscorrect' => false],
                            ['text' => 'Parce que les banques ne détiennent jamais de risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un test de résistance, ou stress test ?',
                        'answers' => [
                            ['text' => 'Une analyse de la capacité d’un portefeuille ou d’une institution à supporter des scénarios défavorables', 'iscorrect' => true],
                            ['text' => 'Une garantie contre les pertes', 'iscorrect' => false],
                            ['text' => 'Une prévision certaine du marché', 'iscorrect' => false],
                            ['text' => 'Une méthode de calcul des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de stress doivent-ils inclure des événements extrêmes mais plausibles ?',
                        'answers' => [
                            ['text' => 'Pour identifier des vulnérabilités qui peuvent rester invisibles dans des conditions normales', 'iscorrect' => true],
                            ['text' => 'Pour garantir que le scénario se réalisera', 'iscorrect' => false],
                            ['text' => 'Pour supprimer l’incertitude économique', 'iscorrect' => false],
                            ['text' => 'Pour prévoir exactement les cours futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque de liquidité de financement ?',
                        'answers' => [
                            ['text' => 'Le risque de ne pas pouvoir obtenir suffisamment de financement ou de liquidités au moment nécessaire', 'iscorrect' => true],
                            ['text' => 'Le risque de variation d’un dividende', 'iscorrect' => false],
                            ['text' => 'Le risque d’une baisse du chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de variation d’un indice uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une vente forcée peut-elle aggraver une crise de marché ?',
                        'answers' => [
                            ['text' => 'Elle peut faire baisser les prix, générer de nouvelles pertes et provoquer d’autres ventes', 'iscorrect' => true],
                            ['text' => 'Elle augmente toujours la liquidité', 'iscorrect' => false],
                            ['text' => 'Elle garantit une remontée immédiate des cours', 'iscorrect' => false],
                            ['text' => 'Elle supprime les appels de marge', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme peut contribuer à une spirale de désendettement ?',
                        'answers' => [
                            ['text' => 'La baisse des prix des actifs entraîne des pertes, réduit les garanties et peut provoquer de nouvelles ventes', 'iscorrect' => true],
                            ['text' => 'La hausse automatique des bénéfices', 'iscorrect' => false],
                            ['text' => 'La suppression des exigences de marge', 'iscorrect' => false],
                            ['text' => 'La disparition du levier financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le levier financier augmente-t-il la vulnérabilité ?',
                        'answers' => [
                            ['text' => 'Une faible variation de la valeur des actifs peut produire un effet important sur les capitaux propres', 'iscorrect' => true],
                            ['text' => 'Parce qu’il garantit toujours des pertes', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime les dettes', 'iscorrect' => false],
                            ['text' => 'Parce qu’il réduit automatiquement la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification entre classes d’actifs peut-elle échouer pendant une crise ?',
                        'answers' => [
                            ['text' => 'Les corrélations entre actifs peuvent augmenter fortement lorsque les investisseurs recherchent simultanément de la liquidité', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les classes d’actifs ont toujours une corrélation nulle', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations deviennent toujours sans valeur', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés cessent toujours de fonctionner', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un plan de continuité financière lors d’un stress important ?',
                        'answers' => [
                            ['text' => 'Maintenir les fonctions essentielles et gérer les risques de liquidité, opérationnels et financiers', 'iscorrect' => true],
                            ['text' => 'Garantir que les actifs ne baisseront jamais', 'iscorrect' => false],
                            ['text' => 'Supprimer toute volatilité du marché', 'iscorrect' => false],
                            ['text' => 'Empêcher les investisseurs de prendre des décisions', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse intégrée des marchés financiers',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’analyse d’un marché financier doit-elle combiner facteurs macroéconomiques et microéconomiques ?',
                        'answers' => [
                            ['text' => 'Parce que les conditions générales influencent les entreprises tandis que leurs caractéristiques propres déterminent aussi leur risque et leur valeur', 'iscorrect' => true],
                            ['text' => 'Parce que les facteurs macroéconomiques sont toujours suffisants', 'iscorrect' => false],
                            ['text' => 'Parce que les données d’entreprise n’ont aucun effet sur les prix', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés financiers ne réagissent qu’aux taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut simultanément affecter les actions et les obligations ?',
                        'answers' => [
                            ['text' => 'Une variation importante des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Le nombre de salariés d’une seule entreprise', 'iscorrect' => false],
                            ['text' => 'La date de création d’une société', 'iscorrect' => false],
                            ['text' => 'La couleur du logo d’un émetteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations jouent-elles un rôle central dans les prix de marché ?',
                        'answers' => [
                            ['text' => 'Les prix reflètent les attentes des participants concernant les flux, les risques et les conditions futures', 'iscorrect' => true],
                            ['text' => 'Parce que les investisseurs connaissent toujours l’avenir avec certitude', 'iscorrect' => false],
                            ['text' => 'Parce que les données historiques déterminent exactement les prix futurs', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ignorent les nouvelles informations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise fortement endettée est généralement plus sensible à une hausse des taux parce que :',
                        'answers' => [
                            ['text' => 'Le coût de son financement peut augmenter et peser davantage sur ses flux de trésorerie', 'iscorrect' => true],
                            ['text' => 'Ses revenus deviennent automatiquement nuls', 'iscorrect' => false],
                            ['text' => 'Ses actifs cessent immédiatement d’exister', 'iscorrect' => false],
                            ['text' => 'Elle reçoit automatiquement davantage de dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise présentant une croissance élevée peut-elle avoir une valorisation très sensible aux taux ?',
                        'answers' => [
                            ['text' => Une part importante de sa valeur peut provenir de flux de trésorerie attendus loin dans le futur, très sensibles à l’actualisation', 'iscorrect' => true],
                            ['text' => 'Parce que ses bénéfices sont nécessairement négatifs', 'iscorrect' => false],
                            ['text' => 'Parce que les actions de croissance ne versent jamais de dividendes', 'iscorrect' => false],
                            ['text' => 'Parce que les taux n’affectent jamais les valorisations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de comparer approximativement le rendement d’un actif à son risque total ?',
                        'answers' => [
                            ['text' => 'Le ratio de Sharpe', 'iscorrect' => true],
                            ['text' => 'Le ratio de liquidité générale', 'iscorrect' => false],
                            ['text' => 'Le taux de rotation des stocks', 'iscorrect' => false],
                            ['text' => 'Le ratio de distribution uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de scénario est-elle utile même lorsqu’un modèle financier est sophistiqué ?',
                        'answers' => [
                            ['text' => 'Elle permet d’examiner la robustesse de la décision lorsque plusieurs hypothèses changent simultanément', 'iscorrect' => true],
                            ['text' => 'Elle garantit le scénario futur', 'iscorrect' => false],
                            ['text' => 'Elle rend inutile toute estimation', 'iscorrect' => false],
                            ['text' => 'Elle supprime tous les risques du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut créer un écart entre rendement brut et rendement réellement obtenu ?',
                        'answers' => [
                            ['text' => 'Les frais, impôts, coûts de transaction et éventuels coûts de couverture', 'iscorrect' => true],
                            ['text' => 'Uniquement le nombre d’actionnaires', 'iscorrect' => false],
                            ['text' => 'La valeur nominale uniquement', 'iscorrect' => false],
                            ['text' => 'Le nom du titre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision d’investissement doit-elle tenir compte de la liquidité ?',
                        'answers' => [
                            ['text' => 'Parce qu’un actif difficile à vendre peut générer des coûts et des pertes supplémentaires lorsque l’investisseur doit sortir rapidement', 'iscorrect' => true],
                            ['text' => 'Parce que la liquidité garantit toujours un rendement élevé', 'iscorrect' => false],
                            ['text' => 'Parce qu’un actif liquide ne peut jamais perdre de valeur', 'iscorrect' => false],
                            ['text' => 'Parce que la liquidité supprime le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus cohérente avec une analyse financière avancée ?',
                        'answers' => [
                            ['text' => 'Combiner valorisation, analyse des risques, scénarios, liquidité, coûts et cohérence avec les objectifs de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Choisir uniquement l’actif ayant le rendement historique le plus élevé', 'iscorrect' => false],
                            ['text' => 'Ignorer les risques si la valorisation paraît attractive', 'iscorrect' => false],
                            ['text' => 'Se baser uniquement sur les fluctuations de prix à court terme', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                $answers = $questionData['answers'];

                // Mélange la position des réponses pour éviter que la bonne réponse
                // soit systématiquement affichée en première position.
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
