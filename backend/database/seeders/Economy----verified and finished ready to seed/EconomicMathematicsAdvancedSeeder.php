```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicMathematicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse différentielle avancée',
                'questions' => [
                    [
                        'question' => 'Si f(x) = 4x^3 - 6x^2 + 2x, quelle est f\'(x) ?',
                        'answers' => [
                            ['answer' => '12x^2 - 12x + 2', 'iscorrect' => true],
                            ['answer' => '12x^2 - 6x + 2', 'iscorrect' => false],
                            ['answer' => '4x^2 - 12x + 2', 'iscorrect' => false],
                            ['answer' => '12x^3 - 12x^2 + 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si C(q) = 100 + 8q + 3q^2, quel est le coût marginal ?',
                        'answers' => [
                            ['answer' => '8 + 6q', 'iscorrect' => true],
                            ['answer' => '100 + 8q', 'iscorrect' => false],
                            ['answer' => '8 + 3q', 'iscorrect' => false],
                            ['answer' => '6q^2 + 8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si R(q) = 60q - 2q^2, quelle est la recette marginale ?',
                        'answers' => [
                            ['answer' => '60 - 4q', 'iscorrect' => true],
                            ['answer' => '60 - 2q', 'iscorrect' => false],
                            ['answer' => '60q - 4', 'iscorrect' => false],
                            ['answer' => '4q - 60', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour f(x) = x^3 - 6x^2 + 9x, quelles sont les valeurs critiques ?',
                        'answers' => [
                            ['answer' => 'x = 1 et x = 3', 'iscorrect' => true],
                            ['answer' => 'x = 2 et x = 3', 'iscorrect' => false],
                            ['answer' => 'x = 1 et x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 3 et x = 9', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour f(x) = x^2 - 10x + 21, où se situe le minimum ?',
                        'answers' => [
                            ['answer' => 'x = 5', 'iscorrect' => true],
                            ['answer' => 'x = 4', 'iscorrect' => false],
                            ['answer' => 'x = 10', 'iscorrect' => false],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f\'(x) = 2x - 8, pour quelle valeur de x la dérivée est-elle nulle ?',
                        'answers' => [
                            ['answer' => 'x = 4', 'iscorrect' => true],
                            ['answer' => 'x = 2', 'iscorrect' => false],
                            ['answer' => 'x = 8', 'iscorrect' => false],
                            ['answer' => 'x = -4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f\'\'(x) > 0 autour d’un point critique, que suggère généralement ce résultat ?',
                        'answers' => [
                            ['answer' => 'Un minimum local', 'iscorrect' => true],
                            ['answer' => 'Un maximum local', 'iscorrect' => false],
                            ['answer' => 'Une fonction nécessairement constante', 'iscorrect' => false],
                            ['answer' => 'Une absence de point critique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si π(q) = 80q - 2q^2 - 300, quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 20', 'iscorrect' => true],
                            ['answer' => 'q = 10', 'iscorrect' => false],
                            ['answer' => 'q = 30', 'iscorrect' => false],
                            ['answer' => 'q = 40', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) = ln(x), quelle est la dérivée pour x > 0 ?',
                        'answers' => [
                            ['answer' => '1 / x', 'iscorrect' => true],
                            ['answer' => 'x', 'iscorrect' => false],
                            ['answer' => 'ln(x) / x', 'iscorrect' => false],
                            ['answer' => 'x^(-2)', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle interprétation économique correspond le mieux à une dérivée première positive ?',
                        'answers' => [
                            ['answer' => 'Une augmentation marginale de la variable explicative est associée à une hausse de la variable étudiée autour du point considéré', 'iscorrect' => true],
                            ['answer' => 'La variable étudiée est nécessairement maximale', 'iscorrect' => false],
                            ['answer' => 'La relation est nécessairement constante', 'iscorrect' => false],
                            ['answer' => 'La dérivée indique toujours une élasticité unitaire', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Optimisation économique avancée',
                'questions' => [
                    [
                        'question' => 'Si π(q) = 100q - q^2 - 400, quelle est la quantité optimale ?',
                        'answers' => [
                            ['answer' => 'q = 50', 'iscorrect' => true],
                            ['answer' => 'q = 40', 'iscorrect' => false],
                            ['answer' => 'q = 100', 'iscorrect' => false],
                            ['answer' => 'q = 25', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si C(q) = 200 + 4q + q^2 et R(q) = 30q, quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 13', 'iscorrect' => true],
                            ['answer' => 'q = 15', 'iscorrect' => false],
                            ['answer' => 'q = 10', 'iscorrect' => false],
                            ['answer' => 'q = 20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une optimisation sans contrainte, quelle condition est nécessaire pour un optimum intérieur différentiable ?',
                        'answers' => [
                            ['answer' => 'La dérivée première de la fonction objectif doit être nulle', 'iscorrect' => true],
                            ['answer' => 'La fonction objectif doit être nulle', 'iscorrect' => false],
                            ['answer' => 'La dérivée seconde doit être nulle', 'iscorrect' => false],
                            ['answer' => 'La variable doit être positive dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour f(x) = -x^2 + 12x - 20, quelle est la valeur maximale de f ?',
                        'answers' => [
                            ['answer' => '16', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '18', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise maximise π(q) = 50q - q^2 - 100. Quelle quantité est optimale si q doit être non négatif ?',
                        'answers' => [
                            ['answer' => 'q = 25', 'iscorrect' => true],
                            ['answer' => 'q = 20', 'iscorrect' => false],
                            ['answer' => 'q = 50', 'iscorrect' => false],
                            ['answer' => 'q = 10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le profit marginal est positif pour toutes les quantités jusqu’à la capacité maximale, où se situe l’optimum sous contrainte de capacité ?',
                        'answers' => [
                            ['answer' => 'À la capacité maximale', 'iscorrect' => true],
                            ['answer' => 'À zéro', 'iscorrect' => false],
                            ['answer' => 'Toujours au milieu de l’intervalle', 'iscorrect' => false],
                            ['answer' => 'À une quantité négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une solution de coin peut-elle être optimale ?',
                        'answers' => [
                            ['answer' => 'La meilleure solution réalisable peut se trouver sur la frontière de l’ensemble des choix', 'iscorrect' => true],
                            ['answer' => 'Une frontière ne peut jamais contenir un optimum', 'iscorrect' => false],
                            ['answer' => 'Toute contrainte doit être inactive à l’optimum', 'iscorrect' => false],
                            ['answer' => 'Les solutions de coin existent uniquement en statistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) = 2x^2 - 16x + 30, quelle valeur de x minimise f ?',
                        'answers' => [
                            ['answer' => '4', 'iscorrect' => true],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '6', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une décision de production, pourquoi compare-t-on souvent recette marginale et coût marginal ?',
                        'answers' => [
                            ['answer' => 'Parce que leur comparaison indique si une unité supplémentaire augmente ou réduit le profit', 'iscorrect' => true],
                            ['answer' => 'Parce qu’ils représentent toujours le profit total', 'iscorrect' => false],
                            ['answer' => 'Parce qu’ils sont toujours égaux par définition', 'iscorrect' => false],
                            ['answer' => 'Parce que le coût moyen est sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si π\'(q) = 40 - 2q et π\'\'(q) = -2, quel type de point donne q = 20 ?',
                        'answers' => [
                            ['answer' => 'Un maximum local', 'iscorrect' => true],
                            ['answer' => 'Un minimum local', 'iscorrect' => false],
                            ['answer' => 'Un point d’inflexion', 'iscorrect' => false],
                            ['answer' => 'Aucun point critique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Calcul différentiel et élasticité',
                'questions' => [
                    [
                        'question' => 'Si Q(P) = 120 - 3P, quelle est la dérivée dQ/dP ?',
                        'answers' => [
                            ['answer' => '-3', 'iscorrect' => true],
                            ['answer' => '3', 'iscorrect' => false],
                            ['answer' => '120', 'iscorrect' => false],
                            ['answer' => '-120', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour Q(P) = 100 - 2P, quelle est l’élasticité ponctuelle à P = 20 ?',
                        'answers' => [
                            ['answer' => '-0,667 environ', 'iscorrect' => true],
                            ['answer' => '-2', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                            ['answer' => '-1,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité-prix égale à -1,8 signifie que, localement :',
                        'answers' => [
                            ['answer' => 'Une hausse de 1 % du prix est associée à une baisse d’environ 1,8 % de la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Une hausse de 1 % du prix augmente la quantité de 1,8 %', 'iscorrect' => false],
                            ['answer' => 'Le prix varie de 1,8 unités pour chaque unité de quantité', 'iscorrect' => false],
                            ['answer' => 'La demande est parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une demande linéaire décroissante, pourquoi l’élasticité varie-t-elle le long de la courbe ?',
                        'answers' => [
                            ['answer' => 'Parce qu’elle dépend à la fois de la pente et des valeurs courantes du prix et de la quantité', 'iscorrect' => true],
                            ['answer' => 'Parce que la pente change nécessairement sur une droite', 'iscorrect' => false],
                            ['answer' => 'Parce que le revenu change automatiquement', 'iscorrect' => false],
                            ['answer' => 'Parce que l’élasticité est constante pour toute demande linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si Q(P) = 200 - 4P, à quel prix la demande devient-elle unitairement élastique ?',
                        'answers' => [
                            ['answer' => 'P = 25', 'iscorrect' => true],
                            ['answer' => 'P = 20', 'iscorrect' => false],
                            ['answer' => 'P = 40', 'iscorrect' => false],
                            ['answer' => 'P = 10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la recette totale est-elle maximale lorsque l’élasticité-prix de la demande est proche de -1 dans le modèle standard ?',
                        'answers' => [
                            ['answer' => 'À ce point, l’effet du prix et l’effet de la quantité sur la recette se compensent localement', 'iscorrect' => true],
                            ['answer' => 'Parce que la demande est alors parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Parce que le coût marginal est nul', 'iscorrect' => false],
                            ['answer' => 'Parce que le prix est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le revenu R augmente de 6 % et la demande d’un bien augmente de 3 %, quelle est l’élasticité-revenu approximative ?',
                        'answers' => [
                            ['answer' => '0,5', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '-0,5', 'iscorrect' => false],
                            ['answer' => '3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix de X augmente de 8 % et la demande de Y baisse de 16 %, quelle est l’élasticité croisée approximative ?',
                        'answers' => [
                            ['answer' => '-2', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '-0,5', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signe de l’élasticité-revenu correspond généralement à un bien inférieur ?',
                        'answers' => [
                            ['answer' => 'Négatif', 'iscorrect' => true],
                            ['answer' => 'Positif', 'iscorrect' => false],
                            ['answer' => 'Toujours nul', 'iscorrect' => false],
                            ['answer' => 'Toujours supérieur à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signe de l’élasticité croisée indique généralement des biens substituts ?',
                        'answers' => [
                            ['answer' => 'Positif', 'iscorrect' => true],
                            ['answer' => 'Négatif', 'iscorrect' => false],
                            ['answer' => 'Nul dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Toujours inférieur à -1', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Algèbre matricielle et systèmes économiques',
                'questions' => [
                    [
                        'question' => 'Quel est le déterminant de la matrice [[2, 1], [3, 4]] ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une matrice 2×2 inversible, quelle condition doit vérifier son déterminant ?',
                        'answers' => [
                            ['answer' => 'Il doit être différent de zéro', 'iscorrect' => true],
                            ['answer' => 'Il doit être égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Il doit être négatif', 'iscorrect' => false],
                            ['answer' => 'Il doit être égal à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre le système x + y = 10 et x - y = 2.',
                        'answers' => [
                            ['answer' => 'x = 6, y = 4', 'iscorrect' => true],
                            ['answer' => 'x = 5, y = 5', 'iscorrect' => false],
                            ['answer' => 'x = 4, y = 6', 'iscorrect' => false],
                            ['answer' => 'x = 8, y = 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre 2x + y = 11 et x + y = 7.',
                        'answers' => [
                            ['answer' => 'x = 4, y = 3', 'iscorrect' => true],
                            ['answer' => 'x = 3, y = 4', 'iscorrect' => false],
                            ['answer' => 'x = 5, y = 1', 'iscorrect' => false],
                            ['answer' => 'x = 2, y = 5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les systèmes linéaires sont-ils utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de résoudre simultanément plusieurs relations économiques interdépendantes', 'iscorrect' => true],
                            ['answer' => 'Ils servent uniquement à calculer des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toutes les contraintes économiques', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent représenter que des équations financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une matrice identité 2×2, quels sont les éléments diagonaux ?',
                        'answers' => [
                            ['answer' => '1 et 1', 'iscorrect' => true],
                            ['answer' => '0 et 0', 'iscorrect' => false],
                            ['answer' => '1 et 0', 'iscorrect' => false],
                            ['answer' => '2 et 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le résultat de l’addition [[1,2],[3,4]] + [[2,1],[4,3]] ?',
                        'answers' => [
                            ['answer' => '[[3,3],[7,7]]', 'iscorrect' => true],
                            ['answer' => '[[2,2],[6,6]]', 'iscorrect' => false],
                            ['answer' => '[[3,2],[7,6]]', 'iscorrect' => false],
                            ['answer' => '[[1,1],[1,1]]', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le produit de la matrice [[1,2],[0,3]] par le vecteur [2,1] ?',
                        'answers' => [
                            ['answer' => '[4,3]', 'iscorrect' => true],
                            ['answer' => '[3,4]', 'iscorrect' => false],
                            ['answer' => '[2,3]', 'iscorrect' => false],
                            ['answer' => '[4,2]', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle linéaire, que représente une solution unique d’un système ?',
                        'answers' => [
                            ['answer' => 'Un ensemble unique de valeurs satisfaisant simultanément toutes les équations', 'iscorrect' => true],
                            ['answer' => 'Une absence de solution', 'iscorrect' => false],
                            ['answer' => 'Une infinité de solutions nécessairement', 'iscorrect' => false],
                            ['answer' => 'Une valeur arbitraire de chaque variable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une matrice singulière pose-t-elle un problème pour l’inversion ?',
                        'answers' => [
                            ['answer' => 'Son déterminant est nul et elle ne possède pas d’inverse classique', 'iscorrect' => true],
                            ['answer' => 'Son déterminant est toujours égal à 1', 'iscorrect' => false],
                            ['answer' => 'Elle contient nécessairement uniquement des valeurs positives', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours de dimension 1×1', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Suites, séries et croissance composée',
                'questions' => [
                    [
                        'question' => 'Quelle est la formule d’une suite géométrique de premier terme a et de raison r au rang n ?',
                        'answers' => [
                            ['answer' => 'a_n = a × r^(n-1)', 'iscorrect' => true],
                            ['answer' => 'a_n = a + nr', 'iscorrect' => false],
                            ['answer' => 'a_n = a × n × r', 'iscorrect' => false],
                            ['answer' => 'a_n = a / r^n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une quantité de 1 000 augmente de 3 % par an. Quelle est sa valeur après deux ans ?',
                        'answers' => [
                            ['answer' => '1 060,90', 'iscorrect' => true],
                            ['answer' => '1 060', 'iscorrect' => false],
                            ['answer' => '1 030', 'iscorrect' => false],
                            ['answer' => '1 090', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable de 2 000 diminue de 4 % par an. Quelle est sa valeur après deux ans ?',
                        'answers' => [
                            ['answer' => '1 843,20', 'iscorrect' => true],
                            ['answer' => '1 840', 'iscorrect' => false],
                            ['answer' => '1 920', 'iscorrect' => false],
                            ['answer' => '1 800', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition rend une série géométrique infinie convergente ?',
                        'answers' => [
                            ['answer' => '|r| < 1', 'iscorrect' => true],
                            ['answer' => '|r| > 1', 'iscorrect' => false],
                            ['answer' => 'r > 1 uniquement', 'iscorrect' => false],
                            ['answer' => 'r = 2 uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la somme d’une série géométrique infinie de premier terme 100 et de raison 0,5 ?',
                        'answers' => [
                            ['answer' => '200', 'iscorrect' => true],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                            ['answer' => '250', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux de croissance composés peuvent-ils produire de grands écarts sur longue période ?',
                        'answers' => [
                            ['answer' => 'Les variations successives s’appliquent à une base qui évolue elle-même au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Les taux successifs s’additionnent toujours simplement', 'iscorrect' => false],
                            ['answer' => 'La croissance composée ignore le temps', 'iscorrect' => false],
                            ['answer' => 'Chaque année utilise toujours la valeur initiale uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux de croissance annuel composé approximatif entre 100 et 121 sur deux ans ?',
                        'answers' => [
                            ['answer' => '10 %', 'iscorrect' => true],
                            ['answer' => '11 %', 'iscorrect' => false],
                            ['answer' => '21 %', 'iscorrect' => false],
                            ['answer' => '5 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le capital double sur 10 ans avec une croissance composée constante, quel est le principe utilisé pour déterminer le taux ?',
                        'answers' => [
                            ['answer' => 'Résoudre l’équation de capitalisation donnant un facteur final égal à 2', 'iscorrect' => true],
                            ['answer' => 'Diviser directement 100 % par 10 sans justification', 'iscorrect' => false],
                            ['answer' => 'Soustraire 10 de 2', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement une moyenne arithmétique des montants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le logarithme peut-il être utile pour résoudre une équation de croissance composée ?',
                        'answers' => [
                            ['answer' => 'Il permet de transformer une inconnue située dans un exposant en une expression algébrique manipulable', 'iscorrect' => true],
                            ['answer' => 'Il supprime toutes les variables', 'iscorrect' => false],
                            ['answer' => 'Il rend tous les taux égaux à zéro', 'iscorrect' => false],
                            ['answer' => 'Il ne peut pas être appliqué aux puissances', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur a le plus fort effet sur une croissance composée à long terme ?',
                        'answers' => [
                            ['answer' => 'Une variation même modérée du taux de croissance peut avoir un effet important lorsqu’elle est composée sur de nombreuses périodes', 'iscorrect' => true],
                            ['answer' => 'Uniquement la valeur initiale, jamais le taux', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations statistiques', 'iscorrect' => false],
                            ['answer' => 'La pente d’une demande linéaire uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valeur actuelle, annuités et décisions d’investissement',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur actuelle de 1 210 reçus dans deux ans à un taux de 10 % ?',
                        'answers' => [
                            ['answer' => '1 000', 'iscorrect' => true],
                            ['answer' => '1 100', 'iscorrect' => false],
                            ['answer' => '1 090', 'iscorrect' => false],
                            ['answer' => '1 210', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un flux de trésorerie à une date plus éloignée est-il davantage actualisé, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => Il est divisé par un facteur de capitalisation appliqué sur un plus grand nombre de périodes', 'iscorrect' => true],
                            ['answer' => Il devient automatiquement plus risqué dans tous les cas', 'iscorrect' => false],
                            ['answer' => Le taux d’actualisation devient négatif', 'iscorrect' => false],
                            ['answer' => Le montant futur devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet nécessite 5 000 aujourd’hui et génère 3 000 dans un an et 3 000 dans deux ans. Avec un taux de 10 %, sa VAN est approximativement :',
                        'answers' => [
                            ['answer' => '223,14', 'iscorrect' => true],
                            ['answer' => '500', 'iscorrect' => false],
                            ['answer' => '-223,14', 'iscorrect' => false],
                            ['answer' => '1 000', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une VAN positive ?',
                        'answers' => [
                            ['answer' => 'La valeur actuelle des flux futurs dépasse le coût initial au taux d’actualisation considéré', 'iscorrect' => true],
                            ['answer' => 'Le projet est nécessairement sans risque', 'iscorrect' => false],
                            ['answer' => 'Le coût initial est nul', 'iscorrect' => false],
                            ['answer' => 'Le projet ne produit aucun flux futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’actualisation peut-il refléter un coût d’opportunité ?',
                        'answers' => [
                            ['answer' => Il représente le rendement auquel les ressources pourraient être employées dans une autre utilisation comparable', 'iscorrect' => true],
                            ['answer' => Il représente uniquement le taux d’inflation', 'iscorrect' => false],
                            ['answer' => Il est toujours égal à zéro', 'iscorrect' => false],
                            ['answer' => Il correspond nécessairement au taux de chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une annuité de 1 000 est reçue à la fin de chaque année pendant deux ans. Avec un taux de 10 %, quelle est sa valeur actuelle ?',
                        'answers' => [
                            ['answer' => '1 735,54 environ', 'iscorrect' => true],
                            ['answer' => '2 000', 'iscorrect' => false],
                            ['answer' => '1 900', 'iscorrect' => false],
                            ['answer' => '1 650', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux d’actualisation plus élevé réduit-il la VAN d’un projet avec des flux futurs positifs ?',
                        'answers' => [
                            ['answer' => 'Il diminue la valeur actuelle de chacun des flux futurs', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours les flux futurs', 'iscorrect' => false],
                            ['answer' => 'Il réduit le coût initial', 'iscorrect' => false],
                            ['answer' => 'Il n’affecte pas la valeur actuelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’irréversibilité d’un investissement peut-elle rendre l’attente économiquement intéressante ?',
                        'answers' => [
                            ['answer' => 'Attendre peut fournir de nouvelles informations avant d’engager une dépense difficilement récupérable', 'iscorrect' => true],
                            ['answer' => 'L’attente augmente toujours la VAN', 'iscorrect' => false],
                            ['answer' => 'L’irréversibilité supprime le risque', 'iscorrect' => false],
                            ['answer' => 'Tous les investissements sont parfaitement réversibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variation du taux d’actualisation peut-elle modifier le classement de deux projets ?',
                        'answers' => [
                            ['answer' => 'Les projets peuvent avoir des profils temporels de flux différents et donc une sensibilité différente à l’actualisation', 'iscorrect' => true],
                            ['answer' => 'Le taux d’actualisation ne modifie jamais la VAN', 'iscorrect' => false],
                            ['answer' => 'Tous les projets ont exactement les mêmes flux', 'iscorrect' => false],
                            ['answer' => 'La VAN dépend uniquement du coût initial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité est-elle utile dans une décision d’investissement ?',
                        'answers' => [
                            ['answer' => 'Elle montre comment le résultat change lorsque les hypothèses clés, comme le taux ou les flux, varient', 'iscorrect' => true],
                            ['answer' => 'Elle garantit le résultat futur', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les incertitudes', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute hypothèse', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Programmation linéaire en économie',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’un problème de programmation linéaire ?',
                        'answers' => [
                            ['answer' => 'Maximiser ou minimiser une fonction linéaire sous des contraintes linéaires', 'iscorrect' => true],
                            ['answer' => 'Résoudre uniquement des équations quadratiques', 'iscorrect' => false],
                            ['answer' => 'Éliminer les contraintes', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement des pourcentages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise produisant deux biens, que peut représenter une contrainte de ressource ?',
                        'answers' => [
                            ['answer' => 'Une limite sur la combinaison des quantités produites due à la disponibilité d’un facteur', 'iscorrect' => true],
                            ['answer' => 'Une préférence du consommateur', 'iscorrect' => false],
                            ['answer' => 'Une variation du taux de change uniquement', 'iscorrect' => false],
                            ['answer' => 'Un prix sans aucune contrainte de quantité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les sommets de la région réalisable sont-ils importants en programmation linéaire ?',
                        'answers' => [
                            ['answer' => 'Lorsqu’un optimum existe, il peut être atteint à un sommet de la région réalisable dans le cadre linéaire standard', 'iscorrect' => true],
                            ['answer' => 'Aucun optimum ne peut être sur un sommet', 'iscorrect' => false],
                            ['answer' => 'Les sommets n’ont aucune relation avec les contraintes', 'iscorrect' => false],
                            ['answer' => 'Ils ne sont utilisés que pour les statistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise maximise Z = 40x + 30y sous x + y <= 10 et x <= 6. Quel sommet peut être optimal si les coefficients sont positifs ?',
                        'answers' => [
                            ['answer' => 'x = 6, y = 4', 'iscorrect' => true],
                            ['answer' => 'x = 0, y = 0', 'iscorrect' => false],
                            ['answer' => 'x = 10, y = 0', 'iscorrect' => false],
                            ['answer' => 'x = 6, y = 10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur de la fonction objectif doit-elle être évaluée aux sommets candidats ?',
                        'answers' => [
                            ['answer' => 'Pour identifier le sommet offrant la meilleure valeur réalisable de l’objectif', 'iscorrect' => true],
                            ['answer' => 'Parce que les contraintes n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Parce qu’un seul sommet est toujours possible', 'iscorrect' => false],
                            ['answer' => 'Parce que les variables doivent être égales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une contrainte active à l’optimum ?',
                        'answers' => [
                            ['answer' => 'Une contrainte satisfaite avec égalité au point optimal', 'iscorrect' => true],
                            ['answer' => 'Une contrainte forcément violée', 'iscorrect' => false],
                            ['answer' => 'Une contrainte qui n’influence jamais la solution', 'iscorrect' => false],
                            ['answer' => 'Une contrainte toujours strictement inactive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la programmation linéaire est-elle fréquente dans la gestion des ressources ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’allouer des ressources rares entre plusieurs activités sous contraintes', 'iscorrect' => true],
                            ['answer' => 'Elle suppose que les ressources sont illimitées', 'iscorrect' => false],
                            ['answer' => 'Elle ne permet pas d’intégrer de contraintes', 'iscorrect' => false],
                            ['answer' => 'Elle ne traite que les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une solution réalisable ?',
                        'answers' => [
                            ['answer' => 'Une combinaison de variables qui respecte toutes les contraintes du problème', 'iscorrect' => true],
                            ['answer' => 'Une solution qui maximise nécessairement l’objectif', 'iscorrect' => false],
                            ['answer' => 'Une solution qui viole une contrainte', 'iscorrect' => false],
                            ['answer' => 'Une solution toujours unique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une solution non réalisable ne peut-elle pas être optimale ?',
                        'answers' => [
                            ['answer' => 'Elle ne respecte pas les conditions imposées par le problème', 'iscorrect' => true],
                            ['answer' => 'Elle possède toujours un objectif inférieur', 'iscorrect' => false],
                            ['answer' => 'Elle est nécessairement négative', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours située à l’origine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat représente une région réalisable vide ?',
                        'answers' => [
                            ['answer' => 'Aucune combinaison de variables ne satisfait simultanément toutes les contraintes', 'iscorrect' => true],
                            ['answer' => 'Une infinité de solutions optimales', 'iscorrect' => false],
                            ['answer' => 'Un optimum unique garanti', 'iscorrect' => false],
                            ['answer' => 'Une fonction objectif constante', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mathématiques financières avancées',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur future de 10 000 à 8 % pendant trois ans avec capitalisation annuelle ?',
                        'answers' => [
                            ['answer' => '12 597,12', 'iscorrect' => true],
                            ['answer' => '12 400', 'iscorrect' => false],
                            ['answer' => '12 800', 'iscorrect' => false],
                            ['answer' => '10 824', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rendement annuel composé approximatif d’un investissement passant de 10 000 à 12 100 en deux ans ?',
                        'answers' => [
                            ['answer' => '10 %', 'iscorrect' => true],
                            ['answer' => '11 %', 'iscorrect' => false],
                            ['answer' => '21 %', 'iscorrect' => false],
                            ['answer' => '5 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux réel approximatif si le taux nominal est de 8 % et l’inflation de 3 % ?',
                        'answers' => [
                            ['answer' => 'Environ 5 %', 'iscorrect' => true],
                            ['answer' => 'Environ 11 %', 'iscorrect' => false],
                            ['answer' => 'Environ 2 %', 'iscorrect' => false],
                            ['answer' => 'Environ 3 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation exacte correspond à l’équation de Fisher entre taux nominal, taux réel et inflation ?',
                        'answers' => [
                            ['answer' => '1 + i = (1 + r)(1 + π)', 'iscorrect' => true],
                            ['answer' => 'i = r - π', 'iscorrect' => false],
                            ['answer' => '1 + r = i + π', 'iscorrect' => false],
                            ['answer' => 'i = r × π', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux réel est-il important dans une décision d’investissement ?',
                        'answers' => [
                            ['answer' => 'Il mesure plus directement le coût ou rendement corrigé de l’évolution générale des prix', 'iscorrect' => true],
                            ['answer' => 'Il ignore complètement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Il est toujours égal au taux nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle de 2 000 reçus dans trois ans à 5 % ?',
                        'answers' => [
                            ['answer' => '1 727,68 environ', 'iscorrect' => true],
                            ['answer' => '1 800', 'iscorrect' => false],
                            ['answer' => '1 900', 'iscorrect' => false],
                            ['answer' => '1 500', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une inflation plus élevée réduit-elle la valeur réelle d’un paiement nominal fixe ?',
                        'answers' => [
                            ['answer' => 'Le même montant monétaire permet d’acheter moins de biens et services', 'iscorrect' => true],
                            ['answer' => 'Le paiement nominal augmente automatiquement', 'iscorrect' => false],
                            ['answer' => 'Le pouvoir d’achat de la monnaie augmente', 'iscorrect' => false],
                            ['answer' => 'Le taux nominal devient nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le montant futur de 5 000 à 6 % pendant quatre ans ?',
                        'answers' => [
                            ['answer' => '6 312,38 environ', 'iscorrect' => true],
                            ['answer' => '6 200', 'iscorrect' => false],
                            ['answer' => '6 000', 'iscorrect' => false],
                            ['answer' => '6 500', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fréquence de capitalisation affecte-t-elle la valeur future lorsque le taux annuel nominal est fixé ?',
                        'answers' => [
                            ['answer' => 'Une capitalisation plus fréquente applique les intérêts sur les intérêts accumulés plus souvent', 'iscorrect' => true],
                            ['answer' => 'La fréquence n’a jamais aucun effet', 'iscorrect' => false],
                            ['answer' => 'Elle modifie uniquement le capital initial', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement le taux réel nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une VAN et un coût initial est-il utile dans une décision d’investissement ?',
                        'answers' => [
                            ['answer' => 'Cela permet d’évaluer si les flux futurs actualisés compensent suffisamment les ressources engagées aujourd’hui', 'iscorrect' => true],
                            ['answer' => 'Cela garantit un rendement sans risque', 'iscorrect' => false],
                            ['answer' => 'Cela élimine la nécessité d’estimer les flux futurs', 'iscorrect' => false],
                            ['answer' => 'Cela suppose que le taux d’actualisation est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Applications économiques intégrées',
                'questions' => [
                    [
                        'question' => 'Une entreprise a R(q) = 100q - q^2 et C(q) = 20q + 100. Quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 40', 'iscorrect' => true],
                            ['answer' => 'q = 20', 'iscorrect' => false],
                            ['answer' => 'q = 50', 'iscorrect' => false],
                            ['answer' => 'q = 80', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le même problème, quel est le profit maximal ?',
                        'answers' => [
                            ['answer' => '1 500', 'iscorrect' => true],
                            ['answer' => '1 400', 'iscorrect' => false],
                            ['answer' => '1 600', 'iscorrect' => false],
                            ['answer' => '1 000', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une demande est Q = 200 - 4P et une offre Q = 40 + 2P, quel est le prix d’équilibre ?',
                        'answers' => [
                            ['answer' => '26,67 environ', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                            ['answer' => '40', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans ce même marché, quelle est approximativement la quantité d’équilibre ?',
                        'answers' => [
                            ['answer' => '93,33', 'iscorrect' => true],
                            ['answer' => '80', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                            ['answer' => '120', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le PIB passe de 500 à 540, quel est le taux de croissance ?',
                        'answers' => [
                            ['answer' => '8 %', 'iscorrect' => true],
                            ['answer' => '6 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '12 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les prix augmentent de 4 % et la production réelle augmente de 3 %, quelle idée générale explique l’évolution du PIB nominal ?',
                        'answers' => [
                            ['answer' => 'Le PIB nominal peut augmenter approximativement par l’effet combiné de la croissance réelle et de la hausse des prix', 'iscorrect' => true],
                            ['answer' => 'Le PIB nominal doit diminuer', 'iscorrect' => false],
                            ['answer' => 'Les prix n’ont aucun effet sur le PIB nominal', 'iscorrect' => false],
                            ['answer' => 'La production réelle ne compte jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction de coût C(q) = 500 + 10q + 0,5q^2. Quelle est la valeur du coût marginal à q = 20 ?',
                        'answers' => [
                            ['answer' => '30', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '40', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une variable augmente de 12 % pendant trois années consécutives, quel principe doit être utilisé pour calculer la valeur finale ?',
                        'answers' => [
                            ['answer' => 'La capitalisation composée avec un facteur de 1,12 par période', 'iscorrect' => true],
                            ['answer' => 'Une addition simple de 12 + 12 + 12 sans base évolutive', 'iscorrect' => false],
                            ['answer' => 'Une soustraction de 12 % par année', 'iscorrect' => false],
                            ['answer' => 'Une division par 1,12', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d’actualisation réduit-elle généralement l’attrait des projets dont les flux sont très éloignés dans le temps ?',
                        'answers' => [
                            ['answer' => 'Les flux lointains subissent une actualisation plus forte et contribuent moins à la valeur actuelle', 'iscorrect' => true],
                            ['answer' => 'Les flux lointains augmentent automatiquement', 'iscorrect' => false],
                            ['answer' => 'Le coût initial disparaît', 'iscorrect' => false],
                            ['answer' => 'La VAN ne dépend jamais du taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle combinaison décrit le mieux une utilisation professionnelle des mathématiques économiques ?',
                        'answers' => [
                            ['answer' => 'Modéliser les relations, calculer les variations marginales, optimiser sous contraintes et interpréter les résultats économiquement', 'iscorrect' => true],
                            ['answer' => 'Effectuer uniquement des additions', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Résoudre des équations sans interprétation économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses : la bonne réponse n'est pas systématiquement en première position.
                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
