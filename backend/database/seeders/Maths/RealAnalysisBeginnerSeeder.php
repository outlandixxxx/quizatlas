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

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
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
                'title' => 'Bornes, maximum, minimum, supremum et infimum',
                'description' => 'Distinguer les notions de borne et d\'extrémum.',
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
                'title' => 'Suites réelles',
                'description' => 'Définition, monotonie et calculs simples.',
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
                'title' => 'Limites de suites',
                'description' => 'Convergence et limites élémentaires.',
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
                'title' => 'Suites monotones et bornées',
                'description' => 'Lien entre monotonie, bornes et convergence.',
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
                'title' => 'Continuité des fonctions',
                'description' => 'Continuité en un point et exemples usuels.',
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
                'title' => 'Théorème des valeurs intermédiaires',
                'description' => 'Existence de solutions pour les fonctions continues.',
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
                'title' => 'Limites de fonctions',
                'description' => 'Calcul et interprétation de limites simples.',
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
