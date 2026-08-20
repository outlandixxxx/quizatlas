<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgorithmsDataStructuresProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algorithms-data-structures')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — ANALYSE ALGORITHMIQUE AVANCÉE & OPTIMISATION
            // ============================================================
            [
                'title' => 'Analyse algorithmique avancée et optimisation',
                'description' => 'Quiz professionnel sur l’analyse avancée, les récurrences, l’optimisation et les compromis algorithmiques.',
                'questions' => [

                    [
                        'question' => 'Quelle est la complexité de T(n) = 3T(n/2) + O(n) selon le Master Theorem ?',
                        'choices' => [
                            'O(n^log₂3)',
                            'O(n)',
                            'O(n log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Ici a=3, b=2 et f(n)=O(n). Comme n^(log₂3) croît plus rapidement que n, la complexité est O(n^log₂3).'
                    ],

                    [
                        'question' => 'Quelle technique permet principalement de résoudre une récurrence en analysant les niveaux successifs de l’arbre des appels ?',
                        'choices' => [
                            'Recursion Tree Method',
                            'Hashing',
                            'Greedy Selection',
                            'Binary Search',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Recursion Tree Method représente les appels récursifs sous forme d’arbre et additionne le coût de chaque niveau.'
                    ],

                    [
                        'question' => 'Un algorithme O(n log n) est exécuté sur deux fois plus de données. Quelle approximation est généralement la plus correcte pour les très grandes valeurs de n ?',
                        'choices' => [
                            'Le temps augmente d’un facteur légèrement supérieur à 2',
                            'Le temps est exactement multiplié par 4',
                            'Le temps est divisé par 2',
                            'Le temps reste constant',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le ratio est approximativement 2 log(2n)/log(n), soit légèrement plus de 2 pour de grandes valeurs de n.'
                    ],

                    [
                        'question' => 'Quel compromis est souvent rencontré lorsqu’on utilise davantage de mémoire pour accélérer un algorithme ?',
                        'choices' => [
                            'Time-Space Trade-off',
                            'FIFO-LIFO Trade-off',
                            'Graph-Tree Trade-off',
                            'Syntax Trade-off',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Time-Space Trade-off consiste à utiliser davantage de mémoire afin de réduire le temps d’exécution.'
                    ],

                    [
                        'question' => 'Quelle technique permet de remplacer certains calculs répétés par un accès direct à des résultats mémorisés ?',
                        'choices' => [
                            'Caching',
                            'Partitioning',
                            'Rotation',
                            'Traversal',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Caching stocke des résultats afin d’éviter de refaire des calculs coûteux.'
                    ],

                    [
                        'question' => 'Quelle différence fondamentale existe entre Worst-Case et Amortized Analysis ?',
                        'choices' => [
                            'L’analyse amortie étudie le coût moyen d’une séquence d’opérations selon une méthode formelle',
                            'L’analyse amortie ignore complètement les opérations coûteuses',
                            'Worst-Case correspond toujours au coût moyen',
                            'Il n’existe aucune différence',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse amortie répartit le coût des opérations coûteuses sur une séquence entière, tandis que le Worst-Case considère le coût maximal d’une opération ou instance.'
                    ],

                    [
                        'question' => 'Quelle structure permet souvent d’obtenir un accès moyen O(1) grâce à une fonction de hachage ?',
                        'choices' => [
                            'Hash Table',
                            'AVL Tree',
                            'Binary Heap',
                            'Linked List',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Table bien dimensionnée fournit généralement des opérations de recherche, insertion et suppression en O(1) en moyenne.'
                    ],

                    [
                        'question' => 'Quelle technique est particulièrement utile pour réduire la profondeur de récursion dans certains algorithmes ?',
                        'choices' => [
                            'Transformer la récursion en approche itérative',
                            'Ajouter davantage de récursion',
                            'Utiliser uniquement une Hash Table',
                            'Trier les appels récursifs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une transformation itérative peut éviter la croissance de la call stack et réduire certains risques de stack overflow.'
                    ],

                    [
                        'question' => 'Quelle complexité spatiale supplémentaire peut devenir problématique dans une récursion profonde de profondeur n ?',
                        'choices' => [
                            'O(n) pour la call stack',
                            'O(1) toujours',
                            'O(log n) toujours',
                            'O(n²) obligatoirement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque appel récursif peut occuper une frame dans la call stack, donnant O(n) espace supplémentaire dans le pire cas.'
                    ],

                    [
                        'question' => 'Pourquoi l’optimisation prématurée est-elle généralement déconseillée ?',
                        'choices' => [
                            'Elle peut augmenter la complexité du code sans preuve qu’elle résout un véritable goulot d’étranglement',
                            'Elle rend toujours le programme plus lent',
                            'Elle interdit l’utilisation des algorithmes',
                            'Elle supprime automatiquement les tests',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une optimisation doit idéalement être guidée par des mesures et l’identification réelle des bottlenecks.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — ADVANCED DATA STRUCTURES
            // ============================================================
            [
                'title' => 'Structures de données avancées',
                'description' => 'Quiz professionnel sur les structures de données avancées et leurs compromis.',
                'questions' => [

                    [
                        'question' => 'Quelle structure est particulièrement adaptée pour représenter des préfixes de chaînes ?',
                        'choices' => [
                            'Trie',
                            'Heap',
                            'Stack',
                            'Queue',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Trie organise les caractères selon leurs préfixes et permet des recherches efficaces basées sur les chaînes.'
                    ],

                    [
                        'question' => 'Quelle complexité possède généralement une recherche dans un Trie en fonction de la longueur L du mot recherché ?',
                        'choices' => [
                            'O(L)',
                            'O(n²)',
                            'O(log n) indépendamment de L',
                            'O(2^L)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche parcourt généralement un nœud par caractère du mot, donnant O(L).'
                    ],

                    [
                        'question' => 'Quel est l’inconvénient classique d’un Trie non compressé ?',
                        'choices' => [
                            'Une consommation mémoire importante',
                            'Une recherche toujours O(n²)',
                            'L’impossibilité de stocker des chaînes',
                            'L’absence totale de structure hiérarchique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Trie peut contenir beaucoup de nœuds et de références, particulièrement lorsque l’alphabet est grand.'
                    ],

                    [
                        'question' => 'Quelle structure est utilisée pour effectuer des opérations Union et Find efficacement ?',
                        'choices' => [
                            'Disjoint Set Union',
                            'Trie',
                            'Deque',
                            'Binary Heap uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Disjoint Set Union, également appelée Union-Find, gère des ensembles disjoints avec les opérations Union et Find.'
                    ],

                    [
                        'question' => 'Quelles optimisations rendent Union-Find particulièrement efficace ?',
                        'choices' => [
                            'Path Compression et Union by Rank/Size',
                            'Binary Search et DFS',
                            'Heapify et Partition',
                            'Memoization uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La compression des chemins et l’union par rang ou taille réduisent fortement la hauteur des arbres.'
                    ],

                    [
                        'question' => 'Quelle complexité amortie est généralement associée à Union-Find avec Path Compression et Union by Rank ?',
                        'choices' => [
                            'O(α(n))',
                            'O(n)',
                            'O(log² n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité amortie est O(α(n)), où α est l’inverse de la fonction d’Ackermann et croît extrêmement lentement.'
                    ],

                    [
                        'question' => 'Quel avantage principal possède une Doubly Linked List par rapport à une Singly Linked List ?',
                        'choices' => [
                            'Elle permet de parcourir les éléments dans les deux directions',
                            'Elle trie automatiquement les données',
                            'Elle utilise toujours moins de mémoire',
                            'Elle supprime tous les pointeurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque nœud possède généralement un pointeur vers le précédent et le suivant.'
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement adaptée à l’implémentation d’un LRU Cache ?',
                        'choices' => [
                            'Hash Map + Doubly Linked List',
                            'Stack seule',
                            'Binary Search seule',
                            'Graph seul',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Hash Map fournit un accès rapide et la Doubly Linked List permet de modifier efficacement l’ordre d’utilisation.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’un Bloom Filter ?',
                        'choices' => [
                            'Tester rapidement l’appartenance probable d’un élément avec une possibilité de faux positifs',
                            'Garantir l’absence de faux positifs',
                            'Trier une collection',
                            'Calculer un plus court chemin',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Bloom Filter utilise peu de mémoire et permet de vérifier rapidement si un élément est probablement présent, mais peut produire des faux positifs.'
                    ],

                    [
                        'question' => 'Quelle affirmation est correcte concernant un Bloom Filter ?',
                        'choices' => [
                            'Il peut avoir des faux positifs mais pas de faux négatifs dans son fonctionnement standard',
                            'Il peut avoir uniquement des faux négatifs',
                            'Il garantit toujours la réponse exacte',
                            'Il ne nécessite aucune fonction de hachage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un élément absent peut apparaître comme potentiellement présent, mais un élément réellement présent ne doit pas être déclaré absent dans le modèle standard.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — GRAPH ALGORITHMS
            // ============================================================
            [
                'title' => 'Graph Algorithms professionnels',
                'description' => 'Quiz professionnel sur les algorithmes avancés de Graphs et les problèmes de chemins.',
                'questions' => [

                    [
                        'question' => 'Quel algorithme calcule les plus courts chemins entre toutes les paires de sommets ?',
                        'choices' => [
                            'Floyd-Warshall',
                            'Dijkstra uniquement depuis une source',
                            'Kruskal',
                            'Prim',
                        ],
                        'correct' => 0,
                        'explanation' => 'Floyd-Warshall résout le problème All-Pairs Shortest Paths.'
                    ],

                    [
                        'question' => 'Quelle est la complexité temporelle classique de Floyd-Warshall ?',
                        'choices' => [
                            'O(V³)',
                            'O(V²)',
                            'O(E log V)',
                            'O(V log V)',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’algorithme utilise trois niveaux de boucles sur les sommets, donnant O(V³).'
                    ],

                    [
                        'question' => 'Floyd-Warshall peut-il gérer des arêtes de poids négatif ?',
                        'choices' => [
                            'Oui, tant qu’il n’existe pas de cycle négatif pertinent pour le problème',
                            'Non, jamais',
                            'Uniquement pour les Graphs non pondérés',
                            'Uniquement avec un Heap',
                        ],
                        'correct' => 0,
                        'explanation' => 'Floyd-Warshall peut traiter les poids négatifs, mais les cycles négatifs rendent les distances concernées non définies.'
                    ],

                    [
                        'question' => 'Quelle technique utilise des relaxation successives d’arêtes dans Bellman-Ford ?',
                        'choices' => [
                            'Relaxation',
                            'Rotation',
                            'Partition',
                            'Hashing',
                        ],
                        'correct' => 0,
                        'explanation' => 'Bellman-Ford améliore progressivement les distances en relaxant les arêtes.'
                    ],

                    [
                        'question' => 'Dans Dijkstra avec une Binary Heap, quelle complexité est généralement obtenue pour un Graph représenté par une Adjacency List ?',
                        'choices' => [
                            'O((V + E) log V)',
                            'O(V³)',
                            'O(1)',
                            'O(E²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec une Priority Queue basée sur une Binary Heap, la complexité classique est O((V+E) log V).'
                    ],

                    [
                        'question' => 'Quel algorithme peut détecter les Strongly Connected Components ?',
                        'choices' => [
                            'Tarjan',
                            'Kruskal uniquement',
                            'Prim uniquement',
                            'Binary Search',
                        ],
                        'correct' => 0,
                        'explanation' => 'Tarjan propose un algorithme linéaire en V+E pour trouver les Strongly Connected Components.'
                    ],

                    [
                        'question' => 'Quelle propriété définit principalement une Strongly Connected Component dans un Directed Graph ?',
                        'choices' => [
                            'Chaque sommet est atteignable depuis chaque autre sommet du composant',
                            'Tous les sommets ont le même degré',
                            'Le Graph doit être non pondéré',
                            'Le Graph doit être un Tree',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une SCC, chaque sommet est accessible depuis chaque autre sommet en suivant les directions des arêtes.'
                    ],

                    [
                        'question' => 'Quelle structure est souvent utilisée dans Tarjan pour gérer les sommets encore actifs ?',
                        'choices' => [
                            'Stack',
                            'Heap uniquement',
                            'Queue uniquement',
                            'Trie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Tarjan utilise notamment une Stack pour maintenir les sommets actifs pendant le DFS.'
                    ],

                    [
                        'question' => 'Quel problème est résolu par Maximum Flow ?',
                        'choices' => [
                            'Déterminer le débit maximal possible d’une source vers une destination dans un réseau capacitaire',
                            'Trier les sommets',
                            'Trouver uniquement un MST',
                            'Calculer une Hash Function',
                        ],
                        'correct' => 0,
                        'explanation' => 'Maximum Flow cherche le débit maximal pouvant circuler d’une source à un puits sous les contraintes de capacité.'
                    ],

                    [
                        'question' => 'Quel algorithme classique résout le Maximum Flow ?',
                        'choices' => [
                            'Ford-Fulkerson',
                            'Merge Sort',
                            'Binary Search',
                            'Floyd Cycle Detection',
                        ],
                        'correct' => 0,
                        'explanation' => 'Ford-Fulkerson est une méthode classique pour résoudre le problème de Maximum Flow.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — DYNAMIC PROGRAMMING AVANCÉE
            // ============================================================
            [
                'title' => 'Dynamic Programming avancée',
                'description' => 'Quiz professionnel sur les formulations avancées de Dynamic Programming.',
                'questions' => [

                    [
                        'question' => 'Quelle caractéristique permet généralement de reconnaître une DP avec état sur deux dimensions ?',
                        'choices' => [
                            'La solution dépend de deux paramètres d’état indépendants',
                            'Le problème possède toujours deux tableaux triés',
                            'Il existe exactement deux solutions',
                            'Le problème nécessite toujours un Graph',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une DP à deux dimensions apparaît lorsque l’état est défini par deux paramètres, par exemple position et capacité.'
                    ],

                    [
                        'question' => 'Quel problème classique utilise une DP bidimensionnelle pour comparer deux chaînes ?',
                        'choices' => [
                            'Longest Common Subsequence',
                            'Quickselect',
                            'Dijkstra',
                            'Kruskal',
                        ],
                        'correct' => 0,
                        'explanation' => 'LCS utilise généralement un état basé sur les positions dans les deux chaînes.'
                    ],

                    [
                        'question' => 'Quelle technique peut réduire une DP O(nm) en mémoire lorsqu’un état dépend uniquement de la ligne précédente ?',
                        'choices' => [
                            'Rolling Array',
                            'Binary Search',
                            'Hash Collision',
                            'Graph Coloring',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Rolling Array permet de conserver uniquement les lignes nécessaires au calcul.'
                    ],

                    [
                        'question' => 'Quel problème est souvent modélisé comme un shortest path dans un DAG afin d’utiliser une approche DP ?',
                        'choices' => [
                            'Certaines optimisations sur des graphes acycliques',
                            'Bubble Sort',
                            'Hashing',
                            'Heap Construction',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un DAG, les sommets peuvent être traités dans un ordre topologique et les distances peuvent être calculées par DP.'
                    ],

                    [
                        'question' => 'Quel principe permet de reconstruire une solution après avoir calculé une table DP ?',
                        'choices' => [
                            'Conserver ou recalculer les décisions ayant conduit à chaque état',
                            'Supprimer toute la table',
                            'Trier les valeurs finales',
                            'Utiliser uniquement BFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pour reconstruire la solution, on conserve généralement les choix précédents ou on les déduit à partir des valeurs DP.'
                    ],

                    [
                        'question' => 'Quel problème cherche une sous-séquence de longueur maximale tout en respectant un ordre croissant ?',
                        'choices' => [
                            'Longest Increasing Subsequence',
                            'Maximum Flow',
                            'Minimum Spanning Tree',
                            'Topological Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'LIS cherche la plus longue sous-séquence dont les éléments sont dans un ordre strictement croissant selon la définition utilisée.'
                    ],

                    [
                        'question' => 'Quelle complexité peut atteindre une solution optimisée classique de LIS utilisant Binary Search ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²) uniquement',
                            'O(log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une approche utilisant Binary Search pour maintenir les meilleures longueurs atteint O(n log n).'
                    ],

                    [
                        'question' => 'Dans une DP, qu’appelle-t-on un état ?',
                        'choices' => [
                            'Une représentation suffisamment complète d’un sous-problème',
                            'Une variable aléatoire uniquement',
                            'Un élément obligatoirement dans une Queue',
                            'Une fonction de tri',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un état représente les informations nécessaires pour définir le sous-problème et calculer sa transition.'
                    ],

                    [
                        'question' => 'Pourquoi la définition correcte de l’état est-elle essentielle en Dynamic Programming ?',
                        'choices' => [
                            'Elle détermine les sous-problèmes, les transitions et la possibilité de réutiliser les résultats',
                            'Elle permet uniquement de choisir le langage',
                            'Elle détermine la couleur de l’interface',
                            'Elle évite automatiquement toutes les erreurs de syntaxe',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une mauvaise définition d’état peut rendre la transition incorrecte ou empêcher la réutilisation efficace des sous-problèmes.'
                    ],

                    [
                        'question' => 'Quelle propriété permet à une DP de construire une solution optimale à partir de sous-solutions optimales ?',
                        'choices' => [
                            'Optimal Substructure',
                            'Hashing',
                            'Randomization',
                            'FIFO',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’Optimal Substructure est une propriété fondamentale des problèmes adaptés à Dynamic Programming.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — STRING ALGORITHMS
            // ============================================================
            [
                'title' => 'String Algorithms professionnels',
                'description' => 'Quiz professionnel sur les algorithmes de recherche et de traitement des chaînes.',
                'questions' => [

                    [
                        'question' => 'Quel algorithme recherche efficacement un pattern dans un texte en utilisant une table de préfixes ?',
                        'choices' => [
                            'KMP',
                            'Dijkstra',
                            'Kruskal',
                            'Heap Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'KMP utilise une table représentant les préfixes propres qui sont également suffixes afin d’éviter certains retours inutiles dans le texte.'
                    ],

                    [
                        'question' => 'Que représente principalement la table LPS de KMP ?',
                        'choices' => [
                            'Le plus long Proper Prefix qui est aussi un Suffix',
                            'La longueur totale du texte',
                            'La position du plus grand caractère',
                            'Le nombre de Graphs',
                        ],
                        'correct' => 0,
                        'explanation' => 'LPS signifie Longest Proper Prefix which is also a Suffix.'
                    ],

                    [
                        'question' => 'Quelle complexité temporelle possède KMP pour rechercher un pattern de longueur m dans un texte de longueur n ?',
                        'choices' => [
                            'O(n + m)',
                            'O(nm) toujours',
                            'O(n²m)',
                            'O(log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La construction de LPS prend O(m) et la recherche prend O(n), donnant O(n+m).'
                    ],

                    [
                        'question' => 'Quel algorithme utilise généralement une fonction de hachage pour comparer des patterns ?',
                        'choices' => [
                            'Rabin-Karp',
                            'KMP',
                            'Dijkstra',
                            'Prim',
                        ],
                        'correct' => 0,
                        'explanation' => 'Rabin-Karp utilise des valeurs de hachage pour comparer rapidement le pattern avec des fenêtres du texte.'
                    ],

                    [
                        'question' => 'Quel problème peut être résolu efficacement avec un Suffix Array ?',
                        'choices' => [
                            'Certaines recherches et comparaisons de sous-chaînes',
                            'Uniquement le Minimum Spanning Tree',
                            'Uniquement le tri numérique',
                            'Uniquement la gestion mémoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Suffix Array organise les suffixes d’une chaîne et permet de nombreuses opérations efficaces sur les sous-chaînes.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal d’un Suffix Tree ?',
                        'choices' => [
                            'Représenter efficacement les suffixes et faciliter plusieurs opérations sur les sous-chaînes',
                            'Remplacer une Queue',
                            'Trier des Graphs',
                            'Calculer automatiquement les nombres premiers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les Suffix Trees permettent de résoudre efficacement plusieurs problèmes de recherche de motifs et de sous-chaînes.'
                    ],

                    [
                        'question' => 'Quel problème cherche le plus long segment de caractères qui est un palindrome ?',
                        'choices' => [
                            'Longest Palindromic Substring',
                            'Maximum Flow',
                            'Minimum Spanning Tree',
                            'Topological Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'Longest Palindromic Substring cherche le plus long substring qui se lit identiquement dans les deux directions.'
                    ],

                    [
                        'question' => 'Pourquoi comparer deux chaînes caractère par caractère peut-il devenir coûteux à grande échelle ?',
                        'choices' => [
                            'Le nombre de comparaisons peut devenir proportionnel au produit des longueurs',
                            'Les chaînes sont toujours O(1)',
                            'Les caractères n’occupent aucune mémoire',
                            'Les chaînes ne peuvent pas être comparées',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans certaines recherches naïves, chaque position du texte peut entraîner plusieurs comparaisons avec le pattern.'
                    ],

                    [
                        'question' => 'Quelle technique peut être utilisée pour accélérer la comparaison de grandes chaînes dans certains contextes ?',
                        'choices' => [
                            'Hashing',
                            'Bubble Sort',
                            'Heapify',
                            'BFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Hashing permet de comparer rapidement certaines représentations de chaînes, notamment avec des techniques comme le Rolling Hash.'
                    ],

                    [
                        'question' => 'Quel concept est central dans le Rolling Hash ?',
                        'choices' => [
                            'Mettre à jour efficacement le hash d’une fenêtre lorsqu’elle se déplace',
                            'Trier tous les caractères',
                            'Construire un AVL Tree',
                            'Effectuer un DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Rolling Hash permet de calculer le hash d’une nouvelle fenêtre à partir du hash précédent sans recalculer toute la fenêtre.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — RANGE QUERIES & ADVANCED TREES
            // ============================================================
            [
                'title' => 'Range Queries et structures avancées',
                'description' => 'Quiz professionnel sur Segment Trees, Fenwick Trees et les structures destinées aux requêtes sur intervalles.',
                'questions' => [

                    [
                        'question' => 'Quelle structure est particulièrement adaptée aux Range Queries et aux mises à jour ponctuelles ?',
                        'choices' => [
                            'Segment Tree',
                            'Stack',
                            'Queue',
                            'Linked List simple',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Segment Tree permet de répondre efficacement à de nombreuses requêtes sur des intervalles tout en supportant des mises à jour.'
                    ],

                    [
                        'question' => 'Quelle complexité typique possède une Range Query dans un Segment Tree correctement construit ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(1) toujours',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une requête d’intervalle standard dans un Segment Tree est généralement O(log n) pour certaines opérations associatives.'
                    ],

                    [
                        'question' => 'Quelle complexité possède généralement une mise à jour ponctuelle dans un Segment Tree ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La mise à jour modifie les nœuds correspondant au chemin de la feuille vers la racine.'
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement efficace pour certaines Prefix Sum Queries avec mises à jour ponctuelles ?',
                        'choices' => [
                            'Fenwick Tree',
                            'Trie',
                            'Stack',
                            'Graph',
                        ],
                        'correct' => 0,
                        'explanation' => 'Fenwick Tree, ou Binary Indexed Tree, permet des Prefix Sum Queries et des updates efficaces.'
                    ],

                    [
                        'question' => 'Quelle complexité possède généralement une opération dans un Fenwick Tree ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les opérations principales d’un Fenwick Tree exploitent les bits de l’index et s’effectuent en O(log n).'
                    ],

                    [
                        'question' => 'Quelle opération bitwise est souvent utilisée dans un Fenwick Tree pour progresser vers le parent ?',
                        'choices' => [
                            'i += i & -i',
                            'i *= 2 uniquement',
                            'i >>= 3 uniquement',
                            'i ^= n uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’expression i += i & -i permet de passer au prochain index pertinent lors d’une mise à jour.'
                    ],

                    [
                        'question' => 'Quel avantage principal possède un Segment Tree avec Lazy Propagation ?',
                        'choices' => [
                            'Gérer efficacement certaines mises à jour sur des intervalles entiers',
                            'Supprimer tous les nœuds',
                            'Transformer le tableau en Hash Table',
                            'Éviter toute utilisation de mémoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lazy Propagation permet de retarder certaines mises à jour afin d’éviter de modifier immédiatement tous les éléments d’un intervalle.'
                    ],

                    [
                        'question' => 'Pourquoi la Lazy Propagation améliore-t-elle les performances ?',
                        'choices' => [
                            'Elle évite de propager immédiatement une mise à jour à tous les éléments concernés',
                            'Elle supprime les requêtes',
                            'Elle trie le Segment Tree',
                            'Elle transforme chaque opération en O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les modifications sont stockées au niveau des nœuds concernés et propagées uniquement lorsqu’elles deviennent nécessaires.'
                    ],

                    [
                        'question' => 'Quelle structure permet de répondre efficacement à certaines requêtes de minimum ou maximum sur un intervalle statique ?',
                        'choices' => [
                            'Sparse Table',
                            'Stack uniquement',
                            'Queue uniquement',
                            'Linked List',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Sparse Table est particulièrement adaptée aux Range Queries sur des données statiques.'
                    ],

                    [
                        'question' => 'Quel compromis caractérise une Sparse Table ?',
                        'choices' => [
                            'Prétraitement et mémoire plus importants pour obtenir des requêtes très rapides sur des données statiques',
                            'Elle ne nécessite aucun prétraitement',
                            'Elle est destinée uniquement aux Graphs',
                            'Elle ne peut stocker que deux valeurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Sparse Table utilise un prétraitement important mais permet des requêtes rapides lorsque les données ne changent pas.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — AMORTIZED & RANDOMIZED ALGORITHMS
            // ============================================================
            [
                'title' => 'Amortized Analysis et Randomized Algorithms',
                'description' => 'Quiz professionnel sur l’analyse amortie et les algorithmes probabilistes.',
                'questions' => [

                    [
                        'question' => 'Quelle méthode d’analyse amortie attribue un coût artificiel aux opérations afin de payer les opérations futures ?',
                        'choices' => [
                            'Accounting Method',
                            'Binary Search Method',
                            'Greedy Method',
                            'Hash Method',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’Accounting Method attribue des coûts amortis et peut accumuler un crédit pour payer certaines opérations futures.'
                    ],

                    [
                        'question' => 'Quelle méthode d’analyse amortie utilise une fonction potentielle représentant l’énergie accumulée dans une structure ?',
                        'choices' => [
                            'Potential Method',
                            'Sorting Method',
                            'Graph Method',
                            'Partition Method',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Potential Method définit une fonction potentielle permettant de répartir les coûts entre les opérations.'
                    ],

                    [
                        'question' => 'Pourquoi un Dynamic Array possède-t-il un coût amorti O(1) pour append ?',
                        'choices' => [
                            'Les redimensionnements coûteux sont suffisamment rares pour que leur coût soit réparti sur les insertions',
                            'Chaque insertion est toujours réellement O(1)',
                            'Le tableau ne se redimensionne jamais',
                            'La mémoire est infinie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Certaines insertions provoquent une copie O(n), mais ces redimensionnements sont suffisamment espacés pour obtenir O(1) amorti.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Las Vegas Algorithm ?',
                        'choices' => [
                            'Un algorithme dont le résultat est toujours correct mais dont le temps d’exécution peut être aléatoire',
                            'Un algorithme toujours incorrect',
                            'Un algorithme sans hasard',
                            'Un algorithme qui ne termine jamais',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Las Vegas Algorithm utilise le hasard mais garantit généralement la correction du résultat.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Monte Carlo Algorithm ?',
                        'choices' => [
                            'Un algorithme dont le temps est généralement contrôlé mais qui peut avoir une probabilité d’erreur',
                            'Un algorithme toujours parfaitement déterministe',
                            'Un algorithme qui ne termine jamais',
                            'Un algorithme uniquement destiné aux Graphs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les algorithmes Monte Carlo peuvent produire une réponse incorrecte avec une certaine probabilité selon leur conception.'
                    ],

                    [
                        'question' => 'Pourquoi Randomized Quick Sort peut-il avoir de bonnes performances en pratique ?',
                        'choices' => [
                            'Le choix aléatoire du pivot réduit la probabilité de partitions systématiquement défavorables',
                            'Il garantit toujours O(n)',
                            'Il ne partitionne jamais',
                            'Il trie les données sans comparaison',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le pivot aléatoire rend moins probable la répétition d’un mauvais schéma de partition.'
                    ],

                    [
                        'question' => 'Quelle est la complexité espérée de Randomized Quick Sort ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²) toujours',
                            'O(n)',
                            'O(log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec un choix aléatoire du pivot, la complexité espérée est O(n log n).'
                    ],

                    [
                        'question' => 'Quel avantage possède un Randomized Algorithm face à certaines entrées adversariales ?',
                        'choices' => [
                            'L’aléatoire peut rendre plus difficile la construction systématique d’une entrée défavorable',
                            'Il garantit toujours une complexité constante',
                            'Il élimine toute utilisation de mémoire',
                            'Il supprime tous les cas limites',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’aléatoire peut empêcher un adversaire de prédire facilement les choix internes de l’algorithme.'
                    ],

                    [
                        'question' => 'Quel concept est utilisé pour analyser le comportement moyen d’un algorithme Randomized ?',
                        'choices' => [
                            'Expected Complexity',
                            'FIFO Complexity',
                            'Tree Height uniquement',
                            'Static Complexity',
                        ],
                        'correct' => 0,
                        'explanation' => 'Expected Complexity analyse le coût attendu en tenant compte des résultats possibles du hasard.'
                    ],

                    [
                        'question' => 'Quelle propriété doit être considérée lorsqu’un algorithme probabiliste est utilisé dans un système critique ?',
                        'choices' => [
                            'La probabilité d’erreur et les garanties associées',
                            'Uniquement le nom de l’algorithme',
                            'Uniquement la taille du code',
                            'Uniquement le langage utilisé',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un système critique doit connaître et contrôler les garanties probabilistes de l’algorithme utilisé.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — ALGORITHM DESIGN & PROBLEM SOLVING
            // ============================================================
            [
                'title' => 'Algorithm Design et résolution de problèmes',
                'description' => 'Quiz professionnel intégrant plusieurs stratégies de conception et de résolution algorithmique.',
                'questions' => [

                    [
                        'question' => 'Quelle question doit généralement être posée en premier lors de l’analyse d’un problème algorithmique ?',
                        'choices' => [
                            'Quelles sont les contraintes sur les entrées et la taille du problème ?',
                            'Quel langage possède le plus beau syntaxe ?',
                            'Quel framework utiliser ?',
                            'Quelle couleur utiliser pour l’interface ?',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les contraintes déterminent souvent les structures et algorithmes réalisables.'
                    ],

                    [
                        'question' => 'Pourquoi les contraintes de temps sont-elles importantes lors du choix d’un algorithme ?',
                        'choices' => [
                            'Elles permettent d’éliminer les complexités qui seraient trop coûteuses pour la taille des données',
                            'Elles déterminent uniquement la mémoire',
                            'Elles déterminent le langage de programmation',
                            'Elles n’ont aucun impact',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un algorithme correct mais trop lent n’est pas adapté aux contraintes du problème.'
                    ],

                    [
                        'question' => 'Quelle stratégie consiste à diviser un problème en sous-problèmes indépendants, les résoudre puis combiner leurs résultats ?',
                        'choices' => [
                            'Divide and Conquer',
                            'Greedy',
                            'Hashing',
                            'Backtracking uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Divide and Conquer divise le problème, résout les sous-problèmes puis combine leurs résultats.'
                    ],

                    [
                        'question' => 'Quel algorithme classique est un exemple de Divide and Conquer ?',
                        'choices' => [
                            'Merge Sort',
                            'Dijkstra',
                            'Kruskal',
                            'Counting Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'Merge Sort divise le tableau en deux parties, les trie récursivement puis les fusionne.'
                    ],

                    [
                        'question' => 'Quelle technique est souvent utilisée pour transformer un problème complexe en un problème de décision plus facile à analyser ?',
                        'choices' => [
                            'Decision Version',
                            'Random Shuffle',
                            'Heapify',
                            'Hash Collision',
                        ],
                        'correct' => 0,
                        'explanation' => 'La formulation en problème de décision demande généralement si une solution répondant à une propriété existe.'
                    ],

                    [
                        'question' => 'Que signifie qu’un problème est NP-complet ?',
                        'choices' => [
                            'Il appartient à NP et est au moins aussi difficile que tous les problèmes de NP via des réductions polynomiales',
                            'Il peut toujours être résolu en O(1)',
                            'Il est nécessairement impossible à résoudre',
                            'Il appartient obligatoirement à P',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un problème NP-complet appartient à NP et chaque problème de NP peut lui être réduit en temps polynomial.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’une Polynomial Reduction entre deux problèmes ?',
                        'choices' => [
                            'Montrer qu’une solution efficace de l’un pourrait fournir une solution efficace de l’autre',
                            'Trier automatiquement les deux problèmes',
                            'Réduire toujours la mémoire à O(1)',
                            'Transformer obligatoirement un problème en Graph',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une réduction polynomiale permet de comparer la difficulté computationnelle de problèmes.'
                    ],

                    [
                        'question' => 'Quelle approche est souvent utilisée lorsqu’un problème présente de nombreuses possibilités mais que certaines peuvent être éliminées tôt ?',
                        'choices' => [
                            'Backtracking avec Pruning',
                            'Bubble Sort',
                            'Binary Search uniquement',
                            'Hashing uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Backtracking avec Pruning permet de réduire l’espace de recherche en abandonnant rapidement les branches impossibles.'
                    ],

                    [
                        'question' => 'Lorsqu’une solution doit être optimale et que les sous-problèmes se chevauchent, quelle approche doit être envisagée ?',
                        'choices' => [
                            'Dynamic Programming',
                            'Randomized Quick Sort',
                            'Binary Search uniquement',
                            'Stack uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les sous-problèmes qui se chevauchent et l’Optimal Substructure sont des indications fortes en faveur de Dynamic Programming.'
                    ],

                    [
                        'question' => 'Quelle est une bonne pratique professionnelle avant de considérer un algorithme comme terminé ?',
                        'choices' => [
                            'Tester les cas limites, mesurer les performances et vérifier la complexité',
                            'Tester uniquement une entrée normale',
                            'Supprimer les cas limites',
                            'Ignorer les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une validation professionnelle doit couvrir la correction, les cas limites et les performances par rapport aux contraintes.'
                    ],
                ],
            ],
        ];

        $this->seedQuizzes($subject, $quizzes);
    }

    private function seedQuizzes(Subject $subject, array $quizzes): void
    {
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
                    'difficulty' => 'Professional',
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

                // Supprimer les anciennes choices afin que le seeder
                // puisse être relancé sans créer de doublons.
                $question->choices()->delete();

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                // Mélange des réponses.
                // La propriété is_correct reste attachée à la bonne réponse.
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