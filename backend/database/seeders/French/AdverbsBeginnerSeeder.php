<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AdverbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'adverbs')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Reconnaître les adverbes',
                'description' => 'Identifier les adverbes les plus courants et comprendre le rôle qu’ils jouent dans une phrase.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Lequel de ces mots est un adverbe ?',
                        'choices' => [
                            ['choice_text' => 'rapidement', 'is_correct' => true],
                            ['choice_text' => 'rapide', 'is_correct' => false],
                            ['choice_text' => 'rapidité', 'is_correct' => false],
                            ['choice_text' => 'courir', 'is_correct' => false],
                        ],
                        'explanation' => '« Rapidement » est un adverbe de manière. Il indique comment une action est réalisée.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de temps ?',
                        'choices' => [
                            ['choice_text' => 'demain', 'is_correct' => true],
                            ['choice_text' => 'matin', 'is_correct' => false],
                            ['choice_text' => 'matinal', 'is_correct' => false],
                            ['choice_text' => 'matinée', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » est un adverbe qui indique le moment où une action aura lieu.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de lieu ?',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => true],
                            ['choice_text' => 'lieu', 'is_correct' => false],
                            ['choice_text' => 'local', 'is_correct' => false],
                            ['choice_text' => 'habiter', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » indique un lieu ou une position.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de fréquence ?',
                        'choices' => [
                            ['choice_text' => 'souvent', 'is_correct' => true],
                            ['choice_text' => 'fréquent', 'is_correct' => false],
                            ['choice_text' => 'fréquence', 'is_correct' => false],
                            ['choice_text' => 'régulier', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » indique qu’une action se produit de manière répétée ou fréquente.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de quantité ou de degré ?',
                        'choices' => [
                            ['choice_text' => 'très', 'is_correct' => true],
                            ['choice_text' => 'fort', 'is_correct' => false],
                            ['choice_text' => 'force', 'is_correct' => false],
                            ['choice_text' => 'grand', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » renforce un adjectif ou un adverbe et indique un degré élevé.',
                    ],
                    [
                        'question' => 'Dans « Il parle doucement », quel mot est l’adverbe ?',
                        'choices' => [
                            ['choice_text' => 'doucement', 'is_correct' => true],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'parler', 'is_correct' => false],
                        ],
                        'explanation' => '« Doucement » indique la manière dont il parle.',
                    ],
                    [
                        'question' => 'Dans « Elle arrive toujours à l’heure », quel est l’adverbe ?',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => true],
                            ['choice_text' => 'arrive', 'is_correct' => false],
                            ['choice_text' => 'heure', 'is_correct' => false],
                            ['choice_text' => 'l’heure', 'is_correct' => false],
                        ],
                        'explanation' => '« Toujours » est un adverbe de fréquence qui signifie que le fait se produit régulièrement ou sans exception dans le contexte.',
                    ],
                    [
                        'question' => 'Lequel de ces mots est un adverbe ?',
                        'choices' => [
                            ['choice_text' => 'très', 'is_correct' => true],
                            ['choice_text' => 'beauté', 'is_correct' => false],
                            ['choice_text' => 'beau', 'is_correct' => false],
                            ['choice_text' => 'embellir', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » est un adverbe qui sert à renforcer un adjectif ou un autre adverbe.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une fréquence faible ?',
                        'choices' => [
                            ['choice_text' => 'rarement', 'is_correct' => true],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                            ['choice_text' => 'parfois', 'is_correct' => false],
                        ],
                        'explanation' => '« Rarement » indique qu’une action se produit peu souvent.',
                    ],
                    [
                        'question' => 'Quel mot répond à la question « Comment ? » dans une phrase comme « Il travaille sérieusement » ?',
                        'choices' => [
                            ['choice_text' => 'sérieusement', 'is_correct' => true],
                            ['choice_text' => 'travaille', 'is_correct' => false],
                            ['choice_text' => 'Il', 'is_correct' => false],
                            ['choice_text' => 'travail', 'is_correct' => false],
                        ],
                        'explanation' => '« Sérieusement » précise la manière de travailler. Les adverbes de manière répondent souvent à la question « Comment ? ».',
                    ],
                ],
            ],

            [
                'title' => 'Les adverbes de manière',
                'description' => 'Employer les adverbes qui indiquent comment une action est réalisée.',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Elle chante ___. »',
                        'choices' => [
                            ['choice_text' => 'magnifiquement', 'is_correct' => true],
                            ['choice_text' => 'magnifique', 'is_correct' => false],
                            ['choice_text' => 'magnificence', 'is_correct' => false],
                            ['choice_text' => 'magnifier', 'is_correct' => false],
                        ],
                        'explanation' => '« Magnifiquement » est l’adverbe qui indique comment elle chante.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il conduit prudemment.', 'is_correct' => true],
                            ['choice_text' => 'Il prudemment conduit.', 'is_correct' => false],
                            ['choice_text' => 'Prudemment il conduit le.', 'is_correct' => false],
                            ['choice_text' => 'Il conduit prudent.', 'is_correct' => false],
                        ],
                        'explanation' => '« Prudemment » est un adverbe de manière placé ici après le verbe.',
                    ],
                    [
                        'question' => 'Quel adverbe complète correctement : « Le bébé dort ___. »',
                        'choices' => [
                            ['choice_text' => 'paisiblement', 'is_correct' => true],
                            ['choice_text' => 'paisible', 'is_correct' => false],
                            ['choice_text' => 'paix', 'is_correct' => false],
                            ['choice_text' => 'paisibilité', 'is_correct' => false],
                        ],
                        'explanation' => '« Paisiblement » indique de quelle manière le bébé dort.',
                    ],
                    [
                        'question' => 'Comment marche une personne qui avance très vite ?',
                        'choices' => [
                            ['choice_text' => 'rapidement', 'is_correct' => true],
                            ['choice_text' => 'rapidité', 'is_correct' => false],
                            ['choice_text' => 'rapide', 'is_correct' => false],
                            ['choice_text' => 'rapides', 'is_correct' => false],
                        ],
                        'explanation' => '« Rapidement » est l’adverbe de manière correspondant à « rapide ».',
                    ],
                    [
                        'question' => 'Complétez : « Il répond ___ à la question. »',
                        'choices' => [
                            ['choice_text' => 'correctement', 'is_correct' => true],
                            ['choice_text' => 'correct', 'is_correct' => false],
                            ['choice_text' => 'correction', 'is_correct' => false],
                            ['choice_text' => 'corriger', 'is_correct' => false],
                        ],
                        'explanation' => '« Correctement » indique la manière dont il répond.',
                    ],
                    [
                        'question' => 'Quel adverbe convient dans « Elle parle ___ pour ne pas réveiller le bébé » ?',
                        'choices' => [
                            ['choice_text' => 'doucement', 'is_correct' => true],
                            ['choice_text' => 'douce', 'is_correct' => false],
                            ['choice_text' => 'douceur', 'is_correct' => false],
                            ['choice_text' => 'doucemente', 'is_correct' => false],
                        ],
                        'explanation' => '« Doucement » décrit la manière de parler et correspond bien au contexte.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de manière ?',
                        'choices' => [
                            ['choice_text' => 'Ils travaillent sérieusement.', 'is_correct' => true],
                            ['choice_text' => 'Ils travaillent demain.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent ici.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent souvent.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sérieusement » indique comment ils travaillent. « Demain » indique le temps, « ici » le lieu et « souvent » la fréquence.',
                    ],
                    [
                        'question' => 'Complétez : « Il explique la règle ___. »',
                        'choices' => [
                            ['choice_text' => 'clairement', 'is_correct' => true],
                            ['choice_text' => 'clair', 'is_correct' => false],
                            ['choice_text' => 'clarté', 'is_correct' => false],
                            ['choice_text' => 'éclaircir', 'is_correct' => false],
                        ],
                        'explanation' => '« Clairement » indique comment il explique la règle.',
                    ],
                    [
                        'question' => 'Quel adverbe complète naturellement la phrase : « Ils avancent ___ » ?',
                        'choices' => [
                            ['choice_text' => 'lentement', 'is_correct' => true],
                            ['choice_text' => 'lent', 'is_correct' => false],
                            ['choice_text' => 'lenteur', 'is_correct' => false],
                            ['choice_text' => 'lentes', 'is_correct' => false],
                        ],
                        'explanation' => '« Lentement » est l’adverbe qui décrit la façon dont ils avancent.',
                    ],
                    [
                        'question' => 'Dans « Le professeur parle calmement », quel mot précise la manière de parler ?',
                        'choices' => [
                            ['choice_text' => 'calmement', 'is_correct' => true],
                            ['choice_text' => 'professeur', 'is_correct' => false],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'calme', 'is_correct' => false],
                        ],
                        'explanation' => '« Calmement » indique la manière dont le professeur parle.',
                    ],
                    [
                        'question' => 'Quel adverbe est formé à partir de l’adjectif « heureux » ?',
                        'choices' => [
                            ['choice_text' => 'heureusement', 'is_correct' => true],
                            ['choice_text' => 'heureuxment', 'is_correct' => false],
                            ['choice_text' => 'heureuse', 'is_correct' => false],
                            ['choice_text' => 'heureté', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adverbe correspondant à « heureux » est « heureusement ».',
                    ],
                ],
            ],

            [
                'title' => 'Les adverbes de temps et de fréquence',
                'description' => 'Utiliser les adverbes qui indiquent quand une action se produit et à quelle fréquence.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel adverbe indique le futur ?',
                        'choices' => [
                            ['choice_text' => 'demain', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » désigne le jour qui vient après aujourd’hui.',
                    ],
                    [
                        'question' => 'Quel adverbe indique le passé ?',
                        'choices' => [
                            ['choice_text' => 'hier', 'is_correct' => true],
                            ['choice_text' => 'demain', 'is_correct' => false],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'bientôt', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » désigne le jour précédent.',
                    ],
                    [
                        'question' => 'Complétez : « Je vais ___ au cinéma. »',
                        'choices' => [
                            ['choice_text' => 'souvent', 'is_correct' => true],
                            ['choice_text' => 'souventement', 'is_correct' => false],
                            ['choice_text' => 'fréquent', 'is_correct' => false],
                            ['choice_text' => 'fréquemment', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » convient pour indiquer une fréquence élevée sans signifier « toujours ».',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « à chaque fois » ?',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => true],
                            ['choice_text' => 'parfois', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un contexte de fréquence, « toujours » indique qu’une chose se produit systématiquement.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « quelquefois » ?',
                        'choices' => [
                            ['choice_text' => 'parfois', 'is_correct' => true],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                        ],
                        'explanation' => '« Parfois » signifie « de temps en temps » ou « quelquefois ».',
                    ],
                    [
                        'question' => 'Quel adverbe indique une fréquence très faible ?',
                        'choices' => [
                            ['choice_text' => 'rarement', 'is_correct' => true],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                            ['choice_text' => 'quotidiennement', 'is_correct' => false],
                        ],
                        'explanation' => '« Rarement » signifie que quelque chose se produit peu souvent.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une action se produit maintenant ?',
                        'choices' => [
                            ['choice_text' => 'Je travaille actuellement.', 'is_correct' => true],
                            ['choice_text' => 'Je travaillerai demain.', 'is_correct' => false],
                            ['choice_text' => 'J’ai travaillé hier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaillerai bientôt.', 'is_correct' => false],
                        ],
                        'explanation' => '« Actuellement » indique que l’action se déroule au moment présent.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « bientôt » dans le temps ?',
                        'choices' => [
                            ['choice_text' => 'prochainement', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'autrefois', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                        ],
                        'explanation' => '« Prochainement » signifie dans un avenir proche.',
                    ],
                    [
                        'question' => 'Complétez : « Nous partons ___ de la maison. »',
                        'choices' => [
                            ['choice_text' => 'maintenant', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                        ],
                        'explanation' => '« Maintenant » indique le moment présent.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Elle lit souvent.', 'is_correct' => true],
                            ['choice_text' => 'Elle lit demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle lit ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle lit doucement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » indique combien de fois ou à quelle fréquence elle lit.',
                    ],
                    [
                        'question' => 'Quel adverbe peut remplacer « de temps en temps » ?',
                        'choices' => [
                            ['choice_text' => 'parfois', 'is_correct' => true],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => '« Parfois » signifie « de temps en temps ».',
                    ],
                    [
                        'question' => 'Quel adverbe convient pour parler d’une action quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'quotidiennement', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'bientôt', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Quotidiennement » signifie chaque jour ou tous les jours.',
                    ],
                ],
            ],

            [
                'title' => 'Les adverbes de lieu',
                'description' => 'Reconnaître et utiliser les adverbes qui indiquent un lieu ou une direction.',
                'duration' => 19,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel adverbe signifie « à cet endroit-ci » ?',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » désigne l’endroit où se trouve le locuteur ou un lieu proche de lui.',
                    ],
                    [
                        'question' => 'Quel adverbe désigne un lieu éloigné du locuteur ?',
                        'choices' => [
                            ['choice_text' => 'là-bas', 'is_correct' => true],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                        ],
                        'explanation' => '« Là-bas » désigne un lieu situé à distance du locuteur.',
                    ],
                    [
                        'question' => 'Complétez : « Viens ___, s’il te plaît. »',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » indique le lieu où la personne doit venir.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de lieu dans « Regarde dehors » ?',
                        'choices' => [
                            ['choice_text' => 'dehors', 'is_correct' => true],
                            ['choice_text' => 'regarde', 'is_correct' => false],
                            ['choice_text' => 'regard', 'is_correct' => false],
                            ['choice_text' => 'extérieur', 'is_correct' => false],
                        ],
                        'explanation' => '« Dehors » indique un lieu situé à l’extérieur.',
                    ],
                    [
                        'question' => 'Quel adverbe correspond à « à l’intérieur » ?',
                        'choices' => [
                            ['choice_text' => 'dedans', 'is_correct' => true],
                            ['choice_text' => 'dehors', 'is_correct' => false],
                            ['choice_text' => 'dessus', 'is_correct' => false],
                            ['choice_text' => 'derrière', 'is_correct' => false],
                        ],
                        'explanation' => '« Dedans » signifie « à l’intérieur ».',
                    ],
                    [
                        'question' => 'Complétez : « Le chat est ___, dans le jardin. »',
                        'choices' => [
                            ['choice_text' => 'dehors', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chat se trouve à l’extérieur de la maison, donc « dehors » convient.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une position supérieure ?',
                        'choices' => [
                            ['choice_text' => 'dessus', 'is_correct' => true],
                            ['choice_text' => 'dessous', 'is_correct' => false],
                            ['choice_text' => 'dehors', 'is_correct' => false],
                            ['choice_text' => 'ailleurs', 'is_correct' => false],
                        ],
                        'explanation' => '« Dessus » indique une position située au-dessus d’un autre élément.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une position inférieure ?',
                        'choices' => [
                            ['choice_text' => 'dessous', 'is_correct' => true],
                            ['choice_text' => 'dessus', 'is_correct' => false],
                            ['choice_text' => 'ici', 'is_correct' => false],
                            ['choice_text' => 'là-bas', 'is_correct' => false],
                        ],
                        'explanation' => '« Dessous » indique une position située en dessous.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « dans un autre endroit » ?',
                        'choices' => [
                            ['choice_text' => 'ailleurs', 'is_correct' => true],
                            ['choice_text' => 'ici', 'is_correct' => false],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                        ],
                        'explanation' => '« Ailleurs » signifie dans un autre lieu ou à un autre endroit.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Attends ici.', 'is_correct' => true],
                            ['choice_text' => 'Attends longtemps.', 'is_correct' => false],
                            ['choice_text' => 'Attends souvent.', 'is_correct' => false],
                            ['choice_text' => 'Attends calmement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » indique le lieu. « Longtemps » concerne la durée, « souvent » la fréquence et « calmement » la manière.',
                    ],
                ],
            ],

            [
                'title' => 'Les adverbes de degré',
                'description' => 'Employer très, assez, trop, beaucoup, peu et d’autres adverbes qui indiquent l’intensité ou la quantité.',
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Ce film est ___ intéressant. »',
                        'choices' => [
                            ['choice_text' => 'très', 'is_correct' => true],
                            ['choice_text' => 'trèsment', 'is_correct' => false],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'intéressement', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » se place généralement devant un adjectif pour en renforcer le degré.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une quantité excessive ?',
                        'choices' => [
                            ['choice_text' => 'trop', 'is_correct' => true],
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'assez', 'is_correct' => false],
                            ['choice_text' => 'presque', 'is_correct' => false],
                        ],
                        'explanation' => '« Trop » indique une quantité ou une intensité supérieure à ce qui est souhaité ou nécessaire.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une quantité faible ?',
                        'choices' => [
                            ['choice_text' => 'peu', 'is_correct' => true],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => false],
                            ['choice_text' => 'trop', 'is_correct' => false],
                        ],
                        'explanation' => '« Peu » indique une petite quantité ou un faible degré.',
                    ],
                    [
                        'question' => 'Complétez : « J’aime ___ ce livre. »',
                        'choices' => [
                            ['choice_text' => 'beaucoup', 'is_correct' => true],
                            ['choice_text' => 'beaucoupement', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => false],
                            ['choice_text' => 'assezment', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « aimer », « beaucoup » indique l’intensité de l’appréciation.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « suffisamment » ?',
                        'choices' => [
                            ['choice_text' => 'assez', 'is_correct' => true],
                            ['choice_text' => 'trop', 'is_correct' => false],
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                        ],
                        'explanation' => '« Assez » signifie en quantité ou en degré suffisant.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « presque, mais pas complètement » ?',
                        'choices' => [
                            ['choice_text' => 'presque', 'is_correct' => true],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Presque » indique qu’une limite ou un résultat est très proche sans être complètement atteint.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle est assez grande pour ce poste.', 'is_correct' => true],
                            ['choice_text' => 'Elle assez est grande pour ce poste.', 'is_correct' => false],
                            ['choice_text' => 'Elle est grande assez pour ce poste.', 'is_correct' => false],
                            ['choice_text' => 'Assez elle est grande pour ce poste.', 'is_correct' => false],
                        ],
                        'explanation' => '« Assez » se place ici devant l’adjectif « grande » pour exprimer un degré suffisant.',
                    ],
                    [
                        'question' => 'Quel adverbe renforce fortement un adjectif ?',
                        'choices' => [
                            ['choice_text' => 'très', 'is_correct' => true],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'ici', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » sert à augmenter fortement le degré d’un adjectif ou d’un autre adverbe.',
                    ],
                    [
                        'question' => 'Complétez : « Il parle ___ vite pour que je puisse comprendre. »',
                        'choices' => [
                            ['choice_text' => 'trop', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'ici', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Trop vite » signifie à une vitesse excessive, ce qui explique pourquoi il est difficile de comprendre.',
                    ],
                    [
                        'question' => 'Quelle phrase indique une grande quantité avec le verbe « travailler » ?',
                        'choices' => [
                            ['choice_text' => 'Il travaille beaucoup.', 'is_correct' => true],
                            ['choice_text' => 'Il travaille beaucoupement.', 'is_correct' => false],
                            ['choice_text' => 'Il beaucoup travaille le.', 'is_correct' => false],
                            ['choice_text' => 'Il travaille très.', 'is_correct' => false],
                        ],
                        'explanation' => '« Beaucoup » peut modifier directement un verbe et indique ici une grande quantité de travail.',
                    ],
                ],
            ],

            [
                'title' => 'La place des adverbes dans la phrase',
                'description' => 'Comprendre où placer les adverbes courants dans une phrase française simple.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Je mange souvent au restaurant.', 'is_correct' => true],
                            ['choice_text' => 'Je souvent mange au restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Je mange au restaurant souventement.', 'is_correct' => false],
                            ['choice_text' => 'Souvent je le mange au restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette phrase simple, « souvent » se place naturellement après le verbe « mange ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle parle très doucement.', 'is_correct' => true],
                            ['choice_text' => 'Elle très parle doucement.', 'is_correct' => false],
                            ['choice_text' => 'Elle parle doucement très.', 'is_correct' => false],
                            ['choice_text' => 'Très elle parle doucement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » se place devant l’adverbe « doucement » pour le renforcer : « très doucement ».',
                    ],
                    [
                        'question' => 'Quelle phrase place correctement l’adverbe « toujours » ?',
                        'choices' => [
                            ['choice_text' => 'Nous sommes toujours prêts.', 'is_correct' => true],
                            ['choice_text' => 'Nous toujours sommes prêts.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes prêts toujours.', 'is_correct' => false],
                            ['choice_text' => 'Toujours nous sommes prêts le.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « être », « toujours » se place généralement après le verbe conjugué.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il travaille beaucoup aujourd’hui.', 'is_correct' => true],
                            ['choice_text' => 'Il beaucoup travaille aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Il travaille aujourd’hui beaucoupement.', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup il travaille aujourd’hui le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Beaucoup » suit naturellement le verbe « travaille » et « aujourd’hui » indique le temps.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Nous partons demain matin.', 'is_correct' => true],
                            ['choice_text' => 'Nous demain partons matin.', 'is_correct' => false],
                            ['choice_text' => 'Demain nous partons le matinement.', 'is_correct' => false],
                            ['choice_text' => 'Nous partons matin demain le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain matin » forme un complément de temps naturel placé après le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il est vraiment gentil.', 'is_correct' => true],
                            ['choice_text' => 'Il vraiment est gentil.', 'is_correct' => false],
                            ['choice_text' => 'Il est gentil vraimentement.', 'is_correct' => false],
                            ['choice_text' => 'Vraiment il est gentil le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vraiment » se place ici avant l’adjectif « gentil » pour renforcer l’idée.',
                    ],
                    [
                        'question' => 'Complétez : « Elle comprend ___ la situation. »',
                        'choices' => [
                            ['choice_text' => 'bien', 'is_correct' => true],
                            ['choice_text' => 'bonne', 'is_correct' => false],
                            ['choice_text' => 'beauté', 'is_correct' => false],
                            ['choice_text' => 'bon', 'is_correct' => false],
                        ],
                        'explanation' => '« Bien » est un adverbe qui indique la manière dont elle comprend la situation.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu arrives toujours à l’heure.', 'is_correct' => true],
                            ['choice_text' => 'Tu toujours arrives à l’heure.', 'is_correct' => false],
                            ['choice_text' => 'Tu arrives à l’heure toujours le.', 'is_correct' => false],
                            ['choice_text' => 'Toujours tu arrives le à l’heure.', 'is_correct' => false],
                        ],
                        'explanation' => '« Toujours » se place naturellement après le verbe « arrives » dans cette phrase.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe placé devant un adjectif ?',
                        'choices' => [
                            ['choice_text' => 'Le film est très intéressant.', 'is_correct' => true],
                            ['choice_text' => 'Le film très est intéressant.', 'is_correct' => false],
                            ['choice_text' => 'Le film est intéressant très.', 'is_correct' => false],
                            ['choice_text' => 'Très le film est intéressant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » se place devant l’adjectif « intéressant » pour indiquer un degré élevé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ici » ?',
                        'choices' => [
                            ['choice_text' => 'Reste ici quelques minutes.', 'is_correct' => true],
                            ['choice_text' => 'Reste quelques ici minutes.', 'is_correct' => false],
                            ['choice_text' => 'Reste iciement quelques minutes.', 'is_correct' => false],
                            ['choice_text' => 'Ici reste quelques minutes le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » peut être placé après le verbe pour indiquer le lieu : « Reste ici. »',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons déjà terminé.', 'is_correct' => true],
                            ['choice_text' => 'Nous déjà avons terminé.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons terminé déjà.', 'is_correct' => false],
                            ['choice_text' => 'Déjà nous le avons terminé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Déjà » se place ici entre l’auxiliaire « avons » et le participe passé « terminé ».',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Il ne vient presque jamais ici.', 'is_correct' => true],
                            ['choice_text' => 'Il presque ne vient jamais ici.', 'is_correct' => false],
                            ['choice_text' => 'Il ne vient ici jamais presque.', 'is_correct' => false],
                            ['choice_text' => 'Presque il ne vient jamais ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Presque jamais » forme une expression de fréquence faible. Dans cette phrase, l’ensemble est correctement placé autour du verbe.',
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
