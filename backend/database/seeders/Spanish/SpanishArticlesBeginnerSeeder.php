<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishArticlesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'articles')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les articles définis : el, la, los, las',
                'description' => 'Entraînez-vous à choisir les quatre articles définis et à les associer à des noms singuliers et pluriels familiers.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel article complète la phrase « ___ libro » quand on veut dire « le livre » ?',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'el', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro est masculin singulier, donc l’article défini est « el ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « la maison » ?',
                        'choices' => [
                            ['choice_text' => 'el casa', 'is_correct' => false],
                            ['choice_text' => 'los casa', 'is_correct' => false],
                            ['choice_text' => 'las casa', 'is_correct' => false],
                            ['choice_text' => 'la casa', 'is_correct' => true],
                        ],
                        'explanation' => 'Casa est féminin singulier, donc il prend « la ».',
                    ],
                    [
                        'question' => 'Vous parlez de plusieurs chaises. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'la sillas', 'is_correct' => false],
                            ['choice_text' => 'los sillas', 'is_correct' => false],
                            ['choice_text' => 'las sillas', 'is_correct' => true],
                            ['choice_text' => 'el sillas', 'is_correct' => false],
                        ],
                        'explanation' => 'Sillas est féminin pluriel, donc l’article défini est « las ».',
                    ],
                    [
                        'question' => 'Quelle option dit correctement « les garçons » ?',
                        'choices' => [
                            ['choice_text' => 'los chicos', 'is_correct' => true],
                            ['choice_text' => 'las chicos', 'is_correct' => false],
                            ['choice_text' => 'el chicos', 'is_correct' => false],
                            ['choice_text' => 'la chicos', 'is_correct' => false],
                        ],
                        'explanation' => 'Chicos est masculin pluriel, donc il prend « los ».',
                    ],
                    [
                        'question' => 'Une élève écrit « la perros ». Que faut-il changer ?',
                        'choices' => [
                            ['choice_text' => 'Changer « perros » en « perras ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « la » en « los ».', 'is_correct' => true],
                            ['choice_text' => 'Changer seulement « la » en « el ».', 'is_correct' => false],
                            ['choice_text' => 'Rien ; la phrase est correcte.', 'is_correct' => false],
                        ],
                        'explanation' => 'Perros est masculin pluriel, donc l’expression correcte est « los perros ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un article défini ?',
                        'choices' => [
                            ['choice_text' => 'La ventana está abierta.', 'is_correct' => true],
                            ['choice_text' => 'El ventana está abierta.', 'is_correct' => false],
                            ['choice_text' => 'Los ventana está abierta.', 'is_correct' => false],
                            ['choice_text' => 'Las ventana está abierta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ventana est féminin singulier, donc « la ventana » est correct.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « les tables » ?',
                        'choices' => [
                            ['choice_text' => 'los mesas', 'is_correct' => false],
                            ['choice_text' => 'la mesas', 'is_correct' => false],
                            ['choice_text' => 'el mesas', 'is_correct' => false],
                            ['choice_text' => 'las mesas', 'is_correct' => true],
                        ],
                        'explanation' => 'Mesas est féminin pluriel, donc l’article doit être « las ».',
                    ],
                    [
                        'question' => 'Maria voit un problème au tableau. Quelle expression lui faut-il ?',
                        'choices' => [
                            ['choice_text' => 'la problema', 'is_correct' => false],
                            ['choice_text' => 'los problema', 'is_correct' => false],
                            ['choice_text' => 'el problema', 'is_correct' => true],
                            ['choice_text' => 'las problema', 'is_correct' => false],
                        ],
                        'explanation' => 'Problema est masculin singulier, même s’il se termine en -a, donc il prend « el ».',
                    ],
                    [
                        'question' => 'Quelle phrase désigne correctement plusieurs fleurs ?',
                        'choices' => [
                            ['choice_text' => 'Los flores son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'La flores son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'Las flores son bonitas.', 'is_correct' => true],
                            ['choice_text' => 'El flores son bonitas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores est féminin pluriel, donc « las flores » est correct.',
                    ],
                    [
                        'question' => 'Quel article défini accompagne « mapa » au singulier ?',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'una', 'is_correct' => false],
                            ['choice_text' => 'el', 'is_correct' => true],
                        ],
                        'explanation' => 'Mapa est masculin singulier, donc l’article défini est « el ».',
                    ],
                    [
                        'question' => 'Quelle paire a l’article et le nom qui s’accordent dans les deux exemples ?',
                        'choices' => [
                            ['choice_text' => 'la reloj / los puertas', 'is_correct' => false],
                            ['choice_text' => 'el reloj / las puertas', 'is_correct' => true],
                            ['choice_text' => 'el reloj / los puertas', 'is_correct' => false],
                            ['choice_text' => 'la reloj / las puertas', 'is_correct' => false],
                        ],
                        'explanation' => 'Reloj est masculin singulier et puertas est féminin pluriel, donc « el reloj / las puertas » est correct.',
                    ],
                    [
                        'question' => 'Un apprenant veut dire « les jours ». Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'los días', 'is_correct' => true],
                            ['choice_text' => 'las días', 'is_correct' => false],
                            ['choice_text' => 'el días', 'is_correct' => false],
                            ['choice_text' => 'la días', 'is_correct' => false],
                        ],
                        'explanation' => 'Días est masculin pluriel, donc il prend « los ».',
                    ],
                ],
            ],
            [
                'title' => 'Les articles indéfinis : un, una, unos, unas',
                'description' => 'Apprenez à choisir les articles indéfinis en parlant d’une ou plusieurs personnes ou choses non spécifiques.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle expression signifie « une voiture » ?',
                        'choices' => [
                            ['choice_text' => 'una coche', 'is_correct' => false],
                            ['choice_text' => 'unos coche', 'is_correct' => false],
                            ['choice_text' => 'la coche', 'is_correct' => false],
                            ['choice_text' => 'un coche', 'is_correct' => true],
                        ],
                        'explanation' => 'Coche est masculin singulier, donc l’article indéfini est « un ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « une femme » ?',
                        'choices' => [
                            ['choice_text' => 'un mujer', 'is_correct' => false],
                            ['choice_text' => 'unos mujer', 'is_correct' => false],
                            ['choice_text' => 'una mujer', 'is_correct' => true],
                            ['choice_text' => 'la mujer', 'is_correct' => false],
                        ],
                        'explanation' => 'Mujer est féminin singulier, donc il prend « una » dans une expression indéfinie singulière.',
                    ],
                    [
                        'question' => 'Vous achetez plusieurs cahiers, sans qu’ils soient précis. Quelle expression convient ?',
                        'choices' => [
                            ['choice_text' => 'unas cuadernos', 'is_correct' => false],
                            ['choice_text' => 'unos cuadernos', 'is_correct' => true],
                            ['choice_text' => 'un cuadernos', 'is_correct' => false],
                            ['choice_text' => 'los cuadernos', 'is_correct' => false],
                        ],
                        'explanation' => 'Cuadernos est masculin pluriel, donc l’article indéfini pluriel est « unos ».',
                    ],
                    [
                        'question' => 'Quelle option dit correctement « quelques fleurs » ?',
                        'choices' => [
                            ['choice_text' => 'unas flores', 'is_correct' => true],
                            ['choice_text' => 'unos flores', 'is_correct' => false],
                            ['choice_text' => 'una flores', 'is_correct' => false],
                            ['choice_text' => 'las flores', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores est féminin pluriel, donc « unas flores » est correct.',
                    ],
                    [
                        'question' => 'Un ami dit : « Tengo ___ idea. » Quel article convient s’il veut dire « une idée » ?',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'una', 'is_correct' => true],
                            ['choice_text' => 'unos', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Idea est féminin singulier, donc l’article indéfini est « una ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Hay una libro en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Hay unos libro en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Hay un libro en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'Hay un libros en la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro est masculin singulier, donc « un libro » est l’expression indéfinie correcte.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « quelques chaises » ?',
                        'choices' => [
                            ['choice_text' => 'unas sillas', 'is_correct' => true],
                            ['choice_text' => 'unos sillas', 'is_correct' => false],
                            ['choice_text' => 'una sillas', 'is_correct' => false],
                            ['choice_text' => 'un sillas', 'is_correct' => false],
                        ],
                        'explanation' => 'Sillas est féminin pluriel, donc il prend « unas ».',
                    ],
                    [
                        'question' => 'Quelle phrase dirait naturellement un client qui achète un objet masculin ?',
                        'choices' => [
                            ['choice_text' => 'Quiero una teléfono.', 'is_correct' => false],
                            ['choice_text' => 'Quiero unos teléfono.', 'is_correct' => false],
                            ['choice_text' => 'Quiero la teléfono.', 'is_correct' => false],
                            ['choice_text' => 'Quiero un teléfono.', 'is_correct' => true],
                        ],
                        'explanation' => 'Teléfono est masculin singulier, donc « un teléfono » est correct.',
                    ],
                    [
                        'question' => 'Quelle option met correctement au pluriel l’expression singulière « una estudiante » ?',
                        'choices' => [
                            ['choice_text' => 'unos estudiantes', 'is_correct' => false],
                            ['choice_text' => 'una estudiantes', 'is_correct' => false],
                            ['choice_text' => 'unas estudiantes', 'is_correct' => true],
                            ['choice_text' => 'las estudiante', 'is_correct' => false],
                        ],
                        'explanation' => 'Estudiante peut désigner une femme, donc « una estudiante » devient « unas estudiantes » au féminin pluriel.',
                    ],
                    [
                        'question' => 'Quelle expression utilise correctement un article indéfini avec « problema » ?',
                        'choices' => [
                            ['choice_text' => 'una problema', 'is_correct' => false],
                            ['choice_text' => 'un problema', 'is_correct' => true],
                            ['choice_text' => 'unos problema', 'is_correct' => false],
                            ['choice_text' => 'unas problema', 'is_correct' => false],
                        ],
                        'explanation' => 'Problema est masculin singulier, malgré son -a final, donc « un problema » est correct.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « une femme et un homme » ?',
                        'choices' => [
                            ['choice_text' => 'una mujer y un hombre', 'is_correct' => true],
                            ['choice_text' => 'un mujer y una hombre', 'is_correct' => false],
                            ['choice_text' => 'una mujer y una hombre', 'is_correct' => false],
                            ['choice_text' => 'un mujer y un hombre', 'is_correct' => false],
                        ],
                        'explanation' => 'Mujer est féminin et hombre est masculin, donc les articles sont « una » et « un ».',
                    ],
                    [
                        'question' => 'Une apprenante dit : « Necesito unos agua. » Quelle est la correction de niveau débutant pour une bouteille d’eau ?',
                        'choices' => [
                            ['choice_text' => 'Necesito una agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito unas agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito unos aguas.', 'is_correct' => false],
                            ['choice_text' => 'Necesito un agua.', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour parler d’une seule quantité d’eau, « un agua » s’utilise dans des contextes de commande courants. Le nom reste grammaticalement féminin, même si « el agua » est utilisé au singulier avec l’article défini.',
                    ],
                    [
                        'question' => 'Quelle phrase est la meilleure quand quelqu’un dit avoir trouvé plusieurs clés ?',
                        'choices' => [
                            ['choice_text' => 'Encontré unos llaves.', 'is_correct' => false],
                            ['choice_text' => 'Encontré una llaves.', 'is_correct' => false],
                            ['choice_text' => 'Encontré un llaves.', 'is_correct' => false],
                            ['choice_text' => 'Encontré unas llaves.', 'is_correct' => true],
                        ],
                        'explanation' => 'Llaves est féminin pluriel, donc l’article indéfini est « unas ».',
                    ],
                    [
                        'question' => 'Quelle paire met correctement en contraste un nom non précis et plusieurs noms non précis ?',
                        'choices' => [
                            ['choice_text' => 'una libro / unas libros', 'is_correct' => false],
                            ['choice_text' => 'el libro / los libros', 'is_correct' => false],
                            ['choice_text' => 'un libro / unos libros', 'is_correct' => true],
                            ['choice_text' => 'un libro / unas libros', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour le nom masculin libro, le singulier utilise « un » et le pluriel utilise « unos ».',
                    ],
                ],
            ],
            [
                'title' => 'Choisir les articles dans des phrases courantes',
                'description' => 'Utilisez naturellement les articles définis et indéfinis dans de courtes conversations, descriptions et situations pratiques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une élève dit : « Tengo ___ mochila nueva. » Elle veut dire un sac à dos, pas un sac déjà mentionné. Quel article convient ?',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'una', 'is_correct' => true],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Mochila est féminin singulier, et le sac à dos est présenté comme un objet non précis, donc « una » convient.',
                    ],
                    [
                        'question' => 'Vous entrez dans une pièce et montrez une table précise déjà connue des deux personnes. Que diriez-vous ?',
                        'choices' => [
                            ['choice_text' => 'una mesa', 'is_correct' => false],
                            ['choice_text' => 'un mesa', 'is_correct' => false],
                            ['choice_text' => 'los mesa', 'is_correct' => false],
                            ['choice_text' => 'la mesa', 'is_correct' => true],
                        ],
                        'explanation' => 'Une table précise et identifiable prend normalement l’article défini : « la mesa ».',
                    ],
                    [
                        'question' => 'Quelle phrase introduit naturellement un nouveau livre dans une conversation ?',
                        'choices' => [
                            ['choice_text' => 'Compré un libro ayer.', 'is_correct' => true],
                            ['choice_text' => 'Compré la libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré una libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré los libro ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le livre est présenté comme un objet non précis, donc « un libro » est naturel.',
                    ],
                    [
                        'question' => 'Plus tard, vous faites référence à ce même livre. Quelle expression est plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'un libro', 'is_correct' => false],
                            ['choice_text' => 'el libro', 'is_correct' => true],
                            ['choice_text' => 'una libro', 'is_correct' => false],
                            ['choice_text' => 'los libro', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fois le livre connu dans la conversation, l’article défini « el » est approprié.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte en parlant de plusieurs clés précises sur la table ?',
                        'choices' => [
                            ['choice_text' => 'Los llaves están sobre la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Unas llaves están sobre la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Las llaves están sobre la mesa.', 'is_correct' => true],
                            ['choice_text' => 'La llaves está sobre la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les clés sont précises et au pluriel, et llaves est féminin pluriel, donc « las llaves » convient.',
                    ],
                    [
                        'question' => 'Un serveur demande ce que vous voulez. Quelle demande est naturelle pour un café ?',
                        'choices' => [
                            ['choice_text' => 'Una café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'La café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Un cafés, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Un café, por favor.', 'is_correct' => true],
                        ],
                        'explanation' => 'Café est masculin singulier, et « un café » est une façon standard de commander un café.',
                    ],
                    [
                        'question' => 'Quelle phrase introduit correctement quelques étudiantes non précises ?',
                        'choices' => [
                            ['choice_text' => 'Hay unos estudiantes en la sala.', 'is_correct' => false],
                            ['choice_text' => 'Hay unas estudiantes en la sala.', 'is_correct' => true],
                            ['choice_text' => 'Hay una estudiantes en la sala.', 'is_correct' => false],
                            ['choice_text' => 'Hay las estudiantes en la sala.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour plusieurs étudiantes présentées sans identification préalable, « unas estudiantes » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Busco una farmacia cerca del hotel.', 'is_correct' => true],
                            ['choice_text' => 'Busco un farmacia cerca de la hotel.', 'is_correct' => false],
                            ['choice_text' => 'Busco la farmacia cerca del una hotel.', 'is_correct' => false],
                            ['choice_text' => 'Busco una farmacia cerca de los hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'Farmacia est féminin singulier et hotel est masculin singulier, donc « una farmacia » et « el hotel » sont les structures correctes.',
                    ],
                    [
                        'question' => 'Un enfant voit un chien inconnu dans le parc et dit : « Mamá, mira ___ perro ! » Quel article est le plus naturel pour présenter le chien ?',
                        'choices' => [
                            ['choice_text' => 'una', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => true],
                        ],
                        'explanation' => 'Le chien est présenté comme un nom masculin non précis, donc « un perro » convient.',
                    ],
                    [
                        'question' => 'Quelle réponse est naturelle quand on vous demande si vous avez un dictionnaire précis sur votre bureau ?',
                        'choices' => [
                            ['choice_text' => 'Sí, tengo el diccionario.', 'is_correct' => true],
                            ['choice_text' => 'Sí, tengo una diccionario.', 'is_correct' => false],
                            ['choice_text' => 'Sí, tengo un diccionaria.', 'is_correct' => false],
                            ['choice_text' => 'Sí, tengo los diccionario.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dictionnaire est précis et déjà identifié, donc l’article défini « el » s’utilise avec le masculin singulier « diccionario ».',
                    ],
                ],
            ],
            [
                'title' => 'Les contractions al et del',
                'description' => 'Gagnez en confiance avec les combinaisons espagnoles courantes a + el = al et de + el = del dans des phrases de tous les jours.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle expression signifie « au parc » ?',
                        'choices' => [
                            ['choice_text' => 'al parque', 'is_correct' => true],
                            ['choice_text' => 'a el parque', 'is_correct' => false],
                            ['choice_text' => 'a la parque', 'is_correct' => false],
                            ['choice_text' => 'del parque', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol contracte normalement « a + el » en « al » : « al parque ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « de l’hôtel » ?',
                        'choices' => [
                            ['choice_text' => 'de el hotel', 'is_correct' => false],
                            ['choice_text' => 'de la hotel', 'is_correct' => false],
                            ['choice_text' => 'al hotel', 'is_correct' => false],
                            ['choice_text' => 'del hotel', 'is_correct' => true],
                        ],
                        'explanation' => 'L’espagnol contracte « de + el » en « del », donc « del hotel » est correct.',
                    ],
                    [
                        'question' => 'Complétez : « Vamos ___ mercado los sábados. »',
                        'choices' => [
                            ['choice_text' => 'del', 'is_correct' => false],
                            ['choice_text' => 'al', 'is_correct' => true],
                            ['choice_text' => 'a la', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase exprime un déplacement vers le marché, donc a + el devient « al mercado ».',
                    ],
                    [
                        'question' => 'Complétez : « Vengo ___ trabajo a las seis. »',
                        'choices' => [
                            ['choice_text' => 'al', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'del', 'is_correct' => true],
                            ['choice_text' => 'a el', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase signifie venir du travail, donc de + el se contracte en « del trabajo ».',
                    ],
                    [
                        'question' => 'Quelle phrase est écrite correctement ?',
                        'choices' => [
                            ['choice_text' => 'Llegamos a el banco temprano.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos del banco temprano.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos a la banco temprano.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos al banco temprano.', 'is_correct' => true],
                        ],
                        'explanation' => 'Banco est masculin singulier, et a + el devient « al » : « llegamos al banco ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « del » ?',
                        'choices' => [
                            ['choice_text' => 'La puerta de el edificio está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta al edificio está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta del edificio está abierta.', 'is_correct' => true],
                            ['choice_text' => 'La puerta del edificios está abierta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Edificio est masculin singulier, donc de + el devient « del edificio ».',
                    ],
                    [
                        'question' => 'Un ami dit : « Voy ___ supermercado. » Quelle réponse complète la phrase ?',
                        'choices' => [
                            ['choice_text' => 'al', 'is_correct' => true],
                            ['choice_text' => 'del', 'is_correct' => false],
                            ['choice_text' => 'a la', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => 'Supermercado est masculin singulier, et le déplacement vers ce lieu utilise a + el = « al supermercado ».',
                    ],
                    [
                        'question' => 'Quelle forme est correcte : « regreso ___ médico » ?',
                        'choices' => [
                            ['choice_text' => 'al', 'is_correct' => false],
                            ['choice_text' => 'del', 'is_correct' => true],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'a el', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le sens est « je reviens de chez le médecin », on utilise de + el = « del médico ».',
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement le déplacement vers un lieu et le fait d’en venir ?',
                        'choices' => [
                            ['choice_text' => 'Voy al museo y vuelvo del museo.', 'is_correct' => true],
                            ['choice_text' => 'Voy del museo y vuelvo al museo.', 'is_correct' => false],
                            ['choice_text' => 'Voy a el museo y vuelvo de el museo.', 'is_correct' => false],
                            ['choice_text' => 'Voy al museo y vuelvo de la museo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement vers le musée utilise al ; le déplacement depuis le musée, ou son origine, utilise del.',
                    ],
                    [
                        'question' => 'Quelle expression ne doit PAS être contractée ?',
                        'choices' => [
                            ['choice_text' => 'al parque', 'is_correct' => false],
                            ['choice_text' => 'a la escuela', 'is_correct' => true],
                            ['choice_text' => 'del hotel', 'is_correct' => false],
                            ['choice_text' => 'al mercado', 'is_correct' => false],
                        ],
                        'explanation' => 'Il n’existe pas de contraction pour a + la, donc « a la escuela » reste en deux mots.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « de el restaurante ». Quelle est la correction habituelle ?',
                        'choices' => [
                            ['choice_text' => 'al restaurante', 'is_correct' => false],
                            ['choice_text' => 'de la restaurante', 'is_correct' => false],
                            ['choice_text' => 'del restaurante', 'is_correct' => true],
                            ['choice_text' => 'restaurante del', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol contracte de + el en « del » devant un nom masculin singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mañana vamos a el cine.', 'is_correct' => false],
                            ['choice_text' => 'Mañana vamos del cine.', 'is_correct' => false],
                            ['choice_text' => 'Mañana vamos a la cine.', 'is_correct' => false],
                            ['choice_text' => 'Mañana vamos al cine.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cine est masculin singulier, donc a + el se contracte en « al cine ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « la porte de la maison » ?',
                        'choices' => [
                            ['choice_text' => 'la puerta del casa', 'is_correct' => false],
                            ['choice_text' => 'la puerta de el casa', 'is_correct' => false],
                            ['choice_text' => 'la puerta al casa', 'is_correct' => false],
                            ['choice_text' => 'la puerta de la casa', 'is_correct' => true],
                        ],
                        'explanation' => 'Casa est féminin singulier, donc de + la reste « de la casa ». La contraction del ne s’emploie qu’avec le masculin singulier el.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement les deux contractions ?',
                        'choices' => [
                            ['choice_text' => 'Salimos del hotel y vamos al aeropuerto.', 'is_correct' => true],
                            ['choice_text' => 'Salimos de el hotel y vamos a el aeropuerto.', 'is_correct' => false],
                            ['choice_text' => 'Salimos al hotel y vamos del aeropuerto.', 'is_correct' => false],
                            ['choice_text' => 'Salimos de la hotel y vamos a la aeropuerto.', 'is_correct' => false],
                        ],
                        'explanation' => 'Hotel et aeropuerto sont masculins singuliers. De + el devient donc del, et a + el devient al.',
                    ],
                ],
            ],
            [
                'title' => 'Quand l’espagnol n’utilise aucun article',
                'description' => 'Reconnaissez les situations courantes où l’espagnol peut omettre un article, surtout avec les professions et les idées plurielles ou indénombrables.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est naturelle pour dire « je suis professeur » comme profession ?',
                        'choices' => [
                            ['choice_text' => 'Soy profesor.', 'is_correct' => true],
                            ['choice_text' => 'Soy el profesor.', 'is_correct' => false],
                            ['choice_text' => 'Soy un profesor.', 'is_correct' => false],
                            ['choice_text' => 'Soy la profesor.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après ser, les professions s’emploient souvent sans article pour simplement énoncer le métier de quelqu’un : « Soy profesor ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « elle est médecin » dans une simple déclaration de profession ?',
                        'choices' => [
                            ['choice_text' => 'Ella es la médica.', 'is_correct' => false],
                            ['choice_text' => 'Ella es una médica.', 'is_correct' => false],
                            ['choice_text' => 'Ella son médica.', 'is_correct' => false],
                            ['choice_text' => 'Ella es médica.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec ser, une profession s’emploie souvent sans article quand elle identifie simplement le métier de la personne.',
                    ],
                    [
                        'question' => 'Quelle phrase est le meilleur exemple débutant d’un nom pluriel employé de façon générale ?',
                        'choices' => [
                            ['choice_text' => 'Perros necesita agua.', 'is_correct' => false],
                            ['choice_text' => 'Los perros necesitan agua.', 'is_correct' => true],
                            ['choice_text' => 'Unos perros necesitan agua.', 'is_correct' => false],
                            ['choice_text' => 'El perros necesitan agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise souvent l’article défini avec un nom pluriel pour parler d’un groupe ou d’une catégorie en général : « Los perros... ».',
                    ],
                    [
                        'question' => 'Quelle expression nomme naturellement une matière scolaire dans un contexte général ?',
                        'choices' => [
                            ['choice_text' => 'estudio las matemáticas', 'is_correct' => false],
                            ['choice_text' => 'estudio una matemáticas', 'is_correct' => false],
                            ['choice_text' => 'estudio matemáticas', 'is_correct' => true],
                            ['choice_text' => 'estudio un matemáticas', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les matières scolaires, l’espagnol omet souvent l’article dans des phrases comme « Estudio matemáticas ».',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle pour dire « je bois du café » comme habitude générale ?',
                        'choices' => [
                            ['choice_text' => 'Bebo café.', 'is_correct' => true],
                            ['choice_text' => 'Bebo el café.', 'is_correct' => false],
                            ['choice_text' => 'Bebo una café.', 'is_correct' => false],
                            ['choice_text' => 'Bebo los café.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand on parle du café comme substance indénombrable ou habitude générale, le nom peut s’employer sans article.',
                    ],
                    [
                        'question' => 'Quelle phrase fait référence à un café précis déjà identifié ?',
                        'choices' => [
                            ['choice_text' => 'Bebo café que preparaste.', 'is_correct' => false],
                            ['choice_text' => 'Bebo una café que preparaste.', 'is_correct' => false],
                            ['choice_text' => 'Bebo el café que preparaste.', 'is_correct' => true],
                            ['choice_text' => 'Bebo los café que preparaste.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici le café est précis car c’est celui que vous avez préparé, donc l’article défini « el » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour une personne qui énonce simplement sa profession ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano es el ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es la ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano son ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es ingeniero.', 'is_correct' => true],
                        ],
                        'explanation' => 'La simple déclaration d’une profession utilise normalement le nom de métier sans article après ser.',
                    ],
                    [
                        'question' => 'Une médecin dit : « Soy ___ médico », en se présentant seulement par sa profession. Quel mot est normalement omis ?',
                        'choices' => [
                            ['choice_text' => 'le verbe', 'is_correct' => false],
                            ['choice_text' => 'l’article', 'is_correct' => true],
                            ['choice_text' => 'le nom', 'is_correct' => false],
                            ['choice_text' => 'le pronom sujet seul', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une simple déclaration de profession, l’espagnol dit généralement « Soy médico/médica » sans article.',
                    ],
                    [
                        'question' => 'Quelle phrase met le plus clairement en contraste une activité générale et un objet précis ?',
                        'choices' => [
                            ['choice_text' => 'Leo los libros, pero hoy leo libros de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Leo un libros, pero hoy leo el libro de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Leo libros, pero hoy leo el libro de Ana.', 'is_correct' => true],
                            ['choice_text' => 'Leo libro, pero hoy leo unas libro de Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Libros » peut décrire la lecture comme activité générale, tandis que « el libro de Ana » identifie un livre précis.',
                    ],
                    [
                        'question' => 'Quelle affirmation est la règle débutante la plus sûre concernant les professions après ser ?',
                        'choices' => [
                            ['choice_text' => 'L’article est toujours obligatoire.', 'is_correct' => false],
                            ['choice_text' => 'Seules les professions féminines omettent l’article.', 'is_correct' => false],
                            ['choice_text' => 'Les articles ne s’utilisent jamais avec les professions, dans aucun contexte.', 'is_correct' => false],
                            ['choice_text' => 'L’article est souvent omis quand on énonce simplement la profession de quelqu’un.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’article est souvent omis dans les déclarations simples de profession, bien qu’il puisse apparaître quand le sens est plus précis.',
                    ],
                    [
                        'question' => 'Quelle phrase traite « l’eau » comme une substance générale ?',
                        'choices' => [
                            ['choice_text' => 'Bebo el agua todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Bebo agua todos los días.', 'is_correct' => true],
                            ['choice_text' => 'Bebo una agua todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Bebo las agua todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une substance employée dans un sens général, l’espagnol peut omettre l’article : « Bebo agua ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle si quelqu’un veut dire « j’étudie l’espagnol » comme matière ?',
                        'choices' => [
                            ['choice_text' => 'Estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Estudio el español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio un español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio unos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'En tant que langue ou matière scolaire, « español » s’emploie couramment sans article dans cette phrase simple.',
                    ],
                ],
            ],
            [
                'title' => 'Les articles : révision mixte pour débutants',
                'description' => 'Réunissez les articles définis, indéfinis, contractés et absents dans de courtes situations pratiques.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous montrez une fenêtre précise dans la pièce. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una ventana', 'is_correct' => false],
                            ['choice_text' => 'la ventana', 'is_correct' => true],
                            ['choice_text' => 'un ventana', 'is_correct' => false],
                            ['choice_text' => 'los ventana', 'is_correct' => false],
                        ],
                        'explanation' => 'La fenêtre est précise et féminin singulier, donc « la ventana » convient.',
                    ],
                    [
                        'question' => 'Quelle expression présente correctement plusieurs livres masculins non précis ?',
                        'choices' => [
                            ['choice_text' => 'unos libros', 'is_correct' => true],
                            ['choice_text' => 'unas libros', 'is_correct' => false],
                            ['choice_text' => 'los libros', 'is_correct' => false],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour plusieurs livres masculins non précis, on utilise « unos libros ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El profesora tiene una libro.', 'is_correct' => false],
                            ['choice_text' => 'La profesora tiene una libro.', 'is_correct' => false],
                            ['choice_text' => 'La profesora tiene un libros.', 'is_correct' => false],
                            ['choice_text' => 'La profesora tiene un libro.', 'is_correct' => true],
                        ],
                        'explanation' => 'Profesora est féminin singulier et libro est masculin singulier, donc « la profesora » et « un libro » sont corrects.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement al ?',
                        'choices' => [
                            ['choice_text' => 'Voy a el mercado después de clase.', 'is_correct' => false],
                            ['choice_text' => 'Voy del mercado después de clase.', 'is_correct' => false],
                            ['choice_text' => 'Voy al mercado después de clase.', 'is_correct' => true],
                            ['choice_text' => 'Voy a la mercado después de clase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement vers un lieu masculin singulier utilise a + el = « al mercado ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement del ?',
                        'choices' => [
                            ['choice_text' => 'El nombre de el estudiante está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El nombre al estudiante está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El nombre de la estudiante está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El nombre del estudiante está aquí.', 'is_correct' => true],
                        ],
                        'explanation' => 'Ici la phrase désigne un étudiant homme, donc de + el devient « del estudiante ».',
                    ],
                    [
                        'question' => 'Quelle phrase énonce naturellement une profession ?',
                        'choices' => [
                            ['choice_text' => 'Carlos es el arquitecto.', 'is_correct' => false],
                            ['choice_text' => 'Carlos es arquitecto.', 'is_correct' => true],
                            ['choice_text' => 'Carlos es una arquitecto.', 'is_correct' => false],
                            ['choice_text' => 'Carlos son arquitecto.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour simplement nommer la profession de Carlos, l’espagnol omet généralement l’article après ser.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte même si « mano » se termine en -o ?',
                        'choices' => [
                            ['choice_text' => 'el mano', 'is_correct' => false],
                            ['choice_text' => 'un mano', 'is_correct' => false],
                            ['choice_text' => 'la mano', 'is_correct' => true],
                            ['choice_text' => 'los mano', 'is_correct' => false],
                        ],
                        'explanation' => 'Mano est un nom féminin, donc il prend « la » même s’il se termine en -o.',
                    ],
                    [
                        'question' => 'Un ami dit : « Compré una mesa. ___ mesa es de madera. » Quel article complète la deuxième phrase ?',
                        'choices' => [
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Una', 'is_correct' => false],
                            ['choice_text' => 'El', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => false],
                        ],
                        'explanation' => 'La table a déjà été présentée, donc la deuxième mention utilise l’article défini : « la mesa ».',
                    ],
                    [
                        'question' => 'Quelle phrase parle de l’eau dans un sens général ?',
                        'choices' => [
                            ['choice_text' => 'Necesito la agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito agua.', 'is_correct' => true],
                            ['choice_text' => 'Necesito las agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito un agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand l’eau est entendue comme substance générale, l’article peut être omis : « Necesito agua ».',
                    ],
                    [
                        'question' => 'Quelle phrase fait référence à une eau précise déjà identifiée ?',
                        'choices' => [
                            ['choice_text' => 'Necesito agua de la botella.', 'is_correct' => false],
                            ['choice_text' => 'Necesito una agua de la botella.', 'is_correct' => false],
                            ['choice_text' => 'Necesito el agua de la botella.', 'is_correct' => true],
                            ['choice_text' => 'Necesito los agua de la botella.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau est précise car c’est celle de la bouteille, donc l’article défini s’utilise. « El agua » est la forme singulière standard ici.',
                    ],
                    [
                        'question' => 'Quelle paire met correctement en contraste « un hôtel » et « l’hôtel » ?',
                        'choices' => [
                            ['choice_text' => 'un hotel / el hotel', 'is_correct' => true],
                            ['choice_text' => 'una hotel / la hotel', 'is_correct' => false],
                            ['choice_text' => 'un hotel / la hotel', 'is_correct' => false],
                            ['choice_text' => 'una hotel / el hotel', 'is_correct' => false],
                        ],
                        'explanation' => 'Hotel est masculin singulier, donc les articles indéfini et défini sont « un » et « el ».',
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
