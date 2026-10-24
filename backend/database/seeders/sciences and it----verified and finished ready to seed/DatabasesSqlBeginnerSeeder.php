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
            [
                            'title' => 'Bases relationnelles, tables et clés',
                            'description' => 'Quiz de niveau débutant : Bases relationnelles, tables et clés.',
                            'questions' => [
                                [
                                    'question' => 'Une base de données désigne:',
                                    'choices' => [
                                        'Un programme uniquement destiné à créer des interfaces',
                                        'Un système utilisé uniquement pour envoyer des emails',
                                        'Un ensemble organisé de données pouvant être stockées et consultées',
                                        'Un fichier contenant obligatoirement une seule donnée'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une base de données permet de stocker, organiser, gérer et consulter des données de manière structurée.'
                                ],
                                [
                                    'question' => 'Quel type de logiciel permet généralement de créer et de gérer une base de données relationnelle?',
                                    'choices' => [
                                        'SGBD',
                                        'Navigateur Web',
                                        'Éditeur d’images',
                                        'Compilateur uniquement'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un SGBD, ou Système de Gestion de Base de Données, permet de créer et gérer des bases de données.'
                                ],
                                [
                                    'question' => 'Développez le sigle « SGBD »:',
                                    'choices' => [
                                        'Système Général de Backup des Données',
                                        'Service Global de Base Digitale',
                                        'Système Graphique de Données',
                                        'Système de Gestion de Base de Données'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'SGBD signifie Système de Gestion de Base de Données.'
                                ],
                                [
                                    'question' => 'Lequel est un SGBD relationnel?',
                                    'choices' => [
                                        'HTML',
                                        'PostgreSQL',
                                        'CSS',
                                        'Git'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'PostgreSQL est un SGBD relationnel qui utilise notamment SQL pour manipuler les données.'
                                ],
                                [
                                    'question' => 'Dans une base de données relationnelle, comment les données sont-elles principalement organisées?',
                                    'choices' => [
                                        'Uniquement dans des fichiers texte',
                                        'Dans des tables composées de lignes et de colonnes',
                                        'Dans des images',
                                        'Dans des pages HTML'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Une base relationnelle organise généralement les données dans des tables constituées de lignes et de colonnes.'
                                ],
                                [
                                    'question' => 'Pour créer une table, utilisez la commande SQL:',
                                    'choices' => [
                                        'MAKE TABLE',
                                        'NEW TABLE',
                                        'BUILD TABLE',
                                        'CREATE TABLE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'La commande CREATE TABLE permet de définir une nouvelle table et ses colonnes.'
                                ],
                                [
                                    'question' => 'Quel élément permet généralement d’identifier de manière unique une ligne?',
                                    'choices' => [
                                        'Primary Key',
                                        'Foreign Key uniquement',
                                        'COMMENT',
                                        'VIEW'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une Primary Key identifie de manière unique chaque enregistrement d’une table.'
                                ],
                                [
                                    'question' => 'Quel est le rôle d’une Foreign Key?',
                                    'choices' => [
                                        'Supprimer automatiquement toutes les tables',
                                        'Trier une table',
                                        'Établir une relation avec une autre table',
                                        'Créer une base de données'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Une Foreign Key référence généralement une clé d’une autre table afin de représenter une relation.'
                                ],
                                [
                                    'question' => 'Dans une table, deux lignes peuvent-elles avoir la même valeur de clé primaire?',
                                    'choices' => [
                                        'Oui, toujours',
                                        'Uniquement avec PostgreSQL',
                                        'Uniquement si la table contient plus de 100 lignes',
                                        'Non'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'La valeur d’une clé primaire simple, ou la combinaison des colonnes d’une clé primaire composite, doit être unique pour identifier chaque ligne.'
                                ],
                                [
                                    'question' => 'Dans un modèle où chaque livre est rattaché à un seul auteur, quelle relation permet à un auteur d’avoir plusieurs livres?',
                                    'choices' => [
                                        'One-to-Many',
                                        'One-to-One uniquement',
                                        'Many-to-Many uniquement',
                                        'Zero-to-Zero'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Un auteur peut avoir plusieurs livres tandis qu’un livre peut être associé à un auteur dans ce modèle simplifié : c’est une relation One-to-Many.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Premières requêtes SQL',
                            'description' => 'Quiz de niveau débutant : Premières requêtes SQL.',
                            'questions' => [
                                [
                                    'question' => 'Développez le sigle « SQL »:',
                                    'choices' => [
                                        'Simple Question Language',
                                        'System Query Logic',
                                        'Structured Query Language',
                                        'Structured Quick Language'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'SQL signifie Structured Query Language.'
                                ],
                                [
                                    'question' => 'Pour récupérer des données, exécutez:',
                                    'choices' => [
                                        'SELECT',
                                        'GETDATA',
                                        'FETCHALL',
                                        'READ TABLE'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'SELECT permet de récupérer des données depuis une ou plusieurs tables.'
                                ],
                                [
                                    'question' => 'La clause qui permet de filtrer les lignes dans une requête SELECT est:',
                                    'choices' => [
                                        'FILTER',
                                        'WHEN',
                                        'HAVING ONLY',
                                        'WHERE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'La clause WHERE permet de définir les conditions auxquelles les lignes doivent répondre.'
                                ],
                                [
                                    'question' => 'Quelle commande permet d’ajouter de nouvelles lignes?',
                                    'choices' => [
                                        'ADD ROW',
                                        'INSERT',
                                        'CREATE ROW',
                                        'APPEND TABLE'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'INSERT permet d’ajouter de nouveaux enregistrements dans une table.'
                                ],
                                [
                                    'question' => 'Pour modifier des données existantes, exécutez:',
                                    'choices' => [
                                        'MODIFY TABLE',
                                        'UPDATE',
                                        'CHANGE ROW',
                                        'ALTER DATA'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'UPDATE permet de modifier les valeurs des lignes existantes.'
                                ],
                                [
                                    'question' => 'Pour supprimer des lignes, exécutez:',
                                    'choices' => [
                                        'REMOVE ROW',
                                        'DROP ROW',
                                        'CLEAR DATA',
                                        'DELETE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'DELETE permet de supprimer des lignes selon une condition éventuelle.'
                                ],
                                [
                                    'question' => 'Quelle commande supprime généralement toute une table, y compris sa structure?',
                                    'choices' => [
                                        'DROP TABLE',
                                        'DELETE TABLE',
                                        'REMOVE TABLE',
                                        'CLEAR TABLE'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'DROP TABLE supprime la table elle-même ainsi que sa structure.'
                                ],
                                [
                                    'question' => 'Pour modifier la structure d’une table existante, exécutez:',
                                    'choices' => [
                                        'UPDATE TABLE',
                                        'CHANGE TABLE',
                                        'ALTER TABLE',
                                        'MODIFY DATABASE ROW'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'ALTER TABLE permet notamment d’ajouter, modifier ou supprimer des colonnes selon le SGBD.'
                                ],
                                [
                                    'question' => 'Pour supprimer toutes les lignes d’une table tout en conservant sa structure, utilisez la commande SQL:',
                                    'choices' => [
                                        'DROP',
                                        'REMOVE TABLE',
                                        'DELETE DATABASE',
                                        'TRUNCATE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'TRUNCATE supprime les lignes en conservant la définition de la table ; ses détails et effets peuvent varier selon le SGBD.'
                                ],
                                [
                                    'question' => 'La clause qui permet de donner un nom temporaire à une colonne dans le résultat est:',
                                    'choices' => [
                                        'AS',
                                        'NAME',
                                        'RENAME RESULT',
                                        'LABEL'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'La clause AS permet de définir un alias pour une colonne ou une table dans une requête.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Filtrer et trier des résultats',
                            'description' => 'Quiz de niveau débutant : Filtrer et trier des résultats.',
                            'questions' => [
                                [
                                    'question' => 'Quelle requête permet de récupérer toutes les colonnes d’une table users?',
                                    'choices' => [
                                        'GET ALL FROM users;',
                                        'SELECT ALL users;',
                                        'SELECT * FROM users;',
                                        'READ users;'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'SELECT * FROM users récupère toutes les colonnes de la table users.'
                                ],
                                [
                                    'question' => 'Quelle condition permet de sélectionner les utilisateurs dont l’âge est supérieur à 18?',
                                    'choices' => [
                                        'WHERE age > 18',
                                        'WHERE age < 18',
                                        'WHERE age = 18',
                                        'WHERE age <> 18'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'L’opérateur > permet de sélectionner les valeurs strictement supérieures à 18.'
                                ],
                                [
                                    'question' => 'Pour vérifier qu’une valeur est comprise dans une liste, utilisez l’opérateur:',
                                    'choices' => [
                                        'LIST',
                                        'BETWEEN ONLY',
                                        'CONTAINS',
                                        'IN'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'IN permet de vérifier si une valeur correspond à l’une des valeurs fournies.'
                                ],
                                [
                                    'question' => 'Pour rechercher une chaîne correspondant à un modèle, utilisez l’opérateur:',
                                    'choices' => [
                                        'MATCH ONLY',
                                        'LIKE',
                                        'SEARCH',
                                        'PATTERN'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'LIKE permet d’effectuer des recherches selon un modèle avec notamment % et _.'
                                ],
                                [
                                    'question' => 'Dans LIKE, que représente généralement le caractère %?',
                                    'choices' => [
                                        'Exactement un caractère',
                                        'Zéro ou plusieurs caractères',
                                        'Un nombre uniquement',
                                        'Une colonne'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'Le caractère % représente une séquence de zéro ou plusieurs caractères.'
                                ],
                                [
                                    'question' => 'La clause qui permet de trier le résultat d’une requête est:',
                                    'choices' => [
                                        'SORT BY',
                                        'GROUP BY',
                                        'SORT RESULT',
                                        'ORDER BY'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ORDER BY permet de trier les résultats selon une ou plusieurs colonnes.'
                                ],
                                [
                                    'question' => 'Quelle direction permet de trier du plus petit au plus grand?',
                                    'choices' => [
                                        'ASC',
                                        'DESC',
                                        'UP',
                                        'LOW'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'ASC signifie ascending et permet un tri croissant.'
                                ],
                                [
                                    'question' => 'Quelle direction permet de trier du plus grand au plus petit?',
                                    'choices' => [
                                        'ASC',
                                        'DOWN',
                                        'DESC',
                                        'REVERSE ONLY'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'DESC signifie descending et permet un tri décroissant.'
                                ],
                                [
                                    'question' => 'Dans une requête SQL, quelle condition sélectionne les lignes dont la colonne email vaut NULL?',
                                    'choices' => [
                                        '= NULL',
                                        'NULL = TRUE',
                                        'WHERE NULL',
                                        'email IS NULL'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'En SQL, on utilise IS NULL pour tester une valeur NULL. L’opérateur = ne doit pas être utilisé pour ce test.'
                                ],
                                [
                                    'question' => 'Quelle requête récupère les produits dont le prix est compris entre 100 et 500?',
                                    'choices' => [
                                        'SELECT * FROM products WHERE price BETWEEN 100 AND 500;',
                                        'SELECT * FROM products WHERE price IN 100,500;',
                                        'SELECT * FROM products WHERE price RANGE 100 TO 500;',
                                        'SELECT * FROM products WHERE 100 < price < 500;'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'BETWEEN permet de tester si une valeur se situe dans un intervalle donné.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Modifier les données avec précaution',
                            'description' => 'Quiz de niveau débutant : Modifier les données avec précaution.',
                            'questions' => [
                                [
                                    'question' => 'Quelle commande ajoute une nouvelle ligne dans une table?',
                                    'choices' => [
                                        'ADD INTO',
                                        'CREATE ROW',
                                        'INSERT INTO',
                                        'NEW RECORD'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'INSERT INTO est la syntaxe SQL utilisée pour ajouter des lignes.'
                                ],
                                [
                                    'question' => 'Pourquoi faut-il généralement utiliser une clause WHERE avec UPDATE?',
                                    'choices' => [
                                        'Pour éviter de modifier toutes les lignes involontairement',
                                        'Pour créer la table',
                                        'Pour trier les données',
                                        'Pour ajouter une colonne'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Sans WHERE, UPDATE peut modifier toutes les lignes de la table.'
                                ],
                                [
                                    'question' => 'Quel est le principal risque d’un DELETE sans WHERE?',
                                    'choices' => [
                                        'La base devient automatiquement inaccessible',
                                        'Une nouvelle table est créée',
                                        'Les colonnes sont renommées',
                                        'Toutes les lignes peuvent être supprimées'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'DELETE sans WHERE cible toutes les lignes de la table.'
                                ],
                                [
                                    'question' => 'Quelle instruction est correcte pour modifier le nom d’un utilisateur ayant id = 5?',
                                    'choices' => [
                                        'CHANGE users name TO \'Ali\';',
                                        'UPDATE users SET name = \'Ali\' WHERE id = 5;',
                                        'MODIFY users name = \'Ali\';',
                                        'UPDATE users name = \'Ali\';'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'La syntaxe UPDATE ... SET ... WHERE permet de modifier précisément la ligne concernée.'
                                ],
                                [
                                    'question' => 'Que fait INSERT INTO users (name) VALUES (\'Ali\')?',
                                    'choices' => [
                                        'Supprime Ali',
                                        'Ajoute un utilisateur avec la valeur Ali dans la colonne name',
                                        'Modifie tous les utilisateurs',
                                        'Crée une nouvelle base de données'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'INSERT INTO ajoute une nouvelle ligne avec les valeurs indiquées.'
                                ],
                                [
                                    'question' => 'Pour supprimer un utilisateur spécifique selon son id, exécutez:',
                                    'choices' => [
                                        'REMOVE users id = 5;',
                                        'DROP users WHERE id = 5;',
                                        'DELETE TABLE users id = 5;',
                                        'DELETE FROM users WHERE id = 5;'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'DELETE FROM ... WHERE permet de supprimer les lignes répondant à une condition.'
                                ],
                                [
                                    'question' => 'Pour modifier plusieurs colonnes à la fois, exécutez:',
                                    'choices' => [
                                        'UPDATE ... SET column1 = ..., column2 = ...',
                                        'UPDATE ONLY ONE',
                                        'CHANGE COLUMNS',
                                        'MODIFY MULTIPLE'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'UPDATE peut modifier plusieurs colonnes dans la même clause SET.'
                                ],
                                [
                                    'question' => 'Quelle commande peut supprimer toutes les lignes d’une table tout en conservant sa structure?',
                                    'choices' => [
                                        'DROP TABLE',
                                        'DROP DATABASE',
                                        'TRUNCATE',
                                        'REMOVE DATABASE'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'TRUNCATE supprime les lignes en conservant la définition de la table ; ses détails et effets peuvent varier selon le SGBD.'
                                ],
                                [
                                    'question' => 'Quel élément permet de limiter la portée d’un DELETE ou UPDATE?',
                                    'choices' => [
                                        'ORDER BY',
                                        'GROUP BY',
                                        'AS',
                                        'WHERE'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'WHERE permet de déterminer quelles lignes doivent être concernées par la modification ou suppression.'
                                ],
                                [
                                    'question' => 'Quelle précaution est particulièrement importante avant d’exécuter un DELETE en production?',
                                    'choices' => [
                                        'Vérifier soigneusement la condition WHERE et les données ciblées',
                                        'Supprimer systématiquement WHERE',
                                        'Exécuter DELETE plusieurs fois',
                                        'Supprimer la Primary Key'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'Une mauvaise condition WHERE peut entraîner la suppression de nombreuses lignes. Il faut donc vérifier précisément les données ciblées.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Agrégations et jointures',
                            'description' => 'Quiz de niveau débutant : Agrégations et jointures.',
                            'questions' => [
                                [
                                    'question' => 'La fonction à utiliser pour compter le nombre de lignes est:',
                                    'choices' => [
                                        'TOTAL()',
                                        'NUMBER()',
                                        'COUNT(*)',
                                        'ROWS()'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'COUNT(*) compte toutes les lignes ; COUNT(column_name) compte les valeurs non NULL de cette colonne.'
                                ],
                                [
                                    'question' => 'Quelle fonction calcule une moyenne?',
                                    'choices' => [
                                        'AVG(column_name)',
                                        'MEAN()',
                                        'AVERAGE()',
                                        'MIDDLE()'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'AVG(column_name) calcule la moyenne arithmétique des valeurs numériques.'
                                ],
                                [
                                    'question' => 'Quelle fonction retourne la plus grande valeur?',
                                    'choices' => [
                                        'HIGH()',
                                        'TOP()',
                                        'GREATEST ROW ONLY',
                                        'MAX(column_name)'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'MAX(column_name) retourne la valeur maximale parmi les valeurs considérées.'
                                ],
                                [
                                    'question' => 'Quelle fonction retourne la plus petite valeur?',
                                    'choices' => [
                                        'LOW()',
                                        'MIN(column_name)',
                                        'SMALLEST ROW()',
                                        'BOTTOM()'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'MIN(column_name) retourne la valeur minimale.'
                                ],
                                [
                                    'question' => 'Quelle fonction calcule généralement la somme des valeurs numériques?',
                                    'choices' => [
                                        'ADD()',
                                        'SUM(column_name)',
                                        'TOTALIZE()',
                                        'PLUS()'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'SUM(column_name) calcule la somme des valeurs numériques.'
                                ],
                                [
                                    'question' => 'La clause qui permet de regrouper les lignes avant d’appliquer des fonctions d’agrégation est:',
                                    'choices' => [
                                        'ORDER BY',
                                        'COLLECT BY',
                                        'MERGE BY',
                                        'GROUP BY'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'GROUP BY regroupe les lignes selon une ou plusieurs colonnes.'
                                ],
                                [
                                    'question' => 'Pour le besoin décrit, le type de JOIN approprié est celui qui retourne les lignes ayant une correspondance dans les deux tables:',
                                    'choices' => [
                                        'INNER JOIN',
                                        'LEFT JOIN uniquement',
                                        'RIGHT JOIN uniquement',
                                        'OUTER JOIN uniquement'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'INNER JOIN retourne les lignes pour lesquelles une correspondance existe dans les deux tables selon la condition de jointure.'
                                ],
                                [
                                    'question' => 'Pour le besoin décrit, le type de JOIN approprié est celui qui conserve toutes les lignes de la table de gauche:',
                                    'choices' => [
                                        'INNER JOIN',
                                        'RIGHT JOIN',
                                        'LEFT JOIN',
                                        'CROSS JOIN'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'LEFT JOIN conserve toutes les lignes de la table de gauche, même lorsqu’aucune correspondance n’existe à droite.'
                                ],
                                [
                                    'question' => 'Pour le besoin décrit, le type de JOIN approprié est celui qui conserve toutes les lignes de la table de droite:',
                                    'choices' => [
                                        'LEFT JOIN',
                                        'INNER JOIN',
                                        'CROSS JOIN',
                                        'RIGHT JOIN'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'RIGHT JOIN conserve toutes les lignes de la table de droite.'
                                ],
                                [
                                    'question' => 'Quelle clause indique généralement la condition de correspondance entre deux tables?',
                                    'choices' => [
                                        'ON',
                                        'MATCH',
                                        'LINK',
                                        'CONNECT'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'La clause ON définit généralement la condition utilisée pour joindre les tables.'
                                ]
                            ]
                        ],
            [
                            'title' => 'Mise en pratique des requêtes',
                            'description' => 'Quiz de niveau débutant : Mise en pratique des requêtes.',
                            'questions' => [
                                [
                                    'question' => 'Quelle requête récupère uniquement les utilisateurs actifs?',
                                    'choices' => [
                                        'SELECT active FROM users;',
                                        'GET users WHERE active;',
                                        'SELECT * FROM users WHERE is_active = true;',
                                        'SELECT users ACTIVE;'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'WHERE permet de filtrer les utilisateurs selon la valeur de is_active.'
                                ],
                            [
    'question' => 'Le magasin veut afficher les produits disponibles, classés par nom. Quelle requête convient?',
    'choices' => [
        'SELECT name, stock FROM products WHERE stock > 0 ORDER BY name ASC;',
        'SELECT name, stock FROM products ORDER BY stock > 0;',
        'SELECT name, stock FROM products WHERE stock = 0 ORDER name;',
        'SELECT name, stock FROM products WHERE stock > 0 GROUP BY name ASC;'
    ],
    'correct' => 0,
    'explanation' => 'WHERE stock > 0 sélectionne les produits disponibles, puis ORDER BY name ASC les classe par nom dans l’ordre croissant.'
],
                                [
                                    'question' => 'Quelle requête récupère les clients dont le nom commence par "A"?',
                                    'choices' => [
                                        'SELECT * FROM customers WHERE name = \'A%\';',
                                        'SELECT * FROM customers WHERE name START \'A\';',
                                        'SELECT * FROM customers WHERE name LIKE \'%A\';',
                                        'SELECT * FROM customers WHERE name LIKE \'A%\';'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'Le modèle A% correspond aux chaînes qui commencent par A.'
                                ],
                                [
                                    'question' => 'Quelle requête limite le résultat à 10 lignes en PostgreSQL?',
                                    'choices' => [
                                        'SELECT TOP 10 * FROM users;',
                                        'SELECT * FROM users LIMIT 10;',
                                        'SELECT FIRST 10 FROM users;',
                                        'SELECT * FROM users FIRST 10;'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'PostgreSQL utilise LIMIT pour limiter le nombre de lignes retournées.'
                                ],
                                [
                                    'question' => 'Quelle requête compte le nombre total d’utilisateurs?',
                                    'choices' => [
                                        'SELECT TOTAL users;',
                                        'SELECT COUNT(*) FROM users;',
                                        'COUNT users;',
                                        'SELECT NUMBER(*) FROM users;'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'COUNT(*) compte les lignes de la table users.'
                                ],
                                [
                                    'question' => 'Quelle requête récupère les utilisateurs par ordre alphabétique de leur nom?',
                                    'choices' => [
                                        'SELECT * FROM users SORT name;',
                                        'SELECT * FROM users GROUP BY name;',
                                        'SELECT * FROM users ORDER name;',
                                        'SELECT * FROM users ORDER BY name ASC;'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'ORDER BY name ASC trie les résultats selon name dans l’ordre croissant.'
                                ],
                                [
                                    'question' => 'Quelle requête permet de récupérer les commandes avec le nom du client associé?',
                                    'choices' => [
                                        'SELECT orders.*, customers.name FROM orders INNER JOIN customers ON orders.customer_id = customers.id;',
                                        'SELECT orders WITH customers;',
                                        'SELECT orders FROM customers;',
                                        'JOIN orders AND customers;'
                                    ],
                                    'correct' => 0,
                                    'explanation' => 'INNER JOIN relie les commandes aux clients grâce à la relation entre customer_id et id.'
                                ],
                                [
                                    'question' => 'Pour créer une table users avec un id comme Primary Key, exécutez:',
                                    'choices' => [
                                        'NEW TABLE users PRIMARY id;',
                                        'CREATE users KEY id;',
                                        'CREATE TABLE users (id INT PRIMARY KEY);',
                                        'TABLE users CREATE id PRIMARY;'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'CREATE TABLE permet de créer la table et PRIMARY KEY définit la clé primaire.'
                                ],
                                [
                                    'question' => 'Quelle requête récupère uniquement les emails uniques des utilisateurs?',
                                    'choices' => [
                                        'SELECT UNIQUE email FROM users;',
                                        'SELECT ONLY email UNIQUE;',
                                        'SELECT email WITHOUT DUPLICATES;',
                                        'SELECT DISTINCT email FROM users;'
                                    ],
                                    'correct' => 3,
                                    'explanation' => 'DISTINCT élimine les doublons dans le résultat.'
                                ],
                             [
    'question' => 'Le catalogue doit recevoir un produit nommé Clavier, vendu à 250 €. Quelle requête l’ajoute dans les colonnes name et price?',
    'choices' => [
        'INSERT INTO products (name, price) VALUES (\'Clavier\', 250);',
        'UPDATE products SET name = \'Clavier\', price = 250;',
        'CREATE TABLE products (name, price);',
        'DELETE FROM products WHERE name = \'Clavier\';'
    ],
    'correct' => 0,
    'explanation' => 'INSERT INTO ajoute une nouvelle ligne ; la liste des colonnes correspond aux valeurs fournies dans VALUES.'
],
                                [
                                    'question' => 'Pour le besoin décrit, le type de JOIN approprié est celui qui produit le produit cartésien entre deux tables:',
                                    'choices' => [
                                        'INNER JOIN',
                                        'CROSS JOIN',
                                        'LEFT JOIN',
                                        'SELF JOIN'
                                    ],
                                    'correct' => 1,
                                    'explanation' => 'CROSS JOIN produit toutes les combinaisons possibles entre les lignes des deux tables.'
                                ],
                                [
                                    'question' => 'Un SELF JOIN désigne:',
                                    'choices' => [
                                        'Deux bases différentes sont fusionnées',
                                        'Une table est supprimée puis recréée',
                                        'Une table est jointe avec elle-même',
                                        'Une table est copiée automatiquement'
                                    ],
                                    'correct' => 2,
                                    'explanation' => 'Un SELF JOIN permet de comparer ou relier différentes lignes d’une même table en utilisant des alias.'
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
                    'duration' => 15 + max(0, count($quizData['questions']) - 10) * 2,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
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
