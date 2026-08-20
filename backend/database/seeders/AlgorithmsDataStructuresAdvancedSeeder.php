<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgorithmsDataStructuresAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algorithms-data-structures')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — COMPLEXITÉ AVANCÉE
            // ============================================================
            [
                'title' => 'Complexité avancée et analyse algorithmique',
                'description' => 'Quiz avancé sur l’analyse de complexité temporelle, spatiale et asymptotique.',
                'questions' => [

                    [
                        'question' => 'Quelle est la complexité de la fonction suivante : for (i = 1; i < n; i *= 2) ?',
                        'choices' => [
                            'O(log n)',
                            'O(n)',
                            'O(n log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La valeur de i est multipliée par 2 à chaque itération. Le nombre d’itérations est donc logarithmique.'
                    ],

                    [
                        'question' => 'Quelle est la complexité de deux boucles où la boucle interne parcourt i éléments pour chaque valeur de i allant de 1 à n ?',
                        'choices' => [
                            'O(n²)',
                            'O(n)',
                            'O(log n)',
                            'O(n log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le nombre total d’opérations est 1 + 2 + ... + n, soit n(n+1)/2, ce qui donne O(n²).'
                    ],

                    [
                        'question' => 'Quelle est la complexité de T(n) = 2T(n/2) + O(n) ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n)',
                            'O(log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Selon le Master Theorem, avec a=2, b=2 et f(n)=O(n), on obtient O(n log n).'
                    ],

                    [
                        'question' => 'Quelle est la complexité de T(n) = T(n/2) + O(1) ?',
                        'choices' => [
                            'O(log n)',
                            'O(n)',
                            'O(n log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'À chaque appel récursif, la taille du problème est divisée par deux, ce qui produit une profondeur logarithmique.'
                    ],

                    [
                        'question' => 'Quelle complexité correspond généralement à un algorithme utilisant un tableau de taille n mais seulement quelques variables supplémentaires ?',
                        'choices' => [
                            'O(n) de mémoire totale et O(1) d’espace auxiliaire',
                            'O(n²) d’espace auxiliaire',
                            'O(log n) de mémoire totale uniquement',
                            'O(2ⁿ) d’espace auxiliaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tableau occupe O(n), tandis que quelques variables supplémentaires occupent O(1).'
                    ],

                    [
                        'question' => 'Si un algorithme possède une complexité O(n log n) et qu’un autre possède O(n²), lequel devient généralement plus efficace lorsque n devient très grand ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²)',
                            'Les deux sont toujours identiques',
                            'Cela dépend uniquement du nom de l’algorithme',
                        ],
                        'correct' => 0,
                        'explanation' => 'n log n croît beaucoup moins rapidement que n² lorsque n devient grand.'
                    ],

                    [
                        'question' => 'Que signifie amortized complexity ?',
                        'choices' => [
                            'Le coût moyen d’une séquence d’opérations plutôt que le coût maximal d’une opération isolée',
                            'Le coût exact de chaque opération',
                            'Le coût uniquement dans le pire cas',
                            'Le coût mémoire uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse amortie répartit le coût de certaines opérations coûteuses sur une séquence d’opérations.'
                    ],

                    [
                        'question' => 'Quelle structure possède généralement une opération append amortie en O(1) lorsqu’elle utilise un tableau dynamique correctement dimensionné ?',
                        'choices' => [
                            'Dynamic Array',
                            'Binary Search Tree non équilibré',
                            'Graph pondéré',
                            'Heap uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Dynamic Array peut devoir être redimensionné occasionnellement, mais le coût amorti d’un append reste généralement O(1).'
                    ],

                    [
                        'question' => 'Quelle notation décrit généralement une borne inférieure asymptotique ?',
                        'choices' => [
                            'Big Omega (Ω)',
                            'Big O',
                            'Big Theta uniquement',
                            'FIFO',
                        ],
                        'correct' => 0,
                        'explanation' => 'Big Omega décrit généralement une borne inférieure asymptotique.'
                    ],

                    [
                        'question' => 'Que représente Big Theta (Θ) ?',
                        'choices' => [
                            'Une borne asymptotiquement exacte',
                            'Uniquement une borne supérieure',
                            'Uniquement une borne inférieure',
                            'La quantité de mémoire disponible',
                        ],
                        'correct' => 0,
                        'explanation' => 'Θ décrit une fonction avec une borne supérieure et une borne inférieure du même ordre asymptotique.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — SORTING AVANCÉ
            // ============================================================
            [
                'title' => 'Algorithmes de tri avancés',
                'description' => 'Quiz avancé sur Quick Sort, Merge Sort, Heap Sort, Counting Sort et les stratégies de tri.',
                'questions' => [

                    [
                        'question' => 'Quel est le pire cas classique de Quick Sort ?',
                        'choices' => [
                            'O(n²)',
                            'O(n log n)',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si le pivot produit des partitions très déséquilibrées à chaque étape, Quick Sort peut atteindre O(n²).'
                    ],

                    [
                        'question' => 'Quelle stratégie peut réduire le risque de mauvais pivots dans Quick Sort ?',
                        'choices' => [
                            'Choisir le pivot de manière aléatoire',
                            'Toujours choisir le premier élément',
                            'Toujours choisir le dernier élément',
                            'Ne jamais partitionner le tableau',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un pivot choisi aléatoirement réduit la probabilité d’obtenir systématiquement des partitions extrêmement déséquilibrées.'
                    ],

                    [
                        'question' => 'Quelle propriété distingue principalement un sorting algorithm stable ?',
                        'choices' => [
                            'Il conserve l’ordre relatif des éléments ayant la même clé',
                            'Il utilise toujours O(1) mémoire',
                            'Il est toujours O(n)',
                            'Il utilise obligatoirement une Heap',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tri stable conserve l’ordre relatif des éléments possédant des clés égales.'
                    ],

                    [
                        'question' => 'Quelle complexité possède Merge Sort dans le pire cas ?',
                        'choices' => [
                            'O(n log n)',
                            'O(n²)',
                            'O(n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Merge Sort conserve une complexité O(n log n) même dans le pire cas.'
                    ],

                    [
                        'question' => 'Quel est l’espace auxiliaire classique de Merge Sort pour un Array ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(log n) uniquement',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’implémentation classique de Merge Sort nécessite un espace supplémentaire pour fusionner les sous-tableaux.'
                    ],

                    [
                        'question' => 'Quel type de tri est Counting Sort ?',
                        'choices' => [
                            'Un tri non comparatif',
                            'Un tri basé uniquement sur les comparaisons',
                            'Un tri récursif obligatoire',
                            'Un tri basé sur DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Counting Sort exploite les valeurs des éléments et ne repose pas directement sur des comparaisons entre eux.'
                    ],

                    [
                        'question' => 'Dans quel contexte Counting Sort peut-il être particulièrement efficace ?',
                        'choices' => [
                            'Lorsque l’intervalle des valeurs est raisonnablement limité',
                            'Lorsque les valeurs sont toutes des objets complexes',
                            'Lorsque les données n’ont aucune valeur numérique',
                            'Uniquement pour les Graphs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Counting Sort est efficace lorsque la plage de valeurs k reste raisonnablement petite par rapport à n.'
                    ],

                    [
                        'question' => 'Quelle est la complexité typique de Counting Sort en fonction de n et k ?',
                        'choices' => [
                            'O(n + k)',
                            'O(n²)',
                            'O(log n)',
                            'O(n log n) toujours',
                        ],
                        'correct' => 0,
                        'explanation' => 'Counting Sort fonctionne généralement en O(n + k), où k représente la plage des valeurs.'
                    ],

                    [
                        'question' => 'Quel algorithme est particulièrement adapté pour trouver le k-ième plus petit élément sans trier complètement le tableau ?',
                        'choices' => [
                            'Quickselect',
                            'Bubble Sort uniquement',
                            'BFS',
                            'DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Quickselect utilise une stratégie similaire à Quick Sort mais ne traite qu’une partition pertinente pour trouver l’élément recherché.'
                    ],

                    [
                        'question' => 'Quelle est la complexité moyenne de Quickselect ?',
                        'choices' => [
                            'O(n)',
                            'O(n log n)',
                            'O(n²) toujours',
                            'O(log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec de bons pivots en moyenne, Quickselect possède une complexité moyenne linéaire.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — LINKED LISTS AVANCÉES
            // ============================================================
            [
                'title' => 'Linked Lists avancées et gestion mémoire',
                'description' => 'Quiz avancé sur les Linked Lists, pointeurs, cycles et techniques de manipulation.',
                'questions' => [

                    [
                        'question' => 'Quel algorithme permet de détecter un cycle dans une Linked List avec O(1) espace supplémentaire ?',
                        'choices' => [
                            'Floyd’s Cycle Detection Algorithm',
                            'Binary Search',
                            'Merge Sort',
                            'Dijkstra',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’algorithme de Floyd utilise deux pointeurs, slow et fast, pour détecter un cycle sans structure auxiliaire importante.'
                    ],

                    [
                        'question' => 'Dans Floyd’s Cycle Detection, comment avancent généralement les deux pointeurs ?',
                        'choices' => [
                            'Slow avance d’un pas et Fast de deux',
                            'Les deux avancent de deux',
                            'Slow avance de deux et Fast d’un',
                            'Les deux restent immobiles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Slow avance d’un nœud tandis que Fast avance de deux nœuds.'
                    ],

                    [
                        'question' => 'Quelle est la complexité temporelle de la détection de cycle de Floyd ?',
                        'choices' => [
                            'O(n)',
                            'O(n²)',
                            'O(log n)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les pointeurs parcourent au maximum un nombre linéaire de nœuds.'
                    ],

                    [
                        'question' => 'Quelle est la complexité spatiale de Floyd’s Cycle Detection ?',
                        'choices' => [
                            'O(1)',
                            'O(n)',
                            'O(n²)',
                            'O(log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’algorithme utilise seulement quelques pointeurs supplémentaires.'
                    ],

                    [
                        'question' => 'Quelle technique permet de trouver le milieu d’une Linked List en un seul parcours ?',
                        'choices' => [
                            'Deux pointeurs Slow et Fast',
                            'Deux Stacks',
                            'Binary Search',
                            'Hash Table obligatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec Slow à un pas et Fast à deux pas, lorsque Fast atteint la fin, Slow se trouve généralement au milieu.'
                    ],

                    [
                        'question' => 'Pourquoi inverser une Linked List peut-il être effectué en O(1) espace auxiliaire ?',
                        'choices' => [
                            'Parce que les liens des nœuds peuvent être modifiés directement',
                            'Parce qu’aucun nœud n’est parcouru',
                            'Parce que la liste est automatiquement copiée',
                            'Parce qu’une Hash Table est obligatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’inversion peut être réalisée en modifiant les références des nœuds avec quelques pointeurs.'
                    ],

                    [
                        'question' => 'Quelle complexité temporelle possède généralement l’inversion d’une Linked List de n éléments ?',
                        'choices' => [
                            'O(n)',
                            'O(n²)',
                            'O(log n)',
                            'O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque nœud doit être parcouru et son lien modifié une fois.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’un Dummy Node dans certaines opérations sur Linked Lists ?',
                        'choices' => [
                            'Simplifier la gestion des cas particuliers au niveau du Head',
                            'Augmenter automatiquement la vitesse du processeur',
                            'Trier automatiquement la liste',
                            'Supprimer les pointeurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Dummy Node peut simplifier les insertions et suppressions proches du début de la liste.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’on modifie incorrectement les pointeurs d’une Linked List ?',
                        'choices' => [
                            'Perte d’accès à une partie de la liste',
                            'Le CPU devient plus rapide',
                            'La liste devient automatiquement triée',
                            'La mémoire devient infinie',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une mauvaise modification d’un pointeur peut rendre certains nœuds inaccessibles.'
                    ],

                    [
                        'question' => 'Quelle structure est souvent utilisée pour résoudre un problème de LRU Cache ?',
                        'choices' => [
                            'Hash Map + Doubly Linked List',
                            'Binary Search uniquement',
                            'Queue uniquement',
                            'Graph uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Hash Map permet un accès rapide aux éléments et une Doubly Linked List permet de gérer efficacement leur ordre d’utilisation.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — HEAPS & PRIORITY QUEUES
            // ============================================================
            [
                'title' => 'Heaps et Priority Queues',
                'description' => 'Quiz avancé sur les Binary Heaps, Priority Queues et leurs applications.',
                'questions' => [

                    [
                        'question' => 'Quelle propriété caractérise un Min Heap ?',
                        'choices' => [
                            'Le plus petit élément se trouve à la racine',
                            'Le plus grand élément se trouve toujours à la racine',
                            'Les éléments sont toujours complètement triés',
                            'Les feuilles sont toujours plus petites que la racine',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Min Heap, chaque parent est inférieur ou égal à ses enfants, donc le minimum se trouve à la racine.'
                    ],

                    [
                        'question' => 'Quelle propriété caractérise un Max Heap ?',
                        'choices' => [
                            'Le plus grand élément se trouve à la racine',
                            'Le plus petit élément se trouve toujours à la racine',
                            'Les éléments sont entièrement triés',
                            'Tous les nœuds possèdent deux enfants',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un Max Heap, chaque parent est supérieur ou égal à ses enfants.'
                    ],

                    [
                        'question' => 'Quelle complexité possède généralement l’insertion dans un Binary Heap ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(1) toujours',
                            'O(n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Après l’insertion, l’élément peut remonter dans le Heap sur une hauteur logarithmique.'
                    ],

                    [
                        'question' => 'Quelle est la complexité typique de l’extraction du minimum dans un Min Heap ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(1) toujours',
                            'O(n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Après avoir retiré la racine, il faut généralement réorganiser le Heap sur une hauteur O(log n).'
                    ],

                    [
                        'question' => 'Quelle opération permet de restaurer la propriété d’un Heap après une modification ?',
                        'choices' => [
                            'Heapify',
                            'Binary Search',
                            'DFS',
                            'Hashing',
                        ],
                        'correct' => 0,
                        'explanation' => 'Heapify réorganise les éléments afin de restaurer la propriété du Heap.'
                    ],

                    [
                        'question' => 'Quelle complexité possède la construction efficace d’un Heap à partir de n éléments ?',
                        'choices' => [
                            'O(n)',
                            'O(n log n)',
                            'O(n²)',
                            'O(log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La construction bottom-up d’un Heap peut être réalisée en O(n).'
                    ],

                    [
                        'question' => 'Quelle structure est généralement utilisée pour implémenter une Priority Queue efficace ?',
                        'choices' => [
                            'Heap',
                            'Linked List non triée uniquement',
                            'Graph',
                            'Stack uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Heap permet de récupérer efficacement l’élément de priorité maximale ou minimale.'
                    ],

                    [
                        'question' => 'Quelle opération permet généralement d’obtenir le minimum d’un Min Heap sans le supprimer ?',
                        'choices' => [
                            'Peek',
                            'Extract',
                            'Delete All',
                            'Partition',
                        ],
                        'correct' => 0,
                        'explanation' => 'Peek permet de consulter la racine sans la retirer.'
                    ],

                    [
                        'question' => 'Pourquoi un Binary Heap est-il souvent stocké dans un Array ?',
                        'choices' => [
                            'Sa structure complète permet de calculer les positions des enfants et du parent',
                            'Les Arrays sont toujours triés',
                            'Les Arrays utilisent automatiquement une Hash Function',
                            'Un Heap ne possède aucun lien logique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Comme un Binary Heap est un Complete Binary Tree, ses positions peuvent être représentées efficacement dans un Array.'
                    ],

                    [
                        'question' => 'Quel algorithme utilise une Priority Queue pour sélectionner progressivement des sommets ?',
                        'choices' => [
                            'Dijkstra',
                            'Bubble Sort',
                            'Binary Search',
                            'Floyd Cycle Detection',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dijkstra utilise généralement une Priority Queue pour sélectionner le sommet possédant la distance minimale connue.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — AVL & RED-BLACK TREES
            // ============================================================
            [
                'title' => 'AVL Trees et Red-Black Trees',
                'description' => 'Quiz avancé sur les arbres équilibrés et les opérations de rotation.',
                'questions' => [

                    [
                        'question' => 'Pourquoi utilise-t-on un AVL Tree ?',
                        'choices' => [
                            'Pour maintenir l’arbre équilibré afin de conserver de bonnes performances',
                            'Pour stocker uniquement des chaînes',
                            'Pour supprimer les feuilles',
                            'Pour remplacer une Hash Table dans tous les cas',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un AVL Tree maintient une hauteur équilibrée afin de conserver des opérations logarithmiques.'
                    ],

                    [
                        'question' => 'Quel facteur d’équilibre est généralement autorisé dans un AVL Tree ?',
                        'choices' => [
                            '-1, 0 ou +1',
                            'Uniquement 0',
                            'De -10 à +10',
                            'N’importe quelle valeur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pour chaque nœud d’un AVL Tree, la différence de hauteur entre les deux sous-arbres est généralement limitée à -1, 0 ou +1.'
                    ],

                    [
                        'question' => 'Quelle opération est utilisée pour rééquilibrer un AVL Tree ?',
                        'choices' => [
                            'Rotation',
                            'Hashing',
                            'BFS uniquement',
                            'Partition',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les rotations permettent de modifier la structure de l’arbre tout en conservant les propriétés du BST.'
                    ],

                    [
                        'question' => 'Quel cas nécessite typiquement une rotation simple dans un AVL Tree ?',
                        'choices' => [
                            'Un déséquilibre de type LL ou RR',
                            'Uniquement lorsque l’arbre est vide',
                            'Lorsqu’une Hash Table collisionne',
                            'Lors d’un BFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les cas LL et RR peuvent être corrigés par une rotation simple.'
                    ],

                    [
                        'question' => 'Quel cas AVL nécessite généralement une double rotation ?',
                        'choices' => [
                            'LR ou RL',
                            'LL uniquement',
                            'RR uniquement',
                            'Aucun',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les configurations Left-Right et Right-Left nécessitent généralement deux rotations.'
                    ],

                    [
                        'question' => 'Quelle complexité possède généralement une recherche dans un AVL Tree ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(n) toujours',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’équilibrage garantit une hauteur logarithmique.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’un Red-Black Tree ?',
                        'choices' => [
                            'Maintenir une hauteur suffisamment équilibrée',
                            'Trier uniquement des chaînes',
                            'Remplacer tous les Graphs',
                            'Supprimer les rotations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les règles de coloration permettent de maintenir une hauteur logarithmique.'
                    ],

                    [
                        'question' => 'Un Red-Black Tree est-il toujours parfaitement équilibré ?',
                        'choices' => [
                            'Non, il est approximativement équilibré selon ses règles',
                            'Oui, parfaitement',
                            'Oui, toutes les feuilles ont exactement la même profondeur',
                            'Non, il n’est jamais équilibré',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les Red-Black Trees ne sont pas parfaitement équilibrés, mais leurs contraintes garantissent une hauteur logarithmique.'
                    ],

                    [
                        'question' => 'Quelle complexité est généralement garantie pour les opérations principales d’un Red-Black Tree ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(2ⁿ)',
                            'O(n³)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Recherche, insertion et suppression sont généralement O(log n) grâce aux propriétés d’équilibrage.'
                    ],

                    [
                        'question' => 'Pourquoi les rotations ne détruisent-elles pas la propriété BST ?',
                        'choices' => [
                            'Elles réorganisent les nœuds tout en conservant leur ordre relatif',
                            'Elles suppriment toutes les valeurs',
                            'Elles trient les valeurs avec Bubble Sort',
                            'Elles transforment l’arbre en Graph arbitraire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une rotation est conçue pour modifier la structure tout en conservant l’ordre des clés du BST.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — GRAPH ALGORITHMS AVANCÉS
            // ============================================================
            [
                'title' => 'Algorithmes avancés sur les Graphs',
                'description' => 'Quiz avancé sur les plus courts chemins, MST et algorithmes classiques des Graphs.',
                'questions' => [

                    [
                        'question' => 'Quel algorithme est adapté au plus court chemin depuis une source lorsque les poids sont non négatifs ?',
                        'choices' => [
                            'Dijkstra',
                            'DFS uniquement',
                            'Bubble Sort',
                            'Binary Search',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dijkstra est conçu pour les Graphs pondérés dont les poids des arêtes sont non négatifs.'
                    ],

                    [
                        'question' => 'Pourquoi Dijkstra ne fonctionne-t-il pas correctement avec des poids négatifs ?',
                        'choices' => [
                            'Son choix définitif d’une distance minimale peut devenir incorrect',
                            'Il ne fonctionne jamais avec des Graphs',
                            'Il utilise obligatoirement BFS',
                            'Il nécessite un tableau trié',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dijkstra suppose que lorsqu’un sommet est sélectionné comme minimum, sa distance ne pourra plus être améliorée par une arête négative ultérieure.'
                    ],

                    [
                        'question' => 'Quel algorithme peut gérer les poids négatifs et détecter les cycles négatifs accessibles depuis la source ?',
                        'choices' => [
                            'Bellman-Ford',
                            'Binary Search',
                            'Heap Sort',
                            'DFS uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Bellman-Ford accepte les poids négatifs et peut détecter l’existence d’un cycle négatif accessible depuis la source.'
                    ],

                    [
                        'question' => 'Quel problème cherche à résoudre Minimum Spanning Tree ?',
                        'choices' => [
                            'Relier tous les sommets avec un coût total minimal sans cycle',
                            'Trouver toutes les valeurs triées',
                            'Chercher uniquement un sommet',
                            'Calculer une Hash Function',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Minimum Spanning Tree relie tous les sommets avec un coût total minimal et sans cycle.'
                    ],

                    [
                        'question' => 'Quels algorithmes sont classiques pour construire un Minimum Spanning Tree ?',
                        'choices' => [
                            'Kruskal et Prim',
                            'BFS et DFS uniquement',
                            'Quick Sort et Merge Sort',
                            'Binary Search et Hashing',
                        ],
                        'correct' => 0,
                        'explanation' => 'Kruskal et Prim sont deux algorithmes classiques pour construire un Minimum Spanning Tree.'
                    ],

                    [
                        'question' => 'Quelle structure est particulièrement utile dans l’algorithme de Kruskal ?',
                        'choices' => [
                            'Disjoint Set Union',
                            'Stack',
                            'Queue uniquement',
                            'Binary Search Tree uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Kruskal utilise une structure Disjoint Set Union pour déterminer efficacement si l’ajout d’une arête crée un cycle.'
                    ],

                    [
                        'question' => 'Que permet principalement Topological Sort ?',
                        'choices' => [
                            'Ordonner les sommets d’un Directed Acyclic Graph selon leurs dépendances',
                            'Trier tous les nombres',
                            'Trouver toujours le plus court chemin',
                            'Créer une Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'Topological Sort produit un ordre compatible avec les dépendances d’un DAG.'
                    ],

                    [
                        'question' => 'Topological Sort est-il applicable à un Graph dirigé contenant un cycle ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Oui, uniquement avec Dijkstra',
                            'Oui, uniquement avec Heap Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un ordre topologique existe uniquement pour un Directed Acyclic Graph.'
                    ],

                    [
                        'question' => 'Quelle technique permet de représenter efficacement les voisins dans un Graph peu dense ?',
                        'choices' => [
                            'Adjacency List',
                            'Adjacency Matrix uniquement',
                            'Array trié uniquement',
                            'Stack uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Adjacency List utilise généralement moins de mémoire qu’une matrice pour les Graphs peu denses.'
                    ],

                    [
                        'question' => 'Quelle complexité mémoire possède généralement une Adjacency Matrix pour un Graph de V sommets ?',
                        'choices' => [
                            'O(V²)',
                            'O(V)',
                            'O(log V)',
                            'O(E) toujours',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une matrice d’adjacence possède V × V positions, donc O(V²) mémoire.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — DYNAMIC PROGRAMMING
            // ============================================================
            [
                'title' => 'Dynamic Programming',
                'description' => 'Quiz avancé sur la programmation dynamique, memoization et tabulation.',
                'questions' => [

                    [
                        'question' => 'Quel problème est particulièrement adapté à Dynamic Programming ?',
                        'choices' => [
                            'Un problème possédant des sous-problèmes qui se chevauchent et une structure optimale',
                            'Uniquement les problèmes sans sous-problèmes',
                            'Uniquement les problèmes de réseau',
                            'Uniquement les problèmes de tri',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dynamic Programming est particulièrement adaptée lorsque les sous-problèmes se répètent et que la solution optimale peut être construite à partir de solutions optimales de sous-problèmes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que Memoization ?',
                        'choices' => [
                            'Stocker les résultats des sous-problèmes déjà calculés',
                            'Supprimer les résultats intermédiaires',
                            'Trier les sous-problèmes',
                            'Utiliser uniquement une Stack',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Memoization consiste généralement à mémoriser les résultats lors d’une approche récursive Top-Down.'
                    ],

                    [
                        'question' => 'Quelle approche est généralement associée à Tabulation ?',
                        'choices' => [
                            'Bottom-Up',
                            'Top-Down récursif uniquement',
                            'Randomized',
                            'Divide uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Tabulation construit généralement les solutions progressivement à partir des plus petits sous-problèmes.'
                    ],

                    [
                        'question' => 'Pourquoi Dynamic Programming peut-elle améliorer une solution récursive naïve ?',
                        'choices' => [
                            'Elle évite de recalculer plusieurs fois les mêmes sous-problèmes',
                            'Elle supprime toute récursion automatiquement',
                            'Elle trie automatiquement les données',
                            'Elle transforme toujours le problème en O(1)',
                        ],
                        'correct' => 0,
                        'explanation' => 'La mémorisation des résultats évite les calculs répétés.'
                    ],

                    [
                        'question' => 'Quel problème classique peut être résolu par Dynamic Programming ?',
                        'choices' => [
                            '0/1 Knapsack',
                            'DNS uniquement',
                            'HTTP routing uniquement',
                            'Binary Search uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le problème 0/1 Knapsack est un exemple classique de Dynamic Programming.'
                    ],

                    [
                        'question' => 'Dans le problème 0/1 Knapsack, que signifie généralement 0/1 ?',
                        'choices' => [
                            'Chaque objet peut être pris au maximum une fois',
                            'Chaque objet doit être pris exactement deux fois',
                            'Chaque objet est toujours ignoré',
                            'Les poids sont toujours 0 ou 1',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans 0/1 Knapsack, chaque objet est soit sélectionné, soit non sélectionné.'
                    ],

                    [
                        'question' => 'Quelle technique est utilisée pour réduire la mémoire d’une DP dont l’état dépend seulement de la ligne précédente ?',
                        'choices' => [
                            'Conserver uniquement les états nécessaires',
                            'Créer un tableau de taille exponentielle',
                            'Utiliser toujours une Graph',
                            'Supprimer les états précédents sans analyse',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si une transition dépend uniquement d’un nombre limité d’états précédents, on peut réduire la mémoire utilisée.'
                    ],

                    [
                        'question' => 'Quel concept est essentiel pour reconnaître un problème de Dynamic Programming ?',
                        'choices' => [
                            'Optimal Substructure',
                            'Random Pivot',
                            'Hash Collision',
                            'FIFO',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’Optimal Substructure signifie qu’une solution optimale peut être construite à partir de solutions optimales de sous-problèmes.'
                    ],

                    [
                        'question' => 'Quel problème classique utilise Dynamic Programming pour déterminer une distance entre deux chaînes ?',
                        'choices' => [
                            'Edit Distance',
                            'Binary Search',
                            'Heap Sort',
                            'DFS uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Edit Distance utilise une matrice DP pour calculer le nombre minimal d’opérations nécessaires pour transformer une chaîne en une autre.'
                    ],

                    [
                        'question' => 'Quelle est une différence importante entre Memoization et Tabulation ?',
                        'choices' => [
                            'Memoization est généralement Top-Down tandis que Tabulation est Bottom-Up',
                            'Memoization est toujours O(1)',
                            'Tabulation utilise toujours une Hash Table',
                            'Les deux sont complètement différents et ne résolvent jamais les mêmes problèmes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Memoization part généralement du problème initial avec récursion, tandis que Tabulation construit les résultats à partir des plus petits états.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — GREEDY & BACKTRACKING
            // ============================================================
            [
                'title' => 'Greedy Algorithms et Backtracking',
                'description' => 'Quiz avancé sur les stratégies gloutonnes, le Backtracking et la résolution de problèmes combinatoires.',
                'questions' => [

                    [
                        'question' => 'Quel principe caractérise un Greedy Algorithm ?',
                        'choices' => [
                            'Choisir à chaque étape une décision localement optimale',
                            'Tester systématiquement toutes les possibilités',
                            'Utiliser uniquement la récursion',
                            'Toujours construire une matrice DP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un algorithme glouton choisit une décision qui semble optimale à l’étape courante.'
                    ],

                    [
                        'question' => 'Un Greedy Algorithm garantit-il toujours une solution globale optimale ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Oui, uniquement pour les Graphs',
                            'Oui, uniquement pour les Arrays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une stratégie gloutonne n’est optimale que lorsque le problème possède les propriétés permettant de justifier cette stratégie.'
                    ],

                    [
                        'question' => 'Quel problème classique peut être résolu par une stratégie Greedy ?',
                        'choices' => [
                            'Activity Selection',
                            'Edit Distance toujours',
                            '0/1 Knapsack toujours avec Greedy',
                            'Fibonacci naïf uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Activity Selection est un exemple classique où une stratégie gloutonne permet d’obtenir une solution optimale.'
                    ],

                    [
                        'question' => 'Quel problème de Knapsack est particulièrement adapté à une approche Greedy ?',
                        'choices' => [
                            'Fractional Knapsack',
                            '0/1 Knapsack dans tous les cas',
                            'Aucun',
                            'Knapsack avec poids négatifs uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Fractional Knapsack permet de prendre une fraction d’un objet et peut être résolu optimalement en choisissant le meilleur ratio valeur/poids.'
                    ],

                    [
                        'question' => 'Quel est le principe du Backtracking ?',
                        'choices' => [
                            'Construire une solution progressivement et revenir en arrière lorsqu’un choix ne peut pas mener à une solution valide',
                            'Toujours choisir la première possibilité',
                            'Trier les solutions',
                            'Supprimer les sous-problèmes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Backtracking explore les possibilités et abandonne une branche dès qu’elle ne peut plus produire une solution valide.'
                    ],

                    [
                        'question' => 'Quel problème classique peut être résolu avec Backtracking ?',
                        'choices' => [
                            'N-Queens',
                            'Binary Search uniquement',
                            'Merge Sort uniquement',
                            'Heapify uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'N-Queens est un problème classique de recherche combinatoire pouvant être résolu par Backtracking.'
                    ],

                    [
                        'question' => 'Pourquoi Backtracking peut-il devenir coûteux pour de grands problèmes combinatoires ?',
                        'choices' => [
                            'Le nombre de possibilités peut croître exponentiellement',
                            'Il utilise toujours O(1) temps',
                            'Il ne fait aucune exploration',
                            'Il trie automatiquement toutes les possibilités',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’espace de recherche peut devenir exponentiel, même si le pruning permet parfois de réduire fortement le nombre de branches explorées.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le pruning en Backtracking ?',
                        'choices' => [
                            'Éliminer une branche qui ne peut pas produire une solution valide ou intéressante',
                            'Ajouter de nouvelles branches',
                            'Trier toutes les branches',
                            'Dupliquer tous les états',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le pruning réduit l’espace de recherche en évitant d’explorer des branches impossibles ou inutiles.'
                    ],

                    [
                        'question' => 'Quelle technique combine souvent choix récursifs et retour à l’état précédent ?',
                        'choices' => [
                            'Backtracking',
                            'Hashing',
                            'Binary Search',
                            'Heap Sort',
                        ],
                        'correct' => 0,
                        'explanation' => 'Backtracking construit une solution, explore une possibilité, puis restaure l’état précédent avant d’essayer une autre possibilité.'
                    ],

                    [
                        'question' => 'Quelle stratégie est particulièrement adaptée lorsqu’on doit explorer toutes les combinaisons possibles avec des contraintes ?',
                        'choices' => [
                            'Backtracking',
                            'Binary Search',
                            'Counting Sort',
                            'Hashing uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Backtracking permet d’explorer systématiquement les possibilités tout en éliminant les branches invalides grâce aux contraintes.'
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
                    'difficulty' => 'Advanced',
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

                // Important:
                // Supprimer les anciennes réponses avant de les recréer.
                $question->choices()->delete();

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                // Mélange sécurisé des choix.
                // is_correct reste attaché à la bonne réponse.
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