<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'french')->firstOrFail()->id)->where('name', 'Verbs & Conjugation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Reconnaître les verbes et leurs formes de base',
                'description' => 'Identifiez les verbes dans des phrases simples, reconnaissez leur infinitif et distinguez les formes conjuguées des autres catégories de mots.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Dans la phrase « Paul mange une pomme », quel mot est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'Paul', 'is_correct' => false],
                            ['choice_text' => 'pomme', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'mange', 'is_correct' => true],
                        ],
                        'explanation' => '« Mange » exprime l’action réalisée par Paul. C’est donc le verbe de la phrase.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif du verbe « parlons » ?',
                        'choices' => [
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'parler', 'is_correct' => true],
                            ['choice_text' => 'parlé', 'is_correct' => false],
                            ['choice_text' => 'parlant', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « parlons » vient du verbe « parler ». L’infinitif est la forme non conjuguée du verbe.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif du verbe « finissez » ?',
                        'choices' => [
                            ['choice_text' => 'finissez', 'is_correct' => false],
                            ['choice_text' => 'fini', 'is_correct' => false],
                            ['choice_text' => 'finir', 'is_correct' => true],
                            ['choice_text' => 'finissant', 'is_correct' => false],
                        ],
                        'explanation' => '« Finissez » est une forme conjuguée du verbe « finir ». Son infinitif se termine par -ir.',
                    ],
                    [
                        'question' => 'Quel mot est un verbe à l’infinitif ?',
                        'choices' => [
                            ['choice_text' => 'voyage', 'is_correct' => false],
                            ['choice_text' => 'voyageur', 'is_correct' => false],
                            ['choice_text' => 'voyager', 'is_correct' => true],
                            ['choice_text' => 'voyagé', 'is_correct' => false],
                        ],
                        'explanation' => '« Voyager » est la forme infinitive du verbe. Il n’est pas conjugué et se termine par -er.',
                    ],
                    [
                        'question' => 'Dans « Nous travaillons chaque matin », quel est l’infinitif de « travaillons » ?',
                        'choices' => [
                            ['choice_text' => 'travailler', 'is_correct' => true],
                            ['choice_text' => 'travail', 'is_correct' => false],
                            ['choice_text' => 'travaille', 'is_correct' => false],
                            ['choice_text' => 'travaillant', 'is_correct' => false],
                        ],
                        'explanation' => '« Travaillons » est la forme conjuguée de « travailler ». L’infinitif permet de nommer le verbe indépendamment du sujet.',
                    ],
                    [
                        'question' => 'Complétez : « Les enfants ___ au ballon dans le jardin. »',
                        'choices' => [
                            ['choice_text' => 'jouer', 'is_correct' => false],
                            ['choice_text' => 'jouent', 'is_correct' => true],
                            ['choice_text' => 'joue', 'is_correct' => false],
                            ['choice_text' => 'jouez', 'is_correct' => false],
                        ],
                        'explanation' => '« Les enfants » équivaut à « ils » : le verbe jouer prend -ent à l’écrit.',
                    ],
                    [
                        'question' => 'Dans « Tu lis un roman », quel est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'roman', 'is_correct' => false],
                            ['choice_text' => 'lis', 'is_correct' => true],
                            ['choice_text' => 'tu', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                        ],
                        'explanation' => '« Lis » est la forme de « lire » avec « tu ». Les autres mots sont un pronom, un déterminant et un nom.',
                    ],
                    [
                        'question' => 'Quel infinitif correspond à « faisons » ?',
                        'choices' => [
                            ['choice_text' => 'fais', 'is_correct' => false],
                            ['choice_text' => 'fait', 'is_correct' => false],
                            ['choice_text' => 'faisant', 'is_correct' => false],
                            ['choice_text' => 'faire', 'is_correct' => true],
                        ],
                        'explanation' => '« Faisons » vient du verbe irrégulier « faire ». Les autres propositions sont des formes conjuguées ou un participe.',
                    ],
                    [
                        'question' => 'Parmi ces formes du verbe « prendre », laquelle est conjuguée au présent ?',
                        'choices' => [
                            ['choice_text' => 'prendre', 'is_correct' => false],
                            ['choice_text' => 'pris', 'is_correct' => false],
                            ['choice_text' => 'prenant', 'is_correct' => false],
                            ['choice_text' => 'prends', 'is_correct' => true],
                        ],
                        'explanation' => '« Prends » se conjugue avec « je » ou « tu ». « Prendre » est l’infinitif, « pris » le participe passé et « prenant » le participe présent.',
                    ],
                    [
                        'question' => 'Quel verbe convient dans « Je ___ mes devoirs après le dîner » ?',
                        'choices' => [
                            ['choice_text' => 'fais', 'is_correct' => true],
                            ['choice_text' => 'faire', 'is_correct' => false],
                            ['choice_text' => 'fait', 'is_correct' => false],
                            ['choice_text' => 'font', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », on dit « je fais » : « fait » va avec « il » et « font » avec « ils ».',
                    ],
                ],
            ],
            [
                'title' => 'Le présent des verbes en -er',
                'description' => 'Conjuguez les verbes réguliers du premier groupe au présent et appliquez les principales terminaisons dans des contextes simples.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « J’___ le français à l’université. »',
                        'choices' => [
                            ['choice_text' => 'étudies', 'is_correct' => false],
                            ['choice_text' => 'étudions', 'is_correct' => false],
                            ['choice_text' => 'étudie', 'is_correct' => true],
                            ['choice_text' => 'étudiez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe « étudier » prend la terminaison -e au présent : « j’étudie ».',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « tu » ? « Tu ___ le français chaque soir. »',
                        'choices' => [
                            ['choice_text' => 'révise', 'is_correct' => false],
                            ['choice_text' => 'révisons', 'is_correct' => false],
                            ['choice_text' => 'révises', 'is_correct' => true],
                            ['choice_text' => 'révisez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », réviser prend -es : « tu révises », comme parler ou écouter.',
                    ],
                    [
                        'question' => 'Quel choix complète « Nous ___ à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'commence', 'is_correct' => false],
                            ['choice_text' => 'commencez', 'is_correct' => false],
                            ['choice_text' => 'commencent', 'is_correct' => false],
                            ['choice_text' => 'commençons', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « nous », commencer donne « nous commençons ». La cédille permet de conserver le son [s] devant o.',
                    ],
                    [
                        'question' => 'Vous proposez une soirée à deux amis. Quelle phrase est bien conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Vous regarde un film.', 'is_correct' => false],
                            ['choice_text' => 'Vous regardons un film.', 'is_correct' => false],
                            ['choice_text' => 'Vous regardez un film.', 'is_correct' => true],
                            ['choice_text' => 'Vous regardent un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe « regarder » se conjugue « vous regardez » au présent.',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ leurs amis après le cours. »',
                        'choices' => [
                            ['choice_text' => 'retrouve', 'is_correct' => false],
                            ['choice_text' => 'retrouvent', 'is_correct' => true],
                            ['choice_text' => 'retrouvez', 'is_correct' => false],
                            ['choice_text' => 'retrouvons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « ils » demande la troisième personne du pluriel : « ils retrouvent ».',
                    ],
                    [
                        'question' => 'Quelle terminaison complète correctement « nous aim___ » ?',
                        'choices' => [
                            ['choice_text' => '-e', 'is_correct' => false],
                            ['choice_text' => '-ons', 'is_correct' => true],
                            ['choice_text' => '-es', 'is_correct' => false],
                            ['choice_text' => '-ez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », les verbes en -er prennent -ons : « nous aimons ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Elle travailler à Paris. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Elle travailles à Paris.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillons à Paris.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillez à Paris.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille à Paris.', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « elle », le verbe se conjugue : « elle travaille ». On ne garde pas l’infinitif.',
                    ],
                    [
                        'question' => 'Quel choix complète : « Nous ___ souvent au restaurant le vendredi. »',
                        'choices' => [
                            ['choice_text' => 'mangent', 'is_correct' => false],
                            ['choice_text' => 'mangez', 'is_correct' => false],
                            ['choice_text' => 'mange', 'is_correct' => false],
                            ['choice_text' => 'mangeons', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « nous », le verbe manger prend la forme « mangeons ».',
                    ],
                    [
                        'question' => 'Hamza raconte ses vacances. Quelle phrase conjugue bien « voyager » avec « je » ?',
                        'choices' => [
                            ['choice_text' => 'Je voyage souvent en train.', 'is_correct' => true],
                            ['choice_text' => 'Je voyages souvent en train.', 'is_correct' => false],
                            ['choice_text' => 'Je voyageons souvent en train.', 'is_correct' => false],
                            ['choice_text' => 'Je voyagez souvent en train.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « je voyage » correspond à la première personne du singulier du verbe « voyager » au présent.',
                    ],
                    [
                        'question' => 'Quelle forme convient dans « Vous ___ la porte avant de partir » ?',
                        'choices' => [
                            ['choice_text' => 'ferme', 'is_correct' => false],
                            ['choice_text' => 'fermez', 'is_correct' => true],
                            ['choice_text' => 'fermons', 'is_correct' => false],
                            ['choice_text' => 'ferment', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe fermer se conjugue « vous fermez ».',
                    ],
                    [
                        'question' => 'Quel verbe complète naturellement « Mes parents ___ dans cette entreprise » ?',
                        'choices' => [
                            ['choice_text' => 'travaillent', 'is_correct' => true],
                            ['choice_text' => 'travaille', 'is_correct' => false],
                            ['choice_text' => 'travaillez', 'is_correct' => false],
                            ['choice_text' => 'travaillons', 'is_correct' => false],
                        ],
                        'explanation' => '« Mes parents » correspond à « ils ». Le verbe travailler prend donc la forme « travaillent ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'Tu écoutes le professeur.', 'is_correct' => true],
                            ['choice_text' => 'Tu écoute le professeur.', 'is_correct' => false],
                            ['choice_text' => 'Tu écoutons le professeur.', 'is_correct' => false],
                            ['choice_text' => 'Tu écoutez le professeur.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe écouter avec « tu » donne « tu écoutes ». La terminaison -es est correcte.',
                    ],
                ],
            ],
            [
                'title' => 'Être, avoir, aller et faire',
                'description' => 'Maîtrisez quatre verbes très fréquents et irréguliers au présent à travers des phrases courantes et des situations réelles.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je ___ étudiant. »',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'suis', 'is_correct' => true],
                            ['choice_text' => 'sommes', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe être se conjugue « je suis ».',
                    ],
                    [
                        'question' => 'Quelle forme du verbe avoir convient avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'as', 'is_correct' => true],
                            ['choice_text' => 'ai', 'is_correct' => false],
                            ['choice_text' => 'avez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent de « avoir » avec « tu » donne « tu as ».',
                    ],
                    [
                        'question' => '« Nous ___ au marché tous les samedis. »',
                        'choices' => [
                            ['choice_text' => 'allez', 'is_correct' => false],
                            ['choice_text' => 'vont', 'is_correct' => false],
                            ['choice_text' => 'vais', 'is_correct' => false],
                            ['choice_text' => 'allons', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « nous », le verbe aller se conjugue « nous allons ».',
                    ],
                    [
                        'question' => 'Que fait Sofia le samedi matin ? Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Elle fait ses courses.', 'is_correct' => true],
                            ['choice_text' => 'Elle fais ses courses.', 'is_correct' => false],
                            ['choice_text' => 'Elle font ses courses.', 'is_correct' => false],
                            ['choice_text' => 'Elle faire ses courses.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », faire donne « elle fait ». « Font » va avec « ils » ou « elles ».',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ très gentil avec nous. »',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'êtes', 'is_correct' => true],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe être donne « êtes », avec un accent circonflexe.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe avoir ?',
                        'choices' => [
                            ['choice_text' => 'Nous avez beaucoup de travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous a beaucoup de travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous ont beaucoup de travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons beaucoup de travail.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « nous », le verbe avoir donne « avons ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Ils va à l’université chaque matin. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils vas à l’université chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Ils allez à l’université chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Ils vont à l’université chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Ils aller à l’université chaque matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils », le verbe aller se conjugue « vont ». Le sujet pluriel impose donc cette forme.',
                    ],
                    [
                        'question' => 'Complétez : « J’___ raison, la réunion est lundi. »',
                        'choices' => [
                            ['choice_text' => 'as', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'ai', 'is_correct' => true],
                            ['choice_text' => 'ont', 'is_correct' => false],
                        ],
                        'explanation' => '« Avoir raison » se conjugue avec avoir : « j’ai raison ».',
                    ],
                    [
                        'question' => 'Quelle phrase correspond à « I am tired » en français ?',
                        'choices' => [
                            ['choice_text' => 'Je suis fatigué.', 'is_correct' => true],
                            ['choice_text' => 'J’ai fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Je fais fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Je suis fatiguer.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, la fatigue s’exprime avec le verbe être : « je suis fatigué ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Elles ___ un nouvel appartement » ?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'ont', 'is_correct' => true],
                            ['choice_text' => 'avez', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elles », on dit « elles ont ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « faire » avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'Nous faites du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous font du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous fais du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons du sport.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le présent de faire avec « nous » donne « nous faisons ». C’est une forme irrégulière qu’il faut mémoriser.',
                    ],
                    [
                        'question' => 'Walid décrit sa routine du matin. Quel énoncé est correct ?',
                        'choices' => [
                            ['choice_text' => 'Je vais au travail à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je va au travail à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je vas au travail à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je aller au travail à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », aller donne « je vais ». Les formes « va » et « vas » correspondent à d’autres personnes.',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ un rendez-vous demain. »',
                        'choices' => [
                            ['choice_text' => 'avez', 'is_correct' => true],
                            ['choice_text' => 'as', 'is_correct' => false],
                            ['choice_text' => 'ont', 'is_correct' => false],
                            ['choice_text' => 'avons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », on dit « vous avez ».',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes en -ir et -re les plus courants',
                'description' => 'Découvrez quelques verbes fréquents du deuxième et du troisième groupe et entraînez-vous à reconnaître leurs formes au présent.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je ___ mon travail à dix-huit heures. »',
                        'choices' => [
                            ['choice_text' => 'finit', 'is_correct' => false],
                            ['choice_text' => 'finis', 'is_correct' => true],
                            ['choice_text' => 'finissons', 'is_correct' => false],
                            ['choice_text' => 'finissez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », finir se conjugue « je finis » au présent.',
                    ],
                    [
                        'question' => 'Nous cherchons où dîner. Quelle phrase conjugue bien « choisir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous choisit un restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous choisissons un restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Nous choisissez un restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Nous choisir un restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », choisir donne « nous choisissons ». C’est un verbe régulier du deuxième groupe.',
                    ],
                    [
                        'question' => 'Quel choix complète « Vous ___ votre réponse avec attention » ?',
                        'choices' => [
                            ['choice_text' => 'choisissez', 'is_correct' => true],
                            ['choice_text' => 'choisissons', 'is_correct' => false],
                            ['choice_text' => 'choisit', 'is_correct' => false],
                            ['choice_text' => 'choisis', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe choisir se conjugue « vous choisissez ».',
                    ],
                    [
                        'question' => 'Complétez : « Tu ___ ton sac avant de sortir. »',
                        'choices' => [
                            ['choice_text' => 'prend', 'is_correct' => false],
                            ['choice_text' => 'prends', 'is_correct' => true],
                            ['choice_text' => 'prenons', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », le verbe prendre se conjugue « tu prends » au présent.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif de « mettons » ?',
                        'choices' => [
                            ['choice_text' => 'mets', 'is_correct' => false],
                            ['choice_text' => 'mis', 'is_correct' => false],
                            ['choice_text' => 'mettant', 'is_correct' => false],
                            ['choice_text' => 'mettre', 'is_correct' => true],
                        ],
                        'explanation' => '« Mettons » vient de « mettre ». « Mets » est une forme conjuguée, « mis » un participe passé.',
                    ],
                    [
                        'question' => 'À la gare, Samir parle de ses cousins. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Ils prend le train à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils prenez le train à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils prendre le train à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils prennent le train à sept heures.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « ils », prendre donne « ils prennent », avec deux n.',
                    ],
                    [
                        'question' => 'Quel verbe complète « Elle ___ son manteau avant de sortir » ?',
                        'choices' => [
                            ['choice_text' => 'mets', 'is_correct' => false],
                            ['choice_text' => 'mettons', 'is_correct' => false],
                            ['choice_text' => 'met', 'is_correct' => true],
                            ['choice_text' => 'mettez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », mettre se conjugue « elle met ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ l’arabe et le français à l’école. »',
                        'choices' => [
                            ['choice_text' => 'apprenons', 'is_correct' => true],
                            ['choice_text' => 'apprennent', 'is_correct' => false],
                            ['choice_text' => 'apprenez', 'is_correct' => false],
                            ['choice_text' => 'apprend', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », apprendre donne « nous apprenons », avec un seul n.',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Vous finissons à dix heures. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Vous finissez à dix heures.', 'is_correct' => true],
                            ['choice_text' => 'Vous finit à dix heures.', 'is_correct' => false],
                            ['choice_text' => 'Vous finis à dix heures.', 'is_correct' => false],
                            ['choice_text' => 'Vous finir à dix heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », finir se conjugue « vous finissez ». La forme « finissons » correspond à « nous ».',
                    ],
                    [
                        'question' => 'Vous parlez de votre soirée. Quelle phrase conjugue bien « sortir » ?',
                        'choices' => [
                            ['choice_text' => 'Je sort à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je sortons à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je sors à dix-huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je sortir à dix-huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe sortir se conjugue « je sors » à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ rapidement de la salle. »',
                        'choices' => [
                            ['choice_text' => 'sors', 'is_correct' => false],
                            ['choice_text' => 'sort', 'is_correct' => false],
                            ['choice_text' => 'sortent', 'is_correct' => true],
                            ['choice_text' => 'sortez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils », sortir donne « ils sortent » au présent.',
                    ],
                ],
            ],
            [
                'title' => 'Lire et écrire les conjugaisons au présent',
                'description' => 'Consolidez les principales terminaisons du présent et apprenez à choisir la bonne forme selon le sujet de la phrase.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel choix complète correctement : « Je ___ à mes parents chaque dimanche. »',
                        'choices' => [
                            ['choice_text' => 'téléphone', 'is_correct' => true],
                            ['choice_text' => 'téléphones', 'is_correct' => false],
                            ['choice_text' => 'téléphonons', 'is_correct' => false],
                            ['choice_text' => 'téléphonez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe téléphoner se conjugue « je téléphone ».',
                    ],
                    [
                        'question' => 'Complétez : « J’___ une lettre à ma grand-mère. »',
                        'choices' => [
                            ['choice_text' => 'écrit', 'is_correct' => false],
                            ['choice_text' => 'écrivons', 'is_correct' => false],
                            ['choice_text' => 'écris', 'is_correct' => true],
                            ['choice_text' => 'écrivez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », écrire donne « j’écris ». « Écrit » va avec « il » ou « elle ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Tu ___ souvent de bonnes questions » ?',
                        'choices' => [
                            ['choice_text' => 'pose', 'is_correct' => false],
                            ['choice_text' => 'posons', 'is_correct' => false],
                            ['choice_text' => 'posez', 'is_correct' => false],
                            ['choice_text' => 'poses', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « tu », poser se conjugue « tu poses ».',
                    ],
                    [
                        'question' => 'Karim reçoit un message et répond vite. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Il réponds rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Il répondent rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Il répondre rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Il répond rapidement.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « il », répondre donne « il répond ». La forme « réponds » va avec « je » ou « tu ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ un café après le cours. »',
                        'choices' => [
                            ['choice_text' => 'boivent', 'is_correct' => false],
                            ['choice_text' => 'buvons', 'is_correct' => true],
                            ['choice_text' => 'boit', 'is_correct' => false],
                            ['choice_text' => 'buvez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe boire prend la forme irrégulière « buvons ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Vous ___ souvent cette chanson » ?',
                        'choices' => [
                            ['choice_text' => 'écoutons', 'is_correct' => false],
                            ['choice_text' => 'écoutez', 'is_correct' => true],
                            ['choice_text' => 'écoute', 'is_correct' => false],
                            ['choice_text' => 'écoutent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », écouter se conjugue « vous écoutez ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée avec « elles » ?',
                        'choices' => [
                            ['choice_text' => 'Elles arrive à midi.', 'is_correct' => false],
                            ['choice_text' => 'Elles arrivez à midi.', 'is_correct' => false],
                            ['choice_text' => 'Elles arrivent à midi.', 'is_correct' => true],
                            ['choice_text' => 'Elles arriver à midi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Elles » demande la troisième personne du pluriel. Le verbe arriver devient donc « arrivent ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Tu comprend la leçon. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Tu comprends la leçon.', 'is_correct' => true],
                            ['choice_text' => 'Tu comprendes la leçon.', 'is_correct' => false],
                            ['choice_text' => 'Tu comprenez la leçon.', 'is_correct' => false],
                            ['choice_text' => 'Tu comprenons la leçon.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », comprendre donne « tu comprends » : le s final est obligatoire.',
                    ],
                    [
                        'question' => 'Quel choix convient : « Je ___ mes amis ce soir » ?',
                        'choices' => [
                            ['choice_text' => 'voit', 'is_correct' => false],
                            ['choice_text' => 'voyons', 'is_correct' => false],
                            ['choice_text' => 'vois', 'is_correct' => true],
                            ['choice_text' => 'voyez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe voir se conjugue « je vois » à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe « devoir » au présent avec « vous » ?',
                        'choices' => [
                            ['choice_text' => 'Vous devons partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous doit partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous devoir partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez partir maintenant.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « vous », devoir donne « vous devez ». Cette forme exprime ici une obligation.',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ pour Fès demain matin. »',
                        'choices' => [
                            ['choice_text' => 'partons', 'is_correct' => true],
                            ['choice_text' => 'partent', 'is_correct' => false],
                            ['choice_text' => 'partez', 'is_correct' => false],
                            ['choice_text' => 'part', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », partir donne « nous partons ».',
                    ],
                    [
                        'question' => 'Complétez : « Elle ___ toujours la vérité. »',
                        'choices' => [
                            ['choice_text' => 'dis', 'is_correct' => false],
                            ['choice_text' => 'dit', 'is_correct' => true],
                            ['choice_text' => 'disons', 'is_correct' => false],
                            ['choice_text' => 'dites', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », dire se conjugue « elle dit ».',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes pronominaux du quotidien',
                'description' => 'Apprenez à conjuguer les verbes pronominaux les plus courants et à placer correctement les pronoms me, te, se, nous et vous.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je ___ à sept heures. »',
                        'choices' => [
                            ['choice_text' => 'me lève', 'is_correct' => true],
                            ['choice_text' => 'me lèves', 'is_correct' => false],
                            ['choice_text' => 'me levons', 'is_correct' => false],
                            ['choice_text' => 'se lève', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « se lever » avec « je » devient « je me lève ». Le pronom réfléchi doit correspondre au sujet.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu se réveilles tôt.', 'is_correct' => false],
                            ['choice_text' => 'Tu te réveille tôt.', 'is_correct' => false],
                            ['choice_text' => 'Tu te réveillons tôt.', 'is_correct' => false],
                            ['choice_text' => 'Tu te réveilles tôt.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « tu », le verbe pronominal « se réveiller » prend le pronom « te » et la forme verbale « réveilles ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Nous ___ rapidement le matin » ?',
                        'choices' => [
                            ['choice_text' => 'nous prépare', 'is_correct' => false],
                            ['choice_text' => 'nous préparons', 'is_correct' => true],
                            ['choice_text' => 'nous préparez', 'is_correct' => false],
                            ['choice_text' => 'se préparons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le pronom réfléchi est aussi « nous » : « nous nous préparons ».',
                    ],
                    [
                        'question' => 'Samia raconte sa soirée. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Elle se couchent à onze heures.', 'is_correct' => false],
                            ['choice_text' => 'Elle se couches à onze heures.', 'is_correct' => false],
                            ['choice_text' => 'Elle se couche à onze heures.', 'is_correct' => true],
                            ['choice_text' => 'Elle se couchez à onze heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », le pronom réfléchi est « se » et le verbe coucher prend la forme « couche ».',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ avant de sortir. »',
                        'choices' => [
                            ['choice_text' => 'vous habilles', 'is_correct' => false],
                            ['choice_text' => 'vous habillez', 'is_correct' => true],
                            ['choice_text' => 'se habillez', 'is_correct' => false],
                            ['choice_text' => 'vous habillons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », s’habiller donne « vous vous habillez ».',
                    ],
                    [
                        'question' => 'Quel pronom réfléchi convient avec « ils » ?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => true],
                            ['choice_text' => 'nous', 'is_correct' => false],
                        ],
                        'explanation' => 'À la troisième personne du pluriel, le pronom réfléchi est « se » : « ils se lavent », « ils se lèvent ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je me habille à sept heures. » Quelle phrase corrige l’erreur ?',
                        'choices' => [
                            ['choice_text' => 'Je s’habille à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Je m’habilles à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Je m’habillons à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Je m’habille à sept heures.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant un verbe qui commence par h muet, « me » devient « m’ » : « je m’habille ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une habitude du matin ?',
                        'choices' => [
                            ['choice_text' => 'Je me réveille, puis je me lève.', 'is_correct' => true],
                            ['choice_text' => 'Je me réveilles, puis je me lèves.', 'is_correct' => false],
                            ['choice_text' => 'Je se réveille, puis je me lève.', 'is_correct' => false],
                            ['choice_text' => 'Je me réveille, puis je se lève.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », les deux verbes pronominaux utilisent « me » : « je me réveille » et « je me lève ».',
                    ],
                    [
                        'question' => 'Complétez : « Elles ___ Sara et Lina. »',
                        'choices' => [
                            ['choice_text' => 's’appelle', 'is_correct' => false],
                            ['choice_text' => 's’appelez', 'is_correct' => false],
                            ['choice_text' => 's’appelons', 'is_correct' => false],
                            ['choice_text' => 's’appellent', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « elles », s’appeler donne « elles s’appellent » : pronom « se » et terminaison -ent.',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « tu » pour le verbe « se laver » ?',
                        'choices' => [
                            ['choice_text' => 'tu te laves', 'is_correct' => true],
                            ['choice_text' => 'tu se laves', 'is_correct' => false],
                            ['choice_text' => 'tu te lave', 'is_correct' => false],
                            ['choice_text' => 'tu te lavons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « se laver » avec « tu » donne « tu te laves ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je me ne couche pas tard.', 'is_correct' => false],
                            ['choice_text' => 'Je ne me couches pas tard.', 'is_correct' => false],
                            ['choice_text' => 'Je ne me couche pas tard.', 'is_correct' => true],
                            ['choice_text' => 'Je ne se couche pas tard.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une négation avec un verbe pronominal, le pronom reste avant le verbe : « je ne me couche pas ».',
                    ],
                ],
            ],
            [
                'title' => 'Infinitif ou verbe conjugué ?',
                'description' => 'Distinguez les formes infinitives des formes conjuguées et appliquez cette différence après quelques constructions très fréquentes.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle forme convient après « Je veux » ?',
                        'choices' => [
                            ['choice_text' => 'pars', 'is_correct' => false],
                            ['choice_text' => 'part', 'is_correct' => false],
                            ['choice_text' => 'partir', 'is_correct' => true],
                            ['choice_text' => 'partons', 'is_correct' => false],
                        ],
                        'explanation' => 'Après le verbe « vouloir » conjugué, on emploie ici l’infinitif : « je veux partir ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous aimons ___ le français. »',
                        'choices' => [
                            ['choice_text' => 'étudions', 'is_correct' => false],
                            ['choice_text' => 'étudier', 'is_correct' => true],
                            ['choice_text' => 'étudiez', 'is_correct' => false],
                            ['choice_text' => 'étudient', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « aimer », le deuxième verbe reste à l’infinitif : « nous aimons étudier ».',
                    ],
                    [
                        'question' => 'Sarah propose de passer chez vous. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Je peux viens demain.', 'is_correct' => false],
                            ['choice_text' => 'Je peux venu demain.', 'is_correct' => false],
                            ['choice_text' => 'Je peux venons demain.', 'is_correct' => false],
                            ['choice_text' => 'Je peux venir demain.', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « pouvoir » conjugué, le verbe suivant reste à l’infinitif : « je peux venir ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je dois fais le ménage. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Je dois faire le ménage.', 'is_correct' => true],
                            ['choice_text' => 'Je dois fait le ménage.', 'is_correct' => false],
                            ['choice_text' => 'Je dois faisons le ménage.', 'is_correct' => false],
                            ['choice_text' => 'Je dois faites le ménage.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « devoir », le deuxième verbe reste à l’infinitif : « je dois faire ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Elle préfère ___ à pied » ?',
                        'choices' => [
                            ['choice_text' => 'marche', 'is_correct' => false],
                            ['choice_text' => 'marchons', 'is_correct' => false],
                            ['choice_text' => 'marchez', 'is_correct' => false],
                            ['choice_text' => 'marcher', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « préférer », on garde l’infinitif : « elle préfère marcher ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Il va ___ demain » ?',
                        'choices' => [
                            ['choice_text' => 'voyage', 'is_correct' => false],
                            ['choice_text' => 'voyageons', 'is_correct' => false],
                            ['choice_text' => 'voyager', 'is_correct' => true],
                            ['choice_text' => 'voyagez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se forme avec « aller » conjugué et un infinitif : « il va voyager ».',
                    ],
                    [
                        'question' => 'Quelle phrase est incorrecte parce que le deuxième verbe n’est pas à l’infinitif ?',
                        'choices' => [
                            ['choice_text' => 'Nous voulons apprendre le français.', 'is_correct' => false],
                            ['choice_text' => 'Nous voulons apprendrons le français.', 'is_correct' => true],
                            ['choice_text' => 'Nous apprenons le français chaque jour.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons apprendre le français.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « vouloir », le verbe suivant doit rester à l’infinitif. Il faut donc dire « nous voulons apprendre », et non « nous voulons apprendrons ».',
                    ],
                    [
                        'question' => 'Complétez : « Tu dois ___ la fenêtre avant de partir. »',
                        'choices' => [
                            ['choice_text' => 'ouvres', 'is_correct' => false],
                            ['choice_text' => 'ouvre', 'is_correct' => false],
                            ['choice_text' => 'ouvrez', 'is_correct' => false],
                            ['choice_text' => 'ouvrir', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « dois », le verbe reste à l’infinitif : « tu dois ouvrir ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un infinitif après « pour » ?',
                        'choices' => [
                            ['choice_text' => 'Je viens pour travaille.', 'is_correct' => false],
                            ['choice_text' => 'Je viens pour travaillons.', 'is_correct' => false],
                            ['choice_text' => 'Je viens pour travailler.', 'is_correct' => true],
                            ['choice_text' => 'Je viens pour travaillent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour dire le but, on met l’infinitif après « pour » : « pour travailler ».',
                    ],
                    [
                        'question' => 'Que dit-on d’une amie qui adore les romans ? Quelle phrase est bien formée ?',
                        'choices' => [
                            ['choice_text' => 'Elle aime lire le soir.', 'is_correct' => true],
                            ['choice_text' => 'Elle aime lit le soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle aime lis le soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle aime lisez le soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « aimer », le verbe complément est à l’infinitif : « elle aime lire ».',
                    ],
                ],
            ],
            [
                'title' => 'Corriger les erreurs de conjugaison',
                'description' => 'Repérez les erreurs les plus fréquentes dans les formes verbales et choisissez la correction qui correspond au sujet et au contexte.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un apprenant écrit : « Tu va au marché le samedi. » Quelle phrase corrige l’erreur ?',
                        'choices' => [
                            ['choice_text' => 'Tu vais au marché le samedi.', 'is_correct' => false],
                            ['choice_text' => 'Tu vas au marché le samedi.', 'is_correct' => true],
                            ['choice_text' => 'Tu allez au marché le samedi.', 'is_correct' => false],
                            ['choice_text' => 'Tu aller au marché le samedi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », aller donne « tu vas ». La forme « va » va avec « il », « elle » ou « on ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Nous mangez ensemble. » Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Nous mange ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Nous mangeons ensemble.', 'is_correct' => true],
                            ['choice_text' => 'Nous mangent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Nous manger ensemble.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe manger se conjugue « mangeons ». La terminaison -ez appartient à « vous ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Tu parle trop vite » ?',
                        'choices' => [
                            ['choice_text' => 'Tu parles trop vite.', 'is_correct' => true],
                            ['choice_text' => 'Tu parlent trop vite.', 'is_correct' => false],
                            ['choice_text' => 'Tu parlons trop vite.', 'is_correct' => false],
                            ['choice_text' => 'Tu parlez trop vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », parler prend -es : « tu parles ».',
                    ],
                    [
                        'question' => 'Un élève parle de sa sœur. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Elle apprend l’anglais chaque soir.', 'is_correct' => true],
                            ['choice_text' => 'Elle apprends l’anglais chaque soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle apprenez l’anglais chaque soir.', 'is_correct' => false],
                            ['choice_text' => 'Elle apprendre l’anglais chaque soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », apprendre donne « elle apprend », sans s. Le s va avec « je » et « tu ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Ils travaille dans un bureau. » Que faut-il écrire ?',
                        'choices' => [
                            ['choice_text' => 'Ils travailles dans un bureau.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillez dans un bureau.', 'is_correct' => false],
                            ['choice_text' => 'Ils travailler dans un bureau.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent dans un bureau.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « ils » demande la troisième personne du pluriel : « ils travaillent ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Tu est content et ils sont fatigués » ?',
                        'choices' => [
                            ['choice_text' => 'Tu es content et ils êtes fatigués.', 'is_correct' => false],
                            ['choice_text' => 'Tu êtes content et ils sont fatigués.', 'is_correct' => false],
                            ['choice_text' => 'Tu es content et ils sont fatigués.', 'is_correct' => true],
                            ['choice_text' => 'Tu es content et ils est fatigués.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », être donne « es », et avec « ils », « sont ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Elles est en retard ce matin. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont en retard ce matin.', 'is_correct' => true],
                            ['choice_text' => 'Elles êtes en retard ce matin.', 'is_correct' => false],
                            ['choice_text' => 'Elles es en retard ce matin.', 'is_correct' => false],
                            ['choice_text' => 'Elles suis en retard ce matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elles », être donne « sont ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Je fait la cuisine tous les jours. » Quelle phrase corrige l’erreur ?',
                        'choices' => [
                            ['choice_text' => 'Je faire la cuisine tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je faisons la cuisine tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je font la cuisine tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je fais la cuisine tous les jours.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « je », faire donne « je fais ». « Fait » va avec « il » ou « elle ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Ils ont manger au restaurant » dans une construction de futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Ils vont mangé au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Ils vont mangent au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Ils vont manger au restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Ils allons manger au restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se construit avec aller conjugué et un infinitif : « ils vont manger ».',
                    ],
                    [
                        'question' => 'Lina n’est pas libre aujourd’hui. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Elle peux venir demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle peut vient demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle pouvoir venir demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle peut venir demain.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « elle », pouvoir se conjugue « elle peut ». Le verbe suivant reste à l’infinitif : « venir ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Je se promène dans le parc le soir. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Je me promènes dans le parc le soir.', 'is_correct' => false],
                            ['choice_text' => 'Je me promène dans le parc le soir.', 'is_correct' => true],
                            ['choice_text' => 'Je me promènent dans le parc le soir.', 'is_correct' => false],
                            ['choice_text' => 'Je me promenons dans le parc le soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le pronom réfléchi est « me » : « je me promène ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous doivent finir avant midi. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Nous doit finir avant midi.', 'is_correct' => false],
                            ['choice_text' => 'Nous devez finir avant midi.', 'is_correct' => false],
                            ['choice_text' => 'Nous devons finir avant midi.', 'is_correct' => true],
                            ['choice_text' => 'Nous devoir finir avant midi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », devoir donne « nous devons ». Le second verbe reste à l’infinitif : « finir ».',
                    ],
                ],
            ],
            [
                'title' => 'Défi final : conjuguer en situation',
                'description' => 'Mobilisez les principales règles de conjugaison du niveau débutant dans des phrases et des échanges proches des usages réels.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous écrivez à un ami : « Chaque matin, je ___ le bus à sept heures. »',
                        'choices' => [
                            ['choice_text' => 'prends', 'is_correct' => true],
                            ['choice_text' => 'prend', 'is_correct' => false],
                            ['choice_text' => 'prenons', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe prendre se conjugue « je prends ». L’expression « chaque matin » indique une habitude.',
                    ],
                    [
                        'question' => 'Une collègue vous demande : « Vous ___ disponibles demain ? »',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                            ['choice_text' => 'sommes', 'is_correct' => false],
                            ['choice_text' => 'êtes', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec « vous », être donne « êtes ».',
                    ],
                    [
                        'question' => 'Un étudiant veut expliquer son projet : « Je veux ___ ce document demain. »',
                        'choices' => [
                            ['choice_text' => 'termine', 'is_correct' => false],
                            ['choice_text' => 'terminez', 'is_correct' => false],
                            ['choice_text' => 'terminer', 'is_correct' => true],
                            ['choice_text' => 'terminons', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « je veux », on emploie l’infinitif : « je veux terminer ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une routine matinale ?',
                        'choices' => [
                            ['choice_text' => 'Je me lève, je prends un café et je partir au travail.', 'is_correct' => false],
                            ['choice_text' => 'Je me lève, je prend un café et je pars au travail.', 'is_correct' => false],
                            ['choice_text' => 'Je me lèves, je prends un café et je pars au travail.', 'is_correct' => false],
                            ['choice_text' => 'Je me lève, je prends un café et je pars au travail.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les trois verbes doivent être correctement conjugués avec « je » : « je me lève », « je prends », « je pars ».',
                    ],
                    [
                        'question' => 'Vous parlez de vos parents : « Ils ___ dans une petite ville près de Rabat. »',
                        'choices' => [
                            ['choice_text' => 'habite', 'is_correct' => false],
                            ['choice_text' => 'habitent', 'is_correct' => true],
                            ['choice_text' => 'habitez', 'is_correct' => false],
                            ['choice_text' => 'habiter', 'is_correct' => false],
                        ],
                        'explanation' => '« Ils » demande la troisième personne du pluriel. Le verbe habiter devient donc « habitent ».',
                    ],
                    [
                        'question' => 'Vous êtes au restaurant avec des amis. Quelle phrase est juste ?',
                        'choices' => [
                            ['choice_text' => 'Nous voulons commander, mais nous devons choisi le dessert.', 'is_correct' => false],
                            ['choice_text' => 'Nous voulons commander, mais nous devons choisir le dessert.', 'is_correct' => true],
                            ['choice_text' => 'Nous voulez commander, mais nous devons choisir le dessert.', 'is_correct' => false],
                            ['choice_text' => 'Nous voulons commander, mais nous devez choisir le dessert.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous voulons » et « nous devons » sont bien conjugués, et « choisir » reste à l’infinitif.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une habitude de lecture ?',
                        'choices' => [
                            ['choice_text' => 'Elle lire avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Elle lis avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Elle lit avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Elle lisez avant de dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », lire se conjugue « elle lit ». L’expression « avant de dormir » contient ensuite l’infinitif « dormir ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Vous choisissez et vous attend le même bus. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Vous choisissez et vous attends le même bus.', 'is_correct' => false],
                            ['choice_text' => 'Vous choisissez et vous attendent le même bus.', 'is_correct' => false],
                            ['choice_text' => 'Vous choisissez et vous attendez le même bus.', 'is_correct' => true],
                            ['choice_text' => 'Vous choisissez et vous attendre le même bus.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », attendre donne « vous attendez ». Les deux verbes ont le même sujet.',
                    ],
                    [
                        'question' => 'Vous racontez ce que fait votre sœur : « Elle ___ dans le parc, puis ___ pour arriver à l’heure. »',
                        'choices' => [
                            ['choice_text' => 'se promène / se dépêche', 'is_correct' => true],
                            ['choice_text' => 'se promènes / se dépêche', 'is_correct' => false],
                            ['choice_text' => 'se promène / se dépêchent', 'is_correct' => false],
                            ['choice_text' => 'se promènent / se dépêche', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », les deux verbes pronominaux prennent « se » et la troisième personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour exprimer une obligation ?',
                        'choices' => [
                            ['choice_text' => 'Nous devons travaillons aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous devons travaille aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous devoir travailler aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous devons travailler aujourd’hui.', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « devoir », le verbe qui suit est à l’infinitif : « nous devons travailler ».',
                    ],
                    [
                        'question' => 'Quel choix complète : « Mes amis ___ souvent chez moi le week-end. »',
                        'choices' => [
                            ['choice_text' => 'vient', 'is_correct' => false],
                            ['choice_text' => 'viennent', 'is_correct' => true],
                            ['choice_text' => 'venez', 'is_correct' => false],
                            ['choice_text' => 'venir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « mes amis » correspond à « ils ». Le verbe venir devient donc « viennent ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « avoir » pour parler de l’âge ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur est vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur ont vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur a vingt ans.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur as vingt ans.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, on exprime l’âge avec le verbe avoir : « ma sœur a vingt ans ».',
                    ],
                    [
                        'question' => 'Dans une classe, une phrase décrit le professeur et les étudiants. Laquelle est bien conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Le professeur expliquent la règle et les étudiants prends des notes.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur explique la règle et les étudiants prennent des notes.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur explique la règle et les étudiants prend des notes.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur expliquer la règle et les étudiants prennent des notes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le professeur explique » est au singulier, tandis que « les étudiants prennent » est au pluriel. Les deux formes correspondent correctement à leurs sujets respectifs.',
                    ],
                    [
                        'question' => 'Vous quittez une réunion : « Je ___ désolé, mais je ___ partir maintenant. »',
                        'choices' => [
                            ['choice_text' => 'suis / dois', 'is_correct' => true],
                            ['choice_text' => 'es / dois', 'is_correct' => false],
                            ['choice_text' => 'suis / doit', 'is_correct' => false],
                            ['choice_text' => 'suis / devons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », on dit « je suis » et « je dois ».',
                    ],
                    [
                        'question' => 'Un ami raconte sa soirée de révision. Quelle phrase est bien conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons étudier, puis nous allons faire une pause.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons étudions, puis nous faisons une pause.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons étudier, puis nous fait une pause.', 'is_correct' => false],
                            ['choice_text' => 'Nous allez étudier, puis nous faisons une pause.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « nous allons », le verbe reste à l’infinitif : « étudier ». Ensuite, « nous faisons » est la forme correcte de faire avec « nous ».',
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
