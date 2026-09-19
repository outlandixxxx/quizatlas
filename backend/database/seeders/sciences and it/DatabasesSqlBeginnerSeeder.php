<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabasesSqlBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'databases-sql')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — FONDAMENTAUX DES BASES DE DONNÉES
            // ============================================================
            [
                'title' => 'Fondamentaux des bases de données',
                'description' => 'Quiz d’introduction aux concepts fondamentaux des bases de données.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’une base de données ?',
                        'choices' => [
                            'Un ensemble organisé de données pouvant être stockées et consultées',
                            'Un programme uniquement destiné à créer des interfaces',
                            'Un système utilisé uniquement pour envoyer des emails',
                            'Un fichier contenant obligatoirement une seule donnée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une base de données permet de stocker, organiser, gérer et consulter des données de manière structurée.'
                    ],

                    [
                        'question' => 'Quel logiciel permet généralement de gérer une base de données relationnelle ?',
                        'choices' => [
                            'SGBD',
                            'Navigateur Web',
                            'Éditeur d’images',
                            'Compilateur uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un SGBD, ou Système de Gestion de Base de Données, permet de créer et gérer des bases de données.'
                    ],

                    [
                        'question' => 'Que signifie SGBD ?',
                        'choices' => [
                            'Système de Gestion de Base de Données',
                            'Système Général de Backup des Données',
                            'Service Global de Base Digitale',
                            'Système Graphique de Données',
                        ],
                        'correct' => 0,
                        'explanation' => 'SGBD signifie Système de Gestion de Base de Données.'
                    ],

                    [
                        'question' => 'Lequel est un SGBD relationnel ?',
                        'choices' => [
                            'PostgreSQL',
                            'HTML',
                            'CSS',
                            'Git',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL est un SGBD relationnel qui utilise notamment SQL pour manipuler les données.'
                    ],

                    [
                        'question' => 'Dans une base de données relationnelle, comment les données sont-elles principalement organisées ?',
                        'choices' => [
                            'Dans des tables composées de lignes et de colonnes',
                            'Uniquement dans des fichiers texte',
                            'Dans des images',
                            'Dans des pages HTML',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une base relationnelle organise généralement les données dans des tables constituées de lignes et de colonnes.'
                    ],

                    [
                        'question' => 'Que représente généralement une ligne dans une table ?',
                        'choices' => [
                            'Un enregistrement',
                            'Une base de données entière',
                            'Une colonne',
                            'Une requête SQL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une ligne représente généralement un enregistrement ou une occurrence d’une entité.'
                    ],

                    [
                        'question' => 'Que représente généralement une colonne ?',
                        'choices' => [
                            'Un attribut ou une propriété des enregistrements',
                            'Une base entière',
                            'Un utilisateur',
                            'Une requête complète',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une colonne représente une propriété particulière des données stockées dans la table.'
                    ],

                    [
                        'question' => 'Quel est le rôle principal d’un SGBD ?',
                        'choices' => [
                            'Stocker, organiser, modifier et récupérer les données',
                            'Créer uniquement des pages Web',
                            'Compiler du code Java',
                            'Créer uniquement des fichiers PDF',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un SGBD fournit les mécanismes nécessaires pour gérer les données et contrôler leur accès.'
                    ],

                    [
                        'question' => 'Quel langage est principalement utilisé pour interagir avec les bases de données relationnelles ?',
                        'choices' => [
                            'SQL',
                            'HTML',
                            'CSS',
                            'XML uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'SQL est le langage standard largement utilisé pour interroger et manipuler les bases de données relationnelles.'
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on une base de données dans une application ?',
                        'choices' => [
                            'Pour conserver et gérer les données de manière structurée',
                            'Pour remplacer complètement le code source',
                            'Pour créer uniquement le design',
                            'Pour supprimer toutes les données automatiquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les applications utilisent les bases de données pour conserver durablement les informations nécessaires à leur fonctionnement.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — TABLES ET RELATIONS
            // ============================================================
            [
                'title' => 'Tables et relations',
                'description' => 'Quiz sur les tables, les clés et les relations entre les données.',
                'questions' => [

                    [
                        'question' => 'Quelle commande SQL permet généralement de créer une table ?',
                        'choices' => [
                            'CREATE TABLE',
                            'MAKE TABLE',
                            'NEW TABLE',
                            'BUILD TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'La commande CREATE TABLE permet de définir une nouvelle table et ses colonnes.'
                    ],

                    [
                        'question' => 'Quel élément permet généralement d’identifier de manière unique une ligne ?',
                        'choices' => [
                            'Primary Key',
                            'Foreign Key uniquement',
                            'COMMENT',
                            'VIEW',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Primary Key identifie de manière unique chaque enregistrement d’une table.'
                    ],

                    [
                        'question' => 'Quel est le rôle d’une Foreign Key ?',
                        'choices' => [
                            'Établir une relation avec une autre table',
                            'Supprimer automatiquement toutes les tables',
                            'Trier une table',
                            'Créer une base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Foreign Key référence généralement une clé d’une autre table afin de représenter une relation.'
                    ],

                    [
                        'question' => 'Une Primary Key peut-elle contenir deux fois la même valeur ?',
                        'choices' => [
                            'Non',
                            'Oui, toujours',
                            'Uniquement avec PostgreSQL',
                            'Uniquement si la table contient plus de 100 lignes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les valeurs d’une Primary Key doivent être uniques afin d’identifier chaque ligne sans ambiguïté.'
                    ],

                    [
                        'question' => 'Quelle relation correspond généralement à un auteur pouvant écrire plusieurs livres ?',
                        'choices' => [
                            'One-to-Many',
                            'One-to-One uniquement',
                            'Many-to-Many uniquement',
                            'Zero-to-Zero',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un auteur peut avoir plusieurs livres tandis qu’un livre peut être associé à un auteur dans ce modèle simplifié : c’est une relation One-to-Many.'
                    ],

                    [
                        'question' => 'Quelle relation permet à plusieurs étudiants d’être inscrits à plusieurs cours ?',
                        'choices' => [
                            'Many-to-Many',
                            'One-to-One',
                            'One-to-Zero',
                            'One-to-Many uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Plusieurs étudiants peuvent suivre plusieurs cours : il s’agit d’une relation Many-to-Many.'
                    ],

                    [
                        'question' => 'Quelle structure est généralement utilisée pour représenter une relation Many-to-Many dans une base relationnelle ?',
                        'choices' => [
                            'Une table intermédiaire',
                            'Une seule colonne texte',
                            'Un fichier image',
                            'Une table sans clé',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une table intermédiaire, souvent appelée pivot table, permet de relier les enregistrements des deux tables.'
                    ],

                    [
                        'question' => 'Quelle contrainte empêche généralement une colonne d’accepter NULL ?',
                        'choices' => [
                            'NOT NULL',
                            'NO NULLABLE',
                            'REQUIRED ONLY',
                            'NOT EMPTY ROW',
                        ],
                        'correct' => 0,
                        'explanation' => 'La contrainte NOT NULL indique qu’une valeur doit être fournie pour la colonne.'
                    ],

                    [
                        'question' => 'Quelle contrainte permet d’imposer l’unicité d’une colonne ?',
                        'choices' => [
                            'UNIQUE',
                            'SINGLE',
                            'ONLY',
                            'DISTINCT COLUMN',
                        ],
                        'correct' => 0,
                        'explanation' => 'La contrainte UNIQUE empêche plusieurs lignes d’avoir la même valeur dans la colonne concernée.'
                    ],

                    [
                        'question' => 'Pourquoi les relations entre tables sont-elles importantes ?',
                        'choices' => [
                            'Elles permettent de représenter les liens entre différentes catégories de données',
                            'Elles empêchent toute requête SQL',
                            'Elles suppriment les colonnes',
                            'Elles remplacent les Primary Keys',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les relations permettent de représenter correctement les liens logiques entre les différentes entités d’une application.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — INTRODUCTION AU SQL
            // ============================================================
            [
                'title' => 'Introduction au SQL',
                'description' => 'Quiz d’introduction à la syntaxe et aux commandes SQL essentielles.',
                'questions' => [

                    [
                        'question' => 'Que signifie SQL ?',
                        'choices' => [
                            'Structured Query Language',
                            'Simple Question Language',
                            'System Query Logic',
                            'Structured Quick Language',
                        ],
                        'correct' => 0,
                        'explanation' => 'SQL signifie Structured Query Language.'
                    ],

                    [
                        'question' => 'Quelle commande permet de récupérer des données ?',
                        'choices' => [
                            'SELECT',
                            'GETDATA',
                            'FETCHALL',
                            'READ TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'SELECT permet de récupérer des données depuis une ou plusieurs tables.'
                    ],

                    [
                        'question' => 'Quelle clause permet de filtrer les lignes dans une requête SELECT ?',
                        'choices' => [
                            'WHERE',
                            'FILTER',
                            'WHEN',
                            'HAVING ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'La clause WHERE permet de définir les conditions auxquelles les lignes doivent répondre.'
                    ],

                    [
                        'question' => 'Quelle commande permet d’ajouter de nouvelles lignes ?',
                        'choices' => [
                            'INSERT',
                            'ADD ROW',
                            'CREATE ROW',
                            'APPEND TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'INSERT permet d’ajouter de nouveaux enregistrements dans une table.'
                    ],

                    [
                        'question' => 'Quelle commande permet de modifier des données existantes ?',
                        'choices' => [
                            'UPDATE',
                            'MODIFY TABLE',
                            'CHANGE ROW',
                            'ALTER DATA',
                        ],
                        'correct' => 0,
                        'explanation' => 'UPDATE permet de modifier les valeurs des lignes existantes.'
                    ],

                    [
                        'question' => 'Quelle commande permet de supprimer des lignes ?',
                        'choices' => [
                            'DELETE',
                            'REMOVE ROW',
                            'DROP ROW',
                            'CLEAR DATA',
                        ],
                        'correct' => 0,
                        'explanation' => 'DELETE permet de supprimer des lignes selon une condition éventuelle.'
                    ],

                    [
                        'question' => 'Quelle commande supprime généralement toute une table, y compris sa structure ?',
                        'choices' => [
                            'DROP TABLE',
                            'DELETE TABLE',
                            'REMOVE TABLE',
                            'CLEAR TABLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'DROP TABLE supprime la table elle-même ainsi que sa structure.'
                    ],

                    [
                        'question' => 'Quelle commande permet de modifier la structure d’une table existante ?',
                        'choices' => [
                            'ALTER TABLE',
                            'UPDATE TABLE',
                            'CHANGE TABLE',
                            'MODIFY DATABASE ROW',
                        ],
                        'correct' => 0,
                        'explanation' => 'ALTER TABLE permet notamment d’ajouter, modifier ou supprimer des colonnes selon le SGBD.'
                    ],

                    [
                        'question' => 'Quelle commande SQL permet de supprimer toutes les lignes d’une table tout en conservant sa structure ?',
                        'choices' => [
                            'TRUNCATE',
                            'DROP',
                            'REMOVE TABLE',
                            'DELETE DATABASE',
                        ],
                        'correct' => 0,
                        'explanation' => 'TRUNCATE supprime les lignes d’une table tout en conservant la structure de la table.'
                    ],

                    [
                        'question' => 'Quelle clause permet de donner un nom temporaire à une colonne dans le résultat ?',
                        'choices' => [
                            'AS',
                            'NAME',
                            'RENAME RESULT',
                            'LABEL',
                        ],
                        'correct' => 0,
                        'explanation' => 'La clause AS permet de définir un alias pour une colonne ou une table dans une requête.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — SELECT ET FILTRAGE
            // ============================================================
            [
                'title' => 'SELECT et filtrage',
                'description' => 'Quiz pratique sur SELECT, WHERE et les conditions SQL.',
                'questions' => [

                    [
                        'question' => 'Quelle requête permet de récupérer toutes les colonnes d’une table users ?',
                        'choices' => [
                            'SELECT * FROM users;',
                            'GET ALL FROM users;',
                            'SELECT ALL users;',
                            'READ users;',
                        ],
                        'correct' => 0,
                        'explanation' => 'SELECT * FROM users récupère toutes les colonnes de la table users.'
                    ],

                    [
                        'question' => 'Quelle condition permet de sélectionner les utilisateurs dont l’âge est supérieur à 18 ?',
                        'choices' => [
                            'WHERE age > 18',
                            'WHERE age < 18',
                            'WHERE age = 18',
                            'WHERE age <> 18',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’opérateur > permet de sélectionner les valeurs strictement supérieures à 18.'
                    ],

                    [
                        'question' => 'Quel opérateur permet de vérifier qu’une valeur est comprise dans une liste ?',
                        'choices' => [
                            'IN',
                            'LIST',
                            'BETWEEN ONLY',
                            'CONTAINS',
                        ],
                        'correct' => 0,
                        'explanation' => 'IN permet de vérifier si une valeur correspond à l’une des valeurs fournies.'
                    ],

                    [
                        'question' => 'Quel opérateur permet de rechercher une chaîne correspondant à un modèle ?',
                        'choices' => [
                            'LIKE',
                            'MATCH ONLY',
                            'SEARCH',
                            'PATTERN',
                        ],
                        'correct' => 0,
                        'explanation' => 'LIKE permet d’effectuer des recherches selon un modèle avec notamment % et _.'
                    ],

                    [
                        'question' => 'Dans LIKE, que représente généralement le caractère % ?',
                        'choices' => [
                            'Zéro ou plusieurs caractères',
                            'Exactement un caractère',
                            'Un nombre uniquement',
                            'Une colonne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le caractère % représente une séquence de zéro ou plusieurs caractères.'
                    ],

                    [
                        'question' => 'Dans LIKE, que représente généralement le caractère _ ?',
                        'choices' => [
                            'Un seul caractère',
                            'Plusieurs lignes',
                            'Une colonne entière',
                            'Une valeur NULL',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le caractère _ représente généralement exactement un caractère.'
                    ],

                    [
                        'question' => 'Quelle clause permet de trier le résultat d’une requête ?',
                        'choices' => [
                            'ORDER BY',
                            'SORT BY',
                            'GROUP BY',
                            'SORT RESULT',
                        ],
                        'correct' => 0,
                        'explanation' => 'ORDER BY permet de trier les résultats selon une ou plusieurs colonnes.'
                    ],

                    [
                        'question' => 'Quelle direction permet de trier du plus petit au plus grand ?',
                        'choices' => [
                            'ASC',
                            'DESC',
                            'UP',
                            'LOW',
                        ],
                        'correct' => 0,
                        'explanation' => 'ASC signifie ascending et permet un tri croissant.'
                    ],

                    [
                        'question' => 'Quelle direction permet de trier du plus grand au plus petit ?',
                        'choices' => [
                            'DESC',
                            'ASC',
                            'DOWN',
                            'REVERSE ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'DESC signifie descending et permet un tri décroissant.'
                    ],

                    [
                        'question' => 'Quelle condition permet de rechercher les lignes dont une colonne est NULL ?',
                        'choices' => [
                            'IS NULL',
                            '= NULL',
                            'NULL = TRUE',
                            'WHERE NULL',
                        ],
                        'correct' => 0,
                        'explanation' => 'En SQL, on utilise IS NULL pour tester une valeur NULL. L’opérateur = ne doit pas être utilisé pour ce test.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — INSERT UPDATE DELETE
            // ============================================================
            [
                'title' => 'INSERT, UPDATE et DELETE',
                'description' => 'Quiz pratique sur la modification des données avec SQL.',
                'questions' => [

                    [
                        'question' => 'Quelle commande ajoute une nouvelle ligne dans une table ?',
                        'choices' => [
                            'INSERT INTO',
                            'ADD INTO',
                            'CREATE ROW',
                            'NEW RECORD',
                        ],
                        'correct' => 0,
                        'explanation' => 'INSERT INTO est la syntaxe SQL utilisée pour ajouter des lignes.'
                    ],

                    [
                        'question' => 'Pourquoi faut-il généralement utiliser une clause WHERE avec UPDATE ?',
                        'choices' => [
                            'Pour éviter de modifier toutes les lignes involontairement',
                            'Pour créer la table',
                            'Pour trier les données',
                            'Pour ajouter une colonne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sans WHERE, UPDATE peut modifier toutes les lignes de la table.'
                    ],

                    [
                        'question' => 'Quel est le principal risque d’un DELETE sans WHERE ?',
                        'choices' => [
                            'Toutes les lignes peuvent être supprimées',
                            'La base devient automatiquement inaccessible',
                            'Une nouvelle table est créée',
                            'Les colonnes sont renommées',
                        ],
                        'correct' => 0,
                        'explanation' => 'DELETE sans WHERE cible toutes les lignes de la table.'
                    ],

                    [
                        'question' => 'Quelle instruction est correcte pour modifier le nom d’un utilisateur ayant id = 5 ?',
                        'choices' => [
                            "UPDATE users SET name = 'Ali' WHERE id = 5;",
                            "CHANGE users name TO 'Ali';",
                            "MODIFY users name = 'Ali';",
                            "UPDATE users name = 'Ali';",
                        ],
                        'correct' => 0,
                        'explanation' => 'La syntaxe UPDATE ... SET ... WHERE permet de modifier précisément la ligne concernée.'
                    ],

                    [
                        'question' => 'Que fait INSERT INTO users (name) VALUES (\'Ali\') ?',
                        'choices' => [
                            'Ajoute un utilisateur avec la valeur Ali dans la colonne name',
                            'Supprime Ali',
                            'Modifie tous les utilisateurs',
                            'Crée une nouvelle base de données',
                        ],
                        'correct' => 0,
                        'explanation' => 'INSERT INTO ajoute une nouvelle ligne avec les valeurs indiquées.'
                    ],

                    [
                        'question' => 'Quelle commande permet de supprimer un utilisateur spécifique selon son id ?',
                        'choices' => [
                            'DELETE FROM users WHERE id = 5;',
                            'REMOVE users id = 5;',
                            'DROP users WHERE id = 5;',
                            'DELETE TABLE users id = 5;',
                        ],
                        'correct' => 0,
                        'explanation' => 'DELETE FROM ... WHERE permet de supprimer les lignes répondant à une condition.'
                    ],

                    [
                        'question' => 'Quelle commande permet de modifier plusieurs colonnes à la fois ?',
                        'choices' => [
                            'UPDATE ... SET column1 = ..., column2 = ...',
                            'UPDATE ONLY ONE',
                            'CHANGE COLUMNS',
                            'MODIFY MULTIPLE',
                        ],
                        'correct' => 0,
                        'explanation' => 'UPDATE peut modifier plusieurs colonnes dans la même clause SET.'
                    ],

                    [
                        'question' => 'Que se passe-t-il si une instruction UPDATE ne possède aucune clause WHERE ?',
                        'choices' => [
                            'Toutes les lignes correspondantes à la table peuvent être modifiées',
                            'Aucune ligne ne peut être modifiée',
                            'La table est automatiquement supprimée',
                            'La base est automatiquement sauvegardée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Sans WHERE, UPDATE s’applique à toutes les lignes de la table.'
                    ],

                    [
                        'question' => 'Quelle commande est généralement préférable pour supprimer toutes les lignes tout en gardant la table ?',
                        'choices' => [
                            'TRUNCATE',
                            'DROP TABLE',
                            'DROP DATABASE',
                            'REMOVE DATABASE',
                        ],
                        'correct' => 0,
                        'explanation' => 'TRUNCATE supprime les données tout en conservant la structure de la table.'
                    ],

                    [
                        'question' => 'Quel élément permet de limiter la portée d’un DELETE ou UPDATE ?',
                        'choices' => [
                            'WHERE',
                            'ORDER BY',
                            'GROUP BY',
                            'AS',
                        ],
                        'correct' => 0,
                        'explanation' => 'WHERE permet de déterminer quelles lignes doivent être concernées par la modification ou suppression.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — FONCTIONS ET AGRÉGATION
            // ============================================================
            [
                'title' => 'Fonctions SQL et agrégation',
                'description' => 'Quiz sur les fonctions SQL courantes et les opérations d’agrégation.',
                'questions' => [

                    [
                        'question' => 'Quelle fonction permet de compter le nombre de lignes ?',
                        'choices' => [
                            'COUNT()',
                            'TOTAL()',
                            'NUMBER()',
                            'ROWS()',
                        ],
                        'correct' => 0,
                        'explanation' => 'COUNT() permet de compter les lignes ou les valeurs non NULL selon son utilisation.'
                    ],

                    [
                        'question' => 'Quelle fonction calcule une moyenne ?',
                        'choices' => [
                            'AVG()',
                            'MEAN()',
                            'AVERAGE()',
                            'MIDDLE()',
                        ],
                        'correct' => 0,
                        'explanation' => 'AVG() calcule la moyenne arithmétique des valeurs numériques.'
                    ],

                    [
                        'question' => 'Quelle fonction retourne la plus grande valeur ?',
                        'choices' => [
                            'MAX()',
                            'HIGH()',
                            'TOP()',
                            'GREATEST ROW ONLY',
                        ],
                        'correct' => 0,
                        'explanation' => 'MAX() retourne la valeur maximale parmi les valeurs considérées.'
                    ],

                    [
                        'question' => 'Quelle fonction retourne la plus petite valeur ?',
                        'choices' => [
                            'MIN()',
                            'LOW()',
                            'SMALLEST ROW()',
                            'BOTTOM()',
                        ],
                        'correct' => 0,
                        'explanation' => 'MIN() retourne la valeur minimale.'
                    ],

                    [
                        'question' => 'Quelle fonction calcule généralement la somme des valeurs numériques ?',
                        'choices' => [
                            'SUM()',
                            'ADD()',
                            'TOTALIZE()',
                            'PLUS()',
                        ],
                        'correct' => 0,
                        'explanation' => 'SUM() calcule la somme des valeurs numériques.'
                    ],

                    [
                        'question' => 'Quelle clause permet de regrouper les lignes avant d’appliquer des fonctions d’agrégation ?',
                        'choices' => [
                            'GROUP BY',
                            'ORDER BY',
                            'COLLECT BY',
                            'MERGE BY',
                        ],
                        'correct' => 0,
                        'explanation' => 'GROUP BY regroupe les lignes selon une ou plusieurs colonnes.'
                    ],

                    [
                        'question' => 'Quelle clause permet de filtrer les groupes après une agrégation ?',
                        'choices' => [
                            'HAVING',
                            'WHERE',
                            'FILTER GROUP',
                            'AFTER GROUP',
                        ],
                        'correct' => 0,
                        'explanation' => 'HAVING permet d’appliquer des conditions aux groupes produits par GROUP BY.'
                    ],

                    [
                        'question' => 'Quelle requête permet de compter les utilisateurs par ville ?',
                        'choices' => [
                            'SELECT city, COUNT(*) FROM users GROUP BY city;',
                            'SELECT COUNT(city) FROM users ORDER city;',
                            'COUNT users BY city;',
                            'SELECT city FROM users COUNT;',
                        ],
                        'correct' => 0,
                        'explanation' => 'GROUP BY city forme un groupe par ville et COUNT(*) compte les lignes de chaque groupe.'
                    ],

                    [
                        'question' => 'Quelle clause est généralement utilisée pour trier un résultat après GROUP BY ?',
                        'choices' => [
                            'ORDER BY',
                            'SORT GROUP',
                            'GROUP ORDER ONLY',
                            'HAVING ORDER',
                        ],
                        'correct' => 0,
                        'explanation' => 'ORDER BY permet de trier le résultat final d’une requête.'
                    ],

                    [
                        'question' => 'Quelle fonction retourne le nombre de valeurs non NULL d’une colonne ?',
                        'choices' => [
                            'COUNT(column)',
                            'COUNT(*) uniquement',
                            'NUMBER(column)',
                            'NONNULL()',
                        ],
                        'correct' => 0,
                        'explanation' => 'COUNT(column) compte les valeurs non NULL de la colonne spécifiée.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — JOIN FONDAMENTAUX
            // ============================================================
            [
                'title' => 'JOIN fondamentaux',
                'description' => 'Quiz sur les principales jointures SQL.',
                'questions' => [

                    [
                        'question' => 'Quel JOIN retourne les lignes ayant une correspondance dans les deux tables ?',
                        'choices' => [
                            'INNER JOIN',
                            'LEFT JOIN uniquement',
                            'RIGHT JOIN uniquement',
                            'OUTER JOIN uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'INNER JOIN retourne les lignes pour lesquelles une correspondance existe dans les deux tables selon la condition de jointure.'
                    ],

                    [
                        'question' => 'Quel JOIN conserve toutes les lignes de la table de gauche ?',
                        'choices' => [
                            'LEFT JOIN',
                            'INNER JOIN',
                            'RIGHT JOIN',
                            'CROSS JOIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'LEFT JOIN conserve toutes les lignes de la table de gauche, même lorsqu’aucune correspondance n’existe à droite.'
                    ],

                    [
                        'question' => 'Quel JOIN conserve toutes les lignes de la table de droite ?',
                        'choices' => [
                            'RIGHT JOIN',
                            'LEFT JOIN',
                            'INNER JOIN',
                            'CROSS JOIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'RIGHT JOIN conserve toutes les lignes de la table de droite.'
                    ],

                    [
                        'question' => 'Quelle clause indique généralement la condition de correspondance entre deux tables ?',
                        'choices' => [
                            'ON',
                            'MATCH',
                            'LINK',
                            'CONNECT',
                        ],
                        'correct' => 0,
                        'explanation' => 'La clause ON définit généralement la condition utilisée pour joindre les tables.'
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on souvent une Foreign Key avec un JOIN ?',
                        'choices' => [
                            'Pour relier logiquement les données de deux tables',
                            'Pour supprimer automatiquement les données',
                            'Pour trier les résultats',
                            'Pour créer une colonne temporaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une Foreign Key représente souvent la relation qui permet de relier les enregistrements de deux tables.'
                    ],

                    [
                        'question' => 'Que retourne principalement un LEFT JOIN lorsqu’aucune correspondance n’est trouvée dans la table droite ?',
                        'choices' => [
                            'Les colonnes de la table droite prennent généralement la valeur NULL',
                            'La ligne gauche est supprimée',
                            'La requête devient toujours invalide',
                            'La table droite est supprimée',
                        ],
                        'correct' => 0,
                        'explanation' => 'LEFT JOIN conserve la ligne gauche et met NULL dans les colonnes de la partie droite lorsqu’il n’existe aucune correspondance.'
                    ],

                    [
                        'question' => 'Quel JOIN produit le produit cartésien entre deux tables ?',
                        'choices' => [
                            'CROSS JOIN',
                            'INNER JOIN',
                            'LEFT JOIN',
                            'SELF JOIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'CROSS JOIN produit toutes les combinaisons possibles entre les lignes des deux tables.'
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un SELF JOIN ?',
                        'choices' => [
                            'Une table est jointe avec elle-même',
                            'Deux bases différentes sont fusionnées',
                            'Une table est supprimée puis recréée',
                            'Une table est copiée automatiquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un SELF JOIN permet de comparer ou relier différentes lignes d’une même table en utilisant des alias.'
                    ],

                    [
                        'question' => 'Pourquoi utiliser des alias de tables dans une requête JOIN ?',
                        'choices' => [
                            'Pour rendre la requête plus claire et distinguer les colonnes provenant de différentes tables',
                            'Pour supprimer les relations',
                            'Pour modifier les données automatiquement',
                            'Pour créer une nouvelle base',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les alias rendent les requêtes plus lisibles et sont particulièrement utiles lorsqu’il existe des noms de colonnes identiques.'
                    ],

                    [
                        'question' => 'Quel JOIN est généralement utilisé lorsqu’on veut uniquement les correspondances communes aux deux tables ?',
                        'choices' => [
                            'INNER JOIN',
                            'LEFT JOIN',
                            'RIGHT JOIN',
                            'CROSS JOIN',
                        ],
                        'correct' => 0,
                        'explanation' => 'INNER JOIN retourne uniquement les lignes qui possèdent une correspondance dans les deux ensembles.'
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — EXERCICES SQL PRATIQUES
            // ============================================================
            [
                'title' => 'Exercices SQL pratiques',
                'description' => 'Quiz pratique récapitulatif sur les fondamentaux de SQL et des bases de données.',
                'questions' => [

                    [
                        'question' => 'Quelle requête récupère uniquement les utilisateurs actifs ?',
                        'choices' => [
                            'SELECT * FROM users WHERE is_active = true;',
                            'SELECT active FROM users;',
                            'GET users WHERE active;',
                            'SELECT users ACTIVE;',
                        ],
                        'correct' => 0,
                        'explanation' => 'WHERE permet de filtrer les utilisateurs selon la valeur de is_active.'
                    ],

                    [
                        'question' => 'Quelle requête récupère les produits dont le prix est compris entre 100 et 500 ?',
                        'choices' => [
                            'SELECT * FROM products WHERE price BETWEEN 100 AND 500;',
                            'SELECT * FROM products WHERE price IN 100,500;',
                            'SELECT * FROM products WHERE price RANGE 100 TO 500;',
                            'SELECT * FROM products WHERE 100 < price < 500;',
                        ],
                        'correct' => 0,
                        'explanation' => 'BETWEEN permet de tester si une valeur se situe dans un intervalle donné.'
                    ],

                    [
                        'question' => 'Quelle requête récupère les clients dont le nom commence par "A" ?',
                        'choices' => [
                            "SELECT * FROM customers WHERE name LIKE 'A%';",
                            "SELECT * FROM customers WHERE name = 'A%';",
                            "SELECT * FROM customers WHERE name START 'A';",
                            "SELECT * FROM customers WHERE name LIKE '%A';",
                        ],
                        'correct' => 0,
                        'explanation' => 'Le modèle A% correspond aux chaînes qui commencent par A.'
                    ],

                    [
                        'question' => 'Quelle requête permet de récupérer les 10 premiers résultats en PostgreSQL ?',
                        'choices' => [
                            'SELECT * FROM users LIMIT 10;',
                            'SELECT TOP 10 * FROM users;',
                            'SELECT FIRST 10 FROM users;',
                            'SELECT * FROM users FIRST 10;',
                        ],
                        'correct' => 0,
                        'explanation' => 'PostgreSQL utilise LIMIT pour limiter le nombre de lignes retournées.'
                    ],

                    [
                        'question' => 'Quelle requête compte le nombre total d’utilisateurs ?',
                        'choices' => [
                            'SELECT COUNT(*) FROM users;',
                            'SELECT TOTAL users;',
                            'COUNT users;',
                            'SELECT NUMBER(*) FROM users;',
                        ],
                        'correct' => 0,
                        'explanation' => 'COUNT(*) compte les lignes de la table users.'
                    ],

                    [
                        'question' => 'Quelle requête récupère les utilisateurs par ordre alphabétique de leur nom ?',
                        'choices' => [
                            'SELECT * FROM users ORDER BY name ASC;',
                            'SELECT * FROM users SORT name;',
                            'SELECT * FROM users GROUP BY name;',
                            'SELECT * FROM users ORDER name;',
                        ],
                        'correct' => 0,
                        'explanation' => 'ORDER BY name ASC trie les résultats selon name dans l’ordre croissant.'
                    ],

                    [
                        'question' => 'Quelle requête permet de récupérer les commandes avec le nom du client associé ?',
                        'choices' => [
                            'SELECT orders.*, customers.name FROM orders INNER JOIN customers ON orders.customer_id = customers.id;',
                            'SELECT orders WITH customers;',
                            'SELECT orders FROM customers;',
                            'JOIN orders AND customers;',
                        ],
                        'correct' => 0,
                        'explanation' => 'INNER JOIN relie les commandes aux clients grâce à la relation entre customer_id et id.'
                    ],

                    [
                        'question' => 'Quelle commande permet de créer une table users avec un id comme Primary Key ?',
                        'choices' => [
                            'CREATE TABLE users (id INT PRIMARY KEY);',
                            'NEW TABLE users PRIMARY id;',
                            'CREATE users KEY id;',
                            'TABLE users CREATE id PRIMARY;',
                        ],
                        'correct' => 0,
                        'explanation' => 'CREATE TABLE permet de créer la table et PRIMARY KEY définit la clé primaire.'
                    ],

                    [
                        'question' => 'Quelle requête récupère uniquement les emails uniques des utilisateurs ?',
                        'choices' => [
                            'SELECT DISTINCT email FROM users;',
                            'SELECT UNIQUE email FROM users;',
                            'SELECT ONLY email UNIQUE;',
                            'SELECT email WITHOUT DUPLICATES;',
                        ],
                        'correct' => 0,
                        'explanation' => 'DISTINCT élimine les doublons dans le résultat.'
                    ],

                    [
                        'question' => 'Quelle précaution est particulièrement importante avant d’exécuter un DELETE en production ?',
                        'choices' => [
                            'Vérifier soigneusement la condition WHERE et les données ciblées',
                            'Supprimer systématiquement WHERE',
                            'Exécuter DELETE plusieurs fois',
                            'Supprimer la Primary Key',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une mauvaise condition WHERE peut entraîner la suppression de nombreuses lignes. Il faut donc vérifier précisément les données ciblées.'
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
                    'difficulty' => 'Beginner',
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

                // Supprimer les anciennes réponses pour éviter
                // les doublons lors d'une nouvelle exécution.
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