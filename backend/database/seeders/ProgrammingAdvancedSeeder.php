<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();

        $quizzes = [

            // =====================================================
            // QUIZ 1 — ALGORITHMES AVANCÉS ET OPTIMISATION
            // =====================================================
            [
                'title' => 'Algorithmes avancés et optimisation',
                'description' => 'Quiz avancé sur la conception, l’analyse et l’optimisation des algorithmes.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quelle est la complexité temporelle moyenne d’un Quick Sort bien implémenté ?',
                        'explanation' => 'Avec des partitions suffisamment équilibrées, Quick Sort possède une complexité moyenne en O(n log n).',
                        'choices' => [
                            ['text' => 'O(n log n)', 'correct' => true],
                            ['text' => 'O(1)', 'correct' => false],
                            ['text' => 'O(n²) dans tous les cas', 'correct' => false],
                            ['text' => 'O(2ⁿ)', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle est la complexité dans le pire cas d’un Quick Sort dont le pivot produit systématiquement une partition très déséquilibrée ?',
                        'explanation' => 'Si le pivot produit une partition de taille n-1 et une partition vide à chaque étape, la complexité devient O(n²).',
                        'choices' => [
                            ['text' => 'O(n²)', 'correct' => true],
                            ['text' => 'O(log n)', 'correct' => false],
                            ['text' => 'O(n)', 'correct' => false],
                            ['text' => 'O(1)', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel principe consiste à diviser un problème en sous-problèmes indépendants puis à combiner leurs résultats ?',
                        'explanation' => 'Divide and Conquer consiste à diviser le problème, résoudre les sous-problèmes puis combiner leurs résultats.',
                        'choices' => [
                            ['text' => 'Divide and Conquer', 'correct' => true],
                            ['text' => 'Backtracking uniquement', 'correct' => false],
                            ['text' => 'Hashing', 'correct' => false],
                            ['text' => 'Encapsulation', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle caractéristique distingue principalement Dynamic Programming de nombreuses approches récursives naïves ?',
                        'explanation' => 'Dynamic Programming évite de recalculer plusieurs fois les mêmes sous-problèmes grâce notamment à la mémoïsation ou à une approche bottom-up.',
                        'choices' => [
                            ['text' => 'La mémorisation des résultats de sous-problèmes', 'correct' => true],
                            ['text' => 'L’utilisation obligatoire de classes', 'correct' => false],
                            ['text' => 'L’absence totale de mémoire', 'correct' => false],
                            ['text' => 'L’utilisation obligatoire d’un Graph', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Dans quel cas un algorithme glouton (Greedy) est-il approprié ?',
                        'explanation' => 'Une approche Greedy est adaptée lorsque les choix localement optimaux conduisent effectivement à une solution globale optimale pour le problème considéré.',
                        'choices' => [
                            ['text' => 'Lorsque la propriété de choix glouton permet d’obtenir une solution optimale', 'correct' => true],
                            ['text' => 'Pour tous les problèmes d’optimisation', 'correct' => false],
                            ['text' => 'Uniquement pour les problèmes de tri', 'correct' => false],
                            ['text' => 'Uniquement lorsque les données sont textuelles', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel algorithme est couramment utilisé pour trouver les plus courts chemins depuis une source dans un graphe pondéré avec des poids non négatifs ?',
                        'explanation' => 'Dijkstra est adapté aux graphes pondérés dont les poids sont non négatifs.',
                        'choices' => [
                            ['text' => 'Dijkstra', 'correct' => true],
                            ['text' => 'Binary Search', 'correct' => false],
                            ['text' => 'Merge Sort', 'correct' => false],
                            ['text' => 'KMP', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi Dijkstra n’est-il généralement pas adapté aux graphes contenant des arêtes de poids négatif ?',
                        'explanation' => 'Dijkstra repose sur l’idée qu’un sommet sélectionné possède déjà sa distance minimale. Des poids négatifs peuvent invalider cette propriété.',
                        'choices' => [
                            ['text' => 'Les poids négatifs peuvent invalider l’hypothèse utilisée par l’algorithme', 'correct' => true],
                            ['text' => 'Dijkstra ne fonctionne jamais avec des Graphs', 'correct' => false],
                            ['text' => 'Les Graphs ne peuvent pas contenir de nombres négatifs', 'correct' => false],
                            ['text' => 'Dijkstra fonctionne uniquement sur les arbres', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’une optimisation algorithmique ?',
                        'explanation' => 'L’objectif est généralement de réduire le temps d’exécution, la mémoire utilisée ou d’autres ressources tout en conservant le comportement attendu.',
                        'choices' => [
                            ['text' => 'Réduire les ressources nécessaires tout en conservant le résultat attendu', 'correct' => true],
                            ['text' => 'Rendre obligatoirement le code plus long', 'correct' => false],
                            ['text' => 'Supprimer les tests', 'correct' => false],
                            ['text' => 'Éviter toute structure de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle technique permet d’éviter de recalculer plusieurs fois une même fonction récursive ?',
                        'explanation' => 'La mémoïsation consiste à stocker les résultats déjà calculés afin de les réutiliser.',
                        'choices' => [
                            ['text' => 'Mémoïsation', 'correct' => true],
                            ['text' => 'Polymorphisme', 'correct' => false],
                            ['text' => 'Encapsulation', 'correct' => false],
                            ['text' => 'Serialization', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une optimisation prématurée peut-elle être problématique ?',
                        'explanation' => 'Optimiser avant d’identifier les véritables goulots d’étranglement peut augmenter la complexité du code sans bénéfice réel.',
                        'choices' => [
                            ['text' => 'Elle peut augmenter inutilement la complexité sans résoudre un véritable problème de performance', 'correct' => true],
                            ['text' => 'Elle rend toujours le programme incorrect', 'correct' => false],
                            ['text' => 'Elle empêche toute compilation', 'correct' => false],
                            ['text' => 'Elle supprime automatiquement les tests', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 2 — STRUCTURES DE DONNÉES AVANCÉES
            // =====================================================
            [
                'title' => 'Structures de données avancées',
                'description' => 'Quiz avancé sur les arbres, graphes, heaps et structures de données spécialisées.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’un Heap ?',
                        'explanation' => 'Un Heap permet notamment de récupérer efficacement un élément prioritaire, ce qui est utile pour implémenter une Priority Queue.',
                        'choices' => [
                            ['text' => 'Gérer efficacement des éléments selon une priorité', 'correct' => true],
                            ['text' => 'Stocker uniquement des chaînes', 'correct' => false],
                            ['text' => 'Remplacer toutes les Hash tables', 'correct' => false],
                            ['text' => 'Représenter uniquement des relations parent-enfant', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Dans un Min-Heap, où se trouve généralement le plus petit élément ?',
                        'explanation' => 'Dans un Min-Heap, le plus petit élément se trouve à la racine.',
                        'choices' => [
                            ['text' => 'À la racine', 'correct' => true],
                            ['text' => 'Toujours dans une feuille spécifique', 'correct' => false],
                            ['text' => 'Au dernier niveau uniquement', 'correct' => false],
                            ['text' => 'Il n’existe aucune règle', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement adaptée pour implémenter une Priority Queue ?',
                        'explanation' => 'Un Heap permet de gérer efficacement l’élément ayant la priorité maximale ou minimale selon le type de Heap.',
                        'choices' => [
                            ['text' => 'Heap', 'correct' => true],
                            ['text' => 'Stack uniquement', 'correct' => false],
                            ['text' => 'String', 'correct' => false],
                            ['text' => 'Matrix uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle propriété caractérise un AVL Tree ?',
                        'explanation' => 'Un AVL Tree est un Binary Search Tree auto-équilibré dont les hauteurs des sous-arbres restent contrôlées.',
                        'choices' => [
                            ['text' => 'Il maintient automatiquement un équilibre de hauteur', 'correct' => true],
                            ['text' => 'Il interdit toute suppression', 'correct' => false],
                            ['text' => 'Il fonctionne uniquement avec des chaînes', 'correct' => false],
                            ['text' => 'Il n’a aucune relation parent-enfant', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi utiliser un arbre auto-équilibré ?',
                        'explanation' => 'Un arbre auto-équilibré évite qu’un BST dégénère en structure proche d’une Linked List et permet de conserver de bonnes performances.',
                        'choices' => [
                            ['text' => 'Pour conserver une hauteur faible et de bonnes performances de recherche', 'correct' => true],
                            ['text' => 'Pour supprimer toutes les clés', 'correct' => false],
                            ['text' => 'Pour empêcher les insertions', 'correct' => false],
                            ['text' => 'Pour remplacer une base de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle structure est adaptée à la représentation d’un réseau de relations ?',
                        'explanation' => 'Un Graph représente naturellement des entités sous forme de sommets et leurs relations sous forme d’arêtes.',
                        'choices' => [
                            ['text' => 'Graph', 'correct' => true],
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Queue', 'correct' => false],
                            ['text' => 'Primitive', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle différence existe entre BFS et DFS ?',
                        'explanation' => 'BFS explore généralement niveau par niveau avec une Queue, tandis que DFS explore en profondeur, souvent avec une Stack ou la récursion.',
                        'choices' => [
                            ['text' => 'BFS explore généralement par niveaux tandis que DFS explore en profondeur', 'correct' => true],
                            ['text' => 'BFS trie toujours les données', 'correct' => false],
                            ['text' => 'DFS ne peut fonctionner que sur des tableaux', 'correct' => false],
                            ['text' => 'Ils sont strictement identiques', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement utile pour rechercher efficacement des préfixes de chaînes ?',
                        'explanation' => 'Un Trie est conçu pour représenter des chaînes sous forme d’arbre et permet des opérations efficaces sur les préfixes.',
                        'choices' => [
                            ['text' => 'Trie', 'correct' => true],
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Heap', 'correct' => false],
                            ['text' => 'Queue', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal d’une structure Union-Find ?',
                        'explanation' => 'Union-Find permet de gérer efficacement des ensembles disjoints et de déterminer si deux éléments appartiennent au même ensemble.',
                        'choices' => [
                            ['text' => 'Gérer efficacement des ensembles disjoints et leurs connexions', 'correct' => true],
                            ['text' => 'Trier des chaînes', 'correct' => false],
                            ['text' => 'Compresser des images', 'correct' => false],
                            ['text' => 'Créer des interfaces graphiques', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi une bonne structure de données peut-elle améliorer considérablement un programme ?',
                        'explanation' => 'Le choix de la structure détermine le coût des opérations fréquentes comme la recherche, l’insertion ou la suppression.',
                        'choices' => [
                            ['text' => 'Parce qu’elle peut réduire fortement le coût des opérations principales', 'correct' => true],
                            ['text' => 'Parce qu’elle supprime toutes les erreurs', 'correct' => false],
                            ['text' => 'Parce qu’elle remplace le compilateur', 'correct' => false],
                            ['text' => 'Parce qu’elle évite toute utilisation de mémoire', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 3 — OOP AVANCÉE
            // =====================================================
            [
                'title' => 'Programmation orientée objet avancée',
                'description' => 'Quiz avancé sur les principes OOP, SOLID, abstraction et conception orientée objet.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Que signifie le principe Single Responsibility Principle (SRP) ?',
                        'explanation' => 'SRP indique qu’une classe devrait avoir une seule responsabilité principale et donc une seule raison importante de changer.',
                        'choices' => [
                            ['text' => 'Une classe devrait avoir une responsabilité principale', 'correct' => true],
                            ['text' => 'Une classe doit contenir une seule méthode', 'correct' => false],
                            ['text' => 'Une application doit avoir une seule classe', 'correct' => false],
                            ['text' => 'Une classe ne doit jamais utiliser d’autres classes', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Que recommande Open/Closed Principle ?',
                        'explanation' => 'Une entité logicielle devrait être ouverte à l’extension mais fermée à la modification de son comportement existant.',
                        'choices' => [
                            ['text' => 'Être ouverte à l’extension mais fermée à la modification', 'correct' => true],
                            ['text' => 'Interdire toute extension', 'correct' => false],
                            ['text' => 'Modifier toutes les classes à chaque nouvelle fonctionnalité', 'correct' => false],
                            ['text' => 'Éviter toute abstraction', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème le Dependency Injection cherche-t-il principalement à réduire ?',
                        'explanation' => 'La Dependency Injection réduit le couplage direct en fournissant les dépendances depuis l’extérieur plutôt que de les créer directement dans la classe.',
                        'choices' => [
                            ['text' => 'Le couplage fort entre une classe et ses dépendances', 'correct' => true],
                            ['text' => 'La taille des bases de données', 'correct' => false],
                            ['text' => 'Le nombre de requêtes HTTP uniquement', 'correct' => false],
                            ['text' => 'La complexité des algorithmes de tri', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel principe SOLID concerne la substitution correcte des sous-types ?',
                        'explanation' => 'Le Liskov Substitution Principle indique que les objets d’un sous-type doivent pouvoir remplacer ceux du type parent sans casser les attentes du programme.',
                        'choices' => [
                            ['text' => 'Liskov Substitution Principle', 'correct' => true],
                            ['text' => 'Single Responsibility Principle', 'correct' => false],
                            ['text' => 'Interface Segregation Principle', 'correct' => false],
                            ['text' => 'Dependency Inversion Principle', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Que recommande Interface Segregation Principle ?',
                        'explanation' => 'ISP recommande de préférer plusieurs interfaces spécifiques à une grande interface imposant des méthodes inutiles aux implémentations.',
                        'choices' => [
                            ['text' => 'Préférer plusieurs interfaces spécialisées plutôt qu’une interface trop large', 'correct' => true],
                            ['text' => 'Créer une seule interface pour toute l’application', 'correct' => false],
                            ['text' => 'Éviter toutes les interfaces', 'correct' => false],
                            ['text' => 'Rendre toutes les méthodes publiques', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est un signe classique d’un couplage excessif ?',
                        'explanation' => 'Lorsque modifier une classe nécessite des changements importants dans de nombreuses autres classes, le couplage peut être excessif.',
                        'choices' => [
                            ['text' => 'Une modification locale nécessite de nombreuses modifications ailleurs', 'correct' => true],
                            ['text' => 'Les classes ont des noms explicites', 'correct' => false],
                            ['text' => 'Le code possède des tests', 'correct' => false],
                            ['text' => 'Les dépendances sont injectées', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi préférer parfois la composition à l’héritage ?',
                        'explanation' => 'La composition permet souvent de construire des comportements de manière plus flexible et réduit certaines dépendances fortes liées aux hiérarchies d’héritage.',
                        'choices' => [
                            ['text' => 'Elle permet souvent de réduire le couplage et d’augmenter la flexibilité', 'correct' => true],
                            ['text' => 'Elle interdit toute réutilisation', 'correct' => false],
                            ['text' => 'Elle supprime les objets', 'correct' => false],
                            ['text' => 'Elle empêche les tests', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un objet immuable (immutable object) ?',
                        'explanation' => 'Un objet immuable ne peut pas modifier son état interne après sa création. Une nouvelle instance est généralement créée pour représenter une nouvelle valeur.',
                        'choices' => [
                            ['text' => 'Un objet dont l’état ne peut pas être modifié après sa création', 'correct' => true],
                            ['text' => 'Un objet qui ne possède aucune propriété', 'correct' => false],
                            ['text' => 'Un objet qui ne peut jamais être utilisé', 'correct' => false],
                            ['text' => 'Une classe abstraite uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi l’immuabilité peut-elle faciliter la programmation concurrente ?',
                        'explanation' => 'Un état immuable réduit les risques de modifications concurrentes d’une même donnée partagée.',
                        'choices' => [
                            ['text' => 'Elle réduit les risques liés aux modifications concurrentes d’un même état', 'correct' => true],
                            ['text' => 'Elle augmente automatiquement le nombre de threads', 'correct' => false],
                            ['text' => 'Elle supprime les processus', 'correct' => false],
                            ['text' => 'Elle remplace les transactions', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif général des principes SOLID ?',
                        'explanation' => 'SOLID regroupe des principes visant notamment à produire un code plus maintenable, flexible, testable et faiblement couplé.',
                        'choices' => [
                            ['text' => 'Améliorer la maintenabilité, la flexibilité et la qualité de la conception', 'correct' => true],
                            ['text' => 'Garantir qu’un programme ne contiendra aucune erreur', 'correct' => false],
                            ['text' => 'Remplacer les tests automatisés', 'correct' => false],
                            ['text' => 'Supprimer les classes', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 4 — DESIGN PATTERNS
            // =====================================================
            [
                'title' => 'Design Patterns',
                'description' => 'Quiz avancé sur les principaux Design Patterns utilisés dans les applications professionnelles.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quel est l’objectif du Singleton Pattern ?',
                        'explanation' => 'Singleton vise à garantir qu’une classe ne possède qu’une seule instance accessible selon un mécanisme contrôlé.',
                        'choices' => [
                            ['text' => 'Contrôler la création afin de disposer d’une instance unique', 'correct' => true],
                            ['text' => 'Créer plusieurs instances automatiquement', 'correct' => false],
                            ['text' => 'Remplacer toutes les interfaces', 'correct' => false],
                            ['text' => 'Créer une base de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern permet de créer des objets sans exposer directement toute la logique de création au code client ?',
                        'explanation' => 'Factory Pattern encapsule la logique de création d’objets et permet souvent de choisir l’implémentation appropriée.',
                        'choices' => [
                            ['text' => 'Factory', 'correct' => true],
                            ['text' => 'Observer', 'correct' => false],
                            ['text' => 'Decorator', 'correct' => false],
                            ['text' => 'Adapter', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern permet d’ajouter dynamiquement des comportements à un objet ?',
                        'explanation' => 'Decorator permet d’ajouter des responsabilités ou comportements à un objet sans modifier directement sa classe.',
                        'choices' => [
                            ['text' => 'Decorator', 'correct' => true],
                            ['text' => 'Factory', 'correct' => false],
                            ['text' => 'Singleton', 'correct' => false],
                            ['text' => 'Repository', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern est adapté lorsqu’un objet doit notifier automatiquement plusieurs dépendants lors d’un changement d’état ?',
                        'explanation' => 'Observer établit une relation où plusieurs observateurs sont notifiés lorsqu’un sujet change d’état.',
                        'choices' => [
                            ['text' => 'Observer', 'correct' => true],
                            ['text' => 'Factory', 'correct' => false],
                            ['text' => 'Adapter', 'correct' => false],
                            ['text' => 'Builder', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal du Adapter Pattern ?',
                        'explanation' => 'Adapter permet de faire collaborer des interfaces incompatibles en fournissant une interface adaptée au client.',
                        'choices' => [
                            ['text' => 'Rendre compatibles deux interfaces qui ne le sont pas directement', 'correct' => true],
                            ['text' => 'Créer une instance unique', 'correct' => false],
                            ['text' => 'Ajouter des événements', 'correct' => false],
                            ['text' => 'Stocker des données SQL', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern est utile pour construire progressivement un objet complexe ?',
                        'explanation' => 'Builder permet de construire progressivement des objets complexes et de séparer leur construction de leur représentation.',
                        'choices' => [
                            ['text' => 'Builder', 'correct' => true],
                            ['text' => 'Observer', 'correct' => false],
                            ['text' => 'Adapter', 'correct' => false],
                            ['text' => 'Singleton', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern permet de choisir un comportement ou un algorithme interchangeable à l’exécution ?',
                        'explanation' => 'Strategy encapsule plusieurs algorithmes ou comportements interchangeables derrière une abstraction commune.',
                        'choices' => [
                            ['text' => 'Strategy', 'correct' => true],
                            ['text' => 'Factory', 'correct' => false],
                            ['text' => 'Singleton', 'correct' => false],
                            ['text' => 'Adapter', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les Design Patterns ne doivent-ils pas être utilisés systématiquement ?',
                        'explanation' => 'Un Pattern doit répondre à un problème réel. Une utilisation inutile peut ajouter de la complexité sans bénéfice.',
                        'choices' => [
                            ['text' => 'Parce qu’un Pattern inutile peut augmenter la complexité du code', 'correct' => true],
                            ['text' => 'Parce qu’ils sont interdits dans les applications professionnelles', 'correct' => false],
                            ['text' => 'Parce qu’ils empêchent les tests', 'correct' => false],
                            ['text' => 'Parce qu’ils ne fonctionnent qu’avec Java', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel Pattern est souvent utilisé pour fournir une abstraction d’accès aux données ?',
                        'explanation' => 'Repository Pattern encapsule généralement la logique d’accès aux données derrière une interface ou une abstraction.',
                        'choices' => [
                            ['text' => 'Repository', 'correct' => true],
                            ['text' => 'Observer', 'correct' => false],
                            ['text' => 'Decorator', 'correct' => false],
                            ['text' => 'Singleton', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal avantage d’un Design Pattern bien choisi ?',
                        'explanation' => 'Un Pattern adapté fournit une solution éprouvée à un problème de conception récurrent et facilite la communication entre développeurs.',
                        'choices' => [
                            ['text' => 'Fournir une solution de conception éprouvée et compréhensible à un problème récurrent', 'correct' => true],
                            ['text' => 'Garantir automatiquement zéro bug', 'correct' => false],
                            ['text' => 'Éliminer les bases de données', 'correct' => false],
                            ['text' => 'Rendre tout code plus court', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 5 — ARCHITECTURE LOGICIELLE
            // =====================================================
            [
                'title' => 'Architecture logicielle',
                'description' => 'Quiz avancé sur l’architecture des applications, le découplage et les systèmes distribués.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’une architecture logicielle bien conçue ?',
                        'explanation' => 'Une bonne architecture facilite notamment la maintenance, l’évolution, le test et la séparation des responsabilités.',
                        'choices' => [
                            ['text' => 'Faciliter l’évolution, la maintenance, le test et la séparation des responsabilités', 'correct' => true],
                            ['text' => 'Garantir que le projet n’aura qu’un seul fichier', 'correct' => false],
                            ['text' => 'Supprimer les dépendances externes', 'correct' => false],
                            ['text' => 'Éviter toute abstraction', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle caractéristique décrit généralement une architecture en couches (Layered Architecture) ?',
                        'explanation' => 'Une architecture en couches sépare l’application en niveaux ayant des responsabilités différentes.',
                        'choices' => [
                            ['text' => 'Séparer les responsabilités en différentes couches', 'correct' => true],
                            ['text' => 'Mettre tout le code dans un seul contrôleur', 'correct' => false],
                            ['text' => 'Supprimer les interfaces', 'correct' => false],
                            ['text' => 'Interdire les bases de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le principal risque d’un Monolith fortement couplé ?',
                        'explanation' => 'Un Monolith fortement couplé peut devenir difficile à modifier, tester et faire évoluer car les composants dépendent fortement les uns des autres.',
                        'choices' => [
                            ['text' => 'Les changements deviennent difficiles à isoler et à maintenir', 'correct' => true],
                            ['text' => 'Il ne peut jamais être déployé', 'correct' => false],
                            ['text' => 'Il ne peut contenir aucune base de données', 'correct' => false],
                            ['text' => 'Il ne peut jamais utiliser d’API', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’un des avantages potentiels des Microservices ?',
                        'explanation' => 'Les Microservices peuvent permettre de déployer et faire évoluer certains services indépendamment, lorsque l’architecture et les besoins le justifient.',
                        'choices' => [
                            ['text' => 'Permettre une évolution et un déploiement plus indépendants de certains services', 'correct' => true],
                            ['text' => 'Supprimer toute complexité opérationnelle', 'correct' => false],
                            ['text' => 'Garantir qu’une application n’aura qu’une seule base de données', 'correct' => false],
                            ['text' => 'Éliminer le réseau', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel problème supplémentaire apparaît fréquemment avec une architecture distribuée ?',
                        'explanation' => 'Les systèmes distribués doivent gérer les problèmes de réseau, latence, disponibilité, synchronisation et pannes partielles.',
                        'choices' => [
                            ['text' => 'La gestion des communications réseau et des pannes partielles', 'correct' => true],
                            ['text' => 'L’impossibilité d’utiliser des classes', 'correct' => false],
                            ['text' => 'La disparition du stockage', 'correct' => false],
                            ['text' => 'L’impossibilité de faire des tests', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce que le couplage faible (loose coupling) ?',
                        'explanation' => 'Le loose coupling signifie que les composants dépendent le moins possible des détails internes des autres composants.',
                        'choices' => [
                            ['text' => 'Des composants relativement indépendants et dépendant peu des détails internes des autres', 'correct' => true],
                            ['text' => 'Des composants entièrement fusionnés', 'correct' => false],
                            ['text' => 'Une base de données sans index', 'correct' => false],
                            ['text' => 'Un système sans API', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le rôle d’une API Gateway dans une architecture Microservices ?',
                        'explanation' => 'Une API Gateway peut servir de point d’entrée centralisé pour certaines requêtes et prendre en charge des fonctions comme le routage, l’authentification ou la limitation de débit.',
                        'choices' => [
                            ['text' => 'Servir de point d’entrée et centraliser certaines fonctions comme le routage', 'correct' => true],
                            ['text' => 'Remplacer toutes les bases de données', 'correct' => false],
                            ['text' => 'Compiler les Microservices', 'correct' => false],
                            ['text' => 'Créer automatiquement les utilisateurs', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi le caching peut-il améliorer les performances d’une application ?',
                        'explanation' => 'Le cache évite de recalculer ou de récupérer plusieurs fois des données coûteuses à obtenir.',
                        'choices' => [
                            ['text' => 'Il permet de réutiliser des données coûteuses à calculer ou récupérer', 'correct' => true],
                            ['text' => 'Il remplace toujours la base de données', 'correct' => false],
                            ['text' => 'Il garantit toujours une cohérence parfaite', 'correct' => false],
                            ['text' => 'Il supprime les requêtes réseau', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le risque principal d’un cache mal géré ?',
                        'explanation' => 'Un cache mal invalidé peut retourner des données obsolètes et provoquer des incohérences.',
                        'choices' => [
                            ['text' => 'Retourner des données obsolètes ou incohérentes', 'correct' => true],
                            ['text' => 'Supprimer automatiquement les utilisateurs', 'correct' => false],
                            ['text' => 'Empêcher toute requête SQL', 'correct' => false],
                            ['text' => 'Transformer les données en code source', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi séparer la logique métier de la présentation ?',
                        'explanation' => 'La séparation permet de modifier l’interface sans modifier directement la logique métier et facilite les tests et la maintenance.',
                        'choices' => [
                            ['text' => 'Pour réduire le couplage et faciliter la maintenance et les tests', 'correct' => true],
                            ['text' => 'Pour supprimer les modèles', 'correct' => false],
                            ['text' => 'Pour empêcher toute réutilisation', 'correct' => false],
                            ['text' => 'Pour éviter les bases de données', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 6 — BASES DE DONNÉES AVANCÉES
            // =====================================================
            [
                'title' => 'Bases de données avancées',
                'description' => 'Quiz avancé sur les transactions, index, normalisation et optimisation SQL.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Que garantit principalement une transaction correctement utilisée ?',
                        'explanation' => 'Une transaction permet de regrouper plusieurs opérations et de préserver certaines propriétés de cohérence en validant ou annulant l’ensemble selon le résultat.',
                        'choices' => [
                            ['text' => 'Une exécution cohérente d’un ensemble d’opérations avec possibilité de commit ou rollback', 'correct' => true],
                            ['text' => 'Une vitesse constante pour toutes les requêtes', 'correct' => false],
                            ['text' => 'La suppression automatique des doublons', 'correct' => false],
                            ['text' => 'L’absence totale de verrouillage', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Que signifie l’atomicité dans ACID ?',
                        'explanation' => 'Atomicité signifie qu’une transaction est traitée comme une unité : toutes les opérations sont validées ou l’ensemble est annulé.',
                        'choices' => [
                            ['text' => 'Toutes les opérations de la transaction sont validées ou annulées comme une unité', 'correct' => true],
                            ['text' => 'Les données sont toujours stockées en mémoire', 'correct' => false],
                            ['text' => 'Les requêtes sont toujours instantanées', 'correct' => false],
                            ['text' => 'Une table ne contient qu’une ligne', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi un index peut-il accélérer une requête SELECT ?',
                        'explanation' => 'Un index fournit une structure permettant au moteur de trouver certaines données sans parcourir nécessairement toutes les lignes.',
                        'choices' => [
                            ['text' => 'Il permet au moteur de trouver certaines données sans parcourir toutes les lignes', 'correct' => true],
                            ['text' => 'Il supprime automatiquement les données', 'correct' => false],
                            ['text' => 'Il remplace toujours les contraintes', 'correct' => false],
                            ['text' => 'Il empêche toute écriture', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’inconvénient possible d’un trop grand nombre d’index ?',
                        'explanation' => 'Les index occupent de l’espace et doivent être maintenus lors des insertions, suppressions et modifications.',
                        'choices' => [
                            ['text' => 'Ils peuvent augmenter l’espace utilisé et ralentir certaines opérations d’écriture', 'correct' => true],
                            ['text' => 'Ils empêchent toutes les recherches', 'correct' => false],
                            ['text' => 'Ils suppriment les transactions', 'correct' => false],
                            ['text' => 'Ils rendent SQL inutilisable', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal de la normalisation ?',
                        'explanation' => 'La normalisation cherche notamment à réduire la redondance et les anomalies de mise à jour dans une base relationnelle.',
                        'choices' => [
                            ['text' => 'Réduire la redondance et certaines anomalies de données', 'correct' => true],
                            ['text' => 'Augmenter volontairement les doublons', 'correct' => false],
                            ['text' => 'Supprimer les relations', 'correct' => false],
                            ['text' => 'Éviter les clés étrangères', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une requête N+1 ?',
                        'explanation' => 'Le problème N+1 apparaît lorsqu’une requête initiale récupère N éléments puis qu’une requête supplémentaire est exécutée pour chaque élément.',
                        'choices' => [
                            ['text' => 'Une requête initiale suivie d’une requête supplémentaire pour chacun des N éléments', 'correct' => true],
                            ['text' => 'Une requête SQL avec exactement N+1 colonnes', 'correct' => false],
                            ['text' => 'Une erreur de syntaxe SQL', 'correct' => false],
                            ['text' => 'Une transaction contenant une seule opération', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle technique permet souvent de réduire le problème N+1 dans un ORM ?',
                        'explanation' => 'L’eager loading permet de charger les relations nécessaires de manière anticipée, généralement avec un nombre réduit de requêtes.',
                        'choices' => [
                            ['text' => 'Eager loading', 'correct' => true],
                            ['text' => 'Supprimer les relations', 'correct' => false],
                            ['text' => 'Désactiver SQL', 'correct' => false],
                            ['text' => 'Créer une classe abstraite', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est le rôle d’un EXPLAIN en SQL ?',
                        'explanation' => 'EXPLAIN permet d’obtenir des informations sur le plan d’exécution prévu ou utilisé pour une requête.',
                        'choices' => [
                            ['text' => 'Analyser le plan d’exécution d’une requête', 'correct' => true],
                            ['text' => 'Supprimer une table', 'correct' => false],
                            ['text' => 'Créer un utilisateur', 'correct' => false],
                            ['text' => 'Chiffrer automatiquement une base', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi utiliser des paramètres liés dans une requête SQL ?',
                        'explanation' => 'Les paramètres liés séparent les valeurs des instructions SQL et contribuent à prévenir les injections SQL.',
                        'choices' => [
                            ['text' => 'Pour séparer les valeurs des instructions SQL et réduire notamment le risque d’injection', 'correct' => true],
                            ['text' => 'Pour supprimer les index', 'correct' => false],
                            ['text' => 'Pour éviter toutes les transactions', 'correct' => false],
                            ['text' => 'Pour désactiver les contraintes', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les transactions longues peuvent-elles être problématiques ?',
                        'explanation' => 'Des transactions longues peuvent maintenir des verrous plus longtemps, augmenter les conflits et affecter les performances et la disponibilité.',
                        'choices' => [
                            ['text' => 'Elles peuvent maintenir des ressources ou verrous plus longtemps et augmenter les conflits', 'correct' => true],
                            ['text' => 'Elles empêchent toujours toute lecture', 'correct' => false],
                            ['text' => 'Elles suppriment automatiquement les index', 'correct' => false],
                            ['text' => 'Elles rendent SQL invalide', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 7 — API, SÉCURITÉ ET WEB
            // =====================================================
            [
                'title' => 'API, sécurité et développement Web',
                'description' => 'Quiz avancé sur les API, HTTP, authentification et principales vulnérabilités Web.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour récupérer une ressource ?',
                        'explanation' => 'GET est généralement utilisée pour demander une représentation d’une ressource sans modifier son état côté serveur.',
                        'choices' => [
                            ['text' => 'GET', 'correct' => true],
                            ['text' => 'DELETE', 'correct' => false],
                            ['text' => 'PATCH uniquement', 'correct' => false],
                            ['text' => 'CONNECT uniquement', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle méthode HTTP est généralement utilisée pour créer une nouvelle ressource ?',
                        'explanation' => 'POST est couramment utilisée pour soumettre des données afin de créer une nouvelle ressource ou déclencher une opération côté serveur.',
                        'choices' => [
                            ['text' => 'POST', 'correct' => true],
                            ['text' => 'GET', 'correct' => false],
                            ['text' => 'HEAD', 'correct' => false],
                            ['text' => 'OPTIONS', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel code HTTP indique généralement qu’une ressource a été créée avec succès ?',
                        'explanation' => 'Le code 201 Created indique généralement qu’une nouvelle ressource a été créée.',
                        'choices' => [
                            ['text' => '201', 'correct' => true],
                            ['text' => '200', 'correct' => false],
                            ['text' => '404', 'correct' => false],
                            ['text' => '500', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel code HTTP correspond généralement à une requête non authentifiée ?',
                        'explanation' => '401 Unauthorized indique généralement que l’authentification est requise ou invalide. 403 concerne plutôt le refus d’accès malgré une identité reconnue.',
                        'choices' => [
                            ['text' => '401', 'correct' => true],
                            ['text' => '403', 'correct' => false],
                            ['text' => '404', 'correct' => false],
                            ['text' => '500', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle vulnérabilité consiste à injecter du code SQL via des entrées utilisateur mal contrôlées ?',
                        'explanation' => 'SQL Injection permet à un attaquant de modifier la logique d’une requête SQL lorsque les entrées utilisateur sont intégrées de manière non sécurisée.',
                        'choices' => [
                            ['text' => 'SQL Injection', 'correct' => true],
                            ['text' => 'CSRF uniquement', 'correct' => false],
                            ['text' => 'DDoS uniquement', 'correct' => false],
                            ['text' => 'Phishing', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle vulnérabilité permet généralement d’injecter du contenu JavaScript dans une page Web consultée par un utilisateur ?',
                        'explanation' => 'XSS (Cross-Site Scripting) permet l’injection de scripts côté client lorsque les données ne sont pas correctement contrôlées ou encodées.',
                        'choices' => [
                            ['text' => 'XSS', 'correct' => true],
                            ['text' => 'SQL Injection', 'correct' => false],
                            ['text' => 'Buffering', 'correct' => false],
                            ['text' => 'DNS', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel mécanisme aide à se protéger contre certaines attaques CSRF ?',
                        'explanation' => 'Un token CSRF permet de vérifier qu’une requête provient d’une session et d’un contexte attendu plutôt que d’une requête forgée par un autre site.',
                        'choices' => [
                            ['text' => 'CSRF Token', 'correct' => true],
                            ['text' => 'Hash table', 'correct' => false],
                            ['text' => 'Binary Search', 'correct' => false],
                            ['text' => 'CSS', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les mots de passe ne doivent-ils pas être stockés en clair ?',
                        'explanation' => 'En cas de compromission de la base, des mots de passe en clair seraient immédiatement exposés. Ils doivent être stockés sous forme de hash adapté.',
                        'choices' => [
                            ['text' => 'Pour éviter qu’une compromission de la base expose directement les mots de passe', 'correct' => true],
                            ['text' => 'Parce qu’un mot de passe en clair est toujours trop long', 'correct' => false],
                            ['text' => 'Pour accélérer les requêtes SQL', 'correct' => false],
                            ['text' => 'Pour éviter les API', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quelle est la différence générale entre authentification et autorisation ?',
                        'explanation' => 'L’authentification vérifie l’identité d’un utilisateur. L’autorisation détermine ce que cet utilisateur a le droit de faire.',
                        'choices' => [
                            ['text' => 'L’authentification vérifie l’identité, l’autorisation vérifie les permissions', 'correct' => true],
                            ['text' => 'Elles sont exactement identiques', 'correct' => false],
                            ['text' => 'L’autorisation vérifie uniquement le mot de passe', 'correct' => false],
                            ['text' => 'L’authentification concerne uniquement les bases de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi appliquer du rate limiting sur une API publique ?',
                        'explanation' => 'Le rate limiting limite le nombre de requêtes qu’un client peut effectuer sur une période donnée et aide à réduire les abus et certaines formes de surcharge.',
                        'choices' => [
                            ['text' => 'Pour limiter les abus et contrôler la charge générée par les clients', 'correct' => true],
                            ['text' => 'Pour rendre toutes les requêtes plus rapides', 'correct' => false],
                            ['text' => 'Pour supprimer l’authentification', 'correct' => false],
                            ['text' => 'Pour remplacer HTTPS', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 8 — TESTS, PERFORMANCE ET QUALITÉ
            // =====================================================
            [
                'title' => 'Tests, performance et qualité logicielle',
                'description' => 'Quiz avancé sur les tests, la qualité du code, le profiling et les performances.',
                'difficulty' => 'Advanced',

                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’un Unit Test ?',
                        'explanation' => 'Un Unit Test vérifie généralement le comportement d’une petite unité de code de manière isolée.',
                        'choices' => [
                            ['text' => 'Vérifier le comportement d’une petite unité de code de manière isolée', 'correct' => true],
                            ['text' => 'Tester uniquement le réseau', 'correct' => false],
                            ['text' => 'Remplacer la production', 'correct' => false],
                            ['text' => 'Créer une base de données', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un Integration Test ?',
                        'explanation' => 'Un Integration Test vérifie que plusieurs composants fonctionnent correctement ensemble.',
                        'choices' => [
                            ['text' => 'Vérifier le fonctionnement correct de plusieurs composants ensemble', 'correct' => true],
                            ['text' => 'Tester uniquement une variable', 'correct' => false],
                            ['text' => 'Remplacer les Unit Tests', 'correct' => false],
                            ['text' => 'Compiler automatiquement le projet', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Mock dans les tests ?',
                        'explanation' => 'Un Mock est un objet simulé permettant notamment d’isoler le code testé de certaines dépendances.',
                        'choices' => [
                            ['text' => 'Un objet simulé permettant d’isoler une dépendance pendant un test', 'correct' => true],
                            ['text' => 'Une base de données de production', 'correct' => false],
                            ['text' => 'Un compilateur', 'correct' => false],
                            ['text' => 'Un algorithme de tri', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi les tests automatisés sont-ils importants dans un projet professionnel ?',
                        'explanation' => 'Ils permettent de détecter rapidement des régressions et donnent davantage de confiance lors des modifications du code.',
                        'choices' => [
                            ['text' => 'Ils permettent de détecter des régressions et sécurisent les modifications', 'correct' => true],
                            ['text' => 'Ils garantissent l’absence totale de bugs', 'correct' => false],
                            ['text' => 'Ils remplacent complètement la revue de code', 'correct' => false],
                            ['text' => 'Ils rendent les bases de données inutiles', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une régression logicielle ?',
                        'explanation' => 'Une régression survient lorsqu’une modification introduit un problème ou casse un comportement qui fonctionnait auparavant.',
                        'choices' => [
                            ['text' => 'Un comportement qui fonctionnait auparavant et qui est cassé après une modification', 'correct' => true],
                            ['text' => 'Une nouvelle fonctionnalité réussie', 'correct' => false],
                            ['text' => 'Une amélioration des performances', 'correct' => false],
                            ['text' => 'Une migration de base réussie', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel outil ou technique permet d’identifier les parties d’un programme qui consomment le plus de temps ?',
                        'explanation' => 'Le profiling permet de mesurer l’utilisation des ressources et d’identifier les fonctions ou opérations coûteuses.',
                        'choices' => [
                            ['text' => 'Profiling', 'correct' => true],
                            ['text' => 'Inheritance', 'correct' => false],
                            ['text' => 'Serialization', 'correct' => false],
                            ['text' => 'Hashing', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi mesurer les performances avant d’optimiser ?',
                        'explanation' => 'Les mesures permettent d’identifier les véritables goulots d’étranglement et d’éviter d’optimiser des parties qui ne sont pas problématiques.',
                        'choices' => [
                            ['text' => 'Pour identifier les véritables goulots d’étranglement', 'correct' => true],
                            ['text' => 'Pour supprimer les tests', 'correct' => false],
                            ['text' => 'Pour éviter toute utilisation de mémoire', 'correct' => false],
                            ['text' => 'Pour rendre toutes les fonctions récursives', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Qu’est-ce que le Technical Debt ?',
                        'explanation' => 'La dette technique représente notamment les coûts futurs causés par des choix techniques rapides, insuffisamment conçus ou non corrigés.',
                        'choices' => [
                            ['text' => 'Le coût futur potentiel résultant de compromis techniques ou de solutions rapides', 'correct' => true],
                            ['text' => 'Une dette financière envers un fournisseur', 'correct' => false],
                            ['text' => 'Une erreur SQL uniquement', 'correct' => false],
                            ['text' => 'Un type de test', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Pourquoi effectuer une Code Review ?',
                        'explanation' => 'La revue de code permet de détecter des erreurs, améliorer la qualité et partager les connaissances entre développeurs.',
                        'choices' => [
                            ['text' => 'Pour améliorer la qualité du code, détecter des problèmes et partager les connaissances', 'correct' => true],
                            ['text' => 'Pour remplacer tous les tests', 'correct' => false],
                            ['text' => 'Pour supprimer les branches Git', 'correct' => false],
                            ['text' => 'Pour empêcher toute modification future', 'correct' => false],
                        ],
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’un pipeline CI/CD ?',
                        'explanation' => 'CI/CD automatise notamment l’intégration, les tests, la construction et le déploiement des applications.',
                        'choices' => [
                            ['text' => 'Automatiser notamment l’intégration, les tests, la construction et le déploiement', 'correct' => true],
                            ['text' => 'Remplacer le langage de programmation', 'correct' => false],
                            ['text' => 'Supprimer les environnements de test', 'correct' => false],
                            ['text' => 'Éviter toute utilisation de Git', 'correct' => false],
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

                // Évite les doublons de choix lors d'une nouvelle exécution
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