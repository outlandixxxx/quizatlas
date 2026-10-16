<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class RealAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'real-analysis')->firstOrFail();

        $choicePositions = [3,1,4,3,4,4,3,4,3,2,4,2,3,1,4,4,1,4,3,4,1,2,4,2,1,1,4,2,2,4,3,2,4,1,2,4,1,3,3,2,3,1,2,2,1,2,2,3,2,1,1,3,1,3,1,2,2,1,2,4,4,3,1,1,3,2,3,4,1,4,4,2,3,3,4,2,1,1,4,4,2,1,3,1,2,3,1,3,3,2];
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
                'title' => 'Nombres réels et intervalles',
                'description' => 'Ordre, intervalles et propriétés de base des réels.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Quel nombre est irrationnel ?',
                        '√2',
                        '1/2',
                        '3',
                        '0,75',
                        '√2 n\'est pas le quotient de deux entiers.'
                    ),
                    $makeQuestion(
                        'L\'intervalle [2;5[ correspond à :',
                        '2≤x<5',
                        '2<x<5',
                        '2≤x≤5',
                        '2<x≤5',
                        'Le crochet fermé inclut 2 et le crochet ouvert exclut 5.'
                    ),
                    $makeQuestion(
                        '|-7| vaut :',
                        '7',
                        '-7',
                        '0',
                        '14',
                        'La valeur absolue est une distance à zéro.'
                    ),
                    $makeQuestion(
                        '|x|<3 équivaut à :',
                        '-3<x<3',
                        'x>3',
                        'x<-3',
                        'x≤-3 ou x≥3',
                        'Être à distance strictement inférieure à 3 de zéro donne cet intervalle.'
                    ),
                    $makeQuestion(
                        'Le maximum de {2,4,9} est :',
                        '9',
                        '4',
                        '2',
                        '0',
                        'Le maximum est le plus grand élément de l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Le supremum de ]0,1[ est :',
                        '1',
                        '0',
                        '1/2',
                        'Il n\'existe pas',
                        '1 est la plus petite borne supérieure, même s\'il n\'appartient pas à l\'intervalle.'
                    ),
                    $makeQuestion(
                        'La suite 1/n converge vers :',
                        '0',
                        '1',
                        '∞',
                        '-1',
                        'Les termes se rapprochent de 0 quand n augmente.'
                    ),
                    $makeQuestion(
                        'Une suite convergente réelle est toujours :',
                        'Bornée',
                        'Croissante',
                        'Constante',
                        'Périodique',
                        'Toute suite convergente est bornée.'
                    ),
                    $makeQuestion(
                        'Une fonction continue en a vérifie :',
                        'lim f(x)=f(a)',
                        'f(a)=0',
                        'f\'(a)=0',
                        'lim f(x)=1',
                        'C\'est la définition de la continuité en a.'
                    ),
                    $makeQuestion(
                        'Si f est continue et change de signe sur [a,b], alors :',
                        'Il existe une racine entre a et b',
                        'Il n\'y a aucune racine',
                        'La racine est forcément unique',
                        'f est croissante',
                        'Le théorème des valeurs intermédiaires garantit l\'existence d\'un zéro.'
                    ),
                ],
            ],
            [
                'title' => 'Valeur absolue et distance',
                'description' => 'Valeur absolue et inégalités simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La distance entre 5 et 3, soit |5-3|, vaut :',
                        '2',
                        '8',
                        '-2',
                        '15',
                        '|5-3|=|2|=2.'
                    ),
                    $makeQuestion(
                        '|-9|+|-2| vaut :',
                        '11',
                        '-11',
                        '7',
                        '18',
                        '|-9|=9 et |-2|=2, donc 9+2=11.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des solutions de |x-2|<3 est :',
                        '-1<x<5',
                        '2<x<3',
                        '-5<x<1',
                        'x<-1 ou x>5',
                        'Être à distance strictement inférieure à 3 de 2 donne -1<x<5.'
                    ),
                    $makeQuestion(
                        'L\'équation |x|=4 a pour solutions :',
                        'x=4 ou x=-4',
                        'x=4 uniquement',
                        'x=-4 uniquement',
                        'Aucune solution',
                        'Deux nombres sont à distance 4 de zéro : 4 et -4.'
                    ),
                    $makeQuestion(
                        'La distance entre -3 et 5 vaut :',
                        '8',
                        '2',
                        '-8',
                        '15',
                        '|5-(-3)|=|8|=8.'
                    ),
                    $makeQuestion(
                        '|3-7| vaut :',
                        '4',
                        '-4',
                        '10',
                        '21',
                        '|3-7|=|-4|=4.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des solutions de |x+1|≤2 est :',
                        '-3≤x≤1',
                        '-2≤x≤2',
                        '1≤x≤3',
                        '-1≤x≤2',
                        '-2≤x+1≤2 équivaut à -3≤x≤1.'
                    ),
                    $makeQuestion(
                        'Pour tous réels a et b, |a×b| est égal à :',
                        '|a|×|b|',
                        '|a|+|b|',
                        'a×b toujours positif',
                        '|a|-|b|',
                        'La valeur absolue d\'un produit est le produit des valeurs absolues.'
                    ),
                    $makeQuestion(
                        'L\'inégalité triangulaire pour les valeurs absolues énonce que :',
                        '|a+b|≤|a|+|b|',
                        '|a+b|=|a|+|b| toujours',
                        '|a+b|≥|a|+|b|',
                        '|a+b|<|a|-|b|',
                        'C\'est une propriété fondamentale de la valeur absolue sur les réels.'
                    ),
                    $makeQuestion(
                        'L\'équation |x-5|=0 a pour solution :',
                        'x=5 uniquement',
                        'x=0 uniquement',
                        'x=5 ou x=-5',
                        'Aucune solution',
                        'Une valeur absolue nulle signifie que l\'expression intérieure est nulle.'
                    ),
                ],
            ],
            [
                'title' => 'Bornes, maximum, minimum, supremum et infimum',
                'description' => 'Distinguer les notions de borne et d\'extrémum.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le minimum de l\'ensemble {3,-1,7,0} est :',
                        '-1',
                        '0',
                        '3',
                        '7',
                        'Le minimum est le plus petit élément de l\'ensemble.'
                    ),
                    $makeQuestion(
                        'L\'infimum de ]0,1[ est :',
                        '0',
                        '1',
                        '1/2',
                        'Il n\'existe pas',
                        '0 est la plus grande borne inférieure, même s\'il n\'appartient pas à l\'intervalle.'
                    ),
                    $makeQuestion(
                        'Si un ensemble non vide de réels est borné supérieurement, alors par la propriété de complétude de R, il possède :',
                        'Une borne supérieure (supremum)',
                        'Toujours un maximum',
                        'Aucune borne définie',
                        'Une infinité de maximums',
                        'La complétude de R garantit l\'existence d\'un supremum pour tout ensemble non vide majoré.'
                    ),
                    $makeQuestion(
                        'Pour un ensemble fini de réels, le supremum coïncide toujours avec :',
                        'Son maximum',
                        'Son minimum',
                        'Zéro',
                        'La moyenne de ses éléments',
                        'Un ensemble fini atteint toujours sa plus grande valeur, qui est donc à la fois maximum et supremum.'
                    ),
                    $makeQuestion(
                        'L\'infimum de l\'intervalle fermé [2,10] est :',
                        '2',
                        '10',
                        '0',
                        '6',
                        'Dans un intervalle fermé, l\'infimum est atteint et vaut la borne inférieure, ici 2.'
                    ),
                    $makeQuestion(
                        'Un majorant possible de l\'ensemble {1,2,3} est :',
                        '10',
                        '0,5',
                        '2',
                        '-1',
                        'Un majorant doit être supérieur ou égal à tous les éléments ; 10 convient (ce n\'est pas forcément le plus petit).'
                    ),
                    $makeQuestion(
                        'L\'ensemble ]-∞,5[ admet-il un minorant ?',
                        'Non, il n\'est pas minoré',
                        'Oui, par exemple 0',
                        'Oui, son infimum est 5',
                        'Oui, son infimum est -5',
                        'L\'ensemble contient des valeurs arbitrairement petites, donc aucun réel ne peut le minorer.'
                    ),
                    $makeQuestion(
                        'Lorsque le supremum d\'un ensemble appartient à cet ensemble, il est aussi appelé :',
                        'Le maximum de l\'ensemble',
                        'L\'infimum de l\'ensemble',
                        'Un minorant',
                        'La médiane de l\'ensemble',
                        'Un supremum atteint par l\'ensemble en est le plus grand élément, donc le maximum.'
                    ),
                    $makeQuestion(
                        'Tout sous-ensemble non vide et majoré de R possède-t-il un supremum dans R ?',
                        'Oui, par la propriété de complétude de R',
                        'Non, jamais',
                        'Seulement si l\'ensemble est fini',
                        'Seulement si l\'ensemble est un intervalle fermé',
                        'C\'est précisément la propriété de la borne supérieure, caractéristique de R.'
                    ),
                    $makeQuestion(
                        'Le maximum de l\'intervalle ouvert ]0,1[ :',
                        'N\'existe pas',
                        'Vaut 1',
                        'Vaut 0',
                        'Vaut 1/2',
                        'Aucun élément de l\'intervalle ouvert n\'est le plus grand, car 1 n\'appartient pas à l\'intervalle.'
                    ),
                ],
            ],
            [
                'title' => 'Suites réelles',
                'description' => 'Définition, monotonie et calculs simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si u_n=2n+1, alors u_3 vaut :',
                        '7',
                        '6',
                        '8',
                        '9',
                        'u_3=2×3+1=7.'
                    ),
                    $makeQuestion(
                        'Une suite arithmétique de premier terme u_0=5 et de raison 3 a pour terme u_4 :',
                        '17',
                        '14',
                        '20',
                        '8',
                        'u_4=5+4×3=17.'
                    ),
                    $makeQuestion(
                        'Une suite géométrique de premier terme u_0=2 et de raison 3 a pour terme u_3 :',
                        '54',
                        '18',
                        '27',
                        '162',
                        'u_3=2×3³=2×27=54.'
                    ),
                    $makeQuestion(
                        'Une suite (u_n) est dite croissante si pour tout n :',
                        'u_(n+1)≥u_n',
                        'u_(n+1)≤u_n',
                        'u_(n+1)=u_n',
                        'u_n=0',
                        'C\'est la définition d\'une suite croissante.'
                    ),
                    $makeQuestion(
                        'La suite u_n=(-1)^n est-elle convergente ?',
                        'Non, elle oscille entre -1 et 1',
                        'Oui, elle converge vers 0',
                        'Oui, elle converge vers 1',
                        'Oui, elle converge vers -1',
                        'Les termes alternent sans se stabiliser, donc la suite diverge.'
                    ),
                    $makeQuestion(
                        'La suite u_n=1/n² est :',
                        'Décroissante et converge vers 0',
                        'Croissante et converge vers 1',
                        'Constante',
                        'Divergente vers +∞',
                        'Les termes diminuent et se rapprochent de 0 quand n augmente.'
                    ),
                    $makeQuestion(
                        'La suite constante u_n=3 pour tout n est-elle croissante au sens large ?',
                        'Oui, car u_(n+1)=u_n pour tout n',
                        'Non, car elle ne varie jamais',
                        'Oui, mais seulement pour n pair',
                        'Non, elle est strictement décroissante',
                        'Une suite constante vérifie u_(n+1)≥u_n (avec égalité), elle est donc croissante au sens large.'
                    ),
                    $makeQuestion(
                        'La suite u_n=n² est :',
                        'Strictement croissante et non bornée',
                        'Décroissante et bornée',
                        'Constante',
                        'Croissante et bornée',
                        'n² augmente strictement avec n et dépasse toute borne.'
                    ),
                    $makeQuestion(
                        'Pour une suite arithmétique de raison r=-2 et de premier terme u_0=10, u_5 vaut :',
                        '0',
                        '10',
                        '-10',
                        '5',
                        'u_5=10+5×(-2)=10-10=0.'
                    ),
                    $makeQuestion(
                        'Une suite (u_n) est dite bornée si :',
                        'Il existe M tel que |u_n|≤M pour tout n',
                        'Elle converge nécessairement',
                        'Elle est strictement croissante',
                        'Tous ses termes sont égaux',
                        'Être bornée signifie que les valeurs de la suite restent toutes dans un intervalle fini.'
                    ),
                ],
            ],
            [
                'title' => 'Limites de suites',
                'description' => 'Convergence et limites élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La limite de 1/n² quand n tend vers +∞ est :',
                        '0',
                        '1',
                        '+∞',
                        '-1',
                        '1/n² tend vers 0 car le dénominateur croît indéfiniment.'
                    ),
                    $makeQuestion(
                        'La limite de 3+1/n quand n tend vers +∞ est :',
                        '3',
                        '0',
                        '4',
                        '+∞',
                        '1/n tend vers 0, donc 3+1/n tend vers 3.'
                    ),
                    $makeQuestion(
                        'La limite de n quand n tend vers +∞ est :',
                        '+∞',
                        '0',
                        'Elle n\'existe pas sans être infinie',
                        '1',
                        'La suite n croît sans borne.'
                    ),
                    $makeQuestion(
                        'La limite de (2n+1)/n quand n tend vers +∞ est :',
                        '2',
                        '1',
                        '+∞',
                        '0',
                        '(2n+1)/n=2+1/n, et 1/n tend vers 0, donc la limite est 2.'
                    ),
                    $makeQuestion(
                        'La limite de (-1)^n quand n tend vers +∞ :',
                        'N\'existe pas',
                        'Vaut 1',
                        'Vaut -1',
                        'Vaut 0',
                        'La suite oscille sans jamais se stabiliser vers une seule valeur.'
                    ),
                    $makeQuestion(
                        'Si u_n→L et v_n→M, alors u_n+v_n tend vers :',
                        'L+M',
                        'L×M',
                        'L-M',
                        'Max(L,M)',
                        'La limite d\'une somme de suites convergentes est la somme des limites.'
                    ),
                    $makeQuestion(
                        'La limite de n²/(n²+1) quand n tend vers +∞ est :',
                        '1',
                        '0',
                        '+∞',
                        '1/2',
                        'n²/(n²+1)=1/(1+1/n²), et 1/n² tend vers 0, donc la limite est 1.'
                    ),
                    $makeQuestion(
                        'Une suite divergente est une suite qui :',
                        'N\'admet pas de limite finie',
                        'Tend toujours vers 0',
                        'Est toujours croissante',
                        'Est toujours bornée',
                        'La divergence signifie l\'absence de limite finie, que ce soit vers l\'infini ou par oscillation.'
                    ),
                    $makeQuestion(
                        'La limite de 5/n quand n tend vers +∞ est :',
                        '0',
                        '5',
                        '+∞',
                        '1',
                        'Le numérateur est fixe alors que le dénominateur croît indéfiniment, la limite est donc 0.'
                    ),
                    $makeQuestion(
                        'Si |r|<1, alors la limite de r^n quand n tend vers +∞ est :',
                        '0',
                        '1',
                        'r',
                        '+∞',
                        'Une puissance d\'un nombre de module strictement inférieur à 1 tend vers 0.'
                    ),
                ],
            ],
            [
                'title' => 'Suites monotones et bornées',
                'description' => 'Lien entre monotonie, bornes et convergence.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une suite croissante et majorée est :',
                        'Convergente',
                        'Divergente',
                        'Nécessairement constante',
                        'Non bornée',
                        'Le théorème de la limite monotone garantit la convergence dans ce cas.'
                    ),
                    $makeQuestion(
                        'Une suite décroissante et minorée est :',
                        'Convergente',
                        'Divergente',
                        'Toujours nulle',
                        'Non bornée',
                        'Une suite décroissante minorée converge vers son infimum.'
                    ),
                    $makeQuestion(
                        'Une suite croissante et non majorée :',
                        'Diverge vers +∞',
                        'Converge vers 0',
                        'Est bornée',
                        'Oscille sans limite',
                        'Sans majorant, une suite croissante ne peut que croître indéfiniment vers +∞.'
                    ),
                    $makeQuestion(
                        'Toute suite monotone et bornée converge-t-elle ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si elle est croissante',
                        'Seulement si elle est décroissante',
                        'C\'est le théorème de la limite monotone, valable pour les suites croissantes majorées ou décroissantes minorées.'
                    ),
                    $makeQuestion(
                        'La suite u_n=1-1/n est :',
                        'Croissante et bornée, donc convergente',
                        'Décroissante et non bornée',
                        'Constante',
                        'Divergente vers +∞',
                        'Les termes augmentent vers 1 sans jamais le dépasser.'
                    ),
                    $makeQuestion(
                        'La suite u_n=n est :',
                        'Croissante mais non bornée, donc divergente',
                        'Croissante et bornée, donc convergente',
                        'Décroissante',
                        'Constante',
                        'La suite croît indéfiniment sans aucune borne supérieure.'
                    ),
                    $makeQuestion(
                        'Si une suite est bornée, est-elle nécessairement convergente ?',
                        'Non, elle peut osciller sans converger',
                        'Oui, toujours',
                        'Oui, si elle est positive',
                        'Oui, si elle est définie par récurrence',
                        'Par exemple u_n=(-1)^n est bornée mais ne converge pas.'
                    ),
                    $makeQuestion(
                        'La suite u_n=5-1/n est majorée par :',
                        '5',
                        '4',
                        '6',
                        '0',
                        'Puisque 1/n>0 pour tout n, on a 5-1/n<5, donc 5 est un majorant.'
                    ),
                    $makeQuestion(
                        'Toute suite monotone est-elle nécessairement bornée ?',
                        'Pas nécessairement, une suite croissante peut être non bornée',
                        'Oui, toujours',
                        'Oui, seulement si elle est décroissante',
                        'Oui, seulement si elle est définie par récurrence',
                        'La monotonie ne garantit pas, à elle seule, l\'existence d\'une borne.'
                    ),
                    $makeQuestion(
                        'Le théorème de la limite monotone s\'applique à :',
                        'Une suite monotone (croissante ou décroissante)',
                        'Toute suite sans exception',
                        'Uniquement les suites constantes',
                        'Uniquement les suites géométriques',
                        'Le théorème concerne spécifiquement les suites dont le sens de variation est constant.'
                    ),
                ],
            ],
            [
                'title' => 'Continuité des fonctions',
                'description' => 'Continuité en un point et exemples usuels.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une fonction polynomiale est continue :',
                        'Sur tout R',
                        'Seulement en 0',
                        'Seulement sur les entiers',
                        'Nulle part',
                        'Les polynômes sont continus sur l\'ensemble des réels.'
                    ),
                    $makeQuestion(
                        'La fonction f(x)=1/x est continue :',
                        'Sur R privé de 0',
                        'Sur tout R',
                        'Seulement pour x négatif',
                        'Nulle part',
                        'La fonction n\'est pas définie en 0, donc la continuité ne concerne que R*.'
                    ),
                    $makeQuestion(
                        'Si f est continue en a et f(a)=3, alors la limite de f(x) quand x tend vers a est :',
                        '3',
                        '0',
                        '1',
                        'Indéterminée',
                        'La continuité signifie précisément que la limite en a égale f(a).'
                    ),
                    $makeQuestion(
                        'La fonction valeur absolue x↦|x| est :',
                        'Continue sur R',
                        'Discontinue en 0',
                        'Continue seulement pour x>0',
                        'Non définie en 0',
                        '|x| est continue partout, y compris en 0 où elle vaut 0.'
                    ),
                    $makeQuestion(
                        'Une fonction discontinue en a peut présenter notamment :',
                        'Un saut (discontinuité de première espèce)',
                        'Une continuité renforcée',
                        'Une dérivée infinie obligatoire',
                        'Une valeur toujours nulle',
                        'Un saut correspond à des limites à gauche et à droite différentes en a.'
                    ),
                    $makeQuestion(
                        'La somme de deux fonctions continues en un point est :',
                        'Continue en ce point',
                        'Toujours discontinue',
                        'Nécessairement nulle',
                        'Non définie',
                        'La continuité est préservée par addition de fonctions continues.'
                    ),
                    $makeQuestion(
                        'La fonction partie entière (floor) est-elle continue sur R ?',
                        'Non, elle a des discontinuités aux entiers',
                        'Oui, elle est continue partout',
                        'Oui, sauf en 0',
                        'Non, elle n\'est continue nulle part',
                        'La fonction fait un saut à chaque valeur entière.'
                    ),
                    $makeQuestion(
                        'Si f et g sont continues en a et g(a)≠0, alors f/g est continue :',
                        'En a',
                        'Jamais',
                        'Seulement si f(a)=0',
                        'Seulement si g est constante',
                        'Le quotient de fonctions continues est continu là où le dénominateur ne s\'annule pas.'
                    ),
                    $makeQuestion(
                        'Une fonction continue sur un intervalle fermé borné [a,b] est :',
                        'Bornée et atteint ses bornes',
                        'Toujours strictement croissante',
                        'Non bornée en général',
                        'Toujours constante',
                        'C\'est le théorème des bornes atteintes pour les fonctions continues sur un compact.'
                    ),
                    $makeQuestion(
                        'La composée de deux fonctions continues est :',
                        'Continue',
                        'Toujours discontinue',
                        'Jamais définie',
                        'Nécessairement linéaire',
                        'La composition préserve la continuité lorsque les fonctions sont bien définies.'
                    ),
                ],
            ],
            [
                'title' => 'Théorème des valeurs intermédiaires',
                'description' => 'Existence de solutions pour les fonctions continues.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le théorème des valeurs intermédiaires s\'applique à une fonction :',
                        'Continue sur un intervalle',
                        'Dérivable uniquement',
                        'Croissante uniquement',
                        'Définie seulement en deux points',
                        'La continuité sur l\'intervalle est l\'hypothèse essentielle du théorème.'
                    ),
                    $makeQuestion(
                        'Si f est continue sur [1,3] avec f(1)=-2 et f(3)=5, alors il existe c dans [1,3] tel que :',
                        'f(c)=0',
                        'f(c)=10',
                        'c=2 obligatoirement',
                        'f(c)=-5',
                        '0 est compris entre -2 et 5, donc le théorème garantit une valeur c où f s\'annule.'
                    ),
                    $makeQuestion(
                        'Le théorème des valeurs intermédiaires garantit-il l\'unicité de la solution trouvée ?',
                        'Non, seulement l\'existence',
                        'Oui, toujours',
                        'Oui, mais seulement si f est affine',
                        'Oui, mais seulement sur ]0,1[',
                        'Le théorème assure qu\'une solution existe, mais il peut y en avoir plusieurs.'
                    ),
                    $makeQuestion(
                        'Pour appliquer le théorème des valeurs intermédiaires, il faut vérifier que f est :',
                        'Continue sur l\'intervalle considéré',
                        'Dérivable sur R',
                        'Définie uniquement aux bornes',
                        'Positive sur tout l\'intervalle',
                        'La continuité sur l\'intervalle fermé est l\'hypothèse nécessaire.'
                    ),
                    $makeQuestion(
                        'Si f(a)<k<f(b) et f est continue sur [a,b], le théorème des valeurs intermédiaires garantit :',
                        'L\'existence d\'un c dans [a,b] tel que f(c)=k',
                        'Que k=f(a)',
                        'Que f est constante sur [a,b]',
                        'Qu\'il n\'existe aucune solution',
                        'Toute valeur intermédiaire entre f(a) et f(b) est atteinte par f sur l\'intervalle.'
                    ),
                    $makeQuestion(
                        'La fonction f(x)=x²-2 est continue sur [1,2] avec f(1)=-1 et f(2)=2 ; on peut en déduire que :',
                        'f possède une racine dans [1,2]',
                        'f n\'a pas de racine',
                        'f est négative sur tout l\'intervalle',
                        'f(1,5)=0 obligatoirement',
                        '-1 et 2 sont de signes opposés, donc le théorème garantit une racine entre 1 et 2 (ici √2).'
                    ),
                    $makeQuestion(
                        'Le théorème des valeurs intermédiaires repose essentiellement sur :',
                        'La continuité de la fonction sur l\'intervalle',
                        'La dérivabilité de la fonction',
                        'La périodicité de la fonction',
                        'Le signe de la dérivée seconde',
                        'C\'est la propriété de continuité qui permet de passer d\'une valeur à une autre sans saut.'
                    ),
                    $makeQuestion(
                        'Le théorème des valeurs intermédiaires permet de localiser une racine mais pas de :',
                        'La calculer exactement',
                        'Prouver son existence',
                        'Déterminer un intervalle la contenant',
                        'Vérifier la continuité de f',
                        'Le théorème est un résultat d\'existence, pas une méthode de calcul exact.'
                    ),
                    $makeQuestion(
                        'La méthode de bisection pour approcher une racine s\'appuie sur :',
                        'Le théorème des valeurs intermédiaires',
                        'Le théorème de Pythagore',
                        'La loi binomiale',
                        'La dérivée seconde uniquement',
                        'On divise l\'intervalle en deux en gardant la moitié où le signe change, garanti par le TVI.'
                    ),
                    $makeQuestion(
                        'Si f est continue sur [a,b] et f(a)×f(b)<0, alors :',
                        'f possède au moins une racine dans ]a,b[',
                        'f n\'a aucune racine',
                        'f est strictement monotone',
                        'f(a)=f(b)',
                        'Un produit négatif signifie que f change de signe, donc elle s\'annule au moins une fois entre a et b.'
                    ),
                ],
            ],
            [
                'title' => 'Limites de fonctions',
                'description' => 'Calcul et interprétation de limites simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La limite de x² quand x tend vers 0 est :',
                        '0',
                        '1',
                        '+∞',
                        '-1',
                        'x² tend vers 0 quand x se rapproche de 0.'
                    ),
                    $makeQuestion(
                        'La limite de 1/x quand x tend vers +∞ est :',
                        '0',
                        '1',
                        '+∞',
                        '-1',
                        'Plus x est grand, plus 1/x se rapproche de 0.'
                    ),
                    $makeQuestion(
                        'La limite de 3x+1 quand x tend vers 2 est :',
                        '7',
                        '6',
                        '2',
                        '1',
                        '3×2+1=7, par continuité de la fonction affine.'
                    ),
                    $makeQuestion(
                        'La limite de (x²+1)/x² quand x tend vers +∞ est :',
                        '1',
                        '0',
                        '+∞',
                        '2',
                        '(x²+1)/x²=1+1/x², et 1/x² tend vers 0, donc la limite est 1.'
                    ),
                    $makeQuestion(
                        'La limite de sin(x)/x quand x tend vers 0 est :',
                        '1',
                        '0',
                        '+∞',
                        'Elle n\'existe pas',
                        'C\'est une limite de référence classique en analyse réelle.'
                    ),
                    $makeQuestion(
                        'Si la limite à gauche et la limite à droite de f en a sont égales à une même valeur L, alors :',
                        'La limite de f en a existe et vaut L',
                        'f est forcément dérivable en a',
                        'f n\'est pas définie en a',
                        'La limite de f en a n\'existe pas',
                        'L\'égalité des limites latérales est la condition d\'existence de la limite globale en a.'
                    ),
                    $makeQuestion(
                        'La limite de (x²-1)/(x-1) quand x tend vers 1 est :',
                        '2',
                        '0',
                        '1',
                        'Elle n\'existe pas',
                        '(x²-1)/(x-1)=(x-1)(x+1)/(x-1)=x+1, qui tend vers 2.'
                    ),
                    $makeQuestion(
                        'Si la limite de f(x) quand x tend vers a n\'existe pas, cela signifie que :',
                        'Les limites à gauche et à droite diffèrent, ou f diverge',
                        'f(a) est nécessairement nul',
                        'f est continue en a',
                        'f est dérivable en a',
                        'L\'absence de limite provient souvent d\'un désaccord entre les limites latérales ou d\'une divergence.'
                    ),
                    $makeQuestion(
                        'La limite de e^x quand x tend vers -∞ est :',
                        '0',
                        '1',
                        '+∞',
                        '-1',
                        'La fonction exponentielle tend vers 0 quand x tend vers -∞.'
                    ),
                    $makeQuestion(
                        'La limite de 1/x quand x tend vers 0⁺ est :',
                        '+∞',
                        '0',
                        '-∞',
                        '1',
                        'Quand x est positif et se rapproche de 0, 1/x croît indéfiniment.'
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
