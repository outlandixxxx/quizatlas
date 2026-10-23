<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;
class FrenchAlphabetPronunciationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'french-alphabet-pronunciation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Découvrir l\'alphabet français',
                'description' => 'Repérez les lettres de l’alphabet français, leur ordre et leur nom afin de mieux lire et épeler des mots simples.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle lettre vient juste après la lettre A dans l’alphabet français ?',
                        'choices' => [
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'D', 'is_correct' => false],
                            ['choice_text' => 'Z', 'is_correct' => false],
                            ['choice_text' => 'B', 'is_correct' => true],
                        ],
                        'explanation' => 'L’alphabet commence par A, B, C, D. Après A, on trouve donc B.',
                    ],
                    [
                        'question' => 'Quelle est la dernière lettre de l’alphabet français ?',
                        'choices' => [
                            ['choice_text' => 'Y', 'is_correct' => false],
                            ['choice_text' => 'X', 'is_correct' => false],
                            ['choice_text' => 'Z', 'is_correct' => true],
                            ['choice_text' => 'W', 'is_correct' => false],
                        ],
                        'explanation' => 'L’alphabet compte 26 lettres et se termine par Z.',
                    ],
                    [
                        'question' => 'Combien de lettres contient l’alphabet français ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '26', 'is_correct' => true],
                        ],
                        'explanation' => 'Le français utilise les 26 lettres de l’alphabet latin, de A à Z.',
                    ],
                    [
                        'question' => 'Quelle lettre se trouve entre M et O ?',
                        'choices' => [
                            ['choice_text' => 'N', 'is_correct' => true],
                            ['choice_text' => 'P', 'is_correct' => false],
                            ['choice_text' => 'L', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ordre, on lit M, N, O : la lettre du milieu est N.',
                    ],
                    [
                        'question' => 'Quelle lettre vient juste avant T ?',
                        'choices' => [
                            ['choice_text' => 'S', 'is_correct' => true],
                            ['choice_text' => 'U', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => 'V', 'is_correct' => false],
                        ],
                        'explanation' => 'Autour de T, l’ordre est R, S, T, U. La lettre qui précède T est S.',
                    ],
                    [
                        'question' => 'Dans le mot « maison », quelle est la première lettre ?',
                        'choices' => [
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'M', 'is_correct' => true],
                            ['choice_text' => 'N', 'is_correct' => false],
                        ],
                        'explanation' => 'On lit le mot de gauche à droite : M, A, I, S, O, N. Il commence donc par M.',
                    ],
                    [
                        'question' => 'Pour épeler le mot « vélo », quelles lettres faut-il dire ?',
                        'choices' => [
                            ['choice_text' => 'V, A, L, O', 'is_correct' => false],
                            ['choice_text' => 'V, É, L, O', 'is_correct' => true],
                            ['choice_text' => 'B, É, L, O', 'is_correct' => false],
                            ['choice_text' => 'V, É, R, O', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot s’écrit V-É-L-O. L’accent sur le É fait partie de l’orthographe et ne s’oublie pas.',
                    ],
                    [
                        'question' => 'Quel groupe contient uniquement des lettres majuscules ?',
                        'choices' => [
                            ['choice_text' => 'A, M, T, Z', 'is_correct' => true],
                            ['choice_text' => 'a, M, t, Z', 'is_correct' => false],
                            ['choice_text' => 'A, m, T, z', 'is_correct' => false],
                            ['choice_text' => 'a, m, t, z', 'is_correct' => false],
                        ],
                        'explanation' => 'A, M, T et Z sont quatre majuscules. Chacun des autres groupes contient des minuscules.',
                    ],
                    [
                        'question' => 'Une seule de ces lettres est une voyelle. Laquelle ?',
                        'choices' => [
                            ['choice_text' => 'B', 'is_correct' => false],
                            ['choice_text' => 'T', 'is_correct' => false],
                            ['choice_text' => 'M', 'is_correct' => false],
                            ['choice_text' => 'E', 'is_correct' => true],
                        ],
                        'explanation' => 'E est une voyelle, alors que B, T et M sont des consonnes.',
                    ],
                    [
                        'question' => 'Elsa classe les lettres R, C, J, F dans l’ordre alphabétique. Quel est le bon classement ?',
                        'choices' => [
                            ['choice_text' => 'F, C, R, J', 'is_correct' => false],
                            ['choice_text' => 'C, F, J, R', 'is_correct' => true],
                            ['choice_text' => 'J, C, F, R', 'is_correct' => false],
                            ['choice_text' => 'R, J, F, C', 'is_correct' => false],
                        ],
                        'explanation' => 'C vient avant F, F avant J et J avant R : le classement C, F, J, R suit l’ordre de l’alphabet.',
                    ],
                ],
            ],
            [
                'title' => 'Voyelles, consonnes et sons de base',
                'description' => 'Distinguez les voyelles et les consonnes et observez quelques correspondances simples entre lettres et sons.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Laquelle de ces lettres est une voyelle ?',
                        'choices' => [
                            ['choice_text' => 'P', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => 'O', 'is_correct' => true],
                            ['choice_text' => 'T', 'is_correct' => false],
                        ],
                        'explanation' => 'O fait partie des voyelles. P, R et T sont des consonnes.',
                    ],
                    [
                        'question' => 'Quel groupe contient seulement des voyelles ?',
                        'choices' => [
                            ['choice_text' => 'A, E, I, O', 'is_correct' => true],
                            ['choice_text' => 'B, E, I, O', 'is_correct' => false],
                            ['choice_text' => 'A, M, I, U', 'is_correct' => false],
                            ['choice_text' => 'E, R, O, U', 'is_correct' => false],
                        ],
                        'explanation' => 'A, E, I et O sont toutes des voyelles. Chacun des autres groupes contient au moins une consonne.',
                    ],
                    [
                        'question' => 'Dans le mot « papa », quelles lettres sont des consonnes ?',
                        'choices' => [
                            ['choice_text' => 'A et A', 'is_correct' => false],
                            ['choice_text' => 'P, A et P', 'is_correct' => false],
                            ['choice_text' => 'P et P', 'is_correct' => true],
                            ['choice_text' => 'A, P et A', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux P sont des consonnes, les deux A sont des voyelles.',
                    ],
                    [
                        'question' => 'Quelle lettre donne le son du début du mot « maman » ?',
                        'choices' => [
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'M', 'is_correct' => true],
                            ['choice_text' => 'N', 'is_correct' => false],
                            ['choice_text' => 'O', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot commence par la consonne M, qui fait le son « m ».',
                    ],
                    [
                        'question' => 'Dans le mot « vélo », quelle lettre est la première voyelle ?',
                        'choices' => [
                            ['choice_text' => 'V', 'is_correct' => false],
                            ['choice_text' => 'L', 'is_correct' => false],
                            ['choice_text' => 'O', 'is_correct' => false],
                            ['choice_text' => 'É', 'is_correct' => true],
                        ],
                        'explanation' => 'Après le V, on rencontre É. Cette lettre est un E avec un accent aigu.',
                    ],
                    [
                        'question' => 'Le mot « lune » commence-t-il par une voyelle ou par une consonne ?',
                        'choices' => [
                            ['choice_text' => 'Par une voyelle', 'is_correct' => false],
                            ['choice_text' => 'Par une voyelle nasale', 'is_correct' => false],
                            ['choice_text' => 'Par une consonne muette', 'is_correct' => false],
                            ['choice_text' => 'Par une consonne', 'is_correct' => true],
                        ],
                        'explanation' => 'Le mot commence par L, qui est une consonne et qui se prononce bien.',
                    ],
                    [
                        'question' => 'Quel mot commence par la même lettre que « table » ?',
                        'choices' => [
                            ['choice_text' => 'pomme', 'is_correct' => false],
                            ['choice_text' => 'tapis', 'is_correct' => true],
                            ['choice_text' => 'livre', 'is_correct' => false],
                            ['choice_text' => 'arbre', 'is_correct' => false],
                        ],
                        'explanation' => 'Table et tapis commencent tous les deux par la lettre T.',
                    ],
                    [
                        'question' => 'Quel mot commence par une voyelle ?',
                        'choices' => [
                            ['choice_text' => 'porte', 'is_correct' => false],
                            ['choice_text' => 'livre', 'is_correct' => false],
                            ['choice_text' => 'chaise', 'is_correct' => false],
                            ['choice_text' => 'école', 'is_correct' => true],
                        ],
                        'explanation' => '« École » commence par É, une voyelle. Les trois autres mots commencent par une consonne.',
                    ],
                    [
                        'question' => 'Quelle voyelle entend-on dans le mot « chat » ?',
                        'choices' => [
                            ['choice_text' => 'E', 'is_correct' => false],
                            ['choice_text' => 'O', 'is_correct' => false],
                            ['choice_text' => 'A', 'is_correct' => true],
                            ['choice_text' => 'U', 'is_correct' => false],
                        ],
                        'explanation' => 'On entend le son « a » entre le « ch » du début et le T final, qui ne se prononce pas.',
                    ],
                    [
                        'question' => 'Quel mot contient la voyelle U ?',
                        'choices' => [
                            ['choice_text' => 'lune', 'is_correct' => true],
                            ['choice_text' => 'père', 'is_correct' => false],
                            ['choice_text' => 'moto', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « lune » contient la lettre U. Père contient E et È, moto contient O, et table contient A et E.',
                    ],
                    [
                        'question' => 'Dans quel mot la lettre M apparaît-elle deux fois ?',
                        'choices' => [
                            ['choice_text' => 'melon', 'is_correct' => false],
                            ['choice_text' => 'maman', 'is_correct' => true],
                            ['choice_text' => 'mardi', 'is_correct' => false],
                            ['choice_text' => 'maison', 'is_correct' => false],
                        ],
                        'explanation' => 'Maman s’écrit M-A-M-A-N, avec deux M. Les autres mots n’en ont qu’un.',
                    ],
                ],
            ],
            [
                'title' => 'Les accents qui changent l\'écriture',
                'description' => 'Reconnaissez les accents français les plus courants et leur rôle dans l’orthographe de mots simples.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel mot est correctement écrit ?',
                        'choices' => [
                            ['choice_text' => 'ecole', 'is_correct' => false],
                            ['choice_text' => 'ècole', 'is_correct' => false],
                            ['choice_text' => 'école', 'is_correct' => true],
                            ['choice_text' => 'êcole', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit « école » avec un accent aigu sur le premier E.',
                    ],
                    [
                        'question' => 'Quel signe trouve-t-on dans le mot « forêt » ?',
                        'choices' => [
                            ['choice_text' => 'Un tréma', 'is_correct' => false],
                            ['choice_text' => 'Un accent aigu', 'is_correct' => false],
                            ['choice_text' => 'Un accent circonflexe', 'is_correct' => true],
                            ['choice_text' => 'Une cédille', 'is_correct' => false],
                        ],
                        'explanation' => '« Forêt » porte un accent circonflexe sur le E : ê.',
                    ],
                    [
                        'question' => 'Quel mot contient une cédille ?',
                        'choices' => [
                            ['choice_text' => 'père', 'is_correct' => false],
                            ['choice_text' => 'garçon', 'is_correct' => true],
                            ['choice_text' => 'école', 'is_correct' => false],
                            ['choice_text' => 'Noël', 'is_correct' => false],
                        ],
                        'explanation' => '« Garçon » contient la lettre ç, un C avec une cédille.',
                    ],
                    [
                        'question' => 'Dans le mot « Noël », quel signe apparaît sur le E ?',
                        'choices' => [
                            ['choice_text' => 'Un tréma', 'is_correct' => true],
                            ['choice_text' => 'Un accent aigu', 'is_correct' => false],
                            ['choice_text' => 'Un accent grave', 'is_correct' => false],
                            ['choice_text' => 'Une cédille', 'is_correct' => false],
                        ],
                        'explanation' => 'Le E de « Noël » porte un tréma : ë. Il indique qu’on prononce le E à part, après le O.',
                    ],
                    [
                        'question' => 'Quel mot contient un accent grave ?',
                        'choices' => [
                            ['choice_text' => 'été', 'is_correct' => false],
                            ['choice_text' => 'père', 'is_correct' => true],
                            ['choice_text' => 'forêt', 'is_correct' => false],
                            ['choice_text' => 'garçon', 'is_correct' => false],
                        ],
                        'explanation' => '« Père » s’écrit avec è, un accent grave. « Été » a deux accents aigus, « forêt » un circonflexe et « garçon » une cédille.',
                    ],
                    [
                        'question' => 'Quel mot contient un accent aigu ?',
                        'choices' => [
                            ['choice_text' => 'père', 'is_correct' => false],
                            ['choice_text' => 'forêt', 'is_correct' => false],
                            ['choice_text' => 'Noël', 'is_correct' => false],
                            ['choice_text' => 'été', 'is_correct' => true],
                        ],
                        'explanation' => '« Été » s’écrit é-t-é, avec deux accents aigus.',
                    ],
                    [
                        'question' => 'Sur le menu d’un hôtel, comment s’écrit le mot qui désigne le repas du matin ?',
                        'choices' => [
                            ['choice_text' => 'petit dejeuner', 'is_correct' => false],
                            ['choice_text' => 'petit-déjeuner', 'is_correct' => true],
                            ['choice_text' => 'petit-déjeûner', 'is_correct' => false],
                            ['choice_text' => 'petit-dejuner', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit « petit-déjeuner » avec un trait d’union et un accent aigu sur le premier E de « déjeuner ».',
                    ],
                    [
                        'question' => 'À quoi sert la cédille dans « garçon » ?',
                        'choices' => [
                            ['choice_text' => 'À donner le son « s » au c devant la lettre o', 'is_correct' => true],
                            ['choice_text' => 'À transformer le c en un son « k »', 'is_correct' => false],
                            ['choice_text' => 'À allonger la voyelle qui suit', 'is_correct' => false],
                            ['choice_text' => 'À rendre le c muet dans le mot', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant a, o et u, la lettre C se prononce « k ». La cédille la fait prononcer « s ».',
                    ],
                    [
                        'question' => 'Quel mot contient un accent circonflexe sur un a ?',
                        'choices' => [
                            ['choice_text' => 'garçon', 'is_correct' => false],
                            ['choice_text' => 'café', 'is_correct' => false],
                            ['choice_text' => 'Noël', 'is_correct' => false],
                            ['choice_text' => 'gâteau', 'is_correct' => true],
                        ],
                        'explanation' => '« Gâteau » s’écrit avec â. « Garçon » a une cédille, « café » un accent aigu et « Noël » un tréma.',
                    ],
                    [
                        'question' => 'Laquelle de ces formes est correcte ?',
                        'choices' => [
                            ['choice_text' => 'français', 'is_correct' => true],
                            ['choice_text' => 'francais', 'is_correct' => false],
                            ['choice_text' => 'françait', 'is_correct' => false],
                            ['choice_text' => 'françois', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « français », la cédille sous le c garde le son « s » devant le a. Sans elle, le mot se lirait « francais » avec un « k ».',
                    ],
                ],
            ],
            [
                'title' => 'Lire les syllabes et repérer les sons',
                'description' => 'Travaillez le découpage simple des mots en syllabes et repérez les correspondances les plus fréquentes entre l’écrit et l’oral.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Combien de syllabes compte le mot « maman » ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Maman se découpe en ma-man : deux syllabes.',
                    ],
                    [
                        'question' => 'Comment peut-on découper simplement le mot « vélo » en syllabes ?',
                        'choices' => [
                            ['choice_text' => 'vél-o', 'is_correct' => false],
                            ['choice_text' => 'v-é-lo', 'is_correct' => false],
                            ['choice_text' => 'vé-lo', 'is_correct' => true],
                            ['choice_text' => 'vé-l-o', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot se prononce en deux syllabes, vé et lo, chacune avec une voyelle.',
                    ],
                    [
                        'question' => 'Quel mot contient deux syllabes ?',
                        'choices' => [
                            ['choice_text' => 'table', 'is_correct' => true],
                            ['choice_text' => 'train', 'is_correct' => false],
                            ['choice_text' => 'pain', 'is_correct' => false],
                            ['choice_text' => 'chat', 'is_correct' => false],
                        ],
                        'explanation' => 'Table se découpe en ta-ble. Train, pain et chat n’ont qu’une syllabe.',
                    ],
                    [
                        'question' => 'Quel mot ne compte qu’une seule syllabe à l’oral ?',
                        'choices' => [
                            ['choice_text' => 'maman', 'is_correct' => false],
                            ['choice_text' => 'chat', 'is_correct' => true],
                            ['choice_text' => 'vélo', 'is_correct' => false],
                            ['choice_text' => 'école', 'is_correct' => false],
                        ],
                        'explanation' => 'Chat se prononce d’un seul bloc. Maman, vélo et école en comptent plusieurs.',
                    ],
                    [
                        'question' => 'Quel mot commence par la syllabe ma- ?',
                        'choices' => [
                            ['choice_text' => 'table', 'is_correct' => false],
                            ['choice_text' => 'livre', 'is_correct' => false],
                            ['choice_text' => 'matin', 'is_correct' => true],
                            ['choice_text' => 'école', 'is_correct' => false],
                        ],
                        'explanation' => 'Matin se découpe en ma-tin. Les autres mots commencent par ta-, li- et é-.',
                    ],
                    [
                        'question' => 'Quel mot commence par la même syllabe que « bateau » ?',
                        'choices' => [
                            ['choice_text' => 'vélo', 'is_correct' => false],
                            ['choice_text' => 'moto', 'is_correct' => false],
                            ['choice_text' => 'école', 'is_correct' => false],
                            ['choice_text' => 'ballon', 'is_correct' => true],
                        ],
                        'explanation' => 'Bateau et ballon commencent tous les deux par ba-.',
                    ],
                    [
                        'question' => 'Dans quel mot entend-on clairement le son [k] au début ?',
                        'choices' => [
                            ['choice_text' => 'girafe', 'is_correct' => false],
                            ['choice_text' => 'café', 'is_correct' => true],
                            ['choice_text' => 'chat', 'is_correct' => false],
                            ['choice_text' => 'joue', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « café », le C devant A fait le son [k]. Les autres mots commencent par d’autres sons.',
                    ],
                    [
                        'question' => 'Dans quel mot la lettre C fait-elle le son [s] ?',
                        'choices' => [
                            ['choice_text' => 'café', 'is_correct' => false],
                            ['choice_text' => 'coupe', 'is_correct' => false],
                            ['choice_text' => 'cité', 'is_correct' => true],
                            ['choice_text' => 'cube', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant E et I, la lettre C fait [s], comme dans « cité ». Devant A, O et U, elle fait [k].',
                    ],
                    [
                        'question' => 'Quel mot commence par le son [ʃ], celui de « ch » ?',
                        'choices' => [
                            ['choice_text' => 'gare', 'is_correct' => false],
                            ['choice_text' => 'robe', 'is_correct' => false],
                            ['choice_text' => 'moto', 'is_correct' => false],
                            ['choice_text' => 'chat', 'is_correct' => true],
                        ],
                        'explanation' => '« Chat » commence par les lettres ch, qui donnent ce son.',
                    ],
                    [
                        'question' => 'Quel mot contient le son [f] écrit avec la lettre F ?',
                        'choices' => [
                            ['choice_text' => 'gare', 'is_correct' => false],
                            ['choice_text' => 'roue', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                            ['choice_text' => 'fête', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « fête », le F fait le son [f]. L’accent circonflexe sur le E n’y change rien.',
                    ],
                    [
                        'question' => 'Combien de syllabes compte le mot « ordinateur » ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Ordinateur se découpe en or-di-na-teur : quatre syllabes.',
                    ],
                    [
                        'question' => 'Quel mot peut être découpé simplement en trois syllabes ?',
                        'choices' => [
                            ['choice_text' => 'chocolat', 'is_correct' => true],
                            ['choice_text' => 'chat', 'is_correct' => false],
                            ['choice_text' => 'pain', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                        ],
                        'explanation' => 'Chocolat se découpe en cho-co-lat. Chat et pain n’ont qu’une syllabe, table en a deux.',
                    ],
                ],
            ],
            [
                'title' => 'Lettres muettes et finales fréquentes',
                'description' => 'Observez les lettres écrites mais souvent non prononcées dans les mots français très courants.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans le mot « chat », quelle lettre finale ne se prononce pas ?',
                        'choices' => [
                            ['choice_text' => 'T', 'is_correct' => true],
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'H', 'is_correct' => false],
                            ['choice_text' => 'A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le T final de « chat » reste muet : le mot se dit « cha ».',
                    ],
                    [
                        'question' => 'Quand le mot « petit » est dit seul, que devient la dernière lettre ?',
                        'choices' => [
                            ['choice_text' => 'Le T final se prononce [t]', 'is_correct' => false],
                            ['choice_text' => 'Le T final se prononce [s]', 'is_correct' => false],
                            ['choice_text' => 'Le T final reste muet', 'is_correct' => true],
                            ['choice_text' => 'Le I final se prononce plus fort', 'is_correct' => false],
                        ],
                        'explanation' => 'Seul, « petit » se dit « peti ». Le T ne s’entend que dans certaines liaisons, comme dans « petit enfant ».',
                    ],
                    [
                        'question' => 'Dans lequel de ces mots la dernière lettre ne se prononce pas ?',
                        'choices' => [
                            ['choice_text' => 'grand', 'is_correct' => true],
                            ['choice_text' => 'avec', 'is_correct' => false],
                            ['choice_text' => 'sac', 'is_correct' => false],
                            ['choice_text' => 'chef', 'is_correct' => false],
                        ],
                        'explanation' => 'Le D de « grand » est muet. Dans « avec » et « sac », la consonne finale s’entend, et « chef » se termine par le son [f].',
                    ],
                    [
                        'question' => 'Dans le mot « nez », quelle lettre ne s’entend pas ?',
                        'choices' => [
                            ['choice_text' => 'Le N du début', 'is_correct' => false],
                            ['choice_text' => 'Le E du milieu', 'is_correct' => false],
                            ['choice_text' => 'Les lettres E et Z', 'is_correct' => false],
                            ['choice_text' => 'Le Z final', 'is_correct' => true],
                        ],
                        'explanation' => '« Nez » se dit « né ». Le E se prononce, seul le Z reste muet.',
                    ],
                    [
                        'question' => 'Quel mot se termine par une consonne que l’on prononce ?',
                        'choices' => [
                            ['choice_text' => 'chat', 'is_correct' => false],
                            ['choice_text' => 'petit', 'is_correct' => false],
                            ['choice_text' => 'avec', 'is_correct' => true],
                            ['choice_text' => 'nez', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « avec », le C final se prononce [k]. Dans chat, petit et nez, la lettre finale reste muette.',
                    ],
                    [
                        'question' => 'Dans le mot « homme », que se passe-t-il pour la lettre H ?',
                        'choices' => [
                            ['choice_text' => 'Elle se prononce avec un souffle, comme en anglais', 'is_correct' => false],
                            ['choice_text' => 'Elle s’écrit mais ne se prononce pas', 'is_correct' => true],
                            ['choice_text' => 'Elle se prononce comme un [k]', 'is_correct' => false],
                            ['choice_text' => 'Elle se prononce comme un [r]', 'is_correct' => false],
                        ],
                        'explanation' => 'Le H est muet en français : « homme » se dit « omme ».',
                    ],
                    [
                        'question' => 'Lina lit « petit » en prononçant toutes les lettres. Que doit-elle retenir ?',
                        'choices' => [
                            ['choice_text' => 'Les voyelles se prononcent moins que les consonnes', 'is_correct' => false],
                            ['choice_text' => 'Certaines lettres écrites, surtout en fin de mot, restent muettes', 'is_correct' => true],
                            ['choice_text' => 'Les consonnes finales se prononcent plus vite', 'is_correct' => false],
                            ['choice_text' => 'Les lettres doublées se prononcent deux fois', 'is_correct' => false],
                        ],
                        'explanation' => 'L’écriture du français ne suit pas toujours la prononciation : plusieurs lettres, souvent à la fin, ne s’entendent pas.',
                    ],
                    [
                        'question' => 'Dans quel mot la lettre S finale est-elle muette ?',
                        'choices' => [
                            ['choice_text' => 'bus', 'is_correct' => false],
                            ['choice_text' => 'ours', 'is_correct' => false],
                            ['choice_text' => 'temps', 'is_correct' => true],
                            ['choice_text' => 'fils', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « temps » sans prononcer le S. Dans bus, ours et fils, le S final s’entend.',
                    ],
                    [
                        'question' => 'Dans le mot « trop », quelle lettre finale reste muette ?',
                        'choices' => [
                            ['choice_text' => 'Le T', 'is_correct' => false],
                            ['choice_text' => 'Le R', 'is_correct' => false],
                            ['choice_text' => 'Le O', 'is_correct' => false],
                            ['choice_text' => 'Le P', 'is_correct' => true],
                        ],
                        'explanation' => '« Trop » se dit « tro » : le P final ne s’entend pas.',
                    ],
                    [
                        'question' => 'Quel mot montre que la dernière lettre écrite peut ne pas s’entendre ?',
                        'choices' => [
                            ['choice_text' => 'avec', 'is_correct' => false],
                            ['choice_text' => 'chef', 'is_correct' => false],
                            ['choice_text' => 'sac', 'is_correct' => false],
                            ['choice_text' => 'vous', 'is_correct' => true],
                        ],
                        'explanation' => '« Vous » se dit « vou » : le S final reste muet. Avec, chef et sac se terminent par un son prononcé.',
                    ],
                ],
            ],
            [
                'title' => 'Liaisons et enchaînements très courants',
                'description' => 'Familiarisez-vous avec quelques liaisons fréquentes qui apparaissent dans les expressions simples et les phrases du quotidien.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « les amis », quel son relie les deux mots à l’oral ?',
                        'choices' => [
                            ['choice_text' => '[z], comme dans « zéro »', 'is_correct' => true],
                            ['choice_text' => '[s], comme dans « sac »', 'is_correct' => false],
                            ['choice_text' => '[t], comme dans « tapis »', 'is_correct' => false],
                            ['choice_text' => '[n], comme dans « nez »', 'is_correct' => false],
                        ],
                        'explanation' => 'Le S de « les » se prononce [z] devant la voyelle de « amis » : on entend « lé-zami ».',
                    ],
                    [
                        'question' => 'Quelle expression contient une liaison en [z] ?',
                        'choices' => [
                            ['choice_text' => 'des pommes', 'is_correct' => false],
                            ['choice_text' => 'des amis', 'is_correct' => true],
                            ['choice_text' => 'des livres', 'is_correct' => false],
                            ['choice_text' => 'des tables', 'is_correct' => false],
                        ],
                        'explanation' => 'Le S de « des » se lie à la voyelle de « amis ». Devant une consonne, il reste muet.',
                    ],
                    [
                        'question' => 'Laquelle de ces expressions se prononce sans liaison ?',
                        'choices' => [
                            ['choice_text' => 'les arbres', 'is_correct' => false],
                            ['choice_text' => 'les amis', 'is_correct' => false],
                            ['choice_text' => 'les écoles', 'is_correct' => false],
                            ['choice_text' => 'les tables', 'is_correct' => true],
                        ],
                        'explanation' => '« Tables » commence par une consonne : le S de « les » ne se prononce pas. Les trois autres mots commencent par une voyelle.',
                    ],
                    [
                        'question' => 'Quelle expression contient une liaison très fréquente avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'nous parlons', 'is_correct' => false],
                            ['choice_text' => 'nous avons', 'is_correct' => true],
                            ['choice_text' => 'nous marchons', 'is_correct' => false],
                            ['choice_text' => 'nous travaillons', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « nous avons », le S de « nous » se prononce [z] devant la voyelle de « avons ». Les autres verbes commencent par une consonne.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une liaison typique avec « vous » ?',
                        'choices' => [
                            ['choice_text' => 'Vous partez demain.', 'is_correct' => false],
                            ['choice_text' => 'Vous prenez le bus.', 'is_correct' => false],
                            ['choice_text' => 'Vous avez raison.', 'is_correct' => true],
                            ['choice_text' => 'Vous regardez la télé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « vous avez », le S de « vous » se prononce [z] devant la voyelle de « avez ». Les autres verbes commencent par une consonne.',
                    ],
                    [
                        'question' => 'Comment prononce-t-on « un enfant » ?',
                        'choices' => [
                            ['choice_text' => 'On entend un [n] entre « un » et « enfant »', 'is_correct' => true],
                            ['choice_text' => 'On entend un [z] entre les deux mots', 'is_correct' => false],
                            ['choice_text' => 'On entend un [t] entre les deux mots', 'is_correct' => false],
                            ['choice_text' => 'Les deux mots restent bien séparés', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant une voyelle, le N de « un » se fait entendre : on dit « un-n-enfant » avec un [n] de liaison.',
                    ],
                    [
                        'question' => 'Dans « un grand arbre », quel son peut se faire entendre entre « grand » et « arbre » ?',
                        'choices' => [
                            ['choice_text' => 'Un [d], comme dans « dame »', 'is_correct' => false],
                            ['choice_text' => 'Un [t], comme dans « tapis »', 'is_correct' => true],
                            ['choice_text' => 'Un [r], comme dans « rue »', 'is_correct' => false],
                            ['choice_text' => 'Les deux mots restent bien séparés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le D de « grand » se lie en [t] devant une voyelle : on dit « grant arbre ».',
                    ],
                    [
                        'question' => 'Quelle expression montre une liaison avec un T écrit à la fin du premier mot ?',
                        'choices' => [
                            ['choice_text' => 'petit livre', 'is_correct' => false],
                            ['choice_text' => 'petit vélo', 'is_correct' => false],
                            ['choice_text' => 'petit sac', 'is_correct' => false],
                            ['choice_text' => 'petit enfant', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « petit enfant », le T de « petit » se fait entendre devant la voyelle. Devant une consonne, il reste muet.',
                    ],
                    [
                        'question' => 'Que se passe-t-il à l’oral dans une liaison ?',
                        'choices' => [
                            ['choice_text' => 'Une voyelle finale disparaît devant une consonne', 'is_correct' => false],
                            ['choice_text' => 'Deux consonnes se prononcent en même temps', 'is_correct' => false],
                            ['choice_text' => 'Une consonne finale muette se fait entendre devant une voyelle', 'is_correct' => true],
                            ['choice_text' => 'Un mot est remplacé par un autre', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison relie deux mots : la consonne finale du premier, d’ordinaire muette, se prononce devant la voyelle du second.',
                    ],
                    [
                        'question' => 'Dans « ils ont », quel son entend-on entre les deux mots ?',
                        'choices' => [
                            ['choice_text' => '[l], comme dans « lune »', 'is_correct' => false],
                            ['choice_text' => '[t], comme dans « tapis »', 'is_correct' => false],
                            ['choice_text' => '[z], comme dans « zéro »', 'is_correct' => true],
                            ['choice_text' => '[s], comme dans « sac »', 'is_correct' => false],
                        ],
                        'explanation' => 'Le S de « ils » se prononce [z] devant la voyelle de « ont ».',
                    ],
                    [
                        'question' => 'Dans « trois enfants », quel son relie les deux mots ?',
                        'choices' => [
                            ['choice_text' => '[z], comme dans « zéro »', 'is_correct' => true],
                            ['choice_text' => '[s], comme dans « sac »', 'is_correct' => false],
                            ['choice_text' => '[t], comme dans « tapis »', 'is_correct' => false],
                            ['choice_text' => '[n], comme dans « nez »', 'is_correct' => false],
                        ],
                        'explanation' => 'Le S de « trois » se prononce [z] devant la voyelle de « enfants » : on entend « troi-zenfants ».',
                    ],
                ],
            ],
            [
                'title' => 'Associer écriture et prononciation',
                'description' => 'Renforcez vos premières habitudes de lecture en reliant des graphies simples aux sons et aux mots que vous entendez.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel mot commence par le son [b] ?',
                        'choices' => [
                            ['choice_text' => 'maman', 'is_correct' => false],
                            ['choice_text' => 'salade', 'is_correct' => false],
                            ['choice_text' => 'banane', 'is_correct' => true],
                            ['choice_text' => 'table', 'is_correct' => false],
                        ],
                        'explanation' => 'Banane commence par B, qui représente le son [b]. Les autres mots commencent par M, S et T.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son [p] ?',
                        'choices' => [
                            ['choice_text' => 'papa', 'is_correct' => true],
                            ['choice_text' => 'bébé', 'is_correct' => false],
                            ['choice_text' => 'moto', 'is_correct' => false],
                            ['choice_text' => 'zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Papa commence par P, qui donne le son [p]. Bébé commence par [b], moto par [m] et zéro par [z].',
                    ],
                    [
                        'question' => 'Dans quel mot la lettre J fait-elle le son [ʒ] du début ?',
                        'choices' => [
                            ['choice_text' => 'café', 'is_correct' => false],
                            ['choice_text' => 'photo', 'is_correct' => false],
                            ['choice_text' => 'journal', 'is_correct' => true],
                            ['choice_text' => 'table', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « journal », J fait le son [ʒ], comme dans jouer, jaune ou jardin.',
                    ],
                    [
                        'question' => 'Quel mot contient la lettre G devant E avec le son [ʒ] ?',
                        'choices' => [
                            ['choice_text' => 'gare', 'is_correct' => false],
                            ['choice_text' => 'gomme', 'is_correct' => false],
                            ['choice_text' => 'goutte', 'is_correct' => false],
                            ['choice_text' => 'génial', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « génial », G devant E fait [ʒ]. Devant A, O ou U, comme dans gare ou gomme, G fait [g].',
                    ],
                    [
                        'question' => 'Quel mot illustre le son [k] écrit avec la lettre C ?',
                        'choices' => [
                            ['choice_text' => 'ciel', 'is_correct' => false],
                            ['choice_text' => 'carte', 'is_correct' => true],
                            ['choice_text' => 'cinéma', 'is_correct' => false],
                            ['choice_text' => 'cycle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « carte », C devant A fait [k]. Devant E, I ou Y, comme dans ciel, cinéma ou cycle, il fait [s].',
                    ],
                    [
                        'question' => 'Quel mot contient le son [f] écrit avec PH ?',
                        'choices' => [
                            ['choice_text' => 'photo', 'is_correct' => true],
                            ['choice_text' => 'papa', 'is_correct' => false],
                            ['choice_text' => 'gomme', 'is_correct' => false],
                            ['choice_text' => 'route', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « photo », les lettres PH font ensemble le son [f]. Cette graphie vient souvent du grec.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son [ʃ] écrit avec CH ?',
                        'choices' => [
                            ['choice_text' => 'gare', 'is_correct' => false],
                            ['choice_text' => 'zéro', 'is_correct' => false],
                            ['choice_text' => 'photo', 'is_correct' => false],
                            ['choice_text' => 'chaud', 'is_correct' => true],
                        ],
                        'explanation' => '« Chaud » commence par CH, qui fait le son [ʃ], comme dans chat ou chaise.',
                    ],
                    [
                        'question' => 'Quel mot contient le son [ʒ] sans utiliser la lettre J ?',
                        'choices' => [
                            ['choice_text' => 'café', 'is_correct' => false],
                            ['choice_text' => 'girafe', 'is_correct' => true],
                            ['choice_text' => 'papa', 'is_correct' => false],
                            ['choice_text' => 'route', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « girafe », G devant I fait [ʒ]. Le français écrit ce son avec J ou avec G devant E ou I.',
                    ],
                    [
                        'question' => 'Quel mot se termine par le son [o] écrit avec trois lettres ?',
                        'choices' => [
                            ['choice_text' => 'lune', 'is_correct' => false],
                            ['choice_text' => 'père', 'is_correct' => false],
                            ['choice_text' => 'main', 'is_correct' => false],
                            ['choice_text' => 'beau', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « beau », les lettres EAU se lisent [o]. C’est une graphie très fréquente.',
                    ],
                    [
                        'question' => 'Dans quel mot la terminaison -er se prononce-t-elle comme dans « mangé » ?',
                        'choices' => [
                            ['choice_text' => 'parler', 'is_correct' => true],
                            ['choice_text' => 'hiver', 'is_correct' => false],
                            ['choice_text' => 'mer', 'is_correct' => false],
                            ['choice_text' => 'super', 'is_correct' => false],
                        ],
                        'explanation' => 'L’infinitif « parler » se dit « parlé ». Dans hiver, mer et super, le R final s’entend.',
                    ],
                ],
            ],
            [
                'title' => 'Premiers réflexes de prononciation',
                'description' => 'Mettez en pratique les règles de base de prononciation dans des mots et de petites phrases très courantes.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Le professeur dit à Karim : « Épelez votre prénom. » Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Écrire le prénom au tableau en majuscules', 'is_correct' => false],
                            ['choice_text' => 'Dire les lettres du prénom une par une', 'is_correct' => true],
                            ['choice_text' => 'Découper le prénom en syllabes à voix haute', 'is_correct' => false],
                            ['choice_text' => 'Répéter le prénom plusieurs fois à voix haute', 'is_correct' => false],
                        ],
                        'explanation' => 'Épeler, c’est donner les lettres d’un mot dans l’ordre. C’est utile pour les noms et les adresses.',
                    ],
                    [
                        'question' => 'Hugo écrit le mot « forêt ». Quel signe met-il sur le E ?',
                        'choices' => [
                            ['choice_text' => 'Un accent aigu', 'is_correct' => false],
                            ['choice_text' => 'Un accent circonflexe', 'is_correct' => true],
                            ['choice_text' => 'Un accent grave', 'is_correct' => false],
                            ['choice_text' => 'Un tréma', 'is_correct' => false],
                        ],
                        'explanation' => '« Forêt » s’écrit avec ê, un accent circonflexe en forme de petit toit.',
                    ],
                    [
                        'question' => 'Samir lit à voix haute. Dans quelle phrase fait-il la liaison avec « ils » ?',
                        'choices' => [
                            ['choice_text' => 'Ils partent demain.', 'is_correct' => false],
                            ['choice_text' => 'Ils chantent demain.', 'is_correct' => false],
                            ['choice_text' => 'Ils prennent le bus.', 'is_correct' => false],
                            ['choice_text' => 'Ils arrivent demain.', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « ils arrivent », le S de « ils » se prononce [z] devant la voyelle. Les autres verbes commencent par une consonne.',
                    ],
                    [
                        'question' => 'Dans quelle phrase un mot se termine-t-il par une consonne muette ?',
                        'choices' => [
                            ['choice_text' => 'Le loup dort.', 'is_correct' => true],
                            ['choice_text' => 'Le sac tombe.', 'is_correct' => false],
                            ['choice_text' => 'Le chef parle.', 'is_correct' => false],
                            ['choice_text' => 'Le bus arrive.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « loup », le P final ne s’entend pas. Dans sac, chef et bus, la dernière consonne se prononce.',
                    ],
                    [
                        'question' => 'Il fait ___ dehors, on se croirait en été. Quel mot s’écrit correctement ?',
                        'choices' => [
                            ['choice_text' => 'chaux', 'is_correct' => false],
                            ['choice_text' => 'chaud', 'is_correct' => true],
                            ['choice_text' => 'chaut', 'is_correct' => false],
                            ['choice_text' => 'chau', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit « chaud » avec CH au début et D à la fin. « Chaux » est un autre mot, qui désigne un matériau de construction.',
                    ],
                    [
                        'question' => 'Léa écrit « où » pour demander un lieu. Quel signe met-elle sur le U ?',
                        'choices' => [
                            ['choice_text' => 'Un accent aigu', 'is_correct' => false],
                            ['choice_text' => 'Un accent circonflexe', 'is_correct' => false],
                            ['choice_text' => 'Un accent grave', 'is_correct' => true],
                            ['choice_text' => 'Un tréma', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « où » s’écrit avec ù. Cet accent grave le distingue de « ou » sans accent.',
                    ],
                    [
                        'question' => 'Quel mot se prononce en deux syllabes ?',
                        'choices' => [
                            ['choice_text' => 'chat', 'is_correct' => false],
                            ['choice_text' => 'pain', 'is_correct' => false],
                            ['choice_text' => 'temps', 'is_correct' => false],
                            ['choice_text' => 'bonjour', 'is_correct' => true],
                        ],
                        'explanation' => 'Bonjour se découpe en bon-jour. Chat, pain et temps n’ont qu’une syllabe.',
                    ],
                    [
                        'question' => 'Quel mot contient le son [wa] ?',
                        'choices' => [
                            ['choice_text' => 'roue', 'is_correct' => false],
                            ['choice_text' => 'pain', 'is_correct' => false],
                            ['choice_text' => 'poire', 'is_correct' => true],
                            ['choice_text' => 'lune', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « poire », les lettres OI se lisent [wa]. « Roue » s’écrit avec OU, « pain » avec AI et « lune » avec U.',
                    ],
                    [
                        'question' => 'Quelle paire de mots commence par le même son ?',
                        'choices' => [
                            ['choice_text' => 'chat et gare', 'is_correct' => false],
                            ['choice_text' => 'zéro et maman', 'is_correct' => false],
                            ['choice_text' => 'photo et fête', 'is_correct' => true],
                            ['choice_text' => 'table et rouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Photo et fête commencent tous les deux par [f], l’un avec PH, l’autre avec F. Les autres paires commencent par des sons différents.',
                    ],
                    [
                        'question' => 'Hind lit le mot « grand » tout seul à voix haute. Que fait-elle du D final ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne le prononce pas', 'is_correct' => true],
                            ['choice_text' => 'Elle le prononce comme un [d]', 'is_correct' => false],
                            ['choice_text' => 'Elle le prononce comme un [t]', 'is_correct' => false],
                            ['choice_text' => 'Elle le prononce comme un [z]', 'is_correct' => false],
                        ],
                        'explanation' => 'Dit seul, « grand » se prononce « gran » : le D final reste muet.',
                    ],
                    [
                        'question' => 'Pour épeler le mot « chat », quelles lettres dit-on ?',
                        'choices' => [
                            ['choice_text' => 'S, H, A, T', 'is_correct' => false],
                            ['choice_text' => 'C, H, A, D', 'is_correct' => false],
                            ['choice_text' => 'K, H, A, T', 'is_correct' => false],
                            ['choice_text' => 'C, H, A, T', 'is_correct' => true],
                        ],
                        'explanation' => 'Le mot s’écrit C-H-A-T. Les lettres CH font un seul son, mais elles s’épellent séparément.',
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
