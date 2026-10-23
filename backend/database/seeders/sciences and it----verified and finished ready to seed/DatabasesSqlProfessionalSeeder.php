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
            [
                            'title' => 'Conception et architecture de données',
                            'description' => 'Quiz de niveau professionnel : Conception et architecture de données.',
                            'questions' => [
                                [
                                    'question' => 'L’objectif principal de la normalisation dans une base relationnelle consiste à:',
                                    'choices' => [
                                        'Augmenter volontairement la duplication des données',
                                        'Remplacer toutes les relations par des fichiers',
                                        'Réduire les redondances et les anomalies de mise à jour',
                                        'Supprimer les contraintes d’intégrité'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'La normalisation vise principalement à réduire la redondance et à éviter les anomalies lors des opérations INSERT, UPDATE et DELETE.'
                                ],
                                [
                                    'question' => 'Dans quel cas une dénormalisation peut-elle être justifiée?',
                                    'choices' => [
                                        'Lorsqu’un gain de performance mesuré justifie une certaine redondance',
                                        'Toujours dans une base professionnelle',
                                        'Uniquement lorsqu’il n’existe aucune relation',
                                        'Pour supprimer toutes les Primary Keys'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'La dénormalisation peut être utilisée lorsqu’elle apporte un bénéfice mesurable, notamment pour certaines charges de lecture.'
                                ],
                                [
                                    'question' => 'Une contrainte d’intégrité référentielle désigne:',
                                    'choices' => [
                                        'Une règle concernant uniquement les index',
                                        'Une règle de formatage des chaînes',
                                        'Une règle de performance',
                                        'Une règle garantissant la cohérence entre une Foreign Key et une clé référencée'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'L’intégrité référentielle garantit notamment qu’une Foreign Key référence une valeur valide dans la table cible.'
                                ],
                                [
                                    'question' => 'Pourquoi les clés naturelles peuvent-elles parfois être remplacées par des clés artificielles?',
                                    'choices' => [
                                        'Pour supprimer toutes les contraintes',
                                        'Pour obtenir un identifiant stable et indépendant des données métier',
                                        'Pour empêcher les relations',
                                        'Pour éviter toute utilisation de SQL'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une clé artificielle, comme un identifiant numérique, peut fournir une identité stable même lorsque les attributs métier évoluent.'
                                ],
                                [
                                    'question' => 'Un modèle OLTP désigne:',
                                    'choices' => [
                                        'Un modèle exclusivement destiné au Machine Learning',
                                        'Un modèle orienté vers les transactions opérationnelles fréquentes',
                                        'Un système uniquement destiné aux sauvegardes',
                                        'Un système sans transactions'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'OLTP signifie Online Transaction Processing et concerne les applications transactionnelles.'
                                ],
                                [
                                    'question' => 'Quel est l’objectif principal d’un système OLAP?',
                                    'choices' => [
                                        'Gérer uniquement les authentifications',
                                        'Remplacer les transactions OLTP',
                                        'Gérer uniquement les fichiers système',
                                        'Faciliter l’analyse de grandes quantités de données'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'OLAP est orienté vers l’analyse, les agrégations et les requêtes décisionnelles.'
                                ],
                                [
                                    'question' => 'Quelle architecture sépare généralement les données analytiques des données transactionnelles?',
                                    'choices' => [
                                        'Une architecture avec un système analytique dédié, souvent alimenté depuis l’OLTP',
                                        'Une architecture sans base de données',
                                        'Une architecture utilisant uniquement des fichiers CSV',
                                        'Une architecture sans ETL'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les architectures décisionnelles séparent souvent les charges analytiques des charges transactionnelles.'
                                ],
                                [
                                    'question' => 'Pourquoi les Foreign Keys sont-elles importantes dans une conception relationnelle?',
                                    'choices' => [
                                        'Elles accélèrent automatiquement toutes les requêtes',
                                        'Elles remplacent tous les index',
                                        'Elles garantissent certaines relations entre les tables',
                                        'Elles chiffrent les données'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Les Foreign Keys permettent notamment de garantir l’intégrité des relations entre les tables.'
                                ],
                                [
                                    'question' => 'Une table de faits dans un modèle décisionnel désigne:',
                                    'choices' => [
                                        'Une table contenant uniquement les utilisateurs',
                                        'Une table contenant uniquement les permissions',
                                        'Une table utilisée uniquement pour les logs système',
                                        'Une table contenant principalement des mesures liées à des événements métier'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Dans un modèle dimensionnel, une table de faits contient généralement les mesures et les références vers les dimensions.'
                                ],
                                [
                                    'question' => 'Quel est le rôle d’une dimension dans un modèle en étoile?',
                                    'choices' => [
                                        'Fournir le contexte descriptif permettant d’analyser les faits',
                                        'Remplacer les transactions',
                                        'Stocker uniquement les index',
                                        'Empêcher les agrégations'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les dimensions fournissent le contexte descriptif comme le client, le produit, la date ou la région.'
                                ]
                            ]
                        ]
            [
                            'title' => 'MVCC, transactions et concurrence',
                            'description' => 'Quiz de niveau professionnel : MVCC, transactions et concurrence.',
                            'questions' => [
                                [
                                    'question' => 'Développez le sigle « MVCC »:',
                                    'choices' => [
                                        'Multi-Variable Command Control',
                                        'Managed Version Connection Control',
                                        'Multi-Version Concurrency Control',
                                        'Multiple View Cache Control'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'MVCC signifie Multi-Version Concurrency Control. PostgreSQL utilise ce mécanisme pour gérer efficacement la concurrence.'
                                ],
                                [
                                    'question' => 'Quel est l’un des principaux avantages du MVCC?',
                                    'choices' => [
                                        'Permettre à certaines lectures de ne pas bloquer les écritures de la même manière qu’un verrouillage classique',
                                        'Supprimer toutes les transactions',
                                        'Empêcher toute concurrence',
                                        'Supprimer les index'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'MVCC permet notamment une meilleure concurrence entre lecteurs et écrivains.'
                                ],
                                [
                                    'question' => 'Pourquoi PostgreSQL doit-il nettoyer les anciennes versions de lignes?',
                                    'choices' => [
                                        'Pour supprimer les Primary Keys',
                                        'Pour recréer toutes les tables',
                                        'Pour désactiver MVCC',
                                        'Pour récupérer l’espace occupé par les versions devenues inutiles'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'MVCC produit différentes versions de lignes. Les anciennes versions qui ne sont plus nécessaires doivent être nettoyées.'
                                ],
                                [
                                    'question' => 'Quel mécanisme PostgreSQL participe au nettoyage des anciennes versions de lignes?',
                                    'choices' => [
                                        'REINDEX ONLY',
                                        'VACUUM',
                                        'DROP VERSION',
                                        'CLEAN TABLE'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'VACUUM marque l’espace occupé par les anciennes versions de lignes afin qu’il puisse être réutilisé par la base. Une exécution standard ne restitue généralement pas cet espace au système d’exploitation.'
                                ],
                                [
                                    'question' => 'Quel problème peut apparaître lorsqu’une transaction reste ouverte très longtemps?',
                                    'choices' => [
                                        'Elle supprime automatiquement la base',
                                        'Elle peut empêcher le nettoyage de certaines anciennes versions de données',
                                        'Elle désactive toutes les contraintes',
                                        'Elle supprime les index'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une transaction longue peut conserver une ancienne visibilité et empêcher certaines opérations de nettoyage.'
                                ],
                                [
                                    'question' => 'Quel niveau d’isolation PostgreSQL fournit une forte garantie de sérialisation logique?',
                                    'choices' => [
                                        'READ SIMPLE',
                                        'BASIC',
                                        'UNSAFE',
                                        'SERIALIZABLE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'SERIALIZABLE fournit le niveau d’isolation le plus strict parmi les niveaux proposés.'
                                ],
                                [
                                    'question' => 'Un deadlock désigne:',
                                    'choices' => [
                                        'Une situation où des transactions attendent mutuellement des ressources',
                                        'Une transaction très rapide',
                                        'Une erreur de syntaxe',
                                        'Un type d’index'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un deadlock apparaît lorsque plusieurs transactions se bloquent mutuellement en attendant des ressources.'
                                ],
                                [
                                    'question' => 'Quelle pratique peut réduire le risque de deadlock?',
                                    'choices' => [
                                        'Maintenir toutes les transactions ouvertes très longtemps',
                                        'Créer des transactions imbriquées sans contrôle',
                                        'Accéder aux ressources dans un ordre cohérent',
                                        'Désactiver toutes les contraintes'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Un ordre d’accès cohérent aux ressources réduit les possibilités de cycles d’attente.'
                                ],
                                [
                                    'question' => 'Pourquoi une transaction doit-elle être aussi courte que raisonnablement possible?',
                                    'choices' => [
                                        'Pour empêcher COMMIT',
                                        'Pour supprimer les index',
                                        'Pour désactiver MVCC',
                                        'Pour réduire la durée de verrouillage et les effets sur la concurrence'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Des transactions plus courtes réduisent généralement la contention et les ressources maintenues.'
                                ],
                                [
                                    'question' => 'Que doit faire une application lorsqu’une transaction échoue?',
                                    'choices' => [
                                        'Gérer correctement l’erreur et effectuer un rollback lorsque nécessaire',
                                        'Ignorer l’erreur',
                                        'Supprimer la base',
                                        'Continuer aveuglément toutes les opérations'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une transaction échouée doit être correctement gérée afin de préserver la cohérence des données.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Mesure des performances et optimisation',
                            'description' => 'Quiz de niveau professionnel : Mesure des performances et optimisation.',
                            'questions' => [
                                [
                                    'question' => 'Quelle commande est essentielle pour analyser le plan réel d’exécution d’une requête PostgreSQL?',
                                    'choices' => [
                                        'SHOW PLAN ONLY',
                                        'CHECK QUERY',
                                        'EXPLAIN ANALYZE',
                                        'PROFILE SQL ONLY'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Dans PostgreSQL, EXPLAIN ANALYZE exécute réellement la requête avant d’en afficher les mesures. Une instruction qui modifie les données produira aussi ses effets.'
                                ],
                                [
                                    'question' => 'Pourquoi comparer les estimated rows et actual rows dans un plan?',
                                    'choices' => [
                                        'Pour détecter des estimations incorrectes pouvant influencer le choix du plan',
                                        'Pour vérifier uniquement les noms des colonnes',
                                        'Pour supprimer les statistiques',
                                        'Pour désactiver l’optimiseur'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'De grandes différences entre les estimations et les valeurs réelles peuvent indiquer des statistiques insuffisantes ou inadaptées.'
                                ],
                                [
                                    'question' => 'Quel problème peut provoquer une mauvaise estimation de cardinalité?',
                                    'choices' => [
                                        'La suppression automatique des données',
                                        'La disparition des Foreign Keys',
                                        'La corruption obligatoire des index',
                                        'Le choix d’un plan d’exécution inefficace'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'L’optimiseur utilise les estimations de cardinalité pour choisir entre différents plans.'
                                ],
                                [
                                    'question' => 'Le rôle principal de ANALYZE consiste à:',
                                    'choices' => [
                                        'Créer une sauvegarde complète',
                                        'Collecter des statistiques sur les données',
                                        'Supprimer les anciennes tables',
                                        'Créer automatiquement toutes les Foreign Keys'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'ANALYZE collecte des statistiques utilisées par l’optimiseur PostgreSQL.'
                                ],
                                [
                                    'question' => 'Un query bottleneck désigne:',
                                    'choices' => [
                                        'Une nouvelle table',
                                        'Une partie du traitement qui limite significativement les performances',
                                        'Un type de Foreign Key',
                                        'Une sauvegarde'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Un bottleneck est un composant ou une opération qui limite les performances globales.'
                                ],
                                [
                                    'question' => 'Pourquoi SELECT * peut-il être problématique dans certaines applications?',
                                    'choices' => [
                                        'Il supprime automatiquement les colonnes',
                                        'Il désactive les index',
                                        'Il transforme la requête en DELETE',
                                        'Il peut récupérer des colonnes inutiles et augmenter les données transférées'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Sélectionner uniquement les colonnes nécessaires peut réduire les I/O, le transfert et parfois le coût de traitement.'
                                ],
                                [
                                    'question' => 'Pourquoi les requêtes N+1 sont-elles problématiques?',
                                    'choices' => [
                                        'Elles peuvent générer un grand nombre de requêtes individuelles au lieu d’une stratégie plus efficace',
                                        'Elles empêchent toute connexion',
                                        'Elles suppriment les données',
                                        'Elles créent toujours des deadlocks'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le problème N+1 peut multiplier les accès à la base et dégrader fortement les performances.'
                                ],
                                [
                                    'question' => 'Quelle approche peut réduire un problème N+1?',
                                    'choices' => [
                                        'Créer une table par requête',
                                        'Désactiver les Foreign Keys',
                                        'Utiliser une requête adaptée, une jointure ou un mécanisme d’eager loading selon le contexte',
                                        'Supprimer les index'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'La stratégie dépend du contexte, mais les jointures ou l’eager loading permettent souvent de réduire le nombre d’accès.'
                                ],
                                [
                                    'question' => 'Pourquoi le cache peut-il améliorer les performances d’une application?',
                                    'choices' => [
                                        'Il remplace toujours la base de données',
                                        'Il supprime toutes les transactions',
                                        'Il garantit zéro latence',
                                        'Il peut éviter de recalculer ou relire certaines données fréquemment demandées'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Le cache peut réduire le nombre d’accès à la base pour certaines données fréquemment consultées.'
                                ],
                                [
                                    'question' => 'Quelle est une mauvaise pratique lors de l’optimisation d’une base?',
                                    'choices' => [
                                        'Créer de nombreux index sans mesurer leur utilité',
                                        'Analyser EXPLAIN ANALYZE',
                                        'Mesurer avant et après',
                                        'Vérifier les statistiques'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Chaque index possède un coût. Les index doivent être ajoutés en fonction des besoins réels et des mesures.'
                                ],
                                [
                                    'question' => 'Une API devient lente après le passage de 10 000 à 10 millions de lignes. Quelle démarche est la plus professionnelle?',
                                    'choices' => [
                                        'Créer un index sur chaque colonne',
                                        'Mesurer les requêtes, analyser les plans et identifier les véritables bottlenecks',
                                        'Supprimer les contraintes',
                                        'Changer toutes les colonnes en TEXT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une démarche professionnelle commence par la mesure et l’analyse avant toute modification.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Stratégies d’indexation PostgreSQL',
                            'description' => 'Quiz de niveau professionnel : Stratégies d’indexation PostgreSQL.',
                            'questions' => [
                                [
                                    'question' => 'Quel est le principal compromis lié aux index?',
                                    'choices' => [
                                        'Ils accélèrent toujours toutes les opérations',
                                        'Ils empêchent les INSERT',
                                        'Ils accélèrent certaines lectures mais ajoutent un coût de stockage et de maintenance',
                                        'Ils remplacent les transactions'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Les index améliorent certaines recherches mais doivent également être maintenus lors des modifications.'
                                ],
                                [
                                    'question' => 'Un covering index désigne:',
                                    'choices' => [
                                        'Un index contenant suffisamment d’informations pour répondre à certaines requêtes sans accéder directement à toutes les lignes de la table',
                                        'Un index couvrant plusieurs bases',
                                        'Un index sans colonne',
                                        'Un index de sauvegarde'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un covering index peut permettre de répondre à une requête directement depuis l’index dans certaines situations.'
                                ],
                                [
                                    'question' => 'Quel mécanisme PostgreSQL peut permettre une lecture depuis l’index sans retourner systématiquement à la table?',
                                    'choices' => [
                                        'Index Direct Delete',
                                        'Tableless Scan',
                                        'Pure Index Query',
                                        'Index Only Scan'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Index Only Scan peut éviter certains accès à la table lorsque les conditions nécessaires sont réunies.'
                                ],
                                [
                                    'question' => 'Quel est l’intérêt d’un partial index?',
                                    'choices' => [
                                        'Indexer obligatoirement toute la base',
                                        'Indexer uniquement un sous-ensemble pertinent des lignes',
                                        'Supprimer les lignes non indexées',
                                        'Remplacer les transactions'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Un partial index peut être très efficace lorsque les requêtes ciblent régulièrement un sous-ensemble précis.'
                                ],
                                [
                                    'question' => 'Quel index est particulièrement adapté à certains types de recherches sur des ensembles de valeurs ou documents?',
                                    'choices' => [
                                        'B-tree uniquement',
                                        'GIN',
                                        'Sequential',
                                        'Heap'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'GIN est adapté à certains scénarios où une ligne contient plusieurs valeurs indexables.'
                                ],
                                [
                                    'question' => 'Quel index est couramment utilisé pour les recherches classiques d’égalité et de comparaison?',
                                    'choices' => [
                                        'GIN uniquement',
                                        'GiST uniquement',
                                        'Bitmap uniquement',
                                        'B-tree'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'B-tree est adapté à de nombreuses recherches classiques utilisant notamment l’égalité et les comparaisons.'
                                ],
                                [
                                    'question' => 'Pourquoi une colonne très peu sélective peut-elle bénéficier moins d’un index?',
                                    'choices' => [
                                        'Si beaucoup de lignes correspondent, le coût de l’index peut être moins intéressant qu’un parcours de table',
                                        'Les index ne fonctionnent jamais sur cette colonne',
                                        'PostgreSQL refuse automatiquement cette colonne',
                                        'Les valeurs sont supprimées'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Lorsque la sélection retourne une grande proportion des lignes, un Sequential Scan peut être plus efficace.'
                                ],
                                [
                                    'question' => 'Un index expressionnel désigne:',
                                    'choices' => [
                                        'Un index sans expression',
                                        'Un index réservé aux Foreign Keys',
                                        'Un index basé sur une expression calculée',
                                        'Un index de sauvegarde'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'PostgreSQL permet de créer des index sur des expressions telles que LOWER(column).'
                                ],
                                [
                                    'question' => 'Pourquoi la colonne la plus à gauche d’un index multicolonne est-elle importante?',
                                    'choices' => [
                                        'Elle est automatiquement supprimée',
                                        'Elle devient une Primary Key',
                                        'Elle est toujours chiffrée',
                                        'Certaines requêtes peuvent principalement exploiter le préfixe gauche de l’index'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'L’ordre des colonnes influence fortement les requêtes pouvant utiliser efficacement un index multicolonne.'
                                ],
                                [
                                    'question' => 'Quand un index peut-il devenir contre-productif?',
                                    'choices' => [
                                        'Lorsqu’il est inutile ou coûteux à maintenir par rapport aux bénéfices obtenus',
                                        'Dès qu’il contient une colonne',
                                        'Toujours après un SELECT',
                                        'Uniquement lorsqu’il est unique'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un index inutile consomme de l’espace et augmente le coût des opérations de modification.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Sécurité et gestion des accès',
                            'description' => 'Quiz de niveau professionnel : Sécurité et gestion des accès.',
                            'questions' => [
                                [
                                    'question' => 'Pour limiter un compte aux droits strictement nécessaires, appliquez le principe du:',
                                    'choices' => [
                                        'Principe du privilège maximal',
                                        'Principe de duplication',
                                        'Principe du moindre privilège',
                                        'Principe de transparence totale'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Le principe du moindre privilège réduit les droits au strict nécessaire.'
                                ],
                                [
                                    'question' => 'Pourquoi les comptes applicatifs doivent-ils généralement avoir des permissions limitées?',
                                    'choices' => [
                                        'Pour limiter l’impact d’une éventuelle compromission de l’application',
                                        'Pour empêcher SELECT',
                                        'Pour désactiver les transactions',
                                        'Pour accélérer toutes les requêtes'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un compte applicatif compromis avec peu de privilèges représente un risque plus limité.'
                                ],
                                [
                                    'question' => 'Quel mécanisme PostgreSQL permet de contrôler l’accès aux lignes?',
                                    'choices' => [
                                        'Row Password',
                                        'Line Firewall',
                                        'Record Lock Security',
                                        'Row-Level Security'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Row-Level Security permet de définir des politiques d’accès au niveau des lignes.'
                                ],
                                [
                                    'question' => 'Quelle méthode est recommandée pour éviter la SQL Injection?',
                                    'choices' => [
                                        'La concaténation directe',
                                        'Les requêtes paramétrées',
                                        'Le stockage des requêtes dans les logs',
                                        'La suppression des Foreign Keys'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Les requêtes paramétrées séparent les données utilisateur du code SQL.'
                                ],
                                [
                                    'question' => 'Pourquoi le chiffrement des données au repos peut-il être important?',
                                    'choices' => [
                                        'Il accélère toujours les requêtes',
                                        'Il peut protéger les données stockées contre certains accès non autorisés aux supports',
                                        'Il remplace les permissions',
                                        'Il empêche les transactions'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Le chiffrement au repos constitue une couche de protection supplémentaire pour les données stockées.'
                                ],
                                [
                                    'question' => 'Pourquoi TLS est-il important pour les connexions à une base distante?',
                                    'choices' => [
                                        'Il remplace les Foreign Keys',
                                        'Il accélère les INSERT',
                                        'Il crée les tables',
                                        'Il permet de protéger les communications réseau contre certaines interceptions'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'TLS protège les communications entre le client et le serveur contre l’écoute ou la modification du trafic.'
                                ],
                                [
                                    'question' => 'Pourquoi les logs de sécurité doivent-ils être protégés?',
                                    'choices' => [
                                        'Ils peuvent contenir des informations sensibles sur les utilisateurs et les activités',
                                        'Ils ne contiennent jamais d’informations',
                                        'Ils remplacent les sauvegardes',
                                        'Ils empêchent SQL Injection'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les logs peuvent contenir des informations sensibles et doivent donc être protégés et contrôlés.'
                                ],
                                [
                                    'question' => 'Pourquoi les sauvegardes doivent-elles être testées régulièrement?',
                                    'choices' => [
                                        'Pour augmenter leur taille',
                                        'Pour supprimer les données originales',
                                        'Pour vérifier qu’elles peuvent réellement être restaurées',
                                        'Pour désactiver les transactions'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une sauvegarde non testée peut échouer au moment où elle devient nécessaire.'
                                ],
                                [
                                    'question' => 'Un audit de sécurité d’une base désigne:',
                                    'choices' => [
                                        'Une simple sauvegarde',
                                        'Une opération de VACUUM',
                                        'Une création d’index',
                                        'Une vérification structurée des accès, permissions, configurations et activités'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Un audit examine les différents éléments susceptibles d’affecter la sécurité du système.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il éviter de stocker des secrets directement dans le code source?',
                                    'choices' => [
                                        'Ils peuvent être exposés dans les dépôts, logs ou artefacts de déploiement',
                                        'SQL interdit les secrets',
                                        'Cela empêche SELECT',
                                        'Cela désactive PostgreSQL'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les secrets doivent être gérés via des mécanismes adaptés comme les variables d’environnement ou un secret manager.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Continuité, récupération et réplication',
                            'description' => 'Quiz de niveau professionnel : Continuité, récupération et réplication.',
                            'questions' => [
                                [
                                    'question' => 'Quelle est la différence fondamentale entre backup et réplication?',
                                    'choices' => [
                                        'Ce sont toujours exactement la même chose',
                                        'La réplication remplace obligatoirement les sauvegardes',
                                        'Une sauvegarde sert notamment à restaurer un état antérieur tandis que la réplication maintient généralement une copie synchronisée ou proche du primaire',
                                        'Le backup ne contient jamais de données'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'La réplication améliore notamment la disponibilité, tandis que les sauvegardes sont essentielles pour la restauration et la récupération après incident.'
                                ],
                                [
                                    'question' => 'Le concept de RPO désigne:',
                                    'choices' => [
                                        'Recovery Point Objective',
                                        'Recovery Process Operation',
                                        'Remote PostgreSQL Object',
                                        'Replication Performance Order'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le RPO définit la quantité maximale de données que l’organisation accepte potentiellement de perdre.'
                                ],
                                [
                                    'question' => 'Le concept de RTO désigne:',
                                    'choices' => [
                                        'Replication Transaction Order',
                                        'Restore Table Operation',
                                        'Remote Transaction Object',
                                        'Recovery Time Objective'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Le RTO représente la durée cible maximale pour restaurer le service après une interruption.'
                                ],
                                [
                                    'question' => 'Pourquoi une stratégie de backup doit-elle être documentée?',
                                    'choices' => [
                                        'Pour empêcher les sauvegardes',
                                        'Pour définir clairement les procédures, fréquences, responsabilités et restaurations',
                                        'Pour supprimer les logs',
                                        'Pour remplacer les transactions'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une stratégie documentée facilite la continuité et réduit les erreurs lors d’un incident.'
                                ],
                                [
                                    'question' => 'Pourquoi conserver plusieurs copies des sauvegardes?',
                                    'choices' => [
                                        'Pour ralentir les restaurations',
                                        'Pour réduire le risque de perdre toutes les copies lors d’un même incident',
                                        'Pour supprimer les données originales',
                                        'Pour éviter toute sécurité'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'La redondance des sauvegardes réduit le risque de perte totale.'
                                ],
                                [
                                    'question' => 'Pourquoi une sauvegarde stockée uniquement sur le même serveur est-elle risquée?',
                                    'choices' => [
                                        'Elle est toujours plus rapide',
                                        'Elle empêche PostgreSQL de démarrer',
                                        'Elle supprime les index',
                                        'Une panne ou compromission du serveur peut affecter simultanément les données et la sauvegarde'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Une stratégie robuste conserve généralement des copies sur des emplacements ou supports distincts.'
                                ],
                                [
                                    'question' => 'Une restauration point-in-time désigne:',
                                    'choices' => [
                                        'Restaurer la base vers un état correspondant à un moment précis',
                                        'Restaurer uniquement une colonne',
                                        'Créer une nouvelle table vide',
                                        'Supprimer les transactions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une restauration point-in-time permet de revenir à un instant déterminé lorsque les conditions nécessaires sont disponibles.'
                                ],
                                [
                                    'question' => 'Quel est l’intérêt d’une architecture haute disponibilité?',
                                    'choices' => [
                                        'Supprimer les sauvegardes',
                                        'Éviter toutes les erreurs applicatives',
                                        'Réduire la durée d’interruption du service lors de certaines pannes',
                                        'Remplacer les permissions'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'La haute disponibilité vise à maintenir le service malgré certaines défaillances.'
                                ],
                                [
                                    'question' => 'Pourquoi un système répliqué ne dispense-t-il pas nécessairement de backup?',
                                    'choices' => [
                                        'Les réplications ne contiennent aucune donnée',
                                        'Les backups sont uniquement destinés aux index',
                                        'PostgreSQL interdit la réplication',
                                        'Une erreur ou suppression peut être répliquée vers les autres copies'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Une réplication peut reproduire une erreur logique, tandis qu’une sauvegarde peut permettre de revenir à un état antérieur.'
                                ],
                                [
                                    'question' => 'Une suppression accidentelle est immédiatement répliquée sur toutes les replicas. Quelle solution aurait permis un retour à un état antérieur?',
                                    'choices' => [
                                        'Une stratégie de backup et de restauration adaptée',
                                        'Un nouvel index',
                                        'Une Foreign Key',
                                        'Une Window Function'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'La réplication seule ne protège pas contre toutes les erreurs logiques. Les backups permettent notamment de restaurer un état antérieur.'
                                ]
                            ]
                        ]
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                ['subject_id' => $subject->id, 'title' => $quizData['title']],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 30 + max(0, count($quizData['questions']) - 10) * 2,
                    'passing_score' => 75,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Professional',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    ['quiz_id' => $quiz->id, 'order' => $index + 1],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );
                $question->choices()->delete();
                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
