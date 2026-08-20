<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();

        $quizzes = [

            // =====================================================
            // QUIZ 1
            // =====================================================
            [
                'title' => 'Structures de données fondamentales',
                'description' => 'Quiz sur les principales structures de données utilisées en programmation.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Quelle structure de données fonctionne selon le principe LIFO ?',
                        'explanation' => 'Une Stack fonctionne selon le principe LIFO (Last In, First Out) : le dernier élément ajouté est le premier à être retiré.',
                        'choices' => [
                            ['text' => 'Stack', 'correct' => true],
                            ['text' => 'Queue', 'correct' => false],
                            ['text' => 'Array', 'correct' => false],
                            ['text' => 'Graph', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure de données fonctionne selon le principe FIFO ?',
                        'explanation' => 'Une Queue fonctionne selon le principe FIFO (First In, First Out) : le premier élément ajouté est le premier à être retiré.',
                        'choices' => [
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Queue', 'correct' => true],
                            ['text' => 'Tree', 'correct' => false],
                            ['text' => 'Hash table', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal d’une Hash table ?',
                        'explanation' => 'Une Hash table permet généralement d’effectuer des recherches, insertions et suppressions très rapidement en moyenne, souvent en O(1).',
                        'choices' => [
                            ['text' => 'Permettre des recherches rapides en moyenne grâce à une clé', 'correct' => true],
                            ['text' => 'Stocker uniquement des nombres', 'correct' => false],
                            ['text' => 'Garantir toujours un ordre trié', 'correct' => false],
                            ['text' => 'Remplacer toutes les bases de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure est particulièrement adaptée pour représenter une hiérarchie ?',
                        'explanation' => 'Un Tree représente naturellement des relations hiérarchiques avec des nœuds et des relations parent-enfant.',
                        'choices' => [
                            ['text' => 'Tree', 'correct' => true],
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Queue', 'correct' => false],
                            ['text' => 'String', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un Binary Search Tree équilibré, quelle est généralement la complexité moyenne d’une recherche ?',
                        'explanation' => 'Dans un Binary Search Tree équilibré, la hauteur est généralement logarithmique, ce qui permet une recherche moyenne en O(log n).',
                        'choices' => [
                            ['text' => 'O(1)', 'correct' => false],
                            ['text' => 'O(log n)', 'correct' => true],
                            ['text' => 'O(n²)', 'correct' => false],
                            ['text' => 'O(2ⁿ)', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure est généralement utilisée pour représenter des connexions entre différents éléments ?',
                        'explanation' => 'Un Graph permet de représenter des sommets reliés par des arêtes, ce qui convient aux réseaux et relations.',
                        'choices' => [
                            ['text' => 'Graph', 'correct' => true],
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Variable', 'correct' => false],
                            ['text' => 'String', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre un Array et une Linked List ?',
                        'explanation' => 'Un Array stocke généralement les éléments de manière contiguë et permet un accès direct par indice. Une Linked List relie les éléments entre eux par des références.',
                        'choices' => [
                            ['text' => 'Un Array permet généralement un accès direct par indice, tandis qu’une Linked List repose sur des liens entre les éléments', 'correct' => true],
                            ['text' => 'Une Linked List ne peut contenir qu’un seul élément', 'correct' => false],
                            ['text' => 'Un Array ne peut jamais être parcouru', 'correct' => false],
                            ['text' => 'Il n’existe aucune différence', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un nœud dans une Linked List ?',
                        'explanation' => 'Un nœud contient généralement une donnée et une référence vers un autre nœud.',
                        'choices' => [
                            ['text' => 'Stocker une donnée et une référence vers un autre élément', 'correct' => true],
                            ['text' => 'Compiler automatiquement le programme', 'correct' => false],
                            ['text' => 'Créer uniquement des nombres', 'correct' => false],
                            ['text' => 'Remplacer le système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure est adaptée à la gestion des tâches dans l’ordre d’arrivée ?',
                        'explanation' => 'Une Queue permet de traiter les éléments dans leur ordre d’arrivée.',
                        'choices' => [
                            ['text' => 'Queue', 'correct' => true],
                            ['text' => 'Stack', 'correct' => false],
                            ['text' => 'Tree', 'correct' => false],
                            ['text' => 'Hash table', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix d’une structure de données est-il important ?',
                        'explanation' => 'Une structure adaptée peut améliorer les performances, la lisibilité et la facilité de manipulation des données.',
                        'choices' => [
                            ['text' => 'Parce qu’elle influence les performances et la manière dont les données sont manipulées', 'correct' => true],
                            ['text' => 'Parce qu’elle détermine automatiquement le langage utilisé', 'correct' => false],
                            ['text' => 'Parce qu’elle empêche toutes les erreurs', 'correct' => false],
                            ['text' => 'Parce qu’elle remplace les algorithmes', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 2
            // =====================================================
            [
                'title' => 'Programmation orientée objet',
                'description' => 'Quiz sur les principes fondamentaux de la programmation orientée objet.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la programmation orientée objet ?',
                        'explanation' => 'La programmation orientée objet organise le programme autour d’objets qui regroupent des données et des comportements.',
                        'choices' => [
                            ['text' => 'Organiser le programme autour d’objets regroupant données et comportements', 'correct' => true],
                            ['text' => 'Éviter totalement l’utilisation de fonctions', 'correct' => false],
                            ['text' => 'Remplacer les bases de données', 'correct' => false],
                            ['text' => 'Empêcher toute modification du code', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une classe ?',
                        'explanation' => 'Une classe constitue généralement un modèle définissant les propriétés et comportements que peuvent posséder ses objets.',
                        'choices' => [
                            ['text' => 'Un modèle permettant de définir les propriétés et comportements d’objets', 'correct' => true],
                            ['text' => 'Une instance obligatoire d’un objet', 'correct' => false],
                            ['text' => 'Une base de données', 'correct' => false],
                            ['text' => 'Une boucle spéciale', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un objet ?',
                        'explanation' => 'Un objet est généralement une instance d’une classe.',
                        'choices' => [
                            ['text' => 'Une instance d’une classe', 'correct' => true],
                            ['text' => 'Un fichier source', 'correct' => false],
                            ['text' => 'Un type de boucle', 'correct' => false],
                            ['text' => 'Une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une propriété dans une classe ?',
                        'explanation' => 'Une propriété représente une donnée ou un état associé à un objet.',
                        'choices' => [
                            ['text' => 'Une donnée représentant une caractéristique ou un état de l’objet', 'correct' => true],
                            ['text' => 'Une instruction conditionnelle', 'correct' => false],
                            ['text' => 'Une erreur', 'correct' => false],
                            ['text' => 'Une requête SQL obligatoire', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une méthode dans une classe ?',
                        'explanation' => 'Une méthode définit généralement un comportement ou une opération qu’un objet peut effectuer.',
                        'choices' => [
                            ['text' => 'Un comportement ou une opération associée à l’objet', 'correct' => true],
                            ['text' => 'Une valeur constante uniquement', 'correct' => false],
                            ['text' => 'Une table SQL', 'correct' => false],
                            ['text' => 'Un fichier image', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe OOP consiste à regrouper les données et les méthodes dans une même unité ?',
                        'explanation' => 'L’encapsulation permet de regrouper l’état et les comportements d’un objet et de contrôler l’accès à ses données.',
                        'choices' => [
                            ['text' => 'Encapsulation', 'correct' => true],
                            ['text' => 'Compilation', 'correct' => false],
                            ['text' => 'Récursivité', 'correct' => false],
                            ['text' => 'Itération', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet l’héritage ?',
                        'explanation' => 'L’héritage permet à une classe de réutiliser ou spécialiser les caractéristiques d’une autre classe.',
                        'choices' => [
                            ['text' => 'Créer une classe à partir d’une autre classe en réutilisant certaines caractéristiques', 'correct' => true],
                            ['text' => 'Supprimer toutes les méthodes', 'correct' => false],
                            ['text' => 'Créer automatiquement une base de données', 'correct' => false],
                            ['text' => 'Transformer une classe en fonction', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le polymorphisme en OOP ?',
                        'explanation' => 'Le polymorphisme permet notamment à différents objets de répondre différemment à une même interface ou méthode.',
                        'choices' => [
                            ['text' => 'Permettre à différentes classes ou objets de fournir des comportements différents à travers une même interface', 'correct' => true],
                            ['text' => 'Interdire l’héritage', 'correct' => false],
                            ['text' => 'Créer uniquement des variables globales', 'correct' => false],
                            ['text' => 'Supprimer les méthodes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on un constructeur ?',
                        'explanation' => 'Un constructeur est généralement exécuté lors de la création d’un objet afin d’initialiser son état.',
                        'choices' => [
                            ['text' => 'Pour initialiser un objet lors de sa création', 'correct' => true],
                            ['text' => 'Pour supprimer une classe', 'correct' => false],
                            ['text' => 'Pour compiler une base de données', 'correct' => false],
                            ['text' => 'Pour arrêter une boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux avantages de l’OOP dans les grands projets ?',
                        'explanation' => 'L’OOP peut améliorer l’organisation, la réutilisation et la maintenance du code grâce à la séparation des responsabilités.',
                        'choices' => [
                            ['text' => 'Améliorer l’organisation, la réutilisation et la maintenance du code', 'correct' => true],
                            ['text' => 'Supprimer automatiquement toutes les erreurs', 'correct' => false],
                            ['text' => 'Éliminer complètement les bases de données', 'correct' => false],
                            ['text' => 'Rendre toutes les opérations instantanées', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 3
            // =====================================================
            [
                'title' => 'Classes, objets et encapsulation',
                'description' => 'Quiz approfondi sur les classes, objets, visibilité et encapsulation.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Pourquoi utilise-t-on généralement une propriété `private` ?',
                        'explanation' => 'Une propriété private limite directement son accès à l’intérieur de la classe qui la définit.',
                        'choices' => [
                            ['text' => 'Pour limiter directement son accès à la classe qui la définit', 'correct' => true],
                            ['text' => 'Pour rendre la propriété accessible partout', 'correct' => false],
                            ['text' => 'Pour empêcher la création d’objets', 'correct' => false],
                            ['text' => 'Pour transformer la propriété en constante', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent généralement les getters et setters ?',
                        'explanation' => 'Ils permettent de contrôler la lecture et la modification des propriétés d’un objet.',
                        'choices' => [
                            ['text' => 'À contrôler l’accès aux propriétés d’un objet', 'correct' => true],
                            ['text' => 'À créer automatiquement une base de données', 'correct' => false],
                            ['text' => 'À compiler le programme', 'correct' => false],
                            ['text' => 'À supprimer les classes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet le mot-clé `public` dans de nombreux langages OOP ?',
                        'explanation' => 'Une propriété ou méthode publique peut généralement être accessible depuis l’extérieur de la classe.',
                        'choices' => [
                            ['text' => 'Permettre un accès depuis les parties autorisées du programme, notamment depuis l’extérieur de la classe', 'correct' => true],
                            ['text' => 'Interdire tout accès', 'correct' => false],
                            ['text' => 'Créer automatiquement une interface', 'correct' => false],
                            ['text' => 'Transformer une méthode en constante', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de l’encapsulation ?',
                        'explanation' => 'L’encapsulation permet de protéger l’état interne d’un objet et de contrôler la manière dont il est manipulé.',
                        'choices' => [
                            ['text' => 'Protéger l’état interne et contrôler l’accès aux données de l’objet', 'correct' => true],
                            ['text' => 'Supprimer les propriétés', 'correct' => false],
                            ['text' => 'Rendre toutes les données publiques', 'correct' => false],
                            ['text' => 'Éviter toute utilisation de méthodes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi valider une donnée dans un setter peut-il être utile ?',
                        'explanation' => 'Un setter peut vérifier une valeur avant de la stocker afin de préserver la cohérence de l’état de l’objet.',
                        'choices' => [
                            ['text' => 'Pour empêcher l’objet de recevoir des valeurs invalides', 'correct' => true],
                            ['text' => 'Pour accélérer obligatoirement le processeur', 'correct' => false],
                            ['text' => 'Pour supprimer la classe', 'correct' => false],
                            ['text' => 'Pour éviter toute utilisation de variables', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence entre une classe et une instance ?',
                        'explanation' => 'La classe définit le modèle tandis qu’une instance est un objet concret créé à partir de ce modèle.',
                        'choices' => [
                            ['text' => 'La classe est le modèle et l’instance est un objet créé à partir de ce modèle', 'correct' => true],
                            ['text' => 'Une instance est toujours une base de données', 'correct' => false],
                            ['text' => 'Une classe ne peut jamais contenir de méthodes', 'correct' => false],
                            ['text' => 'Il n’y a aucune différence', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser une méthode plutôt que modifier directement une propriété ?',
                        'explanation' => 'Une méthode peut appliquer des règles ou validations avant de modifier l’état de l’objet.',
                        'choices' => [
                            ['text' => 'Pour contrôler la manière dont l’état de l’objet est modifié', 'correct' => true],
                            ['text' => 'Pour empêcher la création d’objets', 'correct' => false],
                            ['text' => 'Pour supprimer les variables', 'correct' => false],
                            ['text' => 'Pour éviter l’utilisation de classes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un état d’objet ?',
                        'explanation' => 'L’état d’un objet correspond aux valeurs actuelles de ses propriétés.',
                        'choices' => [
                            ['text' => 'L’ensemble des valeurs actuelles de ses propriétés', 'correct' => true],
                            ['text' => 'Uniquement le nom de sa classe', 'correct' => false],
                            ['text' => 'Le nombre de fichiers du projet', 'correct' => false],
                            ['text' => 'Le langage de programmation utilisé', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le bénéfice d’une bonne encapsulation ?',
                        'explanation' => 'Une bonne encapsulation réduit les dépendances directes entre les parties du programme et protège les invariants de l’objet.',
                        'choices' => [
                            ['text' => 'Réduire les dépendances et mieux contrôler les modifications de l’état', 'correct' => true],
                            ['text' => 'Augmenter automatiquement la vitesse du réseau', 'correct' => false],
                            ['text' => 'Supprimer les méthodes', 'correct' => false],
                            ['text' => 'Rendre toutes les propriétés publiques', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe consiste à cacher les détails internes d’une classe ?',
                        'explanation' => 'L’encapsulation implique notamment de masquer les détails internes et d’exposer seulement les opérations nécessaires.',
                        'choices' => [
                            ['text' => 'Encapsulation', 'correct' => true],
                            ['text' => 'Itération', 'correct' => false],
                            ['text' => 'Récursivité', 'correct' => false],
                            ['text' => 'Compilation', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 4
            // =====================================================
            [
                'title' => 'Héritage et polymorphisme',
                'description' => 'Quiz sur l’héritage, le polymorphisme, les interfaces et l’abstraction.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’héritage ?',
                        'explanation' => 'L’héritage permet de créer une relation entre classes et de réutiliser ou spécialiser des comportements.',
                        'choices' => [
                            ['text' => 'Réutiliser et spécialiser des caractéristiques d’une classe existante', 'correct' => true],
                            ['text' => 'Supprimer les classes existantes', 'correct' => false],
                            ['text' => 'Remplacer les variables', 'correct' => false],
                            ['text' => 'Créer automatiquement une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle classe est généralement appelée classe parent ?',
                        'explanation' => 'La classe parent est celle dont une autre classe hérite des propriétés ou comportements.',
                        'choices' => [
                            ['text' => 'La classe dont une autre classe hérite', 'correct' => true],
                            ['text' => 'La classe créée en dernier', 'correct' => false],
                            ['text' => 'La classe qui ne possède aucune méthode', 'correct' => false],
                            ['text' => 'Une classe toujours abstraite', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une classe enfant ?',
                        'explanation' => 'Une classe enfant hérite généralement de caractéristiques d’une classe parent et peut les compléter ou les modifier.',
                        'choices' => [
                            ['text' => 'Une classe qui hérite d’une autre classe', 'correct' => true],
                            ['text' => 'Une classe qui ne peut pas être instanciée', 'correct' => false],
                            ['text' => 'Une classe contenant uniquement des variables', 'correct' => false],
                            ['text' => 'Une classe représentant une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie redéfinir une méthode (method overriding) ?',
                        'explanation' => 'Une classe enfant peut fournir sa propre implémentation d’une méthode héritée.',
                        'choices' => [
                            ['text' => 'Fournir une nouvelle implémentation d’une méthode héritée', 'correct' => true],
                            ['text' => 'Supprimer toute la classe parent', 'correct' => false],
                            ['text' => 'Transformer une méthode en variable', 'correct' => false],
                            ['text' => 'Créer automatiquement une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une interface en programmation orientée objet ?',
                        'explanation' => 'Une interface définit généralement un contrat que les classes qui l’implémentent doivent respecter.',
                        'choices' => [
                            ['text' => 'Un contrat définissant des comportements que les classes doivent respecter', 'correct' => true],
                            ['text' => 'Une base de données', 'correct' => false],
                            ['text' => 'Un type de variable', 'correct' => false],
                            ['text' => 'Une boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’abstraction ?',
                        'explanation' => 'L’abstraction consiste à exposer les éléments essentiels tout en masquant les détails d’implémentation inutiles.',
                        'choices' => [
                            ['text' => 'Masquer les détails inutiles et exposer les éléments essentiels', 'correct' => true],
                            ['text' => 'Rendre toutes les propriétés publiques', 'correct' => false],
                            ['text' => 'Supprimer les classes', 'correct' => false],
                            ['text' => 'Éviter toute utilisation de méthodes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage offre le polymorphisme ?',
                        'explanation' => 'Le polymorphisme permet d’écrire du code qui peut fonctionner avec différents types d’objets partageant un même contrat ou une même abstraction.',
                        'choices' => [
                            ['text' => 'Permettre à un même code de travailler avec différents objets selon leur implémentation', 'correct' => true],
                            ['text' => 'Supprimer l’héritage', 'correct' => false],
                            ['text' => 'Interdire les interfaces', 'correct' => false],
                            ['text' => 'Créer automatiquement des variables', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter une hiérarchie d’héritage inutilement profonde ?',
                        'explanation' => 'Une hiérarchie trop profonde peut rendre le code difficile à comprendre, tester et maintenir.',
                        'choices' => [
                            ['text' => 'Parce qu’elle peut augmenter la complexité et rendre le code plus difficile à maintenir', 'correct' => true],
                            ['text' => 'Parce qu’une classe ne peut jamais hériter', 'correct' => false],
                            ['text' => 'Parce que l’héritage empêche toute réutilisation', 'correct' => false],
                            ['text' => 'Parce qu’elle supprime automatiquement les méthodes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet de dépendre d’une abstraction plutôt que d’une implémentation concrète ?',
                        'explanation' => 'La Dependency Inversion Principle encourage les modules à dépendre d’abstractions plutôt que de détails concrets.',
                        'choices' => [
                            ['text' => 'Dependency Inversion', 'correct' => true],
                            ['text' => 'FIFO', 'correct' => false],
                            ['text' => 'LIFO', 'correct' => false],
                            ['text' => 'Recursion', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une interface dans un projet professionnel ?',
                        'explanation' => 'Une interface permet de définir un contrat stable et de remplacer plus facilement une implémentation par une autre.',
                        'choices' => [
                            ['text' => 'Définir un contrat et faciliter le remplacement des implémentations', 'correct' => true],
                            ['text' => 'Stocker directement toutes les données de l’application', 'correct' => false],
                            ['text' => 'Remplacer toutes les bases de données', 'correct' => false],
                            ['text' => 'Éviter toute abstraction', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 5
            // =====================================================
            [
                'title' => 'Gestion des erreurs et exceptions',
                'description' => 'Quiz sur les erreurs, exceptions et mécanismes de gestion des problèmes dans un programme.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Pourquoi gérer les exceptions dans une application ?',
                        'explanation' => 'La gestion des exceptions permet de traiter certaines situations anormales sans provoquer un arrêt incontrôlé de l’application.',
                        'choices' => [
                            ['text' => 'Pour gérer proprement certaines situations anormales pendant l’exécution', 'correct' => true],
                            ['text' => 'Pour supprimer toutes les erreurs de syntaxe', 'correct' => false],
                            ['text' => 'Pour accélérer automatiquement le processeur', 'correct' => false],
                            ['text' => 'Pour remplacer les tests', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement le rôle de `try` ?',
                        'explanation' => 'Le bloc try contient le code susceptible de provoquer une exception.',
                        'choices' => [
                            ['text' => 'Contenir le code susceptible de générer une exception', 'correct' => true],
                            ['text' => 'Définir obligatoirement une classe', 'correct' => false],
                            ['text' => 'Supprimer une exception', 'correct' => false],
                            ['text' => 'Créer une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement le rôle de `catch` ?',
                        'explanation' => 'Le bloc catch permet de traiter une exception qui a été levée dans le bloc try correspondant.',
                        'choices' => [
                            ['text' => 'Intercepter et traiter une exception', 'correct' => true],
                            ['text' => 'Créer une boucle', 'correct' => false],
                            ['text' => 'Déclarer une constante', 'correct' => false],
                            ['text' => 'Compiler un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement `finally` ?',
                        'explanation' => 'Lorsqu’il existe dans le langage, finally contient du code qui doit généralement être exécuté qu’une exception se produise ou non.',
                        'choices' => [
                            ['text' => 'Exécuter du code après le traitement du try/catch, généralement qu’une exception se produise ou non', 'correct' => true],
                            ['text' => 'Créer une exception', 'correct' => false],
                            ['text' => 'Supprimer une classe', 'correct' => false],
                            ['text' => 'Arrêter obligatoirement le programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre une erreur de syntaxe et une exception d’exécution ?',
                        'explanation' => 'Une erreur de syntaxe concerne la validité du code selon les règles du langage. Une exception d’exécution survient pendant l’exécution du programme.',
                        'choices' => [
                            ['text' => 'La syntaxe concerne les règles d’écriture du code, tandis qu’une exception peut survenir pendant son exécution', 'correct' => true],
                            ['text' => 'Il n’existe aucune différence', 'correct' => false],
                            ['text' => 'Une exception est toujours une erreur matérielle', 'correct' => false],
                            ['text' => 'Une erreur de syntaxe ne concerne jamais le code', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter un `catch` qui masque complètement l’erreur ?',
                        'explanation' => 'Masquer une erreur sans journalisation ni traitement approprié peut rendre les problèmes difficiles à diagnostiquer.',
                        'choices' => [
                            ['text' => 'Parce que le problème peut devenir difficile à diagnostiquer et à corriger', 'correct' => true],
                            ['text' => 'Parce que catch ne peut jamais être utilisé', 'correct' => false],
                            ['text' => 'Parce que cela transforme toujours l’erreur en erreur de syntaxe', 'correct' => false],
                            ['text' => 'Parce que le programme doit toujours s’arrêter', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le logging ?',
                        'explanation' => 'Le logging consiste à enregistrer des informations sur le fonctionnement d’une application, notamment les événements et erreurs.',
                        'choices' => [
                            ['text' => 'L’enregistrement d’informations utiles sur le fonctionnement de l’application', 'correct' => true],
                            ['text' => 'La compilation du programme', 'correct' => false],
                            ['text' => 'La création d’une interface graphique', 'correct' => false],
                            ['text' => 'La suppression des exceptions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas afficher des informations sensibles dans les messages d’erreur destinés aux utilisateurs ?',
                        'explanation' => 'Les messages trop détaillés peuvent révéler des informations internes comme des chemins, identifiants ou détails techniques exploitables.',
                        'choices' => [
                            ['text' => 'Pour éviter de révéler des informations internes ou sensibles', 'correct' => true],
                            ['text' => 'Pour rendre le programme plus lent', 'correct' => false],
                            ['text' => 'Pour supprimer les logs', 'correct' => false],
                            ['text' => 'Pour empêcher toute exception', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une application professionnelle doit-elle prévoir des erreurs compréhensibles pour l’utilisateur ?',
                        'explanation' => 'Un message utilisateur doit expliquer clairement le problème ou l’action à effectuer sans exposer inutilement les détails techniques.',
                        'choices' => [
                            ['text' => 'Pour informer clairement l’utilisateur sans exposer inutilement les détails techniques', 'correct' => true],
                            ['text' => 'Pour remplacer la base de données', 'correct' => false],
                            ['text' => 'Pour éviter toutes les validations', 'correct' => false],
                            ['text' => 'Pour rendre le code plus long', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une bonne stratégie de gestion des erreurs ?',
                        'explanation' => 'Elle permet de rendre l’application plus robuste, maintenable et compréhensible lorsqu’un problème survient.',
                        'choices' => [
                            ['text' => 'Rendre l’application plus robuste et faciliter le diagnostic des problèmes', 'correct' => true],
                            ['text' => 'Supprimer toutes les erreurs possibles avant l’exécution', 'correct' => false],
                            ['text' => 'Éviter toute utilisation de logs', 'correct' => false],
                            ['text' => 'Remplacer les tests automatisés', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 6
            // =====================================================
            [
                'title' => 'Fichiers et manipulation des données',
                'description' => 'Quiz sur la lecture, l’écriture et la manipulation des fichiers et données.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Quelle est la première précaution avant d’écrire dans un fichier important ?',
                        'explanation' => 'Il est important de vérifier le chemin, les permissions et le mode d’ouverture afin d’éviter une modification ou suppression involontaire.',
                        'choices' => [
                            ['text' => 'Vérifier notamment le chemin, les permissions et le mode d’ouverture', 'correct' => true],
                            ['text' => 'Supprimer le fichier immédiatement', 'correct' => false],
                            ['text' => 'Changer automatiquement son extension', 'correct' => false],
                            ['text' => 'Redémarrer le système', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle opération permet de récupérer le contenu d’un fichier ?',
                        'explanation' => 'Une opération de lecture permet de récupérer les données stockées dans un fichier.',
                        'choices' => [
                            ['text' => 'Lecture', 'correct' => true],
                            ['text' => 'Compilation', 'correct' => false],
                            ['text' => 'Héritage', 'correct' => false],
                            ['text' => 'Encapsulation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle opération permet d’enregistrer des données dans un fichier ?',
                        'explanation' => 'L’écriture permet de créer ou modifier le contenu d’un fichier.',
                        'choices' => [
                            ['text' => 'Écriture', 'correct' => true],
                            ['text' => 'Comparaison', 'correct' => false],
                            ['text' => 'Héritage', 'correct' => false],
                            ['text' => 'Polymorphisme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il fermer correctement un fichier après utilisation ?',
                        'explanation' => 'La fermeture libère les ressources associées au fichier et garantit notamment que les données en attente sont correctement écrites selon le système utilisé.',
                        'choices' => [
                            ['text' => 'Pour libérer les ressources et finaliser correctement les opérations sur le fichier', 'correct' => true],
                            ['text' => 'Pour convertir automatiquement le fichier en base de données', 'correct' => false],
                            ['text' => 'Pour supprimer son contenu', 'correct' => false],
                            ['text' => 'Pour empêcher toute future lecture', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser un format comme JSON pour échanger des données ?',
                        'explanation' => 'JSON est un format texte structuré, largement utilisé pour représenter et échanger des données entre applications.',
                        'choices' => [
                            ['text' => 'Parce qu’il permet de représenter et échanger des données structurées de manière lisible', 'correct' => true],
                            ['text' => 'Parce qu’il remplace toujours une base de données', 'correct' => false],
                            ['text' => 'Parce qu’il ne contient jamais de texte', 'correct' => false],
                            ['text' => 'Parce qu’il est uniquement destiné aux images', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement un objet JSON ?',
                        'explanation' => 'Un objet JSON est généralement une collection de paires clé-valeur.',
                        'choices' => [
                            ['text' => 'Une collection structurée de paires clé-valeur', 'correct' => true],
                            ['text' => 'Une boucle', 'correct' => false],
                            ['text' => 'Une classe compilée', 'correct' => false],
                            ['text' => 'Une adresse IP', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi valider des données provenant d’un fichier ou d’une source externe ?',
                        'explanation' => 'Les données externes peuvent être incorrectes, incomplètes ou malveillantes. Leur validation permet de préserver l’intégrité de l’application.',
                        'choices' => [
                            ['text' => 'Pour vérifier qu’elles respectent les règles attendues avant de les utiliser', 'correct' => true],
                            ['text' => 'Pour accélérer systématiquement le processeur', 'correct' => false],
                            ['text' => 'Pour supprimer toutes les données', 'correct' => false],
                            ['text' => 'Pour éviter les fonctions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lors de la manipulation de fichiers provenant d’utilisateurs ?',
                        'explanation' => 'Un fichier fourni par un utilisateur peut être malveillant, trop volumineux ou contenir un contenu inattendu. Il doit donc être contrôlé.',
                        'choices' => [
                            ['text' => 'Le fichier peut contenir un contenu inattendu ou dangereux et doit être contrôlé', 'correct' => true],
                            ['text' => 'Il est toujours parfaitement sûr', 'correct' => false],
                            ['text' => 'Il devient automatiquement une constante', 'correct' => false],
                            ['text' => 'Il ne peut jamais être volumineux', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des permissions appropriées sur les fichiers ?',
                        'explanation' => 'Les permissions limitent les opérations que les utilisateurs ou processus peuvent effectuer sur les fichiers.',
                        'choices' => [
                            ['text' => 'Pour contrôler qui peut lire, modifier ou exécuter certaines ressources', 'correct' => true],
                            ['text' => 'Pour augmenter la résolution des fichiers', 'correct' => false],
                            ['text' => 'Pour supprimer les sauvegardes', 'correct' => false],
                            ['text' => 'Pour remplacer les exceptions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une sérialisation ?',
                        'explanation' => 'La sérialisation transforme généralement des données ou objets en une représentation pouvant être stockée ou transmise.',
                        'choices' => [
                            ['text' => 'Transformer des données en une représentation adaptée au stockage ou au transport', 'correct' => true],
                            ['text' => 'Supprimer toutes les données', 'correct' => false],
                            ['text' => 'Créer automatiquement une classe', 'correct' => false],
                            ['text' => 'Compiler le système d’exploitation', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 7
            // =====================================================
            [
                'title' => 'Algorithmes et complexité',
                'description' => 'Quiz sur les algorithmes, la complexité temporelle et les techniques de recherche et de tri.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Que mesure principalement la complexité temporelle d’un algorithme ?',
                        'explanation' => 'La complexité temporelle décrit l’évolution du nombre d’opérations nécessaires lorsque la taille des données augmente.',
                        'choices' => [
                            ['text' => 'L’évolution du temps ou du nombre d’opérations selon la taille des données', 'correct' => true],
                            ['text' => 'La taille du fichier source uniquement', 'correct' => false],
                            ['text' => 'Le nombre de développeurs', 'correct' => false],
                            ['text' => 'La vitesse du réseau uniquement', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une complexité O(1) ?',
                        'explanation' => 'O(1) signifie que le coût de l’opération reste constant par rapport à la taille des données.',
                        'choices' => [
                            ['text' => 'Le coût reste constant lorsque la taille des données augmente', 'correct' => true],
                            ['text' => 'Le coût double toujours', 'correct' => false],
                            ['text' => 'Le coût augmente quadratiquement', 'correct' => false],
                            ['text' => 'Le coût devient exponentiel', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle complexité est généralement meilleure pour une grande quantité de données ?',
                        'explanation' => 'À taille suffisamment grande, une complexité logarithmique croît beaucoup moins rapidement qu’une complexité linéaire.',
                        'choices' => [
                            ['text' => 'O(log n)', 'correct' => true],
                            ['text' => 'O(n²)', 'correct' => false],
                            ['text' => 'O(n³)', 'correct' => false],
                            ['text' => 'O(2ⁿ)', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la complexité d’une recherche linéaire dans le pire cas ?',
                        'explanation' => 'Une recherche linéaire peut devoir examiner tous les éléments, ce qui donne O(n) dans le pire cas.',
                        'choices' => [
                            ['text' => 'O(n)', 'correct' => true],
                            ['text' => 'O(1)', 'correct' => false],
                            ['text' => 'O(log n)', 'correct' => false],
                            ['text' => 'O(n²)', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition est nécessaire pour appliquer efficacement une recherche binaire ?',
                        'explanation' => 'La recherche binaire nécessite généralement une collection triée.',
                        'choices' => [
                            ['text' => 'Les données doivent être triées selon l’ordre utilisé par la recherche', 'correct' => true],
                            ['text' => 'Les données doivent toujours être aléatoires', 'correct' => false],
                            ['text' => 'Les données doivent toutes être des chaînes', 'correct' => false],
                            ['text' => 'La collection doit contenir exactement 10 éléments', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la complexité moyenne d’une recherche binaire ?',
                        'explanation' => 'La recherche binaire élimine environ la moitié des possibilités à chaque étape, donnant une complexité logarithmique.',
                        'choices' => [
                            ['text' => 'O(log n)', 'correct' => true],
                            ['text' => 'O(n²)', 'correct' => false],
                            ['text' => 'O(n)', 'correct' => false],
                            ['text' => 'O(2ⁿ)', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi éviter un algorithme O(n²) lorsque les données peuvent devenir très grandes ?',
                        'explanation' => 'Une complexité quadratique augmente rapidement lorsque n augmente, ce qui peut rendre l’algorithme lent sur de grandes collections.',
                        'choices' => [
                            ['text' => 'Parce que son coût peut augmenter très rapidement avec la taille des données', 'correct' => true],
                            ['text' => 'Parce qu’il ne peut jamais fonctionner', 'correct' => false],
                            ['text' => 'Parce qu’il utilise toujours plus de fichiers', 'correct' => false],
                            ['text' => 'Parce qu’il empêche toute utilisation de mémoire', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un algorithme de tri ?',
                        'explanation' => 'Un algorithme de tri réorganise les éléments d’une collection selon un ordre défini.',
                        'choices' => [
                            ['text' => 'Un algorithme qui réorganise des éléments selon un ordre donné', 'correct' => true],
                            ['text' => 'Un algorithme qui supprime les éléments', 'correct' => false],
                            ['text' => 'Un algorithme qui crée uniquement des fichiers', 'correct' => false],
                            ['text' => 'Un système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif de Big O notation ?',
                        'explanation' => 'La notation Big O permet de décrire asymptotiquement la croissance des ressources utilisées par un algorithme.',
                        'choices' => [
                            ['text' => 'Décrire la croissance approximative des ressources nécessaires lorsque la taille des données augmente', 'correct' => true],
                            ['text' => 'Mesurer uniquement la taille du code source', 'correct' => false],
                            ['text' => 'Déterminer le langage utilisé', 'correct' => false],
                            ['text' => 'Mesurer uniquement la mémoire du disque', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la complexité d’un algorithme avant de l’utiliser en production ?',
                        'explanation' => 'L’analyse permet d’anticiper le comportement de l’algorithme lorsque le volume de données augmente et de choisir une solution adaptée.',
                        'choices' => [
                            ['text' => 'Pour évaluer son comportement lorsque la quantité de données augmente', 'correct' => true],
                            ['text' => 'Pour empêcher toute utilisation de fonctions', 'correct' => false],
                            ['text' => 'Pour remplacer les tests unitaires', 'correct' => false],
                            ['text' => 'Pour supprimer les bases de données', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 8
            // =====================================================
            [
                'title' => 'Bases de données et programmation',
                'description' => 'Quiz sur les bases de données, SQL, requêtes, relations et bonnes pratiques en programmation.',
                'difficulty' => 'Intermediate',

                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une base de données relationnelle ?',
                        'explanation' => 'Une base de données relationnelle permet de stocker des données organisées dans des tables reliées entre elles.',
                        'choices' => [
                            ['text' => 'Stocker et organiser des données dans des tables pouvant être reliées entre elles', 'correct' => true],
                            ['text' => 'Compiler le code source', 'correct' => false],
                            ['text' => 'Remplacer le système d’exploitation', 'correct' => false],
                            ['text' => 'Créer automatiquement une interface utilisateur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande SQL est utilisée pour récupérer des données ?',
                        'explanation' => 'SELECT permet de récupérer des données depuis une ou plusieurs tables.',
                        'choices' => [
                            ['text' => 'SELECT', 'correct' => true],
                            ['text' => 'DELETE', 'correct' => false],
                            ['text' => 'DROP', 'correct' => false],
                            ['text' => 'INSERT', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande SQL permet d’ajouter une nouvelle ligne ?',
                        'explanation' => 'INSERT INTO permet d’ajouter de nouvelles lignes dans une table.',
                        'choices' => [
                            ['text' => 'INSERT', 'correct' => true],
                            ['text' => 'SELECT', 'correct' => false],
                            ['text' => 'UPDATE', 'correct' => false],
                            ['text' => 'ALTER', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande SQL permet de modifier des données existantes ?',
                        'explanation' => 'UPDATE permet de modifier les valeurs de lignes existantes.',
                        'choices' => [
                            ['text' => 'UPDATE', 'correct' => true],
                            ['text' => 'INSERT', 'correct' => false],
                            ['text' => 'SELECT', 'correct' => false],
                            ['text' => 'CREATE', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle commande SQL permet généralement de supprimer des lignes ?',
                        'explanation' => 'DELETE permet de supprimer des lignes correspondant à une condition.',
                        'choices' => [
                            ['text' => 'DELETE', 'correct' => true],
                            ['text' => 'SELECT', 'correct' => false],
                            ['text' => 'INSERT', 'correct' => false],
                            ['text' => 'CREATE', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une clé primaire ?',
                        'explanation' => 'Une clé primaire identifie de manière unique chaque ligne d’une table.',
                        'choices' => [
                            ['text' => 'Un attribut ou ensemble d’attributs permettant d’identifier une ligne de manière unique', 'correct' => true],
                            ['text' => 'Une colonne contenant obligatoirement du texte', 'correct' => false],
                            ['text' => 'Une requête SELECT', 'correct' => false],
                            ['text' => 'Un mot de passe utilisateur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une clé étrangère ?',
                        'explanation' => 'Une clé étrangère permet généralement de représenter une relation entre une table et une autre en faisant référence à une clé unique ou primaire.',
                        'choices' => [
                            ['text' => 'Une colonne faisant référence à une clé d’une autre table', 'correct' => true],
                            ['text' => 'Une colonne toujours utilisée pour stocker des mots de passe', 'correct' => false],
                            ['text' => 'Une requête SQL', 'correct' => false],
                            ['text' => 'Une table temporaire obligatoire', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des requêtes préparées ?',
                        'explanation' => 'Les requêtes préparées permettent notamment de séparer les paramètres des instructions SQL et contribuent à prévenir les injections SQL.',
                        'choices' => [
                            ['text' => 'Pour séparer les données des instructions SQL et réduire notamment le risque d’injection SQL', 'correct' => true],
                            ['text' => 'Pour supprimer automatiquement les tables', 'correct' => false],
                            ['text' => 'Pour accélérer toutes les requêtes sans exception', 'correct' => false],
                            ['text' => 'Pour remplacer les transactions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une transaction en base de données ?',
                        'explanation' => 'Une transaction permet de regrouper plusieurs opérations afin qu’elles soient validées ou annulées selon le résultat global.',
                        'choices' => [
                            ['text' => 'Regrouper plusieurs opérations afin de garantir une exécution cohérente', 'correct' => true],
                            ['text' => 'Créer automatiquement une nouvelle base', 'correct' => false],
                            ['text' => 'Remplacer SQL', 'correct' => false],
                            ['text' => 'Supprimer les contraintes', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les index sont-ils utilisés dans une base de données ?',
                        'explanation' => 'Les index peuvent accélérer certaines recherches et opérations de filtrage, au prix d’un espace supplémentaire et d’un coût lors de certaines modifications.',
                        'choices' => [
                            ['text' => 'Pour accélérer certaines recherches et opérations sur les données', 'correct' => true],
                            ['text' => 'Pour remplacer les clés primaires', 'correct' => false],
                            ['text' => 'Pour supprimer les doublons automatiquement dans tous les cas', 'correct' => false],
                            ['text' => 'Pour empêcher toute modification des données', 'correct' => false],
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

                // Évite les doublons si le seeder est exécuté plusieurs fois
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