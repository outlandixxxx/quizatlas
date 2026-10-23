<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Números, fechas y horas',
                'description' => 'Nombres, jours, mois, dates et expressions simples de l’heure en espagnol.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Quel est le premier mois de l’année en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'marzo', 'is_correct' => false],
                            ['choice_text' => 'junio', 'is_correct' => false],
                            ['choice_text' => 'diciembre', 'is_correct' => false],
                            ['choice_text' => 'enero', 'is_correct' => true],
                        ],
                        'explanation' => 'Enero est le premier mois de l’année.',
                    ],
                    [
                        'question' => 'Karim veut dire « mardi » après avoir dit « lunes ». Quel jour vient juste après lunes ?',
                        'choices' => [
                            ['choice_text' => 'jueves', 'is_correct' => false],
                            ['choice_text' => 'martes', 'is_correct' => true],
                            ['choice_text' => 'domingo', 'is_correct' => false],
                            ['choice_text' => 'viernes', 'is_correct' => false],
                        ],
                        'explanation' => 'Après lunes vient martes.',
                    ],
                    [
                        'question' => 'À quelle date correspond « el primero de mayo » ?',
                        'choices' => [
                            ['choice_text' => '5 de enero', 'is_correct' => false],
                            ['choice_text' => '10 de mayo', 'is_correct' => false],
                            ['choice_text' => '1 de mayo', 'is_correct' => true],
                            ['choice_text' => '15 de marzo', 'is_correct' => false],
                        ],
                        'explanation' => 'El primero de mayo correspond au 1er jour du mois de mayo.',
                    ],
                    [
                        'question' => 'Comment demande-t-on l’heure en espagnol ?',
                        'choices' => [
                            ['choice_text' => '¿Qué hora es?', 'is_correct' => true],
                            ['choice_text' => '¿Qué día es?', 'is_correct' => false],
                            ['choice_text' => '¿Qué tiempo eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cuánto hora tiene?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Qué hora es? est la question habituelle pour demander l’heure.',
                    ],
                    [
                        'question' => 'Quel chiffre correspond au mot « veinte » ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => 'Veinte correspond au nombre 20.',
                    ],
                    [
                        'question' => 'Quel mois vient après septembre ?',
                        'choices' => [
                            ['choice_text' => 'agosto', 'is_correct' => false],
                            ['choice_text' => 'noviembre', 'is_correct' => false],
                            ['choice_text' => 'octubre', 'is_correct' => true],
                            ['choice_text' => 'julio', 'is_correct' => false],
                        ],
                        'explanation' => 'Octubre suit septiembre.',
                    ],
                    [
                        'question' => 'Comment écrit-on le chiffre 7 en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'seis', 'is_correct' => false],
                            ['choice_text' => 'ocho', 'is_correct' => false],
                            ['choice_text' => 'diez', 'is_correct' => false],
                            ['choice_text' => 'siete', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nombre 7 s’écrit siete.',
                    ],
                    [
                        'question' => 'Comment dit-on « il est trois heures » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'Las tres.', 'is_correct' => true],
                            ['choice_text' => 'Los tres.', 'is_correct' => false],
                            ['choice_text' => 'Es tres.', 'is_correct' => false],
                            ['choice_text' => 'Tiene tres.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les heures autres que une heure, on utilise normalement Las + numéro.',
                    ],
                    [
                        'question' => 'Quel jour précède normalement domingo ?',
                        'choices' => [
                            ['choice_text' => 'viernes', 'is_correct' => false],
                            ['choice_text' => 'sábado', 'is_correct' => true],
                            ['choice_text' => 'lunes', 'is_correct' => false],
                            ['choice_text' => 'miércoles', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ordre habituel de la semaine, sábado vient juste avant domingo.',
                    ],
                    [
                        'question' => 'Comment dit-on 12 en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'doce', 'is_correct' => true],
                            ['choice_text' => 'diez', 'is_correct' => false],
                            ['choice_text' => 'once', 'is_correct' => false],
                            ['choice_text' => 'trece', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre 12 est doce.',
                    ],
                    [
                        'question' => 'Quel nombre correspond à « quince » ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => true],
                        ],
                        'explanation' => 'Quince correspond au nombre 15.',
                    ],
                ],
            ],
            [
                'title' => 'Comunicación básica en situaciones reales',
                'description' => 'Expressions pratiques pour demander de l’aide, comprendre une conversation et répondre dans des situations courantes.',
                'duration' => 21,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Nadia veut demander de l’aide à quelqu’un dans la rue. Quelle expression utilise-t-elle ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes llamarme ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes ayudarme?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes ser mesa?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes tener calle?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Puedes ayudarme ? est une demande d’aide directe et naturelle.',
                    ],
                    [
                        'question' => 'Comment demande-t-on « Où sont les toilettes ? » en espagnol ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde está el baño?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde eres el baño?', 'is_correct' => false],
                            ['choice_text' => '¿Qué tienes el baño?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo vive el baño?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Dónde está el baño ? est la question naturelle pour localiser les toilettes.',
                    ],
                    [
                        'question' => 'Que signifie « ¡Cuidado! » ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour !', 'is_correct' => false],
                            ['choice_text' => 'À demain !', 'is_correct' => false],
                            ['choice_text' => 'Je suis d’accord !', 'is_correct' => false],
                            ['choice_text' => 'Attention !', 'is_correct' => true],
                        ],
                        'explanation' => '¡Cuidado! sert à avertir quelqu’un d’un danger ou d’un problème possible.',
                    ],
                    [
                        'question' => 'Comment demande-t-on à quelqu’un de répéter ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes dormir, por favor?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes cerrar, por favor?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes repetir, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes llegar, por favor?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Puedes repetir, por favor ? est une demande courante quand on n’a pas entendu ou compris.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « je ne comprends pas » ?',
                        'choices' => [
                            ['choice_text' => 'No hablo.', 'is_correct' => false],
                            ['choice_text' => 'No vivo.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo.', 'is_correct' => true],
                            ['choice_text' => 'No quiero.', 'is_correct' => false],
                        ],
                        'explanation' => 'No entiendo exprime le fait de ne pas avoir compris ce qui a été dit.',
                    ],
                    [
                        'question' => 'Quelle est une façon polie de demander une information ?',
                        'choices' => [
                            ['choice_text' => 'Dame información ahora.', 'is_correct' => false],
                            ['choice_text' => 'Tú información.', 'is_correct' => false],
                            ['choice_text' => 'Información ayer.', 'is_correct' => false],
                            ['choice_text' => '¿Me puede ayudar, por favor?', 'is_correct' => true],
                        ],
                        'explanation' => '¿Me puede ayudar, por favor ? est une demande polie, surtout dans un contexte formel.',
                    ],
                    [
                        'question' => 'Comment dit-on naturellement « Peux-tu parler plus lentement ? » ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes hablar más grande?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes hablar más despacio?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes hablar más ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes hablar más puerta?', 'is_correct' => false],
                        ],
                        'explanation' => 'Hablar más despacio est l’expression naturelle pour demander une vitesse plus lente.',
                    ],
                    [
                        'question' => 'Si quelqu’un dit « ¿Hablas inglés? », quelle question pose-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il demande si tu sais parler anglais.', 'is_correct' => true],
                            ['choice_text' => 'Il demande où tu habites.', 'is_correct' => false],
                            ['choice_text' => 'Il demande ton âge.', 'is_correct' => false],
                            ['choice_text' => 'Il demande si tu as faim.', 'is_correct' => false],
                        ],
                        'explanation' => '¿Hablas inglés? interroge sur la capacité ou l’habitude de parler anglais.',
                    ],
                    [
                        'question' => 'Quelle est une réponse correcte à « ¿Hablas español? » pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Un poco.', 'is_correct' => true],
                            ['choice_text' => 'Soy mañana.', 'is_correct' => false],
                            ['choice_text' => 'Tengo tres.', 'is_correct' => false],
                            ['choice_text' => 'Es de Madrid.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un poco est une réponse naturelle pour indiquer un niveau limité.',
                    ],
                    [
                        'question' => 'Que signifie « No sé » ?',
                        'choices' => [
                            ['choice_text' => 'Je n’habite pas.', 'is_correct' => false],
                            ['choice_text' => 'Je ne sais pas.', 'is_correct' => true],
                            ['choice_text' => 'Je ne mange pas.', 'is_correct' => false],
                            ['choice_text' => 'Je ne parle pas.', 'is_correct' => false],
                        ],
                        'explanation' => 'No sé signifie que la personne n’a pas l’information ou la réponse.',
                    ],
                    [
                        'question' => 'Quelle réponse est naturelle quand quelqu’un te dit « Que tengas un buen día » ?',
                        'choices' => [
                            ['choice_text' => 'Soy de España.', 'is_correct' => false],
                            ['choice_text' => 'Tengo quince años.', 'is_correct' => false],
                            ['choice_text' => 'Igualmente.', 'is_correct' => true],
                            ['choice_text' => 'No entiendo nada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Igualmente signifie « toi aussi » et répond poliment à un souhait.',
                    ],
                    [
                        'question' => 'Que signifie « Está bien » dans une conversation de tous les jours ?',
                        'choices' => [
                            ['choice_text' => 'J’ai faim.', 'is_correct' => false],
                            ['choice_text' => 'Il est tard, hier.', 'is_correct' => false],
                            ['choice_text' => 'Je suis d’Espagne.', 'is_correct' => false],
                            ['choice_text' => 'C’est bon / d’accord.', 'is_correct' => true],
                        ],
                        'explanation' => 'Está bien sert à accepter, confirmer ou indiquer que quelque chose est correct.',
                    ],
                    [
                        'question' => 'Que signifie « Más despacio, por favor » ?',
                        'choices' => [
                            ['choice_text' => 'S’il vous plaît, plus fort seulement.', 'is_correct' => false],
                            ['choice_text' => 'S’il vous plaît, demain.', 'is_correct' => false],
                            ['choice_text' => 'S’il vous plaît, fermez la porte.', 'is_correct' => false],
                            ['choice_text' => 'S’il vous plaît, plus lentement.', 'is_correct' => true],
                        ],
                        'explanation' => 'Más despacio demande à l’autre personne de parler ou d’agir plus lentement.',
                    ],
                    [
                        'question' => 'Que signifie « Espera un momento » ?',
                        'choices' => [
                            ['choice_text' => 'Attends un moment.', 'is_correct' => true],
                            ['choice_text' => 'Ouvre une fenêtre.', 'is_correct' => false],
                            ['choice_text' => 'Viens demain.', 'is_correct' => false],
                            ['choice_text' => 'Ferme le livre.', 'is_correct' => false],
                        ],
                        'explanation' => 'Espera est l’impératif de esperar pour tú, et un momento indique une attente brève.',
                    ],
                ],
            ],
            [
                'title' => 'Pronunciación y ortografía básica',
                'description' => 'Reconnaissance initiale des sons, des lettres, des accents et des schémas de base de la prononciation.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Quelle lettre représente le son propre à ñ dans des mots comme niño ?',
                        'choices' => [
                            ['choice_text' => 'La letra ñ', 'is_correct' => true],
                            ['choice_text' => 'La letra h', 'is_correct' => false],
                            ['choice_text' => 'La letra b', 'is_correct' => false],
                            ['choice_text' => 'La letra p', 'is_correct' => false],
                        ],
                        'explanation' => 'La ñ représente un son caractéristique de l’espagnol, comme dans niño ou mañana.',
                    ],
                    [
                        'question' => 'Laquelle de ces questions conserve correctement l’accent écrit ?',
                        'choices' => [
                            ['choice_text' => '¿Donde vives?', 'is_correct' => false],
                            ['choice_text' => 'Donde ¿vives?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde vives?', 'is_correct' => true],
                            ['choice_text' => '¿Dondé vives?', 'is_correct' => false],
                        ],
                        'explanation' => 'Dónde porte un accent car c’est un adverbe interrogatif.',
                    ],
                    [
                        'question' => 'Quelle est l’orthographe correcte du nombre 16 en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'dieciseis', 'is_correct' => false],
                            ['choice_text' => 'diez y seis', 'is_correct' => false],
                            ['choice_text' => 'diceséis', 'is_correct' => false],
                            ['choice_text' => 'dieciséis', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme standard est dieciséis, avec un accent sur le deuxième e.',
                    ],
                    [
                        'question' => 'Quel mot représente correctement le mot espagnol pour « école » ?',
                        'choices' => [
                            ['choice_text' => 'escuella', 'is_correct' => false],
                            ['choice_text' => 'escuela', 'is_correct' => true],
                            ['choice_text' => 'escolla', 'is_correct' => false],
                            ['choice_text' => 'eskuela', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme standard est escuela.',
                    ],
                    [
                        'question' => 'Lequel de ces mots est correctement accentué ?',
                        'choices' => [
                            ['choice_text' => 'música', 'is_correct' => true],
                            ['choice_text' => 'musica', 'is_correct' => false],
                            ['choice_text' => 'músíca', 'is_correct' => false],
                            ['choice_text' => 'musicá', 'is_correct' => false],
                        ],
                        'explanation' => 'Música est un mot esdrújulo, et tous les mots esdrújulos portent un accent.',
                    ],
                    [
                        'question' => 'Quel mot commence correctement par le son /b/ ?',
                        'choices' => [
                            ['choice_text' => 'gien', 'is_correct' => false],
                            ['choice_text' => 'jien', 'is_correct' => false],
                            ['choice_text' => 'bien', 'is_correct' => true],
                            ['choice_text' => 'vien', 'is_correct' => false],
                        ],
                        'explanation' => 'Bien commence par la lettre b et c’est un mot de base très fréquent.',
                    ],
                    [
                        'question' => 'Lequel de ces mots contient un accent écrit correctement placé ?',
                        'choices' => [
                            ['choice_text' => 'cancion', 'is_correct' => false],
                            ['choice_text' => 'canción', 'is_correct' => true],
                            ['choice_text' => 'canciónn', 'is_correct' => false],
                            ['choice_text' => 'cancíon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot canción porte un accent sur le o car c’est un mot aigu terminé par n.',
                    ],
                    [
                        'question' => 'Quelle option distingue correctement « si » et « sí » ?',
                        'choices' => [
                            ['choice_text' => 'si signifie toujours affirmation', 'is_correct' => false],
                            ['choice_text' => 'sí introduit toujours une condition', 'is_correct' => false],
                            ['choice_text' => 'il n’y a aucune différence à l’écrit', 'is_correct' => false],
                            ['choice_text' => 'si introduit une condition ; sí peut exprimer une affirmation', 'is_correct' => true],
                        ],
                        'explanation' => 'La conjonction conditionnelle s’écrit si sans accent, tandis que sí peut exprimer une affirmation ou servir de pronom.',
                    ],
                    [
                        'question' => 'Quelle lettre est généralement muette au début d’un mot en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'r', 'is_correct' => false],
                            ['choice_text' => 'm', 'is_correct' => false],
                            ['choice_text' => 'n', 'is_correct' => false],
                            ['choice_text' => 'h', 'is_correct' => true],
                        ],
                        'explanation' => 'Le h ne représente normalement aucun son propre dans des mots espagnols comme hola ou hablar.',
                    ],
                    [
                        'question' => 'Quelle voyelle espagnole a généralement un son stable et clair ?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'h', 'is_correct' => false],
                            ['choice_text' => 'j', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'Les voyelles espagnoles ont des valeurs relativement stables ; le a représente un son clair et stable.',
                    ],
                    [
                        'question' => 'Quel mot a besoin d’un accent pour exprimer correctement une question ?',
                        'choices' => [
                            ['choice_text' => 'Que', 'is_correct' => false],
                            ['choice_text' => 'Qúe', 'is_correct' => false],
                            ['choice_text' => 'Qué', 'is_correct' => true],
                            ['choice_text' => 'Qe', 'is_correct' => false],
                        ],
                        'explanation' => 'Qué porte un accent quand il fonctionne comme mot interrogatif ou exclamatif.',
                    ],
                ],
            ],
            [
                'title' => 'Objetos y situaciones cotidianas',
                'description' => 'Vocabulaire essentiel pour les objets courants, les espaces et les actions de la vie quotidienne.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Quel mot signifie « livre » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'libro', 'is_correct' => true],
                            ['choice_text' => 'silla', 'is_correct' => false],
                            ['choice_text' => 'puerta', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro signifie livre.',
                    ],
                    [
                        'question' => 'Quel objet utilise-t-on normalement pour écrire ?',
                        'choices' => [
                            ['choice_text' => 'ventana', 'is_correct' => false],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                            ['choice_text' => 'bolígrafo', 'is_correct' => true],
                            ['choice_text' => 'reloj', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bolígrafo est un objet habituel pour écrire.',
                    ],
                    [
                        'question' => 'Quelle action est le contraire de « abrir » ?',
                        'choices' => [
                            ['choice_text' => 'cerrar', 'is_correct' => true],
                            ['choice_text' => 'subir', 'is_correct' => false],
                            ['choice_text' => 'mirar', 'is_correct' => false],
                            ['choice_text' => 'lavar', 'is_correct' => false],
                        ],
                        'explanation' => 'Cerrar est le verbe qui exprime l’action opposée à abrir.',
                    ],
                    [
                        'question' => 'Si Lucía dit « Tengo hambre », qu’exprime-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Elle a sommeil.', 'is_correct' => false],
                            ['choice_text' => 'Elle a mal à la gorge.', 'is_correct' => false],
                            ['choice_text' => 'Elle a froid.', 'is_correct' => false],
                            ['choice_text' => 'Elle a besoin ou envie de manger.', 'is_correct' => true],
                        ],
                        'explanation' => 'Tener hambre exprime le besoin ou l’envie de manger.',
                    ],
                    [
                        'question' => 'Que signifie « puerta » ?',
                        'choices' => [
                            ['choice_text' => 'porte', 'is_correct' => true],
                            ['choice_text' => 'fenêtre', 'is_correct' => false],
                            ['choice_text' => 'sol', 'is_correct' => false],
                            ['choice_text' => 'plafond', 'is_correct' => false],
                        ],
                        'explanation' => 'Puerta signifie porte.',
                    ],
                    [
                        'question' => 'Quel mot signifie « chaise » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'cuchara', 'is_correct' => false],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                            ['choice_text' => 'cama', 'is_correct' => false],
                            ['choice_text' => 'silla', 'is_correct' => true],
                        ],
                        'explanation' => 'Silla signifie chaise.',
                    ],
                    [
                        'question' => 'Quelle expression utilise-t-on pour demander un objet poliment ?',
                        'choices' => [
                            ['choice_text' => 'Nunca gracias', 'is_correct' => false],
                            ['choice_text' => 'Por favor', 'is_correct' => true],
                            ['choice_text' => 'Hasta ayer', 'is_correct' => false],
                            ['choice_text' => 'De dónde', 'is_correct' => false],
                        ],
                        'explanation' => 'Por favor sert à faire des demandes de manière polie.',
                    ],
                    [
                        'question' => 'Quel mot signifie « rue » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'cocina', 'is_correct' => false],
                            ['choice_text' => 'escuela', 'is_correct' => false],
                            ['choice_text' => 'calle', 'is_correct' => true],
                            ['choice_text' => 'pared', 'is_correct' => false],
                        ],
                        'explanation' => 'Calle signifie rue.',
                    ],
                    [
                        'question' => 'Quel mot signifie « fenêtre » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'pared', 'is_correct' => false],
                            ['choice_text' => 'techo', 'is_correct' => false],
                            ['choice_text' => 'puente', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => true],
                        ],
                        'explanation' => 'Ventana signifie fenêtre.',
                    ],
                    [
                        'question' => 'Quelle action signifie « ouvrir » ?',
                        'choices' => [
                            ['choice_text' => 'cerrar', 'is_correct' => false],
                            ['choice_text' => 'abrir', 'is_correct' => true],
                            ['choice_text' => 'dormir', 'is_correct' => false],
                            ['choice_text' => 'correr', 'is_correct' => false],
                        ],
                        'explanation' => 'Abrir signifie ouvrir.',
                    ],
                    [
                        'question' => 'Que signifie l’expression espagnole « en la escuela » ?',
                        'choices' => [
                            ['choice_text' => 'À l’école.', 'is_correct' => true],
                            ['choice_text' => 'Au supermarché seulement.', 'is_correct' => false],
                            ['choice_text' => 'À la gare, toujours.', 'is_correct' => false],
                            ['choice_text' => 'À la plage, obligatoirement.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’école est un lieu habituel pour étudier.',
                    ],
                ],
            ],
            [
                'title' => 'Información personal y familia',
                'description' => 'Données personnelles, liens familiaux, âge, profession et questions de base sur une personne.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Comment demande-t-on la profession d’une personne en espagnol ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde te llamas?', 'is_correct' => false],
                            ['choice_text' => '¿Qué edad eres?', 'is_correct' => false],
                            ['choice_text' => '¿Quién tienes?', 'is_correct' => false],
                            ['choice_text' => '¿A qué te dedicas?', 'is_correct' => true],
                        ],
                        'explanation' => '¿A qué te dedicas? est une question habituelle sur le travail ou la profession.',
                    ],
                    [
                        'question' => 'Quelle est la façon correcte de dire « Mon père est médecin » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'Mi padre está médico.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre tiene médico.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre es médico.', 'is_correct' => true],
                            ['choice_text' => 'Mi padre soy médico.', 'is_correct' => false],
                        ],
                        'explanation' => 'La profession s’exprime avec ser : Mi padre es médico.',
                    ],
                    [
                        'question' => 'Quel mot signifie « mère » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'madre', 'is_correct' => true],
                            ['choice_text' => 'hermano', 'is_correct' => false],
                            ['choice_text' => 'hija', 'is_correct' => false],
                            ['choice_text' => 'abuelo', 'is_correct' => false],
                        ],
                        'explanation' => 'Madre signifie mère.',
                    ],
                    [
                        'question' => 'Comment demande-t-on le nom complet de quelqu’un ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde es tu nombre completo?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál es tu nombre completo?', 'is_correct' => true],
                            ['choice_text' => '¿Qué tienes tu nombre?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo edad tu nombre?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Cuál es tu nombre completo? est une question claire et naturelle.',
                    ],
                    [
                        'question' => 'Quelle est une réponse correcte à « ¿Dónde vives? » ?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Soy Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Rabat de.', 'is_correct' => false],
                        ],
                        'explanation' => 'Vivo en + lieu exprime la résidence.',
                    ],
                    [
                        'question' => 'Quel mot signifie « fille de quelqu’un » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'hijo', 'is_correct' => false],
                            ['choice_text' => 'tía', 'is_correct' => false],
                            ['choice_text' => 'madre', 'is_correct' => false],
                            ['choice_text' => 'hija', 'is_correct' => true],
                        ],
                        'explanation' => 'Hija signifie fille.',
                    ],
                    [
                        'question' => 'Quelle question cherche à savoir le lieu où vit une personne ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo te llamas?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde vives?', 'is_correct' => true],
                            ['choice_text' => '¿Qué haces mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Cuánto cuesta?', 'is_correct' => false],
                        ],
                        'explanation' => '¿Dónde vives? demande le lieu de résidence.',
                    ],
                    [
                        'question' => 'Quel mot signifie « frère » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'hermana', 'is_correct' => false],
                            ['choice_text' => 'padre', 'is_correct' => false],
                            ['choice_text' => 'hermano', 'is_correct' => true],
                            ['choice_text' => 'primo', 'is_correct' => false],
                        ],
                        'explanation' => 'Hermano signifie frère.',
                    ],
                    [
                        'question' => 'Comment demande-t-on l’âge d’une personne en espagnol ?',
                        'choices' => [
                            ['choice_text' => '¿Cuántos años eres?', 'is_correct' => false],
                            ['choice_text' => '¿Qué edad estás?', 'is_correct' => false],
                            ['choice_text' => '¿Cuánto años haces?', 'is_correct' => false],
                            ['choice_text' => '¿Cuántos años tienes?', 'is_correct' => true],
                        ],
                        'explanation' => 'L’expression standard pour demander l’âge est ¿Cuántos años tienes?',
                    ],
                    [
                        'question' => 'Que signifie « mis padres » ?',
                        'choices' => [
                            ['choice_text' => 'mes parents', 'is_correct' => true],
                            ['choice_text' => 'mes enfants', 'is_correct' => false],
                            ['choice_text' => 'mes frères et sœurs', 'is_correct' => false],
                            ['choice_text' => 'mes grands-parents', 'is_correct' => false],
                        ],
                        'explanation' => 'Mis padres correspond à mes parents.',
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
