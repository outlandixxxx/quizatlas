<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FunctionsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'functions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fonctions affines et quadratiques',
                'description' => 'Approfondissez l’étude des fonctions affines et quadratiques, leurs racines, sommets et variations.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme canonique de f(x)=x²-6x+5 ?',
                        'choices' => [
                            ['choice_text' => '(x-3)²-4', 'is_correct' => true],
                            ['choice_text' => '(x+3)²-4', 'is_correct' => false],
                            ['choice_text' => '(x-3)²+4', 'is_correct' => false],
                            ['choice_text' => '(x+3)²+4', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-6x+5=(x-3)²-9+5=(x-3)²-4.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=x²-6x+5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-4)', 'is_correct' => true],
                            ['choice_text' => '(-3,-4)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est (x-3)²-4, donc le sommet est (3,-4).'
                    ],
                    [
                        'question' => 'Quel est le discriminant de 2x²-4x+2 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ=b²-4ac=(-4)²-4×2×2=16-16=0.'
                    ],
                    [
                        'question' => 'Quelles sont les racines de x²-5x+6=0 ?',
                        'choices' => [
                            ['choice_text' => '2 et 3', 'is_correct' => true],
                            ['choice_text' => '-2 et -3', 'is_correct' => false],
                            ['choice_text' => '1 et 6', 'is_correct' => false],
                            ['choice_text' => '-1 et -6', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-5x+6=(x-2)(x-3), donc x=2 ou x=3.'
                    ],
                    [
                        'question' => 'Pour quelle valeur de x la fonction f(x)=3x-12 s’annule-t-elle ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '3x-12=0 donne 3x=12, donc x=4.'
                    ],
                    [
                        'question' => 'La fonction f(x)=-2x+7 est-elle croissante ou décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Décroissante', 'is_correct' => true],
                            ['choice_text' => 'Croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient directeur -2 est négatif, donc la fonction est décroissante.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=2(x-3)²-5 ?',
                        'choices' => [
                            ['choice_text' => '-5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de (x-3)² est positif. Le minimum est atteint au sommet et vaut -5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=-3(x+2)²+4 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'La parabole est ouverte vers le bas. Son sommet a pour ordonnée 4.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (2,5) et (6,13) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'm=(13-5)/(6-2)=8/4=2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (1,4) avec une pente -3 ?',
                        'choices' => [
                            ['choice_text' => 'y=-3x+7', 'is_correct' => true],
                            ['choice_text' => 'y=3x+1', 'is_correct' => false],
                            ['choice_text' => 'y=-3x+4', 'is_correct' => false],
                            ['choice_text' => 'y=3x+7', 'is_correct' => false],
                        ],
                        'explanation' => 'y-4=-3(x-1), donc y=-3x+7.'
                    ],
                ],
            ],

            [
                'title' => 'Domaine, image et restrictions',
                'description' => 'Déterminez les domaines et images de fonctions rationnelles, radicales et polynomiales simples.',
                'questions' => [
                    [
                        'question' => 'Quel est le domaine de f(x)=1/(x²-4) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-2,2}', 'is_correct' => true],
                            ['choice_text' => 'R\\{4}', 'is_correct' => false],
                            ['choice_text' => 'R\\{-4,4}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-4=(x-2)(x+2), donc le dénominateur s’annule pour x=-2 et x=2.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(3x-6) ?',
                        'choices' => [
                            ['choice_text' => '[2,+∞[', 'is_correct' => true],
                            ['choice_text' => ']2,+∞[', 'is_correct' => false],
                            ['choice_text' => '[6,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 3x-6≥0, donc x≥2.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(9-x²) ?',
                        'choices' => [
                            ['choice_text' => '[-3,3]', 'is_correct' => true],
                            ['choice_text' => ']-3,3[', 'is_correct' => false],
                            ['choice_text' => ']-∞,3]', 'is_correct' => false],
                            ['choice_text' => '[0,3]', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 9-x²≥0, donc x²≤9 et -3≤x≤3.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=1/√(x-1) ?',
                        'choices' => [
                            ['choice_text' => ']1,+∞[', 'is_correct' => true],
                            ['choice_text' => '[1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{1}', 'is_correct' => false],
                            ['choice_text' => ']-∞,1[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x-1>0, car la racine doit être réelle et non nulle au dénominateur.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble des valeurs de f(x)=(x-2)²+3 ?',
                        'choices' => [
                            ['choice_text' => '[3,+∞[', 'is_correct' => true],
                            ['choice_text' => ']3,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,3]', 'is_correct' => false],
                        ],
                        'explanation' => '(x-2)²≥0, donc f(x)≥3. La valeur 3 est atteinte pour x=2.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble des valeurs de f(x)=-(x+1)²+5 ?',
                        'choices' => [
                            ['choice_text' => ']-∞,5]', 'is_correct' => true],
                            ['choice_text' => '[5,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞, -1]', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme (x+1)²≥0, on a -(x+1)²≤0, donc f(x)≤5.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=(x+2)/(x²+1) ?',
                        'choices' => [
                            ['choice_text' => 'R', 'is_correct' => true],
                            ['choice_text' => 'R\\{-1,1}', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'x²+1 est strictement positif pour tout réel x, donc la fonction est définie sur R.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(x²-16) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-4] ∪ [4,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-4,4]', 'is_correct' => false],
                            ['choice_text' => ']-4,4[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-16≥0 équivaut à x²≥16, donc |x|≥4.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=1/(x+5)² ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-5}', 'is_correct' => true],
                            ['choice_text' => 'R\\{5}', 'is_correct' => false],
                            ['choice_text' => ']-5,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur est nul uniquement pour x=-5.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble des valeurs de f(x)=x²-4x+7 ?',
                        'choices' => [
                            ['choice_text' => '[3,+∞[', 'is_correct' => true],
                            ['choice_text' => '[7,+∞[', 'is_correct' => false],
                            ['choice_text' => ']-∞,3]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-4x+7=(x-2)²+3, donc f(x)≥3.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations et fonctions',
                'description' => 'Analysez les translations, symétries, dilatations et transformations de fonctions usuelles.',
                'questions' => [
                    [
                        'question' => 'Quelle transformation permet de passer de f(x) à f(x)+4 ?',
                        'choices' => [
                            ['choice_text' => 'Une translation verticale de 4 unités vers le haut', 'is_correct' => true],
                            ['choice_text' => 'Une translation horizontale de 4 unités vers la droite', 'is_correct' => false],
                            ['choice_text' => 'Une translation verticale de 4 unités vers le bas', 'is_correct' => false],
                            ['choice_text' => 'Une réflexion par rapport à l’axe des ordonnées', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter 4 à toutes les images translate le graphe vers le haut de 4 unités.'
                    ],
                    [
                        'question' => 'Quelle transformation permet de passer de f(x) à f(x-3) ?',
                        'choices' => [
                            ['choice_text' => 'Une translation horizontale de 3 unités vers la droite', 'is_correct' => true],
                            ['choice_text' => 'Une translation horizontale de 3 unités vers la gauche', 'is_correct' => false],
                            ['choice_text' => 'Une translation verticale de 3 unités', 'is_correct' => false],
                            ['choice_text' => 'Une réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Remplacer x par x-3 translate le graphe de 3 unités vers la droite.'
                    ],
                    [
                        'question' => 'Quelle transformation permet de passer de f(x) à f(-x) ?',
                        'choices' => [
                            ['choice_text' => Une symétrie par rapport à l’axe des ordonnées', 'is_correct' => true],
                            ['choice_text' => Une symétrie par rapport à l’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => Une translation', 'is_correct' => false],
                            ['choice_text' => Une dilatation verticale', 'is_correct' => false],
                        ],
                        'explanation' => 'La transformation x→-x produit une réflexion horizontale par rapport à l’axe des ordonnées.'
                    ],
                    [
                        'question' => 'Quelle transformation permet de passer de f(x) à -f(x) ?',
                        'choices' => [
                            ['choice_text' => Une symétrie par rapport à l’axe des abscisses', 'is_correct' => true],
                            ['choice_text' => Une symétrie par rapport à l’axe des ordonnées', 'is_correct' => false],
                            ['choice_text' => Une translation verticale', 'is_correct' => false],
                            ['choice_text' => Une translation horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Changer le signe des ordonnées donne une réflexion par rapport à l’axe des abscisses.'
                    ],
                    [
                        'question' => 'Quelle transformation produit g(x)=2f(x) ?',
                        'choices' => [
                            ['choice_text' => Un étirement vertical de facteur 2', 'is_correct' => true],
                            ['choice_text' => Un étirement horizontal de facteur 2', 'is_correct' => false],
                            ['choice_text' => Une translation verticale de 2', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ordonnées sont multipliées par 2.'
                    ],
                    [
                        'question' => 'Quelle transformation produit g(x)=f(2x) ?',
                        'choices' => [
                            ['choice_text' => Une compression horizontale de facteur 2', 'is_correct' => true],
                            ['choice_text' => Un étirement horizontal de facteur 2', 'is_correct' => false],
                            ['choice_text' => Un étirement vertical de facteur 2', 'is_correct' => false],
                            ['choice_text' => Une translation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur 2 à l’intérieur de la fonction compresse le graphe horizontalement.'
                    ],
                    [
                        'question' => 'Quelle transformation produit g(x)=f(x)+2 à partir de f(x) ?',
                        'choices' => [
                            ['choice_text' => Une translation verticale de 2 unités vers le haut', 'is_correct' => true],
                            ['choice_text' => Une translation horizontale de 2 unités', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                            ['choice_text' => Une compression verticale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout de 2 augmente chaque ordonnée de 2.'
                    ],
                    [
                        'question' => 'Quelle fonction représente la parabole y=x² translatée de 2 unités à droite et de 3 unités vers le bas ?',
                        'choices' => [
                            ['choice_text' => 'y=(x-2)²-3', 'is_correct' => true],
                            ['choice_text' => 'y=(x+2)²-3', 'is_correct' => false],
                            ['choice_text' => 'y=(x-2)²+3', 'is_correct' => false],
                            ['choice_text' => 'y=(x+2)²+3', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation de 2 à droite donne x-2, et de 3 vers le bas donne -3.'
                    ],
                    [
                        'question' => 'Quelle fonction représente |x| réfléchie par rapport à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '-|x|', 'is_correct' => true],
                            ['choice_text' => '|x|+1', 'is_correct' => false],
                            ['choice_text' => '|-x|', 'is_correct' => false],
                            ['choice_text' => '|x|-1', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion par rapport à l’axe des abscisses transforme f(x) en -f(x).'
                    ],
                    [
                        'question' => 'Quelle fonction représente √x translatée de 4 unités vers la gauche ?',
                        'choices' => [
                            ['choice_text' => '√(x+4)', 'is_correct' => true],
                            ['choice_text' => '√(x-4)', 'is_correct' => false],
                            ['choice_text' => '√x+4', 'is_correct' => false],
                            ['choice_text' => '√x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation de 4 unités vers la gauche remplace x par x+4.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions rationnelles',
                'description' => 'Étudiez les fonctions rationnelles simples, leurs asymptotes et leurs restrictions.',
                'questions' => [
                    [
                        'question' => Quelle est l’asymptote verticale de f(x)=1/(x-3) ?',
                        'choices' => [
                            ['choice_text' => 'x=3', 'is_correct' => true],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                            ['choice_text' => 'x=-3', 'is_correct' => false],
                            ['choice_text' => 'y=-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur s’annule pour x=3, ce qui donne l’asymptote verticale x=3.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=1/(x-3)+2 ?',
                        'choices' => [
                            ['choice_text' => 'y=2', 'is_correct' => true],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque |x| devient grand, 1/(x-3) tend vers 0. La fonction tend donc vers 2.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=2/(x+1) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-1}', 'is_correct' => true],
                            ['choice_text' => 'R\\{1}', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x+1 ne doit pas être nul, donc x≠-1.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=(3x+1)/(x-2) ?',
                        'choices' => [
                            ['choice_text' => 'y=3', 'is_correct' => true],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux, donc l’asymptote horizontale est le rapport des coefficients dominants : 3/1=3.'
                    ],
                    [
                        'question' => Quelle est l’asymptote verticale de f(x)=(3x+1)/(x-2) ?',
                        'choices' => [
                            ['choice_text' => 'x=2', 'is_correct' => true],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'x=-2', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur s’annule en x=2 et le numérateur n’y est pas nul.'
                    ],
                    [
                        'question' => Quel est le zéro de f(x)=(x-4)/(x+2) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fraction est nulle lorsque son numérateur est nul et son dénominateur non nul. x-4=0 donne x=4.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=5/(x+2) ?',
                        'choices' => [
                            ['choice_text' => 'y=0', 'is_correct' => true],
                            ['choice_text' => 'y=5', 'is_correct' => false],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'x=-2', 'is_correct' => false],
                        ],
                        'explanation' => '5/(x+2) tend vers 0 lorsque |x| tend vers l’infini.'
                    ],
                    [
                        'question' => Quelle est l’asymptote verticale de f(x)=4/(2x-6) ?',
                        'choices' => [
                            ['choice_text' => 'x=3', 'is_correct' => true],
                            ['choice_text' => 'x=6', 'is_correct' => false],
                            ['choice_text' => 'x=-3', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                        ],
                        'explanation' => '2x-6=0 donne x=3.'
                    ],
                    [
                        'question' => Quelle est la valeur de f(1) pour f(x)=3/(x+2) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=3/(1+2)=3/3=1.'
                    ],
                    [
                        'question' => La fonction f(x)=1/x est-elle paire ou impaire ?',
                        'choices' => [
                            ['choice_text' => Impaire', 'is_correct' => true],
                            ['choice_text' => Paire', 'is_correct' => false],
                            ['choice_text' => Ni paire ni impaire', 'is_correct' => false],
                            ['choice_text' => Constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=1/(-x)=-1/x=-f(x), donc f est impaire.'
                    ],
                ],
            ],

            [
                'title' => 'Composition de fonctions',
                'description' => 'Calculez des compositions de fonctions et déterminez leur domaine lorsque nécessaire.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=2x+1 et g(x)=x², quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '2x²+1', 'is_correct' => true],
                            ['choice_text' => '(2x+1)²', 'is_correct' => false],
                            ['choice_text' => 'x²+2', 'is_correct' => false],
                            ['choice_text' => '2x+1', 'is_correct' => false],
                        ],
                        'explanation' => '(f∘g)(x)=f(x²)=2x²+1.'
                    ],
                    [
                        'question' => 'Si f(x)=x² et g(x)=x+3, quelle est (g∘f)(x) ?',
                        'choices' => [
                            ['choice_text' => 'x²+3', 'is_correct' => true],
                            ['choice_text' => '(x+3)²', 'is_correct' => false],
                            ['choice_text' => 'x²+9', 'is_correct' => false],
                            ['choice_text' => '2x+3', 'is_correct' => false],
                        ],
                        'explanation' => '(g∘f)(x)=g(x²)=x²+3.'
                    ],
                    [
                        'question' => 'Si f(x)=3x-2 et g(x)=2x+1, quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '6x+1', 'is_correct' => true],
                            ['choice_text' => '6x-1', 'is_correct' => false],
                            ['choice_text' => '5x-1', 'is_correct' => false],
                            ['choice_text' => '6x+3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=3(2x+1)-2=6x+3-2=6x+1.'
                    ],
                    [
                        'question' => 'Si f(x)=x+4 et g(x)=x²-1, quelle est (f∘g)(2) ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'g(2)=4-1=3, puis f(3)=7.'
                    ],
                    [
                        'question' => 'Si f(x)=√x et g(x)=x+5, quel est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '√(x+5)', 'is_correct' => true],
                            ['choice_text' => '√x+5', 'is_correct' => false],
                            ['choice_text' => 'x+√5', 'is_correct' => false],
                            ['choice_text' => '√(x)+√5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=√(x+5).'
                    ],
                    [
                        'question' => 'Quel est le domaine de (f∘g)(x)=√(x-2) ?',
                        'choices' => [
                            ['choice_text' => '[2,+∞[', 'is_correct' => true],
                            ['choice_text' => ']2,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,2]', 'is_correct' => false],
                        ],
                        'explanation' => 'Le radicand doit être positif ou nul : x-2≥0.'
                    ],
                    [
                        'question' => 'Si f(x)=1/x et g(x)=x-3, quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '1/(x-3)', 'is_correct' => true],
                            ['choice_text' => '1/x-3', 'is_correct' => false],
                            ['choice_text' => 'x/(x-3)', 'is_correct' => false],
                            ['choice_text' => 'x-1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=1/(x-3).'
                    ],
                    [
                        'question' => 'Quel est le domaine de (f∘g)(x)=1/(x-3) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{3}', 'is_correct' => true],
                            ['choice_text' => 'R\\{-3}', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => '[3,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur x-3 ne doit pas être nul.'
                    ],
                    [
                        'question' => 'Si f(x)=2x et g(x)=x+1, quelle est (f∘g)(3) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'g(3)=4 puis f(4)=8.'
                    ],
                    [
                        'question' => 'Si f(x)=x-1 et g(x)=3x, quelle est (g∘f)(5) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'f(5)=4 puis g(4)=12.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions inverses',
                'description' => 'Déterminez des fonctions réciproques simples et vérifiez les conditions d’inversibilité.',
                'questions' => [
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=x+5 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=x-5', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=x+5', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=5x', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=1/(x+5)', 'is_correct' => false],
                        ],
                        'explanation' => 'y=x+5 donne x=y-5, donc f⁻¹(x)=x-5.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=3x-6 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x+6)/3', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=3x+6', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x/3-6', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=3/(x-6)', 'is_correct' => false],
                        ],
                        'explanation' => 'y=3x-6 donne 3x=y+6, donc x=(y+6)/3.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=2x+4 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x-4)/2', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=2x-4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x/2+4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=4-2x', 'is_correct' => false],
                        ],
                        'explanation' => 'y=2x+4 donne x=(y-4)/2.'
                    ],
                    [
                        'question' => 'La fonction f(x)=x² possède-t-elle une fonction réciproque sur R ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui, sans restriction', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x<0', 'is_correct' => false],
                        ],
                        'explanation' => 'x² n’est pas injective sur R car f(2)=f(-2).'
                    ],
                    [
                        'question' => 'Sur quel domaine peut-on rendre f(x)=x² inversible avec la réciproque √x ?',
                        'choices' => [
                            ['choice_text' => '[0,+∞[', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,0]', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[ uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur [0,+∞[, x² est strictement croissante et sa réciproque est √x.'
                    ],
                    [
                        'question' => 'Sur ]-∞,0], quelle est la fonction réciproque de f(x)=x² ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=-√x', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=√x', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x²', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=1/√x', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur les réels négatifs, l’antécédent de x² est -√x.'
                    ],
                    [
                        'question' => 'Si f(x)=4x-1, quelle est f⁻¹(7) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '7/4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'f⁻¹(x)=(x+1)/4. Donc f⁻¹(7)=8/4=2.'
                    ],
                    [
                        'question' => 'Quelle relation vérifie une fonction et sa réciproque lorsqu’elles sont définies ?',
                        'choices' => [
                            ['choice_text' => 'f(f⁻¹(x))=x', 'is_correct' => true],
                            ['choice_text' => 'f(f⁻¹(x))=0', 'is_correct' => false],
                            ['choice_text' => 'f(f⁻¹(x))=1', 'is_correct' => false],
                            ['choice_text' => 'f(f⁻¹(x))=f(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction et sa réciproque s’annulent mutuellement par composition sur leurs domaines appropriés.'
                    ],
                    [
                        'question' => 'La fonction affine f(x)=ax+b est inversible sur R lorsque :',
                        'choices' => [
                            ['choice_text' => 'a≠0', 'is_correct' => true],
                            ['choice_text' => 'a=0', 'is_correct' => false],
                            ['choice_text' => 'b=0 uniquement', 'is_correct' => false],
                            ['choice_text' => 'b≠0 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine est injective sur R exactement lorsque son coefficient directeur est non nul.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=(x-2)/5 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=5x+2', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=5x-2', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x+2)/5', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x-2)/5', 'is_correct' => false],
                        ],
                        'explanation' => 'y=(x-2)/5 donne 5y=x-2, donc x=5y+2.'
                    ],
                ],
            ],

            [
                'title' => 'Variations et extrema',
                'description' => 'Étudiez les variations et les extrema de fonctions polynomiales et autres fonctions élémentaires.',
                'questions' => [
                    [
                        'question' => Sur quel intervalle f(x)=2x+3 est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Sur R', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']-∞,0]', 'is_correct' => false],
                            ['choice_text' => 'Seulement sur [1,3]', 'is_correct' => false],
                        ],
                        'explanation' => 'Son coefficient directeur est positif, donc elle est croissante sur tout R.'
                    ],
                    [
                        'question' => Sur quel intervalle f(x)=-3x+4 est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Sur R', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[ uniquement', 'is_correct' => false],
                            ['choice_text' => ']-∞,0] uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sur aucun intervalle', 'is_correct' => false],
                        ],
                        'explanation' => 'Son coefficient directeur est négatif, donc elle est décroissante sur R.'
                    ],
                    [
                        'question' => Quel est le minimum de f(x)=x²+4x+7 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x+2)²+3. Le minimum est donc 3.'
                    ],
                    [
                        'question' => À quelle valeur de x le minimum de x²+4x+7 est-il atteint ?',
                        'choices' => [
                            ['choice_text' => 'x=-2', 'is_correct' => true],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'x=-4', 'is_correct' => false],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la forme (x+2)²+3, le sommet est atteint pour x=-2.'
                    ],
                    [
                        'question' => Quel est le maximum de f(x)=-x²+6x-5 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-(x-3)²+4. Le maximum vaut 4.'
                    ],
                    [
                        'question' => Sur quel intervalle f(x)=x² est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => ']-∞,0]', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']1,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'x² décroît lorsque x augmente de -∞ à 0, puis croît à partir de 0.'
                    ],
                    [
                        'question' => Sur quel intervalle f(x)=x² est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => '[0,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,0]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,-1]', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction carré est croissante sur [0,+∞[.'
                    ],
                    [
                        'question' => Quel est le minimum de f(x)=|x-3|+2 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '|x-3|≥0, donc le minimum est 2, atteint pour x=3.'
                    ],
                    [
                        'question' => Sur quel intervalle f(x)=1/x est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => ]-∞,0[ et ]0,+∞[', 'is_correct' => true],
                            ['choice_text' => 'Sur R', 'is_correct' => false],
                            ['choice_text' => '[0,+∞[ uniquement', 'is_correct' => false],
                            ['choice_text' => ']-∞,0] uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction 1/x est décroissante séparément sur chacun des intervalles de son domaine.'
                    ],
                    [
                        'question' => Quelle est la valeur maximale de f(x)=5-2(x-1)² ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'La parabole est ouverte vers le bas et son sommet est (1,5).'
                    ],
                ],
            ],

            [
                'title' => 'Symétrie et parité des fonctions',
                'description' => 'Identifiez les fonctions paires et impaires et exploitez leurs symétries.',
                'questions' => [
                    [
                        'question' => 'Quelle condition définit une fonction paire ?',
                        'choices' => [
                            ['choice_text' => 'f(-x)=f(x)', 'is_correct' => true],
                            ['choice_text' => 'f(-x)=-f(x)', 'is_correct' => false],
                            ['choice_text' => 'f(x)=0', 'is_correct' => false],
                            ['choice_text' => 'f(-x)=1/f(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction paire est symétrique par rapport à l’axe des ordonnées et vérifie f(-x)=f(x).'
                    ],
                    [
                        'question' => 'Quelle condition définit une fonction impaire ?',
                        'choices' => [
                            ['choice_text' => 'f(-x)=-f(x)', 'is_correct' => true],
                            ['choice_text' => 'f(-x)=f(x)', 'is_correct' => false],
                            ['choice_text' => 'f(x)=x', 'is_correct' => false],
                            ['choice_text' => 'f(-x)=1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction impaire est symétrique par rapport à l’origine.'
                    ],
                    [
                        'question' => La fonction f(x)=x² est-elle paire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est impaire', 'is_correct' => false],
                            ['choice_text' => 'Ni paire ni impaire', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=(-x)²=x²=f(x).'
                    ],
                    [
                        'question' => La fonction f(x)=x³ est-elle impaire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est paire', 'is_correct' => false],
                            ['choice_text' => 'Ni paire ni impaire', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=(-x)³=-x³=-f(x).'
                    ],
                    [
                        'question' => La fonction f(x)=x²+4 est-elle paire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est impaire', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=(-x)²+4=x²+4=f(x).'
                    ],
                    [
                        'question' => La fonction f(x)=x³+2x est-elle impaire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est paire', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=-x³-2x=-(x³+2x)=-f(x).'
                    ],
                    [
                        'question' => La fonction f(x)=x³+x² est-elle paire ou impaire ?',
                        'choices' => [
                            ['choice_text' => 'Ni paire ni impaire', 'is_correct' => true],
                            ['choice_text' => 'Paire', 'is_correct' => false],
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-x)=-x³+x² n’est ni égal à f(x) ni à -f(x).'
                    ],
                    [
                        'question' => La fonction f(x)=|x| est-elle paire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est impaire', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => '|-x|=|x|, donc la fonction valeur absolue est paire.'
                    ],
                    [
                        'question' => Quelle symétrie caractérise une fonction impaire ?',
                        'choices' => [
                            ['choice_text' => Une symétrie centrale par rapport à l’origine', 'is_correct' => true],
                            ['choice_text' => Une symétrie par rapport à l’axe des ordonnées', 'is_correct' => false],
                            ['choice_text' => Une symétrie par rapport à l’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => Aucune symétrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le graphe d’une fonction impaire est invariant par une rotation de 180° autour de l’origine.'
                    ],
                    [
                        'question' => Quelle symétrie caractérise une fonction paire ?',
                        'choices' => [
                            ['choice_text' => Une symétrie par rapport à l’axe des ordonnées', 'is_correct' => true],
                            ['choice_text' => Une symétrie centrale par rapport à l’origine', 'is_correct' => false],
                            ['choice_text' => Une symétrie par rapport à l’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => Aucune symétrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le graphe d’une fonction paire est symétrique par rapport à l’axe des ordonnées.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale des fonctions intermédiaires',
                'description' => 'Révisez les domaines, transformations, compositions, variations et propriétés des fonctions.',
                'questions' => [
                    [
                        'question' => 'Quel est le domaine de f(x)=1/(x-4) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{4}', 'is_correct' => true],
                            ['choice_text' => 'R\\{-4}', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur x-4 ne doit pas être nul.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=(x-2)²-6 ?',
                        'choices' => [
                            ['choice_text' => '(2,-6)', 'is_correct' => true],
                            ['choice_text' => '(-2,-6)', 'is_correct' => false],
                            ['choice_text' => '(2,6)', 'is_correct' => false],
                            ['choice_text' => '(-2,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique donne directement le sommet (2,-6).'
                    ],
                    [
                        'question' => 'Quelle est la pente de y=-4x+9 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '-9', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=mx+b, m=-4.'
                    ],
                    [
                        'question' => 'Quelle est l’image de 3 par f(x)=x²-2 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(3)=9-2=7.'
                    ],
                    [
                        'question' => 'Si f(x)=2x+3, quelle est f⁻¹(7) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '2x+3=7 donne x=2.'
                    ],
                    [
                        'question' => 'Si f(x)=x² sur [0,+∞[, quelle est f⁻¹(25) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur [0,+∞[, la réciproque de x² est √x, donc √25=5.'
                    ],
                    [
                        'question' => 'Quelle est la période de la fonction f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => '2π', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période fondamentale du sinus est 2π.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(x+4) ?',
                        'choices' => [
                            ['choice_text' => '[-4,+∞[', 'is_correct' => true],
                            ['choice_text' => ']−4,+∞[', 'is_correct' => false],
                            ['choice_text' => '[4,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x+4≥0, donc x≥-4.'
                    ],
                    [
                        'question' => 'Quelle transformation permet de passer de f(x) à f(-x) ?',
                        'choices' => [
                            ['choice_text' => Une symétrie par rapport à l’axe des ordonnées', 'is_correct' => true],
                            ['choice_text' => Une symétrie par rapport à l’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => Une translation verticale', 'is_correct' => false],
                            ['choice_text' => Une translation horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le changement x→-x réfléchit le graphe par rapport à l’axe des ordonnées.'
                    ],
                    [
                        'question' => 'Si f(x)=2x et g(x)=x+4, quelle est (f∘g)(3) ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'g(3)=7 puis f(7)=14.'
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