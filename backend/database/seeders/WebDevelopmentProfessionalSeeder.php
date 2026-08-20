<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WebDevelopmentProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'web-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — ARCHITECTURE WEB PROFESSIONNELLE
            // ============================================================
            [
                'title' => 'Architecture Web professionnelle',
                'description' => 'Architecture avancée, scalabilité, découplage et conception de systèmes Web professionnels.',
                'questions' => [

                    [
                        'question' => 'Quel principe consiste à séparer clairement les responsabilités entre les différentes couches d’une application ?',
                        'choices' => [
                            'Separation of Concerns',
                            'Global State',
                            'Tight Coupling',
                            'Single Deployment'
                        ],
                        'correct' => 0,
                        'explanation' => 'La Separation of Concerns consiste à séparer les responsabilités afin de rendre le système plus maintenable et évolutif.'
                    ],

                    [
                        'question' => 'Quel est l’un des principaux avantages d’une architecture faiblement couplée ?',
                        'choices' => [
                            'Elle supprime tous les tests',
                            'Elle facilite les modifications indépendantes des composants',
                            'Elle nécessite toujours un seul serveur',
                            'Elle empêche les API'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le faible couplage permet de modifier ou remplacer certaines parties du système avec moins d’impact sur les autres composants.'
                    ],

                    [
                        'question' => 'Quel composant est généralement placé devant plusieurs serveurs applicatifs pour distribuer les requêtes ?',
                        'choices' => [
                            'Database',
                            'Compiler',
                            'Load balancer',
                            'Browser cache'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un load balancer distribue les requêtes entre plusieurs instances d’une application.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet à un système de continuer à fonctionner malgré la défaillance d’une instance ?',
                        'choices' => [
                            'Minification',
                            'Bundling',
                            'Hard coding',
                            'Redundancy'
                        ],
                        'correct' => 3,
                        'explanation' => 'La redondance permet d’avoir plusieurs instances capables de prendre le relais lorsqu’une instance tombe en panne.'
                    ],

                    [
                        'question' => 'Pourquoi une architecture stateless facilite-t-elle généralement le scaling horizontal ?',
                        'choices' => [
                            'Les requêtes peuvent être traitées par différentes instances sans dépendre d’un état local',
                            'Elle empêche les utilisateurs de se connecter',
                            'Elle supprime les sessions',
                            'Elle nécessite uniquement un serveur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans une architecture stateless, les instances n’ont pas besoin de conserver localement l’état d’un utilisateur entre les requêtes.'
                    ],

                    [
                        'question' => 'Quel pattern est particulièrement adapté lorsqu’un système doit publier des événements consommés par plusieurs composants ?',
                        'choices' => [
                            'Singleton',
                            'Observer / Event-driven pattern',
                            'Factory',
                            'Builder'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une architecture événementielle permet à plusieurs consommateurs de réagir à un événement sans être fortement couplés à son producteur.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une application monolithique devient extrêmement grande ?',
                        'choices' => [
                            'Elle devient automatiquement plus sécurisée',
                            'Elle nécessite moins de tests',
                            'Les changements peuvent devenir difficiles à isoler et déployer',
                            'Elle ne peut plus utiliser HTTP'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un monolithe très volumineux peut devenir difficile à maintenir, tester et déployer lorsque ses composants sont fortement interdépendants.'
                    ],

                    [
                        'question' => 'Quel principe recommande de dépendre d’abstractions plutôt que d’implémentations concrètes ?',
                        'choices' => [
                            'Single Responsibility',
                            'Open/Closed',
                            'Interface Segregation',
                            'Dependency Inversion'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le Dependency Inversion Principle recommande de faire dépendre les composants d’abstractions plutôt que de détails d’implémentation.'
                    ],

                    [
                        'question' => 'Quel composant peut servir de point d’entrée central vers plusieurs microservices ?',
                        'choices' => [
                            'API Gateway',
                            'CSS Compiler',
                            'Database Index',
                            'Browser DOM'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une API Gateway peut centraliser notamment le routage, l’authentification, le rate limiting et certaines politiques d’accès.'
                    ],

                    [
                        'question' => 'Quel est un risque important d’une architecture microservices très distribuée ?',
                        'choices' => [
                            'Absence totale de réseau',
                            'Complexité opérationnelle et communication inter-services',
                            'Impossible d’utiliser JSON',
                            'Impossible de faire du caching'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les microservices introduisent des communications réseau, de la supervision, des problèmes de cohérence et une complexité opérationnelle supplémentaire.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — PERFORMANCE ET SCALABILITÉ
            // ============================================================
            [
                'title' => 'Performance et scalabilité Web',
                'description' => 'Optimisation avancée, caching, CDN, scaling et performances côté client et serveur.',
                'questions' => [

                    [
                        'question' => 'Quel mécanisme permet de servir une ressource depuis un serveur géographiquement proche de l’utilisateur ?',
                        'choices' => [
                            'CDN',
                            'ORM',
                            'SQL View',
                            'DOM'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un CDN distribue les ressources sur plusieurs points de présence afin de réduire notamment la latence.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal du caching côté serveur ?',
                        'choices' => [
                            'Augmenter le nombre de calculs',
                            'Éviter de recalculer ou récupérer inutilement certaines données',
                            'Supprimer la base de données',
                            'Désactiver HTTP'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le caching permet de réutiliser des résultats ou ressources afin de réduire le coût des opérations répétitives.'
                    ],

                    [
                        'question' => 'Quel problème peut provoquer un cache mal invalidé ?',
                        'choices' => [
                            'Une meilleure sécurité',
                            'Une réduction du stockage',
                            'La diffusion de données obsolètes',
                            'Une accélération garantie'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un cache incorrectement invalidé peut continuer à servir une ancienne version des données.'
                    ],

                    [
                        'question' => 'Quel type de scaling consiste à ajouter davantage d’instances d’un service ?',
                        'choices' => [
                            'Vertical scaling',
                            'Database scaling',
                            'Memory scaling',
                            'Horizontal scaling'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le horizontal scaling consiste à ajouter plusieurs instances plutôt qu’à augmenter uniquement les ressources d’une machine.'
                    ],

                    [
                        'question' => 'Quel mécanisme peut protéger un service contre un volume excessif de requêtes ?',
                        'choices' => [
                            'Rate limiting',
                            'HTML parsing',
                            'Minification',
                            'Tree shaking'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le rate limiting limite le nombre de requêtes autorisées selon une politique définie.'
                    ],

                    [
                        'question' => 'Quel problème peut provoquer une requête SQL non optimisée sur une grande table ?',
                        'choices' => [
                            'Réduction automatique des données',
                            'Temps de réponse élevé',
                            'Compression HTTP',
                            'Meilleure scalabilité'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une requête inefficace peut parcourir trop de données et augmenter fortement le temps de réponse.'
                    ],

                    [
                        'question' => 'Quel mécanisme de base de données peut accélérer certaines recherches ?',
                        'choices' => [
                            'HTML',
                            'JSON',
                            'Index',
                            'CSS'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les indexes permettent d’accélérer certaines opérations de recherche au prix notamment d’espace supplémentaire et de coûts lors des écritures.'
                    ],

                    [
                        'question' => 'Quel problème peut être causé par un nombre excessif de requêtes vers une API ?',
                        'choices' => [
                            'Toujours une meilleure UX',
                            'Suppression du cache',
                            'Réduction du trafic',
                            'Surcharge du serveur'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un volume excessif de requêtes peut augmenter la charge CPU, mémoire, réseau ou base de données.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet de charger uniquement les modules JavaScript nécessaires à une route ?',
                        'choices' => [
                            'Lazy loading',
                            'Full bundling',
                            'Static rendering only',
                            'Hard coding'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le lazy loading permet de charger certaines parties de l’application uniquement lorsqu’elles sont nécessaires.'
                    ],

                    [
                        'question' => 'Quel concept consiste à éliminer du bundle le code JavaScript qui n’est pas utilisé ?',
                        'choices' => [
                            'Server rendering',
                            'Tree shaking',
                            'Database indexing',
                            'Request pooling'
                        ],
                        'correct' => 1,
                        'explanation' => 'Tree shaking permet aux bundlers modernes d’éliminer certaines parties de code inutilisées.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — SÉCURITÉ WEB PROFESSIONNELLE
            // ============================================================
            [
                'title' => 'Sécurité Web professionnelle',
                'description' => 'Sécurité applicative, authentification, autorisation et protection des API.',
                'questions' => [

                    [
                        'question' => 'Quelle pratique permet de réduire fortement les risques de SQL Injection ?',
                        'choices' => [
                            'Prepared statements',
                            'Concaténation SQL',
                            'Désactivation HTTPS',
                            'Affichage des requêtes'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les prepared statements séparent les données utilisateur de la structure de la requête SQL.'
                    ],

                    [
                        'question' => 'Quelle attaque exploite l’exécution de contenu script injecté dans une page Web ?',
                        'choices' => [
                            'CSRF',
                            'XSS',
                            'DNS poisoning',
                            'DDoS'
                        ],
                        'correct' => 1,
                        'explanation' => 'Cross-Site Scripting permet d’injecter du contenu script dans un contexte où il sera exécuté par le navigateur.'
                    ],

                    [
                        'question' => 'Quelle protection permet notamment de contrôler les sources de scripts autorisées ?',
                        'choices' => [
                            'CORS',
                            'HSTS',
                            'Content Security Policy',
                            'DNS'
                        ],
                        'correct' => 2,
                        'explanation' => 'Content Security Policy permet de définir des politiques concernant les sources de contenu autorisées.'
                    ],

                    [
                        'question' => 'Quel principe de sécurité consiste à donner uniquement les permissions nécessaires ?',
                        'choices' => [
                            'Zero Trust uniquement',
                            'Full Access',
                            'Public Access',
                            'Principle of Least Privilege'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le Principle of Least Privilege limite les permissions à ce qui est nécessaire pour accomplir une tâche.'
                    ],

                    [
                        'question' => 'Pourquoi les contrôles d’autorisation doivent-ils être effectués côté serveur ?',
                        'choices' => [
                            'Le client peut être manipulé par l’utilisateur',
                            'Le Frontend est toujours sécurisé',
                            'Le navigateur contrôle la base de données',
                            'JavaScript ne peut jamais être modifié'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le code et les requêtes côté client peuvent être modifiés ou contournés. Le serveur doit donc appliquer les règles d’autorisation.'
                    ],

                    [
                        'question' => 'Quel mécanisme est couramment utilisé pour représenter l’identité dans une API tokenisée ?',
                        'choices' => [
                            'CSS Token',
                            'Bearer token',
                            'HTML Token',
                            'Image Token'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les Bearer tokens sont couramment transmis via le header Authorization.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal de l’authentification ?',
                        'choices' => [
                            'Déterminer le CSS',
                            'Identifier l’utilisateur ou le système',
                            'Optimiser SQL',
                            'Compresser HTTP'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’authentification vérifie l’identité d’un utilisateur ou d’un système.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal de l’autorisation ?',
                        'choices' => [
                            'Déterminer ce que l’utilisateur authentifié peut faire',
                            'Créer son mot de passe',
                            'Compresser ses données',
                            'Créer une connexion TCP'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’autorisation détermine les ressources et actions auxquelles une identité authentifiée a accès.'
                    ],

                    [
                        'question' => 'Quel attribut de cookie empêche normalement son accès via JavaScript ?',
                        'choices' => [
                            'Secure',
                            'HttpOnly',
                            'Public',
                            'Readable'
                        ],
                        'correct' => 1,
                        'explanation' => 'HttpOnly empêche normalement l’accès au cookie depuis JavaScript côté navigateur.'
                    ],

                    [
                        'question' => 'Quel principe est particulièrement important dans une architecture Zero Trust ?',
                        'choices' => [
                            'Trust everything',
                            'Never verify',
                            'Verify explicitly',
                            'Allow by default'
                        ],
                        'correct' => 2,
                        'explanation' => 'Zero Trust repose notamment sur la vérification explicite et continue plutôt que sur une confiance implicite.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — API ET DISTRIBUTED SYSTEMS
            // ============================================================
            [
                'title' => 'API et systèmes distribués',
                'description' => 'API professionnelles, événements, cohérence et communication entre services.',
                'questions' => [

                    [
                        'question' => 'Quel principe REST signifie que le serveur ne doit pas dépendre d’un état de session conservé entre les requêtes ?',
                        'choices' => [
                            'Statelessness',
                            'Caching',
                            'Layered System',
                            'Uniform Interface'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe stateless signifie que chaque requête contient les informations nécessaires à son traitement.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet à un service de publier des événements sans connaître directement tous leurs consommateurs ?',
                        'choices' => [
                            'Tight coupling',
                            'Message broker',
                            'Direct SQL',
                            'DOM'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un message broker permet de découpler producteurs et consommateurs d’événements.'
                    ],

                    [
                        'question' => 'Quel avantage offre une architecture event-driven ?',
                        'choices' => [
                            'Elle interdit le scaling',
                            'Elle supprime le réseau',
                            'Elle permet un certain découplage entre producteurs et consommateurs',
                            'Elle supprime les erreurs'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les producteurs publient des événements sans nécessairement connaître directement les consommateurs.'
                    ],

                    [
                        'question' => 'Quel problème est particulièrement important dans un système distribué ?',
                        'choices' => [
                            'Couleur du CSS',
                            'Syntaxe HTML',
                            'Taille des images',
                            'Gestion des pannes réseau et de la cohérence'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les systèmes distribués doivent gérer notamment les pannes réseau, les délais et les problèmes de cohérence.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une opération idempotente ?',
                        'choices' => [
                            'Une opération répétée produit le même effet final attendu',
                            'Une opération qui ne peut jamais échouer',
                            'Une opération toujours instantanée',
                            'Une opération sans serveur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une opération idempotente peut être répétée sans modifier davantage l’état final attendu.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser un correlation ID dans une architecture distribuée ?',
                        'choices' => [
                            'Pour compresser JSON',
                            'Pour suivre une requête à travers plusieurs services',
                            'Pour remplacer HTTPS',
                            'Pour générer CSS'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un correlation ID permet de suivre une même opération lorsqu’elle traverse plusieurs services.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet de réessayer automatiquement une opération temporairement échouée ?',
                        'choices' => [
                            'Retry',
                            'Rendering',
                            'Minification',
                            'Parsing'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un retry permet de retenter une opération après certains types d’échecs temporaires.'
                    ],

                    [
                        'question' => 'Quel problème peut être causé par des retries sans limite ?',
                        'choices' => [
                            'Réduction automatique de charge',
                            'Amplification de la charge sur un service défaillant',
                            'Meilleure sécurité',
                            'Suppression du trafic'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des retries excessifs peuvent aggraver une panne en ajoutant encore plus de requêtes au service déjà en difficulté.'
                    ],

                    [
                        'question' => 'Quel pattern peut empêcher temporairement les appels vers un service constamment défaillant ?',
                        'choices' => [
                            'Circuit Breaker',
                            'Factory',
                            'Builder',
                            'Observer uniquement'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Circuit Breaker peut ouvrir le circuit après plusieurs échecs afin d’éviter d’appeler continuellement un service défaillant.'
                    ],

                    [
                        'question' => 'Quel objectif poursuit généralement une API versionnée ?',
                        'choices' => [
                            'Empêcher toute évolution',
                            'Permettre l’évolution tout en maintenant certaines anciennes interfaces',
                            'Supprimer les clients',
                            'Désactiver les tests'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le versioning permet de faire évoluer l’API tout en conservant une compatibilité avec certaines anciennes versions.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — CI/CD ET DEVOPS WEB
            // ============================================================
            [
                'title' => 'CI/CD et DevOps Web',
                'description' => 'Automatisation, intégration continue, déploiement et gestion des environnements.',
                'questions' => [

                    [
                        'question' => 'Que signifie CI dans CI/CD ?',
                        'choices' => [
                            'Continuous Integration',
                            'Central Infrastructure',
                            'Client Integration',
                            'Code Inspection'
                        ],
                        'correct' => 0,
                        'explanation' => 'CI signifie Continuous Integration.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal de Continuous Integration ?',
                        'choices' => [
                            'Éviter tout commit',
                            'Intégrer et tester régulièrement les changements',
                            'Supprimer Git',
                            'Remplacer les développeurs'
                        ],
                        'correct' => 1,
                        'explanation' => 'La CI permet d’intégrer fréquemment les changements et d’exécuter automatiquement des vérifications.'
                    ],

                    [
                        'question' => 'Quel est l’objectif du Continuous Deployment ?',
                        'choices' => [
                            'Empêcher les releases',
                            'Modifier manuellement chaque serveur',
                            'Automatiser la mise en production lorsque les conditions sont satisfaites',
                            'Supprimer les tests'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Continuous Deployment automatise le déploiement vers la production après validation du pipeline.'
                    ],

                    [
                        'question' => 'Pourquoi séparer les environnements development, staging et production ?',
                        'choices' => [
                            'Pour augmenter volontairement les bugs',
                            'Pour supprimer les tests',
                            'Pour éviter Git',
                            'Pour isoler les phases de développement, validation et utilisation réelle'
                        ],
                        'correct' => 3,
                        'explanation' => 'La séparation des environnements réduit notamment les risques de modifier directement le système de production.'
                    ],

                    [
                        'question' => 'Pourquoi les secrets ne doivent-ils pas être stockés directement dans le dépôt Git ?',
                        'choices' => [
                            'Ils peuvent être exposés aux personnes ayant accès au dépôt',
                            'Git ne supporte pas les fichiers',
                            'Les secrets ralentissent toujours Git',
                            'Ils empêchent les builds'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les secrets présents dans un dépôt peuvent être exposés ou récupérés par des personnes ayant accès à l’historique ou au projet.'
                    ],

                    [
                        'question' => 'Quel mécanisme est généralement utilisé pour stocker des variables sensibles dans un pipeline CI/CD ?',
                        'choices' => [
                            'HTML comments',
                            'Secret variables / secret manager',
                            'CSS',
                            'Public JSON'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les plateformes CI/CD proposent généralement des variables secrètes ou des intégrations avec des secret managers.'
                    ],

                    [
                        'question' => 'Quel est l’avantage principal des deployments automatisés ?',
                        'choices' => [
                            'Ils éliminent toute nécessité de validation',
                            'Ils rendent les déploiements plus répétables',
                            'Ils suppriment le monitoring',
                            'Ils empêchent les rollbacks'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’automatisation rend les procédures de déploiement plus reproductibles et réduit certaines erreurs humaines.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un rollback ?',
                        'choices' => [
                            'Une suppression de Git',
                            'Un retour vers une version précédente',
                            'Une nouvelle base de données',
                            'Une optimisation CSS'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un rollback permet de revenir à une version précédente lorsqu’une nouvelle version pose problème.'
                    ],

                    [
                        'question' => 'Quel outil est généralement utilisé pour construire des images de conteneurs ?',
                        'choices' => [
                            'Docker',
                            'HTML',
                            'CSS',
                            'DNS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Docker permet notamment de construire et exécuter des conteneurs à partir d’images.'
                    ],

                    [
                        'question' => 'Quel est l’un des avantages des conteneurs ?',
                        'choices' => [
                            'Ils garantissent zéro bug',
                            'Ils facilitent la reproductibilité des environnements',
                            'Ils suppriment le besoin de réseau',
                            'Ils remplacent toutes les bases de données'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les conteneurs permettent d’empaqueter une application avec son environnement d’exécution afin d’obtenir des environnements plus reproductibles.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — OBSERVABILITÉ
            // ============================================================
            [
                'title' => 'Monitoring et observabilité',
                'description' => 'Logs, métriques, traces et diagnostic des applications Web professionnelles.',
                'questions' => [

                    [
                        'question' => 'Quels sont les trois piliers classiques de l’observabilité ?',
                        'choices' => [
                            'Logs, metrics et traces',
                            'HTML, CSS et JS',
                            'SQL, PHP et DNS',
                            'Git, FTP et SMTP'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les logs, métriques et traces sont généralement considérés comme les trois piliers classiques de l’observabilité.'
                    ],

                    [
                        'question' => 'Quelle information est particulièrement adaptée aux logs ?',
                        'choices' => [
                            'Une couleur CSS',
                            'Un événement ou message détaillé concernant l’exécution',
                            'La résolution d’écran uniquement',
                            'Une image'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les logs permettent d’enregistrer des événements détaillés sur le comportement d’une application.'
                    ],

                    [
                        'question' => 'Quelle métrique mesure généralement le temps nécessaire pour traiter une requête ?',
                        'choices' => [
                            'Throughput',
                            'Error rate',
                            'Latency',
                            'Memory label'
                        ],
                        'correct' => 2,
                        'explanation' => 'La latency mesure le temps nécessaire pour obtenir une réponse ou terminer une opération.'
                    ],

                    [
                        'question' => 'Quel indicateur mesure généralement le nombre de requêtes traitées par unité de temps ?',
                        'choices' => [
                            'Latency',
                            'Error rate',
                            'CPU usage',
                            'Throughput'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le throughput représente la quantité de travail traitée par unité de temps.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser un correlation ID dans les logs ?',
                        'choices' => [
                            'Pour regrouper les événements liés à une même requête',
                            'Pour compresser les fichiers',
                            'Pour supprimer les erreurs',
                            'Pour remplacer HTTPS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le correlation ID permet de retrouver les événements associés à une même opération distribuée.'
                    ],

                    [
                        'question' => 'Quel type de monitoring peut déclencher une alerte lorsqu’un taux d’erreur dépasse un seuil ?',
                        'choices' => [
                            'Static rendering',
                            'Metrics monitoring',
                            'HTML validation',
                            'CSS monitoring'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les métriques permettent notamment de surveiller les taux d’erreur et de déclencher des alertes.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt principal du distributed tracing ?',
                        'choices' => [
                            'Modifier le CSS',
                            'Compresser les images',
                            'Suivre une requête à travers plusieurs services',
                            'Remplacer les logs'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le distributed tracing permet d’observer le chemin d’une requête à travers différents composants.'
                    ],

                    [
                        'question' => 'Pourquoi les logs de production doivent-ils éviter les informations sensibles ?',
                        'choices' => [
                            'Les logs ne sont jamais stockés',
                            'Ils peuvent être consultés ou centralisés dans des systèmes externes',
                            'Ils empêchent les API',
                            'Ils désactivent les cookies'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les logs peuvent être stockés dans des systèmes centralisés et doivent donc être traités comme des données potentiellement sensibles.'
                    ],

                    [
                        'question' => 'Quel indicateur est particulièrement utile pour détecter des problèmes de disponibilité ?',
                        'choices' => [
                            'Uptime',
                            'Font size',
                            'CSS coverage',
                            'Image width'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’uptime mesure la proportion de temps pendant laquelle un service reste disponible.'
                    ],

                    [
                        'question' => 'Pourquoi les alertes doivent-elles être soigneusement configurées ?',
                        'choices' => [
                            'Pour produire le plus d’alertes possible',
                            'Pour éviter notamment les faux positifs et l’alert fatigue',
                            'Pour supprimer le monitoring',
                            'Pour empêcher les logs'
                        ],
                        'correct' => 1,
                        'explanation' => 'Trop d’alertes inutiles peuvent provoquer une alert fatigue et faire manquer les incidents réellement importants.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — DATABASE & BACKEND PERFORMANCE
            // ============================================================
            [
                'title' => 'Backend et bases de données avancés',
                'description' => 'Optimisation des accès aux données, transactions, concurrence et performance backend.',
                'questions' => [

                    [
                        'question' => 'Quel problème survient lorsqu’une application exécute une requête SQL pour chaque élément d’une collection ?',
                        'choices' => [
                            'N+1 query problem',
                            'XSS',
                            'CSRF',
                            'DNS problem'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le problème N+1 survient lorsqu’une requête initiale est suivie d’une requête supplémentaire pour chaque élément.'
                    ],

                    [
                        'question' => 'Quelle technique ORM permet généralement d’éviter certaines requêtes N+1 ?',
                        'choices' => [
                            'Minification',
                            'Eager loading',
                            'Lazy rendering',
                            'CSS loading'
                        ],
                        'correct' => 1,
                        'explanation' => 'L’eager loading permet de charger les relations nécessaires plus efficacement dans de nombreux cas.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’une transaction ?',
                        'choices' => [
                            'Compresser les données',
                            'Garantir certaines propriétés atomiques et cohérentes pour un ensemble d’opérations',
                            'Créer du HTML',
                            'Accélérer toutes les requêtes'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une transaction regroupe plusieurs opérations afin de préserver certaines garanties de cohérence.'
                    ],

                    [
                        'question' => 'Que signifie généralement ACID dans le contexte des transactions ?',
                        'choices' => [
                            'Atomicity, Consistency, Isolation, Durability',
                            'Access, Cache, Index, Data',
                            'API, Code, Interface, Database',
                            'Application, Client, Internet, Deployment'
                        ],
                        'correct' => 0,
                        'explanation' => 'ACID signifie Atomicity, Consistency, Isolation et Durability.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un système concurrent modifie la même donnée simultanément ?',
                        'choices' => [
                            'CSS conflict',
                            'Race condition',
                            'HTML parsing',
                            'Image loading'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une race condition peut apparaître lorsque plusieurs opérations concurrentes dépendent du même état et s’exécutent dans un ordre imprévisible.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet de verrouiller temporairement certaines données lors d’une transaction ?',
                        'choices' => [
                            'CSS lock',
                            'Database locking',
                            'Browser lock',
                            'HTTP rendering'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les mécanismes de locking permettent de contrôler l’accès concurrent à certaines données.'
                    ],

                    [
                        'question' => 'Pourquoi une pagination côté backend est-elle généralement préférable à charger toute une table ?',
                        'choices' => [
                            'Elle réduit les données transférées et traitées à chaque requête',
                            'Elle supprime les indexes',
                            'Elle désactive SQL',
                            'Elle empêche le caching'
                        ],
                        'correct' => 0,
                        'explanation' => 'La pagination limite la quantité de données récupérées et envoyées au client.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître si une transaction reste ouverte trop longtemps ?',
                        'choices' => [
                            'Moins de contention',
                            'Verrous maintenus plus longtemps et ressources consommées',
                            'Meilleure disponibilité',
                            'Suppression des requêtes'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une transaction longue peut maintenir des locks plus longtemps et augmenter la contention.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet de réduire le nombre d’accès répétés à une base de données ?',
                        'choices' => [
                            'Caching',
                            'HTML',
                            'CSS',
                            'DNS'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le caching peut éviter certains accès répétitifs à la base de données.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il analyser les requêtes lentes en production ?',
                        'choices' => [
                            'Pour identifier les bottlenecks et optimiser les opérations coûteuses',
                            'Pour supprimer les données',
                            'Pour désactiver SQL',
                            'Pour empêcher les utilisateurs'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse des requêtes lentes permet d’identifier les principaux coûts et d’améliorer les performances backend.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CONCEPTION PROFESSIONNELLE
            // ============================================================
            [
                'title' => 'Conception Web professionnelle',
                'description' => 'Bonnes pratiques d’ingénierie, maintenabilité, résilience et conception de systèmes Web.',
                'questions' => [

                    [
                        'question' => 'Quel principe recommande d’éviter la duplication inutile du code ?',
                        'choices' => [
                            'DRY',
                            'KISS',
                            'YAGNI',
                            'SOLID'
                        ],
                        'correct' => 0,
                        'explanation' => 'DRY signifie Don’t Repeat Yourself et encourage la réduction de duplication inutile.'
                    ],

                    [
                        'question' => 'Que signifie KISS dans le contexte de conception logicielle ?',
                        'choices' => [
                            'Keep Internal Systems Secure',
                            'Keep It Simple',
                            'Keep Interfaces Stateless',
                            'Keep Integration Synchronous'
                        ],
                        'correct' => 1,
                        'explanation' => 'KISS encourage à privilégier des solutions simples plutôt qu’une complexité inutile.'
                    ],

                    [
                        'question' => 'Que signifie YAGNI ?',
                        'choices' => [
                            'You Always Generate New Interfaces',
                            'Your API Generates New Instances',
                            'You Aren’t Gonna Need It',
                            'Your Application Gets Network Issues'
                        ],
                        'correct' => 2,
                        'explanation' => 'YAGNI signifie You Aren’t Gonna Need It et encourage à ne pas implémenter prématurément des fonctionnalités inutiles.'
                    ],

                    [
                        'question' => 'Quel concept consiste à concevoir un système capable de continuer à fonctionner malgré certaines défaillances ?',
                        'choices' => [
                            'Minification',
                            'Normalization',
                            'Rendering',
                            'Resilience'
                        ],
                        'correct' => 3,
                        'explanation' => 'La resilience vise à permettre au système de supporter ou de récupérer de certaines défaillances.'
                    ],

                    [
                        'question' => 'Quel pattern est utile pour limiter l’impact d’un service externe temporairement indisponible ?',
                        'choices' => [
                            'Circuit Breaker',
                            'Factory',
                            'Builder',
                            'Singleton'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Circuit Breaker peut empêcher temporairement les appels vers un service qui échoue fréquemment.'
                    ],

                    [
                        'question' => 'Pourquoi les timeouts sont-ils importants dans les appels réseau ?',
                        'choices' => [
                            'Ils garantissent que le serveur répond',
                            'Ils empêchent une opération de rester bloquée indéfiniment',
                            'Ils suppriment les erreurs',
                            'Ils remplacent les retries'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les timeouts limitent la durée pendant laquelle une application attend une réponse réseau.'
                    ],

                    [
                        'question' => 'Pourquoi les retries doivent-ils généralement utiliser un mécanisme de backoff ?',
                        'choices' => [
                            'Pour envoyer immédiatement davantage de requêtes',
                            'Pour réduire la pression sur un service temporairement défaillant',
                            'Pour supprimer les logs',
                            'Pour désactiver le réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un backoff espace les nouvelles tentatives afin de réduire la pression sur un service en difficulté.'
                    ],

                    [
                        'question' => 'Quel principe recommande de rendre les composants aussi indépendants que raisonnablement possible ?',
                        'choices' => [
                            'Loose Coupling',
                            'Global Coupling',
                            'Hard Coding',
                            'Single Deployment'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le loose coupling réduit les dépendances fortes entre les composants.'
                    ],

                    [
                        'question' => 'Quel concept permet de remplacer une implémentation sans modifier fortement le code qui l’utilise ?',
                        'choices' => [
                            'Tight coupling',
                            'Abstraction',
                            'Hard coding',
                            'Global state'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une abstraction permet au code client de dépendre d’un contrat plutôt que d’une implémentation concrète.'
                    ],

                    [
                        'question' => 'Quelle qualité est particulièrement importante pour une application Web professionnelle destinée à évoluer pendant plusieurs années ?',
                        'choices' => [
                            'Complexité maximale',
                            'Couplage fort',
                            'Maintenabilité',
                            'Absence de tests'
                        ],
                        'correct' => 2,
                        'explanation' => 'La maintenabilité est essentielle pour pouvoir faire évoluer, corriger et améliorer durablement une application.'
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