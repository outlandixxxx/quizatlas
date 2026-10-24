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
            [
                            'title' => 'CTE et requêtes récursives',
                            'description' => 'Quiz de niveau avancé : CTE et requêtes récursives.',
                            'questions' => [
                                [
                                    'question' => 'Développez le sigle « CTE »:',
                                    'choices' => [
                                        'Complete Table Execution',
                                        'Common Transaction Engine',
                                        'Common Table Expression',
                                        'Computed Table Element'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'CTE signifie Common Table Expression. Elle permet de définir un résultat temporaire utilisable dans une requête.'
                                ],
                                [
                                    'question' => 'Pour définir une CTE, le mot-clé à employer est:',
                                    'choices' => [
                                        'WITH',
                                        'CTE',
                                        'DEFINE',
                                        'TEMP'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le mot-clé WITH permet de définir une Common Table Expression.'
                                ],
                                [
                                    'question' => 'En décomposant une requête en étapes nommées, les CTE améliorent surtout:',
                                    'choices' => [
                                        'Supprimer automatiquement les index',
                                        'Remplacer toutes les transactions',
                                        'Créer systématiquement une table physique',
                                        'Améliorer la lisibilité des requêtes complexes'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les CTE permettent notamment de décomposer une requête complexe en plusieurs étapes logiques.'
                                ],
                                [
                                    'question' => 'Pour parcourir une structure hiérarchique, utilisez une CTE:',
                                    'choices' => [
                                        'CTE statique',
                                        'CTE récursive',
                                        'CTE primaire',
                                        'CTE indexée'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une CTE récursive peut être utilisée pour parcourir des structures hiérarchiques comme des arbres.'
                                ],
                                [
                                    'question' => 'Quel mot-clé est généralement utilisé avec une CTE récursive?',
                                    'choices' => [
                                        'REPEAT',
                                        'RECURSIVE',
                                        'LOOP',
                                        'HIERARCHY'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Dans PostgreSQL, WITH RECURSIVE permet de déclarer une CTE récursive.'
                                ],
                                [
                                    'question' => 'Une CTE peut-elle être utilisée avec SELECT, INSERT, UPDATE ou DELETE?',
                                    'choices' => [
                                        'Uniquement avec SELECT',
                                        'Uniquement avec INSERT',
                                        'Uniquement avec DELETE',
                                        'Oui, selon la syntaxe et le SGBD'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les CTE peuvent être utilisées avec différentes opérations SQL selon les fonctionnalités du SGBD.'
                                ],
                                [
                                    'question' => 'Quel est le rôle d’une requête récursive?',
                                    'choices' => [
                                        'Traiter des données dont la structure dépend de niveaux précédents',
                                        'Créer automatiquement des index',
                                        'Remplacer les Foreign Keys',
                                        'Désactiver les contraintes'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les requêtes récursives sont particulièrement utiles pour les structures hiérarchiques.'
                                ],
                                [
                                    'question' => 'Une CTE est-elle nécessairement stockée comme une table permanente?',
                                    'choices' => [
                                        'Oui',
                                        'Uniquement dans PostgreSQL',
                                        'Non',
                                        'Uniquement avec UPDATE'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une CTE est une construction logique utilisée dans le contexte d’une requête.'
                                ],
                                [
                                    'question' => 'Quel problème une CTE récursive mal conçue peut-elle provoquer?',
                                    'choices' => [
                                        'La suppression automatique de la base',
                                        'La transformation des tables en index',
                                        'La suppression des Primary Keys',
                                        'Une récursion excessive ou une exécution très coûteuse'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Une récursion mal contrôlée peut produire beaucoup de lignes ou une exécution coûteuse.'
                                ],
                                [
                                    'question' => 'Une table employes contient un identifiant et celui du responsable de chaque personne. Pour parcourir toute la hiérarchie à partir d’un responsable donné, quelle forme de CTE convient?',
                                    'choices' => [
                                        'Une CTE récursive',
                                        'Une vue matérialisée',
                                        'Une clause DISTINCT',
                                        'Un index partiel'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une CTE récursive permet de partir d’un ensemble initial puis de réutiliser son résultat pour parcourir les niveaux suivants d’une hiérarchie.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Fonctions de fenêtrage en analyse',
                            'description' => 'Quiz de niveau avancé : Fonctions de fenêtrage en analyse.',
                            'questions' => [
                                [
                                    'question' => 'Une Window Function désigne:',
                                    'choices' => [
                                        'Une fonction qui crée une fenêtre graphique',
                                        'Une fonction qui supprime les lignes',
                                        'Une fonction qui calcule une valeur sur un ensemble de lignes liées sans réduire le résultat à une seule ligne par groupe',
                                        'Une fonction réservée aux transactions'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Les Window Functions permettent d’effectuer des calculs sur un ensemble de lignes tout en conservant les lignes individuelles du résultat.'
                                ],
                                [
                                    'question' => 'Pour définir la fenêtre d’une Window Function, le mot-clé à employer est:',
                                    'choices' => [
                                        'OVER',
                                        'WINDOW ONLY',
                                        'RANGE ONLY',
                                        'PARTITION ONLY'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'OVER définit la fenêtre utilisée par une Window Function.'
                                ],
                                [
                                    'question' => 'À quoi sert PARTITION BY dans une Window Function?',
                                    'choices' => [
                                        'Supprimer les doublons',
                                        'Créer une table',
                                        'Trier définitivement la table',
                                        'Diviser les lignes en groupes indépendants pour le calcul'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'PARTITION BY divise le résultat en partitions sur lesquelles la fonction est calculée séparément.'
                                ],
                                [
                                    'question' => 'Quelle fonction attribue un numéro séquentiel aux lignes?',
                                    'choices' => [
                                        'ROW_INDEX()',
                                        'ROW_NUMBER()',
                                        'SEQUENCE_ROW()',
                                        'LINE_NUMBER()'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'ROW_NUMBER() attribue un numéro unique et séquentiel aux lignes dans chaque partition.'
                                ],
                                [
                                    'question' => 'La fonction à utiliser pour classer des lignes avec des rangs pouvant être identiques est:',
                                    'choices' => [
                                        'ORDER_RANK_ONLY()',
                                        'RANK()',
                                        'POSITION()',
                                        'CLASSIFY()'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'RANK() attribue le même rang aux valeurs identiques et laisse des écarts dans les rangs suivants.'
                                ],
                                [
                                    'question' => 'Quelle différence principale existe entre RANK() et DENSE_RANK()?',
                                    'choices' => [
                                        'RANK() ne trie jamais les données',
                                        'DENSE_RANK() supprime les lignes',
                                        'RANK() fonctionne uniquement avec du texte',
                                        'DENSE_RANK() ne laisse pas de trous dans les rangs'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Avec des valeurs identiques, RANK() peut laisser des écarts alors que DENSE_RANK() conserve des rangs consécutifs.'
                                ],
                                [
                                    'question' => 'Quelle fonction permet d’accéder à la ligne précédente?',
                                    'choices' => [
                                        'LAG()',
                                        'PREVIOUS()',
                                        'BACK()',
                                        'PRIOR_ROW()'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'LAG() permet d’accéder à une valeur située sur une ligne précédente dans la fenêtre.'
                                ],
                                [
                                    'question' => 'Quelle fonction permet d’accéder à une ligne suivante?',
                                    'choices' => [
                                        'NEXT()',
                                        'FORWARD()',
                                        'LEAD()',
                                        'NEXT_ROW()'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'LEAD() permet d’accéder à une valeur située sur une ligne suivante.'
                                ],
                                [
                                    'question' => 'La clause qui permet de définir l’ordre des lignes dans une Window Function est:',
                                    'choices' => [
                                        'SORT ONLY',
                                        'WINDOW ORDER',
                                        'ORDER WINDOW ONLY',
                                        'ORDER BY dans OVER()'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ORDER BY placé dans OVER() définit l’ordre utilisé pour le calcul de la fenêtre.'
                                ],
                                [
                                    'question' => 'Pourquoi les Window Functions sont-elles utiles pour l’analyse?',
                                    'choices' => [
                                        'Elles permettent notamment de calculer des rangs, cumuls et comparaisons entre lignes',
                                        'Elles remplacent les tables',
                                        'Elles empêchent les agrégations',
                                        'Elles suppriment les relations'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Elles sont très utiles pour les classements, les cumuls, les comparaisons temporelles et les analyses par groupe.'
                                ],
                                [
                                    'question' => 'Une application doit afficher le classement des utilisateurs par score dans chaque sujet. Quelle fonctionnalité SQL est particulièrement adaptée?',
                                    'choices' => [
                                        'DROP TABLE',
                                        'RANK() avec PARTITION BY',
                                        'CHECK',
                                        'TRUNCATE'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'RANK() avec PARTITION BY permet de calculer un classement séparément pour chaque groupe.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Plans d’exécution et optimisation',
                            'description' => 'Quiz de niveau avancé : Plans d’exécution et optimisation.',
                            'questions' => [
                                [
                                    'question' => 'Le rôle principal de l’optimiseur SQL consiste à:',
                                    'choices' => [
                                        'Créer automatiquement toutes les tables',
                                        'Remplacer le développeur',
                                        'Choisir un plan d’exécution efficace pour une requête',
                                        'Supprimer les contraintes'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'L’optimiseur évalue différents plans possibles et choisit celui qu’il estime le plus efficace.'
                                ],
                                [
                                    'question' => 'Que permet EXPLAIN?',
                                    'choices' => [
                                        'Afficher le plan d’exécution prévu d’une requête',
                                        'Modifier les données',
                                        'Créer une transaction',
                                        'Supprimer un index'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'EXPLAIN affiche le plan que le SGBD prévoit d’utiliser pour exécuter la requête.'
                                ],
                                [
                                    'question' => 'Que permet EXPLAIN ANALYZE?',
                                    'choices' => [
                                        'Analyser uniquement la syntaxe',
                                        'Créer automatiquement des index',
                                        'Annuler la transaction',
                                        'Exécuter la requête et mesurer son comportement réel'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Dans PostgreSQL, EXPLAIN ANALYZE exécute réellement la requête avant d’en afficher les mesures ; prudence avec les instructions qui modifient les données.'
                                ],
                                [
                                    'question' => 'Un Sequential Scan désigne:',
                                    'choices' => [
                                        'Une lecture d’un seul index',
                                        'Une lecture séquentielle des lignes d’une table',
                                        'Une suppression séquentielle',
                                        'Une sauvegarde séquentielle'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Un Sequential Scan parcourt les lignes de la table pour trouver celles qui correspondent aux conditions.'
                                ],
                                [
                                    'question' => 'Un Sequential Scan peut être parfaitement adapté lorsque :',
                                    'choices' => [
                                        'Uniquement lorsqu’il n’y a aucune donnée',
                                        'Lorsque une grande partie de la table doit être parcourue',
                                        'Toujours lorsque la table possède un index',
                                        'Uniquement avec DELETE'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Si une grande proportion des lignes doit être récupérée, parcourir la table peut être plus efficace qu’utiliser un index.'
                                ],
                                [
                                    'question' => 'Un Index Scan désigne:',
                                    'choices' => [
                                        'Une suppression d’index',
                                        'Une sauvegarde de l’index',
                                        'Une analyse de syntaxe',
                                        'Une lecture utilisant un index pour localiser les lignes'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Un Index Scan utilise un index pour identifier les lignes pertinentes, puis récupère les lignes correspondantes. Selon la requête et le nombre de résultats, le SGBD peut préférer un autre plan.'
                                ],
                                [
                                    'question' => 'Pourquoi les statistiques PostgreSQL doivent-elles rester à jour?',
                                    'choices' => [
                                        'Elles influencent les estimations utilisées par l’optimiseur',
                                        'Elles remplacent les sauvegardes',
                                        'Elles créent les Foreign Keys',
                                        'Elles empêchent les transactions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Des statistiques pertinentes permettent à l’optimiseur de prendre de meilleures décisions.'
                                ],
                                [
                                    'question' => 'Quel outil PostgreSQL met à jour notamment les statistiques utilisées par l’optimiseur?',
                                    'choices' => [
                                        'REFRESH SQL',
                                        'UPDATE STATISTICS ONLY',
                                        'ANALYZE',
                                        'OPTIMIZE TABLE ONLY'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'ANALYZE collecte des statistiques sur les tables afin d’aider l’optimiseur.'
                                ],
                                [
                                    'question' => 'Pourquoi une requête avec une fonction appliquée à une colonne peut-elle empêcher l’utilisation d’un index classique?',
                                    'choices' => [
                                        'Les fonctions sont interdites dans SQL',
                                        'Les index fonctionnent uniquement sur les Primary Keys',
                                        'PostgreSQL ne possède pas d’optimiseur',
                                        'L’expression recherchée peut ne pas correspondre directement à la structure de l’index'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Selon l’expression et le type d’index, l’optimiseur peut ne pas pouvoir utiliser efficacement un index classique.'
                                ],
                                [
                                    'question' => 'Une requête filtre souvent une table de plusieurs millions de lignes sur customer_id. Quelle première piste peut être étudiée?',
                                    'choices' => [
                                        'L’existence d’un index adapté sur customer_id',
                                        'Supprimer la table',
                                        'Ajouter une colonne aléatoire',
                                        'Supprimer la Primary Key'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un index approprié peut accélérer les recherches fréquentes sur une colonne sélective.'
                                ],
                                [
                                    'question' => 'Une requête est lente après une forte augmentation du volume de données. Quelle première action est pertinente?',
                                    'choices' => [
                                        'Créer dix index immédiatement',
                                        'Analyser son plan d’exécution et les statistiques',
                                        'Supprimer toutes les contraintes',
                                        'Changer toutes les colonnes en TEXT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'L’analyse du plan permet de comprendre comment le comportement de la requête a évolué.'
                                ],
                                [
                                    'question' => 'Après optimisation d’une requête, quelle pratique permet de vérifier que l’amélioration est réelle?',
                                    'choices' => [
                                        'Supposer que la requête est plus rapide',
                                        'Créer davantage d’index sans mesure',
                                        'Comparer les performances avant et après avec des mesures fiables',
                                        'Supprimer les logs'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une optimisation doit être validée par des mesures réelles afin de confirmer son efficacité.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Concurrence et isolation',
                            'description' => 'Quiz de niveau avancé : Concurrence et isolation.',
                            'questions' => [
                                [
                                    'question' => 'Quel problème peut apparaître lorsque plusieurs transactions accèdent simultanément aux mêmes données?',
                                    'choices' => [
                                        'La suppression automatique des tables',
                                        'La disparition des index',
                                        'Des problèmes de concurrence ou d’incohérence',
                                        'La transformation des données en fichiers'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Les accès concurrents doivent être contrôlés afin de préserver la cohérence des données.'
                                ],
                                [
                                    'question' => 'Dans le modèle SQL standard, que désigne une lecture sale (dirty read) ?',
                                    'choices' => [
                                        'Lire une donnée modifiée par une transaction qui n’a pas encore été validée',
                                        'Lire une donnée inexistante',
                                        'Lire une ligne avec un index',
                                        'Lire une donnée deux fois'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Dans le modèle SQL standard, une lecture sale consiste à lire une modification qui n’a pas encore été validée. PostgreSQL traite READ UNCOMMITTED comme READ COMMITTED et ne permet pas ces lectures.'
                                ],
                                [
                                    'question' => 'Un non-repeatable read désigne:',
                                    'choices' => [
                                        'Une ligne ne peut jamais être lue',
                                        'Une requête retourne toujours zéro ligne',
                                        'Une table est automatiquement supprimée',
                                        'Une même lecture peut retourner des valeurs différentes dans une même transaction'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Cela peut se produire lorsqu’une autre transaction modifie et valide une ligne entre deux lectures.'
                                ],
                                [
                                    'question' => 'Un phantom read désigne:',
                                    'choices' => [
                                        'Une ligne disparaît physiquement',
                                        'Une seconde requête retourne de nouvelles lignes correspondant à la même condition',
                                        'Un index devient invisible',
                                        'Une transaction est automatiquement supprimée'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Un phantom read concerne l’apparition ou la disparition de lignes correspondant à une condition entre deux lectures.'
                                ],
                                [
                                    'question' => 'Quel est l’objectif d’un niveau d’isolation?',
                                    'choices' => [
                                        'Créer des index',
                                        'Contrôler la visibilité des modifications entre transactions concurrentes',
                                        'Supprimer les tables',
                                        'Choisir le type de données'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Le niveau d’isolation définit notamment comment les transactions interagissent lorsqu’elles s’exécutent simultanément.'
                                ],
                                [
                                    'question' => 'Quel niveau d’isolation est le plus strict dans le modèle SQL standard?',
                                    'choices' => [
                                        'READ ONLY',
                                        'BASIC',
                                        'STRICT READ',
                                        'SERIALIZABLE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'SERIALIZABLE est le niveau d’isolation le plus strict du modèle SQL standard.'
                                ],
                                [
                                    'question' => 'Un lock désigne:',
                                    'choices' => [
                                        'Un mécanisme permettant de contrôler l’accès concurrent à certaines ressources',
                                        'Un type de colonne',
                                        'Une vue',
                                        'Une sauvegarde'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les locks permettent de contrôler certains accès concurrents afin de préserver la cohérence.'
                                ],
                                [
                                    'question' => 'Que peut provoquer un deadlock?',
                                    'choices' => [
                                        'La suppression automatique de la base',
                                        'Une erreur de syntaxe SELECT',
                                        'Deux transactions peuvent attendre mutuellement des ressources détenues par l’autre',
                                        'La création d’une Foreign Key'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Un deadlock survient lorsque des transactions se bloquent mutuellement en attendant des ressources.'
                                ],
                                [
                                    'question' => 'Comment un SGBD peut-il gérer un deadlock?',
                                    'choices' => [
                                        'Ignorer définitivement le problème',
                                        'Supprimer toutes les tables',
                                        'Désactiver SQL',
                                        'Détecter le cycle et interrompre généralement l’une des transactions'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les SGBD disposent généralement de mécanismes de détection et interrompent l’une des transactions concernées.'
                                ],
                                [
                                    'question' => 'Pourquoi les transactions longues peuvent-elles être problématiques?',
                                    'choices' => [
                                        'Elles peuvent conserver des ressources et augmenter les risques de contention',
                                        'Elles accélèrent toujours toutes les requêtes',
                                        'Elles suppriment automatiquement les locks',
                                        'Elles désactivent les index'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Des transactions longues peuvent maintenir des ressources plus longtemps et augmenter la contention.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Indexation PostgreSQL avancée',
                            'description' => 'Quiz de niveau avancé : Indexation PostgreSQL avancée.',
                            'questions' => [
                                [
                                    'question' => 'Quel type d’index PostgreSQL est adapté à certaines recherches full-text?',
                                    'choices' => [
                                        'BINARY',
                                        'TEXT-INDEX',
                                        'GIN',
                                        'FULLSCAN'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'GIN est notamment utilisé pour les données contenant plusieurs valeurs et certaines recherches full-text.'
                                ],
                                [
                                    'question' => 'Quel index est souvent utilisé avec des données géométriques ou certaines recherches de proximité?',
                                    'choices' => [
                                        'GiST',
                                        'TREE-ONLY',
                                        'GEO-BTREE',
                                        'SPATIAL-TEXT'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'GiST fournit une infrastructure d’indexation extensible utilisée notamment pour certaines données géométriques.'
                                ],
                                [
                                    'question' => 'Un index partiel désigne:',
                                    'choices' => [
                                        'Un index contenant une seule colonne obligatoirement',
                                        'Un index temporaire',
                                        'Un index sans clé',
                                        'Un index construit uniquement sur les lignes satisfaisant une condition'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Un partial index utilise une condition WHERE afin de ne couvrir qu’une partie des lignes.'
                                ],
                                [
                                    'question' => 'Quel est un avantage d’un partial index?',
                                    'choices' => [
                                        'Supprimer toutes les données inutiles',
                                        'Réduire la taille de l’index lorsqu’une partie seulement des données est intéressante',
                                        'Empêcher les INSERT',
                                        'Remplacer les Foreign Keys'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Un index partiel peut être plus petit et plus efficace lorsqu’une condition sélectionne une faible partie des lignes.'
                                ],
                                [
                                    'question' => 'Un index expressionnel désigne:',
                                    'choices' => [
                                        'Un index sans colonnes',
                                        'Un index construit à partir d’une expression ou fonction',
                                        'Un index uniquement pour les expressions régulières',
                                        'Un index temporaire'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'PostgreSQL permet de créer des index basés sur des expressions.'
                                ],
                                [
                                    'question' => 'Pourquoi utiliser un index expressionnel sur LOWER(email)?',
                                    'choices' => [
                                        'Pour supprimer les emails',
                                        'Pour chiffrer automatiquement la colonne',
                                        'Pour remplacer UNIQUE',
                                        'Pour optimiser certaines recherches utilisant la même expression'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Un index sur LOWER(email) peut permettre d’optimiser les recherches utilisant également LOWER(email).'
                                ],
                                [
                                    'question' => 'Un index multicolonne désigne:',
                                    'choices' => [
                                        'Un index portant sur plusieurs colonnes',
                                        'Un index avec plusieurs tables obligatoirement',
                                        'Un index contenant plusieurs bases',
                                        'Un index temporaire'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un index multicolonne contient plusieurs colonnes dans un ordre défini.'
                                ],
                                [
                                    'question' => 'Pourquoi l’ordre des colonnes dans un index multicolonne est-il important?',
                                    'choices' => [
                                        'Parce que les colonnes sont toujours ignorées',
                                        'Parce que l’ordre change les types de données',
                                        'Parce que certaines requêtes peuvent exploiter plus efficacement les premières colonnes de l’index',
                                        'Parce qu’il supprime les contraintes'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'L’ordre des colonnes influence les requêtes qui peuvent exploiter efficacement l’index.'
                                ],
                                [
                                    'question' => 'Quel type d’index est le type général par défaut dans PostgreSQL?',
                                    'choices' => [
                                        'GIN',
                                        'GiST',
                                        'HASH-TEXT',
                                        'B-tree'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'B-tree est le type d’index par défaut de PostgreSQL.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il éviter de créer un index sur chaque colonne?',
                                    'choices' => [
                                        'Les index ont un coût en stockage et en maintenance',
                                        'PostgreSQL interdit plusieurs index',
                                        'Les index empêchent SELECT',
                                        'Les index suppriment les données'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Chaque index consomme de l’espace et doit être maintenu lors des modifications des données.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Partitionnement et architecture',
                            'description' => 'Quiz de niveau avancé : Partitionnement et architecture.',
                            'questions' => [
                                [
                                    'question' => 'Le partitionnement d’une table consiste à:',
                                    'choices' => [
                                        'Créer plusieurs bases indépendantes obligatoirement',
                                        'Créer un index par ligne',
                                        'Diviser logiquement les données d’une table en plusieurs partitions',
                                        'Supprimer les anciennes données'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Le partitionnement permet de répartir les données d’une table entre plusieurs partitions selon une stratégie définie.'
                                ],
                                [
                                    'question' => 'Quel type de partitionnement est adapté à des données réparties selon des intervalles de dates?',
                                    'choices' => [
                                        'RANGE',
                                        'HASH ONLY',
                                        'LIST ONLY',
                                        'DATE TABLE'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le partitionnement RANGE est adapté lorsque les données peuvent être réparties selon des intervalles.'
                                ],
                                [
                                    'question' => 'Quel type de partitionnement répartit les lignes selon des valeurs précises?',
                                    'choices' => [
                                        'RANGE ONLY',
                                        'VALUE HASH',
                                        'EXACT RANGE',
                                        'LIST'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'LIST permet de partitionner selon des valeurs ou groupes de valeurs définis.'
                                ],
                                [
                                    'question' => 'Quel type de partitionnement utilise une fonction de hachage?',
                                    'choices' => [
                                        'HASHED TABLE ONLY',
                                        'HASH',
                                        'RANDOM',
                                        'DISTRIBUTED LIST'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Le partitionnement HASH distribue les lignes selon une fonction de hachage.'
                                ],
                                [
                                    'question' => 'Quel est un avantage potentiel du partitionnement?',
                                    'choices' => [
                                        'Supprimer toutes les contraintes',
                                        'Améliorer la gestion et parfois les performances sur de très grandes tables',
                                        'Empêcher les requêtes SELECT',
                                        'Remplacer les sauvegardes'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Le partitionnement peut faciliter la gestion des grandes tables et permettre certaines optimisations comme partition pruning.'
                                ],
                                [
                                    'question' => 'Le partition pruning consiste à:',
                                    'choices' => [
                                        'La suppression automatique des partitions',
                                        'La création d’un nouvel index',
                                        'Le nettoyage des données',
                                        'Le fait d’éviter de consulter les partitions qui ne peuvent pas contenir les résultats recherchés'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Le partition pruning permet au moteur d’éviter les partitions inutiles lors de certaines requêtes.'
                                ],
                                [
                                    'question' => 'Pourquoi le choix de la clé de partitionnement est-il important?',
                                    'choices' => [
                                        'Elle influence la répartition des données et l’efficacité des requêtes',
                                        'Elle détermine le mot de passe de la base',
                                        'Elle supprime les Foreign Keys',
                                        'Elle définit automatiquement toutes les permissions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une mauvaise clé de partitionnement peut réduire les bénéfices du partitionnement.'
                                ],
                                [
                                    'question' => 'Le partitionnement remplace-t-il automatiquement les index?',
                                    'choices' => [
                                        'Oui',
                                        'Uniquement dans PostgreSQL',
                                        'Non',
                                        'Uniquement avec RANGE'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Le partitionnement et les index répondent à des besoins différents et peuvent être utilisés ensemble.'
                                ],
                                [
                                    'question' => 'Quel scénario est particulièrement adapté au partitionnement par date?',
                                    'choices' => [
                                        'Une table de deux lignes',
                                        'Une table contenant uniquement des paramètres',
                                        'Une table sans données',
                                        'Une table contenant plusieurs années de journaux ou d’événements'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les données temporelles volumineuses sont un cas classique pour le partitionnement RANGE par date.'
                                ],
                                [
                                    'question' => 'Quel risque faut-il considérer avant d’introduire un partitionnement?',
                                    'choices' => [
                                        'Une complexité supplémentaire de conception et de maintenance',
                                        'La suppression obligatoire des tables',
                                        'L’impossibilité d’utiliser SQL',
                                        'La disparition des Primary Keys'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le partitionnement apporte des avantages mais ajoute aussi une complexité qui doit être justifiée par les besoins.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Sécurité des bases de données',
                            'description' => 'Quiz de niveau avancé : Sécurité des bases de données.',
                            'questions' => [
                                [
                                    'question' => 'Une SQL Injection désigne:',
                                    'choices' => [
                                        'Un type d’index',
                                        'Une méthode de sauvegarde',
                                        'Une attaque permettant de manipuler une requête SQL via des entrées utilisateur mal contrôlées',
                                        'Une technique de partitionnement'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une SQL Injection exploite une construction non sécurisée des requêtes SQL afin d’injecter une logique non prévue.'
                                ],
                                [
                                    'question' => 'Quelle méthode réduit fortement le risque d’injection SQL?',
                                    'choices' => [
                                        'Utiliser des requêtes paramétrées',
                                        'Concaténer toutes les chaînes',
                                        'Donner tous les privilèges à l’utilisateur',
                                        'Désactiver les contraintes'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les requêtes paramétrées séparent les données des instructions SQL.'
                                ],
                                [
                                    'question' => 'Le principe du moindre privilège consiste à accorder uniquement les permissions nécessaires.',
                                    'choices' => [
                                        'Donner toutes les permissions',
                                        'Ne jamais utiliser de permissions',
                                        'Utiliser le compte administrateur partout',
                                        'Donner uniquement les permissions nécessaires'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Le principe du moindre privilège limite les droits afin de réduire l’impact potentiel d’une compromission.'
                                ],
                                [
                                    'question' => 'Pourquoi éviter d’utiliser le compte administrateur de la base pour une application?',
                                    'choices' => [
                                        'Le compte administrateur ne peut pas exécuter SELECT',
                                        'Une compromission de l’application pourrait donner trop de droits à un attaquant',
                                        'Il est toujours plus lent',
                                        'Il ne peut pas utiliser SQL'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une application doit généralement disposer uniquement des privilèges nécessaires à son fonctionnement.'
                                ],
                                [
                                    'question' => 'Quel mécanisme peut limiter l’accès à certaines lignes ou données selon les utilisateurs dans PostgreSQL?',
                                    'choices' => [
                                        'Table Lock Only',
                                        'Row-Level Security',
                                        'Column Firewall',
                                        'Row Password'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'PostgreSQL propose Row-Level Security pour contrôler l’accès aux lignes selon des politiques.'
                                ],
                                [
                                    'question' => 'Pourquoi les mots de passe ne doivent-ils pas être stockés en clair?',
                                    'choices' => [
                                        'SQL interdit les mots de passe',
                                        'Cela empêche les SELECT',
                                        'Cela ralentit toujours la base',
                                        'Une fuite de la base exposerait directement les mots de passe'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les mots de passe doivent être stockés sous une forme protégée, généralement avec un mécanisme de hash adapté.'
                                ],
                                [
                                    'question' => 'Pourquoi les sauvegardes doivent-elles également être protégées?',
                                    'choices' => [
                                        'Elles peuvent contenir une copie complète ou importante des données',
                                        'Elles ne contiennent jamais de données',
                                        'Elles sont toujours publiques',
                                        'Elles remplacent les permissions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une sauvegarde peut contenir des données sensibles et doit donc bénéficier d’une protection appropriée.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il limiter les informations sensibles retournées par une API?',
                                    'choices' => [
                                        'Pour augmenter le nombre de colonnes',
                                        'Pour désactiver SQL',
                                        'Pour réduire l’exposition inutile des données',
                                        'Pour supprimer les index'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une API doit retourner uniquement les données nécessaires au fonctionnement de la fonctionnalité.'
                                ],
                                [
                                    'question' => 'Quel élément doit être surveillé dans les logs d’une base de données?',
                                    'choices' => [
                                        'Uniquement les SELECT réussis',
                                        'Uniquement les noms des tables',
                                        'La couleur des interfaces',
                                        'Les erreurs, accès suspects et événements importants'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les logs peuvent aider à détecter les erreurs et les comportements inhabituels.'
                                ],
                               [
    'question' => 'Un compte de reporting doit seulement consulter les ventes. Quels droits faut-il lui accorder selon le principe du moindre privilège?',
    'choices' => [
        'SELECT sur les tables nécessaires uniquement',
        'Tous les privilèges sur la base',
        'SELECT, INSERT, UPDATE et DELETE sur toutes les tables',
        'Le rôle superutilisateur'
    ],
    'correct' => 0,
    'explanation' => 'Le compte reçoit uniquement le droit SELECT sur les tables nécessaires à son travail. Cela limite les dégâts possibles si ses identifiants sont compromis.'
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
                    'duration' => 25 + max(0, count($quizData['questions']) - 10) * 2,
                    'passing_score' => 75,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Advanced',
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
