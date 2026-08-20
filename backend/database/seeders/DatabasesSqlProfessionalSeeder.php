<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabasesSqlProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'databases-sql')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — ARCHITECTURE ET CONCEPTION AVANCÉE
            // ============================================================
            [
                'title' => 'Architecture et conception avancée',
                'description' => 'Quiz professionnel sur la conception, la modélisation et l’architecture des bases de données.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal de la normalisation dans une base relationnelle ?',
                        'choices' => [
                            'Réduire les redondances et les anomalies de mise à jour',
                            'Augmenter volontairement la duplication des données',
                            'Remplacer toutes les relations par des fichiers',
                            'Supprimer les contraintes d’intégrité',
                        ],
                        'correct' => 0,
                        'explanation' => 'La normalisation vise principalement à réduire la redondance et à éviter les anomalies lors des opérations INSERT, UPDATE et DELETE.'
                    ],

                    [
                        'question' => 'Dans quel cas une dénormalisation peut-elle être justifiée ?',
                        'choices' => [
                            'Lorsqu’un gain de performance mesuré justifie une certaine redondance',
                            'Toujours dans une base professionnelle',
                            'Uniquement lorsqu’il n’existe aucune relation',
                            'Pour supprimer toutes les Primary Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'La dénormalisation peut être utilisée lorsqu’elle apporte un bénéfice mesurable, notamment pour certaines charges de lecture.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une contrainte d’intégrité référentielle ?',
                        'choices' => [
                            'Une règle garantissant la cohérence entre une Foreign Key et une clé référencée',
                            'Une règle concernant uniquement les index',
                            'Une règle de formatage des chaînes',
                            'Une règle de performance',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’intégrité référentielle garantit notamment qu’une Foreign Key référence une valeur valide dans la table cible.'
                    ],

                    [
                        'question' => 'Pourquoi les clés naturelles peuvent-elles parfois être remplacées par des clés artificielles ?',
                        'choices' => [
                            'Pour obtenir un identifiant stable et indépendant des données métier',
                            'Pour supprimer toutes les contraintes',
                            'Pour empêcher les relations',
                            'Pour éviter toute utilisation de SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une clé artificielle, comme un identifiant numérique, peut fournir une identité stable même lorsque les attributs métier évoluent.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un modèle OLTP ?',
                        'choices' => [
                            'Un modèle orienté vers les transactions opérationnelles fréquentes',
                            'Un modèle exclusivement destiné au Machine Learning',
                            'Un système uniquement destiné aux sauvegardes',
                            'Un système sans transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'OLTP signifie Online Transaction Processing et concerne les applications transactionnelles.'
                    ],

                    [
                        'question' => 'Quel est l’objectif principal d’un système OLAP ?',
                        'choices' => [
                            'Faciliter l’analyse de grandes quantités de données',
                            'Gérer uniquement les authentifications',
                            'Remplacer les transactions OLTP',
                            'Gérer uniquement les fichiers système',
                        ],
                        'correct' => 0,
                        'explanation' => 'OLAP est orienté vers l’analyse, les agrégations et les requêtes décisionnelles.'
                    ],

                    [
                        'question' => 'Quelle architecture sépare généralement les données analytiques des données transactionnelles ?',
                        'choices' => [
                            'Une architecture avec un système analytique dédié, souvent alimenté depuis l’OLTP',
                            'Une architecture sans base de données',
                            'Une architecture utilisant uniquement des fichiers CSV',
                            'Une architecture sans ETL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les architectures décisionnelles séparent souvent les charges analytiques des charges transactionnelles.'
                    ],

                    [
                        'question' => 'Pourquoi les Foreign Keys sont-elles importantes dans une conception relationnelle ?',
                        'choices' => [
                            'Elles garantissent certaines relations entre les tables',
                            'Elles accélèrent automatiquement toutes les requêtes',
                            'Elles remplacent tous les index',
                            'Elles chiffrent les données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les Foreign Keys permettent notamment de garantir l’intégrité des relations entre les tables.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une table de faits dans un modèle décisionnel ?',
                        'choices' => [
                            'Une table contenant principalement des mesures liées à des événements métier',
                            'Une table contenant uniquement les utilisateurs',
                            'Une table contenant uniquement les permissions',
                            'Une table utilisée uniquement pour les logs système',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans un modèle dimensionnel, une table de faits contient généralement les mesures et les références vers les dimensions.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une dimension dans un modèle en étoile ?',
                        'choices' => [
                            'Fournir le contexte descriptif permettant d’analyser les faits',
                            'Remplacer les transactions',
                            'Stocker uniquement les index',
                            'Empêcher les agrégations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les dimensions fournissent le contexte descriptif comme le client, le produit, la date ou la région.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — TRANSACTIONS ET MVCC
            // ============================================================
            [
                'title' => 'Transactions, MVCC et concurrence',
                'description' => 'Quiz professionnel sur les mécanismes avancés de concurrence et de transactions.',
                'questions' => [

                    [
                        'question' => 'Que signifie MVCC ?',
                        'choices' => [
                            'Multi-Version Concurrency Control',
                            'Multi-Variable Command Control',
                            'Managed Version Connection Control',
                            'Multiple View Cache Control',
                        ],
                        'correct' => 0,
                        'explanation' => 'MVCC signifie Multi-Version Concurrency Control. PostgreSQL utilise ce mécanisme pour gérer efficacement la concurrence.'
                    ],

                    [
                        'question' => 'Quel est l’un des principaux avantages du MVCC ?',
                        'choices' => [
                            'Permettre à certaines lectures de ne pas bloquer les écritures de la même manière qu’un verrouillage classique',
                            'Supprimer toutes les transactions',
                            'Empêcher toute concurrence',
                            'Supprimer les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'MVCC permet notamment une meilleure concurrence entre lecteurs et écrivains.'
                    ],

                    [
                        'question' => 'Pourquoi PostgreSQL doit-il nettoyer les anciennes versions de lignes ?',
                        'choices' => [
                            'Pour récupérer l’espace occupé par les versions devenues inutiles',
                            'Pour supprimer les Primary Keys',
                            'Pour recréer toutes les tables',
                            'Pour désactiver MVCC',
                        ],
                        'correct' => 0,
                        'explanation' => 'MVCC produit différentes versions de lignes. Les anciennes versions qui ne sont plus nécessaires doivent être nettoyées.'
                    ],

                    [
                        'question' => 'Quel mécanisme PostgreSQL participe au nettoyage des anciennes versions de lignes ?',
                        'choices' => [
                            'VACUUM',
                            'REINDEX ONLY',
                            'DROP VERSION',
                            'CLEAN TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'VACUUM récupère notamment l’espace associé aux anciennes versions de lignes qui ne sont plus nécessaires.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une transaction reste ouverte très longtemps ?',
                        'choices' => [
                            'Elle peut empêcher le nettoyage de certaines anciennes versions de données',
                            'Elle supprime automatiquement la base',
                            'Elle désactive toutes les contraintes',
                            'Elle supprime les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une transaction longue peut conserver une ancienne visibilité et empêcher certaines opérations de nettoyage.'
                    ],

                    [
                        'question' => 'Quel niveau d’isolation PostgreSQL fournit une forte garantie de sérialisation logique ?',
                        'choices' => [
                            'SERIALIZABLE',
                            'READ SIMPLE',
                            'BASIC',
                            'UNSAFE',
                        ],
                        'correct' => 0,
                        'explanation' => 'SERIALIZABLE fournit le niveau d’isolation le plus strict parmi les niveaux proposés.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un deadlock ?',
                        'choices' => [
                            'Une situation où des transactions attendent mutuellement des ressources',
                            'Une transaction très rapide',
                            'Une erreur de syntaxe',
                            'Un type d’index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un deadlock apparaît lorsque plusieurs transactions se bloquent mutuellement en attendant des ressources.'
                    ],

                    [
                        'question' => 'Quelle pratique peut réduire le risque de deadlock ?',
                        'choices' => [
                            'Accéder aux ressources dans un ordre cohérent',
                            'Maintenir toutes les transactions ouvertes très longtemps',
                            'Créer des transactions imbriquées sans contrôle',
                            'Désactiver toutes les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un ordre d’accès cohérent aux ressources réduit les possibilités de cycles d’attente.'
                    ],

                    [
                        'question' => 'Pourquoi une transaction doit-elle être aussi courte que raisonnablement possible ?',
                        'choices' => [
                            'Pour réduire la durée de verrouillage et les effets sur la concurrence',
                            'Pour empêcher COMMIT',
                            'Pour supprimer les index',
                            'Pour désactiver MVCC',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des transactions plus courtes réduisent généralement la contention et les ressources maintenues.'
                    ],

                    [
                        'question' => 'Que doit faire une application lorsqu’une transaction échoue ?',
                        'choices' => [
                            'Gérer correctement l’erreur et effectuer un rollback lorsque nécessaire',
                            'Ignorer l’erreur',
                            'Supprimer la base',
                            'Continuer aveuglément toutes les opérations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une transaction échouée doit être correctement gérée afin de préserver la cohérence des données.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — PERFORMANCE
            // ============================================================
            [
                'title' => 'Optimisation et performances',
                'description' => 'Quiz professionnel sur l’analyse des performances SQL et PostgreSQL.',
                'questions' => [

                    [
                        'question' => 'Quelle commande est essentielle pour analyser le plan réel d’exécution d’une requête PostgreSQL ?',
                        'choices' => [
                            'EXPLAIN ANALYZE',
                            'SHOW PLAN ONLY',
                            'CHECK QUERY',
                            'PROFILE SQL ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXPLAIN ANALYZE exécute la requête et fournit des informations sur son exécution réelle.'
                    ],

                    [
                        'question' => 'Pourquoi comparer les estimated rows et actual rows dans un plan ?',
                        'choices' => [
                            'Pour détecter des estimations incorrectes pouvant influencer le choix du plan',
                            'Pour vérifier uniquement les noms des colonnes',
                            'Pour supprimer les statistiques',
                            'Pour désactiver l’optimiseur',
                        ],
                        'correct' => 0,
                        'explanation' => 'De grandes différences entre les estimations et les valeurs réelles peuvent indiquer des statistiques insuffisantes ou inadaptées.'
                    ],

                    [
                        'question' => 'Quel problème peut provoquer une mauvaise estimation de cardinalité ?',
                        'choices' => [
                            'Le choix d’un plan d’exécution inefficace',
                            'La suppression automatique des données',
                            'La disparition des Foreign Keys',
                            'La corruption obligatoire des index',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’optimiseur utilise les estimations de cardinalité pour choisir entre différents plans.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal de ANALYZE ?',
                        'choices' => [
                            'Collecter des statistiques sur les données',
                            'Créer une sauvegarde complète',
                            'Supprimer les anciennes tables',
                            'Créer automatiquement toutes les Foreign Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'ANALYZE collecte des statistiques utilisées par l’optimiseur PostgreSQL.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un query bottleneck ?',
                        'choices' => [
                            'Une partie du traitement qui limite significativement les performances',
                            'Une nouvelle table',
                            'Un type de Foreign Key',
                            'Une sauvegarde',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un bottleneck est un composant ou une opération qui limite les performances globales.'
                    ],

                    [
                        'question' => 'Pourquoi SELECT * peut-il être problématique dans certaines applications ?',
                        'choices' => [
                            'Il peut récupérer des colonnes inutiles et augmenter les données transférées',
                            'Il supprime automatiquement les colonnes',
                            'Il désactive les index',
                            'Il transforme la requête en DELETE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sélectionner uniquement les colonnes nécessaires peut réduire les I/O, le transfert et parfois le coût de traitement.'
                    ],

                    [
                        'question' => 'Pourquoi les requêtes N+1 sont-elles problématiques ?',
                        'choices' => [
                            'Elles peuvent générer un grand nombre de requêtes individuelles au lieu d’une stratégie plus efficace',
                            'Elles empêchent toute connexion',
                            'Elles suppriment les données',
                            'Elles créent toujours des deadlocks',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le problème N+1 peut multiplier les accès à la base et dégrader fortement les performances.'
                    ],

                    [
                        'question' => 'Quelle approche peut réduire un problème N+1 ?',
                        'choices' => [
                            'Utiliser une requête adaptée, une jointure ou un mécanisme d’eager loading selon le contexte',
                            'Créer une table par requête',
                            'Désactiver les Foreign Keys',
                            'Supprimer les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'La stratégie dépend du contexte, mais les jointures ou l’eager loading permettent souvent de réduire le nombre d’accès.'
                    ],

                    [
                        'question' => 'Pourquoi le cache peut-il améliorer les performances d’une application ?',
                        'choices' => [
                            'Il peut éviter de recalculer ou relire certaines données fréquemment demandées',
                            'Il remplace toujours la base de données',
                            'Il supprime toutes les transactions',
                            'Il garantit zéro latence',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le cache peut réduire le nombre d’accès à la base pour certaines données fréquemment consultées.'
                    ],

                    [
                        'question' => 'Quelle est une mauvaise pratique lors de l’optimisation d’une base ?',
                        'choices' => [
                            'Créer de nombreux index sans mesurer leur utilité',
                            'Analyser EXPLAIN ANALYZE',
                            'Mesurer avant et après',
                            'Vérifier les statistiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque index possède un coût. Les index doivent être ajoutés en fonction des besoins réels et des mesures.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — INDEXATION AVANCÉE
            // ============================================================
            [
                'title' => 'Indexation avancée PostgreSQL',
                'description' => 'Quiz professionnel sur les stratégies avancées d’indexation.',
                'questions' => [

                    [
                        'question' => 'Quel est le principal compromis lié aux index ?',
                        'choices' => [
                            'Ils accélèrent certaines lectures mais ajoutent un coût de stockage et de maintenance',
                            'Ils accélèrent toujours toutes les opérations',
                            'Ils empêchent les INSERT',
                            'Ils remplacent les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les index améliorent certaines recherches mais doivent également être maintenus lors des modifications.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un covering index ?',
                        'choices' => [
                            'Un index contenant suffisamment d’informations pour répondre à certaines requêtes sans accéder directement à toutes les lignes de la table',
                            'Un index couvrant plusieurs bases',
                            'Un index sans colonne',
                            'Un index de sauvegarde',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un covering index peut permettre de répondre à une requête directement depuis l’index dans certaines situations.'
                    ],

                    [
                        'question' => 'Quel mécanisme PostgreSQL peut permettre une lecture depuis l’index sans retourner systématiquement à la table ?',
                        'choices' => [
                            'Index Only Scan',
                            'Index Direct Delete',
                            'Tableless Scan',
                            'Pure Index Query',
                        ],
                        'correct' => 0,
                        'explanation' => 'Index Only Scan peut éviter certains accès à la table lorsque les conditions nécessaires sont réunies.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’un partial index ?',
                        'choices' => [
                            'Indexer uniquement un sous-ensemble pertinent des lignes',
                            'Indexer obligatoirement toute la base',
                            'Supprimer les lignes non indexées',
                            'Remplacer les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un partial index peut être très efficace lorsque les requêtes ciblent régulièrement un sous-ensemble précis.'
                    ],

                    [
                        'question' => 'Quel index est particulièrement adapté à certains types de recherches sur des ensembles de valeurs ou documents ?',
                        'choices' => [
                            'GIN',
                            'B-tree uniquement',
                            'Sequential',
                            'Heap',
                        ],
                        'correct' => 0,
                        'explanation' => 'GIN est adapté à certains scénarios où une ligne contient plusieurs valeurs indexables.'
                    ],

                    [
                        'question' => 'Quel index est couramment utilisé pour les recherches classiques d’égalité et de comparaison ?',
                        'choices' => [
                            'B-tree',
                            'GIN uniquement',
                            'GiST uniquement',
                            'Bitmap uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'B-tree est adapté à de nombreuses recherches classiques utilisant notamment l’égalité et les comparaisons.'
                    ],

                    [
                        'question' => 'Pourquoi une colonne très peu sélective peut-elle bénéficier moins d’un index ?',
                        'choices' => [
                            'Si beaucoup de lignes correspondent, le coût de l’index peut être moins intéressant qu’un parcours de table',
                            'Les index ne fonctionnent jamais sur cette colonne',
                            'PostgreSQL refuse automatiquement cette colonne',
                            'Les valeurs sont supprimées',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsque la sélection retourne une grande proportion des lignes, un Sequential Scan peut être plus efficace.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un index expressionnel ?',
                        'choices' => [
                            'Un index basé sur une expression calculée',
                            'Un index sans expression',
                            'Un index réservé aux Foreign Keys',
                            'Un index de sauvegarde',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL permet de créer des index sur des expressions telles que LOWER(column).'
                    ],

                    [
                        'question' => 'Pourquoi la colonne la plus à gauche d’un index multicolonne est-elle importante ?',
                        'choices' => [
                            'Certaines requêtes peuvent principalement exploiter le préfixe gauche de l’index',
                            'Elle est automatiquement supprimée',
                            'Elle devient une Primary Key',
                            'Elle est toujours chiffrée',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’ordre des colonnes influence fortement les requêtes pouvant utiliser efficacement un index multicolonne.'
                    ],

                    [
                        'question' => 'Quand un index peut-il devenir contre-productif ?',
                        'choices' => [
                            'Lorsqu’il est inutile ou coûteux à maintenir par rapport aux bénéfices obtenus',
                            'Dès qu’il contient une colonne',
                            'Toujours après un SELECT',
                            'Uniquement lorsqu’il est unique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index inutile consomme de l’espace et augmente le coût des opérations de modification.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — SÉCURITÉ
            // ============================================================
            [
                'title' => 'Sécurité avancée des bases de données',
                'description' => 'Quiz professionnel sur la sécurité, les permissions et la protection des données.',
                'questions' => [

                    [
                        'question' => 'Quel principe consiste à accorder uniquement les droits indispensables à un utilisateur ?',
                        'choices' => [
                            'Principe du moindre privilège',
                            'Principe du privilège maximal',
                            'Principe de duplication',
                            'Principe de transparence totale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe du moindre privilège réduit les droits au strict nécessaire.'
                    ],

                    [
                        'question' => 'Pourquoi les comptes applicatifs doivent-ils généralement avoir des permissions limitées ?',
                        'choices' => [
                            'Pour limiter l’impact d’une éventuelle compromission de l’application',
                            'Pour empêcher SELECT',
                            'Pour désactiver les transactions',
                            'Pour accélérer toutes les requêtes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un compte applicatif compromis avec peu de privilèges représente un risque plus limité.'
                    ],

                    [
                        'question' => 'Quel mécanisme PostgreSQL permet de contrôler l’accès aux lignes ?',
                        'choices' => [
                            'Row-Level Security',
                            'Row Password',
                            'Line Firewall',
                            'Record Lock Security',
                        ],
                        'correct' => 0,
                        'explanation' => 'Row-Level Security permet de définir des politiques d’accès au niveau des lignes.'
                    ],

                    [
                        'question' => 'Quelle méthode est recommandée pour éviter la SQL Injection ?',
                        'choices' => [
                            'Les requêtes paramétrées',
                            'La concaténation directe',
                            'Le stockage des requêtes dans les logs',
                            'La suppression des Foreign Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les requêtes paramétrées séparent les données utilisateur du code SQL.'
                    ],

                    [
                        'question' => 'Pourquoi le chiffrement des données au repos peut-il être important ?',
                        'choices' => [
                            'Il peut protéger les données stockées contre certains accès non autorisés aux supports',
                            'Il accélère toujours les requêtes',
                            'Il remplace les permissions',
                            'Il empêche les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le chiffrement au repos constitue une couche de protection supplémentaire pour les données stockées.'
                    ],

                    [
                        'question' => 'Pourquoi TLS est-il important pour les connexions à une base distante ?',
                        'choices' => [
                            'Il permet de protéger les communications réseau contre certaines interceptions',
                            'Il remplace les Foreign Keys',
                            'Il accélère les INSERT',
                            'Il crée les tables',
                        ],
                        'correct' => 0,
                        'explanation' => 'TLS protège les communications entre le client et le serveur contre l’écoute ou la modification du trafic.'
                    ],

                    [
                        'question' => 'Pourquoi les logs de sécurité doivent-ils être protégés ?',
                        'choices' => [
                            'Ils peuvent contenir des informations sensibles sur les utilisateurs et les activités',
                            'Ils ne contiennent jamais d’informations',
                            'Ils remplacent les sauvegardes',
                            'Ils empêchent SQL Injection',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les logs peuvent contenir des informations sensibles et doivent donc être protégés et contrôlés.'
                    ],

                    [
                        'question' => 'Pourquoi les sauvegardes doivent-elles être testées régulièrement ?',
                        'choices' => [
                            'Pour vérifier qu’elles peuvent réellement être restaurées',
                            'Pour augmenter leur taille',
                            'Pour supprimer les données originales',
                            'Pour désactiver les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sauvegarde non testée peut échouer au moment où elle devient nécessaire.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un audit de sécurité d’une base ?',
                        'choices' => [
                            'Une vérification structurée des accès, permissions, configurations et activités',
                            'Une simple sauvegarde',
                            'Une opération de VACUUM',
                            'Une création d’index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un audit examine les différents éléments susceptibles d’affecter la sécurité du système.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de stocker des secrets directement dans le code source ?',
                        'choices' => [
                            'Ils peuvent être exposés dans les dépôts, logs ou artefacts de déploiement',
                            'SQL interdit les secrets',
                            'Cela empêche SELECT',
                            'Cela désactive PostgreSQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les secrets doivent être gérés via des mécanismes adaptés comme les variables d’environnement ou un secret manager.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — BACKUP ET HAUTE DISPONIBILITÉ
            // ============================================================
            [
                'title' => 'Sauvegarde, restauration et haute disponibilité',
                'description' => 'Quiz professionnel sur les stratégies de sauvegarde, restauration et disponibilité.',
                'questions' => [

                    [
                        'question' => 'Quelle est la différence fondamentale entre backup et réplication ?',
                        'choices' => [
                            'Une sauvegarde sert notamment à restaurer un état antérieur tandis que la réplication maintient généralement une copie synchronisée ou proche du primaire',
                            'Ce sont toujours exactement la même chose',
                            'La réplication remplace obligatoirement les sauvegardes',
                            'Le backup ne contient jamais de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réplication améliore notamment la disponibilité, tandis que les sauvegardes sont essentielles pour la restauration et la récupération après incident.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le RPO ?',
                        'choices' => [
                            'Recovery Point Objective',
                            'Recovery Process Operation',
                            'Remote PostgreSQL Object',
                            'Replication Performance Order',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le RPO définit la quantité maximale de données que l’organisation accepte potentiellement de perdre.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le RTO ?',
                        'choices' => [
                            'Recovery Time Objective',
                            'Replication Transaction Order',
                            'Restore Table Operation',
                            'Remote Transaction Object',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le RTO représente la durée cible maximale pour restaurer le service après une interruption.'
                    ],

                    [
                        'question' => 'Pourquoi une stratégie de backup doit-elle être documentée ?',
                        'choices' => [
                            'Pour définir clairement les procédures, fréquences, responsabilités et restaurations',
                            'Pour empêcher les sauvegardes',
                            'Pour supprimer les logs',
                            'Pour remplacer les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une stratégie documentée facilite la continuité et réduit les erreurs lors d’un incident.'
                    ],

                    [
                        'question' => 'Pourquoi conserver plusieurs copies des sauvegardes ?',
                        'choices' => [
                            'Pour réduire le risque de perdre toutes les copies lors d’un même incident',
                            'Pour ralentir les restaurations',
                            'Pour supprimer les données originales',
                            'Pour éviter toute sécurité',
                        ],
                        'correct' => 0,
                        'explanation' => 'La redondance des sauvegardes réduit le risque de perte totale.'
                    ],

                    [
                        'question' => 'Pourquoi une sauvegarde stockée uniquement sur le même serveur est-elle risquée ?',
                        'choices' => [
                            'Une panne ou compromission du serveur peut affecter simultanément les données et la sauvegarde',
                            'Elle est toujours plus rapide',
                            'Elle empêche PostgreSQL de démarrer',
                            'Elle supprime les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une stratégie robuste conserve généralement des copies sur des emplacements ou supports distincts.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une restauration point-in-time ?',
                        'choices' => [
                            'Restaurer la base vers un état correspondant à un moment précis',
                            'Restaurer uniquement une colonne',
                            'Créer une nouvelle table vide',
                            'Supprimer les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une restauration point-in-time permet de revenir à un instant déterminé lorsque les conditions nécessaires sont disponibles.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’une architecture haute disponibilité ?',
                        'choices' => [
                            'Réduire la durée d’interruption du service lors de certaines pannes',
                            'Supprimer les sauvegardes',
                            'Éviter toutes les erreurs applicatives',
                            'Remplacer les permissions',
                        ],
                        'correct' => 0,
                        'explanation' => 'La haute disponibilité vise à maintenir le service malgré certaines défaillances.'
                    ],

                    [
                        'question' => 'Pourquoi un système répliqué ne dispense-t-il pas nécessairement de backup ?',
                        'choices' => [
                            'Une erreur ou suppression peut être répliquée vers les autres copies',
                            'Les réplications ne contiennent aucune donnée',
                            'Les backups sont uniquement destinés aux index',
                            'PostgreSQL interdit la réplication',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une réplication peut reproduire une erreur logique, tandis qu’une sauvegarde peut permettre de revenir à un état antérieur.'
                    ],

                    [
                        'question' => 'Quelle pratique est essentielle pour valider une stratégie de récupération ?',
                        'choices' => [
                            'Effectuer régulièrement des tests de restauration',
                            'Créer uniquement des backups',
                            'Ne jamais tester les sauvegardes',
                            'Supprimer les anciennes sauvegardes immédiatement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les tests de restauration permettent de vérifier que les sauvegardes sont réellement exploitables.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — RÉPLICATION ET SCALING
            // ============================================================
            [
                'title' => 'Réplication et scaling',
                'description' => 'Quiz professionnel sur la réplication, le scaling et les architectures distribuées.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal de la réplication d’une base ?',
                        'choices' => [
                            'Maintenir une ou plusieurs copies des données sur d’autres instances',
                            'Supprimer les données du primaire',
                            'Remplacer SQL',
                            'Supprimer les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réplication permet de maintenir des copies des données sur plusieurs instances.'
                    ],

                    [
                        'question' => 'Quel avantage peut apporter une read replica ?',
                        'choices' => [
                            'Décharger certaines lectures du serveur principal',
                            'Écrire toujours plus vite sur le primaire',
                            'Remplacer les backups',
                            'Empêcher toute panne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une read replica peut servir certaines lectures et réduire la charge sur le serveur principal.'
                    ],

                    [
                        'question' => 'Quel problème peut exister avec une réplication asynchrone ?',
                        'choices' => [
                            'Une replica peut avoir un retard par rapport au primaire',
                            'Les données ne sont jamais copiées',
                            'Les SELECT sont impossibles',
                            'Les transactions sont interdites',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réplication asynchrone peut introduire un replication lag.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le replication lag ?',
                        'choices' => [
                            'Le retard entre l’état du primaire et celui d’une replica',
                            'Le temps nécessaire pour créer un index',
                            'Le temps d’un VACUUM',
                            'La durée d’un backup uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le replication lag mesure le retard d’une replica par rapport à la source.'
                    ],

                    [
                        'question' => 'Pourquoi le scaling horizontal peut-il être complexe pour une base relationnelle ?',
                        'choices' => [
                            'Les transactions, relations et cohérences distribuées deviennent plus difficiles à gérer',
                            'SQL ne possède aucune table',
                            'Les index disparaissent automatiquement',
                            'Les Foreign Keys deviennent toujours impossibles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Distribuer les données entre plusieurs nœuds ajoute de la complexité notamment pour la cohérence et les transactions.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le sharding ?',
                        'choices' => [
                            'La répartition des données entre plusieurs nœuds selon une stratégie de partitionnement',
                            'La sauvegarde d’une table',
                            'La création d’un index',
                            'Le chiffrement d’une colonne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le sharding répartit les données entre plusieurs serveurs ou nœuds.'
                    ],

                    [
                        'question' => 'Quel est un risque d’une mauvaise stratégie de sharding ?',
                        'choices' => [
                            'Créer des hot spots ou une répartition déséquilibrée de la charge',
                            'Supprimer automatiquement toutes les données',
                            'Désactiver SQL',
                            'Empêcher les SELECT',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une mauvaise clé de distribution peut concentrer une grande partie de la charge sur un seul nœud.'
                    ],

                    [
                        'question' => 'Pourquoi une read replica ne doit-elle pas être considérée automatiquement comme parfaitement synchronisée ?',
                        'choices' => [
                            'La réplication peut avoir un délai',
                            'Une replica ne contient jamais de données',
                            'Les replicas sont toujours offline',
                            'PostgreSQL interdit les replicas',
                        ],
                        'correct' => 0,
                        'explanation' => 'Selon le mode de réplication, une replica peut présenter un retard.'
                    ],

                    [
                        'question' => 'Quel mécanisme peut être utilisé devant plusieurs serveurs pour distribuer les connexions ?',
                        'choices' => [
                            'Un load balancer ou un composant de routage adapté',
                            'Un index B-tree',
                            'Une Foreign Key',
                            'Une VIEW',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un composant de distribution peut répartir les connexions selon l’architecture choisie.'
                    ],

                    [
                        'question' => 'Pourquoi le scaling doit-il être précédé d’une analyse des performances ?',
                        'choices' => [
                            'Pour identifier la véritable cause du problème avant d’ajouter de la complexité',
                            'Pour supprimer les statistiques',
                            'Pour désactiver les index',
                            'Pour éviter toute mesure',
                        ],
                        'correct' => 0,
                        'explanation' => 'Ajouter des serveurs ne corrige pas nécessairement un problème causé par une mauvaise requête ou une mauvaise conception.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CAS PRATIQUES PROFESSIONNELS
            // ============================================================
            [
                'title' => 'Cas pratiques professionnels SQL',
                'description' => 'Quiz final basé sur des situations réelles de développement et administration de bases de données.',
                'questions' => [

                    [
                        'question' => 'Une API devient lente après le passage de 10 000 à 10 millions de lignes. Quelle démarche est la plus professionnelle ?',
                        'choices' => [
                            'Mesurer les requêtes, analyser les plans et identifier les véritables bottlenecks',
                            'Créer un index sur chaque colonne',
                            'Supprimer les contraintes',
                            'Changer toutes les colonnes en TEXT',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une démarche professionnelle commence par la mesure et l’analyse avant toute modification.'
                    ],

                    [
                        'question' => 'Une application effectue 500 requêtes SQL pour afficher une seule page. Quelle situation faut-il rechercher en priorité ?',
                        'choices' => [
                            'Un problème N+1 ou une mauvaise stratégie d’accès aux données',
                            'Un problème de Primary Key uniquement',
                            'Un problème de chiffrement uniquement',
                            'Un problème de sauvegarde',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un grand nombre de requêtes pour une seule page peut indiquer un problème N+1 ou une mauvaise conception des accès.'
                    ],

                    [
                        'question' => 'Une entreprise exige un RPO proche de zéro. Quelle caractéristique devient particulièrement importante ?',
                        'choices' => [
                            'Une stratégie de réplication et de récupération adaptée à cette exigence',
                            'Un simple export CSV mensuel',
                            'Un seul backup annuel',
                            'La suppression des logs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un RPO très faible nécessite une stratégie permettant de limiter fortement la perte potentielle de données.'
                    ],

                    [
                        'question' => 'Une entreprise doit pouvoir restaurer le système dans un délai très court. Quel objectif est directement concerné ?',
                        'choices' => [
                            'RTO',
                            'RPO',
                            'TTL',
                            'MVCC',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le RTO définit le délai cible de restauration du service.'
                    ],

                    [
                        'question' => 'Une requête utilise un index mais reste très lente. Quelle conclusion est correcte ?',
                        'choices' => [
                            'La présence d’un index ne garantit pas qu’il soit utilisé de manière optimale',
                            'Tous les index rendent toutes les requêtes rapides',
                            'L’index est forcément corrompu',
                            'Il faut supprimer toutes les autres tables',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le choix du plan dépend notamment de la sélectivité, des statistiques, du coût et de la structure de la requête.'
                    ],

                    [
                        'question' => 'Une application critique utilise un compte PostgreSQL avec tous les privilèges. Quelle recommandation est la plus appropriée ?',
                        'choices' => [
                            'Créer un compte applicatif avec uniquement les privilèges nécessaires',
                            'Donner encore plus de privilèges',
                            'Partager le compte avec les développeurs',
                            'Supprimer toutes les permissions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe du moindre privilège réduit les conséquences d’une éventuelle compromission.'
                    ],

                    [
                        'question' => 'Une suppression accidentelle est immédiatement répliquée sur toutes les replicas. Quelle solution aurait permis un retour à un état antérieur ?',
                        'choices' => [
                            'Une stratégie de backup et de restauration adaptée',
                            'Un nouvel index',
                            'Une Foreign Key',
                            'Une Window Function',
                        ],
                        'correct' => 0,
                        'explanation' => 'La réplication seule ne protège pas contre toutes les erreurs logiques. Les backups permettent notamment de restaurer un état antérieur.'
                    ],

                    [
                        'question' => 'Une table d’événements contient plusieurs milliards de lignes et les requêtes filtrent principalement par date. Quelle stratégie peut être étudiée ?',
                        'choices' => [
                            'Partitionnement par RANGE sur la date, accompagné d’une stratégie d’indexation adaptée',
                            'Créer une table pour chaque événement',
                            'Supprimer les index',
                            'Utiliser uniquement SELECT *',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement temporel peut réduire le volume de données parcouru et faciliter la gestion des grandes tables.'
                    ],

                    [
                        'question' => 'Une équipe veut ajouter 20 index pour résoudre une lenteur sans analyser la requête. Quelle réponse est la plus professionnelle ?',
                        'choices' => [
                            'Analyser d’abord le comportement réel et mesurer l’impact de chaque modification',
                            'Créer immédiatement les 20 index',
                            'Supprimer la base',
                            'Désactiver l’optimiseur',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’optimisation doit être guidée par les mesures afin d’éviter d’ajouter une complexité inutile.'
                    ],

                    [
                        'question' => 'Après une optimisation, quel élément permet de confirmer objectivement le gain ?',
                        'choices' => [
                            'Une comparaison mesurée des temps, ressources et plans avant et après',
                            'Une impression subjective du développeur',
                            'Le nombre de lignes dans le code',
                            'Le nombre de commentaires SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une optimisation professionnelle doit être validée par des mesures comparables avant et après.'
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