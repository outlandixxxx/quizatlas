<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MobileDevelopmentProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mobile-development')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — MOBILE SYSTEM ARCHITECTURE
            // ============================================================
            [
                'title' => 'Architecture des systèmes mobiles professionnelle',
                'description' => 'Décisions architecturales avancées pour les applications mobiles de grande envergure et de production.',
                'questions' => [

                    [
                        'question' => 'Quel est le principal avantage architectural de la séparation de la logique métier et de l’infrastructure ?',
                        'choices' => [
                            'Elle réduit le couplage entre les règles métier et les implémentations techniques',
                            'Elle force toutes les données à rester en mémoire',
                            'Elle supprime le besoin de tests',
                            'Elle garantit un rendu plus rapide'
                        ],
                        'correct' => 0,
                        'explanation' => 'La séparation de la logique métier et de l’infrastructure permet aux règles métier de rester indépendantes des bases de données, des frameworks réseau et des implémentations spécifiques à la plateforme.'
                    ],

                    [
                        'question' => 'Dans une grande application mobile, que cherche principalement à définir un bounded context ?',
                        'choices' => [
                            'Une résolution d’écran',
                            'Une frontière claire autour d’un modèle de domaine particulier et de ses responsabilités',
                            'Un délai d’expiration réseau',
                            'Un pool de connexions à la base de données'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un bounded context établit une frontière à l’intérieur de laquelle un modèle de domaine et une terminologie particuliers restent cohérents.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’une abstraction de repository ?',
                        'choices' => [
                            'Rendre les composants UI',
                            'Remplacer l’authentification',
                            'Abstraire l’accès aux sources de données vis-à-vis de la logique applicative',
                            'Chiffrer chaque paquet réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les repositories fournissent une abstraction au-dessus des sources de données telles que les APIs, les bases de données et les caches.'
                    ],

                    [
                        'question' => 'Pourquoi la dependency injection peut-elle améliorer la maintenabilité ?',
                        'choices' => [
                            'Elle élimine les dépendances',
                            'Elle rend chaque classe globale',
                            'Elle empêche le mocking',
                            'Elle sépare la construction des objets de leur comportement'
                        ],
                        'correct' => 3,
                        'explanation' => 'La dependency injection sépare la création et la configuration des dépendances des classes qui les utilisent, ce qui améliore la testabilité et la flexibilité.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’architectural drift ?',
                        'choices' => [
                            'La divergence progressive d’une implémentation par rapport à ses principes architecturaux prévus',
                            'Un problème de connexion réseau',
                            'Une mise à jour du système d’exploitation mobile',
                            'Une technique d’indexation de base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’architectural drift apparaît lorsque les décisions d’implémentation accumulées finissent progressivement par enfreindre l’architecture prévue.'
                    ],

                    [
                        'question' => 'Pourquoi des frontières de modules stables sont-elles importantes dans les grandes applications ?',
                        'choices' => [
                            'Elles obligent tous les modules à partager un état mutable',
                            'Elles limitent les dépendances incontrôlées et réduisent l’impact des changements',
                            'Elles éliminent le version control',
                            'Elles empêchent les tests modulaires'
                        ],
                        'correct' => 1,
                        'explanation' => 'Des frontières stables réduisent le couplage et empêchent les changements dans une zone de se propager inutilement dans toute l’application.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un domain event ?',
                        'choices' => [
                            'Une animation UI',
                            'Un index de base de données',
                            'Un enregistrement indiquant qu’un événement significatif s’est produit dans un domaine',
                            'Un socket réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un domain event représente un événement significatif dans le domaine métier, comme la finalisation d’une commande.'
                    ],

                    [
                        'question' => 'Quel est le principal danger architectural d’un état mutable global partagé ?',
                        'choices' => [
                            'Il améliore toujours la scalabilité',
                            'Il garantit un comportement déterministe',
                            'Il supprime toutes les dépendances',
                            'Il peut créer un couplage caché et rendre les changements d’état difficiles à comprendre'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un état mutable global peut introduire des dépendances implicites, des race conditions et des comportements difficiles à tester.'
                    ],

                    [
                        'question' => 'Que cherche à atteindre la separation of concerns ?',
                        'choices' => [
                            'Maintenir les différentes responsabilités isolées afin que les composants restent compréhensibles et maintenables',
                            'Placer toutes les fonctionnalités dans un seul service',
                            'Supprimer toutes les abstractions',
                            'Faire dépendre chaque module de l’UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'La separation of concerns maintient les différentes responsabilités indépendantes, ce qui réduit la complexité et le couplage.'
                    ],

                    [
                        'question' => 'Quand un modular monolith constitue-t-il un choix pertinent pour une application mobile ?',
                        'choices' => [
                            'Uniquement lorsqu’aucune architecture n’est nécessaire',
                            'Lorsque de fortes frontières internes entre modules sont utiles sans la complexité opérationnelle des services distribués',
                            'Uniquement lorsque le réseau est indisponible',
                            'Uniquement pour les applications à un seul écran'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un modular monolith peut fournir une forte séparation tout en évitant la complexité opérationnelle associée aux systèmes distribués.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — STATE MANAGEMENT
            // ============================================================
            [
                'title' => 'Gestion professionnelle de l’état mobile',
                'description' => 'État applicatif complexe, concurrence, propriété de l’état et transitions d’état prévisibles.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal de l’unidirectional data flow ?',
                        'choices' => [
                            'Rendre les changements d’état plus faciles à suivre et à comprendre',
                            'Permettre à chaque composant de modifier directement n’importe quel état',
                            'Éliminer l’état de l’application',
                            'Forcer toutes les données dans l’UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’unidirectional data flow établit des relations prévisibles entre l’état, les actions et le rendu de l’UI.'
                    ],

                    [
                        'question' => 'Pourquoi la propriété de l’état doit-elle être explicite dans une application complexe ?',
                        'choices' => [
                            'Pour augmenter la duplication de l’état',
                            'Pour déterminer clairement quel composant ou quelle couche est responsable de la modification et du maintien de l’état',
                            'Pour éliminer les tests',
                            'Pour empêcher la persistance'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une propriété explicite de l’état réduit les mises à jour conflictuelles et facilite la compréhension du comportement de l’état.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le derived state ?',
                        'choices' => [
                            'Un état toujours stocké séparément',
                            'Un état reçu uniquement du système d’exploitation',
                            'Une valeur calculée à partir de l’état source existant',
                            'Un état qui ne peut pas changer'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le derived state est calculé à partir de l’état existant plutôt que maintenu indépendamment.'
                    ],

                    [
                        'question' => 'Pourquoi dupliquer la même source de vérité à plusieurs endroits peut-il être dangereux ?',
                        'choices' => [
                            'Cela améliore la cohérence',
                            'Cela élimine la synchronisation',
                            'Cela réduit l’utilisation de la mémoire',
                            'Les copies peuvent devenir incohérentes entre elles'
                        ],
                        'correct' => 3,
                        'explanation' => 'Un état dupliqué peut devenir incohérent si sa synchronisation n’est pas soigneusement maintenue.'
                    ],

                    [
                        'question' => 'À quoi sert une state machine ?',
                        'choices' => [
                            'Représenter des états explicites et les transitions valides entre eux',
                            'Remplacer toutes les bases de données',
                            'Rendre des images',
                            'Chiffrer le trafic réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les state machines rendent explicites les transitions d’état complexes et empêchent les transitions invalides.'
                    ],

                    [
                        'question' => 'Quel problème les race conditions peuvent-elles créer dans la gestion asynchrone de l’état ?',
                        'choices' => [
                            'Elles garantissent que le résultat le plus récent gagne',
                            'L’ordre des opérations asynchrones peut amener des données obsolètes à écraser un état plus récent',
                            'Elles empêchent toutes les requêtes réseau',
                            'Elles éliminent la concurrence'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les opérations asynchrones concurrentes peuvent se terminer dans un ordre inattendu et provoquer l’écrasement de l’état actuel par des résultats obsolètes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’optimistic state management ?',
                        'choices' => [
                            'Ne jamais mettre à jour l’état localement',
                            'Attendre chaque réponse du serveur avant le rendu',
                            'Mettre à jour l’état avant la confirmation distante et effectuer une reconciliation si l’opération échoue',
                            'Désactiver la gestion des erreurs'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’optimistic state management améliore la réactivité en supposant le succès tout en conservant une stratégie de récupération en cas d’échec.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la state normalization ?',
                        'choices' => [
                            'Chiffrer l’état',
                            'Supprimer les utilisateurs en double',
                            'Convertir toutes les valeurs en chaînes',
                            'Structurer les entités liées afin de réduire les duplications inutiles'
                        ],
                        'correct' => 3,
                        'explanation' => 'La state normalization stocke les entités sous une forme structurée afin qu’une même entité n’ait pas à être dupliquée dans tout l’arbre d’état.'
                    ],

                    [
                        'question' => 'Pourquoi l’état UI transient doit-il généralement être séparé de l’état applicatif durable ?',
                        'choices' => [
                            'Ils ont des durées de vie et des exigences de persistance différentes',
                            'Ils doivent toujours utiliser des langages de programmation différents',
                            'L’état transient doit toujours être stocké à distance',
                            'L’état durable ne peut pas être testé'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les éléments temporaires de l’UI, comme les dialogues, diffèrent des données durables telles que les préférences utilisateur ou les enregistrements synchronisés.'
                    ],

                    [
                        'question' => 'Quel est un avantage des mises à jour d’un état immutable ?',
                        'choices' => [
                            'Elles rendent l’état impossible à modifier',
                            'Elles rendent les changements plus prévisibles et plus faciles à détecter',
                            'Elles éliminent l’utilisation de la mémoire',
                            'Elles empêchent les opérations asynchrones'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les mises à jour immutables rendent les transitions d’état explicites et peuvent simplifier la détection des changements et le debugging.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — RESILIENT DISTRIBUTED MOBILE SYSTEMS
            // ============================================================
            [
                'title' => 'Systèmes mobiles professionnels offline et distribués',
                'description' => 'État distribué, synchronisation, résolution des conflits et systèmes mobiles résilients.',
                'questions' => [

                    [
                        'question' => 'Quel est le principal défi des applications distribuées capables de fonctionner offline ?',
                        'choices' => [
                            'Maintenir un comportement local utile tout en réconciliant des états potentiellement divergents',
                            'Rendre des écrans statiques',
                            'Éliminer le stockage local',
                            'Empêcher toutes les requêtes réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les systèmes offline doivent continuer à fonctionner localement puis réconcilier ultérieurement les changements avec l’état distant.'
                    ],

                    [
                        'question' => 'Que cherche à faciliter un conflict-free replicated data type (CRDT) ?',
                        'choices' => [
                            'Le rendu de l’UI',
                            'Des mises à jour convergentes entre répliques selon des propriétés mathématiques définies',
                            'La compression d’images',
                            'La génération de tokens d’authentification'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les CRDTs sont des structures de données conçues pour permettre aux répliques d’effectuer des mises à jour indépendantes et de converger finalement sans résolution centrale des conflits dans de nombreux scénarios.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un tombstone dans les systèmes de synchronisation ?',
                        'choices' => [
                            'Un cache temporaire',
                            'Un token d’authentification',
                            'Un marqueur représentant une suppression qui doit être synchronisée',
                            'Un placeholder UI'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un tombstone indique qu’une entité a été supprimée afin que cette suppression puisse être propagée aux autres répliques.'
                    ],

                    [
                        'question' => 'Pourquoi les logical clocks sont-elles parfois utiles dans les systèmes distribués ?',
                        'choices' => [
                            'Elles mesurent le niveau de batterie',
                            'Ils remplacent le chiffrement',
                            'Elles déterminent la taille de l’écran',
                            'Elles fournissent un mécanisme permettant de raisonner sur l’ordre des événements distribués'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les logical clocks fournissent des informations d’ordre sans dépendre entièrement de physical clocks synchronisées.'
                    ],

                    [
                        'question' => 'À quoi sert une vector clock ?',
                        'choices' => [
                            'Détecter les relations causales et les mises à jour concurrentes entre répliques',
                            'Rendre des animations',
                            'Compresser des images',
                            'Gérer la luminosité de l’appareil'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les vector clocks permettent de déterminer si une version précède causalement une autre ou si deux mises à jour sont concurrentes.'
                    ],

                    [
                        'question' => 'Pourquoi last-write-wins n’est-il pas toujours adapté à la résolution des conflits ?',
                        'choices' => [
                            'Il préserve toujours chaque changement',
                            'Il peut supprimer silencieusement une mise à jour concurrente valide',
                            'Il empêche la synchronisation',
                            'Il ne nécessite aucun timestamp'
                        ],
                        'correct' => 1,
                        'explanation' => 'Last-write-wins peut écraser des changements concurrents et entraîner la perte d’un travail utilisateur légitime.'
                    ],

                    [
                        'question' => 'À quoi sert généralement un sync cursor ?',
                        'choices' => [
                            'Suivre la position à l’écran',
                            'Suivre le niveau de batterie',
                            'Demander uniquement les changements intervenus après un point de synchronisation connu',
                            'Rendre une barre de progression'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un sync cursor permet à un client de demander les changements intervenus depuis sa précédente position de synchronisation.'
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un processus de reconciliation ?',
                        'choices' => [
                            'Supprimer toutes les données locales',
                            'Désactiver la communication avec le serveur',
                            'Empêcher les changements concurrents',
                            'Comparer et résoudre les différences entre l’état local et l’état distant'
                        ],
                        'correct' => 3,
                        'explanation' => 'La reconciliation ramène des états divergents vers un état cohérent selon des règles de conflit définies.'
                    ],

                    [
                        'question' => 'Pourquoi les opérations de synchronisation doivent-elles être observables et auditables dans les systèmes critiques ?',
                        'choices' => [
                            'Cela aide à diagnostiquer les changements perdus, dupliqués ou conflictuels',
                            'Cela ralentit les applications par définition',
                            'Cela empêche l’utilisation offline',
                            'Cela élimine le besoin de backups'
                        ],
                        'correct' => 0,
                        'explanation' => 'L’observability aide les développeurs à comprendre les échecs de synchronisation et à enquêter sur les problèmes de cohérence des données.'
                    ],

                    [
                        'question' => 'Quelle est une exigence courante pour des mutation queues offline fiables ?',
                        'choices' => [
                            'Elles doivent exister uniquement en mémoire volatile',
                            'Les opérations en attente doivent survivre aux redémarrages de l’application lorsque l’opération métier exige la durabilité',
                            'Elles ne doivent jamais réessayer',
                            'Elles doivent supprimer immédiatement les opérations échouées'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les queues durables empêchent les opérations utilisateur en attente de disparaître lorsque l’application est arrêtée ou redémarrée.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — SECURITY & PRIVACY
            // ============================================================
            [
                'title' => 'Sécurité et confidentialité mobiles professionnelles',
                'description' => 'Sécurité mobile de production, threat modeling, stockage sécurisé et privacy engineering.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le threat modeling ?',
                        'choices' => [
                            'Un processus structuré permettant d’identifier les actifs, les menaces, les attack surfaces et les mesures d’atténuation',
                            'Une technique de conception UI',
                            'Une migration de base de données',
                            'Une méthode de compression réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le threat modeling identifie systématiquement ce qui doit être protégé, les attaquants potentiels et les mesures d’atténuation possibles.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une attack surface ?',
                        'choices' => [
                            'L’écran physique',
                            'L’ensemble des interfaces exposées par lesquelles un système pourrait potentiellement être attaqué',
                            'L’icône de l’application',
                            'La batterie de l’appareil'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une attack surface comprend les APIs exposées, le stockage, les canaux de communication, les permissions et autres interfaces.'
                    ],

                    [
                        'question' => 'Pourquoi les tokens devraient-ils avoir une durée de vie limitée lorsque cela est possible ?',
                        'choices' => [
                            'Cela augmente leur utilité après une compromission',
                            'Cela élimine l’authentification',
                            'Cela réduit la période pendant laquelle un token volé peut être exploité',
                            'Cela empêche le token refresh'
                        ],
                        'correct' => 2,
                        'explanation' => 'Des credentials à durée de vie plus courte réduisent l’impact potentiel du vol de tokens.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la token rotation ?',
                        'choices' => [
                            'Afficher un token dans l’UI',
                            'Chiffrer un token deux fois',
                            'Supprimer l’authentification',
                            'Remplacer périodiquement les credentials ou après des événements de sécurité définis'
                        ],
                        'correct' => 3,
                        'explanation' => 'La credential rotation limite la durée d’utilisation des credentials individuels et peut réduire l’impact d’une compromission.'
                    ],

                    [
                        'question' => 'Pourquoi les clés cryptographiques sensibles doivent-elles généralement être protégées par les mécanismes de sécurité de la plateforme ?',
                        'choices' => [
                            'Les mécanismes de la plateforme peuvent fournir, lorsqu’ils sont pris en charge, un stockage des clés protégé par le hardware ou par l’OS',
                            'Ils rendent les clés publiques',
                            'Ils suppriment le chiffrement',
                            'Ils garantissent qu’aucun attaquant ne pourra jamais compromettre un appareil'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les mécanismes de sécurité de la plateforme peuvent fournir une protection plus forte que le stockage de clés brutes dans le stockage applicatif ordinaire.'
                    ],

                    [
                        'question' => 'Sur quoi porte principalement la certificate transparency ?',
                        'choices' => [
                            'Le rendu de l’UI',
                            'La visibilité publique et l’audit des certificats TLS émis',
                            'La synchronisation de base de données',
                            'La navigation de l’application'
                        ],
                        'correct' => 1,
                        'explanation' => 'La Certificate Transparency fournit des logs publiquement auditables des émissions de certificats afin d’aider à détecter les certificats émis à tort.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un principe de privacy by design ?',
                        'choices' => [
                            'Tout collecter par défaut',
                            'Stocker indéfiniment les informations personnelles',
                            'Intégrer les protections de la vie privée dans la conception du système plutôt que de les ajouter ultérieurement',
                            'Désactiver les contrôles utilisateur'
                        ],
                        'correct' => 2,
                        'explanation' => 'La privacy by design intègre dès le départ la minimisation des données, leur protection et le contrôle par l’utilisateur dans l’architecture.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la data minimization ?',
                        'choices' => [
                            'Collecter toutes les données disponibles',
                            'Chiffrer uniquement les mots de passe',
                            'Conserver chaque log indéfiniment',
                            'Collecter et conserver uniquement les données nécessaires à des fins légitimes'
                        ],
                        'correct' => 3,
                        'explanation' => 'La data minimization réduit les risques liés à la confidentialité et à la sécurité en limitant la collecte et la conservation inutiles.'
                    ],

                    [
                        'question' => 'Pourquoi l’autorisation côté client seule est-elle insuffisante ?',
                        'choices' => [
                            'Un utilisateur peut potentiellement modifier ou contourner la logique côté client',
                            'Les clients sont toujours fiables',
                            'Le backend ne peut pas valider les requêtes',
                            'L’autorisation est uniquement un concept d’UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le backend doit appliquer indépendamment l’autorisation, car le client ne constitue pas une frontière de sécurité de confiance.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la defense in depth ?',
                        'choices' => [
                            'Utiliser un seul mécanisme de sécurité très puissant',
                            'Utiliser plusieurs contrôles de sécurité indépendants afin que l’échec de l’un ne compromette pas complètement le système',
                            'Désactiver tout le réseau',
                            'Supprimer l’authentification'
                        ],
                        'correct' => 1,
                        'explanation' => 'La defense in depth superpose plusieurs contrôles tels que l’authentification, l’autorisation, le chiffrement et le monitoring.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — PERFORMANCE ENGINEERING
            // ============================================================
            [
                'title' => 'Ingénierie professionnelle des performances mobiles',
                'description' => 'Analyse des performances en production, rendu, mémoire, démarrage et optimisation des ressources.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un performance budget ?',
                        'choices' => [
                            'Une limite définie pour des ressources telles que le temps de démarrage, la taille de l’application ou les payloads réseau',
                            'Un système de paiement financier',
                            'Un backup de base de données',
                            'Une animation UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les performance budgets établissent des limites mesurables qui contribuent à prévenir les régressions.'
                    ],

                    [
                        'question' => 'Pourquoi des UI rebuilds excessifs peuvent-ils être problématiques ?',
                        'choices' => [
                            'Ils améliorent toujours la réactivité',
                            'Ils peuvent provoquer un travail inutile du CPU et du rendu',
                            'Ils éliminent l’utilisation de la mémoire',
                            'Ils empêchent les changements d’état'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les rebuilds inutiles peuvent augmenter le travail de calcul et de rendu, notamment dans les interfaces complexes.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’overdraw dans le rendu graphique ?',
                        'choices' => [
                            'Une duplication de base de données',
                            'Un retry réseau',
                            'Plusieurs opérations de rendu dessinant sur la même zone de l’écran',
                            'Une memory leak'
                        ],
                        'correct' => 2,
                        'explanation' => 'L’overdraw se produit lorsque le GPU effectue plusieurs opérations de dessin sur des pixels qui seront finalement recouverts par des couches ultérieures.'
                    ],

                    [
                        'question' => 'Pourquoi des animations excessives peuvent-elles affecter l’autonomie de la batterie ?',
                        'choices' => [
                            'Les animations ne consomment jamais de ressources',
                            'Elles désactivent le GPU',
                            'Elles réduisent l’utilisation du CPU',
                            'Un rendu continu peut augmenter l’activité du CPU/GPU et la consommation d’énergie'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les animations nécessitent un travail de rendu continu et peuvent augmenter la consommation d’énergie lorsqu’elles sont utilisées excessivement.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la memory pressure ?',
                        'choices' => [
                            'Une situation dans laquelle la mémoire disponible devient limitée par les besoins de l’application et du système',
                            'Un protocole réseau',
                            'Un état UI',
                            'Une requête de base de données'
                        ],
                        'correct' => 0,
                        'explanation' => 'La memory pressure se produit lorsque les applications et le système d’exploitation se disputent des ressources mémoire limitées.'
                    ],

                    [
                        'question' => 'Pourquoi les dimensions d’un bitmap peuvent-elles être plus importantes que la taille compressée du fichier pour l’utilisation mémoire ?',
                        'choices' => [
                            'La taille compressée est toujours égale à la taille en mémoire à l’exécution',
                            'Les images décodées peuvent consommer de la mémoire principalement en fonction de leurs dimensions en pixels et de leur format',
                            'Les images n’utilisent aucune mémoire à l’exécution',
                            'Le réseau détermine la mémoire du bitmap'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une image compressée peut être petite sur le disque mais nécessiter une quantité importante de mémoire une fois décodée en bitmap.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un cold startup ?',
                        'choices' => [
                            'Lancer l’application alors que son processus n’était pas déjà en cours d’exécution',
                            'Ouvrir une nouvelle base de données',
                            'Actualiser un écran',
                            'Démarrer une requête réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'Un cold startup se produit lorsque le processus de l’application doit être créé et initialisé depuis zéro.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une performance regression ?',
                        'choices' => [
                            'Une optimisation intentionnelle',
                            'Un déploiement réussi',
                            'Une nouvelle fonctionnalité',
                            'Une détérioration mesurable des performances par rapport à une baseline précédente'
                        ],
                        'correct' => 3,
                        'explanation' => 'Une regression signifie que les performances se sont dégradées par rapport à une baseline établie.'
                    ],

                    [
                        'question' => 'Pourquoi les mesures de performance en production sont-elles précieuses ?',
                        'choices' => [
                            'Les utilisateurs réels peuvent rencontrer des conditions qui ne sont pas reproduites par les appareils de développement',
                            'Les environnements de développement représentent toujours parfaitement la production',
                            'Les données de production ne peuvent pas être mesurées',
                            'Les performances ne varient jamais entre les appareils'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les appareils, réseaux et habitudes d’utilisation réels peuvent différer considérablement des environnements de développement.'
                    ],

                    [
                        'question' => 'Quel est l’objectif du benchmarking ?',
                        'choices' => [
                            'Éliminer les tests',
                            'Mesurer les performances dans des conditions contrôlées et comparer les changements',
                            'Remplacer le monitoring',
                            'Désactiver l’optimisation'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les benchmarks fournissent des mesures contrôlées qui peuvent être comparées entre différentes implémentations ou releases.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — TESTING & QUALITY
            // ============================================================
            [
                'title' => 'Tests mobiles professionnels et ingénierie de la qualité',
                'description' => 'Stratégie de tests, automatisation, tests d’intégration, fiabilité et quality gates.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’une test pyramid ?',
                        'choices' => [
                            'Encourager une répartition équilibrée entre de nombreux tests unitaires rapides et moins de tests de niveau supérieur plus coûteux',
                            'Éliminer les tests d’intégration',
                            'Rendre les tests UI obligatoires pour tout',
                            'Éviter les tests automatisés'
                        ],
                        'correct' => 0,
                        'explanation' => 'La test pyramid privilégie de nombreux tests rapides et ciblés, avec moins de tests plus lents et plus coûteux.'
                    ],

                    [
                        'question' => 'Que cherche principalement à vérifier un integration test ?',
                        'choices' => [
                            'Une seule fonction de manière isolée',
                            'Que plusieurs composants fonctionnent correctement ensemble',
                            'L’icône de l’application',
                            'La luminosité de l’écran'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les integration tests vérifient les interactions entre des composants tels que les repositories, les bases de données et les APIs.'
                    ],

                    [
                        'question' => 'À quoi sert le contract testing ?',
                        'choices' => [
                            'Tester les animations',
                            'Tester la consommation de batterie',
                            'Vérifier que les systèmes communicants sont d’accord sur l’interface et le comportement attendus',
                            'Remplacer tous les tests unitaires'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les contract tests vérifient les hypothèses entre les consumers et providers d’APIs ou de services.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le mutation testing ?',
                        'choices' => [
                            'Modifier les données de production',
                            'Tester le hardware de l’appareil',
                            'Chiffrer les résultats des tests',
                            'Introduire des changements de code contrôlés afin d’évaluer si les tests les détectent'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le mutation testing évalue la robustesse d’une suite de tests en introduisant de petits défauts artificiels et en vérifiant si les tests échouent.'
                    ],

                    [
                        'question' => 'Pourquoi les tests doivent-ils éviter un couplage excessif aux détails d’implémentation ?',
                        'choices' => [
                            'Les tests doivent se concentrer sur le comportement observable afin qu’un refactoring sans impact ne les casse pas inutilement',
                            'Les tests ne doivent jamais échouer',
                            'Les détails d’implémentation sont toujours plus importants',
                            'Cela rend les tests impossibles'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests centrés sur le comportement sont généralement plus résistants lorsque l’implémentation interne change sans modifier le comportement observable de l’extérieur.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le flaky testing ?',
                        'choices' => [
                            'Un test qui échoue toujours',
                            'Un test qui réussit ou échoue de manière imprévisible sans changement pertinent du produit',
                            'Un test trop rapide',
                            'Un test sans assertions'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les flaky tests produisent des résultats incohérents, souvent à cause du timing, de la concurrence, de l’environnement ou de dépendances externes.'
                    ],

                    [
                        'question' => 'Pourquoi les flaky tests sont-ils dangereux dans les pipelines CI ?',
                        'choices' => [
                            'Ils améliorent toujours la confiance',
                            'Ils réduisent le temps d’exécution',
                            'Ils peuvent amener les développeurs à ignorer les échecs ou à perdre confiance dans le pipeline',
                            'Ils éliminent les régressions'
                        ],
                        'correct' => 2,
                        'explanation' => 'Des faux échecs fréquents peuvent amener les équipes à négliger les résultats des tests et à affaiblir la quality gate.'
                    ],

                    [
                        'question' => 'Qu’est-ce que l’end-to-end testing ?',
                        'choices' => [
                            'Tester uniquement une fonction utilitaire',
                            'Tester uniquement une requête de base de données',
                            'Tester uniquement un widget UI',
                            'Tester un parcours utilisateur complet à travers les composants applicatifs concernés'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les end-to-end tests valident des workflows complets du point de vue de l’utilisateur à travers plusieurs couches.'
                    ],

                    [
                        'question' => 'Pourquoi la logique métier critique doit-elle avoir une forte couverture de tests automatisés ?',
                        'choices' => [
                            'Elle réduit le risque de régressions dans les comportements importants',
                            'Elle garantit un logiciel parfait',
                            'Elle élimine le besoin de monitoring',
                            'Elle empêche les futures fonctionnalités'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests automatisés fournissent une vérification répétable des comportements métier importants.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une quality gate dans CI/CD ?',
                        'choices' => [
                            'Un composant UI',
                            'Une condition qui doit être satisfaite avant que le pipeline puisse continuer',
                            'Une connexion à la base de données',
                            'Une icône de release'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les quality gates peuvent exiger des tests, une analyse statique, des contrôles de sécurité ou d’autres conditions avant le déploiement.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — RELEASE ENGINEERING
            // ============================================================
            [
                'title' => 'Ingénierie professionnelle des releases mobiles',
                'description' => 'Pipelines de release, signing, déploiements progressifs, feature flags et récupération en production.',
                'questions' => [

                    [
                        'question' => 'Que cherche conceptuellement à fournir le blue-green deployment ?',
                        'choices' => [
                            'Deux environnements permettant de basculer plus sûrement entre différentes versions de l’application',
                            'Deux thèmes UI',
                            'Deux tables de base de données',
                            'Deux appareils mobiles'
                        ],
                        'correct' => 0,
                        'explanation' => 'Le blue-green deployment utilise des environnements séparés afin que le trafic puisse être basculé entre les versions avec un risque de déploiement réduit.'
                    ],

                    [
                        'question' => 'Pourquoi les feature flags sont-ils utiles lors des releases mobiles ?',
                        'choices' => [
                            'Ils éliminent les tests de l’application',
                            'Ils permettent une activation contrôlée des fonctionnalités et un déploiement progressif',
                            'Ils remplacent le chiffrement',
                            'Ils empêchent toutes les mises à jour'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les feature flags permettent de contrôler les fonctionnalités indépendamment du binaire de l’application dans les architectures qui le permettent.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une canary release ?',
                        'choices' => [
                            'Une release distribuée immédiatement à tous les utilisateurs',
                            'Une release qui ne peut pas être rollback',
                            'Une release exposée à un petit sous-ensemble d’utilisateurs avant un déploiement plus large',
                            'Une release sans monitoring'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les canary releases limitent l’exposition initiale afin que le comportement en production puisse être observé avant une distribution plus large.'
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un release rollback ?',
                        'choices' => [
                            'Ajouter davantage de fonctionnalités',
                            'Augmenter la portée de la release',
                            'Supprimer le monitoring',
                            'Restaurer un état stable précédent après un déploiement problématique'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le rollback fournit un mécanisme de récupération lorsqu’une release introduit des problèmes sérieux.'
                    ],

                    [
                        'question' => 'Pourquoi les signing keys doivent-elles être conservées en dehors du source control ordinaire ?',
                        'choices' => [
                            'Ce sont des credentials sensibles qui pourraient permettre de signer l’application sans autorisation',
                            'Le source control ne peut pas stocker du texte',
                            'Les signing keys sont des assets UI',
                            'Elles améliorent la vitesse de compilation'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les credentials de signing doivent être protégés à l’aide de mécanismes sécurisés de gestion des secrets plutôt que commités dans les repositories.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un release artifact ?',
                        'choices' => [
                            'Un commentaire de code source',
                            'Un résultat de build produit pour la distribution ou le déploiement',
                            'Un enregistrement de base de données',
                            'Un événement UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'Un artifact est le résultat d’un processus de build, tel qu’un package d’application installable.'
                    ],

                    [
                        'question' => 'Pourquoi les dependencies doivent-elles être verrouillées ou contrôlées dans des builds reproductibles ?',
                        'choices' => [
                            'Pour garantir des versions aléatoires',
                            'Pour empêcher les tests automatisés',
                            'Pour réduire les changements inattendus causés par les mises à jour des dependencies',
                            'Pour supprimer le package management'
                        ],
                        'correct' => 2,
                        'explanation' => 'Le contrôle des versions des dependencies rend les builds plus prévisibles et réduit les changements inattendus.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une supply-chain attack dans le développement logiciel ?',
                        'choices' => [
                            'Un problème de rendu UI',
                            'Une panne de batterie',
                            'Un utilisateur qui change son mot de passe',
                            'Une attaque qui compromet le logiciel via les dependencies, les systèmes de build ou d’autres composants de la chaîne de développement'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les supply-chain attacks ciblent les dependencies, l’infrastructure de build, les packages ou d’autres composants utilisés pour produire le logiciel.'
                    ],

                    [
                        'question' => 'Pourquoi les systèmes CI/CD doivent-ils utiliser des credentials à courte durée de vie lorsque cela est possible ?',
                        'choices' => [
                            'Ils réduisent la durée pendant laquelle des credentials compromis peuvent être exploités',
                            'Ils rendent les secrets publics',
                            'Ils éliminent l’autorisation',
                            'Ils empêchent le déploiement automatisé'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les credentials à courte durée de vie réduisent la fenêtre d’exploitation lorsqu’un credential est compromis.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le progressive delivery ?',
                        'choices' => [
                            'Déployer immédiatement chaque fonctionnalité auprès de tous',
                            'Exposer progressivement les changements tout en surveillant leur impact',
                            'Supprimer le monitoring des releases',
                            'Désactiver le rollback'
                        ],
                        'correct' => 1,
                        'explanation' => 'Le progressive delivery combine des stratégies de rollout contrôlé avec le monitoring et la capacité à réagir aux problèmes.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — PROFESSIONAL SYSTEM DESIGN
            // ============================================================
            [
                'title' => 'Conception professionnelle des systèmes mobiles',
                'description' => 'Compromis architecturaux réels, scalabilité, fiabilité et prise de décision en production.',
                'questions' => [

                    [
                        'question' => 'Lors de la conception d’une application mobile, que faut-il prioriser avant de sélectionner un framework spécifique ?',
                        'choices' => [
                            'Les exigences du système, les contraintes et les objectifs métier',
                            'La librairie UI la plus populaire',
                            'Le code source le plus court',
                            'Le langage de programmation le plus récent'
                        ],
                        'correct' => 0,
                        'explanation' => 'Les choix technologiques doivent découler des exigences et des contraintes plutôt que déterminer à eux seuls l’architecture.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une non-functional requirement ?',
                        'choices' => [
                            'Une action d’inscription utilisateur',
                            'Une propriété telle que la sécurité, la fiabilité, les performances ou la scalabilité',
                            'Une ligne de base de données',
                            'Un bouton UI'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les non-functional requirements décrivent les qualités et contraintes du système plutôt que des fonctions métier spécifiques.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un scalability trade-off ?',
                        'choices' => [
                            'Un choix qui améliore toujours toutes les caractéristiques',
                            'Une décision de conception UI',
                            'Une décision dans laquelle l’amélioration de la capacité ou des possibilités de croissance peut introduire une complexité ou un coût supplémentaires',
                            'Un mot de passe de base de données'
                        ],
                        'correct' => 2,
                        'explanation' => 'Les décisions architecturales impliquent souvent de trouver un équilibre entre scalabilité, complexité, coût, latence et maintenabilité.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un graceful failure dans un système mobile ?',
                        'choices' => [
                            'Planter immédiatement lorsqu’une dépendance échoue',
                            'Ignorer toutes les erreurs',
                            'Supprimer l’état local',
                            'Continuer avec des fonctionnalités réduites tout en gérant clairement les dépendances indisponibles'
                        ],
                        'correct' => 3,
                        'explanation' => 'Le graceful failure permet à l’application de rester utile lorsqu’une dépendance externe est indisponible.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un SLO ?',
                        'choices' => [
                            'Un Service Level Objective définissant un objectif mesurable de fiabilité ou de performance',
                            'Un langage de programmation',
                            'Un schéma de base de données',
                            'Un framework UI'
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Service Level Objective définit une cible pour une caractéristique d’un service telle que la disponibilité ou la latence.'
                    ],

                    [
                        'question' => 'Pourquoi les error budgets sont-ils utiles ?',
                        'choices' => [
                            'Ils garantissent zéro échec',
                            'Ils équilibrent les objectifs de fiabilité avec la capacité à publier des changements et à innover',
                            'Ils éliminent le monitoring',
                            'Ils empêchent les déploiements'
                        ],
                        'correct' => 1,
                        'explanation' => 'Les error budgets fournissent un moyen pratique d’équilibrer la fiabilité et la vélocité des releases.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la backpressure dans les systèmes asynchrones ?',
                        'choices' => [
                            'Augmenter les animations UI',
                            'Désactiver toutes les queues',
                            'Un mécanisme empêchant les producers de submerger les consumers',
                            'Chiffrer les requêtes réseau'
                        ],
                        'correct' => 2,
                        'explanation' => 'La backpressure contrôle le débit du travail entrant lorsque les consumers ne peuvent pas traiter les données aussi rapidement que les producers les génèrent.'
                    ],

                    [
                        'question' => 'Pourquoi la gestion graceful des partial failures est-elle importante dans les applications mobiles ?',
                        'choices' => [
                            'Les applications mobiles fonctionnent toujours dans des conditions parfaites',
                            'Toutes les dépendances sont garanties disponibles',
                            'Elle élimine le besoin de stockage local',
                            'Les systèmes mobiles dépendent de réseaux, de services et d’appareils qui peuvent tomber en panne indépendamment'
                        ],
                        'correct' => 3,
                        'explanation' => 'Les applications mobiles fonctionnent dans des environnements avec des réseaux peu fiables, des appareils contraints et des services pouvant échouer indépendamment.'
                    ],

                    [
                        'question' => 'Qu’est-ce que la technical debt ?',
                        'choices' => [
                            'Le coût futur de maintenance et de complexité créé par des raccourcis ou des décisions techniques sous-optimales',
                            'Un prêt financier',
                            'Une transaction de base de données',
                            'Un délai d’expiration réseau'
                        ],
                        'correct' => 0,
                        'explanation' => 'La technical debt représente un coût futur introduit par des décisions qui privilégient la livraison à court terme au détriment de la maintenabilité à long terme.'
                    ],

                    [
                        'question' => 'Quelle est la caractéristique la plus importante d’une architecture production-ready ?',
                        'choices' => [
                            'Elle utilise la technologie la plus récente',
                            'Elle satisfait les exigences fonctionnelles et non fonctionnelles tout en restant maintenable et exploitable',
                            'Elle contient le plus d’abstractions possible',
                            'Elle possède la plus grande base de code'
                        ],
                        'correct' => 1,
                        'explanation' => 'Une architecture de production doit satisfaire les exigences tout en restant fiable, sécurisée, maintenable, observable et exploitable sur le plan opérationnel.'
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