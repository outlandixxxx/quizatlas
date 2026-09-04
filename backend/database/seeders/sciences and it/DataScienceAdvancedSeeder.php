<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DataScienceAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'data-science')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Data Science Advanced — Feature Engineering et sélection avancée',
                'description' => 'Maîtrisez les stratégies avancées de création, sélection et validation des variables pour les modèles Data Science.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une feature hautement prédictive peut-elle être dangereuse si elle est calculée après l’événement cible ?',
                        'explanation' => 'La feature introduit alors une information indisponible au moment réel de la prédiction, ce qui crée une fuite de données.',
                        'choices' => [
                            ['choice_text' => 'Elle introduit une fuite temporelle ou de cible', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit toujours la variance', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une meilleure généralisation', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme automatiquement le problème en clustering', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse univariée des features peut-elle être insuffisante ?',
                        'explanation' => 'Une variable peut sembler peu informative seule mais devenir très utile en interaction avec d’autres variables.',
                        'choices' => [
                            ['choice_text' => 'Certaines informations utiles apparaissent uniquement dans les interactions entre variables', 'is_correct' => true],
                            ['choice_text' => 'Une feature utile doit toujours être fortement corrélée seule avec la cible', 'is_correct' => false],
                            ['choice_text' => 'Les interactions ne peuvent jamais être modélisées', 'is_correct' => false],
                            ['choice_text' => 'L’analyse univariée prouve toujours la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser une cible encodée à partir d’une information future ?',
                        'explanation' => 'Le modèle peut exploiter indirectement la réponse elle-même ou une information disponible seulement après l’événement.',
                        'choices' => [
                            ['choice_text' => 'Une fuite de cible', 'is_correct' => true],
                            ['choice_text' => 'Une réduction de la variance', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure calibration garantie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du nombre de features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sélection de features doit-elle être intégrée à la validation croisée ?',
                        'explanation' => 'La sélection doit être recalculée à l’intérieur des folds afin d’éviter que le processus utilise indirectement des informations de validation.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter la fuite d’information entre les folds', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le nombre de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les features corrélées', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une meilleure performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente une sélection de variables parcimonieuse ?',
                        'explanation' => 'Moins de variables peuvent réduire la complexité, améliorer l’interprétabilité et parfois réduire le bruit.',
                        'choices' => [
                            ['choice_text' => 'Réduire la complexité et faciliter l’interprétation du modèle', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure précision dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les biais', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tout surapprentissage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les interactions entre variables peuvent-elles être utiles dans un modèle tabulaire ?',
                        'explanation' => 'L’effet d’une variable peut dépendre de la valeur d’une autre. Une interaction explicite permet de représenter cette relation.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’effet d’une variable peut dépendre du contexte fourni par une autre', 'is_correct' => true],
                            ['choice_text' => 'Parce que les variables deviennent automatiquement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les interactions remplacent toutes les features originales', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles garantissent la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable ID peut-elle être dangereuse dans un modèle ?',
                        'explanation' => 'Un identifiant peut sembler prédictif par hasard ou encoder indirectement des informations du système sans relation stable avec la cible.',
                        'choices' => [
                            ['choice_text' => 'Elle peut créer des relations artificielles qui ne se généralisent pas', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours une bonne feature', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours la cible', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit l’absence de multicolinéarité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un target encoding mal réalisé ?',
                        'explanation' => 'Si les statistiques de la cible sont calculées sur des observations de validation ou de test, le modèle peut indirectement connaître la réponse.',
                        'choices' => [
                            ['choice_text' => 'Une fuite de cible', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique du surapprentissage', 'is_correct' => false],
                            ['choice_text' => 'Une perte systématique de toutes les catégories', 'is_correct' => false],
                            ['choice_text' => 'Une normalisation automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer l’importance des variables entre plusieurs modèles peut-il être utile ?',
                        'explanation' => 'Une importance stable entre plusieurs approches peut renforcer la confiance qu’une variable apporte réellement du signal, même si aucune mesure d’importance ne prouve une causalité.',
                        'choices' => [
                            ['choice_text' => 'Identifier les variables dont l’importance reste relativement stable', 'is_correct' => true],
                            ['choice_text' => 'Garantir une causalité', 'is_correct' => false],
                            ['choice_text' => 'Éliminer automatiquement les variables instables', 'is_correct' => false],
                            ['choice_text' => 'Prouver que le modèle est parfait', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une feature avec une forte importance prédictive ne doit-elle pas être automatiquement considérée comme une cause ?',
                        'explanation' => 'Une feature peut être un proxy d’une autre variable causale ou simplement être corrélée à la cible.',
                        'choices' => [
                            ['choice_text' => 'L’importance prédictive ne démontre pas une relation causale', 'is_correct' => true],
                            ['choice_text' => 'Les features ne peuvent jamais être causales', 'is_correct' => false],
                            ['choice_text' => 'Les modèles de Data Science ne mesurent aucune relation', 'is_correct' => false],
                            ['choice_text' => 'Une forte importance signifie toujours une causalité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Modèles d’ensemble et optimisation',
                'description' => 'Approfondissez les méthodes d’ensemble, le boosting, le bagging et l’optimisation des hyperparamètres.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principe du bagging ?',
                        'explanation' => 'Le bagging entraîne plusieurs modèles sur différents échantillons bootstrap puis agrège leurs prédictions.',
                        'choices' => [
                            ['choice_text' => 'Entraîner plusieurs modèles sur des échantillons bootstrap puis agréger leurs résultats', 'is_correct' => true],
                            ['choice_text' => 'Entraîner un seul modèle très profond', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les features corrélées', 'is_correct' => false],
                            ['choice_text' => 'Modifier uniquement la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe général du boosting ?',
                        'explanation' => 'Le boosting construit une séquence de modèles faibles où les modèles suivants tentent de corriger certaines erreurs des précédents.',
                        'choices' => [
                            ['choice_text' => 'Construire progressivement des modèles qui corrigent les erreurs précédentes', 'is_correct' => true],
                            ['choice_text' => 'Créer tous les modèles complètement indépendamment sans agrégation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les observations difficiles', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le nombre d’arbres dans Random Forest est-il un hyperparamètre ?',
                        'explanation' => 'Il contrôle la quantité de modèles agrégés et influence le coût de calcul ainsi que la stabilité des prédictions.',
                        'choices' => [
                            ['choice_text' => 'Il influence le nombre de modèles agrégés et le coût de calcul', 'is_correct' => true],
                            ['choice_text' => 'Il définit toujours directement la profondeur de chaque arbre', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Il définit le nombre de classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’optimisation bayésienne peut-elle être utilisée pour régler des hyperparamètres ?',
                        'explanation' => 'Elle cherche intelligemment de nouvelles configurations en utilisant les résultats des essais précédents afin de réduire le nombre d’évaluations coûteuses.',
                        'choices' => [
                            ['choice_text' => 'Pour guider les essais futurs à partir des résultats déjà observés', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les essais expérimentaux', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le meilleur modèle théorique', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les données de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un grid search peut-il devenir coûteux ?',
                        'explanation' => 'Le nombre de combinaisons peut croître rapidement lorsque plusieurs hyperparamètres et plusieurs valeurs sont testés.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de combinaisons peut augmenter rapidement avec chaque hyperparamètre', 'is_correct' => true],
                            ['choice_text' => 'Il ne nécessite jamais d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut tester qu’un seul modèle', 'is_correct' => false],
                            ['choice_text' => 'Il réduit automatiquement la taille du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un random search par rapport à un grid search dans certains cas ?',
                        'explanation' => 'Random search peut explorer efficacement des espaces larges en concentrant les essais sur des combinaisons variées plutôt que sur toutes les combinaisons d’une grille.',
                        'choices' => [
                            ['choice_text' => 'Explorer plus efficacement certains espaces d’hyperparamètres avec moins d’essais', 'is_correct' => true],
                            ['choice_text' => 'Garantir le meilleur optimum', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la validation croisée', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le surapprentissage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ensemble peut-il améliorer la stabilité des prédictions ?',
                        'explanation' => 'Agrèger plusieurs modèles réduit l’influence des fluctuations propres à un modèle individuel.',
                        'choices' => [
                            ['choice_text' => 'L’agrégation peut réduire la variance de certaines prédictions', 'is_correct' => true],
                            ['choice_text' => 'Tous les modèles deviennent identiques', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent automatiquement plus propres', 'is_correct' => false],
                            ['choice_text' => 'La causalité devient certaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsque le boosting est trop complexe ou trop longtemps entraîné ?',
                        'explanation' => 'Un boosting très poussé peut finir par s’adapter excessivement aux données d’entraînement.',
                        'choices' => [
                            ['choice_text' => 'Un risque accru de surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de meilleure généralisation', 'is_correct' => false],
                            ['choice_text' => 'La suppression des données difficiles', 'is_correct' => false],
                            ['choice_text' => 'Une réduction obligatoire du temps de calcul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il utiliser une métrique adaptée au problème pour optimiser les hyperparamètres ?',
                        'explanation' => 'Optimiser une métrique qui ne reflète pas l’objectif métier peut conduire à sélectionner un modèle techniquement performant mais inutile.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner l’optimisation sur la véritable performance recherchée', 'is_correct' => true],
                            ['choice_text' => 'Pour maximiser automatiquement toutes les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter le besoin d’un dataset de test', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le rôle du métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les essais d’hyperparamètres doivent-ils être reproductibles ?',
                        'explanation' => 'La reproductibilité permet de comprendre les résultats, comparer les expériences et revenir à une configuration précise.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir comparer et reproduire les résultats expérimentaux', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que tous les modèles ont les mêmes scores', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’utiliser des métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Séries temporelles et prévision',
                'description' => 'Analysez les tendances, saisonnalités, autocorrélations et stratégies avancées de forecasting.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’autocorrélation est-elle importante dans une série temporelle ?',
                        'explanation' => 'Elle mesure la relation entre les valeurs d’une série et ses propres valeurs décalées dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Elle mesure la dépendance entre les observations séparées dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure uniquement la corrélation entre deux variables indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la saisonnalité', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la stationnarité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stationnarité peut-elle être importante pour certains modèles de séries temporelles ?',
                        'explanation' => 'Certains modèles supposent que les propriétés statistiques de la série restent relativement stables dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Certains modèles reposent sur l’hypothèse de propriétés statistiques relativement stables', 'is_correct' => true],
                            ['choice_text' => 'Toute série temporelle est nécessairement stationnaire', 'is_correct' => false],
                            ['choice_text' => 'La stationnarité supprime toute saisonnalité automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit toujours une prévision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une validation aléatoire classique sur une série temporelle ?',
                        'explanation' => 'Un split aléatoire peut faire apparaître dans l’entraînement des observations plus récentes que celles du jeu de validation.',
                        'choices' => [
                            ['choice_text' => 'Une fuite temporelle et une estimation irréaliste des performances futures', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la saisonnalité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des données anciennes', 'is_correct' => false],
                            ['choice_text' => 'Une garantie de meilleure robustesse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une prévision à plusieurs horizons est-elle plus difficile qu’une prévision à un seul pas ?',
                        'explanation' => 'Les erreurs peuvent se propager sur plusieurs étapes et l’incertitude augmente généralement avec l’horizon.',
                        'choices' => [
                            ['choice_text' => 'L’incertitude et les erreurs peuvent se propager avec l’horizon', 'is_correct' => true],
                            ['choice_text' => 'La série devient automatiquement non numérique', 'is_correct' => false],
                            ['choice_text' => 'Les données futures sont toujours connues', 'is_correct' => false],
                            ['choice_text' => 'La saisonnalité disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal rôle d’une différenciation dans certaines séries temporelles ?',
                        'explanation' => 'La différenciation peut aider à enlever une tendance persistante et rendre la série plus proche de la stationnarité.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines tendances afin de stabiliser la série', 'is_correct' => true],
                            ['choice_text' => 'Créer des valeurs futures', 'is_correct' => false],
                            ['choice_text' => 'Ajouter automatiquement une saisonnalité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute autocorrélation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la prévision naïve peut-elle être un benchmark important ?',
                        'explanation' => 'Un modèle complexe doit être comparé à une baseline simple pour vérifier qu’il apporte réellement une amélioration.',
                        'choices' => [
                            ['choice_text' => 'Elle fournit une référence simple que le modèle avancé doit dépasser', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours meilleure que les modèles complexes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toute évaluation', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une prévision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs de prévision doivent-elles être analysées en fonction de l’horizon ?',
                        'explanation' => 'Un modèle peut être performant à court terme mais se dégrader fortement sur des horizons longs.',
                        'choices' => [
                            ['choice_text' => 'La performance peut varier fortement selon la distance temporelle de la prévision', 'is_correct' => true],
                            ['choice_text' => 'L’horizon n’a jamais d’effet', 'is_correct' => false],
                            ['choice_text' => 'Toutes les prévisions ont le même niveau d’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Les données futures sont toujours connues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’agréger des prévisions selon plusieurs modèles ?',
                        'explanation' => 'Combiner plusieurs approches peut réduire certaines erreurs spécifiques à un seul modèle.',
                        'choices' => [
                            ['choice_text' => 'Exploiter des erreurs différentes entre modèles pour améliorer la robustesse', 'is_correct' => true],
                            ['choice_text' => 'Garantir une prévision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la saisonnalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les événements externes peuvent-ils compliquer le forecasting ?',
                        'explanation' => 'Des événements inattendus comme une crise ou une rupture de marché peuvent modifier fortement le comportement de la série.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent provoquer des changements de régime non présents dans les données historiques', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours prévisibles à partir des valeurs passées', 'is_correct' => false],
                            ['choice_text' => 'Ils ne changent jamais la série', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent toute saisonnalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver l’ordre chronologique lors de l’évaluation finale ?',
                        'explanation' => 'L’objectif d’un modèle de forecasting est de prédire le futur à partir du passé, donc l’évaluation doit reproduire cette logique.',
                        'choices' => [
                            ['choice_text' => 'Pour simuler correctement les conditions de prédiction du futur', 'is_correct' => true],
                            ['choice_text' => 'Pour mélanger les observations', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute métrique', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement la taille du training set', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Détection d’anomalies',
                'description' => 'Maîtrisez les approches statistiques et algorithmiques pour détecter les observations inhabituelles.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une anomalie statistique n’est-elle pas forcément une erreur ?',
                        'explanation' => 'Un point rare peut représenter un phénomène réel important ou un événement exceptionnel.',
                        'choices' => [
                            ['choice_text' => 'Une observation rare peut être réelle et importante', 'is_correct' => true],
                            ['choice_text' => 'Toutes les anomalies sont nécessairement des erreurs', 'is_correct' => false],
                            ['choice_text' => 'Les anomalies sont toujours causées par le système', 'is_correct' => false],
                            ['choice_text' => 'Une anomalie ne peut jamais être utile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt général de l’Isolation Forest ?',
                        'explanation' => 'Isolation Forest cherche à isoler rapidement les observations atypiques grâce à des partitions aléatoires.',
                        'choices' => [
                            ['choice_text' => 'Identifier des observations faciles à isoler comme atypiques', 'is_correct' => true],
                            ['choice_text' => 'Effectuer uniquement une régression linéaire', 'is_correct' => false],
                            ['choice_text' => 'Créer des labels manuellement', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la définition d’une anomalie doit-elle dépendre du contexte ?',
                        'explanation' => 'Une valeur rare dans un système peut être normale dans un autre. Le seuil de normalité dépend du domaine et du processus.',
                        'choices' => [
                            ['choice_text' => 'La notion de normalité dépend du domaine et du comportement attendu', 'is_correct' => true],
                            ['choice_text' => 'Toutes les anomalies sont universelles', 'is_correct' => false],
                            ['choice_text' => 'Le contexte n’influence jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Une valeur rare est toujours incorrecte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les méthodes de détection d’anomalies peuvent-elles produire beaucoup de faux positifs ?',
                        'explanation' => 'Les comportements rares légitimes peuvent être confondus avec des anomalies si le modèle ne comprend pas suffisamment le contexte.',
                        'choices' => [
                            ['choice_text' => 'Des événements rares mais légitimes peuvent être signalés à tort', 'is_correct' => true],
                            ['choice_text' => 'Les anomalies ne peuvent jamais être normales', 'is_correct' => false],
                            ['choice_text' => 'Les modèles détectent toujours parfaitement les anomalies', 'is_correct' => false],
                            ['choice_text' => 'Les faux positifs n’existent pas en détection d’anomalies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente une approche basée sur des seuils métier ?',
                        'explanation' => 'Un seuil métier peut être défini selon un niveau de risque ou une contrainte connue du processus.',
                        'choices' => [
                            ['choice_text' => 'Aligner la détection sur des règles et risques opérationnels connus', 'is_correct' => true],
                            ['choice_text' => 'Garantir que tous les cas sont détectés', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute analyse statistique', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement un modèle complexe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il surveiller le taux d’anomalies dans le temps ?',
                        'explanation' => 'Un changement soudain du taux d’anomalies peut signaler un changement du système, une dérive des données ou un problème de détection.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les changements du comportement des données ou du détecteur', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le nombre d’anomalies reste constant', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les anomalies', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une anomalie multivariée peut-elle être difficile à détecter avec une analyse univariée ?',
                        'explanation' => 'Une observation peut être normale sur chaque variable prise séparément mais inhabituelle par combinaison.',
                        'choices' => [
                            ['choice_text' => 'La combinaison de plusieurs variables peut être inhabituelle même si chaque variable semble normale seule', 'is_correct' => true],
                            ['choice_text' => 'Les anomalies multivariées sont toujours identiques aux outliers univariés', 'is_correct' => false],
                            ['choice_text' => 'Une variable ne peut jamais interagir avec une autre', 'is_correct' => false],
                            ['choice_text' => 'Les distributions univariées détectent toutes les anomalies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal problème d’un seuil d’anomalie fixé trop bas ?',
                        'explanation' => 'Un seuil trop sensible peut signaler de nombreux comportements légitimes comme anomalies.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation importante des faux positifs', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des anomalies réelles', 'is_correct' => false],
                            ['choice_text' => 'Une précision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du trafic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un seuil d’anomalie doit-il parfois être ajusté selon les segments ?',
                        'explanation' => 'Les distributions et comportements normaux peuvent différer selon les groupes, produits, régions ou périodes.',
                        'choices' => [
                            ['choice_text' => 'Les comportements normaux peuvent varier entre différents segments', 'is_correct' => true],
                            ['choice_text' => 'Toutes les populations ont toujours la même distribution', 'is_correct' => false],
                            ['choice_text' => 'Les segments ne contiennent jamais de signal', 'is_correct' => false],
                            ['choice_text' => 'Un seuil global est toujours optimal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il analyser les anomalies détectées avant de les supprimer automatiquement ?',
                        'explanation' => 'Certaines anomalies sont précisément les événements les plus importants du dataset.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent contenir des événements rares mais significatifs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une anomalie est toujours une donnée correcte', 'is_correct' => false],
                            ['choice_text' => 'Parce que la suppression augmente toujours la qualité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les anomalies ne peuvent pas être analysées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Expérimentation et A/B Testing',
                'description' => 'Évaluez les pratiques avancées de conception, analyse et interprétation des expérimentations.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’un A/B test ?',
                        'explanation' => 'Un A/B test compare deux variantes dans des conditions contrôlées afin d’estimer si une différence observée est associée au changement étudié.',
                        'choices' => [
                            ['choice_text' => 'Comparer deux variantes dans des conditions aussi contrôlées que possible', 'is_correct' => true],
                            ['choice_text' => 'Prouver automatiquement toute causalité', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le nombre de métriques', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute randomisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la randomisation est-elle importante dans un A/B test ?',
                        'explanation' => 'La randomisation aide à répartir les facteurs confondants entre les groupes et facilite l’interprétation causale.',
                        'choices' => [
                            ['choice_text' => 'Réduire les différences systématiques entre les groupes', 'is_correct' => true],
                            ['choice_text' => 'Garantir une taille d’échantillon infinie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les biais possibles', 'is_correct' => false],
                            ['choice_text' => 'Éviter de définir une métrique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi définir la métrique principale avant l’expérience ?',
                        'explanation' => 'Définir à l’avance la métrique principale réduit le risque de choisir après coup la métrique qui donne le meilleur résultat.',
                        'choices' => [
                            ['choice_text' => 'Éviter de sélectionner après coup la métrique la plus favorable', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement la significativité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les métriques secondaires', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse statistique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’arrêter un A/B test dès qu’une différence devient significative ?',
                        'explanation' => 'Les tests surveillés continuellement sans méthode adaptée peuvent augmenter le risque de faux positifs.',
                        'choices' => [
                            ['choice_text' => 'Augmenter le risque de conclure à tort à un effet', 'is_correct' => true],
                            ['choice_text' => 'Diminuer automatiquement la taille du groupe', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure estimation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la randomisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesurer l’effet pratique en plus de la significativité statistique ?',
                        'explanation' => 'Une différence statistiquement significative peut être trop petite pour avoir une valeur métier réelle.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si l’ampleur de l’effet est réellement utile', 'is_correct' => true],
                            ['choice_text' => 'Parce que la significativité n’existe jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une causalité dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les intervalles de confiance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les métriques secondaires sont-elles utiles dans une expérimentation produit ?',
                        'explanation' => 'Une modification peut améliorer une métrique principale tout en dégradant d’autres dimensions importantes.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter des effets secondaires négatifs ou positifs', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer la métrique principale', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le succès de l’expérience', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute définition préalable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier que les groupes expérimentaux sont comparables au début du test ?',
                        'explanation' => 'Des déséquilibres initiaux peuvent compliquer l’interprétation des différences observées.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que les différences ne proviennent pas principalement d’un déséquilibre initial', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la randomisation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que l’effet sera positif', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si les utilisateurs passent d’une variante à l’autre pendant l’expérience ?',
                        'explanation' => 'Le mélange des conditions peut contaminer les groupes et rendre l’estimation de l’effet moins claire.',
                        'choices' => [
                            ['choice_text' => 'Une contamination entre groupes', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la puissance statistique', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure randomisation', 'is_correct' => false],
                            ['choice_text' => 'Une réduction des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tenir compte des effets saisonniers dans certaines expériences ?',
                        'explanation' => 'Le comportement peut varier naturellement selon le jour, la semaine ou la saison et confondre les résultats.',
                        'choices' => [
                            ['choice_text' => 'Le comportement naturel des utilisateurs peut varier au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'La saisonnalité n’influence jamais les métriques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la randomisation', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit un effet positif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider la décision finale après un A/B test ?',
                        'explanation' => 'La décision doit intégrer significativité, taille de l’effet, coûts, risques et pertinence métier.',
                        'choices' => [
                            ['choice_text' => 'Combiner résultats statistiques, ampleur de l’effet et impact métier', 'is_correct' => true],
                            ['choice_text' => 'Choisir toujours la variante avec la plus petite p-value', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les métriques secondaires', 'is_correct' => false],
                            ['choice_text' => 'Déployer automatiquement dès qu’une différence apparaît', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Data Storytelling et décision',
                'description' => 'Maîtrisez l’interprétation et la communication professionnelle des résultats Data Science.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi une visualisation très sophistiquée peut-elle être moins efficace qu’un graphique simple ?',
                        'explanation' => 'La visualisation doit aider à comprendre rapidement le message. Une complexité inutile peut détourner l’attention.',
                        'choices' => [
                            ['choice_text' => 'La complexité visuelle peut masquer le message principal', 'is_correct' => true],
                            ['choice_text' => 'Les graphiques simples sont toujours statistiquement meilleurs', 'is_correct' => false],
                            ['choice_text' => 'Les graphiques complexes sont toujours incorrects', 'is_correct' => false],
                            ['choice_text' => 'Un graphique ne doit jamais contenir plusieurs variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi afficher l’incertitude dans une présentation analytique ?',
                        'explanation' => 'Les estimations ne sont pas certaines à 100 %. Montrer l’incertitude évite une interprétation excessive des résultats.',
                        'choices' => [
                            ['choice_text' => 'Pour communiquer la confiance et les limites de l’estimation', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les résultats moins utiles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les statistiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’utiliser un axe tronqué dans un graphique sans l’indiquer clairement ?',
                        'explanation' => 'Un axe tronqué peut exagérer visuellement les différences entre les valeurs.',
                        'choices' => [
                            ['choice_text' => 'Exagérer visuellement l’importance d’une différence', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure lisibilité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les anomalies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contexte métier doit-il accompagner une analyse statistique ?',
                        'explanation' => 'Un résultat statistique n’indique pas automatiquement s’il est important pour le processus ou la décision concernée.',
                        'choices' => [
                            ['choice_text' => 'Pour relier le résultat statistique à une décision ou un enjeu réel', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer les données', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une moyenne globale peut-elle conduire à une mauvaise décision ?',
                        'explanation' => 'Les comportements de sous-groupes peuvent être très différents et être masqués par l’agrégation.',
                        'choices' => [
                            ['choice_text' => 'Les différences entre segments peuvent être cachées par l’agrégation', 'is_correct' => true],
                            ['choice_text' => 'La moyenne est toujours incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Les segments n’ont jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'L’agrégation garantit toujours une meilleure décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décideurs doivent-ils connaître les hypothèses importantes d’une analyse ?',
                        'explanation' => 'Les hypothèses définissent les conditions dans lesquelles les conclusions restent valides.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre les conditions de validité des conclusions', 'is_correct' => true],
                            ['choice_text' => 'Pour reproduire automatiquement le modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les limites', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une recommandation Data Science professionnelle ?',
                        'explanation' => 'Elle transforme l’analyse en action possible tout en indiquant les conditions, risques et limites associés.',
                        'choices' => [
                            ['choice_text' => 'Relier les résultats à une action et expliciter les conditions de cette décision', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement des statistiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir que la décision sera toujours correcte', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les responsables métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un scénario de référence à un scénario amélioré ?',
                        'explanation' => 'Le baseline permet d’estimer le gain réel apporté par une modification.',
                        'choices' => [
                            ['choice_text' => 'Mesurer le gain relatif à une situation de référence', 'is_correct' => true],
                            ['choice_text' => 'Garantir une causalité dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Éviter les métriques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les résultats négatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer performance statistique et performance opérationnelle ?',
                        'explanation' => 'Un modèle peut être performant sur un dataset mais être trop lent, trop coûteux ou difficile à intégrer en production.',
                        'choices' => [
                            ['choice_text' => 'Un modèle peut être performant statistiquement mais inadapté aux contraintes réelles', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'La performance opérationnelle n’est jamais importante', 'is_correct' => false],
                            ['choice_text' => 'Les coûts ne concernent pas les modèles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un bon principe pour présenter une conclusion Data Science ?',
                        'explanation' => 'Une conclusion doit résumer le résultat, son incertitude, ses limites et sa signification pour la décision.',
                        'choices' => [
                            ['choice_text' => 'Présenter clairement le résultat, ses limites et son implication métier', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement la métrique la plus favorable', 'is_correct' => false],
                            ['choice_text' => 'Masquer les hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute mention d’incertitude', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Pipelines et production',
                'description' => 'Approfondissez la construction de pipelines Data Science fiables, reproductibles et observables.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un pipeline Data Science doit-il être reproductible ?',
                        'explanation' => 'La reproductibilité permet de retrouver les mêmes résultats à partir des mêmes données, code et paramètres.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir reconstruire et expliquer les résultats obtenus', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution du pipeline', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une précision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner les datasets dans un projet analytique important ?',
                        'explanation' => 'Les analyses dépendent des données utilisées. Une version précise permet de reproduire les résultats.',
                        'choices' => [
                            ['choice_text' => 'Relier chaque résultat à la version exacte des données utilisées', 'is_correct' => true],
                            ['choice_text' => 'Empêcher les datasets d’évoluer', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données anciennes', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer ingestion, transformation et modélisation dans un pipeline ?',
                        'explanation' => 'La séparation facilite les tests, la maintenance, l’observabilité et l’évolution indépendante des étapes.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre chaque étape plus testable et maintenable', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépendances', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les données sont parfaites', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le pipeline entièrement manuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un data quality check dans un pipeline ?',
                        'explanation' => 'Les contrôles de qualité détectent les schémas inattendus, valeurs aberrantes, volumes anormaux ou données manquantes avant les étapes suivantes.',
                        'choices' => [
                            ['choice_text' => 'Détecter les problèmes de données avant qu’ils ne contaminent les traitements suivants', 'is_correct' => true],
                            ['choice_text' => 'Garantir la qualité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les observations anormales', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les modèles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pipelines doivent-ils être idempotents lorsque cela est possible ?',
                        'explanation' => 'Une étape idempotente peut être rejouée sans produire d’effets indésirables supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir rejouer une étape sans créer de résultats incohérents', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute exécution multiple', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi monitorer un pipeline de données en production ?',
                        'explanation' => 'Le volume, la fraîcheur, la qualité et les délais peuvent changer et provoquer des erreurs en aval.',
                        'choices' => [
                            ['choice_text' => 'Détecter les erreurs, retards et dérives dans les données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la performance du modèle', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute maintenance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue un orchestrateur de workflow Data Science ?',
                        'explanation' => 'Il coordonne les dépendances, exécutions, reprises et horaires entre différentes étapes du pipeline.',
                        'choices' => [
                            ['choice_text' => 'Coordonner les étapes et leurs dépendances', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement les labels', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les logs d’un pipeline doivent-ils être corrélables entre les étapes ?',
                        'explanation' => 'Des identifiants de corrélation facilitent le suivi d’une exécution de bout en bout et accélèrent le diagnostic.',
                        'choices' => [
                            ['choice_text' => 'Pour retracer une exécution complète lors d’un incident', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les alertes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les pipelines manuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une étape de preprocessing doit-elle être testée séparément du modèle ?',
                        'explanation' => 'Une erreur de preprocessing peut dégrader le modèle même si le modèle lui-même fonctionne correctement.',
                        'choices' => [
                            ['choice_text' => 'Une erreur de préparation peut rendre les entrées du modèle incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Le preprocessing ne produit jamais d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Le modèle corrige automatiquement toutes les erreurs de preprocessing', 'is_correct' => false],
                            ['choice_text' => 'Les tests séparés sont toujours inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver les artefacts intermédiaires dans certains pipelines ?',
                        'explanation' => 'Les artefacts intermédiaires facilitent le debugging, la reproductibilité et la reprise à partir d’une étape donnée.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le diagnostic et la reprise d’une exécution', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la précision', 'is_correct' => false],
                            ['choice_text' => 'Éviter la version des données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité d’orchestration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Advanced — Data Ethics, biais et confidentialité',
                'description' => 'Analysez les problématiques avancées de biais, confidentialité, représentativité et gouvernance des données.',
                'difficulty' => 'Advanced',
                'duration' => 20,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi un dataset représentatif est-il important pour une analyse ou un modèle ?',
                        'explanation' => 'Un dataset non représentatif peut conduire à des conclusions ou prédictions qui fonctionnent mal sur les populations réellement concernées.',
                        'choices' => [
                            ['choice_text' => 'Pour que les résultats soient plus pertinents sur la population cible', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir l’absence totale de biais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les groupes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire systématiquement la quantité de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un biais de sélection dans un dataset ?',
                        'explanation' => 'Si certaines populations sont sur- ou sous-représentées en raison du processus de collecte, les résultats peuvent être biaisés.',
                        'choices' => [
                            ['choice_text' => 'Les conclusions peuvent refléter le processus de sélection plutôt que la population réelle', 'is_correct' => true],
                            ['choice_text' => 'La collecte devient automatiquement plus représentative', 'is_correct' => false],
                            ['choice_text' => 'Le modèle devient nécessairement plus précis', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent aléatoires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’anonymisation ne doit-elle pas être considérée comme une garantie absolue de confidentialité ?',
                        'explanation' => 'Certaines données peuvent être réidentifiées lorsqu’elles sont combinées à d’autres sources ou lorsque les mécanismes d’anonymisation sont insuffisants.',
                        'choices' => [
                            ['choice_text' => 'Des informations apparemment anonymes peuvent parfois être réidentifiées', 'is_correct' => true],
                            ['choice_text' => 'L’anonymisation ne modifie jamais les données', 'is_correct' => false],
                            ['choice_text' => 'Toutes les données anonymisées deviennent publiques', 'is_correct' => false],
                            ['choice_text' => 'La confidentialité ne concerne que les mots de passe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de la minimisation des données ?',
                        'explanation' => 'La minimisation consiste à collecter et utiliser uniquement les données nécessaires à l’objectif défini.',
                        'choices' => [
                            ['choice_text' => 'Limiter la collecte et l’utilisation aux données nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Collecter toutes les données possibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute donnée analytique', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence de biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la provenance des données est-elle importante pour la gouvernance ?',
                        'explanation' => 'Elle permet de connaître l’origine, le contexte, les transformations et les responsabilités liées aux données.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité de l’origine et des transformations des données', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les données automatiquement publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tous les audits', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les métadonnées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle peut-il présenter des performances différentes selon les groupes ?',
                        'explanation' => 'Les groupes peuvent être différemment représentés, présenter des distributions différentes ou être affectés par des biais dans les données et le modèle.',
                        'choices' => [
                            ['choice_text' => 'Les données, distributions et caractéristiques peuvent différer entre groupes', 'is_correct' => true],
                            ['choice_text' => 'Les modèles doivent toujours être identiques pour tous les groupes', 'is_correct' => false],
                            ['choice_text' => 'Les métriques sont indépendantes des données', 'is_correct' => false],
                            ['choice_text' => 'Les différences sont toujours dues au hasard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle sur plusieurs sous-groupes est-il important ?',
                        'explanation' => 'Une performance globale élevée peut cacher des écarts significatifs entre sous-groupes.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier des disparités de performance cachées par les métriques globales', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les groupes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement l’équité', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les métriques globales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données sensibles nécessitent-elles des contrôles d’accès adaptés ?',
                        'explanation' => 'Limiter l’accès réduit le risque d’exposition et permet d’appliquer le principe du moindre privilège.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter l’accès aux seules personnes ou systèmes autorisés', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les données plus faciles à partager publiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute documentation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le biais peut-il apparaître même lorsque les données semblent très grandes ?',
                        'explanation' => 'Un dataset énorme peut toujours reproduire systématiquement un biais si certaines populations ou comportements sont mal représentés.',
                        'choices' => [
                            ['choice_text' => 'La taille ne corrige pas nécessairement un problème systématique de représentation', 'is_correct' => true],
                            ['choice_text' => 'Un grand dataset est toujours neutre', 'is_correct' => false],
                            ['choice_text' => 'Les biais disparaissent avec plus de données dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La taille du dataset détermine directement l’équité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important lorsqu’une décision Data Science peut avoir des conséquences importantes sur une personne ?',
                        'explanation' => 'Une décision à fort impact doit intégrer supervision, transparence adaptée, possibilités de contestation et contrôles proportionnels au risque.',
                        'choices' => [
                            ['choice_text' => 'Prévoir des contrôles et une supervision adaptés au niveau de risque', 'is_correct' => true],
                            ['choice_text' => 'Automatiser sans possibilité de vérification', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les traces de décision', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les performances par sous-groupe', 'is_correct' => false],
                        ],
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
                    'total_marks' => $quizData['total_marks'],
                    'is_active' => $quizData['is_active'],
                    'difficulty' => $quizData['difficulty'],
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
                        'explanation' => $questionData['explanation'],
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