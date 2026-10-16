<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EssayWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'essay-writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de la rédaction d’un essai',
                'description' => 'Découvrez ce dont a besoin un essai simple en espagnol et comment organiser ses idées avant d’écrire.',
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal de l’introduction dans un essai court ?',
                        'choices' => [
                            ['choice_text' => 'Présenter le sujet et préparer le lecteur à l’idée principale.', 'is_correct' => true],
                            ['choice_text' => 'Donner immédiatement tous les détails de l’essai.', 'is_correct' => false],
                            ['choice_text' => 'Répéter la conclusion mot pour mot.', 'is_correct' => false],
                            ['choice_text' => 'Lister du vocabulaire sans lien avec le sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne introduction de niveau débutant annonce le sujet de l’essai et amène naturellement la discussion principale.',
                    ],
                    [
                        'question' => 'Quelle partie d’un essai développe généralement les idées principales ?',
                        'choices' => [
                            ['choice_text' => 'Le titre uniquement.', 'is_correct' => false],
                            ['choice_text' => 'Les paragraphes de développement.', 'is_correct' => true],
                            ['choice_text' => 'La formule de salutation.', 'is_correct' => false],
                            ['choice_text' => 'La signature.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les paragraphes de développement contiennent les explications principales, les exemples et les détails qui soutiennent l’idée.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases pourrait servir de phrase-clé simple ?',
                        'choices' => [
                            ['choice_text' => 'Hola, me llamo Ana.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por leer esta carta.', 'is_correct' => false],
                            ['choice_text' => 'Adiós y hasta mañana.', 'is_correct' => false],
                            ['choice_text' => 'Vivir en una ciudad grande tiene ventajas y desventajas.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une phrase-clé introduit l’idée principale d’un paragraphe ; cette phrase annonce clairement le sujet et la direction du paragraphe.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'Primero, quiero presentar el problema.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, estudio español cada día.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, creo que estudiar idiomas abre muchas oportunidades.', 'is_correct' => true],
                            ['choice_text' => 'Buenos días, profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conclusion doit rassembler la discussion et apporter une idée finale, plutôt que d’introduire un nouveau sujet.',
                    ],
                    [
                        'question' => 'Quelle est une étape utile avant de commencer à rédiger un essai ?',
                        'choices' => [
                            ['choice_text' => 'Écrire la conclusion en premier et ne jamais la relire.', 'is_correct' => false],
                            ['choice_text' => 'Choisir des mots difficiles que l’on ne connaît pas.', 'is_correct' => false],
                            ['choice_text' => 'Établir un plan simple des idées principales.', 'is_correct' => true],
                            ['choice_text' => 'Commencer à écrire sans connaître le sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un court plan aide à garder l’essai centré sur le sujet et facilite l’organisation des paragraphes.',
                    ],
                    [
                        'question' => 'Quel est l’ordre le plus naturel pour un essai simple en trois parties ?',
                        'choices' => [
                            ['choice_text' => 'Conclusion → titre → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Paragraphes de développement → salutation → conclusion.', 'is_correct' => false],
                            ['choice_text' => 'Introduction → signature → paragraphes de développement.', 'is_correct' => false],
                            ['choice_text' => 'Introduction → paragraphes de développement → conclusion.', 'is_correct' => true],
                        ],
                        'explanation' => 'Il s’agit de l’organisation standard, adaptée aux débutants, pour un essai court.',
                    ],
                    [
                        'question' => 'Quelle phrase trouverait normalement sa place dans le développement d’un essai sur les habitudes saines ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, ese es mi punto final.', 'is_correct' => false],
                            ['choice_text' => 'Caminar cada día puede ayudar a mantener una vida activa.', 'is_correct' => true],
                            ['choice_text' => 'Hola, voy a hablar de salud.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por su atención.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un paragraphe de développement approfondit le sujet avec une idée concrète ou un point qui le soutient.',
                    ],
                    [
                        'question' => 'Pourquoi les exemples sont-ils utiles dans un essai ?',
                        'choices' => [
                            ['choice_text' => 'Ils rendent une idée plus claire et plus concrète.', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent la nécessité d’avoir un sujet.', 'is_correct' => false],
                            ['choice_text' => 'Ils allongent chaque phrase.', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment le besoin de paragraphes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exemples aident le lecteur à comprendre comment une idée générale s’applique à des situations réelles.',
                    ],
                    [
                        'question' => 'Quelle phrase constitue l’idée directrice la plus claire pour un essai de débutant ?',
                        'choices' => [
                            ['choice_text' => 'Español.', 'is_correct' => false],
                            ['choice_text' => 'Hola a todos y gracias.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por leer.', 'is_correct' => false],
                            ['choice_text' => 'En mi opinión, aprender español es útil porque permite comunicarse, viajar y conocer otras culturas.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une idée directrice simple donne à l’essai une position claire et annonce les raisons principales à venir.',
                    ],
                    [
                        'question' => 'Que faut-il vérifier après avoir écrit un premier brouillon ?',
                        'choices' => [
                            ['choice_text' => 'Si chaque phrase emploie du vocabulaire avancé.', 'is_correct' => false],
                            ['choice_text' => 'Si les idées sont claires, bien reliées et grammaticalement correctes.', 'is_correct' => true],
                            ['choice_text' => 'Si l’essai ne comporte aucun paragraphe.', 'is_correct' => false],
                            ['choice_text' => 'Si le titre est la phrase la plus longue.', 'is_correct' => false],
                        ],
                        'explanation' => 'La révision doit améliorer la clarté, l’organisation, la grammaire et la fluidité, pas simplement allonger le texte.',
                    ],
                ],
            ],
            [
                'title' => 'Introductions et phrases-clés',
                'description' => 'Entraînez-vous à écrire des introductions ciblées et des phrases-clés solides pour des essais simples en espagnol.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle entrée en matière introduit le mieux un essai sur les réseaux sociaux ?',
                        'choices' => [
                            ['choice_text' => 'Las redes sociales forman parte de la vida diaria de muchas personas.', 'is_correct' => true],
                            ['choice_text' => 'Adiós y gracias por leer.', 'is_correct' => false],
                            ['choice_text' => 'Primero, mi conclusión es.', 'is_correct' => false],
                            ['choice_text' => 'Las redes sociales, redes sociales, redes sociales.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase introduit le sujet naturellement, sans chercher à donner tous les arguments d’un coup.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une opinion claire pour un essai sur l’apprentissage des langues ?',
                        'choices' => [
                            ['choice_text' => 'Ayer fui al supermercado.', 'is_correct' => false],
                            ['choice_text' => 'Tengo dos hermanos y un perro.', 'is_correct' => false],
                            ['choice_text' => 'El lunes hace frío.', 'is_correct' => false],
                            ['choice_text' => 'Creo que aprender idiomas es una inversión útil para el futuro.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une opinion claire peut orienter la suite de l’essai et indique au lecteur la position du rédacteur.',
                    ],
                    [
                        'question' => 'Quelle phrase-clé introduit le mieux un paragraphe sur l’exercice physique ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, eso es todo.', 'is_correct' => false],
                            ['choice_text' => 'Hacer ejercicio con regularidad puede mejorar la salud física.', 'is_correct' => true],
                            ['choice_text' => 'Mi amigo vive en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Hola, profesor.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase centre le paragraphe sur une seule idée principale : le bienfait de l’exercice sur la santé.',
                    ],
                    [
                        'question' => 'Quelle phrase-clé convient à un paragraphe sur les transports publics ?',
                        'choices' => [
                            ['choice_text' => 'Mi casa tiene tres habitaciones.', 'is_correct' => false],
                            ['choice_text' => 'Ayer cené con mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'El transporte público puede ser una opción práctica para muchas personas.', 'is_correct' => true],
                            ['choice_text' => 'Espero que estés bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle énonce le point précis que le paragraphe peut ensuite expliquer et soutenir.',
                    ],
                    [
                        'question' => 'Quelle phrase est trop restreinte pour servir d’idée principale à un essai entier sur le voyage ?',
                        'choices' => [
                            ['choice_text' => 'Viajar puede ayudar a conocer nuevas culturas.', 'is_correct' => false],
                            ['choice_text' => 'El martes compré un billete de autobús a Granada.', 'is_correct' => true],
                            ['choice_text' => 'Hay muchas formas de viajar hoy.', 'is_correct' => false],
                            ['choice_text' => 'Los viajes pueden ofrecer experiencias educativas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne un seul petit événement personnel, alors que les autres propositions permettent une discussion plus large.',
                    ],
                    [
                        'question' => 'Quelle phrase pourrait naturellement suivre une introduction sur les bienfaits de la lecture ?',
                        'choices' => [
                            ['choice_text' => 'Adiós.', 'is_correct' => false],
                            ['choice_text' => 'El título es muy largo.', 'is_correct' => false],
                            ['choice_text' => 'No quiero escribir más.', 'is_correct' => false],
                            ['choice_text' => 'Una primera ventaja es que leer amplía el vocabulario.', 'is_correct' => true],
                        ],
                        'explanation' => 'Après une introduction, une phrase-clé peut annoncer le premier point qui vient la soutenir.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour introduire son opinion ?',
                        'choices' => [
                            ['choice_text' => 'En mi opinión,', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, ayer,', 'is_correct' => false],
                            ['choice_text' => 'Buenos días,', 'is_correct' => false],
                        ],
                        'explanation' => '« En mi opinión » est une expression courante pour présenter clairement le point de vue du rédacteur.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour introduire le sujet sans donner tout de suite une opinion personnelle ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'Hoy en día,', 'is_correct' => true],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                        ],
                        'explanation' => '« Hoy en día » peut introduire un sujet ou une situation actuelle avant que le rédacteur ne l’explique.',
                    ],
                    [
                        'question' => 'Quelle introduction est la plus ciblée ?',
                        'choices' => [
                            ['choice_text' => 'Internet.', 'is_correct' => false],
                            ['choice_text' => 'Hoy en día, muchos estudiantes usan Internet para estudiar, buscar información y practicar idiomas.', 'is_correct' => true],
                            ['choice_text' => 'Hay muchas cosas en el mundo y la vida es complicada.', 'is_correct' => false],
                            ['choice_text' => 'Voy a escribir sobre todo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle identifie un sujet clair et donne au lecteur une idée de ce que l’essai va aborder.',
                    ],
                    [
                        'question' => 'Quelle phrase ferait une bonne idée directrice pour un essai simple comparant la vie en ville et à la campagne ?',
                        'choices' => [
                            ['choice_text' => 'Mi primo vive en un pueblo.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al campo.', 'is_correct' => false],
                            ['choice_text' => 'La vida en la ciudad y la vida en el campo ofrecen ventajas diferentes.', 'is_correct' => true],
                            ['choice_text' => 'Las ciudades tienen edificios.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette idée centrale crée une comparaison claire que les paragraphes de développement peuvent approfondir.',
                    ],
                ],
            ],
            [
                'title' => 'Paragraphes de développement et connecteurs',
                'description' => 'Entraînez-vous à développer une idée à la fois et à relier les phrases avec des connecteurs espagnols utiles.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel connecteur ajoute une autre idée similaire ?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por el contrario,', 'is_correct' => false],
                        ],
                        'explanation' => '« Además » ajoute un point qui soutient ou prolonge l’idée précédente.',
                    ],
                    [
                        'question' => 'Quel connecteur introduit un contraste ?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                        ],
                        'explanation' => '« Sin embargo » signale un contraste avec l’idée qui précède.',
                    ],
                    [
                        'question' => 'Quelle expression introduit un exemple ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => true],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                        ],
                        'explanation' => '« Por ejemplo » annonce au lecteur qu’un cas concret va suivre.',
                    ],
                    [
                        'question' => 'Quelle phrase soutient le mieux l’affirmation « Leer es útil » ?',
                        'choices' => [
                            ['choice_text' => 'Leer es útil. Leer es útil. Leer es útil.', 'is_correct' => false],
                            ['choice_text' => 'Adiós por leer.', 'is_correct' => false],
                            ['choice_text' => 'El título de mi ensayo es largo.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, leer con frecuencia ayuda a aprender palabras nuevas.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle soutient l’affirmation générale avec un bienfait précis, au lieu de simplement la répéter.',
                    ],
                    [
                        'question' => 'Quelle phrase établit un lien de cause à effet clair ?',
                        'choices' => [
                            ['choice_text' => 'Como estudio cada día, entiendo mejor el material.', 'is_correct' => true],
                            ['choice_text' => 'Estudio cada día. Azul. Barcelona.', 'is_correct' => false],
                            ['choice_text' => 'Como estudio cada día, adiós.', 'is_correct' => false],
                            ['choice_text' => 'Estudio cada día, pero porque conclusión.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase relie clairement la cause, étudier chaque jour, et le résultat, une meilleure compréhension.',
                    ],
                    [
                        'question' => 'Quel connecteur permet d’introduire le premier point ?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                            ['choice_text' => 'En cambio,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => true],
                        ],
                        'explanation' => '« Primero » sert à présenter le premier point d’une discussion organisée.',
                    ],
                    [
                        'question' => 'Quel connecteur est utile pour le dernier point d’une série ?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Porque,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => true],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                        ],
                        'explanation' => '« Por último » signale le dernier point d’une série.',
                    ],
                    [
                        'question' => 'Quelle entrée de paragraphe de développement est ciblée ?',
                        'choices' => [
                            ['choice_text' => 'Estudiar, casa, personas, tiempo, todo es.', 'is_correct' => false],
                            ['choice_text' => 'Una ventaja importante de estudiar en casa es la flexibilidad.', 'is_correct' => true],
                            ['choice_text' => 'Mi conclusión es la ventaja.', 'is_correct' => false],
                            ['choice_text' => 'Hola, espero que estés bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase annonce une idée claire que le paragraphe peut ensuite expliquer en détail.',
                    ],
                    [
                        'question' => 'Quelle phrase apporte une preuve à l’idée que les parcs sont utiles ?',
                        'choices' => [
                            ['choice_text' => 'Los parques son parques.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, parques.', 'is_correct' => false],
                            ['choice_text' => 'Yo voy mañana, adiós.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, las familias pueden caminar y hacer ejercicio allí.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle donne un usage concret qui vient soutenir l’idée principale.',
                    ],
                    [
                        'question' => 'Quel enchaînement est le plus simple pour un paragraphe de développement de débutant ?',
                        'choices' => [
                            ['choice_text' => 'Exemple → salutation → titre.', 'is_correct' => false],
                            ['choice_text' => 'Phrase-clé → explication → exemple.', 'is_correct' => true],
                            ['choice_text' => 'Conclusion → phrase-clé → signature.', 'is_correct' => false],
                            ['choice_text' => 'Question → fait sans rapport → au revoir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette structure donne d’abord l’idée principale au lecteur, puis la développe avec une explication et un exemple concret.',
                    ],
                    [
                        'question' => 'Quel connecteur relie le mieux un point positif à un point qui s’y oppose ?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                        ],
                        'explanation' => 'Il signale que l’idée suivante contraste avec la précédente.',
                    ],
                ],
            ],
            [
                'title' => 'Conclusions et révision',
                'description' => 'Apprenez à terminer un essai efficacement et à réviser un texte de niveau débutant sur la clarté, les répétitions, la grammaire et l’organisation.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle expression introduit clairement une conclusion ?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                            ['choice_text' => 'En conclusión,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                        ],
                        'explanation' => '« En conclusión » signale clairement que la dernière partie de l’essai commence.',
                    ],
                    [
                        'question' => 'Quelle conclusion est la plus solide pour un essai court sur l’exercice physique ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, ejercicio, ejercicio, ejercicio.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al gimnasio.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo también juega fútbol.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, hacer ejercicio con regularidad puede mejorar la salud y el bienestar.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une bonne conclusion reformule brièvement l’idée principale plutôt que d’introduire un détail nouveau et sans lien.',
                    ],
                    [
                        'question' => 'Pourquoi un rédacteur devrait-il éviter de répéter plusieurs fois la même phrase ?',
                        'choices' => [
                            ['choice_text' => 'La répétition peut rendre l’essai confus ou ennuyeux.', 'is_correct' => true],
                            ['choice_text' => 'Une longue répétition donne toujours de meilleures notes.', 'is_correct' => false],
                            ['choice_text' => 'Elle rend l’introduction inutile.', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de connecteurs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une écriture efficace développe une idée au lieu de simplement répéter la même formulation.',
                    ],
                    [
                        'question' => 'Quelle révision améliore la phrase « Es bueno porque es bueno para la salud » ?',
                        'choices' => [
                            ['choice_text' => 'Es bueno porque es bueno y bueno.', 'is_correct' => false],
                            ['choice_text' => 'Es beneficioso porque ayuda a mantener una buena salud.', 'is_correct' => true],
                            ['choice_text' => 'Es salud bueno porque.', 'is_correct' => false],
                            ['choice_text' => 'Es beneficioso porque salud es.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase révisée supprime la répétition inutile et donne une explication plus claire.',
                    ],
                    [
                        'question' => 'Quelle question est utile lors de la révision d’un paragraphe ?',
                        'choices' => [
                            ['choice_text' => '¿Hay suficientes palabras difíciles?', 'is_correct' => false],
                            ['choice_text' => '¿La idea principal está clara?', 'is_correct' => true],
                            ['choice_text' => '¿Puedo quitar todos los conectores?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo hacer todas las frases más largas?', 'is_correct' => false],
                        ],
                        'explanation' => 'La révision doit vérifier si le lecteur peut facilement comprendre l’idée principale du paragraphe.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Muchas personas estudian en casa porque pueden organizar mejor su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Las personas hacen cosas en sitios porque cosas.', 'is_correct' => false],
                            ['choice_text' => 'Muchas personas, porque tiempo, estudian.', 'is_correct' => false],
                            ['choice_text' => 'Estudian muchas cosas por eso.', 'is_correct' => false],
                        ],
                        'explanation' => 'La version améliorée indique clairement qui agit, ce que les personnes font, et pourquoi.',
                    ],
                    [
                        'question' => 'Que faut-il vérifier si un paragraphe contient de nombreuses idées sans lien entre elles ?',
                        'choices' => [
                            ['choice_text' => 'Si chaque phrase doit être allongée.', 'is_correct' => false],
                            ['choice_text' => 'S’il faut supprimer le titre.', 'is_correct' => false],
                            ['choice_text' => 'S’il faut supprimer la ponctuation.', 'is_correct' => false],
                            ['choice_text' => 'S’il faut diviser ou recentrer le paragraphe.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un paragraphe doit normalement développer une seule idée principale ; les points sans lien peuvent donc avoir besoin d’être réorganisés.',
                    ],
                    [
                        'question' => 'Quelle phrase finale évite d’introduire un sujet complètement nouveau ?',
                        'choices' => [
                            ['choice_text' => 'También me gusta cocinar pizza los domingos.', 'is_correct' => false],
                            ['choice_text' => 'Mi vecino compró un coche ayer.', 'is_correct' => false],
                            ['choice_text' => 'Por estas razones, creo que estudiar idiomas es una buena inversión.', 'is_correct' => true],
                            ['choice_text' => 'Por cierto, el tiempo fue frío en enero.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conclusion doit clore le sujet déjà traité par l’essai plutôt que d’introduire soudainement un thème sans rapport.',
                    ],
                    [
                        'question' => 'Quelle révision est la plus adaptée à un essai de débutant ?',
                        'choices' => [
                            ['choice_text' => 'Toujours utiliser la phrase la plus longue possible.', 'is_correct' => false],
                            ['choice_text' => 'Éviter les verbes pour donner un ton plus formel au texte.', 'is_correct' => false],
                            ['choice_text' => 'Employer des mots peu familiers dans chaque phrase.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des phrases simples et correctes plutôt que des phrases compliquées pleines d’erreurs.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une écriture claire et correcte est plus utile qu’une complexité que le rédacteur ne maîtrise pas encore.',
                    ],
                    [
                        'question' => 'Quelle vérification finale est particulièrement utile avant de remettre un essai ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier l’orthographe, les conjugaisons, la ponctuation et l’ordre des paragraphes.', 'is_correct' => true],
                            ['choice_text' => 'Compter uniquement les adjectifs.', 'is_correct' => false],
                            ['choice_text' => 'Ne vérifier que le titre.', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la conclusion.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dernière relecture doit porter à la fois sur la justesse de la langue et sur l’organisation d’ensemble.',
                    ],
                ],
            ],
            [
                'title' => 'Pratique intégrée de rédaction pour débutants',
                'description' => 'Combinez planification, organisation des paragraphes, exemples, connecteurs et conclusions dans des exercices de rédaction réalistes pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous devez écrire sur « Ma routine quotidienne ». Quel plan est le plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Introduction de la routine → activités du matin → activités de l’après-midi et du soir → conclusion.', 'is_correct' => true],
                            ['choice_text' => 'Seulement une liste de verbes sans paragraphes.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion d’abord → détails au hasard → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Seulement le titre et une longue phrase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un enchaînement simple aide le lecteur à suivre la routine du début à la fin.',
                    ],
                    [
                        'question' => 'Quelle idée directrice convient à un essai court sur les études en ligne ?',
                        'choices' => [
                            ['choice_text' => 'Mi ordenador es negro.', 'is_correct' => false],
                            ['choice_text' => 'Estudiar en línea ofrece flexibilidad, pero también exige organización.', 'is_correct' => true],
                            ['choice_text' => 'Ayer estudié durante una hora.', 'is_correct' => false],
                            ['choice_text' => 'La palabra "online" es interesante.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle donne deux idées liées qui peuvent devenir les points principaux de l’essai.',
                    ],
                    [
                        'question' => 'Quelle phrase-clé de paragraphe de développement conviendrait au premier avantage ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, estudiar en línea es difícil.', 'is_correct' => false],
                            ['choice_text' => 'Adiós y gracias.', 'is_correct' => false],
                            ['choice_text' => 'Una ventaja importante de estudiar en línea es la flexibilidad.', 'is_correct' => true],
                            ['choice_text' => 'Tengo una computadora en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle annonce clairement le premier point principal du paragraphe.',
                    ],
                    [
                        'question' => 'Quel exemple soutient le mieux l’idée de flexibilité des études en ligne ?',
                        'choices' => [
                            ['choice_text' => 'El estudiante tiene una mochila azul.', 'is_correct' => false],
                            ['choice_text' => 'La clase tiene una puerta.', 'is_correct' => false],
                            ['choice_text' => 'El ordenador está sobre la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Un estudiante puede organizar sus horas de estudio según su horario.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’exemple démontre directement en quoi les études en ligne peuvent offrir de la flexibilité.',
                    ],
                    [
                        'question' => 'Quel connecteur aiderait à introduire un second avantage ?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                        ],
                        'explanation' => '« Además » ajoute un autre point qui soutient l’idée.',
                    ],
                    [
                        'question' => 'Quelle phrase pourrait introduire un inconvénient après avoir évoqué des avantages ?',
                        'choices' => [
                            ['choice_text' => 'Además, estudiar en línea es un beneficio.', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo, estudiar en línea también puede ser difícil para algunas personas.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, primero.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, adiós.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sin embargo » marque clairement le contraste entre les avantages et les inconvénients.',
                    ],
                    [
                        'question' => 'Quelle conclusion convient à un essai sur les études en ligne ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, mañana voy al mercado.', 'is_correct' => false],
                            ['choice_text' => 'También tengo dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, estudiar en línea puede ser muy útil si el estudiante sabe organizar su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'La mesa está en la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => 'La conclusion résume le sujet de l’essai et laisse au lecteur une idée finale utile.',
                    ],
                    [
                        'question' => 'Vous écrivez un essai sur l’alimentation saine. Quel plan de paragraphes est le plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Exemples → salutation → conclusion → titre.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → anecdote sans rapport → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Seulement une liste de noms d’aliments.', 'is_correct' => false],
                            ['choice_text' => 'Introduction → bienfaits de l’alimentation saine → exemples pratiques → conclusion.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cet ordre permet au rédacteur de présenter le sujet, de le développer, de le soutenir, puis de conclure l’essai.',
                    ],
                    [
                        'question' => 'Quelle phrase illustre bien l’affirmation « comer verduras es saludable » ?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, las verduras aportan vitaminas y pueden formar parte de una dieta equilibrada.', 'is_correct' => true],
                            ['choice_text' => 'Las verduras son verduras.', 'is_correct' => false],
                            ['choice_text' => 'Mi vecino come pizza.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, mañana es viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle appuie l’affirmation avec un détail précis lié à la santé.',
                    ],
                    [
                        'question' => 'Quelle phrase met le mieux en contraste deux façons de voyager ?',
                        'choices' => [
                            ['choice_text' => 'Viajar tren autobús y.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, tren.', 'is_correct' => false],
                            ['choice_text' => 'Mi viaje tiene una maleta.', 'is_correct' => false],
                            ['choice_text' => 'Viajar en tren puede ser cómodo; sin embargo, el autobús puede ser más barato.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase présente un avantage, puis utilise « sin embargo » pour introduire un point contrastant.',
                    ],
                    [
                        'question' => 'Quelle révision finale améliore la fluidité du paragraphe ?',
                        'choices' => [
                            ['choice_text' => 'Supprimer tous les connecteurs.', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des connecteurs tels que « además », « sin embargo » et « por último » là où les liens entre les idées doivent être plus clairs.', 'is_correct' => true],
                            ['choice_text' => 'Faire commencer chaque phrase par le même mot.', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des exemples sans lien avec le sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les connecteurs aident le lecteur à comprendre comment les idées se relient entre elles.',
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
