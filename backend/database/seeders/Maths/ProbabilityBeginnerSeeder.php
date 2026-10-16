<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProbabilityBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'probability')->firstOrFail();

        $choicePositions = [4,3,2,3,1,4,1,2,2,3,4,3,1,2,2,3,3,2,2,4,3,2,1,4,3,3,4,1,4,1,2,4,4,3,1,4,3,3,4,3,3,4,3,2,1,1,2,4,3,3,2,3,1,2,2,4,2,2,1,4,4,1,1,4,2,4,2,4,1,3,1,2,1,1,4,1,3,2,1,1];
        $choicePositionIndex = 0;

        $makeQuestion = function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ) use (&$choicePositions, &$choicePositionIndex): array {
            $wrongs = [$wrong1, $wrong2, $wrong3];
            $position = $choicePositions[$choicePositionIndex++];
            $choices = [];
            $wrongIndex = 0;
            for ($slot = 1; $slot <= 4; $slot++) {
                if ($slot === $position) {
                    $choices[] = ['choice_text' => $correct, 'is_correct' => true];
                } else {
                    $choices[] = ['choice_text' => $wrongs[$wrongIndex], 'is_correct' => false];
                    $wrongIndex++;
                }
            }
            return [
                'question' => $question,
                'choices' => $choices,
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Fondamentaux des probabilités',
                'description' => 'Événements, univers et règles élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède exactement deux issues : succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Dénombrement et espaces échantillonnaux',
                'description' => 'Compter des issues et construire des univers simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le nombre de résultats possibles en lançant deux pièces est :',
                        '4',
                        '2',
                        '8',
                        '6',
                        'Chaque pièce a 2 résultats, donc 2×2=4 combinaisons (FF, FP, PF, PP).'
                    ),
                    $makeQuestion(
                        'Le nombre de façons d\'arranger 3 objets distincts (permutations) est :',
                        '6',
                        '3',
                        '9',
                        '27',
                        '3!=3×2×1=6.'
                    ),
                    $makeQuestion(
                        'Le nombre de façons de choisir 2 éléments parmi 5, sans tenir compte de l\'ordre, est :',
                        '10',
                        '20',
                        '5',
                        '25',
                        'C(5,2)=5!/(2!×3!)=10.'
                    ),
                    $makeQuestion(
                        'L\'univers (espace échantillonnal) d\'un lancer de dé à 6 faces contient :',
                        '6 issues possibles',
                        '1 issue possible',
                        '12 issues possibles',
                        '36 issues possibles',
                        'Chaque face du dé constitue une issue distincte de l\'univers.'
                    ),
                    $makeQuestion(
                        'Le nombre de résultats possibles en lançant un dé puis une pièce est :',
                        '12',
                        '8',
                        '6',
                        '36',
                        'Par le principe multiplicatif : 6×2=12.'
                    ),
                    $makeQuestion(
                        'Le principe multiplicatif énonce que si une action a m façons de se réaliser et une seconde, indépendante, en a n, alors les deux ensemble ont :',
                        'm×n façons',
                        'm+n façons',
                        'm-n façons',
                        'max(m,n) façons',
                        'Le nombre total de combinaisons est le produit des nombres de possibilités.'
                    ),
                    $makeQuestion(
                        'Le nombre d\'anagrammes du mot « AB » (deux lettres distinctes) est :',
                        '2',
                        '1',
                        '4',
                        '0',
                        'Les deux arrangements possibles sont AB et BA.'
                    ),
                    $makeQuestion(
                        'Le nombre de mains de 2 cartes différentes parmi 4 cartes numérotées est :',
                        '6',
                        '4',
                        '12',
                        '8',
                        'C(4,2)=4!/(2!×2!)=6.'
                    ),
                    $makeQuestion(
                        'Un événement est, par définition, un sous-ensemble de :',
                        'L\'univers (espace échantillonnal)',
                        'L\'ensemble des nombres réels',
                        'Un seul résultat possible',
                        'La probabilité totale',
                        'Un événement regroupe un ou plusieurs résultats possibles de l\'univers.'
                    ),
                    $makeQuestion(
                        'Le nombre de résultats possibles en lançant 3 pièces est :',
                        '8',
                        '6',
                        '3',
                        '12',
                        '2³=8, car chaque pièce a 2 résultats indépendants.'
                    ),
                ],
            ],
            [
                'title' => 'Probabilité conditionnelle',
                'description' => 'Étudier les probabilités avec une information supplémentaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La formule P(A|B)=P(A∩B)/P(B) est valable à condition que :',
                        'P(B)>0',
                        'P(A)=0',
                        'A et B soient incompatibles',
                        'P(B)=1',
                        'La division par P(B) n\'a de sens que si cette probabilité est strictement positive.'
                    ),
                    $makeQuestion(
                        'Si P(A)=0,5, P(B)=0,4 et P(A∩B)=0,2, alors P(A|B) vaut :',
                        '0,5',
                        '0,2',
                        '0,8',
                        '0,4',
                        'P(A|B)=P(A∩B)/P(B)=0,2/0,4=0,5.'
                    ),
                    $makeQuestion(
                        'La formule de Bayes relie P(A|B) à :',
                        'P(B|A), P(A) et P(B)',
                        'P(A) uniquement',
                        'La variance de A',
                        'Le cardinal de l\'univers',
                        'Le théorème de Bayes exprime P(A|B) en fonction de P(B|A), P(A) et P(B).'
                    ),
                    $makeQuestion(
                        'Si A et B sont indépendants, alors P(A|B) vaut :',
                        'P(A)',
                        'P(B)',
                        '0',
                        '1',
                        'L\'indépendance signifie que connaître B ne modifie pas la probabilité de A.'
                    ),
                    $makeQuestion(
                        'Le produit P(A|B)×P(B) vaut :',
                        'P(A∩B)',
                        'P(A∪B)',
                        'P(A)',
                        '1',
                        'C\'est la réécriture directe de la définition de la probabilité conditionnelle.'
                    ),
                    $makeQuestion(
                        'Si P(A∩B)=0 et P(B)>0, alors P(A|B) vaut :',
                        '0',
                        '1',
                        'P(A)',
                        'P(B)',
                        'Aucune intersection entre A et B signifie qu\'il est impossible d\'avoir A sachant B.'
                    ),
                    $makeQuestion(
                        'La formule des probabilités totales permet de calculer P(A) à partir d\'une partition B1, B2,... par :',
                        'P(A)=ΣP(A|Bi)P(Bi)',
                        'P(A)=ΣP(Bi)',
                        'P(A)=P(A|B1) uniquement',
                        'P(A)=1-ΣP(Bi)',
                        'On décompose A selon chaque bloc de la partition de l\'univers.'
                    ),
                    $makeQuestion(
                        'Si P(A|B)=P(A), alors A et B sont :',
                        'Indépendants',
                        'Incompatibles',
                        'Complémentaires',
                        'Égaux',
                        'C\'est la caractérisation même de l\'indépendance en probabilité.'
                    ),
                    $makeQuestion(
                        'Dans un jeu de 52 cartes, sachant qu\'on a tiré un roi, la probabilité que ce roi soit rouge vaut :',
                        '1/2',
                        '1/4',
                        '1/13',
                        '2/13',
                        'Sur les 4 rois, 2 sont rouges (cœur et carreau), donc 2/4=1/2.'
                    ),
                    $makeQuestion(
                        'P(A|B) peut-elle être différente de P(B|A) ?',
                        'Oui, en général',
                        'Non, jamais',
                        'Seulement si A=B',
                        'Seulement si P(A)=0',
                        'Les deux probabilités conditionnelles dépendent de dénominateurs différents (P(B) et P(A)).'
                    ),
                ],
            ],
            [
                'title' => 'Indépendance',
                'description' => 'Reconnaître et utiliser l\'indépendance entre événements.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'A et B sont indépendants si et seulement si :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=P(A)+P(B)',
                        'P(A|B)=0',
                        'A∩B=∅',
                        'C\'est la définition formelle de l\'indépendance de deux événements.'
                    ),
                    $makeQuestion(
                        'Si P(A)=0,5, P(B)=0,6 et A, B sont indépendants, P(A∩B) vaut :',
                        '0,3',
                        '1,1',
                        '0,6',
                        '0,5',
                        'P(A∩B)=P(A)×P(B)=0,5×0,6=0,3.'
                    ),
                    $makeQuestion(
                        'Deux événements incompatibles non triviaux (de probabilité non nulle) peuvent-ils être indépendants ?',
                        'Non, cela mènerait à une contradiction',
                        'Oui, toujours',
                        'Oui, si leurs probabilités sont égales',
                        'Oui, si l\'univers est fini',
                        'Si P(A)>0 et P(B)>0, l\'incompatibilité (A∩B=∅) donne P(A∩B)=0≠P(A)P(B)>0.'
                    ),
                    $makeQuestion(
                        'Si A et B sont indépendants, alors A et le complément de B sont :',
                        'Également indépendants',
                        'Nécessairement incompatibles',
                        'Toujours égaux',
                        'Jamais indépendants',
                        'L\'indépendance se transmet au passage au complément d\'un des deux événements.'
                    ),
                    $makeQuestion(
                        'En lançant deux dés, les résultats des deux dés sont-ils indépendants ?',
                        'Oui, en général',
                        'Non, jamais',
                        'Seulement si les dés sont identiques',
                        'Seulement si on les lance en même temps',
                        'Le résultat de chaque dé n\'affecte pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'Si P(A∩B)≠P(A)P(B), alors A et B sont :',
                        'Dépendants',
                        'Indépendants',
                        'Incompatibles',
                        'Égaux',
                        'La non-égalité avec le produit des probabilités signifie qu\'il existe une dépendance.'
                    ),
                    $makeQuestion(
                        'Pour trois événements mutuellement indépendants A, B et C, on a notamment :',
                        'P(A∩B∩C)=P(A)P(B)P(C)',
                        'P(A∩B∩C)=P(A)+P(B)+P(C)',
                        'P(A∩B∩C)=0 toujours',
                        'P(A∩B∩C)=1 toujours',
                        'L\'indépendance mutuelle de plusieurs événements multiplie leurs probabilités.'
                    ),
                    $makeQuestion(
                        'Si P(A)=0, A est-il indépendant de tout événement B ?',
                        'Oui, trivialement',
                        'Non, jamais',
                        'Seulement si P(B)=0 aussi',
                        'Seulement si B=A',
                        'P(A∩B)≤P(A)=0=P(A)×P(B), l\'égalité est donc automatiquement vérifiée.'
                    ),
                    $makeQuestion(
                        'L\'indépendance de deux événements dépend :',
                        'Des probabilités en jeu, pas d\'un lien de cause à effet',
                        'Uniquement d\'un lien causal direct entre eux',
                        'De leur ordre chronologique',
                        'De la taille de l\'univers uniquement',
                        'C\'est une propriété numérique, qui ne suppose aucune relation causale.'
                    ),
                    $makeQuestion(
                        'Si A et B sont indépendants avec P(A)=0,3 et P(B)=0,5, alors P(A∪B) vaut :',
                        '0,65',
                        '0,8',
                        '0,15',
                        '0,5',
                        'P(A∪B)=P(A)+P(B)-P(A)P(B)=0,3+0,5-0,15=0,65.'
                    ),
                ],
            ],
            [
                'title' => 'Variables aléatoires discrètes',
                'description' => 'Comprendre les valeurs et lois discrètes élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une variable aléatoire discrète prend :',
                        'Un nombre fini ou dénombrable de valeurs',
                        'Toujours une infinité continue de valeurs',
                        'Exactement une seule valeur',
                        'Uniquement des valeurs négatives',
                        'Le caractère discret s\'oppose au continu : les valeurs sont isolées et comptables.'
                    ),
                    $makeQuestion(
                        'La somme des probabilités d\'une loi discrète doit valoir :',
                        '1',
                        '0',
                        'Le nombre de valeurs possibles',
                        'Une valeur variable selon le cas',
                        'La probabilité totale de tous les résultats possibles vaut toujours 1.'
                    ),
                    $makeQuestion(
                        'Si X prend les valeurs 1, 2, 3 avec P(X=1)=0,2 et P(X=2)=0,5, alors P(X=3) vaut :',
                        '0,3',
                        '0,7',
                        '0,2',
                        '0,5',
                        'La somme des probabilités doit valoir 1 : 1-0,2-0,5=0,3.'
                    ),
                    $makeQuestion(
                        'La fonction de masse (loi) d\'une variable discrète donne :',
                        'P(X=x) pour chaque valeur x possible',
                        'La moyenne de X uniquement',
                        'La variance de X uniquement',
                        'Le cardinal de l\'univers',
                        'C\'est la fonction qui associe à chaque valeur possible sa probabilité.'
                    ),
                    $makeQuestion(
                        'Le nombre de faces obtenues en lançant un dé est une variable :',
                        'Discrète',
                        'Continue',
                        'Complexe',
                        'Indéfinie',
                        'Elle ne prend que les valeurs entières 1 à 6.'
                    ),
                    $makeQuestion(
                        'Si X est le nombre de piles obtenus en 2 lancers de pièce, les valeurs possibles de X sont :',
                        '0, 1, 2',
                        '1, 2',
                        '0, 1, 2, 3',
                        '1, 2, 3',
                        'On peut obtenir aucune, une, ou deux faces pile sur les deux lancers.'
                    ),
                    $makeQuestion(
                        'Pour X le nombre de piles en 2 lancers, P(X=1) vaut :',
                        '1/2',
                        '1/4',
                        '1/3',
                        '3/4',
                        'Deux issues sur quatre donnent exactement une pile (PF et FP) : 2/4=1/2.'
                    ),
                    $makeQuestion(
                        'Une variable aléatoire discrète peut-elle prendre une infinité dénombrable de valeurs ?',
                        'Oui, par exemple un comptage sans borne supérieure fixe',
                        'Non, elle doit toujours être finie',
                        'Non, cela la rendrait continue',
                        'Oui, mais seulement des valeurs négatives',
                        'Une variable discrète peut être dénombrablement infinie, comme le nombre d\'essais avant un premier succès.'
                    ),
                    $makeQuestion(
                        'La fonction de répartition F(x)=P(X≤x) d\'une variable aléatoire est :',
                        'Croissante',
                        'Décroissante',
                        'Toujours constante',
                        'Toujours négative',
                        'Ajouter une valeur à l\'événement « X≤x » ne peut qu\'augmenter ou maintenir la probabilité cumulée.'
                    ),
                    $makeQuestion(
                        'Si X ne peut prendre que les valeurs 0 ou 1, X suit une loi :',
                        'De Bernoulli',
                        'Binomiale avec n grand',
                        'Normale',
                        'Uniforme continue',
                        'La loi de Bernoulli est précisément celle d\'une variable à deux issues, 0 et 1.'
                    ),
                ],
            ],
            [
                'title' => 'Espérance et variance',
                'description' => 'Calculer et interpréter moyenne et dispersion théoriques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si P(X=2)=0,3 et P(X=5)=0,7, l\'espérance de X vaut :',
                        '4,1',
                        '3,5',
                        '2,5',
                        '7',
                        'E(X)=2×0,3+5×0,7=0,6+3,5=4,1.'
                    ),
                    $makeQuestion(
                        'La variance d\'une variable aléatoire X se calcule par :',
                        'E(X²)-[E(X)]²',
                        'E(X)²',
                        '[E(X)]²-E(X)',
                        'E(X)+E(X²)',
                        'C\'est la formule de König-Huygens pour la variance.'
                    ),
                    $makeQuestion(
                        'Si Var(X)=0, alors X est :',
                        'Constante (presque sûrement)',
                        'Toujours négative',
                        'Non définie',
                        'Infinie',
                        'Une variance nulle signifie qu\'il n\'y a aucune dispersion autour de la moyenne.'
                    ),
                    $makeQuestion(
                        'L\'écart-type d\'une variable aléatoire est :',
                        'La racine carrée de la variance',
                        'Le carré de la variance',
                        'L\'inverse de la variance',
                        'La moyenne des valeurs',
                        'σ=√Var(X), par définition.'
                    ),
                    $makeQuestion(
                        'Pour une constante c, l\'espérance E(c) vaut :',
                        'c',
                        '0',
                        '1',
                        'Indéfinie',
                        'L\'espérance d\'une valeur constante est cette valeur elle-même.'
                    ),
                    $makeQuestion(
                        'Pour deux variables aléatoires X et Y, E(X+Y) vaut toujours :',
                        'E(X)+E(Y)',
                        'E(X)×E(Y)',
                        'max(E(X),E(Y))',
                        'E(X)-E(Y)',
                        'L\'espérance est linéaire : elle s\'additionne quelles que soient les dépendances entre X et Y.'
                    ),
                    $makeQuestion(
                        'Pour une constante a, Var(aX) vaut :',
                        'a²Var(X)',
                        'aVar(X)',
                        'Var(X)',
                        'a+Var(X)',
                        'La variance est affectée par le carré du facteur multiplicatif.'
                    ),
                    $makeQuestion(
                        'Si X prend les valeurs 1 et -1 avec une probabilité de 0,5 chacune, E(X) vaut :',
                        '0',
                        '1',
                        '-1',
                        '0,5',
                        'E(X)=1×0,5+(-1)×0,5=0,5-0,5=0.'
                    ),
                    $makeQuestion(
                        'Pour le même X (valeurs 1 et -1, probabilité 0,5 chacune), Var(X) vaut :',
                        '1',
                        '0',
                        '2',
                        '0,5',
                        'E(X²)=1×0,5+1×0,5=1, et E(X)=0, donc Var(X)=1-0²=1.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable aléatoire peut-elle être négative ?',
                        'Oui, si les valeurs négatives sont suffisamment probables',
                        'Non, jamais',
                        'Seulement si toutes les valeurs sont négatives',
                        'Non, l\'espérance est toujours positive ou nulle',
                        'L\'espérance est une moyenne pondérée qui peut être négative selon les valeurs et leurs poids.'
                    ),
                ],
            ],
            [
                'title' => 'Loi binomiale',
                'description' => 'Introduire les répétitions indépendantes succès/échec.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La loi binomiale B(n,p) modélise :',
                        'Le nombre de succès en n épreuves indépendantes de Bernoulli',
                        'Une seule épreuve de Bernoulli',
                        'Une valeur continue quelconque',
                        'Le nombre d\'échecs uniquement',
                        'C\'est la somme de n épreuves de Bernoulli indépendantes de même paramètre p.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une loi binomiale B(n,p) vaut :',
                        'np',
                        'n+p',
                        'p/n',
                        'n²p',
                        'C\'est la formule standard de l\'espérance d\'une loi binomiale.'
                    ),
                    $makeQuestion(
                        'La variance d\'une loi binomiale B(n,p) vaut :',
                        'np(1-p)',
                        'np',
                        'n(1-p)',
                        'p(1-p)',
                        'C\'est la formule standard de la variance d\'une loi binomiale.'
                    ),
                    $makeQuestion(
                        'Pour B(4, 0,5), la probabilité d\'obtenir aucun succès, P(X=0), vaut :',
                        '1/16',
                        '1/4',
                        '1/2',
                        '1/8',
                        'P(X=0)=(0,5)⁴=1/16, car les 4 épreuves doivent toutes échouer.'
                    ),
                    $makeQuestion(
                        'Pour B(3, 0,5), le nombre de façons combinatoires d\'obtenir exactement 2 succès est :',
                        '3',
                        '6',
                        '1',
                        '9',
                        'C(3,2)=3, le coefficient binomial correspondant.'
                    ),
                    $makeQuestion(
                        'Pour qu\'une loi binomiale s\'applique, chaque épreuve doit être :',
                        'Indépendante et avoir la même probabilité de succès p',
                        'Dépendante des précédentes',
                        'De probabilité variable à chaque fois',
                        'Toujours certaine',
                        'L\'indépendance et la constance de p sont les hypothèses fondamentales du modèle binomial.'
                    ),
                    $makeQuestion(
                        'Si n=1, la loi binomiale B(1,p) coïncide avec :',
                        'La loi de Bernoulli',
                        'La loi normale',
                        'La loi uniforme',
                        'Une loi sans nom particulier',
                        'Une seule épreuve de Bernoulli est un cas particulier de la loi binomiale avec n=1.'
                    ),
                    $makeQuestion(
                        'Pour B(5, 0,2), l\'espérance vaut :',
                        '1',
                        '0,2',
                        '5',
                        '2,5',
                        'E(X)=np=5×0,2=1.'
                    ),
                    $makeQuestion(
                        'La loi binomiale est-elle adaptée pour modéliser un tirage sans remise dans une petite population ?',
                        'Non, car elle suppose l\'indépendance des épreuves',
                        'Oui, parfaitement dans tous les cas',
                        'Oui, mais seulement si p=0,5',
                        'Oui, car le tirage sans remise est toujours indépendant',
                        'Le tirage sans remise modifie les probabilités à chaque tirage, ce qui contredit l\'hypothèse d\'indépendance.'
                    ),
                    $makeQuestion(
                        'Pour B(2, 0,5) (deux lancers de pièce équilibrée), P(X=1) (exactement un succès) vaut :',
                        '0,5',
                        '0,25',
                        '1',
                        '0,75',
                        'P(X=1)=C(2,1)×0,5×0,5=2×0,25=0,5.'
                    ),
                ],
            ],
            [
                'title' => 'Révision et raisonnement probabiliste',
                'description' => 'Résoudre des situations intégrées de niveau débutant.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans un jeu de 52 cartes, la probabilité de tirer un as vaut :',
                        '1/13',
                        '1/4',
                        '1/52',
                        '4/13',
                        'Il y a 4 as sur 52 cartes, donc 4/52=1/13.'
                    ),
                    $makeQuestion(
                        'Si P(A)=0,4, alors P(A^c), le complément de A, vaut :',
                        '0,6',
                        '0,4',
                        '1,4',
                        '0',
                        'P(A^c)=1-P(A)=1-0,4=0,6.'
                    ),
                    $makeQuestion(
                        'Pour deux événements quelconques A et B, P(A∪B) vaut en général :',
                        'P(A)+P(B)-P(A∩B)',
                        'P(A)+P(B)',
                        'P(A)×P(B)',
                        'P(A)-P(B)',
                        'La formule générale retire l\'intersection comptée deux fois dans la somme simple.'
                    ),
                    $makeQuestion(
                        'Un arbre de probabilité permet de :',
                        'Visualiser et calculer les probabilités d\'événements successifs',
                        'Remplacer tout calcul de probabilité conditionnelle',
                        'Mesurer uniquement la variance',
                        'Déterminer le cardinal de l\'univers',
                        'Il structure les étapes successives d\'une expérience et leurs probabilités associées.'
                    ),
                    $makeQuestion(
                        'En lançant un dé deux fois, la probabilité d\'obtenir deux fois le 6 vaut :',
                        '1/36',
                        '1/6',
                        '1/12',
                        '2/6',
                        'Les deux lancers sont indépendants : 1/6×1/6=1/36.'
                    ),
                    $makeQuestion(
                        'La somme des probabilités de tous les résultats possibles d\'un univers vaut-elle toujours 1 ?',
                        'Oui, c\'est une propriété fondamentale',
                        'Non, cela dépend de l\'univers',
                        'Seulement si l\'univers est fini',
                        'Seulement pour les événements indépendants',
                        'C\'est l\'un des axiomes de base de la théorie des probabilités.'
                    ),
                    $makeQuestion(
                        'Dans une urne avec 3 boules rouges et 2 boules bleues, la probabilité de tirer une boule rouge vaut :',
                        '3/5',
                        '2/5',
                        '1/2',
                        '3/2',
                        'Il y a 3 boules rouges sur un total de 5 boules.'
                    ),
                    $makeQuestion(
                        'Si deux événements sont indépendants, sont-ils nécessairement incompatibles ?',
                        'Non, ce sont deux notions différentes',
                        'Oui, toujours',
                        'Oui, si leurs probabilités sont égales',
                        'Oui, si l\'un des deux est certain',
                        'L\'indépendance porte sur le produit des probabilités, l\'incompatibilité sur l\'absence d\'intersection ; les deux notions ne coïncident pas en général.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'un jeu équitable (ni gain ni perte en moyenne) vaut :',
                        '0',
                        '1',
                        'La mise engagée',
                        'Toujours positive',
                        'Un jeu équitable est défini par une espérance de gain nulle.'
                    ),
                    $makeQuestion(
                        'Pour estimer une probabilité inconnue à partir de données, on utilise généralement :',
                        'La fréquence observée sur de nombreux essais',
                        'Une valeur choisie arbitrairement',
                        'Le cardinal de l\'univers uniquement',
                        'La variance des résultats passés',
                        'La fréquence relative converge vers la probabilité théorique quand le nombre d\'essais augmente.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
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

                $question->choices()->delete();
                $choices = $questionData['choices'];

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
