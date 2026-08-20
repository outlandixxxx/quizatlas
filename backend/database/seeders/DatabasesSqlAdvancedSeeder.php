<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabasesSqlAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'databases-sql')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — CTE ET REQUÊTES AVANCÉES
            // ============================================================
            [
                'title' => 'CTE et requêtes avancées',
                'description' => 'Quiz avancé sur les CTE, les requêtes récursives et la structuration des requêtes SQL.',
                'questions' => [

                    [
                        'question' => 'Que signifie CTE en SQL ?',
                        'choices' => [
                            'Common Table Expression',
                            'Complete Table Execution',
                            'Common Transaction Engine',
                            'Computed Table Element',
                        ],
                        'correct' => 0,
                        'explanation' => 'CTE signifie Common Table Expression. Elle permet de définir un résultat temporaire utilisable dans une requête.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de définir une CTE ?',
                        'choices' => [
                            'WITH',
                            'CTE',
                            'DEFINE',
                            'TEMP',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le mot-clé WITH permet de définir une Common Table Expression.'
                    ],

                    [
                        'question' => 'Quel est un avantage important des CTE ?',
                        'choices' => [
                            'Améliorer la lisibilité des requêtes complexes',
                            'Supprimer automatiquement les index',
                            'Remplacer toutes les transactions',
                            'Créer systématiquement une table physique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les CTE permettent notamment de décomposer une requête complexe en plusieurs étapes logiques.'
                    ],

                    [
                        'question' => 'Quel type de CTE permet de parcourir une structure hiérarchique ?',
                        'choices' => [
                            'CTE récursive',
                            'CTE statique',
                            'CTE primaire',
                            'CTE indexée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une CTE récursive peut être utilisée pour parcourir des structures hiérarchiques comme des arbres.'
                    ],

                    [
                        'question' => 'Quel mot-clé est généralement utilisé avec une CTE récursive ?',
                        'choices' => [
                            'RECURSIVE',
                            'REPEAT',
                            'LOOP',
                            'HIERARCHY',
                        ],
                        'correct' => 0,
                        'explanation' => 'Dans PostgreSQL, WITH RECURSIVE permet de déclarer une CTE récursive.'
                    ],

                    [
                        'question' => 'Une CTE peut-elle être utilisée avec SELECT, INSERT, UPDATE ou DELETE ?',
                        'choices' => [
                            'Oui, selon la syntaxe et le SGBD',
                            'Uniquement avec SELECT',
                            'Uniquement avec INSERT',
                            'Uniquement avec DELETE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les CTE peuvent être utilisées avec différentes opérations SQL selon les fonctionnalités du SGBD.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une requête récursive ?',
                        'choices' => [
                            'Traiter des données dont la structure dépend de niveaux précédents',
                            'Créer automatiquement des index',
                            'Remplacer les Foreign Keys',
                            'Désactiver les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les requêtes récursives sont particulièrement utiles pour les structures hiérarchiques.'
                    ],

                    [
                        'question' => 'Une CTE est-elle nécessairement stockée comme une table permanente ?',
                        'choices' => [
                            'Non',
                            'Oui',
                            'Uniquement dans PostgreSQL',
                            'Uniquement avec UPDATE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une CTE est une construction logique utilisée dans le contexte d’une requête.'
                    ],

                    [
                        'question' => 'Quel problème une CTE récursive mal conçue peut-elle provoquer ?',
                        'choices' => [
                            'Une récursion excessive ou une exécution très coûteuse',
                            'La suppression automatique de la base',
                            'La transformation des tables en index',
                            'La suppression des Primary Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une récursion mal contrôlée peut produire beaucoup de lignes ou une exécution coûteuse.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser plusieurs CTE dans une même requête ?',
                        'choices' => [
                            'Pour décomposer une logique complexe en étapes compréhensibles',
                            'Pour créer plusieurs bases de données',
                            'Pour éviter toute jointure',
                            'Pour supprimer les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Plusieurs CTE peuvent rendre une requête complexe plus modulaire et plus lisible.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — WINDOW FUNCTIONS
            // ============================================================
            [
                'title' => 'Window Functions',
                'description' => 'Quiz avancé sur les fonctions de fenêtre et leur utilisation analytique.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une Window Function ?',
                        'choices' => [
                            'Une fonction qui calcule une valeur sur un ensemble de lignes liées sans réduire le résultat à une seule ligne par groupe',
                            'Une fonction qui crée une fenêtre graphique',
                            'Une fonction qui supprime les lignes',
                            'Une fonction réservée aux transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les Window Functions permettent d’effectuer des calculs sur un ensemble de lignes tout en conservant les lignes individuelles du résultat.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de définir la fenêtre d’une Window Function ?',
                        'choices' => [
                            'OVER',
                            'WINDOW ONLY',
                            'RANGE ONLY',
                            'PARTITION ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'OVER définit la fenêtre utilisée par une Window Function.'
                    ],

                    [
                        'question' => 'À quoi sert PARTITION BY dans une Window Function ?',
                        'choices' => [
                            'Diviser les lignes en groupes indépendants pour le calcul',
                            'Supprimer les doublons',
                            'Créer une table',
                            'Trier définitivement la table',
                        ],
                        'correct' => 0,
                        'explanation' => 'PARTITION BY divise le résultat en partitions sur lesquelles la fonction est calculée séparément.'
                    ],

                    [
                        'question' => 'Quelle fonction attribue un numéro séquentiel aux lignes ?',
                        'choices' => [
                            'ROW_NUMBER()',
                            'ROW_INDEX()',
                            'SEQUENCE_ROW()',
                            'LINE_NUMBER()',
                        ],
                        'correct' => 0,
                        'explanation' => 'ROW_NUMBER() attribue un numéro unique et séquentiel aux lignes dans chaque partition.'
                    ],

                    [
                        'question' => 'Quelle fonction permet de classer des lignes avec des rangs pouvant être identiques ?',
                        'choices' => [
                            'RANK()',
                            'ORDER_RANK_ONLY()',
                            'POSITION()',
                            'CLASSIFY()',
                        ],
                        'correct' => 0,
                        'explanation' => 'RANK() attribue le même rang aux valeurs identiques et laisse des écarts dans les rangs suivants.'
                    ],

                    [
                        'question' => 'Quelle différence principale existe entre RANK() et DENSE_RANK() ?',
                        'choices' => [
                            'DENSE_RANK() ne laisse pas de trous dans les rangs',
                            'RANK() ne trie jamais les données',
                            'DENSE_RANK() supprime les lignes',
                            'RANK() fonctionne uniquement avec du texte',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec des valeurs identiques, RANK() peut laisser des écarts alors que DENSE_RANK() conserve des rangs consécutifs.'
                    ],

                    [
                        'question' => 'Quelle fonction permet d’accéder à la ligne précédente ?',
                        'choices' => [
                            'LAG()',
                            'PREVIOUS()',
                            'BACK()',
                            'PRIOR_ROW()',
                        ],
                        'correct' => 0,
                        'explanation' => 'LAG() permet d’accéder à une valeur située sur une ligne précédente dans la fenêtre.'
                    ],

                    [
                        'question' => 'Quelle fonction permet d’accéder à une ligne suivante ?',
                        'choices' => [
                            'LEAD()',
                            'NEXT()',
                            'FORWARD()',
                            'NEXT_ROW()',
                        ],
                        'correct' => 0,
                        'explanation' => 'LEAD() permet d’accéder à une valeur située sur une ligne suivante.'
                    ],

                    [
                        'question' => 'Quelle clause permet de définir l’ordre des lignes dans une Window Function ?',
                        'choices' => [
                            'ORDER BY dans OVER()',
                            'SORT ONLY',
                            'WINDOW ORDER',
                            'ORDER WINDOW ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'ORDER BY placé dans OVER() définit l’ordre utilisé pour le calcul de la fenêtre.'
                    ],

                    [
                        'question' => 'Pourquoi les Window Functions sont-elles utiles pour l’analyse ?',
                        'choices' => [
                            'Elles permettent notamment de calculer des rangs, cumuls et comparaisons entre lignes',
                            'Elles remplacent les tables',
                            'Elles empêchent les agrégations',
                            'Elles suppriment les relations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Elles sont très utiles pour les classements, les cumuls, les comparaisons temporelles et les analyses par groupe.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — EXPLAIN ET OPTIMISATION
            // ============================================================
            [
                'title' => 'Optimisation avancée des requêtes',
                'description' => 'Quiz avancé sur les plans d’exécution et l’optimisation PostgreSQL.',
                'questions' => [

                    [
                        'question' => 'Quel est le rôle principal de l’optimiseur SQL ?',
                        'choices' => [
                            'Choisir un plan d’exécution efficace pour une requête',
                            'Créer automatiquement toutes les tables',
                            'Remplacer le développeur',
                            'Supprimer les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’optimiseur évalue différents plans possibles et choisit celui qu’il estime le plus efficace.'
                    ],

                    [
                        'question' => 'Que permet EXPLAIN ?',
                        'choices' => [
                            'Afficher le plan d’exécution prévu d’une requête',
                            'Modifier les données',
                            'Créer une transaction',
                            'Supprimer un index',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXPLAIN affiche le plan que le SGBD prévoit d’utiliser pour exécuter la requête.'
                    ],

                    [
                        'question' => 'Que permet EXPLAIN ANALYZE ?',
                        'choices' => [
                            'Exécuter la requête et mesurer son comportement réel',
                            'Analyser uniquement la syntaxe',
                            'Créer automatiquement des index',
                            'Annuler la transaction',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXPLAIN ANALYZE exécute réellement la requête et fournit des statistiques d’exécution.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Sequential Scan ?',
                        'choices' => [
                            'Une lecture séquentielle des lignes d’une table',
                            'Une lecture d’un seul index',
                            'Une suppression séquentielle',
                            'Une sauvegarde séquentielle',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Sequential Scan parcourt les lignes de la table pour trouver celles qui correspondent aux conditions.'
                    ],

                    [
                        'question' => 'Quand un Sequential Scan peut-il être parfaitement approprié ?',
                        'choices' => [
                            'Lorsque une grande partie de la table doit être parcourue',
                            'Uniquement lorsqu’il n’y a aucune donnée',
                            'Toujours lorsque la table possède un index',
                            'Uniquement avec DELETE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Si une grande proportion des lignes doit être récupérée, parcourir la table peut être plus efficace qu’utiliser un index.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un Index Scan ?',
                        'choices' => [
                            'Une lecture utilisant un index pour localiser les lignes',
                            'Une suppression d’index',
                            'Une sauvegarde de l’index',
                            'Une analyse de syntaxe',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un Index Scan utilise un index pour localiser plus efficacement certaines lignes.'
                    ],

                    [
                        'question' => 'Pourquoi les statistiques PostgreSQL doivent-elles rester à jour ?',
                        'choices' => [
                            'Elles influencent les estimations utilisées par l’optimiseur',
                            'Elles remplacent les sauvegardes',
                            'Elles créent les Foreign Keys',
                            'Elles empêchent les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des statistiques pertinentes permettent à l’optimiseur de prendre de meilleures décisions.'
                    ],

                    [
                        'question' => 'Quel outil PostgreSQL met à jour notamment les statistiques utilisées par l’optimiseur ?',
                        'choices' => [
                            'ANALYZE',
                            'REFRESH SQL',
                            'UPDATE STATISTICS ONLY',
                            'OPTIMIZE TABLE ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'ANALYZE collecte des statistiques sur les tables afin d’aider l’optimiseur.'
                    ],

                    [
                        'question' => 'Pourquoi une requête avec une fonction appliquée à une colonne peut-elle empêcher l’utilisation d’un index classique ?',
                        'choices' => [
                            'L’expression recherchée peut ne pas correspondre directement à la structure de l’index',
                            'Les fonctions sont interdites dans SQL',
                            'Les index fonctionnent uniquement sur les Primary Keys',
                            'PostgreSQL ne possède pas d’optimiseur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Selon l’expression et le type d’index, l’optimiseur peut ne pas pouvoir utiliser efficacement un index classique.'
                    ],

                    [
                        'question' => 'Quelle approche est recommandée avant d’optimiser une requête ?',
                        'choices' => [
                            'Mesurer et analyser le plan d’exécution',
                            'Créer plusieurs index au hasard',
                            'Supprimer les contraintes',
                            'Augmenter toutes les tailles de colonnes',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’optimisation doit être guidée par des mesures et par l’analyse du plan d’exécution.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — CONCURRENCE ET ISOLATION
            // ============================================================
            [
                'title' => 'Concurrence et isolation des transactions',
                'description' => 'Quiz avancé sur la concurrence, les niveaux d’isolation et les verrous.',
                'questions' => [

                    [
                        'question' => 'Quel problème peut apparaître lorsque plusieurs transactions accèdent simultanément aux mêmes données ?',
                        'choices' => [
                            'Des problèmes de concurrence ou d’incohérence',
                            'La suppression automatique des tables',
                            'La disparition des index',
                            'La transformation des données en fichiers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les accès concurrents doivent être contrôlés afin de préserver la cohérence des données.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un dirty read ?',
                        'choices' => [
                            'Lire une donnée modifiée par une transaction qui n’a pas encore été validée',
                            'Lire une donnée inexistante',
                            'Lire une ligne avec un index',
                            'Lire une donnée deux fois',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un dirty read correspond à la lecture de modifications non encore validées par une autre transaction.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un non-repeatable read ?',
                        'choices' => [
                            'Une même lecture peut retourner des valeurs différentes dans une même transaction',
                            'Une ligne ne peut jamais être lue',
                            'Une requête retourne toujours zéro ligne',
                            'Une table est automatiquement supprimée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Cela peut se produire lorsqu’une autre transaction modifie et valide une ligne entre deux lectures.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un phantom read ?',
                        'choices' => [
                            'Une seconde requête retourne de nouvelles lignes correspondant à la même condition',
                            'Une ligne disparaît physiquement',
                            'Un index devient invisible',
                            'Une transaction est automatiquement supprimée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un phantom read concerne l’apparition ou la disparition de lignes correspondant à une condition entre deux lectures.'
                    ],

                    [
                        'question' => 'Quel est l’objectif d’un niveau d’isolation ?',
                        'choices' => [
                            'Contrôler la visibilité des modifications entre transactions concurrentes',
                            'Créer des index',
                            'Supprimer les tables',
                            'Choisir le type de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le niveau d’isolation définit notamment comment les transactions interagissent lorsqu’elles s’exécutent simultanément.'
                    ],

                    [
                        'question' => 'Quel niveau d’isolation est le plus strict dans le modèle SQL standard ?',
                        'choices' => [
                            'SERIALIZABLE',
                            'READ ONLY',
                            'BASIC',
                            'STRICT READ',
                        ],
                        'correct' => 0,
                        'explanation' => 'SERIALIZABLE est le niveau d’isolation le plus strict du modèle SQL standard.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un lock ?',
                        'choices' => [
                            'Un mécanisme permettant de contrôler l’accès concurrent à certaines ressources',
                            'Un type de colonne',
                            'Une vue',
                            'Une sauvegarde',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les locks permettent de contrôler certains accès concurrents afin de préserver la cohérence.'
                    ],

                    [
                        'question' => 'Que peut provoquer un deadlock ?',
                        'choices' => [
                            'Deux transactions peuvent attendre mutuellement des ressources détenues par l’autre',
                            'La suppression automatique de la base',
                            'Une erreur de syntaxe SELECT',
                            'La création d’une Foreign Key',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un deadlock survient lorsque des transactions se bloquent mutuellement en attendant des ressources.'
                    ],

                    [
                        'question' => 'Comment un SGBD peut-il gérer un deadlock ?',
                        'choices' => [
                            'Détecter le cycle et interrompre généralement l’une des transactions',
                            'Ignorer définitivement le problème',
                            'Supprimer toutes les tables',
                            'Désactiver SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les SGBD disposent généralement de mécanismes de détection et interrompent l’une des transactions concernées.'
                    ],

                    [
                        'question' => 'Pourquoi les transactions longues peuvent-elles être problématiques ?',
                        'choices' => [
                            'Elles peuvent conserver des ressources et augmenter les risques de contention',
                            'Elles accélèrent toujours toutes les requêtes',
                            'Elles suppriment automatiquement les locks',
                            'Elles désactivent les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des transactions longues peuvent maintenir des ressources plus longtemps et augmenter la contention.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — INDEX AVANCÉS POSTGRESQL
            // ============================================================
            [
                'title' => 'Index avancés PostgreSQL',
                'description' => 'Quiz sur les types d’index et les techniques avancées de PostgreSQL.',
                'questions' => [

                    [
                        'question' => 'Quel type d’index PostgreSQL est adapté à certaines recherches full-text ?',
                        'choices' => [
                            'GIN',
                            'BINARY',
                            'TEXT-INDEX',
                            'FULLSCAN',
                        ],
                        'correct' => 0,
                        'explanation' => 'GIN est notamment utilisé pour les données contenant plusieurs valeurs et certaines recherches full-text.'
                    ],

                    [
                        'question' => 'Quel index est souvent utilisé avec des données géométriques ou certaines recherches de proximité ?',
                        'choices' => [
                            'GiST',
                            'TREE-ONLY',
                            'GEO-BTREE',
                            'SPATIAL-TEXT',
                        ],
                        'correct' => 0,
                        'explanation' => 'GiST fournit une infrastructure d’indexation extensible utilisée notamment pour certaines données géométriques.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un index partiel ?',
                        'choices' => [
                            'Un index construit uniquement sur les lignes satisfaisant une condition',
                            'Un index contenant une seule colonne obligatoirement',
                            'Un index temporaire',
                            'Un index sans clé',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un partial index utilise une condition WHERE afin de ne couvrir qu’une partie des lignes.'
                    ],

                    [
                        'question' => 'Quel est un avantage d’un partial index ?',
                        'choices' => [
                            'Réduire la taille de l’index lorsqu’une partie seulement des données est intéressante',
                            'Supprimer toutes les données inutiles',
                            'Empêcher les INSERT',
                            'Remplacer les Foreign Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index partiel peut être plus petit et plus efficace lorsqu’une condition sélectionne une faible partie des lignes.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un index expressionnel ?',
                        'choices' => [
                            'Un index construit à partir d’une expression ou fonction',
                            'Un index sans colonnes',
                            'Un index uniquement pour les expressions régulières',
                            'Un index temporaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL permet de créer des index basés sur des expressions.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser un index expressionnel sur LOWER(email) ?',
                        'choices' => [
                            'Pour optimiser certaines recherches utilisant la même expression',
                            'Pour supprimer les emails',
                            'Pour chiffrer automatiquement la colonne',
                            'Pour remplacer UNIQUE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index sur LOWER(email) peut permettre d’optimiser les recherches utilisant également LOWER(email).'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un index multicolonne ?',
                        'choices' => [
                            'Un index portant sur plusieurs colonnes',
                            'Un index avec plusieurs tables obligatoirement',
                            'Un index contenant plusieurs bases',
                            'Un index temporaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index multicolonne contient plusieurs colonnes dans un ordre défini.'
                    ],

                    [
                        'question' => 'Pourquoi l’ordre des colonnes dans un index multicolonne est-il important ?',
                        'choices' => [
                            'Parce que certaines requêtes peuvent exploiter plus efficacement les premières colonnes de l’index',
                            'Parce que les colonnes sont toujours ignorées',
                            'Parce que l’ordre change les types de données',
                            'Parce qu’il supprime les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’ordre des colonnes influence les requêtes qui peuvent exploiter efficacement l’index.'
                    ],

                    [
                        'question' => 'Quel type d’index est le type général par défaut dans PostgreSQL ?',
                        'choices' => [
                            'B-tree',
                            'GIN',
                            'GiST',
                            'HASH-TEXT',
                        ],
                        'correct' => 0,
                        'explanation' => 'B-tree est le type d’index par défaut de PostgreSQL.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter de créer un index sur chaque colonne ?',
                        'choices' => [
                            'Les index ont un coût en stockage et en maintenance',
                            'PostgreSQL interdit plusieurs index',
                            'Les index empêchent SELECT',
                            'Les index suppriment les données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Chaque index consomme de l’espace et doit être maintenu lors des modifications des données.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — ARCHITECTURE ET PARTITIONNEMENT
            // ============================================================
            [
                'title' => 'Partitionnement et architecture',
                'description' => 'Quiz avancé sur le partitionnement et l’organisation des grandes tables.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le partitionnement d’une table ?',
                        'choices' => [
                            'Diviser logiquement les données d’une table en plusieurs partitions',
                            'Créer plusieurs bases indépendantes obligatoirement',
                            'Créer un index par ligne',
                            'Supprimer les anciennes données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement permet de répartir les données d’une table entre plusieurs partitions selon une stratégie définie.'
                    ],

                    [
                        'question' => 'Quel type de partitionnement est adapté à des données réparties selon des intervalles de dates ?',
                        'choices' => [
                            'RANGE',
                            'HASH ONLY',
                            'LIST ONLY',
                            'DATE TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement RANGE est adapté lorsque les données peuvent être réparties selon des intervalles.'
                    ],

                    [
                        'question' => 'Quel type de partitionnement répartit les lignes selon des valeurs précises ?',
                        'choices' => [
                            'LIST',
                            'RANGE ONLY',
                            'VALUE HASH',
                            'EXACT RANGE',
                        ],
                        'correct' => 0,
                        'explanation' => 'LIST permet de partitionner selon des valeurs ou groupes de valeurs définis.'
                    ],

                    [
                        'question' => 'Quel type de partitionnement utilise une fonction de hachage ?',
                        'choices' => [
                            'HASH',
                            'HASHED TABLE ONLY',
                            'RANDOM',
                            'DISTRIBUTED LIST',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement HASH distribue les lignes selon une fonction de hachage.'
                    ],

                    [
                        'question' => 'Quel est un avantage potentiel du partitionnement ?',
                        'choices' => [
                            'Améliorer la gestion et parfois les performances sur de très grandes tables',
                            'Supprimer toutes les contraintes',
                            'Empêcher les requêtes SELECT',
                            'Remplacer les sauvegardes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement peut faciliter la gestion des grandes tables et permettre certaines optimisations comme partition pruning.'
                    ],

                    [
                        'question' => 'Qu’est-ce que le partition pruning ?',
                        'choices' => [
                            'Le fait d’éviter de consulter les partitions qui ne peuvent pas contenir les résultats recherchés',
                            'La suppression automatique des partitions',
                            'La création d’un nouvel index',
                            'Le nettoyage des données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partition pruning permet au moteur d’éviter les partitions inutiles lors de certaines requêtes.'
                    ],

                    [
                        'question' => 'Pourquoi le choix de la clé de partitionnement est-il important ?',
                        'choices' => [
                            'Elle influence la répartition des données et l’efficacité des requêtes',
                            'Elle détermine le mot de passe de la base',
                            'Elle supprime les Foreign Keys',
                            'Elle définit automatiquement toutes les permissions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une mauvaise clé de partitionnement peut réduire les bénéfices du partitionnement.'
                    ],

                    [
                        'question' => 'Le partitionnement remplace-t-il automatiquement les index ?',
                        'choices' => [
                            'Non',
                            'Oui',
                            'Uniquement dans PostgreSQL',
                            'Uniquement avec RANGE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement et les index répondent à des besoins différents et peuvent être utilisés ensemble.'
                    ],

                    [
                        'question' => 'Quel scénario est particulièrement adapté au partitionnement par date ?',
                        'choices' => [
                            'Une table contenant plusieurs années de journaux ou d’événements',
                            'Une table de deux lignes',
                            'Une table contenant uniquement des paramètres',
                            'Une table sans données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les données temporelles volumineuses sont un cas classique pour le partitionnement RANGE par date.'
                    ],

                    [
                        'question' => 'Quel risque faut-il considérer avant d’introduire un partitionnement ?',
                        'choices' => [
                            'Une complexité supplémentaire de conception et de maintenance',
                            'La suppression obligatoire des tables',
                            'L’impossibilité d’utiliser SQL',
                            'La disparition des Primary Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement apporte des avantages mais ajoute aussi une complexité qui doit être justifiée par les besoins.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — SÉCURITÉ ET SQL
            // ============================================================
            [
                'title' => 'Sécurité des bases de données',
                'description' => 'Quiz avancé sur la sécurité SQL, les permissions et les injections.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une SQL Injection ?',
                        'choices' => [
                            'Une attaque permettant de manipuler une requête SQL via des entrées utilisateur mal contrôlées',
                            'Un type d’index',
                            'Une méthode de sauvegarde',
                            'Une technique de partitionnement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une SQL Injection exploite une construction non sécurisée des requêtes SQL afin d’injecter une logique non prévue.'
                    ],

                    [
                        'question' => 'Quelle méthode réduit fortement le risque d’injection SQL ?',
                        'choices' => [
                            'Utiliser des requêtes paramétrées',
                            'Concaténer toutes les chaînes',
                            'Donner tous les privilèges à l’utilisateur',
                            'Désactiver les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les requêtes paramétrées séparent les données des instructions SQL.'
                    ],

                    [
                        'question' => 'Que signifie le principe du moindre privilège ?',
                        'choices' => [
                            'Donner uniquement les permissions nécessaires',
                            'Donner toutes les permissions',
                            'Ne jamais utiliser de permissions',
                            'Utiliser le compte administrateur partout',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe du moindre privilège limite les droits afin de réduire l’impact potentiel d’une compromission.'
                    ],

                    [
                        'question' => 'Pourquoi éviter d’utiliser le compte administrateur de la base pour une application ?',
                        'choices' => [
                            'Une compromission de l’application pourrait donner trop de droits à un attaquant',
                            'Le compte administrateur ne peut pas exécuter SELECT',
                            'Il est toujours plus lent',
                            'Il ne peut pas utiliser SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une application doit généralement disposer uniquement des privilèges nécessaires à son fonctionnement.'
                    ],

                    [
                        'question' => 'Quel mécanisme peut limiter l’accès à certaines lignes ou données selon les utilisateurs dans PostgreSQL ?',
                        'choices' => [
                            'Row-Level Security',
                            'Table Lock Only',
                            'Column Firewall',
                            'Row Password',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL propose Row-Level Security pour contrôler l’accès aux lignes selon des politiques.'
                    ],

                    [
                        'question' => 'Pourquoi les mots de passe ne doivent-ils pas être stockés en clair ?',
                        'choices' => [
                            'Une fuite de la base exposerait directement les mots de passe',
                            'SQL interdit les mots de passe',
                            'Cela empêche les SELECT',
                            'Cela ralentit toujours la base',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les mots de passe doivent être stockés sous une forme protégée, généralement avec un mécanisme de hash adapté.'
                    ],

                    [
                        'question' => 'Pourquoi les sauvegardes doivent-elles également être protégées ?',
                        'choices' => [
                            'Elles peuvent contenir une copie complète ou importante des données',
                            'Elles ne contiennent jamais de données',
                            'Elles sont toujours publiques',
                            'Elles remplacent les permissions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sauvegarde peut contenir des données sensibles et doit donc bénéficier d’une protection appropriée.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il limiter les informations sensibles retournées par une API ?',
                        'choices' => [
                            'Pour réduire l’exposition inutile des données',
                            'Pour augmenter le nombre de colonnes',
                            'Pour désactiver SQL',
                            'Pour supprimer les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une API doit retourner uniquement les données nécessaires au fonctionnement de la fonctionnalité.'
                    ],

                    [
                        'question' => 'Quel élément doit être surveillé dans les logs d’une base de données ?',
                        'choices' => [
                            'Les erreurs, accès suspects et événements importants',
                            'Uniquement les SELECT réussis',
                            'Uniquement les noms des tables',
                            'La couleur des interfaces',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les logs peuvent aider à détecter les erreurs et les comportements inhabituels.'
                    ],

                    [
                        'question' => 'Pourquoi les permissions doivent-elles être régulièrement révisées ?',
                        'choices' => [
                            'Pour supprimer les droits devenus inutiles',
                            'Pour supprimer toutes les tables',
                            'Pour désactiver SQL',
                            'Pour créer automatiquement des index',
                        ],
                        'correct' => 0,
                        'explanation' => 'La révision régulière des permissions réduit les privilèges inutiles et améliore la sécurité.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CAS PRATIQUES SQL
            // ============================================================
            [
                'title' => 'Cas pratiques SQL avancés',
                'description' => 'Quiz final avec des situations pratiques de conception, optimisation et administration SQL.',
                'questions' => [

                    [
                        'question' => 'Une requête filtre souvent une table de plusieurs millions de lignes sur customer_id. Quelle première piste peut être étudiée ?',
                        'choices' => [
                            'L’existence d’un index adapté sur customer_id',
                            'Supprimer la table',
                            'Ajouter une colonne aléatoire',
                            'Supprimer la Primary Key',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index approprié peut accélérer les recherches fréquentes sur une colonne sélective.'
                    ],

                    [
                        'question' => 'Une requête est lente après une forte augmentation du volume de données. Quelle première action est pertinente ?',
                        'choices' => [
                            'Analyser son plan d’exécution et les statistiques',
                            'Créer dix index immédiatement',
                            'Supprimer toutes les contraintes',
                            'Changer toutes les colonnes en TEXT',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse du plan permet de comprendre comment le comportement de la requête a évolué.'
                    ],

                    [
                        'question' => 'Une application doit afficher le classement des utilisateurs par score dans chaque sujet. Quelle fonctionnalité SQL est particulièrement adaptée ?',
                        'choices' => [
                            'RANK() avec PARTITION BY',
                            'DROP TABLE',
                            'CHECK',
                            'TRUNCATE',
                        ],
                        'correct' => 0,
                        'explanation' => 'RANK() avec PARTITION BY permet de calculer un classement séparément pour chaque groupe.'
                    ],

                    [
                        'question' => 'Une table contient plusieurs millions d’événements répartis sur plusieurs années. Quelle stratégie peut être pertinente ?',
                        'choices' => [
                            'Un partitionnement RANGE par date',
                            'Une table différente pour chaque ligne',
                            'Un index sur toutes les colonnes sans analyse',
                            'Supprimer les anciennes dates automatiquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le partitionnement RANGE par date peut faciliter la gestion et certaines requêtes sur de grandes tables temporelles.'
                    ],

                    [
                        'question' => 'Une application effectue une mise à jour de plusieurs tables qui doivent rester cohérentes. Quelle approche utiliser ?',
                        'choices' => [
                            'Une transaction',
                            'Plusieurs requêtes indépendantes sans contrôle',
                            'Une VIEW',
                            'Un index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une transaction permet de regrouper les modifications afin de préserver leur cohérence.'
                    ],

                    [
                        'question' => 'Une application construit une requête en concaténant directement une valeur fournie par l’utilisateur. Quel risque faut-il considérer ?',
                        'choices' => [
                            'SQL Injection',
                            'Partition pruning',
                            'Deadlock uniquement',
                            'Index corruption automatique',
                        ],
                        'correct' => 0,
                        'explanation' => 'La concaténation directe de données utilisateur dans une requête peut créer une vulnérabilité SQL Injection.'
                    ],

                    [
                        'question' => 'Une requête doit comparer chaque vente au montant de la vente précédente du même client. Quelle fonction est adaptée ?',
                        'choices' => [
                            'LAG()',
                            'COUNT(*)',
                            'COALESCE() uniquement',
                            'DROP()',
                        ],
                        'correct' => 0,
                        'explanation' => 'LAG() permet d’accéder à la valeur d’une ligne précédente dans une Window Function.'
                    ],

                    [
                        'question' => 'Une application doit calculer un total cumulatif des ventes par date. Quelle approche est appropriée ?',
                        'choices' => [
                            'Une fonction d’agrégation utilisée comme Window Function avec ORDER BY',
                            'DROP TABLE',
                            'CHECK',
                            'Foreign Key uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une fonction d’agrégation utilisée avec OVER() et ORDER BY peut produire un cumul progressif.'
                    ],

                    [
                        'question' => 'Une requête complexe contient plusieurs étapes intermédiaires réutilisées dans le résultat final. Quelle fonctionnalité peut améliorer sa structure ?',
                        'choices' => [
                            'CTE avec WITH',
                            'DROP',
                            'TRUNCATE',
                            'UNIQUE uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les CTE permettent de décomposer une requête complexe en plusieurs résultats intermédiaires nommés.'
                    ],

                    [
                        'question' => 'Après optimisation d’une requête, quelle pratique permet de vérifier que l’amélioration est réelle ?',
                        'choices' => [
                            'Comparer les performances avant et après avec des mesures fiables',
                            'Supposer que la requête est plus rapide',
                            'Créer davantage d’index sans mesure',
                            'Supprimer les logs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une optimisation doit être validée par des mesures réelles afin de confirmer son efficacité.'
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