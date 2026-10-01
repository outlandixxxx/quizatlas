<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verbs-conjugation')->firstOrFail();

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
                            ['choice_text' => 'mange', 'is_correct' => true],
                            ['choice_text' => 'Paul', 'is_correct' => false],
                            ['choice_text' => 'pomme', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                        ],
                        'explanation' => '« Mange » exprime l’action réalisée par Paul. C’est donc le verbe de la phrase.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif du verbe « parlons » ?',
                        'choices' => [
                            ['choice_text' => 'parler', 'is_correct' => true],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'parlé', 'is_correct' => false],
                            ['choice_text' => 'parlant', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « parlons » vient du verbe « parler ». L’infinitif est la forme non conjuguée du verbe.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif du verbe « finissez » ?',
                        'choices' => [
                            ['choice_text' => 'finir', 'is_correct' => true],
                            ['choice_text' => 'finissez', 'is_correct' => false],
                            ['choice_text' => 'fini', 'is_correct' => false],
                            ['choice_text' => 'finissant', 'is_correct' => false],
                        ],
                        'explanation' => '« Finissez » est une forme conjuguée du verbe « finir ». Son infinitif se termine par -ir.',
                    ],
                    [
                        'question' => 'Quel mot est un verbe à l’infinitif ?',
                        'choices' => [
                            ['choice_text' => 'voyager', 'is_correct' => true],
                            ['choice_text' => 'voyage', 'is_correct' => false],
                            ['choice_text' => 'voyageur', 'is_correct' => false],
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
                        'question' => 'Quel verbe complète naturellement : « Les enfants ___ dans le jardin. »',
                        'choices' => [
                            ['choice_text' => 'jouent', 'is_correct' => true],
                            ['choice_text' => 'jouer', 'is_correct' => false],
                            ['choice_text' => 'joue', 'is_correct' => false],
                            ['choice_text' => 'jouez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « les enfants » est à la troisième personne du pluriel. Le verbe « jouer » prend donc la forme « jouent ».',
                    ],
                    [
                        'question' => 'Dans « Tu lis un roman », quel est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'lis', 'is_correct' => true],
                            ['choice_text' => 'roman', 'is_correct' => false],
                            ['choice_text' => 'tu', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                        ],
                        'explanation' => '« Lis » exprime l’action accomplie par le sujet « tu ». C’est la forme conjuguée du verbe « lire ».',
                    ],
                    [
                        'question' => 'Quel infinitif correspond à « faisons » ?',
                        'choices' => [
                            ['choice_text' => 'faire', 'is_correct' => true],
                            ['choice_text' => 'fairez', 'is_correct' => false],
                            ['choice_text' => 'fait', 'is_correct' => false],
                            ['choice_text' => 'faisir', 'is_correct' => false],
                        ],
                        'explanation' => '« Faisons » est une forme du verbe irrégulier « faire ». Son infinitif est « faire ».',
                    ],
                    [
                        'question' => 'Quelle forme est conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'prendre', 'is_correct' => false],
                            ['choice_text' => 'prendre', 'is_correct' => false],
                            ['choice_text' => 'prends', 'is_correct' => true],
                            ['choice_text' => 'pris', 'is_correct' => false],
                        ],
                        'explanation' => '« Prends » est une forme conjuguée du verbe « prendre ». « Prendre » est l’infinitif et « pris » est un participe passé.',
                    ],
                    [
                        'question' => 'Quel verbe convient dans « Je ___ mes devoirs après le dîner » ?',
                        'choices' => [
                            ['choice_text' => 'fais', 'is_correct' => true],
                            ['choice_text' => 'faire', 'is_correct' => false],
                            ['choice_text' => 'fait', 'is_correct' => false],
                            ['choice_text' => 'font', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « je », le verbe « faire » se conjugue « je fais » au présent.',
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
                        'question' => 'Complétez : « Je ___ français à l’université. »',
                        'choices' => [
                            ['choice_text' => 'étudie', 'is_correct' => true],
                            ['choice_text' => 'étudies', 'is_correct' => false],
                            ['choice_text' => 'étudions', 'is_correct' => false],
                            ['choice_text' => 'étudiez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe « étudier » prend la terminaison -e au présent : « j’étudie ».',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « tu » ? « Tu ___ le français chaque soir. »',
                        'choices' => [
                            ['choice_text' => 'révises', 'is_correct' => true],
                            ['choice_text' => 'révise', 'is_correct' => false],
                            ['choice_text' => 'révisons', 'is_correct' => false],
                            ['choice_text' => 'révisez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », le verbe « réviser » se conjugue « tu révises ». La terminaison -es est caractéristique de cette personne pour les verbes réguliers en -er.',
                    ],
                    [
                        'question' => 'Quel choix complète « Nous ___ à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'commençons', 'is_correct' => true],
                            ['choice_text' => 'commence', 'is_correct' => false],
                            ['choice_text' => 'commencez', 'is_correct' => false],
                            ['choice_text' => 'commencent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », commencer donne « nous commençons ». La cédille permet de conserver le son [s] devant o.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Vous regardez un film.', 'is_correct' => true],
                            ['choice_text' => 'Vous regarde un film.', 'is_correct' => false],
                            ['choice_text' => 'Vous regardons un film.', 'is_correct' => false],
                            ['choice_text' => 'Vous regardent un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe « regarder » se conjugue « vous regardez » au présent.',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ leurs amis après le cours. »',
                        'choices' => [
                            ['choice_text' => 'retrouvent', 'is_correct' => true],
                            ['choice_text' => 'retrouve', 'is_correct' => false],
                            ['choice_text' => 'retrouvez', 'is_correct' => false],
                            ['choice_text' => 'retrouvons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « ils » demande la troisième personne du pluriel : « ils retrouvent ».',
                    ],
                    [
                        'question' => 'Quelle terminaison complète correctement « nous aim___ » ?',
                        'choices' => [
                            ['choice_text' => '-ons', 'is_correct' => true],
                            ['choice_text' => '-e', 'is_correct' => false],
                            ['choice_text' => '-es', 'is_correct' => false],
                            ['choice_text' => '-ez', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les verbes réguliers en -er, la terminaison de « nous » au présent est généralement -ons : « nous aimons ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Elle travailler à Paris. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Elle travaille à Paris.', 'is_correct' => true],
                            ['choice_text' => 'Elle travailles à Paris.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillons à Paris.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillez à Paris.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », le verbe « travailler » se conjugue « elle travaille ». L’infinitif « travailler » ne convient pas après le sujet ici.',
                    ],
                    [
                        'question' => 'Quel choix complète : « Nous ___ souvent au restaurant le vendredi. »',
                        'choices' => [
                            ['choice_text' => 'mangeons', 'is_correct' => true],
                            ['choice_text' => 'mangent', 'is_correct' => false],
                            ['choice_text' => 'mangez', 'is_correct' => false],
                            ['choice_text' => 'mange', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe manger prend la forme « mangeons ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « voyager » au présent avec « je » ?',
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
                            ['choice_text' => 'fermez', 'is_correct' => true],
                            ['choice_text' => 'ferme', 'is_correct' => false],
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
                        'question' => 'Quelle phrase est correctement conjuguée ?',
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
                            ['choice_text' => 'suis', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'est', 'is_correct' => false],
                            ['choice_text' => 'sommes', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe être se conjugue « je suis ».',
                    ],
                    [
                        'question' => 'Quelle forme du verbe avoir convient avec « tu » ?',
                        'choices' => [
                            ['choice_text' => 'as', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'ai', 'is_correct' => false],
                            ['choice_text' => 'avez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent de « avoir » avec « tu » donne « tu as ».',
                    ],
                    [
                        'question' => '« Nous ___ au marché tous les samedis. »',
                        'choices' => [
                            ['choice_text' => 'allons', 'is_correct' => true],
                            ['choice_text' => 'allez', 'is_correct' => false],
                            ['choice_text' => 'vont', 'is_correct' => false],
                            ['choice_text' => 'vais', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe aller se conjugue « nous allons ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle fait ses devoirs.', 'is_correct' => true],
                            ['choice_text' => 'Elle fais ses devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle font ses devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Elle faire ses devoirs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », faire se conjugue « elle fait ». La forme « font » correspond à « ils/elles ».',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ très gentil avec nous. »',
                        'choices' => [
                            ['choice_text' => 'êtes', 'is_correct' => true],
                            ['choice_text' => 'êtes', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », la forme correcte du verbe être est « êtes ». Cette forme comporte un accent circonflexe.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe avoir ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons beaucoup de travail.', 'is_correct' => true],
                            ['choice_text' => 'Nous avez beaucoup de travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous a beaucoup de travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous ont beaucoup de travail.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « nous » demande la forme « avons ». Le verbe avoir est ici utilisé pour exprimer la possession ou la quantité de travail.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Ils va à l’université chaque matin. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils vont à l’université chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Ils vas à l’université chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Ils allez à l’université chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Ils aller à l’université chaque matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils », le verbe aller se conjugue « vont ». Le sujet pluriel impose donc cette forme.',
                    ],
                    [
                        'question' => 'Quel choix complète « Tu ___ raison » ?',
                        'choices' => [
                            ['choice_text' => 'as', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'as eu', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « avoir raison » utilise le verbe avoir. Avec « tu », on dit « tu as raison ».',
                    ],
                    [
                        'question' => 'Quelle phrase correspond à « I am tired » en français ?',
                        'choices' => [
                            ['choice_text' => 'Je suis fatigué.', 'is_correct' => true],
                            ['choice_text' => 'J’ai fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Je fais fatigué.', 'is_correct' => false],
                            ['choice_text' => 'Je vais fatigué.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour exprimer un état comme la fatigue, on utilise ici le verbe être : « je suis fatigué ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Elles ___ un nouvel appartement » ?',
                        'choices' => [
                            ['choice_text' => 'ont', 'is_correct' => true],
                            ['choice_text' => 'ont', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'avez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « elles », le verbe avoir prend la forme « ont ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « faire » avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'Nous faisons du sport.', 'is_correct' => true],
                            ['choice_text' => 'Nous faites du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous font du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous fais du sport.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent de faire avec « nous » donne « nous faisons ». C’est une forme irrégulière qu’il faut mémoriser.',
                    ],
                    [
                        'question' => 'Quel énoncé est correct ?',
                        'choices' => [
                            ['choice_text' => 'Je vais au travail à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je va au travail à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je vais au travail hier à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je aller au travail à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe aller avec « je » prend la forme « vais ». La phrase décrit ici une habitude ou un déplacement prévu.',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ un rendez-vous demain. »',
                        'choices' => [
                            ['choice_text' => 'avez', 'is_correct' => true],
                            ['choice_text' => 'avez', 'is_correct' => false],
                            ['choice_text' => 'as', 'is_correct' => false],
                            ['choice_text' => 'ont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », le verbe avoir se conjugue « vous avez ».',
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
                            ['choice_text' => 'finis', 'is_correct' => true],
                            ['choice_text' => 'finit', 'is_correct' => false],
                            ['choice_text' => 'finissons', 'is_correct' => false],
                            ['choice_text' => 'finissez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », finir se conjugue « je finis » au présent.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « choisir » ?',
                        'choices' => [
                            ['choice_text' => 'Nous choisissons un restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Nous choisit un restaurant.', 'is_correct' => false],
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
                        'question' => 'Complétez : « Tu ___ ton billet dans ta poche. »',
                        'choices' => [
                            ['choice_text' => 'prends', 'is_correct' => true],
                            ['choice_text' => 'prend', 'is_correct' => false],
                            ['choice_text' => 'prenons', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », le verbe prendre se conjugue « tu prends » au présent.',
                    ],
                    [
                        'question' => 'Quel est l’infinitif de « mettons » ?',
                        'choices' => [
                            ['choice_text' => 'mettre', 'is_correct' => true],
                            ['choice_text' => 'mettrez', 'is_correct' => false],
                            ['choice_text' => 'mets', 'is_correct' => false],
                            ['choice_text' => 'misser', 'is_correct' => false],
                        ],
                        'explanation' => '« Mettons » vient du verbe « mettre ». Son infinitif est donc « mettre ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils prennent le train à sept heures.', 'is_correct' => true],
                            ['choice_text' => 'Ils prend le train à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils prenez le train à sept heures.', 'is_correct' => false],
                            ['choice_text' => 'Ils prendre le train à sept heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ils », prendre donne « ils prennent ». La forme est irrégulière et mérite d’être mémorisée.',
                    ],
                    [
                        'question' => 'Quel verbe complète « Elle ___ son manteau avant de sortir » ?',
                        'choices' => [
                            ['choice_text' => 'met', 'is_correct' => true],
                            ['choice_text' => 'mets', 'is_correct' => false],
                            ['choice_text' => 'mettons', 'is_correct' => false],
                            ['choice_text' => 'mettez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », mettre se conjugue « elle met ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Nous ___ le bus tous les matins » ?',
                        'choices' => [
                            ['choice_text' => 'prenons', 'is_correct' => true],
                            ['choice_text' => 'prennent', 'is_correct' => false],
                            ['choice_text' => 'prenez', 'is_correct' => false],
                            ['choice_text' => 'prend', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », prendre se conjugue « nous prenons ».',
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
                        'question' => 'Quelle phrase utilise correctement le verbe « sortir » ?',
                        'choices' => [
                            ['choice_text' => 'Je sors à dix-huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je sort à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je sortons à dix-huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je sortir à dix-huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe sortir se conjugue « je sors » à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Complétez : « Ils ___ rapidement de la salle. »',
                        'choices' => [
                            ['choice_text' => 'sortent', 'is_correct' => true],
                            ['choice_text' => 'sors', 'is_correct' => false],
                            ['choice_text' => 'sort', 'is_correct' => false],
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
                        'question' => 'Quelle forme correspond à « nous » dans le verbe « choisir » ?',
                        'choices' => [
                            ['choice_text' => 'choisissons', 'is_correct' => true],
                            ['choice_text' => 'choisissez', 'is_correct' => false],
                            ['choice_text' => 'choisissent', 'is_correct' => false],
                            ['choice_text' => 'choisit', 'is_correct' => false],
                        ],
                        'explanation' => 'Au présent, « choisir » donne « nous choisissons ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Tu ___ souvent de bonnes questions » ?',
                        'choices' => [
                            ['choice_text' => 'poses', 'is_correct' => true],
                            ['choice_text' => 'pose', 'is_correct' => false],
                            ['choice_text' => 'posons', 'is_correct' => false],
                            ['choice_text' => 'posez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », poser se conjugue « tu poses ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il répond rapidement.', 'is_correct' => true],
                            ['choice_text' => 'Il réponds rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Il répondent rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Il répondre rapidement.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « il », le verbe répondre se conjugue « il répond ». La forme « réponds » appartient notamment à « je/tu » selon le verbe.',
                    ],
                    [
                        'question' => 'Complétez : « Nous ___ un café après le cours. »',
                        'choices' => [
                            ['choice_text' => 'buvons', 'is_correct' => true],
                            ['choice_text' => 'boivent', 'is_correct' => false],
                            ['choice_text' => 'boit', 'is_correct' => false],
                            ['choice_text' => 'buvez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe boire prend la forme irrégulière « buvons ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Vous ___ souvent cette chanson » ?',
                        'choices' => [
                            ['choice_text' => 'écoutez', 'is_correct' => true],
                            ['choice_text' => 'écoutons', 'is_correct' => false],
                            ['choice_text' => 'écoute', 'is_correct' => false],
                            ['choice_text' => 'écoutent', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », écouter se conjugue « vous écoutez ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée avec « elles » ?',
                        'choices' => [
                            ['choice_text' => 'Elles arrivent à midi.', 'is_correct' => true],
                            ['choice_text' => 'Elles arrive à midi.', 'is_correct' => false],
                            ['choice_text' => 'Elles arrivez à midi.', 'is_correct' => false],
                            ['choice_text' => 'Elles arriver à midi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Elles » demande la troisième personne du pluriel. Le verbe arriver devient donc « arrivent ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Tu prend le train. » Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu prends le train.', 'is_correct' => true],
                            ['choice_text' => 'Tu prend le train.', 'is_correct' => false],
                            ['choice_text' => 'Tu prenez le train.', 'is_correct' => false],
                            ['choice_text' => 'Tu prenons le train.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », prendre se conjugue « tu prends ». Le S final appartient à cette forme verbale.',
                    ],
                    [
                        'question' => 'Quel choix convient : « Je ___ mes amis ce soir » ?',
                        'choices' => [
                            ['choice_text' => 'vois', 'is_correct' => true],
                            ['choice_text' => 'voit', 'is_correct' => false],
                            ['choice_text' => 'voyons', 'is_correct' => false],
                            ['choice_text' => 'voyez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe voir se conjugue « je vois » à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe « devoir » au présent avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'Nous devons partir maintenant.', 'is_correct' => true],
                            ['choice_text' => 'Nous devez partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Nous doit partir maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Nous devoir partir maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », devoir se conjugue « nous devons ». Cette forme exprime ici une nécessité.',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « ils » pour le verbe « venir » ?',
                        'choices' => [
                            ['choice_text' => 'viennent', 'is_correct' => true],
                            ['choice_text' => 'venons', 'is_correct' => false],
                            ['choice_text' => 'venez', 'is_correct' => false],
                            ['choice_text' => 'viens', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent de venir avec « ils » donne « ils viennent ».',
                    ],
                    [
                        'question' => 'Complétez : « Elle ___ toujours la vérité. »',
                        'choices' => [
                            ['choice_text' => 'dit', 'is_correct' => true],
                            ['choice_text' => 'dis', 'is_correct' => false],
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
                            ['choice_text' => 'Tu te réveilles tôt.', 'is_correct' => true],
                            ['choice_text' => 'Tu se réveilles tôt.', 'is_correct' => false],
                            ['choice_text' => 'Tu te réveille tôt.', 'is_correct' => false],
                            ['choice_text' => 'Tu te réveillons tôt.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », le verbe pronominal « se réveiller » prend le pronom « te » et la forme verbale « réveilles ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Nous ___ rapidement le matin » ?',
                        'choices' => [
                            ['choice_text' => 'nous préparons', 'is_correct' => true],
                            ['choice_text' => 'nous prépare', 'is_correct' => false],
                            ['choice_text' => 'nous préparez', 'is_correct' => false],
                            ['choice_text' => 'se préparons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe se préparer se conjugue « nous nous préparons ». Dans la proposition donnée, le premier « nous » est le sujet et le second est le pronom réfléchi.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle se couche à onze heures.', 'is_correct' => true],
                            ['choice_text' => 'Elle se couchent à onze heures.', 'is_correct' => false],
                            ['choice_text' => 'Elle se couches à onze heures.', 'is_correct' => false],
                            ['choice_text' => 'Elle me couche à onze heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », le pronom réfléchi est « se » et le verbe coucher prend la forme « couche ».',
                    ],
                    [
                        'question' => 'Complétez : « Vous ___ avant de sortir. »',
                        'choices' => [
                            ['choice_text' => 'vous habillez', 'is_correct' => true],
                            ['choice_text' => 'vous habilles', 'is_correct' => false],
                            ['choice_text' => 'se habillez', 'is_correct' => false],
                            ['choice_text' => 'vous habillons', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », s’habiller devient « vous vous habillez ». Le pronom réfléchi correspond au sujet.',
                    ],
                    [
                        'question' => 'Quel pronom réfléchi convient avec « ils » ?',
                        'choices' => [
                            ['choice_text' => 'se', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'nous', 'is_correct' => false],
                        ],
                        'explanation' => 'À la troisième personne du pluriel, le pronom réfléchi est « se » : « ils se lavent », « ils se lèvent ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je se douche le matin. » Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Je me douche le matin.', 'is_correct' => true],
                            ['choice_text' => 'Je te douche le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je nous douche le matin.', 'is_correct' => false],
                            ['choice_text' => 'Je douche me le matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le pronom réfléchi de se doucher est « me ». On dit donc « je me douche ».',
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
                        'question' => 'Complétez : « Elles ___ pour aller à l’école. »',
                        'choices' => [
                            ['choice_text' => 'se préparent', 'is_correct' => true],
                            ['choice_text' => 'se prépare', 'is_correct' => false],
                            ['choice_text' => 'me préparent', 'is_correct' => false],
                            ['choice_text' => 'se préparez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elles », le pronom réfléchi est « se » et le verbe prend la troisième personne du pluriel : « se préparent ».',
                    ],
                    [
                        'question' => 'Quelle forme convient avec « tu » pour le verbe « se laver » ?',
                        'choices' => [
                            ['choice_text' => 'tu te laves', 'is_correct' => true],
                            ['choice_text' => 'tu se laves', 'is_correct' => false],
                            ['choice_text' => 'tu te lave', 'is_correct' => false],
                            ['choice_text' => 'tu me laves', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « se laver » avec « tu » donne « tu te laves ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne me couche pas tard.', 'is_correct' => true],
                            ['choice_text' => 'Je ne couche me pas tard.', 'is_correct' => false],
                            ['choice_text' => 'Je me ne couche pas tard.', 'is_correct' => false],
                            ['choice_text' => 'Je ne me pas couche tard.', 'is_correct' => false],
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
                            ['choice_text' => 'partir', 'is_correct' => true],
                            ['choice_text' => 'pars', 'is_correct' => false],
                            ['choice_text' => 'part', 'is_correct' => false],
                            ['choice_text' => 'partons', 'is_correct' => false],
                        ],
                        'explanation' => 'Après le verbe « vouloir » conjugué, on emploie ici l’infinitif : « je veux partir ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous aimons ___ le français. »',
                        'choices' => [
                            ['choice_text' => 'étudier', 'is_correct' => true],
                            ['choice_text' => 'étudions', 'is_correct' => false],
                            ['choice_text' => 'étudiez', 'is_correct' => false],
                            ['choice_text' => 'étudient', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « aimer », lorsque le même sujet réalise l’action, on emploie naturellement l’infinitif : « nous aimons étudier ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je peux venir demain.', 'is_correct' => true],
                            ['choice_text' => 'Je peux viens demain.', 'is_correct' => false],
                            ['choice_text' => 'Je peux venu demain.', 'is_correct' => false],
                            ['choice_text' => 'Je peux venons demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « pouvoir » conjugué, le verbe suivant reste à l’infinitif : « je peux venir ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Je dois fais mes devoirs. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Je dois faire mes devoirs.', 'is_correct' => true],
                            ['choice_text' => 'Je dois fais mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Je dois fait mes devoirs.', 'is_correct' => false],
                            ['choice_text' => 'Je dois faisons mes devoirs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « devoir », le deuxième verbe reste à l’infinitif : « je dois faire ».',
                    ],
                    [
                        'question' => 'Quel choix complète « Elle préfère ___ à pied » ?',
                        'choices' => [
                            ['choice_text' => 'marcher', 'is_correct' => true],
                            ['choice_text' => 'marche', 'is_correct' => false],
                            ['choice_text' => 'marchons', 'is_correct' => false],
                            ['choice_text' => 'marchez', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « préférer », l’infinitif « marcher » permet de nommer l’action choisie : « elle préfère marcher ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Il va ___ demain » ?',
                        'choices' => [
                            ['choice_text' => 'voyager', 'is_correct' => true],
                            ['choice_text' => 'voyage', 'is_correct' => false],
                            ['choice_text' => 'voyageons', 'is_correct' => false],
                            ['choice_text' => 'voyagez', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « aller » dans la construction du futur proche, on emploie l’infinitif : « il va voyager ».',
                    ],
                    [
                        'question' => 'Quelle phrase est incorrecte parce que le deuxième verbe n’est pas à l’infinitif ?',
                        'choices' => [
                            ['choice_text' => 'Nous voulons apprendrons le français.', 'is_correct' => true],
                            ['choice_text' => 'Nous voulons apprendre le français.', 'is_correct' => false],
                            ['choice_text' => 'Nous apprenons le français chaque jour.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons apprendre le français.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « vouloir », le verbe suivant doit rester à l’infinitif. Il faut donc dire « nous voulons apprendre », et non « nous voulons apprendrons ».',
                    ],
                    [
                        'question' => 'Complétez : « Tu dois ___ attention en classe. »',
                        'choices' => [
                            ['choice_text' => 'faire', 'is_correct' => true],
                            ['choice_text' => 'fais', 'is_correct' => false],
                            ['choice_text' => 'fait', 'is_correct' => false],
                            ['choice_text' => 'faisons', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « dois », le verbe qui suit reste à l’infinitif : « tu dois faire attention ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un infinitif après « pour » ?',
                        'choices' => [
                            ['choice_text' => 'Je viens pour travailler.', 'is_correct' => true],
                            ['choice_text' => 'Je viens pour travaille.', 'is_correct' => false],
                            ['choice_text' => 'Je viens pour travaillons.', 'is_correct' => false],
                            ['choice_text' => 'Je viens pour travaillent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « pour », lorsqu’on exprime le but par un verbe, on utilise l’infinitif : « pour travailler ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formée ?',
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
                        'question' => 'Quelle correction faut-il apporter à « Je va au travail à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'Je vais au travail à huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Je vas au travail à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je allez au travail à huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Je aller au travail à huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe aller avec « je » donne « je vais ». La forme « va » correspond à « il/elle/on ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Nous mangez ensemble. » Quelle est la bonne correction ?',
                        'choices' => [
                            ['choice_text' => 'Nous mangeons ensemble.', 'is_correct' => true],
                            ['choice_text' => 'Nous mange ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Nous mangent ensemble.', 'is_correct' => false],
                            ['choice_text' => 'Nous manger ensemble.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe manger se conjugue « mangeons ». La terminaison -ez appartient à « vous ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Tu parle trop vite » ?',
                        'choices' => [
                            ['choice_text' => 'Tu parles trop vite.', 'is_correct' => true],
                            ['choice_text' => 'Tu parle trop vite.', 'is_correct' => false],
                            ['choice_text' => 'Tu parlons trop vite.', 'is_correct' => false],
                            ['choice_text' => 'Tu parlez trop vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tu », parler prend la terminaison -es : « tu parles ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle prend le métro chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Elle prends le métro chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Elle prenez le métro chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Elle prendre le métro chaque matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », prendre se conjugue « elle prend ». Le S final appartient à « je/tu prends ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Ils travaille dans un bureau. » Que faut-il écrire ?',
                        'choices' => [
                            ['choice_text' => 'Ils travaillent dans un bureau.', 'is_correct' => true],
                            ['choice_text' => 'Ils travailles dans un bureau.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillez dans un bureau.', 'is_correct' => false],
                            ['choice_text' => 'Ils travailler dans un bureau.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « ils » demande la troisième personne du pluriel : « ils travaillent ».',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Vous êtes fatigués et tu est content » ?',
                        'choices' => [
                            ['choice_text' => 'Vous êtes fatigués et tu es content.', 'is_correct' => true],
                            ['choice_text' => 'Vous êtes fatigués et tu est content.', 'is_correct' => false],
                            ['choice_text' => 'Vous êtes fatigués et tu sont content.', 'is_correct' => false],
                            ['choice_text' => 'Vous es fatigués et tu êtes content.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe être avec « vous » donne « êtes » et avec « tu » donne « es ».',
                    ],
                    [
                        'question' => 'Quelle correction faut-il faire dans « Nous avons une examen demain » ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons un examen demain.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons une examens demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons des examen demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons un examens demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Examen est un nom masculin singulier. On dit donc « un examen ». Cette question porte ici sur l’accord du déterminant avec le nom.',
                    ],
                    [
                        'question' => 'Un apprenant écrit : « Je faisais mes devoirs tous les jours » pour parler d’une habitude actuelle. Quelle phrase convient au niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'Je fais mes devoirs tous les jours.', 'is_correct' => true],
                            ['choice_text' => 'Je faire mes devoirs tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je fait mes devoirs tous les jours.', 'is_correct' => false],
                            ['choice_text' => 'Je faisons mes devoirs tous les jours.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une habitude actuelle, le présent convient : « je fais mes devoirs tous les jours ». La forme « faisais » appartient à l’imparfait, qui sera étudié à un niveau ultérieur.',
                    ],
                    [
                        'question' => 'Quelle phrase corrige « Ils ont aller au cinéma » dans une construction simple de futur proche ?',
                        'choices' => [
                            ['choice_text' => 'Ils vont aller au cinéma.', 'is_correct' => true],
                            ['choice_text' => 'Ils vont allés au cinéma.', 'is_correct' => false],
                            ['choice_text' => 'Ils vont vont au cinéma.', 'is_correct' => false],
                            ['choice_text' => 'Ils aller au cinéma.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le futur proche se construit avec aller conjugué suivi de l’infinitif. On dit donc « ils vont aller ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut venir demain.', 'is_correct' => true],
                            ['choice_text' => 'Elle peux venir demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle peut vient demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle pouvoir venir demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », pouvoir se conjugue « elle peut ». Le verbe suivant reste à l’infinitif : « venir ».',
                    ],
                    [
                        'question' => 'Quelle correction faut-il apporter à « Je se lève à six heures » ?',
                        'choices' => [
                            ['choice_text' => 'Je me lève à six heures.', 'is_correct' => true],
                            ['choice_text' => 'Je te lève à six heures.', 'is_correct' => false],
                            ['choice_text' => 'Je se lèves à six heures.', 'is_correct' => false],
                            ['choice_text' => 'Je me lèvent à six heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », le verbe pronominal se lever utilise « me » : « je me lève ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Nous doivent finir avant midi. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Nous devons finir avant midi.', 'is_correct' => true],
                            ['choice_text' => 'Nous doit finir avant midi.', 'is_correct' => false],
                            ['choice_text' => 'Nous devez finir avant midi.', 'is_correct' => false],
                            ['choice_text' => 'Nous devoir finissons avant midi.', 'is_correct' => false],
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
                            ['choice_text' => 'êtes', 'is_correct' => true],
                            ['choice_text' => 'êtes', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'sont', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », la forme du verbe être est « êtes ». La question porte sur l’état ou la disponibilité des personnes.',
                    ],
                    [
                        'question' => 'Un étudiant veut expliquer son projet : « Je veux ___ ce document demain. »',
                        'choices' => [
                            ['choice_text' => 'terminer', 'is_correct' => true],
                            ['choice_text' => 'termine', 'is_correct' => false],
                            ['choice_text' => 'terminez', 'is_correct' => false],
                            ['choice_text' => 'terminons', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « je veux », on emploie l’infinitif : « je veux terminer ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une routine matinale ?',
                        'choices' => [
                            ['choice_text' => 'Je me lève, je prends un café et je pars au travail.', 'is_correct' => true],
                            ['choice_text' => 'Je me lève, je prends un café et je partir au travail.', 'is_correct' => false],
                            ['choice_text' => 'Je me lève, je prend un café et je pars au travail.', 'is_correct' => false],
                            ['choice_text' => 'Je me lèves, je prends un café et je pars au travail.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois verbes doivent être correctement conjugués avec « je » : « je me lève », « je prends », « je pars ».',
                    ],
                    [
                        'question' => 'Vous parlez de vos parents : « Ils ___ dans une petite ville près de Rabat. »',
                        'choices' => [
                            ['choice_text' => 'habitent', 'is_correct' => true],
                            ['choice_text' => 'habite', 'is_correct' => false],
                            ['choice_text' => 'habitez', 'is_correct' => false],
                            ['choice_text' => 'habiter', 'is_correct' => false],
                        ],
                        'explanation' => '« Ils » demande la troisième personne du pluriel. Le verbe habiter devient donc « habitent ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte dans un échange au restaurant ?',
                        'choices' => [
                            ['choice_text' => 'Nous voudrions commander, mais nous devons choisir le dessert.', 'is_correct' => true],
                            ['choice_text' => 'Nous voulons commander, mais nous devons choisi le dessert.', 'is_correct' => false],
                            ['choice_text' => 'Nous voulez commander, mais nous devons choisir le dessert.', 'is_correct' => false],
                            ['choice_text' => 'Nous voulons commander, mais nous devoir choisir le dessert.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous voulons » est correctement conjugué et « nous devons choisir » suit la construction verbe conjugué + infinitif.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une habitude de lecture ?',
                        'choices' => [
                            ['choice_text' => 'Elle lit avant de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Elle lire avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Elle lis avant de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Elle lisez avant de dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », lire se conjugue « elle lit ». L’expression « avant de dormir » contient ensuite l’infinitif « dormir ».',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « Vous choisissez et vous prend le même chemin. » Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'Vous choisissez et vous prenez le même chemin.', 'is_correct' => true],
                            ['choice_text' => 'Vous choisissez et vous prends le même chemin.', 'is_correct' => false],
                            ['choice_text' => 'Vous choisissez et vous prennent le même chemin.', 'is_correct' => false],
                            ['choice_text' => 'Vous choisissez et vous prendre le même chemin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vous », prendre donne « vous prenez ». Les deux verbes doivent être conjugués avec le même sujet.',
                    ],
                    [
                        'question' => 'Vous racontez ce que fait votre sœur le matin : « Elle ___ tôt et ___ pour aller à l’université. »',
                        'choices' => [
                            ['choice_text' => 'se réveille / se prépare', 'is_correct' => true],
                            ['choice_text' => 'se réveilles / se prépare', 'is_correct' => false],
                            ['choice_text' => 'me réveille / se prépare', 'is_correct' => false],
                            ['choice_text' => 'se réveille / se préparez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « elle », les deux verbes pronominaux prennent « se » et la troisième personne du singulier : « elle se réveille » et « elle se prépare ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour exprimer une obligation ?',
                        'choices' => [
                            ['choice_text' => 'Nous devons travailler aujourd’hui.', 'is_correct' => true],
                            ['choice_text' => 'Nous devons travaillons aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous devons travaille aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Nous devoir travailler aujourd’hui.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « devoir », le verbe qui suit est à l’infinitif : « nous devons travailler ».',
                    ],
                    [
                        'question' => 'Quel choix complète : « Mes amis ___ souvent chez moi le week-end. »',
                        'choices' => [
                            ['choice_text' => 'viennent', 'is_correct' => true],
                            ['choice_text' => 'vient', 'is_correct' => false],
                            ['choice_text' => 'venez', 'is_correct' => false],
                            ['choice_text' => 'venir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « mes amis » correspond à « ils ». Le verbe venir devient donc « viennent ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « avoir » pour parler de l’âge ?',
                        'choices' => [
                            ['choice_text' => 'Ma sœur a vingt ans.', 'is_correct' => true],
                            ['choice_text' => 'Ma sœur est vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur fait vingt ans avoir.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur ont vingt ans.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, on exprime l’âge avec le verbe avoir : « ma sœur a vingt ans ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement conjuguée ?',
                        'choices' => [
                            ['choice_text' => 'Le professeur explique la règle et les étudiants prennent des notes.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur expliquent la règle et les étudiants prends des notes.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur explique la règle et les étudiants prend des notes.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur expliquer la règle et les étudiants prennent des notes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le professeur explique » est au singulier, tandis que « les étudiants prennent » est au pluriel. Les deux formes correspondent correctement à leurs sujets respectifs.',
                    ],
                    [
                        'question' => 'Vous êtes en retard et expliquez la situation : « Je ___ désolé, mais je ___ trouver une place de parking. »',
                        'choices' => [
                            ['choice_text' => 'suis / dois', 'is_correct' => true],
                            ['choice_text' => 'es / dois', 'is_correct' => false],
                            ['choice_text' => 'suis / doit', 'is_correct' => false],
                            ['choice_text' => 'être / devoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « je », on utilise « je suis » et « je dois ». La seconde partie exprime ici une obligation ou une difficulté à trouver une place.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une forme verbale correcte à chaque étape ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons étudier, puis nous faisons une pause.', 'is_correct' => true],
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