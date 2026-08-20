<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DataScienceIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'data-science')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Data Science Intermediate — Nettoyage et préparation avancée',
                'description' => 'Approfondissez le nettoyage, la transformation, l’encodage et la préparation des données pour la modélisation.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il ajuster les transformations de données uniquement sur le jeu d’entraînement ?',
                        'explanation' => 'Ajuster une transformation sur toutes les données peut laisser des informations du jeu de test influencer indirectement le processus de modélisation.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une fuite d’information provenant du jeu de validation ou de test', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter artificiellement le nombre d’observations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les variables catégorielles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une précision de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode est souvent utilisée pour standardiser une variable numérique ?',
                        'explanation' => 'La standardisation classique soustrait la moyenne puis divise par l’écart-type.',
                        'choices' => [
                            ['choice_text' => 'Calculer le z-score', 'is_correct' => true],
                            ['choice_text' => 'Convertir toutes les valeurs en chaînes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les valeurs par la médiane', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si une variable catégorielle contient des centaines de catégories uniques ?',
                        'explanation' => 'Un encodage one-hot peut alors créer énormément de variables et augmenter la dimension du dataset.',
                        'choices' => [
                            ['choice_text' => 'Une explosion du nombre de variables après encodage', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique des catégories', 'is_correct' => false],
                            ['choice_text' => 'Une réduction obligatoire de la mémoire utilisée', 'is_correct' => false],
                            ['choice_text' => 'Une garantie d’absence de surapprentissage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables catégorielles ordinales peuvent-elles être encodées différemment des variables nominales ?',
                        'explanation' => 'Les variables ordinales possèdent un ordre naturel, contrairement aux variables nominales.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles contiennent un ordre significatif entre les catégories', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours numériques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne peuvent jamais être encodées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles contiennent uniquement deux valeurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle stratégie est souvent plus robuste à quelques valeurs extrêmes lorsqu’on impute des valeurs manquantes numériques ?',
                        'explanation' => 'La médiane est moins sensible aux valeurs extrêmes que la moyenne.',
                        'choices' => [
                            ['choice_text' => 'Utiliser la médiane', 'is_correct' => true],
                            ['choice_text' => 'Utiliser systématiquement le maximum', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement zéro', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute la colonne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les doublons peuvent-ils poser un problème dans un dataset ?',
                        'explanation' => 'Ils peuvent donner un poids excessif à certaines observations et fausser les statistiques ou modèles.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent surreprésenter certaines observations', 'is_correct' => true],
                            ['choice_text' => 'Ils améliorent toujours la généralisation', 'is_correct' => false],
                            ['choice_text' => 'Ils créent automatiquement de nouvelles classes', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent les valeurs manquantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’une transformation logarithmique pour une variable fortement asymétrique ?',
                        'explanation' => 'Elle peut réduire l’asymétrie et compresser l’écart entre les petites et grandes valeurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines asymétries et compresser les grandes valeurs', 'is_correct' => true],
                            ['choice_text' => 'Transformer automatiquement la variable en catégorie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les outliers', 'is_correct' => false],
                            ['choice_text' => 'Garantir une distribution parfaitement normale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les données après une étape de preprocessing ?',
                        'explanation' => 'Une transformation peut introduire des erreurs, modifier les distributions ou créer des incohérences.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la transformation a produit des données cohérentes', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute visualisation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement le dataset', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que chaque modèle aura la même performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un pipeline de preprocessing ?',
                        'explanation' => 'Un pipeline applique automatiquement les mêmes étapes de transformation dans les différents environnements et réduit les différences entre entraînement et production.',
                        'choices' => [
                            ['choice_text' => 'Reproduire les mêmes transformations de manière cohérente', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le besoin de validation', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver la même logique de preprocessing entre entraînement et prédiction ?',
                        'explanation' => 'Le modèle attend des données préparées de la même manière que pendant son apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une différence entre les représentations vues pendant l’entraînement et en production', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les features', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le modèle plus complexe', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les jeux de test', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Statistiques et inférence',
                'description' => 'Approfondissez les statistiques descriptives, intervalles de confiance, tests d’hypothèses et interprétation.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’un intervalle de confiance ?',
                        'explanation' => 'Il fournit une plage de valeurs compatible avec une estimation statistique selon une procédure et un niveau de confiance donné.',
                        'choices' => [
                            ['choice_text' => 'Fournir une plage plausible autour d’une estimation', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la vraie valeur se trouve toujours dans l’intervalle observé', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement à déterminer un test d’hypothèse ?',
                        'explanation' => 'Un test compare les observations à une hypothèse nulle afin d’évaluer si les données fournissent suffisamment d’éléments contre cette hypothèse.',
                        'choices' => [
                            ['choice_text' => 'Si les données apportent suffisamment d’éléments contre une hypothèse nulle', 'is_correct' => true],
                            ['choice_text' => 'La taille exacte de la population', 'is_correct' => false],
                            ['choice_text' => 'La causalité dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La meilleure visualisation du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement la p-value dans un test statistique ?',
                        'explanation' => 'Elle mesure, sous l’hypothèse nulle, à quel point les données observées sont compatibles avec des résultats au moins aussi extrêmes.',
                        'choices' => [
                            ['choice_text' => Une mesure de la compatibilité des données avec l’hypothèse nulle sous certaines conditions],
                            ['choice_text' => 'La probabilité que l’hypothèse nulle soit vraie', 'is_correct' => false],
                            ['choice_text' => 'La probabilité que le modèle soit parfait', 'is_correct' => false],
                            ['choice_text' => 'Le pourcentage de données correctes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une petite p-value ne prouve-t-elle pas à elle seule l’importance pratique d’un résultat ?',
                        'explanation' => 'La significativité statistique dépend notamment de la taille de l’échantillon, alors que l’importance pratique concerne l’ampleur et les conséquences du résultat.',
                        'choices' => [
                            ['choice_text' => 'La significativité statistique et l’importance métier sont deux notions différentes', 'is_correct' => true],
                            ['choice_text' => 'Une petite p-value garantit toujours un effet important', 'is_correct' => false],
                            ['choice_text' => 'Une p-value ne peut jamais être interprétée', 'is_correct' => false],
                            ['choice_text' => 'La taille d’échantillon ne joue aucun rôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir un échantillon très grand sur les tests statistiques ?',
                        'explanation' => 'Avec de grands échantillons, de petits écarts peuvent devenir statistiquement détectables même s’ils ont peu d’importance pratique.',
                        'choices' => [
                            ['choice_text' => 'Des effets très petits peuvent devenir statistiquement significatifs', 'is_correct' => true],
                            ['choice_text' => 'Tous les effets deviennent causalement prouvés', 'is_correct' => false],
                            ['choice_text' => 'Les p-values deviennent toujours égales à zéro', 'is_correct' => false],
                            ['choice_text' => 'Les différences disparaissent automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’écart-type et la moyenne fournissent-ils des informations complémentaires ?',
                        'explanation' => 'La moyenne décrit le centre alors que l’écart-type décrit la dispersion autour de ce centre.',
                        'choices' => [
                            ['choice_text' => 'La moyenne décrit le centre et l’écart-type la dispersion', 'is_correct' => true],
                            ['choice_text' => 'Ils mesurent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'L’écart-type mesure la causalité', 'is_correct' => false],
                            ['choice_text' => 'La moyenne mesure uniquement les outliers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si un test statistique est répété un très grand nombre de fois sans correction ?',
                        'explanation' => 'La probabilité d’obtenir au moins un résultat significatif par hasard augmente avec le nombre de tests.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du risque de faux positifs', 'is_correct' => true],
                            ['choice_text' => 'Une diminution automatique de tous les p-values', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Une causalité garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer population et échantillon ?',
                        'explanation' => 'La population correspond à l’ensemble étudié, tandis que l’échantillon est une partie utilisée pour effectuer des estimations.',
                        'choices' => [
                            ['choice_text' => 'L’échantillon représente une partie de la population étudiée', 'is_correct' => true],
                            ['choice_text' => 'Ils désignent toujours exactement le même ensemble', 'is_correct' => false],
                            ['choice_text' => 'La population est toujours plus petite', 'is_correct' => false],
                            ['choice_text' => 'Un échantillon ne peut jamais être utilisé en statistique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un échantillon non représentatif peut-il produire des conclusions trompeuses ?',
                        'explanation' => 'Si l’échantillon ne reflète pas suffisamment la population cible, les estimations peuvent être biaisées.',
                        'choices' => [
                            ['choice_text' => 'Les résultats peuvent être biaisés par une mauvaise représentation de la population', 'is_correct' => true],
                            ['choice_text' => 'La taille du dataset devient toujours trop grande', 'is_correct' => false],
                            ['choice_text' => 'La moyenne devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Les statistiques cessent de fonctionner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur standard ?',
                        'explanation' => 'L’erreur standard mesure la variabilité estimée d’une statistique d’échantillon d’un échantillon à l’autre.',
                        'choices' => [
                            ['choice_text' => 'Une mesure de la variabilité d’une estimation entre échantillons', 'is_correct' => true],
                            ['choice_text' => 'Une erreur de saisie obligatoire', 'is_correct' => false],
                            ['choice_text' => 'La variance totale de la population uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une métrique de classification', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Régression et modèles supervisés',
                'description' => 'Approfondissez les modèles de régression, les variables explicatives, la régularisation et l’évaluation.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que mesure généralement le MAE ?',
                        'explanation' => 'Le Mean Absolute Error mesure l’erreur absolue moyenne entre les prédictions et les valeurs réelles.',
                        'choices' => [
                            ['choice_text' => 'L’erreur absolue moyenne entre prédictions et valeurs réelles', 'is_correct' => true],
                            ['choice_text' => 'La proportion de classifications correctes', 'is_correct' => false],
                            ['choice_text' => 'La variance du dataset', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt du RMSE par rapport au MAE ?',
                        'explanation' => 'Le RMSE pénalise davantage les grandes erreurs en les mettant au carré avant de prendre la racine.',
                        'choices' => [
                            ['choice_text' => 'Il pénalise davantage les grandes erreurs', 'is_correct' => true],
                            ['choice_text' => 'Il ne dépend jamais des valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Il est réservé aux classifications', 'is_correct' => false],
                            ['choice_text' => 'Il mesure uniquement la précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le R² dans une régression ?',
                        'explanation' => 'R² indique la part de variabilité de la cible expliquée par le modèle selon la définition utilisée.',
                        'choices' => [
                            ['choice_text' => 'Une mesure de la proportion de variance expliquée par le modèle', 'is_correct' => true],
                            ['choice_text' => 'La probabilité que le modèle soit causal', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de features', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de prédictions correctes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la régularisation L1 peut-elle conduire à des coefficients exactement nuls ?',
                        'explanation' => 'La pénalisation L1 favorise la sparsité et peut pousser certains coefficients vers zéro.',
                        'choices' => [
                            ['choice_text' => 'Elle favorise une solution plus parcimonieuse en poussant certains coefficients à zéro', 'is_correct' => true],
                            ['choice_text' => 'Elle multiplie tous les coefficients par zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toujours toutes les variables', 'is_correct' => false],
                            ['choice_text' => 'Elle n’agit que sur la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la régularisation L2 ?',
                        'explanation' => 'L2 pénalise les coefficients élevés et peut réduire le surapprentissage sans nécessairement produire autant de zéros exacts que L1.',
                        'choices' => [
                            ['choice_text' => 'Limiter la magnitude des coefficients afin de réduire le surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement les variables', 'is_correct' => false],
                            ['choice_text' => 'Transformer une régression en classification', 'is_correct' => false],
                            ['choice_text' => 'Éliminer la validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des variables fortement corrélées entre elles peuvent-elles poser problème dans une régression linéaire ?',
                        'explanation' => 'La multicolinéarité peut rendre les coefficients instables et compliquer leur interprétation.',
                        'choices' => [
                            ['choice_text' => 'Elle peut rendre les coefficients difficiles à interpréter et instables', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une meilleure généralisation', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les données', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la régression impossible dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de transformer une variable très asymétrique avant une régression ?',
                        'explanation' => 'Certaines transformations peuvent rendre la relation plus adaptée au modèle ou limiter l’influence de valeurs extrêmes.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la représentation de la relation et réduire certaines asymétries', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement la causalité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les observations', 'is_correct' => false],
                            ['choice_text' => 'Transformer la régression en clustering', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi évaluer une régression avec plusieurs métriques peut-il être utile ?',
                        'explanation' => 'MAE, RMSE et R² mettent en avant des aspects différents des performances.',
                        'choices' => [
                            ['choice_text' => 'Chaque métrique apporte une information différente sur les erreurs', 'is_correct' => true],
                            ['choice_text' => 'Toutes les métriques sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Plus de métriques garantit une meilleure prédiction', 'is_correct' => false],
                            ['choice_text' => 'Les métriques remplacent la validation métier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque si on choisit un modèle uniquement selon R² sur le jeu d’entraînement ?',
                        'explanation' => 'Un R² élevé sur le training set peut être le résultat d’un surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Choisir un modèle surappris qui généralise mal', 'is_correct' => true],
                            ['choice_text' => 'Garantir la meilleure performance future', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les variables pertinentes', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coefficients d’une régression ne doivent-ils pas être interprétés comme des relations causales sans analyse supplémentaire ?',
                        'explanation' => 'Un coefficient mesure une association conditionnelle au modèle, mais ne prouve pas qu’une variable cause la variation de la cible.',
                        'choices' => [
                            ['choice_text' => 'Un coefficient peut refléter une association sans établir une causalité', 'is_correct' => true],
                            ['choice_text' => 'Les coefficients sont toujours causaux', 'is_correct' => false],
                            ['choice_text' => 'La régression ne produit aucune information', 'is_correct' => false],
                            ['choice_text' => 'La causalité est automatiquement incluse dans les coefficients', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Classification et évaluation',
                'description' => 'Analysez les modèles de classification, métriques, seuils de décision et déséquilibre des classes.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi l’accuracy peut-elle être trompeuse sur un dataset déséquilibré ?',
                        'explanation' => 'Un modèle peut obtenir une excellente accuracy en prédisant presque toujours la classe majoritaire.',
                        'choices' => [
                            ['choice_text' => 'La classe majoritaire peut dominer la métrique globale', 'is_correct' => true],
                            ['choice_text' => 'L’accuracy ignore toutes les prédictions', 'is_correct' => false],
                            ['choice_text' => 'Les classes minoritaires sont toujours incorrectes', 'is_correct' => false],
                            ['choice_text' => 'L’accuracy ne peut jamais être utilisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif du recall ?',
                        'explanation' => 'Le recall mesure la proportion des positifs réels détectés par le modèle.',
                        'choices' => [
                            ['choice_text' => 'Détecter une grande partie des positifs réels', 'is_correct' => true],
                            ['choice_text' => 'Minimiser les faux positifs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le temps d’inférence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel contexte la precision peut-elle être particulièrement importante ?',
                        'explanation' => 'Lorsque les faux positifs sont coûteux, il est préférable que les prédictions positives soient fiables.',
                        'choices' => [
                            ['choice_text' => 'Lorsqu’une fausse alerte entraîne un coût important', 'is_correct' => true],
                            ['choice_text' => 'Lorsque toutes les erreurs sont sans conséquence', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer une régression', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer une moyenne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du F1-score ?',
                        'explanation' => 'Le F1-score combine precision et recall via leur moyenne harmonique.',
                        'choices' => [
                            ['choice_text' => 'Combiner precision et recall', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement les vrais négatifs', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la latence', 'is_correct' => false],
                            ['choice_text' => 'Évaluer seulement les modèles de régression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi modifier le seuil de classification peut-il changer precision et recall ?',
                        'explanation' => 'Le seuil détermine à partir de quelle probabilité une observation est classée comme positive.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il modifie le compromis entre prédictions positives et négatives', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il change automatiquement les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il modifie le nombre de features', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il réentraîne toujours le modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe d’une matrice de confusion ?',
                        'explanation' => 'Elle répartit les prédictions selon les combinaisons de classes réelles et prédites.',
                        'choices' => [
                            ['choice_text' => 'Comparer les classes réelles aux classes prédites', 'is_correct' => true],
                            ['choice_text' => 'Calculer uniquement la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la mémoire', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le recall peut-il être privilégié dans une détection de fraude ?',
                        'explanation' => 'Dans certains cas, manquer une fraude réelle peut coûter davantage que générer quelques alertes supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Parce que manquer des cas frauduleux peut être particulièrement coûteux', 'is_correct' => true],
                            ['choice_text' => 'Parce que les faux positifs sont toujours inexistants', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fraude est un problème de régression', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’accuracy est interdite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente ROC-AUC pour comparer des classificateurs ?',
                        'explanation' => 'L’AUC résume la capacité de discrimination sur différents seuils.',
                        'choices' => [
                            ['choice_text' => 'Elle résume la capacité de discrimination sur plusieurs seuils', 'is_correct' => true],
                            ['choice_text' => 'Elle donne directement le coût métier', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure uniquement les faux négatifs', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours toutes les autres métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si un modèle de classification est évalué uniquement avec l’accuracy ?',
                        'explanation' => 'La métrique peut masquer des performances très mauvaises sur une classe rare ou importante.',
                        'choices' => [
                            ['choice_text' => 'Des erreurs importantes sur une classe minoritaire peuvent être masquées', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement plus complexe', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de classes diminue', 'is_correct' => false],
                            ['choice_text' => 'La matrice de confusion devient impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs métriques avec le coût des erreurs métier ?',
                        'explanation' => 'Le choix du modèle doit refléter les conséquences réelles des faux positifs et faux négatifs.',
                        'choices' => [
                            ['choice_text' => 'Pour choisir un modèle adapté aux conséquences réelles des erreurs', 'is_correct' => true],
                            ['choice_text' => 'Pour maximiser systématiquement l’accuracy', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les classes rares', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Feature Engineering et sélection de variables',
                'description' => 'Approfondissez la création, transformation, sélection et validation des variables explicatives.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le feature engineering ?',
                        'explanation' => 'Le feature engineering consiste à créer, transformer ou sélectionner des variables afin d’améliorer la capacité du modèle à apprendre la relation recherchée.',
                        'choices' => [
                            ['choice_text' => 'Créer ou transformer des variables utiles pour le modèle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Transformer le dataset en base réseau', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi créer des variables temporelles à partir d’une date ?',
                        'explanation' => 'Une date brute peut être transformée en jour, mois, heure, jour de semaine ou indicateur de saisonnalité pour révéler des patterns.',
                        'choices' => [
                            ['choice_text' => 'Extraire des informations utiles comme mois, jour ou saisonnalité', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la composante temporelle', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement la cible', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une feature est directement dérivée de la cible ?',
                        'explanation' => 'Le modèle bénéficie alors d’une information qui ne serait pas disponible au moment réel de la prédiction.',
                        'choices' => [
                            ['choice_text' => 'Une fuite de cible', 'is_correct' => true],
                            ['choice_text' => 'Une réduction de la variance', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration garantie de la robustesse', 'is_correct' => false],
                            ['choice_text' => 'Une transformation en clustering', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi sélectionner certaines features peut-il améliorer un modèle ?',
                        'explanation' => 'Supprimer des variables inutiles ou fortement bruitées peut réduire la complexité et améliorer la généralisation.',
                        'choices' => [
                            ['choice_text' => 'Réduire le bruit et la complexité du modèle', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement plus de classes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure performance dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une feature très corrélée à une autre peut-elle être redondante ?',
                        'explanation' => 'Elle peut apporter une information similaire et augmenter la complexité sans ajouter beaucoup de signal nouveau.',
                        'choices' => [
                            ['choice_text' => 'Elle peut fournir une information similaire à une autre feature', 'is_correct' => true],
                            ['choice_text' => 'Elle devient toujours inutilisable', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément la cible', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les autres variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une feature importance ?',
                        'explanation' => 'Elle donne une indication sur la contribution ou l’utilité relative de certaines variables selon la méthode utilisée.',
                        'choices' => [
                            ['choice_text' => 'Identifier quelles variables contribuent le plus aux prédictions selon une méthode donnée', 'is_correct' => true],
                            ['choice_text' => 'Prouver une causalité', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de biais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les interactions entre variables peuvent-elles être utiles ?',
                        'explanation' => 'L’effet d’une variable peut dépendre de la valeur d’une autre, ce qui peut être représenté par une feature d’interaction.',
                        'choices' => [
                            ['choice_text' => 'Certaines relations dépendent simultanément de plusieurs variables', 'is_correct' => true],
                            ['choice_text' => 'Les interactions empêchent toujours l’apprentissage', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toutes les variables originales', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il appliquer la sélection de features dans le cadre de validation ?',
                        'explanation' => 'Si les features sont sélectionnées en utilisant tout le dataset, des informations du test peuvent influencer le choix et créer une fuite.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter que le jeu de test influence le choix des variables', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le nombre de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les variables catégorielles', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les modèles déterministes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage apporte une transformation de variable adaptée au domaine ?',
                        'explanation' => 'Une transformation pertinente peut rendre plus explicite une relation utile ou rapprocher les données des hypothèses du modèle.',
                        'choices' => [
                            ['choice_text' => 'Elle peut rendre le signal plus exploitable par le modèle', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une causalité', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les erreurs de mesure', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine la validation croisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les features créées par transformation ?',
                        'explanation' => 'La documentation permet de comprendre leur origine, de reproduire le pipeline et de vérifier leur disponibilité en production.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité et la reproductibilité du pipeline', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la nécessité de tests', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute réutilisation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — SQL avancé pour l’analyse',
                'description' => 'Approfondissez les jointures, agrégations, sous-requêtes, fonctions de fenêtre et analyses SQL.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle différence générale existe entre INNER JOIN et LEFT JOIN ?',
                        'explanation' => 'INNER JOIN conserve les correspondances présentes dans les deux tables tandis que LEFT JOIN conserve toutes les lignes de la table de gauche.',
                        'choices' => [
                            ['choice_text' => 'INNER JOIN garde les correspondances des deux tables, LEFT JOIN conserve aussi les lignes non correspondantes de la table de gauche', 'is_correct' => true],
                            ['choice_text' => 'LEFT JOIN supprime toujours les lignes de gauche sans correspondance', 'is_correct' => false],
                            ['choice_text' => 'INNER JOIN retourne toujours toutes les lignes des deux tables', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une jointure incorrecte peut-elle multiplier le nombre de lignes ?',
                        'explanation' => 'Si plusieurs lignes correspondent de chaque côté, une jointure many-to-many peut produire plusieurs combinaisons.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs correspondances peuvent produire plusieurs combinaisons pour une même clé', 'is_correct' => true],
                            ['choice_text' => 'SQL duplique toujours les lignes', 'is_correct' => false],
                            ['choice_text' => 'Les jointures réduisent toujours les résultats', 'is_correct' => false],
                            ['choice_text' => 'Une jointure ne peut jamais modifier le nombre de lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les fonctions de fenêtre en SQL ?',
                        'explanation' => 'Elles permettent de calculer des valeurs sur un ensemble de lignes liées à la ligne courante sans forcément réduire le nombre de lignes comme GROUP BY.',
                        'choices' => [
                            ['choice_text' => 'Calculer des statistiques sur des groupes de lignes tout en conservant les lignes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les colonnes', 'is_correct' => false],
                            ['choice_text' => 'Créer une base de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les jointures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de ROW_NUMBER() OVER(...) ?',
                        'explanation' => 'ROW_NUMBER attribue un numéro séquentiel aux lignes selon un ordre défini, éventuellement par groupe.',
                        'choices' => [
                            ['choice_text' => 'Attribuer un rang séquentiel aux lignes selon un ordre', 'is_correct' => true],
                            ['choice_text' => 'Compter uniquement les tables', 'is_correct' => false],
                            ['choice_text' => 'Calculer une moyenne globale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les doublons automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser HAVING plutôt que WHERE pour filtrer une agrégation ?',
                        'explanation' => 'WHERE filtre les lignes avant agrégation tandis que HAVING filtre les groupes après agrégation.',
                        'choices' => [
                            ['choice_text' => 'HAVING permet de filtrer les groupes après l’agrégation', 'is_correct' => true],
                            ['choice_text' => 'WHERE fonctionne uniquement avec les textes', 'is_correct' => false],
                            ['choice_text' => 'HAVING remplace toujours GROUP BY', 'is_correct' => false],
                            ['choice_text' => 'WHERE ne peut jamais filtrer de lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une sous-requête ?',
                        'explanation' => 'Une sous-requête permet d’utiliser le résultat d’une requête dans une autre opération SQL.',
                        'choices' => [
                            ['choice_text' => 'Utiliser le résultat d’une requête à l’intérieur d’une autre', 'is_correct' => true],
                            ['choice_text' => 'Créer obligatoirement une nouvelle base', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute agrégation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les jointures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les index peuvent-ils accélérer certaines requêtes SQL ?',
                        'explanation' => 'Les index fournissent des structures adaptées à certaines recherches et évitent parfois de parcourir toutes les lignes.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent éviter certains scans complets de la table', 'is_correct' => true],
                            ['choice_text' => 'Ils suppriment les données', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent toutes les requêtes instantanées', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent le moteur SQL', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un trop grand nombre d’index peut-il aussi être problématique ?',
                        'explanation' => 'Les index consomment de l’espace et peuvent ralentir les opérations d’écriture et de maintenance.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent augmenter le coût des écritures et de la maintenance', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toute lecture', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les bases inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment les contraintes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les cardinalités avant une jointure analytique ?',
                        'explanation' => 'Comprendre les relations entre clés permet de prévoir si une jointure va dupliquer des lignes ou produire des résultats inattendus.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter des multiplications inattendues du nombre de lignes', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les données manquantes', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer SQL en Python', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute agrégation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de créer des vues SQL pour l’analyse ?',
                        'explanation' => 'Une vue permet de présenter une requête complexe sous une forme réutilisable et plus simple pour les analystes.',
                        'choices' => [
                            ['choice_text' => 'Encapsuler une logique de requête réutilisable', 'is_correct' => true],
                            ['choice_text' => 'Copier physiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tables sources', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les permissions', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Analyse exploratoire avancée',
                'description' => 'Approfondissez l’EDA, la détection d’anomalies, les distributions et l’analyse multivariée.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi analyser les distributions de chaque variable avant une modélisation ?',
                        'explanation' => 'La distribution peut révéler asymétrie, valeurs extrêmes, concentration et problèmes de mesure.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier la forme des données et les anomalies possibles', 'is_correct' => true],
                            ['choice_text' => 'Pour choisir automatiquement le modèle parfait', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les valeurs faibles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un boxplot ?',
                        'explanation' => 'Le boxplot résume la distribution d’une variable et permet notamment de visualiser les quartiles et certaines valeurs extrêmes.',
                        'choices' => [
                            ['choice_text' => 'Visualiser la distribution, les quartiles et des valeurs extrêmes', 'is_correct' => true],
                            ['choice_text' => 'Mesurer directement la causalité', 'is_correct' => false],
                            ['choice_text' => 'Créer un modèle', 'is_correct' => false],
                            ['choice_text' => 'Comparer uniquement des catégories nominales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la médiane est-elle utile pour analyser une distribution asymétrique ?',
                        'explanation' => 'La médiane est moins influencée par les grandes valeurs extrêmes.',
                        'choices' => [
                            ['choice_text' => 'Elle est moins sensible aux valeurs extrêmes que la moyenne', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours égale à la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure la variance', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les anomalies', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut être révélé par une matrice de corrélation ?',
                        'explanation' => 'Elle permet de repérer des variables fortement corrélées qui peuvent être redondantes ou poser des problèmes de multicolinéarité.',
                        'choices' => [
                            ['choice_text' => 'Des relations fortes ou redondances potentielles entre variables numériques', 'is_correct' => true],
                            ['choice_text' => 'La qualité causale du modèle', 'is_correct' => false],
                            ['choice_text' => 'Le nombre exact de classes', 'is_correct' => false],
                            ['choice_text' => 'La taille du GPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les graphiques de distribution doivent-ils parfois utiliser une échelle logarithmique ?',
                        'explanation' => 'Une échelle logarithmique peut rendre plus lisible une distribution couvrant plusieurs ordres de grandeur.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux visualiser des valeurs couvrant plusieurs ordres de grandeur', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les données normales', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les outliers', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi segmenter une analyse par sous-groupes ?',
                        'explanation' => 'Les relations globales peuvent masquer des comportements différents selon les groupes.',
                        'choices' => [
                            ['choice_text' => 'Révéler des différences qui seraient masquées par une agrégation globale', 'is_correct' => true],
                            ['choice_text' => 'Réduire automatiquement le dataset', 'is_correct' => false],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute interprétation statistique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel danger existe lorsqu’une analyse utilise uniquement des moyennes globales ?',
                        'explanation' => 'Une moyenne globale peut masquer de fortes différences entre groupes ou périodes.',
                        'choices' => [
                            ['choice_text' => 'Des disparités importantes peuvent être masquées', 'is_correct' => true],
                            ['choice_text' => 'La moyenne devient toujours incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Les données sont automatiquement supprimées', 'is_correct' => false],
                            ['choice_text' => 'Les corrélations deviennent causales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi détecter les changements de distribution au cours du temps ?',
                        'explanation' => 'Un changement de distribution peut signaler une évolution du comportement des utilisateurs, du marché ou du processus de collecte.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier des changements dans le phénomène étudié ou dans la collecte', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir la stabilité permanente', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les données anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les séries temporelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel intérêt présente une analyse univariée avant une analyse multivariée ?',
                        'explanation' => 'L’analyse univariée permet de comprendre chaque variable individuellement avant de considérer les interactions.',
                        'choices' => [
                            ['choice_text' => 'Comprendre les propriétés de chaque variable avant leurs interactions', 'is_correct' => true],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les variables corrélées', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute visualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anomalies doivent-elles être interprétées selon le contexte métier ?',
                        'explanation' => 'Une observation inhabituelle peut représenter une erreur ou un événement réel mais rare.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une anomalie statistique peut correspondre à un événement réel', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les anomalies sont des erreurs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une anomalie ne peut jamais être utile', 'is_correct' => false],
                            ['choice_text' => 'Parce que le contexte métier remplace les données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Séries temporelles',
                'description' => 'Découvrez les bases intermédiaires de l’analyse et de la prévision des séries temporelles.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une série temporelle ?',
                        'explanation' => 'Une série temporelle contient des observations indexées dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Une suite d’observations ordonnées chronologiquement', 'is_correct' => true],
                            ['choice_text' => 'Une liste de catégories sans ordre', 'is_correct' => false],
                            ['choice_text' => 'Un dataset sans date', 'is_correct' => false],
                            ['choice_text' => 'Un modèle de classification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données temporelles doivent-elles souvent être séparées chronologiquement en entraînement et test ?',
                        'explanation' => 'Le modèle doit être évalué sur le futur par rapport aux données d’entraînement afin d’éviter une fuite temporelle.',
                        'choices' => [
                            ['choice_text' => 'Pour respecter la direction temporelle et simuler une vraie prévision', 'is_correct' => true],
                            ['choice_text' => 'Pour mélanger les périodes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement les observations', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la saisonnalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une tendance dans une série temporelle ?',
                        'explanation' => 'La tendance correspond à une évolution générale du niveau de la série sur une période.',
                        'choices' => [
                            ['choice_text' => 'Une évolution générale du niveau de la série au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'Une variation totalement aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Une valeur extrême unique', 'is_correct' => false],
                            ['choice_text' => 'Une classe de classification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la saisonnalité ?',
                        'explanation' => 'La saisonnalité correspond à des motifs qui se répètent selon une période connue.',
                        'choices' => [
                            ['choice_text' => 'Un motif qui se répète à intervalles réguliers', 'is_correct' => true],
                            ['choice_text' => 'Une tendance irréversible', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de mesure', 'is_correct' => false],
                            ['choice_text' => 'Une variable catégorielle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une moyenne mobile ?',
                        'explanation' => 'Une moyenne mobile lisse les fluctuations à court terme afin de mieux visualiser la tendance.',
                        'choices' => [
                            ['choice_text' => 'Lisser les variations à court terme', 'is_correct' => true],
                            ['choice_text' => 'Créer des catégories', 'is_correct' => false],
                            ['choice_text' => 'Garantir une prévision exacte', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les dates', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données futures ne doivent-elles pas influencer l’entraînement d’un modèle de prévision ?',
                        'explanation' => 'Cela créerait une fuite d’information et produirait une évaluation irréaliste.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter une fuite temporelle', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre de variables', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une distribution normale', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute visualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une saisonnalité annuelle ?',
                        'explanation' => 'Une demande de chauffage qui augmente chaque hiver et diminue en été présente un comportement saisonnier annuel.',
                        'choices' => [
                            ['choice_text' => 'Une consommation d’énergie qui augmente chaque hiver', 'is_correct' => true],
                            ['choice_text' => 'Une seule valeur extrême', 'is_correct' => false],
                            ['choice_text' => 'Une variable nominale', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de saisie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi créer des variables de retard dans une série temporelle ?',
                        'explanation' => 'Les valeurs passées peuvent contenir de l’information utile pour prédire les valeurs futures.',
                        'choices' => [
                            ['choice_text' => 'Utiliser les valeurs passées comme variables explicatives', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les observations', 'is_correct' => false],
                            ['choice_text' => 'Transformer la série en catégorie', 'is_correct' => false],
                            ['choice_text' => 'Garantir la stationnarité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe si une feature temporelle utilise directement une information future ?',
                        'explanation' => 'Le modèle exploite une information qui ne sera pas disponible au moment où la prédiction devra être réalisée.',
                        'choices' => [
                            ['choice_text' => 'Une fuite d’information temporelle', 'is_correct' => true],
                            ['choice_text' => 'Une réduction du dataset', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration garantie de la robustesse', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de la saisonnalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une série temporelle peut-elle être plus difficile à valider qu’un dataset tabulaire classique ?',
                        'explanation' => 'Les observations sont dépendantes dans le temps et l’ordre chronologique doit être respecté.',
                        'choices' => [
                            ['choice_text' => 'Parce que les observations sont liées par le temps et ne sont pas nécessairement indépendantes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle ne contient jamais de données numériques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est impossible de la visualiser', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne peut jamais être modélisée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Unsupervised Learning',
                'description' => 'Approfondissez le clustering, la segmentation et les méthodes non supervisées.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif du clustering ?',
                        'explanation' => 'Le clustering vise à regrouper les observations selon leur similarité sans disposer nécessairement de labels prédéfinis.',
                        'choices' => [
                            ['choice_text' => 'Identifier des groupes d’observations similaires', 'is_correct' => true],
                            ['choice_text' => 'Prédire une cible connue', 'is_correct' => false],
                            ['choice_text' => 'Mesurer une causalité', 'is_correct' => false],
                            ['choice_text' => 'Créer un dataset de test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix de la distance est-il important dans certains algorithmes de clustering ?',
                        'explanation' => 'La notion de similarité dépend de la distance utilisée. Un choix inadéquat peut produire des groupes peu pertinents.',
                        'choices' => [
                            ['choice_text' => 'La distance détermine en partie ce que signifie être similaire', 'is_correct' => true],
                            ['choice_text' => 'La distance ne change jamais les résultats', 'is_correct' => false],
                            ['choice_text' => 'Elle définit le nombre de lignes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace le dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il souvent standardiser les variables avant un clustering basé sur les distances ?',
                        'explanation' => 'Sinon, une variable à grande échelle peut dominer le calcul de distance.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une variable domine artificiellement les distances', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement les clusters', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les catégories', 'is_correct' => false],
                            ['choice_text' => 'Garantir une segmentation parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un intérêt de l’analyse en composantes principales pour les données exploratoires ?',
                        'explanation' => 'PCA peut fournir une représentation réduite facilitant l’exploration visuelle et l’analyse de structures.',
                        'choices' => [
                            ['choice_text' => 'Explorer les structures des données dans un espace de dimension réduite', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du silhouette score ?',
                        'explanation' => 'Il mesure la cohésion des observations dans leur cluster et leur séparation par rapport aux autres clusters.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la cohésion et la séparation des clusters', 'is_correct' => true],
                            ['choice_text' => 'Évaluer la précision d’une régression', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la latence', 'is_correct' => false],
                            ['choice_text' => 'Créer des labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un clustering peut-il être difficile à interpréter métier ?',
                        'explanation' => 'Les groupes mathématiques trouvés par un algorithme ne correspondent pas automatiquement à des segments métier significatifs.',
                        'choices' => [
                            ['choice_text' => 'Les groupes statistiques ne sont pas nécessairement des groupes métier naturels', 'is_correct' => true],
                            ['choice_text' => 'Le clustering produit toujours des catégories métier valides', 'is_correct' => false],
                            ['choice_text' => 'Les clusters ne peuvent jamais être visualisés', 'is_correct' => false],
                            ['choice_text' => 'Les données non supervisées ne contiennent aucune information', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester plusieurs valeurs de K dans K-Means ?',
                        'explanation' => 'Le meilleur nombre de clusters dépend des données et du besoin métier. Plusieurs valeurs peuvent être comparées avec des métriques adaptées.',
                        'choices' => [
                            ['choice_text' => 'Évaluer différentes segmentations possibles', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que K vaut toujours 2', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les clusters inutiles automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer le problème en classification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque les clusters sont très déséquilibrés ?',
                        'explanation' => 'Certains algorithmes peuvent mal représenter ou sous-estimer les petits groupes.',
                        'choices' => [
                            ['choice_text' => 'Les petits groupes peuvent être mal représentés', 'is_correct' => true],
                            ['choice_text' => 'Tous les clusters deviennent identiques', 'is_correct' => false],
                            ['choice_text' => 'Le dataset devient supervisé', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de features devient zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi visualiser les clusters après leur création ?',
                        'explanation' => 'Une visualisation peut révéler des séparations artificielles, chevauchements ou structures que les métriques seules ne montrent pas.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier visuellement si la segmentation paraît cohérente', 'is_correct' => true],
                            ['choice_text' => 'Pour prouver automatiquement la causalité', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les petits clusters', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le résultat d’un clustering ne doit-il pas être considéré automatiquement comme une vérité métier ?',
                        'explanation' => 'Le clustering dépend des variables, de la distance et de l’algorithme choisi ; les groupes sont donc une représentation des données selon ces choix.',
                        'choices' => [
                            ['choice_text' => 'Les clusters dépendent des choix méthodologiques et doivent être interprétés dans leur contexte', 'is_correct' => true],
                            ['choice_text' => 'Le clustering est toujours arbitraire', 'is_correct' => false],
                            ['choice_text' => 'Les clusters sont toujours causalement définis', 'is_correct' => false],
                            ['choice_text' => 'Les algorithmes non supervisés sont inutiles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Intermediate — Validation, biais et généralisation',
                'description' => 'Approfondissez la validation des modèles, les biais, le surapprentissage et la généralisation.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif de la généralisation en Machine Learning ?',
                        'explanation' => 'Un modèle doit fonctionner correctement sur de nouvelles observations, pas seulement sur les données utilisées pour son entraînement.',
                        'choices' => [
                            ['choice_text' => 'Obtenir de bonnes performances sur des données nouvelles', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement la performance sur le training set', 'is_correct' => false],
                            ['choice_text' => 'Mémoriser toutes les observations', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène indique souvent qu’un modèle surapprend ?',
                        'explanation' => 'Une forte performance en entraînement combinée à une performance sensiblement plus faible en validation est un signe classique.',
                        'choices' => [
                            ['choice_text' => 'Une grande différence entre performance d’entraînement et de validation', 'is_correct' => true],
                            ['choice_text' => 'Une performance faible et identique sur tous les ensembles', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de la taille du dataset', 'is_correct' => false],
                            ['choice_text' => 'Une diminution du nombre de features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment réduire le risque de surapprentissage ?',
                        'explanation' => 'Des techniques comme la régularisation, l’augmentation des données, la simplification du modèle ou l’early stopping peuvent aider.',
                        'choices' => [
                            ['choice_text' => 'Utiliser notamment régularisation, données supplémentaires ou modèles plus simples', 'is_correct' => true],
                            ['choice_text' => 'Toujours augmenter la complexité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le jeu de validation', 'is_correct' => false],
                            ['choice_text' => 'Évaluer uniquement sur le training set', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe du biais statistique dans un modèle ?',
                        'explanation' => 'Le biais correspond à une erreur systématique liée aux hypothèses ou à la structure du modèle.',
                        'choices' => [
                            ['choice_text' => 'Une erreur systématique liée aux hypothèses du modèle ou à la représentation', 'is_correct' => true],
                            ['choice_text' => 'Une erreur toujours due au hasard', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du dataset', 'is_correct' => false],
                            ['choice_text' => 'Une mesure de la mémoire utilisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la variance d’un modèle dans le contexte biais-variance ?',
                        'explanation' => 'La variance reflète la sensibilité du modèle aux variations de l’échantillon d’entraînement.',
                        'choices' => [
                            ['choice_text' => 'La sensibilité du modèle aux changements dans les données d’entraînement', 'is_correct' => true],
                            ['choice_text' => 'La moyenne des prédictions', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'La taille du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle très complexe peut-il avoir une variance élevée ?',
                        'explanation' => 'Un modèle très flexible peut s’adapter fortement aux particularités de l’échantillon d’entraînement.',
                        'choices' => [
                            ['choice_text' => 'Il peut être très sensible aux particularités de l’échantillon', 'is_correct' => true],
                            ['choice_text' => 'Il ignore nécessairement les données', 'is_correct' => false],
                            ['choice_text' => 'Il possède toujours une faible variance', 'is_correct' => false],
                            ['choice_text' => 'La complexité n’a aucun effet sur la variance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le dataset de test doit-il rester indépendant pendant le développement ?',
                        'explanation' => 'Le test doit fournir une estimation finale non biaisée par les choix de développement.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver une évaluation finale plus crédible', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la précision du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour créer plus de features', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute collecte de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut produire une sélection de modèle répétée sur le même jeu de validation ?',
                        'explanation' => 'Le modèle et les hyperparamètres peuvent finir par être indirectement adaptés au jeu de validation.',
                        'choices' => [
                            ['choice_text' => 'Une adaptation excessive au jeu de validation', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique des classes', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de la causalité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la cross-validation peut-elle être utile avec un petit dataset ?',
                        'explanation' => 'Elle permet d’utiliser plusieurs partitions pour évaluer le modèle plutôt que de dépendre d’un seul split.',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’obtenir une évaluation utilisant plusieurs partitions des mêmes données', 'is_correct' => true],
                            ['choice_text' => 'Elle crée de nouvelles observations réelles', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit l’absence de biais', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace systématiquement le test final', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal compromis entre biais et variance ?',
                        'explanation' => 'Des modèles trop simples peuvent sous-ajuster tandis que des modèles trop complexes peuvent surajuster. Il faut chercher un équilibre adapté aux données.',
                        'choices' => [
                            ['choice_text' => 'Trouver un niveau de complexité qui équilibre sous-apprentissage et surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Maximiser toujours la complexité', 'is_correct' => false],
                            ['choice_text' => 'Minimiser toujours toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation', 'is_correct' => false],
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