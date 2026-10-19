```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InvestmentAnalysisAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'investment-analysis')
            ->firstOrFail();

        $quizzes = [

            // ================================================================
            // QUIZ 1 — Analyse fondamentale avancée
            // ================================================================
            [
                'title' => 'Analyse fondamentale avancée',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une forte croissance du résultat net, mais son flux de trésorerie disponible diminue fortement. Quelle hypothèse mérite une attention particulière ?',
                        'answers' => [
                            ['text' => 'Une hausse importante du besoin en fonds de roulement ou des investissements', 'iscorrect' => true],
                            ['text' => 'Une amélioration automatique de la qualité des bénéfices', 'iscorrect' => false],
                            ['text' => 'Une disparition du risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Une réduction certaine de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la décomposition du ROE selon l’approche de DuPont est-elle utile ?',
                        'answers' => [
                            ['text' => 'Elle permet d’identifier l’effet de la marge, de l’utilisation des actifs et du levier financier', 'iscorrect' => true],
                            ['text' => 'Elle permet uniquement de mesurer la liquidité', 'iscorrect' => false],
                            ['text' => 'Elle élimine l’effet de la dette', 'iscorrect' => false],
                            ['text' => 'Elle prédit directement le cours futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du ROE résultant exclusivement d’une augmentation importante du levier financier doit être interprétée comme :',
                        'answers' => [
                            ['text' => 'Une amélioration de la rentabilité des actionnaires accompagnée potentiellement d’un risque financier accru', 'iscorrect' => true],
                            ['text' => 'Une amélioration sans aucun coût ni risque', 'iscorrect' => false],
                            ['text' => 'Une baisse certaine du risque', 'iscorrect' => false],
                            ['text' => 'Une preuve que les actifs sont plus productifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut indiquer une possible détérioration de la qualité des bénéfices ?',
                        'answers' => [
                            ['text' => 'Une divergence persistante entre bénéfice comptable et flux de trésorerie d’exploitation', 'iscorrect' => true],
                            ['text' => 'Une stabilité du flux de trésorerie', 'iscorrect' => false],
                            ['text' => 'Une baisse des charges d’intérêt', 'iscorrect' => false],
                            ['text' => 'Une diminution du besoin en fonds de roulement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse du pouvoir de fixation des prix est-elle importante pour un investisseur ?',
                        'answers' => [
                            ['text' => 'Parce qu’elle influence la capacité de l’entreprise à préserver ses marges face à l’inflation des coûts', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle garantit une hausse du volume des ventes', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle élimine le risque concurrentiel', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle rend les bénéfices indépendants du cycle économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une marge brute élevée mais une marge opérationnelle faible. Quelle explication est plausible ?',
                        'answers' => [
                            ['text' => 'Des dépenses commerciales, administratives ou de recherche importantes', 'iscorrect' => true],
                            ['text' => 'Une absence totale de coûts fixes', 'iscorrect' => false],
                            ['text' => 'Une rentabilité opérationnelle nécessairement excellente', 'iscorrect' => false],
                            ['text' => 'Une dette nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l’analyse d’une entreprise cyclique, utiliser uniquement les bénéfices d’une année exceptionnellement favorable peut conduire à :',
                        'answers' => [
                            ['text' => 'Une surestimation de la capacité bénéficiaire normalisée', 'iscorrect' => true],
                            ['text' => 'Une meilleure estimation automatique de la valeur intrinsèque', 'iscorrect' => false],
                            ['text' => 'Une élimination du risque cyclique', 'iscorrect' => false],
                            ['text' => 'Une sous-estimation certaine de la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un avantage concurrentiel durable dans une analyse fondamentale ?',
                        'answers' => [
                            ['text' => 'Une caractéristique permettant à l’entreprise de maintenir des rendements supérieurs sur une période prolongée', 'iscorrect' => true],
                            ['text' => 'Une hausse temporaire du cours', 'iscorrect' => false],
                            ['text' => 'Une dette élevée', 'iscorrect' => false],
                            ['text' => 'Une augmentation ponctuelle des bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse du capital investi est-elle importante pour évaluer une entreprise ?',
                        'answers' => [
                            ['text' => 'Elle permet de comparer le rendement généré par l’entreprise au capital nécessaire pour produire ce rendement', 'iscorrect' => true],
                            ['text' => 'Elle mesure uniquement le dividende', 'iscorrect' => false],
                            ['text' => 'Elle détermine directement le cours de l’action', 'iscorrect' => false],
                            ['text' => 'Elle supprime le besoin d’analyser les flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROIC durablement supérieur à son coût du capital. Cela suggère généralement :',
                        'answers' => [
                            ['text' => 'Une création de valeur économique pour les apporteurs de capitaux', 'iscorrect' => true],
                            ['text' => 'Une destruction automatique de valeur', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une impossibilité de croissance future', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 2 — Valorisation avancée
            // ================================================================
            [
                'title' => 'Valorisation avancée des entreprises',
                'questions' => [
                    [
                        'question' => 'Dans un modèle DCF, une hausse du WACC, toutes choses égales par ailleurs, entraîne généralement :',
                        'answers' => [
                            ['text' => 'Une diminution de la valeur actuelle des flux futurs', 'iscorrect' => true],
                            ['text' => 'Une augmentation automatique de la valeur intrinsèque', 'iscorrect' => false],
                            ['text' => 'Aucun changement', 'iscorrect' => false],
                            ['text' => 'Une hausse automatique des flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur terminale représente-t-elle souvent une part importante d’une valorisation DCF ?',
                        'answers' => [
                            ['text' => 'Parce qu’elle capitalise les flux attendus après la période explicite de prévision', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle représente uniquement les actifs courants', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle exclut tous les flux futurs', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle correspond toujours à la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un DCF dépend excessivement d’une hypothèse de croissance terminale élevée ?',
                        'answers' => [
                            ['text' => 'Une forte sensibilité de la valorisation à une hypothèse difficile à justifier', 'iscorrect' => true],
                            ['text' => 'Une disparition du risque de valorisation', 'iscorrect' => false],
                            ['text' => 'Une baisse automatique du WACC', 'iscorrect' => false],
                            ['text' => 'Une certitude sur les bénéfices futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser le FCFF plutôt que le FCFE dans certaines valorisations ?',
                        'answers' => [
                            ['text' => 'Le FCFF permet de valoriser l’entreprise avant répartition entre dette et capitaux propres', 'iscorrect' => true],
                            ['text' => 'Le FCFF mesure uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Le FCFF exclut tous les investissements', 'iscorrect' => false],
                            ['text' => 'Le FCFF est toujours égal au bénéfice net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise possède une dette importante, pourquoi la méthode EV/EBITDA peut-elle être informative ?',
                        'answers' => [
                            ['text' => 'Elle permet de comparer la valeur d’entreprise à une mesure opérationnelle avant certains éléments financiers', 'iscorrect' => true],
                            ['text' => 'Elle élimine tous les effets économiques', 'iscorrect' => false],
                            ['text' => 'Elle mesure uniquement le rendement des actionnaires', 'iscorrect' => false],
                            ['text' => 'Elle garantit la valeur intrinsèque exacte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche un EV/EBITDA supérieur à ses concurrents. Quelle conclusion est la plus rigoureuse ?',
                        'answers' => [
                            ['text' => 'Le marché lui attribue une valorisation relative supérieure, qui peut refléter une meilleure qualité ou des attentes plus élevées', 'iscorrect' => true],
                            ['text' => 'L’entreprise est nécessairement surévaluée', 'iscorrect' => false],
                            ['text' => 'L’entreprise est nécessairement sous-évaluée', 'iscorrect' => false],
                            ['text' => 'Le multiple n’a aucune signification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une analyse de sensibilité croisant WACC et croissance terminale ?',
                        'answers' => [
                            ['text' => 'Mesurer la robustesse de la valeur estimée face à deux hypothèses essentielles', 'iscorrect' => true],
                            ['text' => 'Garantir le prix futur', 'iscorrect' => false],
                            ['text' => 'Supprimer l’incertitude', 'iscorrect' => false],
                            ['text' => 'Calculer le bénéfice comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valorisation par multiples donne une valeur nettement supérieure au DCF. Quelle démarche est préférable ?',
                        'answers' => [
                            ['text' => 'Identifier les hypothèses et caractéristiques expliquant l’écart entre les deux méthodes', 'iscorrect' => true],
                            ['text' => 'Choisir automatiquement la valeur la plus élevée', 'iscorrect' => false],
                            ['text' => 'Ignorer le DCF', 'iscorrect' => false],
                            ['text' => 'Faire la moyenne sans analyser les différences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la normalisation des bénéfices est-elle importante dans une valorisation ?',
                        'answers' => [
                            ['text' => 'Elle permet de réduire l’influence d’éléments exceptionnellement favorables ou défavorables', 'iscorrect' => true],
                            ['text' => 'Elle garantit les bénéfices futurs', 'iscorrect' => false],
                            ['text' => 'Elle supprime les cycles économiques', 'iscorrect' => false],
                            ['text' => 'Elle remplace l’analyse du bilan', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut justifier une prime de valorisation par rapport aux concurrents ?',
                        'answers' => [
                            ['text' => 'Une meilleure rentabilité, une croissance plus durable ou un risque inférieur', 'iscorrect' => true],
                            ['text' => 'Une volatilité nécessairement plus élevée', 'iscorrect' => false],
                            ['text' => 'Une dette toujours supérieure', 'iscorrect' => false],
                            ['text' => 'Une absence de bénéfices', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 3 — Analyse des actions et bénéfices
            // ================================================================
            [
                'title' => 'Analyse avancée des actions',
                'questions' => [
                    [
                        'question' => 'Une croissance élevée du BPA provenant principalement de rachats d’actions doit être distinguée de :',
                        'answers' => [
                            ['text' => 'La croissance du bénéfice économique sous-jacent de l’entreprise', 'iscorrect' => true],
                            ['text' => 'La croissance du nombre d’actions', 'iscorrect' => false],
                            ['text' => 'La baisse du capital social', 'iscorrect' => false],
                            ['text' => 'La variation du cours uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le P/E peut-il être peu pertinent pour une entreprise dont les bénéfices sont négatifs ?',
                        'answers' => [
                            ['text' => 'Parce que le ratio devient difficile à interpréter lorsque le bénéfice par action est négatif', 'iscorrect' => true],
                            ['text' => 'Parce que le cours n’existe pas', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises déficitaires n’ont jamais de valeur', 'iscorrect' => false],
                            ['text' => 'Parce que le chiffre d’affaires est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être préférable au P/E pour comparer certaines entreprises fortement endettées ?',
                        'answers' => [
                            ['text' => 'Un multiple basé sur la valeur d’entreprise, tel que EV/EBITDA, selon le contexte', 'iscorrect' => true],
                            ['text' => 'Le dividende seul', 'iscorrect' => false],
                            ['text' => 'Le nombre d’employés uniquement', 'iscorrect' => false],
                            ['text' => 'Le cours historique uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses revenus mais voit son ROIC diminuer. Quelle interprétation est plausible ?',
                        'answers' => [
                            ['text' => 'Le capital supplémentaire investi génère un rendement inférieur à celui observé auparavant', 'iscorrect' => true],
                            ['text' => 'La création de valeur augmente nécessairement', 'iscorrect' => false],
                            ['text' => 'Le risque disparaît', 'iscorrect' => false],
                            ['text' => 'La croissance est nécessairement mauvaise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance n’est-elle pas toujours créatrice de valeur ?',
                        'answers' => [
                            ['text' => 'Parce qu’une croissance nécessitant un rendement du capital inférieur au coût du capital peut détruire de la valeur', 'iscorrect' => true],
                            ['text' => 'Parce que toute croissance réduit les bénéfices', 'iscorrect' => false],
                            ['text' => 'Parce que la croissance n’a jamais d’effet économique', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises ne peuvent pas investir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut rendre une comparaison de marges entre deux entreprises trompeuse ?',
                        'answers' => [
                            ['text' => 'Des modèles économiques, structures de coûts ou politiques comptables différentes', 'iscorrect' => true],
                            ['text' => 'Le fait qu’elles appartiennent au même secteur', 'iscorrect' => false],
                            ['text' => 'Une monnaie commune', 'iscorrect' => false],
                            ['text' => 'Une période d’analyse identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un taux de rétention élevé mais un ROE faible. Quel risque existe ?',
                        'answers' => [
                            ['text' => 'Le capital conservé peut être réinvesti à des rendements insuffisants', 'iscorrect' => true],
                            ['text' => 'Les bénéfices deviennent automatiquement plus élevés', 'iscorrect' => false],
                            ['text' => 'La dette disparaît automatiquement', 'iscorrect' => false],
                            ['text' => 'Le dividende augmente nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse du taux de conversion du bénéfice en cash est-elle utile ?',
                        'answers' => [
                            ['text' => 'Elle permet d’évaluer dans quelle mesure le résultat comptable se transforme en liquidités', 'iscorrect' => true],
                            ['text' => 'Elle mesure directement la volatilité du cours', 'iscorrect' => false],
                            ['text' => 'Elle détermine automatiquement la valeur terminale', 'iscorrect' => false],
                            ['text' => 'Elle remplace l’analyse du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du nombre d’actions en circulation peut augmenter le BPA même si :',
                        'answers' => [
                            ['text' => 'Le bénéfice total reste stable', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires devient nécessairement négatif', 'iscorrect' => false],
                            ['text' => 'La dette disparaît', 'iscorrect' => false],
                            ['text' => 'Les marges deviennent nécessairement plus faibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une analyse de scénario pour une action cyclique ?',
                        'answers' => [
                            ['text' => 'Tester la valorisation sous différents niveaux de bénéfices et de conditions économiques', 'iscorrect' => true],
                            ['text' => 'Garantir le cours futur', 'iscorrect' => false],
                            ['text' => 'Éliminer la cyclicité', 'iscorrect' => false],
                            ['text' => 'Remplacer toute analyse financière', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 4 — Obligations et risque de taux
            // ================================================================
            [
                'title' => 'Analyse avancée des obligations',
                'questions' => [
                    [
                        'question' => 'Pourquoi la convexité améliore-t-elle l’approximation de la variation du prix d’une obligation ?',
                        'answers' => [
                            ['text' => 'Elle prend en compte la courbure de la relation entre prix obligataire et rendement', 'iscorrect' => true],
                            ['text' => 'Elle mesure uniquement le risque de défaut', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de taux', 'iscorrect' => false],
                            ['text' => 'Elle remplace toujours la duration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à duration élevée est particulièrement sensible à :',
                        'answers' => [
                            ['text' => 'Une variation du taux d’intérêt exigé par le marché', 'iscorrect' => true],
                            ['text' => 'Une variation du chiffre d’affaires de l’émetteur uniquement', 'iscorrect' => false],
                            ['text' => 'Une variation du nombre d’actions', 'iscorrect' => false],
                            ['text' => 'Une variation du dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un aplatissement de la courbe des taux peut avoir des implications différentes selon :',
                        'answers' => [
                            ['text' => 'La maturité des obligations détenues et la composition du portefeuille', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant du coupon', 'iscorrect' => false],
                            ['text' => 'Uniquement le nom de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions en circulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de réinvestissement peut-il être important pour une obligation à coupon élevé ?',
                        'answers' => [
                            ['text' => 'Les coupons reçus doivent être réinvestis à des taux qui peuvent être inférieurs aux hypothèses initiales', 'iscorrect' => true],
                            ['text' => 'Le coupon disparaît toujours', 'iscorrect' => false],
                            ['text' => 'La valeur nominale devient nulle', 'iscorrect' => false],
                            ['text' => 'Le risque de crédit devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation callable peut être remboursée avant l’échéance par :',
                        'answers' => [
                            ['text' => 'L’émetteur, selon les conditions prévues dans le contrat', 'iscorrect' => true],
                            ['text' => 'Uniquement le détenteur dans tous les cas', 'iscorrect' => false],
                            ['text' => 'La banque centrale automatiquement', 'iscorrect' => false],
                            ['text' => 'Le marché boursier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une option de remboursement anticipé peut-elle limiter le potentiel de hausse d’une obligation ?',
                        'answers' => [
                            ['text' => 'L’émetteur peut avoir intérêt à refinancer sa dette lorsque les taux deviennent favorables', 'iscorrect' => true],
                            ['text' => 'Le coupon augmente toujours lorsque les taux baissent', 'iscorrect' => false],
                            ['text' => 'La duration devient nécessairement nulle', 'iscorrect' => false],
                            ['text' => 'La dette devient automatiquement sans valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation des spreads de crédit signifie généralement que :',
                        'answers' => [
                            ['text' => 'Les investisseurs exigent une compensation plus importante pour le risque de crédit', 'iscorrect' => true],
                            ['text' => 'Le risque de défaut diminue nécessairement', 'iscorrect' => false],
                            ['text' => 'Les taux sans risque deviennent nuls', 'iscorrect' => false],
                            ['text' => 'Le prix des obligations risquées augmente nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation souveraine n’est-elle pas nécessairement sans risque pour un investisseur international ?',
                        'answers' => [
                            ['text' => 'Des risques de change, d’inflation ou de crédit souverain peuvent subsister', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les obligations souveraines font défaut', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle ne verse jamais de coupon', 'iscorrect' => false],
                            ['text' => 'Parce que son prix est toujours fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important pour une obligation à taux réel lorsque l’inflation évolue ?',
                        'answers' => [
                            ['text' => 'Le risque que l’évolution de l’inflation modifie le rendement réel attendu selon la structure de l’instrument', 'iscorrect' => true],
                            ['text' => 'Le risque que les actions deviennent automatiquement sans valeur', 'iscorrect' => false],
                            ['text' => 'Le risque de disparition de la maturité', 'iscorrect' => false],
                            ['text' => 'Le risque que le coupon devienne toujours négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une stratégie obligataire, pourquoi la gestion de la duration est-elle importante ?',
                        'answers' => [
                            ['text' => 'Elle permet d’ajuster l’exposition du portefeuille aux mouvements anticipés des taux', 'iscorrect' => true],
                            ['text' => 'Elle garantit un rendement positif', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Elle élimine l’inflation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 5 — Portefeuille avancé
            // ================================================================
            [
                'title' => 'Gestion avancée de portefeuille',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’optimisation moyenne-variance ?',
                        'answers' => [
                            ['text' => 'Identifier des portefeuilles offrant un compromis optimal entre rendement espéré et risque', 'iscorrect' => true],
                            ['text' => 'Maximiser uniquement le nombre de titres', 'iscorrect' => false],
                            ['text' => 'Éliminer toutes les pertes', 'iscorrect' => false],
                            ['text' => 'Garantir le rendement du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les estimations de rendement espéré peuvent-elles rendre une optimisation de portefeuille instable ?',
                        'answers' => [
                            ['text' => 'De petites erreurs dans les prévisions peuvent produire de fortes variations des pondérations optimales', 'iscorrect' => true],
                            ['text' => 'Les rendements sont toujours connus à l’avance', 'iscorrect' => false],
                            ['text' => 'Les corrélations sont toujours nulles', 'iscorrect' => false],
                            ['text' => 'Le risque n’intervient jamais dans l’optimisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque actif dans une gestion de portefeuille ?',
                        'answers' => [
                            ['text' => 'La volatilité de l’écart entre la performance du portefeuille et celle de son indice de référence', 'iscorrect' => true],
                            ['text' => 'La volatilité du marché uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de faillite uniquement', 'iscorrect' => false],
                            ['text' => 'La variation du dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le ratio d’information ?',
                        'answers' => [
                            ['text' => 'La performance active obtenue par unité de risque actif', 'iscorrect' => true],
                            ['text' => 'Le rendement sans risque', 'iscorrect' => false],
                            ['text' => 'Le taux de défaut', 'iscorrect' => false],
                            ['text' => 'La duration du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation historique entre deux actifs ne doit-elle pas être considérée comme constante ?',
                        'answers' => [
                            ['text' => 'Les relations entre actifs peuvent changer selon les régimes économiques et les conditions de marché', 'iscorrect' => true],
                            ['text' => 'Les corrélations sont toujours égales à zéro', 'iscorrect' => false],
                            ['text' => 'La corrélation est indépendante de l’environnement économique', 'iscorrect' => false],
                            ['text' => 'La diversification ne dépend jamais des corrélations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un portefeuille multi-actifs ?',
                        'answers' => [
                            ['text' => 'Combiner différentes sources de risque et de rendement afin d’améliorer la diversification', 'iscorrect' => true],
                            ['text' => 'Garantir une performance positive', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque systématique', 'iscorrect' => false],
                            ['text' => 'Éviter toute perte temporaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une allocation stratégique est généralement révisée lorsque :',
                        'answers' => [
                            ['text' => 'Les objectifs, contraintes ou hypothèses de long terme de l’investisseur changent', 'iscorrect' => true],
                            ['text' => 'Une action baisse pendant une seule journée', 'iscorrect' => false],
                            ['text' => 'Un actif progresse pendant une heure', 'iscorrect' => false],
                            ['text' => 'Le marché ouvre plus tard', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de concentration peut-il subsister dans un portefeuille possédant de nombreux titres ?',
                        'answers' => [
                            ['text' => 'Parce que les titres peuvent être fortement exposés aux mêmes facteurs économiques ou sectoriels', 'iscorrect' => true],
                            ['text' => 'Parce que le nombre de titres supprime toujours la diversification', 'iscorrect' => false],
                            ['text' => 'Parce que tous les titres ont des rendements identiques', 'iscorrect' => false],
                            ['text' => 'Parce que la diversification ne dépend jamais des facteurs communs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un portefeuille de référence ou benchmark ?',
                        'answers' => [
                            ['text' => 'Fournir une base de comparaison pour évaluer la performance et le risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir la performance du gestionnaire', 'iscorrect' => false],
                            ['text' => 'Éliminer les frais', 'iscorrect' => false],
                            ['text' => 'Déterminer automatiquement l’allocation optimale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le turnover élevé peut-il réduire la performance nette d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce qu’il peut augmenter les coûts de transaction, les frais et éventuellement les conséquences fiscales', 'iscorrect' => true],
                            ['text' => 'Parce qu’il garantit toujours des pertes', 'iscorrect' => false],
                            ['text' => 'Parce qu’il augmente automatiquement les frais de gestion fixes uniquement', 'iscorrect' => false],
                            ['text' => 'Parce qu’il élimine la diversification', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 6 — CAPM, facteurs et performance
            // ================================================================
            [
                'title' => 'Modèles de risque et mesure de performance',
                'questions' => [
                    [
                        'question' => 'Dans le CAPM, pourquoi le risque spécifique n’est-il normalement pas rémunéré dans l’équilibre du marché ?',
                        'answers' => [
                            ['text' => 'Parce qu’un investisseur peut le réduire par diversification', 'iscorrect' => true],
                            ['text' => 'Parce qu’il est toujours nul', 'iscorrect' => false],
                            ['text' => 'Parce qu’il est parfaitement prévisible', 'iscorrect' => false],
                            ['text' => 'Parce qu’il correspond au taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action possède un bêta de 1,4. Dans le cadre du CAPM, cela indique principalement :',
                        'answers' => [
                            ['text' => 'Une sensibilité supérieure à celle du marché aux variations du facteur de marché', 'iscorrect' => true],
                            ['text' => 'Un rendement annuel garanti de 1,4 %', 'iscorrect' => false],
                            ['text' => 'Une probabilité de défaut de 1,4 %', 'iscorrect' => false],
                            ['text' => 'Une volatilité exactement égale à 1,4 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un bêta historique est utilisé comme estimation du risque futur ?',
                        'answers' => [
                            ['text' => 'La relation historique entre l’actif et le marché peut changer', 'iscorrect' => true],
                            ['text' => 'Le bêta historique est toujours égal à zéro', 'iscorrect' => false],
                            ['text' => 'Le bêta ne dépend jamais des données utilisées', 'iscorrect' => false],
                            ['text' => 'Le marché est parfaitement stable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’alpha d’un portefeuille dans une analyse de performance ajustée au risque ?',
                        'answers' => [
                            ['text' => 'La performance excédentaire par rapport à celle expliquée par le modèle de référence', 'iscorrect' => true],
                            ['text' => 'Le rendement sans risque uniquement', 'iscorrect' => false],
                            ['text' => 'La volatilité totale uniquement', 'iscorrect' => false],
                            ['text' => 'Le montant des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’alpha doit-il être interprété avec prudence ?',
                        'answers' => [
                            ['text' => 'Il dépend du modèle, du benchmark, de la période et de la qualité des données', 'iscorrect' => true],
                            ['text' => 'Il est toujours parfaitement mesuré', 'iscorrect' => false],
                            ['text' => 'Il ne dépend jamais du benchmark', 'iscorrect' => false],
                            ['text' => 'Il garantit une surperformance future', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche à expliquer un modèle multifactoriel ?',
                        'answers' => [
                            ['text' => 'La performance des actifs à partir de plusieurs facteurs de risque systématiques', 'iscorrect' => true],
                            ['text' => 'Uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Uniquement la comptabilité', 'iscorrect' => false],
                            ['text' => 'Le cours futur avec certitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse factorielle, une forte exposition au facteur value peut notamment être associée à :',
                        'answers' => [
                            ['text' => 'Une sensibilité aux caractéristiques de valorisation relatives des entreprises', 'iscorrect' => true],
                            ['text' => 'Une garantie de rendement positif', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une exposition uniquement aux obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt du ratio de Sortino par rapport au ratio de Sharpe ?',
                        'answers' => [
                            ['text' => 'Il se concentre sur la volatilité défavorable plutôt que sur la volatilité totale', 'iscorrect' => true],
                            ['text' => 'Il élimine le risque', 'iscorrect' => false],
                            ['text' => 'Il mesure uniquement le rendement brut', 'iscorrect' => false],
                            ['text' => 'Il ne nécessite aucune donnée historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le benchmark doit-il être cohérent avec le portefeuille évalué ?',
                        'answers' => [
                            ['text' => 'Parce qu’un benchmark inadéquat peut donner une évaluation trompeuse de la performance', 'iscorrect' => true],
                            ['text' => 'Parce que tous les benchmarks sont identiques', 'iscorrect' => false],
                            ['text' => 'Parce que le benchmark garantit la performance', 'iscorrect' => false],
                            ['text' => 'Parce qu’un benchmark supprime les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une surperformance apparente disparaît après ajustement pour l’exposition à certains facteurs. Quelle interprétation est possible ?',
                        'answers' => [
                            ['text' => 'La performance initiale pouvait être largement expliquée par des expositions factorielles plutôt que par une sélection spécifique', 'iscorrect' => true],
                            ['text' => 'Le portefeuille n’a jamais généré de rendement', 'iscorrect' => false],
                            ['text' => 'Les facteurs sont nécessairement inutiles', 'iscorrect' => false],
                            ['text' => 'La performance future est garantie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 7 — Macroéconomie et allocation avancée
            // ================================================================
            [
                'title' => 'Analyse macroéconomique et allocation avancée',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse rapide des taux réels peut-elle exercer une pression sur les valorisations des actions de croissance ?',
                        'answers' => [
                            ['text' => 'Les flux de trésorerie éloignés dans le temps sont davantage pénalisés par un taux d’actualisation plus élevé', 'iscorrect' => true],
                            ['text' => 'Les entreprises de croissance cessent automatiquement de vendre', 'iscorrect' => false],
                            ['text' => 'Les dividendes deviennent nécessairement nuls', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires passé disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une courbe des taux inversée peut-elle attirer l’attention des investisseurs ?',
                        'answers' => [
                            ['text' => 'Elle peut refléter des anticipations de ralentissement économique ou de changements futurs de politique monétaire', 'iscorrect' => true],
                            ['text' => 'Elle garantit une récession immédiate', 'iscorrect' => false],
                            ['text' => 'Elle signifie toujours que les actions vont monter', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque obligataire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une monnaie domestique qui s’apprécie fortement peut être défavorable à une entreprise exportatrice parce que :',
                        'answers' => [
                            ['text' => 'Ses revenus étrangers convertis en monnaie domestique peuvent diminuer toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Ses ventes étrangères deviennent automatiquement nulles', 'iscorrect' => false],
                            ['text' => 'Ses coûts domestiques disparaissent', 'iscorrect' => false],
                            ['text' => 'Son bénéfice comptable est toujours multiplié', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle affecter les entreprises très endettées ?',
                        'answers' => [
                            ['text' => 'Elle peut augmenter le coût du refinancement et réduire la capacité à financer de nouveaux projets', 'iscorrect' => true],
                            ['text' => 'Elle supprime automatiquement toutes les dettes', 'iscorrect' => false],
                            ['text' => 'Elle garantit une hausse du ROIC', 'iscorrect' => false],
                            ['text' => 'Elle élimine les charges financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un environnement inflationniste, quelle entreprise peut disposer d’un avantage relatif ?',
                        'answers' => [
                            ['text' => 'Une entreprise ayant un fort pouvoir de fixation des prix et une structure de coûts relativement flexible', 'iscorrect' => true],
                            ['text' => 'Une entreprise incapable d’ajuster ses prix', 'iscorrect' => false],
                            ['text' => 'Une entreprise sans revenus', 'iscorrect' => false],
                            ['text' => 'Une entreprise dont les coûts augmentent plus vite que les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les matières premières peuvent-elles influencer fortement certains secteurs ?',
                        'answers' => [
                            ['text' => 'Elles peuvent représenter une part importante des coûts et modifier les marges selon leur évolution', 'iscorrect' => true],
                            ['text' => 'Elles n’ont jamais d’effet sur les coûts', 'iscorrect' => false],
                            ['text' => 'Elles garantissent les bénéfices', 'iscorrect' => false],
                            ['text' => 'Elles déterminent directement tous les cours boursiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les actions défensives peuvent-elles être recherchées dans certaines phases de ralentissement ?',
                        'answers' => [
                            ['text' => 'Leurs revenus peuvent être relativement moins sensibles au cycle économique', 'iscorrect' => true],
                            ['text' => 'Elles garantissent toujours un rendement positif', 'iscorrect' => false],
                            ['text' => 'Elles ne peuvent jamais être surévaluées', 'iscorrect' => false],
                            ['text' => 'Elles ne subissent jamais de volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une analyse de régime économique ?',
                        'answers' => [
                            ['text' => 'Identifier comment différentes classes d’actifs et secteurs peuvent se comporter selon l’environnement macroéconomique', 'iscorrect' => true],
                            ['text' => 'Prédire parfaitement le marché', 'iscorrect' => false],
                            ['text' => 'Supprimer l’incertitude', 'iscorrect' => false],
                            ['text' => 'Garantir une allocation optimale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chocs géopolitiques peuvent-ils modifier rapidement les valorisations ?',
                        'answers' => [
                            ['text' => 'Ils peuvent modifier les primes de risque, les perspectives de bénéfices et les flux de capitaux', 'iscorrect' => true],
                            ['text' => 'Ils n’affectent jamais les marchés financiers', 'iscorrect' => false],
                            ['text' => 'Ils garantissent une baisse de toutes les actions', 'iscorrect' => false],
                            ['text' => 'Ils modifient automatiquement les bénéfices passés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios macroéconomiques doivent-ils être intégrés à une analyse d’investissement avancée ?',
                        'answers' => [
                            ['text' => 'Parce que différentes hypothèses économiques peuvent modifier simultanément les revenus, les marges, les taux et les primes de risque', 'iscorrect' => true],
                            ['text' => 'Parce qu’un seul scénario est toujours faux', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont parfaitement prévisibles', 'iscorrect' => false],
                            ['text' => 'Parce que les fondamentaux ne comptent plus', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            // ================================================================
            // QUIZ 8 — Étude de cas d’investissement avancée
            // ================================================================
            [
                'title' => 'Décision d’investissement et études de cas',
                'questions' => [
                    [
                        'question' => 'Une entreprise présente une croissance élevée, un ROIC supérieur au WACC et un marché adressable important. Quel risque doit encore être examiné ?',
                        'answers' => [
                            ['text' => 'La durabilité de la croissance et la capacité à maintenir un avantage concurrentiel', 'iscorrect' => true],
                            ['text' => 'Aucun risque supplémentaire', 'iscorrect' => false],
                            ['text' => 'Uniquement le dividende historique', 'iscorrect' => false],
                            ['text' => 'Uniquement le cours de la veille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action semble sous-évaluée selon un DCF, mais la quasi-totalité de sa valeur provient de la valeur terminale. Quelle précaution est essentielle ?',
                        'answers' => [
                            ['text' => 'Tester fortement la sensibilité aux hypothèses de croissance terminale et de taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Acheter immédiatement', 'iscorrect' => false],
                            ['text' => 'Ignorer le WACC', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement le cours historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société possède une dette importante arrivant à échéance dans deux ans. Dans l’analyse d’investissement, il est particulièrement pertinent d’examiner :',
                        'answers' => [
                            ['text' => 'La capacité de refinancement, les flux de trésorerie et les conditions futures de crédit', 'iscorrect' => true],
                            ['text' => 'Uniquement la marge brute', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Uniquement le dividende passé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille affiche une forte performance mais une exposition importante à un seul facteur de risque. Quelle conclusion est appropriée ?',
                        'answers' => [
                            ['text' => 'Une partie de la performance peut provenir de cette exposition et doit être distinguée d’une véritable compétence de sélection', 'iscorrect' => true],
                            ['text' => 'La performance prouve automatiquement la compétence', 'iscorrect' => false],
                            ['text' => 'Le facteur ne présente aucun risque', 'iscorrect' => false],
                            ['text' => 'La diversification est nécessairement parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dispose d’une excellente croissance mais réinvestit massivement à un ROIC décroissant. Quelle question devient centrale ?',
                        'answers' => [
                            ['text' => 'La croissance supplémentaire crée-t-elle encore suffisamment de valeur par rapport au capital investi ?', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires est-il toujours positif ?', 'iscorrect' => false],
                            ['text' => 'Le cours peut-il augmenter demain ?', 'iscorrect' => false],
                            ['text' => 'Le dividende peut-il être supprimé ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation offre un rendement élevé mais possède une faible qualité de crédit. Quelle analyse est indispensable ?',
                        'answers' => [
                            ['text' => 'Comparer le rendement supplémentaire au risque de défaut, de dégradation et de perte en cas de défaut', 'iscorrect' => true],
                            ['text' => 'Conclure que le rendement élevé garantit une meilleure performance', 'iscorrect' => false],
                            ['text' => 'Ignorer le bilan de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Supposer que le spread est sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur possède un portefeuille très diversifié mais dont les actifs deviennent fortement corrélés pendant une crise. Que montre cette situation ?',
                        'answers' => [
                            ['text' => 'La diversification historique peut être moins efficace lorsque les corrélations changent en période de stress', 'iscorrect' => true],
                            ['text' => 'La diversification ne sert jamais à rien', 'iscorrect' => false],
                            ['text' => 'Les actifs deviennent sans risque', 'iscorrect' => false],
                            ['text' => 'Les corrélations sont toujours constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société affiche un faible P/B mais un ROE très faible. Quelle interprétation peut être pertinente ?',
                        'answers' => [
                            ['text' => 'La faible valorisation comptable peut refléter une rentabilité insuffisante des capitaux propres', 'iscorrect' => true],
                            ['text' => 'Le faible P/B prouve une sous-évaluation', 'iscorrect' => false],
                            ['text' => 'Le ROE n’a aucune importance', 'iscorrect' => false],
                            ['text' => 'Le risque financier est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise possède plusieurs activités très différentes, quelle approche peut améliorer l’analyse de valorisation ?',
                        'answers' => [
                            ['text' => 'Une valorisation par somme des parties permettant d’appliquer des hypothèses adaptées à chaque activité', 'iscorrect' => true],
                            ['text' => 'Utiliser obligatoirement un seul multiple pour toutes les activités', 'iscorrect' => false],
                            ['text' => 'Ignorer les activités secondaires', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement le chiffre d’affaires consolidé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle démarche correspond le mieux à une décision d’investissement avancée ?',
                        'answers' => [
                            ['text' => 'Évaluer les fondamentaux, la valorisation, les scénarios, les risques, les catalyseurs et le rapport rendement-risque', 'iscorrect' => true],
                            ['text' => 'Acheter uniquement sur la base d’un ratio', 'iscorrect' => false],
                            ['text' => 'Suivre uniquement la tendance récente du cours', 'iscorrect' => false],
                            ['text' => 'Ignorer les hypothèses de valorisation', 'iscorrect' => false],
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

                /*
                 * Mélange des réponses :
                 * la bonne réponse n'est volontairement pas toujours
                 * en première position.
                 */
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
