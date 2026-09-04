<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgebraProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algebra')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Systèmes linéaires et résolution professionnelle',
                'description' => 'Analysez des systèmes linéaires et choisissez des méthodes adaptées à leur structure.',
                'questions' => [
                    [
                        'question' => 'Résolvez 2x + 3y = 13 et x - y = 1.',
                        'choices' => [
                            ['choice_text' => 'x = 16/5, y = 11/5', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 13/5, y = 8/5', 'is_correct' => false],
                        ],
                        'explanation' => 'De x - y = 1, on obtient x = y + 1. Ainsi 2(y+1) + 3y = 13, donc 5y = 11 et y = 11/5. Alors x = 16/5.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de [[4, 7], [2, 5]] ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 4 × 5 - 7 × 2 = 20 - 14 = 6.'
                    ],
                    [
                        'question' => 'Que signifie un mauvais conditionnement d’une matrice dans un calcul numérique ?',
                        'choices' => [
                            ['choice_text' => De petites perturbations des données peuvent provoquer de grandes variations de la solution', 'is_correct' => true],
                            ['choice_text' => La matrice devient automatiquement singulière', 'is_correct' => false],
                            ['choice_text' => Toutes les valeurs propres deviennent nulles', 'is_correct' => false],
                            ['choice_text' => La matrice devient nécessairement diagonale', 'is_correct' => false],
                        ],
                        'explanation' => 'Un problème mal conditionné peut amplifier les erreurs d’entrée et produire des variations importantes dans la solution calculée.'
                    ],
                    [
                        'question' => 'Si A est inversible, quelle relation permet de résoudre Ax = b ?',
                        'choices' => [
                            ['choice_text' => x = A⁻¹b', 'is_correct' => true],
                            ['choice_text' => x = Ab', 'is_correct' => false],
                            ['choice_text' => x = bA⁻¹', 'is_correct' => false],
                            ['choice_text' => x = A + b', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie Ax = b à gauche par A⁻¹ et on obtient x = A⁻¹b.'
                    ],
                    [
                        'question' => 'Quel avantage présente la factorisation LU d’une matrice lorsque plusieurs seconds membres doivent être résolus avec la même matrice A ?',
                        'choices' => [
                            ['choice_text' => La factorisation peut être calculée une seule fois puis réutilisée', 'is_correct' => true],
                            ['choice_text' => Elle évite tout calcul numérique', 'is_correct' => false],
                            ['choice_text' => Elle rend A automatiquement diagonale', 'is_correct' => false],
                            ['choice_text' => Elle supprime tous les seconds membres', 'is_correct' => false],
                        ],
                        'explanation' => 'Après avoir calculé A = LU, les résolutions avec plusieurs vecteurs b peuvent réutiliser cette factorisation.'
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lors d’une factorisation d’une matrice creuse ?',
                        'choices' => [
                            ['choice_text' => Le fill-in', 'is_correct' => true],
                            ['choice_text' => La disparition de toutes les valeurs non nulles', 'is_correct' => false],
                            ['choice_text' => La matrice devient toujours identité', 'is_correct' => false],
                            ['choice_text' => Le déterminant devient automatiquement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fill-in correspond à l’apparition de nouveaux coefficients non nuls pendant la factorisation.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois des méthodes itératives plutôt que des méthodes directes pour de très grands systèmes creux ?',
                        'choices' => [
                            ['choice_text' => Elles peuvent réduire les besoins en mémoire en évitant une factorisation complète', 'is_correct' => true],
                            ['choice_text' => Elles donnent toujours une solution exacte en une étape', 'is_correct' => false],
                            ['choice_text' => Elles ne nécessitent aucune hypothèse numérique', 'is_correct' => false],
                            ['choice_text' => Elles rendent la matrice dense', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour de très grands systèmes creux, une factorisation directe peut être coûteuse en mémoire ; certaines méthodes itératives exploitent directement les produits matrice-vecteur.'
                    ],
                    [
                        'question' => 'Si det(A) = 5 et det(B) = -2, quelle est det(AB) ?',
                        'choices' => [
                            ['choice_text' => '-10', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'det(AB) = det(A)det(B) = 5 × (-2) = -10.'
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas calculer explicitement A⁻¹ lorsqu’on veut résoudre un seul système Ax = b dans une implémentation numérique générale ?',
                        'choices' => [
                            ['choice_text' => Une factorisation directe de A est souvent plus efficace et numériquement préférable', 'is_correct' => true],
                            ['choice_text' => A⁻¹ n’existe jamais', 'is_correct' => false],
                            ['choice_text' => Le produit A⁻¹b est toujours impossible', 'is_correct' => false],
                            ['choice_text' => Les inverses sont uniquement définis pour les matrices diagonales', 'is_correct' => false],
                        ],
                        'explanation' => 'En pratique, on préfère souvent résoudre directement le système via LU, QR ou une autre factorisation plutôt que former explicitement l’inverse.'
                    ],
                    [
                        'question' => 'Dans l’algorithme de Gauss, pourquoi choisit-on parfois un pivotage partiel ?',
                        'choices' => [
                            ['choice_text' => Pour améliorer la stabilité numérique en choisissant un pivot de module suffisamment grand', 'is_correct' => true],
                            ['choice_text' => Pour rendre toutes les matrices diagonales', 'is_correct' => false],
                            ['choice_text' => Pour supprimer les solutions', 'is_correct' => false],
                            ['choice_text' => Pour garantir un déterminant égal à 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pivotage partiel réduit certains effets numériques liés à des pivots trop petits et améliore généralement la stabilité.'
                    ],
                ],
            ],

            [
                'title' => 'Valeurs propres et diagonalisation',
                'description' => 'Analysez les valeurs propres, les vecteurs propres et les applications de la diagonalisation.',
                'questions' => [
                    [
                        'question' => 'Quelle équation caractérise une valeur propre λ de A ?',
                        'choices' => [
                            ['choice_text' => det(A - λI) = 0', 'is_correct' => true],
                            ['choice_text' => det(A + λI) = 1', 'is_correct' => false],
                            ['choice_text' => det(A) = λ', 'is_correct' => false],
                            ['choice_text' => tr(A) = λ', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur propre λ rend A - λI singulière, donc son déterminant est nul.'
                    ],
                    [
                        'question' => 'Quelles sont les valeurs propres de [[2, 0], [0, 5]] ?',
                        'choices' => [
                            ['choice_text' => '2 et 5', 'is_correct' => true],
                            ['choice_text' => '7 et 10', 'is_correct' => false],
                            ['choice_text' => '0 et 7', 'is_correct' => false],
                            ['choice_text' => '-2 et -5', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une matrice diagonale, les éléments diagonaux sont les valeurs propres.'
                    ],
                    [
                        'question' => 'Une matrice carrée de dimension n ayant n valeurs propres distinctes est nécessairement :',
                        'choices' => [
                            ['choice_text' => Diagonalisable', 'is_correct' => true],
                            ['choice_text' => Singulière', 'is_correct' => false],
                            ['choice_text' => Nilpotente', 'is_correct' => false],
                            ['choice_text' => Orthogonale', 'is_correct' => false],
                        ],
                        'explanation' => 'Des valeurs propres distinctes fournissent n vecteurs propres linéairement indépendants.'
                    ],
                    [
                        'question' => 'Si λ = 0 est une valeur propre d’une matrice carrée A, que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => A est singulière', 'is_correct' => true],
                            ['choice_text' => A est orthogonale', 'is_correct' => false],
                            ['choice_text' => A est diagonale', 'is_correct' => false],
                            ['choice_text' => Toutes les valeurs propres sont nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur propre nulle implique det(A) = 0.'
                    ],
                    [
                        'question' => 'Si une matrice 2 × 2 possède les valeurs propres 3 et 7, quelle est sa trace ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                        ],
                        'explanation' => 'La trace est la somme des valeurs propres, comptées avec leurs multiplicités.'
                    ],
                    [
                        'question' => 'Si une matrice 2 × 2 possède les valeurs propres -2 et 5, quel est son déterminant ?',
                        'choices' => [
                            ['choice_text' => '-10', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déterminant est le produit des valeurs propres : (-2) × 5 = -10.'
                    ],
                    [
                        'question' => 'Si A = PDP⁻¹ avec D diagonale, quelle opération devient particulièrement simple ?',
                        'choices' => [
                            ['choice_text' => Le calcul de puissances A^k', 'is_correct' => true],
                            ['choice_text' => Le calcul du nombre de lignes', 'is_correct' => false],
                            ['choice_text' => La création de la matrice identité', 'is_correct' => false],
                            ['choice_text' => La suppression des variables', 'is_correct' => false],
                        ],
                        'explanation' => 'A^k = PD^kP⁻¹ et les puissances d’une matrice diagonale sont calculées élément par élément.'
                    ],
                    [
                        'question' => 'Quelle relation caractérise un vecteur propre v associé à λ ?',
                        'choices' => [
                            ['choice_text' => Av = λv avec v ≠ 0', 'is_correct' => true],
                            ['choice_text' => Av = 0 pour tout v', 'is_correct' => false],
                            ['choice_text' => Av = v + λ', 'is_correct' => false],
                            ['choice_text' => A = λI toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur propre non nul est simplement transformé en un multiple scalaire de lui-même.'
                    ],
                    [
                        'question' => 'Quelle propriété possède une matrice symétrique réelle ?',
                        'choices' => [
                            ['choice_text' => Elle est diagonalisable dans une base orthonormée', 'is_correct' => true],
                            ['choice_text' => Elle est toujours singulière', 'is_correct' => false],
                            ['choice_text' => Elle n’a jamais de valeurs propres réelles', 'is_correct' => false],
                            ['choice_text' => Elle est toujours nilpotente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème spectral garantit une diagonalisation orthogonale des matrices symétriques réelles.'
                    ],
                    [
                        'question' => 'Quelle est la condition nécessaire et suffisante pour qu’une matrice carrée soit inversible en termes de ses valeurs propres ?',
                        'choices' => [
                            ['choice_text' => 0 n’est pas une valeur propre', 'is_correct' => true],
                            ['choice_text' => Toutes ses valeurs propres sont égales', 'is_correct' => false],
                            ['choice_text' => Toutes ses valeurs propres sont positives', 'is_correct' => false],
                            ['choice_text' => Elle possède exactement une valeur propre', 'is_correct' => false],
                        ],
                        'explanation' => 'A est inversible si et seulement si son déterminant est non nul, ce qui équivaut à l’absence de valeur propre nulle.'
                    ],
                ],
            ],

            [
                'title' => 'Polynômes et structures avancées',
                'description' => 'Analysez les polynômes de degré élevé, les multiplicités de racines et les relations de Viète.',
                'questions' => [
                    [
                        'question' => 'Quel est le reste de la division de P(x) par x - 4 si P(4) = -3 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Par le théorème du reste, le reste vaut P(4), donc -3.'
                    ],
                    [
                        'question' => 'Si P(2) = P′(2) = 0, que peut-on déduire ?',
                        'choices' => [
                            ['choice_text' => 2 est au moins une racine double de P', 'is_correct' => true],
                            ['choice_text' => 2 est nécessairement une racine simple', 'is_correct' => false],
                            ['choice_text' => P est constant', 'is_correct' => false],
                            ['choice_text' => P n’a aucune autre racine', 'is_correct' => false],
                        ],
                        'explanation' => 'P(2) = 0 indique que 2 est racine et P′(2) = 0 indique que la multiplicité est au moins 2.'
                    ],
                    [
                        'question' => 'Quel est le degré de (x² + 1)³ ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré est 2 × 3 = 6.'
                    ],
                    [
                        'question' => 'Quel est le coefficient dominant de -3x⁷ + 2x³ - 1 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme dominant est -3x⁷, donc le coefficient dominant est -3.'
                    ],
                    [
                        'question' => 'Si les racines d’un polynôme quadratique sont 2 et 5, quelle est une équation correspondante à coefficient dominant 1 ?',
                        'choices' => [
                            ['choice_text' => 'x² - 7x + 10 = 0', 'is_correct' => true],
                            ['choice_text' => 'x² + 7x + 10 = 0', 'is_correct' => false],
                            ['choice_text' => 'x² - 3x + 10 = 0', 'is_correct' => false],
                            ['choice_text' => 'x² - 10x + 7 = 0', 'is_correct' => false],
                        ],
                        'explanation' => '(x - 2)(x - 5) = x² - 7x + 10.'
                    ],
                    [
                        'question' => 'Quel est le produit des racines de 4x² + 3x - 2 = 0 ?',
                        'choices' => [
                            ['choice_text' => '-1/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '-3/4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des racines vaut c/a = -2/4 = -1/2.'
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte pour un polynôme non nul de degré n sur C ?',
                        'choices' => [
                            ['choice_text' => Il possède exactement n racines comptées avec multiplicités', 'is_correct' => true],
                            ['choice_text' => Il possède toujours n racines distinctes', 'is_correct' => false],
                            ['choice_text' => Il possède au plus une racine', 'is_correct' => false],
                            ['choice_text' => Il ne peut pas avoir de racines complexes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème fondamental de l’algèbre garantit exactement n racines complexes avec multiplicité.'
                    ],
                    [
                        'question' => 'Quel est le reste de la division de x⁵ - 1 par x - 1 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'P(1) = 1⁵ - 1 = 0.'
                    ],
                    [
                        'question' => 'Quelle factorisation est correcte pour x⁴ - 5x² + 4 ?',
                        'choices' => [
                            ['choice_text' => '(x² - 1)(x² - 4)', 'is_correct' => true],
                            ['choice_text' => '(x² + 1)(x² + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 1)(x - 4)', 'is_correct' => false],
                            ['choice_text' => '(x² - 5)(x² + 4)', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant y = x², on obtient y² - 5y + 4 = (y - 1)(y - 4).'
                    ],
                    [
                        'question' => 'Quel est le degré de P(x)Q(x) si P et Q sont non nuls de degrés 3 et 8 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré du produit est 3 + 8 = 11.'
                    ],
                ],
            ],

            [
                'title' => 'Algèbre rationnelle et optimisation',
                'description' => 'Combinez fonctions rationnelles, contraintes algébriques et modèles d’optimisation.',
                'questions' => [
                    [
                        'question' => 'Un rectangle a un périmètre de 40 m. Si sa largeur vaut x, quelle est sa longueur ?',
                        'choices' => [
                            ['choice_text' => '20 - x', 'is_correct' => true],
                            ['choice_text' => '40 - x', 'is_correct' => false],
                            ['choice_text' => '20 + x', 'is_correct' => false],
                            ['choice_text' => '40/x', 'is_correct' => false],
                        ],
                        'explanation' => '2(L + x) = 40, donc L = 20 - x.'
                    ],
                    [
                        'question' => 'Pour ce rectangle, quelle expression donne l’aire ?',
                        'choices' => [
                            ['choice_text' => 'A(x) = x(20 - x)', 'is_correct' => true],
                            ['choice_text' => 'A(x) = 40x', 'is_correct' => false],
                            ['choice_text' => 'A(x) = 20 + x', 'is_correct' => false],
                            ['choice_text' => 'A(x) = 20x + x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Aire = longueur × largeur = (20 - x)x.'
                    ],
                    [
                        'question' => 'Pour A(x) = -x² + 20x, quelle valeur de x maximise l’aire ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est situé en x = -20/(2×-1) = 10.'
                    ],
                    [
                        'question' => 'Quelle est l’aire maximale du rectangle précédent ?',
                        'choices' => [
                            ['choice_text' => '100 m²', 'is_correct' => true],
                            ['choice_text' => '80 m²', 'is_correct' => false],
                            ['choice_text' => '200 m²', 'is_correct' => false],
                            ['choice_text' => '400 m²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x = 10, la longueur vaut également 10, donc l’aire vaut 100 m².'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x) = -2x² + 8x - 1 ?',
                        'choices' => [
                            ['choice_text' => '(2, 7)', 'is_correct' => true],
                            ['choice_text' => '(4, 7)', 'is_correct' => false],
                            ['choice_text' => '(2, -7)', 'is_correct' => false],
                            ['choice_text' => '(4, -1)', 'is_correct' => false],
                        ],
                        'explanation' => 'x = -8/(2×-2) = 2 et f(2) = -8 + 16 - 1 = 7.'
                    ],
                    [
                        'question' => 'Une fonction de coût est C(x) = x² - 10x + 40. Pour quelle valeur de x le coût est-il minimal ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est en x = -(-10)/(2×1) = 5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de C(x) = x² - 10x + 40 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'C(5) = 25 - 50 + 40 = 15.'
                    ],
                    [
                        'question' => 'Quelle condition doit respecter x dans 1/(x - 4) ?',
                        'choices' => [
                            ['choice_text' => 'x ≠ 4', 'is_correct' => true],
                            ['choice_text' => 'x > 4', 'is_correct' => false],
                            ['choice_text' => 'x < 4', 'is_correct' => false],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur ne peut jamais être nul.'
                    ],
                    [
                        'question' => 'Une valeur augmente de 20 %, puis de 30 %. Quel est le coefficient multiplicateur global ?',
                        'choices' => [
                            ['choice_text' => '1,56', 'is_correct' => true],
                            ['choice_text' => '1,50', 'is_correct' => false],
                            ['choice_text' => '1,60', 'is_correct' => false],
                            ['choice_text' => '1,36', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 1,20 × 1,30 = 1,56.'
                    ],
                    [
                        'question' => 'Une valeur augmente de 20 %, puis diminue de 20 %. Quel est le coefficient global ?',
                        'choices' => [
                            ['choice_text' => '0,96', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '1,04', 'is_correct' => false],
                            ['choice_text' => '0,80', 'is_correct' => false],
                        ],
                        'explanation' => '1,20 × 0,80 = 0,96. La valeur finale représente donc 96 % de l’initiale.'
                    ],
                ],
            ],

            [
                'title' => 'Algèbre algorithmique et calcul symbolique',
                'description' => 'Analysez les méthodes algorithmiques utilisées pour manipuler efficacement des objets algébriques.',
                'questions' => [
                    [
                        'question' => 'Quelle méthode permet une évaluation efficace d’un polynôme de haut degré ?',
                        'choices' => [
                            ['choice_text' => La méthode de Horner', 'is_correct' => true],
                            ['choice_text' => La recherche binaire', 'is_correct' => false],
                            ['choice_text' => L’algorithme de Dijkstra', 'is_correct' => false],
                            ['choice_text' => Le tri fusion', 'is_correct' => false],
                        ],
                        'explanation' => 'La méthode de Horner réécrit le polynôme sous forme imbriquée et réduit le nombre d’opérations.'
                    ],
                    [
                        'question' => 'Quel est l’avantage principal de conserver un polynôme sous forme factorisée lorsque cela est possible ?',
                        'choices' => [
                            ['choice_text' => Les racines et certaines évaluations peuvent être obtenues plus facilement', 'is_correct' => true],
                            ['choice_text' => Le degré devient toujours nul', 'is_correct' => false],
                            ['choice_text' => Toutes les variables disparaissent', 'is_correct' => false],
                            ['choice_text' => Le polynôme devient nécessairement linéaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme factorisée met directement en évidence les racines et peut réduire certaines opérations.'
                    ],
                    [
                        'question' => 'Pourquoi le développement complet d’une grande expression symbolique peut-il être coûteux ?',
                        'choices' => [
                            ['choice_text' => Le nombre de termes intermédiaires peut augmenter fortement', 'is_correct' => true],
                            ['choice_text' => Les coefficients deviennent toujours nuls', 'is_correct' => false],
                            ['choice_text' => Les variables disparaissent', 'is_correct' => false],
                            ['choice_text' => Le degré devient automatiquement 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement peut provoquer une explosion de la taille des expressions, appelée expression swell.'
                    ],
                    [
                        'question' => 'Quel algorithme permet de calculer le PGCD de deux polynômes ?',
                        'choices' => [
                            ['choice_text' => L’algorithme d’Euclide polynomial', 'is_correct' => true],
                            ['choice_text' => L’algorithme de Prim', 'is_correct' => false],
                            ['choice_text' => Le tri rapide', 'is_correct' => false],
                            ['choice_text' => L’algorithme de Floyd-Warshall', 'is_correct' => false],
                        ],
                        'explanation' => 'L’algorithme d’Euclide se généralise aux polynômes par divisions successives avec reste.'
                    ],
                    [
                        'question' => 'Pourquoi une bibliothèque de calcul symbolique doit-elle conserver les domaines de définition ?',
                        'choices' => [
                            ['choice_text' => Une simplification algébrique peut sinon introduire des valeurs interdites', 'is_correct' => true],
                            ['choice_text' => Les polynômes n’auraient plus de coefficients', 'is_correct' => false],
                            ['choice_text' => Les nombres deviendraient automatiquement complexes', 'is_correct' => false],
                            ['choice_text' => Le degré des expressions serait toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Par exemple, (x² - 1)/(x - 1) se simplifie en x + 1, mais x = 1 reste interdit dans l’expression originale.'
                    ],
                    [
                        'question' => 'Pourquoi les entiers arbitrairement grands sont-ils utiles dans les calculs algébriques exacts ?',
                        'choices' => [
                            ['choice_text' => Ils évitent les limites de taille des types entiers fixes', 'is_correct' => true],
                            ['choice_text' => Ils rendent les flottants exacts', 'is_correct' => false],
                            ['choice_text' => Ils empêchent toute division', 'is_correct' => false],
                            ['choice_text' => Ils transforment tous les nombres en premiers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les entiers arbitrairement grands permettent de conserver exactement des valeurs dépassant les bornes des types fixes.'
                    ],
                    [
                        'question' => 'Quelle stratégie réduit souvent le nombre d’opérations lors d’un calcul répété de puissances ?',
                        'choices' => [
                            ['choice_text' => L’exponentiation rapide par carrés successifs', 'is_correct' => true],
                            ['choice_text' => L’addition répétée', 'is_correct' => false],
                            ['choice_text' => Le tri des exposants', 'is_correct' => false],
                            ['choice_text' => La division par zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentiation rapide exploite la représentation binaire de l’exposant et réduit le nombre de multiplications.'
                    ],
                    [
                        'question' => 'Dans un calcul modulaire, pourquoi peut-on réduire un intermédiaire modulo m ?',
                        'choices' => [
                            ['choice_text' => Les congruences sont compatibles avec l’addition et la multiplication', 'is_correct' => true],
                            ['choice_text' => Toute division devient valide', 'is_correct' => false],
                            ['choice_text' => Les nombres deviennent égaux au sens ordinaire', 'is_correct' => false],
                            ['choice_text' => Cela exige toujours que m soit premier', 'is_correct' => false],
                        ],
                        'explanation' => 'Si a ≡ b (mod m), alors a+c ≡ b+c et ac ≡ bc (mod m).'
                    ],
                    [
                        'question' => 'Quelle méthode permet de vérifier symboliquement une factorisation proposée ?',
                        'choices' => [
                            ['choice_text' => Développer les facteurs et comparer avec l’expression initiale', 'is_correct' => true],
                            ['choice_text' => Tester uniquement x = 0', 'is_correct' => false],
                            ['choice_text' => Comparer seulement les degrés', 'is_correct' => false],
                            ['choice_text' => Comparer uniquement le coefficient dominant', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement fournit une vérification symbolique exacte.'
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une structure associant degré et coefficient pour représenter un polynôme ?',
                        'choices' => [
                            ['choice_text' => Elle facilite les opérations algébriques sur les coefficients', 'is_correct' => true],
                            ['choice_text' => Elle supprime toutes les racines', 'is_correct' => false],
                            ['choice_text' => Elle impose un polynôme de degré 1', 'is_correct' => false],
                            ['choice_text' => Elle interdit la multiplication', 'is_correct' => false],
                        ],
                        'explanation' => 'Une représentation structurée des coefficients facilite notamment l’addition, la multiplication et la dérivation des polynômes.'
                    ],
                ],
            ],

            [
                'title' => 'Algèbre abstraite appliquée',
                'description' => 'Analysez les notions de groupe, anneau, corps et morphisme dans des contextes algébriques.',
                'questions' => [
                    [
                        'question' => 'Quelle propriété caractérise l’associativité d’une opération * ?',
                        'choices' => [
                            ['choice_text' => (a * b) * c = a * (b * c)', 'is_correct' => true],
                            ['choice_text' => a * b = b * a', 'is_correct' => false],
                            ['choice_text' => a * a = a', 'is_correct' => false],
                            ['choice_text' => a * b = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'L’associativité concerne le regroupement des opérations, pas leur ordre.'
                    ],
                    [
                        'question' => 'Quelle propriété définit un élément neutre e pour une opération * ?',
                        'choices' => [
                            ['choice_text' => a * e = e * a = a', 'is_correct' => true],
                            ['choice_text' => a * e = 0', 'is_correct' => false],
                            ['choice_text' => e * e = a', 'is_correct' => false],
                            ['choice_text' => a + e = a', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élément neutre laisse tout élément inchangé sous l’opération considérée.'
                    ],
                    [
                        'question' => 'Quel ensemble muni de l’addition est un groupe abélien ?',
                        'choices' => [
                            ['choice_text' => Z', 'is_correct' => true],
                            ['choice_text' => Les entiers strictement positifs', 'is_correct' => false],
                            ['choice_text' => Les naturels avec la multiplication', 'is_correct' => false],
                            ['choice_text' => Les réels non nuls avec l’addition', 'is_correct' => false],
                        ],
                        'explanation' => 'Z est fermé pour l’addition, possède 0 et chaque entier possède son opposé.'
                    ],
                    [
                        'question' => 'Une application f est injective si :',
                        'choices' => [
                            ['choice_text' => f(x₁) = f(x₂) implique x₁ = x₂', 'is_correct' => true],
                            ['choice_text' => Tout élément d’arrivée possède un antécédent', 'is_correct' => false],
                            ['choice_text' => f(x) = x pour tout x', 'is_correct' => false],
                            ['choice_text' => f est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’injectivité interdit que deux éléments distincts du domaine aient la même image.'
                    ],
                    [
                        'question' => 'Une application f est surjective si :',
                        'choices' => [
                            ['choice_text' => Tout élément de l’ensemble d’arrivée possède au moins un antécédent', 'is_correct' => true],
                            ['choice_text' => Tous les antécédents sont uniques', 'is_correct' => false],
                            ['choice_text' => f est constante', 'is_correct' => false],
                            ['choice_text' => Le domaine est vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La surjectivité signifie que l’image de l’application est tout l’ensemble d’arrivée.'
                    ],
                    [
                        'question' => 'Une application à la fois injective et surjective est appelée :',
                        'choices' => [
                            ['choice_text' => Une bijection', 'is_correct' => true],
                            ['choice_text' => Une projection', 'is_correct' => false],
                            ['choice_text' => Une application constante', 'is_correct' => false],
                            ['choice_text' => Une relation symétrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bijection est à la fois injective et surjective.'
                    ],
                    [
                        'question' => 'Dans un groupe, quel est l’inverse de l’élément neutre e ?',
                        'choices' => [
                            ['choice_text' => e', 'is_correct' => true],
                            ['choice_text' => 0 dans tous les cas', 'is_correct' => false],
                            ['choice_text' => -e toujours', 'is_correct' => false],
                            ['choice_text' => Il n’existe pas', 'is_correct' => false],
                        ],
                        'explanation' => 'e * e = e, donc e est son propre inverse.'
                    ],
                    [
                        'question' => 'Dans un corps, tout élément non nul possède :',
                        'choices' => [
                            ['choice_text' => Un inverse multiplicatif', 'is_correct' => true],
                            ['choice_text' => Un inverse additif seulement', 'is_correct' => false],
                            ['choice_text' => Toujours deux inverses', 'is_correct' => false],
                            ['choice_text' => Aucun inverse', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, tout élément non nul d’un corps possède un inverse multiplicatif.'
                    ],
                    [
                        'question' => 'Quel ensemble forme un corps avec les opérations usuelles ?',
                        'choices' => [
                            ['choice_text' => R', 'is_correct' => true],
                            ['choice_text' => Z', 'is_correct' => false],
                            ['choice_text' => Les entiers pairs', 'is_correct' => false],
                            ['choice_text' => Les naturels positifs', 'is_correct' => false],
                        ],
                        'explanation' => 'R est un corps : tout réel non nul possède un inverse multiplicatif réel.'
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un morphisme algébrique ?',
                        'choices' => [
                            ['choice_text' => Préserver les opérations ou structures pertinentes', 'is_correct' => true],
                            ['choice_text' => Supprimer toutes les opérations', 'is_correct' => false],
                            ['choice_text' => Transformer toute structure en ensemble vide', 'is_correct' => false],
                            ['choice_text' => Garantir que toutes les applications sont bijectives', 'is_correct' => false],
                        ],
                        'explanation' => 'Un morphisme respecte les opérations de la structure considérée, par exemple l’addition ou la multiplication selon le contexte.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle d’algèbre',
                'description' => 'Combinez plusieurs outils algébriques dans des problèmes exigeant raisonnement, vérification et choix de méthode.',
                'questions' => [
                    [
                        'question' => 'Quelle est la solution du système x + y = 7 et 2x - y = 5 ?',
                        'choices' => [
                            ['choice_text' => 'x = 4, y = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 5', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les équations, 3x = 12, donc x = 4 et y = 3.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de [[6, 2], [3, 5]] ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 6 × 5 - 2 × 3 = 30 - 6 = 24.'
                    ],
                    [
                        'question' => 'Quelle est la forme factorisée de x³ - 4x ?',
                        'choices' => [
                            ['choice_text' => 'x(x - 2)(x + 2)', 'is_correct' => true],
                            ['choice_text' => 'x(x - 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 2)²(x + 2)', 'is_correct' => false],
                            ['choice_text' => 'x(x + 4)', 'is_correct' => false],
                        ],
                        'explanation' => 'x³ - 4x = x(x² - 4) = x(x - 2)(x + 2).'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x - 4| = 2 ?',
                        'choices' => [
                            ['choice_text' => 'x = 2 ou x = 6', 'is_correct' => true],
                            ['choice_text' => 'x = 4 ou x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = -2 ou x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 2 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'x - 4 = 2 donne x = 6, ou x - 4 = -2 donne x = 2.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x) = -x² + 6x - 5 ?',
                        'choices' => [
                            ['choice_text' => '(3, 4)', 'is_correct' => true],
                            ['choice_text' => '(6, 4)', 'is_correct' => false],
                            ['choice_text' => '(3, -4)', 'is_correct' => false],
                            ['choice_text' => '(5, 3)', 'is_correct' => false],
                        ],
                        'explanation' => 'x = -6/(2×-1) = 3 et f(3) = -9 + 18 - 5 = 4.'
                    ],
                    [
                        'question' => 'Quelle propriété est vraie pour det(A⁻¹) lorsque A est inversible ?',
                        'choices' => [
                            ['choice_text' => det(A⁻¹) = 1/det(A)', 'is_correct' => true],
                            ['choice_text' => det(A⁻¹) = det(A)', 'is_correct' => false],
                            ['choice_text' => det(A⁻¹) = -det(A)', 'is_correct' => false],
                            ['choice_text' => det(A⁻¹) = det(A)²', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme AA⁻¹ = I, det(A)det(A⁻¹) = 1, donc det(A⁻¹) = 1/det(A).'
                    ],
                    [
                        'question' => 'Une matrice 3 × 3 a pour valeurs propres 2, 4 et -1. Quelle est sa trace ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-8', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La trace est la somme des valeurs propres : 2 + 4 - 1 = 5.'
                    ],
                    [
                        'question' => 'Une matrice 3 × 3 a pour valeurs propres 2, 4 et -1. Quel est son déterminant ?',
                        'choices' => [
                            ['choice_text' => '-8', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déterminant est le produit des valeurs propres : 2 × 4 × (-1) = -8.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x) = √(x + 5)/(x - 2) ?',
                        'choices' => [
                            ['choice_text' => x ≥ -5 et x ≠ 2', 'is_correct' => true],
                            ['choice_text' => x > -5 et x ≠ 2', 'is_correct' => false],
                            ['choice_text' => x ≥ 5 et x ≠ 2', 'is_correct' => false],
                            ['choice_text' => x ≥ -5', 'is_correct' => false],
                        ],
                        'explanation' => 'La racine exige x + 5 ≥ 0, donc x ≥ -5, et le dénominateur impose x ≠ 2.'
                    ],
                    [
                        'question' => 'Quelle méthode est la plus appropriée pour vérifier exactement qu’une identité polynomiale est vraie pour tout x ?',
                        'choices' => [
                            ['choice_text' => Une transformation symbolique exacte', 'is_correct' => true],
                            ['choice_text' => Tester une seule valeur', 'is_correct' => false],
                            ['choice_text' => Arrondir les coefficients', 'is_correct' => false],
                            ['choice_text' => Comparer uniquement les degrés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vérification symbolique prouve l’égalité sur tout le domaine concerné, contrairement à un test numérique limité.'
                    ],
                ],
            ],
        ];

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

                $choices = $questionData['choices'];

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