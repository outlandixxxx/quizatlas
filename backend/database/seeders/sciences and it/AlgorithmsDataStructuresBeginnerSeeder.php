<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class AlgorithmsDataStructuresBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algorithms-data-structures')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1
            // ============================================================
            [
                'title' => 'Introduction aux algorithmes',
                'description' => 'Quiz d’introduction aux concepts fondamentaux des algorithmes.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un algorithme ?',
                        'choices' => [
                            'Un ensemble fini d’étapes permettant de résoudre un problème',
                            'Un langage de programmation',
                            'Un système d’exploitation',
                            'Une base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un algorithme est une suite finie et ordonnée d’étapes permettant de résoudre un problème ou d’effectuer une tâche.'
                    ],
                    [
                        'question' => 'Quelle propriété doit posséder un algorithme ?',
                        'choices' => [
                            'Il doit toujours être écrit en code source',
                            'Il doit être composé d’étapes claires et finies',
                            'Il doit utiliser une base de données',
                            'Il doit être exécuté sur Internet',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un algorithme doit être composé d’étapes précises, compréhensibles et finies.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un algorithme ?',
                        'choices' => [
                            'Résoudre un problème',
                            'Créer uniquement des interfaces graphiques',
                            'Stocker des fichiers',
                            'Installer un système d’exploitation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le rôle principal d’un algorithme est de définir une méthode permettant de résoudre un problème.'
                    ],
                    [
                        'question' => 'Un algorithme peut-il être représenté sous forme d’un diagramme ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement en Java',
                            'Uniquement en Python',
                        ],
                        'correct' => 0,
                        'explanation' => 'Oui. Un algorithme peut notamment être représenté avec un organigramme (flowchart).'
                    ],
                    [
                        'question' => 'Quelle structure permet de représenter graphiquement les étapes d’un algorithme ?',
                        'choices' => [
                            'Un organigramme',
                            'Une base SQL',
                            'Un compilateur',
                            'Un serveur DNS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un organigramme (flowchart) représente graphiquement les différentes étapes et décisions d’un algorithme.'
                    ],
                    [
                        'question' => 'Un algorithme doit-il nécessairement être écrit dans un langage de programmation ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement en C',
                            'Uniquement en Python',
                        ],
                        'correct' => 1,
                        'explanation' => 'Non. Un algorithme peut être décrit en langage naturel, en pseudocode ou sous forme graphique avant son implémentation.'
                    ],
                    [
                        'question' => 'Quelle est généralement la première étape pour résoudre un problème algorithmique ?',
                        'choices' => [
                            'Comprendre et analyser le problème',
                            'Écrire immédiatement le code',
                            'Choisir une base de données',
                            'Installer un compilateur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avant de coder, il faut comprendre le problème, ses données d’entrée, ses sorties et ses contraintes.'
                    ],
                    [
                        'question' => 'Que représente une donnée d’entrée (input) ?',
                        'choices' => [
                            'Une donnée fournie à l’algorithme',
                            'Le résultat final uniquement',
                            'Une erreur du programme',
                            'Une instruction du processeur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une entrée est une donnée fournie à l’algorithme afin qu’il puisse effectuer son traitement.'
                    ],
                    [
                        'question' => 'Que représente une sortie (output) ?',
                        'choices' => [
                            'Le résultat produit par l’algorithme',
                            'Une donnée toujours saisie par l’utilisateur',
                            'Une instruction du compilateur',
                            'Une structure de données obligatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'La sortie est le résultat produit par l’algorithme après le traitement des données d’entrée.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on le pseudocode ?',
                        'choices' => [
                            'Pour décrire un algorithme indépendamment d’un langage précis',
                            'Pour remplacer définitivement tous les langages',
                            'Pour gérer les serveurs',
                            'Pour créer des bases de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le pseudocode permet de décrire clairement la logique d’un algorithme sans dépendre de la syntaxe d’un langage particulier.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2
            // ============================================================
            [
                'title' => 'Tableaux et opérations de base',
                'description' => 'Quiz sur les tableaux et leurs opérations fondamentales.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un tableau (Array) ?',
                        'choices' => [
                            'Une structure permettant de stocker plusieurs éléments',
                            'Un langage de programmation',
                            'Un système d’exploitation',
                            'Un protocole réseau',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tableau est une structure de données permettant de stocker plusieurs éléments accessibles à l’aide d’indices.'
                    ],
                    [
                        'question' => 'Comment accède-t-on généralement à un élément d’un tableau ?',
                        'choices' => [
                            'À l’aide de son index',
                            'À l’aide de son adresse email',
                            'À l’aide du processeur',
                            'À l’aide d’un port réseau',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les éléments d’un tableau sont généralement accessibles grâce à leur index.'
                    ],
                    [
                        'question' => 'Dans un tableau dont l’indexation commence à 0, quel est l’index du premier élément ?',
                        'choices' => [
                            '0',
                            '1',
                            '-1',
                            '10',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une indexation commençant à 0, le premier élément possède l’index 0.'
                    ],
                    [
                        'question' => 'Quel est l’avantage principal d’un tableau pour accéder à un élément connu ?',
                        'choices' => [
                            'L’accès peut être direct grâce à l’index',
                            'Il nécessite toujours une recherche complète',
                            'Il ne peut contenir qu’un élément',
                            'Il doit utiliser Internet',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’accès à un élément d’un tableau par son index est généralement direct.'
                    ],
                    [
                        'question' => 'Quelle opération consiste à parcourir les éléments d’un tableau ?',
                        'choices' => [
                            'Le parcours (traversal)',
                            'Le chiffrement',
                            'La compilation',
                            'Le routage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le parcours consiste à visiter successivement les éléments d’une structure de données.'
                    ],
                    [
                        'question' => 'Si un tableau contient 5 éléments et commence à l’index 0, quel est l’index du dernier élément ?',
                        'choices' => [
                            '4',
                            '5',
                            '3',
                            '0',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec 5 éléments et une indexation à partir de 0, les indices sont 0, 1, 2, 3 et 4.'
                    ],
                    [
                        'question' => 'Que signifie rechercher une valeur dans un tableau ?',
                        'choices' => [
                            'Vérifier si une valeur est présente et éventuellement trouver sa position',
                            'Supprimer automatiquement le tableau',
                            'Compiler le tableau',
                            'Transformer le tableau en base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une recherche consiste à déterminer si une valeur existe dans le tableau et éventuellement à identifier sa position.'
                    ],
                    [
                        'question' => 'Que signifie trier un tableau ?',
                        'choices' => [
                            'Organiser ses éléments selon un ordre',
                            'Supprimer tous ses éléments',
                            'Copier le tableau sur Internet',
                            'Changer son langage de programmation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Trier consiste à organiser les éléments selon un ordre, par exemple croissant ou décroissant.'
                    ],
                    [
                        'question' => 'Quel ordre est un exemple de tri valide ?',
                        'choices' => [
                            'Croissant',
                            'Aléatoire uniquement',
                            'Réseau',
                            'Binaire uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tableau peut notamment être trié dans un ordre croissant ou décroissant.'
                    ],
                    [
                        'question' => 'Quelle opération ajoute généralement un élément à un tableau dynamique ?',
                        'choices' => [
                            'Insertion',
                            'Compilation',
                            'Routage',
                            'Authentification',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’insertion consiste à ajouter un nouvel élément dans une structure de données.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Recherche linéaire',
                'description' => 'Quiz sur la recherche linéaire et les recherches simples.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une recherche linéaire ?',
                        'choices' => [
                            'Une recherche qui examine les éléments successivement',
                            'Une recherche qui utilise obligatoirement un arbre',
                            'Une recherche uniquement sur Internet',
                            'Une recherche basée uniquement sur le tri',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche linéaire examine généralement les éléments un par un jusqu’à trouver la valeur recherchée ou atteindre la fin.'
                    ],
                    [
                        'question' => 'Quelle est la complexité dans le pire cas d’une recherche linéaire dans un tableau de n éléments ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(log n)',
                            'O(n²)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans le pire cas, la recherche linéaire peut examiner les n éléments, ce qui donne O(n).'
                    ],
                    [
                        'question' => 'Dans le meilleur cas, combien d’éléments une recherche linéaire peut-elle examiner ?',
                        'choices' => [
                            'Un seul',
                            'Tous',
                            'n²',
                            'log n uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si la valeur recherchée est le premier élément, un seul élément est examiné.'
                    ],
                    [
                        'question' => 'Une recherche linéaire nécessite-t-elle que le tableau soit trié ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Uniquement pour les nombres',
                            'Uniquement pour les chaînes',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche linéaire peut fonctionner sur un tableau non trié.'
                    ],
                    [
                        'question' => 'Que retourne généralement une recherche réussie ?',
                        'choices' => [
                            'La position ou l’élément trouvé',
                            'Toujours une erreur',
                            'Le tableau entier uniquement',
                            'Le système d’exploitation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une recherche réussie peut retourner l’élément trouvé ou son index selon l’implémentation.'
                    ],
                    [
                        'question' => 'Que peut retourner une recherche si la valeur n’existe pas ?',
                        'choices' => [
                            'Une indication que la valeur n’a pas été trouvée',
                            'Toujours le premier élément',
                            'Le dernier élément automatiquement',
                            'Une nouvelle base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’algorithme doit pouvoir signaler que la valeur recherchée n’existe pas dans la structure.'
                    ],
                    [
                        'question' => 'La recherche linéaire est-elle généralement simple à implémenter ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement avec un compilateur spécial',
                            'Uniquement avec une base SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche linéaire est l’une des méthodes de recherche les plus simples à comprendre et à implémenter.'
                    ],
                    [
                        'question' => 'Pour une liste non triée, quelle recherche simple peut être utilisée ?',
                        'choices' => [
                            'Recherche linéaire',
                            'Recherche binaire uniquement',
                            'Dijkstra',
                            'DFS uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche linéaire ne nécessite pas que les données soient triées.'
                    ],
                    [
                        'question' => 'Si la valeur recherchée est située à la dernière position, combien d’éléments peuvent être examinés ?',
                        'choices' => [
                            'Tous les éléments',
                            'Un seul élément',
                            'Aucun',
                            'Deux uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans ce cas, la recherche peut devoir examiner tous les éléments avant de trouver la valeur.'
                    ],
                    [
                        'question' => 'Quelle structure est souvent utilisée pour illustrer simplement une recherche linéaire ?',
                        'choices' => [
                            'Un tableau',
                            'Un processeur',
                            'Un serveur DNS',
                            'Un fichier image',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un tableau est une structure classique pour illustrer la recherche linéaire.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4
            // ============================================================
            [
                'title' => 'Tri par sélection et tri à bulles',
                'description' => 'Quiz d’introduction aux algorithmes de tri simples.',
                'questions' => [
                    [
                        'question' => 'Quel est le principe du tri par sélection ?',
                        'choices' => [
                            'Sélectionner successivement le plus petit élément restant',
                            'Comparer uniquement le premier et le dernier élément',
                            'Diviser toujours le tableau en deux',
                            'Utiliser obligatoirement une Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri par sélection cherche le plus petit élément de la partie non triée puis le place à la position correcte.'
                    ],
                    [
                        'question' => 'Quel est le principe général du tri à bulles ?',
                        'choices' => [
                            'Comparer des éléments voisins et les échanger si nécessaire',
                            'Utiliser uniquement des arbres',
                            'Supprimer les éléments non triés',
                            'Effectuer une recherche binaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri à bulles compare des éléments adjacents et les échange lorsqu’ils sont dans le mauvais ordre.'
                    ],
                    [
                        'question' => 'Quelle est la complexité typique du tri par sélection dans le pire cas ?',
                        'choices' => [
                            'O(n²)',
                            'O(1)',
                            'O(log n)',
                            'O(n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri par sélection effectue généralement un nombre quadratique de comparaisons, soit O(n²).'
                    ],
                    [
                        'question' => 'Quelle est la complexité typique du tri à bulles dans le pire cas ?',
                        'choices' => [
                            'O(n²)',
                            'O(1)',
                            'O(log n)',
                            'O(log log n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans sa forme classique, le tri à bulles possède une complexité O(n²) dans le pire cas.'
                    ],
                    [
                        'question' => 'Le tri à bulles peut-il fonctionner sur un tableau non trié ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement avec des nombres premiers',
                            'Uniquement avec des chaînes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri à bulles peut trier un tableau quelle que soit son organisation initiale.'
                    ],
                    [
                        'question' => 'Que signifie effectuer un échange (swap) ?',
                        'choices' => [
                            'Permuter deux éléments',
                            'Supprimer deux éléments',
                            'Copier le tableau',
                            'Rechercher une valeur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un swap consiste à échanger les positions de deux éléments.'
                    ],
                    [
                        'question' => 'Pourquoi les algorithmes de tri sont-ils importants ?',
                        'choices' => [
                            'Ils permettent d’organiser les données',
                            'Ils remplacent les systèmes d’exploitation',
                            'Ils servent uniquement à créer des interfaces',
                            'Ils empêchent toute recherche',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri facilite notamment la recherche, l’analyse et la présentation organisée des données.'
                    ],
                    [
                        'question' => 'Quel tri compare principalement des éléments voisins ?',
                        'choices' => [
                            'Tri à bulles',
                            'Tri par sélection',
                            'Recherche linéaire',
                            'Dijkstra',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri à bulles compare principalement des éléments voisins.'
                    ],
                    [
                        'question' => 'Quel tri recherche le minimum dans la partie non triée ?',
                        'choices' => [
                            'Tri par sélection',
                            'Tri à bulles',
                            'Recherche linéaire',
                            'DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri par sélection recherche le plus petit élément restant et le place à sa position.'
                    ],
                    [
                        'question' => 'Que produit un tri croissant sur [3, 1, 2] ?',
                        'choices' => [
                            '[1, 2, 3]',
                            '[3, 2, 1]',
                            '[2, 3, 1]',
                            '[1, 3, 2]',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans l’ordre croissant, les valeurs sont organisées de la plus petite à la plus grande : [1, 2, 3].'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5
            // ============================================================
            [
                'title' => 'Notions de complexité algorithmique',
                'description' => 'Quiz d’introduction à la complexité temporelle et spatiale.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la complexité temporelle ?',
                        'choices' => [
                            'La quantité de travail nécessaire en fonction de la taille des données',
                            'La taille de l’écran',
                            'La vitesse du réseau uniquement',
                            'Le nombre de fichiers',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité temporelle décrit comment le temps d’exécution évolue avec la taille de l’entrée.'
                    ],
                    [
                        'question' => 'Que signifie O(1) ?',
                        'choices' => [
                            'Temps constant',
                            'Temps linéaire',
                            'Temps quadratique',
                            'Temps exponentiel',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(1) signifie que le coût ne dépend pas de manière croissante de la taille de l’entrée.'
                    ],
                    [
                        'question' => 'Que signifie O(n) ?',
                        'choices' => [
                            'Temps linéaire',
                            'Temps constant',
                            'Temps quadratique',
                            'Temps logarithmique',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(n) indique que le coût augmente proportionnellement à la taille n de l’entrée.'
                    ],
                    [
                        'question' => 'Que signifie généralement O(n²) ?',
                        'choices' => [
                            'Temps quadratique',
                            'Temps constant',
                            'Temps logarithmique',
                            'Temps linéaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(n²) correspond à une croissance quadratique.'
                    ],
                    [
                        'question' => 'Pourquoi analyse-t-on la complexité d’un algorithme ?',
                        'choices' => [
                            'Pour comparer son efficacité lorsque les données augmentent',
                            'Pour choisir la couleur d’une interface',
                            'Pour modifier le système d’exploitation',
                            'Pour créer un compte utilisateur',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité permet notamment de comparer les performances des algorithmes lorsque la taille des données augmente.'
                    ],
                    [
                        'question' => 'Quelle complexité est généralement meilleure pour de grandes entrées ?',
                        'choices' => [
                            'O(log n)',
                            'O(n²)',
                            'O(n³)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(log n) croît beaucoup plus lentement que les complexités polynomiales élevées ou exponentielles.'
                    ],
                    [
                        'question' => 'Que mesure principalement la complexité spatiale ?',
                        'choices' => [
                            'La mémoire supplémentaire utilisée par l’algorithme',
                            'La vitesse du processeur uniquement',
                            'La vitesse Internet',
                            'Le nombre d’utilisateurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité spatiale analyse la quantité de mémoire utilisée par un algorithme en fonction de l’entrée.'
                    ],
                    [
                        'question' => 'Quelle complexité correspond généralement à une boucle parcourant n éléments une seule fois ?',
                        'choices' => [
                            'O(n)',
                            'O(1)',
                            'O(n²)',
                            'O(2ⁿ)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une boucle qui visite chaque élément une seule fois effectue généralement n opérations, soit O(n).'
                    ],
                    [
                        'question' => 'Deux boucles imbriquées parcourant chacune n éléments peuvent donner quelle complexité ?',
                        'choices' => [
                            'O(n²)',
                            'O(1)',
                            'O(log n)',
                            'O(n)',
                        ],
                        'correct' => 0,
                        'explanation' => 'Deux boucles imbriquées de taille n peuvent effectuer environ n × n opérations, soit O(n²).'
                    ],
                    [
                        'question' => 'La notation Big O décrit principalement quoi ?',
                        'choices' => [
                            'Le comportement asymptotique d’un algorithme',
                            'Le langage de programmation utilisé',
                            'La mémoire physique exacte du serveur',
                            'Le nombre exact de secondes d’exécution',
                        ],
                        'correct' => 0,
                        'explanation' => 'Big O décrit l’évolution asymptotique du coût d’un algorithme lorsque la taille de l’entrée augmente.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6
            // ============================================================
            [
                'title' => 'Stacks et Queues',
                'description' => 'Quiz sur les structures Stack et Queue.',
                'questions' => [
                    [
                        'question' => 'Quel principe utilise une Stack ?',
                        'choices' => [
                            'LIFO',
                            'FIFO',
                            'HTTP',
                            'TCP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Stack fonctionne selon le principe LIFO : Last In, First Out.'
                    ],
                    [
                        'question' => 'Que signifie LIFO ?',
                        'choices' => [
                            'Last In, First Out',
                            'Last Input, First Output',
                            'Linear In, Fast Out',
                            'List In, First Order',
                        ],
                        'correct' => 0,
                        'explanation' => 'LIFO signifie que le dernier élément ajouté est le premier à être retiré.'
                    ],
                    [
                        'question' => 'Quel principe utilise une Queue ?',
                        'choices' => [
                            'FIFO',
                            'LIFO',
                            'DFS',
                            'BFS uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Queue fonctionne selon le principe FIFO : First In, First Out.'
                    ],
                    [
                        'question' => 'Que signifie FIFO ?',
                        'choices' => [
                            'First In, First Out',
                            'Fast Input, Fast Output',
                            'First Index, First Order',
                            'File Input, File Output',
                        ],
                        'correct' => 0,
                        'explanation' => 'FIFO signifie que le premier élément ajouté est le premier à être retiré.'
                    ],
                    [
                        'question' => 'Quelle opération ajoute généralement un élément au sommet d’une Stack ?',
                        'choices' => [
                            'Push',
                            'Pop',
                            'Dequeue',
                            'Search',
                        ],
                        'correct' => 0,
                        'explanation' => 'Push ajoute un élément au sommet d’une Stack.'
                    ],
                    [
                        'question' => 'Quelle opération retire généralement le sommet d’une Stack ?',
                        'choices' => [
                            'Pop',
                            'Push',
                            'Enqueue',
                            'Insert',
                        ],
                        'correct' => 0,
                        'explanation' => 'Pop retire généralement l’élément situé au sommet de la Stack.'
                    ],
                    [
                        'question' => 'Quelle opération ajoute un élément à une Queue ?',
                        'choices' => [
                            'Enqueue',
                            'Dequeue',
                            'Pop',
                            'Peek',
                        ],
                        'correct' => 0,
                        'explanation' => 'Enqueue ajoute un élément à une Queue.'
                    ],
                    [
                        'question' => 'Quelle opération retire généralement un élément d’une Queue ?',
                        'choices' => [
                            'Dequeue',
                            'Enqueue',
                            'Push',
                            'Append uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dequeue retire généralement l’élément situé à l’avant de la Queue.'
                    ],
                    [
                        'question' => 'Quelle structure est adaptée pour gérer une file d’attente ?',
                        'choices' => [
                            'Queue',
                            'Stack',
                            'Tree uniquement',
                            'Hash Table uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Queue est naturellement adaptée aux situations de file d’attente grâce au principe FIFO.'
                    ],
                    [
                        'question' => 'Quelle structure est souvent utilisée pour gérer les appels de fonctions ?',
                        'choices' => [
                            'Stack',
                            'Queue',
                            'Graph',
                            'Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'La Stack est utilisée notamment pour gérer les appels de fonctions et leur contexte d’exécution.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7
            // ============================================================
            [
                'title' => 'Introduction à la récursivité',
                'description' => 'Quiz d’introduction aux fonctions récursives.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la récursivité ?',
                        'choices' => [
                            'Une fonction qui s’appelle elle-même',
                            'Une fonction qui ne peut être appelée qu’une fois',
                            'Une méthode de tri uniquement',
                            'Une structure de base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une fonction récursive est une fonction qui s’appelle directement ou indirectement elle-même.'
                    ],
                    [
                        'question' => 'Quel élément est essentiel pour arrêter une récursion ?',
                        'choices' => [
                            'Un cas de base',
                            'Une base de données',
                            'Une boucle infinie',
                            'Un serveur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le cas de base indique quand la récursion doit s’arrêter.'
                    ],
                    [
                        'question' => 'Que risque-t-il de se produire si une récursion ne possède pas de condition d’arrêt correcte ?',
                        'choices' => [
                            'Une récursion infinie peut se produire',
                            'Le tableau devient automatiquement trié',
                            'Le programme devient toujours plus rapide',
                            'La mémoire est automatiquement libérée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sans condition d’arrêt appropriée, les appels récursifs peuvent continuer jusqu’à provoquer une erreur.'
                    ],
                    [
                        'question' => 'La récursivité utilise-t-elle généralement la Stack d’appels ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement avec SQL',
                            'Uniquement avec HTML',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les appels récursifs sont généralement stockés dans la call stack jusqu’à leur résolution.'
                    ],
                    [
                        'question' => 'La fonction factorielle peut-elle être définie récursivement ?',
                        'choices' => [
                            'Oui',
                            'Non',
                            'Uniquement avec un système d’exploitation',
                            'Uniquement avec une base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'La factorielle est un exemple classique permettant d’illustrer la récursivité.'
                    ],
                    [
                        'question' => 'Quel est le cas de base classique de la factorielle 0! ?',
                        'choices' => [
                            '0! = 1',
                            '0! = 0',
                            '0! = -1',
                            '0! = 2',
                        ],
                        'correct' => 0,
                        'explanation' => 'Par définition, 0! = 1, ce qui constitue un cas de base classique pour une définition récursive de la factorielle.'
                    ],
                    [
                        'question' => 'Une récursion peut-elle être remplacée par une boucle dans certains problèmes ?',
                        'choices' => [
                            'Oui',
                            'Non, jamais',
                            'Uniquement en SQL',
                            'Uniquement en HTML',
                        ],
                        'correct' => 0,
                        'explanation' => 'De nombreux algorithmes récursifs peuvent être transformés en versions itératives utilisant des boucles.'
                    ],
                    [
                        'question' => 'Quel est un risque fréquent d’une récursion profonde ?',
                        'choices' => [
                            'Une consommation importante de la Stack',
                            'Une amélioration automatique des performances',
                            'La suppression du code source',
                            'La création automatique d’une base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une récursion profonde peut utiliser beaucoup d’espace dans la call stack et provoquer un dépassement de pile.'
                    ],
                    [
                        'question' => 'Une fonction récursive doit-elle toujours avoir un seul appel récursif ?',
                        'choices' => [
                            'Non',
                            'Oui',
                            'Uniquement en Python',
                            'Uniquement en Java',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une fonction peut contenir plusieurs appels récursifs, comme dans certains algorithmes sur les arbres.'
                    ],
                    [
                        'question' => 'Quel concept est directement lié à l’arrêt d’une fonction récursive ?',
                        'choices' => [
                            'Condition de base',
                            'Adresse IP',
                            'Index SQL',
                            'Port réseau',
                        ],
                        'correct' => 0,
                        'explanation' => 'La condition ou le cas de base détermine quand les appels récursifs doivent s’arrêter.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8
            // ============================================================
            [
                'title' => 'Problèmes algorithmiques fondamentaux',
                'description' => 'Quiz de synthèse sur les concepts fondamentaux des algorithmes.',
                'questions' => [
                    [
                        'question' => 'Quelle est généralement la première étape lors de la conception d’un algorithme ?',
                        'choices' => [
                            'Analyser le problème',
                            'Optimiser le code',
                            'Choisir un framework',
                            'Créer une interface graphique',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse du problème permet de comprendre les entrées, les sorties, les contraintes et les objectifs.'
                    ],
                    [
                        'question' => 'Quel algorithme simple peut rechercher une valeur dans un tableau non trié ?',
                        'choices' => [
                            'Recherche linéaire',
                            'Recherche binaire obligatoirement',
                            'Dijkstra',
                            'Kruskal',
                        ],
                        'correct' => 0,
                        'explanation' => 'La recherche linéaire peut être appliquée directement à un tableau non trié.'
                    ],
                    [
                        'question' => 'Quel concept permet de mesurer approximativement l’évolution du temps d’exécution ?',
                        'choices' => [
                            'Complexité temporelle',
                            'Encodage',
                            'Routage',
                            'Compilation',
                        ],
                        'correct' => 0,
                        'explanation' => 'La complexité temporelle décrit comment le coût d’exécution évolue avec la taille de l’entrée.'
                    ],
                    [
                        'question' => 'Quelle structure suit le principe LIFO ?',
                        'choices' => [
                            'Stack',
                            'Queue',
                            'Array uniquement',
                            'Graph uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Stack suit le principe LIFO.'
                    ],
                    [
                        'question' => 'Quelle structure suit le principe FIFO ?',
                        'choices' => [
                            'Queue',
                            'Stack',
                            'Tree',
                            'Hash Table',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Queue suit le principe FIFO.'
                    ],
                    [
                        'question' => 'Quel algorithme de tri simple compare des éléments voisins ?',
                        'choices' => [
                            'Tri à bulles',
                            'Tri par sélection',
                            'Recherche linéaire',
                            'DFS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le tri à bulles compare des éléments voisins et les échange si nécessaire.'
                    ],
                    [
                        'question' => 'Quel élément est indispensable dans une fonction récursive ?',
                        'choices' => [
                            'Un cas de base',
                            'Une connexion Internet',
                            'Une base SQL',
                            'Un tableau de taille fixe',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le cas de base permet à la récursion de s’arrêter.'
                    ],
                    [
                        'question' => 'Quelle complexité est généralement la plus efficace parmi O(1), O(n) et O(n²) lorsque n devient très grand ?',
                        'choices' => [
                            'O(1)',
                            'O(n)',
                            'O(n²)',
                            'Elles sont toujours identiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'O(1) ne croît pas avec n, contrairement à O(n) et O(n²).'
                    ],
                    [
                        'question' => 'Pourquoi une structure de données est-elle utilisée ?',
                        'choices' => [
                            'Pour organiser et manipuler efficacement les données',
                            'Pour remplacer le système d’exploitation',
                            'Pour créer uniquement des interfaces',
                            'Pour empêcher tout traitement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les structures de données permettent d’organiser les données afin de faciliter leur stockage, accès et traitement.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un bon algorithme ?',
                        'choices' => [
                            'Résoudre correctement le problème avec une utilisation raisonnable des ressources',
                            'Être le plus long possible',
                            'Utiliser le plus de mémoire possible',
                            'Être obligatoirement récursif',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un bon algorithme doit produire un résultat correct tout en utilisant efficacement les ressources disponibles.'
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
                    'difficulty' => 'Beginner',
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

                // Supprimer les anciennes réponses avant de les recréer.
                $question->choices()->delete();

                // Préparer les choix en conservant leur statut correct.
                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                // Mélanger les choix.
                // La bonne réponse gardera is_correct = true,
                // mais sa position changera aléatoirement.
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