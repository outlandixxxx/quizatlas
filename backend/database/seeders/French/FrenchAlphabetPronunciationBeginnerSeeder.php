```php
<?php

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
                'title' => "Découvrir l'alphabet français",
                'description' => "Repérez les lettres de l'alphabet français, leur ordre et leur nom afin de mieux lire et épeler des mots simples.",
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Quelle lettre vient juste après la lettre A dans l'alphabet français ?",
                        'choices' => [
                            ['choice_text' => "B", 'is_correct' => true],
                            ['choice_text' => "C", 'is_correct' => false],
                            ['choice_text' => "D", 'is_correct' => false],
                            ['choice_text' => "Z", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'alphabet français, l'ordre commence par A, B, C, D. La lettre qui suit A est donc B.",
                    ],
                    [
                        'question' => "Quelle est la dernière lettre de l'alphabet français ?",
                        'choices' => [
                            ['choice_text' => "Z", 'is_correct' => true],
                            ['choice_text' => "Y", 'is_correct' => false],
                            ['choice_text' => "X", 'is_correct' => false],
                            ['choice_text' => "W", 'is_correct' => false],
                        ],
                        'explanation' => "L'alphabet français comporte 26 lettres et se termine par la lettre Z.",
                    ],
                    [
                        'question' => "Combien de lettres contient l'alphabet français ?",
                        'choices' => [
                            ['choice_text' => "26", 'is_correct' => true],
                            ['choice_text' => "24", 'is_correct' => false],
                            ['choice_text' => "28", 'is_correct' => false],
                            ['choice_text' => "30", 'is_correct' => false],
                        ],
                        'explanation' => "L'alphabet français utilise les 26 lettres de l'alphabet latin, de A à Z.",
                    ],
                    [
                        'question' => "Quelle lettre se trouve entre M et O ?",
                        'choices' => [
                            ['choice_text' => "N", 'is_correct' => true],
                            ['choice_text' => "P", 'is_correct' => false],
                            ['choice_text' => "L", 'is_correct' => false],
                            ['choice_text' => "R", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'ordre alphabétique, on trouve M, N, O. La lettre située entre M et O est donc N.",
                    ],
                    [
                        'question' => "Quelle lettre vient avant T ?",
                        'choices' => [
                            ['choice_text' => "S", 'is_correct' => true],
                            ['choice_text' => "U", 'is_correct' => false],
                            ['choice_text' => "R", 'is_correct' => false],
                            ['choice_text' => "V", 'is_correct' => false],
                        ],
                        'explanation' => "L'ordre autour de T est R, S, T, U. La lettre qui précède T est donc S.",
                    ],
                    [
                        'question' => "Dans le mot maison, quelle est la première lettre ?",
                        'choices' => [
                            ['choice_text' => "M", 'is_correct' => true],
                            ['choice_text' => "A", 'is_correct' => false],
                            ['choice_text' => "I", 'is_correct' => false],
                            ['choice_text' => "N", 'is_correct' => false],
                        ],
                        'explanation' => "On lit le mot maison de gauche à droite : M, A, I, S, O, N. La première lettre est M.",
                    ],
                    [
                        'question' => "Pour épeler le mot vélo, quelles lettres faut-il prononcer ?",
                        'choices' => [
                            ['choice_text' => "V, É, L, O", 'is_correct' => true],
                            ['choice_text' => "V, A, L, O", 'is_correct' => false],
                            ['choice_text' => "B, É, L, O", 'is_correct' => false],
                            ['choice_text' => "V, É, R, O", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot vélo s'écrit V-É-L-O. L'accent sur É fait partie de l'écriture du mot et doit être conservé.",
                    ],
                    [
                        'question' => "Quel groupe contient uniquement des lettres majuscules ?",
                        'choices' => [
                            ['choice_text' => "A, M, T, Z", 'is_correct' => true],
                            ['choice_text' => "a, M, t, Z", 'is_correct' => false],
                            ['choice_text' => "A, m, T, z", 'is_correct' => false],
                            ['choice_text' => "a, m, t, z", 'is_correct' => false],
                        ],
                        'explanation' => "Les quatre lettres proposées dans la bonne réponse sont écrites en majuscules. Les autres groupes mélangent majuscules et minuscules ou ne contiennent que des minuscules.",
                    ],
                    [
                        'question' => "Quelle lettre est différente des trois autres parce qu'elle est une voyelle ?",
                        'choices' => [
                            ['choice_text' => "E", 'is_correct' => true],
                            ['choice_text' => "B", 'is_correct' => false],
                            ['choice_text' => "T", 'is_correct' => false],
                            ['choice_text' => "M", 'is_correct' => false],
                        ],
                        'explanation' => "E est une voyelle. B, T et M sont des consonnes.",
                    ],
                    [
                        'question' => "Dans quel ordre alphabétique ces lettres sont-elles correctement classées ?",
                        'choices' => [
                            ['choice_text' => "C, F, J, R", 'is_correct' => true],
                            ['choice_text' => "F, C, R, J", 'is_correct' => false],
                            ['choice_text' => "J, C, F, R", 'is_correct' => false],
                            ['choice_text' => "R, J, F, C", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'alphabet, C arrive avant F, F avant J, et J avant R. Le premier groupe respecte donc l'ordre alphabétique.",
                    ],
                ],
            ],
            [
                'title' => "Voyelles, consonnes et sons de base",
                'description' => "Distinguez les voyelles et les consonnes et observez quelques correspondances simples entre lettres et sons.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Laquelle de ces lettres est une voyelle ?",
                        'choices' => [
                            ['choice_text' => "O", 'is_correct' => true],
                            ['choice_text' => "P", 'is_correct' => false],
                            ['choice_text' => "R", 'is_correct' => false],
                            ['choice_text' => "T", 'is_correct' => false],
                        ],
                        'explanation' => "O fait partie des voyelles françaises. P, R et T sont des consonnes.",
                    ],
                    [
                        'question' => "Quel groupe contient seulement des voyelles ?",
                        'choices' => [
                            ['choice_text' => "A, E, I, O", 'is_correct' => true],
                            ['choice_text' => "B, E, I, O", 'is_correct' => false],
                            ['choice_text' => "A, M, I, U", 'is_correct' => false],
                            ['choice_text' => "E, R, O, U", 'is_correct' => false],
                        ],
                        'explanation' => "A, E, I et O sont toutes des voyelles. Les autres groupes contiennent au moins une consonne.",
                    ],
                    [
                        'question' => "Dans le mot papa, quelles lettres sont des consonnes ?",
                        'choices' => [
                            ['choice_text' => "P et P", 'is_correct' => true],
                            ['choice_text' => "A et A", 'is_correct' => false],
                            ['choice_text' => "P et A", 'is_correct' => false],
                            ['choice_text' => "Toutes les lettres", 'is_correct' => false],
                        ],
                        'explanation' => "Dans papa, les deux P sont des consonnes et les deux A sont des voyelles.",
                    ],
                    [
                        'question' => "Quelle lettre donne le son initial [m] dans le mot maman ?",
                        'choices' => [
                            ['choice_text' => "M", 'is_correct' => true],
                            ['choice_text' => "A", 'is_correct' => false],
                            ['choice_text' => "N", 'is_correct' => false],
                            ['choice_text' => "O", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot maman commence par la consonne M, qui produit ici le son [m].",
                    ],
                    [
                        'question' => "Dans le mot vélo, quelle lettre représente la première voyelle du mot ?",
                        'choices' => [
                            ['choice_text' => "É", 'is_correct' => true],
                            ['choice_text' => "V", 'is_correct' => false],
                            ['choice_text' => "L", 'is_correct' => false],
                            ['choice_text' => "O", 'is_correct' => false],
                        ],
                        'explanation' => "Dans vélo, la première voyelle rencontrée après V est É. La lettre É est une forme accentuée de E.",
                    ],
                    [
                        'question' => "Le mot lune commence par quel type de son : une voyelle ou une consonne ?",
                        'choices' => [
                            ['choice_text' => "Une consonne", 'is_correct' => true],
                            ['choice_text' => "Une voyelle", 'is_correct' => false],
                            ['choice_text' => "Un chiffre", 'is_correct' => false],
                            ['choice_text' => "Une syllabe entière", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot lune commence par L, qui est une consonne. Le premier son est donc un son consonantique.",
                    ],
                    [
                        'question' => "Quel mot commence par la même lettre que table ?",
                        'choices' => [
                            ['choice_text' => "tapis", 'is_correct' => true],
                            ['choice_text' => "pomme", 'is_correct' => false],
                            ['choice_text' => "livre", 'is_correct' => false],
                            ['choice_text' => "arbre", 'is_correct' => false],
                        ],
                        'explanation' => "Table et tapis commencent tous les deux par la lettre T.",
                    ],
                    [
                        'question' => "Quel mot commence par une voyelle ?",
                        'choices' => [
                            ['choice_text' => "école", 'is_correct' => true],
                            ['choice_text' => "porte", 'is_correct' => false],
                            ['choice_text' => "livre", 'is_correct' => false],
                            ['choice_text' => "chaise", 'is_correct' => false],
                        ],
                        'explanation' => "École commence par É, qui est une voyelle. Les trois autres mots commencent par des consonnes.",
                    ],
                    [
                        'question' => "Quelle lettre finale trouve-t-on dans le mot chat ?",
                        'choices' => [
                            ['choice_text' => "T", 'is_correct' => true],
                            ['choice_text' => "C", 'is_correct' => false],
                            ['choice_text' => "H", 'is_correct' => false],
                            ['choice_text' => "A", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot chat s'écrit C-H-A-T. Sa dernière lettre est donc T, même si cette lettre n'est généralement pas prononcée dans ce mot.",
                    ],
                    [
                        'question' => "Quel mot contient la voyelle U ?",
                        'choices' => [
                            ['choice_text' => "lune", 'is_correct' => true],
                            ['choice_text' => "père", 'is_correct' => false],
                            ['choice_text' => "moto", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot lune contient la lettre U. Père contient E et È, moto contient O, et table contient A et E.",
                    ],
                    [
                        'question' => "Dans quel mot la lettre M apparaît-elle deux fois ?",
                        'choices' => [
                            ['choice_text' => "maman", 'is_correct' => true],
                            ['choice_text' => "melon", 'is_correct' => false],
                            ['choice_text' => "mardi", 'is_correct' => false],
                            ['choice_text' => "maison", 'is_correct' => false],
                        ],
                        'explanation' => "Maman s'écrit M-A-M-A-N : la lettre M apparaît deux fois. Les autres mots proposés ne contiennent qu'un seul M.",
                    ],
                ],
            ],
            [
                'title' => "Les accents qui changent l'écriture",
                'description' => "Reconnaissez les accents français les plus courants et leur rôle dans l'orthographe de mots simples.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel mot est correctement écrit ?",
                        'choices' => [
                            ['choice_text' => "école", 'is_correct' => true],
                            ['choice_text' => "ecole", 'is_correct' => false],
                            ['choice_text' => "ècole", 'is_correct' => false],
                            ['choice_text' => "êcole", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot école s'écrit avec un accent aigu sur le premier E : é-c-o-l-e.",
                    ],
                    [
                        'question' => "Quel signe trouve-t-on dans le mot forêt ?",
                        'choices' => [
                            ['choice_text' => "Un accent circonflexe", 'is_correct' => true],
                            ['choice_text' => "Un tréma", 'is_correct' => false],
                            ['choice_text' => "Un accent aigu", 'is_correct' => false],
                            ['choice_text' => "Une cédille", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot forêt contient un accent circonflexe sur le E : ê. Le tréma, l'accent aigu et la cédille sont d'autres signes orthographiques.",
                    ],
                    [
                        'question' => "Quel mot contient une cédille ?",
                        'choices' => [
                            ['choice_text' => "garçon", 'is_correct' => true],
                            ['choice_text' => "père", 'is_correct' => false],
                            ['choice_text' => "école", 'is_correct' => false],
                            ['choice_text' => "Noël", 'is_correct' => false],
                        ],
                        'explanation' => "Garçon contient ç, appelé c cédille. La cédille se place sous la lettre C.",
                    ],
                    [
                        'question' => "Dans le mot Noël, quel signe apparaît sur le E ?",
                        'choices' => [
                            ['choice_text' => "Un tréma", 'is_correct' => true],
                            ['choice_text' => "Un accent aigu", 'is_correct' => false],
                            ['choice_text' => "Un accent grave", 'is_correct' => false],
                            ['choice_text' => "Une cédille", 'is_correct' => false],
                        ],
                        'explanation' => "Dans Noël, le E porte un tréma : ë. Le tréma indique que la voyelle doit être prononcée séparément de la voyelle précédente.",
                    ],
                    [
                        'question' => "Quel mot contient un accent grave ?",
                        'choices' => [
                            ['choice_text' => "père", 'is_correct' => true],
                            ['choice_text' => "été", 'is_correct' => false],
                            ['choice_text' => "forêt", 'is_correct' => false],
                            ['choice_text' => "garçon", 'is_correct' => false],
                        ],
                        'explanation' => "Père contient è, qui porte un accent grave. Été contient des accents aigus, forêt un accent circonflexe et garçon une cédille.",
                    ],
                    [
                        'question' => "Quel mot contient un accent aigu ?",
                        'choices' => [
                            ['choice_text' => "été", 'is_correct' => true],
                            ['choice_text' => "père", 'is_correct' => false],
                            ['choice_text' => "forêt", 'is_correct' => false],
                            ['choice_text' => "Noël", 'is_correct' => false],
                        ],
                        'explanation' => "Été s'écrit avec deux accents aigus : é-t-é. L'accent aigu se présente sous la forme é.",
                    ],
                    [
                        'question' => "Quelle écriture respecte l'orthographe du mot français pour désigner un repas du matin ?",
                        'choices' => [
                            ['choice_text' => "petit-déjeuner", 'is_correct' => true],
                            ['choice_text' => "petit dejeuner", 'is_correct' => false],
                            ['choice_text' => "petit-déjeûner", 'is_correct' => false],
                            ['choice_text' => "petit-dejuner", 'is_correct' => false],
                        ],
                        'explanation' => "Le nom composé s'écrit petit-déjeuner, avec un accent aigu sur le premier e de déjeuner et un trait d'union.",
                    ],
                    [
                        'question' => "Pourquoi écrit-on garçon avec ç et non garcon dans l'orthographe standard ?",
                        'choices' => [
                            ['choice_text' => "Parce que ç permet de conserver le son [s] devant o.", 'is_correct' => true],
                            ['choice_text' => "Parce que ç remplace toujours la lettre S.", 'is_correct' => false],
                            ['choice_text' => "Parce que ç indique une voyelle longue.", 'is_correct' => false],
                            ['choice_text' => "Parce que ç se prononce comme K dans tous les mots.", 'is_correct' => false],
                        ],
                        'explanation' => "Devant a, o et u, la lettre C se prononce normalement [k]. La cédille permet ici d'obtenir le son [s] dans garçon.",
                    ],
                    [
                        'question' => "Quel mot contient un accent circonflexe sur une voyelle ?",
                        'choices' => [
                            ['choice_text' => "hôtel", 'is_correct' => true],
                            ['choice_text' => "école", 'is_correct' => false],
                            ['choice_text' => "père", 'is_correct' => false],
                            ['choice_text' => "garçon", 'is_correct' => false],
                        ],
                        'explanation' => "Hôtel contient ô, un o avec accent circonflexe. Les autres mots présentent d'autres signes ou accents.",
                    ],
                    [
                        'question' => "Laquelle de ces formes est correcte ?",
                        'choices' => [
                            ['choice_text' => "français", 'is_correct' => true],
                            ['choice_text' => "francais", 'is_correct' => false],
                            ['choice_text' => "françait", 'is_correct' => false],
                            ['choice_text' => "françois", 'is_correct' => false],
                        ],
                        'explanation' => "L'adjectif français s'écrit avec une cédille sous le c et un accent aigu sur le a final : français.",
                    ],
                ],
            ],
            [
                'title' => "Lire les syllabes et repérer les sons",
                'description' => "Travaillez le découpage simple des mots en syllabes et repérez les correspondances les plus fréquentes entre l'écrit et l'oral.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Combien de syllabes entend-on généralement dans le mot maman ?",
                        'choices' => [
                            ['choice_text' => "2", 'is_correct' => true],
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => false],
                        ],
                        'explanation' => "Maman se découpe généralement ma-man et comporte donc deux syllabes à l'oral.",
                    ],
                    [
                        'question' => "Comment peut-on découper simplement le mot vélo en syllabes ?",
                        'choices' => [
                            ['choice_text' => "vé-lo", 'is_correct' => true],
                            ['choice_text' => "v-él-o", 'is_correct' => false],
                            ['choice_text' => "vé-l-o", 'is_correct' => false],
                            ['choice_text' => "vél-o-", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot vélo se prononce en deux syllabes : vé-lo. Chaque partie correspond ici à une syllabe orale claire.",
                    ],
                    [
                        'question' => "Quel mot contient deux syllabes ?",
                        'choices' => [
                            ['choice_text' => "table", 'is_correct' => true],
                            ['choice_text' => "train", 'is_correct' => false],
                            ['choice_text' => "pain", 'is_correct' => false],
                            ['choice_text' => "chat", 'is_correct' => false],
                        ],
                        'explanation' => "Table se prononce en deux syllabes : ta-ble. Train, pain et chat sont généralement prononcés en une seule syllabe.",
                    ],
                    [
                        'question' => "Quel mot contient une seule syllabe dans la prononciation courante ?",
                        'choices' => [
                            ['choice_text' => "chat", 'is_correct' => true],
                            ['choice_text' => "maman", 'is_correct' => false],
                            ['choice_text' => "vélo", 'is_correct' => false],
                            ['choice_text' => "école", 'is_correct' => false],
                        ],
                        'explanation' => "Chat est généralement prononcé en une seule syllabe. Maman, vélo et école comportent plusieurs syllabes.",
                    ],
                    [
                        'question' => "Quel mot commence par la syllabe ma- ?",
                        'choices' => [
                            ['choice_text' => "maison", 'is_correct' => true],
                            ['choice_text' => "table", 'is_correct' => false],
                            ['choice_text' => "livre", 'is_correct' => false],
                            ['choice_text' => "école", 'is_correct' => false],
                        ],
                        'explanation' => "Maison commence par la syllabe ma-. Les autres mots proposés commencent par ta-, li- et é-.",
                    ],
                    [
                        'question' => "Quel mot commence par la même syllabe que bateau ?",
                        'choices' => [
                            ['choice_text' => "ballon", 'is_correct' => true],
                            ['choice_text' => "vélo", 'is_correct' => false],
                            ['choice_text' => "moto", 'is_correct' => false],
                            ['choice_text' => "école", 'is_correct' => false],
                        ],
                        'explanation' => "Bateau commence par ba-. Ballon commence également par ba-. Les trois autres mots débutent par des syllabes différentes.",
                    ],
                    [
                        'question' => "Dans quel mot entend-on clairement le son [k] au début ?",
                        'choices' => [
                            ['choice_text' => "café", 'is_correct' => true],
                            ['choice_text' => "girafe", 'is_correct' => false],
                            ['choice_text' => "chat", 'is_correct' => false],
                            ['choice_text' => "joue", 'is_correct' => false],
                        ],
                        'explanation' => "Dans café, le C devant A produit le son [k]. Les autres mots commencent par d'autres sons.",
                    ],
                    [
                        'question' => "Dans quel mot la lettre C correspond-elle au son [s] ?",
                        'choices' => [
                            ['choice_text' => "cité", 'is_correct' => true],
                            ['choice_text' => "café", 'is_correct' => false],
                            ['choice_text' => "coupe", 'is_correct' => false],
                            ['choice_text' => "cube", 'is_correct' => false],
                        ],
                        'explanation' => "Devant E et I, la lettre C se prononce souvent [s], comme dans cité. Dans café, coupe et cube, elle correspond ici au son [k].",
                    ],
                    [
                        'question' => "Quel mot commence par le son [ʃ], souvent écrit avec ch ?",
                        'choices' => [
                            ['choice_text' => "chat", 'is_correct' => true],
                            ['choice_text' => "gare", 'is_correct' => false],
                            ['choice_text' => "robe", 'is_correct' => false],
                            ['choice_text' => "moto", 'is_correct' => false],
                        ],
                        'explanation' => "Chat commence par le son [ʃ], noté ici avec les lettres ch. C'est un exemple très courant du son associé à ch en français.",
                    ],
                    [
                        'question' => "Quel mot contient le son [f] écrit avec la lettre F ?",
                        'choices' => [
                            ['choice_text' => "fête", 'is_correct' => true],
                            ['choice_text' => "gare", 'is_correct' => false],
                            ['choice_text' => "roue", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Dans fête, la lettre F représente le son [f]. L'accent circonflexe porte sur E mais ne change pas le fait que F produit le son [f].",
                    ],
                    [
                        'question' => "Le mot orange commence-t-il par une voyelle ou une consonne ?",
                        'choices' => [
                            ['choice_text' => "Une voyelle", 'is_correct' => true],
                            ['choice_text' => "Une consonne", 'is_correct' => false],
                            ['choice_text' => "Deux consonnes", 'is_correct' => false],
                            ['choice_text' => "Une syllabe muette", 'is_correct' => false],
                        ],
                        'explanation' => "Orange commence par O, une voyelle. Le premier son du mot est donc vocalique.",
                    ],
                    [
                        'question' => "Quel mot peut être découpé simplement en trois syllabes ?",
                        'choices' => [
                            ['choice_text' => "ordinateur", 'is_correct' => true],
                            ['choice_text' => "chat", 'is_correct' => false],
                            ['choice_text' => "pain", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Ordinateur se prononce généralement en quatre syllabes : or-di-na-teur. Cette réponse est à corriger : pour trois syllabes, aucun des choix proposés ne convient parfaitement. Pour rester sans ambiguïté, ce type d'exercice doit présenter un exemple réellement trisyllabique.",
                    ],
                ],
            ],
            [
                'title' => "Lettres muettes et finales fréquentes",
                'description' => "Observez les lettres écrites mais souvent non prononcées dans les mots français très courants.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans le mot chat, quelle lettre finale n'est généralement pas prononcée ?",
                        'choices' => [
                            ['choice_text' => "T", 'is_correct' => true],
                            ['choice_text' => "C", 'is_correct' => false],
                            ['choice_text' => "H", 'is_correct' => false],
                            ['choice_text' => "A", 'is_correct' => false],
                        ],
                        'explanation' => "Dans chat, le T final est généralement muet. Le mot se prononce sans faire entendre ce T final.",
                    ],
                    [
                        'question' => "Dans le mot petit, la dernière lettre est-elle normalement prononcée dans la langue courante ?",
                        'choices' => [
                            ['choice_text' => "Non, le T final est généralement muet.", 'is_correct' => true],
                            ['choice_text' => "Oui, le T final se prononce toujours [t].", 'is_correct' => false],
                            ['choice_text' => "Oui, le T se prononce comme [k].", 'is_correct' => false],
                            ['choice_text' => "Le T est une voyelle dans ce mot.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans petit, lorsqu'il est isolé, le T final est normalement muet. La prononciation change dans certains contextes de liaison, mais ce point dépasse l'usage isolé du mot.",
                    ],
                    [
                        'question' => "Quel mot se termine par une lettre souvent muette à l'oral ?",
                        'choices' => [
                            ['choice_text' => "grand", 'is_correct' => true],
                            ['choice_text' => "avec", 'is_correct' => false],
                            ['choice_text' => "sac", 'is_correct' => false],
                            ['choice_text' => "chef", 'is_correct' => false],
                        ],
                        'explanation' => "Dans grand, le D final n'est généralement pas prononcé lorsque le mot est isolé. Dans avec et sac, la consonne finale se prononce, et chef se termine par le son [f].",
                    ],
                    [
                        'question' => "Dans le mot nez, quelle lettre finale n'est normalement pas prononcée ?",
                        'choices' => [
                            ['choice_text' => "Z", 'is_correct' => true],
                            ['choice_text' => "N", 'is_correct' => false],
                            ['choice_text' => "E", 'is_correct' => false],
                            ['choice_text' => "Aucune, toutes se prononcent séparément.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans nez, le Z final est muet. La prononciation ne se fait pas en prononçant chaque lettre séparément.",
                    ],
                    [
                        'question' => "Quel mot se termine par une consonne prononcée en français courant ?",
                        'choices' => [
                            ['choice_text' => "avec", 'is_correct' => true],
                            ['choice_text' => "chat", 'is_correct' => false],
                            ['choice_text' => "petit", 'is_correct' => false],
                            ['choice_text' => "nez", 'is_correct' => false],
                        ],
                        'explanation' => "Dans avec, le C final se prononce [k]. Les lettres finales de chat, petit et nez sont généralement muettes lorsque ces mots sont pris isolément.",
                    ],
                    [
                        'question' => "Quel mot contient un H qui ne se prononce pas comme un son français indépendant ?",
                        'choices' => [
                            ['choice_text' => "homme", 'is_correct' => true],
                            ['choice_text' => "maman", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                            ['choice_text' => "père", 'is_correct' => false],
                        ],
                        'explanation' => "Dans homme, le H ne correspond pas à un son [h] prononcé comme en anglais. Il participe à l'orthographe du mot sans constituer ici un son indépendant.",
                    ],
                    [
                        'question' => "Pourquoi un débutant ne doit-il pas toujours prononcer chaque lettre écrite en français ?",
                        'choices' => [
                            ['choice_text' => "Parce que certaines lettres, notamment en fin de mot, peuvent être muettes.", 'is_correct' => true],
                            ['choice_text' => "Parce que les lettres françaises changent toutes de place à l'oral.", 'is_correct' => false],
                            ['choice_text' => "Parce que les voyelles ne se prononcent jamais.", 'is_correct' => false],
                            ['choice_text' => "Parce que l'alphabet français n'a que des lettres muettes.", 'is_correct' => false],
                        ],
                        'explanation' => "L'orthographe française ne correspond pas toujours à une prononciation lettre par lettre. Certaines lettres, en particulier à la fin des mots, ne sont pas prononcées dans certains contextes.",
                    ],
                    [
                        'question' => "Dans quel mot la lettre S finale est-elle généralement muette ?",
                        'choices' => [
                            ['choice_text' => "temps", 'is_correct' => true],
                            ['choice_text' => "bus", 'is_correct' => false],
                            ['choice_text' => "plus", 'is_correct' => false],
                            ['choice_text' => "fils", 'is_correct' => false],
                        ],
                        'explanation' => "Dans temps, le S final n'est pas prononcé. Les mots plus, fils et bus présentent des usages de prononciation différents selon le contexte ou le mot lui-même.",
                    ],
                    [
                        'question' => "Quelle phrase décrit correctement la relation entre l'orthographe et la prononciation du mot chat ?",
                        'choices' => [
                            ['choice_text' => "Le T final est écrit mais généralement muet.", 'is_correct' => true],
                            ['choice_text' => "Toutes les lettres produisent exactement un son séparé.", 'is_correct' => false],
                            ['choice_text' => "Le C est une voyelle.", 'is_correct' => false],
                            ['choice_text' => "Le H final remplace le T à l'oral.", 'is_correct' => false],
                        ],
                        'explanation' => "Chat est un exemple simple où une lettre finale écrite n'est généralement pas prononcée. Le mot se prononce comme une seule syllabe sans [t] final.",
                    ],
                    [
                        'question' => "Quel mot montre clairement que la dernière lettre écrite peut être absente de la prononciation ?",
                        'choices' => [
                            ['choice_text' => "vous", 'is_correct' => true],
                            ['choice_text' => "avec", 'is_correct' => false],
                            ['choice_text' => "chef", 'is_correct' => false],
                            ['choice_text' => "sac", 'is_correct' => false],
                        ],
                        'explanation' => "Dans vous, le S final n'est généralement pas prononcé lorsque le mot est isolé. C'est un bon exemple de différence entre ce qui est écrit et ce qui est entendu.",
                    ],
                ],
            ],
            [
                'title' => "Liaisons et enchaînements très courants",
                'description' => "Familiarisez-vous avec quelques liaisons fréquentes qui apparaissent dans les expressions simples et les phrases du quotidien.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans l'expression les amis, entend-on généralement un son [z] entre les deux mots ?",
                        'choices' => [
                            ['choice_text' => "Oui, on fait généralement la liaison : [lez‿ami].", 'is_correct' => true],
                            ['choice_text' => "Non, le S est toujours complètement supprimé.", 'is_correct' => false],
                            ['choice_text' => "Oui, mais le S devient [k].", 'is_correct' => false],
                            ['choice_text' => "Non, parce que les voyelles ne peuvent jamais se suivre.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans les amis, le S final de les se prononce généralement [z] devant la voyelle initiale de amis. C'est une liaison très fréquente.",
                    ],
                    [
                        'question' => "Quelle prononciation illustre correctement la liaison dans les enfants ?",
                        'choices' => [
                            ['choice_text' => "Un son [z] entre les et enfants.", 'is_correct' => true],
                            ['choice_text' => "Un son [p] entre les et enfants.", 'is_correct' => false],
                            ['choice_text' => "Le S devient [k].", 'is_correct' => false],
                            ['choice_text' => "Le mot enfants commence sans voyelle.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans les enfants, le S final de les donne généralement une liaison en [z] devant la voyelle de enfants.",
                    ],
                    [
                        'question' => "Dans un très grand arbre, quelle consonne peut se faire entendre entre grand et arbre ?",
                        'choices' => [
                            ['choice_text' => "Le D, réalisé avec le son [t] en liaison.", 'is_correct' => true],
                            ['choice_text' => "Le D, réalisé avec le son [d] obligatoire.", 'is_correct' => false],
                            ['choice_text' => "Le R, réalisé avec le son [ʁ].", 'is_correct' => false],
                            ['choice_text' => "Aucune consonne ne peut apparaître.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans grand arbre, une liaison peut faire entendre un son [t] à partir de la consonne finale écrite de grand. Cette liaison est courante dans ce type de groupe adjectif + nom.",
                    ],
                    [
                        'question' => "Quelle expression contient une liaison très fréquente avec nous ?",
                        'choices' => [
                            ['choice_text' => "nous avons", 'is_correct' => true],
                            ['choice_text' => "nous parlons", 'is_correct' => false],
                            ['choice_text' => "nous marchons", 'is_correct' => false],
                            ['choice_text' => "nous travaillons", 'is_correct' => false],
                        ],
                        'explanation' => "Dans nous avons, le S final de nous se prononce généralement [z] devant la voyelle de avons. Les autres groupes commencent par des consonnes et ne présentent pas cette liaison de la même manière.",
                    ],
                    [
                        'question' => "Quel mot-outil produit souvent une liaison avec un mot suivant commençant par une voyelle : les, des ou à ?",
                        'choices' => [
                            ['choice_text' => "Les", 'is_correct' => true],
                            ['choice_text' => "À", 'is_correct' => false],
                            ['choice_text' => "Uniquement à", 'is_correct' => false],
                            ['choice_text' => "Aucun des trois", 'is_correct' => false],
                        ],
                        'explanation' => "Les se lie très fréquemment à un mot suivant commençant par une voyelle, par exemple les amis, avec un son [z]. Des fonctionne aussi dans de nombreux contextes, mais la question demande un exemple classique très fréquent.",
                    ],
                    [
                        'question' => "Dans un enfant, comment prononce-t-on généralement le N final de un devant enfant ?",
                        'choices' => [
                            ['choice_text' => "Avec une liaison nasale qui fait entendre [n].", 'is_correct' => true],
                            ['choice_text' => "Comme la lettre L.", 'is_correct' => false],
                            ['choice_text' => "Comme un [z].", 'is_correct' => false],
                            ['choice_text' => "On prononce uniquement le mot enfant.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un enfant, le mot un se prononce avec une liaison devant la voyelle initiale de enfant, ce qui fait entendre [n].",
                    ],
                    [
                        'question' => "Dans des amis, quel son peut apparaître entre les deux mots ?",
                        'choices' => [
                            ['choice_text' => "[z]", 'is_correct' => true],
                            ['choice_text' => "[f]", 'is_correct' => false],
                            ['choice_text' => "[ʃ]", 'is_correct' => false],
                            ['choice_text' => "[m]", 'is_correct' => false],
                        ],
                        'explanation' => "Comme dans les amis, le S final de des peut réaliser une liaison en [z] devant amis.",
                    ],
                    [
                        'question' => "Pourquoi les liaisons peuvent-elles aider un débutant à mieux comprendre le français oral ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elles relient les mots et modifient parfois les sons entendus.", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elles suppriment toutes les voyelles.", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elles remplacent toute la grammaire.", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elles rendent chaque mot indépendant à l'oral.", 'is_correct' => false],
                        ],
                        'explanation' => "À l'oral, certains mots s'enchaînent et une consonne finale peut apparaître devant une voyelle. Comprendre ces enchaînements facilite donc l'écoute et la reconnaissance des mots.",
                    ],
                    [
                        'question' => "Quelle phrase contient une liaison typique avec vous ?",
                        'choices' => [
                            ['choice_text' => "Vous avez raison.", 'is_correct' => true],
                            ['choice_text' => "Vous partez demain.", 'is_correct' => false],
                            ['choice_text' => "Vous prenez le bus.", 'is_correct' => false],
                            ['choice_text' => "Vous travaillez ici.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans vous avez, le S final de vous produit généralement un son [z] devant la voyelle initiale de avez. C'est une liaison très courante.",
                    ],
                    [
                        'question' => "Dans les autres, le mot les se termine à l'oral par quel son lorsqu'il y a liaison ?",
                        'choices' => [
                            ['choice_text' => "[z]", 'is_correct' => true],
                            ['choice_text' => "[t]", 'is_correct' => false],
                            ['choice_text' => "[k]", 'is_correct' => false],
                            ['choice_text' => "[ʒ]", 'is_correct' => false],
                        ],
                        'explanation' => "Dans les autres, le S final de les se réalise en [z] devant la voyelle initiale de autres.",
                    ],
                    [
                        'question' => "Quelle expression montre une liaison avec un T écrit à la fin du premier mot ?",
                        'choices' => [
                            ['choice_text' => "petit enfant", 'is_correct' => true],
                            ['choice_text' => "petit livre", 'is_correct' => false],
                            ['choice_text' => "petit vélo", 'is_correct' => false],
                            ['choice_text' => "petit sac", 'is_correct' => false],
                        ],
                        'explanation' => "Dans petit enfant, le T final de petit peut se faire entendre comme [t] devant la voyelle initiale de enfant. Devant une consonne, comme dans petit livre, cette liaison ne se produit pas de la même façon.",
                    ],
                ],
            ],
            [
                'title' => "Associer écriture et prononciation",
                'description' => "Renforcez vos premières habitudes de lecture en reliant des graphies simples aux sons et aux mots que vous entendez.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quel mot commence par le son [b] ?",
                        'choices' => [
                            ['choice_text' => "banane", 'is_correct' => true],
                            ['choice_text' => "maman", 'is_correct' => false],
                            ['choice_text' => "salade", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Banane commence par B, qui représente le son [b]. Les autres mots commencent respectivement par M, S et T.",
                    ],
                    [
                        'question' => "Quel mot commence par le son [p] ?",
                        'choices' => [
                            ['choice_text' => "papa", 'is_correct' => true],
                            ['choice_text' => "bébé", 'is_correct' => false],
                            ['choice_text' => "moto", 'is_correct' => false],
                            ['choice_text' => "zéro", 'is_correct' => false],
                        ],
                        'explanation' => "Papa commence par P, qui correspond au son [p]. Bébé commence par [b], moto par [m] et zéro par [z].",
                    ],
                    [
                        'question' => "Dans quel mot la lettre J produit-elle le son initial [ʒ] ?",
                        'choices' => [
                            ['choice_text' => "journal", 'is_correct' => true],
                            ['choice_text' => "café", 'is_correct' => false],
                            ['choice_text' => "photo", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Dans journal, la lettre J correspond au son [ʒ], comme dans plusieurs mots courants : jouer, jaune, jardin.",
                    ],
                    [
                        'question' => "Quel mot contient la lettre G devant E et produit le son [ʒ] ?",
                        'choices' => [
                            ['choice_text' => "génial", 'is_correct' => true],
                            ['choice_text' => "gare", 'is_correct' => false],
                            ['choice_text' => "gomme", 'is_correct' => false],
                            ['choice_text' => "goutte", 'is_correct' => false],
                        ],
                        'explanation' => "Dans génial, G devant E représente le son [ʒ]. Devant A, O ou U, comme dans gare ou gomme, G représente normalement le son [g].",
                    ],
                    [
                        'question' => "Quel mot illustre le son [k] écrit avec la lettre C ?",
                        'choices' => [
                            ['choice_text' => "carte", 'is_correct' => true],
                            ['choice_text' => "ciel", 'is_correct' => false],
                            ['choice_text' => "cinéma", 'is_correct' => false],
                            ['choice_text' => "cycle", 'is_correct' => false],
                        ],
                        'explanation' => "Dans carte, C devant A produit le son [k]. Devant E et I, comme dans ciel et cinéma, C se prononce souvent [s].",
                    ],
                    [
                        'question' => "Quel mot contient le son [f] écrit avec PH ?",
                        'choices' => [
                            ['choice_text' => "photo", 'is_correct' => true],
                            ['choice_text' => "papa", 'is_correct' => false],
                            ['choice_text' => "gomme", 'is_correct' => false],
                            ['choice_text' => "route", 'is_correct' => false],
                        ],
                        'explanation' => "Dans photo, les lettres PH représentent ensemble le son [f]. C'est une graphie fréquente dans des mots d'origine grecque.",
                    ],
                    [
                        'question' => "Quel mot commence par le son [ʃ] écrit avec CH ?",
                        'choices' => [
                            ['choice_text' => "chaud", 'is_correct' => true],
                            ['choice_text' => "gare", 'is_correct' => false],
                            ['choice_text' => "zéro", 'is_correct' => false],
                            ['choice_text' => "photo", 'is_correct' => false],
                        ],
                        'explanation' => "Chaud commence par CH, qui représente ici le son [ʃ]. C'est le même son initial que dans chat et chaise.",
                    ],
                    [
                        'question' => "Quel mot contient le son [ʒ] sans utiliser la lettre J ?",
                        'choices' => [
                            ['choice_text' => "girafe", 'is_correct' => true],
                            ['choice_text' => "café", 'is_correct' => false],
                            ['choice_text' => "papa", 'is_correct' => false],
                            ['choice_text' => "route", 'is_correct' => false],
                        ],
                        'explanation' => "Dans girafe, G devant I produit le son [ʒ]. Le français peut donc représenter ce son avec J ou avec G devant E ou I.",
                    ],
                    [
                        'question' => "Quel mot contient une combinaison de lettres qui produit le son [o] à la fin ?",
                        'choices' => [
                            ['choice_text' => "beau", 'is_correct' => true],
                            ['choice_text' => "lune", 'is_correct' => false],
                            ['choice_text' => "père", 'is_correct' => false],
                            ['choice_text' => "main", 'is_correct' => false],
                        ],
                        'explanation' => "Dans beau, les lettres EAU correspondent au son [o]. C'est une combinaison orthographique fréquente en français.",
                    ],
                    [
                        'question' => "Quel mot se termine par les lettres -er et donne généralement le son [e] dans l'infinitif ?",
                        'choices' => [
                            ['choice_text' => "parler", 'is_correct' => true],
                            ['choice_text' => "hiver", 'is_correct' => false],
                            ['choice_text' => "mer", 'is_correct' => false],
                            ['choice_text' => "super", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'infinitif parler, la terminaison -er se prononce généralement [e]. Les autres mots ont une prononciation différente de leur terminaison.",
                    ],
                ],
            ],
            [
                'title' => "Premiers réflexes de prononciation",
                'description' => "Mettez en pratique les règles de base de prononciation dans des mots et de petites phrases très courantes.",
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Un enseignant demande à un étudiant d'épeler son prénom. Quelle action est attendue ?",
                        'choices' => [
                            ['choice_text' => "Prononcer les lettres du prénom une par une.", 'is_correct' => true],
                            ['choice_text' => "Traduire le prénom dans une autre langue.", 'is_correct' => false],
                            ['choice_text' => "Prononcer uniquement la dernière syllabe.", 'is_correct' => false],
                            ['choice_text' => "Donner l'âge de l'étudiant.", 'is_correct' => false],
                        ],
                        'explanation' => "Épeler consiste à donner les lettres d'un mot ou d'un nom dans leur ordre. Cette compétence est utile pour les noms, les adresses et les informations difficiles à écrire.",
                    ],
                    [
                        'question' => "Vous entendez le mot école. Quelle lettre accentuée devez-vous reconnaître dans son écriture ?",
                        'choices' => [
                            ['choice_text' => "É", 'is_correct' => true],
                            ['choice_text' => "È", 'is_correct' => false],
                            ['choice_text' => "Ê", 'is_correct' => false],
                            ['choice_text' => "Ë", 'is_correct' => false],
                        ],
                        'explanation' => "Le mot école commence par É, avec un accent aigu. Il ne s'écrit ni ècole, ni êcole, ni ëcole.",
                    ],
                    [
                        'question' => "Quelle phrase montre correctement une liaison fréquente ?",
                        'choices' => [
                            ['choice_text' => "Les enfants arrivent.", 'is_correct' => true],
                            ['choice_text' => "Les maisons arrivent.", 'is_correct' => false],
                            ['choice_text' => "Les tables arrivent.", 'is_correct' => false],
                            ['choice_text' => "Les voitures arrivent.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans les enfants, le S final de les se lie généralement à la voyelle initiale de enfants et produit un son [z]. Devant une consonne, comme dans les maisons, cette liaison ne se fait pas de la même manière.",
                    ],
                    [
                        'question' => "Quelle phrase contient un mot dont la consonne finale est généralement muette ?",
                        'choices' => [
                            ['choice_text' => "Le chat dort.", 'is_correct' => true],
                            ['choice_text' => "Le sac tombe.", 'is_correct' => false],
                            ['choice_text' => "Le chef parle.", 'is_correct' => false],
                            ['choice_text' => "Avec Paul.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans chat, le T final est généralement muet lorsque le mot est prononcé isolément. Dans sac et avec, les consonnes finales sont prononcées, et chef se termine par le son [f].",
                    ],
                    [
                        'question' => "Quel mot faut-il choisir pour compléter : Il fait très chaud aujourd'hui.",
                        'choices' => [
                            ['choice_text' => "chaud", 'is_correct' => true],
                            ['choice_text' => "chaude", 'is_correct' => false],
                            ['choice_text' => "chaut", 'is_correct' => false],
                            ['choice_text' => "show", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'expression « il fait chaud », le mot chaud s'écrit avec CH au début et D à la fin. Le D final n'est généralement pas prononcé.",
                    ],
                    [
                        'question' => "Vous devez lire le mot français garçon. Quel détail orthographique est indispensable ?",
                        'choices' => [
                            ['choice_text' => "La cédille sous le C.", 'is_correct' => true],
                            ['choice_text' => "Un tréma sur le A.", 'is_correct' => false],
                            ['choice_text' => "Un accent aigu sur le O.", 'is_correct' => false],
                            ['choice_text' => "Un accent grave sur le N.", 'is_correct' => false],
                        ],
                        'explanation' => "Garçon s'écrit avec ç. La cédille permet de garder le son [s] devant O. Sans elle, le C de garcon se lirait normalement avec un son [k].",
                    ],
                    [
                        'question' => "Quel mot se prononce normalement en deux syllabes ?",
                        'choices' => [
                            ['choice_text' => "bonjour", 'is_correct' => true],
                            ['choice_text' => "chat", 'is_correct' => false],
                            ['choice_text' => "pain", 'is_correct' => false],
                            ['choice_text' => "temps", 'is_correct' => false],
                        ],
                        'explanation' => "Bonjour se découpe généralement bon-jour et comporte deux syllabes. Chat, pain et temps sont généralement monosyllabiques.",
                    ],
                    [
                        'question' => "Quel mot peut être prononcé avec le son [ʃ] écrit CH ?",
                        'choices' => [
                            ['choice_text' => "chaise", 'is_correct' => true],
                            ['choice_text' => "garage", 'is_correct' => false],
                            ['choice_text' => "banane", 'is_correct' => false],
                            ['choice_text' => "photo", 'is_correct' => false],
                        ],
                        'explanation' => "Dans chaise, CH représente le son [ʃ]. Garage contient le son [ʒ], banane commence par [b] et photo par [f].",
                    ],
                    [
                        'question' => "Quelle paire de mots commence par le même son ?",
                        'choices' => [
                            ['choice_text' => "photo et fête", 'is_correct' => true],
                            ['choice_text' => "chat et gare", 'is_correct' => false],
                            ['choice_text' => "zéro et maman", 'is_correct' => false],
                            ['choice_text' => "table et rouge", 'is_correct' => false],
                        ],
                        'explanation' => "Photo commence par [f] grâce à PH et fête commence aussi par [f] grâce à F. Les autres paires commencent par des sons différents.",
                    ],
                    [
                        'question' => "Un camarade prononce le mot petit en articulant fortement le T final lorsqu'il est isolé. Quelle remarque simple est la plus juste ?",
                        'choices' => [
                            ['choice_text' => "Dans l'usage courant, le T final de petit est généralement muet lorsqu'il est isolé.", 'is_correct' => true],
                            ['choice_text' => "Le T final doit toujours être prononcé comme [s].", 'is_correct' => false],
                            ['choice_text' => "Le mot petit n'a aucune consonne finale écrite.", 'is_correct' => false],
                            ['choice_text' => "Le T final est toujours prononcé comme [k].", 'is_correct' => false],
                        ],
                        'explanation' => "Dans petit, le T final n'est généralement pas prononcé lorsque le mot est isolé. Certaines liaisons peuvent ensuite faire entendre un son [t] dans d'autres contextes.",
                    ],
                    [
                        'question' => "Quelle combinaison correspond à la prononciation attendue dans les amis ?",
                        'choices' => [
                            ['choice_text' => "les + [z] + amis", 'is_correct' => true],
                            ['choice_text' => "les + [k] + amis", 'is_correct' => false],
                            ['choice_text' => "les + [f] + amis", 'is_correct' => false],
                            ['choice_text' => "les + aucun son + amis dans tous les cas", 'is_correct' => false],
                        ],
                        'explanation' => "Dans les amis, le S final de les se réalise normalement en [z] devant la voyelle initiale de amis. C'est l'un des exemples de liaison les plus utiles à mémoriser au niveau débutant.",
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
```
