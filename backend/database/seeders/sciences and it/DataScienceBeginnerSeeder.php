<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DataScienceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'data-science')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Data Science Beginner — Fondamentaux de la Data Science',
                'description' => 'Découvrez les concepts essentiels de la Data Science, des données, de l’analyse et du Machine Learning.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la Data Science ?',
                        'explanation' => 'La Data Science combine notamment statistiques, programmation, analyse de données et Machine Learning pour extraire des informations utiles à partir des données.',
                        'choices' => [
                            ['choice_text' => 'Un domaine qui combine données, statistiques, programmation et méthodes analytiques', 'is_correct' => true],
                            ['choice_text' => 'Un système de stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un langage de programmation unique', 'is_correct' => false],
                            ['choice_text' => 'Un protocole réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est généralement la première étape d’un projet Data Science ?',
                        'explanation' => 'Il faut comprendre le problème métier ou analytique avant de choisir les données, modèles et méthodes.',
                        'choices' => [
                            ['choice_text' => 'Comprendre le problème et l’objectif à résoudre', 'is_correct' => true],
                            ['choice_text' => 'Choisir immédiatement un modèle complexe', 'is_correct' => false],
                            ['choice_text' => 'Déployer le modèle en production', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un dataset ?',
                        'explanation' => 'Un dataset est un ensemble organisé de données utilisé pour l’analyse, la visualisation ou l’entraînement de modèles.',
                        'choices' => [
                            ['choice_text' => 'Un ensemble organisé de données', 'is_correct' => true],
                            ['choice_text' => 'Un algorithme statistique', 'is_correct' => false],
                            ['choice_text' => 'Un serveur Web', 'is_correct' => false],
                            ['choice_text' => 'Une bibliothèque logicielle uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable dans un dataset ?',
                        'explanation' => 'Une variable représente une caractéristique ou colonne observée dans les données.',
                        'choices' => [
                            ['choice_text' => 'Une caractéristique ou colonne représentant une information', 'is_correct' => true],
                            ['choice_text' => 'Une ligne obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Un modèle entraîné', 'is_correct' => false],
                            ['choice_text' => 'Une métrique de réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une ligne dans un dataset tabulaire ?',
                        'explanation' => 'Une ligne représente généralement une observation ou un enregistrement individuel.',
                        'choices' => [
                            ['choice_text' => 'Une observation ou un enregistrement', 'is_correct' => true],
                            ['choice_text' => 'Une variable entière', 'is_correct' => false],
                            ['choice_text' => 'Un algorithme', 'is_correct' => false],
                            ['choice_text' => 'Une visualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données est-elle importante ?',
                        'explanation' => 'Des données incorrectes ou incomplètes peuvent produire des analyses et modèles peu fiables.',
                        'choices' => [
                            ['choice_text' => 'Parce que la qualité des données influence la fiabilité des résultats', 'is_correct' => true],
                            ['choice_text' => 'Parce que les données de mauvaise qualité sont toujours inutilisables', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a aucun lien avec les modèles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle remplace les statistiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel langage est très utilisé en Data Science ?',
                        'explanation' => 'Python est largement utilisé en Data Science grâce à son écosystème de bibliothèques pour l’analyse et le Machine Learning.',
                        'choices' => [
                            ['choice_text' => 'Python', 'is_correct' => true],
                            ['choice_text' => 'HTML', 'is_correct' => false],
                            ['choice_text' => 'CSS', 'is_correct' => false],
                            ['choice_text' => 'XML uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la visualisation des données est-elle utile ?',
                        'explanation' => 'Les graphiques permettent d’identifier plus facilement tendances, distributions, anomalies et relations entre variables.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux comprendre les tendances et structures des données', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les statistiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une prédiction dans un projet Data Science ?',
                        'explanation' => 'Une prédiction est une estimation produite à partir d’un modèle et de données d’entrée.',
                        'choices' => [
                            ['choice_text' => 'Une estimation produite par un modèle à partir de données', 'is_correct' => true],
                            ['choice_text' => 'Une valeur nécessairement exacte', 'is_correct' => false],
                            ['choice_text' => 'Une donnée brute non analysée', 'is_correct' => false],
                            ['choice_text' => 'Une opération de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un objectif courant de la Data Science en entreprise ?',
                        'explanation' => 'La Data Science peut aider à prendre de meilleures décisions grâce à l’analyse des données et à la modélisation.',
                        'choices' => [
                            ['choice_text' => 'Aider à prendre des décisions fondées sur les données', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les systèmes informatiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute collecte de données', 'is_correct' => false],
                            ['choice_text' => 'Remplacer automatiquement tous les employés', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Statistiques descriptives',
                'description' => 'Découvrez les notions de moyenne, médiane, dispersion, distributions et statistiques descriptives.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Comment calcule-t-on la moyenne arithmétique ?',
                        'explanation' => 'La moyenne correspond à la somme des valeurs divisée par le nombre de valeurs.',
                        'choices' => [
                            ['choice_text' => 'En divisant la somme des valeurs par leur nombre', 'is_correct' => true],
                            ['choice_text' => 'En prenant uniquement la valeur maximale', 'is_correct' => false],
                            ['choice_text' => 'En prenant la valeur la plus fréquente', 'is_correct' => false],
                            ['choice_text' => 'En soustrayant la plus petite valeur de la plus grande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la médiane ?',
                        'explanation' => 'La médiane est la valeur qui partage les observations ordonnées en deux parties de taille comparable.',
                        'choices' => [
                            ['choice_text' => 'La valeur centrale d’une série ordonnée', 'is_correct' => true],
                            ['choice_text' => 'La plus grande valeur', 'is_correct' => false],
                            ['choice_text' => 'La moyenne de toutes les valeurs', 'is_correct' => false],
                            ['choice_text' => 'La valeur la plus fréquente uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le mode d’une série statistique ?',
                        'explanation' => 'Le mode est la valeur qui apparaît le plus fréquemment dans les données.',
                        'choices' => [
                            ['choice_text' => 'La valeur la plus fréquente', 'is_correct' => true],
                            ['choice_text' => 'La valeur centrale', 'is_correct' => false],
                            ['choice_text' => 'La moyenne', 'is_correct' => false],
                            ['choice_text' => 'La valeur minimale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’étendue ?',
                        'explanation' => 'L’étendue est la différence entre la valeur maximale et la valeur minimale.',
                        'choices' => [
                            ['choice_text' => 'La différence entre la valeur maximale et minimale', 'is_correct' => true],
                            ['choice_text' => 'La moyenne des valeurs', 'is_correct' => false],
                            ['choice_text' => 'La valeur la plus fréquente', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de colonnes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la médiane peut-elle être préférable à la moyenne en présence de valeurs extrêmes ?',
                        'explanation' => 'La médiane est généralement moins sensible aux valeurs extrêmement grandes ou petites que la moyenne.',
                        'choices' => [
                            ['choice_text' => 'Elle est généralement moins influencée par les valeurs extrêmes', 'is_correct' => true],
                            ['choice_text' => 'Elle ignore toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours supérieure à la moyenne', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend pas de l’ordre des données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l’écart-type ?',
                        'explanation' => 'L’écart-type mesure la dispersion des valeurs autour de leur moyenne.',
                        'choices' => [
                            ['choice_text' => 'La dispersion des valeurs autour de la moyenne', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de variables', 'is_correct' => false],
                            ['choice_text' => 'La valeur maximale', 'is_correct' => false],
                            ['choice_text' => 'La fréquence absolue uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les valeurs d’un dataset sont identiques, quel est généralement l’écart-type ?',
                        'explanation' => 'Lorsque toutes les observations sont identiques, elles ne sont pas dispersées autour de la moyenne.',
                        'choices' => [
                            ['choice_text' => 'Zéro', 'is_correct' => true],
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'La moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le maximum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un percentile ?',
                        'explanation' => 'Un percentile indique une position dans une distribution et permet de savoir quel pourcentage d’observations se trouve en dessous d’une valeur.',
                        'choices' => [
                            ['choice_text' => 'Une valeur indiquant une position relative dans une distribution', 'is_correct' => true],
                            ['choice_text' => 'Une moyenne toujours', 'is_correct' => false],
                            ['choice_text' => 'Un type de modèle ML', 'is_correct' => false],
                            ['choice_text' => 'Une valeur nécessairement maximale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est particulièrement adapté pour visualiser la distribution d’une variable numérique ?',
                        'explanation' => 'L’histogramme permet de visualiser la fréquence ou densité des valeurs par intervalles.',
                        'choices' => [
                            ['choice_text' => 'Histogramme', 'is_correct' => true],
                            ['choice_text' => 'Diagramme réseau', 'is_correct' => false],
                            ['choice_text' => 'Carte IP', 'is_correct' => false],
                            ['choice_text' => 'Tableau de permissions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une distribution fortement asymétrique ?',
                        'explanation' => 'Une asymétrie importante signifie que les valeurs ne sont pas réparties de manière équilibrée autour du centre.',
                        'choices' => [
                            ['choice_text' => 'Les observations sont réparties de manière déséquilibrée autour du centre', 'is_correct' => true],
                            ['choice_text' => 'Toutes les valeurs sont identiques', 'is_correct' => false],
                            ['choice_text' => 'La moyenne est nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le dataset ne contient aucune information', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Exploration et visualisation des données',
                'description' => 'Apprenez à explorer un dataset et à choisir des visualisations adaptées.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel graphique est adapté pour comparer plusieurs catégories ?',
                        'explanation' => 'Un diagramme en barres permet de comparer facilement des valeurs associées à différentes catégories.',
                        'choices' => [
                            ['choice_text' => 'Diagramme en barres', 'is_correct' => true],
                            ['choice_text' => 'Histogramme de réseau uniquement', 'is_correct' => false],
                            ['choice_text' => 'Tableau de routage', 'is_correct' => false],
                            ['choice_text' => 'Graphique de processus uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique permet d’étudier la relation entre deux variables numériques ?',
                        'explanation' => 'Un scatter plot représente les observations sous forme de points selon deux axes numériques.',
                        'choices' => [
                            ['choice_text' => 'Nuage de points', 'is_correct' => true],
                            ['choice_text' => 'Diagramme en barres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Camembert', 'is_correct' => false],
                            ['choice_text' => 'Table de vérité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif correspond à l’EDA ?',
                        'explanation' => 'L’Exploratory Data Analysis cherche à comprendre les distributions, relations, anomalies et problèmes de qualité avant la modélisation.',
                        'choices' => [
                            ['choice_text' => 'Explorer les structures, tendances, anomalies et relations des données', 'is_correct' => true],
                            ['choice_text' => 'Déployer directement un modèle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les variables sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Garantir une causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rechercher les valeurs manquantes pendant l’exploration ?',
                        'explanation' => 'Les valeurs manquantes peuvent révéler des problèmes de collecte ou nécessiter une stratégie de traitement spécifique.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre leur fréquence, leur distribution et leur impact', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’il n’y en aura jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour les convertir automatiquement en zéros', 'is_correct' => false],
                            ['choice_text' => 'Pour les supprimer sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi identifier les valeurs aberrantes peut-il être important ?',
                        'explanation' => 'Certaines valeurs extrêmes sont des erreurs, tandis que d’autres représentent des cas réels importants.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si elles correspondent à des erreurs ou à des phénomènes réels', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les valeurs extrêmes automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une distribution normale', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les statistiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est généralement adapté à l’évolution d’une variable dans le temps ?',
                        'explanation' => 'Un graphique en ligne est bien adapté aux séries temporelles pour visualiser les tendances et changements.',
                        'choices' => [
                            ['choice_text' => 'Graphique en ligne', 'is_correct' => true],
                            ['choice_text' => 'Nuage de points uniquement', 'is_correct' => false],
                            ['choice_text' => 'Camembert uniquement', 'is_correct' => false],
                            ['choice_text' => 'Diagramme de réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir une visualisation adaptée au type de données ?',
                        'explanation' => 'Chaque graphique met en évidence certains aspects. Un mauvais choix peut masquer les informations utiles.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque visualisation met en évidence des propriétés différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul graphique fonctionne pour toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les graphiques remplacent les données', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une visualisation garantit toujours une interprétation correcte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est particulièrement utile pour visualiser la relation entre deux variables numériques et détecter des groupes ?',
                        'explanation' => 'Le nuage de points permet de voir les regroupements, tendances et relations possibles entre deux variables.',
                        'choices' => [
                            ['choice_text' => 'Nuage de points', 'is_correct' => true],
                            ['choice_text' => 'Diagramme circulaire', 'is_correct' => false],
                            ['choice_text' => 'Tableau de permissions', 'is_correct' => false],
                            ['choice_text' => 'Histogramme réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi calculer des statistiques descriptives avant de modéliser ?',
                        'explanation' => 'Elles permettent d’identifier rapidement les échelles, distributions, anomalies et problèmes potentiels.',
                        'choices' => [
                            ['choice_text' => 'Pour obtenir une première compréhension de la structure du dataset', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir le meilleur modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la validation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement le bruit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’on interprète une corrélation comme une causalité ?',
                        'explanation' => 'Deux variables peuvent évoluer ensemble sans que l’une cause l’autre. Une troisième variable ou le hasard peuvent expliquer la relation.',
                        'choices' => [
                            ['choice_text' => 'Conclure à tort qu’une variable provoque l’autre', 'is_correct' => true],
                            ['choice_text' => 'Garantir une meilleure prédiction', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute relation entre variables', 'is_correct' => false],
                            ['choice_text' => 'Transformer automatiquement les données en séries temporelles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Probabilités et distributions',
                'description' => 'Découvrez les bases des probabilités, variables aléatoires et distributions utilisées en Data Science.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur minimale d’une probabilité ?',
                        'explanation' => 'Une probabilité est toujours comprise entre 0 et 1 inclus.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '-100', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale d’une probabilité ?',
                        'explanation' => 'Une probabilité ne peut pas dépasser 1, ce qui correspond à 100 %.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une probabilité égale à 0 ?',
                        'explanation' => 'Dans le cadre d’un événement modélisé avec probabilité 0, l’événement est considéré comme impossible dans ce modèle.',
                        'choices' => [
                            ['choice_text' => 'L’événement est considéré comme impossible', 'is_correct' => true],
                            ['choice_text' => 'L’événement est certain', 'is_correct' => false],
                            ['choice_text' => 'L’événement est deux fois plus probable', 'is_correct' => false],
                            ['choice_text' => 'La probabilité est inconnue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une probabilité égale à 1 ?',
                        'explanation' => 'Une probabilité de 1 correspond à un événement certain dans le modèle.',
                        'choices' => [
                            ['choice_text' => 'L’événement est certain', 'is_correct' => true],
                            ['choice_text' => 'L’événement est impossible', 'is_correct' => false],
                            ['choice_text' => 'La donnée est manquante', 'is_correct' => false],
                            ['choice_text' => 'La moyenne est nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distribution est célèbre pour sa forme en cloche ?',
                        'explanation' => 'La distribution normale est souvent représentée par une courbe symétrique en forme de cloche.',
                        'choices' => [
                            ['choice_text' => 'Distribution normale', 'is_correct' => true],
                            ['choice_text' => 'Distribution uniforme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Distribution binaire', 'is_correct' => false],
                            ['choice_text' => 'Distribution réseau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une distribution normale parfaitement symétrique, que peut-on observer concernant moyenne et médiane ?',
                        'explanation' => 'Dans une distribution normale symétrique, moyenne, médiane et mode coïncident au centre.',
                        'choices' => [
                            ['choice_text' => 'Elles coïncident au centre de la distribution', 'is_correct' => true],
                            ['choice_text' => 'La moyenne est toujours zéro', 'is_correct' => false],
                            ['choice_text' => 'La médiane est toujours supérieure', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours différentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable aléatoire ?',
                        'explanation' => 'Une variable aléatoire associe une valeur numérique à l’issue d’une expérience ou d’un phénomène aléatoire.',
                        'choices' => [
                            ['choice_text' => 'Une variable dont la valeur dépend du résultat d’un phénomène aléatoire', 'is_correct' => true],
                            ['choice_text' => 'Une variable toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Une variable obligatoirement qualitative', 'is_correct' => false],
                            ['choice_text' => 'Une variable qui ne possède jamais de distribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l’espérance d’une variable aléatoire ?',
                        'explanation' => 'L’espérance représente la valeur moyenne théorique d’une variable aléatoire selon sa distribution.',
                        'choices' => [
                            ['choice_text' => 'Sa valeur moyenne théorique', 'is_correct' => true],
                            ['choice_text' => 'Sa valeur maximale obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Sa médiane uniquement', 'is_correct' => false],
                            ['choice_text' => 'Son nombre de catégories', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel concept décrit l’incertitude autour d’une estimation ?',
                        'explanation' => 'La notion d’incertitude permet d’exprimer qu’une estimation ou mesure n’est pas parfaitement certaine.',
                        'choices' => [
                            ['choice_text' => 'L’incertitude', 'is_correct' => true],
                            ['choice_text' => 'La compression', 'is_correct' => false],
                            ['choice_text' => 'Le stockage', 'is_correct' => false],
                            ['choice_text' => 'Le routage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les distributions sont-elles importantes en Data Science ?',
                        'explanation' => 'Elles permettent de comprendre comment les observations sont réparties et d’appliquer des méthodes statistiques adaptées.',
                        'choices' => [
                            ['choice_text' => 'Elles décrivent la manière dont les valeurs sont réparties', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent les datasets', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent la causalité', 'is_correct' => false],
                            ['choice_text' => 'Elles créent automatiquement des modèles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Corrélation et analyse des relations',
                'description' => 'Comprenez la corrélation, les relations entre variables et les précautions d’interprétation.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Que mesure généralement un coefficient de corrélation ?',
                        'explanation' => 'Il mesure la force et la direction d’une relation statistique entre deux variables selon le coefficient utilisé.',
                        'choices' => [
                            ['choice_text' => 'La force et la direction d’une relation entre deux variables', 'is_correct' => true],
                            ['choice_text' => 'La causalité directe entre deux variables', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de lignes du dataset', 'is_correct' => false],
                            ['choice_text' => 'La taille du modèle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie approximativement une corrélation de +1 ?',
                        'explanation' => 'Une corrélation de +1 indique une relation linéaire positive parfaite dans le cadre de cette mesure.',
                        'choices' => [
                            ['choice_text' => 'Une relation linéaire positive parfaite', 'is_correct' => true],
                            ['choice_text' => 'Aucune relation', 'is_correct' => false],
                            ['choice_text' => 'Une relation négative parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une causalité certaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie approximativement une corrélation de -1 ?',
                        'explanation' => 'Une corrélation de -1 indique une relation linéaire négative parfaite.',
                        'choices' => [
                            ['choice_text' => 'Une relation linéaire négative parfaite', 'is_correct' => true],
                            ['choice_text' => 'Une relation positive parfaite', 'is_correct' => false],
                            ['choice_text' => 'Aucune relation', 'is_correct' => false],
                            ['choice_text' => 'Une causalité certaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que suggère une corrélation proche de 0 ?',
                        'explanation' => 'Elle indique généralement une faible relation linéaire, mais ne prouve pas l’absence de toute relation non linéaire.',
                        'choices' => [
                            ['choice_text' => 'Une faible relation linéaire', 'is_correct' => true],
                            ['choice_text' => 'Une causalité nulle', 'is_correct' => false],
                            ['choice_text' => 'Une relation positive parfaite', 'is_correct' => false],
                            ['choice_text' => 'Une relation négative parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée ne prouve-t-elle pas la causalité ?',
                        'explanation' => 'Une relation peut être due à une troisième variable ou à une autre structure des données.',
                        'choices' => [
                            ['choice_text' => 'Une relation observée peut avoir une autre cause que l’effet direct entre les deux variables', 'is_correct' => true],
                            ['choice_text' => 'La corrélation ne peut jamais être calculée', 'is_correct' => false],
                            ['choice_text' => 'Toutes les corrélations sont fausses', 'is_correct' => false],
                            ['choice_text' => 'La causalité est toujours mesurée directement par la corrélation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est souvent utilisé pour explorer une corrélation entre deux variables numériques ?',
                        'explanation' => 'Le nuage de points permet de visualiser la direction, dispersion et forme d’une relation possible.',
                        'choices' => [
                            ['choice_text' => 'Nuage de points', 'is_correct' => true],
                            ['choice_text' => 'Diagramme circulaire', 'is_correct' => false],
                            ['choice_text' => 'Tableau de permissions', 'is_correct' => false],
                            ['choice_text' => 'Diagramme réseau uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un seul point extrême influence fortement une corrélation ?',
                        'explanation' => 'Un outlier peut modifier fortement la valeur observée et donner une impression trompeuse de relation.',
                        'choices' => [
                            ['choice_text' => 'La corrélation observée peut être artificiellement renforcée ou réduite', 'is_correct' => true],
                            ['choice_text' => 'La corrélation devient automatiquement causale', 'is_correct' => false],
                            ['choice_text' => 'Le dataset devient vide', 'is_correct' => false],
                            ['choice_text' => 'Toutes les variables deviennent indépendantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une corrélation positive signifie généralement que lorsque l’une des variables augmente, l’autre :',
                        'explanation' => 'Une corrélation positive indique que les valeurs tendent à évoluer dans la même direction, sans impliquer nécessairement une causalité.',
                        'choices' => [
                            ['choice_text' => 'A tendance à augmenter également', 'is_correct' => true],
                            ['choice_text' => 'A tendance à diminuer obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relation non linéaire peut-elle échapper à une corrélation linéaire simple ?',
                        'explanation' => 'Certains coefficients mesurent principalement des relations linéaires et peuvent donc donner une valeur faible malgré une relation structurée non linéaire.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une relation forte peut avoir une forme autre que linéaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que les variables non linéaires ne peuvent jamais être mesurées', 'is_correct' => false],
                            ['choice_text' => 'Parce que la corrélation devient toujours 1', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données sont obligatoirement indépendantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important avant d’interpréter une corrélation ?',
                        'explanation' => 'Il faut regarder les données, les graphiques, les outliers et le contexte plutôt que se baser uniquement sur une valeur numérique.',
                        'choices' => [
                            ['choice_text' => 'Examiner les données et le contexte avant de tirer une conclusion', 'is_correct' => true],
                            ['choice_text' => 'Considérer la corrélation comme une preuve de causalité', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les valeurs extrêmes', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement la moyenne', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Prétraitement des données',
                'description' => 'Découvrez les étapes fondamentales de préparation des données pour l’analyse et la modélisation.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi traiter les valeurs manquantes ?',
                        'explanation' => 'Les valeurs manquantes peuvent empêcher certains algorithmes de fonctionner ou introduire des problèmes dans l’analyse.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’elles perturbent l’analyse ou certains modèles', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une précision de 100 %', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les lignes du dataset', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les variables catégorielles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle stratégie simple peut être utilisée pour remplacer certaines valeurs manquantes numériques ?',
                        'explanation' => 'Selon le contexte, la moyenne ou la médiane peuvent être utilisées comme stratégie d’imputation.',
                        'choices' => [
                            ['choice_text' => 'Utiliser une statistique comme la moyenne ou la médiane', 'is_correct' => true],
                            ['choice_text' => 'Remplacer toujours par le maximum', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toujours par du texte', 'is_correct' => false],
                            ['choice_text' => 'Dupliquer toutes les lignes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi standardiser certaines variables avant certains modèles ?',
                        'explanation' => 'Des variables avec des échelles très différentes peuvent influencer de façon disproportionnée certains algorithmes basés sur les distances ou l’optimisation.',
                        'choices' => [
                            ['choice_text' => 'Mettre les variables sur des échelles comparables', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les catégories', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement des labels', 'is_correct' => false],
                            ['choice_text' => 'Garantir une meilleure précision dans tous les cas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable catégorielle ?',
                        'explanation' => 'Elle représente une catégorie comme une couleur, une ville ou un type de produit.',
                        'choices' => [
                            ['choice_text' => 'Une variable dont les valeurs représentent des catégories', 'is_correct' => true],
                            ['choice_text' => 'Une variable obligatoirement continue', 'is_correct' => false],
                            ['choice_text' => 'Une métrique', 'is_correct' => false],
                            ['choice_text' => 'Une erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le one-hot encoding ?',
                        'explanation' => 'Il transforme une variable catégorielle en plusieurs indicateurs binaires utilisables par de nombreux modèles.',
                        'choices' => [
                            ['choice_text' => 'Transformer des catégories en indicateurs numériques binaires', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les catégories', 'is_correct' => false],
                            ['choice_text' => 'Créer une variable cible', 'is_correct' => false],
                            ['choice_text' => 'Transformer des nombres en images', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il détecter les doublons ?',
                        'explanation' => 'Des doublons peuvent surreprésenter certaines observations et influencer les analyses ou modèles.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de compter plusieurs fois les mêmes observations', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la taille du dataset', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que toutes les données sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Pour créer de nouvelles variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les valeurs aberrantes avant de les supprimer ?',
                        'explanation' => 'Une valeur extrême peut être une erreur de mesure mais aussi représenter un phénomène réel important.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une valeur extrême peut être réelle et informative', 'is_correct' => true],
                            ['choice_text' => 'Parce que les outliers sont toujours nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les outliers ne peuvent jamais être supprimés', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les valeurs doivent être identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but d’une transformation logarithmique dans certains datasets ?',
                        'explanation' => 'Elle peut réduire l’asymétrie d’une variable et comprimer les grandes valeurs.',
                        'choices' => [
                            ['choice_text' => 'Réduire certaines fortes asymétries et comprimer l’échelle des grandes valeurs', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des classes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les valeurs faibles', 'is_correct' => false],
                            ['choice_text' => 'Garantir une distribution parfaitement normale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer les données d’entraînement et de test ?',
                        'explanation' => 'Le test doit représenter des données non utilisées pour ajuster le modèle afin d’estimer sa capacité à généraliser.',
                        'choices' => [
                            ['choice_text' => 'Évaluer le modèle sur des observations qui n’ont pas servi à son apprentissage', 'is_correct' => true],
                            ['choice_text' => 'Augmenter artificiellement la précision', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le besoin de validation', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout preprocessing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une fuite de données ?',
                        'explanation' => 'Une fuite survient lorsqu’une information qui ne devrait pas être disponible au moment de la prédiction influence l’apprentissage ou l’évaluation.',
                        'choices' => [
                            ['choice_text' => 'L’utilisation involontaire d’informations qui ne devraient pas être accessibles au modèle', 'is_correct' => true],
                            ['choice_text' => 'Une erreur de stockage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une valeur manquante', 'is_correct' => false],
                            ['choice_text' => 'Une visualisation incorrecte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Machine Learning appliqué',
                'description' => 'Découvrez les principaux types de problèmes de Machine Learning et leurs applications en Data Science.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quel type de problème consiste à prédire une catégorie ?',
                        'explanation' => 'La classification attribue généralement une observation à une catégorie parmi plusieurs classes possibles.',
                        'choices' => [
                            ['choice_text' => 'Classification', 'is_correct' => true],
                            ['choice_text' => 'Régression', 'is_correct' => false],
                            ['choice_text' => 'Clustering uniquement', 'is_correct' => false],
                            ['choice_text' => 'Réduction dimensionnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type de problème consiste à prédire une valeur numérique continue ?',
                        'explanation' => 'La régression vise à prédire une grandeur numérique comme un prix ou une température.',
                        'choices' => [
                            ['choice_text' => 'Régression', 'is_correct' => true],
                            ['choice_text' => 'Classification', 'is_correct' => false],
                            ['choice_text' => 'Clustering', 'is_correct' => false],
                            ['choice_text' => 'Encodage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme est couramment utilisé pour regrouper des observations similaires ?',
                        'explanation' => 'K-Means est un algorithme classique de clustering non supervisé.',
                        'choices' => [
                            ['choice_text' => 'K-Means', 'is_correct' => true],
                            ['choice_text' => 'Régression linéaire', 'is_correct' => false],
                            ['choice_text' => 'Régression logistique', 'is_correct' => false],
                            ['choice_text' => 'Naive Bayes uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un jeu de validation ?',
                        'explanation' => 'Le jeu de validation sert notamment à comparer des configurations et régler certains hyperparamètres pendant le développement.',
                        'choices' => [
                            ['choice_text' => 'Évaluer des configurations pendant le développement du modèle', 'is_correct' => true],
                            ['choice_text' => 'Remplacer systématiquement le jeu de test', 'is_correct' => false],
                            ['choice_text' => 'Créer les données initiales', 'is_correct' => false],
                            ['choice_text' => 'Garantir une précision de 100 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle peut-il avoir une excellente performance sur le train et une mauvaise performance sur le test ?',
                        'explanation' => 'Le modèle peut avoir mémorisé les données d’entraînement au lieu d’apprendre des relations généralisables.',
                        'choices' => [
                            ['choice_text' => 'Il peut être en situation de surapprentissage', 'is_correct' => true],
                            ['choice_text' => 'Il a forcément trop peu de données', 'is_correct' => false],
                            ['choice_text' => 'Le test contient toujours des erreurs', 'is_correct' => false],
                            ['choice_text' => 'Le modèle a nécessairement une mauvaise architecture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel algorithme est particulièrement adapté à un problème simple de régression linéaire ?',
                        'explanation' => 'La régression linéaire modélise une relation approximativement linéaire entre les variables d’entrée et la cible.',
                        'choices' => [
                            ['choice_text' => 'Régression linéaire', 'is_correct' => true],
                            ['choice_text' => 'K-Means', 'is_correct' => false],
                            ['choice_text' => 'Clustering hiérarchique', 'is_correct' => false],
                            ['choice_text' => 'PCA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel modèle est souvent utilisé pour une classification simple et interprétable ?',
                        'explanation' => 'Un arbre de décision peut représenter les règles de décision sous forme d’une structure facilement interprétable.',
                        'choices' => [
                            ['choice_text' => 'Arbre de décision', 'is_correct' => true],
                            ['choice_text' => 'PCA', 'is_correct' => false],
                            ['choice_text' => 'K-Means', 'is_correct' => false],
                            ['choice_text' => 'Régression linéaire uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt principal de Random Forest ?',
                        'explanation' => 'Random Forest agrège plusieurs arbres et peut offrir une bonne robustesse sur de nombreuses tâches tabulaires.',
                        'choices' => [
                            ['choice_text' => 'Combiner plusieurs arbres pour obtenir des prédictions plus robustes', 'is_correct' => true],
                            ['choice_text' => 'Éliminer toutes les features', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le dataset par un seul exemple', 'is_correct' => false],
                            ['choice_text' => 'Garantir aucune erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la cross-validation est-elle utile ?',
                        'explanation' => 'Elle permet d’évaluer un modèle sur plusieurs partitions des données afin d’obtenir une estimation plus robuste.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la robustesse du modèle sur plusieurs partitions', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement des données nouvelles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les classes minoritaires', 'is_correct' => false],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs modèles avant de choisir le modèle final ?',
                        'explanation' => 'Différents modèles peuvent offrir des compromis différents en performance, interprétabilité, coût et complexité.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer leurs performances et compromis dans les mêmes conditions', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’ils produisent tous la même prédiction', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données inutiles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — SQL et manipulation des données',
                'description' => 'Découvrez les bases de SQL et les opérations courantes de manipulation des données.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle commande SQL permet de récupérer des données ?',
                        'explanation' => 'SELECT est utilisée pour sélectionner des colonnes ou lignes dans une table.',
                        'choices' => [
                            ['choice_text' => 'SELECT', 'is_correct' => true],
                            ['choice_text' => 'FETCHALL uniquement', 'is_correct' => false],
                            ['choice_text' => 'READ', 'is_correct' => false],
                            ['choice_text' => 'GETDATA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle clause SQL permet de filtrer les lignes ?',
                        'explanation' => 'WHERE permet de sélectionner les lignes qui satisfont une condition.',
                        'choices' => [
                            ['choice_text' => 'WHERE', 'is_correct' => true],
                            ['choice_text' => 'GROUP', 'is_correct' => false],
                            ['choice_text' => 'FILTERBY', 'is_correct' => false],
                            ['choice_text' => 'HAVING uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle clause permet de trier les résultats ?',
                        'explanation' => 'ORDER BY permet de trier les résultats selon une ou plusieurs colonnes.',
                        'choices' => [
                            ['choice_text' => 'ORDER BY', 'is_correct' => true],
                            ['choice_text' => 'SORT TABLE', 'is_correct' => false],
                            ['choice_text' => 'GROUP BY', 'is_correct' => false],
                            ['choice_text' => 'ARRANGE', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert GROUP BY ?',
                        'explanation' => 'GROUP BY permet de regrouper les lignes selon une ou plusieurs colonnes afin d’effectuer des agrégations.',
                        'choices' => [
                            ['choice_text' => 'Regrouper des lignes pour effectuer des agrégations', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les colonnes', 'is_correct' => false],
                            ['choice_text' => 'Créer une base de données', 'is_correct' => false],
                            ['choice_text' => 'Trier les résultats uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction SQL calcule généralement une moyenne ?',
                        'explanation' => 'AVG calcule la moyenne des valeurs numériques.',
                        'choices' => [
                            ['choice_text' => 'AVG()', 'is_correct' => true],
                            ['choice_text' => 'SUMMAX()', 'is_correct' => false],
                            ['choice_text' => 'MEANROW()', 'is_correct' => false],
                            ['choice_text' => 'MID()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction compte généralement le nombre de lignes ?',
                        'explanation' => 'COUNT permet de compter les lignes ou les valeurs selon son utilisation.',
                        'choices' => [
                            ['choice_text' => 'COUNT()', 'is_correct' => true],
                            ['choice_text' => 'TOTALROWS()', 'is_correct' => false],
                            ['choice_text' => 'ROWSUM()', 'is_correct' => false],
                            ['choice_text' => 'NUMBER()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mot-clé SQL permet de joindre deux tables ?',
                        'explanation' => 'JOIN permet de combiner des lignes provenant de plusieurs tables selon une condition de correspondance.',
                        'choices' => [
                            ['choice_text' => 'JOIN', 'is_correct' => true],
                            ['choice_text' => 'MERGEONLY', 'is_correct' => false],
                            ['choice_text' => 'CONNECTTABLE', 'is_correct' => false],
                            ['choice_text' => 'ATTACH', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une clé primaire ?',
                        'explanation' => 'Une clé primaire identifie de manière unique une ligne dans une table.',
                        'choices' => [
                            ['choice_text' => 'Identifier de manière unique une ligne', 'is_correct' => true],
                            ['choice_text' => 'Trier automatiquement toutes les données', 'is_correct' => false],
                            ['choice_text' => 'Chiffrer une table', 'is_correct' => false],
                            ['choice_text' => 'Créer une visualisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle clause permet généralement de filtrer les résultats après une agrégation ?',
                        'explanation' => 'HAVING permet de filtrer les groupes produits par GROUP BY.',
                        'choices' => [
                            ['choice_text' => 'HAVING', 'is_correct' => true],
                            ['choice_text' => 'AFTER WHERE', 'is_correct' => false],
                            ['choice_text' => 'FILTER GROUP', 'is_correct' => false],
                            ['choice_text' => 'GROUP WHERE', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi SQL est-il important en Data Science ?',
                        'explanation' => 'Une grande partie des données d’entreprise se trouve dans des bases relationnelles ou systèmes accessibles via SQL.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il permet d’interroger et préparer efficacement des données stockées dans des bases', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il remplace tous les modèles ML', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est uniquement destiné au réseau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il garantit la qualité des données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Pandas et Python',
                'description' => 'Maîtrisez les bases de Python et Pandas pour manipuler les datasets.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Quelle bibliothèque Python est particulièrement utilisée pour manipuler des données tabulaires ?',
                        'explanation' => 'Pandas fournit notamment DataFrame et Series pour charger, transformer et analyser des données.',
                        'choices' => [
                            ['choice_text' => 'Pandas', 'is_correct' => true],
                            ['choice_text' => 'Flask uniquement', 'is_correct' => false],
                            ['choice_text' => 'Requests uniquement', 'is_correct' => false],
                            ['choice_text' => 'Tkinter uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objet Pandas représente généralement un tableau à deux dimensions ?',
                        'explanation' => 'Un DataFrame représente des données organisées en lignes et colonnes.',
                        'choices' => [
                            ['choice_text' => 'DataFrame', 'is_correct' => true],
                            ['choice_text' => 'SeriesMatrix uniquement', 'is_correct' => false],
                            ['choice_text' => 'TensorFrame', 'is_correct' => false],
                            ['choice_text' => 'TablePython', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objet Pandas représente généralement une seule colonne ?',
                        'explanation' => 'Une Series représente une séquence étiquetée de données.',
                        'choices' => [
                            ['choice_text' => 'Series', 'is_correct' => true],
                            ['choice_text' => 'ColumnDB', 'is_correct' => false],
                            ['choice_text' => 'VectorSQL', 'is_correct' => false],
                            ['choice_text' => 'RowSet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode permet souvent d’afficher les premières lignes d’un DataFrame ?',
                        'explanation' => 'head() affiche les premières lignes et est utile pour inspecter rapidement la structure d’un dataset.',
                        'choices' => [
                            ['choice_text' => 'head()', 'is_correct' => true],
                            ['choice_text' => 'firstrows()', 'is_correct' => false],
                            ['choice_text' => 'top()', 'is_correct' => false],
                            ['choice_text' => 'previewtable()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode donne souvent des statistiques descriptives rapides ?',
                        'explanation' => 'describe() fournit des statistiques comme moyenne, écart-type, quartiles et extrêmes pour les colonnes numériques.',
                        'choices' => [
                            ['choice_text' => 'describe()', 'is_correct' => true],
                            ['choice_text' => 'statsall()', 'is_correct' => false],
                            ['choice_text' => 'summarydata()', 'is_correct' => false],
                            ['choice_text' => 'analyze()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement isna() ou isnull() dans Pandas ?',
                        'explanation' => 'Ces méthodes permettent d’identifier les valeurs manquantes.',
                        'choices' => [
                            ['choice_text' => 'Détecter les valeurs manquantes', 'is_correct' => true],
                            ['choice_text' => 'Trier les données', 'is_correct' => false],
                            ['choice_text' => 'Créer une régression', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement toutes les colonnes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode permet de supprimer des lignes contenant des valeurs manquantes ?',
                        'explanation' => 'dropna() peut supprimer les lignes ou colonnes contenant des valeurs manquantes selon les paramètres utilisés.',
                        'choices' => [
                            ['choice_text' => 'dropna()', 'is_correct' => true],
                            ['choice_text' => 'removeNullsOnly()', 'is_correct' => false],
                            ['choice_text' => 'cleanna()', 'is_correct' => false],
                            ['choice_text' => 'deleteMissing()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode permet de remplacer des valeurs dans un DataFrame ?',
                        'explanation' => 'replace() permet de remplacer certaines valeurs selon différentes règles.',
                        'choices' => [
                            ['choice_text' => 'replace()', 'is_correct' => true],
                            ['choice_text' => 'changeDataOnly()', 'is_correct' => false],
                            ['choice_text' => 'swap()', 'is_correct' => false],
                            ['choice_text' => 'rewrite()', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser loc ou iloc dans Pandas ?',
                        'explanation' => 'loc permet notamment une sélection par labels tandis que iloc permet une sélection par positions.',
                        'choices' => [
                            ['choice_text' => 'Sélectionner des lignes ou colonnes selon des labels ou positions', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un modèle ML', 'is_correct' => false],
                            ['choice_text' => 'Calculer une corrélation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les valeurs manquantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi Pandas est-il populaire en Data Science ?',
                        'explanation' => 'Pandas facilite le nettoyage, filtrage, agrégation, fusion et exploration de données tabulaires.',
                        'choices' => [
                            ['choice_text' => 'Il fournit de nombreux outils pratiques pour manipuler et analyser des données', 'is_correct' => true],
                            ['choice_text' => 'Il remplace toutes les bases de données', 'is_correct' => false],
                            ['choice_text' => 'Il garantit la qualité des données', 'is_correct' => false],
                            ['choice_text' => 'Il est uniquement utilisé pour créer des interfaces graphiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Data Science Beginner — Communication des résultats',
                'description' => 'Apprenez à présenter les analyses Data Science clairement et à distinguer faits, hypothèses et conclusions.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'passing_score' => 80,
                'total_marks' => 10,
                'is_active' => true,
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il adapter une présentation Data Science au public cible ?',
                        'explanation' => 'Les besoins d’un dirigeant, d’un analyste et d’un ingénieur sont différents en termes de détail technique et de décision attendue.',
                        'choices' => [
                            ['choice_text' => 'Pour communiquer les informations pertinentes au niveau de compréhension du public', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les détails importants dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toutes les présentations identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les graphiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il indiquer les limites d’une analyse ?',
                        'explanation' => 'Une analyse peut dépendre des données, hypothèses et méthodes utilisées. Les limites évitent les interprétations excessives.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de présenter les résultats comme plus certains qu’ils ne le sont', 'is_correct' => true],
                            ['choice_text' => 'Pour diminuer automatiquement la qualité de l’analyse', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute prise de décision', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être présent dans une bonne visualisation ?',
                        'explanation' => 'Un titre et des axes clairement identifiés permettent de comprendre rapidement ce que représente le graphique.',
                        'choices' => [
                            ['choice_text' => 'Des titres, axes et unités clairement compréhensibles', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des couleurs', 'is_correct' => false],
                            ['choice_text' => 'Des données sans contexte', 'is_correct' => false],
                            ['choice_text' => 'Des annotations aléatoires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter de surcharger un graphique ?',
                        'explanation' => 'Un graphique trop complexe peut rendre l’information difficile à lire et détourner l’attention du message principal.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer la lisibilité et faire ressortir le message important', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les données utiles', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l’analyse moins précise', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute comparaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer corrélation et causalité dans une présentation ?',
                        'explanation' => 'Présenter une corrélation comme une causalité peut conduire les décideurs à tirer des conclusions incorrectes.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de transformer une association observée en conclusion causale non justifiée', 'is_correct' => true],
                            ['choice_text' => 'Parce que la corrélation est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que la causalité est automatiquement prouvée', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un KPI ?',
                        'explanation' => 'Un KPI est un indicateur utilisé pour suivre une performance ou un objectif important.',
                        'choices' => [
                            ['choice_text' => 'Mesurer un aspect important de la performance', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un modèle', 'is_correct' => false],
                            ['choice_text' => 'Stocker les données', 'is_correct' => false],
                            ['choice_text' => 'Garantir la causalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une moyenne seule peut-elle être insuffisante pour décrire des données ?',
                        'explanation' => 'La moyenne ne montre ni la dispersion, ni les valeurs extrêmes, ni la forme de la distribution.',
                        'choices' => [
                            ['choice_text' => 'Elle ne décrit pas à elle seule la dispersion et la distribution', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais être calculée', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace tous les graphiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi indiquer la source des données est-il utile ?',
                        'explanation' => 'La source apporte de la traçabilité et permet de comprendre l’origine et le contexte des informations utilisées.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité et renforcer la confiance dans l’analyse', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement que les données sont correctes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute analyse future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données sensibles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif d’une présentation analytique destinée à un décideur ?',
                        'explanation' => 'Une bonne présentation relie les résultats à une décision ou action possible plutôt que de montrer uniquement des détails techniques.',
                        'choices' => [
                            ['choice_text' => 'Aider à prendre une décision éclairée', 'is_correct' => true],
                            ['choice_text' => 'Montrer le maximum de graphiques', 'is_correct' => false],
                            ['choice_text' => 'Présenter tout le code source', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute conclusion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il expliciter les hypothèses d’une analyse ?',
                        'explanation' => 'Les hypothèses influencent la manière dont les résultats doivent être interprétés et peuvent limiter leur validité.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre dans quelles conditions les résultats sont valides', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les hypothèses sont toutes vraies', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la collecte de données', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre l’analyse automatiquement causale', 'is_correct' => false],
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