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

            // ============================================================
            // QUIZ 1 — NORMALISATION DES DONNÉES
            // ============================================================
            [
                'title' => 'Normalisation des données',
                'description' => 'Quiz sur les principes de normalisation et la conception relationnelle.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal de la normalisation ?',
                        'choices' => [
                            'Réduire la redondance et améliorer la cohérence des données',
                            'Augmenter volontairement le nombre de doublons',
                            'Supprimer toutes les relations entre les tables',
                            'Remplacer SQL par un autre langage',
                        ],
                        'correct' => 0,
                        'explanation' => 'La normalisation vise principalement à réduire les redondances et les anomalies de manipulation des données.'
                    ],

                    [
                        'question' => 'Que signifie 1NF dans le contexte de la normalisation ?',
                        'choices' => [
                            'Première forme normale',
                            'Première fonction numérique',
                            'Premier niveau de filtrage',
                            'Première forme de jointure',
                        ],
                        'correct' => 0,
                        'explanation' => '1NF signifie First Normal Form, ou première forme normale.'
                    ],

                    [
                        'question' => 'Une table respecte généralement la 1NF lorsque :',
                        'choices' => [
                            'Les valeurs des colonnes sont atomiques',
                            'Toutes les colonnes sont des Foreign Keys',
                            'La table ne possède aucune Primary Key',
                            'Toutes les lignes sont identiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'La 1NF impose notamment des valeurs atomiques et l’absence de groupes répétitifs.'
                    ],

                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une même information est répétée dans de nombreuses lignes ?',
                        'choices' => [
                            'Une anomalie de mise à jour',
                            'Une compilation automatique',
                            'Une amélioration automatique des performances',
                            'Une suppression automatique des doublons',
                        ],
                        'correct' => 0,
                        'explanation' => 'La répétition excessive des données peut provoquer des anomalies lors des opérations INSERT, UPDATE ou DELETE.'
                    ],

                    [
                        'question' => 'Que cherche notamment à éviter la 2NF ?',
                        'choices' => [
                            'Les dépendances partielles',
                            'Les Primary Keys',
                            'Les Foreign Keys',
                            'Les requêtes SELECT',
                        ],
                        'correct' => 0,
                        'explanation' => 'La deuxième forme normale vise notamment à éliminer les dépendances partielles par rapport à une clé composée.'
                    ],

                    [
                        'question' => 'La 3NF cherche notamment à éliminer :',
                        'choices' => [
                            'Les dépendances transitives',
                            'Les tables',
                            'Les index',
                            'Les requêtes SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'La 3NF vise notamment à supprimer les dépendances transitives entre attributs non clés.'
                    ],

                    [
                        'question' => 'Pourquoi peut-on volontairement dénormaliser une base ?',
                        'choices' => [
                            'Pour améliorer certaines performances de lecture',
                            'Pour supprimer toutes les contraintes',
                            'Pour empêcher les SELECT',
                            'Pour supprimer les relations',
                        ],
                        'correct' => 0,
                        'explanation' => 'La dénormalisation peut être utilisée dans certains cas pour réduire le coût de certaines lectures, au prix d’une redondance accrue.'
                    ],

                    [
                        'question' => 'Quel est un avantage d’une bonne normalisation ?',
                        'choices' => [
                            'Une meilleure cohérence des données',
                            'Plus de données dupliquées',
                            'Moins de contrôle sur les données',
                            'La suppression des Primary Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une conception correctement normalisée facilite la cohérence et la maintenance des données.'
                    ],

                    [
                        'question' => 'Une table contenant plusieurs colonnes répétitives comme phone1, phone2 et phone3 peut indiquer :',
                        'choices' => [
                            'Un problème potentiel de conception',
                            'Une optimisation obligatoire',
                            'Une Primary Key parfaite',
                            'Une Foreign Key automatique',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des colonnes répétitives peuvent indiquer que certaines données devraient être représentées dans une table liée.'
                    ],

                    [
                        'question' => 'Quel compromis peut exister entre normalisation et performance ?',
                        'choices' => [
                            'Une base très normalisée peut nécessiter davantage de JOIN pour certaines lectures',
                            'La normalisation interdit SQL',
                            'La normalisation supprime toujours les performances',
                            'La normalisation empêche les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une conception normalisée peut nécessiter davantage de jointures, ce qui peut parfois influencer les performances.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — CONTRAINTES ET INTÉGRITÉ
            // ============================================================
            [
                'title' => 'Contraintes et intégrité des données',
                'description' => 'Quiz sur les contraintes SQL et l’intégrité des données.',
                'questions' => [

                    [
                        'question' => 'Quelle contrainte garantit généralement l’unicité d’une ligne ?',
                        'choices' => [
                            'PRIMARY KEY',
                            'DEFAULT',
                            'CHECK',
                            'NULL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Primary Key identifie chaque ligne de manière unique.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une CHECK constraint ?',
                        'choices' => [
                            'Imposer une condition sur les valeurs d’une colonne ou d’une ligne',
                            'Créer automatiquement une table',
                            'Supprimer les doublons',
                            'Créer une Foreign Key',
                        ],
                        'correct' => 0,
                        'explanation' => 'CHECK permet d’imposer une condition que les données doivent respecter.'
                    ],

                    [
                        'question' => 'À quoi sert DEFAULT ?',
                        'choices' => [
                            'Fournir une valeur par défaut lorsqu’aucune valeur n’est donnée',
                            'Supprimer une valeur',
                            'Créer une clé primaire',
                            'Créer un index automatiquement dans tous les SGBD',
                        ],
                        'correct' => 0,
                        'explanation' => 'DEFAULT définit une valeur utilisée lorsqu’aucune valeur explicite n’est fournie.'
                    ],

                    [
                        'question' => 'Quelle contrainte empêche généralement une colonne de contenir NULL ?',
                        'choices' => [
                            'NOT NULL',
                            'NO VALUE',
                            'REQUIRED KEY',
                            'CHECK ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'NOT NULL oblige la colonne à recevoir une valeur.'
                    ],

                    [
                        'question' => 'Que protège principalement une Foreign Key ?',
                        'choices' => [
                            'L’intégrité référentielle',
                            'La vitesse du processeur',
                            'Le chiffrement des mots de passe',
                            'La taille des fichiers',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Foreign Key contribue à maintenir l’intégrité référentielle entre les tables.'
                    ],

                    [
                        'question' => 'Que peut faire ON DELETE CASCADE ?',
                        'choices' => [
                            'Supprimer automatiquement les lignes dépendantes lorsqu’une ligne référencée est supprimée',
                            'Empêcher toutes les suppressions',
                            'Créer une nouvelle table',
                            'Transformer une Foreign Key en Primary Key',
                        ],
                        'correct' => 0,
                        'explanation' => 'ON DELETE CASCADE permet de propager une suppression vers les lignes dépendantes.'
                    ],

                    [
                        'question' => 'Pourquoi les contraintes sont-elles importantes ?',
                        'choices' => [
                            'Elles empêchent certaines données invalides d’être enregistrées',
                            'Elles rendent toutes les requêtes plus rapides',
                            'Elles remplacent le backend',
                            'Elles remplacent les tests applicatifs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les contraintes constituent une protection importante de l’intégrité des données au niveau de la base.'
                    ],

                    [
                        'question' => 'Quelle contrainte peut garantir qu’un email ne soit pas répété ?',
                        'choices' => [
                            'UNIQUE',
                            'DEFAULT',
                            'CHECK NULL',
                            'FOREIGN ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'UNIQUE permet d’empêcher plusieurs lignes d’avoir la même valeur.'
                    ],

                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une valeur viole une CHECK constraint ?',
                        'choices' => [
                            'L’opération est rejetée',
                            'La valeur est automatiquement corrigée',
                            'La table est supprimée',
                            'La contrainte est ignorée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une violation de CHECK entraîne généralement le rejet de l’opération.'
                    ],

                    [
                        'question' => 'Quelle intégrité garantit qu’une Foreign Key référence une ligne valide ?',
                        'choices' => [
                            'Intégrité référentielle',
                            'Intégrité graphique',
                            'Intégrité syntaxique',
                            'Intégrité réseau',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’intégrité référentielle garantit la cohérence des références entre les tables.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — SOUS-REQUÊTES
            // ============================================================
            [
                'title' => 'Sous-requêtes SQL',
                'description' => 'Quiz sur les sous-requêtes et leur utilisation.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une sous-requête ?',
                        'choices' => [
                            'Une requête SQL placée à l’intérieur d’une autre requête',
                            'Une table temporaire obligatoire',
                            'Une procédure stockée uniquement',
                            'Une colonne spéciale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sous-requête est une requête imbriquée dans une autre requête SQL.'
                    ],

                    [
                        'question' => 'Dans quelle clause peut-on trouver une sous-requête ?',
                        'choices' => [
                            'WHERE',
                            'Uniquement CREATE',
                            'Uniquement DROP',
                            'Uniquement INSERT',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sous-requête peut notamment être utilisée dans WHERE, mais aussi dans d’autres parties d’une requête selon le besoin.'
                    ],

                    [
                        'question' => 'Quel opérateur est souvent utilisé avec une sous-requête retournant plusieurs valeurs ?',
                        'choices' => [
                            'IN',
                            '= uniquement',
                            'LIKE uniquement',
                            'AS uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'IN est adapté lorsqu’une sous-requête retourne un ensemble de valeurs.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une sous-requête corrélée ?',
                        'choices' => [
                            'Une sous-requête qui dépend des valeurs de la requête externe',
                            'Une sous-requête toujours exécutée une seule fois',
                            'Une requête qui crée une table',
                            'Une requête sans WHERE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sous-requête corrélée fait référence à une colonne provenant de la requête externe.'
                    ],

                    [
                        'question' => 'Quel opérateur permet de tester l’existence d’au moins une ligne retournée par une sous-requête ?',
                        'choices' => [
                            'EXISTS',
                            'FOUND',
                            'HAS',
                            'PRESENT',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXISTS vérifie si la sous-requête retourne au moins une ligne.'
                    ],

                    [
                        'question' => 'Quel est l’un des avantages d’EXISTS ?',
                        'choices' => [
                            'Il permet de tester l’existence sans avoir besoin de récupérer toutes les valeurs',
                            'Il supprime les doublons automatiquement',
                            'Il crée toujours un index',
                            'Il remplace toutes les jointures',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXISTS sert principalement à vérifier l’existence de lignes répondant à une condition.'
                    ],

                    [
                        'question' => 'Une sous-requête utilisée dans FROM peut être considérée comme :',
                        'choices' => [
                            'Une table dérivée',
                            'Une Primary Key',
                            'Une Foreign Key',
                            'Une contrainte',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une sous-requête dans FROM produit un résultat pouvant être traité comme une table dérivée.'
                    ],

                    [
                        'question' => 'Quel problème peut rendre une sous-requête avec = incorrecte ?',
                        'choices' => [
                            'La sous-requête retourne plusieurs lignes',
                            'La table possède une Primary Key',
                            'La requête utilise SELECT',
                            'La colonne est numérique',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’opérateur = attend généralement une seule valeur. Une sous-requête retournant plusieurs lignes nécessite souvent IN, ANY ou ALL.'
                    ],

                    [
                        'question' => 'Quel opérateur peut comparer une valeur à toutes les valeurs retournées par une sous-requête ?',
                        'choices' => [
                            'ALL',
                            'EVERY ROW ONLY',
                            'TOTAL',
                            'COMPARE ALL ROWS',
                        ],
                        'correct' => 0,
                        'explanation' => 'ALL permet de comparer une expression à toutes les valeurs retournées par une sous-requête.'
                    ],

                    [
                        'question' => 'Quel opérateur compare une valeur à au moins une valeur retournée par une sous-requête ?',
                        'choices' => [
                            'ANY',
                            'SOME ROW ONLY',
                            'ONE',
                            'MATCH ALL',
                        ],
                        'correct' => 0,
                        'explanation' => 'ANY permet d’effectuer une comparaison avec au moins une valeur de l’ensemble retourné.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — INDEX ET PERFORMANCES
            // ============================================================
            [
                'title' => 'Index et performances',
                'description' => 'Quiz sur les index et les bases de l’optimisation des requêtes.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif principal d’un index ?',
                        'choices' => [
                            'Accélérer certaines recherches sur les données',
                            'Remplacer les tables',
                            'Supprimer les contraintes',
                            'Stocker uniquement les sauvegardes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un index permet généralement d’accélérer certaines opérations de recherche et de tri.'
                    ],

                    [
                        'question' => 'Quel est l’inconvénient potentiel d’avoir trop d’index ?',
                        'choices' => [
                            'Ils peuvent ralentir certaines opérations INSERT, UPDATE et DELETE',
                            'Ils suppriment automatiquement les données',
                            'Ils empêchent SELECT',
                            'Ils rendent les tables impossibles à lire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les index doivent être maintenus lors des modifications des données, ce qui peut augmenter leur coût.'
                    ],

                    [
                        'question' => 'Sur quelle colonne crée-t-on souvent un index ?',
                        'choices' => [
                            'Une colonne fréquemment utilisée dans les recherches ou les JOIN',
                            'Une colonne jamais utilisée',
                            'Une colonne supprimée',
                            'Une colonne uniquement décorative',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les colonnes fréquemment utilisées dans WHERE, JOIN ou ORDER BY peuvent être de bons candidats.'
                    ],

                    [
                        'question' => 'Quelle commande permet de créer un index ?',
                        'choices' => [
                            'CREATE INDEX',
                            'MAKE INDEX',
                            'ADD SEARCH',
                            'BUILD KEY ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'CREATE INDEX permet de créer un index sur une ou plusieurs colonnes.'
                    ],

                    [
                        'question' => 'Pourquoi un index n’améliore-t-il pas forcément toutes les requêtes ?',
                        'choices' => [
                            'Le SGBD peut estimer qu’un autre plan d’exécution est plus efficace',
                            'Les index sont toujours ignorés',
                            'Un index fonctionne uniquement sur les textes',
                            'Les index ne fonctionnent qu’avec INSERT',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’optimiseur choisit généralement le plan qu’il estime le plus efficace selon les statistiques et les conditions de la requête.'
                    ],

                    [
                        'question' => 'Quel outil PostgreSQL permet d’analyser le plan d’exécution d’une requête ?',
                        'choices' => [
                            'EXPLAIN',
                            'ANALYZE QUERY ONLY',
                            'PLAN SQL',
                            'SHOW EXECUTION',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXPLAIN affiche le plan d’exécution prévu par PostgreSQL.'
                    ],

                    [
                        'question' => 'Que fait EXPLAIN ANALYZE dans PostgreSQL ?',
                        'choices' => [
                            'Il exécute la requête et fournit des informations sur son exécution réelle',
                            'Il crée automatiquement une sauvegarde',
                            'Il supprime les index inutiles',
                            'Il transforme SELECT en UPDATE',
                        ],
                        'correct' => 0,
                        'explanation' => 'EXPLAIN ANALYZE exécute la requête et fournit des statistiques réelles sur son exécution.'
                    ],

                    [
                        'question' => 'Pourquoi les statistiques sont-elles importantes pour l’optimiseur ?',
                        'choices' => [
                            'Elles aident le SGBD à choisir un plan d’exécution approprié',
                            'Elles remplacent les données',
                            'Elles créent automatiquement les tables',
                            'Elles empêchent les JOIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les statistiques permettent à l’optimiseur d’estimer les volumes de données et de choisir un plan.'
                    ],

                    [
                        'question' => 'Quel type d’index est couramment utilisé dans PostgreSQL pour les recherches générales ?',
                        'choices' => [
                            'B-tree',
                            'HTML-index',
                            'Text-only index',
                            'Memory-table index',
                        ],
                        'correct' => 0,
                        'explanation' => 'B-tree est le type d’index par défaut et convient à de nombreux cas de recherche et de tri.'
                    ],

                    [
                        'question' => 'Quelle pratique est généralement préférable avant de créer de nombreux index ?',
                        'choices' => [
                            'Mesurer les performances et identifier les requêtes réellement problématiques',
                            'Créer un index sur chaque colonne sans analyse',
                            'Supprimer toutes les contraintes',
                            'Créer un index sur chaque ligne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les index doivent être ajoutés selon les besoins réels afin d’éviter un coût inutile de maintenance.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — VUES ET PROCÉDURES
            // ============================================================
            [
                'title' => 'Vues et logique SQL',
                'description' => 'Quiz sur les VIEW, fonctions et mécanismes de logique côté base.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une VIEW ?',
                        'choices' => [
                            'Une requête enregistrée pouvant être utilisée comme une table virtuelle',
                            'Une copie physique obligatoire de toutes les données',
                            'Une Primary Key',
                            'Un index uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une VIEW représente généralement le résultat d’une requête et peut être interrogée comme une relation.'
                    ],

                    [
                        'question' => 'Quelle commande permet de créer une VIEW ?',
                        'choices' => [
                            'CREATE VIEW',
                            'MAKE VIEW',
                            'NEW VIEW',
                            'BUILD SELECT',
                        ],
                        'correct' => 0,
                        'explanation' => 'CREATE VIEW permet de définir une vue à partir d’une requête.'
                    ],

                    [
                        'question' => 'Quel est un avantage courant d’une VIEW ?',
                        'choices' => [
                            'Simplifier l’accès à des requêtes complexes',
                            'Remplacer toutes les tables',
                            'Supprimer automatiquement les données',
                            'Créer toujours un index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une VIEW peut encapsuler une requête complexe et simplifier son utilisation par les applications ou utilisateurs.'
                    ],

                    [
                        'question' => 'Une VIEW stocke-t-elle nécessairement une copie physique des données ?',
                        'choices' => [
                            'Non, une VIEW classique représente généralement une requête',
                            'Oui, toujours',
                            'Oui, uniquement avec SELECT',
                            'Oui, uniquement avec PostgreSQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une VIEW classique ne stocke généralement pas une copie indépendante des résultats.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une fonction SQL côté base de données ?',
                        'choices' => [
                            'Un programme pouvant recevoir des paramètres et retourner un résultat',
                            'Une table temporaire uniquement',
                            'Une Primary Key',
                            'Une colonne obligatoire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une fonction peut encapsuler une logique réutilisable et éventuellement retourner une valeur ou un ensemble de lignes.'
                    ],

                    [
                        'question' => 'Quel est l’intérêt d’encapsuler une logique dans une fonction ?',
                        'choices' => [
                            'Réutiliser une logique commune',
                            'Supprimer les relations',
                            'Empêcher tous les SELECT',
                            'Éliminer les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les fonctions permettent de centraliser et réutiliser certaines opérations ou règles.'
                    ],

                    [
                        'question' => 'Quel mécanisme peut exécuter automatiquement une logique lorsqu’un événement se produit sur une table ?',
                        'choices' => [
                            'TRIGGER',
                            'INDEX',
                            'VIEW',
                            'ALIAS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un TRIGGER peut exécuter une fonction ou une logique en réponse à certains événements comme INSERT, UPDATE ou DELETE.'
                    ],

                    [
                        'question' => 'Un trigger peut notamment être déclenché lors de :',
                        'choices' => [
                            'INSERT, UPDATE ou DELETE',
                            'Uniquement SELECT',
                            'Uniquement CREATE DATABASE',
                            'Uniquement DROP DATABASE',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les triggers peuvent être associés à plusieurs événements de modification selon le SGBD.'
                    ],

                    [
                        'question' => 'Quel risque faut-il surveiller avec des triggers complexes ?',
                        'choices' => [
                            'Une logique difficile à comprendre et à maintenir',
                            'La disparition automatique de SQL',
                            'L’impossibilité de créer des tables',
                            'La suppression automatique de tous les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une utilisation excessive ou complexe des triggers peut rendre le comportement de la base plus difficile à comprendre et maintenir.'
                    ],

                    [
                        'question' => 'Quelle commande permet de supprimer une VIEW ?',
                        'choices' => [
                            'DROP VIEW',
                            'DELETE VIEW',
                            'REMOVE VIEW',
                            'CLEAR VIEW',
                        ],
                        'correct' => 0,
                        'explanation' => 'DROP VIEW permet de supprimer une vue.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — TRANSACTIONS
            // ============================================================
            [
                'title' => 'Transactions SQL',
                'description' => 'Quiz sur les transactions, COMMIT, ROLLBACK et la cohérence des opérations.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une transaction ?',
                        'choices' => [
                            'Un ensemble d’opérations traité comme une unité logique',
                            'Une simple colonne',
                            'Une table spéciale',
                            'Un type d’index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une transaction regroupe plusieurs opérations qui doivent être traitées selon des règles de cohérence.'
                    ],

                    [
                        'question' => 'Quelle commande valide définitivement une transaction ?',
                        'choices' => [
                            'COMMIT',
                            'SAVE',
                            'CONFIRM',
                            'APPLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'COMMIT valide les modifications de la transaction.'
                    ],

                    [
                        'question' => 'Quelle commande annule généralement les modifications non validées ?',
                        'choices' => [
                            'ROLLBACK',
                            'UNDO ALL',
                            'CANCEL SQL',
                            'REVERSE',
                        ],
                        'correct' => 0,
                        'explanation' => 'ROLLBACK permet d’annuler les modifications effectuées depuis le début de la transaction ou un point de sauvegarde approprié.'
                    ],

                    [
                        'question' => 'Pourquoi les transactions sont-elles importantes pour les opérations financières ?',
                        'choices' => [
                            'Elles permettent de maintenir la cohérence lorsque plusieurs opérations doivent réussir ensemble',
                            'Elles accélèrent toujours toutes les requêtes',
                            'Elles remplacent les Foreign Keys',
                            'Elles suppriment les besoins de validation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une opération financière peut nécessiter plusieurs modifications qui doivent rester cohérentes.'
                    ],

                    [
                        'question' => 'Que signifie ACID dans le contexte des transactions ?',
                        'choices' => [
                            'Atomicity, Consistency, Isolation, Durability',
                            'Access, Control, Index, Data',
                            'Automatic, Complete, Internal, Database',
                            'Application, Connection, Integration, Deployment',
                        ],
                        'correct' => 0,
                        'explanation' => 'ACID représente Atomicity, Consistency, Isolation et Durability.'
                    ],

                    [
                        'question' => 'Que signifie Atomicity ?',
                        'choices' => [
                            'La transaction est traitée comme une unité indivisible',
                            'Les données sont toujours publiques',
                            'Les requêtes sont toujours rapides',
                            'Chaque table doit avoir deux clés',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’atomicité signifie qu’une transaction est entièrement validée ou annulée.'
                    ],

                    [
                        'question' => 'Que signifie Durability ?',
                        'choices' => [
                            'Les modifications validées doivent persister même après une panne',
                            'Les données doivent être supprimées rapidement',
                            'Les transactions doivent être courtes',
                            'Les index doivent être permanents',
                        ],
                        'correct' => 0,
                        'explanation' => 'Durability garantit la persistance des modifications validées.'
                    ],

                    [
                        'question' => 'Quel mécanisme permet de définir un point auquel on peut effectuer un rollback partiel ?',
                        'choices' => [
                            'SAVEPOINT',
                            'CHECKPOINT ONLY',
                            'PARTIAL COMMIT',
                            'ROLLPOINT',
                        ],
                        'correct' => 0,
                        'explanation' => 'SAVEPOINT permet de créer un point intermédiaire dans une transaction.'
                    ],

                    [
                        'question' => 'Que permet généralement ROLLBACK TO SAVEPOINT ?',
                        'choices' => [
                            'Revenir à un point précis de la transaction sans annuler nécessairement toute la transaction',
                            'Valider toute la transaction',
                            'Supprimer la base',
                            'Créer un nouvel utilisateur',
                        ],
                        'correct' => 0,
                        'explanation' => 'ROLLBACK TO SAVEPOINT permet de revenir à un point défini précédemment.'
                    ],

                    [
                        'question' => 'Quelle opération termine normalement une transaction avec succès ?',
                        'choices' => [
                            'COMMIT',
                            'ROLLBACK',
                            'DROP',
                            'TRUNCATE',
                        ],
                        'correct' => 0,
                        'explanation' => 'COMMIT indique que les modifications de la transaction doivent être validées.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — SQL AVANCÉ INTERMÉDIAIRE
            // ============================================================
            [
                'title' => 'SQL intermédiaire',
                'description' => 'Quiz sur des fonctionnalités SQL plus avancées.',
                'questions' => [

                    [
                        'question' => 'Quelle clause permet de supprimer les doublons dans un résultat SELECT ?',
                        'choices' => [
                            'DISTINCT',
                            'UNIQUE ROW',
                            'REMOVE DUPLICATES',
                            'ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'DISTINCT permet de retourner uniquement les valeurs distinctes.'
                    ],

                    [
                        'question' => 'Quel opérateur permet de combiner deux résultats SELECT en supprimant les doublons ?',
                        'choices' => [
                            'UNION',
                            'MERGE SELECT',
                            'JOIN RESULT',
                            'COMBINE',
                        ],
                        'correct' => 0,
                        'explanation' => 'UNION combine les résultats de deux requêtes compatibles et élimine les doublons.'
                    ],

                    [
                        'question' => 'Quel opérateur conserve les doublons lors de la combinaison de résultats ?',
                        'choices' => [
                            'UNION ALL',
                            'UNION DUPLICATES',
                            'ALL UNION ONLY',
                            'COMBINE ALL ROWS',
                        ],
                        'correct' => 0,
                        'explanation' => 'UNION ALL conserve les doublons contrairement à UNION.'
                    ],

                    [
                        'question' => 'Quelle expression permet de retourner une valeur différente selon une condition ?',
                        'choices' => [
                            'CASE',
                            'IF COLUMN ONLY',
                            'WHEN ONLY',
                            'CONDITION VALUE',
                        ],
                        'correct' => 0,
                        'explanation' => 'CASE permet d’effectuer une logique conditionnelle directement dans une requête SQL.'
                    ],

                    [
                        'question' => 'Quel mot-clé est utilisé dans une expression CASE pour définir une condition ?',
                        'choices' => [
                            'WHEN',
                            'IF',
                            'CHECK',
                            'CONDITION',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une expression CASE utilise WHEN ... THEN ... et peut comporter ELSE.'
                    ],

                    [
                        'question' => 'Quelle fonction permet de remplacer NULL par une autre valeur dans PostgreSQL ?',
                        'choices' => [
                            'COALESCE()',
                            'REPLACE_NULL()',
                            'NULLTO()',
                            'DEFAULT_NULL()',
                        ],
                        'correct' => 0,
                        'explanation' => 'COALESCE retourne la première expression non NULL parmi celles fournies.'
                    ],

                    [
                        'question' => 'Quelle fonction permet de compter toutes les lignes, même si certaines colonnes contiennent NULL ?',
                        'choices' => [
                            'COUNT(*)',
                            'COUNT(column)',
                            'TOTAL(NULL)',
                            'COUNT(NULL)',
                        ],
                        'correct' => 0,
                        'explanation' => 'COUNT(*) compte les lignes indépendamment des valeurs NULL dans les colonnes.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de limiter le nombre de lignes retournées dans PostgreSQL ?',
                        'choices' => [
                            'LIMIT',
                            'TOP',
                            'MAX ROWS',
                            'ROW LIMITER',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL utilise LIMIT pour limiter le nombre de lignes retournées.'
                    ],

                    [
                        'question' => 'Quel mot-clé permet de commencer le résultat à partir d’une certaine position ?',
                        'choices' => [
                            'OFFSET',
                            'START',
                            'SKIP ROWS',
                            'BEGIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'OFFSET permet d’ignorer un certain nombre de lignes avant de retourner les résultats.'
                    ],

                    [
                        'question' => 'Quelle clause doit généralement apparaître avant ORDER BY ?',
                        'choices' => [
                            'WHERE ou GROUP BY/HAVING selon la requête',
                            'LIMIT uniquement',
                            'OFFSET uniquement',
                            'DROP',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’ordre syntaxique dépend de la requête, mais ORDER BY intervient après WHERE, GROUP BY et HAVING lorsqu’ils sont présents.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — CONCEPTION ET BONNES PRATIQUES
            // ============================================================
            [
                'title' => 'Conception et bonnes pratiques SQL',
                'description' => 'Quiz récapitulatif sur la conception et les bonnes pratiques des bases de données.',
                'questions' => [

                    [
                        'question' => 'Pourquoi faut-il choisir soigneusement les types de données ?',
                        'choices' => [
                            'Pour garantir la cohérence des données et utiliser efficacement l’espace',
                            'Pour empêcher les SELECT',
                            'Pour supprimer les relations',
                            'Pour éviter toutes les transactions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un type adapté améliore la cohérence, la validation et parfois l’efficacité du stockage.'
                    ],

                    [
                        'question' => 'Pourquoi éviter de stocker plusieurs valeurs séparées par des virgules dans une seule colonne ?',
                        'choices' => [
                            'Cela complique les recherches, les contraintes et les relations',
                            'Cela accélère toujours les requêtes',
                            'Cela crée automatiquement des Foreign Keys',
                            'Cela respecte toujours la 1NF',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le stockage de plusieurs valeurs dans une même colonne complique la manipulation et peut violer les principes de normalisation.'
                    ],

                    [
                        'question' => 'Pourquoi nommer clairement les tables et colonnes ?',
                        'choices' => [
                            'Pour améliorer la compréhension et la maintenance du système',
                            'Pour accélérer automatiquement toutes les requêtes',
                            'Pour éviter les Primary Keys',
                            'Pour supprimer les contraintes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des noms cohérents rendent le schéma plus facile à comprendre et à maintenir.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il éviter SELECT * dans certains contextes applicatifs ?',
                        'choices' => [
                            'Pour ne récupérer que les colonnes nécessaires',
                            'Parce que SELECT * est toujours invalide',
                            'Parce que PostgreSQL ne le supporte pas',
                            'Parce qu’il supprime les index',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sélectionner uniquement les colonnes nécessaires peut réduire les données transférées et rendre les requêtes plus explicites.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser des requêtes paramétrées dans une application ?',
                        'choices' => [
                            'Pour réduire notamment le risque d’injection SQL',
                            'Pour supprimer les transactions',
                            'Pour créer automatiquement des index',
                            'Pour remplacer les Foreign Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les requêtes paramétrées séparent les données des instructions SQL et constituent une protection importante contre l’injection SQL.'
                    ],

                    [
                        'question' => 'Pourquoi les sauvegardes sont-elles importantes ?',
                        'choices' => [
                            'Pour pouvoir restaurer les données en cas de perte ou d’incident',
                            'Pour accélérer SELECT',
                            'Pour remplacer les transactions',
                            'Pour supprimer les erreurs SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les sauvegardes permettent de restaurer les données après une panne, une erreur humaine ou un autre incident.'
                    ],

                    [
                        'question' => 'Quel principe est important lorsqu’on donne des permissions à un utilisateur de base de données ?',
                        'choices' => [
                            'Accorder uniquement les privilèges nécessaires',
                            'Donner toujours tous les privilèges',
                            'Interdire toutes les lectures',
                            'Utiliser le même compte pour tous les utilisateurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le principe du moindre privilège limite les permissions à ce qui est réellement nécessaire.'
                    ],

                    [
                        'question' => 'Pourquoi séparer les environnements development et production ?',
                        'choices' => [
                            'Pour éviter que les tests ou modifications expérimentales affectent les données réelles',
                            'Pour empêcher SQL de fonctionner',
                            'Pour supprimer les sauvegardes',
                            'Pour éviter les Foreign Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'La séparation des environnements réduit les risques liés aux tests et aux changements non validés.'
                    ],

                    [
                        'question' => 'Quel élément doit être surveillé lorsqu’une application effectue de nombreuses requêtes SQL ?',
                        'choices' => [
                            'Les performances et les requêtes coûteuses',
                            'Uniquement le nom des tables',
                            'La couleur de l’interface',
                            'Le nombre de fichiers CSS',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le suivi des performances permet d’identifier les requêtes lentes et les problèmes liés à la base de données.'
                    ],

                    [
                        'question' => 'Quelle approche est généralement préférable lorsqu’une requête est lente ?',
                        'choices' => [
                            'Analyser son plan d’exécution avant d’appliquer une optimisation',
                            'Créer immédiatement dix index',
                            'Supprimer la Primary Key',
                            'Remplacer toutes les tables',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’analyse du plan d’exécution permet de comprendre le problème avant de choisir une optimisation adaptée.'
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