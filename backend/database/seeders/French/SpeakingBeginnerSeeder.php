<?php

namespace Database\Seeders;

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
                        'question' => 'Dans un bureau, un client vous dit : « Bonjour, comment allez-vous ? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour, j’ai très bien, merci.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, je vais très bien, merci.', 'is_correct' => true],
                            ['choice_text' => 'Bonjour, je vais à Rabat, merci.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, je m’appelle bien, merci.', 'is_correct' => false],
                        ],
                        'explanation' => '« Aller bien » sert à parler de sa santé ou de son humeur, et on remercie ensuite la personne qui demande.',
                    ],
                    [
                        'question' => 'Lina arrive dans un nouveau groupe et donne son prénom. Que dit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Je m’appelles Lina.', 'is_correct' => false],
                            ['choice_text' => 'Je me appelle Lina.', 'is_correct' => false],
                            ['choice_text' => 'Je m’appelle Lina.', 'is_correct' => true],
                            ['choice_text' => 'Je suis appelle Lina.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « s’appeler » est pronominal : « je m’appelle », sans « s » à la fin et avec l’apostrophe.',
                    ],
                    [
                        'question' => 'Un camarade vous demande : « Tu habites où ? » Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Je habite à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'J’habite en Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Je suis habite Rabat.', 'is_correct' => false],
                            ['choice_text' => 'J’habite à Rabat.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant le nom d’une ville, on utilise « à ». Et « je » devient « j’ » devant « habite ».',
                    ],
                    [
                        'question' => 'Un voisin vous demande : « Quel âge as-tu ? » Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'J’ai vingt ans.', 'is_correct' => true],
                            ['choice_text' => 'Je suis vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'J’ai à vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Je suis vingt années.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, l’âge se dit avec « avoir », pas avec « être ».',
                    ],
                    [
                        'question' => 'Karim se présente à un voisin et veut dire sa nationalité. Que dit-il ?',
                        'choices' => [
                            ['choice_text' => 'J’ai marocain.', 'is_correct' => false],
                            ['choice_text' => 'Je viens marocain.', 'is_correct' => false],
                            ['choice_text' => 'Je suis marocain.', 'is_correct' => true],
                            ['choice_text' => 'Je suis de marocain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La nationalité se dit avec « être » et un adjectif : « Je suis marocain », « Je suis marocaine » pour une femme.',
                    ],
                    [
                        'question' => 'Vous présentez votre ami Karim à votre sœur. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Voici mon amie Karim.', 'is_correct' => false],
                            ['choice_text' => 'Voici ma ami Karim.', 'is_correct' => false],
                            ['choice_text' => 'Je voici mon ami Karim.', 'is_correct' => false],
                            ['choice_text' => 'Voici mon ami Karim.', 'is_correct' => true],
                        ],
                        'explanation' => '« Voici » suffit pour présenter quelqu’un, et « mon ami » s’accorde au masculin.',
                    ],
                    [
                        'question' => 'Un nouveau collègue vous dit : « Enchanté de faire votre connaissance. » Quelle réponse est adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Enchanté de rien.', 'is_correct' => false],
                            ['choice_text' => 'Enchanté également.', 'is_correct' => true],
                            ['choice_text' => 'Pas de quoi, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'Bonne nuit, et merci.', 'is_correct' => false],
                        ],
                        'explanation' => 'On renvoie la politesse reçue avec « enchanté également » ou « moi de même ».',
                    ],
                    [
                        'question' => 'Vous voulez connaître le métier d’un ami. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Tu es quoi dans la vie ?', 'is_correct' => false],
                            ['choice_text' => 'Tu fais quoi dans la vie ?', 'is_correct' => true],
                            ['choice_text' => 'Tu habites où dans la vie ?', 'is_correct' => false],
                            ['choice_text' => 'Tu as quel âge dans la vie ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la conversation, « Tu fais quoi dans la vie ? » sert à demander le métier ou les études de quelqu’un.',
                    ],
                    [
                        'question' => 'À l’université, un étudiant vous demande ce que vous faites. Vous suivez des cours d’informatique. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'J’étudie l’informatique à l’université.', 'is_correct' => true],
                            ['choice_text' => 'J’étudie informatique à l’université.', 'is_correct' => false],
                            ['choice_text' => 'Je étudie l’informatique à l’université.', 'is_correct' => false],
                            ['choice_text' => 'Je suis étudie l’informatique à l’université.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « étudier », on met l’article : « l’informatique ». Et « je » devient « j’ » devant la voyelle.',
                    ],
                    [
                        'question' => 'Vous quittez un magasin après vos achats. Quelle formule dites-vous à la vendeuse ?',
                        'choices' => [
                            ['choice_text' => 'Au revoir, à bientôt.', 'is_correct' => true],
                            ['choice_text' => 'Bonjour, à bientôt.', 'is_correct' => false],
                            ['choice_text' => 'Bienvenue, à bientôt.', 'is_correct' => false],
                            ['choice_text' => 'Au revoir, bonne arrivée.', 'is_correct' => false],
                        ],
                        'explanation' => '« Au revoir » ferme la conversation. « Bonjour » et « bienvenue » servent à l’ouvrir.',
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
                        'question' => 'Une amie vous demande : « Tu veux un café ? » Vous acceptez. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Oui, merci. De rien.', 'is_correct' => false],
                            ['choice_text' => 'Non, merci. Avec plaisir.', 'is_correct' => false],
                            ['choice_text' => 'Oui, je vous en prie.', 'is_correct' => false],
                            ['choice_text' => 'Oui, merci. Avec plaisir.', 'is_correct' => true],
                        ],
                        'explanation' => '« Avec plaisir » exprime que l’on accepte volontiers. « De rien » répond à un remerciement, il ne sert pas à accepter.',
                    ],
                    [
                        'question' => 'Une collègue vous invite au restaurant, mais vous ne pouvez pas venir ce soir. Comment refuser poliment ?',
                        'choices' => [
                            ['choice_text' => 'Merci, mais je pas peux ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Merci, mais je ne suis pas ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Merci, mais je ne peux pas ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Merci, mais je ne peux pas à ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'On remercie d’abord, puis on explique avec « je ne peux pas ». La négation entoure le verbe : ne + peux + pas.',
                    ],
                    [
                        'question' => 'Un ami arrive en retard et dit : « Désolé, je suis en retard. » Quelle réponse est adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Ce n’est pas grave.', 'is_correct' => true],
                            ['choice_text' => 'Avec plaisir, merci.', 'is_correct' => false],
                            ['choice_text' => 'Enchanté, bonne journée.', 'is_correct' => false],
                            ['choice_text' => 'Oui, bien sûr, merci.', 'is_correct' => false],
                        ],
                        'explanation' => 'On rassure la personne avec « ce n’est pas grave ». Les autres réponses ne répondent pas à des excuses.',
                    ],
                    [
                        'question' => 'Votre frère vous demande : « Tu peux m’aider ? » Vous êtes d’accord. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Non, désolé, je suis occupé.', 'is_correct' => false],
                            ['choice_text' => 'Oui, bien sûr.', 'is_correct' => true],
                            ['choice_text' => 'Oui, je peux m’aide, bien sûr.', 'is_correct' => false],
                            ['choice_text' => 'Oui, je m’aide bien sûr.', 'is_correct' => false],
                        ],
                        'explanation' => '« Oui, bien sûr » accepte tout de suite. Après « pouvoir », le verbe reste à l’infinitif (aider) ; « je m’aide » voudrait dire que l’on s’aide soi-même.',
                    ],
                    [
                        'question' => 'Le guichetier parle vite et vous n’avez pas compris. Comment lui demander poliment de répéter ?',
                        'choices' => [
                            ['choice_text' => 'Pardon, pouvez-vous répéter, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Quoi ? Répète encore une fois !', 'is_correct' => false],
                            ['choice_text' => 'Pardon, pouvez-vous répète, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pardon, tu peux répéter-vous, s’il vous plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un inconnu, on dit « vous » et on ajoute « pardon » et « s’il vous plaît ». Après « pouvez-vous », le verbe est à l’infinitif.',
                    ],
                    [
                        'question' => 'Un voisin dit : « Il fait très chaud aujourd’hui. » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, il est vraiment chaud.', 'is_correct' => false],
                            ['choice_text' => 'Oui, je fais vraiment chaud.', 'is_correct' => false],
                            ['choice_text' => 'Oui, il fait vraiment chaud.', 'is_correct' => true],
                            ['choice_text' => 'Oui, il y a vraiment chaud.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour la météo, on emploie « il fait » : il fait chaud, il fait froid.',
                    ],
                    [
                        'question' => 'Dans un magasin, vous voulez connaître le prix d’un sac. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûte ce sac ?', 'is_correct' => true],
                            ['choice_text' => 'Quel coûte ce sac ?', 'is_correct' => false],
                            ['choice_text' => 'Comment coûte ce sac ?', 'is_correct' => false],
                            ['choice_text' => 'Quand coûte ce sac ?', 'is_correct' => false],
                        ],
                        'explanation' => 'On demande une quantité ou un prix avec « combien ». Les autres mots interrogatifs ne vont pas avec « coûter ».',
                    ],
                    [
                        'question' => 'Vous cherchez la gare dans une ville inconnue et vous arrêtez une passante. Que lui dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, où trouve la gare, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, la gare est où vous, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Hé, la gare, c’est où ? Dites-moi.', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, où se trouve la gare, s’il vous plaît ?', 'is_correct' => true],
                        ],
                        'explanation' => 'On commence par « excusez-moi » et on finit par « s’il vous plaît » : la demande reste polie avec une inconnue.',
                    ],
                    [
                        'question' => 'Vous aidez une voisine à porter ses courses. Elle vous dit : « Merci beaucoup ! » Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Je vous en remercie.', 'is_correct' => false],
                            ['choice_text' => 'Je vous le prie.', 'is_correct' => false],
                            ['choice_text' => 'Bonne chance à vous.', 'is_correct' => false],
                            ['choice_text' => 'Je vous en prie.', 'is_correct' => true],
                        ],
                        'explanation' => '« Je vous en prie » répond à un remerciement avec une personne que l’on vouvoie.',
                    ],
                    [
                        'question' => 'Un collègue demande : « Vous êtes libre demain matin ? » Vous l’êtes. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Oui, j’ai disponible demain matin.', 'is_correct' => false],
                            ['choice_text' => 'Oui, je suis disponible demain matin.', 'is_correct' => true],
                            ['choice_text' => 'Oui, je suis disponible hier matin.', 'is_correct' => false],
                            ['choice_text' => 'Non, je suis disponible demain matin.', 'is_correct' => false],
                        ],
                        'explanation' => 'On reprend l’idée de la question avec « être disponible ». « Hier » parle du passé, et « non » contredit la phrase.',
                    ],
                    [
                        'question' => 'Un touriste vous parle trop vite en français. Quelle phrase montre que vous n’avez pas compris ?',
                        'choices' => [
                            ['choice_text' => 'Je suis désolé, je n’ai pas comprends.', 'is_correct' => false],
                            ['choice_text' => 'Je suis désolé, je ne suis pas compris.', 'is_correct' => false],
                            ['choice_text' => 'Je suis désolé, je n’ai pas compris.', 'is_correct' => true],
                            ['choice_text' => 'Je suis désolé, je n’ai compris pas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au passé composé, on dit « je n’ai pas compris » : ne + avoir + pas + participe. « Je ne suis pas compris » voudrait dire que personne ne me comprend.',
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
                        'question' => 'Vous demandez de l’aide à une inconnue dans la rue. Quelle demande est la plus polie ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que vous pouvez m’aider, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Aidez-moi maintenant, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Vous devez m’aider, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Tu peux m’aider, s’il te plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Une question avec « vous pouvez » reste la plus douce. L’ordre ou le tutoiement conviennent moins à une inconnue.',
                    ],
                    [
                        'question' => 'Au restaurant, vous voulez un verre d’eau. Comment le demander poliment au serveur ?',
                        'choices' => [
                            ['choice_text' => 'Je veux un verre d’eau tout de suite.', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me donne un verre d’eau, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous me donner un verre d’eau, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Pourriez-tu me donner un verre d’eau, s’il vous plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnel « pourriez-vous » adoucit la demande. Il est suivi de l’infinitif et se combine avec « vous ».',
                    ],
                    [
                        'question' => 'Vous voulez proposer une sortie à vos amis ce week-end. Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'On pourrait aller à le parc.', 'is_correct' => false],
                            ['choice_text' => 'On pourrait aller au parc.', 'is_correct' => true],
                            ['choice_text' => 'On pourrais aller au parc.', 'is_correct' => false],
                            ['choice_text' => 'On pourrait allé au parc.', 'is_correct' => false],
                        ],
                        'explanation' => '« On pourrait » + infinitif lance une idée sans l’imposer. « À + le » devient « au ».',
                    ],
                    [
                        'question' => 'Vos amis ne savent pas quoi faire samedi soir. Quelle phrase propose d’aller au cinéma ?',
                        'choices' => [
                            ['choice_text' => 'Et si on irait au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Et si on va au cinéma ?', 'is_correct' => false],
                            ['choice_text' => 'Et si on allait au cinéma ?', 'is_correct' => true],
                            ['choice_text' => 'Et si nous allait au cinéma ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « et si », on emploie l’imparfait : « et si on allait… ? ». Le conditionnel est une erreur fréquente.',
                    ],
                    [
                        'question' => 'Un client attend au comptoir pendant que vous finissez un appel. Que lui dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous attendez un instant, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous attendre un instant, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Pouvez-vous attendre à un instant, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous attendre un instant, s’il te plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « pouvez-vous », le verbe est à l’infinitif. On garde « vous » jusqu’au bout de la phrase.',
                    ],
                    [
                        'question' => 'Chez des amis, vous avez très chaud. Comment demander la permission d’ouvrir la fenêtre ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que je peux ouvre la fenêtre ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que je peut ouvrir la fenêtre ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que je peux la fenêtre ouvrir ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que je peux ouvrir la fenêtre ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Je peux » s’écrit avec un x, et le verbe qui suit reste à l’infinitif. L’objet se place après le verbe.',
                    ],
                    [
                        'question' => 'Une dame âgée porte des sacs lourds dans l’escalier. Comment lui proposer votre aide ?',
                        'choices' => [
                            ['choice_text' => 'Je peux vous aidez si vous voulez.', 'is_correct' => false],
                            ['choice_text' => 'Je peux vous aider si vous voulons.', 'is_correct' => false],
                            ['choice_text' => 'Je peux vous aider si vous voulez.', 'is_correct' => true],
                            ['choice_text' => 'Je peux t’aider si vous voulez.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je peux vous aider » reste à l’infinitif. Avec une personne que l’on vouvoie, on garde « vous » dans toute la phrase.',
                    ],
                    [
                        'question' => 'Votre cousine propose : « Et si on mangeait une pizza ? » Vous êtes d’accord. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Oui, bonne idée.', 'is_correct' => true],
                            ['choice_text' => 'Oui, bon idée.', 'is_correct' => false],
                            ['choice_text' => 'Oui, bonnes idée.', 'is_correct' => false],
                            ['choice_text' => 'Non, désolé, pas ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Idée » est féminin : on dit « bonne idée ». Le « non » refuserait la pizza.',
                    ],
                    [
                        'question' => 'Un ami propose de partir à 6 h du matin. Vous le comprenez, mais ce n’est pas votre avis. Quelle réponse est polie ?',
                        'choices' => [
                            ['choice_text' => 'Je comprends, et je suis tout à fait d’accord.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends, mais je suis pas tout à fait accord.', 'is_correct' => false],
                            ['choice_text' => 'Vous avez tort, je ne vous écoute plus.', 'is_correct' => false],
                            ['choice_text' => 'Je comprends, mais je ne suis pas tout à fait d’accord.', 'is_correct' => true],
                        ],
                        'explanation' => 'On reconnaît d’abord l’idée de l’autre, puis on exprime son désaccord avec « mais ». Les autres réponses expriment un accord, sont impolies ou sont incorrectes.',
                    ],
                    [
                        'question' => 'Un collègue vous dit son nom de famille, mais vous ne savez pas l’écrire. Que lui demandez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Comment ça s’écris, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Comment ça s’écrit, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Comment ça est écrit vous, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Quand ça s’écrit, s’il vous plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour demander l’orthographe, on dit « comment ça s’écrit ? ». Le verbe s’écrit avec « ça » à la troisième personne.',
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
                        'question' => 'Samir présente son exposé à toute la classe et parle à toute vitesse. Quel conseil lui donner pour qu’on le comprenne ?',
                        'choices' => [
                            ['choice_text' => 'Parler plus fort en gardant le même rythme', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des mots plus savants pour impressionner', 'is_correct' => false],
                            ['choice_text' => 'Ralentir un peu et bien articuler chaque mot', 'is_correct' => true],
                            ['choice_text' => 'Murmurer pour que chacun se concentre davantage', 'is_correct' => false],
                        ],
                        'explanation' => 'Un débit calme et des mots bien articulés aident l’auditoire à suivre. Le volume seul ne règle pas la vitesse.',
                    ],
                    [
                        'question' => 'Lina veut améliorer sa prononciation du français. Quelle habitude l’aide vraiment ?',
                        'choices' => [
                            ['choice_text' => 'Lire des règles de grammaire en silence', 'is_correct' => false],
                            ['choice_text' => 'Traduire des mots dans sa tête sans parler', 'is_correct' => false],
                            ['choice_text' => 'Apprendre par cœur l’alphabet écrit', 'is_correct' => false],
                            ['choice_text' => 'Répéter chaque jour des phrases à voix haute', 'is_correct' => true],
                        ],
                        'explanation' => 'On entraîne les sons en les prononçant. La lecture silencieuse ne fait pas travailler la bouche.',
                    ],
                    [
                        'question' => 'Pendant un exposé, Yassine marque une courte pause entre deux idées. Quel est l’effet sur le public ?',
                        'choices' => [
                            ['choice_text' => 'Le public perd le fil parce que la phrase est coupée', 'is_correct' => false],
                            ['choice_text' => 'Les mots suivants deviennent plus difficiles à dire', 'is_correct' => false],
                            ['choice_text' => 'Le message devient incorrect pour l’auditeur', 'is_correct' => false],
                            ['choice_text' => 'Le public suit mieux et Yassine organise ses idées', 'is_correct' => true],
                        ],
                        'explanation' => 'Une courte pause laisse au public le temps de comprendre et à celui qui parle le temps de réfléchir.',
                    ],
                    [
                        'question' => 'Un guide touristique parle très vite et vous voulez qu’il ralentisse. Quelle phrase lui dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous parler un peu plus lentement, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Pourriez-vous parler un peu plus fort, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous parler un peu plus lentement, s’il te plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous parler un peu plus longtemps, s’il vous plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « lentement » demande de ralentir. « Fort » concerne le volume, et « tu » ne va pas avec un guide.',
                    ],
                    [
                        'question' => 'Karim demande à son ami : « Tu viens ce soir ? » Que fait sa voix à la fin de la question ?',
                        'choices' => [
                            ['choice_text' => 'Elle descend à la fin de la phrase', 'is_correct' => false],
                            ['choice_text' => 'Elle monte à la fin de la phrase', 'is_correct' => true],
                            ['choice_text' => 'Elle reste plate jusqu’à la fin', 'is_correct' => false],
                            ['choice_text' => 'Elle se tait avant le dernier mot', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’oral, une question à laquelle on répond par oui ou non se termine par une voix qui monte.',
                    ],
                    [
                        'question' => 'Le professeur vous pose une question et vous cherchez votre réponse. Que dites-vous pour gagner quelques secondes ?',
                        'choices' => [
                            ['choice_text' => 'Alors, voyons…', 'is_correct' => true],
                            ['choice_text' => 'Merci, au revoir.', 'is_correct' => false],
                            ['choice_text' => 'Enchanté, voilà.', 'is_correct' => false],
                            ['choice_text' => 'Bonne journée !', 'is_correct' => false],
                        ],
                        'explanation' => '« Alors, voyons… » signale que l’on réfléchit sans rester silencieux.',
                    ],
                    [
                        'question' => 'Un client vous dit une phrase peu claire. Vous voulez qu’il précise. Que demandez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Qu’est-ce que dire vous voulez exactement ?', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce que vous voulez dire exactement ?', 'is_correct' => true],
                            ['choice_text' => 'Qu’est-ce que vous veut dire exactement ?', 'is_correct' => false],
                            ['choice_text' => 'Quoi que vous voulez dire exactement ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qu’est-ce que… » ouvre une question sur l’objet, et le verbe « vouloir » s’accorde avec « vous » : vous voulez.',
                    ],
                    [
                        'question' => 'En cours, l’enseignant emploie le mot « horaire » que vous ne connaissez pas. Que lui dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Que veux dire ce mot, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Quoi veut dire ce mot, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Que veut dit ce mot, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Que veut dire ce mot, s’il vous plaît ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Que veut dire… ? » demande le sens d’un mot. Le verbe « vouloir » s’accorde avec « ce mot » : il veut.',
                    ],
                    [
                        'question' => 'Dans « les amis », que se passe-t-il à l’oral entre « les » et « amis » ?',
                        'choices' => [
                            ['choice_text' => 'On prononce un son [t] qui relie les deux mots', 'is_correct' => false],
                            ['choice_text' => 'On marque une longue pause entre les deux mots', 'is_correct' => false],
                            ['choice_text' => 'On prononce un son [z] qui relie les deux mots', 'is_correct' => true],
                            ['choice_text' => 'On prononce le s comme dans le mot « sac »', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la liaison : le s de « les » se prononce [z] devant la voyelle de « amis ».',
                    ],
                    [
                        'question' => 'Au téléphone, la secrétaire parle de votre rendez-vous. Vous voulez vérifier ce que vous avez compris. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Vous disez que le rendez-vous est demain, c’est bien ça ?', 'is_correct' => false],
                            ['choice_text' => 'Vous dites que le rendez-vous est demain, c’est bien ça ?', 'is_correct' => true],
                            ['choice_text' => 'Vous dites que le rendez-vous demain est, c’est bien ça ?', 'is_correct' => false],
                            ['choice_text' => 'Vous dites que le rendez-vous est demain, bien c’est ça ?', 'is_correct' => false],
                        ],
                        'explanation' => 'On reprend ce que l’on a entendu, puis on demande confirmation avec « c’est bien ça ? ». Le verbe « dire » fait « vous dites ».',
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
                        'question' => 'Vous rencontrez votre professeure pour la première fois. Quelle formule est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour Madame, enchanté de faire votre connaissance.', 'is_correct' => true],
                            ['choice_text' => 'Salut Madame, enchanté de faire ta connaissance.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour Madame, enchanté de faire ta connaissance.', 'is_correct' => false],
                            ['choice_text' => 'Salut, ça roule ? Enchanté de te voir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un professeur, on vouvoie et on commence par « bonjour ». Le « tu » et « salut » conviennent à des amis.',
                    ],
                    [
                        'question' => 'Un ami vous propose de sortir, mais vous êtes occupé. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Merci pour la proposition, mais je suis occupé hier soir.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour la proposition, mais je occupé ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour la proposition, mais j’ai occupé ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour la proposition, mais je suis occupé ce soir.', 'is_correct' => true],
                        ],
                        'explanation' => 'On remercie, puis on donne la raison avec « être occupé ». « Hier soir » ne convient pas à une sortie à venir.',
                    ],
                    [
                        'question' => 'À la gare, vous voulez savoir s’il y a un café près d’ici. Que demandez-vous à un employé ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, est-ce qu’il y a un café près de ici ?', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, est-ce qu’il a un café près d’ici ?', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, est-ce qu’il y a un café près d’ici ?', 'is_correct' => true],
                            ['choice_text' => 'Excusez-moi, est-ce que il y a un café près d’ici ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Il y a » sert à dire qu’une chose existe à un endroit. « Que » et « de » s’élident devant une voyelle : « qu’il », « d’ici ».',
                    ],
                    [
                        'question' => 'Votre collègue vous demande votre opinion sur une solution qui vous plaît. Comment commencez-vous ?',
                        'choices' => [
                            ['choice_text' => 'À mon avis, cette solution est intéressant.', 'is_correct' => false],
                            ['choice_text' => 'À mon avis, cette solution est intéressante.', 'is_correct' => true],
                            ['choice_text' => 'Dans mon avis, cette solution est intéressante.', 'is_correct' => false],
                            ['choice_text' => 'Pour mon avis, cette solution est intéressante.', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « à mon avis », et l’adjectif s’accorde avec « solution », qui est féminin.',
                    ],
                    [
                        'question' => 'Vous voulez voir le médecin. Au téléphone, quelle phrase demande un rendez-vous poliment ?',
                        'choices' => [
                            ['choice_text' => 'Je voudrais prendre un rendez-vous mardi matin, s’il vous plaît.', 'is_correct' => true],
                            ['choice_text' => 'Je voudrais prends un rendez-vous mardi matin, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais prendre un rendez-vous au mardi matin, s’il vous plaît.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrait prendre un rendez-vous mardi matin, s’il vous plaît.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je voudrais » est suivi de l’infinitif : « prendre ». Avec « je », le conditionnel prend un s, et on dit « mardi matin » sans « au ».',
                    ],
                    [
                        'question' => 'Au téléphone, la ligne est mauvaise et vous n’entendez pas bien. Quelle phrase est adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Pardon, je vous entends mal. Pouvez-vous parler un peu plus vite ?', 'is_correct' => false],
                            ['choice_text' => 'Pardon, je vous entends mal. Pouvez-vous parler un peu plus fort ?', 'is_correct' => true],
                            ['choice_text' => 'Pardon, je vous entends mal. Pouvez-vous parlez un peu plus fort ?', 'is_correct' => false],
                            ['choice_text' => 'Pardon, je vous entends mal. Pouvez-vous parler un peu plus forte ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour mieux entendre, on demande de parler plus fort. « Plus vite » aggraverait le problème.',
                    ],
                    [
                        'question' => 'Une amie vous invite à son anniversaire samedi. Vous acceptez avec plaisir. Que répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Oui, avec plaisir, à quel heure ?', 'is_correct' => false],
                            ['choice_text' => 'Oui, avec plaisir, quelle à heure ?', 'is_correct' => false],
                            ['choice_text' => 'Oui, avec plaisir, à quelle heure ?', 'is_correct' => true],
                            ['choice_text' => 'Non, avec plaisir, à quelle heure ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Heure » est féminin : on dit « à quelle heure ». Le « non » contredirait l’acceptation.',
                    ],
                    [
                        'question' => 'Vous devez commencer une courte présentation devant la classe. Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Au revoir à tous, je vais me présenter rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour à tous, je vais me présente rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour à tous, je vais présenter me rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour à tous, je vais me présenter rapidement.', 'is_correct' => true],
                        ],
                        'explanation' => 'On salue le public, puis on annonce ce que l’on va faire. « Me présenter » est un verbe pronominal à l’infinitif.',
                    ],
                    [
                        'question' => 'Vous venez de finir votre présentation devant la classe. Quelle phrase dites-vous pour conclure ?',
                        'choices' => [
                            ['choice_text' => 'Bienvenue à vous, bonne présentation.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour vous attention.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour ta attention.', 'is_correct' => false],
                            ['choice_text' => 'Merci pour votre attention.', 'is_correct' => true],
                        ],
                        'explanation' => 'On termine en remerciant le public. « Votre » est l’adjectif possessif qui va avec « attention ».',
                    ],
                    [
                        'question' => 'Samia discute avec une nouvelle collègue. Quel comportement rend l’échange agréable ?',
                        'choices' => [
                            ['choice_text' => 'Préparer sa réponse sans écouter la fin', 'is_correct' => false],
                            ['choice_text' => 'Écouter la collègue et répondre à ce qu’elle dit', 'is_correct' => true],
                            ['choice_text' => 'Répondre vite pour éviter les silences', 'is_correct' => false],
                            ['choice_text' => 'Parler de soi quel que soit le sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une discussion avance quand chacun écoute l’autre et répond à ce qui vient d’être dit.',
                    ],
                    [
                        'question' => 'Pendant une réunion, vous voulez intervenir sans couper la parole. Quelle phrase utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Excusez-moi, je voudrais ajouter quelque chose.', 'is_correct' => true],
                            ['choice_text' => 'Excusez-moi, je voudrais ajouté quelque chose.', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, je voudrait ajouter quelque chose.', 'is_correct' => false],
                            ['choice_text' => 'Excusez-moi, je voudrais d’ajouter quelque chose.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je voudrais » est suivi directement de l’infinitif. « Excusez-moi » permet d’intervenir poliment.',
                    ],
                    [
                        'question' => 'Vous finissez d’expliquer une consigne à des collègues. Quelle phrase vérifie qu’ils ont compris ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que c’est clair pour toi ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que c’est claire pour vous ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que c’est clair pour vous ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce que ce est clair pour vous ?', 'is_correct' => false],
                        ],
                        'explanation' => 'On s’adresse à un groupe : « vous ». « C’est » s’écrit avec l’apostrophe, et « clair » reste au masculin.',
                    ],
                    [
                        'question' => 'Vous avez envoyé un message au mauvais destinataire. Quelle phrase vous excuse simplement ?',
                        'choices' => [
                            ['choice_text' => 'Je suis désolé, c’était une erreur.', 'is_correct' => true],
                            ['choice_text' => 'Je suis content, c’était une erreur.', 'is_correct' => false],
                            ['choice_text' => 'Je suis désolé, c’était un erreur.', 'is_correct' => false],
                            ['choice_text' => 'Je suis désolé, ce était une erreur.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je suis désolé » présente des excuses. « Erreur » est féminin : « une erreur », et « c’était » prend l’apostrophe.',
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
