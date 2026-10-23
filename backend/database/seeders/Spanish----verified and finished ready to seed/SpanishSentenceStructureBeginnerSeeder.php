<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishSentenceStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Sentence Structure')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de la phrase espagnole',
                'description' => 'Apprendre l’ordre de base des phrases espagnoles et construire des énoncés clairs avec sujet, verbe et objet.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle phrase dit correctement « María étudie l’espagnol » ?',
                        'choices' => [
                            ['choice_text' => 'Estudia María español.', 'is_correct' => false],
                            ['choice_text' => 'Español María estudia.', 'is_correct' => false],
                            ['choice_text' => 'María español estudia.', 'is_correct' => false],
                            ['choice_text' => 'María estudia español.', 'is_correct' => true],
                        ],
                        'explanation' => 'La structure la plus simple pour un débutant est sujet + verbe + objet : « María estudia español. »',
                    ],
                    [
                        'question' => 'Quel élément est le verbe dans « Carlos compra pan » ?',
                        'choices' => [
                            ['choice_text' => 'Carlos', 'is_correct' => false],
                            ['choice_text' => 'compra', 'is_correct' => true],
                            ['choice_text' => 'pan', 'is_correct' => false],
                            ['choice_text' => 'Carlos compra', 'is_correct' => false],
                        ],
                        'explanation' => '« Compra » est le verbe car il indique ce que fait Carlos.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un sujet clair suivi d’un verbe ?',
                        'choices' => [
                            ['choice_text' => 'Trabaja Ana?', 'is_correct' => false],
                            ['choice_text' => 'Trabajo Ana.', 'is_correct' => false],
                            ['choice_text' => 'Ana trabaja.', 'is_correct' => true],
                            ['choice_text' => 'Ana trabajo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ana » est le sujet et « trabaja » est le verbe correctement conjugué à la troisième personne du singulier.',
                    ],
                    [
                        'question' => 'Complète la phrase naturelle : « Mi hermano ___ café. »',
                        'choices' => [
                            ['choice_text' => 'bebe', 'is_correct' => true],
                            ['choice_text' => 'café bebe mi', 'is_correct' => false],
                            ['choice_text' => 'mi bebe hermano', 'is_correct' => false],
                            ['choice_text' => 'bebe mi hermano', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre le plus naturel pour un débutant est « Mi hermano bebe café. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Les enfants jouent dans le parc » ?',
                        'choices' => [
                            ['choice_text' => 'Juegan los parque niños en.', 'is_correct' => false],
                            ['choice_text' => 'Los niños en juegan el parque.', 'is_correct' => false],
                            ['choice_text' => 'Los niños juegan en el parque.', 'is_correct' => true],
                            ['choice_text' => 'En el parque los niños juega.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase suit un ordre naturel : sujet, verbe, puis information de lieu.',
                    ],
                    [
                        'question' => 'Quel groupe de mots peut former une phrase simple complète ?',
                        'choices' => [
                            ['choice_text' => 'Pedro trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Pedro trabaja.', 'is_correct' => true],
                            ['choice_text' => 'Trabaja Pedro mañana?', 'is_correct' => false],
                            ['choice_text' => 'Pedro en la oficina.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase simple a besoin d’un verbe correctement conjugué ; « Pedro trabaja » comporte à la fois un sujet et un verbe conjugué.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Yo español estudio. » Quelle version est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Yo estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Yo español estudia.', 'is_correct' => false],
                            ['choice_text' => 'Yo estudio a español.', 'is_correct' => false],
                            ['choice_text' => 'Yo español estudiar.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise couramment sujet + verbe + objet dans un énoncé de base : « Yo estudio español. »',
                    ],
                    [
                        'question' => 'Quelle phrase a un ordre correct ?',
                        'choices' => [
                            ['choice_text' => 'La profesora la lección explica.', 'is_correct' => false],
                            ['choice_text' => 'Explica la profesora la lección.', 'is_correct' => false],
                            ['choice_text' => 'La lección profesora explica la.', 'is_correct' => false],
                            ['choice_text' => 'La profesora explica la lección.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase suit le schéma de base standard et sonne naturel en espagnol neutre.',
                    ],
                    [
                        'question' => 'Quelle phrase contient à la fois un sujet et un prédicat ?',
                        'choices' => [
                            ['choice_text' => 'Mi amigo.', 'is_correct' => false],
                            ['choice_text' => 'Cocina.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo cocina.', 'is_correct' => true],
                            ['choice_text' => 'En la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mi amigo » est le sujet et « cocina » est le prédicat qui contient le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase est une réponse naturelle de débutant à « ¿Qué haces? »',
                        'choices' => [
                            ['choice_text' => 'Yo una tienda trabajo.', 'is_correct' => false],
                            ['choice_text' => 'En una tienda yo trabajo hago.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo una tienda en.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en una tienda.', 'is_correct' => true],
                        ],
                        'explanation' => '« Trabajo en una tienda » utilise une réponse naturelle commençant par le verbe, le sujet « yo » étant sous-entendu.',
                    ],
                ],
            ],
            [
                'title' => 'Les questions et la négation',
                'description' => 'S’exercer à poser des questions simples en espagnol et à former des phrases négatives sans modifier la phrase de base inutilement.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase demande correctement « Parles-tu espagnol ? »',
                        'choices' => [
                            ['choice_text' => '¿Tú español hablas?', 'is_correct' => false],
                            ['choice_text' => '¿Hablas tú español haces?', 'is_correct' => false],
                            ['choice_text' => '¿Hablas español?', 'is_correct' => true],
                            ['choice_text' => '¿Español hablas tú eres?', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol peut former une simple question oui/non avec l’intonation et les points d’interrogation : « ¿Hablas español? »',
                    ],
                    [
                        'question' => 'Comment rendre négative la phrase « Ana trabaja aquí » ?',
                        'choices' => [
                            ['choice_text' => 'Ana trabaja no aquí.', 'is_correct' => false],
                            ['choice_text' => 'No Ana trabaja aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana no aquí trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Ana no trabaja aquí.', 'is_correct' => true],
                        ],
                        'explanation' => 'La structure négative de base place « no » juste avant le verbe conjugué.',
                    ],
                    [
                        'question' => 'Quelle question demande où vit quelqu’un ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde vives?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde vives tú casa?', 'is_correct' => false],
                            ['choice_text' => '¿Vives dónde casa?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde casa vives?', 'is_correct' => false],
                        ],
                        'explanation' => '« Dónde » signifie « où », et « ¿Dónde vives? » est la question naturelle.',
                    ],
                    [
                        'question' => 'Quelle phrase demande correctement « Que manges-tu ? »',
                        'choices' => [
                            ['choice_text' => '¿Qué comes tú comida?', 'is_correct' => false],
                            ['choice_text' => '¿Qué comes?', 'is_correct' => true],
                            ['choice_text' => '¿Comes qué tú?', 'is_correct' => false],
                            ['choice_text' => '¿Qué comida tú eres?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qué » est le mot interrogatif et « comes » est la forme verbale correcte pour tú.',
                    ],
                    [
                        'question' => 'Complète la phrase négative naturelle : « Nosotros ___ ___ café. »',
                        'choices' => [
                            ['choice_text' => 'no / bebemos', 'is_correct' => true],
                            ['choice_text' => 'bebemos / no', 'is_correct' => false],
                            ['choice_text' => 'no / beber', 'is_correct' => false],
                            ['choice_text' => 'no / bebe', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre correct est « Nosotros no bebemos café » : sujet + no + verbe conjugué + objet.',
                    ],
                    [
                        'question' => 'Quelle question demande correctement le nom d’une personne ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo llamas te?', 'is_correct' => false],
                            ['choice_text' => '¿Te cómo llamas?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo tú nombre llamas?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo te llamas?', 'is_correct' => true],
                        ],
                        'explanation' => '« ¿Cómo te llamas? » est la question standard pour débutant qui demande le nom de quelqu’un.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Quiero no azúcar.', 'is_correct' => false],
                            ['choice_text' => 'No quiero azúcar.', 'is_correct' => true],
                            ['choice_text' => 'No azúcar quiero.', 'is_correct' => false],
                            ['choice_text' => 'Quiero azúcar no.', 'is_correct' => false],
                        ],
                        'explanation' => '« No » vient directement avant le verbe conjugué « quiero ».',
                    ],
                    [
                        'question' => 'Quelle question est correctement formée ?',
                        'choices' => [
                            ['choice_text' => '¿Cuándo la clase empieza?', 'is_correct' => false],
                            ['choice_text' => '¿Empieza cuándo la clase?', 'is_correct' => false],
                            ['choice_text' => '¿Cuándo empieza la clase?', 'is_correct' => true],
                            ['choice_text' => '¿La clase cuándo empieza es?', 'is_correct' => false],
                        ],
                        'explanation' => '« Cuándo » demande le moment, suivi du verbe puis du sujet dans une question neutre naturelle.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « No yo estudio hoy. » Quelle version est plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Yo no estudio hoy.', 'is_correct' => true],
                            ['choice_text' => 'Yo estudio no hoy.', 'is_correct' => false],
                            ['choice_text' => 'No estudio yo hoy?', 'is_correct' => false],
                            ['choice_text' => 'Yo hoy no estudiar.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre naturel pour un débutant est sujet + no + verbe conjugué + information de temps.',
                    ],
                    [
                        'question' => 'À quelle question peut-on répondre par « Sí, trabajo aquí » ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde trabajas?', 'is_correct' => false],
                            ['choice_text' => '¿Trabajas aquí?', 'is_correct' => true],
                            ['choice_text' => '¿Cuándo trabajas?', 'is_correct' => false],
                            ['choice_text' => '¿Por qué trabajas?', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’une question oui/non, donc « Sí, trabajo aquí » est une réponse directe.',
                    ],
                    [
                        'question' => 'Quel mot introduit généralement un énoncé négatif ?',
                        'choices' => [
                            ['choice_text' => 'qué', 'is_correct' => false],
                            ['choice_text' => 'dónde', 'is_correct' => false],
                            ['choice_text' => 'no', 'is_correct' => true],
                            ['choice_text' => 'cuándo', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marqueur négatif de base en espagnol est « no », placé avant le verbe conjugué.',
                    ],
                ],
            ],
            [
                'title' => 'Les adjectifs et l’ordre des mots',
                'description' => 'S’exercer à placer naturellement les adjectifs courants et à les accorder avec les noms qu’ils décrivent.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase dit correctement « une voiture rouge » ?',
                        'choices' => [
                            ['choice_text' => 'un rojo coche', 'is_correct' => false],
                            ['choice_text' => 'un coche rojo', 'is_correct' => true],
                            ['choice_text' => 'un coche roja', 'is_correct' => false],
                            ['choice_text' => 'una coche rojo', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une expression descriptive de base, l’adjectif courant « rojo » vient après le nom et s’accorde avec le masculin singulier « coche ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une grande maison ?',
                        'choices' => [
                            ['choice_text' => 'un casa grande', 'is_correct' => false],
                            ['choice_text' => 'una grande casa', 'is_correct' => false],
                            ['choice_text' => 'una casa grande', 'is_correct' => true],
                            ['choice_text' => 'una casa grandes', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin singulier, et « grande » s’accorde en nombre tout en gardant la même forme pour le genre ici.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'los libros interesante', 'is_correct' => false],
                            ['choice_text' => 'las libros interesantes', 'is_correct' => false],
                            ['choice_text' => 'los interesante libros siempre', 'is_correct' => false],
                            ['choice_text' => 'los libros interesantes', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom pluriel « libros » prend l’adjectif pluriel « interesantes », et « libros » est masculin pluriel.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « la camisa blanco. » Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'la camisa blanca', 'is_correct' => true],
                            ['choice_text' => 'el camisa blanco', 'is_correct' => false],
                            ['choice_text' => 'la camisa blancos', 'is_correct' => false],
                            ['choice_text' => 'la blanca camisa', 'is_correct' => false],
                        ],
                        'explanation' => '« Camisa » est féminin singulier, donc l’adjectif doit être « blanca ».',
                    ],
                    [
                        'question' => 'Quelle phrase accorde correctement l’adjectif ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos son simpática.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos es simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos son simpático.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis amigos » est masculin pluriel, donc « simpáticos » s’accorde en genre et en nombre.',
                    ],
                    [
                        'question' => 'Quelle expression décrit correctement deux petites maisons ?',
                        'choices' => [
                            ['choice_text' => 'dos casa pequeño', 'is_correct' => false],
                            ['choice_text' => 'dos casas pequeñas', 'is_correct' => true],
                            ['choice_text' => 'dos casas pequeño', 'is_correct' => false],
                            ['choice_text' => 'dos casa pequeñas', 'is_correct' => false],
                        ],
                        'explanation' => '« Casas » est féminin pluriel, donc l’adjectif devient « pequeñas ».',
                    ],
                    [
                        'question' => 'Quelle phrase sonne naturelle en espagnol neutre ?',
                        'choices' => [
                            ['choice_text' => 'Tengo un nuevo coche.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche nueva.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una coche nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche nuevo.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ordre habituel pour un débutant est nom + adjectif, et « nuevo » s’accorde avec le masculin singulier « coche ».',
                    ],
                    [
                        'question' => 'Quel adjectif reste identique au masculin et au féminin singulier ?',
                        'choices' => [
                            ['choice_text' => 'grande', 'is_correct' => true],
                            ['choice_text' => 'rojo', 'is_correct' => false],
                            ['choice_text' => 'pequeño', 'is_correct' => false],
                            ['choice_text' => 'bonito', 'is_correct' => false],
                        ],
                        'explanation' => '« Grande » a la même forme au masculin et au féminin singulier : « un perro grande » et « una casa grande ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement deux étudiantes ?',
                        'choices' => [
                            ['choice_text' => 'Los estudiantes son trabajadoras.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiante son trabajadora.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiantes es trabajadoras.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiantes son trabajadoras.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom et l’adjectif sont au féminin pluriel, et le verbe « son » s’accorde avec le sujet pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El restaurante nuevo está cerca.', 'is_correct' => true],
                            ['choice_text' => 'La restaurante nueva está cerca.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante nueva está cerca.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante nuevos está cerca.', 'is_correct' => false],
                        ],
                        'explanation' => '« Restaurante » est masculin singulier, donc « el » et « nuevo » s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Quelle expression décrirait naturellement une chemise bleue ?',
                        'choices' => [
                            ['choice_text' => 'un camisa azul', 'is_correct' => false],
                            ['choice_text' => 'una camisa azul', 'is_correct' => true],
                            ['choice_text' => 'una camisa azules', 'is_correct' => false],
                            ['choice_text' => 'azul una camisa', 'is_correct' => false],
                        ],
                        'explanation' => '« Camisa » est féminin singulier, tandis que « azul » a la même forme au singulier pour le masculin et le féminin.',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms et la clarté de la phrase',
                'description' => 'Construire des phrases claires à l’aide de pronoms sujets, de pronoms d’objet et de structures courantes du quotidien.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase dit correctement « Je vois María » ?',
                        'choices' => [
                            ['choice_text' => 'Yo veo a María.', 'is_correct' => true],
                            ['choice_text' => 'Yo a María veo.', 'is_correct' => false],
                            ['choice_text' => 'Yo veo María a.', 'is_correct' => false],
                            ['choice_text' => 'A María yo veo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une personne utilisée comme objet direct est introduite par le « a » personnel : « Veo a María. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « J’appelle Juan » ?',
                        'choices' => [
                            ['choice_text' => 'A Juan llamas yo.', 'is_correct' => false],
                            ['choice_text' => 'Llamo a Juan.', 'is_correct' => true],
                            ['choice_text' => 'Llamo Juan a.', 'is_correct' => false],
                            ['choice_text' => 'Juan llamo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le « a » personnel est utilisé parce que Juan est une personne qui reçoit l’action.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le pronom sujet « nosotros » ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudia juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudian juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudiamos juntos.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudiar juntos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe doit s’accorder avec « nosotros » : « estudiamos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « me » comme pronom d’objet ?',
                        'choices' => [
                            ['choice_text' => 'Ana llama me cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'Ana me llaman cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'Me Ana llama cada tardes.', 'is_correct' => false],
                            ['choice_text' => 'Ana me llama cada tarde.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom d’objet « me » vient avant le verbe conjugué dans cette phrase simple.',
                    ],
                    [
                        'question' => 'Quelle phrase est une réponse naturelle à « ¿Qué haces con el libro? » ?',
                        'choices' => [
                            ['choice_text' => 'Leo lo.', 'is_correct' => false],
                            ['choice_text' => 'Lo leo.', 'is_correct' => true],
                            ['choice_text' => 'Lo lees.', 'is_correct' => false],
                            ['choice_text' => 'Me lo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lo » peut remplacer l’objet masculin singulier « el libro », et il vient avant le verbe conjugué.',
                    ],
                    [
                        'question' => 'Quelle phrase dit correctement « Nous les voyons » quand « les » désigne les garçons ?',
                        'choices' => [
                            ['choice_text' => 'Vemos los.', 'is_correct' => false],
                            ['choice_text' => 'Les vemos los.', 'is_correct' => false],
                            ['choice_text' => 'Los vemos.', 'is_correct' => true],
                            ['choice_text' => 'Nos vemos los.', 'is_correct' => false],
                        ],
                        'explanation' => '« Los » est le pronom d’objet direct masculin pluriel pour « les », et il vient avant le verbe conjugué.',
                    ],
                    [
                        'question' => 'Quelle phrase est claire et naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Ella ayuda me.', 'is_correct' => false],
                            ['choice_text' => 'Ella me ayudan.', 'is_correct' => false],
                            ['choice_text' => 'Ella ayudar me.', 'is_correct' => false],
                            ['choice_text' => 'Ella me ayuda.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « ella » prend le verbe singulier « ayuda », et le pronom d’objet « me » vient avant le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « le » pour un objet indirect ?',
                        'choices' => [
                            ['choice_text' => 'Le doy el libro a Ana.', 'is_correct' => true],
                            ['choice_text' => 'Doy le el libro a Ana.', 'is_correct' => false],
                            ['choice_text' => 'Le doy Ana el libro.', 'is_correct' => false],
                            ['choice_text' => 'Le doy el libro Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le » marque l’objet indirect, et « a Ana » précise exactement qui reçoit le livre.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Yo veo a él » et veut une forme de pronom plus courte. Laquelle est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Yo lo veo.', 'is_correct' => true],
                            ['choice_text' => 'Yo veo lo.', 'is_correct' => false],
                            ['choice_text' => 'Yo le veo lo.', 'is_correct' => false],
                            ['choice_text' => 'Yo me veo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet direct masculin singulier, « lo » peut remplacer « a él » : « Yo lo veo. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le pronom réfléchi avec le sujet ?',
                        'choices' => [
                            ['choice_text' => 'Yo se preparo.', 'is_correct' => false],
                            ['choice_text' => 'Yo te prepara.', 'is_correct' => false],
                            ['choice_text' => 'Yo me preparan.', 'is_correct' => false],
                            ['choice_text' => 'Yo me preparo.', 'is_correct' => true],
                        ],
                        'explanation' => '« Yo » prend le pronom réfléchi « me », et le verbe est à la première personne du singulier : « preparo ».',
                    ],
                ],
            ],
            [
                'title' => 'Relier les idées',
                'description' => 'S’exercer à relier des phrases simples en espagnol avec des conjonctions, des mots de temps et des expressions de cause à effet.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quel mot relie correctement deux choix ?',
                        'choices' => [
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'aunque', 'is_correct' => false],
                        ],
                        'explanation' => '« O » signifie « ou » et relie des alternatives, comme « té o café ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « porque » ?',
                        'choices' => [
                            ['choice_text' => 'No salgo porque cansado estoy es.', 'is_correct' => false],
                            ['choice_text' => 'Porque no salgo estoy cansado.', 'is_correct' => false],
                            ['choice_text' => 'No salgo porque estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'No salgo estoy porque cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '« Porque » introduit la raison : le locuteur ne sort pas parce qu’il est fatigué.',
                    ],
                    [
                        'question' => 'Quelle phrase met correctement en contraste deux idées avec « pero » ?',
                        'choices' => [
                            ['choice_text' => 'Quiero ir pero ocupado estoy es.', 'is_correct' => false],
                            ['choice_text' => 'Pero quiero ir estoy ocupado.', 'is_correct' => false],
                            ['choice_text' => 'Quiero pero ir estoy ocupado.', 'is_correct' => false],
                            ['choice_text' => 'Quiero ir, pero estoy ocupado.', 'is_correct' => true],
                        ],
                        'explanation' => '« Pero » signifie « mais » et relie deux propositions contrastées.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « y » pour ajouter une information ?',
                        'choices' => [
                            ['choice_text' => 'María estudia y trabaja.', 'is_correct' => true],
                            ['choice_text' => 'María y estudia trabaja.', 'is_correct' => false],
                            ['choice_text' => 'María estudia trabaja y.', 'is_correct' => false],
                            ['choice_text' => 'Y María estudia es trabaja.', 'is_correct' => false],
                        ],
                        'explanation' => '« Y » relie deux actions accomplies par le même sujet.',
                    ],
                    [
                        'question' => 'Quelle phrase montre un enchaînement clair ?',
                        'choices' => [
                            ['choice_text' => 'Primero desayuno y después voy al trabajo.', 'is_correct' => true],
                            ['choice_text' => 'Después desayuno y primero voy al trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Primero al trabajo y después desayuno antes.', 'is_correct' => false],
                            ['choice_text' => 'Desayuno después primero voy.', 'is_correct' => false],
                        ],
                        'explanation' => '« Primero » marque la première action et « después » marque la suivante.',
                    ],
                    [
                        'question' => 'Complète : « Estudio por la mañana ___ trabajo por la tarde. »',
                        'choices' => [
                            ['choice_text' => 'o', 'is_correct' => false],
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'pero', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase ajoute deux activités liées, donc « y » est le connecteur naturel.',
                    ],
                    [
                        'question' => 'Quelle phrase donne une raison avec le bon ordre ?',
                        'choices' => [
                            ['choice_text' => 'Estoy porque llueve en casa.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en casa porque llueve.', 'is_correct' => true],
                            ['choice_text' => 'Porque en casa llueve estoy.', 'is_correct' => false],
                            ['choice_text' => 'Estoy llueve porque en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'La proposition principale vient en premier, suivie de « porque » et de la proposition de raison.',
                    ],
                    [
                        'question' => 'Quelle phrase montre un contraste entre aimer quelque chose et manquer de temps ?',
                        'choices' => [
                            ['choice_text' => 'Me gusta cocinar porque no tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta cocinar y no tengo tiempo pero.', 'is_correct' => false],
                            ['choice_text' => 'Pero me gusta cocinar porque tiempo no.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta cocinar, pero no tengo tiempo.', 'is_correct' => true],
                        ],
                        'explanation' => '« Pero » relie naturellement les deux idées contrastées.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « cuando » dans une relation temporelle simple ?',
                        'choices' => [
                            ['choice_text' => 'Cuando ceno, llego a casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Llego cuando a casa ceno.', 'is_correct' => false],
                            ['choice_text' => 'Cuando casa llego ceno es.', 'is_correct' => false],
                            ['choice_text' => 'Cuando llego a casa, ceno.', 'is_correct' => true],
                        ],
                        'explanation' => '« Cuando » introduit la condition temporelle : une fois arrivé chez lui, le locuteur dîne.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement deux propositions avec un sujet et un verbe clairs ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana trabaja y yo estudio.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana y trabaja yo estudio.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana trabaja yo y estudio.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja mi hermana y estudio yo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque proposition a un sujet clair et un verbe correctement conjugué, reliés par « y ».',
                    ],
                    [
                        'question' => 'Quel connecteur convient à cette alternative simple : « ¿Quieres té ___ café? »',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'porque', 'is_correct' => false],
                        ],
                        'explanation' => '« O » introduit un choix alternatif : thé ou café.',
                    ],
                ],
            ],
            [
                'title' => 'Révision mixte de la structure de phrase',
                'description' => 'Réunir les compétences de construction de phrases pour débutants dans des situations pratiques impliquant questions, descriptions, pronoms, négation et idées reliées.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est la réponse la plus naturelle à « ¿Dónde vive Elena? »',
                        'choices' => [
                            ['choice_text' => 'En Sevilla vive es.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'Vive Elena Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Sevilla vive a.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse utilise naturellement le verbe et le lieu ; le sujet « Elena » est déjà connu grâce à la question.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement un sujet, un verbe, un objet et un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Carlos compra pan en la tienda.', 'is_correct' => true],
                            ['choice_text' => 'Carlos en la tienda compra pan es.', 'is_correct' => false],
                            ['choice_text' => 'Compra Carlos en pan la tienda.', 'is_correct' => false],
                            ['choice_text' => 'Carlos pan en compra la tienda.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ceci suit un ordre clair pour débutant : sujet + verbe + objet + lieu.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « No María trabaja hoy. » Quelle phrase est plus claire dans l’ordre neutre ?',
                        'choices' => [
                            ['choice_text' => 'No María hoy trabaja.', 'is_correct' => false],
                            ['choice_text' => 'María trabaja no hoy.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no María trabaja.', 'is_correct' => false],
                            ['choice_text' => 'María no trabaja hoy.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le marqueur négatif « no » vient normalement avant le verbe conjugué : « María no trabaja hoy. »',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement un adjectif et une raison ?',
                        'choices' => [
                            ['choice_text' => 'La película interesante porque es tiene una buena historia.', 'is_correct' => false],
                            ['choice_text' => 'Es interesante la película porque una buena historia tiene.', 'is_correct' => false],
                            ['choice_text' => 'La película es interesante porque tiene una buena historia.', 'is_correct' => true],
                            ['choice_text' => 'La película tiene interesante porque es una buena historia.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase donne d’abord la description, puis explique la raison avec « porque ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un mot interrogatif et un verbe ?',
                        'choices' => [
                            ['choice_text' => '¿Por qué español estudia?', 'is_correct' => false],
                            ['choice_text' => '¿Estudias por qué español?', 'is_correct' => false],
                            ['choice_text' => '¿Por qué estudias español?', 'is_correct' => true],
                            ['choice_text' => '¿Español por qué estudias es?', 'is_correct' => false],
                        ],
                        'explanation' => '« Por qué » demande une raison et est suivi naturellement du verbe et de l’objet.',
                    ],
                    [
                        'question' => 'Quelle phrase relie correctement deux sujets différents ?',
                        'choices' => [
                            ['choice_text' => 'Mi padre y cocina mi madre trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Cocina mi padre y trabaja mi madre es.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre cocina mi madre y trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre cocina y mi madre trabaja.', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque proposition a son propre sujet et verbe, reliés proprement par « y ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un pronom d’objet dans une situation pratique ?',
                        'choices' => [
                            ['choice_text' => 'Necesito el libro, pero no lo encuentro.', 'is_correct' => true],
                            ['choice_text' => 'Necesito el libro, pero no encuentro lo.', 'is_correct' => false],
                            ['choice_text' => 'Necesito el libro, pero lo no encuentro.', 'is_correct' => false],
                            ['choice_text' => 'Necesito el libro, pero no lo encuentra.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lo » remplace « el libro » et se place avant le verbe conjugué « encuentro ».',
                    ],
                    [
                        'question' => 'Quelle phrase ordonne correctement une expression de temps, un sujet et une action ?',
                        'choices' => [
                            ['choice_text' => 'Por la mañana, Ana en casa estudia siempre es.', 'is_correct' => false],
                            ['choice_text' => 'Por la mañana, Ana estudia en casa.', 'is_correct' => true],
                            ['choice_text' => 'Ana por la mañana en estudia casa.', 'is_correct' => false],
                            ['choice_text' => 'Estudia por la mañana Ana en casa es.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une structure naturelle avec une expression de temps suivie du sujet, du verbe et du lieu.',
                    ],
                    [
                        'question' => 'Quelle phrase donne une cause et un effet simples ?',
                        'choices' => [
                            ['choice_text' => 'Estoy cansado, así que voy a dormir.', 'is_correct' => true],
                            ['choice_text' => 'Estoy cansado así que a dormir voy es.', 'is_correct' => false],
                            ['choice_text' => 'Así que estoy cansado voy a dormir.', 'is_correct' => false],
                            ['choice_text' => 'Estoy porque cansado voy a dormir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Así que » introduit le résultat : comme le locuteur est fatigué, il va dormir.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte lorsque le sujet est omis parce qu’il est déjà clair ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo en una oficina yo y vivo cerca yo.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo oficina y vivir cerca.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en una oficina y vivo cerca.', 'is_correct' => true],
                            ['choice_text' => 'En una oficina trabajo y vivir cerca.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol omet souvent les pronoms sujets quand le verbe rend déjà le sujet évident.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement négation, pronom et lieu ?',
                        'choices' => [
                            ['choice_text' => 'No veo lo en la oficina.', 'is_correct' => false],
                            ['choice_text' => 'No lo ve en la oficina yo.', 'is_correct' => false],
                            ['choice_text' => 'No en la oficina lo veo es.', 'is_correct' => false],
                            ['choice_text' => 'No lo veo en la oficina.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ordre naturel est no + pronom d’objet + verbe conjugué + lieu : « No lo veo en la oficina. »',
                    ],
                    [
                        'question' => 'Quelle phrase sonnerait la plus naturelle dans une courte présentation ?',
                        'choices' => [
                            ['choice_text' => 'De Marruecos soy vivo Casablanca estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Soy de Marruecos, vivo en Casablanca y estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Soy de Marruecos vivo y Casablanca en estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Marruecos soy, Casablanca vivo y español estudio es.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase relie trois énoncés clairs avec un ordre des mots naturel et évite de répéter le sujet inutilement.',
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
