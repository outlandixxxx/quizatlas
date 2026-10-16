<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComplexAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'complex-analysis')->firstOrFail();

        $choicePositions = [2,3,4,3,1,1,4,2,3,2,4,4,1,1,4,2,3,3,1,2,4,1,3,3,1,1,4,1,1,3,3,4,2,2,1,2,4,1,4,2,3,1,2,1,2,2,4,4,3,1,3,4,3,4,2,3,1,1,2,2,3,1,4,2,4,3,2,4,3,2];
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
                'title' => 'Nombres complexes : notions de base',
                'description' => 'Forme cartésienne, parties réelle et imaginaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Addition, soustraction et multiplication',
                'description' => 'Opérations élémentaires sur les complexes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '(5+3i)-(2+i) vaut :',
                        '3+2i',
                        '7+4i',
                        '3-2i',
                        '7+2i',
                        'On soustrait séparément les parties réelle et imaginaire : (5-2)+(3-1)i=3+2i.'
                    ),
                    $makeQuestion(
                        '(2+3i)(1+2i) vaut :',
                        '-4+7i',
                        '2+6i',
                        '4+7i',
                        '-4-7i',
                        '(2+3i)(1+2i)=2+4i+3i+6i²=2+7i-6=-4+7i.'
                    ),
                    $makeQuestion(
                        '(4-i)+(-1+5i) vaut :',
                        '3+4i',
                        '5-6i',
                        '3-4i',
                        '-3+4i',
                        '(4-1)+(-1+5)i=3+4i.'
                    ),
                    $makeQuestion(
                        'Le produit de deux nombres imaginaires purs ai et bi (a,b réels) est :',
                        'Un nombre réel',
                        'Toujours un nombre imaginaire pur',
                        'Toujours nul',
                        'Toujours négatif',
                        '(ai)(bi)=abi²=-ab, qui est un nombre réel.'
                    ),
                    $makeQuestion(
                        '(3i)(2i) vaut :',
                        '-6',
                        '6',
                        '6i',
                        '-6i',
                        '(3i)(2i)=6i²=6×(-1)=-6.'
                    ),
                    $makeQuestion(
                        'L\'addition des nombres complexes est :',
                        'Commutative et associative',
                        'Seulement commutative',
                        'Seulement associative',
                        'Ni commutative ni associative',
                        'Comme pour les réels, l\'addition complexe hérite de ces deux propriétés.'
                    ),
                    $makeQuestion(
                        '(1+i)² vaut :',
                        '2i',
                        '2',
                        '1+2i',
                        '-2i',
                        '(1+i)²=1+2i+i²=1+2i-1=2i.'
                    ),
                    $makeQuestion(
                        '(2-i)² vaut :',
                        '3-4i',
                        '3+4i',
                        '4-4i',
                        '5',
                        '(2-i)²=4-4i+i²=4-4i-1=3-4i.'
                    ),
                    $makeQuestion(
                        'Pour multiplier (a+bi)(c+di), on développe :',
                        'ac+adi+bci+bdi²',
                        'ac+bd',
                        '(a+c)(b+d)i',
                        'ac-bd uniquement',
                        'On applique la distributivité comme pour un produit de deux binômes, puis on simplifie i²=-1.'
                    ),
                    $makeQuestion(
                        '(0+2i)+(0+3i) vaut :',
                        '5i',
                        '6i',
                        '5',
                        '6',
                        'On additionne les parties imaginaires : 2i+3i=5i.'
                    ),
                ],
            ],
            [
                'title' => 'Conjugué et module',
                'description' => 'Calcul du module et du conjugué.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le conjugué de -2+7i est :',
                        '-2-7i',
                        '2+7i',
                        '2-7i',
                        '-2+7i',
                        'On change le signe de la partie imaginaire : -2-7i.'
                    ),
                    $makeQuestion(
                        'z+z̄ (où z̄ est le conjugué de z) est toujours :',
                        'Un nombre réel',
                        'Un nombre imaginaire pur',
                        'Nul',
                        'Égal à z',
                        'z+z̄=2×Re(z), qui est réel.'
                    ),
                    $makeQuestion(
                        'z-z̄ (où z̄ est le conjugué de z) est toujours :',
                        'Un nombre imaginaire pur',
                        'Un nombre réel',
                        'Nul',
                        'Égal à 2z',
                        'z-z̄=2i×Im(z), qui est imaginaire pur.'
                    ),
                    $makeQuestion(
                        'Le module de -6i vaut :',
                        '6',
                        '-6',
                        '0',
                        '36',
                        '|-6i|=√(0²+6²)=6.'
                    ),
                    $makeQuestion(
                        'Le module de 0 vaut :',
                        '0',
                        '1',
                        'Indéfini',
                        '-1',
                        'La distance de 0 à l\'origine est nulle.'
                    ),
                    $makeQuestion(
                        'Pour tout z, z×z̄ vaut :',
                        '|z|²',
                        '|z|',
                        '0',
                        '2Re(z)',
                        'Le produit d\'un nombre complexe par son conjugué donne le carré de son module.'
                    ),
                    $makeQuestion(
                        'Le module de 5+12i vaut :',
                        '13',
                        '17',
                        '7',
                        '60',
                        '√(5²+12²)=√(25+144)=√169=13.'
                    ),
                    $makeQuestion(
                        'Le conjugué du conjugué de z est :',
                        'z',
                        '-z',
                        'z̄',
                        '0',
                        'Conjuguer deux fois redonne le nombre d\'origine.'
                    ),
                    $makeQuestion(
                        'Si |z|=0, alors :',
                        'z=0',
                        'z=1',
                        'z est imaginaire pur',
                        'z n\'existe pas',
                        'Seul le nombre complexe nul a un module nul.'
                    ),
                    $makeQuestion(
                        'Le module d\'un produit z1×z2 vaut :',
                        '|z1|×|z2|',
                        '|z1|+|z2|',
                        '|z1|-|z2|',
                        '|z1|/|z2|',
                        'Le module d\'un produit est le produit des modules.'
                    ),
                ],
            ],
            [
                'title' => 'Argument et forme polaire',
                'description' => 'Arguments et représentation polaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un argument de -1 (nombre réel négatif) est :',
                        'π',
                        '0',
                        'π/2',
                        '-π/2',
                        'Le point (-1,0) est sur l\'axe réel négatif, à l\'angle π.'
                    ),
                    $makeQuestion(
                        'Un argument de i est :',
                        'π/2',
                        '0',
                        'π',
                        'π/4',
                        'Le point (0,1) correspond à un angle de 90°, soit π/2.'
                    ),
                    $makeQuestion(
                        'Un argument de -i est :',
                        '-π/2 (ou 3π/2)',
                        'π/2',
                        '0',
                        'π',
                        'Le point (0,-1) correspond à un angle de -90°.'
                    ),
                    $makeQuestion(
                        'Pour multiplier deux nombres complexes sous forme polaire r1(cosθ1+isinθ1) et r2(cosθ2+isinθ2), on :',
                        'Multiplie les modules et additionne les arguments',
                        'Additionne les modules et multiplie les arguments',
                        'Multiplie les modules et les arguments',
                        'Additionne les modules et les arguments',
                        'La multiplication complexe correspond à multiplier les modules et additionner les angles.'
                    ),
                    $makeQuestion(
                        'Un argument de 1 (réel positif) est :',
                        '0',
                        'π',
                        'π/2',
                        '2π/3',
                        'Le point (1,0) se trouve sur l\'axe réel positif, à l\'angle 0.'
                    ),
                    $makeQuestion(
                        'Un nombre complexe de module 2 et d\'argument π/2 s\'écrit sous forme cartésienne :',
                        '2i',
                        '2',
                        '-2i',
                        '2+2i',
                        '2(cos(π/2)+isin(π/2))=2(0+i)=2i.'
                    ),
                    $makeQuestion(
                        'Un argument de -1-i est :',
                        '5π/4 (ou -3π/4)',
                        'π/4',
                        '3π/4',
                        'π',
                        'Le point (-1,-1) est dans le troisième quadrant, à 225° (soit 5π/4).'
                    ),
                    $makeQuestion(
                        'L\'argument d\'un nombre complexe est défini à :',
                        '2π près (modulo 2π)',
                        'π près uniquement pour les réels',
                        'π/2 près toujours',
                        'Aucune ambiguïté près',
                        'Ajouter un multiple de 2π à l\'argument redonne le même point du plan.'
                    ),
                    $makeQuestion(
                        'Pour diviser deux nombres complexes sous forme polaire, on :',
                        'Divise les modules et soustrait les arguments',
                        'Soustrait les modules et divise les arguments',
                        'Divise les modules et additionne les arguments',
                        'Additionne les modules et soustrait les arguments',
                        'La division complexe correspond à diviser les modules et soustraire les angles.'
                    ),
                    $makeQuestion(
                        'Un nombre complexe de module 1 est dit :',
                        'Unitaire (il se situe sur le cercle unité)',
                        'Imaginaire pur',
                        'Réel obligatoirement',
                        'Nul',
                        'Un module de 1 place le nombre exactement sur le cercle de rayon 1 centré à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Puissances et racines simples',
                'description' => 'Puissances de i et racines élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'i³ vaut :',
                        '-i',
                        'i',
                        '1',
                        '-1',
                        'i³=i²×i=-1×i=-i.'
                    ),
                    $makeQuestion(
                        'i⁵ vaut :',
                        'i',
                        '-i',
                        '1',
                        '-1',
                        'i⁵=i⁴×i=1×i=i, car les puissances de i se répètent avec une période de 4.'
                    ),
                    $makeQuestion(
                        'i¹⁰⁰ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        '100 est un multiple de 4, donc i¹⁰⁰=(i⁴)²⁵=1²⁵=1.'
                    ),
                    $makeQuestion(
                        'Les racines carrées de -1 dans C sont :',
                        'i et -i',
                        '1 et -1',
                        'Uniquement i',
                        'Aucune',
                        'i²=-1 et (-i)²=-1, donc les deux racines carrées de -1 sont i et -i.'
                    ),
                    $makeQuestion(
                        '(2i)² vaut :',
                        '-4',
                        '4',
                        '4i',
                        '-4i',
                        '(2i)²=4i²=4×(-1)=-4.'
                    ),
                    $makeQuestion(
                        'Les racines carrées de -4 dans C sont :',
                        '2i et -2i',
                        '2 et -2',
                        '4i et -4i',
                        'Aucune',
                        '(2i)²=-4 et (-2i)²=-4.'
                    ),
                    $makeQuestion(
                        'i⁶ vaut :',
                        '-1',
                        '1',
                        'i',
                        '-i',
                        'i⁶=i⁴×i²=1×(-1)=-1.'
                    ),
                    $makeQuestion(
                        'Tout nombre complexe non nul possède exactement :',
                        'n racines n-ièmes distinctes',
                        'Une seule racine n-ième',
                        'Aucune racine n-ième',
                        'n² racines n-ièmes',
                        'Dans C, un nombre complexe non nul admet exactement n racines n-ièmes distinctes.'
                    ),
                    $makeQuestion(
                        '(1+i)⁴ vaut :',
                        '-4',
                        '4',
                        '4i',
                        '-4i',
                        '(1+i)²=2i, donc (1+i)⁴=(2i)²=4i²=-4.'
                    ),
                    $makeQuestion(
                        'Les puissances successives de i (i¹, i², i³, i⁴,...) suivent un cycle de longueur :',
                        '4',
                        '2',
                        '3',
                        '1',
                        'Le motif i, -1, -i, 1 se répète indéfiniment toutes les quatre puissances.'
                    ),
                ],
            ],
            [
                'title' => 'Lieux géométriques dans le plan complexe',
                'description' => 'Cercles, droites et interprétation géométrique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '|z-1|=2 représente dans le plan complexe :',
                        'Un cercle de centre 1 et de rayon 2',
                        'Une droite passant par 1',
                        'Un point unique',
                        'Un cercle de centre 0 et de rayon 2',
                        '|z-a|=r décrit un cercle de centre a et de rayon r ; ici a=1.'
                    ),
                    $makeQuestion(
                        '|z|=|z-4| représente :',
                        'La médiatrice du segment entre 0 et 4',
                        'Un cercle',
                        'Un point unique',
                        'L\'axe imaginaire',
                        'L\'ensemble des points équidistants de deux points fixes est la médiatrice du segment qui les joint.'
                    ),
                    $makeQuestion(
                        'Re(z)=3 représente dans le plan complexe :',
                        'Une droite verticale passant par x=3',
                        'Une droite horizontale',
                        'Un cercle',
                        'Un point unique',
                        'Fixer la partie réelle à 3 impose une droite verticale d\'abscisse 3.'
                    ),
                    $makeQuestion(
                        'Im(z)=-2 représente :',
                        'Une droite horizontale passant par y=-2',
                        'Une droite verticale',
                        'Un cercle',
                        'Un point unique',
                        'Fixer la partie imaginaire à -2 impose une droite horizontale d\'ordonnée -2.'
                    ),
                    $makeQuestion(
                        '|z+3i|≤1 représente :',
                        'Un disque fermé de centre -3i et de rayon 1',
                        'Un cercle de centre 3i',
                        'Une droite',
                        'Un seul point',
                        'L\'inégalité ≤ sur le module désigne tous les points à distance au plus 1 du centre -3i, donc un disque fermé.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des z tels que arg(z)=π/4 représente :',
                        'Une demi-droite partant de l\'origine, d\'angle π/4',
                        'Un cercle centré à l\'origine',
                        'Une droite complète passant par l\'origine',
                        'Un point unique',
                        'Fixer l\'argument donne une direction fixe depuis l\'origine, donc une demi-droite.'
                    ),
                    $makeQuestion(
                        '|z-2|=|z+2| décrit :',
                        'L\'axe imaginaire (la droite Re(z)=0)',
                        'L\'axe réel',
                        'Un cercle de rayon 2',
                        'Un point unique',
                        'Les points équidistants de 2 et -2 forment la médiatrice du segment, qui est ici l\'axe imaginaire.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des z tels que 1<|z|<3 représente :',
                        'Une couronne entre les cercles de rayon 1 et de rayon 3',
                        'Un disque de rayon 3',
                        'Un cercle unique',
                        'Une droite',
                        'Cette double inégalité décrit tous les points situés strictement entre deux cercles concentriques.'
                    ),
                    $makeQuestion(
                        'Le point représentant 0 dans le plan complexe est :',
                        'L\'origine du repère',
                        'Un point sur l\'axe imaginaire uniquement',
                        'Un point à l\'infini',
                        'Indéfini',
                        '0+0i correspond exactement à l\'origine (0,0) du plan.'
                    ),
                    $makeQuestion(
                        '|z-i|=|z-1| décrit :',
                        'La médiatrice du segment entre i et 1',
                        'Un cercle de rayon 1',
                        'L\'axe réel',
                        'L\'axe imaginaire',
                        'Les points équidistants des affixes i et 1 forment la médiatrice de ce segment.'
                    ),
                ],
            ],
            [
                'title' => 'Formes cartésienne et polaire',
                'description' => 'Conversions entre les deux représentations.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La forme cartésienne d\'un nombre complexe s\'écrit :',
                        'a+bi, avec a et b réels',
                        'r(cosθ+isinθ) uniquement',
                        're^{iθ} uniquement',
                        'a×b',
                        'La forme cartésienne sépare la partie réelle a et la partie imaginaire b.'
                    ),
                    $makeQuestion(
                        'Pour passer de la forme cartésienne a+bi à la forme polaire, on calcule :',
                        'Le module r=√(a²+b²) et l\'argument θ=arctan(b/a) (en tenant compte du quadrant)',
                        'Seulement a+b',
                        'Seulement a-b',
                        'Le produit a×b',
                        'Le module se calcule par Pythagore, et l\'argument par la fonction arctangente ajustée au quadrant.'
                    ),
                    $makeQuestion(
                        'Pour passer de la forme polaire r(cosθ+isinθ) à la forme cartésienne, on calcule :',
                        'a=r cosθ et b=r sinθ',
                        'a=r+θ et b=r-θ',
                        'a=rθ et b=r/θ',
                        'a=θ et b=r',
                        'La projection sur les axes réel et imaginaire donne directement a et b.'
                    ),
                    $makeQuestion(
                        'Le nombre complexe 3(cos(π)+isin(π)) s\'écrit en forme cartésienne :',
                        '-3',
                        '3',
                        '3i',
                        '-3i',
                        'cos(π)=-1 et sin(π)=0, donc 3(-1+0i)=-3.'
                    ),
                    $makeQuestion(
                        'Le nombre complexe 4(cos(π/2)+isin(π/2)) s\'écrit en forme cartésienne :',
                        '4i',
                        '4',
                        '-4i',
                        '-4',
                        'cos(π/2)=0 et sin(π/2)=1, donc 4(0+i)=4i.'
                    ),
                    $makeQuestion(
                        'Le module de 2+2i vaut :',
                        '2√2',
                        '4',
                        '2',
                        '8',
                        '√(2²+2²)=√8=2√2.'
                    ),
                    $makeQuestion(
                        'L\'argument de 2+2i vaut :',
                        'π/4',
                        'π/2',
                        '0',
                        '3π/4',
                        'tan(θ)=2/2=1 avec a et b positifs, donc θ=π/4.'
                    ),
                    $makeQuestion(
                        'La forme polaire est surtout avantageuse pour :',
                        'Multiplier et diviser des nombres complexes',
                        'Additionner des nombres complexes',
                        'Soustraire des nombres complexes',
                        'Trouver uniquement la partie réelle',
                        'La multiplication et la division deviennent de simples opérations sur les modules et les arguments en forme polaire.'
                    ),
                    $makeQuestion(
                        'La forme cartésienne est surtout avantageuse pour :',
                        'Additionner et soustraire des nombres complexes',
                        'Multiplier des nombres complexes',
                        'Calculer directement l\'argument',
                        'Trouver le module sans calcul',
                        'L\'addition et la soustraction se font directement composante par composante en forme cartésienne.'
                    ),
                    $makeQuestion(
                        'Deux nombres complexes sont égaux en forme polaire si et seulement si :',
                        'Ils ont le même module et des arguments égaux modulo 2π',
                        'Ils ont seulement le même module',
                        'Ils ont seulement le même argument',
                        'Leurs parties réelles sont égales uniquement',
                        'L\'égalité de deux complexes exige à la fois l\'égalité des modules et des arguments (à un multiple de 2π près).'
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
