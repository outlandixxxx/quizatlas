<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpeakingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'speaking')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Saluer et se présenter',
                'description' => 'S’exprimer simplement dans les premières minutes d’une conversation : saluer, se présenter et donner des informations personnelles.',
                'duration' => 16,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle réponse convient à « Bonjour, comment allez-vous ? » dans un contexte poli ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour, je vais très bien, merci.', 'is_correct' => true],
                            ['choice_text' => 'Bonjour, je suis aller demain.', 'is_correct' => false],
                            ['choice_text' => 'Merci, je habite Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Comment, oui, demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour, je vais très bien, merci » est une réponse naturelle et polie à une question sur l’état de la personne.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour se présenter ?',
                        'choices' => [
                            ['choice_text' => 'Je m’appelle Lina.', 'is_correct' => true],
                            ['choice_text' => 'J’appelle Lina le.', 'is_correct' => false],
                            ['choice_text' => 'Moi appeler Lina.', 'is_correct' => false],
                            ['choice_text' => 'Je suis appelle Lina.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour donner son nom, on utilise couramment « Je m’appelle... ».',
                    ],
                    [
                        'question' => 'Comment répondre naturellement à « Tu habites où ? » ?',
                        'choices' => [
                            ['choice_text' => 'J’habite à Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Je Rabat habite à.', 'is_correct' => false],
                            ['choice_text' => 'Rabat j’habite le.', 'is_correct' => false],
                            ['choice_text' => 'J’habite Rabat de.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse correcte est « J’habite à Rabat », avec « à » devant le nom de la ville.',
                    ],
                    [
                        'question' => 'Quelle réponse convient à « Quel âge as-tu ? » ?',
                        'choices' => [
                            ['choice_text' => 'J’ai vingt ans.', 'is_correct' => true],
                            ['choice_text' => 'Je suis vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'J’ai à vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Je fais vingt âge.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, on exprime l’âge avec le verbe « avoir » : « J’ai vingt ans. »',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour parler de sa nationalité ?',
                        'choices' => [
                            ['choice_text' => 'Je suis marocain.', 'is_correct' => true],
                            ['choice_text' => 'J’ai marocain.', 'is_correct' => false],
                            ['choice_text' => 'Je fais Maroc.', 'is_correct' => false],
                            ['choice_text' => 'Je suis de marocain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La nationalité s’exprime avec le verbe « être » : « Je suis marocain » ou « Je suis marocaine » selon la personne.',
                    ],
                    [
                        'question' => 'Comment présenter une personne que l’on connaît ?',
                        'choices' => [
                            ['choice_text' => 'Voici mon ami Karim.', 'is_correct' => true],
                            ['choice_text' => 'Voilà suis Karim mon ami.', 'is_correct' => false],
                            ['choice_text' => 'Mon ami voici être Karim.', 'is_correct' => false],
                            ['choice_text' => 'Je voici Karim ami.', 'is_correct' => false],
                        ],
                        'explanation' => '« Voici mon ami Karim » est une manière naturelle de présenter quelqu’un.',
                    ],
                    [
                        'question' => 'Quelle réponse est adaptée à « Enchanté de faire votre connaissance » ?',
                        'choices' => [
                            ['choice_text' => 'Enchanté également.', 'is_correct' => true],
                            ['choice_text' => 'Oui, je connaissance.', 'is_correct' => false],
                            ['choice_text' => 'Merci, je suis vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'À demain, je connais.', 'is_correct' => false],
                        ],
                        'explanation' => '« Enchanté également » est une réponse polie et naturelle lorsque quelqu’un exprime le plaisir de vous rencontrer.',
                    ],
                    [
                        'question' => 'Quelle question peut-on poser pour connaître la profession d’une personne ?',
                        'choices' => [
                            ['choice_text' => 'Tu fais quoi dans la vie ?', 'is_correct' => true],
                            ['choice_text' => 'Tu où dans la vie ?', 'is_correct' => false],
                            ['choice_text' => 'Tu combien dans la vie ?', 'is_correct' => false],
                            ['choice_text' => 'Tu quand dans la vie ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Tu fais quoi dans la vie ? » est une formulation courante pour demander la profession ou l’activité principale.',
                    ],
                    [
                        'question' => 'Quelle phrase peut servir à parler de ses études ?',
                        'choices' => [
                            ['choice_text' => 'J’étudie l’informatique à l’université.', 'is_correct' => true],
                            ['choice_text' => 'Je suis étudie informatique université.', 'is_correct' => false],
                            ['choice_text' => 'J’étudie à informatique l’université.', 'is_correct' => false],
                            ['choice_text' => 'Université je informatique suis.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte est « J’étudie l’informatique à l’université. »',
                    ],
                    [
                        'question' => 'Quelle formule convient pour dire au revoir de manière neutre ?',
                        'choices' => [
                            ['choice_text' => 'Au revoir, à bientôt.', 'is_correct' => true],
                            ['choice_text' => 'À jamais demain.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour encore.', 'is_correct' => false],
                            ['choice_text' => 'Merci de salut.', 'is_correct' => false],
                        ],
                        'explanation' => '« Au revoir, à bientôt » est une formule courante pour terminer une conversation.',
                    ],
                ],
            ],

            [
                'title' => 'Répondre dans une conversation',
                'description' => 'Choisir une réponse naturelle dans des échanges simples de la vie quotidienne.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelqu’un vous demande : « Tu veux un café ? » Quelle réponse indique que vous acceptez ?',
                        'choices' => [
                            ['choice_text' => 'Oui, merci. Avec plaisir.', 'is_correct' => true],
                            ['choice_text' => 'Non, je suis hier.', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi café demain maison ?', 'is_correct' => false],
                            ['choice_text' => 'Je veux pas oui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Oui, merci. Avec plaisir » est une réponse naturelle pour accepter une proposition.',
                    ],
                    [
                        'question' => 'Comment refuser poliment une invitation ?',
                        'choices' => [
                            ['choice_text' => 'Merci, mais je ne peux pas ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais toi.', 'is_correct' => false],
                            ['choice_text' => 'Je ne suis pas venir.', 'is_correct' => false],
                            ['choice_text' => 'Invitation non parce que.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette réponse remercie la personne puis explique poliment que l’on n’est pas disponible.',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « Désolé, je suis en retard. » Quelle réponse est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Ce n’est pas grave.', 'is_correct' => true],
                            ['choice_text' => 'Je suis retard aussi le.', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi grave demain ?', 'is_correct' => false],
                            ['choice_text' => 'Merci, je ne comprends pas hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ce n’est pas grave » est une réponse naturelle pour rassurer quelqu’un qui s’excuse.',
                    ],
                    [
                        'question' => 'Quelqu’un vous demande : « Tu peux m’aider ? » Quelle réponse accepte la demande ?',
                        'choices' => [
                            ['choice_text' => 'Oui, bien sûr.', 'is_correct' => true],
                            ['choice_text' => 'Non, je peux bien sûr.', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi aide tu.', 'is_correct' => false],
                            ['choice_text' => 'Je suis aider demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Oui, bien sûr » est une manière très courante d’accepter une demande d’aide.',
                    ],
                    [
                        'question' => 'Comment demander poliment à quelqu’un de répéter ?',
                        'choices' => [
                            ['choice_text' => 'Pardon, pouvez-vous répéter, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Quoi ? Parlez plus.', 'is_correct' => false],
                            ['choice_text' => 'Répète toi maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous répéter oui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pardon, pouvez-vous répéter, s’il vous plaît ? » est une demande polie et adaptée.',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « Il fait très chaud aujourd’hui. » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, il fait vraiment chaud.', 'is_correct' => true],
                            ['choice_text' => 'Oui, hier est une chaise.', 'is_correct' => false],
                            ['choice_text' => 'Je chaleur maison demain.', 'is_correct' => false],
                            ['choice_text' => 'Il est chaud parler.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse reprend naturellement l’idée exprimée dans la conversation.',
                    ],
                    [
                        'question' => 'Comment demander le prix d’un objet dans un magasin ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûte cet article ?', 'is_correct' => true],
                            ['choice_text' => 'Quel coûte cet article ?', 'is_correct' => false],
                            ['choice_text' => 'Comment prix cet article ?', 'is_correct' => false],
                            ['choice_text' => 'Cet article combien être ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien coûte cet article ? » est une question correcte et courante pour demander un prix.',
                    ],
                    [
                        'question' => 'Comment demander son chemin poliment ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, où se trouve la gare, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Gare où ? Dis-moi.', 'is_correct' => false],
                            ['choice_text' => 'Vous gare trouvez-moi.', 'is_correct' => false],
                            ['choice_text' => 'La gare être où toi ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule commence par « Excusez-moi » et se termine par « s’il vous plaît », ce qui rend la demande polie.',
                    ],
                    [
                        'question' => 'Quelqu’un vous remercie pour votre aide. Que pouvez-vous répondre ?',
                        'choices' => [
                            ['choice_text' => 'Je vous en prie.', 'is_correct' => true],
                            ['choice_text' => 'De rien, je vous remercie de votre aide.', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi merci demain ?', 'is_correct' => false],
                            ['choice_text' => 'Je suis aide.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je vous en prie » est une réponse polie à un remerciement.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « Vous êtes libre demain matin ? » Quelle réponse convient si vous êtes disponible ?',
                        'choices' => [
                            ['choice_text' => 'Oui, je suis disponible demain matin.', 'is_correct' => true],
                            ['choice_text' => 'Oui, je disponible suis hier.', 'is_correct' => false],
                            ['choice_text' => 'Je demain libre être non.', 'is_correct' => false],
                            ['choice_text' => 'Disponible pourquoi demain matin ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase répond directement à la question et confirme la disponibilité.',
                    ],
                    [
                        'question' => 'Quelle réponse montre que vous n’avez pas compris ?',
                        'choices' => [
                            ['choice_text' => 'Je suis désolé, je n’ai pas compris.', 'is_correct' => true],
                            ['choice_text' => 'Je comprends parfaitement hier.', 'is_correct' => false],
                            ['choice_text' => 'Je n’ai pas entendre demain.', 'is_correct' => false],
                            ['choice_text' => 'Compris pas être oui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je n’ai pas compris » est une formulation naturelle pour signaler qu’un message n’a pas été compris.',
                    ],
                ],
            ],

            [
                'title' => 'Demandes et interactions polies',
                'description' => 'Utiliser les expressions adaptées pour demander quelque chose, proposer une idée et interagir poliment.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle demande est la plus polie dans un contexte courant ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que vous pouvez m’aider, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Aide-moi maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Tu dois m’aider.', 'is_correct' => false],
                            ['choice_text' => 'Donne aide.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure « Est-ce que vous pouvez... ? » avec « s’il vous plaît » permet de formuler une demande polie.',
                    ],
                    [
                        'question' => 'Comment demander un verre d’eau poliment ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous me donner un verre d’eau, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Donne eau maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Je veux eau toi.', 'is_correct' => false],
                            ['choice_text' => 'Vous donner eau oui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous... ? » est une formulation polie pour demander un service.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une proposition ?',
                        'choices' => [
                            ['choice_text' => 'On pourrait aller au parc.', 'is_correct' => true],
                            ['choice_text' => 'Il faut jamais parc.', 'is_correct' => false],
                            ['choice_text' => 'Le parc est parce que.', 'is_correct' => false],
                            ['choice_text' => 'Parc nous hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« On pourrait... » permet de proposer une idée de manière souple et naturelle.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de proposer une activité à plusieurs personnes ?',
                        'choices' => [
                            ['choice_text' => 'Et si on allait au cinéma ?', 'is_correct' => true],
                            ['choice_text' => 'Et si vous cinéma alliez hier ?', 'is_correct' => false],
                            ['choice_text' => 'Cinéma on si demain.', 'is_correct' => false],
                            ['choice_text' => 'On aller cinéma si.', 'is_correct' => false],
                        ],
                        'explanation' => '« Et si on allait... ? » est une formule très naturelle pour faire une proposition.',
                    ],
                    [
                        'question' => 'Comment demander à quelqu’un d’attendre ?',
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous attendre un instant, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Attends toi ici maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous attendre instant.', 'is_correct' => false],
                            ['choice_text' => 'Attendre toi demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule « Pouvez-vous... ? » suivie de « s’il vous plaît » est polie.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander la permission ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que je peux ouvrir la fenêtre ?', 'is_correct' => true],
                            ['choice_text' => 'Je peux la fenêtre ouvrir ?', 'is_correct' => false],
                            ['choice_text' => 'Fenêtre je permission.', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir fenêtre moi oui.', 'is_correct' => false],
                        ],
                        'explanation' => '« Est-ce que je peux... ? » est une structure courante pour demander la permission.',
                    ],
                    [
                        'question' => 'Comment proposer son aide ?',
                        'choices' => [
                            ['choice_text' => 'Je peux vous aider si vous voulez.', 'is_correct' => true],
                            ['choice_text' => 'Vous aider je peux vouloir.', 'is_correct' => false],
                            ['choice_text' => 'Je vous aide peut-être jamais.', 'is_correct' => false],
                            ['choice_text' => 'Aide vous moi maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je peux vous aider si vous voulez » est une proposition d’aide naturelle et polie.',
                    ],
                    [
                        'question' => 'Quelle réponse convient si vous acceptez une suggestion ?',
                        'choices' => [
                            ['choice_text' => 'Oui, bonne idée.', 'is_correct' => true],
                            ['choice_text' => 'Non, bonne idée oui.', 'is_correct' => false],
                            ['choice_text' => 'Je idée demain.', 'is_correct' => false],
                            ['choice_text' => 'Bonne idée pourquoi non rien.', 'is_correct' => false],
                        ],
                        'explanation' => '« Oui, bonne idée » est une réponse simple et naturelle pour accepter une proposition.',
                    ],
                    [
                        'question' => 'Quelle réponse montre un désaccord poli ?',
                        'choices' => [
                            ['choice_text' => 'Je comprends, mais je ne suis pas tout à fait d’accord.', 'is_correct' => true],
                            ['choice_text' => 'Tu as tort, c’est tout.', 'is_correct' => false],
                            ['choice_text' => 'Non, impossible toi.', 'is_correct' => false],
                            ['choice_text' => 'Je désaccord parce que jamais.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation reconnaît l’idée de l’autre avant d’exprimer un désaccord, ce qui rend l’échange plus poli.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander une information supplémentaire ?',
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous m’en dire un peu plus ?', 'is_correct' => true],
                            ['choice_text' => 'Dites plus moi.', 'is_correct' => false],
                            ['choice_text' => 'Plus vous parler moi.', 'is_correct' => false],
                            ['choice_text' => 'Je veux information plus hier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pouvez-vous m’en dire un peu plus ? » est une formule courante pour demander davantage d’informations.',
                    ],
                ],
            ],

            [
                'title' => 'Prononciation et expression orale',
                'description' => 'Associer des principes simples de prononciation à une communication orale claire et naturelle.',
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Pourquoi est-il important de parler clairement ?',
                        'choices' => [
                            ['choice_text' => 'Pour que l’interlocuteur comprenne facilement le message', 'is_correct' => true],
                            ['choice_text' => 'Pour parler toujours plus vite', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toutes les pauses', 'is_correct' => false],
                            ['choice_text' => 'Pour utiliser uniquement des mots compliqués', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne articulation et un débit adapté facilitent la compréhension du message.',
                    ],
                    [
                        'question' => 'Quelle pratique peut aider à améliorer la prononciation ?',
                        'choices' => [
                            ['choice_text' => 'Répéter régulièrement des mots et des phrases à voix haute', 'is_correct' => true],
                            ['choice_text' => 'Éviter complètement de parler', 'is_correct' => false],
                            ['choice_text' => 'Parler le plus vite possible', 'is_correct' => false],
                            ['choice_text' => 'Mémoriser seulement les règles écrites', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition à voix haute permet d’entraîner l’articulation, le rythme et les sons.',
                    ],
                    [
                        'question' => 'Dans une conversation, pourquoi les pauses peuvent-elles être utiles ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent d’organiser les idées et de rendre le discours plus clair', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toujours le message incorrect', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent tous les verbes', 'is_correct' => false],
                            ['choice_text' => 'Elles servent uniquement dans les textes écrits', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pauses naturelles permettent de respirer, de réfléchir et de mieux structurer ce que l’on dit.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour demander à quelqu’un de parler moins vite ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous parler un peu plus lentement, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Parlez moins vite maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Vous parler lentement moi.', 'is_correct' => false],
                            ['choice_text' => 'Lentement vous devez.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase est polie et exprime clairement le besoin de parler moins vite.',
                    ],
                    [
                        'question' => 'Quelle intonation est généralement attendue à la fin d’une question directe ?',
                        'choices' => [
                            ['choice_text' => 'Une intonation qui signale qu’il s’agit d’une question', 'is_correct' => true],
                            ['choice_text' => 'Toujours une longue pause silencieuse', 'is_correct' => false],
                            ['choice_text' => 'Une voix complètement monotone dans tous les contextes', 'is_correct' => false],
                            ['choice_text' => 'Aucune variation de voix', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’oral, l’intonation aide l’interlocuteur à reconnaître une question.',
                    ],
                    [
                        'question' => 'Quelle expression peut aider à gagner un peu de temps pour réfléchir ?',
                        'choices' => [
                            ['choice_text' => 'Voyons…', 'is_correct' => true],
                            ['choice_text' => 'Jamais maintenant hier.', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi table demain ?', 'is_correct' => false],
                            ['choice_text' => 'Je parler réflexion.', 'is_correct' => false],
                        ],
                        'explanation' => '« Voyons… » peut servir de petite pause naturelle avant de formuler une réponse.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour demander une clarification ?',
                        'choices' => [
                            ['choice_text' => 'Qu’est-ce que vous voulez dire exactement ?', 'is_correct' => true],
                            ['choice_text' => 'Vous dites exactement quoi être ?', 'is_correct' => false],
                            ['choice_text' => 'Dire vous exactement maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Quoi vouloir dire vous le ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation permet de demander une précision sans être agressif.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée lorsque l’on ne connaît pas un mot ?',
                        'choices' => [
                            ['choice_text' => 'Je ne connais pas ce mot. Pouvez-vous me l’expliquer ?', 'is_correct' => true],
                            ['choice_text' => 'Je connais pas mot explique.', 'is_correct' => false],
                            ['choice_text' => 'Mot inconnu, passez.', 'is_correct' => false],
                            ['choice_text' => 'Je ne mot connais pas vous.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation signale le problème et demande poliment une explication.',
                    ],
                    [
                        'question' => 'Que faut-il faire pour être plus facile à comprendre à l’oral ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un débit adapté et articuler les mots', 'is_correct' => true],
                            ['choice_text' => 'Parler très vite sans respirer', 'is_correct' => false],
                            ['choice_text' => 'Éviter tous les mots simples', 'is_correct' => false],
                            ['choice_text' => 'Parler sans regarder son interlocuteur dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rythme adapté et une bonne articulation rendent le discours plus compréhensible.',
                    ],
                    [
                        'question' => 'Quelle formule convient lorsqu’on veut vérifier qu’on a bien compris ?',
                        'choices' => [
                            ['choice_text' => 'Si j’ai bien compris, vous voulez dire que le rendez-vous est demain.', 'is_correct' => true],
                            ['choice_text' => 'Compris vous demain rendez-vous.', 'is_correct' => false],
                            ['choice_text' => 'Vous voulez compris demain.', 'is_correct' => false],
                            ['choice_text' => 'Je comprendre rendez-vous vous.', 'is_correct' => false],
                        ],
                        'explanation' => '« Si j’ai bien compris » permet de reformuler une information pour vérifier sa compréhension.',
                    ],
                ],
            ],

            [
                'title' => 'Révision de communication orale',
                'description' => 'Réviser les compétences fondamentales de l’expression orale dans des situations personnelles et quotidiennes.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous rencontrez un professeur pour la première fois. Quelle formule est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame, enchanté de faire votre connaissance.', 'is_correct' => true],
                            ['choice_text' => 'Salut, ça roule ?', 'is_correct' => false],
                            ['choice_text' => 'Hey, donne-moi le cours.', 'is_correct' => false],
                            ['choice_text' => 'Yo, professeur.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première formule est polie et adaptée à une rencontre avec un professeur.',
                    ],
                    [
                        'question' => 'Un ami vous propose de sortir mais vous êtes occupé. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Merci pour la proposition, mais je suis occupé ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Non, toi sortir impossible.', 'is_correct' => false],
                            ['choice_text' => 'Je suis proposition demain occupé.', 'is_correct' => false],
                            ['choice_text' => 'Sortir non parce que jamais toi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase remercie l’ami et explique clairement la raison du refus.',
                    ],
                    [
                        'question' => 'Vous êtes dans un magasin et vous ne trouvez pas un produit. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, pourriez-vous m’indiquer où se trouve ce produit ?', 'is_correct' => true],
                            ['choice_text' => 'Produit où ? Donnez.', 'is_correct' => false],
                            ['choice_text' => 'Vous produit montrer moi vite.', 'is_correct' => false],
                            ['choice_text' => 'Je veux produit là-bas maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est claire, polie et adaptée à une demande dans un magasin.',
                    ],
                    [
                        'question' => 'Un collègue vous demande votre opinion. Quelle phrase convient pour commencer ?',
                        'choices' => [
                            ['choice_text' => 'À mon avis, cette solution est intéressante.', 'is_correct' => true],
                            ['choice_text' => 'Mon avis est parce que solution.', 'is_correct' => false],
                            ['choice_text' => 'Solution intéressante moi hier.', 'is_correct' => false],
                            ['choice_text' => 'Je opinion cette solution maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« À mon avis » est une expression courante pour introduire son opinion.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander un rendez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Serait-il possible de fixer un rendez-vous mardi matin ?', 'is_correct' => true],
                            ['choice_text' => 'Rendez-vous mardi moi possible ?', 'is_correct' => false],
                            ['choice_text' => 'Je veux rendez-vous mardi maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Mardi rendez-vous être vous.', 'is_correct' => false],
                        ],
                        'explanation' => '« Serait-il possible de... ? » est une formulation polie pour demander un rendez-vous.',
                    ],
                    [
                        'question' => 'Vous n’entendez pas bien votre interlocuteur. Quelle phrase est adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Pardon, je vous entends mal. Pouvez-vous parler un peu plus fort ?', 'is_correct' => true],
                            ['choice_text' => 'Je vous entends mal vous parler fort.', 'is_correct' => false],
                            ['choice_text' => 'Plus fort, maintenant.', 'is_correct' => false],
                            ['choice_text' => 'Votre voix pas bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation explique le problème et demande poliment de parler plus fort.',
                    ],
                    [
                        'question' => 'Quelle réponse montre que vous êtes d’accord avec une suggestion ?',
                        'choices' => [
                            ['choice_text' => 'Oui, je suis d’accord. C’est une bonne idée.', 'is_correct' => true],
                            ['choice_text' => 'Non, je suis d’accord jamais.', 'is_correct' => false],
                            ['choice_text' => 'Je suis idée demain.', 'is_correct' => false],
                            ['choice_text' => 'Bonne idée pas oui.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse exprime clairement l’accord et renforce celui-ci avec une appréciation positive.',
                    ],
                    [
                        'question' => 'Quelle expression permet de commencer une courte présentation orale ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour à tous, je vais me présenter rapidement.', 'is_correct' => true],
                            ['choice_text' => 'Bonjour présentation moi tous rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Je présentation être maintenant.', 'is_correct' => false],
                            ['choice_text' => 'À tous présentation demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formule annonce clairement le début d’une présentation et s’adresse naturellement au public.',
                    ],
                    [
                        'question' => 'Comment terminer poliment une courte présentation ?',
                        'choices' => [
                            ['choice_text' => 'Merci pour votre attention.', 'is_correct' => true],
                            ['choice_text' => 'Voilà, fin attention vous merci pas.', 'is_correct' => false],
                            ['choice_text' => 'Attention est merci peut-être.', 'is_correct' => false],
                            ['choice_text' => 'Je termine vous maintenant attention.', 'is_correct' => false],
                        ],
                        'explanation' => '« Merci pour votre attention » est une formule classique pour terminer une présentation orale.',
                    ],
                    [
                        'question' => 'Quel comportement facilite une conversation ?',
                        'choices' => [
                            ['choice_text' => 'Écouter l’interlocuteur et répondre en lien avec ce qu’il dit', 'is_correct' => true],
                            ['choice_text' => 'Parler sans laisser l’autre répondre', 'is_correct' => false],
                            ['choice_text' => 'Changer de sujet à chaque phrase', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les questions de l’interlocuteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne conversation repose notamment sur l’écoute, les réponses pertinentes et l’alternance entre les interlocuteurs.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de prendre la parole naturellement dans une discussion ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, je voudrais ajouter quelque chose.', 'is_correct' => true],
                            ['choice_text' => 'Je parle maintenant parce que vous.', 'is_correct' => false],
                            ['choice_text' => 'Donnez-moi la parole vite.', 'is_correct' => false],
                            ['choice_text' => 'Parole moi maintenant.', 'is_correct' => false],
                        ],
                        'explanation' => '« Excusez-moi, je voudrais ajouter quelque chose » permet d’intervenir de manière polie.',
                    ],
                    [
                        'question' => 'Quelle phrase est adaptée pour demander si une personne a compris ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que c’est clair pour vous ?', 'is_correct' => true],
                            ['choice_text' => 'Vous comprendre clair oui ?', 'is_correct' => false],
                            ['choice_text' => 'Compris vous être clair.', 'is_correct' => false],
                            ['choice_text' => 'C’est vous compris ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Est-ce que c’est clair pour vous ? » permet de vérifier poliment la compréhension de l’interlocuteur.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour s’excuser après une erreur ?',
                        'choices' => [
                            ['choice_text' => 'Je suis désolé, c’était une erreur.', 'is_correct' => true],
                            ['choice_text' => 'Erreur moi jamais désolé.', 'is_correct' => false],
                            ['choice_text' => 'Je suis erreur demain.', 'is_correct' => false],
                            ['choice_text' => 'Désolé était erreur vous.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase reconnaît l’erreur et présente des excuses de manière simple et naturelle.',
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
