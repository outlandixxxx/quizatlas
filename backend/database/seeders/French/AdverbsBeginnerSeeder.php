<?php

namespace Database\Seeders;

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
                        'question' => 'Parmi ces mots de la même famille, lequel est un adverbe ?',
                        'choices' => [
                            ['choice_text' => 'rapide', 'is_correct' => false],
                            ['choice_text' => 'rapidité', 'is_correct' => false],
                            ['choice_text' => 'accélérer', 'is_correct' => false],
                            ['choice_text' => 'rapidement', 'is_correct' => true],
                        ],
                        'explanation' => '« Rapidement » se termine en -ment et dit comment on fait quelque chose. Les trois autres sont un adjectif, un nom et un verbe.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de temps ?',
                        'choices' => [
                            ['choice_text' => 'midi', 'is_correct' => false],
                            ['choice_text' => 'matinal', 'is_correct' => false],
                            ['choice_text' => 'demain', 'is_correct' => true],
                            ['choice_text' => 'matinée', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » répond à la question « quand ? ». « Matin » et « matinée » sont des noms, « matinal » est un adjectif.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de lieu ?',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => true],
                            ['choice_text' => 'lieu', 'is_correct' => false],
                            ['choice_text' => 'local', 'is_correct' => false],
                            ['choice_text' => 'habiter', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » dit où se passe l’action. À côté, on trouve un nom, un adjectif et un verbe.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de fréquence ?',
                        'choices' => [
                            ['choice_text' => 'souvent', 'is_correct' => true],
                            ['choice_text' => 'fréquent', 'is_correct' => false],
                            ['choice_text' => 'fréquence', 'is_correct' => false],
                            ['choice_text' => 'régulier', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » dit combien de fois une action revient. « Fréquent » et « régulier » sont des adjectifs, « fréquence » est un nom.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de quantité ou de degré ?',
                        'choices' => [
                            ['choice_text' => 'puissance', 'is_correct' => false],
                            ['choice_text' => 'grand', 'is_correct' => false],
                            ['choice_text' => 'forcer', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => true],
                        ],
                        'explanation' => '« Très » renforce un adjectif ou un autre adverbe : très grand, très vite. Les autres mots sont un nom, un adjectif et un verbe.',
                    ],
                    [
                        'question' => 'Dans « Lucas répond poliment au professeur », quel mot est l’adverbe ?',
                        'choices' => [
                            ['choice_text' => 'répond', 'is_correct' => false],
                            ['choice_text' => 'poliment', 'is_correct' => true],
                            ['choice_text' => 'professeur', 'is_correct' => false],
                            ['choice_text' => 'Lucas', 'is_correct' => false],
                        ],
                        'explanation' => '« Poliment » dit de quelle façon Lucas répond. Les autres mots sont un verbe et deux noms.',
                    ],
                    [
                        'question' => 'Dans « Inès range toujours sa chambre », quel mot est l’adverbe ?',
                        'choices' => [
                            ['choice_text' => 'range', 'is_correct' => false],
                            ['choice_text' => 'chambre', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => true],
                            ['choice_text' => 'sa', 'is_correct' => false],
                        ],
                        'explanation' => '« Toujours » précise la fréquence : Inès range à chaque fois. « Sa » est un déterminant, « range » un verbe.',
                    ],
                    [
                        'question' => 'Dans « Ce petit garçon dessine bien », quel mot est l’adverbe ?',
                        'choices' => [
                            ['choice_text' => 'bien', 'is_correct' => true],
                            ['choice_text' => 'petit', 'is_correct' => false],
                            ['choice_text' => 'garçon', 'is_correct' => false],
                            ['choice_text' => 'dessine', 'is_correct' => false],
                        ],
                        'explanation' => '« Bien » complète le verbe « dessine » et dit comment il dessine. « Petit » est un adjectif qui accompagne le nom.',
                    ],
                    [
                        'question' => 'Quel adverbe indique qu’une action se produit très peu souvent ?',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => true],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                            ['choice_text' => 'régulièrement', 'is_correct' => false],
                        ],
                        'explanation' => '« Rarement » veut dire « presque jamais ». Les trois autres disent le contraire : l’action revient tout le temps, souvent ou à intervalles réguliers.',
                    ],
                    [
                        'question' => 'À quelle question répond l’adverbe « sérieusement » dans « Cédric révise sérieusement » ?',
                        'choices' => [
                            ['choice_text' => 'Quand ?', 'is_correct' => false],
                            ['choice_text' => 'Où ?', 'is_correct' => false],
                            ['choice_text' => 'Combien ?', 'is_correct' => false],
                            ['choice_text' => 'Comment ?', 'is_correct' => true],
                        ],
                        'explanation' => 'On demande « Cédric révise comment ? » et la réponse est « sérieusement ». C’est la question type des adverbes de manière.',
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
                        'question' => 'Après le concert, Sofia dit à Nour : « Tu as chanté ___ ! »',
                        'choices' => [
                            ['choice_text' => 'magnifiquement', 'is_correct' => true],
                            ['choice_text' => 'magnifique', 'is_correct' => false],
                            ['choice_text' => 'magnificence', 'is_correct' => false],
                            ['choice_text' => 'magnifier', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut un adverbe pour dire comment Nour a chanté : « magnifiquement ». « Magnifique » est un adjectif.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est bien écrite ?',
                        'choices' => [
                            ['choice_text' => 'Il conduit prudemment.', 'is_correct' => true],
                            ['choice_text' => 'Il conduit prudent.', 'is_correct' => false],
                            ['choice_text' => 'Il conduit prudence.', 'is_correct' => false],
                            ['choice_text' => 'Il conduit prudamment.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adjectif « prudent » donne l’adverbe « prudemment », avec -emment. Les formes en -amment viennent d’adjectifs en -ant, comme « constant ».',
                    ],
                    [
                        'question' => 'Le bébé dort ___ dans son lit.',
                        'choices' => [
                            ['choice_text' => 'paisible', 'is_correct' => false],
                            ['choice_text' => 'paix', 'is_correct' => false],
                            ['choice_text' => 'paisiblement', 'is_correct' => true],
                            ['choice_text' => 'apaiser', 'is_correct' => false],
                        ],
                        'explanation' => '« Paisiblement » dit de quelle façon le bébé dort. « Paisible » décrit un nom, il ne peut pas qualifier le verbe.',
                    ],
                    [
                        'question' => 'Théo est en retard et marche à toute vitesse. Quel adverbe décrit sa façon d’avancer ?',
                        'choices' => [
                            ['choice_text' => 'lentement', 'is_correct' => false],
                            ['choice_text' => 'prudemment', 'is_correct' => false],
                            ['choice_text' => 'rapidement', 'is_correct' => true],
                            ['choice_text' => 'tranquillement', 'is_correct' => false],
                        ],
                        'explanation' => 'Il avance vite, donc « rapidement ». « Lentement » dirait le contraire, et les deux autres supposent qu’il prend son temps.',
                    ],
                    [
                        'question' => 'Complétez : « Il répond ___ à la question. »',
                        'choices' => [
                            ['choice_text' => 'correct', 'is_correct' => false],
                            ['choice_text' => 'correctement', 'is_correct' => true],
                            ['choice_text' => 'correction', 'is_correct' => false],
                            ['choice_text' => 'corriger', 'is_correct' => false],
                        ],
                        'explanation' => '« Correctement » dit de quelle façon il répond. Les autres mots sont un adjectif, un nom et un verbe.',
                    ],
                    [
                        'question' => 'Il est minuit. Karim parle ___ pour ne pas réveiller ses voisins.',
                        'choices' => [
                            ['choice_text' => 'douce', 'is_correct' => false],
                            ['choice_text' => 'doucement', 'is_correct' => true],
                            ['choice_text' => 'douceur', 'is_correct' => false],
                            ['choice_text' => 'adoucir', 'is_correct' => false],
                        ],
                        'explanation' => '« Doucement » dit comment il parle. « Douce » s’accorde avec un nom féminin, ce qui n’est pas le cas ici.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de manière ?',
                        'choices' => [
                            ['choice_text' => 'Ils travaillent demain.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent ici.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent souvent.', 'is_correct' => false],
                            ['choice_text' => 'Ils travaillent sérieusement.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sérieusement » dit comment ils travaillent. « Demain » est un adverbe de temps, « ici » de lieu et « souvent » de fréquence.',
                    ],
                    [
                        'question' => 'Complétez : « Il explique la règle ___. »',
                        'choices' => [
                            ['choice_text' => 'clairement', 'is_correct' => true],
                            ['choice_text' => 'clair', 'is_correct' => false],
                            ['choice_text' => 'clarté', 'is_correct' => false],
                            ['choice_text' => 'éclaircir', 'is_correct' => false],
                        ],
                        'explanation' => '« Clairement » est formé sur l’adjectif « clair » et dit de quelle façon il explique.',
                    ],
                    [
                        'question' => 'Quel adverbe est formé à partir de l’adjectif « poli » ?',
                        'choices' => [
                            ['choice_text' => 'politement', 'is_correct' => false],
                            ['choice_text' => 'poliment', 'is_correct' => true],
                            ['choice_text' => 'polie', 'is_correct' => false],
                            ['choice_text' => 'politesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand l’adjectif finit par une voyelle, on ajoute simplement -ment : poli → poliment. « Politesse » est le nom.',
                    ],
                    [
                        'question' => 'Dans « Le professeur parle calmement », quel mot précise la manière de parler ?',
                        'choices' => [
                            ['choice_text' => 'professeur', 'is_correct' => false],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'calme', 'is_correct' => false],
                            ['choice_text' => 'calmement', 'is_correct' => true],
                        ],
                        'explanation' => '« Calmement » dit comment le professeur parle. « Calme » est l’adjectif dont il est tiré, mais il n’apparaît pas dans la phrase.',
                    ],
                    [
                        'question' => 'Quel adverbe est formé à partir de l’adjectif « heureux » ?',
                        'choices' => [
                            ['choice_text' => 'heureuxment', 'is_correct' => false],
                            ['choice_text' => 'heureuse', 'is_correct' => false],
                            ['choice_text' => 'heureusement', 'is_correct' => true],
                            ['choice_text' => 'bonheur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adjectif « heureux » donne « heureusement » : on remplace le x par -sement. « Heureuxment » est une erreur fréquente.',
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
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'demain', 'is_correct' => true],
                            ['choice_text' => 'avant', 'is_correct' => false],
                        ],
                        'explanation' => '« Demain » désigne le jour qui suit aujourd’hui. « Hier » et « avant » regardent vers le passé.',
                    ],
                    [
                        'question' => 'Quel adverbe indique le passé ?',
                        'choices' => [
                            ['choice_text' => 'demain', 'is_correct' => false],
                            ['choice_text' => 'hier', 'is_correct' => true],
                            ['choice_text' => 'maintenant', 'is_correct' => false],
                            ['choice_text' => 'bientôt', 'is_correct' => false],
                        ],
                        'explanation' => '« Hier » désigne le jour qui précède aujourd’hui. Les trois autres parlent du présent ou de l’avenir.',
                    ],
                    [
                        'question' => 'Hind adore les films : elle va ___ au cinéma, presque chaque semaine.',
                        'choices' => [
                            ['choice_text' => 'fréquent', 'is_correct' => false],
                            ['choice_text' => 'fréquence', 'is_correct' => false],
                            ['choice_text' => 'régulier', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => true],
                        ],
                        'explanation' => '« Souvent » est un adverbe de fréquence. Les trois autres mots sont un adjectif ou un nom et ne se placent pas après « va ».',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « à chaque fois, sans exception » ?',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => true],
                            ['choice_text' => 'parfois', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                        ],
                        'explanation' => '« Toujours » s’emploie pour ce qui arrive à chaque fois. « Jamais » dit l’inverse.',
                    ],
                    [
                        'question' => 'Quel adverbe veut dire « quelquefois » ?',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                            ['choice_text' => 'parfois', 'is_correct' => true],
                        ],
                        'explanation' => '« Parfois » et « quelquefois » sont synonymes : ils parlent de ce qui arrive de temps en temps.',
                    ],
                    [
                        'question' => 'Éva n’a pas pris l’avion une seule fois dans sa vie. Complétez : « Elle n’a ___ pris l’avion. »',
                        'choices' => [
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'souvent', 'is_correct' => false],
                            ['choice_text' => 'jamais', 'is_correct' => true],
                            ['choice_text' => 'parfois', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne ... jamais » traduit zéro fois. Avec « ne », seul « jamais » donne le sens voulu.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une action se produit en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Je travaillerai demain.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille actuellement.', 'is_correct' => true],
                            ['choice_text' => 'J’ai travaillé hier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaillerai bientôt.', 'is_correct' => false],
                        ],
                        'explanation' => '« Actuellement » veut dire « en ce moment ». Les autres phrases se placent dans le passé ou dans l’avenir.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « dans très peu de temps » ?',
                        'choices' => [
                            ['choice_text' => 'autrefois', 'is_correct' => false],
                            ['choice_text' => 'bientôt', 'is_correct' => true],
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'longtemps', 'is_correct' => false],
                        ],
                        'explanation' => '« Bientôt » annonce un événement proche. « Autrefois » et « hier » renvoient au passé.',
                    ],
                    [
                        'question' => 'Le taxi est devant la porte : nous partons ___ !',
                        'choices' => [
                            ['choice_text' => 'hier', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                            ['choice_text' => 'toujours', 'is_correct' => false],
                            ['choice_text' => 'maintenant', 'is_correct' => true],
                        ],
                        'explanation' => '« Maintenant » situe l’action à cet instant précis. « Hier » est impossible avec un verbe au présent qui annonce un départ.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Elle lit souvent.', 'is_correct' => true],
                            ['choice_text' => 'Elle lit demain.', 'is_correct' => false],
                            ['choice_text' => 'Elle lit ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle lit doucement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Souvent » dit combien de fois elle lit. « Demain » est un adverbe de temps, « ici » de lieu et « doucement » de manière.',
                    ],
                    [
                        'question' => 'Quel adverbe indique que quelque chose se passe tout de suite, sans attendre ?',
                        'choices' => [
                            ['choice_text' => 'immédiatement', 'is_correct' => true],
                            ['choice_text' => 'longtemps', 'is_correct' => false],
                            ['choice_text' => 'autrefois', 'is_correct' => false],
                            ['choice_text' => 'rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Immédiatement » veut dire « sans délai ». « Longtemps » et « autrefois » parlent de durée ou de passé.',
                    ],
                    [
                        'question' => 'Yanis va à la piscine tous les matins. Quel adverbe résume cette habitude ?',
                        'choices' => [
                            ['choice_text' => 'rarement', 'is_correct' => false],
                            ['choice_text' => 'autrefois', 'is_correct' => false],
                            ['choice_text' => 'quotidiennement', 'is_correct' => true],
                            ['choice_text' => 'parfois', 'is_correct' => false],
                        ],
                        'explanation' => '« Quotidiennement » veut dire « chaque jour ». « Rarement » et « parfois » indiquent des visites bien moins fréquentes.',
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
                            ['choice_text' => 'là-bas', 'is_correct' => false],
                            ['choice_text' => 'ici', 'is_correct' => true],
                            ['choice_text' => 'dehors', 'is_correct' => false],
                            ['choice_text' => 'ailleurs', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » désigne l’endroit où l’on se trouve. « Là-bas » montre un lieu éloigné et « ailleurs » un autre lieu.',
                    ],
                    [
                        'question' => 'Quel adverbe désigne un lieu éloigné de la personne qui parle ?',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => false],
                            ['choice_text' => 'là-bas', 'is_correct' => true],
                            ['choice_text' => 'dedans', 'is_correct' => false],
                            ['choice_text' => 'dessous', 'is_correct' => false],
                        ],
                        'explanation' => '« Là-bas » renvoie à un endroit à distance, à l’inverse de « ici ».',
                    ],
                    [
                        'question' => 'Une mère appelle son fils au téléphone : « Viens ___, j’ai besoin de toi ! »',
                        'choices' => [
                            ['choice_text' => 'dessous', 'is_correct' => false],
                            ['choice_text' => 'ailleurs', 'is_correct' => false],
                            ['choice_text' => 'partout', 'is_correct' => false],
                            ['choice_text' => 'ici', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle veut qu’il la rejoigne là où elle est, donc « ici ». « Ailleurs » et « partout » ne désignent pas un lieu précis.',
                    ],
                    [
                        'question' => 'Quel mot est un adverbe de lieu dans « Regarde dehors » ?',
                        'choices' => [
                            ['choice_text' => 'regarde', 'is_correct' => false],
                            ['choice_text' => 'regard', 'is_correct' => false],
                            ['choice_text' => 'extérieur', 'is_correct' => false],
                            ['choice_text' => 'dehors', 'is_correct' => true],
                        ],
                        'explanation' => '« Dehors » dit où porter le regard. « Extérieur » existe, mais c’est un nom ou un adjectif.',
                    ],
                    [
                        'question' => 'Quel adverbe correspond à « à l’intérieur » ?',
                        'choices' => [
                            ['choice_text' => 'dehors', 'is_correct' => false],
                            ['choice_text' => 'dessus', 'is_correct' => false],
                            ['choice_text' => 'dedans', 'is_correct' => true],
                            ['choice_text' => 'derrière', 'is_correct' => false],
                        ],
                        'explanation' => '« Dedans » veut dire « à l’intérieur ». « Dehors » dit le contraire.',
                    ],
                    [
                        'question' => 'Le chat n’est pas dans la maison : il est ___, dans le jardin.',
                        'choices' => [
                            ['choice_text' => 'dedans', 'is_correct' => false],
                            ['choice_text' => 'dessus', 'is_correct' => false],
                            ['choice_text' => 'dessous', 'is_correct' => false],
                            ['choice_text' => 'dehors', 'is_correct' => true],
                        ],
                        'explanation' => 'Le jardin est à l’extérieur de la maison, donc « dehors ».',
                    ],
                    [
                        'question' => 'Quel adverbe indique une position plus haute ?',
                        'choices' => [
                            ['choice_text' => 'dessus', 'is_correct' => true],
                            ['choice_text' => 'dessous', 'is_correct' => false],
                            ['choice_text' => 'dehors', 'is_correct' => false],
                            ['choice_text' => 'ailleurs', 'is_correct' => false],
                        ],
                        'explanation' => '« Dessus » place quelque chose au-dessus d’un autre objet. « Dessous » fait l’inverse.',
                    ],
                    [
                        'question' => 'Le ballon a roulé sous le canapé. Quel adverbe décrit sa position ?',
                        'choices' => [
                            ['choice_text' => 'dessus', 'is_correct' => false],
                            ['choice_text' => 'dedans', 'is_correct' => false],
                            ['choice_text' => 'dessous', 'is_correct' => true],
                            ['choice_text' => 'devant', 'is_correct' => false],
                        ],
                        'explanation' => 'Il se trouve en bas, sous le meuble : « dessous ». « Dessus » le placerait au-dessus.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « dans un autre endroit » ?',
                        'choices' => [
                            ['choice_text' => 'ici', 'is_correct' => false],
                            ['choice_text' => 'ailleurs', 'is_correct' => true],
                            ['choice_text' => 'partout', 'is_correct' => false],
                            ['choice_text' => 'dedans', 'is_correct' => false],
                        ],
                        'explanation' => '« Ailleurs » désigne un autre lieu, pas celui où l’on est. « Partout » veut dire « dans tous les endroits ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un adverbe de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Attends ici.', 'is_correct' => true],
                            ['choice_text' => 'Attends longtemps.', 'is_correct' => false],
                            ['choice_text' => 'Attends souvent.', 'is_correct' => false],
                            ['choice_text' => 'Attends calmement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » dit où attendre. « Longtemps » parle de durée, « souvent » de fréquence et « calmement » de manière.',
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
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'vite', 'is_correct' => false],
                            ['choice_text' => 'longtemps', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant un adjectif, on emploie « très » : très intéressant. « Beaucoup » ne se place pas devant un adjectif.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une quantité excessive ?',
                        'choices' => [
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'assez', 'is_correct' => false],
                            ['choice_text' => 'presque', 'is_correct' => false],
                            ['choice_text' => 'trop', 'is_correct' => true],
                        ],
                        'explanation' => '« Trop » dépasse ce qu’il faut. « Assez » dit que c’est suffisant, et « peu » que c’est faible.',
                    ],
                    [
                        'question' => 'Quel adverbe indique une quantité faible ?',
                        'choices' => [
                            ['choice_text' => 'peu', 'is_correct' => true],
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => false],
                            ['choice_text' => 'trop', 'is_correct' => false],
                        ],
                        'explanation' => '« Peu » veut dire « pas grand-chose ». Les trois autres vont vers le haut de l’échelle.',
                    ],
                    [
                        'question' => 'Lina a adoré ce roman. Laquelle de ces phrases est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle aime très ce roman.', 'is_correct' => false],
                            ['choice_text' => 'Elle très aime ce roman.', 'is_correct' => false],
                            ['choice_text' => 'Elle aime beaucoup ce roman.', 'is_correct' => true],
                            ['choice_text' => 'Elle aime ce roman très.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour modifier un verbe, on emploie « beaucoup ». « Très » ne s’utilise que devant un adjectif ou un adverbe.',
                    ],
                    [
                        'question' => 'Quel adverbe signifie « suffisamment » ?',
                        'choices' => [
                            ['choice_text' => 'trop', 'is_correct' => false],
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'presque', 'is_correct' => false],
                            ['choice_text' => 'assez', 'is_correct' => true],
                        ],
                        'explanation' => '« Assez » dit que la quantité suffit. « Trop » la dépasse et « peu » ne l’atteint pas.',
                    ],
                    [
                        'question' => 'Il manque une seule page à Sami pour finir son livre : il l’a ___ terminé.',
                        'choices' => [
                            ['choice_text' => 'beaucoup', 'is_correct' => false],
                            ['choice_text' => 'presque', 'is_correct' => true],
                            ['choice_text' => 'assez', 'is_correct' => false],
                            ['choice_text' => 'trop', 'is_correct' => false],
                        ],
                        'explanation' => '« Presque » dit qu’on est tout près du but sans l’avoir atteint. Les autres adverbes ne donnent pas ce sens.',
                    ],
                    [
                        'question' => 'Quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Ce sac est assez grand pour ton ordinateur.', 'is_correct' => true],
                            ['choice_text' => 'Ce sac assez est grand pour ton ordinateur.', 'is_correct' => false],
                            ['choice_text' => 'Ce sac est grand pour assez ton ordinateur.', 'is_correct' => false],
                            ['choice_text' => 'Assez ce sac est grand pour ton ordinateur.', 'is_correct' => false],
                        ],
                        'explanation' => '« Assez » se place juste devant l’adjectif qu’il renforce : assez grand.',
                    ],
                    [
                        'question' => 'Ahmed a couru un marathon : il est ___ fatigué. Quel adverbe montre le degré le plus fort ?',
                        'choices' => [
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'assez', 'is_correct' => false],
                            ['choice_text' => 'très', 'is_correct' => true],
                            ['choice_text' => 'presque', 'is_correct' => false],
                        ],
                        'explanation' => 'Après un marathon, la fatigue est élevée, donc « très ». « Peu » et « presque » en diraient beaucoup moins.',
                    ],
                    [
                        'question' => 'Il y a 40 élèves dans une salle prévue pour 25 : il y a ___ d’élèves.',
                        'choices' => [
                            ['choice_text' => 'peu', 'is_correct' => false],
                            ['choice_text' => 'assez', 'is_correct' => false],
                            ['choice_text' => 'trop', 'is_correct' => true],
                            ['choice_text' => 'autant', 'is_correct' => false],
                        ],
                        'explanation' => 'La salle déborde, donc « trop ». « Assez » dirait que la place suffit.',
                    ],
                    [
                        'question' => 'Quelle phrase dit que Samir travaille énormément ?',
                        'choices' => [
                            ['choice_text' => 'Samir travaille très.', 'is_correct' => false],
                            ['choice_text' => 'Samir travaille beaucoup.', 'is_correct' => true],
                            ['choice_text' => 'Samir très travaille.', 'is_correct' => false],
                            ['choice_text' => 'Samir travaille de beaucoup.', 'is_correct' => false],
                        ],
                        'explanation' => '« Beaucoup » modifie directement le verbe et se place après lui.',
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
                            ['choice_text' => 'Je mange au souvent restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Souvent mange je au restaurant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe simple, l’adverbe se place juste après le verbe : « mange souvent ».',
                    ],
                    [
                        'question' => 'Léa parle à voix basse. Laquelle de ces phrases le dit correctement ?',
                        'choices' => [
                            ['choice_text' => 'Elle très parle doucement.', 'is_correct' => false],
                            ['choice_text' => 'Elle parle doucement très.', 'is_correct' => false],
                            ['choice_text' => 'Elle parle très doucement.', 'is_correct' => true],
                            ['choice_text' => 'Très elle parle doucement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » se met devant l’adverbe qu’il renforce : « très doucement ».',
                    ],
                    [
                        'question' => 'Le capitaine dit à ses joueurs que l’équipe est toujours prête. Quelle phrase place bien « toujours » ?',
                        'choices' => [
                            ['choice_text' => 'Nous toujours sommes prêts.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes prêts à toujours.', 'is_correct' => false],
                            ['choice_text' => 'Nous prêts toujours sommes.', 'is_correct' => false],
                            ['choice_text' => 'Nous sommes toujours prêts.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec le verbe « être », l’adverbe se place après le verbe conjugué et avant l’adjectif.',
                    ],
                    [
                        'question' => 'Les voisins sont partis à l’hôtel. Quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Ils bien dorment à l’hôtel.', 'is_correct' => false],
                            ['choice_text' => 'Bien ils dorment à l’hôtel.', 'is_correct' => false],
                            ['choice_text' => 'Ils dorment à l’hôtel bien.', 'is_correct' => false],
                            ['choice_text' => 'Ils dorment bien à l’hôtel.', 'is_correct' => true],
                        ],
                        'explanation' => '« Bien » vient juste après le verbe qu’il complète : « dorment bien ».',
                    ],
                    [
                        'question' => 'Salma décrit son voyage de demain. Quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Nous partons matin demain.', 'is_correct' => false],
                            ['choice_text' => 'Nous partons demain matin.', 'is_correct' => true],
                            ['choice_text' => 'Nous demain partons matin.', 'is_correct' => false],
                            ['choice_text' => 'Demain partons nous matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit d’abord le jour puis le moment de la journée : « demain matin ». Ce groupe suit le verbe.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ce gâteau est vraiment délicieux.', 'is_correct' => true],
                            ['choice_text' => 'Ce gâteau vraiment est délicieux.', 'is_correct' => false],
                            ['choice_text' => 'Ce vraiment gâteau est délicieux.', 'is_correct' => false],
                            ['choice_text' => 'Ce gâteau est vraiment délicieuse.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vraiment » se place devant l’adjectif « délicieux », qui reste au masculin comme « gâteau ».',
                    ],
                    [
                        'question' => 'Après l’explication de la prof, Salma comprend ___ le problème.',
                        'choices' => [
                            ['choice_text' => 'bon', 'is_correct' => false],
                            ['choice_text' => 'bien', 'is_correct' => true],
                            ['choice_text' => 'bonne', 'is_correct' => false],
                            ['choice_text' => 'bonté', 'is_correct' => false],
                        ],
                        'explanation' => '« Bien » est l’adverbe qui complète le verbe « comprend ». « Bon » et « bonne » sont des adjectifs.',
                    ],
                    [
                        'question' => 'Nadia n’oublie jamais ses clés. Quelle phrase l’écrit correctement ?',
                        'choices' => [
                            ['choice_text' => 'Nadia ne oublie jamais ses clés.', 'is_correct' => false],
                            ['choice_text' => 'Nadia n’oublie ses clés jamais.', 'is_correct' => false],
                            ['choice_text' => 'Nadia n’oublie pas jamais ses clés.', 'is_correct' => false],
                            ['choice_text' => 'Nadia n’oublie jamais ses clés.', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans la négation, « jamais » se place juste après le verbe, et « ne » devient « n’ » devant une voyelle.',
                    ],
                    [
                        'question' => 'Quelle phrase place bien l’adverbe devant l’adjectif ?',
                        'choices' => [
                            ['choice_text' => 'Ce film très est drôle.', 'is_correct' => false],
                            ['choice_text' => 'Ce film est très drôle.', 'is_correct' => true],
                            ['choice_text' => 'Ce film est drôle très.', 'is_correct' => false],
                            ['choice_text' => 'Ce très film est drôle.', 'is_correct' => false],
                        ],
                        'explanation' => '« Très » se place juste devant l’adjectif qu’il renforce : très drôle.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ici » ?',
                        'choices' => [
                            ['choice_text' => 'Reste quelques ici minutes.', 'is_correct' => false],
                            ['choice_text' => 'Ici quelques minutes reste.', 'is_correct' => false],
                            ['choice_text' => 'Reste ici quelques minutes.', 'is_correct' => true],
                            ['choice_text' => 'Reste ici minutes quelques.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ici » suit directement le verbe, puis vient la durée : « reste ici quelques minutes ».',
                    ],
                    [
                        'question' => 'Au réveil, Chloé dit à sa mère qu’elle a passé une bonne nuit. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai bien dormi.', 'is_correct' => true],
                            ['choice_text' => 'J’ai dormi bien.', 'is_correct' => false],
                            ['choice_text' => 'Je bien ai dormi.', 'is_correct' => false],
                            ['choice_text' => 'Bien j’ai dormi.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au passé composé, un adverbe court comme « bien » se glisse entre l’auxiliaire et le participe passé.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Il ne jamais vient ici.', 'is_correct' => false],
                            ['choice_text' => 'Il vient ne jamais ici.', 'is_correct' => false],
                            ['choice_text' => 'Il ne vient jamais ici.', 'is_correct' => true],
                            ['choice_text' => 'Il ne vient ici jamais.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette négation, « ne » se place avant le verbe et « jamais » juste après lui.',
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
