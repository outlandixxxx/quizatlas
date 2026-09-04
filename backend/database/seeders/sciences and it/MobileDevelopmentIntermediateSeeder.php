<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MobileDevelopmentIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — STATE MANAGEMENT
            // ============================================================
            [
                'title' => 'Gestion de l’état mobile',
                'description' => 'État de l’application, interfaces réactives, séparation de l’état et persistance des données.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que l’état d’une application mobile ?',
                        'choices' => [
                            'Les données représentant l’état actuel de l’application',
                            'Uniquement l’icône de l’application',
                            'Le système d’exploitation de l’appareil',
                            'La taille du package de l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’état de l’application représente les informations décrivant ce que l’application affiche ou fait actuellement.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il parfois séparer l’état de l’UI et l’état métier ?',
                        'choices' => [
                            'Pour augmenter la duplication',
                            'Pour améliorer la maintenabilité et la séparation des responsabilités',
                            'Pour empêcher les tests',
                            'Pour supprimer tous les appels réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'La séparation des préoccupations liées à l’UI et à l’état métier rend l’application plus facile à maintenir, tester et faire évoluer.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le reactive state management ?',
                        'choices' => [
                            'Modifier manuellement le code source après chaque événement',
                            'Actualiser entièrement l’appareil',
                            'Mettre à jour automatiquement l’UI ou la logique dépendante lorsque l’état change',
                            'Désactiver l’état de l’application'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le reactive state management permet à certaines parties de l’application de réagir automatiquement lorsque l’état concerné change.'
                    ],

                    [
                        'question' => 'Quel problème peut créer un usage excessif du global state ?',
                        'choices' => [
                            'Une compilation plus rapide',
                            'Une sécurité automatique',
                            'Des applications plus petites',
                            'Des dépendances difficiles à suivre et des changements inattendus'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un global state trop important peut rendre le flux des données difficile à comprendre et provoquer des effets secondaires inattendus.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un immutable state ?',
                        'choices' => [
                            'Un état qui est remplacé plutôt que modifié directement',
                            'Un état qui ne peut jamais exister',
                            'Un état stocké uniquement sur un serveur',
                            'Un état qui se supprime automatiquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un immutable state n’est pas modifié directement ; une nouvelle représentation de l’état est généralement créée.'
                    ],

                    [
                        'question' => 'Pourquoi un immutable state peut-il simplifier le debugging ?',
                        'choices' => [
                            'Il supprime toutes les erreurs de l’application',
                            'Les transitions d’état peuvent être plus faciles à suivre et à comprendre',
                            'Il empêche les interactions utilisateur',
                            'Il supprime le besoin de logs'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des transitions d’état prévisibles permettent de mieux identifier quand et pourquoi l’état de l’application a changé.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un derived state ?',
                        'choices' => [
                            'Un état copié aléatoirement depuis un serveur',
                            'Un état stocké uniquement en RAM',
                            'Une valeur calculée à partir d’un autre état existant',
                            'Un système d’exploitation mobile'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le derived state est calculé à partir d’autres états au lieu de constituer une source de vérité indépendante.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de stocker la même source de vérité à plusieurs endroits ?',
                        'choices' => [
                            'Cela améliore la duplication',
                            'Cela augmente l’autonomie de la batterie',
                            'Cela supprime la synchronisation',
                            'Cela peut créer des valeurs incohérentes'
                        ],
                        'correct' => 3,
                        'explanation' => 'Plusieurs sources de vérité dupliquées peuvent devenir incohérentes et rendre la synchronisation de l’état plus difficile.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une state transition ?',
                        'choices' => [
                            'Un changement d’un état de l’application vers un autre',
                            'Un câble réseau',
                            'Un index de base de données',
                            'Une couleur d’UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une state transition décrit le passage de l’application d’un état à un autre après un événement ou une opération.'
                    ],

                    [
                        'question' => 'Quel est l’un des avantages d’un state management prévisible ?',
                        'choices' => [
                            'Il supprime l’architecture de l’application',
                            'Il rend le comportement de l’application plus facile à comprendre et à tester',
                            'Il empêche les API',
                            'Il supprime la persistance'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un flux d’état prévisible facilite la compréhension du comportement de l’application et les tests.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — NAVIGATION
            // ============================================================
            [
                'title' => 'Navigation mobile',
                'description' => 'Navigation stacks, routes, deep links et transitions entre les écrans.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une navigation stack ?',
                        'choices' => [
                            'Une structure représentant la séquence des écrans visités',
                            'Une table de base de données',
                            'Une file d’attente réseau',
                            'Une palette de couleurs d’UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une navigation stack représente généralement l’historique des écrans et permet de faire des opérations push et pop sur les routes.'
                    ],

                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’un écran est push sur une navigation stack ?',
                        'choices' => [
                            'L’application est terminée',
                            'Le nouvel écran devient l’écran courant',
                            'La base de données est supprimée',
                            'Le réseau est désactivé'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le push d’une route place généralement un nouvel écran au-dessus de l’écran courant dans la navigation stack.'
                    ],

                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une route est pop ?',
                        'choices' => [
                            'Une nouvelle application est installée',
                            'La base de données est recréée',
                            'La route courante est supprimée et la route précédente devient visible',
                            'L’appareil redémarre'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le pop supprime la route courante et permet de revenir à la route précédente de la navigation stack.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un deep link ?',
                        'choices' => [
                            'Une requête de base de données',
                            'Un processus en arrière-plan',
                            'Une animation d’UI',
                            'Un lien qui ouvre directement un emplacement ou un écran spécifique dans une application'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les deep links permettent à des liens externes ou à des intents de diriger directement l’utilisateur vers un contenu précis de l’application.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il valider les arguments de navigation ?',
                        'choices' => [
                            'Les écrans externes ou précédents peuvent fournir des valeurs inattendues',
                            'La navigation ne peut pas transporter de données',
                            'Cela améliore la luminosité de l’écran',
                            'Cela supprime l’état de l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les paramètres de navigation peuvent provenir de différentes sources et doivent être validés avant leur utilisation.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la nested navigation ?',
                        'choices' => [
                            'Une transaction de base de données',
                            'Des structures de navigation contenues dans une autre structure de navigation',
                            'Une requête réseau',
                            'Une permission de l’appareil'
                        ],
                        'correct' => 1,
                        'explanation' => 'La nested navigation permet d’avoir des flux de navigation indépendants à l’intérieur d’une autre structure de navigation.'
                    ],

                    [
                        'question' => 'Pourquoi la conservation de l’état de navigation peut-elle être utile ?',
                        'choices' => [
                            'Elle supprime tous les écrans',
                            'Elle empêche les utilisateurs de naviguer',
                            'Elle permet aux utilisateurs de revenir à une position pertinente dans l’application',
                            'Elle désactive la persistance'
                        ],
                        'correct' => 2,
                        'explanation' => 'La conservation de l’état de navigation permet d’offrir une meilleure expérience lorsque l’utilisateur revient dans un flux précédent.'
                    ],

                    [
                        'question' => 'À quoi sert généralement un écran modal ?',
                        'choices' => [
                            'Remplacer le système d’exploitation',
                            'Gérer la base de données',
                            'Exécuter des services en arrière-plan',
                            'Présenter un contenu ou une interaction ciblée au-dessus du contexte actuel'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les interfaces modales sont utiles pour des interactions ciblées comme les formulaires, les confirmations ou les sélections.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de dupliquer inutilement la logique de navigation dans plusieurs écrans ?',
                        'choices' => [
                            'Centraliser les comportements communs peut améliorer la cohérence et la maintenabilité',
                            'Le code dupliqué est toujours plus rapide',
                            'La navigation ne peut pas être testée',
                            'Cela empêche les deep links'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une logique de navigation réutilisable réduit la duplication et rend le comportement de navigation plus cohérent.'
                    ],

                    [
                        'question' => 'Que devrait faire l’application lorsqu’un deep link pointe vers un contenu nécessitant une authentification ?',
                        'choices' => [
                            'L’application doit toujours planter',
                            'L’application doit authentifier l’utilisateur ou le rediriger vers un flux d’authentification approprié',
                            'L’application doit exposer les données privées',
                            'L’application doit désactiver la navigation'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les deep links protégés doivent respecter les exigences d’authentification et d’autorisation.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — API INTEGRATION
            // ============================================================
            [
                'title' => 'Intégration des API mobiles',
                'description' => 'HTTP clients, authentification, serialization, gestion des erreurs et communication API asynchrone.',
                'questions' => [

                    [
                        'question' => 'Pourquoi les appels réseau doivent-ils généralement être asynchrones ?',
                        'choices' => [
                            'Pour éviter de bloquer l’interface utilisateur pendant l’attente du réseau',
                            'Pour empêcher toutes les erreurs',
                            'Pour désactiver le serveur',
                            'Pour supprimer JSON'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les opérations réseau peuvent prendre un temps imprévisible ; l’exécution asynchrone évite donc de bloquer l’UI.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la JSON serialization ?',
                        'choices' => [
                            'Chiffrer un appareil',
                            'Convertir un objet en mémoire en représentation JSON',
                            'Supprimer un objet',
                            'Créer un écran'
                        ],
                        'correct' => 1,
                        'explanation' => 'La serialization convertit les données de l’application vers un format adapté au transport ou au stockage.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la deserialization ?',
                        'choices' => [
                            'Supprimer les données réseau',
                            'Chiffrer JSON',
                            'Convertir des données sérialisées en objets ou structures de l’application',
                            'Créer une base de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'La deserialization reconstruit les données de l’application à partir d’une représentation sérialisée.'
                    ],

                    [
                        'question' => 'Quel HTTP status indique généralement qu’une authentification est requise ou invalide ?',
                        'choices' => [
                            '200',
                            '201',
                            '404',
                            '401'
                        ],
                        'correct' => 3,
                        'explanation' => 'HTTP 401 indique que des informations d’authentification valides sont requises ou n’ont pas été acceptées.'
                    ],

                    [
                        'question' => 'Quel HTTP status indique généralement que le serveur a compris la requête mais refuse l’autorisation ?',
                        'choices' => [
                            '403',
                            '200',
                            '201',
                            '301'
                        ],
                        'correct' => 0,
                        'explanation' => 'HTTP 403 indique que le serveur a compris la requête mais refuse de l’autoriser.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il gérer explicitement les réponses d’erreur des API ?',
                        'choices' => [
                            'Les erreurs ne peuvent pas arriver sur mobile',
                            'Les problèmes réseau et serveur sont des situations normales possibles',
                            'Cela rend JSON invalide',
                            'Cela empêche l’authentification'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les applications mobiles doivent prévoir les problèmes de connexion, les timeouts et les erreurs du backend.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la token-based authentication ?',
                        'choices' => [
                            'Une authentification basée sur la couleur de l’appareil',
                            'Une authentification basée uniquement sur la taille de l’écran',
                            'Une authentification dans laquelle un token représente une session ou une identité authentifiée',
                            'Une authentification sans serveur'
                        ],
                        'correct' => 2,
                        'explanation' => 'Dans un système basé sur les tokens, le client reçoit un token qu’il présente lors de l’accès aux ressources protégées.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il protéger les authentication tokens sur un appareil mobile ?',
                        'choices' => [
                            'Ils augmentent la taille de l’application',
                            'Ils modifient la résolution de l’écran',
                            'Ils empêchent le rendu de l’UI',
                            'Un token volé peut permettre un accès non autorisé'
                        ],
                        'correct' => 3,
                        'explanation' => 'Si un attaquant obtient un token d’authentification valide, il peut potentiellement accéder à des ressources protégées.'
                    ],

                    [
                        'question' => 'À quoi sert une API client abstraction ?',
                        'choices' => [
                            'Centraliser la communication réseau et réduire la duplication de la logique des requêtes',
                            'Modifier le matériel',
                            'Remplacer le système d’exploitation',
                            'Supprimer toutes les erreurs'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une couche API dédiée centralise les responsabilités réseau et améliore la maintenabilité.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il valider les réponses API avant de les utiliser dans l’UI ?',
                        'choices' => [
                            'Les serveurs renvoient toujours des données invalides',
                            'La réponse peut contenir des champs manquants, des valeurs inattendues ou représenter une erreur',
                            'L’UI ne peut pas afficher JSON',
                            'La validation désactive le réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une validation défensive empêche des réponses serveur inattendues de provoquer un comportement incorrect ou des crashes.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — ASYNC & CONCURRENCY
            // ============================================================
            [
                'title' => 'Programmation asynchrone',
                'description' => 'Async operations, futures, concurrency et travail en arrière-plan dans les applications mobiles.',
                'questions' => [

                    [
                        'question' => 'Que permet la programmation asynchrone ?',
                        'choices' => [
                            'Continuer d’autres tâches pendant qu’une opération est en cours',
                            'Désactiver tout travail en arrière-plan',
                            'Empêcher les interactions utilisateur',
                            'Supprimer la communication réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'La programmation asynchrone permet de lancer une opération et de continuer d’autres tâches pendant l’attente de son résultat.'
                    ],

                    [
                        'question' => 'À quoi sert généralement un Future ou une Promise ?',
                        'choices' => [
                            'À représenter un écran',
                            'À représenter une valeur qui pourra être disponible ultérieurement',
                            'À représenter une table de base de données',
                            'À représenter une couleur d’UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un Future ou une Promise représente un résultat asynchrone qui pourra être disponible ultérieurement.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une race condition ?',
                        'choices' => [
                            'Une animation d’UI',
                            'Un schéma de base de données',
                            'Un bug causé par le timing ou l’ordre d’exécution d’opérations concurrentes',
                            'Un protocole réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une race condition apparaît lorsque le comportement du programme dépend du timing ou de l’ordre imprévisible d’opérations concurrentes.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il parfois déplacer un travail CPU-intensive hors du main UI thread ?',
                        'choices' => [
                            'Pour augmenter la complexité de l’UI',
                            'Pour désactiver le rendu',
                            'Pour empêcher les API',
                            'Pour garder l’interface réactive'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un travail lourd exécuté sur le main thread peut provoquer des ralentissements et rendre l’interface non réactive.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un callback ?',
                        'choices' => [
                            'Une fonction appelée en réponse à un événement ou à la fin d’une opération',
                            'Une base de données',
                            'Un composant UI',
                            'Un capteur de l’appareil'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un callback est une fonction fournie pour être exécutée ultérieurement lorsqu’un événement ou une opération se produit.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsque les ressources asynchrones ne sont pas nettoyées ?',
                        'choices' => [
                            'De meilleures performances',
                            'Des memory leaks ou des callbacks agissant sur des écrans déjà détruits',
                            'Une sécurité automatique',
                            'Des applications plus petites'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des subscriptions, timers ou listeners non libérés peuvent conserver des ressources et provoquer des problèmes de mémoire ou de lifecycle.'
                    ],

                    [
                        'question' => 'À quoi sert le debouncing ?',
                        'choices' => [
                            'Exécuter immédiatement chaque événement',
                            'Augmenter le trafic réseau',
                            'Réduire les actions répétées déclenchées pendant une courte période',
                            'Supprimer les opérations asynchrones'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le debouncing attend une période sans nouvel événement avant d’exécuter une action, ce qui est utile notamment pour les champs de recherche.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le throttling ?',
                        'choices' => [
                            'Exécuter une opération sans aucune limite',
                            'Supprimer tous les événements',
                            'Bloquer définitivement l’UI',
                            'Limiter la fréquence à laquelle une opération peut être exécutée'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le throttling limite la fréquence d’exécution d’une opération pendant une période donnée.'
                    ],

                    [
                        'question' => 'Pourquoi la cancellation est-elle importante pour les requêtes réseau ?',
                        'choices' => [
                            'Une requête peut ne plus être nécessaire lorsque l’utilisateur quitte un écran',
                            'Elle rend toutes les requêtes plus rapides',
                            'Elle empêche l’authentification',
                            'Elle supprime les API'
                        ],
                        'correct' => 0,
                        'explanation' => 'Annuler les opérations devenues inutiles économise des ressources et évite des mises à jour inutiles sur des écrans qui ne sont plus actifs.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la concurrency ?',
                        'choices' => [
                            'Une seule opération peut toujours être exécutée',
                            'La gestion de plusieurs opérations pouvant progresser pendant des périodes qui se chevauchent',
                            'Un format de base de données',
                            'Un framework UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'La concurrency concerne la gestion de plusieurs opérations dont les périodes d’exécution peuvent se chevaucher.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — LOCAL DATABASES
            // ============================================================
            [
                'title' => 'Bases de données mobiles et persistance',
                'description' => 'Bases de données locales, repositories, caching et persistance des données.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une application mobile peut-elle utiliser une repository layer ?',
                        'choices' => [
                            'Pour abstraire l’accès aux données du reste de l’application',
                            'Pour remplacer l’UI',
                            'Pour contrôler la luminosité de l’écran',
                            'Pour supprimer la persistance'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une repository peut abstraire la source des données, qu’elles proviennent d’une base locale, d’une API, d’un cache ou d’une autre source.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la persistence ?',
                        'choices' => [
                            'Un rendu temporaire de l’UI',
                            'Le fait de conserver des données au-delà de l’état d’exécution actuel',
                            'Le changement d’orientation de l’écran',
                            'La création d’une API'
                        ],
                        'correct' => 1,
                        'explanation' => 'La persistence consiste à stocker les données afin qu’elles puissent survivre à des événements comme le redémarrage de l’application.'
                    ],

                    [
                        'question' => 'Pourquoi les database indexes peuvent-ils améliorer les requêtes d’une base locale ?',
                        'choices' => [
                            'Ils augmentent la taille de l’écran',
                            'Ils suppriment tout le stockage',
                            'Ils peuvent rendre certaines recherches plus efficaces',
                            'Ils désactivent les transactions'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les indexes fournissent des structures permettant d’accélérer certaines recherches dans une base de données.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une migration ?',
                        'choices' => [
                            'Déplacer un utilisateur entre deux écrans',
                            'Modifier le système d’exploitation de l’appareil',
                            'Effectuer un retry réseau',
                            'Modifier de manière contrôlée le schema d’une base de données'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les database migrations permettent d’appliquer des changements de schema de manière contrôlée et reproductible.'
                    ],

                    [
                        'question' => 'Pourquoi les database migrations doivent-elles être versionnées ?',
                        'choices' => [
                            'Pour appliquer les changements de schema de manière cohérente sur les installations',
                            'Pour augmenter la duplication',
                            'Pour supprimer les données locales',
                            'Pour désactiver les tests'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les migrations versionnées permettent de faire évoluer une application de manière fiable d’une version de schema à une autre.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la cache invalidation ?',
                        'choices' => [
                            'Créer un nouvel écran',
                            'Déterminer à quel moment les données en cache ne doivent plus être considérées comme valides',
                            'Supprimer le système d’exploitation',
                            'Chiffrer toute l’UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'La cache invalidation définit à quel moment les informations mises en cache doivent être actualisées ou supprimées.'
                    ],

                    [
                        'question' => 'À quoi sert un offline cache ?',
                        'choices' => [
                            'Rendre le serveur inutile dans tous les cas',
                            'Augmenter la dépendance au réseau',
                            'Permettre l’accès hors ligne à des données précédemment récupérées',
                            'Remplacer la logique de l’application'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un offline cache permet d’accéder à des informations précédemment récupérées lorsque la connexion réseau est indisponible.'
                    ],

                    [
                        'question' => 'Pourquoi les opérations de base de données peuvent-elles être exécutées de manière asynchrone ?',
                        'choices' => [
                            'Les bases de données ne peuvent pas retourner de valeurs',
                            'Toutes les opérations de base de données sont instantanées',
                            'Pour augmenter le blocage de l’UI',
                            'Certaines opérations peuvent être coûteuses et ne doivent pas bloquer l’UI'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les lectures et écritures peuvent prendre du temps, notamment avec de grandes quantités de données, et ne doivent donc pas bloquer inutilement l’UI.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la data synchronization ?',
                        'choices' => [
                            'Réconcilier les données entre différentes sources comme l’appareil et le serveur',
                            'Modifier la couleur d’un écran',
                            'Supprimer le stockage local',
                            'Créer un bouton'
                        ],
                        'correct' => 0,
                        'explanation' => 'La synchronization permet de maintenir les données provenant de différentes sources cohérentes selon des règles définies.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsque les données locales et serveur sont modifiées indépendamment ?',
                        'choices' => [
                            'La luminosité de l’écran',
                            'La conflict resolution',
                            'La compilation CSS',
                            'Les icônes de l’application'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des modifications indépendantes peuvent produire plusieurs versions contradictoires d’une même donnée et nécessiter une stratégie de conflict resolution.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — PERMISSIONS & DEVICE FEATURES
            // ============================================================
            [
                'title' => 'Permissions et fonctionnalités de l’appareil',
                'description' => 'Camera, location, notifications, permissions et fonctionnalités des appareils mobiles.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une application doit-elle demander uniquement les permissions dont elle a réellement besoin ?',
                        'choices' => [
                            'Pour réduire les accès inutiles et améliorer la confiance des utilisateurs',
                            'Pour augmenter le nombre de permissions',
                            'Pour désactiver la sécurité',
                            'Pour empêcher les mises à jour de l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'Demander uniquement les permissions nécessaires respecte le principe du least privilege et améliore la confiance des utilisateurs.'
                    ],

                    [
                        'question' => 'Pourquoi les permission requests doivent-elles généralement être effectuées près de la fonctionnalité qui en a besoin ?',
                        'choices' => [
                            'Cela augmente le trafic réseau',
                            'Cela donne à l’utilisateur un contexte plus clair sur la raison de l’accès demandé',
                            'Cela désactive la fonctionnalité',
                            'Cela empêche les tests'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une demande de permission contextuelle aide l’utilisateur à comprendre pourquoi l’application a besoin d’accéder à une fonctionnalité.'
                    ],

                    [
                        'question' => 'Que devrait faire une application si l’utilisateur refuse une permission non essentielle ?',
                        'choices' => [
                            'Planter immédiatement',
                            'L’accorder secrètement',
                            'Gérer le refus correctement et proposer une alternative lorsque cela est possible',
                            'Supprimer les données utilisateur'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’application doit gérer le refus d’une permission de manière appropriée sans supposer que toutes les permissions seront accordées.'
                    ],

                    [
                        'question' => 'Quelle fonctionnalité d’un appareil est couramment utilisée pour prendre des photos ?',
                        'choices' => [
                            'GPS',
                            'Accelerometer',
                            'Bluetooth',
                            'Camera'
                        ],
                        'correct' => 3,
                        'explanation' => 'La Camera permet de capturer des photos et des vidéos.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la geolocation ?',
                        'choices' => [
                            'Déterminer la position géographique d’un appareil',
                            'Modifier les couleurs de l’application',
                            'Créer une base de données',
                            'Envoyer un email'
                        ],
                        'correct' => 0,
                        'explanation' => 'La geolocation permet de déterminer la position géographique approximative d’un appareil grâce aux technologies de positionnement disponibles.'
                    ],

                    [
                        'question' => 'Pourquoi l’accès à la location peut-il avoir des implications en matière de privacy ?',
                        'choices' => [
                            'Les données de localisation ne sont jamais sensibles',
                            'Elles peuvent révéler où se trouve ou s’est trouvé un utilisateur',
                            'Elles modifient uniquement l’UI',
                            'Elles ne peuvent pas être stockées'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les données de localisation peuvent révéler des informations sensibles sur les déplacements et les habitudes d’un utilisateur.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une push notification ?',
                        'choices' => [
                            'Une requête de base de données',
                            'Un fichier local',
                            'Un message envoyé à un appareil ou à une application par un notification service',
                            'Un langage de programmation'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les push notifications permettent aux serveurs ou aux systèmes de notification d’envoyer des messages aux appareils.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il gérer soigneusement les notification permissions ?',
                        'choices' => [
                            'Les notifications ne peuvent pas être désactivées',
                            'Les notifications ne consomment aucune ressource',
                            'Tous les utilisateurs doivent recevoir tous les messages',
                            'Les utilisateurs peuvent refuser les notifications et un excès de notifications peut réduire l’engagement'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les utilisateurs contrôlent leurs préférences de notifications et un nombre excessif de notifications peut dégrader leur expérience.'
                    ],

                    [
                        'question' => 'À quoi sert généralement un accelerometer ?',
                        'choices' => [
                            'Détecter les mouvements ou l’accélération de l’appareil',
                            'Stocker les mots de passe',
                            'Créer des bases de données',
                            'Se connecter aux API'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un accelerometer mesure l’accélération et peut être utilisé pour des fonctionnalités liées aux mouvements et à l’orientation.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il gérer efficacement les données des sensors ?',
                        'choices' => [
                            'Les sensors ne consomment jamais de ressources',
                            'Le traitement continu des sensors peut consommer du CPU et de la batterie',
                            'Les sensors désactivent le réseau',
                            'Les sensors remplacent le stockage'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’utilisation et le traitement continus des sensors peuvent consommer des ressources importantes de l’appareil, notamment de la batterie.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — TESTING
            // ============================================================
            [
                'title' => 'Tests des applications mobiles',
                'description' => 'Unit tests, integration tests, UI tests et stratégies de test pour les applications mobiles.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal des unit tests ?',
                        'choices' => [
                            'Vérifier indépendamment de petites parties de la logique',
                            'Tester uniquement l’icône de l’application',
                            'Remplacer tous les tests manuels',
                            'Tester la batterie physique'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les unit tests vérifient de petites parties isolées de la logique de l’application.'
                    ],

                    [
                        'question' => 'Que cherchent à vérifier les UI tests ?',
                        'choices' => [
                            'Uniquement le stockage de la base de données',
                            'Le comportement de l’interface utilisateur et les interactions',
                            'Le CPU mobile',
                            'L’infrastructure de l’app store'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les UI tests vérifient que les éléments de l’interface apparaissent et se comportent comme prévu lors des interactions utilisateur.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un mock ?',
                        'choices' => [
                            'Une base de données de production',
                            'Un serveur réseau réel',
                            'Un remplacement de test pour une dependency',
                            'Un appareil mobile'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un mock simule une dependency afin de permettre aux tests d’isoler le composant testé.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser un mock d’API dans un unit test ?',
                        'choices' => [
                            'Pour rendre le test dépendant du vrai réseau',
                            'Pour augmenter la latence',
                            'Pour tester le Wi-Fi',
                            'Pour isoler la logique de l’application de la disponibilité du réseau'
                        ],
                        'correct' => 3,
                        'explanation' => 'Mocker une API rend les tests plus rapides et déterministes en supprimant leur dépendance à des services réseau externes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le regression testing ?',
                        'choices' => [
                            'Vérifier que les fonctionnalités existantes fonctionnent toujours après des modifications',
                            'Supprimer les anciens tests',
                            'Tester uniquement les nouveaux écrans',
                            'Tester les couleurs de l’appareil'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le regression testing vérifie que les nouvelles modifications n’ont pas cassé des fonctionnalités qui fonctionnaient auparavant.'
                    ],

                    [
                        'question' => 'Pourquoi les tests doivent-ils être déterministes ?',
                        'choices' => [
                            'Ils doivent échouer aléatoirement',
                            'Les mêmes conditions doivent généralement produire des résultats prévisibles',
                            'Ils doivent dépendre de la vitesse Internet',
                            'Ils doivent nécessiter une intervention manuelle'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des tests déterministes sont plus faciles à comprendre, à déboguer et à exécuter de manière répétée.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la test coverage ?',
                        'choices' => [
                            'Le nombre d’utilisateurs',
                            'La taille de l’application',
                            'Une mesure de la quantité de code ou de comportement exécutée par les tests',
                            'La résolution de l’écran'
                        ],
                        'correct' => 2,
                        'explanation' => 'La test coverage mesure la quantité de code ou de comportement couverte par les tests automatisés.'
                    ],

                    [
                        'question' => 'Pourquoi une couverture de code élevée ne prouve-t-elle pas à elle seule une qualité logicielle élevée ?',
                        'choices' => [
                            'La coverage ne peut pas être mesurée',
                            'Les tests sont toujours inutiles',
                            'La coverage empêche les bugs',
                            'Les tests peuvent exécuter du code sans vérifier réellement les comportements importants'
                        ],
                        'correct' => 3,
                        'explanation' => 'La coverage indique ce qui a été exécuté, mais pas nécessairement si les tests vérifient correctement les exigences importantes.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un integration test ?',
                        'choices' => [
                            'Un test qui vérifie les interactions entre plusieurs composants',
                            'Un test portant sur une seule variable',
                            'Un test de la batterie du téléphone',
                            'Un test de l’icône de l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les integration tests vérifient que plusieurs composants ou couches fonctionnent correctement ensemble.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il exécuter automatiquement les tests dans une CI ?',
                        'choices' => [
                            'Pour augmenter le travail manuel',
                            'Pour détecter régulièrement les regressions avant la livraison des modifications',
                            'Pour supprimer le version control',
                            'Pour empêcher les déploiements'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les tests automatisés dans une CI fournissent un retour continu sur l’impact des modifications du code.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — MOBILE ARCHITECTURE
            // ============================================================
            [
                'title' => 'Architecture des applications mobiles',
                'description' => 'Architecture en couches, séparation des responsabilités, repositories et conception d’applications maintenables.',
                'questions' => [

                    [
                        'question' => 'Pourquoi utiliser des layers dans l’architecture d’une application mobile ?',
                        'choices' => [
                            'Pour séparer les responsabilités et réduire le couplage',
                            'Pour augmenter le code dupliqué',
                            'Pour empêcher les tests',
                            'Pour supprimer les API'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une architecture en layers sépare les responsabilités et rend les différentes parties plus faciles à maintenir et à tester.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une repository ?',
                        'choices' => [
                            'Rendre tous les composants UI',
                            'Fournir une abstraction au-dessus des sources de données',
                            'Remplacer la navigation',
                            'Contrôler le système d’exploitation'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une repository fournit une abstraction cohérente pour accéder à différentes sources comme les API et les bases de données locales.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la dependency injection ?',
                        'choices' => [
                            'Créer les dependencies à l’intérieur de chaque classe',
                            'Supprimer toutes les dependencies',
                            'Fournir les dependencies depuis l’extérieur du composant qui les utilise',
                            'Stocker les dependencies dans la base de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'La dependency injection fournit les dependencies de manière externe au lieu d’obliger un composant à les créer lui-même.'
                    ],

                    [
                        'question' => 'Quel est l’un des avantages de la dependency injection ?',
                        'choices' => [
                            'Elle garantit zéro bug',
                            'Elle empêche les tests',
                            'Elle supprime l’architecture',
                            'Elle rend les composants plus faciles à remplacer et à tester'
                        ],
                        'correct' => 3,
                        'explanation' => 'La dependency injection permet de remplacer les dependencies par des alternatives ou des test doubles.'
                    ],

                    [
                        'question' => 'Que signifie separation of concerns ?',
                        'choices' => [
                            'Les différentes responsabilités doivent être gérées par des composants correctement séparés',
                            'Toute la logique doit appartenir à une seule classe',
                            'Toutes les données doivent appartenir à l’UI',
                            'Chaque fonctionnalité doit partager un global state'
                        ],
                        'correct' => 0,
                        'explanation' => 'La separation of concerns évite de mélanger inutilement différentes responsabilités dans les mêmes composants.'
                    ],

                    [
                        'question' => 'Pourquoi est-il généralement préférable de conserver la business logic en dehors des composants UI ?',
                        'choices' => [
                            'Les composants UI ne peuvent pas contenir de code',
                            'Cela améliore la réutilisation, les tests et la maintenabilité',
                            'Cela empêche les interactions utilisateur',
                            'Cela supprime l’état'
                        ],
                        'correct' => 1,
                        'explanation' => 'Séparer la business logic de l’UI facilite sa réutilisation et son test indépendamment de l’interface.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le tight coupling ?',
                        'choices' => [
                            'Les composants n’ont aucune relation',
                            'Les composants communiquent uniquement via des API',
                            'Les composants dépendent fortement d’implémentations spécifiques',
                            'Les composants sont toujours indépendants'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le tight coupling apparaît lorsque les composants dépendent fortement les uns des autres ou d’implémentations spécifiques.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le loose coupling ?',
                        'choices' => [
                            'Chaque composant accède directement à chaque base de données',
                            'Tout le code est placé dans un seul fichier',
                            'Les composants ne peuvent pas communiquer',
                            'Les composants dépendent moins des détails d’implémentation spécifiques'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le loose coupling réduit les dépendances entre les composants et rend le système plus facile à modifier.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il adapter l’architecture à la complexité de l’application ?',
                        'choices' => [
                            'Une architecture excessive pour une application simple peut ajouter une complexité inutile',
                            'Les applications simples nécessitent des microservices',
                            'L’architecture n’a aucun impact',
                            'Toutes les applications doivent avoir exactement les mêmes layers'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’architecture doit répondre aux problèmes réels de l’application ; une abstraction excessive peut compliquer inutilement une petite application.'
                    ],

                    [
                        'question' => 'Quelle est une caractéristique importante d’une architecture mobile maintenable ?',
                        'choices' => [
                            'Un couplage maximal',
                            'Des responsabilités claires et un flux de données prévisible',
                            'Aucun test',
                            'Toute la logique dans les écrans UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des responsabilités claires et un flux de données prévisible rendent l’application plus facile à comprendre, tester et faire évoluer.'
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

                // Mélange des réponses tout en conservant
                // is_correct avec la bonne réponse.
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