<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabasesSqlIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'databases-sql')->firstOrFail();
        $quizzes = [
            [
                            'title' => 'Normalisation et conception relationnelle',
                            'description' => 'Quiz de niveau intermédiaire : Normalisation et conception relationnelle.',
                            'questions' => [
                                [
                                    'question' => 'L’objectif principal de la normalisation consiste à:',
                                    'choices' => [
                                        'Augmenter volontairement le nombre de doublons',
                                        'Supprimer toutes les relations entre les tables',
                                        'Réduire la redondance et améliorer la cohérence des données',
                                        'Remplacer SQL par un autre langage'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'La normalisation vise principalement à réduire les redondances et les anomalies de manipulation des données.'
                                ],
                                [
                                    'question' => 'Une table respecte généralement la 1NF lorsque :',
                                    'choices' => [
                                        'Les valeurs des colonnes sont atomiques',
                                        'Toutes les colonnes sont des Foreign Keys',
                                        'La table ne possède aucune Primary Key',
                                        'Toutes les lignes sont identiques'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'La 1NF impose notamment des valeurs atomiques et l’absence de groupes répétitifs.'
                                ],
                                [
                                    'question' => 'Quel problème peut apparaître lorsqu’une même information est répétée dans de nombreuses lignes?',
                                    'choices' => [
                                        'Une compilation automatique',
                                        'Une amélioration automatique des performances',
                                        'Une suppression automatique des doublons',
                                        'Une anomalie de mise à jour'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'La répétition excessive des données peut provoquer des anomalies lors des opérations INSERT, UPDATE ou DELETE.'
                                ],
                                [
                                    'question' => 'Que cherche notamment à éviter la 2NF?',
                                    'choices' => [
                                        'Les Primary Keys',
                                        'Les dépendances partielles',
                                        'Les Foreign Keys',
                                        'Les requêtes SELECT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'La deuxième forme normale vise notamment à éliminer les dépendances partielles par rapport à une clé composée.'
                                ],
                                [
                                    'question' => 'La 3NF cherche notamment à éliminer :',
                                    'choices' => [
                                        'Les tables',
                                        'Les dépendances transitives',
                                        'Les index',
                                        'Les requêtes SQL'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'La 3NF vise notamment à supprimer les dépendances transitives entre attributs non clés.'
                                ],
                                [
                                    'question' => 'Pourquoi peut-on volontairement dénormaliser une base?',
                                    'choices' => [
                                        'Pour supprimer toutes les contraintes',
                                        'Pour empêcher les SELECT',
                                        'Pour supprimer les relations',
                                        'Pour améliorer certaines performances de lecture'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'La dénormalisation peut être utilisée dans certains cas pour réduire le coût de certaines lectures, au prix d’une redondance accrue.'
                                ],
                                [
                                    'question' => 'Une table contenant plusieurs colonnes répétitives comme phone1, phone2 et phone3 peut indiquer :',
                                    'choices' => [
                                        'Un problème potentiel de conception',
                                        'Une optimisation obligatoire',
                                        'Une Primary Key parfaite',
                                        'Une Foreign Key automatique'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Des colonnes répétitives peuvent indiquer que certaines données devraient être représentées dans une table liée.'
                                ],
                                [
                                    'question' => 'Quel compromis peut exister entre normalisation et performance?',
                                    'choices' => [
                                        'La normalisation interdit SQL',
                                        'La normalisation supprime toujours les performances',
                                        'Une base très normalisée peut nécessiter davantage de JOIN pour certaines lectures',
                                        'La normalisation empêche les index'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une conception normalisée peut nécessiter davantage de jointures, ce qui peut parfois influencer les performances.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il choisir soigneusement les types de données?',
                                    'choices' => [
                                        'Pour garantir la cohérence des données et utiliser efficacement l’espace',
                                        'Pour empêcher les SELECT',
                                        'Pour supprimer les relations',
                                        'Pour éviter toutes les transactions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un type adapté améliore la cohérence, la validation et parfois l’efficacité du stockage.'
                                ],
                                [
                                    'question' => 'Pourquoi éviter de stocker plusieurs valeurs séparées par des virgules dans une seule colonne?',
                                    'choices' => [
                                        'Cela complique les recherches, les contraintes et les relations',
                                        'Cela accélère toujours les requêtes',
                                        'Cela crée automatiquement des Foreign Keys',
                                        'Cela respecte toujours la 1NF'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Le stockage de plusieurs valeurs dans une même colonne complique la manipulation et peut violer les principes de normalisation.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Contraintes et intégrité',
                            'description' => 'Quiz de niveau intermédiaire : Contraintes et intégrité.',
                            'questions' => [
                                [
                                    'question' => 'Quelle contrainte garantit généralement l’unicité d’une ligne?',
                                    'choices' => [
                                        'DEFAULT',
                                        'CHECK',
                                        'PRIMARY KEY',
                                        'NULL'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une Primary Key identifie chaque ligne de manière unique.'
                                ],
                                [
                                    'question' => 'Quel est le rôle d’une CHECK constraint?',
                                    'choices' => [
                                        'Imposer une condition sur les valeurs d’une colonne ou d’une ligne',
                                        'Créer automatiquement une table',
                                        'Supprimer les doublons',
                                        'Créer une Foreign Key'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'CHECK permet d’imposer une condition que les données doivent respecter.'
                                ],
                                [
                                    'question' => 'À quoi sert DEFAULT?',
                                    'choices' => [
                                        'Supprimer une valeur',
                                        'Créer une clé primaire',
                                        'Créer un index automatiquement dans tous les SGBD',
                                        'Fournir une valeur par défaut lorsqu’aucune valeur n’est donnée'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'DEFAULT définit une valeur utilisée lorsqu’aucune valeur explicite n’est fournie.'
                                ],
                                [
                                    'question' => 'Quelle contrainte empêche généralement une colonne de contenir NULL?',
                                    'choices' => [
                                        'NO VALUE',
                                        'NOT NULL',
                                        'REQUIRED KEY',
                                        'CHECK ONLY'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'NOT NULL oblige la colonne à recevoir une valeur.'
                                ],
                                [
                                    'question' => 'Que protège principalement une Foreign Key?',
                                    'choices' => [
                                        'La vitesse du processeur',
                                        'L’intégrité référentielle',
                                        'Le chiffrement des mots de passe',
                                        'La taille des fichiers'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une Foreign Key contribue à maintenir l’intégrité référentielle entre les tables.'
                                ],
                                [
                                    'question' => 'Que peut faire ON DELETE CASCADE?',
                                    'choices' => [
                                        'Empêcher toutes les suppressions',
                                        'Créer une nouvelle table',
                                        'Transformer une Foreign Key en Primary Key',
                                        'Supprimer automatiquement les lignes dépendantes lorsqu’une ligne référencée est supprimée'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ON DELETE CASCADE permet de propager une suppression vers les lignes dépendantes.'
                                ],
                                [
                                    'question' => 'Pourquoi les contraintes sont-elles importantes?',
                                    'choices' => [
                                        'Elles empêchent certaines données invalides d’être enregistrées',
                                        'Elles rendent toutes les requêtes plus rapides',
                                        'Elles remplacent le backend',
                                        'Elles remplacent les tests applicatifs'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les contraintes constituent une protection importante de l’intégrité des données au niveau de la base.'
                                ],
                                [
                                    'question' => 'Quelle contrainte peut garantir qu’un email ne soit pas répété?',
                                    'choices' => [
                                        'DEFAULT',
                                        'CHECK NULL',
                                        'UNIQUE',
                                        'FOREIGN ONLY'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'UNIQUE permet d’empêcher plusieurs lignes d’avoir la même valeur.'
                                ],
                                [
                                    'question' => 'Dans ce cas, le résultat est:',
                                    'choices' => [
                                        'La valeur est automatiquement corrigée',
                                        'La table est supprimée',
                                        'La contrainte est ignorée',
                                        'L’opération est rejetée'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Une violation de CHECK entraîne généralement le rejet de l’opération.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il choisir soigneusement les types de données?',
                                    'choices' => [
                                        'Pour garantir la cohérence des données et utiliser efficacement l’espace',
                                        'Pour empêcher les SELECT',
                                        'Pour supprimer les relations',
                                        'Pour éviter toutes les transactions'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un type adapté améliore la cohérence, la validation et parfois l’efficacité du stockage.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Sous-requêtes et expressions conditionnelles',
                            'description' => 'Quiz de niveau intermédiaire : Sous-requêtes et expressions conditionnelles.',
                            'questions' => [
                                [
                                    'question' => 'Une sous-requête désigne:',
                                    'choices' => [
                                        'Une table temporaire obligatoire',
                                        'Une procédure stockée uniquement',
                                        'Une requête SQL placée à l’intérieur d’une autre requête',
                                        'Une colonne spéciale'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une sous-requête est une requête imbriquée dans une autre requête SQL.'
                                ],
                                [
                                    'question' => 'Dans quelle clause peut-on trouver une sous-requête?',
                                    'choices' => [
                                        'WHERE',
                                        'Uniquement CREATE',
                                        'Uniquement DROP',
                                        'Uniquement INSERT'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une sous-requête peut notamment être utilisée dans WHERE, mais aussi dans d’autres parties d’une requête selon le besoin.'
                                ],
                                [
                                    'question' => 'Quel opérateur est souvent utilisé avec une sous-requête retournant plusieurs valeurs?',
                                    'choices' => [
                                        '= uniquement',
                                        'LIKE uniquement',
                                        'AS uniquement',
                                        'IN'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'IN est adapté lorsqu’une sous-requête retourne un ensemble de valeurs.'
                                ],
                                [
                                    'question' => 'Une sous-requête corrélée désigne:',
                                    'choices' => [
                                        'Une sous-requête toujours exécutée une seule fois',
                                        'Une sous-requête qui dépend des valeurs de la requête externe',
                                        'Une requête qui crée une table',
                                        'Une requête sans WHERE'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une sous-requête corrélée fait référence à une colonne provenant de la requête externe.'
                                ],
                                [
                                    'question' => 'Pour tester l’existence d’au moins une ligne retournée par une sous-requête, utilisez l’opérateur:',
                                    'choices' => [
                                        'FOUND',
                                        'EXISTS',
                                        'HAS',
                                        'PRESENT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'EXISTS vérifie si la sous-requête retourne au moins une ligne.'
                                ],
                                [
                                    'question' => 'Quel est l’un des avantages d’EXISTS?',
                                    'choices' => [
                                        'Il supprime les doublons automatiquement',
                                        'Il crée toujours un index',
                                        'Il remplace toutes les jointures',
                                        'Il permet de tester l’existence sans avoir besoin de récupérer toutes les valeurs'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'EXISTS sert principalement à vérifier l’existence de lignes répondant à une condition.'
                                ],
                                [
                                    'question' => 'Une sous-requête utilisée dans FROM peut être considérée comme :',
                                    'choices' => [
                                        'Une table dérivée',
                                        'Une Primary Key',
                                        'Une Foreign Key',
                                        'Une contrainte'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une sous-requête dans FROM produit un résultat pouvant être traité comme une table dérivée.'
                                ],
                                [
                                    'question' => 'Quel problème peut rendre une sous-requête avec = incorrecte?',
                                    'choices' => [
                                        'La table possède une Primary Key',
                                        'La requête utilise SELECT',
                                        'La sous-requête retourne plusieurs lignes',
                                        'La colonne est numérique'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'L’opérateur = attend généralement une seule valeur. Une sous-requête retournant plusieurs lignes nécessite souvent IN, ANY ou ALL.'
                                ],
                                [
                                    'question' => 'Quel opérateur peut comparer une valeur à toutes les valeurs retournées par une sous-requête?',
                                    'choices' => [
                                        'EVERY ROW ONLY',
                                        'TOTAL',
                                        'COMPARE ALL ROWS',
                                        'ALL'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ALL permet de comparer une expression à toutes les valeurs retournées par une sous-requête.'
                                ],
                                [
                                    'question' => 'Quel opérateur compare une valeur à au moins une valeur retournée par une sous-requête?',
                                    'choices' => [
                                        'ANY',
                                        'SOME ROW ONLY',
                                        'ONE',
                                        'MATCH ALL'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'ANY permet d’effectuer une comparaison avec au moins une valeur de l’ensemble retourné.'
                                ],
                                [
                                    'question' => 'La clause qui permet de supprimer les doublons dans un résultat SELECT est:',
                                    'choices' => [
                                        'UNIQUE ROW',
                                        'DISTINCT',
                                        'REMOVE DUPLICATES',
                                        'ONLY'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'DISTINCT permet de retourner uniquement les valeurs distinctes.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Index et diagnostic des performances',
                            'description' => 'Quiz de niveau intermédiaire : Index et diagnostic des performances.',
                            'questions' => [
                                [
                                    'question' => 'Quel est l’objectif principal d’un index?',
                                    'choices' => [
                                        'Remplacer les tables',
                                        'Supprimer les contraintes',
                                        'Accélérer certaines recherches sur les données',
                                        'Stocker uniquement les sauvegardes'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Un index permet généralement d’accélérer certaines opérations de recherche et de tri.'
                                ],
                                [
                                    'question' => 'Quel est l’inconvénient potentiel d’avoir trop d’index?',
                                    'choices' => [
                                        'Ils peuvent ralentir certaines opérations INSERT, UPDATE et DELETE',
                                        'Ils suppriment automatiquement les données',
                                        'Ils empêchent SELECT',
                                        'Ils rendent les tables impossibles à lire'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les index doivent être maintenus lors des modifications des données, ce qui peut augmenter leur coût.'
                                ],
                                [
                                    'question' => 'Sur quelle colonne crée-t-on souvent un index?',
                                    'choices' => [
                                        'Une colonne jamais utilisée',
                                        'Une colonne supprimée',
                                        'Une colonne uniquement décorative',
                                        'Une colonne fréquemment utilisée dans les recherches ou les JOIN'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Les colonnes fréquemment utilisées dans WHERE, JOIN ou ORDER BY peuvent être de bons candidats.'
                                ],
                                [
                                    'question' => 'Pour créer un index, exécutez:',
                                    'choices' => [
                                        'MAKE INDEX',
                                        'CREATE INDEX',
                                        'ADD SEARCH',
                                        'BUILD KEY ONLY'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'CREATE INDEX permet de créer un index sur une ou plusieurs colonnes.'
                                ],
                                [
                                    'question' => 'Pourquoi un index n’améliore-t-il pas forcément toutes les requêtes?',
                                    'choices' => [
                                        'Les index sont toujours ignorés',
                                        'Le SGBD peut estimer qu’un autre plan d’exécution est plus efficace',
                                        'Un index fonctionne uniquement sur les textes',
                                        'Les index ne fonctionnent qu’avec INSERT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'L’optimiseur choisit généralement le plan qu’il estime le plus efficace selon les statistiques et les conditions de la requête.'
                                ],
                                [
                                    'question' => 'Quel outil PostgreSQL permet d’analyser le plan d’exécution d’une requête?',
                                    'choices' => [
                                        'ANALYZE QUERY ONLY',
                                        'PLAN SQL',
                                        'SHOW EXECUTION',
                                        'EXPLAIN'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'EXPLAIN affiche le plan d’exécution prévu par PostgreSQL.'
                                ],
                                [
                                    'question' => 'Que fait EXPLAIN ANALYZE dans PostgreSQL?',
                                    'choices' => [
                                        'Il exécute la requête et fournit des informations sur son exécution réelle',
                                        'Il crée automatiquement une sauvegarde',
                                        'Il supprime les index inutiles',
                                        'Il transforme SELECT en UPDATE'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Dans PostgreSQL, EXPLAIN ANALYZE exécute réellement la requête avant d’en afficher les mesures ; prudence avec les instructions qui modifient les données.'
                                ],
                                [
                                    'question' => 'Pourquoi les statistiques sont-elles importantes pour l’optimiseur?',
                                    'choices' => [
                                        'Elles remplacent les données',
                                        'Elles créent automatiquement les tables',
                                        'Elles aident le SGBD à choisir un plan d’exécution approprié',
                                        'Elles empêchent les JOIN'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Les statistiques permettent à l’optimiseur d’estimer les volumes de données et de choisir un plan.'
                                ],
                                [
                                    'question' => 'Quel type d’index est couramment utilisé dans PostgreSQL pour les recherches générales?',
                                    'choices' => [
                                        'HTML-index',
                                        'Text-only index',
                                        'Memory-table index',
                                        'B-tree'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'B-tree est le type d’index par défaut et convient à de nombreux cas de recherche et de tri.'
                                ],
                                [
                                    'question' => 'Quelle pratique est généralement préférable avant de créer de nombreux index?',
                                    'choices' => [
                                        'Mesurer les performances et identifier les requêtes réellement problématiques',
                                        'Créer un index sur chaque colonne sans analyse',
                                        'Supprimer toutes les contraintes',
                                        'Créer un index sur chaque ligne'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Les index doivent être ajoutés selon les besoins réels afin d’éviter un coût inutile de maintenance.'
                                ]
                            ]
                        ]
            [
                            'title' => 'Transactions et logique côté base',
                            'description' => 'Quiz de niveau intermédiaire : Transactions et logique côté base.',
                            'questions' => [
                                [
                                    'question' => 'Une transaction désigne:',
                                    'choices' => [
                                        'Une simple colonne',
                                        'Une table spéciale',
                                        'Un ensemble d’opérations traité comme une unité logique',
                                        'Un type d’index'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une transaction regroupe plusieurs opérations qui doivent être traitées selon des règles de cohérence.'
                                ],
                                [
                                    'question' => 'Quelle commande valide définitivement une transaction?',
                                    'choices' => [
                                        'COMMIT',
                                        'SAVE',
                                        'CONFIRM',
                                        'APPLY'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'COMMIT valide les modifications de la transaction.'
                                ],
                                [
                                    'question' => 'Quelle commande annule généralement les modifications non validées?',
                                    'choices' => [
                                        'UNDO ALL',
                                        'CANCEL SQL',
                                        'REVERSE',
                                        'ROLLBACK'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ROLLBACK permet d’annuler les modifications effectuées depuis le début de la transaction ou un point de sauvegarde approprié.'
                                ],
                                [
                                    'question' => 'Pourquoi les transactions sont-elles importantes pour les opérations financières?',
                                    'choices' => [
                                        'Elles accélèrent toujours toutes les requêtes',
                                        'Elles permettent de maintenir la cohérence lorsque plusieurs opérations doivent réussir ensemble',
                                        'Elles remplacent les Foreign Keys',
                                        'Elles suppriment les besoins de validation'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une opération financière peut nécessiter plusieurs modifications qui doivent rester cohérentes.'
                                ],
                                [
                                    'question' => 'Dans des transactions, ACID désigne:',
                                    'choices' => [
                                        'Access, Control, Index, Data',
                                        'Atomicity, Consistency, Isolation, Durability',
                                        'Automatic, Complete, Internal, Database',
                                        'Application, Connection, Integration, Deployment'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'ACID représente Atomicity, Consistency, Isolation et Durability.'
                                ],
                                [
                                    'question' => 'Le terme « Atomicity » désigne:',
                                    'choices' => [
                                        'Les données sont toujours publiques',
                                        'Les requêtes sont toujours rapides',
                                        'Chaque table doit avoir deux clés',
                                        'La transaction est traitée comme une unité indivisible'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'L’atomicité signifie qu’une transaction est entièrement validée ou annulée.'
                                ],
                                [
                                    'question' => 'Le terme « Durability » désigne:',
                                    'choices' => [
                                        'Les modifications validées doivent persister même après une panne',
                                        'Les données doivent être supprimées rapidement',
                                        'Les transactions doivent être courtes',
                                        'Les index doivent être permanents'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Durability garantit la persistance des modifications validées.'
                                ],
                                [
                                    'question' => 'Quel mécanisme permet de définir un point auquel on peut effectuer un rollback partiel?',
                                    'choices' => [
                                        'CHECKPOINT ONLY',
                                        'PARTIAL COMMIT',
                                        'SAVEPOINT',
                                        'ROLLPOINT'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'SAVEPOINT permet de créer un point intermédiaire dans une transaction.'
                                ],
                                [
                                    'question' => 'Que permet généralement ROLLBACK TO SAVEPOINT?',
                                    'choices' => [
                                        'Valider toute la transaction',
                                        'Supprimer la base',
                                        'Créer un nouvel utilisateur',
                                        'Revenir à un point précis de la transaction sans annuler nécessairement toute la transaction'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ROLLBACK TO SAVEPOINT permet de revenir à un point défini précédemment.'
                                ],
                                [
                                    'question' => 'Une VIEW désigne:',
                                    'choices' => [
                                        'Une requête enregistrée pouvant être utilisée comme une table virtuelle',
                                        'Une copie physique obligatoire de toutes les données',
                                        'Une Primary Key',
                                        'Un index uniquement'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une VIEW représente généralement le résultat d’une requête et peut être interrogée comme une relation.'
                                ],
                                [
                                    'question' => 'Pour créer une VIEW, exécutez:',
                                    'choices' => [
                                        'MAKE VIEW',
                                        'CREATE VIEW',
                                        'NEW VIEW',
                                        'BUILD SELECT'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'CREATE VIEW permet de définir une vue à partir d’une requête.'
                                ],
                                [
                                    'question' => 'Une VIEW stocke-t-elle nécessairement une copie physique des données?',
                                    'choices' => [
                                        'Oui, toujours',
                                        'Oui, uniquement avec SELECT',
                                        'Non, une VIEW classique représente généralement une requête',
                                        'Oui, uniquement avec PostgreSQL'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une VIEW classique ne stocke généralement pas une copie indépendante des résultats.'
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
                    'duration' => 20 + max(0, count($quizData['questions']) - 10) * 2,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Intermediate',
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
