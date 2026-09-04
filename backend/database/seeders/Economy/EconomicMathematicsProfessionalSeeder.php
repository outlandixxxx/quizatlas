```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicMathematicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Optimisation avancée et conditions du premier ordre',
                'questions' => [
                    [
                        'question' => 'Une entreprise maximise π(q) = 120q - 2q² - 500. Quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 30', 'iscorrect' => true],
                            ['answer' => 'q = 20', 'iscorrect' => false],
                            ['answer' => 'q = 40', 'iscorrect' => false],
                            ['answer' => 'q = 60', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour π(q) = 90q - q² - 400, quel est le profit maximal ?',
                        'answers' => [
                            ['answer' => '1 625', 'iscorrect' => true],
                            ['answer' => '1 500', 'iscorrect' => false],
                            ['answer' => '2 025', 'iscorrect' => false],
                            ['answer' => '1 900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) = -3x² + 24x + 7, où se situe le maximum ?',
                        'answers' => [
                            ['answer' => 'x = 4', 'iscorrect' => true],
                            ['answer' => 'x = 3', 'iscorrect' => false],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) = 2x² - 20x + 9, où se situe le minimum ?',
                        'answers' => [
                            ['answer' => 'x = 5', 'iscorrect' => true],
                            ['answer' => 'x = 10', 'iscorrect' => false],
                            ['answer' => 'x = 4', 'iscorrect' => false],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la condition f\'(x) = 0 ne suffit-elle pas toujours à identifier un maximum ?',
                        'answers' => [
                            ['answer' => 'Un point critique peut correspondre à un minimum, un maximum ou un point stationnaire sans optimum', 'iscorrect' => true],
                            ['answer' => 'La dérivée première ne peut jamais être nulle', 'iscorrect' => false],
                            ['answer' => 'Tout point critique est automatiquement un maximum', 'iscorrect' => false],
                            ['answer' => 'La dérivée première mesure uniquement les coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un optimum intérieur de plusieurs variables, quelle condition de premier ordre est généralement nécessaire ?',
                        'answers' => [
                            ['answer' => Toutes les dérivées partielles de la fonction objectif doivent être nulles', 'iscorrect' => true],
                            ['answer' => 'Toutes les variables doivent être nulles', 'iscorrect' => false],
                            ['answer' => 'Toutes les dérivées secondes doivent être nulles', 'iscorrect' => false],
                            ['answer' => 'Toutes les contraintes doivent être absentes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concavité de la fonction objectif est-elle utile en optimisation ?',
                        'answers' => [
                            ['answer' => 'Elle permet souvent de relier un point critique à un maximum global sous des hypothèses appropriées', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une solution unique même sans contraintes', 'iscorrect' => false],
                            ['answer' => 'Elle implique que toutes les variables sont positives', 'iscorrect' => false],
                            ['answer' => 'Elle rend la fonction linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si π\'(q) > 0 sur tout l’intervalle réalisable [0, 50], où se situe le maximum ?',
                        'answers' => [
                            ['answer' => 'À q = 50', 'iscorrect' => true],
                            ['answer' => 'À q = 0', 'iscorrect' => false],
                            ['answer' => 'À q = 25', 'iscorrect' => false],
                            ['answer' => 'À une quantité négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les frontières lors d’une optimisation sous contrainte ?',
                        'answers' => [
                            ['answer' => 'L’optimum peut se trouver sur une frontière même si aucune condition intérieure ne l’identifie', 'iscorrect' => true],
                            ['answer' => 'Les frontières sont toujours irréalisables', 'iscorrect' => false],
                            ['answer' => 'Les frontières ne contiennent jamais de maximum', 'iscorrect' => false],
                            ['answer' => 'Les contraintes ne servent qu’à tracer des graphiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe économique est au cœur d’une décision marginale rationnelle ?',
                        'answers' => [
                            ['answer' => 'Comparer le bénéfice marginal au coût marginal de l’action supplémentaire', 'iscorrect' => true],
                            ['answer' => 'Comparer uniquement les valeurs totales historiques', 'iscorrect' => false],
                            ['answer' => 'Choisir toujours la plus grande quantité possible', 'iscorrect' => false],
                            ['answer' => 'Ignorer les coûts d’opportunité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Optimisation sous contraintes et multiplicateurs de Lagrange',
                'questions' => [
                    [
                        'question' => 'Dans un problème de maximisation sous contrainte d’égalité, que représente le multiplicateur de Lagrange à l’optimum sous les conditions appropriées ?',
                        'answers' => [
                            ['answer' => 'La valeur marginale de l’assouplissement de la contrainte', 'iscorrect' => true],
                            ['answer' => 'Le coût fixe total', 'iscorrect' => false],
                            ['answer' => 'La quantité optimale elle-même', 'iscorrect' => false],
                            ['answer' => 'Le taux d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour maximiser U(x,y) = xy sous la contrainte x + y = 10, quel choix symétrique maximise U ?',
                        'answers' => [
                            ['answer' => 'x = 5 et y = 5', 'iscorrect' => true],
                            ['answer' => 'x = 4 et y = 6', 'iscorrect' => false],
                            ['answer' => 'x = 2 et y = 8', 'iscorrect' => false],
                            ['answer' => 'x = 1 et y = 9', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans la même optimisation, quelle est la valeur maximale de U ?',
                        'answers' => [
                            ['answer' => '25', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions de second ordre sont-elles utiles dans une optimisation sous contrainte ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de vérifier la nature locale de l’optimum sur l’espace pertinent', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent toujours les contraintes', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent directement le revenu', 'iscorrect' => false],
                            ['answer' => 'Elles ne concernent que les systèmes linéaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une contrainte active dans un problème d’optimisation avec inégalités ?',
                        'answers' => [
                            ['answer' => 'La contrainte est satisfaite avec égalité au point considéré', 'iscorrect' => true],
                            ['answer' => 'La contrainte est nécessairement violée', 'iscorrect' => false],
                            ['answer' => 'La contrainte n’a aucun effet sur le choix', 'iscorrect' => false],
                            ['answer' => 'La contrainte doit être supprimée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions KKT généralisent-elles les conditions de Lagrange ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de traiter notamment des contraintes d’inégalité et des conditions de complémentarité', 'iscorrect' => true],
                            ['answer' => 'Elles ne s’appliquent qu’aux équations linéaires', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent toutes les contraintes', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toute fonction objectif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une contrainte x + 2y <= 20 avec x,y >= 0, que peut indiquer un multiplicateur nul ?',
                        'answers' => [
                            ['answer' => 'La contrainte peut être non contraignante à la marge dans la solution considérée', 'iscorrect' => true],
                            ['answer' => 'La contrainte est nécessairement violée', 'iscorrect' => false],
                            ['answer' => 'L’optimum est impossible', 'iscorrect' => false],
                            ['answer' => 'Toutes les variables sont nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la méthode de Lagrange est-elle importante en économie ?',
                        'answers' => [
                            ['answer' => 'Elle formalise les arbitrages sous contraintes de ressources, de budget ou de technologie', 'iscorrect' => true],
                            ['answer' => 'Elle sert uniquement à calculer des taux de change', 'iscorrect' => false],
                            ['answer' => 'Elle ne fonctionne qu’avec des fonctions linéaires', 'iscorrect' => false],
                            ['answer' => 'Elle ignore les contraintes économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le multiplicateur associé à une contrainte de ressource est élevé en valeur absolue, quelle interprétation est généralement pertinente ?',
                        'answers' => [
                            ['answer' => 'Une petite modification de la disponibilité de la ressource peut avoir une valeur économique importante', 'iscorrect' => true],
                            ['answer' => 'La ressource n’a aucune valeur marginale', 'iscorrect' => false],
                            ['answer' => 'La contrainte est toujours inactive', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal de la production est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les contraintes de non-négativité après résolution d’un système d’optimalité ?',
                        'answers' => [
                            ['answer' => 'Une solution algébrique peut être incompatible avec le domaine économique admissible', 'iscorrect' => true],
                            ['answer' => 'Les variables économiques sont toujours négatives', 'iscorrect' => false],
                            ['answer' => 'La non-négativité est uniquement graphique', 'iscorrect' => false],
                            ['answer' => 'Les contraintes économiques n’influencent jamais les solutions', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Matrices, algèbre linéaire et modèles économiques',
                'questions' => [
                    [
                        'question' => 'Quel est le déterminant de [[4, 2], [3, 5]] ?',
                        'answers' => [
                            ['answer' => '14', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si A est une matrice carrée inversible, que signifie A⁻¹A ?',
                        'answers' => [
                            ['answer' => 'La matrice identité', 'iscorrect' => true],
                            ['answer' => 'La matrice nulle', 'iscorrect' => false],
                            ['answer' => 'La matrice transposée', 'iscorrect' => false],
                            ['answer' => 'La matrice de coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre le système 3x + y = 14 et x + y = 6.',
                        'answers' => [
                            ['answer' => 'x = 4, y = 2', 'iscorrect' => true],
                            ['answer' => 'x = 3, y = 3', 'iscorrect' => false],
                            ['answer' => 'x = 5, y = 1', 'iscorrect' => false],
                            ['answer' => 'x = 2, y = 4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inversibilité d’une matrice est-elle importante dans la résolution AX = B ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’obtenir une solution unique X = A⁻¹B dans le cadre approprié', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une solution négative', 'iscorrect' => false],
                            ['answer' => 'Elle signifie que B est nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toutes les contraintes du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle input-output, que représentent généralement les coefficients techniques ?',
                        'answers' => [
                            ['answer' => 'Les quantités d’intrants nécessaires par unité de production d’un secteur', 'iscorrect' => true],
                            ['answer' => 'Les taux d’inflation sectoriels', 'iscorrect' => false],
                            ['answer' => 'Les salaires moyens uniquement', 'iscorrect' => false],
                            ['answer' => 'Les taux de change sectoriels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle de Leontief, quelle structure représente la production nécessaire pour satisfaire une demande finale donnée ?',
                        'answers' => [
                            ['answer' => 'X = (I - A)⁻¹D', 'iscorrect' => true],
                            ['answer' => 'X = AD', 'iscorrect' => false],
                            ['answer' => 'X = I + A + D', 'iscorrect' => false],
                            ['answer' => 'X = A⁻¹ - D', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la matrice (I - A)⁻¹ dans le modèle input-output ?',
                        'answers' => [
                            ['answer' => 'Les besoins directs et indirects de production nécessaires pour répondre à une demande finale', 'iscorrect' => true],
                            ['answer' => 'Uniquement les besoins de travail', 'iscorrect' => false],
                            ['answer' => 'Uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Le niveau général des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs propres peuvent-elles être pertinentes dans certains modèles économiques dynamiques ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent aider à caractériser la stabilité ou la trajectoire d’un système dynamique linéaire', 'iscorrect' => true],
                            ['answer' => 'Elles servent uniquement à calculer des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun lien avec la dynamique', 'iscorrect' => false],
                            ['answer' => 'Elles mesurent directement le PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une matrice mal conditionnée peut-elle poser des problèmes numériques ?',
                        'answers' => [
                            ['answer' => 'De petites erreurs dans les données peuvent produire des variations importantes dans la solution calculée', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une précision parfaite', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les variables nulles', 'iscorrect' => false],
                            ['answer' => 'Elle empêche nécessairement toute inversion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse économique empirique, pourquoi la colinéarité entre variables explicatives peut-elle être problématique ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre difficile l’identification précise des effets individuels des variables', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une meilleure estimation', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute erreur de mesure', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Équations différentielles et dynamique économique',
                'questions' => [
                    [
                        'question' => 'Quelle est la solution générale de dx/dt = ax dans le cas continu ?',
                        'answers' => [
                            ['answer' => 'x(t) = Ce^(at)', 'iscorrect' => true],
                            ['answer' => 'x(t) = C + at', 'iscorrect' => false],
                            ['answer' => 'x(t) = a/t', 'iscorrect' => false],
                            ['answer' => 'x(t) = Cx + a', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si dx/dt = 0, que signifie cette condition pour une variable continue ?',
                        'answers' => [
                            ['answer' => 'La variable est constante dans le temps', 'iscorrect' => true],
                            ['answer' => 'La variable augmente toujours', 'iscorrect' => false],
                            ['answer' => 'La variable diminue toujours', 'iscorrect' => false],
                            ['answer' => 'La variable devient nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans dx/dt = a - bx avec b > 0, quel est le point stationnaire ?',
                        'answers' => [
                            ['answer' => 'x* = a / b', 'iscorrect' => true],
                            ['answer' => 'x* = b / a', 'iscorrect' => false],
                            ['answer' => 'x* = a + b', 'iscorrect' => false],
                            ['answer' => 'x* = ab', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans dx/dt = a - bx avec b > 0, le point stationnaire est-il stable ?',
                        'answers' => [
                            ['answer' => 'Oui, la dynamique converge vers x* sous cette structure standard', 'iscorrect' => true],
                            ['answer' => 'Non, elle diverge toujours', 'iscorrect' => false],
                            ['answer' => 'Il n’existe pas de point stationnaire', 'iscorrect' => false],
                            ['answer' => 'La stabilité dépend uniquement de a', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les équations différentielles sont-elles utiles en macroéconomie ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de modéliser l’évolution continue de variables comme le capital, la dette ou la population', 'iscorrect' => true],
                            ['answer' => 'Elles ne peuvent représenter que des données historiques', 'iscorrect' => false],
                            ['answer' => 'Elles servent uniquement à calculer des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toutes les données empiriques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue une valeur stationnaire dans une dynamique économique ?',
                        'answers' => [
                            ['answer' => 'Elle représente un état où la variation instantanée de la variable est nulle', 'iscorrect' => true],
                            ['answer' => 'Elle représente toujours le maximum global', 'iscorrect' => false],
                            ['answer' => 'Elle implique toujours une croissance positive', 'iscorrect' => false],
                            ['answer' => 'Elle correspond nécessairement à une valeur nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de stabilité est-elle importante dans un modèle dynamique ?',
                        'answers' => [
                            ['answer' => 'Elle permet de déterminer si le système tend vers un équilibre ou s’en éloigne après une perturbation', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le niveau des prix', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les chocs économiques', 'iscorrect' => false],
                            ['answer' => 'Elle rend le modèle indépendant du temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une équation de croissance dx/dt = gx, que représente g ?',
                        'answers' => [
                            ['answer' => 'Le taux de croissance instantané de x', 'iscorrect' => true],
                            ['answer' => 'Le niveau initial de x', 'iscorrect' => false],
                            ['answer' => 'Le stock de capital', 'iscorrect' => false],
                            ['answer' => 'Le niveau des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dynamique avec rétroaction positive peut-elle devenir instable ?',
                        'answers' => [
                            ['answer' => 'Une variation initiale peut être amplifiée par le système au lieu d’être corrigée', 'iscorrect' => true],
                            ['answer' => 'Toute rétroaction positive est toujours stabilisatrice', 'iscorrect' => false],
                            ['answer' => 'La variable devient automatiquement constante', 'iscorrect' => false],
                            ['answer' => 'La stabilité ne dépend jamais des rétroactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles dynamiques nécessitent-ils des conditions initiales ?',
                        'answers' => [
                            ['answer' => 'Elles déterminent la trajectoire particulière parmi les solutions générales possibles', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent les paramètres économiques', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toutes les trajectoires identiques', 'iscorrect' => false],
                            ['answer' => 'Elles ne servent qu’à calculer les coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Calcul intégral et surplus économiques',
                'questions' => [
                    [
                        'question' => 'Quelle est une primitive de f(x) = 2x ?',
                        'answers' => [
                            ['answer' => 'x² + C', 'iscorrect' => true],
                            ['answer' => '2x² + C', 'iscorrect' => false],
                            ['answer' => 'x + C', 'iscorrect' => false],
                            ['answer' => '2 + C', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est l’intégrale de 3x² entre 0 et 2 ?',
                        'answers' => [
                            ['answer' => '8', 'iscorrect' => true],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intégrales définies sont-elles utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’agréger une variation marginale sur un intervalle pour obtenir une quantité totale', 'iscorrect' => true],
                            ['answer' => 'Elles ne servent qu’à calculer des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les fonctions marginales', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent uniquement les taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment le surplus du consommateur peut-il être exprimé à partir d’une fonction de demande inverse dans un cadre simple ?',
                        'answers' => [
                            ['answer' => 'Comme l’aire située sous la demande et au-dessus du prix de marché sur la quantité échangée', 'iscorrect' => true],
                            ['answer' => 'Comme l’aire sous l’offre uniquement', 'iscorrect' => false],
                            ['answer' => 'Comme le prix multiplié par le coût fixe', 'iscorrect' => false],
                            ['answer' => 'Comme le profit de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la demande inverse est P = 100 - Q et le prix est 40, quelle est la quantité demandée ?',
                        'answers' => [
                            ['answer' => '60', 'iscorrect' => true],
                            ['answer' => '40', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le cas précédent, quelle est la surface du surplus du consommateur ?',
                        'answers' => [
                            ['answer' => '1 800', 'iscorrect' => true],
                            ['answer' => '1 200', 'iscorrect' => false],
                            ['answer' => '2 400', 'iscorrect' => false],
                            ['answer' => '900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’intégrale d’un coût marginal peut-elle permettre de retrouver le coût variable total ?',
                        'answers' => [
                            ['answer' => 'Le coût variable total peut être obtenu en intégrant le coût marginal sur la quantité produite', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal mesure toujours directement le coût fixe', 'iscorrect' => false],
                            ['answer' => 'L’intégrale ignore les variations de quantité', 'iscorrect' => false],
                            ['answer' => 'Le coût total ne dépend jamais de la quantité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’intégration est-elle l’opération inverse de la dérivation dans ce contexte ?',
                        'answers' => [
                            ['answer' => 'Elle permet de reconstruire une fonction à partir de son taux de variation sous les conditions appropriées', 'iscorrect' => true],
                            ['answer' => 'Elle transforme toujours une fonction en constante', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend jamais d’une constante d’intégration', 'iscorrect' => false],
                            ['answer' => 'Elle ne s’applique pas aux fonctions économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le bénéfice marginal est MB(q) = 20 - q, quelle quantité de bénéfice total est générée entre 0 et 10 ?',
                        'answers' => [
                            ['answer' => '150', 'iscorrect' => true],
                            ['answer' => '100', 'iscorrect' => false],
                            ['answer' => '200', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les aires sous les courbes ont-elles une interprétation économique ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent représenter l’accumulation de valeurs marginales, comme le bénéfice ou le coût total', 'iscorrect' => true],
                            ['answer' => 'Elles représentent toujours le PIB', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucune interprétation économique', 'iscorrect' => false],
                            ['answer' => 'Elles mesurent uniquement l’inflation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Équations aux différences et modèles discrets',
                'questions' => [
                    [
                        'question' => 'Dans x_(t+1) = 1,05x_t, que représente 1,05 ?',
                        'answers' => [
                            ['answer' => 'Le facteur de croissance par période', 'iscorrect' => true],
                            ['answer' => 'Le taux de croissance égal à 105 %', 'iscorrect' => false],
                            ['answer' => 'Le niveau initial de x', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si x_0 = 100 et x_(t+1) = 1,1x_t, quelle est x_2 ?',
                        'answers' => [
                            ['answer' => '121', 'iscorrect' => true],
                            ['answer' => '120', 'iscorrect' => false],
                            ['answer' => '110', 'iscorrect' => false],
                            ['answer' => '111', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans x_(t+1) = a + bx_t, quel est le point stationnaire lorsqu’il existe et b ≠ 1 ?',
                        'answers' => [
                            ['answer' => 'x* = a / (1 - b)', 'iscorrect' => true],
                            ['answer' => 'x* = a / b', 'iscorrect' => false],
                            ['answer' => 'x* = 1 / (a - b)', 'iscorrect' => false],
                            ['answer' => 'x* = a(1 - b)', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans x_(t+1) = a + 0,5x_t, le point stationnaire est-il stable ?',
                        'answers' => [
                            ['answer' => 'Oui, car |0,5| < 1', 'iscorrect' => true],
                            ['answer' => 'Non, car 0,5 > 0', 'iscorrect' => false],
                            ['answer' => 'Non, car a ≠ 0', 'iscorrect' => false],
                            ['answer' => 'Seulement si x est négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsque |b| > 1 dans x_(t+1) = a + bx_t ?',
                        'answers' => [
                            ['answer' => 'Les écarts par rapport au point stationnaire tendent à s’amplifier', 'iscorrect' => true],
                            ['answer' => 'Le système converge toujours immédiatement', 'iscorrect' => false],
                            ['answer' => 'La variable devient nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'La croissance devient toujours linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les équations aux différences sont-elles adaptées à certains modèles économiques ?',
                        'answers' => [
                            ['answer' => 'Elles décrivent l’évolution période par période de variables comme la dette, le stock de capital ou les prix', 'iscorrect' => true],
                            ['answer' => 'Elles ne fonctionnent que dans les modèles continus', 'iscorrect' => false],
                            ['answer' => 'Elles servent uniquement à mesurer les taux de change', 'iscorrect' => false],
                            ['answer' => 'Elles ne peuvent pas intégrer d’anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dynamique avec un coefficient b négatif peut-elle produire des oscillations ?',
                        'answers' => [
                            ['answer' => 'Le signe négatif peut faire alterner les écarts au-dessus et au-dessous du point stationnaire', 'iscorrect' => true],
                            ['answer' => 'Un coefficient négatif implique toujours une divergence', 'iscorrect' => false],
                            ['answer' => 'Il rend la variable constante', 'iscorrect' => false],
                            ['answer' => 'Il élimine toute dynamique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si x_(t+1) = 10 + 0,2x_t, quelle est la valeur stationnaire ?',
                        'answers' => [
                            ['answer' => '12,5', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conditions initiales sont-elles importantes dans une équation aux différences ?',
                        'answers' => [
                            ['answer' => 'Elles déterminent la trajectoire particulière parmi les trajectoires compatibles avec la loi dynamique', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent tous les paramètres', 'iscorrect' => false],
                            ['answer' => 'Elles rendent le système indépendant du temps', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent toujours la stabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de stabilité est-elle essentielle pour un modèle macroéconomique dynamique ?',
                        'answers' => [
                            ['answer' => 'Elle permet de savoir si le système revient vers un équilibre ou s’en éloigne après un choc', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement le PIB initial', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les chocs futurs', 'iscorrect' => false],
                            ['answer' => 'Elle empêche les variables de varier', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mathématiques financières et choix intertemporel',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur future de 20 000 placés à 7 % pendant 5 ans ?',
                        'answers' => [
                            ['answer' => '28 051,03 environ', 'iscorrect' => true],
                            ['answer' => '27 000', 'iscorrect' => false],
                            ['answer' => '27 500', 'iscorrect' => false],
                            ['answer' => '29 000', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux annuel composé entre 10 000 et 14 641 sur quatre ans ?',
                        'answers' => [
                            ['answer' => '10 %', 'iscorrect' => true],
                            ['answer' => '8 %', 'iscorrect' => false],
                            ['answer' => '12 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux nominal est de 9 % et l’inflation de 4 %, le taux réel approximatif est :',
                        'answers' => [
                            ['answer' => 'Environ 5 %', 'iscorrect' => true],
                            ['answer' => 'Environ 13 %', 'iscorrect' => false],
                            ['answer' => 'Environ 4 %', 'iscorrect' => false],
                            ['answer' => 'Environ 3 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle de 5 000 reçus dans quatre ans à 8 % ?',
                        'answers' => [
                            ['answer' => '3 675,15 environ', 'iscorrect' => true],
                            ['answer' => '4 000', 'iscorrect' => false],
                            ['answer' => '3 500', 'iscorrect' => false],
                            ['answer' => '3 900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la hausse du taux d’actualisation affecte-t-elle davantage les projets à flux lointains ?',
                        'answers' => [
                            ['answer' => 'Les flux éloignés sont actualisés sur davantage de périodes', 'iscorrect' => true],
                            ['answer' => 'Leur coût initial devient toujours nul', 'iscorrect' => false],
                            ['answer' => 'Leurs flux futurs deviennent automatiquement plus élevés', 'iscorrect' => false],
                            ['answer' => 'Ils sont indépendants du taux d’actualisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet coûte 8 000 et rapporte 4 500 dans un an et 5 000 dans deux ans. Avec un taux de 10 %, quelle affirmation est correcte ?',
                        'answers' => [
                            ['answer' => 'La VAN est positive', 'iscorrect' => true],
                            ['answer' => 'La VAN est exactement nulle', 'iscorrect' => false],
                            ['answer' => 'La VAN est nécessairement très négative', 'iscorrect' => false],
                            ['answer' => 'Le projet ne peut pas être évalué', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux réel négatif peut-il modifier les décisions d’épargne et d’investissement ?',
                        'answers' => [
                            ['answer' => 'Le rendement corrigé de l’inflation peut devenir faible ou négatif, modifiant le coût d’opportunité des choix intertemporels', 'iscorrect' => true],
                            ['answer' => 'Il garantit toujours une forte épargne', 'iscorrect' => false],
                            ['answer' => 'Il rend toutes les obligations sans valeur', 'iscorrect' => false],
                            ['answer' => 'Il supprime l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’équivalence entre valeur actuelle et valeur future dépend-elle du taux ?',
                        'answers' => [
                            ['answer' => 'Le taux détermine le facteur de conversion entre les périodes', 'iscorrect' => true],
                            ['answer' => 'Le taux n’a aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La valeur future est toujours égale à la valeur actuelle', 'iscorrect' => false],
                            ['answer' => 'Le taux détermine uniquement le montant initial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse intertemporelle est-elle importante pour les entreprises ?',
                        'answers' => [
                            ['answer' => 'Les investissements impliquent des coûts présents et des bénéfices futurs qui doivent être comparés', 'iscorrect' => true],
                            ['answer' => 'Les entreprises ne reçoivent jamais de flux futurs', 'iscorrect' => false],
                            ['answer' => 'Le temps n’affecte jamais la valeur économique', 'iscorrect' => false],
                            ['answer' => 'Tous les investissements sont instantanés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’incertitude peut-elle justifier une prime de risque dans un modèle financier ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs peuvent exiger une compensation pour supporter un rendement incertain', 'iscorrect' => true],
                            ['answer' => 'L’incertitude garantit un rendement positif', 'iscorrect' => false],
                            ['answer' => 'La prime de risque correspond toujours à l’inflation', 'iscorrect' => false],
                            ['answer' => 'Le risque ne modifie jamais les taux exigés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse quantitative avancée et interprétation économique',
                'questions' => [
                    [
                        'question' => 'Pourquoi la dérivée d’une fonction de profit peut-elle être interprétée comme profit marginal ?',
                        'answers' => [
                            ['answer' => 'Elle mesure la variation approximative du profit associée à une petite variation de la quantité', 'iscorrect' => true],
                            ['answer' => 'Elle représente toujours le profit total', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les coûts fixes', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale au prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’élasticité est-elle souvent plus informative que la pente brute pour comparer des marchés ?',
                        'answers' => [
                            ['answer' => 'Elle mesure une réaction proportionnelle et tient compte des niveaux de prix et de quantité', 'iscorrect' => true],
                            ['answer' => 'Elle ignore les valeurs de la variable', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale à la pente', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut être utilisée que pour les coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les unités de mesure affectent-elles la pente mais pas nécessairement l’élasticité ?',
                        'answers' => [
                            ['answer' => 'La pente dépend des unités, alors que l’élasticité est fondée sur des variations proportionnelles', 'iscorrect' => true],
                            ['answer' => 'La pente est toujours indépendante des unités', 'iscorrect' => false],
                            ['answer' => 'L’élasticité dépend uniquement des unités monétaires', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont strictement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fonction de coût convexe est-elle économiquement utile ?',
                        'answers' => [
                            ['answer' => 'Elle peut représenter des coûts marginaux croissants et faciliter l’existence d’un optimum de production', 'iscorrect' => true],
                            ['answer' => 'Elle signifie que les coûts diminuent toujours avec la production', 'iscorrect' => false],
                            ['answer' => 'Elle implique un coût marginal constant', 'iscorrect' => false],
                            ['answer' => 'Elle rend le profit nécessairement négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fonction objectif concave est-elle particulièrement pratique pour une maximisation ?',
                        'answers' => [
                            ['answer' => 'Tout maximum local vérifie alors les propriétés nécessaires pour être global dans le cadre convexe approprié', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours que toutes les variables sont positives', 'iscorrect' => false],
                            ['answer' => 'Elle empêche toute contrainte', 'iscorrect' => false],
                            ['answer' => 'Elle implique que le maximum est toujours à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de sensibilité est-elle particulièrement importante dans un modèle économique quantitatif ?',
                        'answers' => [
                            ['answer' => 'Les résultats peuvent dépendre fortement des hypothèses choisies pour les paramètres et les données', 'iscorrect' => true],
                            ['answer' => 'Les paramètres sont toujours connus avec certitude', 'iscorrect' => false],
                            ['answer' => 'Elle garantit la validité causale du modèle', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute erreur de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes de non-négativité sont-elles particulièrement importantes dans les modèles économiques ?',
                        'answers' => [
                            ['answer' => Certaines quantités, coûts ou stocks ne peuvent pas prendre des valeurs négatives dans l’interprétation économique', 'iscorrect' => true],
                            ['answer' => Toutes les variables économiques doivent être négatives', 'iscorrect' => false],
                            ['answer' => Elles sont uniquement décoratives', 'iscorrect' => false],
                            ['answer' => Elles empêchent toute solution optimale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une solution mathématique peut-elle être économiquement non pertinente ?',
                        'answers' => [
                            ['answer' => Elle peut violer des contraintes institutionnelles, des domaines admissibles ou les hypothèses économiques du modèle', 'iscorrect' => true],
                            ['answer' => Toute solution mathématique est automatiquement économiquement valide', 'iscorrect' => false],
                            ['answer' => Les modèles économiques n’ont jamais de contraintes', 'iscorrect' => false],
                            ['answer' => Les variables économiques peuvent toujours prendre n’importe quelle valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les méthodes numériques peuvent-elles être nécessaires en économie professionnelle ?',
                        'answers' => [
                            ['answer' => Certains modèles sont trop complexes pour obtenir une solution analytique simple', 'iscorrect' => true],
                            ['answer' => Les méthodes analytiques n’existent pas', 'iscorrect' => false],
                            ['answer' => Les modèles numériques ne nécessitent aucune hypothèse', 'iscorrect' => false],
                            ['answer' => Les méthodes numériques garantissent toujours une solution exacte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux l’usage professionnel des mathématiques économiques ?',
                        'answers' => [
                            ['answer' => 'Formaliser le problème, identifier les contraintes, résoudre ou approximer le modèle, puis interpréter économiquement les résultats', 'iscorrect' => true],
                            ['answer' => 'Effectuer uniquement les calculs sans interprétation', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement des formules mémorisées', 'iscorrect' => false],
                            ['answer' => 'Ignorer les hypothèses dès qu’un résultat numérique existe', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Randomisation des réponses : la bonne réponse n'est jamais codée à une position fixe.
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
