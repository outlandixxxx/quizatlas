<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArtificialIntelligenceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'artificial-intelligence')->firstOrFail();

        $quizzes = [
            [
                'title' => 'IA Beginner — Fondamentaux de l’intelligence artificielle',
                'description' => 'Découvrez les concepts essentiels de l’intelligence artificielle, du Machine Learning et des systèmes intelligents.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’intelligence artificielle ?',
                        'explanation' => 'L’intelligence artificielle regroupe des méthodes permettant à des systèmes informatiques d’effectuer des tâches qui nécessitent généralement certaines capacités associées à l’intelligence humaine.',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de techniques permettant aux machines d’accomplir certaines tâches intelligentes', 'is_correct' => true],
                            ['choice_text' => 'Un type de câble informatique', 'is_correct' => false],
                            ['choice_text' => 'Un système de stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un langage de programmation unique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel domaine de l’IA permet à une machine d’apprendre à partir de données ?',
                        'explanation' => 'Le Machine Learning permet aux modèles d’apprendre des régularités à partir d’exemples de données.',
                        'choices' => [
                            ['choice_text' => 'Machine Learning', 'is_correct' => true],
                            ['choice_text' => 'DNS', 'is_correct' => false],
                            ['choice_text' => 'HTML', 'is_correct' => false],
                            ['choice_text' => 'Compression de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal des données dans le Machine Learning ?',
                        'explanation' => 'Les données fournissent les exemples nécessaires à l’apprentissage des relations ou motifs utiles au modèle.',
                        'choices' => [
                            ['choice_text' => 'Fournir les exemples à partir desquels le modèle apprend', 'is_correct' => true],
                            ['choice_text' => 'Remplacer complètement l’algorithme', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la nécessité d’évaluer le modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une application de l’IA dans la vie quotidienne ?',
                        'explanation' => 'Les systèmes de recommandation utilisent des données pour proposer des produits, vidéos ou contenus susceptibles d’intéresser l’utilisateur.',
                        'choices' => [
                            ['choice_text' => 'Recommander des vidéos ou des produits', 'is_correct' => true],
                            ['choice_text' => 'Alimenter un ordinateur en électricité', 'is_correct' => false],
                            ['choice_text' => 'Changer physiquement un clavier', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la taille d’un écran', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un modèle de Machine Learning ?',
                        'explanation' => 'Un modèle est une représentation mathématique ou algorithmique apprise à partir de données pour produire des prédictions ou décisions.',
                        'choices' => [
                            ['choice_text' => 'Un système appris à partir de données pour produire des prédictions ou décisions', 'is_correct' => true],
                            ['choice_text' => 'Un fichier contenant uniquement des images', 'is_correct' => false],
                            ['choice_text' => 'Un composant matériel obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Un serveur DNS', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie entraîner un modèle d’IA ?',
                        'explanation' => 'L’entraînement consiste à ajuster les paramètres du modèle à partir de données afin d’améliorer ses prédictions.',
                        'choices' => [
                            ['choice_text' => 'Ajuster les paramètres du modèle à partir d’exemples', 'is_correct' => true],
                            ['choice_text' => 'Ajouter physiquement des composants au serveur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Changer automatiquement le système d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne une caractéristique utilisée par un modèle de Machine Learning ?',
                        'explanation' => 'Une feature est une caractéristique ou variable d’entrée utilisée par le modèle pour effectuer une prédiction.',
                        'choices' => [
                            ['choice_text' => 'Feature', 'is_correct' => true],
                            ['choice_text' => 'Firewall', 'is_correct' => false],
                            ['choice_text' => 'Router', 'is_correct' => false],
                            ['choice_text' => 'Endpoint', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement à produire un modèle de classification ?',
                        'explanation' => 'Un modèle de classification attribue généralement une observation à une catégorie parmi plusieurs classes possibles.',
                        'choices' => [
                            ['choice_text' => 'Une classe ou catégorie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une image', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Un système d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type de problème consiste à prédire une valeur numérique continue ?',
                        'explanation' => 'La régression vise généralement à prédire une valeur numérique comme un prix, une température ou une demande.',
                        'choices' => [
                            ['choice_text' => 'La régression', 'is_correct' => true],
                            ['choice_text' => 'Le clustering uniquement', 'is_correct' => false],
                            ['choice_text' => 'La classification uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante d’un système d’IA ?',
                        'explanation' => 'Un système d’IA peut produire des résultats incorrects, notamment lorsque les données sont insuffisantes, biaisées ou différentes de celles utilisées pendant l’apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Il peut produire des résultats incorrects', 'is_correct' => true],
                            ['choice_text' => 'Il est toujours parfaitement fiable', 'is_correct' => false],
                            ['choice_text' => 'Il n’utilise jamais de données', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais être évalué', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Données et apprentissage automatique',
                'description' => 'Comprenez les principaux types de données et les étapes fondamentales de l’apprentissage automatique.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une donnée étiquetée ?',
                        'explanation' => 'Une donnée étiquetée possède une cible ou réponse connue que le modèle peut utiliser pendant un apprentissage supervisé.',
                        'choices' => [
                            ['choice_text' => 'Une donnée associée à une cible connue', 'is_correct' => true],
                            ['choice_text' => 'Une donnée toujours stockée dans un fichier texte', 'is_correct' => false],
                            ['choice_text' => 'Une donnée forcément parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une donnée qui ne peut pas être utilisée pour l’apprentissage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type d’apprentissage utilise des données avec des réponses connues ?',
                        'explanation' => 'L’apprentissage supervisé utilise des exemples dont la sortie attendue est connue afin d’apprendre une fonction de prédiction.',
                        'choices' => [
                            ['choice_text' => 'Apprentissage supervisé', 'is_correct' => true],
                            ['choice_text' => 'Apprentissage non supervisé', 'is_correct' => false],
                            ['choice_text' => 'Apprentissage manuel', 'is_correct' => false],
                            ['choice_text' => 'Apprentissage réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type d’apprentissage cherche des structures dans des données sans cible fournie ?',
                        'explanation' => 'L’apprentissage non supervisé cherche par exemple des groupes, régularités ou représentations sans disposer d’une cible connue.',
                        'choices' => [
                            ['choice_text' => 'Apprentissage non supervisé', 'is_correct' => true],
                            ['choice_text' => 'Apprentissage supervisé', 'is_correct' => false],
                            ['choice_text' => 'Classification supervisée', 'is_correct' => false],
                            ['choice_text' => 'Apprentissage manuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement un jeu de données d’entraînement ?',
                        'explanation' => 'Le jeu d’entraînement fournit les exemples utilisés pour ajuster les paramètres du modèle.',
                        'choices' => [
                            ['choice_text' => 'Apprendre les paramètres du modèle', 'is_correct' => true],
                            ['choice_text' => 'Tester uniquement le modèle final', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les données de production', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la vitesse du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on un jeu de test séparé ?',
                        'explanation' => 'Le jeu de test permet d’estimer les performances sur des données qui n’ont pas été utilisées pendant l’apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la généralisation sur des données non utilisées pour l’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des features', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le modèle', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un dataset ?',
                        'explanation' => 'Un dataset est une collection organisée de données utilisée notamment pour l’analyse ou l’entraînement des modèles.',
                        'choices' => [
                            ['choice_text' => 'Une collection organisée de données', 'is_correct' => true],
                            ['choice_text' => 'Un processeur spécialisé', 'is_correct' => false],
                            ['choice_text' => 'Un pare-feu', 'is_correct' => false],
                            ['choice_text' => 'Un langage de programmation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi nettoyer les données avant l’entraînement ?',
                        'explanation' => 'Les erreurs, valeurs incohérentes ou données manquantes peuvent dégrader l’apprentissage et la qualité des prédictions.',
                        'choices' => [
                            ['choice_text' => 'Améliorer la qualité des informations utilisées par le modèle', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement 100 % de précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de validation', 'is_correct' => false],
                            ['choice_text' => 'Remplacer l’algorithme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dataset déséquilibré peut-il être problématique ?',
                        'explanation' => 'Une classe très majoritaire peut dominer l’apprentissage et les métriques, alors que la classe minoritaire peut être mal détectée.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut moins bien apprendre les classes minoritaires', 'is_correct' => true],
                            ['choice_text' => 'Le dataset devient automatiquement inutilisable', 'is_correct' => false],
                            ['choice_text' => 'Les données deviennent automatiquement fausses', 'is_correct' => false],
                            ['choice_text' => 'Le modèle ne peut plus être entraîné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement la target ou cible ?',
                        'explanation' => 'La target est la valeur ou catégorie que le modèle doit prédire dans un problème supervisé.',
                        'choices' => [
                            ['choice_text' => 'La sortie que le modèle doit prédire', 'is_correct' => true],
                            ['choice_text' => 'Le nom du serveur', 'is_correct' => false],
                            ['choice_text' => 'La taille du dataset', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de couches du réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver un ensemble de données inédit pour une évaluation finale ?',
                        'explanation' => 'Des données jamais utilisées pendant le développement donnent une meilleure estimation du comportement du modèle sur de nouvelles observations.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer plus honnêtement sa capacité à généraliser', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter artificiellement la précision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le modèle plus complexe', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Algorithmes classiques',
                'description' => 'Découvrez les usages fondamentaux de plusieurs algorithmes classiques de Machine Learning.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel algorithme regroupe des observations en K groupes ?',
                        'explanation' => 'K-Means est un algorithme de clustering qui cherche à répartir les observations en K groupes.',
                        'choices' => [
                            ['choice_text' => 'K-Means', 'is_correct' => true],
                            ['choice_text' => 'Régression linéaire', 'is_correct' => false],
                            ['choice_text' => 'Régression logistique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Naive Bayes uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme utilise les voisins les plus proches pour réaliser une prédiction ?',
                        'explanation' => 'K-Nearest Neighbors utilise les observations les plus proches pour déterminer une classe ou une valeur.',
                        'choices' => [
                            ['choice_text' => 'K-Nearest Neighbors', 'is_correct' => true],
                            ['choice_text' => 'PCA', 'is_correct' => false],
                            ['choice_text' => 'K-Means uniquement', 'is_correct' => false],
                            ['choice_text' => 'Random Forest uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme est adapté à la prédiction d’une valeur numérique continue ?',
                        'explanation' => 'La régression linéaire est couramment utilisée pour modéliser une relation approximativement linéaire entre des variables.',
                        'choices' => [
                            ['choice_text' => 'Régression linéaire', 'is_correct' => true],
                            ['choice_text' => 'Clustering', 'is_correct' => false],
                            ['choice_text' => 'Classification binaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'PCA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle est souvent utilisé pour une classification binaire ?',
                        'explanation' => 'La régression logistique peut produire une probabilité associée à une classe et être utilisée pour une classification binaire.',
                        'choices' => [
                            ['choice_text' => 'Régression logistique', 'is_correct' => true],
                            ['choice_text' => 'Régression linéaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'K-Means', 'is_correct' => false],
                            ['choice_text' => 'PCA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait principalement un Decision Tree ?',
                        'explanation' => 'Un arbre de décision divise progressivement les données selon des conditions afin de produire une prédiction.',
                        'choices' => [
                            ['choice_text' => 'Prendre une succession de décisions basées sur des conditions', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les données', 'is_correct' => false],
                            ['choice_text' => 'Compresser les images', 'is_correct' => false],
                            ['choice_text' => 'Stocker uniquement les labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe général de Random Forest ?',
                        'explanation' => 'Random Forest combine plusieurs arbres de décision afin d’obtenir des prédictions généralement plus robustes qu’un arbre unique.',
                        'choices' => [
                            ['choice_text' => 'Combiner plusieurs arbres de décision', 'is_correct' => true],
                            ['choice_text' => 'Créer un seul arbre extrêmement profond', 'is_correct' => false],
                            ['choice_text' => 'Regrouper les données sans modèle', 'is_correct' => false],
                            ['choice_text' => 'Compresser le dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement PCA ?',
                        'explanation' => 'PCA est une technique de réduction dimensionnelle qui transforme les variables en composantes représentant une grande partie de la variance.',
                        'choices' => [
                            ['choice_text' => 'Réduire le nombre de dimensions d’un dataset', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'Faire du chiffrement réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer un serveur Web', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avec un arbre de décision trop complexe ?',
                        'explanation' => 'Un arbre très complexe peut mémoriser excessivement les données d’entraînement et généraliser moins bien.',
                        'choices' => [
                            ['choice_text' => 'Le surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'La compression excessive', 'is_correct' => false],
                            ['choice_text' => 'La disparition des labels', 'is_correct' => false],
                            ['choice_text' => 'Le chiffrement automatique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs modèles sur un même jeu de validation ?',
                        'explanation' => 'Utiliser les mêmes conditions d’évaluation permet de comparer leurs performances de manière cohérente.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer leurs performances dans des conditions similaires', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’ils auront tous la même précision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les données', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure de performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme est principalement destiné au clustering ?',
                        'explanation' => 'K-Means est l’un des algorithmes classiques les plus connus pour regrouper des observations selon leur similarité.',
                        'choices' => [
                            ['choice_text' => 'K-Means', 'is_correct' => true],
                            ['choice_text' => 'Régression logistique', 'is_correct' => false],
                            ['choice_text' => 'Régression linéaire', 'is_correct' => false],
                            ['choice_text' => 'Perceptron uniquement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Évaluation des modèles',
                'description' => 'Apprenez à comprendre les principales métriques utilisées pour évaluer les modèles de Machine Learning.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que mesure généralement l’accuracy ?',
                        'explanation' => 'L’accuracy représente la proportion globale de prédictions correctes parmi toutes les prédictions.',
                        'choices' => [
                            ['choice_text' => 'La proportion de prédictions correctes', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de features', 'is_correct' => false],
                            ['choice_text' => 'La taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'La quantité de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un vrai positif ?',
                        'explanation' => 'Un vrai positif correspond à une observation réellement positive correctement prédite comme positive.',
                        'choices' => [
                            ['choice_text' => 'Une observation positive correctement identifiée', 'is_correct' => true],
                            ['choice_text' => 'Une observation négative prédite comme positive', 'is_correct' => false],
                            ['choice_text' => 'Une observation positive prédite comme négative', 'is_correct' => false],
                            ['choice_text' => 'Une observation ignorée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un faux positif ?',
                        'explanation' => 'Un faux positif se produit lorsque le modèle prédit la classe positive alors que l’observation est réellement négative.',
                        'choices' => [
                            ['choice_text' => 'Une observation négative prédite comme positive', 'is_correct' => true],
                            ['choice_text' => 'Une observation positive correctement détectée', 'is_correct' => false],
                            ['choice_text' => 'Une observation positive prédite comme négative', 'is_correct' => false],
                            ['choice_text' => 'Une observation absente du dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure principalement la precision ?',
                        'explanation' => 'La precision mesure la proportion de prédictions positives qui sont réellement positives.',
                        'choices' => [
                            ['choice_text' => 'La fiabilité des prédictions positives', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de données', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du processeur', 'is_correct' => false],
                            ['choice_text' => 'La taille du fichier modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure principalement le recall ?',
                        'explanation' => 'Le recall mesure la proportion des exemples réellement positifs qui ont été détectés correctement.',
                        'choices' => [
                            ['choice_text' => 'La proportion de positifs réels correctement détectés', 'is_correct' => true],
                            ['choice_text' => 'La proportion de négatifs correctement détectés uniquement', 'is_correct' => false],
                            ['choice_text' => 'La taille du dataset', 'is_correct' => false],
                            ['choice_text' => 'La durée de l’entraînement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’accuracy peut-elle être trompeuse sur un dataset très déséquilibré ?',
                        'explanation' => 'Si une classe domine fortement, un modèle peut obtenir une accuracy élevée sans bien détecter la classe minoritaire.',
                        'choices' => [
                            ['choice_text' => 'Une classe majoritaire peut dominer le score global', 'is_correct' => true],
                            ['choice_text' => 'L’accuracy ne dépend jamais des prédictions', 'is_correct' => false],
                            ['choice_text' => 'Un dataset déséquilibré contient toujours des erreurs', 'is_correct' => false],
                            ['choice_text' => 'Le recall devient toujours égal à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une matrice de confusion ?',
                        'explanation' => 'Elle présente notamment les vrais positifs, faux positifs, vrais négatifs et faux négatifs d’un modèle de classification.',
                        'choices' => [
                            ['choice_text' => 'Analyser les différents types de prédictions correctes et incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Calculer la vitesse du réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement les données d’entraînement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le surapprentissage ?',
                        'explanation' => 'Le surapprentissage se produit lorsqu’un modèle s’adapte trop aux données d’entraînement et généralise mal sur de nouvelles données.',
                        'choices' => [
                            ['choice_text' => 'Un modèle qui mémorise trop les données d’entraînement et généralise mal', 'is_correct' => true],
                            ['choice_text' => 'Un modèle qui n’utilise aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Un modèle toujours plus simple que nécessaire', 'is_correct' => false],
                            ['choice_text' => 'Un modèle sans paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on une validation pendant le développement d’un modèle ?',
                        'explanation' => 'Le jeu de validation aide à comparer les configurations et à régler certains hyperparamètres sans utiliser directement le test final.',
                        'choices' => [
                            ['choice_text' => 'Comparer des configurations et ajuster le modèle pendant son développement', 'is_correct' => true],
                            ['choice_text' => 'Remplacer définitivement les données d’entraînement', 'is_correct' => false],
                            ['choice_text' => 'Garantir une absence totale de biais', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester un modèle sur des données non vues ?',
                        'explanation' => 'Cela permet d’estimer sa capacité à fonctionner sur des observations nouvelles plutôt que sur des exemples déjà utilisés.',
                        'choices' => [
                            ['choice_text' => 'Mesurer sa capacité à généraliser à de nouvelles données', 'is_correct' => true],
                            ['choice_text' => 'Augmenter artificiellement sa précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le surapprentissage automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Modifier son architecture', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Réseaux de neurones et Deep Learning',
                'description' => 'Découvrez les notions fondamentales des réseaux de neurones et du Deep Learning.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un réseau de neurones artificiels ?',
                        'explanation' => 'Un réseau de neurones est un modèle composé de couches de neurones artificiels capables d’apprendre des relations complexes.',
                        'choices' => [
                            ['choice_text' => 'Un modèle composé de neurones artificiels organisés en couches', 'is_correct' => true],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                            ['choice_text' => 'Un système de fichiers', 'is_correct' => false],
                            ['choice_text' => 'Un type de base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général des poids dans un réseau de neurones ?',
                        'explanation' => 'Les poids déterminent l’influence des différentes entrées dans les calculs effectués par les neurones.',
                        'choices' => [
                            ['choice_text' => 'Déterminer l’influence des entrées dans les calculs du réseau', 'is_correct' => true],
                            ['choice_text' => 'Stocker toutes les données originales', 'is_correct' => false],
                            ['choice_text' => 'Créer les labels automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les fonctions d’activation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une fonction d’activation ?',
                        'explanation' => 'Les fonctions d’activation introduisent notamment de la non-linéarité dans le réseau.',
                        'choices' => [
                            ['choice_text' => 'Introduire une transformation non linéaire', 'is_correct' => true],
                            ['choice_text' => 'Stocker les images', 'is_correct' => false],
                            ['choice_text' => 'Créer le dataset de test', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement la durée d’entraînement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une epoch ?',
                        'explanation' => 'Une epoch correspond à un passage complet du jeu d’entraînement dans le processus d’apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Un passage complet sur le jeu d’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Une seule feature', 'is_correct' => false],
                            ['choice_text' => 'Une classe unique', 'is_correct' => false],
                            ['choice_text' => 'Une seule requête utilisateur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une fonction de perte ?',
                        'explanation' => 'La fonction de perte mesure l’écart entre les prédictions produites et les valeurs attendues.',
                        'choices' => [
                            ['choice_text' => 'Mesurer l’erreur du modèle', 'is_correct' => true],
                            ['choice_text' => 'Créer les données automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Stocker les poids', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le dataset', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la backpropagation ?',
                        'explanation' => 'La rétropropagation calcule comment l’erreur dépend des paramètres du réseau afin de permettre leur ajustement.',
                        'choices' => [
                            ['choice_text' => 'Calculer l’influence de l’erreur sur les paramètres du réseau', 'is_correct' => true],
                            ['choice_text' => 'Envoyer les données sur Internet', 'is_correct' => false],
                            ['choice_text' => 'Compresser les poids', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement les labels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne un ensemble de couches permettant d’apprendre des représentations complexes ?',
                        'explanation' => 'Le Deep Learning utilise généralement des réseaux de neurones comportant plusieurs couches.',
                        'choices' => [
                            ['choice_text' => 'Deep Learning', 'is_correct' => true],
                            ['choice_text' => 'Clustering', 'is_correct' => false],
                            ['choice_text' => 'Hashing', 'is_correct' => false],
                            ['choice_text' => 'Routing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent des mini-batches ?',
                        'explanation' => 'Les mini-batches permettent de traiter les données par petits groupes et d’effectuer plusieurs mises à jour pendant l’entraînement.',
                        'choices' => [
                            ['choice_text' => 'Traiter les données par groupes lors de l’apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les exemples difficiles', 'is_correct' => false],
                            ['choice_text' => 'Garantir zéro surapprentissage', 'is_correct' => false],
                            ['choice_text' => 'Transformer le réseau en arbre de décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel composant reçoit généralement les données initiales dans un réseau de neurones ?',
                        'explanation' => 'La couche d’entrée reçoit les caractéristiques qui seront ensuite transformées par les couches du réseau.',
                        'choices' => [
                            ['choice_text' => 'La couche d’entrée', 'is_correct' => true],
                            ['choice_text' => 'La couche de sortie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le dataset de test', 'is_correct' => false],
                            ['choice_text' => 'Le système de fichiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le Deep Learning peut-il être particulièrement utile pour les images et le texte ?',
                        'explanation' => 'Les réseaux profonds peuvent apprendre automatiquement des représentations hiérarchiques adaptées à des données complexes comme les images et le langage.',
                        'choices' => [
                            ['choice_text' => 'Il peut apprendre des représentations complexes à partir de grandes quantités de données', 'is_correct' => true],
                            ['choice_text' => 'Il ne nécessite aucune donnée', 'is_correct' => false],
                            ['choice_text' => 'Il fonctionne uniquement avec des tableaux simples', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toutes les erreurs de données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — NLP et langage naturel',
                'description' => 'Découvrez les concepts fondamentaux du traitement automatique du langage naturel.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que signifie NLP ?',
                        'explanation' => 'NLP signifie Natural Language Processing, soit traitement automatique du langage naturel.',
                        'choices' => [
                            ['choice_text' => 'Natural Language Processing', 'is_correct' => true],
                            ['choice_text' => 'Network Learning Protocol', 'is_correct' => false],
                            ['choice_text' => 'Neural Logic Platform', 'is_correct' => false],
                            ['choice_text' => 'Numeric Language Processor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un exemple de tâche NLP ?',
                        'explanation' => 'L’analyse de sentiment cherche notamment à déterminer l’attitude ou la polarité exprimée dans un texte.',
                        'choices' => [
                            ['choice_text' => 'Analyse de sentiment', 'is_correct' => true],
                            ['choice_text' => 'Gestion d’un disque dur', 'is_correct' => false],
                            ['choice_text' => 'Routage IP', 'is_correct' => false],
                            ['choice_text' => 'Gestion de mémoire RAM', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la tokenisation ?',
                        'explanation' => 'La tokenisation consiste à découper un texte en unités appelées tokens afin de pouvoir le traiter.',
                        'choices' => [
                            ['choice_text' => 'Découper le texte en unités exploitables', 'is_correct' => true],
                            ['choice_text' => 'Chiffrer les phrases', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute signification', 'is_correct' => false],
                            ['choice_text' => 'Transformer le texte en image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une analyse de sentiment ?',
                        'explanation' => 'Elle cherche généralement à déterminer si un texte exprime une opinion positive, négative ou une autre orientation émotionnelle.',
                        'choices' => [
                            ['choice_text' => 'Identifier la polarité ou l’attitude exprimée dans un texte', 'is_correct' => true],
                            ['choice_text' => 'Compter uniquement les caractères', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la taille du fichier', 'is_correct' => false],
                            ['choice_text' => 'Identifier le système d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un chatbot ?',
                        'explanation' => 'Un chatbot est une application capable de dialoguer avec des utilisateurs, souvent en utilisant des techniques de NLP ou d’IA générative.',
                        'choices' => [
                            ['choice_text' => 'Une application qui dialogue avec les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Un moteur de stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un type de câble', 'is_correct' => false],
                            ['choice_text' => 'Un système de refroidissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un corpus en NLP ?',
                        'explanation' => 'Un corpus est une collection de textes utilisée pour analyser ou entraîner des systèmes linguistiques.',
                        'choices' => [
                            ['choice_text' => 'Une collection de textes', 'is_correct' => true],
                            ['choice_text' => 'Une carte graphique', 'is_correct' => false],
                            ['choice_text' => 'Une base réseau', 'is_correct' => false],
                            ['choice_text' => 'Un certificat numérique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le contexte est-il important dans le traitement du langage ?',
                        'explanation' => 'Un même mot peut avoir plusieurs sens. Le contexte aide le modèle à déterminer l’interprétation pertinente.',
                        'choices' => [
                            ['choice_text' => 'Il aide à comprendre le sens des mots et des phrases', 'is_correct' => true],
                            ['choice_text' => 'Il garantit que chaque mot n’a qu’un seul sens', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toutes les ambiguïtés', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toutes les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général de la traduction automatique ?',
                        'explanation' => 'La traduction automatique transforme un texte d’une langue source vers une langue cible.',
                        'choices' => [
                            ['choice_text' => 'Traduire automatiquement du texte vers une autre langue', 'is_correct' => true],
                            ['choice_text' => 'Compresser un document', 'is_correct' => false],
                            ['choice_text' => 'Créer une base de données', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement les images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il disposer d’un texte suffisamment représentatif pour entraîner un modèle NLP ?',
                        'explanation' => 'Le modèle apprend à partir des exemples qui lui sont fournis. Des données peu représentatives peuvent limiter sa capacité à généraliser.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre au modèle d’apprendre des exemples proches des situations réelles', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute utilisation de modèles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une absence totale d’erreurs', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le texte automatiquement structuré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données textuelles doivent-elles souvent être converties en représentations numériques ?',
                        'explanation' => 'Les modèles de Machine Learning effectuent leurs calculs sur des représentations numériques.',
                        'choices' => [
                            ['choice_text' => 'Les modèles manipulent des représentations numériques pour effectuer leurs calculs', 'is_correct' => true],
                            ['choice_text' => 'Les ordinateurs ne peuvent jamais stocker du texte', 'is_correct' => false],
                            ['choice_text' => 'Le texte doit être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Les représentations numériques empêchent toutes les erreurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Computer Vision',
                'description' => 'Découvrez les principaux concepts de Computer Vision et leurs applications.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la Computer Vision ?',
                        'explanation' => 'La Computer Vision regroupe des techniques permettant aux ordinateurs d’analyser et d’interpréter des images ou vidéos.',
                        'choices' => [
                            ['choice_text' => 'L’analyse informatique d’images et de vidéos', 'is_correct' => true],
                            ['choice_text' => 'La gestion des réseaux informatiques', 'is_correct' => false],
                            ['choice_text' => 'Le stockage des mots de passe', 'is_correct' => false],
                            ['choice_text' => 'La compression audio uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de la classification d’images ?',
                        'explanation' => 'La classification d’images consiste généralement à attribuer une catégorie ou plusieurs catégories à une image.',
                        'choices' => [
                            ['choice_text' => 'Attribuer une ou plusieurs catégories à une image', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les pixels', 'is_correct' => false],
                            ['choice_text' => 'Créer un serveur réseau', 'is_correct' => false],
                            ['choice_text' => 'Compresser obligatoirement l’image', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but de la détection d’objets ?',
                        'explanation' => 'La détection d’objets cherche à identifier les objets et à localiser leurs positions dans une image.',
                        'choices' => [
                            ['choice_text' => 'Identifier et localiser des objets', 'is_correct' => true],
                            ['choice_text' => 'Traduire un texte', 'is_correct' => false],
                            ['choice_text' => 'Calculer la vitesse du réseau', 'is_correct' => false],
                            ['choice_text' => 'Créer des comptes utilisateurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente un pixel ?',
                        'explanation' => 'Un pixel est une unité élémentaire d’information visuelle dans une image numérique.',
                        'choices' => [
                            ['choice_text' => 'Une unité élémentaire d’information visuelle', 'is_correct' => true],
                            ['choice_text' => 'Une classe du modèle', 'is_correct' => false],
                            ['choice_text' => 'Un fichier image complet', 'is_correct' => false],
                            ['choice_text' => 'Un algorithme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les images peuvent-elles être représentées par des matrices numériques ?',
                        'explanation' => 'Les pixels peuvent être représentés par des valeurs numériques organisées selon leur position spatiale.',
                        'choices' => [
                            ['choice_text' => 'Les pixels sont associés à des valeurs numériques organisées spatialement', 'is_correct' => true],
                            ['choice_text' => 'Les images ne contiennent aucune donnée numérique', 'is_correct' => false],
                            ['choice_text' => 'Les matrices servent uniquement au texte', 'is_correct' => false],
                            ['choice_text' => 'Chaque pixel est toujours une chaîne de caractères', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie CNN dans le contexte des images ?',
                        'explanation' => 'CNN signifie Convolutional Neural Network, une architecture particulièrement adaptée aux données visuelles.',
                        'choices' => [
                            ['choice_text' => 'Convolutional Neural Network', 'is_correct' => true],
                            ['choice_text' => 'Central Network Node', 'is_correct' => false],
                            ['choice_text' => 'Computer Numeric Network', 'is_correct' => false],
                            ['choice_text' => 'Connected Neural Name', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement une convolution dans un CNN ?',
                        'explanation' => 'Une convolution applique des filtres locaux afin d’extraire des motifs visuels tels que des contours ou textures.',
                        'choices' => [
                            ['choice_text' => 'Extraire des motifs locaux dans l’image', 'is_correct' => true],
                            ['choice_text' => 'Créer un utilisateur', 'is_correct' => false],
                            ['choice_text' => 'Compresser un disque', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les pixels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi redimensionner certaines images avant l’inférence ?',
                        'explanation' => 'Les modèles attendent souvent des dimensions d’entrée déterminées ou des tailles compatibles avec les batchs utilisés.',
                        'choices' => [
                            ['choice_text' => 'Fournir des dimensions d’entrée cohérentes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les objets', 'is_correct' => false],
                            ['choice_text' => 'Garantir une prédiction parfaite', 'is_correct' => false],
                            ['choice_text' => 'Transformer l’image en texte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une application de Computer Vision ?',
                        'explanation' => 'La reconnaissance faciale analyse des caractéristiques visuelles pour identifier ou vérifier une personne selon le système utilisé.',
                        'choices' => [
                            ['choice_text' => 'Reconnaissance faciale', 'is_correct' => true],
                            ['choice_text' => 'Gestion DNS', 'is_correct' => false],
                            ['choice_text' => 'Compilation d’un programme', 'is_correct' => false],
                            ['choice_text' => 'Gestion d’un compte bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de vision peut-il échouer sur des images très différentes de celles utilisées pour son apprentissage ?',
                        'explanation' => 'Le modèle peut avoir des difficultés à généraliser lorsque les nouvelles données sont fortement différentes de la distribution d’entraînement.',
                        'choices' => [
                            ['choice_text' => 'La distribution des nouvelles images peut être différente de celle d’entraînement', 'is_correct' => true],
                            ['choice_text' => 'Les pixels cessent de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Le modèle devient automatiquement plus précis', 'is_correct' => false],
                            ['choice_text' => 'La Computer Vision ne fonctionne que sur une seule image', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — IA générative et grands modèles',
                'description' => 'Comprenez les concepts de base de l’IA générative, des LLM et des prompts.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un modèle génératif ?',
                        'explanation' => 'Un modèle génératif apprend des structures dans ses données et peut produire de nouveaux contenus.',
                        'choices' => [
                            ['choice_text' => 'Un modèle capable de générer de nouveaux contenus', 'is_correct' => true],
                            ['choice_text' => 'Un modèle qui ne fait que stocker les données originales', 'is_correct' => false],
                            ['choice_text' => 'Un modèle uniquement destiné aux routeurs', 'is_correct' => false],
                            ['choice_text' => 'Un système qui garantit toutes les réponses exactes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie LLM ?',
                        'explanation' => 'LLM signifie Large Language Model, soit grand modèle de langage.',
                        'choices' => [
                            ['choice_text' => 'Large Language Model', 'is_correct' => true],
                            ['choice_text' => 'Local Learning Machine', 'is_correct' => false],
                            ['choice_text' => 'Language Logic Module', 'is_correct' => false],
                            ['choice_text' => 'Large Linear Memory', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un prompt ?',
                        'explanation' => 'Un prompt fournit au modèle génératif une instruction, une question ou un contexte destiné à orienter sa réponse.',
                        'choices' => [
                            ['choice_text' => 'Une instruction ou un contexte fourni au modèle', 'is_correct' => true],
                            ['choice_text' => 'Une clé de chiffrement', 'is_correct' => false],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Une base de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi donner un contexte précis dans un prompt peut-il être utile ?',
                        'explanation' => 'Un contexte plus clair réduit l’ambiguïté et aide le modèle à mieux comprendre la tâche attendue.',
                        'choices' => [
                            ['choice_text' => 'Réduire l’ambiguïté et mieux orienter la réponse', 'is_correct' => true],
                            ['choice_text' => 'Augmenter automatiquement la taille du modèle', 'is_correct' => false],
                            ['choice_text' => 'Garantir que toutes les informations sont vraies', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les limitations de l’IA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une hallucination dans un système génératif ?',
                        'explanation' => 'Une hallucination est une sortie qui peut sembler plausible mais qui contient une information inventée ou incorrecte.',
                        'choices' => [
                            ['choice_text' => 'Une réponse générée qui semble plausible mais contient des informations incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Une panne physique du GPU', 'is_correct' => false],
                            ['choice_text' => 'Une méthode de compression', 'is_correct' => false],
                            ['choice_text' => 'Une erreur réseau obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les réponses d’une IA générative dans un contexte important ?',
                        'explanation' => 'Les modèles génératifs peuvent produire des erreurs ou des informations inventées et ne garantissent pas automatiquement la véracité de chaque réponse.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une réponse générée peut être incorrecte', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un modèle ne peut jamais produire de texte', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute réponse d’IA est obligatoirement fausse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vérification augmente automatiquement les paramètres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une tâche de génération de texte ?',
                        'explanation' => 'Rédiger un texte, résumer un document ou proposer une réponse sont des exemples de génération de langage.',
                        'choices' => [
                            ['choice_text' => 'Rédiger un résumé à partir d’instructions', 'is_correct' => true],
                            ['choice_text' => 'Changer un câble réseau', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la tension d’un serveur', 'is_correct' => false],
                            ['choice_text' => 'Partitionner un disque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un embedding ?',
                        'explanation' => 'Un embedding représente une information sous forme de vecteur numérique exploitable par les modèles.',
                        'choices' => [
                            ['choice_text' => 'Une représentation numérique vectorielle d’une information', 'is_correct' => true],
                            ['choice_text' => 'Une adresse IP', 'is_correct' => false],
                            ['choice_text' => 'Un mot de passe', 'is_correct' => false],
                            ['choice_text' => 'Un type de pare-feu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de langage peut-il répondre avec assurance alors que la réponse est fausse ?',
                        'explanation' => 'Un modèle de langage génère du texte à partir de régularités apprises et ne possède pas automatiquement une garantie de véracité factuelle.',
                        'choices' => [
                            ['choice_text' => 'La génération de texte ne garantit pas automatiquement la véracité des informations', 'is_correct' => true],
                            ['choice_text' => 'Les modèles vérifient toujours chaque affirmation sur une source officielle', 'is_correct' => false],
                            ['choice_text' => 'Un LLM ne produit jamais de nouvelles phrases', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs sont impossibles dans un modèle génératif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt général de l’IA générative pour l’écriture de code ?',
                        'explanation' => 'Elle peut produire des exemples ou fragments de code à partir d’instructions, mais ce code doit être vérifié, testé et sécurisé.',
                        'choices' => [
                            ['choice_text' => 'Aider à produire des fragments de code à partir d’instructions', 'is_correct' => true],
                            ['choice_text' => 'Garantir que le code généré est toujours sécurisé', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les tests de logiciels', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toutes les erreurs de programmation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'IA Beginner — Éthique, biais et utilisation responsable',
                'description' => 'Découvrez les notions fondamentales de biais, confidentialité, transparence et utilisation responsable de l’IA.',
                'difficulty' => 'Beginner',
                'duration' => 15,
                'passing_score' => 70,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un biais dans un système d’IA ?',
                        'explanation' => 'Un biais peut conduire un système à produire régulièrement des résultats déséquilibrés ou défavorables dans certaines situations ou pour certains groupes.',
                        'choices' => [
                            ['choice_text' => 'Une tendance systématique pouvant produire des résultats déséquilibrés', 'is_correct' => true],
                            ['choice_text' => 'Une erreur matérielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une garantie de performance élevée', 'is_correct' => false],
                            ['choice_text' => 'Un type de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données d’entraînement peuvent-elles introduire des biais ?',
                        'explanation' => 'Le modèle peut apprendre certaines tendances ou déséquilibres présents dans les données utilisées pour son apprentissage.',
                        'choices' => [
                            ['choice_text' => 'Le modèle peut reproduire des déséquilibres présents dans les données', 'is_correct' => true],
                            ['choice_text' => 'Les données sont toujours neutres', 'is_correct' => false],
                            ['choice_text' => 'Les modèles ignorent toujours leurs données', 'is_correct' => false],
                            ['choice_text' => 'Les biais ne concernent jamais les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la confidentialité est-elle importante lors du traitement de données personnelles par une IA ?',
                        'explanation' => 'Les données personnelles peuvent être sensibles et doivent être traitées avec des garanties adaptées et conformément aux règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Parce que les données personnelles peuvent être sensibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que les données personnelles sont toujours publiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une IA ne peut jamais traiter de données', 'is_correct' => false],
                            ['choice_text' => 'Parce que la confidentialité empêche toute analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la minimisation des données ?',
                        'explanation' => 'La minimisation consiste à collecter et utiliser seulement les données nécessaires à l’objectif défini.',
                        'choices' => [
                            ['choice_text' => 'Limiter les données collectées et utilisées à ce qui est nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Collecter toutes les données possibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Rendre les données publiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une prédiction d’IA ne doit-elle pas toujours être considérée comme une vérité absolue ?',
                        'explanation' => 'Une prédiction dépend du modèle, des données et du contexte et peut donc être incorrecte ou inadaptée.',
                        'choices' => [
                            ['choice_text' => 'Une prédiction peut être erronée ou inadaptée au contexte', 'is_correct' => true],
                            ['choice_text' => 'Les modèles d’IA ne produisent jamais de prédictions', 'is_correct' => false],
                            ['choice_text' => 'Toutes les prédictions sont nécessairement aléatoires', 'is_correct' => false],
                            ['choice_text' => 'L’IA ne peut jamais traiter des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un modèle sur plusieurs groupes ou situations ?',
                        'explanation' => 'Une évaluation diversifiée peut révéler des différences de performance ou des biais qui ne seraient pas visibles sur un seul sous-ensemble.',
                        'choices' => [
                            ['choice_text' => 'Identifier d’éventuelles différences de performance ou de biais', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement une égalité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les groupes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute collecte de métriques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les limites d’un modèle est-il utile ?',
                        'explanation' => 'La documentation aide les utilisateurs et équipes à comprendre les conditions dans lesquelles les résultats doivent être interprétés avec prudence.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre les limites et conditions d’utilisation du modèle', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute amélioration du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une supervision humaine peut-elle rester nécessaire ?',
                        'explanation' => 'Dans des situations importantes ou risquées, l’humain peut vérifier les résultats et intervenir lorsque le modèle présente des incertitudes ou erreurs.',
                        'choices' => [
                            ['choice_text' => 'Pour superviser les décisions lorsque les conséquences d’une erreur sont importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les modèles ne peuvent jamais produire de résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute automatisation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle ne peut pas utiliser de données numériques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique est appropriée lorsqu’un système d’IA produit des résultats injustes pour certains utilisateurs ?',
                        'explanation' => 'Il faut analyser le problème, mesurer les différences, rechercher les causes et appliquer des corrections adaptées.',
                        'choices' => [
                            ['choice_text' => 'Analyser la cause, mesurer le problème et corriger le système', 'is_correct' => true],
                            ['choice_text' => 'Ignorer le problème si la moyenne globale est élevée', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les données du groupe concerné', 'is_correct' => false],
                            ['choice_text' => 'Masquer les résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver une documentation sur les données et le modèle ?',
                        'explanation' => 'La documentation facilite la compréhension de l’origine des données, de leur utilisation, du modèle et de ses limites.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité et comprendre les conditions d’utilisation du système', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tous les changements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les tests', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données publiques', 'is_correct' => false],
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