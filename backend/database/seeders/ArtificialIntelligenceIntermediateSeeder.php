<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArtificialIntelligenceIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'artificial-intelligence')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IA Intermediate — Prétraitement et qualité des données',
                'description' => 'Approfondissez le nettoyage, la préparation, la transformation et la qualité des données pour le Machine Learning.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi normaliser certaines variables avant l’entraînement d’un modèle ?',
                        'explanation' => 'La normalisation peut éviter qu’une variable ayant une échelle beaucoup plus grande domine les autres et peut faciliter l’optimisation de certains modèles.',
                        'choices' => [
                            ['choice_text' => 'Mettre les variables sur des échelles comparables', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement toutes les valeurs aberrantes', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure précision pour tous les modèles', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les données manquantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’on utilise directement les données de test pour ajuster les hyperparamètres ?',
                        'explanation' => 'Le test cesse alors de représenter une évaluation indépendante et les performances peuvent sembler artificiellement meilleures.',
                        'choices' => [
                            ['choice_text' => 'Une fuite d’information rendant l’évaluation finale moins fiable', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique de la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'La suppression du besoin d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration garantie de la généralisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de l’encodage one-hot ?',
                        'explanation' => 'Le one-hot transforme une variable catégorielle en plusieurs variables binaires afin de la représenter numériquement sans imposer un ordre artificiel.',
                        'choices' => [
                            ['choice_text' => 'Transformer une catégorie en variables binaires', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les catégories rares automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de lignes du dataset', 'is_correct' => false],
                            ['choice_text' => 'Créer des labels à partir de texte libre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs manquantes doivent-elles être traitées avant certains entraînements ?',
                        'explanation' => 'De nombreux algorithmes ne savent pas gérer directement les valeurs absentes ou leur traitement peut produire des comportements inattendus.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent empêcher certains modèles de fonctionner correctement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles rendent toujours les données inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle ne peut jamais apprendre avec moins de 100 % de données', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont toujours des outliers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’on supprime trop de lignes contenant des valeurs manquantes ?',
                        'explanation' => 'Une suppression excessive peut réduire fortement la quantité de données et introduire un biais si les valeurs manquantes ne sont pas réparties aléatoirement.',
                        'choices' => [
                            ['choice_text' => 'Une perte de données et éventuellement un biais supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Une garantie d’amélioration du modèle', 'is_correct' => false],
                            ['choice_text' => 'La suppression automatique des outliers restants', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation certaine du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on une feature catégorielle ?',
                        'explanation' => 'Une feature catégorielle représente généralement des valeurs appartenant à des catégories distinctes comme une couleur, une ville ou un type de produit.',
                        'choices' => [
                            ['choice_text' => 'Une variable représentant des catégories distinctes', 'is_correct' => true],
                            ['choice_text' => 'Une variable qui contient toujours des nombres réels', 'is_correct' => false],
                            ['choice_text' => 'Une métrique de performance', 'is_correct' => false],
                            ['choice_text' => 'Une valeur obligatoirement binaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il identifier les doublons dans un dataset ?',
                        'explanation' => 'Des doublons peuvent surreprésenter certaines observations et fausser les distributions ainsi que l’évaluation du modèle.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’un même exemple influence excessivement l’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les labels', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir un dataset parfaitement équilibré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’un outlier extrême dans une régression ?',
                        'explanation' => 'Une valeur très éloignée peut fortement influencer certains modèles ou statistiques, notamment ceux sensibles aux grandes erreurs.',
                        'choices' => [
                            ['choice_text' => 'Il peut influencer fortement les paramètres du modèle', 'is_correct' => true],
                            ['choice_text' => 'Il devient toujours une classe supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Il est automatiquement supprimé par tous les algorithmes', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais avoir d’impact', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le découpage train/validation/test doit-il être réalisé avec précaution lorsque les données sont temporelles ?',
                        'explanation' => 'Un découpage aléatoire peut permettre au modèle de voir indirectement des informations futures et produire une évaluation irréaliste.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’un modèle apprenne indirectement à partir du futur', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter artificiellement le nombre de lignes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la composante temporelle', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les périodes sont identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe décrit le mieux la qualité d’une feature pour un modèle ?',
                        'explanation' => 'Une bonne feature apporte une information utile à la tâche sans introduire de fuite ou de bruit excessif.',
                        'choices' => [
                            ['choice_text' => 'Elle apporte une information pertinente sans fuite de données', 'is_correct' => true],
                            ['choice_text' => 'Elle doit toujours être numérique', 'is_correct' => false],
                            ['choice_text' => 'Elle doit contenir le maximum de valeurs uniques', 'is_correct' => false],
                            ['choice_text' => 'Elle doit obligatoirement être la plus complexe possible', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Classification et régression',
                'description' => 'Analysez les problèmes supervisés, le choix des modèles et l’interprétation de leurs résultats.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel problème correspond à une classification multiclasse ?',
                        'explanation' => 'Une classification multiclasse cherche à attribuer chaque observation à une classe parmi plus de deux catégories.',
                        'choices' => [
                            ['choice_text' => 'Prédire si une image représente un chat, un chien ou un oiseau', 'is_correct' => true],
                            ['choice_text' => 'Prédire le prix d’un logement', 'is_correct' => false],
                            ['choice_text' => 'Regrouper des clients sans labels', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la régression logistique porte-t-elle un nom trompeur ?',
                        'explanation' => 'Malgré son nom, elle est couramment utilisée pour des problèmes de classification et estime notamment des probabilités de classes.',
                        'choices' => [
                            ['choice_text' => 'Elle est souvent utilisée pour la classification plutôt que pour prédire une valeur continue', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut jamais produire de probabilités', 'is_correct' => false],
                            ['choice_text' => 'Elle sert uniquement au clustering', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède aucun paramètre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir avec un seuil de classification trop élevé ?',
                        'explanation' => 'Si le seuil de décision est trop élevé, le modèle peut classer moins d’exemples comme positifs et manquer davantage de vrais positifs.',
                        'choices' => [
                            ['choice_text' => 'Une diminution potentielle du recall', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation garantie de tous les scores', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des faux positifs uniquement sans autre effet', 'is_correct' => false],
                            ['choice_text' => 'Une transformation du modèle en régression', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas privilégier le recall peut-il être particulièrement important ?',
                        'explanation' => 'Lorsqu’un faux négatif est très coûteux, on cherche généralement à détecter autant de positifs réels que possible.',
                        'choices' => [
                            ['choice_text' => 'Détecter une maladie où manquer un cas est particulièrement grave', 'is_correct' => true],
                            ['choice_text' => 'Filtrer des publicités où quelques faux négatifs sont acceptables', 'is_correct' => false],
                            ['choice_text' => 'Réduire la taille d’un dataset', 'is_correct' => false],
                            ['choice_text' => 'Compresser une image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas la precision peut-elle être prioritaire ?',
                        'explanation' => 'Lorsque les faux positifs sont particulièrement coûteux, on cherche à ce que les prédictions positives soient aussi fiables que possible.',
                        'choices' => [
                            ['choice_text' => Un système où une alerte coûteuse doit être très fiable],
                            ['choice_text' => 'Un système où manquer tous les positifs est acceptable', 'is_correct' => false],
                            ['choice_text' => 'Une tâche de compression', 'is_correct' => false],
                            ['choice_text' => 'Une tâche de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle est généralement particulièrement interprétable pour un problème de décision simple ?',
                        'explanation' => 'Un arbre de décision peu profond expose directement les conditions utilisées pour prendre les décisions.',
                        'choices' => [
                            ['choice_text' => 'Un arbre de décision simple', 'is_correct' => true],
                            ['choice_text' => 'Un réseau neuronal très profond', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de milliers de paramètres non documentés', 'is_correct' => false],
                            ['choice_text' => 'Un modèle sans variables d’entrée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage de Random Forest par rapport à un seul arbre ?',
                        'explanation' => 'L’agrégation de plusieurs arbres réduit souvent la variance et améliore la robustesse par rapport à un arbre unique.',
                        'choices' => [
                            ['choice_text' => 'Une meilleure robustesse grâce à l’agrégation de plusieurs arbres', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de calcul', 'is_correct' => false],
                            ['choice_text' => 'Une garantie de parfaite interprétabilité', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toutes les features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une probabilité prédite de 0,8 dans une classification ?',
                        'explanation' => 'Elle indique une estimation de probabilité associée à une classe selon le modèle, sans garantir que cette estimation soit parfaitement calibrée.',
                        'choices' => [
                            ['choice_text' => 'Le modèle estime une probabilité élevée pour la classe concernée', 'is_correct' => true],
                            ['choice_text' => 'Le modèle est forcément correct à 80 % sur cet exemple', 'is_correct' => false],
                            ['choice_text' => 'L’exemple contient 80 % de données manquantes', 'is_correct' => false],
                            ['choice_text' => 'Le modèle possède 80 % de paramètres actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi calibrer les probabilités d’un modèle peut-il être utile ?',
                        'explanation' => 'Un modèle peut bien classer les exemples mais produire des probabilités mal calibrées. La calibration améliore leur interprétation.',
                        'choices' => [
                            ['choice_text' => 'Pour rendre les probabilités prédites plus cohérentes avec les fréquences observées', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les erreurs de classification', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout dataset de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une variable de la base contient directement la cible future ?',
                        'explanation' => 'Le modèle peut exploiter une information qui ne serait pas disponible au moment réel de la prédiction, ce qui constitue une fuite de données.',
                        'choices' => [
                            ['choice_text' => 'Une fuite de cible rendant les performances artificiellement élevées', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration fiable de la généralisation', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique des données', 'is_correct' => false],
                            ['choice_text' => 'Une transformation du problème en clustering', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Clustering et réduction dimensionnelle',
                'description' => 'Approfondissez l’apprentissage non supervisé, le clustering et la réduction dimensionnelle.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de K-Means ?',
                        'explanation' => 'K-Means cherche à partitionner les observations en K groupes en minimisant la distance des observations à leur centroïde.',
                        'choices' => [
                            ['choice_text' => 'Regrouper les observations en K clusters', 'is_correct' => true],
                            ['choice_text' => 'Prédire directement une valeur continue', 'is_correct' => false],
                            ['choice_text' => 'Classer avec des labels connus', 'is_correct' => false],
                            ['choice_text' => 'Générer du texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix de K est-il important dans K-Means ?',
                        'explanation' => 'K détermine le nombre de groupes recherchés. Un choix inadéquat peut produire une segmentation peu utile.',
                        'choices' => [
                            ['choice_text' => 'Il détermine le nombre de groupes produits', 'is_correct' => true],
                            ['choice_text' => 'Il détermine le nombre de lignes du dataset', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toutes les features', 'is_correct' => false],
                            ['choice_text' => 'Il définit le type de réseau neuronal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avec K-Means sur des clusters de formes très irrégulières ?',
                        'explanation' => 'K-Means suppose implicitement des groupes pouvant être représentés raisonnablement par leur distance à des centroïdes, ce qui convient mal à certaines structures complexes.',
                        'choices' => [
                            ['choice_text' => 'Les groupes complexes ou non convexes peuvent être mal représentés', 'is_correct' => true],
                            ['choice_text' => 'Le modèle ne peut jamais être entraîné', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent automatiquement supervisées', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de features devient nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de PCA ?',
                        'explanation' => 'PCA cherche des directions principales permettant de représenter les données avec moins de dimensions tout en conservant une partie importante de leur variance.',
                        'choices' => [
                            ['choice_text' => Réduire la dimension tout en conservant autant que possible l’information de variance],
                            ['choice_text' => 'Créer des labels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le dataset par des images', 'is_correct' => false],
                            ['choice_text' => 'Effectuer une classification supervisée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réduction dimensionnelle peut-elle améliorer certains modèles ?',
                        'explanation' => 'Elle peut réduire le bruit, le coût de calcul et les effets liés à une trop grande dimension, selon le modèle et le dataset.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire le bruit et la complexité de l’espace de représentation', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement toutes les informations utiles', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace l’évaluation du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être utilisé pour évaluer grossièrement la qualité d’un clustering ?',
                        'explanation' => 'Le score de silhouette compare la cohésion des observations avec leur séparation par rapport aux autres clusters.',
                        'choices' => [
                            ['choice_text' => 'Le silhouette score', 'is_correct' => true],
                            ['choice_text' => 'Le recall uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de paramètres du serveur', 'is_correct' => false],
                            ['choice_text' => 'La taille du fichier modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi standardiser les variables avant K-Means est-il souvent utile ?',
                        'explanation' => 'K-Means utilise des distances. Une variable à grande échelle pourrait donc dominer artificiellement le calcul.',
                        'choices' => [
                            ['choice_text' => 'Éviter qu’une variable domine les distances à cause de son échelle', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement les clusters parfaits', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les outliers', 'is_correct' => false],
                            ['choice_text' => 'Transformer le problème en classification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque de choisir trop peu de dimensions après PCA ?',
                        'explanation' => 'Une réduction excessive peut éliminer des informations utiles et dégrader les performances ou l’interprétation.',
                        'choices' => [
                            ['choice_text' => 'Perdre une quantité importante d’information utile', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement le nombre de features', 'is_correct' => false],
                            ['choice_text' => 'Créer un dataset supervisé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les labels de test uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi visualiser des données après réduction dimensionnelle peut-il être utile ?',
                        'explanation' => 'Une projection en deux ou trois dimensions peut aider à identifier visuellement des groupes ou des structures.',
                        'choices' => [
                            ['choice_text' => 'Pour explorer visuellement certaines structures ou séparations', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir les performances du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les métriques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le bruit automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre clustering et classification supervisée ?',
                        'explanation' => 'La classification utilise des classes connues pendant l’apprentissage, alors que le clustering cherche des groupes sans labels de référence.',
                        'choices' => [
                            ['choice_text' => 'Le clustering ne nécessite généralement pas de labels de classe connus', 'is_correct' => true],
                            ['choice_text' => 'La classification ne peut utiliser aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Le clustering est toujours plus précis', 'is_correct' => false],
                            ['choice_text' => 'Ils sont exactement identiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Réseaux de neurones et entraînement',
                'description' => 'Approfondissez l’entraînement des réseaux de neurones, les hyperparamètres et les problèmes de généralisation.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel rôle joue le learning rate ?',
                        'explanation' => 'Le learning rate contrôle l’amplitude des mises à jour des paramètres pendant l’optimisation.',
                        'choices' => [
                            ['choice_text' => 'Contrôler la taille des mises à jour des paramètres', 'is_correct' => true],
                            ['choice_text' => 'Définir le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Choisir le nombre de lignes du dataset', 'is_correct' => false],
                            ['choice_text' => 'Mesurer directement la précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut provoquer un learning rate trop élevé ?',
                        'explanation' => 'Des mises à jour trop grandes peuvent empêcher l’optimisation de converger correctement ou provoquer des oscillations.',
                        'choices' => [
                            ['choice_text' => 'Des mises à jour trop importantes et une convergence instable', 'is_correct' => true],
                            ['choice_text' => 'Une convergence toujours plus rapide vers le meilleur modèle', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des données', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du nombre de couches', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un optimizer comme Adam ?',
                        'explanation' => 'Un optimizer ajuste les paramètres du modèle en utilisant les gradients issus de la fonction de perte.',
                        'choices' => [
                            ['choice_text' => 'Mettre à jour les paramètres du modèle pendant l’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Créer le dataset de test', 'is_correct' => false],
                            ['choice_text' => 'Transformer les images en texte', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la mémoire GPU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une fonction ReLU dans un réseau de neurones ?',
                        'explanation' => 'ReLU fournit une non-linéarité simple et efficace dans de nombreux réseaux de neurones.',
                        'choices' => [
                            ['choice_text' => 'Introduire une non-linéarité de manière simple', 'is_correct' => true],
                            ['choice_text' => 'Normaliser automatiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Créer les labels', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la fonction de perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème correspond au underfitting ?',
                        'explanation' => 'Un modèle sous-ajusté est trop simple ou insuffisamment entraîné et obtient de mauvaises performances même sur les données d’entraînement.',
                        'choices' => [
                            ['choice_text' => 'Un modèle trop simple pour capturer les relations importantes', 'is_correct' => true],
                            ['choice_text' => 'Un modèle qui mémorise parfaitement le training set', 'is_correct' => false],
                            ['choice_text' => 'Un modèle sans données de test', 'is_correct' => false],
                            ['choice_text' => 'Un modèle possédant trop de classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif du dropout ?',
                        'explanation' => 'Le dropout désactive temporairement une partie des neurones pendant l’entraînement afin de réduire certaines formes de surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Réduire le surapprentissage en désactivant temporairement certains neurones', 'is_correct' => true],
                            ['choice_text' => 'Augmenter le nombre de classes', 'is_correct' => false],
                            ['choice_text' => 'Créer des données de test', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les features importantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la validation croisée est-elle utile ?',
                        'explanation' => 'Elle permet d’évaluer un modèle sur plusieurs partitions du dataset et de mieux estimer sa robustesse.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la robustesse du modèle sur plusieurs partitions des données', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucun modèle ne surapprendra', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de test final dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement le nombre de données originales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller à la fois la loss d’entraînement et celle de validation ?',
                        'explanation' => 'Une divergence entre les deux peut indiquer un surapprentissage ou un problème de généralisation.',
                        'choices' => [
                            ['choice_text' => 'Détecter notamment les différences de comportement entre entraînement et généralisation', 'is_correct' => true],
                            ['choice_text' => 'Garantir une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le nombre de paramètres', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement les labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de l’early stopping ?',
                        'explanation' => 'L’early stopping arrête l’entraînement lorsque les performances de validation cessent d’évoluer favorablement afin de limiter le surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Arrêter l’apprentissage lorsque les performances de validation se dégradent ou stagnent', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement le learning rate', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le dataset de test', 'is_correct' => false],
                            ['choice_text' => 'Créer de nouvelles classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi augmenter inutilement la profondeur d’un réseau peut-il être problématique ?',
                        'explanation' => 'Un réseau plus profond peut être plus coûteux à entraîner, plus difficile à stabiliser et plus susceptible de surapprendre selon les données.',
                        'choices' => [
                            ['choice_text' => 'Cela peut augmenter le coût, la complexité et le risque de surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Cela garantit toujours une meilleure généralisation', 'is_correct' => false],
                            ['choice_text' => 'Cela réduit nécessairement le temps d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Cela supprime le besoin de données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — NLP, embeddings et transformers',
                'description' => 'Approfondissez le traitement du langage, les représentations vectorielles et les architectures Transformer.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’un embedding de mot ?',
                        'explanation' => 'Un embedding représente un mot ou token sous forme de vecteur numérique afin de capturer certaines relations sémantiques.',
                        'choices' => [
                            ['choice_text' => 'Représenter le mot sous forme d’un vecteur numérique', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer le texte de manière sécurisée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le vocabulaire', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les règles grammaticales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les embeddings proches dans l’espace vectoriel peuvent-ils être utiles ?',
                        'explanation' => 'Des représentations proches peuvent indiquer une certaine similarité sémantique ou contextuelle entre les objets représentés.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent représenter des contenus ou concepts similaires', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent forcément le même sens exact', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent pas être comparés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème les Transformers ont-ils contribué à résoudre plus efficacement que certaines architectures séquentielles anciennes ?',
                        'explanation' => 'Les Transformers permettent notamment de traiter les relations entre différentes positions du texte avec un mécanisme d’attention parallèle.',
                        'choices' => [
                            ['choice_text' => 'Mieux capturer les dépendances entre différents éléments d’une séquence', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de données', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les tokens', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement une compréhension humaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de l’attention dans un Transformer ?',
                        'explanation' => 'L’attention permet au modèle de pondérer l’importance relative des différents tokens lorsqu’il traite un élément particulier de la séquence.',
                        'choices' => [
                            ['choice_text' => 'Mettre en relation les éléments de la séquence selon leur importance contextuelle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les tokens les plus longs', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer les textes', 'is_correct' => false],
                            ['choice_text' => 'Créer des labels manuellement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la tokenisation subword est-elle courante dans les modèles de langage modernes ?',
                        'explanation' => 'Elle permet de représenter des mots inconnus ou rares en les décomposant en unités plus petites, limitant ainsi les problèmes d’un vocabulaire strictement fermé.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de traiter des mots rares ou inconnus avec des sous-unités', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toute ambiguïté linguistique', 'is_correct' => false],
                            ['choice_text' => 'Elle évite toute représentation numérique', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la factualité des réponses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la similarité cosinus entre embeddings ?',
                        'explanation' => 'La similarité cosinus mesure l’orientation relative de deux vecteurs et est couramment utilisée pour évaluer leur proximité sémantique.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la proximité entre deux vecteurs', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la mémoire RAM disponible', 'is_correct' => false],
                            ['choice_text' => 'Créer directement un prompt', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer le contenu des vecteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contexte est-il essentiel dans un modèle de langage ?',
                        'explanation' => 'Le sens d’un mot ou d’une phrase dépend souvent des éléments qui l’entourent.',
                        'choices' => [
                            ['choice_text' => 'Le même mot peut prendre des significations différentes selon son contexte', 'is_correct' => true],
                            ['choice_text' => 'Chaque mot possède toujours un seul sens', 'is_correct' => false],
                            ['choice_text' => 'Le contexte ne change jamais une représentation', 'is_correct' => false],
                            ['choice_text' => 'Les modèles de langage n’utilisent aucune information contextuelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît si le contexte fourni à un modèle est trop long pour sa fenêtre de contexte ?',
                        'explanation' => 'Le modèle peut ne pas pouvoir traiter l’ensemble du contenu, ce qui oblige à tronquer, résumer ou segmenter les informations.',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’information peut être exclue ou nécessiter une stratégie de découpage', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement plus précis', 'is_correct' => false],
                            ['choice_text' => 'Le vocabulaire est supprimé', 'is_correct' => false],
                            ['choice_text' => 'Le texte devient automatiquement chiffré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un système de recherche utilisant des embeddings ?',
                        'explanation' => 'Les embeddings permettent de rechercher des contenus selon leur proximité sémantique plutôt que seulement selon les correspondances exactes de mots.',
                        'choices' => [
                            ['choice_text' => 'Trouver des contenus sémantiquement proches même avec des formulations différentes', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Garantir que les documents sont exacts', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de langage peut-il produire une réponse grammaticalement correcte mais factuellement fausse ?',
                        'explanation' => 'Le modèle optimise la génération selon les régularités apprises et ne possède pas nécessairement une vérification factuelle externe.',
                        'choices' => [
                            ['choice_text' => 'La qualité linguistique ne garantit pas la véracité factuelle', 'is_correct' => true],
                            ['choice_text' => 'Les modèles de langage vérifient toujours leurs affirmations', 'is_correct' => false],
                            ['choice_text' => 'La grammaire empêche les erreurs factuelles', 'is_correct' => false],
                            ['choice_text' => 'Les transformers ne génèrent jamais de faits', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Computer Vision et Deep Learning',
                'description' => 'Approfondissez les réseaux convolutifs, augmentation des données et tâches de vision.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi les CNN sont-ils adaptés à l’analyse d’images ?',
                        'explanation' => 'Les convolutions exploitent la structure spatiale locale des images et peuvent apprendre des motifs hiérarchiques.',
                        'choices' => [
                            ['choice_text' => 'Ils exploitent efficacement les motifs locaux et la structure spatiale', 'is_correct' => true],
                            ['choice_text' => 'Ils traitent uniquement du texte', 'is_correct' => false],
                            ['choice_text' => 'Ils ne possèdent aucun paramètre', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les pixels par des mots', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du pooling dans un CNN ?',
                        'explanation' => 'Le pooling réduit généralement la taille spatiale des représentations et peut contribuer à une certaine invariance locale.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines dimensions spatiales des représentations', 'is_correct' => true],
                            ['choice_text' => 'Augmenter toujours la résolution', 'is_correct' => false],
                            ['choice_text' => 'Créer des labels', 'is_correct' => false],
                            ['choice_text' => 'Transformer une image en texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser l’augmentation de données pour l’entraînement d’un modèle de vision ?',
                        'explanation' => 'Elle génère des variantes réalistes des images afin d’augmenter la diversité des exemples et réduire certaines formes de surapprentissage.',
                        'choices' => [
                            ['choice_text' => 'Augmenter la diversité des exemples d’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les images originales', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de classes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de la segmentation sémantique ?',
                        'explanation' => 'La segmentation sémantique attribue une classe à chaque pixel selon l’objet ou la région à laquelle il appartient.',
                        'choices' => [
                            ['choice_text' => 'Attribuer une catégorie à chaque pixel ou région de l’image', 'is_correct' => true],
                            ['choice_text' => 'Attribuer une seule classe à toute l’image', 'is_correct' => false],
                            ['choice_text' => 'Détecter uniquement les visages', 'is_correct' => false],
                            ['choice_text' => 'Compresser l’image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre classification d’image et détection d’objets ?',
                        'explanation' => 'La classification attribue généralement une catégorie globale à l’image tandis que la détection identifie et localise plusieurs objets.',
                        'choices' => [
                            ['choice_text' => 'La détection localise les objets tandis que la classification donne une catégorie à l’image', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'La classification nécessite toujours des bounding boxes', 'is_correct' => false],
                            ['choice_text' => 'La détection ne traite aucune image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les bounding boxes sont-elles utilisées en détection d’objets ?',
                        'explanation' => 'Une bounding box indique approximativement la localisation spatiale de l’objet détecté.',
                        'choices' => [
                            ['choice_text' => 'Indiquer la position d’un objet dans l’image', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer l’objet détecté', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les pixels', 'is_correct' => false],
                            ['choice_text' => 'Créer les labels de manière aléatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un modèle de vision est entraîné sur des images très uniformes ?',
                        'explanation' => 'Le modèle peut se spécialiser sur des caractéristiques particulières du dataset et mal généraliser sur d’autres conditions.',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise généralisation sur des images présentant d’autres conditions', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration garantie des performances réelles', 'is_correct' => false],
                            ['choice_text' => 'Une suppression automatique des classes', 'is_correct' => false],
                            ['choice_text' => 'Un modèle sans paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la résolution des images influence-t-elle le coût de calcul ?',
                        'explanation' => 'Des images plus grandes génèrent davantage de valeurs à traiter dans les couches du réseau.',
                        'choices' => [
                            ['choice_text' => 'Une résolution élevée implique généralement davantage de données à traiter', 'is_correct' => true],
                            ['choice_text' => 'La résolution n’a jamais d’influence', 'is_correct' => false],
                            ['choice_text' => 'Les images haute résolution nécessitent moins de calcul', 'is_correct' => false],
                            ['choice_text' => 'La résolution modifie uniquement les labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la précision seule peut-elle être insuffisante pour évaluer un détecteur d’objets ?',
                        'explanation' => 'La localisation et la détection partielle doivent aussi être prises en compte, et les métriques adaptées combinent généralement plusieurs dimensions.',
                        'choices' => [
                            ['choice_text' => 'La qualité de localisation doit également être prise en compte', 'is_correct' => true],
                            ['choice_text' => 'Les objets n’ont aucune position', 'is_correct' => false],
                            ['choice_text' => 'La classification est impossible en vision', 'is_correct' => false],
                            ['choice_text' => 'Les images ne contiennent pas de données numériques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente le transfer learning en Computer Vision ?',
                        'explanation' => 'Un modèle pré-entraîné peut fournir des représentations utiles qui réduisent les besoins de données et de calcul pour une nouvelle tâche.',
                        'choices' => [
                            ['choice_text' => 'Réutiliser des représentations apprises sur un autre dataset', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tout besoin de données spécifiques', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement la meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute phase de validation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — IA générative et prompting',
                'description' => 'Approfondissez les LLM, le prompting, les paramètres de génération et les limites des modèles génératifs.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt du few-shot prompting ?',
                        'explanation' => 'Le few-shot fournit plusieurs exemples dans le prompt afin de guider le modèle vers le format ou le comportement attendu.',
                        'choices' => [
                            ['choice_text' => 'Fournir des exemples pour orienter le comportement du modèle', 'is_correct' => true],
                            ['choice_text' => 'Réentraîner complètement le modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le contexte', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement le nombre de paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement l’effet d’une température plus élevée lors de la génération ?',
                        'explanation' => 'Une température plus élevée augmente généralement la diversité ou le caractère aléatoire des tokens sélectionnés.',
                        'choices' => [
                            ['choice_text' => 'Des sorties potentiellement plus variées et moins déterministes', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de factualité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du vocabulaire', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi structurer explicitement les consignes dans un prompt complexe ?',
                        'explanation' => 'Une structure claire réduit les ambiguïtés et facilite le respect des contraintes par le modèle.',
                        'choices' => [
                            ['choice_text' => 'Pour clarifier les objectifs, contraintes et format attendu', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données de contexte', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute génération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un système de récupération de documents avant génération ?',
                        'explanation' => 'Récupérer des documents pertinents permet d’apporter au modèle un contexte externe ciblé.',
                        'choices' => [
                            ['choice_text' => Fournir au modèle des informations pertinentes provenant d’une source externe],
                            ['choice_text' => 'Remplacer le modèle de langage', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les embeddings', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement l’absence d’erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie RAG dans le contexte des LLM ?',
                        'explanation' => 'RAG signifie Retrieval-Augmented Generation et consiste à récupérer des informations pertinentes avant de générer une réponse.',
                        'choices' => [
                            ['choice_text' => 'Retrieval-Augmented Generation', 'is_correct' => true],
                            ['choice_text' => 'Random AI Generation', 'is_correct' => false],
                            ['choice_text' => 'Recursive Answer Gateway', 'is_correct' => false],
                            ['choice_text' => 'Real-time Automated Grammar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi chunker des documents dans un système RAG ?',
                        'explanation' => 'Le découpage en morceaux facilite la recherche de passages pertinents et permet de fournir un contexte ciblé au modèle.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la recherche de passages pertinents et la gestion du contexte', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la sémantique', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les documents à une phrase', 'is_correct' => false],
                            ['choice_text' => 'Empêcher l’utilisation d’embeddings', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage des réponses structurées en JSON lorsqu’une IA est intégrée à une application ?',
                        'explanation' => 'Un format structuré facilite le traitement automatique de la réponse et réduit l’ambiguïté du parsing.',
                        'choices' => [
                            ['choice_text' => 'Faciliter le traitement automatique de la réponse par l’application', 'is_correct' => true],
                            ['choice_text' => 'Garantir que les informations sont vraies', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les hallucinations', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les coûts du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la vérification des sorties reste-t-elle importante même avec un prompt très précis ?',
                        'explanation' => 'Un bon prompt réduit l’ambiguïté mais n’élimine pas les erreurs, hallucinations ou incohérences du modèle.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un modèle peut encore produire une sortie incorrecte', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un prompt précis empêche toute génération', 'is_correct' => false],
                            ['choice_text' => 'Parce que les LLM ne comprennent aucune instruction', 'is_correct' => false],
                            ['choice_text' => 'Parce que la validation rend les prompts inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de limiter les permissions accordées à un agent IA connecté à des outils ?',
                        'explanation' => 'Si l’agent est mal utilisé ou compromis, des permissions limitées réduisent les actions qu’il peut effectuer.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact d’une erreur ou d’une compromission de l’agent', 'is_correct' => true],
                            ['choice_text' => 'Donner automatiquement davantage de contrôle à l’agent', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les journaux d’utilisation', 'is_correct' => false],
                            ['choice_text' => 'Rendre toutes les actions irréversibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un agent IA doit-il être surveillé lorsqu’il peut appeler des outils externes ?',
                        'explanation' => 'Un agent outillé peut provoquer des effets réels. La surveillance permet de détecter des actions anormales et de contrôler les abus.',
                        'choices' => [
                            ['choice_text' => 'Parce que ses actions peuvent avoir des effets réels sur des systèmes externes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un agent ne peut produire aucun résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que les outils externes sont toujours malveillants', 'is_correct' => false],
                            ['choice_text' => 'Parce que les logs ne servent jamais', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — MLOps et cycle de vie des modèles',
                'description' => 'Comprenez le déploiement, la surveillance, le versioning et la maintenance des modèles en production.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que MLOps cherche principalement à améliorer ?',
                        'explanation' => 'MLOps applique des pratiques d’ingénierie, d’automatisation et d’exploitation au cycle de vie des modèles de Machine Learning.',
                        'choices' => [
                            ['choice_text' => La fiabilité et l’automatisation du cycle de vie des modèles', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la création du dataset initial', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la puissance du GPU', 'is_correct' => false],
                            ['choice_text' => 'La suppression des tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner les datasets utilisés pour entraîner un modèle ?',
                        'explanation' => 'Le versioning permet de savoir quelles données ont produit un modèle donné et facilite la reproductibilité.',
                        'choices' => [
                            ['choice_text' => 'Reproduire et comprendre les modèles entraînés avec différentes données', 'is_correct' => true],
                            ['choice_text' => 'Garantir que toutes les données sont exactes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de validation', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement la taille du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller un modèle après son déploiement ?',
                        'explanation' => 'Les données et comportements réels peuvent évoluer, et le modèle peut perdre en performance ou devenir moins pertinent.',
                        'choices' => [
                            ['choice_text' => 'Détecter les dégradations de performance ou changements du contexte', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’il ne sera jamais remplacé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Éviter la collecte de métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le model drift ?',
                        'explanation' => 'Le drift décrit notamment une évolution de la relation entre les données d’entrée et la cible ou une dégradation progressive des performances du modèle.',
                        'choices' => [
                            ['choice_text' => 'Une évolution du comportement des données qui peut réduire la performance du modèle', 'is_correct' => true],
                            ['choice_text' => 'Une erreur de compilation du programme', 'is_correct' => false],
                            ['choice_text' => 'Une compression du modèle', 'is_correct' => false],
                            ['choice_text' => 'Une suppression automatique des features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver les métriques d’un modèle en production ?',
                        'explanation' => 'Les métriques permettent de suivre son comportement et de détecter des changements nécessitant une intervention.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre la performance et détecter les dégradations', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les prédictions', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les mises à jour', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le dataset de test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un model registry ?',
                        'explanation' => 'Un model registry permet de centraliser les versions de modèles, leur statut et souvent leurs métadonnées.',
                        'choices' => [
                            ['choice_text' => 'Gérer les versions et le cycle de vie des modèles', 'is_correct' => true],
                            ['choice_text' => 'Stocker uniquement les logs réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer des utilisateurs cloud', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les bases de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les environnements d’entraînement et de production ?',
                        'explanation' => 'La séparation réduit le risque qu’une expérimentation affecte directement le service utilisé par les utilisateurs.',
                        'choices' => [
                            ['choice_text' => 'Limiter l’impact des expérimentations et changements sur le service réel', 'is_correct' => true],
                            ['choice_text' => 'Partager les mêmes secrets partout', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un modèle champion/challenger ?',
                        'explanation' => 'Il permet de comparer un nouveau modèle à celui actuellement en production avant de généraliser le remplacement.',
                        'choices' => [
                            ['choice_text' => 'Comparer un nouveau modèle au modèle actuellement utilisé', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le modèle de production immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Éviter la validation', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement la taille du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi automatiser les tests des pipelines ML ?',
                        'explanation' => 'Les tests automatisés permettent de détecter plus tôt les régressions de données, code, performances ou comportements.',
                        'choices' => [
                            ['choice_text' => 'Détecter rapidement les régressions et erreurs du pipeline', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute validation humaine', 'is_correct' => false],
                            ['choice_text' => 'Garantir l’absence de biais', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des labels fiables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tracer les métadonnées d’un modèle déployé ?',
                        'explanation' => 'Les métadonnées permettent notamment de relier le modèle aux données, au code, aux paramètres et à l’environnement de déploiement.',
                        'choices' => [
                            ['choice_text' => 'Faciliter la traçabilité et l’investigation des résultats', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la nécessité de versionner', 'is_correct' => false],
                            ['choice_text' => 'Garantir la précision', 'is_correct' => false],
                            ['choice_text' => 'Empêcher les changements de modèle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Biais, explicabilité et IA responsable',
                'description' => 'Analysez les enjeux intermédiaires liés à l’équité, l’explicabilité, la qualité des données et la supervision humaine.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi mesurer les performances d’un modèle par sous-groupe ?',
                        'explanation' => 'Une performance globale peut masquer des écarts importants entre différents groupes ou segments de population.',
                        'choices' => [
                            ['choice_text' => 'Identifier d’éventuelles disparités de performance', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement l’équité', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute analyse globale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître si les données historiques reflètent des décisions humaines biaisées ?',
                        'explanation' => 'Le modèle peut reproduire ou amplifier les tendances présentes dans les données historiques.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut apprendre et reproduire certains biais historiques', 'is_correct' => true],
                            ['choice_text' => 'Le modèle devient automatiquement neutre', 'is_correct' => false],
                            ['choice_text' => 'Les biais sont supprimés pendant l’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Les données ne peuvent jamais influencer un modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général de l’explicabilité ?',
                        'explanation' => 'L’explicabilité vise à rendre les raisons ou facteurs influençant une prédiction plus compréhensibles pour les utilisateurs concernés.',
                        'choices' => [
                            ['choice_text' => 'Mieux comprendre les facteurs ayant conduit à une prédiction', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la prédiction est correcte', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de données', 'is_correct' => false],
                            ['choice_text' => 'Rendre tous les modèles simples', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une importance de feature ne constitue-t-elle pas automatiquement une causalité ?',
                        'explanation' => 'Une feature peut être corrélée à une prédiction sans être une cause directe du phénomène observé.',
                        'choices' => [
                            ['choice_text' => 'Une association prédictive n’implique pas nécessairement une relation causale', 'is_correct' => true],
                            ['choice_text' => 'Toutes les features sont causales', 'is_correct' => false],
                            ['choice_text' => 'Les modèles ne peuvent jamais identifier les variables importantes', 'is_correct' => false],
                            ['choice_text' => 'La causalité et la corrélation sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle peut jouer un humain dans une décision assistée par IA à fort impact ?',
                        'explanation' => 'Une supervision humaine peut vérifier les résultats, gérer les cas ambigus et prendre la décision finale lorsque les conséquences sont importantes.',
                        'choices' => [
                            ['choice_text' => 'Vérifier les cas sensibles et intervenir lorsque nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les logs', 'is_correct' => false],
                            ['choice_text' => 'Garantir la précision du modèle', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute automatisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la documentation des limites d’un modèle est-elle importante ?',
                        'explanation' => 'Elle aide les utilisateurs à comprendre quand le modèle peut être utilisé et dans quelles conditions ses résultats doivent être interprétés avec prudence.',
                        'choices' => [
                            ['choice_text' => 'Définir les conditions et limites de confiance du système', 'is_correct' => true],
                            ['choice_text' => 'Garantir une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité de validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équilibre entre classes peut-il être important dans une application sensible ?',
                        'explanation' => 'Un déséquilibre peut entraîner des performances très différentes entre classes et masquer des erreurs importantes derrière une moyenne globale élevée.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une forte majorité peut masquer de mauvaises performances sur une classe minoritaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les classes doivent toujours être exactement égales', 'is_correct' => false],
                            ['choice_text' => 'Parce que le déséquilibre empêche toujours tout apprentissage', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’accuracy devient automatiquement nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un audit d’un système d’IA ?',
                        'explanation' => 'Un audit peut examiner les données, le modèle, les contrôles, la performance et les risques afin d’évaluer sa conformité et sa robustesse.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les contrôles, données, performances et risques du système', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’aucune erreur future n’arrivera', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les tests techniques', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la provenance des données est-elle importante dans un projet IA ?',
                        'explanation' => 'Connaître l’origine des données facilite l’évaluation de leur qualité, de leur légitimité d’utilisation et de leur contexte.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre leur origine, leur qualité et leurs conditions d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les données automatiquement publiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité de validation', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’elles ne contiennent aucun biais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est approprié lorsqu’un modèle est utilisé dans un domaine à fort impact ?',
                        'explanation' => 'Plus les conséquences d’une erreur sont importantes, plus les contrôles, validations et mécanismes de supervision doivent être robustes.',
                        'choices' => [
                            ['choice_text' => 'Adapter le niveau de contrôle et de supervision au risque', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute supervision humaine', 'is_correct' => false],
                            ['choice_text' => 'Utiliser systématiquement le modèle le plus complexe', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les limites si l’accuracy est élevée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Déploiement et optimisation',
                'description' => 'Évaluez les principes de mise en production, latence, coûts et optimisation des modèles.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi la latence d’inférence est-elle importante pour une application temps réel ?',
                        'explanation' => 'Une latence élevée peut dégrader directement l’expérience utilisateur ou empêcher le système de respecter ses contraintes opérationnelles.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un délai élevé peut rendre le service inutilisable ou trop lent', 'is_correct' => true],
                            ['choice_text' => 'Parce que la latence détermine toujours la précision', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle rapide ne peut jamais être précis', 'is_correct' => false],
                            ['choice_text' => 'Parce que la latence remplace la validation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis peut exister entre taille du modèle et coût d’inférence ?',
                        'explanation' => 'Un modèle plus grand peut améliorer certaines performances mais nécessite généralement davantage de ressources de calcul.',
                        'choices' => [
                            ['choice_text' => 'Un modèle plus grand peut être plus coûteux à faire fonctionner', 'is_correct' => true],
                            ['choice_text' => 'Les modèles plus grands coûtent toujours moins cher', 'is_correct' => false],
                            ['choice_text' => 'La taille n’influence jamais les ressources', 'is_correct' => false],
                            ['choice_text' => 'Les coûts dépendent uniquement du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de quantifier un modèle ?',
                        'explanation' => 'La quantification réduit la précision numérique utilisée pour représenter certains paramètres et activations, ce qui peut réduire la mémoire et accélérer l’inférence.',
                        'choices' => [
                            ['choice_text' => 'Réduire potentiellement la mémoire et le coût de calcul', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les paramètres', 'is_correct' => false],
                            ['choice_text' => 'Garantir aucune perte de qualité', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement de nouvelles données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le batching peut-il améliorer l’efficacité d’inférence ?',
                        'explanation' => 'Traiter plusieurs requêtes ensemble peut mieux utiliser certaines ressources matérielles, même si cela peut augmenter la latence individuelle.',
                        'choices' => [
                            ['choice_text' => 'Il peut améliorer l’utilisation des ressources en regroupant plusieurs requêtes', 'is_correct' => true],
                            ['choice_text' => 'Il supprime automatiquement la latence', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute surcharge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut être provoqué par un batching trop important ?',
                        'explanation' => 'Un batch très grand peut augmenter la latence d’attente et la consommation mémoire.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de la latence et de la consommation mémoire', 'is_correct' => true],
                            ['choice_text' => 'Une suppression automatique du modèle', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine de la précision', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des requêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester un modèle dans l’environnement réel avant un déploiement global ?',
                        'explanation' => 'Les conditions de production peuvent différer des données et performances observées en laboratoire.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier ses performances et son comportement dans des conditions réelles', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la validation', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les utilisateurs', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement son nombre de paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un modèle plus petit lorsque ses performances restent acceptables ?',
                        'explanation' => 'Un modèle plus petit peut réduire les coûts de calcul, la latence et les besoins en mémoire.',
                        'choices' => [
                            ['choice_text' => 'Réduire potentiellement les coûts et la latence', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les besoins de supervision', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les données d’entraînement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer l’API d’inférence du pipeline d’entraînement ?',
                        'explanation' => 'Cette séparation permet de faire évoluer les deux composants indépendamment et réduit les risques qu’un entraînement affecte directement le service de production.',
                        'choices' => [
                            ['choice_text' => 'Permettre une évolution et une gestion indépendantes des deux processus', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute mise à jour', 'is_correct' => false],
                            ['choice_text' => 'Rendre le modèle statique pour toujours', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un modèle est optimisé uniquement pour une métrique de benchmark ?',
                        'explanation' => 'Une optimisation excessive sur une métrique peut ignorer d’autres critères importants comme robustesse, équité, latence ou coût.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut être performant sur le benchmark mais inadapté aux besoins réels', 'is_correct' => true],
                            ['choice_text' => 'Les benchmarks deviennent automatiquement inutiles', 'is_correct' => false],
                            ['choice_text' => 'La précision réelle devient toujours supérieure', 'is_correct' => false],
                            ['choice_text' => 'Les données de production disparaissent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi surveiller les coûts d’inférence après mise en production ?',
                        'explanation' => 'Le volume réel de requêtes peut fortement modifier les coûts prévus lors du développement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’usage réel peut faire varier fortement la consommation de ressources', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts sont toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’inférence ne consomme aucune ressource', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les utilisateurs actifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Intermediate — Évaluation avancée et sélection de modèles',
                'description' => 'Comparez plusieurs modèles, métriques et stratégies d’évaluation dans des scénarios pratiques.',
                'difficulty' => 'Intermediate',
                'duration' => 18,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi utiliser plusieurs métriques pour évaluer un modèle ?',
                        'explanation' => 'Une seule métrique peut masquer certains types d’erreurs. Plusieurs métriques fournissent une vision plus complète du comportement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une métrique unique peut cacher certaines erreurs importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les métriques mesurent exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout test sur les données', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement la précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît lorsqu’un modèle a une excellente performance moyenne mais des résultats très faibles pour un sous-groupe ?',
                        'explanation' => 'La moyenne globale masque alors une disparité de performance qui peut être importante selon le contexte métier.',
                        'choices' => [
                            ['choice_text' => 'Une disparité de performance cachée par la moyenne globale', 'is_correct' => true],
                            ['choice_text' => 'Une preuve que le modèle est parfait', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité d’utiliser la métrique globale', 'is_correct' => false],
                            ['choice_text' => 'Un problème exclusivement lié au stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une courbe ROC dans une classification binaire ?',
                        'explanation' => 'La courbe ROC permet d’étudier le compromis entre taux de vrais positifs et taux de faux positifs pour différents seuils.',
                        'choices' => [
                            ['choice_text' => 'Analyser le compromis entre détection des positifs et faux positifs selon le seuil', 'is_correct' => true],
                            ['choice_text' => 'Mesurer directement le temps d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Évaluer uniquement les régressions', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le nombre de features', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’AUC peut-elle être utile ?',
                        'explanation' => 'L’AUC résume la capacité du modèle à classer les positifs au-dessus des négatifs sur différents seuils.',
                        'choices' => [
                            ['choice_text' => 'Elle résume la capacité de discrimination sur différents seuils', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure directement le coût d’inférence', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours la matrice de confusion', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une calibration parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une métrique F1 ?',
                        'explanation' => 'Le score F1 combine precision et recall via leur moyenne harmonique et peut être utile lorsque les deux dimensions sont importantes.',
                        'choices' => [
                            ['choice_text' => 'Combiner precision et recall dans une même métrique', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la vitesse d’inférence', 'is_correct' => false],
                            ['choice_text' => 'Évaluer exclusivement les régressions', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la quantité de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un benchmark interne est-il utile même avec un benchmark public ?',
                        'explanation' => 'Les données internes reflètent mieux le contexte réel de l’organisation, ses utilisateurs et ses contraintes.',
                        'choices' => [
                            ['choice_text' => 'Il reflète mieux les données et usages réels de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Un benchmark public est toujours incorrect', 'is_correct' => false],
                            ['choice_text' => 'Il élimine la nécessité de tests externes', 'is_correct' => false],
                            ['choice_text' => 'Il garantit automatiquement une meilleure précision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence entre performance offline et online doit-elle être investiguée ?',
                        'explanation' => 'Elle peut signaler un changement de distribution des données, une différence de preprocessing ou des contraintes du système réel.',
                        'choices' => [
                            ['choice_text' => 'Elle peut révéler une différence entre les conditions de test et la réalité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve toujours que le modèle est défectueux', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie que les données offline sont toujours meilleures', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est pertinent lorsqu’on choisit entre deux modèles de performances similaires ?',
                        'explanation' => 'Si les performances sont proches, il peut être préférable de choisir le modèle plus simple, moins coûteux ou plus facile à maintenir.',
                        'choices' => [
                            ['choice_text' => Considérer aussi le coût, la complexité, la latence et la maintenabilité'],
                            ['choice_text' => 'Choisir toujours le modèle le plus complexe', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le modèle le plus grand', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les contraintes opérationnelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester la robustesse d’un modèle sur des variations réalistes des données ?',
                        'explanation' => 'La robustesse indique si le modèle conserve un niveau acceptable de performance lorsque les données varient dans les conditions prévues.',
                        'choices' => [
                            ['choice_text' => 'Vérifier qu’il reste fiable lorsque les données changent dans des conditions réalistes', 'is_correct' => true],
                            ['choice_text' => 'Garantir qu’il fonctionne sur n’importe quelle donnée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données inhabituelles', 'is_correct' => false],
                            ['choice_text' => 'Éviter les tests de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un modèle plus simple lorsque sa performance est comparable ?',
                        'explanation' => 'Un modèle plus simple peut être plus facile à déployer, expliquer, surveiller et maintenir.',
                        'choices' => [
                            ['choice_text' => 'Une complexité opérationnelle et de maintenance potentiellement plus faible', 'is_correct' => true],
                            ['choice_text' => 'Une précision automatiquement supérieure', 'is_correct' => false],
                            ['choice_text' => 'Une absence de besoin de données', 'is_correct' => false],
                            ['choice_text' => 'Une garantie de robustesse', 'is_correct' => false],
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