<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MobileDevelopmentAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — ARCHITECTURE AVANCÉE
            // ============================================================
            [
                'title' => 'Architecture Mobile Avancée',
                'description' => 'Patterns architecturaux avancés, frontières, dépendances et conception d’applications mobiles évolutives.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’une frontière dans une Clean Architecture ?',
                        'choices' => [
                            'Contrôler la direction des dépendances entre les différentes couches',
                            'Faire dépendre chaque classe de la base de données',
                            'Supprimer toutes les abstractions',
                            'Placer toute la logique dans l’interface utilisateur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les frontières architecturales permettent de contrôler les dépendances et d’éviter que les règles métier de haut niveau soient fortement couplées aux détails d’implémentation.'
                    ],

                    [
                        'question' => 'Quel composant devrait idéalement contenir les règles métier spécifiques à l’application ?',
                        'choices' => [
                            'Le driver de base de données',
                            'La couche métier ou domaine',
                            'Le thème de l’interface utilisateur',
                            'Le client HTTP'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les règles métier doivent appartenir à la logique du domaine ou de l’application plutôt qu’à des composants spécifiques à l’infrastructure.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le Dependency Inversion ?',
                        'choices' => [
                            'Faire instancier ses dépendances directement par chaque classe',
                            'Supprimer les interfaces de l’architecture',
                            'Faire dépendre les modules de haut niveau d’abstractions plutôt que d’implémentations concrètes',
                            'Déplacer tout le code dans la base de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Dependency Inversion encourage les politiques de haut niveau à dépendre d’abstractions plutôt que de détails d’implémentation concrets.'
                    ],

                    [
                        'question' => 'Pourquoi une architecture orientée par fonctionnalités peut-elle être utile dans une grande application mobile ?',
                        'choices' => [
                            'Elle oblige toutes les fonctionnalités à partager un seul contrôleur',
                            'Elle empêche les tests',
                            'Elle élimine la navigation',
                            'Elle regroupe le code lié à une capacité métier et peut améliorer la scalabilité'
                        ],
                        'correct' => 3,
                        'explanation' => 'Une organisation orientée par fonctionnalités peut rendre les grandes applications plus faciles à parcourir en regroupant le code autour des capacités métier.'
                    ],

                    [
                        'question' => 'À quoi sert un Anti-Corruption Layer ?',
                        'choices' => [
                            'À protéger un modèle de domaine des concepts d’un autre système ou d’un autre Bounded Context',
                            'À chiffrer chaque champ de la base de données',
                            'À remplacer l’authentification',
                            'À afficher les composants de l’interface utilisateur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Anti-Corruption Layer traduit les modèles entre systèmes et empêche un système externe de contaminer le modèle de domaine interne.'
                    ],

                    [
                        'question' => 'Pourquoi les détails d’infrastructure ne devraient-ils idéalement pas se propager dans la logique métier ?',
                        'choices' => [
                            'L’infrastructure est toujours inutile',
                            'Cela réduit le couplage et facilite les tests et les changements de la logique métier',
                            'Cela empêche la persistance',
                            'Cela rend les API impossibles'
                        ],
                        'correct' => 1,
                        'explanation' => 'Maintenir les préoccupations d’infrastructure en dehors de la logique métier rend le cœur de l’application moins dépendant de technologies spécifiques.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Use Case dans l’architecture d’une application ?',
                        'choices' => [
                            'Une table de base de données',
                            'Une animation de l’interface utilisateur',
                            'Une opération spécifique à l’application représentant une action métier',
                            'Un socket réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un Use Case représente une opération significative de l’application, comme l’inscription d’un utilisateur ou la soumission d’une commande.'
                    ],

                    [
                        'question' => 'Quel est le risque de créer trop d’abstractions ?',
                        'choices' => [
                            'L’application devient automatiquement plus rapide',
                            'Les tests deviennent impossibles',
                            'La base de données disparaît',
                            'L’architecture peut devenir inutilement complexe et plus difficile à comprendre'
                        ],
                        'correct' => 3,
                        'explanation' => 'Une abstraction doit résoudre un problème réel. Un excès d’abstractions peut ajouter de la complexité sans apporter de bénéfice significatif.'
                    ],

                    [
                        'question' => 'Que signifie High Cohesion ?',
                        'choices' => [
                            'Les responsabilités liées sont regroupées au sein d’un même composant',
                            'Chaque composant effectue des tâches sans rapport entre elles',
                            'Tous les composants accèdent à des variables globales',
                            'Chaque classe contient de la logique de base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une forte cohésion signifie qu’un composant possède des responsabilités étroitement liées plutôt qu’un ensemble de responsabilités sans rapport.'
                    ],

                    [
                        'question' => 'Quel est un avantage majeur d’une architecture modulaire ?',
                        'choices' => [
                            'Elle oblige chaque module à dépendre de tous les autres modules',
                            'Les fonctionnalités peuvent être développées, testées et maintenues avec des frontières plus claires',
                            'Elle élimine le contrôle de version',
                            'Elle garantit l’absence totale de bugs'
                        ],
                        'correct' => 1,
                        'explanation' => 'La modularité fournit des frontières plus claires et peut améliorer la maintenabilité, les tests et le travail en équipe.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — PERFORMANCE
            // ============================================================
            [
                'title' => 'Performance Mobile Avancée',
                'description' => 'Performance du rendu, utilisation de la mémoire, charge CPU, temps de démarrage et optimisation des performances.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le jank dans une interface mobile ?',
                        'choices' => [
                            'Une défaillance de la base de données',
                            'Des saccades visibles causées par des délais de rendu non respectés',
                            'Un mécanisme d’authentification',
                            'Un protocole réseau'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le jank apparaît lorsque le rendu ne respecte pas le rythme d’affichage attendu, ce qui provoque des saccades visibles.'
                    ],

                    [
                        'question' => 'Pourquoi les allocations inutiles d’objets peuvent-elles affecter les performances mobiles ?',
                        'choices' => [
                            'Elles peuvent augmenter la pression mémoire et le travail du Garbage Collector',
                            'Elles améliorent toujours les performances',
                            'Elles désactivent les communications réseau',
                            'Elles réduisent la taille de l’application'
                        ],
                        'correct' => 0,
                        'explanation' => 'Des allocations fréquentes peuvent augmenter la pression mémoire et provoquer davantage d’activité du Garbage Collector.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le Lazy Loading ?',
                        'choices' => [
                            'Charger toutes les ressources au démarrage',
                            'Supprimer les ressources inutilisées',
                            'Charger les ressources uniquement lorsqu’elles sont nécessaires',
                            'Désactiver le cache'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Lazy Loading retarde l’initialisation ou le chargement d’une ressource jusqu’au moment où elle est réellement nécessaire.'
                    ],

                    [
                        'question' => 'Pourquoi l’optimisation des images peut-elle avoir un impact important sur une application mobile ?',
                        'choices' => [
                            'Les images n’utilisent jamais de mémoire',
                            'Les images affectent uniquement le serveur',
                            'Les images ne peuvent pas être compressées',
                            'Les images volumineuses peuvent consommer beaucoup de mémoire, de stockage et de bande passante'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les images peuvent représenter certaines des ressources les plus volumineuses d’une application et affecter la mémoire, le stockage et le réseau.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le temps de démarrage d’une application ?',
                        'choices' => [
                            'Le temps nécessaire pour que l’application devienne utilisable après son lancement',
                            'La durée nécessaire uniquement à une migration de base de données',
                            'La fréquence de rafraîchissement de l’écran',
                            'Le délai d’expiration du réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le temps de démarrage mesure le temps nécessaire au lancement de l’application jusqu’au moment où elle devient utilisable.'
                    ],

                    [
                        'question' => 'Pourquoi certaines initialisations coûteuses devraient-elles parfois être différées ?',
                        'choices' => [
                            'Pour augmenter le travail effectué au démarrage',
                            'Pour réduire le temps de démarrage et améliorer la réactivité perçue',
                            'Pour empêcher toute initialisation',
                            'Pour désactiver la persistance'
                        ],
                        'correct' => 1,
                        'explanation' => 'Différer les initialisations non essentielles permet de rendre l’application utilisable plus rapidement.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une Memory Leak ?',
                        'choices' => [
                            'Un délai d’expiration réseau',
                            'Une migration de base de données',
                            'De la mémoire qui reste retenue alors qu’elle n’est plus nécessaire',
                            'Une frame de rendu'
                        ],
                        'correct' => 2,
                        'explanation' => 'Une Memory Leak se produit lorsque des objets restent référencés et continuent à consommer de la mémoire alors qu’ils ne sont plus nécessaires.'
                    ],

                    [
                        'question' => 'Quelle technique est utile pour identifier les goulots d’étranglement des performances ?',
                        'choices' => [
                            'Modifier l’icône de l’application',
                            'Ajouter des délais aléatoires',
                            'Désactiver tous les logs',
                            'Profiler le CPU, la mémoire et le comportement du rendu'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les outils de profiling permettent d’identifier où sont consommées les ressources CPU, mémoire et rendu.'
                    ],

                    [
                        'question' => 'Pourquoi l’optimisation devrait-elle généralement être guidée par le profiling ?',
                        'choices' => [
                            'Cela permet de concentrer les efforts sur les véritables goulots d’étranglement plutôt que sur des suppositions',
                            'Le profiling rend toujours les applications plus rapides',
                            'Il supprime le besoin de tests',
                            'Il empêche les changements d’architecture'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le profiling fournit des données permettant d’identifier les véritables sources des problèmes de performance.'
                    ],

                    [
                        'question' => 'Quel est le compromis lié à un caching agressif ?',
                        'choices' => [
                            'Il améliore toujours la cohérence des données',
                            'Il peut améliorer les performances mais consommer du stockage ou fournir des données obsolètes',
                            'Il élimine l’utilisation de la mémoire',
                            'Il empêche le fonctionnement hors ligne'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le caching peut améliorer la réactivité, mais il entraîne des coûts de stockage et des problématiques liées à la fraîcheur des données.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — SÉCURITÉ
            // ============================================================
            [
                'title' => 'Sécurité Mobile Avancée',
                'description' => 'Secure Storage, authentification, sécurité des communications et principes de sécurité mobile.',
                'questions' => [

                    [
                        'question' => 'Pourquoi les identifiants sensibles ne devraient-ils normalement pas être stockés en texte brut ?',
                        'choices' => [
                            'Le stockage en texte brut peut exposer les secrets si le stockage est compromis',
                            'Le texte brut est toujours chiffré',
                            'Cela améliore la sécurité',
                            'Cela empêche l’authentification'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les identifiants sensibles doivent être protégés, car un accès non autorisé au stockage local pourrait exposer ces informations.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le principe du Least Privilege ?',
                        'choices' => [
                            'Donner un accès maximal à chaque composant',
                            'Accorder uniquement les permissions et accès nécessaires à une tâche',
                            'Désactiver l’authentification',
                            'Stocker toutes les données publiquement'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le principe du Least Privilege limite les accès à ce qui est strictement nécessaire, réduisant ainsi l’impact potentiel d’une compromission.'
                    ],

                    [
                        'question' => 'Pourquoi HTTPS est-il important pour les communications entre une application mobile et une API ?',
                        'choices' => [
                            'Il rend les requêtes gratuites',
                            'Il supprime l’authentification',
                            'Il protège les communications grâce au chiffrement TLS et à l’authentification du serveur',
                            'Il garantit que l’API ne contient aucun bug'
                        ],
                        'correct' => 2,
                        'explanation' => 'HTTPS utilise TLS pour protéger les données en transit et authentifier le serveur grâce aux certificats.'
                    ],

                    [
                        'question' => 'Quel est l’objectif du Certificate Pinning ?',
                        'choices' => [
                            'Accélérer le rendu de l’interface',
                            'Indexer une base de données locale',
                            'Fournir un stockage hors ligne',
                            'Apporter une assurance supplémentaire que la communication se fait avec le certificat ou la clé attendue du serveur'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le Certificate Pinning ou Public-Key Pinning permet de restreindre les identités de serveur considérées comme fiables au-delà de la chaîne normale des autorités de certification.'
                    ],

                    [
                        'question' => 'Pourquoi l’autorisation doit-elle toujours être appliquée par le backend pour les ressources protégées ?',
                        'choices' => [
                            'Un client mobile ne peut pas être considéré comme une frontière de sécurité fiable',
                            'Les applications mobiles ne peuvent pas communiquer avec les serveurs',
                            'L’interface utilisateur est toujours sécurisée',
                            'Le backend n’a pas besoin d’authentification'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les contrôles côté client peuvent être contournés. Le serveur doit donc appliquer lui-même les règles d’autorisation.'
                    ],

                    [
                        'question' => 'Quel est un risque courant de placer des secrets d’API directement dans une application mobile ?',
                        'choices' => [
                            'L’application devient impossible à compiler',
                            'Des attaquants peuvent extraire les secrets depuis l’application distribuée',
                            'Cela empêche les communications réseau',
                            'Cela chiffre automatiquement le secret'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les applications mobiles sont distribuées aux utilisateurs. Les secrets intégrés dans l’application ne doivent donc pas être considérés comme confidentiels.'
                    ],

                    [
                        'question' => 'À quoi sert généralement le Secure Storage ?',
                        'choices' => [
                            'Afficher des animations',
                            'Mettre uniquement des images en cache',
                            'Protéger des valeurs locales sensibles telles que des tokens ou des clés',
                            'Gérer la navigation de l’interface'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les mécanismes de Secure Storage sont conçus pour protéger les valeurs sensibles en utilisant les mécanismes de sécurité fournis par la plateforme.'
                    ],

                    [
                        'question' => 'Pourquoi les logs doivent-ils éviter les informations sensibles ?',
                        'choices' => [
                            'Les logs ne peuvent jamais être consultés',
                            'Les logs disparaissent toujours immédiatement',
                            'Le logging améliore le chiffrement',
                            'Les logs peuvent exposer des secrets ou des informations personnelles à des personnes non autorisées'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les logs peuvent être collectés, stockés ou consultés par différents systèmes et développeurs. Les données sensibles ne doivent donc pas y être enregistrées inutilement.'
                    ],

                    [
                        'question' => 'À quoi sert la validation des entrées ?',
                        'choices' => [
                            'À réduire les entrées inattendues ou malveillantes arrivant jusqu’à la logique de l’application',
                            'À désactiver toutes les entrées utilisateur',
                            'À remplacer l’authentification',
                            'À rendre les bases de données inutiles'
                        ],
                        'correct' => 0,
                        'explanation' => 'La validation vérifie que les données entrantes respectent les contraintes attendues avant leur traitement.'
                    ],

                    [
                        'question' => 'Pourquoi la sécurité mobile doit-elle considérer que le client peut être inspecté ?',
                        'choices' => [
                            'Les applications mobiles sont impossibles à reverse engineer',
                            'Les logiciels distribués aux utilisateurs peuvent potentiellement être analysés par des attaquants',
                            'Les utilisateurs ne peuvent pas accéder à leurs appareils',
                            'Le système d’exploitation masque tous les fichiers'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une application distribuée aux utilisateurs ne doit pas reposer sur l’idée que son code restera définitivement secret.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — OFFLINE-FIRST & SYNCHRONISATION
            // ============================================================
            [
                'title' => 'Applications Mobiles Offline-First',
                'description' => 'Conception Offline-First, synchronisation, résolution des conflits et gestion résiliente des données mobiles.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une application Offline-First ?',
                        'choices' => [
                            'Une application conçue pour rester utile même lorsque la connexion réseau est indisponible',
                            'Une application sans données locales',
                            'Une application qui ne se connecte jamais à un serveur',
                            'Une application sans authentification'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les applications Offline-First privilégient les fonctionnalités locales et synchronisent les données avec les systèmes distants lorsque la connectivité le permet.'
                    ],

                    [
                        'question' => 'Pourquoi la conception Offline-First est-elle particulièrement utile sur mobile ?',
                        'choices' => [
                            'Les appareils mobiles disposent toujours d’une connectivité illimitée',
                            'La connectivité mobile peut être intermittente ou indisponible',
                            'Les applications mobiles ne peuvent pas utiliser de bases de données',
                            'Les réseaux mobiles sont toujours plus rapides que le stockage local'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les utilisateurs mobiles peuvent fréquemment rencontrer une connexion faible, intermittente ou totalement indisponible.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’Eventual Consistency ?',
                        'choices' => [
                            'Les données ne sont jamais synchronisées',
                            'Tous les clients doivent toujours avoir exactement les mêmes données instantanément',
                            'Différentes répliques peuvent temporairement être différentes mais convergent vers un état cohérent',
                            'Seules les données locales existent'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’Eventual Consistency permet des différences temporaires entre les répliques tout en prévoyant une convergence vers un état cohérent.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la Conflict Resolution ?',
                        'choices' => [
                            'Supprimer toutes les modifications locales',
                            'Ignorer les modifications du serveur',
                            'Désactiver la synchronisation',
                            'Déterminer comment réconcilier des versions contradictoires des données'
                        ],
                        'correct' => 3,
                        'explanation' => 'La Conflict Resolution définit la manière dont l’application traite les modifications locales et distantes incompatibles.'
                    ],

                    [
                        'question' => 'Pourquoi une application peut-elle utiliser une Sync Queue ?',
                        'choices' => [
                            'Pour stocker les opérations qui doivent être envoyées lorsque la connexion devient disponible',
                            'Pour désactiver toutes les requêtes',
                            'Pour remplacer la base de données',
                            'Pour afficher les composants de l’interface'
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Sync Queue peut conserver les opérations en attente et les réessayer lorsque le réseau est disponible.'
                    ],

                    [
                        'question' => 'À quoi sert l’Idempotency lors des retries ?',
                        'choices' => [
                            'À rendre chaque requête destructive',
                            'À permettre une exécution répétée sans produire d’effets supplémentaires indésirables',
                            'À empêcher toutes les requêtes',
                            'À supprimer les utilisateurs en double'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une opération idempotente peut être réessayée sans appliquer accidentellement plusieurs fois la même action logique.'
                    ],

                    [
                        'question' => 'Pourquoi la logique de retry devrait-elle utiliser des limites ou du backoff ?',
                        'choices' => [
                            'Pour générer un trafic infini',
                            'Pour empêcher les requêtes réussies',
                            'Pour éviter de surcharger le serveur et de gaspiller les ressources de l’appareil',
                            'Pour désactiver le mode hors ligne'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les limites de retry et le backoff empêchent les échecs répétés de générer un nombre excessif de requêtes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’Exponential Backoff ?',
                        'choices' => [
                            'Réessayer continuellement sans délai',
                            'Augmenter la luminosité de l’écran',
                            'Supprimer les requêtes échouées',
                            'Augmenter progressivement les délais entre les retries après des échecs'
                        ],
                        'correct' => 3,
                        'explanation' => 'L’Exponential Backoff augmente progressivement le délai entre les tentatives, souvent avec une part d’aléatoire afin d’éviter les Retry Storms synchronisés.'
                    ],

                    [
                        'question' => 'Pourquoi la synchronisation devrait-elle être visible pour l’utilisateur lorsque cela est pertinent ?',
                        'choices' => [
                            'L’utilisateur peut avoir besoin de savoir si ses modifications sont enregistrées ou toujours en attente',
                            'L’utilisateur ne devrait jamais connaître l’état de l’application',
                            'Cela désactive le mode hors ligne',
                            'Cela empêche les retries'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un statut de synchronisation clair aide l’utilisateur à comprendre si ses modifications ont été persistées à distance.'
                    ],

                    [
                        'question' => 'Quelle est une stratégie courante pour résoudre des conflits simples de modification ?',
                        'choices' => [
                            'Toujours supprimer les deux versions',
                            'Utiliser une politique définie telle que server-wins, client-wins ou une résolution manuelle',
                            'Ignorer les timestamps',
                            'Désactiver la synchronisation'
                        ],
                        'correct' => 1,
                        'explanation' => 'La résolution des conflits nécessite une politique explicite adaptée aux exigences fonctionnelles et aux données de l’application.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — TRAITEMENT EN ARRIÈRE-PLAN
            // ============================================================
            [
                'title' => 'Traitement en Arrière-Plan',
                'description' => 'Tâches en arrière-plan, planification, contraintes du cycle de vie et traitement mobile fiable.',
                'questions' => [

                    [
                        'question' => 'Pourquoi le traitement en arrière-plan peut-il être limité sur les plateformes mobiles ?',
                        'choices' => [
                            'Pour économiser la batterie, la mémoire et les ressources du système',
                            'Parce que les appareils mobiles ne peuvent pas exécuter de code en arrière-plan',
                            'Pour empêcher les notifications',
                            'Parce que les communications réseau sont impossibles'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les systèmes d’exploitation mobiles limitent l’activité en arrière-plan afin de préserver l’autonomie et les performances du système.'
                    ],

                    [
                        'question' => 'Pourquoi les tâches en arrière-plan doivent-elles être conçues pour tolérer les interruptions ?',
                        'choices' => [
                            'L’exécution en arrière-plan est garantie indéfiniment',
                            'Le système d’exploitation peut suspendre ou terminer le traitement en arrière-plan',
                            'Cela augmente automatiquement l’utilisation du CPU',
                            'Cela empêche la persistance'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les systèmes mobiles peuvent arrêter les processus en arrière-plan. Les tâches importantes doivent donc pouvoir être reprises ou réessayées.'
                    ],

                    [
                        'question' => 'À quoi sert une Scheduled Background Task ?',
                        'choices' => [
                            'À rendre chaque frame de l’interface',
                            'À modifier les couleurs de l’écran',
                            'À effectuer une tâche à un moment futur approprié',
                            'À remplacer la navigation'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les tâches planifiées sont utiles pour des opérations telles que la synchronisation périodique lorsque les politiques de la plateforme l’autorisent.'
                    ],

                    [
                        'question' => 'Pourquoi le traitement en arrière-plan doit-il éviter une fréquence inutilement élevée ?',
                        'choices' => [
                            'Cela améliore automatiquement la consommation de batterie',
                            'Cela empêche la persistance des données',
                            'Cela augmente la confiance des utilisateurs',
                            'Une activité fréquente en arrière-plan peut consommer la batterie et les ressources du système'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un traitement excessif en arrière-plan peut réduire l’autonomie de la batterie et dégrader les performances de l’appareil.'
                    ],

                    [
                        'question' => 'À quoi sert conceptuellement un Foreground Service sur les plateformes qui le prennent en charge ?',
                        'choices' => [
                            'À effectuer un travail long et visible pour l’utilisateur nécessitant une priorité d’exécution élevée',
                            'À remplacer les bases de données locales',
                            'À afficher des images statiques',
                            'À supprimer les permissions'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’exécution au premier plan est généralement destinée aux tâches continues importantes pour l’utilisateur et nécessitant un traitement maintenu.'
                    ],

                    [
                        'question' => 'Pourquoi les tâches en arrière-plan devraient-elles persister leur progression nécessaire ?',
                        'choices' => [
                            'La tâche ne peut jamais être interrompue',
                            'La tâche peut être interrompue avant sa fin',
                            'La persistance augmente la vitesse du CPU',
                            'Cela désactive les retries'
                        ],
                        'correct' => 1,
                        'explanation' => 'La persistance de la progression permet de reprendre une tâche interrompue sans devoir recommencer depuis le début.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une tâche de Background Synchronization ?',
                        'choices' => [
                            'Une animation de l’interface',
                            'Un schéma de base de données locale',
                            'Un processus qui réconcilie les données locales et distantes en dehors de l’interaction directe avec l’utilisateur',
                            'Une route de navigation'
                        ],
                        'correct' => 2,
                        'explanation' => 'La Background Synchronization met à jour les données entre le stockage local et les services distants sans nécessiter une interaction constante de l’utilisateur.'
                    ],

                    [
                        'question' => 'Pourquoi les Background Jobs devraient-ils être idempotents lorsque cela est possible ?',
                        'choices' => [
                            'Ils doivent toujours dupliquer leurs effets',
                            'Cela rend les retries impossibles',
                            'Cela empêche la persistance',
                            'Une exécution répétée ne devrait pas créer d’effets dupliqués indésirables'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les Background Jobs peuvent être réexécutés après une interruption. L’idempotence réduit donc le risque de produire plusieurs fois le même effet.'
                    ],

                    [
                        'question' => 'Quelle est une différence majeure entre le travail de l’interface au premier plan et le travail en arrière-plan ?',
                        'choices' => [
                            'Le travail en arrière-plan est soumis à des contraintes différentes liées au cycle de vie et aux ressources',
                            'Le travail au premier plan ne peut pas accéder à la mémoire',
                            'Le travail en arrière-plan dispose toujours d’un CPU illimité',
                            'Le travail au premier plan ne peut pas effectuer de requêtes réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’exécution en arrière-plan est soumise aux politiques du système concernant le cycle de vie et la gestion des ressources, contrairement au travail actif de l’interface.'
                    ],

                    [
                        'question' => 'Que faut-il prendre en compte avant de planifier un traitement périodique en arrière-plan ?',
                        'choices' => [
                            'Uniquement l’icône de l’application',
                            'L’impact sur la batterie, les restrictions de la plateforme, la disponibilité du réseau et les besoins métier réels',
                            'Uniquement la résolution de l’écran',
                            'Uniquement la taille de la base de données'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le traitement périodique doit répondre à un besoin réel et être conçu en fonction des contraintes de la plateforme et des ressources disponibles.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — RÉSEAU AVANCÉ
            // ============================================================
            [
                'title' => 'Réseau Mobile Avancé',
                'description' => 'Caching, retries, pagination, connectivité et architecture réseau résiliente.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que la Pagination ?',
                        'choices' => [
                            'Diviser un grand ensemble de résultats en plusieurs pages plus petites',
                            'Chiffrer chaque réponse API',
                            'Supprimer les anciens enregistrements',
                            'Créer des bases de données supplémentaires'
                        ],
                        'correct' => 0,
                        'explanation' => 'La Pagination permet de récupérer de grands ensembles de données en plusieurs portions afin de réduire l’utilisation de la mémoire et la taille des données transférées.'
                    ],

                    [
                        'question' => 'Pourquoi la Pagination est-elle utile sur les appareils mobiles ?',
                        'choices' => [
                            'Les appareils mobiles disposent de ressources illimitées',
                            'Elle peut réduire la bande passante, l’utilisation de la mémoire et le temps de chargement initial',
                            'Elle empêche les requêtes vers le serveur',
                            'Elle supprime le caching'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le chargement de volumes de données plus petits peut améliorer la réactivité et réduire la consommation de ressources.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’Optimistic UI ?',
                        'choices' => [
                            'Attendre la réponse du serveur avant de modifier quoi que ce soit',
                            'Ignorer les réponses du serveur',
                            'Mettre immédiatement à jour l’interface pendant que l’opération distante s’exécute en arrière-plan',
                            'Désactiver la gestion des erreurs'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’Optimistic UI suppose qu’une opération réussira et met immédiatement à jour l’interface, tout en prévoyant la gestion d’un éventuel échec.'
                    ],

                    [
                        'question' => 'Quel est le principal risque des mises à jour optimistes ?',
                        'choices' => [
                            'L’interface ne peut pas être modifiée',
                            'Le réseau devient plus rapide',
                            'Le serveur ne peut pas répondre',
                            'L’opération distante peut échouer et l’interface locale doit alors être réconciliée'
                        ],
                        'correct' => 3,
                        'explanation' => 'Si le serveur rejette une modification optimiste, l’application doit correctement rétablir ou réconcilier l’état de l’interface.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la Request Deduplication ?',
                        'choices' => [
                            'Éviter les requêtes en double inutiles pour une même opération logique',
                            'Supprimer toutes les requêtes',
                            'Chiffrer les appels API',
                            'Désactiver le caching'
                        ],
                        'correct' => 0,
                        'explanation' => 'La Request Deduplication empêche plusieurs requêtes équivalentes d’être exécutées inutilement en même temps ou de manière répétée.'
                    ],

                    [
                        'question' => 'Pourquoi l’état de connectivité ne doit-il pas toujours être considéré comme la preuve qu’une requête API réussira ?',
                        'choices' => [
                            'La connectivité est sans importance',
                            'Un appareil peut avoir une connexion réseau alors que le serveur est indisponible ou que la requête échoue',
                            'Les API réussissent toujours',
                            'Les serveurs ne peuvent jamais provoquer de timeout'
                        ],
                        'correct' => 1,
                        'explanation' => 'La présence d’une connexion réseau ne garantit pas qu’un serveur, une route ou une requête spécifique fonctionnera correctement.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Timeout ?',
                        'choices' => [
                            'Une réponse réussie',
                            'Une migration de base de données',
                            'Une limite sur la durée maximale pendant laquelle une opération peut attendre',
                            'Un composant d’interface utilisateur'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les Timeouts empêchent une opération d’attendre indéfiniment une connexion ou une réponse.'
                    ],

                    [
                        'question' => 'Pourquoi les politiques de retry devraient-elles distinguer les différents types d’échecs ?',
                        'choices' => [
                            'Chaque échec doit être réessayé indéfiniment',
                            'Les retries résolvent toujours les erreurs d’authentification',
                            'Tous les échecs sont identiques',
                            'Certaines erreurs sont temporaires tandis que d’autres nécessitent une action de l’utilisateur ou de l’application'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les erreurs temporaires de connectivité peuvent être réessayées, tandis que les erreurs d’authentification ou de validation nécessitent généralement un traitement différent.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le comportement Stale-While-Revalidate ?',
                        'choices' => [
                            'Retourner rapidement les données en cache tout en les actualisant en arrière-plan',
                            'Ne jamais actualiser les données en cache',
                            'Supprimer le cache avant chaque requête',
                            'Utiliser uniquement les données du serveur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Stale-While-Revalidate permet de fournir rapidement les données en cache tout en récupérant de manière asynchrone une version plus récente.'
                    ],

                    [
                        'question' => 'Pourquoi les requêtes réseau devraient-elles éviter de transférer des champs inutiles ?',
                        'choices' => [
                            'Cela augmente la bande passante utilisée',
                            'Des payloads plus petits peuvent réduire la bande passante, le travail de parsing et la latence',
                            'Cela empêche les API',
                            'Cela rend le caching impossible'
                        ],
                        'correct' => 1,
                        'explanation' => 'Réduire la taille des payloads améliore l’efficacité du réseau et diminue les traitements nécessaires sur l’appareil.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — OBSERVABILITÉ & GESTION DES CRASHES
            // ============================================================
            [
                'title' => 'Observabilité et Fiabilité Mobile',
                'description' => 'Crash Reporting, logging, métriques, diagnostic et fiabilité des applications en production.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le Crash Reporting ?',
                        'choices' => [
                            'Collecter des informations sur les crashes de l’application afin de diagnostiquer les problèmes',
                            'Empêcher automatiquement tous les crashes',
                            'Remplacer les tests',
                            'Modifier l’interface utilisateur'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le Crash Reporting collecte des informations de diagnostic permettant aux développeurs d’identifier et de corriger les crashes en production.'
                    ],

                    [
                        'question' => 'Pourquoi les Stack Traces sont-elles utiles ?',
                        'choices' => [
                            'Elles affichent l’icône de l’application',
                            'Elles fournissent la séquence des appels associés à une erreur',
                            'Elles chiffrent la base de données',
                            'Elles remplacent le code source'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une Stack Trace fournit des informations sur le chemin d’appels ayant conduit à une exception ou à un crash.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le Structured Logging ?',
                        'choices' => [
                            'Afficher aléatoirement du texte à l’écran',
                            'Stocker les logs uniquement sous forme de captures d’écran',
                            'Enregistrer les événements à l’aide de champs structurés et cohérents',
                            'Supprimer tous les logs'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Structured Logging utilise des champs cohérents qui facilitent le filtrage, la recherche et l’analyse des événements.'
                    ],

                    [
                        'question' => 'Pourquoi les logs de production doivent-ils être contrôlés avec attention ?',
                        'choices' => [
                            'Plus de logs améliorent toujours la confidentialité',
                            'Les logs ne peuvent jamais affecter les performances',
                            'Les données sensibles doivent toujours être enregistrées',
                            'Des logs excessifs ou sensibles peuvent créer des problèmes de confidentialité, de sécurité et de performance'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le logging en production doit équilibrer la valeur de diagnostic avec les contraintes de confidentialité, de sécurité, de stockage et de performance.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une métrique d’application ?',
                        'choices' => [
                            'Une valeur mesurable utilisée pour comprendre le comportement ou les performances de l’application',
                            'Un composant d’interface',
                            'Un mot de passe de base de données',
                            'Une route de navigation'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les métriques permettent de quantifier des éléments tels que le temps de démarrage, le taux de crash, la latence des requêtes ou l’utilisation d’une fonctionnalité.'
                    ],

                    [
                        'question' => 'Pourquoi le suivi des sessions sans crash est-il utile ?',
                        'choices' => [
                            'Il mesure la fiabilité de l’application du point de vue de l’utilisateur',
                            'Il mesure la taille de l’écran',
                            'Il désactive les rapports de crash',
                            'Il garantit l’absence de futurs crashes'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les métriques de sessions sans crash permettent d’estimer la fréquence à laquelle les utilisateurs rencontrent des crashes.'
                    ],

                    [
                        'question' => 'À quoi sert principalement le Distributed Tracing ?',
                        'choices' => [
                            'Modifier les thèmes de l’interface',
                            'Gérer les images locales',
                            'Suivre une requête à travers plusieurs services ou composants',
                            'Remplacer les bases de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le Distributed Tracing permet de suivre une requête à travers plusieurs services et d’identifier les sources de latence ou d’échec.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la Graceful Degradation ?',
                        'choices' => [
                            'Faire crasher l’application lorsqu’une dépendance échoue',
                            'Désactiver toutes les fonctionnalités',
                            'Ignorer les erreurs',
                            'Maintenir des fonctionnalités utiles lorsque certaines fonctionnalités ou dépendances sont indisponibles'
                        ],
                        'correct' => 3,
                        'explanation' => 'La Graceful Degradation permet à l’application de continuer à fournir des fonctionnalités utiles malgré des défaillances partielles.'
                    ],

                    [
                        'question' => 'Pourquoi les erreurs de production devraient-elles être associées aux versions de l’application ?',
                        'choices' => [
                            'Cela permet d’identifier si une release a introduit ou augmenté un problème',
                            'Les versions sont sans rapport avec les crashes',
                            'Cela désactive les mises à jour',
                            'Cela supprime les informations de debugging'
                        ],
                        'correct' => 0,
                        'explanation' => 'Associer les erreurs aux versions facilite l’identification des régressions introduites par une release spécifique.'
                    ],

                    [
                        'question' => 'Quelle est une propriété utile d’un rapport d’erreur exploitable ?',
                        'choices' => [
                            'Il ne contient aucun contexte',
                            'Il fournit suffisamment de contexte pour reproduire ou diagnostiquer le problème',
                            'Il contient uniquement le mot erreur',
                            'Il masque tous les détails de l’application'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un diagnostic utile fournit des informations pertinentes telles que le type d’erreur, la Stack Trace, la version de l’application et l’environnement.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CI/CD & RELEASES
            // ============================================================
            [
                'title' => 'CI/CD Mobile et Gestion des Releases',
                'description' => 'Builds automatisés, tests, signature, canaux de distribution et bonnes pratiques de déploiement mobile.',
                'questions' => [

                    [
                        'question' => 'Que signifie CI ?',
                        'choices' => [
                            'Continuous Integration',
                            'Central Installation',
                            'Code Isolation',
                            'Client Infrastructure'
                        ],
                        'correct' => 0,
                        'explanation' => 'Continuous Integration consiste à construire et tester automatiquement les modifications lorsqu’elles sont intégrées dans une base de code partagée.'
                    ],

                    [
                        'question' => 'Quel est l’objectif des builds mobiles automatisés ?',
                        'choices' => [
                            'Rendre le déploiement manuel plus difficile',
                            'Produire des artefacts applicatifs cohérents à partir du code source',
                            'Supprimer le contrôle de version',
                            'Empêcher les tests'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les builds automatisés permettent de produire des artefacts applicatifs reproductibles et cohérents.'
                    ],

                    [
                        'question' => 'Pourquoi les credentials de signature doivent-ils être protégés dans un pipeline CI/CD ?',
                        'choices' => [
                            'Ce sont uniquement des ressources d’interface',
                            'Ils ne peuvent jamais être réutilisés',
                            'La compromission des credentials de signature peut permettre des releases ou mises à jour non autorisées',
                            'Ils améliorent le rendu de l’écran'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les credentials utilisés pour signer une application sont sensibles et doivent être protégés de manière sécurisée.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Release Channel ?',
                        'choices' => [
                            'Une connexion à une base de données',
                            'Une route de navigation',
                            'Un composant d’interface',
                            'Un canal de distribution tel que internal, beta ou production'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les Release Channels permettent de distribuer différentes versions d’une application à différents groupes d’utilisateurs.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser des Staged Rollouts ?',
                        'choices' => [
                            'Pour déployer progressivement une release et détecter les problèmes avant de toucher tous les utilisateurs',
                            'Pour désactiver le monitoring',
                            'Pour empêcher définitivement les mises à jour',
                            'Pour éliminer les tests'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les Staged Rollouts réduisent l’impact d’une release problématique en la distribuant progressivement aux utilisateurs.'
                    ],

                    [
                        'question' => 'À quoi sert généralement le Semantic Versioning ?',
                        'choices' => [
                            'Modifier les couleurs de l’application',
                            'Communiquer la compatibilité et l’importance des changements logiciels à travers les numéros de version',
                            'Chiffrer les requêtes API',
                            'Gérer les capteurs de l’appareil'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le Semantic Versioning fournit une convention permettant de communiquer la nature et l’importance des changements à travers les numéros de version.'
                    ],

                    [
                        'question' => 'Pourquoi les Release Builds devraient-elles être reproductibles ?',
                        'choices' => [
                            'La reproductibilité rend le debugging impossible',
                            'Chaque build devrait contenir des dépendances aléatoires',
                            'Le même code source et les mêmes entrées contrôlées devraient produire des artefacts prévisibles',
                            'Cela empêche la CI'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les builds reproductibles améliorent la confiance, le debugging et la cohérence entre les différents environnements.'
                    ],

                    [
                        'question' => 'À quoi sert un Feature Flag ?',
                        'choices' => [
                            'Modifier le format du package de l’application',
                            'Remplacer le contrôle de version',
                            'Chiffrer le code source',
                            'Contrôler la disponibilité d’une fonctionnalité sans nécessairement distribuer des binaires différents'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les Feature Flags permettent d’activer, de désactiver ou de déployer progressivement certaines fonctionnalités.'
                    ],

                    [
                        'question' => 'Pourquoi les pipelines CI devraient-ils exécuter des tests automatisés avant une release ?',
                        'choices' => [
                            'Pour détecter les régressions avant de distribuer l’application',
                            'Pour augmenter les échecs de déploiement',
                            'Pour supprimer les tests du développement',
                            'Pour désactiver les builds'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests automatisés constituent une étape importante de contrôle qualité avant la distribution d’une application.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Rollback dans la gestion des releases ?',
                        'choices' => [
                            'Ajouter une nouvelle fonctionnalité',
                            'Revenir à une release ou une configuration précédente et stable',
                            'Supprimer toutes les versions',
                            'Modifier le logo de l’application'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le Rollback est un mécanisme de récupération permettant de revenir à un état stable lorsqu’une nouvelle release provoque des problèmes importants.'
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