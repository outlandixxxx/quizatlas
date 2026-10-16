<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-grammar')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les noms et le genre en espagnol',
                'description' => 'S’exercer à identifier le genre et le nombre des noms, repérer les schémas de genre courants et manier les noms du quotidien naturellement.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Lucía achète un nouveau ___ pour l’école. Quel nom complète naturellement la phrase ?',
                        'choices' => [
                            ['choice_text' => 'cuaderna', 'is_correct' => false],
                            ['choice_text' => 'cuadernó', 'is_correct' => false],
                            ['choice_text' => 'cuaderno', 'is_correct' => true],
                            ['choice_text' => 'cuadernos', 'is_correct' => false],
                        ],
                        'explanation' => '« Cuaderno » est un nom masculin singulier, donc il convient après « un » ou « el ».',
                    ],
                    [
                        'question' => 'Quel article accompagne correctement « mesa » ?',
                        'choices' => [
                            ['choice_text' => 'el', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => true],
                        ],
                        'explanation' => '« Mesa » est féminin singulier, donc l’article défini est « la ».',
                    ],
                    [
                        'question' => 'Tu vois le mot « libros ». Qu’est-ce qui t’indique qu’il est au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'La terminaison -os', 'is_correct' => true],
                            ['choice_text' => 'La première lettre', 'is_correct' => false],
                            ['choice_text' => 'L’accent', 'is_correct' => false],
                            ['choice_text' => 'Le mot a deux syllabes', 'is_correct' => false],
                        ],
                        'explanation' => 'La terminaison « -os » est une terminaison plurielle masculine courante en espagnol.',
                    ],
                    [
                        'question' => 'Choisis l’expression naturelle pour « une enseignante ».',
                        'choices' => [
                            ['choice_text' => 'un profesor', 'is_correct' => false],
                            ['choice_text' => 'una profesora', 'is_correct' => true],
                            ['choice_text' => 'un profesora', 'is_correct' => false],
                            ['choice_text' => 'una profesor', 'is_correct' => false],
                        ],
                        'explanation' => '« Profesora » est la forme féminine de « profesor », donc elle prend « una ».',
                    ],
                    [
                        'question' => 'Quel nom est généralement féminin ?',
                        'choices' => [
                            ['choice_text' => 'noche', 'is_correct' => true],
                            ['choice_text' => 'mapa', 'is_correct' => false],
                            ['choice_text' => 'día', 'is_correct' => false],
                            ['choice_text' => 'problema', 'is_correct' => false],
                        ],
                        'explanation' => '« Noche » est un nom féminin et s’emploie normalement avec « la » ou « una ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit « la problema ». Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'los problema', 'is_correct' => false],
                            ['choice_text' => 'una problema', 'is_correct' => false],
                            ['choice_text' => 'el problema', 'is_correct' => true],
                            ['choice_text' => 'la problemas', 'is_correct' => false],
                        ],
                        'explanation' => '« Problema » est masculin malgré sa terminaison en « -a », donc l’expression correcte est « el problema ».',
                    ],
                    [
                        'question' => 'Quelle paire passe correctement du singulier au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'el papel → los papela', 'is_correct' => false],
                            ['choice_text' => 'la flor → las flores', 'is_correct' => true],
                            ['choice_text' => 'la ciudad → las ciudads', 'is_correct' => false],
                            ['choice_text' => 'el árbol → el árboles', 'is_correct' => false],
                        ],
                        'explanation' => '« Flor » devient « flores » au pluriel, et l’article féminin passe de « la » à « las ».',
                    ],
                    [
                        'question' => 'Dans la phrase « Los estudiantes llegan temprano », pourquoi utilise-t-on « los » ?',
                        'choices' => [
                            ['choice_text' => 'Parce que « estudiantes » est toujours masculin', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’espagnol utilise « los » devant chaque personne', 'is_correct' => false],
                            ['choice_text' => 'Parce que « estudiantes » est singulier', 'is_correct' => false],
                            ['choice_text' => 'Parce que le groupe est pluriel et que le nom est traité comme masculin ici', 'is_correct' => true],
                        ],
                        'explanation' => '« Estudiantes » est pluriel ici, et ce groupe mixte ou masculin est désigné par l’accord masculin pluriel : « los estudiantes ».',
                    ],
                    [
                        'question' => 'Quel mot est l’intrus parce que son genre ne suit pas le schéma courant en -o ?',
                        'choices' => [
                            ['choice_text' => 'niño', 'is_correct' => false],
                            ['choice_text' => 'casa', 'is_correct' => true],
                            ['choice_text' => 'libro', 'is_correct' => false],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin même s’il ne suit pas le schéma masculin courant en « -o ».',
                    ],
                    [
                        'question' => 'Un employé d’hôtel dit : « Tenemos dos ___ libres. » Quel nom convient s’il parle de chambres ?',
                        'choices' => [
                            ['choice_text' => 'habitacionas', 'is_correct' => false],
                            ['choice_text' => 'habitaciónes', 'is_correct' => false],
                            ['choice_text' => 'habitació', 'is_correct' => false],
                            ['choice_text' => 'habitaciones', 'is_correct' => true],
                        ],
                        'explanation' => '« Habitación » est féminin et son pluriel est « habitaciones », donc « dos habitaciones » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un accord de genre correct ?',
                        'choices' => [
                            ['choice_text' => 'La chica es simpática.', 'is_correct' => true],
                            ['choice_text' => 'La chico es simpática.', 'is_correct' => false],
                            ['choice_text' => 'El chica es simpático.', 'is_correct' => false],
                            ['choice_text' => 'El chica es simpática.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chica » est féminin, donc l’article et l’adjectif s’accordent : « la chica simpática ».',
                    ],
                    [
                        'question' => 'Quel nom garde normalement la même forme pour un homme et une femme, l’article indiquant la différence ?',
                        'choices' => [
                            ['choice_text' => 'actor', 'is_correct' => false],
                            ['choice_text' => 'niño', 'is_correct' => false],
                            ['choice_text' => 'estudiante', 'is_correct' => true],
                            ['choice_text' => 'profesor', 'is_correct' => false],
                        ],
                        'explanation' => '« Estudiante » peut désigner un homme ou une femme ; l’article peut indiquer le genre : « el estudiante » / « la estudiante ».',
                    ],
                    [
                        'question' => 'Pedro a une sœur et deux frères. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una hermana y dos hermano.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un hermana y dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermanas y dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermana y dos hermanos.', 'is_correct' => true],
                        ],
                        'explanation' => '« Hermana » est féminin singulier et « hermanos » est masculin pluriel pour les deux frères.',
                    ],
                ],
            ],
            [
                'title' => 'Les articles et déterminants',
                'description' => 'Travailler les articles définis et indéfinis, les formes plurielles et les choix d’articles courants dans des phrases espagnoles du quotidien.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel article complète « ___ manzana está sobre la mesa » ?',
                        'choices' => [
                            ['choice_text' => 'El', 'is_correct' => false],
                            ['choice_text' => 'Los', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => true],
                        ],
                        'explanation' => '« Manzana » est féminin singulier, donc l’article défini est « la ».',
                    ],
                    [
                        'question' => 'Choisis l’expression indéfinie correcte pour « quelques livres ».',
                        'choices' => [
                            ['choice_text' => 'unos libros', 'is_correct' => true],
                            ['choice_text' => 'unas libros', 'is_correct' => false],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                            ['choice_text' => 'unos libro', 'is_correct' => false],
                        ],
                        'explanation' => '« Libros » est masculin pluriel, donc « unos libros » est l’expression indéfinie correspondante.',
                    ],
                    [
                        'question' => 'Marta a un chien qu’elle a déjà mentionné. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tengo un perro. La perro duerme mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una perro. El perro duerme mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un perro. El perro duerme mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un perro. Un perro duerme mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après avoir présenté un chien précis avec « un perro », l’espagnol utilise normalement « el perro » pour y faire référence à nouveau.',
                    ],
                    [
                        'question' => 'Quelle paire est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una árboles', 'is_correct' => false],
                            ['choice_text' => 'un árbol', 'is_correct' => true],
                            ['choice_text' => 'unos árbol', 'is_correct' => false],
                            ['choice_text' => 'una árbol', 'is_correct' => false],
                        ],
                        'explanation' => '« Árbol » est masculin singulier, donc l’expression indéfinie correcte est « un árbol ».',
                    ],
                    [
                        'question' => 'Tu parles des livres en général, pas d’un ensemble précis. Quelle expression convient ?',
                        'choices' => [
                            ['choice_text' => 'un libros', 'is_correct' => false],
                            ['choice_text' => 'los libro', 'is_correct' => false],
                            ['choice_text' => 'los libros', 'is_correct' => true],
                            ['choice_text' => 'una libros', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise couramment l’article défini pluriel pour une affirmation générale sur une catégorie : « Los libros pueden ser muy útiles. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un article indéfini ?',
                        'choices' => [
                            ['choice_text' => 'Hay una estudiantes en clase.', 'is_correct' => false],
                            ['choice_text' => 'Hay una estudiante en clase.', 'is_correct' => true],
                            ['choice_text' => 'Hay unos estudiante en clase.', 'is_correct' => false],
                            ['choice_text' => 'Hay un estudiantes en clase.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estudiante » est singulier ici, donc « una estudiante » est correct pour une élève.',
                    ],
                    [
                        'question' => 'Un ami dit : « Necesito ___ mapa. » Quelle option est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'una', 'is_correct' => false],
                            ['choice_text' => 'unos', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '« Mapa » est un nom masculin, donc il prend « un » à la forme indéfinie singulière.',
                    ],
                    [
                        'question' => 'Quelle phrase a un accord correct entre l’article et le nom ?',
                        'choices' => [
                            ['choice_text' => 'Las problema son difíciles.', 'is_correct' => false],
                            ['choice_text' => 'Los problemas es difícil.', 'is_correct' => false],
                            ['choice_text' => 'La problemas son difíciles.', 'is_correct' => false],
                            ['choice_text' => 'Los problemas son difíciles.', 'is_correct' => true],
                        ],
                        'explanation' => '« Problemas » est masculin pluriel, donc « los problemas » est le groupe nominal correct.',
                    ],
                    [
                        'question' => 'Tu veux dire « une idée » en espagnol. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una idea', 'is_correct' => true],
                            ['choice_text' => 'un idea', 'is_correct' => false],
                            ['choice_text' => 'unos idea', 'is_correct' => false],
                            ['choice_text' => 'una ideas', 'is_correct' => false],
                        ],
                        'explanation' => '« Idea » est féminin singulier, donc l’expression correcte est « una idea ».',
                    ],
                    [
                        'question' => 'Quelle phrase passe correctement un groupe nominal singulier au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'el silla → los sillas', 'is_correct' => false],
                            ['choice_text' => 'un libro → unas libros', 'is_correct' => false],
                            ['choice_text' => 'la ventana → las ventanas', 'is_correct' => true],
                            ['choice_text' => 'una coche → unos coche', 'is_correct' => false],
                        ],
                        'explanation' => '« La ventana » devient « las ventanas » : l’article et le nom deviennent tous deux féminins pluriels.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle pour désigner plusieurs élèves précis dans une classe ?',
                        'choices' => [
                            ['choice_text' => 'La estudiantes están aquí.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiantes están aquí.', 'is_correct' => true],
                            ['choice_text' => 'Los estudiante están aquí.', 'is_correct' => false],
                            ['choice_text' => 'Una estudiantes están aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estudiantes » est pluriel, et pour un groupe entièrement féminin, « las estudiantes » est correct.',
                    ],
                ],
            ],
            [
                'title' => 'L’accord et la place de l’adjectif',
                'description' => 'S’exercer à accorder les adjectifs avec les noms en genre et en nombre, et reconnaître les positions courantes des adjectifs dans des phrases simples.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Choisis la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'La casa es bonita.', 'is_correct' => true],
                            ['choice_text' => 'La casa es bonito.', 'is_correct' => false],
                            ['choice_text' => 'La casa son bonita.', 'is_correct' => false],
                            ['choice_text' => 'El casa es bonita.', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin singulier, donc l’adjectif doit être « bonita ».',
                    ],
                    [
                        'question' => 'Quel adjectif s’accorde avec « los zapatos » ?',
                        'choices' => [
                            ['choice_text' => 'nuevo', 'is_correct' => false],
                            ['choice_text' => 'nueva', 'is_correct' => false],
                            ['choice_text' => 'nuevos', 'is_correct' => true],
                            ['choice_text' => 'nuevas', 'is_correct' => false],
                        ],
                        'explanation' => '« Zapatos » est masculin pluriel, donc « nuevos » s’accorde en genre et en nombre.',
                    ],
                    [
                        'question' => 'Sofía a deux sacs rouges. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dos bolso rojo', 'is_correct' => false],
                            ['choice_text' => 'dos bolsas roja', 'is_correct' => false],
                            ['choice_text' => 'dos bolsos rojas', 'is_correct' => false],
                            ['choice_text' => 'dos bolsas rojas', 'is_correct' => true],
                        ],
                        'explanation' => '« Bolsas » est féminin pluriel, donc « dos bolsas » et « rojas » sont au féminin pluriel.',
                    ],
                    [
                        'question' => 'Quelle est la forme correcte de « interesante » avec des noms pluriels ?',
                        'choices' => [
                            ['choice_text' => 'interesanta', 'is_correct' => false],
                            ['choice_text' => 'interesantes', 'is_correct' => true],
                            ['choice_text' => 'interesantos', 'is_correct' => false],
                            ['choice_text' => 'interesantas', 'is_correct' => false],
                        ],
                        'explanation' => '« Interesante » garde normalement la même forme au masculin et au féminin et ajoute « -s » au pluriel : « interesantes ».',
                    ],
                    [
                        'question' => 'Une enseignante écrit « Las clases son fácil. » Qu’est-ce qu’il faut changer ?',
                        'choices' => [
                            ['choice_text' => 'fácil → fáciles', 'is_correct' => true],
                            ['choice_text' => 'Las → Los', 'is_correct' => false],
                            ['choice_text' => 'clases → clase', 'is_correct' => false],
                            ['choice_text' => 'son → es', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme « clases » est pluriel, l’adjectif doit aussi être pluriel : « fáciles ».',
                    ],
                    [
                        'question' => 'Quelle phrase a l’adjectif correctement accordé ?',
                        'choices' => [
                            ['choice_text' => 'Una libro interesante', 'is_correct' => false],
                            ['choice_text' => 'Un libros interesantes', 'is_correct' => false],
                            ['choice_text' => 'Una libros interesante', 'is_correct' => false],
                            ['choice_text' => 'Un libro interesante', 'is_correct' => true],
                        ],
                        'explanation' => '« Libro » est masculin singulier, et « interesante » a la bonne forme au singulier.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « trois petites maisons » ?',
                        'choices' => [
                            ['choice_text' => 'tres casas pequeño', 'is_correct' => false],
                            ['choice_text' => 'tres casas pequeñas', 'is_correct' => true],
                            ['choice_text' => 'tres casa pequeñas', 'is_correct' => false],
                            ['choice_text' => 'tres casas pequeños', 'is_correct' => false],
                        ],
                        'explanation' => '« Casas » est féminin pluriel, donc l’adjectif est « pequeñas ».',
                    ],
                    [
                        'question' => 'Quel mot change selon le genre dans cette paire ?',
                        'choices' => [
                            ['choice_text' => 'grande / grande', 'is_correct' => false],
                            ['choice_text' => 'feliz / feliz', 'is_correct' => false],
                            ['choice_text' => 'alto / alta', 'is_correct' => true],
                            ['choice_text' => 'interesante / interesantes', 'is_correct' => false],
                        ],
                        'explanation' => '« Alto » devient « alta » car il a des formes masculine et féminine distinctes. Les autres paires restent identiques pour le genre ou changent seulement pour le nombre.',
                    ],
                    [
                        'question' => 'Tu veux décrire Juan comme fatigué. Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'Juan está cansado.', 'is_correct' => true],
                            ['choice_text' => 'Juan está cansada.', 'is_correct' => false],
                            ['choice_text' => 'Juan están cansado.', 'is_correct' => false],
                            ['choice_text' => 'Juan es cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '« Juan » est masculin singulier, donc l’adjectif est « cansado ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Las flores amarillos son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'Los flores amarillas son bonito.', 'is_correct' => false],
                            ['choice_text' => 'Las flores amarillas son bonitas.', 'is_correct' => true],
                            ['choice_text' => 'Las flor amarillas son bonitas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Flores » est féminin pluriel, donc « amarillas » et « bonitas » s’accordent tous les deux avec lui.',
                    ],
                    [
                        'question' => 'Un apprenant dit : « Tengo una camisa blanco. » Quelle est la correction naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tengo un camisa blanco.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una camisas blancas.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un camisa blanca.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una camisa blanca.', 'is_correct' => true],
                        ],
                        'explanation' => '« Camisa » est féminin singulier, donc l’adjectif doit être « blanca ».',
                    ],
                    [
                        'question' => 'Quel adjectif est normalement invariable pour le genre ?',
                        'choices' => [
                            ['choice_text' => 'español', 'is_correct' => false],
                            ['choice_text' => 'joven', 'is_correct' => true],
                            ['choice_text' => 'trabajador', 'is_correct' => false],
                            ['choice_text' => 'alto', 'is_correct' => false],
                        ],
                        'explanation' => '« Joven » a la même forme au masculin et au féminin ; seul le pluriel change en « jóvenes ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos son simpática.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigo son simpático.', 'is_correct' => false],
                        ],
                        'explanation' => '« Amigos » est masculin pluriel, donc « simpáticos » est l’adjectif correspondant.',
                    ],
                    [
                        'question' => 'Quelle expression est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'una película largos', 'is_correct' => false],
                            ['choice_text' => 'un película larga', 'is_correct' => false],
                            ['choice_text' => 'una películas larga', 'is_correct' => false],
                            ['choice_text' => 'una película larga', 'is_correct' => true],
                        ],
                        'explanation' => '« Película » est féminin singulier, donc « larga » est requis.',
                    ],
                    [
                        'question' => 'Dans « unas casas blancas », qu’est-ce que « blancas » t’indique ?',
                        'choices' => [
                            ['choice_text' => 'Les maisons sont au singulier', 'is_correct' => false],
                            ['choice_text' => 'Les maisons sont masculines', 'is_correct' => false],
                            ['choice_text' => 'L’adjectif s’accorde avec le féminin pluriel « casas »', 'is_correct' => true],
                            ['choice_text' => 'L’adjectif est employé comme un nom', 'is_correct' => false],
                        ],
                        'explanation' => '« Blancas » est la forme féminine plurielle de « blanco », accordée avec « casas ».',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms dans les phrases du quotidien',
                'description' => 'Utiliser les pronoms sujets, les pronoms d’objet de base, les formes possessives et les choix de pronoms que les débutants rencontrent dans l’espagnol courant.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel pronom sujet signifie « je » ?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » est le pronom sujet espagnol pour « je ».',
                    ],
                    [
                        'question' => 'Marta et Luis attendent. Quel pronom peut remplacer leurs noms ?',
                        'choices' => [
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'nosotras', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour Marta et Luis ensemble, on utilise le pronom sujet masculin pluriel « ellos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Yo vive en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Yo vivo en Madrid.', 'is_correct' => true],
                            ['choice_text' => 'Yo vives en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Yo viven en Madrid.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme au présent de « vivir » avec « yo » est « vivo ».',
                    ],
                    [
                        'question' => 'Quel pronom utiliserais-tu pour un groupe composé uniquement de femmes parlant d’elles-mêmes ?',
                        'choices' => [
                            ['choice_text' => 'nosotras', 'is_correct' => true],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                        ],
                        'explanation' => '« Nosotras » est la forme féminine plurielle de « nous ».',
                    ],
                    [
                        'question' => 'Choisis la phrase naturelle.',
                        'choices' => [
                            ['choice_text' => 'Ella estudio medicina.', 'is_correct' => false],
                            ['choice_text' => 'Ella estudias medicina.', 'is_correct' => false],
                            ['choice_text' => 'Ella estudia medicina.', 'is_correct' => true],
                            ['choice_text' => 'Ella estudiar medicina.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ella » prend la forme au présent de la troisième personne du singulier « estudia ».',
                    ],
                    [
                        'question' => 'Tu parles directement à un ami. Quel pronom sujet est la forme familière de « tu » dans la plupart des contextes hispanophones ?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => true],
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '« Tú » est le « tu » familier singulier ; « usted » est une forme formelle singulière.',
                    ],
                    [
                        'question' => 'Quelle expression possessive signifie « mes livres » ?',
                        'choices' => [
                            ['choice_text' => 'mi libros', 'is_correct' => false],
                            ['choice_text' => 'míos libro', 'is_correct' => false],
                            ['choice_text' => 'mí libros', 'is_correct' => false],
                            ['choice_text' => 'mis libros', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom pluriel « libros » prend le possessif pluriel « mis ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « nuestro » ?',
                        'choices' => [
                            ['choice_text' => 'Nuestro casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'Nuestra casa es grande.', 'is_correct' => true],
                            ['choice_text' => 'Nuestros casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'Nuestra casas es grande.', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin singulier, donc le possessif doit être « nuestra ».',
                    ],
                    [
                        'question' => 'Ana a la clé. Quelle phrase remplace « la clé » par un pronom d’objet direct ?',
                        'choices' => [
                            ['choice_text' => 'Ana la tiene.', 'is_correct' => true],
                            ['choice_text' => 'Ana lo tiene.', 'is_correct' => false],
                            ['choice_text' => 'Ana las tiene.', 'is_correct' => false],
                            ['choice_text' => 'Ana le tiene.', 'is_correct' => false],
                        ],
                        'explanation' => '« La llave » est féminin singulier, donc le pronom d’objet direct est « la » : « Ana la tiene ».',
                    ],
                    [
                        'question' => 'Quel pronom remplace « los libros » dans « Leo los libros » ?',
                        'choices' => [
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => true],
                        ],
                        'explanation' => '« Los libros » est masculin pluriel, donc le pronom d’objet direct est « los ».',
                    ],
                    [
                        'question' => 'Un serveur demande : « ¿Quieres agua? » Quelle courte réponse utilise un pronom de façon naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Sí, lo quiero.', 'is_correct' => false],
                            ['choice_text' => 'Sí, los quiero.', 'is_correct' => false],
                            ['choice_text' => 'Sí, la quiero.', 'is_correct' => true],
                            ['choice_text' => 'Sí, le quiero.', 'is_correct' => false],
                        ],
                        'explanation' => '« Agua » est traité comme féminin, donc le pronom d’objet direct est « la » : « Sí, la quiero ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif possessif ?',
                        'choices' => [
                            ['choice_text' => 'Mis hermana vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana vive aquí.', 'is_correct' => true],
                            ['choice_text' => 'Mí hermana vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermanas vive aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mi » s’utilise avec un nom singulier, donc « mi hermana » est correct.',
                    ],
                    [
                        'question' => 'Quel pronom sujet convient à « Carlos y yo » ?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                        ],
                        'explanation' => '« Carlos y yo » signifie « nous », donc « nosotros » est le pronom sujet approprié.',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes au présent et leur conjugaison',
                'description' => 'Renforcer la confiance avec les verbes réguliers au présent et les formes irrégulières courantes à travers de courtes phrases réalistes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complète : « Yo ___ español todos los días. »',
                        'choices' => [
                            ['choice_text' => 'estudio', 'is_correct' => true],
                            ['choice_text' => 'estudias', 'is_correct' => false],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudian', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « yo », la forme au présent de « estudiar » est « estudio ».',
                    ],
                    [
                        'question' => 'Quelle forme de « hablar » complète « Nosotros ___ en clase » ?',
                        'choices' => [
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => true],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme de la première personne du pluriel de « hablar » est « hablamos ».',
                    ],
                    [
                        'question' => 'Carlos ___ café por la mañana. Choisis la bonne forme.',
                        'choices' => [
                            ['choice_text' => 'bebo', 'is_correct' => false],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebe', 'is_correct' => true],
                            ['choice_text' => 'bebemos', 'is_correct' => false],
                        ],
                        'explanation' => '« Carlos » est la troisième personne du singulier, donc « beber » devient « bebe ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ellos comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ellos como temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ellos comer temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ellos comen temprano.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme au présent de « comer » avec « ellos » est « comen ».',
                    ],
                    [
                        'question' => 'Tu parles de toi-même à un ami : « Yo ___ en Casablanca. »',
                        'choices' => [
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivo', 'is_correct' => true],
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « yo » de « vivir » est « vivo ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « tener » ?',
                        'choices' => [
                            ['choice_text' => 'Yo tiene dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Yo tienes dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Yo tienen dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Yo tengo dos hermanos.', 'is_correct' => true],
                        ],
                        'explanation' => '« Tener » est irrégulier à la première personne : « yo tengo ».',
                    ],
                    [
                        'question' => 'María y Ana ___ una película cada viernes.',
                        'choices' => [
                            ['choice_text' => 'ven', 'is_correct' => true],
                            ['choice_text' => 've', 'is_correct' => false],
                            ['choice_text' => 'vemos', 'is_correct' => false],
                            ['choice_text' => 'ves', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est pluriel, donc la forme de « ver » est « ven ».',
                    ],
                    [
                        'question' => 'Quelle phrase sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tú escribo muchos correos.', 'is_correct' => false],
                            ['choice_text' => 'Tú escribe muchos correos.', 'is_correct' => false],
                            ['choice_text' => 'Tú escribes muchos correos.', 'is_correct' => true],
                            ['choice_text' => 'Tú escribir muchos correos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tú », la forme au présent de « escribir » est « escribes ».',
                    ],
                    [
                        'question' => 'Un élève dit : « Nosotros trabaja mucho. » Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros trabajo mucho.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros trabajas mucho.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros trabajan mucho.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros trabajamos mucho.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme de la première personne du pluriel est « trabajamos », et non « trabaja ».',
                    ],
                    [
                        'question' => 'Choisis la bonne forme : « Mis padres ___ en un hospital. »',
                        'choices' => [
                            ['choice_text' => 'trabajan', 'is_correct' => true],
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajamos', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis padres » est la troisième personne du pluriel, donc « trabajar » devient « trabajan ».',
                    ],
                    [
                        'question' => 'Quelle forme verbale correspond à « ella » dans « Ella ___ música » ?',
                        'choices' => [
                            ['choice_text' => 'escucho', 'is_correct' => false],
                            ['choice_text' => 'escucha', 'is_correct' => true],
                            ['choice_text' => 'escuchas', 'is_correct' => false],
                            ['choice_text' => 'escuchan', 'is_correct' => false],
                        ],
                        'explanation' => '« Ella » prend la forme de la troisième personne du singulier « escucha ».',
                    ],
                    [
                        'question' => 'Complète : « ¿Tú ___ la respuesta? »',
                        'choices' => [
                            ['choice_text' => 'sabe', 'is_correct' => false],
                            ['choice_text' => 'sé', 'is_correct' => false],
                            ['choice_text' => 'sabes', 'is_correct' => true],
                            ['choice_text' => 'saben', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme au présent de « saber » avec « tú » est « sabes ».',
                    ],
                    [
                        'question' => 'Quelle est la forme correcte de « hacer » à la première personne ?',
                        'choices' => [
                            ['choice_text' => 'haco', 'is_correct' => false],
                            ['choice_text' => 'haces', 'is_correct' => false],
                            ['choice_text' => 'hago', 'is_correct' => true],
                            ['choice_text' => 'hace', 'is_correct' => false],
                        ],
                        'explanation' => '« Hacer » est irrégulier à la première personne : « yo hago ».',
                    ],
                    [
                        'question' => 'Sofía ___ a la oficina a las ocho.',
                        'choices' => [
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => true],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'van', 'is_correct' => false],
                        ],
                        'explanation' => '« Sofía » est la troisième personne du singulier, donc « ir » devient « va ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros vamos al mercado.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros van al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vas al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros voy al mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme de la première personne du pluriel de « ir » est « vamos ».',
                    ],
                    [
                        'question' => 'Complète : « Yo ___ una respuesta rápida. »',
                        'choices' => [
                            ['choice_text' => 'dices', 'is_correct' => false],
                            ['choice_text' => 'dice', 'is_correct' => false],
                            ['choice_text' => 'decimos', 'is_correct' => false],
                            ['choice_text' => 'digo', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme de la première personne du singulier de « decir » est « digo ».',
                    ],
                    [
                        'question' => 'Quelle forme au présent accompagne « ustedes » ?',
                        'choices' => [
                            ['choice_text' => 'hablan', 'is_correct' => true],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'habla', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => false],
                        ],
                        'explanation' => '« Ustedes » prend la forme verbale de la troisième personne du pluriel : « hablan ».',
                    ],
                    [
                        'question' => 'Une enseignante demande : « ¿De dónde ___ ustedes? »',
                        'choices' => [
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => true],
                            ['choice_text' => 'somos', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ustedes », la forme au présent de « ser » est « son ».',
                    ],
                    [
                        'question' => 'Quelle phrase a le bon accord verbal ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana estudian francés.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudio francés.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudia francés.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana estudiar francés.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet singulier « mi hermana » prend la forme de la troisième personne du singulier « estudia ».',
                    ],
                    [
                        'question' => 'Un ami dit : « Yo quiero aprender, pero no ___ tiempo. » Quelle forme de « tener » convient ?',
                        'choices' => [
                            ['choice_text' => 'tiene', 'is_correct' => false],
                            ['choice_text' => 'tienes', 'is_correct' => false],
                            ['choice_text' => 'tenemos', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => true],
                        ],
                        'explanation' => 'Le locuteur est « yo », donc la forme correcte est « tengo » : « no tengo tiempo ».',
                    ],
                ],
            ],
            [
                'title' => 'Ser, estar et hay',
                'description' => 'Apprendre à distinguer les usages de base de ser et estar, et s’exercer avec hay pour parler de ce qui existe ou est présent.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase décrit une identité ou une profession de base ?',
                        'choices' => [
                            ['choice_text' => 'Ana está profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ana es profesora.', 'is_correct' => true],
                            ['choice_text' => 'Ana hay profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ana está ser profesora.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ser » s’utilise pour l’identité et la profession : « Ana es profesora. »',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un lieu actuel ?',
                        'choices' => [
                            ['choice_text' => 'Madrid es en España.', 'is_correct' => false],
                            ['choice_text' => 'Madrid hay en España.', 'is_correct' => false],
                            ['choice_text' => 'Madrid son en España.', 'is_correct' => false],
                            ['choice_text' => 'Madrid está en España.', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour le lieu, l’espagnol utilise « estar » : « Madrid está en España. »',
                    ],
                    [
                        'question' => 'Il y a un supermarché près de chez moi. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Hay un supermercado cerca de mi casa.', 'is_correct' => true],
                            ['choice_text' => 'Está un supermercado cerca de mi casa.', 'is_correct' => false],
                            ['choice_text' => 'Es un supermercado cerca de mi casa.', 'is_correct' => false],
                            ['choice_text' => 'Son un supermercado cerca de mi casa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hay » s’utilise pour dire que quelque chose existe ou est présent.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un état temporaire ?',
                        'choices' => [
                            ['choice_text' => 'Luis es cansado ahora.', 'is_correct' => false],
                            ['choice_text' => 'Luis hay cansado ahora.', 'is_correct' => false],
                            ['choice_text' => 'Luis está cansado ahora.', 'is_correct' => true],
                            ['choice_text' => 'Luis están cansado ahora.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estar » s’utilise pour un état ou une condition actuelle : « está cansado ».',
                    ],
                    [
                        'question' => 'Choisis la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'Mi hermana es en casa.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana está en casa.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana hay en casa.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana son en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lieu où se trouve une personne s’exprime avec « estar » : « está en casa ».',
                    ],
                    [
                        'question' => 'Quelle option signifie « Il y a trois chaises dans la pièce » ?',
                        'choices' => [
                            ['choice_text' => 'Hay tres sillas en la habitación.', 'is_correct' => true],
                            ['choice_text' => 'Está tres sillas en la habitación.', 'is_correct' => false],
                            ['choice_text' => 'Son tres sillas en la habitación.', 'is_correct' => false],
                            ['choice_text' => 'Es tres sillas en la habitación.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hay » introduit des choses qui existent ou sont présentes ; « tres sillas » est pluriel.',
                    ],
                    [
                        'question' => 'Un élève dit : « Mi padre está médico. » Quelle est la correction habituelle ?',
                        'choices' => [
                            ['choice_text' => 'Mi padre está medicina.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre hay médico.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre son médico.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre es médico.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une profession s’exprime normalement avec « ser » : « Mi padre es médico ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Las llaves son en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Las llaves hay en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Las llaves están en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'Las llaves es en la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Están » est la forme de la troisième personne du pluriel de « estar » et s’utilise pour le lieu.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure complétion : « En mi barrio ___ muchas tiendas » ?',
                        'choices' => [
                            ['choice_text' => 'están', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'hay', 'is_correct' => true],
                        ],
                        'explanation' => '« Hay » s’utilise pour affirmer que de nombreux commerces existent ou sont présents dans le quartier.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une caractéristique plutôt qu’un lieu actuel ?',
                        'choices' => [
                            ['choice_text' => 'La puerta está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta hay aquí.', 'is_correct' => false],
                            ['choice_text' => 'La puerta es azul.', 'is_correct' => true],
                            ['choice_text' => 'La puerta están aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Es azul » décrit une caractéristique de la porte ; « estar » s’utilise dans « está abierta » pour son état actuel.',
                    ],
                    [
                        'question' => 'Un café est ouvert en ce moment. Quelle phrase insiste sur son état actuel ?',
                        'choices' => [
                            ['choice_text' => 'El café está abierto.', 'is_correct' => true],
                            ['choice_text' => 'El café es abierto.', 'is_correct' => false],
                            ['choice_text' => 'El café hay abierto.', 'is_correct' => false],
                            ['choice_text' => 'El café son abierto.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un état actuel, comme être ouvert, s’exprime avec « estar ».',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement existence et lieu ?',
                        'choices' => [
                            ['choice_text' => 'Es una farmacia, y hay cerca del banco.', 'is_correct' => false],
                            ['choice_text' => 'Hay una farmacia, y está cerca del banco.', 'is_correct' => true],
                            ['choice_text' => 'Hay una farmacia, y es cerca del banco.', 'is_correct' => false],
                            ['choice_text' => 'Está una farmacia, y hay cerca del banco.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hay una farmacia » introduit son existence, tandis que « está cerca del banco » donne son emplacement.',
                    ],
                ],
            ],
            [
                'title' => 'Les prépositions, la négation et la construction de phrases',
                'description' => 'S’exercer avec des prépositions utiles, des phrases négatives simples et des schémas d’ordre des mots qui rendent l’espagnol débutant clair et naturel.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle préposition complète « Vivo ___ Madrid » ?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                        ],
                        'explanation' => 'La préposition habituelle pour vivre dans une ville est « en » : « Vivo en Madrid ».',
                    ],
                    [
                        'question' => 'Choisis la phrase naturelle pour « Je travaille avec Ana ».',
                        'choices' => [
                            ['choice_text' => 'Trabajo de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en Ana.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo con Ana.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo por Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Con » signifie « avec », donc « Trabajo con Ana » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase dit correctement « Le livre est sur la table » ?',
                        'choices' => [
                            ['choice_text' => 'El libro está en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'El libro está a la mesa.', 'is_correct' => false],
                            ['choice_text' => 'El libro está de la mesa.', 'is_correct' => false],
                            ['choice_text' => 'El libro está por la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => '« En » est la préposition naturelle pour une position sur ou dans un lieu : « en la mesa ».',
                    ],
                    [
                        'question' => 'Un élève veut dire « Je viens d’Espagne. » Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'Soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Hay de España.', 'is_correct' => false],
                            ['choice_text' => 'Soy de España.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ser de » exprime l’origine : « Soy de España ».',
                    ],
                    [
                        'question' => 'Quelle phrase est négative ?',
                        'choices' => [
                            ['choice_text' => 'Yo también estudio.', 'is_correct' => false],
                            ['choice_text' => 'Yo estudio mucho.', 'is_correct' => false],
                            ['choice_text' => 'Yo estudio aquí.', 'is_correct' => false],
                            ['choice_text' => 'Yo no estudio.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le mot « no » rend l’énoncé négatif : « Yo no estudio ».',
                    ],
                    [
                        'question' => 'Complète : « No ___ café por la noche. »',
                        'choices' => [
                            ['choice_text' => 'bebo', 'is_correct' => true],
                            ['choice_text' => 'bebe', 'is_correct' => false],
                            ['choice_text' => 'beber', 'is_correct' => false],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « yo », la forme au présent est « bebo » : « No bebo café… »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « para » naturellement ?',
                        'choices' => [
                            ['choice_text' => 'Este regalo es por Marta.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es de Marta para.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es para Marta.', 'is_correct' => true],
                            ['choice_text' => 'Este regalo está para Marta.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para » s’utilise couramment pour indiquer le destinataire prévu : « para Marta ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Nous étudions à la bibliothèque » ?',
                        'choices' => [
                            ['choice_text' => 'Estudiamos de la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Estudiamos por la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos a la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lieu est introduit par « en » : « en la biblioteca ».',
                    ],
                    [
                        'question' => 'Quelle phrase a un ordre des mots correct ?',
                        'choices' => [
                            ['choice_text' => 'Siempre yo desayuno temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo siempre desayuno temprano.', 'is_correct' => true],
                            ['choice_text' => 'Yo desayuno siempre temprano.', 'is_correct' => false],
                            ['choice_text' => 'Desayuno yo siempre temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo siempre desayuno temprano » est une phrase naturelle pour débutant avec « siempre » avant le verbe.',
                    ],
                    [
                        'question' => 'Un ami dit : « No me gusta el café ___ el té. » Quel mot signifie « ou » ?',
                        'choices' => [
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'porque', 'is_correct' => false],
                        ],
                        'explanation' => '« O » signifie « ou », donc la phrase devient « No me gusta el café o el té. »',
                    ],
                    [
                        'question' => 'Choisis le bon connecteur : « Estudio español ___ quiero viajar por América Latina. »',
                        'choices' => [
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'o', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                        ],
                        'explanation' => '« Y » relie deux énoncés liés : « Estudio español y quiero viajar… »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « porque » ?',
                        'choices' => [
                            ['choice_text' => 'No salgo porque estoy cansada yo.', 'is_correct' => false],
                            ['choice_text' => 'Porque no salgo estoy cansado.', 'is_correct' => false],
                            ['choice_text' => 'No salgo porque estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'No porque salgo estoy cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '« Porque » introduit la raison : « No salgo porque estoy cansado. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « de » pour la possession ou la relation ?',
                        'choices' => [
                            ['choice_text' => 'El coche en Juan es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'El coche con Juan es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'El coche por Juan es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'El coche de Juan es nuevo.', 'is_correct' => true],
                        ],
                        'explanation' => '« De » indique couramment la possession : « el coche de Juan ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement mise à la négative ?',
                        'choices' => [
                            ['choice_text' => 'No nunca estudio.', 'is_correct' => false],
                            ['choice_text' => 'Nunca no estudio.', 'is_correct' => false],
                            ['choice_text' => 'No estudio los domingos.', 'is_correct' => true],
                            ['choice_text' => 'No estudio no los domingos.', 'is_correct' => false],
                        ],
                        'explanation' => '« No estudio los domingos » est une phrase négative simple et naturelle.',
                    ],
                    [
                        'question' => 'Choisis la meilleure complétion : « Voy ___ la estación de tren. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement vers une destination s’exprime couramment avec « a » : « Voy a la estación ».',
                    ],
                    [
                        'question' => 'Quelle phrase met correctement en contraste deux idées ?',
                        'choices' => [
                            ['choice_text' => 'Quiero salir, pero está lloviendo.', 'is_correct' => true],
                            ['choice_text' => 'Quiero salir, y está lloviendo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero salir, porque está lloviendo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero salir, o está lloviendo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pero » introduit un contraste : vouloir sortir malgré la pluie.',
                    ],
                    [
                        'question' => 'Un débutant écrit « No tengo ningún libros. » Qu’est-ce qu’il faut changer ?',
                        'choices' => [
                            ['choice_text' => 'libros → libro', 'is_correct' => true],
                            ['choice_text' => 'No → Sí', 'is_correct' => false],
                            ['choice_text' => 'ningún → ningunos', 'is_correct' => false],
                            ['choice_text' => 'tengo → tiene', 'is_correct' => false],
                        ],
                        'explanation' => '« Ningún » s’accorde avec un nom masculin singulier, donc l’expression naturelle est « No tengo ningún libro ».',
                    ],
                ],
            ],
            [
                'title' => 'La structure de phrase et la grammaire intégrée',
                'description' => 'Réunir genre, accord, pronoms, formes verbales, négation et structure de phrase de base dans des situations réalistes pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase a un accord sujet-verbe correct ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vivo aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vivir aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos viven aquí.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet pluriel « mis amigos » exige la forme verbale plurielle « viven ».',
                    ],
                    [
                        'question' => 'Choisis la phrase avec un accord d’adjectif correct.',
                        'choices' => [
                            ['choice_text' => 'La oficina es grande y moderna.', 'is_correct' => true],
                            ['choice_text' => 'La oficina es grande y moderno.', 'is_correct' => false],
                            ['choice_text' => 'La oficina son grande y moderna.', 'is_correct' => false],
                            ['choice_text' => 'La oficina es grandes y moderno.', 'is_correct' => false],
                        ],
                        'explanation' => '« Oficina » est féminin singulier, donc « moderna » s’accorde avec lui. « Grande » a la même forme au singulier pour les deux genres.',
                    ],
                    [
                        'question' => 'Quelle phrase a un ordre correct et naturel ?',
                        'choices' => [
                            ['choice_text' => 'Siempre café tomo por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Siempre tomo café por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Tomo por la mañana siempre café.', 'is_correct' => false],
                            ['choice_text' => 'Café siempre tomo por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Siempre tomo café por la mañana » suit un ordre des mots naturel en espagnol.',
                    ],
                    [
                        'question' => 'Un collègue demande pourquoi Paula est absente. Quelle phrase répond clairement ?',
                        'choices' => [
                            ['choice_text' => 'Paula no aquí está porque enferma es.', 'is_correct' => false],
                            ['choice_text' => 'Paula no es aquí porque está enferma.', 'is_correct' => false],
                            ['choice_text' => 'Paula no está aquí porque está enferma.', 'is_correct' => true],
                            ['choice_text' => 'Paula no está aquí y porque está enferma.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase utilise « estar » pour le lieu/l’état et « porque » pour donner la raison.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un possessif et un nom pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Nuestros amigos viven cerca.', 'is_correct' => true],
                            ['choice_text' => 'Nuestro amigos viven cerca.', 'is_correct' => false],
                            ['choice_text' => 'Nuestras amigos viven cerca.', 'is_correct' => false],
                            ['choice_text' => 'Nuestros amigo viven cerca.', 'is_correct' => false],
                        ],
                        'explanation' => '« Amigos » est masculin pluriel, donc le possessif est « nuestros ».',
                    ],
                    [
                        'question' => 'Choisis la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'Hay una tiendas nuevas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Hay unos tienda nuevas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Está unas tiendas nuevas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Hay unas tiendas nuevas aquí.', 'is_correct' => true],
                        ],
                        'explanation' => '« Tiendas » est féminin pluriel, donc « unas tiendas nuevas » s’accorde correctement, et « hay » introduit leur existence.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un pronom d’objet direct ?',
                        'choices' => [
                            ['choice_text' => 'Compro la revista y lo leo.', 'is_correct' => false],
                            ['choice_text' => 'Compro la revista y le leo.', 'is_correct' => false],
                            ['choice_text' => 'Compro la revista y la leo.', 'is_correct' => true],
                            ['choice_text' => 'Compro la revista y las leo.', 'is_correct' => false],
                        ],
                        'explanation' => '« La revista » est féminin singulier, donc le pronom d’objet direct est « la ».',
                    ],
                    [
                        'question' => 'Un élève dit : « Ella tienen dos clases hoy. » Quelle est la version correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ella tengo dos clases hoy.', 'is_correct' => false],
                            ['choice_text' => 'Ella tiene dos clases hoy.', 'is_correct' => true],
                            ['choice_text' => 'Ella tienes dos clases hoy.', 'is_correct' => false],
                            ['choice_text' => 'Ella tienen dos clase hoy.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet singulier « ella » prend « tiene ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement l’origine et le lieu actuel ?',
                        'choices' => [
                            ['choice_text' => 'Soy de México, pero ahora estoy en España.', 'is_correct' => true],
                            ['choice_text' => 'Estoy de México, pero ahora soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Soy en México, pero ahora estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Hay de México, pero ahora estoy España.', 'is_correct' => false],
                        ],
                        'explanation' => '« Soy de México » exprime l’origine, tandis que « estoy en España » exprime le lieu actuel.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un refus négatif correct au niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'No quiero a ir.', 'is_correct' => false],
                            ['choice_text' => 'No quiero de ir.', 'is_correct' => false],
                            ['choice_text' => 'No quiero en ir.', 'is_correct' => false],
                            ['choice_text' => 'No quiero ir.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’infinitif « ir » suit directement « quiero » : « No quiero ir ».',
                    ],
                    [
                        'question' => 'Choisis la phrase naturelle pour une routine.',
                        'choices' => [
                            ['choice_text' => 'Mi hermano levantarse a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano se levanto a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano se levanta a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano levanta se a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe réfléchi « levantarse » devient « se levanta » avec « mi hermano ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'A Marta le gusta los libros.', 'is_correct' => false],
                            ['choice_text' => 'A Marta le gustan los libros.', 'is_correct' => true],
                            ['choice_text' => 'A Marta la gustan los libros.', 'is_correct' => false],
                            ['choice_text' => 'A Marta le gusto los libros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « los libros » comme chose aimée au pluriel, le verbe s’accorde au pluriel : « le gustan ».',
                    ],
                    [
                        'question' => 'Un ami dit : « Hay un problema, pero nosotros puede solucionarlo. » Qu’est-ce qu’il faut changer ?',
                        'choices' => [
                            ['choice_text' => 'Hay → Está', 'is_correct' => false],
                            ['choice_text' => 'puede → podemos', 'is_correct' => true],
                            ['choice_text' => 'problema → problemas', 'is_correct' => false],
                            ['choice_text' => 'nosotros → nuestro', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « nosotros » exige la forme de la première personne du pluriel « podemos ».',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement une expression de temps et le présent ?',
                        'choices' => [
                            ['choice_text' => 'Los lunes trabajas en casa.', 'is_correct' => false],
                            ['choice_text' => 'Los lunes trabajan en casa.', 'is_correct' => false],
                            ['choice_text' => 'Los lunes trabajar en casa.', 'is_correct' => false],
                            ['choice_text' => 'Los lunes trabajo en casa.', 'is_correct' => true],
                        ],
                        'explanation' => '« Trabajo » correspond au « yo » sous-entendu, et « los lunes » introduit naturellement une routine.',
                    ],
                    [
                        'question' => 'Quelle phrase est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una hermana y dos hermanos menores.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un hermana y dos hermanos menor.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermana y dos hermano menores.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermanas y dos hermanos menores.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les articles, les noms et l’adjectif « menores » correspondent tous correctement aux frères pluriels et à la sœur singulière.',
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
