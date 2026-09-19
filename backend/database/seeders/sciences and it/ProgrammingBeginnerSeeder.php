<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProgrammingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'programming')->firstOrFail();

        $quizzes = [

            // =====================================================
            // QUIZ 1
            // =====================================================
            [
                'title' => 'Fondamentaux de la programmation',
                'description' => 'Quiz d’introduction aux concepts fondamentaux de la programmation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un programme informatique ?',
                        'explanation' => 'Un programme informatique est un ensemble d’instructions exécutées par un ordinateur afin de réaliser une tâche ou de résoudre un problème.',
                        'choices' => [
                            ['text' => 'Un ensemble d’instructions permettant à un ordinateur d’effectuer une ou plusieurs tâches', 'correct' => true],
                            ['text' => 'Un composant physique installé dans un ordinateur', 'correct' => false],
                            ['text' => 'Un système permettant uniquement de stocker des fichiers', 'correct' => false],
                            ['text' => 'Un périphérique utilisé pour saisir des données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un langage de programmation ?',
                        'explanation' => 'Un langage de programmation permet au développeur d’écrire des instructions et de définir le comportement d’un programme.',
                        'choices' => [
                            ['text' => 'Augmenter automatiquement la capacité de stockage d’un ordinateur', 'correct' => false],
                            ['text' => 'Permettre d’exprimer des instructions qu’un ordinateur peut exécuter', 'correct' => true],
                            ['text' => 'Remplacer le système d’exploitation', 'correct' => false],
                            ['text' => 'Accélérer physiquement le processeur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux un algorithme ?',
                        'explanation' => 'Un algorithme décrit une méthode permettant de résoudre un problème en suivant une série d’étapes définies.',
                        'choices' => [
                            ['text' => 'Un composant matériel utilisé pour exécuter un programme', 'correct' => false],
                            ['text' => 'Une suite finie et ordonnée d’étapes permettant de résoudre un problème', 'correct' => true],
                            ['text' => 'Un fichier contenant uniquement des images', 'correct' => false],
                            ['text' => 'Un système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre un algorithme et un programme ?',
                        'explanation' => 'Un algorithme représente la logique ou la méthode de résolution d’un problème. Le programme traduit cette logique dans un langage que l’ordinateur peut exécuter.',
                        'choices' => [
                            ['text' => 'Un algorithme est toujours écrit dans un langage de programmation', 'correct' => false],
                            ['text' => 'Un programme ne peut jamais être modifié', 'correct' => false],
                            ['text' => 'Un algorithme décrit une méthode de résolution, tandis qu’un programme implémente cette méthode dans un langage de programmation', 'correct' => true],
                            ['text' => 'Il n’existe aucune différence entre les deux', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable en programmation ?',
                        'explanation' => 'Une variable permet de stocker une donnée associée à un nom. Sa valeur peut généralement être modifiée pendant l’exécution du programme.',
                        'choices' => [
                            ['text' => 'Une valeur qui ne peut jamais changer', 'correct' => false],
                            ['text' => 'Un espace nommé permettant de stocker une valeur pouvant évoluer pendant l’exécution du programme', 'correct' => true],
                            ['text' => 'Une instruction permettant uniquement d’afficher du texte', 'correct' => false],
                            ['text' => 'Un composant physique du processeur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement une structure conditionnelle ?',
                        'explanation' => 'Une structure conditionnelle permet au programme de choisir différentes actions selon qu’une condition est vraie ou fausse.',
                        'choices' => [
                            ['text' => 'À répéter automatiquement une instruction un nombre déterminé de fois', 'correct' => false],
                            ['text' => 'À prendre une décision en fonction d’une condition', 'correct' => true],
                            ['text' => 'À supprimer un programme de l’ordinateur', 'correct' => false],
                            ['text' => 'À créer automatiquement une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement une boucle en programmation ?',
                        'explanation' => 'Une boucle permet de répéter l’exécution d’un bloc d’instructions. La répétition peut dépendre d’une condition ou d’un nombre d’itérations.',
                        'choices' => [
                            ['text' => 'À exécuter plusieurs fois une ou plusieurs instructions selon une condition ou un nombre d’itérations', 'correct' => true],
                            ['text' => 'À déclarer obligatoirement une variable', 'correct' => false],
                            ['text' => 'À compiler automatiquement un programme', 'correct' => false],
                            ['text' => 'À supprimer les erreurs de syntaxe', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une fonction ou d’une méthode ?',
                        'explanation' => 'Une fonction ou une méthode permet de regrouper une logique particulière afin de pouvoir l’appeler et la réutiliser dans différentes parties d’un programme.',
                        'choices' => [
                            ['text' => 'Regrouper des instructions afin de réaliser une tâche réutilisable', 'correct' => true],
                            ['text' => 'Remplacer obligatoirement le système d’exploitation', 'correct' => false],
                            ['text' => 'Empêcher toute modification des données', 'correct' => false],
                            ['text' => 'Transformer automatiquement un ordinateur en serveur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de syntaxe ?',
                        'explanation' => 'Une erreur de syntaxe se produit lorsque le code ne respecte pas les règles du langage utilisé. Le programme peut alors être refusé par le compilateur ou l’interpréteur.',
                        'choices' => [
                            ['text' => 'Une erreur provoquée par une panne physique du processeur', 'correct' => false],
                            ['text' => 'Une erreur liée au non-respect des règles d’écriture du langage de programmation', 'correct' => true],
                            ['text' => 'Une erreur qui signifie toujours que l’algorithme est incorrect', 'correct' => false],
                            ['text' => 'Une erreur causée uniquement par une connexion Internet interrompue', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le debugging (débogage) ?',
                        'explanation' => 'Le debugging consiste à rechercher, comprendre et corriger les erreurs qui empêchent un programme de fonctionner correctement.',
                        'choices' => [
                            ['text' => 'Le processus de création d’un nouveau langage de programmation', 'correct' => false],
                            ['text' => 'Le processus d’identification et de correction des erreurs dans un programme', 'correct' => true],
                            ['text' => 'Le processus de suppression définitive d’un programme', 'correct' => false],
                            ['text' => 'Le processus d’installation d’un processeur', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 2
            // =====================================================
            [
                'title' => 'Variables et constantes',
                'description' => 'Quiz consacré aux variables, constantes, affectations, initialisation et portée des données en programmation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une variable en programmation ?',
                        'explanation' => 'Une variable est un espace de stockage identifié par un nom. Sa valeur peut généralement être modifiée pendant l’exécution du programme.',
                        'choices' => [
                            ['text' => 'Un espace nommé permettant de stocker une valeur qui peut être modifiée', 'correct' => true],
                            ['text' => 'Une valeur qui ne peut jamais changer', 'correct' => false],
                            ['text' => 'Une instruction permettant de compiler un programme', 'correct' => false],
                            ['text' => 'Un composant matériel de l’ordinateur', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie initialiser une variable ?',
                        'explanation' => 'L’initialisation consiste à donner une première valeur à une variable avant ou au moment de son utilisation.',
                        'choices' => [
                            ['text' => 'Supprimer définitivement la variable', 'correct' => false],
                            ['text' => 'Lui attribuer une première valeur', 'correct' => true],
                            ['text' => 'Modifier le nom de la variable', 'correct' => false],
                            ['text' => 'Transformer la variable en constante', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle opération permet généralement de modifier la valeur d’une variable ?',
                        'explanation' => 'L’affectation permet d’attribuer une nouvelle valeur à une variable. Une même variable peut recevoir plusieurs valeurs différentes au cours de l’exécution.',
                        'choices' => [
                            ['text' => 'Une affectation', 'correct' => true],
                            ['text' => 'Une compilation', 'correct' => false],
                            ['text' => 'Une déclaration de classe', 'correct' => false],
                            ['text' => 'Une importation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation concernant une constante est correcte ?',
                        'explanation' => 'Une constante représente une valeur destinée à rester inchangée pendant l’exécution du programme.',
                        'choices' => [
                            ['text' => 'Sa valeur doit être modifiée à chaque instruction', 'correct' => false],
                            ['text' => 'Elle représente une valeur qui ne doit pas être modifiée après son initialisation', 'correct' => true],
                            ['text' => 'Elle ne peut contenir qu’un nombre entier', 'correct' => false],
                            ['text' => 'Elle est toujours créée automatiquement par le système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on généralement un nom significatif pour une variable ?',
                        'explanation' => 'Un nom clair permet de comprendre plus facilement ce que représente une variable et rend le code plus lisible et maintenable.',
                        'choices' => [
                            ['text' => 'Pour augmenter automatiquement la vitesse du programme', 'correct' => false],
                            ['text' => 'Pour faciliter la compréhension et la maintenance du code', 'correct' => true],
                            ['text' => 'Pour empêcher toute erreur de syntaxe', 'correct' => false],
                            ['text' => 'Pour augmenter la mémoire disponible', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la portée (scope) d’une variable ?',
                        'explanation' => 'La portée définit où et, selon le contexte, pendant quelle période une variable peut être utilisée dans un programme.',
                        'choices' => [
                            ['text' => 'La taille occupée par la variable en mémoire', 'correct' => false],
                            ['text' => 'La période ou la zone du programme dans laquelle la variable est accessible', 'correct' => true],
                            ['text' => 'Le nombre de fois où la variable peut être modifiée', 'correct' => false],
                            ['text' => 'Le type de processeur utilisé par le programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable locale est généralement accessible :',
                        'explanation' => 'Une variable locale est limitée à une certaine zone du programme, par exemple une fonction ou un bloc, selon les règles du langage utilisé.',
                        'choices' => [
                            ['text' => 'Depuis toutes les applications installées sur l’ordinateur', 'correct' => false],
                            ['text' => 'Uniquement dans la zone du programme où elle a été déclarée, selon les règles du langage', 'correct' => true],
                            ['text' => 'Depuis n’importe quel ordinateur connecté au réseau', 'correct' => false],
                            ['text' => 'Uniquement après la compilation du programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre une variable et une constante ?',
                        'explanation' => 'La caractéristique principale d’une variable est que sa valeur peut évoluer. Une constante est utilisée pour représenter une valeur qui ne doit pas être modifiée.',
                        'choices' => [
                            ['text' => 'Une variable peut généralement changer de valeur, tandis qu’une constante est destinée à rester inchangée', 'correct' => true],
                            ['text' => 'Une variable contient toujours du texte, tandis qu’une constante contient toujours un nombre', 'correct' => false],
                            ['text' => 'Une constante nécessite toujours plus de mémoire qu’une variable', 'correct' => false],
                            ['text' => 'Une variable ne peut être utilisée qu’une seule fois', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi est-il utile d’utiliser une constante pour une valeur qui ne doit pas changer ?',
                        'explanation' => 'Une constante rend l’intention du développeur plus claire et permet, selon le langage, d’empêcher ou de détecter les tentatives de modification de cette valeur.',
                        'choices' => [
                            ['text' => 'Pour indiquer clairement que cette valeur est destinée à rester fixe et éviter sa modification accidentelle', 'correct' => true],
                            ['text' => 'Pour rendre automatiquement le programme plus rapide', 'correct' => false],
                            ['text' => 'Pour supprimer toutes les erreurs du programme', 'correct' => false],
                            ['text' => 'Pour éviter d’utiliser des variables dans le programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut-il se produire si un programme tente d’utiliser une variable en dehors de sa portée ?',
                        'explanation' => 'Lorsqu’une variable n’est pas accessible dans une partie donnée du programme en raison de sa portée, son utilisation peut provoquer une erreur ou être interdite par le langage.',
                        'choices' => [
                            ['text' => 'La variable devient automatiquement une constante', 'correct' => false],
                            ['text' => 'Le programme peut générer une erreur ou ne pas pouvoir accéder à cette variable', 'correct' => true],
                            ['text' => 'La variable est automatiquement déplacée vers la mémoire globale', 'correct' => false],
                            ['text' => 'Le processeur redémarre automatiquement', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 3
            // =====================================================
            [
                'title' => 'Types de données',
                'description' => 'Quiz sur les principaux types de données et leur utilisation en programmation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un type de données ?',
                        'explanation' => 'Un type de données définit la nature des valeurs qu’une variable ou une expression peut représenter, ainsi que les opérations généralement applicables à ces valeurs.',
                        'choices' => [
                            ['text' => 'Une règle qui indique le genre de valeur qu’une donnée peut représenter', 'correct' => true],
                            ['text' => 'Un fichier contenant le code source', 'correct' => false],
                            ['text' => 'Un outil utilisé pour déboguer un programme', 'correct' => false],
                            ['text' => 'Un composant matériel', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type est généralement utilisé pour représenter une valeur vraie ou fausse ?',
                        'explanation' => 'Le type Boolean représente généralement deux valeurs logiques : vrai et faux.',
                        'choices' => [
                            ['text' => 'String', 'correct' => false],
                            ['text' => 'Boolean', 'correct' => true],
                            ['text' => 'Integer', 'correct' => false],
                            ['text' => 'Character', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type est généralement utilisé pour représenter un nombre entier ?',
                        'explanation' => 'Le type Integer est utilisé pour représenter des nombres entiers, positifs, négatifs ou nuls selon le langage.',
                        'choices' => [
                            ['text' => 'Integer', 'correct' => true],
                            ['text' => 'Boolean', 'correct' => false],
                            ['text' => 'String', 'correct' => false],
                            ['text' => 'Character', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle donnée est généralement représentée par une chaîne de caractères (String) ?',
                        'explanation' => 'Une String représente une séquence de caractères pouvant être utilisée pour stocker du texte.',
                        'choices' => [
                            ['text' => 'Une valeur logique', 'correct' => false],
                            ['text' => 'Une séquence de caractères', 'correct' => true],
                            ['text' => 'Uniquement un nombre entier', 'correct' => false],
                            ['text' => 'Une instruction conditionnelle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre un entier et un nombre décimal ?',
                        'explanation' => 'Un entier représente une valeur sans partie fractionnaire, tandis qu’un nombre décimal peut représenter une partie fractionnaire.',
                        'choices' => [
                            ['text' => 'Un entier ne possède pas de partie fractionnaire, contrairement à un nombre décimal', 'correct' => true],
                            ['text' => 'Un entier contient toujours du texte', 'correct' => false],
                            ['text' => 'Un nombre décimal ne peut jamais être négatif', 'correct' => false],
                            ['text' => 'Il n’existe aucune différence', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie effectuer une conversion de type ?',
                        'explanation' => 'La conversion de type consiste à transformer une valeur afin de l’utiliser sous un autre type lorsque cette conversion est possible.',
                        'choices' => [
                            ['text' => 'Modifier le nom d’une variable', 'correct' => false],
                            ['text' => 'Transformer une valeur d’un type vers un autre type compatible', 'correct' => true],
                            ['text' => 'Supprimer une valeur de la mémoire', 'correct' => false],
                            ['text' => 'Compiler automatiquement le programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle valeur correspond généralement au type Boolean ?',
                        'explanation' => 'Une valeur Boolean représente une valeur logique, généralement true ou false.',
                        'choices' => [
                            ['text' => '"Bonjour"', 'correct' => false],
                            ['text' => '25', 'correct' => false],
                            ['text' => 'true', 'correct' => true],
                            ['text' => '3.14', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les types de données sont-ils importants en programmation ?',
                        'explanation' => 'Les types permettent au programme de savoir comment interpréter et manipuler les données.',
                        'choices' => [
                            ['text' => 'Ils permettent notamment de déterminer comment les données peuvent être stockées et manipulées', 'correct' => true],
                            ['text' => 'Ils remplacent les algorithmes', 'correct' => false],
                            ['text' => 'Ils empêchent toutes les erreurs du programme', 'correct' => false],
                            ['text' => 'Ils permettent de supprimer le système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut-il se produire lorsqu’une opération incompatible avec le type d’une donnée est effectuée ?',
                        'explanation' => 'Une opération incompatible peut provoquer une erreur. Certains langages permettent toutefois certaines conversions automatiques ou explicites.',
                        'choices' => [
                            ['text' => 'Le programme peut générer une erreur ou effectuer une conversion selon les règles du langage', 'correct' => true],
                            ['text' => 'L’ordinateur redémarre obligatoirement', 'correct' => false],
                            ['text' => 'La donnée devient automatiquement une constante', 'correct' => false],
                            ['text' => 'Le programme est toujours corrigé automatiquement', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle donnée représente le mieux l’âge d’une personne ?',
                        'explanation' => 'Un âge exprimé en années est généralement représenté par un nombre entier.',
                        'choices' => [
                            ['text' => 'Boolean', 'correct' => false],
                            ['text' => 'Integer', 'correct' => true],
                            ['text' => 'String uniquement', 'correct' => false],
                            ['text' => 'Character', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 4
            // =====================================================
            [
                'title' => 'Opérateurs et expressions',
                'description' => 'Quiz sur les opérateurs, les expressions et les règles d’évaluation en programmation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'À quoi sert un opérateur arithmétique ?',
                        'explanation' => 'Les opérateurs arithmétiques permettent notamment d’effectuer des additions, soustractions, multiplications et divisions.',
                        'choices' => [
                            ['text' => 'À effectuer une opération mathématique sur des valeurs', 'correct' => true],
                            ['text' => 'À déclarer une classe', 'correct' => false],
                            ['text' => 'À créer un fichier', 'correct' => false],
                            ['text' => 'À arrêter le système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel opérateur est généralement utilisé pour effectuer une addition ?',
                        'explanation' => 'L’opérateur + est généralement utilisé pour additionner deux valeurs.',
                        'choices' => [
                            ['text' => '+', 'correct' => true],
                            ['text' => '-', 'correct' => false],
                            ['text' => '*', 'correct' => false],
                            ['text' => '/', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les opérateurs de comparaison ?',
                        'explanation' => 'Les opérateurs de comparaison permettent de déterminer une relation entre deux valeurs, par exemple égalité, différence ou supériorité.',
                        'choices' => [
                            ['text' => 'À comparer des valeurs', 'correct' => true],
                            ['text' => 'À créer automatiquement une variable', 'correct' => false],
                            ['text' => 'À compiler un programme', 'correct' => false],
                            ['text' => 'À supprimer une fonction', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est généralement le résultat d’une comparaison entre deux valeurs ?',
                        'explanation' => 'Une comparaison produit généralement une valeur logique indiquant si la condition est vraie ou fausse.',
                        'choices' => [
                            ['text' => 'Une valeur logique', 'correct' => true],
                            ['text' => 'Toujours une chaîne de caractères', 'correct' => false],
                            ['text' => 'Toujours un nombre décimal', 'correct' => false],
                            ['text' => 'Un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent les opérateurs logiques ?',
                        'explanation' => 'Les opérateurs logiques permettent notamment de combiner plusieurs conditions avec des opérations comme AND, OR et NOT.',
                        'choices' => [
                            ['text' => 'À combiner ou inverser des conditions logiques', 'correct' => true],
                            ['text' => 'À modifier physiquement le processeur', 'correct' => false],
                            ['text' => 'À créer des images', 'correct' => false],
                            ['text' => 'À stocker uniquement des nombres', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une expression en programmation ?',
                        'explanation' => 'Une expression combine différents éléments pour produire une valeur.',
                        'choices' => [
                            ['text' => 'Une combinaison de valeurs, variables et opérateurs permettant généralement de produire une valeur', 'correct' => true],
                            ['text' => 'Un composant matériel', 'correct' => false],
                            ['text' => 'Un système d’exploitation', 'correct' => false],
                            ['text' => 'Un fichier image', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet généralement l’opérateur de division `/` ?',
                        'explanation' => 'L’opérateur / est généralement utilisé pour effectuer une division.',
                        'choices' => [
                            ['text' => 'Diviser une valeur par une autre', 'correct' => true],
                            ['text' => 'Comparer deux chaînes', 'correct' => false],
                            ['text' => 'Déclarer une constante', 'correct' => false],
                            ['text' => 'Créer une boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la priorité des opérateurs est-elle importante ?',
                        'explanation' => 'Lorsque plusieurs opérateurs apparaissent dans une expression, les règles de priorité déterminent généralement l’ordre d’évaluation.',
                        'choices' => [
                            ['text' => 'Elle détermine l’ordre dans lequel certaines opérations sont évaluées', 'correct' => true],
                            ['text' => 'Elle définit le nom des variables', 'correct' => false],
                            ['text' => 'Elle empêche toute erreur de syntaxe', 'correct' => false],
                            ['text' => 'Elle détermine le nombre de fichiers du programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel opérateur logique correspond généralement à NOT ?',
                        'explanation' => 'L’opérateur logique NOT inverse une valeur logique : vrai devient faux et faux devient vrai.',
                        'choices' => [
                            ['text' => 'Il inverse une valeur logique', 'correct' => true],
                            ['text' => 'Il additionne deux nombres', 'correct' => false],
                            ['text' => 'Il compare deux chaînes', 'correct' => false],
                            ['text' => 'Il crée une variable', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les parenthèses peuvent-elles être utilisées dans une expression ?',
                        'explanation' => 'Les parenthèses permettent de regrouper certaines opérations et de préciser l’ordre dans lequel elles doivent être évaluées.',
                        'choices' => [
                            ['text' => 'Pour contrôler explicitement l’ordre d’évaluation de certaines opérations', 'correct' => true],
                            ['text' => 'Pour supprimer les variables', 'correct' => false],
                            ['text' => 'Pour compiler le programme', 'correct' => false],
                            ['text' => 'Pour créer automatiquement une fonction', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 5
            // =====================================================
            [
                'title' => 'Conditions et structures de décision',
                'description' => 'Quiz sur les structures conditionnelles et la prise de décision dans un programme.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une structure `if` ?',
                        'explanation' => 'Une structure conditionnelle permet d’exécuter un bloc d’instructions lorsqu’une condition donnée est vraie.',
                        'choices' => [
                            ['text' => 'Exécuter certaines instructions lorsqu’une condition est satisfaite', 'correct' => true],
                            ['text' => 'Répéter obligatoirement une instruction', 'correct' => false],
                            ['text' => 'Déclarer une variable', 'correct' => false],
                            ['text' => 'Créer un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement `else` ?',
                        'explanation' => '`else` permet de définir une alternative lorsque la condition associée au `if` est fausse.',
                        'choices' => [
                            ['text' => 'À définir les instructions exécutées lorsque la condition précédente n’est pas satisfaite', 'correct' => true],
                            ['text' => 'À déclarer une constante', 'correct' => false],
                            ['text' => 'À arrêter définitivement l’ordinateur', 'correct' => false],
                            ['text' => 'À créer une boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on plusieurs conditions dans un programme ?',
                        'explanation' => 'Plusieurs conditions permettent de traiter différents cas et d’adapter le comportement du programme.',
                        'choices' => [
                            ['text' => 'Pour permettre au programme de prendre différentes décisions selon les situations', 'correct' => true],
                            ['text' => 'Pour augmenter la taille du programme', 'correct' => false],
                            ['text' => 'Pour empêcher les variables de changer', 'correct' => false],
                            ['text' => 'Pour remplacer les fonctions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement si une condition `if` est fausse et qu’aucun `else` n’est défini ?',
                        'explanation' => 'Si la condition est fausse, le bloc du `if` est ignoré lorsqu’aucune alternative n’est prévue.',
                        'choices' => [
                            ['text' => 'Le bloc associé au `if` n’est pas exécuté et le programme continue selon son flux normal', 'correct' => true],
                            ['text' => 'Le programme s’arrête toujours', 'correct' => false],
                            ['text' => 'Le programme recommence depuis le début', 'correct' => false],
                            ['text' => 'La condition devient automatiquement vraie', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une structure `switch` dans les langages qui la proposent ?',
                        'explanation' => 'Une structure `switch` permet de sélectionner différents blocs d’instructions selon la valeur d’une expression.',
                        'choices' => [
                            ['text' => 'Sélectionner une action parmi plusieurs cas possibles à partir d’une valeur', 'correct' => true],
                            ['text' => 'Répéter une instruction indéfiniment', 'correct' => false],
                            ['text' => 'Déclarer une variable', 'correct' => false],
                            ['text' => 'Créer une base de données', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une condition est généralement évaluée comme :',
                        'explanation' => 'Une condition logique détermine généralement si une proposition est vraie ou fausse.',
                        'choices' => [
                            ['text' => 'Vraie ou fausse', 'correct' => true],
                            ['text' => 'Uniquement comme un texte', 'correct' => false],
                            ['text' => 'Uniquement comme un nombre décimal', 'correct' => false],
                            ['text' => 'Comme un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il ordonner correctement plusieurs conditions ?',
                        'explanation' => 'Lorsque plusieurs conditions sont évaluées successivement, leur ordre peut influencer le chemin d’exécution du programme.',
                        'choices' => [
                            ['text' => 'Parce que l’ordre peut déterminer quelle branche du programme sera exécutée', 'correct' => true],
                            ['text' => 'Pour augmenter la mémoire disponible', 'correct' => false],
                            ['text' => 'Pour changer automatiquement les types', 'correct' => false],
                            ['text' => 'Pour éviter de déclarer des variables', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet une condition imbriquée ?',
                        'explanation' => 'Une condition imbriquée est une structure conditionnelle placée dans une autre structure conditionnelle.',
                        'choices' => [
                            ['text' => 'Placer une condition à l’intérieur d’une autre structure conditionnelle', 'correct' => true],
                            ['text' => 'Créer automatiquement une nouvelle variable globale', 'correct' => false],
                            ['text' => 'Remplacer une boucle', 'correct' => false],
                            ['text' => 'Compiler deux programmes simultanément', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation nécessite typiquement une structure conditionnelle ?',
                        'explanation' => 'Le programme doit prendre une décision en fonction de l’état de connexion de l’utilisateur.',
                        'choices' => [
                            ['text' => 'Afficher un message différent selon que l’utilisateur est connecté ou non', 'correct' => true],
                            ['text' => 'Additionner toujours deux nombres', 'correct' => false],
                            ['text' => 'Déclarer une constante', 'correct' => false],
                            ['text' => 'Lire systématiquement un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage des structures conditionnelles ?',
                        'explanation' => 'Les structures conditionnelles permettent de créer des programmes capables de réagir différemment selon les données ou situations rencontrées.',
                        'choices' => [
                            ['text' => 'Elles permettent au programme d’adapter son comportement selon différentes situations', 'correct' => true],
                            ['text' => 'Elles suppriment toutes les erreurs', 'correct' => false],
                            ['text' => 'Elles rendent toutes les variables constantes', 'correct' => false],
                            ['text' => 'Elles remplacent le langage de programmation', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 6
            // =====================================================
            [
                'title' => 'Boucles et itérations',
                'description' => 'Quiz sur les boucles, les itérations et la répétition des instructions.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une boucle ?',
                        'explanation' => 'Une boucle permet de répéter un bloc d’instructions plusieurs fois selon une condition ou un nombre d’itérations.',
                        'choices' => [
                            ['text' => 'Répéter l’exécution d’un ensemble d’instructions', 'correct' => true],
                            ['text' => 'Déclarer uniquement des constantes', 'correct' => false],
                            ['text' => 'Compiler un programme', 'correct' => false],
                            ['text' => 'Créer un système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel cas une boucle `for` est-elle particulièrement adaptée ?',
                        'explanation' => 'Une boucle `for` est particulièrement pratique lorsqu’on peut définir une progression ou un nombre d’itérations.',
                        'choices' => [
                            ['text' => 'Lorsqu’on connaît ou peut définir le nombre d’itérations à effectuer', 'correct' => true],
                            ['text' => 'Uniquement lorsqu’une erreur survient', 'correct' => false],
                            ['text' => 'Pour déclarer une constante', 'correct' => false],
                            ['text' => 'Pour arrêter un programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque principal d’une boucle dont la condition ne devient jamais fausse ?',
                        'explanation' => 'Si la condition d’arrêt n’est jamais atteinte, la boucle peut continuer indéfiniment.',
                        'choices' => [
                            ['text' => 'Elle peut devenir une boucle infinie', 'correct' => true],
                            ['text' => 'Elle transforme automatiquement les variables en constantes', 'correct' => false],
                            ['text' => 'Elle supprime le code source', 'correct' => false],
                            ['text' => 'Elle désinstalle le programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement une boucle `while` ?',
                        'explanation' => 'Une boucle `while` continue généralement son exécution tant que sa condition reste vraie.',
                        'choices' => [
                            ['text' => 'Répéter des instructions tant qu’une condition est vraie', 'correct' => true],
                            ['text' => 'Déclarer une classe', 'correct' => false],
                            ['text' => 'Comparer uniquement deux chaînes', 'correct' => false],
                            ['text' => 'Créer un fichier', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre une boucle et une structure conditionnelle ?',
                        'explanation' => 'Une structure conditionnelle permet de choisir un chemin d’exécution, tandis qu’une boucle permet de répéter un bloc d’instructions.',
                        'choices' => [
                            ['text' => 'Une boucle sert principalement à répéter, tandis qu’une condition sert principalement à choisir', 'correct' => true],
                            ['text' => 'Une boucle sert uniquement à déclarer des variables', 'correct' => false],
                            ['text' => 'Une condition répète toujours les instructions', 'correct' => false],
                            ['text' => 'Il n’existe aucune différence', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement `break` lorsqu’il est disponible dans un langage ?',
                        'explanation' => '`break` permet généralement de sortir immédiatement de la boucle dans laquelle il est utilisé.',
                        'choices' => [
                            ['text' => 'À interrompre une boucle ou une structure appropriée', 'correct' => true],
                            ['text' => 'À déclarer une variable', 'correct' => false],
                            ['text' => 'À créer une fonction', 'correct' => false],
                            ['text' => 'À convertir un type', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement `continue` dans une boucle ?',
                        'explanation' => '`continue` permet généralement de passer directement à l’itération suivante de la boucle.',
                        'choices' => [
                            ['text' => 'À passer à l’itération suivante en ignorant la suite de l’itération courante', 'correct' => true],
                            ['text' => 'À arrêter définitivement le programme', 'correct' => false],
                            ['text' => 'À supprimer la boucle', 'correct' => false],
                            ['text' => 'À créer une constante', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il prévoir une condition d’arrêt appropriée pour une boucle ?',
                        'explanation' => 'Une condition d’arrêt correcte permet à la boucle de terminer son exécution lorsque l’objectif est atteint.',
                        'choices' => [
                            ['text' => 'Pour éviter notamment une répétition infinie et garantir le comportement attendu du programme', 'correct' => true],
                            ['text' => 'Pour augmenter automatiquement la mémoire', 'correct' => false],
                            ['text' => 'Pour transformer la boucle en fonction', 'correct' => false],
                            ['text' => 'Pour supprimer les erreurs de syntaxe', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une itération ?',
                        'explanation' => 'Une itération correspond généralement à une exécution du bloc d’instructions d’une boucle.',
                        'choices' => [
                            ['text' => 'Une exécution d’un cycle d’une boucle', 'correct' => true],
                            ['text' => 'Une déclaration de variable', 'correct' => false],
                            ['text' => 'Une erreur de syntaxe', 'correct' => false],
                            ['text' => 'Une compilation complète du programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple utilise typiquement une boucle ?',
                        'explanation' => 'Une boucle permet de parcourir les éléments d’une liste et de traiter chaque élément successivement.',
                        'choices' => [
                            ['text' => 'Afficher les éléments d’une liste un par un', 'correct' => true],
                            ['text' => 'Déclarer une constante unique', 'correct' => false],
                            ['text' => 'Modifier le nom d’une variable', 'correct' => false],
                            ['text' => 'Installer un système d’exploitation', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 7
            // =====================================================
            [
                'title' => 'Fonctions et méthodes',
                'description' => 'Quiz sur les fonctions, les méthodes, les paramètres et les valeurs de retour.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Pourquoi crée-t-on une fonction ?',
                        'explanation' => 'Une fonction permet d’organiser et de réutiliser une portion de logique.',
                        'choices' => [
                            ['text' => 'Pour regrouper des instructions réalisant une tâche et pouvoir les réutiliser', 'correct' => true],
                            ['text' => 'Pour remplacer le processeur', 'correct' => false],
                            ['text' => 'Pour supprimer toutes les variables', 'correct' => false],
                            ['text' => 'Pour empêcher l’exécution du programme', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un paramètre d’une fonction ?',
                        'explanation' => 'Les paramètres permettent de transmettre des données à une fonction lorsqu’elle est appelée.',
                        'choices' => [
                            ['text' => 'Une donnée reçue par la fonction pour effectuer son traitement', 'correct' => true],
                            ['text' => 'Une erreur de compilation', 'correct' => false],
                            ['text' => 'Une variable qui doit toujours être globale', 'correct' => false],
                            ['text' => 'Une sortie obligatoire', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement une valeur de retour ?',
                        'explanation' => 'Une fonction peut retourner une valeur qui sera ensuite utilisée par le programme appelant.',
                        'choices' => [
                            ['text' => 'À transmettre un résultat produit par une fonction à l’endroit où elle a été appelée', 'correct' => true],
                            ['text' => 'À arrêter le processeur', 'correct' => false],
                            ['text' => 'À supprimer la fonction', 'correct' => false],
                            ['text' => 'À déclarer automatiquement une classe', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage principal de réutiliser une fonction ?',
                        'explanation' => 'La réutilisation des fonctions réduit la duplication du code et facilite sa maintenance.',
                        'choices' => [
                            ['text' => 'Éviter de répéter inutilement le même code', 'correct' => true],
                            ['text' => 'Augmenter automatiquement la capacité de stockage', 'correct' => false],
                            ['text' => 'Empêcher toute modification du programme', 'correct' => false],
                            ['text' => 'Supprimer les conditions', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une fonction est appelée ?',
                        'explanation' => 'L’appel d’une fonction demande au programme d’exécuter les instructions définies dans cette fonction.',
                        'choices' => [
                            ['text' => 'Les instructions qu’elle contient sont exécutées selon les règles du langage', 'correct' => true],
                            ['text' => 'Le programme est automatiquement supprimé', 'correct' => false],
                            ['text' => 'Toutes les variables deviennent globales', 'correct' => false],
                            ['text' => 'Le système d’exploitation est redémarré', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle affirmation concernant les paramètres est correcte ?',
                        'explanation' => 'Selon le langage et la fonction, une fonction peut recevoir zéro, un ou plusieurs paramètres.',
                        'choices' => [
                            ['text' => 'Une fonction peut recevoir plusieurs paramètres selon sa définition', 'correct' => true],
                            ['text' => 'Une fonction doit toujours avoir exactement un paramètre', 'correct' => false],
                            ['text' => 'Les paramètres sont toujours des constantes', 'correct' => false],
                            ['text' => 'Les paramètres ne peuvent jamais être utilisés dans les calculs', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence générale entre une fonction et une méthode ?',
                        'explanation' => 'Une méthode est généralement une fonction définie dans le contexte d’une classe ou associée à un objet.',
                        'choices' => [
                            ['text' => 'Une méthode est généralement une fonction associée à un objet ou une classe', 'correct' => true],
                            ['text' => 'Une fonction est toujours une méthode', 'correct' => false],
                            ['text' => 'Une méthode ne contient jamais d’instructions', 'correct' => false],
                            ['text' => 'Il n’existe aucune différence conceptuelle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi diviser un programme en plusieurs fonctions ?',
                        'explanation' => 'La décomposition en fonctions permet de structurer le programme en unités plus faciles à comprendre, tester et maintenir.',
                        'choices' => [
                            ['text' => 'Pour améliorer l’organisation, la lisibilité et la réutilisation du code', 'correct' => true],
                            ['text' => 'Pour empêcher l’utilisation des variables', 'correct' => false],
                            ['text' => 'Pour supprimer les algorithmes', 'correct' => false],
                            ['text' => 'Pour rendre le code obligatoirement plus long', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction peut-elle généralement être appelée plusieurs fois ?',
                        'explanation' => 'L’un des principaux avantages d’une fonction est justement de pouvoir réutiliser la même logique plusieurs fois.',
                        'choices' => [
                            ['text' => 'Oui, si sa définition et les règles du langage le permettent', 'correct' => true],
                            ['text' => 'Non, une fonction ne peut être appelée qu’une seule fois', 'correct' => false],
                            ['text' => 'Seulement si elle ne possède aucun paramètre', 'correct' => false],
                            ['text' => 'Seulement après avoir été supprimée', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe consiste à donner à une fonction une responsabilité clairement définie ?',
                        'explanation' => 'Une fonction ayant une responsabilité claire est généralement plus facile à comprendre, tester et maintenir.',
                        'choices' => [
                            ['text' => 'Séparation des responsabilités', 'correct' => true],
                            ['text' => 'Compilation automatique', 'correct' => false],
                            ['text' => 'Conversion de type', 'correct' => false],
                            ['text' => 'Boucle infinie', 'correct' => false],
                        ],
                    ],
                ],
            ],

            // =====================================================
            // QUIZ 8
            // =====================================================
            [
                'title' => 'Tableaux et chaînes de caractères',
                'description' => 'Quiz sur les tableaux, les indices, les chaînes de caractères et leur manipulation.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un tableau (array) ?',
                        'explanation' => 'Un tableau permet généralement de stocker plusieurs valeurs et d’y accéder individuellement grâce à des indices ou des clés selon le langage.',
                        'choices' => [
                            ['text' => 'Une structure permettant généralement de regrouper plusieurs valeurs accessibles à partir d’indices', 'correct' => true],
                            ['text' => 'Une fonction qui ne retourne jamais de valeur', 'correct' => false],
                            ['text' => 'Une constante unique', 'correct' => false],
                            ['text' => 'Un système d’exploitation', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert généralement un indice dans un tableau ?',
                        'explanation' => 'Un indice permet d’accéder à un élément situé à une position donnée dans un tableau.',
                        'choices' => [
                            ['text' => 'À identifier la position d’un élément dans le tableau', 'correct' => true],
                            ['text' => 'À modifier le type du tableau', 'correct' => false],
                            ['text' => 'À compiler le programme', 'correct' => false],
                            ['text' => 'À supprimer automatiquement le tableau', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans de nombreux langages, quel est le premier indice d’un tableau ?',
                        'explanation' => 'De nombreux langages utilisent l’indexation à partir de 0, même si certains langages ou structures peuvent utiliser d’autres conventions.',
                        'choices' => [
                            ['text' => '0', 'correct' => true],
                            ['text' => '1', 'correct' => false],
                            ['text' => '-1', 'correct' => false],
                            ['text' => '10', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une chaîne de caractères (String) ?',
                        'explanation' => 'Une String représente une séquence de caractères, par exemple un nom, une phrase ou un message.',
                        'choices' => [
                            ['text' => 'Une séquence de caractères représentant généralement du texte', 'correct' => true],
                            ['text' => 'Un nombre entier', 'correct' => false],
                            ['text' => 'Une valeur logique uniquement', 'correct' => false],
                            ['text' => 'Une boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle opération permet généralement de connaître le nombre de caractères d’une chaîne ?',
                        'explanation' => 'Les langages proposent généralement une propriété ou une fonction permettant de déterminer la longueur d’une chaîne.',
                        'choices' => [
                            ['text' => 'Une opération de longueur', 'correct' => true],
                            ['text' => 'Une opération de compilation', 'correct' => false],
                            ['text' => 'Une opération de comparaison uniquement', 'correct' => false],
                            ['text' => 'Une déclaration de classe', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie concaténer deux chaînes ?',
                        'explanation' => 'La concaténation consiste à joindre plusieurs chaînes afin de former une chaîne plus grande.',
                        'choices' => [
                            ['text' => 'Les combiner pour former une nouvelle chaîne', 'correct' => true],
                            ['text' => 'Les convertir obligatoirement en nombres', 'correct' => false],
                            ['text' => 'Les supprimer', 'correct' => false],
                            ['text' => 'Les transformer en tableaux automatiquement', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque lorsqu’un programme tente d’accéder à un indice inexistant d’un tableau ?',
                        'explanation' => 'Accéder à un indice qui n’existe pas peut provoquer une erreur, selon le langage et le type de structure utilisé.',
                        'choices' => [
                            ['text' => 'Une erreur peut se produire ou le langage peut gérer la situation selon ses règles', 'correct' => true],
                            ['text' => 'Le tableau devient automatiquement vide', 'correct' => false],
                            ['text' => 'Le programme devient automatiquement plus rapide', 'correct' => false],
                            ['text' => 'L’indice est toujours créé automatiquement', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent une boucle pour parcourir un tableau ?',
                        'explanation' => 'Une boucle permet de parcourir efficacement les éléments d’un tableau afin de les lire ou de les traiter.',
                        'choices' => [
                            ['text' => 'Pour traiter successivement plusieurs éléments du tableau', 'correct' => true],
                            ['text' => 'Pour transformer automatiquement le tableau en constante', 'correct' => false],
                            ['text' => 'Pour supprimer les indices', 'correct' => false],
                            ['text' => 'Pour compiler le tableau', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle opération permet généralement de rechercher un texte dans une chaîne ?',
                        'explanation' => 'Les langages proposent généralement des fonctions permettant de rechercher une sous-chaîne ou un motif dans une chaîne.',
                        'choices' => [
                            ['text' => 'Une opération de recherche ou de correspondance', 'correct' => true],
                            ['text' => 'Une opération de compilation', 'correct' => false],
                            ['text' => 'Une opération de déclaration de variable', 'correct' => false],
                            ['text' => 'Une opération de création de boucle', 'correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tableaux et les chaînes sont-ils importants en programmation ?',
                        'explanation' => 'Les tableaux permettent de gérer des ensembles de données, tandis que les chaînes permettent de manipuler du texte. Ils sont donc très utilisés dans de nombreux programmes.',
                        'choices' => [
                            ['text' => 'Ils permettent notamment de manipuler efficacement des collections de valeurs et du texte', 'correct' => true],
                            ['text' => 'Ils remplacent toujours les fonctions', 'correct' => false],
                            ['text' => 'Ils empêchent les erreurs de programmation', 'correct' => false],
                            ['text' => 'Ils servent uniquement à créer des interfaces graphiques', 'correct' => false],
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
                    'passing_score' => 80,
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

                // Remove old choices if the seeder is run again
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