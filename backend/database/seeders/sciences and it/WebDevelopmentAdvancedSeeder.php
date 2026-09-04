<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WebDevelopmentAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — JAVASCRIPT AVANCÉ
            // ============================================================
            [
                'title' => 'JavaScript avancé',
                'description' => 'Approfondissez les concepts avancés de JavaScript, les closures, le contexte d’exécution et les mécanismes asynchrones.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une closure en JavaScript ?',
                        'choices' => [
                            'Une fonction qui conserve l’accès à son environnement lexical',
                            'Une fonction qui ne peut jamais retourner de valeur',
                            'Une classe JavaScript particulière',
                            'Une méthode permettant uniquement de fermer une fenêtre'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une closure permet à une fonction de conserver l’accès aux variables de son environnement lexical même après la fin de l’exécution de la fonction externe.'
                    ],
                    [
                        'question' => 'Que représente principalement le mot-clé this dans une méthode d’objet ?',
                        'choices' => [
                            'Toujours la classe parente',
                            'Le contexte auquel l’appel de la fonction est associé',
                            'Toujours l’objet window',
                            'Toujours le prototype'
                        ],
                        'correct' => 1,
                        'explanation' => 'La valeur de this dépend notamment de la manière dont une fonction est appelée.'
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre une Arrow Function et une fonction classique concernant this ?',
                        'choices' => [
                            'Une Arrow Function possède toujours son propre this',
                            'Une fonction classique n’a jamais de this',
                            'Une Arrow Function ne crée pas son propre this',
                            'Les deux fonctionnent toujours exactement de la même manière'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une Arrow Function utilise le this lexical de son environnement au lieu de définir son propre this.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet à JavaScript de gérer plusieurs opérations asynchrones malgré son modèle principalement single-threaded ?',
                        'choices' => [
                            'Le CSS engine',
                            'Le DOM uniquement',
                            'Le garbage collector uniquement',
                            'L’event loop'
                        ],
                        'correct' => 3,
                        'explanation' => 'L’event loop coordonne notamment la pile d’exécution, les tâches et les callbacks afin de gérer les opérations asynchrones.'
                    ],
                    [
                        'question' => 'Qu’est-ce que le hoisting concerne notamment en JavaScript ?',
                        'choices' => [
                            'Le traitement des déclarations avant certaines exécutions du code',
                            'Le chargement des images',
                            'Le chiffrement HTTP',
                            'La compilation CSS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le hoisting décrit le comportement du moteur JavaScript concernant certaines déclarations avant l’exécution du code.'
                    ],
                    [
                        'question' => 'Quelle structure permet de créer une collection de valeurs uniques ?',
                        'choices' => [
                            'Array',
                            'Set',
                            'Map',
                            'WeakMap'
                        ],
                        'correct' => 1,
                        'explanation' => 'Set représente une collection de valeurs uniques.'
                    ],
                    [
                        'question' => 'Quelle structure associe des clés à des valeurs et peut utiliser différents types comme clés ?',
                        'choices' => [
                            'Array',
                            'Set',
                            'Map',
                            'String'
                        ],
                        'correct' => 2,
                        'explanation' => 'Map associe des clés à des valeurs et permet notamment d’utiliser des objets comme clés.'
                    ],
                    [
                        'question' => 'Que permet principalement Object.freeze() ?',
                        'choices' => [
                            'Supprimer toutes les propriétés',
                            'Convertir un Object en JSON',
                            'Copier profondément un Object',
                            'Empêcher certaines modifications directes d’un Object'
                        ],
                        'correct' => 3,
                        'explanation' => 'Object.freeze() empêche notamment l’ajout, la suppression ou la modification directe des propriétés d’un Object.'
                    ],
                    [
                        'question' => 'Quel problème peut provoquer une récursion sans condition d’arrêt correcte ?',
                        'choices' => [
                            'Une stack overflow',
                            'Un changement automatique de protocole',
                            'Une erreur CSS',
                            'Une modification du DNS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une récursion trop profonde peut remplir la call stack et provoquer une erreur de type stack overflow.'
                    ],
                    [
                        'question' => 'Quelle technique permet de limiter la fréquence d’exécution d’une fonction lors d’événements fréquents ?',
                        'choices' => [
                            'Compilation',
                            'Debouncing ou throttling',
                            'Serialization uniquement',
                            'Minification uniquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Debouncing et throttling permettent de contrôler la fréquence d’exécution de fonctions déclenchées par des événements fréquents.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — PERFORMANCE WEB
            // ============================================================
            [
                'title' => 'Performance Web',
                'description' => 'Optimisation du chargement, du rendu et des performances des applications Web.',
                'questions' => [
                    [
                        'question' => 'Quel mécanisme permet de conserver temporairement des ressources afin d’éviter de les télécharger à nouveau ?',
                        'choices' => [
                            'Caching',
                            'Routing',
                            'Parsing',
                            'Bundling uniquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le caching permet de conserver certaines ressources et de réduire les téléchargements répétitifs.'
                    ],
                    [
                        'question' => 'Quel format d’image est généralement adapté aux images photographiques avec compression efficace ?',
                        'choices' => [
                            'SVG uniquement',
                            'JPEG',
                            'TXT',
                            'HTML'
                        ],
                        'correct' => 1,
                        'explanation' => 'JPEG est couramment utilisé pour les photographies grâce à sa compression avec perte.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet de charger une ressource uniquement lorsqu’elle devient nécessaire ?',
                        'choices' => [
                            'Preloading systématique',
                            'Eager loading',
                            'Lazy loading',
                            'Server blocking'
                        ],
                        'correct' => 2,
                        'explanation' => 'Lazy loading reporte le chargement de certaines ressources jusqu’à ce qu’elles soient nécessaires.'
                    ],
                    [
                        'question' => 'Quel problème peut être causé par un JavaScript lourd exécuté sur le thread principal ?',
                        'choices' => [
                            'Une meilleure réactivité',
                            'Une réduction automatique des images',
                            'Une accélération du rendu',
                            'Un blocage ou ralentissement de l’interface'
                        ],
                        'correct' => 3,
                        'explanation' => 'Des tâches JavaScript longues peuvent bloquer le main thread et rendre l’interface moins réactive.'
                    ],
                    [
                        'question' => 'Que permet généralement la minification ?',
                        'choices' => [
                            'Réduire la taille des fichiers en supprimant notamment certains caractères inutiles',
                            'Augmenter la résolution des images',
                            'Ajouter des commentaires',
                            'Créer une base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'La minification réduit la taille des fichiers CSS ou JavaScript en supprimant notamment espaces et commentaires inutiles.'
                    ],
                    [
                        'question' => 'Qu’est-ce que le code splitting ?',
                        'choices' => [
                            'Une méthode pour supprimer le JavaScript',
                            'Une technique qui divise le code en plusieurs morceaux chargés selon les besoins',
                            'Une méthode de chiffrement',
                            'Une technique SQL'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le code splitting permet de ne charger qu’une partie du code JavaScript lorsque cela est nécessaire.'
                    ],
                    [
                        'question' => 'Quel outil du navigateur permet notamment d’analyser les performances d’une page ?',
                        'choices' => [
                            'SQL Console',
                            'DNS Manager',
                            'Performance DevTools',
                            'FTP Client'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les Developer Tools proposent des outils permettant d’analyser le rendu, le réseau et les performances.'
                    ],
                    [
                        'question' => 'Pourquoi réduire le nombre de requêtes réseau peut-il améliorer les performances ?',
                        'choices' => [
                            'Cela augmente toujours la taille des fichiers',
                            'Cela désactive HTTPS',
                            'Cela supprime le DOM',
                            'Cela peut réduire la latence et le travail réseau'
                        ],
                        'correct' => 3,
                        'explanation' => 'Réduire les requêtes inutiles peut diminuer la latence et les coûts liés aux échanges réseau.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet à un navigateur de compresser certains contenus transmis par le serveur ?',
                        'choices' => [
                            'HTTP compression',
                            'HTML parsing',
                            'DOM caching',
                            'CSS rendering'
                        ],
                        'correct' => 0,
                        'explanation' => 'La compression HTTP, par exemple avec Brotli ou gzip, réduit la taille des données transférées.'
                    ],
                    [
                        'question' => 'Pourquoi les grandes images peuvent-elles fortement affecter les performances ?',
                        'choices' => [
                            'Elles désactivent automatiquement CSS',
                            'Elles augmentent le poids des ressources à télécharger et traiter',
                            'Elles suppriment HTTP',
                            'Elles empêchent JavaScript de fonctionner'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des images volumineuses augmentent le temps de téléchargement et peuvent également augmenter le travail de décodage et de rendu.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — ARCHITECTURE WEB
            // ============================================================
            [
                'title' => 'Architecture des applications Web',
                'description' => 'Concepts avancés liés à l’architecture des applications Web modernes.',
                'questions' => [
                    [
                        'question' => 'Quel principe consiste à séparer une application en plusieurs responsabilités distinctes ?',
                        'choices' => [
                            'Separation of Concerns',
                            'Single Execution',
                            'Global State',
                            'Direct Coupling'
                        ],
                        'correct' => 0,
                        'explanation' => 'Separation of Concerns consiste à séparer les différentes responsabilités d’un système.'
                    ],
                    [
                        'question' => 'Quel type d’architecture sépare généralement l’application en client, serveur et couche de données ?',
                        'choices' => [
                            'Single-layer',
                            'Three-tier architecture',
                            'Flat architecture',
                            'Zero-tier'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une three-tier architecture sépare généralement présentation, logique applicative et données.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un reverse proxy ?',
                        'choices' => [
                            'Remplacer le navigateur',
                            'Créer du HTML',
                            'Recevoir les requêtes et les transmettre aux serveurs appropriés',
                            'Compiler JavaScript'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un reverse proxy reçoit les requêtes côté serveur et peut les transmettre vers différents services ou applications.'
                    ],
                    [
                        'question' => 'Quel composant est souvent utilisé pour répartir les requêtes entre plusieurs serveurs ?',
                        'choices' => [
                            'Database driver',
                            'Compiler',
                            'DOM',
                            'Load balancer'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un load balancer distribue les requêtes entre plusieurs instances afin d’améliorer notamment disponibilité et capacité.'
                    ],
                    [
                        'question' => 'Quel avantage principal offre une architecture stateless ?',
                        'choices' => [
                            'Elle facilite notamment la mise à l’échelle horizontale',
                            'Elle supprime les API',
                            'Elle empêche le caching',
                            'Elle nécessite toujours un seul serveur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une architecture stateless facilite notamment la distribution des requêtes entre plusieurs instances.'
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un microservice ?',
                        'choices' => [
                            'Un petit fichier JavaScript',
                            'Un service relativement indépendant centré sur une responsabilité',
                            'Un composant CSS',
                            'Une base de données'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un microservice est généralement un service indépendant centré sur une capacité métier ou technique.'
                    ],
                    [
                        'question' => 'Quel est un risque fréquent d’une architecture microservices mal conçue ?',
                        'choices' => [
                            'Moins de réseau',
                            'Moins de dépendances',
                            'Une complexité distribuée importante',
                            'La suppression des API'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les microservices introduisent notamment des communications réseau, de la supervision et une complexité distribuée.'
                    ],
                    [
                        'question' => 'Quel principe SOLID recommande qu’une classe ait une seule responsabilité principale ?',
                        'choices' => [
                            'Open/Closed Principle',
                            'Dependency Inversion',
                            'Interface Segregation',
                            'Single Responsibility Principle'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le Single Responsibility Principle recommande qu’une classe ait une responsabilité principale bien définie.'
                    ],
                    [
                        'question' => 'Quel pattern permet notamment de séparer la création d’un Object de son utilisation ?',
                        'choices' => [
                            'Factory',
                            'Observer uniquement',
                            'Singleton uniquement',
                            'Adapter uniquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Factory Pattern centralise ou abstrait généralement la création des Objects.'
                    ],
                    [
                        'question' => 'Quel pattern permet à plusieurs objets d’être informés lorsqu’un état change ?',
                        'choices' => [
                            'Factory',
                            'Observer',
                            'Builder uniquement',
                            'Proxy uniquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le Observer Pattern permet à des objets abonnés d’être notifiés lorsqu’un sujet change.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — API AVANCÉES
            // ============================================================
            [
                'title' => 'API avancées',
                'description' => 'Conception, sécurité et performance des API modernes.',
                'questions' => [
                    [
                        'question' => 'Quel principe REST indique généralement qu’une requête doit contenir les informations nécessaires à son traitement ?',
                        'choices' => [
                            'Statelessness',
                            'Caching only',
                            'Server Memory',
                            'Persistent Request'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe stateless signifie que le serveur ne doit pas dépendre d’un état de session conservé entre les requêtes.'
                    ],
                    [
                        'question' => 'Pourquoi versionner une API ?',
                        'choices' => [
                            'Pour supprimer les anciennes données',
                            'Pour permettre l’évolution de l’API sans casser immédiatement les clients existants',
                            'Pour remplacer HTTPS',
                            'Pour éviter les tests'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le versioning permet de faire évoluer une API tout en maintenant la compatibilité avec certaines anciennes versions.'
                    ],
                    [
                        'question' => 'Quel mécanisme limite le nombre de requêtes qu’un client peut effectuer pendant une période ?',
                        'choices' => [
                            'Caching',
                            'Pagination',
                            'Rate limiting',
                            'Serialization'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le rate limiting limite le nombre de requêtes autorisées pendant une période donnée.'
                    ],
                    [
                        'question' => 'Pourquoi utiliser la pagination dans une API qui retourne beaucoup de données ?',
                        'choices' => [
                            'Pour supprimer les données',
                            'Pour empêcher JSON',
                            'Pour désactiver le backend',
                            'Pour éviter de transférer toutes les données en une seule réponse'
                        ],
                        'correct' => 3,
                        'explanation' => 'La pagination permet de diviser un grand ensemble de résultats en plusieurs pages.'
                    ],
                    [
                        'question' => 'Quel header indique généralement au serveur les formats que le client accepte dans la réponse ?',
                        'choices' => ['Accept', 'Content-Type', 'Response-Type', 'Allowed-Format'],
                        'correct' => 0,
                        'explanation' => 'Le header Accept indique les formats de représentation que le client peut accepter.'
                    ],
                    [
                        'question' => 'Qu’est-ce que l’idempotence d’une opération HTTP ?',
                        'choices' => [
                            'Elle signifie qu’elle est toujours rapide',
                            'La répéter produit le même effet attendu sur l’état de la ressource',
                            'Elle nécessite toujours JSON',
                            'Elle ne peut jamais échouer'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une opération idempotente peut être répétée sans produire un effet supplémentaire différent sur l’état attendu de la ressource.'
                    ],
                    [
                        'question' => 'Quelle approche est préférable pour éviter d’exposer des informations sensibles dans une réponse API ?',
                        'choices' => [
                            'Retourner toute la base de données',
                            'Afficher les mots de passe hashés',
                            'Limiter et contrôler les données retournées',
                            'Ajouter les secrets dans les headers publics'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une API doit retourner uniquement les données nécessaires et éviter toute exposition inutile d’informations sensibles.'
                    ],
                    [
                        'question' => 'Quel mécanisme peut être utilisé pour authentifier une API moderne ?',
                        'choices' => [
                            'CSS Token',
                            'HTML Session Tag',
                            'Image Token',
                            'Bearer token'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un Bearer token peut être transmis dans le header Authorization pour authentifier une requête.'
                    ],
                    [
                        'question' => 'Pourquoi documenter une API est-il important ?',
                        'choices' => [
                            'Pour permettre aux développeurs de comprendre et utiliser correctement ses endpoints',
                            'Pour empêcher les requêtes',
                            'Pour remplacer les tests',
                            'Pour supprimer les erreurs réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une bonne documentation décrit notamment les endpoints, paramètres, réponses et règles d’utilisation.'
                    ],
                    [
                        'question' => 'Quel format est couramment utilisé pour documenter des API HTTP ?',
                        'choices' => ['Swagger/OpenAPI', 'CSS Schema', 'HTML API File', 'SQL Docs Only'],
                        'correct' => 0,
                        'explanation' => 'OpenAPI est un standard largement utilisé pour décrire et documenter les API HTTP.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — SÉCURITÉ AVANCÉE
            // ============================================================
            [
                'title' => 'Sécurité Web avancée',
                'description' => 'Approfondissez les principales menaces et protections des applications Web.',
                'questions' => [
                    [
                        'question' => 'Quelle attaque consiste à injecter des commandes SQL via des entrées utilisateur mal protégées ?',
                        'choices' => ['SQL Injection', 'XSS', 'CSRF', 'Clickjacking'],
                        'correct' => 0,
                        'explanation' => 'SQL Injection consiste à manipuler une requête SQL grâce à des données utilisateur insuffisamment protégées.'
                    ],
                    [
                        'question' => 'Quelle technique est recommandée pour réduire les risques de SQL Injection ?',
                        'choices' => [
                            'Concaténer toutes les entrées utilisateur',
                            'Utiliser des requêtes paramétrées',
                            'Désactiver HTTPS',
                            'Mettre les requêtes dans le HTML'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les requêtes paramétrées séparent les données utilisateur de la structure SQL.'
                    ],
                    [
                        'question' => 'Quel mécanisme de sécurité permet de limiter les sources de scripts autorisées par un navigateur ?',
                        'choices' => ['CORS', 'HSTS', 'Content Security Policy', 'DNSSEC'],
                        'correct' => 2,
                        'explanation' => 'Content Security Policy permet notamment de contrôler les sources de contenu autorisées.'
                    ],
                    [
                        'question' => 'Que protège principalement le header HSTS ?',
                        'choices' => [
                            'Les bases de données',
                            'Les mots de passe stockés',
                            'Les images',
                            'L’utilisation forcée de HTTPS pour un domaine'
                        ],
                        'correct' => 3,
                        'explanation' => 'HSTS demande au navigateur d’utiliser HTTPS pour les connexions futures au domaine concerné.'
                    ],
                    [
                        'question' => 'Quel risque existe si une application fait confiance aveuglément à des données provenant du client ?',
                        'choices' => [
                            'L’utilisateur peut manipuler ces données',
                            'Le navigateur devient serveur',
                            'CSS est automatiquement supprimé',
                            'DNS est désactivé'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les données du client peuvent être modifiées avant leur arrivée au serveur et doivent donc être considérées comme non fiables.'
                    ],
                    [
                        'question' => 'Quel principe recommande de vérifier l’autorisation lors de l’accès à une ressource protégée ?',
                        'choices' => [
                            'Trust Client',
                            'Server-side authorization',
                            'Public Access',
                            'Frontend-only security'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’autorisation doit être vérifiée côté serveur car les contrôles Frontend peuvent être contournés.'
                    ],
                    [
                        'question' => 'Pourquoi le stockage d’un token sensible dans localStorage peut-il présenter un risque ?',
                        'choices' => [
                            'Il empêche toujours HTTPS',
                            'Il supprime les cookies',
                            'Un script XSS pourrait potentiellement y accéder',
                            'Il désactive JavaScript'
                        ],
                        'correct' => 2,
                        'explanation' => 'En cas de XSS, un script malveillant peut potentiellement lire les données accessibles depuis localStorage.'
                    ],
                    [
                        'question' => 'Quel attribut cookie empêche JavaScript côté client d’accéder directement au cookie ?',
                        'choices' => ['Secure', 'SameSite', 'HttpOnly', 'Protected'],
                        'correct' => 2,
                        'explanation' => 'HttpOnly empêche normalement l’accès au cookie via JavaScript côté navigateur.'
                    ],
                    [
                        'question' => 'Que permet principalement l’attribut Secure d’un cookie ?',
                        'choices' => [
                            'Le cookie est transmis uniquement via HTTPS',
                            'Le cookie devient public',
                            'Le cookie est supprimé après chaque requête',
                            'Le cookie est stocké dans le HTML'
                        ],
                        'correct' => 0,
                        'explanation' => 'Secure indique que le cookie doit être transmis uniquement sur une connexion sécurisée HTTPS.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter d’afficher des stack traces détaillées en production ?',
                        'choices' => [
                            'Elles ralentissent toujours CSS',
                            'Elles peuvent révéler des informations internes utiles à un attaquant',
                            'Elles empêchent les API',
                            'Elles désactivent les logs'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les stack traces peuvent révéler des chemins, composants et informations internes qui ne devraient pas être exposés.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — SSR / CSR / RENDERING
            // ============================================================
            [
                'title' => 'SSR, CSR et rendu Web',
                'description' => 'Comparez les différentes stratégies de rendu utilisées dans les applications Web modernes.',
                'questions' => [
                    [
                        'question' => 'Que signifie CSR ?',
                        'choices' => [
                            'Client-Side Rendering',
                            'Client Server Routing',
                            'Centralized Server Rendering',
                            'CSS Rendering System'
                        ],
                        'correct' => 0,
                        'explanation' => 'CSR signifie Client-Side Rendering.'
                    ],
                    [
                        'question' => 'Que signifie SSR ?',
                        'choices' => [
                            'Static Server Routing',
                            'Server-Side Rendering',
                            'Secure Server Request',
                            'Server Script Rendering'
                        ],
                        'correct' => 1,
                        'explanation' => 'SSR signifie Server-Side Rendering.'
                    ],
                    [
                        'question' => 'Quel avantage est souvent associé au SSR ?',
                        'choices' => [
                            'Il supprime JavaScript',
                            'Il empêche les API',
                            'Il peut améliorer le rendu initial et certaines stratégies SEO',
                            'Il nécessite toujours une seule page'
                        ],
                        'correct' => 2,
                        'explanation' => 'SSR peut fournir du HTML initial depuis le serveur, ce qui peut améliorer notamment le rendu initial et le SEO selon l’application.'
                    ],
                    [
                        'question' => 'Quel est un avantage courant du CSR ?',
                        'choices' => [
                            'Aucun JavaScript nécessaire',
                            'Le serveur génère toujours toutes les pages',
                            'Il empêche les interactions dynamiques',
                            'Une navigation riche côté client après le chargement initial'
                        ],
                        'correct' => 3,
                        'explanation' => 'CSR permet notamment de construire des interfaces interactives dont une grande partie du rendu est effectuée côté navigateur.'
                    ],
                    [
                        'question' => 'Qu’est-ce que l’hydration dans une application SSR ?',
                        'choices' => [
                            'Le processus qui rend le HTML serveur interactif côté client',
                            'La compression des images',
                            'La suppression du JavaScript',
                            'La création d’une base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’hydration permet au JavaScript côté client de reprendre le contrôle du HTML rendu par le serveur.'
                    ],
                    [
                        'question' => 'Pourquoi le SEO peut être plus simple avec du contenu HTML rendu côté serveur ?',
                        'choices' => [
                            'Les moteurs ne lisent jamais HTML',
                            'Le contenu peut être disponible directement dans le HTML initial',
                            'Le serveur désactive JavaScript',
                            'Les images deviennent automatiquement indexables'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le contenu rendu côté serveur peut être présent directement dans le HTML initial, ce qui facilite son traitement par certains moteurs.'
                    ],
                    [
                        'question' => 'Qu’est-ce que le pre-rendering ?',
                        'choices' => [
                            'La suppression du HTML',
                            'Le rendu uniquement après un clic',
                            'La génération préalable de pages HTML',
                            'Le chiffrement du DOM'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le pre-rendering génère à l’avance des pages HTML qui peuvent ensuite être servies aux utilisateurs.'
                    ],
                    [
                        'question' => 'Quel problème peut survenir si le serveur et le client génèrent des HTML différents lors de l’hydration ?',
                        'choices' => [
                            'Une erreur ou un mismatch d’hydration',
                            'Une suppression automatique de CSS',
                            'Une panne DNS',
                            'Une modification de la base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Si le HTML attendu côté client ne correspond pas au HTML serveur, un hydration mismatch peut se produire.'
                    ],
                    [
                        'question' => 'Quel choix peut être pertinent pour une application nécessitant des pages publiques fortement indexables ?',
                        'choices' => [
                            'Uniquement CSR sans HTML initial',
                            'SSR ou pre-rendering',
                            'Uniquement WebSocket',
                            'Uniquement CSS'
                        ],
                        'correct' => 1,
                        'explanation' => 'SSR ou pre-rendering peut être pertinent lorsque le contenu doit être disponible rapidement et facilement indexable.'
                    ],
                    [
                        'question' => 'Quel concept consiste à envoyer uniquement le JavaScript nécessaire à certaines pages ou fonctionnalités ?',
                        'choices' => [
                            'Global loading',
                            'Code splitting',
                            'Full bundling',
                            'Static blocking'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le code splitting permet de diviser le bundle afin de charger les morceaux nécessaires au moment approprié.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — TESTING ET QUALITÉ
            // ============================================================
            [
                'title' => 'Testing et qualité Web',
                'description' => 'Tests unitaires, intégration, qualité du code et stratégies de validation.',
                'questions' => [
                    [
                        'question' => 'Quel type de test vérifie généralement une petite unité de code isolée ?',
                        'choices' => ['Unit test', 'Integration test', 'End-to-end test', 'Load test'],
                        'correct' => 0,
                        'explanation' => 'Un unit test vérifie généralement une petite unité de comportement de manière isolée.'
                    ],
                    [
                        'question' => 'Quel test vérifie l’interaction entre plusieurs composants ou services ?',
                        'choices' => ['Unit test', 'Integration test', 'Snapshot only', 'Syntax test'],
                        'correct' => 1,
                        'explanation' => 'Un integration test vérifie que plusieurs parties du système fonctionnent correctement ensemble.'
                    ],
                    [
                        'question' => 'Quel test simule généralement le parcours complet d’un utilisateur ?',
                        'choices' => ['Unit test', 'Static test', 'End-to-end test', 'Lint test'],
                        'correct' => 2,
                        'explanation' => 'Un end-to-end test vérifie généralement un scénario complet à travers l’application.'
                    ],
                    [
                        'question' => 'Quel outil permet de détecter certaines erreurs de style ou problèmes potentiels dans le code ?',
                        'choices' => ['Browser', 'Database', 'HTTP', 'Linter'],
                        'correct' => 3,
                        'explanation' => 'Un linter analyse le code et signale certaines erreurs, incohérences ou violations de règles.'
                    ],
                    [
                        'question' => 'Pourquoi automatiser les tests dans un projet Web ?',
                        'choices' => [
                            'Pour détecter plus rapidement les régressions',
                            'Pour supprimer le besoin de code review',
                            'Pour éviter toute documentation',
                            'Pour empêcher les deployments'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests automatisés permettent de détecter rapidement certaines régressions lors des modifications du code.'
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une régression ?',
                        'choices' => [
                            'Une nouvelle fonctionnalité',
                            'Un problème introduit après une modification qui affecte un comportement auparavant fonctionnel',
                            'Une amélioration de performance',
                            'Une migration SQL uniquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une régression survient lorsqu’une modification provoque un dysfonctionnement d’une fonctionnalité qui fonctionnait auparavant.'
                    ],
                    [
                        'question' => 'Quel principe recommande de tester régulièrement le comportement attendu du logiciel ?',
                        'choices' => ['Continuous testing', 'Manual-only testing', 'No testing', 'Random testing'],
                        'correct' => 0,
                        'explanation' => 'Le continuous testing intègre l’exécution des tests dans le cycle de développement et de livraison.'
                    ],
                    [
                        'question' => 'Quel outil est souvent utilisé pour exécuter automatiquement des tests lors d’un pipeline CI ?',
                        'choices' => ['CI runner', 'HTML parser', 'Browser cache', 'DNS server'],
                        'correct' => 0,
                        'explanation' => 'Un CI runner exécute automatiquement des tâches du pipeline, notamment les tests.'
                    ],
                    [
                        'question' => 'Pourquoi les tests doivent-ils être autant que possible déterministes ?',
                        'choices' => [
                            'Pour produire des résultats prévisibles et fiables',
                            'Pour augmenter volontairement les erreurs',
                            'Pour éviter les assertions',
                            'Pour supprimer les données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Des tests déterministes produisent des résultats cohérents lorsque les mêmes conditions sont réunies.'
                    ],
                    [
                        'question' => 'Quel outil peut être utilisé pour vérifier automatiquement la couverture des tests ?',
                        'choices' => ['Coverage tool', 'CSS engine', 'DNS analyzer', 'HTTP parser'],
                        'correct' => 0,
                        'explanation' => 'Les outils de coverage mesurent notamment quelles parties du code sont exécutées par les tests.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — WEBSOCKETS / REAL-TIME
            // ============================================================
            [
                'title' => 'WebSockets et applications temps réel',
                'description' => 'Découvrez les communications temps réel et les architectures basées sur WebSockets.',
                'questions' => [
                    [
                        'question' => 'Quel protocole permet généralement une communication bidirectionnelle persistante entre client et serveur ?',
                        'choices' => ['WebSocket', 'FTP', 'SMTP', 'DNS'],
                        'correct' => 0,
                        'explanation' => 'WebSocket permet une communication bidirectionnelle persistante entre client et serveur.'
                    ],
                    [
                        'question' => 'Quel est un avantage majeur de WebSocket par rapport à des requêtes HTTP répétées ?',
                        'choices' => [
                            'Il supprime Internet',
                            'Il permet une communication persistante et bidirectionnelle',
                            'Il remplace la base de données',
                            'Il ne nécessite aucun serveur'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une connexion WebSocket persistante permet notamment au serveur d’envoyer des données au client sans attendre une nouvelle requête HTTP.'
                    ],
                    [
                        'question' => 'Quelle application peut particulièrement bénéficier de WebSocket ?',
                        'choices' => ['Page statique simple', 'Document PDF', 'Chat temps réel', 'Page HTML sans interaction'],
                        'correct' => 2,
                        'explanation' => 'Un chat temps réel bénéficie de communications bidirectionnelles rapides entre clients et serveur.'
                    ],
                    [
                        'question' => 'Quel mécanisme HTTP est généralement utilisé au début pour établir une connexion WebSocket ?',
                        'choices' => ['DNS lookup', 'TCP reset', 'SMTP handshake', 'HTTP Upgrade'],
                        'correct' => 3,
                        'explanation' => 'La connexion WebSocket commence généralement par une requête HTTP Upgrade afin de passer vers le protocole WebSocket.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il gérer la reconnexion dans une application WebSocket ?',
                        'choices' => [
                            'Une connexion réseau peut être interrompue',
                            'WebSocket ne peut jamais échouer',
                            'Pour supprimer les messages',
                            'Pour remplacer HTTPS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les connexions réseau peuvent être interrompues, il est donc utile de prévoir une stratégie de reconnexion.'
                    ],
                    [
                        'question' => 'Quel problème peut survenir si un serveur maintient énormément de connexions WebSocket ?',
                        'choices' => [
                            'Le CSS disparaît',
                            'Une consommation importante de ressources',
                            'Le HTML devient invalide',
                            'Le DNS devient inutile'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un grand nombre de connexions persistantes peut consommer beaucoup de mémoire, de connexions réseau et d’autres ressources.'
                    ],
                    [
                        'question' => 'Quel concept consiste à envoyer un message à plusieurs clients abonnés à un même canal ?',
                        'choices' => ['Broadcasting', 'Parsing', 'Compilation', 'Minification'],
                        'correct' => 0,
                        'explanation' => 'Broadcasting consiste à diffuser un événement ou message à plusieurs clients ou abonnés.'
                    ],
                    [
                        'question' => 'Pourquoi un système de présence peut-il utiliser WebSocket ?',
                        'choices' => [
                            'Pour connaître rapidement les changements de statut des utilisateurs',
                            'Pour remplacer HTML',
                            'Pour stocker les mots de passe',
                            'Pour compiler CSS'
                        ],
                        'correct' => 0,
                        'explanation' => 'WebSocket permet de transmettre rapidement les changements de présence sans devoir interroger constamment le serveur.'
                    ],
                    [
                        'question' => 'Quel problème de sécurité doit être pris en compte avec WebSocket ?',
                        'choices' => [
                            'La validation et l’authentification des messages',
                            'La couleur des boutons',
                            'Le format CSS',
                            'La résolution de l’écran'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les connexions WebSocket doivent appliquer des contrôles d’authentification, d’autorisation et de validation des messages.'
                    ],
                    [
                        'question' => 'Quelle stratégie peut aider à éviter de surcharger le serveur lors de nombreuses mises à jour temps réel ?',
                        'choices' => [
                            'Envoyer absolument tous les événements',
                            'Batching ou limitation de fréquence des événements',
                            'Supprimer l’authentification',
                            'Désactiver les connexions'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le batching et la limitation de fréquence peuvent réduire le nombre d’événements transmis et la charge du système.'
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

                $question->choices()->delete();

             // Pair each choice with whether it's correct, then shuffle
                $choicePairs = [];
                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }
                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}