<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class AlgorithmsDataStructuresIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algorithms-data-structures')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — COMPLEXITÉ ALGORITHMIQUE
            // ============================================================
            [
                'title' => 'Analyse de la complexité algorithmique',
                'description' => 'Quiz intermédiaire sur la complexité temporelle et spatiale des algorithmes.',
                'questions' => [

                    [
                        'question' => 'Quelle est la complexité d’une boucle qui parcourt un tableau de n éléments une seule fois ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque élément est parcouru une seule fois. Le nombre d’opérations augmente donc linéairement avec n.'
                    ],

                    [
                        'question' => 'Quelle est la complexité de deux boucles imbriquées parcourant chacune n éléments ?',
                        'choices' => [
                            'O(n²)',
                            'O(n)',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La première boucle effectue n itérations et la seconde n itérations pour chacune d’elles, donnant n × n opérations.'
                    ],

                    [
                        'question' => 'Quelle complexité correspond à une recherche binaire sur un tableau trié ?',
                        'choices' => [
                            'O(log n)',
                            'O(n)',
                            'O(n²)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'À chaque étape, la recherche binaire élimine environ la moitié des éléments restants.'
                    ],

                    [
                        'question' => 'Quelle complexité représente généralement un accès direct à un élément d’un Array par son index ?',
                        'choices' => [
                            'O(1)',
                            'O(n)',
                            'O(log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’accès à une position connue d’un Array est généralement constant.'
                    ],

                    [
                        'question' => 'Quelle complexité est généralement préférable lorsque n devient très grand ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(n³)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(log n) croît beaucoup plus lentement que les complexités quadratiques, cubiques ou exponentielles.'
                    ],

                    [
                        'question' => 'Que représente principalement la complexité spatiale ?',
                        'choices' => [
                            'La mémoire supplémentaire utilisée par l’algorithme',
                            'Le nombre de lignes de code',
                            'La vitesse du processeur',
                            'Le nombre de requêtes réseau',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité spatiale mesure principalement la quantité de mémoire supplémentaire nécessaire à l’exécution.'
                    ],

                    [
                        'question' => 'Quelle notation est utilisée pour décrire généralement une borne supérieure asymptotique ?',
                        'choices' => [
                            'Big O',
                            'Big X',
                            'SQL',
                            'FIFO',
                        ],
                        'correct' => 0,
                        'explanation' => 'La notation Big O est couramment utilisée pour exprimer une borne supérieure asymptotique.'
                    ],

                    [
                        'question' => 'Quelle est la complexité d’une boucle qui divise n par 2 à chaque itération ?',
                        'choices' => [
                            'O(log n)',
                            'O(n)',
                            'O(n²)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si la taille du problème est divisée par deux à chaque étape, le nombre d’étapes est logarithmique.'
                    ],

                    [
                        'question' => 'Quelle complexité est généralement associée à un algorithme qui contient trois boucles imbriquées de taille n ?',
                        'choices' => [
                            'O(n³)',
                            'O(n)',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Trois boucles imbriquées de n itérations peuvent produire n × n × n opérations.'
                    ],

                    [
                        'question' => 'Pourquoi ignore-t-on généralement les constantes dans la notation Big O ?',
                        'choices' => [
                            'Parce que l’analyse s’intéresse principalement à la croissance lorsque n devient grand',
                            'Parce que les constantes n’existent pas en programmation',
                            'Parce que les constantes sont toujours égales à zéro',
                            'Parce que Big O mesure uniquement la mémoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Big O s’intéresse au comportement asymptotique. Les facteurs constants deviennent moins importants lorsque la taille de l’entrée augmente fortement.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — RECHERCHE BINAIRE
            // ============================================================
            [
                'title' => 'Recherche binaire',
                'description' => 'Quiz intermédiaire sur la recherche binaire et ses conditions d’utilisation.',
                'questions' => [

                    [
                        'question' => 'Quelle condition est généralement nécessaire pour appliquer efficacement une recherche binaire ?',
                        'choices' => [
                            'Les données doivent être triées',
                            'Les données doivent être aléatoires',
                            'Les données doivent être stockées dans une Stack',
                            'Les données doivent être stockées dans une Queue',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche binaire exploite l’ordre des données pour éliminer la moitié de l’espace de recherche à chaque étape.'
                    ],

                    [
                        'question' => 'Quel est le principe principal de la recherche binaire ?',
                        'choices' => [
                            'Comparer la valeur recherchée avec l’élément central',
                            'Examiner tous les éléments successivement',
                            'Trier le tableau à chaque recherche',
                            'Supprimer la moitié du tableau physiquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche binaire compare la valeur recherchée avec l’élément central afin de déterminer quelle moitié conserver.'
                    ],

                    [
                        'question' => 'Quelle est la complexité temporelle typique de la recherche binaire ?',
                        'choices' => [
                            'O(log n)',
                            'O(n)',
                            'O(n²)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La zone de recherche est divisée par deux à chaque étape, ce qui donne une complexité logarithmique.'
                    ],

                    [
                        'question' => 'Que se passe-t-il si la valeur recherchée est inférieure à l’élément central ?',
                        'choices' => [
                            'On continue la recherche dans la moitié gauche',
                            'On continue uniquement dans la moitié droite',
                            'On arrête toujours la recherche',
                            'On trie à nouveau tout le tableau',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un tableau trié par ordre croissant, une valeur plus petite que l’élément central se trouve potentiellement dans la moitié gauche.'
                    ],

                    [
                        'question' => 'Que se passe-t-il si la valeur recherchée est supérieure à l’élément central ?',
                        'choices' => [
                            'On continue dans la moitié droite',
                            'On continue dans la moitié gauche',
                            'On supprime le tableau',
                            'On lance une Stack',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un tableau trié croissant, une valeur supérieure au milieu se trouve potentiellement dans la moitié droite.'
                    ],

                    [
                        'question' => 'Dans le meilleur cas, combien de comparaisons peut nécessiter une recherche binaire ?',
                        'choices' => [
                            'Une',
                            'n',
                            'n²',
                            'log n + n²',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si l’élément recherché est exactement l’élément central lors de la première comparaison, une seule comparaison suffit.'
                    ],

                    [
                        'question' => 'La recherche binaire fonctionne-t-elle directement sur des données non triées ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Oui, uniquement avec des chaînes',
                            'Oui, uniquement avec des nombres',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sans ordre permettant de déterminer quelle moitié éliminer, la recherche binaire ne peut pas fonctionner correctement.'
                    ],

                    [
                        'question' => 'Pourquoi la recherche binaire est-elle plus rapide que la recherche linéaire sur de grandes listes triées ?',
                        'choices' => [
                            'Elle élimine une grande partie des éléments à chaque étape',
                            'Elle examine tous les éléments simultanément',
                            'Elle utilise toujours plusieurs processeurs',
                            'Elle ne fait aucune comparaison',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche binaire réduit l’espace de recherche de moitié à chaque étape.'
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement adaptée à une recherche binaire classique ?',
                        'choices' => [
                            'Un Array trié',
                            'Une Queue non triée',
                            'Une Stack non triée',
                            'Un fichier texte aléatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Array trié permet d’accéder directement à l’élément central et de réduire efficacement l’espace de recherche.'
                    ],

                    [
                        'question' => 'Que doit faire l’algorithme si la valeur recherchée est égale à l’élément central ?',
                        'choices' => [
                            'Retourner que l’élément a été trouvé',
                            'Continuer obligatoirement à gauche',
                            'Continuer obligatoirement à droite',
                            'Trier à nouveau le tableau',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsque la valeur centrale correspond à la valeur recherchée, la recherche est terminée.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — ALGORITHMES DE TRI
            // ============================================================
            [
                'title' => 'Algorithmes de tri',
                'description' => 'Quiz intermédiaire sur les principaux algorithmes de tri.',
                'questions' => [

                    [
                        'question' => 'Quelle est la complexité moyenne de Quick Sort ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²) uniquement',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Quick Sort possède généralement une complexité moyenne de O(n log n), même si son pire cas peut être O(n²).'
                    ],

                    [
                        'question' => 'Quel élément est central dans le fonctionnement de Quick Sort ?',
                        'choices' => [
                            'Le pivot',
                            'La Queue',
                            'Le Hash',
                            'Le serveur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Quick Sort sélectionne un pivot et partitionne les éléments autour de celui-ci.'
                    ],

                    [
                        'question' => 'Quel algorithme de tri utilise principalement une stratégie Divide and Conquer ?',
                        'choices' => [
                            'Merge Sort',
                            'Linear Search',
                            'Bubble Sort uniquement',
                            'Stack Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'Merge Sort divise le problème en sous-problèmes, les résout puis fusionne leurs résultats.'
                    ],

                    [
                        'question' => 'Quelle est la complexité de Merge Sort dans le pire cas ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²)',
                            'O(n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Merge Sort conserve une complexité O(n log n) dans le meilleur, moyen et pire cas.'
                    ],

                    [
                        'question' => 'Quelle est une caractéristique importante de Merge Sort ?',
                        'choices' => [
                            'Il fusionne des sous-tableaux triés',
                            'Il utilise toujours un seul élément',
                            'Il ne compare jamais les valeurs',
                            'Il fonctionne uniquement sur des Graphs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Après avoir trié les sous-parties, Merge Sort les fusionne pour obtenir une séquence triée.'
                    ],

                    [
                        'question' => 'Quel algorithme est généralement efficace lorsque les données sont presque triées ?',
                        'choices' => [
                            'Insertion Sort',
                            'Dijkstra',
                            'BFS',
                            'Hashing',
                        ],
                        'correct' => 0,
                        'explanation' => 'Insertion Sort peut être très efficace sur des données déjà presque triées.'
                    ],

                    [
                        'question' => 'Quelle est la complexité du meilleur cas d’Insertion Sort lorsque les données sont déjà triées ?',
                        'choices' => [
                            'O(n)',
                            'O(n²)',
                            'O(log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans le meilleur cas, chaque élément est déjà à sa place et l’algorithme effectue essentiellement un parcours linéaire.'
                    ],

                    [
                        'question' => 'Quel algorithme de tri est généralement considéré comme stable ?',
                        'choices' => [
                            'Merge Sort',
                            'Heap Sort uniquement',
                            'Quick Sort toujours',
                            'Selection Sort toujours',
                        ],
                        'correct' => 0,
                        'explanation' => 'Merge Sort peut être implémenté comme un tri stable, en conservant l’ordre relatif des éléments égaux.'
                    ],

                    [
                        'question' => 'Quelle est la complexité typique de Heap Sort ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²) toujours',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Heap Sort possède une complexité O(n log n) dans le meilleur, moyen et pire cas.'
                    ],

                    [
                        'question' => 'Quel algorithme utilise une structure Heap ?',
                        'choices' => [
                            'Heap Sort',
                            'Linear Search',
                            'Bubble Sort uniquement',
                            'DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Heap Sort utilise directement une structure Heap pour sélectionner efficacement les éléments.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — LINKED LISTS
            // ============================================================
            [
                'title' => 'Linked Lists',
                'description' => 'Quiz intermédiaire sur les listes chaînées et leurs opérations.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une Linked List ?',
                        'choices' => [
                            'Une structure composée de nœuds reliés entre eux',
                            'Un tableau toujours trié',
                            'Une base de données',
                            'Une Stack uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Linked List est composée de nœuds contenant généralement une donnée et une référence vers un autre nœud.'
                    ],

                    [
                        'question' => 'Que contient généralement un nœud d’une Singly Linked List ?',
                        'choices' => [
                            'Une donnée et une référence vers le nœud suivant',
                            'Deux bases de données',
                            'Un processeur',
                            'Un serveur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une Singly Linked List, chaque nœud contient généralement une donnée et un pointeur ou une référence vers le nœud suivant.'
                    ],

                    [
                        'question' => 'Quelle est la particularité principale d’une Doubly Linked List ?',
                        'choices' => [
                            'Chaque nœud peut référencer le précédent et le suivant',
                            'Elle ne contient jamais de nœuds',
                            'Elle ne peut être parcourue',
                            'Elle doit être triée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Doubly Linked List possède généralement deux références : vers le nœud précédent et vers le suivant.'
                    ],

                    [
                        'question' => 'Quel est généralement l’avantage d’une Linked List par rapport à un Array pour une insertion connue ?',
                        'choices' => [
                            'Elle peut éviter de déplacer de nombreux éléments',
                            'Elle utilise toujours moins de mémoire',
                            'Elle permet toujours un accès O(1) par index',
                            'Elle est toujours triée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsqu’on possède déjà la référence au bon emplacement, une insertion peut être effectuée sans déplacer tous les éléments suivants.'
                    ],

                    [
                        'question' => 'Quel est l’inconvénient d’une Linked List par rapport à un Array pour accéder au ième élément ?',
                        'choices' => [
                            'Il faut généralement parcourir les nœuds jusqu’à cette position',
                            'Elle ne peut contenir qu’un élément',
                            'Elle ne peut pas être parcourue',
                            'Elle doit utiliser SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Linked List ne permet généralement pas un accès direct par index comme un Array.'
                    ],

                    [
                        'question' => 'Quel est le coût typique d’un accès par position dans une Singly Linked List ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pour atteindre une position donnée, il faut généralement parcourir les nœuds précédents.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on généralement le premier nœud d’une Linked List ?',
                        'choices' => [
                            'Head',
                            'Root',
                            'Pivot',
                            'Tail uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le premier nœud d’une Linked List est généralement appelé Head.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on généralement le dernier nœud ?',
                        'choices' => [
                            'Tail',
                            'Head',
                            'Root',
                            'Pivot',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le dernier nœud d’une Linked List est généralement appelé Tail.'
                    ],

                    [
                        'question' => 'Que représente généralement la référence next du dernier nœud d’une Singly Linked List ?',
                        'choices' => [
                            'Null',
                            'Head obligatoirement',
                            'Le premier élément',
                            'Le serveur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une Singly Linked List classique, le dernier nœud pointe vers Null.'
                    ],

                    [
                        'question' => 'Quelle structure peut être implémentée efficacement avec une Linked List ?',
                        'choices' => [
                            'Stack',
                            'CPU',
                            'DNS',
                            'HTTP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Linked List peut servir à implémenter une Stack ou certaines variantes de Queue.'
                    ],
                ],
            ],


            // ============================================================
            // QUIZ 5 — STACK & QUEUE AVANCÉES
            // ============================================================
            [
                'title' => 'Stack et Queue avancées',
                'description' => 'Quiz intermédiaire sur les opérations, implémentations et applications des Stack et Queue.',
                'questions' => [

                    [
                        'question' => 'Quelle opération permet généralement de consulter le sommet d’une Stack sans le supprimer ?',
                        'choices' => [
                            'Peek',
                            'Pop',
                            'Push',
                            'Dequeue',
                        ],
                        'correct' => 0,
                        'explanation' => 'Peek permet de consulter l’élément situé au sommet d’une Stack sans le retirer.'
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement adaptée à une file de tâches à traiter dans leur ordre d’arrivée ?',
                        'choices' => [
                            'Queue',
                            'Stack',
                            'Binary Tree',
                            'Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Queue suit le principe FIFO et permet donc de traiter les tâches dans leur ordre d’arrivée.'
                    ],

                    [
                        'question' => 'Quel problème classique peut être résolu à l’aide d’une Stack ?',
                        'choices' => [
                            'Vérification des parenthèses équilibrées',
                            'Recherche du plus court chemin uniquement',
                            'Tri SQL',
                            'Résolution DNS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Stack est particulièrement adaptée à la vérification de parenthèses car la dernière parenthèse ouverte doit être la première vérifiée.'
                    ],

                    [
                        'question' => 'Pourquoi une Stack est-elle utilisée lors des appels de fonctions ?',
                        'choices' => [
                            'Les appels suivent naturellement le principe LIFO',
                            'Les appels suivent toujours FIFO',
                            'Elle permet de trier les fonctions',
                            'Elle remplace le processeur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le dernier appel de fonction effectué doit généralement être terminé avant de revenir aux appels précédents, ce qui correspond au principe LIFO.'
                    ],

                    [
                        'question' => 'Que se produit-il lorsqu’on effectue un Pop sur une Stack vide ?',
                        'choices' => [
                            'Une erreur ou une condition de Stack underflow peut se produire',
                            'Un nouvel élément est automatiquement ajouté',
                            'La Stack devient automatiquement triée',
                            'La Queue est supprimée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Retirer un élément d’une Stack vide provoque généralement un Stack underflow ou une erreur selon l’implémentation.'
                    ],

                    [
                        'question' => 'Que se produit-il lorsqu’une structure limitée en capacité reçoit un élément alors qu’elle est pleine ?',
                        'choices' => [
                            'Un overflow peut se produire',
                            'Tous les éléments sont supprimés',
                            'La structure devient automatiquement vide',
                            'Les éléments sont automatiquement triés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsqu’une structure de capacité limitée est pleine et qu’on tente d’y ajouter un élément, un overflow peut se produire.'
                    ],

                    [
                        'question' => 'Quelle implémentation peut être utilisée pour construire une Queue ?',
                        'choices' => [
                            'Un Array ou une Linked List',
                            'Uniquement un Graph',
                            'Uniquement un Tree',
                            'Uniquement une Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Queue peut être implémentée à l’aide d’un Array, d’une Linked List ou d’autres structures adaptées.'
                    ],

                    [
                        'question' => 'Quelle structure est utilisée dans un algorithme DFS classique ?',
                        'choices' => [
                            'Stack',
                            'Queue',
                            'Hash Table uniquement',
                            'Heap uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'DFS (Depth-First Search) utilise naturellement une Stack, explicitement ou via la call stack lors d’une implémentation récursive.'
                    ],

                    [
                        'question' => 'Quelle structure est utilisée dans un algorithme BFS classique ?',
                        'choices' => [
                            'Queue',
                            'Stack',
                            'Heap uniquement',
                            'Linked List uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'BFS (Breadth-First Search) utilise une Queue afin de traiter les sommets niveau par niveau.'
                    ],

                    [
                        'question' => 'Quelle différence fondamentale existe entre Stack et Queue ?',
                        'choices' => [
                            'Stack utilise LIFO tandis que Queue utilise FIFO',
                            'Stack utilise FIFO tandis que Queue utilise LIFO',
                            'Les deux utilisent toujours LIFO',
                            'Les deux utilisent toujours FIFO',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Stack fonctionne selon LIFO alors que la Queue fonctionne selon FIFO.'
                    ],
                ],
            ],


            // ============================================================
            // QUIZ 6 — HASH TABLES
            // ============================================================
            [
                'title' => 'Hash Tables',
                'description' => 'Quiz intermédiaire sur les Hash Tables, les fonctions de hachage et les collisions.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’une Hash Table ?',
                        'choices' => [
                            'Permettre un accès rapide aux données à partir d’une clé',
                            'Trier automatiquement toutes les données',
                            'Créer des Graphs',
                            'Exécuter des fonctions récursives',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Table associe des clés à des valeurs afin de permettre des recherches, insertions et suppressions généralement très rapides.'
                    ],

                    [
                        'question' => 'Quel élément permet généralement de retrouver une valeur dans une Hash Table ?',
                        'choices' => [
                            'Une clé',
                            'Un index uniquement séquentiel',
                            'Une Queue',
                            'Un sommet de Graph',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Table utilise une clé pour déterminer où retrouver la valeur correspondante.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une Hash Function ?',
                        'choices' => [
                            'Transformer une clé en une valeur permettant de déterminer une position',
                            'Trier toutes les clés',
                            'Supprimer les doublons automatiquement',
                            'Créer une Linked List',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Function transforme une clé en une valeur de hachage utilisée pour déterminer une position dans la table.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une collision dans une Hash Table ?',
                        'choices' => [
                            'Deux clés différentes produisent la même position de hachage',
                            'Deux valeurs sont automatiquement supprimées',
                            'La table devient vide',
                            'Une clé est toujours invalide',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une collision se produit lorsque plusieurs clés sont associées à la même position.'
                    ],

                    [
                        'question' => 'Quelle technique peut être utilisée pour gérer les collisions ?',
                        'choices' => [
                            'Chaining',
                            'Binary Search uniquement',
                            'DFS',
                            'Bubble Sort uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Chaining consiste notamment à stocker plusieurs éléments associés à une même position dans une structure secondaire, souvent une Linked List.'
                    ],

                    [
                        'question' => 'Quel est le coût moyen typique d’une recherche dans une Hash Table bien dimensionnée ?',
                        'choices' => [
                            'O(1)',
                            'O(n²)',
                            'O(log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec une bonne fonction de hachage et un facteur de charge raisonnable, les opérations sont généralement O(1) en moyenne.'
                    ],

                    [
                        'question' => 'Quel peut être le coût d’une recherche dans le pire cas d’une Hash Table ?',
                        'choices' => [
                            'O(n)',
                            'O(1) obligatoirement',
                            'O(log log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si beaucoup de clés entrent en collision, la recherche peut devenir linéaire dans le pire cas.'
                    ],

                    [
                        'question' => 'Que représente le load factor d’une Hash Table ?',
                        'choices' => [
                            'Le rapport entre le nombre d’éléments et la capacité de la table',
                            'Le nombre de CPU utilisés',
                            'Le nombre de fonctions dans le programme',
                            'La taille d’une clé en bits uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le load factor mesure généralement le niveau de remplissage de la Hash Table.'
                    ],

                    [
                        'question' => 'Pourquoi peut-on redimensionner une Hash Table ?',
                        'choices' => [
                            'Pour réduire les collisions lorsque la table devient trop remplie',
                            'Pour supprimer toutes les clés',
                            'Pour convertir la table en Stack',
                            'Pour trier automatiquement les valeurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsque le load factor devient trop élevé, le redimensionnement peut réduire les collisions et préserver les performances.'
                    ],

                    [
                        'question' => 'Une Hash Table garantit-elle automatiquement que les éléments sont stockés dans un ordre trié ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Oui, uniquement avec des chaînes',
                            'Oui, uniquement avec des nombres',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Table est conçue principalement pour l’accès rapide par clé et ne garantit généralement pas un ordre trié.'
                    ],
                ],
            ],


            // ============================================================
            // QUIZ 7 — TREES ET BINARY SEARCH TREES
            // ============================================================
            [
                'title' => 'Trees et Binary Search Trees',
                'description' => 'Quiz intermédiaire sur les arbres, les Binary Trees et les Binary Search Trees.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un Tree en algorithmique ?',
                        'choices' => [
                            'Une structure hiérarchique composée de nœuds reliés par des arêtes',
                            'Une structure toujours linéaire',
                            'Une base de données relationnelle',
                            'Une Queue spécialisée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Tree est une structure hiérarchique composée de nœuds et de relations parent-enfant.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on généralement le premier nœud d’un Tree ?',
                        'choices' => [
                            'Root',
                            'Head',
                            'Tail',
                            'Pivot',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le premier nœud d’un arbre est appelé Root.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on un nœud qui n’a aucun enfant ?',
                        'choices' => [
                            'Leaf',
                            'Root',
                            'Parent',
                            'Pivot',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un nœud sans enfant est appelé Leaf.'
                    ],

                    [
                        'question' => 'Combien d’enfants peut avoir au maximum un nœud dans un Binary Tree ?',
                        'choices' => [
                            'Deux',
                            'Un seul',
                            'Trois',
                            'Un nombre illimité obligatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Binary Tree, chaque nœud peut avoir au maximum deux enfants : Left et Right.'
                    ],

                    [
                        'question' => 'Quelle propriété caractérise un Binary Search Tree classique ?',
                        'choices' => [
                            'Les valeurs à gauche sont inférieures et celles à droite sont supérieures au nœud',
                            'Tous les nœuds ont exactement deux enfants',
                            'Les valeurs sont toujours aléatoires',
                            'Tous les nœuds doivent être des feuilles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Binary Search Tree classique, les valeurs du sous-arbre gauche sont inférieures au nœud et celles du sous-arbre droit sont supérieures.'
                    ],

                    [
                        'question' => 'Quel parcours d’un BST produit généralement les valeurs dans l’ordre croissant ?',
                        'choices' => [
                            'Inorder traversal',
                            'Preorder traversal',
                            'Postorder traversal',
                            'Random traversal',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Binary Search Tree correctement organisé, le parcours Inorder visite les valeurs dans l’ordre croissant.'
                    ],

                    [
                        'question' => 'Dans quel ordre fonctionne un Preorder traversal ?',
                        'choices' => [
                            'Root, Left, Right',
                            'Left, Right, Root',
                            'Left, Root, Right',
                            'Right, Root, Left',
                        ],
                        'correct' => 0,
                        'explanation' => 'Preorder visite d’abord le Root, puis le sous-arbre gauche et enfin le sous-arbre droit.'
                    ],

                    [
                        'question' => 'Dans quel ordre fonctionne un Postorder traversal ?',
                        'choices' => [
                            'Left, Right, Root',
                            'Root, Left, Right',
                            'Left, Root, Right',
                            'Root, Right, Left',
                        ],
                        'correct' => 0,
                        'explanation' => 'Postorder visite d’abord les sous-arbres puis le Root.'
                    ],

                    [
                        'question' => 'Quel est l’avantage potentiel d’un BST équilibré pour la recherche ?',
                        'choices' => [
                            'Une recherche peut être effectuée en O(log n)',
                            'Une recherche devient toujours O(n²)',
                            'La recherche ne nécessite aucune comparaison',
                            'Tous les éléments sont automatiquement supprimés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un BST équilibré, chaque comparaison peut éliminer une grande partie de l’arbre, permettant une recherche O(log n).'
                    ],

                    [
                        'question' => 'Que peut devenir la complexité de recherche d’un BST fortement déséquilibré ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(log log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si le BST devient fortement déséquilibré, il peut ressembler à une Linked List et la recherche peut devenir O(n).'
                    ],
                ],
            ],


            // ============================================================
            // QUIZ 8 — GRAPHS, DFS ET BFS
            // ============================================================
            [
                'title' => 'Graphs, DFS et BFS',
                'description' => 'Quiz intermédiaire sur les Graphs et les algorithmes de parcours DFS et BFS.',
                'questions' => [

                    [
                        'question' => 'De quoi est principalement composé un Graph ?',
                        'choices' => [
                            'De sommets et d’arêtes',
                            'De tableaux uniquement',
                            'De fonctions uniquement',
                            'De bases de données uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Graph est principalement composé de sommets (vertices) et d’arêtes (edges) reliant certains sommets.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on généralement un élément d’un Graph ?',
                        'choices' => [
                            'Vertex',
                            'Node SQL',
                            'Index',
                            'Record',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un élément d’un Graph est généralement appelé Vertex ou sommet.'
                    ],

                    [
                        'question' => 'Comment appelle-t-on la connexion entre deux sommets ?',
                        'choices' => [
                            'Edge',
                            'Index',
                            'Pointer uniquement',
                            'Queue',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Edge représente une connexion entre deux sommets.'
                    ],

                    [
                        'question' => 'Quelle structure est généralement utilisée par BFS ?',
                        'choices' => [
                            'Queue',
                            'Stack',
                            'Heap uniquement',
                            'Hash Table uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'BFS utilise une Queue afin d’explorer les sommets niveau par niveau.'
                    ],

                    [
                        'question' => 'Quelle structure est généralement utilisée par DFS ?',
                        'choices' => [
                            'Stack',
                            'Queue',
                            'Heap uniquement',
                            'Array trié uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'DFS utilise une Stack, explicitement ou implicitement via la récursion.'
                    ],

                    [
                        'question' => 'Que signifie BFS ?',
                        'choices' => [
                            'Breadth-First Search',
                            'Binary Fast Search',
                            'Basic File System',
                            'Balanced First Structure',
                        ],
                        'correct' => 0,
                        'explanation' => 'BFS signifie Breadth-First Search et explore généralement un Graph niveau par niveau.'
                    ],

                    [
                        'question' => 'Que signifie DFS ?',
                        'choices' => [
                            'Depth-First Search',
                            'Data File Search',
                            'Direct Fast Sorting',
                            'Dynamic Function System',
                        ],
                        'correct' => 0,
                        'explanation' => 'DFS signifie Depth-First Search et explore profondément un chemin avant de revenir en arrière.'
                    ],

                    [
                        'question' => 'Dans un Graph non pondéré, quel algorithme peut être utilisé pour trouver le plus court nombre d’arêtes depuis un sommet source ?',
                        'choices' => [
                            'BFS',
                            'Bubble Sort',
                            'Quick Sort',
                            'Binary Search',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Graph non pondéré, BFS permet de trouver le plus court chemin en nombre d’arêtes depuis une source.'
                    ],

                    [
                        'question' => 'Quelle est une différence fondamentale entre Graph dirigé et Graph non dirigé ?',
                        'choices' => [
                            'Les arêtes d’un Graph dirigé possèdent une direction',
                            'Un Graph dirigé ne contient jamais de sommets',
                            'Un Graph non dirigé ne contient jamais d’arêtes',
                            'Les deux sont toujours identiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Graph dirigé, une Edge possède une direction, contrairement à une Edge classique d’un Graph non dirigé.'
                    ],

                    [
                        'question' => 'Quelle structure peut représenter les voisins d’un Vertex dans une Adjacency List ?',
                        'choices' => [
                            'Une liste contenant les sommets voisins',
                            'Une seule valeur obligatoire',
                            'Uniquement une Stack',
                            'Uniquement une Queue',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Adjacency List associe généralement chaque Vertex à une liste de ses voisins.'
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
                    'difficulty' => 'Intermediate',
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

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                // Important :
                // On mélange les réponses APRÈS avoir identifié
                // la bonne réponse.
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