<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();

        $quizzes = [

            // =====================================================
            // QUIZ 1 — CONCEPTION ET ARCHITECTURE DES SYSTÈMES
            // =====================================================
            [
                'title' => 'Conception et architecture des systèmes',
                'description' => 'Quiz professionnel sur la conception de systèmes, l’architecture logicielle, le découplage et la scalabilité.',
                'difficulty' => 'Professional',

                'questions' => [

                    [
                        'question' => 'Une application doit supporter une forte augmentation du nombre d’utilisateurs sans augmenter considérablement la capacité d’un seul serveur. Quelle approche est généralement la plus adaptée ?',
                        'explanation' => 'La scalabilité horizontale consiste à ajouter plusieurs instances du service plutôt qu’à dépendre d’un seul serveur plus puissant.',
                        'choices' => [
                            ['text' => 'Ajouter plusieurs instances de l’application derrière un Load Balancer', 'correct' => true],
                            ['text' => 'Augmenter uniquement la taille du disque', 'correct' => false],
                            ['text' => 'Ajouter davantage de commentaires dans le code', 'correct' => false],
                            ['text' => 'Supprimer les tests automatisés', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal avantage d’un Load Balancer dans une architecture distribuée ?',
                        'explanation' => 'Un Load Balancer distribue les requêtes entre plusieurs instances et peut également contribuer à la disponibilité du service.',
                        'choices' => [
                            ['text' => 'Distribuer les requêtes entre plusieurs instances', 'correct' => true],
                            ['text' => 'Remplacer la base de données', 'correct' => false],
                            ['text' => 'Compiler automatiquement le code', 'correct' => false],
                            ['text' => 'Chiffrer toutes les données stockées', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une fonctionnalité de recherche est devenue très lente car elle effectue plusieurs opérations coûteuses. Quelle première démarche est la plus professionnelle ?',
                        'explanation' => 'Avant d’optimiser, il faut mesurer et identifier le véritable goulot d’étranglement grâce au profiling, aux logs ou à l’analyse des requêtes.',
                        'choices' => [
                            ['text' => 'Mesurer les performances et identifier le goulot d’étranglement', 'correct' => true],
                            ['text' => 'Réécrire immédiatement toute l’application', 'correct' => false],
                            ['text' => 'Ajouter aléatoirement du caching', 'correct' => false],
                            ['text' => 'Supprimer la fonctionnalité', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une architecture faiblement couplée facilite-t-elle l’évolution d’une application ?',
                        'explanation' => 'Lorsque les composants dépendent peu des détails internes les uns des autres, une modification peut être réalisée avec moins d’effets secondaires.',
                        'choices' => [
                            ['text' => 'Les composants peuvent évoluer avec moins d’effets secondaires', 'correct' => true],
                            ['text' => 'Elle supprime automatiquement tous les bugs', 'correct' => false],
                            ['text' => 'Elle empêche toute dépendance', 'correct' => false],
                            ['text' => 'Elle garantit toujours une meilleure performance', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une application reçoit des milliers d’événements qui n’ont pas besoin d’être traités immédiatement. Quelle architecture peut être appropriée ?',
                        'explanation' => 'Une architecture événementielle avec une file de messages permet de découpler la réception des événements de leur traitement.',
                        'choices' => [
                            ['text' => 'Utiliser une architecture asynchrone avec une Message Queue', 'correct' => true],
                            ['text' => 'Bloquer chaque requête jusqu’à la fin de tous les traitements', 'correct' => false],
                            ['text' => 'Utiliser uniquement des variables globales', 'correct' => false],
                            ['text' => 'Désactiver la concurrence', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’une Message Queue ?',
                        'explanation' => 'Une Message Queue permet notamment de découpler les producteurs et consommateurs et de traiter certaines opérations de manière asynchrone.',
                        'choices' => [
                            ['text' => 'Découpler les producteurs et consommateurs de messages', 'correct' => true],
                            ['text' => 'Remplacer toutes les API', 'correct' => false],
                            ['text' => 'Remplacer le système de fichiers', 'correct' => false],
                            ['text' => 'Empêcher toute communication entre services', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Dans un système distribué, pourquoi faut-il prévoir les pannes partielles ?',
                        'explanation' => 'Un service peut être disponible alors qu’un autre service ou une partie du réseau est temporairement indisponible.',
                        'choices' => [
                            ['text' => 'Parce qu’un composant peut échouer alors que les autres restent disponibles', 'correct' => true],
                            ['text' => 'Parce qu’un système distribué ne peut jamais communiquer', 'correct' => false],
                            ['text' => 'Parce que les bases de données sont toujours indisponibles', 'correct' => false],
                            ['text' => 'Parce que les applications distribuées ne peuvent pas être testées', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel mécanisme permet de limiter les appels répétés vers un service temporairement indisponible ?',
                        'explanation' => 'Le Circuit Breaker peut empêcher une cascade d’appels vers un service défaillant et permettre au système de récupérer.',
                        'choices' => [
                            ['text' => 'Circuit Breaker', 'correct' => true],
                            ['text' => 'Factory', 'correct' => false],
                            ['text' => 'Singleton', 'correct' => false],
                            ['text' => 'Iterator', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi utiliser un cache distribué dans une application avec plusieurs instances ?',
                        'explanation' => 'Un cache distribué permet aux différentes instances de partager certains résultats mis en cache.',
                        'choices' => [
                            ['text' => 'Pour partager certaines données mises en cache entre plusieurs instances', 'correct' => true],
                            ['text' => 'Pour remplacer définitivement la base de données', 'correct' => false],
                            ['text' => 'Pour empêcher les utilisateurs de se connecter', 'correct' => false],
                            ['text' => 'Pour compiler le backend', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel compromis est généralement associé à une architecture Microservices ?',
                        'explanation' => 'Les Microservices peuvent améliorer l’indépendance des composants mais ajoutent une complexité opérationnelle, réseau et de supervision.',
                        'choices' => [
                            ['text' => 'Plus d’indépendance des services mais davantage de complexité distribuée', 'correct' => true],
                            ['text' => 'Une architecture toujours plus simple', 'correct' => false],
                            ['text' => 'La disparition des problèmes réseau', 'correct' => false],
                            ['text' => 'Une base de données automatiquement cohérente entre tous les services', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 2 — ALGORITHMIQUE ET OPTIMISATION AVANCÉE
            // =====================================================
            [
                'title' => 'Algorithmique et optimisation avancée',
                'description' => 'Quiz professionnel sur l’analyse algorithmique, l’optimisation et la résolution de problèmes complexes.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Un algorithme parcourt un tableau de n éléments et effectue une recherche binaire à chaque élément. Quelle est sa complexité temporelle approximative ?',
                        'explanation' => 'La recherche binaire coûte O(log n) et elle est exécutée n fois, donnant O(n log n).',
                        'choices' => [
                            ['text' => 'O(n log n)', 'correct' => true],
                            ['text' => 'O(n)', 'correct' => false],
                            ['text' => 'O(log n)', 'correct' => false],
                            ['text' => 'O(n² log n)', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle approche est généralement adaptée lorsqu’un problème possède des sous-problèmes qui se recouvrent et une structure optimale ?',
                        'explanation' => 'La programmation dynamique est adaptée lorsque les sous-problèmes se recouvrent et que la solution optimale peut être construite à partir de solutions optimales.',
                        'choices' => [
                            ['text' => 'Programmation dynamique', 'correct' => true],
                            ['text' => 'Recherche linéaire uniquement', 'correct' => false],
                            ['text' => 'Hashing uniquement', 'correct' => false],
                            ['text' => 'Encapsulation', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un programme contient une boucle O(n) imbriquée dans une autre boucle O(n). Quelle est la complexité dominante ?',
                        'explanation' => 'Deux boucles indépendantes parcourant n éléments produisent généralement O(n²).',
                        'choices' => [
                            ['text' => 'O(n²)', 'correct' => true],
                            ['text' => 'O(n)', 'correct' => false],
                            ['text' => 'O(log n)', 'correct' => false],
                            ['text' => 'O(1)', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal avantage d’un algorithme ayant une complexité O(log n) par rapport à O(n) pour de très grandes entrées ?',
                        'explanation' => 'O(log n) augmente beaucoup plus lentement avec la taille des données qu’O(n).',
                        'choices' => [
                            ['text' => 'Son coût augmente beaucoup plus lentement lorsque n augmente', 'correct' => true],
                            ['text' => 'Il utilise toujours moins de mémoire', 'correct' => false],
                            ['text' => 'Il est toujours plus simple à programmer', 'correct' => false],
                            ['text' => 'Il ne dépend jamais des données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel algorithme est approprié pour détecter les composantes connexes d’un graphe non orienté ?',
                        'explanation' => 'Un parcours BFS ou DFS peut parcourir chaque composante et permettre de les identifier.',
                        'choices' => [
                            ['text' => 'BFS ou DFS', 'correct' => true],
                            ['text' => 'Binary Search uniquement', 'correct' => false],
                            ['text' => 'Quick Sort uniquement', 'correct' => false],
                            ['text' => 'Hashing uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème classique cherche à sélectionner des éléments avec une capacité maximale tout en maximisant une valeur ?',
                        'explanation' => 'Le problème du Knapsack est un problème classique d’optimisation, souvent traité par programmation dynamique selon sa variante.',
                        'choices' => [
                            ['text' => 'Knapsack', 'correct' => true],
                            ['text' => 'Binary Search', 'correct' => false],
                            ['text' => 'Merge Sort', 'correct' => false],
                            ['text' => 'Depth Limiting', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’utiliser une Hash Table pour rechercher une clé ?',
                        'explanation' => 'Avec une bonne fonction de hachage et une gestion correcte des collisions, une recherche peut être réalisée en O(1) en moyenne.',
                        'choices' => [
                            ['text' => 'Obtenir une recherche en O(1) en moyenne', 'correct' => true],
                            ['text' => 'Garantir O(1) dans tous les cas', 'correct' => false],
                            ['text' => 'Trier automatiquement toutes les données', 'correct' => false],
                            ['text' => 'Éliminer la mémoire utilisée', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi la complexité dans le pire cas est-elle importante lors de la conception d’un système critique ?',
                        'explanation' => 'Le pire cas permet d’évaluer le comportement du système lorsque les données ou conditions sont défavorables.',
                        'choices' => [
                            ['text' => 'Elle permet d’évaluer le comportement dans les situations défavorables', 'correct' => true],
                            ['text' => 'Elle garantit toujours le temps exact d’exécution', 'correct' => false],
                            ['text' => 'Elle remplace les tests', 'correct' => false],
                            ['text' => 'Elle mesure uniquement la consommation mémoire', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un développeur remplace une boucle par une opération vectorisée et obtient un gain important. Quelle explication est la plus plausible ?',
                        'explanation' => 'La vectorisation peut exploiter des opérations optimisées et réduire le coût de certaines opérations répétitives.',
                        'choices' => [
                            ['text' => 'L’opération exploite une implémentation optimisée pour traiter plusieurs éléments efficacement', 'correct' => true],
                            ['text' => 'Une boucle est toujours interdite en programmation professionnelle', 'correct' => false],
                            ['text' => 'La vectorisation supprime toute utilisation du processeur', 'correct' => false],
                            ['text' => 'Les données ne sont plus stockées', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle approche est préférable lorsqu’un algorithme est suffisamment rapide mais consomme trop de mémoire ?',
                        'explanation' => 'Il faut analyser l’utilisation mémoire et rechercher des structures ou stratégies permettant de réduire l’espace utilisé.',
                        'choices' => [
                            ['text' => 'Analyser et optimiser la complexité spatiale', 'correct' => true],
                            ['text' => 'Augmenter systématiquement la complexité temporelle', 'correct' => false],
                            ['text' => 'Ajouter davantage de copies de données', 'correct' => false],
                            ['text' => 'Désactiver les tests', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 3 — OOP ET CONCEPTION AVANCÉE
            // =====================================================
            [
                'title' => 'Programmation orientée objet et conception avancée',
                'description' => 'Quiz professionnel sur OOP, SOLID, abstraction, polymorphisme et conception maintenable.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Une classe dépend directement d’une implémentation concrète d’un service de paiement. Quelle amélioration est généralement préférable ?',
                        'explanation' => 'Dépendre d’une abstraction et injecter l’implémentation permet de réduire le couplage et facilite les tests.',
                        'choices' => [
                            ['text' => 'Dépendre d’une abstraction et utiliser la Dependency Injection', 'correct' => true],
                            ['text' => 'Créer davantage de dépendances concrètes', 'correct' => false],
                            ['text' => 'Utiliser uniquement des variables globales', 'correct' => false],
                            ['text' => 'Copier le code du service dans la classe', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel principe SOLID est directement lié à la dépendance envers les abstractions plutôt qu’envers les détails ?',
                        'explanation' => 'Le Dependency Inversion Principle recommande que les modules de haut niveau ne dépendent pas directement des détails d’implémentation.',
                        'choices' => [
                            ['text' => 'Dependency Inversion Principle', 'correct' => true],
                            ['text' => 'Single Responsibility Principle', 'correct' => false],
                            ['text' => 'Interface Segregation Principle', 'correct' => false],
                            ['text' => 'Open/Closed Principle', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel avantage principal apporte le polymorphisme dans une architecture orientée objet ?',
                        'explanation' => 'Le polymorphisme permet d’utiliser une abstraction commune avec différentes implémentations sans multiplier les conditions dépendantes des types.',
                        'choices' => [
                            ['text' => 'Permettre d’utiliser différentes implémentations derrière une abstraction commune', 'correct' => true],
                            ['text' => 'Supprimer toutes les interfaces', 'correct' => false],
                            ['text' => 'Éviter toute création d’objet', 'correct' => false],
                            ['text' => 'Garantir automatiquement les performances', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une méthode contient de nombreux if/else dépendant du type concret d’un objet. Quel problème de conception peut être présent ?',
                        'explanation' => 'Une forte dépendance aux types concrets peut indiquer qu’un polymorphisme ou une stratégie pourrait mieux représenter les comportements.',
                        'choices' => [
                            ['text' => 'Un couplage excessif aux types concrets', 'correct' => true],
                            ['text' => 'Une normalisation excessive', 'correct' => false],
                            ['text' => 'Un problème de réseau', 'correct' => false],
                            ['text' => 'Une transaction SQL', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une classe possédant trop de responsabilités devient-elle difficile à maintenir ?',
                        'explanation' => 'Plusieurs responsabilités augmentent les raisons de modification et les interactions internes, ce qui rend le code plus fragile.',
                        'choices' => [
                            ['text' => 'Elle devient plus difficile à comprendre, tester et modifier', 'correct' => true],
                            ['text' => 'Elle ne peut plus être compilée', 'correct' => false],
                            ['text' => 'Elle ne peut plus contenir de méthodes', 'correct' => false],
                            ['text' => 'Elle devient automatiquement abstraite', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel principe recommande de rendre les modules indépendants des détails de bas niveau ?',
                        'explanation' => 'Le Dependency Inversion Principle vise notamment à inverser la dépendance afin que les abstractions ne dépendent pas des détails.',
                        'choices' => [
                            ['text' => 'Dependency Inversion Principle', 'correct' => true],
                            ['text' => 'Single Responsibility Principle', 'correct' => false],
                            ['text' => 'Liskov Substitution Principle', 'correct' => false],
                            ['text' => 'Interface Segregation Principle', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Dans quel cas une interface est-elle particulièrement utile ?',
                        'explanation' => 'Une interface définit un contrat que différentes implémentations peuvent respecter.',
                        'choices' => [
                            ['text' => 'Lorsqu’il est utile de définir un contrat commun à plusieurs implémentations', 'correct' => true],
                            ['text' => 'Lorsqu’on veut supprimer toutes les abstractions', 'correct' => false],
                            ['text' => 'Lorsqu’une seule variable est nécessaire', 'correct' => false],
                            ['text' => 'Uniquement pour manipuler des fichiers', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi le principe "composition over inheritance" est-il souvent recommandé ?',
                        'explanation' => 'La composition permet de combiner des comportements sans créer des hiérarchies d’héritage rigides.',
                        'choices' => [
                            ['text' => 'Elle permet souvent une conception plus flexible et moins fortement couplée', 'correct' => true],
                            ['text' => 'Elle interdit la réutilisation', 'correct' => false],
                            ['text' => 'Elle supprime les objets', 'correct' => false],
                            ['text' => 'Elle empêche le polymorphisme', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le rôle d’une abstraction dans une architecture logicielle ?',
                        'explanation' => 'Une abstraction expose les concepts ou comportements nécessaires sans imposer les détails internes de leur implémentation.',
                        'choices' => [
                            ['text' => 'Masquer les détails d’implémentation derrière un contrat pertinent', 'correct' => true],
                            ['text' => 'Ajouter systématiquement du code inutile', 'correct' => false],
                            ['text' => 'Supprimer toutes les dépendances', 'correct' => false],
                            ['text' => 'Remplacer les tests', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle caractéristique décrit le mieux une bonne conception orientée objet ?',
                        'explanation' => 'Une bonne conception cherche notamment la cohésion, un couplage raisonnable, des responsabilités claires et des abstractions adaptées.',
                        'choices' => [
                            ['text' => 'Des responsabilités claires, une bonne cohésion et un couplage maîtrisé', 'correct' => true],
                            ['text' => 'Le maximum de classes possible', 'correct' => false],
                            ['text' => 'Une hiérarchie d’héritage profonde', 'correct' => false],
                            ['text' => 'Le minimum absolu de méthodes', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 4 — BASES DE DONNÉES ET OPTIMISATION SQL
            // =====================================================
            [
                'title' => 'Bases de données et optimisation SQL',
                'description' => 'Quiz professionnel sur SQL, indexation, transactions, concurrence et optimisation des bases de données.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Une requête filtre régulièrement une table de plusieurs millions de lignes sur une colonne très sélective. Quelle optimisation peut être pertinente ?',
                        'explanation' => 'Un index adapté peut permettre au moteur de localiser efficacement les lignes correspondant au filtre.',
                        'choices' => [
                            ['text' => 'Créer un index adapté après analyse du plan d’exécution', 'correct' => true],
                            ['text' => 'Ajouter systématiquement un index sur chaque colonne', 'correct' => false],
                            ['text' => 'Supprimer les contraintes', 'correct' => false],
                            ['text' => 'Remplacer SQL par des fichiers texte', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une transaction concurrente modifie des données sans contrôle approprié ?',
                        'explanation' => 'Une mauvaise gestion de la concurrence peut entraîner des phénomènes comme les lost updates ou certaines lectures incohérentes.',
                        'choices' => [
                            ['text' => 'Des incohérences dues aux accès concurrents', 'correct' => true],
                            ['text' => 'Une compilation incorrecte', 'correct' => false],
                            ['text' => 'La suppression automatique de la table', 'correct' => false],
                            ['text' => 'La disparition des index', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un niveau d’isolation transactionnelle ?',
                        'explanation' => 'Le niveau d’isolation détermine dans quelle mesure les opérations concurrentes peuvent observer ou influencer les données d’une transaction.',
                        'choices' => [
                            ['text' => 'Contrôler les effets des transactions concurrentes sur la visibilité des données', 'correct' => true],
                            ['text' => 'Déterminer la taille du disque', 'correct' => false],
                            ['text' => 'Compresser automatiquement les tables', 'correct' => false],
                            ['text' => 'Remplacer les clés primaires', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi faut-il analyser un plan d’exécution avant de créer de nombreux index ?',
                        'explanation' => 'Le plan permet d’identifier le véritable problème et d’éviter de créer des index inutiles ou contre-productifs.',
                        'choices' => [
                            ['text' => 'Pour identifier le véritable goulot d’étranglement et éviter les index inutiles', 'correct' => true],
                            ['text' => 'Parce que les index sont toujours inutiles', 'correct' => false],
                            ['text' => 'Parce qu’un index empêche les SELECT', 'correct' => false],
                            ['text' => 'Pour supprimer toutes les transactions', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le rôle d’une contrainte FOREIGN KEY ?',
                        'explanation' => 'Une FOREIGN KEY permet notamment de maintenir l’intégrité référentielle entre deux tables.',
                        'choices' => [
                            ['text' => 'Maintenir l’intégrité référentielle entre des tables liées', 'correct' => true],
                            ['text' => 'Accélérer systématiquement toutes les requêtes', 'correct' => false],
                            ['text' => 'Chiffrer les données', 'correct' => false],
                            ['text' => 'Remplacer une transaction', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème une mauvaise utilisation de SELECT * peut-elle poser dans une API ?',
                        'explanation' => 'SELECT * peut récupérer plus de colonnes que nécessaire, augmenter les données transférées et rendre les dépendances aux schémas plus fortes.',
                        'choices' => [
                            ['text' => 'Récupérer inutilement des données et augmenter les coûts de transfert ou de traitement', 'correct' => true],
                            ['text' => 'Empêcher toute requête SQL', 'correct' => false],
                            ['text' => 'Supprimer automatiquement les index', 'correct' => false],
                            ['text' => 'Garantir une meilleure sécurité', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt du pagination lors de la récupération d’un grand ensemble de résultats ?',
                        'explanation' => 'La pagination limite la quantité de données récupérées et transférées par requête.',
                        'choices' => [
                            ['text' => 'Limiter la quantité de données traitées et transférées à chaque requête', 'correct' => true],
                            ['text' => 'Supprimer définitivement les anciennes données', 'correct' => false],
                            ['text' => 'Remplacer les index', 'correct' => false],
                            ['text' => 'Éviter toute utilisation de SQL', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal risque d’une transaction contenant des traitements très longs et plusieurs accès externes ?',
                        'explanation' => 'Une transaction longue peut conserver des verrous ou ressources pendant une période importante et augmenter les risques de contention.',
                        'choices' => [
                            ['text' => 'Augmenter la contention et maintenir certaines ressources plus longtemps', 'correct' => true],
                            ['text' => 'Améliorer automatiquement la concurrence', 'correct' => false],
                            ['text' => 'Supprimer les deadlocks', 'correct' => false],
                            ['text' => 'Garantir une meilleure disponibilité', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Deadlock ?',
                        'explanation' => 'Un Deadlock survient lorsque plusieurs transactions attendent mutuellement des ressources détenues par les autres.',
                        'choices' => [
                            ['text' => 'Une situation où plusieurs transactions se bloquent mutuellement', 'correct' => true],
                            ['text' => 'Une erreur de syntaxe SQL', 'correct' => false],
                            ['text' => 'Un index supprimé', 'correct' => false],
                            ['text' => 'Une requête SELECT vide', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle pratique contribue à réduire les risques de SQL Injection ?',
                        'explanation' => 'Les requêtes paramétrées séparent les valeurs des instructions SQL et empêchent l’interprétation des entrées comme faisant partie de la requête.',
                        'choices' => [
                            ['text' => 'Utiliser des requêtes paramétrées ou un mécanisme équivalent sécurisé', 'correct' => true],
                            ['text' => 'Concaténer directement toutes les entrées utilisateur', 'correct' => false],
                            ['text' => 'Désactiver les clés étrangères', 'correct' => false],
                            ['text' => 'Utiliser SELECT *', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 5 — DÉVELOPPEMENT WEB ET API AVANCÉES
            // =====================================================
            [
                'title' => 'Développement Web et API avancées',
                'description' => 'Quiz professionnel sur les API REST, HTTP, authentification, cache et conception Web.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une API RESTful correctement conçue cherche notamment à respecter ?',
                        'explanation' => 'REST s’appuie notamment sur les ressources, les méthodes HTTP, l’absence d’état de session côté serveur entre les requêtes et des représentations des ressources.',
                        'choices' => [
                            ['text' => 'Une interaction orientée ressources utilisant les principes du protocole HTTP', 'correct' => true],
                            ['text' => 'Une architecture obligatoirement basée sur SOAP', 'correct' => false],
                            ['text' => 'Une API sans aucune réponse HTTP', 'correct' => false],
                            ['text' => 'Une API qui stocke toujours la session dans chaque requête', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une API doit-elle valider les données reçues du client même si le frontend effectue déjà une validation ?',
                        'explanation' => 'Le client ne doit jamais être considéré comme une source de confiance. Un utilisateur peut contourner complètement le frontend.',
                        'choices' => [
                            ['text' => 'Parce que le client peut être contourné et envoyer directement des données au serveur', 'correct' => true],
                            ['text' => 'Parce que le frontend ne peut jamais valider une chaîne', 'correct' => false],
                            ['text' => 'Parce que HTTP interdit la validation', 'correct' => false],
                            ['text' => 'Parce que les API ne peuvent pas recevoir de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une API doit limiter un utilisateur à 100 requêtes par minute. Quel mécanisme est approprié ?',
                        'explanation' => 'Le Rate Limiting permet de contrôler le nombre de requêtes qu’un client peut effectuer durant une période.',
                        'choices' => [
                            ['text' => 'Rate Limiting', 'correct' => true],
                            ['text' => 'Dependency Injection', 'correct' => false],
                            ['text' => 'Serialization uniquement', 'correct' => false],
                            ['text' => 'Inheritance', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’utiliser un identifiant opaque plutôt qu’un identifiant séquentiel dans certains systèmes exposés publiquement ?',
                        'explanation' => 'Un identifiant opaque peut réduire certaines possibilités d’énumération directe des ressources, même s’il ne remplace pas l’autorisation.',
                        'choices' => [
                            ['text' => 'Réduire notamment les possibilités d’énumération prévisible des ressources', 'correct' => true],
                            ['text' => 'Garantir automatiquement l’authentification', 'correct' => false],
                            ['text' => 'Remplacer HTTPS', 'correct' => false],
                            ['text' => 'Supprimer les permissions', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi HTTPS est-il important pour une API ?',
                        'explanation' => 'HTTPS chiffre les communications entre le client et le serveur et contribue à protéger les données contre l’interception et la modification pendant le transport.',
                        'choices' => [
                            ['text' => 'Pour protéger les communications en transit grâce au chiffrement', 'correct' => true],
                            ['text' => 'Pour remplacer les contrôles d’autorisation', 'correct' => false],
                            ['text' => 'Pour chiffrer automatiquement la base de données', 'correct' => false],
                            ['text' => 'Pour supprimer toutes les vulnérabilités', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal risque d’un token d’authentification stocké ou exposé de manière non sécurisée ?',
                        'explanation' => 'Un token compromis peut permettre à un attaquant d’utiliser l’identité associée au token jusqu’à son expiration ou sa révocation.',
                        'choices' => [
                            ['text' => 'Un attaquant peut potentiellement l’utiliser pour accéder aux ressources associées', 'correct' => true],
                            ['text' => 'Le serveur s’arrête automatiquement', 'correct' => false],
                            ['text' => 'La base de données est automatiquement supprimée', 'correct' => false],
                            ['text' => 'Le token devient une clé SQL', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle réponse HTTP est généralement appropriée lorsqu’un utilisateur authentifié n’a pas les permissions nécessaires ?',
                        'explanation' => '403 Forbidden indique généralement que le serveur comprend la requête mais refuse l’accès à la ressource.',
                        'choices' => [
                            ['text' => '403 Forbidden', 'correct' => true],
                            ['text' => '201 Created', 'correct' => false],
                            ['text' => '301 Moved Permanently', 'correct' => false],
                            ['text' => '204 No Content uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt de rendre certaines opérations API idempotentes ?',
                        'explanation' => 'Une opération idempotente peut être répétée sans produire un effet supplémentaire indésirable au-delà du premier traitement.',
                        'choices' => [
                            ['text' => 'Permettre de répéter certaines requêtes sans multiplier leur effet métier', 'correct' => true],
                            ['text' => 'Empêcher toute requête concurrente', 'correct' => false],
                            ['text' => 'Supprimer l’authentification', 'correct' => false],
                            ['text' => 'Garantir qu’une requête réussira toujours', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une API peut-elle utiliser une stratégie de versionnement ?',
                        'explanation' => 'Le versionnement permet de faire évoluer le contrat d’une API tout en conservant temporairement la compatibilité avec les anciens clients.',
                        'choices' => [
                            ['text' => 'Pour faire évoluer le contrat tout en maintenant la compatibilité avec certains anciens clients', 'correct' => true],
                            ['text' => 'Pour empêcher les migrations', 'correct' => false],
                            ['text' => 'Pour supprimer les tests', 'correct' => false],
                            ['text' => 'Pour éviter HTTP', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème peut provoquer une absence de validation côté serveur sur une API ?',
                        'explanation' => 'Des données invalides ou malveillantes peuvent atteindre la logique métier ou la base de données si le serveur fait confiance au client.',
                        'choices' => [
                            ['text' => 'Des données invalides ou malveillantes peuvent atteindre les couches internes', 'correct' => true],
                            ['text' => 'Le navigateur ne peut plus afficher CSS', 'correct' => false],
                            ['text' => 'Les requêtes GET deviennent impossibles', 'correct' => false],
                            ['text' => 'Le serveur ne peut plus utiliser JSON', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 6 — SÉCURITÉ DES APPLICATIONS
            // =====================================================
            [
                'title' => 'Sécurité des applications',
                'description' => 'Quiz professionnel sur la sécurité des applications, l’authentification, les attaques Web et la protection des données.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quelle est la meilleure pratique générale pour stocker les mots de passe ?',
                        'explanation' => 'Les mots de passe doivent être stockés sous forme de hash avec un algorithme conçu pour le stockage sécurisé des mots de passe.',
                        'choices' => [
                            ['text' => 'Utiliser un hash adapté au stockage des mots de passe', 'correct' => true],
                            ['text' => 'Les stocker en clair', 'correct' => false],
                            ['text' => 'Les stocker uniquement en Base64', 'correct' => false],
                            ['text' => 'Les stocker dans le code source', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi Base64 n’est-elle pas une méthode de chiffrement ?',
                        'explanation' => 'Base64 est un encodage réversible et ne fournit pas de confidentialité.',
                        'choices' => [
                            ['text' => 'Parce qu’il s’agit d’un encodage réversible et non d’un mécanisme de confidentialité', 'correct' => true],
                            ['text' => 'Parce qu’il utilise toujours des mots de passe', 'correct' => false],
                            ['text' => 'Parce qu’il ne fonctionne qu’avec SQL', 'correct' => false],
                            ['text' => 'Parce qu’il nécessite un certificat TLS', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle vulnérabilité peut apparaître lorsqu’une application affiche directement des données utilisateur dans une page HTML sans encodage approprié ?',
                        'explanation' => 'Une sortie insuffisamment encodée peut permettre une attaque XSS.',
                        'choices' => [
                            ['text' => 'XSS', 'correct' => true],
                            ['text' => 'Deadlock', 'correct' => false],
                            ['text' => 'Race Condition uniquement', 'correct' => false],
                            ['text' => 'DNS Spoofing uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une Race Condition ?',
                        'explanation' => 'Une Race Condition survient lorsque le résultat dépend de l’ordre ou du timing de plusieurs opérations concurrentes.',
                        'choices' => [
                            ['text' => 'Un comportement dépendant de l’ordre ou du timing d’opérations concurrentes', 'correct' => true],
                            ['text' => 'Une erreur de syntaxe', 'correct' => false],
                            ['text' => 'Une requête SQL trop longue', 'correct' => false],
                            ['text' => 'Une erreur de compilation uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel principe de sécurité recommande de donner à un utilisateur ou service uniquement les permissions nécessaires ?',
                        'explanation' => 'Le principe du moindre privilège limite les conséquences potentielles d’une compromission.',
                        'choices' => [
                            ['text' => 'Principe du moindre privilège', 'correct' => true],
                            ['text' => 'Principe de duplication', 'correct' => false],
                            ['text' => 'Principe de surcharge', 'correct' => false],
                            ['text' => 'Principe de récursion', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les secrets tels que les clés API ne devraient-ils généralement pas être stockés directement dans Git ?',
                        'explanation' => 'Un secret commité peut rester accessible dans l’historique du dépôt même après sa suppression apparente.',
                        'choices' => [
                            ['text' => 'Parce qu’ils peuvent être exposés dans le dépôt et son historique', 'correct' => true],
                            ['text' => 'Parce que Git ne supporte pas les chaînes de caractères', 'correct' => false],
                            ['text' => 'Parce qu’une clé API ne peut jamais être utilisée par un serveur', 'correct' => false],
                            ['text' => 'Parce que Git supprime automatiquement les secrets', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle mesure est particulièrement importante après la découverte d’une clé API exposée publiquement ?',
                        'explanation' => 'Une clé exposée doit généralement être considérée comme compromise et révoquée ou remplacée rapidement.',
                        'choices' => [
                            ['text' => 'La révoquer ou la remplacer rapidement', 'correct' => true],
                            ['text' => 'La publier davantage', 'correct' => false],
                            ['text' => 'La renommer uniquement', 'correct' => false],
                            ['text' => 'La déplacer dans un commentaire', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal d’un système de permissions côté serveur ?',
                        'explanation' => 'Les permissions côté serveur empêchent les utilisateurs d’accéder aux actions ou ressources auxquelles ils n’ont pas droit.',
                        'choices' => [
                            ['text' => 'Empêcher l’accès aux ressources ou actions non autorisées', 'correct' => true],
                            ['text' => 'Améliorer automatiquement le CSS', 'correct' => false],
                            ['text' => 'Remplacer HTTPS', 'correct' => false],
                            ['text' => 'Accélérer toutes les requêtes', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les messages d’erreur de production doivent-ils éviter d’exposer les détails internes du système ?',
                        'explanation' => 'Des stack traces, chemins internes ou informations de configuration peuvent fournir des informations utiles à un attaquant.',
                        'choices' => [
                            ['text' => 'Pour éviter de divulguer des informations internes exploitables', 'correct' => true],
                            ['text' => 'Parce que les utilisateurs ne doivent jamais voir aucun message', 'correct' => false],
                            ['text' => 'Pour empêcher les logs', 'correct' => false],
                            ['text' => 'Pour supprimer les exceptions', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif d’une politique de rotation des secrets ?',
                        'explanation' => 'La rotation réduit la durée pendant laquelle un secret compromis reste utilisable.',
                        'choices' => [
                            ['text' => 'Réduire la durée de validité pratique d’un secret compromis', 'correct' => true],
                            ['text' => 'Empêcher toute authentification', 'correct' => false],
                            ['text' => 'Supprimer les utilisateurs', 'correct' => false],
                            ['text' => 'Remplacer les sauvegardes', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 7 — TESTS, QUALITÉ ET DEVOPS
            // =====================================================
            [
                'title' => 'Tests, qualité et DevOps',
                'description' => 'Quiz professionnel sur les tests automatisés, CI/CD, Git, observabilité et qualité logicielle.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Une modification est poussée vers Git et le pipeline CI échoue sur les tests. Quelle pratique est la plus appropriée ?',
                        'explanation' => 'Le pipeline doit être traité comme un signal de qualité. Il faut identifier et corriger le problème avant de considérer la modification comme prête.',
                        'choices' => [
                            ['text' => 'Analyser l’échec et corriger le problème avant de poursuivre le déploiement', 'correct' => true],
                            ['text' => 'Ignorer systématiquement le pipeline', 'correct' => false],
                            ['text' => 'Supprimer les tests qui échouent', 'correct' => false],
                            ['text' => 'Déployer automatiquement malgré toutes les erreurs', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle est la différence principale entre CI et CD ?',
                        'explanation' => 'CI concerne notamment l’intégration fréquente du code et les validations automatisées. CD concerne l’automatisation de la livraison ou du déploiement.',
                        'choices' => [
                            ['text' => 'CI automatise notamment l’intégration et la validation, tandis que CD automatise la livraison ou le déploiement', 'correct' => true],
                            ['text' => 'CI concerne uniquement les bases de données', 'correct' => false],
                            ['text' => 'CD signifie uniquement compilation', 'correct' => false],
                            ['text' => 'Ils sont toujours exactement identiques', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi utiliser des tests de régression dans une application qui évolue rapidement ?',
                        'explanation' => 'Ils permettent de vérifier que les fonctionnalités existantes continuent de fonctionner après les modifications.',
                        'choices' => [
                            ['text' => 'Pour vérifier que les modifications n’ont pas cassé des fonctionnalités existantes', 'correct' => true],
                            ['text' => 'Pour remplacer les tests unitaires', 'correct' => false],
                            ['text' => 'Pour éviter Git', 'correct' => false],
                            ['text' => 'Pour supprimer les environnements de staging', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un test end-to-end (E2E) cherche généralement à vérifier ?',
                        'explanation' => 'Un test E2E vérifie un parcours complet de l’application, souvent depuis l’interface jusqu’aux services et données nécessaires.',
                        'choices' => [
                            ['text' => 'Le fonctionnement d’un parcours complet de l’application', 'correct' => true],
                            ['text' => 'Une seule fonction isolée uniquement', 'correct' => false],
                            ['text' => 'Uniquement la syntaxe du code', 'correct' => false],
                            ['text' => 'Uniquement les index SQL', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les tests unitaires ne doivent-ils pas dépendre systématiquement d’une vraie API externe ?',
                        'explanation' => 'Une dépendance externe rend les tests plus lents, moins déterministes et dépendants de la disponibilité du service.',
                        'choices' => [
                            ['text' => 'Pour rendre les tests plus rapides, isolés et déterministes', 'correct' => true],
                            ['text' => 'Parce qu’une API externe ne peut jamais être testée', 'correct' => false],
                            ['text' => 'Pour éviter toute abstraction', 'correct' => false],
                            ['text' => 'Pour empêcher les erreurs métier', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le rôle d’un environnement Staging ?',
                        'explanation' => 'Staging fournit généralement un environnement proche de la production pour valider une version avant son déploiement final.',
                        'choices' => [
                            ['text' => 'Valider une version dans un environnement proche de la production', 'correct' => true],
                            ['text' => 'Remplacer définitivement la production', 'correct' => false],
                            ['text' => 'Stocker uniquement le code source', 'correct' => false],
                            ['text' => 'Supprimer les tests automatisés', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal des logs structurés ?',
                        'explanation' => 'Les logs structurés facilitent la recherche, l’analyse et l’agrégation des événements d’une application.',
                        'choices' => [
                            ['text' => 'Faciliter l’analyse automatisée et la recherche dans les événements', 'correct' => true],
                            ['text' => 'Remplacer la base de données', 'correct' => false],
                            ['text' => 'Empêcher toutes les exceptions', 'correct' => false],
                            ['text' => 'Compiler le backend', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelles sont les trois principales dimensions de l’observabilité moderne ?',
                        'explanation' => 'Les logs, métriques et traces constituent les trois piliers couramment utilisés pour observer les systèmes.',
                        'choices' => [
                            ['text' => 'Logs, métriques et traces', 'correct' => true],
                            ['text' => 'HTML, CSS et JavaScript', 'correct' => false],
                            ['text' => 'Git, Docker et SQL', 'correct' => false],
                            ['text' => 'Classes, interfaces et méthodes', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les Feature Flags peuvent-ils être utiles lors d’un déploiement ?',
                        'explanation' => 'Les Feature Flags permettent d’activer ou désactiver certaines fonctionnalités sans nécessairement redéployer l’application.',
                        'choices' => [
                            ['text' => 'Permettre d’activer ou désactiver progressivement une fonctionnalité', 'correct' => true],
                            ['text' => 'Remplacer Git', 'correct' => false],
                            ['text' => 'Supprimer les tests', 'correct' => false],
                            ['text' => 'Empêcher toute configuration', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une stratégie de rollback est-elle importante lors d’un déploiement ?',
                        'explanation' => 'Un rollback permet de revenir rapidement à une version précédente si la nouvelle version provoque un problème critique.',
                        'choices' => [
                            ['text' => 'Permettre de revenir rapidement à une version stable en cas de problème', 'correct' => true],
                            ['text' => 'Empêcher toute nouvelle version', 'correct' => false],
                            ['text' => 'Supprimer les sauvegardes', 'correct' => false],
                            ['text' => 'Remplacer les tests', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 8 — CAS PRATIQUES ET PROBLÈMES DE PROGRAMMATION
            // =====================================================
            [
                'title' => 'Cas pratiques et problèmes de programmation',
                'description' => 'Quiz professionnel basé sur des situations pratiques rencontrées dans les projets de développement logiciel.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Une API fonctionne correctement avec 100 utilisateurs mais devient très lente avec 10 000 utilisateurs. Quelle démarche est la plus pertinente en premier ?',
                        'explanation' => 'Il faut mesurer le système sous charge afin d’identifier si le problème vient du CPU, de la base de données, du réseau, du code ou d’une autre ressource.',
                        'choices' => [
                            ['text' => 'Effectuer un profiling et des tests de charge pour identifier le goulot d’étranglement', 'correct' => true],
                            ['text' => 'Réécrire immédiatement toute l’API', 'correct' => false],
                            ['text' => 'Ajouter des serveurs sans aucune mesure', 'correct' => false],
                            ['text' => 'Supprimer les fonctionnalités lentes', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une page effectue 501 requêtes SQL pour afficher 500 éléments. Quel problème suspectez-vous en priorité ?',
                        'explanation' => 'Le nombre de requêtes suggère fortement un problème N+1 : une requête initiale suivie d’une requête pour chaque élément.',
                        'choices' => [
                            ['text' => 'Le problème N+1', 'correct' => true],
                            ['text' => 'Un problème de CSS', 'correct' => false],
                            ['text' => 'Un problème de compilation', 'correct' => false],
                            ['text' => 'Une erreur de syntaxe HTML', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une application traite deux demandes simultanées pour acheter le dernier produit disponible. Quelle problématique faut-il particulièrement considérer ?',
                        'explanation' => 'Deux requêtes concurrentes peuvent tenter de modifier le même stock. Il faut gérer correctement la concurrence et l’atomicité.',
                        'choices' => [
                            ['text' => 'La concurrence et le risque de Race Condition', 'correct' => true],
                            ['text' => 'Le polymorphisme uniquement', 'correct' => false],
                            ['text' => 'Le CSS', 'correct' => false],
                            ['text' => 'Le versionnement d’API uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un développeur ajoute un cache pour résoudre une lenteur mais certaines données restent incorrectes après leur modification. Quel problème est probablement présent ?',
                        'explanation' => 'Le cache peut contenir une ancienne valeur si sa stratégie d’invalidation n’est pas correctement conçue.',
                        'choices' => [
                            ['text' => 'Un problème d’invalidation ou de cohérence du cache', 'correct' => true],
                            ['text' => 'Un problème de compilation', 'correct' => false],
                            ['text' => 'Un problème de polymorphisme', 'correct' => false],
                            ['text' => 'Une erreur CSS', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un service externe répond parfois très lentement et bloque les requêtes de votre application. Quelle stratégie peut améliorer la résilience ?',
                        'explanation' => 'Timeouts, retries contrôlés et Circuit Breaker permettent notamment d’éviter qu’un service lent ou indisponible bloque l’ensemble du système.',
                        'choices' => [
                            ['text' => 'Utiliser des timeouts appropriés et éventuellement un Circuit Breaker', 'correct' => true],
                            ['text' => 'Supprimer tous les contrôles d’erreur', 'correct' => false],
                            ['text' => 'Augmenter indéfiniment le timeout', 'correct' => false],
                            ['text' => 'Créer une boucle infinie', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un utilisateur peut modifier manuellement l’identifiant d’une ressource dans une URL et accéder aux données d’un autre utilisateur. Quelle catégorie de problème cela représente-t-il principalement ?',
                        'explanation' => 'Il s’agit d’un problème de contrôle d’accès : l’application vérifie l’existence de la ressource mais pas si l’utilisateur a réellement le droit d’y accéder.',
                        'choices' => [
                            ['text' => 'Un contrôle d’accès insuffisant', 'correct' => true],
                            ['text' => 'Un problème de tri', 'correct' => false],
                            ['text' => 'Une erreur de compilation', 'correct' => false],
                            ['text' => 'Un problème de cache uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une fonction devient difficile à tester car elle crée directement plusieurs services externes à l’intérieur de son code. Quelle amélioration est la plus appropriée ?',
                        'explanation' => 'La Dependency Injection permet de fournir les dépendances depuis l’extérieur et facilite leur remplacement par des doubles de test.',
                        'choices' => [
                            ['text' => 'Utiliser la Dependency Injection', 'correct' => true],
                            ['text' => 'Créer encore plus de services dans la fonction', 'correct' => false],
                            ['text' => 'Utiliser uniquement des variables globales', 'correct' => false],
                            ['text' => 'Supprimer les tests', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une équipe souhaite déployer une nouvelle fonctionnalité à seulement 5 % des utilisateurs avant de l’activer pour tout le monde. Quelle technique est particulièrement adaptée ?',
                        'explanation' => 'Une stratégie de déploiement progressif avec Feature Flag ou Canary Release permet de limiter l’exposition initiale.',
                        'choices' => [
                            ['text' => 'Feature Flag ou Canary Release', 'correct' => true],
                            ['text' => 'Big Bang Deployment obligatoire', 'correct' => false],
                            ['text' => 'Suppression des tests', 'correct' => false],
                            ['text' => 'Désactivation du monitoring', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Une application produit de nombreuses erreurs en production mais l’équipe ne sait pas quelles requêtes ont provoqué les erreurs. Quelle amélioration est particulièrement utile ?',
                        'explanation' => 'Une bonne observabilité avec logs structurés, métriques et traces permet de corréler les erreurs avec les requêtes et services concernés.',
                        'choices' => [
                            ['text' => 'Améliorer l’observabilité avec logs structurés, métriques et traces', 'correct' => true],
                            ['text' => 'Supprimer les logs', 'correct' => false],
                            ['text' => 'Désactiver les exceptions', 'correct' => false],
                            ['text' => 'Ajouter uniquement des commentaires', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Un développeur propose de réécrire entièrement une partie du système uniquement parce que le code lui semble ancien, sans mesure de problème réel. Quelle démarche est la plus professionnelle ?',
                        'explanation' => 'Une réécriture complète est coûteuse et risquée. Il faut d’abord identifier les problèmes réels, mesurer leur impact et comparer les solutions possibles.',
                        'choices' => [
                            ['text' => 'Identifier les problèmes réels, mesurer leur impact puis choisir la solution adaptée', 'correct' => true],
                            ['text' => 'Réécrire immédiatement tout le système', 'correct' => false],
                            ['text' => 'Supprimer les tests avant la réécriture', 'correct' => false],
                            ['text' => 'Changer de langage sans analyse', 'correct' => false],
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
                ]
            );

            foreach ($quizData['questions'] as $questionIndex => $questionData) {

                $question = $quiz->questions()->updateOrCreate(
                    [
                        'order' => $questionIndex + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                // Évite les doublons lors d'une nouvelle exécution
                $question->choices()->delete();

               $choices = $questionData['choices'];
shuffle($choices);

foreach ($choices as $choiceIndex => $choiceData) {
    $question->choices()->create([
        'choice_text' => $choiceData['text'],
        'is_correct' => $choiceData['correct'],
        'order' => $choiceIndex + 1,
    ]);
}
            }
        }
    }
}